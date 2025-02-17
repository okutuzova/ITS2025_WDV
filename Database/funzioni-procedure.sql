-- funzioni in mysql

use libreria;

select * from autore;

create function get_name(
	first_name varchar(30), 
	last_name varchar(30), 
    country char(2)
    )-- parametri in ingresso - input
returns varchar(66) deterministic -- dichiaro che tipo di valore ritornerà questa funzione
return concat(first_name, ' ', UPPER(last_name), ' (', country, ')');

select get_name(a.nome, a.cognome, a.nazionalita) as Autore
from autore as a
order by a.cognome
;
 
-- procedure in mysql

delimiter $$

create procedure test_procedura() 
BEGIN
	insert into editore (nome, contatto) values ('pippo', 'pippo@gmail.com');
END $$
 
delimiter ;
 
-- trigger in mysql

CREATE TABLE LOG_Autori (
	id int primary key auto_increment,
    old_name varchar(25),
    new_name varchar(25),
    modified datetime
);

DELIMITER $$

CREATE TRIGGER Log_autori
AFTER UPDATE
ON autore
FOR EACH ROW
BEGIN
    INSERT INTO LOG_Autori (
			old_name, 
            new_name, 
            modified
            )
    VALUES (concat(OLD.nome, '', OLD.cognome), 
			concat(NEW.nome, '', NEW.cognome), 
            NOW()
            );
END $$

DELIMITER ;

select * from autore;

update autore SET nome = 'Agatha' where id = 5;


 
 
 
 
 
 