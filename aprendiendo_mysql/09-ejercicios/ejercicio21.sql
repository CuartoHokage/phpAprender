/*
Obtener los nombres y ciudades de los clientes con encargos igual o mayor
a 3 unidades
*/

SELECT nombre, ciudad FROM clientes WHERE id IN
    (SELECT cliente_id FROM encargos WHERE cantidad>=3)