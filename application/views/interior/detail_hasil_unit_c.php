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
                    href="https://manggadigital.my.id/">Halaman Utama </a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('interior_c') ?>"> Interior Paket Murah</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('interior_c/gradea/' . $idKategori . '') ?>">
                    <?php echo $namaKategori ?></a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('interior_c/detail_barang/' . $idBarang . '') ?>">
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
                        <td><?php echo $namaBarang?></td>
                    </tr>
                    <tr>
                        <td>Unit/Meter</td>
                        <td width="20px" class="text-center"> : </td>
                        <td><?php echo $unit?> </td>
                    </tr>
                    
                </table>
                <hr>
                    <span style="font-family: Arial, Helvetica, sans-serif;">Estimasi Harga Jasa Pembuatan Interior Kamu
                        Adalah</span>
                    <?php
                    $result = $this->Interior_model->get_all_barang_by_id($id_barang);

                    foreach ($result as $row) {
                        $hargaa = $row->harga_c;
                    }

                    $customUnit = custom_round($unit);
                    
                    $harga = $customUnit * $hargaa;
                    ?>
                    <h2 style="font-family: Arial, Helvetica, sans-serif;"><?php echo rupiah($harga); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>