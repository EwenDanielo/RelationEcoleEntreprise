<?php
    echo "ljqldfhkjqdhf";
    if(password_verify("testAdmin", '$2y$10$YlVkdGEgvlGTJ94WZRSTxO5iR8.rx4ciifPADQ0Rcg1QoaXeiYIWS') == true) {
        echo true;
    } else {
        echo false;
    }
?>
<h2 id="titlePage">Bienvenue sur le site de la relation École-Entrepise en Mayenne</h2>
<div id="divFormConn">
    <div class="pSeConnecter">
        Se connecter
    </div>
    <form method="POST" id="formConn" action="<?php echo WEBROOT.'user/index' ?>">
        <div class="divInputFormConn divBaseCss">
            <input type="email" id="emailUtilFormConn" name="emailConn" class="form-control inputFormConn" placeholder="Email">
        </div>
        <div class="divInputFormConn">
            <input type="password" id="passwordUtilFormConn" name="passConn" class="form-control inputFormConn" placeholder="Mot de passe">
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary btnFormConn">Se connecter</button>
        </div>
    </form>
    <div id="divBarreOuConn">
        <span id="spanBarreOuConn">OU</span>
    </div>
    <div class="">
        <a type="button" class="btn btn-dark btnLinkFormConn" href="<?php echo WEBROOT.'user/register' ?>">Inscription</a>
    </div>
  </div>
</body>