<?php
require 'config.php';

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
else{
    $sql="UPDATE drivers SET DriverName='$DriverName',UserName='$UserName',Email='$Email',DoB='$DoB',PhoneNo='$PhoneNo',LicenseExpireDate='$LicenseExpireDate',password='$password' WHERE LicenseNo ='$LicenseNo '";
}
if($conn->query($sql)){
    echo "Updated";
}

else{
    echo "Not Updated";
}
$conn->close();

<?php
    require('./config.php');
    $License_Number = $_GET['License_Number'];

    $query = "DELETE FROM driver WHERE License_Number='$License_Number'";
    $res = mysqli_query($con,$query);

    if($res){
        header('Location:./drivermanagement.php');
    }else{
        echo "Cannot delete..";
    }
?>