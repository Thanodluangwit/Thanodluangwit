-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2017 at 12:03 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_building`
--

CREATE TABLE `cms_building` (
  `id` int(10) NOT NULL,
  `building` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `buildyear` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_building`
--

INSERT INTO `cms_building` (`id`, `building`, `buildyear`, `price`, `img`, `detail`) VALUES
(2, 'อาคารเรียน2', '-', '000000', '1507655768.jpg', '---'),
(3, 'อาคารเรียน 1', '-', '-', '1507738638.png', '-');

-- --------------------------------------------------------

--
-- Table structure for table `cms_calendar`
--

CREATE TABLE `cms_calendar` (
  `id` int(11) NOT NULL,
  `inputtitle` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `startdate` text COLLATE utf8_unicode_ci NOT NULL,
  `starttime` text COLLATE utf8_unicode_ci,
  `enddate` text COLLATE utf8_unicode_ci,
  `enstime` text COLLATE utf8_unicode_ci,
  `location` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `eventwho` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_course`
--

CREATE TABLE `cms_course` (
  `id` int(10) NOT NULL,
  `course` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_course`
--

INSERT INTO `cms_course` (`id`, `course`) VALUES
(1, '<p><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif">ระดับมัธยมต้น แผนการเรียนทั่วไป&nbsp;<br />\r\nระดับชั้นมัธยมปลาย แบ่งออกเป็น 2 แผน 1.แผนวิทย์-คณิต 2.ศิลป์-ภาษา</span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `cms_executives`
--

CREATE TABLE `cms_executives` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_executives`
--

INSERT INTO `cms_executives` (`id`, `name`, `position`, `education`, `img`, `major`, `status`) VALUES
(1, 'นายกุศล   น่วมมะโน', 'ผู้อำนวยการสถานศึกษา', '-', '1510766524.jpg', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_extlink`
--

CREATE TABLE `cms_extlink` (
  `id` int(10) NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_extlink`
--

INSERT INTO `cms_extlink` (`id`, `name`, `link`) VALUES
(1, 'ระบบ MyOffice', 'http://182.93.164.42/myoffice/2560/'),
(2, 'ระบบ e - money สพม.10', 'http://sesa10.go.th/e-money/money/index.php'),
(3, 'E-office สพป.พบ.2-59', 'http://203.172.205.24/eoffice59/'),
(4, 'SmartOBEC', 'http://amss.sesa10.com/'),
(5, 'OBEC-Mail', 'https://www.obecmail.obec.go.th');

-- --------------------------------------------------------

--
-- Table structure for table `cms_gallery`
--

CREATE TABLE `cms_gallery` (
  `id` int(10) NOT NULL,
  `galleryid` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `activaty` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_galleryimg`
--

CREATE TABLE `cms_galleryimg` (
  `id` int(11) NOT NULL,
  `galleryid` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_history`
--

CREATE TABLE `cms_history` (
  `id` int(10) NOT NULL,
  `history` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_history`
--

INSERT INTO `cms_history` (`id`, `history`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_info`
--

CREATE TABLE `cms_info` (
  `id` int(10) NOT NULL,
  `school_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `school_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `school_cate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(500) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `schooltype` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bday` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `founder_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `llicensee_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tumbol` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `amphur` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `fax` text COLLATE utf8_unicode_ci NOT NULL,
  `manager` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone_dir` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_info`
--

INSERT INTO `cms_info` (`id`, `school_th`, `school_en`, `school_cate`, `course`, `schooltype`, `bday`, `founder_name`, `llicensee_name`, `address`, `tumbol`, `amphur`, `province`, `zipcode`, `phone`, `fax`, `manager`, `phone_dir`, `email`) VALUES
(1, 'โรงเรียนโตนดหลวงวิทยา', 'Tanodluang  witthaya  School', 'สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาเขต 10', 'มัธยมศึกษาปีที่ 1 – มัธยมศึกษาปีที่ 6', '1', '4 มิถุนายน 2518', '-', '-', '105  หมู่ที่ 9', 'บางเก่า', 'ชะอำ', 'เพชรบุรี', '76120', '032-503212', '032-503212', 'นายกุศล    น่วมมะโน', '-', 'Thanodluang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cms_intro`
--

CREATE TABLE `cms_intro` (
  `id` int(10) NOT NULL,
  `colorbg` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `button` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_intro`
--

INSERT INTO `cms_intro` (`id`, `colorbg`, `intro`, `button`, `status`) VALUES
(1, '3B3B3B', '<p style="text-align:center"><img alt="" height="704" src="/admin/public/ckeditor/kcfinder/upload/images/14713688_1192567147455912_2695885632856890783_n.jpg" width="1179" /></p>', 'No image', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_mission`
--

CREATE TABLE `cms_mission` (
  `id` int(10) NOT NULL,
  `mission` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_mission`
--

INSERT INTO `cms_mission` (`id`, `mission`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_news`
--

CREATE TABLE `cms_news` (
  `id` int(10) NOT NULL,
  `toppic` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_setting`
--

CREATE TABLE `cms_setting` (
  `id` int(10) NOT NULL,
  `scname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `marqu` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bgcolor` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imgbg` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imglogo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imghead` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `footer` text COLLATE utf8_unicode_ci NOT NULL,
  `gray` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_setting`
--

INSERT INTO `cms_setting` (`id`, `scname`, `description`, `keyword`, `marqu`, `facebook`, `bgcolor`, `imgbg`, `imglogo`, `imghead`, `footer`, `gray`) VALUES
(1, 'โรงเรียนโตนดหลวงวิทยา', 'ระบบเว็บไซต์สำเร็จรูปสำหรับสถานศึกษา ที่สะดวกและใช้งานง่าย ไม่ยุ่งยากกับ content ของเว็บไซต์พร้อมเเบ่งหมวดหมู่การใช้งานต่างๆทำให้ง่ายต่อการใช้งาน', 'ระบบเว็บไซต์สำเร็จรูปสำหรับสถานศึกษา , SWM CMS , เอสดับเบิ้ลยูเอ็ม ซีเอ็มเอส  , ซีเอ็มเอส', 'Welcome!  SWM CMS', 'https://www.facebook.com/swmcms/', '757575', '', '1510801227.jpg', '1510766547.png', '<p style="text-align:center"><span style="color:#ffffff"><span style="font-family:Trebuchet MS,Helvetica,sans-serif"><span style="font-size:16px">SWM CMS<br />\r\n&nbsp;ระบบเว็บไซต์สำเร็จรูปสำหรับสถานศึกษา<br />\r\n<em>Copyright &copy; 2017 SWM CMS</em></span></span></span></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_symbol`
--

CREATE TABLE `cms_symbol` (
  `id` int(10) NOT NULL,
  `symbol` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_symbol`
--

INSERT INTO `cms_symbol` (`id`, `symbol`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_vision`
--

CREATE TABLE `cms_vision` (
  `id` int(10) NOT NULL,
  `vision` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_vision`
--

INSERT INTO `cms_vision` (`id`, `vision`) VALUES
(1, '<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif"><strong>ปรัชญาของโรงเรียน</strong></span></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif">ชีวิตและหน้าที่การงานจะก้าวหน้า</span></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif">ถ้าใฝ่หาความรู้อยู่เป็นนิจ</span></span></p>\r\n\r\n<p style="margin-left:-13.5pt; margin-right:-16.75pt">&nbsp;</p>\r\n\r\n<p style="margin-left:-13.5pt; margin-right:-16.75pt; text-align:center">&nbsp;</p>\r\n\r\n<p style="margin-left:-13.5pt; margin-right:-16.75pt; text-align:center">&nbsp;</p>\r\n\r\n<p style="margin-left:-13.5pt; margin-right:-16.75pt; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif"><strong>คติพจน์ประจำโรงเรียน</strong></span></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif">สุโข ปัญญา&nbsp; ปฏิลาโภ</span></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif">ปัญญาก่อให้เกิดสุข</span></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:center">&nbsp;</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:center">&nbsp;</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif"><strong>คำขวัญของโรงเรียน</strong></span></span></p>\r\n\r\n<p style="margin-left:-13.5pt; margin-right:-16.75pt; text-align:center"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif">เรียนดี&nbsp; มีวินัย&nbsp; ใจกล้า</span></span><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif">พลานามัยสมบูรณ์</span></span></p>\r\n\r\n<p style="margin-left:-13.5pt; margin-right:-16.75pt; text-align:center">&nbsp;</p>\r\n\r\n<p style="margin-left:0in; margin-right:0in"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:18.0pt"><span style="font-family:&quot;TH Niramit AS&quot;">วิสัยทัศน์ (</span></span></strong><strong><span style="font-size:18.0pt"><span style="font-family:&quot;TH Niramit AS&quot;">Vision)</span></span></strong></span></span></p>\r\n\r\n<p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size:18.0pt"><span style="font-family:&quot;TH Niramit AS&quot;">โรงเรียนโตนดหลวงวิทยาเป็นสถานศึกษาแห่งการเรียนรู้ตามหลักปรัชญาของเศรษฐกิจพอเพียง&nbsp; โดยชุมชนมีส่วนร่วม&nbsp; พร้อมเข้าสู่ประชาคมอาเซียน</span></span></span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_02_09_225721_create_visitor_registry', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2017_10_10_062701_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1dxQuEok2NctmeiDpJCER4TfrIGCNtQIEGlHj4t8', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaFZ2UDVuQUE5TzlJanRNOWduV281ZXhqVlN4aWtCTXV1UmczQlVlNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9zY2hvb2wucGF0Y2hhcmEubWUvYWRtaW4vc2Nob29sLmluZm8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1507796317),
('exXX6mhOI42VLsajR0UtgCiVeeDF9NJ8FlHQrJXQ', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicE1LQUxjRjlkYWdQcDJPQkRTcEhjcWZQVnhySDhlS3UxZWc3THVDeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zY2hvb2wucGF0Y2hhcmEubWUvaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1507807042),
('FBnAozshWZx25uaZxxOS6abGHUwuSYul4B5so7zY', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM3U5VzJNeGFzYTVJaUxHN2tyWjh5QU1PV0FzNDFON3c1eDNpQkE4dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zY2hvb2wucGF0Y2hhcmEubWUvaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1510766549),
('gV1WwpgSGvxBDd2tAdRkLtIO6GoKtWIwz5IkSXRE', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2JzODVLMFFaVmlNSXplUEVMMW5iY3o2ZTNmb1BIeXFZUldMTUlVdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zY2hvb2wucGF0Y2hhcmEubWUvaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1508483416),
('TFmzP3rcHmewBKPgGLKAYqrXiQmnylN3SqR8Pzgt', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiUGNaSVlCSlJWeVo4VjdhWjh3ZHY4aFVVQU1pNm5wY1BrdzBmRkFnYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9zY2hvb2wucGF0Y2hhcmEubWUvaG9tZSI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mzk6Imh0dHA6Ly9zY2hvb2wucGF0Y2hhcmEubWUvYWRtaW4vc2V0dGluZyI7fX0=', 1510802175);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@swm.me', '$2y$10$t4b2d/IsZuLD5DiXnDAP3.J67BtbIyyA9sFnBBWKCZl/t9uvAKZt6', 'UZsYxMe9TL4MrxWKlruDdzHIU8O3g7yJzXeCNSY9YRJ7afTT20Il1yfjgZlQ', '2017-10-10 10:15:36', '2017-10-10 10:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_registry`
--

CREATE TABLE `visitor_registry` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clicks` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_building`
--
ALTER TABLE `cms_building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_calendar`
--
ALTER TABLE `cms_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_course`
--
ALTER TABLE `cms_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_executives`
--
ALTER TABLE `cms_executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_extlink`
--
ALTER TABLE `cms_extlink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_gallery`
--
ALTER TABLE `cms_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_galleryimg`
--
ALTER TABLE `cms_galleryimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_history`
--
ALTER TABLE `cms_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_info`
--
ALTER TABLE `cms_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_intro`
--
ALTER TABLE `cms_intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_mission`
--
ALTER TABLE `cms_mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_news`
--
ALTER TABLE `cms_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_setting`
--
ALTER TABLE `cms_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_symbol`
--
ALTER TABLE `cms_symbol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_vision`
--
ALTER TABLE `cms_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor_registry`
--
ALTER TABLE `visitor_registry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_building`
--
ALTER TABLE `cms_building`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cms_calendar`
--
ALTER TABLE `cms_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_course`
--
ALTER TABLE `cms_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_executives`
--
ALTER TABLE `cms_executives`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_extlink`
--
ALTER TABLE `cms_extlink`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cms_gallery`
--
ALTER TABLE `cms_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_galleryimg`
--
ALTER TABLE `cms_galleryimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_history`
--
ALTER TABLE `cms_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_info`
--
ALTER TABLE `cms_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_intro`
--
ALTER TABLE `cms_intro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_mission`
--
ALTER TABLE `cms_mission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_news`
--
ALTER TABLE `cms_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms_setting`
--
ALTER TABLE `cms_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_symbol`
--
ALTER TABLE `cms_symbol`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cms_vision`
--
ALTER TABLE `cms_vision`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitor_registry`
--
ALTER TABLE `visitor_registry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
