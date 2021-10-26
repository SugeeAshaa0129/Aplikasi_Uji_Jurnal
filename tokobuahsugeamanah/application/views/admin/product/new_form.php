<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>

</style>
	
</head>
<style type="text/css">
	
	body {
		background-image: url('<?php echo base_url('upload/image/BG_PRODUK.jpg'); ?>');
	}

	.card {

		box-shadow: 0px 0px 3px black;
	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body id="page-top">
	
		<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>


		<div id="content-wrapper">

			<div class="container-fluid">


				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

					<div class="container-fluid">
					    </div>
						<center>
						<h4>TAMBAH PRODUK</h4>
						</center>
						<div class="card m-2">
							<div class="card-header">
						    <a href="<?php echo site_url('admin/products') ?>"><button class="btn btn-sm btn-danger">Kembali</button></a>
							
                        	<form action="<?php echo base_url('index.php/admin/products/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
                        		
                        		<div class="form-group m-3">
                        			<label>Nama barang</label>
                        			<input required type="text" name="name" class="form-control">
                        		</div>

                        		<div class="form-group m-3">
                        			<label>Harga</label>
                        			<input required type="number" name="price" class="form-control">
                        		</div>

                        		<div class="form-group m-3">
                        			<label>Gambar</label>
                        			<input type="file" name="image" class="form-control">
                        		</div>

                        		<div class="form-group m-3">
                        			<label>Keterangan</label>
                        			<input required type="text" name="description" class="form-control">

                        			<button type="submit" class="btn btn-success mt-4">Tambah</button>
                        		</div>
                        	</form>

						</div>

					</div>


				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			
		</div>

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>