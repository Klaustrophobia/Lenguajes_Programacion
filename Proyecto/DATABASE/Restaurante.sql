create schema RESTAURANTE;

use RESTAURANTE;

create table usuarios(
idUsuario int auto_increment primary key,
nombreUsuario varchar(20),
contraseniaUsuario varchar(20)
);

create table clientes(
idCliente int auto_increment primary key,
nombreCliente varchar(20),
idUsuario int,
foreign key(idUsuario) references usuarios(idUsuario)
);

create table tipoComidas(
idTipo varchar(1) primary key,
nombreTipo varchar(10)
);

create table comidas(
idComida varchar(10) primary key,
nombre varchar(20),
precio int,
idTipo varchar(1),
foreign key(idtipo) references tipoComidas(idtipo)
);

create table ordenes(
idOrden int primary key,
idComida varchar(10),
foreign key(idComida) references comidas(idComida)
);

create table facturas(
idFactura int auto_increment primary key,
fechaEmision date,
idCliente int,
idOrden int,
foreign key(idCliente) references Clientes(idCliente),
foreign key(idOrden) references ordenes(idOrden)
);

create table proveedores(
idProveedor int auto_increment primary key,
nombreproveedor varchar(30)
);

create table ingredientes(
idIngrediente varchar(10) primary key,
nombreIngrediente varchar(30),
precio int,
cantidad int,
fechaCaducidad date
);

create table comida_ingrediente(
idComida varchar(10),
idIngrediente varchar(10),
foreign key(idComida) references comidas(idComida),
foreign key(idIngrediente) references ingredientes(idIngrediente)
);

create table ingrediente_proveedor(
idIngrediente varchar(10),
idProveedor int,
foreign key(idIngrediente) references ingredientes(idIngrediente),
foreign key(idProveedor) references proveedores(idProveedor)
);

create table ordenCompra(
numeroOrden int auto_increment primary key,
fechaEmision date,
estado varchar(10),
idIngrediente varchar(10),
foreign key(idIngrediente) references Ingredientes(idIngrediente)
);
