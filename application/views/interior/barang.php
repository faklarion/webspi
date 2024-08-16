<?php include 'header.php' ?>
<html>
<div>
    <h2 class="text-center" style="font-family: Arial, Helvetica, sans-serif;">
        <b>Mau Bikin Interior ?</b>
    </h2>
    <p class="text-center" style="font-family: Arial, Helvetica, sans-serif;"><?= $namaKategori ?></p>
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
</div>
<div class="container my-3">
    <table class="table table-bordered display responsive small" style="width:100%" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">Nama Barang</th>
                <th class="text-center" scope="col">Satuan</th>
                <th class="text-center" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $row): ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $row->nama_barang ?></td>
                    <td><?= $row->nama_satuan ?></td> 
                    <td class="text-center" width="20%">
                        <a href="<?= site_url('/interior/detail_barang/' . $row->id_barang . '') ?>">
                            <button type="button" class="btn btn-info">Cek Harga</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</section>
</body>
<?php include 'footer.php' ?>

</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').DataTable({
            responsive: true,
            filter: true,
            "searching": true,
            columnDefs: [{
                responsivePriority: 1,
                targets: 0
            },
            {
                responsivePriority: 2,
                targets: -1
            },
            {
                responsivePriority: 3,
                targets: 1
            }
            ]
        });
    });
</script>