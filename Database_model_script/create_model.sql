-- MySQL Script generated by MySQL Workbench
-- 08/29/17 22:50:26
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Blog_AHD
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Blog_AHD
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Blog_AHD` ;
USE `Blog_AHD` ;

-- -----------------------------------------------------
-- Table `Blog_AHD`.`Ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Blog_AHD`.`Ticket` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `chapo` MEDIUMTEXT NULL,
  `content` LONGTEXT NULL,
  `author` VARCHAR(255) NULL,
  `date` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
