<style>
    .card-img {
        width: 200px; /* Mengisi lebar card body */
        height: auto;
        object-fit: cover; /* Memastikan gambar menutupi seluruh area card body */
        border-radius: 15px; /* Sama seperti border-radius card */
    }
    

    @media (max-width: 576px) { /* Media query untuk perangkat mobile */
        .card-img {
            width: 100%; /* Mengisi lebar card body */
            height: auto; /* Biarkan height otomatis */
        }
    }

    
</style>
<?php include 'header.php' ?>
<body style="background-color: #ffffff;">
    <section>
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
                    href="<?php echo site_url('homerumah/bagus/') ?>"> Ideal</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/ukuran_bagus?tipe_rumah=' . $tipe . '') ?>">
                    <?php echo $namaTipe ?></a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%"
                    href="<?php echo site_url('homerumah/kamar_bagus?ukuran_rumah=' . $ukuran . '&tipe_rumah=' . $tipe . '') ?>">
                    <?php echo $ukuran ?> (m2)</a></b>
            <i class="fa fa-chevron-right text-muted" style="font-size: 12px;"></i>
            <b> <a class="text-muted hover-overlay" style="font-family: Arial, Helvetica, sans-serif; font-size: 70%">
                    Pilih Denah</a></b>
            </b>
        </div>
        </div>
        <div class="container my-3">
            <div class="card" style="background-color: #f0f0f0; border-radius: 10px;">
                <div class="container my-3">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Jenis Rumah</td>
                                <td width="20px" class="text-center">:</td>
                                <td>
                                    <?php 
                                    if($jenis == 1) {
                                        echo 'Mewah';
                                    } elseif($jenis == 2) {
                                        echo 'Ideal'; 
                                    } elseif($jenis == 3) {
                                        echo 'Murah';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tipe</td>
                                <td width="20px" class="text-center">:</td>
                                <td><?php echo $namaTipe ?></td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td width="20px" class="text-center">:</td>
                                <td><?php echo $ukuran ?> (m2)</td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    
                    <form action="<?php echo site_url('homerumah/lihat_rekap_bagus') ?>" method="get" enctype="multipart/form-data" autocomplete="off">
                        <p><h4 class="text-muted text-center" style="font-family: Arial, Helvetica, sans-serif;">Pilih Denah Untuk Rumah Kamu</h4></p>
                        <div class="radio-button mb-3" id="inputUkuran">
                            <p><small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">Jumlah Kamar</small></p>
                            <input type="hidden" id="ukuran_rumah" class="form-control" name="ukuran_rumah" value="<?php echo $ukuran ?>">
                            <input type="hidden" id="id_foto_rumah" class="form-control" name="id_foto_rumah" value="<?php echo $id_foto_rumah ?>">
                            <input type="hidden" id="tipe_rumah" class="form-control" name="tipe_rumah" value="<?php echo $tipe ?>">
                            <input type="hidden" id="jenis_rumah" class="form-control" name="jenis_rumah" value="<?php echo $jenis ?>">
                            <?php 
                                $jmlKamar = $this->Tbl_foto_denah_model->get_kamar_by_id_foto_rumah($id_foto_rumah); 
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
                    
                    
                    <!-- <?php include 'harga.php'; ?> -->

                    
                     
                    <!-- <?php include 'hari.php'; ?> -->
        
                </div>
            </div>
        </div>
    </section>
</body>
<script>
$(document).ready(function() {
    $('input[name="jumlah_kamar"]').on('change', function() {
        var kamar = $(this).val(); // Ambil nilai kamar yang dipilih
        var idFotoRumah = $('#id_foto_rumah').val(); // Ambil ID foto rumah dari input hidden
        
        // Lakukan request ke server untuk mengambil jumlah WC berdasarkan kamar dan id_foto_rumah
        $.ajax({
            url: "<?php echo site_url('homerumah/get_wc_by_kamar_id_rumah'); ?>", // URL ke controller yang tepat
            method: 'POST', // Gunakan 'method' daripada 'type'
            data: {kamar: kamar, id_foto_rumah: idFotoRumah}, // Kirim dua parameter: kamar dan id_foto_rumah
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
<?php include 'footer.php' ?>
