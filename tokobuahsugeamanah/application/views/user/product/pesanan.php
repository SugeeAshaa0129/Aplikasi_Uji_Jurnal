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
	<div class="alert alert-success" role="alert">
		<center>
		Terimakasih! Pesanan Anda Sudah Berhasil! ^_^
		</center>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
		     	<div class="card-body">
		     		<center>
					<h4>Bayar Sekarang</h4>
					    <a href="<?php echo site_url('user/products/pesanan')?>"><div class="btn btn-success">Bayar</div></a>
					    <br>
					    <br>
					<h4>Lanjutkan Belanja</h4>    
					    <a href="<?php echo site_url('user/products/Dashboard_produk') ?>"><div class="btn btn-primary">Lanjut belanja</div></a>
					    </center>
				</div>
			</div>
	    </div>
   </div>
 </div>
</div>

<?php $this->load->view("user/_partials/scrolltop.php") ?>
<?php $this->load->view("user/_partials/modal.php") ?>
<?php $this->load->view("user/_partials/js.php") ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</script>
</html>