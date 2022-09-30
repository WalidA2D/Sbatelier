<?php

$url = '';
if(isset($_GET['url'])){
    $url = explode('/',$_GET['url']);
}



if($url[0] == 'clients' AND !empty($url[1] == 'inscription')){
    require './vues/vue-inscription.php' ;
} 
elseif($url[0] == 'clients' AND !empty($url[1] == 'authentification')){
    require './vues/vue-connexion.php' ;
} 
elseif($url[0] == 'clients' AND !empty($url[1] == 'espace-client') ){
    require './vues/vue-espace-client.php' ;
} 
elseif($url[0] == 'clients' AND !empty($url[1] == 'profil')){
    require './vues/vue-profil-client' ;
} 
elseif($url[0] == 'clients' AND !empty($url[1] == 'ateliers')){
    require './vues/vue-liste-ateliers.php' ;
} else{
    require './404.php' ;   
}
?>