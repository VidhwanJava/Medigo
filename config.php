<?php
    $servername="localhost";
    $username="id4248646_usermelvin";
    $password="usermelvin";
    $dbname="id4248646_knowmelvin";
    
   
    $conn= new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
  
 // echo $_SESSION["username"];
  date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    
?>