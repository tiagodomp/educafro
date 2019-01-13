-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: educafro
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES administradores WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `administradores_acoes`
--

LOCK TABLES administradores_acoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `administradores_info`
--

LOCK TABLES administradores_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `administradores_tokens`
--

LOCK TABLES administradores_tokens WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `aulas`
--

LOCK TABLES aulas WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `categorizacao`
--

LOCK TABLES categorizacao WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `categorizacao_info`
--

LOCK TABLES categorizacao_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `codigos`
--

LOCK TABLES codigos WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `codigos_info`
--

LOCK TABLES codigos_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `codigos_tags`
--

LOCK TABLES codigos_tags WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `cursos`
--

LOCK TABLES cursos WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `cursos_historico`
--

LOCK TABLES cursos_historico WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `cursos_info`
--

LOCK TABLES cursos_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `cursos_modulos`
--

LOCK TABLES cursos_modulos WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `cursos_secoes`
--

LOCK TABLES cursos_secoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `discentes`
--

LOCK TABLES discentes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `disciplinas`
--

LOCK TABLES disciplinas WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `docentes`
--

LOCK TABLES docentes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `docentes_token`
--

LOCK TABLES docentes_token WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `eventos`
--

LOCK TABLES eventos WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos`
--

LOCK TABLES grupos WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_de_administradores`
--

LOCK TABLES grupos_de_administradores WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_de_discentes`
--

LOCK TABLES grupos_de_discentes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_de_docentes`
--

LOCK TABLES grupos_de_docentes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_de_outros`
--

LOCK TABLES grupos_de_outros WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_de_super_usuarios`
--

LOCK TABLES grupos_de_super_usuarios WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_de_voluntarios`
--

LOCK TABLES grupos_de_voluntarios WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_historico`
--

LOCK TABLES grupos_historico WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_info`
--

LOCK TABLES grupos_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_membros`
--

LOCK TABLES grupos_membros WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `grupos_secoes`
--

LOCK TABLES grupos_secoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `log`
--

LOCK TABLES log WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `modificadores`
--

LOCK TABLES modificadores WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `muffin_tokenize_phinxlog`
--

LOCK TABLES muffin_tokenize_phinxlog WRITE;
INSERT INTO muffin_tokenize_phinxlog VALUES (1,'CreateTokenizeTokensTable','2019-01-08 09:36:08','2019-01-08 09:36:09',0);
UNLOCK TABLES;

--
-- Dumping data for table `notificacoes`
--

LOCK TABLES notificacoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `outros`
--

LOCK TABLES outros WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `perfis`
--

LOCK TABLES perfis WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `perfis_info`
--

LOCK TABLES perfis_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `perfis_preferencias`
--

LOCK TABLES perfis_preferencias WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `perfis_upload`
--

LOCK TABLES perfis_upload WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `provas`
--

LOCK TABLES provas WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `regras`
--

LOCK TABLES regras WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `regras_hierarquias`
--

LOCK TABLES regras_hierarquias WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `regras_historico_atribuicoes`
--

LOCK TABLES regras_historico_atribuicoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `regras_permicao_crud`
--

LOCK TABLES regras_permicao_crud WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `subtemas`
--

LOCK TABLES subtemas WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `super_usuarios`
--

LOCK TABLES super_usuarios WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `super_usuarios_acoes`
--

LOCK TABLES super_usuarios_acoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `super_usuarios_info`
--

LOCK TABLES super_usuarios_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `super_usuarios_token`
--

LOCK TABLES super_usuarios_token WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `tags`
--

LOCK TABLES tags WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `tags_phinxlog`
--

LOCK TABLES tags_phinxlog WRITE;
INSERT INTO tags_phinxlog VALUES (20180113144821,'MigrationTagsInit','2019-01-08 05:44:38','2019-01-08 05:44:40',0),(20180113144822,'MigrationTagsModel','2019-01-08 05:44:40','2019-01-08 05:44:42',0),(20180113144823,'MigrationTagsNulls','2019-01-08 05:44:42','2019-01-08 05:44:44',0);
UNLOCK TABLES;

--
-- Dumping data for table `tags_tagged`
--

LOCK TABLES tags_tagged WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `tags_tags`
--

LOCK TABLES tags_tags WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `temas`
--

LOCK TABLES temas WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `tokenize_tokens`
--

LOCK TABLES tokenize_tokens WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES user WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user_atribuicoes`
--

LOCK TABLES user_atribuicoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user_cadastro`
--

LOCK TABLES user_cadastro WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user_historico_acoes`
--

LOCK TABLES user_historico_acoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user_historico_senha`
--

LOCK TABLES user_historico_senha WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user_info`
--

LOCK TABLES user_info WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user_inscricoes`
--

LOCK TABLES user_inscricoes WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `user_preferencias`
--

LOCK TABLES user_preferencias WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `voluntarios`
--

LOCK TABLES voluntarios WRITE;
UNLOCK TABLES;

--
-- Dumping data for table `voluntarios_token`
--

LOCK TABLES voluntarios_token WRITE;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
