<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<table>
			<tr>
				<td>Fahrenheit</td>
				<td><input type="text" id="fahrenheit" name="fahrenheit"></td>
			</tr>
			<tr>
				<td>C</td>
				<td><p id="result">.......</p></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" id="btncal" name="btncal" value="Calculate"></td>
			</tr>
		</table>

		<img id="ok" src="images/pk.jpg" style="width: 100%;" />
		<img id="cold" src="images/pc.jpg" style="width: 100%;" />
		<img id="hot" src="images/ph.jpg" style="width: 100%;" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$("#cold").hide();
			$("#hot").hide();
			$("#ok").hide();
			$(function () {
				$("#btncal").click(function() {

				$.ajax({
					method: "POST",
					url: "a_task1.php",
					data:{num1:$("#fahrenheit").val()},
					dataType:"json",
					success:function (data) {
						$("#result").text(data.result);
						if(parseInt(data.result) < 19 ){
							$("#cold").show();
						}else if (parseInt(data.result)> 30){
							$("#hot").show();	
						}else{
							$("#ok").show();	
						}
					},
					error:function() {
						alert("Has Error !!");
					}
				});
			});
		});
		</script>

		<script type="text/javascript">

		</script>

	</body>

</html>