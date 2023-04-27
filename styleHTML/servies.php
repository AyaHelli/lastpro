<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Servies</title>

    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
		}
		h1 {
			font-size: 36px;
			margin-top: 50px;
			margin-bottom: 20px;
			text-align: center;
			text-transform: uppercase;
		}
		h2 {
			font-size: 30px;
			margin-top: 50px;
			margin-bottom: 20px;
		}
		p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 20px;
		}
		ul {
			list-style: disc;
			margin-left: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<?php include("../navbar.php"); ?>

	<div class="container">
		<h1>Pet Adoption Center</h1>
		<h2>Our Services</h2>
		<p>At Pet Adoption Center, we offer a range of services to help you care for your furry friends:</p>
		<ul>
			<li>Vaccinations</li>
			<li>Spaying and neutering</li>
			<li>Microchipping</li>
			<li>Dental care</li>
			<li>Behavioral training</li>
			<li>Grooming</li>
		</ul>
		<p>Contact us today to schedule an appointment for any of these services.</p>
	</div>

<?php include("../footer.php"); ?>
</body>
</html>