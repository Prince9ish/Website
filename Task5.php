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
				<td>Gender</td>
				<td><input type="radio" value="M" name="gender">Male</td>
				<td><input type="radio" value="F" name="gender">Female</td>
			</tr>
			<tr>
				<td><input type="button" id="btncal" name="btncal" value="Save"></td>
				<td><input type="button" id="btnclear" name="btnclear" value="Clear"></td>
			</tr>
		</table>

		<div id="divlist">
		
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {	

				$("#btnclear").click(function() {
					alert("a");
					$("#name").val("");
					$("#surname").val("");
				});			

				$("#btncal").click(function() {

					var sendobj = {};
					sendobj.data1 = $("#name").val();
					sendobj.data2 = $("#surname").val();
					sendobj.data3 = $("[name='gender']:checked").val();

                	$.ajax({
						method: "POST",
						url: "a_task5.php",
						data:sendobj,
						dataType:"json",
						success:function (data) {
							if(data.issuccess){
								alert("Saved");
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