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
-- Funciones matematicas
SELECT ABS(4+7) AS 'Operacion' FROM usuarios;
    -- Redondeo de un numero decimal
SELECT CEIL(3.255) AS 'Operacion' FROM usuarios;
SELECT TRUNCATE(7.92, 1) AS 'Operacion' FROM usuarios;
SELECT ROUND(id, 3) AS 'Operacion' FROM usuarios;
    -- Sacar PI
SELECT PI() AS 'Operacion' FROM usuarios;
    -- Numeros aleatorios
SELECT RAND() AS 'OPERACION' FROM usuarios;
-- Convertir los textos a mayuscula
SELECT UPPER(nombre) FROM usuarios;
-- Convertir los textos a minuscula
SELECT LOWER(nombre) FROM usuarios;
-- Concatenar un campo
SELECT CONCAT(nombre, ' ', apellidos) AS 'Conversion' FROM usuarios;
-- Combinando funciones
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
-- Sacar la longitud de cadena
SELECT email, LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;
-- Limpiar espacios vacios
SELECT TRIM(CONCAT('   ',nombre, '     ', apellidos)) AS 'Conversion' FROM usuarios;

-- mostrar fecha actual 
SELECT fecha, email, CURDATE() as 'Fecha Actual' FROM usuarios;
-- Ver la diferencia entre una ffecha y otra en dias
SELECT  email, DATEDIFF(fecha, CURDATE()) as 'Fecha Actual' FROM usuarios;
-- sacar el nombre del dia
SELECT  email, DAYNAME(fecha) as 'Fecha Actual' FROM usuarios;
-- Sacar el dia del mes
SELECT  email, DAYMONTH(fecha) as 'Fecha Actual' FROM usuarios;
-- Sacar dia de la semana
SELECT  email, DAYWEEK(fecha) as 'Fecha Actual' FROM usuarios;
-- SAcar dia del año
SELECT  email, DAYOFYEAR(fecha) as 'Fecha Actual' FROM usuarios;
-- Sacar mes del año
SELECT  email, MONTH(fecha) as 'Fecha Actual' FROM usuarios;
-- sacar año
SELECT  email, YEAR(fecha) as 'Fecha Actual' FROM usuarios;
-- sacar hora
SELECT  email, HOUR(fecha) as 'Fecha Actual' FROM usuarios;
-- SAcar la hora actual
SELECT email, CURTIME() as 'Fecha Actual' FROM usuarios;
-- Sacar la hora del sistema operativo
SELECT email, SYSDATE() as 'Fecha Actual' FROM usuarios;
-- FORMATEAR LA FECHA (formato europeo en este caso)
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;
-- Comprobar si los apellidos son nulos
SELECT email, ISNULL(apellidos) FROM usuarios;
-- Comprobar si dos campos son iguales
SELECT email, STROMP('HOLA', 'HOLA') FROM usuarios;
-- ver version actaul de sql
SELECT VERSION() FROM usuarios;
-- Sacar el usuario de base de datos (DISTINcT para mostrar un solo dato de los repetidos)
SELECT DISTINCT USER() FROM usuarios;
-- IF NULL
SELECT IFFNULL(apellido, 'Este campo esta vacio') FROM usuarios;