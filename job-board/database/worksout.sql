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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.candidate: ~1 rows (approximately)
INSERT INTO `candidate` (`id_candidate`, `id_user`, `avatar`, `first_name`, `last_name`, `tel`, `email`, `about`, `active`, `create_day`, `update_day`) VALUES
	(1, 1, 'img_temp/user_02.png', '123', 'ABC', '0335594771', 'nongtiendung2309@gmail.com', 'Candidate\r\n', 1, '0000-00-00', '2023-08-10');

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

-- Dumping data for table worksout.categories_blog: 4 rows
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
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id_employer`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.employer: 1 rows
/*!40000 ALTER TABLE `employer` DISABLE KEYS */;
INSERT INTO `employer` (`id_employer`, `id_user`, `avatar`, `first_name`, `last_name`, `tel`, `email`, `about`, `create_day`, `update_day`) VALUES
	(1, 2, 'img_temp/user_01.png', 'ABC', '123', '0335594771', 'nongtiendung2810@gmail.com', 'employer', '2023-08-06', '2023-08-06');
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
  `minimum_rate` int NOT NULL,
  `maximum_rate` int NOT NULL,
  `minimum_salary` int NOT NULL,
  `maximum_salary` int NOT NULL,
  `closing_day` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `refuse` int NOT NULL,
  `create_day` date NOT NULL,
  `update_day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.job: ~6 rows (approximately)
INSERT INTO `job` (`id`, `id_employer`, `title`, `category`, `job_type`, `location`, `job_tag`, `description`, `minimum_rate`, `maximum_rate`, `minimum_salary`, `maximum_salary`, `closing_day`, `active`, `refuse`, `create_day`, `update_day`) VALUES
	(4, 1, 'Senior Health And Nutrition Advisor', ',8,5,', '3', '2', 'html,css,php,', 'adfvsdfbsd', 0, 0, 0, 0, '', '1', 0, '2023-08-03', '2023-08-03'),
	(5, 1, 'Social Media And Public Relation Executive', '5, ', '3', '3', 'html,css,javascript,', 'avdfvs', 0, 0, 0, 0, '2023-09-02', '1', 0, '2023-08-03', '2023-08-03'),
	(6, 1, 'Moore & Kavinsky', 'Education Training, ', 'Full-Time', 'Hà Nội', '$$html,css,ruby,,,', 'adfvsdfvbs', 0, 0, 0, 0, '09-07-2023', '1', 0, '2023-08-03', '2023-08-10'),
	(7, 1, 'Head Of Commercial Contracts', '7, ', '1', '1', '', '', 0, 0, 0, 0, 'Day-Month-2023', '0', 0, '2023-08-10', '2023-08-10'),
	(8, 1, 'Telecommunication Systems Engineer', '5, ', '1', '1', '', 'ssssssssssssss', 12, 20, 1500, 3000, '08-07-2014', '0', 0, '2023-08-10', '2023-08-10'),
	(9, 1, 'Senior Manager Finance', '5, ', '1', '1', 'aaa,bbb,ccc,ddd,', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 10, 20, 1500, 2000, '13-06-2023', '0', 0, '2023-08-10', '2023-08-10');

-- Dumping structure for table worksout.job_type
DROP TABLE IF EXISTS `job_type`;
CREATE TABLE IF NOT EXISTS `job_type` (
  `id_job_type` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_job_type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.job_type: 4 rows
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
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.tags: 19 rows
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`tag_id`, `name`, `popular`, `create_day`, `update_day`) VALUES
	(29, 'php', 1, '0000-00-00', '0000-00-00'),
	(45, '$html', 2, '0000-00-00', '0000-00-00'),
	(44, '', 5, '0000-00-00', '0000-00-00'),
	(43, 'ddd', 1, '0000-00-00', '0000-00-00'),
	(42, 'ccc', 1, '0000-00-00', '0000-00-00'),
	(41, 'bbb', 1, '0000-00-00', '0000-00-00'),
	(40, 'aaa', 1, '0000-00-00', '0000-00-00'),
	(39, 'efw', 1, '0000-00-00', '0000-00-00'),
	(38, 'hnhg', 1, '0000-00-00', '0000-00-00'),
	(37, 'asa', 1, '0000-00-00', '0000-00-00'),
	(36, 'sdfsdf', 1, '0000-00-00', '0000-00-00'),
	(35, 'sdfbs', 1, '0000-00-00', '0000-00-00'),
	(34, 'sdfbsd', 1, '0000-00-00', '0000-00-00'),
	(33, 'sdfbsdf', 1, '0000-00-00', '0000-00-00'),
	(32, 'sdbsd', 1, '0000-00-00', '0000-00-00'),
	(31, 'ruby', 4, '0000-00-00', '0000-00-00'),
	(30, 'javascript', 1, '0000-00-00', '0000-00-00'),
	(28, 'css', 6, '0000-00-00', '0000-00-00'),
	(27, 'html', 4, '0000-00-00', '0000-00-00');
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table worksout.user: 3 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `user_name`, `email`, `password`, `role`, `active`, `create_day`, `update_day`) VALUES
	(1, 'nguyenvana', 'nongtiendung2309@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2023-08-03', '2023-08-03'),
	(2, 'nguyenvanb', 'nongtiendung2810@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 1, '2023-08-06', '2023-08-06'),
	(3, '111111', '111111', '202cb962ac59075b964b07152d234b70', 3, 1, '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
