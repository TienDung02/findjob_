-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for worksout
DROP DATABASE IF EXISTS `worksout`;
CREATE DATABASE IF NOT EXISTS `worksout` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `worksout`;

-- Dumping structure for table worksout.apply_job
DROP TABLE IF EXISTS `apply_job`;
CREATE TABLE IF NOT EXISTS `apply_job` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_job` int NOT NULL,
  `id_candidate` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(999) COLLATE utf8mb4_general_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.apply_job: 2 rows
/*!40000 ALTER TABLE `apply_job` DISABLE KEYS */;
INSERT INTO `apply_job` (`id`, `id_job`, `id_candidate`, `full_name`, `email`, `message`, `cv`, `create_day`, `update_day`) VALUES
	(1, 4, 6, 'afb', 'nongtiendung1501@gmail.com', 'dfbsdfb', 'cv/1691941541ico-01.png', '2023-08-13', '2023-08-13'),
	(2, 4, 1, 'Nishan Madhushanka', 'nongtiendung2309@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'cv/1691943680user_02.png', '2023-08-13', '2023-08-13');
/*!40000 ALTER TABLE `apply_job` ENABLE KEYS */;

-- Dumping structure for table worksout.blog
DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id_blog` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category_blog` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `desc` varchar(9999) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.blog: 3 rows
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`id_blog`, `title`, `author`, `category_blog`, `img`, `desc`, `create_day`, `update_date`) VALUES
	(4, 'How to “Woo” a Recruiter and Land Your Dream Job', 'Purethemes', 'Developement', 'img_blog/1691684153blog-post-02 (1).jpg', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.\r\n\r\nEfficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '0000-00-00', '0000-00-00'),
	(7, '11 Tips to Help You Get New Clients Through Cold Calling', 'Purethemes', 'Career counseling', 'img_blog/1691684076blog-post-03 (1).jpg', 'Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables. Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.\r\n\r\nPhosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities.\r\n\r\nCollaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.\r\n\r\nCredibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas with optimal networks.', '0000-00-00', '0000-00-00'),
	(8, 'Hey Job Seeker, It’s Time To Get Up And Get Hired', 'Purethemes', '', 'img_blog/1691684205blog-post-01 (1).jpg', 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.\r\n\r\nThe bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. “What’s happened to me? ” he thought. It wasn’t a dream.\r\n\r\nHis room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops', '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Dumping structure for table worksout.bookmark
DROP TABLE IF EXISTS `bookmark`;
CREATE TABLE IF NOT EXISTS `bookmark` (
  `id_bookmark` int NOT NULL AUTO_INCREMENT,
  `id_candidate` int NOT NULL,
  `id_job` int NOT NULL,
  PRIMARY KEY (`id_bookmark`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.bookmark: 3 rows
/*!40000 ALTER TABLE `bookmark` DISABLE KEYS */;
INSERT INTO `bookmark` (`id_bookmark`, `id_candidate`, `id_job`) VALUES
	(38, 1, 4),
	(37, 6, 11);
/*!40000 ALTER TABLE `bookmark` ENABLE KEYS */;

-- Dumping structure for table worksout.candidate
DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `id_candidate` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `about` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` int NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_candidate`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.candidate: ~2 rows (approximately)
INSERT INTO `candidate` (`id_candidate`, `id_user`, `avatar`, `first_name`, `last_name`, `tel`, `email`, `about`, `active`, `create_day`, `update_day`) VALUES
	(1, 1, 'img_temp/user_02.png', '123', 'ABC', '0335594771', 'nongtiendung2309@gmail.com', 'Candidate\r\n', 1, '0000-00-00', '2023-08-10'),
	(6, 11, '', '', '', '', 'nongtiendung1501@gmail.com', '', 1, '2023-08-13', '0000-00-00');

-- Dumping structure for table worksout.candidate_education
DROP TABLE IF EXISTS `candidate_education`;
CREATE TABLE IF NOT EXISTS `candidate_education` (
  `id_education` int NOT NULL AUTO_INCREMENT,
  `id_candidate` int NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `qualification(s)` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `note` varchar(999) COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_education`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.candidate_education: ~0 rows (approximately)

