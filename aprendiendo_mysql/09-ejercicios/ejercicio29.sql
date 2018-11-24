/*
Crear una vista llamada vendedoresA que incluira todos los vendedores del grupo
que se llame vendedoresA
*/

CREATE VIEW Vendedores_A AS
SELECT v.nombre AS 'Vendedor A' FROM vendedores v
INNER JOIN grupos g ON v.grupo_id= g.id WHERE g.nombre = 'Vendedores A'
-- Otra forma
SELECT * FROM vendedores WHERE grupo_id IN
    (SELECT id FROM grupos WHERE nombre='Vendedores A')