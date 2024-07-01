<?php include 'header.php' ?>
<html>
        <div class="container my-3">
            <table class="table table-bordered display responsive small" style="width:100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Nama Barang</th>
                        <!-- <th class="text-center" scope="col">Harga Grade A</th> -->
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
                            <!-- <td><?= rupiah($row->harga_a) ?></td> -->
                            <td class="text-center" width="20%">
                                <a href="<?= site_url('/interior/detail_barang/' . $row->id_barang . '') ?>">
                                    <button type="button" class="btn btn-info" >Cek Harga</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
<?php include 'footer.php'?>
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