-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 08:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `match_day`
--

CREATE TABLE `match_day` (
  `matchid` int(10) NOT NULL,
  `first_team` varchar(255) NOT NULL,
  `second_team` varchar(255) NOT NULL,
  `sports_type` varchar(255) NOT NULL,
  `day` date NOT NULL,
  `start_time` time NOT NULL,
  `round` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `match_day`
--

INSERT INTO `match_day` (`matchid`, `first_team`, `second_team`, `sports_type`, `day`, `start_time`, `round`, `result`) VALUES
(1, 'Blue', 'Green', 'Basketball', '2023-04-04', '09:00:00', 'รองแรก', 'Green'),
(2, 'Green', 'Yellow', 'Football', '2023-04-04', '13:00:00', 'รองแรก', 'Yellow'),
(3, 'Red', 'Yellow', 'Volleyball', '2023-04-04', '09:00:00', 'รองแรก', 'Red'),
(4, 'Red', 'Yellow', 'Basketball', '2023-04-05', '13:00:00', 'รองแรก', 'Red'),
(5, 'Blue', 'Green', 'Volleyball', '2023-04-05', '13:00:00', 'รองแรก', 'Blue'),
(6, 'Red', 'Blue', 'Football', '2023-04-05', '09:00:00', 'รองแรก', 'Red'),
(7, 'Green', 'Yellow', 'Volleyball', '2023-04-06', '09:00:00', 'รองชนะเลิศ', 'Yellow'),
(8, 'Blue', 'Yellow', 'Basketball', '2023-04-06', '09:00:00', 'รองชนะเลิศ', 'Yellow'),
(9, 'Blue', 'Green', 'Football', '2023-04-06', '13:00:00', 'รองชนะเลิศ', 'Green'),
(10, 'Red', 'Green', 'Basketball', '2023-04-07', '09:00:00', 'ชิงชนะเลิศ', 'Red'),
(11, 'Red', 'Blue', 'Volleyball', '2023-04-07', '09:00:00', 'ชิงชนะเลิศ', 'Blue'),
(12, 'Red', 'Yellow', 'Football', '2023-04-07', '13:00:00', 'ชิงชนะเลิศ', 'Red');

-- --------------------------------------------------------

--
-- Table structure for table `team_medal`
--

CREATE TABLE `team_medal` (
  `teamid` int(10) NOT NULL,
  `color_team` varchar(255) NOT NULL,
  `medal_gold` int(10) NOT NULL,
  `medal_silver` int(10) NOT NULL,
  `medal_bronze` int(10) NOT NULL,
  `medal_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `team_medal`
--

INSERT INTO `team_medal` (`teamid`, `color_team`, `medal_gold`, `medal_silver`, `medal_bronze`, `medal_total`) VALUES
(1, 'Red', 2, 1, 0, 3),
(2, 'Blue', 1, 0, 0, 1),
(3, 'Green', 0, 1, 1, 2),
(4, 'Yellow', 0, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `name`, `lastname`, `color`, `sport`) VALUES
(1, 'นาย', 'เจริญ', 'นามสีฐาน', 'Yellow', 'Basketball'),
(2, 'นาย', 'ชัยยา', 'คำสมน้อย', 'Blue', 'Basketball'),
(3, 'นาย', 'มานพ', 'เจริญกุล', 'Red', 'Basketball'),
(4, 'นาย', 'ประดิษฐ์', 'กาบจันทร์', 'Blue', 'Volleyball'),
(5, 'นางสาว', 'พัชรี', 'นิมา', 'Blue', 'Basketball'),
(6, 'นาย', 'พิทักษ์', 'นามสิงห์ขันธ์', 'Green', 'Football'),
(7, 'นาย', 'สกลเกียรติ', 'กวีพิชชาพัชร', 'Yellow', 'Basketball'),
(8, 'นาย', 'ปองพล', 'อ่อนขาว', 'Yellow', 'Basketball'),
(9, 'นาย', 'ตรรกวิทย์', 'คำก้อน', 'Yellow', 'Volleyball'),
(10, 'นาย', 'พรหมมินทร์ ', 'เถาวัลย์ดี', 'Red', 'Basketball'),
(11, 'นาย', 'สุวัฒน์', 'บุญทศ', 'Yellow', 'Football'),
(12, 'นาย', 'ภควัต', 'ศรีจารุเดช', 'Blue', 'Volleyball'),
(13, 'นาย', 'ประเวทย์', 'พรหมจิตรานนท์', 'Blue', 'Basketball'),
(14, 'นาย', 'จักรพันธ์', 'ด้วงคำจันทร์', 'Green', 'Football'),
(15, 'นาย', 'ภาณุวัฒน์', 'ลาดลงเมือง', 'Red', 'Basketball'),
(16, 'นาย', 'สมชาย', 'แก้วบุญเรือง', 'Blue', 'Football'),
(17, 'นาย', 'กองพัน', 'คุ้มไข่น้ำ', 'Red', 'Volleyball'),
(18, 'นาย', 'สิงห์ทอง', 'พรมโสดา', 'Yellow', 'Volleyball'),
(19, 'นาย', 'มานพ', 'ลีใส', 'Red', 'Football'),
(20, 'นาย', 'บวรกิตติ์', 'พันธ์เสถียร', 'Green', 'Basketball'),
(21, 'นาย', 'ธีระเวทย์ ', 'พระชัย', 'Yellow', 'Football'),
(22, 'นาย', 'วีระสุนทร', 'เคนกา', 'Blue', 'Volleyball'),
(23, 'นาย', 'โกวิทย์', 'พลหาญ', 'Red', 'Basketball'),
(24, 'นาย', 'อาทิตย์', 'ยั่งยืน', 'Blue', 'Football'),
(25, 'นาย', 'พงษ์พันธ์', 'ขยันเยี่ยม', 'Red', 'Football'),
(26, 'นาย', 'ศุภชัย', 'สมบัติหา', 'Green', 'Volleyball'),
(27, 'นาย', 'จักร์พล', 'ศรีกลชาญ', 'Yellow', 'Football'),
(28, 'นาย', 'ครรชิต', 'จันทร์โท', 'Green', 'Volleyball'),
(29, 'นาย', 'นารถพงศ์', 'พระชัย', 'Green', 'Football'),
(30, 'นาง', 'ไพศรี', 'วรรณแสงทอง', 'Green', 'Basketball'),
(31, 'นางสาว', 'กฤษณา', 'โพธิ์ศรีขาม', 'Blue', 'Volleyball'),
(32, 'นาย', 'สิทธิพันธุ์', 'สายบุญลี', 'Red', 'Basketball'),
(33, 'นางสาว', 'จีรนันท์', 'จุทอง', 'Green', 'Basketball'),
(34, 'นาย', 'บรรชา', 'สุภาวงศ์', 'Green', 'Football'),
(35, 'นาย', 'เกรียงไกร', 'ไตรคุ้มกัน', 'Blue', 'Volleyball'),
(36, 'นางสาว', 'วิมลพร', 'เอี่ยมอมรพันธ์', 'Yellow', 'Basketball'),
(37, 'นาย', 'อนุชา', 'ไชยนิฮม', 'Yellow', 'Volleyball'),
(38, 'นาย', 'นิระ', 'หมื่นภูเขียว', 'Green', 'Football'),
(39, 'นาย', 'ธีรพงษ์', 'บุญพา', 'Blue', 'Basketball'),
(40, 'นาง', 'กรรณิการ์', 'เรืองศรีวิรัตน์', 'Yellow', 'Volleyball'),
(41, 'นาง', 'เสาวรภย์', 'เจริญกุล', 'Yellow', 'Basketball'),
(42, 'นาง', 'นภา ', 'อาษารัฐ', 'Green', 'Football'),
(43, 'นาง', 'จีระนันท์', 'พลยางนอก', 'Red', 'Football'),
(44, 'นาง', 'อรวรรณ', 'แก่นเชียงสา', 'Green', 'Basketball'),
(45, 'นาง', 'มยุรี', 'ยงกำลัง', 'Green', 'Volleyball'),
(46, 'นาง', 'ธิดาสวรรค์', 'สิทธิเราะ', 'Red', 'Football'),
(47, 'นาย', 'ธนพล', 'รังสิมานพ', 'Green', 'Basketball'),
(48, 'นาย', 'สุพัฒน์', 'ศรีพุทธา', 'Red', 'Volleyball'),
(49, 'นาย', 'สุขุม', 'ดวงเพียอ้ม', 'Blue', 'Volleyball'),
(50, 'นาย', 'เบ็ญ', 'โคตรทุม', 'Blue', 'Basketball'),
(51, 'นาง', 'นวพร', 'อินทร์อร่ามวงษ์', 'Red', 'Football'),
(52, 'นาง', 'พูนสิน', 'คำพิบูลย์', 'Green', 'Basketball'),
(53, 'นาง', 'สุทธดา', 'ทรงจอหอ', 'Green', 'Basketball'),
(54, 'นาย', 'เทียนชัย', 'ภูคณะ', 'Red', 'Football'),
(55, 'นาง', 'คำภา', 'วงษ์คำอุด', 'Blue', 'Volleyball'),
(56, 'นาง', 'นงเยาว์', 'ทองเมืองน้อย', 'Yellow', 'Volleyball'),
(57, 'นาง', 'โสภา', 'ภักดี', 'Red', 'Volleyball'),
(58, 'นาง', 'ลัดดาวัลย์', 'กำไรงาม', 'Yellow', 'Volleyball'),
(59, 'นาง', 'ลัดดาวัลย์', 'กำไรงาม', 'Blue', 'Football'),
(60, 'นาง', 'ปรีชญา', 'จันทรประทักษ์', 'Red', 'Basketball'),
(61, 'นางสาว', 'พรรณี', 'พันบุรี', 'Red', 'Volleyball'),
(62, 'นางสาว', 'กัญญณัท', 'วรศรี', 'Green', 'Volleyball'),
(63, 'นาง', 'บุญส่ง', 'ชมทรัพย์เจริญ', 'Green', 'Football'),
(64, 'นาง', 'วิไลพร', 'ชมภูเขียว', 'Yellow', 'Football'),
(65, 'นาง', 'สุมนา', 'เยาวมาตย์', 'Red', 'Volleyball'),
(66, 'นาง', 'นุชจะรินทร์', 'ตาดี', 'Green', 'Volleyball'),
(67, 'นาง', 'นวพร', 'ก้อนจันทร์', 'Green', 'Basketball'),
(68, 'นาย', 'ธัมรงค์', 'กิจโป้', 'Blue', 'Football'),
(69, 'นาย', 'ไว', 'บุตรพิเศษ', 'Yellow', 'Basketball'),
(70, 'นาง', 'เสริมสุข', 'วิสุทธิญาณภิรมย์', 'Yellow', 'Volleyball'),
(71, 'นาย', 'รุ่งอรุณ', 'จันทมาตย์', 'Yellow', 'Basketball'),
(72, 'นาง', 'สุวิมล', 'กล่อมวงศ์', 'Yellow', 'Basketball'),
(73, 'นาง', 'ประพรรณวดี', 'ปราชญ์กุลวงศ์', 'Red', 'Football'),
(74, 'นาง', 'อนุรักษ์', 'ใยแก้ว', 'Blue', 'Basketball'),
(75, 'นาย', 'มนตรี', 'พันเดช', 'Green', 'Basketball'),
(76, 'นาง', 'อำพร', 'นามสีฐาน', 'Green', 'Basketball'),
(77, 'นาง', 'ยุพิน', 'พานิชย์พะเนาว์', 'Green', 'Football'),
(78, 'นาง', 'ปัทมา', 'กาญจนพัฒน์', 'Yellow', 'Football'),
(79, 'นาย', 'บุญทัน', 'ขันอาสา', 'Blue', 'Football'),
(80, 'นาง', 'สมจิตร', 'ยามี', 'Yellow', 'Basketball'),
(81, 'นาย', 'สุรทิน', 'วงษ์ดวง', 'Blue', 'Volleyball'),
(82, 'นางสาว', 'นิภาภรณ์', 'บุษราคัม', 'Red', 'Volleyball'),
(83, 'นางสาว', 'สุคนธ์ทิพย์', 'สื่อเกียรติก้อง', 'Red', 'Volleyball'),
(84, 'นาย', 'สมพงษ์', 'บัวคำภา', 'Green', 'Basketball'),
(85, 'นางสาว', 'อรวรรณ', 'ชินทะนาม', 'Red', 'Volleyball'),
(86, 'นาง', 'สุพิน', 'มูลอาษา', 'Blue', 'Football'),
(87, 'นางสาว', 'วริฐา', 'ทองเหง้า', 'Blue', 'Basketball'),
(88, 'นาย', 'คำปน', 'ซาซุม', 'Green', 'Basketball'),
(89, 'นาง', 'ธรธัญญา', 'ธารเลิศ', 'Green', 'Basketball'),
(90, 'นางสาว', 'สุกัญญา', 'วรรณสิทธิ์', 'Green', 'Football'),
(91, 'นางสาว', 'จตุพร', 'พิทักษ์พลรัตน์', 'Yellow', 'Football'),
(92, 'นาย', 'สาธร', 'พลศักดิ์', 'Green', 'Football'),
(93, 'นางสาว', 'ณัฐพัชร', 'แสงนิรันดร์', 'Green', 'Basketball'),
(94, 'นางสาว', 'อารีย์วรรณ', 'ละม้ายพันธ์', 'Blue', 'Volleyball'),
(95, 'นาง', 'อภิญญา', 'พันธ์สวัสดิ์', 'Green', 'Basketball'),
(96, 'นาง', 'ธนธรณ์', 'เพียดสิงห์', 'Blue', 'Football'),
(97, 'นางสาว', 'บุษราภรณ์', 'อินทร์ตาแสง', 'Yellow', 'Volleyball'),
(98, 'นาง', 'สุนีย์', 'เพียจันทร์', 'Red', 'Basketball'),
(99, 'นางสาว', 'พัชราพร', 'ด่านธนธรณ์', 'Green', 'Volleyball'),
(100, 'นางสาว', 'อรชร', 'สอนสะอาด', 'Red', 'Football'),
(101, 'นาย', 'สุรวุฒิ', 'สุพร', 'Red', 'Football'),
(102, 'นางสาว', 'ทิพากร', 'ชัยสงค์', 'Yellow', 'Volleyball'),
(103, 'นางสาว', 'จารุณี', 'นวลบุญมา', 'Blue', 'Basketball'),
(104, 'นาย', 'วงศกร', 'วารินทร์กุต', 'Blue', 'Volleyball'),
(105, 'นาย', 'อาทิตย์', 'นรปติ', 'Green', 'Basketball'),
(106, 'นางสาว', 'สุวรรณี', 'มังดินดำ', 'Blue', 'Basketball'),
(107, 'นาง', 'บัวไข', 'สังข์ปรีชา', 'Green', 'Football'),
(108, 'นางสาว', 'หนูเพียร', 'ปักนอก', 'Red', 'Football'),
(109, 'นาย', 'ประวิทย์', 'ศรีวงษา', 'Green', 'Football'),
(110, 'นาย', 'ภาณุพงศ์', 'ต.ประเสริฐ', 'Red', 'Basketball'),
(111, 'นางสาว', 'ลัดดาภรณ์', 'อินตาหามแห', 'Green', 'Basketball'),
(112, 'นาย', 'ทรงวุฒิ', 'หิรัญมาพร', 'Yellow', 'Football'),
(113, 'นางสาว', 'เสาร์', 'นามสีฐาน', 'Blue', 'Basketball'),
(114, 'นางสาว', 'สมร', 'กรมรัฐ', 'Red', 'Football'),
(115, 'นาง', 'เตียนใจ', 'แสงอุทัย', 'Blue', 'Basketball'),
(116, 'นาง', 'รัศมี', 'เจริญกุล', 'Yellow', 'Football'),
(117, 'นาง', 'บัวพันธ์', 'แก่นหามูล', 'Blue', 'Volleyball'),
(118, 'นางสาว', 'จิระพร', 'บุญมา', 'Blue', 'Football'),
(119, 'นาง', 'สุกัญญา', 'เกิดศิลป์', 'Blue', 'Volleyball'),
(120, 'นาย', 'สงคราม', 'มีเศษ', 'Green', 'Volleyball'),
(121, 'นางสาว', 'สุวรรณา', 'สีนาเพียง', 'Yellow', 'Football'),
(122, 'นางสาว', 'เต็มศิริ', 'เชื้อเอี่ยมพันธ์', 'Red', 'Volleyball'),
(123, 'นางสาว', 'สุกัญญา', 'คำมูล', 'Red', 'Basketball'),
(124, 'นาย', 'ธนากร', 'ตั้งจิตประสงค์', 'Yellow', 'Football'),
(125, 'นางสาว', 'เสาวนา', 'เสียงสนั่น', 'Yellow', 'Volleyball'),
(126, 'นาย', 'กริช', 'ผาบจันทร์สิงห์', 'Yellow', 'Volleyball'),
(127, 'นาง', 'ปรานี', 'ธรรมจินดา', 'Green', 'Volleyball'),
(128, 'นางสาว', 'บุตรตรี', 'คนซื่อ', 'Yellow', 'Football'),
(129, 'นาย', 'สมพร', 'จันทร์โสม', 'Blue', 'Football'),
(130, 'นาย', 'สมใจ', 'ขันอาสา', 'Red', 'Football'),
(131, 'นางสาว', 'พัชราภรณ์ ', 'เสนาศูนย์', 'Blue', 'Volleyball'),
(132, 'นางสาว', 'ธิตา', 'พีรพลพัฒน์พงษ์', 'Green', 'Football'),
(133, 'นางสาว', 'นันทิดา', 'โนนสว่าง', 'Blue', 'Volleyball'),
(134, 'นางสาว', 'วราพร', 'ศรีไพร', 'Blue', 'Basketball'),
(135, 'นาย', 'นครินทร์', 'พูลศรี', 'Green', 'Basketball'),
(136, 'นาย', 'มานะชัย', 'สอนเพ็ง', 'Green', 'Basketball'),
(137, 'นาย', 'วิทยา', 'ศิริสาร', 'Blue', 'Volleyball'),
(138, 'นาง', 'ลำพรรณ์', 'ดีรักษา', 'Yellow', 'Football'),
(139, 'นางสาว', 'จานิพร', 'ทะเสนฮด', 'Blue', 'Basketball'),
(140, 'นาย', 'ธีรฉัตร', 'อนิวรรตเมธี', 'Green', 'Football'),
(141, 'นาง', 'ลำใย', 'คำจำปา', 'Blue', 'Basketball'),
(142, 'นางสาว', 'นิตย์', 'บุญจะรักษ์', 'Green', 'Basketball'),
(143, 'นาย', 'อิทธิพงศ์', 'โคแก้ว', 'Blue', 'Football'),
(144, 'นาย', 'สุภวัฒน์', 'คันทะพรม', 'Green', 'Volleyball'),
(145, 'นางสาว', 'นิรมล ', 'ภูครองนาค', 'Yellow', 'Volleyball'),
(146, 'นาย', 'สำราญ', 'ศรีโสภา', 'Yellow', 'Volleyball'),
(147, 'นางสาว', 'ศิวาการ', 'ชัชมนมาศ', 'Red', 'Volleyball'),
(148, 'นางสาว', 'ณัฐธิดา', 'ทึนรถ', 'Green', 'Volleyball'),
(149, 'นางสาว', 'ธิดารัตน์', 'บุตรราช', 'Yellow', 'Basketball'),
(150, 'นาย', 'พิพัฒน์พงศ์', 'พันธุ์รัตน์', 'Blue', 'Football'),
(151, 'นางสาว', 'วันทนีย์ ', 'นาคะผิว', 'Blue', 'Basketball'),
(152, 'นางสาว', 'นันทวรรณ', 'ชาญวิชา', 'Blue', 'Volleyball'),
(153, 'นาง', 'หนูเตียน', 'จันเล', 'Yellow', 'Football'),
(154, 'นางสาว', 'ณัฎฐา ', 'ศักดิ์ศิลาพร', 'Yellow', 'Football'),
(155, 'นางสาว', 'สุกฤตา', 'มหาหิง', 'Blue', 'Football'),
(156, 'นางสาว', 'อัมพร', 'บัวเริง', 'Red', 'Football'),
(157, 'นางสาว', 'บงกช', 'ผาสุข', 'Green', 'Volleyball'),
(158, 'นางสาว', 'นันทรัตน์', 'จิตระการ', 'Blue', 'Volleyball'),
(159, 'นางสาว', 'มาริษา', 'นันสมบัติ', 'Blue', 'Volleyball'),
(160, 'นาง', 'จันทร์ศรี ', 'สำราญพิทักษ์', 'Yellow', 'Football'),
(161, 'นาย', 'วรการ', 'ฮุนตระกูล', 'Blue', 'Volleyball'),
(162, 'นาย', 'ภาคภูมิ', 'อริกพันธุ์', 'Green', 'Football'),
(163, 'นางสาว', 'เมตตา', 'บัวพันธ์', 'Red', 'Volleyball'),
(164, 'นางสาว', 'ณัฐพร', 'ชบา', 'Green', 'Basketball'),
(165, 'นางสาว', 'สุทธิชา', 'ปะโอปตินัง', 'Blue', 'Basketball'),
(166, 'นางสาว', 'วิริยา ', 'ส่วยลี', 'Yellow', 'Basketball'),
(167, 'นางสาว', 'พิมพ์พจี', 'บางประอินทร์', 'Green', 'Basketball'),
(168, 'นาย', 'ศักดิ์ดา', 'จำปานา', 'Yellow', 'Volleyball'),
(169, 'นาย', 'ณัฐพล ', 'โสกุดเลา', 'Red', 'Volleyball'),
(170, 'นาย', 'พีรณัฐ', 'อัญสุรีย์', 'Blue', 'Volleyball'),
(171, 'นางสาว', 'วรุณพร', 'ดวงใจ', 'Green', 'Basketball'),
(172, 'นางสาว', 'ศรีรัตน์', 'สุวรรณคม', 'Blue', 'Football'),
(173, 'นาย', 'นครินทร์', 'เทอดเกียรติกุล', 'Green', 'Football'),
(174, 'นางสาว', 'กัญญาภัค', 'สมปัญญา', 'Red', 'Volleyball'),
(175, 'นางสาว', 'นลินรัตน์', 'เครือทองศรี', 'Blue', 'Football'),
(176, 'นาง', 'เจนจิรา', 'มะโนชมภู', 'Yellow', 'Football'),
(177, 'นาง', 'เพชราภรณ์', 'ภูครองตา', 'Red', 'Football'),
(178, 'นางสาว', 'สุวรรณา', 'วงษ์จันทอง', 'Green', 'Football'),
(179, 'นางสาว', 'ลลิตา', 'ประจักษ์รัตนกุล', 'Green', 'Football'),
(180, 'นางสาว', 'เบญจวรรณ', 'รวดเร็ว', 'Red', 'Basketball'),
(181, 'นาย', 'แสวง', 'แสนแก้ว', 'Green', 'Volleyball'),
(182, 'นาย', 'สนอง', 'นามเบ้าโฮง', 'Green', 'Basketball'),
(183, 'นาย', 'สุริยะ', 'สรรพโส', 'Blue', 'Basketball'),
(184, 'นาย', 'ศุภวิชญ์', 'วิไลลักษณ์', 'Yellow', 'Football');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match_day`
--
ALTER TABLE `match_day`
  ADD PRIMARY KEY (`matchid`);

--
-- Indexes for table `team_medal`
--
ALTER TABLE `team_medal`
  ADD PRIMARY KEY (`teamid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `match_day`
--
ALTER TABLE `match_day`
  MODIFY `matchid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team_medal`
--
ALTER TABLE `team_medal`
  MODIFY `teamid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
