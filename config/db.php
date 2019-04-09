<?php

$conn = new mysqli('localhost', 'root', '', 'blogger');

if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>