<?php
$main_title = "Katalog Produk"; // Judul halaman
include 'head.php'; // Menyertakan file head.php
?>

<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"><?php echo $main_title; ?></h1>
        <p class="lead text-body-secondary">"Cari alat kesehatan yang aman dan berkualitas? Kami menyediakan berbagai alat kesehatan berkualitas tinggi untuk mendukung hidup sehat dan nyaman setiap hari. Temukan sekarang di katalog kami—praktis, lengkap, dan siap dikirim ke rumah Anda!".</p>
        <p> <a href="#" class="btn btn-primary my-2">Main call to action</a> <a href="#" class="btn btn-secondary my-2">Secondary action</a> </p>
    </div>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php 
                $sql = "SELECT id_produk, nama_produk, harga, stok FROM produk";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Loop untuk menampilkan setiap baris data
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col'>
                                <div class='card shadow-sm'>
                                    <svg aria-label='Placeholder: Thumbnail' class='bd-placeholder-img card-img-top' height='225' preserveAspectRatio='xMidYMid slice' role='img' width='100%' xmlns='http://www.w3.org/2000/svg'>
                                        <title>Placeholder</title>
                                        <rect width='100%' height='100%' fill='#55595c'></rect>
                                        <text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>
                                    </svg>
                                    <div class='card-body'>
                                        <p class='card-text'>{$row['nama_produk']} - Rp. {$row['harga']}</p>
                                        <div class='d-flex justify-content-between align-items-center'>
                                            <div class='btn-group'>
                                                <a href='edit.php?id={$row['id_produk']}' class='btn btn-sm btn-outline-secondary'>Edit</a>
                                                <a href='hapus.php?id={$row['id_produk']}' class='btn btn-sm btn-outline-secondary' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a>
                                            </div>
                                            <small class='text-body-secondary'>Stok: {$row['stok']}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                } else {
                    echo "<div class='col'>
                            <div class='card shadow-sm'>
                                <div class='card-body'>
                                    <p class='card-text'>Tidak ada data produk.</p>
                                </div>
                            </div>
                          </div>";
                }
                ?>
                
            </div>
        </div>
    </div>
</div>

<?php include 'foot.php'; // Menyertakan file foot.php 
?>