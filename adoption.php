<?php
session_start();


if (isset($_SESSION['adm'])) {
    header("Location: dashboard.php");
    exit;
}

if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

require_once "components/db_connect.php";

$res = mysqli_query($connect, "SELECT * FROM users WHERE id=" . $_SESSION['user']);
$rowu = mysqli_fetch_array($res, MYSQLI_ASSOC);

$result4 = mysqli_query($connect, "SELECT * FROM pets WHERE pet_id =" . $_GET['id']);
$row = mysqli_fetch_array($result4, MYSQLI_ASSOC);

if (isset($_POST["submit"])) {
    $pet_id = $_GET["id"];
    $users_id = $_SESSION["user"];
    $date_adop = $_POST["date_adop"];

    $sql = "INSERT INTO adoption (date_adop, fk_pet_id,  fk_users_id) VALUES ('$date_adop', '$pet_id', '$users_id')";
    $sql2 = "UPDATE pets set status = 'Adopted' WHERE pet_id = $pet_id";
    $result2 = mysqli_query($connect, $sql2);
    $result = mysqli_query($connect, $sql);
    if ($result && $result2) {
        echo "Success";
        mysqli_close($connect);
        header("refresh:3; url= home.php");
    } else {
        echo "Error";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adoption- <?php echo $rowu['first_name']; ?></title>
        <?php require_once 'components/boot.php' ?>

        <style>
        .userImage {
            width: 200px;
            height: 200px;
        }

        .hero {
            background: linear-gradient(to left, #333, #333 50%, #eee 75%, #333 75%);
    }
        </style>
    </head>
</head>

<body>
<div class="container-fluid m-0 p-0 text-center">
    <div class="hero p-4 mb-3">
        <img class="userImage rounded-circle" src="pictures/<?php echo $rowu['picture']; ?>" alt="<?php echo $rowu['first_name']; ?>">
        <h2 class="text-white mt-4"><strong class = "text-light">&nbsp; Thank you for your interest , 
            <?php echo $rowu['first_name'] . " " . $rowu['last_name']; ?></strong> </h2>
            <a href="home.php?home" class="btn btn-light m-5 p-3">Home</a> 
    </div>
</div>

<div class="container mt-3">
    <h1>Adoption</h1><br>
        <form method="POST">
            <img src="pictures/<?php echo $row['picture']; ?>" class="img-thumbnail w-50" style="height: 250px;">
                <h5 class="card-title"><?php echo 'Name : ' .  $row['name']; ?></h5>
                <p class="card-text"><?php echo '<p class = "fw-bold">Description:</p>' .  $row['dis']; ?></p>
                <p class="card-text"><?php echo '<p class = "fw-bold">Size:</p>' .  $row['siz']; ?></p>
                <p class="card-text"><?php echo '<p class = "fw-bold">Age:</p>' .  $row['age']; ?></p>
                <h4>Adopt date start</h4><br>
                <input type="date" name="date_adop">
                <input class="btn btn-dark m-5 p-3" type="submit" name="submit">   
        </form>
</div>

</body>

</html>