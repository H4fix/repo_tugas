<?php
$nama=array("Jenal","Budi","Amba","Dedi","Mola");
echo $nama[0];

$nama=array(" ","Budi","Amba","Dedi","Mola");
foreach ($nama as $a){
    echo $a.'<br>';
} 

echo"<br> <hr>";

echo $nama[3]="Hafiz";
foreach ($nama as $a){
    echo $a.'<br>';
}
