<?php

include_once 'config.php';

$DriverName = $_POST["DriverName"];
$username = $_POST["username"];
$email = $_POST["email"];
$DoB = $_POST["DoB"];
$phoneno = $_POST["phoneno"];
$LicenseNo = $_POST["LicenseNo"];
$LicenseExpireDate = $_POST["LicenseExpireDate"];
$password = $_POST["password"];


if(empty($DriverName)||empty($username)||empty($email)||empty($DoB)||empty($phoneno)||empty($LicenseNo)||empty($LicenseExpireDate)||empty($password))
{
    echo "All Required";
}

$sql = "INSERT INTO drivers VALUES ('$DriverName', '$username', '$email', '$DoB', '$phoneno','$LicenseNo', '$LicenseExpireDate', '$password')";


if($con->query($sql)){
    echo "suceesful";
}

else{
    echo "error".$con->error;
}
$con->close();

?>