-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2021 at 12:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16726695_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_answer`
--

CREATE TABLE `activity_answer` (
  `activity_answer_id` int(11) NOT NULL,
  `activity_A1` varchar(255) NOT NULL,
  `activity_A2` varchar(255) NOT NULL,
  `activity_A3` varchar(255) NOT NULL,
  `activity_A4` varchar(255) NOT NULL,
  `activity_A5` varchar(255) NOT NULL,
  `activity_A6` varchar(255) NOT NULL,
  `activity_A7` varchar(255) NOT NULL,
  `activity_A8` varchar(255) NOT NULL,
  `activity_A9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_answer`
--

INSERT INTO `activity_answer` (`activity_answer_id`, `activity_A1`, `activity_A2`, `activity_A3`, `activity_A4`, `activity_A5`, `activity_A6`, `activity_A7`, `activity_A8`, `activity_A9`) VALUES
(1, 'Rarely', 'Never', 'Never', 'Never', 'Rarely', 'Sometimes', 'Never', 'Sometimes', 'Sometimes'),
(2, 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Never', 'Never', 'Never'),
(3, 'Rarely', 'Rarely', 'Rarely', 'Never', 'Never', 'Rarely', 'Rarely', 'Never', 'Sometimes'),
(4, 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Sometimes'),
(5, 'Never', 'Never', 'Never', 'Never', 'Rarely', 'Often', 'Sometimes', 'Never', 'Sometimes'),
(6, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(7, 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Rarely', 'Never'),
(8, 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never'),
(9, 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never'),
(10, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(11, 'Rarely', 'Rarely', 'Never', 'Rarely', 'Never', 'Rarely', 'Rarely', 'Sometimes', 'Never'),
(12, 'Often', 'Often', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes'),
(13, 'Rarely', 'Rarely', 'Rarely', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Rarely'),
(14, 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(15, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely'),
(16, 'Rarely', 'Never', 'Never', 'Rarely', 'Never', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes'),
(17, 'Rarely', 'Rarely', 'Never', 'Never', 'Rarely', 'Often', 'Sometimes', 'Rarely', 'Rarely'),
(18, 'Never', 'Often', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Never', 'Never', 'Rarely'),
(19, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Often', 'Rarely', 'Never', 'Sometimes', 'Rarely'),
(20, 'Often', 'Never', 'Sometimes', 'Sometimes', 'Never', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(21, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(22, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(23, 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes'),
(24, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes'),
(25, 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(26, 'Never', 'Never', 'Never', 'Never', 'Never', 'Sometimes', 'Never', 'Rarely', 'Often'),
(27, 'Never', 'Never', 'Never', 'Rarely', 'Sometimes', 'Rarely', 'Never', 'Rarely', 'Sometimes'),
(28, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely'),
(29, 'Rarely', 'Sometimes', 'Rarely', 'Never', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(30, 'Rarely', 'Never', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(31, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes'),
(32, 'Never', 'Sometimes', 'Rarely', 'Sometimes', 'Never', 'Sometimes', 'Never', 'Sometimes', 'Never'),
(33, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(34, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(35, 'Rarely', 'Sometimes', 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely'),
(36, 'Sometimes', 'Sometimes', 'Often', 'Never', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely'),
(37, 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(38, 'Rarely', 'Sometimes', 'Rarely', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Never', 'Never'),
(39, 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(40, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(41, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(42, 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(43, 'Often', 'Sometimes', 'Often', 'Sometimes', 'Rarely', 'Often', 'Often', 'Often', 'Often'),
(44, 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Often', 'Sometimes', 'Often', 'Sometimes'),
(45, 'Rarely', 'Often', 'Never', 'Rarely', 'Never', 'Often', 'Rarely', 'Rarely', 'Sometimes'),
(46, 'Sometimes', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Sometimes'),
(47, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Often', 'Sometimes', 'Sometimes', 'Sometimes'),
(48, 'Often', 'Often', 'Often', 'Never', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(49, 'Rarely', 'Rarely', 'Never', 'Never', 'Rarely', 'Often', 'Rarely', 'Sometimes', 'Rarely'),
(50, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(51, 'Often', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Sometimes'),
(52, 'Rarely', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Sometimes'),
(53, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(54, 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often'),
(55, 'Often', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Rarely', 'Sometimes'),
(56, 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes'),
(57, 'Never', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Never', 'Rarely', 'Sometimes'),
(58, 'Rarely', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes'),
(59, 'Often', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(60, 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Sometimes'),
(61, 'Often', 'Often', 'Often', 'Often', 'Rarely', 'Often', 'Sometimes', 'Often', 'Often'),
(62, 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often'),
(63, 'Often', 'Often', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Often', 'Sometimes'),
(64, 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Rarely', 'Often', 'Rarely'),
(65, 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(66, 'Often', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often'),
(67, 'Rarely', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Often'),
(68, 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Often'),
(69, 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes'),
(70, 'Often', 'Often', 'Rarely', 'Rarely', 'Rarely', 'Often', 'Sometimes', 'Rarely', 'Often'),
(71, 'Never', 'Often', 'Often', 'Rarely', 'Never', 'Often', 'Never', 'Sometimes', 'Often'),
(72, 'Often', 'Rarely', 'Never', 'Never', 'Never', 'Rarely', 'Rarely', 'Rarely', 'Never'),
(73, 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Rarely', 'Sometimes'),
(74, 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes'),
(75, 'Sometimes', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Often', 'Sometimes'),
(76, 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(77, 'Never', 'Rarely', 'Often', 'Rarely', 'Never', 'Often', 'Often', 'Never', 'Often'),
(78, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(79, 'Often', 'Often', 'Often', 'Often', 'Often', 'Never', 'Never', 'Sometimes', 'Rarely'),
(80, 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Never', 'Sometimes', 'Never'),
(81, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes'),
(82, 'Sometimes', 'Rarely', 'Rarely', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(83, 'Often', 'Often', 'Sometimes', 'Rarely', 'Rarely', 'Often', 'Often', 'Sometimes', 'Often'),
(84, 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Often'),
(85, 'Sometimes', 'Often', 'Often', 'Rarely', 'Never', 'Never', 'Never', 'Often', 'Often'),
(86, 'Never', 'Often', 'Rarely', 'Often', 'Never', 'Often', 'Never', 'Rarely', 'Never'),
(87, 'Never', 'Often', 'Often', 'Often', 'Never', 'Rarely', 'Never', 'Often', 'Often'),
(88, 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Never', 'Never', 'Never', 'Rarely', 'Never'),
(89, 'Often', 'Often', 'Sometimes', 'Sometimes', 'Never', 'Rarely', 'Rarely', 'Often', 'Never'),
(90, 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Rarely'),
(91, 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Never', 'Often', 'Often'),
(92, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Often'),
(93, 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Often'),
(94, 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Often'),
(95, 'Often', 'Often', 'Often', 'Often', 'Never', 'Often', 'Often', 'Often', 'Often'),
(96, 'Often', 'Often', 'Often', 'Often', 'Often', 'Rarely', 'Sometimes', 'Often', 'Often'),
(97, 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often'),
(98, 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(99, 'Sometimes', 'Sometimes', 'Sometimes', 'Never', 'Never', 'Often', 'Never', 'Often', 'Never'),
(100, 'Sometimes', 'Often', 'Often', 'Often', 'Rarely', 'Often', 'Rarely', 'Often', 'Often'),
(101, 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often'),
(102, 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Never', 'Never', 'Sometimes', 'Never', 'Never'),
(103, 'Rarely', 'Often', 'Often', 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Often', 'Rarely'),
(104, 'Never', 'Sometimes', 'Never', 'Rarely', 'Never', 'Sometimes', 'Never', 'Never', 'Never'),
(105, 'Never', 'Never', 'Never', 'Never', 'Never', 'Rarely', 'Rarely', 'Never', 'Never'),
(106, 'Never', 'Never', 'Never', 'Never', 'Never', 'Sometimes', 'Rarely', 'Rarely', 'Never'),
(107, 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often'),
(108, 'Often', 'Often', 'Often', 'Sometimes', 'Never', 'Never', 'Never', 'Often', 'Often'),
(109, 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often'),
(110, 'Often', 'Often', 'Often', 'Sometimes', 'Never', 'Never', 'Never', 'Often', 'Never'),
(111, 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(112, 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Never', 'Often', 'Never'),
(113, 'Never', 'Rarely', 'Never', 'Never', 'Never', 'Never', 'Never', 'Rarely', 'Rarely'),
(114, 'Never', 'Rarely', 'Often', 'Sometimes', 'Rarely', 'Never', 'Never', 'Rarely', 'Never'),
(115, 'Never', 'Often', 'Often', 'Sometimes', 'Never', 'Sometimes', 'Never', 'Often', 'Often'),
(116, 'Rarely', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often'),
(117, 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Never', 'Never', 'Sometimes', 'Never'),
(118, 'Rarely', 'Sometimes', 'Often', 'Often', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Never'),
(119, 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Rarely', 'Often', 'Often', 'Often'),
(120, 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Rarely', 'Sometimes'),
(121, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Rarely', 'Often', 'Often'),
(122, 'Rarely', 'Often', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Often', 'Sometimes', 'Often'),
(123, 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Often', 'Never', 'Sometimes'),
(124, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Sometimes', 'Rarely', 'Rarely', 'Rarely'),
(125, 'Sometimes', 'Rarely', 'Often', 'Often', 'Rarely', 'Sometimes', 'Sometimes', 'Often', 'Often'),
(126, 'Sometimes', 'Rarely', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(127, 'Rarely', 'Often', 'Never', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Often', 'Rarely'),
(128, 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes'),
(129, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(130, 'Never', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Never', 'Often', 'Sometimes'),
(131, 'Sometimes', 'Never', 'Never', 'Never', 'Never', 'Rarely', 'Rarely', 'Rarely', 'Never'),
(132, 'Never', 'Never', 'Never', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Sometimes'),
(133, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(134, 'Sometimes', 'Never', 'Rarely', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(135, 'Rarely', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(136, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(137, 'Never', 'Never', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(138, 'Sometimes', 'Rarely', 'Never', 'Rarely', 'Never', 'Never', 'Rarely', 'Rarely', 'Rarely'),
(139, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(140, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(141, 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes'),
(142, 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes'),
(143, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Never', 'Rarely'),
(144, 'Rarely', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Sometimes'),
(145, 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(146, 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Rarely'),
(147, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely'),
(148, 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes'),
(149, 'Rarely', 'Sometimes', 'Often', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes'),
(150, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Often', 'Often', 'Often', 'Often', 'Rarely'),
(151, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Sometimes', 'Sometimes', 'Often', 'Often'),
(152, 'Rarely', 'Rarely', 'Never', 'Never', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Never'),
(153, 'Rarely', 'Rarely', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Rarely');

-- --------------------------------------------------------

--
-- Table structure for table `activity_question`
--

CREATE TABLE `activity_question` (
  `activity_question_id` int(11) NOT NULL,
  `activity_question_in` varchar(255) NOT NULL,
  `activity_question_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_question`
--

INSERT INTO `activity_question` (`activity_question_id`, `activity_question_in`, `activity_question_en`) VALUES
(1, 'Seberapa sering anak Anda gelisah dengan mengetuk tangan atau kaki, atau menggeliat di kursi?', 'How often your kid often fidgets with or taps hands or feet, or squirms in seat'),
(2, 'Seberapa sering anak Anda meninggalkan bangku di situasi yang mengharapkan anak tetap duduk?', 'How often your kid often leaves seat in situations when remaining seated is expected ?'),
(3, 'Seberapa sering anak Anda berlari-lari atau memanjat dalam situasi yang tidak sesuai?', 'How often your kid often runs about or climbs in situations where it is not appropriate ?'),
(4, 'Seberapa sering anak Anda kesulitan bermain atau melakukan aktivitas santai dengan tenang?', 'How often your kid offten unable to play or take part in leisure activities quietly ?'),
(5, 'Seberapa sering anak Anda bertingkah “sedang dalam perjalanan” seperti dikendalikan oleh motor?', 'How often your kid often “on the go” acting as if “driven by a motor ?'),
(6, 'Seberapa sering anak Anda berbicara terlalu banyak?', 'How often your kid often talk excessively ?'),
(7, 'Seberapa sering anak Anda melontarkan jawaban sebelum pertanyaan selesai diajukan?', 'How often your kid often blurt out an answer before a question has been completed ?'),
(8, 'Seberapa sering anak Anda kesulitan menunggu giliran?', 'How often your kid often have trouble waiting their turn ?'),
(9, 'Seberapa sering anak Anda menyela atau mengganggu orang lain (mis. dalam percakapan atau permainan)?', 'How often your kid often interrupt or intrudes on others (e.g., butts into conversations or games) ?');

-- --------------------------------------------------------

--
-- Table structure for table `activity_score`
--

CREATE TABLE `activity_score` (
  `activity_score_id` int(11) NOT NULL,
  `activity_score_sum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_score`
--

INSERT INTO `activity_score` (`activity_score_id`, `activity_score_sum`) VALUES
(1, 0.8),
(2, 0.7),
(3, 1.05),
(4, 6.6),
(5, 1.5),
(6, 9),
(7, 3.5),
(8, 0),
(9, 0),
(10, 9),
(11, 0.7),
(12, 3.2),
(13, 4.6),
(14, 8.2),
(15, 1),
(16, 0.8),
(17, 1.7),
(18, 1.6),
(19, 1.8),
(20, 1.9),
(21, 1.1),
(22, 1.2),
(23, 1.3),
(24, 1.4),
(25, 1.1),
(26, 1.3),
(27, 0.7),
(28, 1.2),
(29, 1.1),
(30, 1.1),
(31, 1.3),
(32, 0.9),
(33, 1.1),
(34, 1.2),
(35, 2.1),
(36, 2.1),
(37, 1.4),
(38, 2.8),
(39, 1.3),
(40, 1.4),
(41, 1.3),
(42, 1.3),
(43, 6.5),
(44, 4.1),
(45, 2.6),
(46, 4.2),
(47, 2.5),
(48, 7.2),
(49, 1.7),
(50, 9),
(51, 4.2),
(52, 4.1),
(53, 9),
(54, 5.8),
(55, 4),
(56, 4.9),
(57, 2.1),
(58, 2.4),
(59, 5.5),
(60, 5.8),
(61, 7.3),
(62, 8.2),
(63, 3.8),
(64, 5.6),
(65, 8.2),
(66, 5.7),
(67, 5.7),
(68, 5.8),
(69, 6.6),
(70, 4.6),
(71, 4.3),
(72, 1.4),
(73, 4),
(74, 4),
(75, 4.1),
(76, 4.9),
(77, 4.2),
(78, 9),
(79, 5.3),
(80, 1.1),
(81, 4.2),
(82, 6.4),
(83, 5.6),
(84, 5.8),
(85, 4.3),
(86, 3.2),
(87, 5.1),
(88, 0.7),
(89, 3.6),
(90, 2.4),
(91, 7.2),
(92, 2.5),
(93, 4),
(94, 7.4),
(95, 8),
(96, 7.3),
(97, 2.5),
(98, 2.2),
(99, 2.6),
(100, 6.4),
(101, 6.6),
(102, 1.7),
(103, 4.7),
(104, 0.5),
(105, 0.2),
(106, 0.4),
(107, 7.4),
(108, 5.2),
(109, 7.4),
(110, 4.2),
(111, 1),
(112, 4.6),
(113, 0.3),
(114, 1.5),
(115, 4.4),
(116, 5.7),
(117, 4.4),
(118, 3),
(119, 6.5),
(120, 5.7),
(121, 8.1),
(122, 4.8),
(123, 2.1),
(124, 0.9),
(125, 4.8),
(126, 7.3),
(127, 2.7),
(128, 6.6),
(129, 9),
(130, 2.1),
(131, 0.5),
(132, 2),
(133, 9),
(134, 6.3),
(135, 6.5),
(136, 0.9),
(137, 0.8),
(138, 0.7),
(139, 9),
(140, 0.9),
(141, 2.4),
(142, 2.4),
(143, 1),
(144, 4.9),
(145, 4),
(146, 4.9),
(147, 2.2),
(148, 1.6),
(149, 2.1),
(150, 4.5),
(151, 2.8),
(152, 1.8),
(153, 5.5);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `activity_answer_id` int(11) NOT NULL,
  `attention_answer_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `activity_answer_id`, `attention_answer_id`, `child_id`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 4, 4, 3),
