
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_FOTO_RUMAH</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Id Tipe</td>
				<td><?php echo $id_tipe; ?></td>
			</tr>
	
			<tr>
				<td>Ukuran Awal</td>
				<td><?php echo $ukuran_awal; ?></td>
			</tr>
	
			<tr>
				<td>Foto</td>
				<td><?php echo $foto; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('tbl_foto_rumah') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>