<?php

$hostname = "localhost";
$username ="root";
$password = "";
$database = "students";

//connect database

$connection = mysqli_connect($hostname,$username,$password,$database);

//check if connection is true
if($connection == false){
    //stop everything and show error
    die("connection error" .  mysqli_error());
}