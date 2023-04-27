<?php
session_start();
require_once 'components/db_connect.php';


if (isset($_SESSION['adm'])) {
    header("Location: dashboard.php");
    exit;
}

if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}


$res = mysqli_query($connect, "SELECT * FROM users WHERE id=" . $_SESSION['user']);
$rowu = mysqli_fetch_array($res, MYSQLI_ASSOC);



$sql = "SELECT * FROM pets  WHERE status = 'avalible'";
$result = mysqli_query($connect, $sql);
$tbody = ''; 
if (mysqli_num_rows($result)   > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
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
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}


mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $rowu['first_name']; ?></title>
    <?php require_once 'components/boot.php' ?>
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
    <div class="container-fluid m-0 p-0 text-center">
    <?php include('navbar.php'); ?>
        <div class="hero p-4 mb-3">
            <div class ="row">
                <div class ="col-8">
                    <div class="d-flex justify-content-start">
                    <img class="userImage rounded-circle" src="pictures/<?php echo $rowu['picture']; ?>" alt="<?php echo $rowu['first_name']; ?>">
                    <h2 class="text-white mt-4 d-flex align-items-center welcome"><strong class = "text">&nbsp; Welcome back, 
                        <?php echo $rowu['first_name'] . " " . $rowu['last_name']; ?></strong> </h2>
                        </div>

                        <div class="d-flex justify-content-center heroImage">
                        <img src="./pictures/dog-1728494__480.webp" alt="" width="250px" height="250px">

                        <h4 class="d-flex align-items-center text-dark query">You can’t change a pet’s past, but you can rewrite the future. </h4>
                        </div>
                </div>
                <div class ="col-4">
                    <a href="logout.php?logout" class="btn btn-dark">Sign Out</a>
                    <a href="update.php?id=<?php echo $_SESSION['user'] ?>" class="btn btn-dark">Update your profile</a>

                    <form action="searchbar.php" method="post">
                    <input type="text" name="search" placeholder="Search..." style="margin-top: 5px;">
                    <button class="btn btn-dark" type="submit">Search</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex">
    <div class="col-auto m-4">
    <a href="senior.php?id=<?php echo $_SESSION['user'] ?>" class="btn btn-dark">Sort Age</a>
    </div>
    <div class="dropdown col-auto m-4">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Sort Vaccinated
        </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="sort.php">All</a></li>
                <li><a class="dropdown-item" href="sort.php?vaccinated=Yes">Vaccinated</a></li>
                <li><a class="dropdown-item" href="sort.php?vaccinated=No">Not Vaccinated</a></li>
            </ul>
        </div>
        <div class="dropdown col-auto m-4">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Sort Size
            </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="sort1.php">All Size</a></li>
                    <li><a class="dropdown-item" href="sort1.php?siz=S">small</a></li>
                    <li><button name="btn_medium"> <a class="dropdown-item" href="sort1.php?siz=M">medium</a></button></li>
                    <li><a class="dropdown-item" href="sort1.php?siz=L">big</a></li>
                </ul>
            </div>
        </div>
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