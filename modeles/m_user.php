<?php

    // Récuperer tous les utilisateurs
    function getLesUtilisateurs() {
        try {
            $connexion = BDDConnexionPDO();
            $lesUtils = $connexion->query("SELECT * FROM Utilisateur");
            $lesUtils->setFetchMode(PDO::FETCH_OBJ);
            return $lesUtils;
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer un utilisateur grâce à son id
    function getUnUtilisateurId($id) {
        try {
            $connexion = BDDConnexionPDO();
            $unUtil = $connexion->prepare("SELECT * FROM Utilisateur WHERE idUtil = ?");
            $unUtil->execute(array($id));
            $unUtil->setFetchMode(PDO::FETCH_OBJ);
            return $unUtil->fetch();
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Récuperer un utilisateur grâce à son email
    function getUnUtilisateurEmail($email) {
        try {
            $connexion = BDDConnexionPDO();
            $unUtil = $connexion->prepare("SELECT * FROM Utilisateur WHERE emailUtil = ?");
            $unUtil->execute(array($email));
            $unUtil->setFetchMode(PDO::FETCH_OBJ);
            return $unUtil->fetch();
        } catch(PDOException $e) {
            die('Erreur'.$e->getMessage());
        }
    }

    // Inscription d'un utilisateur
    function registerUtilisateur($nomUtil,$prenomUtil,$emailUtil,$passwordUtil,$etabUtil,$roleUtil) {
        try	{
            $connexion = BDDConnexionPDO();
            $reqRegister = $connexion->prepare("INSERT INTO Utilisateur (nomUtil,prenomUtil,idRoles,emailUtil,passwordUtil,etablissementUtil) VALUES (?,?,?,?,?,?)"); 
            $reqRegister->execute(array($nomUtil,$prenomUtil,$roleUtil,$emailUtil,$passwordUtil,$etabUtil));
            return $reqRegister; 
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        }
    }

    function getUnRoleById($idRole) {
        try {
            $connexion = BDDConnexionPDO();
            $unRole = $connexion->prepare("SELECT * FROM RolesUtilisateur WHERE idRoles = ?");
            $unRole->execute(array($idRole));
            $unRole->setFetchMode(PDO::FETCH_OBJ);
            return $unRole->fetch();
        } catch(PDOException $e) {
            die('Erreur'. $e->getMessage());
        }
    }
?>