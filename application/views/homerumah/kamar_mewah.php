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
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/mewah/') ?>"> Mewah</a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/ukuran_mewah?tipe_rumah='.$idTipe.'') ?>"> <?php echo $tipe ?></a></b>
                <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i> 
                <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%" href="<?php echo site_url('homerumah/kamar_mewah?ukuran_rumah='.$ukuran.'&tipe_rumah='.$idTipe.'') ?>"> <?php echo $ukuran ?> (m2)</a></b>
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
                    <form action="<?php echo site_url('homerumah/detail_harga_mewah') ?>" method="get" enctype="multipart/form-data" autocomplete="off">
                        <div class="radio-button mb-3" id="inputUkuran">
                            <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Jumlah Kamar</small></p>
                            <input type="hidden" id="ukuran_rumah" class="form-control" name="ukuran_rumah" placeholder="Masukkan Ukuran" value="<?php echo $ukuran ?>">
                            <input type="hidden" id="tipe_rumah" class="form-control" name="tipe_rumah" value="<?php echo $idTipe ?>">
                            <?php 
                                $jmlKamar = $this->Tbl_foto_denah_model->get_kamar_by_ukuran($ukuran); 
                                foreach ($jmlKamar as $row) :
                            ?>
                            <input type="radio" id="kamar<?php echo $row->kamar; ?>" name="jumlah_kamar" value="<?php echo $row->kamar ?>" required>
                            <label for="kamar<?php echo $row->kamar; ?>"><?php echo $row->kamar ?></label>
                            <?php endforeach ?>
                        </div>
                        
                        <div class="radio-button mb-3" id="inputWc" style="display: none;">
                            <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Jumlah WC</small></p>
                            <div id="wcOptions"></div> <!-- Placeholder untuk jumlah WC -->
                        </div>
                        
                        <button type="submit" id="btnSubmit" class="btn btn-warning" style="border-radius:10px; width: 300px;">
                            <b style="font-family: Arial, Helvetica, sans-serif;">Cek Harga</b>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>
</body>
<script>
$(document).ready(function() {
    $('input[name="jumlah_kamar"]').on('change', function() {
        var kamar = $(this).val(); // Ambil nilai kamar yang dipilih
        var ukuran = $('#ukuran_rumah').val(); // Ambil ukuran rumah dari input hidden
        
        // Lakukan request ke server untuk mengambil jumlah WC berdasarkan kamar dan ukuran
        $.ajax({
            url: "<?php echo site_url('homerumah/get_wc_by_kamar'); ?>", // Ganti dengan URL ke controller yang tepat
            type: 'POST',
            data: {kamar: kamar, ukuran: ukuran}, // Kirim dua parameter: kamar dan ukuran
            success: function(response) {
                // Tampilkan div WC jika berhasil
                $('#inputWc').show();
                
                // Tampilkan jumlah WC ke dalam div #wcOptions
                $('#wcOptions').html(response);
            },
            error: function() {
                alert('Terjadi kesalahan saat mengambil data WC.');
            }
        });
    });
});
</script>
<?php include 'footer.php'; ?>
</html>
