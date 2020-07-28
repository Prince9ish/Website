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
				<td>Department</td>
				<td>
				<select name="department">
 					 <option value="admin">Admin</option>
					  <option value="sales">Sales</option>
					  <option value="HR">HR</option>
				</select>
			</td>
			</tr>
			<tr>
				<td><input type="button" id="btncal" name="btncal" value="Save"></td>
				<td><input type="button" id="btnclear" name="btnclear" value="Clear"></td>
			</tr>
			<tr>
				<td><p id="m">Number Of Male : </p><p id="ma">0</p></td>
				<td><p id="f">Number Of Female : </p><p id="fe">0</p></td>
				
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
					sendobj.data4 = $("select[name='department']").val();
					console.log(sendobj);

                	$.ajax({
						method: "POST",
						url: "a_task6.php",
						data:sendobj,
						dataType:"json",
						success:function (data) {
							console.log(data);
							if(data.issuccess){
								alert("Saved");
								if(sendobj.data3 == "M"){
									$("#ma").html(parseInt($("#ma").html())+1);
								}else{
									$("#fe").html(parseInt($("#fe").html())+1);
								}
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