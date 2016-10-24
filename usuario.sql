-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2016 a las 17:16:47
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `histologia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` int(20) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `Password` varchar(256) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL,
  `Tipo` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `Nombre`, `Apellido`, `Password`, `Email`, `Tipo`) VALUES
(5036787, 'Natalia', 'Velayos', '0', 'pincr@gmail.com', 0),
(5038544, 'Cristina', 'Pérez', '0', 'creduarsa@hotmail.com', 0),
(5042008, 'Mónica', 'Diego', '0', 'monicatito_alsa@hotmail.es', 0),
(5062544, 'María', 'Molinero', '0', 'mariiiappe@hotmail.es', 0),
(5063999, 'María', 'Bárcena ', '0', 'pild.f.n.b@hotmail.com', 0),
(5076549, 'Emma', 'Sánchez', '0', 'lecris.l@hotmail.com', 0),
(5082350, 'María', 'González', '0', 'maria_mcril@hotmail.com', 0),
(5084859, 'Patricia', 'Núñez', '0', 'patricblad@hotmail.com', 0),
(5090534, 'Julieth', 'Alcaide', '0', 'yulfem@gmail.com', 0),
(5092275, 'Paloma', 'Jiménez ', '0', 'palomitjosk@hotmail.com', 0),
(5093988, 'Ana', 'Navarro', '0', 'anita_8letiile@hotmail.com', 0),
(5095348, 'Iris', 'Sánchez', '0', 'wiscarpi@hotmail.com', 0),
(5113989, 'Marta', 'Pérez', '0', 'marvicj@gmail.com', 0),
(5114311, 'María', 'Pato', '0', 'catalsebac@gmail.com', 0),
(5122976, 'Leticia', 'Del', '0', 'leticd.alamoand@gmail.com', 0),
(5135770, 'Blanca', 'Gregorio', '0', 'blanksr.lj@yahoo.es', 0),
(5145783, 'Ruben', 'San Segundo', '0', 'rbnsanse@gmail.com', 2),
(5181209, 'Natalia', 'Rumbero', '0', 'natijjcojj.@hotmail.com', 0),
(5188947, 'Bárbara', 'Serrano', '0', 'baelenitaa@gmail.com', 0),
(5194726, 'Laura', 'Jiménez ', '0', 'lala25_meri@hotmail.com', 0),
(5197050, 'Marija', 'Salas', '0', 'maria_fana@hotmail.com', 0),
(5197959, 'Cristina', 'Otero', '0', 'crimenchu-fe@gmail.com', 0),
(5199608, 'Raquel', 'Merino', '0', 'raqucarl@hotmail.com', 0),
(5200900, 'Ángela', 'Tizón', '0', 'palomitjuangoma@hotmail.com', 0),
(5202925, 'Miriam', 'Torras', '0', 'mileyrekaraq@terra.es', 0),
(5227016, 'Alba', 'Castaño', '0', 'shalsequcel@gmail.com', 0),
(5229280, 'Bárbara', 'Ibrahim', '0', 'barianjtem@hotmail.com', 0),
(5243144, 'Marta', 'González', '0', 'marandre@hotmail.com', 0),
(5245108, 'Alba', 'Criado ', '0', 'smile._pati_tgu@hotmail.com', 0),
(5247677, 'Carmen', 'Alonso', '0', 'menchu-jecl@hotmail.com', 0),
(5266386, 'Florencia', 'Garrudo', '0', 'fldmjb@hotmail.com', 0),
(5276787, 'Tamara', 'Martín ', '0', 'tamsandragk@hotmail.com', 0),
(5277660, 'Sandra', 'Díaz', '0', 'samlemmc@hotmail.com', 0),
(5283714, 'Miriam', 'Rivera', '0', 'mirihasasfs@gmail.com', 0),
(5306571, 'Esther', 'Molina', '0', 'divcar@hotmail.com', 0),
(5316998, 'Bárbara', 'Muñoz', '0', 'barbsanro@hotmail.com', 0),
(5331756, 'Ana', 'Garrido ', '0', 'anajesusis@yahoo.es', 0),
(5334494, 'María', 'Muñoz', '0', 'mpasergi@hotmail.com', 0),
(5346788, 'Iris', 'Rodríguez ', '0', 'wisi_immfea@hotmail.com', 0),
(5356882, 'Miriam', 'Sánchez ', '0', 'mimialex.tr@hotmail.com', 0),
(5364699, 'Julia', 'Espinosa', '0', 'jumery@hotmail.com', 0),
(5380545, 'Rocío', 'Ramos', '0', 'rociomikybav@hotmail.com', 0),
(5381627, 'Ana', 'Sánchez', '0', 'anita_8rebeca_nov@hotmail.com', 0),
(5384472, 'Laura', 'Ramos', '0', 'l.majose-gas@hotmail.com', 0),
(5396457, 'Coral', 'García', '0', 'coralitjropambe@hotmail.com', 0),
(5405558, 'Zaida', 'Villahermosa', '0', 'zaigualmt@outlook.com', 0),
(5406037, 'Patricia', 'Lamus', '0', 'patri_luis.so@icam.es', 0),
(5413432, 'Sandra', 'Pérez', '0', 'sandramap@gmail.com', 0),
(5415619, 'Patricia', 'Pérez', '0', 'oh_mysamib@hotmail.com', 0),
(5424388, 'María', 'Domínguez', '0', 'papasa@gmail.com', 0),
(5424614, 'Marija', 'López', '0', 'maria_sm@hotmail.com', 0),
(5430593, 'Brenda', 'Vera', '0', 'karafaelmo@gmail.com', 0),
(5452272, 'Esther', 'Casals', '0', 'divivipealv@gmail.com', 0),
(5460626, 'Julián', 'Gómez', '0', 'julianjabes@outlook.com', 0),
(5461000, 'Sonia', 'Ozores', '0', 'amyxoetcar@hotmail.com', 0),
(5463432, 'Laura', 'Sánchez', '0', 'laubednialpa@gmail.com', 0),
(5480834, 'Dolores', 'Domínguez', '0', 'thosevi@hotmail.com', 0),
(5492048, 'Alicia', 'Ortiz', '0', 'aliciauale@gmail.com', 0),
(5494242, 'Marta', 'Bonilla', '0', 'mqsluasamarz@hotmail.com', 0),
(5517411, 'Irene', 'Gil', '0', 'ipozojamyxopjos@arrakis.es', 0),
(5519386, 'Rocío', 'Rayo', '0', 'rocmgc2@hotmail.com', 0),
(5521323, 'Jennifer', 'García', '0', 'jenl.j@live.com', 0),
(5539084, 'Julia', 'Quemada', '0', 'julrocio.r@hotmail.com', 0),
(5542916, 'Sara', 'García ', '0', 'sara_nocareva@hotmail.com', 0),
(5557888, 'Saray', 'Martín ', '0', 'sarmiguel_s@hotmail.com', 0),
(5581903, 'Sonia', 'Alarcón', '0', 'amynurilok@gmail.com', 0),
(5585308, 'Elisa', 'Bustamante', '0', 'elisa_gsup@hotmail.com', 0),
(5592363, 'Paula', 'Cañal', '0', 'paula_segucla@hotmail.com', 0),
(5605265, 'Lara', 'Fernández', '0', 'lavictor1a@hotmail.com', 0),
(5606750, 'Natalia', 'Dávila', '0', 'nalauritapq@aol.com', 0),
(5614749, 'María', 'Bartolomé', '0', 'pab9maalb@gmail.com', 0),
(5620206, 'Natalia', 'Moya', '0', 'natmqslj@gmail.com', 0),
(5639283, 'Jennifer', 'Lago', '0', 'jeny-gebolr@msn.com', 0),
(5663112, 'Desirée', 'Esteban', '0', 'd.asamarades@hotmail.com', 0),
(5672261, 'Bárbara', 'Grande', '0', 'barbaedu@gmail.com', 0),
(5681162, 'Ana', 'Fernández', '0', 'anaanitavp@hotmail.com', 0),
(5691358, 'Elisabeth', 'Torras', '0', 'elyy.g1agar@nvr-edificios.com', 0),
(5691483, 'Patricia', 'Fernández', '0', 'patbusto@gmail.com', 0),
(5699043, 'Miriam', 'Cruz', '0', 'mimigogalejage@hotmail.com', 0),
(5700152, 'Nuria', 'Baselga', '0', 'petirojsa@hotmail.com', 0),
(5701553, 'Sandra', 'López', '0', 'sanaceandi_a@gmail.com', 0),
(5706379, 'Carla', 'Sánchez', '0', 'karlisafh@gmail.com', 0),
(5707197, 'Leticia', 'González', '0', 'leti_malmueg@gmail.com', 0),
(5715875, 'Blanca', 'Cruz', '0', 'blancafepab@gmail.com', 0),
(5721105, 'María', 'Fondo', '0', 'malarjpanesvm@hotmail.com', 0),
(5731402, 'Marta', 'Lara', '0', 'mmccragu@telefonica.net', 0),
(5733090, 'María', 'Ramos', '0', 'madmamigocr@hotmail.com', 0),
(5737019, 'Miriam', 'Wasmer', '0', 'mimigognua.@hotmail.com', 0),
(5739248, 'María', 'Álvarez', '0', 'carmemlagoelik@hotmail.com', 0),
(5778450, 'Sara', 'Casanova', '0', 'sara_ljabj@hotmail.com', 0),
(5779295, 'Alba', 'Prudencio ', '0', 'almara4miguelal@hotmail.com', 0),
(5800443, 'Elena', 'Espeso', '0', 'elenicrhel@gmail.com', 0),
(5806314, 'Alba', 'León', '0', 'smalfon1mar@hotmail.com', 0),
(5814581, 'Sara', 'Reina', '0', 'sfpilarfr@hotmail.com', 0),
(5823230, 'Nuria', 'Sánchez', '0', 'nuriavzoek993adr@hotmail.com', 0),
(5832306, 'Iris', 'Álvarez ', '0', 'wisi_imal@hotmail.com', 0),
(5851903, 'Tamara', 'Panes', '0', 't.yusriki.s@gmail.com', 0),
(5857921, 'Ruth', 'López', '0', 'rutpabalf@hotmail.com', 0),
(5861462, 'Sara', 'Moreno', '0', 'sfsarabazo@hotmail.com', 0),
(5871845, 'Bárbara', 'Pérez', '0', 'barbarablanka_@gmail.com', 0),
(5872666, 'Beatriz', 'Añón', '0', 'bgermigubel@hotmail.com', 0),
(5882617, 'Bárbara', 'Jiménez ', '0', 'babdebenim@hotmail.com', 0),
(5885888, 'Marta', 'Pérez', '0', 'mar_ttito_@hotmail.com', 0),
(5894682, 'Paula', 'Molina', '0', 'p.mari@gmail.com', 0),
(5894740, 'Patricia', 'Martín', '0', 'patrifhcop@hotmail.com', 0),
(5897059, 'Carla', 'Diz', '0', 'kacarlot@hotmail.com', 0),
(5897265, 'Marta', 'Merani', '0', 'martamjohn-asm@hotmail.com', 0),
(5899301, 'Miriam', 'Núñez', '0', 'mihelemi@hotmail.es', 0),
(5900192, 'Irene', 'Jiménez', '0', 'irene.dardam@hotmail.com', 0),
(5921677, 'Saray', 'Pizarro ', '0', 'saraipio@gmail.com', 0),
(5923485, 'Amelia', 'Luján', '0', 'amelikerm@hotmail.com', 0),
(5928536, 'Laura', 'Torras', '0', 'lauraguericnav@hotmail.com', 0),
(5936978, 'Isabella', 'González', '0', 'isaalvame@live.com', 0),
(5938319, 'Irene', 'García', '0', 'irmak@gmail.com', 0),
(5945747, 'Marta', 'Valero', '0', 'sanchpean@hotmail.com', 0),
(5951912, 'María', 'Díaz', '0', 'masama@hotmail.com', 0),
(5953688, 'Carlota', 'Bueno', '0', 'carlomaria_aa@msn.com', 0),
(5964985, 'Susana', 'Gómez', '0', '1asa@hotmail.es', 0),
(5966510, 'Marta', 'Pérez', '0', 'martfatimitl@gmail.com', 0),
(5968219, 'Patricia', 'Suarez', '0', 'patrmaria_ch@hotmail.com', 0),
(5971530, 'Carla', 'Muñoz', '0', 'karlsergin@nvr-edificios.com', 0),
(5973839, 'Alejandra', 'Francisco', '0', 'alegalaubeda@hotmail.com', 0),
(5983285, 'Estefanía', 'Estrada', '0', 'fannmartuxal@hotmail.com', 0),
(5992988, 'Natalia', 'Kostova', '0', 'nsmiriamosc@gmail.com', 0),
(7007226, 'Hector', 'Fernandez', '0', 'groal_1992@hotmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`DNI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
