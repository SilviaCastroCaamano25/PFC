-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: panaderia_pfc
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tcategoria`
--

DROP TABLE IF EXISTS `tcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcategoria`
--

LOCK TABLES `tcategoria` WRITE;
/*!40000 ALTER TABLE `tcategoria` DISABLE KEYS */;
INSERT INTO `tcategoria` VALUES (1,'Panes','panes.jpg'),(2,'Empanadas','empanadas.jpg'),(3,'Bollería salada','salados.jpg'),(4,'Bollería dulce','dulces.jpg'),(5,'Chocolates y bombones','chocolates.jpg'),(6,'Navideños y festivos','festivos.jpg');
/*!40000 ALTER TABLE `tcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tcomentarios`
--

DROP TABLE IF EXISTS `tcomentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcomentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcomentarios`
--

LOCK TABLES `tcomentarios` WRITE;
/*!40000 ALTER TABLE `tcomentarios` DISABLE KEYS */;
INSERT INTO `tcomentarios` VALUES (1,'Una buena panadería, un buen servicio 10/10.',1),(2,'Hacen muy buenos pasteles.',2),(3,'La empanada de bonito tiene demasiada cebolla.',3),(4,'Las napolitanas un poco sosas.',4);
/*!40000 ALTER TABLE `tcomentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tproductos`
--

DROP TABLE IF EXISTS `tproductos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tproductos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `producto` varchar(250) NOT NULL,
  `precio` double(9,2) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `ingredientes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tproductos`
--

