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
require_once 'components/db_connect.php';

$sql = "SELECT * FROM pets WHERE pet_id =" . $_GET['id'];
$result = mysqli_query($connect, $sql);

$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $tbody .= "
        <div class = 'col-lg-4 col-md-6 col-sm-12 p-3'>
            <div class='card' style='width: 18rem;'>
            <img src=" . $row['picture'] . " class='card-img-top' alt='...'>
                    <div class='card-body shadow-lg'>
                   
                    <h5 class='card-title'>" . $row['name'] . "</h5>
                    <p class='card-text'><span class = 'fw-bold'>Location : </span>" . $row['location'] . "</p>
                    <p class='card-text'><span class = 'fw-bold'>Status : </span>" . $row['status'] . "</p>
                    <p class='card-text'><span class = 'fw-bold'>Vaccinated : </span>" . $row['vaccinated'] . "</p>
                    <p class='card-text'><span class = 'fw-bold'>Description : </span>" . $row['dis'] . "</p>
                    <p class='card-text'><span class = 'fw-bold'>Species : </span>" . $row['species'] . "</p>
                    <p class='card-text'><span class = 'fw-bold'>Breed : </span>" . $row['breed'] . "</p>
                    <p class='card-text'><span class = 'fw-bold'>Size : </span>" . $row['siz'] . "</p>
                    <p class='card-text'><span class = 'fw-bold'>Age : </span>" . $row['age'] . "</p>
                    <a href='adoption.php?id=" . $row['pet_id'] . "' class='btn btn-primary'>Adopt Me</a>
                </div>
            </div>
        </div>";
    };
}else {
    $tbody="
        <tr>
        <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    ";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php'?>
    <title>Details</title>
</head>
<body>
    <div class="container">   
        <?php  
            echo $tbody;
        ?>   
    </div>

</body>
</html>
