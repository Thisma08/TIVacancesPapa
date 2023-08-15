drop database if exists aoutmathis;
create database if not exists aoutmathis  character set ='utf8';

use aoutmathis;

create table if not exists question (
    id_question smallint not null AUTO_INCREMENT,
    question varchar(100) not null,
    choix1 varchar(10) not null,
    choix2 varchar(10) not null,
    choix3 varchar(10) not null,
    reponse varchar(10) not null,	
    id_serie_questions smallint not null,
    primary key(id_question),
    key(id_serie_questions)
)engine=innodb;

create table if not exists serie_questions (
    id_serie_questions smallint not null,
    nom_serie_questions varchar(50) not null,	
    primary key(id_serie_questions)
)engine=innodb;

alter table question 
add constraint fkquestion_serie_questions 
foreign key(id_serie_questions) references serie_questions(id_serie_questions);