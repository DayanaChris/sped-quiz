-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 12:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `audio_name` varchar(120) NOT NULL,
  `original_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(220) NOT NULL,
  `category_image` varchar(120) NOT NULL,
  `category_image_title` varchar(225) NOT NULL,
  `template_num` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`, `category_image_title`, `template_num`, `created_by`) VALUES
(1, 'ALPHABETS', 'a2.png', '03339271514.png', 1, 1),
(2, 'NUMBERS', 'a5.png', '03339271515.png', 1, 1),
(3, 'COLORS', 'a3.png', '03339271516.png', 1, 1),
(4, 'SHAPES', 'a6.png', '03339271517.png', 1, 1),
(5, 'EXPRESSION', 'a4.png', '03339271518.png', 1, 1),
(6, 'ACTION WORDS', 'a1.png', '03339271513.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'student', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img_name` varchar(120) NOT NULL,
  `original_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `img_name`, `original_name`) VALUES
(7, 1, '121232303204.png', 'airplane b.png'),
(8, 1, '121232303224.png', 'angel.png'),
(10, 1, '212156371806.png', 'alligator_b.png'),
(11, 1, '212156371807.png', 'alligator_g.png'),
(12, 1, '212156371808.png', 'alligator_p.png'),
(13, 1, '212156371810.png', 'alligator_v.png'),
(14, 1, '212156371811.png', 'alligator_y.png'),
(15, 1, '212156371812.png', 'alligator_yo.png'),
(16, 1, '212156371834.png', 'ball_b.png'),
(17, 1, '212156371836.png', 'ball_g.png'),
(18, 1, '212156371837.png', 'ball_p.png'),
(19, 1, '212156371838.png', 'ball_v.png'),
(20, 1, '212156371839.png', 'ball_y.png'),
(21, 1, '212156371840.png', 'ball_yo.png'),
(22, 1, '212156381851.png', 'carrot_b.png'),
(23, 1, '212156381852.png', 'carrot_g.png'),
(24, 1, '212156381853.png', 'carrot_p.png'),
(25, 1, '212156381854.png', 'carrot_v.png'),
(26, 1, '212156381856.png', 'carrot_y.png'),
(27, 1, '212156381857.png', 'carrot_yo.png'),
(28, 1, '212156660022.png', 'deer_b.png'),
(29, 1, '212156660023.png', 'deer_g.png'),
(30, 1, '212156660024.png', 'deer_p.png'),
(31, 1, '212156660025.png', 'deer_v.png'),
(32, 1, '212156660026.png', 'deer_y.png'),
(33, 1, '212156660027.png', 'deer_yo.png'),
(34, 1, '212156660028.png', 'dog_b.png'),
(35, 1, '212156670029.png', 'dog_g.png'),
(36, 1, '212156670030.png', 'dog_p.png'),
(37, 1, '212156670032.png', 'dog_v.png'),
(38, 1, '212156670033.png', 'dog_y.png'),
(39, 1, '212156670123.png', 'banana_b.png'),
(40, 1, '212156670124.png', 'banana_g.png'),
(41, 1, '212156670125.png', 'banana_p.png'),
(42, 1, '212156670126.png', 'banana_v.png'),
(43, 1, '212156670128.png', 'banana_y.png'),
(44, 1, '212156670129.png', 'banana_yo.png'),
(45, 1, '212156670130.png', 'bird_b.png'),
(46, 1, '212156670131.png', 'bird_g.png'),
(47, 1, '212156670132.png', 'bird_p.png'),
(48, 1, '212156670133.png', 'bird_v.png'),
(49, 1, '212156670134.png', 'bird_y.png'),
(50, 1, '212156670135.png', 'bird_yo.png'),
(51, 1, '252528315712.png', 'apple_OY.png'),
(52, 1, '252528315713.png', 'apple_p.png'),
(53, 1, '252528315714.png', 'apple_v.png'),
(54, 1, '252528315715.png', 'apple_y.png'),
(55, 1, '252528315716.png', 'apple_b.png'),
(56, 1, '252528315717.png', 'apple_g.png'),
(57, 1, '252528315719.png', 'Kr.png'),
(58, 1, '252528315720.png', 'Ar.png'),
(59, 1, '252528315721.png', 'Br.png'),
(60, 1, '252528315722.png', 'ccr.png'),
(61, 1, '252528315723.png', 'Dr.png'),
(62, 1, '252528315724.png', 'Er.png'),
(63, 1, '252528315725.png', 'Fr.png'),
(64, 1, '252528315726.png', 'Gr.png'),
(65, 1, '252528315727.png', 'Hr.png'),
(66, 1, '252528315728.png', 'Ir.png'),
(67, 1, '252528315730.png', 'Jr.png'),
(68, 1, '262630375442.png', 'color e.png'),
(69, 1, '262630405809.png', 'alphabet e.png'),
(70, 1, '262630470755.png', 'a1.png'),
(71, 1, '262630470756.png', 'a2.png'),
(72, 1, '262630470757.png', 'a3.png'),
(73, 1, '262630470758.png', 'a4.png'),
(74, 1, '262630470800.png', 'a5.png'),
(75, 1, '262630470801.png', 'a6.png'),
(76, 1, '03333411125.png', 'elephant.png'),
(77, 1, '03333411126.png', 'eraser.png'),
(78, 1, '03333411127.png', 'eyeglass.png'),
(79, 1, '03333411128.png', 'eyes.png'),
(80, 1, '03339271513.png', 'logo_6.png'),
(81, 1, '03339271514.png', 'logo_1.png'),
(82, 1, '03339271515.png', 'logo_2.png'),
(83, 1, '03339271516.png', 'logo_3.png'),
(84, 1, '03339271517.png', 'logo_4.png'),
(85, 1, '03339271518.png', 'logo_5.png'),
(86, 1, '04445344910.png', 'Aa.png'),
(87, 1, '04445344911.png', 'alligator.png'),
(88, 1, '04445344912.png', 'anchor.png'),
(89, 1, '04445344913.png', 'angel.png'),
(90, 1, '04445344915.png', 'animals.png'),
(91, 1, '04445344916.png', 'ant.png'),
(92, 1, '04445344917.png', 'apple.png'),
(93, 1, '04445344918.png', 'apron.png'),
(94, 1, '04445344919.png', 'armchair.png'),
(95, 1, '04445344921.png', 'ax.png'),
(96, 1, '04445344943.png', 'Bb.png'),
(97, 1, '04445344945.png', 'bag.png'),
(98, 1, '04445344946.png', 'balloons.png'),
(99, 1, '04445344947.png', 'banana.png'),
(100, 1, '04445344948.png', 'baseball_bat.png'),
(101, 1, '04445344949.png', 'cat.png'),
(102, 1, '04445344951.png', 'caterpillar.png'),
(103, 1, '04445344952.png', 'Cc.png'),
(104, 1, '04445344953.png', 'can.png'),
(105, 1, '04445344954.png', 'candy.png'),
(106, 1, '04445344956.png', 'cap.png'),
(107, 1, '04445344957.png', 'car.png'),
(108, 1, '04445344958.png', 'carrot.png');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `user_id` int(120) NOT NULL,
  `cat_id` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `user_id`, `cat_id`) VALUES
(2, 1, 1),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_example`
--

CREATE TABLE `lesson_example` (
  `id` int(11) NOT NULL,
  `lesson_id` int(120) NOT NULL,
  `img_id` int(120) NOT NULL,
  `lesson_example_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson_example`
--

INSERT INTO `lesson_example` (`id`, `lesson_id`, `img_id`, `lesson_example_name`) VALUES
(5, 2, 16, 'sdasd'),
(6, 2, 16, 'dsadasa'),
(7, 2, 16, 'asdsd'),
(8, 2, 16, ''),
(53, 3, 16, 'c'),
(54, 3, 2147483647, 'c'),
(55, 3, 0, ''),
(56, 3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_image`
--

CREATE TABLE `lesson_image` (
  `id` int(11) NOT NULL,
  `lesson_id` int(120) NOT NULL,
  `img_id` int(120) NOT NULL,
  `lesson_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson_image`
--

INSERT INTO `lesson_image` (`id`, `lesson_id`, `img_id`, `lesson_name`) VALUES
(2, 2, 10, 'B'),
(3, 3, 60, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_manager`
--

CREATE TABLE `lesson_manager` (
  `id` int(11) NOT NULL,
  `lesson_image_id` int(120) NOT NULL,
  `lesson_example_id` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson_manager`
--

INSERT INTO `lesson_manager` (`id`, `lesson_image_id`, `lesson_example_id`) VALUES
(2, 2, 4),
(14, 3, 56);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level_name` varchar(220) NOT NULL,
  `level_image` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_name`, `level_image`, `created_by`) VALUES
(1, 'EASY', 'Easy.png', 1),
(2, 'MODERATE', 'moderate.png', 1),
(3, 'HARD', 'Difficult.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questionnaires`
--

CREATE TABLE `questionnaires` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionnaires`
--

INSERT INTO `questionnaires` (`id`, `category_id`, `level_id`, `quiz_id`, `user_id`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(120) NOT NULL,
  `user_id` int(120) NOT NULL,
  `category_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `template_num` int(11) NOT NULL,
  `background` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `user_id`, `category_id`, `level_id`, `question`, `question_image`, `status`, `template_num`, `background`) VALUES
(1, 1, 1, 1, 'test', '212156371806.png', 0, 1, 'AB2567'),
(2, 1, 1, 1, 'What matches the letter?', '252528315720.png', 0, 1, 'AB2567'),
(3, 1, 1, 1, 'What starts with letter A?', '212156371806.png', 0, 1, 'AB2567'),
(4, 1, 1, 1, 'What starts with letter B?', '212156371834.png', 0, 1, 'AB2567'),
(6, 1, 1, 1, 'What starts with letter D?', '212156660022.png', 0, 1, 'AB2567'),
(7, 1, 1, 1, 'What starts with letter F?', '252528315713.png', 0, 1, 'AB2567'),
(8, 1, 1, 1, 'What starts with letter E?', '03333411125.png', 0, 1, 'AB2567');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answer`
--

CREATE TABLE `quiz_answer` (
  `id` int(120) NOT NULL,
  `quiz_id` int(120) NOT NULL,
  `answer` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_answer`
--

INSERT INTO `quiz_answer` (`id`, `quiz_id`, `answer`) VALUES
(6, 21, '0'),
(7, 22, '0'),
(9, 24, '0');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_image`
--

CREATE TABLE `quiz_image` (
  `id` int(120) NOT NULL,
  `quiz_id` int(120) NOT NULL,
  `img_id` int(120) NOT NULL,
  `is_correct` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_image`
--

INSERT INTO `quiz_image` (`id`, `quiz_id`, `img_id`, `is_correct`) VALUES
(1, 1, 18, 1),
(2, 1, 33, 0),
(3, 1, 0, 0),
(4, 1, 0, 0),
(5, 2, 64, 0),
(6, 2, 58, 1),
(7, 2, 63, 0),
(8, 2, 67, 0),
(9, 3, 10, 1),
(10, 3, 36, 0),
(11, 3, 23, 0),
(12, 3, 37, 0),
(13, 4, 16, 1),
(14, 4, 22, 0),
(15, 4, 28, 0),
(16, 4, 42, 0),
(21, 6, 29, 1),
(22, 6, 25, 0),
(23, 6, 19, 0),
(24, 6, 0, 0),
(25, 7, 24, 0),
(26, 7, 63, 1),
(27, 7, 48, 0),
(28, 7, 0, 0),
(29, 8, 76, 1),
(30, 8, 12, 0),
(31, 8, 25, 0),
(32, 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `score` double(8,2) NOT NULL,
  `total_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `average_speed` double(8,2) NOT NULL,
  `accuracy` double(8,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attempts` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `score`, `total_time`, `average_speed`, `accuracy`, `user_id`, `attempts`, `quiz_id`, `category_id`, `level_id`) VALUES
(20, 4.00, '19.626', 3.93, 80.00, 1, 1, 0, 1, 1),
(21, 5.00, '11.713', 2.34, 100.00, 1, 0, 0, 1, 3),
(22, 7.00, '15.298', 3.06, 140.00, 1, 2, 0, 1, 2),
(23, 4.00, '39.179', 7.84, 80.00, 1, 3, 0, 1, 1),
(24, 4.00, '6735.27', 1347.05, 80.00, 1, 2, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1538926556, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(5, '::1', 'dianne@gmail.com', '$2y$08$MBDEVKjtfaH02Q.aaNLclujJOYICLYhuQVr4K7yQ163U3oUqJTw6G', NULL, 'dianne@gmail.com', NULL, NULL, NULL, NULL, 1536739743, NULL, 1, 'Chris', 'Calamba', 'UIC', '09999999999'),
(8, '::1', 'sample@sample.com', '$2y$08$WFOPZ.iuCoTmvLaWBWxmn.YngpadxvEbypt3VnWmSuur4uJZ6jHjq', NULL, 'sample@sample.com', NULL, NULL, NULL, NULL, 1536852248, 1536852295, 1, 'sample', 'sample', 'sample', ''),
(9, '::1', 'a@gmail.com', '$2y$08$QV3rWA/lVGBuszKlOLOKg.HGjrpXEP3mHoucPVCR/XvGFFjliHE8O', NULL, 'a@gmail.com', NULL, NULL, NULL, NULL, 1536852331, 1537924576, 1, 'test', 'latname', 'a', ''),
(11, '::1', 'chris@gmail.com', '$2y$08$/Gz0BDFJluoobCynqoVy9ONgvAHcSO58JUwHARJY459vbVDNBaw8i', NULL, 'chris@gmail.com', NULL, NULL, NULL, NULL, 1537924670, 1537924684, 1, 'Chris', 'Dianne', 'UIC', '09999999999');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(10, 1, 1),
(12, 5, 1),
(15, 8, 1),
(16, 9, 2),
(18, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vid_name` varchar(120) NOT NULL,
  `original_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `user_id`, `vid_name`, `original_name`) VALUES
(28, 1, '262633421250.mp4', 'videoplayback (1).mp4'),
(29, 1, '262633451652.mp4', 'cake.mp4'),
(30, 1, '262633542950.mp4', 'hahhaha.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_example`
--
ALTER TABLE `lesson_example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_image`
--
ALTER TABLE `lesson_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_manager`
--
ALTER TABLE `lesson_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_image`
--
ALTER TABLE `quiz_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lesson_example`
--
ALTER TABLE `lesson_example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `lesson_image`
--
ALTER TABLE `lesson_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lesson_manager`
--
ALTER TABLE `lesson_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz_answer`
--
ALTER TABLE `quiz_answer`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quiz_image`
--
ALTER TABLE `quiz_image`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
