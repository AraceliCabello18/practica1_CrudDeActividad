create database persona;
use persona;
CREATE TABLE `t_persona` (
  `id_persona` int(11)  NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `fecha` varchar(100) DEFAULT NULL ,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

