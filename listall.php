<?php


error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$con = mysqli_connect("localhost","root","", "quizproject");

$res = mysqli_query($con, "SELECT * FROM attempt");


while($row=mysqli_fetch_array($res)){
    echo $row['id'];
    echo ". ";
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
    echo "<br>";

}
?>