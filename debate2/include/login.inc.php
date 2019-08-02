<?php

session_start();
 
if(isset($_POST['submit'])) {
	include 'dbh.inc.php';
	
	$uid=mysqli_real_escape_string($conn,$_POST['uid']) ;
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']) ;
	
	if(empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");  // ma asigur ca utilizatorul a completat ambele campuri 
		exit();
	}else {
		$sql= "SELECT * FROM user WHERE user_uid='$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);								
		if($resultCheck<1) { // verific daca acea persoana exista in baza de date  
			header("Location: ../index.php?login=error");
			exit();
		} else {
			while($row=mysqli_fetch_assoc($result))
			{	
				$hash1= md5($pwd);
				$hashedPwdCheck = sha1($hash1); 
				if($hashedPwdCheck !==$row['user_pwd']) { //verific parola
					header("Location: ../index.php?login");
					exit();
				}else {
					$_SESSION['u_id']=$row['user_id'];
					$_SESSION['u_first']=$row['user_first'];
					$_SESSION['u_last']=$row['user_last'];
					$_SESSION['u_email']=$row['user_email'];
					$_SESSION['u_uid']=$row['user_uid'];
					$_SESSION['u_status']=$row['status'];
					header("Location: ../index.php?login=succes"); //utlizatorul este logat
					exit();
					};
				
				
					
			}
		}
	}
}else {
		header("Location: ../index.php?login=error");
		exit();
	}