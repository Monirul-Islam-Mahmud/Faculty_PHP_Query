<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
</head>

<body>
    <h1 style="color: brown; width: 35%; margin: auto; padding-top: 10%;">Search by Student ID</h1>
    <br>
    <div style="width: 35%; margin: auto; padding-top: 20px;">
        <form method='POST' action='delete.php'>
            
            <input type="number" name="sid" placeholder="Enter Student ID"><br><br>
            <button type="submit">Delete</button>
        </form>
    </div>
    
   
</body>
</html>





<?php


error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$con = mysqli_connect("localhost","root","", "quizproject");

$sid = $_POST['sid'];

$res = mysqli_query($con, "DELETE FROM attempt WHERE sid = '$sid'");

$show = mysqli_query($con, "SELECT * FROM attempt");
echo "All Student List: ";
while($row=mysqli_fetch_array($show)){
    echo "<br>";
    echo "<br>";
    echo $row['id'];
    echo ".  ";
    echo $row['fname'];
    echo " - ";
    echo $row['lname'];
    echo " - ";
    echo $row['sname'];
    echo " - ";
    echo $row['sid'];
    echo " - ";
    echo $row['attempt'];
    echo " - ";
    echo $row['percentage'];
    
    echo "<br>";
    

}
?>