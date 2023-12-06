<?php
$servername = 'localhost:8080';
$username = 'root@localhost';
$password = '';
$dbname = 'reporting_system';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>