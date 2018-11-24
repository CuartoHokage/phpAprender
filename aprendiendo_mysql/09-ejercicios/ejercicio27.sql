/*
Visualizar los nombres de los clientes y la cantidad de encargos realizados
incluyendo los que no hayan realizado encargos
*/
-- con count
SELECT cl.nombre, COUNT(e.id) FROM encargos e
RIGHT JOIN clientes cl ON e.cliente_id= cl.id
GROUP BY 1;
-- Alreves sin count
SELECT cl.nombre, e.cantidad FROM  clientes cl
LEFT JOIN encargos e ON e.cliente_id= cl.id  
GROUP BY 1;
-- para efectos de practica insertar usuario sin encargos
INSERT INTO clientes VALUES(null, 2, 'Rei Ayagami', 'Tokio 3', 0, CURDATE() )