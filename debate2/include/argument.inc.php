<?php

include 'dbh.inc.php';

if(isset($_POST['submit']))
{
	$id_motiune=$_GET['id'];
	$titlu=$_POST['titlu'];
	$n=$_POST['total'];
	$sql1="INSERT INTO argumente(id_motiune,titlu) VALUES($id_motiune,'$titlu')";
		$result1=mysqli_query($conn,$sql1);
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
			$id_arg=$row['id'];
			$sql3="INSERT INTO sec_arg(id_arg,tip,ordine,continut) VALUES($id_arg,'$type',$i,'$sec')";
			$result3=mysqli_query($conn,$sql3);
			header("Location: ../argumente.php?id=$id_motiune");
		}
	}
}

?>