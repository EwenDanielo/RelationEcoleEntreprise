<?php 
    require_once("modeles/m_stage.php");
    require_once("modeles/m_entreprise.php");
    require_once("modeles/m_classe.php");
    $_SESSION['action']();

    if (!isAdmin()) {
        header("Location:".WEBROOT."accueil/index");
    }

    function gestion() {
        $lesStages = getLesStages();
        include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
    }

    function add() {
        $filteredInsertA = filter_input_array(INPUT_POST, [
            'idClasseS' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'idSecteurS' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'idEntS' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'intituleS' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'libS' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'domaineActS' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
        ]);
        if (isConnect() && isAdmin()) {
            if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                $lesClasses = getLesClasses();
                $lesSecteurs = getLesSecteurs();
                $lesEntreprises = getLesEntreprises();
                include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');}
            else{
                if(setAjoutAlternance($filteredInsertA['idClasseS'],$filteredInsertA['idSecteurS'],$filteredInsertA['idEntS'],$filteredInsertA['intituleS'],$filteredInsertA['libS'],$_POST['dateDebS'],$_POST['dateFinS'],$filteredInsertA['domaineActS'])) {
                    header("Location:".WEBROOT."/".$_SESSION['controleur']."/gestion");
                }
            }
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function update() {
        $filteredUpdateA = filter_input_array(INPUT_POST, [
            'idD' => [
                'filter' => FILTER_VALIDATE_INT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'nomD' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'libD' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'objPedaD' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'modaliteD' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'lienSiteD' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ]
        ]);
        if (isConnect() && isAdmin()) {
            if ($filteredUpdateA['idD'] != null && $_SERVER["REQUEST_METHOD"] != "POST") {
                var_dump($_POST['idUpdateD']);
                $leDispositif = getUnDispositif($_POST["idDUpdate"]);
                include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
            } else {
                if (setUpdateDispositif($filteredUpdateA['nomD'], $filteredUpdateA['libD'], $filteredUpdateA['objPedaD'], $_POST['dateDebD'], $_POST['dateFinD'], $filteredUpdateA['modaliteD'], $filteredUpdateA['lienSiteD'], $_POST['idD'])) {
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
            $leDispositif = getUnDispositif($_POST["idDDelete"]);
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }
?>