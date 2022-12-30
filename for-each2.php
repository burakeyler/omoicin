<?php
$sayilar = [0,1,2,3,4];

foreach ($sayilar as $sayi) {
    echo $sayi . '<br>';
}

$uyeDetay = [
    'ad' => 'omo',
    'soyad'=> 'junior',
    'yas' => 'sexi'
];
foreach ($uyeDetay as $key => $uyeler) {
    echo $key . " : " . $uyeler . '<br>';
}
?>