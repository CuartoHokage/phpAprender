-- Visualizar todos los coches que tengan la letra a
-- y cuyo modelo empiece por M

SELECT *FROM coches WHERE modelo LIKE 'm%' AND modelo LIKE '%a%'; 