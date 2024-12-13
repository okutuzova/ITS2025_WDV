**Schema (MySQL v5.7)**

    CREATE TABLE Corsi (
    
    	id INT PRIMARY KEY,
      	nome VARCHAR(50),
      	ore INT,
      	docente VARCHAR(30)
    
    );
    

---

**Query #1**

    INSERT INTO Corsi (id, nome, ore, docente) VALUES (1, 'Fondamenti di basi di dati', 68, 'Bogliaccino');

There are no results to be displayed.

---
**Query #2**

     
    INSERT INTO Corsi (id, nome) VALUES (2, 'Python');

There are no results to be displayed.

---
**Query #3**

     
    
    SELECT * FROM Corsi;

| id  | nome                       | ore | docente     |
| --- | -------------------------- | --- | ----------- |
| 1   | Fondamenti di basi di dati | 68  | Bogliaccino |
| 2   | Python                     |     |             |

---

[View on DB Fiddle](https://www.db-fiddle.com/f/2hSiH6QCeNvVwxH5AcJ55Q/0)