<script>
    document.querySelectorAll('.fotoLink').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah tindakan default dari <a>
            var foto = link.getAttribute('data-foto');
            document.getElementById('fotodenah').value = foto; // Mengisi input hidden dengan nama foto
            document.getElementById('myForm').submit(); // Mensubmit form
        });
    });
</script>
<script>
    document.querySelectorAll('.rumahLink').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah tindakan default dari <a>
            var foto = link.getAttribute('data-foto');
            document.getElementById('fotorumah').value = foto; // Mengisi input hidden dengan nama foto
            document.getElementById('myFormRumah').submit(); // Mensubmit form
        });
    });
</script>
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

<footer class="footer">
    &copy; <?php echo DATE('Y'); ?> ZED Group. All rights reserved.
</footer>