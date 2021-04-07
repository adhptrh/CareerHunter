<?php
session_start();
require "../conn.php";

$user = new User($conn);
$d = $user->selectDataById($_SESSION["id"])->fetch_assoc();

if ($d["password"] != $_POST["cpassword"])
{
    header("Location: ../editprofil?err=1");
    exit;
}

$user->id = $_SESSION["id"];
$user->username = $_POST["username"];
if (isset($_POST["gantipassword"]))
{
    $user->password = $_POST["gantipassword"];
}
else
{
    $user->password = $d["password"];
}
$user->password = $_POST["gantipassword"];
$user->email = $_POST["email"];
$user->nama = $_POST["nama"];
$user->notelp = $_POST["notelp"];
if (strlen($_FILES["foto"]["name"]))
{
    $user->uploadFoto($_FILES["foto"]);
}
else
{
    $user->foto = $d["foto"];
}
if (strlen($_FILES["resume"]["name"]))
{
    $user->uploadResume($_FILES["resume"]);
}
else
{
    $user->resume = $d["resume"];
}
$user->kelamin = $_POST["kelamin"];
$user->tentang = $_POST["tentang"];
$user->edukasi = $_POST["edukasi"];
$user->pengalamankerja = $_POST["pengalamankerja"];
$user->skill = $_POST["skill"];
$user->pengalamanorganisasi = $_POST["pengalamanorganisasi"];
$user->lahir = $_POST["lahir"];
$user->update();

var_dump($_POST);
header("Location: ../editprofil?success=1");