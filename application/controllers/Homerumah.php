<?php
class Homerumah extends CI_Controller{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_mewah_model');
        $this->load->model('Tbl_murah_model');
        $this->load->model('Tbl_bagus_model');
        $this->load->model('Tbl_foto_bagus_model');
        $this->load->model('Tbl_foto_denah_model');
        $this->load->model('Tbl_foto_rumah_model');
        $this->load->model('Tbl_foto_mewah_model');
        $this->load->model('Tbl_foto_murah_model');
    }

    function index(){
        $this->load->view('homerumah/index');
    }

    function mewah(){
        $data = array(
            'data_tipe'              => $this->Tbl_mewah_model->get_all(),
        );
        $this->load->view('homerumah/mewah', $data);
    }

    function ukuran_mewah() {

        
        $tipe   = $this->input->get('tipe_rumah');

        $result = $this->Tbl_mewah_model->get_by_id($tipe);

        if($result) {
            $namaTipe   = $result->tipe;
            $idTipe     = $result->id_mewah;
        }

        $data = array(
            'tipe'              => $namaTipe,
            'idTipe'              => $idTipe,
        );

        $this->load->view('homerumah/ukuran_mewah', $data);

    }

    function kamar_mewah() {
        
        $tipe   = $this->input->get('tipe_rumah');

        $result = $this->Tbl_mewah_model->get_by_id($tipe);

        if($result) {
            $namaTipe   = $result->tipe;
            $idTipe     = $result->id_mewah;
        }
        $ukuran = $this->input->get('ukuran_rumah');

        $data = array(
            'tipe'              => $namaTipe,
            'idTipe'            => $idTipe,
            'ukuran'            => $ukuran,
        );

        $this->load->view('homerumah/kamar_mewah', $data);

    }

    function detail_harga_mewah(){

        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');
        $kamar  = $this->input->get('jumlah_kamar');
        $wc     = $this->input->get('jumlah_wc');

        $result = $this->Tbl_mewah_model->get_by_id($tipe);

        if($result) {
            $tipeRmh    = $result->harga;
            $namaTipe   = $result->tipe;
        }

        $harga = $tipeRmh * $ukuran;

        $data = array(
            'harga'             => $harga,
            'namaTipe'          => $namaTipe,
            'tipe'              => $tipe,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
        );
        $this->load->view('homerumah/hasil_mewah', $data);
    }

    function bagus(){
        $data = array(
            'data_tipe'              => $this->Tbl_bagus_model->get_all(),
        );
        $this->load->view('homerumah/bagus', $data);
    }

    function ukuran_bagus() {

        
        $tipe   = $this->input->get('tipe_rumah');

        $result = $this->Tbl_bagus_model->get_by_id($tipe);

        if($result) {
            $namaTipe   = $result->tipe;
            $idTipe     = $result->id_bagus;
        }

        $data = array(
            'tipe'              => $namaTipe,
            'idTipe'              => $idTipe,
        );

        $this->load->view('homerumah/ukuran_bagus', $data);

    }

    function kamar_bagus() {
        
        $tipe   = $this->input->get('tipe_rumah');

        $result = $this->Tbl_bagus_model->get_by_id($tipe);

        if($result) {
            $namaTipe   = $result->tipe;
            $idTipe     = $result->id_bagus;
        }
        $ukuran = $this->input->get('ukuran_rumah');

        $data = array(
            'tipe'              => $namaTipe,
            'idTipe'            => $idTipe,
            'ukuran'            => $ukuran,
        );

        $this->load->view('homerumah/kamar_bagus', $data);

    }

    function detail_harga_bagus(){

        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');
        $kamar  = $this->input->get('jumlah_kamar');
        $wc     = $this->input->get('jumlah_wc');

        $result = $this->Tbl_bagus_model->get_by_id($tipe);

        if($result) {
            $tipeRmh    = $result->harga;
            $namaTipe   = $result->tipe;
        }

        $harga = $tipeRmh * $ukuran;

        $data = array(
            'harga'             => $harga,
            'namaTipe'          => $namaTipe,
            'tipe'              => $tipe,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
        );
        $this->load->view('homerumah/hasil_bagus', $data);
    }

    function murah(){
        $data = array(
            'data_tipe'              => $this->Tbl_murah_model->get_all(),
        );
        $this->load->view('homerumah/murah', $data);
    }

    function ukuran_murah() {

        
        $tipe   = $this->input->get('tipe_rumah');

        $result = $this->Tbl_murah_model->get_by_id($tipe);

        if($result) {
            $namaTipe   = $result->tipe;
            $idTipe     = $result->id_murah;
        }

        $data = array(
            'tipe'              => $namaTipe,
            'idTipe'              => $idTipe,
        );

        $this->load->view('homerumah/ukuran_murah', $data);

    }

    function kamar_murah() {
        
        $tipe   = $this->input->get('tipe_rumah');

        $result = $this->Tbl_murah_model->get_by_id($tipe);

        if($result) {
            $namaTipe   = $result->tipe;
            $idTipe     = $result->id_murah;
        }
        $ukuran = $this->input->get('ukuran_rumah');

        $data = array(
            'tipe'              => $namaTipe,
            'idTipe'            => $idTipe,
            'ukuran'            => $ukuran,
        );

        $this->load->view('homerumah/kamar_murah', $data);

    }

    function detail_harga_murah(){

        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');
        $kamar  = $this->input->get('jumlah_kamar');
        $wc     = $this->input->get('jumlah_wc');

        $result = $this->Tbl_murah_model->get_by_id($tipe);

        if($result) {
            $tipeRmh    = $result->harga;
            $namaTipe   = $result->tipe;
        }

        $harga = $tipeRmh * $ukuran;

        $data = array(
            'harga'             => $harga,
            'namaTipe'          => $namaTipe,
            'tipe'              => $tipe,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
        );
        $this->load->view('homerumah/hasil_murah', $data);
    }
}