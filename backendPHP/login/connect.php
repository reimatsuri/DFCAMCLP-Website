<?php

$host="localhost";
$email="root";
$password="";
$db="login";

$conn=new mysqli($host,$email,$password,$db);
if($conn->connect_error){
    die("Failed to connect DB".$conn->connect_error);   
}
?>