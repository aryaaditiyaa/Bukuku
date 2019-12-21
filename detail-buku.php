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
					<li>Detail Buku</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Detail Buku
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<?php
              include 'koneksi.php';
              $isbn = $_GET['isbn'];
              $data = mysqli_query($koneksi,"select * from buku where isbn='$isbn'");
              while($d = mysqli_fetch_array($data)){
    ?>
    	
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<?php echo "<img src='admin/foto_buku/".$d['gambar']."' width='400' height='550'> "?>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3><?php echo $d['judul']; ?></h3>
				<p>
					<span class="item_price_detail">Rp. <?php echo $d['harga']; ?></span>
				</p>
				<div class="product-single-w3l">
					<p>
						<label>Deskripsi</label>
					</p>
					<p class="deskripsi">"<?php echo $d['deskripsi']; ?>"</p>
				</div>
				<div class="product-single-w3l">
					<p>
						<label>Detail</label>
					</p>
					<ul>
						<li>
							Judul: <?php echo $d['judul']; ?>
						</li>
						<li>
							ISBN: <?php echo $d['isbn']; ?>
						</li>
						<li>
							Jumlah Halaman: <?php echo $d['jml_hlm']; ?>
						</li>
						<li>
							Penerbit: <?php echo $d['penerbit']; ?>
						</li>
						<li>
							Tanggal Tebit: <?php echo $d['tgl_terbit']; ?>
						</li>
						<li>
							Berat: <?php echo $d['berat']; ?> kg
						</li>
						<li>
							Kategori: <?php echo $d['kategori']; ?>
						</li>
					</ul>
					<br>
				</div>
				
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<fieldset>
							<form method="post" action="proses-beli.php">
							<input type="hidden" name="isbn" value="<?php echo $d['isbn']; ?>">
							<input type="hidden" name="judul" value="<?php echo $d['judul']; ?>">
							<input type="hidden" name="jumlah" value="1">
							<input type="hidden" name="harga" value="<?php echo $d['harga']; ?>">
							<input type="submit" name="submit" value="Beli" class="button">
							</form>
						</fieldset>
					</div>
				</div>
			</div>
		
			<div class="clearfix"> </div>
		</div>
	</div>
	<?php
	}
	?>

	<!-- //Single Page -->
	<?php
	include 'footer.php' 
	?>