-- Dumping structure for table worksout.candidate_experience
DROP TABLE IF EXISTS `candidate_experience`;
CREATE TABLE IF NOT EXISTS `candidate_experience` (
  `id_experience` int NOT NULL AUTO_INCREMENT,
  `id_candidate` int NOT NULL,
  `Employer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `note` varchar(999) COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_experience`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.candidate_experience: ~0 rows (approximately)

-- Dumping structure for table worksout.candidate_network_profile
DROP TABLE IF EXISTS `candidate_network_profile`;
CREATE TABLE IF NOT EXISTS `candidate_network_profile` (
  `id_network_profile` int NOT NULL AUTO_INCREMENT,
  `id_candidate` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_network_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.candidate_network_profile: ~0 rows (approximately)

-- Dumping structure for table worksout.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.categories: ~21 rows (approximately)
INSERT INTO `categories` (`id_category`, `parent_id`, `name`, `create_day`, `update_day`) VALUES
	(1, 0, 'Accounting / Finance', '2023-07-23', '2023-07-27'),
	(4, 0, 'Automotive Jobs', '2023-07-23', '2023-07-27'),
	(5, 0, 'Construction / Facilities', '2023-07-23', '2023-07-27'),
	(7, 0, 'Design, Art & Multimedia', '2023-07-23', '2023-07-27'),
	(8, 0, 'Education Training', '2023-07-23', '2023-07-27'),
	(9, 0, 'Healthcare', '2023-07-23', '2023-07-27'),
	(10, 0, 'Restaurant / Food Service', '2023-07-23', '2023-07-27'),
	(37, 0, 'Sales & Marketing', '2023-07-27', '2023-07-27'),
	(38, 37, 'Display Advertising', '2023-07-27', '2023-07-27'),
	(39, 37, 'Email Marketing', '2023-07-27', '2023-07-27'),
	(40, 37, 'Lead Generation', '2023-07-27', '2023-07-27'),
	(41, 37, 'Market & Customer Research', '2023-07-27', '2023-07-27'),
	(42, 37, 'Marketing Strategy', '2023-07-27', '2023-07-27'),
	(43, 37, 'Public Relations', '2023-07-27', '2023-07-27'),
	(44, 7, 'Adobe Photoshop', '2023-07-27', '2023-07-27'),
	(45, 7, 'Design', '2023-07-27', '2023-07-27'),
	(46, 7, 'Animation', '2023-07-27', '2023-07-27'),
	(47, 7, 'Graphic Design', '2023-07-27', '2023-07-27'),
	(48, 7, 'Illustration', '2023-07-27', '2023-07-27'),
	(49, 7, 'Video', '2023-07-27', '2023-07-27'),
	(50, 7, 'Logo Design', '2023-07-27', '2023-07-27');

-- Dumping structure for table worksout.categories_blog
DROP TABLE IF EXISTS `categories_blog`;
CREATE TABLE IF NOT EXISTS `categories_blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.categories_blog: 3 rows
/*!40000 ALTER TABLE `categories_blog` DISABLE KEYS */;
INSERT INTO `categories_blog` (`id`, `name`) VALUES
	(1, 'News'),
	(2, 'Developement'),
	(3, 'Career counseling');
/*!40000 ALTER TABLE `categories_blog` ENABLE KEYS */;

-- Dumping structure for table worksout.company
DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id_company` int NOT NULL AUTO_INCREMENT,
  `id_employer` int NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `company_tagline` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `headquarters` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `since` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `industry` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_size` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_average_salary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `header_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `active` int NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.company: 7 rows
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`id_company`, `id_employer`, `company_name`, `company_tagline`, `headquarters`, `latitude`, `longitude`, `company_logo`, `video`, `since`, `company_website`, `email`, `phone`, `twitter`, `facebook`, `industry`, `company_size`, `company_average_salary`, `description`, `header_img`, `active`, `create_day`, `update_day`) VALUES
	(12, 1, 'sdvdf', 'sdfbsdf', 'sdfbsdf', 'sdfb', 'sdfbsdf', 'img_temp/company-logo.png', 'sdfbsd', '0000-00-00', 'sdfbsd', 'sdfbsdf', 'sdfbsdf', 'sfdbsdf', 'sdfbsdf', '01 - 05', '15 - 30<', '30 - 50', ' sdfbsdf', 'img_temp/1691598700user_03.png', 1, '2023-08-09', '2023-08-09'),
	(11, 1, 'UIT', 'UIT', 'fgbfdgb', 'sdfbdsfb', 'sdfbsdfbsdfbsdfbdfb', 'img_temp/', 'sdfbsdfb', '0000-00-00', 'UIT', '0335594771', '0335594771', 'UIT', 'UIT', '01 - 05', '15 - 30<', '15 - 30<', ' adfsdf', 'img_temp/1691598041user_03.png', 0, '2023-08-09', '2023-08-09'),
	(10, 1, 'FPT Software', '', '', '', '', 'img_temp/', '', '0000-00-00', '', '', '', '', '', '', '', '', ' ', 'img_temp/1691514643', 1, '2023-08-08', '2023-08-08'),
	(6, 1, 'Persol Career Tech Studio', '', '', '', '', 'img_temp/', '', '0000-00-00', '', '', '', '', '', '', '', '', ' ', 'img_temp/1691514121', 0, '2023-08-08', '2023-08-08'),
	(5, 1, 'Viettel Group', '', '', '', '', 'img_temp/', '', '0000-00-00', '', '', '', '', '', '', '', '', ' ', 'img_temp/1691513611', 0, '2023-08-08', '2023-08-08'),
	(13, 1, 'aaaaaaaaaaaaaaaaaaaa', 'sdfbsdf', 'sdfbsdf', 'sdfbsdf', 'sdfbsdf', 'img_temp/avatar-placeholder.png', 'asdvasd', '0000-00-00', 'asdvas', 'asdvasd', 'asdvasd', 'asdvasdv', 'asdvasv', '01 - 05', '30 - 50', '30 - 50', ' asdvasdv', 'img_temp/1691599940user_03.png', 1, '2023-08-09', '2023-08-09'),
	(14, 1, 'asfvadf', '', '', '', '', 'img_temp/avatar-placeholder.png', '', '13-03-2009', '', '', '', '', '', '', '', '', ' ', 'img_temp/1691599968', 0, '2023-08-09', '2023-08-09');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Dumping structure for table worksout.employer
DROP TABLE IF EXISTS `employer`;
CREATE TABLE IF NOT EXISTS `employer` (
  `id_employer` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `about` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` int NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_employer`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.employer: 1 rows
/*!40000 ALTER TABLE `employer` DISABLE KEYS */;
INSERT INTO `employer` (`id_employer`, `id_user`, `avatar`, `first_name`, `last_name`, `tel`, `email`, `about`, `active`, `create_day`, `update_day`) VALUES
	(1, 2, 'img_temp/user_01.png', 'ABC', '123', '0335594771', 'nongtiendung2810@gmail.com', 'employer', 0, '2023-08-06', '2023-08-06');
/*!40000 ALTER TABLE `employer` ENABLE KEYS */;

-- Dumping structure for table worksout.industry
DROP TABLE IF EXISTS `industry`;
CREATE TABLE IF NOT EXISTS `industry` (
  `id_industry` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_industry`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.industry: 3 rows
/*!40000 ALTER TABLE `industry` DISABLE KEYS */;
INSERT INTO `industry` (`id_industry`, `name`, `create_day`, `update_day`) VALUES
	(1, 'Construction', '0000-00-00', '0000-00-00'),
	(2, 'Gastronomy', '0000-00-00', '0000-00-00'),
	(3, 'Technology', '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `industry` ENABLE KEYS */;

-- Dumping structure for table worksout.job
DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_employer` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `job_type` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `job_tag` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(999) COLLATE utf8mb4_general_ci NOT NULL,
  `job_requirements` varchar(9999) COLLATE utf8mb4_general_ci NOT NULL,
  `minimum_rate` int NOT NULL,
  `maximum_rate` int NOT NULL,
  `minimum_salary` int NOT NULL,
  `maximum_salary` int NOT NULL,
  `closing_day` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apply` int NOT NULL,
  `active` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.job: ~2 rows (approximately)
INSERT INTO `job` (`id`, `id_employer`, `title`, `category`, `job_type`, `location`, `job_tag`, `description`, `job_requirements`, `minimum_rate`, `maximum_rate`, `minimum_salary`, `maximum_salary`, `closing_day`, `apply`, `active`, `create_day`, `update_day`) VALUES
	(4, 1, 'Social Media And Public Relation Executive', '4, 9', 'Freelance', 'Hà Nội', '$sell,,,,,', 'The Social Media & PR Executive will be responsible for increasing hotel marketing communication across a variety of social media platforms to engage the audience in relevant conversations and coordinate all public relations activities.', '<ul class=""""""list-1"""""" style=""""""box-sizing:""""" border-box;="""""""""" overflow-wrap:="""""""""" break-word;="""""""""" margin-bottom:="""""""""" 10px;="""""""""" font-style:="""""""""" normal;="""""""""" font-variant-ligatures:="""""""""" font-variant-caps:="""""""""" font-weight:="""""""""" 400;="""""""""" font-size:="""""""""" 14px;="""""""""" font-family:="""""""""" poppins,="""""""""" helveticaneue,="""""""""" "helvetica="""""""""" neue",="""""""""" helvetica,="""""""""" arial,="""""""""" sans-serif;="""""""""" list-style-type:="""""""""" disc;="""""""""" color:="""""""""" rgb(102,="""""""""" 102,="""""""""" 102);"=""""""""""><li style=""""""box-sizing:""""" border-box;="""""""""" margin-bottom:="""""""""" 7px;="""""""""" padding:="""""""""" 5px;="""""""""" list-style-position:="""""""""" outside;="""""""""" list-style-image:="""""""""" none;"=""""""""""><p style="box-sizing: border-box; overflow-wrap: break-word; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; font-size: 14px; line-height: inherit; font-family: Poppins, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif; color: rgb(102, 102, 102);"><span style="box-sizing: border-box; font-weight: 700; color: rgb(51, 51, 51);">Job Responsibilities: </span></p><ul class="list-1" style="box-sizing: border-box; overflow-wrap: break-word; margin-bottom: 10px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; font-size: 14px; font-family: Poppins, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif; list-style-type: disc; color: rgb(102, 102, 102);"><li style="box-sizing: border-box; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">To oversee and manage social media accounts (twitter, facebook, linkedin, instagram,  Google and other social media channels in accordance with the hotel standards.</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">The candidate will be primarily responsible for developing& executing strategies to promote the hotel across Social Media Networks with various Social Media Marketing tools provided in a global environment.</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">To run high priority social creative campaigns, media engagement and third parties as required and ensuring that all work is aligned with brand marketing plans and campaigns.</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">​To be responsible for reflecting the style and tone of voice across social media marketing and ensure that content and conversations match audience needs.</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">Content creation, assimilation & distribution on Social Media Networks in appropriate situations.</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">To advise and participate in the development and delivery of a social media strategy for hotel products & services.</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">Conceptualize and execute social media campaigns, contest etc…</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">To source content and supply the copy and images for the blog, based on content required for email, website and social media campaigns.</li><li style="box-sizing: border-box; margin-top: 7px; margin-bottom: 7px; padding: 5px; list-style-position: outside; list-style-image: none;">To create assets (images, gifs, video) that can be used across the social media channels in line with marketing priorities.</li></ul></li></ul>', 50, 80, 15000, 20000, '10-10-2023', 0, '1', '2023-08-03', '2023-08-12'),
	(8, 1, 'Telecommunication Systems Engineer', '5, ', 'Full-Time', 'Hà Nội', '$,', 'ssssssssssssss', '2222', 12, 20, 1500, 3000, 'Day-Month-2023', 0, '2', '2023-08-10', '2023-08-12'),
	(11, 1, 'afvadf', '5, ', 'Freelance', 'TP.HCM', 'asdvas,', 'asdva', '<p>asdvasdv</p>', 0, 0, 0, 0, 'Day-Month-2023', 0, '1', '2023-08-13', '2023-08-13'),
	(12, 1, 'afvbsgb', '5, ', 'Internship', 'TP.HCM', 'fgsfgn,', 'sfgns', '<p>sgnsfgn</p>', 0, 0, 0, 0, 'Day-Month-2023', 0, '0', '2023-08-13', '2023-08-13');

-- Dumping structure for table worksout.job_type
DROP TABLE IF EXISTS `job_type`;
CREATE TABLE IF NOT EXISTS `job_type` (
  `id_job_type` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_job_type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.job_type: 5 rows
/*!40000 ALTER TABLE `job_type` DISABLE KEYS */;
INSERT INTO `job_type` (`id_job_type`, `name`) VALUES
	(1, 'Full-Time'),
	(2, 'Part-Time'),
	(3, 'Internship'),
	(4, 'Freelance'),
	(5, 'Temporary');
/*!40000 ALTER TABLE `job_type` ENABLE KEYS */;

-- Dumping structure for table worksout.location
DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id_location` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_location`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.location: 3 rows
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` (`id_location`, `name`) VALUES
	(1, 'Hà Nội'),
	(2, 'TP.HCM'),
	(3, 'Bình Dương');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;

-- Dumping structure for table worksout.popular_categories
DROP TABLE IF EXISTS `popular_categories`;
CREATE TABLE IF NOT EXISTS `popular_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.popular_categories: ~0 rows (approximately)

-- Dumping structure for table worksout.tags
DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `popular` int NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.tags: 25 rows
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`tag_id`, `name`, `popular`, `create_day`, `update_day`) VALUES
	(29, 'php', 4, '0000-00-00', '0000-00-00'),
	(46, '$$html', 1, '0000-00-00', '0000-00-00'),
	(45, '$html', 3, '0000-00-00', '0000-00-00'),
	(44, '', 40, '0000-00-00', '0000-00-00'),
	(43, 'ddd', 1, '0000-00-00', '0000-00-00'),
	(42, 'ccc', 1, '0000-00-00', '0000-00-00'),
	(41, 'bbb', 1, '0000-00-00', '0000-00-00'),
	(40, 'aaa', 2, '0000-00-00', '0000-00-00'),
	(39, 'efw', 1, '0000-00-00', '0000-00-00'),
	(38, 'hnhg', 1, '0000-00-00', '0000-00-00'),
	(37, 'asa', 1, '0000-00-00', '0000-00-00'),
	(36, 'sdfsdf', 1, '0000-00-00', '0000-00-00'),
	(35, 'sdfbs', 1, '0000-00-00', '0000-00-00'),
	(34, 'sdfbsd', 1, '0000-00-00', '0000-00-00'),
	(33, 'sdfbsdf', 1, '0000-00-00', '0000-00-00'),
	(32, 'sdbsd', 1, '0000-00-00', '0000-00-00'),
	(31, 'ruby', 4, '0000-00-00', '0000-00-00'),
	(30, 'javascript', 2, '0000-00-00', '0000-00-00'),
	(28, 'css', 10, '0000-00-00', '0000-00-00'),
	(27, 'html', 6, '0000-00-00', '0000-00-00'),
	(47, 'sell', 5, '0000-00-00', '0000-00-00'),
	(48, '$sell', 4, '0000-00-00', '0000-00-00'),
	(49, '$$sell', 1, '0000-00-00', '0000-00-00'),
	(50, '$$$sell', 1, '0000-00-00', '0000-00-00'),
	(51, '$$$$sell', 1, '0000-00-00', '0000-00-00'),
	(52, 'afbdfb', 1, '0000-00-00', '0000-00-00'),
	(53, 'afvdf', 2, '0000-00-00', '0000-00-00'),
	(54, 'fbd', 1, '0000-00-00', '0000-00-00'),
	(55, 'sdsv', 1, '0000-00-00', '0000-00-00'),
	(56, 'a        a', 1, '0000-00-00', '0000-00-00'),
	(57, 'aa aa aa', 1, '0000-00-00', '0000-00-00'),
	(58, 'b b b', 1, '0000-00-00', '0000-00-00'),
	(59, 'asdvas', 1, '0000-00-00', '0000-00-00'),
	(60, 'fgsfgn', 1, '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table worksout.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL,
  `active` int NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.user: 4 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `user_name`, `email`, `password`, `role`, `active`, `create_day`, `update_day`) VALUES
	(1, 'nguyenvana', 'nongtiendung2309@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2023-08-03', '2023-08-03'),
	(2, 'nguyenvanb', 'nongtiendung2810@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 1, '2023-08-06', '2023-08-06'),
	(0, '111111', '111111', '202cb962ac59075b964b07152d234b70', 3, 1, '0000-00-00', '0000-00-00'),
	(11, 'nguyenvanc', 'nongtiendung1501@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 0, '2023-08-13', '2023-08-13');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
