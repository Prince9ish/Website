<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<table>
			<tr>
				<td>Number 1</td>
				<td><input type="text" id="num1" name="fahrenheit"></td>
			</tr>
			<tr>
				<td>Number 2</td>
				<td><input type="text" id="num2" name="fahrenheit"></td>
			</tr>
			<tr>
				<td>
				<p id="result">....</p>
				<td>
			</tr>
			<tr>
				<td><input type="button" id="btncal" name="btncal" value="Calulate"></td>
				<td><input type="button" id="btnclear" name="btncal" value="Clear"></td>
			</tr>
		</table>

		<div id="divlist">
		
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {

				$("#btnclear").click(function() {
					$("input[type=text]").val("");
				}
				

				$("#btncal").click(function() {

					var sendobj = {};
					sendobj.data1 = $("#num1").val();
					sendobj.data2 = $("#num2").val();

                	$.ajax({
						method: "POST",
						url: "a_task4.php",
						data:sendobj,
						dataType:"json",
						success:function (data) {
							if(data.issuccess){
								$("#result").text(data.result);
							} else {
							}
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