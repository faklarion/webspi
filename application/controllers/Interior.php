<?php
class Interior extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Interior_model');
    }

    function index(){
      $data = array(
            'data_kategori'      => $this->Interior_model->get_all_kategori(),
            );
        $this->load->view('interior/index', $data);
    }


    public function gradea($id)
    {
        $data = array(
            'barang'      => $this->Interior_model->get_all_barang_by_kategori($id),
        );

        $this->load->view('interior/barang.php', $data);
    }

    public function detail_barang($id)
    {
        $data = array(
            'detail_barang'      => $this->Interior_model->get_all_barang_by_id($id),
        );

        $this->load->view('interior/detail.php', $data);
    }

    public function detail_a()
    {
        $panjang        = $this->input->get('panjang');
        $lebar          = $this->input->get('lebar');
        $tinggi         = $this->input->get('tinggi');
        $idBarang       = $this->input->get('id_barang');

        $data = array(
            'detail_barang' => $this->Interior_model->get_all_barang_by_id($idBarang),
            'panjang'       => $panjang,
            'lebar'         => $lebar,
            'tinggi'        => $tinggi,
            'id_barang'     => $idBarang,
        );

        $this->load->view('interior/detail_hasil.php', $data);
    }

}