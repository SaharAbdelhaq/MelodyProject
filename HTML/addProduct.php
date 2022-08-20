<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "melody");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}else{
//    customer_instru


    $person=$_SESSION['userID'];
    $code = $_POST['code'];//edit for ticket
    $query="INSERT INTO customer_instru (custemerID, Code) VALUES ($person, '$code')";//edit
//    $query_run = mysqli_query($connection , $query);
    if(mysqli_query($connection , $query)){
        header('Location:profile.php');
    }else{
//        header('Location:guitars.php');
        echo $query;

    }

}