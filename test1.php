<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<div id"divtest">Test</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$("#divtest").html("Hello jQuery !");

				$.ajax({
					method: "POST",
					url: "a_test1.php",
					data:{},
					dataType:"json",
					success:function (data) {
						alert("OK AJAX !! " + data.name + " Count : " + Object.keys(data).length);
					},
					error:function() {
						alert("Has Error !!");
					}
				});
		});
		</script>

	</body>

</html>