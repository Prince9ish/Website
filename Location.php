<?php
		// ------------------------------------------------------------
		// Config Database
		$hostname = "localhost";
		$username = "prince9ish_p";
		$password = "pJz-KGW-M8J-vJD";
		$dbname = "prince9ish_BMI";

		$obj_con = mysqli_connect($hostname,$username,$password,$dbname);

		if(!$obj_con){
			header("location:error.php");
			exit();
		}

		mysqli_query($obj_con,"SET NAME UTF8");

?>
