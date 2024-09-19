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

    public function delete_photo_by_url($id_barang, $photo_url) {
        // Fetch the existing photo URLs
        $foto = $this->db->select('foto')
                         ->where('id_barang', $id_barang)
                         ->get('tbl_barang')
                         ->row()
                         ->foto;
    
        // Explode the fetched photo string into an array of photo URLs
        $photos = array_map('trim', explode(",", $foto));
    
        // Find the index of the photo URL to delete
        $index = array_search($photo_url, $photos);
    
        if ($index !== false) {
            // Remove the photo URL from the array
            unset($photos[$index]);
    
            // Implode the array back into a comma-separated string
            $updated_foto = implode(",", $photos);
    
            // Update the database record with the updated photo URLs
            $this->db->where('id_barang', $id_barang)
                     ->update('tbl_barang', ['foto' => $updated_foto]);
    
            // Define the file path for the photo to delete
            $file_path = FCPATH . 'assets/foto_barang/' . $photo_url;
    
            // Check if the file exists
            if (file_exists($file_path)) {
                // Delete the file from the server
                unlink($file_path);
            }
    
            // Return TRUE if the file was successfully deleted from the database
            return true;
        }
    
        // Return FALSE if the photo URL was not found in the database
        return false;
    }

    public function delete_photo_by_url_b($id_barang, $photo_url) {
        // Fetch the existing photo URLs
        $foto_b = $this->db->select('foto_b')
                         ->where('id_barang', $id_barang)
                         ->get('tbl_barang')
                         ->row()
                         ->foto_b;
    
        // Explode the fetched photo string into an array of photo URLs
        $photos = array_map('trim', explode(",", $foto_b));
    
        // Find the index of the photo URL to delete
        $index = array_search($photo_url, $photos);
    
        if ($index !== false) {
            // Remove the photo URL from the array
            unset($photos[$index]);
    
            // Implode the array back into a comma-separated string
            $updated_foto = implode(",", $photos);
    
            // Update the database record with the updated photo URLs
            $this->db->where('id_barang', $id_barang)
                     ->update('tbl_barang', ['foto_b' => $updated_foto]);
    
            // Define the file path for the photo to delete
            $file_path = FCPATH . 'assets/foto_barang/' . $photo_url;
    
            // Check if the file exists
            if (file_exists($file_path)) {
                // Delete the file from the server
                unlink($file_path);
            }
    
            // Return TRUE if the file was successfully deleted from the database
            return true;
        }
    
        // Return FALSE if the photo URL was not found in the database
        return false;
    }

    public function delete_photo_by_url_c($id_barang, $photo_url) {
        // Fetch the existing photo URLs
        $foto_c = $this->db->select('foto_c')
                         ->where('id_barang', $id_barang)
                         ->get('tbl_barang')
                         ->row()
                         ->foto_c;
    
        // Explode the fetched photo string into an array of photo URLs
        $photos = array_map('trim', explode(",", $foto_c));
    
        // Find the index of the photo URL to delete
        $index = array_search($photo_url, $photos);
    
        if ($index !== false) {
            // Remove the photo URL from the array
            unset($photos[$index]);
    
            // Implode the array back into a comma-separated string
            $updated_foto = implode(",", $photos);
    
            // Update the database record with the updated photo URLs
            $this->db->where('id_barang', $id_barang)
                     ->update('tbl_barang', ['foto_c' => $updated_foto]);
    
            // Define the file path for the photo to delete
            $file_path = FCPATH . 'assets/foto_barang/' . $photo_url;
    
            // Check if the file exists
            if (file_exists($file_path)) {
                // Delete the file from the server
                unlink($file_path);
            }
    
            // Return TRUE if the file was successfully deleted from the database
            return true;
        }
    
        // Return FALSE if the photo URL was not found in the database
        return false;
    }
    

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_foto_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->result();
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