<div class="divGlobalConsult">
    <?php
    $lesEntreprises = getLesEntreprises();
    while ($uneEnt = $lesEntreprises->fetch()) { ?>
        <div class="divContainerConsult">
            <div class="infoConsult">
                <div class="nameConsult">
                    <?php echo $uneEnt->nomEnt; ?>
                </div>
                <div class="paragrapheConsult">
                    Ville : <?php echo $uneEnt->villeEnt ?>
                </div>
                <div class="paragrapheConsult">
                    Classe acceptée :
                    <ul class="listInter">
                        <?php
                        $lesClassesByEnt = getLesClassesByIdEnt($uneEnt->idEnt);
                        while ($uneClasseByEnt = $lesClassesByEnt->fetch()) { ?>
                            <li><?php echo ($uneClasseByEnt->libClasse) ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="btnInfoSuppConsult">
                <form action="<?php echo WEBROOT.'entreprise/detail' ?>" method="post">
                    <input type="hidden" name="idEnt" value="<?php echo $uneEnt->idEnt ?>">
                    <div>
                        <button type="submit" class="btn"><i class="bi bi-info-circle" style="font-size:50px;"></i></a>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
<div class="divContainerEnt">
    <a class="btn btn-primary" href="<?php echo WEBROOT.'accueil/index' ?>" style="margin : 0 0 20px 0">Retour à l'accueil</a>
</div>






<!-- <div class="filterEnt">
    <form action="">
        <script type="text/javascript">
            $('#selectClasse').multiselect();
        </script>
        <div class="filterClasse">
            <select id="selectClasse" class="filterClasse" multiple="multiple">
                <?php
                $lesClasses = getLesClasses();
                while ($uneClasse = $lesClasses->fetch()) { ?>
                    <option value="<?php echo $uneClasse->idClasse ?>"><?php echo $uneClasse->libClasse ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="filterZone">
                <div class="textFilter" style="width:300px;">
                    Zone géographique
                </div>
                <div class="caretFilter">
                    <i class="bi bi-caret-down-fill"></i>
                </div>
            </div>
            <div class="filterHandicap">
                <div class="textFilter" style="width:325px;">
                    Élève porteur de handicap
                </div>
            </div>
            <div class="btnResearchFilter"><button class="btn" style="font-size:25px;"><i class="bi bi-search"></i></button></div>
        </form>
</div> -->