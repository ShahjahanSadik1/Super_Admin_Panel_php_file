<?php


$con = mysqli_connect("localhost","root","","my_fast_database");

$statuskey =$_GET['s'];



$sql = "SELECT * FROM status  WHERE  status_text like'%$statuskey%'";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);




$data = array();

foreach($result as $item){

    $id = $item['id'];
    $name = $item['status_text'];
   
    
    $userInfo['id'] = $id;
    $userInfo['status_text'] = $name;
   

    array_push($data,$userInfo);

    

}
echo json_encode($data);



?>