<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "rekapitulasi_nilai";
    private $conn;

    public function connection()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$this->conn) {
            die("Koneksi Database Gagal" . mysqli_connect_error());
        }
        return $this->conn;
    }
}

$db = new DataBase();