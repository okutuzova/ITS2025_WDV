
DROP TABLE RIVISTA;
-- Creazione delle tabelle
CREATE TABLE RIVISTA (
    rivista_id INT PRIMARY KEY,
    nome VARCHAR(50),
    Editore VARCHAR(50)
);
DROP TABLE ARTICOLO;
CREATE TABLE ARTICOLO (
    articolo_id INT PRIMARY KEY,
    Titolo VARCHAR(100),
    Argomento VARCHAR(50),
    rivista_id INT,
    FOREIGN KEY (rivista_id) REFERENCES RIVISTA(rivista_id)
);

-- Popolamento delle tabelle
INSERT INTO RIVISTA (rivista_id, nome, Editore) VALUES
(1, 'RivistaA', 'EditoreA'),
(2, 'RivistaB', 'EditoreB'),
(3, 'RivistaC', 'EditoreC');

INSERT INTO ARTICOLO (articolo_id, Titolo, Argomento, rivista_id) VALUES
(1, 'Articolo1', 'motociclismo', 1),
(2, 'Articolo2', 'calcio', 1),
(3, 'Articolo3', 'motociclismo', 2),
(4, 'Articolo4', 'basket', 2),
(5, 'Articolo5', 'auto', 3),
(6, 'Articolo6', 'motociclismo', 3),
(7, 'Articolo7', 'motociclismo', 3);


### interrogazioni SQL

-- (a-- ) Trovare il codice e il nome delle riviste che hanno pubblicato almeno un articolo di argomento 'motociclismo'.

SELECT DISTINCT rivista_id, nome
FROM RIVISTA
WHERE 
rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'motociclismo');


-- (b) Trovare il codice e il nome delle riviste che non hanno mai pubblicato articoli di argomento 'motociclismo'.

SELECT rivista_id, nome
FROM RIVISTA
WHERE rivista_id NOT IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'motociclismo');

-- (c) Trovare il codice e il nome delle riviste che hanno pubblicato solo articoli di motociclismo.


SELECT rivista_id, nome
FROM RIVISTA
WHERE rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'motociclismo')
AND rivista_id NOT IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento <> 'motociclismo');


-- (d) Trovare il codice e il nome delle riviste che pubblicano articoli di motociclismo oppure di auto.


SELECT DISTINCT rivista_id, nome
FROM RIVISTA
WHERE rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'motociclismo')
OR rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'auto');

-- (e) Trovare il codice e il nome delle riviste che pubblicano articoli sia di motociclismo sia di auto.


SELECT rivista_id, nome
FROM RIVISTA
WHERE rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'motociclismo')
AND rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'auto');


-- (f) Trovare il codice e il nome delle riviste che hanno pubblicato almeno 2 articoli di motociclismo.


SELECT rivista_id, nome
FROM RIVISTA
WHERE rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'motociclismo'
               GROUP BY rivista_id HAVING COUNT(*) >= 2);


-- (g) Trovare il codice e il nome delle riviste che hanno pubblicato un solo articolo di motociclismo.


SELECT rivista_id, nome
FROM RIVISTA
WHERE rivista_id IN (SELECT rivista_id FROM ARTICOLO WHERE Argomento = 'motociclismo'
               GROUP BY rivista_id HAVING COUNT(*) = 1);

-- Trovare nome, editore della rivista e titolo e argomento e data dell'articolo

select r.nome, r.editore, a.titolo, a.argomento, a.data_articolo as 'data art.'
from RIVISTA as r, ARTICOLO as a
where r.rivista_id = a.rivista_id;

select floor(rand() * 6) + 1 as casuale from ARTICOLO;



