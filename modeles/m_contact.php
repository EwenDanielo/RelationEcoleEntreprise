<?php
    function getLesContacts() {
        try {
            $connexion = BDDConnexionPDO();
            $lesContacts = $connexion->query("SELECT * FROM Contact");
            $lesContacts->setFetchMode(PDO::FETCH_OBJ);
            return $lesContacts;
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnContactById($idC) {
        try {
            $connexion = BDDConnexionPDO();
            $unContact = $connexion->prepare("SELECT * FROM Contact WHERE idC = ?");
            $unContact->execute($idC);
            $unContact->setFetchMode(PDO::FETCH_OBJ);
            return $unContact->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function setAjoutContact($idEnt,$nomC,$prenomC,$emailC,$portbaleC,$telC,$posteC) {
        try {
            $connexion = BDDConnexionPDO();
            $reqInsert=$connexion->prepare(
                "INSERT INTO Contact (edEnt,nomC,prenomC,emailC,portableC,telC,posteC)
                VALUES (?,?,?,?,?,?,?)"
            ); 
            $reqInsert->execute(array($idEnt,$nomC,$prenomC,$emailC,$portbaleC,$telC, $posteC));
            return $reqInsert; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setUpdateContact($idEnt,$nomC,$prenomC,$emailC,$portbaleC,$telC,$posteC, $idC) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE Contact
                SET idEnt = ?, nomC = ?, prenomC = ?, emailC = ?, portableC = ?, telC = ?, posteC = ?
                WHERE idC = ? "
            );
            $reqUpdate->execute(array($idEnt,$nomC,$prenomC,$emailC,$portbaleC,$telC,$posteC,$idC));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteContact($idC) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM Contact WHERE idC = ? ") ;
            $reqDelete->execute(array($idC));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }
?>