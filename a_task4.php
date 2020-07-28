<?php
	$arr_result = array();

	$arr_data = array();
	$arr_data['Num1'] = $_POST['data1'];
	$arr_data['Num2'] = $_POST['data2'];
	$arr_data['Result'] = $arr_data['Num1']+$arr_data['Num2'];

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ajax_data";

	$obj_con = mysqli_connect($hostname,$username,$password,$dbname);

	if($obj_con){
		$sql = "insert into plus(Num1,Num2,Result) VALUES('" . $arr_data['Num1'] . "','" . $arr_data['Num2'] ."','".$arr_data['Result']."')";

		if(mysqli_query($obj_con,$sql)){
			$arr_result['issuccess'] = true;
			$arr_result['result'] = $arr_data['Num1']." + ".$arr_data['Num2']." = ".$arr_data['Result'];
		}else{
			$arr_result['issuccess'] = false;
			$arr_result['msg'] = "error " . $sql;
		}
	} else {
		$arr_result['issuccess'] = false;
		$arr_result['msg'] = "error";
	}



	echo json_encode($arr_result);

?>