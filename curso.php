<?php 
if(isset($_GET["wpp"])){
	$wpp = $_GET["wpp"];
}else{
	$wpp = "";
} ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mentoria Gratuita</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
	<nav class="navbar navbar-dark bg-dark justify-content-center" style="background-color: #000 !important;">
		<a class="navbar-brand" href="#">
			<img src="media/img/emilhao.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
			<span>Mentoria Gratuita</span>
		</a>
	</nav>

	<div class="container mt-4">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item" aria-current="page">Mentoria Gratuita</li>
				<li class="breadcrumb-item active" aria-current="page">Randerson Araújo</li>
			</ol>
		</nav>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/knWKd3jp8qc"></iframe>
		</div>

		<center>
		<div id="delayDiv" class="mt-2" style="display: none;">
			<h4>Aprenda ainda mais sobre esta profissão agora!</h4><br>
			<h5>Você quer ter ganhos como estes, trabalhando do conforto da sua casa, ou onde quiser?</h2><br>
			<button type="button" onclick="window.open('https://wa.me/<?php echo "55".$wpp; ?>')" class="btn btn-danger btn-lg">Quero esta oportunidade!</button>
		</div>
		</center>

		<script>
		$(document).ready(function(){
			setTimeout(() => {
				$('#delayDiv').show();
			}, 270000);  
		})
		</script>
	</div>
	
	
		

</body>
</html>