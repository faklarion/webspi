<div class="container mt-4" style="background-color: #2E8B57; border-radius: 10px; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); align-items: center; justify-content: center; text-align: center;">
    <h6 style="color: white; font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em; ">
       Pembangunan akan dimulai setelah 3 Hari Pembayaran
    </h6>
    <h6 style="color: white; font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em; ">
       Jika bayar hari ini, maka pembangunan dimulai pada tanggal 
       <?php 
            $date = date('Y-m-d');
            $newdate = date('Y-m-d', strtotime($date.' + 3 days'));
            echo tgl_indo($newdate);
       ?>
    </h6>
    <h6 style="color: white; font-family: Arial, Helvetica, sans-serif; margin-bottom: 0.8em; margin-top: 0.8em;">
        Estimasi Waktu Pengerjaan Adalah <b>
            <div id="odometerhari" style=" display: inline-block;"></div> Hari
        </b>
    </h6>
</div>