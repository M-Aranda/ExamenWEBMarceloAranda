CREATE DATABASE tiendaMusica;

USE tiendaMusica;

CREATE TABLE usuario(
    id INT AUTO_INCREMENT,
    rut VARCHAR (20),
    nombre VARCHAR (30),
    clave VARCHAR (30),
    PRIMARY KEY (id)
);

-- SELECT * FROM usuario;

-- DROP DATABASE tiendaMusica;