LOCK TABLES `tproductos` WRITE;
/*!40000 ALTER TABLE `tproductos` DISABLE KEYS */;
INSERT INTO `tproductos` VALUES (1,1,'Bagels',4.50,'panes_bagles.jpg','Harina de trigo 450g.,\r\nAgua tibia 125ml.,\r\nLeche tibia 125ml.,\r\nLevadura fresca de panadería 15g.,\r\nSal 8g.,\r\nAzúcar 5g.,\r\nClara de huevo 1.,\r\nMantequilla derretida 30g.,\r\nSemillas de sésamo.,\r\nAceite de girasol.,\r\nYema de huevo 1.,\r\nLeche 5ml.'),(2,1,'Pan con Cúrcuma',4.90,'panes_panconcurcuma.jpg','150ml de Agua tibia.,\r\n150ml de Leche tibia.,\r\nUna pizca de Sal.,\r\n30g de Pipas de Calabaza (opcionales).,\r\n500g de Harina de Panadería o Harina de Fuerza.,\r\n10g (1 cucharadita) de Cúrcuma.,\r\n1 cucharadita de Azúcar.,\r\n5.5g de Levadura de Panadero.'),(3,1,'Pan de granada',6.90,'panes_pandegranada.jpg','50g de Pipas de girasol.,\r\n1 Granada pequeña.,\r\n100ml de Agua templada.,\r\n20g de Levadura fresca de panadero.,\r\n250g de Harina de trigo.,\r\n50g de Azúcar.,\r\n50g de Nata.,\r\n1 Huevo.,\r\n1 c/c de Sal.'),(4,1,'Pan de leche',3.00,'panes_pandeleche.jpg','125g Leche.,\r\n50g Azúcar.,\r\n25g Aceite de oliva Virgen extra.,\r\n1 Huevo.,\r\n1 cucharadita de Vainilla Líquida.,\r\n15g Levadura fresca.,\r\n300g Harina de fuerza.,\r\n1 Pizca de sal.'),(5,1,'Pan francés',4.00,'panes_panfrances.jpg','500g de Harina de fuerza.,\r\n335ml de Agua templada.,\r\n5g de Levadura Seca de Panadería.,\r\n10g de Sal.,\r\n1 cucharada sopera de Aceite de Oliva.'),(6,2,'Empanada de bonito',11.50,'empanadas_empanadadebonito.jpg','780g Harina de fuerza.,\r\n180ml Aceite de oliva virgen extra.,\r\n200ml Agua.,\r\n14g Sal.,\r\n21g Levadura fresca de panadería.,\r\n180ml Aceite de oliva.,\r\n600g Cebolla.,\r\n1 Pimiento rojo.,\r\n1 Pimiento verde.,\r\n300g Bonito del Norte en conserva.,\r\n250g Salsa de tomate.,\r\n1 Huevos.,\r\n15ml Leche.'),(7,2,'Empanada de carne',11.50,'empanadas_empanadadecarne.jpg','500g Masa de Empanada Gallega.,\r\n500g Carne de Ternera Gallega (aguja a ser posible).,\r\n1 Chorizo Gallego.,\r\n1 Cebolla Grande.,\r\n3 Dientes de Ajo.,\r\n1 Pimiento Rojo.,\r\n180ml Aceite de Oliva Virgen extra.,\r\nSal.,\r\n1 Huevo.'),(8,2,'Empanada de espinacas y queso de cabra',14.90,'empanadas_empanadadeespinacasyquesodecabra.jpg','2 Láminas de Hojaldre.,\r\n300g de Espinacas.,\r\n4 Chalotas.,\r\n2 Dientes de Ajo.,\r\n2 Huevos duros.,\r\n100g de Queso de Cabra.,\r\nPiñones.,\r\n1 Huevo.,\r\nAceite de oliva.'),(9,2,'Empanada de pollo',11.00,'empanadas_empanadadepollo.jpg','2 Láminas de masa para empanada.,\r\n500g de Pollo desmenuzado.,\r\n300g de Tomate Frito (salsa de tomate).,\r\n1 Pimiento rojo.,\r\n1 Cebolla Mediana.,\r\n3 Huevos.,\r\n5 cucharadas de Aceite de Oliva.,\r\nSal Fina.,\r\nPimienta Negra Molida.'),(10,2,'Empanada de zorza',14.90,'empanadas_empanadadezorza.jpg','500g Carne Fresca Magra de Cerdo.,\r\n3 Dientes de Ajo.,\r\nSal Semigruesa.,\r\n5g Pimentón Dulce de la Vera.,\r\n3g Pimentón Picante de la Vera.,\r\n1 cucharadita de Orégano seco.,\r\nAceite de Oliva Virgen extra.'),(11,3,'Malla 4 quesos',5.70,'salados_malla4quesos.jpg','Rábano negro.,\r\nMedia manzana.,\r\nMedio pomelo rosa.,\r\nMedia loncha de salmón ahumado.,\r\nMedia loncha de bacalao ahumado.,\r\nCebollino.,\r\nAceite de oliva.,\r\nJugo de limón.'),(12,3,'Napolitana de Jamón y Queso',3.50,'salados_napolitanajpg.jpg','1 Plancha de Hojaldre.,\r\n3 Lonchas de Jamón York.,\r\n3 Lonchas de Queso.,\r\n1 Yema de Huevo.,\r\nQueso Rallado.'),(13,3,'Palitos',2.50,'salados_palitos.jpg','300g Harina de Trigo.,\r\n125ml Agua.,\r\n50g Aceite de Oliva Virgen extra.,\r\n5g Sal.,\r\nSésamo.,\r\n7g Levadura Fresca.'),(14,4,'Croissant',3.90,'dulces_croissant.jpg','500g Harina de fuerza.,\r\n75g Azúcar.,\r\n2 Huevo.,\r\n250g Mantequilla.,\r\n25g Levadura prensada.,\r\n5g Sal.,\r\n75ml Agua.,\r\n75ml Leche entera.'),(15,4,'Donut',3.50,'dulces_donut.jpg','500g Harina de Fuerza.,\r\n75g Azúcar.,\r\n50g Mantequilla.,\r\n100ml Agua.,\r\n150ml Leche.,\r\n25g Levadura Fresca.,\r\n1 cucharadita de Esencia de Vainilla.,\r\n1 Huevo.,\r\nUna pizca de Sal.,\r\n125g Azúcar glas.'),(16,4,'Napolitana de Chocolate',4.90,'dulces_napolitana.jpg','500g Harina.,\r\n50g Azúcar.,\r\n10g Sal.,\r\n15g Levadura de panadero fresca.,\r\n150ml Leche.,\r\n150ml Agua.,\r\n250g Mantequilla.,\r\n24 bastones de Chocolate.,\r\n1 Huevo.'),(17,5,'Bombón de Canela',0.50,'chocolates_bomboncanela.jpg','200g de Chocolate Negro.,\r\n80g Arándanos Deshidratados.,\r\n80g Nata.,\r\n1/2 cucharadita de Canela.,\r\n100g de cobertura de Chocolate Negro.,\r\n100 g de cobertura de Chocolate con Leche\r\nArándanos para decorar.\r\n'),(18,5,'Bombón de Crema Catalana',0.50,'chocolates_bomboncremacatalana.jpg','312g Azúcar.,\r\n125g Agua.,\r\n30g Jarabe de glucosa DE44.,\r\n40g Azúcar invertido.,\r\n37g Leche evaporada (sin azúcar).,\r\n50g Yema de huevo pasteurizada.,\r\n312g Almendra en polvo.,\r\n3g Ralladura piel de limón.,\r\n1g Sal.'),(19,5,'Bombón de Té Verde',0.50,'chocolates_bombonteverde.jpg','1/2 Tableta de Chocolate Negro de cobertura.,\r\n130ml Té Verde.,\r\n3 láminas de gelatina neutra.,\r\nEdulcorante.'),(20,5,'Bombón de Trufa con Frambuesa',0.50,'chocolates_bombontrufaframbuesa.jpg','200g Chocolate Negro.,\r\n50g Chocolate blanco.,\r\n100g Leche Condensada.,\r\n25g Mantequilla.,\r\nPasta de frambuesa.'),(21,6,'Galletas',3.00,'festivos_galletas.jpg','500g Harina.,\r\n2 cucharaditas de Jengibre Molido.,\r\n2 cucharaditas de Canela Molida.,\r\n1/4 cucharadita de Clavo Molido.,\r\n3/4 cucharadita de Bicarbonato de Sodio.,\r\n225g Mantequilla.,\r\n200g Azúcar Moreno.,\r\n1 Huevo Grande.,\r\n170g Miel.'),(22,6,'Panettone',4.50,'festivos_panettone.jpg','100g Leche Entera.,\r\n30g Levadura Fresca de Panadero.,\r\n3 Huevos.,\r\n550g Harina de Fuerza.,\r\n120g Azúcar.,\r\n1/2 cucharadita de Sal.,\r\n160g Mantequilla.,\r\n80ml Agua.,\r\nRalladura de Limón y una Naranja.,\r\n100g Frutas Escarchadas.,\r\n75g Uvas Pasas.'),(23,6,'Roscón de Reyes',5.90,'festivos_roscon.jpg','650g Harina de Fuerza.,\r\n250ml Leche.,\r\n25-30g Levadura Fresca.,\r\n120g Azúcar.,\r\n120g Mantequilla.,\r\n2 Huevos y 1 Yema.,\r\n10g Sal.,\r\n2 y 1/2 cucharadas de Agua de Azahar.,\r\nPiel rallada de 1 limón grande y 1 naranja.,\r\nFrutas escarchadas.,\r\nAzúcar.,\r\n1 Huevo Batido.,\r\nUna naranja.,\r\nFiguritas horneables.'),(24,6,'Tronco de Chocolate',4.50,'festivos_tronco.jpg','4 Huevos.,\r\n90g Azúcar.,\r\n120g Harina.,\r\n1 cucharadita de Levadura en Polvo.,\r\n200g de Turrón Blando.,\r\n200ml Nata Líquida.,\r\n3 Hojas de Gelatina.,\r\n150g Chocolate Fondant.,\r\n40ml Agua.,\r\n40g Mantequilla.,\r\nAzúcar Glas.');
/*!40000 ALTER TABLE `tproductos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tusuarios`
--

DROP TABLE IF EXISTS `tusuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tusuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido1` varchar(250) NOT NULL,
  `apellido2` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contrasenha` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tusuarios`
--

LOCK TABLES `tusuarios` WRITE;
/*!40000 ALTER TABLE `tusuarios` DISABLE KEYS */;
INSERT INTO `tusuarios` VALUES (1,'scastroc','Silvia','Castro','Caamaño','scastroc@gmail.com','fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe'),(2,'saradd','Sara','Docampo','Darriba','saradd@gmail.com','fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe'),(3,'diegocc','Diego','Ciguentes','Costoya','diegocc@gmail.com','fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe'),(4,'juanmg','Juan','Montoya','García','juanmg@gmail.com','e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7');
/*!40000 ALTER TABLE `tusuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vcategoria_producto`
--

DROP TABLE IF EXISTS `vcategoria_producto`;
/*!50001 DROP VIEW IF EXISTS `vcategoria_producto`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vcategoria_producto` (
  `id` tinyint NOT NULL,
  `categoria_id` tinyint NOT NULL,
  `categoria` tinyint NOT NULL,
  `producto` tinyint NOT NULL,
  `precio` tinyint NOT NULL,
  `foto` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vcategoria_producto_ingrediente`
--

DROP TABLE IF EXISTS `vcategoria_producto_ingrediente`;
/*!50001 DROP VIEW IF EXISTS `vcategoria_producto_ingrediente`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vcategoria_producto_ingrediente` (
  `id` tinyint NOT NULL,
  `categoria_id` tinyint NOT NULL,
  `categoria` tinyint NOT NULL,
  `producto` tinyint NOT NULL,
  `precio` tinyint NOT NULL,
  `foto` tinyint NOT NULL,
  `ingredientes` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vcomentarios_usuarios`
--

DROP TABLE IF EXISTS `vcomentarios_usuarios`;
/*!50001 DROP VIEW IF EXISTS `vcomentarios_usuarios`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vcomentarios_usuarios` (
  `id_comentario` tinyint NOT NULL,
  `comentario` tinyint NOT NULL,
  `usuario` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vcategoria_producto`
--

/*!50001 DROP TABLE IF EXISTS `vcategoria_producto`*/;
/*!50001 DROP VIEW IF EXISTS `vcategoria_producto`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vcategoria_producto` AS select `tproductos`.`id` AS `id`,`tproductos`.`categoria_id` AS `categoria_id`,`tcategoria`.`categoria` AS `categoria`,`tproductos`.`producto` AS `producto`,`tproductos`.`precio` AS `precio`,`tproductos`.`foto` AS `foto` from (`tcategoria` join `tproductos` on(`tcategoria`.`id` = `tproductos`.`categoria_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vcategoria_producto_ingrediente`
--

/*!50001 DROP TABLE IF EXISTS `vcategoria_producto_ingrediente`*/;
/*!50001 DROP VIEW IF EXISTS `vcategoria_producto_ingrediente`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vcategoria_producto_ingrediente` AS select `tproductos`.`id` AS `id`,`tproductos`.`categoria_id` AS `categoria_id`,`tcategoria`.`categoria` AS `categoria`,`tproductos`.`producto` AS `producto`,`tproductos`.`precio` AS `precio`,`tproductos`.`foto` AS `foto`,`tproductos`.`ingredientes` AS `ingredientes` from (`tcategoria` join `tproductos` on(`tcategoria`.`id` = `tproductos`.`categoria_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vcomentarios_usuarios`
--

/*!50001 DROP TABLE IF EXISTS `vcomentarios_usuarios`*/;
/*!50001 DROP VIEW IF EXISTS `vcomentarios_usuarios`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vcomentarios_usuarios` AS select `tcomentarios`.`id` AS `id_comentario`,`tcomentarios`.`comentario` AS `comentario`,`tusuarios`.`usuario` AS `usuario` from (`tcomentarios` join `tusuarios` on(`tcomentarios`.`id_usuario` = `tusuarios`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19 23:17:44
