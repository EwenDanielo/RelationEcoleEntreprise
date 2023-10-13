<?php
    function getLesVisites() {
        try {
            $connexion = BDDConnexionPDO();
            $lesVisites = $connexion->query("SELECT * FROM VisiteEnt");
            $lesVisites->setFetchMode(PDO::FETCH_OBJ);
            return $lesVisites;
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnVisiteById($idV) {
        try {
            $connexion = BDDConnexionPDO();
            $uneVisite = $connexion->prepare("SELECT * FROM VisiteEnt WHERE idV = ?");
            $uneVisite->execute($idV);
            $uneVisite->setFetchMode(PDO::FETCH_OBJ);
            return $uneVisite->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }