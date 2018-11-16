-- Consultas de agrupamiento
SELECT titulo FROM entradas GROUP BY categoria_id;
-- Sacar cuantas entradas de una categoria tengo
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id;
-- Consulta de agrupamiento con condiciones
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)=2;

/*
AVG sacar la media
COUNT contar el numero de elementos
MAX el valor máximo del grupo
MIN el valor minimo del grupo
SUM sumar todas los contenidos del grupo
*/
-- Sumo todos los id's con la media
SELECT AVG(id) AS 'media de entradas' FROM entradas;
SELECT MAX(id) AS 'id mayor', titulo FROM entradas;
SELECT MAX(id) AS 'id menor', titulo FROM entradas;
SELECT SUM(id) AS 'suma', titulo FROM entradas;
