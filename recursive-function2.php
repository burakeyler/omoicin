<?php
$kategoriler = [
    [
        'id' => 1,
        'parent' => 0,
        'ad' => 'Dersler'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'ad' => 'Guncel'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'ad' => 'Blog'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'ad' => 'Php Dersleri'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'ad' => 'CSS Dersleri'
    ]
];

function kategoriListele($kategoriler, $parent = 0){
    echo '<ul>';
foreach ($kategoriler as $kategori){
    if ($kategori['parent'] == $parent){
    echo '<li>' . $kategori['ad'] . '</li>';
    echo kategoriListele($kategoriler,$kategori['id']);} //
}echo '</ul>';
}
kategoriListele($kategoriler);





