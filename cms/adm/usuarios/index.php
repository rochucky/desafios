<?php
session_start();
if(!isset($_SESSION['userid'])){
	header('location: ../');
}

require_once('../../classes/Sql.php');

$db = new Sql();

// Get all user data
$users = $db->select_all('users');

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
	<link rel="stylesheet" href="index.css">
</head>
<body>
	
	<!-- Menu -->
	<nav class="navbar navbar-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
				</button>
				<a class="navbar-brand">Admin</a>
			</div>
			<div class="collapse navbar-collapse pull-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a href="../posts">Posts</a></li>
					<li class="nav-item"><a href="../usuarios">Usuários</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	

	<!-- Body -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h1>Usuários</h1>
			</div>
		</div>
		<div class="row">
			<!-- Posts -->
			<div class="col-lg-8">
				<table class="table">
				  <thead>
				    <tr>
				      <th>Id</th>
				      <th>Nome</th>
				      <th>Email</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php foreach($users as $user) { ?>
					    <tr>
					      <td><?=$user['id']?></td>
					      <td><?=$user['name']?></td>
					      <td><?=$user['email']?></td>
					    </tr>
				    <?php } ?>
				    <?php foreach($users as $user) { ?>
					    <tr>
					      <td><?=$user['id']?></td>
					      <td><?=$user['name']?></td>
					      <td><?=$user['email']?></td>
					    </tr>
				    <?php } ?>
				  </tbody>
				</table> 
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