/*
Obtener una lista de los nombres de los clientes con el importe de sus
encargos acumulados (total gastado)
*/
SELECT cl.nombre, SUM(co.precio*cantidad) AS 'Importe' FROM clientes cl
INNER JOIN encargos e ON cl.id= e.cliente_id
INNER JOIN coches co ON e.coche_id= co.id
GROUP BY cl.nombre
-- Ordena por la columna 2 (importe) de manera ascendente.
ORDER BY 2 ASC;