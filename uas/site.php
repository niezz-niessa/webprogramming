<?php
include 'header.php';
?>
<div class="container mt-4">
<div class="row">
    <div class="col-md-12">
        <h2>User Configuration</h2>
        <form action="update_user.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Klinik</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Klinik</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon Klinik</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $telepon; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam_buka" class="form-label">Jam Buka</label>
                <input type="text" class="form-control" id="jam_buka" name="jam_buka" value="<?php echo $jam_buka; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam_tutup" class="form-label">Jam Tutup</label>
                <input type="text" class="form-control" id="jam_tutup" name="jam_tutup" value="<?php echo $jam_tutup; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>