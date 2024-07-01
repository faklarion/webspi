<?php
class Interior_b extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Interior_model');
    }

    function index(){
      $data = array(
            'data_kategori'      => $this->Interior_model->get_all_kategori(),
            );
        $this->load->view('interior/index_b', $data);
    }


    public function gradea($id)
    {
        $result = $this->Interior_model->get_all_kategori_by_id($id);

        if($result) {
            $idKategori = $result->id_kategori;
            $namaKategori = $result->nama_kategori;
        }

        $data = array(
            'barang'        => $this->Interior_model->get_all_barang_by_kategori($id),
            'idKategori'    => $idKategori,
            'namaKategori'  => $namaKategori,
        );

        $this->load->view('interior/barang_b.php', $data);
    }

    public function detail_barang($id)
    {

        $result = $this->Interior_model->get_all_kategori_by_barang($id);

        if($result) {
            $idKategori = $result->id_kategori;
            $namaKategori = $result->nama_kategori;
            $namaBarang = $result->nama_barang;
            $idBarang = $result->id_barang;
        }

        $data = array(
            'detail_barang'      => $this->Interior_model->get_all_barang_by_id($id),
            'idKategori'    => $idKategori,
            'namaKategori'  => $namaKategori,
            'namaBarang'  => $namaBarang,
            'idBarang'  => $idBarang,
        );

        $hasil = $this->Interior_model->get_all_barang_by_id($id);

        foreach($hasil as $row) {
            $idSatuan = $row->id_satuan;
        }

        if($idSatuan == 1) {
            $this->load->view('interior/detail_b.php', $data);
        } elseif($idSatuan == 2) {
            $this->load->view('interior/detail_m2_b.php', $data);
        } elseif(($idSatuan == 3) || ($idSatuan == 4)) {
            $this->load->view('interior/detail_unit_b.php', $data);
        }
    }

    public function detail_b()
    {
        $panjang        = $this->input->get('panjang');
        $lebar          = $this->input->get('lebar');
        $tinggi         = $this->input->get('tinggi');
        $idBarang       = $this->input->get('id_barang');

        $result = $this->Interior_model->get_all_kategori_by_barang($idBarang);

        if($result) {
            $idKategori = $result->id_kategori;
            $namaKategori = $result->nama_kategori;
            $namaBarang = $result->nama_barang;
            $idBarang = $result->id_barang;
        }

        $data = array(
            'detail_barang' => $this->Interior_model->get_all_barang_by_id($idBarang),
            'panjang'       => $panjang,
            'lebar'         => $lebar,
            'tinggi'        => $tinggi,
            'id_barang'     => $idBarang,
            'idBarang'     => $idBarang,
            'idKategori'    => $idKategori,
            'namaKategori'  => $namaKategori,
            'namaBarang'  => $namaBarang,
        );

        $this->load->view('interior/detail_hasil_b.php', $data);
    }

    public function detail_b_m2()
    {
        $panjang        = $this->input->get('panjang');
        $lebar          = $this->input->get('lebar');
        
        $idBarang       = $this->input->get('id_barang');

        $result = $this->Interior_model->get_all_kategori_by_barang($idBarang);

        if($result) {
            $idKategori = $result->id_kategori;
            $namaKategori = $result->nama_kategori;
            $namaBarang = $result->nama_barang;
            $idBarang = $result->id_barang;
        }

        $data = array(
            'detail_barang' => $this->Interior_model->get_all_barang_by_id($idBarang),
            'panjang'       => $panjang,
            'lebar'         => $lebar,
            'id_barang'     => $idBarang,
            'idBarang'     => $idBarang,
            'idKategori'    => $idKategori,
            'namaKategori'  => $namaKategori,
            'namaBarang'  => $namaBarang,
        );

        $this->load->view('interior/detail_hasil_m2_b.php', $data);
    }

    public function detail_b_unit()
    {
        $unit        = $this->input->get('unit');
        
        $idBarang       = $this->input->get('id_barang');

        $result = $this->Interior_model->get_all_kategori_by_barang($idBarang);

        if($result) {
            $idKategori = $result->id_kategori;
            $namaKategori = $result->nama_kategori;
            $namaBarang = $result->nama_barang;
            $idBarang = $result->id_barang;
        }

        $data = array(
            'detail_barang' => $this->Interior_model->get_all_barang_by_id($idBarang),
            'unit'         => $unit,
            'id_barang'     => $idBarang,
            'idBarang'     => $idBarang,
            'idKategori'    => $idKategori,
            'namaKategori'  => $namaKategori,
            'namaBarang'  => $namaBarang,
        );

        $this->load->view('interior/detail_hasil_unit_b.php', $data);
    }

}