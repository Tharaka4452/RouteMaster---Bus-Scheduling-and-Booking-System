<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bus Details</title>
<style>
  
  body{
    background-color:blue;
    background-size: cover;
    background-position: center;
    opacity: 0.8; /* Adjust opacity */

    font-family: 'poppins';
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: black;
  }

  table {
    width: 80%;
    margin-left:80px;
    border-collapse: collapse;
  }
  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>

<h2>Bus Details</h2>

<?php
include_once 'config.php';

// Check if form is submitted using POST method and 'submit' button is clicked
if (isset($_POST['submit'])) {
  $start = $_POST["start"];
  $end = $_POST["end"];
} else {
  // Handle the case where the form is not submitted yet
  // You can optionally set default values for $start and $end here (if applicable)
  $start = "";
  $end = "";
}

$sql = "SELECT * FROM bus WHERE start='$start' AND end='$end'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($result->num_rows > 0) {
  echo '<table>';
  echo '<tr>';
  echo '<th>Bus Number</th>';
  echo '<th>Start Location</th>';
  echo '<th>End Location</th>';
  echo '<th>Time</th>';
  echo '<th>Price</th>';
  echo '<th></th>';
  echo '</tr>';

  while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['busno'] . '</td>';
    echo '<td>' . $row['start'] . '</td>';
    echo '<td>' . $row['end'] . '</td>';
    echo '<td>' . $row['time'] . '</td>';
    echo '<td>' . $row['price'] . "</td>";
    echo '<td><a href="procedtopay.php"<button type="submit">Submit</button></a></td>';

    echo '</tr>';
  }
  echo '</table>';
} else {
  echo 'No results found.';
}

$con->close();
?>

</body>
</html>
