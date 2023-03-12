<?php

function salam($nama=""){
    echo"<h1>selamat" .strtoupper($nama). "</h1>";
}
function jumlah($a , $b){
    return $a + $b;

}


salam("ucup");
salam("adul");

echo "100 + 87 =" .jumlah(100,87);


?>

