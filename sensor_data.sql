-- sensor_data.sql
CREATE DATABASE IF NOT EXISTS sensor_data_db;

USE sensor_data_db;

CREATE TABLE IF NOT EXISTS sensor_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sensorValue FLOAT NOT NULL,
    bendID INT NOT NULL,   -- Unique ID for each bend
    sensorID INT NOT NULL, -- Unique ID for each sensor within a bend
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
