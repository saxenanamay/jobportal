<?php

include "db.php";
session_start();
// check the Session for the user otherwise redirect to the Login Page

$result = mysqli_query($db, "SELECT * FROM registration"); // using mysqli_query instead


    if(isset($_POST['search'])){

        $search_term=mysqli_real_escape_string($db,$_POST['search_box']);

        $result.="where email={$search_term}";    

    }
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Student</title>
    <link rel="stylesheet" href="../css/manage_student.css" type="text/css">

</head>
<body>

    <form name="search" method="post" action="manage_student.php">

        Search: <input type="text" name="search_box" value="">
        <input type="submit" name="search" value="search">
    </form>
    <br>

<table width="100%">

    <tr bgcolor="#CCCCCC">

        
        <td><b>Name</td>

        <td><b>Email Address</td>
        <td><b>roll_no</td>
        <td><b>Mobile Number</td>
        <td><b>Branch</td>
        <td><b>No of backs</td>
        <td><b>1st sem %</td>
        <td><b>2nd sem %</td>
        <td><b>3rd sem %</td>
        <td><b>4th sem %</td>
        <td><b>5th sem %</td>
        <td><b>6th sem %</td>
            <td><b>7th sem %</td>
                <td><b>8th sem %</td>

    </tr>

<?php

while($res=mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "<td>" . $res['name'] . "</td>";

    echo "<td>" . $res['email'] . "</td>";


    echo "<td>" . $res['roll_no'] . "</td>";

    echo "<td>" . $res['mobile_no'] . "</td>";

    echo "<td>" . $res['branch'] . "</td>";

    echo "<td>" . $res['backs'] . "</td>";

    echo "<td>" . $res['sem1'] . "</td>";

    echo "<td>" . $res['sem2'] . "</td>";

    echo "<td>" . $res['sem3'] . "</td>";
    echo "<td>" . $res['sem4'] . "</td>";
    echo "<td>" . $res['sem5'] . "</td>";
    echo "<td>" . $res['sem6'] . "</td>";
    echo "<td>" . $res['sem7'] . "</td>";
    echo "<td>" . $res['sem8'] . "</td>";



    

}

?>

</table>
<style type="text/css">
    tr,td{

        border: 2px solid black;

    }
    table{
        border-collapse: collapse;
    }

td{

    padding: 10px;
}


tr:hover {
    background-color: yellow;


}

</style>

</body>
</html>
