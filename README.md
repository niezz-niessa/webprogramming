# Praktikum Pemrograman Web - Portofolio Digital.
By Annisya; NIM 202312060

Repositori ini berisi hasil praktikum dan tugas dari mata kuliah Pemrograman Web, mencakup dasar-dasar pengembangan web mulai dari struktur halaman, styling, interaktivitas, pengembangan server-side dengan database, hingga sistem kontrol versi.

---

### **Modul 1: HTML Dasar**
Modul ini memperkenalkan **HTML (HyperText Markup Language)**, bahasa markup standar untuk membuat dan menyusun halaman web [1]. HTML **bukan bahasa pemrograman** karena tidak memiliki logika seperti kondisi atau perulangan [1]. Peran utamanya adalah mendefinisikan **struktur konten** (teks, gambar, tabel, formulir) menggunakan **tag** [1, 2]. Dibahas pula struktur dasar dokumen HTML (`<!DOCTYPE html>`, `<html>`, `<head>`, `<body>`) [3] dan elemen-elemen penting seperti `<h1>`-`<h6>`, `<p>`, `<a>`, `<img>`, `<ul>`, `<ol>`, `<table>`, `<form>`, `<input>`, `<video>`, dan `<audio>` [4-8]. HTML5 memperkenalkan elemen **semantik** (`<header>`, `<article>`, `<nav>`) dan **API canggih** [9].

### **Modul 2: Pengenalan CSS**
Modul ini membahas **CSS (Cascading Style Sheets)**, bahasa untuk mengatur **tampilan dan layout** halaman web [10]. Pentingnya CSS terletak pada **pemisahan konten (HTML) dari desain**, meningkatkan efisiensi, memastikan konsistensi, dan memungkinkan **responsivitas** di berbagai ukuran layar [11, 12]. CSS dapat disisipkan secara **inline**, **internal** (`<style>`), atau **eksternal** (file `.css` terpisah) [13]. Sintaks CSS terdiri dari **selector** (elemen, kelas `.`, ID `#`) dan **deklarasi** (properti: nilai) [13, 14]. Konsep **CSS Box Model** (content, padding, border, margin) juga dijelaskan [15, 16]. Untuk layout kompleks, dikenalkan **Flexbox** (satu dimensi) [17] dan **CSS Grid** (dua dimensi) [18]. **Desain responsif** dicapai dengan **media queries** dan unit relatif [19].

### **Modul 3: Bootstrap**
Modul ini memperkenalkan **Bootstrap**, sebuah **framework CSS open-source** yang sangat populer untuk membangun website dan aplikasi web yang **responsif** [20]. **Bootstrap 5**, versi terbaru, menawarkan **kelas-kelas CSS siap pakai**, sistem **grid fleksibel** (12 kolom) [21, 22], berbagai **komponen UI** (button, navbar, card, modal, pagination) [21, 23-27], serta kelas utilitas untuk styling cepat [21, 28]. Integrasinya mudah dilakukan menggunakan **CDN (Content Delivery Network)** [21]. Bootstrap tidak lagi bergantung pada jQuery, membuatnya lebih ringan dan modern [21].

### **Modul 4: JavaScript**
Modul ini mempelajari **JavaScript**, bahasa pemrograman yang membuat halaman web **dinamis dan interaktif** [29]. JavaScript memungkinkan manipulasi konten HTML dan gaya CSS secara langsung di browser tanpa reload halaman [29, 30]. Konsep utamanya meliputi:
*   **Manipulasi DOM (Document Object Model)**: Berinteraksi dengan elemen HTML sebagai objek (e.g., `document.getElementById()`, `.innerHTML`, `.style`) [30].
*   **Event Handling**: Merespons aksi pengguna (e.g., `onclick`, `onmouseover`) [31].
*   **Logika Pemrograman**: Menggunakan **percabangan (if-else)** [32] dan **perulangan (for)** [33] untuk membuat keputusan dan mengolah data.
*   **Validasi Form Sederhana** [34].
*   **Objek Bawaan (Built-in Objects)**: Memanipulasi data menggunakan **Array** (misalnya untuk To-Do List) [35], **String** (e.g., `.toUpperCase()`, `.length`) [36], **Math** (e.g., `Math.random()`, `Math.floor()`) [37], dan **Date** (untuk jam dinamis) [38].
*   Aplikasi praktis seperti **image slideshow** juga dibahas [39].

