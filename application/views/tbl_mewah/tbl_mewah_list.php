<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
    
                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA HARGA MEWAH</h3>
                    </div>
        
        <div class="box-body">
            <div class='row'>
            <div class='col-md-9'>
            <div style="padding-bottom: 10px;">
                <?php echo anchor(site_url('tbl_foto_mewah/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Foto', 'class="btn btn-danger btn-sm"'); ?>
            </div> 
            </div>
            <div class='col-md-3'>
            <form action="<?php echo site_url('tbl_mewah/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tbl_mewah'); ?>" class="btn btn-default">Reset</a>
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
                <th>Tipe</th>
                <th>Harga</th>
                <th>Action</th>
            </tr><?php
            foreach ($tbl_mewah_data as $tbl_mewah)
            {
                ?>
                <tr>
			<td width="10px"><?php echo ++$start ?></td>
			<td><?php echo $tbl_mewah->tipe ?></td>
			<td><?php echo rupiah($tbl_mewah->harga) ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				//echo anchor(site_url('tbl_mewah/read/'.$tbl_mewah->id_mewah),'<i class="fa fa-eye" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				//echo '  '; 
				echo anchor(site_url('tbl_mewah/update/'.$tbl_mewah->id_mewah),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm"'); 
				//echo '  '; 
				//echo anchor(site_url('tbl_mewah/delete/'.$tbl_mewah->id_mewah),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $tbl_mewah->id_mewah ?>">Lihat Foto</button>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        
        </div>
                    </div>
            </div>
            </div>
    </section>
</div>


<!-- Modal -->
<?php foreach($tbl_mewah_data as $tbl_mewah) : ?>
<div id="myModal<?php echo $tbl_mewah->id_mewah?>" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Lihat Foto <?php echo $tbl_mewah->tipe ?></h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<table class="table table-bordered">
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
                                $foto = $this->Tbl_foto_mewah_model->get_by_id_kategori($tbl_mewah->id_mewah);
                                foreach ($foto as $row) :
                                ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><img src="<?php echo base_url('assets/foto_mewah/'.$row->foto.'')?>" width="150px"></td>
                                    <td>
                                      <?php 
                                        echo anchor(site_url('tbl_foto_mewah/delete/'.$row->id_foto),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" Delete onclick="javascript: return confirm(\'Are You Sure ?\')"'); 
                                      ?>  
                                    </td>
                                </tr>
                                <?php endforeach ?>
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