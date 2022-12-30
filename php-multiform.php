<?php
function form_filtrele($post) {
    return is_array($post) ? array_map('form_filtrele', $post): htmlspecialchars(trim($post));
}
$_POST = array_map('form_filtrele', $_POST);
//guvenlik bitis

function post($name){
    if (isset($_POST[$name]))
        return $_POST[$name];
}
if (post('giris_yap')){
 print_r($_POST);
}
if (post('kayit_ol')){
print_r($_POST);
}

?>
<form action="" method="post">
    <h3>Giris Yap</h3>
    Kullanıcı Adı <br>
    <input type="text" name="kadi">
    <hr>
    Sifre : <br>
    <input type="password" name = "sifre">
    <br>
    <hr>
    <input type="hidden" name="giris_yap" value="1"></input>
    <button type="submit"> Giriş Yap </button>

    </input>
</form>
<form action="" method="post">
    <h3>Kayıt OL</h3>
    Kullanıcı Adı <br>
    <input type="text" name="kadi">
    <hr>
    Sifre : <br>
    <input type="password" name = "sifre">
    <br>
    E-posta <br>
    <hr>
    <input type="text" name="eposta">
    <hr>
    <input type="hidden" name="kayit_ol" value="1">
    <button type="submit"> Kayıt ol </button>

    </input>
</form>
