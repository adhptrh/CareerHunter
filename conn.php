<?php

require "classes.php";

$conn = new mysqli("localhost", "root", "","careerhunter");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}