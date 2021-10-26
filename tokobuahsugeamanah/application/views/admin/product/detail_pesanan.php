<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<style type="text/css">
    .backfoto{
      background-image: url('<?php echo base_url('upload/image/BG_PRODUK.jpg'); ?>');
  }

  table {
  	opacity: 90%;
  }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="backfoto" id="page-top">


	
	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>


		<div id="content-wrapper">

			<div class="container-fluid">


				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

<div class="container-fluid">
	<h3 style="font-family: monospace;">DETAIL PESANAN</h3>

	<div class="btn btn-sm btn-success mb-2">Id Invoice: <?php echo $invoice->id ?></div>

	<table class="table table-dark table-striped">
		
		<tr>
			<th>Kode Barang</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>SUB-Total</th>
		</tr>

		<?php 
		$total = 0;
		foreach ($pesanan as $pesan) : 
			$totalnya = $pesan->jumlah * $pesan->harga;
			$total   += $totalnya;
		 ?>

		 <tr>

		 	<td><?php  echo $pesan->id_brg ?></td>
		 	<td><?php  echo $pesan->nama_brg ?></td>
		 	<td><?php  echo $pesan->jumlah ?></td>
		 	<td><?php  echo number_format($pesan->harga,0,',','.')  ?></td>
		 	<td><?php  echo number_format($totalnya,0,',','.')  ?></td>
		 </tr>

		<?php endforeach; ?>

		<tr>
		    <td colspan="4">TOTAL SEMUA: </td>
			<td>Rp. <?php echo number_format($total, 0,',','.') ?>
				
		</td>
		
		</tr>
	</table>

		<a href="<?php echo base_url('index.php/admin/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>
			
    <?php $this->load->view("admin/_partials/footer.php") ?>
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
	
</body>

</html>