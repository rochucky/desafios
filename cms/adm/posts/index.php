<?php
session_start();
if(!isset($_SESSION['userid'])){
	header('location: ../');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Information</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://bootswatch.com/3/journal/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Styles -->
	<link rel="stylesheet" href="../../static/css/style.css">
</head>
<body>
	
	<!-- Menu -->
	<nav class="navbar navbar-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="./">Admin</a>
			</div>
			<div class="collapse navbar-collapse pull-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a href="/posts">Posts</a></li>
					<li class="nav-item"><a href="/usuarios">Usuários</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Body -->
	<div class="container">
		<div class="row">
			<!-- Posts -->
			<div class="col-lg-8">
				<div class="card">
				  <h3 class="card-header">Card header</h3>
				  <div class="card-body">
				    <h5 class="card-title">Special title treatment</h5>
				    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="card-link">Card link</a>
				    <a href="#" class="card-link">Another link</a>
				  </div>
				  <div class="card-footer text-muted">
				    2 days ago
				  </div>
				</div>
			</div>
			<!-- Side Menu -->
			<div class="col-lg-4">
				Teste
			</div>
		</div>
	</div>
	
	<script src="../js/action.js"></script>
</body>
</html>