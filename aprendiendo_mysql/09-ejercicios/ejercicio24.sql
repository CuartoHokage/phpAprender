/*
Listar los encargos con el nombre del coche, nombre del cliente
y el nombre de la ciudad, pero unicamente cuando sean de Manta.
*/

SELECT co.modelo, cl.nombre, cl.ciudad FROM encargos e
INNER JOIN coches co ON co.id= e.coche_id
INNER JOIN clientes cl ON cl.id= e.cliente_id WHERE cl.ciudad='Manta'