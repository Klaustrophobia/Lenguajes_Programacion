CREATE DATABASE DUMMY;

USE DUMMY;

CREATE TABLE administrador (
    idadministrador INT AUTO_INCREMENT,
    nombre          VARCHAR(30),
    apellido        VARCHAR(30),
    correo          VARCHAR(50),
    contrasenia     VARCHAR(50),
    PRIMARY KEY (idadministrador)
);

CREATE TABLE clientes (
    id   INT  AUTO_INCREMENT,
    nombre      VARCHAR(100),
    apellido    VARCHAR(100),
    identidad   VARCHAR(100),
    correo      VARCHAR(100),
    contrasenia VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE producto (
    idproducto      INT auto_increment primary KEY,
    nombre          VARCHAR(30),
    descripcion     TEXT,
    precio          DECIMAL(10, 2),
    categoria       VARCHAR(50)
);

-- COMIDA ES UNA TABLA INDEPENDIENTE, SE RETIRO EL IDORDEN, PERO SE AGREGO IDPRODUCTO (los ingredientes)
CREATE TABLE comida (
    idcomida    INT  AUTO_INCREMENT,
    nombre      VARCHAR(100),
    descripcion TEXT,
    precio      DECIMAL(10, 2),
    tipo INT,
    idproducto int ,
    PRIMARY KEY (idcomida),
    foreign key(idproducto) references producto(idproducto)
);


-- ORDEN DEBE LLEVAR EL ID COMIDA, EN LUGAR DEL IDFACTURA, SE CAMBIO.
CREATE TABLE orden (
    idorden           INT  AUTO_INCREMENT,
    id         		  INT ,
    idcomida		  int,
    fecha             DATE,
    estado boolean,
    PRIMARY KEY (idorden),
    FOREIGN KEY (id) REFERENCES clientes(id),
    FOREIGN KEY (idcomida) REFERENCES comida(idcomida)
);

-- FACTURA CONTIENE EL IDORDEN
CREATE TABLE factura (
    idfactura INT  AUTO_INCREMENT,
    fecha     DATE,
    total     DECIMAL(10, 2),
    estado    VARCHAR(100),
    PRIMARY KEY (idfactura),
    idorden INT,
    FOREIGN KEY (idorden) REFERENCES orden(idorden)
);


CREATE TABLE inventario (
    idinventario    INT  AUTO_INCREMENT,
    idproducto      INT ,
    idadministrador INT ,
    cantidad        INT,
    PRIMARY KEY (idinventario),
    FOREIGN KEY (idadministrador) REFERENCES administrador(idadministrador),
    FOREIGN KEY (idproducto) REFERENCES producto(idproducto)
);

CREATE TABLE proveedor (
    idproveedor     INT  AUTO_INCREMENT,
    nombre          VARCHAR(100),
    telefono        INT,
    email           VARCHAR(100),
    idadministrador INT,
    PRIMARY KEY (idproveedor),
    FOREIGN KEY (idadministrador) REFERENCES administrador(idadministrador)
);
