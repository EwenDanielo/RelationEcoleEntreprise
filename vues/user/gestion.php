<div class="table100 ver5 m-b-110" style="margin : 0 15px 0 15px;">
    <div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                    <th class="cell100" width="15%">Identifiant Utilisateur</th>
                    <th class="cell100" width="20%">Nom Prénom</th>
                    <th class="cell100" width="15%">Établissement</th>
                    <th class="cell100" width="15%">Role Utilisateur</th>
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
                while ($unUtil = $lesUtils->fetch()) {
                ?>
                    <tr class="row100">
                        <td class="cell100" width="15%" align="center"><?php echo $unUtil->idUtil ?></td>
                        <td class="cell100" width="20%"><?php echo $unUtil->nomUtil." ".$unUtil->prenomUtil ?></td>
                        <td class="cell100" width="15%"><?php echo $unUtil->emailUtil ?></td>
                        <?php $leRole = getUnRoleById($unUtil->idRoles); ?>
                        <td class="cell100" width="15%"><?php echo $leRole->libRoles ?></td>
                        <td class="cell100" width="15%">
                            <div class="d-flex flex-row">
                                <div class="p-1">
                                    <form action="<?php echo WEBROOT.'dispositif/update' ?>" method="POST">
                                        <input type="hidden" id="idSUpdate" name="idSUpdate" value="<?php echo $unUtil->idS ?>">
                                        <span><button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></span>
                                    </form>
                                </div>
                                <div class="p-1">
                                    <form action="<?php echo WEBROOT.'dispositif/delete' ?>" method="POST">
                                        <input type="hidden" id="idSDelete" name="idSDelete" value="<?php echo $unUtil->idS ?>">
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