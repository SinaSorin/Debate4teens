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
.impromptu {
	margin-left: 0px;
	color:black;
	font-weight:500;
	font-size:30px;
}
input[type="text"] {
	margin-top:10px;
	width:unset;
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
			<div class="tot">
			
			<?php
			
			if(!isset($_POST['submit']))
			{
				$sql="select * from intrebari";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
					$id=$row['id'];	
					
				}
				$gasit=0;
				while($gasit==0)
				{
					$rand=mt_rand(1,$id);
					$sql="select * from intrebari where id=$rand";
					$result=mysqli_query($conn,$sql);
					$resultCheck=mysqli_fetch_assoc($result);
					if($resultCheck>0)
					$gasit=1;
					$sql="select * from intrebari where id=$rand";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
						
						$intrebare=$row['continut'];
						echo "<h3>$intrebare</h3>";
						echo "<form method='POST'>
						<input type='text' class='ascuns' value='$rand' name='rand'>";
						$sql2="SELECT * FROM raspunsuri WHERE id_intrebare=$rand";
				$result2=mysqli_query($conn,$sql2);
				if(mysqli_num_rows($result2)>0)
				{
					echo "<div id='s'>";
					while($row2=mysqli_fetch_assoc($result2))
					{
						$raspuns=$row2['continut'];
						$j=$row2['id'];
						
						echo "<div class='raspuns' id='r$j' onclick='schimba($j)'> $raspuns</div>";
						echo "
						<input type='radio' value='$j' name='corect' id='i$j' style='display:none'>";
					}
					
					echo '</div><input type="submit" name="submit" class="v" style="float:left"><br></form>';
				}
						
						
					}
				}
			} 
			else {
				
				$rand=$_POST['rand'];
				
				$sql3="SELECT * FROM intrebari WHERE id=$rand";
		$result3=mysqli_query($conn,$sql3);
		if(mysqli_num_rows($result3)>0)
		{
			while($row3=mysqli_fetch_assoc($result3))
			{
				$intrebare=$row3['continut'];
				$id_intrebare=$row3['id'];
				$id_lectie=$row3['id_lectie'];
				echo "<h3>".$intrebare."</h3>";
				$sql4="SELECT * FROM raspunsuri WHERE id_intrebare=$id_intrebare";
				$result4=mysqli_query($conn,$sql4);
				if(mysqli_num_rows($result4)>0)
				{
					echo  "<ul>";
					while($row4=mysqli_fetch_assoc($result4))
					{
						
						$raspuns=$row4['continut'];
						$corect_r=$row4['corect'];
						$id_r=$row4['id'];
					if(isset($_POST["corect"]))
						{
						$id_checked=$_POST["corect"];
						if($id_r==$id_checked)
							if($corect_r==1)
								echo "<b><li class='verde'>$raspuns</li></b>";
								//verde
							else
								echo "<b><li class='rosu'>$raspuns</li></b>";
								//rosu
						else
							if($corect_r==1)
								echo "<b><li class='verde'>$raspuns</li></b>";
								//verde
							else
								echo "<li class='normal'>$raspuns</li>";
								//nimic
						}
						else 
							if($corect_r==1)
								echo "<b><li class='verde'>$raspuns</li></b>";
								//verde
							else
								echo "<li class='normal'>$raspuns</li>";
								//nimic
					}
					echo "</ul>";
				}
			}
		}
		echo "<a href='teste.php' class='v' style='float:left'>Alta intrebare</a>
			<a href='lectie.php?id=$id_lectie' class='v' target='blank' style='float:right'>Vezi lectia</a><br>";
			}
			
			
				
				
				
				
				












			?>
			
    
</div>
 <script src="js/test.js"></script>
</body>
</html>