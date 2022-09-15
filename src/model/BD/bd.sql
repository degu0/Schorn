create database teste;
use teste;

create table Usuario(
	id int auto_increment,
    login varchar(255) not null,
    senha varchar(255) not null,
    primary key(id)
);

create table Professor(
	id int auto_increment,
    Nome varchar(50),
    Disciplina varchar(50),
    Carga int,
    disponibilidades enum("Manhã", "Tarde"),
    disponibilidadeDia enum('Segunda', "Terça", "Quarta", "Quinta","Sexta", "Todos os dias"),
    Turmas enum("1º ano","2º ano","3º ano"),
    primary key(id)
);

create table Turmas(
	id int auto_increment,
    Ano enum("1 ano","2 ano","3 ano"),
    Curso enum('TDS', 'MKT'),
    Turma enum('A', 'B'),
    primary key(id)
);

create table Institucao(
	id int auto_increment,
    NomeInstituicao varchar(100),
    Ensino enum('Ensino_Fundamental_I','Ensino_Fundamental_II','Ensino_Médio'),
    primary key(id)
);

drop table Professor;


select * from Professor;
select * from Turmas;
select * from Institucao;
