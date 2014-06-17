CREATE TABLE Carrera (
        id_carrera	SERIAL primary key not null,
        nombre		varchar(100) not null,
        campus		varchar(100) not null
);

CREATE TABLE Alumno (
        rol			varchar(100) primary key not null,
        id_carrera	int references Carrera(id_carrera) not null,
        rut			varchar(100) not null,
        nombre		varchar(100) not null,
        correo		varchar(100) not null,
        contrasena	varchar(100) not null,
        telefono	varchar(100) not null,
        talla		varchar(100) default null
);

CREATE TABLE Postulante (
	id_postulante	SERIAL primary key not null,
	rol		 		varchar(100) references Alumno(rol) not null
);

CREATE TABLE Permiso (
	id_permiso			SERIAL primary key not null,
	agregar_co_area		int not null,
	cambiar_talla 		int not null,
	ver_postulaciones 	int not null
);


CREATE TABLE Coordinador (
	id_coordinador	SERIAL primary key not null,
	id_permiso		int references Permiso(id_permiso) not null,
	rol				varchar(100) references Alumno(rol) not null,
	tipo 			int not null
);

CREATE TABLE Selecciona (
	id_postulante	int references Postulante(id_postulante) not null,
	id_coordinador	int references Coordinador(id_coordinador) not null,
	primary key(id_postulante, id_coordinador)
);

CREATE TABLE Area (
	id_area 		SERIAL primary key not null,
	nombre			varchar(100) not null,
	n_colaboradores	int not null,
	horario 		varchar(100) not null
);

CREATE TABLE Postula (
	id_postulante	int references Postulante(id_postulante) not null,
	id_area 		int references Area(id_area) not null,
	estado			boolean not null,
	prioridad		int not null,
	primary key(id_postulante, id_area)
);

CREATE TABLE Coordina (
	id_coordinador	int references Coordinador(id_coordinador) not null,
	id_area			int references Area(id_area) not null,
	primary key(id_coordinador, id_area)
);

CREATE TABLE Noticia (
	id_noticia		SERIAL not null,
	id_coordinador	int references Coordinador(id_coordinador) not null,
	id_area			int references Area(id_area) not null,
	titular			varchar(100) not null,
	contenido		text not null,
	fecha			varchar(100) not null,
	primary key(id_noticia, id_coordinador, id_area)
);
