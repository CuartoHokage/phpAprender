/***
int(numero cifras )entero
integer(n° cifras) entero (maximo 255)
varchar(n° caracteres) alfanumerico o string (maximo 255)
char(n° caracteres) alfanumerico o string
float(n° cifras, n° decimales) numero decimal
date, time, timestamp

//String mas grandes
MEDIUMTEXT 16 millones de carateres
LONGTEXT 4 billones de caracteres
TEXT 65535 caracteres
/**

//Enteros grandes
MEDIUMINT
BIGINT
Crear una tabla 
*/
create table usuarios(
id int(255) auto_increment not null,
nombre varchar(100) not null,
apellidos varchar(255) default'Hola que tal',
email varchar(100) not null,
password varchar(255),
-- Especifica la clave primaria
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);