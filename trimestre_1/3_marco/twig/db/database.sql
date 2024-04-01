-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema 3info
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema 3info
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `3info` DEFAULT CHARACTER SET utf8 ;
USE `3info` ;

-- -----------------------------------------------------
-- Table `3info`.`compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `3info`.`compras` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `item` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
