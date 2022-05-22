-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2022 at 10:36 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_cyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `level` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `username`, `level`, `point`, `lab`) VALUES
(1, 'admin', 1, 25, 'sql'),
(2, 'admin', 2, 25, 'sql'),
(3, 'admin', 3, 25, 'sql'),
(4, 'admin', 4, 25, 'sql'),
(5, 'admin', 1, 10, 'security'),
(6, 'admin', 2, 10, 'security'),
(7, 'admin', 3, 10, 'security'),
(8, 'admin', 4, 20, 'security'),
(9, 'admin', 5, 25, 'security'),
(10, 'admin', 6, 25, 'security'),
(11, 'admin', 1, 10, 'xss'),
(12, 'admin', 2, 10, 'xss'),
(13, 'admin', 3, 10, 'xss'),
(14, 'admin', 4, 20, 'xss'),
(15, 'admin', 5, 25, 'xss'),
(16, 'admin', 6, 25, 'xss'),
(17, 'ffi3y', 1, 10, 'security'),
(18, 'ffi3y', 1, 10, 'xss'),
(19, 'ffi3y', 2, 10, 'xss'),
(20, 'ffi3y', 3, 10, 'xss'),
(21, 'ffi3y', 4, 20, 'xss'),
(22, 'ffi3y', 5, 25, 'xss'),
(23, 'ffi3y', 1, 25, 'sql'),
(24, 'ffi3y', 2, 25, 'sql'),
(25, 'ffi3y', 3, 25, 'sql'),
(26, 'ffi3y', 4, 25, 'sql'),
(27, 'ffi3y', 2, 10, 'security'),
(28, 'ffi3y', 3, 10, 'security'),
(29, 'ffi3y', 4, 20, 'security'),
(30, 'ffi3y', 5, 25, 'security'),
(31, 'ffi3y', 6, 25, 'security'),
(32, 'pk17', 1, 10, 'xss'),
(33, 'pk17', 2, 10, 'xss'),
(34, 'pk17', 3, 10, 'xss'),
(35, 'pk17', 4, 20, 'xss'),
(36, 'pk17', 5, 25, 'xss'),
(37, 'pk17', 6, 25, 'xss'),
(38, 'pk17', 1, 25, 'sql'),
(39, 'pk17', 2, 25, 'sql'),
(40, 'pk17', 3, 25, 'sql'),
(41, 'pk17', 4, 25, 'sql'),
(42, 'pk17', 1, 10, 'security'),
(43, 'pk17', 2, 10, 'security'),
(44, 'pk17', 3, 10, 'security'),
(45, 'pk17', 4, 20, 'security'),
(46, 'pk17', 5, 25, 'security'),
(47, 'pk17', 6, 25, 'security'),
(48, 'maxmoewmoew', 1, 10, 'xss'),
(49, 'maxmoewmoew', 2, 10, 'xss'),
(50, 'maxmoewmoew', 3, 10, 'xss'),
(51, 'maxmoewmoew', 4, 20, 'xss'),
(52, 'maxmoewmoew', 5, 25, 'xss'),
(53, 'maxmoewmoew', 6, 25, 'xss'),
(54, 'maxmoewmoew', 1, 25, 'sql'),
(55, 'maxmoewmoew', 2, 25, 'sql'),
(56, 'maxmoewmoew', 3, 25, 'sql'),
(57, 'maxmoewmoew', 4, 25, 'sql'),
(58, 'maxmoewmoew', 1, 10, 'security'),
(59, 'maxmoewmoew', 2, 10, 'security'),
(60, 'maxmoewmoew', 3, 10, 'security'),
(61, 'maxmoewmoew', 4, 20, 'security'),
(62, 'maxmoewmoew', 5, 25, 'security'),
(63, 'maxmoewmoew', 6, 25, 'security'),
(64, 'masriderearth', 1, 10, 'xss'),
(65, 'masriderearth', 2, 10, 'xss'),
(66, 'masriderearth', 3, 10, 'xss'),
(67, 'masriderearth', 4, 20, 'xss'),
(68, 'masriderearth', 5, 25, 'xss'),
(69, 'masriderearth', 6, 25, 'xss'),
(70, 'masriderearth', 1, 25, 'sql'),
(71, 'masriderearth', 2, 25, 'sql'),
(72, 'masriderearth', 3, 25, 'sql'),
(73, 'masriderearth', 4, 25, 'sql'),
(74, 'masriderearth', 1, 10, 'security'),
(75, 'masriderearth', 2, 10, 'security'),
(76, 'masriderearth', 3, 10, 'security'),
(77, 'masriderearth', 4, 20, 'security'),
(78, 'masriderearth', 5, 25, 'security'),
(79, 'masriderearth', 6, 25, 'security'),
(80, 'astars', 1, 10, 'xss'),
(81, 'astars', 2, 10, 'xss'),
(82, 'astars', 3, 10, 'xss'),
(83, 'astars', 4, 20, 'xss'),
(84, 'astars', 5, 25, 'xss'),
(85, 'astars', 6, 25, 'xss'),
(86, 'astars', 1, 25, 'sql'),
(87, 'astars', 2, 25, 'sql'),
(88, 'astars', 1, 10, 'security'),
(89, 'astars', 2, 10, 'security'),
(90, 'astars', 3, 10, 'security'),
(91, 'astars', 4, 20, 'security'),
(92, 'astars', 5, 25, 'security'),
(93, 'astars', 6, 25, 'security'),
(94, 'kaoawesomedevil', 1, 10, 'security'),
(95, 'kaoawesomedevil', 2, 10, 'security'),
(96, 'kaoawesomedevil', 3, 10, 'security'),
(97, 'kaoawesomedevil', 4, 20, 'security'),
(98, 'kaoawesomedevil', 5, 25, 'security'),
(99, 'kaoawesomedevil', 6, 25, 'security'),
(100, 'kaoawesomedevil', 1, 25, 'sql'),
(101, 'kaoawesomedevil', 2, 25, 'sql'),
(102, 'kaoawesomedevil', 3, 25, 'sql'),
(103, 'kaoawesomedevil', 4, 25, 'sql');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `html` text NOT NULL,
  `button` text NOT NULL,
  `img` text NOT NULL,
  `vip` varchar(255) NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `name`, `description`, `html`, `button`, `img`, `vip`) VALUES
