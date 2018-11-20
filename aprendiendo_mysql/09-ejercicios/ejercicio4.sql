-- Sacar a todos los vendedores cuya fecha de alta sea posterior
-- al 1 de Julio del 2018
UPDATE vendedores SET fecha='2018-06-01' WHERE id=1
SELECT *FROM vendedores WheRE fecha>='2018-07-01'