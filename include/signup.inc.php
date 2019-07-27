<?php 
if(isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	
	$first=mysqli_real_escape_string($conn,$_POST['first']); // preiau informatiile de la pagina "signup.php"
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$pwd2=mysqli_real_escape_string($conn,$_POST['pwd2']);
	
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) { // ma asigur ca au fost completate toate campurile
		header("Location: ../index.php?signup=empty");
		exit();
	}
	else {
		if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last) ) { // numele si prenumele contin doar litere
			header("Location: ../index.php?signup=invalid");
			exit();
		}else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // ma asigur ca a fost introdusa o adresa de mail
				header("location: ../index.php?signup=invalidEMAIL");
				exit();
			}
			else {
				if(strlen($pwd)<5){
					header("location: ../index.php?signup=passwordtooshort");
					exit();
				}else {
					if($pwd!=$pwd2) {
				header("location: ../index.php?signup=errorpassword");
				exit();
				}
				else {
						$sql ="SELECT * FROM user WHERE user_uid='$uid'" ;
						$result= mysqli_query($conn,$sql);
						$resultCheck= mysqli_num_rows($result);
						if($resultCheck > 0) { // ma asigur ca numele pe care utilizatorul l-a ales nu exista deja
							header("Location: ../index.php?signup=USERTAKEN");
							exit();
					
						}else {
							$hash1=md5($pwd);
							$hashedPwd = sha1($hash1); //am criptat parola
							$sql= "INSERT INTO user(user_first, user_last, user_email,user_uid, user_pwd) VALUES('$first' ,'$last','$email','$uid','$hashedPwd');";
							mysqli_query($conn,$sql);//contul a fost creat
							$sql="SELECT * FROM user WHERE user_uid='$uid' AND user_first='$first'";
							header("Location: ../index.php?succes");
						exit();
					
						}
					}
				}
				
				}
			
			
			}
		
	}
	
}else {
	header("Location: ../signup.php");
	exit();
}
?>