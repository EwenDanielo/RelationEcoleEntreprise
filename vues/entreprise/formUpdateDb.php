<div class="m-3">
    <form action="" method="post">
        <h2>Formulaire d'entreprise</h2>
        <div class="mb-3">
            <label for="nomEnt"><b>Nom de l'entreprise :</b></label>
            <input type="text" class="form-control w-25 m-1" id="nomEnt" name="nomEnt" placeholder="Entrez un nom" required>
        </div>
        <div class="mb-3">
            <label for="libEnt" class="form-label"><b>Description :</b></label>
            <textarea type="text" class="form-control m-1" id="libEnt" name="libEnt" placeholder="Entrez une description"></textarea>
        </div>
        <div class="d-flex row mb-3">
            <div class="col-sm-4">
                <label for="adrEnt" class="form-label"><b>Adresse :</b></label>
                <input type="text" class="form-control" id="adrEnt" name="adrEnt" placeholder="Entrez l'adresse de l'entreprise">
            </div>
            <div class="col-sm-4">
                <label for="villeEnt" class="form-label"><b>Ville :</b></label>
                <select class="form-control" id="idDomaineEnt" name="idDomaineEnt" required>
                    <option value="">Choisissez une ville</option>
                    <option value="Mayenne">Mayenne</option>
                    <option value="Château-Gontier">Château-Gontier</option>
                    <option value="Laval">Laval</option>
                    <option value="Évron">Évron</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="cpEnt" class="form-label"><b>Code postal :</b></label>
                <input type="text" class="form-control" id="cpEnt" name="cpEnt" placeholder="Entrez le code postal de l'entreprise">
            </div>
        </div>
        <div class="row mb-2">
            <div class="form-group col-6">
                <label for="handicapEnt" class="col-form-label"><b>Élève porteur de handicap :</b></label>
                <div class="row m-2">
                    <div class="form-check col-5">
                        <input class="form-check-input" type="radio" name="handicapEnt" id="radioHandicapOui" value="1" checked>
                        <label class="form-check-label" for="radioHandicapOui">Oui</label>
                    </div>
                    <div class="form-check col-5">
                        <input class="form-check-input" type="radio" name="handicapEnt" id="radioHandicapNon" value="0">
                        <label class="form-check-label" for="radioHandicapNon">Non</label>
                    </div>
                </div>
            </div>
            <div class="form-group col">
                <label for="idDomaineEnt" class="form-label">Domaine :</label>
                <select class="form-control" id="idDomaineEnt" name="idDomaineEnt" required>
                    <option value="">Choisissez un domaine</option>
                    <?php while ($unDomaine = $lesDomaines->fetch()) { ?>
                        <option value="<?php echo $unDomaine->idDomaine ?>"><?php echo $unDomaine->nomDomaine ?></option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                Veuillez choisir une modalité.
                </div>
            </div>
        </div>
        <div class="d-flex body">
            <label for=""><b>Contact :</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <div class="btn-group">
                <button type="button" class="btn btn-success minus">-</button>
                <input type="number" class="count" id="qty" name="qty" value="1" min="1" max="2">
                <button type="button" class="btn btn-success    plus">+</button>
            </div> -->
            <!-- <div id="divAjoutContact">

            </div> -->
            <!-- <span class="title">Ajouter un contact</span> -->
            <div id="content" class="content">
                <div id="contact-1" class="contact">
                    <div class="title">
                        Contact principal
                    </div>
                    <div id="nom-prenom" class="input nom-prenom">
                        <div id="div-nom-1" class="input">
                            <span>Nom :</span>
                            <input type="text" id="nom-1">
                        </div>
                        <div id="div-prenom-1" class="input">
                            <span>Prenom :</span>
                            <input type="text" id="prenom-1">
                        </div>
                    </div>
                    <div id="poste-1" class="input">
                        <span>Poste :</span>
                        <input type="text" class="poste-1">
                    </div>
                    <div id="email-1" class="input">
                        <span>Email :</span>
                        <input type="text" class="email-1">
                    </div>
                    <div id="tel-fixe-1" class="input tel-fixe">
                        <div id="div-tel-1" class="input">
                            <span>Téléphone :</span>
                            <input type="text" id="tel-1">
                        </div>
                        <div id="div-fixe-1" class="input">
                            <span>Fixe :</span>
                            <input type="text" id="fixe-1">
                        </div>
                    </div>
                    <div class="ajouterContact" id="ajouterContact-1" onclick="ajouterContact(this.id)">
                        + Ajouter un contact supplémentaire
                    </div>
                </div>
            </div>
            <!-- <span class="title">Copyright by Pierr.</span> -->
        </div>
    </form>
</div>