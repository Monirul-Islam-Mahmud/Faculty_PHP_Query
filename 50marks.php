<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$con = mysqli_connect("localhost","root","", "quizproject");
$res = mysqli_query($con, "SELECT sid, fname, lname FROM attempt WHERE percentage < 50 AND attempt=2");

echo "List of the students who got 100 marks: ";
while($row=mysqli_fetch_array($res)){
    echo "<br>";
    echo "<br>";

    echo $row['fname'];
    echo " - ";
    echo $row['lname'];
    echo " - ";
    
    echo $row['sid'];
   
    
    
    echo "<br>";
    echo "<br>";

}
?>