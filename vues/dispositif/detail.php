<div class="titleDispDetail">
    <?php echo $unDisp->nomD ?>
</div>
<div class="divContainerDisp">
    <div class="divSousTitleDisp">
        Descriptif :
    </div>
    <div class="divContenuDisp">
        <?php echo $unDisp->libD ?>
    </div>
</div>
<div class="divContainerDisp">
    <div class="divSousTitleDisp">
        Interlocuteur :
    </div>
    <div class="divInterDisp">
        <?php while ($unInter = $lesInters->fetch()) { ?>
            <div style="padding : 0 10px 0 10px;"><ul>
                <div>
                    <li>Poste : <?php echo $unInter->posteInter ?></li>
                    <?php if (!($unInter->nomInter === null) && !($unInter->prenomInter === null)) { ?>
                        <li>Nom : <?php echo $unInter->nomInter ?></li>
                        <li>Prenom : <?php echo $unInter->prenomInter ?></li>
                    <?php } ?>
                </div>
                <div style="margin : 10px 0 0 0;">
                    <li>Tel : <?php echo $unInter->telInter ?></li>
                    <li>Email : <?php echo $unInter->emailInter ?></li>
                </div>
            </ul></div>  
        <?php } ?>
    </div>
</div>
<div class="divContainerDisp">
    <div class="divSousTitleDisp">
        Calendrier :
    </div>
    <div class="divContenuDisp">
        Du <?php echo formatDate($unDisp->dateDebD) ?> au <?php echo formatDate($unDisp->dateFinD) ?>
    </div>
</div>
<div class="divContainerDisp">
    <div class="divSousTitleDisp">
        Modalités de mise en œuvre :
    </div>
    <div class="divContenuDisp">
        <?php echo $unDisp->modaliteD ?>
    </div>
</div>
<div class="divContainerDisp">
    <div class="divSousTitleDisp">
        <b>Site externe du dispositif :</b>
    </div>
    <div class="divContenuDisp">
        <a href="https://<?php echo $unDisp->lienSiteD ?>"><?php echo $unDisp->lienSiteD ?></a>
    </div>
</div>
<div class="divContainerEnt">
    <a class="btn btn-primary" href="<?php echo WEBROOT.'dispositif/index' ?>" style="margin : 20px 0 20px 0">Retour à la liste</a>
</div>