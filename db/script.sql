use final;

create table categoria(
id_categoria int auto_increment,
nombre varchar(50),
constraint pk_id_categoria primary key(id_categoria)
);

use final;
create table productos(
id_producto int auto_increment,
id_categoria int, 
nombre varchar(50) not null,
precio int not null,
constraint fk_id_categoria FOREIGN KEY (id_categoria)
references categoria(id_categoria)
on delete cascade 
on update cascade,
constraint pk_id_producto primary key(id_producto)
);



--create table usuario(
--id_usuario int auto_increment,
--alias varchar(50),
--clave varchar(30),
--constraint pk_id_usuario primary key(id_usuario)
--);

use final;
create table factura(
    id_factura int auto_increment,
    usuario VARCHAR(50) not null,
    fecha date not null,
    constraint pk_id_factura PRIMARY KEY(id_factura)
)

use final;
create table venta(
id_venta int auto_increment,
id_factura int not null,
idMenu int not null,
constraint fk_idMenu FOREIGN KEY (idMenu)
references menu(idMenu) on delete cascade 
on update cascade,
CONSTRAINT fk_id_factura FOREIGN KEY(id_factura)
REFERENCES factura(id_factura) 
on DELETE CASCADE
ON UPDATE CASCADE,
constraint pk_id_venta primary key(id_venta)
);


--Ultima factura ingresada
use final;
SELECT * FROM factura  GROUP BY id_factura desc LIMIT 1 

--Suma de los precios de los menus seleccionados
use final;
SELECT precio from menu where idMenu = 11;


use final;
SELECT sum(m.precio) as 'Total' FROM venta v 
INNER JOIN menu m ON v.idMenu = m.idMenu WHERE v.id_factura=6;