
<!DOCTYPE html>
<html>
    <head lang='fr'>
        <title>Inscription</title>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../style.css" media="screen" type="text/css"/>
    </head>
    <body>
    <div id="container">

    
            <!-- zone de connexion -->
            
            <form action="../controleurs/ctrl-enregistrer-client.php" method="GET">
                <h1>Inscription</h1>

                </br>
                
                <label><b>1. Civilité</b></label>
                <input type="radio" name="civilite" value="mme" checked>Mme.

                <input type="radio" name="civilite" value="mr" >M.

                </br>
                </br>

                <label><b>2. Nom</b></label>
                <input type="text" placeholder="Nom..." name="nom" required>
                
                <label><b>3. Prénom</b></label>
                <input type="text" placeholder="Prénom..." name="prenom" required="required" autocomplete="off">

                <label><b>4. Email</b></label>
                <input type="email" placeholder="Email..." name="mail" required="required" autocomplete="off">

                <label><b>5. Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe..." name="motDePasse" required="required" autocomplete="off">

                <label><b>6. Confirmer le mot de passe</b></label>
                <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">

                <label><b>7. Date de Naissance</b></label>
                </br>
                <input type="date" placeholder="Date de naissance..." name="dateDeNaissance" required="required" autocomplete="off">

                </br>

                <label><b>8. Adresse Postal</b></label>
                <input type="text" placeholder="Adresse postal..." name="adressePostale" required="required" autocomplete="off">

                <label><b>9. Code Postal</b></label>
                <input type="number" placeholder="Code postal..." name="codePostale" required="required" autocomplete="off">

                <label><b>10. Ville</b></label>
                <input type="text" placeholder="Ville..." name="ville" required="required" autocomplete="off">

                <label><b>11. Numéro de Téléphone</b></label>
                <input type="tel" placeholder="Numéro de mobile..." name="numeroDeMobile" require="required" autocomplete="off">

                <input type="submit" id='submit' value="S'inscrire" >
                <input type="reset" id='reset' value='Annuler' > 
                
                <a class="text-purple" href="./authentification">Retour</a>
                
            </form>
        </div>
    </body>
</html>
    