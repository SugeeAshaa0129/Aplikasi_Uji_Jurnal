<!DOCTYPE html>
<html lang="en">
<head>

  <?php $this->load->view("user/_partials/head.php") ?>
  <style>

    body{

      background-image: url('<?php echo base_url('upload/image/BG_PRODUK.jpg'); ?>');
    }

    .card{

      box-shadow: 0px 0px 3px black;
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
  
      <div class="card ">
        <h5 class="card-header">Deskripsi Produk</h5>
        <div class="card-body">
          
             <?php foreach($product as $desk) : ?>
              <div class="row">
                <div class="col-md-4">
                          
                          <img src="<?php echo base_url(). 'upload/product/' .$desk->image ?>" class="card-img-top">
                </div>
                <div class="col">
                  
                  <table class="table">
                    <tr>
                      <td>Nama produk: </td>
                      <td><strong><?php echo $desk->name ?></strong></td>
                    </tr>

                    <tr>
                      <td>Keterangan: </td>
                      <td><strong><?php echo $desk->description ?></strong></td>
                    </tr>

                    <tr>
                      <td>Harga: </td>
                      <td><strong><div class="btn btn-sm btn-success"><?php echo $desk->price ?></div></strong></td>
                    </tr>
                  </table>
                  <br>
                  <br>

                  <a href="<?php echo base_url('index.php/user/Products/Dashboard_produk') ?>"><div class="btn btn-sm btn-danger">Kembali</div></a>

                  <?php echo anchor('user/Products/keranjang/' .$desk->product_id, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>' )?>
                </div>
              </div>

            <?php endforeach; ?>
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