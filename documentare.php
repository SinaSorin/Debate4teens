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
					<div class="navbar-brand">
						<a class="logo" href="index.php">
							<span class="debate" style="color:gray">Debate4teens</span>
						</a>
					</div>
					<button class="navbar-toggle">
						<span></span>
					</button>
				</div>
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a class="link"  href="index.php">Acasă</a></li>
						<li><a class="link"  href="format.php">Format</a></li>
						<li><a class="link"  href="motiuni.php">Moțiuni</a></li>
						<li><a class="link"  href="argumentare.php">Argumentare</a></li>
						<li><a class="link"  href="impromptu.php">Impromptu</a></li>
						<li><a class="link"  href="documentare.php">Documentare</a></li>
						<?php
						if(!isset($_SESSION['u_id']))
							echo '
						<li><a class="link" href="#" data-toggle="modal" data-target="#login-modal">Conectează-te</a></li>
						<li><a class="link" href="#" data-toggle="modal" data-target="#register-modal">Înregistrează-te</a></li>';
						else
							echo '
						<li><a class="link" href="cazuri.php">Cazuri</a></li>
						<li><a class="link" href="include/logout.inc.php" id="logout">Deconectează-te</a></li>';
						
						
						?>
						
					</ul>
 

			</div>
			<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Conectează-te</h1><br>
				  <form action="include/login.inc.php" autocomplete="off" method="POST">
						<input type="text" name="uid" placeholder="Nume de utilizator"> 
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Conectare">
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					<h1>Creează un cont</h1><br>
				  <form action="include/signup.inc.php" method="POST">
						<input type="text" name="first" autocomplete="off" placeholder="Nume"> 
						<input type="text" name="last" autocomplete="off" placeholder="Prenume">
						<input type="text" name="uid" autocomplete="off" placeholder="Nume de utilizator">
						<input type="text" name="email" autocomplete="off" placeholder="Email">
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="password" name="pwd2" placeholder="Confirmă parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Înregistrare">
				  </form>
				</div>
			</div>
		  </div>

<div class="container">
				<div class="row">
					<div class="section-header text-center">
						<h2>Documentează-te</h2>
						<p class="lead">Poți dezbate pe orice temă.</p>
					</div>
				</div>
				<div id="domenius-wrapper">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="lectii.php?id=1" class="domeniu-img">
									<img src="./poze/cultura.png" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Cultură</center></a>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="lectii.php?id=2" class="domeniu-img">
									<img src="./poze/educatie.png" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Educație</center></a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="lectii.php?id=3" class="domeniu-img">
									<img src="./poze/mediu.png" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Mediu</center></a>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="lectii.php?id=4" class="domeniu-img">
									<img src="./poze/sport.jpg" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Sport</center></a>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="lectii.php?id=5" class="domeniu-img">
									<img src="./poze/sanatate.jpg" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Sănătate</center></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="lectii.php?id=6" class="domeniu-img">
									<img src="./poze/politica.jpg" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Politică</center></a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="lectii.php?id=7" class="domeniu-img">
									<img src="./poze/filosofie.jpg" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Altele</center></a>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a href="teste.php" class="domeniu-img">
									<img src="./poze/teste.png" alt="">
									<i class="domeniu-link-icon glyphicon glyphicon-search"></i>
								</a>
								<a class="domeniu-title link" href="#"><center>Teste</center></a>

							</div>
						</div>
					</div>

				</div>

			</div>
</body>
</html>