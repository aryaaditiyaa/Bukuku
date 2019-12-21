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
					<li>Status Pesanan</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Status Pesanan
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab">
					<ul class="resp-tabs-list hor_1">
						<li>Status Pesanan</li>
					</ul>
					<div class="resp-tabs-container hor_1">

						<div>
							<div class="vertical_post check_box_agile">
								<?php include 'koneksi.php';
								$Lacak= $_POST['Lacak'];
                  				$data = mysqli_query($koneksi,"select * from order_masuk where id_transaksi like '%$Lacak%'");
                  				$d = mysqli_fetch_array($data)
                  				?>
								<h3>Pesanan dengan kode transaksi <b>"<?php echo $d['id_transaksi']; ?>"</b> & atas nama <b>"<?php echo $d['nama_pembeli']; ?>"</b>, saat ini <b>"<?php echo $d['status']; ?>"</b>. Untuk pembatalan pesanan atau bantuan lebih lanjut hubungi kami di informasi kontak yang tersedia di bawah.</h3>
							</div>
						</div>

					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	<!-- //payment page -->
<?php
	include 'footer.php' 
	?>