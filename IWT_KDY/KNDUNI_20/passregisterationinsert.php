<?php

include_once 'config.php';

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$address = $_POST["address"];
$phoneno = $_POST["phoneno"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];


if(empty($name)||empty($username)||empty($email)||empty($address)||empty($phoneno)||empty($password)||empty($confirmpassword))
{
    echo "All Required";
}

$sql = "INSERT INTO passenger VALUES ('$name', '$username', '$email', '$address', '$phoneno', '$password', '$confirmpassword')";


if($con->query($sql)){
    echo "suceesful";
}

else{
    echo "error".$con->error;
}
$con->close();

?>