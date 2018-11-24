/*
Mostrar los datos del vendedor con mas antiguedad en el concecionario
*/
-- Inserte vendedor antiguo para efectos de practica
INSERT INTO vendedores VALUES(null, 3,NULL, 'Ascario', 'Paz Bonilla', 'Jefe', '1995-12-05', 44444444, 50)
-- 
SELECT *FROM vendedores ORDER BY fecha ASC LIMIT 1;

/*
30+ Obtener los coches con mas unidades vendidas
*/
SELECT co.modelo, SUM(e.cantidad) FROM coches co 
INNER JOIN encargos e ON co.id= e.coche_id
-- Order by ordenar por columna 2
GROUP BY co.id ORDER BY 2 DESC LIMIT 3;
