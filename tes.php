<?php include 'koneksi.php';
                  		$data = mysqli_query($koneksi,"select * from tmp_transbuku");
                 		while($d = mysqli_fetch_array($data)){
                 		?>
							<input type="text" name="judul" value="<?php echo $d['judul']; ?>">
							<input type="text" name="jumlah" value="<?php echo $d['jumlah']; ?>">
						<?php
						}
						?>