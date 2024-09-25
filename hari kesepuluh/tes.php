<?php
$nama=array("Andi","Budi","Candra","Dedi","Emon");
foreach($nama as $n){
    echo $n.'<br>';
}

echo"<br><hr>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[4]="Zulfa"; //Merubah data array pada elemen ke-4
foreach ($nama as $n){
    echo $n.'<br>';
}

echo"<br><hr>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
$nama[]="Maimunah";//menambah data array
foreach ($nama as $n){
echo $n.'<br>';
}


echo"<br><hr>";

$nama=array("Andi","Budi","Candra","Dedi","Emon");
unset($nama[1]);//menghapus data array indeks-1
foreach ($nama as $n){
echo $n.'<br>';
}

echo"<br><hr>";

$data=array("nama"=>"Andi",
"nisn"=>"98765665845",
"kelas"=>"XI RPL 1")