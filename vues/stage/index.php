<h2 class="titleConsult"><i class="bi bi-caret-down-fill"></i>Les dispositifs de la REE</h2>
<div class="divGlobalConsult">
    <?php
    $lesDisps = getLesDispositifs();
    while ($unDisp = $lesDisps->fetch()) { ?>
        <div class="divContainerConsult">
            <div class="infoConsult">
                <div class="nameConsult">
                    <?php echo $unDisp->nomD; ?>
                </div>
                <div class="paragrapheConsult">
                    Durée : ...
                </div>
                <div class="paragrapheConsult">
                    Interlocuteur :
                    <ul class="listInter">
                        <?php
                        $lesInters = getLesInterlocuteurs($unDisp->idD);
                        while ($unInter = $lesInters->fetch()) { ?>
                            <li><?php echo ($unInter->posteInter) ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="btnInfoSuppConsult">
                <form action="<?php echo WEBROOT.'dispositif/detail' ?>" method="post">
                    <input type="hidden" name="idD" value="<?php echo $unDisp->idD ?>">
                    <div>
                        <button type="submit" class="btn"><i class="bi bi-info-circle" style="font-size:50px;"></i></a>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
<div class="divContainerEnt">
    <a class="btn btn-primary" href="<?php echo WEBROOT.'accueil/index' ?>" style="margin : 0 0 20px 0">Retour à la liste</a>
</div>