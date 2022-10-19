-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 02:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choose_your_church_09672023`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `alumni_grad_date` date DEFAULT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumni_id`, `alumni_grad_date`, `member_id`) VALUES
(700, '2018-04-05', 608),
(701, '2018-04-05', 609),
(702, '2019-04-07', 6010),
(703, '2019-04-07', 6011),
(704, '2020-04-20', 6012),
(705, '2020-04-20', 6013),
(706, '2008-04-25', 6014),
(708, '2008-04-25', 6015);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_work`
--

CREATE TABLE `alumni_work` (
  `alumni_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_work`
--

INSERT INTO `alumni_work` (`alumni_id`, `work_id`) VALUES
(700, 907),
(701, 908),
(702, 909),
(703, 9010),
(704, 9011),
(705, 9012);

-- --------------------------------------------------------

--
-- Table structure for table `awards_section`
--

CREATE TABLE `awards_section` (
  `award_name` varchar(50) DEFAULT NULL,
  `award_count` int(11) DEFAULT NULL,
  `award_id` int(11) NOT NULL,
  `award_type` enum('Fellowship Award','Service Award','Ministration Award','Member Award','Curricula Award') DEFAULT NULL,
  `fellowship_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards_section`
--

INSERT INTO `awards_section` (`award_name`, `award_count`, `award_id`, `award_type`, `fellowship_id`) VALUES
('Best Fellowship of the Semester', 2, 211, 'Fellowship Award', 111),
('Best Ministrations of the Semester', 5, 212, 'Ministration Award', 112),
('Best Services of the Semester', 10, 213, 'Service Award', 112),
('Best Exta Curriculum  Activities of the Semester', 6, 214, 'Curricula Award', 111),
('Best Members of the Semester', 25, 215, 'Member Award', 114);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `request_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `coments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`request_id`, `name`, `email`, `coments`) VALUES
(2, 'Ato Quayson', 'quaysonato@gmail.com', 'I am really proud of you'),
(3, 'Angela K', 'ak@yahoo.com', 'Where can I find the contact?'),
(5, 'Suuana', 'smarquaye@hotmail.com', 'I am tireddddd!');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `paymentOption` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`name`, `email`, `paymentOption`, `amount`, `donation_id`) VALUES
('Suuana Marquaye', 'smarquaye@hotmail.com', 'Mobile Mon', 500, 1),
('Antonia Banderas', 'anbanderas@ymail.com', 'Mobile Mon', 20, 2),
('Samantha Reindorf', 'samantha.reindorf@ashesi.edu.gh', 'Mobile Mon', 900, 3),
('Gabriel Freeman', 'gfreeman@ymail.com', 'Mobile Mon', 10, 4),
('23', 'cd@gbail.cy', 'Mobile Mon', 10, 10),
('Hansesn Fred', 'hfred@ashesi.edu.gh', 'VISA', 200, 11);

-- --------------------------------------------------------

--
-- Table structure for table `extra_curriculum`
--

CREATE TABLE `extra_curriculum` (
  `extra_id` int(11) NOT NULL,
  `extra_name` text DEFAULT NULL,
  `extra_type` enum('media','arts','tech','sports') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra_curriculum`
--

