<?php 
    require_once("modeles/m_classe.php");
    $_SESSION['action']();

    if (!isAdmin()) {
        header("Location:".WEBROOT."accueil/index");
    }

    function gestion() {
        $lesClasses = getLesClasses();
        include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
    }
?>