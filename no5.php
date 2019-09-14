<?php
function random($lenght)//jumlah digit huruf dan angka
{
    $data = "abcdefghijklmnopqrstuvwxyz1234567890";//data huruf dan angka
    $str = '';//membuat var kosong
    for($j = 0; $j < $lenght; $j++) {//perulangan
        $pos =rand(0, strlen($data)-1);//pembuatan huruf dan angka random
        $str .= $data{$pos};
        }
        return $str;//mengembalikan nilai var string
}

function acak($bikin)
{
    for ($i=1; $i <=$bikin ; $i++) { 
        $hasilacak = random(32);
        return $hasilacak."\n";
    }
}

echo acak(3);

