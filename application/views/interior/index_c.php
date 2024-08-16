<html>

<?php include 'header.php' ?>
<style>
        /* Kontainer carousel untuk menghindari pemotongan efek hover */
    .carousel-inner {
        
        padding: 20px;
        /* Tambahkan padding untuk memberikan ruang ekstra */
    }

    /* Mengubah warna ikon navigasi menjadi hitam */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
    }

    /* Menyesuaikan ukuran dan bentuk ikonnya jika diperlukan */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 30px;
        height: 30px;
        background-size: 100%, 100%;
        border-radius: 50%;
    }
</style>

<body style="background-color: #ffffff;">
    <!-- <nav class="navbar bg-dark">
            <div class="container-fluid justify-content-center" style="min-height: 10%;">
                <a class="text-center" href="<?php echo site_url('cek_harga') ?>">
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
                <b>Mau Bikin Interior ?</b>
            </h2>
            <p class="text-center" style="font-family: Arial, Helvetica, sans-serif;">Pilih Tipe Interior Kamu</p>
        </div>

        <div class="container" width="50%">
            <b><a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="https://siperindo.id/">Halaman Utama </a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('interior_c') ?>"> Interior Paket Murah</a></b>
        </div>
        <!-- <div class="custom-search my-3">
                <input type="text" class="custom-search-input" placeholder="Cari tipe hp kamu...">
                <button class="custom-search-botton" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->
        </div>
        <div class="container my-3">
            <div id="kategoriCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($data_kategori as $index => $row): ?>
                        <?php if ($index % 3 == 0): ?>
                            <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                                <div class="row justify-content-center">
                                <?php endif; ?>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <a href="<?= site_url('/interior_c/gradea/' . $row->id_kategori . '') ?>"
                                        class="text-decoration-none">
                                        <div class="card text-alignment class custom-card">
                                            <div class="card-body align-items-center d-flex justify-content-center">
                                                <span class="text-center"><?php echo $row->nama_kategori ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php if ($index % 3 == 2 || $index == count($data_kategori) - 1): ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#kategoriCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#kategoriCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="container my-3">
            <div class="row justify-content-center">
                <p style="font-family: Arial, Helvetica, sans-serif;">Ada Pertanyaan ? Hubungi Kami Sekarang Juga
                    !</p>
            </div>
            <div class="row justify-content-center">
                <a href="https://wa.me/6281250969099" target="_blank" class="btn-sm btn-success"><i
                        class="fa fa-whatsapp"></i> <b style="font-family: Arial, Helvetica, sans-serif;">Hubungi
                        Kami</b></a>
            </div>
        </div>
    </section>
</body>

<?php include 'footer.php' ?>

</html>