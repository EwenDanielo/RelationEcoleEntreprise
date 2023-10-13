<?php 
    declare(strict_types=1);
    session_start();
    ob_start();
    require_once("vues/fonctions.php");
    define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="ewen_dnl">
        <meta name="descriptioƒn" content="">

        <title>REE / Entreprise</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo WEBROOT.'public/css/bootstrap-5.3.0/bootstrap.min.css'; ?>" rel="stylesheet">
        <!-- Bootstrap icons -->
        <link href="<?php echo WEBROOT.'public/css/bootstrap-icons-1.10.3/bootstrap-icons.css'; ?>" rel="stylesheet">

        <!-- Police d'écriture (Inter) -->
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

        <!-- Style personnalisé -->
        <link href="<?php echo WEBROOT.'public/css/style.css' ?>" rel="stylesheet" >

        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo WEBROOT.'public/js/jquery/jquery/dist/jquery.js' ?>"></script>
        <script src="<?php echo WEBROOT.'public/js/bootstrap-5.3.0/bootstrap.min.js' ?>"></script>
        
        <!-- JavaScript personnalisé -->
        <script src="<?php echo WEBROOT.'public/js/script.js'; ?>"></script>

        <?php $parametres=explode('/', $_GET['page']); ?>
    </head>
    <body>
        <?php
        if (!isset($_GET['page']) || ($_GET['page']==''))
        header('location:'.WEBROOT.'user/index');
        $_SESSION['controleur']=$parametres[0];
        $_SESSION['action']=isset($parametres[1]) ? $parametres[1] : 'index';
        $_SESSION['idurl']=isset($parametres[2]) ? $parametres[2] : null; 
        include ('controleurs/c_'.$_SESSION['controleur'].'.php');
        ?>
    </body>
</html>