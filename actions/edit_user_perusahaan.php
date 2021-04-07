<?php
session_start();
require "../conn.php";

$user = new UserPerusahaan($conn);
$d = $user->selectDataById($_SESSION["id"])->fetch_assoc();

if ($d["password"] != $_POST["cpassword"])
{
    header("Location: ../editprofil?err=1");
    exit;
}

$user->id = $_SESSION["id"];
$user->username = $_POST["username"];
if (strlen($_POST["gantipassword"]))
{
    $user->password = $_POST["gantipassword"];
}
else
{
    $user->password = $d["password"];
}
$user->email = $_POST["email"];
$user->nama = $_POST["nama"];
$user->nomor_penanggung_jawab = $_POST["nomor_penanggung_jawab"];
$user->nama_penanggung_jawab = $_POST["nama_penanggung_jawab"];
if (strlen($_FILES["foto"]["name"]))
{
    $user->uploadFotoProfil($_FILES["foto"]);
}
else
{
    $user->foto = $d["foto"];
}
$user->update();

var_dump($_POST);
header("Location: ../editprofil?success=1");