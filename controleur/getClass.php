<?php

include_once "$racine/modele/auth.php";
include_once "$racine/modele/bd.firm.inc.php";
include_once "$racine/modele/bd.host.inc.php";
include_once "$racine/modele/bd.ip.inc.php";
include_once "$racine/modele/bd.meches.inc.php";
include_once "$racine/modele/bd.user.inc.php";
include_once "$racine/controleur/controleurPrincipal.php";
include_once "$racine/controleur/controleurUserAgent.php";

$controleur = new ControleurPrincipal;
$verifIP = new verifIP;
$auth = new Auth;
$firm = new Firm;
$host = new Host;
$getIP = new IP;
$admin = new Admin;
$user = new User;