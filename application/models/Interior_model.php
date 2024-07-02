<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Interior_model extends CI_Model
{

  

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_barang_model');
    }

    // datatables
    function get_all_kategori()
    {
        $this->db->order_by('id_kategori', 'ASC');
        return $this->db->get('tbl_kategori')->result();
    }

    function get_all_kategori_by_id($id) {
        $this->db->where('id_kategori', $id);
        return $this->db->get('tbl_kategori')->row();
    }

    function get_all_barang_by_kategori($id) {
        $this->db->join('tbl_kategori', 'tbl_barang.id_kategori = tbl_kategori.id_kategori');
        $this->db->join('tbl_satuan', 'tbl_barang.id_satuan = tbl_satuan.id_satuan');
        $this->db->where('tbl_barang.id_kategori', $id);
        $this->db->order_by('id_barang', 'ASC');
        return $this->db->get('tbl_barang')->result();
    }

    function get_all_barang_by_id($id) {
        $this->db->where('id_barang', $id);
        return $this->db->get('tbl_barang')->result();
    }

    function get_all_kategori_by_barang($id) {
        $this->db->join('tbl_kategori', 'tbl_barang.id_kategori = tbl_kategori.id_kategori');
        $this->db->where('tbl_barang.id_barang', $id);
        $this->db->order_by('id_barang', 'ASC');
        return $this->db->get('tbl_barang')->row();
    }

  
}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-10-04 10:50:27 */
/* http://harviacode.com */