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
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%">
                    Desain Rumah</a></b>
            </b>
        </div>
        </div>
        <div class="container my-3">
            <div class="card" style="background-color: #f0f0f0; border-radius: 10px;">
                <div class="container my-3">
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

                    <div class="container" style="display: flex; align-items: center; justify-content: center;">
                        <h6 style="font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em; display: inline-block;">
                            Estimasi Waktu Pengerjaan Adalah <?php echo ($ukuran * 1.7) ?> Hari
                        </h6>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <h4 style="font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em; display: inline-block;" class="text-center">
                                Pilih dan Klik Desain Rumah Pilihan Kamu
                            </h4>
                            <form action="<?php echo site_url('homerumah/lihat_rekap')?>" id="myFormRumah">
                                <input type="hidden" name="tipe" value="<?php echo $tipe ?>">
                                <input type="hidden" name="ukuran" value="<?php echo $ukuran ?>">
                                <input type="hidden" name="kamar" value="<?php echo $kamar ?>">
                                <input type="hidden" name="wc" value="<?php echo $wc ?>">
                                <input type="hidden" name="harga" value="<?php echo $harga ?>">
                                <input type="hidden" name="namaTipe" value="<?php echo $namaTipe ?>">
                                <input type="hidden" name="jenis" value="<?php echo $jenis ?>">
                                <input type="hidden" name="fotodenah" id="fotodenah" value="<?php echo $fotodenah ?>">
                                <input type="hidden" name="fotorumah" id="fotorumah">
                                <div class="row justify-content-center">
                                    <?php
                                        $foto_rumah = $this->Tbl_foto_rumah_model->get_foto_by_ukuran($tipe, $ukuran);
                                        foreach ($foto_rumah as $row): 
                                            $fotos = explode(',', $row->foto); // Memisahkan string menjadi array
                                            foreach ($fotos as $foto): // Iterasi melalui setiap elemen array
                                    ?>
                                                <div class="col-4 d-none d-md-block"> <!-- Hanya tampil di layar menengah ke atas -->
                                                    <a href="#" class="rumahLink" data-foto="<?= trim($foto) ?>">
                                                        <div class="card-body align-items-center d-flex justify-content-center m-2 card-shadow">
                                                            <img src="<?= base_url('assets/rumah/' . trim($foto)) ?>" alt="Foto Rumah" class="card-img" style="border-radius: 15px">
                                                        </div> 
                                                    </a>
                                                </div>
                                    <?php
                                            endforeach;
                                        endforeach;
                                    ?>
                                </div>

                                <!-- Carousel for Mobile Devices -->
                                <div id="carouselExampleControls" class="carousel slide d-md-none" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        $foto_rumah = $this->Tbl_foto_rumah_model->get_foto_by_ukuran($tipe, $ukuran);
                                        $first = true; // Variable untuk menandai item pertama
                                        foreach ($foto_rumah as $row): 
                                            $fotos = explode(',', $row->foto); // Memisahkan string menjadi array
                                            foreach ($fotos as $foto): // Iterasi melalui setiap elemen array
                                        ?>
                                                <div class="carousel-item <?php if ($first) { echo 'active'; $first = false; } ?>">
                                                    <a href="#" class="rumahLink" data-foto="<?= trim($foto) ?>">
                                                        <img src="<?= base_url('assets/rumah/' . trim($foto)) ?>" class="d-block w-100" alt="Foto Denah" style="border-radius: 15px;">
                                                    </a>
                                                </div>
                                        <?php
                                            endforeach;
                                        endforeach;
                                        ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php' ?>
