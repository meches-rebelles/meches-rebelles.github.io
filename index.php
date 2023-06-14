<?php
$racine = dirname(__FILE__);

include_once "$racine/controleur/getClass.php";

isset($_GET["action"]) ? $fichier = $controleur->getAction($_GET["action"]) : $fichier = $controleur->getAction("accueil");
$domaine = 'https://'.$_SERVER['SERVER_NAME'].'/';
$site = substr($domaine, 8, -1);
$page = pathinfo($fichier)['filename'];

$chef_info = $user->getUserByMail('mechesmag@gmail.com');
$firm_info = $firm->getFirmByID(1);
$host_info = $host->getHostByID(1);

include "$racine/controleur/$fichier";