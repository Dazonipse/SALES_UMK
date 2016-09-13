/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50136
Source Host           : localhost:3306
Source Database       : salesumk

Target Server Type    : MYSQL
Target Server Version : 50136
File Encoding         : 65001

Date: 2016-09-07 09:19:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for actividad
-- ----------------------------
DROP TABLE IF EXISTS `actividad`;
CREATE TABLE `actividad` (
  `IdAE` int(11) NOT NULL,
  `Actividad` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of actividad
-- ----------------------------

-- ----------------------------
-- Table structure for ae
-- ----------------------------
DROP TABLE IF EXISTS `ae`;
CREATE TABLE `ae` (
  `IdPlan` varchar(10) DEFAULT NULL,
  `IdCliente` varchar(50) DEFAULT NULL,
  `IdAE` int(11) DEFAULT NULL,
  `IdEje` int(11) DEFAULT NULL,
  `Contacto1` bit(1) DEFAULT NULL,
  `Contacto2` bit(1) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Observacion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ae
-- ----------------------------

-- ----------------------------
-- Table structure for agenda
-- ----------------------------
DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `IdPlan` varchar(10) NOT NULL,
  `Vendedor` varchar(150) NOT NULL,
  `Ruta` varchar(10) NOT NULL,
  `Zona` varchar(50) DEFAULT NULL,
  `Revisado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdPlan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agenda
-- ----------------------------
INSERT INTO `agenda` VALUES ('F1716-0913', 'ESPERANZA CASTILLO', 'F17', '1', 'Revisado');

-- ----------------------------
-- Table structure for calendar
-- ----------------------------
DROP TABLE IF EXISTS `calendar`;
CREATE TABLE `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `allDay` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of calendar
-- ----------------------------
INSERT INTO `calendar` VALUES ('1', 'EVENTO 1', '2016-08-11 10:10:01', '2016-08-11 10:12:03', 'false');
INSERT INTO `calendar` VALUES ('2', 'EVENTO 2', '2016-08-12 10:10:27', '2016-08-12 10:10:32', 'false');
INSERT INTO `calendar` VALUES ('3', 'EVENTO 3', '2016-08-09 10:10:41', '2016-08-09 10:10:46', 'false');
INSERT INTO `calendar` VALUES ('4', 'EVENTO ', '2016-08-10 10:10:57', '2016-08-10 15:11:00', 'false');

-- ----------------------------
-- Table structure for detallegvendedor
-- ----------------------------
DROP TABLE IF EXISTS `detallegvendedor`;
CREATE TABLE `detallegvendedor` (
  `IdGrupo` int(11) DEFAULT NULL,
  `IdVendedor` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detallegvendedor
-- ----------------------------
INSERT INTO `detallegvendedor` VALUES ('1', '1');
INSERT INTO `detallegvendedor` VALUES ('1', '2');
INSERT INTO `detallegvendedor` VALUES ('1', '3');
INSERT INTO `detallegvendedor` VALUES ('1', '4');

-- ----------------------------
-- Table structure for ejecutiva
-- ----------------------------
DROP TABLE IF EXISTS `ejecutiva`;
CREATE TABLE `ejecutiva` (
  `IdEje` int(11) NOT NULL,
  `IdAE` int(11) NOT NULL,
  `Actividad` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ejecutiva
-- ----------------------------

-- ----------------------------
-- Table structure for gvendedor
-- ----------------------------
DROP TABLE IF EXISTS `gvendedor`;
CREATE TABLE `gvendedor` (
  `IdGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `NombreGrupo` varchar(100) NOT NULL,
  `IdUsuario` int(10) NOT NULL,
  `Activa` int(1) DEFAULT NULL,
  `FechaCreacion` date DEFAULT NULL,
  PRIMARY KEY (`IdGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gvendedor
-- ----------------------------
INSERT INTO `gvendedor` VALUES ('1', 'Grupo_Alder', '77', '0', '2016-08-15');

-- ----------------------------
-- Table structure for pdetalle
-- ----------------------------
DROP TABLE IF EXISTS `pdetalle`;
CREATE TABLE `pdetalle` (
  `IdDP` int(11) NOT NULL,
  `IdPedido` int(11) DEFAULT NULL,
  `IdArticulo` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Cantidad` float DEFAULT NULL,
  `Precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pdetalle
-- ----------------------------
INSERT INTO `pdetalle` VALUES ('0', '5246', '10301021	', 'Acetaminofen 100 mg/ml Solución Oral Gotas 30ml/Frasco 1/Caja (Ramos)', '5', '10');
INSERT INTO `pdetalle` VALUES ('2', '5245', '10301021', 'Acetaminofen 100 mg/ml Solución Oral Gotas 30ml/Frasco 1/Caja (Ramos)', '100', '2');
INSERT INTO `pdetalle` VALUES ('3', '5245', '12901011', 'Acetaminofen 120 mg/5ml Jarabe 120 ml/Frasco 1/Caja (Lancasco)', '150', '2');
INSERT INTO `pdetalle` VALUES ('4', '5246', '18817041', '	Acetazolamida 250 mg Tabletas 30/Caja (UNIMARK-India)', '500', '1');
INSERT INTO `pdetalle` VALUES ('5', '5246', '10118011', 'Acido Zoledronico 4mg/5ml Sol. Iny I.V 5ml/Vial 1/Caja (Naprod)', '10', '20000');
INSERT INTO `pdetalle` VALUES ('6', '5246', '18918011', 'Acido Transretinoico 10 mg Cápsulas 100/Caja (Cheplapharm)', '15', '1000');

-- ----------------------------
-- Table structure for pedido
-- ----------------------------
DROP TABLE IF EXISTS `pedido`;
CREATE TABLE `pedido` (
  `IdPedido` int(11) NOT NULL,
  `IdVendedor` varchar(10) DEFAULT NULL,
  `IdCliente` varchar(50) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Vendedor` varchar(150) DEFAULT NULL,
  `Cliente` varchar(150) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `TM` bit(1) DEFAULT NULL,
  `FP` bit(1) DEFAULT NULL,
  `Plazo` varchar(50) DEFAULT NULL,
  `Descuento` float DEFAULT NULL,
  `IVA` float DEFAULT NULL,
  `Nota` varchar(250) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pedido
-- ----------------------------
INSERT INTO `pedido` VALUES ('5245', 'F17', '1', '2016-08-13', null, 'Farmacia la Carera', 'Da muy caro todo', null, null, null, null, null, 'Da muy caro todo', '0');
INSERT INTO `pedido` VALUES ('5246', 'F17', '2', '2016-08-13', null, 'FARMACIA LA LADRONA', 'mucho roba', null, null, null, null, null, 'mucho roba', '1');

-- ----------------------------
-- Table structure for rdetalle
-- ----------------------------
DROP TABLE IF EXISTS `rdetalle`;
CREATE TABLE `rdetalle` (
  `IdRecibo` varchar(14) NOT NULL,
  `NFactura` varchar(50) NOT NULL,
  `FValor` float DEFAULT NULL,
  `ValorNC` float DEFAULT NULL,
  `Retencion` float NOT NULL,
  `Descuento` float NOT NULL,
  `VRecibo` float DEFAULT NULL,
  `Saldo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rdetalle
-- ----------------------------
INSERT INTO `rdetalle` VALUES ('F17-3336', '00080197', '6564.54', '0', '0', '0', '1080', '5484.54');
INSERT INTO `rdetalle` VALUES ('F17-1234', '00078344', '4423.25', '0', '0', '0', '2000', '2423.25');

-- ----------------------------
-- Table structure for recibo
-- ----------------------------
DROP TABLE IF EXISTS `recibo`;
CREATE TABLE `recibo` (
  `IdRecibo` varchar(14) NOT NULL,
  `IdCliente` varchar(50) NOT NULL,
  `Vendedor` varchar(150) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `MRecibo` float DEFAULT NULL,
  `TC` float DEFAULT NULL,
  `TM` int(1) DEFAULT NULL,
  `Recibimos` varchar(250) DEFAULT NULL,
  `LCantidad` varchar(250) DEFAULT NULL,
  `Concepto` varchar(250) DEFAULT NULL,
  `Efectivo` int(1) DEFAULT NULL,
  `CHK` int(1) DEFAULT NULL,
  `NumCHK` varchar(50) DEFAULT NULL,
  `Banco` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdRecibo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of recibo
-- ----------------------------
INSERT INTO `recibo` VALUES ('F17-1234', '02474', 'ESPERANZA CASTILLO', '2016-07-07', '2000', '0', '0', 'FARMACIA KIELSA - RUC J0310000116814', 'DOS MIL NETOS.', 'qwert', '1', '0', '', '');
INSERT INTO `recibo` VALUES ('F17-3336', '00042', 'ESPERANZA CASTILLO', '2016-07-08', '1080', '0', '0', 'COMISARIATO DE LA POLICIA NACIONAL - RUC J0130000001725', 'UN MIL OCHENTA NETOS.', 'fffffffff', '1', '0', '', '');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `UsuarioID` int(10) NOT NULL AUTO_INCREMENT,
  `CodVendedor` varchar(5) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Privilegio` int(5) NOT NULL,
  `Activo` int(1) NOT NULL,
  `FechaCreacion` date NOT NULL,
  `FechaBaja` date DEFAULT NULL,
  PRIMARY KEY (`UsuarioID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'F02', 'ESPERANZA CASTILLO', 'EC1565', '0', '0', '2016-08-10', '2016-08-15');
INSERT INTO `usuario` VALUES ('2', 'F03', 'ELIZABETH TREMINIO', 'ET0757', '0', '0', '2016-07-19', null);
INSERT INTO `usuario` VALUES ('3', 'F04', 'MARVIN AGUIRRE', 'MA6917', '0', '0', '2016-08-23', null);
INSERT INTO `usuario` VALUES ('4', 'F05', 'RONALD MARTINEZ', 'RM1107', '0', '0', '2016-07-07', null);
INSERT INTO `usuario` VALUES ('5', 'F06', 'MARIA DE LOURDES PEREZ', 'ML5493', '0', '0', '2016-08-05', null);
INSERT INTO `usuario` VALUES ('6', 'F07', 'BETSAYDA GARMENDIA', 'BG8429', '0', '0', '2016-08-10', null);
INSERT INTO `usuario` VALUES ('7', 'F08', 'TANIA MARQUEZ', 'TM8041', '0', '0', '2016-08-16', null);
INSERT INTO `usuario` VALUES ('8', 'F09', 'NEYLING RAMIREZ', 'NR8183', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('9', 'F10', 'WALTER BALTODANO', 'WB1406', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('10', 'F11', 'KENNY ARAGON', 'KA6238', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('11', 'F12', 'CESIA MOREIRA', 'CM5044', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('12', 'F14', 'ALMA IRIS RODRIGUEZ', 'AR5855', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('13', 'F17', 'ESPERANZA CASTILLO', 'EC0375', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('14', 'F18', 'GIOVANNA RODRIGUEZ PADILLA', 'GP2555', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('15', 'F19', 'SAMIR BARBERENA', 'SM4769', '0', '0', '2016-08-09', null);
INSERT INTO `usuario` VALUES ('16', 'F20', 'FABIO CERVANTES', 'FC7102', '0', '0', '2016-08-31', null);
INSERT INTO `usuario` VALUES ('17', 'F16', 'BISMARCK LOPEZ', 'BL3687', '0', '0', '2016-08-01', null);
INSERT INTO `usuario` VALUES ('18', 'F21', 'VACANTE', 'VC655', '0', '0', '2016-08-13', null);
INSERT INTO `usuario` VALUES ('19', '77', 'ALDER', '123', '1', '0', '2016-08-07', null);
INSERT INTO `usuario` VALUES ('20', '', 'MEYLING', '123', '2', '0', '2016-08-19', null);

-- ----------------------------
-- Table structure for vclientes
-- ----------------------------
DROP TABLE IF EXISTS `vclientes`;
CREATE TABLE `vclientes` (
  `IdPlan` varchar(10) NOT NULL,
  `Lunes` varchar(250) DEFAULT NULL,
  `Martes` varchar(250) DEFAULT NULL,
  `Miercoles` varchar(250) DEFAULT NULL,
  `Jueves` varchar(250) DEFAULT NULL,
  `Viernes` varchar(250) DEFAULT NULL,
  `Sabado` varchar(250) DEFAULT NULL,
  `Observaciones` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vclientes
-- ----------------------------
INSERT INTO `vclientes` VALUES ('F1716-0913', '00001,00002,00003,00004,00005,00006,00007,00008,00009,000010,00011,00012,00013,00014,00015,00016,00017,00018,00019,00020', '00001,00002,00003,00004,00005,00006,00007,00008,00009,000010,00011,00012,00013,00014,00015,00016,00017,00018,00019,00020', '00042,01191', '00001,00002,00003,00004,00005,00006,00007,00008,00009,000010,00011,00012,00013,00014,00015,00016,00017,00018,00019,00020', '00001,00002,00003,00004,00005,00006,00007,00008,00009,000010,00011,00012,00013,00014,00015,00016,00017,00018,00019,00020', '00042,00123,00931', '');

-- ----------------------------
-- Table structure for visitas
-- ----------------------------
DROP TABLE IF EXISTS `visitas`;
CREATE TABLE `visitas` (
  `IdPlan` varchar(10) DEFAULT NULL,
  `IdCliente` varchar(50) DEFAULT NULL,
  `Visitado` int(1) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visitas
-- ----------------------------
INSERT INTO `visitas` VALUES ('F1716-0913', '00931', '2', '2016-08-12');
INSERT INTO `visitas` VALUES ('F1716-0913', '03308', '1', '2016-08-11');

-- ----------------------------
-- View structure for view_eventos
-- ----------------------------
DROP VIEW IF EXISTS `view_eventos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `view_eventos` AS SELECT
agenda.Ruta as Ruta,
vclientes.IdPlan,
vclientes.Lunes,
vclientes.Martes,
vclientes.Miercoles,
vclientes.Jueves,
vclientes.Viernes,
vclientes.Sabado,
vclientes.Observaciones
FROM
agenda
INNER JOIN vclientes ON agenda.IdPlan = vclientes.IdPlan ;

-- ----------------------------
-- View structure for view_pedidos
-- ----------------------------
DROP VIEW IF EXISTS `view_pedidos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `view_pedidos` AS SELECT
pedido.Cliente,
pdetalle.IdPedido,
pdetalle.IdArticulo,
pdetalle.Descripcion,
pdetalle.Cantidad,
pdetalle.Precio,
pedido.Fecha,
pedido.IdVendedor,
pedido.Vendedor,
pedido.Estado
FROM
pedido
INNER JOIN pdetalle ON pdetalle.IdPedido = pedido.IdPedido ;

-- ----------------------------
-- View structure for view_reportepedidos
-- ----------------------------
DROP VIEW IF EXISTS `view_reportepedidos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `view_reportepedidos` AS SELECT
pedido.IdPedido,
pedido.IdVendedor,
pedido.IdCliente,
pedido.Cliente,
SUM(pdetalle.Cantidad*pdetalle.Precio) AS Monto
FROM
pedido
INNER JOIN pdetalle ON pedido.IdPedido = pdetalle.IdPedido
GROUP BY pedido.IdPedido ;

-- ----------------------------
-- Procedure structure for SP_pedidos
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_pedidos`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_pedidos`(
	IN IDPEDIDO2 CHAR(5),
	IN IDVENDEDOR CHAR (30),
	IN IDCLIENTE CHAR (30),
	IN FECHA DATE,
	IN VENDEDOR CHAR (30),
	IN CLIENTE CHAR (30),
	IN DESCRIPCION CHAR (30),
	IN TM BIT,
	IN FP BIT,
	IN PLAZO CHAR (30),
	IN DESCUENTO FLOAT (10, 4),
	IN IVA FLOAT (10, 4),
	IN NOTA CHAR (250),
	IN ESTADO INT
)
BEGIN
IF EXISTS(SELECT IdPedido FROM pedido WHERE IdPedido = IDPEDIDO2)
THEN 
BEGIN
#SELECT IDPEDIDO;
UPDATE pedido SET Estado = ESTADO
WHERE IdPedido = IDPEDIDO2;
END;
ELSE

BEGIN
	INSERT INTO pedido (
		IdPedido,
		IdVendedor,
		IdCliente,
		Fecha,
		Vendedor,
		Cliente,
		Descripcion,
		TM,
		FP,
		Plazo,
		Descuento,
		IVA,
		Nota,
		Estado
)
VALUES
	(	IDPEDIDO2,
		IDVENDEDOR,
		IDCLIENTE,
		FECHA,
		VENDEDOR,
		CLIENTE,
		DESCRIPCION,
		TM,
		FP,
		PLAZO,
		DESCUENTO,
		IVA,
		NOTA,
		ESTADO);
END;
END IF ;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for usuarios
-- ----------------------------
DROP PROCEDURE IF EXISTS `usuarios`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `usuarios`(IN ID CHAR(20),
                IN VENDEDOR CHAR(30),
                IN SPCLIENTE CHAR(30),
                IN NOMBRE CHAR(30),
                IN LATITUD CHAR(30),
                IN LONGITUD CHAR(30))
BEGIN
                IF EXISTS(SELECT CLIENTE FROM clientes WHERE CLIENTE=SPCLIENTE) THEN
                BEGIN
                                               UPDATE clientes SET LATI=LATITUD,LNGI=LONGITUD WHERE CLIENTE = SPCLIENTE;
                END;
                ELSE
                BEGIN
                               INSERT INTO clientes (IdVendedor,VENDEDOR,CLIENTE,NOMBRE,LATI,LNGI) 
                               VALUES(ID,VENDEDOR,SPCLIENTE,NOMBRE,LATITUD,LONGITUD);       
                END; END IF;
END
;;
DELIMITER ;
