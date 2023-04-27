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
$rowp = mysqli_fetch_array($res, MYSQLI_ASSOC);

if (isset($_GET["siz"])) {
    $size = $_GET["siz"];



    $sql = "SELECT * FROM pets WHERE siz = '$size' ";
    $result = mysqli_query($connect, $sql);
    $body = "";
    if (mysqli_num_rows($result) == 0) {
        $body = "No results";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $body .= "
            <div class = 'col-lg-4 col-md-6 col-sm-12 p-3'>
                <div class='card' style='width: 18rem;'>
                    <img src='pictures/" . $row['picture'] . "' class='card-img-top' alt='...' style='height: 250px;'>
                        <div class='card-body shadow-lg'>
                        <h5 class='card-title'>" . $row['name'] . "</h5>
                        <p class='card-text'><span class = 'fw-bold'>Species : </span>" . $row['species'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Location : </span>" . $row['location'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Status : </span>" . $row['status'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Vaccinated : </span>" . $row['vaccinated'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Description : </span>" . $row['dis'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Breed : </span>" . $row['breed'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Size : </span>" . $row['siz'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Age : </span>" . $row['age'] . "</p>
                        <a href='adoption.php?id=" . $row['pet_id'] . "' class='btn btn-primary'>Adopt Me</a>
                    </div>
                </div>
            </div>";
        }
    }
}else {


    $sql = "SELECT * FROM pets";
    $result = mysqli_query($connect, $sql);
    $body = "";
    if (mysqli_num_rows($result) == 0) {
        $body = "No results";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $body .= "
            <div class = 'col-lg-4 col-md-6 col-sm-12 p-3'>
                <div class='card' style='width: 18rem;'>
                    <img src='pictures/" . $row['picture'] . "' class='card-img-top' alt='...' style='height: 250px;'>
                        <div class='card-body shadow-lg'>
                        <h5 class='card-title'>" . $row['name'] . "</h5>
                        <p class='card-text'><span class = 'fw-bold'>Species : </span>" . $row['species'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Location : </span>" . $row['location'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Status : </span>" . $row['status'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Vaccinated : </span>" . $row['vaccinated'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Description : </span>" . $row['dis'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Breed : </span>" . $row['breed'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Size : </span>" . $row['siz'] . "</p>
                        <p class='card-text'><span class = 'fw-bold'>Age : </span>" . $row['age'] . "</p>
                        <a href='details.php?id=" . $row['pet_id'] . "' class='btn btn-warning'>Details</a>
                        <a href='adoption.php?id=" . $row['pet_id'] . "' class='btn btn-primary'>Adopt Me</a>
                    </div>
                </div>
            </div>";
        }
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort</title>
    <?php require_once 'components/boot.php'?>
    <style>
    .userImage {
        width: 200px;
        height: 200px;
    }

    .hero {
        background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
    }
    </style>
</head>

<body>

<div class="container-fluid m-0 p-0 text-center">
<?php include('navbar.php'); ?>
        <div class="hero p-4 mb-3">
            <div class ="row row-cols-4">
                <div class ="col">
                    <img class="userImage rounded-circle" src="pictures/<?php echo $rowp['picture']; ?>" alt="<?php echo $rowp['first_name']; ?>">
                </div>
                <div class = "col">
                <h2 class="text-white mt-4"><strong class = "text-dark">&nbsp; <?php echo $rowp['first_name'] ?>,
                <p> We have all the things you need</p>
                        </strong> </h2>
                </div>
            </div>
        </div>
    </div>
<div class="container p-5">

    <div class = 'row'>
        <div class='mb-3 col-auto mr-auto'>
            <a href= "index.php"><button class='btn btn-dark'type="button" >Home</button></a>
        </div>
        <div class="dropdown col-auto">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Sort Size
            </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="sort1.php">All Size</a></li>
                    <li><a class="dropdown-item" href="sort1.php?size=s">s</a></li>
                    <li><a class="dropdown-item" href="sort1.php?siz=m">m </a></li>
                    <li><a class="dropdown-item" href="sort1.php?siz=L">L</a></li>
                    
                </ul>
            </div>
    </div>
</div>

<div class="container">
        <p class='h2'>Pets</p>
            <div class="container">
                <div class="row">
                <?= $body; ?>
                </div>
            </div>
    </div>
    <?php include('footer.php'); ?>

</body>

</html>