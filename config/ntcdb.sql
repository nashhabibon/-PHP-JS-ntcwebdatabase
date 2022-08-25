-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 07:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `userId` int(11) NOT NULL,
  `FullName` varchar(150) NOT NULL,
  `Contact` int(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `AccType` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`userId`, `FullName`, `Contact`, `Email`, `Username`, `Password`, `AccType`) VALUES
(27, 'Nashrudin Habibon', 9256, 'nash@gmail.com', 'nash', '12345', 'Admin'),
(42, 'userdata', 888, 'userdata@gmail.com', 'userdata', '12345', 'Engineer'),
(46, 'it encoder', 999, 'encoder2@gmail.com', 'encoder', '12345', 'Encoder');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrgy`
--

CREATE TABLE `tblbrgy` (
  `BrgyId` int(11) NOT NULL,
  `CityId` int(11) NOT NULL,
  `ProvId` int(11) NOT NULL,
  `brgy` varchar(125) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbrgy`
--

INSERT INTO `tblbrgy` (`BrgyId`, `CityId`, `ProvId`, `brgy`) VALUES
(1, 1, 1, '1A'),
(2, 1, 1, '2A'),
(3, 1, 1, '3A'),
(4, 1, 1, '4A'),
(5, 1, 1, '5A'),
(6, 1, 1, '6A'),
(7, 1, 1, '7A'),
(8, 1, 1, '8A'),
(9, 1, 1, '9A'),
(10, 1, 1, '10A'),
(11, 1, 1, '11B'),
(12, 1, 1, '12B'),
(13, 1, 1, '13B'),
(14, 1, 1, '14B'),
(15, 1, 1, '15B'),
(16, 1, 1, '16B'),
(17, 1, 1, '17B'),
(18, 1, 1, '18B'),
(19, 1, 1, '19B'),
(20, 1, 1, '20B'),
(21, 1, 1, '21C'),
(22, 1, 1, '22C'),
(23, 1, 1, '23C'),
(24, 1, 1, '24C'),
(25, 1, 1, '25C'),
(26, 1, 1, '26C'),
(27, 1, 1, '27C'),
(28, 1, 1, '28C'),
(29, 1, 1, '29C'),
(30, 1, 1, '30C'),
(31, 1, 1, '31D'),
(32, 1, 1, '32D'),
(33, 1, 1, '33D'),
(34, 1, 1, '34D'),
(35, 1, 1, '35D'),
(36, 1, 1, '36D'),
(37, 1, 1, '37D'),
(38, 1, 1, '38D'),
(39, 1, 1, '39D'),
(40, 1, 1, '40D'),
(41, 1, 1, 'BAGO APLAYA'),
(42, 1, 1, 'BAGO GALLERA'),
(43, 1, 1, 'BALIOK'),
(44, 1, 1, 'BUCANA'),
(45, 1, 1, 'CATALUNAN GRANDE'),
(46, 1, 1, 'CATALUNAN PEQUENO'),
(47, 1, 1, 'DUMOY'),
(48, 1, 1, 'LANGUB'),
(49, 1, 1, 'MAA'),
(50, 1, 1, 'MAGTUOD'),
(51, 1, 1, 'MATINA APLAYA'),
(52, 1, 1, 'MATINA CROSSING'),
(53, 1, 1, 'MATINA PANGI'),
(54, 1, 1, 'TALOMO PROPER'),
(55, 1, 1, 'AGDAO PROPER'),
(56, 1, 1, 'WILFREDO AQUINO'),
(57, 1, 1, 'CENTRO'),
(58, 1, 1, 'LAPU-LAPU'),
(59, 1, 1, 'LEON GARCIA'),
(60, 1, 1, 'TOMAS MONTEVERDE'),
(61, 1, 1, 'PACIANO BANGOY'),
(62, 1, 1, 'RAFAEL CASTILLO'),
(63, 1, 1, 'SAN ANTONIO'),
(64, 1, 1, 'UBALDE'),
(65, 1, 1, 'VICENTE DUTERTE'),
(66, 1, 1, 'ACACIA'),
(67, 1, 1, 'ANGLIONGTO'),
(68, 1, 1, 'BUHANGIN PROPER'),
(69, 1, 1, 'CABANTIAN'),
(70, 1, 1, 'CALLAWA'),
(71, 1, 1, 'COMMUNAL'),
(72, 1, 1, 'VICENTE HIZON'),
(73, 1, 1, 'INDANGAN'),
(74, 1, 1, 'MANDUG'),
(75, 1, 1, 'PAMPANGA'),
(76, 1, 1, 'SASA'),
(77, 1, 1, 'TIGATTO'),
(78, 1, 1, 'WAAN'),
(79, 1, 1, 'BUNAWAN PROPER'),
(80, 1, 1, 'GATUNGAN'),
(81, 1, 1, 'ILANG'),
(82, 1, 1, 'LASANG'),
(83, 1, 1, 'MAHAYAG'),
(84, 1, 1, 'MUDIANG'),
(85, 1, 1, 'PANACAN'),
(86, 1, 1, 'SAN ISIDRO'),
(87, 1, 1, 'TIBUNGCO'),
(88, 1, 1, 'COLOSAS'),
(89, 1, 1, 'FATIMA'),
(90, 1, 1, 'LUMIAD'),
(91, 1, 1, 'MABUHAY'),
(92, 1, 1, 'MALABOG'),
(93, 1, 1, 'MAPULA'),
(94, 1, 1, 'PANALUM'),
(95, 1, 1, 'PANDAITAN'),
(96, 1, 1, 'PAQUIBATO PROPER'),
(97, 1, 1, 'PARADISE EMBAC'),
(98, 1, 1, 'SALAPAWAN'),
(99, 1, 1, 'SUMIMAO'),
(100, 1, 1, 'TAPAK'),
(101, 1, 1, 'BAGUIO PROPER'),
(102, 1, 1, 'CADALIAN'),
(103, 1, 1, 'CARMEN'),
(104, 1, 1, 'GUMALANG'),
(105, 1, 1, 'MALAGOS'),
(106, 1, 1, 'TAMBOBONG'),
(107, 1, 1, 'TAWAN-TAWAN'),
(108, 1, 1, 'WINES'),
(109, 1, 1, 'BIAO JOAQUIN'),
(110, 1, 1, 'CALINAN POBLACION'),
(111, 1, 1, 'CAWAYAN'),
(112, 1, 1, 'DACUDAO'),
(113, 1, 1, 'DALAGDAG'),
(114, 1, 1, 'DOMINGA'),
(115, 1, 1, 'INAYANGAN'),
(116, 1, 1, 'LACSON'),
(117, 1, 1, 'LAMANAN'),
(118, 1, 1, 'LAMPIANAO'),
(119, 1, 1, 'MEGKAWAYAN'),
(120, 1, 1, 'PANGYAN'),
(121, 1, 1, 'RIVERSIDE'),
(122, 1, 1, 'SALOY'),
(123, 1, 1, 'SIRIB'),
(124, 1, 1, 'SUBASTA'),
(125, 1, 1, 'TALOMO RIVER'),
(126, 1, 1, 'TAMAYONG'),
(127, 1, 1, 'WANGAN'),
(128, 1, 1, 'BAGANIHAN'),
(129, 1, 1, 'BANTOL'),
(130, 1, 1, 'BUDA'),
(131, 1, 1, 'DALAG'),
(132, 1, 1, 'DATU SALUMAY'),
(133, 1, 1, 'GUMITAN'),
(134, 1, 1, 'MAGSAYSAY'),
(135, 1, 1, 'MALAMBA'),
(136, 1, 1, 'MARILOG PROPER'),
(137, 1, 1, 'SALAYSAY'),
(138, 1, 1, 'SUAWAN'),
(139, 1, 1, 'TAMUGAN'),
(140, 1, 1, 'ALAMBRE'),
(141, 1, 1, 'ATAN-AWE'),
(142, 1, 1, 'BANGKAS HEIGHTS'),
(143, 1, 1, 'BARACATAN'),
(144, 1, 1, 'BATO'),
(145, 1, 1, 'BAYABAS'),
(146, 1, 1, 'BINUGAO'),
(147, 1, 1, 'CAMANSI'),
(148, 1, 1, 'CATIGAN'),
(149, 1, 1, 'CROSSING BAYABAS'),
(150, 1, 1, 'DALIAO'),
(151, 1, 1, 'DALIAON PLANTATION'),
(152, 1, 1, 'EDEN'),
(153, 1, 1, 'KILATE'),
(154, 1, 1, 'LIZADA'),
(155, 1, 1, 'LUBOGAN'),
(156, 1, 1, 'MARAPANGI'),
(157, 1, 1, 'MULIG'),
(158, 1, 1, 'SIBULAN'),
(159, 1, 1, 'SIRAWAN'),
(160, 1, 1, 'TAGLUNO'),
(161, 1, 1, 'TAGURANO'),
(162, 1, 1, 'TIBULOY'),
(163, 1, 1, 'TORIL POBLACION'),
(164, 1, 1, 'TUNGKALAN'),
(165, 1, 1, 'ANGALAN'),
(166, 1, 1, 'BAGO OSHIRO'),
(167, 1, 1, 'BALENGAENG'),
(168, 1, 1, 'BIAO ESCUELA'),
(169, 1, 1, 'BIAO GUIANGA'),
(170, 1, 1, 'LOS AMIGOS'),
(171, 1, 1, 'MANAMBULAN'),
(172, 1, 1, 'MANUEL GUIANGA'),
(173, 1, 1, 'MINTAL'),
(174, 1, 1, 'MATINA BIAO'),
(175, 1, 1, 'NEW CARMEN'),
(176, 1, 1, 'NEW VALENCIA'),
(177, 1, 1, 'STO. NINO'),
(178, 1, 1, 'TACUNAN'),
(179, 1, 1, 'TAGAKPAN'),
(180, 1, 1, 'TALANDANG'),
(181, 1, 1, 'TUGBOK PROPER'),
(182, 1, 1, 'ULAS'),
(183, 2, 1, 'APLAYA'),
(184, 2, 1, 'BALABAG'),
(185, 2, 1, 'SAN JOSE (BALUTAKAY)'),
(186, 2, 1, 'BINATON'),
(187, 2, 1, 'COGON'),
(188, 2, 1, 'COLORADO'),
(189, 2, 1, 'DAWIS'),
(190, 2, 1, 'DULANGAN'),
(191, 2, 1, 'GOMA'),
(192, 2, 1, 'IGPIT'),
(193, 2, 1, 'KIAGOT'),
(194, 2, 1, 'LUNGAG'),
(195, 2, 1, 'MAHAYAHAY'),
(196, 2, 1, 'MATTI'),
(197, 2, 1, 'KAPATAGAN (RIZAL)'),
(198, 2, 1, 'RUPARAN'),
(199, 2, 1, 'SAN AGUSTIN'),
(200, 2, 1, 'SAN MIGUEL (ODACA)'),
(201, 2, 1, 'SAN ROQUE'),
(202, 2, 1, 'SINAWILAN'),
(203, 2, 1, 'SOONG'),
(204, 2, 1, 'TIGUMAN'),
(205, 2, 1, 'TRES DE MAYO'),
(206, 2, 1, 'ZONE 1 (POB)'),
(207, 2, 1, 'ZONE 2 (POB)'),
(208, 2, 1, 'ZONE 3 (POB)'),
(209, 3, 1, 'ALEGRE'),
(210, 3, 1, 'ALTA VISTA'),
(211, 3, 1, 'ANONANG'),
(212, 3, 1, 'BITAUG'),
(213, 3, 1, 'BONIFACIO'),
(214, 3, 1, 'BUENAVISTA'),
(215, 3, 1, 'DARAPUAY'),
(216, 3, 1, 'DOLO (URBAN)'),
(217, 3, 1, 'EMAN'),
(218, 3, 1, 'KINUSKUSAN'),
(219, 3, 1, 'LIBERTAD'),
(220, 3, 1, 'LINAWAN'),
(221, 3, 1, 'MABUHAY'),
(222, 3, 1, 'MABUNGA'),
(223, 3, 1, 'MANAGA'),
(224, 3, 1, 'MARBER'),
(225, 3, 1, 'NEW CLARIN'),
(226, 3, 1, 'POBLACION UNO (URBAN)'),
(227, 3, 1, 'POBLACION DOS (URBAN)'),
(228, 3, 1, 'RIZAL (URBAN)'),
(229, 3, 1, 'STO. NINO'),
(230, 3, 1, 'SIBAYAN'),
(231, 3, 1, 'TINONGTONGAN'),
(232, 3, 1, 'TUBOD (URBAN)'),
(233, 3, 1, 'UNION'),
(234, 4, 1, 'APLAYA'),
(235, 4, 1, 'BALUTAKAY'),
(236, 4, 1, 'CLIB'),
(237, 4, 1, 'GUIHING'),
(238, 4, 1, 'HAGONOY CROSSING'),
(239, 4, 1, 'KIBUAYA'),
(240, 4, 1, 'LA UNION'),
(241, 4, 1, 'LANURO'),
(242, 4, 1, 'LAPULABAO'),
(243, 4, 1, 'LELING'),
(244, 4, 1, 'MAHAYAHAY'),
(245, 4, 1, 'MALABANG DAMSITE'),
(246, 4, 1, 'MALIIT DIGOS'),
(247, 4, 1, 'NEW QUEZON'),
(248, 4, 1, 'PALIGUE'),
(249, 4, 1, 'POBLACION'),
(250, 4, 1, 'SACUB'),
(251, 4, 1, 'SAN GUILLERMO'),
(252, 4, 1, 'SAN ISIDRO'),
(253, 4, 1, 'SINAWAYAN'),
(254, 4, 1, 'TOLOGAN'),
(255, 5, 1, 'ABNATE'),
(256, 5, 1, 'BAGONG NEGROS'),
(257, 5, 1, 'BAGONG SILANG'),
(258, 5, 1, 'BAGUMBAYAN'),
(259, 5, 1, 'BALASIAO'),
(260, 5, 1, 'BONIFACIO'),
(261, 5, 1, 'BUNOT'),
(262, 5, 1, 'COGON-BACACA'),
(263, 5, 1, 'DAPOK'),
(264, 5, 1, 'IHAN'),
(265, 5, 1, 'KIBONGBONG'),
(266, 5, 1, 'KIMLAWIS'),
(267, 5, 1, 'KISULAN'),
(268, 5, 1, 'LATI-AN'),
(269, 5, 1, 'MANUAL'),
(270, 5, 1, 'MARAGA-A'),
(271, 5, 1, 'MOLOPOLO'),
(272, 5, 1, 'NEW SIBONGA'),
(273, 5, 1, 'PANAGLIB'),
(274, 5, 1, 'PASIG'),
(275, 5, 1, 'POBLACION'),
(276, 5, 1, 'POCALEEL'),
(277, 5, 1, 'SAN ISIDRO'),
(278, 5, 1, 'SAN JOSE'),
(279, 5, 1, 'SAN PEDRO'),
(280, 5, 1, 'STO. NINO'),
(281, 5, 1, 'TACUB'),
(282, 5, 1, 'TACUL'),
(283, 5, 1, 'WATERFALL'),
(284, 5, 1, 'BULOL-SALO'),
(285, 6, 1, 'BACUNGAN'),
(286, 6, 1, 'BALNATE'),
(287, 6, 1, 'BARAYONG'),
(288, 6, 1, 'BLOCON'),
(289, 6, 1, 'DALAWINON'),
(290, 6, 1, 'DALUMAY'),
(291, 6, 1, 'GLAMANG'),
(292, 6, 1, 'KANAPULO'),
(293, 6, 1, 'KASUGA'),
(294, 6, 1, 'LOWER BALA'),
(295, 6, 1, 'MABINI'),
(296, 6, 1, 'MALAWANIT'),
(297, 6, 1, 'MALONGON'),
(298, 6, 1, 'NEW ILOCOS'),
(299, 6, 1, 'POBLACION'),
(300, 6, 1, 'SAN ISIDRO'),
(301, 6, 1, 'SAN MIGUEL'),
(302, 6, 1, 'TACUL'),
(303, 6, 1, 'TAGAYTAY'),
(304, 6, 1, 'UPPER BALA'),
(305, 6, 1, 'MAIBO'),
(306, 6, 1, 'NEW OPON'),
(307, 7, 1, 'BAGUMBAYAN'),
(308, 7, 1, 'BAYBAY'),
(309, 7, 1, 'BOLTON'),
(310, 7, 1, 'BULACAN'),
(311, 7, 1, 'CAPUTIAN'),
(312, 7, 1, 'IBO'),
(313, 7, 1, 'KIBLAGON'),
(314, 7, 1, 'LAPLA'),
(315, 7, 1, 'MABINI'),
(316, 7, 1, 'NEW BACLAYON'),
(317, 7, 1, 'PITU'),
(318, 7, 1, 'POBLACION'),
(319, 7, 1, 'TAGANSULE'),
(320, 7, 1, 'RIZAL (PARAME)'),
(321, 7, 1, 'SAN ISIDRO'),
(322, 8, 1, 'ASBANG'),
(323, 8, 1, 'ASINAN'),
(324, 8, 1, 'BAGUMBAYAN'),
(325, 8, 1, 'BANGKAL'),
(326, 8, 1, 'BUAS'),
(327, 8, 1, 'BURI'),
(328, 8, 1, 'CAMANCHILES'),
(329, 8, 1, 'CEBOZA'),
(330, 8, 1, 'COLONSABAK'),
(331, 8, 1, 'DONGAN-PEKONG'),
(332, 8, 1, 'KABASAGAN'),
(333, 8, 1, 'KAPOK'),
(334, 8, 1, 'KAUSWAGAN'),
(335, 8, 1, 'KIBAO'),
(336, 8, 1, 'LA SUERTE'),
(337, 8, 1, 'LANGA-AN'),
(338, 8, 1, 'LOWER MARBER'),
(339, 8, 1, 'CABLIGAN (MANAGA)'),
(340, 8, 1, 'MANGA'),
(341, 8, 1, 'NEW KATIPUNAN'),
(342, 8, 1, 'NEW MURCIA'),
(343, 8, 1, 'NEW VISAYAS'),
(344, 8, 1, 'POBLACION'),
(345, 8, 1, 'SABOY'),
(346, 8, 1, 'SAN JOSE'),
(347, 8, 1, 'SAN MIGUEL'),
(348, 8, 1, 'SAN VICENTE'),
(349, 8, 1, 'SAUB'),
(350, 8, 1, 'SINARAGAN'),
(351, 8, 1, 'SINAWILAN'),
(352, 8, 1, 'TAMLANGON'),
(353, 8, 1, 'TOWAK'),
(354, 8, 1, 'TIBONGBONG'),
(355, 9, 1, 'ALMENDRAS (POBLACION)'),
(356, 9, 1, 'DON SERGIO OSMENA, SR'),
(357, 9, 1, 'HARADA BUTAI'),
(358, 9, 1, 'LOWER KATIPUNAN'),
(359, 9, 1, 'LOWER LIMONZO'),
(360, 9, 1, 'LOWER MALINAO'),
(361, 9, 1, 'NC ORDANEZA DISTRICT (POBLACION)'),
(362, 9, 1, 'NORTHERN PALIGUE'),
(363, 9, 1, 'PALILI'),
(364, 9, 1, 'PIAPE'),
(365, 9, 1, 'PUNTA PIAPE'),
(366, 9, 1, 'QUIRINO DISTRICT (POBLACION)'),
(367, 9, 1, 'SAN ISIDRO'),
(368, 9, 1, 'SOUTHERN PALIGUE'),
(369, 9, 1, 'TULUGAN'),
(370, 9, 1, 'UPPER LIMONZO'),
(371, 9, 1, 'UPPER MALINAO'),
(372, 10, 1, 'ASTORGA'),
(373, 10, 1, 'BATO'),
(374, 10, 1, 'CORONON'),
(375, 10, 1, 'DARONG'),
(376, 10, 1, 'INAWAYAN'),
(377, 10, 1, 'JOSE RIZAL'),
(378, 10, 1, 'MATUTUNGAN'),
(379, 10, 1, 'MELILIA'),
(380, 10, 1, 'SALIDUCON'),
(381, 10, 1, 'SIBULAN'),
(382, 10, 1, 'SINORON'),
(383, 10, 1, 'TAGABULI'),
(384, 10, 1, 'TIBOLO'),
(385, 10, 1, 'TUBAN'),
(386, 10, 1, 'ZONE I (POBLACION)'),
(387, 10, 1, 'ZONE II (POBLACION)'),
(388, 10, 1, 'ZONE III (POBLACION)'),
(389, 11, 1, 'BALASINON'),
(390, 11, 1, 'BUGUIS'),
(391, 11, 1, 'CARRE'),
(392, 11, 1, 'CLIB'),
(393, 11, 1, 'HARADA BUTAI'),
(394, 11, 1, 'KATIPUNAN'),
(395, 11, 1, 'KIBLAGON'),
(396, 11, 1, 'LABON'),
(397, 11, 1, 'LAPERAS'),
(398, 11, 1, 'LAPLA'),
(399, 11, 1, 'LITOS'),
(400, 11, 1, 'LUPARAN'),
(401, 11, 1, 'MCKINLEY'),
(402, 11, 1, 'NEW CEBU'),
(403, 11, 1, 'OSMENA'),
(404, 11, 1, 'PALILI'),
(405, 11, 1, 'PARAME'),
(406, 11, 1, 'POBLACION'),
(407, 11, 1, 'ROXAS'),
(408, 11, 1, 'SOLONGVALE'),
(409, 11, 1, 'TAGOLILONG'),
(410, 11, 1, 'TALA-O'),
(411, 11, 1, 'TALAS'),
(412, 11, 1, 'TANWALANG'),
(413, 11, 1, 'WATERFALL'),
(414, 12, 2, 'A.O FLOIRENDO'),
(415, 12, 2, 'DATU ABDUL DADIA'),
(416, 12, 2, 'BUENAVISTA'),
(417, 12, 2, 'CACAO'),
(418, 12, 2, 'CANGAGOHAN'),
(419, 12, 2, 'CONSOLACION'),
(420, 12, 2, 'DAPCO'),
(421, 12, 2, 'GREDU (POBLACION)'),
(422, 12, 2, 'J.P. LAUREL'),
(423, 12, 2, 'KASILAK'),
(424, 12, 2, 'KATIPUNAN'),
(425, 12, 2, 'KATUALAN'),
(426, 12, 2, 'KAUSWAGAN'),
(427, 12, 2, 'KIOTOY'),
(428, 12, 2, 'LITTLE PANAY'),
(429, 12, 2, 'LOWER PANAGA (ROXAS)'),
(430, 12, 2, 'MABUNAO'),
(431, 12, 2, 'MADUAO'),
(432, 12, 2, 'MALATIVAS'),
(433, 12, 2, 'MANAY'),
(434, 12, 2, 'NANYO'),
(435, 12, 2, 'NEW MALAGA (DALISAY)'),
(436, 12, 2, 'NEW MALITBOG'),
(437, 12, 2, 'NEW PANDAN (POBLACION)'),
(438, 12, 2, 'NEW VISAYAS'),
(439, 12, 2, 'QUEZON'),
(440, 12, 2, 'SALVACION'),
(441, 12, 2, 'SAN FRANCISCO (POBLACION)'),
(442, 12, 2, 'SAN NICOLAS'),
(443, 12, 2, 'SAN PEDRO'),
(444, 12, 2, 'SAN ROQUE'),
(445, 12, 2, 'SAN VICENTE'),
(446, 12, 2, 'STA. CRUZ'),
(447, 12, 2, 'STO. NINO (POBLACION)'),
(448, 12, 2, 'SINDATON'),
(449, 12, 2, 'SOUTHERN DAVAO'),
(450, 12, 2, 'TAGPORE'),
(451, 12, 2, 'TIBUNGOL'),
(452, 12, 2, 'UPPER LICANAN'),
(453, 12, 2, 'WATERFALL'),
(454, 13, 2, 'ADECOR'),
(455, 13, 2, 'ANONANG'),
(456, 13, 2, 'AUMBAY'),
(457, 13, 2, 'AUNDANAO'),
(458, 13, 2, 'BALET'),
(459, 13, 2, 'BANDERA'),
(460, 13, 2, 'CALICLIC (DANGCA-AN)'),
(461, 13, 2, 'CAMUDMUD'),
(462, 13, 2, 'CATAGMAN'),
(463, 13, 2, 'CAWAG'),
(464, 13, 2, 'COGON'),
(465, 13, 2, 'COGON (TALICOD)'),
(466, 13, 2, 'DADATAN'),
(467, 13, 2, 'DEL MONTE'),
(468, 13, 2, 'GUILON'),
(469, 13, 2, 'KANAAN'),
(470, 13, 2, 'KINAWITNON'),
(471, 13, 2, 'LIBERTAD'),
(472, 13, 2, 'LIBUAK'),
(473, 13, 2, 'LICUP'),
(474, 13, 2, 'LIMAO'),
(475, 13, 2, 'LINOSUTAN'),
(476, 13, 2, 'MAMBAGO-A'),
(477, 13, 2, 'MAMBAGO-B'),
(478, 13, 2, 'MIRANDA (POBLACION)'),
(479, 13, 2, 'MONCADO (POBLACION)'),
(480, 13, 2, 'PANGUBATAN'),
(481, 13, 2, 'PENAPLATA (POBLACION)'),
(482, 13, 2, 'POBLACION (KAPUTIAN)'),
(483, 13, 2, 'SAN AGUSTIN'),
(484, 13, 2, 'SAN ANTONIO'),
(485, 13, 2, 'SAN ISIDRO (BABAK)'),
(486, 13, 2, 'SAN ISIDRO (KAPUTIAN)'),
(487, 13, 2, 'SAN JOSE (SAN LAPUZ)'),
(488, 13, 2, 'SAN MIGUEL (MAGAMOMO)'),
(489, 13, 2, 'SAN REMIGIO'),
(490, 13, 2, 'STA. CRUZ (TALICOD II)'),
(491, 13, 2, 'STO. NINO'),
(492, 13, 2, 'SION (ZION)'),
(493, 13, 2, 'TAGBAOBO'),
(494, 13, 2, 'TAGBAY'),
(495, 13, 2, 'TAGBITAN-AG'),
(496, 13, 2, 'TAGDALIAO'),
(497, 13, 2, 'TAGPOPONGAN'),
(498, 13, 2, 'TAMBO'),
(499, 13, 2, 'TORIL'),
(500, 13, 2, 'VILLARICA'),
(501, 14, 2, 'APOKON'),
(502, 14, 2, 'BINCUNGAN'),
(503, 14, 2, 'BUSAON'),
(504, 14, 2, 'CANOCOTAN'),
(505, 14, 2, 'CUAMBOGAN'),
(506, 14, 2, 'LA FILIPINA'),
(507, 14, 2, 'LIBOGANON'),
(508, 14, 2, 'MADAUM'),
(509, 14, 2, 'MAGDUM'),
(510, 14, 2, 'MAGUGPO POBLACION'),
(511, 14, 2, 'MAGUGPO EAST'),
(512, 14, 2, 'MAGUGPO NORTH'),
(513, 14, 2, 'MAGUGPO SOUTH'),
(514, 14, 2, 'MAGUGPO WEST'),
(515, 14, 2, 'MANKILAM'),
(516, 14, 2, 'NEW BALAMBAN'),
(517, 14, 2, 'NUEVA FUERZA'),
(518, 14, 2, 'PAGSABANGAN'),
(519, 14, 2, 'PANDAPAN'),
(520, 14, 2, 'SAN AGUSTIN'),
(521, 14, 2, 'SAN ISIDRO'),
(522, 14, 2, 'SAN MIGUEL (CAMP 4)'),
(523, 14, 2, 'VISAYAN VILLAGE'),
(524, 15, 2, 'BINANCIAN'),
(525, 15, 2, 'BUAN'),
(526, 15, 2, 'BUCLAD'),
(527, 15, 2, 'CABAYWA'),
(528, 15, 2, 'CAMANSA'),
(529, 15, 2, 'CAMONING'),
(530, 15, 2, 'CANATAN'),
(531, 15, 2, 'CONCEPCION'),
(532, 15, 2, 'DONA ANDREA'),
(533, 15, 2, 'MAGATOS'),
(534, 15, 2, 'NAPUNGAS'),
(535, 15, 2, 'NEW BANTAYAN'),
(536, 15, 2, 'NEW SANTIAGO'),
(537, 15, 2, 'PAMACAUN'),
(538, 15, 2, 'CAMBANOGOY (POBLACION)'),
(539, 15, 2, 'SAGAYEN'),
(540, 15, 2, 'SAN VICENTE'),
(541, 15, 2, 'STA. FILOMENA'),
(542, 15, 2, 'SONLON'),
(543, 15, 2, 'NEW LOON'),
(544, 16, 2, 'CABAY-ANGAN'),
(545, 16, 2, 'DUJALI'),
(546, 16, 2, 'MAGUPISING'),
(547, 16, 2, 'NEW CASAY'),
(548, 16, 2, 'TANGLAW'),
(549, 17, 2, 'ALEJAL'),
(550, 17, 2, 'ANIBONGAN'),
(551, 17, 2, 'ASUNCION (CUATRO-CUATRO)'),
(552, 17, 2, 'CEBULANO'),
(553, 17, 2, 'GUADALUPE'),
(554, 17, 2, 'ISING (POBLACION)'),
(555, 17, 2, 'LA PAZ'),
(556, 17, 2, 'MABAUS'),
(557, 17, 2, 'MABUHAY'),
(558, 17, 2, 'MAGSAYSAY'),
(559, 17, 2, 'MANGALCAL'),
(560, 17, 2, 'MINDA'),
(561, 17, 2, 'NEW CAMILING'),
(562, 17, 2, 'SALVACION'),
(563, 17, 2, 'SAN ISIDRO'),
(564, 17, 2, 'STO. NINO'),
(565, 17, 2, 'TABA'),
(566, 17, 2, 'TIBULAO'),
(567, 17, 2, 'TUBOD'),
(568, 17, 2, 'TUGANAY'),
(569, 18, 2, 'SEMONG'),
(570, 18, 2, 'FLORIDA'),
(571, 18, 2, 'GABUYAN'),
(572, 18, 2, 'GUPITAN'),
(573, 18, 2, 'CAPUNGAGAN'),
(574, 18, 2, 'KATIPUNAN'),
(575, 18, 2, 'LUNA'),
(576, 18, 2, 'MABANTAO'),
(577, 18, 2, 'MAMACAO'),
(578, 18, 2, 'PAG-ASA'),
(579, 18, 2, 'MANIKI (POBLACION)'),
(580, 18, 2, 'SAMPAO'),
(581, 18, 2, 'SUA-ON'),
(582, 18, 2, 'TIBURCIA'),
(583, 19, 2, 'CABIDIANAN'),
(584, 19, 2, 'CARCOR'),
(585, 19, 2, 'DEL MONTE'),
(586, 19, 2, 'DEL PILAR'),
(587, 19, 2, 'EL SALVADOR'),
(588, 19, 2, 'LIMBA-AN'),
(589, 19, 2, 'MACGUM'),
(590, 19, 2, 'MAMBING'),
(591, 19, 2, 'MESAOY'),
(592, 19, 2, 'NEW BOHOL'),
(593, 19, 2, 'NEW CORTEZ'),
(594, 19, 2, 'NEW SAMBOG'),
(595, 19, 2, 'PATROCENIO'),
(596, 19, 2, 'POBLACION'),
(597, 19, 2, 'SAN ROQUE'),
(598, 19, 2, 'STA. CRUZ'),
(599, 19, 2, 'SANTA FE'),
(600, 19, 2, 'STO. NINO'),
(601, 19, 2, 'SUAWON'),
(602, 19, 2, 'SAN JOSE'),
(603, 20, 2, 'DACUDAO'),
(604, 20, 2, 'DATU BALONG'),
(605, 20, 2, 'IGANGON'),
(606, 20, 2, 'KIPALILI'),
(607, 20, 2, 'LIBUTON'),
(608, 20, 2, 'LINAO'),
(609, 20, 2, 'MAMANGAN'),
(610, 20, 2, 'MONTE DUJALI'),
(611, 20, 2, 'PINAMUNO'),
(612, 20, 2, 'SABANGAN'),
(613, 20, 2, 'SAN MIGUEL'),
(614, 20, 2, 'STO. NINO'),
(615, 20, 2, 'SAWATA'),
(616, 21, 2, 'BALAGUNAN'),
(617, 21, 2, 'BOBONGON'),
(618, 21, 2, 'CASIG-ANG'),
(619, 21, 2, 'ESPERANZA'),
(620, 21, 2, 'KIMAMON'),
(621, 21, 2, 'KINAMAYAN'),
(622, 21, 2, 'LA LIBERTAD'),
(623, 21, 2, 'LUNGAOG'),
(624, 21, 2, 'MAGWAWA'),
(625, 21, 2, 'NEW KATIPUNAN'),
(626, 21, 2, 'NEW VISAYAS'),
(627, 21, 2, 'PANTARON'),
(628, 21, 2, 'SALVACION'),
(629, 21, 2, 'SAN JOSE'),
(630, 21, 2, 'SAN MIGUEL'),
(631, 21, 2, 'SAN VICENTE'),
(632, 21, 2, 'TALOMO'),
(633, 21, 2, 'TIBAL-OG'),
(634, 21, 2, 'TULALIAN'),
(635, 22, 2, 'DAGOHOY'),
(636, 22, 2, 'PALMA GIL'),
(637, 22, 2, 'STO. NINO'),
(638, 23, 3, 'BADAS'),
(639, 23, 3, 'BOBON'),
(640, 23, 3, 'BUSO'),
(641, 23, 3, 'CABUAYA'),
(642, 23, 3, 'CENTRAL (CITY PROPER/POBLACION'),
(643, 23, 3, 'CULIAN'),
(644, 23, 3, 'DAHICAN'),
(645, 23, 3, 'DANAO'),
(646, 23, 3, 'DAWAN'),
(647, 23, 3, 'DON ENRIQUE LOPEZ'),
(648, 23, 3, 'DON MARTIN MARUNDAN'),
(649, 23, 3, 'DON SALVADOR LOPEZ SR'),
(650, 23, 3, 'LANGKA'),
(651, 23, 3, 'LAWIGAN'),
(652, 23, 3, 'LIBUDON'),
(653, 23, 3, 'LUBAM'),
(654, 23, 3, 'MACAMBOL'),
(655, 23, 3, 'MAMALI'),
(656, 23, 3, 'MATIAO'),
(657, 23, 3, 'MAYO'),
(658, 23, 3, 'SAINZ'),
(659, 23, 3, 'SANGHAY'),
(660, 23, 3, 'TAGABAKID'),
(661, 23, 3, 'TAGBINONGA'),
(662, 23, 3, 'TAGUIBO'),
(663, 23, 3, 'TAMISAN'),
(664, 24, 3, 'BACULIN'),
(665, 24, 3, 'BAN-AO'),
(666, 24, 3, 'BATAWAN'),
(667, 24, 3, 'BATIANO'),
(668, 24, 3, 'BINONDO'),
(669, 24, 3, 'BOBONAO'),
(670, 24, 3, 'CAMPAWAN'),
(671, 24, 3, 'CENTRAL'),
(672, 24, 3, 'DAPNAN'),
(673, 24, 3, 'KINABLANGAN'),
(674, 24, 3, 'LAMBAJON'),
(675, 24, 3, 'LUCOD'),
(676, 24, 3, 'MAHAN-UB'),
(677, 24, 3, 'MIKIT'),
(678, 24, 3, 'SALINGCOMOT'),
(679, 24, 3, 'SAN ISIDRO'),
(680, 24, 3, 'SAN VICTOR'),
(681, 24, 3, 'SAOQUIGUE'),
(682, 25, 3, 'CABANGCALAN'),
(683, 25, 3, 'CAGANGANAN'),
(684, 25, 3, 'CALUBIHAN'),
(685, 25, 3, 'CAUSWAGAN'),
(686, 25, 3, 'PUNTA LINAO'),
(687, 25, 3, 'MAHAYAG'),
(688, 25, 3, 'MAPUTI'),
(689, 25, 3, 'MOGBONGCOGON'),
(690, 25, 3, 'PANIKIAN'),
(691, 25, 3, 'PINTATAGAN'),
(692, 25, 3, 'PISO PROPER'),
(693, 25, 3, 'POBLACION'),
(694, 25, 3, 'SAN VICENTE'),
(695, 25, 3, 'RANG-AY'),
(696, 26, 3, 'CABASAGAN'),
(697, 26, 3, 'CAATIHAN'),
(698, 26, 3, 'CAWAYANAN'),
(699, 26, 3, 'POBLACION'),
(700, 26, 3, 'SAN JO'),
(701, 26, 3, 'SIBAJAY'),
(702, 26, 3, 'CARMEN'),
(703, 26, 3, 'SIMULAO'),
(704, 27, 3, 'ALVAR'),
(705, 27, 3, 'CANINGAG'),
(706, 27, 3, 'DON LEON BALANTE'),
(707, 27, 3, 'LAMIAWAN'),
(708, 27, 3, 'MANORIGAO'),
(709, 27, 3, 'MERCEDES'),
(710, 27, 3, 'PALMA GIL'),
(711, 27, 3, 'PICHON'),
(712, 27, 3, 'POBLACION'),
(713, 27, 3, 'SAN ANTONIO'),
(714, 27, 3, 'SAN JOSE'),
(715, 27, 3, 'SAN LUIS'),
(716, 27, 3, 'SAN MIGUEL'),
(717, 27, 3, 'SAN PEDRO'),
(718, 27, 3, 'SANTA FE'),
(719, 27, 3, 'SANTIAGO'),
(720, 27, 3, 'P.M. SOBRECAREY'),
(721, 28, 3, 'ABIHOD'),
(722, 28, 3, 'ALEGRIA'),
(723, 28, 3, 'ALIWAGWAG'),
(724, 28, 3, 'ARAGON'),
(725, 28, 3, 'BAYBAY'),
(726, 28, 3, 'MAGLAHUS'),
(727, 28, 3, 'MAINIT'),
(728, 28, 3, 'MALIBAGO'),
(729, 28, 3, 'SAN ALFONSO'),
(730, 28, 3, 'SAN ANTONIO'),
(731, 28, 3, 'SAN MIGUEL'),
(732, 28, 3, 'SAN RAFAEL'),
(733, 28, 3, 'SAN VICENTE'),
(734, 28, 3, 'STA. FILOMENA'),
(735, 28, 3, 'TAYTAYAN'),
(736, 28, 3, 'POBLACION'),
(737, 29, 3, 'ANITAP'),
(738, 29, 3, 'CRISPIN DELA CRUZ'),
(739, 29, 3, 'DON AURELIO CHICOTE'),
(740, 29, 3, 'LAVIGAN'),
(741, 29, 3, 'LUZON'),
(742, 29, 3, 'MAGDUG'),
(743, 29, 3, 'MANUEL ROXAS'),
(744, 29, 3, 'MONTSERRAT'),
(745, 29, 3, 'NANGAN'),
(746, 29, 3, 'OREGON'),
(747, 29, 3, 'POBLACION (SIGABOY)'),
(748, 29, 3, 'PUNDAGUITAN'),
(749, 29, 3, 'SERGIO OSMENA'),
(750, 29, 3, 'SUROP'),
(751, 29, 3, 'TAGABEBE'),
(752, 29, 3, 'TANDANG SORA'),
(753, 29, 3, 'TIBANBAN'),
(754, 29, 3, 'TIBLAWAN'),
(755, 29, 3, 'UPPER TIBANBAN'),
(756, 30, 3, 'BAGUMBAYAN'),
(757, 30, 3, 'CABADIANGAN'),
(758, 30, 3, 'CALAPAGAN'),
(759, 30, 3, 'COCORNON'),
(760, 30, 3, 'CORPORACION'),
(761, 30, 3, 'DON MARIANO MARCOS'),
(762, 30, 3, 'ILANGAY'),
(763, 30, 3, 'LANGKA'),
(764, 30, 3, 'LANTAWAN'),
(765, 30, 3, 'LIMBAHAN'),
(766, 30, 3, 'MACANGAO'),
(767, 30, 3, 'MAGSAYSAY'),
(768, 30, 3, 'MAHAYAHAY'),
(769, 30, 3, 'MARAGATAS'),
(770, 30, 3, 'MARAYAG'),
(771, 30, 3, 'NEW VISAYAS'),
(772, 30, 3, 'POBLACION'),
(773, 30, 3, 'SAN ISIDRO'),
(774, 30, 3, 'SAN JOSE'),
(775, 30, 3, 'TAGBOA'),
(776, 30, 3, 'TAGUGPO'),
(777, 31, 3, 'CAPASNAN'),
(778, 31, 3, 'CAYAWAN'),
(779, 31, 3, 'CENTRAL (POBLACION)'),
(780, 31, 3, 'CONCEPCION'),
(781, 31, 3, 'DEL PILAR'),
(782, 31, 3, 'GUZA'),
(783, 31, 3, 'HOLY CROSS'),
(784, 31, 3, 'MABINI'),
(785, 31, 3, 'MANREZA'),
(786, 31, 3, 'OLD MACOPA'),
(787, 31, 3, 'RIZAL'),
(788, 31, 3, 'SAN FERMIN'),
(789, 31, 3, 'SAN IGNACIO'),
(790, 31, 3, 'SAN ISIDRO'),
(791, 31, 3, 'TAOCANGA'),
(792, 31, 3, 'ZARAGOSA'),
(793, 31, 3, 'LAMBOG'),
(794, 32, 3, 'BAON'),
(795, 32, 3, 'BITAOGAN'),
(796, 32, 3, 'CAMBALEON'),
(797, 32, 3, 'DUGMANON'),
(798, 32, 3, 'IBA'),
(799, 32, 3, 'LA UNION'),
(800, 32, 3, 'LAPU-LAPU'),
(801, 32, 3, 'MAAG'),
(802, 32, 3, 'MANIKLING'),
(803, 32, 3, 'MAPUTI'),
(804, 32, 3, 'BATOBATO (POBLACION)'),
(805, 32, 3, 'SAN MIGUEL'),
(806, 32, 3, 'SAN ROQUE'),
(807, 32, 3, 'STO. ROSARIO'),
(808, 32, 3, 'SUDLON'),
(809, 32, 3, 'TALISAY'),
(810, 33, 3, 'CABAYAGAN'),
(811, 33, 3, 'CENTRAL (POBLACION)'),
(812, 33, 3, 'DADONG'),
(813, 33, 3, 'JOVELLAR'),
(814, 33, 3, 'LIMOT'),
(815, 33, 3, 'LUCATAN'),
(816, 33, 3, 'MAGANDA'),
(817, 33, 3, 'OMPAO'),
(818, 33, 3, 'TOMOAONG'),
(819, 33, 3, 'TUBAON'),
(820, 34, 4, 'BALUNTUYA'),
(821, 34, 4, 'CALIAN'),
(822, 34, 4, 'DALUPAN'),
(823, 34, 4, 'KINANGA (POBLACION)'),
(824, 34, 4, 'KIOBOG'),
(825, 34, 4, 'LANAO'),
(826, 34, 4, 'LAPUAN'),
(827, 34, 4, 'LAWA'),
(828, 34, 4, 'LINADASAN'),
(829, 34, 4, 'MABUHAY'),
(830, 34, 4, 'NORTH LAMIDAN'),
(831, 34, 4, 'NUEVA VILLA'),
(832, 34, 4, 'SOUTH LAMIDAN'),
(833, 34, 4, 'TALAGUTON'),
(834, 34, 4, 'WEST LAMIDAN'),
(835, 35, 4, 'BALAGONAN'),
(836, 35, 4, 'BUGUIS'),
(837, 35, 4, 'BUKID'),
(838, 35, 4, 'BUTUAN'),
(839, 35, 4, 'CABURAN BIG'),
(840, 35, 4, 'CABURAN SMALL (POBLACION)'),
(841, 35, 4, 'CAMALIAN'),
(842, 35, 4, 'CARAHAYAN'),
(843, 35, 4, 'CAYAPONGA'),
(844, 35, 4, 'CULAMAN'),
(845, 35, 4, 'KALBAY'),
(846, 35, 4, 'KITAYO'),
(847, 35, 4, 'MAGULIBAS'),
(848, 35, 4, 'MALALAN'),
(849, 35, 4, 'MANGILE'),
(850, 35, 4, 'MARABATUAN'),
(851, 35, 4, 'MEYBIO'),
(852, 35, 4, 'MOLMOL'),
(853, 35, 4, 'NUING'),
(854, 35, 4, 'PATULANG'),
(855, 35, 4, 'QUIAPO'),
(856, 35, 4, 'SAN ISIDRO'),
(857, 35, 4, 'SUGAL'),
(858, 35, 4, 'TABAYON'),
(859, 35, 4, 'TANUMAN'),
(860, 36, 4, 'BITO'),
(861, 36, 4, 'BOLILA'),
(862, 36, 4, 'BUHANGIN'),
(863, 36, 4, 'CULAMAN'),
(864, 36, 4, 'DATU DANWATA'),
(865, 36, 4, 'DEMOLOC'),
(866, 36, 4, 'FELIS'),
(867, 36, 4, 'FISHING VILLAGE'),
(868, 36, 4, 'KIBALATONG'),
(869, 36, 4, 'KIDAPALONG'),
(870, 36, 4, 'KILALAG'),
(871, 36, 4, 'KINANGAN'),
(872, 36, 4, 'LACARON'),
(873, 36, 4, 'LAGUMIT'),
(874, 36, 4, 'LAIS'),
(875, 36, 4, 'LITTLE BAGUIO'),
(876, 36, 4, 'MACOL'),
(877, 36, 4, 'MANA'),
(878, 36, 4, 'MANUEL PERALTA'),
(879, 36, 4, 'NEW ARGAO'),
(880, 36, 4, 'PANGIAN'),
(881, 36, 4, 'PINALPALAN'),
(882, 36, 4, 'POBLACION'),
(883, 36, 4, 'SANGAY'),
(884, 36, 4, 'TALOGOY'),
(885, 36, 4, 'TICAL'),
(886, 36, 4, 'TICULON'),
(887, 36, 4, 'TINGOLO'),
(888, 36, 4, 'TUBALAN'),
(889, 36, 4, 'PANGALEON'),
(890, 37, 4, 'BASIAWAN'),
(891, 37, 4, 'BUCA'),
(892, 37, 4, 'CADAATAN'),
(893, 37, 4, 'KIDADAN'),
(894, 37, 4, 'KISULAD'),
(895, 37, 4, 'MALALAG TUBIG'),
(896, 37, 4, 'MAMACAO'),
(897, 37, 4, 'OGPAO'),
(898, 37, 4, 'POBLACION'),
(899, 37, 4, 'PONGPONG'),
(900, 37, 4, 'SAN AGUSTIN'),
(901, 37, 4, 'SAN ANTONIO'),
(902, 37, 4, 'SAN ISIDRO'),
(903, 37, 4, 'SAN JUAN'),
(904, 37, 4, 'SAN PEDRO'),
(905, 37, 4, 'SAN ROQUE'),
(906, 37, 4, 'TANGLAD'),
(907, 37, 4, 'STO. NINO'),
(908, 37, 4, 'STO. ROSARIO'),
(909, 37, 4, 'DATU DALIGASAO'),
(910, 37, 4, 'DATU INTAN'),
(911, 37, 4, 'KINILIDAN'),
(912, 38, 4, 'BATUGANDING'),
(913, 38, 4, 'KONEL'),
(914, 38, 4, 'LIPOL'),
(915, 38, 4, 'MABILA (POBLACION)'),
(916, 38, 4, 'TININA'),
(917, 38, 4, 'GOMTAGO'),
(918, 38, 4, 'TAGEN'),
(919, 38, 4, 'TUCAL'),
(920, 38, 4, 'PATUCO (SARANGANI NORTE)'),
(921, 38, 4, 'LAKER (SARANGANI SUR)'),
(922, 38, 4, 'CAMAHUAL'),
(923, 38, 4, 'CAMALIG'),
(924, 39, 5, 'BAGONGON'),
(925, 39, 5, 'GABI'),
(926, 39, 5, 'LAGAB'),
(927, 39, 5, 'MANGAYON'),
(928, 39, 5, 'MAPACA'),
(929, 39, 5, 'MAPARAT'),
(930, 39, 5, 'NEW ALEGRIA'),
(931, 39, 5, 'NGAN'),
(932, 39, 5, 'OSMENA'),
(933, 39, 5, 'PANANSALAN'),
(934, 39, 5, 'POBLACION'),
(935, 39, 5, 'SAN JOSE'),
(936, 39, 5, 'SAN MIGUEL'),
(937, 39, 5, 'SIOCON'),
(938, 39, 5, 'TAMIA'),
(939, 39, 5, 'AURORA'),
(940, 40, 5, 'AGUINALDO'),
(941, 40, 5, 'AMORCRUZ'),
(942, 40, 5, 'AMPAWID'),
(943, 40, 5, 'ANDAP'),
(944, 40, 5, 'ANITAP'),
(945, 40, 5, 'BAGONG SILANG'),
(946, 40, 5, 'BANBANON'),
(947, 40, 5, 'BELMONTE'),
(948, 40, 5, 'BINASBAS'),
(949, 40, 5, 'BULLUCAN'),
(950, 40, 5, 'CEBOLEDA'),
(951, 40, 5, 'CONCEPCION'),
(952, 40, 5, 'DATU AMPUNAN'),
(953, 40, 5, 'DATU DAVAO'),
(954, 40, 5, 'DONA JOSEFA'),
(955, 40, 5, 'EL KATIPUNAN'),
(956, 40, 5, 'II PAPA'),
(957, 40, 5, 'IMELDA'),
(958, 40, 5, 'INAKAYAN'),
(959, 40, 5, 'KALIGUTAN'),
(960, 40, 5, 'KAPATAGAN'),
(961, 40, 5, 'KIDAWA'),
(962, 40, 5, 'KILAGDING'),
(963, 40, 5, 'KIOKMAY'),
(964, 40, 5, 'LAAK (POBLACION)'),
(965, 40, 5, 'LANGTUD'),
(966, 40, 5, 'LONGANAPAN'),
(967, 40, 5, 'MABUHAY'),
(968, 40, 5, 'MACOPA'),
(969, 40, 5, 'MALINAO'),
(970, 40, 5, 'MANGLOY'),
(971, 40, 5, 'MELALE'),
(972, 40, 5, 'NAGA'),
(973, 40, 5, 'NEW BETHLEHEM'),
(974, 40, 5, 'PANAMOREN'),
(975, 40, 5, 'SABUD'),
(976, 40, 5, 'SAN ANTONIO'),
(977, 40, 5, 'STA. EMILIA'),
(978, 40, 5, 'STO. NINO'),
(979, 40, 5, 'SISIMON'),
(980, 41, 5, 'CADUNAN'),
(981, 41, 5, 'PINDASAN'),
(982, 41, 5, 'CUAMBOG (POBLACION)'),
(983, 41, 5, 'TAGNANAN (MAMPISING)'),
(984, 41, 5, 'ANITAPAN'),
(985, 41, 5, 'CABUYUAN'),
(986, 41, 5, 'DEL PILAR'),
(987, 41, 5, 'LIBODON'),
(988, 41, 5, 'GOLDEN VALLEY (MARAUT)'),
(989, 41, 5, 'PANGIBIRAN'),
(990, 41, 5, 'SAN ANTONIO'),
(991, 42, 5, 'ANIBONGAN'),
(992, 42, 5, 'ANISLAGAN'),
(993, 42, 5, 'BINUANGAN'),
(994, 42, 5, 'BUCANA'),
(995, 42, 5, 'CALABCAB'),
(996, 42, 5, 'CONCEPCION'),
(997, 42, 5, 'DUMLAN'),
(998, 42, 5, 'ELIZALDE (SOMIL)'),
(999, 42, 5, 'PANGI (GAUDENCIO ANTONIO)'),
(1000, 42, 5, 'GUBATAN'),
(1001, 42, 5, 'HIJO'),
(1002, 42, 5, 'KINUBAN'),
(1003, 42, 5, 'LANGGAM'),
(1004, 42, 5, 'LAPU-LAPU'),
(1005, 42, 5, 'LIBAY-LIBAY'),
(1006, 42, 5, 'LIMBO'),
(1007, 42, 5, 'LUMATAB'),
(1008, 42, 5, 'MANGAGIT'),
(1009, 42, 5, 'MALAMODAO'),
(1010, 42, 5, 'MANIPONGOL'),
(1011, 42, 5, 'MAPAANG'),
(1012, 42, 5, 'MASARA'),
(1013, 42, 5, 'NEW ASTURIAS'),
(1014, 42, 5, 'PANIBASAN'),
(1015, 42, 5, 'POBLACION'),
(1016, 42, 5, 'SAN JUAN'),
(1017, 42, 5, 'SAN ROQUE'),
(1018, 42, 5, 'SANGAB'),
(1019, 42, 5, 'TAGLAWIG'),
(1020, 42, 5, 'MAINIT'),
(1021, 42, 5, 'NEW BARILI'),
(1022, 42, 5, 'NEW LEYTE'),
(1023, 42, 5, 'NEW VISAYAS'),
(1024, 42, 5, 'PANANGAN'),
(1025, 42, 5, 'TAGBAROS'),
(1026, 42, 5, 'TERESA'),
(1027, 43, 5, 'BAGONG SILANG'),
(1028, 43, 5, 'MAPAWA'),
(1029, 43, 5, 'MARAGUSAN (POBLACION)'),
(1030, 43, 5, 'NEW ALBAY'),
(1031, 43, 5, 'TUPAZ'),
(1032, 43, 5, 'BAHI'),
(1033, 43, 5, 'CAMBAGANG'),
(1034, 43, 5, 'CORONOBE'),
(1035, 43, 5, 'KATIPUNAN'),
(1036, 43, 5, 'LAHI'),
(1037, 43, 5, 'LANGGAWISAN'),
(1038, 43, 5, 'MABUGNAO'),
(1039, 43, 5, 'MAGCAGONG'),
(1040, 43, 5, 'MAHAYAHAY'),
(1041, 43, 5, 'MAUSWAGON'),
(1042, 43, 5, 'NEW KATIPUNAN'),
(1043, 43, 5, 'NEW MANAY'),
(1044, 43, 5, 'NEW PANAY'),
(1045, 43, 5, 'PALOC'),
(1046, 43, 5, 'PAMINTARAN'),
(1047, 43, 5, 'PARASANON'),
(1048, 43, 5, 'TALIAN'),
(1049, 43, 5, 'TANDIK'),
(1050, 43, 5, 'TIGBAO'),
(1051, 44, 5, 'ANDILI'),
(1052, 44, 5, 'BAWANI'),
(1053, 44, 5, 'CONCEPCION'),
(1054, 44, 5, 'MALINAWON'),
(1055, 44, 5, 'NUEVA VISAYAS'),
(1056, 44, 5, 'NUEVO ILOCO'),
(1057, 44, 5, 'POBLACION'),
(1058, 44, 5, 'SALVACION'),
(1059, 44, 5, 'SAOSAO'),
(1060, 44, 5, 'SAWANGAN'),
(1061, 44, 5, 'TUBORAN'),
(1062, 45, 5, 'AWAO'),
(1063, 45, 5, 'BABAG'),
(1064, 45, 5, 'BANLAG'),
(1065, 45, 5, 'BAYLO'),
(1066, 45, 5, 'CASOON'),
(1067, 45, 5, 'INAMBATAN'),
(1068, 45, 5, 'HAGUIMITAN'),
(1069, 45, 5, 'MACOPA'),
(1070, 45, 5, 'MAMUNGA'),
(1071, 45, 5, 'MT. DIWATA (MT. DIWALWAL)'),
(1072, 45, 5, 'NABOC'),
(1073, 45, 5, 'OLAYCON'),
(1074, 45, 5, 'PASIAN (STA. FILOMENA)'),
(1075, 45, 5, 'POBLACION'),
(1076, 45, 5, 'RIZAL'),
(1077, 45, 5, 'SALVACION'),
(1078, 45, 5, 'SAN ISIDRO'),
(1079, 45, 5, 'SAN JOSE'),
(1080, 45, 5, 'TUBO-TUBO (NEW DEL MONTE)'),
(1081, 45, 5, 'UPPER ULIP'),
(1082, 45, 5, 'UNION'),
(1083, 46, 5, 'BANAGBANAG'),
(1084, 46, 5, 'BANGLASAN'),
(1085, 46, 5, 'BANKEROHAN NORTE'),
(1086, 46, 5, 'BANKEROHAN SUR'),
(1087, 46, 5, 'CAMANSI'),
(1088, 46, 5, 'CAMANTAGAN'),
(1089, 46, 5, 'CONCEPCION'),
(1090, 46, 5, 'DAUMAN'),
(1091, 46, 5, 'CANIDKID'),
(1092, 46, 5, 'LEBANON'),
(1093, 46, 5, 'LINOAN'),
(1094, 46, 5, 'MAYAON'),
(1095, 46, 5, 'NEW CALAPE'),
(1096, 46, 5, 'NEW DALAGUETE'),
(1097, 46, 5, 'NEW CEBULAN (SAMBAYON)'),
(1098, 46, 5, 'NEW VISAYAS'),
(1099, 46, 5, 'PROSPERIDAD'),
(1100, 46, 5, 'SAN JOSE (POBLACION)'),
(1101, 46, 5, 'SAN VICENTE'),
(1102, 46, 5, 'TAPIA'),
(1103, 47, 5, 'ANISLAGAN'),
(1104, 47, 5, 'ANTEQUERA'),
(1105, 47, 5, 'BASAK'),
(1106, 47, 5, 'BAYABAS'),
(1107, 47, 5, 'BUKAL'),
(1108, 47, 5, 'CABACUNGAN'),
(1109, 47, 5, 'CABIDIANAN'),
(1110, 47, 5, 'KATIPUNAN'),
(1111, 47, 5, 'LIBASAN'),
(1112, 47, 5, 'LINDA'),
(1113, 47, 5, 'MAGADING'),
(1114, 47, 5, 'MAGSAYSAY'),
(1115, 47, 5, 'MAINIT'),
(1116, 47, 5, 'MANAT'),
(1117, 47, 5, 'MATILO'),
(1118, 47, 5, 'MIPANGI'),
(1119, 47, 5, 'NEW DAUIS'),
(1120, 47, 5, 'NEW SIBONGA'),
(1121, 47, 5, 'OGAO'),
(1122, 47, 5, 'PANGUTOSAN'),
(1123, 47, 5, 'POBLACION'),
(1124, 47, 5, 'SAN ISIDRO'),
(1125, 47, 5, 'SAN ROQUE'),
(1126, 47, 5, 'SAN VICENTE'),
(1127, 47, 5, 'STA. MARIA'),
(1128, 47, 5, 'STO. NINO (KAO)'),
(1129, 47, 5, 'SASA'),
(1130, 47, 5, 'TAGNOCON'),
(1131, 48, 5, 'ANDAP'),
(1132, 48, 5, 'BANTACAN'),
(1133, 48, 5, 'BATINAO'),
(1134, 48, 5, 'CABINUANGAN (POBLACION)'),
(1135, 48, 5, 'CAMANLANGAN'),
(1136, 48, 5, 'COGONON'),
(1137, 48, 5, 'FATIMA'),
(1138, 48, 5, 'KAHAYAG'),
(1139, 48, 5, 'KATIPUNAN'),
(1140, 48, 5, 'MAGANGIT'),
(1141, 48, 5, 'MANURIGAO'),
(1142, 48, 5, 'PAGSABANGAN'),
(1143, 48, 5, 'PANAG'),
(1144, 48, 5, 'SAN ROQUE'),
(1145, 48, 5, 'TANDAWAN'),
(1146, 49, 5, 'BONGABONG'),
(1147, 49, 5, 'BONGBONG'),
(1148, 49, 5, 'P. FUENTES'),
(1149, 49, 5, 'KINGKING (POBLACION)'),
(1150, 49, 5, 'MAGNAGA'),
(1151, 49, 5, 'MATIAO'),
(1152, 49, 5, 'NAPNAPAN'),
(1153, 49, 5, 'TAGDANGUA'),
(1154, 49, 5, 'TAMBONGON'),
(1155, 49, 5, 'TIBAGON'),
(1156, 49, 5, 'LAS ARENAS'),
(1157, 49, 5, 'ARAIBO'),
(1158, 49, 5, 'TAGUGPO');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `CityId` int(11) NOT NULL,
  `City` varchar(125) NOT NULL,
  `ProvId` int(11) NOT NULL,
  `Province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`CityId`, `City`, `ProvId`, `Province`) VALUES
(1, 'DAVAO CITY', 1, 'Davao del Sur'),
(2, 'DIGOS CITY', 1, 'Davao del Sur'),
(3, 'BANSALAN', 1, 'Davao del Sur'),
(4, 'HAGONOY', 1, 'Davao del Sur'),
(5, 'KIBLAWAN', 1, 'Davao del Sur'),
(6, 'MAGSAYSAY', 1, 'Davao del Sur'),
(7, 'MALALAG', 1, 'Davao del Sur'),
(8, 'MATANAO', 1, 'Davao del Sur'),
(9, 'PADADA', 1, 'Davao del Sur'),
(10, 'STA.CRUZ', 1, 'Davao del Sur'),
(11, 'SULOP', 1, 'Davao del Sur'),
(12, 'PANABO CITY', 2, 'Davao del Norte'),
(13, 'SAMAL CITY', 2, 'Davao del Norte'),
(14, 'TAGUM CITY', 2, 'Davao del Norte'),
(15, 'ASUNCION', 2, 'Davao del Norte'),
(16, 'BRAULIO E. DUJALI', 2, 'Davao del Norte'),
(17, 'CARMEN', 2, 'Davao del Norte'),
(18, 'KAPALONG', 2, 'Davao del Norte'),
(19, 'NEW CORELLA', 2, 'Davao del Norte'),
(20, 'SAN ISIDRO', 2, 'Davao del Norte'),
(21, 'STO.TOMAS', 2, 'Davao del Norte'),
(22, 'TALAINGOD', 2, 'Davao del Norte'),
(23, 'MATI CITY', 3, 'Davao Oriental'),
(24, 'BAGANGA', 3, 'Davao Oriental'),
(25, 'BANAYBANAY', 3, 'Davao Oriental'),
(26, 'BOSTON', 3, 'Davao Oriental'),
(27, 'CARAGA', 3, 'Davao Oriental'),
(28, 'CATEEL', 3, 'Davao Oriental'),
(29, 'GOVERNOR GENEROSO', 3, 'Davao Oriental'),
(30, 'LUPON', 3, 'Davao Oriental'),
(31, 'MANAY', 3, 'Davao Oriental'),
(32, 'SAN ISIDRO', 3, 'Davao Oriental'),
(33, 'TARRAGONA', 3, 'Davao Oriental'),
(34, 'DON MARCELINO', 4, 'Davao Occidental'),
(35, 'JOSE ABAD SANTOS', 4, 'Davao Occidental'),
(36, 'MALITA', 4, 'Davao Occidental'),
(37, 'STA.MARIA', 4, 'Davao Occidental'),
(38, 'SARANGANI', 4, 'Davao Occidental'),
(39, 'COMPOSTELA', 5, 'Davao de Oro'),
(40, 'LAAK', 5, 'Davao de Oro'),
(41, 'MABINI', 5, 'Davao de Oro'),
(42, 'MACO', 5, 'Davao de Oro'),
(43, 'MARAGUSAN', 5, 'Davao de Oro'),
(44, 'MAWAB', 5, 'Davao de Oro'),
(45, 'MONKAYO', 5, 'Davao de Oro'),
(46, 'MONTEVISTA', 5, 'Davao de Oro'),
(47, 'NABUNTURAN', 5, 'Davao de Oro'),
(48, 'NEW BATAAN', 5, 'Davao de Oro'),
(49, 'PANTUKAN', 5, 'Davao de Oro');

-- --------------------------------------------------------

--
-- Table structure for table `tblmobile_permit`
--

CREATE TABLE `tblmobile_permit` (
  `fileNo` int(11) NOT NULL,
  `PermitNo` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmobile_permit_records`
