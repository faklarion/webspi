<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/img/siperindo.png') ?>" type="image/x-icon">
    <meta name="description" content="Cek Harga Jasa Interior Rumah Terbaik di PT Siperindo">
    <title>Dapatkan Penawaran Harga Jasa Pembuatan Interiormu</title>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>
</head>
<style>
    .radio-button {}

    .radio-button input[type="radio"] {
        opacity: 0;
        position: fixed;
        width: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .footer {
        margin-top: auto;
        background-color: #909090;
        color: white;
        text-align: center;
        padding: 20px;
    }

    /* Kustomisasi kartu */
    .custom-card {
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        max-width: 300px;
        /* Atur lebar maksimum kartu */
        margin: 0 auto;
        /* Pusatkan kartu */
    }

    /* Efek hover pada kartu */
    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Menyesuaikan tampilan teks di dalam kartu */
    .custom-card .card-body span {
        font-size: 1em;
        font-weight: normal;
        color: #333;
    }

    /* Menambah padding pada kartu */
    .custom-card .card-body {
        padding: 30px;
    }

    /* Media queries untuk tampilan mobile */
    @media (max-width: 767px) {
        .custom-card .card-body span {
            font-size: 0.9em;
        }

        /* Mengatur lebar maksimum kartu untuk layar kecil */
        .custom-card {
            max-width: 250px;
        }
    }

    .radio-button label {
        display: inline-block;
        background-color: #fff;
        padding: 10px;
        font-family: sans-serif, Arial;
        font-size: 65%;
        border: 2px solid #444;
        border-radius: 15px;
        width: 30%;
        text-align: center;
    }

    .radio-button label:hover {
        background-color: #dfd;
    }

    .radio-button input[type="radio"]:checked+label {
        background-color: #808080;
        border-color: #333;
    }

    .custom-search {
        position: relative;
        width: 50%;
        margin: auto;
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

<nav class="navbar mb-3" style="background: #909090;">
    <div class="container-fluid justify-content-center" style="min-height: 10%;">
        <a class="text-center" href="https://siperindo.id/">
            <img src="<?= base_url('assets/img/siperindo.png') ?>" width="100px">
        </a>
    </div>
</nav>