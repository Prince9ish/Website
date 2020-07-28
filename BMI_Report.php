<?php
	include("Location.php");
	$sql = "SELECT * FROM Record";
	$rs = mysqli_query($obj_con,$sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>BMI</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/BMIStyles.css">

		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">

	</head>

	<body>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
		<div class="video-background">
		    <div class="video-foreground">
		      <iframe src="https://www.youtube.com/embed/zJ7hUvU-d2Q?start=23&controls=0&showinfo=0&rel=0&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
		    </div>
  		</div>

		<div class="bar">BMI</div>
		<div class="Info">
			<div class="inner">
				<div>Body Mass Index - Report</div>
			</div>
		</div>

		<div class="inner">
			<div class="body">
				<table width="960">
					<tr>
						<th>ID</th>
						<th>Weight</th>
						<th>Height</th>
						<th>BMI</th>
						<th>Time</th>
					</tr>

					<?php while($row = mysqli_fetch_array($rs)){ ?>
						<tr>
							<td><?=$row['R_No']?></td>
							<td><?=$row['R_Weight']?></td>
							<td><?=$row['R_Height']?></td>
							<td><?=$row['R_BMI']?></td>
							<td><?=$row['R_Time']?></td>
						</tr>
					<?php }?>

			


				</table>

				<a href="BMI.php">Back</a>

			</div>
		</div>
	</body>
</html>