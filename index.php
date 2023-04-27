<?php
session_start();
require_once 'components/db_connect.php';

// it will never let you open index (login) page if session is set
if (isset($_SESSION['user']) != "") {
    header("Location: home.php");
    exit;
}
if (isset($_SESSION['adm']) != "") {
    header("Location: dashboard.php"); // redirects to home.php
}

$error = false;
$email = $password = $emailError = $passError = '';

if (isset($_POST['btn-login'])) {

    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    if (empty($email)) {
        $error = true;
        $emailError = "Please enter your email address.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }

    if (empty($pass)) {
        $error = true;
        $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

        $password = hash('sha256', $pass); // password hashing

        $sql =  "SELECT `id`, `first_name`,  `password`, `status` FROM `users` WHERE  email = '$email'";
      
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if ($count == 1 && $row['password'] == $password) {
            if ($row['status'] == 'adm') {
                $_SESSION['adm'] = $row['id'];
                header("Location: dashboard.php");
            } else {
                $_SESSION['user'] = $row['id'];
                header("Location: home.php");
            }
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }
    }
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration System</title>
    <link rel="stylesheet" href="style.css">
    <?php require_once 'components/boot.php' ?>
</head>

<body class="body_style">
    <div class="container justify-content-center">
        <div class=" justify-content-center text-center text-dark">
            <form class="col-6 form formses" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                <h2 class="txt">Sign In</h2>
                <?php
                if (isset($errMSG)) {
                    echo $errMSG;
                }
                ?>
    
                <input type="email" autocomplete="off" name="email" class="form-control mb-3" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                <span class="text-danger"><?php echo $emailError; ?></span>
                <div class="nsl"></div>
    
                <input type="password" name="pass" class="form-control mb-3" placeholder="Your Password" maxlength="15" />
                <span class="text-danger"><?php echo $passError; ?></span>
                <div class="nsl"></div>
                
                <button class="btn btn-block btn-danger text-light mt-4" type="submit" name="btn-login">Sign In</button>
                
                <a class="btn btn-block btn-secondary mt-4" href="register.php">New User? Sign Up</a>
            </form>

        </div>
    </div>


</body>
</html>