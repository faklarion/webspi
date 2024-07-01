<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/img/gsk-favicon.png') ?>" type="image/x-icon">
    <meta name="description"
        content="Cek Harga Second Handphone Kamu Dan Dapatkan Harga Terbaik Hanya Di Galery Second Kalimantan.">
    <title>Dapatkan Penawaran Harga Terbaik Rumahmu</title>
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="<?= base_url('assets/vendor/select2/select2.min.css'); ?>" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
</head>
<style>

    .select2-container .select2-selection {
        border-radius: 20px;
        height: 30px;
    }

    .select2-container--classic .select2-selection--single .select2-selection__arrow b {
        background-image: url(https://cdn4.iconfinder.com/data/icons/user-interface-174/32/UIF-76-512.png);
        background-color: transparent;
        background-size: contain;
        border: none !important;
        height: 20px !important;
        width: 20px !important;
        margin: auto !important;
        top: auto !important;
        left: auto !important;
    }

    .custom-search {
        position: relative;
        width: 70%;
        margin: auto;
    }

    .grid-item {
            border: 1px solid #000;
            height: 50px; /* Adjust this value as needed */
    }

    .custom-search-input {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 100px;
        padding: 10px 100px 10px 20px;
        line-height: 1;
        box-sizing: border-box;
        outline: none;
    }

    .custom-search-input:focus {
        outline: none;
        border-color: #9ecaed;
        box-shadow: 0 0 10px #9ecaed;
    }

    .custom-search-botton {
        position: absolute;
        right: 3px;
        top: 3px;
        bottom: 3px;
        border: 0;
        color: #000;
        outline: none;
        margin: 0;
        padding: 0 10px;
        border-radius: 100px;
        z-index: 2;
    }
</style>

<body style="background-color: #ffffff;">
    <section>
        <!-- <nav class="navbar bg-dark">
            <div class="container-fluid justify-content-center" style="min-height: 10%;">
                <a class="text-center" href="<?php echo site_url('cek_harga')?>">
                    <img src="<?= base_url('assets/img/gsklogogold.png') ?>" width="150px">
                </a>
            </div>
        </nav> -->
        <!-- <div>
            <img class="img-fluid" src="<?= base_url('assets/img/banner.jpg') ?>" width="100%">
        </div> -->
        <div class="container my-3 justify-content-center">
            <div>
                <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">
                    <b>Mau Bikin Rumah ?</b>
                </h2>
            </div>
            <div>
                <div class="row justify-content-center">
                        <div class="col-4 p-1">
                            <a href="<?= site_url('/homerumah/mewah/') ?>">
                                <div class="card text-alignment class"
                                    style="background-color: #f0f0f0; border-radius: 12px; height:150px;">
                                    <div class="card-body align-items-center d-flex justify-content-center">
                                        <h4 class="text-center">Mewah</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 p-1">
                            <a href="<?= site_url('/homerumah/bagus/') ?>">
                                <div class="card text-alignment class"
                                    style="background-color: #f0f0f0; border-radius: 12px; height:150px;">
                                    <div class="card-body align-items-center d-flex justify-content-center">
                                        <h4 class="text-center">Bagus</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 p-1">
                            <a href="<?= site_url('/homerumah/murah/') ?>">
                                <div class="card text-alignment class"
                                    style="background-color: #f0f0f0; border-radius: 12px; height:150px;">
                                    <div class="card-body align-items-center d-flex justify-content-center">
                                        <h4 style="font-color: #000" class="text-center">Murah</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                </div>
            </div>
                               
        </div>
    </section>
</body>

</html>
<script>
    $(document).ready(function () {
        $('.js-example-basic-single').select2({
            width: '100%',
            allowClear: true,
            placeholder: '<i class="fa fa-search"></i> Cari HP yang kamu jual..',
            escapeMarkup: function (markup) {
                return markup;
            }
        });
    });
</script>