<?php 
    function BDDConnexionPDO (){
        $hote = 'localhost';        // Le chemin vers le serveur
        $port = '3306';             // Le port de la base de données
        $nomBd = 'relationREE';     // Le nom de la base de données
        $utilisateur = 'root';      // Le nom d'utilisateur
        $motPasse = '';             // Le mot de passe

        try 
        {
            $connexion = new PDO('mysql:host='.$hote.'; dbname='.$nomBd, $utilisateur, $motPasse);
            $connexion->exec("SET CHARACTER SET utf8");
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
            // Code à effectuer si echec de la connexion
            echo 'Erreur : '.$e->getMessage().'<br>';
            echo 'N° : '.$e->getCode();
            die;
        }
        return $connexion;
    }

    function isConnect() {
        if (isset($_SESSION['idUtil'])) {
            return true;
        } else {
            return false;
        }
    }

    function isAdmin() {
        if ($_SESSION['rolesUtil'] == 1) {
            return true;
        } else {
            return false;
        }
    }

    function formatDate($date) {
        setlocale(LC_TIME, 'fr_FR.utf8','fra');
        $date = date("d F Y");
        return strftime('%d %B %Y',strtotime($date));
    }

    function timestampToHour($timestamp) {
        $hours = (($timestamp - ($timestamp % 3600)) / 3600);
        $minutes = ($timestamp % 3600) / 60;
        return $hours."h".$minutes;
    }
?>