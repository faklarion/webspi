<div class="container"
    style="background-color: white; border-radius: 10px; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center; text-align: center;">
    <div>
        <span
            style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
            Estimasi Harga Jasa Bangun Rumah Impian Kamu Adalah
        </span>
        <h5
            style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
            <s>
                <?php
                if($jenis == 1) {
                    $hargaMeter = $this->Tbl_mewah_model->get_by_id($tipe);
                    $hargaRumah = $ukuran * $hargaMeter->harga;
                } elseif($jenis == 2) {
                    $hargaMeter = $this->Tbl_bagus_model->get_by_id($tipe);
                    $hargaRumah = $ukuran * $hargaMeter->harga;
                } elseif($jenis == 3) {
                    $hargaMeter = $this->Tbl_murah_model->get_by_id($tipe);
                    $hargaRumah = $ukuran * $hargaMeter->harga;
                }

                $hargacoret = $hargaRumah + ((25 / 100) * $hargaRumah);
                echo rupiah($hargacoret);
                ?>
            </s>
        </h5>
    </div>
</div>

<div class="container mt-1"
    style="background-color: #FF2200; border-radius: 10px; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center; text-align: center;">
    <div>
        <span
            style="color: white; font-family: Arial, Helvetica, sans-serif; font-size: 1.3em; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
            Harga spesial di website
        </span>
        <h3
            style="color: white; font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
            <b>Rp </b>
            <b>
                <div id="odometer" style=" display: inline-block;"></div>
            </b>
        </h3>
    </div>
</div>