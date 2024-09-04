<?php

$totalBelanja=150000;
$diskon=0;

if($totalBelanja>200000){
$diskon=0.1;
}elseif($totalBelanja>100000){
    $diskon=0.05;
}else{
    $diskon=0;
}
$potonganHarga=$totalBelanja*$diskon;
$totalBayar=$totalBelanja-$potonganHarga;

echo $totalBayar;