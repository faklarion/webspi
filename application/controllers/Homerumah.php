<?php
class Homerumah extends CI_Controller{

    function index(){
        $this->load->view('homerumah/index');
    }

    function mewah(){
        $this->load->view('homerumah/mewah');
    }

    function ukuran_mewah() {
        $tipe   = $this->input->get('tipe_rumah');

        $data = array(
            'tipe'              => $tipe,
        );

        $this->load->view('homerumah/ukuran_mewah', $data);

    }

    function kamar_mewah() {
        
        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');

        $data = array(
            'tipe'              => $tipe,
            'ukuran'            => $ukuran,
        );

        $this->load->view('homerumah/kamar_mewah', $data);

    }

    function detail_harga_mewah(){

        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');
        $kamar  = $this->input->get('jumlah_kamar');
        $wc     = $this->input->get('jumlah_wc');

        if($tipe == 'Classic') {
            $tipeRmh = 6000000;
        } elseif(($tipe == 'Skandinavian')) {
            $tipeRmh = 5000000;
        } elseif (($tipe == 'Minimalist')) {
            $tipeRmh = 5000000;
        }

        $harga = $tipeRmh * $ukuran;

        $data = array(
            'harga'             => $harga,
            'tipe'              => $tipe,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
        );
        $this->load->view('homerumah/hasil_mewah', $data);
    }

    function bagus(){
        $this->load->view('homerumah/bagus');
    }

    function ukuran_bagus() {
        $tipe   = $this->input->get('tipe_rumah');

        $data = array(
            'tipe'              => $tipe,
        );

        $this->load->view('homerumah/ukuran_bagus', $data);

    }

    function kamar_bagus() {
        
        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');

        $data = array(
            'tipe'              => $tipe,
            'ukuran'            => $ukuran,
        );

        $this->load->view('homerumah/kamar_bagus', $data);

    }

    function detail_harga_bagus(){

        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');
        $kamar  = $this->input->get('jumlah_kamar');
        $wc     = $this->input->get('jumlah_wc');

        if($tipe == 'Classic') {
            $tipeRmh = 5000000;
        } elseif(($tipe == 'Skandinavian')) {
            $tipeRmh = 4000000;
        } elseif (($tipe == 'Minimalist')) {
            $tipeRmh = 4000000;
        }

        $harga = $tipeRmh * $ukuran;

        $data = array(
            'harga'             => $harga,
            'tipe'              => $tipe,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
        );
        $this->load->view('homerumah/hasil_bagus', $data);
    }

    function murah(){
        $this->load->view('homerumah/murah');
    }

    function ukuran_murah() {
        $tipe   = $this->input->get('tipe_rumah');

        $data = array(
            'tipe'              => $tipe,
        );

        $this->load->view('homerumah/ukuran_murah', $data);

    }

    function kamar_murah() {
        
        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');

        $data = array(
            'tipe'              => $tipe,
            'ukuran'            => $ukuran,
        );

        $this->load->view('homerumah/kamar_murah', $data);

    }


    function detail_harga_murah(){

        $tipe   = $this->input->get('tipe_rumah');
        $ukuran = $this->input->get('ukuran_rumah');
        $kamar  = $this->input->get('jumlah_kamar');
        $wc     = $this->input->get('jumlah_wc');

        if($tipe == 'Classic') {
            $tipeRmh = 3500000;
        } elseif(($tipe == 'Skandinavian')) {
            $tipeRmh = 3000000;
        } elseif (($tipe == 'Minimalist')) {
            $tipeRmh = 2800000;
        }

        $harga = $tipeRmh * $ukuran;

        $data = array(
            'harga'             => $harga,
            'tipe'              => $tipe,
            'kamar'             => $kamar,
            'wc'                => $wc,
            'ukuran'            => $ukuran,
        );
        $this->load->view('homerumah/hasil_murah', $data);
    }
}