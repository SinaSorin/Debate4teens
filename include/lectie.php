<?php
session_start();
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){
	$titlu=mysqli_real_escape_string($conn,$_POST['titlu']);
	$descriere=mysqli_real_escape_string($conn,$_POST['descriere']);
	$content=mysqli_real_escape_string($conn,$_POST['content']);
	$id_domeniu=$_GET['id'];
	$sql="INSERT INTO lectii (id_domeniu,descriere,titlu,continut) VALUES ('$id_domeniu','$descriere','$titlu','$content')";
	mysqli_query($conn,$sql);
	header("Location: ../lectii.php?id=$id_domeniu");

	}
 ?>