--

CREATE TABLE `tblmobile_permit_records` (
  `Record_Id` int(11) NOT NULL,
  `fileNo` int(11) NOT NULL,
  `BusinessName` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `BusinessNo` varchar(50) NOT NULL,
  `Owner` varchar(50) NOT NULL,
  `DateIssued` date NOT NULL,
  `Validity` date NOT NULL,
  `OrNo` int(11) NOT NULL,
  `DatePaid` date NOT NULL,
  `Amount` decimal(11,2) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Technician` varchar(50) NOT NULL,
  `Note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblntcemployee`
--

CREATE TABLE `tblntcemployee` (
  `EmpId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblntcemployee`
--

INSERT INTO `tblntcemployee` (`EmpId`, `Name`, `Position`) VALUES
(1, 'DR. NELSON T. CAÑETE. J.D', 'Regional Director');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `OrNo` int(11) NOT NULL,
  `Amount` decimal(11,0) NOT NULL,
  `Date` date NOT NULL,
  `LicenseType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`OrNo`, `Amount`, `Date`, `LicenseType`) VALUES
(90001, '360', '2021-06-16', 'RLMP');

-- --------------------------------------------------------

--
-- Table structure for table `tblprovince`
--

CREATE TABLE `tblprovince` (
  `ProvId` int(11) NOT NULL,
  `Province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprovince`
--

INSERT INTO `tblprovince` (`ProvId`, `Province`) VALUES
(1, 'Davao del Sur'),
(2, 'Davao del Norte'),
(3, 'Davao Oriental'),
(4, 'Davao Occidental'),
(5, 'Davao de Oro');

-- --------------------------------------------------------

--
-- Table structure for table `tblrlmplicenseinfo`
--

CREATE TABLE `tblrlmplicenseinfo` (
  `tblID` int(11) NOT NULL,
  `IDno` int(11) NOT NULL,
  `DateIssued` date NOT NULL,
  `DateExpiry` date NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  `FormNo` int(11) NOT NULL,
  `OrNo` int(11) NOT NULL,
  `Amount` decimal(19,2) NOT NULL,
  `DatePaid` date NOT NULL,
  `NoOfYears` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrlmplicenseinfo`
--

INSERT INTO `tblrlmplicenseinfo` (`tblID`, `IDno`, `DateIssued`, `DateExpiry`, `Remarks`, `FormNo`, `OrNo`, `Amount`, `DatePaid`, `NoOfYears`) VALUES
(1, 1, '2021-11-15', '2025-11-15', 'NEW', 1, 1000, '360.00', '2021-11-15', 5),
(2, 1, '2021-11-15', '2026-11-15', 'NEW', 2, 1001, '360.00', '2021-11-15', 0),
(5, 2, '2021-12-10', '2021-12-10', 'NEW', 1, 12, '3850.00', '2021-12-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblrlmpoperatorinfo`
--

CREATE TABLE `tblrlmpoperatorinfo` (
  `IDno` int(11) NOT NULL,
  `RlmpNo` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Prk_St` varchar(50) NOT NULL,
  `Brgy` varchar(125) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Birthdate` date NOT NULL,
  `Citizenship` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Employer` varchar(50) NOT NULL,
  `EmployerAddress` varchar(100) NOT NULL,
  `Placeofseminar` varchar(100) NOT NULL,
  `Dateofseminar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrlmpoperatorinfo`
--

INSERT INTO `tblrlmpoperatorinfo` (`IDno`, `RlmpNo`, `Fullname`, `Prk_St`, `Brgy`, `City`, `Province`, `ContactNo`, `Birthdate`, `Citizenship`, `Sex`, `Height`, `Weight`, `Employer`, `EmployerAddress`, `Placeofseminar`, `Dateofseminar`) VALUES
(1, 'RLMP-KK-10000-21', 'Nashrudin N. Habibon', 'Sampaguita Village', '12B', 'DAVAO CITY', 'Davao del Sur', 296, '2021-11-15', 'f', 'M', 3, 3, 'e', 'e', 'eqe', '2021-11-15'),
(2, 'RLMP-KK-10001-21', 'fa', 'Sampaguita Village', 'ALTA VISTA', 'BANSALAN', 'Davao del Sur', 296, '2021-12-10', 'f', 'M', 0, 3, 'e', 'e', 'd', '2021-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `tblroclicenseinfo`
--

CREATE TABLE `tblroclicenseinfo` (
  `tblID` int(11) NOT NULL,
  `IDno` int(11) NOT NULL,
  `FormNo` int(11) NOT NULL,
  `DateIssued` date NOT NULL,
  `DateExpiry` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `OrNo` int(11) NOT NULL,
  `OrDate` date NOT NULL,
  `Remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblrocoperatorinfo`
--

CREATE TABLE `tblrocoperatorinfo` (
  `IDno` int(11) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `MiddileInitial` varchar(50) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `RegistrationNo` varchar(200) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Birthdate` date NOT NULL,
  `Citizenship` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `Height` varchar(50) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `ExamDate` date NOT NULL,
  `ExamPlace` varchar(250) NOT NULL,
  `ExamRating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsignatory`
--

CREATE TABLE `tblsignatory` (
  `EmpId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsignatory`
--

INSERT INTO `tblsignatory` (`EmpId`, `Name`, `Position`) VALUES
(1, 'DR. NELSON T. CAÑETE, JD', 'Regional Director');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roc_registration_no`
--

CREATE TABLE `tbl_roc_registration_no` (
  `ID` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `RegistrationNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roc_registration_no`
--

INSERT INTO `tbl_roc_registration_no` (`ID`, `Type`, `RegistrationNo`) VALUES
(1, '1PHN', '21-1PHN-1000'),
(2, '2PHN', ''),
(3, '3PHN', ''),
(4, 'GROC', ''),
(5, 'SROP', ''),
(6, '1RTG', ''),
(7, '2RTG', ''),
(8, '3RTG', ''),
(9, 'RMAP', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tblbrgy`
--
ALTER TABLE `tblbrgy`
  ADD PRIMARY KEY (`BrgyId`),
  ADD KEY `cityID` (`CityId`,`ProvId`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`CityId`),
  ADD KEY `provID` (`ProvId`);

--
-- Indexes for table `tblmobile_permit`
--
ALTER TABLE `tblmobile_permit`
  ADD PRIMARY KEY (`fileNo`);

--
-- Indexes for table `tblmobile_permit_records`
--
ALTER TABLE `tblmobile_permit_records`
  ADD PRIMARY KEY (`Record_Id`),
  ADD KEY `fileNo` (`fileNo`);

--
-- Indexes for table `tblntcemployee`
--
ALTER TABLE `tblntcemployee`
  ADD PRIMARY KEY (`EmpId`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`OrNo`);

--
-- Indexes for table `tblprovince`
--
ALTER TABLE `tblprovince`
  ADD PRIMARY KEY (`ProvId`);

--
-- Indexes for table `tblrlmplicenseinfo`
--
ALTER TABLE `tblrlmplicenseinfo`
  ADD PRIMARY KEY (`tblID`),
  ADD KEY `OrNo` (`OrNo`),
  ADD KEY `IDno` (`IDno`);

--
-- Indexes for table `tblrlmpoperatorinfo`
--
ALTER TABLE `tblrlmpoperatorinfo`
  ADD PRIMARY KEY (`IDno`);

--
-- Indexes for table `tblroclicenseinfo`
--
ALTER TABLE `tblroclicenseinfo`
  ADD PRIMARY KEY (`tblID`);

--
-- Indexes for table `tblrocoperatorinfo`
--
ALTER TABLE `tblrocoperatorinfo`
  ADD PRIMARY KEY (`IDno`);

--
-- Indexes for table `tbl_roc_registration_no`
--
ALTER TABLE `tbl_roc_registration_no`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tblbrgy`
--
ALTER TABLE `tblbrgy`
  MODIFY `BrgyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1159;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `CityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tblmobile_permit_records`
--
ALTER TABLE `tblmobile_permit_records`
  MODIFY `Record_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblntcemployee`
--
ALTER TABLE `tblntcemployee`
  MODIFY `EmpId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblprovince`
--
ALTER TABLE `tblprovince`
  MODIFY `ProvId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblrlmplicenseinfo`
--
ALTER TABLE `tblrlmplicenseinfo`
  MODIFY `tblID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblrlmpoperatorinfo`
--
ALTER TABLE `tblrlmpoperatorinfo`
  MODIFY `IDno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblroclicenseinfo`
--
ALTER TABLE `tblroclicenseinfo`
  MODIFY `tblID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblrocoperatorinfo`
--
ALTER TABLE `tblrocoperatorinfo`
  MODIFY `IDno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roc_registration_no`
--
ALTER TABLE `tbl_roc_registration_no`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
