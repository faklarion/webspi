<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_mewah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_mewah_model');
        $this->load->model('Tbl_foto_mewah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_mewah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_mewah/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_mewah/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_mewah_model->total_rows($q);
        $tbl_mewah = $this->Tbl_mewah_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_mewah_data' => $tbl_mewah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_mewah/tbl_mewah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_mewah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mewah' => $row->id_mewah,
		'tipe' => $row->tipe,
		'harga' => $row->harga,
	    );
            $this->template->load('template','tbl_mewah/tbl_mewah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_mewah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_mewah/create_action'),
	    'id_mewah' => set_value('id_mewah'),
	    'tipe' => set_value('tipe'),
	    'harga' => set_value('harga'),
	);
        $this->template->load('template','tbl_mewah/tbl_mewah_form', $data);
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

            $this->Tbl_mewah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('tbl_mewah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_mewah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_mewah/update_action'),
		'id_mewah' => set_value('id_mewah', $row->id_mewah),
		'tipe' => set_value('tipe', $row->tipe),
		'harga' => set_value('harga', $row->harga),
	    );
            $this->template->load('template','tbl_mewah/tbl_mewah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_mewah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mewah', TRUE));
        } else {
            $data = array(
		'tipe' => $this->input->post('tipe',TRUE),
		'harga' => $this->input->post('harga',TRUE),
	    );

            $this->Tbl_mewah_model->update($this->input->post('id_mewah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_mewah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_mewah_model->get_by_id($id);

        if ($row) {
            $this->Tbl_mewah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_mewah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_mewah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required');

	$this->form_validation->set_rules('id_mewah', 'id_mewah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_mewah.php */
/* Location: ./application/controllers/Tbl_mewah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-01 03:51:27 */
/* http://harviacode.com */