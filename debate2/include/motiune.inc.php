<?php
session_start();
include_once 'dbh.inc.php';
$motiune=mysqli_real_escape_string($conn,$_POST['motiune']);
echo 
$motiune;
$id=$_SESSION['u_id'];
	$sql="INSERT INTO motiuni(nume,id_user) VALUES('$motiune',$id)";
	$result=mysqli_query($conn,$sql);
	header("Location: ../cazuri.php");
	exit();

 ?>