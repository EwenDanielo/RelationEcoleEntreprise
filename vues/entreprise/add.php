<h2 class="ml-2">Ajout d'une entreprise dans la base</h2>

<form action="" method="POST" class="needs-validation p-4 rounded" novalidate>
    <div class="form-group row mb-2">
        <label for="nomEnt" class="col-sm-2 col-form-label"><b>Nom de l'entreprise :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nomEnt" name="nomEnt" required>
            <div class="invalid-feedback">Veuillez entrer le nom de l'entreprise</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="libEnt" class="col-sm-2 col-form-label"><b>Description :</b></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="libEnt" name="libEnt" required></textarea>
            <div class="invalid-feedback">Veuillez renseigner une description</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="adrEnt" class="col-sm-2 col-form-label"><b>Adresse de l'entreprise :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="adrEnt" name="adrEnt" rows="3" required>
            <div class="invalid-feedback">Veuillez entrer l'adresse de l'entreprise</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="villeEnt" class="col-sm-2 col-form-label"><b>Ville de l'entreprise :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="villeEnt" name="villeEnt" required>
            <div class="invalid-feedback">Veuillez entrer la ville de l'entreprise</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="cpEnt" class="col-sm-2 col-form-label"><b>Code postal :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cpEnt" name="cpEnt" pattern="[0-9]{5}" placeholder="53000" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/g,'');" required>
            <div class="invalid-feedback">Veuillez entrer le code postal de l'entreprise</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="handicapEnt" class="col-sm-2 col-form-label"><b>Élève porteur de handicap :</b></label>
        <div class="col-sm-10 d-flex ">
            <div class="align-self-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="handicapEnt" id="radioHandicapOui" value="1" checked>
                    <label class="form-check-label" for="radioHandicapOui">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="handicapEnt" id="radioHandicapNon" value="0">
                    <label class="form-check-label" for="radioHandicapNon">
                        Non
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="domaineEnt" class="col-sm-2 col-form-label"><b>Lien du site :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="domaineEnt" name="domaineEnt" required>
            <div class="invalid-feedback">Veuillez entrer un lien valide</div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Ajouter le dispositif</button>
</form>

