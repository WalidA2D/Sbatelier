drop database if exists sbateliers;
create database sbateliers;
use sbateliers;

create table Client(

numero int,
civilite varchar(20),
nom varchar(20),
prenom varchar(20),
dateDeNaissance date ,
mail varchar(40) ,
motDePasse varchar(20)  ,
adressePostale varchar(40) ,
codePostale char(5) ,
ville varchar(40) ,
numeroDeMobile varchar(20) ,

primary key(numero)
);

create table Atelier(

    numero int  ,
    dateEnregistrement date  ,
    dateHeureProgrammees datetime  ,
    duree time  ,
    nbPlace int  ,
    theme varchar(40)  ,

    primary key(numero)
);

create table Responsable(
    
    numero int ,
    nomDeConnexion varchar(20)  ,
    nom varchar(20)  ,
    prenom varchar(20)  ,

    primary key(numero) 
);

create table Participation(

    numeroClient int ,
    numeroAtelier int ,
    dateInscription date  ,

    primary key(numeroClient, numeroAtelier) ,
    
    foreign key(numeroClient) references Client(numero) ,
    foreign key(numeroAtelier) references Atelier(numero) 
);