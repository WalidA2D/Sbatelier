<?php

$bd = new PDO( 
                'mysql:host=localhost;dbname=sbateliers' ,
                'sb2022' ,
                'azerty'
    );

$sql = 'select nom , prenom from Client' ;

$resultat = $bd -> query( $sql ) ;

while($uneLigne = $resultat -> fetch(PDO::FETCH_ASSOC)){
    echo $uneLigne['nom'];
    echo $uneLigne['prenom'];
}

$resultat -> closeCursor() ;

unset($bd) ;

?>