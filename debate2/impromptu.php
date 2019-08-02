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
<style>

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
<div id="why-us" class="section">
			<div class="container">
				<div class="row">
					<div class="section-header text-center">
						<h2>Meciuri impromptu</h2>
						
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<h3></h3>
						<p class="lead">În cazul rundelor
						impromptu, echipele află moțiunea doar cu o
						oră înainte de rundă, și pot pregăti dezbaterea
						fără a recurge la surse de informare sau la
						ajutorul altcuiva (ex. instructor, colegi de club
						etc).</p>
						</div>
					<div class='col-md-12'>
					<h3 class="impromptu">Documentare</h3>
					<p class="lead">Pentru acest format, participanții nu se pot pregăti doar înaintea concursurilor, ci trebuie să urmărească evenimentele curente din toate domeniile vieții sociale, politice, economice și culturale și să se <u>documenteze permanent</u>, varietatea temelor fiind extrem de largă și putând face referire la absolut orice subiect.</p>
					<h3 class="impromptu">Cum mă pregătesc pentru un impromptu?</h3>
					<ol class="impr lead">
					<li><b>Caută cuvintele cheie din cadrul moțiunii</b>
						<ol>
						<li>factorii afectați de moțiune(cetățeni,state,etc)</li>
						<li>teme relevante </li>
						<li>principii</li>
						</ol>
					
					</li>
					<li><b>Înțelege problema din spatele moțiunii</b> 
					<ol>
						<li>care este situația inițială? </li>
						<li>cum va schimba moțiunea situația inițială? </li>
						</ol>
					
					</li>
					<li><b>Brainstorming:primele idei,exemple,principii</b> </li>
					<li><b>Construirea cazului</b>
					<ol>
						<li>alegerea ideilor cele mai relevante </li>
						<li>construirea argumentelor</li>
						<li>alegerea unui model de implementare a moțiunii</li>
						</ol></li>
					</ol>

				</div>

			</div>

		</div>
    
    
    

</body>
</html>