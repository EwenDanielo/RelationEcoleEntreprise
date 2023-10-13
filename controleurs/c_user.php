<?php 
    require_once("modeles/m_user.php");
    $_SESSION['action']();

    function index() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_SESSION['idUtil']))) { 
            session_unset();
            session_destroy();
            header("Location:".WEBROOT."user/index");
        }
        $filteredInputs = filter_input_array(INPUT_POST, [
            'emailConn' => [
                'filter' => FILTER_VALIDATE_EMAIL,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'passConn' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ]
        ]);
        if (($_SERVER["REQUEST_METHOD"] == "POST") && (!isset($_SESSION['idUtil']))) {
            $lesUtils=getLesUtilisateurs();
            while ($unUtil = $lesUtils->fetch()) {
                if (($filteredInputs['emailConn'] == $unUtil->emailUtil) && (password_verify($filteredInputs['passConn'], $unUtil->passwordUtil))) {
                    $_SESSION['idUtil'] = $unUtil->idUtil;
                    $_SESSION['nomUtil'] = $unUtil->nomUtil;
                    $_SESSION['prenomUtil'] = $unUtil->prenomUtil;
                    $_SESSION['rolesUtil'] = $unUtil->idRoles;
                    $_SESSION['emailUtil'] = $unUtil->emailUtil;
                    $_SESSION['passwordUtil'] = $unUtil->passwordUtil;
                    header("Location:".WEBROOT."accueil/index");
                }
            }
        }
        // header("Location:".WEBROOT."user/index");
        include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
    }

    function register() {
        $filteredInputs = filter_input_array(INPUT_POST, [
            'regNom' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'regPrenom' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'regEmail' => [
                'filter' => FILTER_VALIDATE_EMAIL, // Filtre pour e-mail
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'regEtab' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ],
            'regPassword' => [
                'filter' => FILTER_DEFAULT,
                'flags' => FILTER_REQUIRE_SCALAR,
            ]
        ]);
        if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['regNom']))) {
            if (preg_match("/[a-zA-Z]/", $filteredInputs['regNom'])) {
                if (preg_match("/[a-zA-Z]/", $filteredInputs['regPrenom'])) {
                    if (preg_match(prefixeEmail($filteredInputs['regEmail'])."ac-nantes.fr/", $filteredInputs['regEmail'])) {
                        if (preg_match("/[a-zA-Z]/", $filteredInputs['regEtab'])) {
                            if (preg_match("/[a-zA-Z]/", $filteredInputs['regPassword'])) {
                                registerUtilisateur($filteredInputs['regNom'], $filteredInputs['regPrenom'], $filteredInputs['regEmail'], password_hash($filteredInputs['regPassword'], PASSWORD_DEFAULT), $filteredInputs['regEtab'], 2);
                                $lesUtils = getLesUtilisateurs($filteredInputs['regEmail']);
                                while ($unUtil = $lesUtils->fetch()) {
                                    $_SESSION['idUtil'] = $unUtil->idUtil;
                                    $_SESSION['nomUtil'] = $unUtil->nomUtil;
                                    $_SESSION['prenomUtil'] = $unUtil->prenomUtil;
                                    $_SESSION['rolesUtil'] = $unUtil->idRoles;
                                    $_SESSION['emailUtil'] = $unUtil->emailUtil;
                                    $_SESSION['passwordUtil'] = $unUtil->passwordUtil;
                                }
                                header("Location:".WEBROOT."accueil/index");
                            } else {
                                
                                header("Location:".WEBROOT."user/register");
                            }
                        }
                    }
                }
            }
        } else {
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
        }
    }
    function logout() {
        session_unset();
        session_destroy();
        header("Location:".WEBROOT."user/index");
    }

    function prefixeEmail ($email) {
        $prefixe = "";
        $posArobase = strpos($email, '@');
        $prefixe = "/".substr($email, 0, $posArobase + 1);
        return $prefixe;
    }

    function gestion() {
        if (isAdmin()) {
            $lesUtils = getLesUtilisateurs();
            include ('vues/'.$_SESSION['controleur'].'/'.$_SESSION['action'].'.php');
        } else {
            header("Location:".WEBROOT."accueil/index");
        }
    }

?>