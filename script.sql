create table cultivos
(
    id             int auto_increment
        primary key,
    referencia     varchar(10)  not null,
    nombre         varchar(40)  not null,
    fecha_registro date         not null,
    descripcion    varchar(255) null
);

create table areas_cultivo
(
    id          int auto_increment
        primary key,
    nombre      varchar(45) null,
    medida      varchar(20) not null,
    cantidad    int         null,
    ubicacion   varchar(45) null,
    cultivos_id int         not null,
    constraint FK_areas_cultivo_cultivos
        foreign key (cultivos_id) references cultivos (id)
);

create table cosechas
(
    id          int auto_increment
        primary key,
    nombre      varchar(45)  not null,
    descripcion varchar(255) null,
    cultivos_id int          not null,
    constraint FK_Cosechas_cultivos
        foreign key (cultivos_id) references cultivos (id)
);

create table labores_culturales
(
    id          int auto_increment
        primary key,
    nombre      varchar(45)  not null,
    descripcion varchar(255) null,
    cultivos_id int          not null,
    constraint FK_Labores_Culturales_cultivos
        foreign key (cultivos_id) references cultivos (id)
);

create table productos
(
    id          int auto_increment
        primary key,
    codigo      varchar(10)  not null,
    nombre      varchar(40)  not null,
    descripcion varchar(255) null
);

create table roles
(
    id          int auto_increment
        primary key,
    nombre      varchar(40)  not null,
    descripcion varchar(255) null DEFAULT null
);

create table siembras
(
    id          int auto_increment
        primary key,
    nombre      varchar(45)  not null,
    descripcion varchar(255) null,
    cultivos_id int          not null,
    constraint FK_Siembras_cultivos
        foreign key (cultivos_id) references cultivos (id)
);

create table tareas
(
    id          int auto_increment
        primary key,
    codigo      varchar(10)  not null,
    nombre      varchar(45)  not null,
    descripcion varchar(255) null
);

create table tareas_areas
(
    id               int auto_increment
        primary key,
    areas_cultivo_id int not null,
    tareas_id        int not null,
    constraint FK_areas_cultivo_has_tareas_areas_cultivo
        foreign key (areas_cultivo_id) references areas_cultivo (id),
    constraint FK_areas_cultivo_has_tareas_tareas
        foreign key (tareas_id) references tareas (id)
);

create table tareas_cosechas
(
    id          int auto_increment
        primary key,
    cosechas_id int not null,
    tareas_id   int not null,
    constraint FK_cosechas_has_tareas_cosechas
        foreign key (cosechas_id) references cosechas (id),
    constraint FK_cosechas_has_tareas_tareas
        foreign key (tareas_id) references tareas (id)
);

create table tareas_labores_culturales
(
    id                    int auto_increment
        primary key,
    labores_culturales_id int not null,
    tareas_id             int not null,
    constraint FK_labores_culturales_has_tareas_labores_culturales
        foreign key (labores_culturales_id) references labores_culturales (id),
    constraint FK_labores_culturales_has_tareas_tareas
        foreign key (tareas_id) references tareas (id)
);

create table tareas_siembra
(
    id          int auto_increment
        primary key,
    siembras_id int not null,
    tareas_id   int not null,
    constraint FK_siembras_has_tareas_siembras
        foreign key (siembras_id) references siembras (id),
    constraint FK_siembras_has_tareas_tareas
        foreign key (tareas_id) references tareas (id)
);

create table tipo
(
    id          int auto_increment
        primary key,
    referencia  varchar(45)  not null,
    nombre      varchar(45)  not null,
    descripcion varchar(255) null
);

create table tareas_productos_tipo
(
    id           int auto_increment
        primary key,
    tareas_id    int not null,
    productos_id int not null,
    tipo_id      int not null,
    constraint FK_tareas_productos_productos
        foreign key (productos_id) references productos (id),
    constraint FK_tareas_productos_tareas
        foreign key (tareas_id) references tareas (id),
    constraint FK_tareas_productos_tipo
        foreign key (tipo_id) references tipo (id)
);

create table tipo_metodo
(
    id          int auto_increment
        primary key,
    nombre      varchar(45)  not null,
    descripcion varchar(255) null
);

create table metodo
(
    id             int auto_increment
        primary key,
    codigo         varchar(10)  not null,
    nombre         varchar(45)  not null,
    descripcion    varchar(255) null,
    tipo_metodo_id int          not null,
    productos_id   int          not null,
    constraint FK_metodo_producto
        foreign key (productos_id) references productos (id),
    constraint FK_metodo_tipo_metodo
        foreign key (tipo_metodo_id) references tipo_metodo (id)
);

create table unidades
(
    id           int auto_increment
        primary key,
    unidad       varchar(10) null,
    cantidad     int         null,
    precio       float       null,
    productos_id int         not null,
    constraint fk_unidades_productos
        foreign key (productos_id) references productos (id)
);

create table usuarios
(
    id             int auto_increment
        primary key,
    identificacion int(10)      not null,
    nombre         varchar(25)  not null,
    apellido       varchar(25)  not null,
    n_telefono     int(10)      null DEFAULT null,
    direccion      varchar(40)  null DEFAULT null,
    email          varchar(30)  not null,
    password       varchar(255) not null,
    ficha          int          null DEFAULT null,
    roles_id       int          not null,
    constraint FK_usuarios_roles
        foreign key (roles_id) references roles (id)
);


