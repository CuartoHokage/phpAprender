/*
Mostrar todos los registros de una tabla
*/
SELECT email, nombre, apellidos FROM usuarios;
-- Mostrar todos los cambios
SELECT * FROM usuarios;

-- OPERADORES ARITMETICOS
SELECT email, (4+7) AS 'Operacion' FROM usuarios;
SELECT email, (4-7) AS 'Operacion' FROM usuarios;
SELECT email, (4*7) AS 'Operacion' FROM usuarios;
SELECT email, (4/7) AS 'Operacion' FROM usuarios;
-- Operacion columna
SELECT id, (id+7) AS 'Operacion' FROM usuarios;