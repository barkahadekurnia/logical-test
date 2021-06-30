<?php
//barkahadekurnia@gmail.com 

//isisialisasi disit datane
$aplikasi = [];
$aplikasi[1] = "gtAkademik";
$aplikasi[2] = "gtFinansi";
$aplikasi[3] = "gtPerizinan";
$aplikasi[4] = "eCampuz";
$aplikasi[5] = "eOviz";

//buat loop untuk menampilkan semua data diatas


$i = 1;
while ($i <= 5) {
    echo "$aplikasi[$i] <br>";
    $i++;
}
