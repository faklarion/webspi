<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA FOTO RUMAH</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
			
				<table class='table table-bordered'>
	
					<tr hidden>
						<td width='200'>Id Tipe <?php echo form_error('id_tipe') ?></td><td><input type="text" class="form-control" name="id_tipe" id="id_tipe" placeholder="Id Tipe" value="<?php echo $id_tipe; ?>" /></td>
					</tr>

					<tr>
						<td width="200">
							Jenis Rumah
						</td>
						<td>
							<?php 
								 
								if($id_jenis == 1) {
									echo 'Mewah';
								} elseif($id_jenis == 2) {
									echo 'Ideal';
								} elseif($id_jenis == 3) {
									echo 'Murah';
								}
								
							?>
						</td>
					</tr>

					<tr>
						<td width="200">
							Tipe Rumah
						</td>
						<td>
							<?php 
								 
								if($id_tipe == 1) {
									echo 'Classic';
								} elseif($id_tipe == 3) {
									echo 'Minimalis';
								} elseif($id_tipe == 2) {
									echo 'Skandinavian';
								}
								
							?>
						</td>
					</tr>
	
					<tr>
						<td width='200'>Ukuran <?php echo form_error('ukuran_awal') ?></td><td><input type="text" class="form-control" name="ukuran_awal" id="ukuran_awal" placeholder="Ukuran Awal" value="<?php echo $ukuran_awal; ?>" readonly/></td>
					</tr>

					<tr>
						<td width='200'>Desain ke- </td><td><input type="text" class="form-control" name="desain" id="desain" value="<?php echo $desain; ?>" readonly/></td>
					</tr>

					<tr>
						<td width='200'>Foto Rumah</td>
						<td> 
							<input type="file" class="form-control" rows="3" name="foto[]" id="foto" placeholder="Foto">
						</td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_foto_rumah" value="<?php echo $id_foto_rumah; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('tbl_foto_rumah') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>