<div class="table100 ver5 m-b-110" style="margin : 0 15px 0 15px;">
    <div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                    <th class="cell100" width="15%">Identifiant Alternance</th>
                    <th class="cell100" width="20%">Intitule</th>
                    <th class="cell100" width="15%">Secteur d'activité</th>
                    <th class="cell100" width="30%">Nom de l'entreprise</th>
                    <th class="cell100" width="15%">
                        <div class="d-flex flex-row">
                            <div class="p-2">Actions</div>&nbsp;&nbsp;&nbsp;
                            <div><a class="btn btn-success" href="<?php echo WEBROOT.$_SESSION['controleur'].'/add' ?>"><i class="bi bi-plus-circle"></i>&nbsp;Ajouter</a></div>
                        </div>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="table100-body js-pscroll ps ps--active-y">
        <table>
            <tbody>
                <?php 
                while ($unContact = $lesContacts->fetch()) {
                ?>
                    <tr class="row100">
                        <td class="cell100" width="15%" align="center"><?php echo $unContact->idC ?></td>
                        <td class="cell100" width="20%"><?php echo $unContact->nomC." ".$unContact->prenomC ?></td>
                        <?php $lEnt = getUneEntreprise($unContact->idEnt); ?>
                        <td class="cell100" width="15%"><?php echo $lEnt->nomEnt ?></td>
                        <td class="cell100" width="30%"><?php echo $unContact->posteC ?></td>
                        <td class="cell100" width="15%">
                            <div class="d-flex flex-row">
                                <div class="p-1">
                                    <form action="<?php echo WEBROOT.'dispositif/update' ?>" method="POST">
                                        <input type="hidden" id="idDUpdate" name="idDUpdate" value="<?php echo $unContact->idD ?>">
                                        <span><button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></span>
                                    </form>
                                </div>
                                <div class="p-1">
                                    <form action="<?php echo WEBROOT.'dispositif/delete' ?>" method="POST">
                                        <input type="hidden" name="idDDelete" value="<?php echo $unContact->idD ?>">
                                        <button type="submit" class="btn btn-danger" href=""><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="m-3">
    <a class="btn btn-primary" href="<?php echo WEBROOT.'accueil/gestion' ?>">Acceuil (Gestion)</a>
</div>