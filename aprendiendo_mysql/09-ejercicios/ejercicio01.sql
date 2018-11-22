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
    -- coches
    INSERT INTO coches VALUES(NULL, 'renauld clio', 'renauld', 12000, 13);
    INSERT INTO coches VALUES(NULL, 'Mazda 3', 'Mazda', 22000, 23);
    INSERT INTO coches VALUES(NULL, 'Corsa', 'Chevrolet', 19000, 6);
    INSERT INTO coches VALUES(NULL, 'xyz', 'BMW', 10000, 30);
    INSERT INTO coches VALUES(NULL, 'Porshe 911', 'Porshe', 32000, 43);
    INSERT INTO coches VALUES(NULL, 'Mustang 3', 'Ford', 42000, 93);
    -- grupos
    INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Manta');
    INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Manta');
    INSERT INTO grupos VALUES(NULL, 'Vendedores mecánicos', 'Manta');
    INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Guayaquil');
    INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Guayaquil');
    INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Guayaquil');
    INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Cuenca');
    INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Quito');
    INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Quito');
    -- vendedore
    INSERT INTO vendedores VALUES(NULL, 1, null, 'Jaime', 'Paz', 'Responsable de tienda', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 1, 1, 'Michelle', 'Ramirez', 'Ayudante de tienda', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 2, null, 'Jaime', 'Paz', 'Responsable de tienda', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 2, 3, 'Jaime', 'Paz', 'Responsable de tienda', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 3, null, 'Jaime', 'Paz', 'Responsable de ventas', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 4, null, 'Jaime', 'Paz', 'Mecanico jefe', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 5, null, 'Jaime', 'Paz', 'Vendedor experto', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 6, null, 'Jaime', 'Paz', 'Jefe de TI', CURDATE(), 30000, 4);
    INSERT INTO vendedores VALUES(NULL, 6, 8, 'Jaime', 'Paz', 'Ejecutivo de tienda', CURDATE(), 30000, 4);

    -- clientes
    INSERT INTO clientes VALUES(NULL, 1,'Jaime Paz Mero S.A', 'Manta', 24000 ,CURDATE());
    INSERT INTO clientes VALUES(NULL, 2,'Konothec S.A', 'Manta', 30000 ,CURDATE());
    INSERT INTO clientes VALUES(NULL, 2,'Naruto S.A', 'Guayaquil', 66000 ,CURDATE());
    INSERT INTO clientes VALUES(NULL, 2,'Galletitas S.A', 'Quito', 66000 ,CURDATE());
    INSERT INTO clientes VALUES(NULL, 2,'Galletitas2 S.A', 'Quito', 12000 ,CURDATE());
    -- encargos
    INSERT INTO encargos VALUES(NULL, 2, 1, 2 ,CURDATE());
    INSERT INTO encargos VALUES(NULL, 3, 4, 3 ,CURDATE());
    INSERT INTO encargos VALUES(NULL, 4, 2, 3 ,CURDATE());
    INSERT INTO encargos VALUES(NULL, 5, 2, 3 ,CURDATE());
    INSERT INTO encargos VALUES(NULL, 6, 2, 5 ,CURDATE());
    