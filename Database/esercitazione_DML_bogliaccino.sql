use esercitazioni;

/*
1. Inserimento record nelle tabelle "americhe", "africa" ed "europa":
Scrivere un'istruzione INSERT unica per ciascuna tabella (tre query totali).
*/
INSERT INTO americhe (stato, capitale) VALUES ('Canada', 'Ottawa'), ('Brasile','Brasilia'), ('Stati Uniti','New York');
INSERT INTO europa (stato, capitale) VALUES ('Italia', 'Roma'), ('Francia','Lione'), ('Germania','Berlino');
INSERT INTO africa (stato, capitale) VALUES ('Egitto', 'Il Cairo'), ('Sudafrica','Port Elizabeth'), ('Marocco','Rabat');

-- unione di tabelle
SELECT 'americhe' AS continente, stato, capitale FROM americhe
UNION
SELECT 'africa' AS continente, stato, capitale FROM africa
UNION
SELECT 'europa' AS continente, stato, capitale FROM europa;

/*
2. Aggiornamento della capitale degli Stati Uniti:
Aggiorna il record relativo alla capitale degli Stati Uniti nella tabella americhe con il valore corretto: "Washington D.C.".
3. Aggiornamento della capitale del Sudafrica:
Aggiorna il record relativo alla capitale del Sudafrica nella tabella africa con il valore corretto: "Città del Capo".
4. Aggiornamento della capitale della Francia:
Aggiorna il record relativo alla capitale della Francia nella tabella europa con il valore corretto: "Parigi".
*/
update americhe set capitale = 'Washington D.C.' where id = 3;
update africa set capitale = 'Città del Capo' where id = 2;
update europa set capitale = 'Parigi' where id = 2;

/*
5. Inserimento record nella tabella "libro":
Inserire i seguenti record nella tabella libro utilizzando un'unica istruzione INSERT:
*/
INSERT INTO libro (titolo, prezzo, pagine, editore_id)
VALUES
('Marcovaldo',13.00,204,1),
('La coscienza di Zeno',14.00,664,2),
('Furore',12.50,478,1),
('Il Piccolo Principe',10.50,124,1);

/*
6. Inserimento record nella tabella "clienti":
Inserire i seguenti record nella tabella clienti utilizzando un'unica istruzione INSERT:

Nome: Pippo
Cognome: Costanzo
Telefono: 3212345678
Email: pippo.costanzo@gmail.com
Provincia: TO
Nome: Maria
Cognome: Filippi
Telefono: 3332345687
Email: maria.filippi@gmail.com
Provincia: MI
Nome: Mario
Cognome: Liberato
Telefono: 3357000678
Email: mario.liberato@gicloud.com
Provincia: CN
Nome: Grazia
Cognome: Alcanto
Telefono: 3212345678
Email: graziaalcanto@gmail.com
Provincia: MI
Nome: Francesco
Cognome: Franco
Telefono: 3481112345
Email: franco.francesco@icloud.com
Provincia: MI

*/

 INSERT INTO clienti SET
nome= 'Pippo',
cognome= 'Costanzo',
telefono= '3212345678',
email= 'pippo.costanzo@gmail.com',
provincia= 'TO';
INSERT INTO clienti SET
nome= 'Maria',
cognome= 'Filippi',
telefono= '3332345687',
email= 'maria.filippi@gmail.com',
provincia= 'MI';
INSERT INTO clienti SET
nome= 'Mario',
cognome= 'Liberato',
telefono= '3357000678',
email= 'mario.liberato@gicloud.com',
provincia= 'CN';
INSERT INTO clienti SET
nome= 'Grazia',
cognome= 'Alcanto',
telefono= '3212345678',
email= 'graziaalcanto@gmail.com',
provincia= 'MI';
INSERT INTO clienti SET
nome= 'Francesco',
cognome= 'Franco',
telefono= '3481112345',
email= 'franco.francesco@icloud.com',
provincia= 'MI';
 
SET sql_safe_updates = 0; 


/*
7. Aggiornamento della provincia nella tabella "clienti":
Aggiorna il campo provincia con il valore "AL" per tutti i clienti nella tabella clienti la cui provincia attuale è "MI".
*/
update clienti set provincia = 'AL' WHERE provincia = 'MI';

/*
8. Eliminazione record nella tabella "clienti":
Cancella dalla tabella clienti tutti i record in cui il campo provincia ha il valore "AL".*/
delete from clienti where provincia = 'AL';


