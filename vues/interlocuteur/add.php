<h2 class="ml-2">Ajout d'un dispositifs dans la base</h2>

<form action="" method="POST" class="needs-validation p-4 rounded" novalidate>
    <div class="form-group row mb-2">
        <label for="nomInter" class="col-sm-2 col-form-label"><b>Nom de l'interlocuteur :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomInter" name="nomInter" required>
            <div class="invalid-feedback">Veuillez entrer le nom de l'interlocuteur</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="prenomInter" class="col-sm-2 col-form-label"><b>Prénom  de l'interlocuteur :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="prenomInter" name="prenomInter" required>
            <div class="invalid-feedback">Veuillez renseigner le prenom de l'interlocuteur</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="posteInter" class="col-sm-2 col-form-label"><b>Poste de l'interlocuteur :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="posteInter" name="posteInter" required>
            <div class="invalid-feedback">Veuillez entrer le poste de l'interlocuteur</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="emailInter" class="col-sm-2 col-form-label"><b>Email de l'interlocuteur :</b></label>
        <div class="col-sm-10">
            <input  type="email" class="form-control" id="emailInter" name="emailInter" required>
            <div class="invalid-feedback">Veuillez entrer l'email de l'interlocuteur</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="telInter" class="col-sm-2 col-form-label"><b>Telephone de l'interlocuteur :</b></label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="telInter" name="telInter" required>
            <div class="invalid-feedback">Veuillez entrer un lien valide</div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Ajouter le dispositif</button>
</form>

