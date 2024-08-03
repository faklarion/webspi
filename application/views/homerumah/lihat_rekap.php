<style>
    .card-img {
        width: 200px; /* Mengisi lebar card body */
        height: auto;
        object-fit: cover; /* Memastikan gambar menutupi seluruh area card body */
        border-radius: 15px; /* Sama seperti border-radius card */
    }

    @media (max-width: 576px) { /* Media query untuk perangkat mobile */
        .card-img {
            width: 100%; /* Mengisi lebar card body */
            height: auto; /* Biarkan height otomatis */
        }
    }
</style>
<?php include 'header.php' ?>
<body style="background-color: #ffffff;">
    <section>
        <div>
            <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">
                <b>Mau Bikin Rumah ?</b>
            </h2>
        </div>
        <div class="container" width="50%">
            <b><a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="https://manggadigital.my.id/">Halaman Utama </a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/mewah/') ?>"> Mewah</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/ukuran_mewah?tipe_rumah=' . $tipe . '') ?>">
                    <?php echo $namaTipe ?></a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/kamar_mewah?ukuran_rumah=' . $ukuran . '&tipe_rumah=' . $tipe . '') ?>">
                    <?php echo $ukuran ?> (m2)</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/detail_harga_'.$jenis.'?ukuran_rumah=' . $ukuran . '&tipe_rumah=' . $tipe . '&jumlah_kamar=' . $kamar . '&jumlah_wc=' . $wc . '') ?>">
                    Harga</a></b>
            </b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/lihat_desain?tipe='.$tipe.'&ukuran='.$ukuran.'&kamar='.$kamar.'&wc='.$wc.'&harga='.$harga.'&namaTipe='.$namaTipe.'&jenis='.$jenis.'&fotodenah='.$fotodenah.'') ?>">
                    Desain Rumah</a></b>
            </b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%">
                    Hasil</a></b>
            </b>
        </div>
        </div>
        <div class="container my-3">
            <div class="card" style="background-color: #f0f0f0; border-radius: 10px;">
                <div class="container my-3">
                    <div class="row justify-content-center">
                        <h4 style="font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em; display: inline-block;" class="text-center">
                            Rekapan Hasil Pilihan Rumah Impian Kamu
                        </h4>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Tipe</td>
                                <td width="20px" class="text-center">:</td>
                                <td><?php echo $namaTipe ?></td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td width="20px" class="text-center">:</td>
                                <td><?php echo $ukuran ?> (m2)</td>
                            </tr>
                            <tr>
                                <td>Jumlah Kamar</td>
                                <td width="20px" class="text-center">:</td>
                                <td><?php echo $kamar ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah WC</td>
                                <td width="20px" class="text-center">:</td>
                                <td><?php echo $wc ?></td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <div class="container" style="background-color: white; border-radius: 10px; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center; text-align: center;">
                        <div>
                            <span style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
                                Estimasi Harga Jasa Bangun Rumah Impian Kamu Adalah
                            </span>
                            <h5 style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
                                <s>
                                    <?php 
                                        $hargacoret = $harga + ((25 / 100) * $harga);
                                        echo rupiah($hargacoret); 
                                    ?>
                                </s>
                            </h5>
                            <hr>
                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 1.3em; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
                                Harga spesial di website  
                            </span>
                            
                            <h3 style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
                                <b>Rp </b>
                                <b>
                                    <div id="odometer" style=" display: inline-block;"></div>
                                </b>
                                
                            </h3>
                        </div>
                    </div>
                    
                    <div class="container" style="display: flex; align-items: center; justify-content: center; text-align: center;">
                        <h6 style="font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em; display: inline-block; ">
                            Estimasi Waktu Pengerjaan Adalah <?php echo ($ukuran * 1.7) ?> Hari
                        </h6>
                    </div>

                    <div class="container mt-4">
                            <h6 class="text-center">Berikut Pilihan Denah dan Desain Rumah Kamu</h6>
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-4">
                                        <div class="card-body align-items-center d-flex justify-content-center card-shadow">
                                            <img src="<?= base_url('assets/denah/' . $fotodenah) ?>" alt="Foto Denah" class="card-img" style="border-radius: 15px">
                                        </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                        <div class="card-body align-items-center d-flex justify-content-center card-shadow">
                                            <img src="<?= base_url('assets/rumah/' . $fotorumah) ?>" alt="Foto Rumah" class="card-img" style="border-radius: 15px">
                                         </div>
                                </div>
                            </div>
                    </div>
                    
                    <div class="container mb-4">
                        <div class="row justify-content-center">
                            <p style="font-family: Arial, Helvetica, sans-serif;">Berminat ?</p>
                            
                        </div>
                        <div class="row justify-content-center">
                            
                            <p style="font-family: Arial, Helvetica, sans-serif;">Wujudkan Rumah Impian Kamu Sekarang !</p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://wa.me/6281250969099" target="_blank" class="btn btn-sm btn-success"><i
                                    class="fa fa-whatsapp"></i> <b
                                    style="font-family: Arial, Helvetica, sans-serif;">Hubungi Kami</b></a>
                        </div>
                    </div>
                    <!-- <div class="container mt-4">
                        <div class="row justify-content-center">
                            <a href="<?php echo site_url('homerumah/mewah') ?>" class="btn btn-sm btn-warning"><b
                            style="font-family: Arial, Helvetica, sans-serif;">Cek Kembali</b></a>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php' ?>
