CREATE DATABASE usilmatch;


CREATE TABLE `usilmatch`.`usuarios` ( `codigo` INT NOT NULL AUTO_INCREMENT , `info` VARCHAR(50) NOT NULL , `correo` VARCHAR(50) NOT NULL , `contraseña` VARCHAR(32) NOT NULL , PRIMARY KEY (`codigo`)) ENGINE = InnoDB;
CREATE TABLE `usilmatch`.`cursos` ( `codigo` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(50) NOT NULL , `bloque` VARCHAR(50) NOT NULL , `ciclo` INT NOT NULL , `preferencia` VARCHAR(50) NOT NULL , PRIMARY KEY (`codigo`)) ENGINE = MyISAM;