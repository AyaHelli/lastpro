<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../navbar.css">
	<link rel="stylesheet" href="../footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Importance Adop</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

section {
	display: flex;
	background: #000;
	min-height: 100vh;
	align-items: center;
	justify-content: center;
}
body{
    background-color: rgba(0, 0, 0, 0.451);
}

.content {
	position: relative;
}

.content h2 {
	color: #fff;
	font-size: 8em;
	position: absolute;
	transform: translate(-50%, -50%);
}

.content h2:nth-child(1) {
	color: transparent;
	-webkit-text-stroke: 2px #03a9f4;
}

.content h2:nth-child(2) {
	color: #03a9f4;
	animation: animate 4s ease-in-out infinite;
}

@keyframes animate {
	0%,
	100% {
		clip-path: polygon(
			0% 45%,
			16% 44%,
			33% 50%,
			54% 60%,
			70% 61%,
			84% 59%,
			100% 52%,
			100% 100%,
			0% 100%
		);
	}

	50% {
		clip-path: polygon(
			0% 60%,
			15% 65%,
			34% 66%,
			51% 62%,
			67% 50%,
			84% 45%,
			100% 46%,
			100% 100%,
			0% 100%
		);
	}
}
    img{
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 30px;
      margin-top: 20px;
    }
    h3{
        margin-bottom: 30px;
        color: #03a9f4;;
    }
	.BackToHome{
    background-color: #03a9f4;
    margin-bottom: 20px;
}
    

    </style>
</head>
<body>
<?php include("../navbar.php"); ?>
    <section>
        <div class="content">

            <h2 class="d-flex justify-content-center">Why do animals adopt?</h2>
            <h2 class="d-flex justify-content-center">Why do animals adopt?</h2>
        </div>
    </section>
    
    <img  src="../pictures/puppy-2785074__480.jpg" alt="" width="900px" >
    <div class="container">
    <h3>In the animal kingdom, parents adopt babies that aren’t <br> their own, and even other species, says Jason G Goldman. Why do they do it?</h3>
    <article>
       <pre> <h4>Is adopting a child a benevolent or a foolish act? If you were taking a cold <br>evolutionary perspective, it would appear to be the latter.

For foster parents, there are huge costs involved, with no <br> promise of passing on genes. Scientists have long been interested in adoption, because it seems to be wholly altruistic.<br> But this makes it especially perplexing in animals, who do not have the cultural influences we do. So could taking <br>a closer look at adoption in non-humans shed any light on why it’s so common?

One of the more striking places to see adoption in the animal kingdom is <br>Ano Nuevo Island, rising from the sea less than one kilometre off the rocky California coast. Once a year, it is host to the <br>breeding of hundreds of northern elephant seals.

From 1976 onwards, marine scientist Marianne Riedman, together with her <br>colleague Burney Le Boeuf, studied adoption among the seals – and why it was happening. It's a crowded beach, with bad weather,<br> high tides and rough surf, which perhaps explains why one-quarter to two-thirds of pups each year were <br>separated from their mothers at least once – some permanently.</h4> 
</pre> </article>
<button class="BackToHome"><a href="../home.php"></a> Back to Home</button>
</div>
<?php include("../footer.php"); ?>
</body>
</html>