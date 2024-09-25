<?php

//perulangan --> Looping 
//inisialisasi variabel perulangan; kondisi perulangan; penjummlahan/pengurangan
echo "<h3>perulangan for</h3>";
for ($i=0;$i<11;$i++){
    echo "ini perulangan ke-$i <br>";
}
echo "<hr>";
echo "<h3>perulangan while</h3>";
$a=0;
while($a<=1){
    echo "perulangan ke-$a <br>";
$a++;
}
echo "<hr>";
echo "<h3>perulangan do-while</h3>";
$x=0;
do {
    echo "ini perulangan ke-$x <br>";
    $x++;
} while($x<=3);