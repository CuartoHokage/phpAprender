/*
Listar los clientes que han hecho un encargo del coche 'Mazda 3'
*/

SELECT * FROM clientes c WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN
    (SELECT id FROM coches WHERE modelo = 'Mazda 3')
)