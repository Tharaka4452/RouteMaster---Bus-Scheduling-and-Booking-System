
<?php

include_once 'config.php';

$chname=$_POST["chname"];
$cardnumber=$_POST["cardnumber"];


$sql = "INSERT INTO payment VALUES ('$chname', '$cardnumber')";


if($con->query($sql)){
    header("location:paymentSuccess.php");
}

else{
    echo "error".$con->error;
}
$con->close();

?>