(1, 'Cross - Site Scripting', 'Cross Site Scripting ( XSS ) ', '', '', 'https://media.geeksforgeeks.org/wp-content/uploads/20190516152959/Cross-Site-ScriptingXSS.png', 'false'),
(2, 'SQL Injection', 'Sql Injection', '', '', 'https://miro.medium.com/max/1066/1*6YoaC40Xt8n2ASMldhijWg.jpeg', 'false'),
(3, 'Cyber Security', 'Web Security', '', '', 'https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/content/cover_image_file/cover_image/686299/retina_1708x683_cover-Redesign-WebSecurityVulnerabilities-Luke_Newsletter-04d5cdafdaf363f0bc6aa723a391c343-91ee4d294318c967b26187f4d67a8351.png', 'false'),
(4, 'Secret XSS', 'XSS Secret', '', '', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/1200px-Black_colour.jpg', 'false'),
(5, 'Secret SQL Injection', 'Sql Injection', '', '', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/1200px-Black_colour.jpg', 'false'),
(6, 'Secret Cyber Security', 'Web Security', '', '', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Black_colour.jpg/1200px-Black_colour.jpg', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `secret`
--

CREATE TABLE `secret` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `lesson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secret`
--

INSERT INTO `secret` (`id`, `username`, `lesson`) VALUES
(1, 'admin', 1),
(2, 'ffi3y', 1),
(3, 'ffi3y', 2),
(4, 'ffi3y', 3),
(5, 'pk17', 1),
(6, 'pk17', 2),
(7, 'pk17', 3),
(8, 'maxmoewmoew', 1),
(9, 'maxmoewmoew', 2),
(10, 'maxmoewmoew', 3),
(11, 'masriderearth', 1),
(12, 'masriderearth', 2),
(13, 'masriderearth', 3),
(14, 'astars', 1),
(15, 'astars', 3),
(16, 'kaoawesomedevil', 3),
(17, 'kaoawesomedevil', 2),
(18, 'admin', 3),
(19, 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `secret_history`
--

CREATE TABLE `secret_history` (
  `id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secret_history`
--

INSERT INTO `secret_history` (`id`, `lesson_id`, `question`, `answer`, `username`) VALUES
(1, 4, 1, 3, 'admin'),
(2, 4, 2, 1, 'admin'),
(3, 4, 3, 1, 'admin'),
(4, 4, 4, 2, 'admin'),
(5, 4, 5, 2, 'admin'),
(6, 5, 1, 2, 'admin'),
(7, 5, 2, 1, 'admin'),
(8, 5, 3, 2, 'admin'),
(9, 5, 4, 2, 'admin'),
(10, 5, 5, 2, 'admin'),
(11, 6, 1, 1, 'admin'),
(12, 6, 2, 4, 'admin'),
(13, 6, 3, 4, 'admin'),
(14, 6, 4, 3, 'admin'),
(15, 6, 5, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `setting_home`
--

CREATE TABLE `setting_home` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `button` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_home`
--

INSERT INTO `setting_home` (`id`, `details`, `button`) VALUES
(1, '<center>\r\n<h3><b>เกี่ยวกับฉัน</b></h3>\r\n <hr style=\"width: 150px; height: 2px; margin-top: 5px;\">\r\nWhen we started Codecademy, our goal was to give anyone in the world the ability to learn the skills they’d need to succeed in the 21st century. We set out to create a new, interactive way of learning — making it engaging, flexible, and accessible for as many people as possible. Since then, we have helped millions of people worldwide unlock modern technical skills and reach their full potential through code.\r\n\r\n<hr>\r\n<h3><b>Our Mission</b></h3>\r\n <hr style=\"width: 150px; height: 2px; margin-top: 5px;\">\r\nWe want to create a world where anyone can build something meaningful with technology, and everyone has the learning tools, resources, and opportunities to do so. Code contains a world of possibilities — all that’s required is the curiosity and drive to learn. At Codecademy, we are committed to empowering all people, regardless of where they are in their coding journeys, to continue to learn, grow, and make an impact on the world around them.\r\n<hr>', 'เริ่มเรียนกันเลย');

-- --------------------------------------------------------

--
-- Table structure for table `setting_prehome`
--

CREATE TABLE `setting_prehome` (
  `id` int(11) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_prehome`
--

INSERT INTO `setting_prehome` (`id`, `text1`, `text2`, `text3`) VALUES
(1, 'เรียนรู้ภัยทางโลกออนไลน์', 'เว็บไซต์สื่อการเรียนรู้ภัยทางโลกออนไลน์', 'เว็บไซต์สื่อการเรียนรู้ภัยทางโลกออนไลน์เว็บไซต์สื่อการเรียนรู้ภัยทางโลกออนไลน์เว็บไซต์สื่อการเรียนรู้ภัยทางโลกออนไลน์เว็บไซต์สื่อการเรียนรู้ภัยทางโลกออนไลน์');

-- --------------------------------------------------------

--
-- Table structure for table `setting_rank`
--

CREATE TABLE `setting_rank` (
  `id` int(11) NOT NULL,
  `silver` int(11) NOT NULL,
  `gold` int(11) NOT NULL,
  `hacker` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_rank`
--

INSERT INTO `setting_rank` (`id`, `silver`, `gold`, `hacker`) VALUES
(1, 5, 30, 50);

-- --------------------------------------------------------

--
-- Table structure for table `skill_chart`
--

CREATE TABLE `skill_chart` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `lesson_1` text NOT NULL,
  `lesson_2` text NOT NULL,
  `lesson_3` text NOT NULL,
  `lesson_4` text NOT NULL,
  `lesson_5` text NOT NULL,
  `lesson_6` text NOT NULL,
  `lesson_7` text NOT NULL,
  `lesson_8` text NOT NULL,
  `skill_1` text NOT NULL,
  `skill_2` text NOT NULL,
  `skill_3` text NOT NULL,
  `skill_4` text NOT NULL,
  `skill_5` text NOT NULL,
  `skill_6` text NOT NULL,
  `skill_7` text NOT NULL,
  `skill_8` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_chart`
--

INSERT INTO `skill_chart` (`id`, `name`, `lesson_1`, `lesson_2`, `lesson_3`, `lesson_4`, `lesson_5`, `lesson_6`, `lesson_7`, `lesson_8`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`) VALUES
(1, 'SQL INJECT', 'SQL Injection', 'Cross - Site Scripting', 'Cyber Security', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '0.4', '0', '0', '0', '1', '0', '0', '0'),
(2, 'CROSS SITE SCRIPTING', 'Cross - Site Scripting', 'SQL Injection', 'Cyber Security', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '1', '0', '0', '1', '0', '0', '0', '0'),
(3, 'WEB SECURITY', 'Cyber Security', 'Cross - Site Scripting', 'SQL Injection', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '0', '0', '0', '0', '0', '1', '0', '0'),
(4, 'SCRIPTING', 'Cross - Site Scripting', 'SQL Injection', 'Cyber Security', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '0.3', '0.3', '0.4', '1', '1', '1', '0', '0'),
(5, 'FUNDAMENTALS', 'Cross - Site Scripting', 'SQL Injection', 'Cyber Security', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '0.1', '0.1', '0.1', '0.1', '0.1', '0.1', '0', '0'),
(6, 'WEB EXPLOITATION', 'Cross - Site Scripting', 'SQL Injection', 'Cyber Security', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '0.4', '0.4', '0.2', '1', '1', '1', '0', '0'),
(7, 'ENCRTPTION', 'Cross - Site Scripting', 'SQL Injection', 'Cyber Security', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '0.2', '0.2', '0.2', '0', '0', '0', '0', '0'),
(8, 'COMMAND', 'Cross - Site Scripting', 'SQL Injection', 'Cyber Security', 'Secret XSS', 'Secret SQL Injection', 'Secret Cyber Security', '', '', '0.5', '0.5', '0.5', '1', '1', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `html` text NOT NULL,
  `choice_1` text NOT NULL,
  `choice_2` text NOT NULL,
  `choice_3` text NOT NULL,
  `choice_4` text NOT NULL,
  `answer` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `hide` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `point`, `html`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `answer`, `lesson_id`, `hide`) VALUES
(1, 2, 'คำตอบใดอธิบายเกี่ยวกับ <b>Cross - Site Scripting</b> ได้ถูกต้องที่สุด ?', 'จัดการคำสั่ง <b>SQL</b> ที่ประกอบไปด้วยข้อมูลที่ถูกจัดเก็บไว้ในฐานข้อมูล', 'การใช้ <b>Cookie</b> ที่ส่งไปพร้อมกับทุกคำขอของ <b>Browser</b>', 'การจำกัด <b>Browser</b> ให้โหลดเนื้อหาจากแหล่งที่มาบางแห่ง', 'ทำการฝัง <b>JavaScript, CSS</b> หรือ <b>HTML</b> ลงไปใน <b>Web Application</b>', 4, 1, 'false'),
(3, 2, 'เมื่อเราทำการแสดงผลการป้อนข้อมูลของผู้ใช้ตามที่เป็นอยู่ในมุมมองโดยใช้ <b>Razor</b> ดังนี้<br>\r\n<input class=\"inputtest\" disabled value=\"@Model.Address. An attacker enters: <script>alert(\'XSS\');</script> as the address.\">\r\n<br>และจะเกิดอะไรขึ้นเมื่อมุมมองปรากฏขึ้น ? <b>( Alert )</b>', 'เมื่อ <b>Hacker</b> สามารถเข้าถึงข้อมูลของ <b>Browser</b> ได้แล้ว พวกเขาก็จะสามารถควบคุม <b>Browser</b> ได้อย่างสมบูรณ์', '<b>Hacker</b> จะสามารถเข้าถึงข้อมูลประจำตัวที่ใช้เข้าสู่ระบบอุปกรณ์ของผู้ใช้ได้', '<b>Hacker</b> จะสามารถเข้าถึงอุปกรณ์ของเหยื่อได้อย่างเต็มที่', '-', 1, 1, 'false'),
(33, 2, '<b>SQL</b> ย่อมาจากอะไร?', 'Structured Query Language', 'Stuctured Query Languages', 'Structured Query Languages', 'Stuctured Query Language', 1, 2, 'false'),
(34, 2, 'ตัวย่อของซอฟต์แวร์ที่ควบคุมฐานข้อมูลคืออะไร?', 'DBMS', 'DSMB', 'DOM', 'Stored', 1, 2, 'false'),
(168, 2, 'แนวทางและขั้นตอนการทำให้ระบบมีความปลอดภัย แบบใดที่องค์กรต้องกำหนดรูปแบบของระบบ <b>Web Application</b> ?', 'Design', 'Requirments', 'Implement', 'Testing', 1, 3, 'false'),
(166, 2, 'การโจมตีที่ทำให้ระบบทำงานหนักและหยุดชะงัก คือการโจมตีประเภทใด ?', 'SQL Injection', 'Broken Access Control', 'Denial of Service', '-', 3, 3, 'false'),
(167, 2, 'ภัยคุกคามด้านการปลอมแปลง ที่ผู้โจมตีทำการเปลี่ยนตัวตนของผู้ใช้ด้วยวิการเปลี่ยนค่า <b>Parameter</b> ?', 'Cross - Site Scripting', 'Cookie Snooping', 'Cookie Poisoning', 'Cross-site Request Forger', 3, 3, 'false'),
(189, 2, 'คุณลักษณะใดของคุกกี้ที่จะห้ามไม่ให้เบราว์เซอร์ส่งผ่านการเชื่อมต่อที่ไม่ปลอดภัย ?\r\n', 'SSL', 'Httponly', 'Nohttp', 'Secure', 4, 3, 'true'),
(164, 2, 'การโจมตีที่พยายามเข้าถึง <b>Log</b> ของระบบเพื่อทำการลบข้อมูล คือการโจมตีประเภทใด ?', 'Log Tampering', 'Buffer Overflow', 'Form Tampering', '-', 1, 3, 'false'),
(165, 2, 'การเข้าถึงระบบโดยไม่ได้รับอนุญาติประเภทใด ที่ผู้โจมตีพยายามละเมิดการเข้าถึงโดยหาจุดที่ไม่มีการควบคุม', 'SQL Injection', 'Cross - Site Scripting', 'Broken Access Control', '-', 3, 3, 'false'),
(163, 2, 'ภัยคุกคามใด ที่อยู่ในประเภทของการทำให้ระบบประมวลผลผิดพลาด', 'Log Tampering , SQL Injection', 'Improper Error Handling', 'Denial of Service', '-', 2, 3, 'false'),
(162, 2, 'ภัยคุกคามใด ที่อยู่ในประเภทของการทำให้ระบบหยุดชะงัก\r\n', 'Buffer Overflow , Denial of Service', 'Broken Access Control , Directory Traversal', 'Log Tampering , Form Tampering', '-', 1, 3, 'false'),
(160, 2, '<b>Ransomware</b> เป็นการโจมตีที่ละเมิดด้านใด ?', 'Integrity', 'Availability', 'Confidentiality', '-', 2, 3, 'false'),
(161, 2, 'ภัยคุกคามประเภทใด ที่ผู้โจมตีพยายามสุ่มแฟ้มข้อมูลในระบบ <b>Web Application</b> ของเรา ?', 'Buffer Overflow', 'Directory Traversal', 'Log Tampering', 'Broken Access Control', 2, 3, 'false'),
(157, 2, '<b>Secure Socket Layer ( SSL )</b> คืออะไร ?', 'เป็นเทคนิคการเข้าไปทำการเปลี่ยนแปลงหน้าตาของเว็บไซต์', 'คือเทคนิคการเข้ารหัสช่องทางการสื่อสาร โดยใช้วิธีแบบ สมมาตรและ อสมมาตร', '-', '-', 2, 3, 'false'),
(158, 2, 'ประเภทของการโจมตีที่ละเมิด <b>Confidentiality</b> มีอะไรบ้าง ?', 'SQL Injection , Brust force attack', 'DoS , DDoS', 'Web Defacement', '-', 1, 3, 'false'),
(159, 2, 'การโจมตีทีมีการละเมิดด้าน <b>Integrity</b> มีการโจมตีแบบใดบ้าง ?', 'Web Defacement , Ransomware', 'Brust force attack , Web Defacement', 'Ransomware , DDoS', 'Change configuration , Web Defacement', 4, 3, 'false'),
(155, 2, '<b>Web Server</b> หมายความว่าอะไร ?', 'เป็น <b>Hardware</b> และ <b>Software</b> ที่มีไว้ส่งมอบเนื้อหาต่างๆที่เข้าถึงได้ผ่าน <b>Internet</b>', 'เป็น <b>Software</b> ที่มีไว้ส่งเนื้อหาต่างๆที่สามารถเข้าถึงได้', '-', '-', 1, 3, 'false'),
(156, 2, ' <b>SSL</b> ย่อมาจากอะไร ?', 'Sesure Socet Layer', 'Secure Socket Layer', 'Secure Soket Layer', '-', 2, 3, 'false'),
(57, 2, 'โครงสร้างแบบกริดที่เก็บข้อมูลชื่ออะไร?', 'select', 'table', '-', '-', 2, 2, 'false'),
(58, 2, 'เราสามารถสร้างคีย์หลักได้กี่คีย์ในหนึ่งตาราง', '4', '6', '2', '1', 4, 2, 'false'),
(59, 2, '<b>Operator</b> อะไรที่ใช้ในการดึงข้อมูลการจับคู่รูปแบบออกจากฐานข้อมูล', 'select', 'LIKE', 'where', 'select', 2, 2, 'false'),
(60, 2, 'ชนิดข้อมูลใด ที่ใช้เก็บวัตถุ <b>JSON</b>', 'NVarchar ', 'Varchar', '-', '-', 1, 2, 'false'),
(61, 2, 'ทุกเว็บแอปพลิเคชั่นสามารถเสี่ยงต่อการฉีด SQL ได้หรือไม่?', 'ไม่ ช่องโหว่ SQL injection สามารถแสดงได้เฉพาะในแอปพลิเคชันที่เข้าถึงฐานข้อมูล SQL', 'ได้ ช่องโหว่ SQL injection สามารถแสดงได้เฉพาะในแอปพลิเคชันที่เข้าถึงฐานข้อมูล SQL ', '-', '-', 1, 2, 'false'),
(62, 2, 'อะไรคือความแตกต่างระหว่างการ SQL injection และ blind SQL injection?', 'ในช่องโหว่ SQL Injection แบบ blind คุณจะได้รับการตอบสนองที่เหมือนกัน ซึ่งสอดคล้องกับเงื่อนไขจริงและเท็จในการ Inject', 'ในช่องโหว่ SQL Injection แบบ blind คุณจะได้รับการตอบสนองที่แตกต่างกันเพียงสองแบบเท่านั้น ซึ่งสอดคล้องกับเงื่อนไขจริงและเท็จในการ Inject', '-', '-', 2, 2, 'false'),
(63, 2, 'ควรใช้เทคนิคที่ใช้ UNION เมื่อเป็นไปได้หรือไม่', 'ไม่ได้ เพราะเนื่องจากไม่อนุญาตให้คุณดึงข้อมูลในปริมาณที่เหมาะสมกับคำขอแต่ละรายการ', 'ไม่ได้ เพราะเนื่องจากอนุญาตให้คุณดึงข้อมูลในปริมาณที่เหมาะสมกับคำขอแต่ละรายการ', 'ได้ เพราะเนื่องจากไม่อนุญาตให้คุณดึงข้อมูลในปริมาณที่เหมาะสมกับคำขอแต่ละรายการ', 'ได้ เพราะเนื่องจากอนุญาตให้คุณดึงข้อมูลในปริมาณที่เหมาะสมกับคำขอแต่ละรายการ', 4, 2, 'false'),
(64, 2, 'จากโค้ด <b>select * from users where username like \'%p\';</b>  สามารถหาชื่อผู้ใช้ใดได้', 'Onodera', 'Bank', 'Champ', 'John', 3, 2, 'false'),
(65, 2, 'การโจมตีโดยใช้ <b>time base</b> เป็นการโจมตีรูปแบบไหนของ SQL', 'Bypassing Authentication', 'Blind SQL Injection', 'Piggy-backed Queries', '-', 2, 2, 'false'),
(66, 2, 'การ SQL Injectionl ใช้ในการออกแบบฐานข้อมูล ?', 'ถูก', 'ผิด', '-', '-', 1, 2, 'false'),
(67, 2, 'เราใช้ SQL Injection ในจุดไหนได้บ้าง', 'asp', 'java', 'php', 'ถูกทั้งหมด', 4, 2, 'false'),
(68, 2, 'การ <b>SQL Injection</b> ในเว็บแอปพลิเคชันเท่านั้น ข้อความข้างต้นถูกหรือผิด', 'ถูก', 'ผิด', '-', '-', 2, 2, 'false'),
(69, 2, 'ข้อไหนคือ<b>คอลัมน์</b>ในฐานข้อมูล', 'record', 'field', 'row', 'data', 2, 2, 'false'),
(70, 2, 'ข้อใดไม่ใช่ฟังก์ชันรวม', 'SUM()', 'POW()', 'AVG()', 'COUNT()', 2, 2, 'false'),
(71, 2, 'ข้อใดหมายถึงสัญลักษณ์ <b>\"ทั้งหมด\"</b>', '*', '%', '!', '&', 1, 2, 'false'),
(72, 2, '<b>select</b> ในข้อใดจะพบผู้ใช้ที่มี <b>\'er\'</b> ที่ใดก็ได้ ในชื่อของพวกเขา', 'select * from users where username like \'%er\';', 'select * from users where username like \'%er%\';', 'select * from users where username like \'$er$\';', 'select * from users where username like \'er%\';', 2, 2, 'false'),
(73, 2, 'SQL ในข้อใด เพื่อใช้พยายามทำลายฐานข้อมูล?', 'SQL Injection           ', 'SQL Interception              ', 'SQL Attack              ', 'SQL Misuse', 1, 2, 'false'),
(74, 2, 'ข้อใดคืออักขระส่งคืนข้อมูลทั้งหมดที่พบในตาราง', '%', '*', '/  ', '#', 2, 2, 'false'),
(75, 2, 'ลำดับของอนุประโยคที่ถูกต้องในคำสั่ง SQL คืออะไร?', 'SELECT, FROM, ORDER BY, WHERE', 'SELECT, WHERE, FROM, ORDER BY', 'SELECT, FROM, WHERE, ORDER BY', 'WHERE, FROM, SELECT, ORDER BY ', 3, 2, 'false'),
(76, 2, 'ด้วย SQL คุณจะเลือกคอลัมน์ทั้งหมดจากตารางชื่อ <b>\'บุคคล\'</b> ได้อย่างไร', 'SELECT [all] FROM Persons', 'SELECT *.Persons', 'SELECT * FROM Persons', 'SELECT Persons', 3, 2, 'false'),
(77, 2, 'คำใดช่วยให้คุณสามารถระบุว่าต้องตรงตามเงื่อนไขมากกว่าหนึ่ง?', 'Also', 'And', 'or', 'Where', 2, 2, 'false'),
(78, 2, 'คำใดหายไปจากคำสั่ง <b>SQL</b> ต่อไปนี้', 'With', 'Where', 'frrom', 'And', 3, 2, 'false'),
(79, 2, 'หากคุณต้องการกรองข้อมูล คุณจะใช้ประโยคใด', 'Where', 'Orrder by', 'from', 'Select', 1, 2, 'false'),
(80, 2, 'คำสั่ง  <b>SELECT</b> ใดต่อไปนี้ สามารถรวบรวมผลลัพธ์จากทั้งสองตารางและรวมไว้ในชุดผลลัพธ์เดียว', 'SELECT DesignerID, Designer FROM Designersv', 'SELECT DesignerID, Name FROM Designers', 'SELECT name,address,city,postcode from customers UNION SELECT company,address,city,postcode from suppliers;', 'SELECT DesignerID AND Designer FROM Designers', 3, 2, 'false'),
(81, 2, 'เราจะส่งคืนรายการทั้งหมดในตารางรายการโดยเรียงลำดับจากราคาต่ำสุดไปยังราคาสูงสุดได้อย่างไร', 'SELECT * FROM Items ORDER BY Price ASCENDING', 'SELECT * FROM Items ORDER BY Price ASC', 'SELECT * FROM Items BY Price LOWEST TO HIGHEST', 'SELECT * FROM Items ORDER BY Price DESC', 2, 2, 'false'),
(82, 2, 'หากเราต้องอัปเดตหมายเลขโทรศัพท์สำหรับ DesignerID \'SMI01\' ในตาราง \'Designer\' เท่านั้น เราจะทำได้อย่างไร?', 'UPDATE Designer SET PhoneNo = \'01224123456\' WHERE DesignerID = \'SMI01\'', 'UPDATE PhoneNo = \'01224123456\' FROM Designer WHERE DesignerID = \'SMI01\'', 'UPDATE Designer SET PhoneNo = \'01224123456\'', 'UPDATE Designer (PhoneNo) VALUES (\'01224123456\')', 1, 2, 'false'),
(83, 2, 'คำสั่ง <b>SQL</b> ใดที่จะเพิ่มบันทึกลงในฐานข้อมูล', 'INSERT INTO Designer VALUES (\'SMI01\', \'M Smith\', \'mail@msmith.com\', \'01224123456\')', 'INSERT VALUES (\'SMI01\', \'M Smith\', \'mail@msmith.com\', 01224123456\') INTO Designer', 'INSERT (\'SMI01\', \'M Smith\', \'mail@msmith.com\', \'01224123456\') INTO Designer', 'INSERT Designer INTO VALUES (\'\'SMI01\', \'M Smith\', \'mail@msmith.com\', \'01224123456\')', 1, 2, 'false'),
(84, 2, 'เราจะเขียนสคริปต์แบบสอบถาม SQL เพื่อเลือก \'คำอธิบาย\' จากตารางรายการอย่างไร', 'SELECT Item.Description', 'EXTRACT Description FROM Item', 'SELECT Item FROM Description', 'SELECT Description FROM Item', 4, 2, 'false'),
(154, 2, 'การตั้งค่าสถานะ <b>HttpOnly</b> บน <b>Cookie</b> จะมีประโยชน์อย่างไรเมื่อจัดการกับ <b>XSS</b> ?', 'เมื่อ <b>Hacker</b> มีการส่งคำขอ <b>HTTP</b> ตัว <b>Cookie</b> จะไม่ถูกส่งไปด้วย', '<b>Cookie</b> จะถูกเข้ารหัสโดยอัตโนมัติเมื่อเข้าถึงจาก <b>JavaScript</b>', 'หากการโจมตีสำเร็จ ผู้โจมตีจะไม่สามารถเข้าถึง <b>Cookie</b> ได้', '<b>Cookie</b> จะสามารถใช้ได้บนเซิร์ฟเวอร์เท่านั้น', 3, 3, 'false'),
(153, 2, 'อะไรคือเหตุผลที่อาจจะทำให้เกิด <b>XSS</b> ?', 'ข้อมูลที่ผู้ใช้ป้อนซ้ำตามหน้าเว็บ', 'ไม่ได้ใช้ <b>HtmlEncoder</b> ใน <b>ASP.NET Core</b> หรือ <b>HttpUtility</b> ใน <b>ASP.NET</b> ขณะพัฒนา <b>Application</b>', '<b>Cookie</b> ไม่มีการ <b>HttpOnly Attribute</b>', 'ไม่มีการตรวจสอบว่า <b>URL</b> ได้ทำการส่งไปยังหน้าจอการเข้าสู่ระบบเพื่อดูว่าเป็น <b>URL</b> ในเครื่อง', 1, 3, 'false'),
(148, 2, 'เพราะเหตุใด <b>XSS</b> จึงเป็นอันตราย ?', 'เมื่อ <b>Hacker</b> สามารถเข้าถึงข้อมูลของ <b>Browser</b> ได้แล้ว พวกเขาก็จะสามารถควบคุม <b>Browser</b> ได้อย่างสมบูรณ์', '<b>Hacker</b> จะสามารถเข้าถึงอุปกรณ์ของเหยื่อได้อย่างเต็มที่', 'วิธีเดียวที่จะไม่ทำให้ถูกโจมตี คือ ไม่เข้าเว็บไซต์ ', '<b>Hacker</b> จะสามารถเข้าถึงข้อมูลประจำตัวที่ใช้เข้าสู่ระบบอุปกรณ์ของผู้ใช้ได้', 1, 3, 'false'),
(149, 2, 'ถ้าเราต้องการจะใช้ค่าในส่วน <b>String.</b> การค้นหา <b>URL</b> ปัจจุบันและแสดงผลในส่วน <b>HTML</b> บน <b>Razor page.</b>\r\n<br><b>คำถามคือ</b> ข้อใดคือมาตรการที่มีประสิทธิภาพในการปกป้อง <b>XSS</b> ทุกรูปแบบ ?</br>', 'เข้ารหัสโดยใช้ <b>JavaScriptEncoder</b>', 'ตรวจสอบค่ากับรายการที่อนุญาต', 'แปลงเป็นตัวแปร <b>Razor</b>', 'เข้ารหัสด้วย <b>HtmlEncoder</b>', 2, 3, 'false'),
(150, 2, '<b>CSP</b> ย่อมาจากอะไร ?', 'Cloud License Program', 'Cloud Solution Provider', 'Certified Safety Professional', 'Content Security Policy', 4, 3, 'false'),
(151, 2, '<b>CSP</b> สามารถช่วยเราจาก <b>XSS</b> ได้อย่างไร ?', 'ไม่ว่าจะกำหนดค่า <b>CSP</b> อย่างไร ก็จะไม่สามารถเรียกใช้ <b>JavaScript</b> จากตำแหน่งภายนอกได้', 'ไม่มีทางที่ <b>Hacker</b> จะขโมยคุกกี้ได้ต่อให้ทำ <b>XSS</b> สำเร็จ', 'เนื่องจากตำแหน่งของ <b>JavaScript</b> และ <b>Styles</b> ถูกจำกัด เลยมีความเป็นไปได้ที่ <b>Hacker</b> จะถูกจำกัดการโจมตี', '<b>Browser</b> จะเข้ารหัสข้อมูลของผู้ใช้ทั้งหมดโดยอัตโนมัติเมื่อเปิดใช้งาน <b>CSP</b>', 3, 3, 'false'),
(152, 2, '<b>CSS styles</b> เกี่ยวข้องยังไงกับ <b>XSS</b> ?', 'การโจมตีของ <b>XSS</b> ทำได้โดยใช้ <b>CSS</b> เท่านั้น', '<b>CSS</b> สามารถปิดใช้งานได้เมื่อโจมตี <b>XSS</b> สำเร็จ', 'เมื่อ <b>CSS</b> ถูก <b>Injection</b> เข้าไป <b>Hacker</b> จะสามารถเปลี่ยน <b>UI</b> หน้าเว็บเพื่อหลอกล่อผู้ใช้ให้ทำการกดเข้าไปในหน้านั้น', 'เครื่องมือ <b>CSS</b> ของ <b>Browser</b> สามารถช่วยเปิดเผยช่องโหว่ <b>XSS</b> ได้', 3, 3, 'false'),
(147, 2, 'คำตอบใดอธิบายเกี่ยวกับ <b>Cross - Site Scripting</b> ได้ถูกต้องที่สุด ?', 'จัดการคำสั่ง <b>SQL</b> ที่ประกอบไปด้วยข้อมูลที่ถูกจัดเก็บไว้ในฐานข้อมูล', 'การใช้ <b>Cookie</b> ที่ส่งไปพร้อมกับทุกคำขอของ <b>Browser</b>', 'การจำกัด <b>Browser</b> ให้โหลดเนื้อหาจากแหล่งที่มาบางแห่ง', 'ทำการฉีด <b>JavaScript, CSS หรือ HTML</b> ลงไปใน <b>Web Application</b>', 4, 3, 'false'),
(98, 2, 'HTML DOM ย่อมาจากอะไร?', 'Definite Oriented Model', 'Document Object Model', 'Document Oriented Model', '-', 2, 1, 'false'),
(99, 2, 'ลักษณะการโจมตีด้วย XSS มีกี่ประเภท?\r\n', '2', '3', '4', '5', 2, 1, 'false'),
(100, 2, 'ช่องโหว่ Reflected XSS คืออะไร?\r\n', 'การแทรก JavaScript โดยเก็บ JavaScript ลงในฐานข้อมูล', 'การแทรก JavaScipt โดยไม่เก็บ JavaScipt ลงในฐานข้อมูล', 'การแทรก JavaScript ลงในฐานข้อมูลเพื่อให้ Web Application เรียก Source Code ขึ้นมา ', '-', 2, 1, 'false'),
(101, 2, 'ช่องโหว่ Stored XSS คืออะไร?', 'การแทรก JavaScript โดยเก็บ JavaScript ลงในฐานข้อมูล', 'การแทรก JavaScipt โดยไม่เก็บ JavaScipt ลงในฐานข้อมูล', 'การแทรก JavaScript ลงในฐานข้อมูลเพื่อให้ Web Application เรียก Source Code ขึ้นมา ', '-', 3, 1, 'false'),
(102, 2, 'ข้อใดกล่าวถูกต้อง', 'XSS เป็นการโจมตีเว็บไซต์', 'XSS เป็นการโจมตีที่เซิร์ฟเวอร์', 'XSS เป็นการโจมตีผู้ใช้งานเว็บไซต์', 'ถูกทั้งหมดที่กล่าวมา', 3, 1, 'false'),
(103, 2, 'XSS สร้างความเสียหายอะไรให้กับเว็บไซต์ ? ', 'ไม่สามารถเข้าถึงข้อมูลในเว็บไซต์', 'ชื่อเสียงของเว็บไซต์', 'ข้อมูลถูกเปลี่ยนแปลง', '-', 2, 1, 'false'),
(104, 2, 'การป้องกันปัญหาความปลอดภัยจาก XSS โดยหลักแล้วป้องกันยังไง ?', 'ใช้การ Decoding เมื่อมีการแก้ไขข้อมูลใน DOM', 'อนุญาต flag HttpOnly', 'กรอง output จาก user', 'กรอง Input จาก User', 4, 1, 'false'),
(105, 2, 'XSS เป็นการโจมตีประยุกต์ประเภทใด?\r\n', 'Operating System Attacks', 'Malicious Injection', 'code Injection', 'ldap Injection', 2, 1, 'false'),
(106, 2, 'ปัญหา XSS เกิดจากอะไร?', 'เว็บไซต์รับข้อมูลจาก user โดยมีการกรอง script ออกจาก input ออกจาก user', 'เว็บไซต์รับข้อมูลจาก user โดยไม่มีการกรอง script ออกจาก input ออกจาก user', '-', '-', 2, 1, 'false'),
(107, 2, 'XSS คือ ?', 'การฝัง Commands', 'การฝัง Parameters', 'การฝัง Scripts', 'ทั้งหมดที่กล่าวมา', 3, 1, 'false'),
(108, 2, 'ภาษาใดบ้างที่เกี่ยวข้องกับ XSS ?', 'XSLT', 'LUA', 'SQL', 'Javascript', 4, 1, 'false'),
(109, 2, 'ภัยคุกคามใดต่อไปนี้มักเกิดจากการตรวจสอบ Input ที่ไม่ดี ?', 'การสื่อสารที่ไม่ปลอดภัย (Insecure Communication)', 'การเข้ารหัสที่อ่อนแอ (Weak Cryptography)', 'XSS', '-', 3, 1, 'false'),
(110, 2, 'การโจมตีใดสามารถรันสคริปต์ในเบราว์เซอร์ของผู้ใช้และสามารถจี้เซสชันผู้ใช้\r\n(Hijacking) ทำลายเว็บไซต์ หรือเปลี่ยนเส้นทางผู้ใช้ไปยังไซต์ที่เป็นอันตรายได้', 'Malware Uploading', 'Man in the Middle', 'Cross-site Scrripting ', '-', 3, 1, 'false'),
(111, 2, '<b>&lt;script>document.write(\"Site is at: \" + document.location.href + \".\"); &lt;/script></b>\r\n\r\n<br>จากที่เห็นนี้ จะนำไปสู่ช่องโหว่อะไร ?', 'XSS ทั้งหมด', 'Stored XSS', 'Reflected XSS', 'DOM XSS', 4, 1, 'false'),
(112, 2, 'XSS สามารถใช้ประโยชน์ได้โดยการปลอมแปลงพารามิเตอร์ในคำขอ GET', 'จริง', 'เท็จ', '-', '-', 1, 1, 'false'),
(113, 2, 'XSS สามารถใช้ประโยชน์ได้โดยการรวม JavaScript ในคำขอ POST', 'ใช่', 'ไม่ใช่', '-', '-', 1, 1, 'false'),
(114, 2, 'ข้อใดไม่ใช่การโจมตีแบบ Injection', 'cross-site Scripting', 'SQL injection', 'insecure direct object reference', 'LDAP injection', 3, 1, 'false'),
(115, 2, 'ในการโจมตี cross-site scripting (XSS) โค้ดที่เป็นอันตรายจะทำงานบน client.', 'ใช่', 'ไม่ใช่', '-', '-', 1, 1, 'false'),
(116, 2, 'ข้อใดไม่ใช่ XSS', 'Stored', 'Injected', 'DOM-Based', 'Reflected', 2, 1, 'false'),
(117, 2, 'Reflected XSS สร้างความเสียหายมากกว่า Stored XSS ?', 'ใช่', 'ไม่ใช่', '-', '-', 2, 1, 'false'),
(118, 2, 'โดยทั่วไปแล้วทั้งหมด ยกเว้นหนึ่งอย่างจะถูกนำไปใช้กับการป้อนข้อมูลของผู้ใช้เพื่อป้องกันการโจมตี XSS คืออะไร ?', 'Sanitisation', 'Filtering', 'Encryption', 'Escaping', 3, 1, 'false'),
(119, 2, 'โดยทั่วไปแล้วสิ่งใดที่ถูกจารกรรมในการโจมตี XSS ?', 'รหัสผ่านที่แฮชสำหรับผู้ใช้ทั้งหมด', 'ไฟล์ที่ไม่ได้เข้ารหัส', 'ปริมาณการใช้เครือข่ายเน็ตเวิร์ก', 'รหัสเซสชันจากคุกกี้', 4, 1, 'false'),
(120, 2, 'ผู้โจมตี (Attacker) ได้ใส่โค้ด XSS ในส่วน Comment ของเว็บไซต์ โดยทั่วไปแล้วโค้ดนี้จะเรียกใช้ที่ไหน', 'บนแอปพลิเคชันเซิร์ฟเวอร์', 'บนฐานข้อมูลที่เก็บไว้', 'บนทุกบราวเซอร์ที่เข้าชมเพจ', 'บนฐานข้อมูล ตอนดึงข้อมูล', 3, 1, 'false'),
(121, 2, 'การล้างข้อมูลของผู้ใช้ทางฝั่งเซิร์ฟเวอร์ไม่ได้ช่วยป้องกันการโจมตี XSS ประเภทใด', 'Reflected', ' Stored', 'DOM-based', '-', 3, 1, 'false'),
(122, 2, 'โดยทั่วไปแล้ว AJAX จะใช้เพื่ออะไร', 'ส่งข้อมูลโดยใช้การเชื่อมต่อที่เข้ารหัส', 'รักษาสถานะระหว่างไคลเอนต์และเซิร์ฟเวอร์', 'แคชข้อมูลภายในเบราว์เซอร์', 'อัปเดตเนื้อหาโดยไม่ต้องโหลดซ้ำเต็มหน้า', 4, 1, 'false'),
(123, 2, 'เครื่องมือใดที่ใช้ในการดาวน์โหลดหน้าเว็บแบบเต็มและเนื้อหา', 'Spider', 'Proxy', 'Fuzzer', 'Zap', 1, 1, 'false'),
(124, 2, 'ข้อใดเป็นวิธีหยุดการโจมตี XSS ที่เข้มงวดแต่แน่นอน ?', 'ติดตั้งใบรับรอง PKI ', 'เปิดใช้งานการใช้ขั้นตอนการจัดเก็บ (Stored procedures)', 'เปิดใช้งานแอพพลิเคชั่น Fuzzing', 'บล็อกการใช้สคริปต์ฝั่งไคลเอ็นต์ของเว็บเบราว์เซอร์', 4, 1, 'false'),
(125, 2, 'ข้อใดต่อไปนี้สามารถเก็บไว้ในคุกกี้ได้', 'รหัสเซสชัน', 'สิทธิ์ของบัญชี', 'ยูสเซอร์เนม', 'รหัส', 1, 1, 'false'),
(133, 20, 'อักขระใดมีแนวโน้มที่จะใช้ในการโจมตี <b>XSS</b> ที่หลีกเลี่ยงแอตทริบิวต์ <b>HTML</b> ได้มากที่สุด', 'เครื่องหมายมากกว่า (>)', 'เครื่องหมายน้อยกว่า (<)', 'single quote (\')', '-', 3, 4, 'false'),
(132, 20, '<b>XSS</b> แบบ <b>DOM</b> อินพุตที่เป็นอันตรายจะถูกแทรกลงในแอปพลิเคชันไคลเอ็นต์ขณะรันไทม์ในเบราว์เซอร์ของผู้ใช้ ?', 'True', 'Fales', '-', '-', 1, 4, 'false'),
(134, 20, 'การเขียนสคริปต์ข้ามไซต์เป็นการโจมตีประเภทหนึ่ง ใช่หรือไม่ ?', 'True', 'Fales', '-', '-', 1, 4, 'false'),
(135, 20, 'XSS แบบถาวร <b>(หรือที่รู้จักในชื่อ \'Stored XSS\')<b> เกิดขึ้นเมื่อผู้ใช้ที่เป็นอันตรายเกลี้ยกล่อมให้เหยื่อส่งคำขอไปยังเซิร์ฟเวอร์ที่มีอินพุตที่เป็นอันตราย และเซิร์ฟเวอร์สะท้อนอินพุตกลับไปยังไคลเอ็นต์ ', 'True', 'Fales', '-', '-', 2, 4, 'false'),
(136, 20, 'ซอฟต์แวร์ป้องกันไวรัสสามารถป้องกันการโจมตี XSS ได้หรือไม่ ?', 'True', 'False', '-', '-', 2, 4, 'false'),
(137, 20, '<b>SQL injection</b> เป็นช่องโหว่ใหม่ใช่หรือไม่ ?', 'True', 'Fales', '-', '-', 2, 5, 'false'),
(138, 20, 'เราสามารถถูกดำเนินคดีในการใส่เครื่องหมายคำพูด <b>(\')</b> ลงในเว็บไซต์ได้หรือไม่ ?', 'True', 'Fales', '-', '-', 1, 5, 'false'),
(139, 20, 'เว็บไซต์สามารถป้องกัน <b>SQL injection</b> ได้หรือไม่หากไม่อนุญาตให้ป้อนอักขระเครื่องหมายคำพูด ?', 'True', 'Fales', '-', '-', 2, 5, 'false'),
(140, 20, 'เว็บไซต์สามารถป้องกัน SQL injection ได้หรือไม่หากไม่ใช้วิธี GET', 'Ture', 'Fales', '-', '-', 2, 5, 'false'),
(141, 20, 'แอปพลิเคชันของฉันเขียนด้วย PHP/ASP/Perl/.NET/Java เป็นต้น ภาษาที่เราเลือกสามารถป้องกันการ  SQL injection ได้หรือไม่ ?', 'True', 'Fales', '-', '-', 2, 5, 'false'),
(142, 20, 'หากต้องการป้องกันข้อมูลรั่วไหลขณะรับส่งข้อมูล วิธีการใดเหมาะสมที่สุด ?', 'ใช้งาน HTTPS', 'ดำเนินการเข้ารหัสข้อมูลในระดับ content', 'กำหนดสิทธิการเข้าถึงแบบเฉพาะเจาะจง', 'ให้เข้าถึงด้วยวิธีการ VPN', 1, 6, 'false'),
(143, 20, 'ข้อใดไม่ใช่ความเสียหาย หากไม่มีการควบคุม Input Validation ?', 'ผู้โจมตีทำให้ระบบหยุดชะงักด้วยวิธีการ Buffer Overflow', 'ผู้โจมตีสามารถเข้าถึงข้อมูลต่าง ๆ ด้วยวิธีการ Path Traversal', 'ผู้โจมตีสามารถเข้าถึงระบบโดยไม่ได้รับอนุญาตด้วยวิธีการ SQL Injection', 'ผู้โจมตีสามารถส่งชุดคำสั่งที่เป็นอันตรายไปหาเหยื่อได้ด้วยวิธีการ Cross-site Scripting', 4, 6, 'false'),
(144, 20, 'ข้อใดไม่ใช่วิธีการจัดการภัยคุกคามและป้องกันการโจมตีระบบเว็บ ?', 'การทดสอบด้านความมั่นคงปลอดภัย', 'การระบุความต้องการด้านความมั่นคงปลอดภัยในการพัฒนาระบบ', 'การตรวจสอบช่องโหว่ของระบบอย่างสม่ำเสมอ', 'การจ้างให้หน่วยงานที่มีความสามารถพัฒนาระบบให้', 4, 6, 'false'),
(145, 20, 'นอกจากการรักษาความลับ ความถูกต้อง ความพร้อมใช้ ข้อใดต่อไปนี้ \r\n<br>จัดเป็นส่วนหนึ่งขององค์ประกอบสำคัญในคุณสมบัติการรักษาความมั่นคงปลอดภัยสารสนเทศ <b>(Information Security)</b> ?</br>\r\n', 'การปฏิบัติตามกฎหมายและข้อบังคับ (Compliance) ความเชื่อถือได้ (Reliability)', 'ภาพลักษณ์และชื่อเสียง (Image and Reputation) ความเชื่อถือได้(Reliability)', 'ความถูกต้องแท้จริง (Authenticity) การห้ามปฏิเสธความรับผิด (Non-repudiation)', 'ความถูกต้องแท้จริง (Authenticity) ความรับผิดชอบ (Responsibility)', 3, 6, 'false'),
(146, 20, 'พระราชบัญญัติการรักษาความมั่นคงปลอดภัยไซเบอร์ ระบุลักษณะภัยคุกคามทางไซเบอร์ต่อระบบสารสนเทศซึ่ง\r\nอยู่ในความดูแลรับผิดชอบของหน่วยงานของรัฐหรือหน่วยงานโครงสร้างพื้นฐานส าคัญทางสารสนเทศ <b>(CII)</b>\r\nโดยแบ่งเป็น 3 ระดับ ยกเว้นข้อใด ?', 'ภัยคุกคามทางไซเบอร์ที่เป็นสถานการณ์ด้านความมั่นคงปลอดภัยที่ไม่พึงประสงค์หรือไม่อาจคาดคิด', 'ภัยคุกคามทางไซเบอร์ในระดับไม่ร้ายแรง', 'ภัยคุกคามทางไซเบอร์ในระดับร้ายแรง', 'ภัยคุกคามทางไซเบอร์ในระดับวิกฤติ', 1, 6, 'false'),
(169, 2, '<b>Cookie Snooping</b> เป็นการโจมตีรูปแบบใด ?', 'เป็นการปลอมแปลงคำสั่งโดยทำให้ <b>User</b> เข้าใจเป็นการกระทำของตนเอง', 'ผู้โจมตีทำการเปลี่ยนตัวตนของผู้ใช้ด้วยวิการเปลี่ยนค่า <b>Parameter</b>', 'การโจมตีที่พยายามเข้าถึง <b>Cookie</b> ของผู้ใช้งานและเปลี่ยนข้อมูลต่างๆใน <b>Cookie</b>', '-', 3, 3, 'false'),
(170, 2, 'ข้อใดในนี้ไม่ใช่การจัดการภัยคุกคามและป้องกันการโจมตีระบบเว็บ ?\r\n', 'การทดสอบด้านความปลอดภัย', 'ตรวจดูช่องโหว่อย่างสม่ำเสมอ', 'การจ้างให้หน่วยงานที่มีความสามารถพัฒนาระบบให้', '-', 3, 3, 'false'),
(171, 2, 'ประโยชน์ที่เราได้รับจากการทำ ,<b>Testing</b> ?', 'ลดโอกาสที่ระบบจะถูกโจมตีหรือลดความเสียหาย', 'ทำให้ข้อมูลสำคัญต่างๆไม่รั่วไหล', 'ทำให้ตรวจพบถึงจุดบกพร่องด้านความปลอดภัย', '-', 3, 3, 'false'),
(172, 2, 'ประโยชน์ที่เราได้รับจากการทำ <b>Implement</b> ?', 'ทำให้รู้ว่าต้องวางแผนอย่างไร', 'ทำให้ผลลัพธ์ของการพัฒนาถูกต้องครบถ้วน', 'ทำให้รู้ถึงความต้องและเป็นไปได้ว่าสามารถทำได้ไหม', '-', 2, 3, 'false'),
(173, 2, 'การลดโอการที่ระบบจะถูกโจมตีหรือลดความเสียหายที่ได้รับ เป็นขั้นตอนการพัฒนาแบบใด ?', 'Disposal', 'Testing', 'Requirements', 'Maintenance', 4, 3, 'false'),
(174, 2, 'การที่องค์กรกำหนดความต้องการด้านความปลอดภัย จะได้รับประโยชน์อย่างไร ?\r\n', 'ทำให้ข้อมูลสำคัญต่างๆไม่รั่วไหล', 'ลดโอกาสที่ระบบจะถูกโจมตีหรือลดความเสียหาย', 'ทำให้รู้ว่าต้องวางแผนการทำงานอย่างไร', 'ทำให้รู้ถึงความต้องและเป็นไปได้ว่าสามารถทำได้ไหม', 4, 3, 'false'),
(175, 2, 'ถ้าเกิดองค์กรนำมาตราฐานต่างๆมาทำการประยุกต์ใช้ในการพัฒนาระบบให้สอดคล้องตาม <b>OWASP</b> จะเป็นอย่างไร ?', 'ทำให้ผลลัพธ์ออกมาถูกต้องปลอดภัยและจัดการข้อบกพร่องตั้งแต่เริ่มทำ', 'ลดโอกาสที่ระบบจะถูกโจมตีหรือลดความเสียหาย', 'ทำให้รู้ถึงความต้องและเป็นไปได้ว่าสามารถทำได้ไหม', 'ทำให้ทราบว่าต้องจัดการอย่างไรเพื่อลดช่องโหว่', 1, 3, 'false'),
(176, 2, '<b>Client compute node</b> หมายถึงอะไร ?', 'ส่วนประมวลผลลัพธ์โดยผู้รับบริการเอง', 'ส่วนประมวลผลลัพธ์โดยผู้ให้บริการเอง', '-', '-', 1, 3, 'false'),
(177, 2, '<b>Server compute node</b> หมายถึงอะไร ?', 'ส่วนประมวลผลลัพธ์โดยผู้รับบริการเอง', 'ส่วนประมวลผลลัพธ์โดยผู้ให้บริการเอง', '-', '-', 2, 3, 'true'),
(178, 2, 'คำสั่ง <b>\" OR \"\"=\"</b> ถูกใช้ในการทำอะไร ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูล', 'ใช้ในการส่งคืนแถวจากตาราง', '-', '-', 1, 3, 'true'),
(179, 2, 'คลาสใดต่อไปที่ใช้ในการ <b>Encode</b> เนื้อหา <b>JavaScript</b> ได้ด้วยตัวเองใน </b>ASP.NET Core</b>', 'Encoding', 'JavaScriptEncoder', 'WebEncoder', 'HttpUtility', 2, 3, 'true'),
(180, 2, '<b>CSP</b> คืออะไร ?', 'คือลักษณะของ <b>ASP.NET</b> ที่ <b>Cookie</b> สามารถอ่านได้จากตำแหน่งที่ถูกกำหนดค่าเอาไว้', 'คือคุณสมบัติของ <b>Browser</b> ที่จำกัดตำแหน่งไม่ให้ <b>Browser</b> ทำการ <b>Load Script, Styles</b> และอื่นๆ', 'คือคุณสมบัติของ <b>Browser</b> ที่สามารถอ่าน <b>Cookie</b> ได้จากตำแหน่งที่กำหนดค่าได้', 'คือ <b>ASP.NET Feature</b> ที่จำกัดตำแหน่งที่ <b>Browser</b> สามารถ <b>Load Script, Styles</b> และอื่นๆ', 2, 3, 'true'),
(181, 2, 'อะไรคือเหตุผลที่อาจจะทำให้เกิด <b>XSS</b> ?', 'ไม่มีการตรวจสอบว่า <b>URL</b> ได้ทำการส่งไปยังหน้าจอการเข้าสู่ระบบเพื่อดูว่าเป็น <b>URL</b> ในเครื่องหรือไม่', '<b>Cookie</b> ไม่มีการ <b>HttpOnly Attribute</b>', 'ไม่ได้ใช้ <b>HtmlEncoder</b> ใน <b>ASP.NET Core</b> หรือ <b>HttpUtility</b> ใน <b>ASP.NET</b> ขณะพัฒนา <b>Application</b>', 'ข้อมูลที่ผู้ใช้ป้อนซ้ำตามหน้าเว็บ', 4, 3, 'true'),
(182, 2, '<b>Hacker</b> สามารถนำคำสั่ง <b>\" OR \"\"=\"</b> มาใช้ทำอะไรได้บ้าง ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้', 'เข้าถึงในส่วนของ ข้อมูลและรหัสของผู้ใช้', 'ส่งข้อมูลคืนแถวจากตาราง', 'ถูกทุกข้อ', 1, 3, 'true'),
(183, 2, '<b>Acunetix</b> คืออะไร ?', 'เป็นระบบช่วยในการสแกนช่องโหว่', 'เป็นนวัตกรรมอัจฉริยะทางด้าน <b>Audio Conference</b>', 'เป็น <b>Plugins</b> ของ <b>Jenkins</b>', 'ไม่มีข้อใดถูก', 1, 3, 'true'),
(184, 2, '<b>Hacker</b> สามารถนำคำสั่ง <b>105 OR 1=1</b> มาใช้ทำอะไรได้บ้าง ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้', 'เข้าถึงในส่วนของ ข้อมูลและรหัสของผู้ใช้', 'ส่งข้อมูลคืนแถวจากตาราง', 'ถูกทุกข้อ', 2, 3, 'true'),
(185, 2, 'จากแผนผังการโจมตีแบบ <b>XSS</b> ขั้นตอนการโจมตีรูปแบบแรกคืออะไร ?', '<b>Hacker</b> จะทำการใส่ข้อมูลลงไปใน <b>Database</b> ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม <b>Script</b> ที่เป็นอันตราย', '<b>Hacker</b> จะทำการดึง <b>Cookie</b> ของเหยื่อเมื่อมีการส่งคำขอ <b>HTTP</b> มาถึง <b>Server</b> ของ <b>Hacker</b>', '<b>User</b> จะทำการ <b>requests</b> หน้าเว็บไวต์จากหน้า <b>Web Server</b>', '<b>Hacker</b> จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', 1, 3, 'true'),
(186, 2, 'ทำไมการเข้ารหัสจึงมีประโยชน์ในบริบทของ <b>XSS</b> ?', '<b></b> จะไม่ตีความข้อมูลที่ผู้ใช้ป้อนเป็น <b>JavaScript, CSS</b> หรือ <b>HTML</b>', '<b></b> จะเข้ารหัส <b>Cookie</b> ทั้งหมดโดยอัตโนมัติ', '<b></b> จะปฏิเสธการใช้ <b>inline styles</b> และ <b>JavaScript</b> ทั้งหมด', '<b></b> จะทำให้ <b>Cookie</b> ใช้ได้เฉพาะในคำขอ <b>HTTP</b> เท่านั้น', 1, 3, 'true'),
(187, 2, '<b>CSP</b> สามารถเปิดใช้งานได้อย่างไร ?', 'เมื่อ <b>Browse</b> ส่งคำขอไปยังเซิร์ฟเวอร์ จะต้องมีส่วน <b>Content Security Policy Header</b>', 'ผู้ใช้ต้องเปิดใช้งานในการตั้งค่า <b>Browser</b>', '<b>ASP.NET</b> จะเปิดใช้งานโดยอัตโนมัติ', 'เซิร์ฟเวอร์ต้องส่งคืนส่วน <b>Content Security Policy Header</b>', 4, 3, 'true'),
(188, 2, 'การโจมตี <b>XSS attack stored</b> ที่เก็บไว้ในฐานข้อมูลเรียกว่า ?\r\n', 'Reflected.', 'Persisted.', 'Generated.', 'Relational.', 2, 3, 'true'),
(190, 2, '<b>HSTS</b> ถูกลองรับโดย ?', 'Firefox only', 'Internet Explorer and Safari.', 'Chrome only.', 'Chrome and Firefox.', 4, 3, 'true'),
(191, 2, 'หนึ่งวินาทีสามารถคำนวณแฮชได้กี่แฮชเมื่อใช้ฮาร์ดแวร์ระดับผู้บริโภค ?', '75,000,000', '7,500,000,000', '750,000,000', '7,500,000', 2, 3, 'true'),
(192, 2, 'กุญแจสำคัญในการป้องกันการโจมตีด้วย <b>SQL Injection</b> คือ ?', 'Whitelisting of untrusted data', 'Principle of least privilege in the database', 'Parameterization of the query', 'ถูกทุกข้อ', 4, 3, 'true'),
(193, 2, 'เราสามารถระบุส่วนประกอบที่มีช่องโหว่ที่ทราบได้โดยการตรวจสอบแบบใด ? ', 'Package manager updates.', 'CVEs.', 'The individual component projects.', 'ถูกทุกข้อ', 4, 3, 'true'),
(194, 2, 'การโจมตีของ <b>CSRF</b> ใช้ประโยชน์จากข้อเท็จจริงที่เป็นคำขอใด ?', 'Predictable.', 'Made over an insecure connection.', 'Not properly escaped.', 'Sent via HTTP GET.', 1, 3, 'true'),
(195, 2, 'ในการโจมตีแบบ <b>SQL Injection</b> ผู้โจมตีต้องการอะไรจากการโจมตีนี้ ?', 'execute arbitrary SQL in the database.', 'manipulate data in the SQL query.', 'change the markup of the website.', '-', 1, 3, 'true'),
(196, 2, 'จากแผนผังการโจมตีแบบ <b>XSS</b> ขั้นตอนการโจมตีรูปแบบสุดท้ายคืออะไร ?', '<b>Hacker</b> จะทำการดึง <b>Cookie</b> ของเหยื่อเมื่อมีการส่งคำขอ <b>HTTP</b> มาถึง Server ของ <b>Hacker</b>', '<b>User</b> จะทำการ <b>requests</b> หน้าเว็บไวต์จากหน้า <b>Web Server</b>', '<b>Hacker</b> จะทำการใส่ข้อมูลลงไปใน <b>Database</b> ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม <b>Script</b> ที่เป็นอันตราย', '<b>Hacker</b> จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้ ', 4, 3, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `test_history`
--

CREATE TABLE `test_history` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `test_id` text NOT NULL,
  `lesson_id` text NOT NULL,
  `point` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `correct` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_history`
--

INSERT INTO `test_history` (`id`, `username`, `test_id`, `lesson_id`, `point`, `answer`, `correct`) VALUES
(1, 'admin', '111', '1', 2, 1, 1),
(2, 'admin', '121', '1', 2, 2, 1),
(3, 'admin', '115', '1', 2, 3, 1),
(4, 'admin', '116', '1', 2, 4, 1),
(5, 'admin', '113', '1', 2, 5, 1),
(6, 'admin', '1', '1', 2, 6, 1),
(7, 'admin', '120', '1', 2, 7, 1),
(8, 'admin', '98', '1', 2, 8, 1),
(9, 'admin', '123', '1', 2, 9, 1),
(10, 'admin', '101', '1', 2, 10, 1),
(11, 'admin', '103', '1', 2, 11, 1),
(12, 'admin', '104', '1', 2, 12, 1),
(13, 'admin', '124', '1', 2, 13, 1),
(14, 'admin', '3', '1', 2, 14, 1),
(15, 'admin', '122', '1', 2, 15, 1),
(16, 'admin', '112', '1', 2, 16, 1),
(17, 'admin', '107', '1', 2, 17, 1),
(18, 'admin', '118', '1', 2, 18, 1),
(19, 'admin', '108', '1', 2, 19, 1),
(20, 'admin', '102', '1', 2, 20, 1),
(21, 'admin', '99', '1', 2, 21, 1),
(22, 'admin', '105', '1', 2, 22, 1),
(23, 'admin', '114', '1', 2, 23, 1),
(24, 'admin', '100', '1', 2, 24, 1),
(25, 'admin', '106', '1', 2, 25, 1),
(26, 'admin', '110', '1', 2, 26, 1),
(27, 'admin', '109', '1', 2, 27, 1),
(28, 'admin', '119', '1', 2, 28, 1),
(29, 'admin', '117', '1', 2, 29, 1),
(30, 'admin', '125', '1', 2, 30, 1),
(31, 'admin', '133', '4', 20, 1, 1),
(32, 'admin', '132', '4', 20, 2, 1),
(33, 'admin', '134', '4', 20, 3, 1),
(34, 'admin', '135', '4', 20, 4, 1),
(35, 'admin', '136', '4', 20, 5, 1),
(36, 'admin', '73', '2', 2, 1, 1),
(37, 'admin', '34', '2', 2, 2, 1),
(38, 'admin', '70', '2', 2, 3, 1),
(39, 'admin', '84', '2', 2, 4, 1),
(40, 'admin', '61', '2', 2, 5, 1),
(41, 'admin', '60', '2', 2, 6, 1),
(42, 'admin', '82', '2', 2, 7, 1),
(43, 'admin', '58', '2', 2, 8, 1),
(44, 'admin', '74', '2', 2, 9, 1),
(45, 'admin', '64', '2', 2, 10, 1),
(46, 'admin', '62', '2', 2, 11, 1),
(47, 'admin', '79', '2', 2, 12, 1),
(48, 'admin', '68', '2', 2, 13, 1),
(49, 'admin', '59', '2', 2, 14, 1),
(50, 'admin', '83', '2', 2, 15, 1),
(51, 'admin', '72', '2', 2, 16, 1),
(52, 'admin', '66', '2', 2, 17, 1),
(53, 'admin', '69', '2', 2, 18, 1),
(54, 'admin', '65', '2', 2, 19, 1),
(55, 'admin', '33', '2', 2, 20, 1),
(56, 'admin', '71', '2', 2, 21, 1),
(57, 'admin', '80', '2', 2, 22, 1),
(58, 'admin', '76', '2', 2, 23, 1),
(59, 'admin', '81', '2', 2, 24, 1),
(60, 'admin', '75', '2', 2, 25, 1),
(61, 'admin', '57', '2', 2, 26, 1),
(62, 'admin', '67', '2', 2, 27, 1),
(63, 'admin', '78', '2', 2, 28, 1),
(64, 'admin', '77', '2', 2, 29, 1),
(65, 'admin', '63', '2', 2, 30, 1),
(66, 'admin', '137', '5', 20, 1, 1),
(67, 'admin', '138', '5', 20, 2, 1),
(68, 'admin', '139', '5', 20, 3, 1),
(69, 'admin', '140', '5', 20, 4, 1),
(70, 'admin', '141', '5', 20, 5, 1),
(71, 'admin', '159', '3', 2, 1, 1),
(72, 'admin', '191', '3', 2, 2, 1),
(73, 'admin', '151', '3', 2, 3, 1),
(74, 'admin', '157', '3', 2, 4, 1),
(75, 'admin', '152', '3', 2, 5, 1),
(76, 'admin', '166', '3', 2, 6, 1),
(77, 'admin', '148', '3', 2, 7, 1),
(78, 'admin', '147', '3', 2, 8, 1),
(79, 'admin', '194', '3', 2, 9, 0),
(80, 'admin', '163', '3', 2, 10, 1),
(81, 'admin', '150', '3', 2, 11, 1),
(82, 'admin', '156', '3', 2, 12, 1),
(83, 'admin', '160', '3', 2, 13, 1),
(84, 'admin', '179', '3', 2, 14, 1),
(85, 'admin', '174', '3', 2, 15, 1),
(86, 'admin', '172', '3', 2, 16, 1),
(87, 'admin', '186', '3', 2, 17, 1),
(88, 'admin', '162', '3', 2, 18, 1),
(89, 'admin', '149', '3', 2, 19, 1),
(90, 'admin', '176', '3', 2, 20, 1),
(91, 'admin', '187', '3', 2, 21, 1),
(92, 'admin', '170', '3', 2, 22, 1),
(93, 'admin', '164', '3', 2, 23, 1),
(94, 'admin', '177', '3', 2, 24, 1),
(95, 'admin', '180', '3', 2, 25, 0),
(96, 'admin', '155', '3', 2, 26, 1),
(97, 'admin', '154', '3', 2, 27, 1),
(98, 'admin', '167', '3', 2, 28, 1),
(99, 'admin', '182', '3', 2, 29, 0),
(100, 'admin', '153', '3', 2, 30, 1),
(101, 'admin', '142', '6', 20, 1, 1),
(102, 'admin', '143', '6', 20, 2, 1),
(103, 'admin', '144', '6', 20, 3, 1),
(104, 'admin', '145', '6', 20, 4, 1),
(105, 'admin', '146', '6', 20, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `upload` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `upload`) VALUES
(6, 'E_E8BzTVQBM-vlU.jpg'),
(9, 'EL255_SR04.png'),
(8, 'unknown.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date` text NOT NULL,
  `profile` text NOT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'member',
  `point` int(11) NOT NULL DEFAULT '0',
  `skill_1` varchar(255) NOT NULL DEFAULT '0',
  `skill_2` varchar(255) NOT NULL DEFAULT '0',
  `skill_3` varchar(255) NOT NULL DEFAULT '0',
  `skill_4` varchar(255) NOT NULL DEFAULT '0',
  `skill_5` varchar(255) NOT NULL DEFAULT '0',
  `skill_6` varchar(255) NOT NULL DEFAULT '0',
  `skill_7` varchar(255) NOT NULL DEFAULT '0',
  `skill_8` varchar(255) NOT NULL DEFAULT '0',
  `nickname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `date`, `profile`, `group`, `point`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `nickname`) VALUES
(1, 'admin', 'admin@admin.com', 'd0298c39e3a8caf23316c7c760c1bff2', '9/5/2022 12:11:10น.', '260783142436.jpg', 'admin', 474, '17.000000000000007', '35', '5', '43.79999999999998', '10.19999999999998', '44.40000000000004', '17.39999999999997', '58.5', 'admin'),
(2, 'amaimon', 'emandem@gmail.com', '8784cb81a836fa422b061e9807d7043e', '11/5/2022 03:31:05น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(3, 'zone', 'msn.natakorn@gmail.com', 'ce7cdfad75a19bba150ba7cc0e36b798', '11/5/2022 22:06:30น.', '263651340089.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(4, 'ozone', 'msn.natakorn@hotmail.com', 'ee5645b66fcc03f57114d8bcb9286df4', '11/5/2022 22:41:31น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(5, 'test@test<script>alert(\"test\")</script>', '<script>alert(\"TEST\")</script>@gmail.com', '67123be1ef76710bd77ecb92b1b49d97', '12/5/2022 02:09:17น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(6, 'test2', 'test@haha.com', '67123be1ef76710bd77ecb92b1b49d97', '12/5/2022 02:25:17น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(7, 'haha22', '222@ASDASD', '8bad8c011f684e28527168dbbbe945a9', '12/5/2022 13:45:40น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(8, 'test0', 'test@test', '67123be1ef76710bd77ecb92b1b49d97', '12/5/2022 15:18:52น.', '724505336422.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(9, 'kaoawesomedevil', 'kaoawesome15486@gmail.com', 'a7700f445b788a14e7632f5a544574e4', '12/5/2022 17:04:54น.', '510299608988.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(10, 'test0', 'test@test', '67123be1ef76710bd77ecb92b1b49d97', '12/5/2022 17:20:31น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(11, 'sponge1412', 'Sorawit.Nglee@gmail.com', '10bf0a95ed5bdb9bf747808f08783ad1', '13/5/2022 23:47:35น.', '311966423880.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(12, 'arnandai', 'AnanSukwattana@gmail.com', 'a7700f445b788a14e7632f5a544574e4', '13/5/2022 23:51:47น.', '830374652830.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(13, 'psycho ramax', 'Anon_Sukwattana@gmail.com', 'a7700f445b788a14e7632f5a544574e4', '14/5/2022 04:23:13น.', '903395305764.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(14, 'aemm', 'aemmm@gmail.com', '8784cb81a836fa422b061e9807d7043e', '14/5/2022 05:01:17น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(15, 'themagician', 'Natdanai_Pooliam@gmail.com', 'a7700f445b788a14e7632f5a544574e4', '14/5/2022 05:31:45น.', '678258791095.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(20, 'admin12', 'Thanakrit.Thongdee@gmail.com', '4dda52fcec66e939e3f4b81918e17a54', '15/5/2022 15:10:08น.', '717559191406.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(16, 'sorawit', 'Sorawit.15@gmail.com', '54364ce732665fe4883ba4fb46b4de7b', '14/5/2022 18:12:25น.', '126038938092.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(19, 'maxmoewmoew', 'MrNanon@gmail.com', '20590c117d3cd92d97db87090c3e95ac', '15/5/2022 03:21:52น.', '440548346757.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(17, 'ffi3y', 'Apichart.Seephet@gmail.com', 'ddf819c3f2487a86509441ffe4240357', '14/5/2022 18:50:19น.', '882732580660.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(18, 'pk17', 'Thanongkiat@gmail.com', '1569a03118d2358c75d37500d411bdc8', '15/5/2022 03:09:07น.', '186888132698.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(21, 'naphatsorn', 'fan32_sk54@gmail.com', '3183755ee31908780ece1911121ffc9a', '15/5/2022 20:34:34น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(22, 'metee1234', 'meteetanathip@gmail.com', '5aa982bf4af3687cd5b5f3390cac4c28', '16/5/2022 17:11:00น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(23, '์naphatsorn kusaro', 'npsksr2542@gmail.com', '3183755ee31908780ece1911121ffc9a', '17/5/2022 14:32:40น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(24, 'tararos', 'Tararos@outlook.com', 'ccff44a6cedfd995d13bf9b43ad326e6', '18/5/2022 19:48:28น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(25, 'astars', 'kaopossawat15486@gmail.com', 'a7700f445b788a14e7632f5a544574e4', '19/5/2022 14:29:02น.', '310877458377.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(26, 'Saran', 'saran.kaewnang@gmail.com', 'f7204996d141ade89ebe5c76873ad0f6', '20/5/2022 12:13:13น.', '203724487438.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(27, 'haha123', 'test@test', '67123be1ef76710bd77ecb92b1b49d97', '23/5/2022 03:07:36น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', ''),
(28, 'admin2', 'admin2@admin.com', 'd0298c39e3a8caf23316c7c760c1bff2', '23/5/2022 05:29:12น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', 'admin22'),
(29, 'test5', 'test@test', '68f151c241cb0be16345497de9582ea5', '23/5/2022 05:30:35น.', '667441184649.jpg', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0', 'admin55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secret`
--
ALTER TABLE `secret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secret_history`
--
ALTER TABLE `secret_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_home`
--
ALTER TABLE `setting_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_prehome`
--
ALTER TABLE `setting_prehome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_rank`
--
ALTER TABLE `setting_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_chart`
--
ALTER TABLE `skill_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_history`
--
ALTER TABLE `test_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `secret`
--
ALTER TABLE `secret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `secret_history`
--
ALTER TABLE `secret_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `setting_home`
--
ALTER TABLE `setting_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_prehome`
--
ALTER TABLE `setting_prehome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_rank`
--
ALTER TABLE `setting_rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skill_chart`
--
ALTER TABLE `skill_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `test_history`
--
ALTER TABLE `test_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
