<?php
require 'config.php';

//feedback
$S1name = $_POST["Sname"];
$S1email = $_POST["Semail"];
$S1phone = $_POST["Sphone"];
$S1comment = $_POST["Scomment"];

$sql = "INSERT INTO feedback (Name, Email, PhoneNo, Comment) VALUES ('$S1name', '$S1email', '$S1phone', '$S1comment')";

if ($con->query($sql)) {
    $feedback_id = $con->insert_id; // Get the auto-generated feedback ID
    echo "Insert successful! Feedback ID: $feedback_id";
} else {
    echo "Error! " . $con->error;
}
$con->close();

?>

