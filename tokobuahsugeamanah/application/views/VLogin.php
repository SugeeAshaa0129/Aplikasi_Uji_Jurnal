<!DOCTYPE html>
<html>
<head>
	<title>Login-Tokobuah Sugeri Ashari R</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<style type="text/css">
	html,body{
		background-image: url('../upload/image/back_logo.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 330px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.8) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #01E9FF;
}

.social_icon span:hover{
color: #484848;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: relative;
right: 55px;
top: -8px;
}

.input-group-prepend span{
width: 50px;
background-color: #faebd7;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{

color: white;
background-color: #faebd7;
width: 100px;
height: 45px;

}

.login_btn:hover{
color: white;
background-color: #484848;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

h4 {

	font-family: monospace;
}
</style>
<body>
	<?php $this->load->view("preloader/loading.php") ?>
<div class="container">
	<div class="d-flex justify-content-center h-100">

		<div class="card ">
			<div class="card-header">
				
				<h3><center> Silahkan Login </center></h3>


			</div>
			<div class="card-body">
				
				<form action="<?php echo base_url('index.php/admin/dashboard') ?>" method="post">
					<h5><font color="white"> No Telepon</font></h5>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							
							<input required type="text" name="txt_no_tlp"  class="form-control" placeholder="0895xxxxxxxxx">
						</div>
					<h5><font color="white">Password</font></h5>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
						
							<input required type="Password" name="txt_pass" class="form-control" placeholder="password">
						</div>
					
					<div class="form-group">
						<!-- <div >
							<input type="submit" name="btn_login" style="margin: 7px 10px 12px 40px" value="Login" class="btn float-right login_btn">
						</div>
							<div class="d-flex justify-content-end social_icon align-items-center">
								<a href="#" >Registrasi</a>
								
							</div> -->

							<div class="d-flex  justify-content-between align-items-center"
							style="margin: 0px;"> <a href="<?=
							base_url('index.php/VRegistrasi')?>" style="color:
							white;"><b>Registrasi</b></a>
	
							<input type="submit" name="btn_login"  value="Login" class="btn float-right login_btn "style="color:
							black;">
								</div>

					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>