<?php
$email = $_POST['email'];
$password = $_POST['pass'];
$hasil=1;

if($email == "putridelta0812@gmail.com" && $password == "1234"){
    session_start();

    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";

    header("location: ../listingproduk.php");
    exit();
}else{
    header("location: ../login.php");
    exit();
}

?>
