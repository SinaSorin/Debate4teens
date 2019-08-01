<?php

include_once 'include/dbh.inc.php';

if(isset($_POST['submit']))
{
	$n=$_POST['total'];
	for($i=1;$i<$n;$i++)
	{
		if(isset($_POST["s$i"]))
			$sec=$_POST["s$i"];
			else
				if(isset($_POST["e$i"]))
					$sec=$_POST["e$i"];
				else
					if(isset($_POST["x$i"]))
						$sec=$_POST["x$i"];
					else
						if(isset($_POST["i$i"]))
							$sec=$_POST["i$i"];
		echo $sec."</br>";

}








?>