-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema rapufaz
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema rapufaz
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `rapufaz` DEFAULT CHARACTER SET utf8 ;
USE `rapufaz` ;

-- -----------------------------------------------------
-- Table `rapufaz`.`vendedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rapufaz`.`vendedores` (
  `id` INT(5) NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rapufaz`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rapufaz`.`productos` (
  `id` INT(5) NOT NULL,
  `nombre` VARCHAR(60) NULL,
  `precio` DECIMAL(10,2) NULL,
  `imagen` VARCHAR(200) NULL,
  `vendedorId` INT(5) NULL,
  PRIMARY KEY (`id`),
  INDEX `vendedorId_idx` (`vendedorId` ASC),
  CONSTRAINT `vendedorId`
    FOREIGN KEY (`vendedorId`)
    REFERENCES `rapufaz`.`vendedores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rapufaz`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rapufaz`.`usuarios` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(60) NULL,
  `password` CHAR(60) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
