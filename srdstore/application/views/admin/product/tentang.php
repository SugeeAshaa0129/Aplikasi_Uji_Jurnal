<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<style type="text/css">
    .backfoto{
      background-image: url('<?php echo base_url('upload/image/BG_PRODUK.jpg'); ?>');

    }
	.card-title{

font-size: 60px;
font-family: 'Anton', sans-serif;
font-family: 'Black Ops One', cursive;
font-family: 'Bungee', cursive;



}
		</style>	
</head>

<body class="backfoto" id="page-top">


	
	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>


		<div class="backfoto" id="content-wrapper">

			<div class="container-fluid">


				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<div class="container-fluid">


						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
										<div class="col-md-8">
												
												<div class="m-3">
												<h1 class="card-title">TENTANG TOKO</h1>
												<hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 100%; margin: 0%">
												<br>
												<p class="card-text">Toko SRD adalah toko online E-Commerce yang menyediakan berbagai produk seperti alat elektronik, fashion dan lain-lain.<br>Dengan harga yang murah dan kualitas yang sangat bagus.</p>
												<br>
												<br>
												<p>Selamat berbelanja ditoko kami!<br>Operation Hours : 24 Hours</p>
												<br>
												<br>
												<br>
												<br>
												<br>
												<br>
												<br>
												</div>
												
											</div>
											<div class="col-md-4">
												<div class="card">
												<div class="m-3">
												<p></p>
												<img src="<?php echo base_url('upload/image/logo_toko2.png') ?>" style="width:100%; height: 75%;"> 
												
												<hr style="height:2px;border-width:0;color:gray;background-color:gray; width: 100%;">
												<br>
												<center>
													<h6>
														Untuk Keluhan hubungi:
														<br>
														<br>
														<div class="nav-item">No Whatsap: 
														<a class="nav-link text-danger" href="#">Desu : 083873235897</a>
														<a class="nav-link text-danger" href="#">Suge : 0895396581760</a>
														<a class="nav-link text-danger" href="#">Dimas SP : 083892316990</a>
														</div>
														<br>
														<div class="nav-item">Email: 
														<a class="nav-link text-danger" href="#">tokosrd@gmail.com</a>
														<div class="nav-item">Instagram:
														<a class="nav-link text-danger" href="#">@tokosrd_</a>
														</div>
													</h6>
												</center>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
			
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		
	</div>
	
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
	
</body>

</html>




