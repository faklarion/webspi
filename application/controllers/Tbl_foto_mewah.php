<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_foto_mewah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Tbl_foto_mewah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_foto_mewah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_foto_mewah/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_foto_mewah/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_foto_mewah_model->total_rows($q);
        $tbl_foto_mewah = $this->Tbl_foto_mewah_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_foto_mewah_data' => $tbl_foto_mewah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbl_foto_mewah/tbl_foto_mewah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_foto_mewah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_foto' => $row->id_foto,
		'id_mewah' => $row->id_mewah,
		'foto' => $row->foto,
	    );
            $this->template->load('template','tbl_foto_mewah/tbl_foto_mewah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_mewah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_foto_mewah/create_action'),
            'id_foto' => set_value('id_foto'),
            'id_mewah' => set_value('id_mewah'),
            'foto' => set_value('foto'),
	);
        $this->template->load('template','tbl_foto_mewah/tbl_foto_mewah_form', $data);
    }

    function upload_foto(){
        $config['upload_path']          = './assets/foto_mewah';
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
		'id_mewah' => $this->input->post('id_mewah',TRUE),
		'foto' => $foto['file_name'],
	    );

            $this->Tbl_foto_mewah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success !');
            redirect(site_url('tbl_mewah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_foto_mewah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_foto_mewah/update_action'),
		'id_foto' => set_value('id_foto', $row->id_foto),
		'id_mewah' => set_value('id_mewah', $row->id_mewah),
		'foto' => set_value('foto', $row->foto),
	    );
            $this->template->load('template','tbl_foto_mewah/tbl_foto_mewah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_foto_mewah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_foto', TRUE));
        } else {
            $data = array(
		'id_mewah' => $this->input->post('id_mewah',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Tbl_foto_mewah_model->update($this->input->post('id_foto', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_foto_mewah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_foto_mewah_model->get_by_id($id);

        if ($row) {
            $this->Tbl_foto_mewah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_mewah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_mewah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_mewah', 'id mewah', 'trim|required');
	//$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('id_foto', 'id_foto', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_foto_mewah.php */
/* Location: ./application/controllers/Tbl_foto_mewah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-02 04:29:56 */
/* http://harviacode.com */