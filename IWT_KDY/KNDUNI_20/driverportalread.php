<!DOCTYPE html>
<html>
<head>
    <title>Driver Portal</title>
    <link rel="stylesheet" type="text/css" href="styledrvportal.css">
</head>
<body>

    <div class="container">
        <div class="div2">
            <section id="route-info">
                <h2>Route Information</h2>
                <label for="routename"><b>Route Name: Kandy-Colombo</b></label><br>
                    
                <label for="routeno"><b>Route Number: No.27</b></label><br>
                    
                <label for="routeno"><b>Stops: Colombo</b></label>
                    
            </section>
    
            <section id="bus-info">
                <h2>Bus Information</h2>
                <label for="Vehicletype"><b>Vehicle Type: Bus</b></label>
                <br>
                <label for="No.ofseats"><b>No.of seats:53</b></label>
                <br>
                <label for="VehicleNumber"><b>Vehicle Number:ND 2345</b></label>
                <br>
                <div id="bus-info-content"></div>
            </section>
        </div>

      <section id="passenger-info">
            
       <h2>Passenger Information</h2>

<?php
require 'config.php';

$sql = "SELECT pName, pID, pickupL, seatID FROM drvportal";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Passenger Name</th>';
    echo '<th>Passenger ID</th>';
    echo '<th>PickUp Location</th>';
    echo '<th>Seat Number</th>';
    echo '</tr>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['pName'] . '</td>';
        echo '<td>' . $row['pID'] . '</td>';
        echo '<td>' . $row['pickupL'] . '</td>';
        echo '<td>' . $row['seatID'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'No results found.';
}
$con->close();
?>
            
            
    </section>
        




        <section id="schedule">
            <h2>Schedule</h2>
            <table id="schedule-table">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Bus Stop</th>
                    </tr>
                </thead>
                <tbody id="schedule-table-body"></tbody>
            </table>
        </section>
    </div>

</body>
</html>
