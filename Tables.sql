CREATE TABLE Carrera (
        id_carrera	int primary key not null,
        nombre		varchar(20) not null,
        campus		varchar(20) not null
);

CREATE TABLE Alumno (
        rol			varchar(20) primary key not null,
        id_carrera	int references Carrera(id_carrera) not null,
        rut			varchar(20) not null,
        nombre		varchar(20) not null,
        correo		varchar(20) not null,
        contrasena	varchar(20) not null,
        telefono	varchar(20) not null,
        talla		varchar(20) default null
);

CREATE TABLE Postulante (
	id_postulante	int primary key not null,
	rol				varchar(20) references Alumno(rol) not null
);

CREATE TABLE Coordinador (
	id_coordinador	int primary key not null,
	rol				varchar(20) references Alumno(rol) not null
);

CREATE TABLE Selecciona (
	id_postulante	int references Postulante(id_postulante) not null,
	id_coordinador	int references Coordinador(id_coordinador) not null,
	primary key(id_postulante, id_coordinador)
);

CREATE TABLE Area (
	id_area 		int primary key not null,
	nombre			varchar(20) not null,
	n_colaboradores	int not null
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
	id_noticia		int not null,
	id_coordinador	int references Coordinador(id_coordinador) not null,
	id_area			int references Area(id_area) not null,
	titular			varchar(20) not null,
	contenido		text not null,
	fecha			varchar(20) not null,
	primary key(id_noticia, id_coordinador, id_area)
);