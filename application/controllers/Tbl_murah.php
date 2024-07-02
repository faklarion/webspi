<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_murah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_murah_model');
        $this->load->model('Tbl_foto_murah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_murah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_murah/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_murah/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_murah_model->total_rows($q);
        $tbl_murah = $this->Tbl_murah_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_murah_data' => $tbl_murah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_murah/tbl_murah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_murah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_murah' => $row->id_murah,
		'tipe' => $row->tipe,
		'harga' => $row->harga,
	    );
            $this->template->load('template','tbl_murah/tbl_murah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_murah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_murah/create_action'),
	    'id_murah' => set_value('id_murah'),
	    'tipe' => set_value('tipe'),
	    'harga' => set_value('harga'),
	);
        $this->template->load('template','tbl_murah/tbl_murah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tipe' => $this->input->post('tipe',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->Tbl_murah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('tbl_murah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_murah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_murah/update_action'),
		'id_murah' => set_value('id_murah', $row->id_murah),
		'tipe' => set_value('tipe', $row->tipe),
		'harga' => set_value('harga', $row->harga),
	    );
            $this->template->load('template','tbl_murah/tbl_murah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_murah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_murah', TRUE));
        } else {
            $data = array(
		'tipe' => $this->input->post('tipe',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->Tbl_murah_model->update($this->input->post('id_murah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_murah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_murah_model->get_by_id($id);

        if ($row) {
            $this->Tbl_murah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_murah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_murah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required');

	$this->form_validation->set_rules('id_murah', 'id_murah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_murah.php */
/* Location: ./application/controllers/Tbl_murah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-01 03:51:36 */
/* http://harviacode.com */