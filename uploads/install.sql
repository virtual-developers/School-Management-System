-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2014 at 06:37 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `VDSMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=0 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `level`) VALUES
(1, 'Mr. Admin', 'admin@virtual-developers.com', '1234', '1');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL COMMENT '0 undefined , 1 present , 2  absent',
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name_numeric` longtext COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

DROP TABLE IF EXISTS `class_routine`;
CREATE TABLE IF NOT EXISTS `class_routine` (
  `class_routine_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `time_start` int(11) NOT NULL,
  `time_end` int(11) NOT NULL,
  `day` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`class_routine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Table structure for table `dormitory`
--

DROP TABLE IF EXISTS `dormitory`;
CREATE TABLE IF NOT EXISTS `dormitory` (
  `dormitory_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `number_of_room` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`dormitory_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `grade_point` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mark_from` int(11) NOT NULL,
  `mark_upto` int(11) NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `creation_timestamp` int(11) NOT NULL,
  `payment_timestamp` longtext COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` longtext COLLATE utf8_unicode_ci NOT NULL,
  `payment_details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'paid or unpaid',
  PRIMARY KEY (`invoice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `phrase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`phrase_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=248 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`phrase_id`, `phrase`, `english`) VALUES
(1, 'login', 'login'),
(2, 'account_type', 'account type'),
(3, 'admin', 'admin'),
(4, 'teacher', 'teacher'),
(5, 'student', 'student'),
(6, 'parent', 'parent'),
(7, 'email', 'email'),
(8, 'password', 'password'),
(9, 'forgot_password ?', 'forgot password ?'),
(10, 'reset_password', 'reset password'),
(11, 'reset', 'reset'),
(12, 'admin_dashboard', 'Admin Dashboard'),
(13, 'account', 'account'),
(14, 'profile', 'profile'),
(15, 'change_password', 'change password'),
(16, 'logout', 'logout'),
(17, 'panel', 'panel'),
(18, 'dashboard_help', 'dashboard help'),
(19, 'dashboard', 'dashboard'),
(20, 'student_help', 'student help'),
(21, 'teacher_help', 'teacher help'),
(22, 'subject_help', 'subject help'),
(23, 'subject', 'subject'),
(24, 'class_help', 'class help'),
(25, 'class', 'class'),
(26, 'exam_help', 'exam help'),
(27, 'exam', 'exam'),
(28, 'marks_help', 'marks help'),
(29, 'marks-attendance', 'marks-attendance'),
(30, 'grade_help', 'grade help'),
(31, 'exam-grade', 'exam-grade'),
(32, 'class_routine_help', 'class routine help'),
(33, 'class_routine', 'class routine'),
(34, 'invoice_help', 'invoice help'),
(35, 'payment', 'payment'),
(36, 'book_help', 'book help'),
(37, 'library', 'library'),
(38, 'transport_help', 'transport help'),
(39, 'transport', 'transport'),
(40, 'dormitory_help', 'dormitory help'),
(41, 'dormitory', 'dormitory'),
(42, 'noticeboard_help', 'noticeboard help'),
(43, 'noticeboard-event', 'noticeboard-event'),
(44, 'bed_ward_help', 'bed ward help'),
(45, 'settings', 'settings'),
(46, 'system_settings', 'system settings'),
(47, 'manage_language', 'manage language'),
(48, 'backup_restore', 'backup restore'),
(49, 'profile_help', 'profile help'),
(50, 'manage_student', 'manage student'),
(51, 'manage_teacher', 'Manage Teacher'),
(52, 'noticeboard', 'noticeboard'),
(53, 'language', 'language'),
(54, 'backup', 'backup'),
(55, 'calendar_schedule', 'calendar schedule'),
(56, 'select_a_class', 'select a class'),
(57, 'student_list', 'student list'),
(58, 'add_student', 'add student'),
(59, 'roll', 'roll'),
(60, 'photo', 'photo'),
(61, 'student_name', 'student name'),
(62, 'address', 'address'),
(63, 'options', 'options'),
(64, 'marksheet', 'marksheet'),
(65, 'id_card', 'id card'),
(66, 'edit', 'edit'),
(67, 'delete', 'delete'),
(68, 'personal_profile', 'personal profile'),
(69, 'academic_result', 'academic result'),
(70, 'name', 'name'),
(71, 'birthday', 'birthday'),
(72, 'sex', 'sex'),
(73, 'male', 'male'),
(74, 'female', 'female'),
(75, 'religion', 'religion'),
(76, 'blood_group', 'blood group'),
(77, 'phone', 'phone'),
(78, 'father_name', 'father name'),
(79, 'mother_name', 'mother name'),
(80, 'edit_student', 'edit student'),
(81, 'teacher_list', 'teacher list'),
(82, 'add_teacher', 'add teacher'),
(83, 'teacher_name', 'teacher name'),
(84, 'edit_teacher', 'edit teacher'),
(85, 'manage_parent', 'manage parent'),
(86, 'parent_list', 'parent list'),
(87, 'parent_name', 'parent name'),
(88, 'relation_with_student', 'relation with student'),
(89, 'parent_email', 'parent email'),
(90, 'parent_phone', 'parent phone'),
(91, 'parrent_address', 'parrent address'),
(92, 'parrent_occupation', 'parrent occupation'),
(93, 'add', 'add'),
(94, 'parent_of', 'parent of'),
(95, 'profession', 'profession'),
(96, 'edit_parent', 'edit parent'),
(97, 'add_parent', 'add parent'),
(98, 'manage_subject', 'manage subject'),
(99, 'subject_list', 'subject list'),
(100, 'add_subject', 'add subject'),
(101, 'subject_name', 'subject name'),
(102, 'edit_subject', 'edit subject'),
(103, 'manage_class', 'manage class'),
(104, 'class_list', 'class list'),
(105, 'add_class', 'add class'),
(106, 'class_name', 'class name'),
(107, 'numeric_name', 'numeric name'),
(108, 'name_numeric', 'name numeric'),
(109, 'edit_class', 'edit class'),
(110, 'manage_exam', 'manage exam'),
(111, 'exam_list', 'exam list'),
(112, 'add_exam', 'add exam'),
(113, 'exam_name', 'exam name'),
(114, 'date', 'date'),
(115, 'comment', 'comment'),
(116, 'edit_exam', 'edit exam'),
(117, 'manage_exam_marks', 'manage exam marks'),
(118, 'manage_marks', 'manage marks'),
(119, 'select_exam', 'select exam'),
(120, 'select_class', 'select class'),
(121, 'select_subject', 'select subject'),
(122, 'select_an_exam', 'select an exam'),
(123, 'mark_obtained', 'mark obtained'),
(124, 'attendance', 'attendance'),
(125, 'manage_grade', 'manage grade'),
(126, 'grade_list', 'grade list'),
(127, 'add_grade', 'add grade'),
(128, 'grade_name', 'grade name'),
(129, 'grade_point', 'grade point'),
(130, 'mark_from', 'mark from'),
(131, 'mark_upto', 'mark upto'),
(132, 'edit_grade', 'edit grade'),
(133, 'manage_class_routine', 'manage class routine'),
(134, 'class_routine_list', 'class routine list'),
(135, 'add_class_routine', 'add class routine'),
(136, 'day', 'day'),
(137, 'starting_time', 'starting time'),
(138, 'ending_time', 'ending time'),
(139, 'edit_class_routine', 'edit class routine'),
(140, 'manage_invoice/payment', 'manage invoice/payment'),
(141, 'invoice/payment_list', 'invoice/payment list'),
(142, 'add_invoice/payment', 'add invoice/payment'),
(143, 'title', 'title'),
(144, 'description', 'description'),
(145, 'amount', 'amount'),
(146, 'status', 'status'),
(147, 'view_invoice', 'view invoice'),
(148, 'paid', 'paid'),
(149, 'unpaid', 'unpaid'),
(150, 'add_invoice', 'add invoice'),
(151, 'payment_to', 'payment to'),
(152, 'bill_to', 'bill to'),
(153, 'invoice_title', 'invoice title'),
(154, 'invoice_id', 'invoice id'),
(155, 'edit_invoice', 'edit invoice'),
(156, 'manage_library_books', 'manage library books'),
(157, 'book_list', 'book list'),
(158, 'add_book', 'add book'),
(159, 'book_name', 'book name'),
(160, 'author', 'author'),
(161, 'price', 'price'),
(162, 'available', 'available'),
(163, 'unavailable', 'unavailable'),
(164, 'edit_book', 'edit book'),
(165, 'manage_transport', 'manage transport'),
(166, 'transport_list', 'transport list'),
(167, 'add_transport', 'add transport'),
(168, 'route_name', 'route name'),
(169, 'number_of_vehicle', 'number of vehicle'),
(170, 'route_fare', 'route fare'),
(171, 'edit_transport', 'edit transport'),
(172, 'manage_dormitory', 'manage dormitory'),
(173, 'dormitory_list', 'dormitory list'),
(174, 'add_dormitory', 'add dormitory'),
(175, 'dormitory_name', 'dormitory name'),
(176, 'number_of_room', 'number of room'),
(177, 'manage_noticeboard', 'manage noticeboard'),
(178, 'noticeboard_list', 'noticeboard list'),
(179, 'add_noticeboard', 'add noticeboard'),
(180, 'notice', 'notice'),
(181, 'add_notice', 'add notice'),
(182, 'edit_noticeboard', 'edit noticeboard'),
(183, 'system_name', 'system name'),
(184, 'save', 'save'),
(185, 'system_title', 'system title'),
(186, 'paypal_email', 'paypal email'),
(187, 'currency', 'currency'),
(188, 'phrase_list', 'phrase list'),
(189, 'add_phrase', 'add phrase'),
(190, 'add_language', 'add language'),
(191, 'phrase', 'phrase'),
(192, 'manage_backup_restore', 'manage backup restore'),
(193, 'restore', 'restore'),
(194, 'mark', 'mark'),
(195, 'grade', 'grade'),
(196, 'invoice', 'invoice'),
(197, 'book', 'book'),
(198, 'all', 'all'),
(199, 'upload_&_restore_from_backup', 'upload & restore from backup'),
(200, 'manage_profile', 'manage profile'),
(201, 'update_profile', 'update profile'),
(202, 'new_password', 'new password'),
(203, 'confirm_new_password', 'confirm new password'),
(204, 'update_password', 'update password'),
(205, 'teacher_dashboard', 'teacher dashboard'),
(206, 'backup_restore_help', 'backup restore help'),
(207, 'student_dashboard', 'student dashboard'),
(208, 'parent_dashboard', 'parent dashboard'),
(209, 'view_marks', 'view marks'),
(210, 'delete_language', 'delete language'),
(211, 'settings_updated', 'settings updated'),
(212, 'update_phrase', 'update phrase'),
(213, 'login_failed', 'login failed'),
(214, 'live_chat', 'live chat'),
(215, 'client 1', 'client 1'),
(216, 'buyer', 'buyer'),
(217, 'purchase_code', 'purchase code'),
(218, 'system_email', 'system email'),
(219, 'option', 'option'),
(220, 'edit_phrase', 'edit phrase'),
(221, 'marks', ''),
(222, 'message', ''),
(223, 'manage_message', ''),
(224, '0', ''),
(225, '0', ''),
(226, 'notice_updated', ''),
(227, 'payment_cancelled', ''),
(228, '0', ''),
(229, '0', ''),
(230, 'payment_successfull', ''),
(231, 'admit_student', ''),
(232, 'student_information', ''),
(233, 'student_marksheet', ''),
(234, 'daily_attendance', ''),
(235, 'exam_grades', ''),
(236, 'general_settings', ''),
(237, 'language_settings', ''),
(238, 'edit_profile', ''),
(239, 'event_schedule', ''),
(240, 'cancel', ''),
(241, 'addmission_form', ''),
(242, 'value_required', ''),
(243, 'select', ''),
(244, 'gender', ''),
(245, 'add_new_student', ''),
(246, 'language_list', ''),
(247, 'text_align', '');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `mark_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mark_obtained` int(11) NOT NULL DEFAULT '0',
  `mark_total` int(11) NOT NULL DEFAULT '100',
  `attendance` int(11) NOT NULL DEFAULT '0',
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mark_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Table structure for table `noticeboard`
--

DROP TABLE IF EXISTS `noticeboard`;
CREATE TABLE IF NOT EXISTS `noticeboard` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_timestamp` int(11) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `relation_with_student` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profession` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `transaction_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `method` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Virtual-Developers School Management System Pro'),
(2, 'system_title', 'VD School'),
(3, 'address', 'Karachi, Pakistan'),
(4, 'phone', '+923452087084'),
(5, 'paypal_email', 'payment@school.com'),
(6, 'currency', 'usd'),
(7, 'system_email', 'admin@virtual-developers.com'),
(8, 'buyer', ''),
(9, 'purchase_code', ''),
(11, 'language', 'english'),
(12, 'text_align', 'left-to-right');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `father_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `roll` longtext COLLATE utf8_unicode_ci NOT NULL,
  `transport_id` int(11) NOT NULL,
  `dormitory_id` int(11) NOT NULL,
  `dormitory_room_number` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE IF NOT EXISTS `transport` (
  `transport_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `number_of_vehicle` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `route_fare` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`transport_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
