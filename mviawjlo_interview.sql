-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2023 at 11:49 AM
-- Server version: 10.3.38-MariaDB-log-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mviawjlo_interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_interviewmanagement`
--

CREATE TABLE `t_interviewmanagement` (
  `in_id` int(11) NOT NULL,
  `in_cvchannel` text DEFAULT NULL COMMENT ' 1:''IT Viec Apply'',2:''24h Search'',3:''VietNamWork Apply'',4:''Introduced'', 5:''Others''',
  `in_cvno` varchar(200) DEFAULT NULL,
  `in_firstname` varchar(200) NOT NULL,
  `in_lastname` varchar(200) NOT NULL,
  `in_dob` date DEFAULT NULL,
  `in_salary` int(11) DEFAULT NULL,
  `in_mail` varchar(200) DEFAULT NULL,
  `in_education` text DEFAULT NULL,
  `in_datecreate` datetime DEFAULT NULL,
  `in_update` datetime DEFAULT NULL,
  `in_experience` text DEFAULT NULL,
  `in_language` int(5) NOT NULL COMMENT '1: php, 2: c# /asp.net, 3: japannese, 4: android, 5: ios, 6:others',
  `in_university` text DEFAULT NULL,
  `in_tel` varchar(15) DEFAULT NULL,
  `in_address` text DEFAULT NULL,
  `in_cvlink` text DEFAULT NULL,
  `in_status` int(11) DEFAULT NULL COMMENT '1 : ''Phone&mail contacted'', 2 : ''Interviewed'',3 : ''Cancelled interview'',4 : ''Not Pass contacted''',
  `in_time` time DEFAULT NULL,
  `in_date` date DEFAULT NULL,
  `in_note` text DEFAULT NULL,
  `in_extraskill` text DEFAULT NULL,
  `in_personality` text DEFAULT NULL,
  `in_file` text DEFAULT NULL,
  `in_del_flg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_iq_questions`
--

CREATE TABLE `t_iq_questions` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `del_flg` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_iq_question_options`
--

CREATE TABLE `t_iq_question_options` (
  `id` int(11) NOT NULL,
  `iq_question_id` int(11) NOT NULL,
  `option_key` int(11) DEFAULT NULL,
  `option_value` text NOT NULL,
  `correct_flg` int(5) NOT NULL COMMENT '0:wrong, 1:correct',
  `del_flg` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_result`
--

CREATE TABLE `t_result` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL COMMENT 't_interviewmanagement.in_id',
  `candidate_firstname` varchar(200) DEFAULT NULL,
  `candidate_lastname` varchar(200) DEFAULT NULL,
  `candidate_tel` varchar(14) DEFAULT NULL,
  `candidate_address` text DEFAULT NULL,
  `candidate_mail` varchar(200) DEFAULT NULL,
  `candidate_language` int(5) NOT NULL,
  `candidate_dob` varchar(50) DEFAULT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `totaltime` int(11) NOT NULL,
  `iq_score` int(11) DEFAULT NULL,
  `tech_score` int(11) DEFAULT NULL,
  `is_marked` int(5) DEFAULT 0,
  `iq_total` varchar(255) DEFAULT NULL,
  `tech_total` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_tech_questions`
--

CREATE TABLE `t_tech_questions` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `type` int(5) NOT NULL COMMENT 'php:1, c#,net:2,japanese:3',
  `del_flg` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_test_answer`
--

CREATE TABLE `t_test_answer` (
  `id` int(11) NOT NULL,
  `result_id` int(11) DEFAULT NULL,
  `type` int(5) DEFAULT NULL COMMENT 'testIQ:1, testSkill:2',
  `question_id` int(11) DEFAULT NULL,
  `question_options_id` int(11) DEFAULT NULL,
  `tech_content_ans` text DEFAULT NULL,
  `score` int(11) DEFAULT 0 COMMENT 'score of skill test',
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `u_id` int(11) NOT NULL,
  `u_user` varchar(200) DEFAULT NULL,
  `u_pw` varchar(200) DEFAULT NULL,
  `u_name` varchar(200) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `u_date` datetime DEFAULT NULL,
  `u_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`u_id`, `u_user`, `u_pw`, `u_name`, `is_admin`, `u_date`, `u_update`) VALUES
(1, 'admin', 'admin123', 'master', 1, '2020-06-23 00:00:00', '2020-06-23 00:00:00'),
(2, 'admin2', 'admin2', 'admin2', 1, '2020-06-23 00:00:00', '2020-06-23 00:00:00'),
(3, 'candidate', '123456', 'Ứng viên', 0, '2020-06-23 00:00:00', '2020-06-23 00:00:00'),
(4, 'dev_candidate01', 'sba123456', 'Ứng viên', 0, '2020-06-23 00:00:00', '2020-06-23 00:00:00'),
(5, 'dev_candidate02', 'sba123456', 'Ứng viên', 0, '2020-06-23 00:00:00', '2020-06-23 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_interviewmanagement`
--
ALTER TABLE `t_interviewmanagement`
  ADD PRIMARY KEY (`in_id`),
  ADD KEY `s_shop` (`in_salary`);

--
-- Indexes for table `t_iq_questions`
--
ALTER TABLE `t_iq_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_iq_question_options`
--
ALTER TABLE `t_iq_question_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_result`
--
ALTER TABLE `t_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tech_questions`
--
ALTER TABLE `t_tech_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_test_answer`
--
ALTER TABLE `t_test_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_interviewmanagement`
--
ALTER TABLE `t_interviewmanagement`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_iq_questions`
--
ALTER TABLE `t_iq_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_iq_question_options`
--
ALTER TABLE `t_iq_question_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_result`
--
ALTER TABLE `t_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_tech_questions`
--
ALTER TABLE `t_tech_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_test_answer`
--
ALTER TABLE `t_test_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
