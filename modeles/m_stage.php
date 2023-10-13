<?php
    function getLesStages() {
        try {
            $connexion = BDDConnexionPDO();
            $lesStages = $connexion->query("SELECT * FROM Stage");
            $lesStages->setFetchMode(PDO::FETCH_OBJ);
            return $lesStages;
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnStageById($idS) {
        try {
            $connexion = BDDConnexionPDO();
            $unStage = $connexion->prepare("SELECT * FROM Stage WHERE idS = ?");
            $unStage->execute($idS);
            $unStage->setFetchMode(PDO::FETCH_OBJ);
            return $unStage->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function setAjoutStage($idSecteur,$idClasse,$idEnt,$intituleS,$libS,$dateDebS,$dateFinS,$domaineActS) {
        try {
            $connexion = BDDConnexionPDO();
            $reqInsert=$connexion->prepare(
                "INSERT INTO Stage (idSecteur,idClasse,idEnt,intituleS,libS,dateDebS,dateFinS,domaineActS)
                VALUES (?,?,?,?,?,?,?,?)"
            ); 
            $reqInsert->execute(array($idSecteur,$idClasse,$idEnt,$intituleS,$libS,$dateDebS,$dateFinS,$domaineActS));
            return $reqInsert; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setUpdateStage($idSecteur,$idClasse,$idEnt,$intituleS,$libS,$dateDebS,$dateFinS,$domaineActS,$idS) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE Stage
                SET idSecteur = ?,idClasse = ?,idEnt = ?,intituleS = ?,libS = ?,dateDebS = ?,dateFinS = ?,domaineActS = ?
                WHERE idS = ?"
            );
            $reqUpdate->execute(array($idSecteur,$idClasse,$idEnt,$intituleS,$libS,$dateDebS,$dateFinS,$domaineActS,$idS));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteStage($idS) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM Stage WHERE idS = ?") ;
            $reqDelete->execute(array($idS));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }
?>