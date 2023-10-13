<div class="table100 ver5 m-b-110" style="margin : 0 15px 0 15px;">
    <div class="table100-head">
        <table>
            <thead>
                    <tr class="row100 head">
                    <th class="cell100" width="15%">Identifiant</th>
                    <th class="cell100" width="20%">Nom/Prenom</th>
                    <th class="cell100" width="15%">Poste</th>
                    <th class="cell100" width="30%">Email</th>
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
                while ($unInterlocuteur = $lesInterlocuteurs->fetch()) {
                ?>
                    <tr class="row100">
                        <td class="cell100" width="15%" align="center"><?php echo $unInterlocuteur->idInter ?></td>
                        <td class="cell100" width="20%"><?php echo $unInterlocuteur->nomInter." ".$unInterlocuteur->prenomInter ?></td>
                        <td class="cell100" width="15%"><?php echo $unInterlocuteur->posteInter ?></td>
                        <td class="cell100" width="30%"><?php echo $unInterlocuteur->emailInter ?></td>
                        <td class="cell100" width="15%">
                            <div class="d-flex flex-row">
                                <div class="p-1">
                                    <form action="<?php echo WEBROOT.'/'.$_SESSION['controleur'].'/update' ?>" method="POST">
                                        <input type="hidden" id="idInterUpdate" name="idInterUpdate" value="<?php echo $unInterlocuteur->idD ?>">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                    </form>
                                </div>
                                <div class="p-1">
                                    <form action="<?php echo WEBROOT.'/'.$_SESSION['controleur'].'/delete' ?>" method="POST">
                                        <input type="hidden" id="idInterDelete" name="idInterDelete" value="<?php echo $unInterlocuteur->idD ?>">
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
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