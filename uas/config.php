<?php
// Database configuration
$host = 'localhost';
$db_name = 'medical_checkup_klinik_niessa';
$username = 'root';
$password = '';

$nama = 'Klinik Niessa';
$alamat = 'Jl. Sehat No. 123, Bontang';
$telepon = '0856-3312-6678';
$jam_buka = '08:00 - 17:00';
$jam_tutup = '17:00';
$path = '/uas'; 


// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}