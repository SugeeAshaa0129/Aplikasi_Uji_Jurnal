<!DOCTYPE html>
<html>
<head>
	<title>Glowing Loader Ring Animation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

	<style type="text/css">
		body{
	margin: 0;
	padding: 0;
	background-color: #262626;
}

.load {

	position: absolute;
	width: 100%;
	height: 100%;
	background-color: #262626;
	z-index: 99999999;
}

div h2{
	width: 400px;
	position: relative;
	bottom: 120px;
	right: 55px;
	font-family: monospace;
	font-size: 37px;
}

.ring{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 250px;
	height: 250px;
	background: transparent;
	border: 3px solid #3c3c3c;
	border-radius: 50%;
	text-align: center;
	line-height: 150px;
	font-family: sans-serif;
	font-size: 20px;
	color: #FFF;
	letter-spacing: 5px;
	text-transform: uppercase;
	text-shadow: 0 0 10px #FFF;
	box-shadow: 0 0 20px rgba(0,0,0,0.5);
}

.ring:before{
	content: '';
	position: absolute;
	top: -1px;
	left: 1px;
	width: 100%;
	height: 100%;
	border: 3px solid transparent;
	border-top: 3px solid #FFF;
	border-right: 3px solid #FFF;
	border-radius: 50%;
	animation: animateCircle 2s linear infinite;
}

div .loaderspan{
	display: block;
	position: absolute;
	top: calc(50% - 2px);
	left: 50%;
	width: 50%;
	height: 4px;
	background-color: transparent;
	transform-origin: left;
	animation: animate 2s linear infinite;
}

div .loaderspan:before {
	content: '';
	position: absolute;
	width: 16px;
	height: 16px;
	border-radius: 50%;
	background-color: #FFF;
	top: -6px;
	right: -8px;
	box-shadow: 0 0 20px #FFF;
}

div .logo_tokoload{

	position: absolute;
	width : 125% ;
	height: 35% ;
	right: 0px;
	left: -20px;
	top: 79px;
}

@keyframes animateCircle{
	0%{
		transform: rotate(0deg);
	}100%{
		transform: rotate(360deg);
	}
}

@keyframes animate{
	0%{
		transform: rotate(45deg);
	}100%{
		transform: rotate(405deg);
	}
}
	</style>
</head>
<body>

<div class="load" >
	<div class="ring">
		<center><h2>Lagi Loading...	</h2>
		</center>
		<img class="logo_tokoload" style="" src="<?php echo base_url ('/upload/image/logo_toko_white.png')?>">
		<div class="loaderspan"></div>
	</div>
</div>

<script type="text/javascript">
	$(window).load(function() { $(".load").delay(1000).fadeOut("slow"); } )
</script>
</body>
</html>