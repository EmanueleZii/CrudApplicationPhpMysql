CREATE DATABASE `crudoperation`;

CREATE TABLE `crudoperation`.`crud` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(100) NOT NULL ,
    `email` VARCHAR(100) NOT NULL , 
    `mobile` VARCHAR(20) NOT NULL , 
    `password` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB; 




