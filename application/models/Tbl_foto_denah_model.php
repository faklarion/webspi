<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_foto_denah_model extends CI_Model
{

    public $table = 'tbl_foto_denah';
    public $id = 'id_foto_denah';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function delete_photo_denah_by_url($id_foto_denah, $photo_url) {
        // Fetch the existing photo URLs
        $foto = $this->db->select('foto')
                         ->where('id_foto_denah', $id_foto_denah)
                         ->get('tbl_foto_denah')
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
            $this->db->where('id_foto_denah', $id_foto_denah)
                     ->update('tbl_foto_denah', ['foto' => $updated_foto]);
    
            // Hapus file gambar dari direktori server
            $file_path = './assets/denah/' . $photo_url;
            if (file_exists($file_path)) {
                unlink($file_path); // Menghapus file dari server
            }
    
            // Return TRUE jika update dan penghapusan file berhasil
            return true;
        }
    
        // Return FALSE jika URL foto tidak ditemukan
        return false;
    }
    

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, 'ASC');
        return $this->db->get($this->table)->result();
    }

    function get_foto_denah_by_ukuran($ukuran, $kamar, $wc)
    {
        $this->db->select('*');
        $this->db->where("ukuran_awal", $ukuran);
        $this->db->where("kamar", $kamar);
        $this->db->where("wc", $wc);
        return $this->db->get($this->table)->result();
    }

    function get_kamar_by_ukuran($ukuran)
    {
        $this->db->distinct();
        $this->db->select('kamar'); // Menyaring kolom 'kamar' secara unik
        $this->db->where('ukuran_awal', $ukuran);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_foto_denah', $q);
        $this->db->or_like('foto', $q);
        $this->db->or_like('ukuran_awal', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_foto_denah', $q);
        $this->db->or_like('foto', $q);
        $this->db->or_like('ukuran_awal', $q);
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

    public function get_wc_by_kamar_ukuran($kamar, $ukuran)
    {
        $this->db->select('wc'); // Ambil data jumlah WC
        $this->db->where('kamar', $kamar);
        $this->db->where('ukuran_awal', $ukuran); // Berdasarkan kamar yang dipilih
        return $this->db->get($this->table)->result(); // Ganti 'table_name' dengan nama tabel yang sesuai
    }


}

/* End of file Tbl_foto_denah_model.php */
/* Location: ./application/models/Tbl_foto_denah_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-07-25 09:09:21 */
/* http://harviacode.com */