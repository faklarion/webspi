<html>

<?php include 'header.php'?>

<body style="background-color: #ffffff;">
        <!-- <nav class="navbar bg-dark">
            <div class="container-fluid justify-content-center" style="min-height: 10%;">
                <a class="text-center" href="<?php echo site_url('cek_harga')?>">
                    <img src="<?= base_url('assets/img/gsklogogold.png') ?>" width="150px">
                </a>
            </div>
        </nav> -->
    <section>

        <!-- <div>
            <img class="img-fluid" src="<?= base_url('assets/img/banner.jpg') ?>" width="100%">
        </div> -->
        <div>
                <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">
                    <b>Mau Bikin Rumah ?</b>
                </h2>
            </div>

            <div class="container" width="50%">
            <b><a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="https://manggadigital.my.id/">Halaman Utama </a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/bagus/') ?>"> Ideal</a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/ukuran_bagus?tipe_rumah='.$tipe.'') ?>"> <?php echo $namaTipe ?></a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/kamar_bagus?ukuran_rumah='.$ukuran.'&tipe_rumah='.$tipe.'') ?>"> <?php echo $ukuran ?> (m2)</a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"> Harga</a></b>
            </b>
        </div>
        <!-- <div class="custom-search my-3">
                <input type="text" class="custom-search-input" placeholder="Cari tipe hp kamu...">
                <button class="custom-search-botton" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->
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
                        <div class="container">
                        <span style="font-family: Arial, Helvetica, sans-serif;">Estimasi Harga Jasa Bangun Rumah Impian
                            Kamu Adalah</span>
                        <div style="display: flex;">
                            <h4 style="font-family: Arial, Helvetica, sans-serif;"><?php echo rupiah($harga); ?></h4>
                            <span
                                style="font-family: Arial, Helvetica, sans-serif;"><s><?php echo rupiah($harga + ((25 / 100) * $harga)); ?></s></span>
                        </div>
                        <a href="<?php echo site_url('homerumah/mewah') ?>" class="btn-sm btn-warning"><b
                                style="font-family: Arial, Helvetica, sans-serif;">Cek Kembali</b></a>
                    </div>
                    <div class="container mt-4">
                        <div class="row justify-content-center">
                            <p style="font-family: Arial, Helvetica, sans-serif;">Berminat ? Hubungi Kami Sekarang Juga
                                !</p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://wa.me/6281250969099" target="_blank" class="btn-sm btn-success"><i
                                    class="fa fa-whatsapp"></i> <b
                                    style="font-family: Arial, Helvetica, sans-serif;">Hubungi Kami</b></a>
                        </div>
                    </div>
                    <div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
                        <h6 class="text-center">Rekomendasi Desain Rumah Untuk Kamu</h6>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            $images = $this->Tbl_foto_bagus_model->get_by_id_kategori($tipe);
                            foreach ($images as $index => $image): ?>
                                <li data-target="#myCarousel" data-slide-to="<?php echo $index; ?>"
                                    class="<?php echo ($index == 0) ? 'active' : ''; ?>"></li>
                            <?php endforeach; ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php
                            foreach ($images as $index => $image): ?>
                                <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                                    <img src="<?php echo base_url('assets/foto_bagus/' . $image->foto); ?>"
                                        class="d-block w-100" alt="Slide <?php echo $index + 1; ?>" style="border-radius:10px; width: 50%; height: auto;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Slide <?php echo $index + 1; ?></h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include 'footer.php'?>

</html>