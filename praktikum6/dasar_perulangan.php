<!DOCTYPE html>
<html>


<head>
   <title>Latihan Perulangan PHP</title>
</head>


<body>
   <h1>Daftar Angka 1 sampai 20</h1>
   <ul>
       <?php


       for ($i = 1; $i <= 20; $i++) {
           echo "<li>Ini adalah item nomor " . $i . "</li>";
       }
       ?>
   </ul>
</body>.


</html>
