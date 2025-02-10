CREATE TABLE Prodotti (
    CodP VARCHAR(10) PRIMARY KEY,       -- Codice prodotto
    NomeP VARCHAR(100) NOT NULL,        -- Nome del prodotto
    Colore VARCHAR(50),                 -- Colore del prodotto
    Taglia VARCHAR(10),                 -- Taglia del prodotto
    Magazzino VARCHAR(10)               -- Codice magazzino
);

INSERT INTO Prodotti (CodP, NomeP, Colore, Taglia, Magazzino) VALUES
('P001', 'Maglietta', 'Rosso', 'M', 'MZ01'),
('P002', 'Pantaloni', 'Blu', 'L', 'MZ02'),
('P003', 'Scarpe', 'Nero', '42', 'MZ03'),
('P004', 'Cappello', 'Verde', 'Unica', 'MZ01'),
('P005', 'Giacca', 'Grigio', 'XL', 'MZ02'),
('P006', 'Zaino', 'Rosso', NULL, 'MZ03'),
('P007', 'Occhiali', 'Nero', 'Unica', 'MZ01'),
('P008', 'Guanti', 'Bianco', 'M', 'MZ02'),
('P009', 'Cintura', 'Marrone', 'L', 'MZ03'),
('P010', 'Orologio', 'Oro', 'Unica', 'MZ01');

