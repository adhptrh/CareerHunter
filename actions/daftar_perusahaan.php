<?php

session_start();

require "../conn.php";

if ($_POST["password"] != $_POST["cpassword"])
{
    header("Location: ../daftar_perusahaan?error=1");
    exit;
}

$user = new UserPerusahaan($conn);

$data = $user->getAll();

while ($d = $data->fetch_assoc())
{
    if ($d["username"] == $_POST["username"])
    {
        header("Location: ../daftar_perusahaan?error=2");
        exit;
    }
}

$user->username = $_POST["username"];
$user->password = $_POST["password"];
$user->email = $_POST["email"];
$user->nama = $_POST["nama"];
$user->nomor = $_POST["nomor"];
$user->nama_penanggung_jawab = $_POST["nama_penanggung_jawab"];
$user->nomor_penanggung_jawab = $_POST["nomor_penanggung_jawab"];
$user->uploadFoto($_FILES["foto"]);
$id = $user->register();

$_SESSION["id"] = $id;
$_SESSION["role"] = Role::$user_perusahaan;

header("Location: ../home");