(4, 5, 5, 4),
(9, 11, 10, 9),
(13, 15, 14, 13),
(14, 16, 15, 12),
(24, 26, 25, 11),
(28, 30, 29, 32),
(29, 31, 30, 33),
(30, 32, 31, 34),
(31, 33, 32, 35),
(32, 34, 33, 36),
(33, 35, 34, 37),
(34, 36, 35, 38),
(35, 37, 36, 39),
(36, 38, 37, 40),
(37, 39, 38, 41),
(38, 40, 39, 42),
(39, 41, 40, 43),
(40, 42, 41, 44),
(41, 43, 42, 45),
(42, 44, 43, 46),
(43, 45, 44, 47),
(44, 46, 45, 48),
(45, 47, 46, 49),
(46, 48, 47, 50),
(47, 49, 48, 51),
(48, 50, 49, 52),
(49, 51, 50, 53),
(50, 52, 51, 54),
(51, 53, 52, 55),
(52, 54, 53, 56),
(53, 55, 54, 57),
(54, 56, 55, 59),
(55, 57, 56, 58),
(56, 58, 57, 60),
(57, 59, 58, 61),
(58, 60, 59, 62),
(59, 61, 60, 63),
(60, 62, 61, 64),
(61, 63, 62, 65),
(62, 64, 63, 66),
(63, 65, 64, 67),
(64, 66, 65, 68),
(65, 67, 66, 69),
(66, 68, 67, 71),
(67, 69, 68, 72),
(68, 70, 69, 73),
(69, 71, 70, 75),
(70, 72, 71, 77),
(71, 73, 72, 78),
(72, 74, 73, 80),
(73, 75, 74, 81),
(74, 76, 75, 82),
(75, 77, 76, 83),
(76, 78, 77, 84),
(77, 79, 78, 85),
(78, 80, 79, 86),
(79, 81, 80, 87),
(80, 82, 81, 88),
(81, 83, 82, 92),
(82, 84, 83, 93),
(83, 85, 84, 94),
(84, 86, 85, 95),
(85, 87, 86, 97),
(86, 88, 87, 98),
(87, 89, 88, 100),
(88, 90, 89, 102),
(89, 91, 90, 101),
(90, 92, 91, 103),
(91, 93, 92, 104),
(92, 94, 93, 105),
(93, 95, 94, 106),
(94, 96, 95, 107),
(95, 97, 96, 108),
(96, 98, 97, 109),
(97, 99, 98, 110),
(98, 100, 99, 111),
(99, 101, 100, 113),
(100, 102, 101, 115),
(101, 103, 102, 116),
(102, 104, 103, 117),
(103, 105, 104, 119),
(104, 106, 105, 120),
(105, 107, 106, 121),
(106, 108, 107, 122),
(107, 109, 108, 123),
(108, 110, 109, 124),
(109, 111, 110, 125),
(110, 112, 111, 126),
(111, 113, 112, 127),
(112, 114, 113, 128),
(113, 115, 114, 129),
(114, 116, 115, 130),
(115, 117, 116, 131),
(117, 119, 118, 133),
(118, 120, 119, 135),
(119, 121, 120, 137),
(120, 122, 121, 138),
(121, 123, 122, 139),
(122, 125, 124, 141),
(123, 126, 125, 142),
(126, 129, 128, 145),
(130, 133, 132, 149),
(132, 135, 134, 151),
(133, 136, 135, 153),
(134, 137, 136, 153),
(135, 138, 137, 154),
(140, 144, 142, 158),
(141, 145, 143, 159),
(142, 146, 144, 160),
(143, 147, 145, 161),
(144, 148, 146, 162),
(145, 149, 147, 163),
(146, 150, 148, 164),
(147, 151, 149, 165),
(148, 152, 150, 166),
(149, 153, 151, 167);

-- --------------------------------------------------------

--
-- Table structure for table `attention_answer`
--

