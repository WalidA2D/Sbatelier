use sbateliers;

insert into Client(numero, civilite, nom, prenom, dateDeNaissance, mail, motDePasse, adressePostale, codePostale, ville, numeroDeMobile) value (1,"mr","Ait Daoud","Walid",'2003-05-29',"walid.aitdaoud@gmail.com","azerty","45 rue Aimer Bonpland",77680,"Roissy-en-Brie","06 61 48 20 87");
insert into Client(numero, civilite, nom, prenom, dateDeNaissance, mail, motDePasse, adressePostale, codePostale, ville, numeroDeMobile) value (2,"mr","Nzobazola","William",'1996-04-02',"wiliam.nzobazola@gmail.com","azerty","17 rue du Binks",77140,"Nemours","06 29 56 83 02");
insert into Client(numero, civilite, nom, prenom, dateDeNaissance, mail, motDePasse, adressePostale, codePostale, ville, numeroDeMobile) value (3,"mr","Diakité","Ibrahima",'1994-08-05',"ibrahima.diakite@gmail.com","azerty","22 rue Céline",36000,"Châteauroux","06 69 85 63 74");
insert into Client(numero, civilite, nom, prenom, dateDeNaissance, mail, motDePasse, adressePostale, codePostale, ville, numeroDeMobile) value (4,"mr","Georgey","Walid",'1995-01-10',"walid.georgey@gmail.com","azerty","02 boulevard Ouoh",93270,"Sevran","06 26 72 91 06");
insert into Client(numero, civilite, nom, prenom, dateDeNaissance, mail, motDePasse, adressePostale, codePostale, ville, numeroDeMobile) value (5,"mme","Mendes Morges","Ronisia",'1999-11-13',"ronisia.mendes.morges@gmail.com","azerty","14 rue du Bourbier",91350,"Grigny","06 56 72 36 41");

insert into Atelier(numero, dateEnregistrement, dateHeureProgrammees, duree, nbPlace, theme) value (1,'2022-05-17','2022-6-13 15:30:00','00:30:00',50,"Préparation de confiseries");
insert into Atelier(numero, dateEnregistrement, dateHeureProgrammees, duree, nbPlace, theme) value (2,'2022-10-22','2022-12-02 10:00:00','01:00:00',30,"Confection de ballons");
insert into Atelier(numero, dateEnregistrement, dateHeureProgrammees, duree, nbPlace, theme) value (3,'2022-01-01','2022-02-01 12:00:00','01:30:00',50,"Préparation de plats Asiatique");

insert into Responsable(numero, nomDeConnexion, nom, prenom) value (1,"Niro","Bahri","Noureddine");
insert into Responsable(numero, nomDeConnexion, nom, prenom) value (2,"Booba","Yafa","Elie");
insert into Responsable(numero, nomDeConnexion, nom, prenom) value (3,"SDM","Mosabu","Béni");
insert into Responsable(numero, nomDeConnexion, nom, prenom) value (4,"Damso","Kalubi","Williame");

insert into Participation(numeroClient, numeroAtelier, dateInscription) value (2,2,'2022-10-25');
insert into Participation(numeroClient, numeroAtelier, dateInscription) value (5,2,'2022-11-29');
insert into Participation(numeroClient, numeroAtelier, dateInscription) value (3,2,'2022-10-22');
insert into Participation(numeroClient, numeroAtelier, dateInscription) value (4,3,'2022-01-12');
insert into Participation(numeroClient, numeroAtelier, dateInscription) value (2,1,'2022-06-10');