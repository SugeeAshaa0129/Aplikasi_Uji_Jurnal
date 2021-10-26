<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("user/_partials/head.php") ?>
  <style type="text/css">
    .backfoto{
      background-image: url('<?php echo base_url('upload/image/BG_PRODUK.jpg'); ?>');
    }
     .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
  </style>
  </style>
</head>
<body id="page-top">
<?php $this->load->view("preloader/loading.php") ?>
<?php $this->load->view("user/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("user/_partials/sidebar.php") ?>

  <div class="backfoto" id="content-wrapper">

    <div class="container-fluid">

    <?php $this->load->view("user/_partials/breadcrumb.php") ?>

    <div class="cover-container d-flex p-3 mx-auto flex-column justify-content-center">
  <header class="mb-auto">


    <div class="col-sm-12">
      <div class="card">

        <div class="col-sm-12 ">
          <div class="card mt-5 mr-3 mb-3 ml-3">
            <div class="row">
            
              <img src="<?php echo base_url ('/upload/image/icon_default.png')?>" class="rounded-circle" width="50" height="42" style="margin: 30px 0px 0px 40px;">
              <div class="card-body md-6">
                <h5 class="card-title m-3"><?=$_SESSION['username']?></h5>
              </div>
              <div class="card-body md-4">
                
                <div align="right">
                  <a class="nav-link" href="<?php echo site_url('Welcome/Logout'); ?>" data-toggle="modal" data-target="#logoutModal"><button type="button" class="btn btn-outline-danger" style="margin: 10px 30px 0px 40px;"><i class="fas fa-sign-out-alt">LOGOUT</i>
                  </button></a>
                </div>  
            </div>            
          </div>
        </div>
        
        <div class="col-sm-12">
        <div class="card m-3">
          <main class="px-3">
          <form class="m-3">
            <fieldset disabled>
              <div class="row">
              <div class="col-md-6 " >
                <label for="disabledTextInput" class="form-label">Email :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$_SESSION['email']?>">
              </div>
              <div class="col-md-6 ">
                <label for="disabledTextInput" class="form-label">No Telepon :</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="<?=$_SESSION['no_tlp']?>">
              </div>
              
              </div>
            </fieldset>
          </form>
          
          </main>
          
      </div>
    </div>

  </header>

</div>
</div> 



  <footer class="mt-auto text-white-50">
    
  </footer>
  </div>

    <?php $this->load->view("user/_partials/footer.php") ?>

  </div>

  </div>

<?php $this->load->view("user/_partials/scrolltop.php") ?>
<?php $this->load->view("user/_partials/modal.php") ?>
<?php $this->load->view("user/_partials/js.php") ?>
    
</body>
</html>
