-- Obtener un listado  de clientes atendidos por el vendedor 'Jaime Paz'
SELECT * FROM clientes cl WHERE vendedor_id
    IN(SELECT id FROM vendedores WHERE nombre='Michelle')
