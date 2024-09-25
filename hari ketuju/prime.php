<?php
for($i=1;$i<=100;$i++){
    $cek=0;
    for($k=1;$k<=$i;$k++){
    if($i%$k==0){
        $cek++;
    }
}
if($cek==2){
    echo "$i";
}
}