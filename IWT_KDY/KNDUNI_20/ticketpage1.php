
<?php
        require 'config.php';

        $sql = "SELECT start, end, date, ticketid FROM currentbooking";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-bordered">';
            echo '<tr>';
            echo '<th></th>';
            echo '<th></th>';
            echo '<th></th>';
            echo '<th></th>';
            echo '</tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['start'] . '</td>';
                echo '<td>' . $row['end'] . '</td>';
                echo '<td>' . $row['date'] . '</td>';
                echo '<td>' . $row['ticketid'] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No results found.';
        }
        $con->close();
 ?>