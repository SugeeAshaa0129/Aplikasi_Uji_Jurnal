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

<div class="krj" width="80">
<table class="table table-dark table-striped">
	<tr>
		<th>NO</th>
		<th>Nama Produk</th>
		<th>Jumlah</th>
		<th>Harga </th>
		<th>Sub-Total</th>
	</tr>

	<?php 
	$no=1;
	foreach ($this->cart->contents() as $items) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $items['name'] ?></td>
			<td><?php echo $items['qty']?></td>
			<td>Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
			<td>Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>

		</tr>
		
     <?php endforeach; ?>
     <tr>
     	<br>
     	<td colspan="4">TOTAL SEMUA: </td>
			<td>Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?>
				
			</td>
		</tr>
</table>

<div class="d-flex bd-highlight mb-3">
	<div class="me-auto p-2 bd-highlight">
	<a href="<?php echo base_url('index.php/user/Products/Dashboard_produk') ?>"><div class="btn btn-sm btn-primary">Lanjut belanja</div></a>
	</div>
	<div class="p-2 bd-highlight">
	<a href="<?php echo base_url('index.php/user/Products/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
	<a href="<?php echo base_url('index.php/user/Products/pembayaran') ?>"><div class="btn btn-sm btn-success">Checkout</div></a>
</div>
	
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











