<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum6";


// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);


// Memeriksa koneksi
if ($conn->connect_error) {
   die("Koneksi gagal: " . $conn->connect_error);
} else {
   echo "Koneksi berhasil ke database $dbname";
}
