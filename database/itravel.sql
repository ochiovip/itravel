-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 11:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `id` int(10) NOT NULL,
  `attrID` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrDetail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrCategory` int(10) NOT NULL DEFAULT 1,
  `attrStatusCode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `provinceCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateCreate` date DEFAULT NULL,
  `timeCreate` time DEFAULT NULL,
  `createBy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateUpdate` date DEFAULT NULL,
  `timeUpdate` time DEFAULT NULL,
  `updateBy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`id`, `attrID`, `attrName`, `attrDetail`, `attrCategory`, `attrStatusCode`, `provinceCode`, `dateCreate`, `timeCreate`, `createBy`, `dateUpdate`, `timeUpdate`, `updateBy`, `isActive`) VALUES
(1, 'attr-230102-1', 'วัดพระแก้ว', '<p style=\"color: rgb(75, 75, 75); font-family: Roboto, Arial, sans-serif; font-size: medium;\">วัดคู่บ้านคู่เมืองของประเทศไทย และกรุงรัตนโกสินทร์ ก็คือที่นี่ค่ะ<span style=\"font-weight: bolder;\">&nbsp;วัดพระศรีรัตนศาสดาราม</span>&nbsp;หรือ&nbsp;<span style=\"font-weight: bolder;\">วัดพระเเก้ว&nbsp;</span>เป็นวัดในพระบรมมหาราชวังเช่นเดียวกับวัดพระศรีสรรเพชญ์ ซึ่งเป็นวัดในพระราชวังหลวงในสมัยอยุธยา</p><p style=\"color: rgb(75, 75, 75); font-family: Roboto, Arial, sans-serif; font-size: medium;\">&nbsp; &nbsp; &nbsp; นอกจากนี้ภายในวัดพระศรีรัตนศาสดารามเป็นที่ประดิษฐาน&nbsp;<span style=\"font-weight: bolder;\">พระพุทธมหามณีรัตนปฏิมากร</span>&nbsp;หรือ&nbsp;<span style=\"font-weight: bolder;\">พระแก้วมรกต</span>&nbsp;ซึ่งอัญเชิญมามาจากกรุงเวียงจันทน์ เป็นวัดหลวงที่สำคัญในพระราชพิธีต่างๆ และยังเป็นแหล่งท่องเที่ยวที่สำคัญของประเทศไทยเราอีกด้วย</p>', 1, '1', '10', '2023-01-02', '12:21:45', 'm-000000-0', NULL, NULL, NULL, 1),
(2, 'attr-230102-2', ' ถ้ำมรกต เกาะมุก ตรัง', '<p style=\"color: rgb(75, 75, 75); font-family: Roboto, Arial, sans-serif; font-size: medium;\"><span style=\"font-weight: bolder;\">เกาะมุก</span>&nbsp;ได้ชื่อว่า “ถ้ำมรกตอันล้ำค่าแห่งอันดามัน” เป็นเกาะที่ใหญ่เป็นอันดับที่ 3 ของท้องทะเลตรังเลยทีเดียว นอกจากชาดหาดที่สวยงามแล้ว เกาะมุกยังมีจุดเด่นที่&nbsp;<span style=\"font-weight: bolder;\">ถ้ำมรกต</span>&nbsp;ถ้ำน้ำเล็กๆ ซึ่งมีความยาวประมาณ 80 เมตร นักท่องเที่ยวจะต้องลอยตัวฝ่าความมืดเพื่อเข้าไปภายในถ้ำและต้องเป็นช่วงเวลาน้ำลงเท่านั้นด้วย ภายในถ้ำน้ำทะเลจะมีสีเขียวคล้ายมรกตสวยงามอลังการ Unseen สุดๆ</p>', 1, '1', '92', '2023-01-02', '12:25:50', 'm-000000-0', NULL, NULL, NULL, 0),
(3, 'attr-230102-3', 'จุดชมวิวเนินมะปราง พิษณุโลก - new', '<p style=\"color: rgb(75, 75, 75); font-family: Roboto, Arial, sans-serif; font-size: medium;\">&nbsp; ถ้ามีโอกาสไปเที่ยวพิษณุโลก แต่ไม่ได้ไปนั่งชิงช้าต้นไม้ ที่&nbsp;<span style=\"font-weight: bolder;\">จุดชมวิวเนินมะปราง</span>&nbsp;ซึ่งตั้งอยู่ใน&nbsp;<span style=\"font-weight: bolder;\">บ้านสวนชมวิวภูรักไทย&nbsp;</span>เราบอกเลยว่าพลาดอย่างแรง!!! เพราะเป็น&nbsp;<span style=\"font-weight: bolder;\">จุดชมวิวที่สวยที่สุดในพิษณุโลก</span>&nbsp;ทีเดียวค่ะ</p><p style=\"color: rgb(75, 75, 75); font-family: Roboto, Arial, sans-serif; font-size: medium;\">&nbsp; &nbsp; &nbsp; จากจุดชมวิวบนต้นไม้นี้สามารถมองออกไปเห็นทิวเขาและพื้นที่ราบรอยต่อของ 5 จังหวัด คือ นครสวรรค์ ลพบุรี พิจิตร เพชรบูรณ์ และพิษณุโลก เวลาที่แนะนำให้มาเลยก็คือช่วงปลายฝนต้นหนาว เพราะจะได้เห็นทั้งทะเลหมอกและพระอาทิตย์ขึ้นยามเช้าเลยทีเดียว</p><p style=\"color: rgb(75, 75, 75); font-family: Roboto, Arial, sans-serif; font-size: medium;\"><span class=\"oqcyycmt def1xbws oygrvhab o9f14d3k kvgmc6g5 jedpkwab sgc6yxs4 qb00l2mb mufzhxvi\" data-testid=\"emoji\" data-lexical-node-type=\"emoji\" data-lexical-node-json=\"{&quot;detail&quot;:0,&quot;format&quot;:0,&quot;mode&quot;:&quot;token&quot;,&quot;style&quot;:&quot;&quot;,&quot;text&quot;:&quot;????&quot;,&quot;type&quot;:&quot;emoji&quot;,&quot;version&quot;:1,&quot;rawText&quot;:&quot;????&quot;,&quot;size&quot;:20,&quot;src&quot;:&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/tb9/1.5/20/1f340.png&quot;}\" data-lexical-editor-key=\"tumwl\">????&nbsp;</span>ดูรีวิวเต็มๆ ที่&nbsp;<span style=\"color: rgb(0, 0, 255);\"><a href=\"https://travel.trueid.net/detail/dBbAaqJJZld\" target=\"_blank\" rel=\"noopener\" style=\"cursor: pointer; text-decoration-skip-ink: auto; color: rgb(0, 0, 255); word-break: break-all;\">จุดชมวิวเนินมะปราง ที่เที่ยวพิษณุโลก นั่งชิงช้า ชมวิวสวย หลักล้าน!</a></span></p>', 1, '1', '65', '2023-01-02', '12:29:27', 'm-000000-0', '2023-01-02', '14:43:01', 'm-000000-0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attraction_attachment`
--

