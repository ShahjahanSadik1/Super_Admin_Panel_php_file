<?php

$con = mysqli_connect("localhost","root","","my_fast_database");
   
$name    = $_GET['n'];

    

if (mysqli_connect_errno()){
echo "Connection Faild <br> " . mysqli_connect_error();
} else {
echo "Database Connected  ";
}

$sql = "INSERT INTO status (status_text) VALUES( '$name') ";

$result =  mysqli_query($con, $sql);

if ($result) {
echo "Insert Data";
} else {
echo "Query Error";
} 





?>