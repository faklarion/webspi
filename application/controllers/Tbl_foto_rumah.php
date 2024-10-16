<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_foto_rumah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_foto_rumah_model');
        $this->load->model('Tbl_foto_denah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_foto_rumah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_foto_rumah/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_foto_rumah/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_foto_rumah_model->total_rows($q);
        $tbl_foto_rumah = $this->Tbl_foto_rumah_model->get_all();
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_foto_rumah_data' => $tbl_foto_rumah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_foto_rumah/tbl_foto_rumah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_foto_rumah_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_foto_rumah' => $row->id_foto_rumah,
                'id_tipe' => $row->id_tipe,
                'ukuran_awal' => $row->ukuran_awal,
                'foto' => $row->foto,
	    );
            $this->template->load('template','tbl_foto_rumah/tbl_foto_rumah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_rumah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_foto_rumah/create_action'),
            'id_foto_rumah' => set_value('id_foto_rumah'),
            'id_tipe' => set_value('id_tipe'),
            'desain' => set_value('desain'),
            'ukuran_awal' => set_value('ukuran_awal'),
            'foto' => set_value('foto'),
	);
        $this->template->load('template','tbl_foto_rumah/tbl_foto_rumah_create', $data);
    }
    
    public function create_action() 
    {
        $id_tipe = $this->input->post('id_tipe', TRUE);
        $id_jenis = $this->input->post('id_jenis', TRUE);
        $desain = $this->input->post('desain', TRUE);
        $ukuran_awal = $this->input->post('ukuran_awal', TRUE);

        // Cek duplikasi
        if ($this->Tbl_foto_rumah_model->check_duplicate($id_tipe, $id_jenis, $desain, $ukuran_awal)) {
            $this->session->set_flashdata('message', 'Data duplikat. Kombinasi id_tipe, id_jenis, desain, dan ukuran_awal sudah ada.');
            redirect(site_url('tbl_foto_rumah'));
        } else {
            // Handle upload foto dan foto denah (seperti yang dijelaskan sebelumnya)
            $this->load->library('upload');

            // Handle foto rumah
            $foto_files = [];
            $this->upload->initialize($this->set_upload_options());
            if (!empty($_FILES['foto']['name'])) {
                $filesCount = count($_FILES['foto']['name']);
                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES['foto_file']['name'] = $_FILES['foto']['name'][$i];
                    $_FILES['foto_file']['type'] = $_FILES['foto']['type'][$i];
                    $_FILES['foto_file']['tmp_name'] = $_FILES['foto']['tmp_name'][$i];
                    $_FILES['foto_file']['error'] = $_FILES['foto']['error'][$i];
                    $_FILES['foto_file']['size'] = $_FILES['foto']['size'][$i];

                    if ($this->upload->do_upload('foto_file')) {
                        $uploadData = $this->upload->data();
                        $foto_files[] = $uploadData['file_name'];
                    }
                }
            }

            // Convert array to string (or JSON if needed)
            $foto_files_str = implode(',', $foto_files); // Or use json_encode($foto_files)

            $data = array(
                'id_tipe' => $id_tipe,
                'id_jenis' => $id_jenis,
                'desain' => $desain,
                'ukuran_awal' => $ukuran_awal,
                'foto' => $foto_files_str,
            );

            $this->Tbl_foto_rumah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success!');
            redirect(site_url('tbl_foto_rumah'));
        }
    }


    public function add_foto_denah_action() 
    {
        $id_foto_rumah  = $this->input->post('id_foto_rumah', TRUE);
        $kamar          = $this->input->post('kamar', TRUE);
        $wc             = $this->input->post('wc', TRUE);

        // Cek duplikasi
        if ($this->Tbl_foto_denah_model->check_duplicate($id_foto_rumah, $kamar, $wc)) {
            $this->session->set_flashdata('message', 'Data duplikat. Kombinasi jenis/tipe rumah, kamar, wc sudah ada!');
            redirect(site_url('tbl_foto_rumah'));
        } else {
            // Handle upload foto dan foto denah
            $this->load->library('upload');

            // Handle foto denah (periksa nama input field 'foto_denah')
            $foto_files = [];
            $this->upload->initialize($this->set_upload_options_denah()); // Sesuaikan opsi upload

            if (!empty($_FILES['foto_denah']['name'])) {
                $filesCount = count($_FILES['foto_denah']['name']);
                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES['denah_file']['name'] = $_FILES['foto_denah']['name'][$i];
                    $_FILES['denah_file']['type'] = $_FILES['foto_denah']['type'][$i];
                    $_FILES['denah_file']['tmp_name'] = $_FILES['foto_denah']['tmp_name'][$i];
                    $_FILES['denah_file']['error'] = $_FILES['foto_denah']['error'][$i];
                    $_FILES['denah_file']['size'] = $_FILES['foto_denah']['size'][$i];

                    if ($this->upload->do_upload('denah_file')) {
                        $uploadData = $this->upload->data();
                        $foto_files[] = $uploadData['file_name'];
                    } else {
                        // Handle error upload jika diperlukan
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect(site_url('tbl_foto_rumah'));
                    }
                }
            }

            // Convert array to string (or JSON if needed)
            $foto_files_str = implode(',', $foto_files); // Or use json_encode($foto_files)

            // Simpan data ke database
            $data = array(
                'id_foto_rumah' => $id_foto_rumah,
                'kamar' => $kamar,
                'wc' => $wc,
                'foto_denah' => $foto_files_str,
            );

            $this->Tbl_foto_denah_model->insert($data);
            $this->session->set_flashdata('message', 'Add Foto Denah Success!');
            redirect(site_url('tbl_foto_rumah'));
        }
    }

    
    public function update($id) 
    {
        $row = $this->Tbl_foto_rumah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_foto_rumah/update_action'),
                'id_foto_rumah' => set_value('id_foto_rumah', $row->id_foto_rumah),
                'id_tipe' => set_value('id_tipe', $row->id_tipe),
                'ukuran_awal' => set_value('ukuran_awal', $row->ukuran_awal),
                'id_jenis' => set_value('id_jenis', $row->id_jenis),
                'foto' => set_value('foto', $row->foto),
                'desain' => set_value('desain', $row->desain),
	    );
            $this->template->load('template','tbl_foto_rumah/tbl_foto_rumah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_rumah'));
        }
    }


    public function update_foto_denah($id) 
    {
        $row = $this->Tbl_foto_denah_model->get_by_id_join($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_foto_rumah/update_foto_denah_action'),
                'id_foto_denah' => set_value('id_foto_denah', $row->id_foto_denah),
                'id_foto_rumah' => set_value('id_foto_rumah', $row->id_foto_rumah),
                'ukuran_awal' => set_value('id_foto_rumah', $row->ukuran_awal),
                'id_jenis' => set_value('id_jenis', $row->id_jenis),
                'id_tipe' => set_value('id_tipe', $row->id_tipe),
                'desain' => set_value('desain', $row->desain),
                'kamar' => set_value('kamar', $row->kamar),
                'wc' => set_value('wc', $row->wc),
                'foto_denah' => set_value('foto_denah', $row->foto_denah),
	    );
            $this->template->load('template','tbl_foto_rumah/edit_foto_denah', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_rumah'));
        }
    }

    public function add_foto_denah($id) 
    {
        $row = $this->Tbl_foto_rumah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Tambah',
                'action' => site_url('tbl_foto_rumah/add_foto_denah_action'),
                'id_foto_rumah' => set_value('id_foto_rumah', $row->id_foto_rumah),
                'id_jenis' => set_value('id_jenis', $row->id_jenis),
                'id_tipe' => set_value('id_tipe', $row->id_tipe),
                'desain' => set_value('desain', $row->desain),
                'ukuran_awal' => set_value('ukuran_awal', $row->ukuran_awal),
	    );
            $this->template->load('template','tbl_foto_rumah/add_foto_denah', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_rumah'));
        }
    }

    private function set_upload_options() {
        //upload an image options
        $config = [];
        $config['upload_path'] = './assets/rumah/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //$config['max_size'] = '4096';
        //$config['max_width'] = '1024';
        //$config['max_height'] = '768';
        $config['encrypt_name'] = TRUE;
        return $config;
    }

    private function set_upload_options_denah() {
        //upload an image options
        $config = [];
        $config['upload_path'] = './assets/denah/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //$config['max_size'] = '4096';
        //$config['max_width'] = '1024';
        //$config['max_height'] = '768';
        $config['encrypt_name'] = TRUE;
        return $config;
    }
    
    public function update_action() 
    {
        $this->load->library('upload');
        
        // Ambil data yang akan diupdate dari database
        $this->load->database();
        $query = $this->db->get_where('tbl_foto_rumah', ['id_foto_rumah' => $this->input->post('id_foto_rumah')]);
        $data = $query->row();
    
        // Proses upload file baru untuk `foto`
        $files = $_FILES;
        $count = count($_FILES['foto']['name']);
        $images = [];
    
        // Jika gambar lama ada, hapus dari folder
        if (!empty($data->foto)) {
            $old_images = explode(',', $data->foto);
            foreach ($old_images as $old_image) {
                if (file_exists('./assets/rumah/' . $old_image)) {
                    unlink('./assets/rumah/' . $old_image); // Hapus gambar lama
                }
            }
        }
    
        // Upload gambar baru
        for ($i = 0; $i < $count; $i++) {
            $_FILES['userfile']['name'] = $files['foto']['name'][$i];
            $_FILES['userfile']['type'] = $files['foto']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['foto']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['foto']['error'][$i];
            $_FILES['userfile']['size'] = $files['foto']['size'][$i];
    
            $this->upload->initialize($this->set_upload_options()); // Konfigurasi upload untuk `foto`
            if ($this->upload->do_upload('userfile')) {
                $new_data = $this->upload->data();
                $images[] = $new_data['file_name'];
            } else {
                // Handle error upload jika diperlukan
            }
        }
    
        // Convert array to string
        $images_string = implode(',', $images);
        
        // Update data di database
        $this->_rules();
        $update_data = [
            'foto' => $images_string,
            // Tambahkan field lain yang perlu diupdate
        ];
    
        $this->db->where('id_foto_rumah', $this->input->post('id_foto_rumah'));
        $this->db->update('tbl_foto_rumah', $update_data);
        
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('tbl_foto_rumah'));
    }

    public function update_foto_denah_action() 
    {
        $this->load->library('upload');
        
        // Ambil data yang akan diupdate dari database
        $this->load->database();
        $query = $this->db->get_where('tbl_foto_denah', ['id_foto_denah' => $this->input->post('id_foto_denah')]);
        $data = $query->row();
    
        // Proses upload file baru untuk `foto`
        $files = $_FILES;
        $count = count($_FILES['foto_denah']['name']);
        $images = [];
    
        // Jika gambar lama ada, hapus dari folder
        if (!empty($data->foto_denah)) {
            $old_images = explode(',', $data->foto_denah);
            foreach ($old_images as $old_image) {
                if (file_exists('./assets/denah/' . $old_image)) {
                    unlink('./assets/denah/' . $old_image); // Hapus gambar lama
                }
            }
        }
    
        // Upload gambar baru
        for ($i = 0; $i < $count; $i++) {
            $_FILES['userfile']['name'] = $files['foto_denah']['name'][$i];
            $_FILES['userfile']['type'] = $files['foto_denah']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['foto_denah']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['foto_denah']['error'][$i];
            $_FILES['userfile']['size'] = $files['foto_denah']['size'][$i];
    
            $this->upload->initialize($this->set_upload_options_denah()); // Konfigurasi upload untuk `foto`
            if ($this->upload->do_upload('userfile')) {
                $new_data = $this->upload->data();
                $images[] = $new_data['file_name'];
            } else {
                // Handle error upload jika diperlukan
            }
        }
    
        // Convert array to string
        $images_string = implode(',', $images);
        
        // Update data di database
        $this->_rules();
        $update_data = [
            'foto_denah' => $images_string,
            // Tambahkan field lain yang perlu diupdate
        ];
    
        $this->db->where('id_foto_denah', $this->input->post('id_foto_denah'));
        $this->db->update('tbl_foto_denah', $update_data);
        
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('tbl_foto_rumah'));
    }
    
    

    
    public function delete($id) 
    {
        // Ambil data berdasarkan ID
        $row = $this->Tbl_foto_rumah_model->get_by_id($id);
    
        if ($row) {
            // Ambil daftar gambar yang akan dihapus
            $images = explode(',', $row->foto); // Jika gambar disimpan dalam format string terpisah dengan koma
    
            // Hapus setiap gambar dari folder assets/rumah
            foreach ($images as $image) {
                $file_path = './assets/rumah/' . trim($image); // Lokasi file gambar
    
                // Periksa apakah file ada dan hapus
                if (file_exists($file_path)) {
                    unlink($file_path); // Hapus file
                }
            }
    
            // Hapus data dari database
            $this->Tbl_foto_rumah_model->delete($id);
    
            // Set pesan sukses
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_foto_rumah'));
        } else {
            // Set pesan jika data tidak ditemukan
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_rumah'));
        }
    }

    public function delete_foto_denah($id) 
    {
        // Ambil data berdasarkan ID
        $row = $this->Tbl_foto_denah_model->get_by_id($id);
    
        if ($row) {
            // Ambil daftar gambar yang akan dihapus
            $images = explode(',', $row->foto_denah); // Jika gambar disimpan dalam format string terpisah dengan koma
    
            // Hapus setiap gambar dari folder assets/denah
            foreach ($images as $image) {
                $file_path = './assets/denah/' . trim($image); // Lokasi file gambar
    
                // Periksa apakah file ada dan hapus
                if (file_exists($file_path)) {
                    unlink($file_path); // Hapus file
                }
            }
    
            // Hapus data dari database
            $this->Tbl_foto_denah_model->delete($id);
    
            // Set pesan sukses
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_foto_rumah'));
        } else {
            // Set pesan jika data tidak ditemukan
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_rumah'));
        }
    }
    

    public function delete_photo() {
        // Retrieve the photo URL from the form submission
        $photo_url = $this->input->post('photo_url');
        $id = $this->input->post('id_foto_rumah');
    
        // Perform deletion logic (update your database accordingly)
        // Example: Delete from database
        $success = $this->Tbl_foto_rumah_model->delete_photo_rumah_by_url($id, $photo_url);
    
        if ($success) {
            // Redirect or refresh the page after deletion
            $this->session->set_flashdata('message', 'Foto Deleting Success');
            redirect('tbl_foto_rumah');
        } else {
            // Handle deletion failure
            echo "Failed to delete photo.";
        }
    }

    public function delete_photo_denah() {
        // Retrieve the photo URL from the form submission
        $photo_url = $this->input->post('photo_url');
        $id = $this->input->post('id_foto_rumah');
    
        // Perform deletion logic (update your database accordingly)
        // Example: Delete from database
        $success = $this->Tbl_foto_rumah_model->delete_photo_denah_by_url($id, $photo_url);
    
        if ($success) {
            // Redirect or refresh the page after deletion
            $this->session->set_flashdata('message', 'Foto Denah Deleting Success');
            redirect('tbl_foto_rumah');
        } else {
            // Handle deletion failure
            echo "Failed to delete photo.";
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_tipe', 'id tipe', 'trim|required');
	$this->form_validation->set_rules('ukuran_awal', 'ukuran awal', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('id_foto_rumah', 'id_foto_rumah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_foto_rumah.php */
/* Location: ./application/controllers/Tbl_foto_rumah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-26 05:57:15 */
/* http://harviacode.com */