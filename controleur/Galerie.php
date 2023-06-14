<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$ok = $verifIP->verif();

if ($ok) {
    include "$racine/vue/header.php";
    include "$racine/vue/vueGalerie.php";
    include "$racine/vue/footer.php";
} else {
    include "$racine/vue/vueBot.php";
}