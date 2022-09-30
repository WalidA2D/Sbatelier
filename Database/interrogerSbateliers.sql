use sbateliers ;

/*
insert into Client(numero, civilite, nom, prenom, dateDeNaissance, motDePasse, adressePostale, codePostale, ville, numeroDeMobile) value ();
*/

/*Afficher tt les clients*/
 select * from Client ;

/*Afficher tt les ateliers passés*/

select * from Atelier where dateHeureProgrammees < ( select date(now())) ;

/*Afficher tt les ateliers du jour*/

select * from Atelier where dateHeureProgrammees = ( select date(now())) ;

/*Afficher tt les ateliers programmés*/

select * from Atelier ;

/*Afficher le nombre de participations à des ateliers de chaque client*/

select nom, count(numeroClient) from Client left outer join Participation on Client.numero = Participation.numeroClient group by Client.nom;

/*Enregistrer participation à des ateliers*/

/*
insert into Participation(numeroClient, numeroAtelier, dateInscription) value ();
insert into Participation(numeroClient, numeroAtelier, dateInscription) value ();
*/

/*Afficher les ateliers programmés auxquels vous êtes inscrit-e*/

select * from Participation where numeroClient = 1 ;

/*Annuler une partitipation à un programme*/

/*
delete from Participation where numeroClient = 3 ;
*/