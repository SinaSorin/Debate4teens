<?php
session_start();
include_once 'include/dbh.inc.php';

 ?><html>
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
		<link type="text/css" rel="stylesheet" href="css/style.css"/>  
<style>
.nav>li>a {
	color:white;
}
.nav>li>a:hover  {
	color:white;
}

</style>
 </head>
 <body>
 
			
 <div class="back" style="background-image: url(poze/1.png)">
 
 <div class="overlay">

   <div class="ceva"><b><h1>Debate4Teens</h1>
<p class="obiectiv">Obiectivul principal al acestui site este de a va oferi informatii cu privire la formatul dezbaterilor academice si influenta deosebita pe care acestea o au asupra individului.Speram ca comunitatea de debateri sa creasca.</p></b>
</div>
		  </div>
		  <div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.php">
							<span class="debate" style="color:white">Debate4teens</span>
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
				<!-- /Navigation -->

			</div>
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
  <center>
	
  <img src="poze/arrow2.png" class="sageata">
  </center>
     <div class="desc">
    <div class="continut">
      <p class="subtitlu">
           Bine ati venit in lumea dezbaterilor!
        </p>
		<p class="lead"> Debate4Teens iti ofera posibilitatea de:</p>
        <p><span class="spatiu"></span>
            <div class="feature">
							<i class=" icon glyphicon glyphicon-book"></i>
							<div class="feature-content">
								<h4>A intelege formatul dezbaterilor </h4>
								<p>Oferim informatii referitoare la motiuni, format,modalitati de argumentare,rolul vorbitorilor.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="icon material-icons">&#xe7ef;</i>
							<div class="feature-content">
								<h4>A comunica</h4>
								<p>Pe aceasta platforma poti lua parte la dezbateri interactive.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="icon glyphicon glyphicon-pencil"></i>
							<div class="feature-content">
								<h4>A-ti construi cazul.</h4>
								<p>Site-ul contine sabloane ce faciliteaza construirea argumentelor.</p>
							</div>
						</div>
        </p>
		
    </div>
    
    </div>

  
  
 </body>
</html>
	