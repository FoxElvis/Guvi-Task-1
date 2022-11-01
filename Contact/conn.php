<?php
$conn = new mysqli("localhost", "root", "", "Userdatabase");
  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>