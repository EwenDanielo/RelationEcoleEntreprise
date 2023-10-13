<h2 class="ml-2">Modification du dispositif "<?php echo $leDispositif->nomD ?>"</h2>

<form action="" method="POST" class="needs-validation p-4 rounded" novalidate>
    <div class="form-group row mb-2">
        <label for="idD" class="col-sm-2 col-form-label"><b>Identifiant du dispositif :</b></label>
        <div class="col-sm-10">
            <input type="text" disabled="disabled" class="form-control" id="idD" name="idD" value="<?php echo $leDispositif->idD ?>" required>
            <div class="invalid-feedback">Veuillez entrer le nom du dispositif</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="nomD" class="col-sm-2 col-form-label"><b>Nom du dispositif :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomD" name="nomD" value="<?php echo $leDispositif->nomD ?>" required>
            <div class="invalid-feedback">Veuillez entrer le nom du dispositif</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="libD" class="col-sm-2 col-form-label"><b>Description :</b></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="libD" name="libD" required><?php echo $leDispositif->libD ?></textarea>
            <div class="invalid-feedback">Veuillez renseigner une description</div>
        </div>
    </div>
    </div>
    <div class="form-group row mb-2">
        <label for="objPedaD" class="col-sm-2 col-form-label"><b>Objectif(s) Pédagogique(s) :</b></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="objPedaD" name="objPedaD" rows="3" required><?php echo $leDispositif->objPedaD ?></textarea>
            <div class="invalid-feedback">Veuillez entrer des objectif(s) pédagogique(s)</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="dateDebD" class="col-sm-2 col-form-label"><b>Date de début :</b></label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="dateDebD" name="dateDebD" value="<?php echo $leDispositif->dateDebD ?>" required>
            <div class="invalid-feedback">Veuillez entrer une date de début</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="dateFinD" class="col-sm-2 col-form-label"><b>Date de fin :</b></label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="dateFinD" name="dateFinD" value="<?php echo $leDispositif->dateFinD ?>" required>
            <div class="invalid-feedback">Veuillez entrer une date de fin</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="modaliteD" class="col-sm-2 col-form-label"><b>Modalité(s) :</b></label>
        <div class="col-sm-10">
            <input  type="text" class="form-control" id="modaliteD" name="modaliteD" value="<?php echo $leDispositif->modaliteD ?>" required>
            <div class="invalid-feedback">Veuillez entrer des objectifs pédagogiques</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="lienSiteD" class="col-sm-2 col-form-label"><b>Lien du site :</b></label>
        <div class="col-sm-10">
            <input type="url" class="form-control" id="lienSiteD" name="lienSiteD" value="<?php echo $leDispositif->lienSiteD ?>" required>
            <div class="invalid-feedback">Veuillez entrer un lien valide</div>
        </div>
    </div><br>
    <button type="submit" class="btn btn-success">Modifier le dispositif</button>
</form>