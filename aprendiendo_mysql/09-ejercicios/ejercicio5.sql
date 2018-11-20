-- Mostrar los vendedores con su nombre y numero de días
-- que llevan en el concesionario

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'Días' FROM vendedores;