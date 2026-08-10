<?php
$host = "localhost";
$user = "nawe4193_dafakurir";
$pass = "Vz!1vQMG0VEukJ*_"; // ganti dengan yang benar
$db   = "nawe4193_kehadiran";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
