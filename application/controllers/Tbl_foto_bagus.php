<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_foto_bagus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_bagus_model');
        $this->load->model('Tbl_foto_bagus_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_foto_bagus/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_foto_bagus/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_foto_bagus/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_foto_bagus_model->total_rows($q);
        $tbl_foto_bagus = $this->Tbl_foto_bagus_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_foto_bagus_data' => $tbl_foto_bagus,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_foto_bagus/tbl_foto_bagus_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_foto_bagus_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_foto' => $row->id_foto,
		'id_bagus' => $row->id_bagus,
		'foto' => $row->foto,
	    );
            $this->template->load('template','tbl_foto_bagus/tbl_foto_bagus_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_bagus'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_foto_bagus/create_action'),
            'id_foto' => set_value('id_foto'),
            'id_bagus' => set_value('id_bagus'),
            'foto' => set_value('foto'),
	);
        $this->template->load('template','tbl_foto_bagus/tbl_foto_bagus_form', $data);
    }

    public function create_denah() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_foto_bagus/create_denah_action'),
            'id_foto' => set_value('id_foto'),
            'id_bagus' => set_value('id_bagus'),
            'foto' => set_value('foto'),
	);
        $this->template->load('template','tbl_foto_bagus/tbl_foto_bagus_form', $data);
    }

    function upload_foto(){
        $config['upload_path']          = './assets/foto_bagus';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        return $this->upload->data();
    }

    private function set_upload_options() {
        //upload an image options
        $config = [];
        $config['upload_path'] = './assets/foto_bagus/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size'] = '4096';
        //$config['max_width'] = '1024';
        //$config['max_height'] = '768';
        $config['encrypt_name'] = TRUE;
        return $config;
    }
    
    public function create_action() 
    {
        $this->load->library('upload');
        
        // Ambil data yang akan diupdate dari database
        $this->load->database();
        $query = $this->db->get_where('tbl_bagus', ['id_bagus' => $this->input->post('id_bagus')]);
        $data = $query->row();
    
        // Proses upload file baru (jika ada)
        $files = $_FILES;
        $count = count($_FILES['foto']['name']);
        $images = [];
        
        for($i=0; $i<$count; $i++) {
            $_FILES['userfile']['name'] = $files['foto']['name'][$i];
            $_FILES['userfile']['type'] = $files['foto']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['foto']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['foto']['error'][$i];
            $_FILES['userfile']['size'] = $files['foto']['size'][$i];
            
            $this->upload->initialize($this->set_upload_options());
            if ($this->upload->do_upload('userfile')) {
                $new_data = $this->upload->data();
                $images[] = $new_data['file_name'];
            } else {
                // Handle error upload jika diperlukan
            }
        }
    
        // Gabungkan foto lama dan baru
        if (!empty($images)) {
            $old_images = !empty($data->foto) ? explode(',', $data->foto) : [];
            $images = array_merge($old_images, $images);
        } else {
            $images = !empty($data->foto) ? explode(',', $data->foto) : [];
        }
    
        // Update data di database
        $images_string = implode(',', $images);
        $this->_rules();
        $update_data = [
            'foto' => $images_string,
            // Tambahkan field lain yang perlu diupdate
        ];
    
        $this->db->where('id_bagus', $this->input->post('id_bagus'));
        $this->db->update('tbl_bagus', $update_data);
    
        // Redirect atau tampilkan pesan sukses
        $this->session->set_flashdata('message', 'Update Foto Succes !');
        redirect(site_url('tbl_bagus'));
    }

    public function create_denah_action() 
    {
        $this->load->library('upload');
        
        // Ambil data yang akan diupdate dari database
        $this->load->database();
        $query = $this->db->get_where('tbl_bagus', ['id_bagus' => $this->input->post('id_bagus')]);
        $data = $query->row();
    
        // Proses upload file baru (jika ada)
        $files = $_FILES;
        $count = count($_FILES['foto']['name']);
        $images = [];
        
        for($i=0; $i<$count; $i++) {
            $_FILES['userfile']['name'] = $files['foto']['name'][$i];
            $_FILES['userfile']['type'] = $files['foto']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['foto']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['foto']['error'][$i];
            $_FILES['userfile']['size'] = $files['foto']['size'][$i];
            
            $this->upload->initialize($this->set_upload_options());
            if ($this->upload->do_upload('userfile')) {
                $new_data = $this->upload->data();
                $images[] = $new_data['file_name'];
            } else {
                // Handle error upload jika diperlukan
            }
        }
    
        // Gabungkan foto lama dan baru
        if (!empty($images)) {
            $old_images = !empty($data->foto_denah) ? explode(',', $data->foto_denah) : [];
            $images = array_merge($old_images, $images);
        } else {
            $images = !empty($data->foto_denah) ? explode(',', $data->foto_denah) : [];
        }
    
        // Update data di database
        $images_string = implode(',', $images);
        $this->_rules();
        $update_data = [
            'foto_denah' => $images_string,
            // Tambahkan field lain yang perlu diupdate
        ];
    
        $this->db->where('id_bagus', $this->input->post('id_bagus'));
        $this->db->update('tbl_bagus', $update_data);
    
        // Redirect atau tampilkan pesan sukses
        $this->session->set_flashdata('message', 'Update Foto Denah Succes !');
        redirect(site_url('tbl_bagus'));
    }

    public function delete_photo_denah() {
        // Retrieve the photo URL from the form submission
        $photo_url = $this->input->post('photo_url');
        $id = $this->input->post('id_bagus');
    
        // Perform deletion logic (update your database accordingly)
        // Example: Delete from database
        $success = $this->Tbl_bagus_model->delete_photo_by_url($id, $photo_url);
    
        if ($success) {
            // Redirect or refresh the page after deletion
            redirect('tbl_bagus');
        } else {
            // Handle deletion failure
            echo "Failed to delete photo.";
        }
    }

    public function delete_photo() {
        // Retrieve the photo URL from the form submission
        $photo_url = $this->input->post('photo_url');
        $id = $this->input->post('id_bagus');
    
        // Perform deletion logic (update your database accordingly)
        // Example: Delete from database
        $success = $this->Tbl_bagus_model->delete_photo_rumah_by_url($id, $photo_url);
    
        if ($success) {
            // Redirect or refresh the page after deletion
            redirect('tbl_bagus');
        } else {
            // Handle deletion failure
            echo "Failed to delete photo.";
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_foto_bagus_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_foto_bagus/update_action'),
		'id_foto' => set_value('id_foto', $row->id_foto),
		'id_bagus' => set_value('id_bagus', $row->id_bagus),
		'foto' => set_value('foto', $row->foto),
	    );
            $this->template->load('template','tbl_foto_bagus/tbl_foto_bagus_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_bagus'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_foto', TRUE));
        } else {
            $data = array(
		'id_bagus' => $this->input->post('id_bagus',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Tbl_foto_bagus_model->update($this->input->post('id_foto', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_foto_bagus'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_foto_bagus_model->get_by_id($id);

        if ($row) {
            $this->Tbl_foto_bagus_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_bagus'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_bagus'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_bagus', 'id bagus', 'trim|required');
	//$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('id_foto', 'id_foto', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_foto_bagus.php */
/* Location: ./application/controllers/Tbl_foto_bagus.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-02 04:29:56 */
/* http://harviacode.com */