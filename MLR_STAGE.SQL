DROP DATABASE IF EXISTS relationREE;

CREATE DATABASE IF NOT EXISTS relationREE;
USE relationREE;

CREATE TABLE IF NOT EXISTS RolesUtilisateur (
   idRoles INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   libRoles VARCHAR(50) NOT NULL,
   PRIMARY KEY (idRoles)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : Utilisateur
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Utilisateur (
   idUtil INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   nomUtil VARCHAR(30) NOT NULL,
   prenomUtil VARCHAR(30) NOT NULL,
   idRoles INT(11) UNSIGNED NOT NULL,
   etablissementUtil VARCHAR(100) NULL,
   emailUtil VARCHAR(50) NOT NULL,
   passwordUtil VARCHAR(255) NOT NULL,
   PRIMARY KEY (idUtil),
   FOREIGN KEY (idRoles) REFERENCES RolesUtilisateur (idRoles)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : DispositifREE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DispositifREE (
   idD INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   nomD VARCHAR(30) NOT NULL,
   libD VARCHAR(30) NOT NULL,
   objPedaD VARCHAR(255) NOT NULL,
   dateDebD DATE NOT NULL,
   dateFinD DATE NOT NULL,
   modaliteD VARCHAR(255) NOT NULL,
   lienSiteD VARCHAR(100) NOT NULL,
   PRIMARY KEY (idD)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : RegarderDisp
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RegarderDisp (
   idD INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idUtil INT(11) UNSIGNED NOT NULL,
   PRIMARY KEY (idD,idUtil),
   FOREIGN KEY (idD) REFERENCES DispositifREE (idD),
   FOREIGN KEY (idUtil) REFERENCES Utilisateur (idUtil)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : Interlocuteur
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Interlocuteur (
    idInter INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomInter VARCHAR(30) NOT NULL,
    prenomInter VARCHAR(30) NOT NULL,
    posteInter VARCHAR(50) NOT NULL,
    emailInter VARCHAR(100) NOT NULL,
    telInter VARCHAR(12) NOT NULL,
    PRIMARY KEY (idInter)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : LienDispInter
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS LienDispInter (
   idInter INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idD INT(11) UNSIGNED NOT NULL,
   PRIMARY KEY (idInter,idD),
   FOREIGN KEY (idInter) REFERENCES Interlocuteur (idInter),
   FOREIGN KEY (idD) REFERENCES DispositifREE (idD)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : Entreprise
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Entreprise (
   idEnt INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   nomEnt VARCHAR(30) NOT NULL,
   libEnt VARCHAR(30) NOT NULL,
   adrEnt VARCHAR(100) NOT NULL,
   villeEnt VARCHAR(50) NOT NULL,
   cpEnt INT(5) UNSIGNED NOT NULL,
   handicapEnt BOOLEAN NOT NULL,
   domaineEnt VARCHAR(50) NOT NULL,
   PRIMARY KEY (idEnt) 
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : RegarderEnt
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RegarderEnt (
   idUtil INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idEnt INT(11) UNSIGNED NOT NULL,
   PRIMARY KEY (idUtil,idEnt),
   FOREIGN KEY (idUtil) REFERENCES Utilisateur (idUtil),
   FOREIGN KEY (idEnt) REFERENCES Entreprise (idEnt)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : Contact
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Contact (
   idC INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idEnt INT(11) UNSIGNED NOT NULL,
   nomC VARCHAR(30) NOT NULL,
   prenomC VARCHAR(30) NOT NULL,
   emailC VARCHAR(100) NOT NULL,
   portableC VARCHAR(12) NOT NULL,
   telC VARCHAR(12) NOT NULL,
   PRIMARY KEY (idC),
   FOREIGN KEY (idEnt) REFERENCES Entreprise (idEnt)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : Classe
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Classe (
   idClasse INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   libClasse VARCHAR(50) NOT NULL,
   specialiteClasse VARCHAR(50) NULL,
   PRIMARY KEY (idClasse) 
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : SecteurPropose
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SecteurPropose (
   idSecteur INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   nomSecteur VARCHAR(50) NOT NULL,
   PRIMARY KEY (idSecteur) 
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : Stage
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Stage (
   idS INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idSecteur INT(11) UNSIGNED NOT NULL,
   idClasse INT(11) UNSIGNED NOT NULL,
   idEnt INT(11) UNSIGNED NOT NULL,
   intituleS VARCHAR(50) NOT NULL,
   libS VARCHAR(255) NOT NULL,
   dateDebS DATE NOT NULL,
   dateFinS DATE NOT NULL,
   domaineActS VARCHAR(50) NOT NULL, 
   PRIMARY KEY (idS),
   FOREIGN KEY (idSecteur) REFERENCES SecteurPropose (idSecteur),
   FOREIGN KEY (idClasse) REFERENCES Classe (idClasse),
   FOREIGN KEY (idEnt) REFERENCES Entreprise (idEnt)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : Alternance
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS Alternance (
   idA INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idClasse INT(11) UNSIGNED NOT NULL,
   idSecteur INT(11) UNSIGNED NOT NULL,
   idEnt INT(11) UNSIGNED NOT NULL,
   intituleA VARCHAR(50) NOT NULL,
   libA VARCHAR(255) NOT NULL,
   dateDebA DATE NOT NULL,
   dateFinA DATE NOT NULL,
   domaineActA VARCHAR(50) NOT NULL,
   PRIMARY KEY (idA),
   FOREIGN KEY (idClasse) REFERENCES Classe (idClasse),
   FOREIGN KEY (idSecteur) REFERENCES SecteurPropose (idSecteur),
   FOREIGN KEY (idEnt) REFERENCES Entreprise (idEnt)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : MetierDecouvert
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MetierDecouvert (
   idMetier INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   intituleMetier VARCHAR(50) NOT NULL,
   PRIMARY KEY (idMetier)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : VisiteEnt
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS VisiteEnt (
   idV INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idClasse INT(11) UNSIGNED NOT NULL,
   idMetier INT(11) UNSIGNED NOT NULL,
   idEnt INT(11) UNSIGNED NOT NULL,
   nbPlacesV INT(5) UNSIGNED NOT NULL,
   libV VARCHAR(255) NOT NULL,
   tempsEstimeV INT(255) UNSIGNED NOT NULL,
   PRIMARY KEY (IDV),
   FOREIGN KEY (idClasse) REFERENCES Classe (idClasse),
   FOREIGN KEY (idMetier) REFERENCES MetierDecouvert (idMetier),
   FOREIGN KEY (idEnt) REFERENCES Entreprise (idEnt)
) engine=innoDB;

# -----------------------------------------------------------------------------
#       TABLE : InterventionClasse
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS InterventionClasse (
   idIntervention INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
   idClasse INT(11) UNSIGNED NOT NULL,
   idMetier INT(11) UNSIGNED NOT NULL,
   idEnt INT(11) UNSIGNED NOT NULL,
   dureeIntervention INT(255) UNSIGNED NOT NULL,
   libIntervention VARCHAR(255) NOT NULL,
   PRIMARY KEY (idIntervention),
   FOREIGN KEY (idClasse) REFERENCES Classe (idClasse),
   FOREIGN KEY (idMetier) REFERENCES MetierDecouvert (idMetier),
   FOREIGN KEY (idEnt) REFERENCES Entreprise (idEnt)
) engine=innoDB;