INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil Eléctrica','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil Informática','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil Matemática','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil Mecánica','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil de Minas','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil Química','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Plan Común para Ingenierías y Licenciaturas','San Joaquin');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Civil Industrial','Vitacura');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería Comercial','Vitacura');
INSERT INTO CARRERA (nombre,campus) values ('Ingeniería en Aviación Comercial','Vitacura');
INSERT INTO CARRERA (nombre,campus) values ('Piloto Comercial','Vitacura');
INSERT INTO CARRERA (nombre,campus) values ('Técnico Universitario en Mantenimiento Areonáutico','Vitacura');

INSERT INTO AREA (nombre,n_colaboradores,horario) values ('Coordinación General',0,'1-10');
INSERT INTO AREA (nombre,n_colaboradores,horario) values ('Túnel',0,'1-2');
INSERT INTO AREA (nombre,n_colaboradores,horario) values ('Dinámicas',0,'3-4');
INSERT INTO AREA (nombre,n_colaboradores,horario) values ('Concursos',0,'3-4');
INSERT INTO AREA (nombre,n_colaboradores,horario) values ('Alimentación',0,'5-8');
INSERT INTO AREA (nombre,n_colaboradores,horario) values ('Registro Visual',0,'1-10');
INSERT INTO AREA (nombre,n_colaboradores,horario) values ('Audio',0,'5-10');

INSERT INTO Permiso (agregar_co_area,cambiar_talla,ver_postulaciones) values (1,1,1);
INSERT INTO Permiso (agregar_co_area,cambiar_talla,ver_postulaciones) values (0,2,1);
INSERT INTO Permiso (agregar_co_area,cambiar_talla,ver_postulaciones) values (0,0,2);


INSERT INTO ALUMNO(rol,id_carrera,rut,nombre,correo,contrasena,telefono,talla) VALUES ('201273589-0','3','18275215-0','Marco','marco.salinas.12@sansano.usm.cl','salinas','54112127',null);
INSERT INTO ALUMNO(rol,id_carrera,rut,nombre,correo,contrasena,telefono,talla) VALUES ('201273589-2','3','18275215-0','Marco2','marco.salinas.12@sansano.usm.cl','salinas2','54112127',null);

INSERT INTO Coordinador (id_permiso,rol,tipo) values (1,'201273589-0',1);
INSERT INTO Coordinador (id_permiso,rol,tipo) values (2,'201273589-2',2);

INSERT INTO COORDINA (ID_COORDINADOR,ID_AREA) VALUES ('2','1')