### **Modul 5: Dasar-dasar PHP**
Modul ini memperkenalkan **PHP (Hypertext Preprocessor)**, sebuah **bahasa skrip server-side open-source** yang dirancang untuk pengembangan web [40, 41]. Skrip PHP dieksekusi di server dan hasilnya dikirim sebagai HTML ke browser [40]. PHP digunakan untuk membuat **halaman web dinamis**, mengelola file, mengumpulkan data dari form, dan berinteraksi dengan database [41]. Untuk menjalankannya di lokal, dibutuhkan lingkungan server seperti **XAMPP atau Laragon** [42]. Dibahas pula sintaks dasar (tag `<?php ?>`, `echo`, `;`, komentar) [42, 43], **variabel** (`$`) dan **tipe data** [44, 45], fungsi string dan matematika [46, 47], konstanta [48], operator [49], **struktur kontrol** (`if...elseif...else`, `switch`, `for`, `while`, `foreach`) [50-52], fungsi kustom [53], **array** (indexed dan associative) [54], serta **Superglobals** seperti `$_POST` dan `$_GET` untuk mengambil data form [55]. Penggunaan `htmlspecialchars()` untuk mencegah serangan XSS sederhana juga diperkenalkan [56].

### **Modul 6: Pemrograman Web dengan PHP dan MySQL**
Modul ini berfokus pada pembangunan aplikasi web dinamis dengan menghubungkan **PHP dan MySQL**, sebuah sistem manajemen basis data relasional (RDBMS) populer [57]. Lingkungan pengembangan **Laragon** (mengintegrasikan Apache, MySQL, PHP, dan phpMyAdmin) digunakan untuk setup lokal yang mudah [58, 59]. PHP files harus diakses melalui server web (`http://localhost/`) [60]. Pembelajaran utama modul ini adalah implementasi **CRUD (Create, Read, Update, Delete)** untuk memanipulasi data di database:
*   **Read**: Menampilkan data dari tabel menggunakan `SELECT` query dan `while` loop [61].
*   **Create**: Menambahkan data baru melalui form HTML dan `INSERT` query [62, 63].
*   **Update**: Mengubah data yang sudah ada menggunakan form yang terisi otomatis dan `UPDATE` query [64, 65].
*   **Delete**: Menghapus data menggunakan `DELETE` query [66].
Koneksi ke database dilakukan menggunakan ekstensi `mysqli` [67].

### **Modul 7: Git & GitHub**
Modul ini menjelaskan perbedaan antara **Git** dan **GitHub** [68]. **Git** adalah **Distributed Version Control System (DVCS)** yang berjalan di komputer lokal untuk melacak setiap perubahan file proyek, memungkinkan "penyimpanan" versi (commit) dan kembali ke versi sebelumnya [68]. **GitHub** adalah **platform berbasis web** yang menyediakan layanan hosting untuk repositori Git, berfungsi sebagai backup, platform berbagi kode, dan alat kolaborasi tim [69].

Alur kerja dasar Git meliputi **Working Directory**, **Staging Area (Index)**, dan **Local Repository** [70]. Perintah utama yang dipelajari adalah `git init` (inisialisasi repositori) [71], `git status` (memeriksa status) [72], `git add` (menambahkan ke staging area) [72], dan `git commit` (menyimpan perubahan ke repositori lokal) [73]. Konsep **branching (percabangan)** sangat ditekankan untuk mengisolasi pekerjaan (`git branch`, `git checkout`) [74, 75]. Modul ini juga mengajarkan cara menghubungkan repositori lokal ke remote di GitHub (`git remote add origin`) [76] dan mengunggah perubahan (`git push`) [77]. Penting untuk **tidak melakukan push langsung ke branch `main`** dalam proyek tim dan sebaliknya menggunakan **Pull Requests** untuk peninjauan kode [78].

---
_Folder-folder modul akan diatur di dalam repositori ini sesuai dengan penugasan._
