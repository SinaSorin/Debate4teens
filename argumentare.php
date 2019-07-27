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
<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Argumentare si contra-argumentare</h2>
						
					</div>

					

				</div>
				<!-- /row -->

				

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<h3></h3>
						<p class="lead">Unul din cele mai populare modele de argumentare folosite in dezbaterile academice este modelul SEXI (acronim englezesc) sau ARDEI(acronim romanesc).
Se pot discerne 4 elemente:

<ul style="list-style-type: circle">
    <li> o afirmatie</li>
 <li>un rationament ( o inlantuire logica de enunturi)</li>
 <li>datele aduse in sprijinul rationamentului</li>
 <li>impactul(consecintele asumarii unui punct de vedere</li>
                        </ul>
                        </p>
					</div>

					<div class="col-md-5 ">
						
							<img src="poze/3.png" style="">
							
						
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
    
    
    
    <div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Rolurile vorbitorilor</h2>
						
					</div>

					

				</div>
				<!-- /row -->

				

				<!-- row -->
				<div class="row">

					<div class="col-md-6" id="butoane">
						<h3></h3>
						<p class="lead"><span class="g">Guvern</span>
                        <p><a class="v active" id="h" onclick="schimba(1)">Vorbitor1</a>
                        <a class="v " onclick="schimba(2)">Vorbitor2</a>
                        <a class="v " onclick="schimba(3)">Vorbitor3</a>
                        </p></p><br/>
                    <p class="lead"><span class="g">Opozitie</span>
                        <p><a class="v " onclick="schimba(4)">Vorbitor1</a>
                        <a class="v " onclick="schimba(2)">Vorbitor2</a>
                        <a class="v" onclick="schimba(3)">Vorbitor3</a>
                        </p></p>
					</div>

					<div class="col-md-5 col-md-offset-1">
						<p class="lead" >
                        <ul id="vorbitor" style="list-style-type:circle; font-size:18px; " class="area">
                        <li>anunta motiunea</li><li>identifica si defineste elementele cheie ale motiunii</li><li>contextualizeaza motiunea</li><li>anunta starea de fapt(status-quo) si filozofia de caz</li><li>anunta diviziunea argumentelor intre vorbitori</li><li>prezinta partea sa de caz</li>
                        </ul>
                        </p>
							

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
    <script type="text/javascript" src="js/functions.js"></script>
    <script>
        

var header = document.getElementById("butoane");
var btns = header.getElementsByClassName("v");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</body>