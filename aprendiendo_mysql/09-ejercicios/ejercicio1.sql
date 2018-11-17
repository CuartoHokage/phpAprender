/*
1.- Diseñar y crear la base de datos de un concesionario.
*/
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;
CREATE TABLE coches(
    id int(10) auto_increment not null,
    modelo VARCHAR(100) not null,
    marca VARCHAR(50),
    precio int(20) not null,
    stock int(255) not null,

    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id int(10) auto_increment not null,
    nombre VARCHAR(100) not null,
    ciudad VARCHAR(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id int(10) auto_increment not null,
    grupo_id int(10) not null,
    jefe int(10),
    nombre VARCHAR(50) not null,
    apellidos VARCHAR(50) not null,
    cargo varchar(50) not null,
    fecha DATE,
    sueldo FLOAT(20,2),
    comision FLOAT(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
    id int(10) auto_increment not null,
    vendedor_id int(10),
    nombre VARCHAR(10) not null,
    ciudad VARCHAR(50),
    gastado FLOAT(50,2) not null,
    fecha date,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
    id int(10) auto_increment not null,
    cliente_id int(10) not null,
    coche_id int(10) not null,
    cantidad int(100),
    fecha date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

-- RELLENAR LA BASE DE DATOS (INSERTS)