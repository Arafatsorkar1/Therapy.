-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 10:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newtherapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_orders`
--

CREATE TABLE `all_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_type` enum('traning','assessment','test','therapy','service','free_service','donate') DEFAULT NULL,
  `order_type_id` bigint(20) DEFAULT NULL,
  `order_id` varchar(255) NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_mark` int(11) NOT NULL DEFAULT 0,
  `pay_balance` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `sended_number` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `message` longtext DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_orders`
--

INSERT INTO `all_orders` (`id`, `order_type`, `order_type_id`, `order_id`, `users_id`, `total_mark`, `pay_balance`, `payment_method`, `sended_number`, `transaction_id`, `image`, `message`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(1, 'test', 1, 'Th-c4JtI', 5, 0, 1000, 'rocket', '09234321232', 'weddedf123', 'images/default.jpg', 'Test Message', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:35:41', '2023-05-03 00:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `mark` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `users_id`, `categories_id`, `sub_categories_id`, `name`, `slug`, `mark`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 1, 'না', NULL, 0, 1, '2023-05-03 00:23:54', '2023-05-03 00:25:49'),
(2, 4, 4, 1, 'প্রায়', NULL, 2, 1, '2023-05-03 00:24:33', '2023-05-03 00:25:40'),
(3, 4, 4, 1, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 00:24:49', '2023-05-03 00:26:43'),
(4, 4, 4, 1, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 00:26:36', '2023-05-03 00:26:36'),
(5, 4, 7, 2, 'না', NULL, 0, 1, '2023-05-03 01:16:29', '2023-05-03 01:16:29'),
(6, 4, 7, 2, 'প্রায়', NULL, 2, 1, '2023-05-03 01:17:02', '2023-05-03 01:17:02'),
(7, 4, 7, 2, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 01:17:27', '2023-05-03 01:17:27'),
(8, 4, 7, 2, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 01:17:50', '2023-05-03 01:17:50'),
(9, 4, 12, 3, 'না', NULL, 0, 1, '2023-05-03 01:42:55', '2023-05-03 01:42:55'),
(10, 4, 12, 3, 'প্রায়', NULL, 2, 1, '2023-05-03 01:43:27', '2023-05-03 01:43:27'),
(11, 4, 12, 3, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 01:44:02', '2023-05-03 01:44:02'),
(12, 4, 12, 3, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 01:44:24', '2023-05-03 01:44:24'),
(13, 4, 4, 4, 'না', NULL, 0, 1, '2023-05-03 02:07:07', '2023-05-03 02:07:07'),
(14, 4, 4, 4, 'প্রায়', NULL, 2, 1, '2023-05-03 02:07:30', '2023-05-03 02:07:30'),
(15, 4, 4, 4, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 02:07:50', '2023-05-03 02:07:50'),
(16, 4, 4, 4, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 02:08:09', '2023-05-03 02:08:09'),
(17, 4, 4, 5, 'না', NULL, 0, 1, '2023-05-03 03:07:00', '2023-05-03 03:07:00'),
(18, 4, 4, 5, 'প্রায়', NULL, 2, 1, '2023-05-03 03:07:16', '2023-05-03 03:07:16'),
(19, 4, 4, 5, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 03:07:33', '2023-05-03 03:07:33'),
(20, 4, 4, 5, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 03:07:49', '2023-05-03 03:07:49'),
(21, 4, 6, 6, 'না', NULL, 0, 1, '2023-05-03 04:27:22', '2023-05-03 04:27:22'),
(22, 4, 6, 6, 'প্রায়', NULL, 2, 1, '2023-05-03 04:27:37', '2023-05-03 04:27:37'),
(23, 4, 6, 6, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 04:27:53', '2023-05-03 04:27:53'),
(24, 4, 6, 6, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 04:28:10', '2023-05-03 04:28:10'),
(25, 4, 6, 7, 'না', NULL, 0, 1, '2023-05-03 04:30:37', '2023-05-03 04:30:37'),
(26, 4, 6, 7, 'প্রায়', NULL, 2, 1, '2023-05-03 04:30:56', '2023-05-03 04:30:56'),
(27, 4, 6, 7, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 04:31:12', '2023-05-03 04:31:12'),
(28, 4, 6, 7, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 04:31:46', '2023-05-03 04:31:46'),
(29, 4, 6, 8, 'না', NULL, 0, 1, '2023-05-03 04:34:03', '2023-05-03 04:34:03'),
(30, 4, 6, 8, 'প্রায়', NULL, 2, 1, '2023-05-03 04:34:20', '2023-05-03 04:34:20'),
(31, 4, 6, 8, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 04:34:37', '2023-05-03 04:35:02'),
(32, 4, 6, 8, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 04:35:18', '2023-05-03 04:35:18'),
(33, 4, 6, 9, 'না', NULL, 0, 1, '2023-05-03 04:39:26', '2023-05-03 04:39:26'),
(34, 4, 6, 9, 'প্রায়', NULL, 2, 1, '2023-05-03 04:39:40', '2023-05-03 04:39:40'),
(35, 4, 6, 9, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 04:40:02', '2023-05-03 04:40:02'),
(36, 4, 6, 9, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 04:40:21', '2023-05-03 04:40:21'),
(37, 4, 6, 10, 'না', NULL, 0, 1, '2023-05-03 04:45:32', '2023-05-03 04:45:32'),
(38, 4, 6, 10, 'প্রায়', NULL, 2, 1, '2023-05-03 04:45:56', '2023-05-03 04:45:56'),
(39, 4, 6, 10, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 04:46:18', '2023-05-03 04:46:18'),
(40, 4, 6, 10, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 04:46:36', '2023-05-03 04:46:36'),
(41, 4, 6, 11, 'না', NULL, 0, 1, '2023-05-03 04:49:11', '2023-05-03 04:49:11'),
(42, 4, 6, 11, 'প্রায়', NULL, 2, 1, '2023-05-03 04:49:31', '2023-05-03 04:49:31'),
(43, 4, 6, 11, 'হ্যাঁ', NULL, 4, 1, '2023-05-03 04:49:54', '2023-05-03 04:49:54'),
(44, 4, 6, 11, 'মাঝে মধ্যে', NULL, 3, 1, '2023-05-03 04:50:11', '2023-05-03 04:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `assessment_orders`
--

CREATE TABLE `assessment_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `total_mark` int(11) NOT NULL DEFAULT 0,
  `pay_balance` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `sended_number` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `message` longtext DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home_page_title', 'THERAPY LAB LTD', NULL, NULL),
