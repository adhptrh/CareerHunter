<?php
require "conn.php";
session_start();
$title = "Edit Profil";
$appname = "CareerHunter";

require "checkuser.php";

require "views/head.php";

if (isset($_SESSION["id"]))
{
    if ($_SESSION["role"] == Role::$user)
    {
        require "views/editprofil/user.php";
    }
    elseif ($_SESSION["role"] == Role::$user_perusahaan)
    {
        require "views/editprofil/user_perusahaan.php";
    }
}
else
{
    header("Location: home");
}

require "views/foot.php";
?>