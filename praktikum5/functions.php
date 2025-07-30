<!-- functions.php -->
<?php
function hitung_diskon($harga, $persen_diskon) {
    $potongan = $harga * ($persen_diskon / 100);
    return $harga - $potongan;
}


$harga_baju = 375000;
$harga_setelah_diskon = hitung_diskon($harga_baju, 20); // Diskon 20%
echo "Harga akhir: Rp " . $harga_setelah_diskon;
?>
