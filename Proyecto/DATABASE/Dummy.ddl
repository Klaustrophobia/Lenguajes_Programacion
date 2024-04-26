CREATE DATABASE DUMMY;

USE DUMMY;

CREATE TABLE administrador (
    idadministrador INT NOT NULL AUTO_INCREMENT,
    nombre          VARCHAR(30),
    apellido        VARCHAR(30),
    correo          VARCHAR(50),
    contrasenia     VARCHAR(50),
    PRIMARY KEY (idadministrador)
);

CREATE TABLE clientes (
    id   INT NOT NULL AUTO_INCREMENT,
    nombre      VARCHAR(100),
    apellido    VARCHAR(100),
    identidad   VARCHAR(100),
    correo      VARCHAR(100),
    contrasenia VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE comida (
    idcomida    INT NOT NULL AUTO_INCREMENT,
    idorden     INT NOT NULL,
    nombre      VARCHAR(100),
    descripcion TEXT,
    precio      DECIMAL(10, 2),
    PRIMARY KEY (idcomida),
    FOREIGN KEY (idorden) REFERENCES orden(idorden)
);

CREATE TABLE factura (
    idfactura INT NOT NULL AUTO_INCREMENT,
    fecha     DATE,
    total     DECIMAL(10, 2),
    estado    VARCHAR(100),
    PRIMARY KEY (idfactura)
);

CREATE TABLE inventario (
    idinventario    INT NOT NULL AUTO_INCREMENT,
    idproducto      INT NOT NULL,
    idadministrador INT NOT NULL,
    cantidad        INT,
    PRIMARY KEY (idinventario),
    UNIQUE (idproducto),
    FOREIGN KEY (idadministrador) REFERENCES administrador(idadministrador),
    FOREIGN KEY (idproducto) REFERENCES producto(idproducto)
);

CREATE TABLE orden (
    idorden           INT NOT NULL AUTO_INCREMENT,
    id         INT NOT NULL,
    fecha             DATE,
    total             DECIMAL(10, 2),
    factura_idfactura INT NOT NULL,
    PRIMARY KEY (idorden),
    FOREIGN KEY (id) REFERENCES clientes(id),
    FOREIGN KEY (factura_idfactura) REFERENCES factura(idfactura)
);

CREATE TABLE producto (
    idproducto      INT NOT NULL AUTO_INCREMENT,
    nombre          VARCHAR(30),
    descripcion     TEXT,
    precio          DECIMAL(10, 2),
    categoria       VARCHAR(50),
    comida_idcomida INT NOT NULL,
    PRIMARY KEY (idproducto),
    FOREIGN KEY (comida_idcomida) REFERENCES comida(idcomida)
);

CREATE TABLE proveedor (
    idproveedor     INT NOT NULL AUTO_INCREMENT,
    nombre          VARCHAR(100),
    telefono        INT,
    email           VARCHAR(100),
    idadministrador INT NOT NULL,
    PRIMARY KEY (idproveedor),
    FOREIGN KEY (idadministrador) REFERENCES administrador(idadministrador)
);
