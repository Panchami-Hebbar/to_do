<?php

$servername = "localhost";
$username = "root";
$password = ""; // No password for the root user

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$newDatabaseName = "to_do";
$sql = "CREATE DATABASE IF NOT EXISTS $newDatabaseName";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully: $newDatabaseName\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Close connection
$conn->close();
?>