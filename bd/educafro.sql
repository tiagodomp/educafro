CREATE DATABASE  IF NOT EXISTS `educafro` 
	DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
	USE `educafro`;
-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
-- Author  : Tiago Pereira
-- Host    : 127.0.0.1    Database: educafro
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
	SET NAMES utf8mb4;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administradores`
--

CREATE TABLE IF NOT EXISTS administradores (
  id int(11) NOT NULL AUTO_INCREMENT,
  regras_id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  tipo enum('Online','Presencial') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  presenca json DEFAULT NULL COMMENT '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }',
  pontuacao int(11) DEFAULT NULL COMMENT 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema',
  bonificacao tinyint(1) DEFAULT NULL,
  bonificacao_historico json DEFAULT NULL COMMENT '{[datetime:{provas_id:{provaID, minha_provaID, nota}} ]}',
  distancia_casa_sede varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  dias_disponiveis json DEFAULT NULL COMMENT '{´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ] }',
  conselheiro json DEFAULT NULL COMMENT '{ ´conselheiro´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,regras_id,user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_administradores_regras1_idx (regras_id),
  KEY fk_administradores_user1_idx (user_id),
  CONSTRAINT fk_administradores_regras1 FOREIGN KEY (regras_id) REFERENCES regras (id),
  CONSTRAINT fk_administradores_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administradores_acoes`
--

