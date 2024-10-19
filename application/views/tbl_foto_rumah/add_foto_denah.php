<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA FOTO DENAH</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
			
				<table class='table table-bordered'>

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
                            <input type="hidden" id="id_jenis" name="id_jenis" class="form-control" value="<?php echo $id_jenis?>">
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
                            <input type="hidden" id="id_tipe" name="id_tipe" class="form-control" value="<?php echo $id_tipe?>">
						</td>
					</tr>
	
					<tr>
						<td>Ukuran</td>
                        <td><?= $ukuran_awal ?></td>
                        <input type="hidden" id="ukuran_awal" name="ukuran_awal" class="form-control" value="<?php echo $ukuran_awal?>">
					</tr>

					<tr>
						<td width='200'>Desain ke- </td><td><?= $desain ?></td>
                        <input type="hidden" id="desain" name="desain" class="form-control" value="<?php echo $desain?>">
					</tr>

                    <tr>
                        <td>Kamar</td>
                        <td><input type="number" name="kamar" id="kamar" class="form-control" required></td>
                    </tr>

                    <tr>
                        <td>WC</td>
                        <td><input type="number" name="wc" id="wc" class="form-control" required></td>
                    </tr>

					<tr>
						<td width='200'>Foto Denah</td>
						<td> 
							<input type="file" class="form-control" rows="3" name="foto_denah[]" id="foto_denah" placeholder="Foto" required>
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