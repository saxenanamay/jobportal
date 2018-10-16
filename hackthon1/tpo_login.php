<?php

SESSION_START();
//database Connection
include "db.php";

if(isset($_POST) and isset($_POST['password'])){

    $email = $_POST['email'];

    $password = $_POST['password'];

    $query = "SELECT * FROM tpo where email='$email' and password='$password'";


    $result = mysqli_query($db, $query);


    $count = mysqli_num_rows($result);

    if($count == 1){


        $_SESSION['email']=$email;

        header('location:welcome_tpo.php');

    }else

    {

        echo "Invalid Username or Password";

    }
}

?>