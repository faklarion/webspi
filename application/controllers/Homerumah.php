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

    function lihat_denah() {
        $tipe       = $this->input->get('tipe');
        $ukuran     = $this->input->get('ukuran');
        $kamar      = $this->input->get('kamar');
        $wc         = $this->input->get('wc');
        $harga      = $this->input->get('harga');
        $namaTipe   = $this->input->get('namaTipe');
        $jenis      = $this->input->get('jenis');

        $data = array(
            'harga'             => $harga,
            'namaTipe'          => $namaTipe,
            'tipe'              => $tipe,
            'jenis'             => $jenis,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
        );
        $this->load->view('homerumah/lihat_denah', $data);
    }

    function lihat_desain() {
        $tipe       = $this->input->get('tipe');
        $ukuran     = $this->input->get('ukuran');
        $kamar      = $this->input->get('kamar');
        $wc         = $this->input->get('wc');
        $harga      = $this->input->get('harga');
        $namaTipe   = $this->input->get('namaTipe');
        $id_jenis   = $this->input->get('id_jenis');
        $jenis      = $this->input->get('jenis');
        $fotodenah  = $this->input->get('fotodenah');

        $data = array(
            'harga'             => $harga,
            'namaTipe'          => $namaTipe,
            'tipe'              => $tipe,
            'id_jenis'          => $id_jenis,
            'jenis'             => $jenis,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
            'fotodenah'         => $fotodenah,
        );
        $this->load->view('homerumah/lihat_desain', $data);
    }

    function lihat_rekap() {
        $tipe       = $this->input->get('tipe');
        $ukuran     = $this->input->get('ukuran');
        $kamar      = $this->input->get('kamar');
        $wc         = $this->input->get('wc');
        $harga      = $this->input->get('harga');
        $namaTipe   = $this->input->get('namaTipe');
        $jenis      = $this->input->get('jenis');
        $fotodenah  = $this->input->get('fotodenah');
        $fotorumah  = $this->input->get('fotorumah');

        $data = array(
            'harga'             => $harga,
            'namaTipe'          => $namaTipe,
            'tipe'              => $tipe,
            'jenis'             => $jenis,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
            'fotodenah'         => $fotodenah,
            'fotorumah'         => $fotorumah,
        );
        $this->load->view('homerumah/lihat_rekap', $data);
    }

    public function get_wc_by_kamar()
    {
        $kamar = $this->input->post('kamar');
        $ukuran = $this->input->post('ukuran'); // Ambil ukuran rumah dari request
        
        // Query untuk mengambil data WC berdasarkan kamar dan ukuran
        $jumlah_wc = $this->Tbl_foto_denah_model->get_wc_by_kamar_ukuran($kamar, $ukuran); 
        
        // Generate opsi radio button berdasarkan jumlah WC yang didapatkan
        if (!empty($jumlah_wc)) {
            foreach ($jumlah_wc as $wc) {
                echo '<input type="radio" id="wc' . $wc->wc . '" name="jumlah_wc" value="' . $wc->wc . '" required>';
                echo '<label for="wc' . $wc->wc . '">' . $wc->wc . '</label>';
                echo ' ';
            }
        } else {
            echo 'Tidak ada data WC untuk kamar dan ukuran ini.';
        }
    }
    

}