CREATE TABLE IF NOT EXISTS administradores_acoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  administradores_id int(11) NOT NULL,
  PRIMARY KEY (id,administradores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_administradores_acoes_administradores1_idx (administradores_id),
  CONSTRAINT fk_administradores_acoes_administradores1 FOREIGN KEY (administradores_id) REFERENCES administradores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administradores_info`
--

CREATE TABLE IF NOT EXISTS administradores_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `administradores_tokens`
--

CREATE TABLE IF NOT EXISTS administradores_tokens (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Esta tabela é reponsável por armazenar a senha de permissão pública de cada usuário. Permitindo que ao usá-la em outra sessão o inquilino receba tal privilégio para executar a devida função.  ',
  administradores_id int(11) NOT NULL,
  token varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  instancia varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  ip_restricao varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  info mediumtext COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,administradores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_administradores_token_administradores1_idx (administradores_id),
  CONSTRAINT fk_administradores_token_administradores1 FOREIGN KEY (administradores_id) REFERENCES administradores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `aulas`
--

CREATE TABLE IF NOT EXISTS aulas (
  id int(11) NOT NULL AUTO_INCREMENT,
  subtemas_id int(11) NOT NULL,
  nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  titulo varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  inicio_aula datetime DEFAULT NULL,
  final_aula datetime DEFAULT NULL,
  docente_presente tinyint(1) DEFAULT NULL,
  discentes_presente json DEFAULT NULL,
  descricao text COLLATE utf8mb4_unicode_520_ci,
  videoaula json DEFAULT NULL,
  material_apoio json DEFAULT NULL,
  bibliografia json DEFAULT NULL,
  entregar_trabalho datetime DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,subtemas_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_aula_subtemas1_idx (subtemas_id),
  CONSTRAINT fk_aula_subtemas1 FOREIGN KEY (subtemas_id) REFERENCES subtemas (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `categorizacao`
--

CREATE TABLE IF NOT EXISTS categorizacao (
  id int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  UNIQUE KEY idcategorizacao_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `categorizacao_info`
--

CREATE TABLE IF NOT EXISTS categorizacao_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  categorizacao_id int(11) NOT NULL,
  PRIMARY KEY (id,categorizacao_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_categorizacao_info_categorizacao1_idx (categorizacao_id),
  CONSTRAINT fk_categorizacao_info_categorizacao1 FOREIGN KEY (categorizacao_id) REFERENCES categorizacao (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `codigos`
--

CREATE TABLE IF NOT EXISTS codigos (
  id int(11) NOT NULL AUTO_INCREMENT,
  codigos_tags_id int(11) NOT NULL,
  codigo varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  ativacao enum('Desativado','Ativado','Inválido') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL COMMENT 'Este código está :',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,codigos_tags_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_codigos_codigos_tags1_idx (codigos_tags_id),
  CONSTRAINT fk_codigos_codigos_tags1 FOREIGN KEY (codigos_tags_id) REFERENCES codigos_tags (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `codigos_info`
--

CREATE TABLE IF NOT EXISTS codigos_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  codigos_id int(11) NOT NULL,
  modificadores_id int(11) NOT NULL,
  nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  titulo varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  descricao varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  img json DEFAULT NULL,
  beneficios json DEFAULT NULL COMMENT 'estruturacao em html,',
  publico_alvo json DEFAULT NULL COMMENT 'estruturacao em html',
  como_obter json DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,codigos_id,modificadores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_codigos_info_codigos1_idx (codigos_id),
  KEY fk_codigos_info_modificadores1_idx (modificadores_id),
  CONSTRAINT fk_codigos_info_codigos1 FOREIGN KEY (codigos_id) REFERENCES codigos (id),
  CONSTRAINT fk_codigos_info_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `codigos_tags`
--

CREATE TABLE IF NOT EXISTS codigos_tags (
  id int(11) NOT NULL AUTO_INCREMENT,
  modificadores_id int(11) NOT NULL COMMENT 'quem, quando e da onde criou ou alterou um modelo de codigos_tags',
  nome varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  abreviatura varchar(16) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  pertencentes json DEFAULT NULL COMMENT '[{quantidade,{codigos_id} }]',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,modificadores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_codigos_tags_modificadores1_idx (modificadores_id),
  CONSTRAINT fk_codigos_tags_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cursos`
--

CREATE TABLE IF NOT EXISTS cursos (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'aqui sera salvo todos os cursos ofertados na educafro, momentaneamente sera Itafro, MedAfro e o Tecnoafro, caso o curso for segmentado, mantem o mesmo nome e altera o titulo expl: nome->Tecnoafro e titulo-> SEO ou nome->Tecnoafro e titulo-> Suporte técnico, Tabela cursos baseada na metodologia da USP -> https://uspdigital.usp.br/jupiterweb/listarGradeCurricular?codcg=27&codcur=27531&codhab=4&tipo=N&print=true',
  logo varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  nome varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  titulo varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  img varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  visivel tinyint(1) DEFAULT NULL,
  descricao text COLLATE utf8mb4_unicode_520_ci,
  descricao_html text COLLATE utf8mb4_unicode_520_ci,
  objetivo text COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  modificadores_id int(11) NOT NULL,
  PRIMARY KEY (id,modificadores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_cursos_modificadores1_idx (modificadores_id),
  CONSTRAINT fk_cursos_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cursos_historico`
--

CREATE TABLE IF NOT EXISTS cursos_historico (
  id int(11) NOT NULL AUTO_INCREMENT,
  cursos_secoes_id int(11) NOT NULL,
  log_id int(11) NOT NULL,
  ultima_data_iniciada date DEFAULT NULL,
  ultima_data_finalizada date DEFAULT NULL,
  ultimo_status varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  historico json DEFAULT NULL COMMENT '{´logica_aplicacao_json´:[ ], ´aplicacao_json´:{}  }',
  historico_aproveitamento json DEFAULT NULL COMMENT '{´gerar_estatisticas´:[diarias:false, semanais:true, mensais:true], [{´aprovados´:[{user_id[{ cursos_modulos_id:[{media_por_disciplinaID}], discentes_id, }]  }] }',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,cursos_secoes_id,log_id),
  UNIQUE KEY idcursos_historico_UNIQUE (id),
  KEY fk_cursos_historico_log1_idx (log_id),
  KEY fk_cursos_historico_cursos_secoes1_idx (cursos_secoes_id),
  CONSTRAINT fk_cursos_historico_log1 FOREIGN KEY (log_id) REFERENCES log (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cursos_info`
--

CREATE TABLE IF NOT EXISTS cursos_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  cursos_id int(11) NOT NULL,
  documentacao_requisitada json DEFAULT NULL COMMENT '{regraNOME:[{ lista_de_requisitosID:[{nome_doc, descricao, relevancia:0-10, ativo:true}], datetime, modificador_id }] } lista_de_requisitosID = timestamp.+._regraNOME',
  nivel enum('Outros','Reforço','Pré-vestibular','Profissionalizante','Pós-Graduação') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  tipo enum('Encerrado','Em Breve','Presencial','Online','Presencial e Online') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  visivel tinyint(1) DEFAULT NULL,
  info text COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,cursos_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_cursos_info_cursos1_idx (cursos_id),
  CONSTRAINT fk_cursos_info_cursos1 FOREIGN KEY (cursos_id) REFERENCES cursos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cursos_modulos`
--

CREATE TABLE IF NOT EXISTS cursos_modulos (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'estruturação de dados baseado no conceito de (https://uspdigital.usp.br/jupiterweb/obterTurma?sgldis=5955028&verdis=1)',
  cursos_id int(11) NOT NULL,
  grupos_id int(11) NOT NULL COMMENT 'a turma deste módulo',
  nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  abreviacao varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  titulo varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  matriz_curricular json DEFAULT NULL COMMENT '[{disciplinas_id:[{temas_id:[{subtemas_id[{aulas_id}] }] }] }]',
  tipo enum('Semanal','Mensal','Bimestral','Trimestral','Semestral','Anual') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  requisitos_deste_modulo json DEFAULT NULL COMMENT '{´modulos´:[{descricao, cursos_id, cursos_modulos_id, intensidade:0-10}] }',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,cursos_id,grupos_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_cursos_modulos_cursos1_idx (cursos_id),
  KEY fk_cursos_modulos_grupos1_idx (grupos_id),
  CONSTRAINT fk_cursos_modulos_cursos1 FOREIGN KEY (cursos_id) REFERENCES cursos (id),
  CONSTRAINT fk_cursos_modulos_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cursos_secoes`
--

CREATE TABLE IF NOT EXISTS cursos_secoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  cursos_id int(11) NOT NULL,
  tipo enum('Semanal','Mensal','Bimestral','Trimestral','Semestral','Anual') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  quantas int(11) DEFAULT NULL COMMENT 'baseado no tipo define um valor inteiro de repetição EXPL: (quantas->2, tipo->semanal) = 2 semanas. Esta seção durará 2 semanas.',
  docentes json DEFAULT NULL COMMENT '[{docentes_id:[{subtemas_id:{ tipo:[substituto, titular], dias_aula:[" ",domingo:{time_inicio, time_final}, segunda:{time_inicio, time_final}, terca:{time_inicio, time_final}, quarta:{time_inicio, time_final}, quinta:{time_inicio, time_final}, sexta:{time_inicio, time_final}, sabado:{time_inicio, time_final} ] } }] }]',
  discentes json DEFAULT NULL COMMENT '[{discentes_id:[{cursos_modulos_id:{ tipo:[pendente, matriculados], dias_aula:[" ",domingo:{time_inicio, time_final}, segunda:{time_inicio, time_final}, terca:{time_inicio, time_final}, quarta:{time_inicio, time_final}, quinta:{time_inicio, time_final}, sexta:{time_inicio, time_final}, sabado:{time_inicio, time_final} ] } }] }]',
  data_inicio_modulo json DEFAULT NULL COMMENT '[{cursos_modulos_id, date}]',
  data_final_modulo json DEFAULT NULL COMMENT '[{cursos_modulos_id, date}]',
  codigo_turma int(11) NOT NULL COMMENT 'equivale a cursos_secoes_id.codigo_do_grupo',
  vagas int(4) DEFAULT NULL,
  carga_horaria varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  prox_secao date DEFAULT NULL,
  visivel tinyint(1) DEFAULT NULL,
  data_inicio_cadastro date DEFAULT NULL,
  data_final_cadastro date DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,cursos_id),
  UNIQUE KEY id_UNIQUE (id),
  UNIQUE KEY codigo_turma_UNIQUE (codigo_turma),
  KEY fk_cursos_secoes_cursos1_idx (cursos_id),
  CONSTRAINT fk_cursos_secoes_cursos1 FOREIGN KEY (cursos_id) REFERENCES cursos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `discentes`
--

CREATE TABLE IF NOT EXISTS discentes (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  regras_id int(11) NOT NULL,
  tipo enum('Online','Presencial') COLLATE utf8mb4_unicode_520_ci NOT NULL,
  ra varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  token_aluno varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  bonificacao tinyint(1) DEFAULT NULL,
  bonificacao_historico json DEFAULT NULL COMMENT '{[datetime:{provas_id:{provaID, minha_provaID, nota}} ]}',
  aproveitamento json DEFAULT NULL COMMENT '{[cursos_id:[{cursos_modulos_id:[{disciplinas_id:[datetime:{provas_id:{provaID, minha_provaID, nota}}] }] }] ]}',
  distancia_casa_sede varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL COMMENT 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema',
  monitor json DEFAULT NULL COMMENT '{ ´monitor´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}',
  presenca json DEFAULT NULL COMMENT '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,user_id,regras_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_alunos_user1_idx (user_id),
  KEY fk_alunos_regras1_idx (regras_id),
  CONSTRAINT fk_alunos_regras1 FOREIGN KEY (regras_id) REFERENCES regras (id),
  CONSTRAINT fk_alunos_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `disciplinas`
--

CREATE TABLE IF NOT EXISTS disciplinas (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'método de disciplina baseado na USP, https://uspdigital.usp.br/jupiterweb/obterDisciplina?sgldis=4302111&codcur=43021&codhab=101',
  cursos_modulos_id int(11) NOT NULL,
  nome varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  icon varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  descricao text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  credito_aula int(11) DEFAULT NULL,
  credito_trabalho int(11) DEFAULT NULL,
  carga_horaria_total int(11) DEFAULT NULL,
  setores_enem enum('Linguagens','Códigos e suas Tecnologias','Ciências Humanas e suas Tecnologias','Ciências da Natureza e suas Tecnologias','Matemática e suas Tecnologias') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  ativar date DEFAULT NULL,
  objetivos text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  programa_resumido varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  programa text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  avaliacao set('Método','Critério','Recuperação') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  metodo text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  criterio text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  recuperacao text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  bibliografia text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  modificadores_id int(11) NOT NULL,
  PRIMARY KEY (id,cursos_modulos_id,modificadores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_disciplinas_modificadores1_idx (modificadores_id),
  KEY fk_disciplinas_cursos_modulos1_idx (cursos_modulos_id),
  CONSTRAINT fk_disciplinas_cursos_modulos1 FOREIGN KEY (cursos_modulos_id) REFERENCES cursos_modulos (id),
  CONSTRAINT fk_disciplinas_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `docentes`
--

CREATE TABLE IF NOT EXISTS docentes (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  regras_id int(11) NOT NULL,
  tipo enum('Online','Presencial') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  presenca json DEFAULT NULL COMMENT '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }',
  pontuacao int(11) DEFAULT NULL COMMENT 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema',
  distancia_casa_sede varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  avaliacao_alunos json DEFAULT NULL COMMENT '{script_metodo_avaliacao_alunos, cursos_modulos_id:[timestamp:{total_alunos_participantes, datetime:{media_aulas, media_subtemas, media_apresentacao, media_dominio_conteudo, media_planejamento, media_didatica, media_tecnicas_ensino, media_estimulo, media_orientacao_atividades, media_relacionamento, media_interesse_apendizagem, media_tecnicas_avaliacao, media_estimulos_critico, media_cumprir_horarios, media_assiduidade_aulas, media_atendimento_presencial, media_atendimento_online } }] }\n\nbaseado em : http://www.scielo.br/scielo.php?script=sci_arttext&pid=S0104-40362004000400004',
  avaliacao_dirigentes json DEFAULT NULL COMMENT '{script_metodo_avaliacao_dirigentes, cursos_secoes_id:[timestamp:{total_dirigentes_participantes, datetime:{ media_relacionamento, media_tecnicas_avaliacao, media_cumprir_horarios, media_cumprir_datas, media_comprometimento, media_assiduidade_aulas} }] }\n\nbaseado em : http://www.scielo.br/scielo.php?script=sci_arttext&pid=S0104-40362004000400004',
  dias_disponiveis json DEFAULT NULL COMMENT '{´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ] }',
  meus_alunos json DEFAULT NULL COMMENT '{ [cursos_id:[{disciplinas_id:[{grupos_id:[{temas_id}] }] }] ] }',
  conselheiro json DEFAULT NULL COMMENT '{ ´conselheiro´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}',
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,user_id,regras_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_professores_user1_idx (user_id),
  KEY fk_professores_regras1_idx (regras_id),
  CONSTRAINT fk_professores_regras1 FOREIGN KEY (regras_id) REFERENCES regras (id),
  CONSTRAINT fk_professores_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `docentes_token`
--

CREATE TABLE IF NOT EXISTS docentes_token (
  id int(11) NOT NULL AUTO_INCREMENT,
  token varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  senhas json DEFAULT NULL COMMENT '[{senha_criptografada:[ senha_tokenID, regras_id, status:[desativado:false, ativado:true, invalido:false, suspeito:false], data_criada, data_modificada ]}]  senha_tokenID => data_criada .´_´. data_modifcada',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  docentes_id int(11) NOT NULL,
  PRIMARY KEY (id,docentes_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_docentes_token_docentes1_idx (docentes_id),
  CONSTRAINT fk_docentes_token_docentes1 FOREIGN KEY (docentes_id) REFERENCES docentes (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `eventos`
--

CREATE TABLE IF NOT EXISTS eventos (
  id int(11) NOT NULL AUTO_INCREMENT,
  modificadores_id int(11) NOT NULL,
  categorizacao_id int(11) NOT NULL,
  PRIMARY KEY (id,modificadores_id,categorizacao_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_eventos_modificadores1_idx (modificadores_id),
  KEY fk_eventos_categorizacao1_idx (categorizacao_id),
  CONSTRAINT fk_eventos_categorizacao1 FOREIGN KEY (categorizacao_id) REFERENCES categorizacao (id),
  CONSTRAINT fk_eventos_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos`
--

CREATE TABLE IF NOT EXISTS grupos (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  adm_grupo json DEFAULT NULL COMMENT '{ [grupos_membros_id:{user_id:{´hierarquia´:[Propietário || Organizador, data_expiração], data_adicionado, data_modificado, modificador_id} }] }',
  picture json DEFAULT NULL COMMENT 'Arquivo JSON especificando os dados e metadados da picture que representa a identificação do grupo, assim como o endereço e tamanhos das pictures.',
  ativo tinyint(1) DEFAULT NULL,
  descricao varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  objetivo text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_de_administradores`
--

CREATE TABLE IF NOT EXISTS grupos_de_administradores (
  grupos_id int(11) NOT NULL,
  administradores_id int(11) NOT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (grupos_id,administradores_id),
  KEY fk_grupos_de_administradores_administradores1_idx (administradores_id),
  KEY fk_grupos_de_administradores_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_de_administradores_administradores1 FOREIGN KEY (administradores_id) REFERENCES administradores (id),
  CONSTRAINT fk_grupos_de_administradores_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_de_discentes`
--

CREATE TABLE IF NOT EXISTS grupos_de_discentes (
  grupos_id int(11) NOT NULL,
  discentes_id int(11) NOT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (grupos_id,discentes_id),
  KEY fk_grupos_de_discentes_discentes1_idx (discentes_id),
  KEY fk_grupos_de_discentes_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_de_discentes_discentes1 FOREIGN KEY (discentes_id) REFERENCES discentes (id),
  CONSTRAINT fk_grupos_de_discentes_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_de_docentes`
--

CREATE TABLE IF NOT EXISTS grupos_de_docentes (
  grupos_id int(11) NOT NULL,
  docentes_id int(11) NOT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (grupos_id,docentes_id),
  KEY fk_grupos_de_docentes_docentes1_idx (docentes_id),
  KEY fk_grupos_de_docentes_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_de_docentes_docentes1 FOREIGN KEY (docentes_id) REFERENCES docentes (id),
  CONSTRAINT fk_grupos_de_docentes_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_de_outros`
--

CREATE TABLE IF NOT EXISTS grupos_de_outros (
  grupos_id int(11) NOT NULL,
  outros_id int(11) NOT NULL,
  PRIMARY KEY (grupos_id,outros_id),
  KEY fk_grupos_de_outros_outros1_idx (outros_id),
  KEY fk_grupos_de_outros_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_de_outros_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id),
  CONSTRAINT fk_grupos_de_outros_outros1 FOREIGN KEY (outros_id) REFERENCES outros (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_de_super_usuarios`
--

CREATE TABLE IF NOT EXISTS grupos_de_super_usuarios (
  grupos_id int(11) NOT NULL,
  super_usuarios_id int(11) NOT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (grupos_id,super_usuarios_id),
  KEY fk_grupos_de_super_usuarios_super_usuarios1_idx (super_usuarios_id),
  KEY fk_grupos_de_super_usuarios_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_de_super_usuarios_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id),
  CONSTRAINT fk_grupos_de_super_usuarios_super_usuarios1 FOREIGN KEY (super_usuarios_id) REFERENCES super_usuarios (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_de_voluntarios`
--

CREATE TABLE IF NOT EXISTS grupos_de_voluntarios (
  grupos_id int(11) NOT NULL,
  voluntarios_id int(11) NOT NULL,
  PRIMARY KEY (grupos_id,voluntarios_id),
  KEY fk_grupos_de_voluntarios_voluntarios1_idx (voluntarios_id),
  KEY fk_grupos_de_voluntarios_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_de_voluntarios_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id),
  CONSTRAINT fk_grupos_de_voluntarios_voluntarios1 FOREIGN KEY (voluntarios_id) REFERENCES voluntarios (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_historico`
--

CREATE TABLE IF NOT EXISTS grupos_historico (
  id int(11) NOT NULL AUTO_INCREMENT,
  log_id int(11) NOT NULL,
  grupos_id int(11) NOT NULL,
  ultima_data_iniciada date DEFAULT NULL,
  ultima_data_finalizada date DEFAULT NULL,
  ultimo_status varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  historico json DEFAULT NULL COMMENT '{´logica_aplicacao_json´:[ ], ´aplicacao_json´:{}  }',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,log_id,grupos_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_grupos_historico_log1_idx (log_id),
  KEY fk_grupos_historico_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_historico_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id),
  CONSTRAINT fk_grupos_historico_log1 FOREIGN KEY (log_id) REFERENCES log (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_info`
--

CREATE TABLE IF NOT EXISTS grupos_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  grupos_id int(11) NOT NULL,
  tipo enum('Encerrado','Em Breve','Presencial','Online','Presencial e Online','Gestão do sistema') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  visivel tinyint(1) DEFAULT NULL,
  info text COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  modificadores_id int(11) DEFAULT NULL,
  PRIMARY KEY (id,grupos_id),
  UNIQUE KEY idgrupos_info_UNIQUE (id),
  KEY fk_grupos_info_grupos1_idx (grupos_id) /*!80000 INVISIBLE */,
  CONSTRAINT fk_grupos_info_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_membros`
--

CREATE TABLE IF NOT EXISTS grupos_membros (
  id int(11) NOT NULL AUTO_INCREMENT,
  grupos_id int(11) NOT NULL,
  membros json DEFAULT NULL COMMENT '{interacao:true,´usuarios´:[user_id:{data_expiração, data_adicionado, data-modificado, modificadores_id, upload:true, status:true}], quantidade_usuarios }',
  `path` json DEFAULT NULL COMMENT 'Arquico JSON especificando as ramificações assim como os donos dos arquivos baseado no path cedido por GRUPOS_MEMBROS, que este grupo fez upload. { ´arquivos´:[{upload:true, ´path´:[{ userid:{status:[bloqueado:false], pasta_primaria, ´arq´:[{nome, titulo, tipo_MIME, miniatura, path}] ]} ] }]',
  created datetime DEFAULT NULL,
  PRIMARY KEY (id,grupos_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_grupos_membros_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_membros_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_secoes`
--

CREATE TABLE IF NOT EXISTS grupos_secoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  grupos_id int(11) NOT NULL,
  titulo varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  inscritos json DEFAULT NULL COMMENT '{quantidade, ´alunos´:[{user_inscricoes_id,  discentes_id, curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html }] } }] }',
  pendentes json DEFAULT NULL COMMENT '{quantidade, ´alunos´:[{user_inscricoes_id, discentes_id,curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html  }] } }] }',
  matriculados json DEFAULT NULL COMMENT '{quantidade, ´alunos´:[{user_inscricoes_id,  discentes_id,curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html }] } }] }',
  rejeitados json DEFAULT NULL COMMENT '{quantidade, ´alunos´:[{user_inscricoes_id,  discentes_id,curso_ modulo_id, datetime, ´documentacao´:{requisitos:false, ´faltando´:[{arq_doc, link_instrucoes, retorno_html }] } }] }',
  descricao text COLLATE utf8mb4_unicode_520_ci,
  codigo_do_grupo varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL COMMENT 'timestamp_+id',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,grupos_id),
  UNIQUE KEY idgrupos_secoes_UNIQUE (id),
  KEY fk_grupos_secoes_grupos1_idx (grupos_id),
  CONSTRAINT fk_grupos_secoes_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS log (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  avisos json DEFAULT NULL COMMENT '[{datetime:[mensagem]}]',
  mysql_log_id json DEFAULT NULL COMMENT '[{datetime:[mensagem, quantidade_linhas]}]',
  ip varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  cursos_id int(11) DEFAULT NULL,
  cursos_modulo_id int(11) DEFAULT NULL,
  eventos_id int(11) DEFAULT NULL,
  url varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  info json DEFAULT NULL COMMENT '[{rotas:[{nome, uri_template,padroes},quantidade_rotas], arq_temp_log[nome, path_arq,] }]',
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `modificadores`
--

CREATE TABLE IF NOT EXISTS modificadores (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_historico_acoes_id int(11) NOT NULL,
  rastreador_rotas json DEFAULT NULL COMMENT 'acesso:[{datetime:[{modificadoID: [descricao, logID], maquinaIP:[remote, remote_cloudFlare, remote_Incapsula, remote_sucuri, client, x_for, x, forwarded_for, forwarded], local:[ latitude, longitude,pais,estado,cidade] }] }]',
  PRIMARY KEY (id,user_historico_acoes_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_modificadores_user_historico_acoes1_idx (user_historico_acoes_id),
  CONSTRAINT fk_modificadores_user_historico_acoes1 FOREIGN KEY (user_historico_acoes_id) REFERENCES user_historico_acoes (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `muffin_tokenize_phinxlog`
--

CREATE TABLE IF NOT EXISTS muffin_tokenize_phinxlog (
  version bigint(20) NOT NULL,
  migration_name varchar(100) DEFAULT NULL,
  start_time timestamp NULL DEFAULT NULL,
  end_time timestamp NULL DEFAULT NULL,
  breakpoint tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (version)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `notificacoes`
--

CREATE TABLE IF NOT EXISTS notificacoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL COMMENT 'todas as notificações emitidas ao receptor user_id',
  nao_visualizadas int(11) DEFAULT NULL,
  instancias json DEFAULT NULL COMMENT '[{nome_do_model_emissor:[{ emissorID:[{ datetime:[titulo, msg_completa, msg_html, msg_pequena, msg_format, data_criada ], contextoURL, contextoURI, contextoNOME, eventos_id, tags_id1,tags_id2, tags_id3, visualizada:false, data_visualizada}] }] }]',
  tempo_medio_resposta int(11) DEFAULT NULL COMMENT 'data_criada - data-visualizada de todas as notificações.instancias onde visualizadas:true',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_notificacoes_user1_idx (user_id),
  CONSTRAINT fk_notificacoes_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `outros`
--

CREATE TABLE IF NOT EXISTS outros (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  regras_id int(11) NOT NULL,
  tipo enum('Online','Presencial') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  presenca json DEFAULT NULL COMMENT '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }',
  pontuacao int(11) DEFAULT NULL COMMENT 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema',
  bonificacao tinyint(1) DEFAULT NULL,
  bonificacao_historico json DEFAULT NULL COMMENT '{[datetime:{provas_id:{provaID, minha_provaID, nota}} ]}',
  distancia_casa_sede varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  auto_avaliacao json DEFAULT NULL COMMENT 'baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  avaliacao_equipe json DEFAULT NULL COMMENT '{script_metodo_avaliacao_alunos, cursos_modulos_id:[timestamp:{total_membros_participantes, datetime:{ media_apresentacao, media_planejamento, media_estimulo, media_orientacao_atividades, media_relacionamento, media_interesse_apendizagem, media_tecnicas, media_estimulos_critico, media_cumprir_horarios, media_assiduidade_demandas, media_interacao_presencial, media_interacao_online } }] } baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  avaliacao_administradores json DEFAULT NULL COMMENT '{script_metodo_avaliacao_dirigentes, cursos_secoes_id:[timestamp:{total_dirigentes_participantes, datetime:{ media_relacionamento, media_tecnicas_avaliacao, media_cumprir_horarios, media_cumprir_datas, media_comprometimento, media_assiduidade_aulas} }] } baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  dias_disponiveis json DEFAULT NULL COMMENT '{´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ] }',
  conselheiro json DEFAULT NULL COMMENT '{ ´conselheiro´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,user_id,regras_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_outros_user1_idx (user_id),
  KEY fk_outros_regras1_idx (regras_id),
  CONSTRAINT fk_outros_regras1 FOREIGN KEY (regras_id) REFERENCES regras (id),
  CONSTRAINT fk_outros_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `perfis`
--

CREATE TABLE IF NOT EXISTS perfis (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome_social varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  contatos json DEFAULT NULL COMMENT '{´numeros´:[{tipo_descritivo:whatsApp, ddd, numero, permitir_discentes:true, permitir_publico:false }], ´emails´:[{tipo_descritivo:skype, email, permitir_discentes:true, permitir_publico:false}] }',
  facebook varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  curriculo_lattes varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  curriculo_upload json DEFAULT NULL COMMENT '[{titulo, user_historico_acoes_id.uploads.pdfID, user_historico_acoes_id.uploads.docID, user_historico_acoes_id.uploads.linkID, datetime}]',
  pictures json DEFAULT NULL,
  rg varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  cpf varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  cep varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  endereco varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  endereco_num varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  bairro varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  cidade varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  estado varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  modo_template json DEFAULT NULL COMMENT '{´outros´:[outros_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´discente´:[discentes_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´docente´:[docentes_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´voluntario´:[voluntarios_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´super_usuario´:[super_usuarios_id, permissao:false, data_permissao, modificadores_id, temporario:true], ´administrador´:[administradores_id, permissao:false, data_permissao, modificadores_id, temporario:true] }',
  auto_declaracao json DEFAULT NULL COMMENT '{datetime:{tipo, modificadores_id, maquinaIP}}',
  banca_verificacao json DEFAULT NULL COMMENT '{datetime:{tipo, modificadores_id, maquinaIP}}',
  deficiencia json DEFAULT NULL COMMENT '{´deficiente´:true, descricao:{}}',
  transporte_publico json DEFAULT NULL COMMENT '{´necessario´:true, quantas_passagens, ´requer_bilhete_estudante´:true}',
  religiao varchar(32) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `perfis_info`
--

CREATE TABLE IF NOT EXISTS perfis_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  perfis_id int(11) NOT NULL,
  perfis_user_id int(11) NOT NULL,
  PRIMARY KEY (id,perfis_id,perfis_user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_perfis_info_perfis1_idx (perfis_id,perfis_user_id),
  CONSTRAINT fk_perfis_info_perfis1 FOREIGN KEY (perfis_id) REFERENCES perfis (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `perfis_preferencias`
--

CREATE TABLE IF NOT EXISTS perfis_preferencias (
  id int(11) NOT NULL AUTO_INCREMENT,
  perfis_id int(11) NOT NULL,
  perfis_user_id int(11) NOT NULL,
  PRIMARY KEY (id,perfis_id,perfis_user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_perfis_preferencias_perfis1_idx (perfis_id,perfis_user_id),
  CONSTRAINT fk_perfis_preferencias_perfis1 FOREIGN KEY (perfis_id) REFERENCES perfis (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `perfis_upload`
--

CREATE TABLE IF NOT EXISTS perfis_upload (
  id int(11) NOT NULL AUTO_INCREMENT,
  perfis_id int(11) NOT NULL,
  PRIMARY KEY (id,perfis_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_perfis_upload_perfis1_idx (perfis_id),
  CONSTRAINT fk_perfis_upload_perfis1 FOREIGN KEY (perfis_id) REFERENCES perfis (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `provas`
--

CREATE TABLE IF NOT EXISTS provas (
  id int(11) NOT NULL AUTO_INCREMENT,
  disciplinas_id int(11) NOT NULL,
  tipo enum('Anima','Bonificada','Comum') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  provas_anima_id varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL COMMENT 'token da prova vinda do sistema do Oldimar',
  provas json DEFAULT NULL COMMENT '[{cursos_secoes_id:[disciplinas_id:[{provaID:[{ anima_provas_id, titulo, nome, data_aplicacao, data_elaborada, modificadores_id,´questoes´:[{ questao1, questão2, ... }],minha_provaID:[{discentes_id, user_id, ´respostas´:[questão1] }] }] }] }] - provaID = timestamp´_´ disciplina_id; minha_provaID = timestamp´_´user_id;',
  gabarito json DEFAULT NULL COMMENT '{}',
  notas json DEFAULT NULL COMMENT '[{cursos_secoes_id:[{grupos_id:[{discentes_id, user_id, provaID:[nota, erros:[{ questao1, questao2, ... }],minha_provaID, ´recomendacoes_anima´:{} ] }] }] }]  - provaID = timestamp´_´ disciplina_id; minha_provaID = timestamp´_´user_id;',
  info_anima json DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  modificadores_id int(11) NOT NULL,
  PRIMARY KEY (id,disciplinas_id,modificadores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_provas_disciplinas_idx (disciplinas_id),
  KEY fk_provas_modificadores1_idx (modificadores_id),
  CONSTRAINT fk_provas_disciplinas FOREIGN KEY (disciplinas_id) REFERENCES disciplinas (id),
  CONSTRAINT fk_provas_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `regras`
--

CREATE TABLE IF NOT EXISTS regras (
  id int(11) NOT NULL AUTO_INCREMENT,
  grupos_id int(11) NOT NULL COMMENT 'Cada regra criada, sera gerado um GRUPOS, onde sera adicionado todos os GRUPOS_MEMBROS pertencentes a essa regra',
  regras_hierarquias_id int(11) NOT NULL,
  cargo varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  descricao text COLLATE utf8mb4_unicode_520_ci,
  info json DEFAULT NULL COMMENT 'funções que este cargo exerce, contendo links para cada grupo gerado automaticamente',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  modificadores_id int(11) NOT NULL,
  PRIMARY KEY (id,grupos_id,regras_hierarquias_id,modificadores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_regras_grupos1_idx (grupos_id),
  KEY fk_regras_regras_hierarquias1_idx (regras_hierarquias_id),
  KEY fk_regras_modificadores1_idx (modificadores_id),
  CONSTRAINT fk_regras_grupos1 FOREIGN KEY (grupos_id) REFERENCES grupos (id),
  CONSTRAINT fk_regras_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id),
  CONSTRAINT fk_regras_regras_hierarquias1 FOREIGN KEY (regras_hierarquias_id) REFERENCES regras_hierarquias (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `regras_hierarquias`
--

CREATE TABLE IF NOT EXISTS regras_hierarquias (
  id int(11) NOT NULL AUTO_INCREMENT,
  regras_permicao_crud_id int(11) NOT NULL,
  modificadores_id int(11) NOT NULL,
  hierarquia int(11) NOT NULL,
  observacao text COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,regras_permicao_crud_id,modificadores_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_regras_hierarquias_regras_permicao_crud1_idx (regras_permicao_crud_id),
  KEY fk_regras_hierarquias_modificadores1_idx (modificadores_id),
  CONSTRAINT fk_regras_hierarquias_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id),
  CONSTRAINT fk_regras_hierarquias_regras_permicao_crud1 FOREIGN KEY (regras_permicao_crud_id) REFERENCES regras_permicao_crud (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `regras_historico_atribuicoes`
--

CREATE TABLE IF NOT EXISTS regras_historico_atribuicoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_atribuicoes_id int(11) NOT NULL,
  info json DEFAULT NULL COMMENT '´atribuicoes´:{ ´obteve´:[{regras_id, modificadores_id, datatime, maquinaIP}], ´definiu´:[{user_id,regras_id, datetime, maquinaIP}] }',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,user_atribuicoes_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_regras_atribuir_permissoes_user_atribuicoes1_idx (user_atribuicoes_id),
  CONSTRAINT fk_regras_atribuir_permissoes_user_atribuicoes1 FOREIGN KEY (user_atribuicoes_id) REFERENCES user_atribuicoes (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `regras_permicao_crud`
--

CREATE TABLE IF NOT EXISTS regras_permicao_crud (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Nos arquivos json sera especificado em quais controllers e funções que essa regra se atribui, em modo árvore. Através do gerador de tokens',
  criar json DEFAULT NULL,
  visualizar json DEFAULT NULL,
  editar json DEFAULT NULL,
  deletar json DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `subtemas`
--

CREATE TABLE IF NOT EXISTS subtemas (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'baseado no processo do descomplica',
  temas_id int(11) NOT NULL,
  docentes_id int(11) NOT NULL,
  nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  descricao text COLLATE utf8mb4_unicode_520_ci,
  carga_horaria json DEFAULT NULL,
  modificadores_id int(11) DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,temas_id,docentes_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_subtemas_temas1_idx (temas_id),
  KEY fk_subtemas_docentes1_idx (docentes_id),
  CONSTRAINT fk_subtemas_docentes1 FOREIGN KEY (docentes_id) REFERENCES docentes (id),
  CONSTRAINT fk_subtemas_temas1 FOREIGN KEY (temas_id) REFERENCES temas (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `super_usuarios`
--

CREATE TABLE IF NOT EXISTS super_usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  regras_id int(11) NOT NULL,
  tipo enum('Online','Presencial') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  presenca json DEFAULT NULL COMMENT '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }',
  pontuacao int(11) DEFAULT NULL COMMENT 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema',
  bonificacao tinyint(1) DEFAULT NULL,
  bonificacao_historico json DEFAULT NULL COMMENT '{[datetime:{provas_id:{provaID, minha_provaID, nota}} ]}',
  distancia_casa_sede varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  auto_avaliacao json DEFAULT NULL COMMENT 'baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  avaliacao_equipe json DEFAULT NULL COMMENT '{script_metodo_avaliacao_alunos, cursos_modulos_id:[timestamp:{total_membros_participantes, datetime:{ media_apresentacao, media_planejamento, media_estimulo, media_orientacao_atividades, media_relacionamento, media_interesse_apendizagem, media_tecnicas, media_estimulos_critico, media_cumprir_horarios, media_assiduidade_demandas, media_interacao_presencial, media_interacao_online } }] } baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  avaliacao_administradores json DEFAULT NULL COMMENT '{script_metodo_avaliacao_dirigentes, cursos_secoes_id:[timestamp:{total_dirigentes_participantes, datetime:{ media_relacionamento, media_tecnicas_avaliacao, media_cumprir_horarios, media_cumprir_datas, media_comprometimento, media_assiduidade_aulas} }] } baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  dias_disponiveis json DEFAULT NULL COMMENT '{´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ] }',
  modified json DEFAULT NULL COMMENT '{ ´conselheiro´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}',
  created datetime DEFAULT NULL,
  PRIMARY KEY (id,user_id,regras_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_super_usuarios_user1_idx (user_id),
  KEY fk_super_usuarios_regras1_idx (regras_id),
  CONSTRAINT fk_super_usuarios_regras1 FOREIGN KEY (regras_id) REFERENCES regras (id),
  CONSTRAINT fk_super_usuarios_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `super_usuarios_acoes`
--

CREATE TABLE IF NOT EXISTS super_usuarios_acoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  super_usuarios_id int(11) NOT NULL,
  PRIMARY KEY (id,super_usuarios_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_administradores_acoes_copy1_super_usuarios1_idx (super_usuarios_id),
  CONSTRAINT fk_administradores_acoes_copy1_super_usuarios1 FOREIGN KEY (super_usuarios_id) REFERENCES super_usuarios (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `super_usuarios_info`
--

CREATE TABLE IF NOT EXISTS super_usuarios_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `super_usuarios_token`
--

CREATE TABLE IF NOT EXISTS super_usuarios_token (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Esta tabela é reponsável por armazenar a senha de permissão pública de cada usuário. Permitindo que ao usá-la em outra sessão o inquilino receba tal privilégio para executar a devida função.  ',
  token varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  instancia varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  ip_restricao varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  info mediumtext COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  super_usuarios_id int(11) NOT NULL,
  PRIMARY KEY (id,super_usuarios_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_super_usuarios_token_super_usuarios1_idx (super_usuarios_id),
  CONSTRAINT fk_super_usuarios_token_super_usuarios1 FOREIGN KEY (super_usuarios_id) REFERENCES super_usuarios (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS tags (
  id int(11) NOT NULL AUTO_INCREMENT,
  modificadores_id int(11) NOT NULL,
  tags_tags_id int(11) NOT NULL COMMENT 'esta tabela foi gerada com migrations, do plugin Tags, e a gestão por ele também',
  tags_tagged_id int(11) NOT NULL,
  lista json DEFAULT NULL COMMENT '[quantidade,{referenciaID, modificadores_id, datetime}]',
  PRIMARY KEY (id,modificadores_id,tags_tags_id,tags_tagged_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_tags_modificadores1_idx (modificadores_id),
  CONSTRAINT fk_tags_modificadores1 FOREIGN KEY (modificadores_id) REFERENCES modificadores (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tags_phinxlog`
--

CREATE TABLE IF NOT EXISTS tags_phinxlog (
  version bigint(20) NOT NULL,
  migration_name varchar(100) DEFAULT NULL,
  start_time timestamp NULL DEFAULT NULL,
  end_time timestamp NULL DEFAULT NULL,
  breakpoint tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (version)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tags_tagged`
--

CREATE TABLE IF NOT EXISTS tags_tagged (
  id int(11) NOT NULL AUTO_INCREMENT,
  tag_id int(11) NOT NULL,
  fk_id int(11) NOT NULL,
  fk_model varchar(255) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY tag_id (tag_id,fk_id,fk_model)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tags_tags`
--

CREATE TABLE IF NOT EXISTS tags_tags (
  id int(11) NOT NULL AUTO_INCREMENT,
  namespace varchar(255) DEFAULT NULL,
  slug varchar(255) NOT NULL,
  label varchar(255) NOT NULL,
  counter int(11) unsigned NOT NULL DEFAULT '0',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY slug (slug,namespace)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `temas`
--

CREATE TABLE IF NOT EXISTS temas (
  id int(11) NOT NULL AUTO_INCREMENT,
  disciplinas_id int(11) NOT NULL,
  nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  descricao text COLLATE utf8mb4_unicode_520_ci,
  modificadores_id int(11) DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,disciplinas_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_temas_disciplinas1_idx (disciplinas_id),
  CONSTRAINT fk_temas_disciplinas1 FOREIGN KEY (disciplinas_id) REFERENCES disciplinas (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tokenize_tokens`
--

CREATE TABLE IF NOT EXISTS tokenize_tokens (
  id int(11) NOT NULL AUTO_INCREMENT,
  token varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  foreign_alias varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  foreign_table varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  foreign_key varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  foreign_data text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  expired datetime NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY TOKENIZE_TOKEN (token),
  KEY TOKENIZE_STATUS (`status`),
  KEY TOKENIZE_MODEL (foreign_alias,foreign_table,foreign_key)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Tabela-Mãe onde será salvo todas as informações relacionadas com a individualidade do inquilino ',
  user_cadastro_id int(11) NOT NULL,
  perfis_id int(11) NOT NULL,
  username varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  email varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  remember_token varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  google varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  oauth_provider enum('','Facebook','Google','Facebook e Google') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  primeiro_nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  meio_nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  ultimo_nome varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  gender varchar(16) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  locale varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  cover varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  photo varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  photo_dir varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  photo_size int(11) DEFAULT NULL,
  photo_type varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  link varchar(256) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  info json DEFAULT NULL,
  sexo enum('Feminino','Masculino','Outros') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,user_cadastro_id,perfis_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_user_user_cadastro1_idx (user_cadastro_id),
  KEY fk_user_perfis1_idx (perfis_id),
  CONSTRAINT fk_user_perfis1 FOREIGN KEY (perfis_id) REFERENCES perfis (id),
  CONSTRAINT fk_user_user_cadastro1 FOREIGN KEY (user_cadastro_id) REFERENCES user_cadastro (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_atribuicoes`
--

CREATE TABLE IF NOT EXISTS user_atribuicoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  acao enum('Atribuido','Atribuir') COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT 'tipo de ação que esta sendo executada',
  titulo varchar(128) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL COMMENT 'titulo da atribuição ou do log',
  eventos_id int(11) DEFAULT NULL,
  info json DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id,user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_user_atribuicoes_user1_idx (user_id),
  CONSTRAINT fk_user_atribuicoes_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_cadastro`
--

CREATE TABLE IF NOT EXISTS user_cadastro (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Esta tabela é responsável por salvar o primeiro contato do usuario com o sistema e gerar informação suficiente para preencher todos os dados que seja obrigatório para iniciar uma conta.',
  username varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  email varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  first_name varchar(60) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  middle_name varchar(60) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  last_name varchar(60) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  rg varchar(60) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  cpf varchar(60) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  cep varchar(60) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  numero_principal varchar(25) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  numero_contato varchar(25) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  info json DEFAULT NULL,
  modificadores_id int(11) DEFAULT NULL COMMENT 'caso o usuario seja criado por um voluntario, super_usuario ou administrador',
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_historico_acoes`
--

CREATE TABLE IF NOT EXISTS user_historico_acoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  log_id int(11) NOT NULL,
  acoes json DEFAULT NULL COMMENT '[{datetime:[{ eventos_id, modificadores_id.modificadoID, msg, request, historicoID, ´rotas´:[{nome, uriTemplate, defaults}]  }] }]',
  acessos json DEFAULT NULL COMMENT '{ [{ localID:[ latitude, longitude,pais,estado,cidade], datetime:[remote, remote_cloudFlare, remote_Incapsula, remote_sucuri, client, x_for, x, forwarded_for, forwarded]} ]} localID = timestamp´_´latitude´&´longitude',
  uploads json DEFAULT NULL COMMENT '{´imagens´:[{ ´imgID´ = ´img´+´_´+timestamp+´_´+perfil_id;, ´nome´: imgID´-original´, \ntitulo, descricao, alt,´metadata´:{array}, extensao, data_upload,  maquinaIP, ´publico_sistema´:true, ´publico_web´:false, path, ´arquivos´:[ imgID´-views´:{imgID-resolucao, ...} ] }], ´pdfs´:[{ ´pdfID´ = ´pdf´+´_´+timestamp+´_´+perfil_id;, ´nome´: pdfID´-original´, \ntitulo, descricao, alt,´metadata´:{array}, extensao, data_upload,  maquinaIP, ´publico_sistema´:true, ´publico_web´:false, path, ´arquivos´:[ pdfID´-views´:{pdfID-resolucao, ...} }], docs:[{´docID´ = ´doc´+´_´+timestamp+´_´+perfil_id;, ´nome´: docID´-original´, \ntitulo, descricao, alt,´metadata´:{array}, extensao, data_upload,  maquinaIP, ´publico_sistema´:true, ´publico_web´:false, path, ´arquivos´:[ docID´-views´:{docID-resolucao, ...} }], ´videos´:[{ ´videoID´ = ´video´+´_´+timestamp+´_´+perfil_id;, ´nome´: videoID´-original´, \ntitulo, descricao, alt,´metadata´:{array}, ext',
  PRIMARY KEY (id,user_id,log_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_user_historico_acoes_user1_idx (user_id),
  KEY fk_user_historico_acoes_log1_idx (log_id),
  CONSTRAINT fk_user_historico_acoes_log1 FOREIGN KEY (log_id) REFERENCES log (id),
  CONSTRAINT fk_user_historico_acoes_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_historico_senha`
--

CREATE TABLE IF NOT EXISTS user_historico_senha (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  senhas json DEFAULT NULL COMMENT '{ [{user_id.password:[token, user_historico_acoes_id.acessosID] }]  }',
  PRIMARY KEY (id,user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_user_historico_senha_user1_idx (user_id),
  CONSTRAINT fk_user_historico_senha_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS user_info (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  info_pessoal json DEFAULT NULL,
  info_sistema json DEFAULT NULL,
  PRIMARY KEY (id,user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_user_info_user_idx (user_id),
  CONSTRAINT fk_user_info_user FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_inscricoes`
--

CREATE TABLE IF NOT EXISTS user_inscricoes (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  autorizado tinyint(1) DEFAULT NULL,
  inscricoes json DEFAULT NULL COMMENT '[{ cursos_id:[´inscrever´:{true, datetime}, ´lembrar´:{false, agenda_lembrar_id.inscricoesID}], modificadores_id:[´pendente´:{false, datetime}, ´matriculado´:{true, datetime} ], status:(return eventos cursos_secoes) }]',
  PRIMARY KEY (id,user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_user_inscricoes_user1_idx (user_id),
  CONSTRAINT fk_user_inscricoes_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_preferencias`
--

CREATE TABLE IF NOT EXISTS user_preferencias (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  configuracoes json DEFAULT NULL,
  temas json DEFAULT NULL,
  `plugins` json DEFAULT NULL COMMENT 'plugins adicionados ao sistema',
  temporarios json DEFAULT NULL COMMENT 'cookies, lembrar maquinaIP,',
  PRIMARY KEY (id,user_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_user_preferencias_user1_idx (user_id),
  CONSTRAINT fk_user_preferencias_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `voluntarios`
--

CREATE TABLE IF NOT EXISTS voluntarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  regras_id int(11) NOT NULL,
  tipo enum('Online','Presencial') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  presenca json DEFAULT NULL COMMENT '{script_metodo_verificacao_presenca, [{date:[presente:true, hora_chegada, hora_saida, relevancia:0-10, modificadores_id] }] }',
  pontuacao int(11) DEFAULT NULL COMMENT 'pontuacao gerada com o envolvimento e cumprimento das metas do sistema',
  bonificacao tinyint(1) DEFAULT NULL,
  bonificacao_historico json DEFAULT NULL COMMENT '{[datetime:{provas_id:{provaID, minha_provaID, nota}} ]}',
  distancia_casa_sede varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  auto_avaliacao json DEFAULT NULL COMMENT 'baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  avaliacao_equipe json DEFAULT NULL COMMENT '{script_metodo_avaliacao_alunos, cursos_modulos_id:[timestamp:{total_membros_participantes, datetime:{ media_apresentacao, media_planejamento, media_estimulo, media_orientacao_atividades, media_relacionamento, media_interesse_apendizagem, media_tecnicas, media_estimulos_critico, media_cumprir_horarios, media_assiduidade_demandas, media_interacao_presencial, media_interacao_online } }] } baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  avaliacao_administradores json DEFAULT NULL COMMENT '{script_metodo_avaliacao_dirigentes, cursos_secoes_id:[timestamp:{total_dirigentes_participantes, datetime:{ media_relacionamento, media_tecnicas_avaliacao, media_cumprir_horarios, media_cumprir_datas, media_comprometimento, media_assiduidade_aulas} }] } baseado em : https://www.ibccoaching.com.br/portal/coaching/quais-sao-os-tipos-de-avaliacao-de-desempenho/',
  dias_disponiveis json DEFAULT NULL COMMENT '{´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ] }',
  created datetime DEFAULT NULL,
  modified json DEFAULT NULL COMMENT '{ ´conselheiro´:true, ´disponibilidade´:[" ",´domingo´:{time_inicio, time_final}, ´segunda´:{time_inicio, time_final}, ´terca´:{time_inicio, time_final}, ´quarta´:{time_inicio, time_final}, ´quinta´:{time_inicio, time_final}, ´sexta´:{time_inicio, time_final}, ´sabado´:{time_inicio, time_final} ], grupos_id, disciplinas_id, ´pontuacao´:[total, datetime:{pontos, modificadores_id}, demandas_id]}',
  PRIMARY KEY (id,user_id,regras_id),
  UNIQUE KEY id_UNIQUE (id),
  KEY fk_voluntarios_user1_idx (user_id),
  KEY fk_voluntarios_regras1_idx (regras_id),
  CONSTRAINT fk_voluntarios_regras1 FOREIGN KEY (regras_id) REFERENCES regras (id),
  CONSTRAINT fk_voluntarios_user1 FOREIGN KEY (user_id) REFERENCES `user` (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `voluntarios_token`
--

CREATE TABLE IF NOT EXISTS voluntarios_token (
  id int(11) NOT NULL AUTO_INCREMENT,
  token varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  instancia varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  ip_restricao varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  info mediumtext COLLATE utf8mb4_unicode_520_ci,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY id_UNIQUE (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
