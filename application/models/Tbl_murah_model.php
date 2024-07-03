<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_murah_model extends CI_Model
{

    public $table = 'tbl_murah';
    public $id = 'id_murah';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, 'ASC');
        return $this->db->get($this->table)->result();
    }

    public function delete_photo_by_url($id_murah, $photo_url) {
        // Fetch the existing photo URLs
        $foto_denah = $this->db->select('foto_denah')
                               ->where('id_murah', $id_murah)
                               ->get('tbl_murah')
                               ->row()
                               ->foto_denah;

        // Explode the fetched photo string into an array of photo URLs
        $photos = array_map('trim', explode(",", $foto_denah));

        // Find the index of the photo URL to delete
        $index = array_search($photo_url, $photos);

        if ($index !== false) {
            // Remove the photo URL from the array
            unset($photos[$index]);

            // Implode the array back into a comma-separated string
            $updated_foto_denah = implode(",", $photos);

            // Update the database record with the updated foto_denah
            $this->db->where('id_murah', $id_murah)
                     ->update('tbl_murah', ['foto_denah' => $updated_foto_denah]);

            // Return TRUE if update was successful
            return true;
        }

        // Return FALSE if photo URL was not found
        return false;
    }

    public function delete_photo_rumah_by_url($id_murah, $photo_url) {
        // Fetch the existing photo URLs
        $foto = $this->db->select('foto')
                               ->where('id_murah', $id_murah)
                               ->get('tbl_murah')
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

            // Update the database record with the updated foto
            $this->db->where('id_murah', $id_murah)
                     ->update('tbl_murah', ['foto' => $updated_foto]);

            // Return TRUE if update was successful
            return true;
        }

        // Return FALSE if photo URL was not found
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
        $this->db->like('id_murah', $q);
	$this->db->or_like('tipe', $q);
	$this->db->or_like('harga', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_murah', $q);
	$this->db->or_like('tipe', $q);
	$this->db->or_like('harga', $q);
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

/* End of file Tbl_murah_model.php */
/* Location: ./application/models/Tbl_murah_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-01 03:51:27 */
/* http://harviacode.com */