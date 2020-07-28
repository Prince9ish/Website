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
				<td>Year</td>
				<td><input type="text" id="year" name="fahrenheit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" id="btncal" name="btncal" value="Calculate"></td>
			</tr>
		</table>

		<div id="divlist">
		
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$("#btncal").click(function() {

				$.ajax({
					method: "POST",
					url: "a_task2.php",
					data:{data1:$("#name").val(),data2:$("#year").val()},
					dataType:"json",
					success:function (data) {
						$('#divlist').append($('<div>', { 
                      		text : data.result
                		}));
                		$('#name').val('');
                		$('#year').val('');

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