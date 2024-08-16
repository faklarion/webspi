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
                    href="https://siperindo.id/">Halaman Utama </a></b>
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
                    Denah</a></b>
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
                    <div class="container">
                        <span style="font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; display: inline-block;">
                            Estimasi Harga Jasa Bangun Rumah Impian Kamu Adalah
                        </span>
                        <div style="display: inline-block; background-color: white; border-radius: 10px; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <h4 style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0;">
                                <?php echo rupiah($harga); ?>
                            </h4>
                            <span style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin-left: 10px;">
                                <s>
                                    <?php 
                                        $hargacoret = $harga + ((25 / 100) * $harga);
                                        echo rupiah($hargacoret); 
                                    ?>
                                </s>
                            </span>
                        </div>
                        <h6 style="font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em; display: inline-block;">Estimasi Waktu Pengerjaan Adalah
                            <?php echo ($ukuran * 1.7) ?> Hari
                        </h6>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <form action="<?php echo site_url('homerumah/lihat_desain')?>">
                                <input type="hidden" name="tipe" value="<?php echo $tipe ?>">
                                <input type="hidden" name="ukuran" value="<?php echo $ukuran ?>">
                                <input type="hidden" name="kamar" value="<?php echo $kamar ?>">
                                <input type="hidden" name="wc" value="<?php echo $wc ?>">
                                <input type="hidden" name="harga" value="<?php echo $harga ?>">
                                <input type="hidden" name="hargacoret" value="<?php echo $hargacoret ?>">
                                <input type="hidden" name="namaTipe" value="<?php echo $namaTipe ?>">
                                <input type="hidden" name="jenis" value="<?php echo $jenis ?>">
                                <input input type="submit" value="Lihat Rekomendasi Desain Rumah Kamu" class="btn btn-primary" />
                            </form>
                        </div>
                    </div>
                    <div class="container">
                        <div id="carouselDenah" class="carousel slide mt-4" data-ride="carousel">
                            <h6 class="text-center">Berikut Rekomendasi Denah Untuk Kamu</h6>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php
                                $images = $this->Tbl_foto_denah_model->get_foto_denah_by_ukuran($ukuran);
                                $total_images = 0;
                                $has_images = false;

                                foreach ($images as $index => $image) {
                                    $image_array = explode(',', $image->foto);
                                    foreach ($image_array as $img) {
                                        if (!empty(trim($img))) {
                                            echo '<li data-target="#carouselDenah" data-slide-to="' . $total_images . '" class="' . ($total_images == 0 ? 'active' : '') . '"></li>';
                                            $total_images++;
                                            $has_images = true;
                                        }
                                    }
                                }
                                ?>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php
                                if ($has_images) {
                                    $is_first = true;
                                    $total_images = 0;  // Reset counter for correct numbering
                                    foreach ($images as $image) {
                                        $image_array = explode(',', $image->foto);
                                        foreach ($image_array as $img) {
                                            if (!empty(trim($img))) {
                                                ?>
                                                <div class="carousel-item <?php echo $is_first ? 'active' : ''; ?>">
                                                    <img src="<?php echo base_url('assets/denah/' . trim($img)); ?>"
                                                        class="img-fluid d-block w-100" alt="Slide <?php echo $total_images + 1; ?>"
                                                        style="border-radius:10px; width: 50%; height: auto;">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Slide <?php echo $total_images + 1; ?></h5>
                                                    </div>
                                                </div>
                                                <?php
                                                $is_first = false;
                                                $total_images++;
                                            }
                                        }
                                    }
                                } else {
                                    ?>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('assets/default.jpg'); ?>" class="d-block w-100"
                                            alt="No images available" style="border-radius:10px; width: 50%; height: auto;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>No images available</h5>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                            <!-- Controls -->
                            <a class="carousel-control-prev" href="#carouselDenah" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselDenah" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <p style="font-family: Arial, Helvetica, sans-serif;">Berminat ? Hubungi Kami Sekarang Juga !</p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="https://wa.me/6281250969099" target="_blank" class="btn btn-sm btn-success"><i
                                    class="fa fa-whatsapp"></i> <b
                                    style="font-family: Arial, Helvetica, sans-serif;">Hubungi Kami</b></a>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row justify-content-center">
                            <a href="<?php echo site_url('homerumah/mewah') ?>" class="btn btn-sm btn-warning"><b
                            style="font-family: Arial, Helvetica, sans-serif;">Cek Kembali</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php' ?>
