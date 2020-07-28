<?php
	$name = $_POST['data1'];
	$year = $_POST['data2'];

	$int_result = "Result : ".$name." Year : ".$year." Age : ".(2018-$year);


	$arr_result = array();
	$arr_result['result'] = $int_result;

	echo json_encode($arr_result);

?>