<h2 id="titlePage">Bienvenue sur le site de la relation École-Entrepise en Mayenne</h2>
<div class="row justify-content-around">
    <div class="col-6">
        <ul class="list-unstyled list-inline">
            <li><a href="<?php echo WEBROOT.'dispositif/index' ?>" class="linkAccueil"><i class="bi bi-caret-right-fill"></i>Les dispositifs de la REE</a></li>
            <li><a href="<?php echo WEBROOT.'entreprise/index' ?>" class="linkAccueil"><i class="bi bi-caret-right-fill"></i>Liens École-Entreprise</a></li>
        </ul>    
    </div>
    <div class="col-4">
        <div class="divProfil text-center w-50">
            <div class="titleProfil">Mon profil</div>
            <div class="text-start pb-2"><?php echo $_SESSION['nomUtil']." ". $_SESSION['prenomUtil'] ?></div>
            <div class="text-start pb-2">
                <?php if ($_SESSION['rolesUtil'] == 1) { ?>
                    <a href="<?php echo WEBROOT.'accueil/gestion' ?>" class="btn btn-secondary">Gestion</a>
                <?php } ?>
            </div>
            <a href="<?php echo WEBROOT.'user/logout' ?>" class="btn btn-primary">Deconnexion</a>
        </div>
    </div>        
</div>