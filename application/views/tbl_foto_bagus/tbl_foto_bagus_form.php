<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA FOTO JENIS BAGUS</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Jenis Rumah <?php echo form_error('id_bagus') ?></td><td>
							<?php echo cmb_dinamis('id_bagus', 'tbl_bagus', 'tipe', 'id_bagus', $id_bagus)?>
						</td>
					</tr>
	    
					<tr>
						<td width='200'>Foto</td>
						<td><input type="file" class="form-control" rows="3" name="foto[]" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" required multiple/></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_foto" value="<?php echo $id_foto; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('tbl_bagus') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>