<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_BARANG</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Kategori <?php echo form_error('id_kategori') ?></td>
						<td>
							<?php echo cmb_dinamis('id_kategori', 'tbl_kategori', 'nama_kategori', 'id_kategori', $id_kategori)?>
						</td>
					</tr>
	
					<tr>
						<td width='200'>Nama Barang <?php echo form_error('nama_barang') ?></td><td><input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Harga Grade A <?php echo form_error('harga_a') ?></td><td><input type="number" class="form-control" name="harga_a" id="harga_a" placeholder="Harga A" value="<?php echo $harga_a; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Harga Grade B <?php echo form_error('harga_b') ?></td><td><input type="number" class="form-control" name="harga_b" id="harga_b" placeholder="Harga B" value="<?php echo $harga_b; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Harga Paket Murah / Grade C  <?php echo form_error('harga_c') ?></td><td><input type="number" class="form-control" name="harga_c" id="harga_c" placeholder="Harga C" value="<?php echo $harga_c; ?>" /></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('tbl_barang') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>