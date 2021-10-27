<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
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
/*height: 330px;*/
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

.regulation{
text-shadow: 0px 0px 0px black;
margin-left: 120px;
font-size: 15px;
color: #FFE100;
font-weight: bolder;
-webkit-text-stroke: 0.07em #000000;
}
</style>
<body>
	<?php $this->load->view("preloader/loading.php") ?>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card ">
			<div class="card-header">
				
				<h3><center> Silahkan Registrasi </center></h3>


			</div>
			<div class="card-body">
				
				<form action="<?php echo base_url('index.php/VRegistrasi') ?>" method="post">
					<h5><font color="white"> No telepon</font></h5>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							
							<input required type="text" name="txt_no_tlp" class="form-control" placeholder="0856xxxxxxxx">
						</div>

						<h5><font color="white"> Email </font></h5>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							
							<input required type="text" name="txt_email" class="form-control" placeholder="your email">
						</div>

						<h5><font color="white"> Username</font></h5>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							
							<input required type="text" name="txt_user" class="form-control" placeholder="username">
						</div>

					<h5><font color="white">Password</font></h5>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
						
							<input required type="password" name="txt_pass" class="form-control" placeholder="password">
						</div>
					
							<input hidden="" required type="password" name="role" value="2">
				
					<div class="form-group">

							<div class="d-flex  justify-content-between align-items-center"style="margin: 0px;"> 
								<a href="<?=base_url('index.php/Login')?>" style="color:white;">
								<b>Sudah punya akun?</b></a>
	
							<input type="submit" name="btn_login"  value="tambah" class="btn float-right login_btn" style="color:
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