(2, 'home_page_sub_title', 'Perfect Therapeutic Medicine', NULL, NULL),
(3, 'hero_description', 'Speech & Language Therapy\r\nOccupational Therapy\r\nGroup Therapy', NULL, '2023-05-03 04:22:46'),
(4, 'hero_link', 'http://therapylabonline.com/', '2023-05-03 04:12:49', '2023-05-03 04:12:49'),
(5, 'hero_image', 'images/6fpm78Pyh3YJxxmechJ6havyKjK0uP5R5SUXyKKl.png', '2023-05-03 04:13:07', '2023-05-03 04:21:53'),
(6, 'about_image', 'images/8pdMCkiBMJlL6fULYLHU8QiaCcfC2av4iNAwg33i.jpg', '2023-05-03 04:13:22', '2023-05-03 04:13:22'),
(7, 'about_title', 'ABOUT US (আমাদের সম্পর্কে)', '2023-05-03 04:13:50', '2023-05-03 04:13:50'),
(8, 'about_description', 'THERAPY LAB LTD. Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.\r\n\r\nTHERAPY LAB LTD. Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.', '2023-05-03 04:13:50', '2023-05-03 04:13:50'),
(9, 'about_link', 'https://therapylabonline.com/about-us', '2023-05-03 04:13:50', '2023-05-03 04:13:50'),
(10, 'website_name', 'Therapylabonline', '2023-05-03 04:14:04', '2023-05-03 04:14:04'),
(11, 'website_icon', 'images/tS7DEsuRR5LfjSrEJcApPu2IKdOUkd7z0ViyrlsZ.png', '2023-05-03 04:14:10', '2023-05-03 04:14:10'),
(12, 'website_logo', 'images/ZPn2zCAbqpsMi5tT6pqJlSUuQUFLX20ohE89PvcW.png', '2023-05-03 04:14:15', '2023-05-03 04:14:15'),
(13, 'donner_content', '<p>We need your help to keep providing&nbsp;life-saving&nbsp;blood&nbsp;to the NHS this spring.</p><p>You can help in different ways depending on your blood type:</p><h3>O negative or B negative</h3><p>Please <a href=\"https://my.blood.co.uk/your-account/login\">book an appointment</a> to donate as soon as possible.</p><p>We need more of your blood type at moment.</p><h3>A negative</h3><p>We urgently need people with your blood type to start donating platelets.</p><p>Platelets help to stop bleeding and can be a lifeline for people with cancer.</p><p><a href=\"https://platelets.blood.co.uk/\">Find out more about platelet donation</a>.</p><h3>All other blood types</h3><p>You can still help by booking an appointment in the weeks and months ahead - your donation will be just as valuable then.</p><p>Log in&nbsp;to see available appointments in your area</p><p>&nbsp;</p><h2><strong>Requirements by Donation Type</strong></h2><p>To ensure the safety of both patients and donors, these are some of the requirements donors must meet to be eligible to donate blood based on their donation type. To explore a list of eligibility information,&nbsp;<a href=\"https://www.redcrossblood.org/faq.html#eligibility\">Search by Keyword</a>&nbsp;or <a href=\"https://www.redcrossblood.org/donate-blood/how-to-donate/eligibility-requirements/eligibility-criteria-alphabetical.html\">Browse All</a>.&nbsp;</p><p><img src=\"https://www.redcrossblood.org/content/dam/redcrossblood/rcb/donate-blood/components/donation-type-whole-blood.jpg.transform/1288/q82/feature/image.jpeg\" alt=\"Whole Blood Donation Requirements\" srcset=\"/content/dam/redcrossblood/rcb/donate-blood/components/donation-type-whole-blood.jpg.transform/718/q70/feature/image.jpeg 718w,\r\n                       /content/dam/redcrossblood/rcb/donate-blood/components/donation-type-whole-blood.jpg.transform/964/q82/feature/image.jpeg 964w,\r\n                       /content/dam/redcrossblood/rcb/donate-blood/components/donation-type-whole-blood.jpg.transform/1288/q82/feature/image.jpeg 1288w\" sizes=\"100vw\"></p><p><strong>Whole Blood Donation</strong></p><ul><li>Donation frequency:&nbsp;Every 56 days, up to 6 times a year*<br>&nbsp;</li><li>You must be in good health and feeling well**</li><li>You must be at least 16 years old in most states</li><li>You must weigh at least 110 lbs</li></ul><p><a href=\"https://www.redcrossblood.org/donate-blood/how-to-donate/info-for-student-donors.html\">See additional requirements for students&nbsp;&gt;&gt;</a><br>&nbsp;</p><p><a href=\"https://www.redcrossblood.org/donate-blood/how-to-donate/types-of-blood-donations/whole-blood-donation.html\">Learn more about donating whole blood&nbsp;&gt;&gt;</a></p>', '2023-05-03 04:16:27', '2023-05-03 04:16:27'),
(14, 'footer_about', 'Therapy Lab provides medical treatment, rehabilitation and support services focusing on physical, emotional, social, psychological and economic aspects. It promotes the development of skilled personnel in health care and rehabilitation in the country', '2023-05-03 04:18:59', '2023-05-03 04:18:59'),
(15, 'location', 'বাসা- ২৫৭ .রোড-৮ আমতলা কাঁচাবাজার,সেনপাড়া পর্বতা ঈদগাঁ মাঠ ও বায়তুল কারার মসজিদের সামনে মিরপুর ১০,ঢাকা ১২১৬।', '2023-05-03 04:18:59', '2023-05-03 04:18:59'),
(16, 'contact_number', '01762-030500', '2023-05-03 04:18:59', '2023-05-03 04:18:59'),
(17, 'contract_email', 'info@therapylabonline.com', '2023-05-03 04:18:59', '2023-05-03 04:18:59'),
(18, 'facebook_link', 'http://therapylabonline.com/', '2023-05-03 04:19:39', '2023-05-03 04:19:39'),
(19, 'youtube_link', 'https://therapylabonline.com/', '2023-05-03 04:19:39', '2023-05-03 04:19:39'),
(20, 'instagram_link', 'https://therapylabonline.com/', '2023-05-03 04:19:39', '2023-05-03 04:19:39'),
(21, 'twitter_link', 'https://therapylabonline.com/', '2023-05-03 04:19:39', '2023-05-03 04:19:39'),
(22, 'newsletter_description', 'Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et', '2023-05-03 04:19:50', '2023-05-03 04:19:50'),
(23, 'contract_map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.325534232814!2d90.36137521744385!3d23.807020499999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c105f81691d5%3A0x4aa9bd97de918f7b!2sSher-E-Bangla%20National%20Cricket%20Stadium!5e0!3m2!1sen!2sbd!4v1683107443852!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-05-03 04:21:03', '2023-05-03 04:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `users_id`, `name`, `slug`, `image`, `short_description`, `description`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(1, 4, 'Stammering Assessment বা তোতলামির তীব্রতার মাত্রা নির্ণয় চেকলিস্ট।', 'stammering-assessment-ba-totlamir-teebrtar-matra-nirny-ceklist', NULL, NULL, NULL, 1, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:14:00', '2023-05-03 00:14:00'),
(2, 4, 'Dementia Assessment ডিমেনশিয়ার তীব্রতার মাত্রা নির্ণয় চেকলিস্ট।', 'dementia-assessment-dimenshiyar-teebrtar-matra-nirny-ceklist', NULL, NULL, NULL, 2, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:14:37', '2023-05-03 00:14:37'),
(3, 4, 'Child Development Assessment বা শিশুর স্বাভাবিক বিকাশের মাত্রা নির্ণয় চেকলিস্ট', 'child-development-assessment-ba-sisur-swavabik-bikaser-matra-nirny-ceklist', NULL, NULL, NULL, 3, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:16:17', '2023-05-03 00:16:17'),
(4, 4, 'Voice Test/ Assessment বা কন্ঠস্বরের সমস্যার তীব্রতার মাত্রা নির্ণয় চেকলিস্ট।', 'voice-test-assessment-ba-knthswrer-smszar-teebrtar-matra-nirny-ceklist', NULL, NULL, NULL, 4, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:18:48', '2023-05-03 00:18:48'),
(5, 4, 'Child Neuro development (ASD/ADHD/DS/ID/CP) Assessment বা শিশুর অটিজম এবং স্নায়ুবিক বিকাশ বৈকল্যের মাত্রা নির্ণয় চেকলিস্ট।', 'child-neuro-development-asdadhddsidcp-assessment-ba-sisur-otijm-ebng-snayubik-bikas-boiklzer-matra-nirny-ceklist', NULL, NULL, NULL, 5, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:40:28', '2023-05-03 00:40:28'),
(6, 4, 'Social or Pragmatics Skill Assessment বা ভাষার উচ্চতর ব্যবহার এবং সামাজিক আচরণ বৈকল্যের তীব্রতার মাত্রা নির্ণয় চেকলিস্ট।', 'social-or-pragmatics-skill-assessment-ba-vashar-ucctr-bzbhar-ebng-samajik-acrn-boiklzer-teebrtar-matra-nirny-ceklist', NULL, NULL, NULL, 6, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:40:46', '2023-05-03 00:40:46'),
(7, 4, 'After Strake SLT Assessment বা স্ট্রোকের পরে যোগাযোগ বৈকল্যের মাত্রা নির্ণয় চেকলিস্ট।', 'after-strake-slt-assessment-ba-stroker-pre-zogazog-boiklzer-matra-nirny-ceklist', NULL, NULL, NULL, 7, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:41:01', '2023-05-03 00:41:01'),
(8, 4, 'Acquired Neurocognitive(TBI/Parkinson\'s/Alzheimer\'s/Motor Neuron)Disorder Assessment বা বয়স্কদের স্নায়ুবিক বুদ্ধিবৃত্তিয় বৈকল্যের তীব্রতার মাত্রা নির্ণয় চেকলিস্ট।', 'acquired-neurocognitivetbiparkinsonsalzheimersmotor-neurondisorder-assessment-ba-byskder-snayubik-buddhibrrittiy-boiklzer-teebrtar-matra-nirny-ceklist', NULL, NULL, NULL, 8, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:41:20', '2023-05-03 00:41:20'),
(9, 4, 'Learning Disorder Assessment বা শিখন বৈকল্যের তীব্রর মাত্রা নির্ণয় চেকলিস্ট।', 'learning-disorder-assessment-ba-sikhn-boiklzer-teebrr-matra-nirny-ceklist', NULL, NULL, NULL, 9, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:41:44', '2023-05-03 00:41:44'),
(10, 4, 'Articulation/Phonological Assessment বা উচ্চারণ বৈকল্যের তীব্রতার মাত্রা নির্ণয় চেকলিস্ট।', 'articulationphonological-assessment-ba-uccarn-boiklzer-teebrtar-matra-nirny-ceklist', NULL, NULL, NULL, 10, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:42:02', '2023-05-03 00:42:02'),
(11, 4, 'Preverbal skills Assessment বা প্রাক-বাচনিক বৈকল্যের তীব্রতার মাত্রা নির্ণয় চেকলিস্ট।', 'preverbal-skills-assessment-ba-prak-bacnik-boiklzer-teebrtar-matra-nirny-ceklist', NULL, NULL, NULL, 11, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:42:29', '2023-05-03 00:42:29'),
(12, 4, 'Play Skills Assessment শিশুর খেলাধুলার দক্ষতার বিকাশ নির্ণয় চেকলিস্ট', 'play-skills-assessment-sisur-kheladhular-dkshtar-bikas-nirny-ceklist', NULL, NULL, NULL, 12, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:42:49', '2023-05-03 00:42:49'),
(13, 4, 'Child Health and Perceptual Ability Assessment checklist (শিশুর স্ব্যাস্থ এবং উপলব্ধিমূলক দক্ষতা নির্ণয় চেকলিস্ট)', 'child-health-and-perceptual-ability-assessment-checklist-sisur-swzasth-ebng-uplbdhimuulk-dkshta-nirny-ceklist', NULL, NULL, NULL, 13, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:43:08', '2023-05-03 00:43:08'),
(14, 4, 'Oral Pharyngeal Motor ability and Sensory characteristics Assessment', 'oral-pharyngeal-motor-ability-and-sensory-characteristics-assessment', NULL, NULL, NULL, 14, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:43:27', '2023-05-03 00:43:27'),
(15, 4, 'Eating Drinking and Swallowing characteristics Assessment', 'eating-drinking-and-swallowing-characteristics-assessment', NULL, NULL, NULL, 15, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:43:43', '2023-05-03 00:43:43'),
(16, 4, 'Speech and Language Components Assessment', 'speech-and-language-components-assessment', NULL, NULL, NULL, 16, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:44:02', '2023-05-03 00:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `donners`
--

CREATE TABLE `donners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT '017 *** *** **',
  `email` varchar(255) NOT NULL DEFAULT 'example@example.com',
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'images/default.jpg',
  `donate_date` date DEFAULT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donners`
--

INSERT INTO `donners` (`id`, `users_id`, `name`, `slug`, `phone`, `email`, `short_description`, `description`, `image`, `donate_date`, `hospital_name`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(1, 1, 'Donner 1', '', '01758521451', 'example@example.com', '11.3.5 The ENUM Type\r\nAn ENUM is a string object with a value chosen from a list of permitted values that are enumerated explicitly in the column specification at table creation time.\r\n\r\nSee Section 11.3.1, “String Data Type Syntax” for ENUM type syntax and length limits.\r\n\r\nThe ENUM type has these advantages:\r\n\r\nCompact data storage in situations where a column has a limited set of possible values. The strings you specify as input values are automatically encoded as numbers. See Section 11.7, “Data Type Storage Requirements” for storage requirements for the ENUM type.\r\n\r\nReadable queries and output. The numbers are translated back to the corresponding strings in query results.\r\n\r\nand these potential issues to consider:\r\n\r\nIf you make enumeration values that look like numbers, it is easy to mix up the literal values with their internal index numbers, as explained in Enumeration Limitations.\r\n\r\nUsing ENUM columns in ORDER BY clauses requires extra care, as explained in Enumeration Sorting.', NULL, 'images/jr9QX071U20QdfdAYzBcSTyiGDXol6XAhGQDnyEo.jpg', '2023-05-04', NULL, NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-02 05:58:40', '2023-05-02 05:58:40'),
(2, 5, NULL, '', NULL, 'example@example.com', '<p>EEE</p>', NULL, 'images/9vKZwt0UayjqYxHUCsthLdbdD88E2sHSY5SHz2pv.jpg', '2023-05-11', NULL, NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-07 23:54:17', '2023-05-09 01:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `free_services`
--

CREATE TABLE `free_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `c_unique_id` varchar(255) DEFAULT NULL,
  `admission_date` varchar(255) DEFAULT NULL,
  `contract_no` varchar(255) DEFAULT NULL,
  `profesion` text DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_contract` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_contract` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `guardian_contract` varchar(255) DEFAULT NULL,
  `address_cont_no` text DEFAULT NULL,
  `b_diagnosis` text DEFAULT NULL,
  `c_type_of_disability` text DEFAULT NULL,
  `d_major_complain` text DEFAULT NULL,
  `e_major_complain` text DEFAULT NULL,
  `general_history` text DEFAULT NULL,
  `family_history` varchar(255) DEFAULT NULL,
  `home_environment` varchar(255) DEFAULT NULL,
  `1st_cousin_marriage` varchar(255) DEFAULT NULL,
  `educational_qualification_of_parents` varchar(255) DEFAULT NULL,
  `no_children` varchar(255) DEFAULT NULL,
  `mother_health_condition` varchar(255) DEFAULT NULL,
  `immunization_mother` varchar(255) DEFAULT NULL,
  `immunization_up_to_date_child` varchar(255) DEFAULT NULL,
  `previous_treatment_history` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `message` longtext DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language_categories`
--

CREATE TABLE `language_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language_therapies`
--

CREATE TABLE `language_therapies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `language_categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'images/default.jpg',
  `price` int(11) NOT NULL DEFAULT 1000,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_28_103508_create_categories_table', 1),
(6, '2023_03_02_065100_create_traning_categories_table', 1),
(7, '2023_03_02_065148_create_tranings_table', 1),
(8, '2023_03_04_154254_create_traning_orders_table', 1),
(9, '2023_03_16_101334_create_sub_categories_table', 1),
(10, '2023_03_16_131618_create_questions_table', 1),
(11, '2023_03_18_074042_create_answers_table', 1),
(12, '2023_03_18_080510_create_business_settings_table', 1),
(13, '2023_03_19_080538_create_user_assessments_table', 1),
(14, '2023_03_19_090010_create_subscribers_table', 1),
(15, '2023_03_21_191625_create_assessment_orders_table', 1),
(16, '2023_03_21_200638_create_services_table', 1),
(17, '2023_03_21_203003_create_tests_table', 1),
(18, '2023_04_26_064149_create_reports_table', 1),
(19, '2023_04_27_101358_create_language_categories_table', 1),
(20, '2023_04_28_114515_create_language_therapies_table', 1),
(21, '2023_04_30_183839_create_donners_table', 1),
(22, '2023_04_30_185214_create_all_orders_table', 1),
(23, '2023_05_01_110348_create_free_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `users_id`, `categories_id`, `sub_categories_id`, `title`, `slug`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 1, 'প্রশ্ন- ১ : আপনার কথা বুঝতে অন্যদের সমস্যা হয় ?', 'prsn-1-apnar-ktha-bujhte-onzder-smsza-hy', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:27:42', '2023-05-03 00:27:42'),
(2, 4, 4, 1, 'প্রশ্ন- ২ : বলার সময় মুখ থেকে শুধু বাতাস বের হয়, কিন্তু কথা বের হয়না এমন হয় ?', 'prsn-2-blar-smy-mukh-theke-sudhu-batas-ber-hy-kintu-ktha-ber-hyna-emn-hy', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:28:01', '2023-05-03 00:28:01'),
(3, 4, 4, 1, 'প্রশ্ন- ৩ : কোলাহলপূর্ণ পরিবেশে আপনার কথা বুঝতে অন্যদের সমস্যা হয় তাই না বলে এড়িয়ে যান ?', 'prsn-3-kolahlpuurn-pribese-apnar-ktha-bujhte-onzder-smsza-hy-tai-na-ble-eriye-zan', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:28:22', '2023-05-03 00:28:22'),
(4, 4, 4, 1, 'প্রশ্ন- ৪ : দিনের প্রহর বা সময়ের সাথে সাথে কণ্ঠস্বরের পরিবর্তন হয় ? যেমন - সকালে ভালো রাতে খারাপের দিকে যাচ্ছে, এমন ?', 'prsn-4-diner-prhr-ba-smyer-sathe-sathe-knthswrer-pribrtn-hy-zemn-skale-valo-rate-kharaper-dike-zacche-emn', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:47:28', '2023-05-03 00:47:28'),
(5, 4, 4, 1, 'প্রশ্ন- ৫ : পরিবারের লোকজন আপনার কথা শুনে বুঝতে পারেনা, এমন বলে কি ?', 'prsn-5-pribarer-lokjn-apnar-ktha-sune-bujhte-parena-emn-ble-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:47:55', '2023-05-03 00:47:55'),
(6, 4, 4, 1, 'প্রশ্ন- ৬ : কণ্ঠস্বরের এই অবস্থানের জন্য অপরিচিত কারো সাথে মৌখিক যোগাযোগে দ্বিধায় পারেন ?', 'prsn-6-knthswrer-ei-obsthaner-jnz-opricit-karo-sathe-moukhik-zogazoge-dwidhay-paren', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:48:10', '2023-05-03 00:48:10'),
(7, 4, 4, 1, 'প্রশ্ন- ৭ : কথা বলার সমস্যার জন্য ফোনে কম কথা বলেন ?', 'prsn-7-ktha-blar-smszar-jnz-fone-km-ktha-blen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:48:25', '2023-05-03 00:48:25'),
(8, 4, 4, 1, 'প্রশ্ন- ৮ : কণ্ঠস্বরের সমস্যার জন্য নতুন পরিবেশে অন্যদের কি এড়িয়ে চলেন ?', 'prsn-8-knthswrer-smszar-jnz-ntun-pribese-onzder-ki-eriye-clen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:48:39', '2023-05-03 00:48:39'),
(9, 4, 4, 1, 'প্রশ্ন- ৯ : আপনার কথা/কণ্ঠ শুনে কি অন্যরা বিরক্তি প্রকাশ করে ?', 'prsn-9-apnar-kthaknth-sune-ki-onzra-birkti-prkas-kre', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:48:53', '2023-05-03 00:48:53'),
(10, 4, 4, 1, 'প্রশ্ন- ১০ : আপনার কথা/কণ্ঠস্বরের সমস্যার জন্য অন্যরা কি আপনাকে বারবার প্রশ্ন করে বিরক্ত করে ?', 'prsn-10-apnar-kthaknthswrer-smszar-jnz-onzra-ki-apnake-barbar-prsn-kre-birkt-kre', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:49:09', '2023-05-03 00:49:09'),
(11, 4, 4, 1, 'প্রশ্ন- ১১ : আপনার কথা/কণ্ঠস্বরের সমস্যার জন্য বন্ধু, আত্মীয়-স্বজন, প্রতিবেশী তাদের সাথে খুব কম কথা বলেন কি ?', 'prsn-11-apnar-kthaknthswrer-smszar-jnz-bndhu-atmeey-swjn-prtibesee-tader-sathe-khub-km-ktha-blen-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:49:22', '2023-05-03 00:49:22'),
(12, 4, 4, 1, 'প্রশ্ন- ১২ : কথা বুঝতে না পেরে অন্যরা উপহাস মূলক পুনরাবৃত্তি/অনুকরণ করে/ প্রশ্ন করে কি ?', 'prsn-12-ktha-bujhte-na-pere-onzra-uphas-muulk-punrabrrittionukrn-kre-prsn-kre-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:49:40', '2023-05-03 00:49:40'),
(13, 4, 4, 1, 'প্রশ্ন- ১৩ : কথা বলার সময় আপনার কণ্ঠস্বর কি ভাঙ্গা এবং শুষ্ক মনে হেয় ?', 'prsn-13-ktha-blar-smy-apnar-knthswr-ki-vangoa-ebng-sushk-mne-hey', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:49:57', '2023-05-03 00:49:57'),
(14, 4, 4, 1, 'প্রশ্ন- ১৪ : কথা বলার সময় কণ্ঠস্বর কি বসে যায় বা জড়িয়ে আসে ?', 'prsn-14-ktha-blar-smy-knthswr-ki-bse-zay-ba-jriye-ase', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:50:10', '2023-05-03 00:50:10'),
(15, 4, 4, 1, 'প্রশ্ন- ১৫ : আপনার কণ্ঠস্বরের সমস্যার কথা অন্যদের কে বুঝিয়ে বলতে বিরক্ত বা কষ্ট লাগে ?', 'prsn-15-apnar-knthswrer-smszar-ktha-onzder-ke-bujhiye-blte-birkt-ba-ksht-lage', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:50:26', '2023-05-03 00:50:26'),
(16, 4, 4, 1, 'প্রশ্ন- ১৬ : আপনার কণ্ঠস্বরের ব্যক্তিগত জীবন ও পারিবারিক ও সামাজিক জীবন যাপনে সমস্যা সৃষ্টি করে ?', 'prsn-16-apnar-knthswrer-bzktigt-jeebn-oo-paribarik-oo-samajik-jeebn-zapne-smsza-srrishti-kre', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:50:39', '2023-05-03 00:50:39'),
(17, 4, 4, 1, 'প্রশ্ন- ১৭ : আপনার কণ্ঠস্বরের স্পষ্টতা/স্বচ্ছতা অনাকাঙ্ষিত বা অপত্যাশিত এটা আপনার কোন দোষ নয়, এমন কি মনে হয় ?', 'prsn-17-apnar-knthswrer-spshttaswcchta-onakangxit-ba-optzasit-eta-apnar-kon-dosh-ny-emn-ki-mne-hy', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:50:52', '2023-05-03 00:50:52'),
(18, 4, 4, 1, 'প্রশ্ন- ১৮ : আপনি কণ্ঠস্বর পরিবর্তনের জন্য বিভিন্ন ধরণের জন্য অন্য কোনো উপায়ে স্পষ্টভাবে বলার চেষ্টা করেন কি ?', 'prsn-18-apni-knthswr-pribrtner-jnz-bivinn-dhrner-jnz-onz-kono-upaye-spshtvabe-blar-ceshta-kren-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:51:04', '2023-05-03 00:51:04'),
(19, 4, 4, 1, 'প্রশ্ন- ১৯ : কথার অস্পষ্টতার জন্য আপনার কথা বলা সম্পূর্ণ হয়নি কিংবা অপূর্ণতার জন্য মন খারাপ হয় কি ?', 'prsn-19-kthar-ospshttar-jnz-apnar-ktha-bla-smpuurn-hyni-kingba-opuurntar-jnz-mn-kharap-hy-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:51:27', '2023-05-03 00:51:27'),
(20, 4, 4, 1, 'প্রশ্ন- ২০ : আপনি স্পষ্ট কথা বলার জন্য প্রচেষ্টার কোনো ত্রুটি/ঘাটতি রাখেননি এমন কি ?', 'prsn-20-apni-spsht-ktha-blar-jnz-prceshtar-kono-trutighatti-rakhenni-emn-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:52:02', '2023-05-03 00:52:02'),
(21, 4, 4, 1, 'প্রশ্ন- ২১ : বেশি পরিমান কথা বলার সময় আপনার কণ্ঠস্বর ধীরে ধীরে খারাপ হতে থাকে কি ?', 'prsn-21-besi-priman-ktha-blar-smy-apnar-knthswr-dheere-dheere-kharap-hte-thake-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:52:49', '2023-05-03 00:52:49'),
(22, 4, 4, 1, 'প্রশ্ন- ২২ : আপনার কণ্ঠস্বর আপনার কর্মক্ষেত্রে/কর্মজীবনে ক্ষতিরকারণ হয়ে দাড়ায় কি?', 'prsn-22-apnar-knthswr-apnar-krmkshetrekrmjeebne-kshtirkarn-hye-daray-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:53:05', '2023-05-03 00:53:05'),
(23, 4, 4, 1, 'প্রশ্ন- ২৩ : আপনার কণ্ঠস্বরের অবস্থা নিয়ে আপনি অসুখী/অখুশি বা হতাশ হন কি ?', 'prsn-23-apnar-knthswrer-obstha-niye-apni-osukheeokhusi-ba-htas-hn-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:53:23', '2023-05-03 00:53:23'),
(24, 4, 4, 1, 'প্রশ্ন- ২৪ : আপনার কণ্ঠস্বরের সমস্যার জন্য কি আপনি বাইরে যাওয়াতে বা বহির্গমনে অনিচ্ছুক হয়ে পরেন/কমিয়ে দেন ?', 'prsn-24-apnar-knthswrer-smszar-jnz-ki-apni-baire-zawate-ba-bhirgmne-onicchuk-hye-prenkmiye-den', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:53:36', '2023-05-03 00:53:36'),
(25, 4, 4, 1, 'প্রশ্ন- ২৫ : আপনার কণ্ঠস্বর কি আপনার কাছে একটি প্রতিবন্ধকতা/বাধা মনে হয় ?', 'prsn-25-apnar-knthswr-ki-apnar-kache-ekti-prtibndhktabadha-mne-hy', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:53:48', '2023-05-03 00:53:48'),
(26, 4, 4, 1, 'প্রশ্ন- ২৬ : কথা বলার সময় কথোপকথনের মাঝে স্বর হঠাৎ বন্ধ হয়ে যায় কি ?', 'prsn-26-ktha-blar-smy-kthopkthner-majhe-swr-hthatt-bndh-hye-zay-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:54:00', '2023-05-03 00:54:00'),
(27, 4, 4, 1, 'প্রশ্ন- ২৭ : আপনার কথা না বুঝে অন্যরা তা পূণরায় জিজ্ঞেস করলে/প্রশ্ন করলে আপনি কি রেগে যান বা রিবক্ত হন ?', 'prsn-27-apnar-ktha-na-bujhe-onzra-ta-puunray-jijnges-krleprsn-krle-apni-ki-rege-zan-ba-ribkt-hn', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:54:19', '2023-05-03 00:54:19'),
(28, 4, 4, 1, 'প্রশ্ন- ২৮ : অন্যর আপনার কথা বুঝতে না পেরে পুনরায় তা জিজ্ঞেস/প্রশ্ন করলে আপনি কি লজ্জিত বোধ করেন কষ্ট পান ?', 'prsn-28-onzr-apnar-ktha-bujhte-na-pere-punray-ta-jijngesprsn-krle-apni-ki-ljjit-bodh-kren-ksht-pan', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:55:02', '2023-05-03 00:55:02'),
(29, 4, 4, 1, 'প্রশ্ন- ২৯ : আপনার কণ্ঠস্বরের জন্য কি আপনি নিজেকে অদক্ষ মনে করেন/দক্ষতার দিক থেকে পিছিয়ে আছেন এমন মনে হয় কি?', 'prsn-29-apnar-knthswrer-jnz-ki-apni-nijeke-odksh-mne-krendkshtar-dik-theke-pichiye-achen-emn-mne-hy-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:55:16', '2023-05-03 00:55:16'),
(30, 4, 4, 1, 'প্রশ্ন- ৩০ : আপনার কেণ্ঠস্বরের জন্য আপনার নিজেকে লজ্জিত, অপরাধী, ছোট মনে হয় কি ?', 'prsn-30-apnar-kenthswrer-jnz-apnar-nijeke-ljjit-opradhee-chot-mne-hy-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:55:33', '2023-05-03 00:55:33'),
(31, 4, 7, 2, '১। গ্রামারের নিয়ম মেনে নিজের কথা বুঝিয়ে বলতে পারে কি?', '1-gramarer-niym-mene-nijer-ktha-bujhiye-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:09:04', '2023-05-03 01:09:04'),
(32, 4, 7, 2, '২। জোরা-জুরি ছাড়াই স্পষ্ট এবং সাবলীল ভাবে বলতে পারি কি?', '2-jora-juri-charai-spsht-ebng-sableel-vabe-blte-pari-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:09:17', '2023-05-03 01:09:17'),
(33, 4, 7, 2, '৩। বলার সময় সম্পূর্ণ বাক্য ব্যবহার করে বলতে পারে কি?', '3-blar-smy-smpuurn-bakz-bzbhar-kre-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:09:31', '2023-05-03 01:09:31'),
(34, 4, 7, 2, '৪। বলার সময় ঠোট, তালু, জ্বিহবা সঠিক সমন্বয় করে বলতে পারে কি?', '4-blar-smy-thot-talu-jwihba-sthik-smnwy-kre-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:09:45', '2023-05-03 01:09:45'),
(35, 4, 7, 2, '৫। ছবি বা বস্তু দেখে সঠিক ভাবে নাম বলতে পারে কি?', '5-chbi-ba-bstu-dekhe-sthik-vabe-nam-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:10:00', '2023-05-03 01:10:00'),
(36, 4, 7, 2, '৬। কথা বলে স্বাভাবিক সময়ে পযর্ন্ত শব্দ ব্যবহার করে নিজের প্রযোজনীয় কথা বলতে পারে কি?', '6-ktha-ble-swavabik-smye-pzrnt-sbd-bzbhar-kre-nijer-przojneey-ktha-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:10:30', '2023-05-03 01:10:30'),
(37, 4, 7, 2, '৭। স্থান, কাল, প্রয়োজন ভেদে স্বরের সঠিক মাত্রা ব্যবহার করে কথা বলতে পারে কি?', '7-sthan-kal-pryojn-vede-swrer-sthik-matra-bzbhar-kre-ktha-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:10:43', '2023-05-03 01:10:43'),
(38, 4, 7, 2, '৮। কোন জিনিস বুঝে নিজের প্রয়োজন লিখে প্রকাশ করতে পারে কি?', '8-kon-jinis-bujhe-nijer-pryojn-likhe-prkas-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:11:03', '2023-05-03 01:11:03'),
(39, 4, 7, 2, '৯। কথা বলার সময় অসামঞ্জস্য, অসংলগ্ন, অর্থহীন কথা না বলে যথাপোযুক্ত কথা বলে কি?', '9-ktha-blar-smy-osamnjsz-osnglgn-orthheen-ktha-na-ble-zthapozukt-ktha-ble-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:11:15', '2023-05-03 01:11:15'),
(40, 4, 7, 2, '১০। ইশারা, ইঙ্গিত, মাথা ঝুলিয়ে মনের ভাব প্রকাশ করে অন্যকে বুঝতে পারে কি?', '10-isara-ingoit-matha-jhuliye-mner-vab-prkas-kre-onzke-bujhte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:11:28', '2023-05-03 01:11:28'),
(41, 4, 7, 2, '১১। বাক্যের মূল শব্দ (Key Word) ব্যবহার না করে সম্পূর্ণ বাক্য ব্যবহার করে কোন কিছু বুঝাতে পারে কি?', '11-bakzer-muul-sbd-key-word-bzbhar-na-kre-smpuurn-bakz-bzbhar-kre-kon-kichu-bujhate-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:11:42', '2023-05-03 01:11:42'),
(42, 4, 7, 2, '১২। নিজের ভাব প্রকাশ করতে লিখিত বা মৌখিক সঠিক বাক্য ব্যবহার করে প্রকাশ করতে পারে কি?', '12-nijer-vab-prkas-krte-likhit-ba-moukhik-sthik-bakz-bzbhar-kre-prkas-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:12:02', '2023-05-03 01:12:02'),
(43, 4, 7, 2, '১৩। কথা বলার সময় জড়তা ছাড়াই স্বতঃস্ফূর্ত ভাবে কোন কিছু প্রকাশ করতে পারে কি?', '13-ktha-blar-smy-jrta-charai-swtsfuurt-vabe-kon-kichu-prkas-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:12:18', '2023-05-03 01:12:18'),
(44, 4, 7, 2, '১৪। অন্যের কথা শুনে অনুকরন করে বলতে পারে কি?', '14-onzer-ktha-sune-onukrn-kre-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:12:32', '2023-05-03 01:12:32'),
(45, 4, 7, 2, '১৫। নিজে নিজে মুখের লালা অথবা তরল জাতীয় খাবার স্বাভাবিক ভাবে গিলে মুখ পরিস্কার রাখতে পারে কি?', '15-nije-nije-mukher-lala-othba-trl-jateey-khabar-swavabik-vabe-gile-mukh-priskar-rakhte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:12:48', '2023-05-03 01:12:48'),
(46, 4, 7, 2, '১৬। সকল প্রকার খঅবার চিবিয়ে স্বাভাবিক ভাবে সমস্যা ছাড়া গিলে খেতে পারে কি?', '16-skl-prkar-khobar-cibiye-swavabik-vabe-smsza-chara-gile-khete-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:13:01', '2023-05-03 01:13:01'),
(47, 4, 7, 2, '১৭। কথা বলার সময় বিশৃঙ্খল ভাবে বা হযবরল ভাবে না বলে স্বাভাবিক ও শুদ্ধ উচ্চারনে বলতে পারে কি?', '17-ktha-blar-smy-bisrrinkhl-vabe-ba-hzbrl-vabe-na-ble-swavabik-oo-suddh-uccarne-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:13:12', '2023-05-03 01:13:12'),
(48, 4, 7, 2, '১৮। নিদির্ষ্ট শব্দ বা বাক্য বলতে গিয়ে দ্বিধা-দ্বন্দ ছাড়াই সামঞ্জস্যতাপূর্ণ অন্য শব্দ ব্যবহার করে সঠিক শব্দ/বাক্য বলতে পারে কি?', '18-nidirsht-sbd-ba-bakz-blte-giye-dwidha-dwnd-charai-samnjsztapuurn-onz-sbd-bzbhar-kre-sthik-sbdbakz-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:13:25', '2023-05-03 01:13:25'),
(49, 4, 7, 2, '১৯। সামাজিক রীতিনীতি বা পরিবেশের অবস্থা বুঝে অন্যের সাথে স্বাভাবিক যোগাযোগ রাখতে পারে কি?', '19-samajik-reetineeti-ba-pribeser-obstha-bujhe-onzer-sathe-swavabik-zogazog-rakhte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:13:40', '2023-05-03 01:13:40'),
(50, 4, 7, 2, '২০। দুর্ভেদ্য, কঠিন, অপ্রাসঙ্গিক, অর্থহীন শব্দ নিজের মতো করে না বলে প্রাসঙ্গিক অর্থবহ কথা বলে কি?', '20-durvedz-kthin-oprasngoik-orthheen-sbd-nijer-mto-kre-na-ble-prasngoik-orthbh-ktha-ble-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:13:52', '2023-05-03 01:13:52'),
(51, 4, 7, 2, '২১। কোন কিছু বলতে গিয়ে নিজের ভূল বুঝে তা নিজে নিজে ঠিক করে শদ্ধভাবে বলতে পারে কি?', '21-kon-kichu-blte-giye-nijer-vuul-bujhe-ta-nije-nije-thik-kre-sddhvabe-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:14:04', '2023-05-03 01:14:04'),
(52, 4, 7, 2, '২২। কোন কিছূ বলতে গিয়ে বিকৃত উচ্চারন না করে স্বাভাবিক ভাবে সঠিক উচ্চারন করতে পারে কি?', '22-kon-kichuu-blte-giye-bikrrit-uccarn-na-kre-swavabik-vabe-sthik-uccarn-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:14:17', '2023-05-03 01:14:17'),
(53, 4, 12, 3, '১। নিজের অংঙ্গ সমূহের (Function of Body Parts) কাজ বুঝাইতে বা দেখাইতে পারে কি?', '1-nijer-ongngo-smuuher-function-of-body-parts-kaj-bujhaite-ba-dekhaite-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:34:25', '2023-05-03 01:34:25'),
(54, 4, 12, 3, '২। খেলতে খেলতে নিজের নাম ধরে ডাক দিলে ঘুরে তাকায় বা সাড়া দিতে পারে কি?', '2-khelte-khelte-nijer-nam-dhre-dak-dile-ghure-takay-ba-sara-dite-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:34:39', '2023-05-03 01:34:39'),
(55, 4, 12, 3, '৩। খেলার সময় পারস্পরিক বা দলগত যোগাযোগ (Co-Operative Play) করতে পারে কি?', '3-khelar-smy-parsprik-ba-dlgt-zogazog-co-operative-play-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:34:52', '2023-05-03 01:34:52'),
(56, 4, 12, 3, '৪। শব্দযুক্ত খেলনা (Sound Making Toys) আলো হয় এমন খেলনা (Lighting Toys) এবং অন্যান্য খেলনা ভয় না পেয়ে বা এরিয়ে না গিয়ে স্বাভাবিক ভাবে খেলতে পারে কি?', '4-sbdzukt-khelna-sound-making-toys-alo-hy-emn-khelna-lighting-toys-ebng-onzanz-khelna-vy-na-peye-ba-eriye-na-giye-swavabik-vabe-khelte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:35:06', '2023-05-03 01:35:06'),
(57, 4, 12, 3, '৫। খেলনাপাতি জিনিসপত্র ছড়িয়ে ছিটিয়ে বিশৃঙ্খল করে পরে তা গুছিয়ে রাখার চেষ্টা করে কি?', '5-khelnapati-jinisptr-chriye-chitiye-bisrrinkhl-kre-pre-ta-guchiye-rakhar-ceshta-kre-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:35:59', '2023-05-03 01:35:59'),
(58, 4, 12, 3, '৬। খেলনা, পাজল বা বস্তুর সামাঞ্জাস্যতা বুঝে মিলিয়ে রাখতে পারে কি? যেমন-বলের সাথে ব্যাট, খাতার সাথে কলম ইত্যাদি।', '6-khelna-pajl-ba-bstur-samanjaszta-bujhe-miliye-rakhte-pare-ki-zemn-bler-sathe-bzat-khatar-sathe-klm-itzadi', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:36:11', '2023-05-03 01:36:11'),
(59, 4, 12, 3, '৭। ভেজা, অমসৃণ, নরম-গরম, শক্ত অনুভূতির খেলনা হাত দিয়ে ধরে স্বাভবিক ভাবে খেলতে পারে কি?', '7-veja-omsrrin-nrm-grm-skt-onuvuutir-khelna-hat-diye-dhre-swavbik-vabe-khelte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:36:24', '2023-05-03 01:36:24'),
(60, 4, 12, 3, '৮। খেলনার ঘ্রাণ স্বাদ নিতে না চেয়ে বা মুখে নিয়ে কামড় না দিয়ে সুস্থ স্বাভাবিক ভাবে খেলতে পারে কি?', '8-khelnar-ghran-swad-nite-na-ceye-ba-mukhe-niye-kamr-na-diye-susth-swavabik-vabe-khelte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:36:36', '2023-05-03 01:36:36'),
(61, 4, 12, 3, '৯। সুনিদির্ষ্ট খেলনা বা বস্তুর প্রতি প্রবল ঝোক বা জেদ না দেখিয়ে স্বাভাবিক থাকতে পারে কি?', '9-sunidirsht-khelna-ba-bstur-prti-prbl-jhok-ba-jed-na-dekhiye-swavabik-thakte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:36:49', '2023-05-03 01:36:49'),
(62, 4, 12, 3, '১০। একা একা না খেলে অন্যের সাথে মিলে খেলতে চায় কি?', '10-eka-eka-na-khele-onzer-sathe-mile-khelte-cay-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:37:03', '2023-05-03 01:37:03'),
(63, 4, 12, 3, '১১। খেলার সময়   Fine Motor Activvities (অংঙ্গের সক্ষম-সক্ষম সঞ্চালন এবং সমন্বয়) সঠিক ভাবে করতে পারে কি? যেমন -  চাল-ডালের মত এমন ছোট জিনিসপত্র ধরতে পারা, কয়েন বক্সে কয়েন ফেলা ইত্যাদি।', '11-khelar-smy-fine-motor-activvities-ongngoer-skshm-skshm-sncaln-ebng-smnwy-sthik-vabe-krte-pare-ki-zemn-cal-daler-mt-emn-chot-jinisptr-dhrte-para-kyen-bkse-kyen-fela-itzadi', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:37:16', '2023-05-03 01:37:16'),
(64, 4, 12, 3, '১২। খেলার সময় (Gross Motor Activities) বলে কিক করা, দরজার হুক লাগানো, ভারি বস্তু উত্তলন করা ইত্যাদি সঠিক ভাবে করতে পারে কি?', '12-khelar-smy-gross-motor-activities-ble-kik-kra-drjar-huk-lagano-vari-bstu-uttln-kra-itzadi-sthik-vabe-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:37:29', '2023-05-03 01:37:29'),
(65, 4, 12, 3, '১৩। খেলার সময় উঁচু থেকে লাফিয়ে নামা, দোলনায় দোলা (Vestribular Activities) সঠিকভাবে করতে পারে কি?', '13-khelar-smy-unncu-theke-lafiye-nama-dolnay-dola-vestribular-activities-sthikvabe-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:37:42', '2023-05-03 01:37:42'),
(66, 4, 12, 3, '১৪। খেলার সময় ধাক্কা দেওয়া, হামগুড়ি দেওয়া (Proprioceptive Activities) ইত্যাদি সঠিকভাবে করতে পারে কি?', '14-khelar-smy-dhakka-dewa-hamguri-dewa-proprioceptive-activities-itzadi-sthikvabe-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:37:56', '2023-05-03 01:37:56'),
(67, 4, 12, 3, '১৫। ফু দিয়ে বেলুন ফোলানো, বাঁশি বাজানো, স্ট্র দিয়ে টেনে খাওয়ার মত খেলা খেলতে পারে কি?', '15-fu-diye-belun-folano-bannsi-bajano-str-diye-tene-khawar-mt-khela-khelte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:38:08', '2023-05-03 01:38:08'),
(68, 4, 12, 3, '১৬। খেলার সময় লজ্জা বা ভয় (Phobia, Shyness) না পেয়ে স্বাভাবিক  ভাবে খেলতে পারে কি?', '16-khelar-smy-ljja-ba-vy-phobia-shyness-na-peye-swavabik-vabe-khelte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:38:21', '2023-05-03 01:38:21'),
(69, 4, 12, 3, '১৭। খেলার সময় (Stereotype Behaviour) একই খেলা বারবার খেলতে না চেয়ে স্বাভাবিক ভাবে অন্য খেলায় অংশগ্রহণ করতে পারে কি?', '17-khelar-smy-stereotype-behaviour-eki-khela-barbar-khelte-na-ceye-swavabik-vabe-onz-khelay-ongsgrhn-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:38:57', '2023-05-03 01:38:57'),
(70, 4, 12, 3, '১৮। খেলার সময় অন্যকে খামচি কামড় বা আগাত না করে মিলেমিশে মনোযোগ দিতে পারে কি?', '18-khelar-smy-onzke-khamci-kamr-ba-agat-na-kre-milemise-mnozog-dite-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:39:15', '2023-05-03 01:39:15'),
(71, 4, 12, 3, '১৯। খেলার সময় নিজের ইচ্ছা বা চাওয়া প্রকাশ করতে অনুরোধ করতে পারে কি?', '19-khelar-smy-nijer-iccha-ba-cawa-prkas-krte-onurodh-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:39:33', '2023-05-03 01:39:33'),
(72, 4, 12, 3, '২০। খেলার সময় জেদি আচরণ করে। ধৈর্য ধরে অপেক্ষা করতে বললে শুলে অপেক্ষা করে কি?', '20-khelar-smy-jedi-acrn-kre-dhoirz-dhre-opeksha-krte-blle-sule-opeksha-kre-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:39:51', '2023-05-03 01:39:51'),
(73, 4, 4, 4, '১. আপনার কি কথা বলতে কষ্ট হয় ?', '1-apnar-ki-ktha-blte-ksht-hy', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:58:47', '2023-05-03 01:58:47'),
(74, 4, 4, 4, '২. আপনি কি কথা বলতে লজ্জাবোধ করেন ?', '2-apni-ki-ktha-blte-ljjabodh-kren', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:59:05', '2023-05-03 01:59:05'),
(75, 4, 4, 4, '৩. কথা বলার সময় কি আপনার কণ্ঠস্বর চেপে আসে ?', '3-ktha-blar-smy-ki-apnar-knthswr-cepe-ase', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:59:21', '2023-05-03 01:59:21'),
(76, 4, 4, 4, '৪. আপনি কি নাকে বাজিয়ে কথা বলেন ?', '4-apni-ki-nake-bajiye-ktha-blen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:59:39', '2023-05-03 01:59:39'),
(77, 4, 4, 4, '৫. আপনার কণ্ঠ কি অস্বাভাবিক, অন্যরকম বা মেয়েলি ?', '5-apnar-knth-ki-oswavabik-onzrkm-ba-meyeli', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:59:53', '2023-05-03 01:59:53'),
(78, 4, 4, 4, '৬. আপনি কি সমস্যার জন্য মানুষের সাথে কম মিশেন?', '6-apni-ki-smszar-jnz-manusher-sathe-km-misen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:00:09', '2023-05-03 02:00:09'),
(79, 4, 4, 4, '৭. আপনার কণ্ঠস্বর স্বাভাবিক না হওয়ায় আপনি কি কম কথা বলেন ?', '7-apnar-knthswr-swavabik-na-hway-apni-ki-km-ktha-blen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:00:25', '2023-05-03 02:00:25'),
(80, 4, 4, 4, '৮. আপনি কি অনেক উচ্চস্বরে জোড়ালো শব্দ করে কথা বলেন ?', '8-apni-ki-onek-uccswre-joralo-sbd-kre-ktha-blen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:00:40', '2023-05-03 02:00:40'),
(81, 4, 4, 4, '৯. কথা বলার সময় কি আপনার শরীরের কোনো মাংসপেশি ভাইব্রেশন বা কেঁপে উঠে ? যেমন: চোকের পেশি লাল বা শরীরের কোন অঙ্গ।', '9-ktha-blar-smy-ki-apnar-sreerer-kono-mangspesi-vaibresn-ba-kennpe-uthe-zemn-coker-pesi-lal-ba-sreerer-kon-ongo', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:00:53', '2023-05-03 02:00:53'),
(82, 4, 4, 4, '১১. আপনি কথা বলার চেয়ে অনেক বেশি ইশারা ইংগিতে প্রকাশ করতে চান ?', '11-apni-ktha-blar-ceye-onek-besi-isara-inggite-prkas-krte-can', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:01:10', '2023-05-03 02:01:10'),
(83, 4, 4, 4, '১০. কথা বলাল সময় কি কোন মানসিক দুশ্চিন্তা বা ভয় কাজ করে ?', '10-ktha-blal-smy-ki-kon-mansik-duscinta-ba-vy-kaj-kre', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:01:31', '2023-05-03 02:01:31'),
(84, 4, 4, 4, '১১. আপনি কথা বলার চেয়ে অনেক বেশি ইশারা ইংগিতে প্রকাশ করতে চান ?', '11-apni-ktha-blar-ceye-onek-besi-isara-inggite-prkas-krte-can', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:01:46', '2023-05-03 02:01:46'),
(85, 4, 4, 4, '১২. জন্মের পর আপনি কি দেরিতে কথা বলা শিখেছেন?', '12-jnmer-pr-apni-ki-derite-ktha-bla-sikhechen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:02:09', '2023-05-03 02:02:09'),
(86, 4, 4, 4, '১২. জন্মের পর আপনি কি দেরিতে কথা বলা শিখেছেন?', '12-jnmer-pr-apni-ki-derite-ktha-bla-sikhechen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:02:15', '2023-05-03 02:02:15'),
(87, 4, 4, 4, '১৩. জন্মের পর আপনি কি মাথায় বা শরীরে কোন আঘাত পেয়েছেন?', '13-jnmer-pr-apni-ki-mathaz-ba-sreere-kon-aghat-pezechen', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:02:27', '2023-05-03 02:02:27'),
(88, 4, 4, 4, '১৪. আপনার কি শ্বাসকষ্ট বা হাঁপানি জাতীয় কোন রোগ আছে?', '14-apnar-ki-swasksht-ba-hannpani-jateez-kon-rog-ache', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:02:40', '2023-05-03 02:02:40'),
(89, 4, 4, 4, '১৫. আপনি কি ছেলেমেয়ে উভয়ের সাথে সংকোচ ছাড়াই কথা বলতে পারেন?', '15-apni-ki-chelemeze-uvzer-sathe-sngkoc-chadai-ktha-blte-paren', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:03:03', '2023-05-03 02:03:03'),
(90, 4, 4, 4, '১৬. আপনার কাছে কি আপনার কষ্টস্বর বা কথাবলা স্বাভীবিক মনে হয়?', '16-apnar-kache-ki-apnar-kshtswr-ba-kthabla-swaveebik-mne-hz', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:04:07', '2023-05-03 02:04:07'),
(91, 4, 4, 4, '১৭. আপনার কি কোন প্রকার উচ্চারণ জনিত সমস্যা আছে?', '17-apnar-ki-kon-prkar-uccarn-jnit-smsza-ache', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:04:35', '2023-05-03 02:04:35'),
(92, 4, 4, 4, '১৮. আপান কি অনেক মানুষের ভিড়ে স্বাভাবিক ভাবে কথা বলতে পারেন?', '18-apan-ki-onek-manusher-vide-swavabik-vabe-ktha-blte-paren', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:04:49', '2023-05-03 02:04:49'),
(93, 4, 4, 4, '১৯. অপরিচিত মানুষের সাথে স্বাভাবিক ভাবে কথা বলতে পারেন কি ?', '19-opricit-manusher-sathe-swavabik-vabe-ktha-blte-paren-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:05:06', '2023-05-03 02:05:06'),
(94, 4, 4, 4, '২০. কথা বলার সময় কি আপনার স্বর আটকে যায় কষ্ট হয় ?', '20-ktha-blar-smz-ki-apnar-swr-atke-zaz-ksht-hz', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:05:29', '2023-05-03 02:05:29'),
(95, 4, 4, 4, '২১. কথা বলার সময় আপনার কি কাশি আসে?', '21-ktha-blar-smz-apnar-ki-kasi-ase', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:06:00', '2023-05-03 02:06:00'),
(96, 4, 4, 5, 'প্রশ্ন--১ আযালকোহল। বিভিন্ন ধরনের নেশা জাতীয় পানীয় পান করে এমন হয়েছে কি?', 'prsn-1-azalkohl-bivinn-dhrner-nesa-jateez-paneez-pan-kre-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:58:39', '2023-05-03 02:58:39'),
(97, 4, 4, 5, 'প্রশ্ন-২ আপনার কি মনে হয় এলার্জি জাতীয় কোন সমস্যা থেকে স্বরের এমন হয়েছে?', 'prsn-2-apnar-ki-mne-hz-elarji-jateez-kon-smsza-theke-swrer-emn-hzeche', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:58:55', '2023-05-03 02:58:55'),
(98, 4, 4, 5, 'প্রশ্ন-৩ আপনার কোন সহকর্মী, স্ত্রী কিংবা অন্য কারো সাথে ঝগড়া কথা কাটা কাটি করার পর থেকেই এমন সমস্যা হচ্ছে বলে মনে করেন কি?', 'prsn-3-apnar-kon-shkrmee-stree-kingba-onz-karo-sathe-jhgda-ktha-kata-kati-krar-pr-thekei-emn-smsza-hcche-ble-mne-kren-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:59:11', '2023-05-03 02:59:11'),
(99, 4, 4, 5, 'প্রশ্ন-৪ কোন মিছিল/সৈন্যদলের অংশগ্রহণ মূলক কাজে নেতৃত দিতে গিয়ে উচ্চস্বরে কথা বলতে গিয়ে এমন হয়েছে কি?', 'prsn-4-kon-michilsoinzdler-ongsgrhn-muulk-kaje-netrrit-dite-gize-uccswre-ktha-blte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:59:27', '2023-05-03 02:59:27'),
(100, 4, 4, 5, 'প্রশ্ন-৫ আপনি কোন ত্রীড়াবিদ হয়ে থাকলে/খেলাধুলা বিষয়ক কোন কিছুর সাথে জড়িত থেকে চিৎকার করে কথা বলতে গিয়ে এমন হয়েছে কি?', 'prsn-5-apni-kon-treedabid-hze-thaklekheladhula-bishzk-kon-kichur-sathe-jdit-theke-cittkar-kre-ktha-blte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:59:43', '2023-05-03 02:59:43'),
(101, 4, 4, 5, 'প্রশ্ন -৬ কথা বলার সময় মুখ দিয়ে শ্বাস নিয়ে কথা বলেন, এই জন্য এমন সমস্যা হয়েছে বলে মনে করেন কি?', 'prsn-6-ktha-blar-smz-mukh-dize-swas-nize-ktha-blen-ei-jnz-emn-smsza-hzeche-ble-mne-kren-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:59:56', '2023-05-03 02:59:56'),
(102, 4, 4, 5, 'প্রশ্ন -৭ অতিরিক্ত চা, কফি, চকলেট ইত্যাদি /পানীয় জাতীয় খাবার খেয়ে এমন হয়েছে কি?', 'prsn-7-otirikt-ca-kfi-cklet-itzadi-paneez-jateez-khabar-kheze-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:00:10', '2023-05-03 03:00:10'),
(103, 4, 4, 5, 'প্রশ্ন-৮ বিভিন্ন প্রতিযোগিতা মূলক দলে অংশগ্রহণ করে কথা বলতে গিয়ে এমন হয়েছে?', 'prsn-8-bivinn-prtizogita-muulk-dle-ongsgrhn-kre-ktha-blte-gize-emn-hzeche', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:00:22', '2023-05-03 03:00:22'),
(104, 4, 4, 5, 'প্রশ্ন-৯ নির্দিষ্ট জায়গা ভেদে/দূরত্বের জায়গা থেকে উচ্চম্বরে ডাকতে/কথা বলতে গিয়ে এমন হয়েছে কি?', 'prsn-9-nirdisht-jazga-vededuurtwer-jazga-theke-uccmbre-daktektha-blte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:00:35', '2023-05-03 03:00:35'),
(105, 4, 4, 5, 'প্রশ্ন-১০ উচ্চস্বরে হাচি কিংবা কাশি দেওয়ার ফলে আপনার এমন হয়েছে কি?', 'prsn-10-uccswre-haci-kingba-kasi-deoozar-fle-apnar-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:00:46', '2023-05-03 03:00:46'),
(106, 4, 4, 5, 'প্রশ্ন-১১ প্রয়োজনের তুলনায় আপনি কি অনেক কম পানি পান করেন? বা অতিরিক্ত পানি স্বল্পতার কারণে হয়েছে কি?', 'prsn-11-przojner-tulnaz-apni-ki-onek-km-pani-pan-kren-ba-otirikt-pani-swlptar-karne-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:01:01', '2023-05-03 03:01:01'),
(107, 4, 4, 5, 'প্রশ্ন-১২ অতিরিক্ত/অতিমাত্রায় ঔষধ সেবনে ডাক্তারের ব্যবস্থাপত্র অনুযায়ী কিংবা ব্যবস্থাপত্র ছাড়া ঔষধ ব্যবহারে এমন হয়েছে কি?', 'prsn-12-otiriktotimatraz-oushdh-sebne-daktarer-bzbsthaptr-onuzazee-kingba-bzbsthaptr-chada-oushdh-bzbhare-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:01:14', '2023-05-03 03:01:14'),
(108, 4, 4, 5, 'প্রশ্ন-১৩ কণ্ঠস্বরের জন্য অতিমাত্রায় ক্ষতিকর পরিবেশের সাথে কাজ করে এমন হয়েছে কি? (চালের কল, কাঠের মিল ইত্যাদি)', 'prsn-13-knthswrer-jnz-otimatraz-kshtikr-pribeser-sathe-kaj-kre-emn-hzeche-ki-caler-kl-kather-mil-itzadi', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:01:26', '2023-05-03 03:01:26'),
(109, 4, 4, 5, 'প্রশ্ন -১৪ ঝামেলাপূর্ণ পরিবেশে যেখানে প্রচুর উচ্চস্বরে কথা বলা লাগে এমন যায়গায় থাকার ফলে এমন হয়েছে কি?', 'prsn-14-jhamelapuurn-pribese-zekhane-prcur-uccswre-ktha-bla-lage-emn-zazgaz-thakar-fle-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:01:39', '2023-05-03 03:01:39'),
(110, 4, 4, 5, 'প্রশ্ন-১৫ যে কোন প্রাণী/যে কোন জন্তর মত শব্দ করতে/বলার চেষ্টা করতে গিয়ে এমন হয়েছে কি?', 'prsn-15-ze-kon-praneeze-kon-jntr-mt-sbd-krteblar-ceshta-krte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:01:52', '2023-05-03 03:01:52'),
(111, 4, 4, 5, 'প্রশ্ন-১৬ মাথায় আঘাত বা অন্যকোনো অসুখের ফলে এমন হয়েছে কি?', 'prsn-16-mathaz-aghat-ba-onzkono-osukher-fle-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:02:05', '2023-05-03 03:02:05'),
(112, 4, 4, 5, 'প্রশ্ন-১৭ বিভিন্ন অভি নকল বা অনুকরণ করতে গিয়ে এমন হয়েছে কি? যেমনঃ (আবৃত্তি করার সময় নানা রকম ভাবে বলা. ফেরি করার সময় বলা) ইত্যাদি।', 'prsn-17-bivinn-ovi-nkl-ba-onukrn-krte-gize-emn-hzeche-ki-zemn-abrritti-krar-smz-nana-rkm-vabe-bla-feri-krar-smz-bla-itzadi', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:02:18', '2023-05-03 03:02:18'),
(113, 4, 4, 5, 'প্রশ্ন- ১৮ উচ্চস্বরে বলতে/অতি উচ্চ মাত্রায় হাসতে গিয়ে এমন হয়েছে কি?', 'prsn-18-uccswre-blteoti-ucc-matraz-haste-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:02:30', '2023-05-03 03:02:30'),
(114, 4, 4, 5, 'প্রশ্ন-১৯ ঠান্ডা জনিত কোন সংক্রমণ রোগ থেকে এমন সমস্যা হয়েছে কি?', 'prsn-19-thanda-jnit-kon-sngkrmn-rog-theke-emn-smsza-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:02:43', '2023-05-03 03:02:43'),
(115, 4, 4, 5, 'প্রশ্ন -২০ বিভিন্ন ধরনের ধর্মীয় কথা একই ভঙ্গিতে/একই সুরে পুনরাবৃত্তিমূলক ভাবে বলতে গিয়ে এমন হয়েছে কি?', 'prsn-20-bivinn-dhrner-dhrmeez-ktha-eki-vngoiteeki-sure-punrabrrittimuulk-vabe-blte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:02:55', '2023-05-03 03:02:55'),
(116, 4, 4, 5, 'প্রশ্ন-২১ মাত্রাতিরিক্ত ঘন ঘন উচ্চস্বরে গান গেয়ে এমন হয়েছে কি?', 'prsn-21-matratirikt-ghn-ghn-uccswre-gan-geze-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:03:07', '2023-05-03 03:03:07'),
(117, 4, 4, 5, 'প্রশ্ন-২২ মাত্রাতিরিক্ত চরোশ, গাজা/ধুমপানের জন্য এমন হয়েছে বলে মনে করেন?', 'prsn-22-matratirikt-cros-gajadhumpaner-jnz-emn-hzeche-ble-mne-kren', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:03:21', '2023-05-03 03:03:21'),
(118, 4, 4, 5, 'প্রশ্ন-২৩ যে কোন ধরনের উচ্চ কোলাহল পূর্ণ পরিবেশে উচ্চস্বরে কথা বলে এমন হয়েছে কি?', 'prsn-23-ze-kon-dhrner-ucc-kolahl-puurn-pribese-uccswre-ktha-ble-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:03:39', '2023-05-03 03:03:39'),
(119, 4, 4, 5, 'প্রশ্ন-২৪ যানবাহনের বিকট শব্দ/বিভিন্ন কোলাহলে উচ্চস্বরে কথা বলতে গিয়ে এমন হয়েছে কি?', 'prsn-24-zanbahner-bikt-sbdbivinn-kolahle-uccswre-ktha-blte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:03:55', '2023-05-03 03:03:55'),
(120, 4, 4, 5, 'প্রশ্ন-২৫ কথা বলার সময় অতিরিক্ত চিন্তাপ্রবণ হওয়াতে এমন হয়েছে কি?', 'prsn-25-ktha-blar-smz-otirikt-cintaprbn-hoozate-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:04:10', '2023-05-03 03:04:10'),
(121, 4, 4, 5, 'প্রশ্ন-২৬ বিভিন্ন কোলাহল পূর্ণ খেলাধুলা/ত্রীড়া সংক্রান্ত কোন কিছুতে অংশগ্রহণ করতে গিয়ে এমন হয়েছে কি?', 'prsn-26-bivinn-kolahl-puurn-kheladhulatreeda-sngkrant-kon-kichute-ongsgrhn-krte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:04:30', '2023-05-03 03:04:30'),
(122, 4, 4, 5, 'প্রশ্ন-২৭ বিভিন্ন ধরনের উচ্চ শব্দ জনিত অভিনয়/কথা বলতে গিয়ে এমন হয়েছে কি?', 'prsn-27-bivinn-dhrner-ucc-sbd-jnit-ovinzktha-blte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:04:49', '2023-05-03 03:04:49'),
(123, 4, 4, 5, 'প্রশ্ন--২৮ কন্ঠস্বর পরিস্কার করতে বার বার গলায় চাপ পরে এমন হয়েছে কি?', 'prsn-28-knthswr-priskar-krte-bar-bar-glaz-cap-pre-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:05:02', '2023-05-03 03:05:02'),
(124, 4, 4, 5, 'প্রশ্ন-২৯ গলা/শ্বাস যন্ত্রের/শ্বাস নালীর সংক্রমণ থেকে এমন হয়েছে কি?', 'prsn-29-glaswas-zntrerswas-naleer-sngkrmn-theke-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:05:14', '2023-05-03 03:05:14'),
(125, 4, 4, 5, 'প্রশ্ন-৩০ বিভিন্ন কাল্পনিক চরিত্রের কষ্ঠস্বর/যানবাহনের শব্দ অনুকরণ করতে গিয়ে এমন হয়েছে কি?', 'prsn-30-bivinn-kalpnik-critrer-kshthswrzanbahner-sbd-onukrn-krte-gize-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:05:26', '2023-05-03 03:05:26'),
(126, 4, 4, 5, 'প্রশ্ন--৩১ কষ্ঠস্বরে শক্ত কোন আঘাত/কষ্টস্বরের উপর আক্রমনাত্বক কোন পরিস্থিতিতে এমন হয়েছে কি?', 'prsn-31-kshthswre-skt-kon-aghatkshtswrer-upr-akrmnatwk-kon-pristhitite-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:05:38', '2023-05-03 03:05:38'),
(127, 4, 4, 5, 'প্রশ্ন-৩২ মাত্রাতিরিক্ত/দীর্ঘ সময় ধরে ফিস ফিস করে কথা বলাতে এমন হয়েছে কি?', 'prsn-32-matratiriktdeergh-smz-dhre-fis-fis-kre-ktha-blate-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:05:51', '2023-05-03 03:05:51'),
(128, 4, 4, 5, 'প্রশ্ন-৩৩ উচ্চমাত্রায় চিৎকার/চেচামেচি করাতে এমন হয়েছে কি?', 'prsn-33-uccmatraz-cittkarcecameci-krate-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:06:05', '2023-05-03 03:06:05'),
(129, 4, 4, 5, 'প্রশ্ন-৩৪ নাইট ক্লাবে অতিরিক্ত সময় কথা বলা বা রাত জেগে চিল্লাচিপ্লি করার ফলে এমন হয়েছে কি?', 'prsn-34-nait-klabe-otirikt-smz-ktha-bla-ba-rat-jege-cillacipli-krar-fle-emn-hzeche-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 03:06:21', '2023-05-03 03:06:21'),
(130, 4, 6, 6, '১। ভদ্রতা/নম্রতার সাথে অনুরোধ করতে পারে কি?', '1-vdrtanmrtar-sathe-onurodh-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:25:44', '2023-05-03 04:25:44'),
(131, 4, 6, 6, '২। নিজে নিজে কোন কিছু পছন্দ করতে পারে কি?', '2-nije-nije-kon-kichu-pchnd-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:26:03', '2023-05-03 04:26:03'),
(132, 4, 6, 6, '৩। কোন জিনিস চাইতে বর্ণনা করতে পারে কি?', '3-kon-jinis-caite-brnna-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:26:19', '2023-05-03 04:26:19'),
(133, 4, 6, 6, '৪ । নিজস্ব/ব্যাক্তিগত প্রয়োজন বলতে ও প্রকাশ করতে পারে কি?', '4-nijswbzaktigt-przojn-blte-oo-prkas-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:26:34', '2023-05-03 04:26:34'),
(134, 4, 6, 6, '৫। কোন সাহায্যের জন্য অনুরোধ করতে/বলতে পারে কি?', '5-kon-sahazzer-jnz-onurodh-krteblte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:26:51', '2023-05-03 04:26:51'),
(135, 4, 6, 7, '১। কোন খেলাতে/খেলায় নির্দেশনা দিতে পারে কি?', '1-kon-khelatekhelaz-nirdesna-dite-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:29:08', '2023-05-03 04:29:08'),
(136, 4, 6, 7, '২। কোন কিছু তৈরী করতে নির্দেশনা দিতে পারে কি?', '2-kon-kichu-toiree-krte-nirdesna-dite-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:29:26', '2023-05-03 04:29:26'),
(137, 4, 6, 7, '৩। কোন কিছু চাইলে, অনুরোধ করলে, নির্দেশ দিলে তা বুঝে করতে পারে কি?', '3-kon-kichu-caile-onurodh-krle-nirdes-dile-ta-bujhe-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:29:42', '2023-05-03 04:29:42'),
(138, 4, 6, 8, '১। যে কোন ধরনের অনুভূতি চিহ্নিত (ভালা লাগা, খারাপ লাগা) প্রকাশ করতে পারে কি?', '1-ze-kon-dhrner-onuvuuti-cihnit-vala-laga-kharap-laga-prkas-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:32:24', '2023-05-03 04:32:24'),
(139, 4, 6, 8, '২। যে কোন ধরনের অনুভূতি ব্যাখ্যা বিশ্লেষন করে বলতে পারে কি?', '2-ze-kon-dhrner-onuvuuti-bzakhza-bisleshn-kre-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:32:35', '2023-05-03 04:32:35'),
(140, 4, 6, 8, '৩। কোন কিছুর/কাজের জন্য (অনীহা) অজুহাত দেখাতে পারে কি?', '3-kon-kichurkajer-jnz-oneeha-ojuhat-dekhate-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:32:49', '2023-05-03 04:32:49'),
(141, 4, 6, 8, '৪ । যে কোন কাজ করার সুযোগ করে দিলে সে কাজ করতে সমর্থন/আগ্রহী হয় কি না?', '4-ze-kon-kaj-krar-suzog-kre-dile-se-kaj-krte-smrthnagrhee-hz-ki-na', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:33:03', '2023-05-03 04:33:03'),
(142, 4, 6, 8, '৫। কোন গুরুত্বপূর্ণ তথ্য যেমন (নাম, ঠিকানা, মোবাইল নাম্বার, জন্ম তারিখ) ইত্যাদি নিজে নিজে বলতে পারে কি?', '5-kon-gurutwpuurn-tthz-zemn-nam-thikana-mobail-nambar-jnm-tarikh-itzadi-nije-nije-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:33:19', '2023-05-03 04:33:19'),
(143, 4, 6, 9, '১। অন্যের সাথে বা অন্য কারো সাথে ভালো আচরন/বিনয়ের সাথে আচরন করে কি?', '1-onzer-sathe-ba-onz-karo-sathe-valo-acrnbinzer-sathe-acrn-kre-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:35:42', '2023-05-03 04:35:42'),
(144, 4, 6, 9, '২। যে কোন জায়গায়/পরিবেশের ধরন অনুযায়ী সামাজিক যোগাযোগ গুলি (সালাম দেয়া, বিদায় দেওয়া, অন্যের কথা মনোযোগ দেওয়া) করতে পারে কি?', '2-ze-kon-jazgazpribeser-dhrn-onuzazee-samajik-zogazog-guli-salam-deza-bidaz-deooza-onzer-ktha-mnozog-deooza-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:36:00', '2023-05-03 04:36:00'),
(145, 4, 6, 9, '৩। মনোযোগ দিয়ে কোন কথা শুনতে চায় কি?', '3-mnozog-dize-kon-ktha-sunte-caz-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:36:18', '2023-05-03 04:36:18'),
(146, 4, 6, 9, '৪। অসম্পূর্ণ কোন কথা গুছিয়ে সম্পূর্ণভাবে বলতে পারে কি?', '4-osmpuurn-kon-ktha-guchize-smpuurnvabe-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:36:33', '2023-05-03 04:36:33'),
(147, 4, 6, 9, '৫। যে কোন কথা/যে কোন কিছু নিজে নিজে বুঝে বলতে পারে কি?', '5-ze-kon-kthaze-kon-kichu-nije-nije-bujhe-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:36:46', '2023-05-03 04:36:46'),
(148, 4, 6, 9, '৬। যে কোন ধরনের কথা বা কাজ শেষ হলে সেটা বুঝতে পারে কি?', '6-ze-kon-dhrner-ktha-ba-kaj-sesh-hle-seta-bujhte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:37:00', '2023-05-03 04:37:00'),
(149, 4, 6, 9, '৭। মুদ্রা দোষ (হ্যা, এ্যা, ও) ইত্যাদি না বলে সাবলীল ভাবে কথা বলতে পারে কি?', '7-mudra-dosh-hza-eza-oo-itzadi-na-ble-sableel-vabe-ktha-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:37:12', '2023-05-03 04:37:12'),
(150, 4, 6, 9, '৮। অনাকাঙ্খিত কোন আচরন/কাজে ব্যাখ্যা দিতে পারে কি?', '8-onakankhit-kon-acrnkaje-bzakhza-dite-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:37:32', '2023-05-03 04:37:32'),
(151, 4, 6, 9, '৯। কোন সমস্যাতে পরে গেলে সেটা সমাধানের জন্য অনুরোধ করতে পারে কি?', '9-kon-smszate-pre-gele-seta-smadhaner-jnz-onurodh-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:37:46', '2023-05-03 04:37:46'),
(152, 4, 6, 9, '১০। যে কোন সমস্যার ব্যাখ্যা দিতে পারে কি?', '10-ze-kon-smszar-bzakhza-dite-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:38:01', '2023-05-03 04:38:01'),
(153, 4, 6, 9, '১১। অন্যকে ব্যাঙ্গ করা বা অবেহেলাকরা / ছোট করে কিছুতে পারে কি ?', '11-onzke-bzango-kra-ba-obehelakra-chot-kre-kichute-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:38:14', '2023-05-03 04:38:14'),
(154, 4, 6, 9, '১২। অন্যের কথার/মতামতের সাথে অম্মতি প্রকাশ করে কি?', '12-onzer-ktharmtamter-sathe-ommti-prkas-kre-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:38:29', '2023-05-03 04:38:29'),
(155, 4, 6, 9, '১৩। অন্যকে প্রশংসা/অন্যের প্রশংসা শুনতে পছন্দ করে কি?', '13-onzke-prsngsaonzer-prsngsa-sunte-pchnd-kre-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:38:47', '2023-05-03 04:38:47'),
(156, 4, 6, 9, '১৪ । কথা দিয়ে কথা রাখতে পারা বুঝে কি?', '14-ktha-dize-ktha-rakhte-para-bujhe-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:39:03', '2023-05-03 04:39:03'),
(157, 4, 6, 10, '১। কোন কিছু জানতে/বুঝতে বার বার প্রশ্ন করে ?', '1-kon-kichu-jantebujhte-bar-bar-prsn-kre', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:43:44', '2023-05-03 04:43:44'),
(158, 4, 6, 10, '২।ধারাবাহিকভাবে/ধারাবাহিকতা বজায় রেখে কোন তথ্য/প্রশ্ন করতে/বলতে পারে কি?', '2dharabahikvabedharabahikta-bjaz-rekhe-kon-tthzprsn-krteblte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:43:59', '2023-05-03 04:43:59'),
(159, 4, 6, 10, '৩। আগ্রহ নিয়ে/জানার ইচ্ছা নিয়ে কোন প্রশ্ন করতে পারে কি?', '3-agrh-nizejanar-iccha-nize-kon-prsn-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:44:18', '2023-05-03 04:44:18'),
(160, 4, 6, 10, '৪। কোন ধরনের সমস্যার সমাধান করতে/সমাধান করার জন্য কোন কিছু নিয়ে প্রশ্ন করতে পারে কী/বুঝে কি?', '4-kon-dhrner-smszar-smadhan-krtesmadhan-krar-jnz-kon-kichu-nize-prsn-krte-pare-keebujhe-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:44:33', '2023-05-03 04:44:33'),
(161, 4, 6, 10, '৫ । সম্ভাবনাময় কোন কিছুর জন্য ধারনা করে কোন প্রশ্ন করতে পারে কি?', '5-smvabnamz-kon-kichur-jnz-dharna-kre-kon-prsn-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:44:49', '2023-05-03 04:44:49'),
(162, 4, 6, 11, '১। বিভিন্ন চরিত্রে নিজেকে তৈরি করতে/উপস্থাপন করতে পারে কি?', '1-bivinn-critre-nijeke-toiri-krteupsthapn-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:47:46', '2023-05-03 04:47:46'),
(163, 4, 6, 11, '২। বিভিন্ন জিনিস দিয়ে কোন কিছু তৈরী করতে পারে কি?', '2-bivinn-jinis-dize-kon-kichu-toiree-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:48:01', '2023-05-03 04:48:01'),
(164, 4, 6, 11, '৩। যে কোন ধরনের অনুষ্ঠান/প্রোগ্রাম/পরিবেশের অবস্থা বুঝে সেটা বর্ণনা করতে পারে কি?', '3-ze-kon-dhrner-onushthanprogrampribeser-obstha-bujhe-seta-brnna-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:48:13', '2023-05-03 04:48:13'),
(165, 4, 6, 11, '৪। কোন কিছু শুনে গল্প/কবিতা/কথা সেগুলি পূনরায় সঠিকভাবে বলতে পারে কি?', '4-kon-kichu-sune-glpkbitaktha-seguli-puunraz-sthikvabe-blte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:48:26', '2023-05-03 04:48:26'),
(166, 4, 6, 11, '৫। ছবি দেখে/ছবির ধারাবাহিকতার সঠিক ধরনা মেনে (৪-৬) ফেমে তা সাজাতে/গুছাতে পারে কি?', '5-chbi-dekhechbir-dharabahiktar-sthik-dhrna-mene-4-6-feme-ta-sajateguchate-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:48:44', '2023-05-03 04:48:44'),
(167, 5, 11, 12, '১। শিশু যোগাযোগের সময় স্বাভাবিক ভাবে চোখের দিকে তাকায় বা Eye Contact করে কি?', '1-sisu-zogazoger-smy-swavabik-vabe-cokher-dike-takay-ba-eye-contact-kre-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-05 23:10:22', '2023-05-05 23:10:22'),
(168, 5, 11, 12, '২। কাংখিত খেলনা, জিনিস পত্র,বস্তুর দিকে আংঙ্গুল দিয়ে নির্দেশ (Finger Point) করতে পারে কি?', '2-kangkhit-khelna-jinis-ptrbstur-dike-angngoul-diye-nirdes-finger-point-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-05 23:10:47', '2023-05-05 23:10:47'),
(169, 5, 11, 12, '৩। Vocalization বা অর্থহীন মৌখিক শব্দ (আ...এ…বি… ইত্যাদি) করতে পারে কি?', '3-vocalization-ba-orthheen-moukhik-sbd-aebi-itzadi-krte-pare-ki', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-05 23:11:13', '2023-05-05 23:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) DEFAULT NULL,
  `r_unique_id` varchar(255) DEFAULT NULL,
  `report_created_date` date DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `assessment_method` varchar(255) DEFAULT NULL,
  `areas_strength` varchar(255) DEFAULT NULL,
  `areas_difficulty` varchar(255) DEFAULT NULL,
  `challenging_issue` varchar(255) DEFAULT NULL,
  `learning_tend` varchar(255) DEFAULT NULL,
  `cognitive_biased` varchar(255) DEFAULT NULL,
  `goals_focus_on` varchar(255) DEFAULT NULL,
  `findings_diagnosis` varchar(255) DEFAULT NULL,
  `estimate_severity` varchar(255) DEFAULT NULL,
  `estimate_prognosis` varchar(255) DEFAULT NULL,
  `recommendations` varchar(255) DEFAULT NULL,
  `direct_treatment` varchar(255) DEFAULT NULL,
  `home_based_treatment` varchar(255) DEFAULT NULL,
  `referred_to` varchar(255) DEFAULT NULL,
  `others_comment` varchar(255) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `users_id`, `image`, `icon`, `title`, `slug`, `price`, `short_description`, `description`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(3, 4, 'images/EmJanTNw6DaaAZuk7CJavT3yOmuCnC9kpExZGw4i.png', NULL, 'RRRRR', 'rrrrr', 20, NULL, '<p>DDFSS</p>', 2, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-07 23:51:47', '2023-05-07 23:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `users_id`, `categories_id`, `name`, `slug`, `image`, `short_description`, `description`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 'চেকলিস্ট– ১', 'ceklist-1', 'images/default.jpg', NULL, NULL, 1, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 00:22:43', '2023-05-03 00:22:43'),
(2, 4, 7, 'চেকলিস্ট– ১', 'ceklist-1', 'images/default.jpg', NULL, NULL, 1, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:08:28', '2023-05-03 01:08:28'),
(3, 4, 12, 'চেকলিস্ট– ১', 'ceklist-1', 'images/default.jpg', NULL, NULL, 1, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:33:41', '2023-05-03 01:33:41'),
(4, 4, 4, 'চেক লিস্ট - 2', 'cek-list-2', 'images/default.jpg', NULL, NULL, 2, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 01:58:28', '2023-05-03 01:58:28'),
(5, 4, 4, 'ভোকাল হাইজিন চেক লিস্ট', 'vokal-haijin-cek-list', 'images/default.jpg', NULL, NULL, 3, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 02:31:23', '2023-05-03 02:31:23'),
(6, 4, 6, 'চওয়া বা অনুরোধ করার দক্ষতার বিকাশ', 'cooza-ba-onurodh-krar-dkshtar-bikas', 'images/default.jpg', NULL, NULL, 1, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:25:23', '2023-05-03 04:25:23'),
(7, 4, 6, 'নির্দেশনা দেয়ার দক্ষতার বিকাশ', 'nirdesna-dezar-dkshtar-bikas', 'images/default.jpg', NULL, NULL, 2, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:28:46', '2023-05-03 04:28:46'),
(8, 4, 6, 'ব্যক্তিগত অনুভূতি বা মতামত বিকাশের দক্ষতা', 'bzktigt-onuvuuti-ba-mtamt-bikaser-dkshta', 'images/default.jpg', NULL, NULL, 3, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:30:15', '2023-05-03 04:30:15'),
(9, 4, 6, 'পারস্পারিক যোগাযোগের ক্ষেত্রে সামাজিক শিষ্টাচারের বিকাশ', 'parsparik-zogazoger-kshetre-samajik-sishtacarer-bikas', 'images/default.jpg', NULL, NULL, 4, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:33:39', '2023-05-03 04:33:39'),
(10, 4, 6, 'প্রশ্নকরার দক্ষতার বিকাশ', 'prsnkrar-dkshtar-bikas', 'images/default.jpg', NULL, NULL, 5, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:43:15', '2023-05-03 04:43:15'),
(11, 4, 6, 'কল্পনা করে গুছিয়ে বলার দক্ষতার বিকাশ', 'klpna-kre-guchize-blar-dkshtar-bikas', 'images/default.jpg', NULL, NULL, 6, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:45:08', '2023-05-03 04:45:08'),
(12, 5, 11, 'চেকলিস্ট– ১ Preverbal Skill Assessment', 'ceklist-1-preverbal-skill-assessment', 'images/default.jpg', NULL, NULL, 6, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-05 23:09:16', '2023-05-05 23:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT '1000',
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `users_id`, `title`, `slug`, `short_description`, `description`, `price`, `image`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(2, 5, 'Pure Tone Audiometry (PMT)', 'pure-tone-audiometry-pmt', NULL, '<p>dEMO TEST &nbsp;dEMO TEST&nbsp;</p>', '300', 'images/UuogUmi7TdI4WRc9cvy65sOUeXebi2GABQie1LIT.png', 1, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:21:57', '2023-05-08 00:32:20'),
(3, 5, 'Speech recognition Threshold (SRT)', 'speech-recognition-threshold-srt', NULL, '<p>dEMO TEST</p>', '300', 'images/osvGiJAb6sfw9d4wdvSNEvxORfljQPEeM0MN8QHI.jpg', 2, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:24:56', '2023-05-03 04:24:56'),
(4, 5, 'Speech Audiometry (SA)', 'speech-audiometry-sa', NULL, '<p>dEMO TEST</p>', '1000', 'images/Saymbzy76l25wPsp83SvlcMzdjQTGlvo8xApkfOZ.jpg', 3, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:26:36', '2023-05-03 04:26:36'),
(5, 5, 'Play Audiometry (PA)', 'play-audiometry-pa', NULL, '<p>DEMO TEST</p>', '10', 'images/C1loXxgWpuwBqoUAAbtiTNUcoTYq3syADmLkkcya.jpg', 4, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:30:53', '2023-05-03 04:30:53'),
(6, 5, 'Behavioral observational Audiometry (BOA)', 'behavioral-observational-audiometry-boa', NULL, '<p>Demo text</p>', '10', 'images/hBpINoxuQ6CtA3E2lPMeSigtBYox1NR9rEPII6c1.jpg', 5, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:37:08', '2023-05-03 04:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `tranings`
--

CREATE TABLE `tranings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `traning_categories_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `price` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traning_categories`
--

CREATE TABLE `traning_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `serial` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 mines this status success',
  `is_status` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_popular` tinyint(1) DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `others_one` varchar(255) DEFAULT NULL,
  `others_two` varchar(255) DEFAULT NULL,
  `others_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traning_categories`
--

INSERT INTO `traning_categories` (`id`, `users_id`, `name`, `slug`, `short_description`, `description`, `image`, `serial`, `status`, `is_status`, `is_active`, `is_featured`, `is_popular`, `view_count`, `others_one`, `others_two`, `others_three`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Our Workshops (কর্মশালা)', 'our-workshops-krmsala', NULL, NULL, 'images/default.jpg', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:39:35', '2023-05-03 04:39:35'),
(3, NULL, 'Mother Training', 'mother-training', NULL, NULL, 'images/default.jpg', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:49:40', '2023-05-03 04:49:40'),
(4, NULL, 'Teacher Training', 'teacher-training', NULL, NULL, 'images/default.jpg', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:50:26', '2023-05-03 04:50:26'),
(5, NULL, 'Indevidual Focuse', 'indevidual-focuse', NULL, NULL, 'images/default.jpg', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:50:47', '2023-05-03 04:50:47'),
(6, NULL, 'Programs (IFP)', 'programs-ifp', NULL, NULL, 'images/default.jpg', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:52:04', '2023-05-03 04:52:04'),
(7, NULL, 'Training for Childern', 'training-for-childern', NULL, NULL, 'images/default.jpg', NULL, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL, '2023-05-03 04:52:49', '2023-05-03 04:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `traning_orders`
--

CREATE TABLE `traning_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `tranings_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `pay_balance` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `sended_number` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `message` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` enum('basic','admin','user','author','professional') NOT NULL DEFAULT 'basic',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `sex` enum('male','female','others') DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('user','admin') NOT NULL DEFAULT 'user',
  `image` varchar(255) DEFAULT 'images/default.jpg',
  `about` longtext DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `phone`, `dob`, `age`, `sex`, `email_verified_at`, `password`, `type`, `image`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'basic', 'Example Admin', NULL, '01784587457', NULL, NULL, NULL, NULL, 'eb3d3039c29481075263578b19d52df0', 'admin', 'images/default.jpg', NULL, NULL, '2023-05-02 05:55:57', '2023-05-02 05:55:57'),
(2, 'basic', 'Example User', NULL, '01785478541', NULL, NULL, NULL, NULL, '$2y$10$6Sx1/.zxNvo2ABnvM8YKJu/agRHbfBqc2TKpVv3lYoIaatLrWiydu', 'admin', 'images/default.jpg', NULL, NULL, '2023-05-02 05:55:57', '2023-05-02 05:55:57'),
(3, 'basic', 'ARAFAT MIA', NULL, '01318452438', NULL, NULL, NULL, NULL, '$2y$10$71g1XbYBuYYqassTaJjBPOXO7lZ5VXOAH0F.q2EEgjbdizL1N59Xe', 'user', 'images/default.jpg', NULL, NULL, '2023-05-02 23:59:50', '2023-05-02 23:59:50'),
(4, 'basic', 'Arafat Sorkar', NULL, '01934565764', NULL, NULL, NULL, NULL, '$2y$10$g1Nj25ubdcEJ4EyKP.S.q.nm7/3vBKxauVnAdECv.go.gSv8oTRyG', 'admin', 'images/default.jpg', NULL, NULL, '2023-05-03 00:10:42', '2023-05-03 00:10:42'),
(5, 'basic', 'Admin', NULL, '01700000000', NULL, NULL, NULL, NULL, '$2y$10$RTsedEhTJFd8jK3kr5VgUOms.j8uhlVGrlmNC2IfMFsIi8XlED.du', 'admin', 'images/default.jpg', NULL, NULL, '2023-05-03 00:33:25', '2023-05-03 00:33:25'),
(6, 'basic', 'Arafat', NULL, '1234567890', NULL, NULL, NULL, NULL, '$2y$10$TDfa2UYXr9Aw3g1BnLIQZ.ZMgP9PQM3Po09wL7pykr/8SVZ/f7./W', 'user', 'images/default.jpg', NULL, NULL, '2023-05-06 01:51:16', '2023-05-06 01:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_assessments`
--

CREATE TABLE `user_assessments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_mark` int(11) NOT NULL DEFAULT 0,
  `status` enum('success','pending','decline','problem') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_orders`
--
ALTER TABLE `all_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `all_orders_users_id_foreign` (`users_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_users_id_foreign` (`users_id`),
  ADD KEY `answers_categories_id_foreign` (`categories_id`),
  ADD KEY `answers_sub_categories_id_foreign` (`sub_categories_id`);

--
-- Indexes for table `assessment_orders`
--
ALTER TABLE `assessment_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assessment_orders_categories_id_foreign` (`categories_id`),
  ADD KEY `assessment_orders_users_id_foreign` (`users_id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_users_id_foreign` (`users_id`);

--
-- Indexes for table `donners`
--
ALTER TABLE `donners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donners_users_id_foreign` (`users_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `free_services`
--
ALTER TABLE `free_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `free_services_users_id_foreign` (`users_id`);

--
-- Indexes for table `language_categories`
--
ALTER TABLE `language_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_categories_users_id_foreign` (`users_id`);

--
-- Indexes for table `language_therapies`
--
ALTER TABLE `language_therapies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_therapies_users_id_foreign` (`users_id`),
  ADD KEY `language_therapies_language_categories_id_foreign` (`language_categories_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_users_id_foreign` (`users_id`),
  ADD KEY `questions_categories_id_foreign` (`categories_id`),
  ADD KEY `questions_sub_categories_id_foreign` (`sub_categories_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_users_id_foreign` (`users_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_users_id_foreign` (`users_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_users_id_foreign` (`users_id`),
  ADD KEY `sub_categories_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_users_id_foreign` (`users_id`);

--
-- Indexes for table `tranings`
--
ALTER TABLE `tranings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tranings_traning_categories_id_foreign` (`traning_categories_id`);

--
-- Indexes for table `traning_categories`
--
ALTER TABLE `traning_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `traning_categories_users_id_foreign` (`users_id`);

--
-- Indexes for table `traning_orders`
--
ALTER TABLE `traning_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `traning_orders_tranings_id_foreign` (`tranings_id`),
  ADD KEY `traning_orders_users_id_foreign` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_assessments`
--
ALTER TABLE `user_assessments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_assessments_users_id_foreign` (`users_id`),
  ADD KEY `user_assessments_categories_id_foreign` (`categories_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_orders`
--
ALTER TABLE `all_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `assessment_orders`
--
ALTER TABLE `assessment_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donners`
--
ALTER TABLE `donners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `free_services`
--
ALTER TABLE `free_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language_categories`
--
ALTER TABLE `language_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `language_therapies`
--
ALTER TABLE `language_therapies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tranings`
--
ALTER TABLE `tranings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `traning_categories`
--
ALTER TABLE `traning_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `traning_orders`
--
ALTER TABLE `traning_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_assessments`
--
ALTER TABLE `user_assessments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_orders`
--
ALTER TABLE `all_orders`
  ADD CONSTRAINT `all_orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_sub_categories_id_foreign` FOREIGN KEY (`sub_categories_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assessment_orders`
--
ALTER TABLE `assessment_orders`
  ADD CONSTRAINT `assessment_orders_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assessment_orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donners`
--
ALTER TABLE `donners`
  ADD CONSTRAINT `donners_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `free_services`
--
ALTER TABLE `free_services`
  ADD CONSTRAINT `free_services_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `language_categories`
--
ALTER TABLE `language_categories`
  ADD CONSTRAINT `language_categories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `language_therapies`
--
ALTER TABLE `language_therapies`
  ADD CONSTRAINT `language_therapies_language_categories_id_foreign` FOREIGN KEY (`language_categories_id`) REFERENCES `language_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `language_therapies_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_sub_categories_id_foreign` FOREIGN KEY (`sub_categories_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_categories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tranings`
--
ALTER TABLE `tranings`
  ADD CONSTRAINT `tranings_traning_categories_id_foreign` FOREIGN KEY (`traning_categories_id`) REFERENCES `traning_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `traning_categories`
--
ALTER TABLE `traning_categories`
  ADD CONSTRAINT `traning_categories_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `traning_orders`
--
ALTER TABLE `traning_orders`
  ADD CONSTRAINT `traning_orders_tranings_id_foreign` FOREIGN KEY (`tranings_id`) REFERENCES `tranings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `traning_orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_assessments`
--
ALTER TABLE `user_assessments`
  ADD CONSTRAINT `user_assessments_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_assessments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
