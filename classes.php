<?php

class PrepareQuery
{
    public $conn;
    public function prepare($query,$type, ...$params) {
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param($type, ...$params);
        return $stmt;
    }
}

class User extends PrepareQuery
{
    public 
    $id,$username,$password,$nama,$email,$notelp,
    $kelamin,$tentang,$edukasi,$pengalamankerja,
    $skill,$resume,$pengalamanorganisasi,$foto,$lahir;

    private $table = "user";

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function getAll()
    {
        $q = $this->conn->query("SELECT * FROM $this->table");
        return $q;
    }

    function selectDataById($id)
    {
        $q = $this->conn->query("SELECT * FROM $this->table WHERE id = $id");
        return $q;
    }

    function uploadFoto($foto)
    {
        $foto_path = strval(rand(0,1000000)).$foto["name"];
        move_uploaded_file($foto["tmp_name"],"../foto/foto_profil/$foto_path");
        $this->foto = $foto_path;
    }

    function uploadResume($foto)
    {
        $foto_path = strval(rand(0,1000000)).$foto["name"];
        move_uploaded_file($foto["tmp_name"],"../foto/foto_resume/$foto_path");
        $this->resume = $foto_path;
    }

    function update()
    {
        $q = $this->prepare(
            "UPDATE $this->table SET username=?,password=?,nama=?,email=?,notelp=?,kelamin=?,tentang=?,edukasi=?,pengalamankerja=?,skill=?,resume=?,pengalamanorganisasi=?,foto=?,lahir=? WHERE id = ?",
            "ssssssssssssssi",
            $this->username,$this->password,$this->nama,$this->email,$this->notelp,$this->kelamin,
            $this->tentang,$this->edukasi,$this->pengalamankerja,$this->skill,$this->resume,
            $this->pengalamanorganisasi,$this->foto,$this->lahir,$this->id

        );

        $q->execute();
    }

    function register()
    {
        $q = $this->prepare(
            "INSERT INTO $this->table (username,password,nama,email,notelp) VALUES (?,?,?,?,?)",
            "sssss",
            $this->username,$this->password,$this->nama,$this->email,$this->notelp

        );

        $q->execute();
        return $q->insert_id;
    }

    function login()
    {
        $q = $this->prepare(
            "SELECT * FROM $this->table WHERE username = ? AND password = ?",
            "ss",
            $this->username,
            $this->password
        );

        $q->execute();
        $res = $q->get_result();
        return $res;
    }
}

class UserPerusahaan extends PrepareQuery
{
    public 
    $id,$nama,$email,$nomor,$nama_penanggung_jawab,
    $nomor_penanggung_jawab,$username,$password,
    $akta_pendirian_usaha;

    private $table = "user_perusahaan";
    
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function getAll()
    {
        $q = $this->conn->query("SELECT * FROM $this->table");
        return $q;
    }

    function selectDataById($id)
    {
        $q = $this->conn->query("SELECT * FROM $this->table WHERE id = $id");
        return $q;
    }

    function login()
    {
        $q = $this->prepare(
            "SELECT * FROM $this->table WHERE username = ? AND password = ?",
            "ss",
            $this->username,
            $this->password
        );

        $q->execute();
        $res = $q->get_result();
        return $res;
    }

    function uploadFoto($foto)
    {
        $foto_path = strval(rand(0,1000000)).$foto["name"];
        move_uploaded_file($foto["tmp_name"],"../foto/akta_pendirian_usaha/$foto_path");
        $this->akta_pendirian_usaha = $foto_path;
    }

    function register()
    {
        $q = $this->prepare(
            "INSERT INTO $this->table (nama,email,nomor,nama_penanggung_jawab,nomor_penanggung_jawab,username,password,akta_pendirian_usaha) VALUES 
            (?,?,?,?,?,?,?,?)",
            "ssssssss",
            $this->nama,$this->email,$this->nomor,$this->nama_penanggung_jawab,
            $this->nomor_penanggung_jawab,$this->username,$this->password,
            $this->akta_pendirian_usaha
        );

        $q->execute();
        return $q->insert_id;
    }


}

class Admin extends PrepareQuery
{
    public 
    $id,$username,$password;

    private $table = "admin";
    
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function getAll()
    {
        $q = $this->conn->query("SELECT * FROM $this->table");
        return $q;
    }

    function selectDataById($id)
    {
        $q = $this->conn->query("SELECT * FROM $this->table WHERE id = $id");
        return $q;
    }

    function login()
    {
        $q = $this->prepare(
            "SELECT * FROM $this->table WHERE username = ? AND password = ?",
            "ss",
            $this->username,
            $this->password
        );

        $q->execute();
        $res = $q->get_result();
        return $res;
    }

    function register()
    {
        $q = $this->prepare(
            "INSERT INTO $this->table (username,password) VALUES 
            (?,?)",
            "ss",
            $this->username,$this->password
        );

        $q->execute();
        return $q->insert_id;
    }
}

class Role
{
    public static $user = "user";
    public static $user_perusahaan = "user_perusahaan";
    public static $admin = "admin";
}