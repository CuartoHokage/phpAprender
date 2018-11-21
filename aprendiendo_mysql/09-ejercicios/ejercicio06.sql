-- Visualizar el nombre y los apellidos de los vendedores
-- y su fecha de registro y el dia de la semana en la que se 
-- registraron.
SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre y apellidos',
    fecha, DAYNAME(fecha) FROM vendedores;