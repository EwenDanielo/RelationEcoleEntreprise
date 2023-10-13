<?php
    function getLesAlternances() {
        try {
            $connexion = BDDConnexionPDO();
            $lesAlternances = $connexion->query("SELECT * FROM Alternance");
            $lesAlternances->setFetchMode(PDO::FETCH_OBJ);
            return $lesAlternances;
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnAlternanceById($idA) {
        try {
            $connexion = BDDConnexionPDO();
            $uneAlternance = $connexion->prepare("SELECT * FROM Alternance WHERE idA = ?");
            $uneAlternance->execute($idA);
            $uneAlternance->setFetchMode(PDO::FETCH_OBJ);
            return $uneAlternance->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function setAjoutAlternance($idSecteur,$idClasse,$idEnt,$intituleA,$libA,$dateDebA,$dateFinA,$domaineActA) {
        try {
            $connexion = BDDConnexionPDO();
            $reqInsert=$connexion->prepare(
                "INSERT INTO Alternance (idSecteur,idClasse,idEnt,intituleA,libA,dateDebA,dateFinA,domaineActA)
                VALUES (?,?,?,?,?,?,?,?)"
            ); 
            $reqInsert->execute(array($idSecteur,$idClasse,$idEnt,$intituleA,$libA,$dateDebA,$dateFinA,$domaineActA));
            return $reqInsert; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setUpdateAlternance($idSecteur,$idClasse,$idEnt,$intituleA,$libA,$dateDebA,$dateFinA,$domaineActA,$idA) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE Alternance
                SET idSecteur = ?,idClasse = ?,idEnt = ?,intituleA = ?,libA = ?,dateDebA = ?,dateFinA = ?,domaineActA = ?
                WHERE idA = ?"
            );
            $reqUpdate->execute(array($idSecteur,$idClasse,$idEnt,$intituleA,$libA,$dateDebA,$dateFinA,$domaineActA,$idA));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteAlternance($idA) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM Alternance WHERE idA = ?") ;
            $reqDelete->execute(array($idA));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }
?>