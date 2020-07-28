<?php
	$int_num1 = $_POST['num1'];
	$int_num2 = $_POST['num2'];

	$int_result = $int_num1 + $int_num2;

	$arr_result = array();
	$arr_result['result'] = $int_result;

	echo json_encode($arr_result);

?>


$("#btnclear").click(function() {
					$("input[type=text]").val("");
				}