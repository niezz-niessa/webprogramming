<?php
include 'header.php';
?>
<div class="container mt-4">
    <h2>Pasien Management</h2>
    <a href="pasien_tambah.php" class="btn btn-success mb-3">Add Pasien</a>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>DOB</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $query = "SELECT * FROM pasien";
                $result = mysqli_query($conn, $query);
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['tanggal_lahir'] . "</td>";
                    echo "<td>" . $row['jenis_kelamin'] . "</td>";
                    echo "<td>" . $row['no_telepon'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td><a href='pasien_edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a> ";
                    echo "<a href='pasien_delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>