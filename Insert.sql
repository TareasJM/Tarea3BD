INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil Eléctrica','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil Informática','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil Matemática','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil Mecánica','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil de Minas','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil Química','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Plan Común para Ingenierías y Licenciaturas','San Joaquin');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Civil Industrial','Vitacura');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería Comercial','Vitacura');
INSERT INTO CARRERA (nombreC,campusC) values ('Ingeniería en Aviación Comercial','Vitacura');
INSERT INTO CARRERA (nombreC,campusC) values ('Piloto Comercial','Vitacura');
INSERT INTO CARRERA (nombreC,campusC) values ('Técnico Universitario en Mantenimiento Areonáutico','Vitacura');

INSERT INTO AREA (nombreA,n_colaboradores,horario,campusA) values ('Coordinación General',0,'1-10', 'San Joaquin');
INSERT INTO AREA (nombreA,n_colaboradores,horario,campusA) values ('Túnel',0,'1-2', 'San Joaquin');
INSERT INTO AREA (nombreA,n_colaboradores,horario,campusA) values ('Dinámicas',0,'3-4', 'San Joaquin');
INSERT INTO AREA (nombreA,n_colaboradores,horario,campusA) values ('Concursos',0,'3-4', 'San Joaquin');
INSERT INTO AREA (nombreA,n_colaboradores,horario,campusA) values ('Alimentación',0,'5-8','Vitacura');
INSERT INTO AREA (nombreA,n_colaboradores,horario,campusA) values ('Registro Visual',0,'1-10','Vitacura');
INSERT INTO AREA (nombreA,n_colaboradores,horario,campusA) values ('Audio',0,'5-10','Vitacura');

INSERT INTO Permiso (agregar_co_area,cambiar_talla,ver_postulaciones) values (1,1,1);
INSERT INTO Permiso (agregar_co_area,cambiar_talla,ver_postulaciones) values (0,2,1);
INSERT INTO Permiso (agregar_co_area,cambiar_talla,ver_postulaciones) values (0,0,2);


INSERT INTO ALUMNO(rol,id_carrera,rut,nombreAl,correo,contrasena,telefono,talla) VALUES ('201273589-0','3','18275215-0','Marco','marco.salinas.12@sansano.usm.cl','salinas','54112127',null);
INSERT INTO ALUMNO(rol,id_carrera,rut,nombreAl,correo,contrasena,telefono,talla) VALUES ('201273589-2','3','18275215-0','Marco2','marco.salinas.12@sansano.usm.cl','salinas2','54112127',null);

INSERT INTO Coordinador (id_permiso,rol,tipo) values (1,'201273589-0',1);
INSERT INTO Coordinador (id_permiso,rol,tipo) values (2,'201273589-2',2);

INSERT INTO COORDINA (ID_COORDINADOR,ID_AREA) VALUES ('2','1')
