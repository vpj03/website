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

// Get the data from the Arduino
$sensorValue = $_POST['sensorValue'];
$bendID = $_POST['bendID'];
$sensorID = $_POST['sensorID'];

// Prepare the SQL query
$sql = "INSERT INTO sensor_data (sensorValue, bendID, sensorID, timestamp) VALUES ('$sensorValue', '$bendID', '$sensorID', NOW())";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
