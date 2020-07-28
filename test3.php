<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<table>
			<tr>
				<td>Num1</td>
				<td><input type="text" id="txtnum1" name="txtnum1"></td>
			</tr>
			<tr>
				<td>Num2</td>
				<td><input type="text" id="txtnum2" name="txtnum2"></td>
			</tr>
			<tr>
				<td>Result</td>
				<td><span id="spnresult">0</span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" id="btncal" name="btncal" value="Calculate"></td>
			</tr>
		</table>

		</table>
		<div id="divtest">Test</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$("#btncal").click(function() {

				$.ajax({
					method: "POST",
					url: "a_test3.php",
					data:{num1:$("#txtnum1").val(),num2:$("#txtnum2").val()},
					dataType:"json",
					success:function (data) {
						$("#divtest").html(data.result);
					},
					error:function() {
						alert("Has Error !!");
					}
				});
			});
		});
		</script>

	</body>

</html>