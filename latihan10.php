<?php
$arrayNilai = array("Ani " => 80, "Otim " =>90, "Ana " => 75, "Budi " => 85);

echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrayNilai as $nama => $nilai){
    echo "Nilai $$nama = $nilai<br>";
}
reset ($arrayNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each ($arrayNilai)){
    echo "Nilai $nama = $nilai<br>";
}
?>