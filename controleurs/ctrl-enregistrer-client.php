<?php
        $numero = rand();
        $civilite = $_GET[ 'civilite' ] ;
        $nom = $_GET[ 'nom' ] ;
        $prenom = $_GET[ 'prenom' ] ;
        $mail = $_GET[ 'mail' ] ;
        $motDePasse = $_GET[ 'motDePasse' ] ;
        $dateDeNaissance = $_GET[ 'dateDeNaissance' ] ;
        $adressePostale = $_GET[ 'adressePostale' ] ;
        $codePostale = $_GET[ 'codePostale' ] ;
        $ville = $_GET[ 'ville' ] ;
        $numeroDeMobile = $_GET[ 'numeroDeMobile' ] ;
    
        
        try {
    
            $bd = new PDO(
                            'mysql:host=localhost;dbname=sbateliers' ,
                            'sb2022' ,
                            'azerty'
            ) ;
    
    
            $sql = 'insert into Client(numero,civilite,nom,prenom,dateDeNaissance,mail,motDePasse,adressePostale,codePostale,ville,numeroDeMobile) 
            value(:numero, :civilite, :nom, :prenom, :dateDeNaissance, :mail, :motDePasse, :adressePostale, :codePostale, :ville, :numeroDeMobile)' ;
            
                
           $st = $bd -> prepare( $sql ) ;
           
           $st -> execute([
                            ':numero' => $numero ,
                            'civilite' => $civilite,
                            ':nom' => $nom, 
                            ':prenom' => $prenom, 
                            ':dateDeNaissance' => $dateDeNaissance, 
                            ':mail' => $mail, 
                            ':motDePasse' => $motDePasse, 
                            ':adressePostale' => $adressePostale, 
                            ':codePostale' => $codePostale, 
                            ':ville' => $ville, 
                            ':numeroDeMobile' => $numeroDeMobile 
                            ]) ;
               
           unset( $bd ) ;
           header('Location: ../clients/authentification');
           //header('Location: ../vues/vue-connexion.php');
    
        }
    
       catch( PDOException $e ){
    
        die("Erreur : " . $e->getMessage());
          header( 'Location: ../index.php?echec=0' ) ;
       }
    
    /*$numero = rand();
    $civilite = $_GET[ 'civilite' ] ;
    $nom = $_GET[ 'nom' ] ;
    $prenom = $_GET[ 'prenom' ] ;
    $mail = $_GET[ 'mail' ] ;
    $motDepasse = $_GET[ 'motDePasse' ] ;
    $adressePostale = $_GET[ 'adressePostale' ] ;
    $codePostale = $_GET[ 'codePostale' ] ;
    $ville = $_GET[ 'ville' ] ;
    $dateDeNaissance = $_GET[ 'dateDeNaissance' ] ;
    $numeroDeMobile = $_GET[ 'numeroDeMobile' ] ;
    
    try {

        $bd = new PDO(
                        'mysql:host=localhost;dbname=sbateliers' ,
                        'sb2022' ,
                        'azerty'
        ) ;
        $sql = 'insert into Client(numero, civilite, nom, prenom, dateDeNaissance,mail , motDePasse, adressePostale, codePostale, ville, numeroDeMobile) value (:numero, :civilite, :nom, :prenom, :dateDeNaissance, :motDePasse, :adressePostale, :codePostale, :ville, :numeroDeMobile)' ;
        
            
        $st = $bd -> prepare( $sql ) ;
       
        $st -> execute( array( 
                                 ':numero' => $numero ,
                                 ':civilite' => $civilite ,
                                 ':nom' => $nom , 
                                 ':prenom' => $prenom ,
                                 ':dateDeNaissance' => $dateDeNaissance ,
                                 ':mail' => $mail ,
                                 ':motDePasse' => $motDepasse ,
                                 ':adressePostale' => $adressePostale ,
                                 ':codePostale' => $codePostale ,
                                 ':ville' => $ville ,
                                 ':numeroDeMobile' => $numeroDeMobile
                        ) 
                    ) ;
        unset( $bd ) ;
        header('Location: ../clients/authentification');
    
       
    }

   catch( PDOException $e ){

    
    die("Erreur : " . $e->getMessage());
      header( 'Location: ../index.php?echec=0' ) ;
   }*/

?>

