create database Control_Seguridad_Privada;
use Control_Seguridad_Privada;
create table Personas (
Id_persona Int (10) primary key auto_increment,
Nombre varchar (20),
Apellido varchar (20), 
Cedula int (11) unique, 
Telefono int (11) unique, 
email varchar (11) unique);

create table Administrador(
id_administrador int (10) primary key auto_increment, 
Id_persona int not null, constraint fk_personas_admistrador
foreign key (Id_persona) references Personas (Id_persona) ON UPDATE CASCADE);

create table Empleado (
Id_empleado int (10) primary key auto_increment,
Hoja_vida text (200) not null,
Id_persona int not null, constraint fk_personas_empleado
foreign key (Id_persona) references Personas (Id_persona) ON UPDATE CASCADE);

create table Registro_vacante (
Id_registro_vacante int (10) primary key auto_increment,
fecha_postulacion datetime,
fecha_finalizacion datetime,
Id_empleado int not null, constraint fk_registro_empleado
foreign key (Id_empleado) references Empleado (Id_empleado) ON UPDATE CASCADE);

create table vacante ( 
Id_registro_vacante int (10) primary key auto_increment,
tipo_contrato varchar (15),
requisitos varchar (20), 
id_administrador int not null, constraint fk_vacante_admin
foreign key (id_administrador) references Administrador (id_administrador) ON UPDATE CASCADE);

create table Empresa (
id_empresa int (10) primary key auto_increment,
nit int (11),
telefono int (11), 
email varchar (30));

create table solicitud_vacante (
id_solicitud_vacante int (10) primary key auto_increment,
fecha_inicio_vacante datetime,
fecha_final_postulacion datetime,
id_empresa int not null, constraint fk_empresa_solicitud_vacante
foreign key (id_empresa) references Empresa (id_empresa) ON UPDATE CASCADE,
Id_registro_vacante int not null, constraint fk_vacante_solicitud_vacante
foreign key (Id_registro_vacante) references vacante (Id_registro_vacante) ON UPDATE CASCADE);

create table cargo (
id int (10) primary key auto_increment,
vigilante varchar (15),
manejador_medios varchar (15), 
escolta varchar (15),
id_solicitud_vacante int not null, constraint fk_cargo_solicitud_vacante
foreign key (id_solicitud_vacante) references solicitud_vacante (id_solicitud_vacante) ON UPDATE CASCADE);

create table Ciudad_Departamento (
id_Ciudad int (10) primary key auto_increment,
direccion varchar (15),
ciudad varchar (15), 
id_persona int not null, constraint fk_persona_ciudad_departamento
foreign key (id_persona) references Personas (id_persona) ON UPDATE CASCADE,
id_empresa int not null, constraint fk_empresa_ciudad_departamento
foreign key (id_empresa) references Empresa (id_empresa) ON UPDATE CASCADE);
