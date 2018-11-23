/*
Obtener un listado de clientes (numero de clientes y nombre)
Mostrar el numero de vendedor y su nombre
*/

SELECT v.id AS 'id vendedor',CONCAT(v.nombre,' ',v.apellidos) AS 'nombre vendedor', cl.id AS 'id cliente', cl.nombre AS 'nombre cliente' FROM vendedores v
INNER JOIN clientes cl ON cl.vendedor_id= v.id