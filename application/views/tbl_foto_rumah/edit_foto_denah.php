<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA FOTO DENAH</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
			
				<table class='table table-bordered'>

                    <tr>
						<td width='200'>Jenis Rumah</td>
						<td> 
							<?php 
                                if($id_jenis == 1) {
                                    echo 'Mewah';
                                } else if($id_jenis == 2) {
                                    echo 'Ideal';
                                }  else if($id_jenis == 1) {
                                    echo 'Murah';
                                }
                            ?>
						</td>
					</tr>

                    <tr>
						<td width='200'>Tipe Rumah</td>
						<td> 
							<?php 
                                if($id_tipe == 1) {
                                    echo 'Classic';
                                } else if($id_tipe == 2) {
                                    echo 'Skandinavian';
                                }  else if($id_tipe == 1) {
                                    echo 'Minimalis';
                                }
                            ?>
						</td>
					</tr>

                    <tr>
						<td width='200'>Ukuran Rumah</td>
						<td> 
							<?php 
                                echo $ukuran_awal;
                            ?>
						</td>
					</tr>

                    <tr>
						<td width='200'>Desain ke-</td>
						<td> 
							<?php 
                                echo $desain;
                            ?>
						</td>
					</tr>

					<tr>
						<td width='200'>Foto Denah</td>
						<td> 
							<input type="file" class="form-control" rows="3" name="foto_denah[]" id="foto_denah" placeholder="Foto">
						</td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_foto_denah" value="<?php echo $id_foto_denah; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('tbl_foto_rumah') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>