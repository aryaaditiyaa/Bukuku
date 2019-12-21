<?php
include 'header.php' 
?>
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>No.</th>
								<th>Judul</th>
								<th>Jumlah</th>
								<th>Harga</th>
								<th>Pilihan</th>
							</tr>
						</thead>
						<?php include 'koneksi.php';
                  		$no = 1;
                  		$data = mysqli_query($koneksi,"select * from tmp_transbuku");
                 		while($d = mysqli_fetch_array($data)){
                 		?>
						<tbody>
							<tr class="rem1">
								<td class="invert"><?php echo $no++; ?></td>
								<td class="invert"><?php echo $d['judul']; ?></td>
								<td class="invert"><?php echo $d['jumlah']; ?></td>
								<td class="invert">Rp. <?php echo $d['harga']; ?></td>
								<td class="invert"><a href="proses-hapus-cart.php?isbn=<?php echo $d['isbn']; ?>">Hapus</a></td>
							</tr>
						</tbody>
						<?php
						}
						?>
					</table>
				</div>
				<br>
				<?php include 'koneksi.php';
                  		$data = mysqli_query($koneksi, "select SUM(harga) as total from tmp_transbuku");
                  		$random = rand(100000000, 999999999);
                  		$id_transaksi = 'TRK'.$random;
                  		date_default_timezone_set("Asia/Jakarta");
                  		$nomor = 1;
                 		$d = mysqli_fetch_array($data)
                 		?>
				<h4 align="right">Total: 
					<span>Rp. <?php echo $d['total']; ?></span>
				</h4>

			</div>
			<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Masukkan data Anda</h4>
					<form method="post" action="proses-transaksi.php">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<input type="hidden" name="nomor" value="<?php echo $nomor++; ?>">
									<input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi; ?>">
									<input type="hidden" name="total" value="<?php echo $d['total']; ?>">
									<input type="hidden" name="tgl_order" value="<?php echo date("Y/m/d"); ?>">
									<input type="hidden" name="jam_order" value="<?php echo date("H:i:s"); ?>">
									<input type="hidden" name="status" value="Sedang Diverifikasi">
									<div class="controls">
										<input class="billing-address-name" type="text" name="nama_pembeli" placeholder="Nama" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="alamat" placeholder="Alamat" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="telepon" placeholder="Telepon" required="">
									</div>
								</div>
								
							</div>
						</div>
					<br>

				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<fieldset>
						<?php include 'koneksi.php';
                  		$data = mysqli_query($koneksi,"select * from tmp_transbuku");
                 		while($d = mysqli_fetch_array($data)){
                 		?>
							<input type="hidden" name="judul" value="<?php echo $d['judul']; ?>">
							<input type="hidden" name="jumlah" value="<?php echo $d['jumlah']; ?>">
						<?php
						}
						?>
							<input type="submit" name="submit" value="Buat Pesanan" class="button">
					</form>
						</fieldset>
					</div>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->
	<?php
	include 'footer.php' 
	?>