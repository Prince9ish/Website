<?php

	session_start();
	$Weight = $_SESSION['BMI']['W'];
	$Height = $_SESSION['BMI']['H'];
	$BMI = $_SESSION['BMI']['B'];
	$Class;
	$Color;
	$H1 = "Not";
	$H2 = "Not";
	$H3 = "Not";
	$H4 = "Not";
	$H5 = "Not";
	$H6 = "Not";

	if($BMI <= 18.5){
		$Class = "Underweight";
		$Color = "#FEF041";
		$H1 = "H";
	}elseif($BMI <= 24.99){
		$Class = "Normal Weight";
		$Color = "#6EFE34";
		$H2 = "H";
	}elseif($BMI <= 29.99){
		$Class = "Overweight";
		$Color = "#FEAE34";
		$H3 = "H";
	}elseif($BMI <= 34.99){
		$Class = "Obesity (Class 1)";
		$Color = "#FE7D34";
		$H4 = "H";
	}elseif($BMI <= 39.99){
		$Class = "Obesity (Class 2)";
		$Color = "#FE5C34";
		$H5 = "H";
	}else{
		$Class = "Morbid Obesity";
		$Color = "#FE4334";
		$H6 = "H";
	}

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

		<div class="bar">Body Mass Index</div>
		<div class="Info">
			<div class="inner">
				<div>Result</div>
			</div>
		</div>

		<div class="inner">
			<div class="body">
				<div class="text">a weight-to-height ratio, calculated by dividing one's weight in kilograms by the square of one's height in meters and used as an indicator of obesity and underweight.</div>

				<div class="text">Weight : <br/><?= $Weight ?> Kilograms </div>
				<div class="text">Height : <br/><?= $Height ?> Meters </div>
				<div class="text">BMI : <br/><?= $BMI ?> Kilograms/Meter Squared </div>
				<div class="text" style="color: <?=$Color ?>;">Classification : <br/><?= $Class ?></div>
				<div class="Divide"></div>

				<table width="960">
					<tr>
						<th>Body Mass Index</th>
						<th>Classification</th>
					</tr>

					<tr>
						<td class="<?=$H1?>">18.5 or less</td>
						<td class="<?=$H1?>">Underweight</td>
					</tr>

					<tr>
						<td class="<?=$H2?>">18.5 to 24.99</td>
						<td class="<?=$H2?>">Normal Weight</td>
					</tr>

					<tr>
						<td class="<?=$H3?>">25 to 29.99</td>
						<td class="<?=$H3?>">Overweight</td>
					</tr>


					<tr>
						<td class="<?=$H4?>">30 to 34.99</td>
						<td class="<?=$H4?>">Obesity (Class 1)</td>
					</tr>

					<tr>
						<td class="<?=$H5?>">35 to 39.99</td>
						<td class="<?=$H5?>">Obesity (Class 2)</td>
					</tr>

					<tr>
						<td class="<?=$H6?>">40 or greater</td>
						<td class="<?=$H6?>" >Morbid Obesity</td>
					</tr>


				</table>
				<div class="fb-comments" data-href="http://www.prince9ish/BMI.php" data-width="960" data-numposts="4"></div>

				<a href="BMI.php">Back</a>

			</div>
		</div>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	</body>
</html>