CREATE TABLE `attention_answer` (
  `attention_answer_id` int(11) NOT NULL,
  `attention_A1` varchar(255) NOT NULL,
  `attention_A2` varchar(255) NOT NULL,
  `attention_A3` varchar(255) NOT NULL,
  `attention_A4` varchar(255) NOT NULL,
  `attention_A5` varchar(255) NOT NULL,
  `attention_A6` varchar(255) NOT NULL,
  `attention_A7` varchar(255) NOT NULL,
  `attention_A8` varchar(255) NOT NULL,
  `attention_A9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attention_answer`
--

INSERT INTO `attention_answer` (`attention_answer_id`, `attention_A1`, `attention_A2`, `attention_A3`, `attention_A4`, `attention_A5`, `attention_A6`, `attention_A7`, `attention_A8`, `attention_A9`) VALUES
(1, 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Sometimes'),
(2, 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes'),
(3, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Rarely', 'Sometimes', 'Rarely'),
(4, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(5, 'Sometimes', 'Sometimes', 'Never', 'Sometimes', 'Often', 'Sometimes', 'Never', 'Sometimes', 'Sometimes'),
(6, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(7, 'Rarely', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(8, 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never'),
(9, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(10, 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes'),
(11, 'Rarely', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Rarely'),
(12, 'Rarely', 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Sometimes'),
(13, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Sometimes', 'Sometimes', 'Often', 'Often'),
(14, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Rarely', 'Sometimes', 'Rarely'),
(15, 'Rarely', 'Never', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never', 'Rarely', 'Rarely'),
(16, 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely'),
(17, 'Rarely', 'Rarely', 'Never', 'Rarely', 'Never', 'Rarely', 'Sometimes', 'Rarely', 'Often'),
(18, 'Rarely', 'Rarely', 'Never', 'Rarely', 'Never', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes'),
(19, 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(20, 'Rarely', 'Sometimes', 'Never', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(21, 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely'),
(22, 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(23, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes'),
(24, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(25, 'Sometimes', 'Sometimes', 'Rarely', 'Often', 'Often', 'Often', 'Rarely', 'Often', 'Rarely'),
(26, 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes'),
(27, 'Rarely', 'Never', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never'),
(28, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(29, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes'),
(30, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes'),
(31, 'Sometimes', 'Never', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(32, 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(33, 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(34, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(35, 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Rarely'),
(36, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(37, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(38, 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes'),
(39, 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely'),
(40, 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes'),
(41, 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes'),
(42, 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often'),
(43, 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes'),
(44, 'Rarely', 'Rarely', 'Sometimes', 'Rarely', 'Often', 'Rarely', 'Rarely', 'Sometimes', 'Rarely'),
(45, 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes'),
(46, 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Rarely', 'Often', 'Sometimes'),
(47, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(48, 'Often', 'Sometimes', 'Rarely', 'Often', 'Often', 'Often', 'Sometimes', 'Rarely', 'Rarely'),
(49, 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(50, 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(51, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(52, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(53, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Rarely'),
(54, 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Sometimes'),
(55, 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes'),
(56, 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely'),
(57, 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often'),
(58, 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often'),
(59, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(60, 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Often'),
(61, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(62, 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(63, 'Sometimes', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(64, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Rarely'),
(65, 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Rarely'),
(66, 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(67, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Often'),
(68, 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often'),
(69, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Rarely', 'Often', 'Often'),
(70, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(71, 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Often'),
(72, 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Rarely'),
(73, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Rarely', 'Often', 'Sometimes'),
(74, 'Often', 'Often', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Rarely', 'Often', 'Often'),
(75, 'Often', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Often'),
(76, 'Often', 'Often', 'Never', 'Never', 'Rarely', 'Often', 'Never', 'Rarely', 'Never'),
(77, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(78, 'Often', 'Often', 'Often', 'Often', 'Rarely', 'Often', 'Rarely', 'Often', 'Rarely'),
(79, 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Never', 'Sometimes', 'Sometimes'),
(80, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(81, 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Sometimes'),
(82, 'Often', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Never', 'Sometimes', 'Never'),
(83, 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often'),
(84, 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often'),
(85, 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Often'),
(86, 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes'),
(87, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Sometimes', 'Never'),
(88, 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Sometimes'),
(89, 'Sometimes', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(90, 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes'),
(91, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Rarely'),
(92, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(93, 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(94, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(95, 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(96, 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(97, 'Often', 'Often', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Often', 'Often'),
(98, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Rarely', 'Often', 'Never'),
(99, 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(100, 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes'),
(101, 'Sometimes', 'Sometimes', 'Never', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often'),
(102, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes'),
(103, 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Never', 'Sometimes', 'Never'),
(104, 'Rarely', 'Rarely', 'Never', 'Never', 'Never', 'Rarely', 'Never', 'Never', 'Never'),
(105, 'Rarely', 'Rarely', 'Never', 'Never', 'Never', 'Never', 'Never', 'Rarely', 'Never'),
(106, 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often'),
(107, 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Never', 'Often', 'Sometimes'),
(108, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes', 'Sometimes'),
(109, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(110, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(111, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(112, 'Rarely', 'Rarely', 'Never', 'Never', 'Rarely', 'Never', 'Rarely', 'Rarely', 'Rarely'),
(113, 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Never'),
(114, 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Often'),
(115, 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Rarely', 'Often', 'Often'),
(116, 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Often'),
(117, 'Rarely', 'Sometimes', 'Often', 'Sometimes', 'Rarely', 'Rarely', 'Never', 'Never', 'Never'),
(118, 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(119, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Sometimes'),
(120, 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often'),
(121, 'Sometimes', 'Often', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Often', 'Often'),
(122, 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Sometimes'),
(123, 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(124, 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Often', 'Sometimes'),
(125, 'Never', 'Never', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(126, 'Never', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Often', 'Rarely'),
(127, 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Rarely', 'Rarely', 'Never'),
(128, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(129, 'Never', 'Never', 'Rarely', 'Sometimes', 'Never', 'Never', 'Rarely', 'Rarely', 'Rarely'),
(130, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely'),
(131, 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Rarely', 'Never'),
(132, 'Often', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(133, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(134, 'Sometimes', 'Often', 'Often', 'Rarely', 'Often', 'Often', 'Often', 'Often', 'Often'),
(135, 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes', 'Sometimes'),
(136, 'Rarely', 'Rarely', 'Rarely', 'Never', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(137, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely'),
(138, 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Sometimes'),
(139, 'Rarely', 'Rarely', 'Never', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Rarely', 'Never'),
(140, 'Sometimes', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Sometimes'),
(141, 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often', 'Often'),
(142, 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Rarely', 'Rarely', 'Sometimes', 'Often', 'Rarely'),
(143, 'Rarely', 'Often', 'Often', 'Often', 'Often', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely'),
(144, 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Often'),
(145, 'Rarely', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Often', 'Often', 'Often', 'Rarely'),
(146, 'Sometimes', 'Sometimes', 'Sometimes', 'Rarely', 'Sometimes', 'Rarely', 'Sometimes', 'Often', 'Sometimes'),
(147, 'Sometimes', 'Sometimes', 'Rarely', 'Often', 'Often', 'Sometimes', 'Often', 'Often', 'Often'),
(148, 'Rarely', 'Sometimes', 'Often', 'Often', 'Sometimes', 'Sometimes', 'Rarely', 'Never', 'Sometimes'),
(149, 'Rarely', 'Sometimes', 'Often', 'Sometimes', 'Often', 'Often', 'Rarely', 'Sometimes', 'Sometimes'),
(150, 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Sometimes', 'Sometimes', 'Sometimes', 'Often', 'Rarely'),
(151, 'Rarely', 'Never', 'Often', 'Sometimes', 'Often', 'Rarely', 'Sometimes', 'Rarely', 'Never');

-- --------------------------------------------------------

--
-- Table structure for table `attention_question`
--

CREATE TABLE `attention_question` (
  `attention_question_id` int(11) NOT NULL,
  `attention_question_in` varchar(255) NOT NULL,
  `attention_question_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attention_question`
--

INSERT INTO `attention_question` (`attention_question_id`, `attention_question_in`, `attention_question_en`) VALUES
(1, 'Seberapa sering anak Anda gagal memberikan perhatian pada detail atau membuat kesalahan ceroboh dalam tugas sekolah, pekerjaan, ataupun aktivitas lain?', 'How often your kid often fail to give close attention to his work or make careless mistakes in schoolwork, or with other activities ?'),
(2, 'Seberapa sering anak Anda mengalami kesulitan untuk memusatkan perhatian pada pekerjaan atau aktivitas bermain?', 'How often your kid often have trouble holding attention during play ?'),
(3, 'Seberapa sering anak Anda terlihat seolah tidak mendengarkan orang yang sedang berbicara padanya?', 'How often your kid often not seem to listen when spoken to directly ?'),
(4, 'Seberapa sering anak Anda kesulitan mengikuti instruksi yang diberikan dan gagal menyelesaikan tugas sekolah, pekerjaan rumah (misalnya kehilangan fokus, perhatian teralihkan)?', 'How often your kid often not follow through on instructions and fails to finish schoolwork, chores, or duties in the workplace (e.g., loses focus, side-tracked) ?'),
(5, 'Seberapa sering anak Anda kesulitan dalam mengatur tugas dan aktivitasnya?', 'How often your kid Often have trouble organizing tasks and activities ?'),
(6, 'Seberapa sering anak Anda menghindari, tidak suka, atau enggan untuk melakukan pekerjaan yang membutuhkan konsentrasi untuk waktu yang lama (misalnya tugas sekolah atau pekerjaan rumah)?', 'How often your kid Often avoid, dislike, or is reluctant to do tasks that require mental effort over a long period of time (such as schoolwork or homework) ?'),
(7, 'Seberapa sering anak Anda kehilangan barang-barang yang diperlukan untuk tugas dan aktivitas (mis. peralatan sekolah)?', 'How often your kid Often lose things necessary for tasks and activities (e.g. school materials, pencils, books, tools, wallets, keys, paperwork, eyeglasses, mobile telephones) ?'),
(8, 'Seberapa sering anak Anda perhatiannya mudah teralihkan?', 'Is your kid often easily distracted ?'),
(9, 'Apakah anak Anda sering pelupa dalam aktivitas sehari-hari?', 'Is your kid often forgetful in daily activities ?');

-- --------------------------------------------------------

--
-- Table structure for table `attention_score`
--

CREATE TABLE `attention_score` (
  `attention_score_id` int(11) NOT NULL,
  `attention_score_sum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attention_score`
--

INSERT INTO `attention_score` (`attention_score_id`, `attention_score_sum`) VALUES
(1, 1.4),
(2, 1.6),
(3, 1.35),
(4, 9),
(5, 2.2),
(6, 9),
(7, 7.45),
(8, 0),
(9, 9),
(10, 1.3),
(11, 3),
(12, 3.1),
(13, 2.8),
(14, 0.9),
(15, 0.7),
(16, 1.3),
(17, 1.7),
(18, 0.9),
(19, 1.3),
(20, 1.2),
(21, 1.4),
(22, 1.3),
(23, 1.3),
(24, 1.3),
(25, 4.7),
(26, 1.3),
(27, 0.8),
(28, 1.3),
(29, 1.4),
(30, 1.4),
(31, 1.2),
(32, 1.4),
(33, 1.3),
(34, 1.3),
(35, 5.7),
(36, 1.3),
(37, 1.3),
(38, 1.4),
(39, 1.2),
(40, 1.3),
(41, 1.5),
(42, 6.6),
(43, 6.6),
(44, 2),
(45, 6.6),
(46, 4.9),
(47, 9),
(48, 4.7),
(49, 7.4),
(50, 7.4),
(51, 9),
(52, 9),
(53, 8.1),
(54, 3.3),
(55, 5),
(56, 1.3),
(57, 8.2),
(58, 7.4),
(59, 8.2),
(60, 5.8),
(61, 9),
(62, 7.4),
(63, 3.2),
(64, 8.1),
(65, 6.5),
(66, 7.4),
(67, 5),
(68, 6.6),
(69, 8.1),
(70, 8.2),
(71, 4.9),
(72, 2.4),
(73, 7.3),
(74, 5.6),
(75, 6.6),
(76, 3.2),
(77, 9),
(78, 6.3),
(79, 2.3),
(80, 9),
(81, 6.6),
(82, 3),
(83, 6.6),
(84, 5.6),
(85, 6.6),
(86, 7.4),
(87, 1.4),
(88, 5),
(89, 6.6),
(90, 5.8),
(91, 4.9),
(92, 9),
(93, 5.8),
(94, 9),
(95, 8.2),
(96, 6.6),
(97, 4.6),
(98, 3.1),
(99, 7.4),
(100, 7.4),
(101, 4),
(102, 7.4),
(103, 1.2),
(104, 0.3),
(105, 0.3),
(106, 7.4),
(107, 6.4),
(108, 4.2),
(109, 9),
(110, 0.9),
(111, 9),
(112, 0.6),
(113, 2.2),
(114, 4.1),
(115, 7.3),
(116, 7.4),
(117, 1.7),
(118, 7.4),
(119, 4.2),
(120, 7.4),
(121, 6.6),
(122, 3.4),
(123, 1.2),
(124, 6.6),
(125, 7),
(126, 5.5),
(127, 3.8),
(128, 9),
(129, 0.6),
(130, 1.2),
(131, 0.1),
(132, 2.1),
(133, 9),
(134, 7.3),
(135, 1.8),
(136, 0.8),
(137, 0.9),
(138, 1),
(139, 0.7),
(140, 3.3),
(141, 9),
(142, 2.2),
(143, 4.7),
(144, 4.2),
(145, 5.6),
(146, 2.4),
(147, 5.7),
(148, 3),
(149, 4),
(150, 3.3),
(151, 2.7);

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `child_id` int(11) NOT NULL,
  `child_fullname` varchar(255) NOT NULL,
  `child_age` int(11) NOT NULL,
  `child_sex` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`child_id`, `child_fullname`, `child_age`, `child_sex`, `user_id`) VALUES
(1, 'amira zeeva fawaza', 10, 'Female', 6),
(2, 'ikhwan permadi', 8, 'Male', 7),
(3, 'zidni qodir', 5, 'Male', 8),
(4, 'citra ayu lestari', 11, 'Female', 9),
(9, 'muhammad revan fachruli daviansyah', 12, 'Male', 10),
(11, 'salman alfarisi', 11, 'Male', 11),
(12, 'yussifa dwi febrianti', 10, 'Female', 12),
(13, 'eki sagira putri', 8, 'Female', 13),
(15, 'rara', 8, 'Female', 13),
(26, 'budi', 10, 'Male', 4),
(27, 'abi', 11, 'Male', 4),
(32, 'najwa eka rizqi maulida', 11, 'Female', 14),
(33, 'rafi maulana', 12, 'Male', 15),
(34, 'ryan permadi', 3, 'Male', 15),
(35, 'farida rachmawati', 12, 'Female', 16),
(36, 'heri widodo', 10, 'Female', 17),
(37, 'aishwa al naira putri ramadhan', 1, 'Female', 18),
(38, 'muhammad nafil', 9, 'Male', 19),
(39, 'sofiana aurelia', 4, 'Female', 20),
(40, 'syafiq naqsyabandi', 13, 'Male', 20),
(41, 'fanindya arum astanira', 11, 'Female', 21),
(42, 'wangsa atmadeva', 3, 'Male', 21),
(43, 'almeer saif ramadan saputra', 1, 'Male', 21),
(44, 'reyhan ramadhan', 4, 'Male', 22),
(45, 'albertus x n', 7, 'Male', 23),
(46, 'maria.j.esperanza', 6, 'Female', 24),
(47, 'almairi', 3, 'Male', 25),
(48, 'abrisam diyandra c', 6, 'Male', 26),
(49, 'adrian edward anthonyus nikijuluw', 8, 'Male', 28),
(50, 'fadhil dzaky zahy', 8, 'Male', 30),
(51, 'taufiq irfan', 12, 'Male', 31),
(52, 'aldebaran', 8, 'Male', 32),
(53, 'mahesa rama luviiano zain', 11, 'Male', 33),
(54, 'adrian naufal alrasyid', 5, 'Male', 35),
(55, 'daffa', 5, 'Male', 34),
(56, 'azka bagaskoro', 12, 'Male', 36),
(57, 'dyo', 7, 'Male', 37),
(58, 'ondo lumbantoruan', 4, 'Male', 39),
(59, 'kalilla emysha aulia', 7, 'Female', 38),
(60, 'ibrahim raihan alkha', 5, 'Male', 40),
(61, 'gema puspa sari', 31, 'Female', 42),
(62, 'omar', 6, 'Male', 43),
(63, 'sultan zahir khan', 7, 'Male', 44),
(64, 'kenzie', 5, 'Male', 45),
(65, 'tristan', 12, 'Male', 46),
(66, 'arsendho azfar', 6, 'Male', 47),
(67, 'farzan algorismi', 6, 'Male', 48),
(68, 'alkhalifi ', 8, 'Male', 49),
(69, 'hatim abdul majid', 5, 'Male', 50),
(70, 'putri baiti', 10, 'Female', 51),
(71, 'alfatihah putra', 9, 'Male', 52),
(72, 'kanisha lintang radyana', 10, 'Female', 53),
(73, 'valentino jason pramudya', 11, 'Male', 54),
(74, 'tes', 9, 'Male', 4),
(75, 'theodore ethan adrian', 8, 'Male', 55),
(76, 'aku', 11, 'Female', 4),
(77, 'enzo s', 11, 'Male', 56),
(78, 'aidan s', 9, 'Male', 56),
(79, 'oki', 9, 'Female', 4),
(80, 'prayoga', 4, 'Male', 57),
(81, 'i dewa gede govinda danadyksa', 4, 'Male', 58),
(82, 'muhammad tsabit', 13, 'Male', 41),
(83, 'radif faustin alvaronizam', 6, 'Male', 59),
(84, 'muhammad faril ilham', 11, 'Male', 60),
(85, 'gede laba baswara', 3, 'Male', 61),
(86, 'muhamad naufal putra ramadhan', 8, 'Male', 62),
(87, 'adeeva afsheen myesha', 6, 'Female', 63),
(88, 'alpeena yazra zhafira n', 9, 'Female', 64),
(89, 'a nouval', 8, 'Male', 65),
(90, 'faaz althaf', 7, 'Male', 66),
(91, 'hafiz roufa nurudin', 13, 'Male', 67),
(92, 'pandya pratama', 8, 'Male', 68),
(93, 'andi', 10, 'Male', 69),
(94, 'anindita fredelina', 4, 'Female', 70),
(95, 'ajeng', 7, 'Female', 72),
(96, 'azriel', 4, 'Male', 71),
(97, 'sabio', 5, 'Male', 72),
(98, 'm rhaditya arsyad', 22, 'Male', 73),
(99, 'muhammad kenzi al farizi', 5, 'Male', 74),
(100, 'aryasatya', 5, 'Male', 75),
(101, 'maher mumtaz ali', 4, 'Male', 76),
(102, 'danish agha aisy hanif', 10, 'Male', 77),
(103, 'matteo', 7, 'Male', 78),
(104, 'm fadhil', 10, 'Male', 79),
(105, 'ahnaf rafif', 51, 'Male', 80),
(106, 'muhammad nouval abdullah', 11, 'Male', 81),
(107, 'akmal', 9, 'Male', 83),
(108, 'athallah musyafa ghazy', 5, 'Male', 84),
(109, 'eve', 21, 'Female', 85),
(110, 'arjuna raka pratama', 5, 'Male', 86),
(111, 'shailendra rashad', 6, 'Male', 87),
(112, 'elvan', 3, 'Male', 88),
(113, 'azka janitra tyasmoro', 5, 'Male', 89),
(114, 'joan carmen', 12, 'Female', 90),
(115, 'ades', 15, 'Male', 91),
(116, 'ahmad shafi yusuf raditya', 9, 'Male', 92),
(117, 'tristan aldi hanan', 6, 'Male', 96),
(118, 'teja ganz', 21, 'Male', 97),
(119, 'nia dwi', 11, 'Female', 4),
(120, 'jihan putri amanda', 11, 'Female', 4),
(121, 'izzet ubaidillah alamsyah', 3, 'Male', 98),
(122, 'bilal abiyyu syawal lubis', 3, 'Male', 99),
(123, 'alber elfaz', 6, 'Male', 100),
(124, 'abdulloh fakhriy saeroji', 6, 'Male', 101),
(125, 'abc', 16, 'Female', 102),
(126, 'hamas mahea najaha', 8, 'Male', 103),
(127, 'nahda nafis sahila', 12, 'Female', 103),
(128, 'zamzam baihaqi', 4, 'Male', 104),
(129, 'mayesa', 4, 'Female', 107),
(130, 'shanum', 4, 'Female', 107),
(131, 'rayya farzana khalilah', 4, 'Female', 108),
(133, 'amir reynand', 3, 'Male', 109),
(134, 'sensen', 11, 'Male', 110),
(135, 'alcand', 26, 'Male', 111),
(136, 'anak test', 12, 'Female', 2),
(137, 'muhammad adnan arief', 11, 'Male', 113),
(138, 'athallah musyafa ghazy', 5, 'Male', 114),
(139, 'jianggra', 11, 'Female', 114),
(141, 'afif suratman', 5, 'Male', 115),
(142, 'anak', 9, 'Female', 116),
(145, 'hehe', 9, 'Female', 94),
(149, 'hihi', 4, 'Female', 94),
(151, 'rose', 8, 'Female', 117),
(152, 'hihu', 8, 'Female', 2),
(153, 'ini', 12, 'Female', 2),
(154, 'k', 8, 'Female', 2),
(158, 'test1', 12, 'Female', 2),
(159, 'test2', 12, 'Female', 2),
(160, 'test3', 12, 'Female', 2),
(161, 'test4', 12, 'Female', 2),
(162, 'test5', 12, 'Female', 2),
(163, 'test6', 12, 'Female', 2),
(164, 'test7', 12, 'Female', 2),
(165, 'test8', 13, 'Female', 2),
(166, 'test9', 11, 'Female', 2),
(167, 'test10', 6, 'Female', 2);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `activity_question_id` int(11) NOT NULL,
  `attention_question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `score_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `child_id`, `score_id`, `result_id`, `answer_id`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 2, 2),
(3, 3, 3, 3, 3),
(4, 4, 4, 4, 4),
(12, 9, 9, 9, 9),
(30, 32, 28, 28, 28),
(31, 33, 29, 29, 29),
(32, 34, 30, 30, 30),
(33, 35, 31, 31, 31),
(34, 36, 32, 32, 32),
(35, 37, 33, 33, 33),
(36, 38, 34, 34, 34),
(37, 39, 35, 35, 35),
(38, 40, 36, 36, 36),
(39, 41, 37, 37, 37),
(40, 42, 38, 38, 38),
(41, 43, 39, 39, 39),
(42, 44, 40, 40, 40),
(43, 45, 41, 41, 41),
(44, 46, 42, 42, 42),
(45, 47, 43, 43, 43),
(46, 48, 44, 44, 44),
(47, 49, 45, 45, 45),
(48, 51, 47, 47, 47),
(49, 52, 48, 48, 48),
(50, 53, 49, 49, 49),
(51, 54, 50, 50, 50),
(52, 55, 51, 51, 51),
(53, 56, 52, 52, 52),
(54, 57, 53, 53, 53),
(55, 59, 54, 54, 54),
(56, 58, 55, 54, 55),
(57, 60, 56, 56, 56),
(58, 61, 57, 57, 57),
(59, 62, 58, 58, 58),
(60, 63, 59, 59, 59),
(61, 64, 60, 60, 60),
(62, 65, 61, 61, 61),
(63, 66, 62, 62, 62),
(64, 67, 63, 63, 63),
(65, 68, 64, 64, 64),
(66, 69, 65, 65, 65),
(67, 71, 66, 66, 66),
(68, 72, 67, 67, 67),
(69, 73, 68, 68, 68),
(70, 75, 69, 69, 69),
(71, 77, 70, 70, 70),
(72, 78, 71, 71, 71),
(73, 80, 72, 72, 72),
(74, 81, 73, 73, 73),
(75, 82, 74, 74, 74),
(76, 83, 75, 75, 75),
(77, 84, 76, 76, 76),
(78, 85, 77, 77, 77),
(79, 86, 78, 78, 78),
(80, 87, 79, 79, 79),
(81, 88, 80, 80, 80),
(82, 92, 81, 81, 81),
(83, 93, 82, 82, 82),
(84, 94, 83, 83, 83),
(85, 95, 84, 84, 84),
(86, 97, 85, 85, 85),
(87, 98, 86, 86, 86),
(88, 100, 87, 87, 87),
(89, 102, 88, 88, 88),
(90, 101, 89, 88, 89),
(91, 103, 90, 90, 90),
(92, 104, 91, 91, 91),
(93, 105, 92, 92, 92),
(94, 106, 93, 93, 93),
(95, 107, 94, 94, 94),
(96, 108, 95, 95, 95),
(97, 109, 96, 96, 96),
(98, 110, 97, 97, 97),
(99, 111, 98, 98, 98),
(100, 113, 99, 99, 99),
(101, 115, 100, 100, 100),
(102, 116, 101, 101, 101),
(103, 117, 102, 102, 102),
(104, 119, 103, 103, 103),
(105, 120, 104, 104, 104),
(106, 121, 105, 105, 105),
(107, 122, 106, 106, 106),
(108, 123, 107, 107, 107),
(109, 124, 108, 108, 108),
(110, 125, 109, 109, 109),
(111, 126, 110, 110, 110),
(112, 127, 111, 111, 111),
(113, 128, 112, 112, 112),
(114, 131, 115, 115, 115),
(116, 133, 117, 117, 117),
(117, 135, 118, 118, 118),
(118, 137, 119, 119, 119),
(119, 138, 120, 120, 120),
(120, 139, 121, 121, 121),
(121, 141, 122, 122, 122),
(122, 142, 123, 123, 123),
(125, 145, 126, 126, 126),
(129, 149, 130, 130, 130),
(131, 151, 132, 132, 132),
(132, 153, 133, 132, 133),
(133, 154, 135, 132, 135),
(136, 158, 140, 136, 140),
(137, 159, 141, 137, 141),
(138, 160, 142, 138, 142),
(139, 161, 143, 139, 143),
(140, 162, 144, 140, 144),
(141, 163, 145, 141, 145),
(142, 164, 146, 142, 146),
(143, 165, 147, 143, 147),
(144, 166, 148, 144, 148),
(145, 167, 149, 145, 149);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `result_in` varchar(255) NOT NULL,
  `result_en` varchar(255) NOT NULL,
  `result_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `result_in`, `result_en`, `result_date`, `child_id`) VALUES
(1, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-05 02:07:13', 1),
(2, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-05 02:23:13', 2),
(3, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-05 02:44:43', 3),
(4, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-05 03:55:32', 4),
(9, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-05 08:27:04', 9),
(13, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-06 06:05:22', 13),
(14, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-06 06:37:31', 12),
(24, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-07 16:55:29', 11),
(28, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-08 10:24:00', 32),
(29, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-08 11:23:20', 33),
(30, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-08 11:24:41', 34),
(31, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-08 11:30:46', 35),
(32, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-08 11:34:23', 36),
(33, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-08 12:01:35', 37),
(34, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-10 06:48:22', 38),
(35, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-10 12:14:30', 39),
(36, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-10 12:16:19', 40),
(37, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-10 12:20:10', 41),
(38, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-10 12:22:48', 42),
(39, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-10 12:23:52', 43),
(40, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-10 12:57:45', 44),
(41, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-11 13:41:41', 45),
(42, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-11 13:51:01', 46),
(43, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-11 14:08:04', 47),
(44, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-11 14:25:07', 48),
(45, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-11 16:36:02', 49),
(46, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-11 17:47:26', 50),
(47, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-11 21:31:31', 51),
(48, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-11 21:48:46', 52),
(49, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-11 21:54:35', 53),
(50, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-11 22:11:10', 54),
(51, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-11 22:16:10', 55),
(52, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-11 23:11:30', 56),
(53, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-11 23:58:53', 57),
(54, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-12 01:18:02', 59),
(55, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-12 01:23:24', 58),
(56, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-06-03 08:56:19', 60),
(57, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-12 06:30:08', 61),
(58, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-12 08:23:14', 62),
(59, 'teridentifikasi menderita ADHD tipe dominan Hyperactive-Impulsive', 'Predominantly Hyperactive-Impulsive Presentation', '2021-05-12 10:36:09', 63),
(60, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-12 11:09:38', 64),
(61, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-12 11:20:33', 65),
(62, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-12 12:50:48', 66),
(63, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-12 13:53:00', 67),
(64, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-12 15:55:27', 68),
(65, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-12 22:09:51', 69),
(66, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-14 12:49:49', 71),
(67, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-14 13:21:27', 72),
(68, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-14 15:00:51', 73),
(69, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-15 01:46:44', 75),
(70, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-15 14:15:19', 77),
(71, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-15 14:17:26', 78),
(72, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-16 22:55:44', 80),
(73, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-17 06:03:44', 81),
(74, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-17 12:59:11', 82),
(75, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-17 23:31:50', 83),
(76, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-17 23:33:39', 84),
(77, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-18 02:03:27', 85),
(78, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-18 03:58:20', 86),
(79, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-18 04:39:18', 87),
(80, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-18 05:46:24', 88),
(81, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-18 14:03:56', 92),
(82, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-19 14:34:05', 93),
(83, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-21 00:43:53', 94),
(84, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-21 00:46:21', 95),
(85, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-21 00:50:37', 97),
(86, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-21 00:59:26', 98),
(87, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-21 01:01:01', 100),
(88, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-21 01:13:33', 102),
(89, 'teridentifikasi menderita ADHD tipe dominan Hyperactive-Impulsive', 'Predominantly Hyperactive-Impulsive Presentation', '2021-05-21 01:15:14', 101),
(90, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-21 01:24:03', 103),
(91, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-21 01:28:36', 104),
(92, 'teridentifikasi menderita ADHD tipe dominan Hyperactive-Impulsive', 'Predominantly Hyperactive-Impulsive Presentation', '2021-05-21 01:51:22', 105),
(93, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-21 02:10:51', 106),
(94, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-21 03:25:56', 107),
(95, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-21 03:53:52', 108),
(96, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-21 04:16:46', 109),
(97, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-21 07:05:03', 110),
(98, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-21 09:20:14', 111),
(99, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-21 11:43:37', 113),
(100, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-21 12:53:17', 115),
(101, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-21 15:22:08', 116),
(102, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-22 04:23:23', 117),
(103, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-22 12:11:35', 119),
(104, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-22 12:13:55', 120),
(105, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-22 13:02:00', 121),
(106, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-23 00:47:20', 122),
(107, 'teridentifikasi menderita ADHD tipe dominan Hyperactive-Impulsive', 'Predominantly Hyperactive-Impulsive Presentation', '2021-05-23 04:21:19', 123),
(108, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-23 14:27:54', 124),
(109, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-24 06:08:29', 125),
(110, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-24 08:16:19', 126),
(111, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-24 08:19:38', 127),
(112, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-24 14:44:45', 128),
(113, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-26 20:32:25', 129),
(114, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-26 20:38:49', 130),
(115, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-05-27 07:30:37', 131),
(117, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-05-28 04:03:39', 133),
(118, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-05-30 02:45:25', 135),
(119, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-06-02 08:50:43', 137),
(120, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-06-03 03:37:43', 138),
(121, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-06-03 23:34:07', 139),
(122, 'teridentifikasi menderita ADHD tipe dominan Inattentive', 'Predominantly Inattentive Presentation', '2021-06-06 09:45:13', 141),
(123, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-07-02 08:57:42', 142),
(126, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-07-14 07:00:07', 145),
(130, 'teridentifikasi menderita ADHD tipe dominan Hyperactive-Impulsive', 'Predominantly Hyperactive-Impulsive Presentation', '2021-07-14 17:26:16', 149),
(132, 'teridentifikasi menderita ADHD tipe dominan Combined', 'Predominantly Combined Presentation', '2021-07-14 18:15:08', 151),
(136, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:23:45', 158),
(137, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:25:12', 159),
(138, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:26:10', 160),
(139, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:27:29', 161),
(140, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:28:37', 162),
(141, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:31:21', 163),
(142, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:32:16', 164),
(143, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:34:34', 165),
(144, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:35:49', 166),
(145, 'tidak teridentifikasi menderita ADHD', 'The child has no ADHD', '2021-07-29 00:37:05', 167);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `activity_score_id` int(11) NOT NULL,
  `attention_score_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `activity_score_id`, `attention_score_id`, `child_id`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 4, 4, 3),
(4, 5, 5, 4),
(9, 11, 10, 9),
(13, 15, 14, 13),
(14, 16, 15, 12),
(24, 26, 25, 11),
(28, 30, 29, 32),
(29, 31, 30, 33),
(30, 32, 31, 34),
(31, 33, 32, 35),
(32, 34, 33, 36),
(33, 35, 34, 37),
(34, 36, 35, 38),
(35, 37, 36, 39),
(36, 38, 37, 40),
(37, 39, 38, 41),
(38, 40, 39, 42),
(39, 41, 40, 43),
(40, 42, 41, 44),
(41, 43, 42, 45),
(42, 44, 43, 46),
(43, 45, 44, 47),
(44, 46, 45, 48),
(45, 47, 46, 49),
(46, 48, 47, 50),
(47, 49, 48, 51),
(48, 50, 49, 52),
(49, 51, 50, 53),
(50, 52, 51, 54),
(51, 53, 52, 55),
(52, 54, 53, 56),
(53, 55, 54, 57),
(54, 56, 55, 59),
(55, 57, 56, 58),
(56, 58, 57, 60),
(57, 59, 58, 61),
(58, 60, 59, 62),
(59, 61, 60, 63),
(60, 62, 61, 64),
(61, 63, 62, 65),
(62, 64, 63, 66),
(63, 65, 64, 67),
(64, 66, 65, 68),
(65, 67, 66, 69),
(66, 68, 67, 71),
(67, 69, 68, 72),
(68, 70, 69, 73),
(69, 71, 70, 75),
(70, 72, 71, 77),
(71, 73, 72, 78),
(72, 74, 73, 80),
(73, 75, 74, 81),
(74, 76, 75, 82),
(75, 77, 76, 83),
(76, 78, 77, 84),
(77, 79, 78, 85),
(78, 80, 79, 86),
(79, 81, 80, 87),
(80, 82, 81, 88),
(81, 83, 82, 92),
(82, 84, 83, 93),
(83, 85, 84, 94),
(84, 86, 85, 95),
(85, 87, 86, 97),
(86, 88, 87, 98),
(87, 89, 88, 100),
(88, 90, 89, 102),
(89, 91, 90, 101),
(90, 92, 91, 103),
(91, 93, 92, 104),
(92, 94, 93, 105),
(93, 95, 94, 106),
(94, 96, 95, 107),
(95, 97, 96, 108),
(96, 98, 97, 109),
(97, 99, 98, 110),
(98, 100, 99, 111),
(99, 101, 100, 113),
(100, 102, 101, 115),
(101, 103, 102, 116),
(102, 104, 103, 117),
(103, 105, 104, 119),
(104, 106, 105, 120),
(105, 107, 106, 121),
(106, 108, 107, 122),
(107, 109, 108, 123),
(108, 110, 109, 124),
(109, 111, 110, 125),
(110, 112, 111, 126),
(111, 113, 112, 127),
(112, 114, 113, 128),
(113, 115, 114, 129),
(114, 116, 115, 130),
(115, 117, 116, 131),
(117, 119, 118, 133),
(118, 120, 119, 135),
(119, 121, 120, 137),
(120, 122, 121, 138),
(121, 123, 122, 139),
(122, 125, 124, 141),
(123, 126, 125, 142),
(126, 129, 128, 145),
(130, 133, 132, 149),
(132, 135, 134, 151),
(133, 136, 135, 153),
(134, 137, 136, 153),
(135, 138, 137, 154),
(140, 144, 142, 158),
(141, 145, 143, 159),
(142, 146, 144, 160),
(143, 147, 145, 161),
(144, 148, 146, 162),
(145, 149, 147, 163),
(146, 150, 148, 164),
(147, 151, 149, 165),
(148, 152, 150, 166),
(149, 153, 151, 167);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_phone`, `username`, `password`) VALUES
(1, 'admin cantik', '087896783709', 'adm', '$2y$10$6PRSdXIJhZcpCEbwqDb.h.3Vrik0hn/nYayMz9L3UAON1bUNA/DU2'),
(2, 'test', '123', 'test', '$2y$10$WKSZ3Dm5pYhz.U8TayJTcupUuXpQiyUa7e8q2nPhCOzbmh5/qinDC'),
(3, 'Sharad Gedam', '8989622793', 'sharad', '$2y$10$IS/GQa5coOBcZ0.ymNtMNeaidO41g6UpnIsJb4bTpUlTYQFeSexEC'),
(4, 'Arsika citra pelangi', '082213997563', 'arsikacitra', '$2y$10$zznxpLSlJWbpXpxOdXllZutI/5TAMk5tNJhz1bnyrtSgGMizWmGiq'),
(5, 'Ini Contoh', '0857xxxxxxxx', 'contoh', '$2y$10$IwP8Q3IpidHryMuhEK1U3.gAPJTBZmMV6GVLYZK5BAFxSzNJNnmnm'),
(6, 'Amira', '085786319933', 'amira', '$2y$10$6GQ7eoAlbAlbX.6mS9ruE.2vF/dWRpvyFD2QmROR5.32Ks.6hRrUu'),
(7, 'Rofika setianingsih', '085225741464', 'rofika', '$2y$10$Fp/mvmbOCWUxEHP3prFpL./P6oH.gNC8xrnqebKr0nhIGwwZprpBq'),
(8, 'Ngatono Subiarso', '085842156367', 'ngatono', '$2y$10$sPQHLGP.BN3y5GFrUkFuvOeIv4HcoFTqLiwV/MrixA2I50YYeBHxq'),
(9, 'Musdalipah', '+62895322814896', 'musdalipah', '$2y$10$5f1RiQRs3Jhn7rKegKVOWu2ur8tKwZm3.1Ir2Qm3lRXV5fEpIM2Su'),
(10, 'Revan Fachruli', '085641360619', 'revan', '$2y$10$r5f41IQ1udy5uKHyH1cUFe5/4lyxDnpW/UWzRhJmMhVueucAmEXSm'),
(11, 'Salman Alfarisi', '085742797772', 'salmanalfarisi', '$2y$10$Er75mCR611TQg90RndFOA.YJP8n6cwWlNvD16Bn0MAadLH4eWZ2vG'),
(12, 'Yussofi Faturochman', '085325406950', 'yus', '$2y$10$OWgwYgzELoU8agY.th2rMekODIBtfRCgIfpWRefjHfjHMRysbBoHS'),
(13, 'Rizki umami', '085842320980', 'rizki umami', '$2y$10$fABgLhk8RABOxY4Oo2FVpeo/YaRtUmE8wjS4Zb8V4Vb.E/hjAGeH6'),
(14, 'estiyaroh', '085743750007', 'estiyaroh', '$2y$10$LaRurWNyPSzciTR.Gf9gyOMc4XOQZl2JABqI.GiSuCwcULaPA4/Xa'),
(15, 'Rafi Maulana', '085743750007', 'rafi maulana', '$2y$10$FCWMQuUBfoZqgwCT.qSNMemgVn1PzJejhNej9WP9v4NECpdFVN7U.'),
(16, 'Yoga Adi Prawira', '085757532014', 'yoga adi prawira', '$2y$10$qR5PJXTMQe.TwbJt8HGqYO2AKmWtlekZZ4VkVaFouXOPdTdcLXP7y'),
(17, 'Priyati', '085764594210', 'heri widodo', '$2y$10$u8JXF3vnCrhIJZHZ9eRGp.wZIrWDp9xWjWeROyA0CHf7kghuYunI6'),
(18, 'Rumsari', '087559645715', 'rumsari', '$2y$10$BIv/qO8DVus/GBGvFT2VuOhlCZtMSJlqLTBDY4ImTdQjBm/VpAIAq'),
(19, 'Munafah', '085601101517', 'munafah', '$2y$10$6NPq89NdxDq5CSDUsIF2U.UC4H97YtcsJkTbgOyLUJVig5QuxjHc6'),
(20, 'Lilik Nur Hilda', '081436759853', 'lilik nur hilda', '$2y$10$miPAWdQmCSgTvsCS25YGduKRoKbz5MuhDOK6XdkYN4EYDAlQqc.vO'),
(21, 'Elmiati', '085755689234', 'elmiati', '$2y$10$mbkdwTYHNOoG0NaO/XscCe1t9oofbCAquIUFSoKel0y9YxFnTgzgq'),
(22, 'Titis Surani', '084765589647', 'titis surani', '$2y$10$U/yCP1UIv9EVWP14KiDwfuatukj8dblORh0Ed3u4z0ZxpBhsE51WK'),
(23, 'Brigitha Juliana', '087885425776', 'gvax', '$2y$10$sR/8iR5cOOmwQxUuJW7GMezgCdvTlWu1OEgUildhr2eJwNScEgAFS'),
(24, 'Starsea', '081294757995', 'maria', '$2y$10$JmuOFVUrvgrWwjKHb3PW8e4jV99911S0lU0bj2LnCatbX4Vn1M2by'),
(25, 'Bagus Joko', '087764498503', 'joko', '$2y$10$Mmztex0SWdB2Fl.N7WJqBugFBvZx9LTd4Ew4IRVa4oE0sTlqBpjkO'),
(26, 'Cipta Dwi L', '085257673333', 'dwi 3103', '$2y$10$7AEBeVPnS7mI01ThX68dw.HoV4wZ4UzW0pcXmGVqVlQZvnYOfHhQu'),
(27, 'Ziyada rizqina', '085600067684', 'zida', '$2y$10$N/JO8vJ2NHwkooIs4LaP1OtADvtVIhzDSy.TfXkRUxthP0Qny9te2'),
(28, 'Adrian Edward Anthonyus Nikijuluw', '081296058688', 'adriannikijuluw', '$2y$10$xCrEANQWAEOaOCjsP5fh.efIbzmtDjcCqOJXy/xmLj0jVpOn8vlFa'),
(29, 'Irma', '081210702211', 'irma', '$2y$10$cqeHzEjhbaA9uRo1NqPSaOeeTNCvUjPyFEIbSgZJiZD4pHNa1zmZ.'),
(30, 'Nur Afni olivia', '082127925666', 'olivia', '$2y$10$a7iUthWnQDkH4ydD6J5D1.z/P5lA7axsaj7oajrEFVpzqgLgFjme.'),
(31, 'Taufiq Irfan', '085702233207', 'irfan', '$2y$10$CpbvEftRIaMOnQGOIEOMVOA9Gdjq9WJTbXIkwHxgPr6xtc02IavU2'),
(32, 'Dydie Prameswarie', '087821331177', 'dydie', '$2y$10$NSgvx1XGVUWYfGqfnUVsM.qVzjw3Hlj7QsUYbtP.uDMn8bnuDPpwW'),
(33, 'Ika novitasari', '083840901177', 'ika_novitasari', '$2y$10$UiAlTse7z5fQ5vdu5zisge8Wri1tUI2kLXNU067I70JDnm2a5zxAK'),
(34, 'Nurwahida', '082187012687', 'idaffay', '$2y$10$YBHako44US8KRyqcUDLWueShcWDZKSlgTAW/PfHKcjRzPjana0Yvq'),
(35, 'Siti Maesaroh', '081395097959', 'sima', '$2y$10$3Y6W/ywvIWIRQkP1VHSHMO.2b5IMl9r6X/tmGQ3FEBPmJRqGLTUs2'),
(36, 'Avlien Farlina', '085339911123', 'avlien', '$2y$10$VfHgaKx9lCIj0V0VXRCHE.PIhT/MvyILrfBdNHOsUmg4YqlSQEq1a'),
(37, 'Unclegie', '085649013039', 'unclegie', '$2y$10$o51rN25PnJw3vKm7l7w0LON1wDZWnRdjwK5R7Swt85tzVVMKNz5/S'),
(38, 'Kalilla', '082228886716', 'kalilla', '$2y$10$8Ws3PsobExRyj/odHrAa9.BdqmZxS8DgVFeNWpwdbr4TXPQpQzaYS'),
(39, 'Lenny Sinaga', '081310981897', 'leny', '$2y$10$32ymZTJgTZEjcZQ.xLN1kO59.cRUKxT.38ZLGBzuCEO81BNA5dr3G'),
(40, 'Devi Ratnasari', '085694445716', 'devirtnsri', '$2y$10$6wc2IA9w/AMrJ.m38Ds0p.0Rf9xWyOXsDaQcpYp3YqEbkAUyRJNWe'),
(41, 'Megawati', '085777618031', 'ega', '$2y$10$WKvqmod.pZUwd59JJyp9de7EjNp7jVt20ia9nV/nJW.ujZR4cRqLi'),
(42, 'Gema Puspa Sari', '+818047018846', 'gema1990', '$2y$10$4h711iVv4lSWGCMj78mUAO8mRKrHfHuzmAIvn5azXBxF8rTMDoPu2'),
(43, 'dinayati', '081212173269', 'dinayati', '$2y$10$cmEMtZhZML5/2xrMHehsSuPAtPhI/j3/gfAXU0g.onI7PMYXE8NEm'),
(44, 'Riene', '081377725522', 'inesweet', '$2y$10$y5Bhm7q/z9IxgCNvkPhTTexfNXywcWPGH/jijs/j4E6PGruLsy9Nu'),
(45, 'Anita', '082323222134', 'anita', '$2y$10$DJ909Fd8z0Uk387xuru4wuajlaWH./NNrQAeMqNdAsQVjF67F62ie'),
(46, 'Tristan', '0816939399', 'tristan', '$2y$10$VSefCid/h/I7pzlUWqvRnuqifgHW50QWoSAJokFUp8gepO0x4oW4S'),
(47, 'winda sari', '085378588338', 'winda27', '$2y$10$yBaI2pW0kIGR51J.vQmE..SukulGEa8hBVS5a9RRZOKjmk6l3VIb2'),
(48, 'annisa anastasia', '085225524276', 'ichanastasia', '$2y$10$g.5kjTbNVf/ERLerAVgrwOH1TtAv821GGTr0naN6jDyoKCw8Wdhny'),
(49, 'Anna Syufi', '081939335550', 'annsyufi', '$2y$10$WBKxRVQ6gulQsGPj4ZHP/OYC.1v6yuoDrWmfHSmgvX9r24/WORhKW'),
(50, 'Hatim', '081542438004', 'hatim', '$2y$10$aQ1vPF1LbulLXPMNxeX4Gu9R8.naITad88Mi/VT0N2Wv5Ze1DsGim'),
(51, 'Subiyah', '087896783709', 'subiyah', '$2y$10$tTvTDqOM4AhZk768KeeCQe4FGGPBk.tkQyXmXLD.iBGDjxRc0WmfS'),
(52, 'Endah Budiarti', '081311179017', 'endah', '$2y$10$fjlyxr5a2TGI8ho.AbsQbeOXNihpC2Gh3gl6zAm7wSSqXQP.cDdA2'),
(53, 'Enggar Dwi', '087776081415', 'en99ar', '$2y$10$rWR9r3lhjMuYaPsNDaI5B.2OO7Ai1iVur95Fe7s13uvkkQ5jR2e3C'),
(54, 'Fransesca Sally', '08111767448', 'fransesca', '$2y$10$m3sZQDJgv1XdLtr9xvWJfuRy/anB3Kgn8JacbmvojjIN5bFOzbxo2'),
(55, 'Meitianie Susanto', '087878808835', 'ethanadrian', '$2y$10$1UQjBCj.lDifNFmQYuwQ2.utS8v8BmnUl9Shbsn7U3hX4KjEYLdzy'),
(56, 'Defieta', '087724102610', 'vivi', '$2y$10$OsvJ9cgrskZ6nTtoDq8M1.Pyw/DDH/NggJY3CEjG.BKkN6bWEUKDG'),
(57, 'Laily nor kholisoh', '087878470318', 'lailyn', '$2y$10$bTuTgsDe13IZGJZrUKbsF.2PhMGnvoTLh9vrDoKRMlHkxcKRolW6m'),
(58, 'Dewa Ayu Sri Septiawati', '081936059454', 'dewayu454', '$2y$10$BCdo43DrS3owvFqSrAvOTuf4DnUIR.94OlQOvteb0g0qPht4vLM.S'),
(59, 'Nuzulul Khory Prabawati', '082257624348', 'radif', '$2y$10$fpf3guGA43YrOSFBKl8pAOBJCFuf8PV8/Nd6rVmo9bXmSAPqTmywy'),
(60, 'feny faril', '08888569079', 'faril31', '$2y$10$nbyeDUU06F.nB5WXfsvHG.vHFHk1EE/INfbmSEd9UV/ABPq3UOpyO'),
(61, 'ni luh rupa suwariyani', '085737406850', 'rupa', '$2y$10$OnFaaulIeWK.p7KEcThsq.kocqAqih7jK2ggM0y88phRUYrnkbSR.'),
(62, 'Belinda Dwi Yunanti', '082114437923', 'belinda11', '$2y$10$h5w.Plt9quLBRBDMJHabz.ubkZIqsXT8vdNWBYpJlE9gR27NSYx/a'),
(63, 'Yunita Rizky', '085766853666', 'nieyyta', '$2y$10$wx1yrxSZknKvAWvDMLwrvewmKIfa7w8EzxE8QWT/R/NgLm8PAz4Je'),
(64, 'Tisah Nuraisah', '088229197642', 'tnuraisah', '$2y$10$bau./2AHqyC9NLSRnAb/PuQicAm5Xaf.TUp0Gabw4BRYFJgLSKEou'),
(65, 'Nouval', '081334771971', 'nouval', '$2y$10$P6abpLCRou4WrCZ.o6ciOO3.Q09YPvSbzANCNXTQ4hwu7ZxYJk8c2'),
(66, 'ririen indriawaty', '085243900708', 'faaz', '$2y$10$dNJTNbqduBl/6QUNsKGXLOEpy7WENYqImI6D.KJJqPAeZJ7/kneHW'),
(67, 'Isna Hayu', '08812869273', 'isna_hayu', '$2y$10$oIULhCzs/UsB0.fDpdc6ielxICVlQEeow.vmZ9OsQ.d5R0n96jqVW'),
(68, 'Risa Wulandari', '087878985535', 'risa', '$2y$10$wevdFHi4/EIrRfcLsM6GL.tSd82foKEUTmFwcgR6w49i9DQYcBZXy'),
(69, 'Muhammad Andika Aryasatya Putra', '081283381686', 'andikaaryasatya', '$2y$10$qcG4eQgh5DubD0Jngkpz6uRQZq0OjI/85aTRxbDUOdPIfMq1vc7Da'),
(70, 'Anindita fredelina', '082362650008', 'nindi', '$2y$10$Xw.SP1eE9wfaFG9QDH9JtuZx5j0xVCUuhVpnR4jT1Sodsxk2Beoh.'),
(71, 'Azriel', '081227777101', 'azriel', '$2y$10$wdrSBWjaoAMu8t92rk6e4.zvPnlxafdp89bAtCiWs3f5PXiRFSC.W'),
(72, 'Ajeng', '082175263572', 'ajeng', '$2y$10$nylyWp.9YwaRV154oWcVz.Y/p8sHaWSZfb.UdhlNkcCJEoqWFVhM2'),
(73, 'M rhaditya p arsyad', '08129337576', 'adit', '$2y$10$tPI1d85TriRCVN4Q3a0gOOsme43EtfQRa4ieCTf.7qZu3MlRLnV1S'),
(74, 'Ramadhan zunaidi', '081226887444', 'ramadhan', '$2y$10$iI5PnO3LDP5KKOAYpoWsc.cLJ4I.Es2S9guTZzSuqXziTpHepkZ8O'),
(75, 'Arsyasatya', '085722562336', 'aryasatya', '$2y$10$4rm94pW9aW6jwqBi89BDvuTegDl0js5WT/MDYQMZyuAuKQ5Z1Puyy'),
(76, 'Dian novianti', '081317740311', 'anemaher', '$2y$10$EYvWzn/WkUwRHX3p3yY46OyZQiUVy1E/BylEeK3Kv9sh4RLIGmy9W'),
(77, 'Danish agha aisy hanif', '085745414900 ', 'd@nish2011', '$2y$10$utwutzGSO1/9B5ZZdi6ji.n2cWmVGTod.e/zpXU4VqlsNasQMCz7q'),
(78, 'Matt', '08119871917', 'matteo ', '$2y$10$ksJpLUfgRDM8cYmsBmcMquhG4n9NGzMTS0MDyyMSRky56D4uiGiwG'),
(79, 'Verawati', '082244440416', 'nadhira', '$2y$10$rBFiG.CE/O.0jEPhQiEPOOZD4FPGj2lqjyoUmwjahEsc2Y/bm5tUm'),
(80, 'Nurhidayah', '081214572150', 'ande43', '$2y$10$5JXTpuFLrijmjzEAnRLkQ.uujxixFFgJYtM0EJyPwyuxAGOjq9z.2'),
(81, 'Muhammad Nouval Abdullah', '08126935053', 'opal', '$2y$10$aV4Autlsu1e3.LpJy.mb5OR3Eb6Jl0TugJw/X2IyYQsrFi3PaBbyK'),
(82, 'Nur Faidah', '087875133018', 'nurfaidah', '$2y$10$.gW1fWw/b3ckGEfK0SHaAuoac//p8VrApKKhDC3pjaiqicd0y0R3C'),
(83, 'Astuti', '081271921783', 'astuti', '$2y$10$TeA/Idt80PHWRsRLZ25ec.ZSGtR3YFoWThx.84ru.0ImTQBjvmYLC'),
(84, 'Lidia anggraini', '085782671588', 'jianggra', '$2y$10$DMFc/fP/QVPjNfM0a7D6XeiUgb3t8vNnY/QcEQl7.vU9RjBmDaaPm'),
(85, 'Dsw', '081803165163', 'dsw', '$2y$10$UEAueb7CfZ2QgGwYkb1E6u4iP8KbPI9LYKUIiiMM5BoKQFIYj8LXm'),
(86, 'Ekabudiwahyuni', '085843809551', 'ekka', '$2y$10$qFEKx2fxtU9rDTZsqjobKOO8Jg4SSktFhEnMuERCD3KUoNC7OrKsK'),
(87, 'Hawik Ervina Indiworo', '082136802469', 'indiworo1983', '$2y$10$Ze6J9CTcCBBJ0OQULDVc1.ZXqQzkksgKooHdIPEfNBp4nuEdx3c6O'),
(88, 'Andre', '-', 'andre', '$2y$10$QqT3epYKeTPWx4nLF6mBneaEVDS9glM9w4ATiMl.0/rfuCZzhVM.W'),
(89, 'Fita Purwiyandani', '081226909993', 'pheeta', '$2y$10$ArNeFRryeAJ6X0NN99.M8eIymE7PgfESEw0nLdXdFSP3cIKvNdRp6'),
(90, 'Ani Meilani', '0816721679', 'animei0205', '$2y$10$l5V5xsA98q/KkrJw.65n3ejvlUJbdFWUPM22XK.fH.By8/Mfg4wxe'),
(91, 'Ades', '089652408176', 'ades', '$2y$10$nPrEIumgEjn6FaNu08rDhekfXNW3/NsV/3WN5K0O2XGROYsXhGtaK'),
(92, 'Fera', '087781967559', 'fera', '$2y$10$t/FNWq6/EZ8Yo1hm5mFBFOMDkkQLETd.QoXQ6oYp7FE8SQkYGetsa'),
(93, 'N', '0', 'n', '$2y$10$lV69jcqY/Y.B.vT2IrUeJOGNXRXvs8k1qlYxMYbvat82MoXkOo3cm'),
(94, 'Nola', '-', 'nola', '$2y$10$drdXe0dqCthb.AiFVcXRK.clErGjUKf5MPL0HBYLlJH1/MR.HiKju'),
(95, 'Nama orang tua', '123', 'namaorangtua', '$2y$10$PJEC7ng6GL6O6zTyCy.y3.bVGF.SEVxrt3kC7cWJK5Uq8v4KfSJrC'),
(96, 'Arsyfa', '085769740741', 'arsy', '$2y$10$LRhOacz1CIqLaPZvmbPOfuIixy9sy2VlG/.6VAJM8bndPqcOh/igG'),
(97, 'Teja Ganteng', '08889', 'laskarfpi', '$2y$10$gAI7K1v9elHagyXC5RiSdeapa4YotVaIBYjbKyeLTDFWWNQqR7AJi'),
(98, 'Raehana Djafar', '087841226981', 'raehana', '$2y$10$dvLo54dG2N0vPpZlzkFbNuFmIHIX6H3EUxCgDs1ad5BmYxwDBlr.y'),
(99, 'Siska riawati', '082388583888', 'siska', '$2y$10$FRFp2ZUm/27c8qbT0pIy1eIxse2sCMtAums/wSp05/NnhsCcOH.0q'),
(100, 'Putri', '081235770146', 'putri', '$2y$10$d9gyy23jcmzsOxktUKA74eNaDSrGbWinOA/USLtRqs.vOSgKgESJy'),
(101, 'Dwi septiana', '085784178002', 'anasaeroji', '$2y$10$H0Fj7gCfAKOeW9vvtvIByOmTrhDQKWSqxoDDOa4KTFFXAptrj..lq'),
(102, 'Alan prince', '937373937373', 'alanprince', '$2y$10$kOO43RII36mTURzKGhh58eVhgcC53.GWeaUnStg56Au.SyTZKf/aW'),
(103, 'Suhadi', 'O8883204114', '08883204114', '$2y$10$zlpVHIAzsxxetgx/UgjnMuCjpvkO.OUJbxMwDkCqqB23C0b3qzMRy'),
(104, 'Rianti', '083815088515', 'rianti', '$2y$10$ADbDGO/.x0K.evMJVgdSCOf85aWE035XB/ybmTilkpyC9xld0H/2m'),
(105, 'J', 'J', 'j', '$2y$10$N0Rg1tg0jJlUgQdRtEiVYO2nqRslNOUc7EvKEHx35gfnOY8L8/BV2'),
(106, 'nola', '086775536774', 'nolaaariiss', '$2y$10$cxKTBSe/AIhrllB71YGB5.Fiya7vh.szPW.adlYLwr2Dr5sdYmvvW'),
(107, 'Nurcahyunik Triani Ningrum', '081221876685', 'ayyayy', '$2y$10$B6Q24WjRkRm6VY62hoUbieGY4.EmsoyHTShef3u90j0KjtBEelIgS'),
(108, 'Bagus Ginanjar', '087827413910', 'bagus08', '$2y$10$AUvRqCFaMes3a.JZgDdKiuPJpUG7mOp5ENvXqMygELKks95fIUnEm'),
(109, 'Irna Rusita Damayanti', '081312311360', 'irnard', '$2y$10$XRQY1rEwkJ9J6XZ50w8XK.DBnw54BmqJ8Bg3bOn3Hb48ArC3CpyZm'),
(110, 'pinanas', '089628039439', 'pina', '$2y$10$W7u4w9n02yeo6C9CnW4lOOQaAxw3uWPwGMnjY27L1WX2VhH.p4LI6'),
(111, 'Alcand', '082277273646', 'alca', '$2y$10$ITVfvhZfhR6OixS466PLpuz.08xFRoFyH16u50kH6LfV.hA3FPDxu'),
(112, 'Chika pelangi', '7272829', 'chikapelangi12', '$2y$10$5zFkhTsxEhmP36JqHeU2Quobg/bq/XZcuTjClduejBZSdsBTnHcAa'),
(113, 'Nadia', '087888604888', 'nadia', '$2y$10$ADUGLWZ5YcwGd86xxPlEr.wwXNQhg88dQqmKzHZ6cb.ZpQ2Rtt592'),
(114, 'Lidia anggraini', '085782671588', 'lidya', '$2y$10$YHVaGLRTYpXeP3l5KUJSROfyoTdI5zgBuOrDdisgLGnyqvMkULj7m'),
(115, 'Afif suratman', '082110303549', 'afif', '$2y$10$zjEN0PZ0lBsbHmN7r/Of0eqhXw.P9k8iHvIxubEdp1WBcV25w/o.y'),
(116, 'abc', '123', 'abc', '$2y$10$gQ.iFX523xx7cGJjP0ARj.4NR6j6.fTGgb/g3EnmNHv/EqrRLFjKq'),
(117, 'Jennie', '087896783709', 'jennie', '$2y$10$OVdug/5Mc.Bmhz9E5tBVVuOVJzxDmSrE8Jy.NQYxqNeOYl8pPzcAO'),
(118, 'test 123', '123', 'test 123', '$2y$10$wlIJCtTUTjSyelj/CM70y.KqqoU7Lc0EfBwlfEBttqDM9UGHkLuzy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_answer`
--
ALTER TABLE `activity_answer`
  ADD PRIMARY KEY (`activity_answer_id`);

--
-- Indexes for table `activity_question`
--
ALTER TABLE `activity_question`
  ADD PRIMARY KEY (`activity_question_id`);

--
-- Indexes for table `activity_score`
--
ALTER TABLE `activity_score`
  ADD PRIMARY KEY (`activity_score_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `activity_answer_id` (`activity_answer_id`),
  ADD KEY `attention_answer_id` (`attention_answer_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `attention_answer`
--
ALTER TABLE `attention_answer`
  ADD PRIMARY KEY (`attention_answer_id`);

--
-- Indexes for table `attention_question`
--
ALTER TABLE `attention_question`
  ADD PRIMARY KEY (`attention_question_id`);

--
-- Indexes for table `attention_score`
--
ALTER TABLE `attention_score`
  ADD PRIMARY KEY (`attention_score_id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `activity_question_id` (`activity_question_id`),
  ADD KEY `attention_question_id` (`attention_question_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `report_fk0` (`child_id`),
  ADD KEY `report_fk1` (`score_id`),
  ADD KEY `report_fk2` (`result_id`),
  ADD KEY `report_fk3` (`answer_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `result_fk0` (`child_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `activity_score_id` (`activity_score_id`),
  ADD KEY `attention_score_id` (`attention_score_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_answer`
--
ALTER TABLE `activity_answer`
  MODIFY `activity_answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `activity_question`
--
ALTER TABLE `activity_question`
  MODIFY `activity_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `activity_score`
--
ALTER TABLE `activity_score`
  MODIFY `activity_score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `attention_answer`
--
ALTER TABLE `attention_answer`
  MODIFY `attention_answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `attention_question`
--
ALTER TABLE `attention_question`
  MODIFY `attention_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attention_score`
--
ALTER TABLE `attention_score`
  MODIFY `attention_score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`activity_answer_id`) REFERENCES `activity_answer` (`activity_answer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`attention_answer_id`) REFERENCES `attention_answer` (`attention_answer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_ibfk_3` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`activity_question_id`) REFERENCES `activity_question` (`activity_question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`attention_question_id`) REFERENCES `attention_question` (`attention_question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`score_id`) REFERENCES `score` (`score_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`result_id`) REFERENCES `result` (`result_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_4` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`answer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`activity_score_id`) REFERENCES `activity_score` (`activity_score_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`attention_score_id`) REFERENCES `attention_score` (`attention_score_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `score_ibfk_3` FOREIGN KEY (`child_id`) REFERENCES `child` (`child_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
