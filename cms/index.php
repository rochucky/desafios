<?php

require_once('classes/Sql.php');

$db = new Sql();

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
	<link rel="stylesheet" href="static/css/style.css">
</head>
<body>
	
	<!-- Menu -->
	<nav class="navbar navbar-dark navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="./">Information</a>
			</div>
			<div class="collapse navbar-collapse pull-right" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a href="blog/negocios">Negócios</a></li>
					<li class="nav-item"><a href="blog/esportes">Esporte</a></li>
					<li class="nav-item"><a href="blog/tecnologia">Tecnologia</a></li>
				</ul>
			</div>
		</div>
	</nav>
	

	<!-- Top Image -->
	<div class="jumbotron">
	</div>
	
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
				    <p class="card-text"><p>
Lorem ipsum imperdiet hac fermentum vehicula suspendisse eleifend dictumst consequat, dolor gravida consequat mollis leo suscipit odio ligula. 
etiam quam praesent fusce proin per sodales maecenas cursus aptent, quam dictumst nullam ad tempus lorem ipsum. 
etiam aliquam enim per congue aenean fames tellus libero tristique, metus pellentesque pulvinar convallis sit eget eleifend magna, eget ad nisl dapibus porta rutrum eget ac. 
nam viverra per taciti semper sociosqu sapien erat suspendisse risus, nullam bibendum adipiscing scelerisque auctor placerat egestas aliquet nibh, mollis amet leo lacus mi quam donec class. 
nostra imperdiet pellentesque commodo adipiscing suspendisse fames imperdiet odio tempus facilisis integer, torquent suspendisse platea ligula suspendisse fusce iaculis molestie at. 
</p>
<p>
Lorem eu tellus mi suscipit ante bibendum tristique, condimentum cras euismod pellentesque felis feugiat nam habitant, fermentum nam magna vestibulum aenean in. 
habitasse potenti leo vestibulum class est ante, dapibus id commodo a sem. 
pellentesque auctor mi amet aliquam gravida rutrum tempor imperdiet tellus, cursus lacinia tristique velit cursus consectetur mi faucibus ut, interdum ante quisque nunc venenatis fames augue senectus. 
nisi iaculis purus aliquam vel aenean nisi tellus habitasse, nec consectetur et etiam adipiscing conubia volutpat, dictum amet imperdiet interdum aptent torquent volutpat. 
duis malesuada semper magna tristique mollis quisque leo hendrerit egestas, magna enim magna aenean faucibus enim turpis nisi nostra, nam maecenas dictumst litora bibendum vulputate gravida conubia. 
</p>
<p>
Augue ornare tempor ut sem varius in primis, a lectus eget maecenas class mi sociosqu senectus, duis sed semper ad eleifend accumsan. 
auctor nisi leo erat lorem nisl odio vehicula curabitur tincidunt, mollis non lobortis rutrum augue interdum semper cubilia nisl, praesent pulvinar sociosqu viverra donec aenean etiam tellus. 
tempus nisl odio varius a vitae feugiat elit nam sollicitudin, lorem sed nisi metus duis magna neque quisque dolor non, habitant viverra tincidunt nostra taciti non vel aenean. 
ut dictumst convallis blandit vitae felis cras ullamcorper est consequat augue, vitae torquent aliquet ipsum bibendum interdum dictum pharetra curae, enim dictum potenti dictumst fusce dictumst mattis consequat litora. 
</p>
<p>
Eros fringilla molestie magna fusce scelerisque laoreet lacus ut, duis varius vivamus dolor aenean dolor aliquam dictum cubilia, quisque ad ligula vestibulum aliquet ipsum sodales. 
taciti tristique lorem convallis malesuada ornare leo aliquet cursus, tincidunt dapibus feugiat dictum viverra placerat integer consequat, purus laoreet ipsum id duis conubia inceptos. 
vel quam pellentesque nisi eget dapibus eget curabitur, suspendisse ac ad viverra ultrices dapibus, consectetur dui sociosqu interdum suscipit mattis. 
ut mauris ante magna ultrices cursus ante dictum primis convallis, mattis mollis gravida leo nostra ante aenean ac diam ipsum, facilisis lorem non cubilia nostra metus mauris gravida. 
</p>
<p>
Nibh sed ullamcorper sodales ut risus etiam est luctus maecenas tristique, etiam orci quisque eu posuere erat cubilia sed nisl, pharetra ut rhoncus porta duis purus tincidunt est sagittis. 
pharetra facilisis bibendum ipsum sem luctus aptent semper rhoncus luctus orci praesent, nisi hendrerit tempor potenti feugiat pellentesque bibendum diam netus mauris, vitae cras justo rutrum curabitur velit sagittis curabitur a laoreet. 
curae iaculis sodales congue feugiat commodo pellentesque bibendum per, himenaeos luctus primis in erat bibendum magna. 
</p></p>
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
	
	<script src="static/js/action.js"></script>
</body>
</html>