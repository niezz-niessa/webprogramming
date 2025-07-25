-- Create database
CREATE DATABASE medical_checkup_klinik_niessa;

-- Use the database
USE medical_checkup_klinik_niessa;

-- Table: master_config
CREATE TABLE master_config (
    id INT AUTO_INCREMENT PRIMARY KEY,
    config_key VARCHAR(100) NOT NULL,
    config_value TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table: master_paket
CREATE TABLE master_paket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_paket VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table: pasien
CREATE TABLE pasien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT,
    tanggal_lahir DATE,
    jenis_kelamin ENUM('L', 'P'),
    no_telepon VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table: kunjungan
CREATE TABLE kunjungan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pasien_id INT NOT NULL,
    tanggal_kunjungan DATE NOT NULL,
    keluhan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (pasien_id) REFERENCES pasien(id)
);

-- Table: transaksi
CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kunjungan_id INT NOT NULL,
    paket_id INT NOT NULL,
    total_bayar DECIMAL(10, 2) NOT NULL,
    tanggal_transaksi DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kunjungan_id) REFERENCES kunjungan(id),
    FOREIGN KEY (paket_id) REFERENCES master_paket(id)
);

-- Table: hasil_pemeriksaan_dokter
CREATE TABLE hasil_pemeriksaan_dokter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kunjungan_id INT NOT NULL,
    diagnosa TEXT,
    rekomendasi TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kunjungan_id) REFERENCES kunjungan(id)
);

-- Table: hasil_pemeriksaan_ecg
CREATE TABLE hasil_pemeriksaan_ecg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kunjungan_id INT NOT NULL,
    hasil_ecg TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kunjungan_id) REFERENCES kunjungan(id)
);

-- Table: hasil_pemeriksaan_laboratorium
CREATE TABLE hasil_pemeriksaan_laboratorium (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kunjungan_id INT NOT NULL,
    hasil_lab TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kunjungan_id) REFERENCES kunjungan(id)
);

-- Table: hasil_summary
CREATE TABLE hasil_summary (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kunjungan_id INT NOT NULL,
    summary TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (kunjungan_id) REFERENCES kunjungan(id)
);

-- Table: user_group
CREATE TABLE user_group (
    id INT AUTO_INCREMENT PRIMARY KEY,
    group_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table: users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    group_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (group_id) REFERENCES user_group(id)
);