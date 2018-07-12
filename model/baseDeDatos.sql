CREATE DATABASE tiendaMusica;

USE tiendaMusica;

CREATE TABLE usuario(
    id INT AUTO_INCREMENT,
    rut VARCHAR (20),
    nombre VARCHAR (30),
    clave VARCHAR (30),
    PRIMARY KEY (id)
);



CREATE TABLE genero(
	id INT AUTO_INCREMENT,
    nombre VARCHAR (20),
    PRIMARY KEY(id)
);


CREATE TABLE banda(
	id INT AUTO_INCREMENT,
    nombre VARCHAR (20),
    PRIMARY KEY(id)
);

CREATE TABLE bandaGenero(
	id INT AUTO_INCREMENT,
    fk_genero INT,
    fk_banda INT,
    FOREIGN KEY (fk_genero) REFERENCES genero (id),
    FOREIGN KEY (fk_banda) REFERENCES banda (id),
    PRIMARY KEY(id)
);



CREATE TABLE producto(
	id INT AUTO_INCREMENT,
    nombre VARCHAR (20),
    banda_Generofk INT,
    anio INT,
    stock INT,
	FOREIGN KEY (banda_Generofk) REFERENCES bandaGenero (id),
    PRIMARY KEY(id)
);

CREATE TABLE productoAdquirido ( 
	id INT AUTO_INCREMENT,
    fk_usuario INT,
    fk_producto INT,
    FOREIGN KEY (fk_usuario) REFERENCES usuario (id),
    FOREIGN KEY (fk_producto) REFERENCES producto (id),
    PRIMARY KEY (id)
);


DELIMITER //
CREATE PROCEDURE efectuarCompraDeUnProducto (idUsuario INT, idProducto INT)
	BEGIN
		DECLARE stockActual INT;
        SET stockActual=(SELECT stock FROM producto WHERE id=idProducto);
		INSERT INTO productoAdquirido VALUES (NULL, idUsuario, idProducto);
        UPDATE producto SET stock=(stockActual-1) WHERE id=idProducto;
	END //
DELIMITER ;


INSERT INTO genero VALUES (NULL,'Clasica');
INSERT INTO genero VALUES (NULL,'Rock');
INSERT INTO genero VALUES (NULL,'Pop');

INSERT INTO banda VALUES (NULL,'2Cellos');
INSERT INTO banda VALUES (NULL,'Dowonfall');
INSERT INTO banda VALUES (NULL,'Ice Joy');

INSERT INTO bandaGenero VALUES (NULL,1,1);
INSERT INTO bandaGenero VALUES (NULL,2,2);
INSERT INTO bandaGenero VALUES (NULL,3,3);

INSERT INTO producto VALUES (NULL, 'Suplica',1,2017,3);
INSERT INTO producto VALUES (NULL, 'Stellar king',2,2015,0);
INSERT INTO producto VALUES (NULL, 'Break it down',3,2016,4);
INSERT INTO producto VALUES (NULL, 'Suplica',1,2018,3);


CREATE VIEW verProductosConInfo AS
SELECT producto.id AS 'id', producto.nombre AS 'Disco', banda.nombre AS 'Banda', genero.nombre AS 'Genero' , producto.anio AS 'Anio', producto.stock
AS 'Stock'
FROM producto, bandaGenero, banda, genero
WHERE producto.banda_Generofk = bandaGenero.id AND bandaGenero.fk_banda= banda.id AND bandaGenero.fk_genero= genero.id AND stock >0;


DELIMITER //
CREATE PROCEDURE determinarSiProductoExisteOTieneStock (idProducto INT) -- DROP PROCEDURE determinarSiProductoExisteOTieneStock;
	BEGIN
		DECLARE productoValido BIT;
        DECLARE cantStock INT;
        
        SET cantStock=(SELECT stock FROM producto WHERE id=idProducto);
        SET productoValido=0;
        
        IF (cantStock=NULL OR cantStock=0) THEN
			SET productoValido=0;
		ELSEIF (cantStock>0) THEN
			SET productoValido=1;
		END IF;
    
		SELECT productoValido;
    END //
DELIMITER ;

-- CALL determinarSiProductoExisteOTieneStock(3);



/*
De aqui en adelante es todo para pruebas


Este select sirve para ver los nombres de productos adquiridos por un determinado usuario
SELECT producto.nombre AS 'Nombre' FROM producto, usuario, productoAdquirido WHERE productoAdquirido.fk_producto=producto.id AND 
productoAdquirido.fk_usuario=usuario.id AND  usuario.id=2;
*/



INSERT INTO usuario VALUES (NULL,'sadasasd','ASD','111');

CALL efectuarCompraDeUnProducto (1,1);

-- SELECT * FROM verProductosConInfo WHERE Disco LIKE '%Suplica%';
-- SELECT * FROM verProductosConInfo;




-- SELECT * FROM usuario;

-- DROP DATABASE tiendaMusica;

