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
            'action' => site_url('tbl_barang/create_action'),
	    'id_barang' => set_value('id_barang'),
	    'id_kategori' => set_value('id_kategori'),
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
	    );

            $this->Tbl_barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success !');
            redirect(site_url('tbl_barang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_barang/update_action'),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'nama_barang' => set_value('nama_barang', $row->nama_barang),
		'harga_a' => set_value('harga_a', $row->harga_a),
		'harga_b' => set_value('harga_b', $row->harga_b),
		'harga_c' => set_value('harga_c', $row->harga_c),
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