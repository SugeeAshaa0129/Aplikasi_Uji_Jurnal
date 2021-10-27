<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("user/_partials/head.php") ?>
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


	
	<?php $this->load->view("user/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("user/_partials/sidebar.php") ?>


		<div id="content-wrapper">

			<div class="container-fluid">


				<?php $this->load->view("user/_partials/breadcrumb.php") ?>

				





<div class="container-fluid">
	<h4 style="font-family: monospace;">PESANAN SAYA</h4>

	<table class="table table-dark table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Pemesan</th>
			<th>No Telepon</th>
			<th>Alamat pengiriman</th>
			<th>Tanggal pemesanan</th>
			<th>Batas bayar</th>
			<th>Aksi</th>
		</tr>
		
        <?php foreach ($invoice as $invc) : ?>

		<tr>
			<td><?php echo $invc->id ?></td>
			<td><?php echo $invc->nama ?></td>
			<td><?php echo $invc->no_tlp ?></td>
			<td><?php echo $invc->alamat ?></td>
			<td><?php echo $invc->tgl_pesan ?></td>
			<td><?php echo $invc->batas_bayar ?></td>
			<td><?php echo anchor('user/products/detail/' .$invc->id, '<div class="btn btn-sm btn-warning">DETAIL</div>') ?></td>
			<td><?php echo anchor('user/products/pesanan_prdk/' .$invc->id, '<div class="btn btn-sm btn-success">Bayar</div>') ?></td>
		      	</button></a></td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>
			
			
    <?php $this->load->view("user/_partials/footer.php") ?>
	<?php $this->load->view("user/_partials/scrolltop.php") ?>
	<?php $this->load->view("user/_partials/modal.php") ?>

	<?php $this->load->view("user/_partials/js.php") ?>
	
</body>

</html>

