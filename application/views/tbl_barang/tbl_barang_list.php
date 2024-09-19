<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA BARANG</h3>
                    </div>

                    <div class="box-body">
                        <div class='row'>
                            <div class='col-md-9'>
                                <div style="padding-bottom: 10px;">
                                    <?php echo anchor(site_url('tbl_barang/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
                                </div>
                            </div>

                        </div>


                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-md-4 text-center">
                                <div style="margin-top: 8px" id="message">
                                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover dt-responsive display nowrap" cellspacing="0"
                                id="tabelBarang">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Harga Grade A</th>
                                        <th>Harga Grade B</th>
                                        <th>Harga Paket Murah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tbl_barang_data as $tbl_barang) { ?>
                                        <tr>
                                            <td width="10px"><?php echo ++$start ?></td>
                                            <td><?php echo $tbl_barang->nama_kategori ?></td>
                                            <td><?php echo $tbl_barang->nama_barang ?></td>
                                            <td><?php echo $tbl_barang->nama_satuan ?></td>
                                            <td><?php echo rupiah($tbl_barang->harga_a) ?></td>
                                            <td><?php echo rupiah($tbl_barang->harga_b) ?></td>
                                            <td><?php echo rupiah($tbl_barang->harga_c) ?></td>
                                            <td style="text-align:center" width="200px">
                                                <?php
                                                // echo anchor(site_url('tbl_barang/read/'.$tbl_barang->id_barang), '<i class="fa fa-eye" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm"'); 
                                                echo anchor(site_url('tbl_barang/update/' . $tbl_barang->id_barang), '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm"');
                                                echo '  ';
                                                echo anchor(site_url('tbl_barang/delete/' . $tbl_barang->id_barang), '<i class="fa fa-trash-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm" Delete onclick="javascript: return confirm(\'Are You Sure ?\')"');
                                                ?>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?= $tbl_barang->id_barang ?>">Lihat Foto <br> Grade A</button>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalB<?= $tbl_barang->id_barang ?>">Lihat Foto <br> Grade B</button>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalC<?= $tbl_barang->id_barang ?>">Lihat Foto <br> Grade C</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Grade A -->
<?php foreach($tbl_barang_data as $tbl_barang) : ?>
<div id="myModal<?= $tbl_barang->id_barang ?>" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Lihat Foto Grade A <?= $tbl_barang->nama_barang ?></h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<table class="table table-responsive table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Foto</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        $daftarFoto = $this->Tbl_barang_model->get_foto_by_id($tbl_barang->id_barang);
                        foreach ($daftarFoto as $images) : 
                        $image_array = explode(',', $images->foto);
                        ?>
                        <?php foreach ($image_array as $img): ?>
                            <?php if($img) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><img src="<?= base_url('assets/foto_barang/' . $img) ?>" alt="Uploaded Image" width="150px"></td>
                                <td>
                                            <!-- Form for delete action -->
                                            <form action="<?php echo site_url('tbl_barang/delete_photo'); ?>" method="post">
                                                <input type="hidden" name="photo_url"
                                                    value="<?php echo htmlspecialchars((string) $img); ?>">
                                                <input type="hidden" name="id_barang"
                                                    value="<?php echo $images->id_barang; ?>">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                </td>
                            </tr>
                            <?php } else { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>Tidak Ada Foto diupload</td>
                            </tr>
                            <?php } ?>
                            
                        <?php endforeach ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
</div>
<?php endforeach ?>

<!-- Modal Grade B -->
<?php foreach($tbl_barang_data as $tbl_barang) : ?>
<div id="myModalB<?= $tbl_barang->id_barang ?>" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Lihat Foto Grade B <?= $tbl_barang->nama_barang ?></h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<table class="table table-responsive table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Foto</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        $daftarFoto = $this->Tbl_barang_model->get_foto_by_id($tbl_barang->id_barang);
                        foreach ($daftarFoto as $images) : 
                        $image_array = explode(',', $images->foto_b);
                        ?>
                        <?php foreach ($image_array as $img): ?>
                            <?php if($img) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><img src="<?= base_url('assets/foto_barang/' . $img) ?>" alt="Uploaded Image" width="150px"></td>
                                <td>
                                            <!-- Form for delete action -->
                                            <form action="<?php echo site_url('tbl_barang/delete_photo_b'); ?>" method="post">
                                                <input type="hidden" name="photo_url"
                                                    value="<?php echo htmlspecialchars((string) $img); ?>">
                                                <input type="hidden" name="id_barang"
                                                    value="<?php echo $images->id_barang; ?>">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                </td>
                            </tr>
                            <?php } else { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>Tidak Ada Foto diupload</td>
                            </tr>
                            <?php } ?>
                            
                        <?php endforeach ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
</div>
<?php endforeach ?>

<!-- Modal Grade C -->
<?php foreach($tbl_barang_data as $tbl_barang) : ?>
<div id="myModalC<?= $tbl_barang->id_barang ?>" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Lihat Foto Grade C <?= $tbl_barang->nama_barang ?></h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<table class="table table-responsive table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Foto</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        $daftarFoto = $this->Tbl_barang_model->get_foto_by_id($tbl_barang->id_barang);
                        foreach ($daftarFoto as $images) : 
                        $image_array = explode(',', $images->foto_c);
                        ?>
                        <?php foreach ($image_array as $img): ?>
                            <?php if($img) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><img src="<?= base_url('assets/foto_barang/' . $img) ?>" alt="Uploaded Image" width="150px"></td>
                                <td>
                                            <!-- Form for delete action -->
                                            <form action="<?php echo site_url('tbl_barang/delete_photo_c'); ?>" method="post">
                                                <input type="hidden" name="photo_url"
                                                    value="<?php echo htmlspecialchars((string) $img); ?>">
                                                <input type="hidden" name="id_barang"
                                                    value="<?php echo $images->id_barang; ?>">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                </td>
                            </tr>
                            <?php } else { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>Tidak Ada Foto diupload</td>
                            </tr>
                            <?php } ?>
                            
                        <?php endforeach ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
</div>
<?php endforeach ?>

