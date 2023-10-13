<?php
    function getLesInterventions() {
        try {
            $connexion = BDDConnexionPDO();
            $lesInterventions = $connexion->query("SELECT * FROM InterventionClasse");
            $lesInterventions->setFetchMode(PDO::FETCH_OBJ);
            return $lesInterventions;
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnInterventionById($idI) {
        try {
            $connexion = BDDConnexionPDO();
            $uneIntervention = $connexion->prepare("SELECT * FROM InterventionClasse WHERE idIntervention = ?");
            $uneIntervention->execute($idI);
            $uneIntervention->setFetchMode(PDO::FETCH_OBJ);
            return $uneIntervention->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function setAjoutIntervention($intituleIntervention,$libIntervention,$idClasse,$idMetier,$idEnt,$dureeIntervention) {
        try {
            $connexion = BDDConnexionPDO();
            $reqInsert=$connexion->prepare(
                "INSERT INTO InterventionClasse (intituleIntervention,libIntervention,idClasse,idMetier,idEnt,dureeIntervention)
                VALUES (?,?,?,?,?,?)"
            ); 
            $reqInsert->execute(array($intituleIntervention,$libIntervention,$idClasse,$idMetier,$idEnt,$dureeIntervention));
            return $reqInsert; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setUpdateIntervention($intituleIntervention,$libIntervention,$idClasse,$idMetier,$idEnt,$dureeIntervention,$idIntervention) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE InterventionClasse
                SET intituleIntervention = ?,libIntervention = ?,idClasse = ?,idMetier = ?,idEnt = ?,dureeIntervention = ?
                WHERE idIntervention = ? "
            );
            $reqUpdate->execute(array($intituleIntervention,$libIntervention,$idClasse,$idMetier,$idEnt,$dureeIntervention,$idIntervention));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteIntervention($idIntervention) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM InterventionClasse WHERE idIntervention = ? ") ;
            $reqDelete->execute(array($idIntervention));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }
?>