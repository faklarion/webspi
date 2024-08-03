<script>
    // Nilai awal dan akhir yang valid
    const startVal = <?php $hargacoret = $harga + ((25 / 100) * $harga);
                            echo $hargacoret; ?>; // Nilai awal
    const endVal = <?php echo $harga ?>;      // Nilai akhir
    
    // Membuat instance baru dari CountUp
    const odometer = new CountUp('odometer', startVal, endVal, 0, 3, {
        useEasing: true,
        useGrouping: true,
        separator: '.',
        decimal: '.',
    });

    // Memulai animasi ke nilai akhir
    if (!odometer.error) {
        odometer.start();
    } else {
        console.error(odometer.error);
    }
</script>
<script>
    // Nilai awal dan akhir yang valid
    const awalHari = 1; // Nilai awal
    const akhirHari = <?php echo ($ukuran * 1.7) ?>;      // Nilai akhir
    
    // Membuat instance baru dari CountUp
    const odometerHari = new CountUp('odometerhari', awalHari, akhirHari, 0, 3, {
        useEasing: true,
        useGrouping: true,
        separator: '.',
        decimal: '.',
    });

    // Memulai animasi ke nilai akhir
    if (!odometerHari.error) {
        odometerHari.start();
    } else {
        console.error(odometerHari.error);
    }
</script>

<footer class="footer">
    &copy; <?php echo DATE('Y'); ?> ZED Group. All rights reserved.
</footer>