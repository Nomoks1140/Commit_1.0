SELECT * FROM control_seguridad_privada.registro_vacante;
alter table registro_vacante modify fecha_postulacion date;
alter table registro_vacante modify fecha_finalizacion date;
INSERT INTO `control_seguridad_privada`.`registro_vacante` (`Id_registro_vacante`, `fecha_postulacion`, `fecha_finalizacion`, `Id_empleado`) 
VALUES ('708', '2021-02-01', '2021-03-01', '308');
INSERT INTO `control_seguridad_privada`.`registro_vacante` (`Id_registro_vacante`, `fecha_postulacion`, `fecha_finalizacion`, `Id_empleado`) 
VALUES ('706', '2021-01-13', '2021-02-13', '306');
INSERT INTO `control_seguridad_privada`.`registro_vacante` (`Id_registro_vacante`, `fecha_postulacion`, `fecha_finalizacion`, `Id_empleado`) 
VALUES ('707', '2020-08-20', '2020-09-20', '307');
INSERT INTO `control_seguridad_privada`.`registro_vacante` (`Id_registro_vacante`, `fecha_postulacion`, `fecha_finalizacion`, `Id_empleado`) 
VALUES ('705', '2020-10-25', '2020-11-25', '305');