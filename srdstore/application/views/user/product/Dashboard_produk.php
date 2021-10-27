<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<?php $this->load->view("user/_partials/head.php") ?>
	<style type="text/css">
		.backfoto{  
		background-image: url('<?php echo base_url('upload/image/BG_PRODUK.jpg'); ?>');
			
		}

    .row .card{
     
      margin-top: 17px;
      margin-bottom: 7px;
    }

    div .Button-wa button {

  padding: 5px 8px;
  width: 50%;
  height: 80%;
  background-color: #D9D9D9;
  border-color: grey;
  left: 30px;
  
}

div .Button-wa button:hover {

  box-shadow:  0px 0px 5px grey;
  background-color: #A0A0A0;
}

div .Tanya_WA button {

  padding: 5px 8px;
  width: 50%;
  height: 80%;
  background-color: #1CD301;
  border-color: #1CD301;
  left: 30px;
  
}

div .Tanya_WA button:hover {

  box-shadow:  0px 0px 5px #2DB201;
  background-color: #2DB201;
}

.badge {

  margin-right: 50%;
}

	</style>
</head>
<body class="backfoto" id="page-top">

<?php $this->load->view("user/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("user/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

		<?php $this->load->view("user/_partials/breadcrumb.php") ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('upload/image/banner2.jpg') ?>" class="w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('upload/image/banner3.jpg') ?>" class="w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     
    <div class="p-1 mb-1  rounded-1">
    </div>
    <center>
<div class="container">
    <div class="row">
    
    <?php foreach ( $products as $key => $produk_admin) : ?>
        <div class="col-sm-4">
            <div class="card-columns-fluid">
                <div class="card  bg-light" style = "width: 22rem;" >
                    <img class="img-top" src="<?=base_url('upload/product/'.$produk_admin->image)?>" width="350" height="270" >

                    <div class="card-body">
                        <h2 style="font-size: 23px; font-family: sans-serif;"><?php echo $produk_admin->name?></h2>
                  
                        <span class="badge bg-danger">Rp. <?php echo number_format($produk_admin->price, 0,',','.') ?></span>
                        <br>
                        <br>
                        <br>

                          <div class="Tanya_WA">
            <a href="https://bit.ly/2YTF85y">
              <button class="btn center" >
                Chat Penjual
             </button></a>
        </div>
        </p>

            <?php echo anchor('user/Products/keranjang/' .$produk_admin->product_id, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>' )?>

            <?php echo anchor('user/Products/deskripsi_produk/' .$produk_admin->product_id, '<div class="btn btn-sm btn-warning">Deskripsi</div>' )?>

        </p>
                        <p>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php $this->load->view("user/_partials/footer.php") ?>


<?php $this->load->view("user/_partials/scrolltop.php") ?>
<?php $this->load->view("user/_partials/modal.php") ?>
<?php $this->load->view("user/_partials/js.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>
</html>
