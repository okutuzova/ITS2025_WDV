USE fondamenti;

-- crea la tabella

CREATE TABLE corsi (
	id INT PRIMARY KEY auto_increment,
    nome varchar(100),
    ore INT
);

-- elimina tabella
DROP TABLE corsi;



-- CRUD create, read, update, delete

-- aggiungi un record
INSERT INTO corsi (id, nome) VALUES (1, 'Fondamenti di basi di dati');

-- trova tutti i record
SELECT * FROM corsi;

-- modifica record
UPDATE corsi SET ore = 68 WHERE id = 1;

-- elimina record
DELETE FROM corsi WHERE id = 1;

-- inserisci tutti i record 

INSERT INTO corsi (nome) values 
('Approfondimenti didattici e Orientamento'),
('CMS'),
('Copyright e norme giuridiche del mondo digitale'),
('Fondamenti di basi di dati'),
('Fondamenti di programmazione'),
('Fondamenti di reti di calcolatori'),
('Fondamenti di UX/UI Design ed Elaborazione Immagini'),
('Fondamenti di Version Control'),
('HTML, CSS e Strumenti di Digital Marketing (SEO, SEM, SEA)'),
('Inglese'),
('Laboratorio di preparazione project work'),
('Learning by Project - Soft Skill'),
('Learning by Project - Tech'),
('Linux Server e Container'),
('Orientamento al lavoro'),
('Parità fra uomini e donne e non discriminazione'),
('Percorso di sviluppo soft skills'),
('Programmazione - Angular'),
('Programmazione - Javascript e Typescript'),
('Programmazione - PHP'),
('Programmazione - React'),
('RESTful API'),
('Sicurezza informatica'),
('Sicurezza sul lavoro'),
('Strumenti AI e Prompt Engineering');

SELECT * FROM corsi WHERE id = 7;
SELECT * FROM corsi WHERE nome = 'Programmazione - Angular';
SELECT * FROM corsi WHERE nome LIKE 'Programmazione%';
SELECT * FROM corsi WHERE nome LIKE '%di%';
