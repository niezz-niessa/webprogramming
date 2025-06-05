<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Annisya-202312060</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 700px;
            margin: 30px auto 20px auto;
            padding: 24px 30px 20px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        img {
            display: block;
            margin: 30px auto 10px auto;
        }
        h1, h2 {
            text-align: center;
            color: #2c3e50;
        }
        p, ul, ol {
            max-width: 600px;
            margin: 10px auto;
            color: #333;
        }
        ul, ol {
            padding-left: 40px;
        }
        form {
            background: #fff;
            max-width: 500px;
            margin: 30px auto;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px 4px;
            vertical-align: top;
        }
        input[type="text"], input[type="tel"], textarea {
            width: 95%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        button[type="submit"] {
            background: #2980b9;
            color: #fff;
            border: none;
            padding: 10px 30px;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.2s;
        }
        button[type="submit"]:hover {
            background: #1a5a85;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="./logostitek.png" alt="Stitek Bontang" title="STITEK BONTANG" height="200">
        <h1>Hallo selamat datang di Annisya-202312060</h1>
        <p>Ini adalah halaman pertama saya di Praktikum.<br>
        Nama dan NIM saya : <strong>Annisya - 202312060.</strong><br>
        <em>Tugas ini saya buat untuk memenuhi tugas praktikum pada mata kuliah Pemrograman Web.</em></p>
    </div>

    <div class="container">
        <ul>
            <li><a href="https://www.stitek.ac.id">Website STITEK Bontang</a></li>
            <li><a href="https://www.instagram.com/stitek_bontang/">Instagram STITEK Bontang</a></li>
            <li><a href="https://www.youtube.com/@stitekbontang">Youtube STITEK Bontang</a></li>
            <li><a href="https://www.facebook.com/stitek.bontang">Facebook STITEK Bontang</a></li>
        </ul>
    </div>

    <div class="container">
        <p><u>Materi praktikum kali ini adalah :</u></p>
        <ol>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>MySQL</li>
        </ol>
    </div>

    <div class="container">
        <h2>Form Pendaftaran Mahasiswa Baru</h2>
        <form action="#" method="post">
            <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="ttl">Tempat, Tanggal Lahir:</label></td>
                <td><input type="text" id="ttl" name="ttl" placeholder="Contoh: Bontang, 01-01-2000" required></td>
            </tr>
            <tr>
                <td><label for="laki">Jenis Kelamin:</label></td>
                <td>
                <input type="radio" id="laki" name="jk" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jk" value="Perempuan">
                <label for="perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td><label for="hp">Nomor HP:</label></td>
                <td><input type="tel" id="hp" name="hp" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><textarea id="alamat" name="alamat" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                <button type="submit">Daftar</button>
                </td>
            </tr>
            </table>
        </form>
    </div>
</body>
</html>