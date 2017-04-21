Create database BolsasBD;
use BolsasBD;
create table TiposProductos(Id int PRIMARY KEY, Nombre varchar(50), Marca varchar(30), Color varchar(20), TipodeMaterial varchar(50), Pais varchar(20));
create table Productos(Id int PRIMARY KEY, Nombre varchar(200), Precio float, Existencia Int, IdTipoProducto Int,Foto varchar(100),FOREIGN KEY (IdTipoProducto) REFERENCES TiposProductos(Id));
create table Clientes(Id int PRIMARY KEY, Rfc varchar(13), Nombre varchar(200), Direccion varchar(200), Telefono varchar(20));
create table Proveedores(Id int PRIMARY KEY,Rfc varchar(13), Nombre varchar(200), Direccion varchar(200), Telefono varchar(20));

Insert into TiposProductos(Id,Nombre,Marca,Color,TipodeMaterial,Pais)Values(1,'Negro Bolsa','Classics','Negro','Sintetico','Mexico');
Insert into TiposProductos (Id,Nombre,Marca,Color,TipodeMaterial,Pais)Values(2,'Azul Bolsa','Jennyfer','Azul','Sintetico','Mexico');
Insert into TiposProductos (Id,Nombre,Marca,Color,TipodeMaterial,Pais)Values(3,'Inox Bolsa de Noche','Jennyfer','inox','Sintético','Mexico');
Insert into TiposProductos (Id,Nombre,Marca,Color,TipodeMaterial,Pais)Values(4,'Plata Bolsa','Jennyfer','Plata','Sintetico','Mexico');
Insert into TiposProductos (Id,Nombre,Marca,Color,TipodeMaterial,Pais)Values(5,'Blanco/Negro Bolsa','Jennyfer','Blanco y Negro','Sintetico','Mexico');

Insert into Productos (Id,Nombre, Precio, Existencia,IdTipoProducto)Values(1,'Negro Bolsa',240.00,10,1);
Insert into Productos (Id,Nombre, Precio, Existencia,IdTipoProducto)Values(2,'Azul Bolsa',450.00,6,2);
Insert into Productos (Id,Nombre, Precio, Existencia,IdTipoProducto)Values(3,'Inox Bolsa de Noche',189.00,1,3);
Insert into Productos (Id,Nombre, Precio, Existencia,IdTipoProducto)Values(4,'Plata Bolsa',420.00,6,4);
Insert into Productos (Id,Nombre, Precio, Existencia,IdTipoProducto)Values(5,'Blanco/Negro Bolsa',990.00,10,5);


Insert into Clientes(Id,Nombre,Rfc, Direccion, Telefono)Values(1,'Mariano Luis Sanchez Lopez','SALJ890309XXX','Bienestar Social','9691909221');
Insert into Clientes(Id,Nombre,Rfc, Direccion, Telefono)Values(2,'Sandra de Rosario Diaz Cano','DICK951206YYY','La paz','9612345100');

Insert into Proveedores(Id,Nombre,Rfc, Direccion, Telefono)Values(1,'Jennyfer','JEBR600102AAA','Av. Sonora Plan de Ayala', '9615512999');
Insert into Proveedores(Id,Nombre,Rfc, Direccion, Telefono)Values(2,'Karen','CSF812728ESO','San Agustin No.100 Piso 7 Santa Fe ','5221161923');
