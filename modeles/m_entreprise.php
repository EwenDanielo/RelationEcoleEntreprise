<?php
    // Récuperer toutes les entreprises
    function getLesEntreprises() {
        try {
            $connexion = BDDConnexionPDO();
            $lesEnts = $connexion->query("SELECT * FROM Entreprise");
            $lesEnts->setFetchMode(PDO::FETCH_OBJ);
            return $lesEnts;
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer une entreprise grâce à son id
    function getUneEntreprise($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $uneEnt = $connexion->prepare("SELECT * FROM Entreprise WHERE idEnt = ?");
            $uneEnt->execute(array($idEnt));
            $uneEnt->setFetchMode(PDO::FETCH_OBJ);
            return $uneEnt->fetch();
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer tous les domaines
    function getLesDomaines() {
        try {
            $connexion = BDDConnexionPDO();
            $lesDomaines = $connexion->query("SELECT * FROM DomaineAct");
            $lesDomaines->setFetchMode(PDO::FETCH_OBJ);
            return $lesDomaines;
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer une entreprise grâce à son id
    function getUnDomaine($idDomaine) {
        try {
            $connexion = BDDConnexionPDO();
            $unDommaine = $connexion->prepare("SELECT * FROM DomaineAct WHERE idDomaine = ?");
            $unDommaine->execute(array($idDomaine));
            $unDommaine->setFetchMode(PDO::FETCH_OBJ);
            return $unDommaine->fetch();
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer les contacts grâce à l'id de l'entreprise
    function getLesContactByIdEnt($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $lesContacts = $connexion->prepare("SELECT * FROM Contact WHERE idEnt = ?");
            $lesContacts->execute(array($idEnt));
            $lesContacts->setFetchMode(PDO::FETCH_OBJ);
            return $lesContacts;
        } catch (PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    
    // Récuperer les stages grâce à l'id de l'entreprise
    function getLesStagesByIdEnt($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $lesStages = $connexion->prepare("SELECT * FROM Stage WHERE idEnt = ?");
            $lesStages->execute(array($idEnt));
            $lesStages->setFetchMode(PDO::FETCH_OBJ);
            return $lesStages;
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer les alternances grâce à l'id de l'entreprise
    function getLesAlternancesByIdEnt($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $lesAlternances = $connexion->prepare("SELECT * FROM Alternance WHERE idEnt = ?");
            $lesAlternances->execute(array($idEnt));
            $lesAlternances->setFetchMode(PDO::FETCH_OBJ);
            return $lesAlternances;
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer les Ent grâce à l'id de l'entreprise
    function getLesInterventionsByIdEnt($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $lesEnt = $connexion->prepare("SELECT * FROM InterventionClasse WHERE idEnt = ?");
            $lesEnt->execute(array($idEnt));
            $lesEnt->setFetchMode(PDO::FETCH_OBJ);
            return $lesEnt;
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer les visites d'entreprises grâce à l'id de l'entreprise
    function getLesVisiteByIdEnt($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $lesVisites = $connexion->prepare("SELECT * FROM VisiteEnt WHERE idEnt = ?");
            $lesVisites->execute(array($idEnt));
            $lesVisites->setFetchMode(PDO::FETCH_OBJ);
            return $lesVisites;
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer le métier d'une Ent grâce à son id
    function getUnMetierByIdIntervention($idI) {
        try {
            $connexion = BDDConnexionPDO();
            $unMetier = $connexion->prepare(
                "SELECT MetierDecouvert.intituleMetier
                FROM InterventionClasse
                INNER JOIN MetierDecouvert ON MetierDecouvert.idMetier = InterventionClasse.idMetier
                WHERE idEnt = ?");
            $unMetier->execute(array($idI));
            $unMetier->setFetchMode(PDO::FETCH_OBJ);
            return $unMetier->fetch();
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer le métier d'une visite grâce à son id
    function getUnMetierByIdVisite($idV) {
        try {
            $connexion = BDDConnexionPDO();
            $unMetier = $connexion->prepare(
                "SELECT MetierDecouvert.intituleMetier
                FROM VisiteEnt
                INNER JOIN MetierDecouvert ON MetierDecouvert.idMetier = VisiteEnt.idMetier
                WHERE idV = ?"
            );
            $unMetier->execute(array($idV));
            $unMetier->setFetchMode(PDO::FETCH_OBJ);
            return $unMetier->fetch();
        } catch (PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    function getLesSecteurs() {
        try {
            $connexion = BDDConnexionPDO();
            $lesSecteurs = $connexion->query("SELECT * FROM SecteurPropose");
            $lesSecteurs->setFetchMode(PDO::FETCH_OBJ);
            return $lesSecteurs;
        } catch (PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnSecteurById($idSecteur) {
        try {
            $connexion = BDDConnexionPDO();
            $leSecteur = $connexion->prepare("SELECT * FROM SecteurPropose WHERE idSecteur = ?");
            $leSecteur->execute(array($idSecteur));
            $leSecteur->setFetchMode(PDO::FETCH_OBJ);
            return $leSecteur->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getLesMetiers() {
        try {
            $connexion = BDDConnexionPDO();
            $lesMetiers = $connexion->query("SELECT * FROM MetierDecouvert");
            $lesMetiers->setFetchMode(PDO::FETCH_OBJ);
            return $lesMetiers;
        } catch (PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function getUnMetierById($idMetier) {
        try {
            $connexion = BDDConnexionPDO();
            $leMetier = $connexion->prepare("SELECT * FROM MetierDecouvert WHERE idMetier = ?");
            $leMetier->execute(array($idMetier));
            $leMetier->setFetchMode(PDO::FETCH_OBJ);
            return $leMetier->fetch();
        } catch(PDOException $e) {
            die("Erreur".$e->getMessage());
        }
    }

    function setAjoutEntrerpise($nomEnt,$libEnt,$adrEnt,$villeEnt,$cpEnt,$handicapEnt,$domaineEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $reqInsert=$connexion->prepare(
                "INSERT INTO Entreprise (nomEnt,libEnt,adrEnt,villeEnt,cpEnt,handicapEnt,domaineEnt)
                VALUES (?,?,?,?,?,?,?)"
            ); 
            $reqInsert->execute(array($nomEnt,$libEnt,$adrEnt,$villeEnt,$cpEnt,$handicapEnt,$domaineEnt));
            return $reqInsert; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setUpdateEntrerpise($nomEnt,$libEnt,$adrEnt,$villeEnt,$cpEnt,$handicapEnt,$domaineEnt,$idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $reqUpdate = $connexion->prepare(
                "UPDATE Entreprise
                SET nomEnt = ?,libEnt = ?,adrEnt = ?,villeEnt = ?,cpEnt = ?, handicapEnt = ?, domaineEnt = ?
                WHERE idEnt = ?"
            );
            $reqUpdate->execute(array($nomEnt,$libEnt,$adrEnt,$villeEnt,$cpEnt,$handicapEnt,$domaineEnt,$idEnt));
            return $reqUpdate; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }

    function setDeleteEntrerpise($idEnt) {
        try {
            $connexion = BDDConnexionPDO();
            $reqDelete=$connexion->prepare("DELETE FROM Entreprise WHERE idEnt = ?") ;
            $reqDelete->execute(array($idEnt));
            return $reqDelete; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        } 
    }
?>