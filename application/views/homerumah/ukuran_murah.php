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
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/murah/') ?>"> Murah</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/ukuran_murah?tipe_rumah=' . $idTipe . '') ?>">
                    <?php echo $tipe ?></a></b>
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
                    <form action="<?php echo site_url('homerumah/kamar_murah') ?>" method="get"
                        enctype="multipart/form-data" autocomplete="off">
                        
                            <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Ukuran Rumah
                                    (m2)</small></p>
                                    <div class="row">
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">
                                        <input type="radio" class="form-check-input" id="ukuran_36" name="ukuran_rumah"
                                            value="36" required>
                                        <label class="form-check-label" for="ukuran_36">36</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">
                                        <input type="radio" class="form-check-input" id="ukuran_45" name="ukuran_rumah"
                                            value="45" required>
                                        <label class="form-check-label" for="ukuran_45">45</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">
                                        <input type="radio" class="form-check-input" id="ukuran_60" name="ukuran_rumah"
                                            value="60" required>
                                        <label class="form-check-label" for="ukuran_60">60</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">
                                        <input type="radio" class="form-check-input" id="ukuran_70" name="ukuran_rumah"
                                            value="70" required>
                                        <label class="form-check-label" for="ukuran_70">70</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">
                                        <input type="radio" class="form-check-input" id="ukuran_90" name="ukuran_rumah"
                                            value="90" required>
                                        <label class="form-check-label" for="ukuran_90">90</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">    
                                        <input type="radio" class="form-check-input" id="ukuran_100" name="ukuran_rumah"
                                            value="100" required>
                                        <label class="form-check-label" for="ukuran_100">100</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">
                                        <input type="radio" class="form-check-input" id="ukuran_120" name="ukuran_rumah"
                                            value="120" required>
                                        <label class="form-check-label" for="ukuran_120">120</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran">   
                                        <input type="radio" class="form-check-input" id="ukuran_160" name="ukuran_rumah"
                                            value="160" required>
                                        <label class="form-check-label" for="ukuran_160">160</label>
                                </div>
                                <div class="radio-button-ukuran mb-3 col-4 mb-3" id="inputUkuran"> 
                                        <input type="radio" class="form-check-input" id="ukuran_200" name="ukuran_rumah"
                                            value="200" required>
                                        <label class="form-check-label" for="ukuran_200">200</label>
                                </div>
                                <input type="hidden" id="tipe_rumah" class="form-control" name="tipe_rumah"
                                    value="<?php echo $idTipe ?>">
                            </div>
                            <input type="hidden" id="tipe_rumah" class="form-control" name="tipe_rumah"
                                value="<?php echo $idTipe ?>">
                        <button type="submit" id="btnSubmit" class="btn btn-warning"
                            style="border-radius:10px; width: 300px;"><b
                                style="font-family: Arial, Helvetica, sans-serif;">Lanjutkan</b></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>

</html>