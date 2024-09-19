<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_barang_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_barang/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_barang/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_barang_model->total_rows($q);
        $tbl_barang = $this->Tbl_barang_model->get_all();
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_barang_data' => $tbl_barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_barang/tbl_barang_list', $data);
    }


    public function multiple_upload() {
        $files = $_FILES;
        $count = count($_FILES['foto']['name']);
        $images_a = [];
        $images_b = [];
        $images_c = [];
    
        for($i=0; $i<$count; $i++) {
            $_FILES['userfile']['name'] = $files['foto']['name'][$i];
            $_FILES['userfile']['type'] = $files['foto']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['foto']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['foto']['error'][$i];
            $_FILES['userfile']['size'] = $files['foto']['size'][$i];
    
            $this->upload->initialize($this->set_upload_options());
    
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data();
                // Pisahkan gambar sesuai dengan kondisi atau kebutuhan
                if ($i < $count / 3) {
                    $images_a[] = $data['file_name'];  // Untuk foto
                } elseif ($i < 2 * $count / 3) {
                    $images_b[] = $data['file_name'];  // Untuk foto_b
                } else {
                    $images_c[] = $data['file_name'];  // Untuk foto_c
                }
            }
        }
    
        // Simpan data ke database
        $this->save_to_db($images_a, $images_b, $images_c);
    }
    
    private function save_to_db($images_a, $images_b, $images_c) {
        $this->load->database();
        $this->_rules();
        
        $images_string_a = implode(',', $images_a);
        $images_string_b = implode(',', $images_b);
        $images_string_c = implode(',', $images_c);
    
        $data = [
            'foto' => $images_string_a,  // Field foto
            'foto_b' => $images_string_b,  // Field foto_b
            'foto_c' => $images_string_c,  // Field foto_c
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_a' => $this->input->post('harga_a'),
            'harga_b' => $this->input->post('harga_b'),
            'harga_c' => $this->input->post('harga_c'),
            'id_satuan' => $this->input->post('id_satuan'),
        ];
    
        $this->db->insert('tbl_barang', $data);
        $this->session->set_flashdata('message', 'Create Record Success !');
        redirect(site_url('tbl_barang'));
    }
    

    private function set_upload_options() {
        //upload an image options
        $config = [];
        $config['upload_path'] = './assets/foto_barang/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '4096';
        //$config['max_width'] = '1024';
        //$config['max_height'] = '768';
        $config['encrypt_name'] = TRUE;
        return $config;
    }

    public function read($id) 
    {
        $row = $this->Tbl_barang_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_barang' => $row->id_barang,
                'id_kategori' => $row->id_kategori,
                'nama_barang' => $row->nama_barang,
                'harga_a' => $row->harga_a,
                'harga_b' => $row->harga_b,
                'harga_c' => $row->harga_c,
	    );
            $this->template->load('template','tbl_barang/tbl_barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_barang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_barang/multiple_upload'),
            'id_barang' => set_value('id_barang'),
            'id_satuan' => set_value('id_satuan'),
            'id_kategori' => set_value('id_kategori'),
            'foto' => set_value('foto'),
            'nama_barang' => set_value('nama_barang'),
            'harga_a' => set_value('harga_a'),
            'harga_b' => set_value('harga_b'),
            'harga_c' => set_value('harga_c'),
	);
        $this->template->load('template','tbl_barang/tbl_barang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'harga_a' => $this->input->post('harga_a',TRUE),
		'harga_b' => $this->input->post('harga_b',TRUE),
		'harga_c' => $this->input->post('harga_c',TRUE),
        'id_satuan' => $this->input->post('id_satuan',TRUE),
	    );

            $this->Tbl_barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success !');
            redirect(site_url('tbl_barang'));
        }
    }

    public function update_data() {
        $this->load->library('upload');
        
        // Ambil data yang akan diupdate dari database
        $this->load->database();
        $query = $this->db->get_where('tbl_barang', ['id_barang' => $this->input->post('id_barang')]);
        $data = $query->row();
    
        // Proses upload foto baru (jika ada)
        $files = $_FILES;
    
        // Array untuk menyimpan hasil upload
        $images_a = [];
        $images_b = [];
        $images_c = [];
    
        // Upload untuk foto (foto utama)
        $count_a = count($files['foto']['name']);
        for($i = 0; $i < $count_a; $i++) {
            if (!empty($files['foto']['name'][$i])) {
                $_FILES['userfile']['name'] = $files['foto']['name'][$i];
                $_FILES['userfile']['type'] = $files['foto']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['foto']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['foto']['error'][$i];
                $_FILES['userfile']['size'] = $files['foto']['size'][$i];
                
                $this->upload->initialize($this->set_upload_options());
                if ($this->upload->do_upload('userfile')) {
                    $new_data = $this->upload->data();
                    $images_a[] = $new_data['file_name'];
                }
            }
        }
    
        // Upload untuk foto_b
        $count_b = count($files['foto_b']['name']);
        for($i = 0; $i < $count_b; $i++) {
            if (!empty($files['foto_b']['name'][$i])) {
                $_FILES['userfile']['name'] = $files['foto_b']['name'][$i];
                $_FILES['userfile']['type'] = $files['foto_b']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['foto_b']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['foto_b']['error'][$i];
                $_FILES['userfile']['size'] = $files['foto_b']['size'][$i];
                
                $this->upload->initialize($this->set_upload_options());
                if ($this->upload->do_upload('userfile')) {
                    $new_data = $this->upload->data();
                    $images_b[] = $new_data['file_name'];
                }
            }
        }
    
        // Upload untuk foto_c
        $count_c = count($files['foto_c']['name']);
        for($i = 0; $i < $count_c; $i++) {
            if (!empty($files['foto_c']['name'][$i])) {
                $_FILES['userfile']['name'] = $files['foto_c']['name'][$i];
                $_FILES['userfile']['type'] = $files['foto_c']['type'][$i];
                $_FILES['userfile']['tmp_name'] = $files['foto_c']['tmp_name'][$i];
                $_FILES['userfile']['error'] = $files['foto_c']['error'][$i];
                $_FILES['userfile']['size'] = $files['foto_c']['size'][$i];
                
                $this->upload->initialize($this->set_upload_options());
                if ($this->upload->do_upload('userfile')) {
                    $new_data = $this->upload->data();
                    $images_c[] = $new_data['file_name'];
                }
            }
        }
    
        // Gabungkan gambar lama dan baru untuk masing-masing field
        $old_images_a = !empty($data->foto) ? explode(',', $data->foto) : [];
        $images_a = array_merge($old_images_a, $images_a);
    
        $old_images_b = !empty($data->foto_b) ? explode(',', $data->foto_b) : [];
        $images_b = array_merge($old_images_b, $images_b);
    
        $old_images_c = !empty($data->foto_c) ? explode(',', $data->foto_c) : [];
        $images_c = array_merge($old_images_c, $images_c);
    
        // Update data di database
        $images_string_a = implode(',', $images_a);
        $images_string_b = implode(',', $images_b);
        $images_string_c = implode(',', $images_c);
    
        $this->_rules();
    
        $update_data = [
            'foto' => $images_string_a,   // Update field foto
            'foto_b' => $images_string_b, // Update field foto_b
            'foto_c' => $images_string_c, // Update field foto_c
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_a' => $this->input->post('harga_a'),
            'harga_b' => $this->input->post('harga_b'),
            'id_satuan' => $this->input->post('id_satuan'),
            'harga_c' => $this->input->post('harga_c'),
        ];
    
        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('tbl_barang', $update_data);
    
        // Redirect atau tampilkan pesan sukses
        $this->session->set_flashdata('message', 'Update Record Success !');
        redirect(site_url('tbl_barang'));
    }
    

    public function delete_photo() {
        // Retrieve the photo URL from the form submission
        $photo_url = $this->input->post('photo_url');
        $id = $this->input->post('id_barang');
    
        // Perform deletion logic (update your database accordingly)
        // Example: Delete from database
        $success = $this->Tbl_barang_model->delete_photo_by_url($id, $photo_url);
    
        if ($success) {
            // Redirect or refresh the page after deletion
            redirect('tbl_barang');
        } else {
            // Handle deletion failure
            echo "Failed to delete photo.";
        }
    }

    public function delete_photo_b() {
        // Retrieve the photo URL from the form submission
        $photo_url = $this->input->post('photo_url');
        $id = $this->input->post('id_barang');
    
        // Perform deletion logic (update your database accordingly)
        // Example: Delete from database
        $success = $this->Tbl_barang_model->delete_photo_by_url_b($id, $photo_url);
    
        if ($success) {
            // Redirect or refresh the page after deletion
            redirect('tbl_barang');
        } else {
            // Handle deletion failure
            echo "Failed to delete photo.";
        }
    }

    public function delete_photo_c() {
        // Retrieve the photo URL from the form submission
        $photo_url = $this->input->post('photo_url');
        $id = $this->input->post('id_barang');
    
        // Perform deletion logic (update your database accordingly)
        // Example: Delete from database
        $success = $this->Tbl_barang_model->delete_photo_by_url_c($id, $photo_url);
    
        if ($success) {
            // Redirect or refresh the page after deletion
            redirect('tbl_barang');
        } else {
            // Handle deletion failure
            echo "Failed to delete photo.";
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_barang/update_data'),
                'id_barang' => set_value('id_barang', $row->id_barang),
                'id_kategori' => set_value('id_kategori', $row->id_kategori),
                'nama_barang' => set_value('nama_barang', $row->nama_barang),
                'foto' => set_value('foto', $row->foto),
                'harga_a' => set_value('harga_a', $row->harga_a),
                'harga_b' => set_value('harga_b', $row->harga_b),
                'harga_c' => set_value('harga_c', $row->harga_c),
                'id_satuan' => set_value('id_satuan', $row->id_satuan),
	    );
            $this->template->load('template','tbl_barang/tbl_barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
            $data = array(
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'harga_a' => $this->input->post('harga_a',TRUE),
		'harga_b' => $this->input->post('harga_b',TRUE),
        'id_satuan' => $this->input->post('id_satuan',TRUE),
		'harga_c' => $this->input->post('harga_c',TRUE),
	    );

            $this->Tbl_barang_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_barang_model->get_by_id($id);

        if ($row) {
            $this->Tbl_barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_barang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	$this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
	$this->form_validation->set_rules('harga_a', 'harga a', 'trim|required');
	$this->form_validation->set_rules('harga_b', 'harga b', 'trim|required');
	$this->form_validation->set_rules('harga_c', 'harga c', 'trim|required');

	$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_barang.php */
/* Location: ./application/controllers/Tbl_barang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-01 06:42:43 */
/* http://harviacode.com */