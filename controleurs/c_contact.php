<?php 
    require_once("modeles/m_contact.php");
    require_once("modeles/m_entreprise.php");
    $_SESSION['action']();

    if (!isAdmin()) {
        header("Location:".WEBROOT."accueil/index");
    }

    function gestion() {
        $lesContacts = getLesContacts();
        include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
    }
?>