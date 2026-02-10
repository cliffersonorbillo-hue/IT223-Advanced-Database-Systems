<?php
$conn = new mysqli("localhost", "root", "", "try1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
