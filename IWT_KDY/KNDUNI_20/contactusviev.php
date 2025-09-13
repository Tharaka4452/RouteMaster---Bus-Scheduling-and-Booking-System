<?php
require 'config.php';

$sql="SELECT name,email,massage FROM contactus";

$result=$conn->query($sql);

if($result->num_rows>0)
{
    echo"<table border='1'>";

    echo"<tr>";
        echo"<th>"."name"."</th>";
        echo"<th>"."email"."</th>";
        echo"<th>"."massage"."</th>";

    echo"</tr>";

    while($row=$result->fetch_assoc())
    {
        echo"<tr>";
        echo "<td>".$row["name"]."</td> "."<td>".$row["email"]."</td> "."<td>".$row["massage"]." </td>";
        echo"<tr>";

    }
    echo"</table>";
}
else{
    echo "no results";}

    $conn->close();
    ?>