CREATE TABLE Fornitori (
    CodF VARCHAR(10) PRIMARY KEY,       -- Codice fornitore
    NomeF VARCHAR(100) NOT NULL,        -- Nome del fornitore
    NSoci INT,                          -- Numero di soci
    Sede VARCHAR(100)                   -- Sede del fornitore
);
INSERT INTO Fornitori (CodF, NomeF, NSoci, Sede) VALUES
('F001', 'Forniture Srl', 10, 'Milano'),
('F002', 'Prodotti Spa', 15, 'Roma'),
('F003', 'Servizi & Co.', 8, 'Napoli'),
('F004', 'Global Supply', 20, 'Torino'),
('F005', 'Tech Parts', 5, 'Bologna'),
('F006', 'Fashion Line', 12, 'Firenze'),
('F007', 'Home Goods', 6, 'Verona'),
('F008', 'Quick Deliver', 9, 'Genova'),
('F009', 'Market Solutions', 7, 'Palermo'),
('F010', 'Green Supply', 4, 'Venezia');
CREATE TABLE Clienti (
    CodCliente VARCHAR(10) PRIMARY KEY, -- Codice cliente
    Nome VARCHAR(100) NOT NULL,         -- Nome del cliente
    Email VARCHAR(100),                 -- Email del cliente
    DataRegistrazione DATE DEFAULT (CURRENT_DATE) -- Data di registrazione
);
INSERT INTO Clienti (CodCliente, Nome, Email, DataRegistrazione) VALUES
('C001', 'Mario Rossi', 'mario.rossi@example.com', '2024-01-01'),
('C002', 'Anna Bianchi', 'anna.bianchi@example.com', '2024-01-02'),
('C003', 'Luca Verdi', 'luca.verdi@example.com', '2024-01-03'),
('C004', 'Giulia Neri', 'giulia.neri@example.com', '2024-01-04'),
('C005', 'Marco Gialli', 'marco.gialli@example.com', '2024-01-05'),
('C006', 'Elisa Blu', 'elisa.blu@example.com', '2024-01-06'),
('C007', 'Francesco Viola', 'francesco.viola@example.com', '2024-01-07'),
('C008', 'Chiara Marrone', 'chiara.marrone@example.com', '2024-01-08'),
('C009', 'Alessio Rosa', 'alessio.rosa@example.com', '2024-01-09'),
('C010', 'Sara Arancio', 'sara.arancio@example.com', '2024-01-10');
CREATE TABLE ProdottiArchivio (
    CodP VARCHAR(10) PRIMARY KEY,       -- Codice prodotto
    NomeP VARCHAR(100) NOT NULL,        -- Nome del prodotto
    Colore VARCHAR(50),                 -- Colore del prodotto
    Taglia VARCHAR(10)                  -- Taglia del prodotto
);
INSERT INTO ProdottiArchivio (CodP, NomeP, Colore, Taglia) VALUES
('A001', 'Maglietta Vintage', 'Rosso', 'M'),
('A002', 'Pantaloni Retrò', 'Blu', 'L'),
('A003', 'Scarpe Classiche', 'Nero', '42'),
('A004', 'Cappello d\'Epoca', 'Verde', 'Unica'),
('A005', 'Giacca Pesante', 'Grigio', 'XL'),
('A006', 'Zaino Montagna', 'Rosso', NULL),
('A007', 'Occhiali Retrò', 'Nero', 'Unica'),
('A008', 'Guanti Termici', 'Bianco', 'M'),
('A009', 'Cintura di Cuoio', 'Marrone', 'L'),
('A010', 'Orologio Vintage', 'Oro', 'Unica');
CREATE TABLE Ordini (
    CodOrdine VARCHAR(10) PRIMARY KEY,  -- Codice ordine
    CodCliente VARCHAR(10) NOT NULL,    -- Codice cliente
    DataOrdine DATE NOT NULL,           -- Data dell'ordine
    FOREIGN KEY (CodCliente) REFERENCES Clienti(CodCliente)
);
INSERT INTO Ordini (CodOrdine, CodCliente, DataOrdine) VALUES
('O001', 'C001', '2024-01-11'),
('O002', 'C002', '2024-01-12'),
('O003', 'C003', '2024-01-13'),
('O004', 'C004', '2024-01-14'),
('O005', 'C005', '2024-01-15'),
('O006', 'C006', '2024-01-16'),
('O007', 'C007', '2024-01-17'),
('O008', 'C008', '2024-01-18'),
('O009', 'C009', '2024-01-19'),
('O010', 'C010', '2024-01-20');
CREATE TABLE Vendite (
    CodVendita VARCHAR(10) PRIMARY KEY, -- Codice vendita
    CodProdotto VARCHAR(10) NOT NULL,  -- Codice prodotto
    Quantita INT NOT NULL,             -- Quantità venduta
    PrezzoUnitario DECIMAL(10, 2),     -- Prezzo per unità
    Totale DECIMAL(10, 2),             -- Totale della vendita
    FOREIGN KEY (CodProdotto) REFERENCES Prodotti(CodP)
);
INSERT INTO Vendite (CodVendita, CodProdotto, Quantita, PrezzoUnitario, Totale) VALUES
('V001', 'P001', 10, 15.99, 159.90),
('V002', 'P002', 5, 29.99, 149.95),
('V003', 'P003', 8, 49.99, 399.92),
('V004', 'P004', 12, 9.99, 119.88),
('V005', 'P005', 6, 89.99, 539.94),
('V006', 'P006', 3, 59.99, 179.97),
('V007', 'P007', 15, 19.99, 299.85),
('V008', 'P008', 10, 12.99, 129.90),
('V009', 'P009', 4, 24.99, 99.96),
('V010', 'P010', 2, 199.99, 399.98);
CREATE TABLE FornitoriProdotti (
    CodF VARCHAR(10) NOT NULL,          -- Codice fornitore
    CodP VARCHAR(10) NOT NULL,          -- Codice prodotto
    Qta INT NOT NULL,                   -- Quantità fornita
    PRIMARY KEY (CodF, CodP),           -- Chiave primaria composita
    FOREIGN KEY (CodF) REFERENCES Fornitori(CodF),
    FOREIGN KEY (CodP) REFERENCES Prodotti(CodP)
);
INSERT INTO FornitoriProdotti (CodF, CodP, Qta) VALUES
('F001', 'P001', 100),
('F002', 'P002', 200),
('F003', 'P003', 150),
('F004', 'P004', 250),
('F005', 'P005', 300),
('F006', 'P006', 50),
('F007', 'P007', 80),
('F008', 'P008', 70),
('F009', 'P009', 90),
('F010', 'P010', 60);
CREATE TABLE OrdiniTemp (
    CodOrdine VARCHAR(10) PRIMARY KEY,  -- Codice ordine temporaneo
    CodCliente VARCHAR(10) NOT NULL,    -- Codice cliente
    DataOrdine DATE NOT NULL            -- Data dell'ordine
);

INSERT INTO OrdiniTemp (CodOrdine, CodCliente, DataOrdine) VALUES
('T001', 'C001', '2024-01-21'),
('T002', 'C002', '2024-01-22'),
('T003', 'C003', '2024-01-23'),
('T004', 'C004', '2024-01-24'),
('T005', 'C005', '2024-01-25'),
('T006', 'C006', '2024-01-26'),
('T007', 'C007', '2024-01-27'),
('T008', 'C008', '2024-01-28'),
('T009', 'C009', '2024-01-29'),
('T010', 'C010', '2024-01-30');


