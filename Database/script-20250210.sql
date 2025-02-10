ALTER TABLE libro
DROP CONSTRAINT fk_libro_editore;

ALTER TABLE libro
ADD CONSTRAINT fk_libro_editore
FOREIGN KEY (editore_id) REFERENCES editore(id)
ON DELETE CASCADE
;

ALTER TABLE autore_libro
ADD constraint fk_libro
FOREIGN KEY (libro_id) REFERENCES libro(id);

ALTER TABLE autore_libro
ADD constraint fk_autore
FOREIGN KEY (autore_id) REFERENCES autore(id);





SELECT * FROM libreria.editore;

INSERT INTO editore -- (id, nome, contatto)
VALUE (1, 'Mondadori','info-mondadori@gmail.com');


INSERT INTO editore 
SET nome = 'Mondadori', 
	contatto='info-mondadori@gmail.com', 
	id=1;

DELETE FROM editore WHERE id = 1;

DELETE FROM libro;
TRUNCATE TABLE libro;


UPDATE libro set editore_id = 1 WHERE editore_id IS NULL;

CREATE VIEW biblioteca AS
SELECT 
    UPPER(e.nome) as Editore, 	
    l.titolo, 
    CONCAT(a.nome, ' ', a.cognome) as Autore,
    l.prezzo,
    (l.prezzo * 1.22) as prezzo_ic
FROM libro as l
JOIN editore as e on l.editore_id = e.id
JOIN autore_libro as al on al.libro_id = l.id
JOIN autore as a ON al.autore_id = a.id
ORDER BY editore
;

-- creare una tabella con nome dell'editore e nome dell'autore che scrive per 
-- quell'editore
create view editori_autori as
select distinct e.nome as editore, concat(a.nome, ' ', a.cognome) as autore
from autore_libro as al
join autore a on al.autore_id = a.id
join libro l on al.libro_id = l.id
join editore e on l.editore_id = e.id
order by e.nome;

SELECT editore, count(*) as scrittori
FROM libreria.editori_autori
group by editore
order by scrittori desc
;







