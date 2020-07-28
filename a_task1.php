<?php
	$int_num1 = $_POST['num1'];

	$int_result = ( $int_num1 - 32 ) * ( 5 / 9 );
	if($int_result < 19 ){
		$status = 'c';
	}else if ($int_result > 30){
		$status = 'h';
	}else{
		$status = 'o';
	}

	$arr_result = array();
	$arr_result['result'] = $int_result;
	$arr_result['status'] = $status;

	echo json_encode($arr_result);

?>