-- 1. Inserire un singolo record
-- Inserire un prodotto nella tabella Prodotti:
select * from prodotti;
insert into prodotti values ('P011', 'Giubbotto', 'Nero', 'XL', 'MZ02');

insert into prodotti values 
('P012', 'Giubbotto', 'Nero', 'L', 'MZ02'),
('P013', 'Giubbotto', 'Blu', 'L', 'MZ03'),
('P014', 'Giubbotto', 'Verde', 'L', 'MZ01')
;
-- 2. Inserire più record in una sola istruzione
-- Inserire più fornitori nella tabella Fornitori: `
select * from fornitori;
insert into fornitori
values 
('F011', 'RED Supply', '5', 'Verona'),
('F012', 'BLUE Supply', '6', 'Vicenza'),
('F013', 'BLACK Supply', '7', 'Padova')
;
-- 3. Inserire un record parziale
-- Inserire un cliente con alcuni campi lasciati nulli:
select * from clienti;
-- 4. Inserire un record calcolato da un'altra tabella

-- Copiare un prodotto dalla tabella Prodotti alla tabella ProdottiArchivio:

-- 5. Inserire una riga con una sottoquery

-- Inserire un ordine per il cliente più recente:

-- 6. Inserire un record con valori default

-- Inserire un fornitore con i valori predefiniti per alcuni campi:

-- 7. Inserire dati con valori calcolati

-- Inserire un record nella tabella Vendite calcolando il totale:

-- 8. Inserire dati duplicati con modifiche

-- Duplicare un prodotto con un nuovo codice e colore:

-- 9. Inserire dati nella tabella di associazione

-- Aggiungere una relazione tra fornitori e prodotti:

-- 10. Inserire dati provenienti da una tabella di log

-- Inserire tutti i record da una tabella temporanea a una tabella definitiva:

-- ---

-- Esercizi di SELECT
-- Esegui 10 esercizi di SELECT in SQL per esercitarsi con la sintassi e i concetti.

-- 1. Selezionare tutti i dettagli dei prodotti di colore rosso

-- 2. Trovare i nomi e le sedi dei fornitori con più di 5 soci

-- 3. Trovare il nome e l'email dei clienti registrati negli ultimi 30 giorni

-- 4. Calcolare il totale delle vendite per ogni prodotto

-- 5. Recuperare i dettagli dei fornitori che forniscono almeno un prodotto di colore "verde"

-- 6. Trovare i nomi dei clienti che hanno effettuato ordini

-- 7. Visualizzare i prodotti mai forniti da alcun fornitore

-- 8. Trovare i fornitori che forniscono almeno due prodotti diversi

-- 9. Recuperare i dettagli delle vendite per prodotti il cui prezzo unitario è maggiore della media

-- 10. Trovare i prodotti venduti esclusivamente nel magazzino "MZ001"

-- Esercizi di UPDATE
-- Esegui 10 esercizi di UPDATE in SQL per esercitarsi con la sintassi e i concetti.

-- 1. Aggiornare il colore dei prodotti con il codice "P001" in "rosso"

-- 2. Incrementare il numero di soci di tutti i fornitori con sede a "Milano" di 2

-- 3. Aggiornare il magazzino del prodotto "P002" a "MZ002"

-- 4. Ridurre del 10% la quantità disponibile per tutti i prodotti forniti da "F001"

-- 5. Impostare il colore dei prodotti senza un colore definito a "bianco"

-- 6. Cambiare l'indirizzo di tutti i fornitori con codice "F002" in "Via Roma, 10"

-- 7. Impostare la quantità a 0 per i prodotti mai forniti da alcun fornitore

-- 8. Aggiornare la sede dei fornitori con meno di 3 soci a "Sede Sconosciuta"

-- 9. Cambiare la taglia di tutti i prodotti di colore "verde" a "L"

-- 10. Aggiornare il nome dei fornitori che hanno fornito almeno un prodotto con quantità superiore a 100 in "Fornitore Premium"

-- Esercizi di DELETE
-- Esegui 10 esercizi di DELETE in SQL per esercitarsi con la sintassi e i concetti.

-- 1. Eliminare i prodotti con magazzino "MZ003"

-- 2. Rimuovere tutti i fornitori con sede a "Napoli"

-- 3. Eliminare tutte le relazioni prodotto-fornitore per il prodotto con codice "P004"

-- 4. Rimuovere tutti i prodotti con colore "nero"

-- 5. Eliminare tutti i fornitori con meno di 5 soci

-- 6. Eliminare le relazioni prodotto-fornitore per i fornitori con codice "F003"

-- 7. Eliminare tutti i prodotti mai forniti da alcun fornitore

-- 8. Rimuovere tutti i fornitori che non hanno fornito prodotti

-- 9. Eliminare tutti i prodotti con quantità inferiore a 10 in qualsiasi relazione prodotto-fornitore

-- 10. Rimuovere tutti i prodotti di taglia "S" e colore "giallo"

-- Esercizi con OPERATORI
-- Esegui 10 esercizi di OPERATORI in SQL per esercitarsi con la sintassi e i concetti.

-- Questi esercizi coprono diversi tipi di operatori:

-- Aritmetici (+, *, /)

-- Logici (AND, OR, NOT)

-- Di confronto (=, <>, >=, BETWEEN)

-- Speciali (LIKE, IN).

-- 1. Selezionare il nome e il prezzo aumentato del 10% per tutti i prodotti

-- 2. Trovare i prodotti con un prezzo tra 50 e 100 (inclusi)

-- 3. Visualizzare i fornitori con un numero di soci maggiore o uguale a 10

-- 4. Calcolare la quantità totale fornita per ogni prodotto

-- 5. Trovare i fornitori con il nome che inizia con "A"

-- 6. Mostrare tutti i prodotti che non sono né rossi né gialli

-- 7. Trovare i fornitori che si trovano in città diverse da "Milano"

-- 8. Calcolare la media delle quantità fornite da ciascun fornitore

-- 9. Selezionare tutti i fornitori che forniscono almeno un prodotto in quantità superiore a 50

-- 10. Visualizzare i prodotti con prezzo maggiore di 20 e in magazzini diversi da "MZ001"

-- Esercizi con JOIN
-- Esegui 10 esercizi di JOIN in SQL per esercitarsi con la sintassi e i concetti.

-- Questi esercizi coprono i seguenti tipi di JOIN:

-- INNER JOIN: restituisce solo le righe con corrispondenze tra le tabelle.

-- LEFT JOIN: restituisce tutte le righe della tabella sinistra, con valori NULL per la destra dove non c'è corrispondenza.

-- Condizioni e aggregazioni: integrano logiche con GROUP BY, HAVING e funzioni di aggregazione.

-- 1. Mostrare il nome dei prodotti e i nomi dei fornitori che li forniscono

-- 2. Trovare i fornitori che non forniscono alcun prodotto (LEFT JOIN con condizione NULL)

-- 3. Calcolare la quantità totale fornita per ogni prodotto e visualizzare anche i prodotti che non sono forniti (LEFT JOIN)

-- 4. Visualizzare i fornitori che forniscono prodotti con quantità maggiore di 50

-- 5. Trovare i prodotti non forniti da nessun fornitore

-- 6. Trovare i fornitori che forniscono solo prodotti di colore "rosso"

-- 7. Visualizzare i fornitori che forniscono almeno due prodotti diversi

-- 8. Trovare i prodotti forniti solo da un unico fornitore

-- 9. Trovare i fornitori che forniscono prodotti con quantità media superiore a 30

-- 10. Visualizzare i prodotti e il numero di fornitori che li forniscono

-- Esercizi con GROUP BY
-- Esegui 10 esercizi di GROUP BY in SQL per esercitarsi con la sintassi e i concetti.

-- Questi esercizi includono:

-- Funzioni aggregate: SUM, COUNT, AVG, MAX.

-- GROUP BY: per raggruppare i dati e calcolare metriche aggregate.

-- HAVING: per filtrare i risultati basandosi sulle funzioni aggregate.

-- Ordinamento: utilizzando ORDER BY e combinazioni con LIMIT.

-- 1. Contare il numero totale di prodotti disponibili

-- 2. Calcolare la quantità totale fornita per ogni prodotto

-- 3. Determinare la quantità media di prodotti forniti da ciascun fornitore

-- 4. Calcolare il numero di fornitori per ciascun prodotto

-- 5. Trovare il prodotto con la quantità massima fornita

-- 6. Determinare la quantità totale fornita per ciascun colore di prodotto

-- 7. Contare il numero di prodotti forniti da ogni fornitore

-- 8. Calcolare il numero medio di soci dei fornitori per città

-- 9. Trovare i prodotti con una quantità totale fornita superiore a 100

-- 10. Determinare il numero di prodotti forniti e la quantità totale fornita da fornitori con più di 5 soci





