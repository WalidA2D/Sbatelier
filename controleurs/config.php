<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=sbateliers' ,
                        'sb2022' ,
                        'azerty'
        );
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }