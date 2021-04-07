<?php
require "../conn.php";
session_start();

$conn->query("UPDATE user_perusahaan SET approved = 'diterima' WHERE id = ".$_GET["id"]."");

header("Location: ../perusahaan_approval");
