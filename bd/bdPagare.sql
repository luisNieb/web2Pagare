-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema pagare
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pagare
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pagare` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `pagare` ;

-- -----------------------------------------------------
-- Table `pagare`.`datospagare`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagare`.`datospagare` (
  `Numero` INT NOT NULL AUTO_INCREMENT,
  `bueno_Por` INT NOT NULL,
  `lugar_del_pago` VARCHAR(50) NOT NULL,
  `dia` CHAR(2) NOT NULL,
  `mes` ENUM('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre') NOT NULL,
  `anio` CHAR(4) NOT NULL,
  `persona_paga` VARCHAR(50) NOT NULL,
  `lugar_pago` VARCHAR(50) NOT NULL,
  `fecha_pago` VARCHAR(50) NOT NULL,
  `cantidad_de_pago` VARCHAR(50) NOT NULL,
  `serie` INT NOT NULL,
  `interes` INT NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `poblacion` VARCHAR(50) NOT NULL,
  `tel` CHAR(10) NOT NULL,
  `firma` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`Numero`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
