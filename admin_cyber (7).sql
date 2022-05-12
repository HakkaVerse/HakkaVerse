-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2022 at 09:39 AM
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
(1, 'admin', 1, 10, 'security'),
(2, 'admin', 2, 10, 'security'),
(3, 'admin', 3, 10, 'security'),
(4, 'admin', 4, 20, 'security'),
(5, 'admin', 5, 25, 'security'),
(6, 'admin', 6, 25, 'security'),
(7, 'admin', 1, 10, 'xss'),
(8, 'admin', 2, 10, 'xss'),
(9, 'admin', 3, 10, 'xss'),
(10, 'admin', 4, 20, 'xss'),
(11, 'admin', 5, 25, 'xss'),
(12, 'admin', 6, 25, 'xss'),
(13, 'admin', 1, 25, 'sql'),
(14, 'admin', 2, 25, 'sql'),
(15, 'admin', 3, 25, 'sql'),
(16, 'admin', 4, 25, 'sql');

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
(4, 'test', 1),
(5, 'test', 3),
(6, 'test2', 1),
(7, 'test3', 1);

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
(31, 4, 1, 2, 'admin'),
(32, 4, 2, 2, 'admin'),
(33, 4, 3, 3, 'admin'),
(34, 4, 4, 4, 'admin'),
(35, 4, 5, 1, 'admin'),
(36, 4, 6, 4, 'admin'),
(37, 4, 3, 2, 'test3'),
(38, 4, 5, 4, 'test3'),
(39, 4, 6, 3, 'test3'),
(40, 4, 4, 1, 'test3'),
(41, 4, 2, 3, 'test3'),
(42, 4, 1, 1, 'test3');

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
(1, 'SQL INJECT', 'SQL Injection', '', '', '', '', '', '', '', '2', '0', '0', '0', '0', '0', '0', '0'),
(2, 'XSS SKILL', 'Cross - Site Scripting', '', '', '', '', '', '', '', '2', '0', '0', '0', '0', '0', '0', '0'),
(3, 'Cyber Security', 'Cyber Security', 'Cross - Site Scripting', '', '', '', '', '', '', '2', '0', '0', '0', '0', '0', '0', '0'),
(4, 'Coming Soon', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'Coming Soon', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 'Coming Soon', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'Coming Soon', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 'Coming Soon', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0');

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
(33, 2, '<b>SQL</b> ย่อมาจากอะไร?', 'Structured Query Language', '-', '-', '-', 1, 2, 'false'),
(34, 2, 'ตัวย่อของซอฟต์แวร์ที่ควบคุมฐานข้อมูลคืออะไร?', 'DBMS', '-', '-', '-', 1, 2, 'false'),
(45, 2, 'คลาสใดต่อไปที่ใช้ในการ Encode เนื้อหา JavaScript ได้ด้วยตัวเองใน ASP.NET Core ', 'Encoding', 'WebEncoder', 'JavaScriptEncoder', 'HttpUtility', 3, 3, 'false'),
(46, 2, 'CSP คืออะไร ?', 'คือลักษณะของ ASP.NET ที่ Cookie สามารถอ่านได้จากตำแหน่งที่ถูกกำหนดค่าเอาไว้', 'คือคุณสมบัติของ Browser ที่จำกัดตำแหน่งไม่ให้ Browser ทำการ Load Script, Styles และอื่นๆ', 'คือคุณสมบัติของ Browser ที่สามารถอ่าน Cookie ได้จากตำแหน่งที่กำหนดค่าได้', 'คือ ASP.NET Feature ที่จำกัดตำแหน่งที่ Browser สามารถ Load Script, Styles และอื่นๆ', 2, 3, 'false'),
(47, 2, 'อะไรคือเหตุผลที่อาจจะทำให้เกิด XSS ?', 'ข้อมูลที่ผู้ใช้ป้อนซ้ำตามหน้าเว็บ', 'ไม่ได้ใช้ HtmlEncoder ใน ASP.NET Core หรือ HttpUtility ใน ASP.NET ขณะพัฒนา Application', 'Cookie ไม่มีการ HttpOnly Attribute', 'ไม่มีการตรวจสอบว่า URL ได้ทำการส่งไปยังหน้าจอการเข้าสู่ระบบเพื่อดูว่าเป็น URL ในเครื่องหรือไม่', 1, 3, 'false'),
(48, 2, 'Hacker สามารถนำคำสั่ง \" OR \"\"=\" มาใช้ทำอะไรได้บ้าง ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้', 'เข้าถึงในส่วนของ ข้อมูลและรหัสของผู้ใช้', 'ส่งข้อมูลคืนแถวจากตาราง', 'ถูกทุกข้อ', 1, 3, 'false'),
(51, 2, 'Acunetix คืออะไร ?', 'เป็นระบบช่วยในการสแกนช่องโหว่', 'เป็น Plugins ของ Jenkins  ', 'เป็นนวัตกรรมอัจฉริยะทางด้าน Audio Conference', 'ไม่มีข้อใดถูก', 1, 3, 'false'),
(52, 2, 'Hacker สามารถนำคำสั่ง 105 OR 1=1 มาใช้ทำอะไรได้บ้าง ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้', 'เข้าถึงในส่วนของ ข้อมูลและรหัสของผู้ใช้', 'ส่งข้อมูลคืนแถวจากตาราง', 'ถูกทุกข้อ', 2, 3, 'false'),
(54, 2, 'จากแผนผังการโจมตีแบบ XSS ขั้นตอนการโจมตีรูปแบบแรกคืออะไร ?', 'Hacker จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', 'Hacker จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', 'Hacker จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', 'User จะทำการ requests หน้าเว็บไวต์จากหน้า Web Server', 2, 3, 'false'),
(55, 2, 'ทำไมการเข้ารหัสจึงมีประโยชน์ในบริบทของ XSS ?', 'Browser จะไม่ตีความข้อมูลที่ผู้ใช้ป้อนเป็น JavaScript, CSS หรือ HTML', 'Browser จะเข้ารหัส Cookie ทั้งหมดโดยอัตโนมัติ', 'Browser จะปฏิเสธการใช้ inline styles และ JavaScript ทั้งหมด', 'Browser จะทำให้ Cookie ใช้ได้เฉพาะในคำขอ HTTP เท่านั้น', 1, 3, 'false'),
(56, 2, 'CSP สามารถเปิดใช้งานได้อย่างไร ?', 'เมื่อ Browse ส่งคำขอไปยังเซิร์ฟเวอร์ จะต้องมีส่วน Content Security Policy Header', 'เซิร์ฟเวอร์ต้องส่งคืนส่วน Content Security Policy Header', 'ผู้ใช้ต้องเปิดใช้งานในการตั้งค่า Browser', 'ASP.NET จะเปิดใช้งานโดยอัตโนมัติ', 2, 3, 'false'),
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
(85, 2, 'เมื่อ Hacker ต้องการเรียกใช้ JavaScript โดยเลี่ยงการเข้ารหัส Input ตัวใดต่อไปนี้ที่สามารถใช้งานได้ ?', 'alert(\'XXS\')', 'alert(\'CSP\')', 'javascript:alert(\'XSS\')', 'js:alert(\'XSS\')', 3, 3, 'false'),
(86, 2, 'จากแผนผังการโจมตีแบบ XSS ขั้นตอนการโจมตีรูปแบบสองคืออะไร ?', 'Hacker จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', 'User จะทำการ requests หน้าเว็บไวต์จากหน้า Web Server', 'User จะทำการ requests หน้าเว็บไวต์จากหน้า Web Server', 'Hacker จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', 3, 3, 'false'),
(87, 2, 'จากแผนผังการโจมตีแบบ XSS ขั้นตอนการโจมตีรูปแบบสามคืออะไร ?', 'Web Browser ของผู้ใช้ทำการ Run Script ที่เป็นอันตรายที่ถูกเขียนไว้ใน HTML ซึ่งในกรณีนี้ จะเป็นการส่งคุกกี้ของเหยื่อไปยัง Server ของ Hacker', 'Hacker จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', 'Hacker จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', 'User จะทำการ requests หน้าเว็บไวต์จากหน้า Web Server', 1, 3, 'false'),
(88, 2, 'จากแผนผังการโจมตีแบบ XSS ขั้นตอนการโจมตีรูปแบบสุดท้ายคืออะไร ?', 'Hacker จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', 'User จะทำการ requests หน้าเว็บไวต์จากหน้า Web Server', 'Hacker จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', 'Hacker จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', 4, 3, 'false'),
(89, 2, '“ ความมั่นคงปลอดภัยของระบบสารสนเทศ ” หมายความว่า', 'มาตรการหรือการดำเนินการที่กำหนดขึ้น เพื่อป้องกัน รับมือ และลดความเสี่ยงจากภัยคุกคามทางไซเบอร์ ทั้งจากภายในและภายนอกประเทศ', 'การจัดทำให้ทรัพย์สินสารสนเทศสามารถทำงาน เข้าถึง หรือใช้งานได้ในเวลาที่ต้องการ', 'การป้องกันทรัพย์สินสารสนเทศจากการเข้าถึงใช้เปิดเผย ขัดขวาง เปลี่ยนแปลงแก้ไข ทำให้สูญหาย ทำให้เสียหาย ถูกทำลาย หรือล่วงรู้โดยมิชอบ', '-', 3, 3, 'false'),
(90, 2, 'หนึ่งวินาทีสามารถคำนวณแฮชได้กี่แฮชเมื่อใช้ฮาร์ดแวร์ระดับผู้บริโภค ?', '75,000,000', '7,500,000', '750,000,000', '7,500,000,000', 4, 3, 'false'),
(91, 2, 'HSTS ถูกลองรับโดย ?', 'Firefox only', 'Internet Explorer and Safari.', 'Chrome only.', 'Chrome and Firefox.', 4, 3, 'false'),
(92, 2, 'คุณลักษณะใดของคุกกี้ที่จะห้ามไม่ให้เบราว์เซอร์ส่งผ่านการเชื่อมต่อที่ไม่ปลอดภัย ?', 'ssl', 'httponly', 'secure', 'nohttp', 3, 3, 'false'),
(94, 2, 'ข้อใดต่อไปนี้คือเอาต์พุตที่เข้ารหัสสำหรับ JavaScript ?', '\\00003Ci\\00003ELager\\00003C\\00002Fi\\00003E', '\\x3ci\\x3eLager\\x3c\\x2fi\\x3e', '-', '-', 2, 3, 'false'),
(95, 2, 'การโจมตี XSS attack stored ที่เก็บไว้ในฐานข้อมูลเรียกว่า ?', 'reflected.', 'generated.', 'persisted.', 'relational.', 3, 3, 'false'),
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
(111, 2, '<img src=\"https://hakkaverse.com/upload/EL255_SR04.png\" alt=\"Trulli\" width=\"565\" height=\"153\">\r\n\r\n<br>จากที่เห็นนี้ จะนำไปสู่ช่องโหว่อะไร ?', 'XSS ทั้งหมด', 'Stored XSS', 'Reflected XSS', 'DOM XSS', 4, 1, 'false'),
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
(126, 20, 'a', 'a', 'aa', 'aaa', 'aaaa', 1, 4, 'false'),
(127, 20, 'a2', 'a', 'aa', 'aaa', 'aaaa', 2, 4, 'false'),
(128, 20, 'a3', 'bb', 'bbbbbbb', 'bbbbbbbbb', 'bbbbbbbbbbb', 3, 4, 'false'),
(129, 20, 'a4', 'sssssss', 'sssssssssssss', 'sddddddddddddd', 'ddzzzzzzzzzzzzzzzz', 4, 4, 'false'),
(130, 20, 'a5', 'wwwwwwwww', 'wwwwwwwwwwww', 'wwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwww', 3, 4, 'false'),
(131, 20, 'a6', 'asdwada', 'asdflishikj', 'hqlkjashdlfkjhalkjh', 'lkjhalsdas', 3, 4, 'false');

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
(1, 'admin', '121', '1', 2, 1, 0),
(2, 'admin', '123', '1', 2, 2, 1),
(3, 'admin', '105', '1', 2, 3, 0),
(4, 'admin', '122', '1', 2, 4, 0),
(5, 'admin', '98', '1', 2, 5, 0),
(6, 'admin', '120', '1', 2, 6, 0),
(7, 'admin', '101', '1', 2, 7, 0),
(8, 'admin', '99', '1', 2, 8, 0),
(9, 'admin', '116', '1', 2, 9, 0),
(10, 'admin', '113', '1', 2, 10, 1),
(11, 'admin', '104', '1', 2, 11, 0),
(12, 'admin', '112', '1', 2, 12, 1),
(13, 'admin', '111', '1', 2, 13, 1),
(14, 'admin', '102', '1', 2, 14, 0),
(15, 'admin', '3', '1', 2, 15, 1),
(16, 'admin', '1', '1', 2, 16, 1),
(17, 'admin', '109', '1', 2, 17, 0),
(18, 'admin', '118', '1', 2, 18, 0),
(19, 'admin', '110', '1', 2, 19, 1),
(20, 'admin', '114', '1', 2, 20, 0),
(21, 'admin', '103', '1', 2, 21, 0),
(22, 'admin', '125', '1', 2, 22, 0),
(23, 'admin', '124', '1', 2, 23, 0),
(24, 'admin', '100', '1', 2, 24, 1),
(25, 'admin', '115', '1', 2, 25, 0),
(26, 'admin', '119', '1', 2, 26, 0),
(27, 'admin', '117', '1', 2, 27, 1),
(28, 'admin', '108', '1', 2, 28, 1),
(29, 'admin', '107', '1', 2, 29, 1),
(30, 'admin', '106', '1', 2, 30, 0),
(31, 'admin', '84', '2', 2, 1, 1),
(32, 'admin', '68', '2', 2, 2, 0),
(33, 'admin', '77', '2', 2, 3, 1),
(34, 'admin', '69', '2', 2, 4, 0),
(35, 'admin', '80', '2', 2, 5, 1),
(36, 'admin', '61', '2', 2, 6, 0),
(37, 'admin', '70', '2', 2, 7, 1),
(38, 'admin', '62', '2', 2, 8, 0),
(39, 'admin', '60', '2', 2, 9, 1),
(40, 'admin', '79', '2', 2, 10, 0),
(41, 'admin', '76', '2', 2, 11, 1),
(42, 'admin', '66', '2', 2, 12, 1),
(43, 'admin', '78', '2', 2, 13, 1),
(44, 'admin', '81', '2', 2, 14, 1),
(45, 'admin', '75', '2', 2, 15, 0),
(46, 'admin', '67', '2', 2, 16, 0),
(47, 'admin', '34', '2', 2, 17, 1),
(48, 'admin', '59', '2', 2, 18, 0),
(49, 'admin', '82', '2', 2, 19, 1),
(50, 'admin', '33', '2', 2, 20, 1),
(51, 'admin', '57', '2', 2, 21, 0),
(52, 'admin', '73', '2', 2, 22, 1),
(53, 'admin', '72', '2', 2, 23, 1),
(54, 'admin', '65', '2', 2, 24, 0),
(55, 'admin', '64', '2', 2, 25, 1),
(56, 'admin', '58', '2', 2, 26, 0),
(57, 'admin', '74', '2', 2, 27, 1),
(58, 'admin', '71', '2', 2, 28, 0),
(59, 'admin', '63', '2', 2, 29, 1),
(60, 'admin', '83', '2', 2, 30, 0),
(61, 'admin', '89', '3', 2, 1, 0),
(62, 'admin', '45', '3', 2, 2, 1),
(63, 'admin', '88', '3', 2, 3, 0),
(64, 'admin', '87', '3', 2, 4, 0),
(65, 'admin', '47', '3', 2, 5, 0),
(66, 'admin', '90', '3', 2, 6, 0),
(67, 'admin', '44', '3', 2, 7, 1),
(68, 'admin', '94', '3', 2, 8, 0),
(69, 'admin', '54', '3', 2, 9, 1),
(70, 'admin', '126', '3', 2, 10, 0),
(71, 'admin', '95', '3', 2, 11, 0),
(72, 'admin', '86', '3', 2, 12, 1),
(73, 'admin', '51', '3', 2, 13, 1),
(74, 'admin', '52', '3', 2, 14, 1),
(75, 'admin', '42', '3', 2, 15, 0),
(76, 'admin', '91', '3', 2, 16, 0),
(77, 'admin', '92', '3', 2, 17, 0),
(78, 'admin', '43', '3', 2, 18, 0),
(79, 'admin', '46', '3', 2, 19, 0),
(80, 'admin', '48', '3', 2, 20, 0),
(81, 'admin', '127', '3', 2, 21, 1),
(82, 'admin', '55', '3', 2, 22, 0),
(83, 'admin', '39', '3', 2, 23, 0),
(84, 'admin', '40', '3', 2, 24, 0),
(85, 'admin', '85', '3', 2, 25, 0),
(86, 'admin', '38', '3', 2, 26, 0),
(87, 'admin', '56', '3', 2, 27, 0),
(88, 'admin', '35', '3', 2, 28, 0),
(89, 'admin', '41', '3', 2, 29, 0),
(90, 'admin', '36', '3', 2, 30, 1),
(252, 'test3', '126', '4', 20, 1, 1),
(251, 'test3', '127', '4', 20, 2, 0),
(97, 'zone', '80', '2', 2, 1, 1),
(98, 'zone', '83', '2', 2, 2, 0),
(99, 'zone', '63', '2', 2, 3, 0),
(100, 'zone', '33', '2', 2, 4, 1),
(101, 'zone', '81', '2', 2, 5, 0),
(102, 'zone', '60', '2', 2, 6, 1),
(103, 'zone', '76', '2', 2, 7, 1),
(104, 'zone', '79', '2', 2, 8, 0),
(105, 'zone', '61', '2', 2, 9, 0),
(106, 'zone', '68', '2', 2, 10, 1),
(107, 'zone', '64', '2', 2, 11, 1),
(108, 'zone', '62', '2', 2, 12, 1),
(109, 'zone', '67', '2', 2, 13, 1),
(110, 'zone', '59', '2', 2, 14, 0),
(111, 'zone', '74', '2', 2, 15, 1),
(112, 'zone', '57', '2', 2, 16, 0),
(113, 'zone', '73', '2', 2, 17, 0),
(114, 'zone', '77', '2', 2, 18, 0),
(115, 'zone', '82', '2', 2, 19, 0),
(116, 'zone', '34', '2', 2, 20, 1),
(117, 'zone', '66', '2', 2, 21, 0),
(118, 'zone', '70', '2', 2, 22, 1),
(119, 'zone', '78', '2', 2, 23, 0),
(120, 'zone', '69', '2', 2, 24, 0),
(121, 'zone', '65', '2', 2, 25, 1),
(122, 'zone', '71', '2', 2, 26, 1),
(123, 'zone', '84', '2', 2, 27, 0),
(124, 'zone', '72', '2', 2, 28, 0),
(125, 'zone', '75', '2', 2, 29, 0),
(126, 'zone', '58', '2', 2, 30, 0),
(127, 'zone', '122', '1', 2, 1, 0),
(128, 'zone', '109', '1', 2, 2, 0),
(129, 'zone', '108', '1', 2, 3, 0),
(130, 'zone', '1', '1', 2, 4, 0),
(131, 'zone', '120', '1', 2, 5, 1),
(250, 'test3', '129', '4', 20, 4, 0),
(249, 'test3', '131', '4', 20, 6, 1),
(248, 'test3', '130', '4', 20, 5, 0),
(136, 'zone', '117', '1', 2, 6, 0),
(137, 'zone', '119', '1', 2, 7, 0),
(138, 'zone', '118', '1', 2, 8, 0),
(139, 'zone', '101', '1', 2, 9, 1),
(140, 'zone', '104', '1', 2, 10, 0),
(141, 'zone', '103', '1', 2, 11, 1),
(142, 'zone', '112', '1', 2, 12, 1),
(143, 'zone', '110', '1', 2, 13, 0),
(144, 'zone', '100', '1', 2, 14, 0),
(145, 'zone', '115', '1', 2, 15, 1),
(146, 'zone', '102', '1', 2, 16, 0),
(147, 'zone', '125', '1', 2, 17, 0),
(148, 'zone', '113', '1', 2, 18, 0),
(149, 'zone', '3', '1', 2, 19, 0),
(150, 'zone', '114', '1', 2, 20, 1),
(151, 'zone', '121', '1', 2, 21, 1),
(152, 'zone', '106', '1', 2, 22, 0),
(153, 'zone', '105', '1', 2, 23, 1),
(154, 'zone', '99', '1', 2, 24, 1),
(155, 'zone', '107', '1', 2, 25, 0),
(156, 'zone', '111', '1', 2, 26, 0),
(157, 'zone', '124', '1', 2, 27, 0),
(158, 'zone', '123', '1', 2, 28, 0),
(159, 'zone', '116', '1', 2, 29, 1),
(160, 'zone', '98', '1', 2, 30, 0),
(247, 'test3', '128', '4', 20, 3, 0),
(246, 'admin', '131', '4', 20, 6, 0),
(245, 'admin', '130', '4', 20, 5, 0),
(244, 'admin', '129', '4', 20, 4, 1),
(243, 'admin', '128', '4', 20, 3, 1),
(242, 'admin', '127', '4', 20, 2, 1),
(168, 'zone', '88', '3', 2, 1, 0),
(169, 'zone', '55', '3', 2, 2, 0),
(170, 'zone', '51', '3', 2, 3, 0),
(171, 'zone', '56', '3', 2, 4, 0),
(172, 'zone', '94', '3', 2, 5, 1),
(173, 'zone', '87', '3', 2, 6, 0),
(174, 'zone', '89', '3', 2, 7, 0),
(175, 'zone', '48', '3', 2, 8, 0),
(176, 'zone', '54', '3', 2, 9, 1),
(177, 'zone', '86', '3', 2, 10, 1),
(178, 'zone', '127', '3', 2, 11, 0),
(179, 'zone', '47', '3', 2, 12, 0),
(180, 'zone', '95', '3', 2, 13, 1),
(181, 'zone', '45', '3', 2, 14, 1),
(182, 'zone', '90', '3', 2, 15, 0),
(183, 'zone', '52', '3', 2, 16, 1),
(184, 'zone', '46', '3', 2, 17, 0),
(185, 'zone', '91', '3', 2, 18, 0),
(186, 'zone', '126', '3', 2, 19, 0),
(187, 'zone', '85', '3', 2, 20, 0),
(188, 'zone', '92', '3', 2, 21, 1),
(189, 'test', '128', '4', 20, 1, 1),
(190, 'test', '129', '4', 20, 2, 0),
(191, 'test', '144', '4', 20, 3, 0),
(192, 'test', '143', '4', 20, 4, 0),
(193, 'test', '141', '4', 20, 6, 0),
(194, 'test', '140', '4', 20, 5, 0),
(195, 'test', '132', '6', 20, 1, 0),
(196, 'test', '133', '6', 20, 2, 1),
(197, 'test', '134', '6', 20, 3, 1),
(198, 'test', '135', '6', 20, 4, 0),
(199, 'test', '136', '6', 20, 5, 0),
(200, 'test2', '128', '4', 20, 1, 1),
(201, 'test', '114', '1', 2, 1, 0),
(202, 'test', '3', '1', 2, 2, 1),
(203, 'test', '118', '1', 2, 3, 1),
(204, 'test', '123', '1', 2, 4, 1),
(205, 'test', '108', '1', 2, 5, 1),
(206, 'test', '122', '1', 2, 6, 0),
(207, 'test', '113', '1', 2, 7, 0),
(208, 'test', '124', '1', 2, 8, 0),
(209, 'test', '111', '1', 2, 9, 1),
(210, 'test', '1', '1', 2, 10, 1),
(211, 'test', '120', '1', 2, 11, 0),
(212, 'test', '101', '1', 2, 12, 0),
(213, 'test', '106', '1', 2, 13, 0),
(214, 'test', '100', '1', 2, 14, 0),
(215, 'test', '99', '1', 2, 15, 1),
(216, 'test', '98', '1', 2, 16, 0),
(217, 'test', '125', '1', 2, 17, 1),
(218, 'test', '110', '1', 2, 18, 0),
(219, 'test', '105', '1', 2, 19, 0),
(220, 'test', '121', '1', 2, 20, 1),
(221, 'test', '116', '1', 2, 21, 1),
(222, 'test', '104', '1', 2, 22, 1),
(223, 'test', '117', '1', 2, 23, 0),
(224, 'test', '107', '1', 2, 24, 0),
(225, 'test', '102', '1', 2, 25, 0),
(226, 'test', '115', '1', 2, 26, 1),
(227, 'test', '112', '1', 2, 27, 1),
(228, 'test', '109', '1', 2, 28, 0),
(229, 'test', '119', '1', 2, 29, 0),
(230, 'test', '103', '1', 2, 30, 0),
(231, 'zone', '147', '3', 2, 22, 1),
(232, 'zone', '152', '3', 2, 23, 1),
(233, 'zone', '148', '3', 2, 24, 1),
(234, 'zone', '146', '3', 2, 25, 1),
(235, 'zone', '153', '3', 2, 26, 1),
(236, 'zone', '150', '3', 2, 27, 1),
(237, 'zone', '151', '3', 2, 28, 1),
(238, 'zone', '149', '3', 2, 29, 1),
(239, 'zone', '145', '3', 2, 30, 1),
(241, 'admin', '126', '4', 20, 1, 0);

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
  `skill_8` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `date`, `profile`, `group`, `point`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`) VALUES
(1, 'admin', 'admin@hakkverse.com', 'd0298c39e3a8caf23316c7c760c1bff2', '9/5/2022 12:11:10น.', '905341094689.jpg', 'admin', 625, '34', '22', '16', '0', '0', '0', '0', '0'),
(2, 'amaimon', 'emandem@gmail.com', '8784cb81a836fa422b061e9807d7043e', '11/5/2022 03:31:05น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'zone', 'msn.natakorn@gmail.com', 'ce7cdfad75a19bba150ba7cc0e36b798', '11/5/2022 22:06:30น.', 'profile.png', 'member', 78, '26', '20', '32', '0', '0', '0', '0', '0'),
(4, 'ozone', 'msn.natakorn@hotmail.com', 'ee5645b66fcc03f57114d8bcb9286df4', '11/5/2022 22:41:31น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'test', 'test@user', '67123be1ef76710bd77ecb92b1b49d97', '12/5/2022 02:09:17น.', 'profile.png', 'member', 86, '0', '26', '0', '0', '0', '0', '0', '0'),
(6, 'test2', 'test@haha.com', '67123be1ef76710bd77ecb92b1b49d97', '12/5/2022 02:25:17น.', 'profile.png', 'member', 20, '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'haha22', '222@ASDASD', '8bad8c011f684e28527168dbbbe945a9', '12/5/2022 13:45:40น.', 'profile.png', 'member', 0, '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 'test3', 'test@test', '67123be1ef76710bd77ecb92b1b49d97', '12/5/2022 15:18:52น.', '724505336422.jpg', 'member', 40, '0', '0', '0', '0', '0', '0', '0', '0');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `secret`
--
ALTER TABLE `secret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `secret_history`
--
ALTER TABLE `secret_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `test_history`
--
ALTER TABLE `test_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
