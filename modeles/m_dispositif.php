<?php

    // Récuperer tous les dispositifs
    function getLesDispositifs() {
        try {
            $connexion = BDDConnexionPDO();
            $lesDisps = $connexion->query("SELECT * FROM DispositifREE");
            $lesDisps->setFetchMode(PDO::FETCH_OBJ);
            return $lesDisps;
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer un dispositif grâce à son id
    function getUnDispositif($idD) {
        try {
            $connexion = BDDConnexionPDO();
            $unDisp = $connexion->prepare("SELECT * FROM DispositifREE WHERE idD = ?");
            $unDisp->execute(array($idD));
            $unDisp->setFetchMode(PDO::FETCH_OBJ);
            return $unDisp->fetch();
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer tous les interlocuteurs d'un dispositif grâce à son l'id du dispositif
    function getLesInterlocuteurs($idD) {
        try {
            $connexion = BDDConnexionPDO();
            $lesInters = $connexion->prepare(
                "SELECT * 
                FROM Interlocuteur
                INNER JOIN LienDispInter ON Interlocuteur.idInter = LienDispInter.idInter
                WHERE LienDispInter.idD = ?"
            );
            $lesInters->execute(array($idD));
            $lesInters->setFetchMode(PDO::FETCH_OBJ);
            return $lesInters;
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    function setAjoutDispositif($nomD,$libD,$objPedaD,$dateDebD,$dateFinD,$modaliteD, $lienSiteD) {
        try {
            $connexion = BDDConnexionPDO();
            $reqInsert=$connexion->prepare(
                "INSERT INTO DispositifREE (nomD,libD,objPedaD,dateDebD,dateFinD,modaliteD,lienSiteD)
                VALUES (?,?,?,?,?,?,?)"
            ); 
            $reqInsert->execute(array($nomD,$libD,$objPedaD,$dateDebD,$dateFinD,$modaliteD, $lienSiteD));
            return $reqInsert; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setUpdateDispositif($nomD,$libD,$objPedaD,$dateDebD,$dateFinD,$modaliteD, $lienSiteD, $idD) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE DispositifREE
                SET nomD = ?, libD = ?, objPedaD = ?, dateDebD = ?, dateFinD = ?, modaliteD = ?, lienSiteD = ?
                WHERE idD = ?"
            );
            $reqUpdate->execute(array($nomD,$libD,$objPedaD,$dateDebD,$dateFinD,$modaliteD,$lienSiteD,$idD));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteDispositif($idD) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM DispositifREE WHERE idD = ? ") ;
            $reqDelete->execute(array($idD));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }
?>