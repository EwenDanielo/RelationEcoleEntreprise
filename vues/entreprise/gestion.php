<div class="table100 ver5 m-b-110" style="margin : 0 15px 0 15px;">
    <div class="table100-head">
        <table>
            <thead>
                    <tr class="row100 head">
                    <th class="cell100" width="15%">Identifiant de l'entreprise</th>
                    <th class="cell100" width="25%">Nom de l'entreprise</th>
                    <th class="cell100" width="20%">Ville</th>
                    <th class="cell100" width="20%">Domaine</th>
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
                while ($uneEntreprise = $lesEntreprises->fetch()) {
                ?>
                    <tr class="row100">
                        <td class="cell100" width="15%" align="center"><?php echo $uneEntreprise->idEnt ?></td>
                        <td class="cell100" width="25%"><?php echo $uneEntreprise->nomEnt ?></td>
                        <td class="cell100" width="20%"><?php echo $uneEntreprise->villeEnt ?></td>
                        <?php $leDomaine = getUneEntreprise($uneEntreprise->idEnt); ?>
                        <td class="cell100" width="20%"><?php echo $uneEntreprise->domaineEnt ?></td>
                        <td class="cell100" width="15%">
                            <div class="d-flex flex-row">
                                <div class="p-1">
                                    <a class="btn btn-primary" href="<?php echo WEBROOT.'entreprise/update/'.$uneEntreprise->idEnt ?>"><i class="bi bi-pencil-square"><?php $_SESSION['idurl'] = $uneEntreprise->idEnt ?></i></a>
                                </div>
                                <div class="p-1">
                                    <form action="<?php echo WEBROOT.'dispositif/delete' ?>" method="POST">
                                        <input type="hidden" name="idDDelete" value="<?php echo $uneEntreprise->idD ?>">
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