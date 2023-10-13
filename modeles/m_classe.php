<?php
    // Récuperer toutes les classes
    function getLesClasses() {
        try {
            $connexion = BDDConnexionPDO();
            $lesClasses = $connexion->query("SELECT * FROM Classe");
            $lesClasses->setFetchMode(PDO::FETCH_OBJ);
            return $lesClasses;
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer toutes les classes
    function getUneClasseById($idC) {
        try {
            $connexion = BDDConnexionPDO();
            $uneClasse = $connexion->prepare("SELECT * FROM Classe WHERE idClasse = ?");
            $uneClasse->execute($idC);
            $uneClasse->setFetchMode(PDO::FETCH_OBJ);
            return $uneClasse->fetch();
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer toutes les classes grâce à l'id de l'entrepise
    function getLesClassesByIdEnt($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $lesClasses = $connexion->prepare(
                "SELECT libClasse
                FROM Entreprise
                INNER JOIN Stage ON Entreprise.idEnt = Stage.idEnt
                INNER JOIN Classe ON Stage.idClasse = Classe.idClasse
                WHERE Entreprise.idEnt = ?
                UNION SELECT libClasse
                FROM Entreprise
                INNER JOIN Alternance ON Entreprise.idEnt = Alternance.idEnt
                INNER JOIN Classe ON Alternance.idClasse = Classe.idClasse
                WHERE Entreprise.idEnt = ?
                UNION SELECT libClasse
                FROM Entreprise
                INNER JOIN InterventionClasse ON Entreprise.idEnt = InterventionClasse.idEnt
                INNER JOIN Classe ON InterventionClasse.idClasse = Classe.idClasse
                WHERE Entreprise.idEnt = ?
                UNION SELECT libClasse
                FROM Entreprise
                INNER JOIN VisiteEnt ON Entreprise.idEnt = VisiteEnt.idEnt
                INNER JOIN Classe ON VisiteEnt.idClasse = Classe.idClasse
                WHERE Entreprise.idEnt = ?;"
            );
            $lesClasses->execute(array($idEnt,$idEnt,$idEnt,$idEnt));
            $lesClasses->setFetchMode(PDO::FETCH_OBJ);
            return $lesClasses;
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    function setAjoutClasse($libClasse) {
        try {
            $connexion = BDDConnexionPDO();
            $reqInsert=$connexion->prepare(
                "INSERT INTO Classe (libClasse)
                VALUES (?)"
            ); 
            $reqInsert->execute(array($libClasse));
            return $reqInsert; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setUpdateClasse($libClasse,$idClasse) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE Classe
                SET libClasse =?
                WHERE idClasse = ?"
            );
            $reqUpdate->execute(array($libClasse,$idClasse));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteClasse($idClasse) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM Classe WHERE idClasse = ?") ;
            $reqDelete->execute(array($idClasse));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }