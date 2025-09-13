<?php
require 'config.php';

//destination

$Sstart = $_POST["start"];
$Sdestination = $_POST["destination"];
$Sprice = $_POST["price"];

$sql = "INSERT INTO ticket_prices (start, destination, price) VALUES ('$Sstart', '$Sdestination', '$Sprice')";

if ($conn->query($sql)) {
    $id = $conn->insert_id; // Get the auto-generated ID
    echo "Insert successful! ID: $id";
} else {
    echo "Error! " . $con->error;
}
$conn->close();

?>
