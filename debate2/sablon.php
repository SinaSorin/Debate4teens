<?php
session_start();
include_once 'include/dbh.inc.php';
if(!isset($_SESSION['u_id']))
		header("Location: index.php");
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
	<div id="main" class="col-md-12">
						<div class="sablon">
						<div class="sexi">
						<a class="v s" id="h" onclick="sexi('s')">Statement</a>
						<a class="v x" id="h" onclick="sexi('x')">Explanation</a>
						<a class="v e" id="h" onclick="sexi('e')">Example</a>
						<a class="v i" id="h" onclick="sexi('i')">Impact</a>
						<a class="v sterge" id="h" onclick="sterge()">Șterge</a>
						</div>
						<hr></br>
						
						<form action="include/argument.inc.php<?php echo "?id=".$_GET['id'];?>" method="POST">
									<input type="text" name="titlu" placeholder="Titlul argumentului" required autocomplete="off"></br></br>
									<input type="text" name="total" style="display:none;" id="numar">
									<textarea class="cs" id="id1" name="s1" placeholder="Statement" required ></textarea>
									<span id="span"></span>
									<span id="submit"></span>
								</form>
						</div>
					

						
					</div>
					
					
					<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>