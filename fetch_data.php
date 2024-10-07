<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "sensor_data_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the data
$sql = "SELECT * FROM sensor_data ORDER BY timestamp DESC";
$result = $conn->query($sql);

// Output data in HTML table rows
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['bendID']}</td>
                <td>{$row['sensorID']}</td>
                <td>{$row['sensorValue']}</td>
                <td>{$row['timestamp']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No data found</td></tr>";
}

// Close connection
$conn->close();
?>
