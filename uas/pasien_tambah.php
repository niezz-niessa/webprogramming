<?php
include 'header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';

    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO pasien (nama, tanggal_lahir, jenis_kelamin, no_telepon, alamat) VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$no_telepon', '$alamat')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Pasien added successfully.</div>";
        header("Location: pasien.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error adding pasien: " . mysqli_error($conn) . "</div>";
    }
}
?>
<div class="container mt-4">
    <h2>Add Pasien</h2>
    <form method="POST" action="pasien_tambah.php">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="no_telepon" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Pasien</button>
    </form>
</div>
<?php
include 'footer.php';
?>