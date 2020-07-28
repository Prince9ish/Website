<!DOCTYPE html>
<html>
	<head>
		<title>BMI</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/BMIStyles.css">

		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
		<link rel="shortcut icon" type="image/png" href="/Images/icons.png">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

		<meta property="og:title" content="Body Mass Index">
		<meta property="og:description" content="a weight-to-height ratio, calculated by dividing one's weight in kilograms by the square of one's height in meters and used as an indicator of obesity and underweight">
		<meta property="og:image" content="http://www.prince9ish.com/Images/i.jpg">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122367454-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122367454-1');
</script>



	</head>

	<body>
		

		<div class="video-background">
		    <div class="video-foreground">
		      <iframe src="https://www.youtube.com/embed/zJ7hUvU-d2Q?start=23&controls=0&showinfo=0&rel=0&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
		    </div>
  		</div>

		<div class="bar">Body Mass Index</div>
		<div class="Info">
			<div class="inner">
				<div>Calculator</div>
			</div>
		</div>

		<div class="inner">
			<div class="body">
				<div class="text">a weight-to-height ratio, calculated by dividing one's weight in kilograms by the square of one's height in meters and used as an indicator of obesity and underweight.</div>

				<form name="Form" method="POST" action="r_BMI.php">
					<div class="label">Weight - Kilogram</div>
					<input type="text" class="input" name="weight">
					<div class="label">Height - Meters</div>
					<input type="text" class="input" name="height">
					<div></div>
					<input type="submit" class="button" name="send">
				</form>
			</div>
		</div>
	</body>
</html>