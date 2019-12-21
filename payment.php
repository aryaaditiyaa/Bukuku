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
					<li>Pembayaran</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Pembayaran
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
						<li>Cash on delivery (COD)</li>
					</ul>
					<div class="resp-tabs-container hor_1">

						<div>
							<div class="vertical_post check_box_agile">
								<?php include 'koneksi.php';
                  				$data = mysqli_query($koneksi,"SELECT*FROM order_masuk ORDER BY 1 DESC LIMIT 1");
                 				$d = mysqli_fetch_array($data)
                 				?>
								<h3>Terima kasih telah melakukan transaksi di Buku-Ku. Pesanan anda sedang kami proses dengan
								nomor pesanan <b>"<?php echo $d['id_transaksi']; ?>"</b>. Anda dapat melacak pesanan <a href="#" data-toggle="modal" data-target="#myModal1">disini</a>. Metode pembayaran yang tersedia saat ini hanya COD. Kami akan terus meningkatkan sistem
								kami untuk menghadirkan opsi pembayaran lain. Untuk pembatalan pesanan atau bantuan lebih lanjut hubungi kami di informasi kontak yang tersedia di bawah.</h3>
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