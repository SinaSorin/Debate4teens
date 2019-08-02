<?php
session_start();
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){
	$id=$_GET['id'];
	$titlu=$_POST['titlu'];
	$n=$_POST['total'];
	$sql="UPDATE argumente
	SET titlu=$titlu
	WHERE id=$id;";
	$result=mysqli_query($conn,$sql);
	for($i=1;$i<=$n;$i++)
	{
		if(isset($_POST["s$i"]))
		{
			$sec=$_POST["s$i"];
			$type="s";
		}
			else
				if(isset($_POST["e$i"]))
				{	
					$sec=$_POST["e$i"];
					$type="e";
				}
				else
					if(isset($_POST["x$i"]))
					{
						$sec=$_POST["x$i"];
						$type="x";
					}
						else
						if(isset($_POST["i$i"]))
						{	
							$sec=$_POST["i$i"];
							$type="i";
						}
		echo $sec."</br>";
		
		$sql2="select *from argumente where titlu='$titlu'";
		$result2=mysqli_query($conn,$sql2);
		$resultCheck2=mysqli_num_rows($result2);
		while($row=mysqli_fetch_assoc($result2))
		{
			$id_mot=$row['id_motiune'];
			$id_arg=$row['id'];
			echo $id_arg;
			$sql3="UPDATE sec_arg
SET continut = '$sec'
WHERE id_arg=$id AND ordine=$i;";
			$result3=mysqli_query($conn,$sql3);
		}
	
}}
	header("Location: ../argumente.php?id=$id_mot");
 ?>