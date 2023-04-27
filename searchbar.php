<?php
session_start();
require_once 'components/db_connect.php';

// Retrieve search term from form submission
$search = $_POST['search'];

// Query MySQL database for matching records
$sql = "SELECT * FROM pets WHERE species LIKE '%$search%'";
$result = $connect->query($sql);
$tbody = ''; 

// Display matching records
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $tbody .= "
    <div class = 'col-lg-4 col-md-6 col-sm-12 p-3'>
     <div>
        <div class='card' style='width: 18rem;'>
            <img  src='pictures/" . $row['picture'] . "' class='card-img-top' style='height: 250px;' alt='...'>

                <div class='card-body shadow-lg style=' background: rgba(122, 110, 110, 0.056);'>
                <h5 class='card-title'>" . $row['name'] . "</h5>
                <p class='card-text'><span class = 'fw-bold'>Status : </span>" . $row['status'] . "</p>
                <p class='card-text'><span class = 'fw-bold'>Species : </span>" . $row['species'] . "</p>
                <p class='card-text'><span class = 'fw-bold'>Breed : </span>" . $row['breed'] . "</p>
                <p class='card-text'><span class = 'fw-bold'>Size : </span>" . $row['siz'] . "</p>
                <p class='card-text'><span class = 'fw-bold'>Age : </span>" . $row['age'] . "</p>
                <a href='details.php?id=" . $row['pet_id'] . "' class='btn btn-dark'>Details</a>
                <a href='adoption.php?id=" . $row['pet_id'] . "' class='btn btn-primary'>Adopt Me</a>
            </div>
        </div>
     </div>
    </div>";
    };
} else {
  echo "No matching records found.";
}

// Close MySQL database connection
$connect->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once 'components/boot.php' ?>
  <title>Results</title>
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Ysabeau:ital,wght@1,200&display=swap');
       @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Lobster&display=swap');

    .userImage {
        width: 100px;
        height: 100px;
        
    }
    .titleP{ font-family: 'Ysabeau', sans-serif;}
    .welcome{
        font-family: 'Lobster', cursive;
        font-family: 'Ysabeau', sans-serif;
    }
  .heroImage{
    width: 80vw;
    margin-left: 8vw;
    margin-top: 5vw;
    background-color: #576CBC;
    box-shadow: white;
    border-top: black 8px inset;
    border-left: black 8px inset;
    border-radius: 12px;
    
    

  }
  .query{
    font-family: 'Dancing Script', cursive;
font-family: 'Lobster', cursive;
  }

    .hero {
        background-image: linear-gradient(to right top, #403F48, #596C68, #95A792, #aa8fd8, #9a9ae1, #8aa7ec, #18122B, #144272, #A5D7E8, #5B8FB9, #301E67, #03001C);
    }
    
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container">
        <p class='h2 titleP'>Pets</p>
            <div class="container">
                <div class="row">
                <?= $tbody; ?>
                </div>
            </div>
    </div>
  
    <?php include('footer.php'); ?>
</body>
</html>
