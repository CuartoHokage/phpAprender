/*
Listar los vendedores y el numero de clientes tengan o no cliente
*/

SELECT CONCAT(v.nombre,' ',v.apellidos) AS 'Vendedor', COUNT(c.id) AS 'numero de clientes' FROM vendedores v 
LEFT JOIN clientes c ON v.id= c.vendedor_id
GROUP BY v.id;