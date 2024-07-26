<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA FOTO DENAH</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
            <div class='col-md-9'>
            <div style="padding-bottom: 10px;">
                <?php echo anchor(site_url('tbl_foto_denah/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
            </div>
            </div>
            <div class='col-md-3'>
            <form action="<?php echo site_url('tbl_foto_denah/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tbl_foto_denah'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
            </div>
        
   
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Ukuran</th>
            </tr><?php
            foreach ($tbl_foto_denah_data as $tbl_foto_denah)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="#myModal<?php echo $tbl_foto_denah->id_foto_denah ?>">Lihat Foto
                </button>
            </td>
			<td><?php echo $tbl_foto_denah->ukuran_awal ?> - <?php echo $tbl_foto_denah->ukuran_akhir ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				//echo anchor(site_url('tbl_foto_denah/read/'.$tbl_foto_denah->id_foto_denah),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				//echo '  '; 
				//echo anchor(site_url('tbl_foto_denah/update/'.$tbl_foto_denah->id_foto_denah),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				//echo '  '; 
				//echo anchor(site_url('tbl_foto_denah/delete/'.$tbl_foto_denah->id_foto_denah),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
                    </div>
            </div>
            </div>
    </section>
</div>

<!-- Modal -->
<?php foreach ($tbl_foto_denah_data as $tbl_foto_denah): ?>
    <div id="myModal<?php echo $tbl_foto_denah->id_foto_denah ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Lihat Foto</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto Rumah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $foto = $this->Tbl_foto_denah_model->get_by_id($tbl_foto_denah->id_foto_denah);
                            if ($foto && $foto->foto != null) {
                                // Explode the fetched photo string into an array of photo URLs
                                $photos = array_map('trim', explode(",", $foto->foto));

                                // Loop through each photo URL
                                foreach ($photos as $photo):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><img src="<?php echo base_url('assets/denah/' . htmlspecialchars((string) $photo)) ?>"
                                                width="150px"></td>
                                        <td>
                                            <!-- Form for delete action -->
                                            <form action="<?php echo site_url('Tbl_foto_denah/delete_photo'); ?>" method="post">
                                                <input type="hidden" name="photo_url"
                                                    value="<?php echo htmlspecialchars((string) $photo); ?>">
                                                <input type="hidden" name="id_foto_denah"
                                                    value="<?php echo $foto->id_foto_denah; ?>">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="2">No photos available</td>
                                </tr>
                            <?php } ?>
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