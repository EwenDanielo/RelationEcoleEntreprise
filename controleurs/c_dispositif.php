<?php
    require_once("modeles/m_dispositif.php");
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
            $unDisp = getUnDispositif(intval($_POST['idD']));
            $lesInters = getLesInterlocuteurs($unDisp->idD);
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function gestion() {
        if (isConnect() && isAdmin()) {
            $lesDispositifs = getLesDispositifs();
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function show() {
        if (isConnect() && isAdmin()) {
            $lesDispositifs = getLesDispositifs();
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function add() {
        $filteredInsertD = filter_input_array(INPUT_POST, [
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
            if ($_SERVER['REQUEST_METHOD'] != 'POST') { 
                include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');}
            else{
                if(setAjoutDispositif($filteredInsertD['nomD'], $filteredInsertD['libD'], $filteredInsertD['objPedaD'], $_POST['dateDebD'], $_POST['dateFinD'], $filteredInsertD['modaliteD'], $filteredInsertD['lienSiteD'])){
                    header("Location:".WEBROOT."/".$_SESSION['controleur']."/gestion");
                }

            }
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function update() {
        $filteredUpdateD = filter_input_array(INPUT_POST, [
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
            if ($_SERVER["REQUEST_METHOD"] != "POST") {
                $leDispositif = getUnDispositif($_SESSION["idurl"]);
                include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
            } else {
                if (setUpdateDispositif($filteredUpdateD['nomD'], $filteredUpdateD['libD'], $filteredUpdateD['objPedaD'], $_POST['dateDebD'], $_POST['dateFinD'], $filteredUpdateD['modaliteD'], $filteredUpdateD['lienSiteD'], $filteredUpdateD['idD'])) {
                    header("Location:".WEBROOT."/".$_SESSION['controleur'].'/gestion');
                }
            }
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }

    function delete() {
        if (isConnect() && isAdmin()) {
            $leDispositif = getUnDispositif($_SESSION["idurl"]);
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php'); 
        } else {
            header("Location:".WEBROOT."user/index");
        }
    }
?>