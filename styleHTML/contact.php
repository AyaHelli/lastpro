<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>contact</title>
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
.HeroImage{
    min-width: 100vh;
    max-width: 100vh;
    display: block;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 50px;
  }
</style>
</head>
<body>
<?php include("../navbar.php"); ?>
    <div class="container">
   
        <div class="bodyt">
            <div class="waviy">
              <span style="--i:1">C</span>
              <span style="--i:2">O</span>
              <span style="--i:3">N</span>
              <span style="--i:4">T</span>
              <span style="--i:5">A</span>
              <span style="--i:6">C</span>
              <span style="--i:6">T</span>
              <span style="--i:6">   </span>
              <span style="--i:6">U</span>
              <span style="--i:6">S</span>
             </div>
         </div>
         <img class="HeroImage" src="../pictures/dalmatian-1020790__480.jpg" alt="" >
         <h1>First things first</h1>
         <article><h4>If you have a question about Adopt a Pet or a pet ad you see on the site,<br> <br>  you may find the answer you're looking for in the list of "Frequently Asked Questions" below. For any <br><br>  other questions or feedback, please submit a request.

            While we would love to help everybody personally, our small staff cannot possibly respond to<br> <br>  the large volume of emails and phone calls we receive on a daily basis. So before you attempt to <br> <br> contact us, please check the "Frequently Asked Questions" listed below to see they provide <br> <br> the answers you need. Thank you!</h4></article>
         
    </div>

    <?php include("../footer.php"); ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>