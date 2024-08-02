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
<footer class="footer">
    &copy; <?php echo DATE('Y'); ?> ZED Group. All rights reserved.
</footer>