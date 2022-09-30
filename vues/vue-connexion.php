<?php

    //require '../session.php' ; 
    //init_php_session(); 
    
    if( isset($_GET[ 'login' ]) ){
        $login = $_GET[ 'login' ] ;
    } 
    else {
        $login = '' ;   
    } 

    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion</title>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../style.css" media="screen" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="../controleurs/ctrl-connecter.php" method="GET">
                <h1>Connexion</h1>
                
                <label><b>Email d'utilisateur</b></label>
                <input type="email" placeholder="Identifiant..." name="login" value="<?php echo $login ; ?>" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe..." name="mdp" required>

                <input type="submit" id='submit' value='Connexion' >
                <input type="reset" id='reset' value='Annuler' > 
                <a class="text-purple" href="./inscription">Inscription</a>
            
                <?php if( isset($_GET[ 'echec' ]) ){ ?>
                        <?php if( $_GET[ 'echec' ] == 1 ){ ?>           
                            <div style='color:red' role="alert">
                                Nom de connexion ou mot de passe incorrect.
                            </div>
                        <?php } else if( $_GET[ 'echec' ] == 0 ){ ?>
                            <div style='color:red' role="alert">
                                Site momentanément indisponible.
                            </div>
                        <?php } ?>
                    <?php } ?>
                
            </form>
        </div>
        
    </body>
</html>