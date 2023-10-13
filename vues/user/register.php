<h2 id="titlePage">Bienvenue sur le site de la relation École-Entrepise en Mayenne</h2>
<div id="divFormConn">
    <div class="pSeConnecter">
        S'inscrire
    </div>
    <form method="post" id="formReg" action="<?php echo WEBROOT.'user/register' ?>">
        <div class="row justify-content">
            <div class="col-6 divInputFormConn divBaseCss">
                <input type="text" id="regNom" name="regNom" class="form-control inputFormNomReg" placeholder="Nom" required>
            </div>
            <div class="col-6 divInputFormConn divBaseCss">
                <input type="text" id="regPrenom" name="regPrenom" class="form-control inputFormPrenomReg" placeholder="Prenom" required>
            </div>
        </div>
        <div class="col-6 divInputFormConn divBaseCss">
            <input type="text" id="regEmail" name="regEmail" class="form-control inputFormConn" placeholder="Email (exemple@ac-nantes.fr)" required>
        </div>    
        <div class="col-6 divInputFormConn divBaseCss">
            <input type="text" id="regEtab" name="regEtab" class="form-control inputFormConn" placeholder="Établissement" required>
        </div> 
        <div class="divInputFormConn">
            <input type="password" id="regPassword" name="regPassword" class="form-control inputFormConn" placeholder="Mot de passe" required>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary btnFormReg">Inscription</button>
        </div>
    </form>
</div>