<!DOCTYPE html>
<html lang="en">
<head>

	<?php $this->load->view("user/_partials/head.php") ?>
	<style>

    body{

      background-image: url('<?php echo base_url('upload/image/BG_PRODUK.jpg'); ?>');
    }

    table {

    	opacity: 90% ;
    }

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<?php $this->load->view("user/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("user/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">
		<?php $this->load->view("user/_partials/breadcrumb.php") ?>

<div class="container-fluid">

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
		     	<div class="card-body">
		     		<a href="<?php echo site_url('user/products/pesanan') ?>"><button class="btn btn-sm  btn-danger mt-3 ml-3">Kembali</button></a>
		     		<div class="alert alert-success m-5" role="alert">
					    		<center>	
					    	   <label>id Invoice Anda :</label>
						       <h5><?php echo $invoice->id_invoice ?></h5>
						       
						       <?php 
							   $total = 0;
							   foreach ($pesanan as $pesan) : 
							   $totalnya = $pesan->jumlah * $pesan->harga;
							   $total   += $totalnya;
							   ?>

							   <?php endforeach; ?>

							   	<label>Total yang harus di bayar :</label>
								<h5>Rp. <?php echo number_format($total, 0,',','.') ?></h5>
								
						</div>
		     		<center>
					<h4>Silahkan lakukan pembayaran ke salah satu akun BANK
					    di bawah ini</h4>
					    </center>
					  
					<div class="row">
						<center>
						<h6>BCA :</h6>
						<h6>2135276</h6>
						<br>
						<h6>BNI :</h6>
						<h6>2346324</h6>
						<br>
						<h6>MANDIRI :</h6>
						<h6>8162378</h6>
						<br>
						<h6>DANA :</h6>
						<h6>0812366273</h6>
						<br>
						<h6>OVO :</h6>
						<h6>0821356256</h6>
					    </center>
					</div>
					<br>
					<br>
					<center>
				<h4>Kirim kan bukti pembayaran anda ke admin serta ID invoice pesanan</h4>
		      	<a href="https://bit.ly/2YTF85y"><button class="btn btn-success">kirim bukti
		      	</button></a></center>
				</div>
			</div>
	    </div>
   </div>
 </div>
</div>
<?php $this->load->view("user/_partials/footer.php") ?>

<?php $this->load->view("user/_partials/scrolltop.php") ?>
<?php $this->load->view("user/_partials/modal.php") ?>
<?php $this->load->view("user/_partials/js.php") ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</script>
</html>