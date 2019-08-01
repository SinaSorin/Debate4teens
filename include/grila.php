<?php
session_start();
include_once 'dbh.inc.php';

$id_lectie=$_GET['id'];
$nr_intrebari=mysqli_real_escape_string($conn,$_POST['imp']);
if($nr_intrebari==0)
	header("Location: ../creareintrebari.php?id=$id_lectie");
else
	{
		for($i=1;$i<=$nr_intrebari;$i++)
		{
			$nr_raspunsuri=mysqli_real_escape_string($conn,$_POST["nr$i"]);
			if($nr_raspunsuri==0)
					header("Location: ../creareintrebari.php?id=$id_lectie");
		}

		for($i=1;$i<=$nr_intrebari;$i++)
		{
			$intrebare=mysqli_real_escape_string($conn,$_POST["data$i"]);
			$sql2="INSERT INTO intrebari(id_lectie,continut) VALUES('$id_lectie','$intrebare')";
			$result2=mysqli_query($conn,$sql2);
			$id_intrebare=mysqli_insert_id($conn);
			$nr_raspunsuri=mysqli_real_escape_string($conn,$_POST["nr$i"]);
			$raspuns_corect=mysqli_real_escape_string($conn,$_POST["radio$i"]);
			for($j=1;$j<=$nr_raspunsuri;$j++)
			{
				$varianta=mysqli_real_escape_string($conn,$_POST["raspuns$i$j"]);
					if($raspuns_corect==$j)
						$raspuns=1;
					else
						$raspuns=0;
				$sql3="INSERT INTO raspunsuri(id_intrebare,continut,corect) VALUES($id_intrebare,'$varianta','$raspuns')";
				$result3=mysqli_query($conn,$sql3);
			}
		}
		header("Location: ../documentare.php");
	}
 ?>

