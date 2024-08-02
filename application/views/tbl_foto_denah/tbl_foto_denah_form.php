<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA FOTO DENAH</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
			
				<table class='table table-bordered'>
	    
					<tr>
						<td width='200'>Foto</td>
						<td> 
							<input type="file" class="form-control" rows="3" name="foto[]" id="foto" placeholder="Foto" required multiple>
						</td>
					</tr>

					<tr>
						<td width='200'>Ukuran Awal <?php echo form_error('ukuran_awal') ?></td><td><input type="number" class="form-control" name="ukuran_awal" id="ukuran_awal" placeholder="Ukuran Awal" value="<?php echo $ukuran_awal; ?>" readonly/></td>
					</tr>
	
					<tr>
						<td width='200'>Ukuran Akhir <?php echo form_error('ukuran_akhir') ?></td><td><input type="number" max="300" class="form-control" name="ukuran_akhir" id="ukuran_akhir" placeholder="Ukuran Akhir" value="<?php echo $ukuran_akhir; ?>" readonly/></td>
					</tr>

					<tr>
						<td width='200'>Kamar</td><td><input type="number" max="300" class="form-control" name="kamar" id="kamar" placeholder="Kamar" value="<?php echo $kamar; ?>" readonly/></td>
					</tr>
	
					
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_foto_denah" value="<?php echo $id_foto_denah; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('tbl_foto_denah') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>