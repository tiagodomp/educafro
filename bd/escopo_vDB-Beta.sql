-- MySQL Script generated by MySQL Workbench
-- Wed Jan  2 20:53:52 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema educafro_Beta
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema educafro_Beta
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `educafro_Beta` DEFAULT CHARACTER SET utf8 ;
USE `educafro_Beta` ;

-- -----------------------------------------------------
-- Table `educafro_Beta`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`perfis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`perfis` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_perfis_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_perfis_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`codigos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`codigos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`cursos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`cursos_modulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`cursos_modulos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cursos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `cursos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_cursos_modulos_cursos1_idx` (`cursos_id` ASC),
  CONSTRAINT `fk_cursos_modulos_cursos1`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `educafro_Beta`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`disciplinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`disciplinas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cursos_modulos_id` INT NOT NULL,
  `cursos_modulos_cursos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `cursos_modulos_id`, `cursos_modulos_cursos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_disciplinas_cursos_modulos1_idx` (`cursos_modulos_id` ASC, `cursos_modulos_cursos_id` ASC),
  CONSTRAINT `fk_disciplinas_cursos_modulos1`
    FOREIGN KEY (`cursos_modulos_id` , `cursos_modulos_cursos_id`)
    REFERENCES `educafro_Beta`.`cursos_modulos` (`id` , `cursos_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`temas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`temas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `disciplinas_id` INT NOT NULL,
  PRIMARY KEY (`id`, `disciplinas_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_temas_disciplinas1_idx` (`disciplinas_id` ASC),
  CONSTRAINT `fk_temas_disciplinas1`
    FOREIGN KEY (`disciplinas_id`)
    REFERENCES `educafro_Beta`.`disciplinas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`subtemas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`subtemas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `temas_id` INT NOT NULL,
  PRIMARY KEY (`id`, `temas_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_subtemas_temas1_idx` (`temas_id` ASC),
  CONSTRAINT `fk_subtemas_temas1`
    FOREIGN KEY (`temas_id`)
    REFERENCES `educafro_Beta`.`temas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`aulas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`aulas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `subtemas_id` INT NOT NULL,
  PRIMARY KEY (`id`, `subtemas_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_aula_subtemas1_idx` (`subtemas_id` ASC),
  CONSTRAINT `fk_aula_subtemas1`
    FOREIGN KEY (`subtemas_id`)
    REFERENCES `educafro_Beta`.`subtemas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`user_historico_senha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user_historico_senha` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_user_historico_senha_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_historico_senha_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`user_preferencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user_preferencias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_user_preferencias_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_preferencias_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`user_inscricoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user_inscricoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `cursos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`, `cursos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_user_inscricoes_user1_idx` (`user_id` ASC),
  INDEX `fk_user_inscricoes_cursos1_idx` (`cursos_id` ASC),
  CONSTRAINT `fk_user_inscricoes_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_inscricoes_cursos1`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `educafro_Beta`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`user_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_user_info_user_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_info_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`user_token`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user_token` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_user_token_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_token_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`log`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`log` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`user_historico_acoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user_historico_acoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `log_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`, `log_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_user_historico_acoes_user1_idx` (`user_id` ASC),
  INDEX `fk_user_historico_acoes_log1_idx` (`log_id` ASC),
  CONSTRAINT `fk_user_historico_acoes_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_historico_acoes_log1`
    FOREIGN KEY (`log_id`)
    REFERENCES `educafro_Beta`.`log` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`perfis_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`perfis_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `perfis_id` INT NOT NULL,
  `perfis_user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `perfis_id`, `perfis_user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_perfis_info_perfis1_idx` (`perfis_id` ASC, `perfis_user_id` ASC),
  CONSTRAINT `fk_perfis_info_perfis1`
    FOREIGN KEY (`perfis_id` , `perfis_user_id`)
    REFERENCES `educafro_Beta`.`perfis` (`id` , `user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`perfis_update`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`perfis_update` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `perfis_id` INT NOT NULL,
  `perfis_user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `perfis_id`, `perfis_user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_perfis_update_perfis1_idx` (`perfis_id` ASC, `perfis_user_id` ASC),
  CONSTRAINT `fk_perfis_update_perfis1`
    FOREIGN KEY (`perfis_id` , `perfis_user_id`)
    REFERENCES `educafro_Beta`.`perfis` (`id` , `user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`eventos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`categorizacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`categorizacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `eventos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `eventos_id`),
  UNIQUE INDEX `idcategorizacao_UNIQUE` (`id` ASC),
  INDEX `fk_categorizacao_eventos1_idx` (`eventos_id` ASC),
  CONSTRAINT `fk_categorizacao_eventos1`
    FOREIGN KEY (`eventos_id`)
    REFERENCES `educafro_Beta`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`regras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`regras` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`regras_permitir_crud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`regras_permitir_crud` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_historico_acoes_id` INT NOT NULL,
  `user_historico_acoes_user_id` INT NOT NULL,
  `regras_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_historico_acoes_id`, `user_historico_acoes_user_id`, `regras_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_regras_permitir_crud_user_historico_acoes1_idx` (`user_historico_acoes_id` ASC, `user_historico_acoes_user_id` ASC),
  INDEX `fk_regras_permitir_crud_regras1_idx` (`regras_id` ASC),
  CONSTRAINT `fk_regras_permitir_crud_user_historico_acoes1`
    FOREIGN KEY (`user_historico_acoes_id` , `user_historico_acoes_user_id`)
    REFERENCES `educafro_Beta`.`user_historico_acoes` (`id` , `user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_regras_permitir_crud_regras1`
    FOREIGN KEY (`regras_id`)
    REFERENCES `educafro_Beta`.`regras` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`grupos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`grupos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cursos_id` INT NOT NULL,
  `categorizacao_id` INT NOT NULL,
  `regras_permitir_crud_id` INT NOT NULL,
  PRIMARY KEY (`id`, `cursos_id`, `categorizacao_id`, `regras_permitir_crud_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_grupos_cursos1_idx` (`cursos_id` ASC),
  INDEX `fk_grupos_categorizacao1_idx` (`categorizacao_id` ASC),
  INDEX `fk_grupos_regras_permitir_crud1_idx` (`regras_permitir_crud_id` ASC),
  CONSTRAINT `fk_grupos_cursos1`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `educafro_Beta`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupos_categorizacao1`
    FOREIGN KEY (`categorizacao_id`)
    REFERENCES `educafro_Beta`.`categorizacao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupos_regras_permitir_crud1`
    FOREIGN KEY (`regras_permitir_crud_id`)
    REFERENCES `educafro_Beta`.`regras_permitir_crud` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`grupos_membros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`grupos_membros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `grupos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `grupos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_grupos_membros_grupos1_idx` (`grupos_id` ASC),
  CONSTRAINT `fk_grupos_membros_grupos1`
    FOREIGN KEY (`grupos_id`)
    REFERENCES `educafro_Beta`.`grupos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`grupos_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`grupos_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `grupos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `grupos_id`),
  UNIQUE INDEX `idgrupos_info_UNIQUE` (`id` ASC),
  INDEX `fk_grupos_info_grupos1_idx` (`grupos_id` ASC),
  CONSTRAINT `fk_grupos_info_grupos1`
    FOREIGN KEY (`grupos_id`)
    REFERENCES `educafro_Beta`.`grupos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`user_atribuicoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`user_atribuicoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_user_atribuicoes_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_atribuicoes_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `educafro_Beta`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`perfis_preferencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`perfis_preferencias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `perfis_id` INT NOT NULL,
  `perfis_user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `perfis_id`, `perfis_user_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_perfis_preferencias_perfis1_idx` (`perfis_id` ASC, `perfis_user_id` ASC),
  CONSTRAINT `fk_perfis_preferencias_perfis1`
    FOREIGN KEY (`perfis_id` , `perfis_user_id`)
    REFERENCES `educafro_Beta`.`perfis` (`id` , `user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`categorizacao_tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`categorizacao_tags` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categorizacao_id` INT NOT NULL,
  `categorizacao_eventos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `categorizacao_id`, `categorizacao_eventos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_categorizacao_tags_categorizacao1_idx` (`categorizacao_id` ASC, `categorizacao_eventos_id` ASC),
  CONSTRAINT `fk_categorizacao_tags_categorizacao1`
    FOREIGN KEY (`categorizacao_id` , `categorizacao_eventos_id`)
    REFERENCES `educafro_Beta`.`categorizacao` (`id` , `eventos_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`modificadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`modificadores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `eventos_id` INT NOT NULL,
  `user_historico_acoes_id` INT NOT NULL,
  PRIMARY KEY (`id`, `eventos_id`, `user_historico_acoes_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_modificadores_eventos1_idx` (`eventos_id` ASC),
  INDEX `fk_modificadores_user_historico_acoes1_idx` (`user_historico_acoes_id` ASC),
  CONSTRAINT `fk_modificadores_eventos1`
    FOREIGN KEY (`eventos_id`)
    REFERENCES `educafro_Beta`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_modificadores_user_historico_acoes1`
    FOREIGN KEY (`user_historico_acoes_id`)
    REFERENCES `educafro_Beta`.`user_historico_acoes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`categorizacao_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`categorizacao_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categorizacao_id` INT NOT NULL,
  `categorizacao_eventos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `categorizacao_id`, `categorizacao_eventos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_categorizacao_info_categorizacao1_idx` (`categorizacao_id` ASC, `categorizacao_eventos_id` ASC),
  CONSTRAINT `fk_categorizacao_info_categorizacao1`
    FOREIGN KEY (`categorizacao_id` , `categorizacao_eventos_id`)
    REFERENCES `educafro_Beta`.`categorizacao` (`id` , `eventos_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`regras_niveis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`regras_niveis` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `regras_id` INT NOT NULL,
  PRIMARY KEY (`id`, `regras_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_regras_niveis_regras1_idx` (`regras_id` ASC),
  CONSTRAINT `fk_regras_niveis_regras1`
    FOREIGN KEY (`regras_id`)
    REFERENCES `educafro_Beta`.`regras` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`regras_historico_atribuicoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`regras_historico_atribuicoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_atribuicoes_id` INT NOT NULL,
  `regras_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_atribuicoes_id`, `regras_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_regras_atribuir_permissoes_user_atribuicoes1_idx` (`user_atribuicoes_id` ASC),
  INDEX `fk_regras_atribuir_permissoes_regras1_idx` (`regras_id` ASC),
  CONSTRAINT `fk_regras_atribuir_permissoes_user_atribuicoes1`
    FOREIGN KEY (`user_atribuicoes_id`)
    REFERENCES `educafro_Beta`.`user_atribuicoes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_regras_atribuir_permissoes_regras1`
    FOREIGN KEY (`regras_id`)
    REFERENCES `educafro_Beta`.`regras` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`codigos_tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`codigos_tags` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categorizacao_tags_id` INT NOT NULL,
  `codigos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `categorizacao_tags_id`, `codigos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_codigos_tags_categorizacao_tags1_idx` (`categorizacao_tags_id` ASC),
  INDEX `fk_codigos_tags_codigos1_idx` (`codigos_id` ASC),
  CONSTRAINT `fk_codigos_tags_categorizacao_tags1`
    FOREIGN KEY (`categorizacao_tags_id`)
    REFERENCES `educafro_Beta`.`categorizacao_tags` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_codigos_tags_codigos1`
    FOREIGN KEY (`codigos_id`)
    REFERENCES `educafro_Beta`.`codigos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`codigos_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`codigos_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `codigos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_codigos_info_codigos1_idx` (`codigos_id` ASC),
  CONSTRAINT `fk_codigos_info_codigos1`
    FOREIGN KEY (`codigos_id`)
    REFERENCES `educafro_Beta`.`codigos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`cursos_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`cursos_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cursos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `cursos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_cursos_info_cursos1_idx` (`cursos_id` ASC),
  CONSTRAINT `fk_cursos_info_cursos1`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `educafro_Beta`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`cursos_secoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`cursos_secoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cursos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `cursos_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_cursos_secoes_cursos1_idx` (`cursos_id` ASC),
  CONSTRAINT `fk_cursos_secoes_cursos1`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `educafro_Beta`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`grupos_secoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`grupos_secoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `grupos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `grupos_id`),
  UNIQUE INDEX `idgrupos_secoes_UNIQUE` (`id` ASC),
  INDEX `fk_grupos_secoes_grupos1_idx` (`grupos_id` ASC),
  CONSTRAINT `fk_grupos_secoes_grupos1`
    FOREIGN KEY (`grupos_id`)
    REFERENCES `educafro_Beta`.`grupos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`cursos_historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`cursos_historico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cursos_secoes_id` INT NOT NULL,
  `cursos_secoes_cursos_id` INT NOT NULL,
  `log_id` INT NOT NULL,
  PRIMARY KEY (`id`, `cursos_secoes_id`, `cursos_secoes_cursos_id`, `log_id`),
  UNIQUE INDEX `idcursos_historico_UNIQUE` (`id` ASC),
  INDEX `fk_cursos_historico_cursos_secoes1_idx` (`cursos_secoes_id` ASC, `cursos_secoes_cursos_id` ASC),
  INDEX `fk_cursos_historico_log1_idx` (`log_id` ASC),
  CONSTRAINT `fk_cursos_historico_cursos_secoes1`
    FOREIGN KEY (`cursos_secoes_id` , `cursos_secoes_cursos_id`)
    REFERENCES `educafro_Beta`.`cursos_secoes` (`id` , `cursos_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_historico_log1`
    FOREIGN KEY (`log_id`)
    REFERENCES `educafro_Beta`.`log` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educafro_Beta`.`grupos_historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educafro_Beta`.`grupos_historico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `grupos_id` INT NOT NULL,
  `log_id` INT NOT NULL,
  PRIMARY KEY (`id`, `grupos_id`, `log_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_grupos_historico_grupos1_idx` (`grupos_id` ASC),
  INDEX `fk_grupos_historico_log1_idx` (`log_id` ASC),
  CONSTRAINT `fk_grupos_historico_grupos1`
    FOREIGN KEY (`grupos_id`)
    REFERENCES `educafro_Beta`.`grupos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupos_historico_log1`
    FOREIGN KEY (`log_id`)
    REFERENCES `educafro_Beta`.`log` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
