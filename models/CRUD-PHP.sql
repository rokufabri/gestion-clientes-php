CREATE DATABASE CRUD_PERSONAS;
USE CRUD_PERSONAS;

CREATE TABLE PERSONAS(
ID_PERSONA int auto_increment primary key,
NOMBRE_PERSONA varchar(50),
APELLIDO_PERSONA varchar(50),
DNI_PERSONA varchar(50),
Fecha_Nacimiento varchar(50),
Correo_PERSONA varchar(50)
);

ALTER TABLE PERSONAS auto_increment = 1;

/*QUERYS DE PRUEBAS*/
SELECT * FROM USUARIOS;
SELECT * FROM PERSONAS;
INSERT INTO PERSONAS VALUES (1,"Fabrizio","Quispe","76122109","2002-03-02","correo@correo.com");
INSERT INTO PERSONAS VALUES(2,"Pedro","Garcia","745124748","1548-04-03","correo@example.com");
DROP TABLE PERSONAS; 
DROP TABLE USUARIOS;