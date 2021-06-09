CREATE DATABASE proyecto;
USE proyecto;

CREATE TABLE iniciar(email text, pasword text);
INSERT INTO iniciar(email, pasword)
    VALUES ('email', 'pasword');


CREATE TABLE registro(usuario text, Tdoc text, numero int, fecha date, email text, pasword text);
INSERT INTO registro(usuario, Tdoc, numero, fecha, email, pasword)
    VALUES ('usuario','Tdoc', 'numero','fecha', 'email', 'pasword');    