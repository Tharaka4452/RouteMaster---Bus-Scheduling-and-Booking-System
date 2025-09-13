<?php

include_once 'config.php';

if(isset($_POST['Login'])){
    $User_name = $_POST["User_name"];
    $Password = $_POST["Password"];

    $sql="SELECT * from passenger WHERE User_name='$User_name' AND Password = '$Password' ";
    $result= mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count =mysqli_num_rows($result);

    if($count==1){
        echo"Login successful!";
    }
    else{
        header("location: login.php?errore=Incorrect User_name or Password.");
        exit();
    }

    
if ($con->query($sql)) {
   
    echo "Insert successful!";
} else {
    echo "Error! " . $con->error;
}
}

$con->close();

?>