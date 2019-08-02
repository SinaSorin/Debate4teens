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
<p class="obiectiv">Obiectivul principal al acestui site este de a  oferi informații cu privire la formatul dezbaterilor academice și influența deosebită pe care acestea o au asupra individului.Sperăm ca comunitatea de debateri să crească.</p></b>
</div>
		  </div>
		  <div class="container">

				<div class="navbar-header">
					<div class="navbar-brand">
						<a class="logo" href="index.php">
							<span class="debate" style="color:white">Debate4teens</span>
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
           Bine ați venit în lumea dezbaterilor!
        </p>
		<p class="lead"> Debate4Teens îți oferă posibilitatea de:</p>
        <p><span class="spatiu"></span>
            <div class="feature">
							<i class=" icon glyphicon glyphicon-book"></i>
							<div class="feature-content">
								<h4>A înțelege formatul dezbaterilor </h4>
								<p>Oferim informații referitoare la moțiuni, format,modalități de argumentare,rolul vorbitorilor.</p>
							</div>
						</div>
						<div class="feature">
							<i class="icon glyphicon glyphicon-eye-open"></i>
							<div class="feature-content">
								<h4>A te documenta</h4>
								<p>Pe această platformă poți face teste interactive.</p>
							</div>
						</div>
						<div class="feature">
							<i class="icon glyphicon glyphicon-pencil"></i>
							<div class="feature-content">
								<h4>A-ți construi cazul.</h4>
								<p>Site-ul conține șabloane ce facilitează construirea argumentelor.</p>
							</div>
						</div>
        </p>
		
    </div>
    
    </div>

  
  
 </body>
</html>
	