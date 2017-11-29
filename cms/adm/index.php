<?php
session_start();
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
	<link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
	
	<!-- Menu -->
	<nav class="navbar navbar-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="glyphicon glyphicon-menu-hamburger"></span> 
				</button>
				<a class="navbar-brand" href="./">Admin</a>
			</div>
			<?php if(isset($_SESSION['userid'])){ ?>
			<div class="collapse navbar-collapse pull-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a href="posts">Posts</a></li>
					<li class="nav-item"><a href="usuarios">Usuários</a></li>
				</ul>
			</div>
			<?php } ?>
		</div>
	</nav>
	
	<!-- Body -->
	<div class="container">
		<div class="row">
			<div class="col-lg-4"></div>
			<?php if(isset($_SESSION['userid'])){ ?>
				<h3>Bom dia, <?=$_SESSION['name']?></h3>
			<?php } ?>
			<!-- Side Menu -->
			<div class="col-lg-4">
				<?php if(!isset($_SESSION['userid'])){ ?>
				<form id="loginForm" class="form-horizontal">
				  <legend>Login</legend>
				    <div class="form-group">
				      <div class="col-lg-12">
				        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      </div>
				    </div>
				  	<div class="form-group">
				      <div class="col-lg-12">
				        <input type="password" class="form-control" id="inputPass" placeholder="Senha">
				      </div>
				    </div>
				    <div class="form-group">
				      <div class="col-lg-12">
				      	<button id="login" type="button" class="btn btn-default btn-block pull-right" data-dismiss="modal">Entrar</button>	
				      </div>
				    </div>
				    <div class="form-group">
				      <div class="col-lg-12">
				      	<a class="pull-" href="">Esqueceu a senha?</a>
				      </div>
				    </div>
				    
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<script src="login.js"></script>
</body>
</html>