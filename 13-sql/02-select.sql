-- show all pokemons
SELECT * FROM pokemons ;

--show a column name of pokemon 
SELECT  name FROM pokemons ;

--show many columns 
SELECT name , speed FROM pokemons ;

--show values distincts
SELECT DISTINCT type from pokemons ;

--show only type registers
SELECT *
FROM pokemons 
WHERE type = 'Water';

--OR
SELECT *
FROM pokemons 
WHERE type = 'Water'
OR type = 'Electric';

--MORE THAN
SELECT *
FROM pokemons
WHERE strengt > 1000 ;

--different <>
SELECT * 
FROM pokemons
WHERE type <>  'Water';

-- AND 
SELECT *
FROM pokemons 
WHERE type = 'Water'
AND speed > 80 ;

--BETWEEN
SELECT *
FROM pokemons 
WHERE stamina
BETWEEN 200
AND 300 ;

--ORDER BY : Ascendant
SELECT * 
FROM pokemons 
ORDER BY strenght;

SELECT * 
FROM pokemons 
ORDER BY strenght 
ASC;

--ORDER BY : Descendant
SELECT * 
FROM pokemons 
ORDER BY speed
DESC;

--Limit
SELECT * 
FROM pokemons
Limit 10;

--OFFSET
SELECT * 
FROM pokemons
Limit 5
OFFSET 10;

SELECT * 
FROM pokemons
Limit 5 , 10;

--  like : Search 
-- Show all records init with 'W'
SELECT * 
FROM pokemons
WHERE type 
LIKE "W%" ;

-- Show all results end with 'c'
SELECT * 
FROM pokemons
WHERE type 
LIKE "%c" ;

-- Show all results than contains with 'ma'
SELECT * 
FROM pokemons
WHERE name 
LIKE "%ma%" ;

-- Show  results  'pikachu'
SELECT * 
FROM pokemons
WHERE name 
LIKE "P_k_c_u" ;

-- Show all results that not contains 'ma'
SELECT * 
FROM pokemons
WHERE name 
NOT LIKE  "%ma%" ;

-- Show  results with many values using 'IN'
SELECT * 
FROM pokemons
WHERE type 
IN ('Fire' , 'Electric');

-- Alias
SELECT t.name AS name_trainer,
        p.name AS name_pokemon,
        p.type AS type_pokemon
FROM trainers AS t,
        pokemons AS p
WHERE p.trainer_id = t.id;


SELECT g.name AS name_gym,
       t.name AS name_trainer,
       p.name AS name_pokemon
fROM trainers AS t,
     gyms AS g,
     pokemons AS p 
WHERE g.id = t.gym_id AND t.id = p.trainer_id;

-- inner join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
INNER JOIN gyms
ON trainers.gym_id = gyms.id
INNER JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

--right join
SELECT trainers.name AS name_trainer,
gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
RIGHT JOIN gyms
ON trainers.gym_id = gyms.id AND
trainers.id = 1
RIGHT JOIN pokemons
ON pokemons.trainer_id = trainers.id;

-- join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

--union
SELECT name FROM trainers
UNION
SELECT name FROM gyms
UNION
SELECT name FROM pokemons;

--vistas
CREATE VIEW view_pokemons AS
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;








