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
                    href="https://manggadigital.my.id/">Halaman Utama </a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/murah/') ?>"> Murah</a></b>
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
                        <form action="<?php echo site_url('homerumah/ukuran_murah') ?>" method="get" enctype="multipart/form-data" autocomplete="off">
                            <div class="radio-button mb-3">
                                <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Tipe Rumah</small></p>
                                <input type="radio" id="classic" name="tipe_rumah" value="Classic" required>
                                <label for="classic">Classic</label>
                                <input type="radio" id="skandinavian" name="tipe_rumah" value="Skandinavian" required>
                                <label for="skandinavian">Skandinavian</label>
                                <input type="radio" id="minimalist" name="tipe_rumah" value="Minimalist" required>
                                <label for="minimalist">Minimalist</label>
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
