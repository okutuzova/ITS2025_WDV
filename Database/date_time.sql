SELECT * FROM esercitazioni.ARTICOLO;

alter table ARTICOLO
add column data_articolo DATE;

alter table ARTICOLO
add column ora_articolo TIME;

alter table ARTICOLO
add column data_tempo DATETIME;

set sql_safe_updates = 0;

update ARTICOLO set data_articolo = current_date();
update ARTICOLO set ora_articolo = current_time();
update ARTICOLO set data_tempo = now();

