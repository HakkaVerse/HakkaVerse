-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 05:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybersecurity`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `name`, `description`, `html`, `button`, `img`, `vip`) VALUES
(1, 'Cross - Site Scripting', 'Cross Site Scripting ( XSS ) ', '', '', 'https://media.geeksforgeeks.org/wp-content/uploads/20190516152959/Cross-Site-ScriptingXSS.png', 'false'),
(2, 'SQL Injection\n', 'Sql Injection', '', '', 'https://miro.medium.com/max/1066/1*6YoaC40Xt8n2ASMldhijWg.jpeg', 'false'),
(3, 'Cyber Security\n', 'Web Security', '', '', 'https://bs-uploads.toptal.io/blackfish-uploads/components/blog_post_page/content/cover_image_file/cover_image/686299/retina_1708x683_cover-Redesign-WebSecurityVulnerabilities-Luke_Newsletter-04d5cdafdaf363f0bc6aa723a391c343-91ee4d294318c967b26187f4d67a8351.png', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `setting_home`
--

CREATE TABLE `setting_home` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `button` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_rank`
--

INSERT INTO `setting_rank` (`id`, `silver`, `gold`, `hacker`) VALUES
(1, 1, 31, 15);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_chart`
--

INSERT INTO `skill_chart` (`id`, `name`, `lesson_1`, `lesson_2`, `lesson_3`, `lesson_4`, `lesson_5`, `lesson_6`, `lesson_7`, `lesson_8`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`) VALUES
(1, 'SQL INJECT', 'Cross - Site Scripting', '', '', '', '', '', '', '', '10', '0', '0', '0', '0', '0', '0', '0'),
(2, 'XSS SKILL', 'Cross - Site Scripting', '', '', '', '', '', '', '', '15', '0', '0', '0', '0', '0', '0', '0'),
(3, 'Skill 3', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'Skill 4', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, 'Skill 5', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 'Skill 6', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 'Skill 7', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 'Skill 8', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `point`, `html`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `answer`, `lesson_id`, `hide`) VALUES
(1, 2, 'คำตอบใดอธิบายเกี่ยวกับ <b>Cross - Site Scripting</b> ได้ถูกต้องที่สุด ?', 'จัดการคำสั่ง <b>SQL</b> ที่ประกอบไปด้วยข้อมูลที่ถูกจัดเก็บไว้ในฐานข้อมูล', 'การใช้ <b>Cookie</b> ที่ส่งไปพร้อมกับทุกคำขอของ <b>Browser</b>', 'การจำกัด <b>Browser</b> ให้โหลดเนื้อหาจากแหล่งที่มาบางแห่ง', 'ทำการฉีด <b>JavaScript, CSS</b> หรือ <b>HTML</b> ลงไปใน <b>Web Application</b>', 4, 1, ''),
(2, 2, 'เพราะเหตุใด <b>XSS</b> จึงเป็นอันตราย ?', 'เมื่อ <b>Hacker</b> สามารถเข้าถึงข้อมูลของ <b>Browser</b> ได้แล้ว พวกเขาก็จะสามารถควบคุม <b>Browser</b> ได้อย่างสมบูรณ์', '<b>Hacker</b> จะสามารถเข้าถึงข้อมูลประจำตัวที่ใช้เข้าสู่ระบบอุปกรณ์ของผู้ใช้ได้', '<b>Hacker</b> จะสามารถเข้าถึงอุปกรณ์ของเหยื่อได้อย่างเต็มที่', 'วิธีเดียวที่จะไม่ทำให้ถูกโจมตี คือ ไม่เข้าเว็บไซต์ ', 1, 1, ''),
(3, 2, 'เมื่อเราทำการแสดงผลการป้อนข้อมูลของผู้ใช้ตามที่เป็นอยู่ในมุมมองโดยใช้ <b>Razor</b> ดังนี้<br>\r\n<input class=\"inputtest\" disabled value=\"@Model.Address. An attacker enters: <script>alert(\'XSS\');</script> as the address.\">\r\n<br>และจะเกิดอะไรขึ้นเมื่อมุมมองปรากฏขึ้น ? <b>( Alert )</b>', 'เมื่อ <b>Hacker</b> สามารถเข้าถึงข้อมูลของ <b>Browser</b> ได้แล้ว พวกเขาก็จะสามารถควบคุม <b>Browser</b> ได้อย่างสมบูรณ์', '<b>Hacker</b> จะสามารถเข้าถึงข้อมูลประจำตัวที่ใช้เข้าสู่ระบบอุปกรณ์ของผู้ใช้ได้', '<b>Hacker</b> จะสามารถเข้าถึงอุปกรณ์ของเหยื่อได้อย่างเต็มที่', '<span style=', 1, 1, ''),
(4, 2, 'คลาสใดต่อไปที่ใช้ในการ <b>Encode </b>เนื้อหา <b>JavaScript </b>ได้ด้วยตัวเองใน  <b>ASP.NET Core </b>', '<b>Encoding</b>', '<b>WebEncoder</b>', '<b>JavaScriptEncoder</b>', '<b>HttpUtility</b>', 3, 1, ''),
(5, 2, 'ตัวช่วย <b>HTML</b> แบบ <b>Raw</b> คืออะไร ?', 'ใช้เพื่อเลือกการเข้ารหัส <b>Razor</b> แบบอัตโนมัติ', 'ใช้สำหรับยกเลิกการเข้ารหัส <b>Razor</b> แบบอัตโนมัติ', 'ใช้เพื่อป้องกันไม่ให้ <b>Browser</b> โหลดเนื้อหาจากที่ใดก็ได้', 'ใช้สำหรับแสดงผล <b>HTML</b> ด้วย Inline Styling', 2, 1, ''),
(6, 2, 'เมื่อ <b>Hacker</b> ต้องการเรียกใช้ <b>JavaScript</b> โดยเลี่ยงการเข้ารหัส Input ตัวใดต่อไปนี้ที่สามารถใช้งานได้ ?', '<b>alert(\'XXS\')</b>', '<b>&lt;script>alert(\'XSS\');&lt;/script></b>', '<b>javascript:alert(\'XSS\')</b>', '<b>js:alert(\'XSS\')</b>', 3, 1, ''),
(7, 2, 'ถ้าเราต้องการจะใช้ค่าในส่วน <b>String.</b> การค้นหา <b>URL</b> ปัจจุบันและแสดงผลในส่วน <b>HTML</b> บน \r\n<b>Razor page.</b>\r\n<br>\r\nคำถามคือ ข้อใดคือมาตรการที่มีประสิทธิภาพในการปกป้อง <b>XSS</b> ทุกรูปแบบ ?', 'เข้ารหัสโดยใช้ <b>JavaScriptEncoder</b>', 'เข้ารหัสด้วย <b>HtmlEncoder</b>', 'แปลงเป็นตัวแปร <b>Razor</b>', 'ตรวจสอบค่ากับรายการที่อนุญาต', 4, 1, ''),
(8, 2, 'การตั้งค่าสถานะ <b>HttpOnly</b> บน <b>Cookie</b> จะมีประโยชน์อย่างไรเมื่อจัดการกับ <b>XSS</b> ?', 'เมื่อ <b>Hacker</b> มีการส่งคำขอ <b>HTTP</b> ตัว <b>Cookie</b> จะไม่ถูกส่งไปด้วย', '<b>Cookie</b> จะถูกเข้ารหัสโดยอัตโนมัติเมื่อเข้าถึงจาก <b>JavaScript</b>', 'หากการโจมตีสำเร็จ ผู้โจมตีจะไม่สามารถเข้าถึง <b>Cookie</b> ได้', '<b>Cookie</b> จะสามารถใช้ได้บนเซิร์ฟเวอร์เท่านั้น', 3, 1, ''),
(9, 2, '<b>CSP</b> คืออะไร ?', 'คือลักษณะของ <b>ASP.NET</b> ที่ <b>Cookie</b> สามารถอ่านได้จากตำแหน่งที่ถูกกำหนดค่าเอาไว้', 'คือคุณสมบัติของ <b>Browser</b> ที่จำกัดตำแหน่งไม่ให้ <b>Browser</b> ทำการ <b>Load Script, Styles</b> และอื่นๆ', 'คือคุณสมบัติของ <b>Browser</b> ที่สามารถอ่าน <b>Cookie</b> ได้จากตำแหน่งที่กำหนดค่าได้', 'คือ <b>ASP.NET Feature</b> ที่จำกัดตำแหน่งที่ <b>Browser</b> สามารถ <b>Load Script, Styles</b> และอื่นๆ', 2, 1, ''),
(10, 2, '<b>CSP</b> คืออะไร ?', 'คือลักษณะของ ASP.NET ที่ Cookie สามารถอ่านได้จากตำแหน่งที่ถูกกำหนดค่าเอาไว้', 'คือคุณสมบัติของ Browser ที่จำกัดตำแหน่งไม่ให้ Browser ทำการ Load Script, Styles และอื่นๆ', 'คือคุณสมบัติของ Browser ที่สามารถอ่าน Cookie ได้จากตำแหน่งที่กำหนดค่าได้', 'คือ ASP.NET Feature ที่จำกัดตำแหน่งที่ Browser สามารถ Load Script, Styles และอื่นๆ', 2, 1, ''),
(11, 3, '<b>CSP</b> สามารถเปิดใช้งานได้อย่างไร ?', 'เมื่อ <b>Browse</b> ส่งคำขอไปยังเซิร์ฟเวอร์ จะต้องมีส่วน <b>Content Security Policy Header</b>', 'เซิร์ฟเวอร์ต้องส่งคืนส่วน <b>Content Security Policy Header</b>', 'ผู้ใช้ต้องเปิดใช้งานในการตั้งค่า <b>Browser</b>', '<b>ASP.NET</b> จะเปิดใช้งานโดยอัตโนมัติ', 2, 1, ''),
(12, 3, 'CSP ย่อมาจากอะไร ?', '<b>Content Security Policy</b>', '<b>Certified Safety Professional</b>', '<b>Cloud Solution Provider</b>', '<b>Cloud License Program</b>', 1, 1, ''),
(13, 3, 'อะไรคือเหตุผลที่อาจจะทำให้เกิด <b>XSS</b> ?', 'ข้อมูลที่ผู้ใช้ป้อนซ้ำตามหน้าเว็บ', 'ไม่ได้ใช้ <b>HtmlEncoder</b> ใน <b>ASP.NET Core</b> หรือ <b>HttpUtility</b> ใน <b>ASP.NET</b> ขณะพัฒนา <b>Application</b>', '<b>Cookie</b> ไม่มีการ <b>HttpOnly Attribute</b>', 'ไม่มีการตรวจสอบว่า <b>URL</b> ได้ทำการส่งไปยังหน้าจอการเข้าสู่ระบบเพื่อดูว่าเป็น <b>URL</b> ในเครื่องหรือไม่', 1, 1, ''),
(14, 3, 'อะไรคือเหตุผลที่อาจจะทำให้เกิด <b>XSS</b> ?', 'ข้อมูลที่ผู้ใช้ป้อนซ้ำตามหน้าเว็บ', 'ไม่ได้ใช้ <b>HtmlEncoder</b> ใน <b>ASP.NET Core</b> หรือ <b>HttpUtility</b> ใน <b>ASP.NET</b> ขณะพัฒนา <b>Application</b>', '<b>Cookie</b> ไม่มีการ <b>HttpOnly Attribute</b>', 'ไม่มีการตรวจสอบว่า <b>URL</b> ได้ทำการส่งไปยังหน้าจอการเข้าสู่ระบบเพื่อดูว่าเป็น <b>URL</b> ในเครื่องหรือไม่', 1, 1, ''),
(15, 3, 'อะไรคือเหตุผลที่อาจจะทำให้เกิด <b>XSS</b> ?', 'ข้อมูลที่ผู้ใช้ป้อนซ้ำตามหน้าเว็บ', 'ไม่ได้ใช้ <b>HtmlEncoder</b> ใน <b>ASP.NET Core</b> หรือ <b>HttpUtility</b> ใน <b>ASP.NET</b> ขณะพัฒนา <b>Application</b>', '<b>Cookie</b> ไม่มีการ <b>HttpOnly Attribute</b>', 'ไม่มีการตรวจสอบว่า <b>URL</b> ได้ทำการส่งไปยังหน้าจอการเข้าสู่ระบบเพื่อดูว่าเป็น <b>URL</b> ในเครื่องหรือไม่', 1, 1, ''),
(16, 3, 'ทำไมการเข้ารหัสจึงมีประโยชน์ในบริบทของ <b>XSS</b> ?', '<b>Browser</b> จะไม่ตีความข้อมูลที่ผู้ใช้ป้อนเป็น <b>JavaScript, CSS</b> หรือ <b>HTML</b>', '<b>Browser</b> จะเข้ารหัส <b>Cookie</b> ทั้งหมดโดยอัตโนมัติ', '<b>Browser</b> จะปฏิเสธการใช้ <b>inline styles</b> และ <b>JavaScript</b> ทั้งหมด', '<b>Browser</b> จะทำให้ <b>Cookie</b> ใช้ได้เฉพาะในคำขอ <b>HTTP</b> เท่านั้น', 1, 1, ''),
(17, 3, '<b>CSP</b> สามารถช่วยเราจาก <b>XSS</b> ได้อย่างไร ?', 'ไม่ว่าจะกำหนดค่า <b>CSP</b> อย่างไร ก็จะไม่สามารถเรียกใช้ <b>JavaScript</b> จากตำแหน่งภายนอกได้', 'ไม่มีทางที่ <b>Hacker</b> จะขโมยคุกกี้ได้ต่อให้ทำ <b>XSS</b> สำเร็จ', 'เนื่องจากตำแหน่งของ <b>JavaScript</b> และ <b>Styles</b> ถูกจำกัด เลยมีความเป็นไปได้ที่ <b>Hacker</b> จะถูกจำกัดการโจมตี', '<b>Browser</b> จะเข้ารหัสข้อมูลของผู้ใช้ทั้งหมดโดยอัตโนมัติเมื่อเปิดใช้งาน <b>CSP</b>', 3, 1, ''),
(18, 3, '<b>CSS</b> <b>styles</b> เกี่ยวข้องยังไงกับ <b>XSS</b> ?', 'เมื่อ <b>CSS</b> ถูก <b>Injection</b> เข้าไป  <b>Hacker</b> จะสามารถเปลี่ยน <b>UI</b> หน้าเว็บเพื่อหลอกล่อผู้ใช้ให้ทำการกดเข้าไปในหน้านั้น', 'เครื่องมือ <b>CSS</b> ของ <b>Browser</b> สามารถช่วยเปิดเผยช่องโหว่ <b>XSS</b> ได้', '<b>CSS</b> สามารถปิดใช้งานได้เมื่อโจมตี <b>XSS</b> สำเร็จ', 'การโจมตีของ <b>XSS</b> ทำได้โดยใช้ <b>CSS</b> เท่านั้น', 1, 1, ''),
(19, 3, '<b>Hacker</b> สามารถนำคำสั่ง <b>105 OR 1=1</b> มาใช้ทำอะไรได้บ้าง ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้', 'เข้าถึงในส่วนของ ข้อมูลและรหัสของผู้ใช้', 'ส่งข้อมูลคืนแถวจากตาราง', 'ถูกทุกข้อ', 2, 1, ''),
(20, 3, '<b>Hacker</b> สามารถนำคำสั่ง <b>105 OR 1=1</b> มาใช้ทำอะไรได้บ้าง ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้', 'เข้าถึงในส่วนของ ข้อมูลและรหัสของผู้ใช้', 'ส่งข้อมูลคืนแถวจากตาราง', 'ถูกทุกข้อ', 2, 1, ''),
(21, 5, '<b>Hacker</b> สามารถนำคำสั่ง <b>105 OR 1=1</b> มาใช้ทำอะไรได้บ้าง ?', 'สามารถดึงข้อมูลผู้ใช้หรือรหัสผ่านออกมาจากฐานข้อมูลได้', 'เข้าถึงในส่วนของ ข้อมูลและรหัสของผู้ใช้', 'ส่งข้อมูลคืนแถวจากตาราง', 'ถูกทุกข้อ', 2, 1, ''),
(22, 5, 'การป้องกัน <b>Cross - Site Scripting</b> แบบที่หลายประเทศทำกันมีกี่วิธี', '6 วิธี', '7 วิธี', '8 วิธี', 'ไม่มีข้อใดถูก', 2, 1, ''),
(23, 5, '<b>Acunetix</b> คืออะไร ?', 'เป็นระบบช่วยในการสแกนช่องโหว่', 'เป็น <b>Plugins</b> ของ <b>Jenkins </b>', 'เป็นนวัตกรรมอัจฉริยะทางด้าน <b>Audio Conference</b>', 'ไม่มีข้อใดถูก', 1, 1, ''),
(24, 5, '<b>Cross-site Scripting Attack Vectors</b> ตัวใดใช้เพื่ออ้างอิง <b>Code JavaScript</b> ภายนอกได้ ?', '<b>&lt;input> tag</b>', '<b>&lt;body> tag</b>', '<b>&lt;img> tag</b>', '<b>&lt;script>tag</b>', 4, 1, ''),
(25, 5, '<b>Cross-site Scripting Attack Vectors</b> ตัวใดใช้เพื่อรวม <b>Script</b> ?', '<b>&lt;object> tag</b>', '<b>&lt;body> tag</b>', '<b>&lt;img> tag</b>', '<b>&lt;script>tag</b>', 1, 1, ''),
(26, 5, 'จากแผนผังการโจมตีแบบ <b>XSS</b> ขั้นตอนการโจมตีรูปแบบแรกคืออะไร ?', '<b>Hacker</b> จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', '<b>Web Browser</b> ของผู้ใช้ทำการ Run Script ที่เป็นอันตรายที่ถูกเขียนไว้ใน HTML ซึ่งในกรณีนี้ จะเป็นการส่งคุกกี้ของเหยื่อไปยัง Server ของ Hacker', '<b>Hacker</b> จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', '<b>Hacker</b> จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', 4, 1, ''),
(27, 5, 'จากแผนผังการโจมตีแบบ <b>XSS</b> ขั้นตอนการโจมตีรูปแบบสองคืออะไร ?', '<b>Hacker</b> จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', '<b>Hacker</b> จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', '<b>Hacker</b> จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', '<b>User</b> จะทำการ requests หน้าเว็บไวต์จากหน้า Web Server', 4, 1, ''),
(28, 5, 'จากแผนผังการโจมตีแบบ <b>XSS</b> ขั้นตอนการโจมตีรูปแบบสามคืออะไร ?', '<b>Hacker</b> จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', '<b>Web Browser</b> ของผู้ใช้ทำการ Run Script ที่เป็นอันตรายที่ถูกเขียนไว้ใน HTML ซึ่งในกรณีนี้ จะเป็นการส่งคุกกี้ของเหยื่อไปยัง Server ของ Hacker', '<b>Hacker</b> จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', '<b>Hacker</b> จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', 2, 1, ''),
(29, 5, 'จากแผนผังการโจมตีแบบ <b>XSS</b> ขั้นตอนการโจมตีรูปแบบสี่คืออะไร ?', '<b>Hacker</b> จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', '<b>Web Browser</b> ของผู้ใช้ทำการ Run Script ที่เป็นอันตรายที่ถูกเขียนไว้ใน HTML ซึ่งในกรณีนี้ จะเป็นการส่งคุกกี้ของเหยื่อไปยัง Server ของ Hacker', '<b>Hacker</b> จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', '<b>Hacker</b> จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', 3, 1, ''),
(30, 5, 'จากแผนผังการโจมตีแบบ <b>XSS</b> ขั้นตอนการโจมตีรูปแบบสุดท้ายคืออะไร ?', '<b>Hacker</b> จะสามารถใช้คุกกี้ที่ขโมยมาจากเราเพื่อนำไปใช้แอบอ้างในการทำธุรกรรมต่างๆได้', '<b>Web Browser</b> ของผู้ใช้ทำการ Run Script ที่เป็นอันตรายที่ถูกเขียนไว้ใน HTML ซึ่งในกรณีนี้ จะเป็นการส่งคุกกี้ของเหยื่อไปยัง Server ของ Hacker', '<b>Hacker</b> จะทำการดึง Cookie ของเหยื่อเมื่อมีการส่งคำขอ HTTP มาถึง Server ของ Hacker', '<b>Hacker</b> จะทำการใส่ข้อมูลลงไปใน Database ของเว็บไซต์โดยการส่งแบบฟอร์ที่มีช่องโหว่พร้อม Script ที่เป็นอันตราย', 1, 1, ''),
(33, 1, '1', '1', '1', '1', '1', 1, 2, 'false'),
(34, 2, '2', '2', '2', '2', '2', 1, 2, 'false'),
(35, 0, 'CyberSex', '1', '2', '3', '4', 1, 3, 'false'),
(36, 5, 'CyberPunk', '1', '2', '3', '4', 2, 3, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `test_history`
--

CREATE TABLE `test_history` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `test_id` text NOT NULL,
  `lesson_id` text NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_history`
--

INSERT INTO `test_history` (`id`, `username`, `test_id`, `lesson_id`, `point`) VALUES
(1, 'admin', '25', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `upload`) VALUES
(3, 'Epbu5XvVoAA0odQ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date` text NOT NULL,
  `profile` text NOT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'member',
  `point` int(11) NOT NULL,
  `skill_1` text NOT NULL DEFAULT '0',
  `skill_2` text NOT NULL DEFAULT '0',
  `skill_3` text NOT NULL DEFAULT '0',
  `skill_4` text NOT NULL DEFAULT '0',
  `skill_5` text NOT NULL DEFAULT '0',
  `skill_6` text NOT NULL DEFAULT '0',
  `skill_7` text NOT NULL DEFAULT '0',
  `skill_8` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `date`, `profile`, `group`, `point`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`) VALUES
(1, 'admin', 'admin555@email.com', '8bad8c011f684e28527168dbbbe945a9', '24/10/2021 21:18:37 น.', '838466746736.jpg', 'admin', 32, '96.22', '74.55', '85', '12', '45', '12', '10', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
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
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `test_history`
--
ALTER TABLE `test_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
