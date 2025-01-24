drop table prova;
create table prova(
	id INT PRIMARY KEY auto_increment,  
	nome VARCHAR(30),
    cognome VARCHAR(30)
);

create table prova like studenti;

show create table prova ;



SELECT * FROM prova;
insert INTO prova (id, nome, cognome) VALUES (NULL, 'pippo', 'pippo');

INSERT INTO prova (cognome, nome)
select cognome, nome from studenti;
SET SQL_SAFE_UPDATES = 0;
update prova set nome = upper(nome);

delete from prova;
truncate prova;

