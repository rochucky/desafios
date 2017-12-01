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
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

	<!-- Styles -->
	<link rel="stylesheet" href="../../static/noty/lib/noty.css">
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
			<div class="col-lg-4">
				<h1>Usuários</h1>
				<button id="create" class="btn btn-info">Novo Usuário</button>
			</div>

		</div>
		<div class="row">
			<!-- Posts -->
			<div class="col-lg-8">
				<table class="table">
				  <thead>
				    <tr>
				      <th>Nome</th>
				      <th>Email</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php foreach($users as $user) { ?>
					    <tr id='<?=$user['id']?>'>
					      <td name="name"><?=$user['name']?></td>
					      <td name="email"><?=$user['email']?></td>
					    </tr>
				    <?php } ?>
				  </tbody>
				</table> 
			</div>
			<!-- Side Menu -->
			<div class="col-lg-4">
				<div id="edit">
					<form id="formEdit" data="users" class="form-horizontal">
					  <legend>Editar Usuário</legend>
					    <div class="form-group">
					      <div class="col-lg-12">
					      	<label for="name">Nome:</label>
					        <input type="text" class="form-control" id="name" name="name">
					      </div>
					    </div>
					  	<div class="form-group">
					      <div class="col-lg-12">
					      	<label for="email">Email:</label>
					        <input type="email" class="form-control" id="email" name="email">
					      </div>
					    </div>
					    <div class="form-group">
					      <div class="col-lg-6">
					      	<button id="save" type="button" class="btn btn-info btn-block">Salvar</button>	
					      </div>
					      <div class="col-lg-6">
					      	<button id="cancel" type="button" class="btn btn-default btn-block">Cancelar</button>	
					      </div>
					    </div>
					    <input type="hidden" id="id" name="id" /> 
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<script src="../../static/noty/lib/noty.min.js"></script>
	<script src="../../static/js/notification.js"></script>
	<script src="../../static/js/action.js"></script>
</body>
</html>