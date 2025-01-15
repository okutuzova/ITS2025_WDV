SELECT * FROM esercitazioni.clienti;

-- order by
select cognome, nome 
from clienti 
order by cognome;

-- AS, concat()
select concat(cognome, ' ',nome) AS "Full Name", (2025) AS Anno
from clienti 
order by cognome;

-- where, like, and, or
select concat(cognome, ' ',nome) AS "Full Name", (2025) AS Anno, email, provincia
from clienti
WHERE 
email LIKE '%gmail.com' 
or -- operatore logico
provincia = 'MI'
order by cognome;

