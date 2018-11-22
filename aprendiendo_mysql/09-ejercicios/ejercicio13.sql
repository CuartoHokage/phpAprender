/*
    Sacar la media de sueldos entre todos los vendedores por grupo
*/

SELECT v.grupo_id, CEIL(AVG(v.sueldo)) AS 'Media', g.nombre, g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
GROUP BY grupo_id;