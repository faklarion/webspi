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
	    'ukuran_awal' => set_value('ukuran_awal'),
	    'foto' => set_value('foto'),
	);
        $this->template->load('template','tbl_foto_rumah/tbl_foto_rumah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_tipe' => $this->input->post('id_tipe',TRUE),
		'ukuran_awal' => $this->input->post('ukuran_awal',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Tbl_foto_rumah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
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
		'foto' => set_value('foto', $row->foto),
	    );
            $this->template->load('template','tbl_foto_rumah/tbl_foto_rumah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_rumah'));
        }
    }

    private function set_upload_options() {
        //upload an image options
        $config = [];
        $config['upload_path'] = './assets/rumah/';
        $config['allowed_types'] = 'gif|jpg|png';
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
    
        $this->db->where('id_foto_rumah', $this->input->post('id_foto_rumah'));
        $this->db->update('tbl_foto_rumah', $update_data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('tbl_foto_rumah'));
        
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_foto_rumah_model->get_by_id($id);

        if ($row) {
            $this->Tbl_foto_rumah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_foto_rumah'));
        } else {
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