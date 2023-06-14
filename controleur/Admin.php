<?php
if ( $_SERVER['SCRIPT_FILENAME'] == __FILE__ ){
    $racine='..';
}

$ok = $verifIP->verif();

if ($ok) {

    $users_info = $user->getAllUsers();

    // Récupération des identifiants pour la connexion et le critere
    $champs = [
        'critere' => 'critere',
        'log' => 'log',
        'pass' => 'pass'
    ];
    
    foreach ($champs as $cle => $valeurs) {
        $$valeurs = isset($_GET[$cle]) ? $_GET[$cle] : $$valeurs = isset($_GET['critere']) ? $_GET['critere'] : 'user';
    }
    
    extract(compact(array_values($champs)), EXTR_OVERWRITE);
    
    // Appel des affichages 
    include "$racine/vue/header.php";
    switch($critere){
        case 'user':
            include "$racine/vue/vueAdminUser.php";
            break;
        case 'entreprise':
            include "$racine/vue/vueAdminEntreprise.php";
            break;
    
        case 'hebergeur':
            include "$racine/vue/vueAdminHebergeur.php";
            break;
    }
    include "$racine/vue/footer.php";
    
    if (!empty($_POST)) {
        // Récuperation des données
        $champs = [
            'id' => 'id',
            'nom' => 'nom',
            'prenom' => 'prenom',
            'tel' => 'tel',
            'mail' => 'mail',
            'fonction' => 'fonction',
            'forme_jur' => 'forme_jur',
            'capital' => 'capital',
            'siret' => 'siret',
            'adresse' => 'adresse'
        ];
    
        foreach ($champs as $cle => $valeurs) {
            $$valeurs = isset($_POST[$cle]) ? isset($_POST[$cle]) : '';
        }
    
        extract(compact(array_values($champs)), EXTR_OVERWRITE);
    
        // Envoie des nouvelles données selon cas
        switch($critere){
            case 'user':
                $admin->updateUserByID(2, $nom, $prenom, $tel, $mail, $fonction);
                break;
    
            case 'entreprise':
                $admin->updateFirmByID($id, $nom, $forme_jur, $capital, $adresse, $siret, $tel, $mail);
                break;
    
            case 'hebergeur':
                $admin->updateHostByID($id, $nom, $tel, $mail, $adresse);
                break;
        }
    }

} else {
    include "$racine/vue/vueBot.php";
}