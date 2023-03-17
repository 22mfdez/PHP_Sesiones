create table colaboradores
(
    id       int     not null,
    correo   varchar(50) null,
    password varchar(200) null,
    constraint colaboradores_pk
        primary key (id)
);


create table pedidos
(
    id           int auto_increment not null,
    fecha_pedido datetime null,
    producto     varchar(50)  null,
    unidades     int      null,
    constraint pedidos_pk
        primary key (id)
);