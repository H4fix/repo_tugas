<?php
function cetak($nama){
    echo"Semoga Sukses ".$nama;
    echo"<br>";
}
cetak("Hafiz");
cetak("Nabil");

echo"<br><hr>";

function ageCount($nama,$tahun,$tempat){
    $umur=date("Y")-$tahun;
    echo"Hai $nama, umur kamu $umur tahun tempat tinggal di $tempat<br>";
}
    ageCount("Hafiz",2008,"Bumi");
    ageCount("Mola",1000,"underworld"); //kalok tahunnya kosong maka dia akan ke slide no 11 (2000)

    echo"<br><hr>";

    function jumlahkan($bil1,$bil2){
        return $bil1*$bil2;
    }
    echo jumlahkan(4,5)."<br>";
    echo jumlahkan(8,3)."<br>";
    $jum=jumlahkan(2,10)."<br>"; 
    echo $jum;
echo"<br><hr>";
