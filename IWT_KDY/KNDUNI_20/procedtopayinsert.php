<?php

include_once 'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$nic = $_POST["nic"];
$phoneno = $_POST["phoneno"];
$seatno = $_POST["seatno"];
$bdate=$_POST["bdate"];


if(empty($name)||empty($email)||empty($nic)||empty($phoneno)||empty($seatno)||empty($bdate)||empty($busname))
{
    echo "All Required";
}

$sql = "INSERT INTO booking VALUES ('$name', '$email', '$nic', '$phoneno', '$seatno' , '$bdate','busname')";


if($con->query($sql)){
    echo "suceesful";
    header( "Location:payment.php");
}

else{
    echo "error".$con->error;
}
$con->close();

?>