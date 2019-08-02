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
<style>
.cos {
	top:-30px;
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
		<div id="blog" class="section">
			<div class="container">
				<div class="row">
					<div id="main" class="col-md-12">
						<div class="blog-post">
							<?php
							$id_motiune=$_GET['id'];
							$sql3="select * from motiuni where id=$id_motiune";
							$result3=mysqli_query($conn,$sql3);
							while($row3=mysqli_fetch_assoc($result3))
							{
								$content=$row3['nume'];
							}
							echo "<center><h2>$content</h2></center></br>";
							
							$sql="select * from argumente where id_motiune=$id_motiune";
							$result=mysqli_query($conn,$sql);
							$resultCheck=mysqli_num_rows($result);
							if($resultCheck>0)
							{
								
								$i=1;
								
								
								
								while($row=mysqli_fetch_assoc($result))
								{	
									$id_argument=$row['id'];
									echo "<h3>Argumentul $i:  ".$row['titlu']."</h3>
									<a class='glyphicon glyphicon-trash cos' href='include/deletea.php?id=$id_argument'></a>
									<a href='edit.php?id=$id_argument' class='glyphicon glyphicon-pencil cos'></a>
</br></br>";
									echo "<div>";
									$id=$row['id'];
									$sql2="select * from sec_arg where id_arg=$id";
									$result2=mysqli_query($conn,$sql2);
									$resultCheck2=mysqli_num_rows($result2);
									while($row2=mysqli_fetch_assoc($result2))
									{
										$tip=$row2['tip'];
										$continut=$row2['continut'];
										echo "<p class='arg c$tip'>$continut</p>";
									}
										$i++;
									echo "</div></br>";
									
									
								}
								
							}
							echo "<a href='sablon.php?id=$id_motiune'><div class='motiune'><center>Adauga argument</center></div></a>"
							?>
						</div>

						
					</div>



				</div>

			</div>

		</div>

</body>