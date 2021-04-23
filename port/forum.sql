drop database if exists ab;
create database ab;
use ab;
Create table utilisateurs (
    idu int(3)not null auto_increment,
    pseudo varchar (80),
    prenomu varchar(80),
    nomu varchar(80),
    mdp varchar (50),
    primary key(idu)
) ENGINE=InnoDB;
Insert into utilisateurs values
(null, "AmarXI", "Raph", "Amar", "azerty1"),
(null, "test1", "test2", "test3", "test4");