CREATE TABLE `attraction_attachment` (
  `id` int(10) NOT NULL,
  `attrID` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isFirstImage` int(1) NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `createBy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attraction_attachment`
--

INSERT INTO `attraction_attachment` (`id`, `attrID`, `filename`, `description`, `isFirstImage`, `date`, `time`, `createBy`, `isActive`) VALUES
(1, 'attr-230102-1', 'attr_img_63b269e9b3004.jpg', NULL, 1, '2023-01-02', '12:21:45', 'm-000000-0', 1),
(2, 'attr-230102-2', 'attr_img_63b26adeed8df.jpg', NULL, 1, '2023-01-02', '12:25:50', 'm-000000-0', 1),
(3, 'attr-230102-3', 'attr_img_63b28b05de917.jpg', NULL, 1, '2023-01-02', '14:43:01', 'm-000000-0', 1),
(5, 'attr-230102-1', 'attr_img_63b29e13a0964.jpg', NULL, 0, '2023-01-02', '16:04:19', 'm-000000-0', 1),
(6, 'attr-230102-1', 'attr_img_63b29eb593c42.jpg', NULL, 0, '2023-01-02', '16:07:01', 'm-000000-0', 1),
(7, 'attr-230102-1', 'attr_img_63b29ef2f07df.jpg', NULL, 0, '2023-01-02', '16:08:02', 'm-000000-0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attraction_status`
--

CREATE TABLE `attraction_status` (
  `id` int(10) NOT NULL,
  `attrStatusCode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attraction_status`
--

INSERT INTO `attraction_status` (`id`, `attrStatusCode`, `attrName`, `isActive`) VALUES
(1, 'attrs-0001', 'เปิดให้บริการ', 1),
(2, 'attrs-0002', 'ปิดปรับปรุงชั่วคราว', 1),
(3, 'attrs-0003', 'ปิดให้บริการ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(10) NOT NULL,
  `provinceCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinceName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `provinceCode`, `provinceName`, `isActive`) VALUES
(1, '00', 'ไม่ได้เลือกจังหวัด', 1),
(2, '10', 'กรุงเทพมหานคร', 1),
(3, '11', 'สมุทรปราการ', 1),
(4, '12', 'นนทบุรี', 1),
(5, '13', 'ปทุมธานี', 1),
(6, '14', 'พระนครศรีอยุธยา', 1),
(7, '15', 'อ่างทอง', 1),
(8, '16', 'ลพบุรี', 1),
(9, '17', 'สิงห์บุรี', 1),
(10, '18', 'ชัยนาท', 1),
(11, '19', 'สระบุรี', 1),
(12, '20', 'ชลบุรี', 1),
(13, '21', 'ระยอง', 1),
(14, '22', 'จันทบุรี', 1),
(15, '23', 'ตราด', 1),
(16, '24', 'ฉะเชิงเทรา', 1),
(17, '25', 'ปราจีนบุรี', 1),
(18, '26', 'นครนายก', 1),
(19, '27', 'สระแก้ว', 1),
(20, '30', 'นครราชสีมา', 1),
(21, '31', 'บุรีรัมย์', 1),
(22, '32', 'สุรินทร์', 1),
(23, '33', 'ศรีสะเกษ', 1),
(24, '34', 'อุบลราชธานี', 1),
(25, '35', 'ยโสธร', 1),
(26, '36', 'ชัยภูมิ', 1),
(27, '37', 'อานาจเจริญ', 1),
(28, '38', 'บึงกาฬ', 1),
(29, '39', 'หนองบัวลาภู', 1),
(30, '40', 'ขอนแก่น', 1),
(31, '41', 'อุดรธานี', 1),
(32, '42', 'เลย', 1),
(33, '43', 'หนองคาย', 1),
(34, '44', 'มหาสารคาม', 1),
(35, '45', 'ร้อยเอ็ด', 1),
(36, '46', 'กาฬสินธุ์', 1),
(37, '47', 'สกลนคร', 1),
(38, '48', 'นครพนม', 1),
(39, '49', 'มุกดาหาร', 1),
(40, '50', 'เชียงใหม่', 1),
(41, '51', 'ลาพูน', 1),
(42, '52', 'ลาปาง', 1),
(43, '53', 'อุตรดิตถ์', 1),
(44, '54', 'แพร่', 1),
(45, '54', 'แพร่', 1),
(46, '55', 'น่าน', 1),
(47, '56', 'พะเยา', 1),
(48, '57', 'เชียงราย', 1),
(49, '58', 'แม่ฮ่องสอน', 1),
(50, '60', 'นครสวรรค์', 1),
(51, '61', 'อุทัยธานี', 1),
(52, '62', 'กาแพงเพชร', 1),
(53, '63', 'ตาก', 1),
(54, '64', 'สุโขทัย', 1),
(55, '65', 'พิษณุโลก', 1),
(56, '66', 'พิจิตร', 1),
(57, '67', 'เพชรบูรณ์', 1),
(58, '70', 'ราชบุรี', 1),
(59, '71', 'กาญจนบุรี', 1),
(60, '72', 'สุพรรณบุรี', 1),
(61, '73', 'นครปฐม', 1),
(62, '74', 'สมุทรสาคร', 1),
(63, '75', 'สมุทรสงคราม', 1),
(64, '76', 'เพชรบุรี', 1),
(65, '77', 'ประจวบคีรีขันธ์', 1),
(66, '80', 'นครศรีธรรมราช', 1),
(67, '81', 'กระบี่', 1),
(68, '82', 'พังงา', 1),
(69, '83', 'ภูเก็ต', 1),
(70, '84', 'สุราษฎร์ธานี', 1),
(71, '85', 'ระนอง', 1),
(72, '86', 'ชุมพร', 1),
(73, '90', 'สงขลา', 1),
(74, '91', 'สตูล', 1),
(75, '92', 'ตรัง', 1),
(76, '93', 'พัทลุง', 1),
(77, '94', 'ปัตตานี', 1),
(78, '95', 'ยะลา', 1),
(79, '96', 'นราธิวาส', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regis_type`
--

CREATE TABLE `regis_type` (
  `id` int(11) NOT NULL,
  `regisTypeID` int(2) DEFAULT NULL,
  `regisTypeName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regis_type`
--

INSERT INTO `regis_type` (`id`, `regisTypeID`, `regisTypeName`, `isActive`) VALUES
(1, 1, 'สมัครสามาชิกผ่าหน้าเว็บไซต์', 1),
(2, 2, 'สร้างโดยผู้ดูแลระบบ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `roleID` int(5) NOT NULL DEFAULT 100,
  `roleName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `roleID`, `roleName`, `isActive`) VALUES
(1, 100, 'ผู้ใช้งานทั่วไป', 1),
(2, 300, 'ผู้สร้าง/ผู้แก้ไข', 1),
(3, 500, 'ผู้ดูแลระบบ (Admin)', 1),
(4, 900, 'ผู้ดูแลระบบสูงสุด (Supper Admin)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userMemberCode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPrefix` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userFirstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userLastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roleID` int(5) NOT NULL DEFAULT 100,
  `regisTypeID` int(2) NOT NULL DEFAULT 1,
  `dateCreate` date DEFAULT NULL,
  `timeCreate` time DEFAULT NULL,
  `createBy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateUpdate` date DEFAULT NULL,
  `timeUpdate` time DEFAULT NULL,
  `updateBy` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `userMemberCode`, `userPrefix`, `userFirstname`, `userLastname`, `roleID`, `regisTypeID`, `dateCreate`, `timeCreate`, `createBy`, `dateUpdate`, `timeUpdate`, `updateBy`, `isActive`) VALUES
(1, 'admin', '12345678', 'admin@admin.com', 'm-000000-0', 'นาย', 'ผู้ดูแลระบบ', 'สูงสุด', 900, 1, '2022-09-10', '12:21:53', 'm-000000-0', NULL, NULL, NULL, 1),
(2, 'haha', '12345678', 'haha@test.com', 'm-220924-2', 'นาย', 'หัวเราะ', 'เพราะอะไร', 100, 1, '2022-09-10', '12:21:53', 'm-220924-2', '2022-11-21', '22:34:13', 'm-000000-0', 0),
(3, '', '', '', 'm-220924-3', 'นาย', '', '', 100, 1, '2022-09-24', '11:54:13', 'm-220924-3', '2023-01-02', '14:27:02', 'm-000000-0', 0),
(4, 'userx', '12345678', 'userx@xxx.com', 'm-221121-4', 'นาย', 'สวัสดี', 'วันจันทร์', 100, 2, '2022-11-21', '21:51:27', 'm-000000-0', NULL, NULL, NULL, 0),
(5, 'usery', '12345678', 'usery@xxx.com', 'm-221121-5', 'นาย', 'หอมกลิ่น', 'อะไรดี', 100, 2, '2022-11-21', '21:55:15', 'm-000000-0', NULL, NULL, NULL, 1),
(6, '', '', '', 'm-221231-6', '', '', '', 100, 2, '2022-12-31', '14:36:39', 'm-000000-0', NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attraction_attachment`
--
ALTER TABLE `attraction_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attraction_status`
--
ALTER TABLE `attraction_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis_type`
--
ALTER TABLE `regis_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attraction_attachment`
--
ALTER TABLE `attraction_attachment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attraction_status`
--
ALTER TABLE `attraction_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `regis_type`
--
ALTER TABLE `regis_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
