<?php
    
    $login = $_GET[ 'login' ] ;
    $mdp = $_GET[ 'mdp' ] ;
    
    try {

        $bd = new PDO(
                        'mysql:host=localhost;dbname=sbateliers' ,
                        'sb2022' ,
                        'azerty'
        ) ;
        $sql = 'select nom , prenom '
        . 'from Client '
        . 'where mail = :login '
        . 'and motDePasse = :mdp' ;
        
            
       $st = $bd -> prepare( $sql ) ;
       
       $st -> execute( array( 
                               ':login' => $login ,
                               ':mdp' => $mdp 
                       ) 
                   ) ;
       $resultat = $st -> fetchall() ;
           
       unset( $bd ) ;
       
       if( count( $resultat ) == 1 ) {
           session_start() ;
           $_SESSION[ 'nom' ] = $resultat[0]['nom'] ;
           $_SESSION[ 'prenom' ] = $resultat[0]['prenom'] ;
           
           $_SESSION[ 'login' ] = $login ;
           
           header( 'Location: ../clients/espace-client?login=' . $login ) ;
       }
       else {
           header( 'Location: ../clients/authentification?echec=1&login=' . $login ) ;
       }
    }

   catch( PDOException $e ){

    
    die("Erreur : " . $e->getMessage());
      header( 'Location: ../index.php?echec=0' ) ;
   }

?>