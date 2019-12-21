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
					<li>Travel</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Travel
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
			<div class="agileinfo-ads-display col-md-9 w3l-rightpro">
				<div class="wrapper">
					<!-- first section -->

					<div class="product-sec1">
						<?php include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from buku where kategori like 'Travel'");
                  while($d = mysqli_fetch_array($data)){
                  ?>
						<div class="col-xs-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php echo "<img src='admin/foto_buku/".$d['gambar']."' width='220' height='300'> "?>
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
									<br>
								</div>
							</div>
						</div>
						<?php
                    	}
                  		?>
						<div class="clearfix"></div>
					</div>
					
					<!-- //first section -->

				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<?php
	include 'footer.php' 
	?>