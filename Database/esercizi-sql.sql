
-- 1. Selezionare tutte le auto nella tabella
SELECT * 
FROM automobili;
-- 2. Visualizzare solo marca, modello e prezzo di tutte le auto
SELECT marca, modello, prezzo 
FROM automobili;
-- 3. Trovare tutte le auto con un prezzo inferiore a 20.000 euro
SELECT * 
FROM automobili 
WHERE prezzo < 20000;
-- 4. Selezionare tutte le auto con 5 posti
SELECT * 
FROM automobili 
WHERE posti = 5;
-- 5. Ordinare le auto in base al prezzo in ordine decrescente
SELECT * 
FROM automobili 
ORDER BY prezzo DESC;
-- 6. Calcolare la media del prezzo delle auto
SELECT AVG(prezzo) AS media_prezzo 
FROM automobili;
-- 7. Contare quante auto hanno una cilindrata superiore a 1600cc
SELECT COUNT(*) AS auto_grandi_cilindrata 
FROM automobili 
WHERE cilindrata > 1600;
-- 8. Elencare tutte le marche presenti nella tabella senza duplicati
SELECT DISTINCT marca 
FROM automobili ORDER BY marca;
-- 9. Trovare la marca e il modello dell'auto più costosa
SELECT marca, modello, prezzo 
FROM automobili 
ORDER BY prezzo DESC 
LIMIT 10,10;
-- 10. Trovare tutte le auto con un prezzo tra 20.000 e 30.000 euro
SELECT * 
FROM automobili 
WHERE prezzo BETWEEN 20000 AND 30000;

select distinct marca 
from automobili 
where marca like '____' 
order by marca;

create table marche (
	id int primary key auto_increment,
	marca varchar(20) unique
) select distinct marca from automobili order by marca;

select * from marche;

alter table automobili 
add column marche_id int not null;

update automobili, marche set automobili.marche_id = marche.id where automobili.marca = marche.marca;

alter table automobili drop column marca;

alter table automobili add constraint fk_marche 
foreign key (marche_id) references marche(id);

select a.modello, m.marca 
from automobili as a, marche as m
where a.marche_id = m.id
order by m.marca, a.modello;














