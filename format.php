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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adaugare motiune</h4>
        </div>
		<div class="modal-body">
		<form action="include/motiune.inc.php" method="POST">
 
          
				<input type="text" name="motiune" autocomplete="off" required placeholder="Motiune" class="inp"> 
						</div>
        <div class="modal-footer">
						<input type="submit" name="submit" class="btn btn-default" value=" trimite">
        </div>
		 </form>
		 
      </div>
      
    </div>
  </div>
  <div class="hero-area section motiune_c ">

			<div class="overlay1">
				<div class="row">
					<div class="col-md-6">
						<h4 class="dezbatere lead">Dezbatere(din engleza – debate)
							este o discutie, 
							o polemica în contradictoriu 
							a unei motiuni, urmându-se formarea 
							unei gândiri critice si logice pentru 
							însusirea si exersarea dialogului democratic. 
							Aceasta metoda este un cadru destinat unei discutii 
							structurate a unor tematici variate.</h4>

					</div>
				</div>
			</div>
			
	</div>
<div class="row" style="margin-bottom:40px;">
<div class="col-md-6 col-md-offset-1">
						<h2 class="white-text">Formatul dezbaterilor</h2>
						<p class="lead white-text">Formatul dezbaterilor prevede trei vorbitori de fiecare echipa, cu doar doua echipe intr-o dezbatere. Aceste doua echipe sunt numite formal Guvern si Opozitie. Discursurile se desfasoara alternativ intre membrii celor doua echipe, cu membrii Guvernului primii. Dupa ce fiecare vorbitor a vorbit o data, al doilea sau primul vorbitor al fiecarei tabere prezinta un discurs de raspuns (sumativ),  cu discursul Opozitiei primul si cel al Guvernului al doilea.</p>
                        <p class="lead white-text">Timpul pentru discursurile normale este de 8 minute, iar pentru discursurile de sumative de  4 minute. In timpul discursurilor obisnuite membri ai echipe adverse pot cere dreptul la interventii celui care sustine discursul. Nu se pot adresa interventii in timpul discursurilor sumative.</p>
                        <p class="lead white-text"> Meciurile sunt urmarite de arbitrii(chair si shadow) care stabilesc echipa castigatoare.</p>
					</div>

					<div class="col-md-5">
						
							<embed width="500px" height="300px"
src="https://www.youtube.com/embed/sUmMJGfqcB4">
<embed width="500px" height="300px"
src="https://www.youtube.com/embed/R3yhHMVlmjA">
							
						
		</div>
		</div>

</body>