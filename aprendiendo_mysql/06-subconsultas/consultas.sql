/*
Subconsultas:
- son consultas que se ejecutan dentro de otras.
- consiste en utilizar los resultados de la subconsulta para operar en la
consulta principal
- Jungando con las claves foraneas
*/
INSERT INTO usuarios values(null, 'luis', 'luisillo', 'luisisllo@pillo.com', 'luis', CURDATE() );
-- Ver los usuarios que tienen entradas creadas (IN)
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);
-- Ver los usuarios que no tienen entradas (NOT IN)
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);

-- Sacar los usuarios que tengan una entrada con GTA
SELECT nombre , apellidos FROM usuarios WHERE id 
    IN(SELECT usuario_id from entradas WHERE titulo LIKE "%GTA%");

-- Sacar todas las entradas de la categoria acción utilizando su nombre
SELECT categoria_id,titulo from entradas WHERE categoria_id
    IN(SELECT id FROM categorias WHERE nombre = 'acción');

-- Mostrar las categorias con mas de 3 entradas
SELECT nombre from categorias WHERE 
    id IN
    (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);
-- Mostrar los usuarios que crearon una entrada el viernes
SELECT * FROM usuarios WHERE id 
    IN(SELECT usuario_id from entradas WHERE DAYOFWEEK(fecha)=6);
-- Mostrar el nombre del usuario que tenga mas entradas
SELECT CONCAT(nombre, ' ', apellidos) AS 'El usuario con mas entradas es:' FROM usuarios WHERE id 
    =(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);
-- Mostrar usuarios en orden desendente en función a su numero de entradas
SELECT nombre FROM usuarios WHERE id 
    IN(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id));
-- Mostrar categorias sin entradas
SELECT * FROM categorias WHERE id
   NOT IN(SELECT categoria_id FROM entradas);