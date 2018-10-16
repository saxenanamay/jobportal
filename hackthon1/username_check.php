<?php

if(isset($_POST['roll_no']))
{
    // include Database connection file
    include("../db.php");

    $roll_no = mysqli_real_escape_string($db, $_POST['roll_no']);

    $query = "SELECT roll_no FROM registration WHERE roll_no = '$roll_no'";

    if(!$result = mysqli_query($db, $query))
    {
        exit(mysqli_error($db));
    }

    if(mysqli_num_rows($result) > 0)
    {
        // username is already exist

        echo '<div style="color: red;"> <b>'.$roll_no.'</b> is already Registered! </div>';
    }
    else
    {
        // username is avaialable to use.
        echo '<div style="color: green;"> <b>'.$roll_no.'</b> is avaialable! </div>';
    }
}



?>