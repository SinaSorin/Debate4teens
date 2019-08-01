<?php
include 'dbh.inc.php';


$id_argument=$_GET['id'];

$sql2="select * from argumente where id=$id_argument";
$result2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_assoc($result2))
{
	$id_motiune=$row2['id_motiune'];
}

$sql="DELETE FROM argumente WHERE id=$id_argument";
$result=mysqli_query($conn,$sql);



header("Location: ../argumente.php?id=$id_motiune");


?>