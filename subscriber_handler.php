<?php
    require 'config.php';
$email='';
$email_err='';
//steps
//1.grab user data from form
if (isset($_POST['btn_subscribe'])) {
//2.clean data

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_err = "Fill this field";
    }

    $sql = "INSERT INTO `subscribers`(`id`, `email`) VALUES (NULL ,'$email')";

    if (mysqli_query($conn, $sql)) {
        //6.take user to login page
        header("location:index.php?");
        exit();
    } else {
        echo "Error:" . mysqli_error($conn);
    }
}

