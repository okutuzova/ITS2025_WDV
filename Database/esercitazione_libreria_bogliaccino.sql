-- inserisco libri
INSERT INTO `libro` VALUES (1,'Alchimista (L\')',12.00,10,1),(2,'Cinquanta sfumature di grigio',10.20,560,1),(3,'Dieci piccoli indiani',10.20,208,1),(4,'Don Chisciotte della Mancha',20.40,NULL,3),(5,'Harry Potter e la Pietra Filosofale',8.50,302,4),(6,'Il Codice da Vinci',11.00,512,1),(7,'Il giovane Holden',10.20,251,3),(8,'Il leone, la strega e l\'armadio',7.65,182,1),(9,'Il libretto rosso',7.22,160,5),(10,'Il Piccolo Principe',4.25,95,1),(11,'Il Signore degli Anelli: La compagnia dell\'anello. Le due torri. Il ritorno del re',25.00,1255,10),(12,'Il sogno della camera rossa. Romanzo cinese del XVIII secolo',15.30,721,3),(13,'La colonna di fuoco',27.00,912,1),(14,'La donna della domenica',12.00,434,1),(15,'Lo Hobbit',9.35,417,10),(16,'Macerie prime',14.45,192,6),(17,'Origin',21.25,564,1),(18,'Quel che resta del giorno',12.00,276,3),(19,'Un mese con Montalbano',12.75,512,7),(20,'Una storia tra due citt├á',9.77,600,10),(21,'Marcovaldo',10.00,120,7),(22,'IT',25.00,550,9),(23,'gomorra',12.59,345,1);

select * from libro, editore
where libro.editore_id = editore.id
;

select l.titolo, e.nome, e.contatto 
from libro l
inner join editore e 
	on l.editore_id = e.id;


-- inserisco editori
INSERT INTO `editore` VALUES (1,'Mondadori','info-mondadori@gmail.com'),(3,'Einaudi','amm-einaudi@gmail.com'),(4,'Salani','salani-info@gmail.com'),(5,'Edizioni Clandestine','clandestine-info@gmail.com'),(6,'Bao Publishing','bao_editore@gmail.com'),(7,'Sellerio','amm-sellerio@gmail.com'),(8,'BUR','bur_editore@gmail.com'),(9,'Sperling & Kupfer','sperling-info@gmail.com'),(10,'Bompiani','contact-bompiani@gmail.com'),(11,'Adelphi','adelphi-info@gmail.com');
select * from editore;

-- inserisco autori
INSERT INTO `autore` VALUES (1,'John Ronald Reuel','Tolkien','za'),(2,'Dan','Brown','us'),(3,'Paulo','Coelho','br'),(4,'J. D.','Salinger','us'),(5,'Agatha','Christie','en'),(6,'J. K.','Rowling','en'),(7,'Tsao','Chan','cn'),(8,'E. L.','James','en'),(9,'Antoine','de Saint-Exup?ry','fr'),(10,'Charles','Dickens','en'),(11,'Miguel','de Cervantes','es'),(12,'Clive Staples','Lewis','en'),(13,'Tse-tung','Mao','cn'),(14,'Michele','Rech, Zerocalcare','it'),(15,'Andrea','Camilleri','it'),(16,'Ken','Follett','en'),(17,'Kazuo','Ishiguro','jp'),(18,'Carlo','Fruttero','it'),(19,'Franco','Lucentini','it'),(20,'Italo','Calvino','it'),(21,'Stephen','King','us'),(22,'Isabel','Allende','cl');

select * from autore;

INSERT INTO `autore_libro` VALUES (1,3),(2,8),(3,5),(4,11),(5,6),(6,2),(7,4),(8,12),(9,13),(10,9),(11,1),(12,7),(13,16),(14,18),(14,19),(15,1),(16,14),(17,2),(18,17),(19,15),(20,10),(21,20),(22,21);

select concat(a.nome, ' ', a.cognome) as "Autore", l.titolo, l.prezzo, e.nome 
from autore_libro al
join autore a on al.autore_id = a.id -- unisco chiave esterna autore_id
join libro l on al.libro_id = l.id -- unisco chiave esterna libro_id;
join editore e on l.editore_id = e.id;

-- 1. Elenco di tutti i libri
-- 2. Elenco di tutti gli autori
-- 3. Elenco di tutti gli editori
-- 4. Selezionare il titolo e il prezzo dei libri ordinati per prezzo crescente
-- 5. Selezionare i libri con un prezzo superiore a 15€
-- 6. Contare il numero totale di libri nel database
-- 7. Ottenere la media delle pagine dei libri
-- 8. Trovare il libro più costoso
-- 9. Trovare il libro meno costoso
-- 10. Contare il numero di autori per nazione
-- 11. Elenco dei libri con più di 500 pagine
-- 12. Elenco degli autori italiani
-- 13. Trovare tutti i libri pubblicati da un determinato editore (es. Mondadori)
-- 14. Contare il numero di libri per ogni editore
-- 15. Trovare i libri con più di 400 pagine pubblicati da un determinato editore
-- 16. Trovare il numero di autori che hanno scritto almeno un libro
-- 17. Trovare gli autori che hanno scritto più di un libro
-- 18. Trovare gli autori che non hanno scritto alcun libro
-- 19. Selezionare i libri con più di un autore
-- 20. Contare il numero di libri per autore
-- 21. Ottenere la somma totale del prezzo di tutti i libri
-- 22. Contare il numero di libri con un prezzo compreso tra 10 e 20 euro
-- 23. Trovare il prezzo medio dei libri per editore
-- 24. Trovare gli autori con più libri pubblicati da editori diversi
-- 25. Trovare i libri con il prezzo più alto per ogni editore
-- 26. Ottenere i 5 libri più costosi
-- 27. Contare il numero di libri pubblicati da ciascun editore con più di 3 libri
-- 28. Selezionare il nome degli editori che hanno pubblicato almeno un libro con più di 500 pagine
-- 29. Trovare gli autori che hanno scritto libri pubblicati da più di un editore
-- 30. Contare il numero di libri per ogni autore con più di 1 libro





