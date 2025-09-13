<!DOCTYPE html>
<html>
<head>
    <title>Passenger managing</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <h1>Passenger managing</h1>

<?php
require 'config.php';

$sql="SELECT Name,UserName,Email,Address,PhoneNo,Password,confirmpassword FROM passenger";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo"<table border='1'>";
    echo"<tr>";
        echo"<th>"."Name"."</th>";
        echo"<th>"."UserName"."</th>";
        echo"<th>"."Email"."</th>";
        echo"<th>"."Address"."</th>";
        echo"<th>"."PhoneNo"."</th>";
        echo"<th>"."Password"."</th>";
        echo"<th>"."confirmpassword"."</th>";

    echo"</tr>";

    
    while($row=$result->fetch_assoc())
    {
        echo"<tr>";
        echo "<td>".$row["Name"]."</td> "."<td>".$row["UserName"]."</td> "."<td>".$row["Email"]." </td>"."<td>".$row["Address"]."</td> "."<td>".$row["PhoneNo"]."</td> "."<td>".$row["Password"]." </td>"."<td>".$row["confirmpassword"]."</td>";
        echo"</tr>";

    }
    echo"</table>";
}
else{
    echo "no results";}

    $con->close();
    ?>

</body>
</html>
