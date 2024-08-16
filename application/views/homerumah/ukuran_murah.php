<html>
<?php include 'header.php'; ?>
<body style="background-color: #ffffff;">
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
                    href="https://siperindo.id/">Halaman Utama </a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/murah/') ?>"> Murah</a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/ukuran_murah?tipe_rumah='.$idTipe.'') ?>"> <?php echo $tipe ?></a></b>
            </b>
        </div>
        <!-- <div class="custom-search my-3">
                <input type="text" class="custom-search-input" placeholder="Cari tipe hp kamu...">
                <button class="custom-search-botton" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->
        </div>
        <div class="container my-3">
                <div class="card" style="background-color: #f0f0f0; border-radius: 10px;">
                    <div class="card-body">
                        <form action="<?php echo site_url('homerumah/kamar_murah') ?>" method="get" enctype="multipart/form-data" autocomplete="off">
                            <div class="radio-button mb-3" id="inputUkuran">
                                <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Ukuran Rumah (m2)</small></p>
                                <input type="number" id="ukuran_rumah" class="form-control" name="ukuran_rumah" placeholder="Masukkan Ukuran" min="36" max="300" required>
                                <input type="hidden" id="tipe_rumah" class="form-control" name="tipe_rumah" value="<?php echo $idTipe ?>">
                            </div>
                                <button type="submit" id="btnSubmit" class="btn btn-warning" style="border-radius:10px; width: 300px;"><b
                                        style="font-family: Arial, Helvetica, sans-serif;">Lanjutkan</b></button>
                        </form>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>
</html>
