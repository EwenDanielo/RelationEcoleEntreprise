<div class="table100 ver5 m-b-110" style="margin : 0 15px 0 15px;">
    <div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                    <th class="cell100" width="15%">Identifiant Dispositif</th>
                    <th class="cell100" width="20%">Nom du dipositif</th>
                    <th class="cell100" width="20%">Date début</th>
                    <th class="cell100" width="20%">Date fin</th>
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
                while ($unDispositif = $lesDispositifs->fetch()) {
                ?>
                    <tr class="row100">
                        <td class="cell100" width="15%" align="center"><?php echo $unDispositif->idD ?></td>
                        <td class="cell100" width="20%"><?php echo $unDispositif->nomD ?></td>
                        <td class="cell100" width="20%"><?php echo date("d-m-Y", strtotime($unDispositif->dateDebD)) ?></td>
                        <td class="cell100" width="20%"><?php echo date("d-m-Y", strtotime($unDispositif->dateFinD)) ?></td>
                        <td class="cell100" width="15%">
                            <div class="d-flex flex-row">
                                <div class="p-1">
                                    <a class="btn btn-primary" href="<?php echo WEBROOT.'dispositif/update/'.$unDispositif->idD ?>"><i class="bi bi-pencil-square"><?php $_SESSION['idurl'] = $unDispositif->idD ?></i></a>
                                </div>
                                <div class="p-1">
                                    <a class="btn btn-danger" href="<?php echo WEBROOT.'dispositif/delete/'.$unDispositif->idD ?>"><i class="bi bi-trash-fill"><?php $_SESSION['idurl'] = $unDispositif->idD ?></i></a>
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