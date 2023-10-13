<?php
    require_once("modeles/m_entreprise.php");
    require_once("modeles/m_domaine.phps");
    require_once("modeles/m_classe.php");
    $_SESSION['action']();

    function index() {
        if (isConnect()) {
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }
    
    function detail() {
        if (isConnect()) {
            $lEnt = getUneEntreprise(intval($_POST['idEnt']));
            $lesContacts = getLesContactByIdEnt($lEnt->idEnt);
            $lesClasses = getLesClassesByIdEnt($lEnt->idEnt);
            $lesStages = getLesStagesByIdEnt($lEnt->idEnt);
            $lesAlternances = getLesAlternancesByIdEnt($lEnt->idEnt);
            $lesVisites = getLesVisiteByIdEnt($lEnt->idEnt);
            $lesInterventions = getLesInterventionsByIdEnt($lEnt->idEnt);
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function gestion() {
        if (isConnect() && isAdmin()) {
            $lesEntreprises = getLesEntreprises();
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function add() {
        $filteredInsertEnt = filter_input_array(INPUT_POST, [
            'nomEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'libEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'adrEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'villeEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'cpEnt' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'handicapEnt' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'domaineEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
        ]);
        if (isConnect() && isAdmin()) {
            if ($_SERVER['REQUEST_METHOD'] != 'POST') { 
                include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');}
            else{
                if(setAjoutEntrerpise($filteredInsertEnt['nomEnt'], $filteredInsertEnt['libEnt'], $filteredInsertEnt['adrEnt'], $filteredInsertEnt['villeEnt'], $_POST['cpEnt'], $filteredInsertEnt['handicapEnt'], $filteredInsertEnt['domaineEnt'])) {
                    header("Location:".WEBROOT."/".$_SESSION['controleur']."/gestion");
                }

            }
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function update() {
        $filteredUpdateEnt = filter_input_array(INPUT_POST, [
            'nomEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'libEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'adrEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'villeEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'cpEnt' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'handicapEnt' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'domaineEnt' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
        ]);
        if (isConnect() && isAdmin()) {
            if ($_SERVER["REQUEST_METHOD"] != "POST") {
                $lEntreprise = getUneEntreprise($_SESSION["idurl"]);
                include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
            } else {
                if (setUpdateDispositif($filteredUpdateEnt['nomD'], $filteredUpdateEnt['libD'], $filteredUpdateEnt['objPedaD'], $_POST['dateDebD'], $_POST['dateFinD'], $filteredUpdateEnt['modaliteD'], $filteredUpdateEnt['lienSiteD'], $_POST['idD'])) {
                    header("Location:".WEBROOT."/".$_SESSION['controleur'].'/gestion');
                } else {

                }
            } 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function delete() {
        if (isConnect() && isAdmin()) {
            $lEntreprise = getUneEntreprise($_SESSION["idurl"]);
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }
    
    function formUpdateDb() {
        if (isConnect()) {
            $lesDomaines = getLesDomaines();
            $lesClasses = getLesClasses();
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }
?>