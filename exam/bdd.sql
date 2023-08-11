create database if not exists examen_bdd character set = 'utf8';

use examen_bdd;

create table if not exists serieQuestion (
    id int not null auto_increment,
    nbQuestion int not null,
    primary key(id)
)engine=innodb;

create table if not exists joueur (
    idJoueur int not null auto_increment,
    point int not null,

    primary key(idJoueur)
)engine=innodb;

create table if not exists question (
    idQuestion int not null auto_increment,
    reponse1 varchar(5) not null,
    reponse2 varchar(5) not null,
    reponse3 varchar(5) not null,
    bonneRep varchar(5) not null,
    id int,
    primary key(idQuestion),
    key(id)
)engine=innodb;

insert into question values (1,'c1','c2','c3','c2',1);
alter table question add constraint fkquestionserieQuestion foreign key(id) references serieQuestion(id);