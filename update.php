<?php


$con = mysqli_connect("localhost", "root", "", "my_fast_database");

if (mysqli_connect_errno()){
  echo "Connection Faild <br> " . mysqli_connect_error();
  } else {
  echo "Database Connected  ";
  }



$name = $_GET['status_text'];
$id = $_GET['id'];

$sql ="UPDATE status SET status_text= '$name' WHERE id= '$id'";

$result = mysqli_query($con,$sql);

if ($result) {
  echo "Insert Data";
  } else {
  echo "Query Error";
  }




?>
