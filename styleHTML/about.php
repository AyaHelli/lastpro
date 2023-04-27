<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <title>about us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.bodyt {
  background-color:  #151719;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 40px;
 
}
.waviy {
  position: relative;
  -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
  font-size: 60px;
}
.waviy span {
  font-family: 'Alfa Slab One', cursive;
  position: relative;
  display: inline-block;
  color: #fff;
  text-transform: uppercase;
  animation: waviy 1s infinite;
  animation-delay: calc(.1s * var(--i));
  
}
@keyframes waviy {
  0%,40%,100% {
    transform: translateY(0)
  }
  20% {
    transform: translateY(-20px)
  }
}
.photos{
    margin-top: 25px;
    margin-bottom: 30px;
}
h2{
    color: #03a9f4;
}
h5{
    margin-top: 40px;
    margin-bottom: 30px;

}


    
    </style>
</head>
<body>
<?php include("../navbar.php"); ?>
    <div class="container">
    
        <div class="bodyt">
            <div class="waviy">
              <span style="--i:1">A</span>
              <span style="--i:2">B</span>
              <span style="--i:3">O</span>
              <span style="--i:4">U</span>
              <span style="--i:5">T</span>
              <span style="--i:6">  </span>
              <span style="--i:6">U</span>
              <span style="--i:6">s</span>
             </div>
            </div>
            <div class="row row-cols-3 photos">
                <img src="../pictures/AboutUs-Impact.png" alt="" width="150px">
                <img src="../pictures/AboutUs-Adoptions (3).png" alt="" width="150px">
                <img src="../pictures/AboutUs-AWOs.png" alt="" width="150px">
            </div>
            <h2>Welcome to Adopt a Pet. We're all about <br> getting homeless pets into homes.</h2>
            <article>
                <h5>
                We help over 15,000 animal shelters, humane societies, SPCAs, pet rescue groups, <br> and pet adoption agencies advertise their homeless pets to millions of adopters a month, all for free.<br>  And now, we're a Kinship company too. Haven't heard of them yet? They're a coalition of brands <br> , teams, and partners, all using their individual strengths to help bring more care to pet care.</h5>
            </article>
            <h2>We're here for you.</h2>
            <article> <h5>Our collective mission is to connect prospective pet parents with the pet that's right for them. But we don't stop there - through our sister brands at Kinship, we also provide useful information and a wealth of resources to help adopters succeed on their new pet parent journey. Check out The Wildest for articles on everything to help you ace it for your animal - from pet parent to-dos to product reviews to training tips. Head on over to GoodFriend to easily find and book veterinarians, trainers, and groomers near you!</h5></article>

        
            
    </div>
    
    
    
    
    <?php include("../footer.php"); ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>