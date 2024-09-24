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

					<?php if($this->uri->segment(2) == 'update') { ?>		
					<tr>
						<td width='200'>Ukuran Awal <?php echo form_error('ukuran_awal') ?></td><td><input type="number" class="form-control" name="ukuran_awal" id="ukuran_awal" placeholder="Ukuran Awal" value="<?php echo $ukuran_awal; ?>" readonly/></td>
					</tr>
		
					<tr>
						<td width='200'>Kamar</td><td><input type="number" max="300" class="form-control" name="kamar" id="kamar" placeholder="Kamar" value="<?php echo $kamar; ?>" readonly/></td>
					</tr>
	
					<tr>
						<td width='200'>WC</td><td><input type="number" max="300" class="form-control" name="wc" id="wc" placeholder="WC" value="<?php echo $wc; ?>" readonly/></td>
					</tr>
					<?php } else { ?>

					<tr>
						<td width='200'>Ukuran Awal <?php echo form_error('ukuran_awal') ?></td>
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
						<td width='200'>Kamar</td><td><input type="number" max="300" class="form-control" name="kamar" id="kamar" placeholder="Kamar" value="<?php echo $kamar; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>WC</td><td><input type="number" max="300" class="form-control" name="wc" id="wc" placeholder="WC" value="<?php echo $wc; ?>" /></td>
					</tr>
					<?php } ?>
	
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