					<table class="table">
						<tr>
							<th>Nama Obat</th>
							<th>Jenis</th>
							<th>Keterangan</th>	
						</tr>
						
						<tr class="add" style="display: none">
							<td>
								<select name="obat[]" class="form-control" data-live-search="true" required="">
									<!-- <option>---Pilih Obat----</option> -->
									<?php
									while($data1 = mysqli_fetch_array($query1)){
										?>
										<option value="<?php echo $data1['nama_obat'] ?>"><?php echo $data1['nama_obat'] ?></option>
									<?php } ?>
								</select>
								<input type="hidden" name="stat[]" value="1">
							</td>
							<td>
								<select name="jenis[]" class="form-control" required="">
									<!-- <option>---Pilih Jenis----</option> -->
									<option value="Table">Tablet</option>
									<option value="Puyer">Puyer</option>
									<option value="Pil">Pil</option>
								</select>
							</td>
							<td><input type="text" name="ket[]" class="form-control"></td>
							<td><button class="btn-remove-row btn btn-danger"><i class="fa fa-trash"></i></button></td>
						</tr>
					</table>