/*
Obtener listado con los encargos realizados por el cliente 'Jaime Paz'
*/

SELECT e.id AS 'Numero de encargo', e.cantidad AS 'Cantidad de pedido', c.nombre, co.modelo, e.fecha  FROM encargos e
INNER JOIN clientes c ON c.id= cliente_id
INNER JOIN coches co ON co.id= coche_id
 WHERE e.cliente_id IN
    (SELECT id FROM clientes WHERE nombre='Jaime Paz')