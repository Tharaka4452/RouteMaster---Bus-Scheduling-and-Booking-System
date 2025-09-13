<?php

include_once 'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


if(empty($name)||empty($email)||empty($message))
{
    echo "All Required";
}

$sql = "INSERT INTO contactus VALUES ('$name', '$email', '$message')";


if($con->query($sql)){
    echo "suceesful";
}

else{
    echo "error".$con->error;
}
$con->close();

?>