
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_BARANG</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Id Kategori</td>
				<td><?php echo $id_kategori; ?></td>
			</tr>
	
			<tr>
				<td>Nama Barang</td>
				<td><?php echo $nama_barang; ?></td>
			</tr>
	
			<tr>
				<td>Harga A</td>
				<td><?php echo $harga_a; ?></td>
			</tr>
	
			<tr>
				<td>Harga B</td>
				<td><?php echo $harga_b; ?></td>
			</tr>
	
			<tr>
				<td>Harga C</td>
				<td><?php echo $harga_c; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('tbl_barang') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>