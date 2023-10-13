<?php 
    require_once("modeles/m_intervention.php");
    require_once("modeles/m_entreprise.php");
    require_once("modeles/m_classe.php");
    $_SESSION['action']();

    if (!isAdmin()) {
        header("Location:".WEBROOT."accueil/index");
    }

    function gestion() {
        $lesInterventions = getLesInterventions();
        include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
    }

    function add() {
        $filteredInsertInter = filter_input_array(INPUT_POST, [
            'nomInter' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'prenomInter' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'posteInter' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'emailInter' => [
                'filter' => FILTER_VALIDATE_EMAIL,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'telInter' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ]
        ]);
        if (isConnect() && isAdmin()) {
            if ($_SERVER['REQUEST_METHOD'] != 'POST') { 
                include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');}
            else{
                if(setAjoutInterlocuteur($filteredInsertInter['nomInter'], $filteredInsertInter['prenomInter'], $filteredInsertInter['posteInter'], $filteredInsertInter['emailInter'], $filteredInsertInter['telInter'])) {
                    header("Location:".WEBROOT."/".$_SESSION['controleur']."/gestion");
                }
            }
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }
?>