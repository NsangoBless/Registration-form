<?php
include "config/database.php";

if($_SERVER['REQUEST_METHOD'] !== "POST"){
    redirect(path: "index.php", query:["error" => "invalidrequest"]);
}
else{
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $matricule = $_POST['Matricule'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $dob = $_POST['DOB'];
    $department = $_POST['Department'];
    $gender = $_POST['Gender'];

    $query = "INSERT INTO registration(Fname, Lname, Matricule, Address, Phone, DOB, Department, Gender) 
                VALUES('$fname' , '$lname', '$matricule', ' $address', '$phone', '$dob', '$department', '$gender')";
    $result = mysqli_query($connection, $query);

if($result == true){
    // redirect to page
}
}

?>