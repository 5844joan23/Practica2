CREATE DATABASE bd_gestion_de_notas;
USE bd_gestion_de_notas;

CREATE TABLE tbl_administrador (
	id_administrador int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email_administrador varchar (255) NOT NULL,
	passwd_administrador varchar (255) NOT NULL
	);
	
CREATE TABLE tbl_alumnos (
	id_alumno int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre_alumno varchar (255) NOT NULL,
	primer_apellido_alummno varchar (255) NOT NULL,
	segundo_apellido_alumno varchar (255) NOT NULL,
	grupo_alumno varchar (255) NOT NULL,
	email_alumno varchar (255) NOT NULL,
	passwd_alumno varchar (255) NOT NULL
	);
	
CREATE TABLE tbl_notas (
	id_asignatura int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre_asignatura varchar (255) NOT NULL,
	id_alumno int (11) NULL,
	nota_alumno int (2) NULL
	);

ALTER TABLE tbl_notas
	add constraint fk_alumnos_notas foreign key (id_alumno)
	references tbl_alumnos (id_alumno);