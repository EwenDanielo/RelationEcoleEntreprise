<?php
    function getLesInterlocuteurs() {
        try {
            $connexion = BDDConnexionPDO();
            $lesInterlocuteurs = $connexion->query("SELECT * FROM Interlocuteur");
            $lesInterlocuteurs->setFetchMode(PDO::FETCH_OBJ);
            return $lesInterlocuteurs;
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnInterlocuteurById($idI) {
        try {
            $connexion = BDDConnexionPDO();
            $unInterlocuteur = $connexion->prepare("SELECT * FROM Interlocuteur WHERE idInter = ?");
            $unInterlocuteur->execute($idI);
            $unInterlocuteur->setFetchMode(PDO::FETCH_OBJ);
            return $unInterlocuteur->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function setAjoutInterlocuteur($nomInter,$prenomInter,$posteInter,$emailInter,$telInter) {
        try {
            $connexion = BDDConnexionPDO();
            $reqAddInter = $connexion->prepare(
                "INSERT INTO Interlocuteur (nomInter, prenomInter, posteInter, emailInter, telInter)
                VALUES (?,?,?,?,?)"
            );
            $reqAddInter->execute(array($nomInter,$prenomInter,$posteInter,$emailInter,$telInter));
            return $reqAddInter;
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function setUpdateDispositif($nomInter,$prenomInter,$posteInter,$emailInter,$telInter,$idInter) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE Interlocuteur
                SET nomInter = ?, prenomInter = ?, posteInter = ?, emailInter = ?, telInter = ?
                WHERE idInter = ?"
            );
            $reqUpdate->execute(array($nomInter,$prenomInter,$posteInter,$emailInter,$telInter,$idInter));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteDispositif($idInter) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM Interlocuteur WHERE idInter = ?") ;
            $reqDelete->execute(array($idInter));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }
?>