<?php

include_once "bd.inc.php";

class User extends ConnexionPDO {
    function getAllUsers() {
        $req = $this->cnx->prepare("SELECT * FROM user");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    function getUserByID($id) {
        $req = $this->cnx->prepare("SELECT * FROM user WHERE id=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    function getUserByMail($mail) {
        $req = $this->cnx->prepare("SELECT * FROM user WHERE mail=:mail");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    function setNewPassword($mail, $pass){
        $req = $this->cnx->prepare("UPDATE user SET pass=:pass WHERE mail=:mail");
        $req->bindValue(':mdpU', $pass, PDO::PARAM_STR);
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->execute();
    }

    function getAdmin($mail){
        $req = $this->cnx->prepare("SELECT is FROM admin WHERE mail=:mail");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->execute();
        return True ? $req->fetch(PDO::FETCH_ASSOC) == 1 : False;
    }
}