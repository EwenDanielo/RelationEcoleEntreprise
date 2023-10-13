<h2 class="ml-2">Ajout d'une alternance dans la base</h2>

<form action="" method="POST" class="needs-validation p-4 rounded" novalidate>
    <div class="form-group row mb-2">
        <label for="idClasseA" class="col-sm-2 col-form-label"><b>Classe :</b></label>
        <div class="col-sm-10">
            <select class="form-control" id="idClasseA" name="idClasseA" required>
                <option value="">Choisir une classe</option>
                <?php  while ($uneClasse = $lesClasses->fetch()) { ?>
                    <option value="<?php echo $uneClasse->idClasse ?>"><?php echo $uneClasse->libClasse ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">Veuillez choisir une classe.</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="idSecteurA" class="col-sm-2 col-form-label"><b>Secteur :</b></label>
        <div class="col-sm-10">
            <select class="form-control" id="idSecteurA" name="idSecteurA" required>
                <option value="">Choisir un secteur</option>
                <?php  while ($unSecteur = $lesSecteurs->fetch()) { ?>
                    <option value="<?php echo $unSecteur->idSecteur ?>"><?php echo $unSecteur->nomSecteur ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">Veuillez choisir un secteur</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="idEntA" class="col-sm-2 col-form-label"><b>Entreprise :</b></label>
        <div class="col-sm-10">
            <select class="form-control" id="idEntA" name="idEntA" required>
                <option value="">Choisir une entreprise</option>
                <?php  while ($uneEntreprise = $lesEntreprises->fetch()) { ?>
                    <option value="<?php echo $uneEntreprise->idEnt ?>"><?php echo $uneEntreprise->nomEnt ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">Veuillez choisir une entreprise</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="intituleA" class="col-sm-2 col-form-label"><b>Intitule de l'offre :</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="intituleA" name="intituleA" required>
            <div class="invalid-feedback">Veuillez entrer l'intitule de l'alternance</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="libA" class="col-sm-2 col-form-label"><b>Description de l'offre :</b></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="libA" name="libA" rows="3" required></textarea>
            <div class="invalid-feedback">Veuillez entrer une description de l'offre</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="dateDebA" class="col-sm-2 col-form-label"><b>Date de début :</b></label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="dateDebA" name="dateDebA" required>
            <div class="invalid-feedback">Veuillez entrer une date de début</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="dateFinA" class="col-sm-2 col-form-label"><b>Date de fin :</b></label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="dateFinA" name="dateFinA" required>
            <div class="invalid-feedback">Veuillez entrer une date de fin</div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="domaineActA" class="col-sm-2 col-form-label"><b>Domaine d'activité de l'offre:</b></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="domaineActA" name="domaineActA" required>
            <div class="invalid-feedback">Veuillez entrer un domaine d'activité</div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Ajouter l'offre d'alternance</button>
</form>