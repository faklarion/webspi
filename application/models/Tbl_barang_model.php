<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_barang_model extends CI_Model
{

    public $table = 'tbl_barang';
    public $id = 'id_barang';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->join('tbl_satuan', 'tbl_satuan.id_satuan = tbl_barang.id_satuan', 'LEFT');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'LEFT');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_barang', $q);
	$this->db->or_like('id_kategori', $q);
	$this->db->or_like('nama_barang', $q);
	$this->db->or_like('harga_a', $q);
	$this->db->or_like('harga_b', $q);
	$this->db->or_like('harga_c', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_barang', $q);
	$this->db->or_like('id_kategori', $q);
	$this->db->or_like('nama_barang', $q);
	$this->db->or_like('harga_a', $q);
	$this->db->or_like('harga_b', $q);
	$this->db->or_like('harga_c', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tbl_barang_model.php */
/* Location: ./application/models/Tbl_barang_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-01 06:42:43 */
/* http://harviacode.com */