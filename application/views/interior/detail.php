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
                        href="<?php echo site_url('interior') ?>"> Interior Grade A</a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                        href="<?php echo site_url('interior/gradea/' . $idKategori . '') ?>"> <?php echo $namaKategori ?></a></b>
                        <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                        href="<?php echo site_url('interior/detail_barang/' . $idBarang . '') ?>"> <?php echo $namaBarang ?></a></b>
            </div>
        <!-- <div class="custom-search my-3">
                <input type="text" class="custom-search-input" placeholder="Cari tipe hp kamu...">
                <button class="custom-search-botton" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div> -->
        </div>
        <div class="container my-3">
                <div class="card" style="background-color: #f0f0f0; border-radius: 10px;">
                    <div class="card-body">
                        <form action="<?php echo site_url('interior/detail_a') ?>" method="get" enctype="multipart/form-data" autocomplete="off">
                            <div class="radio-button mb-3">
                                <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Masukkan Panjang (meter)</small></p>
                                    <input type="number" step=".01" id="panjang" class="form-control" name="panjang" placeholder="Masukkan Panjang" required>
                                <?php foreach($detail_barang as $row) : ?>
                                    <input type="hidden" value="<?php echo $row->id_barang?>" name="id_barang"/>
                                <?php endforeach; ?>
                            </div>
                            <div class="radio-button mb-3">
                                <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Masukkan Lebar (meter)</small></p>
                                <input type="number" id="lebar" step=".01" class="form-control" name="lebar" placeholder="Masukkan Lebar" required>
                            </div>
                            <div class="radio-button mb-3">
                                <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Masukkan Tinggi (meter)</small></p>
                                <input type="number" id="tinggi" step=".01" class="form-control" name="tinggi" placeholder="Masukkan Tinggi" required>
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
