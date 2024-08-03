<div class="container"
    style="background-color: white; border-radius: 10px; padding: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); display: flex; align-items: center; justify-content: center; text-align: center;">
    <div>
        <span
            style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
            Estimasi Harga Jasa Interior Kamu Adalah
        </span>
        <h5
            style="font-family: Arial, Helvetica, sans-serif; display: inline-block; margin: 0; padding: 0; vertical-align: middle;">
            <s>
                <?php
                $hargacoret = $harga + ((25 / 100) * $harga);
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