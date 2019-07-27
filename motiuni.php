<?php
session_start();
include_once 'include/dbh.inc.php';

 ?>
 <html>
 <head>
 <title>Index</title>
 <link rel="shortcut icon" href="motanel.png" type="image/png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/modal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
</head>
<body>
<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.php">
							<span class="debate" style="color:gray">Debate4teens</span>
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a class="link"  href="index.php">Acasa</a></li>
						<li><a class="link"  href="format.php">Format</a></li>
						<li><a class="link"  href="motiuni.php">Motiuni</a></li>
						<li><a class="link"  href="argumentare.php">Argumentare</a></li>
						<?php
						if(!isset($_SESSION['u_id']))
							echo '
						<li><a class="link" href="#" data-toggle="modal" data-target="#login-modal">Conecteaza-te</a></li>
						<li><a class="link" href="#" data-toggle="modal" data-target="#register-modal">Inregistreaza-te</a></li>';
						else
							echo '
						<li><a class="link" href="cazuri.php">Cazuri</a></li>
						<li><a class="link" href="include/logout.inc.php" id="logout">Deconecteaza-te</a></li>';
						
						
						?>
						
					</ul>
 

			</div>
<div class="row">
					 <center>
						<h2>Exemple de motiuni</h2>
 
					<div class="col-md-4">
						<div class="feature">
							<i class="icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>Stiinta</h4>
								<p>AP crede ca organismele modificate genetic ar trebui interzise.</p>
							</div>
						</div>
					</div>
 
					<div class="col-md-4">
						<div class="feature">
							<i class="icon material-icons">&#xe7ef;</i>
							<div class="feature-content">
								<h4>Societate</h4>
								<p>AP ar interzice detinerea de arme de foc de catre civili</p>
							</div>
						</div>
					</div>
 
					<div class="col-md-4">
						<div class="feature">
							<i class="icon fas fa-comment"></i>
							<div class="feature-content">
								<h4>Filosofie</h4>
								<p>AP nu isi doreste nemurirea</p>
							</div>
						</div>
					</div>
 
			</center>

				
				<hr/>
				<div class="col-md-6">
						<h3></h3>
						<p class="lead">Motiunea este o afirmatie asupra careia oamenii responsabili pot sa 
detina opinii diferite care sa fie sustinute cu ajutorul unor dovezi sau
probe,exemple,ilustrari organizate intr-un rationament</p>
					</div>

					<div class="col-md-5 col-md-offset-1">
						
							<embed width="500px" height="300px"
src="http://www.youtube.com/embed/coINBDl0XFA">
					</div>
				
</div>

</body>