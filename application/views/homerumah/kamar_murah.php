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
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/kamar_murah?ukuran_rumah='.$ukuran.'&tipe_rumah='.$idTipe.'') ?>"> <?php echo $ukuran ?> (m2)</a></b>
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
                        <form action="<?php echo site_url('homerumah/detail_harga_murah') ?>" method="get" enctype="multipart/form-data" autocomplete="off">
                            <div class="radio-button mb-3" id="inputUkuran">
                                <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Jumlah Kamar</small></p>
                                <input type="hidden" id="ukuran_rumah" class="form-control" name="ukuran_rumah" placeholder="Masukkan Ukuran" value="<?php echo $ukuran ?>">
                                <input type="hidden" id="tipe_rumah" class="form-control" name="tipe_rumah" value="<?php echo $idTipe ?>">
                                <input type="radio" id="kamar1" name="jumlah_kamar" value="1" required>
                                <label for="kamar1">1</label>
                                <input type="radio" id="kamar2" name="jumlah_kamar" value="2" required>
                                <label for="kamar2">2 </label>
                                <input type="radio" id="kamar3" name="jumlah_kamar" value="3" required>
                                <label for="kamar3">3</label>
                                <input type="radio" id="kamar4" name="jumlah_kamar" value="4" required>
                                <label for="kamar3">4</label>
                                <input type="radio" id="kamar5" name="jumlah_kamar" value="5" required>
                                <label for="kamar3">5</label>
                            </div>
                            <div class="radio-button mb-3" id="inputWc">
                                <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Jumlah WC</small></p>
                                <input type="radio" id="wc1" name="jumlah_wc" value="1" required>
                                <label for="wc1">1</label>
                                <input type="radio" id="wc2" name="jumlah_wc" value="2" required>
                                <label for="wc2">2 </label>
                                <input type="radio" id="wc3" name="jumlah_wc" value="3" required>
                                <label for="wc3">3</label>
                                <input type="radio" id="wc4" name="jumlah_wc" value="4" required>
                                <label for="wc3">4</label>
                                <input type="radio" id="wc5" name="jumlah_wc" value="5" required>
                                <label for="wc3">5</label>
                            </div>
                                <button type="submit" id="btnSubmit" class="btn btn-warning" style="border-radius:10px; width: 300px;"><b
                                        style="font-family: Arial, Helvetica, sans-serif;">Cek Harga</b></button>
                        </form>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>
</html>
