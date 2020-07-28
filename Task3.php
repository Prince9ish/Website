<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" id="name" name="fahrenheit"></td>
			</tr>
			<tr>
				<td>Surname</td>
				<td><input type="text" id="surname" name="fahrenheit"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" id="age" name="fahrenheit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" id="btncal" name="btncal" value="Save"></td>
			</tr>
		</table>

		<div id="divlist">
		
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$("#btncal").click(function() {

					var sendobj = {};
					sendobj.data1 = $("#name").val();
					sendobj.data2 = $("#surname").val();
					sendobj.data3 = $("#age").val();


                	$.ajax({
						method: "POST",
						url: "a_task3.php",
						data:sendobj,
						dataType:"text",
						success:function (data) {
							alert(data);
							if(data.issuccess){
								alert("Summited");
								$("input[type=text]").val("");
							} else {
								alert(data.msg);
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