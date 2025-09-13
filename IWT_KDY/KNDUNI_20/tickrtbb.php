<?php
require 'config.php';

$sql = "SELECT Ticketid, Routid, date, seatno, startingtime, nooftikes, ticketholdernname, busno, pickup, dropat FROM booking";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>Ticket ID</th>
            <th>Route ID</th>
            <th>Date</th>
            <th>Seat No</th>
            <th>Starting Time</th>
            <th>No of Tickets</th>
            <th>Ticket Holder Name</th>
            <th>Bus No</th>
            <th>Pickup</th>
            <th>Drop At</th>
            <th>Action</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["Ticketid"]."</td>"."<td>".$row["Routid"]."</td>"."<td>".$row["date"]."</td>"."<td>".$row["seatno"]."</td>"."<td>".$row["startingtime"]."</td>"."<td>".$row["nooftikes"]."</td>"."<td>".$row["ticketholdernname"]."</td>"."<td>".$row["busno"]."</td>"."<td>".$row["pickup"]."</td>"."<td>".$row["dropat"]."</td>";
       
        echo "<td><form method='post' action='cancel_ticket.php'><input type='hidden' name='ticket_id' value='".$row["Ticketid"]."'><input type='submit' value='Cancel Ticket'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}

$con->close();
?>