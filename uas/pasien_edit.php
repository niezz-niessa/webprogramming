<?php
include 'header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE pasien SET nama='$nama', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', no_telepon='$no_telepon', alamat='$alamat' WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Pasien updated successfully.</div>";
        header("Location: pasien.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error updating pasien: " . mysqli_error($conn) . "</div>";
    }
}
?>
<div class="container mt-4">
    <h2>Edit Pasien</h2>
    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM pasien WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $nama = $row['nama'];
    $tanggal_lahir = $row['tanggal_lahir'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $no_telepon = $row['no_telepon'];
    $alamat = $row['alamat'];
    ?>
    <form method="POST" action="pasien_edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih</option>
                <option value="Laki-laki" <?php if ($jenis_kelamin == "1") echo "selected"; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($jenis_kelamin == "2") echo "selected"; ?>>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="no_telepon" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo $no_telepon; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo $alamat; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Pasien</button>
    </form>
</div>
<?php
include 'footer.php';
?>