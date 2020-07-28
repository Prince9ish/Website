<?php
	$arr_result = array();

	$arr_data = array();
	$arr_data['name'] = $_POST['data1'];
	$arr_data['surname'] = $_POST['data2'];
	$arr_data['age'] = $_POST['data3'];
	$arr_data['create'] = date("Y-m-d H:i:s");

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ajax_data";

	$obj_con = mysqli_connect($hostname,$username,$password,$dbname);

	if($obj_con){
		$sql = "insert into people(P_Name,P_Surname,P_Age,P_Date) VALUES('" . $arr_data['name'] . "','" . $arr_data['surname'] ."','".$arr_data['age']."','".$arr_data['create']."')";

		if(mysqli_query($obj_con,$sql)){
			$arr_result['issuccess'] = true;
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