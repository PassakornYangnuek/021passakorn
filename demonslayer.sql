-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 11:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demonslayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `character`
--

CREATE TABLE `character` (
  `character_id` int(4) NOT NULL COMMENT 'ไอดีไตัวละคร',
  `character_name` varchar(64) NOT NULL COMMENT 'ชื่อตัวละคร',
  `character_storyline` text NOT NULL COMMENT 'เนื้อเรื่องตัวละคร',
  `character_clan_id` int(4) NOT NULL COMMENT 'เผ่าพันธุ์',
  `character_gender_id` int(4) NOT NULL COMMENT 'ไอดีเพศ',
  `character_height` int(3) NOT NULL COMMENT 'ส่วนสูง',
  `character_weight` int(3) NOT NULL COMMENT 'นํ้าหนัก',
  `character_fight_style` text NOT NULL COMMENT 'ลักษณะการต่อสู้',
  `character_image` varchar(64) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `character`
--

INSERT INTO `character` (`character_id`, `character_name`, `character_storyline`, `character_clan_id`, `character_gender_id`, `character_height`, `character_weight`, `character_fight_style`, `character_image`) VALUES
(8, 'ทันจิโร่ คามาโดะ', '(竈門かまど 炭たん治じ郎ろう Kamado Tanjirō?) เป็นตัวเอกหลักของดาบพิฆาตอสูร เขาเป็นนักล่าอสูรในหน่วยพิฆาตอสูรที่ร่วมค้นหาวิธีแก้ไขเพื่อเปลี่ยน เนซึโกะ คามาโดะ น้องสาวของเขาให้กลับเป็นมนุษย์และเพื่อตามล่าและฆ่าอสูรเพื่อปกป้องผู้อื่นจากความทุกข์ทรมานเช่นเดียวกับเขา', 1, 1, 165, 61, 'ใช้ปราณวารี และ ปรานตะวันในการต่อสู้', 'img_646088f37d790.jpg'),
(9, 'เซนอิทสึ อะกะสึมะ', 'เซนอิทสึ อะกะสึมะ (我妻 善逸) เป็นตัวเอกของดาบพิฆาตอสูร เขาเป็นนักล่าอสูรในกองนักล่าอสูร', 1, 1, 164, 58, 'ใช้ปราณอัศนีในการต่อสู้ เขาใช้ไดเพียงกระบวนท่าเดียวแต่สามารถใช่ได้อย่างชำนาญ', 'img_6460896906fa2.jpg'),
(10, 'ฮาชิบิระ อิโนะสุเกะ', 'หน้ากากหมูป่าผู้มาพร้อมความแข็งแกร่ง ตัวละครหลักอีกหนึ่งตัวจากอนิเมะ ดาบพิฆาตอสูร (Demon Slayer)  ผู้ร่วมเดินทางปราบอสูรมากับ ทันจิโร่ และ เซ็นนิตซึ โดยเขานั้นมีทักษะและพลังที่สามารถเลียนแบบสัตว์ป่าได้อย่างน่าอัศจรรย์ ไม่ว่าจะเป็นประสาทสัมผัสการรับรู้ ท่วงท่าการเคลื่อนไหว รวมถึงทักษะในการต่อสู้อย่างปราณสัตว์ป่าอีกด้วย', 1, 1, 164, 0, 'อิโนะสุเกะ เป็นนักดาบที่เก่งกาจและมีพรสวรรค์มาก เนื่องจากเขาสามารถเรียนรู้การหายใจแบบรวมสมาธิด้วยตัวเขาเอง และพัฒนารูปแบบการหายใจของเขาเองที่เรียกว่าการหายใจแบบสัตว์ร้ายตามสัญชาตญาณของเขา นอกจากนี้ เขายังมีพรสวรรค์อย่างเหลือเชื่อ เขามีประสาทสัมผัสและมีความยืดหยุ่นของร่างกายเหนือมนุษย์\r\n\r\nเนื่องจากโตมากับหมูป่าบนภูเขา เขาจึงซึมซับลักษณะนิสัยของพวกมันมาใช้ และเริ่มผสมผสานเข้ากับสไตล์การต่อสู้ของเขา ทั้งสไตล์การต่อสู้ด้วยมือเปล่า และสไตล์การใช้ดาบของเขาจึงชวนให้นึกถึงสัตว์ป่าเป็นอย่างมาก พร้อมด้วย ประสาทสัมผัสของเขา ที่ได้รับการฝึกฝนจนถึงขีดสุดจนเขามีรูปแบบของการรับรู้นอกประสาทสัมผัสที่ทำให้เขาสามารถตรวจจับสิ่งต่าง ๆ ที่อยู่นอกขอบเขตการรับรู้ปกติได้', 'img_64608c7f9db37.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clan`
--

CREATE TABLE `clan` (
  `clan_id` int(4) NOT NULL COMMENT 'ไอดีเผ่าพันธุ์',
  `clan_name` varchar(64) NOT NULL COMMENT 'ชื่อเผ่าพันธุ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clan`
--

INSERT INTO `clan` (`clan_id`, `clan_name`) VALUES
(1, 'มนุษย์'),
(2, 'อสูร');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(4) NOT NULL COMMENT 'ไอดีเพศ',
  `gender_name` varchar(64) NOT NULL COMMENT 'ชื่อเพศ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'ชาย'),
(2, 'หญิง'),
(3, 'อื่นๆ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`character_id`);

--
-- Indexes for table `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`clan_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character`
--
ALTER TABLE `character`
  MODIFY `character_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีไตัวละคร', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clan`
--
ALTER TABLE `clan`
  MODIFY `clan_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีเผ่าพันธุ์', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีเพศ', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
