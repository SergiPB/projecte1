drop database if exists empresa;
create database empresa;
use empresa;

drop table if exists productes;
drop table if exists proveidors;
drop table if exists categories;
drop table if exists proveeix;
drop table if exists semblança;

create table categories(
	codi int (5) auto_increment,
    primary key (codi),
    nom varchar (25)
);

create table productes(
	codi int (5) auto_increment,
    primary key (codi),
    nom varchar (25),
    material varchar (20),
    estoc int (5),
    codi_cat int (5),
    foreign key (codi_cat) references categories (codi)
    );

create table proveidors(
	nif varchar (9) primary key,
    nom varchar (30),
    localitat varchar(30),
    telefon int(9)
);

create table proveeix(
	nif varchar (9),
    codi int (5),
    primary key (nif,codi),
    foreign key (nif) references proveidors (nif),
    foreign key (codi) references productes (codi)
);

create table semblança(
    codi_1 int (5),
    codi_2 int (5),
    primary key (codi_1,codi_2),
    foreign key (codi_1) references productes (codi),
    foreign key (codi_2) references productes (codi)
);

