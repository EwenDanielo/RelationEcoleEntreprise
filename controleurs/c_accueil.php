<?php
    require_once("modeles/m_accueil.php");
    $_SESSION['action']();
    
    function index() {
        if (isConnect()) {
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }
    
    function gestion() {
        if (isConnect() && isAdmin()) {
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."accueil/index");
        }
    }

?>