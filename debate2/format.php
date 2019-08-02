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


<style>
.motiune_c {
	background-image:url("poze/2.png");
	height:50%;
	background-position: center;
	background-size:cover;
	
}
.white-text {
	margin:0px;
	margin-bottom:20px;
	line-height:35px;
}
</style>
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
  <div class="hero-area section motiune_c ">

			<div class="overlay1">
				<div class="row">
					<div class="col-md-6">
						<h4 class="dezbatere lead">Dezbatere(din engleză – debate)
							este o discuție, 
							o polemică în contradictoriu 
							a unei moțiuni, urmându-se formarea 
							unei gândiri critice și logice pentru 
							însușirea și exersarea dialogului democratic. 
							Aceasta metodă este un cadru destinat unei discuții 
							structurate a unor tematici variate.</h4>

					</div>
				</div>
			</div>
			
	</div>
<div class="row" style="margin-bottom:40px;">
<div class="col-md-6 col-md-offset-1">
						<h2 class="white-text">Formatul dezbaterilor</h2>
						<p class="lead white-text">Formatul dezbaterilor prevede trei vorbitori de fiecare echipă, cu doar două echipe într-o dezbatere. Aceste două echipe sunt numite formal Guvern și Opoziție. Discursurile se desfășoară alternativ între membrii celor două echipe, cu membrii Guvernului primii. După ce fiecare vorbitor a vorbit o dată, al doilea sau primul vorbitor al fiecarei tabere prezintă un discurs de răspuns (sumativ),  cu discursul Opoziției primul și cel al Guvernului al doilea.</p>
                        <p class="lead white-text">Timpul pentru discursurile normale este de 8 minute, iar pentru discursurile de sumative de  4 minute. În timpul discursurilor obișnuite membri ai echipe adverse pot cere dreptul la intervenții celui care susține discursul. Nu se pot adresa intervenții în timpul discursurilor sumative.</p>
                        <p class="lead white-text"> Meciurile sunt urmărite de arbitrii(chair și shadow) care stabilesc echipa câstigătoare.</p>
					</div>

					<div class="col-md-5">
						
							<embed width="500px" height="300px"
src="https://www.youtube.com/embed/sUmMJGfqcB4">
<embed width="500px" height="300px"
src="https://www.youtube.com/embed/R3yhHMVlmjA">
							
						
		</div>
		</div>

</body>
</html>