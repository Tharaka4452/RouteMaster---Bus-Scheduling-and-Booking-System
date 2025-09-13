<!DOCTYPE html>
<html>
<head>
    <title>Feedback Table</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <h1><center>Feedback</center></h1>
<?php
require 'config.php';
   
$sql = "SELECT Name, Email, PhoneNo, Comment FROM feedback";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    echo "<table class='feedback-table'>"; // Add a class to the table for styling
    // Table headings
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Comment</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["PhoneNo"] . "</td>";
        echo "<td>" . $row["Comment"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No result!";
}
$con->close();
?>
</body>
</html>
