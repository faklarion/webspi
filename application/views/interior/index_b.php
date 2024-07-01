<html>

<?php include 'header.php' ?>

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
                    href="https://manggadigital.my.id/">Halaman Utama </a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('interior_b') ?>"> Interior Grade B</a></b>
        </div>
        <!-- <div class="custom-search my-3">
                <input type="text" class="custom-search-input" placeholder="Cari tipe hp kamu...">
                <button class="custom-search-botton" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->
        </div>
        <div class="container my-3">
            <div class="row">
                <?php foreach ($data_kategori as $row): ?>
                    <div class="col-6">
                        <a href="<?= site_url('/interior_b/gradea/' . $row->id_kategori . '') ?>">
                            <div class="card text-alignment class"
                                style="background-color: #f0f0f0; border-radius: 12px; height:150px;">
                                <div class="card-body align-items-center d-flex justify-content-center">
                                    <h4 class="text-center" style="color: black;"><?php echo $row->nama_kategori ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

<?php include 'footer.php' ?>

</html>