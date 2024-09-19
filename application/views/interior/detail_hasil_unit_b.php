<html>
<?php include 'header.php'; ?>

<body style="background-color: #ffffff;">
    <section>

        <!-- <div>
            <img class="img-fluid" src="<?= base_url('assets/img/banner.jpg') ?>" width="100%">
        </div> -->
        <div>
            <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">
                <b>Mau Bikin Interior ?</b>
            </h2>
            <?php foreach ($detail_barang as $row) { ?>
                <p class="text-center" style="font-family: Arial, Helvetica, sans-serif;">
                    <?php echo $row->nama_barang; ?>
                </p>
            <?php } ?>
        </div>

        <div class="container" width="50%">
            <b><a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="https://siperindo.id/">Halaman Utama </a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('interior_b') ?>"> Interior Grade B</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('interior_b/gradea/' . $idKategori . '') ?>">
                    <?php echo $namaKategori ?></a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('interior_b/detail_barang/' . $idBarang . '') ?>">
                    <?php echo $namaBarang ?></a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="#"> Harga</a></b>
        </div>
        <!-- <div class="custom-search my-3">
                <input type="text" class="custom-search-input" placeholder="Cari tipe hp kamu...">
                <button class="custom-search-botton" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->
        </div>
        <div class="container my-3">
            <div class="card" style="background-color: #f0f0f0; border-radius: 10px;">
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Nama Interior</td>
                            <td width="20px" class="text-center"> : </td>
                            <td><?php echo $namaBarang ?></td>
                        </tr>
                        <tr>
                            <td>Unit/Meter</td>
                            <td width="20px" class="text-center"> : </td>
                            <td><?php echo $unit ?> </td>
                        </tr>

                    </table>
                    <hr>
                    <?php
                    $result = $this->Interior_model->get_all_barang_by_id($id_barang);

                    foreach ($result as $row) {
                        $hargaa = $row->harga_b;
                    }

                    $customUnit = custom_round($unit);

                    $harga = $customUnit * $hargaa;
                    ?>

                </div>
                
                <div class="container">
                    <?php include 'harga.php'?>
                </div>

                <div class="container">
                    <div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
                        <h6 class="text-center">Rekomendasi Desain Interior Untuk Kamu</h6>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            $images = $this->Tbl_barang_model->get_foto_by_id($id_barang);
                            $total_images = 0;
                            $has_images = false;

                            foreach ($images as $index => $image) {
                                $image_array = explode(',', $image->foto_b);
                                foreach ($image_array as $img) {
                                    if (!empty(trim($img))) {
                                        echo '<li data-target="#myCarousel" data-slide-to="' . $total_images . '" class="' . ($total_images == 0 ? 'active' : '') . '"></li>';
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
                                    $image_array = explode(',', $image->foto_b);
                                    foreach ($image_array as $img) {
                                        if (!empty(trim($img))) {
                                            ?>
                                            <div class="carousel-item <?php echo $is_first ? 'active' : ''; ?>">
                                                <img src="<?php echo base_url('assets/foto_barang/' . trim($img)); ?>"
                                                    class="d-block w-100" alt="Slide <?php echo $total_images + 1; ?>"
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
                <div class="container mt-4 mb-4">
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
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>