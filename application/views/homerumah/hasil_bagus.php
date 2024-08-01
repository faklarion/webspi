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
                    href="<?php echo site_url('homerumah/bagus/') ?>"> Bagus</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/ukuran_bagus?tipe_rumah=' . $tipe . '') ?>">
                    <?php echo $namaTipe ?></a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/kamar_bagus?ukuran_rumah=' . $ukuran . '&tipe_rumah=' . $tipe . '') ?>">
                    <?php echo $ukuran ?> (m2)</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%">
                    Harga</a></b>
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
                            <form action="<?php echo site_url('homerumah/lihat_denah')?>">
                                <input type="hidden" name="tipe" value="<?php echo $tipe ?>">
                                <input type="hidden" name="ukuran" value="<?php echo $ukuran ?>">
                                <input type="hidden" name="kamar" value="<?php echo $kamar ?>">
                                <input type="hidden" name="wc" value="<?php echo $wc ?>">
                                <input type="hidden" name="harga" value="<?php echo $harga ?>">
                                <input type="hidden" name="hargacoret" value="<?php echo $hargacoret ?>">
                                <input type="hidden" name="namaTipe" value="<?php echo $namaTipe ?>">
                                <input type="hidden" name="jenis" value="Bagus">
                                <input input type="submit" value="Lihat Rekomendasi Denah Rumah Kamu" class="btn btn-primary" />
                            </form>
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
                            <a href="<?php echo site_url('homerumah/bagus') ?>" class="btn btn-sm btn-warning"><b
                            style="font-family: Arial, Helvetica, sans-serif;">Cek Kembali</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php' ?>
