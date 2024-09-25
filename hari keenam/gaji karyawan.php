<?php

$upah_perjam=2000;
$upah_lembur_perjam=3000;
$jam_normal=48;
$jam_kerja=49;

if($jam_kerja>$jam_normal){
  $jam_lembur=$jam_kerja-$jam_normal;
  $upah_reguler=$jam_normal*$upah_perjam;
  $upah_lembur=$jam_lembur*$upah_lembur_perjam;
}else{
  $upah_reguler=$jam_normal*$upah_perjam;
  $upah_lembur=0;
}

$total_upah=$upah_reguler+$upah_lembur;

print "total upah karyawan minggu ini adalah = $total_upah";