INSERT INTO `extra_curriculum` (`extra_id`, `extra_name`, `extra_type`) VALUES
(311, 'Choir Team', 'arts'),
(312, 'Theatre Team', 'arts'),
(313, 'VR Team', 'tech'),
(314, 'Football Team', 'sports'),
(315, 'Tennis Team', 'sports'),
(316, 'AI Team', 'tech'),
(317, 'Painting Team', 'arts'),
(318, 'Streaming Team', 'tech'),
(319, 'Event Planning Team', 'arts'),
(3110, 'Basketball Team', 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `fellowship`
--

CREATE TABLE `fellowship` (
  `fellowship_id` int(11) NOT NULL,
  `fellowship_name` longtext DEFAULT NULL,
  `meeting_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fellowship`
--

INSERT INTO `fellowship` (`fellowship_id`, `fellowship_name`, `meeting_time`) VALUES
(111, 'Kingdom Christian Fellowship Ministries', '02:00:00'),
(112, 'The King\'s Union International', '03:40:00'),
(113, 'The Pentecost Students\'Association', '01:45:20'),
(114, 'First Love Ministries', '02:00:00'),
(115, 'The Catholic Church', '01:30:00'),
(116, 'The Empowerment Worship Center', '02:30:00'),
(117, 'The Seventh Day Adventist', '01:20:00'),
(118, 'The Latter Day Saints', '02:00:00'),
(119, 'The Protestant Church', '01:00:00'),
(1110, 'The Presbytarian Church', '01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fellowship_curriculum`
--

CREATE TABLE `fellowship_curriculum` (
  `fellowship_id` int(11) DEFAULT NULL,
  `extra_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fellowship_curriculum`
--

INSERT INTO `fellowship_curriculum` (`fellowship_id`, `extra_id`) VALUES
(111, 311),
(111, 312),
(111, 314),
(111, 317),
(111, 318),
(111, 319),
(112, 311),
(112, 312),
(112, 313),
(112, 314),
(112, 315),
(112, 316),
(112, 317),
(112, 318),
(113, 311),
(113, 319),
(113, 3110),
(113, 317),
(113, 318),
(114, 311),
(114, 315),
(114, 3110),
(114, 319),
(115, 311),
(115, 313),
(115, 314),
(115, 319),
(115, 316),
(116, 311),
(116, 317),
(116, 318),
(116, 319),
(117, 311),
(117, 318),
(117, 316),
(117, 314),
(118, 311),
(118, 3110),
(118, 312),
(118, 313),
(119, 311),
(119, 312),
(119, 314),
(119, 316),
(1110, 311),
(1110, 313),
(111, 316);

-- --------------------------------------------------------

--
-- Table structure for table `fellowship_ministrations`
--

CREATE TABLE `fellowship_ministrations` (
  `ministration_id` int(11) DEFAULT NULL,
  `fellowship_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fellowship_ministrations`
--

INSERT INTO `fellowship_ministrations` (`ministration_id`, `fellowship_id`) VALUES
(1011, 112),
(1012, 111),
(1013, 116),
(1014, 1110),
(1015, 118),
(1016, 115),
(1017, 112);

-- --------------------------------------------------------

--
-- Table structure for table `fellowship_service`
--

CREATE TABLE `fellowship_service` (
  `fellowship_id` int(11) DEFAULT NULL,
  `service_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fellowship_service`
--

INSERT INTO `fellowship_service` (`fellowship_id`, `service_no`) VALUES
(111, 501),
(111, 505),
(111, 5010),
(112, 502),
(112, 506),
(112, 508),
(113, 501),
(113, 507),
(113, 5011),
(114, 503),
(114, 504),
(114, 509),
(115, 503),
(115, 507),
(115, 5010),
(116, 500),
(116, 504),
(116, 507),
(117, 500),
(117, 506),
(117, 509),
(118, 501),
(118, 504),
(118, 508),
(119, 500),
(119, 504),
(119, 508),
(1110, 503),
(1110, 506),
(1110, 5011);

-- --------------------------------------------------------

--
-- Table structure for table `fellowship_testimony`
--

CREATE TABLE `fellowship_testimony` (
  `fellowship_id` int(11) DEFAULT NULL,
  `testimony_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fellowship_testimony`
--

INSERT INTO `fellowship_testimony` (`fellowship_id`, `testimony_id`) VALUES
(111, 411),
(111, 412),
(111, 414),
(111, 417),
(111, 418),
(111, 419),
(112, 411),
(112, 412),
(112, 413),
(112, 414),
(112, 415),
(112, 416),
(112, 4120),
(112, 418),
(113, 411),
(113, 419),
(113, 4120),
(113, 417),
(113, 418),
(114, 411),
(114, 415),
(114, 4121),
(114, 419),
(115, 411),
(115, 413),
(115, 414),
(115, 419),
(115, 416),
(116, 413),
(116, 417),
(116, 418),
(116, 419),
(117, 419),
(117, 418),
(117, 416),
(117, 414),
(118, 411),
(118, 4123),
(118, 412),
(118, 413),
(119, 411),
(119, 412),
(119, 414),
(119, 416),
(1110, 411),
(1110, 413),
(111, 416);

-- --------------------------------------------------------

--
-- Table structure for table `first_user_testimony`
--

CREATE TABLE `first_user_testimony` (
  `testimony_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `testimony_statement` longtext NOT NULL,
  `testimony_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `first_user_testimony`
--

INSERT INTO `first_user_testimony` (`testimony_id`, `user_id`, `testimony_statement`, `testimony_date`) VALUES
(1, 13, 'I became the owner of Oxford university at 21 years', '2021-12-02'),
(4, 13, 'hmmm', '2021-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `kcf_user_testimony`
--

CREATE TABLE `kcf_user_testimony` (
  `testimony_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `testimony_statement` longtext NOT NULL,
  `testimony_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kcf_user_testimony`
--

INSERT INTO `kcf_user_testimony` (`testimony_id`, `user_id`, `testimony_statement`, `testimony_date`) VALUES
(20, 12, 'I am glorioussss', '2021-12-02'),
(25, 6, 'why is this down', '2021-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `dobmonth` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `fellowship_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `fname`, `lname`, `dobmonth`, `dob`, `email`, `phone_number`, `fellowship_id`) VALUES
(600, 'Pamela', 'Annang', 'April', '2000-04-15', 'p.annang@ashesi.edu.gh', '+2335560689065', 111),
(601, 'Jessica', 'Mills', 'March', '2001-03-27', 'j.mills@ashesi.edu.gh', '+233265776097', 112),
(602, 'Samantha', 'Reindorf', 'January', '2001-01-03', 'samantha.reindorf@ashesi.edu.gh', '+2335560689099', 112),
(603, 'Emmanuel', 'Oppong', 'December', '1997-12-20', 'e.oppong@ashesi.edu.gh', '+2335760689098', 113),
(604, 'Jil', 'Asare', 'March', '2000-03-09', 'j.asare@ashesi.edu.gh', '+2335564589081', 112),
(605, 'Gabriel', 'Apio', 'October', '2000-10-08', 'g.appio@ashesi.edu.gh', '+2332764589082', 113),
(606, 'Hannah', 'Mbagare', 'July', '1998-07-20', 'h.mbagare@ashesi.edu.gh', '+2449564589083', 113),
(607, 'Delambi', 'Kasuzi', 'August', '1997-08-09', 'delam.kasuzi@ashesi.edu.gh', '+2448564589084', 114),
(608, 'Tania', 'Ferguson', 'December', '2000-12-29', 't.ferguson@ashesi.edu.gh', '+4445564589085', 114),
(609, 'Ineza', 'Nice', 'May', '2002-05-09', 'c.nice@ashesi.edu.gh', '+2775564589086', 114),
(6010, 'Edna', 'Sharp', 'September', '2002-09-20', 'e.tetteh@ashesi.edu.gh', '+2332464589087', 114),
(6011, 'Suzette', 'Zwenes', 'November', '2000-11-09', 's.zwennes@ashesi.edu.gh', '+2335964589089', 113),
(6012, 'Akofa', 'Asare', 'June', '1997-06-11', 'a.asare@ashesi.edu.gh', '+2332664589152', 113),
(6013, 'Hannibal', 'Dick', 'October', '2001-10-29', 'h.dick@ashesi.edu.gh', '+2335564576548', 111),
(6014, 'Kezia', 'Dangote', 'February', '1998-02-02', 'k.dangote@ashesi.edu.gh', '+2334414590040', 111),
(6015, 'Charles', 'Duku', 'February', '2002-02-02', 'c.duku@ashesi.edu.gh', '+2332788992021', 113);

-- --------------------------------------------------------

--
-- Table structure for table `members_service_rating`
--

CREATE TABLE `members_service_rating` (
  `member_id` int(11) DEFAULT NULL,
  `service_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_service_rating`
--

INSERT INTO `members_service_rating` (`member_id`, `service_no`) VALUES
(600, 501),
(6010, 501),
(602, 5011),
(602, 5011),
(604, 503),
(606, 503),
(607, 508),
(608, 508),
(609, 504),
(6010, 504),
(6015, 5010);

-- --------------------------------------------------------

--
-- Table structure for table `member_testimony`
--

CREATE TABLE `member_testimony` (
  `member_id` int(11) DEFAULT NULL,
  `testimony_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_testimony`
--

INSERT INTO `member_testimony` (`member_id`, `testimony_id`) VALUES
(601, 4123),
(603, 413),
(604, 414),
(605, 419),
(606, 418),
(607, 417),
(608, 416),
(609, 4123);

-- --------------------------------------------------------

--
-- Table structure for table `ministrations`
--

CREATE TABLE `ministrations` (
  `ministration_name` longtext DEFAULT NULL,
  `ministration_duration` time DEFAULT NULL,
  `ministration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ministrations`
--

INSERT INTO `ministrations` (`ministration_name`, `ministration_duration`, `ministration_id`) VALUES
('What is Man', '03:30:00', 1011),
('The mountain top', '02:30:00', 1012),
('The Mystery behind Jesus\'s death', '01:30:00', 1013),
('Our Reigning Life', '01:30:00', 1014),
('The Great White Throne', '01:45:00', 1015),
('Trusting the Lord', '00:45:00', 1016),
('Matters of the Heart', '01:00:00', 1017),
('Loving God Pt.1', '01:20:00', 1018),
('Loving God Pt.2', '01:00:00', 1019),
('Judgement Pt.1', '02:20:00', 10110);

-- --------------------------------------------------------

--
-- Table structure for table `pensa_user_testimony`
--

CREATE TABLE `pensa_user_testimony` (
  `testimony_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `testimony_statement` longtext NOT NULL,
  `testimony_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pensa_user_testimony`
--

INSERT INTO `pensa_user_testimony` (`testimony_id`, `user_id`, `testimony_statement`, `testimony_date`) VALUES
(9, 15, 'I have joy in my life', '2021-12-04'),
(10, 15, 'I have joy in my life', '2021-12-04'),
(19, 15, 'I have joy in my life', '2021-12-04'),
(20, 15, 'I have joy in my life', '2021-12-04'),
(22, 16, 'happiness is to know the saviour', '2021-12-04'),
(23, 16, 'something else', '2021-12-08'),
(24, 16, 'Is Janet showing?', '2021-12-07'),
(25, 11, 'i GOT MARRIED!', '2021-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_no` int(11) NOT NULL,
  `service_name` enum('Sunday','Midweek','Special') DEFAULT NULL,
  `service_rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_no`, `service_name`, `service_rating`) VALUES
(500, 'Sunday', 5),
(501, 'Sunday', 3),
(502, 'Sunday', 4),
(503, 'Sunday', 2),
(504, 'Special', 5),
(505, 'Special', 4),
(506, 'Special', 3),
(507, 'Special', 2),
(508, 'Midweek', 5),
(509, 'Midweek', 4),
(5010, 'Midweek', 3),
(5011, 'Midweek', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_status` enum('scholar','fee-paying') DEFAULT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_status`, `member_id`) VALUES
(801, 'scholar', 600),
(802, 'scholar', 601),
(803, 'fee-paying', 602),
(804, 'fee-paying', 603),
(805, 'fee-paying', 604),
(806, 'scholar', 605),
(807, 'scholar', 606),
(808, 'fee-paying', 607);

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `testimony_id` int(11) NOT NULL,
  `testimony_statement` longtext DEFAULT NULL,
  `testimony_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`testimony_id`, `testimony_statement`, `testimony_date`) VALUES
(411, 'My mother was magically healed from cancer', '2020-01-03'),
(412, 'My cousin resurrected fro the dead', '2020-01-08'),
(413, 'My barren auntie gave birth to thriplets', '2020-01-25'),
(414, 'I received 5000 cedis from a stranger', '2020-02-05'),
(415, 'I got my dream job', '2020-02-18'),
(416, 'I helped someone be free from masturbation', '2020-02-19'),
(417, 'I was free from cleptomania', '2020-03-03'),
(418, 'I got a ful-time scholarship to my dream school', '2020-03-15'),
(419, 'God helped mebuild my house at 22 years', '2020-03-31'),
(4120, 'I successfully got married to my bestfrined since 18 years and we are raising a family bred in Christ', '2020-04-01'),
(4121, 'My church organized a powerful retreat and people were free from all their bondages', '2020-04-06'),
(4122, 'My father was promoted to governor of the bank of Ghana', '2021-07-03'),
(4123, 'My sister graduated with honours in her masters degree program', '2021-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `tku_extra_curricula`
--

CREATE TABLE `tku_extra_curricula` (
  `extra_id` int(11) NOT NULL,
  `extra_name` varchar(150) NOT NULL,
  `extra_type` varchar(150) NOT NULL,
  `extra_meeting_days` varchar(150) NOT NULL,
  `fellowship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tku_extra_curricula`
--

INSERT INTO `tku_extra_curricula` (`extra_id`, `extra_name`, `extra_type`, `extra_meeting_days`, `fellowship_id`) VALUES
(1, 'Beth Fashion', 'fashion', 'Mondays , Tuesdays, Wednesdays', 111),
(2, 'Beth Media', 'entertainment', 'Fridays, Saturdays', 111),
(5, 'Beth Music', 'music', 'Thursdays, Sundays', 111),
(6, 'Beth Arts', 'arts', 'Tuesdays, Thursdays', 111),
(7, 'Beth Smart', 'coding', 'Mondays, Fridays, Saturdays', 111),
(8, 'Beth sports', 'sports', 'Mondays, Wednesdays, Fridays', 111);

-- --------------------------------------------------------

--
-- Table structure for table `tku_user_testimony`
--

CREATE TABLE `tku_user_testimony` (
  `testimony_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `testimony_statement` longtext NOT NULL,
  `testimony_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tku_user_testimony`
--

INSERT INTO `tku_user_testimony` (`testimony_id`, `user_id`, `testimony_statement`, `testimony_date`) VALUES
(35, 17, 'ei now her own isnt showing', '2021-12-03'),
(36, 17, 'what is wrong with the insertion?', '2021-12-10'),
(38, 5, 'Jesus', '2021-12-07'),
(39, 5, 'Just grace', '2021-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `fellowship_id` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `password`, `confirm_password`, `email`, `dob`, `fellowship_id`, `phone_number`) VALUES
(5, 'Samantha', 'Reindorf', 'J3SUSlove$75', '', 'samantha.reindorf@ashesi.edu.gh', '2001-03-01', 112, 551584465),
(6, 'Jason', 'Koomson', 'J3SUS44', '', 'jkoomson@ashesi.edu.gh', '1999-07-03', 111, 551584465),
(7, 'Jantua', 'Baba', 'astalove7', '', 'jbaba@ashesi.edu.gh', '2001-05-07', 111, 265792058),
(8, 'Joseph', 'Annan', 'astaLove7', '', 'jannan@ashesi.edu.gh', '2021-12-03', 111, 243491588),
(9, 'Katalina', 'Quaye', 'KATAq2021', '', 'kquaye@ashesi.edu.gh', '2001-03-05', 111, 265792058),
(10, 'Felix', 'Andam', 'GLORY77', '', 'fandam@ashesi.edu.gh', '2000-10-03', 111, 243491588),
(11, 'George', 'Minyillah', 'GOD7070', '', 'gminyillah@ashesi.edu.gh', '1997-12-01', 113, 551584465),
(12, 'Jantua', 'Baba', 'AMAKOTA2', '', 'jbaba@ashesi.edu.gh', '2001-12-01', 111, 244966986),
(13, 'Hamed', 'Traore', 'LUMIEL1', '', 'htraore@ashesi.edu.gh', '2001-03-02', 114, 551584465),
(14, 'Keziah', 'Annan', 'ABOTIA40', '', 'kannan@ashesi.edu.gh', '2001-02-09', 114, 2147483647),
(15, 'Oye', 'Bakuli', 'ABOTIA50', 'ABOTIA50', 'obakuli@ashesi.edu.gh', '2001-02-07', 113, 2147483647),
(16, 'Janet ', 'Kumah', 'J3SUS44', 'J3SUS44', 'jkumah@ashesi.edu.gh', '2001-03-02', 113, 2147483647),
(17, 'Hannibal', 'Quaye', 'Hanni2021', 'Hanni2021', 'hquaye@ashesi.edu.gh', '2001-12-03', 112, 59293899);

-- --------------------------------------------------------

--
-- Table structure for table `user_member`
--

CREATE TABLE `user_member` (
  `user_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `fellowship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`post_id`, `user_id`, `profile_pic`) VALUES
(10, 13, 'profiles/hamed.jpg'),
(11, 14, 'profiles/keziah.jfif'),
(12, 14, 'profiles/keziah.jfif'),
(13, 6, 'kcf_profiles/jason.jfif'),
(16, 6, 'kcf_profiles/jason2.jpg'),
(17, 6, 'kcf_profiles/jason.jfif'),
(18, 11, 'pensa_profiles/george.jpg'),
(19, 11, 'pensa_profiles/george2.jfif'),
(20, 16, 'pensa_profiles/jane.jpg'),
(21, 5, 'tku_profiles/samantha2.jpeg'),
(22, 5, 'tku_profiles/samantha.jfif'),
(23, 5, 'tku_profiles/samantha2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `work_section`
--

CREATE TABLE `work_section` (
  `work_id` int(11) NOT NULL,
  `company_name` longtext DEFAULT NULL,
  `work_position` varchar(30) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_section`
--

INSERT INTO `work_section` (`work_id`, `company_name`, `work_position`, `member_id`) VALUES
(901, 'Deloitte, Ghana', 'Teller', 600),
(902, 'Nestle Ghana Limitted', 'Manager', 601),
(903, 'Impuntu Technologies', 'Lead Researcher', 602),
(904, 'Norkway', 'Lead Programmer', 603),
(905, 'La Palm Royal Beach Hotel', 'Receptionist', 604),
(906, 'Google', 'Programmer', 605),
(907, 'Microsoft', 'Human Resource Lead', 606),
(908, 'PwC, Ghana', 'Human Resource Personnel', 607),
(909, 'Apple', 'Sales executive', 608),
(9010, 'Carokeries Restaurant', 'Owner', 609),
(9011, 'Adom Hospital', 'Owner', 6010),
(9012, 'Ecobank, Ghana', 'Teller', 6011);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`,`member_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `alumni_work`
--
ALTER TABLE `alumni_work`
  ADD KEY `alumni_id` (`alumni_id`),
  ADD KEY `work_id` (`work_id`);

--
-- Indexes for table `awards_section`
--
ALTER TABLE `awards_section`
  ADD PRIMARY KEY (`award_id`),
  ADD KEY `the_awards` (`fellowship_id`,`award_name`,`award_count`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `extra_curriculum`
--
ALTER TABLE `extra_curriculum`
  ADD PRIMARY KEY (`extra_id`);

--
-- Indexes for table `fellowship`
--
ALTER TABLE `fellowship`
  ADD PRIMARY KEY (`fellowship_id`);

--
-- Indexes for table `fellowship_curriculum`
--
ALTER TABLE `fellowship_curriculum`
  ADD KEY `fellowship_id` (`fellowship_id`),
  ADD KEY `extra_id` (`extra_id`);

--
-- Indexes for table `fellowship_ministrations`
--
ALTER TABLE `fellowship_ministrations`
  ADD KEY `ministration_id` (`ministration_id`),
  ADD KEY `fellowship_id` (`fellowship_id`);

--
-- Indexes for table `fellowship_service`
--
ALTER TABLE `fellowship_service`
  ADD KEY `fellowship_id` (`fellowship_id`),
  ADD KEY `service_no` (`service_no`);

--
-- Indexes for table `fellowship_testimony`
--
ALTER TABLE `fellowship_testimony`
  ADD KEY `fellowship_id` (`fellowship_id`),
  ADD KEY `testimony_id` (`testimony_id`);

--
-- Indexes for table `first_user_testimony`
--
ALTER TABLE `first_user_testimony`
  ADD PRIMARY KEY (`testimony_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kcf_user_testimony`
--
ALTER TABLE `kcf_user_testimony`
  ADD PRIMARY KEY (`testimony_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `fellowship_id` (`fellowship_id`),
  ADD KEY `birthdays` (`fname`,`lname`,`dob`,`fellowship_id`);

--
-- Indexes for table `members_service_rating`
--
ALTER TABLE `members_service_rating`
  ADD KEY `member_id` (`member_id`),
  ADD KEY `service_no` (`service_no`);

--
-- Indexes for table `member_testimony`
--
ALTER TABLE `member_testimony`
  ADD KEY `member_id` (`member_id`),
  ADD KEY `testimony_id` (`testimony_id`);

--
-- Indexes for table `ministrations`
--
ALTER TABLE `ministrations`
  ADD PRIMARY KEY (`ministration_id`);

--
-- Indexes for table `pensa_user_testimony`
--
ALTER TABLE `pensa_user_testimony`
  ADD PRIMARY KEY (`testimony_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_no`),
  ADD KEY `rate_service` (`service_no`,`service_rating`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`,`member_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`testimony_id`);

--
-- Indexes for table `tku_extra_curricula`
--
ALTER TABLE `tku_extra_curricula`
  ADD PRIMARY KEY (`extra_id`);

--
-- Indexes for table `tku_user_testimony`
--
ALTER TABLE `tku_user_testimony`
  ADD PRIMARY KEY (`testimony_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fellowship_id` (`fellowship_id`);

--
-- Indexes for table `user_member`
--
ALTER TABLE `user_member`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `fellowship_id` (`fellowship_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `work_section`
--
ALTER TABLE `work_section`
  ADD PRIMARY KEY (`work_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `work_success` (`work_id`,`work_position`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards_section`
--
ALTER TABLE `awards_section`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `extra_curriculum`
--
ALTER TABLE `extra_curriculum`
  MODIFY `extra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3111;

--
-- AUTO_INCREMENT for table `first_user_testimony`
--
ALTER TABLE `first_user_testimony`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kcf_user_testimony`
--
ALTER TABLE `kcf_user_testimony`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pensa_user_testimony`
--
ALTER TABLE `pensa_user_testimony`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5012;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4124;

--
-- AUTO_INCREMENT for table `tku_extra_curricula`
--
ALTER TABLE `tku_extra_curricula`
  MODIFY `extra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tku_user_testimony`
--
ALTER TABLE `tku_user_testimony`
  MODIFY `testimony_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON UPDATE CASCADE;

--
-- Constraints for table `alumni_work`
--
ALTER TABLE `alumni_work`
  ADD CONSTRAINT `alumni_work_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`),
  ADD CONSTRAINT `alumni_work_ibfk_2` FOREIGN KEY (`work_id`) REFERENCES `work_section` (`work_id`) ON UPDATE CASCADE;

--
-- Constraints for table `awards_section`
--
ALTER TABLE `awards_section`
  ADD CONSTRAINT `awards_section_ibfk_1` FOREIGN KEY (`fellowship_id`) REFERENCES `fellowship` (`fellowship_id`);

--
-- Constraints for table `fellowship_curriculum`
--
ALTER TABLE `fellowship_curriculum`
  ADD CONSTRAINT `fellowship_curriculum_ibfk_1` FOREIGN KEY (`fellowship_id`) REFERENCES `fellowship` (`fellowship_id`),
  ADD CONSTRAINT `fellowship_curriculum_ibfk_2` FOREIGN KEY (`extra_id`) REFERENCES `extra_curriculum` (`extra_id`);

--
-- Constraints for table `fellowship_ministrations`
--
ALTER TABLE `fellowship_ministrations`
  ADD CONSTRAINT `fellowship_ministrations_ibfk_1` FOREIGN KEY (`ministration_id`) REFERENCES `ministrations` (`ministration_id`),
  ADD CONSTRAINT `fellowship_ministrations_ibfk_2` FOREIGN KEY (`fellowship_id`) REFERENCES `fellowship` (`fellowship_id`) ON UPDATE CASCADE;

--
-- Constraints for table `fellowship_service`
--
ALTER TABLE `fellowship_service`
  ADD CONSTRAINT `fellowship_service_ibfk_1` FOREIGN KEY (`fellowship_id`) REFERENCES `fellowship` (`fellowship_id`),
  ADD CONSTRAINT `fellowship_service_ibfk_2` FOREIGN KEY (`service_no`) REFERENCES `service` (`service_no`) ON UPDATE CASCADE;

--
-- Constraints for table `fellowship_testimony`
--
ALTER TABLE `fellowship_testimony`
  ADD CONSTRAINT `fellowship_testimony_ibfk_1` FOREIGN KEY (`fellowship_id`) REFERENCES `fellowship` (`fellowship_id`),
  ADD CONSTRAINT `fellowship_testimony_ibfk_2` FOREIGN KEY (`testimony_id`) REFERENCES `testimonies` (`testimony_id`);

--
-- Constraints for table `first_user_testimony`
--
ALTER TABLE `first_user_testimony`
  ADD CONSTRAINT `first_user_testimony_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `kcf_user_testimony`
--
ALTER TABLE `kcf_user_testimony`
  ADD CONSTRAINT `kcf_user_testimony_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`fellowship_id`) REFERENCES `fellowship` (`fellowship_id`) ON UPDATE CASCADE;

--
-- Constraints for table `members_service_rating`
--
ALTER TABLE `members_service_rating`
  ADD CONSTRAINT `members_service_rating_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `members_service_rating_ibfk_2` FOREIGN KEY (`service_no`) REFERENCES `service` (`service_no`) ON UPDATE CASCADE;

--
-- Constraints for table `member_testimony`
--
ALTER TABLE `member_testimony`
  ADD CONSTRAINT `member_testimony_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `member_testimony_ibfk_2` FOREIGN KEY (`testimony_id`) REFERENCES `testimonies` (`testimony_id`);

--
-- Constraints for table `pensa_user_testimony`
--
ALTER TABLE `pensa_user_testimony`
  ADD CONSTRAINT `pensa_user_testimony_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tku_user_testimony`
--
ALTER TABLE `tku_user_testimony`
  ADD CONSTRAINT `tku_user_testimony_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_member`
--
ALTER TABLE `user_member`
  ADD CONSTRAINT `user_member_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_member_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `user_member_ibfk_3` FOREIGN KEY (`fellowship_id`) REFERENCES `fellowship` (`fellowship_id`);

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `work_section`
--
ALTER TABLE `work_section`
  ADD CONSTRAINT `work_section_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
