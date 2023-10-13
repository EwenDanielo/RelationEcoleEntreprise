<h2 class="ml-2">Modification du dispositif "<?php echo $lEntreprise->nomEnt ?>"</h2>

<form action="" method="POST" class="needs-validation p-4 rounded" novalidate>
    <div class="form-group row mb-2">
        <label for="idD" class="col-sm-2 col-form-label"><b>Identifiant du dispositif :</b></label>
        <div class="col-sm-10">
            <input type="text" disabled="disabled" class="form-control" id="idD" name="idD" value="<?php echo $lEntreprise->idEnt ?>" required>
            <div class="invalid-feedback">Veuillez entrer le nom de l'entrepise</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="nomEnt" class="col-sm-2 col-form-label"><b>Nom de l'entreprise :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomEnt" name="nomEnt" value="<?php echo $lEntreprise->nomEnt ?>" required>
            <div class="invalid-feedback">Veuillez entrer le nom du dispositif</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="libEnt" class="col-sm-2 col-form-label"><b>Description :</b></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="libEnt" name="libEnt" required><?php echo $lEntreprise->libEnt ?></textarea>
            <div class="invalid-feedback">Veuillez renseigner une description</div>
        </div>
    </div>
    </div>
    <div class="form-group row mb-2">
        <label for="adrEnt" class="col-sm-2 col-form-label"><b>Adresse :</b></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="adrEnt" name="adrEnt" rows="3" required><?php echo $lEntreprise->adrEnt ?></textarea>
            <div class="invalid-feedback">Veuillez entrer des objectif(s) pédagogique(s)</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="villeEnt" class="col-sm-2 col-form-label"><b>Ville :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="villeEnt" name="villeEnt" value="<?php echo $lEntreprise->villeEnt ?>" required>
            <div class="invalid-feedback">Veuillez entrer une date de début</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="cpEnt" class="col-sm-2 col-form-label"><b>Code postal :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cpEnt" name="cpEnt" value="<?php echo $lEntreprise->cpEnt ?>" required>
            <div class="invalid-feedback">Veuillez entrer une date de fin</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="handicapEnt" class="col-sm-2 col-form-label"><b>Élève de porteur de handicap :</b></label>
        <div class="col-sm-10">
            <input  type="text" class="form-control" id="handicapEnt" name="handicapEnt" value="<?php echo $lEntreprise->handicapEnt ?>" required>
            <div class="invalid-feedback">Veuillez entrer des objectifs pédagogiques</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="domaineEnt" class="col-sm-2 col-form-label"><b>Domaine :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="domaineEnt" name="domaineEnt" value="<?php echo $lEntreprise->domaineEnt ?>" required>
            <div class="invalid-feedback">Veuillez entrer un domaine valide</div>
        </div>
    </div><br>
    <button type="submit" class="btn btn-success">Modifier l'entreprise</button>
</form>