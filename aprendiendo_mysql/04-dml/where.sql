-- Consulta con una condición
SELECT * FROM usuarios WHERE email= "admin@admin.com";

/**-- Operadores de comparacion
* 
    =
    !=
    >
    <
    =>
    <=
    Entre: between A and B
    En: in
    is null
    is not null
    Como: like
    Distinto: not like    
*/

-- Ejemplos
-- 1. Mostrar nombres y apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)=2019; 
-- 2. Mostrar nombres y apellidos de todos los usuarios no registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!=2019 OR ISNULL(fecha); 

-- Operadores logicos
/**
o   OR
y   AND
no  NOT
*/
-- Comodines
/*
Cualquier cantidad de caracteres: %
Un caracter desconcido: _
*/
-- 3. Mostrar el email de los usuarios en los que el apellido tenga la letra a y la contraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%x%' AND password='1234'; 
-- 4. Sacar todos los registros de la tabla siempre y cuando el año sea par
SELECT *FROM usuarios WHERE (YEAR(fecha)%2 =0);
-- 5. Sacar todos los registros de la tabla usuario cuyo nombre tenga mas de 5 letras y se ayan registrado
-- antes del 2020 y mostrar el nombre en mayusculas
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre)> 5) AND (YEAR(fecha)<2020);

-- Ordenar por cual campo
SELECT * FROM usuarios ORDER BY id DESC;

-- Limitar la cantidad de registros que muestre 
SELECT * FROM usuarios LIMIT 1;
SELECT * FROM usuarios LIMIT 2;
SELECT * FROM usuarios LIMIT 3;
    --rango
 SELECT * FROM usuarios LIMIT 3,5;