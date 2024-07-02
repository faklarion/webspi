<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_foto_murah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Tbl_foto_murah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_foto_murah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_foto_murah/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_foto_murah/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_foto_murah_model->total_rows($q);
        $tbl_foto_murah = $this->Tbl_foto_murah_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_foto_murah_data' => $tbl_foto_murah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_foto_murah/tbl_foto_murah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_foto_murah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_foto' => $row->id_foto,
		'id_murah' => $row->id_murah,
		'foto' => $row->foto,
	    );
            $this->template->load('template','tbl_foto_murah/tbl_foto_murah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_murah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_foto_murah/create_action'),
            'id_foto' => set_value('id_foto'),
            'id_murah' => set_value('id_murah'),
            'foto' => set_value('foto'),
	);
        $this->template->load('template','tbl_foto_murah/tbl_foto_murah_form', $data);
    }

    function upload_foto(){
        $config['upload_path']          = './assets/foto_murah';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        return $this->upload->data();
    }
    
    public function create_action() 
    {
        $this->_rules();
        $foto = $this->upload_foto();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_murah' => $this->input->post('id_murah',TRUE),
		'foto' => $foto['file_name'],
	    );

            $this->Tbl_foto_murah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success !');
            redirect(site_url('tbl_murah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_foto_murah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_foto_murah/update_action'),
                'id_foto' => set_value('id_foto', $row->id_foto),
                'id_murah' => set_value('id_murah', $row->id_murah),
                'foto' => set_value('foto', $row->foto),
	    );
            $this->template->load('template','tbl_foto_murah/tbl_foto_murah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_murah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_foto', TRUE));
        } else {
            $data = array(
		'id_murah' => $this->input->post('id_murah',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Tbl_foto_murah_model->update($this->input->post('id_foto', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_foto_murah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_foto_murah_model->get_by_id($id);

        if ($row) {
            $this->Tbl_foto_murah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_murah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_murah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_murah', 'id murah', 'trim|required');
	//$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('id_foto', 'id_foto', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_foto_murah.php */
/* Location: ./application/controllers/Tbl_foto_murah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-02 05:07:48 */
/* http://harviacode.com */