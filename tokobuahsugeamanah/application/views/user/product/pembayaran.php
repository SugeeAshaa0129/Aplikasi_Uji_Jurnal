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

    .card .card-body{

    	background-color: #D0D0D0;
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
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="alert alert-success" role="alert">
				<center>
				<h4>
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $items)
					{
						$grand_total = $grand_total + $items['subtotal'];
					}

					echo "Total Belanja Anda: Rp. " .number_format($grand_total, 0,',','.');
				?>
			</h4>
				</center>
			</div>
			<br>
			<br>	

			<div class="card">
				<div class="card-body">
					<form method="post" action="<?php echo base_url('index.php/user/Products/proses_pesanan') ?>">
						
						<div class="form-grup">
							<label>Nama Penerima</label>
							<input required type="text" name="nama" placeholder="Nama Penerima..." class="form-control">
						</div>
						<br>

						<div class="form-grup">
							<label>Alamat Lengkap</label>
							<input required type="text" name="alamat" placeholder="Yang lengkap ya alamatnya..." class="form-control">
						</div>
						<br>

						<div class="form-grup">
							<label>No Telepon</label>
							<input required type="text" name="no_tlp" placeholder="08534XXXXXX" class="form-control">
						</div>
						<br>

						<div class="form-grup">
							<label>Jasa Pengiriman</label>
							<input required type="text" name="jasa_kirim" placeholder="JNE,J&T,SI CEPAT,DLL..." class="form-control">
						</div>
						<br>
						<div class="form-grup">
							<label>Kode Pos</label>
							<input required type="text" name="kode_pos" placeholder="161XXX" class="form-control">
						</div>
						<br>
						<button type="submit" class="btn btn-sm btn-success">Konfirmasi</button>

					</form>
			</div>
			</div>

			<?php 
			}else{

					echo "Keranjang Anda Masih Kosong";
				}
			 ?>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>


<?php $this->load->view("user/_partials/scrolltop.php") ?>
<?php $this->load->view("user/_partials/modal.php") ?>
<?php $this->load->view("user/_partials/js.php") ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</script>
</html>