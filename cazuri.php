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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adăugare moțiune</h4>
        </div>
		<div class="modal-body">
		<form action="include/motiune.inc.php" method="POST">
 
          
				<input type="text" name="motiune" autocomplete="off" required placeholder="Moțiune" class="inp"> 
						</div>
        <div class="modal-footer">
						<input type="submit" name="submit" class="btn btn-default" value=" trimite">
        </div>
		 </form>
		 
      </div>
      
    </div>
  </div>
  <div class="hero-area section">

			<div class="motiune_c">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<h1 class="white-text">Moțiunile mele</h1>

					</div>
				</div>
			</div>

		</div>
  <div id="blog" class="section">
			<div class="container">
				<div class="row">
					<div id="main" class="col-md-12">
					<?php
					$id=$_SESSION['u_id'];
					$sql="select * from motiuni where id_user=$id";
					$result=mysqli_query($conn,$sql);
					$resultCheck=mysqli_num_rows($result);
					while($row=mysqli_fetch_assoc($result))
					{
						$id_motiune=$row['id'];
						$nume=$row['nume'];
						echo "
						<a class='glyphicon glyphicon-trash cos' href='include/deletem.php?id=$id_motiune'></a>
						<a href='argumente.php?id=$id_motiune'><div class='motiune'>
						
						
						<center>$nume</center></div></a>";
						
					}
					?>

					<div class="motiune" data-toggle='modal' data-target='#myModal'><center>Adaugă moțiune</center></div>
					</div>

</body>

</html>