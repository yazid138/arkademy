<?php

function cetak_gambar($jb)//membuat fungsi
{
    $jb;//jml baris
    $jk = $jb;//jml kolom
    
    echo"---Panjang---";
    for ($i=1; $i <= $jb; $i++) //fungsi membuat baris
    {
        for ($j=1; $j <=$jk ; $j++) //fungsi membuat kolom
        {
            if ($j>1 && $j<$jk) //untuk kolom 2 - < $jk print "="
            {
                echo"= ";//kolom
            } else {
                echo"* ";//ujung baris
            }
        }
        echo"\n" ;//buat baris baru
    }
}

cetak_gambar(5);
