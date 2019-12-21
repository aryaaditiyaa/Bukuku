<?php
include 'header.php' 
?>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Terlengkap
							<span>Se-Indonesia</span>
						</h3>
						<p>Dapatkan berbagai pilihan buku terlengkap disini</p>
						<a class="button2" href="komik.php">Belanja Sekarang</a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Kemudahan
							<span>Berbelanja</span>
						</h3>
						<p>Nikmati kemudahan berbelanja dan beragam penawaran menarik</p>
						<a class="button2" href="travel.php">Belanja Sekarang</a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Gratis
							<span>Ongkir</span>
						</h3>
						<p>Belanja dan nikmati gratis biaya kirim</p>
						<a class="button2" href="memasak.php">Belanja Sekarang</a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Tunggu
							<span>Apalagi?</span>
						</h3>
						<p>Ayo segera berbelanja</p>
						<a class="button2" href="teknologi.php">Belanja Sekarang</a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Buku Terfavorit
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Cari Disini</h3>
					<form action="search.php" method="post">
						<input type="search" placeholder="Nama Produk..." name="Search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- deals -->
				<?php
				include 'left-category.php'
				?>
				<!-- //deals -->
			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Memasak</h3>
						<?php include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from buku where kategori like 'Memasak' limit 3");
                  while($d = mysqli_fetch_array($data)){
                  ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php echo "<img src='admin/foto_buku/".$d['gambar']."' width='100' height='150'> "?>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="detail-buku.php?isbn=<?php echo $d['isbn']; ?>" class="link-product-add-cart">Detail</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<div class="info-product-name">
										<h4><?php echo $d['judul']; ?></h4>
									</div>
									<div class="info-product-price">
										<span class="item_price">Rp. <?php echo $d['harga']; ?></span>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form method="post" action="proses-beli.php">
											<fieldset>
												<input type="hidden" name="isbn" value="<?php echo $d['isbn']; ?>">
												<input type="hidden" name="judul" value="<?php echo $d['judul']; ?>">
												<input type="hidden" name="jumlah" value="1">
												<input type="hidden" name="harga" value="<?php echo $d['harga']; ?>">
												<input type="submit" name="submit" value="Beli" class="button">
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<?php
						}
						?>
						<div class="clearfix"></div>
						
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Enjoy</h3>
							<h6>Selamat berbelanja</h6>
						</div>
						
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Teknologi</h3>
						<?php include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from buku where kategori like 'Teknologi' limit 3");
                  while($d = mysqli_fetch_array($data)){
                  ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php echo "<img src='admin/foto_buku/".$d['gambar']."' width='100' height='150'> "?>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="detail-buku.php?isbn=<?php echo $d['isbn']; ?>" class="link-product-add-cart">Detail</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<div class="info-product-name">
										<h4><?php echo $d['judul']; ?></h4>
									</div>
									<div class="info-product-price">
										<span class="item_price">Rp. <?php echo $d['harga']; ?></span>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form method="post" action="proses-beli.php">
											<fieldset>
												<input type="hidden" name="isbn" value="<?php echo $d['isbn']; ?>">
												<input type="hidden" name="judul" value="<?php echo $d['judul']; ?>">
												<input type="hidden" name="jumlah" value="1">
												<input type="hidden" name="harga" value="<?php echo $d['harga']; ?>">
												<input type="submit" name="submit" value="Beli" class="button">
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<?php
						}
						?>
						<div class="clearfix"></div>
						
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Travel</h3>
						<?php include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from buku where kategori like 'Travel' limit 3");
                  while($d = mysqli_fetch_array($data)){
                  ?>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php echo "<img src='admin/foto_buku/".$d['gambar']."' width='100' height='150'> "?>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="detail-buku.php?isbn=<?php echo $d['isbn']; ?>" class="link-product-add-cart">Detail</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<div class="info-product-name">
										<h4><?php echo $d['judul']; ?></h4>
									</div>
									<div class="info-product-price">
										<span class="item_price">Rp. <?php echo $d['harga']; ?></span>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form method="post" action="proses-beli.php">
											<fieldset>
												<input type="hidden" name="isbn" value="<?php echo $d['isbn']; ?>">
												<input type="hidden" name="judul" value="<?php echo $d['judul']; ?>">
												<input type="hidden" name="jumlah" value="1">
												<input type="hidden" name="harga" value="<?php echo $d['harga']; ?>">
												<input type="submit" name="submit" value="Beli" class="button">
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<?php
						}
						?>
						<div class="clearfix"></div>
						
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Rekomendasi
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<?php include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from buku where char_length(judul) > 35 order by rand() limit 8");
                  while($d = mysqli_fetch_array($data)){
                  ?>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="detail-buku.php?isbn=<?php echo $d['isbn']; ?>">
									<?php echo "<img src='admin/foto_buku/".$d['gambar']."' width='120' height='170'> "?>
								</a>
							</div>
							<div class="product-name-w3l">
								<h4><?php echo $d['judul']; ?></h4>
								<div class="w3l-pricehkj">
									<h6>Rp. <?php echo $d['harga']; ?></h6>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form method="post" action="proses-beli.php">
											<fieldset>
												<input type="hidden" name="isbn" value="<?php echo $d['isbn']; ?>">
												<input type="hidden" name="judul" value="<?php echo $d['judul']; ?>">
												<input type="hidden" name="jumlah" value="1">
												<input type="hidden" name="harga" value="<?php echo $d['harga']; ?>">
												<input type="submit" name="submit" value="Beli" class="button">
											</fieldset>
										</form>
								</div>
							</div>
						</div>
					</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!-- //special offers -->
	<?php
	include 'footer.php' 
	?>