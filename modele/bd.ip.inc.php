<?php

include_once "bd.inc.php";

class IP extends ConnexionPDO {
    function getAllIPs() {
        $req = $this->cnx->prepare("SELECT * FROM ipban");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    function setIPBan($ip) {
        $req = $this->cnx->prepare("INSERT INTO ipban (ip) VALUES (ip=:ip)");
        $req->bindValue(':ip', $ip, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}