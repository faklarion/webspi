<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA FOTO RUMAH</h3>
			</div>
            
			<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
			
				<table class='table table-bordered'>

					<tr>
						<td width="200">
							Jenis Rumah
						</td>
						<td>
							<select name="id_jenis" id="id_jenis" class="form-control">
								<option value="1">Mewah</option>
								<option value="2">Ideal</option>
								<option value="3">Murah</option>
							</select>
						</td>
					</tr>

                    <tr>
						<td width="200">
							Tipe Rumah
						</td>
						<td>
							<select name="id_tipe" id="id_tipe" class="form-control">
								<option value="1">Classic</option>
								<option value="2">Skandinavian</option>
								<option value="3">Minimalis</option>
							</select>
						</td>
					</tr>

                    <tr>
						<td width='200'>Ukuran <?php echo form_error('ukuran_awal') ?></td>
						<td>
							<select name="ukuran_awal" id="ukuran_awal" class="form-control">
								<option value="36">36</option>
								<option value="45">45</option>
								<option value="60">60</option>
								<option value="70">70</option>
								<option value="90">90</option>
								<option value="100">100</option>
								<option value="120">120</option>
								<option value="160">160</option>
								<option value="200">200</option>
							</select>
						</td>
					</tr>

                    <tr>
                        <td width="200">Desain ke- </td>
                        <td>
                            <select name="desain" id="desain" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
                        </td>
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