<div class="titleEntDetail">
    <?php echo $lEnt->nomEnt ?>
</div>
<div class="divContainerEnt">
    <div class="divSousTitleEnt">
        <b>Description de l'entreprise :</b>
    </div>
    <div class="divContenuEnt">
        <?php echo $lEnt->libEnt ?>
    </div>
</div>
<div class="row" style="margin : 15px 0 0 0;">
    <div class="divContainerEnt col-3">
        <div class="divSousTitleEnt">
            <b>Adresse :</b>
        </div>
        <div class="divContenuEnt">
            <?php echo $lEnt->adrEnt ?>
        </div>
    </div>
    <div class="divContainerEnt col-3">
        <div class="divSousTitleEnt">
            <b>Ville :</b>
        </div>
        <div class="divContenuEnt">
            <?php echo $lEnt->villeEnt ?>
        </div>
    </div>
    <div class="divContainerEnt col-3">
        <div class="divSousTitleEnt">
            <b>Code Postal :</b>
        </div>
        <div class="divContenuEnt">
            <?php echo $lEnt->cpEnt ?>
        </div>
    </div>
</div>
<div class="row" style="margin : 15px 0 0 0;">
    <div class="divContainerEnt col-3">
        <div class="divSousTitleEnt">
            <b>Dispositifs proposés :</b>
        </div>
        <div class="divContenuEnt">
            <?php echo $lEnt->adrEnt ?>
        </div>
    </div>
    <div class="divContainerEnt col-3">
        <div class="divSousTitleEnt">
            <b>Classe concernée :</b>
        </div>
        <div class="divContenuEnt"><ul>
            <?php 
            while ($uneClasse = $lesClasses->fetch()) { ?>
                <li><?php echo $uneClasse->libClasse ?></li>
            <?php } ?>
        </ul></div>
    </div>
    <div class="divContainerEnt col-3">
        <div class="divSousTitleEnt">
            <b>Élèves porteur de handicap :</b>
        </div>
        <div class="divContenuEnt">
            <?php
            if ($lEnt->handicapEnt) { ?>
                Oui
            <?php } else { ?>
                Non
            <?php } ?>
        </div>
    </div>
</div>
<div class="divContainerEntContact">
    <div class="divSousTitleEnt">
        <b>Contact :</b>
    </div>
    <div class="divContactEnt">
        <?php while ($unContact = $lesContacts->fetch()) { ?>
            <div style="padding : 0 10px 0 10px;"><ul class="list-unstyled">
                <div>
                    <li><i class="bi bi-caret-right-fill" style="font-size : 16px"></i> Identité : <?php echo $unContact->nomC." ".$unContact->prenomC ?></li>
                    <li><i class="bi bi-caret-right-fill" style="font-size : 16px"></i> Poste : <?php echo $unContact->posteC ?></li>
                    <li><i class="bi bi-caret-right-fill" style="font-size : 16px"></i> Email : <?php echo $unContact->emailC ?></li>
                </div>
                <div style="margin : 10px 0 0 0;">
                    <li><i class="bi bi-caret-right-fill" style="font-size : 16px"></i> Tel : <?php echo $unContact->telC ?></li>
                    <li><i class="bi bi-caret-right-fill" style="font-size : 16px"></i> Email : <?php echo $unContact->portableC ?></li>
                </div>
            </ul></div>
        <?php } ?>
    </div>
</div>
<div id="accordion" style="margin : 15px 30px 30px 50px;">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <b>Stage présenté par l'entreprise :</b>
                </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <?php while ($unStage = $lesStages->fetch()) { ?>
                    <div style="padding : 10px 0 10px 15px;">
                        <div><b><?php echo $unStage->intituleS ?></b></div>
                        <div style="padding : 5px 0 0 15px;">
                            <div>Description : <?php echo $unStage->libS ?></div>
                            <div>Date : <?php echo "Du ".formatDate($unStage->dateDebS)." au ".formatDate($unStage->dateFinS) ?></div>
                            <div>Domaine : <?php echo $unStage->domaineActS ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b>Alternance :</b>
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <?php while ($uneAlternance = $lesAlternances->fetch()) { ?>
                    <div style="padding : 10px 0 10px 15px;">
                        <div><b><?php echo $uneAlternance->intituleA ?></b></div>
                        <div style="padding : 5px 0 0 15px;">
                            <div>Description : <?php echo $uneAlternance->libA ?></div>
                            <div>Date : <?php echo "Du ".formatDate($uneAlternance->dateDebA)." au ".formatDate($uneAlternance->dateFinA) ?></div>
                            <div>Domaine : <?php echo $uneAlternance->domaineActA ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <b>Visite d'entreprise :</b>
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <?php while ($uneVisite = $lesVisites->fetch()) { ?>
                    <div style="padding : 10px 0 10px 15px;">
                        <div><b><?php echo $uneVisite->intituleV ?></b></div>
                        <div style="padding : 5px 0 0 15px;">
                            <div>Description : <?php echo $uneVisite->libV ?></div>
                            <div>Nombre de places : <?php echo $uneVisite->nbPlacesV ?></div>
                            <?php $leMetier = getUnMetierByIdVisite($uneVisite->idV) ?>
                            <div>Métier présenté : <?php echo $leMetier->intituleMetier ?></div>
                            <div>Durée : <?php echo timestampToHour($uneVisite->tempsEstimeV) ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <b>Intervention en classe :</b>
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <?php while ($uneIntervention = $lesInterventions->fetch()) { ?>
                    <div style="padding : 10px 0 10px 15px;">
                        <div><b><?php echo $uneIntervention->intituleIntervention ?></b></div>
                        <div style="padding : 5px 0 0 15px;">
                            <div>Description : <?php echo $uneIntervention->libIntervention ?></div>
                            <?php $leMetier = getUnMetierByIdIntervention($uneIntervention->idIntervention) ?>
                            <div>Métier présenté : <?php echo $leMetier->intituleMetier ?></div>
                            <div>Durée : <?php echo timestampToHour($uneIntervention->dureeIntervention) ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="divContainerEnt">
    <a class="btn btn-primary" href="<?php echo WEBROOT.'entreprise/index' ?>" style="margin : 0 0 20px 0">Retour à la liste</a>
</div>