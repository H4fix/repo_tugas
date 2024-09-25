<?php
$angka = array(7, 5, 9, 12, 4, 54, 76, 98);

foreach ($angka as $n) {
    if ($n % 2 != 0) { //kalok tanda (! dan angka o di ubah) ini di hapus maka angka genap yang akan muncul
        echo $n . " ";
    }
}

echo"<br><hr>";

$angka = array(7, 5, 9, 12, 4, 54, 76, 98);
$jumlah = 0;

foreach ($angka as $n) {
    $jumlah += $n;
}

echo "Jumlah arraynya adalah: $jumlah";

echo"<br><hr>";

$angka = array(7, 5, 9, 12, 4, 54, 76, 98);
sort($angka);

echo "Array yang diurutkan adalah: ";
foreach($angka as $value) {
    echo "$value ";
}

echo"<br><hr>";

$angka = array(7, 5, 9, 12, 4, 54, 76, 98);
asort($angka);

echo "Array yang diurutkan adalah: ";
foreach($angka as $value) {
    echo "$value " ;
}