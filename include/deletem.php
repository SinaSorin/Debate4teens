<?php
include 'dbh.inc.php';


$id_motiune=$_GET['id'];

$sql="DELETE FROM motiuni WHERE id=$id_motiune";
$result=mysqli_query($conn,$sql);

header("Location: ../cazuri.php");



?>
