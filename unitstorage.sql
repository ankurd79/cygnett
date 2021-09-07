-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2021 at 02:00 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitstorage`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_carousel_imaages`
--

CREATE TABLE `brand_carousel_imaages` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sequence` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand_carousel_imaages`
--

INSERT INTO `brand_carousel_imaages` (`id`, `brand_id`, `image`, `text`, `sequence`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 7, '1629355577_anamore-room.jpg', 'Suite Room', '1', 1, 1, '2021-06-07 23:56:00', 1, '2021-08-21 17:59:03'),
(2, 7, '1623147462_anamore-img2.jpg', 'image 1', '0', 0, 1, '2021-06-07 23:56:52', 1, '2021-08-21 17:59:03'),
(3, 7, '1629355577_anamore-dining.jpg', 'Restaurant', '2', 1, 1, '2021-06-07 23:56:52', 1, '2021-08-21 17:59:03'),
(4, 7, '1629355577_anamore-spa.jpg', 'Spa', '3', 1, 1, '2021-06-07 23:56:52', 1, '2021-08-21 17:59:03'),
(35, 11, '1629798367_inn-room1.jpg', 'Suite Room', '2', 1, 1, '2021-08-24 15:16:07', NULL, NULL),
(5, 8, '1629543455_ayurvyaas-birdseye.jpg', 'Birds Eye View', '1', 1, 1, '2021-06-08 00:02:14', 1, '2021-08-25 17:28:07'),
(6, 8, '1629356659_ayurvyaas-room.jpg', 'Suite Room', '2', 1, 1, '2021-06-08 00:02:14', 1, '2021-08-25 17:28:07'),
(7, 8, '1623138648_ayurvyaas-img3.jpg', 'Spa', '3', 1, 1, '2021-06-08 00:02:14', 1, '2021-08-25 17:28:07'),
(8, 9, '1629358523_1623147462_anamore-img1.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 13:09:51', 1, '2021-08-24 15:10:38'),
(9, 9, '1629798038_park-room.jpg', 'Suite Room', '2', 1, 1, '2021-06-08 13:09:51', 1, '2021-08-24 15:10:38'),
(10, 9, '1629543017_cygnett-park-cafe.jpg', 'Cafe', '3', 1, 1, '2021-06-08 13:09:51', 1, '2021-08-24 15:10:38'),
(11, 10, '1623138326_brand-details-img1.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 13:15:26', 1, '2021-08-20 15:02:09'),
(12, 10, '1623148535_cygnett-resort-img2.jpg', 'Suite Room', '2', 1, 1, '2021-06-08 13:15:26', 1, '2021-08-20 15:02:09'),
(13, 10, '1629366909_resort-dining.jpg', 'Dining', '3', 1, 1, '2021-06-08 13:15:26', 1, '2021-08-20 15:02:09'),
(14, 11, '1629540785_cygnett-inn-exterior.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 13:31:12', 1, '2021-08-24 15:16:07'),
(15, 11, '1629798367_inn-room1.jpg', 'Suite Room', '2', 0, 1, '2021-06-08 13:31:12', 1, '2021-08-24 15:16:07'),
(16, 11, '1629367562_inn-dining.jpg', 'Dining', '3', 1, 1, '2021-06-08 13:31:12', 1, '2021-08-24 15:16:07'),
(17, 12, '1629540609_cygnett-style-exterior1.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 13:35:47', 1, '2021-08-23 11:54:45'),
(18, 12, '1629540609_cygnett-style-room1.jpg', 'Suite Room', '2', 1, 1, '2021-06-08 13:35:47', 1, '2021-08-23 11:54:45'),
(19, 12, '1623139547_brand-details-img3.jpg', 'Dining', '3', 1, 1, '2021-06-08 13:35:47', 1, '2021-08-23 11:54:45'),
(20, 13, '1623149030_cygnettresidences-img1.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 13:40:24', 1, '2021-08-20 15:31:26'),
(21, 13, '1623139824_brand-details-img2.jpg', 'Suite Room', '2', 1, 1, '2021-06-08 13:40:24', 1, '2021-08-20 15:31:26'),
(22, 13, '1623139824_brand-details-img3.jpg', 'Dining', '3', 1, 1, '2021-06-08 13:40:24', 1, '2021-08-20 15:31:26'),
(23, 14, '1629539741_style-by-cygnett-exterior.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 13:45:02', 1, '2021-08-23 12:02:49'),
(24, 14, '1629539741_style-by-cygnett-room.jpg', 'Superior Room', '2', 1, 1, '2021-06-08 13:45:02', 1, '2021-08-23 12:02:49'),
(25, 14, '1623140103_brand-details-img3.jpg', 'Dining', '3', 1, 1, '2021-06-08 13:45:03', 1, '2021-08-23 12:02:49'),
(26, 15, '1629539187_cygnotel-exterior.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 14:15:11', 1, '2021-08-21 15:16:27'),
(27, 15, '1629539187_cygnotel-room.jpg', 'Superior Room', '2', 1, 1, '2021-06-08 14:15:11', 1, '2021-08-21 15:16:27'),
(28, 15, '1623142154_brand-details-img3.jpg', 'Dining', '3', 1, 1, '2021-06-08 14:15:11', 1, '2021-08-21 15:16:27'),
(29, 16, '1629542859_cozzet-exterior.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 14:29:48', 1, '2021-08-25 17:28:32'),
(30, 16, '1629542859_cozzet-room.jpg', 'Suite Room', '2', 1, 1, '2021-06-08 14:29:48', 1, '2021-08-25 17:28:32'),
(31, 16, '1623142928_brand-details-img3.jpg', 'Dining', '3', 1, 1, '2021-06-08 14:29:48', 1, '2021-08-25 17:28:32'),
(32, 17, '1623150702_elect-img1.jpg', 'Hotel Exterior', '1', 1, 1, '2021-06-08 14:38:30', 1, '2021-08-25 17:28:49'),
(33, 17, '1629542399_elect-room.jpg', 'Suite Room', '2', 1, 1, '2021-06-08 14:38:30', 1, '2021-08-25 17:28:49'),
(34, 17, '1629542399_elect-dining.jpg', 'Dining', '3', 1, 1, '2021-06-08 14:38:30', 1, '2021-08-25 17:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `brand_category`
--

CREATE TABLE `brand_category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand_category`
--

INSERT INTO `brand_category` (`id`, `category`, `text`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(2, 'Upscale', 'For our upscale brand offering a hotel stay is much more than that; it is an experience and a truly exceptional one. Characterized by its refined elegance with elevated amenities. Be it the luxuriantly comfortable accommodation or the wide range of premium facilities delivered by warm.', 1, 1, '2021-06-01 20:52:36', 1, '2021-08-09 11:49:15'),
(3, 'Lifestyle', 'For lifestyle brand  Ayurvyaas -an integrated life style &amp; wellness  brand   with the natural atmospheres , elevated amenities, full-service accommodations, and Cygnetture service.Guests who come to Ayurvyaas for holidays have different aims and varying lengths of duration, depending on their wellness needs at the time. \r\nOur diverse resort environment consisting to cater to both lifestyle and wellness is the ideal location for our guest to unwind.', 1, 1, '2021-06-07 15:25:36', 1, '2021-08-09 11:50:01'),
(4, 'Midscale', 'Discover the midscale business hotels that designed &amp; space planning are Contemporary, Welcoming, Assuring  to create distinctive spaces that invite guest to immerse enjoy and reconnect  with vibrant rooms , smart amenities ,comfortable accommodations and  cutting edge technology, and investors interested in our highest growth  in the  midscale sector.', 1, 1, '2021-06-07 15:25:50', 1, '2021-08-09 11:50:30'),
(5, 'Budget', 'A product of the remarkable synergy between the excitement of contemporary design and facilities. Our Budget Brand  options catering to the rapidly growing segment of cost-conscious travelers providing them a dependable choice of accommodations  that assures comfort and efficient service. Economy only in cost not in quality. ', 1, 1, '2021-06-07 15:25:59', 1, '2021-08-09 11:51:00'),
(6, 'Apartment', 'Offering short and long stay options customized to suit configurations with kitchens, and business-oriented amenities your requirements, Our apartment &amp; Villa brand provide a home made-to-order. The freedom to decide the length of the stay and comfort of a home with the convenience of hotel services.', 1, 1, '2021-06-07 15:26:38', 1, '2021-08-09 11:51:32'),
(7, 'Premium Economy', 'Our premium economy brand  is frugal in its prices but extravagant in its offering. There are no compromises in great hospitality and  welcome you with its vibrant , fresh  &amp;  bold design. We  provide our business travelers hi-speed WiFi, Cyber Kiosk &amp; Coworking space , GOSSIF  Caf&eacute;-a resto-bar , an efficient meeting room, a  gym and laundry service , free breakfast and friendly services.', 1, 1, '2021-06-07 15:27:03', 1, '2021-08-09 11:52:17'),
(8, 'Economy', 'Our economy brand STYLE By Cygnett welcome you with its stylized contemporary design that delight the next-gen travelers.', 1, 1, '2021-06-07 15:27:16', 1, '2021-08-09 11:52:57'),
(9, 'Value', 'Our value brand a  concept of redefine  economy hotel brand enable our conversion &amp; franchisees to cater a  more efficient and  enhanced Guest experience to enjoy a convenient, simple and smart stay for the value-oriented travelers.', 1, 1, '2021-06-07 15:27:30', 1, '2021-08-09 11:53:35'),
(10, 'ELECT - Collection', 'Displaying Elect hotel, a hand picked collection of upscale &amp; midscale hotels and resorts offering a Cygnuttere experience. ', 1, 1, '2021-06-07 15:27:39', 1, '2021-08-11 14:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_admin`
--

CREATE TABLE `cyg_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_admin`
--

INSERT INTO `cyg_admin` (`id`, `email`, `password`, `is_active`) VALUES
(1, 'admin@cygnetthotels.com', '$2y$10$WtHeCVJr1LI.hmpe5fbW9.g83actuLG8UclYzTwxBt2jM/j5MPZWu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_bed_types`
--

CREATE TABLE `cyg_bed_types` (
  `id` int(11) NOT NULL,
  `bed_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_bed_types`
--

INSERT INTO `cyg_bed_types` (`id`, `bed_type`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(4, 'King Bed', 1, '2021-05-21 13:22:41', 1, NULL, NULL),
(5, 'Twin Bed', 1, '2021-05-21 13:29:27', 1, NULL, NULL),
(6, 'Double Bed', 1, '2021-05-21 13:31:04', 1, NULL, NULL),
(7, 'Queen Bed', 1, '2021-07-22 15:04:45', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_brands`
--

CREATE TABLE `cyg_brands` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `brand_category` int(11) NOT NULL,
  `brand_tagline` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `brand_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `logo_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secondary_logo` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_styling` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `brand_video` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foot_note` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_intro` text COLLATE utf8_unicode_ci,
  `is_active` tinyint(1) DEFAULT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `listimg` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `infographic` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdf` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_intro` text COLLATE utf8_unicode_ci NOT NULL,
  `sequence` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_brands`
--

INSERT INTO `cyg_brands` (`id`, `parent_id`, `brand_category`, `brand_tagline`, `brand_name`, `meta_title`, `meta_description`, `meta_keywords`, `description`, `logo_image`, `secondary_logo`, `brand_styling`, `brand_video`, `foot_note`, `home_image`, `home_intro`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`, `listimg`, `infographic`, `pdf`, `short_intro`, `sequence`) VALUES
(5, 0, 0, 'where the booking pays', 'Cygnett', '', '', '', '', '1619078451_cygnett.png', '1619078451_cygnett.png', 'fdfdfdf', '', '', '1629892635_1626872672_home-brands-cygnett.jpg', 'Cygnett Hotels and Resorts Pvt. Ltd. (CH&amp;RPL) is a young, progressive, and tech-savvy, international award-winning hotel Company responsive to the demands of a metamorphosing world. The multi-brand portfolio having a multidirectional approach gives it the edge to cater to the rapidly changing hotel industry on the founding tenets of hospitality, quality, comfort, and unique Cygnetture services.', 1, '2021-03-24 11:54:06', 1, '2021-08-25 17:27:15', 1, '', NULL, NULL, 'Cygnett Hotels and Resorts is as progressive and tech savvy company with 35 Hotels in 33 locations, across 2 countries. The multi-brand portfolio and multidirectional approach gives it the edge to cater...', 1),
(7, 5, 2, 'ELEGANT | DISCERNING | INSPIRING', 'Anamore', 'Anamore - Upscale Hotel Brand by Cygnett Hotels &amp; Resorts ', 'Anamore  is the upscale brand of Cygnett Hotels &amp; Resorts. At the Anamore, it is beyond a hotel stay\r\n', '', '&lt;p&gt;Anamore&amp;nbsp; is the upscale brand of Cygnett&amp;nbsp;&lt;span style=&quot;font-size: 1rem;&quot;&gt;Hotels &amp;amp; Resorts&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;. At the Anamore, it is beyond a hotel stay; it is an experience and a truly exceptional one. Characterized by its refined elegance, every aspect of the hotel is imbued with a dose of the extraordinary. Be it the luxuriantly comfortable accommodation or the wide range of premium facilities delivered by warm, attentive, and personalized service, Anamore creates memories for its guests.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;The essence of this brand reflects through its fundamental elements, &lsquo;Elegant, Discerning, &amp;amp; Inspiring\'. These hotels feature in-room cutting-edge technology enabling every traveler to discover a space where they can make themselves comfortable, relax, and enjoy. The tempting options of well-balanced gourmet food in its bar &amp;amp; restaurant outlets with the food and beverage concept make a winning difference.&lt;/p&gt;&lt;p&gt;To end the day in the most dynamic way to relaxation, every guest has access to the large swimming pool, health club, and spa facilities where Business and Leisure travelers can improve their fitness.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Elegant.&lt;/b&gt;&lt;br&gt;Every Anamore embodies elegant grandeur in its architecture and interior design. This resonates in the rooms that are designed on the tenets of uncompromising comfort and pleasure. Elegance is not a quality but a state of mind, especially for the staff that aims to provide impeccable service with special attention paid to quick response time, efficient problem resolution, and guest engagement.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Discerning.&lt;/b&gt;&lt;br&gt;The facilities offered at any Anamore are chosen carefully to adhere to the high standards of a discerning mind. Every need and desire of the guest is accounted for and meticulously fulfilled. Be it the spa with a range of relaxing treatments that invoke a bit of Shangri La amidst the madness of modern existence; the health club that is well-equipped to satisfy the most particular health enthusiast; and the business center and conference facilities that boast of the best equipment and support.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Inspiring.&lt;/b&gt;&lt;br&gt;Many hotels please, many gratify, but very few inspire. The Anamore inspires trust, loyalty, and patronage. Maintaining consistently high standards of quality and service.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;b&gt;Positioning:&lt;/b&gt;&lt;br&gt;Full Service, Upscale, Five-star hotels with premium amenities.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Customer Profile:&lt;/b&gt;&lt;br&gt;Business and leisure travelers sensitive to quality and well-defined taste.&lt;/p&gt;&lt;p&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/b&gt;Primary and Secondary Cities, State Capital, Airport, Suburban, and Convention Locations.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Design Style:&lt;/b&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size:11.0pt;line-height:\r\n115%;font-family:&quot; arial&quot;,sans-serif;mso-fareast-font-family:arial;color:#0e101a;=&quot;&quot; mso-ansi-language:en;mso-fareast-language:en-in;mso-bidi-language:ar-sa&quot;=&quot;&quot;&gt;Elegant\r\nand Contemporary design.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;Best of local character, charm, and aesthetic with the high international standards of hospitality.&lt;/p&gt;&lt;p&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size:11.0pt;line-height:115%;font-family:&quot; arial&quot;,sans-serif;=&quot;&quot; mso-fareast-font-family:arial;color:#0e101a;mso-ansi-language:en;mso-fareast-language:=&quot;&quot; en-in;mso-bidi-language:ar-sa&quot;=&quot;&quot;&gt;Key Objective&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing exceptional experience with a focus on high standards of comfort, service, and facilities.&lt;br&gt;*****&lt;/p&gt;', '1628835844_anamore-new-logo.jpg', '1623086231_enamore-details-logo.jpg', 'anamore', '', '', '1629355577_anamore-home.jpg', '', 1, '2021-06-07 16:47:17', 1, '2021-08-21 17:59:03', 1, '1629451043_anamore-home.jpg', '1623666624_enamore-brand-pillar.png', '1623064637_Neft Form..pdf', 'Anamore  is the upscale brand of Cygnett Hotels &amp; Resorts. At the Anamore, it is beyond a hotel stay; it is an experience and a truly exceptional one. Characterized by its refined elegance, every aspect of the hotel is imbued with a dose of the extraordinary.', 0),
(8, 0, 3, 'An Integrated Lifestyle And Wellness Solution', 'Ayurvyaas', 'Ayurvyaas - An Integrated Lifestyle And Wellness Solution  | Cygnett Hotels &amp; Resorts ', 'To bestow the benefits of Ayurveda that perfectly aligns the diameter of one\'s body\'s chakras is the ultimate aim of the wellness retreat, Ayurvyaas.', '', '&lt;p&gt;To bestow the benefits of Ayurveda that perfectly aligns the diameter of one\'s body\'s chakras is the ultimate aim of the wellness retreat, Ayurvyaas. Bringing balance to its guests\' lifestyle through traditionally trusted and proven therapies prescribed after a detailed consultation with our in-house masters of Ayurveda and contemporary techniques, the brand stands true to its spirit and redefining lifestyle with Yoga and Vedanta combined with true wellness experiences and connecting together body, mind and soul.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Wellness&lt;/b&gt;&lt;br&gt;Ayurvyaas is a haven to recharge the body and senses to gear up afresh to achieve life-changing goals. It\'s a transformative destination that elevates the guest\'s perspective towards life and living. Our in-house experts in Ayurveda, Naturopathy, healing&nbsp; and fitness will make your cure.&lt;/p&gt;&lt;p&gt;The five-star property houses meditation dens, customized spas treatments, a relaxation center, open and natural spaces for yoga. The Menu especially curated for healthy and nutritious meals is available in its all-day dining and specialty restaurants.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Lifestyle&nbsp;&lt;/b&gt;&lt;br&gt;The integrated lifestyle and wellness solution, Ayurvyaas, offers its guests premium spaces with spectacular views combined with the supreme luxury and exceptional hospitality one has ever experienced. With specialist staff and upscale facilities, the brand resonates the global character.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Upscale, full-service 5-star Wellness &amp; Lifestyle Resort located.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Travelers seeking a getaway to rejuvenate and looking for healthcare remedies via traditional &amp; ancient Vedic practices.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/span&gt;Locations in the tranquil Himalayan foothills or seashore, beautiful surroundings, extensive area with lake or big waterbody and weather-specific environmental in Suburban inclusive of Hill Stations, Near Beaches, Wildlife Sanctuaries, and captivating, serene locations&lt;span style=&quot;font-size: 1rem;&quot;&gt;.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Design Style:&lt;/span&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; arial&quot;,sans-serif;mso-fareast-font-family:arial;color:#0e101a;=&quot;&quot; mso-ansi-language:en;mso-fareast-language:en-in;mso-bidi-language:ar-sa&quot;=&quot;&quot; style=&quot;font-size: 11pt; line-height: 16.8667px;&quot;&gt;An Integrated Lifestyle &amp; Wellness Solution.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;A complete wellness solution for physical, cognitive &amp; spiritual healing using a holistic approach.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; arial&quot;,sans-serif;=&quot;&quot; mso-fareast-font-family:arial;color:#0e101a;mso-ansi-language:en;mso-fareast-language:=&quot;&quot; en-in;mso-bidi-language:ar-sa&quot;=&quot;&quot; style=&quot;font-size: 11pt; line-height: 16.8667px;&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Making people connect to the journey of wellness &amp; nature.&lt;/p&gt;', '1623088995_ayurvyaas.jpg', '1623088995_ayurvyaas.jpg', 'ayurvyaas', '', '', '1629892687_1626872965_home-brands-ayurvyaas.jpg', 'Ayurvyaas is a Wellness and Lifestyle Brand where we have integrated Wellness &amp; Ayurvedic Rejuvenation Programs to cater to both lifestyle and wellness for our guests to unwind.', 1, '2021-06-07 23:33:15', 1, '2021-08-25 17:28:07', 1, '1628235126_ayurvyaas1.jpg', '1623666795_ayurvyaas-brand-pillar.png', '', 'Ayurvyaas brings balance to its guests\' lifestyle through traditionally trusted and proven therapies prescribed after a detailed consultation with our in-house masters of Ayurveda and contemporary techniques.', 2),
(9, 5, 4, 'Contemporary | Welcoming | Assuring', 'Cygnett Park', 'Cygnett Park Hotels | Midscale Business Hotels in India', 'Cygnett Park Hotels are midscale business hotels with adroit space planning. The Cygnett Park hotels embody this unofficial dictum by providing services par excellence at a reasonable price.', '', '&lt;p&gt;Cygnett Park Hotels are midscale business hotels with adroit space planning. These four-stars are designed as Contemporary, Welcoming, &amp; Assuring to create distinctive spaces that invite guests to immerse, enjoy and reconnect with vibrant rooms &amp; chic amenities, all-day dining, recreation bar, pool, and fitness center. For hotels, the mark of truly great hospitality is the ability to make anyone who walks in feel cherished, not as a customer but as a guest. The Cygnett Park hotels embody this unofficial dictum by providing services par excellence at a reasonable price. Its au courant character is perfectly offset by the emphasis on good, old-fashioned, warm service.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Contemporary.&lt;/b&gt;&lt;br&gt;Designed to appeal to the cosmopolitan traveler, Cygnett Park believes in staying ahead of the curve. The rooms offer carefully selected modern amenities anticipating every need of the guest. The spa and the health club are well-equipped to provide services and treatments adhering to high international standards.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Welcoming.&lt;/b&gt;&lt;br&gt;The basic yet oft-forgotten tenet of hospitality is warm, personalized service. Cygnett Park ensures that every guest knows they are valued. The friendly and ever-attentive staff is committed to extending service that makes the entire experience of staying at the hotel a pleasurable and memorable one.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Assuring.&lt;/b&gt;&lt;br&gt;A guest may be easy to attract; a patron must be earned. With a strong base of values that are lived and not just touted, Cygnett Park inculcates consistency, quality, service, and a healthy dose of integrity in the fabric of every establishment, from the staff to the processes and facilities.&lt;br&gt;&lt;/p&gt;\r\n\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Full Service, Mid-scale, Four-star hotels with premium amenities&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Business and leisure travelers are sensitive to quality and have a well-defined taste.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/span&gt;Locations in Capitals and Primary &amp; Secondary Cities; Airports, Urban, Suburban &amp; Key Business Cities.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Design Style:&lt;/span&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Contemporary, Welcoming, Assuring&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;Best of local character, charm, and aesthetic with the high international standards of hospitality.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing exceptional experience with a focus on high standards of comfort, service, and facilities.&lt;/p&gt;', '1623089417_bd-cygnett-park.png', '1623089417_bd-cygnett-park.png', 'cygnett-park', '', '', NULL, '', 1, '2021-06-07 23:40:17', 1, '2021-08-24 15:10:38', 1, '1629450808_cygnett-park-home.jpg', '1623666848_cygnett-park-brand-pillar.png', '', 'Cygnett Park Hotels are midscale business hotels with adroit space planning. These four-stars are designed as Contemporary, Welcoming, &amp;  Assuring to create distinctive spaces that invite guests to immerse, enjoy and reconnect with vibrant rooms &amp; chic amenities, all-day dining, recreation bar, pool, and fitness center.', 0),
(10, 5, 4, 'Unwinding | Refreshing | Rejuvenating', 'Cygnett Resort', 'Cygnett Resorts - Refreshing &amp; Rejuvenate at Cygnett Resorts', 'Take a break from the humdrum and check into a whole new way to relax and rejuvenate at Cygnett Resorts. ', '', '&lt;p&gt;Take a break from the humdrum and check into a whole new way to relax and rejuvenate at Cygnett Resorts. We are all about helping you re-experience your favorite getaways in settings and ambiances that are refreshingly different, out-of-the-world indulgences and delights that don&rsquo;t cost the earth, and hospitality that comes straight from the heart.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Unwinding stays.&lt;/b&gt;&lt;br&gt;Give in to a new language of luxury that expresses itself in warmly appointed, hygienic, and temperature-controlled rooms &amp; suites. That takes care of you and your relishes &ndash; from manicured spaces to inviting decors to warm linen to world-class showers to prompt hospitality - and plenty more.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Refreshing surprises.&lt;/b&gt;&lt;br&gt;Experience the joys of serendipity as we make you smile at every step and turn. Be it the easy check-in, complimentary breakfast, free Wi-Fi, in-room dining, laundry, valet, business and banqueting opportunities, hi-tech security, excursion planning, and much more.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Rejuvenating luxury.&lt;/b&gt;&lt;br&gt;Cygnett Resorts is all about never before luxury at never before prices! So brace for a truly unforgettable experience as we lay bare a wide choice of indulgences for you and your family. From gourmet wines and dines to a rejuvenating spa to our inviting swimming pool to a multi-gym to an agile staff that stands by to answer your beck and call, 24X7.&lt;br&gt;&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Full service, Midscale hotel&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Travelers who want a cost-effective hotel option that assures comfort and efficient service.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/span&gt;Locations in Primary &amp; Secondary Cities, Capitals, States, Airport, Tier 2 and Tier 3 Cities or Convention Locations&nbsp;.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Design Style:&lt;/span&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Connected / Flexible / Contemporary&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;Fresh &amp; modern aesthetic combined with attentive service, next-generation technology &amp; comfortable rooms; economy reflects in cost, not in quality.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Catering to the rapidly growing segment of cost-conscious travelers &amp; hassle-free accommodation with great service attendants.&lt;/p&gt;', '1623089599_bd-cygnett-resort.png', '1623089599_bd-cygnett-resort.png', 'cygnett-resort', '', '', NULL, '', 1, '2021-06-07 23:43:19', 1, '2021-08-20 15:02:09', 1, '1623089599_bd-brands-img2.jpg', '1623667004_cygnett-resort-brand-pillar.png', '', 'Take a break from the humdrum and check into a whole new way to relax and rejuvenate at Cygnett Resorts. We are all about helping you re-experience your favorite getaways in settings and ambiances that are refreshingly different, out-of-the-world indulgences and delights that don\'t cost the earth, and hospitality that comes straight from the heart.', 0),
(11, 5, 5, 'Efficient | Comforting | Rewarding', 'Cygnett Inn', 'Cygnett Inn Hotels - Efficient, Comforting &amp; Rewarding  at Cygnett Inn', 'Cygnett Inn is a full-service, budget hotel that practices economy in its prices alone', '', '&lt;p&gt;Good things come easy, and they are pocket-friendly. Sounds unfamiliar? No, you haven&rsquo;t got it wrong; it&rsquo;s just that Cygnett Inn has got it right. A product of the remarkable synergy between the excitement of contemporary design and facilities and the timelessness of classic service ethic, Cygnett Inn is a full-service, budget hotel that practices economy in its prices alone!&lt;/p&gt;&lt;p&gt;&lt;b&gt;Efficient.&lt;/b&gt;&lt;br&gt;Cygnett Inn makes a promise to its guests to deliver quality, facilities, and service. Efficiency in operations is ensured by time-bound procedures, standardized processes, and, most importantly, staff that takes pride in serving with meticulous attention.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Comforting.&lt;/b&gt;&lt;br&gt;Cygnett Inn invites guests to take comfort in the assurance that the quality and consistency of their experiences are of paramount importance. The comfort of rooms, availability of novel facilities, and the high standard of service can always be relied on.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Rewarding.&lt;/b&gt;&lt;br&gt;Patronage to Cygnett Inn is valued and care is taken to let the gratitude for it be evident not only by the continuous enhancement of standards but also in the assurance that a stay at Cygnett Inn will be easy on the pocket.&lt;br&gt;&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Full Service, Budget Hotel&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Travelers who want a cost-effective hotel with assured comfort and efficient service.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/span&gt;Locations in Primary &amp; Secondary Cities, Capitals, States, Airport, Tier 2 and Tier 3 Cities or Convention Locations.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Design Style:&lt;/span&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Connected / Flexible / Contemporary&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;Fresh and modern aesthetics, comfortable rooms with attentive service; economy reflects in cost, not in quality.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing a dependable choice to cost-conscious travelers with comfort, no hassles, and great service.&lt;/p&gt;', '1623089817_cygnett-inn.jpg', '1623089817_cygnett-inn.jpg', 'cygnett-inn', '', '', NULL, '', 1, '2021-06-07 23:46:57', 1, '2021-08-24 15:16:07', 1, '1628234724_cygnett-inn1.jpg', '1623667151_cygnett-inn-brand-pillar.png', '', 'Good things come easy, and they are pocket-friendly. Sounds unfamiliar? No, you haven&rsquo;t got it wrong; it&rsquo;s just that Cygnett Inn has got it right. A product of the remarkable synergy between the excitement of contemporary design and facilities and the timelessness of classic service ethic, Cygnett Inn is a full-service, budget hotel that practices economy in its prices alone!', 0),
(12, 5, 5, 'Stay Smart | Stay Safe | Stay Satisfied', 'Cygnett Style', 'Cygnett Style Hotels - Minimalist, Reliable &amp; True Value at Cygnett Style', 'Providing maximum value at minimum rates, a stay at a Cygnett Style holds a guarantee of consistency, high quality, and satisfaction. ', '', '&lt;p&gt;Cygnett Style has navigated the suspicious perceptions of the disreputable world economy hotels to redefine economy simply as very affordable comfort. Providing maximum value at minimum rates, a stay at a Cygnett Style holds a guarantee of consistency, high quality and satisfaction. You can count on us!&lt;/p&gt;&lt;p&gt;&lt;b&gt;Stay Smart.&nbsp;&lt;/b&gt;&lt;br&gt;An art mastered by those who understand the vital distinction between basic comfort and bare bones, minimalism reinvents itself at Cygnett Style. Every guest is assured of the facilities essential for a comfortable stay, while strictly adhering to the quality without compromise directive.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Stay Safe.&lt;/b&gt;&lt;br&gt;Consistency in quality and service is the hallmark of all Cygnett Style Hotels This is achieve by sharp focus of standardization of process, stringent quality control and the service spirit that marks the difference between a mere motel stay an a great experience.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Stay Satisfied.&lt;/b&gt;&lt;br&gt;The creation of value is Integral to every Cygnett Style. Indeed every Cygnett Style team is dedicated to ensure that every guest experience far exceeds the expectations from an economy hotel in every way except rates. Guests are encouraged to count the ways in which they have enjoyed their stays, rather than the money in their wallets..&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Non Standardized, Limited Service, Economy Hotel.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Value Conscious Travellers, Business Travellers, Leisure Tourists, Students and Young Professionals.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Design Style:&lt;br&gt;&lt;/span&gt;&lt;font color=&quot;#0e101a&quot; face=&quot;Arial, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 14.6667px;&quot;&gt;Modern / Flexible / contemporary&lt;/span&gt;&lt;span style=&quot;font-size: 11pt;&quot;&gt;&nbsp;&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;True Value for money with comfort and cleanliness.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing maximum value at low prices without compromising on services.&lt;/p&gt;\r\n', '1623090006_cygnett-style.jpg', '1623090006_cygnett-style.jpg', 'cygnett-style', '', '', NULL, '', 1, '2021-06-07 23:50:06', 1, '2021-08-23 11:54:45', 1, '1629699885_style-by-cygnett-home.jpg', '', '', 'Cygnett Style has navigated the suspicious perceptions of the disreputable world economy hotels to redefine economy simply as very affordable comfort. Providing maximum value at minimum rates, a stay at a Cygnett Style holds a guarantee of consistency, high quality, and satisfaction. You can count on us!', 0),
(13, 5, 6, 'Flexible | Convenient | Gratifying', 'Cygnett Residences', 'Cygnett Residences - Flexible, Convenient &amp; Gratifying  at Cygnett Residences', 'Cygnett Residences has to offer, The comfort and convenience of a home combined with the service, efficiency, and high maintenance standards of a hotel. ', '', '&lt;p&gt;Imagine a home that always has everything you need, is impeccably kept, and does not require you to lift a finger. As utopian as it may sound, it is just what Cygnett Residences has to offer: The comfort and convenience of a home combined with the service, efficiency, and high maintenance standards of a hotel. A home without any hassle. On consideration, that really is our idea of utopia, or is it not?&lt;/p&gt;&lt;p&gt;&lt;b&gt;Flexible.&lt;/b&gt;&lt;br&gt;Offering short and long-stay options customized to suit your requirements, Cygnett Residences provide a home made-to-order. The freedom to decide the length of the stay and the facilities desired lies entirely with the guests; only the fulfillment and satisfaction are the responsibility of Cygnett Residences.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Convenient.&lt;/b&gt;&lt;br&gt;A signature Cygnett assurance, convenience is prioritized at Cygnett Residences: the convenience of location, provision of amenities, and efficient operations. Further, the team at Cygnett Residences is always just a call away to assist guests with anything that they may require.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Gratifying.&nbsp;&lt;/b&gt;&lt;br&gt;Cygnett Residences combines the best of professional hospitality with the unmatched comfort of a home to create a space that offers space, freedom &amp; convenience in one winning and very affordable package.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Limited Service, Midscale, Serviced Apartments.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Leisure or business travelers looking for reliable options with convenience and good facilities.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/span&gt;Business or Industrial Hubs, Primary &amp; Secondary Cities, &amp; Residential Destinations plus Resort Locations.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Design Style:&lt;/span&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Flexible and Convenient for business and leisure, short and long stay.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;Homes without hassles &ndash; space, freedom, comfort, and flexibility.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing short and long-stay options offering comforts of home with quality hotel amenities.&lt;/p&gt;\r\n', '1623667969_cygnett-residences.jpg', '1623667969_cygnett-residences.jpg', 'cygnett-residences', '', '', NULL, '', 1, '2021-06-08 12:44:13', 1, '2021-08-20 15:31:26', 1, '1623136453_cygnett-residences-listing.jpg', '1623667550_cygnett-residences-brand-pillar.png', '', 'Imagine a home that always has everything you need, is impeccably kept, and does not require you to lift a finger. As utopian as it may sound, it is just what Cygnett Residences has to offer: The comfort and convenience of a home combined with the service, efficiency, and high maintenance standards of a hotel. A home without any hassle. On consideration, that really is our idea of utopia, or is it not?', 0),
(14, 5, 8, 'Minimalist |  Reliable  | True Value', 'Style By Cygnett', 'Minimalist, Reliable &amp; True Value at Style By Cygnett', 'STYLE By Cygnett welcomes you with its stylised contemporary design. The  rooms deliver an easy-going &amp; playful experience with lively environment with a relaxed social space which gives you buzzing scenes.', '', '&lt;p&gt;STYLE By Cygnett has navigated the suspicious perceptions of the disreputable world economy hotels to redefine economy simply as very affordable comfort.&lt;/p&gt;&lt;p&gt;Providing maximum value at minimum rates, a stay at a STYLE By Cygnett holds a guarantee of consistency, high quality and satisfaction. You can count on us!&lt;/p&gt;&lt;p&gt;STYLE By Cygnett welcome you with its stylized contemporary design. The&nbsp; rooms deliver an easy-going &amp; playful experience with lively environment with a relaxed social spaces which gives you buzzing scenes.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Minimalist.&lt;/b&gt;&lt;br&gt;An art mastered by those who understand the vital distinction between basic comfort and bare bones, minimalism reinvents itself at STYLE By Cygnett.&nbsp; Every guest is assured of the facilities essential for a comfortable stay, while also strictly adhering to the quality-without-compromise directive.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Reliable.&lt;/b&gt;&lt;br&gt;Consistency in quality and service is the hallmark of all STYLE By Cygnett. This is achieved by the sharp focus on standardization of processes, stringent quality control and the service spirit that marks the difference between a mere hotel stay and a great experience.&lt;/p&gt;&lt;p&gt;&lt;b&gt;True Value.&lt;/b&gt;&lt;br&gt;The creation of value is integral to every STYLE By Cygnett. Indeed every STYLE By Cygnett team is dedicated to ensuring that every guest experience far exceeds the expectations from an economy hotel in every way except in rates. Guests are encouraged to count the ways in which they have enjoyed their stays, rather than the money in their wallets.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Standardized, Limited Service, Economy Hotel.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Business Travelers, leisure tourists, students and young professionals.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/span&gt;City Central and urban destinations.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Design Style:&lt;/span&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Stylist contemporary designed.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;True value for money with comfort, cleanliness and quality.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing maximum value at low prices without compromising on quality and services.&lt;/p&gt;', '1623136932_style-by-cygnett.jpg', '1623136932_style-by-cygnett.jpg', 'style-by-cygnett', '', '', NULL, '', 1, '2021-06-08 12:52:12', 1, '2021-08-23 12:02:49', 1, '1629700369_style-by-cygnett-home1.jpg', '1623667713_style-by-cygnett-brand-pillar.png', '', 'STYLE By Cygnett has navigated the suspicious perceptions of the disreputable world economy hotels to redefine economy simply as a very affordable comfort with its stylised contemporary design. You can count on us!', 0),
(15, 5, 7, 'Stay | Work | Cheers', 'Cygnotel', 'Stay, Work &amp; Cheers at Cygnotel\r\n', 'The facilities of our business travelers at CYGNOTEL include hi-speed WiFi, cyber kiosk &amp; coworking space, caf&eacute;-a resto-bar, an efficient meeting room, a gym, and laundry service, complimentary breakfasts, and friendly services.', '', '&lt;p&gt;CYGNOTEL is a premium economy hotel that is frugal in its prices but extravagant in its offering. There are no compromises in great hospitality: CYGNOTEL welcomes you with its vibrant, fresh &amp; bold design. The rooms deliver an elevated stay experience with a lively environment. It\'s smart and comfortable rooms always provide safe &amp; hygienic stays.&nbsp;&lt;/p&gt;&lt;p&gt;The facilities of our business travelers at CYGNOTEL include hi-speed WiFi, cyber kiosk &amp; coworking space, caf&eacute;-a resto-bar, an efficient meeting room, a gym, and laundry service, complimentary breakfasts, and friendly services.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Stay.&nbsp;&lt;/b&gt;&lt;br&gt;Truly wonderful hospitality cannot be measured. Indeed it is believed at CYGNOTEL that it is not very hospitable for a good hotel stay to cost an arm and a leg. It is the worldwide policy at CYGNOTEL to provide great rooms at great rates. And there&rsquo;s nothing subjective about it!&lt;/p&gt;&lt;p&gt;&lt;b&gt;Work.&lt;/b&gt;&lt;br&gt;Business travelers globally rely on CYGNOTEL for modern, and efficient services to match. Negotiated rates are offered to business travelers to make a choice even simpler if that were even needed.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Cheers.&lt;/b&gt;&lt;br&gt;CYGNOTEL is one of the leading hotel brands in its segment for customer satisfaction. It is a desire and an objective that each guest is wholly satisfied with every visit. Guests are encouraged to provide feedback for the constant improvement and evolution of the CYGNOTEL experience.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Positioning:&lt;/span&gt;&lt;br&gt;Premium Economy, Standardized, Limited Service.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Customer Profile:&lt;/span&gt;&lt;br&gt;Cost-conscious corporate and leisure traveler.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/span&gt;Capital City, Central, Airport and Railway Station.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Design Style:&lt;/span&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Vibrant, Fresh &amp; Bold design.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;Global Standard, vibrant, fresh &amp; bold designed rooms with updated in-room technology.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size: 11pt; line-height: 16.8667px; font-family: Arial, sans-serif; color: rgb(14, 16, 26);&quot;&gt;Key Objective&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing prompt, consistent, and friendly service.&lt;/p&gt;', '1623668065_cygnotel-logo.jpg', '1623668065_cygnotel-logo.jpg', 'cygnotel', '', '', NULL, '', 1, '2021-06-08 14:15:11', 1, '2021-08-21 15:16:27', 1, '1628234259_cygotel-brand.jpg', '', '', 'CYGNOTEL is a premium economy hotel that is frugal in its prices but extravagant in its offering. There are no compromises in great hospitality: CYGNOTEL welcomes you with its vibrant, fresh &amp; bold design. The rooms deliver an elevated stay experience with a lively environment. It\'s smart and comfortable rooms always provide safe &amp; hygienic stays. ', 0),
(16, 5, 9, 'A Member Of Cygnett Hotels', 'Cozzet Stay', 'Cozzet Stay by Cygnett Hotels and Resorts\r\n', 'Compare and book best hotel rooms. Enjoy the luxury of hotel stay with good accommodation at affordable prices', '', '&lt;p&gt;Comfortable rooms, convenient location, modern amenities, service par excel&mdash; been there, heard that. Step away from the cookie cutter: think fresh, radical&hellip;and affordable! Cozzet Hotels assures star experiences at budget prices and super affordable. Each hotel has it&rsquo;s own unique story &ndash; a persona unto itself &ndash; that develops a relationship with every guest who walks in, welcoming them home and imploring them to visit again. As with all good things that are here to stay, there is some consistency, where strictly required, and it is assiduously adhered to. So really, why Cozzet?&lt;/p&gt;&lt;p&gt;&lt;b&gt;It&rsquo;s Smart&lt;/b&gt;&lt;br&gt;Where the experienced flourish, the novices perish. Poetry may not be our forte but hospitality certainly is. Every Cozzet Hotel is managed by hospitality professionals who know what they&rsquo;re doing, so you&rsquo;re always in good hands: clean rooms with sparkling floors, crisp linen and essential amenities; good food that always hits the spot; prompt and enthusiastic service; and indispensable conveniences like Wi-Fi, hot showers and ingenious plans to escape work in plentiful supply.&lt;/p&gt;&lt;p&gt;&lt;b&gt;It&rsquo;s Safe&lt;/b&gt;&lt;br&gt;Correction to the statement above: you&rsquo;re always in good and safe hands. With 24 hour security, close circuit TV and secure room locks being just the bare minimum of Cozzet&rsquo;s commitment to your safety, you can rest assured that&hellip;actually you can just rest assured, literally.&lt;/p&gt;&lt;p&gt;&lt;b&gt;It&rsquo;s Sensible&lt;/b&gt;&lt;br&gt;You can check Trip Advisor reviews, frantically ask friends and family for recommendations, Google hotel profiles all day or you can just rely on Cozzet for consistently good experiences. A network of second homes all over the country, if you will. Don&rsquo;t take our word for any of this, try it for yourself. It won&rsquo;t hurt the pocket either &ndash; the best things in life are meant to be free, we&rsquo;re very close.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;b&gt;Positioning:&lt;/b&gt;&lt;br&gt;Non Standardized, Limited Service, Value.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Customer Profile:&lt;/b&gt;&lt;br&gt;Value Conscious Travellers, Business Travellers, Leisure Tourists, Students and Young Professionals.&lt;/p&gt;&lt;p&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;Design Style:&lt;br&gt;&lt;/b&gt;&lt;span style=&quot;font-size: 14.6667px;&quot;&gt;Modern/ Flexible.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;True Value for money with comfort and cleanliness.&lt;/p&gt;&lt;p&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size:11.0pt;line-height:115%;font-family:&quot; arial&quot;,sans-serif;=&quot;&quot; mso-fareast-font-family:arial;color:#0e101a;mso-ansi-language:en;mso-fareast-language:=&quot;&quot; en-in;mso-bidi-language:ar-sa&quot;=&quot;&quot;&gt;Key Objective&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing maximum value at low prices without compromising on services.&lt;br&gt;*****&lt;/p&gt;', '1623668411_cozzet-stay-logo.jpg', '1623668411_cozzet-stay-logo.jpg', 'cozzet-stay', '', '', '1629892712_1626872817_home-brands-cozzet.jpg', 'COZZET Stay  is a fast growing economy value hotel brand and helps the young price conscious travelers make the most of their trip memorable with the comfortable rooms, convenient location, modern amenities, upbeat service  and free breakfast &amp; free WiFi.', 1, '2021-06-08 14:29:48', 1, '2021-08-25 17:28:32', 1, '1628234593_cozzet.jpg', '', '', 'Cozzet Hotels assures star experiences at budget prices and super affordable. Each hotel has it&rsquo;s own unique story &ndash; a persona unto itself &ndash; that develops a relationship with every guest who walks in, welcoming them home and imploring them to visit again.', 3),
(17, 5, 10, 'A Cygnett Collection', 'Elect Hotel', 'A Cygnett Collection at Elect Hotels - Cygnett Hotels &amp; Resorts', 'Elect Hotels - A Cygnett Collection Hotel. Cygnett Hotels and Resorts is an emerging hospitality company with 30 Hotels* in 25 locations, across 2 countries, that is responsive to the demands of a metamorphosing world.', '', '&lt;p&gt;Elect hotel is a collection of (CH&amp;RPL)Cygnett Hotels &amp; Resorts . Presenting Elect hotel&nbsp; is a&nbsp; collection of&nbsp; authentic &amp; unique properties, located in the metro or prestigious key cities and extraordinary leisure resorts locations.&lt;/p&gt;&lt;p&gt;A Cygnett Collection-Elect confine hotels with induvial &amp; different character with a legacy of time. The rooms offer carefully selected modern amenities anticipating every need of the guest. The spa and the health club are well-equipped to provide services and treatments adhering to high international standards.&lt;/p&gt;\r\n&lt;hr&gt;\r\n&lt;h4&gt;&lt;strong&gt;Brand Basics&lt;/strong&gt;&lt;/h4&gt;\r\n&lt;p&gt;&lt;b&gt;Positioning:&lt;/b&gt;&lt;br&gt;Full Service, Mid-scale, Four-star hotels with premium amenities.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Customer Profile:&lt;/b&gt;&lt;br&gt;Business and leisure travelers are sensitive to quality and have a well-defined taste.&lt;/p&gt;&lt;p&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;Locations:&lt;br&gt;&lt;/b&gt;Locations in Capitals and Primary &amp; Secondary Cities; Airports, Urban, Suburban &amp; Key Business Cities and extraordinary leisure resorts locations.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Design Style:&lt;/b&gt;&lt;br&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size:11.0pt;line-height:\r\n115%;font-family:&quot; arial&quot;,sans-serif;mso-fareast-font-family:arial;color:#0e101a;=&quot;&quot; mso-ansi-language:en;mso-fareast-language:en-in;mso-bidi-language:ar-sa&quot;=&quot;&quot;&gt;Authentic&nbsp; and Unique.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Ethos:&lt;/span&gt;&lt;br&gt;Best of local character, authentic&nbsp; and Unique charm, and aesthetic with the high international standards of hospitality.&lt;/p&gt;&lt;p&gt;&lt;b style=&quot;font-size: 1rem;&quot;&gt;&lt;span lang=&quot;EN&quot; style=&quot;font-size:11.0pt;line-height:115%;font-family:&quot; arial&quot;,sans-serif;=&quot;&quot; mso-fareast-font-family:arial;color:#0e101a;mso-ansi-language:en;mso-fareast-language:=&quot;&quot; en-in;mso-bidi-language:ar-sa&quot;=&quot;&quot;&gt;Key Objective&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;:&lt;/span&gt;&lt;br&gt;Providing exceptional experience with a focus on high standards of comfort, service, and facilities.&lt;br&gt;*****&lt;/p&gt;', '1623668511_elect-hotel-logo.jpg', '1623668511_elect-hotel-logo.jpg', 'elect-hotel', '', '', '1629892729_1626873165_home-brands-elect.jpg', 'Elect hotel is a collection of (CH&amp;RPL) Cygnett Hotels &amp; Resorts . Presenting Elect hotel  is a  collection of  authentic &amp; unique properties, located in the metro or prestigious key cities and extraordinary leisure resorts locations', 1, '2021-06-08 14:38:30', 1, '2021-08-25 17:28:49', 1, '1623143310_electhotel-listing.jpg', '', '', 'Elect hotel is a collection of (CH&amp;RPL)Cygnett Hotels &amp; Resorts . Presenting Elect hotel  is a  collection of  authentic &amp; unique properties, located in the metro or prestigious key cities and extraordinary leisure resorts locations.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_brand_banners`
--

CREATE TABLE `cyg_brand_banners` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `banner_image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_banner_image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_brand_banners`
--

INSERT INTO `cyg_brand_banners` (`id`, `brand_id`, `banner_image`, `mobile_banner_image`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(2, 5, '1616650866_16jonny.jpg', '1618219986_box-img2.jpg', 1, 1, '2021-03-25 11:11:06', 1, '2021-08-25 17:27:15'),
(3, 5, '1616650890_16virat-kohli.jpg', '', 0, 1, '2021-03-25 11:11:30', 1, '2021-08-25 17:27:15'),
(4, 7, '1629355577_anamore-topbanner.jpg', '1629355577_anamore-topbanner-mob.jpg', 1, 1, '2021-06-07 22:44:21', 1, '2021-08-21 17:59:03'),
(5, 7, '1623086231_brand-cygnett-resort2.jpg', '1623086231_brand-cygnett-resort1-mob.jpg', 0, 1, '2021-06-07 22:47:11', 1, '2021-08-21 17:59:03'),
(6, 8, '1629356659_ayurvyaas-topbanner.jpg', '1629356659_ayurvyaas-topbanner-mob.jpg', 1, 1, '2021-06-07 23:36:00', 1, '2021-08-25 17:28:07'),
(7, 9, '1629451769_cygnett-park-topimage.jpg', '1629451769_cygnett-park-topimage-mob.jpg', 1, 1, '2021-06-07 23:40:17', 1, '2021-08-24 15:10:38'),
(8, 10, '1629366909_cygnett-resort-topbanner.jpg', '1629366909_cygnett-resort-topbanner-mob.jpg', 1, 1, '2021-06-07 23:43:19', 1, '2021-08-20 15:02:09'),
(9, 11, '1629539841_cygnett-style-topbanner.jpg', '1629539841_cygnett-style-topbanner-mob.jpg', 1, 1, '2021-06-07 23:46:57', 1, '2021-08-24 15:16:07'),
(10, 12, '1629540266_cygnett-style-topbanner1.jpg', '1629540608_cygnett-style-topbanner1-mob.jpg', 1, 1, '2021-06-07 23:50:06', 1, '2021-08-23 11:54:45'),
(11, 13, '1629453686_cygnett-residences-topimage.jpg', '1629453686_cygnett-residences-topimage-mob.jpg', 1, 1, '2021-06-08 13:40:24', 1, '2021-08-20 15:31:26'),
(12, 14, '1623140102_brand-cygnett-resort2.jpg', '1623140102_brand-cygnett-resort1-mob.jpg', 1, 1, '2021-06-08 13:45:02', 1, '2021-08-23 12:02:49'),
(13, 15, '1629539187_cygnotel-topimage.jpg', '1629539187_cygnotel-topimage-mob.jpg', 1, 1, '2021-06-08 14:15:11', 1, '2021-08-21 15:16:27'),
(14, 16, '1623142788_brand-cygnett-resort2.jpg', '1623142788_brand-cygnett-resort1-mob.jpg', 1, 1, '2021-06-08 14:29:48', 1, '2021-08-25 17:28:32'),
(15, 17, '1629541657_elect-topimage.jpg', '1629541657_elect-topimage-mob.jpg', 1, 1, '2021-06-08 14:38:30', 1, '2021-08-25 17:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_brand_key_pointers`
--

CREATE TABLE `cyg_brand_key_pointers` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `label` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(5) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyg_cities`
--

CREATE TABLE `cyg_cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cyg_cities`
--

INSERT INTO `cyg_cities` (`id`, `city`, `state_id`) VALUES
(1, 'North and Middle Andaman', 32),
(2, 'South Andaman', 32),
(3, 'Nicobar', 32),
(4, 'Adilabad', 1),
(5, 'Anantapur', 1),
(6, 'Chittoor', 1),
(7, 'East Godavari', 1),
(8, 'Guntur', 1),
(9, 'Hyderabad', 1),
(10, 'Kadapa', 1),
(11, 'Karimnagar', 1),
(12, 'Khammam', 1),
(13, 'Krishna', 1),
(14, 'Kurnool', 1),
(15, 'Mahbubnagar', 1),
(16, 'Medak', 1),
(17, 'Nalgonda', 1),
(18, 'Nellore', 1),
(19, 'Nizamabad', 1),
(20, 'Prakasam', 1),
(21, 'Rangareddi', 1),
(22, 'Srikakulam', 1),
(23, 'Vishakhapatnam', 1),
(24, 'Vizianagaram', 1),
(25, 'Warangal', 1),
(26, 'West Godavari', 1),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Kameng', 3),
(30, 'Lohit', 3),
(31, 'Lower Subansiri', 3),
(32, 'Papum Pare', 3),
(33, 'Tirap', 3),
(34, 'Dibang Valley', 3),
(35, 'Upper Subansiri', 3),
(36, 'West Kameng', 3),
(37, 'Barpeta', 2),
(38, 'Bongaigaon', 2),
(39, 'Cachar', 2),
(40, 'Darrang', 2),
(41, 'Dhemaji', 2),
(42, 'Dhubri', 2),
(43, 'Dibrugarh', 2),
(44, 'Goalpara', 2),
(45, 'Golaghat', 2),
(46, 'Hailakandi', 2),
(47, 'Jorhat', 2),
(48, 'Karbi Anglong', 2),
(49, 'Karimganj', 2),
(50, 'Kokrajhar', 2),
(51, 'Lakhimpur', 2),
(52, 'Marigaon', 2),
(53, 'Nagaon', 2),
(54, 'Nalbari', 2),
(55, 'North Cachar Hills', 2),
(56, 'Sibsagar', 2),
(57, 'Sonitpur', 2),
(58, 'Tinsukia', 2),
(59, 'Araria', 4),
(60, 'Aurangabad', 4),
(61, 'Banka', 4),
(62, 'Begusarai', 4),
(63, 'Bhagalpur', 4),
(64, 'Bhojpur', 4),
(65, 'Buxar', 4),
(66, 'Darbhanga', 4),
(67, 'Purba Champaran', 4),
(68, 'Gaya', 4),
(69, 'Gopalganj', 4),
(70, 'Jamui', 4),
(71, 'Jehanabad', 4),
(72, 'Khagaria', 4),
(73, 'Kishanganj', 4),
(74, 'Kaimur', 4),
(75, 'Katihar', 4),
(76, 'Lakhisarai', 4),
(77, 'Madhubani', 4),
(78, 'Munger', 4),
(79, 'Madhepura', 4),
(80, 'Muzaffarpur', 4),
(81, 'Nalanda', 4),
(82, 'Nawada', 4),
(83, 'Patna', 4),
(84, 'Purnia', 4),
(85, 'Rohtas', 4),
(86, 'Saharsa', 4),
(87, 'Samastipur', 4),
(88, 'Sheohar', 4),
(89, 'Sheikhpura', 4),
(90, 'Saran', 4),
(91, 'Sitamarhi', 4),
(92, 'Supaul', 4),
(93, 'Siwan', 4),
(94, 'Vaishali', 4),
(95, 'Pashchim Champaran', 4),
(96, 'Bastar', 36),
(97, 'Bilaspur', 36),
(98, 'Dantewada', 36),
(99, 'Dhamtari', 36),
(100, 'Durg', 36),
(101, 'Jashpur', 36),
(102, 'Janjgir-Champa', 36),
(103, 'Korba', 36),
(104, 'Koriya', 36),
(105, 'Kanker', 36),
(106, 'Kawardha', 36),
(107, 'Mahasamund', 36),
(108, 'Raigarh', 36),
(109, 'Rajnandgaon', 36),
(110, 'Raipur', 36),
(111, 'Surguja', 36),
(112, 'Diu', 29),
(113, 'Daman', 29),
(114, 'Central Delhi', 25),
(115, 'East Delhi', 25),
(116, 'New Delhi', 25),
(117, 'North Delhi', 25),
(118, 'North East Delhi', 25),
(119, 'North West Delhi', 25),
(120, 'South Delhi', 25),
(121, 'South West Delhi', 25),
(122, 'West Delhi', 25),
(123, 'North Goa', 26),
(124, 'South Goa', 26),
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5),
(150, 'Ambala', 6),
(151, 'Bhiwani', 6),
(152, 'Faridabad', 6),
(153, 'Fatehabad', 6),
(154, 'Gurgaon', 6),
(155, 'Hissar', 6),
(156, 'Jhajjar', 6),
(157, 'Jind', 6),
(158, 'Karnal', 6),
(159, 'Kaithal', 6),
(160, 'Kurukshetra', 6),
(161, 'Mahendragarh', 6),
(162, 'Mewat', 6),
(163, 'Panchkula', 6),
(164, 'Panipat', 6),
(165, 'Rewari', 6),
(166, 'Rohtak', 6),
(167, 'Sirsa', 6),
(168, 'Sonepat', 6),
(169, 'Yamuna Nagar', 6),
(170, 'Palwal', 6),
(171, 'Bilaspur', 7),
(172, 'Chamba', 7),
(173, 'Hamirpur', 7),
(174, 'Kangra', 7),
(175, 'Kinnaur', 7),
(176, 'Kulu', 7),
(177, 'Lahaul and Spiti', 7),
(178, 'Mandi', 7),
(179, 'Shimla', 7),
(180, 'Sirmaur', 7),
(181, 'Solan', 7),
(182, 'Una', 7),
(183, 'Anantnag', 8),
(184, 'Badgam', 8),
(185, 'Bandipore', 8),
(186, 'Baramula', 8),
(187, 'Doda', 8),
(188, 'Jammu', 8),
(189, 'Kargil', 8),
(190, 'Kathua', 8),
(191, 'Kupwara', 8),
(192, 'Leh', 8),
(193, 'Poonch', 8),
(194, 'Pulwama', 8),
(195, 'Rajauri', 8),
(196, 'Srinagar', 8),
(197, 'Samba', 8),
(198, 'Udhampur', 8),
(199, 'Bokaro', 34),
(200, 'Chatra', 34),
(201, 'Deoghar', 34),
(202, 'Dhanbad', 34),
(203, 'Dumka', 34),
(204, 'Purba Singhbhum', 34),
(205, 'Garhwa', 34),
(206, 'Giridih', 34),
(207, 'Godda', 34),
(208, 'Gumla', 34),
(209, 'Hazaribagh', 34),
(210, 'Koderma', 34),
(211, 'Lohardaga', 34),
(212, 'Pakur', 34),
(213, 'Palamu', 34),
(214, 'Ranchi', 34),
(215, 'Sahibganj', 34),
(216, 'Seraikela and Kharsawan', 34),
(217, 'Pashchim Singhbhum', 34),
(218, 'Ramgarh', 34),
(219, 'Bidar', 9),
(220, 'Belgaum', 9),
(221, 'Bijapur', 9),
(222, 'Bagalkot', 9),
(223, 'Bellary', 9),
(224, 'Bangalore Rural District', 9),
(225, 'Bangalore Urban District', 9),
(226, 'Chamarajnagar', 9),
(227, 'Chikmagalur', 9),
(228, 'Chitradurga', 9),
(229, 'Davanagere', 9),
(230, 'Dharwad', 9),
(231, 'Dakshina Kannada', 9),
(232, 'Gadag', 9),
(233, 'Gulbarga', 9),
(234, 'Hassan', 9),
(235, 'Haveri District', 9),
(236, 'Kodagu', 9),
(237, 'Kolar', 9),
(238, 'Koppal', 9),
(239, 'Mandya', 9),
(240, 'Mysore', 9),
(241, 'Raichur', 9),
(242, 'Shimoga', 9),
(243, 'Tumkur', 9),
(244, 'Udupi', 9),
(245, 'Uttara Kannada', 9),
(246, 'Ramanagara', 9),
(247, 'Chikballapur', 9),
(248, 'Yadagiri', 9),
(249, 'Alappuzha', 10),
(250, 'Ernakulam', 10),
(251, 'Idukki', 10),
(252, 'Kollam', 10),
(253, 'Kannur', 10),
(254, 'Kasaragod', 10),
(255, 'Kottayam', 10),
(256, 'Kozhikode', 10),
(257, 'Malappuram', 10),
(258, 'Palakkad', 10),
(259, 'Pathanamthitta', 10),
(260, 'Thrissur', 10),
(261, 'Thiruvananthapuram', 10),
(262, 'Wayanad', 10),
(263, 'Alirajpur', 11),
(264, 'Anuppur', 11),
(265, 'Ashok Nagar', 11),
(266, 'Balaghat', 11),
(267, 'Barwani', 11),
(268, 'Betul', 11),
(269, 'Bhind', 11),
(270, 'Bhopal', 11),
(271, 'Burhanpur', 11),
(272, 'Chhatarpur', 11),
(273, 'Chhindwara', 11),
(274, 'Damoh', 11),
(275, 'Datia', 11),
(276, 'Dewas', 11),
(277, 'Dhar', 11),
(278, 'Dindori', 11),
(279, 'Guna', 11),
(280, 'Gwalior', 11),
(281, 'Harda', 11),
(282, 'Hoshangabad', 11),
(283, 'Indore', 11),
(284, 'Jabalpur', 11),
(285, 'Jhabua', 11),
(286, 'Katni', 11),
(287, 'Khandwa', 11),
(288, 'Khargone', 11),
(289, 'Mandla', 11),
(290, 'Mandsaur', 11),
(291, 'Morena', 11),
(292, 'Narsinghpur', 11),
(293, 'Neemuch', 11),
(294, 'Panna', 11),
(295, 'Rewa', 11),
(296, 'Rajgarh', 11),
(297, 'Ratlam', 11),
(298, 'Raisen', 11),
(299, 'Sagar', 11),
(300, 'Satna', 11),
(301, 'Sehore', 11),
(302, 'Seoni', 11),
(303, 'Shahdol', 11),
(304, 'Shajapur', 11),
(305, 'Sheopur', 11),
(306, 'Shivpuri', 11),
(307, 'Sidhi', 11),
(308, 'Singrauli', 11),
(309, 'Tikamgarh', 11),
(310, 'Ujjain', 11),
(311, 'Umaria', 11),
(312, 'Vidisha', 11),
(313, 'Ahmednagar', 12),
(314, 'Akola', 12),
(315, 'Amrawati', 12),
(316, 'Aurangabad', 12),
(317, 'Bhandara', 12),
(318, 'Beed', 12),
(319, 'Buldhana', 12),
(320, 'Chandrapur', 12),
(321, 'Dhule', 12),
(322, 'Gadchiroli', 12),
(323, 'Gondiya', 12),
(324, 'Hingoli', 12),
(325, 'Jalgaon', 12),
(326, 'Jalna', 12),
(327, 'Kolhapur', 12),
(328, 'Latur', 12),
(329, 'Mumbai City', 12),
(330, 'Mumbai suburban', 12),
(331, 'Nandurbar', 12),
(332, 'Nanded', 12),
(333, 'Nagpur', 12),
(334, 'Nashik', 12),
(335, 'Osmanabad', 12),
(336, 'Parbhani', 12),
(337, 'Pune', 12),
(338, 'Raigad', 12),
(339, 'Ratnagiri', 12),
(340, 'Sindhudurg', 12),
(341, 'Sangli', 12),
(342, 'Solapur', 12),
(343, 'Satara', 12),
(344, 'Thane', 12),
(345, 'Wardha', 12),
(346, 'Washim', 12),
(347, 'Yavatmal', 12),
(348, 'Bishnupur', 13),
(349, 'Churachandpur', 13),
(350, 'Chandel', 13),
(351, 'Imphal East', 13),
(352, 'Senapati', 13),
(353, 'Tamenglong', 13),
(354, 'Thoubal', 13),
(355, 'Ukhrul', 13),
(356, 'Imphal West', 13),
(357, 'East Garo Hills', 14),
(358, 'East Khasi Hills', 14),
(359, 'Jaintia Hills', 14),
(360, 'Ri-Bhoi', 14),
(361, 'South Garo Hills', 14),
(362, 'West Garo Hills', 14),
(363, 'West Khasi Hills', 14),
(364, 'Aizawl', 15),
(365, 'Champhai', 15),
(366, 'Kolasib', 15),
(367, 'Lawngtlai', 15),
(368, 'Lunglei', 15),
(369, 'Mamit', 15),
(370, 'Saiha', 15),
(371, 'Serchhip', 15),
(372, 'Dimapur', 16),
(373, 'Kohima', 16),
(374, 'Mokokchung', 16),
(375, 'Mon', 16),
(376, 'Phek', 16),
(377, 'Tuensang', 16),
(378, 'Wokha', 16),
(379, 'Zunheboto', 16),
(380, 'Angul', 17),
(381, 'Boudh', 17),
(382, 'Bhadrak', 17),
(383, 'Bolangir', 17),
(384, 'Bargarh', 17),
(385, 'Baleswar', 17),
(386, 'Cuttack', 17),
(387, 'Debagarh', 17),
(388, 'Dhenkanal', 17),
(389, 'Ganjam', 17),
(390, 'Gajapati', 17),
(391, 'Jharsuguda', 17),
(392, 'Jajapur', 17),
(393, 'Jagatsinghpur', 17),
(394, 'Khordha', 17),
(395, 'Kendujhar', 17),
(396, 'Kalahandi', 17),
(397, 'Kandhamal', 17),
(398, 'Koraput', 17),
(399, 'Kendrapara', 17),
(400, 'Malkangiri', 17),
(401, 'Mayurbhanj', 17),
(402, 'Nabarangpur', 17),
(403, 'Nuapada', 17),
(404, 'Nayagarh', 17),
(405, 'Puri', 17),
(406, 'Rayagada', 17),
(407, 'Sambalpur', 17),
(408, 'Subarnapur', 17),
(409, 'Sundargarh', 17),
(410, 'Karaikal', 27),
(411, 'Mahe', 27),
(412, 'Puducherry', 27),
(413, 'Yanam', 27),
(414, 'Amritsar', 18),
(415, 'Bathinda', 18),
(416, 'Firozpur', 18),
(417, 'Faridkot', 18),
(418, 'Fatehgarh Sahib', 18),
(419, 'Gurdaspur', 18),
(420, 'Hoshiarpur', 18),
(421, 'Jalandhar', 18),
(422, 'Kapurthala', 18),
(423, 'Ludhiana', 18),
(424, 'Mansa', 18),
(425, 'Moga', 18),
(426, 'Mukatsar', 18),
(427, 'Nawan Shehar', 18),
(428, 'Patiala', 18),
(429, 'Rupnagar', 18),
(430, 'Sangrur', 18),
(431, 'Ajmer', 19),
(432, 'Alwar', 19),
(433, 'Bikaner', 19),
(434, 'Barmer', 19),
(435, 'Banswara', 19),
(436, 'Bharatpur', 19),
(437, 'Baran', 19),
(438, 'Bundi', 19),
(439, 'Bhilwara', 19),
(440, 'Churu', 19),
(441, 'Chittorgarh', 19),
(442, 'Dausa', 19),
(443, 'Dholpur', 19),
(444, 'Dungapur', 19),
(445, 'Ganganagar', 19),
(446, 'Hanumangarh', 19),
(447, 'Juhnjhunun', 19),
(448, 'Jalore', 19),
(449, 'Jodhpur', 19),
(450, 'Jaipur', 19),
(451, 'Jaisalmer', 19),
(452, 'Jhalawar', 19),
(453, 'Karauli', 19),
(454, 'Kota', 19),
(455, 'Nagaur', 19),
(456, 'Pali', 19),
(457, 'Pratapgarh', 19),
(458, 'Rajsamand', 19),
(459, 'Sikar', 19),
(460, 'Sawai Madhopur', 19),
(461, 'Sirohi', 19),
(462, 'Tonk', 19),
(463, 'Udaipur', 19),
(464, 'East Sikkim', 20),
(465, 'North Sikkim', 20),
(466, 'South Sikkim', 20),
(467, 'West Sikkim', 20),
(468, 'Ariyalur', 21),
(469, 'Chennai', 21),
(470, 'Coimbatore', 21),
(471, 'Cuddalore', 21),
(472, 'Dharmapuri', 21),
(473, 'Dindigul', 21),
(474, 'Erode', 21),
(475, 'Kanchipuram', 21),
(476, 'Kanyakumari', 21),
(477, 'Karur', 21),
(478, 'Madurai', 21),
(479, 'Nagapattinam', 21),
(480, 'The Nilgiris', 21),
(481, 'Namakkal', 21),
(482, 'Perambalur', 21),
(483, 'Pudukkottai', 21),
(484, 'Ramanathapuram', 21),
(485, 'Salem', 21),
(486, 'Sivagangai', 21),
(487, 'Tiruppur', 21),
(488, 'Tiruchirappalli', 21),
(489, 'Theni', 21),
(490, 'Tirunelveli', 21),
(491, 'Thanjavur', 21),
(492, 'Thoothukudi', 21),
(493, 'Thiruvallur', 21),
(494, 'Thiruvarur', 21),
(495, 'Tiruvannamalai', 21),
(496, 'Vellore', 21),
(497, 'Villupuram', 21),
(498, 'Dhalai', 22),
(499, 'North Tripura', 22),
(500, 'South Tripura', 22),
(501, 'West Tripura', 22),
(502, 'Almora', 33),
(503, 'Bageshwar', 33),
(504, 'Chamoli', 33),
(505, 'Champawat', 33),
(506, 'Dehradun', 33),
(507, 'Haridwar', 33),
(508, 'Nainital', 33),
(509, 'Pauri Garhwal', 33),
(510, 'Pithoragharh', 33),
(511, 'Rudraprayag', 33),
(512, 'Tehri Garhwal', 33),
(513, 'Udham Singh Nagar', 33),
(514, 'Uttarkashi', 33),
(515, 'Agra', 23),
(516, 'Allahabad', 23),
(517, 'Aligarh', 23),
(518, 'Ambedkar Nagar', 23),
(519, 'Auraiya', 23),
(520, 'Azamgarh', 23),
(521, 'Barabanki', 23),
(522, 'Badaun', 23),
(523, 'Bagpat', 23),
(524, 'Bahraich', 23),
(525, 'Bijnor', 23),
(526, 'Ballia', 23),
(527, 'Banda', 23),
(528, 'Balrampur', 23),
(529, 'Bareilly', 23),
(530, 'Basti', 23),
(531, 'Bulandshahr', 23),
(532, 'Chandauli', 23),
(533, 'Chitrakoot', 23),
(534, 'Deoria', 23),
(535, 'Etah', 23),
(536, 'Kanshiram Nagar', 23),
(537, 'Etawah', 23),
(538, 'Firozabad', 23),
(539, 'Farrukhabad', 23),
(540, 'Fatehpur', 23),
(541, 'Faizabad', 23),
(542, 'Gautam Buddha Nagar', 23),
(543, 'Gonda', 23),
(544, 'Ghazipur', 23),
(545, 'Gorkakhpur', 23),
(546, 'Ghaziabad', 23),
(547, 'Hamirpur', 23),
(548, 'Hardoi', 23),
(549, 'Mahamaya Nagar', 23),
(550, 'Jhansi', 23),
(551, 'Jalaun', 23),
(552, 'Jyotiba Phule Nagar', 23),
(553, 'Jaunpur District', 23),
(554, 'Kanpur Dehat', 23),
(555, 'Kannauj', 23),
(556, 'Kanpur Nagar', 23),
(557, 'Kaushambi', 23),
(558, 'Kushinagar', 23),
(559, 'Lalitpur', 23),
(560, 'Lakhimpur Kheri', 23),
(561, 'Lucknow', 23),
(562, 'Mau', 23),
(563, 'Meerut', 23),
(564, 'Maharajganj', 23),
(565, 'Mahoba', 23),
(566, 'Mirzapur', 23),
(567, 'Moradabad', 23),
(568, 'Mainpuri', 23),
(569, 'Mathura', 23),
(570, 'Muzaffarnagar', 23),
(571, 'Pilibhit', 23),
(572, 'Pratapgarh', 23),
(573, 'Rampur', 23),
(574, 'Rae Bareli', 23),
(575, 'Saharanpur', 23),
(576, 'Sitapur', 23),
(577, 'Shahjahanpur', 23),
(578, 'Sant Kabir Nagar', 23),
(579, 'Siddharthnagar', 23),
(580, 'Sonbhadra', 23),
(581, 'Sant Ravidas Nagar', 23),
(582, 'Sultanpur', 23),
(583, 'Shravasti', 23),
(584, 'Unnao', 23),
(585, 'Varanasi', 23),
(586, 'Birbhum', 24),
(587, 'Bankura', 24),
(588, 'Bardhaman', 24),
(589, 'Darjeeling', 24),
(590, 'Dakshin Dinajpur', 24),
(591, 'Hooghly', 24),
(592, 'Howrah', 24),
(593, 'Jalpaiguri', 24),
(594, 'Cooch Behar', 24),
(595, 'Kolkata', 24),
(596, 'Malda', 24),
(597, 'Midnapore', 24),
(598, 'Murshidabad', 24),
(599, 'Nadia', 24),
(600, 'North 24 Parganas', 24),
(601, 'South 24 Parganas', 24),
(602, 'Purulia', 24),
(603, 'Uttar Dinajpur', 24);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_country`
--

CREATE TABLE `cyg_country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyg_country`
--

INSERT INTO `cyg_country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_cuisines`
--

CREATE TABLE `cyg_cuisines` (
  `id` int(11) NOT NULL,
  `cuisine_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_cuisines`
--

INSERT INTO `cyg_cuisines` (`id`, `cuisine_name`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Mughlai', 1, '2021-03-08 12:21:30', 1, '2021-09-06 12:13:07', 1),
(2, 'Bengali', 1, '2021-03-08 12:21:47', 1, '2021-05-06 20:25:41', 1),
(4, 'Chinese', 1, '2021-03-08 15:31:04', 1, NULL, NULL),
(5, 'Continental', 1, '2021-05-06 20:26:02', 1, NULL, NULL),
(6, 'North Indian', 1, '2021-05-06 20:26:51', 1, NULL, NULL),
(7, 'Beverage', 1, '2021-05-06 20:39:40', 1, NULL, NULL),
(8, 'Cocktail', 1, '2021-05-06 23:16:42', 1, NULL, NULL),
(9, 'Multi Cuisine', 1, '2021-08-23 16:11:42', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_departments`
--

CREATE TABLE `cyg_departments` (
  `id` int(11) NOT NULL,
  `deptt_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_departments`
--

INSERT INTO `cyg_departments` (`id`, `deptt_name`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Marketing and communication', 1, '2021-02-16 17:36:29', 1, '2021-02-16 17:55:34', 1),
(2, 'Sales', 1, '2021-06-10 13:03:48', 1, NULL, 0),
(3, 'Business Development', 1, '2021-06-10 13:04:02', 1, NULL, 0),
(4, 'Operations', 1, '2021-06-10 13:04:08', 1, NULL, 0),
(5, 'Human Resources', 1, '2021-06-10 13:04:28', 1, NULL, 0),
(6, 'Central Reservations', 1, '2021-06-10 13:08:09', 1, NULL, 0),
(7, 'Technology', 1, '2021-06-10 13:08:17', 1, NULL, 0),
(8, 'F & B', 1, '2021-06-10 13:08:48', 1, NULL, 0),
(9, 'Support', 1, '2021-06-10 13:09:16', 1, NULL, 0),
(10, 'Legal', 1, '2021-06-10 13:09:28', 1, NULL, 0),
(11, 'Interiors', 1, '2021-06-10 13:09:49', 1, NULL, 0),
(12, 'Finance', 1, '2021-06-10 13:10:03', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_designation`
--

CREATE TABLE `cyg_designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_designation`
--

INSERT INTO `cyg_designation` (`id`, `designation`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Executive', 1, '2021-02-17 11:10:36', 1, '2021-02-17 13:35:49', 1),
(2, 'Manager', 1, '2021-02-17 11:17:59', 1, NULL, 0),
(3, 'Director', 1, '2021-06-10 13:10:57', 1, NULL, 0),
(4, 'Vice President', 1, '2021-06-10 13:11:05', 1, NULL, 0),
(5, 'President', 1, '2021-06-10 13:11:19', 1, NULL, 0),
(6, 'General Manager', 1, '2021-06-10 13:12:22', 1, NULL, 0),
(7, 'Managing Director', 1, '2021-06-10 13:12:40', 1, NULL, 0),
(8, 'Asst manager', 1, '2021-06-10 13:13:02', 1, NULL, 0),
(9, 'Advisor', 1, '2021-06-10 13:13:37', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_facilities`
--

CREATE TABLE `cyg_facilities` (
  `id` int(11) NOT NULL,
  `facility` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_facilities`
--

INSERT INTO `cyg_facilities` (`id`, `facility`, `parent_id`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(16, 'Paid Bus Station Transfers', 1, 1, '2021-05-21 13:32:04', 1, NULL, NULL),
(17, 'Paid Airport Transfers', 1, 1, '2021-05-21 13:32:14', 1, NULL, NULL),
(18, 'Paid Pickup/Drop', 1, 1, '2021-05-21 13:33:16', 1, NULL, NULL),
(19, 'Paid Railway Transfers', 1, 1, '2021-05-21 13:33:28', 1, NULL, NULL),
(20, 'Bar', 2, 1, '2021-05-21 13:33:50', 1, NULL, NULL),
(22, '24-hour Cafe', 2, 1, '2021-05-21 13:35:18', 1, NULL, NULL),
(23, 'Restaurant', 2, 1, '2021-05-21 13:35:29', 1, NULL, NULL),
(24, 'Dining Area', 2, 1, '2021-05-21 13:35:39', 1, NULL, NULL),
(26, 'Bakery', 2, 1, '2021-05-21 13:35:58', 1, NULL, NULL),
(27, 'Special Diet Meals', 2, 1, '2021-05-21 13:36:18', 1, NULL, NULL),
(28, '24-hour Coffee Shop', 2, 1, '2021-05-21 13:36:36', 1, NULL, NULL),
(29, 'Paid Shuttle Service', 1, 1, '2021-05-22 14:35:55', 1, NULL, NULL),
(31, 'Coffee Shop', 2, 1, '2021-05-22 14:37:26', 1, NULL, NULL),
(32, 'Kids Meals', 2, 1, '2021-05-22 14:38:15', 1, NULL, NULL),
(33, 'CCTV', 3, 1, '2021-05-22 14:39:07', 1, NULL, NULL),
(34, 'Fire Extinguishers', 3, 1, '2021-05-22 14:39:21', 1, NULL, NULL),
(35, '24-hour Security', 3, 1, '2021-05-22 14:39:32', 1, NULL, NULL),
(36, 'In-room Safe', 3, 1, '2021-05-22 14:39:42', 1, NULL, NULL),
(37, 'Electrical Chargers', 4, 1, '2021-05-22 14:40:32', 1, NULL, NULL),
(38, 'LED TV', 4, 1, '2021-05-22 14:40:54', 1, NULL, NULL),
(39, 'Lawn', 6, 1, '2021-05-22 14:48:58', 1, NULL, NULL),
(40, 'Living Room', 6, 1, '2021-05-22 14:49:08', 1, NULL, NULL),
(41, 'Reception', 6, 1, '2021-05-22 14:49:18', 1, NULL, NULL),
(42, 'Seating Area', 6, 1, '2021-05-22 14:49:29', 1, NULL, NULL),
(43, 'Free Wi-Fi', 7, 1, '2021-05-22 14:50:36', 1, NULL, NULL),
(44, 'Elevator/Lift', 7, 1, '2021-05-22 14:50:50', 1, NULL, NULL),
(45, 'Air Conditioning', 7, 1, '2021-05-22 14:51:06', 1, NULL, NULL),
(46, 'Room Service', 7, 1, '2021-05-22 14:51:22', 1, NULL, NULL),
(47, 'Power Backup', 7, 1, '2021-05-22 14:51:32', 1, NULL, NULL),
(48, 'Dry Cleaning Service', 7, 1, '2021-05-22 14:51:43', 1, NULL, NULL),
(49, 'Bathroom', 7, 1, '2021-05-22 14:51:57', 1, NULL, NULL),
(50, 'Smoking Rooms', 7, 1, '2021-05-22 14:52:07', 1, NULL, NULL),
(51, 'Smoke Detector', 7, 1, '2021-05-22 14:52:18', 1, NULL, NULL),
(52, 'Parking', 7, 1, '2021-05-22 14:52:27', 1, NULL, NULL),
(53, 'Intercom', 7, 1, '2021-05-22 14:52:38', 1, NULL, NULL),
(54, 'Refrigerator', 7, 1, '2021-05-22 14:52:50', 1, NULL, NULL),
(55, 'Housekeeping', 7, 1, '2021-05-22 14:53:00', 1, NULL, NULL),
(56, 'Public Restrooms', 7, 1, '2021-05-22 14:53:13', 1, NULL, NULL),
(57, 'Umbrellas', 7, 1, '2021-05-22 14:53:25', 1, NULL, NULL),
(58, 'Laundry Service', 7, 1, '2021-05-22 14:53:36', 1, NULL, NULL),
(59, 'Newspaper', 7, 1, '2021-05-22 14:53:45', 1, NULL, NULL),
(60, 'Telephone', 7, 1, '2021-05-22 14:53:54', 1, NULL, NULL),
(61, 'Ironing Service', 7, 1, '2021-05-22 14:54:03', 1, NULL, NULL),
(62, 'Luggage Storage', 8, 1, '2021-05-22 15:31:23', 1, NULL, NULL),
(63, 'Multilingual Staff', 8, 1, '2021-05-22 15:31:37', 1, NULL, NULL),
(64, 'Luggage Assistance', 8, 1, '2021-05-22 15:31:49', 1, NULL, NULL),
(65, 'Medical Centre', 8, 1, '2021-05-22 15:32:00', 1, NULL, NULL),
(66, 'Doctor on Call', 8, 1, '2021-05-22 15:32:13', 1, NULL, NULL),
(67, 'Ticket/Tour Assistance', 8, 1, '2021-05-22 15:32:24', 1, NULL, NULL),
(68, 'Bellboy Service', 8, 1, '2021-05-22 15:32:34', 1, NULL, NULL),
(69, 'Wake-up Call', 8, 1, '2021-05-22 15:32:50', 1, NULL, NULL),
(70, 'Electrical Sockets', 8, 1, '2021-05-22 15:33:03', 1, NULL, NULL),
(71, 'Postal Services', 8, 1, '2021-05-22 15:33:12', 1, NULL, NULL),
(72, 'Swimming Pool', 7, 1, '2021-05-26 00:25:44', 1, NULL, NULL),
(73, 'Concierge', 8, 1, '2021-05-26 00:26:03', 1, NULL, NULL),
(74, 'Wheelchair', 8, 1, '2021-05-26 00:26:12', 1, NULL, NULL),
(75, 'Air Purifier', 8, 1, '2021-05-26 00:26:25', 1, NULL, NULL),
(76, 'Free Cookies', 8, 1, '2021-05-26 00:26:35', 1, NULL, NULL),
(77, 'Free Fruit Basket', 8, 1, '2021-05-26 00:26:45', 1, NULL, NULL),
(78, 'Slippers', 8, 1, '2021-05-26 00:26:57', 1, NULL, NULL),
(79, 'Western Toilet Seat', 8, 1, '2021-05-26 00:27:06', 1, NULL, NULL),
(80, 'Sofa', 8, 1, '2021-05-26 00:27:15', 1, NULL, NULL),
(81, 'Nearby Beach', 5, 1, '2021-05-26 00:27:32', 1, NULL, NULL),
(82, 'Kids Play Area', 9, 1, '2021-05-27 23:57:01', 1, NULL, NULL),
(83, 'Gym', 10, 1, '2021-05-27 23:57:20', 1, NULL, NULL),
(84, 'First-aid Services', 10, 1, '2021-05-27 23:57:32', 1, NULL, NULL),
(85, 'Spa', 11, 1, '2021-05-27 23:57:52', 1, NULL, NULL),
(86, 'Facial Treatments', 11, 1, '2021-05-27 23:58:04', 1, NULL, NULL),
(87, 'Salon', 11, 1, '2021-05-27 23:58:16', 1, NULL, NULL),
(88, 'Steam and Sauna', 11, 1, '2021-05-27 23:58:27', 1, NULL, NULL),
(89, 'Massage', 11, 1, '2021-05-27 23:58:38', 1, NULL, NULL),
(90, 'Business Centre', 12, 1, '2021-05-28 00:00:14', 1, NULL, NULL),
(91, 'Conference Room', 12, 1, '2021-05-28 00:00:24', 1, NULL, NULL),
(92, 'Printer', 12, 1, '2021-05-28 00:00:33', 1, NULL, NULL),
(93, 'Photocopying', 12, 1, '2021-05-28 00:00:44', 1, NULL, NULL),
(94, 'Business Services', 12, 1, '2021-05-28 00:00:53', 1, NULL, NULL),
(95, 'Fax Service', 12, 1, '2021-05-28 00:01:03', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_guests_review`
--

CREATE TABLE `cyg_guests_review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` char(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `hotel_stayed` varchar(255) NOT NULL,
  `room_no` varchar(40) DEFAULT NULL,
  `check_in` varchar(10) DEFAULT NULL,
  `check_out` varchar(10) DEFAULT NULL,
  `reservation_mode` varchar(50) DEFAULT NULL,
  `stay_purpose` varchar(50) DEFAULT NULL,
  `future_stay_plan` varchar(50) DEFAULT NULL,
  `reception_greet` varchar(20) NOT NULL,
  `reception_check_in_service` varchar(20) DEFAULT NULL,
  `reception_appearance_entrance` varchar(20) DEFAULT NULL,
  `reception_bell_service` varchar(20) DEFAULT NULL,
  `guest_room_impression` varchar(20) DEFAULT NULL,
  `guest_room_house_keeping` varchar(20) DEFAULT NULL,
  `guest_room_money_value` varchar(20) DEFAULT NULL,
  `guest_room_cleanliness` varchar(20) DEFAULT NULL,
  `guest_room_maintenance` varchar(20) DEFAULT NULL,
  `hotel_laundry` varchar(20) DEFAULT NULL,
  `hotel_fitness_center` varchar(20) DEFAULT NULL,
  `hotel_parking` varchar(20) DEFAULT NULL,
  `hotel_business_service` varchar(20) DEFAULT NULL,
  `departure_check_out` varchar(20) DEFAULT NULL,
  `departure_bell_service` varchar(20) DEFAULT NULL,
  `staff_friendly` varchar(20) DEFAULT NULL,
  `staff_knowledge` varchar(20) DEFAULT NULL,
  `staff_helpful` varchar(20) DEFAULT NULL,
  `restaurant_food` varchar(20) DEFAULT NULL,
  `restaurant_service` varchar(20) DEFAULT NULL,
  `restaurant_decor` varchar(20) DEFAULT NULL,
  `restaurant_clean` varchar(20) DEFAULT NULL,
  `restaurant_meal_value` varchar(20) DEFAULT NULL,
  `restaurant_staff` varchar(20) DEFAULT NULL,
  `lunch_dinner_food_quality` varchar(20) DEFAULT NULL,
  `lunch_dinner_qos` varchar(20) DEFAULT NULL,
  `lunch_dinner_decor` varchar(20) DEFAULT NULL,
  `lunch_dinner_cleanliness` varchar(20) DEFAULT NULL,
  `lunch_dinner_value_for_meal` varchar(20) DEFAULT NULL,
  `lunch_dinner_staff` varchar(20) DEFAULT NULL,
  `message` longtext NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyg_guests_review`
--

INSERT INTO `cyg_guests_review` (`id`, `name`, `city`, `country`, `phone`, `email`, `hotel_stayed`, `room_no`, `check_in`, `check_out`, `reservation_mode`, `stay_purpose`, `future_stay_plan`, `reception_greet`, `reception_check_in_service`, `reception_appearance_entrance`, `reception_bell_service`, `guest_room_impression`, `guest_room_house_keeping`, `guest_room_money_value`, `guest_room_cleanliness`, `guest_room_maintenance`, `hotel_laundry`, `hotel_fitness_center`, `hotel_parking`, `hotel_business_service`, `departure_check_out`, `departure_bell_service`, `staff_friendly`, `staff_knowledge`, `staff_helpful`, `restaurant_food`, `restaurant_service`, `restaurant_decor`, `restaurant_clean`, `restaurant_meal_value`, `restaurant_staff`, `lunch_dinner_food_quality`, `lunch_dinner_qos`, `lunch_dinner_decor`, `lunch_dinner_cleanliness`, `lunch_dinner_value_for_meal`, `lunch_dinner_staff`, `message`, `submitted_on`) VALUES
(4, 'SANTOSH KUMAR', 'BULANDSHAHR', 'India', '9871694209', 'santosh.ndls03@gmail.com', 'Cygnett Resort Mountain Breeze Nainital', '1103', '04-08-21', '04-10-21', 'Travel Agent', 'Tour', 'yes', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'NA', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Service of Mr. Laxman at restaurant was very good. He was very friendly. ', '2021-04-12 07:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_home_banners`
--

CREATE TABLE `cyg_home_banners` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_banner_image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `position` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_home_banners`
--

INSERT INTO `cyg_home_banners` (`id`, `banner_image`, `mobile_banner_image`, `position`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(3, '1619614087_brand-cygnett-resort4.jpg', '1619614087_brand-cygnett-resort4-mob.jpg', '0', 0, '2021-03-24 23:33:56', 1, '2021-08-27 12:27:47', 1),
(9, '1619760089_brand-cygnett-resort3.jpg', '1619760159_brand-cygnett-resort3-mob.jpg', '0', 0, '2021-04-30 10:51:29', 1, '2021-08-27 12:27:47', 1),
(10, '1630045167_homepage4.jpg', '1630047467_homepage4-mob.jpg', '3', 1, '2021-08-16 12:29:08', 1, '2021-08-27 12:27:47', 1),
(7, '1630045167_homepage3.jpg', '1630047467_homepage3-mob.jpg', '4', 1, '2021-04-28 23:21:09', 1, '2021-08-27 12:27:47', 1),
(11, '1630045167_homepage5.jpg', '1630047467_homepage5-mob.jpg', '2', 1, '2021-08-16 12:40:15', 1, '2021-08-27 12:27:47', 1),
(12, '1630045167_homepage6-5.jpg', '1630047467_homepage6-mob.jpg', '1', 1, '2021-08-24 17:35:45', 1, '2021-08-27 12:27:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotels`
--

CREATE TABLE `cyg_hotels` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `hotel_type` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tag_line` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `brand` int(11) NOT NULL,
  `video_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `location` int(11) NOT NULL,
  `address_line_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address_line_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `ta_widget` text COLLATE utf8_unicode_ci,
  `google_map` text COLLATE utf8_unicode_ci,
  `rate` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `check_in` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `chkin_am_pm` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `check_out` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `chkout_am_pm` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `coming_soon` tinyint(1) NOT NULL DEFAULT '0',
  `sequence` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `is_hidden` int(11) NOT NULL DEFAULT '0',
  `hotel_schema` text COLLATE utf8_unicode_ci,
  `booking_widget` text COLLATE utf8_unicode_ci,
  `what3words` text COLLATE utf8_unicode_ci,
  `custom_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotels`
--

INSERT INTO `cyg_hotels` (`id`, `hotel_name`, `hotel_type`, `tag_line`, `description`, `brand`, `video_url`, `image`, `list_image`, `country`, `state`, `location`, `address_line_1`, `address_line_2`, `pincode`, `latitude`, `longitude`, `ta_widget`, `google_map`, `rate`, `check_in`, `chkin_am_pm`, `check_out`, `chkout_am_pm`, `coming_soon`, `sequence`, `is_hidden`, `hotel_schema`, `booking_widget`, `what3words`, `custom_url`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(4, 'Cygnett Resort Mountain Breeze', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    	Jeolikote is an untouched jewel in the Nainital district which is also known as the gateway to the Naini Lake. It&rsquo;s an ideal place to spend the holidays in a calm, secluded and cool environment, and is a heaven for nature lovers. The Cygnett Resort in Nainital offers a perfect stay and an admirable location to the visitors with the joy of both the summer comforts of a hill station and moderate coolness of winter in the plains. Cygnett Resort Mountain Breeze offers the guest an awesome panoramic view of the surroundings and star-lit wintry nights. The Four-Star Resort in Nainital is the perfect place, away from the concrete jungle to relieve from day to day routines and relax at the magnificent paradise in the lap of Mother Nature. It is one of the best eco-friendly resorts in Nainital. So, if you are travelling to Kumaon and looking for a hotel in Jeolikote, Uttarakhand, Cygnett Resort Mountain Breeze should be your go-to as it is the best hotel near Jeolikote, Nainital.			                    				                    				                    				                    			                    			                    			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/xVTgxHj2_q4', '1622573210_nainital-list-img.jpg', '1622573210_nainital-list-img.jpg', 99, 33, 6, 'Jeolikote, Near Petrol Pump, Nainital', '', '263127', 0, 0, ' &lt;div id=&quot;TA_cdsratingsonlynarrow496&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET496&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER496&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC496&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g660548-d17347538-Reviews-Cygnett_Resort_Mountain_Breeze-Nainital_Nainital_District_Uttarakhand.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Resort Mountain Breeze &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING496&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_45&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 233 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO496&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=496&amp;amp;locationId=17347538&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.0479302603967!2d79.4798679145764!3d29.339591058479293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a099cd1fce792d%3A0xb1f23a977b129c5b!2sCygnett%20Resort%20Mountain%20Breeze%20Nainital%20-%20Best%20Resort%20in%20Nainital!5e0!3m2!1sen!2sin!4v1611305168071!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;                  				                    				                    				                    			                    			                    			                    			                    			                    			                    			                    			                    ', '4200', '2', 'PM', '12', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Resort Mountain Breeze, Nainital&quot;,\r\n\r\n    &quot;description&quot;: &quot;Jeolikote is an untouched jewel in the Nainital district which is also known as the gateway to the Naini Lake. It&rsquo;s an ideal place to spend the holidays in a calm, secluded and cool environment, and is a heaven for nature lovers. The Cygnett Resort in Nainital offers a perfect stay and an admirable location to the visitors with the joy of both the summer comforts of a hill station and moderate coolness of winter in the plains. Cygnett Resort Mountain Breeze offers the guest an awesome panoramic view of the surroundings and star-lit wintry nights. The Four-Star Resort in Nainital is the perfect place, away from the concrete jungle to relieve from day to day routines and relax at the magnificent paradise in the lap of Mother Nature. It is one of the best eco-friendly resorts in Nainital. So, if you are travelling to Kumaon and looking for a hotel in Jeolikote, Uttarakhand, Cygnett Resort Mountain Breeze should be your go-to as it is the best hotel near Jeolikote, Nainital.&quot;,\r\n\r\n   \r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-resort-mountain-breeze-nainital/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Uttarakhand&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;263127&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Jeolikote, Near Petrol Pump, Nainital&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 4.5&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 147&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Resort+Mountain+Breeze+Nainital+-+Best+Resort+in+Nainital/@29.3395911,79.4798679,17z/data=!3m1!4b1!4m8!3m7!1s0x39a099cd1fce792d:0xb1f23a977b129c5b!5m2!4m1!1i2!8m2!3d29.3395864!4d79.4820566&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_resort_nainital.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2800 &ndash; INR 10000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-resort-mountain-breeze-nainital', 1, '2021-05-01 23:49:23', 1, '2021-08-28 14:08:33', 1),
(5, 'Cygnett Residences', '1,2,3', 'Test Tagline123', '			                    				                    				                    				                    			                    			                    ', 5, '', '1629893073_1626340241_happening_1.jpg', '', 99, 19, 12, 'Vipul Business Park Unit No 519, 5th Floor', 'Sector 48, Gurgaon', '122004', 28.214, 76.8434, '', '			                    				                    				                    				                    			                    			                    ', NULL, '00:00:10', 'AM', '00:00:10', 'AM', 1, '2', 0, '', '', '', NULL, 0, '2021-05-02 00:18:35', 1, '2021-08-25 17:34:33', 1),
(7, 'Cygnett Park', '1,2,3', 'hello hello', '			                    				                    				                    				                    				                    				                    				                    				                    			                    			                    			                    			                    			                    			                    ', 9, '', '1629893241_1628506807_cygnett-park-jaipur.jpg', '', 99, 19, 2, 'rereretr tretr ertty ', '', '201023', 0, 0, '', '			                    				                    				                    				                    				                    				                    				                    				                    			                    			                    			                    			                    			                    			                    ', NULL, '10:00:00', 'AM', '11:00:00', 'AM', 1, '1', 0, '', '', '', NULL, 0, '2021-05-02 00:49:00', 1, '2021-08-25 17:37:21', 1),
(9, 'Cygnett Lite, Alwar', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    				                    				                    				                    				                    				                    				                    	Nestled in the lap of the green hills of the Aravalli range lies the city of &lt;a href=&quot;https://www.cygnetthotels.com/hotels-in-alwar&quot;&gt;Alwar&lt;/a&gt;. The city is home to beautiful palaces and forts from an era long gone. The deep valleys and thick forest cover of the hills are a haven for many species of birds and animals. &lt;b&gt;Cygnett Lite Alwar&lt;/b&gt; is a travelers delight which helps you explore this splendor and exquisite architecture, along with the calm lakes, royal hunting chalets, dense jungles and a socio-cultural environment.			                    				                    			                    			                    			                    			                    			                    			                    			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/lnWjcDSeqLk', '1621703918_alwar-unit-img.jpg', '1621703918_alwar-list-img.jpg', 99, 19, 13, 'Near samola circle, alwar- rajgarh bypass 200 feet', '', '301001', 27.5323, 76.6244, '&lt;div id=&quot;TA_cdsratingsonlynarrow566&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;ul id=&quot;IvYXc5SAhw&quot; class=&quot;TA_links KzoWRm5IR5RH&quot;&gt;&lt;li id=&quot;LZAzx9&quot; class=&quot;spkD431Z6LrE&quot;&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/Hotel_Review-g679018-d13478622-Reviews-Cygnett_Lite-Alwar_Alwar_District_Rajasthan.html&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;TripAdvisor&quot;/&gt;&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;&lt;script async src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=566&amp;amp;locationId=13478622&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    				                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14151.891012859161!2d76.6243636!3d27.5323056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c0f3ef559df8161!2sCygnett+Lite+Alwar!5e0!3m2!1sen!2sin!4v1554808338954!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;		                    			                    			                    			                    			                    			                    			                    			                    			                    			                    			                    			                    			                    ', '5500', '12', 'PM', '11:30', 'PM', 0, '0', 0, '', '', '&lt;what3words-address words=&quot;toolbar.whirlpool.coconuts&quot;/&gt;', 'cygnett-lite-alwar', 1, '2021-05-22 22:48:38', 1, '2021-08-25 15:30:50', 1),
(11, 'Cygnett Inn Sea View', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    				                    				                    				                    	Cygnett Hotels &amp;amp; Resorts introduces Cygnett Inn Sea View Digha - West Bengal\'s most preferred sea beach and weekend getaway destination, to offer it\'s guest a cherishable and pleasurable stay. Only 200 meters away from the Bay of Bengal, the urban hotel is a lifestyle destination catering to both leisure and business travelers. A full range of services including warmly appointed rooms, contemporary facilities, with a rooftop swimming pool and warm indulgences make this a perfect destination for the guest; looking to combine themselves with the freshness of nature and making the stay a memorable one.			                    				                    			                    			                    			                    			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/0o8m75wX_18', '1622572878_seaview-list-img.jpg', '1622572878_seaview-list-img.jpg', 99, 24, 9, ' Block- B, Plot No.- 06, B1 Sector,\r\nNew Digha', '', '721463', 21.6203, 87.4987, '&lt;div id=&quot;TA_cdsratingsonlynarrow967&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET967&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER967&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC967&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g1162533-d19875981-Reviews-Cygnett_Inn_Sea_View-Digha_East_Midnapore_District_West_Bengal.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Inn Sea View &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING967&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_45&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 113 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO967&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=967&amp;amp;locationId=19875981&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.118108001582!2d87.4965078144173!3d21.62032087269681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1ccd7a5022a8f5%3A0xbb9e64cdec628731!2sCygnett%20Inn%20Sea%20View!5e0!3m2!1sen!2sin!4v1611302084892!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;			                    			                    			                    			                    			                    			                    			                    			                    			                    			                    ', '2700', '12', 'PM', '10', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Inn Sea View, Digha&quot;,\r\n\r\n    &quot;description&quot;: &quot;Cygnett Hotels &amp; Resorts introduces Cygnett Inn Sea View Digha - West Bengal\'s most preferred sea beach and weekend getaway destination, to offer it\'s guest a cherishable and pleasurable stay. Only 200 meters away from the Bay of Bengal, the urban hotel is a lifestyle destination catering to both leisure and business travelers. A full range of services including warmly appointed rooms, contemporary facilities, with a rooftop swimming pool and warm indulgences make this a perfect destination for the guest; looking to combine themselves with the freshness of nature and making the stay a memorable one.&quot;,\r\n\r\n\r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-inn-sea-view-digha/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;West Bengal&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;721463&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Block- B, Plot No.- 06, B1 Sector, New Digha&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 4.5&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 64&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Inn+Sea+View/@21.6203209,87.4965078,17z/data=!3m1!4b1!4m8!3m7!1s0x3a1ccd7a5022a8f5:0xbb9e64cdec628731!5m2!4m1!1i2!8m2!3d21.6203159!4d87.4986965&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img/hotels/digha-2.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2300 &ndash; INR 8000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '&lt;script src=&quot;https://watchmyrate.com/watchMyRateStaahMax/watch-my-rate-widget-tab.js&quot;&gt;&lt;/script&gt;\r\n\r\n                &lt;link href=&quot;https://watchmyrate.com/watchMyRateStaahMax/watch-my-rate-widget-tab.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;\r\n\r\n                &lt;a id=&quot;rateModalBtn&quot; class=&quot;rateModalBtn&quot; data-modal-target=&quot;watchMyRate&quot; style=&quot;cursor:pointer;&quot;&gt;Your Deal Today&lt;/a&gt;\r\n\r\n                &lt;div class=&quot;rateModal rateModalFade&quot; id=&quot;watchMyRate&quot;&gt;&lt;/div&gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;access_key&quot; id=&quot;access_key&quot; value=&quot;MjI1NmQ0ZjI0NmM3ODkxMGMzODM3NzViZjRkM2EzZGQ6fEAxNjg2&quot; &gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;wmr_currency&quot; id=&quot;wmr_currency&quot; value=&quot;&quot;&gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;wmr_popup_status&quot; id=&quot;wmr_popup_status&quot; value=&quot;Y&quot;/&gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;domain_name&quot; id=&quot;domain_name&quot; value=&quot;homes&quot;/&gt;', '', 'cygnett-inn-sea-view-digha', 1, '2021-05-24 10:53:02', 1, '2021-08-23 16:13:51', 1),
(12, 'Cygnett Lite, Digha', '1,2,3', 'Hotel tagline will come here', '			                    				                    ', 5, '', '1621837408_bongaigaon-unit-img.jpg', '1621837408_bongaigaon-list-img.jpg', 99, 24, 9, 'Plot no-79,N-2 Sector', '', '721463', 21.6203, 87.4987, '', '			                    				                    ', NULL, '12', 'PM', '12', 'PM', 0, '0', 0, '', '', NULL, NULL, 0, '2021-05-24 11:53:28', 1, '2021-06-27 21:57:01', 1),
(13, 'Cygnett Inn, Dwarka', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    	Situated in the divine land of Dwarka, Gujarat, Cygnett Inn Dwarka mirrors the heart of spirituality. Located in close proximity to celebrated pilgrimage sites such as Dwarkadhish Temple (JagatMandir), Nageshwar Temple, Gopi Talav Theertham, Rukmini Devi Temple and Hanuman Mandir, the hotel is the perfect stop to unwind after an excursion to the city&rsquo;s spiritual network. With an all day dining restaurant, a tea lounge, banquet hall/conference room, Cygnett Inn Dwarka is the perfect destination for a stay.			                    				                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/ffNW9mzV19A', '1622572990_dwarka-list-img.jpg', '1622572990_dwarka-list-img.jpg', 99, 5, 14, 'Survey No-356/1 to 6,Near Sai Baba Mandir,Dwarka, ', '', '361335', 22.2088, 69.0132, '', '			                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.82479947417!2d69.01098721442753!3d22.208763551824802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39569b7823e1cfd3%3A0xc1b22325ed5e5312!2sCygnett%20Inn%20Dwarka!5e0!3m2!1sen!2sin!4v1611302308818!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;    				                    			                    			                    			                    			                    ', 'XXXX', '12', 'PM', '12', 'PM', 0, '0', 0, '', '', NULL, NULL, 0, '2021-05-24 12:31:13', 1, '2021-08-09 11:31:55', 1),
(14, 'Cygnett Park Meghna', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    	The scenic city of Bongaigaon is a fascinating mix of natural beauty and industrial power and the Cygnett Park Meghna is a venture into this relatively unchartered hospitality territory with a guarantee of quality, comfort and convenience. Positioned on NH-27 close to the Indian Oil hub and just a stone&rsquo;s throw away from the border with Bhutan, this hotel is unmatched in location and in facilities and services in the vicinity.			                    				                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/BUN3GkwatPo', '1621839796_bongaigaon-unit-img.jpg', '1621839796_bongaigaon-list-img.jpg', 99, 2, 10, 'Dist, NH27, Chapaguri, Bongaigaon, Assam', '', '783380', 26.5041, 90.5521, '&lt;div id=&quot;TA_cdsratingsonlynarrow731&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET731&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER731&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC731&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g2287401-d12319641-Reviews-Cygnett_Park_Meghna-Bongaigaon_Bongaigaon_District_Assam.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Park Meghna &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING731&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_45&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 92 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO731&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=731&amp;amp;locationId=12319641&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14281.997687135292!2d90.5520905!3d26.5040578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc815a19e219eb04d!2sCygnett%20Park%20Meghna%20-%20Bongaigaon!5e0!3m2!1sen!2sin!4v1611301703275!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;            				                    			                    			                    			                    			                    ', '4000', '12', 'PM', '11:30', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Park Meghna, Bongaigaon&quot;,\r\n\r\n    &quot;description&quot;: &quot;The scenic city of Bongaigaon is a fascinating mix of natural beauty and industrial power and the Cygnett Park Meghna is a venture into this relatively unchartered hospitality territory with a guarantee of quality, comfort and convenience. Positioned on NH-27 close to the Indian Oil hub and just a stone&rsquo;s throw away from the border with Bhutan, this hotel is unmatched in location and in facilities and services in the vicinity.&quot;,\r\n\r\n\r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-park-meghna-bongaigaon/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Assam&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;783380&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Chapaguri P-II, Dist - Chirang, B.T.A.D, Assam&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 4.5&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 88&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Park+Meghna+-+Bongaigaon/@26.5040626,90.5499018,17z/data=!3m1!4b1!4m8!3m7!1s0x3758fe9b0183bc2b:0xc815a19e219eb04d!5m2!4m1!1i2!8m2!3d26.5040578!4d90.5520905&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_park_bongaigaon.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 3000- INR 6000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;\r\n', '', '', 'cygnett-park-meghna-bongaigaon', 1, '2021-05-24 12:33:16', 1, '2021-08-13 14:51:50', 1),
(15, 'Cygnett Inn La Maison', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    				                    	Situated in the heart of the breathtaking valley of Gangtok, Cygnett Inn La Maison, introduces leisure and business travellers to the region an irresistible and unmistakable mix of Cygnetture&rsquo;s acclaimed hospitality. While a passionate crew tirelessly strives to deliver an authentic local experience, it also guarantees consistent high standards, contemporary amenities and timelessly elegant experiences - all that at unbeatable prices. Make Cygnett Inn La Maison your personal getaway to exploring Sikkim\'s extraordinary sights, sounds and experiences - with a stay that\'s equally memorable.			                    				                    			                    			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/iP8cX5hA_Gk', '1622572577_gangtok-list-img.jpg', '1622572577_gangtok-list-img.jpg', 99, 20, 15, 'N.H. 10, Tadong, Gangtok, Sikkim', '', '737102', 27.3133, 88.5969, '&lt;div id=&quot;TA_cdsratingsonlynarrow690&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET690&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER690&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC690&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g659796-d17491160-Reviews-Cygnett_Inn_La_Maison-Gangtok_East_Sikkim_Sikkim.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Inn La Maison &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING690&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_50&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 228 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO690&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=690&amp;amp;locationId=17491160&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3544.9962467464306!2d88.59472061452946!3d27.313306049305815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6a54e479b61fb%3A0x5f069eb7280df02f!2sCygnett%20Inn%20La%20Maison!5e0!3m2!1sen!2sin!4v1611302647892!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;                    				                    			                    			                    			                    			                    			                    			                    			                    ', '2900', '12:30', 'PM', '12', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Inn La Maison, Gangtok&quot;,\r\n\r\n    &quot;description&quot;: &quot;Situated in the heart of the breathtaking valley of Gangtok, Cygnett Inn La Maison, introduces leisure and business travellers to the region an irresistible and unmistakable mix of Cygnetture&rsquo;s acclaimed hospitality. While a passionate crew tirelessly strives to deliver an authentic local experience, it also guarantees consistent high standards, contemporary amenities and timelessly elegant experiences - all that at unbeatable prices. Make Cygnett Inn La Maison your personal getaway to exploring Sikkim\'s extraordinary sights, sounds and experiences - with a stay that\'s equally memorable.&quot;,\r\n\r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-inn-la-maison-gangtok/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Sikkim&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;737102&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;N.H. 10, Tadong, Gangtok, Sikkim&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 5.0&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 209&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Inn+La+Maison/@27.313306,88.5947206,17z/data=!3m1!4b1!4m8!3m7!1s0x39e6a54e479b61fb:0x5f069eb7280df02f!5m2!4m1!1i2!8m2!3d27.3133013!4d88.5969093&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_inn_sikkim.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2400 &ndash; INR 6000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-inn-la-maison-gangtok', 1, '2021-05-24 12:41:54', 1, '2021-08-13 14:58:11', 1),
(16, 'Cygnett Inn Guwahati', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    				                    				                    	The largest city in Assam, Guwahati is home to various holy shrine dedicated to Lord Shiva and Lord Vishnu. Cygnett Inn Guwahati provides every traveler in Guwahati an opportunity to interact with the noteworthy heritage of this hilly region along with the awe inspiring beauty of this heavenly landscape. The hotel is known for its impeccable comfort, premium quality, and budget accommodation which adds to the charm of this hilly terrain. The central location of the hotel, combined with its focus on quality and services makes it one of the most preferred hotels in North East India.			                    				                    			                    			                    			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/BUN3GkwatPo', '1622572802_guwahati-list-img.jpg', '1622572802_guwahati-list-img.jpg', 99, 2, 16, 'Bus Stand, GS Rd, Near ABC, Tarun Nagar, Guwahati,', '', '781005', 26.1622, 91.7729, '&lt;div id=&quot;TA_cdsratingsonlynarrow926&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET926&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER926&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC926&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g503692-d7816412-Reviews-Cygnett_Inn_Repose-Guwahati_Kamrup_Metropolitan_District_Assam.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Inn Repose &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING926&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_40&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 243 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO926&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=926&amp;amp;locationId=7816412&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.05860755565!2d91.77068171450443!3d26.162220698292547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5972c973929b%3A0x217c1e23c2d4408b!2sCygnett%20Inn%20Repose%3A%20Guwahati!5e0!3m2!1sen!2sin!4v1611302912432!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;		                    			                    			                    			                    			                    			                    			                    			                    			                    ', '2900', '12', 'PM', '11', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Inn Repose, Guwahati&quot;,\r\n\r\n    &quot;description&quot;: &quot;The largest city in Assam, Guwahati is home to various holy shrine dedicated to Lord Shiva and Lord Vishnu. Cygnett Inn Repose provides every traveller in Guwahati an opportunity to interact with the noteworthy heritage of this hilly region along with the awe inspiring beauty of this heavenly landscape. The hotel is known for its impeccable comfort, premium quality, and budget accommodation which adds to the charm of this hilly terrain. The central location of the hotel, combined with its focus on quality and services makes it one of the most preferred hotels in North East India.&quot;,\r\n\r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-inn-repose-guwahati/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Assam&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;781005&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Bus Stand, GS Rd, Near ABC, Tarun Nagar, Guwahati&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 4.0&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 240&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Inn+Repose:+Guwahati/@26.1622207,91.7706817,17z/data=!3m1!4b1!4m8!3m7!1s0x375a5972c973929b:0x217c1e23c2d4408b!5m2!4m1!1i2!8m2!3d26.1622159!4d91.7728704&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_inn_guwahati.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2400 &ndash; INR 6000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-inn-guwahati', 1, '2021-05-24 12:45:27', 1, '2021-08-24 18:18:38', 1),
(17, 'Cygnett Inn Celestiial', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    	When the glistening sandy beaches and azure waters of India&rsquo;s ultimate party destination beckon, heading to the Cygnett Inn Celestiial is a no-brainer. This sophisticated hotel has a lot to offer leisure and business travellers alike without even mentioning its very enviable location near Candolim Beach in North Goa.			                    				                    			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/oLYt4VdUQVA', '1622572456_goa-list-img.jpg', '1622572456_goa-list-img.jpg', 99, 26, 7, '1168-D, Xiimer,, beside Jambaleshawar Temple, Cand', '', '403515', 15.5293, 73.7648, '&lt;div id=&quot;TA_cdsratingsonlynarrow970&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET970&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER970&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC970&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g297605-d6847514-Reviews-Cygnett_Inn_Celestiial-Candolim_Bardez_North_Goa_District_Goa.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Inn Celestiial &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING970&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_45&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 400 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO970&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=970&amp;amp;locationId=6847514&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.1640078680202!2d73.76257931433045!3d15.529336157805659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfc193f4e56989%3A0x4ab7a693ae6eb4c7!2sCygnett%20Inn%20Celestiial!5e0!3m2!1sen!2sin!4v1611303230610!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;       				                    			                    			                    			                    			                    			                    			                    ', '3900', '2', 'PM', '11', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Inn Celestiial, Goa&quot;,\r\n\r\n    &quot;description&quot;: &quot;When the glistening sandy beaches and azure waters of India&rsquo;s ultimate party destination beckon, heading to the Cygnett Inn Celestiial is a no-brainer. This sophisticated hotel has a lot to offer leisure and business travellers alike without even mentioning its very enviable location near Candolim Beach in North Goa.&quot;,\r\n\r\n   \r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-inn-celestiial-goa/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Goa&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Xiimer,Candolim&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 4.5&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 393&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Inn+Celestiial/@15.5293362,73.7625793,17z/data=!3m1!4b1!4m8!3m7!1s0x3bbfc193f4e56989:0x4ab7a693ae6eb4c7!5m2!4m1!1i2!8m2!3d15.529331!4d73.764768&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_lite_goa.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 3000 &ndash; INR 10000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-inn-celestiial-goa', 1, '2021-05-24 12:48:14', 1, '2021-08-13 15:03:12', 1);
INSERT INTO `cyg_hotels` (`id`, `hotel_name`, `hotel_type`, `tag_line`, `description`, `brand`, `video_url`, `image`, `list_image`, `country`, `state`, `location`, `address_line_1`, `address_line_2`, `pincode`, `latitude`, `longitude`, `ta_widget`, `google_map`, `rate`, `check_in`, `chkin_am_pm`, `check_out`, `chkout_am_pm`, `coming_soon`, `sequence`, `is_hidden`, `hotel_schema`, `booking_widget`, `what3words`, `custom_url`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(18, 'Cygnett Inn Trendz', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    	Cygnett Inn Trendz ushers the acclaimed Cygnett Hospitality into the heart of Arunachal Pradesh. A natural choice for budget conscious guests, the modern, well-appointed rooms reflects our obsession with quality and value at every step of the guest experience. Cygnett Inn Trendz is a must-halt stopover for the smart traveler looking for either business or leisure stay.			                    				                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/5akyl4aiODM', '1621840831_bongaigaon-unit-img.jpg', '1621840831_bongaigaon-list-img.jpg', 99, 3, 17, 'Chandranagar, Near D C Office, District: Papumpare', '', '791113', 0, 0, '&lt;div id=&quot;TA_cdsratingsonlynarrow10&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET10&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER10&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC10&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g946396-d16901033-Reviews-Cygnett_Inn_Trendz-Itanagar_Papum_Pare_District_Arunachal_Pradesh.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Inn Trendz &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING10&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_50&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 26 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO10&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=10&amp;amp;locationId=16901033&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.344389589681!2d93.59938601452434!3d27.08243495928365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3744077324618b57%3A0xd1bbd870fa1b18e0!2sCygnett%20Inn%20Trendz%2C%20Itanagar!5e0!3m2!1sen!2sin!4v1611303435918!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;		                    			                    			                    			                    			                    ', '2600', '12', 'PM', '12', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Inn Trendz, Itanagar&quot;,\r\n\r\n    &quot;description&quot;: &quot;Cygnett Inn Trendz ushers the acclaimed Cygnett Hospitality into the heart of Arunachal Pradesh. A natural choice for budget conscious guests, the modern, well-appointed rooms reflects our obsession with quality and value at every step of the guest experience. Cygnett Inn Trendz is a must-halt stopover for the smart traveler looking for either business or leisure stay.&quot;,\r\n\r\n   \r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-inn-trendz-itanagar/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Arunachal Pradesh&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;791113&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Chandranagar, Near D C Office, District: Papumpare, Itanagar, Arunachal Pradesh&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 4.0&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 240&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Inn+Trendz,+Itanagar/@27.082435,93.599386,17z/data=!3m1!4b1!4m8!3m7!1s0x3744077324618b57:0xd1bbd870fa1b18e0!5m2!4m1!1i2!8m2!3d27.0824302!4d93.6015747&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_inn_itanagar.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2800 &ndash; INR 7000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-inn-trendz-itanagar', 1, '2021-05-24 12:50:31', 1, '2021-08-13 15:05:34', 1),
(19, 'Cygnett Lite Grand', '1,2,3', 'Hotel tagline will come here', 'Jaipur is known for its ravishing beauty, the beautifully and strategically planned architecture with a wonderful combination of ancient royal heritage and ultra-modern life techniques. Jaipur displays a unique presentation of urban lifestyle which makes a stay in this city even more joyful and noteworthy. Impeccably situated close to Jaipur airport and City Center, Cygnett Lite Grand is an ideal destination for both business and leisure travellers. Superb contemporary styling, thoughtfully appointed accommodation, the finest indulgences, modern business and celebration zones along with professional class hospitality makes for an ideal stay zone for every traveller in Jaipur.			                    				                    				                    				                    			                    			                    ', 5, 'https://www.youtube.com/embed/fLnBVy1zxYQ', '1627282390_jaipur-unit.jpg', '1627282390_jaipur-unit.jpg', 99, 19, 2, 'D-236,Bihari Marg, Sawai Jai Singh Hwy, near Colle', '', '302016', 26.9308, 75.7914, '', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.2025639549106!2d75.78956051452096!3d26.92879206588152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db30342425893%3A0x51e5ce9a23e4dc28!2sCygnett+Inn+Grand!5e0!3m2!1sen!2sin!4v1547126885342&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;		                    				                    			                    			                    ', '1500', '12', 'PM', '12', 'PM', 0, '0', 0, '', '', NULL, NULL, 0, '2021-05-24 12:54:09', 1, '2021-08-09 11:31:36', 1),
(20, 'Cygnett Style Mantra', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    	Jodhpur is one of the most enchanting cities of Rajasthan, with its mighty Mehrangarh fort overlooking the city. An architectural masterpiece in itself, Mehrangarh Fort is a magnificent fort and is among one of the largest forts in Rajasthan. The city is called the Blue City as it looks completely blue in colour from an aerial view because of its blue walls and blue houses.			                    				                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/P9m3__tMnAk', '1622573311_jodhpur-list-img.jpg', '1622573311_jodhpur-list-img.jpg', 99, 19, 18, 'A-330, Saraswati Nagar, Madhuban, Jodhpur', '', '342005', 26.2295, 73.0154, '&lt;div id=&quot;TA_cdsratingsonlynarrow91&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET91&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER91&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC91&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g297668-d18913023-Reviews-Cygnett_Style_Mantra-Jodhpur_Jodhpur_District_Rajasthan.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Style Mantra &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING91&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_50&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 40 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO91&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=91&amp;amp;locationId=18913023&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.8809659684885!2d73.01640231450594!3d26.23305699533319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418b2262f9b749%3A0x8f7fc5851b58e319!2sCYGNETT%20STYLE%20MANTRA!5e0!3m2!1sen!2sin!4v1611304365053!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;            				                    			                    			                    			                    			                    ', '1700', '12', 'PM', '11', 'PM', 0, '0', 0, '', '', NULL, NULL, 0, '2021-05-24 12:56:54', 1, '2021-08-09 11:31:14', 1),
(21, 'Cygnett Park Di- Arch', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    	&lt;div&gt;The City of Nawabs is a treat for all the senses from the exquisite architecture to the famous kebabs that are without parallel. Cygnett Park Di-Arch is a hotel that strives to provide a hospitality experience worthy of the land - fit for nobility, but at prices that suitable for civilians! Located adjacent to the airport, it provides the perfect concoction of luxuriant convenience for a holiday or business trip.&lt;/div&gt;			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/brEFn84cMQs', '1622573092_lucknow-list-img.jpg', '1622573092_lucknow-list-img.jpg', 99, 23, 19, 'Khasra No 295,296 Village Behsa, Adjacent Airport,', '', '226012', 26.7788, 80.8825, '&lt;div id=&quot;TA_cdsratingsonlynarrow133&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;ul id=&quot;tpKOPV1Dl&quot; class=&quot;TA_links Ph9ZHvNP&quot;&gt;&lt;li id=&quot;TAUYYf&quot; class=&quot;xGBtn4h6SPh&quot;&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/Hotel_Review-g297684-d12992535-Reviews-Cygnett_Park_Di_Arch-Lucknow_Lucknow_District_Uttar_Pradesh.html&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;TripAdvisor&quot;&gt;&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=133&amp;amp;locationId=12992535&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.91945873276!2d80.88042801451775!3d26.778837172288302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bf94eb083401b%3A0x8f31a01bd32edf97!2sCygnett%20Park%20Di%20Arch%2C%20Lucknow!5e0!3m2!1sen!2sin!4v1611304636943!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;                  				                    				                    			                    			                    			                    			                    			                    			                    			                    ', '5600', '01', 'PM', '12', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Park, Lucknow&quot;,\r\n\r\n    &quot;description&quot;: &quot;The City of Nawabs is a treat for all the senses from the exquisite architecture to the famous kebabs that are without parallel. Cygnett Park Di-Arch is a hotel that strives to provide a hospitality experience worthy of the land - fit for nobility, but at prices that suitable for civilians! Located adjacent to the airport, it provides the perfect concoction of luxuriant convenience for a holiday or business trip.&quot;,\r\n\r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-park-di-arch-lucknow/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Uttar Pradesh&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;226012&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Khasra No 295,296 Village Behsa, Adjacent Airport, Kanpur Road&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 5.0&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 191&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Park+Di+Arch,+Lucknow/@26.7788372,80.880428,17z/data=!3m1!4b1!4m8!3m7!1s0x399bf94eb083401b:0x8f31a01bd32edf97!5m2!4m1!1i2!8m2!3d26.7788324!4d80.8826167&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_park_lucknow.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2400 &ndash; INR 10000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '&lt;script src=&quot;https://watchmyrate.com/watchMyRateStaahMax/watch-my-rate-widget-tab.js&quot;&gt;&lt;/script&gt;\r\n\r\n                &lt;link href=&quot;https://watchmyrate.com/watchMyRateStaahMax/watch-my-rate-widget-tab.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;\r\n\r\n                &lt;a id=&quot;rateModalBtn&quot; class=&quot;rateModalBtn&quot; data-modal-target=&quot;watchMyRate&quot; style=&quot;cursor:pointer;&quot;&gt;Your Deal Today&lt;/a&gt;\r\n\r\n                &lt;div class=&quot;rateModal rateModalFade&quot; id=&quot;watchMyRate&quot;&gt;&lt;/div&gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;access_key&quot; id=&quot;access_key&quot; value=&quot;MmJhNDU2Y2JjZDlkMGEwOTQ5MDRhNWMzMDI2YmQ0M2Q6fEAxOTA3&quot; &gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;wmr_currency&quot; id=&quot;wmr_currency&quot; value=&quot;&quot;&gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;wmr_popup_status&quot; id=&quot;wmr_popup_status&quot; value=&quot;Y&quot;/&gt;\r\n\r\n                &lt;input type=&quot;hidden&quot; name=&quot;domain_name&quot; id=&quot;domain_name&quot; value=&quot;homes&quot;/&gt;', '', 'cygnett-park-di-arch-lucknow', 1, '2021-05-24 12:59:05', 1, '2021-08-13 15:09:12', 1),
(22, 'Cygnett Style Signature', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    				                    	&lt;div&gt;Situated close to Dharamshala, Mcleodganj is a hidden treasure located in the heart of the Great Himalayan peaks. This rather unexplored destination is known for its picturesque peaks and calm atmosphere. Cygnett Style Signature, lies right opposite to the mighty Dhauladhar Mountains and possess the charm and nostalgia of the land in perfection.&lt;/div&gt;			                    				                    			                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/UWT-QGcaqtI', '1622573386_mcleodganj-list-img.jpg', '1622573386_mcleodganj-list-img.jpg', 99, 7, 20, 'Jogiwara Rd, McLeod Ganj, Dharamshala', '', '176219', 32.2356, 76.3272, '&lt;div id=&quot;TA_cdsratingsonlynarrow802&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET802&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER802&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC802&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g1092107-d19071680-Reviews-Cygnett_Style_Signature_McLeodganj-McLeod_Ganj_Dharamsala_Kangra_District_Himachal_P.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot; style=&quot;font-size: 12px;&quot;&gt; Cygnett Style Signature McLeodganj &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING802&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_50&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 81 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO802&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=802&amp;amp;locationId=19071680&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3374.8363535764393!2d76.32503061464972!3d32.23557251870287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391b510d8904f2af%3A0x72fe7ac1828b8b70!2sCygnett%20Style%20Signature%20Mcleodganj!5e0!3m2!1sen!2sin!4v1611304867665!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;                    				                    			                    			                    			                    			                    			                    			                    ', '2400', '01', 'PM', '11', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Style Signature, Mcleodganj&quot;,\r\n\r\n    &quot;description&quot;: &quot;Situated close to Dharamshala, Mcleodganj is a hidden treasure located in the heart of the Great Himalayan peaks. This rather unexplored destination is known for its picturesque peaks and calm atmosphere. Cygnett Style Signature, lies right opposite to the mighty Dhauladhar Mountains and possess the charm and nostalgia of the land in perfection.&quot;,\r\n\r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-style-signature-mcleodganj/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Himachal Pradesh&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;176219&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;Jogiwara Road, Mcleodganj, Dharamshala&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 5.0&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 56&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Style+Signature+Mcleodganj/@32.2355725,76.3250306,17z/data=!3m1!4b1!4m8!3m7!1s0x391b510d8904f2af:0x72fe7ac1828b8b70!5m2!4m1!1i2!8m2!3d32.235568!4d76.3272193&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_style_himachal.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2800 &ndash; INR 6000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-style-signature-mcleodganj', 1, '2021-05-24 13:01:33', 1, '2021-08-13 15:12:34', 1),
(23, 'Cygnett Style Tania', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    				                    	Nestled between the foothills of the Himalayas and the Doar region of West Bengal, Siliguri is a peaceful landscape appreciated by locals and tourists alike. Also known as the Gateway to the North-East, Siliguri is surrounded by the lush green ambience and mighty hilly terrains. Cygnett Style Tania&rsquo;s is the ideal stay option which has the potential to satisfy the needs and deeds of every explorer.			                    				                    			                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/6CjwVHGlXho', '1622573528_siliguri-list-img.jpg', '1622573528_siliguri-list-img.jpg', 99, 24, 21, 'H/52/1/2583 in ward no. 43 2nd Mile, Sevoke Rd, op', '', '734001', 26.731, 88.4312, '&lt;div id=&quot;TA_cdsratingsonlynarrow486&quot; class=&quot;TA_cdsratingsonlynarrow&quot;&gt;&lt;div id=&quot;CDSRATINGWIDGET486&quot; class=&quot;cdsROW white  shadow   border   narrow   cx_brand_refresh &quot;&gt; &lt;div id=&quot;CDSROWCONTAINER486&quot; class=&quot;cdsROWContainer&quot;&gt; &lt;div id=&quot;CDSROWLOC486&quot; class=&quot;cdsComponent cdsLocName&quot;&gt; &lt;a href=&quot;http://www.tripadvisor.in/Hotel_Review-g659786-d19071395-Reviews-Cygnett_Style_Tania_s-Siliguri_Darjeeling_District_West_Bengal.html&quot; target=&quot;_blank&quot; onclick=&quot;ta.cds.handleTALink(18034, this); return true;&quot; rel=&quot;nofollow&quot;&gt; Cygnett Style Tania\'s &lt;/a&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWRATING486&quot; class=&quot;cdsComponent cdsRating&quot;&gt; &lt;span class=&quot;ui_bubble_rating bubble_50&quot;&gt;&lt;/span&gt; &lt;br&gt; &lt;span&gt; 89 reviews &lt;/span&gt; &lt;/div&gt; &lt;div id=&quot;CDSROWLOGO486&quot; class=&quot;cdsComponent logo&quot;&gt; &lt;a target=&quot;_blank&quot; href=&quot;https://www.tripadvisor.in/&quot;&gt;&lt;img src=&quot;https://www.tripadvisor.in/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg&quot; alt=&quot;Tripadvisor&quot;&gt;&lt;/a&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;  &lt;/div&gt;&lt;script async=&quot;&quot; src=&quot;https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;amp;uniq=486&amp;amp;locationId=19071395&amp;amp;lang=en_IN&amp;amp;border=true&amp;amp;shadow=true&amp;amp;display_version=2&quot; data-loadtrk=&quot;&quot; onload=&quot;this.loadtrk=true&quot;&gt;&lt;/script&gt;', '			                    				                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.4177102286526!2d88.42905201451666!3d26.731043274323593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e44164b9e814f7%3A0xaee1ddcdeb82fa6a!2sCygnett%20Style%20Tania%E2%80%99s%20Siliguri!5e0!3m2!1sen!2sin!4v1611305436300!5m2!1sen!2sin&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; aria-hidden=&quot;false&quot; tabindex=&quot;0&quot;&gt;&lt;/iframe&gt;                    				                    			                    			                    			                    			                    			                    ', '2500', '12', 'PM', '11', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Style Tania\'s, Siliguri&quot;,\r\n\r\n    &quot;description&quot;: &quot;Nestled between the foothills of the Himalayas and the Doar region of West Bengal, Siliguri is a peaceful landscape appreciated by locals and tourists alike. Also known as the Gateway to the North-East, Siliguri is surrounded by the lush green ambience and mighty hilly terrains. Cygnett Style Tania&rsquo;s is the ideal stay option which has the potential to satisfy the needs and deeds of every explorer.&quot;,\r\n\r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-style-tania-siliguri/unit-overview&quot;,\r\n\r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;West Bengal&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;734001&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;2nd Mile, Sevoke Road, Opp. Kayson Honda Siliguri&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 5.0&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 71&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;https://www.google.co.in/maps/place/Cygnett+Style+Tania%E2%80%99s+Siliguri/@26.7310433,88.429052,17z/data=!3m1!4b1!4m8!3m7!1s0x39e44164b9e814f7:0xaee1ddcdeb82fa6a!5m2!4m1!1i2!8m2!3d26.7310385!4d88.4312407&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_style_siliguri.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2500 &ndash; INR 5500&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-style-tanias-siliguri', 1, '2021-05-24 13:19:48', 1, '2021-08-13 15:18:52', 1),
(24, 'Cygnett Inn Ramachandra', '1,2,3', 'Hotel tagline will come here', '			                    				                    				                    				                    	Strategically located in the heart of Visakhapatnam, Andhra Pradesh, Cygnett Inn Ramachandra Hotel is enveloped by the major commercial, shopping and entertainment hubs of the city. Situated barely 30 minutes away from the Airport, the hotel is equipped to cater to the needs of business or luxury travellers. Elegant interiors fashioned out of glass, wood and steel accentuate the charm of the hotel. Each of the myriad rooms of the hotel is tastefully bedecked and furnished with the latest state-of- the-art facilities; Expansive conference rooms, with cutting edge audio-visual technology, banquet hall to host grand events and fine dining options, coupled with impeccable hospitality and value for money &ndash; all make the hotel an ideal sojourn for the resident guests.			                    				                    			                    			                    			                    			                    ', 5, 'https://www.youtube.com/embed/e3iHowbyMmQ', '1622572665_vizag-list-img.jpg', '1622572665_vizag-list-img.jpg', 99, 1, 22, '31-2-4/5, NH-5 Road, Opp:All India Radio Station, ', '', '530046', 17.6852, 83.158, '', '			                    				                    				                    				                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243194.1534868989!2d83.1176808504811!3d17.748943009268693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a396ed1397cf5c1%3A0xeb62d4794bc59c2d!2sCygnett+Lite+Ramachandra!5e0!3m2!1sen!2sin!4v1535017599396&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;              				                    			                    			                    			                    			                    ', '2700', '12', 'PM', '11', 'PM', 0, '0', 0, '&lt;script type=&quot;application/ld+json&quot;&gt;\r\n\r\n\r\n{&quot;@context&quot;:&quot;http://schema.org/&quot;,\r\n\r\n  &quot;@type&quot;: &quot;Hotel&quot;,\r\n\r\n    &quot;name&quot;: &quot;Cygnett Inn Ramachandra, Visakhapatnam&quot;,\r\n\r\n    &quot;description&quot;: &quot;Strategically located in the heart of Visakhapatnam, Andhra Pradesh, Cygnett Inn Ramachandra Hotel is enveloped by the major commercial, shopping and entertainment hubs of the city. Situated barely 30 minutes away from the Airport, the hotel is equipped to cater to the needs of business or luxury travellers. Elegant interiors fashioned out of glass, wood and steel accentuate the charm of the hotel. Each of the myriad rooms of the hotel is tastefully bedecked and furnished with the latest state-of- the-art facilities; Expansive conference rooms, with cutting edge audio-visual technology, banquet hall to host grand events and fine dining options, coupled with impeccable hospitality and value for money &ndash; all make the hotel an ideal sojourn for the resident guests.&quot;,\r\n\r\n    \r\n    &quot;url&quot;: &quot;https://www.cygnetthotels.com/cygnett-inn-ramachandra-vizag/unit-overview&quot;,\r\n\r\n  \r\n\r\n    &quot;address&quot;: {\r\n\r\n        &quot;@type&quot;: &quot;PostalAddress&quot;,\r\n\r\n&quot;addressCountry&quot;: &quot;India&quot;,\r\n\r\n&quot;addressRegion&quot;: &quot;Andhra Pradesh&quot;,\r\n\r\n&quot;postalCode&quot;: &quot;&quot;,\r\n\r\n&quot;streetAddress&quot;: &quot;31-2-4/5, NH-5 Road, Opp:All India Radio Station, Kurmanapalem&quot;\r\n\r\n}, &quot;AggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,\r\n\r\n\r\n\r\n&quot;ratingValue&quot;: &quot; 4.5&quot;,\r\n\r\n&quot;reviewCount&quot;: &quot; 21&quot;\r\n\r\n},&quot;hasMap&quot;: &quot;&quot;,\r\n\r\n&quot;telephone&quot;: &quot;+91 8595 450450&quot;,\r\n\r\n&quot;image&quot;: &quot;https://www.cygnetthotels.com/img_2020/mega-menu/cygnett_inn_visakhapatnam.jpg&quot;,\r\n\r\n\r\n    &quot;priceRange&quot;: &quot;INR 2400 &ndash; INR 6000&quot;\r\n\r\n}&lt;/script&gt;\r\n&lt;!--/********schema js*********/--&gt;', '', '', 'cygnett-inn-ramachandra-vizag', 1, '2021-05-24 13:22:16', 1, '2021-08-13 15:21:08', 1),
(25, 'Siamton Inn', '1,2,3', 'Tagline will come here', '			                    	&lt;p&gt;Cygnett hotels are partaking in a bit of the joy in Kolkata. Siamton Inn, a flagship property of Cygnett, stands grand and proud on Kolkata\'s veritable lifeline, Park Street.&lt;/p&gt;&lt;p&gt;It is close to many of Kolkata\'s famous landmarks, the shopping havens, and business hubs. Business and leisure travellers alike will enjoy the advantages of its location complemented by the unmatched comfort of the accommodation, made possible by the exacting attention to the quality of every guest\'s experience.&lt;br&gt;&lt;/p&gt;			                    ', 17, 'https://www.youtube.com/embed/6CjwVHGlXho', '1626954216_siamton-unit.jpg', '1626954216_siamton-listing.jpg', 99, 24, 8, '56, Park St, Mullick Bazar, ', 'Park Street Area', '700017', 22.5463, 88.3617, '', '			                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.876710361116!2d88.35941611430461!3d22.546290739619277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02771de0981497%3A0x1ac592cd8b3fa9e5!2sJameson+Inn+Shiraz!5e0!3m2!1sen!2sin!4v1535017028720&quot; width=&quot;100%&quot; height=&quot;450&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;			                    ', '1000', '12', 'PM', '12', 'PM', 0, '0', 1, '', '', NULL, 'siamton-inn-elect-kolkata', 1, '2021-07-22 17:13:36', 1, '2021-08-05 16:01:00', 1),
(26, 'Cygnett Inn Krishna', '1,2,3', 'Hotel Tagline Will Come Here', '			                    				                    	&lt;p&gt;Situated in the sub-metropolitan city of Nepal, Cygnett Inn Krishna Nepalgunj is a luxurious property of Cygnett Hotels and Resorts. With a combination of the finest and luxurious hospitality services, the hotel is an ideal place to relax and have a relaxing stay in Nepal. In addition, it is centred brilliantly around the famous city locations and attractions. Resting in the lap of wonder Himalayas, Nepal is famous for its highest peak Mount Everest and various other tourist locations to explore. The mountain nation also has diverse, unique cultural and spiritual experiences combined with lots of adventure activities.&lt;br&gt;&lt;/p&gt;			                    			                    ', 11, 'https://www.youtube.com/embed/9MXlx9OHUvw', '1627542637_nepal-unit.jpg', '1627542637_nepal-listing.jpg', 149, 36, 23, 'Bageshwori tole, Surkhet road', 'ward number 3, Nepalgunj', '219000', 28.0548, 81.6145, '', '			                    	&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14083.321063775027!2d81.61038989761579!3d28.06020675212313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399867410b3958b3%3A0x5c61560b0d51bb5f!2sCygnett+Inn+Krishna+Hotel!5e0!3m2!1sen!2sin!4v1535017216820&quot; width=&quot;100%&quot; height=&quot;500&quot; frameborder=&quot;0&quot; style=&quot;border:0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;			                    			                    ', '2000', '12:00', 'PM', '12:00', 'PM', 0, '0', 0, '', '', '', 'cygnett-inn-krishna-nepalgunj', 1, '2021-07-29 12:40:37', 1, '2021-08-05 16:42:46', 1),
(27, 'Cygnett Park Rajkot', '1', 'Cygnett Park Rajkot', '', 9, '', '1628505349_cygnett-rajkot.jpg', '', 99, 5, 24, 'Address Line 1 Address Line 1', 'Address Line 2 Address Line 2', '100000', 0, 0, '', '', NULL, '10:00', 'AM', '10:00', 'PM', 1, '3', 0, '', '', NULL, NULL, 0, '2021-08-09 16:05:49', 1, '2021-08-09 16:06:39', 0),
(28, 'Cygnett Inn Paras', '1', 'Cygnett Inn Paras', '', 11, '', '1628506584_cygnett-inn-dehradun.jpg', '', 99, 33, 11, 'Address Line 1 Address Line 1', 'Address Line 2 Address Line 2', '100000', 0, 0, '', '', NULL, '10:00', 'AM', '10:00', 'PM', 1, '4', 0, '', '', NULL, NULL, 0, '2021-08-09 16:26:24', 1, '2021-08-09 16:27:07', 0),
(29, 'Cygnett Residences Solan', '2,3', 'Cygnett Residences Solan', '', 13, '', '1628507550_cygnett-residences-solan.jpg', '', 99, 7, 25, 'Address Line 1 Address Line 1', 'Address Line 2 Address Line 2', '100000', 0, 0, '', '', NULL, '10:00', 'AM', '10:00', 'PM', 1, '5', 0, '', '', NULL, NULL, 0, '2021-08-09 16:42:30', 1, '2021-08-09 16:42:43', 0),
(30, 'Cygnett Style Claret', '1,3', 'Cygnett Style Claret', '', 12, '', '1628509545_cygnett-style-dalhousie.jpg', '', 99, 7, 26, 'Address Line 1 Address Line 1', 'Address Line 2 Address Line 2', '100000', 0, 0, '', '', NULL, '10:00', 'AM', '10:00', 'PM', 1, '6', 0, '', '', NULL, NULL, 0, '2021-08-09 17:15:45', 1, '2021-08-09 17:15:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotels_gallery`
--

CREATE TABLE `cyg_hotels_gallery` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `sequence` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotels_gallery`
--

INSERT INTO `cyg_hotels_gallery` (`id`, `hotel_id`, `image`, `text`, `sequence`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(7, 9, 'alwar-gal-img1.jpg', 'Hotel Exterior', '1', 1, '2021-05-24 17:12:49', 1, '2021-08-05 11:45:00', 1),
(8, 9, 'alwar-gal-img2.jpg', 'Hotel Exterior At Dusk', '1', 1, '2021-05-24 17:12:49', 1, '2021-08-05 11:45:00', 1),
(9, 9, 'alwar-gal-img3.jpg', 'Club Room', '1', 1, '2021-05-24 17:12:49', 1, '2021-08-05 11:45:00', 1),
(10, 9, 'alwar-gal-img4.jpg', 'Superior Room', '1', 1, '2021-05-24 17:12:49', 1, '2021-08-05 11:45:00', 1),
(11, 9, 'alwar-gal-img5.jpg', 'Cygnett Pavilion Restaurant', '1', 1, '2021-05-24 17:19:54', 1, '2021-08-05 11:45:00', 1),
(12, 9, 'alwar-gal-img6.jpg', 'Metro Bar & Lounge', '1', 1, '2021-05-24 17:19:54', 1, '2021-08-05 11:45:00', 1),
(13, 9, 'alwar-gal-img7.jpg', 'Summit Banquet', '1', 1, '2021-05-24 17:19:54', 1, '2021-08-05 11:45:00', 1),
(14, 9, 'alwar-gal-img8.jpg', 'Lobby', '1', 1, '2021-05-24 17:19:54', 1, '2021-08-05 11:45:00', 1),
(15, 9, 'alwar-gal-img9.jpg', 'Reception', '1', 1, '2021-05-24 17:25:10', 1, '2021-08-05 11:45:00', 1),
(16, 9, 'alwar-gal-img10.jpg', 'Queen Lawn', '0', 1, '2021-05-24 17:25:11', 1, '2021-08-05 11:45:00', 1),
(17, 14, 'bongaigaon-gal-img1.jpg', 'Kid Zone', '9', 1, '2021-05-25 15:17:04', 1, '2021-08-06 16:52:52', 1),
(18, 14, 'bongaigaon-gal-img2.jpg', 'Gym', '8', 1, '2021-05-25 15:17:04', 1, '2021-08-06 16:52:52', 1),
(19, 14, 'bongaigaon-gal-img3.jpg', 'Spa Room', '7', 1, '2021-05-25 15:17:04', 1, '2021-08-06 16:52:52', 1),
(20, 14, 'bongaigaon-gal-img4.jpg', 'Rooftop Bar', '3', 1, '2021-05-25 15:24:48', 1, '2021-08-06 16:52:52', 1),
(21, 14, 'bongaigaon-gal-img5.jpg', 'Rooftop Swimming Pool', '4', 1, '2021-05-25 15:24:48', 1, '2021-08-06 16:52:52', 1),
(22, 14, 'bongaigaon-gal-img6.jpg', 'Columbia Banquet Hall', '5', 1, '2021-05-25 15:24:48', 1, '2021-08-06 16:52:52', 1),
(23, 14, 'bongaigaon-gal-img7.jpg', 'Board Room', '6', 1, '2021-05-25 15:24:48', 1, '2021-08-06 16:52:52', 1),
(24, 14, 'bongaigaon-gal-img8.jpg', 'Superior Room', '1', 1, '2021-05-25 15:31:05', 1, '2021-08-06 16:52:52', 1),
(25, 14, 'bongaigaon-gal-img9.jpg', 'Club Room', '2', 1, '2021-05-25 15:31:05', 1, '2021-08-06 16:52:52', 1),
(26, 14, 'bongaigaon-gal-img10.jpg', 'Suite Room', '0', 1, '2021-05-25 15:31:05', 1, '2021-08-06 16:52:52', 1),
(27, 11, 'seaview-gal-img1.jpg', 'Breakfast', '6', 1, '2021-05-26 00:07:35', 1, '2021-08-06 16:54:55', 1),
(28, 11, 'seaview-gal-img2.jpg', 'Club Room', '5', 1, '2021-05-26 00:07:35', 1, '2021-08-06 16:54:55', 1),
(29, 11, 'seaview-gal-img3.jpg', 'Junior Suite ', '4', 1, '2021-05-26 00:07:35', 1, '2021-08-06 16:54:55', 1),
(30, 11, 'seaview-gal-img4.jpg', 'Superior Room ', '3', 1, '2021-05-26 00:07:35', 1, '2021-08-06 16:54:55', 1),
(31, 11, 'seaview-gal-img5.jpg', 'Front View', '1', 1, '2021-05-26 00:07:35', 1, '2021-08-06 16:54:55', 1),
(32, 11, 'seaview-gal-img6.jpg', 'Top View ', '2', 1, '2021-05-26 00:07:35', 1, '2021-08-06 16:54:55', 1),
(33, 15, 'gangtok-gal-img1.jpg', 'Reception', '6', 1, '2021-05-26 13:37:07', 1, '2021-08-06 17:01:08', 1),
(34, 15, 'gangtok-gal-img2.jpg', 'Attic Lounge', '5', 1, '2021-05-26 13:37:07', 1, '2021-08-06 17:01:08', 1),
(35, 15, 'gangtok-gal-img3.jpg', 'Club Room with Balcony', '4', 1, '2021-05-26 13:44:45', 1, '2021-08-06 17:01:08', 1),
(36, 15, 'gangtok-gal-img4.jpg', 'Superior Room', '3', 1, '2021-05-26 13:44:45', 1, '2021-08-06 17:01:08', 1),
(37, 15, 'gangtok-gal-img5.jpg', 'Royal Suite', '2', 1, '2021-05-26 13:44:45', 1, '2021-08-06 17:01:08', 1),
(38, 15, 'gangtok-gal-img6.jpg', 'Hotel Exterior ', '1', 1, '2021-05-26 13:44:45', 1, '2021-08-06 17:01:08', 1),
(39, 16, 'guwahati-gal-img-1.jpg', 'Lobby', '6', 1, '2021-05-26 16:34:24', 1, '2021-08-06 17:04:00', 1),
(40, 16, 'guwahati-gal-img-2.jpg', 'Reception', '5', 1, '2021-05-26 16:34:24', 1, '2021-08-06 17:04:00', 1),
(41, 16, 'guwahati-gal-img-3.jpg', 'Superior Room', '4', 1, '2021-05-26 16:34:24', 1, '2021-08-06 17:04:00', 1),
(42, 16, 'guwahati-gal-img-4.jpg', 'Club Room', '3', 1, '2021-05-26 16:34:24', 1, '2021-08-06 17:04:00', 1),
(43, 16, 'guwahati-gal-img-5.jpg', 'Junior Suite', '2', 1, '2021-05-26 16:34:24', 1, '2021-08-06 17:04:00', 1),
(44, 16, 'guwahati-gal-img-6.jpg', 'Hotel Exterior', '1', 1, '2021-05-26 16:34:24', 1, '2021-08-06 17:04:00', 1),
(45, 17, 'goa-gal-img1.jpg', 'Lobby', '6', 1, '2021-05-27 00:35:05', 1, '2021-08-06 17:03:03', 1),
(46, 17, 'goa-gal-img2.jpg', 'Cygnett Pavilion', '5', 1, '2021-05-27 00:35:05', 1, '2021-08-06 17:03:03', 1),
(47, 17, 'goa-gal-img3.jpg', 'Deluxe Room', '4', 1, '2021-05-27 00:35:05', 1, '2021-08-06 17:03:03', 1),
(48, 17, 'goa-gal-img4.jpg', 'Superior Room', '3', 1, '2021-05-27 00:35:05', 1, '2021-08-06 17:03:03', 1),
(49, 17, 'goa-gal-img5.jpg', 'Family Suite', '2', 1, '2021-05-27 00:35:06', 1, '2021-08-06 17:03:03', 1),
(50, 17, 'goa-gal-img6.jpg', 'Hotel Exterior', '1', 1, '2021-05-27 00:35:06', 1, '2021-08-06 17:03:03', 1),
(51, 20, 'jodhpur-gal-img1.jpg', 'Reception', '6', 0, '2021-05-28 13:33:29', 1, '2021-08-09 11:31:14', 1),
(52, 20, 'jodhpur-gal-img2.jpg', 'Restuarant3', '5', 0, '2021-05-28 13:33:29', 1, '2021-08-09 11:31:14', 1),
(53, 20, 'jodhpur-gal-img3.jpg', 'Club Room', '4', 0, '2021-05-28 13:33:29', 1, '2021-08-09 11:31:14', 1),
(54, 20, 'jodhpur-gal-img4.jpg', 'Superior Room', '3', 0, '2021-05-28 13:33:29', 1, '2021-08-09 11:31:14', 1),
(55, 20, 'jodhpur-gal-img5.jpg', 'Suite', '2', 0, '2021-05-28 13:33:29', 1, '2021-08-09 11:31:14', 1),
(56, 20, 'jodhpur-gal-img6.jpg', 'Hotel Exterior', '1', 0, '2021-05-28 13:33:29', 1, '2021-08-09 11:31:14', 1),
(57, 21, 'lucknow-gal-img1.jpg', 'Cygnett Pavillion', '5', 1, '2021-05-29 14:15:52', 1, '2021-08-06 17:14:27', 1),
(58, 21, 'lucknow-gal-img2.jpg', 'Standard Room', '4', 1, '2021-05-29 14:15:52', 1, '2021-08-06 17:14:27', 1),
(59, 21, 'lucknow-gal-img3.jpg', 'Club Room', '3', 1, '2021-05-29 14:15:52', 1, '2021-08-06 17:14:27', 1),
(60, 21, 'lucknow-gal-img4.jpg', 'Royal Family Suite', '2', 1, '2021-05-29 14:15:52', 1, '2021-08-06 17:14:27', 1),
(61, 21, 'lucknow-gal-img5.jpg', 'Hotel Exterior', '1', 1, '2021-05-29 14:15:52', 1, '2021-08-06 17:14:27', 1),
(62, 22, 'mcleodgang-gal-img1.jpg', 'Banquet', '4', 1, '2021-05-30 00:56:59', 1, '2021-07-20 21:57:25', 1),
(63, 22, 'mcleodgang-gal-img2.jpg', 'Club  Room', '2', 1, '2021-05-30 00:56:59', 1, '2021-07-20 21:57:25', 1),
(64, 22, 'mcleodgang-gal-img3.jpg', 'Deluxe Room', '3', 1, '2021-05-30 00:56:59', 1, '2021-07-20 21:57:25', 1),
(65, 22, 'mcleodgang-gal-img4.jpg', 'Evening View', '1', 1, '2021-05-30 00:56:59', 1, '2021-07-20 21:57:25', 1),
(66, 22, 'mcleodgang-gal-img5.jpg', 'Lobby', '5', 1, '2021-05-30 00:56:59', 1, '2021-07-20 21:57:25', 1),
(67, 22, 'mcleodgang-gal-img6.jpg', 'View From Room', '6', 1, '2021-05-30 00:56:59', 1, '2021-07-20 21:57:25', 1),
(68, 4, 'nainital-gal-img1.jpg', 'Columbia Banquet Hall', '6', 1, '2021-06-01 00:01:50', 1, '2021-07-22 17:18:15', 1),
(69, 4, 'nainital-gal-img2.jpg', 'Cygnett Pavilion Breakfast Buffet', '5', 1, '2021-06-01 00:01:50', 1, '2021-07-22 17:18:15', 1),
(70, 4, 'nainital-gal-img3.jpg', 'Deluxe Room', '4', 1, '2021-06-01 00:01:50', 1, '2021-07-22 17:18:15', 1),
(71, 4, 'nainital-gal-img4.jpg', 'Family Suite Bed Room', '3', 1, '2021-06-01 00:01:50', 1, '2021-07-22 17:18:15', 1),
(72, 4, 'nainital-gal-img5.jpg', 'Royal Suite Bed Room', '2', 1, '2021-06-01 00:01:50', 1, '2021-07-22 17:18:15', 1),
(73, 4, 'nainital-gal-img6.jpg', 'Unit Aerial View', '1', 1, '2021-06-01 00:01:50', 1, '2021-07-22 17:18:15', 1),
(74, 23, 'siliguri-gal-img1.jpg', 'Club Room', '1', 1, '2021-06-01 00:37:44', 1, '2021-07-22 17:18:05', 1),
(75, 23, 'siliguri-gal-img2.jpg', 'Conference Room', '3', 1, '2021-06-01 00:37:44', 1, '2021-07-22 17:18:05', 1),
(76, 23, 'siliguri-gal-img3.jpg', 'Cygnett Pavilion', '4', 1, '2021-06-01 00:37:44', 1, '2021-07-22 17:18:05', 1),
(77, 23, 'siliguri-gal-img4.jpg', 'Lobby', '6', 1, '2021-06-01 00:37:44', 1, '2021-07-22 17:18:05', 1),
(78, 23, 'siliguri-gal-img5.jpg', 'Metro Pub', '5', 1, '2021-06-01 00:37:44', 1, '2021-07-22 17:18:05', 1),
(79, 23, 'siliguri-gal-img6.jpg', 'Suite Room', '2', 1, '2021-06-01 00:37:44', 1, '2021-07-22 17:18:05', 1),
(80, 24, 'vizag-gal-img1.jpg', 'Club Room', '2', 1, '2021-06-01 16:07:51', 1, '2021-07-20 21:57:01', 1),
(81, 24, 'vizag-gal-img2.jpg', 'Columbia Banquet Hall', '3', 1, '2021-06-01 16:07:51', 1, '2021-07-20 21:57:01', 1),
(82, 24, 'vizag-gal-img3.jpg', 'Cygnett Pavillion Restaurant', '4', 1, '2021-06-01 16:07:51', 1, '2021-07-20 21:57:01', 1),
(83, 24, 'vizag-gal-img4.jpg', 'Gossip Resturant', '5', 1, '2021-06-01 16:07:51', 1, '2021-07-20 21:57:01', 1),
(84, 24, 'vizag-gal-img6.jpg', 'Superior Room', '1', 1, '2021-06-01 16:07:51', 1, '2021-07-20 21:57:01', 1),
(85, 24, 'vizag-gal-img5.jpg', 'Lobby cum Reception', '6', 1, '2021-06-01 16:07:51', 1, '2021-07-20 21:57:01', 1),
(86, 13, 'dwarka-gal-img1.jpg', 'Club Room', '3', 0, '2021-06-01 23:20:43', 1, '2021-08-09 11:31:55', 1),
(87, 13, 'dwarka-gal-img2.jpg', 'C Pavilion', '4', 0, '2021-06-01 23:20:43', 1, '2021-08-09 11:31:55', 1),
(88, 13, 'dwarka-gal-img3.jpg', 'Kaffe Lounge', '5', 0, '2021-06-01 23:20:43', 1, '2021-08-09 11:31:55', 1),
(89, 13, 'dwarka-gal-img4.jpg', 'Suite Room', '2', 0, '2021-06-01 23:20:43', 1, '2021-08-09 11:31:55', 1),
(90, 13, 'dwarka-gal-img5.jpg', 'Lunch Buffet', '6', 0, '2021-06-01 23:20:43', 1, '2021-08-09 11:31:55', 1),
(91, 13, 'dwarka-gal-img6.jpg', 'Hotel Exterior', '1', 0, '2021-06-01 23:20:43', 1, '2021-08-09 11:31:55', 1),
(92, 25, 'siamton-gal-img1.jpg', 'Superior Room', '1', 1, '2021-07-22 18:11:48', 1, '2021-07-22 18:36:19', 1),
(93, 25, 'siamton-gal-img2.jpg', 'Summit Banquet Hall', '2', 1, '2021-07-22 18:11:48', 1, '2021-07-22 18:36:19', 1),
(94, 25, 'siamton-gal-img3.jpg', 'GT Route', '3', 1, '2021-07-22 18:11:48', 1, '2021-07-22 18:36:19', 1),
(95, 19, 'jaipurlite-gal-img1.jpg', 'Hotel Facade', '1', 0, '2021-07-26 13:54:26', 1, '2021-08-09 11:31:36', 1),
(96, 19, 'jaipurlite-gal-img2.jpg', 'Luxury Suite Room', '2', 0, '2021-07-26 13:54:26', 1, '2021-08-09 11:31:36', 1),
(97, 19, 'jaipurlite-gal-img3.jpg', 'Metro Lounge', '3', 0, '2021-07-26 13:54:26', 1, '2021-08-09 11:31:36', 1),
(98, 19, 'jaipurlite-gal-img4.jpg', 'Hotel Reception', '4', 0, '2021-07-26 13:54:26', 1, '2021-08-09 11:31:36', 1),
(99, 19, 'jaipurlite-gal-img5.jpg', 'Columbia Banquet', '5', 0, '2021-07-26 13:54:26', 1, '2021-08-09 11:31:36', 1),
(100, 19, 'jaipurlite-gal-img6.jpg', 'Swimming Pool', '6', 0, '2021-07-26 13:54:26', 1, '2021-08-09 11:31:36', 1),
(101, 18, 'itanagar-gal-img1.jpg', 'Superior Room', '1', 1, '2021-07-29 11:44:31', 1, '2021-07-29 11:44:46', 1),
(102, 18, 'itanagar-gal-img2.jpg', 'Hotel Reception', '2', 1, '2021-07-29 11:44:31', 1, '2021-07-29 11:44:46', 1),
(103, 26, 'nepal-gal-img1.jpg', 'Hotel Facade', '1', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(104, 26, 'nepal-gal-img2.jpg', 'Superior Room', '2', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(105, 26, 'nepal-gal-img3.jpg', 'Club Room', '3', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(106, 26, 'nepal-gal-img4.jpg', 'Suite Room', '4', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(107, 26, 'nepal-gal-img5.jpg', 'Recception', '5', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(108, 26, 'nepal-gal-img6.jpg', 'Mystic East', '6', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(109, 26, 'nepal-gal-img7.jpg', 'Gossip', '7', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(110, 26, 'nepal-gal-img8.jpg', 'Summit Banquet', '8', 1, '2021-08-02 12:39:04', 1, '2021-08-02 13:12:22', 1),
(111, 26, 'nepal-gal-img9.jpg', 'Hotel Lobby', '9', 1, '2021-08-02 12:40:51', 1, '2021-08-02 13:12:22', 1),
(112, 21, 'lucknow-gal-img6.jpg', 'Dicussion  ( Board Room )', '6', 1, '2021-08-06 17:14:11', 1, '2021-08-06 17:14:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_category`
--

CREATE TABLE `cyg_hotel_category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_category`
--

INSERT INTO `cyg_hotel_category` (`id`, `category`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Leisure', 1, '2021-02-18 14:58:35', 1, '2021-05-22 16:41:21', 1),
(2, 'Business', 1, '2021-02-22 18:14:51', 1, NULL, NULL),
(3, 'Family Stay', 1, '2021-05-22 16:41:39', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_facilities`
--

CREATE TABLE `cyg_hotel_facilities` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_facilities`
--

INSERT INTO `cyg_hotel_facilities` (`id`, `hotel_id`, `facility_id`, `added_on`, `added_by`) VALUES
(40, 2, 2, '2021-03-12 18:38:52', 1),
(41, 2, 1, '2021-03-12 18:38:52', 1),
(42, 2, 8, '2021-03-12 18:38:52', 1),
(43, 2, 4, '2021-03-12 18:38:52', 1),
(2159, 19, 17, '2021-07-26 12:23:10', 1),
(2160, 19, 18, '2021-07-26 12:23:10', 1),
(2161, 19, 19, '2021-07-26 12:23:10', 1),
(2162, 19, 28, '2021-07-26 12:23:10', 1),
(2163, 19, 24, '2021-07-26 12:23:10', 1),
(2164, 19, 23, '2021-07-26 12:23:10', 1),
(2165, 19, 35, '2021-07-26 12:23:10', 1),
(2166, 19, 33, '2021-07-26 12:23:10', 1),
(2167, 19, 36, '2021-07-26 12:23:10', 1),
(2168, 19, 38, '2021-07-26 12:23:10', 1),
(2169, 19, 41, '2021-07-26 12:23:10', 1),
(2170, 19, 45, '2021-07-26 12:23:10', 1),
(2171, 19, 49, '2021-07-26 12:23:10', 1),
(2172, 19, 44, '2021-07-26 12:23:10', 1),
(2173, 19, 43, '2021-07-26 12:23:10', 1),
(2174, 19, 55, '2021-07-26 12:23:10', 1),
(2175, 19, 53, '2021-07-26 12:23:10', 1),
(2176, 19, 61, '2021-07-26 12:23:10', 1),
(2177, 19, 52, '2021-07-26 12:23:10', 1),
(2178, 19, 47, '2021-07-26 12:23:10', 1),
(2179, 19, 46, '2021-07-26 12:23:10', 1),
(2180, 19, 50, '2021-07-26 12:23:10', 1),
(2181, 19, 75, '2021-07-26 12:23:10', 1),
(2182, 19, 64, '2021-07-26 12:23:10', 1),
(2183, 19, 67, '2021-07-26 12:23:10', 1),
(2453, 13, 17, '2021-08-02 17:51:04', 1),
(2454, 13, 18, '2021-08-02 17:51:04', 1),
(2455, 13, 19, '2021-08-02 17:51:04', 1),
(2456, 13, 28, '2021-08-02 17:51:04', 1),
(2457, 13, 31, '2021-08-02 17:51:04', 1),
(2458, 13, 24, '2021-08-02 17:51:04', 1),
(2459, 13, 23, '2021-08-02 17:51:04', 1),
(2460, 13, 35, '2021-08-02 17:51:04', 1),
(2461, 13, 33, '2021-08-02 17:51:04', 1),
(2462, 13, 38, '2021-08-02 17:51:04', 1),
(2463, 13, 41, '2021-08-02 17:51:04', 1),
(2464, 13, 42, '2021-08-02 17:51:04', 1),
(2465, 13, 45, '2021-08-02 17:51:04', 1),
(2466, 13, 48, '2021-08-02 17:51:04', 1),
(2467, 13, 44, '2021-08-02 17:51:04', 1),
(2468, 13, 43, '2021-08-02 17:51:04', 1),
(2469, 13, 55, '2021-08-02 17:51:04', 1),
(2470, 13, 53, '2021-08-02 17:51:04', 1),
(2471, 13, 58, '2021-08-02 17:51:04', 1),
(2472, 13, 59, '2021-08-02 17:51:04', 1),
(2473, 13, 52, '2021-08-02 17:51:04', 1),
(2474, 13, 46, '2021-08-02 17:51:04', 1),
(2475, 13, 66, '2021-08-02 17:51:04', 1),
(2476, 13, 64, '2021-08-02 17:51:04', 1),
(2477, 13, 67, '2021-08-02 17:51:04', 1),
(2478, 13, 69, '2021-08-02 17:51:04', 1),
(2628, 20, 17, '2021-08-05 15:53:18', 1),
(2629, 20, 19, '2021-08-05 15:53:18', 1),
(2630, 20, 22, '2021-08-05 15:53:18', 1),
(2631, 20, 24, '2021-08-05 15:53:18', 1),
(2632, 20, 23, '2021-08-05 15:53:18', 1),
(2633, 20, 35, '2021-08-05 15:53:18', 1),
(2634, 20, 33, '2021-08-05 15:53:18', 1),
(2635, 20, 34, '2021-08-05 15:53:18', 1),
(2636, 20, 38, '2021-08-05 15:53:18', 1),
(2637, 20, 39, '2021-08-05 15:53:18', 1),
(2638, 20, 41, '2021-08-05 15:53:18', 1),
(2639, 20, 42, '2021-08-05 15:53:18', 1),
(2640, 20, 45, '2021-08-05 15:53:18', 1),
(2641, 20, 48, '2021-08-05 15:53:18', 1),
(2642, 20, 44, '2021-08-05 15:53:18', 1),
(2643, 20, 43, '2021-08-05 15:53:18', 1),
(2644, 20, 55, '2021-08-05 15:53:18', 1),
(2645, 20, 53, '2021-08-05 15:53:18', 1),
(2646, 20, 58, '2021-08-05 15:53:18', 1),
(2647, 20, 59, '2021-08-05 15:53:18', 1),
(2648, 20, 52, '2021-08-05 15:53:18', 1),
(2649, 20, 46, '2021-08-05 15:53:18', 1),
(2650, 20, 75, '2021-08-05 15:53:18', 1),
(2651, 20, 73, '2021-08-05 15:53:18', 1),
(2652, 20, 66, '2021-08-05 15:53:18', 1),
(2653, 20, 64, '2021-08-05 15:53:18', 1),
(2654, 20, 67, '2021-08-05 15:53:18', 1),
(2655, 20, 69, '2021-08-05 15:53:18', 1),
(2656, 20, 94, '2021-08-05 15:53:18', 1),
(2657, 20, 93, '2021-08-05 15:53:18', 1),
(2658, 20, 92, '2021-08-05 15:53:18', 1),
(2659, 25, 17, '2021-08-05 16:01:00', 1),
(2660, 25, 16, '2021-08-05 16:01:00', 1),
(2661, 25, 19, '2021-08-05 16:01:00', 1),
(2662, 25, 28, '2021-08-05 16:01:00', 1),
(2663, 25, 24, '2021-08-05 16:01:00', 1),
(2664, 25, 35, '2021-08-05 16:01:00', 1),
(2665, 25, 33, '2021-08-05 16:01:00', 1),
(2666, 25, 38, '2021-08-05 16:01:00', 1),
(2667, 25, 41, '2021-08-05 16:01:00', 1),
(2668, 25, 42, '2021-08-05 16:01:00', 1),
(2669, 25, 49, '2021-08-05 16:01:00', 1),
(2670, 25, 48, '2021-08-05 16:01:00', 1),
(2671, 25, 44, '2021-08-05 16:01:00', 1),
(2672, 25, 43, '2021-08-05 16:01:00', 1),
(2673, 25, 55, '2021-08-05 16:01:00', 1),
(2674, 25, 53, '2021-08-05 16:01:00', 1),
(2675, 25, 61, '2021-08-05 16:01:00', 1),
(2676, 25, 58, '2021-08-05 16:01:00', 1),
(2677, 25, 52, '2021-08-05 16:01:00', 1),
(2678, 25, 47, '2021-08-05 16:01:00', 1),
(2679, 25, 54, '2021-08-05 16:01:00', 1),
(2680, 25, 51, '2021-08-05 16:01:00', 1),
(2681, 25, 50, '2021-08-05 16:01:00', 1),
(2682, 25, 73, '2021-08-05 16:01:00', 1),
(2683, 25, 64, '2021-08-05 16:01:00', 1),
(2684, 25, 67, '2021-08-05 16:01:00', 1),
(2685, 25, 69, '2021-08-05 16:01:00', 1),
(2686, 25, 84, '2021-08-05 16:01:00', 1),
(2687, 25, 90, '2021-08-05 16:01:00', 1),
(2688, 25, 91, '2021-08-05 16:01:00', 1),
(2689, 25, 95, '2021-08-05 16:01:00', 1),
(2935, 26, 17, '2021-08-05 16:42:46', 1),
(2936, 26, 18, '2021-08-05 16:42:46', 1),
(2937, 26, 22, '2021-08-05 16:42:46', 1),
(2938, 26, 24, '2021-08-05 16:42:46', 1),
(2939, 26, 23, '2021-08-05 16:42:46', 1),
(2940, 26, 35, '2021-08-05 16:42:46', 1),
(2941, 26, 33, '2021-08-05 16:42:46', 1),
(2942, 26, 38, '2021-08-05 16:42:46', 1),
(2943, 26, 41, '2021-08-05 16:42:46', 1),
(2944, 26, 42, '2021-08-05 16:42:46', 1),
(2945, 26, 45, '2021-08-05 16:42:46', 1),
(2946, 26, 49, '2021-08-05 16:42:46', 1),
(2947, 26, 48, '2021-08-05 16:42:46', 1),
(2948, 26, 44, '2021-08-05 16:42:46', 1),
(2949, 26, 43, '2021-08-05 16:42:46', 1),
(2950, 26, 55, '2021-08-05 16:42:46', 1),
(2951, 26, 53, '2021-08-05 16:42:46', 1),
(2952, 26, 61, '2021-08-05 16:42:46', 1),
(2953, 26, 52, '2021-08-05 16:42:46', 1),
(2954, 26, 47, '2021-08-05 16:42:46', 1),
(2955, 26, 54, '2021-08-05 16:42:46', 1),
(2956, 26, 46, '2021-08-05 16:42:46', 1),
(2957, 26, 75, '2021-08-05 16:42:46', 1),
(2958, 26, 73, '2021-08-05 16:42:46', 1),
(2959, 26, 64, '2021-08-05 16:42:46', 1),
(2960, 26, 80, '2021-08-05 16:42:46', 1),
(2961, 26, 67, '2021-08-05 16:42:46', 1),
(2962, 26, 84, '2021-08-05 16:42:46', 1),
(3177, 14, 17, '2021-08-13 14:51:50', 1),
(3178, 14, 19, '2021-08-13 14:51:50', 1),
(3179, 14, 29, '2021-08-13 14:51:50', 1),
(3180, 14, 28, '2021-08-13 14:51:50', 1),
(3181, 14, 20, '2021-08-13 14:51:50', 1),
(3182, 14, 23, '2021-08-13 14:51:50', 1),
(3183, 14, 35, '2021-08-13 14:51:50', 1),
(3184, 14, 33, '2021-08-13 14:51:50', 1),
(3185, 14, 34, '2021-08-13 14:51:50', 1),
(3186, 14, 38, '2021-08-13 14:51:50', 1),
(3187, 14, 41, '2021-08-13 14:51:50', 1),
(3188, 14, 42, '2021-08-13 14:51:50', 1),
(3189, 14, 45, '2021-08-13 14:51:50', 1),
(3190, 14, 44, '2021-08-13 14:51:50', 1),
(3191, 14, 43, '2021-08-13 14:51:50', 1),
(3192, 14, 53, '2021-08-13 14:51:50', 1),
(3193, 14, 58, '2021-08-13 14:51:50', 1),
(3194, 14, 59, '2021-08-13 14:51:50', 1),
(3195, 14, 52, '2021-08-13 14:51:50', 1),
(3196, 14, 47, '2021-08-13 14:51:50', 1),
(3197, 14, 46, '2021-08-13 14:51:50', 1),
(3198, 14, 66, '2021-08-13 14:51:50', 1),
(3199, 14, 64, '2021-08-13 14:51:50', 1),
(3200, 14, 65, '2021-08-13 14:51:50', 1),
(3201, 14, 67, '2021-08-13 14:51:50', 1),
(3232, 15, 17, '2021-08-13 14:58:11', 1),
(3233, 15, 18, '2021-08-13 14:58:11', 1),
(3234, 15, 29, '2021-08-13 14:58:11', 1),
(3235, 15, 20, '2021-08-13 14:58:11', 1),
(3236, 15, 31, '2021-08-13 14:58:11', 1),
(3237, 15, 23, '2021-08-13 14:58:11', 1),
(3238, 15, 35, '2021-08-13 14:58:11', 1),
(3239, 15, 33, '2021-08-13 14:58:11', 1),
(3240, 15, 38, '2021-08-13 14:58:11', 1),
(3241, 15, 41, '2021-08-13 14:58:11', 1),
(3242, 15, 42, '2021-08-13 14:58:11', 1),
(3243, 15, 45, '2021-08-13 14:58:11', 1),
(3244, 15, 44, '2021-08-13 14:58:11', 1),
(3245, 15, 43, '2021-08-13 14:58:11', 1),
(3246, 15, 55, '2021-08-13 14:58:11', 1),
(3247, 15, 53, '2021-08-13 14:58:11', 1),
(3248, 15, 58, '2021-08-13 14:58:11', 1),
(3249, 15, 52, '2021-08-13 14:58:11', 1),
(3250, 15, 47, '2021-08-13 14:58:11', 1),
(3251, 15, 46, '2021-08-13 14:58:11', 1),
(3252, 15, 75, '2021-08-13 14:58:11', 1),
(3253, 15, 66, '2021-08-13 14:58:11', 1),
(3254, 15, 70, '2021-08-13 14:58:11', 1),
(3255, 15, 64, '2021-08-13 14:58:11', 1),
(3256, 15, 65, '2021-08-13 14:58:11', 1),
(3257, 15, 80, '2021-08-13 14:58:11', 1),
(3258, 15, 67, '2021-08-13 14:58:11', 1),
(3259, 15, 69, '2021-08-13 14:58:11', 1),
(3291, 17, 17, '2021-08-13 15:03:12', 1),
(3292, 17, 16, '2021-08-13 15:03:12', 1),
(3293, 17, 18, '2021-08-13 15:03:12', 1),
(3294, 17, 19, '2021-08-13 15:03:12', 1),
(3295, 17, 20, '2021-08-13 15:03:12', 1),
(3296, 17, 23, '2021-08-13 15:03:12', 1),
(3297, 17, 35, '2021-08-13 15:03:12', 1),
(3298, 17, 33, '2021-08-13 15:03:12', 1),
(3299, 17, 38, '2021-08-13 15:03:12', 1),
(3300, 17, 81, '2021-08-13 15:03:12', 1),
(3301, 17, 41, '2021-08-13 15:03:12', 1),
(3302, 17, 42, '2021-08-13 15:03:12', 1),
(3303, 17, 45, '2021-08-13 15:03:12', 1),
(3304, 17, 48, '2021-08-13 15:03:12', 1),
(3305, 17, 44, '2021-08-13 15:03:12', 1),
(3306, 17, 43, '2021-08-13 15:03:12', 1),
(3307, 17, 55, '2021-08-13 15:03:12', 1),
(3308, 17, 53, '2021-08-13 15:03:12', 1),
(3309, 17, 58, '2021-08-13 15:03:12', 1),
(3310, 17, 52, '2021-08-13 15:03:12', 1),
(3311, 17, 47, '2021-08-13 15:03:12', 1),
(3312, 17, 46, '2021-08-13 15:03:12', 1),
(3313, 17, 72, '2021-08-13 15:03:12', 1),
(3314, 17, 73, '2021-08-13 15:03:12', 1),
(3315, 17, 66, '2021-08-13 15:03:12', 1),
(3316, 17, 64, '2021-08-13 15:03:12', 1),
(3317, 17, 65, '2021-08-13 15:03:12', 1),
(3318, 17, 67, '2021-08-13 15:03:12', 1),
(3319, 17, 69, '2021-08-13 15:03:12', 1),
(3320, 17, 74, '2021-08-13 15:03:12', 1),
(3321, 18, 17, '2021-08-13 15:05:34', 1),
(3322, 18, 18, '2021-08-13 15:05:34', 1),
(3323, 18, 19, '2021-08-13 15:05:34', 1),
(3324, 18, 28, '2021-08-13 15:05:34', 1),
(3325, 18, 26, '2021-08-13 15:05:34', 1),
(3326, 18, 24, '2021-08-13 15:05:34', 1),
(3327, 18, 23, '2021-08-13 15:05:34', 1),
(3328, 18, 35, '2021-08-13 15:05:34', 1),
(3329, 18, 33, '2021-08-13 15:05:34', 1),
(3330, 18, 38, '2021-08-13 15:05:34', 1),
(3331, 18, 41, '2021-08-13 15:05:34', 1),
(3332, 18, 42, '2021-08-13 15:05:34', 1),
(3333, 18, 45, '2021-08-13 15:05:34', 1),
(3334, 18, 48, '2021-08-13 15:05:34', 1),
(3335, 18, 44, '2021-08-13 15:05:34', 1),
(3336, 18, 43, '2021-08-13 15:05:34', 1),
(3337, 18, 55, '2021-08-13 15:05:34', 1),
(3338, 18, 53, '2021-08-13 15:05:34', 1),
(3339, 18, 58, '2021-08-13 15:05:34', 1),
(3340, 18, 59, '2021-08-13 15:05:34', 1),
(3341, 18, 52, '2021-08-13 15:05:34', 1),
(3342, 18, 47, '2021-08-13 15:05:34', 1),
(3343, 18, 46, '2021-08-13 15:05:34', 1),
(3344, 18, 73, '2021-08-13 15:05:34', 1),
(3345, 18, 66, '2021-08-13 15:05:34', 1),
(3346, 18, 64, '2021-08-13 15:05:34', 1),
(3347, 18, 65, '2021-08-13 15:05:34', 1),
(3348, 18, 67, '2021-08-13 15:05:34', 1),
(3349, 18, 69, '2021-08-13 15:05:34', 1),
(3350, 21, 17, '2021-08-13 15:09:12', 1),
(3351, 21, 18, '2021-08-13 15:09:12', 1),
(3352, 21, 19, '2021-08-13 15:09:12', 1),
(3353, 21, 22, '2021-08-13 15:09:12', 1),
(3354, 21, 24, '2021-08-13 15:09:12', 1),
(3355, 21, 23, '2021-08-13 15:09:12', 1),
(3356, 21, 35, '2021-08-13 15:09:12', 1),
(3357, 21, 33, '2021-08-13 15:09:12', 1),
(3358, 21, 38, '2021-08-13 15:09:12', 1),
(3359, 21, 39, '2021-08-13 15:09:12', 1),
(3360, 21, 41, '2021-08-13 15:09:12', 1),
(3361, 21, 42, '2021-08-13 15:09:12', 1),
(3362, 21, 45, '2021-08-13 15:09:12', 1),
(3363, 21, 48, '2021-08-13 15:09:12', 1),
(3364, 21, 44, '2021-08-13 15:09:12', 1),
(3365, 21, 43, '2021-08-13 15:09:12', 1),
(3366, 21, 53, '2021-08-13 15:09:12', 1),
(3367, 21, 58, '2021-08-13 15:09:12', 1),
(3368, 21, 52, '2021-08-13 15:09:12', 1),
(3369, 21, 47, '2021-08-13 15:09:12', 1),
(3370, 21, 46, '2021-08-13 15:09:12', 1),
(3371, 21, 73, '2021-08-13 15:09:12', 1),
(3372, 21, 66, '2021-08-13 15:09:12', 1),
(3373, 21, 64, '2021-08-13 15:09:12', 1),
(3374, 21, 65, '2021-08-13 15:09:12', 1),
(3375, 21, 67, '2021-08-13 15:09:12', 1),
(3376, 21, 69, '2021-08-13 15:09:12', 1),
(3377, 21, 79, '2021-08-13 15:09:12', 1),
(3378, 21, 74, '2021-08-13 15:09:12', 1),
(3379, 21, 84, '2021-08-13 15:09:12', 1),
(3380, 21, 83, '2021-08-13 15:09:12', 1),
(3381, 21, 86, '2021-08-13 15:09:12', 1),
(3382, 21, 89, '2021-08-13 15:09:12', 1),
(3383, 21, 87, '2021-08-13 15:09:12', 1),
(3384, 21, 85, '2021-08-13 15:09:12', 1),
(3385, 21, 88, '2021-08-13 15:09:12', 1),
(3386, 21, 90, '2021-08-13 15:09:12', 1),
(3387, 21, 94, '2021-08-13 15:09:12', 1),
(3388, 21, 91, '2021-08-13 15:09:12', 1),
(3389, 21, 95, '2021-08-13 15:09:12', 1),
(3390, 21, 93, '2021-08-13 15:09:12', 1),
(3391, 21, 92, '2021-08-13 15:09:12', 1),
(3392, 22, 17, '2021-08-13 15:12:34', 1),
(3393, 22, 18, '2021-08-13 15:12:34', 1),
(3394, 22, 19, '2021-08-13 15:12:34', 1),
(3395, 22, 31, '2021-08-13 15:12:34', 1),
(3396, 22, 24, '2021-08-13 15:12:34', 1),
(3397, 22, 23, '2021-08-13 15:12:34', 1),
(3398, 22, 35, '2021-08-13 15:12:34', 1),
(3399, 22, 33, '2021-08-13 15:12:34', 1),
(3400, 22, 38, '2021-08-13 15:12:34', 1),
(3401, 22, 41, '2021-08-13 15:12:34', 1),
(3402, 22, 42, '2021-08-13 15:12:34', 1),
(3403, 22, 45, '2021-08-13 15:12:34', 1),
(3404, 22, 48, '2021-08-13 15:12:34', 1),
(3405, 22, 44, '2021-08-13 15:12:34', 1),
(3406, 22, 43, '2021-08-13 15:12:34', 1),
(3407, 22, 53, '2021-08-13 15:12:34', 1),
(3408, 22, 58, '2021-08-13 15:12:34', 1),
(3409, 22, 59, '2021-08-13 15:12:34', 1),
(3410, 22, 52, '2021-08-13 15:12:34', 1),
(3411, 22, 47, '2021-08-13 15:12:34', 1),
(3412, 22, 46, '2021-08-13 15:12:34', 1),
(3413, 22, 73, '2021-08-13 15:12:34', 1),
(3414, 22, 66, '2021-08-13 15:12:34', 1),
(3415, 22, 64, '2021-08-13 15:12:34', 1),
(3416, 22, 65, '2021-08-13 15:12:34', 1),
(3417, 22, 67, '2021-08-13 15:12:34', 1),
(3418, 22, 69, '2021-08-13 15:12:34', 1),
(3419, 22, 84, '2021-08-13 15:12:34', 1),
(3420, 22, 90, '2021-08-13 15:12:34', 1),
(3421, 22, 91, '2021-08-13 15:12:34', 1),
(3422, 22, 92, '2021-08-13 15:12:34', 1),
(3467, 23, 17, '2021-08-13 15:18:52', 1),
(3468, 23, 18, '2021-08-13 15:18:52', 1),
(3469, 23, 19, '2021-08-13 15:18:52', 1),
(3470, 23, 28, '2021-08-13 15:18:52', 1),
(3471, 23, 26, '2021-08-13 15:18:52', 1),
(3472, 23, 24, '2021-08-13 15:18:52', 1),
(3473, 23, 32, '2021-08-13 15:18:52', 1),
(3474, 23, 23, '2021-08-13 15:18:52', 1),
(3475, 23, 35, '2021-08-13 15:18:52', 1),
(3476, 23, 33, '2021-08-13 15:18:52', 1),
(3477, 23, 38, '2021-08-13 15:18:52', 1),
(3478, 23, 41, '2021-08-13 15:18:52', 1),
(3479, 23, 42, '2021-08-13 15:18:52', 1),
(3480, 23, 45, '2021-08-13 15:18:52', 1),
(3481, 23, 48, '2021-08-13 15:18:52', 1),
(3482, 23, 44, '2021-08-13 15:18:52', 1),
(3483, 23, 43, '2021-08-13 15:18:52', 1),
(3484, 23, 55, '2021-08-13 15:18:52', 1),
(3485, 23, 53, '2021-08-13 15:18:52', 1),
(3486, 23, 58, '2021-08-13 15:18:52', 1),
(3487, 23, 59, '2021-08-13 15:18:52', 1),
(3488, 23, 52, '2021-08-13 15:18:52', 1),
(3489, 23, 47, '2021-08-13 15:18:52', 1),
(3490, 23, 46, '2021-08-13 15:18:52', 1),
(3491, 23, 66, '2021-08-13 15:18:52', 1),
(3492, 23, 64, '2021-08-13 15:18:52', 1),
(3493, 23, 67, '2021-08-13 15:18:52', 1),
(3494, 23, 69, '2021-08-13 15:18:52', 1),
(3495, 23, 84, '2021-08-13 15:18:52', 1),
(3496, 23, 90, '2021-08-13 15:18:52', 1),
(3497, 23, 94, '2021-08-13 15:18:52', 1),
(3498, 23, 93, '2021-08-13 15:18:52', 1),
(3499, 23, 92, '2021-08-13 15:18:52', 1),
(3500, 24, 17, '2021-08-13 15:21:08', 1),
(3501, 24, 18, '2021-08-13 15:21:08', 1),
(3502, 24, 19, '2021-08-13 15:21:08', 1),
(3503, 24, 22, '2021-08-13 15:21:08', 1),
(3504, 24, 31, '2021-08-13 15:21:08', 1),
(3505, 24, 23, '2021-08-13 15:21:08', 1),
(3506, 24, 35, '2021-08-13 15:21:08', 1),
(3507, 24, 33, '2021-08-13 15:21:08', 1),
(3508, 24, 38, '2021-08-13 15:21:08', 1),
(3509, 24, 41, '2021-08-13 15:21:08', 1),
(3510, 24, 42, '2021-08-13 15:21:08', 1),
(3511, 24, 45, '2021-08-13 15:21:08', 1),
(3512, 24, 49, '2021-08-13 15:21:08', 1),
(3513, 24, 48, '2021-08-13 15:21:08', 1),
(3514, 24, 43, '2021-08-13 15:21:08', 1),
(3515, 24, 55, '2021-08-13 15:21:08', 1),
(3516, 24, 53, '2021-08-13 15:21:08', 1),
(3517, 24, 58, '2021-08-13 15:21:08', 1),
(3518, 24, 52, '2021-08-13 15:21:08', 1),
(3519, 24, 47, '2021-08-13 15:21:08', 1),
(3520, 24, 46, '2021-08-13 15:21:08', 1),
(3521, 24, 66, '2021-08-13 15:21:08', 1),
(3522, 24, 64, '2021-08-13 15:21:08', 1),
(3523, 24, 67, '2021-08-13 15:21:08', 1),
(3524, 24, 69, '2021-08-13 15:21:08', 1),
(3525, 24, 83, '2021-08-13 15:21:08', 1),
(3526, 11, 17, '2021-08-23 16:13:51', 1),
(3527, 11, 19, '2021-08-23 16:13:51', 1),
(3528, 11, 29, '2021-08-23 16:13:51', 1),
(3529, 11, 31, '2021-08-23 16:13:51', 1),
(3530, 11, 24, '2021-08-23 16:13:51', 1),
(3531, 11, 32, '2021-08-23 16:13:51', 1),
(3532, 11, 23, '2021-08-23 16:13:51', 1),
(3533, 11, 27, '2021-08-23 16:13:51', 1),
(3534, 11, 35, '2021-08-23 16:13:51', 1),
(3535, 11, 33, '2021-08-23 16:13:51', 1),
(3536, 11, 38, '2021-08-23 16:13:51', 1),
(3537, 11, 41, '2021-08-23 16:13:51', 1),
(3538, 11, 42, '2021-08-23 16:13:51', 1),
(3539, 11, 45, '2021-08-23 16:13:51', 1),
(3540, 11, 49, '2021-08-23 16:13:51', 1),
(3541, 11, 44, '2021-08-23 16:13:51', 1),
(3542, 11, 43, '2021-08-23 16:13:51', 1),
(3543, 11, 55, '2021-08-23 16:13:51', 1),
(3544, 11, 53, '2021-08-23 16:13:51', 1),
(3545, 11, 58, '2021-08-23 16:13:51', 1),
(3546, 11, 59, '2021-08-23 16:13:51', 1),
(3547, 11, 52, '2021-08-23 16:13:51', 1),
(3548, 11, 46, '2021-08-23 16:13:51', 1),
(3549, 11, 60, '2021-08-23 16:13:51', 1),
(3550, 11, 66, '2021-08-23 16:13:51', 1),
(3551, 11, 70, '2021-08-23 16:13:51', 1),
(3552, 11, 62, '2021-08-23 16:13:51', 1),
(3553, 11, 67, '2021-08-23 16:13:51', 1),
(3554, 11, 69, '2021-08-23 16:13:51', 1),
(3586, 16, 17, '2021-08-24 18:18:38', 1),
(3587, 16, 19, '2021-08-24 18:18:38', 1),
(3588, 16, 29, '2021-08-24 18:18:38', 1),
(3589, 16, 28, '2021-08-24 18:18:38', 1),
(3590, 16, 26, '2021-08-24 18:18:38', 1),
(3591, 16, 20, '2021-08-24 18:18:38', 1),
(3592, 16, 24, '2021-08-24 18:18:38', 1),
(3593, 16, 23, '2021-08-24 18:18:38', 1),
(3594, 16, 27, '2021-08-24 18:18:38', 1),
(3595, 16, 35, '2021-08-24 18:18:38', 1),
(3596, 16, 33, '2021-08-24 18:18:38', 1),
(3597, 16, 34, '2021-08-24 18:18:38', 1),
(3598, 16, 38, '2021-08-24 18:18:38', 1),
(3599, 16, 41, '2021-08-24 18:18:38', 1),
(3600, 16, 45, '2021-08-24 18:18:38', 1),
(3601, 16, 44, '2021-08-24 18:18:38', 1),
(3602, 16, 43, '2021-08-24 18:18:38', 1),
(3603, 16, 55, '2021-08-24 18:18:38', 1),
(3604, 16, 53, '2021-08-24 18:18:38', 1),
(3605, 16, 58, '2021-08-24 18:18:38', 1),
(3606, 16, 52, '2021-08-24 18:18:38', 1),
(3607, 16, 47, '2021-08-24 18:18:38', 1),
(3608, 16, 46, '2021-08-24 18:18:38', 1),
(3609, 16, 73, '2021-08-24 18:18:38', 1),
(3610, 16, 66, '2021-08-24 18:18:38', 1),
(3611, 16, 64, '2021-08-24 18:18:38', 1),
(3612, 16, 65, '2021-08-24 18:18:38', 1),
(3613, 16, 80, '2021-08-24 18:18:38', 1),
(3614, 16, 67, '2021-08-24 18:18:38', 1),
(3615, 16, 69, '2021-08-24 18:18:38', 1),
(3616, 16, 79, '2021-08-24 18:18:38', 1),
(3649, 9, 19, '2021-08-25 15:30:50', 1),
(3650, 9, 29, '2021-08-25 15:30:50', 1),
(3651, 9, 31, '2021-08-25 15:30:50', 1),
(3652, 9, 24, '2021-08-25 15:30:50', 1),
(3653, 9, 32, '2021-08-25 15:30:50', 1),
(3654, 9, 23, '2021-08-25 15:30:50', 1),
(3655, 9, 27, '2021-08-25 15:30:50', 1),
(3656, 9, 35, '2021-08-25 15:30:50', 1),
(3657, 9, 33, '2021-08-25 15:30:50', 1),
(3658, 9, 34, '2021-08-25 15:30:50', 1),
(3659, 9, 38, '2021-08-25 15:30:50', 1),
(3660, 9, 39, '2021-08-25 15:30:50', 1),
(3661, 9, 41, '2021-08-25 15:30:50', 1),
(3662, 9, 42, '2021-08-25 15:30:50', 1),
(3663, 9, 45, '2021-08-25 15:30:50', 1),
(3664, 9, 48, '2021-08-25 15:30:50', 1),
(3665, 9, 44, '2021-08-25 15:30:50', 1),
(3666, 9, 43, '2021-08-25 15:30:50', 1),
(3667, 9, 55, '2021-08-25 15:30:50', 1),
(3668, 9, 53, '2021-08-25 15:30:50', 1),
(3669, 9, 58, '2021-08-25 15:30:50', 1),
(3670, 9, 52, '2021-08-25 15:30:50', 1),
(3671, 9, 47, '2021-08-25 15:30:50', 1),
(3672, 9, 46, '2021-08-25 15:30:50', 1),
(3673, 9, 50, '2021-08-25 15:30:50', 1),
(3674, 9, 68, '2021-08-25 15:30:50', 1),
(3675, 9, 66, '2021-08-25 15:30:50', 1),
(3676, 9, 62, '2021-08-25 15:30:50', 1),
(3677, 9, 65, '2021-08-25 15:30:50', 1),
(3678, 9, 63, '2021-08-25 15:30:50', 1),
(3679, 9, 67, '2021-08-25 15:30:50', 1),
(3680, 9, 69, '2021-08-25 15:30:50', 1),
(3681, 4, 17, '2021-08-28 14:08:33', 1),
(3682, 4, 18, '2021-08-28 14:08:33', 1),
(3683, 4, 29, '2021-08-28 14:08:33', 1),
(3684, 4, 20, '2021-08-28 14:08:33', 1),
(3685, 4, 31, '2021-08-28 14:08:33', 1),
(3686, 4, 24, '2021-08-28 14:08:33', 1),
(3687, 4, 32, '2021-08-28 14:08:33', 1),
(3688, 4, 23, '2021-08-28 14:08:33', 1),
(3689, 4, 35, '2021-08-28 14:08:33', 1),
(3690, 4, 33, '2021-08-28 14:08:33', 1),
(3691, 4, 38, '2021-08-28 14:08:33', 1),
(3692, 4, 41, '2021-08-28 14:08:33', 1),
(3693, 4, 42, '2021-08-28 14:08:33', 1),
(3694, 4, 45, '2021-08-28 14:08:33', 1),
(3695, 4, 49, '2021-08-28 14:08:33', 1),
(3696, 4, 48, '2021-08-28 14:08:33', 1),
(3697, 4, 44, '2021-08-28 14:08:33', 1),
(3698, 4, 43, '2021-08-28 14:08:33', 1),
(3699, 4, 55, '2021-08-28 14:08:33', 1),
(3700, 4, 53, '2021-08-28 14:08:33', 1),
(3701, 4, 58, '2021-08-28 14:08:33', 1),
(3702, 4, 59, '2021-08-28 14:08:33', 1),
(3703, 4, 52, '2021-08-28 14:08:33', 1),
(3704, 4, 47, '2021-08-28 14:08:33', 1),
(3705, 4, 46, '2021-08-28 14:08:33', 1),
(3706, 4, 60, '2021-08-28 14:08:33', 1),
(3707, 4, 75, '2021-08-28 14:08:33', 1),
(3708, 4, 68, '2021-08-28 14:08:33', 1),
(3709, 4, 73, '2021-08-28 14:08:33', 1),
(3710, 4, 66, '2021-08-28 14:08:33', 1),
(3711, 4, 64, '2021-08-28 14:08:33', 1),
(3712, 4, 67, '2021-08-28 14:08:33', 1),
(3713, 4, 69, '2021-08-28 14:08:33', 1),
(3714, 4, 74, '2021-08-28 14:08:33', 1),
(3715, 4, 82, '2021-08-28 14:08:33', 1),
(3716, 4, 84, '2021-08-28 14:08:33', 1),
(3717, 4, 83, '2021-08-28 14:08:33', 1),
(3718, 4, 85, '2021-08-28 14:08:33', 1),
(3719, 4, 90, '2021-08-28 14:08:33', 1),
(3720, 4, 94, '2021-08-28 14:08:33', 1),
(3721, 4, 91, '2021-08-28 14:08:33', 1),
(3722, 4, 95, '2021-08-28 14:08:33', 1),
(3723, 4, 93, '2021-08-28 14:08:33', 1),
(3724, 4, 92, '2021-08-28 14:08:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_inclusions`
--

CREATE TABLE `cyg_hotel_inclusions` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `inclusions` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_mails`
--

CREATE TABLE `cyg_hotel_mails` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_mails`
--

INSERT INTO `cyg_hotel_mails` (`id`, `hotel_id`, `email`) VALUES
(3, 2, 'centralreservations@cygnetthotels.com'),
(4, 2, 'cygnett.nainital@cygnetthotels.com'),
(6, 3, 'ankur@rjm.com'),
(7, 4, 'centralreservations@cygnetthotels.com'),
(8, 5, 'test@test.com'),
(9, 6, 'daa@ggg.com'),
(10, 7, 'daa@ggg.com'),
(11, 8, 'datata.er@gmail.com'),
(12, 9, 'centralreservations@cygnetthotels.com'),
(13, 10, 'centralreservations@cygnetthotels.com'),
(14, 11, 'reservations@cygnetthotels.com'),
(15, 12, 'centralreservations@cygnetthotels.com'),
(16, 13, 'reservations@cygnetthotels.com'),
(17, 14, 'centralreservations@cygnetthotels.com'),
(18, 15, 'centralreservations@cygnetthotels.com'),
(19, 16, 'centralreservations@cygnetthotels.com'),
(20, 17, 'centralreservations@cygnetthotels.com'),
(21, 18, 'centralreservations@cygnetthotels.com'),
(22, 19, 'centralreservations@cygnetthotels.com'),
(23, 20, 'centralreservations@cygnetthotels.com'),
(24, 21, 'centralreservations@cygnetthotels.com'),
(25, 22, 'centralreservations@cygnetthotels.com'),
(26, 23, 'centralreservations@cygnetthotels.com'),
(27, 24, 'centralreservations@cygnetthotels.com'),
(28, 25, 'centralreservations@cygnetthotels.com'),
(29, 26, 'centralreservations@cygnetthotels.com'),
(30, 27, 'centralreservations@cygnetthotels.com'),
(31, 28, 'centralreservations@cygnetthotels.com'),
(32, 29, 'centralreservations@cygnetthotels.com'),
(33, 30, 'centralreservations@cygnetthotels.com');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_meeting_events`
--

CREATE TABLE `cyg_hotel_meeting_events` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `meeting_event_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `area` int(11) NOT NULL,
  `area_unit` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `max_occupancy` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `theatre` int(11) NOT NULL,
  `cluster` int(11) NOT NULL,
  `ushape` int(11) NOT NULL,
  `informal` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_meeting_events`
--

INSERT INTO `cyg_hotel_meeting_events` (`id`, `hotel_id`, `meeting_event_id`, `description`, `area`, `area_unit`, `max_occupancy`, `theatre`, `cluster`, `ushape`, `informal`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(2, 2, 1, '&lt;p&gt;cxvcvccvb fgggh&lt;/p&gt;', 1800, '2', '810', 210, 140, 160, 180, 0, 1, '2021-03-17 13:10:01', 1, '2021-03-19 12:12:46'),
(3, 16, 4, '&lt;p&gt;Columbia the conference room catering to a variety of mandates and requirements, which is why Cygnett Inn Repose is also known to be an excellent venue in Guwahati. Cygnett Inn Repose offers plentiful facilities like no other and is thus considered to be one of the best wedding venues in Guwahati.&lt;br&gt;&lt;/p&gt;', 1760, '2', '250', 110, 40, 36, 250, 1, 1, '2021-07-14 14:16:18', 1, '2021-08-16 13:59:26'),
(4, 16, 1, '&lt;p&gt;Summit the all purpose conference cum celebration space, can hold events catering to a variety of mandates and requirements. There are several reasons why Cygnett Inn Repose, Guwahati offers great value when it comes to corporate events - be it central location, hi-tech amenities or our top-notch expertise in flawless execution.&lt;/p&gt;', 708, '2', '50', 50, 30, 22, 50, 1, 1, '2021-07-14 15:24:48', 1, '2021-08-16 14:00:39'),
(5, 11, 1, '&lt;p&gt;Summit the all purpose conference cum celebration space, can hold events catering to a variety of mandates and requirements. There are several reasons why Cygnett Inn Sea View, Digha offers great value when it comes to corporate events - be it central location, hi-tech amenities or our top-notch expertise in flawless execution.&lt;br&gt;&lt;/p&gt;', 1700, '2', '150', 110, 60, 45, 150, 1, 1, '2021-07-14 15:31:02', 1, '2021-08-23 16:16:02'),
(6, 14, 4, '&lt;p&gt;Columbia the conference room catering to a variety of mandates and requirements, which is why Cygnett Park Meghna is also known to be an excellent venue in Bongaigaon. Cygnett Park Meghna offers plentiful facilities like no other and is thus considered to be one of the best wedding venues in Bongaigaon.&lt;br&gt;&lt;/p&gt;', 2200, '2', '450', 250, 120, 50, 450, 1, 1, '2021-07-14 15:47:26', 1, '2021-08-16 13:07:21'),
(7, 14, 1, '&lt;p&gt;Summit the all purpose conference cum celebration space, can hold events catering to a variety of mandates and requirements. There are several reasons why Cygnett Park Meghna, Bongaigaon offers great value when it comes to corporate events - be it central location, hi-tech amenities or our top-notch expertise in flawless execution.&lt;br&gt;&lt;/p&gt;', 760, '2', '80', 50, 28, 28, 80, 1, 1, '2021-07-14 15:49:33', 1, '2021-08-16 12:58:57'),
(8, 14, 5, '&lt;p&gt;Cygnett Park Meghna, Bongaigaon offers well maintained Board Rooms to corporates to conduct meetings. With state of the art infrastructure and technology, these Board Rooms are very well liked by the corporates.&lt;br&gt;&lt;/p&gt;', 714, '2', '28', 0, 0, 0, 28, 1, 1, '2021-07-14 15:53:12', 1, '2021-08-16 13:04:55'),
(9, 14, 6, '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tristique tempor dui, nec tempus metus dictum eget. Morbi odio massa, pulvinar nec cursus vitae, aliquet non orci. Nullam porttitor nisi ex, in hendrerit dolor luctus vitae.&lt;br&gt;&lt;/p&gt;', 4200, '2', '250', 0, 0, 0, 250, 0, 1, '2021-07-14 15:54:43', 1, '2021-08-16 11:29:36'),
(10, 22, 1, '&lt;p&gt;Summit the all purpose conference cum celebration space, can hold events catering to a variety of mandates and requirements. There are several reasons why Cygnett Style Signature, Mcleodganj offers great value when it comes to corporate events - be it central location, hi-tech amenities or our top-notch expertise in flawless execution.&lt;br&gt;&lt;/p&gt;', 2500, '2', '60', 70, 45, 30, 80, 1, 1, '2021-07-14 16:13:25', 1, '2021-08-16 14:05:41'),
(11, 15, 1, '&lt;p&gt;The banquet halls and conference rooms of Cygnett offer for one of the best venues for hosting social and corporate events. The central location of the venue simply adds to its convenience and quality service. One can choose amongst a range of highly flexible banqueting options that are designed to match the needs of any size and nature of events.&lt;br&gt;&lt;/p&gt;', 1496, '2', '120', 90, 50, 0, 120, 1, 1, '2021-07-15 12:37:41', 1, '2021-07-22 17:19:14'),
(12, 18, 1, '&lt;p&gt;Cygnett Inn Trendz, Itanagar offers great value when it comes to corporate events. Summit, the conference room, can hold events catering to a variety of mandates and requirements.&lt;br&gt;&lt;/p&gt;', 750, '2', '32', 0, 0, 0, 32, 1, 1, '2021-07-15 12:51:18', 1, '2021-08-23 10:48:46'),
(14, 4, 4, '&lt;p&gt;Columbia the conference room events catering to a variety of mandates and requirements which is why Cygnett Resort Mountain Breeze is also known to be an excellent resort in Nainital. Amongst a few other luxury wedding halls in Nainital, Cygnett Resort offers plentiful facilities like no other and is thus considered to be one of the best wedding venues in Nainital.&lt;/p&gt;', 2120, '2', '180', 150, 80, 60, 180, 1, 1, '2021-07-15 18:11:17', 1, '2021-08-16 14:58:00'),
(15, 25, 1, '&lt;p&gt;Highly flexible venues for meetings and ideal business amenities are the major reasons our hotel is preferred by many frequent business travellers in the city. These venues have everything that you may need while hosting a business meeting or a corporate event.&lt;br&gt;&lt;/p&gt;', 1030, '2', '150', 80, 40, 36, 150, 1, 1, '2021-07-22 17:59:24', 1, '2021-07-22 18:36:19'),
(16, 25, 2, '&lt;p&gt;Highly flexible venues for meetings and ideal business amenities are the major reasons our hotel is preferred by many frequent business travellers in the city. These venues have everything that you may need while hosting a business meeting or a corporate event.&lt;br&gt;&lt;/p&gt;', 292, '2', '20', 0, 14, 0, 20, 1, 1, '2021-07-22 18:00:42', 1, '2021-07-22 18:36:19'),
(17, 19, 4, '&lt;p&gt;Cygnett Lite Grand , Jaipur offers supreme value and unforgettable experiences when it comes to a range of business events and social celebrations. We offer attractive tailor-made residential conference packages for our well located, flexible spaces which are equipped to handle gatherings of any nature and size.&lt;br&gt;&lt;/p&gt;', 1550, '2', '130', 110, 60, 55, 130, 0, 1, '2021-07-26 12:43:39', 1, '2021-08-09 11:31:36'),
(18, 26, 5, '&lt;p&gt;Cygnett Inn Krishna, Nepalgunj offers well maintained Board Rooms to corporates to conduct meetings. With state of the art infrastructure and technology, these Board Rooms are very well liked by the corporates.&lt;br&gt;&lt;/p&gt;', 432, '2', '10', 0, 0, 10, 0, 1, 1, '2021-08-02 12:19:09', 1, '2021-08-16 14:08:23'),
(19, 26, 1, '&lt;p&gt;Summit the all purpose conference cum celebration space, can hold events catering to a variety of mandates and requirements. There are several reasons why Cygnett Inn Krishna, Nepalgunj offers great value when it comes to corporate events - be it central location, hi-tech amenities or our top-notch expertise in flawless execution.&lt;br&gt;&lt;/p&gt;', 1485, '2', '200', 120, 80, 60, 200, 1, 1, '2021-08-02 12:20:43', 1, '2021-08-16 14:07:49'),
(21, 24, 1, '&lt;p&gt;Summit the all purpose conference cum celebration space, can hold events catering to a variety of mandates and requirements. There are several reasons why Cygnett Inn Ramachandra, Vizag offers great value when it comes to corporate events - be it central location, hi-tech amenities or our top-notch expertise in flawless execution.&lt;br&gt;&lt;/p&gt;', 2500, '2', '100', 120, 60, 50, 100, 1, 1, '2021-08-16 14:18:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_meeting_events_images`
--

CREATE TABLE `cyg_hotel_meeting_events_images` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `meeting_event_id` int(11) NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_meeting_events_images`
--

INSERT INTO `cyg_hotel_meeting_events_images` (`id`, `hotel_id`, `meeting_event_id`, `image`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(2, 2, 2, '1615974931_banquet1.jpeg', 0, 1, '2021-03-17 15:25:31', NULL, NULL),
(3, 16, 3, '1626252378_repose-columbia.jpg', 1, 1, '2021-07-14 14:16:18', 1, '2021-07-20 21:57:06'),
(4, 16, 4, '1626256488_repose-summit.jpg', 1, 1, '2021-07-14 15:24:48', 1, '2021-07-20 21:57:06'),
(5, 11, 5, '1629099860_nepal-summit.jpg', 1, 1, '2021-07-14 15:31:02', 1, '2021-08-16 13:14:20'),
(6, 14, 6, '1626257846_meghna-columbia.jpg', 1, 1, '2021-07-14 15:47:26', 1, '2021-07-20 21:57:32'),
(7, 14, 7, '1626257973_meghna-summit.jpg', 1, 1, '2021-07-14 15:49:33', 1, '2021-07-20 21:57:32'),
(8, 14, 8, '1626258192_meghna-boardroom.jpg', 1, 1, '2021-07-14 15:53:12', 1, '2021-07-20 21:57:32'),
(9, 14, 9, '1626258283_banquet-noimage.jpg', 1, 1, '2021-07-14 15:54:43', 1, '2021-07-20 21:57:32'),
(10, 22, 10, '1626259405_signature-summit.jpg', 1, 1, '2021-07-14 16:13:25', 1, '2021-07-20 21:57:25'),
(11, 15, 11, '1626332861_gangtok-summit.jpg', 1, 1, '2021-07-15 12:37:41', 1, '2021-07-22 17:19:14'),
(12, 18, 12, '1629695926_itanagar-summit.jpg', 1, 1, '2021-07-15 12:51:18', 1, '2021-08-23 10:48:46'),
(14, 4, 14, '1626352877_nainital-columbia.jpg', 1, 1, '2021-07-15 18:11:17', 1, '2021-07-22 17:18:15'),
(21, 24, 21, '1629103710_summit-vizag.jpg', 1, 1, '2021-08-16 14:18:30', NULL, NULL),
(15, 25, 15, '1626956964_siamton-summit.jpg', 1, 1, '2021-07-22 17:59:24', 1, '2021-07-22 18:36:19'),
(16, 25, 16, '1626957042_siamton-discussion.jpg', 1, 1, '2021-07-22 18:00:42', 1, '2021-07-22 18:36:19'),
(17, 19, 17, '1627283619_meghna-columbia.jpg', 0, 1, '2021-07-26 12:43:39', 1, '2021-08-09 11:31:36'),
(18, 26, 18, '1627886949_nepal-boardroom.jpg', 1, 1, '2021-08-02 12:19:09', 1, '2021-08-02 13:12:22'),
(19, 26, 19, '1627887043_nepal-summit.jpg', 1, 1, '2021-08-02 12:20:43', 1, '2021-08-02 13:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_nearby`
--

CREATE TABLE `cyg_hotel_nearby` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `nearby_area` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nearby_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `image_icon` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_nearby`
--

INSERT INTO `cyg_hotel_nearby` (`id`, `hotel_id`, `nearby_area`, `nearby_detail`, `image_icon`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 2, 'Railway station', '7.5 kms', NULL, 1, '2021-03-10 15:56:01', 1, '2021-03-12 18:38:52', 1),
(2, 2, 'Pizza Hut', '200 meters', NULL, 1, '2021-03-12 18:38:52', 1, NULL, NULL),
(3, 7, 'rr', 'great', '', 1, '2021-05-02 00:50:40', 1, '2021-08-25 17:37:21', 1),
(4, 9, 'Railway Station', '2.5 Km', 'fas fa-train', 1, '2021-05-23 23:24:54', 1, '2021-08-25 15:30:50', 1),
(5, 9, 'Airport', '110 Km', 'fas fa-plane', 1, '2021-05-23 23:24:54', 1, '2021-08-25 15:30:50', 1),
(24, 14, 'Railway Station', '11.5Km', 'fas fa-train', 1, '2021-05-25 12:52:43', 1, '2021-08-13 14:51:50', 1),
(32, 14, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-25 12:54:12', 1, '2021-08-13 14:51:50', 1),
(9, 9, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-23 23:28:02', 1, '2021-08-25 15:30:50', 1),
(22, 9, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-24 13:27:34', 1, '2021-08-25 15:30:50', 1),
(23, 9, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-05-24 13:27:34', 1, '2021-08-25 15:30:50', 1),
(31, 14, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-25 12:54:12', 1, '2021-08-13 14:51:50', 1),
(30, 14, 'Airport', '186Km', 'fas fa-plane', 1, '2021-05-25 12:54:12', 1, '2021-08-13 14:51:50', 1),
(117, 15, 'City Center', '7 Km', 'fas fa-city', 1, '2021-07-22 15:24:14', 1, '2021-08-13 14:58:11', 1),
(116, 4, 'City Center', '17 Km', 'fas fa-city', 1, '2021-07-22 14:13:56', 1, '2021-08-28 14:08:33', 1),
(114, 23, 'City Center', '1 Km', 'fas fa-city', 1, '2021-07-22 12:43:18', 1, '2021-08-13 15:18:52', 1),
(33, 14, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-05-25 12:54:12', 1, '2021-08-13 14:51:50', 1),
(34, 11, 'Railway Station', '4K m', 'fas fa-train', 1, '2021-05-25 15:56:27', 1, '2021-08-23 16:13:51', 1),
(35, 11, 'Airport', '54 Km', 'fas fa-plane', 1, '2021-05-25 15:56:27', 1, '2021-08-23 16:13:51', 1),
(36, 11, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-25 15:56:27', 1, '2021-08-23 16:13:51', 1),
(37, 11, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-25 15:56:27', 1, '2021-08-23 16:13:51', 1),
(63, 16, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-05-26 14:29:49', 1, '2021-08-24 18:18:38', 1),
(53, 15, 'Shopping Mall', '7 Km', 'fas fa-shopping-cart', 1, '2021-05-26 12:03:04', 1, '2021-08-13 14:58:11', 1),
(52, 15, 'Spa', '6 Km', 'fas fa-spa', 1, '2021-05-26 12:03:04', 1, '2021-08-13 14:58:11', 1),
(51, 15, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-26 12:03:04', 1, '2021-08-13 14:58:11', 1),
(50, 15, 'Airport', '25 Km from Pakyong Airport', 'fas fa-plane', 1, '2021-05-26 12:03:04', 1, '2021-08-13 14:58:11', 1),
(49, 15, 'Railway Station', '120 Km from NJP Station', 'fas fa-train', 1, '2021-05-26 12:03:04', 1, '2021-08-13 14:58:11', 1),
(59, 16, 'Railway Station', '7Km', 'fas fa-train', 1, '2021-05-26 14:29:49', 1, '2021-08-24 18:18:38', 1),
(60, 16, 'Airport', '36Km', 'fas fa-plane', 1, '2021-05-26 14:29:49', 1, '2021-08-24 18:18:38', 1),
(61, 16, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-26 14:29:49', 1, '2021-08-24 18:18:38', 1),
(62, 16, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-26 14:29:49', 1, '2021-08-24 18:18:38', 1),
(64, 17, 'Railway Station', '15.6Km', 'fas fa-train', 1, '2021-05-26 23:22:51', 1, '2021-08-13 15:03:12', 1),
(65, 17, 'Airport', '18.1Km', 'fas fa-plane', 1, '2021-05-26 23:22:51', 1, '2021-08-13 15:03:12', 1),
(66, 17, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-26 23:22:51', 1, '2021-08-13 15:03:12', 1),
(67, 17, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-26 23:22:51', 1, '2021-08-13 15:03:12', 1),
(68, 17, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-05-26 23:22:51', 1, '2021-08-13 15:03:12', 1),
(69, 18, 'Railway Station', '15 Km', 'fas fa-train', 1, '2021-05-27 11:18:27', 1, '2021-08-13 15:05:34', 1),
(70, 18, 'Airport', '60 Km', 'fas fa-plane', 1, '2021-05-27 11:18:27', 1, '2021-08-13 15:05:34', 1),
(71, 18, 'Bus Stand', '2 Km', 'fas fa-bus', 1, '2021-05-27 11:18:27', 1, '2021-08-13 15:05:34', 1),
(72, 18, 'Spa', '1 Km', 'fas fa-spa', 1, '2021-05-27 11:18:27', 1, '2021-08-13 15:05:34', 1),
(73, 18, 'Shopping Mall', '1 Km', 'fas fa-shopping-cart', 1, '2021-05-27 11:18:27', 1, '2021-08-13 15:05:34', 1),
(74, 20, 'Railway Station', 'NA', 'fas fa-train', 1, '2021-05-28 12:08:09', 1, '2021-08-05 15:53:18', 1),
(75, 20, 'Airport', 'NA', 'fas fa-plane', 1, '2021-05-28 12:08:09', 1, '2021-08-05 15:53:18', 1),
(76, 20, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-28 12:08:09', 1, '2021-08-05 15:53:18', 1),
(77, 20, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-28 12:08:09', 1, '2021-08-05 15:53:18', 1),
(78, 20, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-05-28 12:08:09', 1, '2021-08-05 15:53:18', 1),
(79, 21, 'Railway Station', '8Km', 'fas fa-train', 1, '2021-05-28 23:33:37', 1, '2021-08-13 15:09:12', 1),
(80, 21, 'Airport', '1Km', 'fas fa-plane', 1, '2021-05-28 23:33:37', 1, '2021-08-13 15:09:12', 1),
(81, 21, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-28 23:33:37', 1, '2021-08-13 15:09:12', 1),
(82, 21, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-28 23:33:37', 1, '2021-08-13 15:09:12', 1),
(83, 21, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-05-28 23:33:37', 1, '2021-08-13 15:09:12', 1),
(84, 22, 'Railway Station', '28Km', 'fas fa-train', 1, '2021-05-29 15:28:24', 1, '2021-08-13 15:12:34', 1),
(85, 22, 'Airport', '16.5Km', 'fas fa-plane', 1, '2021-05-29 15:28:24', 1, '2021-08-13 15:12:34', 1),
(86, 22, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-05-29 15:28:24', 1, '2021-08-13 15:12:34', 1),
(87, 22, 'Spa', 'NA', 'fas fa-spa', 1, '2021-05-29 15:28:24', 1, '2021-08-13 15:12:34', 1),
(88, 22, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-05-29 15:28:24', 1, '2021-08-13 15:12:34', 1),
(89, 4, 'Railway Station', '17 Km', 'fas fa-train', 1, '2021-05-31 18:14:15', 1, '2021-08-28 14:08:33', 1),
(90, 4, 'Airport', '52 Km', 'fas fa-plane', 1, '2021-05-31 18:14:15', 1, '2021-08-28 14:08:33', 1),
(91, 4, 'Bus Stand', '1 Km', 'fas fa-bus', 1, '2021-05-31 18:14:15', 1, '2021-08-28 14:08:33', 1),
(92, 4, 'Spa', 'Inhouse', 'fas fa-spa', 1, '2021-05-31 18:14:15', 1, '2021-08-28 14:08:33', 1),
(93, 4, 'Shopping Mall', '17 Km', 'fas fa-shopping-cart', 1, '2021-05-31 18:14:15', 1, '2021-08-28 14:08:33', 1),
(94, 23, 'Railway Station', '7 Km', 'fas fa-train', 1, '2021-06-01 00:17:28', 1, '2021-08-13 15:18:52', 1),
(95, 23, 'Airport', '15 Km', 'fas fa-plane', 1, '2021-06-01 00:17:28', 1, '2021-08-13 15:18:52', 1),
(96, 23, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-06-01 00:17:28', 1, '2021-08-13 15:18:52', 1),
(97, 23, 'Spa', '1 Km', 'fas fa-spa', 1, '2021-06-01 00:17:28', 1, '2021-08-13 15:18:52', 1),
(98, 23, 'Shopping Mall', '1 Km', 'fas fa-shopping-cart', 1, '2021-06-01 00:17:28', 1, '2021-08-13 15:18:52', 1),
(107, 24, 'Spa', 'NA', 'fas fa-spa', 1, '2021-06-01 15:47:50', 1, '2021-08-13 15:21:08', 1),
(106, 24, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-06-01 15:47:50', 1, '2021-08-13 15:21:08', 1),
(105, 24, 'Airport', '11Km', 'fas fa-plane', 1, '2021-06-01 15:47:50', 1, '2021-08-13 15:21:08', 1),
(104, 24, 'Railway Station', '20Km', 'fas fa-train', 1, '2021-06-01 15:47:50', 1, '2021-08-13 15:21:08', 1),
(108, 24, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-06-01 15:47:50', 1, '2021-08-13 15:21:08', 1),
(109, 13, 'Railway Station', '5Km', 'fas fa-train', 1, '2021-06-01 16:19:19', 1, '2021-08-02 17:51:04', 1),
(110, 13, 'Airport', '140Km', 'fas fa-plane', 1, '2021-06-01 16:19:19', 1, '2021-08-02 17:51:04', 1),
(111, 13, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-06-01 16:19:19', 1, '2021-08-02 17:51:04', 1),
(112, 13, 'Spa', 'NA', 'fas fa-spa', 1, '2021-06-01 16:19:19', 1, '2021-08-02 17:51:04', 1),
(113, 13, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-06-01 16:19:19', 1, '2021-08-02 17:51:04', 1),
(115, 18, 'City Center', '1 Km', 'fas fa-city', 1, '2021-07-22 14:08:14', 1, '2021-08-13 15:05:34', 1),
(118, 25, 'Railway Station', '42 Km', 'fas fas fa-train', 1, '2021-07-22 17:13:36', 1, '2021-08-05 16:01:00', 1),
(119, 25, 'Airport', '12 Km', 'fas fas fa-plane', 1, '2021-07-22 17:13:36', 1, '2021-08-05 16:01:00', 1),
(120, 25, 'Bus Stand', 'NA', 'fas fas fa-bus', 1, '2021-07-22 17:13:36', 1, '2021-08-05 16:01:00', 1),
(121, 25, 'Spa', 'NA', 'fas fas fa-spa', 1, '2021-07-22 17:13:36', 1, '2021-08-05 16:01:00', 1),
(122, 25, 'Shopping Mall', 'NA', 'fas fas fa-shopping-cart', 1, '2021-07-22 17:13:36', 1, '2021-08-05 16:01:00', 1),
(123, 25, 'City Center', 'NA', 'fas fa-city', 1, '2021-07-22 17:13:36', 1, '2021-08-05 16:01:00', 1),
(124, 19, 'Railway Station', '3 Km', 'fas fa-train', 1, '2021-07-26 12:23:10', 1, NULL, NULL),
(125, 19, 'Airport', '15 Km', 'fas fa-plane', 1, '2021-07-26 12:23:10', 1, NULL, NULL),
(126, 19, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-07-26 12:23:10', 1, NULL, NULL),
(127, 19, 'Spa', 'NA', 'fas fa-spa', 1, '2021-07-26 12:23:10', 1, NULL, NULL),
(128, 19, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-07-26 12:23:10', 1, NULL, NULL),
(129, 19, 'City Center', 'NA', 'fas fa-city', 1, '2021-07-26 12:23:10', 1, NULL, NULL),
(130, 26, 'Railway Station', '22 Km', 'fas fa-train', 1, '2021-07-29 12:40:37', 1, '2021-08-05 16:42:46', 1),
(131, 26, 'Airport', '23 Km', 'fas fa-plane', 1, '2021-07-29 12:40:37', 1, '2021-08-05 16:42:46', 1),
(132, 26, 'Bus Stand', 'NA', 'fas fa-bus', 1, '2021-07-29 12:40:37', 1, '2021-08-05 16:42:46', 1),
(133, 26, 'Spa', 'NA', 'fas fa-spa', 1, '2021-07-29 12:40:37', 1, '2021-08-05 16:42:46', 1),
(134, 26, 'Shopping Mall', 'NA', 'fas fa-shopping-cart', 1, '2021-07-29 12:40:37', 1, '2021-08-05 16:42:46', 1),
(135, 26, 'City Center', 'NA', 'fas fa-city', 1, '2021-07-29 12:40:37', 1, '2021-08-05 16:42:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_offers`
--

CREATE TABLE `cyg_hotel_offers` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `master_offer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `offer_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `short_intro` text COLLATE utf8_unicode_ci,
  `offer_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nights` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `days` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_to` date DEFAULT NULL,
  `be_url` text COLLATE utf8_unicode_ci,
  `image` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `cost` double DEFAULT NULL,
  `meta_title` text COLLATE utf8_unicode_ci,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_offers`
--

INSERT INTO `cyg_hotel_offers` (`id`, `hotel_id`, `master_offer_id`, `room_id`, `offer_title`, `short_intro`, `offer_description`, `nights`, `days`, `valid_from`, `valid_to`, `be_url`, `image`, `is_active`, `cost`, `meta_title`, `meta_description`, `meta_keywords`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(5, 9, 2, 3, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;div&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/div&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to&amp;nbsp; room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1Nw==&amp;groupId=MTkwNg==&amp;packageId=165700000000003&amp;minlos=4', '1621855505_free-night-stay.jpg', 1, 4500, '', '', '', '2021-05-24 16:25:02', 1, '2021-08-24 14:53:56', 1),
(6, 9, 12, 3, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '	https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1Nw==&amp;groupId=MTkwNg==&amp;packageId=165700000000004', '1621922361_weekend-offer1.jpg', 1, 4800, '', '', '', '2021-05-25 11:29:21', 1, '2021-08-24 14:54:21', 1),
(7, 9, 6, 3, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complementary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '	https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1Nw==&amp;groupId=MTkwNg==&amp;packageId=165700000000002&amp;ap=15', '1621922723_advance-purchase.jpg', 1, 3600, '', '', '', '2021-05-25 11:35:23', 1, '2021-08-24 14:52:50', 1),
(8, 9, 5, 3, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;Inclusions&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentry Wi-Fi&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1Nw==&amp;groupId=MTkwNg==&amp;packageId=165700000000006', '1621923115_last-min-deal.jpg', 1, 4500, '', '', '', '2021-05-25 11:41:55', 1, '2021-08-24 14:52:21', 1),
(9, 9, 4, 3, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room&amp;nbsp; availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '	https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1Nw==&amp;groupId=MTkwNg==&amp;packageId=165700000000005&amp;minlos=4', '1621923877_long-stay.jpg', 1, 3800, '', '', '', '2021-05-25 11:54:37', 1, '2021-08-24 14:53:32', 1),
(10, 14, 2, 5, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOA==&amp;groupId=MTkwNg==&amp;packageId=190800000000003&amp;minlos=4', '1621929718_free-night-stay.jpg', 1, 3600, '', '', '', '2021-05-25 13:31:58', 1, '2021-08-23 18:23:38', 1),
(11, 14, 12, 5, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOA==&amp;groupId=MTkwNg==&amp;packageId=190800000000002', '1621930273_weekend-offer1.jpg', 1, 3600, '', '', '', '2021-05-25 13:41:13', 1, '2021-08-23 18:25:19', 1),
(12, 14, 6, 5, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOA==&amp;groupId=MTkwNg==&amp;packageId=190800000000004&amp;ap=15', '1621930618_advance-purchase.jpg', 1, 4000, '', '', '', '2021-05-25 13:46:58', 1, '2021-08-23 18:23:08', 1),
(13, 14, 5, 5, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;Inclusions&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentry Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOA==&amp;groupId=MTkwNg==&amp;packageId=190800000000005', '1621931088_last-min-deal.jpg', 1, 4600, '', '', '', '2021-05-25 13:54:48', 1, '2021-08-23 18:24:12', 1),
(14, 14, 4, 5, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOA==&amp;groupId=MTkwNg==&amp;packageId=190800000000001&amp;minlos=4', '1621931438_long-stay.jpg', 1, 3600, '', '', '', '2021-05-25 14:00:38', 1, '2021-08-23 18:24:50', 1),
(15, 11, 2, 8, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Ng==&amp;groupId=MTkwNg==&amp;packageId=168600000000003&amp;minlos=4', '1621965680_free-night-stay.jpg', 1, 3500, '', '', '', '2021-05-25 23:31:20', 1, '2021-08-23 23:15:08', 1),
(16, 11, 6, 8, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Ng==&amp;groupId=MTkwNg==&amp;packageId=168600000000004&amp;ap=15', '1621965964_advance-purchase.jpg', 1, 3200, '', '', '', '2021-05-25 23:36:04', 1, '2021-08-23 23:14:00', 1),
(17, 11, 5, 8, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentry Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Ng==&amp;groupId=MTkwNg==&amp;packageId=168600000000005', '1621966172_last-min-deal.jpg', 1, 3100, '', '', '', '2021-05-25 23:39:32', 1, '2021-08-23 23:13:36', 1),
(18, 11, 3, 8, '', 'Stay Monday to Thursday and get complimentary Breakfast at Cygnett Pavilion', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Monday to Thursday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;&amp;nbsp;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Ng==&amp;groupId=MTkwNg==&amp;packageId=168600000000002', '1621966423_weekend-offer.jpg', 1, 2700, '', '', '', '2021-05-25 23:43:43', 1, '2021-08-23 23:15:34', 1),
(19, 11, 4, 8, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Ng==&amp;groupId=MTkwNg==&amp;packageId=168600000000001&amp;minlos=4', '1621966697_long-stay.jpg', 1, 2800, '', '', '', '2021-05-25 23:48:17', 1, '2021-08-23 23:14:41', 1),
(20, 15, 2, 11, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NA==&amp;groupId=MTkwNg==&amp;packageId=168400000000003&amp;minlos=4', '1622013279_free-night-stay.jpg', 1, 2600, '', '', '', '2021-05-26 12:44:39', 1, '2021-08-23 23:02:22', 1),
(21, 15, 6, 11, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NA==&amp;groupId=MTkwNg==&amp;packageId=168400000000004&amp;ap=15', '1622013834_advance-purchase.jpg', 1, 2600, '', '', '', '2021-05-26 12:53:54', 1, '2021-08-23 23:01:05', 1),
(22, 15, 5, 11, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentry Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NA==&amp;groupId=MTkwNg==&amp;packageId=168400000000005', '1622014096_last-min-deal.jpg', 1, 3000, '', '', '', '2021-05-26 12:58:16', 1, '2021-08-23 23:00:07', 1),
(23, 15, 3, 11, '', 'Stay Monday to Thursday and get complimentary Breakfast at Cygnett Pavilion', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Monday to Thursday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NA==&amp;groupId=MTkwNg==&amp;packageId=168400000000002', '1622014343_weekend-offer.jpg', 1, 2700, '', '', '', '2021-05-26 13:02:23', 1, '2021-08-23 23:02:59', 1),
(24, 15, 4, 11, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NA==&amp;groupId=MTkwNg==&amp;packageId=168400000000001&amp;minlos=4', '1622014573_long-stay.jpg', 1, 3000, '', '', '', '2021-05-26 13:06:13', 1, '2021-08-23 23:01:41', 1),
(25, 16, 2, 14, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Mg==&amp;groupId=MTkwNg==&amp;packageId=168200000000003&amp;minlos=4', '1622024907_free-night-stay.jpg', 1, 3500, '', '', '', '2021-05-26 15:58:27', 1, '2021-08-23 18:33:34', 1),
(26, 16, 12, 14, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Mg==&amp;groupId=MTkwNg==&amp;packageId=168200000000002', '1622025146_weekend-offer1.jpg', 1, 2800, '', '', '', '2021-05-26 16:02:26', 1, '2021-08-23 18:34:06', 1),
(27, 16, 6, 14, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Mg==&amp;groupId=MTkwNg==&amp;packageId=168200000000004&amp;ap=15', '1622025425_advance-purchase.jpg', 1, 3100, '', '', '', '2021-05-26 16:07:05', 1, '2021-08-23 18:32:41', 1),
(28, 16, 5, 14, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Mg==&amp;groupId=MTkwNg==&amp;packageId=168200000000005', '1622025621_last-min-deal.jpg', 1, 3300, '', '', '', '2021-05-26 16:10:21', 1, '2021-08-23 18:32:01', 1),
(29, 16, 4, 14, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4Mg==&amp;groupId=MTkwNg==&amp;packageId=168200000000001&amp;minlos=4', '1622025815_long-stay.jpg', 1, 2800, '', '', '', '2021-05-26 16:13:35', 1, '2021-08-23 18:33:09', 1),
(30, 17, 2, 17, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1OA==&amp;groupId=MTkwNg==&amp;packageId=165800000000003&amp;minlos=4', '1622053543_free-night-stay.jpg', 1, 2700, '', '', '', '2021-05-26 23:55:43', 1, '2021-08-24 14:59:37', 1),
(31, 17, 6, 17, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1OA==&amp;groupId=MTkwNg==&amp;packageId=165800000000004&amp;ap=15', '1622053766_advance-purchase.jpg', 1, 3100, '', '', '', '2021-05-26 23:59:26', 1, '2021-08-24 14:58:54', 1),
(32, 17, 5, 17, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1OA==&amp;groupId=MTkwNg==&amp;packageId=165800000000005', '1622053947_last-min-deal.jpg', 1, 2700, '', '', '', '2021-05-27 00:02:27', 1, '2021-08-24 14:58:32', 1),
(33, 17, 3, 17, '', 'Stay Monday to Thursday and get complimentary Breakfast at Cygnett Pavilion', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Monday to Thursday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1OA==&amp;groupId=MTkwNg==&amp;packageId=165800000000002', '1622054152_weekend-offer.jpg', 1, 2800, '', '', '', '2021-05-27 00:05:52', 1, '2021-08-24 14:59:58', 1),
(34, 17, 4, 17, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY1OA==&amp;groupId=MTkwNg==&amp;packageId=165800000000001&amp;minlos=4', '1622054393_long-stay.jpg', 1, 2700, '', '', '', '2021-05-27 00:09:53', 1, '2021-08-24 14:59:13', 1),
(35, 18, 2, 20, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;&amp;nbsp;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NQ==&amp;groupId=MTkwNg==&amp;packageId=168500000000003&amp;minlos=4', '1622112362_free-night-stay.jpg', 1, 3000, '', '', '', '2021-05-27 16:16:02', 1, '2021-08-23 23:12:17', 1),
(36, 18, 12, 20, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NQ==&amp;groupId=MTkwNg==&amp;packageId=168500000000002', '1622112580_weekend-offer1.jpg', 1, 2800, '', '', '', '2021-05-27 16:19:40', 1, '2021-08-23 23:12:39', 1),
(37, 18, 6, 20, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NQ==&amp;groupId=MTkwNg==&amp;packageId=168500000000004&amp;ap=15', '1622113065_advance-purchase.jpg', 1, 3200, '', '', '', '2021-05-27 16:27:45', 1, '2021-08-23 23:11:20', 1),
(38, 18, 5, 20, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentry Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NQ==&amp;groupId=MTkwNg==&amp;packageId=168500000000005', '1622113441_last-min-deal.jpg', 1, 2700, '', '', '', '2021-05-27 16:34:01', 1, '2021-08-23 23:10:57', 1),
(39, 18, 4, 20, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY4NQ==&amp;groupId=MTkwNg==&amp;packageId=168500000000001&amp;minlos=4', '1622113632_long-stay.jpg', 1, 3300, '', '', '', '2021-05-27 16:37:12', 1, '2021-08-23 23:11:51', 1),
(40, 20, 2, 23, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Buffet Breakfast at Access to Fitness Centre&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '', '1622186893_free-night-stay.jpg', 1, 3000, '', '', '', '2021-05-28 12:58:13', 1, NULL, 0),
(41, 20, 12, 24, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;&amp;nbsp;Complimentary Breakfast at Cygnett Pavilion - The multi cuisine 24x7 Restaurant&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '', '1622187169_weekend-offer1.jpg', 1, 3000, '', '', '', '2021-05-28 13:02:49', 1, NULL, 0),
(42, 20, 6, 24, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complementary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '', '1622187394_advance-purchase.jpg', 1, 3200, '', '', '', '2021-05-28 13:06:34', 1, NULL, 0),
(43, 20, 5, 24, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Buffet Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentry Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '', '1622187599_last-min-deal.jpg', 1, 3100, '', '', '', '2021-05-28 13:09:59', 1, NULL, 0),
(44, 20, 4, 24, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complementary Breakfast&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '', '1622187804_long-stay.jpg', 1, 3200, '', '', '', '2021-05-28 13:13:24', 1, NULL, 0),
(45, 21, 2, 26, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;Inclusions&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpackdetail?propertyId=MTkwNw==&amp;groupId=MTkwNg==&amp;packageId=190700000000003&amp;minlos=4', '1622276039_free-night-stay.jpg', 1, 3100, '', '', '', '2021-05-29 13:43:59', 1, '2021-08-23 18:04:55', 1),
(46, 21, 12, 26, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpackdetail?propertyId=MTkwNw==&amp;groupId=MTkwNg==&amp;packageId=190700000000002', '1622276426_weekend-offer1.jpg', 1, 3000, '', '', '', '2021-05-29 13:50:26', 1, '2021-08-23 18:06:36', 1),
(47, 21, 6, 26, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpackdetail?propertyId=MTkwNw==&amp;groupId=MTkwNg==&amp;packageId=190700000000004&amp;ap=15', '1622276639_advance-purchase.jpg', 1, 3200, '', '', '', '2021-05-29 13:53:59', 1, '2021-08-23 18:02:11', 1),
(48, 21, 5, 26, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpackdetail?propertyId=MTkwNw==&amp;groupId=MTkwNg==&amp;packageId=190700000000005', '1622276869_last-min-deal.jpg', 1, 3000, '', '', '', '2021-05-29 13:57:49', 1, '2021-08-23 18:05:28', 1),
(49, 21, 4, 26, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpackdetail?propertyId=MTkwNw==&amp;groupId=MTkwNg==&amp;packageId=190700000000001&amp;minlos=4', '1622277568_long-stay.jpg', 1, 3400, '', '', '', '2021-05-29 14:09:28', 1, '2021-08-23 18:06:07', 1),
(50, 22, 2, 31, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '0000-00-00', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkxMQ==&amp;groupId=MTkwNg==&amp;packageId=191100000000003&amp;minlos=4', '1622313631_free-night-stay.jpg', 1, 3000, '', '', '', '2021-05-30 00:10:31', 1, '2021-08-23 23:05:21', 1),
(51, 22, 6, 31, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkxMQ==&amp;groupId=MTkwNg==&amp;packageId=191100000000004&amp;ap=15', '1622313933_advance-purchase.jpg', 1, 3200, '', '', '', '2021-05-30 00:15:33', 1, '2021-08-23 23:04:24', 1),
(52, 22, 5, 31, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;Inclusions&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkxMQ==&amp;groupId=MTkwNg==&amp;packageId=191100000000005', '1622314153_last-min-deal.jpg', 1, 3000, '', '', '', '2021-05-30 00:19:13', 1, '2021-08-23 23:03:56', 1),
(53, 22, 3, 31, '', 'Stay Monday to Thursday and get complimentary Breakfast at Cygnett Pavilion', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Monday to Thursday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkxMQ==&amp;groupId=MTkwNg==&amp;packageId=191100000000002', '1622314544_weekend-offer.jpg', 1, 3200, '', '', '', '2021-05-30 00:25:44', 1, '2021-08-23 23:05:51', 1),
(54, 22, 4, 31, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkxMQ==&amp;groupId=MTkwNg==&amp;packageId=191100000000001&amp;minlos=4', '1622314720_long-stay.jpg', 1, 3200, '', '', '', '2021-05-30 00:28:40', 1, '2021-08-23 23:04:54', 1),
(55, 4, 1, 34, 'Honeymoon Package', 'In the pristine landscapes of the lower Himalayas with your loved one.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Honeymoon Package for 2N/3D&lt;/li&gt;&lt;li&gt;Couple\'s stay at Deluxe Room&lt;/li&gt;&lt;li&gt;City pick up/drop by private car&lt;/li&gt;&lt;li&gt;Tea &amp;amp; Breakfast in bed&lt;/li&gt;&lt;li&gt;A candle light dinner at one of our specialty restaurant (Prior booking required) worth ₹ 3,000 - cuisine of chioce (subject to availability) once during the stay&lt;/li&gt;&lt;li&gt;Chocolates, Cake &amp;amp; Wine on arrival&lt;/li&gt;&lt;li&gt;Balloon Decoration&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;b&gt;Sightseeing&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;First day visit to Nainital city and boating at Naini Lake&lt;/li&gt;&lt;li&gt;Prior booking required for boating at Naini Lake&lt;/li&gt;&lt;li&gt;Bird watching, morning walk&lt;/li&gt;&lt;li&gt;Bonfire in the evening (chargeable)&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '2', '3', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000006&amp;minlos=2', '1622482523_honeymoon-package1.jpg', 1, 16850, '', '', '', '2021-05-31 23:05:23', 1, '2021-09-01 12:23:10', 1),
(56, 4, 9, 35, '', 'Stay at Family Suite and enjoy daily breakfast at Cygnett Pavilion', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay at Family Suite with 2 adults and 1 kid (below 12 years)&lt;/li&gt;&lt;li&gt;Daily breakfast and one major meal (Lunch or Dinner) a set menu at our All Day Dinning - Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary evening tea / coffee with veg snacks&lt;/li&gt;&lt;li&gt;10% discount on Laundry&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;b&gt;Sightseeing&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Bird watching, morning walk&lt;/li&gt;&lt;li&gt;Bonfire in the evening (chargeable)&lt;/li&gt;&lt;/ul&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000008', '1622483122_family-staycation.jpg', 1, 6000, '', '', '', '2021-05-31 23:15:22', 1, '2021-08-23 18:42:34', 1),
(57, 4, 8, 36, '', 'Couple\'s stay at Royal Suite and enjoy daily breakfast at Cygnett Pavilion', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;3N/4D for couples&lt;/li&gt;&lt;li&gt;Couple\'s stay at Royal Suite&lt;/li&gt;&lt;li&gt;City pick up/drop by private car&lt;/li&gt;&lt;li&gt;Daily breakfast and one major meal (Lunch or Dinner) a set menu at our All Day Dining - Cygnett Pavilion&lt;/li&gt;&lt;li&gt;A unique dining experience during your stay which will include Live Barbeque&lt;/li&gt;&lt;li&gt;Set menu meal (lunch or dinner) will not be available on the day when the guest opts for the unique dining experience&lt;/li&gt;&lt;li&gt;Complimentary evening tea / coffee with veg snacks&lt;/li&gt;&lt;li&gt;10% discount on Laundry&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;b&gt;Sightseeing&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;First day visit to Nainital city and boating at Naini Lake&lt;/li&gt;&lt;li&gt;Second day visit to Ranikhet or Mukteshwar (Choose one)&lt;/li&gt;&lt;li&gt;Prior booking required for boating at Naini Lake&lt;/li&gt;&lt;li&gt;Bird watching, morning walk&lt;/li&gt;&lt;li&gt;Bonfire in the evening (chargeable)&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000009&amp;minlos=3', '1622483583_chillax-gateway.jpg', 1, 31250, '', '', '', '2021-05-31 23:23:03', 1, '2021-09-01 12:19:36', 1),
(58, 4, 7, 35, 'Picnic Delight For Family', 'After a good night sleep in an ultra comfortable bed, set off on an adventure trip to Naini Lake.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;2N/3D for family&lt;/li&gt;&lt;li&gt;Stay at Family Suite with 2 adults and 1 kid (below 12 years)&lt;/li&gt;&lt;li&gt;An ultra-comfortable room in double occupancy with 1 kid&lt;/li&gt;&lt;li&gt;First day visit to Nainital city and boating at Naini Lake&lt;/li&gt;&lt;li&gt;Prior booking required for boating at Naini lake&lt;/li&gt;&lt;li&gt;A picnic box with a meal for two, carefully prepared&lt;/li&gt;&lt;li&gt;The kit provided for the picnic: backpack, blanket, table cloth, tissue towels and disposables&lt;/li&gt;&lt;li&gt;Bird watching, morning walk&lt;/li&gt;&lt;li&gt;Bonfire in the evening (chargeable)&lt;/li&gt;&lt;li&gt;Late check out by 2 hours&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '2', '3', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000010&amp;minlos=2', '1622483963_picnic-delight1.jpg', 1, 19700, '', '', '', '2021-05-31 23:29:23', 1, '2021-09-01 12:57:23', 1),
(59, 4, 2, 34, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000003&amp;minlos=4', '1622484264_free-night-stay.jpg', 1, 3200, '', '', '', '2021-05-31 23:34:24', 1, '2021-08-23 18:29:06', 1),
(60, 4, 6, 34, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000004&amp;ap=15', '1622484487_advance-purchase.jpg', 1, 3400, '', '', '', '2021-05-31 23:38:07', 1, '2021-08-23 18:28:01', 1),
(61, 4, 5, 34, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000005', '1622484710_last-min-deal.jpg', 1, 3200, '', '', '', '2021-05-31 23:41:50', 1, '2021-08-23 18:27:39', 1),
(62, 4, 3, 34, '', 'Stay Monday to Thursday and get complimentary Breakfast at Cygnett Pavilion', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Monday to Thursday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000002', '1622484921_weekend-offer.jpg', 1, 3000, '', '', '', '2021-05-31 23:45:21', 1, '2021-08-23 18:29:44', 1),
(63, 4, 4, 34, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTkwOQ==&amp;groupId=MTkwNg==&amp;packageId=190900000000001&amp;minlos=4', '1622485128_long-stay.jpg', 1, 3000, '', '', '', '2021-05-31 23:48:48', 1, '2021-08-23 18:28:33', 1),
(64, 23, 2, 37, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY3NA==&amp;groupId=MTkwNg==&amp;packageId=167400000000003&amp;minlos=4', '1622530797_free-night-stay.jpg', 1, 3000, '', '', '', '2021-06-01 12:29:57', 1, '2021-08-23 18:14:13', 1),
(65, 23, 12, 37, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusion&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY3NA==&amp;groupId=MTkwNg==&amp;packageId=167400000000002', '1622531848_weekend-offer1.jpg', 1, 3200, '', '', '', '2021-06-01 12:47:28', 1, '2021-08-23 18:18:02', 1);
INSERT INTO `cyg_hotel_offers` (`id`, `hotel_id`, `master_offer_id`, `room_id`, `offer_title`, `short_intro`, `offer_description`, `nights`, `days`, `valid_from`, `valid_to`, `be_url`, `image`, `is_active`, `cost`, `meta_title`, `meta_description`, `meta_keywords`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(66, 23, 6, 37, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '0000-00-00', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY3NA==&amp;groupId=MTkwNg==&amp;packageId=167400000000004&amp;ap=15', '1622534339_advance-purchase.jpg', 1, 3000, '', '', '', '2021-06-01 13:28:59', 1, '2021-08-23 18:13:19', 1),
(67, 23, 5, 37, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;Inclusions&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY3NA==&amp;groupId=MTkwNg==&amp;packageId=167400000000005', '1622535399_last-min-deal.jpg', 1, 3200, '', '', '', '2021-06-01 13:46:39', 1, '2021-08-23 18:16:41', 1),
(68, 23, 4, 37, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;&amp;nbsp;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://staahmax.staah.net/be/indexpack?propertyId=MTY3NA==&amp;groupId=MTkwNg==&amp;packageId=167400000000001&amp;minlos=4', '1622535658_long-stay.jpg', 1, 3100, '', '', '', '2021-06-01 13:50:58', 1, '2021-08-23 18:17:29', 1),
(69, 13, 2, 41, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Buffet Breakfast and Access to Fitness Centre&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/common-cgi/package/packagebooking.pl?propertyId=8086&amp;amp;rateplanid=158688,158701&amp;amp;nights=3', '1622570501_free-night-stay.jpg', 1, 3000, '', '', '', '2021-06-01 23:31:41', 1, NULL, 0),
(70, 13, 12, 41, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion - The multi cuisine 24x7 Restaurant&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/common-cgi/package/packagebooking.pl?propertyId=8086&amp;amp;rateplanid=121482,121483', '1622570741_weekend-offer1.jpg', 1, 3200, '', '', '', '2021-06-01 23:35:41', 1, NULL, 0),
(71, 13, 6, 41, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Includes&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complementary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/common-cgi/package/packagebooking.pl?propertyId=8086&amp;amp;rateplanid=121475,121476&amp;amp;apdays=15', '1622571310_advance-purchase.jpg', 1, 3000, '', '', '', '2021-06-01 23:45:10', 1, NULL, 0),
(72, 13, 5, 41, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Buffet Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/common-cgi/package/packagebooking.pl?propertyId=8086&amp;amp;rateplanid=121477,121478', '1622571516_last-min-deal.jpg', 1, 3000, '', '', '', '2021-06-01 23:48:36', 1, NULL, 0),
(73, 13, 4, 41, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complementary Breakfast&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/common-cgi/package/packagebooking.pl?propertyId=8086&amp;amp;rateplanid=121479,121480&amp;amp;nights=4', '1622571736_long-stay.jpg', 1, 3000, '', '', '', '2021-06-01 23:52:16', 1, NULL, 0),
(74, 24, 2, 39, '', 'Book 15 days in advance and get 20% discount on best available rate plus 15% discount on F&amp;B', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&amp;nbsp;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY2Mg==&amp;groupId=MTkwNg==&amp;packageId=166200000000003&amp;minlos=4', '1622714283_free-night-stay.jpg', 1, 3000, '', '', '', '2021-06-03 15:28:03', 1, '2021-08-24 15:04:45', 1),
(75, 24, 12, 39, '', 'Stay Friday to Sunday and get complimentary Breakfast at Cygnett Pavilion.', '&lt;p&gt;&lt;b&gt;Includes&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY2Mg==&amp;groupId=MTkwNg==&amp;packageId=166200000000002', '1622714561_weekend-offer1.jpg', 1, 3000, '', '', '', '2021-06-03 15:32:41', 1, '2021-08-24 15:05:42', 1),
(76, 24, 6, 39, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY2Mg==&amp;groupId=MTkwNg==&amp;packageId=166200000000004&amp;ap=15', '1622714745_advance-purchase.jpg', 1, 3000, '', '', '', '2021-06-03 15:35:45', 1, '2021-08-24 15:03:56', 1),
(77, 24, 5, 39, '', 'Book same or upto 6 days prior to arrival to get 15% discount', '&lt;p&gt;Inclusions&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY2Mg==&amp;groupId=MTkwNg==&amp;packageId=166200000000005', '1622714956_last-min-deal.jpg', 1, 3000, '', '', '', '2021-06-03 15:39:16', 1, '2021-08-24 15:03:38', 1),
(78, 24, 4, 39, '', '15% Discount on Food &amp; Soft Beverages and complimentary Wi-Fi', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', 'https://booking.cygnetthotels.com/be/indexpack?propertyId=MTY2Mg==&amp;groupId=MTkwNg==&amp;packageId=166200000000001&amp;minlos=4', '1622715220_long-stay.jpg', 1, 3000, '', '', '', '2021-06-03 15:43:40', 1, '2021-08-24 15:04:16', 1),
(79, 25, 6, 46, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;b&gt;Inclusions&lt;/b&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '	https://staahmax.staah.net/be/indexpack?propertyId=MTY2NQ==&amp;groupId=MTkwNQ==&amp;packageId=166500000000002&amp;ap=15', '1626959150_advance-purchase.jpg', 1, 3000, '', '', '', '2021-07-22 18:35:50', 1, '2021-08-24 14:55:31', 1),
(80, 19, 6, 47, '', 'Book 15 days or more in advance or More and get 20 percent discount', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Inclusions&lt;/span&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '', '', '2021-01-01', '2021-12-31', '', '1627289338_advance-purchase.jpg', 1, 3100, '', '', '', '2021-07-26 14:18:13', 1, '2021-07-26 14:18:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_offer_banner_images`
--

CREATE TABLE `cyg_hotel_offer_banner_images` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `banner_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_banner_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_offer_banner_images`
--

INSERT INTO `cyg_hotel_offer_banner_images` (`id`, `hotel_id`, `offer_id`, `banner_image`, `mobile_banner_image`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(3, 2, 3, '1617952552_16jonny.jpg', '1617952552_box-img2.jpg', 1, '2021-04-09 12:45:52', 1, '2021-04-09 12:53:02', 1),
(4, 2, 3, '1617952600_16jonny.jpg', '1617952600_box-img2.jpg', 1, '2021-04-09 12:46:40', 1, '2021-04-09 12:53:02', 1),
(5, 2, 4, '1617952639_16jonny.jpg', '1617952639_box-img2.jpg', 0, '2021-04-09 12:47:19', 1, '2021-04-09 13:14:36', 1),
(6, 9, 5, '1621855155_free-nightstay-banner.jpg', NULL, 1, '2021-05-24 16:49:15', 1, '2021-08-24 14:53:56', 1),
(7, 9, 6, '1621922569_weekend-offer1-banner.jpg', NULL, 1, '2021-05-25 11:32:49', 1, '2021-08-24 14:54:21', 1),
(8, 9, 7, '1621922882_advance-purchase-banner.jpg', NULL, 1, '2021-05-25 11:38:02', 1, '2021-08-24 14:52:50', 1),
(9, 9, 8, '1621923115_last-min-deal-banner.jpg', NULL, 1, '2021-05-25 11:41:55', 1, '2021-08-24 14:52:21', 1),
(10, 9, 9, '1621923877_long-stay-banner.jpg', NULL, 1, '2021-05-25 11:54:37', 1, '2021-08-24 14:53:32', 1),
(11, 14, 10, '1621929718_free-nightstay-banner.jpg', '1621929718_free-nightstay-banner-mob.jpg', 1, '2021-05-25 13:31:58', 1, '2021-08-23 18:23:38', 1),
(12, 14, 11, '1621930377_weekend-offer1-banner.jpg', NULL, 1, '2021-05-25 13:42:57', 1, '2021-08-23 18:25:19', 1),
(13, 14, 12, '1621930788_advance-purchase-banner.jpg', '1621930788_advance-purchase-banner-mob.jpg', 1, '2021-05-25 13:49:48', 1, '2021-08-23 18:23:08', 1),
(14, 14, 13, '1621931088_last-min-deal-banner.jpg', '1621931088_last-min-deal-banner-mob.jpg', 1, '2021-05-25 13:54:48', 1, '2021-08-23 18:24:12', 1),
(15, 14, 14, '1621931438_long-stay-banner.jpg', '1621931438_long-stay-banner-mob.jpg', 1, '2021-05-25 14:00:38', 1, '2021-08-23 18:24:50', 1),
(16, 11, 15, '1621965680_free-nightstay-banner.jpg', '1621965680_free-nightstay-banner-mob.jpg', 1, '2021-05-25 23:31:20', 1, '2021-08-23 23:15:08', 1),
(17, 11, 16, '1621965964_advance-purchase-banner.jpg', '1621965964_advance-purchase-banner-mob.jpg', 1, '2021-05-25 23:36:04', 1, '2021-08-23 23:14:01', 1),
(18, 11, 17, '1621966172_last-min-deal-banner.jpg', '1621966172_last-min-deal-banner-mob.jpg', 1, '2021-05-25 23:39:32', 1, '2021-08-23 23:13:36', 1),
(19, 11, 18, '1621966423_weekday-banner.jpg', '1621966423_weekday-banner-mob.jpg', 1, '2021-05-25 23:43:43', 1, '2021-08-23 23:15:34', 1),
(20, 11, 19, '1621966697_long-stay-banner.jpg', '1621966697_long-stay-banner-mob.jpg', 1, '2021-05-25 23:48:17', 1, '2021-08-23 23:14:41', 1),
(21, 15, 20, '1622013279_free-nightstay-banner.jpg', '1622013279_free-nightstay-banner-mob.jpg', 1, '2021-05-26 12:44:39', 1, '2021-08-23 23:02:22', 1),
(22, 15, 21, '1622013834_advance-purchase-banner.jpg', '1622013834_advance-purchase-banner-mob.jpg', 1, '2021-05-26 12:53:54', 1, '2021-08-23 23:01:05', 1),
(23, 15, 22, '1622014096_last-min-deal-banner.jpg', '1622014096_last-min-deal-banner-mob.jpg', 1, '2021-05-26 12:58:16', 1, '2021-08-23 23:00:07', 1),
(24, 15, 23, '1622014343_weekday-banner.jpg', '1622014343_weekday-banner-mob.jpg', 1, '2021-05-26 13:02:23', 1, '2021-08-23 23:02:59', 1),
(25, 15, 24, '1622014573_long-stay-banner.jpg', '1622014573_long-stay-banner-mob.jpg', 1, '2021-05-26 13:06:13', 1, '2021-08-23 23:01:41', 1),
(26, 16, 25, '1622024907_free-nightstay-banner.jpg', '1622024907_free-nightstay-banner-mob.jpg', 1, '2021-05-26 15:58:27', 1, '2021-08-23 18:33:34', 1),
(27, 16, 26, '1622025146_weekend-offer1-banner.jpg', NULL, 1, '2021-05-26 16:02:26', 1, '2021-08-23 18:34:06', 1),
(28, 16, 27, '1622025425_advance-purchase-banner.jpg', '1622025425_advance-purchase-banner-mob.jpg', 1, '2021-05-26 16:07:05', 1, '2021-08-23 18:32:41', 1),
(29, 16, 28, '1622025621_last-min-deal-banner.jpg', '1622025621_last-min-deal-banner-mob.jpg', 1, '2021-05-26 16:10:21', 1, '2021-08-23 18:32:01', 1),
(30, 16, 29, '1622025815_long-stay-banner.jpg', '1622025815_long-stay-banner-mob.jpg', 1, '2021-05-26 16:13:35', 1, '2021-08-23 18:33:09', 1),
(31, 17, 30, '1622053543_free-nightstay-banner.jpg', '1622053543_free-nightstay-banner-mob.jpg', 1, '2021-05-26 23:55:43', 1, '2021-08-24 14:59:37', 1),
(32, 17, 31, '1622053766_advance-purchase-banner.jpg', '1622053766_advance-purchase-banner-mob.jpg', 1, '2021-05-26 23:59:26', 1, '2021-08-24 14:58:54', 1),
(33, 17, 32, '1622053947_last-min-deal-banner.jpg', '1622053947_last-min-deal-banner-mob.jpg', 1, '2021-05-27 00:02:27', 1, '2021-08-24 14:58:32', 1),
(34, 17, 33, '1622054152_weekday-banner.jpg', '1622054152_weekday-banner-mob.jpg', 1, '2021-05-27 00:05:52', 1, '2021-08-24 14:59:58', 1),
(35, 17, 34, '1622054393_long-stay-banner.jpg', '1622054393_long-stay-banner.jpg', 1, '2021-05-27 00:09:53', 1, '2021-08-24 14:59:13', 1),
(36, 18, 35, '1622112362_free-nightstay-banner.jpg', '1622112362_free-nightstay-banner-mob.jpg', 1, '2021-05-27 16:16:02', 1, '2021-08-23 23:12:17', 1),
(37, 18, 36, '1622112580_weekend-offer1-banner.jpg', NULL, 1, '2021-05-27 16:19:40', 1, '2021-08-23 23:12:39', 1),
(38, 18, 37, '1622113065_advance-purchase-banner.jpg', '1622113065_advance-purchase-banner-mob.jpg', 1, '2021-05-27 16:27:45', 1, '2021-08-23 23:11:20', 1),
(39, 18, 38, '1622113441_last-min-deal-banner.jpg', '1622113441_last-min-deal-banner-mob.jpg', 1, '2021-05-27 16:34:01', 1, '2021-08-23 23:10:57', 1),
(40, 18, 39, '1622113632_long-stay-banner.jpg', '1622113632_long-stay-banner-mob.jpg', 1, '2021-05-27 16:37:12', 1, '2021-08-23 23:11:51', 1),
(41, 20, 40, '1622186893_free-nightstay-banner.jpg', '1622186893_free-nightstay-banner-mob.jpg', 1, '2021-05-28 12:58:13', 1, '0000-00-00 00:00:00', 0),
(42, 20, 41, '1622187169_weekend-offer1-banner.jpg', NULL, 1, '2021-05-28 13:02:49', 1, '0000-00-00 00:00:00', 0),
(43, 20, 42, '1622187394_advance-purchase-banner.jpg', '1622187394_advance-purchase-banner-mob.jpg', 1, '2021-05-28 13:06:34', 1, '0000-00-00 00:00:00', 0),
(44, 20, 43, '1622187599_last-min-deal-banner.jpg', '1622187599_last-min-deal-banner-mob.jpg', 1, '2021-05-28 13:09:59', 1, '0000-00-00 00:00:00', 0),
(45, 20, 44, '1622187804_long-stay-banner.jpg', '1622187804_long-stay-banner-mob.jpg', 1, '2021-05-28 13:13:24', 1, '0000-00-00 00:00:00', 0),
(46, 21, 45, '1622276039_free-nightstay-banner.jpg', '1622276039_free-nightstay-banner-mob.jpg', 1, '2021-05-29 13:43:59', 1, '2021-08-23 18:04:55', 1),
(47, 21, 46, '1622276426_weekend-offer1-banner.jpg', NULL, 1, '2021-05-29 13:50:26', 1, '2021-08-23 18:06:36', 1),
(48, 21, 47, '1622276639_advance-purchase-banner.jpg', '1622276639_advance-purchase-banner-mob.jpg', 1, '2021-05-29 13:53:59', 1, '2021-08-23 18:02:11', 1),
(49, 21, 48, '1622276869_last-min-deal-banner.jpg', '1622276869_last-min-deal-banner-mob.jpg', 1, '2021-05-29 13:57:49', 1, '2021-08-23 18:05:28', 1),
(50, 21, 49, '1622277568_long-stay-banner.jpg', '1622277568_long-stay-banner-mob.jpg', 1, '2021-05-29 14:09:28', 1, '2021-08-23 18:06:07', 1),
(51, 22, 50, '1622313631_free-nightstay-banner.jpg', '1622313631_free-nightstay-banner-mob.jpg', 1, '2021-05-30 00:10:31', 1, '2021-08-23 23:05:21', 1),
(52, 22, 51, '1622313933_advance-purchase-banner.jpg', '1622313933_advance-purchase-banner-mob.jpg', 1, '2021-05-30 00:15:33', 1, '2021-08-23 23:04:24', 1),
(53, 22, 52, '1622314153_last-min-deal-banner.jpg', '1622314153_last-min-deal-banner-mob.jpg', 1, '2021-05-30 00:19:13', 1, '2021-08-23 23:03:56', 1),
(54, 22, 53, '1622314544_weekday-banner.jpg', '1622314544_weekday-banner-mob.jpg', 1, '2021-05-30 00:25:44', 1, '2021-08-23 23:05:51', 1),
(55, 22, 54, '1622314720_long-stay-banner.jpg', '1622314720_long-stay-banner-mob.jpg', 1, '2021-05-30 00:28:40', 1, '2021-08-23 23:04:54', 1),
(56, 4, 55, '1622482523_offer-img1.jpg', '1622482523_offer-img1-mob.jpg', 1, '2021-05-31 23:05:23', 1, '2021-09-01 12:23:10', 1),
(57, 4, 56, '1622483122_family-staycation-banner.jpg', '1622483122_family-staycation-banner-mob.jpg', 1, '2021-05-31 23:15:22', 1, '2021-08-23 18:42:34', 1),
(58, 4, 57, '1622483583_chillax-banner.jpg', '1622483583_chillax-banner-mob.jpg', 1, '2021-05-31 23:23:03', 1, '2021-09-01 12:19:36', 1),
(59, 4, 58, '1622483963_picnic-banner.jpg', '1622483963_picnic-banner-mob.jpg', 1, '2021-05-31 23:29:23', 1, '2021-09-01 12:57:23', 1),
(60, 4, 59, '1622484264_free-nightstay-banner.jpg', '1622484264_free-nightstay-banner-mob.jpg', 1, '2021-05-31 23:34:24', 1, '2021-08-23 18:29:06', 1),
(61, 4, 60, '1622484487_advance-purchase-banner.jpg', '1622484487_advance-purchase-banner-mob.jpg', 1, '2021-05-31 23:38:07', 1, '2021-08-23 18:28:01', 1),
(62, 4, 61, '1622484710_last-min-deal-banner.jpg', '1622484710_last-min-deal-banner-mob.jpg', 1, '2021-05-31 23:41:50', 1, '2021-08-23 18:27:39', 1),
(63, 4, 62, '1622484921_weekday-banner.jpg', '1622484921_weekday-banner-mob.jpg', 1, '2021-05-31 23:45:21', 1, '2021-08-23 18:29:44', 1),
(64, 4, 63, '1622485128_long-stay-banner.jpg', '1622485128_long-stay-banner-mob.jpg', 1, '2021-05-31 23:48:48', 1, '2021-08-23 18:28:33', 1),
(65, 23, 64, '1622530797_free-nightstay-banner.jpg', '1622530797_free-nightstay-banner-mob.jpg', 1, '2021-06-01 12:29:57', 1, '2021-08-23 18:14:13', 1),
(66, 23, 65, '1622531848_weekend-offer1-banner.jpg', NULL, 1, '2021-06-01 12:47:28', 1, '2021-08-23 18:18:02', 1),
(67, 23, 66, '1622534339_advance-purchase-banner.jpg', '1622534339_advance-purchase-banner-mob.jpg', 1, '2021-06-01 13:28:59', 1, '2021-08-23 18:13:19', 1),
(68, 23, 67, '1622535399_last-min-deal-banner.jpg', '1622535399_last-min-deal-banner-mob.jpg', 1, '2021-06-01 13:46:39', 1, '2021-08-23 18:16:41', 1),
(69, 23, 68, '1622535658_long-stay-banner.jpg', '1622535658_long-stay-banner-mob.jpg', 1, '2021-06-01 13:50:58', 1, '2021-08-23 18:17:29', 1),
(70, 13, 69, '1622570501_free-nightstay-banner.jpg', '1622570501_free-nightstay-banner-mob.jpg', 1, '2021-06-01 23:31:41', 1, '0000-00-00 00:00:00', 0),
(71, 13, 70, '1622570741_weekend-offer1-banner.jpg', NULL, 1, '2021-06-01 23:35:41', 1, '0000-00-00 00:00:00', 0),
(72, 13, 71, '1622571310_advance-purchase-banner.jpg', '1622571310_advance-purchase-banner-mob.jpg', 1, '2021-06-01 23:45:10', 1, '0000-00-00 00:00:00', 0),
(73, 13, 72, '1622571516_last-min-deal-banner.jpg', '1622571516_last-min-deal-banner-mob.jpg', 1, '2021-06-01 23:48:36', 1, '0000-00-00 00:00:00', 0),
(74, 13, 73, '1622571736_long-stay-banner.jpg', '1622571736_long-stay-banner-mob.jpg', 1, '2021-06-01 23:52:16', 1, '0000-00-00 00:00:00', 0),
(75, 24, 74, '1622714283_free-nightstay-banner.jpg', '1622714283_free-nightstay-banner-mob.jpg', 1, '2021-06-03 15:28:03', 1, '2021-08-24 15:04:45', 1),
(76, 24, 75, '1622714561_weekend-offer1-banner.jpg', NULL, 1, '2021-06-03 15:32:41', 1, '2021-08-24 15:05:42', 1),
(77, 24, 76, '1622714745_advance-purchase-banner.jpg', '1622714745_advance-purchase-banner-mob.jpg', 1, '2021-06-03 15:35:45', 1, '2021-08-24 15:03:56', 1),
(78, 24, 77, '1622714956_last-min-deal-banner.jpg', '1622714956_last-min-deal-banner-mob.jpg', 1, '2021-06-03 15:39:16', 1, '2021-08-24 15:03:38', 1),
(79, 24, 78, '1622715220_long-stay-banner.jpg', '1622715220_long-stay-banner-mob.jpg', 1, '2021-06-03 15:43:40', 1, '2021-08-24 15:04:16', 1),
(80, 25, 79, '1626959150_advance-purchase-banner.jpg', '1626959150_advance-purchase-banner-mob.jpg', 1, '2021-07-22 18:35:50', 1, '2021-08-24 14:55:31', 1),
(81, 19, 80, '1627289293_advance-purchase-banner.jpg', '1627289293_advance-purchase-banner-mob.jpg', 1, '2021-07-26 14:18:13', 1, '2021-07-26 14:18:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_offer_details`
--

CREATE TABLE `cyg_hotel_offer_details` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `offer_details` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_other_policies`
--

CREATE TABLE `cyg_hotel_other_policies` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `policy_text` text COLLATE utf8_unicode_ci NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_other_policies`
--

INSERT INTO `cyg_hotel_other_policies` (`id`, `hotel_id`, `policy_text`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 2, 'abcd', '0000-00-00 00:00:00', 0, NULL, NULL),
(2, 2, 'efghijhklmono', '0000-00-00 00:00:00', 0, NULL, NULL),
(3, 2, 'pqrstuvwxyz', '0000-00-00 00:00:00', 0, NULL, NULL),
(4, 3, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(5, 3, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(6, 3, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(7, 4, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(8, 4, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(9, 4, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(10, 5, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(11, 5, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(12, 5, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(13, 6, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(14, 6, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(15, 6, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(16, 7, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(17, 7, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(18, 7, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(19, 8, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(20, 8, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(21, 8, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(22, 9, 'A Negative Covid-19 test report (RT-PCR/Rapid Antigen Test) is mandatory for guests during check-in.', '0000-00-00 00:00:00', 0, NULL, NULL),
(23, 9, 'Credit/debit cards are accepted.', '0000-00-00 00:00:00', 0, NULL, NULL),
(24, 9, 'Outside food is not allowed in property premises.', '0000-00-00 00:00:00', 0, NULL, NULL),
(25, 10, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(26, 10, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(27, 10, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(28, 11, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(29, 11, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(30, 11, 'Outside food is not allowed in property premises', '0000-00-00 00:00:00', 0, NULL, NULL),
(31, 12, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(32, 12, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(33, 12, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(34, 13, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(35, 13, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(36, 13, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(37, 14, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(38, 14, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(39, 14, 'Pets are not allowed.', '0000-00-00 00:00:00', 0, NULL, NULL),
(40, 15, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(41, 15, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(42, 15, 'Pets are not allowed.', '0000-00-00 00:00:00', 0, NULL, NULL),
(43, 16, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(44, 16, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(45, 16, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(46, 17, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(47, 17, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(48, 17, 'Outside food is not allowed in property premises', '0000-00-00 00:00:00', 0, NULL, NULL),
(49, 18, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(50, 18, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(51, 18, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(52, 19, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(53, 19, 'Passport, Aadhar, Driving License and Govt. ID are accepted as ID proof(s)', '0000-00-00 00:00:00', 0, NULL, NULL),
(54, 19, 'Pets are not allowed.', '0000-00-00 00:00:00', 0, NULL, NULL),
(55, 20, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(56, 20, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(57, 20, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(58, 21, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(59, 21, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(60, 21, 'Pets are not allowed.', '0000-00-00 00:00:00', 0, NULL, NULL),
(61, 22, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(62, 22, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(63, 22, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(64, 23, 'Guests with fever are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(65, 23, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(66, 23, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(67, 24, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(68, 24, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(69, 24, 'Pets are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(70, 25, 'Guests with fever are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(71, 25, 'Guests below 18 years of age are not allowed at the property.', '0000-00-00 00:00:00', 0, NULL, NULL),
(72, 25, 'Aadhar, Passport and Driving License are accepted as ID proof(s)', '0000-00-00 00:00:00', 0, NULL, NULL),
(73, 26, 'Guests from containment zones are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(74, 26, 'Unmarried couples are not allowed', '0000-00-00 00:00:00', 0, NULL, NULL),
(75, 26, 'Pets are not allowed.', '0000-00-00 00:00:00', 0, NULL, NULL),
(76, 27, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(77, 27, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(78, 27, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(79, 28, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(80, 28, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(81, 28, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(82, 29, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(83, 29, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(84, 29, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(85, 30, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(86, 30, '', '0000-00-00 00:00:00', 0, NULL, NULL),
(87, 30, '', '0000-00-00 00:00:00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_page_category_banners`
--

CREATE TABLE `cyg_hotel_page_category_banners` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `page_category_id` int(11) NOT NULL,
  `banner_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_banner_image` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_page_category_banners`
--

INSERT INTO `cyg_hotel_page_category_banners` (`id`, `hotel_id`, `page_category_id`, `banner_image`, `mobile_banner_image`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(4, 9, 3, '1621852187_alwar-banner.jpg', '1621852187_alwar-banner-mob.jpg', 1, 1, '2021-05-24 15:59:47', NULL, NULL),
(3, 9, 1, '1621843202_alwar-banner.jpg', '1621846347_alwar-banner-mob.jpg', 1, 1, '2021-05-24 13:30:02', 1, '2021-05-24 14:22:27'),
(5, 9, 7, '1621854770_alwar-banner.jpg', '1621854770_alwar-banner-mob.jpg', 1, 1, '2021-05-24 16:42:50', NULL, NULL),
(6, 9, 5, '1621857551_alwar-banner.jpg', '1621857467_alwar-gal-img2.jpg', 1, 1, '2021-05-24 17:27:47', 1, '2021-05-24 17:29:11'),
(7, 9, 6, '1621857686_alwar-banner.jpg', '1621857686_alwar-banner-mob.jpg', 1, 1, '2021-05-24 17:31:26', NULL, NULL),
(8, 9, 4, '1621857813_alwar-banner.jpg', '1621857813_alwar-banner-mob.jpg', 1, 1, '2021-05-24 17:33:33', NULL, NULL),
(9, 14, 1, '1621927932_bongaigaon-unit-banner.jpg', '1621927932_bongaigaon-unit-banner-mob.jpg', 1, 1, '2021-05-25 13:02:12', NULL, NULL),
(10, 14, 3, '1621928581_bongaigaon-unit-banner.jpg', '1621928581_bongaigaon-unit-banner-mob.jpg', 1, 1, '2021-05-25 13:13:01', NULL, NULL),
(11, 14, 7, '1621929199_bongaigaon-unit-banner.jpg', '1621929199_bongaigaon-unit-banner-mob.jpg', 1, 1, '2021-05-25 13:23:19', NULL, NULL),
(12, 14, 5, '1621931918_bongaigaon-unit-banner.jpg', '1621931918_bongaigaon-unit-banner-mob.jpg', 1, 1, '2021-05-25 14:08:38', NULL, NULL),
(13, 14, 4, '1621935493_bongaigaon-unit-banner.jpg', '1621935493_bongaigaon-unit-banner-mob.jpg', 1, 1, '2021-05-25 15:08:13', NULL, NULL),
(14, 14, 6, '1621935585_bongaigaon-unit-banner.jpg', '1621935585_bongaigaon-unit-banner-mob.jpg', 1, 1, '2021-05-25 15:09:45', NULL, NULL),
(15, 11, 1, '1621938703_seaview-unit-banner.jpg', '1621938703_digha-unit-banner-mob.jpg', 1, 1, '2021-05-25 16:01:43', NULL, NULL),
(16, 11, 3, '1621938987_seaview-unit-banner.jpg', '1621938987_digha-unit-banner-mob.jpg', 1, 1, '2021-05-25 16:06:27', NULL, NULL),
(17, 11, 7, '1621939039_seaview-unit-banner.jpg', '1621939039_digha-unit-banner-mob.jpg', 1, 1, '2021-05-25 16:07:19', NULL, NULL),
(18, 11, 5, '1621939095_seaview-unit-banner.jpg', '1621939095_digha-unit-banner-mob.jpg', 1, 1, '2021-05-25 16:08:15', NULL, NULL),
(19, 11, 4, '1621939158_seaview-unit-banner.jpg', '1621939158_digha-unit-banner-mob.jpg', 1, 1, '2021-05-25 16:09:18', NULL, NULL),
(20, 11, 6, '1621939305_seaview-unit-banner.jpg', '1621939305_digha-unit-banner-mob.jpg', 1, 1, '2021-05-25 16:11:45', NULL, NULL),
(21, 15, 1, '1622011124_gangtok-unit-banner.jpg', '1622011124_gangtok-unit-banner-mob.jpg', 1, 1, '2021-05-26 12:08:44', NULL, NULL),
(22, 15, 3, '1622011367_gangtok-unit-banner.jpg', '1622011367_gangtok-unit-banner-mob.jpg', 1, 1, '2021-05-26 12:12:47', NULL, NULL),
(23, 15, 7, '1622011409_gangtok-unit-banner.jpg', '1622011409_gangtok-unit-banner-mob.jpg', 1, 1, '2021-05-26 12:13:29', NULL, NULL),
(24, 15, 5, '1622011508_gangtok-unit-banner.jpg', '1622011508_gangtok-unit-banner-mob.jpg', 1, 1, '2021-05-26 12:15:08', NULL, NULL),
(25, 15, 4, '1622011612_gangtok-unit-banner.jpg', '1622011612_gangtok-unit-banner-mob.jpg', 1, 1, '2021-05-26 12:16:52', NULL, NULL),
(26, 15, 6, '1622011692_gangtok-unit-banner.jpg', '1622011692_gangtok-unit-banner-mob.jpg', 1, 1, '2021-05-26 12:18:12', NULL, NULL),
(27, 16, 1, '1622022912_guwahati-unit-banner.jpg', '1622022912_guwahati-unit-banner-mob.jpg', 1, 1, '2021-05-26 15:25:12', NULL, NULL),
(28, 16, 3, '1622023126_guwahati-unit-banner.jpg', '1622023126_guwahati-unit-banner-mob.jpg', 1, 1, '2021-05-26 15:28:46', NULL, NULL),
(29, 16, 7, '1622023446_guwahati-unit-banner.jpg', '1622023446_guwahati-unit-banner-mob.jpg', 1, 1, '2021-05-26 15:34:06', NULL, NULL),
(30, 16, 5, '1622023501_guwahati-unit-banner.jpg', '1622023501_guwahati-unit-banner-mob.jpg', 1, 1, '2021-05-26 15:35:01', NULL, NULL),
(31, 16, 4, '1622023574_guwahati-unit-banner.jpg', '1622023574_guwahati-unit-banner-mob.jpg', 1, 1, '2021-05-26 15:36:14', NULL, NULL),
(32, 16, 6, '1622023625_guwahati-unit-banner.jpg', '1622023625_guwahati-unit-banner-mob.jpg', 1, 1, '2021-05-26 15:37:05', NULL, NULL),
(33, 17, 1, '1622051847_goa-unit-banner.jpg', '1622051847_goa-unit-banner-mob.jpg', 1, 1, '2021-05-26 23:27:27', NULL, NULL),
(34, 17, 3, '1622052008_goa-unit-banner.jpg', '1622052008_goa-unit-banner-mob.jpg', 1, 1, '2021-05-26 23:30:08', NULL, NULL),
(35, 17, 7, '1622052044_goa-unit-banner.jpg', '1622052044_goa-unit-banner-mob.jpg', 1, 1, '2021-05-26 23:30:44', NULL, NULL),
(36, 17, 5, '1622052092_goa-unit-banner.jpg', '1622052092_goa-unit-banner-mob.jpg', 1, 1, '2021-05-26 23:31:32', NULL, NULL),
(37, 17, 4, '1622052130_goa-unit-banner.jpg', '1622052130_goa-unit-banner-mob.jpg', 1, 1, '2021-05-26 23:32:10', NULL, NULL),
(38, 17, 6, '1622052171_goa-unit-banner.jpg', '1622052171_goa-unit-banner-mob.jpg', 1, 1, '2021-05-26 23:32:51', NULL, NULL),
(39, 18, 1, '1622094938_itanagar-banner.jpg', NULL, 1, 1, '2021-05-27 11:25:38', NULL, NULL),
(40, 18, 3, '1622111076_itanagar-banner.jpg', NULL, 1, 1, '2021-05-27 15:54:36', NULL, NULL),
(41, 18, 7, '1622111948_itanagar-banner.jpg', NULL, 1, 1, '2021-05-27 16:09:08', NULL, NULL),
(42, 18, 5, '1622111991_itanagar-banner.jpg', NULL, 1, 1, '2021-05-27 16:09:51', NULL, NULL),
(43, 18, 4, '1622112047_itanagar-banner.jpg', NULL, 1, 1, '2021-05-27 16:10:47', NULL, NULL),
(44, 18, 6, '1622112080_itanagar-banner.jpg', NULL, 1, 1, '2021-05-27 16:11:20', NULL, NULL),
(45, 20, 1, '1622184724_jodhpur-unit-banner.jpg', '1622184724_jodhpur-unit-banner-mob.jpg', 1, 1, '2021-05-28 12:17:20', 1, '2021-05-28 12:22:04'),
(46, 20, 3, '1622184796_jodhpur-unit-banner.jpg', '1622184796_jodhpur-unit-banner-mob.jpg', 1, 1, '2021-05-28 12:23:16', NULL, NULL),
(47, 20, 7, '1622184841_jodhpur-unit-banner.jpg', '1622184841_jodhpur-unit-banner-mob.jpg', 1, 1, '2021-05-28 12:24:01', NULL, NULL),
(48, 20, 5, '1622184887_jodhpur-unit-banner.jpg', '1622184887_jodhpur-unit-banner-mob.jpg', 1, 1, '2021-05-28 12:24:47', NULL, NULL),
(49, 20, 4, '1622184917_jodhpur-unit-banner.jpg', '1622184917_jodhpur-unit-banner-mob.jpg', 1, 1, '2021-05-28 12:25:17', NULL, NULL),
(50, 20, 6, '1622184958_jodhpur-unit-banner.jpg', '1622184958_jodhpur-unit-banner-mob.jpg', 1, 1, '2021-05-28 12:25:58', NULL, NULL),
(51, 21, 1, '1622226907_lucknow-unit-banner.jpg', '1622226907_lucknow-unit-banner-mob.jpg', 1, 1, '2021-05-29 00:05:07', NULL, NULL),
(52, 21, 3, '1622227013_lucknow-unit-banner.jpg', '1622227013_lucknow-unit-banner-mob.jpg', 1, 1, '2021-05-29 00:06:53', NULL, NULL),
(53, 21, 7, '1622227131_lucknow-unit-banner.jpg', '1622227131_lucknow-unit-banner-mob.jpg', 1, 1, '2021-05-29 00:08:51', NULL, NULL),
(54, 21, 5, '1622227287_lucknow-unit-banner.jpg', '1622227287_lucknow-unit-banner-mob.jpg', 1, 1, '2021-05-29 00:11:27', NULL, NULL),
(55, 21, 4, '1622227363_lucknow-unit-banner.jpg', '1622227363_lucknow-unit-banner-mob.jpg', 1, 1, '2021-05-29 00:12:43', NULL, NULL),
(56, 21, 6, '1622227493_lucknow-unit-banner.jpg', '1622227493_lucknow-unit-banner-mob.jpg', 1, 1, '2021-05-29 00:14:53', NULL, NULL),
(57, 22, 1, '1622282989_mcleodgang-unit-banner.jpg', '1622282989_mcleodgang-unit-banner-mob.jpg', 1, 1, '2021-05-29 15:39:49', NULL, NULL),
(58, 22, 3, '1622311829_mcleodgang-unit-banner.jpg', '1622311829_mcleodgang-unit-banner-mob.jpg', 1, 1, '2021-05-29 23:40:29', NULL, NULL),
(59, 22, 7, '1622311903_mcleodgang-unit-banner.jpg', '1622311903_mcleodgang-unit-banner-mob.jpg', 1, 1, '2021-05-29 23:41:43', NULL, NULL),
(60, 22, 5, '1622311957_mcleodgang-unit-banner.jpg', '1622311957_mcleodgang-unit-banner-mob.jpg', 1, 1, '2021-05-29 23:42:37', NULL, NULL),
(61, 22, 4, '1622312148_mcleodgang-unit-banner.jpg', '1622312148_mcleodgang-unit-banner-mob.jpg', 1, 1, '2021-05-29 23:45:48', NULL, NULL),
(62, 22, 6, '1622312369_mcleodgang-unit-banner.jpg', '1622312369_mcleodgang-unit-banner-mob.jpg', 1, 1, '2021-05-29 23:49:29', NULL, NULL),
(63, 4, 1, '1622465820_nainital-unit-banner.jpg', '1622465820_nainital-unit-banner-mob.jpg', 1, 1, '2021-05-31 18:27:00', NULL, NULL),
(64, 4, 3, '1622465894_nainital-unit-banner.jpg', '1622465894_nainital-unit-banner-mob.jpg', 1, 1, '2021-05-31 18:28:14', NULL, NULL),
(65, 4, 7, '1622465940_nainital-unit-banner.jpg', '1622465940_nainital-unit-banner-mob.jpg', 1, 1, '2021-05-31 18:29:00', NULL, NULL),
(66, 4, 5, '1622465978_nainital-unit-banner.jpg', '1622465978_nainital-unit-banner-mob.jpg', 1, 1, '2021-05-31 18:29:38', NULL, NULL),
(67, 4, 4, '1622466019_nainital-unit-banner.jpg', '1622466019_nainital-unit-banner-mob.jpg', 1, 1, '2021-05-31 18:30:19', NULL, NULL),
(68, 4, 6, '1622466052_nainital-unit-banner.jpg', '1622466052_nainital-unit-banner-mob.jpg', 1, 1, '2021-05-31 18:30:52', NULL, NULL),
(69, 23, 1, '1622486979_siliguri-unit-banner.jpg', '1622486979_siliguri-unit-banner-mob.jpg', 1, 1, '2021-06-01 00:19:39', NULL, NULL),
(70, 23, 3, '1622487056_siliguri-unit-banner.jpg', '1622487056_siliguri-unit-banner-mob.jpg', 1, 1, '2021-06-01 00:20:56', NULL, NULL),
(71, 23, 7, '1622487097_siliguri-unit-banner.jpg', '1622487097_siliguri-unit-banner-mob.jpg', 1, 1, '2021-06-01 00:21:37', NULL, NULL),
(72, 23, 5, '1622487133_siliguri-unit-banner.jpg', '1622487133_siliguri-unit-banner-mob.jpg', 1, 1, '2021-06-01 00:22:13', NULL, NULL),
(73, 23, 4, '1622487164_siliguri-unit-banner.jpg', '1622487164_siliguri-unit-banner-mob.jpg', 1, 1, '2021-06-01 00:22:44', NULL, NULL),
(74, 23, 6, '1622487199_siliguri-unit-banner.jpg', '1622487199_siliguri-unit-banner-mob.jpg', 1, 1, '2021-06-01 00:23:19', NULL, NULL),
(75, 24, 1, '1622542737_vizag-unit-banner.jpg', '1622542737_vizag-unit-banner-mob.jpg', 1, 1, '2021-06-01 15:48:57', NULL, NULL),
(76, 24, 3, '1622542819_vizag-unit-banner.jpg', '1622542819_vizag-unit-banner-mob.jpg', 1, 1, '2021-06-01 15:50:19', NULL, NULL),
(77, 24, 7, '1622542861_vizag-unit-banner.jpg', '1622542861_vizag-unit-banner-mob.jpg', 1, 1, '2021-06-01 15:51:01', NULL, NULL),
(78, 24, 5, '1622542900_vizag-unit-banner.jpg', '1622542900_vizag-unit-banner-mob.jpg', 1, 1, '2021-06-01 15:51:40', NULL, NULL),
(79, 24, 4, '1622542940_vizag-unit-banner.jpg', '1622542940_vizag-unit-banner-mob.jpg', 1, 1, '2021-06-01 15:52:20', NULL, NULL),
(80, 24, 6, '1622542975_vizag-unit-banner.jpg', '1622542975_vizag-unit-banner-mob.jpg', 1, 1, '2021-06-01 15:52:55', NULL, NULL),
(81, 13, 1, '1622544838_dwarka-unit-banner.jpg', '1622544838_dwarka-unit-banner-mob.jpg', 1, 1, '2021-06-01 16:23:58', NULL, NULL),
(82, 13, 3, '1622544940_dwarka-unit-banner.jpg', '1622544940_dwarka-unit-banner-mob.jpg', 1, 1, '2021-06-01 16:25:40', NULL, NULL),
(83, 13, 7, '1622544995_dwarka-unit-banner.jpg', '1622544995_dwarka-unit-banner-mob.jpg', 1, 1, '2021-06-01 16:26:35', NULL, NULL),
(84, 13, 5, '1622545036_dwarka-unit-banner.jpg', '1622545036_dwarka-unit-banner-mob.jpg', 1, 1, '2021-06-01 16:27:16', NULL, NULL),
(85, 13, 4, '1622545080_dwarka-unit-banner.jpg', '1622545080_dwarka-unit-banner-mob.jpg', 1, 1, '2021-06-01 16:28:00', NULL, NULL),
(86, 13, 6, '1622545110_dwarka-unit-banner.jpg', '1622545110_dwarka-unit-banner-mob.jpg', 1, 1, '2021-06-01 16:28:30', NULL, NULL),
(87, 25, 1, '1626958481_siamton-topbanner1.jpg', '1626958481_siamton-topbanner1-mob.jpg', 1, 1, '2021-07-22 18:24:41', NULL, NULL),
(88, 25, 3, '1626958549_siamton-topbanner1.jpg', '1626958549_siamton-topbanner1-mob.jpg', 1, 1, '2021-07-22 18:25:49', NULL, NULL),
(89, 25, 7, '1626958580_siamton-topbanner1.jpg', '1626958580_siamton-topbanner1-mob.jpg', 1, 1, '2021-07-22 18:26:20', NULL, NULL),
(90, 25, 5, '1626958609_siamton-topbanner1.jpg', '1626958609_siamton-topbanner1-mob.jpg', 1, 1, '2021-07-22 18:26:49', NULL, NULL),
(91, 25, 4, '1626958630_siamton-topbanner1.jpg', '1626958630_siamton-topbanner1-mob.jpg', 1, 1, '2021-07-22 18:27:10', NULL, NULL),
(92, 25, 6, '1626958652_siamton-topbanner1.jpg', '1626958652_siamton-topbanner1-mob.jpg', 1, 1, '2021-07-22 18:27:32', NULL, NULL),
(93, 19, 1, '1627289006_jaipurlite-topbanner.jpg', '1627289006_jaipurlite-mob.jpg', 1, 1, '2021-07-26 14:13:26', NULL, NULL),
(94, 19, 3, '1627289022_jaipurlite-topbanner.jpg', '1627289022_jaipurlite-mob.jpg', 1, 1, '2021-07-26 14:13:42', NULL, NULL),
(95, 19, 7, '1627289039_jaipurlite-topbanner.jpg', '1627289039_jaipurlite-mob.jpg', 1, 1, '2021-07-26 14:13:59', NULL, NULL),
(96, 19, 5, '1627289055_jaipurlite-topbanner.jpg', '1627289055_jaipurlite-mob.jpg', 1, 1, '2021-07-26 14:14:15', NULL, NULL),
(97, 19, 4, '1627289072_jaipurlite-topbanner.jpg', '1627289072_jaipurlite-mob.jpg', 1, 1, '2021-07-26 14:14:32', NULL, NULL),
(98, 19, 6, '1627289089_jaipurlite-topbanner.jpg', '1627289089_jaipurlite-mob.jpg', 1, 1, '2021-07-26 14:14:49', NULL, NULL),
(99, 26, 1, '1627559562_nepal-topbanner1.jpg', '1627559562_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:22:42', NULL, NULL),
(100, 26, 3, '1627559612_nepal-topbanner1.jpg', '1627559612_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:23:32', NULL, NULL),
(101, 26, 3, '1627559798_nepal-topbanner1.jpg', '1627559798_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:26:38', NULL, NULL),
(102, 26, 7, '1627559831_nepal-topbanner1.jpg', '1627559831_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:27:11', NULL, NULL),
(103, 26, 7, '1627559866_nepal-topbanner1.jpg', '1627559866_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:27:46', NULL, NULL),
(104, 26, 5, '1627559883_nepal-topbanner1.jpg', '1627559883_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:28:03', NULL, NULL),
(105, 26, 4, '1627559898_nepal-topbanner1.jpg', '1627559898_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:28:18', NULL, NULL),
(106, 26, 6, '1627559912_nepal-topbanner1.jpg', '1627559912_nepal-topbanner1-mob.jpg', 1, 1, '2021-07-29 17:28:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_page_category_meta`
--

CREATE TABLE `cyg_hotel_page_category_meta` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `page_category_id` int(11) NOT NULL,
  `meta_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` longtext COLLATE utf8_unicode_ci NOT NULL,
  `intro_text` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_page_category_meta`
--

INSERT INTO `cyg_hotel_page_category_meta` (`id`, `hotel_id`, `page_category_id`, `meta_title`, `meta_description`, `meta_keywords`, `intro_text`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(7, 9, 1, 'Hotel in alwar – Cygnett Lite, Alwar, Rajasthan – best hotels in Alwar', 'Cygnett Lite, Alwar, Rajasthan is a hotel in alwar located Near Samola Circle Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', '', '', 1, '2021-05-24 16:11:15', 1, '2021-08-31 11:51:36', 1),
(12, 9, 7, 'Cygnett Hotels & Resorts | Upscale,Midscale & Budget Hotels & Resorts | Top Hotels in India | Budget hotels in India', 'Cygnett Hotels and Resorts is an emerging hospitality company with 30 Hotels* in 25 locations, across 2 countries, that is responsive to the demands of a metamorphosing world. The multi-brand portfolio having multidirectional approach gives it the edge to cater to the rapidly changing hotel industry on the founding tenets of hospitality: quality, comfort and cygnetture service.', '', '', 1, '2021-05-24 20:27:36', 1, '2021-08-31 11:51:36', 1),
(11, 9, 3, 'Book Hotel Rooms in Alwar - Cygnett Lite, Alwar, Rajasthan – Best Accommodations', 'Looking for hotel in Alwar, Rajasthan? Cygnett Lite, Alwar, Rajasthan, is a leading hotel in Alwar that offers best service and relaxing stay. Book now for exclusive offers.', '', '', 1, '2021-05-24 20:26:45', 1, '2021-08-31 11:51:36', 1),
(13, 9, 5, 'Dining Restaurants in Alwar - Cygnett Lite, Alwar, Rajasthan', 'Cygnett Lite, Alwar, Rajasthan offers best dining restaurants in Alwar, serving cuisines from around the world. Book your table now!', '', '', 1, '2021-05-24 20:28:41', 1, '2021-08-31 11:51:36', 1),
(14, 9, 4, 'Meeting, Banquet & Conference Halls in Alwar - Cygnett Lite, Alwar, Rajasthan', 'Looking for a banquet hall or conference halls in Alwar for meeting, wedding, event & functions? Cygnett Lite, Alwar, Rajasthan offers banquet hall and conference hall facilities. Enquire Now', '', '', 1, '2021-05-24 20:29:28', 1, '2021-08-31 11:51:36', 1),
(15, 9, 6, 'Explore the Images and Video Gallery of Cygnett Lite, Alwar, Rajasthan', 'Images & video gallery of Cygnett Lite, Alwar, Rajasthan. Find and explore best snapshots, images & videos of best hotel in Alwar. Explore now!', '', '', 1, '2021-05-24 20:30:17', 1, '2021-08-31 11:51:36', 1),
(16, 14, 1, 'Hotels in Bongaigaon – Cygnett Park Meghna, Bongaigaon, Assam – Best Bongaigaon Hotels', 'Cygnett Park Meghna, Bongaigaon, Assam, is a best hotel in Bongaigaon located near NH-27 close to the Indian Oil hub. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Best hotels in Bongaigoan, Luxury hotel in Bongaigoan, Top hotels in Bongaigoan', '', 1, '2021-05-25 15:40:22', 1, '2021-08-31 11:48:53', 1),
(17, 14, 3, 'Book Hotel Rooms in Bongaigaon - Cygnett Park Meghna, Bongaigaon, Assam – Best Accommodations Option', 'Looking for a hotel in Bongaigaon? - - Cygnett Park Meghna, Bongaigaon, Assam is a leading luxury hotel in Bongaigaon that offers best service and relaxing stay. Book now for exclusive offers.', 'Business hotels in bongaigaon, 4 Star resort in Bongaigaon', '', 1, '2021-05-25 15:40:22', 1, '2021-08-31 11:48:53', 1),
(18, 14, 7, 'Hotel Special Offers & Deals in Bongaigaon - Cygnett Park Meghna, Bongaigaon, Assam', 'Get the best offers, packages and discounts available at Cygnett Park Meghna, Bongaigaon, Assam, one of the best hotels in Bongaigaon. Book Now', 'Hotel near New Bongaigaon Railway Station', '', 1, '2021-05-25 15:40:22', 1, '2021-08-31 11:48:53', 1),
(19, 14, 5, 'Dining Restaurants in Bongaigaon - Cygnett Park Meghna, Bongaigaon, Assam', 'Cygnett Park Meghna, Bongaigaon, Assam offers best dining restaurants in Bongaigaon, serving cuisines from around the world. Book your table now!', 'Budget hotel in Bonngaigaon, Hotel near Bagheshwari temple Bongaigaon', '', 1, '2021-05-25 15:40:22', 1, '2021-08-31 11:48:53', 1),
(20, 14, 4, 'Meeting, Banquet & Conference Halls in Bongaigaon Cygnett Park Meghna, Bongaigaon, Assam', 'Looking for a banquet hall or conference halls in Bongaigaon for meeting, wedding, event & functions? Cygnett Park Meghna, Bongaigaon, Assam offers banquet hall and conference hall facilities. Enquire Now', 'Top Banquet hall in Bongaigoan, Banquet hall in Bongaigoan for Marriage', '', 1, '2021-05-25 15:40:22', 1, '2021-08-31 11:48:53', 1),
(21, 14, 6, 'Explore the Images and Video Gallery of Cygnett Park Meghna, Bongaigaon, Assam', 'Images & video gallery of Cygnett Park Meghna, Bongaigaon, Assam. Find and explore best snapshots, images & videos of best hotel in Bongaigaon Airport. Explore now!', 'Hotel near New Bongaigaon Railway Station', '', 1, '2021-05-25 15:40:22', 1, '2021-08-31 11:48:53', 1),
(22, 11, 1, 'Hotels in Digha – Cygnett Inn Sea View, Digha, West Bengal – Hotels in Digha near Sea Beach', 'Cygnett Inn Sea View, Digha, West Bengal, is a luxury hotel in Digha located near railway station. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Hotels in Digha', '', 1, '2021-05-26 00:14:29', 1, '2021-08-31 11:45:35', 1),
(23, 11, 3, 'Book Hotel Rooms in Digha - Cygnett Inn Sea View, Digha – Hotels in Digha with Swimming Pool', 'Looking for luxury hotel in Digha? Cygnett Inn Sea View, Digha, West Bengal, is a leading luxury hotel in Digha that offers best service and relaxing stay. Book now for exclusive offers.', 'Hotels in Digha', '', 1, '2021-05-26 00:14:29', 1, '2021-08-31 11:45:35', 1),
(24, 11, 7, 'Hotel Special Offers & Deals in Digha - Cygnett Inn Sea View, Digha, West Bengal ', 'Get the best offers, packages and discounts available at Cygnett Inn Sea View, Digha, West Bengal, one of the best luxury hotels in Digha. Book Now', 'Hotels in Digha', '', 1, '2021-05-26 00:14:29', 1, '2021-08-31 11:45:35', 1),
(25, 11, 5, 'Dining Restaurants in Digha - Cygnett Inn Sea View, Digha, West Bengal ', 'Cygnett Inn Sea View, Digha, West Bengal offers best dining restaurants in Digha, serving cuisines from around the world. Book your table now!', 'Hotels in Digha', '', 1, '2021-05-26 00:14:29', 1, '2021-08-31 11:45:35', 1),
(26, 11, 4, 'Meeting, Banquet & Conference Halls in Digha - Cygnett Inn Sea View, Digha, West Bengal', 'Looking for a banquet hall or conference halls in Digha for meeting, wedding, event & functions? Cygnett Inn Sea View, Digha, West Bengal offers banquet hall and conference hall facilities. Enquire Now', 'Hotels in Digha', '', 1, '2021-05-26 00:14:29', 1, '2021-08-31 11:45:35', 1),
(27, 11, 6, 'Explore the Images and Video Gallery of Cygnett Inn Sea View, Digha, West Bengal', 'Images & video gallery of Cygnett Inn Sea View, Digha, West Bengal. Find and explore best snapshots, images & videos of best hotel in Digha. Explore now!', 'Hotels in Digha', '', 1, '2021-05-26 00:14:29', 1, '2021-08-31 11:45:35', 1),
(28, 15, 1, 'Hotels in Gangtok – Cygnett Inn La Maison, Gangtok – Budget Hotels in Gangtok near MG Road', 'Cygnett Inn La Maison, Gangtok, is a budget hotel in Gangtok located near MG road, Lal market. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Hotels in Gangtok, Budget Hotel in Gangtok, Gangtok Hotels, Cygnett Inn La Maison', '', 1, '2021-05-26 13:54:52', 1, '2021-08-31 11:42:30', 1),
(29, 15, 3, 'Book Hotel Rooms in Gangtok - Cygnett Inn La Maison, Gangtok – Best Accommodations Option', 'Looking for a hotel room in Gangtok? Cygnett Inn La Maison, Gangtok, is a leading hotel in Gangtok that offers best service and relaxing stay. Book now for exclusive offers.', 'Hotels in Gangtok, Budget Hotel in Gangtok, Gangtok Hotels, Cygnett Inn La Maison', '', 1, '2021-05-26 13:54:52', 1, '2021-08-31 11:42:30', 1),
(30, 15, 7, 'Hotel Special Offers & Deals in Gangtok - Cygnett Inn La Maison, Gangtok', 'Get the best offers, packages and discounts available at Cygnett Inn La Maison, Gangtok, one of the best best hotels in Gangtok. Book Now.', 'Hotels in Gangtok, Budget Hotel in Gangtok, Gangtok Hotels, Cygnett Inn La Maison', '', 1, '2021-05-26 13:54:52', 1, '2021-08-31 11:42:30', 1),
(31, 15, 5, 'Dining Restaurants in Gangtok - Cygnett Inn La Maison, Gangtok', 'Cygnett Inn La Maison, Gangtok offers best dining restaurants in Gangtok, serving cuisines from around the world. Book your table now!', 'Hotels in Gangtok, Budget Hotel in Gangtok, Gangtok Hotels, Cygnett Inn La Maison', '', 1, '2021-05-26 13:54:52', 1, '2021-08-31 11:42:30', 1),
(32, 15, 4, 'Meeting, Banquet & Conference Halls in Gangtok - Cygnett Inn La Maison, Gangtok', 'Looking for a banquet hall or conference halls in Gangtok for meeting, wedding, event & functions? Cygnett Inn La Maison, Gangtok offers banquet hall and conference hall facilities. Enquire Now', 'Hotels in Gangtok, Budget Hotel in Gangtok, Gangtok Hotels, Cygnett Inn La Maison', '', 1, '2021-05-26 13:54:52', 1, '2021-08-31 11:42:30', 1),
(33, 15, 6, 'Explore the Images and Video Gallery of Cygnett Inn La Maison, Gangtok', 'Images & video gallery of Cygnett Inn La Maison, Gangtok. Find and explore best snapshots, images & videos of best hotel in Gangtok. Explore now!', 'Hotels in Gangtok, Budget Hotel in Gangtok, Gangtok Hotels, Cygnett Inn La Maison', '', 1, '2021-05-26 13:54:52', 1, '2021-08-31 11:42:30', 1),
(34, 16, 1, 'Best Hotel in Guwahati – Cygnett Inn Repose, Guwahati, Assam – 3 Star Hotel in Guwahati', 'Cygnett Inn Repose, Guwahati, Assam, is a 3 star hotel in Guwahati located near Paltan Bazar, Beltola, Bus Stand. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Luxury hotel in Guwahati, 4star hotel in Guwahati, Best Guwahati Luxury hotel', '', 1, '2021-05-26 16:43:00', 1, '2021-08-31 11:39:22', 1),
(35, 16, 3, 'Book Hotel Rooms in Guwahati - Cygnett Inn Repose, Guwahati, Assam – Best Accommodations Options', 'Looking for Best hotel in Guwahati? Cygnett Inn Repose, Guwahati, Assam, is a leading best hotel in Guwahati that offers best service and relaxing stay. Book now for exclusive offers.', 'Best hotel for banquet in Guwahati, Budget hotels in Guwahati', '', 1, '2021-05-26 16:43:00', 1, '2021-08-31 11:39:22', 1),
(36, 16, 7, 'Hotel Special Offers & Deals in Guwahati - Cygnett Inn Repose, Guwahati, Assam', 'Get the best offers, packages and discounts available at Cygnett Inn Repose, Guwahati, Assam, one of the best Best hotels in Guwahati. Book Now', '', '', 1, '2021-05-26 16:43:00', 1, '2021-08-31 11:39:22', 1),
(37, 16, 5, 'Dining Restaurants in Guwahati - Cygnett Inn Repose, Guwahati, Assam', 'Cygnett Inn Repose, Guwahati, Assam offers best dining restaurants in Guwahati, serving cuisines from around the world. Book your table now!', 'Best hotels in Guwahati, Budget hotel in Guwahati', '', 1, '2021-05-26 16:43:00', 1, '2021-08-31 11:39:22', 1),
(38, 16, 4, 'Meeting, Banquet & Conference Halls in Guwahati - Cygnett Inn Repose, Guwahati, Assam', 'Looking for a banquet hall or conference halls in Guwahati for meeting, wedding, event & functions? Cygnett Inn Repose, Guwahati, Assam offers banquet hall and conference hall facilities. Enquire Now', 'Best Guwahati Business Hotel, Best Conference hall in Guwahati', '', 1, '2021-05-26 16:43:00', 1, '2021-08-31 11:39:22', 1),
(39, 16, 6, 'Explore the Images and Video Gallery of Cygnett Inn Repose, Guwahati, Assam', 'Images & video gallery of Cygnett Inn Repose, Guwahati, Assam. Find and explore best snapshots, images & videos of best hotel in Guwahati. Explore now!', '3 star hotels in Guwahati, Hotel near Guwahati GS road', '', 1, '2021-05-26 16:43:00', 1, '2021-08-31 11:39:22', 1),
(40, 17, 1, 'Luxury Hotels & Resorts in Candolim - Cygnett Inn Celestiial, Goa - 3 Star Hotels in Candolim Goa', 'Cygnett Inn Celestiial, Goa, is a luxury resort in Candolim Goa near beach. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Luxury hotels in Goa, Budget hotels in Goa', '', 1, '2021-05-27 00:39:14', 1, '2021-08-31 11:35:48', 1),
(41, 17, 3, 'Book Hotel Rooms in Candolim Goa - Cygnett Inn Celestiial, Goa – Best Accommodations Option', 'Looking for Luxury hotel in Candolim Goa? Cygnett Inn Celestiial, Goa, is a leading Luxuryhotel in Candolim Goa that offers best service and relaxing stay. Book now for exclusive offers. ', 'Budget Hotel in Goa, Resort in Calangute Goa, Top rated hotels in Goa', '', 1, '2021-05-27 00:39:14', 1, '2021-08-31 11:35:48', 1),
(42, 17, 7, 'Hotel Special Offers & Deals in Candolim Goa - Cygnett Inn Celestiial, Goa ', 'Get the best offers, packages and discounts available at Cygnett Inn Celestiial, Goa, one of the best luxury hotels in Candolim Goa. Book Now', 'Budget Hotels in North Goa, Resorts in Candolim beach', '', 1, '2021-05-27 00:39:14', 1, '2021-08-31 11:35:48', 1),
(43, 17, 5, 'Dining Restaurants in Candolim Goa - Cygnett Inn Celestiial, Goa', 'Cygnett Inn Celestiial, Goa offers best dining restaurants in Candolim Goa, serving cuisines from around the world. Book your table now! ', '', '', 1, '2021-05-27 00:39:14', 1, '2021-08-31 11:35:48', 1),
(44, 17, 6, 'Explore the Images and Video Gallery of Cygnett Inn Celestiial, Goa', 'Images & video gallery of Cygnett Inn Celestiial, Goa. Find and explore best snapshots, images & videos of best hotel in Candolim Goa. Explore now!', 'Luxury resort in Candolim beach, Low price hotels in North Goa', '', 1, '2021-05-27 00:39:14', 1, NULL, 0),
(45, 18, 1, 'Best Hotels in Itanagar – Cygnett Inn Trendz, Itanagar – Best Hotels in ziro Itanagar', 'Cygnett Inn Trendz, Itanagar, Arunachal Pradesh, is a best hotel in Itanagar located near ziro Itanagar. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now! ', 'Hotels in Itanagar, 3 Star Hotel in Itanagar, Cygnett Inn Trendz, Itanagar Hotels', '', 1, '2021-05-27 16:46:22', 1, '2021-08-31 11:32:29', 1),
(46, 18, 3, 'Book Hotel Rooms in Itanagar - Cygnett Inn Trendz, Itanagar – Best Accommodations Option ', 'Looking for a hotel in Itanagar? - - Cygnett Inn Trendz, Itanagar, Arunachal Pradesh is a leading luxury hotel in Itanagar that offers best service and relaxing stay. Book now for exclusive offers.', 'Hotels in Itanagar, 3 Star Hotel in Itanagar, Cygnett Inn Trendz, Itanagar Hotels', '', 1, '2021-05-27 16:46:22', 1, '2021-08-31 11:32:29', 1),
(47, 18, 7, 'Hotel Special Offers & Deals in Itanagar - Cygnett Inn Trendz, Itanagar, Arunachal Pradesh', 'Get the best offers, packages and discounts available at - Cygnett Inn Trendz, Itanagar, Arunachal Pradesh, one of the best hotels in Itanagar. Book Now', 'Hotels in Itanagar, 3 Star Hotel in Itanagar, Cygnett Inn Trendz, Itanagar Hotels', '', 1, '2021-05-27 16:46:22', 1, '2021-08-31 11:32:29', 1),
(48, 18, 5, 'Dining Restaurants in Itanagar - Cygnett Inn Trendz, Itanagar, Arunachal Pradesh ', 'Cygnett Inn Trendz, Itanagar, Arunachal Pradesh offers best dining restaurants in Itanagar, serving cuisines from around the world. Book your table now!', 'Hotels in Itanagar, 3 Star Hotel in Itanagar, Cygnett Inn Trendz, Itanagar Hotels', '', 1, '2021-05-27 16:46:22', 1, '2021-08-31 11:32:29', 1),
(49, 18, 4, 'Meeting, Banquet & Conference Halls in Itanagar Cygnett Inn Trendz, Itanagar, Arunachal Pradesh', 'Looking for a banquet hall or conference halls in Itanagar for meeting, wedding, event & functions? Cygnett Inn Trendz, Itanagar, Arunachal Pradesh offers banquet hall and conference hall facilities. Enquire Now', 'Hotels in Itanagar, 3 Star Hotel in Itanagar, Cygnett Inn Trendz, Itanagar Hotels\"', '', 1, '2021-05-27 16:46:22', 1, '2021-08-31 11:32:29', 1),
(50, 18, 6, 'gallery title', 'gallery desc', '', '', 1, '2021-05-27 20:14:00', 1, '2021-08-31 11:32:29', 1),
(51, 20, 1, 'Resort in Jodhpur – Cygnett Style Mantra, Jodhpur – Hotel near Mehrangarh Fort | Budget hotels in Jodhpur', 'Cygnett Style Mantra, Jodhpur, is a luxury hotel in Jodhpur located near Mehrangarh Fort. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Resort in Jodhpur, Hotel near Mehrangarh Fort, Budget hotels in Jodhpur', '', 1, '2021-05-28 13:37:48', 1, NULL, 0),
(52, 20, 3, 'Book Hotel Rooms in Jodhpur - Cygnett Style Mantra, Jodhpur – Best Accommodations Option', '\"Looking for luxury hotel in Jodhpur? Cygnett Style Mantra, Jodhpur, is a leading luxury hotel in Jodhpur that offers best service and relaxing stay. Book now for exclusive offers.', 'Best hotels in Jodhpur, 4 star hotel in Jodhpur', '', 1, '2021-05-28 13:37:48', 1, NULL, 0),
(53, 20, 7, 'Hotel Special Offers & Deals in Jodhpur - Cygnett Style Mantra, Jodhpur', 'Get the best offers, packages and discounts available at Cygnett Style Mantra, Jodhpur, one of the best luxury hotels in Jodhpur. Book Now', 'Best Hotel in Jodhpur, Hotels in Jodhpur, Cygnett Style Mantra, Budget Hotel in Jodhpur', '', 1, '2021-05-28 13:37:48', 1, NULL, 0),
(54, 20, 5, 'Dining Restaurants in Jodhpur - Cygnett Style Mantra, Jodhpur', 'Cygnett Style Mantra, Jodhpur offers best dining restaurants in Jodhpur, serving cuisines from around the world. Book your table now!', 'Hotels near Blue city Jodhpur, Best luxury hotels in Jodhpur', '', 1, '2021-05-28 13:37:48', 1, NULL, 0),
(55, 20, 6, 'Explore the Images and Video Gallery of Cygnett Style Mantra, Jodhpur', 'Images & video gallery of Cygnett Style Mantra, Jodhpur. Find and explore best snapshots, images & videos of best hotel in Jodhpur. Explore now!', 'Best Hotel in Jodhpur, Hotels in Jodhpur, Cygnett Style Mantra, Budget Hotel in Jodhpur', '', 1, '2021-05-28 13:37:48', 1, NULL, 0),
(56, 21, 1, 'Hotels in Transport Nagar Lucknow – Cygnett Park, Lucknow – 3 Star Hotels near Lucknow Airport', 'Cygnett Park, Lucknow, is a luxury busines hotel in Lucknow Transport Nagar located near Lucknow Airport. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', '3star hotel in Lucknow, Luxury hotel in Lucknow, Business hotel in Lucknow', '', 1, '2021-05-29 00:40:22', 1, '2021-08-31 11:28:37', 1),
(57, 21, 3, 'Book Hotel Rooms in Lucknow - Cygnett Park, Lucknow – Best Accommodations Option', 'Looking for a hotel in Lucknow? Cygnett Park, Lucknow, is a leading hotel in Lucknow that offers best service and relaxing stay. Book now for exclusive offers. ', 'Budget hotels in Lucknow, Top corporate hotel in Lucknow', '', 1, '2021-05-29 00:40:22', 1, '2021-08-31 11:28:37', 1),
(58, 21, 7, 'Hotel Special Offers & Deals in Lucknow - Cygnett Park, Lucknow ', 'Get the best offers, packages and discounts available at Cygnett Park, Lucknow, one of the best hotels in Lucknow. Book Now ', 'Closest hotel to Amausi Airport, Low price hotel near Lucknow Airport', '', 1, '2021-05-29 00:40:22', 1, '2021-08-31 11:28:37', 1),
(59, 21, 5, 'Restaurants in Lucknow Transport Nagar | Best Dining Restaurants in Lucknow near Airport - Cygnett Park, Lucknow', 'Cygnett Park, Lucknow offers best dining restaurants in Lucknow, serving cuisines from around the world. Book your table now! ', 'Best budget hotel in lucknow, Closest hotel near transport nagar Lucknow', '', 1, '2021-05-29 00:40:22', 1, '2021-08-31 11:28:37', 1),
(60, 21, 4, 'Meeting, Banquet & Conference Halls in Lucknow | Cygnett Park, Lucknow | Large Banquet Halls in Lucknow', 'Looking for a banquet hall or conference halls in Lucknow for meeting, wedding, event & functions? Cygnett Park, Lucknow offers banquet hall and conference hall facilities. Enquire Now', 'Best wedding hotel in Lucknow, Hotels for banquet hall in Lucknow', '', 1, '2021-05-29 00:40:22', 1, '2021-08-31 11:28:37', 1),
(61, 21, 6, 'Explore the Images and Video Gallery of Cygnett Park, Lucknow', 'Images & video gallery of Cygnett Park, Lucknow. Find and explore best snapshots, images & videos of best hotel in Lucknow. Explore now!', 'Best Lucknow business hotel, Budget hotel for conference in Lucknow', '', 1, '2021-05-29 00:40:22', 1, '2021-08-31 11:28:37', 1),
(62, 17, 6, 'Explore the Images and Video Gallery of Cygnett Inn Celestiial, Goa', 'Images & video gallery of Cygnett Inn Celestiial, Goa. Find and explore best snapshots, images & videos of best hotel in Candolim Goa. Explore now!', 'Luxury resort in Candolim beach, Low price hotels in North Goa', '', 1, '2021-05-29 16:41:18', 1, NULL, 0),
(63, 22, 1, 'Luxury Hotels in Mcleodganj – Cygnett Style Signature – Best Hotels in Dharamshala', 'Cygnett Style Signature, Mcleodganj, is a luxury hotel in Mcleodganj, Dharamshala located near Dalai Lama Temple. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Luxury hotels in Mcleodganj, Budget Hotel in Mcleodganj', '', 1, '2021-05-30 00:46:04', 1, '2021-08-31 11:24:25', 1),
(64, 22, 3, 'Book Hotel Rooms in Mcleodganj - Cygnett Style Signature, Mcleodganj – Best Accommodations Option', 'Looking for luxury hotel in Mcleodganj? Cygnett Style Signature, Mcleodganj, is a leading luxury hotel in Mcleodganj that offers best service and relaxing stay. Book now for exclusive offers.', 'Closest Hotel to Dalai Lama temple, Hotel near Tibetan Market Mcleodganj', '', 1, '2021-05-30 00:46:04', 1, '2021-08-31 11:24:25', 1),
(65, 22, 7, 'Hotel Special Offers & Deals in Mcleodganj - Cygnett Style Signature, Mcleodganj', 'Get the best offers, packages and discounts available at Cygnett Style Signature, Mcleodganj, one of the best luxury hotels in Mcleodganj. Book Now', 'Book budget hotel in Macleodganj, Best McLeodganj Luxury hotels', '', 1, '2021-05-30 00:46:04', 1, '2021-08-31 11:24:25', 1),
(66, 22, 5, 'Dining Restaurants in Mcleodganj - Cygnett Style Signature, Mcleodganj', 'Cygnett Style Signature, Mcleodganj offers best dining restaurants in Mcleodganj, serving cuisines from around the world. Book your table now!', 'Hotels Near Triund Trekking Point, Best 3 star hotel in Mcleodganj', '', 1, '2021-05-30 00:46:04', 1, '2021-08-31 11:24:25', 1),
(67, 22, 4, 'Meeting, Banquet & Conference Halls in Mcleodganj - Cygnett Style Signature, Mcleodganj', 'Looking for a banquet hall or conference halls in Mcleodganj for meeting, wedding, event & functions? Cygnett Style Signature, Mcleodganj offers banquet hall and conference hall facilities. Enquire Now', 'Top Banquet halls in Mcleodganj, Best meeting hotel in Mcleodganj', '', 1, '2021-05-30 00:46:04', 1, '2021-08-31 11:24:25', 1),
(68, 22, 6, 'Explore the Images and Video Gallery of Cygnett Style Signature, Mcleodganj', 'Images & video gallery of Cygnett Style Signature, Mcleodganj. Find and explore best snapshots, images & videos of best hotel in Mcleodganj. Explore now!.', 'Best budget hotel in McLeodganj, Hotels in Macleodganj', '', 1, '2021-05-30 00:46:04', 1, '2021-08-31 11:24:25', 1),
(69, 4, 1, 'Best Resorts in Nainital - Cygnett Resort Mountain Breeze - 5 Star Resorts in Nainital near Naini Lake', 'Cygnett Resort Mountain Breeze, Nainital, is a luxury resort in Nainital near Naini Lake. Book Mountain View luxury stay in Nainital from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Best Resorts in Nainital, Resorts in Nainital', '', 1, '2021-06-01 00:06:28', 1, '2021-08-31 11:18:48', 1),
(70, 4, 3, 'Book Hotel Rooms in Nainital - Cygnett Resort Mountain Breeze, Nainital – Best Accommodations Option', 'Looking for luxury hotel in Nainital? Cygnett Resort Mountain Breeze, Nainital, is a leading hotel in Nainital that offers best service and relaxing stay. Book now for exclusive offers.', 'Best Resorts in Nainital, Resorts in Nainital', '', 1, '2021-06-01 00:06:28', 1, '2021-08-31 11:18:48', 1),
(71, 4, 7, 'Hotel Special Offers & Deals in Nainital - Cygnett Resort Mountain Breeze, Nainital', 'Get the best offers, packages and discounts available at Cygnett Resort Mountain Breeze, Nainital, one of the best luxury hotels in Nainital. Book Now', 'Best Resorts in Nainital, Resorts in Nainital', '', 1, '2021-06-01 00:06:28', 1, '2021-08-31 11:18:48', 1),
(72, 4, 5, 'Best Dining Restaurants in Nainital - Cygnett Resort Mountain Breeze, Nainital', 'Cygnett Resort Mountain Breeze, Nainital offers best dining restaurants in Nainital, serving cuisines from around the world. Book your table now!', 'Best Resorts in Nainital, Resorts in Nainital', '', 1, '2021-06-01 00:06:28', 1, '2021-08-31 11:18:48', 1),
(73, 4, 4, 'Meeting, Banquet & Conference Halls in Nainital - Cygnett Resort Mountain Breeze, Nainital', 'Looking for a banquet hall or conference halls in Nainital for meeting, wedding, event & functions? Cygnett Resort Mountain Breeze, Nainital offers banquet hall and conference hall facilities. Enquire Now ', 'Best Resorts in Nainital, Resorts in Nainital', '', 1, '2021-06-01 00:06:28', 1, '2021-08-31 11:18:48', 1),
(74, 4, 6, 'Explore the Images and Video Gallery of Cygnett Resort Mountain Breeze, Nainital', 'Images & video gallery of Cygnett Resort Mountain Breeze, Nainital. Find and explore best snapshots, images & videos of best hotel in Nainital. Explore now!', 'Best Resorts in Nainital, Resorts in Nainital', '', 1, '2021-06-01 00:06:28', 1, '2021-08-31 11:18:48', 1),
(75, 23, 1, 'Best Hotels in Siliguri – Cygnett Style Tania’s, Siliguri – Best Siliguri Luxury Hotels', 'Cygnett Style Tania’s, Siliguri, is a best hotel in Siliguri located near Cosmos Mall, Pradhan Nagar. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Best Siliguri luxury hotels, Luxury hotels in Siliguri, Hotels in Siliguri', '', 1, '2021-06-01 00:41:20', 1, '2021-08-31 11:12:47', 1),
(76, 23, 3, 'Book Hotel Rooms in Siliguri - Cygnett Style Tania’s, Siliguri – Best Accommodations Option', 'Looking for a hotel in Siliguri? Cygnett Style Tania’s is a leading luxury hotel in Siliguri that offers best service and relaxing stay. Book now for exclusive offers. ', 'Corporate hotels in Siliguri, Hotel with Banquet Hall in Siliguri', '', 1, '2021-06-01 00:41:20', 1, '2021-08-31 11:12:47', 1),
(77, 23, 7, 'Hotel Special Offers & Deals in Siliguri - Cygnett Style Tania’s, Siliguri', 'Get the best offers, packages and discounts available at Cygnett Style Tania’s, Siliguri, one of the best best hotels in Siliguri. Book Now', 'Best Luxury resorts in Siliguri, 3 Star Corporate hotel in Siliguri', '', 1, '2021-06-01 00:41:20', 1, '2021-08-31 11:12:47', 1),
(78, 23, 5, 'Dining Restaurants in Siliguri - Cygnett Style Tania’s, Siliguri', 'Cygnett Style Tania’s, Siliguri offers best dining restaurants in Siliguri, serving cuisines from around the world. Book your table now!', 'Top Luxury resorts in Siliguri, 3 Star Business hotel in Siliguri', '', 1, '2021-06-01 00:41:20', 1, '2021-08-31 11:12:47', 1),
(79, 23, 6, 'Explore the Images and Video Gallery of Cygnett Style Tania’s, Siliguri', 'Images & video gallery of Cygnett Style Tania’s, Siliguri. Find and explore best snapshots, images & videos of best hotel in Siliguri. Explore now!', '', '', 1, '2021-06-01 00:41:20', 1, NULL, 0),
(80, 24, 1, 'Best Hotels in Visakhapatnam – Cygnett Inn Ramachandra, Visakhapatnam – Hotels near Visakhapatnam airport ', 'Cygnett Inn Ramachandra, Visakhapatnam, is a best hotel in Visakhapatnam located near airport. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', '', '', 1, '2021-06-01 16:13:46', 1, '2021-08-28 13:06:18', 1),
(81, 24, 3, 'Book Hotel Rooms in Visakhapatnam - Cygnett Inn Ramachandra, Visakhapatnam – Best Accommodations Option', 'Looking for a hotel in Visakhapatnam? - Cygnett Inn Ramachandra, Visakhapatnam is a leading luxury hotel in Visakhapatnam that offers best service and relaxing stay. Book now for exclusive offers.', '', '', 1, '2021-06-01 16:13:46', 1, '2021-08-28 13:06:18', 1),
(82, 24, 7, 'Hotel Special Offers & Deals in Visakhapatnam - Cygnett Inn Ramachandra, Visakhapatnam', 'Get the best offers, packages and discounts available at Cygnett Inn Ramachandra, Visakhapatnam, one of the best hotels in Visakhapatnam. Book Now ', '', '', 1, '2021-06-01 16:13:46', 1, '2021-08-28 13:06:18', 1),
(83, 24, 4, 'Meeting, Banquet & Conference Halls in Visakhapatnam Cygnett Inn Ramachandra, Visakhapatnam', 'Looking for a banquet hall or conference halls in Visakhapatnam for meeting, wedding, event & functions? Cygnett Inn Ramachandra, Visakhapatnam offers banquet hall and conference hall facilities. Enquire Now', '', '', 1, '2021-06-01 16:13:46', 1, '2021-08-28 13:06:18', 1),
(84, 24, 5, 'Dining Restaurants in Vizag - Cygnett Inn Ramachandra, Vizag', 'Top Luxury resorts in Vizag, 3 Star Business hotel in Vizag', 'Cygnett Inn Ramachandra, Vizag offers best dining restaurants in Vizag, serving cuisines from around the world. Book your table now!', '', 1, '2021-06-01 16:13:46', 1, '2021-08-23 17:57:18', 1),
(85, 13, 1, 'Hotels in Dwarka Gujarat – Cygnett Inn, Dwarka – Luxury Resort in Dwarka Gujarat', 'Cygnett Inn, Dwarka, is a luxury hotel in Dwarka, Gujarat located near Dwarkadhish Temple (JagatMandir), Nageshwar Temple. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', 'Hotels in Dwarka Gujarat, Luxury resort in Dwarka Gujarat', '', 1, '2021-06-01 23:26:02', 1, NULL, 0),
(86, 13, 3, 'Book Hotel Rooms in Dwarka, Gujarat - Cygnett Inn, Dwarka – Best Accommodations Option', 'Looking for Luxury hotel in Dwarka, Gujarat? Cygnett Inn, Dwarka, is a leading luxury hotel in Dwarka, Gujarat that offers best service and relaxing stay. Book now for exclusive offers.', '\"Hotel near Dwarkadhish temple Gujarat, Best resort to stay in Dwarka', '', 1, '2021-06-01 23:26:02', 1, NULL, 0),
(87, 13, 7, 'Hotel Special Offers & Deals in Dwarka, Gujarat - Cygnett Inn, Dwarka', 'Get the best offers, packages and discounts available at Cygnett Inn, Dwarka, one of the best Luxury hotels in Dwarka, Gujarat. Book Now', 'Economy hotel in Dwarka Gujarat, Low price resort in Dwarka', '', 1, '2021-06-01 23:26:02', 1, NULL, 0),
(88, 13, 5, 'Dining Restaurants & Cafe Lounge in Dwarka, Gujarat - Cygnett Inn, Dwarka', 'Cygnett Inn, Dwarka offers best dining restaurants in Dwarka, Gujarat, serving cuisines from around the world. Book your table now!', 'Best resort in Dwarka Gujarat, Best budget hotels in Dwarka Gujarat', '', 1, '2021-06-01 23:26:02', 1, NULL, 0),
(89, 13, 4, 'Meeting, Banquet & Conference Halls in Dwarka, Gujarat - Cygnett Inn, Dwarka', 'Looking for a banquet hall or conference halls in Dwarka, Gujarat for meeting, wedding, event & functions? Cygnett Inn, Dwarka offers banquet hall and conference hall facilities. Enquire Now', '3 star hotel in Dwarka Gujarat, Low budget resort in Dwarka Gujarat', '', 1, '2021-06-01 23:26:02', 1, NULL, 0),
(90, 13, 6, 'Explore the Images and Video Gallery of Cygnett Inn, Dwarka', 'Images & video gallery of Cygnett Inn, Dwarka. Find and explore best snapshots, images & videos of best hotel in Dwarka, Gujarat. Explore now!', 'Hotels near Dwarka jagat mandir,  Sea facing hotel in Dwarka Gujarat', '', 1, '2021-06-01 23:26:02', 1, NULL, 0),
(91, 25, 1, 'Hotel in Kolkata – Siamton Inn, Kolkata, West Bengal – 3 Star Hotels in Kolkata', 'Siamton Inn, Kolkata, West Bengal is a business and leisure hotel in Kolkata located near Park Street area. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', '', '', 1, '2021-07-22 18:19:38', 1, NULL, 0),
(92, 25, 3, 'Book Hotel Rooms in Kolkata - Siamton Inn, Kolkata, West – Best Accommodations in Kolkata', 'Looking for hotel in Kolkata? Siamton Inn, Kolkata, West Bengal, is a leading hotel in Kolkata that offers best service and relaxing stay. Book now for exclusive offers.', '', '', 1, '2021-07-22 18:19:38', 1, NULL, 0),
(93, 25, 7, 'Hotel in Kolkata – Siamton Inn, Kolkata -  Details will come later', 'Hotel in Kolkata – Siamton Inn, Kolkata -  Details will come later', '', '', 1, '2021-07-22 18:19:38', 1, NULL, 0),
(94, 25, 5, 'Restaurants in Kolkata | Best Dining Restaurants in Kolkata near Victoria Memorial - Siamton Inn, Kolkata', 'Siamton Inn, Kolkata, West Bengal offers best dining restaurants in Kolkata, serving cuisines from around the world. Book your table now!', '', '', 1, '2021-07-22 18:19:38', 1, NULL, 0),
(95, 25, 4, 'Meeting, Banquet & Conference Halls in Kolkata - Siamton Inn, Kolkata, West Bengal', 'Looking for a banquet hall or conference halls in Kolkata for meeting, wedding, event & functions? Siamton Inn, Kolkata, West Bengal offers banquet hall and conference hall facilities. Enquire Now.', '', '', 1, '2021-07-22 18:19:38', 1, NULL, 0),
(96, 25, 6, 'Explore the Images and Video Gallery of Siamton Inn, Kolkata', 'Images & video gallery Siamton Inn, Kolkata, West Bengal. Find and explore best snapshots, images & videos of best hotel in Kolkata. Explore now!', '', '', 1, '2021-07-22 18:19:38', 1, NULL, 0),
(97, 19, 1, 'Best Hotels in Bani Park Jaipur – Cygnett Lite Grand, Jaipur, Rajasthan – Best Jaipur Luxury Hotels', 'Cygnett Lite Grand, Jaipur, Rajasthan, is a best hotel in Bani Park Jaipur located near Collectorate Circle. Book from our Official Website to get Complimentary WiFi and Breakfast. Book Online Now!', '', '', 1, '2021-07-26 13:58:01', 1, '2021-07-26 13:58:09', 1),
(98, 19, 3, 'Book Hotel Rooms in Jaipur - Cygnett Lite Grand, Jaipur, Rajasthan – Best Accommodations Option', 'Looking for a hotel in Jaipur? - Cygnett Lite Grand is a leading luxury hotel in Jaipur that offers best service and relaxing stay. Book now for exclusive offers.', '', '', 1, '2021-07-26 13:58:01', 1, '2021-07-26 13:58:09', 1),
(99, 19, 7, 'Cygnett Hotels & Resorts - Hotel Special Offers, Hotels Discounts, Deals', 'Take Your Pick From A Wide Range Of Discounts And Packages', '', '', 1, '2021-07-26 13:58:01', 1, '2021-07-26 13:58:09', 1),
(100, 19, 5, 'Dining Restaurants in Bani Park Jaipur - Cygnett Lite Grand, Jaipur, Rajasthan', 'Cygnett Lite Grand, Jaipur, Rajasthan offers best dining restaurants in Bani Park Jaipur, serving cuisines from around the world. Book your table now!', '', '', 1, '2021-07-26 13:58:01', 1, '2021-07-26 13:58:09', 1),
(101, 19, 4, 'Meeting, Banquet & Conference Halls in Jaipur - Cygnett Lite Grand, Jaipur, Rajasthan', 'Looking for a banquet hall or conference halls in Jaipur for meeting, wedding, event & functions? Cygnett Lite Grand, Jaipur offers banquet hall and conference hall facilities. Enquire Now', '', '', 1, '2021-07-26 13:58:01', 1, '2021-07-26 13:58:09', 1),
(102, 19, 6, 'Explore the Images and Video Gallery of Cygnett Lite Grand, Jaipur, Rajasthan', 'Images & video gallery of Cygnett Lite Grand, Jaipur, Rajasthan. Find and explore best snapshots, images & videos of best hotel in Jaipur. Explore now!', '', '', 1, '2021-07-26 13:58:01', 1, '2021-07-26 13:58:09', 1),
(103, 26, 1, 'Luxury hotel in Nepalgunj | Best Business resort in Nepalgunj ', 'Make your bookings directly at the Luxury hotel in Nepalgunj. Experience Cygnetture Hospitality with Cygnett Inn Krishna Nepalgunj, Nepal. ', 'Luxury hotel in Nepalgunj, Best Business resort in Nepalgunj', '', 1, '2021-07-30 15:06:56', 1, '2021-08-31 11:15:21', 1),
(104, 26, 3, 'Best Corporate hotel in Nepalgunj | Budget hotel in Nepalgunj ', 'Browse best Corporate hotel in Nepalgunj and book with best price guarantee. The Cygnett Inn Krishna Nepalgunjis comfortable, clean and has good service with fine dining.', 'Best Corporate hotel in Nepalgunj, Budget hotel in Nepalgunj', '', 1, '2021-07-30 15:09:17', 1, '2021-08-31 11:15:21', 1),
(105, 26, 5, 'Luxury resorts in Nepalgunj | Hotel with Banquet hall in Nepalgunj', 'Make your bookings directly at the top banquet hall in Nepalgunj, Nepal. Experience Cygnetture Hospitality with Cygnett Inn Krishna Nepalgunj', 'Luxury resorts in Nepalgunj, Hotel with Banquet hall in Nepalgunj', '', 1, '2021-07-30 15:09:17', 1, NULL, 0),
(106, 26, 4, 'Best hotel with Conference hall in Nepalgunj | Best Hotels in Nepalgunj', 'Make your bookings directly at the top conference hall in Nepalgunj, Nepal. Experience Cygnetture Hospitality with Cygnett Inn Krishna Nepalgunj', 'Luxury resorts in Nepalgunj, Hotel with banquet hall in Nepalgunj', '', 1, '2021-07-30 15:09:17', 1, NULL, 0),
(107, 26, 6, '4 star hotel in Nepalgunj | Top Business hotel in Nepalgunj', 'Make your bookings directly at the top 4 Star business hotel in Nepalgunj. Experience Cygnetture Hospitality with Cygnett Inn Krishna Nepalgunj, Nepal.', '4 star hotel in Nepalgunj, Top businessnes hotel in Nepalgunj', '', 1, '2021-07-30 15:09:17', 1, NULL, 0),
(108, 24, 6, 'Explore the Images and Video Gallery of Cygnett Inn Ramachandra, Visakhapatnam', 'Images & video gallery of Cygnett Inn Ramachandra, Visakhapatnam. Find and explore best snapshots, images & videos of best hotel in Visakhapatnam. Explore now!', '', '', 1, '2021-08-23 17:54:00', 1, '2021-08-28 13:06:18', 1),
(109, 23, 6, 'Explore the Images and Video Gallery of Cygnett Style Tania’s, Siliguri ', 'Images & video gallery of Cygnett Style Tania’s, Siliguri. Find and explore best snapshots, images & videos of best hotel in Siliguri. Explore now! ', '', '', 1, '2021-08-31 11:12:47', 1, NULL, 0),
(110, 26, 6, '4 star hotel in Nepalgunj | Top Business hotel in Nepalgunj', 'Make your bookings directly at the top 4 Star business hotel in Nepalgunj. Experience Cygnetture Hospitality with Cygnett Inn Krishna Nepalgunj, Nepal. ', '4 star hotel in Nepalgunj, Top businessnes hotel in Nepalgunj', '', 1, '2021-08-31 11:15:21', 1, NULL, 0),
(111, 17, 6, 'Explore the Images and Video Gallery of Cygnett Inn Celestiial, Goa ', 'Images & video gallery of Cygnett Inn Celestiial, Goa. Find and explore best snapshots, images & videos of best hotel in Candolim Goa. Explore now! ', 'Luxury resort in Candolim beach, Low price hotels in North Goa', '', 1, '2021-08-31 11:35:48', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_page_category_others`
--

CREATE TABLE `cyg_hotel_page_category_others` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `page_category_id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt_text` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_page_images`
--

CREATE TABLE `cyg_hotel_page_images` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `page_category_id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alt_text` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image_description` tinytext COLLATE utf8_unicode_ci,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_phones`
--

CREATE TABLE `cyg_hotel_phones` (
  `id` int(11) NOT NULL,
  `hotel_id` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_phones`
--

INSERT INTO `cyg_hotel_phones` (`id`, `hotel_id`, `mobile`) VALUES
(4, '2', '8959 19219'),
(3, '2', '8595 45045'),
(16, '3', '9911911848'),
(15, '2', '9811885423'),
(17, '4', '8595450450'),
(18, '5', '9822123456'),
(19, '6', '9899123455'),
(20, '7', '9899123455'),
(21, '8', '8888888888'),
(22, '9', '8595450450'),
(23, '9', '8959192192'),
(24, '10', '8595450450'),
(25, '11', '8595450450'),
(26, '12', '8595450450'),
(27, '13', '8595450450'),
(28, '14', '8595450450'),
(29, '15', '8595450450'),
(30, '16', '8595450450'),
(31, '17', '8595450450'),
(32, '18', '8595450450'),
(33, '19', '8595450450'),
(34, '20', '8595450450'),
(35, '21', '8595450450'),
(36, '22', '8595450450'),
(37, '23', '8595450450'),
(38, '24', '8595450450'),
(39, '11', '8959192192'),
(42, '13', '8959192192'),
(43, '15', '8959192192'),
(45, '16', '8959192192'),
(46, '17', '8959192192'),
(47, '18', '8959192192'),
(48, '20', '8959192192'),
(49, '21', '8959192192'),
(50, '22', '8959192192'),
(51, '4', '8959192192'),
(65, '27', '8595450450'),
(64, '26', '8959192192'),
(63, '26', '8595450450'),
(55, '23', '8959192192'),
(58, '24', '8959192192'),
(60, '25', '8595450450'),
(61, '25', '8959192192'),
(62, '19', '8959192192'),
(66, '27', '8595192192'),
(67, '28', '8595450450'),
(68, '28', '8595192192'),
(69, '29', '8595450450'),
(70, '29', '8595192192'),
(71, '30', '8595450450'),
(72, '30', '8595192192');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_restaurant`
--

CREATE TABLE `cyg_hotel_restaurant` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `open_time` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `open_am_pm` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `close_time` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `close_am_pm` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_restaurant`
--

INSERT INTO `cyg_hotel_restaurant` (`id`, `hotel_id`, `restaurant_id`, `description`, `open_time`, `open_am_pm`, `close_time`, `close_am_pm`, `is_active`, `added_by`, `added_on`, `updated_on`, `updated_by`) VALUES
(1, 2, 1, '&lt;p&gt;image[]&lt;br&gt;&lt;/p&gt;', '12:30', 'PM', '11:00', 'PM', 0, 1, '2021-03-18 11:11:51', '2021-03-19 12:12:46', 1),
(2, 9, 8, '&lt;p&gt;The Cygnett Pavilion is an all-day dining restaurant marked by the pride of serving lavish lunch and dinner buffets. While the buffet is a comforting amalgamation of local flavors with global cuisine, the a la carte menu offers a wide range of delectable delights from around the world. The relaxed and comforting ambience marks as the perfect venue for family luncheons, fun brunch with friends, as well as informal business meetings. This multiplicity of the setting coupled with exemplary service.&lt;/p&gt;', '10:00', 'AM', '08:00', 'PM', 1, 1, '2021-05-24 16:08:51', '2021-08-23 17:44:26', 1),
(3, 14, 8, '&lt;p&gt;The Cygnett Pavilion is an all-day dining restaurant marked by the pride of serving lavish lunch and dinner buffets. While the buffet is a comforting amalgamation of local flavors with global cuisine, the a la carte menu offers a wide range of delectable delights from around the world. The relaxed and comforting ambience marks as the perfect venue for family luncheons, fun brunch with friends, as well as informal business meetings. This multiplicity of the setting coupled with exemplary service.&lt;/p&gt;', '10;00', 'AM', '08:00', 'PM', 1, 1, '2021-05-25 14:13:12', '2021-08-23 17:45:21', 1),
(4, 14, 5, '&lt;p&gt;Different in ideality and theme, the Metro Pub is not one of those conventional bars and plays host to groups of friends, corporate colleagues, as well as families. One can expect premium beverages, quality gourmet snacks, and tasteful background music at this fine pub. The contemporary decor, comfortable seating, and friendly service by the proficient staff adds to the overall experience. The well-stocked bar featuring a rare selection of some of the finest liquors makes it one of the best-rated.&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-05-25 14:16:12', '2021-08-23 17:45:43', 1),
(5, 11, 8, '&lt;p&gt;The Cygnett Pavilion is an all-day dining restaurant marked by the pride of serving lavish lunch and dinner buffets. While the buffet is a comforting amalgamation of local flavors with global cuisine, the a la carte menu offers a wide range of delectable delights from around the world. The relaxed and comforting ambience marks as the perfect venue for family luncheons, fun brunch with friends, as well as informal business meetings. This multiplicity of the setting coupled with exemplary service.&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-05-25 23:54:16', '2021-08-23 17:46:43', 1),
(6, 15, 8, '&lt;p&gt;The Cygnett Pavilion is an all-day dining restaurant marked by the pride of serving lavish lunch and dinner buffets. While the buffet is a comforting amalgamation of local flavors with global cuisine, the a la carte menu offers a wide range of delectable delights from around the world. The relaxed and comforting ambience marks as the perfect venue for family luncheons, fun brunch with friends, as well as informal business meetings. This multiplicity of the setting coupled with exemplary service.&lt;/p&gt;', '10:00', 'PM', '10:00', 'PM', 1, 1, '2021-05-26 13:12:37', '2021-08-23 17:47:43', 1),
(7, 15, 5, '&lt;p&gt;Different in ideality and theme, the Metro Pub is not one of those conventional bars and plays host to groups of friends, corporate colleagues, as well as families. One can expect premium beverages, quality gourmet snacks, and tasteful background music at this fine pub. The contemporary decor, comfortable seating, and friendly service by the proficient staff adds to the overall experience. The well-stocked bar featuring a rare selection of some of the finest liquors makes it one of the best-rated.&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-05-26 13:15:27', '2021-08-23 17:48:03', 1),
(8, 16, 8, '&lt;p&gt;The Cygnett Pavilion is an all-day dining restaurant marked by the pride of serving lavish lunch and dinner buffets. While the buffet is a comforting amalgamation of local flavours with global cuisine, the a la carte menu offers a wide range of delectable delights from around the world. The relaxed and comforting ambience marks as the perfect venue for family luncheons, fun brunch with friends, as well as informal business meetings. This multiplicity of the setting coupled with exemplary service.&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-05-26 16:16:55', '2021-07-20 21:57:06', 1),
(9, 16, 5, '&lt;p&gt;Different in ideality and theme, the Metro Pub is not one of those conventional bars and plays host to groups of friends, corporate colleagues, as well as families. One can expect premium beverages, quality gourmet snacks, and tasteful background music at this fine pub. The contemporary decor, comfortable seating, and friendly service by the proficient staff adds to the overall experience. The well-stocked bar featuring a rare selection of some of the finest liquors makes it one of the best-rated.&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-05-26 16:20:23', '2021-07-20 21:57:06', 1),
(10, 17, 8, '&lt;p&gt;Cygnett Pavilion(44 Seats) is among the finest restaurants in Candolim, Goa and gives you an opportunity to dine in the plush Goan way. Here, you can try a wide range of delicious cuisines and sip on beverages full of flavour. In addition to famous authentic Goan cuisine and tasty seafood, there are plenty of domestic as well as international cuisines to relish at Cygnett Pavilion.&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-05-27 00:20:56', '2021-07-20 21:56:44', 1),
(11, 18, 8, '&lt;p&gt;The preferred &lsquo;All Day Dining&rsquo; facility catering to the discerning food lover with an eclectic global fare comprising classics and innovative dishes, luscious food platters and exotic beverages. A spirited menu, stylish ambience and warm service makes this perfect for power lunches, elegant dinners, light occasions, business events and social celebrations alike.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-05-27 16:39:19', '2021-08-16 11:13:37', 1),
(12, 18, 5, '&lt;p&gt;Master-crafted culinary offerings over a sumptuous buffet spread, a wide range of rare and premium liquors &amp;amp; beverages and contemporary decor - along with a knowledgeable and couteous staff - make this the perfect rendezvous for family gatherings, working meals or informal parties alike. Ambient musi, a dance florr and an easy air of cheerful conviviality adds to the magic and charm of Cygnett Inn Trendz.&lt;br&gt;&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-05-27 16:40:40', '2021-08-16 11:10:30', 1),
(13, 20, 8, '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ultricies odio, imperdiet tempor ante. Quisque sem libero, elementum et tellus id, sagittis facilisis arcu. Nulla facilisi. Pellentesque cursus nulla euismod nisi efficitur, sed fringilla metus ultrices. Nulla eu ipsum in erat consectetur.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 0, 1, '2021-05-28 13:18:02', '2021-08-09 11:31:14', 1),
(14, 21, 8, '&lt;p&gt;This &quot;All day dining&quot; restaurant caters to all the tastes peculiar of a modern cosmopolitan palate. It features an eclectic a-la carte menu inspired by the delicacies from around the globe. It elevates your tastes with select beverages, luscious tit-bits and a sumptuous buffet spread that is any culinary connoisseur\'s delight.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-05-29 00:44:14', '2021-07-27 19:28:16', 1),
(15, 22, 8, '&lt;p&gt;Our dining options are not only a treat for our guests but are also the best choice of indulgence for the locals as well. The choice of treats are vivid and highly influencing to cater the needs of our guests.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-05-30 00:35:37', '2021-07-20 21:57:25', 1),
(16, 4, 8, '&lt;p&gt;The preferred &ldquo;All day dining&rdquo; facility catering to the discerning food lover with an eclectic global fare (both a-la-carte and buffet) comprising classics and innovative dishes, luscious food platters and exotic beverages. A spirited menu, stylish ambience and warm service makes this perfect for power lunches, elegant dinners, light occasion, business events and social celebrations alike.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-05-31 23:52:39', '2021-07-22 17:18:15', 1),
(17, 4, 5, '&lt;p&gt;Master &ndash;crafted culinary offering over a sumptuous buffet spread, a wide range of rare and premium liquors &amp;amp; beverages and contemporary d&eacute;cor &ndash; along with a knowledgeable and courteous staff- make this the perfect rendezvous for family gatherings, working meals or informal parties alike. Ambient, music and an easy air of cheerful conviviality make ads to the magic and charm.&lt;br&gt;&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-05-31 23:54:26', '2021-07-22 17:18:15', 1),
(18, 23, 8, '&lt;p&gt;Experienced chefs at our specialty multi-cuisine restaurant use local and fresh ingredients in imaginative and unique ways to bring you traditional flavours of the region, and help you rediscover classics with a memorable twist. The eclectic menu offers all kinds of options - from light snacks to full 8 course meals with a lot of variations - and can cater for special occasions and custom palates as well.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-06-01 00:30:40', '2021-07-22 17:18:05', 1),
(19, 23, 5, '&lt;p&gt;&amp;nbsp;The cozy restobar comes with a contemporary decor &amp;amp; cheery personality - and is well - stocked with liquors and labels. It also offers a variety of delectable snacks and bites - making it the perfect zone to unwind by one&rsquo;s self, celebrate moments and reconnect with special ones.&lt;br&gt;&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-06-01 00:32:35', '2021-07-22 17:18:05', 1),
(20, 24, 8, '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie, nisi eu pellentesque iaculis, felis libero rutrum sem, ac maximus sapien sem vel enim. Nam faucibus tellus fringilla metus varius gravida. Proin non placerat lorem.&amp;nbsp;Sed sollicitudin rutrum lorem, eu semper lorem cursus ut. Morbi semper porttitor elit, vitae pulvinar tortor lobortis.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-06-01 16:02:36', '2021-07-20 21:57:01', 1),
(21, 13, 8, '&lt;p&gt;Offering a plethora of delectable cuisines inspired by classic recipes from around the world, this a la carte all day diner is engineered to cater to all kinds of moods and occasions from insouciant brunches and friendly lunches to intimate business meetings while grabbing a quick bite and midnight coffee cravings. Scrumptious food coupled with warm hospitality will make this the ideal stop to satiate your desire for a warm meal.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 0, 1, '2021-06-01 23:06:55', '2021-08-09 11:31:55', 1),
(22, 13, 4, '&lt;p&gt;Be prepared to pamper yourself with a dainty selection of teas that are a connoisseur\'s delight or simply enjoy freshly baked delicacies from our patisserie. Be it those who have a sweet tooth and a weakness for chocolate eclairs and apple pies or those who love to gorge on savoury items like patties and croissants, Kaffe Lounge has it all to curb your cravings.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 0, 1, '2021-06-01 23:08:49', '2021-08-09 11:31:55', 1),
(23, 25, 8, '&lt;p&gt;With a menu consisting of an array of delicious multi-cuisine, The Park Pavilion is one of the best restaurants in Park Street, Kolkata. The finest Indian dishes at the restaurant make you celebrate the rich diversity of South Asian nation\'s cuisine. Prepared by experienced chefs, the sumptuous foods at the restaurant will make you taste authentic royal Indian food history and please the foodie within you.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '8:00', 'PM', 1, 1, '2021-07-22 18:04:29', '2021-07-22 18:36:19', 1),
(24, 25, 1, '&lt;p&gt;GT ROUTE offers barbequed delights of Peshawar, the succulent kebabs of the Afghanistan and Awadh region to sublime vegetarian repast of Varanasi &amp;amp; Punjab and ambrosial sweets of Bengal. With emphasis on authenticity, our chefs play with the nuanced differences in the cuisines that are similar in some ways and varied in many to bring to the plate a flurry of flavours and aromas that cannot but delight.&lt;br&gt;&lt;/p&gt;', '02:00', 'PM', '10:00', 'PM', 1, 1, '2021-07-22 18:07:00', '2021-07-22 18:36:19', 1),
(25, 19, 8, '&lt;p&gt;The Cygnett Pavilion is an all-day dining restaurant marked by the pride of serving lavish lunch and dinner buffets. While the buffet is a comforting amalgamation of local flavours with global cuisine, the a la carte menu offers a wide range of delectable delights from around the world. The relaxed and comforting ambience marks as the perfect venue for family luncheons, fun brunch with friends, as well as informal business meetings. This multiplicity of the setting coupled with exemplary service.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 0, 1, '2021-07-26 13:09:54', '2021-08-09 11:31:36', 1),
(26, 19, 5, '&lt;p&gt;Different in ideality and theme, the Metro Pub is not one of those conventional bars and plays host to groups of friends, corporate colleagues, as well as families. One can expect premium beverages, quality gourmet snacks, and tasteful background music at this fine pub. The contemporary decor, comfortable seating, and friendly service by the proficient staff adds to the overall experience. The well-stocked bar featuring a rare selection of some of the finest liquors makes it one of the best-rated.&lt;br&gt;&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 0, 1, '2021-07-26 13:11:12', '2021-08-09 11:31:36', 1),
(27, 26, 8, '&lt;p&gt;It\'s an all-day dining restaurant of Cygnett Inn Krishna Nepalgunj where you can try and relish multiple cuisines anytime. The restaurant has experienced chefs who have years of experience in preparing different cuisines. Here, locals, as well as tourists, can taste various types of sumptuous foods with family, friends and colleagues. In addition to nice ambience, Cygnett Pavilion is spacious enough to host family lunches, corporate and social occasions.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-07-29 17:39:16', '2021-08-02 13:12:22', 1),
(28, 26, 6, '&lt;p&gt;If you are an admirer of oriental cuisine or a lover of the East, you must try oriental recipes at Mystic East of Cygnett Inn Krishna Nepalgunj. With distinctive ambience, it makes an event a definite hit.&lt;br&gt;&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-07-29 17:41:36', '2021-08-02 13:12:22', 1),
(29, 26, 9, '&lt;p&gt;This region of the hotel is a paradise for vegetarians. Its menu, especially designed by acclaimed chefs, has plenty of options to choose from. The menu provides a fascinating combination of traditional cuisines and tasty modern food items.&lt;br&gt;&lt;/p&gt;', '10:00', 'AM', '10:00', 'PM', 1, 1, '2021-08-02 11:28:45', '2021-08-02 13:12:22', 1),
(30, 26, 5, '&lt;p&gt;Those hunting for a perfect spot in Nepalgunj to enjoy time sipping liqueurs with friends or colleagues should give a shot to Metro Lounge of Cygnett Inn Krishna Nepalgunj. It has the perfect combination of labels and liqueurs, exquisite menu, cosmopolitan ambience and breezy service to have a memorable time.&lt;br&gt;&lt;/p&gt;', '06:00', 'PM', '10:00', 'PM', 1, 1, '2021-08-02 12:14:29', '2021-08-02 13:12:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_restaurant_contact`
--

CREATE TABLE `cyg_hotel_restaurant_contact` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `mobile` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_restaurant_contact`
--

INSERT INTO `cyg_hotel_restaurant_contact` (`id`, `restaurant_id`, `mobile`) VALUES
(1, 1, '8505813103'),
(2, 1, '9911911849'),
(3, 2, '8595450450'),
(4, 2, '8959192192'),
(5, 3, '8595450450'),
(6, 3, '8959192192'),
(7, 4, '8595450450'),
(8, 4, '8959192192'),
(9, 5, '8595450450'),
(10, 5, '8959192192'),
(11, 6, '8595450450'),
(12, 6, '8595192192'),
(13, 7, '8595450450'),
(14, 7, '8595192192'),
(15, 8, '8595450450'),
(16, 8, '8595192192'),
(17, 9, '8595450450'),
(18, 9, '8595192192'),
(19, 10, '8595450450'),
(20, 10, '8595192192'),
(21, 11, '8595450450'),
(22, 11, '8959192192'),
(23, 12, '8595450450'),
(24, 12, '8959192192'),
(25, 13, '8595450450'),
(26, 13, '8959192192'),
(27, 14, '8595450450'),
(28, 14, '8959192192'),
(29, 15, '8595450450'),
(30, 15, '8959192192'),
(31, 16, '8595450450'),
(32, 16, '8959192192'),
(33, 17, '8595450450'),
(34, 17, '8959192192'),
(35, 18, '8595450450'),
(36, 18, '8959192192'),
(37, 19, '8595450450'),
(38, 19, '8959192192'),
(39, 20, '8595450450'),
(40, 20, '8959192192'),
(41, 21, '8595450450'),
(42, 21, '8959192192'),
(43, 22, '8595450450'),
(44, 22, '8959192192'),
(45, 23, '8595450450'),
(46, 23, '8959192192'),
(47, 24, '8595450450'),
(48, 24, '8959192192'),
(49, 25, '8595450450'),
(50, 25, '8959192192'),
(51, 26, '8595450450'),
(52, 26, '8959192192'),
(53, 27, '8595450450'),
(54, 27, '8959192192'),
(55, 28, '8595450450'),
(56, 28, '8959192192'),
(57, 29, '8595450450'),
(58, 29, '8959192192'),
(59, 30, '8595450450'),
(60, 30, '8959192192');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_restaurant_enquiry`
--

CREATE TABLE `cyg_hotel_restaurant_enquiry` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `mobile` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `total_guests` char(4) NOT NULL,
  `reservation_date` date NOT NULL,
  `instructions` text,
  `received_datetime` datetime NOT NULL,
  `customer_contacted` tinyint(1) NOT NULL DEFAULT '0',
  `contacted_by` int(11) NOT NULL DEFAULT '0',
  `remarks` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyg_hotel_restaurant_enquiry`
--

INSERT INTO `cyg_hotel_restaurant_enquiry` (`id`, `hotel_id`, `restaurant_id`, `first_name`, `last_name`, `mobile`, `email`, `total_guests`, `reservation_date`, `instructions`, `received_datetime`, `customer_contacted`, `contacted_by`, `remarks`) VALUES
(4, 16, 8, 'Abraham ', 'Roy', '9365362642', 'abrahamroy90366@gmail.com', '2', '2021-09-07', '', '2021-09-07 14:13:33', 0, 0, NULL),
(3, 9, 2, 'dsdsdf', 'ffff', '9911911888', 'datta.ankur79@gmail.com', '3', '2021-09-04', 'dsdsadsd', '2021-09-01 18:35:53', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_restaurant_images`
--

CREATE TABLE `cyg_hotel_restaurant_images` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_restaurant_images`
--

INSERT INTO `cyg_hotel_restaurant_images` (`id`, `hotel_id`, `restaurant_id`, `image`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(2, 2, 1, '1616046111_offer-img1.jpg', 1, '2021-03-18 11:11:51', 1, NULL, NULL),
(3, 2, 1, '1616052546_banquet1.jpeg', 1, '2021-03-18 12:59:06', 1, NULL, NULL),
(4, 9, 2, '1621852731_alwar-dining1.jpg', 1, '2021-05-24 16:08:51', 1, '2021-07-20 21:57:18', 1),
(5, 14, 3, '1621932192_bongaigaon-rest.jpg', 1, '2021-05-25 14:13:12', 1, '2021-07-20 21:57:32', 1),
(6, 14, 4, '1621932372_bongaigaon-metro.jpg', 1, '2021-05-25 14:16:12', 1, '2021-07-20 21:57:32', 1),
(7, 11, 5, '1621967056_seaview-pavilion.jpg', 1, '2021-05-25 23:54:16', 1, '2021-07-20 21:57:08', 1),
(8, 15, 6, '1622014957_gangtok-pavilion.jpg', 1, '2021-05-26 13:12:37', 1, '2021-07-22 17:19:14', 1),
(9, 15, 7, '1622015127_gangtok-merto.jpg', 1, '2021-05-26 13:15:27', 1, '2021-07-22 17:19:14', 1),
(10, 16, 8, '1622026015_guwahati-pavilion.jpg', 1, '2021-05-26 16:16:55', 1, '2021-07-20 21:57:06', 1),
(11, 16, 9, '1622026223_guwahati-metro.jpg', 1, '2021-05-26 16:20:23', 1, '2021-07-20 21:57:06', 1),
(12, 17, 10, '1622055127_goa-pavilion.jpg', 1, '2021-05-27 00:20:56', 1, '2021-07-20 21:56:44', 1),
(13, 18, 11, '1629092617_itanagar-pavilion.jpg', 1, '2021-05-27 16:39:19', 1, '2021-08-16 11:13:37', 1),
(14, 18, 12, '1629092430_itanagar-metropub.jpg', 1, '2021-05-27 16:40:40', 1, '2021-08-16 11:10:30', 1),
(15, 20, 13, '1622188082_jodhpur-pavilion.jpg', 0, '2021-05-28 13:18:02', 1, '2021-08-09 11:31:14', 1),
(16, 21, 14, '1622229254_lucknow-pavilion.jpg', 1, '2021-05-29 00:44:14', 1, '2021-07-27 19:28:16', 1),
(17, 22, 15, '1622315137_mcleodgang-pavilion.jpg', 1, '2021-05-30 00:35:37', 1, '2021-07-20 21:57:25', 1),
(18, 4, 16, '1622485359_nainital-pavilion.jpg', 1, '2021-05-31 23:52:39', 1, '2021-07-22 17:18:15', 1),
(19, 4, 17, '1622485466_nainital-metro.jpg', 1, '2021-05-31 23:54:26', 1, '2021-07-22 17:18:15', 1),
(20, 23, 18, '1622487640_siliguri-pavilion.jpg', 1, '2021-06-01 00:30:40', 1, '2021-07-22 17:18:05', 1),
(21, 23, 19, '1622487755_siliguri-metro.jpg', 1, '2021-06-01 00:32:35', 1, '2021-07-22 17:18:05', 1),
(22, 24, 20, '1622543556_vizag-pavilion.jpg', 1, '2021-06-01 16:02:36', 1, '2021-07-20 21:57:01', 1),
(23, 13, 21, '1622569015_dwarka-pavilion.jpg', 0, '2021-06-01 23:06:55', 1, '2021-08-09 11:31:55', 1),
(24, 13, 22, '1622569129_dwarka-kaffee.jpg', 0, '2021-06-01 23:08:49', 1, '2021-08-09 11:31:55', 1),
(25, 25, 23, '1626957269_siamton-pavilion.jpg', 1, '2021-07-22 18:04:29', 1, '2021-07-22 18:36:19', 1),
(26, 25, 24, '1626957420_siamton-k2k.jpg', 1, '2021-07-22 18:07:00', 1, '2021-07-22 18:36:19', 1),
(27, 19, 25, '1627285194_jaipur-pavilion.jpg', 0, '2021-07-26 13:09:54', 1, '2021-08-09 11:31:36', 1),
(28, 19, 26, '1627285272_jaipur-metrobar.jpg', 0, '2021-07-26 13:11:12', 1, '2021-08-09 11:31:36', 1),
(29, 26, 27, '1627560556_nepal-pavilion.jpg', 1, '2021-07-29 17:39:16', 1, '2021-08-02 13:12:22', 1),
(30, 26, 28, '1627560696_nepal-mysticeast.jpg', 1, '2021-07-29 17:41:36', 1, '2021-08-02 13:12:22', 1),
(31, 26, 29, '1627883925_nepal-gossip.jpg', 1, '2021-08-02 11:28:45', 1, '2021-08-02 13:12:22', 1),
(32, 26, 30, '1627886669_nepal-metro.jpg', 1, '2021-08-02 12:14:29', 1, '2021-08-02 13:12:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_rooms`
--

CREATE TABLE `cyg_hotel_rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_name_old` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `room_name` int(3) NOT NULL,
  `room_description` mediumtext COLLATE utf8_unicode_ci,
  `room_price` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `min_occupancy` int(1) NOT NULL DEFAULT '1',
  `max_occupancy` int(2) NOT NULL DEFAULT '1',
  `area` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `area_unit` int(11) NOT NULL,
  `bed_type` int(11) NOT NULL,
  `be_url` text COLLATE utf8_unicode_ci,
  `is_base` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_rooms`
--

INSERT INTO `cyg_hotel_rooms` (`id`, `hotel_id`, `room_name_old`, `room_name`, `room_description`, `room_price`, `min_occupancy`, `max_occupancy`, `area`, `area_unit`, `bed_type`, `be_url`, `is_base`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(2, 2, 'Deluxe room', 1, '&lt;p&gt;dsdfsd&lt;/p&gt;', '2100', 1, 2, '550', 2, 1, '', 0, 0, '2021-03-16 15:03:13', 1, '2021-03-19 12:12:46', 1),
(3, 9, 'Superior Room', 2, '&lt;p&gt;Our Superior Rooms are most suitable for the business travellers. With aesthetically pleasing d&eacute;cor, these rooms are well-equipped with all modern amenities.&lt;br&gt;&lt;/p&gt;', '5500', 2, 3, '196', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY1Nw&amp;viewtype=roomview&amp;', 1, 1, '2021-05-24 15:43:11', 1, '2021-08-09 14:32:52', 1),
(4, 9, 'Club Room', 3, '&lt;p&gt;Our well-appointed and sumptuous club rooms cater to all the requirements of our modern day travellers. Available in King-size and twin bed.&lt;br&gt;&lt;/p&gt;', '6500', 2, 3, '270', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY1Nw&amp;viewtype=roomview&amp;', 0, 1, '2021-05-24 15:51:19', 1, '2021-08-09 14:33:06', 1),
(5, 14, 'Superior Room', 2, '&lt;p&gt;Our Superior Rooms are most suitable for the business traveller. With aesthetically pleasing decor, these rooms are well-equipped with all modern amenities.&lt;br&gt;&lt;/p&gt;', '4000', 2, 3, '150', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwOA==&amp;viewtype=roomview', 1, 1, '2021-05-25 13:11:33', 1, '2021-08-09 14:36:30', 1),
(6, 14, 'Club Room', 3, '&lt;p&gt;Our well-appointed and sumptuous club rooms cater to all the requirements of our modern day traveller. Available in King-size and twin bed.&lt;br&gt;&lt;/p&gt;', '5000', 2, 3, '256', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwOA==&amp;viewtype=roomview', 0, 1, '2021-05-25 13:17:47', 1, '2021-08-09 14:36:43', 1),
(7, 14, 'Suite Room', 4, '&lt;p&gt;Our cosy suites include a living room and a bedroom. Equipped with a King-size bed, these suites also offer panoramic view of the city.&lt;br&gt;&lt;/p&gt;', '7500', 2, 3, '430', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwOA==&amp;viewtype=roomview', 0, 1, '2021-05-25 13:21:19', 1, '2021-08-09 14:36:56', 1),
(8, 11, 'Superior Room', 2, '&lt;p&gt;Our Superior Rooms are most suitable for the business traveller. With aesthetically pleasing decor, these rooms are well-equipped with all modern amenities.&lt;br&gt;&lt;/p&gt;', '2700', 1, 2, '245', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4Ng==&amp;viewtype=roomview', 1, 1, '2021-05-25 23:12:50', 1, '2021-07-22 15:45:56', 1),
(9, 11, 'Club Room', 3, '&lt;p&gt;Our well-appointed and sumptuous club rooms cater to all the requirements of our modern day traveller. Available in King-size and twin bed.&lt;br&gt;&lt;/p&gt;', '3200', 1, 2, '267', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4Ng==&amp;viewtype=roomview', 0, 1, '2021-05-25 23:17:41', 1, '2021-07-22 15:50:19', 1),
(10, 11, 'Junior Suite', 5, '&lt;p&gt;Our cosy suites are equipped with a King-size bed, these suites also offer panoramic view of the beach.&lt;br&gt;&lt;/p&gt;', '3900', 2, 3, '277', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4Ng==&amp;viewtype=roomview', 0, 1, '2021-05-25 23:24:00', 1, '2021-07-22 15:53:28', 1),
(11, 15, 'Superior Room', 2, '&lt;p&gt;The superior rooms are a perfect blend of comfort and luxury. These well-appointed rooms have all the enhanced modern amenities to meet the requirements of our discerning guests.&lt;br&gt;&lt;/p&gt;', '2900', 1, 2, '252', 2, 7, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4NA==&amp;viewtype=roomview', 1, 1, '2021-05-26 12:26:43', 1, '2021-08-05 14:31:50', 1),
(12, 15, 'Club Room', 3, '&lt;p&gt;The&amp;nbsp; club rooms is fully equipped with state-of-the-art amenities and deliver a heartwarming blend of comfort, space and convenience.&amp;nbsp;&lt;br&gt;&lt;/p&gt;', '3200', 1, 2, '264', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4NA==&amp;viewtype=roomview', 0, 1, '2021-05-26 12:30:21', 1, '2021-08-05 14:33:24', 1),
(13, 15, 'Royal Suite', 6, '&lt;p&gt;Royal Suite is an elevated onboard experience for suite guests, combining the unmatched range of innovative state-of-the-art amenities and deliver a heartwarming blend of comfort, space and convenience.&lt;br&gt;&lt;/p&gt;', '5500', 1, 2, '408', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4NA==&amp;viewtype=roomview', 0, 1, '2021-05-26 12:34:05', 1, '2021-08-05 14:35:39', 1),
(14, 16, 'Superior Room', 2, '&lt;p&gt;Superior room with the king size bed which can accommodate up to 2 adults. Modern yet simple in design, this room offers guests a winning combination of essential business services and comfort.&lt;br&gt;&lt;/p&gt;', '2900', 2, 3, '135', 2, 5, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4Mg==&amp;viewtype=roomview', 1, 1, '2021-05-26 15:46:36', 1, '2021-08-09 14:45:06', 1),
(15, 16, 'Club Room', 3, '&lt;p&gt;These rooms offer a grand living experience through a truly spacious room and offer full access to free high-speed Wi-Fi. An elegant design infused with a warm ambience.&lt;br&gt;&lt;/p&gt;', '3100', 2, 3, '180', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4Mg==&amp;viewtype=roomview', 0, 1, '2021-05-26 15:48:53', 1, '2021-08-09 14:45:19', 1),
(16, 16, 'Junior Suite', 5, '&lt;p&gt;With a contemporary ambience, this suite is tailor-made for greater comfort. Enjoy a range of amenities and conveniences mini bar, in-room safe and free WiFi for your personal comfort.&lt;br&gt;&lt;/p&gt;', '5170', 2, 3, '290', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4Mg==&amp;viewtype=roomview', 0, 1, '2021-05-26 15:52:26', 1, '2021-08-09 14:45:31', 1),
(17, 17, 'Superior Room', 2, '&lt;p&gt;These rooms are equipped with facilities like Free WiFi 24x7*, tea coffee maker, LED and minibar. They come with an option of King and Twin beds.&lt;br&gt;&lt;/p&gt;', '3900', 2, 3, '324', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY1OA==&amp;viewtype=roomview', 1, 1, '2021-05-26 23:42:42', 1, '2021-08-09 14:42:52', 1),
(18, 17, 'Deluxe Room', 1, '&lt;p&gt;With contemporary ambience, these rooms have a sit-out area. Wi-Fi enabled rooms are furnished with a comfortable King Size bed, a television set, telephone, wardrobe and an attached bathroom with the supply of hot and cold water.&lt;br&gt;&lt;/p&gt;', '4500', 2, 3, '360', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY1OA==&amp;viewtype=roomview', 0, 1, '2021-05-26 23:47:01', 1, '2021-08-09 14:43:05', 1),
(19, 17, 'Family Suite', 7, '&lt;p&gt;These rooms are ideal for families with children due to their size and services that can accommodate up to 4 guests, Needless to say, the room comes equipped with all the modern amenities. The room has two king size beds and attached bathroom. The room is well-ventilated and has a relaxing ambience floor.&lt;br&gt;&lt;/p&gt;', '5500', 2, 3, '460', 2, 6, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY1OA==&amp;viewtype=roomview', 0, 1, '2021-05-26 23:51:40', 1, '2021-08-09 14:43:17', 1),
(20, 18, 'Club Room', 3, '&lt;p&gt;Our club rooms are fully equipped with state-of-the-art amenities and deliver a heartwarming blend of comfort, space and convenience.&lt;br&gt;&lt;/p&gt;', '2600', 2, 3, '163', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4NQ==&amp;viewtype=roomview', 1, 1, '2021-05-27 15:46:58', 1, '2021-08-09 15:31:58', 1),
(21, 18, 'Family Room', 8, '&lt;p&gt;Family rooms are modern yet simple in design, this room offers guests a winning combination of essential services and comfort that truly cater to the needs of a family.&lt;/p&gt;', '4200', 2, 3, '530', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4NQ==&amp;viewtype=roomview', 0, 1, '2021-05-27 15:48:53', 1, '2021-08-09 15:35:15', 1),
(22, 18, 'Suite', 4, '&lt;p&gt;&amp;nbsp;Suite is an elevated onboard experience for suite guests, combining the unmatched range of innovative state-of-the-art amenities and deliver a heartwarming blend of comfort, space and convenience.&lt;br&gt;&lt;/p&gt;', '4700', 1, 2, '630', 2, 5, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY4NQ==&amp;viewtype=roomview', 0, 1, '2021-05-27 15:52:02', 1, '2021-08-09 15:36:46', 1),
(23, 20, 'Superior Room', 2, '&lt;p&gt;The superior rooms are a perfect blend of comfort and luxury. These well-appointed rooms have all the enhanced modern amenities to meet the requirements of our discerning guests.&lt;br&gt;&lt;/p&gt;', '1700', 2, 3, '180', 2, 4, '', 1, 0, '2021-05-28 12:30:13', 1, '2021-08-09 11:31:14', 1),
(24, 20, 'Club Room', 3, '&lt;p&gt;Our club rooms are fully equipped with state-of-the-art amenities and deliver a heartwarming blend of comfort, space and convenience.&lt;br&gt;&lt;/p&gt;', '1900', 2, 3, '240', 2, 4, '', 0, 0, '2021-05-28 12:33:42', 1, '2021-08-09 11:31:14', 1),
(25, 20, 'Suite', 4, '&lt;p&gt;Superior room with the king size bed which can accommodate up to 2 adults. Modern yet simple in design, this room offers guests a winning combination of essential business services and comfort.&lt;br&gt;&lt;/p&gt;', '2500', 2, 3, '376', 2, 4, '', 0, 0, '2021-05-28 12:38:48', 1, '2021-08-09 11:31:14', 1),
(26, 21, 'Superior Room', 2, '&lt;p&gt;Tastefully embellished with chic interiors, Superior Room is compactly designed with all the amenities to make your stay seamlessly luxurious and comfortable.&lt;br&gt;&lt;/p&gt;', '5600', 2, 3, '300', 2, 6, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwNw==&amp;viewtype=roomview', 1, 1, '2021-05-29 00:17:59', 1, '2021-08-09 14:49:44', 1),
(27, 21, 'Club Room', 3, '&lt;p&gt;This spacious room is elegantly curated with comfortable beddings and furnishings, and is embedded with all the facilities that will make your stay with us a comfortable one.&lt;br&gt;&lt;/p&gt;', '5800', 2, 3, '400', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwNw==&amp;viewtype=roomview', 0, 1, '2021-05-29 00:22:45', 1, '2021-08-09 14:49:56', 1),
(28, 21, 'Executive Suite', 9, '&lt;p&gt;Comprising of plush interiors and comfortable upholstery, this colossal suite consists of a plethora of facilities.&lt;br&gt;&lt;/p&gt;', '8400', 2, 3, '331', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwNw==&amp;viewtype=roomview', 0, 1, '2021-05-29 00:26:08', 1, '2021-08-09 14:50:11', 1),
(29, 21, 'Family Suite', 7, '&lt;p&gt;True to its name, this palatial suite is regal in its essence and style. Be spoilt for choice with its numerous services.&lt;br&gt;&lt;/p&gt;', '8800', 2, 3, '255', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwNw==&amp;viewtype=roomview', 0, 1, '2021-05-29 00:33:07', 1, '2021-08-09 14:50:23', 1),
(30, 21, 'Royal Family Suite', 10, '&lt;p&gt;True to its name, this palatial suite is regal in its essence and style. Be spoilt for choice with its numerous services.&lt;br&gt;&lt;/p&gt;', '9800', 2, 3, '484', 2, 6, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwNw==&amp;viewtype=roomview', 0, 1, '2021-05-29 00:35:32', 1, '2021-08-09 14:50:35', 1),
(31, 22, 'Superior Room', 2, '&lt;p&gt;Our Superior rooms are altogether enlivened by the chronicled Tivoli air and are more extensive than our standard rooms. The blend of additional room and present-day offices guarantees an ideal remain, regardless of in the event that you are on vacation or an end of the week break.&lt;br&gt;&lt;/p&gt;', '2400', 2, 3, '100', 2, 6, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkxMQ==&amp;viewtype=roomview', 1, 1, '2021-05-29 23:54:09', 1, '2021-08-09 14:54:12', 1),
(32, 22, 'Deluxe Room', 1, '&lt;p&gt;Be it for business or recreation, our Deluxe Room offers you the perfect space to work or unwind. It includes an ensuite restroom with a refreshing rain shower, an official workspace, and in-room amusement as nearby and cable TV channels.&lt;br&gt;&lt;/p&gt;', '2800', 2, 3, '120', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkxMQ==&amp;viewtype=roomview', 0, 1, '2021-05-29 23:59:19', 1, '2021-08-09 14:54:25', 1),
(33, 22, 'Club Room', 3, '&lt;p&gt;The club room is the place where you go to unwind, watch motion pictures, play games and spend time with companions. Each floor has a zone with a loveseat and seats for unwinding.&lt;br&gt;&lt;/p&gt;', '3400', 2, 3, '182', 2, 6, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkxMQ==&amp;viewtype=roomview', 0, 1, '2021-05-30 00:01:36', 1, '2021-08-09 14:54:38', 1),
(34, 4, 'Deluxe Room', 1, '&lt;p&gt;Our Deluxe Rooms are most suitable for the business travellers. With aesthetically pleasing decor, these rooms are well-equipped with all modern amenities.&lt;br&gt;&lt;/p&gt;', '4200', 1, 2, '372', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwOQ==&amp;viewtype=roomview', 1, 1, '2021-05-31 18:33:15', 1, '2021-07-22 17:18:15', 1),
(35, 4, 'Family Suite', 7, '&lt;p&gt;Our Family Suites include a living room and a bedroom. Equipped with a King-size bed, these suites also offer Panoramic view of the hills.&lt;br&gt;&lt;/p&gt;', '6100', 2, 3, '547', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwOQ==&amp;viewtype=roomview', 0, 1, '2021-05-31 18:35:50', 1, '2021-07-22 17:18:15', 1),
(36, 4, 'Royal Suite Duplex', 11, '&lt;p&gt;Our well-appointed and sumptuous Royal Suites cater to all the requirements of our modern day traveller. Available in King-size and twin bed.&lt;br&gt;&lt;/p&gt;', '7900', 2, 4, '1149', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTkwOQ==&amp;viewtype=roomview', 0, 1, '2021-05-31 22:55:40', 1, '2021-07-22 17:18:15', 1),
(37, 23, 'Superior Room', 2, '&lt;p&gt;Be it business or leisure, our superior rooms redefine elegance to offer an indulgent living experience. Expect great city views as these rooms are located on the hotel&rsquo;s higher floors.&lt;br&gt;&lt;/p&gt;', '2500', 1, 2, '165', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY3NA==&amp;viewtype=roomview', 1, 1, '2021-06-01 00:26:10', 1, '2021-07-22 17:18:05', 1),
(38, 23, 'Club Room', 3, '&lt;p&gt;Characterized by the subtle use of colour and contemporary design, Club Rooms have all the spectacular requirements of our modern-day travellers.&lt;br&gt;&lt;/p&gt;', '3400', 2, 3, '250', 2, 5, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY3NA==&amp;viewtype=roomview', 0, 1, '2021-06-01 00:28:11', 1, '2021-07-22 17:18:05', 1),
(39, 24, 'Superior Rooms', 2, '&lt;p&gt;Rooms are well designed with King Size Beds or Twin Beds for single / double occupancy and is also fully equipped working desk.&lt;br&gt;&lt;/p&gt;', '2700', 2, 3, '225', 2, 5, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY2Mg==&amp;viewtype=roomview', 1, 1, '2021-06-01 15:56:45', 1, '2021-08-09 15:01:00', 1),
(40, 24, 'Club Rooms', 3, '&lt;p&gt;Rooms are well furnished with soft colour walls and also has Wooden flooring and elegant decor.&lt;br&gt;&lt;/p&gt;', '3200', 2, 3, '225', 2, 5, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY2Mg==&amp;viewtype=roomview', 0, 1, '2021-06-01 15:59:27', 1, '2021-08-09 15:01:11', 1),
(41, 13, 'Club Room', 3, '&lt;p&gt;Our club rooms are fully equipped with state-of-the-art amenities and deliver a heartwarming blend of comfort, space and convenience.&lt;br&gt;&lt;/p&gt;', 'XXXX', 2, 3, '000', 2, 4, '', 1, 0, '2021-06-01 16:37:32', 1, '2021-08-09 11:31:55', 1),
(42, 13, 'Superior Room', 2, '&lt;p&gt;The superior rooms are a perfect blend of comfort and luxury. These well-appointed rooms have all the enhanced modern amenities to meet the requirements of our discerning guests.&lt;br&gt;&lt;/p&gt;', 'XXXX', 2, 3, '000', 2, 4, '', 0, 0, '2021-06-01 23:13:18', 1, '2021-08-09 11:31:55', 1),
(43, 13, 'Suite', 4, '&lt;p&gt;Our royal suite exudes royalty in the truest sense. The suite is tastefully decorated and fully furnished and equipped the best of the amenities to curate a memorable stay for our guests.&lt;br&gt;&lt;/p&gt;', 'XXXX', 2, 3, '000', 2, 4, '', 0, 0, '2021-06-01 23:15:37', 1, '2021-08-09 11:31:55', 1),
(44, 23, 'Suite Room', 4, '&lt;p&gt;This Room will consistently meet your satisfaction for hotel room comfort and make your stay pleasant and restful. Relax and enjoy your stay in a space designed to feel just like home. We Offer an ideal place to enjoy a refreshment or room service. Comfortable stay and value for money services. Enjoy your stay with the full value of money. Clean and hygienic stay, Vital for any other traveller looking for comfort and adequate rest. Pleasant and nice room.&lt;br&gt;&lt;/p&gt;', '4000', 2, 3, '350', 2, 4, 'https://booking.cygnetthotels.com/be/indexpackdetail?propertyId=MTY3NA==&amp;viewtype=roomview', 0, 1, '2021-07-22 12:22:41', 1, '2021-07-22 17:18:05', 1),
(45, 25, 'Standard Room', 12, '&lt;p&gt;Our Standard rooms are most suitable for the business / leisure travellers. With aesthetically pleasing decor, these rooms are well-equipped with all modern amenities. These rooms are ergonomically designed for a relaxes and comfortable experience.They come with an option of King and Twin Beds . Free Wifi,Minibar, LED, Tea-coffee maker In room Safe&lt;br&gt;&lt;/p&gt;', '1000', 2, 3, '150', 2, 4, 'https://staahmax.staah.net/be/indexpackdetail?propertyId=MTY2NQ==&amp;viewtype=packageview', 1, 1, '2021-07-22 17:26:40', 1, '2021-07-22 18:36:19', 1),
(46, 25, 'Superior Room', 2, '&lt;p&gt;Our Superior rooms are most suitable for the business / leisure travellers. With aesthetically pleasing decor, these rooms are well-equipped with all modern amenities. Modern yet simple in design, this room offers guests a winning combination of essential business services and comfort. the superior rooms come with double beds or twin beds all according to your needs.&lt;br&gt;&lt;/p&gt;', '2500', 2, 3, '216', 2, 4, 'https://staahmax.staah.net/be/indexpackdetail?propertyId=MTY2NQ==&amp;viewtype=packageview', 0, 1, '2021-07-22 17:51:52', 1, '2021-07-22 18:36:19', 1),
(47, 19, 'Luxury Suite Room', 13, '&lt;p&gt;The ultra modern stay options available at our fine living space offers every ultra modern stay options for all our guests to savour to. The impressive decor coupled with resilient comfort promises every traveller an out of this world experience.&amp;nbsp;&lt;br&gt;&lt;/p&gt;', '1500', 2, 3, '361', 2, 4, '', 1, 0, '2021-07-26 12:39:14', 1, '2021-08-09 11:31:36', 1),
(48, 19, 'Premium Suite Room', 14, '&lt;p&gt;The ultra modern stay options available at our fine living space offers every ultra modern stay options for all our guests to savour to. The impressive decor coupled with resilient comfort promises every traveller an out of this world experience.&amp;nbsp;&lt;br&gt;&lt;/p&gt;', '1700', 2, 3, '324', 2, 4, '', 0, 0, '2021-07-26 12:40:50', 1, '2021-08-09 11:31:36', 1),
(49, 26, 'Superior Room', 2, '&lt;p&gt;Our Superior Rooms are most suitable for the business travellers. With aesthetically pleasing decor, these rooms are well-equipped with all modern amenities.&lt;br&gt;&lt;/p&gt;', '2000', 2, 3, '440', 2, 4, '', 1, 1, '2021-07-29 12:47:21', 1, '2021-08-02 13:12:22', 1),
(50, 26, 'Club Room', 3, '&lt;p&gt;These spacious rooms comes with a king sized/twin beds, modern amenities and free WiFi. The facilities available in this room are specially designed for a comfortable and rejuvenating stay.&lt;br&gt;&lt;/p&gt;', '3000', 2, 3, '225', 2, 4, '', 0, 1, '2021-07-29 17:15:16', 1, '2021-08-02 13:12:22', 1),
(51, 26, 'Suite', 4, '&lt;p&gt;These rooms come with an option of King and Queen sized with twin beds, these extra spacious suites are designed to take your comfort to a whole new level. Additionally, our rooms with king beds also have a separate balcony attached. With premium amenities and free wifi, these suites offer you the ideal space to relax and rejuvenate on your business trips.&lt;br&gt;&lt;/p&gt;', '5000', 2, 3, '440', 2, 4, '', 0, 1, '2021-07-29 17:18:40', 1, '2021-08-02 13:12:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_room_images`
--

CREATE TABLE `cyg_hotel_room_images` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt_text` tinytext COLLATE utf8_unicode_ci,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_room_images`
--

INSERT INTO `cyg_hotel_room_images` (`id`, `room_id`, `image`, `alt_text`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(2, 2, '1615887193_room_image.jpeg', NULL, 1, '2021-03-16 15:03:13', 1, NULL, NULL),
(3, 4, '1621851679_alwar-club.jpg', NULL, 1, '2021-05-24 15:51:19', 1, NULL, NULL),
(4, 3, '1621851841_alwar-superior.jpg', NULL, 1, '2021-05-24 15:54:01', 1, NULL, NULL),
(5, 5, '1621928493_bongaigaon-superior.jpg', NULL, 1, '2021-05-25 13:11:33', 1, NULL, NULL),
(6, 6, '1621928867_bongaigaon-club.jpg', NULL, 1, '2021-05-25 13:17:47', 1, NULL, NULL),
(7, 7, '1621929079_bongaigaon-suite.jpg', NULL, 1, '2021-05-25 13:21:19', 1, NULL, NULL),
(8, 8, '1621964570_seaview-superior.jpg', NULL, 1, '2021-05-25 23:12:50', 1, NULL, NULL),
(9, 9, '1621964861_seaview-club.jpg', NULL, 1, '2021-05-25 23:17:41', 1, NULL, NULL),
(10, 10, '1621965240_seaview-suite.jpg', NULL, 1, '2021-05-25 23:24:00', 1, NULL, NULL),
(11, 11, '1622012203_gangtok-superior.jpg', NULL, 1, '2021-05-26 12:26:43', 1, NULL, NULL),
(12, 12, '1622012421_gangtok-club.jpg', NULL, 1, '2021-05-26 12:30:21', 1, NULL, NULL),
(13, 13, '1622012645_gangtok-suite.jpg', NULL, 1, '2021-05-26 12:34:05', 1, NULL, NULL),
(14, 14, '1622024196_guwahati-superior.jpg', NULL, 1, '2021-05-26 15:46:36', 1, NULL, NULL),
(15, 15, '1622024333_guwahati-club.jpg', NULL, 1, '2021-05-26 15:48:53', 1, NULL, NULL),
(16, 16, '1622024546_guwahati-suite.jpg', NULL, 1, '2021-05-26 15:52:26', 1, NULL, NULL),
(17, 17, '1622052762_goa-superior.jpg', NULL, 1, '2021-05-26 23:42:42', 1, NULL, NULL),
(18, 18, '1622053021_goa-deluxe.jpg', NULL, 1, '2021-05-26 23:47:01', 1, NULL, NULL),
(19, 19, '1622053300_goa-suite.jpg', NULL, 1, '2021-05-26 23:51:40', 1, NULL, NULL),
(20, 20, '1628503318_itanagar-club.jpg', NULL, 1, '2021-05-27 15:46:58', 1, '2021-08-09 15:31:58', 1),
(21, 21, '1628503515_itanagar-family.jpg', NULL, 1, '2021-05-27 15:48:53', 1, '2021-08-09 15:35:15', 1),
(22, 22, '1628503606_itanagar-suite.jpg', NULL, 1, '2021-05-27 15:52:02', 1, '2021-08-09 15:36:46', 1),
(23, 23, '1622185213_jodhpur-superior.jpg', NULL, 1, '2021-05-28 12:30:13', 1, NULL, NULL),
(24, 24, '1622185422_jodhpur-club.jpg', NULL, 1, '2021-05-28 12:33:42', 1, NULL, NULL),
(25, 25, '1622185728_jodhpur-suite.jpg', NULL, 1, '2021-05-28 12:38:48', 1, NULL, NULL),
(26, 26, '1622227679_lucknow-superior.jpg', NULL, 1, '2021-05-29 00:17:59', 1, NULL, NULL),
(27, 27, '1622227965_lucknow-club.jpg', NULL, 1, '2021-05-29 00:22:45', 1, NULL, NULL),
(28, 28, '1622228168_lucknow-executive.jpg', NULL, 1, '2021-05-29 00:26:08', 1, NULL, NULL),
(29, 29, '1622228587_lucknow-family.jpg', NULL, 1, '2021-05-29 00:33:07', 1, NULL, NULL),
(30, 30, '1622228732_lucknow-royalfamily.jpg', NULL, 1, '2021-05-29 00:35:32', 1, NULL, NULL),
(31, 31, '1622312649_mcleodgang-superior.jpg', NULL, 1, '2021-05-29 23:54:09', 1, NULL, NULL),
(32, 32, '1622312959_mcleodgang-deluxe.jpg', NULL, 1, '2021-05-29 23:59:19', 1, NULL, NULL),
(33, 33, '1622313096_mcleodgang-club.jpg', NULL, 1, '2021-05-30 00:01:36', 1, NULL, NULL),
(34, 34, '1622466195_nainital-deluxe.jpg', NULL, 1, '2021-05-31 18:33:15', 1, NULL, NULL),
(35, 35, '1622466350_nainital-familysuite.jpg', NULL, 1, '2021-05-31 18:35:50', 1, NULL, NULL),
(36, 36, '1622481940_nainital-royalsuite.jpg', NULL, 1, '2021-05-31 22:55:40', 1, NULL, NULL),
(37, 37, '1622487370_siliguri-suite.jpg', NULL, 1, '2021-06-01 00:26:10', 1, NULL, NULL),
(38, 38, '1622487491_siliguri-club.jpg', NULL, 1, '2021-06-01 00:28:11', 1, NULL, NULL),
(39, 39, '1622543205_vizag-superior.jpg', NULL, 1, '2021-06-01 15:56:45', 1, NULL, NULL),
(40, 40, '1622543367_vizag-club.jpg', NULL, 1, '2021-06-01 15:59:27', 1, NULL, NULL),
(41, 41, '1622545652_dwarka-club.jpg', NULL, 1, '2021-06-01 16:37:32', 1, NULL, NULL),
(42, 42, '1622569398_dwarka-superior.jpg', NULL, 1, '2021-06-01 23:13:18', 1, NULL, NULL),
(43, 43, '1622569537_dwarka-suite.jpg', NULL, 1, '2021-06-01 23:15:37', 1, NULL, NULL),
(44, 44, '1626936761_tania-suite.jpg', NULL, 1, '2021-07-22 12:22:41', 1, NULL, NULL),
(45, 45, '1626955000_siamton-standard.jpg', NULL, 1, '2021-07-22 17:26:40', 1, NULL, NULL),
(46, 46, '1626956512_siamton-superior.jpg', NULL, 1, '2021-07-22 17:51:52', 1, NULL, NULL),
(47, 47, '1627283354_jaipurlite-luxury-suite.jpg', NULL, 1, '2021-07-26 12:39:14', 1, NULL, NULL),
(48, 48, '1627283450_jaipurlite-luxury-suite.jpg', NULL, 1, '2021-07-26 12:40:50', 1, NULL, NULL),
(49, 49, '1627543041_nepal-superior.jpg', NULL, 1, '2021-07-29 12:47:21', 1, NULL, NULL),
(50, 50, '1627559116_nepal-club.jpg', NULL, 1, '2021-07-29 17:15:16', 1, NULL, NULL),
(51, 51, '1627559320_nepal-suite.jpg', NULL, 1, '2021-07-29 17:18:40', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_room_inclusions`
--

CREATE TABLE `cyg_hotel_room_inclusions` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `inclusion_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_room_inclusions`
--

INSERT INTO `cyg_hotel_room_inclusions` (`id`, `hotel_id`, `room_id`, `inclusion_id`, `added_on`, `added_by`) VALUES
(9, 2, 2, 4, '2021-03-17 10:47:46', 1),
(770, 13, 41, 15, '2021-06-01 16:37:32', 1),
(771, 13, 41, 17, '2021-06-01 16:37:32', 1),
(772, 13, 41, 19, '2021-06-01 16:37:32', 1),
(773, 13, 41, 22, '2021-06-01 16:37:32', 1),
(774, 13, 41, 23, '2021-06-01 16:37:32', 1),
(775, 13, 41, 26, '2021-06-01 16:37:32', 1),
(776, 13, 41, 29, '2021-06-01 16:37:32', 1),
(777, 13, 41, 31, '2021-06-01 16:37:32', 1),
(778, 13, 41, 32, '2021-06-01 16:37:32', 1),
(779, 13, 41, 33, '2021-06-01 16:37:32', 1),
(780, 13, 41, 36, '2021-06-01 16:37:32', 1),
(781, 13, 41, 38, '2021-06-01 16:37:32', 1),
(782, 13, 41, 40, '2021-06-01 16:37:32', 1),
(783, 13, 41, 43, '2021-06-01 16:37:32', 1),
(784, 13, 41, 44, '2021-06-01 16:37:32', 1),
(785, 13, 42, 15, '2021-06-01 23:13:18', 1),
(786, 13, 42, 19, '2021-06-01 23:13:18', 1),
(787, 13, 42, 22, '2021-06-01 23:13:18', 1),
(788, 13, 42, 23, '2021-06-01 23:13:18', 1),
(789, 13, 42, 26, '2021-06-01 23:13:18', 1),
(790, 13, 42, 29, '2021-06-01 23:13:18', 1),
(791, 13, 42, 31, '2021-06-01 23:13:18', 1),
(792, 13, 42, 32, '2021-06-01 23:13:18', 1),
(793, 13, 42, 33, '2021-06-01 23:13:18', 1),
(794, 13, 42, 36, '2021-06-01 23:13:18', 1),
(795, 13, 42, 38, '2021-06-01 23:13:18', 1),
(796, 13, 42, 40, '2021-06-01 23:13:18', 1),
(797, 13, 42, 43, '2021-06-01 23:13:18', 1),
(798, 13, 42, 44, '2021-06-01 23:13:18', 1),
(799, 13, 43, 15, '2021-06-01 23:15:37', 1),
(800, 13, 43, 17, '2021-06-01 23:15:37', 1),
(801, 13, 43, 19, '2021-06-01 23:15:37', 1),
(802, 13, 43, 22, '2021-06-01 23:15:37', 1),
(803, 13, 43, 23, '2021-06-01 23:15:37', 1),
(804, 13, 43, 24, '2021-06-01 23:15:37', 1),
(805, 13, 43, 25, '2021-06-01 23:15:37', 1),
(806, 13, 43, 26, '2021-06-01 23:15:37', 1),
(807, 13, 43, 29, '2021-06-01 23:15:37', 1),
(808, 13, 43, 31, '2021-06-01 23:15:37', 1),
(809, 13, 43, 32, '2021-06-01 23:15:37', 1),
(810, 13, 43, 33, '2021-06-01 23:15:37', 1),
(811, 13, 43, 36, '2021-06-01 23:15:37', 1),
(812, 13, 43, 38, '2021-06-01 23:15:37', 1),
(813, 13, 43, 40, '2021-06-01 23:15:37', 1),
(814, 13, 43, 42, '2021-06-01 23:15:37', 1),
(815, 13, 43, 43, '2021-06-01 23:15:37', 1),
(816, 13, 43, 44, '2021-06-01 23:15:37', 1),
(845, 23, 44, 15, '2021-07-22 12:24:13', 1),
(846, 23, 44, 20, '2021-07-22 12:24:13', 1),
(847, 23, 44, 22, '2021-07-22 12:24:13', 1),
(848, 23, 44, 31, '2021-07-22 12:24:13', 1),
(849, 23, 44, 32, '2021-07-22 12:24:13', 1),
(850, 23, 44, 38, '2021-07-22 12:24:13', 1),
(851, 23, 44, 40, '2021-07-22 12:24:13', 1),
(852, 23, 44, 43, '2021-07-22 12:24:13', 1),
(853, 23, 44, 44, '2021-07-22 12:24:13', 1),
(854, 23, 44, 45, '2021-07-22 12:24:13', 1),
(855, 23, 44, 47, '2021-07-22 12:24:13', 1),
(856, 23, 44, 48, '2021-07-22 12:24:13', 1),
(857, 23, 44, 49, '2021-07-22 12:24:13', 1),
(858, 23, 44, 50, '2021-07-22 12:24:13', 1),
(859, 23, 44, 51, '2021-07-22 12:24:13', 1),
(860, 23, 44, 52, '2021-07-22 12:24:13', 1),
(861, 23, 44, 53, '2021-07-22 12:24:13', 1),
(862, 23, 44, 54, '2021-07-22 12:24:13', 1),
(863, 23, 44, 55, '2021-07-22 12:24:13', 1),
(883, 23, 37, 15, '2021-07-22 12:32:32', 1),
(884, 23, 37, 20, '2021-07-22 12:32:32', 1),
(885, 23, 37, 22, '2021-07-22 12:32:32', 1),
(886, 23, 37, 31, '2021-07-22 12:32:32', 1),
(887, 23, 37, 32, '2021-07-22 12:32:32', 1),
(888, 23, 37, 33, '2021-07-22 12:32:32', 1),
(889, 23, 37, 38, '2021-07-22 12:32:32', 1),
(890, 23, 37, 40, '2021-07-22 12:32:32', 1),
(891, 23, 37, 43, '2021-07-22 12:32:32', 1),
(892, 23, 37, 44, '2021-07-22 12:32:32', 1),
(893, 23, 37, 45, '2021-07-22 12:32:32', 1),
(894, 23, 37, 47, '2021-07-22 12:32:32', 1),
(895, 23, 37, 48, '2021-07-22 12:32:32', 1),
(896, 23, 37, 49, '2021-07-22 12:32:32', 1),
(897, 23, 37, 50, '2021-07-22 12:32:32', 1),
(898, 23, 37, 51, '2021-07-22 12:32:32', 1),
(899, 23, 37, 52, '2021-07-22 12:32:32', 1),
(900, 23, 37, 53, '2021-07-22 12:32:32', 1),
(901, 23, 37, 54, '2021-07-22 12:32:32', 1),
(902, 23, 38, 20, '2021-07-22 12:38:48', 1),
(903, 23, 38, 22, '2021-07-22 12:38:48', 1),
(904, 23, 38, 31, '2021-07-22 12:38:48', 1),
(905, 23, 38, 32, '2021-07-22 12:38:48', 1),
(906, 23, 38, 33, '2021-07-22 12:38:48', 1),
(907, 23, 38, 38, '2021-07-22 12:38:48', 1),
(908, 23, 38, 40, '2021-07-22 12:38:48', 1),
(909, 23, 38, 43, '2021-07-22 12:38:48', 1),
(910, 23, 38, 44, '2021-07-22 12:38:48', 1),
(911, 23, 38, 45, '2021-07-22 12:38:48', 1),
(912, 23, 38, 48, '2021-07-22 12:38:48', 1),
(913, 23, 38, 49, '2021-07-22 12:38:48', 1),
(914, 23, 38, 50, '2021-07-22 12:38:48', 1),
(915, 23, 38, 51, '2021-07-22 12:38:48', 1),
(916, 23, 38, 52, '2021-07-22 12:38:48', 1),
(917, 23, 38, 53, '2021-07-22 12:38:48', 1),
(918, 23, 38, 54, '2021-07-22 12:38:48', 1),
(919, 23, 38, 55, '2021-07-22 12:38:48', 1),
(1106, 4, 36, 15, '2021-07-22 14:36:40', 1),
(1107, 4, 36, 17, '2021-07-22 14:36:40', 1),
(1108, 4, 36, 19, '2021-07-22 14:36:40', 1),
(1109, 4, 36, 20, '2021-07-22 14:36:40', 1),
(1110, 4, 36, 21, '2021-07-22 14:36:40', 1),
(1111, 4, 36, 22, '2021-07-22 14:36:40', 1),
(1112, 4, 36, 23, '2021-07-22 14:36:40', 1),
(1113, 4, 36, 24, '2021-07-22 14:36:40', 1),
(1114, 4, 36, 26, '2021-07-22 14:36:40', 1),
(1115, 4, 36, 27, '2021-07-22 14:36:40', 1),
(1116, 4, 36, 29, '2021-07-22 14:36:40', 1),
(1117, 4, 36, 31, '2021-07-22 14:36:40', 1),
(1118, 4, 36, 32, '2021-07-22 14:36:40', 1),
(1119, 4, 36, 36, '2021-07-22 14:36:40', 1),
(1120, 4, 36, 38, '2021-07-22 14:36:40', 1),
(1121, 4, 36, 40, '2021-07-22 14:36:40', 1),
(1122, 4, 36, 41, '2021-07-22 14:36:40', 1),
(1123, 4, 36, 44, '2021-07-22 14:36:40', 1),
(1124, 4, 36, 45, '2021-07-22 14:36:40', 1),
(1125, 4, 36, 47, '2021-07-22 14:36:40', 1),
(1126, 4, 36, 48, '2021-07-22 14:36:40', 1),
(1127, 4, 36, 50, '2021-07-22 14:36:40', 1),
(1128, 4, 36, 51, '2021-07-22 14:36:40', 1),
(1129, 4, 36, 52, '2021-07-22 14:36:40', 1),
(1130, 4, 36, 54, '2021-07-22 14:36:40', 1),
(1131, 4, 36, 57, '2021-07-22 14:36:40', 1),
(1132, 4, 36, 58, '2021-07-22 14:36:40', 1),
(1133, 4, 34, 15, '2021-07-22 14:37:09', 1),
(1134, 4, 34, 17, '2021-07-22 14:37:09', 1),
(1135, 4, 34, 19, '2021-07-22 14:37:09', 1),
(1136, 4, 34, 20, '2021-07-22 14:37:09', 1),
(1137, 4, 34, 21, '2021-07-22 14:37:09', 1),
(1138, 4, 34, 22, '2021-07-22 14:37:09', 1),
(1139, 4, 34, 23, '2021-07-22 14:37:09', 1),
(1140, 4, 34, 24, '2021-07-22 14:37:09', 1),
(1141, 4, 34, 26, '2021-07-22 14:37:09', 1),
(1142, 4, 34, 27, '2021-07-22 14:37:09', 1),
(1143, 4, 34, 29, '2021-07-22 14:37:09', 1),
(1144, 4, 34, 31, '2021-07-22 14:37:09', 1),
(1145, 4, 34, 32, '2021-07-22 14:37:09', 1),
(1146, 4, 34, 36, '2021-07-22 14:37:09', 1),
(1147, 4, 34, 38, '2021-07-22 14:37:09', 1),
(1148, 4, 34, 40, '2021-07-22 14:37:09', 1),
(1149, 4, 34, 41, '2021-07-22 14:37:09', 1),
(1150, 4, 34, 44, '2021-07-22 14:37:09', 1),
(1151, 4, 34, 45, '2021-07-22 14:37:09', 1),
(1152, 4, 34, 48, '2021-07-22 14:37:09', 1),
(1153, 4, 34, 50, '2021-07-22 14:37:09', 1),
(1154, 4, 34, 51, '2021-07-22 14:37:09', 1),
(1155, 4, 34, 52, '2021-07-22 14:37:09', 1),
(1156, 4, 34, 54, '2021-07-22 14:37:09', 1),
(1157, 4, 35, 15, '2021-07-22 14:37:22', 1),
(1158, 4, 35, 17, '2021-07-22 14:37:22', 1),
(1159, 4, 35, 19, '2021-07-22 14:37:22', 1),
(1160, 4, 35, 20, '2021-07-22 14:37:22', 1),
(1161, 4, 35, 21, '2021-07-22 14:37:22', 1),
(1162, 4, 35, 22, '2021-07-22 14:37:22', 1),
(1163, 4, 35, 23, '2021-07-22 14:37:22', 1),
(1164, 4, 35, 24, '2021-07-22 14:37:22', 1),
(1165, 4, 35, 26, '2021-07-22 14:37:22', 1),
(1166, 4, 35, 27, '2021-07-22 14:37:22', 1),
(1167, 4, 35, 29, '2021-07-22 14:37:22', 1),
(1168, 4, 35, 31, '2021-07-22 14:37:22', 1),
(1169, 4, 35, 32, '2021-07-22 14:37:22', 1),
(1170, 4, 35, 36, '2021-07-22 14:37:22', 1),
(1171, 4, 35, 38, '2021-07-22 14:37:22', 1),
(1172, 4, 35, 40, '2021-07-22 14:37:22', 1),
(1173, 4, 35, 41, '2021-07-22 14:37:22', 1),
(1174, 4, 35, 44, '2021-07-22 14:37:22', 1),
(1175, 4, 35, 45, '2021-07-22 14:37:22', 1),
(1176, 4, 35, 48, '2021-07-22 14:37:22', 1),
(1177, 4, 35, 50, '2021-07-22 14:37:22', 1),
(1178, 4, 35, 51, '2021-07-22 14:37:22', 1),
(1179, 4, 35, 52, '2021-07-22 14:37:22', 1),
(1180, 4, 35, 54, '2021-07-22 14:37:22', 1),
(1274, 11, 8, 15, '2021-07-22 15:45:56', 1),
(1275, 11, 8, 19, '2021-07-22 15:45:56', 1),
(1276, 11, 8, 20, '2021-07-22 15:45:56', 1),
(1277, 11, 8, 22, '2021-07-22 15:45:56', 1),
(1278, 11, 8, 23, '2021-07-22 15:45:56', 1),
(1279, 11, 8, 24, '2021-07-22 15:45:56', 1),
(1280, 11, 8, 26, '2021-07-22 15:45:56', 1),
(1281, 11, 8, 27, '2021-07-22 15:45:56', 1),
(1282, 11, 8, 29, '2021-07-22 15:45:56', 1),
(1283, 11, 8, 31, '2021-07-22 15:45:56', 1),
(1284, 11, 8, 34, '2021-07-22 15:45:56', 1),
(1285, 11, 8, 36, '2021-07-22 15:45:56', 1),
(1286, 11, 8, 38, '2021-07-22 15:45:56', 1),
(1287, 11, 8, 40, '2021-07-22 15:45:56', 1),
(1288, 11, 8, 41, '2021-07-22 15:45:56', 1),
(1289, 11, 8, 43, '2021-07-22 15:45:56', 1),
(1290, 11, 8, 44, '2021-07-22 15:45:56', 1),
(1291, 11, 8, 47, '2021-07-22 15:45:56', 1),
(1292, 11, 8, 48, '2021-07-22 15:45:56', 1),
(1293, 11, 8, 51, '2021-07-22 15:45:56', 1),
(1294, 11, 8, 53, '2021-07-22 15:45:56', 1),
(1295, 11, 8, 55, '2021-07-22 15:45:56', 1),
(1296, 11, 9, 15, '2021-07-22 15:50:19', 1),
(1297, 11, 9, 19, '2021-07-22 15:50:19', 1),
(1298, 11, 9, 20, '2021-07-22 15:50:19', 1),
(1299, 11, 9, 22, '2021-07-22 15:50:19', 1),
(1300, 11, 9, 23, '2021-07-22 15:50:19', 1),
(1301, 11, 9, 24, '2021-07-22 15:50:19', 1),
(1302, 11, 9, 26, '2021-07-22 15:50:19', 1),
(1303, 11, 9, 27, '2021-07-22 15:50:19', 1),
(1304, 11, 9, 29, '2021-07-22 15:50:19', 1),
(1305, 11, 9, 31, '2021-07-22 15:50:19', 1),
(1306, 11, 9, 34, '2021-07-22 15:50:19', 1),
(1307, 11, 9, 36, '2021-07-22 15:50:19', 1),
(1308, 11, 9, 38, '2021-07-22 15:50:19', 1),
(1309, 11, 9, 40, '2021-07-22 15:50:19', 1),
(1310, 11, 9, 41, '2021-07-22 15:50:19', 1),
(1311, 11, 9, 43, '2021-07-22 15:50:19', 1),
(1312, 11, 9, 44, '2021-07-22 15:50:19', 1),
(1313, 11, 9, 47, '2021-07-22 15:50:19', 1),
(1314, 11, 9, 48, '2021-07-22 15:50:19', 1),
(1315, 11, 9, 51, '2021-07-22 15:50:19', 1),
(1316, 11, 9, 53, '2021-07-22 15:50:19', 1),
(1317, 11, 9, 55, '2021-07-22 15:50:19', 1),
(1318, 11, 10, 15, '2021-07-22 15:53:28', 1),
(1319, 11, 10, 19, '2021-07-22 15:53:28', 1),
(1320, 11, 10, 20, '2021-07-22 15:53:28', 1),
(1321, 11, 10, 22, '2021-07-22 15:53:28', 1),
(1322, 11, 10, 23, '2021-07-22 15:53:28', 1),
(1323, 11, 10, 24, '2021-07-22 15:53:28', 1),
(1324, 11, 10, 26, '2021-07-22 15:53:28', 1),
(1325, 11, 10, 27, '2021-07-22 15:53:28', 1),
(1326, 11, 10, 29, '2021-07-22 15:53:28', 1),
(1327, 11, 10, 31, '2021-07-22 15:53:28', 1),
(1328, 11, 10, 34, '2021-07-22 15:53:28', 1),
(1329, 11, 10, 36, '2021-07-22 15:53:28', 1),
(1330, 11, 10, 38, '2021-07-22 15:53:28', 1),
(1331, 11, 10, 40, '2021-07-22 15:53:28', 1),
(1332, 11, 10, 41, '2021-07-22 15:53:28', 1),
(1333, 11, 10, 43, '2021-07-22 15:53:28', 1),
(1334, 11, 10, 44, '2021-07-22 15:53:28', 1),
(1335, 11, 10, 47, '2021-07-22 15:53:28', 1),
(1336, 11, 10, 48, '2021-07-22 15:53:28', 1),
(1337, 11, 10, 51, '2021-07-22 15:53:28', 1),
(1338, 11, 10, 53, '2021-07-22 15:53:28', 1),
(1339, 11, 10, 55, '2021-07-22 15:53:28', 1),
(1340, 25, 45, 15, '2021-07-22 17:26:40', 1),
(1341, 25, 45, 20, '2021-07-22 17:26:40', 1),
(1342, 25, 45, 22, '2021-07-22 17:26:40', 1),
(1343, 25, 45, 23, '2021-07-22 17:26:40', 1),
(1344, 25, 45, 31, '2021-07-22 17:26:40', 1),
(1345, 25, 45, 32, '2021-07-22 17:26:40', 1),
(1346, 25, 45, 33, '2021-07-22 17:26:40', 1),
(1347, 25, 45, 38, '2021-07-22 17:26:40', 1),
(1348, 25, 45, 40, '2021-07-22 17:26:40', 1),
(1349, 25, 45, 43, '2021-07-22 17:26:40', 1),
(1350, 25, 45, 44, '2021-07-22 17:26:40', 1),
(1351, 25, 45, 45, '2021-07-22 17:26:40', 1),
(1352, 25, 45, 47, '2021-07-22 17:26:40', 1),
(1353, 25, 45, 48, '2021-07-22 17:26:40', 1),
(1354, 25, 45, 50, '2021-07-22 17:26:40', 1),
(1355, 25, 45, 51, '2021-07-22 17:26:40', 1),
(1356, 25, 45, 53, '2021-07-22 17:26:40', 1),
(1357, 25, 45, 54, '2021-07-22 17:26:40', 1),
(1358, 25, 45, 55, '2021-07-22 17:26:40', 1),
(1359, 25, 46, 15, '2021-07-22 17:51:52', 1),
(1360, 25, 46, 22, '2021-07-22 17:51:52', 1),
(1361, 25, 46, 23, '2021-07-22 17:51:52', 1),
(1362, 25, 46, 31, '2021-07-22 17:51:52', 1),
(1363, 25, 46, 36, '2021-07-22 17:51:52', 1),
(1364, 25, 46, 40, '2021-07-22 17:51:52', 1),
(1365, 25, 46, 43, '2021-07-22 17:51:52', 1),
(1366, 25, 46, 44, '2021-07-22 17:51:52', 1),
(1367, 25, 46, 45, '2021-07-22 17:51:52', 1),
(1368, 25, 46, 47, '2021-07-22 17:51:52', 1),
(1369, 25, 46, 48, '2021-07-22 17:51:52', 1),
(1370, 25, 46, 51, '2021-07-22 17:51:52', 1),
(1371, 25, 46, 53, '2021-07-22 17:51:52', 1),
(1372, 25, 46, 54, '2021-07-22 17:51:52', 1),
(1373, 19, 47, 15, '2021-07-26 12:39:14', 1),
(1374, 19, 47, 19, '2021-07-26 12:39:14', 1),
(1375, 19, 47, 20, '2021-07-26 12:39:14', 1),
(1376, 19, 47, 22, '2021-07-26 12:39:14', 1),
(1377, 19, 47, 23, '2021-07-26 12:39:14', 1),
(1378, 19, 47, 24, '2021-07-26 12:39:14', 1),
(1379, 19, 47, 26, '2021-07-26 12:39:14', 1),
(1380, 19, 47, 27, '2021-07-26 12:39:14', 1),
(1381, 19, 47, 29, '2021-07-26 12:39:14', 1),
(1382, 19, 47, 31, '2021-07-26 12:39:14', 1),
(1383, 19, 47, 32, '2021-07-26 12:39:14', 1),
(1384, 19, 47, 36, '2021-07-26 12:39:14', 1),
(1385, 19, 47, 38, '2021-07-26 12:39:14', 1),
(1386, 19, 47, 40, '2021-07-26 12:39:14', 1),
(1387, 19, 47, 44, '2021-07-26 12:39:14', 1),
(1388, 19, 47, 48, '2021-07-26 12:39:14', 1),
(1389, 19, 47, 50, '2021-07-26 12:39:14', 1),
(1390, 19, 47, 51, '2021-07-26 12:39:14', 1),
(1391, 19, 47, 53, '2021-07-26 12:39:14', 1),
(1392, 19, 47, 54, '2021-07-26 12:39:14', 1),
(1393, 19, 48, 15, '2021-07-26 12:40:50', 1),
(1394, 19, 48, 19, '2021-07-26 12:40:50', 1),
(1395, 19, 48, 20, '2021-07-26 12:40:50', 1),
(1396, 19, 48, 22, '2021-07-26 12:40:50', 1),
(1397, 19, 48, 23, '2021-07-26 12:40:50', 1),
(1398, 19, 48, 24, '2021-07-26 12:40:50', 1),
(1399, 19, 48, 26, '2021-07-26 12:40:50', 1),
(1400, 19, 48, 29, '2021-07-26 12:40:50', 1),
(1401, 19, 48, 31, '2021-07-26 12:40:50', 1),
(1402, 19, 48, 32, '2021-07-26 12:40:50', 1),
(1403, 19, 48, 36, '2021-07-26 12:40:50', 1),
(1404, 19, 48, 38, '2021-07-26 12:40:50', 1),
(1405, 19, 48, 40, '2021-07-26 12:40:50', 1),
(1406, 19, 48, 44, '2021-07-26 12:40:50', 1),
(1407, 19, 48, 48, '2021-07-26 12:40:50', 1),
(1408, 19, 48, 50, '2021-07-26 12:40:50', 1),
(1409, 19, 48, 51, '2021-07-26 12:40:50', 1),
(1410, 19, 48, 53, '2021-07-26 12:40:50', 1),
(1411, 26, 49, 15, '2021-07-29 12:47:21', 1),
(1412, 26, 49, 19, '2021-07-29 12:47:21', 1),
(1413, 26, 49, 20, '2021-07-29 12:47:21', 1),
(1414, 26, 49, 22, '2021-07-29 12:47:21', 1),
(1415, 26, 49, 23, '2021-07-29 12:47:21', 1),
(1416, 26, 49, 24, '2021-07-29 12:47:21', 1),
(1417, 26, 49, 26, '2021-07-29 12:47:21', 1),
(1418, 26, 49, 27, '2021-07-29 12:47:21', 1),
(1419, 26, 49, 29, '2021-07-29 12:47:21', 1),
(1420, 26, 49, 31, '2021-07-29 12:47:21', 1),
(1421, 26, 49, 32, '2021-07-29 12:47:21', 1),
(1422, 26, 49, 33, '2021-07-29 12:47:21', 1),
(1423, 26, 49, 36, '2021-07-29 12:47:21', 1),
(1424, 26, 49, 38, '2021-07-29 12:47:21', 1),
(1425, 26, 49, 40, '2021-07-29 12:47:21', 1),
(1426, 26, 49, 44, '2021-07-29 12:47:21', 1),
(1427, 26, 49, 50, '2021-07-29 12:47:21', 1),
(1428, 26, 49, 51, '2021-07-29 12:47:21', 1),
(1429, 26, 49, 53, '2021-07-29 12:47:21', 1),
(1430, 26, 49, 54, '2021-07-29 12:47:21', 1),
(1431, 26, 50, 15, '2021-07-29 17:15:16', 1),
(1432, 26, 50, 19, '2021-07-29 17:15:16', 1),
(1433, 26, 50, 20, '2021-07-29 17:15:16', 1),
(1434, 26, 50, 22, '2021-07-29 17:15:16', 1),
(1435, 26, 50, 23, '2021-07-29 17:15:16', 1),
(1436, 26, 50, 24, '2021-07-29 17:15:16', 1),
(1437, 26, 50, 26, '2021-07-29 17:15:16', 1),
(1438, 26, 50, 27, '2021-07-29 17:15:16', 1),
(1439, 26, 50, 29, '2021-07-29 17:15:16', 1),
(1440, 26, 50, 31, '2021-07-29 17:15:16', 1),
(1441, 26, 50, 32, '2021-07-29 17:15:16', 1),
(1442, 26, 50, 36, '2021-07-29 17:15:16', 1),
(1443, 26, 50, 38, '2021-07-29 17:15:16', 1),
(1444, 26, 50, 40, '2021-07-29 17:15:16', 1),
(1445, 26, 50, 42, '2021-07-29 17:15:16', 1),
(1446, 26, 50, 44, '2021-07-29 17:15:16', 1),
(1447, 26, 50, 48, '2021-07-29 17:15:16', 1),
(1448, 26, 50, 50, '2021-07-29 17:15:16', 1),
(1449, 26, 50, 51, '2021-07-29 17:15:16', 1),
(1450, 26, 50, 52, '2021-07-29 17:15:16', 1),
(1451, 26, 50, 53, '2021-07-29 17:15:16', 1),
(1452, 26, 50, 54, '2021-07-29 17:15:16', 1),
(1453, 26, 51, 15, '2021-07-29 17:18:40', 1),
(1454, 26, 51, 19, '2021-07-29 17:18:40', 1),
(1455, 26, 51, 20, '2021-07-29 17:18:40', 1),
(1456, 26, 51, 22, '2021-07-29 17:18:40', 1),
(1457, 26, 51, 23, '2021-07-29 17:18:40', 1),
(1458, 26, 51, 24, '2021-07-29 17:18:40', 1),
(1459, 26, 51, 26, '2021-07-29 17:18:40', 1),
(1460, 26, 51, 27, '2021-07-29 17:18:40', 1),
(1461, 26, 51, 29, '2021-07-29 17:18:40', 1),
(1462, 26, 51, 31, '2021-07-29 17:18:40', 1),
(1463, 26, 51, 32, '2021-07-29 17:18:40', 1),
(1464, 26, 51, 33, '2021-07-29 17:18:40', 1),
(1465, 26, 51, 36, '2021-07-29 17:18:40', 1),
(1466, 26, 51, 38, '2021-07-29 17:18:40', 1),
(1467, 26, 51, 40, '2021-07-29 17:18:40', 1),
(1468, 26, 51, 42, '2021-07-29 17:18:40', 1),
(1469, 26, 51, 44, '2021-07-29 17:18:40', 1),
(1470, 26, 51, 48, '2021-07-29 17:18:40', 1),
(1471, 26, 51, 50, '2021-07-29 17:18:40', 1),
(1472, 26, 51, 51, '2021-07-29 17:18:40', 1),
(1473, 26, 51, 52, '2021-07-29 17:18:40', 1),
(1474, 26, 51, 53, '2021-07-29 17:18:40', 1),
(1475, 26, 51, 54, '2021-07-29 17:18:40', 1),
(1476, 15, 11, 15, '2021-08-05 14:31:50', 1),
(1477, 15, 11, 18, '2021-08-05 14:31:50', 1),
(1478, 15, 11, 19, '2021-08-05 14:31:50', 1),
(1479, 15, 11, 20, '2021-08-05 14:31:50', 1),
(1480, 15, 11, 23, '2021-08-05 14:31:50', 1),
(1481, 15, 11, 24, '2021-08-05 14:31:50', 1),
(1482, 15, 11, 26, '2021-08-05 14:31:50', 1),
(1483, 15, 11, 29, '2021-08-05 14:31:50', 1),
(1484, 15, 11, 31, '2021-08-05 14:31:50', 1),
(1485, 15, 11, 33, '2021-08-05 14:31:50', 1),
(1486, 15, 11, 36, '2021-08-05 14:31:50', 1),
(1487, 15, 11, 38, '2021-08-05 14:31:50', 1),
(1488, 15, 11, 40, '2021-08-05 14:31:50', 1),
(1489, 15, 11, 41, '2021-08-05 14:31:50', 1),
(1490, 15, 11, 48, '2021-08-05 14:31:50', 1),
(1491, 15, 11, 50, '2021-08-05 14:31:50', 1),
(1492, 15, 11, 51, '2021-08-05 14:31:50', 1),
(1493, 15, 11, 52, '2021-08-05 14:31:50', 1),
(1494, 15, 11, 56, '2021-08-05 14:31:50', 1),
(1495, 15, 12, 15, '2021-08-05 14:33:24', 1),
(1496, 15, 12, 18, '2021-08-05 14:33:24', 1),
(1497, 15, 12, 19, '2021-08-05 14:33:24', 1),
(1498, 15, 12, 20, '2021-08-05 14:33:24', 1),
(1499, 15, 12, 23, '2021-08-05 14:33:24', 1),
(1500, 15, 12, 24, '2021-08-05 14:33:24', 1),
(1501, 15, 12, 26, '2021-08-05 14:33:24', 1),
(1502, 15, 12, 29, '2021-08-05 14:33:24', 1),
(1503, 15, 12, 31, '2021-08-05 14:33:24', 1),
(1504, 15, 12, 33, '2021-08-05 14:33:24', 1),
(1505, 15, 12, 36, '2021-08-05 14:33:24', 1),
(1506, 15, 12, 38, '2021-08-05 14:33:24', 1),
(1507, 15, 12, 40, '2021-08-05 14:33:24', 1),
(1508, 15, 12, 41, '2021-08-05 14:33:24', 1),
(1509, 15, 12, 48, '2021-08-05 14:33:24', 1),
(1510, 15, 12, 50, '2021-08-05 14:33:24', 1),
(1511, 15, 12, 51, '2021-08-05 14:33:24', 1),
(1512, 15, 12, 52, '2021-08-05 14:33:24', 1),
(1513, 15, 12, 56, '2021-08-05 14:33:24', 1),
(1514, 15, 13, 15, '2021-08-05 14:35:39', 1),
(1515, 15, 13, 18, '2021-08-05 14:35:39', 1),
(1516, 15, 13, 19, '2021-08-05 14:35:39', 1),
(1517, 15, 13, 20, '2021-08-05 14:35:39', 1),
(1518, 15, 13, 23, '2021-08-05 14:35:39', 1),
(1519, 15, 13, 24, '2021-08-05 14:35:39', 1),
(1520, 15, 13, 26, '2021-08-05 14:35:39', 1),
(1521, 15, 13, 29, '2021-08-05 14:35:39', 1),
(1522, 15, 13, 31, '2021-08-05 14:35:39', 1),
(1523, 15, 13, 33, '2021-08-05 14:35:39', 1),
(1524, 15, 13, 36, '2021-08-05 14:35:39', 1),
(1525, 15, 13, 38, '2021-08-05 14:35:39', 1),
(1526, 15, 13, 40, '2021-08-05 14:35:39', 1),
(1527, 15, 13, 41, '2021-08-05 14:35:39', 1),
(1528, 15, 13, 48, '2021-08-05 14:35:39', 1),
(1529, 15, 13, 50, '2021-08-05 14:35:39', 1),
(1530, 15, 13, 51, '2021-08-05 14:35:39', 1),
(1531, 15, 13, 52, '2021-08-05 14:35:39', 1),
(1532, 15, 13, 56, '2021-08-05 14:35:39', 1),
(1614, 20, 23, 15, '2021-08-05 15:02:01', 1),
(1615, 20, 23, 17, '2021-08-05 15:02:01', 1),
(1616, 20, 23, 19, '2021-08-05 15:02:01', 1),
(1617, 20, 23, 22, '2021-08-05 15:02:01', 1),
(1618, 20, 23, 23, '2021-08-05 15:02:01', 1),
(1619, 20, 23, 29, '2021-08-05 15:02:01', 1),
(1620, 20, 23, 31, '2021-08-05 15:02:01', 1),
(1621, 20, 23, 32, '2021-08-05 15:02:01', 1),
(1622, 20, 23, 33, '2021-08-05 15:02:01', 1),
(1623, 20, 23, 36, '2021-08-05 15:02:01', 1),
(1624, 20, 23, 38, '2021-08-05 15:02:01', 1),
(1625, 20, 23, 40, '2021-08-05 15:02:01', 1),
(1626, 20, 23, 43, '2021-08-05 15:02:01', 1),
(1627, 20, 23, 44, '2021-08-05 15:02:01', 1),
(1628, 20, 24, 15, '2021-08-05 15:02:26', 1),
(1629, 20, 24, 17, '2021-08-05 15:02:26', 1),
(1630, 20, 24, 19, '2021-08-05 15:02:26', 1),
(1631, 20, 24, 22, '2021-08-05 15:02:26', 1),
(1632, 20, 24, 23, '2021-08-05 15:02:26', 1),
(1633, 20, 24, 29, '2021-08-05 15:02:26', 1),
(1634, 20, 24, 31, '2021-08-05 15:02:26', 1),
(1635, 20, 24, 33, '2021-08-05 15:02:26', 1),
(1636, 20, 24, 36, '2021-08-05 15:02:26', 1),
(1637, 20, 24, 38, '2021-08-05 15:02:26', 1),
(1638, 20, 24, 40, '2021-08-05 15:02:26', 1),
(1639, 20, 24, 43, '2021-08-05 15:02:26', 1),
(1640, 20, 24, 44, '2021-08-05 15:02:26', 1),
(1641, 20, 25, 15, '2021-08-05 15:03:58', 1),
(1642, 20, 25, 17, '2021-08-05 15:03:58', 1),
(1643, 20, 25, 19, '2021-08-05 15:03:58', 1),
(1644, 20, 25, 22, '2021-08-05 15:03:58', 1),
(1645, 20, 25, 23, '2021-08-05 15:03:58', 1),
(1646, 20, 25, 24, '2021-08-05 15:03:58', 1),
(1647, 20, 25, 25, '2021-08-05 15:03:58', 1),
(1648, 20, 25, 26, '2021-08-05 15:03:58', 1),
(1649, 20, 25, 29, '2021-08-05 15:03:58', 1),
(1650, 20, 25, 31, '2021-08-05 15:03:58', 1),
(1651, 20, 25, 32, '2021-08-05 15:03:58', 1),
(1652, 20, 25, 33, '2021-08-05 15:03:58', 1),
(1653, 20, 25, 36, '2021-08-05 15:03:58', 1),
(1654, 20, 25, 38, '2021-08-05 15:03:58', 1),
(1655, 20, 25, 40, '2021-08-05 15:03:58', 1),
(1656, 20, 25, 42, '2021-08-05 15:03:58', 1),
(1657, 20, 25, 43, '2021-08-05 15:03:58', 1),
(1658, 20, 25, 44, '2021-08-05 15:03:58', 1),
(1659, 20, 25, 45, '2021-08-05 15:03:58', 1),
(1660, 9, 3, 15, '2021-08-09 14:32:52', 1),
(1661, 9, 3, 17, '2021-08-09 14:32:53', 1),
(1662, 9, 3, 19, '2021-08-09 14:32:53', 1),
(1663, 9, 3, 21, '2021-08-09 14:32:53', 1),
(1664, 9, 3, 22, '2021-08-09 14:32:53', 1),
(1665, 9, 3, 23, '2021-08-09 14:32:53', 1),
(1666, 9, 3, 26, '2021-08-09 14:32:53', 1),
(1667, 9, 3, 31, '2021-08-09 14:32:53', 1),
(1668, 9, 3, 32, '2021-08-09 14:32:53', 1),
(1669, 9, 3, 33, '2021-08-09 14:32:53', 1),
(1670, 9, 3, 36, '2021-08-09 14:32:53', 1),
(1671, 9, 3, 38, '2021-08-09 14:32:53', 1),
(1672, 9, 3, 40, '2021-08-09 14:32:53', 1),
(1673, 9, 3, 44, '2021-08-09 14:32:53', 1),
(1674, 9, 4, 15, '2021-08-09 14:33:06', 1),
(1675, 9, 4, 17, '2021-08-09 14:33:06', 1),
(1676, 9, 4, 19, '2021-08-09 14:33:06', 1),
(1677, 9, 4, 22, '2021-08-09 14:33:06', 1),
(1678, 9, 4, 23, '2021-08-09 14:33:06', 1),
(1679, 9, 4, 24, '2021-08-09 14:33:06', 1),
(1680, 9, 4, 25, '2021-08-09 14:33:06', 1),
(1681, 9, 4, 26, '2021-08-09 14:33:06', 1),
(1682, 9, 4, 29, '2021-08-09 14:33:06', 1),
(1683, 9, 4, 31, '2021-08-09 14:33:06', 1),
(1684, 9, 4, 32, '2021-08-09 14:33:06', 1),
(1685, 9, 4, 33, '2021-08-09 14:33:06', 1),
(1686, 9, 4, 36, '2021-08-09 14:33:06', 1),
(1687, 9, 4, 38, '2021-08-09 14:33:06', 1),
(1688, 9, 4, 40, '2021-08-09 14:33:06', 1),
(1689, 9, 4, 44, '2021-08-09 14:33:06', 1),
(1690, 9, 4, 45, '2021-08-09 14:33:06', 1),
(1691, 14, 5, 15, '2021-08-09 14:36:30', 1),
(1692, 14, 5, 17, '2021-08-09 14:36:30', 1),
(1693, 14, 5, 19, '2021-08-09 14:36:30', 1),
(1694, 14, 5, 22, '2021-08-09 14:36:30', 1),
(1695, 14, 5, 23, '2021-08-09 14:36:30', 1),
(1696, 14, 5, 26, '2021-08-09 14:36:30', 1),
(1697, 14, 5, 29, '2021-08-09 14:36:30', 1),
(1698, 14, 5, 31, '2021-08-09 14:36:30', 1),
(1699, 14, 5, 32, '2021-08-09 14:36:30', 1),
(1700, 14, 5, 34, '2021-08-09 14:36:30', 1),
(1701, 14, 5, 36, '2021-08-09 14:36:30', 1),
(1702, 14, 5, 38, '2021-08-09 14:36:30', 1),
(1703, 14, 5, 40, '2021-08-09 14:36:30', 1),
(1704, 14, 5, 43, '2021-08-09 14:36:30', 1),
(1705, 14, 5, 44, '2021-08-09 14:36:30', 1),
(1706, 14, 5, 45, '2021-08-09 14:36:30', 1),
(1707, 14, 6, 15, '2021-08-09 14:36:43', 1),
(1708, 14, 6, 17, '2021-08-09 14:36:43', 1),
(1709, 14, 6, 19, '2021-08-09 14:36:43', 1),
(1710, 14, 6, 21, '2021-08-09 14:36:43', 1),
(1711, 14, 6, 22, '2021-08-09 14:36:43', 1),
(1712, 14, 6, 23, '2021-08-09 14:36:43', 1),
(1713, 14, 6, 25, '2021-08-09 14:36:43', 1),
(1714, 14, 6, 26, '2021-08-09 14:36:43', 1),
(1715, 14, 6, 29, '2021-08-09 14:36:43', 1),
(1716, 14, 6, 31, '2021-08-09 14:36:43', 1),
(1717, 14, 6, 32, '2021-08-09 14:36:43', 1),
(1718, 14, 6, 33, '2021-08-09 14:36:43', 1),
(1719, 14, 6, 34, '2021-08-09 14:36:43', 1),
(1720, 14, 6, 36, '2021-08-09 14:36:43', 1),
(1721, 14, 6, 38, '2021-08-09 14:36:43', 1),
(1722, 14, 6, 40, '2021-08-09 14:36:43', 1),
(1723, 14, 6, 44, '2021-08-09 14:36:43', 1),
(1724, 14, 6, 45, '2021-08-09 14:36:43', 1),
(1725, 14, 7, 15, '2021-08-09 14:36:56', 1),
(1726, 14, 7, 17, '2021-08-09 14:36:56', 1),
(1727, 14, 7, 19, '2021-08-09 14:36:56', 1),
(1728, 14, 7, 21, '2021-08-09 14:36:56', 1),
(1729, 14, 7, 22, '2021-08-09 14:36:56', 1),
(1730, 14, 7, 23, '2021-08-09 14:36:56', 1),
(1731, 14, 7, 24, '2021-08-09 14:36:56', 1),
(1732, 14, 7, 25, '2021-08-09 14:36:56', 1),
(1733, 14, 7, 26, '2021-08-09 14:36:56', 1),
(1734, 14, 7, 29, '2021-08-09 14:36:56', 1),
(1735, 14, 7, 31, '2021-08-09 14:36:56', 1),
(1736, 14, 7, 32, '2021-08-09 14:36:56', 1),
(1737, 14, 7, 33, '2021-08-09 14:36:56', 1),
(1738, 14, 7, 34, '2021-08-09 14:36:56', 1),
(1739, 14, 7, 36, '2021-08-09 14:36:56', 1),
(1740, 14, 7, 38, '2021-08-09 14:36:56', 1),
(1741, 14, 7, 40, '2021-08-09 14:36:56', 1),
(1742, 14, 7, 42, '2021-08-09 14:36:56', 1),
(1743, 14, 7, 43, '2021-08-09 14:36:56', 1),
(1744, 14, 7, 44, '2021-08-09 14:36:56', 1),
(1745, 14, 7, 45, '2021-08-09 14:36:56', 1),
(1746, 17, 17, 15, '2021-08-09 14:42:52', 1),
(1747, 17, 17, 17, '2021-08-09 14:42:52', 1),
(1748, 17, 17, 19, '2021-08-09 14:42:52', 1),
(1749, 17, 17, 22, '2021-08-09 14:42:52', 1),
(1750, 17, 17, 23, '2021-08-09 14:42:52', 1),
(1751, 17, 17, 29, '2021-08-09 14:42:52', 1),
(1752, 17, 17, 31, '2021-08-09 14:42:52', 1),
(1753, 17, 17, 32, '2021-08-09 14:42:52', 1),
(1754, 17, 17, 33, '2021-08-09 14:42:52', 1),
(1755, 17, 17, 36, '2021-08-09 14:42:52', 1),
(1756, 17, 17, 38, '2021-08-09 14:42:52', 1),
(1757, 17, 17, 40, '2021-08-09 14:42:52', 1),
(1758, 17, 17, 43, '2021-08-09 14:42:52', 1),
(1759, 17, 17, 44, '2021-08-09 14:42:52', 1),
(1760, 17, 18, 15, '2021-08-09 14:43:05', 1),
(1761, 17, 18, 17, '2021-08-09 14:43:05', 1),
(1762, 17, 18, 19, '2021-08-09 14:43:05', 1),
(1763, 17, 18, 22, '2021-08-09 14:43:05', 1),
(1764, 17, 18, 23, '2021-08-09 14:43:05', 1),
(1765, 17, 18, 24, '2021-08-09 14:43:05', 1),
(1766, 17, 18, 25, '2021-08-09 14:43:05', 1),
(1767, 17, 18, 26, '2021-08-09 14:43:05', 1),
(1768, 17, 18, 29, '2021-08-09 14:43:05', 1),
(1769, 17, 18, 31, '2021-08-09 14:43:05', 1),
(1770, 17, 18, 32, '2021-08-09 14:43:05', 1),
(1771, 17, 18, 33, '2021-08-09 14:43:05', 1),
(1772, 17, 18, 34, '2021-08-09 14:43:05', 1),
(1773, 17, 18, 36, '2021-08-09 14:43:05', 1),
(1774, 17, 18, 38, '2021-08-09 14:43:05', 1),
(1775, 17, 18, 40, '2021-08-09 14:43:05', 1),
(1776, 17, 18, 41, '2021-08-09 14:43:05', 1),
(1777, 17, 18, 42, '2021-08-09 14:43:05', 1),
(1778, 17, 18, 43, '2021-08-09 14:43:05', 1),
(1779, 17, 18, 44, '2021-08-09 14:43:05', 1),
(1780, 17, 19, 15, '2021-08-09 14:43:17', 1),
(1781, 17, 19, 17, '2021-08-09 14:43:17', 1),
(1782, 17, 19, 19, '2021-08-09 14:43:17', 1),
(1783, 17, 19, 22, '2021-08-09 14:43:17', 1),
(1784, 17, 19, 23, '2021-08-09 14:43:17', 1),
(1785, 17, 19, 24, '2021-08-09 14:43:17', 1),
(1786, 17, 19, 25, '2021-08-09 14:43:17', 1),
(1787, 17, 19, 26, '2021-08-09 14:43:17', 1),
(1788, 17, 19, 29, '2021-08-09 14:43:17', 1),
(1789, 17, 19, 31, '2021-08-09 14:43:17', 1),
(1790, 17, 19, 32, '2021-08-09 14:43:17', 1),
(1791, 17, 19, 33, '2021-08-09 14:43:17', 1),
(1792, 17, 19, 34, '2021-08-09 14:43:17', 1),
(1793, 17, 19, 36, '2021-08-09 14:43:17', 1),
(1794, 17, 19, 38, '2021-08-09 14:43:17', 1),
(1795, 17, 19, 39, '2021-08-09 14:43:17', 1),
(1796, 17, 19, 40, '2021-08-09 14:43:17', 1),
(1797, 17, 19, 41, '2021-08-09 14:43:17', 1),
(1798, 17, 19, 42, '2021-08-09 14:43:17', 1),
(1799, 17, 19, 43, '2021-08-09 14:43:17', 1),
(1800, 17, 19, 44, '2021-08-09 14:43:17', 1),
(1801, 16, 14, 15, '2021-08-09 14:45:06', 1),
(1802, 16, 14, 19, '2021-08-09 14:45:06', 1),
(1803, 16, 14, 22, '2021-08-09 14:45:06', 1),
(1804, 16, 14, 23, '2021-08-09 14:45:06', 1),
(1805, 16, 14, 26, '2021-08-09 14:45:06', 1),
(1806, 16, 14, 29, '2021-08-09 14:45:06', 1),
(1807, 16, 14, 31, '2021-08-09 14:45:06', 1),
(1808, 16, 14, 32, '2021-08-09 14:45:06', 1),
(1809, 16, 14, 33, '2021-08-09 14:45:06', 1),
(1810, 16, 14, 34, '2021-08-09 14:45:06', 1),
(1811, 16, 14, 36, '2021-08-09 14:45:06', 1),
(1812, 16, 14, 38, '2021-08-09 14:45:06', 1),
(1813, 16, 14, 40, '2021-08-09 14:45:06', 1),
(1814, 16, 14, 43, '2021-08-09 14:45:06', 1),
(1815, 16, 14, 44, '2021-08-09 14:45:06', 1),
(1816, 16, 14, 45, '2021-08-09 14:45:06', 1),
(1817, 16, 15, 15, '2021-08-09 14:45:19', 1),
(1818, 16, 15, 17, '2021-08-09 14:45:19', 1),
(1819, 16, 15, 19, '2021-08-09 14:45:19', 1),
(1820, 16, 15, 23, '2021-08-09 14:45:19', 1),
(1821, 16, 15, 25, '2021-08-09 14:45:19', 1),
(1822, 16, 15, 26, '2021-08-09 14:45:19', 1),
(1823, 16, 15, 29, '2021-08-09 14:45:19', 1),
(1824, 16, 15, 31, '2021-08-09 14:45:19', 1),
(1825, 16, 15, 33, '2021-08-09 14:45:19', 1),
(1826, 16, 15, 34, '2021-08-09 14:45:19', 1),
(1827, 16, 15, 36, '2021-08-09 14:45:19', 1),
(1828, 16, 15, 38, '2021-08-09 14:45:19', 1),
(1829, 16, 15, 40, '2021-08-09 14:45:19', 1),
(1830, 16, 15, 43, '2021-08-09 14:45:19', 1),
(1831, 16, 15, 44, '2021-08-09 14:45:19', 1),
(1832, 16, 15, 45, '2021-08-09 14:45:19', 1),
(1833, 16, 16, 15, '2021-08-09 14:45:31', 1),
(1834, 16, 16, 17, '2021-08-09 14:45:31', 1),
(1835, 16, 16, 19, '2021-08-09 14:45:31', 1),
(1836, 16, 16, 22, '2021-08-09 14:45:31', 1),
(1837, 16, 16, 24, '2021-08-09 14:45:31', 1),
(1838, 16, 16, 29, '2021-08-09 14:45:31', 1),
(1839, 16, 16, 31, '2021-08-09 14:45:31', 1),
(1840, 16, 16, 32, '2021-08-09 14:45:31', 1),
(1841, 16, 16, 33, '2021-08-09 14:45:31', 1),
(1842, 16, 16, 34, '2021-08-09 14:45:31', 1),
(1843, 16, 16, 36, '2021-08-09 14:45:31', 1),
(1844, 16, 16, 40, '2021-08-09 14:45:31', 1),
(1845, 16, 16, 41, '2021-08-09 14:45:31', 1),
(1846, 16, 16, 42, '2021-08-09 14:45:31', 1),
(1847, 16, 16, 43, '2021-08-09 14:45:31', 1),
(1848, 16, 16, 44, '2021-08-09 14:45:31', 1),
(1849, 16, 16, 45, '2021-08-09 14:45:31', 1),
(1850, 21, 26, 15, '2021-08-09 14:49:44', 1),
(1851, 21, 26, 17, '2021-08-09 14:49:44', 1),
(1852, 21, 26, 19, '2021-08-09 14:49:44', 1),
(1853, 21, 26, 22, '2021-08-09 14:49:44', 1),
(1854, 21, 26, 23, '2021-08-09 14:49:44', 1),
(1855, 21, 26, 29, '2021-08-09 14:49:44', 1),
(1856, 21, 26, 31, '2021-08-09 14:49:44', 1),
(1857, 21, 26, 32, '2021-08-09 14:49:44', 1),
(1858, 21, 26, 33, '2021-08-09 14:49:44', 1),
(1859, 21, 26, 36, '2021-08-09 14:49:44', 1),
(1860, 21, 26, 38, '2021-08-09 14:49:44', 1),
(1861, 21, 26, 40, '2021-08-09 14:49:44', 1),
(1862, 21, 26, 43, '2021-08-09 14:49:44', 1),
(1863, 21, 26, 44, '2021-08-09 14:49:44', 1),
(1864, 21, 27, 15, '2021-08-09 14:49:56', 1),
(1865, 21, 27, 17, '2021-08-09 14:49:56', 1),
(1866, 21, 27, 19, '2021-08-09 14:49:56', 1),
(1867, 21, 27, 22, '2021-08-09 14:49:56', 1),
(1868, 21, 27, 23, '2021-08-09 14:49:56', 1),
(1869, 21, 27, 24, '2021-08-09 14:49:56', 1),
(1870, 21, 27, 26, '2021-08-09 14:49:56', 1),
(1871, 21, 27, 29, '2021-08-09 14:49:56', 1),
(1872, 21, 27, 31, '2021-08-09 14:49:56', 1),
(1873, 21, 27, 32, '2021-08-09 14:49:56', 1),
(1874, 21, 27, 33, '2021-08-09 14:49:56', 1),
(1875, 21, 27, 36, '2021-08-09 14:49:56', 1),
(1876, 21, 27, 38, '2021-08-09 14:49:56', 1),
(1877, 21, 27, 40, '2021-08-09 14:49:56', 1),
(1878, 21, 27, 43, '2021-08-09 14:49:56', 1),
(1879, 21, 27, 44, '2021-08-09 14:49:56', 1),
(1880, 21, 27, 45, '2021-08-09 14:49:56', 1),
(1881, 21, 28, 15, '2021-08-09 14:50:11', 1),
(1882, 21, 28, 17, '2021-08-09 14:50:11', 1),
(1883, 21, 28, 19, '2021-08-09 14:50:11', 1),
(1884, 21, 28, 22, '2021-08-09 14:50:11', 1),
(1885, 21, 28, 23, '2021-08-09 14:50:11', 1),
(1886, 21, 28, 24, '2021-08-09 14:50:11', 1),
(1887, 21, 28, 25, '2021-08-09 14:50:11', 1),
(1888, 21, 28, 26, '2021-08-09 14:50:11', 1),
(1889, 21, 28, 29, '2021-08-09 14:50:11', 1),
(1890, 21, 28, 31, '2021-08-09 14:50:11', 1),
(1891, 21, 28, 32, '2021-08-09 14:50:11', 1),
(1892, 21, 28, 33, '2021-08-09 14:50:11', 1),
(1893, 21, 28, 36, '2021-08-09 14:50:11', 1),
(1894, 21, 28, 38, '2021-08-09 14:50:11', 1),
(1895, 21, 28, 39, '2021-08-09 14:50:11', 1),
(1896, 21, 28, 40, '2021-08-09 14:50:11', 1),
(1897, 21, 28, 42, '2021-08-09 14:50:11', 1),
(1898, 21, 28, 43, '2021-08-09 14:50:11', 1),
(1899, 21, 28, 44, '2021-08-09 14:50:11', 1),
(1900, 21, 28, 45, '2021-08-09 14:50:11', 1),
(1901, 21, 29, 15, '2021-08-09 14:50:23', 1),
(1902, 21, 29, 17, '2021-08-09 14:50:23', 1),
(1903, 21, 29, 19, '2021-08-09 14:50:23', 1),
(1904, 21, 29, 22, '2021-08-09 14:50:23', 1),
(1905, 21, 29, 23, '2021-08-09 14:50:23', 1),
(1906, 21, 29, 24, '2021-08-09 14:50:23', 1),
(1907, 21, 29, 25, '2021-08-09 14:50:23', 1),
(1908, 21, 29, 26, '2021-08-09 14:50:23', 1),
(1909, 21, 29, 29, '2021-08-09 14:50:23', 1),
(1910, 21, 29, 31, '2021-08-09 14:50:23', 1),
(1911, 21, 29, 32, '2021-08-09 14:50:23', 1),
(1912, 21, 29, 33, '2021-08-09 14:50:23', 1),
(1913, 21, 29, 36, '2021-08-09 14:50:23', 1),
(1914, 21, 29, 38, '2021-08-09 14:50:23', 1),
(1915, 21, 29, 39, '2021-08-09 14:50:23', 1),
(1916, 21, 29, 40, '2021-08-09 14:50:23', 1),
(1917, 21, 29, 42, '2021-08-09 14:50:23', 1),
(1918, 21, 29, 43, '2021-08-09 14:50:23', 1),
(1919, 21, 29, 44, '2021-08-09 14:50:23', 1),
(1920, 21, 29, 45, '2021-08-09 14:50:23', 1),
(1921, 21, 30, 15, '2021-08-09 14:50:35', 1),
(1922, 21, 30, 17, '2021-08-09 14:50:35', 1),
(1923, 21, 30, 19, '2021-08-09 14:50:35', 1),
(1924, 21, 30, 22, '2021-08-09 14:50:35', 1),
(1925, 21, 30, 23, '2021-08-09 14:50:35', 1),
(1926, 21, 30, 24, '2021-08-09 14:50:35', 1),
(1927, 21, 30, 25, '2021-08-09 14:50:35', 1),
(1928, 21, 30, 26, '2021-08-09 14:50:35', 1),
(1929, 21, 30, 29, '2021-08-09 14:50:35', 1),
(1930, 21, 30, 31, '2021-08-09 14:50:35', 1),
(1931, 21, 30, 32, '2021-08-09 14:50:35', 1),
(1932, 21, 30, 33, '2021-08-09 14:50:35', 1),
(1933, 21, 30, 34, '2021-08-09 14:50:35', 1),
(1934, 21, 30, 36, '2021-08-09 14:50:35', 1),
(1935, 21, 30, 38, '2021-08-09 14:50:35', 1),
(1936, 21, 30, 39, '2021-08-09 14:50:35', 1),
(1937, 21, 30, 40, '2021-08-09 14:50:35', 1),
(1938, 21, 30, 42, '2021-08-09 14:50:35', 1),
(1939, 21, 30, 43, '2021-08-09 14:50:35', 1),
(1940, 21, 30, 44, '2021-08-09 14:50:35', 1),
(1941, 21, 30, 45, '2021-08-09 14:50:35', 1),
(1942, 22, 31, 15, '2021-08-09 14:54:12', 1),
(1943, 22, 31, 17, '2021-08-09 14:54:12', 1),
(1944, 22, 31, 19, '2021-08-09 14:54:12', 1),
(1945, 22, 31, 22, '2021-08-09 14:54:12', 1),
(1946, 22, 31, 23, '2021-08-09 14:54:12', 1),
(1947, 22, 31, 29, '2021-08-09 14:54:12', 1),
(1948, 22, 31, 31, '2021-08-09 14:54:12', 1),
(1949, 22, 31, 32, '2021-08-09 14:54:12', 1),
(1950, 22, 31, 33, '2021-08-09 14:54:12', 1),
(1951, 22, 31, 36, '2021-08-09 14:54:12', 1),
(1952, 22, 31, 38, '2021-08-09 14:54:12', 1),
(1953, 22, 31, 40, '2021-08-09 14:54:12', 1),
(1954, 22, 31, 43, '2021-08-09 14:54:12', 1),
(1955, 22, 31, 44, '2021-08-09 14:54:12', 1),
(1956, 22, 32, 15, '2021-08-09 14:54:25', 1),
(1957, 22, 32, 17, '2021-08-09 14:54:25', 1),
(1958, 22, 32, 19, '2021-08-09 14:54:25', 1),
(1959, 22, 32, 22, '2021-08-09 14:54:25', 1),
(1960, 22, 32, 23, '2021-08-09 14:54:25', 1),
(1961, 22, 32, 29, '2021-08-09 14:54:25', 1),
(1962, 22, 32, 31, '2021-08-09 14:54:25', 1),
(1963, 22, 32, 33, '2021-08-09 14:54:25', 1),
(1964, 22, 32, 34, '2021-08-09 14:54:25', 1),
(1965, 22, 32, 36, '2021-08-09 14:54:25', 1),
(1966, 22, 32, 38, '2021-08-09 14:54:25', 1),
(1967, 22, 32, 39, '2021-08-09 14:54:25', 1),
(1968, 22, 32, 40, '2021-08-09 14:54:25', 1),
(1969, 22, 32, 43, '2021-08-09 14:54:25', 1),
(1970, 22, 32, 44, '2021-08-09 14:54:25', 1),
(1971, 22, 32, 45, '2021-08-09 14:54:25', 1),
(1972, 22, 33, 15, '2021-08-09 14:54:38', 1),
(1973, 22, 33, 17, '2021-08-09 14:54:38', 1),
(1974, 22, 33, 19, '2021-08-09 14:54:38', 1),
(1975, 22, 33, 22, '2021-08-09 14:54:38', 1),
(1976, 22, 33, 23, '2021-08-09 14:54:38', 1),
(1977, 22, 33, 24, '2021-08-09 14:54:38', 1),
(1978, 22, 33, 26, '2021-08-09 14:54:38', 1),
(1979, 22, 33, 29, '2021-08-09 14:54:38', 1),
(1980, 22, 33, 31, '2021-08-09 14:54:38', 1),
(1981, 22, 33, 32, '2021-08-09 14:54:38', 1),
(1982, 22, 33, 33, '2021-08-09 14:54:38', 1),
(1983, 22, 33, 36, '2021-08-09 14:54:38', 1),
(1984, 22, 33, 38, '2021-08-09 14:54:38', 1),
(1985, 22, 33, 39, '2021-08-09 14:54:38', 1),
(1986, 22, 33, 40, '2021-08-09 14:54:38', 1),
(1987, 22, 33, 43, '2021-08-09 14:54:38', 1),
(1988, 22, 33, 44, '2021-08-09 14:54:38', 1),
(1989, 24, 39, 15, '2021-08-09 15:01:00', 1),
(1990, 24, 39, 17, '2021-08-09 15:01:00', 1),
(1991, 24, 39, 19, '2021-08-09 15:01:00', 1),
(1992, 24, 39, 22, '2021-08-09 15:01:00', 1),
(1993, 24, 39, 23, '2021-08-09 15:01:00', 1),
(1994, 24, 39, 24, '2021-08-09 15:01:00', 1),
(1995, 24, 39, 26, '2021-08-09 15:01:00', 1),
(1996, 24, 39, 29, '2021-08-09 15:01:00', 1),
(1997, 24, 39, 31, '2021-08-09 15:01:00', 1),
(1998, 24, 39, 32, '2021-08-09 15:01:00', 1),
(1999, 24, 39, 33, '2021-08-09 15:01:00', 1),
(2000, 24, 39, 36, '2021-08-09 15:01:00', 1),
(2001, 24, 39, 38, '2021-08-09 15:01:00', 1),
(2002, 24, 39, 40, '2021-08-09 15:01:00', 1),
(2003, 24, 39, 43, '2021-08-09 15:01:00', 1),
(2004, 24, 39, 44, '2021-08-09 15:01:00', 1),
(2005, 24, 40, 15, '2021-08-09 15:01:11', 1),
(2006, 24, 40, 17, '2021-08-09 15:01:11', 1),
(2007, 24, 40, 19, '2021-08-09 15:01:11', 1),
(2008, 24, 40, 22, '2021-08-09 15:01:11', 1),
(2009, 24, 40, 23, '2021-08-09 15:01:11', 1),
(2010, 24, 40, 26, '2021-08-09 15:01:11', 1),
(2011, 24, 40, 29, '2021-08-09 15:01:11', 1),
(2012, 24, 40, 31, '2021-08-09 15:01:11', 1),
(2013, 24, 40, 32, '2021-08-09 15:01:11', 1),
(2014, 24, 40, 33, '2021-08-09 15:01:11', 1),
(2015, 24, 40, 36, '2021-08-09 15:01:11', 1),
(2016, 24, 40, 38, '2021-08-09 15:01:11', 1),
(2017, 24, 40, 40, '2021-08-09 15:01:11', 1),
(2018, 24, 40, 43, '2021-08-09 15:01:11', 1),
(2019, 24, 40, 44, '2021-08-09 15:01:11', 1),
(2020, 18, 20, 15, '2021-08-09 15:31:58', 1),
(2021, 18, 20, 18, '2021-08-09 15:31:58', 1),
(2022, 18, 20, 19, '2021-08-09 15:31:58', 1),
(2023, 18, 20, 20, '2021-08-09 15:31:58', 1),
(2024, 18, 20, 22, '2021-08-09 15:31:58', 1),
(2025, 18, 20, 23, '2021-08-09 15:31:58', 1),
(2026, 18, 20, 24, '2021-08-09 15:31:58', 1),
(2027, 18, 20, 26, '2021-08-09 15:31:58', 1),
(2028, 18, 20, 27, '2021-08-09 15:31:58', 1),
(2029, 18, 20, 29, '2021-08-09 15:31:58', 1),
(2030, 18, 20, 31, '2021-08-09 15:31:58', 1),
(2031, 18, 20, 32, '2021-08-09 15:31:58', 1),
(2032, 18, 20, 33, '2021-08-09 15:31:58', 1),
(2033, 18, 20, 34, '2021-08-09 15:31:58', 1),
(2034, 18, 20, 36, '2021-08-09 15:31:58', 1),
(2035, 18, 20, 38, '2021-08-09 15:31:58', 1),
(2036, 18, 20, 40, '2021-08-09 15:31:58', 1),
(2037, 18, 20, 41, '2021-08-09 15:31:58', 1),
(2038, 18, 20, 43, '2021-08-09 15:31:58', 1),
(2039, 18, 20, 47, '2021-08-09 15:31:58', 1),
(2040, 18, 20, 48, '2021-08-09 15:31:58', 1),
(2041, 18, 20, 50, '2021-08-09 15:31:58', 1),
(2042, 18, 20, 51, '2021-08-09 15:31:58', 1),
(2043, 18, 20, 52, '2021-08-09 15:31:58', 1),
(2044, 18, 20, 54, '2021-08-09 15:31:58', 1),
(2045, 18, 20, 56, '2021-08-09 15:31:58', 1),
(2046, 18, 21, 15, '2021-08-09 15:35:15', 1),
(2047, 18, 21, 17, '2021-08-09 15:35:15', 1),
(2048, 18, 21, 18, '2021-08-09 15:35:15', 1),
(2049, 18, 21, 19, '2021-08-09 15:35:15', 1),
(2050, 18, 21, 20, '2021-08-09 15:35:15', 1),
(2051, 18, 21, 21, '2021-08-09 15:35:15', 1),
(2052, 18, 21, 22, '2021-08-09 15:35:15', 1),
(2053, 18, 21, 23, '2021-08-09 15:35:15', 1),
(2054, 18, 21, 24, '2021-08-09 15:35:15', 1),
(2055, 18, 21, 26, '2021-08-09 15:35:15', 1),
(2056, 18, 21, 27, '2021-08-09 15:35:15', 1),
(2057, 18, 21, 29, '2021-08-09 15:35:15', 1),
(2058, 18, 21, 31, '2021-08-09 15:35:15', 1),
(2059, 18, 21, 32, '2021-08-09 15:35:15', 1),
(2060, 18, 21, 33, '2021-08-09 15:35:15', 1),
(2061, 18, 21, 34, '2021-08-09 15:35:15', 1),
(2062, 18, 21, 36, '2021-08-09 15:35:15', 1),
(2063, 18, 21, 38, '2021-08-09 15:35:15', 1),
(2064, 18, 21, 40, '2021-08-09 15:35:15', 1),
(2065, 18, 21, 41, '2021-08-09 15:35:15', 1),
(2066, 18, 21, 43, '2021-08-09 15:35:15', 1),
(2067, 18, 21, 44, '2021-08-09 15:35:15', 1),
(2068, 18, 21, 47, '2021-08-09 15:35:15', 1),
(2069, 18, 21, 48, '2021-08-09 15:35:15', 1),
(2070, 18, 21, 50, '2021-08-09 15:35:15', 1),
(2071, 18, 21, 51, '2021-08-09 15:35:15', 1),
(2072, 18, 21, 52, '2021-08-09 15:35:15', 1),
(2073, 18, 21, 54, '2021-08-09 15:35:15', 1),
(2074, 18, 21, 56, '2021-08-09 15:35:15', 1),
(2075, 18, 22, 15, '2021-08-09 15:36:46', 1),
(2076, 18, 22, 18, '2021-08-09 15:36:46', 1),
(2077, 18, 22, 19, '2021-08-09 15:36:46', 1),
(2078, 18, 22, 20, '2021-08-09 15:36:46', 1),
(2079, 18, 22, 22, '2021-08-09 15:36:46', 1),
(2080, 18, 22, 23, '2021-08-09 15:36:46', 1),
(2081, 18, 22, 24, '2021-08-09 15:36:46', 1),
(2082, 18, 22, 26, '2021-08-09 15:36:46', 1),
(2083, 18, 22, 27, '2021-08-09 15:36:46', 1),
(2084, 18, 22, 29, '2021-08-09 15:36:46', 1),
(2085, 18, 22, 31, '2021-08-09 15:36:46', 1),
(2086, 18, 22, 32, '2021-08-09 15:36:46', 1),
(2087, 18, 22, 33, '2021-08-09 15:36:46', 1),
(2088, 18, 22, 34, '2021-08-09 15:36:46', 1),
(2089, 18, 22, 36, '2021-08-09 15:36:46', 1),
(2090, 18, 22, 38, '2021-08-09 15:36:46', 1),
(2091, 18, 22, 40, '2021-08-09 15:36:46', 1),
(2092, 18, 22, 41, '2021-08-09 15:36:46', 1),
(2093, 18, 22, 43, '2021-08-09 15:36:46', 1),
(2094, 18, 22, 47, '2021-08-09 15:36:46', 1),
(2095, 18, 22, 48, '2021-08-09 15:36:46', 1),
(2096, 18, 22, 50, '2021-08-09 15:36:46', 1),
(2097, 18, 22, 51, '2021-08-09 15:36:46', 1),
(2098, 18, 22, 52, '2021-08-09 15:36:46', 1),
(2099, 18, 22, 54, '2021-08-09 15:36:46', 1),
(2100, 18, 22, 56, '2021-08-09 15:36:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_hotel_social`
--

CREATE TABLE `cyg_hotel_social` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `social_id` int(11) NOT NULL,
  `social_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_hotel_social`
--

INSERT INTO `cyg_hotel_social` (`id`, `hotel_id`, `social_id`, `social_url`, `is_active`) VALUES
(2, 2, 2, 'https://twitter.com/cygnetthotels', 0),
(3, 2, 3, 'https://www.instagram.com/cygnett_hotels/', 0),
(9, 2, 4, 'https://www.youtube.com/user/CygnettHotels', 0),
(10, 14, 1, 'https://www.facebook.com/cygnettparkmeghna', 0),
(11, 11, 1, 'https://www.facebook.com/Cygnett-Inn-Sea-View-Digha-104187118392553', 0),
(15, 4, 1, 'facebook.com/Cygnettresortmountainbreeze', 0),
(14, 21, 1, 'https://www.facebook.com/cygnettpark', 0),
(16, 4, 1, 'facebook.com/Cygnettresortmountainbreeze', 0),
(17, 23, 1, 'https://www.facebook.com/cygnettstyletanias', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_inclusions`
--

CREATE TABLE `cyg_inclusions` (
  `id` int(11) NOT NULL,
  `inclusion_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyg_job_posts`
--

CREATE TABLE `cyg_job_posts` (
  `id` int(11) NOT NULL,
  `job_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `job_location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `job_ex_frm` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `job_ex_to` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `job_qualification` int(11) NOT NULL,
  `document` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '--',
  `job_validity_frm` date DEFAULT NULL,
  `job_validity_to` date DEFAULT NULL,
  `no_positions` int(11) NOT NULL,
  `to_mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cc_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '--',
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_job_posts`
--

INSERT INTO `cyg_job_posts` (`id`, `job_title`, `job_location`, `job_description`, `job_ex_frm`, `job_ex_to`, `job_qualification`, `document`, `job_validity_frm`, `job_validity_to`, `no_positions`, `to_mail`, `cc_mail`, `added_on`, `added_by`, `updated_on`, `updated_by`, `is_active`) VALUES
(2, 'Assistant Front Office Manager (Code - CIPD/FO/1)', 'Dehradun', '', '7', '8', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 14:58:11', 1, '2021-08-27 16:40:48', 1, 1),
(3, 'Front Office Executive/Supervisor (Code - CIPD/FO/2)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:42:18', 1, '2021-08-27 16:44:07', 1, 1),
(4, 'Guest Service Associate (Code - CIPD/FO/3)', 'Dehradun', '', '1', '2', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:43:56', 1, NULL, NULL, 1),
(5, 'BellBoy (Code - CIPD/FO/4)', 'Dehradun', '', '1', '2', 2, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:46:27', 1, NULL, NULL, 1),
(6, 'Executive Housekeeper (Code - CIPD/HK/1)', 'Dehradun', '', '7', '8', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:47:54', 1, '2021-09-05 21:39:07', 1, 1),
(7, 'Housekeeping Supervisor (Code - CIPD/HK/2)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:50:44', 1, NULL, NULL, 1),
(8, 'Floor Attendant', 'Dehradun', '', '1', '2', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:51:59', 1, NULL, NULL, 1),
(9, 'Floor Attendant ( Public Area ) - (Code-CIPD/HK/4)', 'Dehradun', '', '1', '2', 2, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:55:36', 1, NULL, NULL, 1),
(10, 'F&amp;B Manager (Code - CIPD/FB/1)', 'Dehradun', '', '7', '8', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:57:48', 1, NULL, NULL, 1),
(11, 'Banquet Executive', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 16:59:21', 1, NULL, NULL, 1),
(12, 'Banquet Coordinator (Code - CIPD/FB/3)', 'Dehradun', '', '3', '4', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:00:33', 1, NULL, NULL, 1),
(13, 'Captain/Supervisor (Code - CIPD/FB/4)', 'Dehradun', '', '2', '3', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:01:49', 1, NULL, NULL, 1),
(14, 'Team Member  - F&amp;B  (Code - CIPD/FB/5)', 'Dehradun', '', '1', '2', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:02:45', 1, NULL, NULL, 1),
(15, 'Executive Chef (Code - CIPD/FP/1)', 'Dehradun', '', '10', '12', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:04:34', 1, NULL, NULL, 1),
(16, 'Indian Commi-CDP (Code - CIPD/FP/2)', 'Dehradun', '', '6', '7', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:05:35', 1, NULL, NULL, 1),
(17, 'Indian Commi -I (Code - CIPD/FP/3)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:06:30', 1, NULL, NULL, 1),
(18, 'Commi-Contitental-I (Code - CIPD/FP/4)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:08:04', 1, NULL, NULL, 1),
(19, 'Commi - I Chinese (Code - CIPD/FP/5)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:08:50', 1, NULL, NULL, 1),
(20, 'Halwai (Code - CIPD/FP/6)', 'Dehradun', '', '5', '6', 2, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:10:50', 1, NULL, NULL, 1),
(21, 'Commi - I South Indian (Code - CIPD/FP/7)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:16:50', 1, NULL, NULL, 1),
(22, 'Commi - Tandoor-I (Code - CIPD/FP/8)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:17:45', 1, NULL, NULL, 1),
(23, 'Indian Commi -II (Code - CIPD/FP/9)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:18:50', 1, NULL, NULL, 1),
(24, 'Bakery-I (Code - CIPD/FP/10)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:19:53', 1, NULL, NULL, 1),
(25, 'Bakery-II (Code - CIPD/FP/11)', 'Dehradun', '', '5', '6', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:20:39', 1, NULL, NULL, 1),
(26, 'KST Assistant  (Code - CIPD/FP/12)', 'Dehradun', '', '0', '1', 2, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:21:52', 1, NULL, NULL, 1),
(27, 'Purchase &amp; Store Executive (Code - CIPD/FIN/1)', 'Dehradun', '', '3', '4', 3, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:22:44', 1, NULL, NULL, 1),
(28, 'Unit Financial Controller (Code - CIPD/FIN/2)', 'Dehradun', '', '12', '13', 4, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:23:51', 1, NULL, NULL, 1),
(29, 'Finance Executive (Code - CIPD/FIN/3)', 'Dehradun', '', '4', '5', 3, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:26:07', 1, NULL, NULL, 1),
(30, 'IT Executive (Code - CIPD/FIN/4)', 'Dehradun', '', '2', '3', 5, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:27:46', 1, NULL, NULL, 1),
(31, 'Executive Human Resource (Code - CIPD/HR/1)', 'Dehradun', '', '3', '4', 6, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:28:55', 1, NULL, NULL, 1),
(32, 'Supervisor -Engineer (Code - CIPD/E/1)', 'Dehradun', '', '7', '8', 7, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:30:07', 1, NULL, NULL, 1),
(33, 'Team Member-Multiskilled Technician (Code - CIPD/E/2)', 'Dehradun', '', '3', '4', 8, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:31:14', 1, NULL, NULL, 1),
(34, 'Sales Manager (Code - CIPD/S/1)', 'Dehradun', '', '6', '7', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:32:22', 1, NULL, NULL, 1),
(35, 'Sales Executive (Code - CIPD/S/2)', 'Dehradun', '', '2', '3', 1, '--', NULL, NULL, 1, 'hr@cygnetthotels.com', '', '2021-08-27 17:33:07', 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_job_posts_application_tracker`
--

CREATE TABLE `cyg_job_posts_application_tracker` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` char(10) NOT NULL,
  `resume` text NOT NULL,
  `candidate_name` varchar(300) NOT NULL,
  `date_received` datetime NOT NULL,
  `contacted` tinyint(1) NOT NULL DEFAULT '0',
  `contact_date` datetime DEFAULT NULL,
  `interviewed` tinyint(1) NOT NULL DEFAULT '0',
  `interview_date` datetime DEFAULT NULL,
  `hired` tinyint(1) NOT NULL DEFAULT '0',
  `hire_date` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyg_job_posts_application_tracker`
--

INSERT INTO `cyg_job_posts_application_tracker` (`id`, `job_id`, `email`, `mobile`, `resume`, `candidate_name`, `date_received`, `contacted`, `contact_date`, `interviewed`, `interview_date`, `hired`, `hire_date`, `date_update`) VALUES
(1, 4, 'Shailendra.kumar.6554@gmail.com', '8318455359', '1630258379_SHAILENDRA.docx', 'Shailendra kumar ', '2021-08-29 23:04:00', 0, NULL, 0, NULL, 0, NULL, NULL),
(2, 4, 'Shailendra.kumar.6554@gmail.com', '8318455359', '1630258383_SHAILENDRA.docx', 'Shailendra kumar ', '2021-08-29 23:04:03', 0, NULL, 0, NULL, 0, NULL, NULL),
(3, 10, 'rafiuls786@gmail.com', '9552159672', '1630261734_Rafiul_Sekh.docx', 'Rafiul sekh', '2021-08-30 00:28:54', 0, NULL, 0, NULL, 0, NULL, NULL),
(4, 29, 'abhijeetkhatri004@gmail.com', '9717926295', '1630304122_CV-Abhijeet_Kr._Khatri.pdf', 'Abhijeet Kumar Khatri', '2021-08-30 11:46:22', 0, NULL, 0, NULL, 0, NULL, NULL),
(5, 2, 'rishis.sharma87@gmail.com', '9837251223', '1630320966_Resume_RKS_New.docx', 'Rishi Kant Sharma', '2021-08-30 16:26:07', 0, NULL, 0, NULL, 0, NULL, NULL),
(6, 29, 'rishikeshkumarjha27@gmail.com', '7317094822', '1630323763_Rishikesh_Kumar_Jha__.doc', 'RISHIKESH KUMAR JHA', '2021-08-30 17:12:43', 0, NULL, 0, NULL, 0, NULL, NULL),
(7, 35, 'sheldon.5597@gmail.com', '8452034890', '1630328995_Sheldon_Coutinho_Resume.docx', 'sheldon coutinho', '2021-08-30 18:39:55', 0, NULL, 0, NULL, 0, NULL, NULL),
(8, 22, 'nitindangwal.0@gmail.com', '9897785249', '1630346659_Nitin_Dangwal.pdf', 'Nitin Dangwal', '2021-08-30 23:34:20', 0, NULL, 0, NULL, 0, NULL, NULL),
(9, 16, 'krrawat8@gmail.com', '7042046673', '1630394509_1628592808629_CHEF_KEVIN007.pdf', 'Kavinder Rawat', '2021-08-31 12:51:49', 0, NULL, 0, NULL, 0, NULL, NULL),
(10, 10, 'arunkala123@yahoo.com', '9193089019', '1630468490_ARUN_KUMAR-converted.pdf', 'Arun ', '2021-09-01 09:24:50', 0, NULL, 0, NULL, 0, NULL, NULL),
(11, 15, 'Narlubby@gmail.com', '9675235182', '1630474011_mime-attachment.pdf', 'Narendra singh', '2021-09-01 10:56:51', 0, NULL, 0, NULL, 0, NULL, NULL),
(12, 15, 'rajdipbhattacharya973@gmail.com', '9007930747', '1630480857_1626962189887_Rajdip_Bhattacharya.pdf', 'Rajdip Bhattacharya', '2021-09-01 12:50:58', 0, NULL, 0, NULL, 0, NULL, NULL),
(13, 15, 'rajdipbhattacharya973@gmail.com', '9007930747', '1630481021_1626962189887_Rajdip_Bhattacharya.pdf', 'Rajdip Bhattacharya', '2021-09-01 12:53:41', 0, NULL, 0, NULL, 0, NULL, NULL),
(14, 34, '0munish.sharma@rdrudrapur.com', '9760428785', '1630483167_MUNISH_SHARMA_CV___1_.docx', 'Munish Sharma', '2021-09-01 13:29:27', 0, NULL, 0, NULL, 0, NULL, NULL),
(15, 6, 'psr281089@gmail.com', '7534933502', '1630483383_Praveen_Rawat_Resume.pdf.pdf', 'Praveen Rawat', '2021-09-01 13:33:03', 0, NULL, 0, NULL, 0, NULL, NULL),
(16, 32, 'jagdeepbhandari100@gmail.com', '9650463757', '1630498867_jaggu-1.doc', 'Jagdeep Bhandari', '2021-09-01 17:51:08', 0, NULL, 0, NULL, 0, NULL, NULL),
(17, 32, 'pandeyabhi0091@gmail.com', '9720973157', '1630499810_Abhishek_Pandey__1_.docx', 'Abhishek Pandey', '2021-09-01 18:06:51', 0, NULL, 0, NULL, 0, NULL, NULL),
(18, 16, 'rr4303100@gmail.com', '7430035584', '1630501467_Roni_resume.pdf', 'roni sar', '2021-09-01 18:34:27', 0, NULL, 0, NULL, 0, NULL, NULL),
(19, 31, 'Manu.vashisth90@gmail.com', '8882104785', '1630511766_Manu_Sharma_CV-1.doc', 'Manu Sharma ', '2021-09-01 21:26:06', 0, NULL, 0, NULL, 0, NULL, NULL),
(20, 6, 'psr281089@gmail.com', '7534933502', '1630518742_Praveen_Rawat_Resume.pdf.pdf', 'Praveen Rawat', '2021-09-01 23:22:23', 0, NULL, 0, NULL, 0, NULL, NULL),
(21, 27, 'saroj111991@gmail.com', '9065771778', '1630566662_saroj_kumar_updated_resum.pdf', 'saroj kumar', '2021-09-02 12:41:02', 0, NULL, 0, NULL, 0, NULL, NULL),
(22, 15, 'rajdipbhattacharya973@gmail.com', '9007930747', '1630588167_1626962189887_Rajdip_Bhattacharya.pdf', 'Rajdip Bhattacharya', '2021-09-02 18:39:28', 0, NULL, 0, NULL, 0, NULL, NULL),
(23, 3, 'Jasbinderk3@gmail.com', '7982551966', '1630598758_Jasbinder_Kaur_Resume..pdf', 'Jasbinder Kaur', '2021-09-02 21:35:58', 0, NULL, 0, NULL, 0, NULL, NULL),
(24, 16, 'krrawat8@gmail.com', '7042046673', '1630646160_CHEF_KEVIN007__1_795.docx', 'Kavinder Rawat', '2021-09-03 10:46:00', 0, NULL, 0, NULL, 0, NULL, NULL),
(25, 6, 'karkantitushar1@gmail.com', '7045660530', '1630653760_Tushar_CV_final.doc', 'Tushar Kar', '2021-09-03 12:52:41', 0, NULL, 0, NULL, 0, NULL, NULL),
(26, 28, 'raghwanishant@gmail.com', '7055307666', '1630662581_Nishant.docx', 'Nishant', '2021-09-03 15:19:41', 0, NULL, 0, NULL, 0, NULL, NULL),
(27, 35, 'manojsingh12841@gmail.com', '8866618097', '1630674054_MANOJBHAI_FINAL_RESUME.pdf', 'Manoj Singh', '2021-09-03 18:30:54', 0, NULL, 0, NULL, 0, NULL, NULL),
(28, 15, 'msunilihm@gmail.com', '8220677267', '1630685283_@CV_SUNIL__1___1_.docx', 'M SUNIL KUMAR ', '2021-09-03 21:38:03', 0, NULL, 0, NULL, 0, NULL, NULL),
(29, 13, 'pantvaibhav89@yahoo.com', '7055083500', '1630691237_VINOD_PA.NT_CV.docx', 'Vinod Kumar Pant ', '2021-09-03 23:17:17', 0, NULL, 0, NULL, 0, NULL, NULL),
(30, 13, 'deepakgusain2424@gmail.com', '0501861127', '1630701312_CV_Deepak_new_format.doc', 'Deepak', '2021-09-04 02:05:13', 0, NULL, 0, NULL, 0, NULL, NULL),
(31, 2, 'kumar4111987@gmail.com', '9080859816', '1630739555_Resume-1.pdf', 'KUMARESAN', '2021-09-04 12:42:35', 0, NULL, 0, NULL, 0, NULL, NULL),
(32, 10, 'pankajbhatt4u@gmail.com', '9650831853', '1630757671_Pankaj_Resume_.pdf', 'PANKAJ BHATT', '2021-09-04 17:44:31', 0, NULL, 0, NULL, 0, NULL, NULL),
(33, 3, 'tridibesh66@gmail.com', '9051085569', '1630760367_Tridibesh_Chatterjee_Resume.PDF', 'Tridibesh Chatterjee', '2021-09-04 18:29:27', 0, NULL, 0, NULL, 0, NULL, NULL),
(34, 4, 'pwlthapa1@gmail.com', '9986629464', '1630760608_Resume_of_Pawal_thap.docx', 'Pawal thapa', '2021-09-04 18:33:28', 0, NULL, 0, NULL, 0, NULL, NULL),
(35, 6, 'avneeshankul@gmai.com', '9557523907', '1630763669_Avneesh_EHK_9.docx', 'Avneesh Kumar', '2021-09-04 19:24:29', 0, NULL, 0, NULL, 0, NULL, NULL),
(36, 22, 'pankajsuriyal787@gmail.com', '9867242510', '1630827197_CV_Pankaj.docx', 'Pankaj Suriyal', '2021-09-05 13:03:18', 0, NULL, 0, NULL, 0, NULL, NULL),
(37, 30, 'sachinsharma0594@gmail.com', '9815940594', '1630831993_sachin_sharma__CV__1.doc', 'Sachin', '2021-09-05 14:23:13', 0, NULL, 0, NULL, 0, NULL, NULL),
(38, 4, 'sharmasinghgarima@gmail.com', '7807704402', '1630832335_Resume_Garima__1_.docx', 'GArima Sharma', '2021-09-05 14:28:55', 0, NULL, 0, NULL, 0, NULL, NULL),
(39, 7, 'praveenverma1580@gmail.com', '8146450687', '1630832647_ResuMe_.pdf', 'Praveen', '2021-09-05 14:34:07', 0, NULL, 0, NULL, 0, NULL, NULL),
(40, 6, 'sunil5555thakur@gmail.com', '7807845712', '1630834321_housekeeping_Assistant_manager_sunil__1___1_.pdf', 'Sunil', '2021-09-05 15:02:01', 0, NULL, 0, NULL, 0, NULL, NULL),
(41, 16, 'sayantan.basuroy@gmail.com', '7890736426', '1630843835_SAYANTAN_2021_CV.docx', 'Sayantan basu roy', '2021-09-05 17:40:35', 0, NULL, 0, NULL, 0, NULL, NULL),
(42, 15, 'sayantan.basuroy@gmail.com', '9674289608', '1630844100_SAYANTAN_2021_CV.docx', 'Sayantan basu roy', '2021-09-05 17:45:01', 0, NULL, 0, NULL, 0, NULL, NULL),
(43, 6, 'imdhiman001@gmail.com', '9001081106', '1630862514_Vipin_Kumar_s_Resume_2021.pdf', 'Dip in Kumar', '2021-09-05 22:51:54', 0, NULL, 0, NULL, 0, NULL, NULL),
(44, 34, '0munish.sharma@gmail.com', '9760428785', '1630867898_Munish_Sharma_CV_2021.docx', 'Munish Sharma', '2021-09-06 00:21:38', 0, NULL, 0, NULL, 0, NULL, NULL),
(45, 11, '0munish.sharma@gmail.com', '8171000152', '1630868074_Munish_Sharma_CV_2021.docx', 'Munish', '2021-09-06 00:24:35', 0, NULL, 0, NULL, 0, NULL, NULL),
(46, 11, '0munish.sharma@gmail.com', '8171000152', '1630868075_Munish_Sharma_CV_2021.docx', 'Munish', '2021-09-06 00:24:35', 0, NULL, 0, NULL, 0, NULL, NULL),
(47, 3, 's.chauhansonu5@gmail.com', '8894943315', '1630968657_Mr._Chauhan_CV.docx', 'Sonu Kumar', '2021-09-07 04:20:57', 0, NULL, 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_location`
--

CREATE TABLE `cyg_location` (
  `id` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `location` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `list_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `meta_title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_popular` tinyint(1) DEFAULT NULL,
  `sequence` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `custom_url` char(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_location`
--

INSERT INTO `cyg_location` (`id`, `country`, `location`, `latitude`, `longitude`, `image`, `list_image`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `is_popular`, `sequence`, `custom_url`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 99, 'Amritsar', '', '', '1618991146_amritsar.jpg', NULL, '&lt;p&gt;Amritsar, literally a Pool of Nectar, derives its name from Amrit Sarovar, the holy tank that surrounds the splendid Golden Temple. Guru Ramdas, the fourth Guru of the Sikh faith, founded Amritsar in 1579. He constructed a pool on land gifted by the Mughal Emperor Akbar and called it Amritsar. One of the most pristine cities with Guru-vaani humming from the Gurudwaras, Amritsar is renowned world over for the Golden Temple, also known as Harmandir Sahib Gurudwara - the holiest Gurdwara. It&rsquo;s at the end of a causeway, surrounded by the sacred Amrit Sarovar tank (lake), where pilgrims bathe. This place is also famous for its Jallianwala Bagh massacre and its proximity to Wagah Border. The Amritsari cuisine is also very famous. The satiating food and generous dollops of legendary Punjabi hospitality further connive to cast a spell upon the visitor. One of the most agriculturally productive cities of India, Amritsar is well connected with most of the important cities of India.&lt;/p&gt;', 'Amritsar Hotel Deals | Book Hotels Online in Amritsar | Nearby Hotels in Amritsar', 'Amritsar, literally a Pool of Nectar, derives its name from Amrit Sarovar, the holy tank that surrounds the splendid Golden Temple.  Amritsar is known around the globe for the Golden Temple, as well as the Jallianwala Bagh massacre and its close to the Wa', '', 0, 1, '0', NULL, 1, '2021-02-15 13:43:44', 1, '2021-08-09 11:34:01'),
(2, 99, 'Jaipur', '', '', '1618991101_jaupur.jpg', '1625568731_jaipur-listing.jpg', '&lt;p&gt;Rajasthan\'s beautiful Pink City Jaipur, was the stronghold of a clan of rulers whose three hill forts and series of palaces in the city are important attractions. Known as the Pink City because of the colour of the stone used exclusively in the walled city, Jaipur\'s bazaars sell embroidered leather shoes, blue pottery, tie and dye scarves and other exotic wares. Western Rajasthan itself forms a convenient circuit, in the heart of the Thar desert which has shaped its history, lifestyles and architecture.&lt;/p&gt;&lt;p&gt;aipur has been laid according to the conventional nine-grid pattern that astrologers believe to be lucky, and which has been recommended in the ancient Indian treatise on architecture. Each grid consists of a square, and these have been planned so that, at the heart of the city is the City Palace. Spread around it, in rows, are public buildings, the residences of noblemen, the living and trading quarters of merchants and artisans. Straight, wide roads run through the city, while a high, crenellated wall that forms its defense is pierced with seven gateways that serve as entry points. Today, these walls may be more difficult to spot since the city has grown far beyond its original plan, but they are still there, proof that though Jaipur saw no great siege, it was more than adequately prepared for it.&lt;br&gt;&lt;/p&gt;', 'Jaipur Hotel Deals | Book Hotels Online in Jaipur | Nearby Hotels in Jaipur', 'The magnificent Pink City Jaipur of Rajasthan, is renowned for its history, lifestyle, architecture and palaces and bazaars. Get ready to be mesmerized by the city\'s offerings with a comfortable stay at Cygnett Hotels and Resorts in Jaipur.', '', 1, 1, '0', NULL, 1, '2021-02-15 14:44:09', 1, '2021-08-09 15:57:49'),
(6, 99, 'Nainital', '', '', '1629893539_1619767644_nainital.jpg', '', '&lt;p&gt;Nainital is a gem located in the foothills of the Kumaon Range, is the charming Himalayan Lake town, with a perfect picture-postcard hill-station and one of the most popular splendid destination in Northern India. Nainital is well known for Naini Lake, after which the town got its name. With scenic and exalted mountains dotting its landscape, the exquisiteness of the lake adding to its charm and profuse natural resources, this emerald of Uttrakhand and district of lakes offers heavenly views and delight to its visitors. Founded by the British, Nainital brims with elegant colonial structures that amplify the beauty of this place. It is also surrounded by popular tourist hill towns like Pangot, Ranikhet, and Almora. Nainital is renowned for its lake, bird&rsquo;s eye views and prestigious educational institutions. Nainital attracts countless tourists from every corner of the globe around the year.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;The best time to visit Nainital is the month of May-June which is considered as the peak season.&amp;nbsp; The climate of Nainital remains pleasant throughout the year which makes it a very popular destination among the tourists. The temperature from April to July averages around 22 degrees Celsius.The monsoon season in Nainital starts from July till September, with heavy rainfall. There are also chances of landslides during this time. The winter season in Nainital starts from October to February. The average temperature during this period averages around 14 degrees Celsius. If you want to experience snowfall, visit Nainital in January.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to Reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Air&lt;/b&gt;&lt;br&gt;Nainital does not have direct air connectivity. The nearest airport is Pantnagar, located at a distance of 65 kilometers from Nainital. Commercial flights do not operate to and from Pantnagar. The second nearest airport is New Delhi International/Domestic airport. The distance is approximately 280 kilometers from the central town in Nainital.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;br&gt;The nearest railway station is Kathgodham located at a distance of 32 kilometres. Kathgodam railway station is well connected to important places such as Delhi, Lucknow and Howrah. Daily trains are running between New Delhi and Kathgodam. Some of the popular trains to Kathgodam are Ranikhet Express, Kranti Express, Bagh Express, Uttar Sampark, Dehradun Kathgodam Express and Anvt Kgm Shatabdi Express&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;Nainital is well-linked to all nearby places like Rudrapur and Rampur by National Highway 87. From New Delhi one can drive to Nainital in 6 to 7 hours. Regular taxi services are offered by tour operators to and from Nainital.&lt;/p&gt;\r\n', 'Nainital Hotel Deals | Book Hotels Online in Nainital | Nearby Hotels in Nainital', 'Nainital, the charming Himalayan lake town, is a picture-postcard perfect hill-station and one of the most popular in Northern India. Commonly known as the &lsquo;Lake District&rsquo;, Nainital is nestled high up in the Kumaon Himalayas at an altitude of ', '', 1, 1, '1', 'hotels-in-nainital', 1, '2021-04-30 12:57:24', 1, '2021-08-25 17:42:19'),
(7, 99, 'Goa', '', '', '1629893642_1619767960_goa.jpg', '1625568080_goa-listing.jpg', '&lt;p&gt;In those tumultuous and rebellious times in the sixties, it was then not the &lsquo;sweet betel&rsquo; that was the prime attraction but a different kind of &lsquo;weed&rsquo;. But Goa, since those days of the angry generation, has moved on to attract a multitudinous, peaceful and cosmopolitan school of visitors from all around the globe. Down the corridors of time Goa has been different things to different people. To the Portuguese conquerors it was &lsquo;Golden Goa&rsquo;, the El Dorado, the &lsquo;Rome of the East&rsquo;. Such was its beauty and grandeur, that a traveller was moved to remark: &lsquo;Whoever has seen Goa, need not visit Lisboa&rsquo;-Lisbon, which was then the grand epicenter of the Portuguese dominions.&lt;/p&gt;&lt;p&gt;While the contemporary traveller may not come to modern, thriving Goa &lsquo;for the sale of all sorts of merchandise&rsquo;, the &lsquo;fair&rsquo; is still very much on. The traveller is here to find something different: a balm on the busy mind, to enjoy days of freedom on Goa&rsquo;s magnificent beaches, to parasail or swim with the tide of fellow visitors from all around the globe, to savour its unique cuisine and imbibe its spirits, to take a long and invigorating trek in its unexplored interiors, to marvel at its majestic temples and churches, in short, to be at one with the most friendly people in the country.&lt;/p&gt;&lt;p&gt;In the sixties and seventies, it was, as we have remarked, a haven for the hippies. Since then Goa has moved on to full fledged Statehood, its own Council of Ministers, a magnificent new Assembly complex, its citizens among the most literate in the country with a per capita income the highest in the land. At the hub of this prosperity, is the Tourism industry. At the Goa Tourism Development Corporation (GTDC), we take a humble bow in acknowledgement, in some small measure, of putting Goa on the tourist map of our country.&lt;br&gt;&lt;/p&gt;', 'Goa Hotel Deals | Book Hotels Online in Goa | Nearby Hotels in Goa', 'When the glistening sandy beaches and azure waters of India&rsquo;s ultimate party destination beckon, heading to the Cygnett Inn Celestiial is a no-brainer. This sophisticated hotel has a lot to offer leisure and business travellers alike without even me', '', 1, 1, '4', 'hotels-in-goa', 1, '2021-04-30 13:02:40', 1, '2021-08-25 17:44:02'),
(8, 99, 'Kolkata', '', '', '1619806180_kolkata.jpg', '1626959696_kolkata-tn.jpg', '&lt;p&gt;&lt;b&gt;&quot;The city of Joy&quot;&lt;br&gt;&lt;/b&gt;Once the capital of British India, Kolkata (formerly known as Calcutta), now the capital of West Bengal is one of the four major metropolitan and the second largest Indian city. Kolkata has always been the motherland of the rich culture, fine arts, literature, poetry, music, directors &amp;amp; actors of motion films, intellectuals, and activists inspired by its own globally famed Nobel prize winner Guru Rabindranath Tagore.&amp;nbsp; Situated on the banks of the Hooghly River, Kolkata has Howrah Bridge as a huge attraction and way to connect two ends of the city. Among other major touristy spots are Victoria Memorial, Thakurbari, Mother House, Indian Museum, National Library, Sundarbans, Wildlife Sanctuaries, Park Street, and famous gourmet points revealing the past, colonial architecture, and rich culture of the town. The City of Joy has so much to offer to its visitors that no one left Kolkata without loving it and a longing to come back once more.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;h4&gt;Time to Visit&lt;/h4&gt;The autumn and winter months between October and February are the best time to visit Kolkata, as the weather is perfect and festivities are aplenty. This is the season which witnesses the peak arrival of travelers, especially during Durga Puja. Kolkata, with an eastern tropical climate, has light winters, hot and somewhat humid summers. Summers are the least desirable options for a traveler, and monsoons, although lovely, is not exactly the best season worth a visit.&lt;p&gt;&lt;/p&gt;&lt;h4 style=&quot;font-family: &amp;quot;Source Sans Pro&amp;quot;, -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;; color: rgb(33, 37, 41);&quot;&gt;How to Reach&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Flight&lt;/b&gt;&lt;br&gt;Netaji Subhash Chandra Bose International Airport connects Kolkata to Southeast Asia and some countries of Europe. The domestic terminal is one of the best in the country and is connected to all the major towns and cities. Prepaid taxis are available from the airport to the city. There is also a rail link connecting the airport to the Circular rail station in Dum Dum, though very trains operate on this line presently.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;There are regular bus services for Kolkata from almost any part of India. From Delhi, via NH 19, it takes almost a day to reach Kolkata. Buses are also available from nearby cities like Kharagpur, Haldia etc. You can also alternatively hire taxis for the same, although the fares would be a bit cumbersome. Alternatively, you can also pick up cabs or shared taxis, although the fares might be a bit cumbersome, to begin with.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;br&gt;Kolkata has two main railway stations- Howrah and Sealdah. It is connected to all the big stations in India and is a gateway to North-eastern India. If you are coming to Kolkata via Sealdah, you can take a prepaid taxi to travel to the city. Ferries are available from the Howrah to get you to the other side of the river at Babu Ghat or Fairly Place from where you can take a taxi, bus or autorickshaw to all the parts of the city.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Waterways&lt;/b&gt;&lt;br&gt;The river Hooghly that runs through the west part of the city is one of the less crowded but slow-medium of traffic. There are several points from where you can board several regular ferry services. These services are a good way of avoiding the traffic snarl if you are travelling without luggage. It offers a spectacular view of the Howrah Bridge as it passes beneath it.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Local transport in Kolkata&lt;/b&gt;&lt;br&gt;Kolkata is well connected by metros, local trains, taxis and cabs. Although trams are the archetypal colonial remains, they now remain limited to certain sections of the city only. You can also take a horse-carriage ride or tonga ride around some parts of the city.&lt;/p&gt;', 'Kolkata Hotel Deals | Book Hotels Online in Kolkata | Nearby Hotels in Kolkata', 'Kolkata, capital of West Bengal state, is one of India&rsquo;s largest cities with the city is centered on the east bank of the Hugli (Hooghly) River. It is a city of commerce, transport, and manufacture, a dominant urban center of eastern India. Book you', '', 1, 1, '0', 'hotels-in-kolkata', 1, '2021-04-30 23:39:40', 1, '2021-08-12 12:41:35'),
(9, 99, 'Digha', '', '', '1629893613_1619807762_digha.jpg', '1625567788_digha-listing.jpg', '&lt;p&gt;In the northern end of the Bay of Bengal lies Digha, a coastal resort town in the east Indian state of West Bengal. Digha is known for its sea beaches, picturesque vistas and diverse marine life. It is just 4.5 hrs from Kolkata. Digha is popular among local and tourists for its unlimited choice of sea food, captivating natural landscapes and beaches all summed up to the beautiful hamlet of Bay of Bengal. The relaxing holiday spot has smooth connectivity and easily approachable by rail and road.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;The best time to visit Digha is in the month of October &ndash; February during the winter season. The weather is pleasant and the tourists can enjoy swimming, surfing, scuba-diving, jet-skiing and all other beach activities. Bengal\'s biggest festival Durga Puja also happens in the month of October. In summer (March &ndash; June) the temperature is around 40 degrees Celsius. Monsoon season starts from July till September. The mercury level dips and the rainfall is average.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Air&lt;/b&gt;&lt;br&gt;Netaji Subash Chandra Bose International Airport of Kolkata is the closest airport to Digha. The airport is well connected with all the major Indian cities. Bus services are also available between the airport and Digha. The tourists can also hire a taxi.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;br&gt;Digha has its own railway station which is located around 400 meters from the city. It takes only 5 minutes to reach the city. The railway is well connected to the nearby cities like Kolkata through regular trains.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;Hiring a taxi or self-driving is most suitable to reach Digha if you are travelling from nearby towns. Digha has two bus stands, SBSTC Bus Depot and Old Digha Bus Stop both located at walking distance. Regular bus services also connect Digha to neighboring cities.&lt;/p&gt;\r\n', 'Digha Hotel Deals | Book Hotels Online in Digha | Nearby Hotels in Digha', 'Cygnett Inn Sea View Digha - West Bengal\'s most preferred sea beach and weekend getaway destination is here to offer it\'s guest a cherish able and pleasurable stay. Only 200 meters away from the Bay of Bengal, this urban hotel in Digha is a lifestyle dest', '', 1, 0, '3', 'hotels-in-digha', 1, '2021-05-01 00:06:02', 1, '2021-08-25 17:43:33'),
(10, 99, 'Bongaigaon', '', '', '1619807970_bongaigaon.jpg', '1625567588_bongaigaon-listing.jpg', '&lt;p&gt;Bongaigaon is the name of a city situated in the lower Assam area. Bongaigaon is well known for its petrochemical industry. With its current opening of New Bongaigaon Jn. Railway station, Bongaigaon acts as a gateway of the Northeast Frontier Railway zone. Bongaigaon is connected through National Highway 37 with the rest of the state. The district was created in 1989 taking parts of the Goalpara and Kokrajhar Districts. The city surrounded by hills offers a rich heritage of historical buildings, old temples, forests and wildlife for the tourists.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Best time to visit&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;The climate prevailing in Bongaigaon is humid subtropical climate. The temperature dips during the month of November to February. March and April are generally hot. Monsoon season starts from June to September where heavy rainfall occurs. The best time to visit Bongaigaon is from late October to early March.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Air&lt;/b&gt;&lt;br&gt;The nearest airport is Lokpriya Gopinath Bordoloi Intenational Airport which is at Guwahati and about 100kms from Bongaigon. Private cars or taxis are available for the tourists from the airport to reach the city.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;br&gt;Bongaigaon has two railway stations, one is the New Bongaigaon Railway Station and the other is the Old Bongaigon Railway Station. Trains in regular intervals connecting the major cities of the country reaches both these stations daily.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;The National Highway connects Bongaigaon to many states like Jharkhand, Bihar and West Bengal. Bus services are available to the travellers to reach the city. Bongaigaon is connected with many major cities like Barpeta, Siliguri, Guwahati etc.&lt;br&gt;&lt;/p&gt;', 'Bongaigaon Hotel Deals | Book Hotels Online in Bongaigaon | Nearby Hotels in Bongaigaon', 'The gorgeous city of Bongaigaon is an unique blend of natural beauty and industrial power, Cygnett Park Meghna is a foray into this relatively uncharted hospitality sector, ensuring quality, comfort, and convenience. It is located on NH-27 near the Indian', '', 1, 1, '6', 'hotels-in-bongaigaon', 1, '2021-05-01 00:09:30', 1, '2021-09-07 11:35:56'),
(11, 99, 'Dehradun', '', '', '1619887292_dehradun.jpg', '', '&lt;p&gt;The capital of Uttarakhand, Dehradun is a gateway to some of the most popular hill stations in the country like Nainital and Mussoorie. Nestled in the Doon Valley, it is primarily known for the number of elite boarding schools it has like the Doon School and the Indian Military Academy. In fact, Dehradun is also called the &lsquo;school capital of India&rsquo; for the number of schools it is home to. The much-loved Basmati rice is grown in abundance in this city and then exported to other parts of the country.&lt;/p&gt;&lt;p&gt;Despite excelling in different businesses like schooling, agriculture, construction, etc, the city of Dehradun is still known for its calm and relaxing life where the weather is pleasant and the air, fresh. It lies between the Ganga and Yamuna Rivers, two of the most prominent water bodies in the county. The city is at an elevation of 450m above sea level and makes for pleasant stay for tourists. We give you a low-down on everything you should know about Dehradun for a memorable trip whether it is a solo, couple or family vacation. Bookmark this page for everything about Dehradun.&lt;br&gt;&lt;/p&gt;', 'Dehradun Hotel Deals | Book Hotels Online in Dehradun | Nearby Hotels in Dehradun', 'The capital of Uttarakhand, Dehradun is a gateway to some of the most popular hill stations in the country like Nainital and Mussoorie. Dehradun city is famous for its quiet and relaxing life, with pleasant weather and a fresh air. Come visit this beautif', '', 1, 0, '0', NULL, 1, '2021-05-01 22:11:32', 1, '2021-08-09 16:08:57'),
(12, 99, 'Bhiwadi', '', '', '1619887434_bhiwadi.jpg', '', '&lt;p&gt;Bhiwadi city lies in the Alwar district of Rajasthan State. Bhiwadi comes under the region of North Capital Region. It is popular in Delhi-NCR as an Image of Industrial Hub and location advantage comes on the border of Haryana and Near to Manesar Industrial Area, Adjacent town Dharuhera which comes under Haryana Region. In Kilometer, Bhiwadi is just 65 km away from New Delhi, 200 Km From Jaipur, 90 Km away from Alwar, Only 22 Km away from Gurgaon via 60 Km Away from Faridabad and 45 Minutes runway to Indira Gandhi International Airport, New Delhi and Nearest Railway Station is Rewari Junction 26 km from Bhiwadi City.&lt;/p&gt;&lt;p&gt;According 2011, National Population and Housing Censuses, Bhiwadi have total population of 1,04,883 in which 43% of Female and 57% of Males. Land Area of Bhiwadi is 2000 acres, 977 acres in Khushkhera and 820 acres in Chopanki and about 11000 gallons per hour water is available. Power Resources in Bhiwadi 132 Kilovolts GSS and 220 KV GSS. Bhiwadi town is spread over 3500 acres and about 2700 Medium Scale, Small Scale and Large Scale industries and industry are furnaces to automobile and electronics Manufacturing, Steel Mills. Automobile manufacturer Honda cars setup other production plant Tapukara, Rajasthan. According to Company manufacturing Plant is spread over 450 acres and Total Investment about Rs 3526 Crore in Alwar district. Honda Tapukara Plant started the operation in September 2008.&lt;br&gt;&lt;/p&gt;', 'Bhiwadi Hotel Deals | Book Hotels Online in Bhiwadi | Nearby Hotels in Bhiwadi', 'The city of Bhiwadi is located in Rajasthan\'s Alwar district. Bhiwadi is located in the North Capital Region. It is known as an industrial hub in Delhi-NCR, and its location benefit is on the Haryana border. Choose Cygnett Hotel in Bhiwadi for an interest', '', 1, 0, '0', NULL, 1, '2021-05-01 22:13:54', 1, '2021-08-09 15:57:43'),
(13, 99, 'Alwar', '', '', '1620202393_alwar.jpg', '1625567521_alwar-listing.jpg', '&lt;p&gt;Alwar &ndash; gateway to Rajasthan is centrally located about 150 km south of Delhi and 150 km north of Jaipur was once the seat of Rajputs. Alwar situated in the foothill of Aravalis is a popular tourism hub with forts like the Bhangarh Fort, lakes, nature reserves like Sariska Tiger Reserve and heritage havelis. Alwar is also famous for the Mega Alwar Trade fair held at Dussehra Ground every year. Alwar is a pretty city of rich culture and heritage with majestic fort, beautiful City Palace. The city becomes a great weekend getaway from New Delhi.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Best time to visit&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;Summers in Alwar can become really hot with a record temperature of as high as 50 degrees Celsius. October to March is relatively pleasant. On the occasion of Raksha Bandhan, people celebrate by having kite flying competitions and the sky looks like a sea with colourful water creatures. This could be a sight worth witnessing.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Air&lt;br&gt;&lt;/b&gt;The closest airport to Alwar is at Jaipur. However, the airport in New Delhi is also at almost the same distance from the destination. The Alwar distance from Indira Gandhi International Airport in New Delhi is around 142 kilometers. Sanganer Airport in Jaipur is around 163 kilometers from Alwar. The choice of the airport that you are getting off at depends upon the destination that you are traveling from. Both the airports in New Delhi and Jaipur are of international status and have flights coming down from the majority of the countries.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;br&gt;&lt;/b&gt;Railways are considered to be the best option to get to Alwar from the neighboring cities like Delhi and Jaipur. There are direct trains running between Jaipur and Delhi with Alwar as a major stop in between. In fact, Alwar is a stop for the majority of the trains running on this route. The trains going and coming down from Maharashtra and Gujarat also serve this station. However, the final decision depends on the train you are choosing to travel to Alwar. There are trains that serve Alwar as a stop, like Jaipur Double Decker, Ajmer Shatabdi, Garib Rath, etc.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;br&gt;&lt;/b&gt;Going to Alwar by road is considered by many to be the easiest of the options available. Alwar is located on National Highway 48, hence, is accessible to the majority of the cities in India. This highway connects Delhi, Jaipur, and other major and minor cities and towns in Rajasthan, Gujarat, Maharashtra, Karnataka, etc. It covers a total of 6 states and hordes of small towns and cities. If you are someone who loves to drive, you can get your own vehicle and make your way to this amazing destination. Travel to Alwar by bus if you do not want to travel and also want to save up on costs and the overall budget of your trip.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'Alwar Hotel Deals | Book Hotels Online in Alwar | Nearby Hotels in Alwar', 'Alwar, nestled in the Aravalli range\'s green hills, is home to majestic palaces and forts from a bygone age. Cygnett Lite Alwar is a traveler\'s joy, allowing you to discover the beauty and magnificent architecture of the city, as well as the tranquil lake', '', 1, 0, '0', 'hotels-in-alwar', 1, '2021-05-05 13:43:13', 1, '2021-08-11 15:15:54'),
(14, 99, 'Dwarka', '', '', '1620202475_dwarka.jpg', '1625567869_dwarka-listing.jpg', '&lt;p&gt;Located on the western tip of the Saurashtra peninsula in Gujarat, Dwarka is an ancient city of India. Known as Devbhoomi Dwarka, Dwarka boasts of being the only city that is a part of both Char Dham (four principal holy places) and also Sapta Puris (seven sacred cities) mentioned in the Hindu religion. Dwarka was a part of the ancient kingdom of Krishna and Nageshwar Jyotirlinga Temple, one of the 12 Jyotirlingas, is also located in Dwarka. For these reasons, it enjoys a remarkable religious significance and attracts thousands of pilgrims all year round. The beachside and the seashores are an added tourist attraction.&lt;/p&gt;&lt;p&gt;Legend has it that the city was once engulfed by the sea and recent excavations reveal that a city did exist here. The name Dwarka translates to dwar meaning \'door\' and ka meaning \'moksha\' meaning the &lsquo;door to salvation.&amp;nbsp;&lt;br&gt;&lt;/p&gt;', 'Dwarka Hotel Deals | Book Hotels Online in Dwarka | Nearby Hotels in Dwarka', 'Located on the western tip of the Saurashtra peninsula in Gujarat, Dwarka is an ancient city of India. Known as Devbhoomi Dwarka, it enjoys a remarkable religious significance and attracts thousands of pilgrims all year round. For your family stay choose ', '', 0, 0, '0', NULL, 1, '2021-05-05 13:44:35', 1, '2021-08-09 11:34:20'),
(15, 99, 'Gangtok', '', '', '1620202508_gangtok.jpg', '1625567944_gangtok-listing.jpg', '&lt;p&gt;Gangtok is the capital of the mountainous northern Indian state of Sikkim, is not to be missed on your visit to North-East India. The place of immense peace and natural wonders lures adventurers, nature lovers, couples, solo travelers, and self-seekers alike. Gangtok is entrenched as a Buddhist pilgrimage site.&lt;/p&gt;&lt;p&gt;This tourist attraction has the comprehensive amenities and facilities of a metropolitan town. What makes the exotic destination most preferred is its welcoming, caring, and cleanliness-loving citizens. Gangtok is landlocked from three international borders and has breathtaking magnificent views, even snowfall from high altitudes.&lt;/p&gt;&lt;p&gt;The easy accessibility makes it a perfect destination for everyone who wants to experience the bliss of nature once in their lifetime.&lt;br&gt;&lt;br&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;&lt;/p&gt;&lt;p&gt;The best time to visit Sikkim is either between March and May or October and mid-December. Summer begins in March and ends in June. The average temperature during summers is around 22&deg;C which makes it the perfect time to explore Gangtok. Monsoons in Gangtok starts in the month of July and last till September. The place receives heavy rainfall and cause landslides cutting off routes and disrupt travelling. Winters in Gangtok start from the month of October and end in the month of March. The temperature in winters averages between 4&deg;C and 7&deg;C.The months of October and November are pleasing while in December and January Gangtok experiences snowfall.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Air&lt;/b&gt;&lt;br&gt;The nearest airport to Gangtok is in Bagdogra, West Bengal which is around 125 km away. Bagdogra airport is well connected with the major cities in India. Helicopter services operated by the Sikkim Tourism Development Corporation offers daily services from Bagdogra to Gangtok. It takes around 20 minutes to reach Gangtok from Bagdogra by helicopter.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;br&gt;The closest railway station to Gangtok is New Jalpaiguri which is 115 km away from Gangtok. The railway station is well connected with all major cities of the country. Railways are the most preferred way to reach Gangtok.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;Gangtok is well connected by National Highway 31A with Siliguri, Darjeeling and Kalimpong. Sikkim State Transport operate regular bus services between Gangtok and Siliguri. One can also hire private buses, jeeps and taxis from Siliguri and Bagdogra.&lt;/p&gt;', 'Gangtok Hotel Deals | Book Hotels Online in Gangtok | Nearby Hotels in Gangtok', 'Situated in the heart of the breathtaking valley of Gangtok, Cygnett Inn La Maison, introduces leisure and business travellers to a mix of Cygnetture&rsquo;s acclaimed hospitality. Enjoy consistent high standards, contemporary amenities and timelessly ele', '', 1, 0, '0', 'hotels-in-gangtok', 1, '2021-05-05 13:45:08', 1, '2021-08-11 18:15:12'),
(16, 99, 'Guwahati', '', '', '1620202575_guwahati.jpg', '1625568689_guwahati-listing.jpg', '&lt;div&gt;Guwahati, being the gateway to North-East India, is always buzzing and brimming with energy and activity. Set amid the Southern bank of River Brahmaputra and foothills of Shillong Plateau, the place offers plenty of natural scenic sights, along with a metropolitan feel being having Dispur in its territory as the capital of Assam. Guwahati is the largest metropolis of North-East India.&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;It is one of the top destinations on your vacation bucket list when planning to visit North-East India. For wildlife lovers, it is no less than heaven. Numerous wildlife sanctuaries and National Park pull the wildlife enthusiasts from far. For people seeking spirituality, find solace in ancient temples, monasteries, and the locally &amp;amp; globally regarded Kamakhaya Temple. For Gourmets, being in Guwahati means an endless and unlimited feast. From mouthwatering momos to tempting &amp;amp; exotic cuisines, one gets overwhelmed with the scrumptious food spreads available readily that suits every pocket.&lt;/div&gt;&lt;div&gt;&lt;br&gt;This must-visit destination has something for everyone. Visit yourself to experience.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;&lt;/div&gt;&lt;div&gt;The best time to visit Guwahati is in the month of October to March. The weather is very pleasant with minimum temperature barely reaching five Degrees Celsius. Bhogali Bihu is celebrated during January. Participating in the Bihu celebrations is an experience that should not be missed. Summer starts from April to May with the temperature soaring around 29 Degrees Celsius.&amp;nbsp; Guwahati receives heavy rainfall during the monsoon months of June to October.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;h4&gt;&lt;b&gt;How to reach&lt;/b&gt;&lt;/h4&gt;&lt;div&gt;&lt;b&gt;By Air&lt;/b&gt;&lt;/div&gt;&lt;div&gt;Lokpriya Gopinath Bordoloi International Airport, also known as Guwahati International Airport is about 20 kilometers from the city centre.&amp;nbsp; The airport is well connected with all the major Indian cities. International flights to Bangkok and Paro also operate from here. The traveler can book a taxi/cab or board a bus to reach Guwahati from the airport.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;/div&gt;&lt;div&gt;The major railway station of Guwahati is Guwahati Junction. The second largest station of the city is Kamakhya Junction. All the major Indian cities are connected to Guwahati through rails. Cab/taxi and local buses are easily available from the railway station to the city Centre.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;/div&gt;&lt;div&gt;Guwahati is very well connected through bus service with the adjoining cities and states. The three main points of Adabari, Paltan Bazar and ISBT Guwahati, provide regular bus services to cities in Assam and adjoining states.&lt;/div&gt;', 'Guwahati Hotel Deals | Book Hotels Online in Guwahati | Nearby Hotels in Guwahati', 'Guwahati is home to various holy shrine dedicated to Lord Shiva and Lord Vishnu. Cygnett Inn Repose provides every traveller in Guwahati an opportunity to interact with the noteworthy heritage of this hilly region along with the awe inspiring beauty of th', '', 1, 0, '0', 'hotels-in-guwahati', 1, '2021-05-05 13:46:15', 1, '2021-08-12 11:33:37'),
(17, 99, 'Itanagar', '', '', '1620202604_itanagar.jpg', '1625568711_itanagar-listing.jpg', '&lt;p&gt;Famous for its Buddhist culture and heritage architecture, Itanagar is a vibrant capital of Arunachal Pradesh. Being the first place in India to witness the sunrise, Itanagar is also known as The Land of Dawnlit Mountains.&amp;nbsp; Blossoming at the foothills of the Himalayas, Itanagar got its name from Ita Fort, a magnificent historical monument of the city. Enveloped by dense green forests, snow-clad peaks, plateaus, and deep river valleys, the city invites visitors from far for its mesmerizing and unexplored beauty. Well-connected to other North-Eastern towns by road, Itanagar has one exclusive mode of transport from Guwahati to reach here is the Pawan Hans Helicopter Service. Its culture has an influence of the Tibetan way of living and is quite apparent in the food, costumes, and rituals. The city is home to a large population of Nyishi tribe, the largest ethnic group in the state who follow Buddhism&amp;nbsp; One must visit to experience the pious beauty of the capital.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;October to April are the best months to visit Itanagar as the weather is very pleasant. Summers, especially June could be a little hot, still manageable. Monsoons are also pleasant. Among the major festivals celebrated here are Torgya in January, Losar in February/March and Choekhor in October.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By flight&lt;/b&gt;&lt;br&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;The nearest airport to Itanagar is located at Lilabari in Assam (67 km) and is well connected to all major cities like Guwahati, New Delhi, Kolkatta, etc. Pawan Hans also provides helicopter service between Guwahati and Itanagar thrice a week.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;By road&lt;/b&gt;&lt;br&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;Bus service from Guwahati to Itanagar is excellent. All kinds of buses are available. Arunachal State Transport connects Itanagar with other North East cities in India. Itanagar is also connected by NH 52A which connects it to the rest of India.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;By train&lt;/b&gt;&lt;br&gt;There is no direct rail connectivity to Itanagar as of now. The nearest railway station is in Naharlagun which is 15 km from Itanagar and Harmuti, approximately 34 km away from Itanagar. You can take a taxi once you touch down at Harmuti railway station.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Local transport in Itanagar&lt;/b&gt;&lt;br&gt;Your hotel can arrange for a cab for you most of the times and that is by far the most convinient way to commute within the city.&lt;/p&gt;', 'Itanagar Hotel Deals | Book Hotels Online in Itanagar | Nearby Hotels in Itanagar', 'In the heart of Arunachal Pradesh, Cygnett Inn Trendz introduces you to&nbsp;acclaimed Cygnett hospitality. The modern rooms reflect our obsession with quality and value at each step of the guest experience, as a natural choice for guests who are consciou', '', 1, 0, '0', 'hotels-in-itanagar', 1, '2021-05-05 13:46:44', 1, '2021-08-12 12:06:33'),
(18, 99, 'Jodhpur', '', '', '1620202632_jodhpur.jpg', '1625568753_jodhpur-listing.jpg', '&lt;p&gt;Located towards the western side of the capital city of Jaipur, this city is the second biggest city in the state of Rajasthan . Being a place of princely palaces, magnificent forts as well as age old temples, this city of Rajasthan is among the famous tourist destinations in the state as well as India. Positioned in the Thar Desert\'s stark landscape, Jodhpur experiences a bright and sunny weather all through the year. For this, the city is also known as &quot;Sun City&quot;. One of the specialties of this metropolitan city is that almost all the houses based around the fort of Mehrangarh are painted in blue color, due to which the city is even known as the &quot;Blue City&quot;.&lt;/p&gt;&lt;p&gt;Jodhpur city is one of the major cities of Rajasthan. It encompasses an area of 22,850 sq.km and houses a population of 21,53,483. It is well connected to the rest of Rajasthan by airways, road and rail links. This city basks in the golden history and heritage of the state and is located at the fringe of the great Thar desert. The city was founded in 1459 A.D by the Rathore rulers. Some local festivals of Jodhpur city, which may interest visitors, are Nag Panchami, Marwar festivals, Nav Sati, Gangaur, Veerpuri fair, Holi, Diwali. These festivals are celebrated amidst great cheer and religious fervency. The entire city dons a colorful and gay look. The age old traditions and culture of Jodhpur City interest most tourists who undertake a visit to this city.&lt;/p&gt;&lt;p&gt;Polo has been the royal sport of Jodhpur since medieval times. Polo enthusiasts visit the city to participate in the various equestrian events that are held here. Jodhpur is also well known for its furniture industry, handicrafts, glass bangles, cutlery, carpets and marble goods. Jodhpur also boasts of a unique cuisine. The local eateries accord the tourists a delectable platter of local culinary delights. Jodhpur is a colourful city. It throbs with the romance, beauty, glory and warmth of a populous desert city which has stood testimony to civil wars, love affairs, intrigues and a display of power and wealth. The traditional folk dance and music performances, which are held at night, are great attractions to the visitors.&amp;nbsp;&lt;br&gt;&lt;/p&gt;', 'Jodhpur Hotel Deals | Book Hotels Online in Jodhpur | Nearby Hotels in Jodhpur', 'Jodhpur is one of the most enchanting cities of Rajasthan. The city is called the Blue City as it looks completely blue in colour from an aerial view because of its blue walls and blue houses. Enjoy your stay at Cygnett Style Mantra with your friends and ', '', 0, 0, '0', NULL, 1, '2021-05-05 13:47:12', 1, '2021-08-09 11:32:58'),
(19, 99, 'Lucknow', '', '', '1629893582_1629115390_lucknow-popular-destination.jpg', '1625568780_lucknow-listing.jpg', '&lt;p&gt;Lucknow, earlier the capital of Awadh is now the capital of the Indian state, Uttar Pradesh. The largest city, sets on the north western shore of the Gomti River, lies in the middle of Heritage Arc. Towards the centre of Lucknow is &ldquo;Rumi Darwaza&rdquo; &ndash; a Mughal gateway.&lt;/p&gt;&lt;p&gt;Fondly known as the City of Nawabs or the City of Tehzeeb (Culture), the capital owes its rise to prominence to the Nawabs of Avadh (Oudh) who patronized performing arts, music, literature as well as the culinary arts and put Lucknow a cut above the rest &ndash; and the world acknowledges it.&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Its world-famous Kebabs &amp;amp; Lucknowi Biryani invite the visitors, repeatedly, its intricate and exquisite embroideries termed \'Chikankari\' and \'Zardozi\' places the fashion of Lucknow on global trends, and marvelous monuments depict the fascinating blend of ancient, colonial, and oriental architecture.&amp;nbsp;&lt;/p&gt;&lt;p&gt;With its glorious and multicultural past, Lucknow always enjoys being a hub, after Delhi, of governance, administration, commerce, technology, education, and artistic culture of all genres.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Lucknow is a must-visit destination for any traveler enthusiast to experience the rich cultural heritage of the Golden City of East.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;The best time to visit Lucknow is October to March when the city experiences winter. Even though December and January could be a little foggy, which might mean trains and flights getting delayed occasionally, the weather is pleasant and suitable for sightseeing.&lt;p&gt;&lt;/p&gt;&lt;p&gt;Lucknow is influenced by subtropical climate with extreme temperatures which means the summers are unusually hot and should be avoided. Lucknow could be visited during July-September as well, but rains might be a little hindrance and could delay your day plans.&lt;br&gt;&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to Reach&amp;nbsp;&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By flight&lt;/b&gt;&lt;br&gt;Air travel is the most convenient way to reach the City of Nawabs. The Lucknow airport is well connected to the major cities of India like Delhi, Mumbai, Kolkata, Lucknow, Chandigarh, Bangalore, Patna etc through a number of airlines operating on a regular basis. Most international flights reach Lucknow via Delhi. Buses, taxis and cabs are easily available from the airport to reach the main city.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;The Uttar Pradesh State Road Transport Corporation runs regular luxury and deluxe buses between Lucknow and other cities within the state. There is a regular service of a number of luxury and budget buses from cities like New Delhi, Varanasi, Allahabad, Kanpur, Agra, Jhansi etc at reasonable fares.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;br&gt;The Indian Railways offers many mail and superfast trains to reach Lucknow from other parts of India. Though Charbagh is the main railway junction serving the city, tourists can reach Lucknow via Alamnagar, Gomti Nagar and Aishbagh Junction too. An additional attraction is the Maharajas Express which offers a royal ride to Lucknow.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Local transport in Lucknow&lt;/b&gt;&lt;br&gt;Moving around in Lucknow is never a problem, local modes of transport are available round the clock, autos and taxis being the most insistent type. All modes are affordable and very convenient. Recently the government has flagged off the metro which is expected to make commuting faster and easier.&lt;/p&gt;\r\n', 'Lucknow Hotel Deals | Book Hotels Online in Lucknow | Nearby Hotels in Lucknow', 'Lucknow, the capital of Uttar Pradesh, fondly known as the &lsquo;City of Nawabs&rsquo; or the &lsquo;City of Tehzeeb&rsquo;, has always been a city filled with varied cultures. Come explore its beautiful sprawling gardens, polite mannerisms, fine-cuisine', '', 1, 0, '2', 'hotels-in-lucknow', 1, '2021-05-05 13:48:01', 1, '2021-08-25 17:43:02'),
(20, 99, 'Mcleodganj', '', '', '1620202715_mcleodganj.jpg', '1625568803_mcleodganj-listing.jpg', '&lt;p&gt;&lt;b&gt;Land of His Holiness the Dalai Lama - Little Lhasa&lt;br&gt;&lt;/b&gt;McleodGanj is a tiny yet significant and beautiful hill station glorifying the district Kangra, Himachal Pradesh. It is situated in the lap of Dhauladhar Range, a branch of the southern outer Himalayas.&amp;nbsp; The village is named after Lord David McLeod, the English lieutenant governor of Punjab. The suburb of popular tourist destination Dharamshala, the hill town is widely known as a Little Lhasa of India. Being the home of the exiled government of Tibet and the highly worshiped 14th Dalai Lama, the place reflects a perfect blend of Tibetan and Indian cultures.&amp;nbsp; Along with the spiritual vibes of Buddhist monks and monasteries, the hill town soothes your soul with its mesmerizing landscapes, pleasant weather, scenic trekking paths, and delectable momos other than lip-smacking Tibetan food. The touristy destination is equally famous among global trekkers, wanderers, gourmets, or spirituality seekers and families. Comprising such prominence, this charming town has a well-connectivity with other towns of Himachal and accessibility through all means of transport.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;The best time to visit Mcleodganj is between October and February, i.e. the winter season and between March and June, i.e. the summer season. The region experiences pleasant summers with the temperatures hovering around 25&deg;C and cold and chilly winters with the temperature between -1&deg;C and 9&deg;C. Monsoons are not quite recommended as the region receives heavy downpour annually. It is best to avoid July and August due to the heavy rainfall.&lt;br&gt;&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to Reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By flight&lt;/b&gt;&lt;br&gt;The nearest airport to Mcleodganj is Gaggal, which is about 30 km away. Taxis are available here for hire to reach Mcleodganj. The nearest major airport is Chandigarh which is connected to all major airports of India. Delhi is the closest major International airport with a high frequency of flights and well-connected from everywhere.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;You can reach Dharamshala which is the main town 9 km before Mcleodganj by overnight bus from New Delhi. The Himachal Roadways and Himachal Tourism have regular bus service from Kashmiri Gate ISBT Delhi. From Dharamshala, there are regular local buses for Mcleodganj or you can also take a shared cab.&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;br&gt;Kangra Mandir is the nearest railway station to Mcleodganj, located about just 25 km from here. The nearest broad gauge railway station is in Pathankot which is 90 kms away. Taxis and buses are easily available from there.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Local transport in Mcleodganj&lt;/b&gt;&lt;br&gt;McLeodganj is best explored on foot. You can take rikshaws as well for relatively longer distances.&lt;/p&gt;', 'Dharamshala Hotel Deals | Book Hotels Online in Mcleodganj | Nearby Hotels in Mcleodganj', 'McLeod Ganj is a village in the suburbs of Dharamshala, in the lap of Dhauladhar Range. Explore the mighty Himalayan mountains and scenic views as you rest and rejuvenate at Cygnett Style Signature. Book now!', '', 1, 0, '0', 'hotels-in-mcleodganj', 1, '2021-05-05 13:48:35', 1, '2021-08-12 16:01:37');
INSERT INTO `cyg_location` (`id`, `country`, `location`, `latitude`, `longitude`, `image`, `list_image`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `is_popular`, `sequence`, `custom_url`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(21, 99, 'Siliguri', '', '', '1620202750_siliguri.jpg', '1625568823_siliguri-listing.jpg', '&lt;div&gt;Siliguri, the fastest growing city of North-East India lies in the bank of Mahananda River and foothills of the Himalayas is surrounded by tea-gardens.&lt;/div&gt;&lt;div&gt;It is one of the famous routes to approach the scenic hill stations of Darjeeling, Kalimpong, and Gangtok. The city is the connecting road link between the other neighboring friendly countries such as Nepal, Bangladesh, and Bhutan, plus serves as an entry point into the Sikkim region.&lt;/div&gt;&lt;div&gt;The town in itself abounds with heavenly views of captivating tea gardens, a magnificent glimpse of the Kanchenjunga range for a certain period of the year, and nature\'s unexplored treasure. Along with its four \'Ts, Tea, Timber, Transport, and Tourism that catalyze the town to flourish. Its vivid culture is bound to take its visitors by surprise.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;The best time to visit Siliguri is from October to February. Siliguri is one of the few destinations in India to be an ideal place to visit all year round. The temperature remains comfortable throughout the year and is ideal for nature-lovers and to indulge in mesmerizing sightseeing opportunities.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;h4&gt;&lt;b&gt;How to reach&lt;/b&gt;&lt;/h4&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;By Air&lt;/b&gt;&lt;/div&gt;&lt;div&gt;Bagdogra Airport, the nearest Domestic Airport from Siliguri is roughly 20 min. drive from Siliguri. The city is well connected with flights to cities such as New Delhi, Guwahati, Mumbai, Chennai and Kolkata. Flights for International destinations such as Paro and Bangkok are also available from Siliguri.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;By Train&lt;/b&gt;&lt;/div&gt;&lt;div&gt;New Jalpaiguri Railway Station is the nearest Railway Station which is located at a distance of 9 Kms from Siliguri. The city is also well connected to Mumbai, Delhi and Kolkata by rail.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;/div&gt;&lt;div&gt;Siliguri is well connected through West Bengal State Road Transport Corporation (WBSRTC) and some private travel services with Darjeeling, Kurseong, Kalimpong and Mirik.&lt;/div&gt;\r\n', 'Siliguri Hotel Deals | Book Hotels Online in Siliguri | Nearby Hotels in Siliguri', 'Siliguri is a beautiful city of the north-east Indian state of West Bengal and resides in the foothills of the Himalayas, surrounded by tea gardens. Siliguri is bestowed with scenic beauty and is one of the famous tourist attraction spots all year round. ', '', 1, 0, '5', 'hotels-in-siliguri', 1, '2021-05-05 13:49:10', 1, '2021-08-12 17:16:47'),
(22, 99, 'Vizag', '', '', '1620202775_vizag.jpg', '1625568840_vizag-listing.jpg', '&lt;p&gt;Vizag, also known as Visakhapatnam, is one of the largest metropolitans of Andhra Pradesh. Nestled in the Eastern Ghats overlooking the mighty Bay of Bengal lies this East Coast Pearl, home to one of the natural, oldest and busiest ports in India. Along with it, the city houses major shipbuilding, oil refining, and steel industries. Vizag is turned into a new look with lots of large industries, IT Hubs, Shopping complex and many more.&amp;nbsp;&lt;/p&gt;&lt;p&gt;A deep and far-stretched shoreline adorned by Eastern Ghat Hills with myriads of boats and ships anchored to the port offers a spectacular view. Visakhapatnam Sea port is one of the largest seaports in India and it is also the headquarters of Eastern Naval Command for Indian Navy. Vizag is also home to an international port.&lt;/p&gt;&lt;p&gt;Situated at 650 km east of Hyderabad and 350 km north of Vijayawada, Visakhapatnam has observed the reigns of various culturally rich dynasties that offer a diverse culture to experience to its visitors. An experience that is much more beyond the beaches, hillocks, valleys, and other wondrous escapes.&amp;nbsp;&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Time to visit&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;The best time to take a trip to Vizag is between October and March. The weather during this period is extremely pleasing and windy. There is no humidity in the air makes the travelling experience even better. Monsoon starts from July to September in Vizag. The city receives heavy rainfall during this period making it difficult to travel around.&amp;nbsp;&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to Reach&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Air&lt;/b&gt;&lt;br&gt;The airport is almost 14 km from the city center. Vishakhapatnam airport is well connected with major cities of India like Mumbai, Delhi, Chennai and Hyderabad. The tourists can reach the city from the airport by pre-paid taxi.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Rail&lt;/b&gt;&lt;br&gt;Vishakhapatnam with other major cities that lies on the Chennai to Delhi main route.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;/b&gt;&lt;br&gt;Vizag is well connected with public transport services to major cities of south and central India including Chennai, Hyderabad and Vijayawada. There is a good frequency of buses operating from and to Visakhapatnam.&amp;nbsp;&lt;/p&gt;', 'Vizag Hotel Deals | Book Hotels Online in Vizag | Nearby Hotels in Vizag', 'Visakhapatnam or Vizag is the largest metropolis in the state of Andhra Pradesh and seventh largest in India. The city is surrounded by the Mountain ranges of Eastern Ghats to the south, north and west. It is one of the iconic places to rest, relax and re', '', 1, 1, '0', 'hotels-in-vizag', 1, '2021-05-05 13:49:35', 1, '2021-08-12 17:42:33'),
(23, 149, 'Nepalgunj', '28.0548', '81.6145', '1627889733_nepal-location-topbanner.jpg', '1627889542_nepal-location-listimg.jpg', '&lt;p&gt;Set on the Terai Plains of the southern border of Nepal adjacent to the Indian District of Uttar Pradesh, Nepalganj is a sub-metropolitan city in Banke District. Nepalganj observed the most heat as compared to the rest of the country due to its geographical location. Being one of the developed cities in Nepal, the town is among the major business hubs of the nation. The city has an amazing cultural mix of communities living together, following respective faiths and traditions with deep-rooted brotherhood for each other. Nepalganj gets quite a footfall not for just being a commercial center, over and above, the gracious presence of Bageshwori Temple pulls a lot of Hindu devotees regionally and from across the borders as well. The town enjoys good connectivity and accessibility via all means of transport. Furthermore, Indians &amp;amp; Nepalese easily cross the borders with customs checkpoints without any hassles.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;Best time to visit&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;The best time to visit Nepal is from October to December. However, it also depends a lot on the kind of activity or the places within the country that one hopes to explore. The autumn months of October and November is touted as the best time for trekkers who are rewarded with clear skies and breath-taking views.&lt;/p&gt;&lt;p&gt;The next best time to visit Nepal is in the spring season from March-April. The rhododendrons are in bloom, and the temperatures are warm, yet not scorching hot. For those wishing a vacation in Kathmandu and low-lying areas, the winter months are ideal.&lt;/p&gt;&lt;h4&gt;&lt;b&gt;How to Reach&amp;nbsp;&lt;/b&gt;&lt;/h4&gt;&lt;p&gt;&lt;b&gt;By Air&lt;br&gt;&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;Tribhuvan International Airport in Kathmandu is the main entry point for those arriving by air. Nepal Airlines are the main flight operators. Flights are available from India.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Train&lt;br&gt;&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;Cargo and passenger trains operate between Sirsiya in southern Nepal, and the Indian town of Raxaul. However, only Indians are allowed to cross border by rail.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;By Road&lt;br&gt;&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;It is a common practice to go to Nepal by a hired car or cab from India. Crossing the border requires you to pay a toll tax and a transport permit fee. Make sure to collect the receipts for these, since they can be asked for at any checkpoint along the way.&lt;/span&gt;&lt;/p&gt;', '', '', '', 1, 0, '0', 'hotels-in-nepalgunj', 1, '2021-07-29 12:17:14', 1, '2021-08-11 15:12:08'),
(24, 99, 'Rajkot', '', '', '1628504886_rajkot-home.jpg', '1628504886_rajkot-listing.jpg', '', '', '', '', 1, 0, '0', NULL, 1, '2021-08-09 15:58:06', 0, NULL),
(25, 99, 'Solan', '', '', '1628507330_solan-home.jpg', '1628507330_solan-listing.jpg', '', '', '', '', 1, 0, '0', NULL, 1, '2021-08-09 16:38:50', 0, NULL),
(26, 99, 'Dalhousie', '', '', '1628509419_dalhousie-home.jpg', '1628509419_dalhousie-listing.jpg', '', '', '', '', 1, 0, '0', NULL, 1, '2021-08-09 17:13:39', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_location_images`
--

CREATE TABLE `cyg_location_images` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `banner_image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_location_images`
--

INSERT INTO `cyg_location_images` (`id`, `location_id`, `banner_image`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 1, '1620807113_location1.jpg', 1, 1, '2021-02-15 13:43:44', 1, '2021-05-12 13:41:53'),
(2, 6, '1628243954_nainital-banner1.jpg', 1, 1, '2021-05-11 23:21:58', 1, '2021-08-06 15:29:14'),
(5, 13, '1628248671_alwar-banner1.jpg', 1, 1, '2021-05-12 12:44:21', 1, '2021-08-06 16:47:51'),
(7, 12, '1620808308_bhiwadi-banner.jpg', 1, 1, '2021-05-12 14:01:48', 0, NULL),
(8, 10, '1628238356_bongaigaon-banner1.jpg', 1, 1, '2021-05-12 14:14:15', 1, '2021-08-06 13:55:56'),
(9, 11, '1620809850_dehradun-banner.jpg', 1, 1, '2021-05-12 14:27:30', 0, NULL),
(10, 11, '1620810211_dehradun-banner.jpg', 0, 1, '2021-05-12 14:33:31', 1, '2021-05-12 14:35:31'),
(11, 11, '1620810269_dehradun-banner.jpg', 0, 1, '2021-05-12 14:34:29', 1, '2021-05-12 14:35:35'),
(12, 9, '1628238608_digha-banner1.jpg', 1, 1, '2021-05-12 15:28:47', 1, '2021-08-06 14:00:08'),
(13, 9, '1620813763_digha-banner.jpg', 0, 1, '2021-05-12 15:32:43', 1, '2021-05-12 15:33:38'),
(14, 14, '1620814722_dwarka-banner.jpg', 1, 1, '2021-05-12 15:48:42', 0, NULL),
(15, 15, '1628238817_gangtok-banner1.jpg', 1, 1, '2021-05-12 16:47:03', 1, '2021-08-06 14:03:37'),
(16, 7, '1628241194_goa-banner1.jpg', 1, 1, '2021-05-12 17:27:03', 1, '2021-08-06 14:43:14'),
(17, 16, '1628241485_guwahati-banner1.jpg', 1, 1, '2021-05-12 23:31:20', 1, '2021-08-06 14:48:05'),
(18, 17, '1620843432_itanagar-banner.jpg', 1, 1, '2021-05-12 23:47:12', 0, NULL),
(19, 2, '1620844333_jaipur-banner.jpg', 1, 1, '2021-05-13 00:02:13', 0, NULL),
(20, 18, '1620901567_jodhpur-banner.jpg', 1, 1, '2021-05-13 15:56:07', 0, NULL),
(21, 8, '1628242042_kolkata-banner1.jpg', 1, 1, '2021-05-13 16:13:53', 1, '2021-08-06 14:57:22'),
(22, 19, '1628242998_lucknow-banner1.jpg', 1, 1, '2021-05-13 16:28:14', 1, '2021-08-06 15:13:18'),
(23, 20, '1628243608_mcleodganj-banner1.jpg', 1, 1, '2021-05-13 16:46:11', 1, '2021-08-06 15:23:28'),
(24, 21, '1628244544_siliguri-banner1.jpg', 1, 1, '2021-05-13 23:12:56', 1, '2021-08-06 15:39:04'),
(25, 22, '1628244757_vizag-banner1.jpg', 1, 1, '2021-05-13 23:26:00', 1, '2021-08-06 15:42:37'),
(26, 23, '1628244420_nepalganj-banner1.jpg', 1, 1, '2021-08-02 13:05:33', 1, '2021-08-06 15:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_media_news`
--

CREATE TABLE `cyg_media_news` (
  `id` int(11) NOT NULL,
  `news_title` text COLLATE utf8_unicode_ci NOT NULL,
  `date_of_publishing` date NOT NULL,
  `source` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `intro_text` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_media_news`
--

INSERT INTO `cyg_media_news` (`id`, `news_title`, `date_of_publishing`, `source`, `image`, `url`, `intro_text`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(2, 'Indian hospitality leaders share their learning from the Coronavirus pandemic', '2020-07-22', 'times of india publication', '1619808183_n_media30.jpg', 'https://www.hotelierindia.com/business/10613-indian-hospitality-leaders-share-their-learning-from-the-coronavirus-pandemic', 'Sarbendra Sarkar, Founder and Managing Director, Cygnett Hotels and Resorts: &quot;Hygiene, sani-tization and sustainability will be a key priority across all hotels. This pandemic has also reminded us to be on guard for the worst always.&quot;', 1, '2021-04-12 11:09:05', 1, '2021-05-01 00:13:03', 1),
(3, 'Lockdown has had disastrous impact on hospitality sector; govt support needed: Industry', '2021-04-12', 'Outlook News', '1620385903_news1-img.jpg', 'https://www.outlookindia.com/newsscroll/lockdown-has-had-disastrous-impact-on-hospitality-sector-govt-support-needed-industry/1799727', 'The lockdown to contain spread of COVID-19 in the country has had disastrous impact on the hospitality sector, especially for hotels, hoteliers said. &quot;The impact is disastrous.', 1, '2021-05-01 00:15:57', 1, '2021-05-07 16:41:43', 1),
(4, 'Coping with COVID-19: Cygnett Hotels &amp; Resorts', '2021-04-14', 'BW Hotelier', '1629892380_1620386259_news2-img.jpg', 'http://bwhotelier.businessworld.in/article/Coping-with-COVID-19-Cygnett-Hotels-Resorts/14-04-2020-189167/', '&quot;WE ARE living through a global pandemic with far-reaching consequences&mdash;it has endangered lives as well driven the economy into a recession...  says Sarbendra Sarkar, Founder and Managing Director, Cygnett Hotels.', 1, '2021-05-01 00:18:30', 1, '2021-08-25 17:23:00', 1),
(5, 'Industry expects domestic tourism to be saviour in post pandemic world', '2021-04-17', 'Travel Trade Insider', '1629892353_1620386650_news3-img.jpg', 'http://traveltradeinsider.com/2020/04/17/industry-expects-domestic-tourism-to-be-saviour-in-post-pandemic-world/', 'As per a section of the industry, the lockdown is bound to take a toll on the people and once the pandemic is over, they would want to experience life through travel.', 1, '2021-05-01 00:22:31', 1, '2021-08-25 17:22:33', 1),
(6, 'The impact of COVID-19 on the Hospitality Sector', '2021-04-22', 'IANS', '1629892263_1621404220_news4-img.jpg', 'https://timesofindia.indiatimes.com/business/india-business/the-impact-of-covid-19-on-the-hospitality-sector/articleshow/75290137.cms', 'Governments across the world have sealed international borders; there is a suspension of all international and domestic flights; compounded by a nationwide lockdown, together this is bound to bring an unprecedented phase in the history of the hospitality industry.', 1, '2021-05-07 17:03:51', 1, '2021-08-25 17:21:03', 1),
(7, 'Old World Hospitality Through Smart Hotels is the Way Cygnett wants to Draw its Road Map: Sarbendra Sarkar, Founder and Managing Director, Cygnett Hotels and Resorts', '2019-12-20', ' BW Online Bureau', '1620387464_news5-img.jpg', 'http://bwhotelier.businessworld.in/article/Old-World-Hospitality-Through-Smart-Hotels-is-the-Way-Cygnett-wants-to-Draw-its-Road-Map-Sarbendra-Sarkar-Founder-and-Managing-Director-Cygnett-Hotels-and-Resorts/20-12-2019-180905/', 'Cygnett Hotels &amp; Resorts looks to spread its wings fast. From Jammu to Bongaigaon, Lucknow to Visakhapatnam, Cygnett&rsquo;s presence is spread across India. It has even made its presence felt in areas that are underserved by erstwhile leading brands. Sarbendra Sarkar, Founder and Managing Director, Cygnett Hotels and Resorts talks to BW Hotelier about the growth strategy of the hotel group.', 1, '2021-05-07 17:07:44', 1, NULL, NULL),
(8, 'Reactions of Hospitality and Travel Industry Leaders on Budget 2020', '2020-02-03', ' BW Online Bureau', '1620387630_news6-img.jpg', 'http://bwhotelier.businessworld.in/article/Reactions-of-Hospitality-and-Travel-Industry-Leaders-on-Budget-2020-/03-02-2020-183352/', 'The proposed budget included the allocation of Rs. 2500 crore for tourism promotion, the establishment of an Indian Institute of Heritage and Conservation under Ministry of Culture.', 1, '2021-05-07 17:10:30', 1, NULL, NULL),
(9, 'Union Budget 2020-21: A mix bag for Indian tourism industry', '2020-02-01', 'Hospitality India Buzz', '1620387866_news7-img.jpg', 'https://tourismindia.org/union-budget-2020-21-major-boost-for-tourism-allied-sectors/', 'The Union Budget for 2020-2021 presented by Finance Minister, Nirmala Sitharaman was a mix bag for Indian tourism. While Indian tourism industry would be an indirect beneficiary of the overall focus on infrastructure spending by the government, the Budget failed to address many long-pending demands as well as lacked any new direction for the industry at a time India&rsquo;s foreign tourist arrival', 1, '2021-05-07 17:14:26', 1, '2021-05-07 17:15:50', 1),
(10, 'Major boost for Tourism &amp; Allied sectors in Budget 2020-21', '2020-02-01', 'Tourism India', '1620388204_news8-img.jpg', 'https://tourismindia.org/union-budget-2020-21-major-boost-for-tourism-allied-sectors/', 'In an effort to make India an attractive destination for both international and domestic tourists, Ms. Nirmala Sitaraman, Finance Minister, Government of India proposed to allocate Rs 2,500 crores in 2020-21 for the tourism sector.', 1, '2021-05-07 17:20:04', 1, NULL, NULL),
(11, 'Industry stalwarts expect notable inclusion of hospitality industry in Budget FY2020-21', '2020-02-01', 'Express Food &amp; Hospitality', '1620389126_news9-img.jpg', 'https://www.foodhospitality.in/latest-updates/industry-stalwarts-expect-notable-inclusion-of-hospitality-industry-in-budget-fy2020-21/419223/', 'While the country is faced with a six-year low growth of GDP and economic slowdown, ahead of the revelation of the &lsquo;feel-good&rsquo; Union Budget for the FY2020-21 by FM Nirmala Sitharaman, Express Food &amp; Hospitality compiled the views of what industry stalwarts are expecting from the budget.', 1, '2021-05-07 17:35:26', 1, NULL, NULL),
(12, 'India Inc. reacts to Budget 2020', '2020-02-01', 'News Vibes Of India', '1620389380_news10-img.jpg', 'https://newsvibesofindia.com/india-inc-reacts-to-budget-2020/', 'New Delhi (NVI): Industry leaders and experts gave mixed reactions to the Union Budget 2020 that was presented by Union Minister Nirmala Sitharaman in Parliament today.', 1, '2021-05-07 17:39:40', 1, NULL, NULL),
(13, 'Govt\'s focus on providing impetus to travel, tourism sector positive move: Industry', '2020-02-01', 'Business Standard', '1620969910_news11-img.jpg', 'https://www.business-standard.com/article/pti-stories/govt-s-focus-on-providing-impetus-to-travel-tourism-sector-positive-move-industry-120020101435_1.html', 'The Finance Minister\'s focus to provide impetus to the travel and tourism sector along with development of transportation infrastructure will accelerate the sector\'s contribution towards country\'s economy, according to industry players.', 1, '2021-05-14 10:55:10', 1, NULL, NULL),
(14, 'Cygnett Hotels &amp; Resorts open its latest property in Jodhpur', '2019-09-13', 'Outlook', '1620970089_news12-img.jpg', 'https://www.outlookindia.com/newsscroll/cygnett-hotels--resorts-open-its-latest-property-in-jodhpur/1617861', 'Cygnett Hotels has launched Cygnett Style Mantra in Jodhpur, the second largest city in Rajasthan also known as the &ldquo;Gateway to Thar&quot; and is famous for mighty Mehrangarh Fort, its blue houses, temples, sweets and snacks.', 1, '2021-05-14 10:58:09', 1, NULL, NULL),
(15, 'Cygnett Hotels and Resorts recognised as the &quot;Fastest Growing Hotel Chain&quot;', '2019-08-03', 'TnH Global', '1620970280_news13-img.jpg', 'http://www.tnhglobal.com/cygnett-hotels-and-resorts-recognised-as-the-fastest-growing-hotel-chain/', 'Cygnett Hotels and Resorts has received the &lsquo;Fastest Growing Hotel Chain&rsquo; award recently at an event organized by Today&rsquo;s Traveller. The winners of the awards were felicitated by the Minister of State for Tourism &amp; Culture, Prahlad Singh Patel, at a glittering ceremony on July 29, 2019.', 1, '2021-05-14 11:01:20', 1, NULL, NULL),
(16, 'Explore the breathtaking Gangtok, with a mesmerizing stay at Cygnett Inn - La Maison', '2019-05-27', 'Dailyhunt', '1620970514_news14-img.jpg', 'https://web.dailyhunt.in/news/india/oriya/thehansindia-epaper-hans/explore+the+breathtaking+gangtok+with+a+mesmerizing+stay+at+cygnett+inn+la+maison-newsid-117304642', 'Cygnett Inn La Maison situated in the heart of the breathtaking valley of Gangtok, strategically located at N.H. 10, Tadong and well connected to all modes of transportation, welcomes both leisure and business travelers, offering a charming and remarkable mix of Cygnetture\'s experience.', 1, '2021-05-14 11:05:14', 1, NULL, NULL),
(17, 'Cygnett Hotels &amp; Resorts launches Cygnett Inn Trendz in the heart of Itanagar', '2019-03-08', 'APN News', '1620970648_news15-img.jpg', 'https://www.apnnews.com/cygnett-hotels-resorts-launches-cygnett-inn-trendz-in-the-heart-of-itanagar/', 'Cygnett Inn Trendz, situated in the heart of capital city of Arunachal Pradesh, at a close proximity of the Itanagar railway station, is ideal for both business and leisure travelers. With exceptional facilities for all age groups, the Inn promises a special stay for its guests. The premium location allows guests to visit the commercial hubs and entertainment zones of Itanagar without travelling f', 1, '2021-05-14 11:07:28', 1, NULL, NULL),
(18, 'Cygnett Hotels and Resorts Appoints Bernard Houppertz as Vice President Development &amp; Operations South Asia &amp; Africa', '2018-12-21', 'APN News', '1620970787_news16-img.jpg', 'https://www.apnnews.com/cygnett-hotels-and-resorts-appoints-bernard-houppertz-as-vice-president-development-operations-south-asia-africa/', 'Cygnett Hotels and Resorts, the fastest growing Hotel brand in India has appointed Bernard Houppertz as the Vice President Development &amp; Operations South Asia &amp; Africa. Bernard will be leveraging his expertise to help Cygnett in formulating new developments to extend Cygnett groups reach in South Asian and African markets.', 1, '2021-05-14 11:09:47', 1, NULL, NULL),
(19, 'Ankur Chandra appointed as Director-Operations and Development at Cygnett Hotels and Resorts', '2019-04-22', 'BW Hotelier', '1620976432_news17-img.jpg', 'http://bwhotelier.businessworld.in/article/Ankur-Chandra-Appointed-as-Director-Operations-Development-at-Cygnett-Hotels-Resorts/22-04-2019-169566/', 'Cygnett Hotels and Resorts, has announced the appointment of Ankur Chandra as Director -Operations and Development. Chandra brings with him over 20 years of wide experience and will be responsible for leveraging hotel operations and expanding the brand in new territories and markets.', 1, '2021-05-14 12:43:52', 1, NULL, NULL),
(20, 'Stronger Ecosystem Needed For Travel And Hospitality Industry', '2018-01-11', 'NDTV Profit', '1620976621_news18-img.jpg', 'https://www.ndtv.com/business/stronger-ecosystem-needed-for-travel-and-hospitality-industry-1799000', 'We have very high expectations from this year Union Budget for tourism and hospitality industry. We can assume that Union Budget 2018-19 can be a big push towards increasing the digitization with high-tech solutions.', 1, '2021-05-14 12:47:01', 1, NULL, NULL),
(21, 'We wish for a simplified regulatory environment to attract additional investment: Sarbendra Sarkar, Cygnett Hotels &amp; Resort', '2018-01-31', 'NewsBarons', '1620976808_news19-img.jpg', 'https://www.newsbarons.com/budget-2018/we-wish-for-a-simplified-regulatory-environment-to-attract-additional-investment-sarbendra-sarkar-cygnett-hotels-resort/', 'With the upcoming Union Budget for 2018-19, we can assume that this budget can be a big push towards increasing the digitization with high-tech solutions. Also, we are looking forward to reforms supporting the industry.', 1, '2021-05-14 12:50:08', 1, NULL, NULL),
(22, 'Cygnett Hotels &amp; Resorts Launches CygnettLite Ramachandra', '2018-04-09', 'BW Hotelier', '1620977043_news20-img.jpg', 'http://bwhotelier.businessworld.in/article/Cygnett-Hotels-Resorts-Launches-CygnettLite-Ramachandra/09-04-2018-145844/', 'With the latest addition, the chain will now have a total of 15 operating hotels under its wings. Moreover, nine new properties are scheduled to open by December 2018, including Vishakhapatnam, and another seven to eight hotels will be lined up for an opening by this financial year.', 1, '2021-05-14 12:54:03', 1, NULL, NULL),
(23, 'UNION BUDGET 2018-19: Industry Reactions', '2018-02-01', 'Hospitality Biz India', '1620977201_news21-img.jpg', 'http://www.hospitalitybizindia.com/detailNews.aspx?aid=28382&sid=1', 'The Union Budget 2018 is laid for the grass root people of India. This budget has taken several measures to boost the Infrastructure Proposal to develop 10 prominent tourist destinations as an Iconic tourism destination, is certainly a welcoming move and positive for the hospitality sector.', 1, '2021-05-14 12:56:41', 1, NULL, NULL),
(24, 'Cygnett Park Asia Announces Opening of &lsquo;Cygnett Pavillion&rsquo; restaurant &amp;&lsquo;Reputations&rsquo; caf&eacute; lounge in Jammu', '2018-09-29', 'Online And You', '1620977377_news22-img.jpg', 'http://onlineandyou.com/breaking-news/cygnett-park-asia-announces-opening-of-cygnett-pavillion-restaurant-reputations-cafe-lounge-in-jammu.html', 'Cygnett Park Asia an upscale Hotel brand of Cygnett Hotels and Resorts relaunches its finest &ldquo;Cygnett Pavilion&rdquo;restaurant and &lsquo;Reputations&rsquo; Cafe Lounge with new design and feel at Jammu Tawi 4th Tawi Bridge RD, Jabah, Jammu.', 1, '2021-05-14 12:59:37', 1, NULL, NULL),
(25, 'Technology Driven Mid-Market Hotels &amp; Resorts, Cygnett wins India&rsquo;s most promising brand 2018 Award', '2018-08-28', 'Online And You', '1620977531_news23-img.jpg', 'http://onlineandyou.com/smart-news/technology-driven-mid-market-hotels-resorts-cygnett-wins-indias-most-promising-brand-2018-award.html', 'During a recently held event, Cygnett Hotels and Resorts bestowed upon with India&rsquo;s Most Promising Brand 2018 award at 12th Annual Today&rsquo;s Traveller Awards.', 1, '2021-05-14 13:02:11', 1, NULL, NULL),
(26, 'Cygnett Hotels &amp; Resorts wins India&rsquo;s most promising brand 2018 Award', '2018-08-25', 'AdGully', '1620977680_news24-img.jpg', 'https://www.adgully.com/cygnett-hotels-resorts-wins-india-s-most-promising-brand-2018-award-79969.html', 'During a recently held event, Cygnett Hotels and Resorts bestowed upon with India&rsquo;s Most Promising Brand 2018 award at 12th Annual Today&rsquo;s Traveller Awards.', 1, '2021-05-14 13:04:40', 1, NULL, NULL),
(27, 'Art of Staying Digitally Connected With the Customers', '2018-05-28', 'BW Hotelier', '1620977816_news14-img.jpg', 'http://bwhotelier.businessworld.in/article/Art-of-Staying-Digitally-Connected-With-the-Customers/28-05-2018-150387/', 'Technology is all very well in its place but its deployment is what draws the critical line between meaningful interplay supported by valuable data generation and thoughtless practices that may do more harm than good.', 1, '2021-05-14 13:06:56', 1, NULL, NULL),
(28, 'Cygnett Hotels and Resorts to Clock INR 100 Cr Revenue by End of FY18', '2018-09-11', 'BW Hotelier', '1620977931_news25-img.jpg', 'http://bwhotelier.businessworld.in/article/Cygnett-Hotels-and-Resorts-to-Clock-INR-100-Cr-by-End-of-FY18/11-09-2018-159778/', 'In India, Cygnett Hotels and Resorts targets to add 1000 keys every year, currently enjoying the portfolio of 1350 keys in total. The company is looking forward to adding 6000+ keys by 2022 and to benchmark &ldquo;Cygnetture Service &amp; Experiences&rdquo; in the industry.', 1, '2021-05-14 13:08:51', 1, NULL, NULL),
(29, 'Cygnett adds two hotels in region', '2018-01-29', 'The Telegraph', '1620978175_news26-img.jpg', 'https://www.telegraphindia.com/north-east/cygnett-adds-two-hotels-in-region/cid/1440441', 'Cygnett Hotels and Resorts - the fastest growing hotel chain in the country - will open two hotels at Itanagar in Arunachal Pradesh and Dibrugarh in Upper Assam in April and September.', 1, '2021-05-14 13:12:55', 1, NULL, NULL),
(30, 'Cygnett Hotels and Resorts signs 11 hotels in India in the last six months', '2017-12-08', 'The Hans India', '1620978396_news27-img.jpg', 'https://www.thehansindia.com/posts/index/Life-Style/2017-12-08/Cygnett-Hotels-and-Resorts-signs-11-hotels-in-India-in-the-last-six-months/343976', 'Cygnett Hotels and Resorts, the fastest growing hotel brand in India has added 11 hotels in last six months and is going forward to add more hotels under its Cygnett brand.', 1, '2021-05-14 13:16:36', 1, NULL, NULL),
(31, 'Cygnett Hotels returns to Vishakhapatnam with Cygnett Inn Duvvada, Vizag', '2018-06-21', 'The Hans India', '1620978554_news28-img.jpg', 'https://www.thehansindia.com/posts/index/Business/2018-06-20/Cygnett-Hotels-returns-to-Vishakhapatnam-with-Cygnett-Inn-Duvvada-Vizag/390888', 'Cygnett Hotels &amp; Resorts announced the opening of Cygnett Inn Duvvada. The full-service budget hotel features 40 guest rooms and suites with modern interiors, stylish furnishings and spacious event and 3 banquet space.', 1, '2021-05-14 13:19:14', 1, NULL, NULL),
(32, 'Cygnett Hotels &amp; Resorts orchestrate MOMENTUM 2018 at Nepal', '2018-03-16', 'The Hans India', '1620978866_news29-img.jpg', 'https://www.thehansindia.com/posts/index/Business/2018-03-16/Cygnett-Hotels-Resorts-orchestrate-MOMENTUM-2018-at-Nepal/366828', 'Cygnett Hotels &amp; Resorts, a leading chain of hotels and resorts in India organized a  &lsquo;MOMENTUM 2018&rsquo; homed in on to discuss the expectation of the hospitality industry.', 1, '2021-05-14 13:24:26', 1, NULL, NULL),
(33, 'Cygnett Hotels &amp; Resorts reopens 13 properties in the North and Eastern part of India', '2020-09-10', 'Hotelier India', '1630922191_cygnett-reopens.jpg', 'https://www.hotelierindia.com/business/12057-cygnett-hotels-resorts-reopens-13-properties-in-the-north-and-eastern-part-of-india', 'Cygnett Hotels &amp; Resorts has reopened 13 of its properties in the North and Eastern part of India.', 1, '2021-09-06 15:26:31', 1, '2021-09-06 15:42:52', 1),
(34, 'Cygnett Hotels &amp; Resorts Group appoints Roberto Pelliccia as VP Development &amp; Operations - Asia and Africa', '2021-08-10', 'Hotelier India', '1630922427_roberto.jpg', 'https://www.hotelierindia.com/operations/16356-cygnett-hotels-resorts-group-appoints-roberto-pelliccia-as-vp-development-operations-asia-and-africa', 'Sarbendra Sarkar, Founder and Managing Director of Cygnett Hotels &amp; Resorts Group has announced the appointment of Roberto Pelliccia as Vice President of Development &amp; Operations - Asia and Africa and welcomes him to his team.', 1, '2021-09-06 15:30:27', 1, NULL, NULL),
(35, 'Amir Ahmad Mohamad, Appointed Director &ndash; Development &ndash; Vietnam At Cygnett Hotels &amp; Resorts Pvt Ltd in Gurgaon, India', '2021-09-06', 'HospitalityNet', '1630923378_amir-ahmad-mohamad.jpg', 'https://www.hospitalitynet.org/appointment/79022384.html', 'Mr. Sarbendra Sarkar, Founder and Managing Director of Cygnett Hotels &amp; Resorts Group is delighted to announce the appointment of another veteran and well-known professional Mr. Amir Ahmad Mohamad as Director - Development - Vietnam and welcomes him to his executive team.', 1, '2021-09-06 15:46:18', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_meetingevents`
--

CREATE TABLE `cyg_meetingevents` (
  `id` int(11) NOT NULL,
  `meeting_unit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_meetingevents`
--

INSERT INTO `cyg_meetingevents` (`id`, `meeting_unit`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'SUMMIT', 1, '2021-02-24 17:32:23', 1, NULL, NULL),
(2, 'Discussion', 1, '2021-02-24 17:44:31', 1, '2021-03-17 13:19:50', 1),
(4, 'Columbia', 1, '2021-03-17 13:20:02', 1, NULL, NULL),
(5, 'Board Room', 1, '2021-07-14 15:44:46', 1, NULL, NULL),
(6, 'Banquet Lawn', 1, '2021-07-14 15:45:47', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_navigation`
--

CREATE TABLE `cyg_navigation` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `dropdown_text` mediumtext COLLATE utf8_unicode_ci,
  `page_text` text COLLATE utf8_unicode_ci,
  `roll_options` tinyint(1) DEFAULT NULL,
  `top_navigation` tinyint(1) NOT NULL,
  `priority` int(2) DEFAULT '0',
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_navigation`
--

INSERT INTO `cyg_navigation` (`id`, `menu_name`, `parent_id`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `dropdown_text`, `page_text`, `roll_options`, `top_navigation`, `priority`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Our Story', 0, '', '', '', '', '', '', 0, 1, 1, 1, '2021-05-19 13:44:45', 1, '2021-05-19 17:44:28', 1),
(2, 'Overview', 1, 'overview.php', 'Our Story | Cygnett Hotels & Resorts - Corporate Information', 'Cygnett Group grew out of the Vision of Sarbendra Sarkar who define Cygnett Group as an Aggrandized hospitality Company. Every great venture begins with a dream and it takes all of the dreamer\'s strength, patience, and passion to reach for the stars to make his dream a reality.', '', '', '<div class=\"row mb-3\">\r\n  <div class=\"col-md-12\">\r\n                <h3 class=\"mb-2\">OUR STORY</h3>                \r\n                </div>\r\n                </div>\r\n                <div class=\"row\">\r\n                <div class=\"col-md-12\">\r\n                <p>Cygnett Group grew out of the Vision of Sarbendra Sarkar who define Cygnett Group as an Aggrandized hospitality Company. Every great venture begins with a dream and it takes all of the dreamer\'s strength, patience, and passion to reach for the stars to make his dream a reality. It is this very strength, patience, and passion which has taken Sarbendra Sarkar, Founder & MD Cygnett Hotels & Resorts, to the heights of success achieved by only those who \"Dare to do, over Dream to do\". Sarbendra is the quintessential person who takes challenges& enjoys the thrill of it. This adage suits his remarkable journey as he enjoys the challenge of converting loss into profit.</p>\r\n                <p>Cygnett Hotels and Resorts came into being as a dynamic and progressive Hotel Management and Brand Franchising company with the vision of creating a hotel company that is responsive to the demands of a metamorphosing world, without compromising the ideals of good hospitality, quality comfort, and great service in the year 2012. And, after two years of careful and detailed analysis and groundwork, in April 2014, it started operations in India and Nepal. The company is now actively targeting the ASEAN, Middle East and North African countries to expand the group\'s footprint.</p>\r\n                <p>The hospitality group is actively working to open 100+ Hotels across 75+ cities in India & Nepal and to operate in International locations (ASEAN countries, Middle East, and North Africa) within the next five years. The company is looking forward to adding 7500+ keys by 2025 and to create employment for 12,000 + employees & benchmark \"Cygnetture Experiences\" in the industry.</p>\r\n                </div>\r\n                </div>\r\n                                               \r\n                            \r\n\r\n  \r\n\r\n  <div class=\"container-fluid pl-0 pr-0 separator-img-section\">\r\n  <div class=\"row\">\r\n  <div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/our-story1.jpg\"></div>\r\n  <div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/our-story2.jpg\"></div>\r\n  <div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/our-story3.jpg\"></div>\r\n  </div>\r\n  </div>\r\n\r\n\r\n  <div class=\"container inner-page-pad\">\r\n  <div class=\"col-md-10 offset-md-1\">                \r\n \r\n  <div class=\"row mb-3\">\r\n  <div class=\"col-md-12\">\r\n                <h3 class=\"mb-2\">MD\'S MESSAGE</h3>                \r\n                </div>\r\n                </div>\r\n                <div class=\"row\">\r\n                <div class=\"col-md-4\"><img class=\"img-fluid\" src=\"images/static/our-story4.jpg\"></div>\r\n                <div class=\"col-md-8\">\r\n                <blockquote class=\"blockquote-primary\">\r\n                        <p class=\"mb-0 pb-0\">Since 2014 we have built powerful brands, the last six years\' journey of implementing an amalgamation of various business models has strengthened us.</p>                        \r\n                      </blockquote>\r\n                <p>In this metamorphic world in order to meet the current changes in the industry and anticipating the future, we have transformed Cygnett from the hotel group into an aggrandized hospitality group with a new eco-system of Cygnetture experience. Extensive strategic moves in a wide variety of business models around ASEAN countries, the Middle East, and North Africa. Our versatile offerings create a wide and multi-brand portfolio from a collection of upscales hotels to budget and economy brands with Aayushkam being a wellness and lifestyle brand.</p>\r\n                      <h4 class=\"mb-0 pb-0\"><strong>Sarbendra Sarkar</strong></h4>\r\n                      <p>Founder & Managing Director</p>\r\n                </div>\r\n                </div>\r\n                                                   \r\n                </div>            \r\n\r\n  </div>\r\n\r\n\r\n  ', 1, 0, 1, 1, '2021-05-19 14:00:15', 1, '2021-08-28 12:43:09', 1),
(3, 'About Cygnett', 1, 'aboutus.php', 'About Cygnett Hotels and Resorts - India\'s Leading Hotel Chain', 'Cygnett Hotels and Resorts is as progressive and tech savvy company with 35 Hotels- 20 Operational in 33 locations, across 2 countries, that is responsive to the demands of a metamorphosing world.', '', '', '<div class=\"row mb-3\"> 					\r\n 					<div class=\"col-md-12\">	\r\n                	<h3 class=\"mb-2\">OUR MANIFESTO</h3>                	\r\n                	</div>\r\n                	</div>\r\n                	<div class=\"row\">\r\n                		<div class=\"col-md-12\">\r\n                			<p>Cygnett hospitality is known for its versatile offering, great prices, and Cygnetture experience. In this metamorphic world, our hotels provide more than a room to stay and bed to sleep. We create a Cygnetture experience that offers a lifestyle where you want to STAY – WORK – CHEERS.</p>\r\n                      <p>We are redefining a future where travel unlocks with an aggrandized hospitality-concept, where our powerful brands deliver Cygnetture experience and our constant innovation is creating new value and expanding boundaries.</p>\r\n                      <p>A commitment to sustainability gives back to one planet and communities.</p>\r\n                		</div>\r\n                	</div>\r\n                 	                                   \r\n                             \r\n\r\n 					\r\n\r\n 					<div class=\"container-fluid pl-0 pr-0 separator-img-section\">\r\n 						<div class=\"row\">\r\n 						<div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/about1.jpg\"></div>\r\n 						<div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/about2.jpg\"></div>\r\n 						<div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/about3.jpg\"></div>\r\n 					</div>\r\n 					</div>\r\n\r\n\r\n 					<div class=\"container inner-page-pad\">\r\n 						<div class=\"col-md-10 offset-md-1\">                	\r\n 						 						\r\n 					<div class=\"row mb-3\"> 					\r\n 					<div class=\"col-md-12\">	\r\n                	<h3 class=\"mb-2\">ABOUT CYGNETT</h3>                	\r\n                	</div>\r\n                	</div>\r\n                	<div class=\"row\">                		\r\n                		<div class=\"col-md-12\"> \r\n                			<p>Cygnett Hotels and Resorts is as progressive and tech savvy company with 35 Hotels- 20 Operational in 33 locations, across 2 countries, that is responsive to the demands of a metamorphosing world. The multi-brand portfolio having multidirectional approach gives it the edge to cater to the rapidly changing hotel industry on the founding tenets of hospitality: quality, comfort cygnetture service.</p>\r\n                      <h4><strong>What sets us apart?</strong></h4>\r\n                      <p>1100 + keys across 33 locations including 15 pre-opening in 2+ countries, 14 states within 4 years of operations with aggressive approach towards South Asian and African markets. It\'s not about us, it\'s about you. You – our guests – are what drive us, in all our endeavors, to create value. It is essential for us to deliver value when you invest your time, expectations and faith in us. All our hotels reflect this vision not just in pretty words but also in action. We understand the value of a good night\'s sleep, a meal that hits the spot, a that makes you feel cherished, and prices that suit the pocket. We don\'t promise, we deliver. Try the difference.</p>\r\n                      <h4><strong>A snapshot of What is to Come</strong></h4>\r\n                      <ul class=\"pl-5\">\r\n                        <li>1800+ Keys by 2020</li>\r\n                        <li>Manage, Franchise and Own at least 5000 Keys by 2022</li>\r\n                        <li>Cygnett Hotels and Resorts will be operating 50+ hotels within the next 2 years.</li>\r\n                        <li>Venture out into South Asia & Africa\'s hospitality scenario</li>\r\n                        <li>Develop & own state of-the-art next gen technology domains</li>\r\n                        <li>Bridge new communities & empower current coalition</li>\r\n                        <li>Deliver excellence & assistance to our patrons</li>\r\n                      </ul>\r\n                		</div>\r\n                	</div>\r\n                 	                                  \r\n                </div>             \r\n\r\n 					</div>\r\n', 0, 0, 2, 1, '2021-05-19 16:56:25', 1, '2021-08-28 12:44:27', 1),
(4, 'Our Hotels', 0, 'our-hotels', 'Cygnett Hotels & Resorts - Discover Our Hotels & Resorts in India ', 'Discover our 35 Hotels in 33 locations around India and enjoy a bunch of versatile offerings at great prices and explore our Cygnetture experiences with friends and family.', '', '', '', 0, 1, 2, 1, '2021-05-20 15:49:18', 1, '2021-08-20 14:44:44', 1),
(5, 'Brands', 0, 'brands.php', 'Cygnett Hotels & Resorts | Brands', 'Cygnett Hotels and Resorts is an emerging hospitality company with 30 Hotels* in 25 locations, across 2 countries, that is responsive to the demands of a metamorphosing world. The multi-brand portfolio having multidirectional approach gives it the edge to cater to the rapidly changing hotel industry on the founding tenets of hospitality: quality, comfort and cygnetture service.', '', '', '', 0, 1, 3, 1, '2021-05-20 15:50:15', 1, '2021-08-28 12:40:25', 1),
(6, 'Dining', 0, '', 'Cygnett Pavillion - Mughlai & North Indian Restaurants Nearby Your Location | The Global Cuisine Restaurants', 'Savour lavish breakfast, dinner buffets and taste of local flavours with its carefully curated selection of Indian, Oriental, Mediterranean and European dishes at Cygnett Pavillion. ', '', 'This is a bouquet of our finest restaurants catering to your culinary tastes. Be prepared to pamper your taste buds with our mouth watering, appetizing and healthy cuisine offerings. Each of the restaurant is a delight for all the food connoisseurs out there!', '', 0, 1, 4, 1, '2021-05-20 15:51:16', 1, '2021-08-19 11:13:20', 1),
(7, 'Offers', 0, 'offers.php', 'Cygnett Hotels & Resorts - Hotel Special Offers, Hotels Discounts, Deals', 'Take Your Pick From A Wide Range Of Discounts And Packages', '', '', '', 0, 1, 5, 1, '2021-05-20 15:52:08', 1, '2021-08-28 12:38:39', 1),
(8, 'Business Development', 0, 'business-development', '', '', '', '', '', 0, 1, 6, 1, '2021-05-20 15:53:07', 1, '2021-06-04 10:44:27', 1),
(9, 'Contact Us', 0, 'contact-us.php', '', '', '', '', '', 0, 1, 7, 1, '2021-05-20 15:54:00', 1, '2021-07-12 23:33:40', 1),
(10, 'Our Heritage', 1, 'our-heritage.php', 'Our Heritage - Bringing India to the World | Cygnett Hotels & Resorts', 'We honor Indian traditions through the flavors of its various cuisines served at our restaurants Our strengths lie in having both India and global outlook.', '', '', '<div class=\"row mb-3\"> 					\r\n 					<div class=\"col-md-12\">	\r\n                	<h3 class=\"mb-2\">BRINGING INDIA TO THE WORLD</h3>                	\r\n                	</div>\r\n                	</div>\r\n                	<div class=\"row\">\r\n                		<div class=\"col-md-12\">\r\n                			<p>Cygnett is bringing India to the World through Indian Heritage concept <strong>\"Atithi Devo Bhava\"</strong> meaning <strong>\"Guest is God\"</strong> is to treat tourists/guests. We draw inspiration from its many diverse and colorful cultures and strive to bring the ancient believed <strong>\"Vasudhaiva Kutumbakam\"</strong> which means The World is One Family.</p>\r\n                      <p>We honor Indian traditions through the flavors of its various cuisines served at our restaurants Our strengths lie in having both India and global outlook.</p>\r\n                		</div>\r\n                	</div>\r\n                 	                                  \r\n                             \r\n\r\n 					\r\n\r\n 					<div class=\"container-fluid pl-0 pr-0 separator-img-section\">\r\n 						<div class=\"row\">\r\n 						<div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/heritage-new1.jpg\"></div>\r\n 						<div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/heritage-new2.jpg\"></div>\r\n 						<div class=\"col-md-4 no_right_padding pr-0\"><img class=\"img-fluid\" src=\"images/static/heritage-new3.jpg\"></div>\r\n 					</div>\r\n 					</div>\r\n\r\n', 1, 0, 3, 1, '2021-05-21 17:30:07', 1, '2021-08-28 12:45:29', 1),
(11, 'Our Leadership Team', 1, 'team.php', 'Meet Our Managment & Team | Cygnett Hotels & Resorts | Our Leadership Team', 'With a combined experience of more than 100+ years we here at Cygnett believe in providing hospitality at its best. Each member of our team is conversant with its domain. collectively, we work towards the common goal of providing with the best to our customers and building royalty across every touchpoint.', '', '', '', 0, 0, 4, 1, '2021-05-21 17:30:46', 1, '2021-08-28 12:47:04', 1),
(12, 'The Cygnett Signature', 1, 'signature.php', 'The Cygnett Signature | Cygnett Hotels & Resorts', 'With a combined experience of more than 100+ years we here at Cygnett believe in providing hospitality at its best. Each member of our team is conversant with its domain. collectively, we work towards the common goal of providing with the best to our customers and building royalty across every touchpoint.', '', '', '', 0, 0, 5, 1, '2021-05-21 17:31:39', 1, '2021-08-28 12:48:36', 1),
(13, 'Vision and Mission', 1, 'vision-mission.php', 'Our Vision & Mission | Cygnett Hotels & Resorts', 'Creating memorable experiences that leave an impression. Expressing our appreciation for continued patronage through consistency in service and standards. Always assuring that value exceeds price. Care, comfort and fulfilment over mere provision of services.', '', '', '', 0, 0, 6, 1, '2021-05-21 17:32:39', 1, '2021-08-28 12:49:35', 1),
(14, 'Cygnett Core Values', 1, 'core-values.php', 'Cygnett Core Values | Cygnett Hotels & Resorts', 'Cygnett Hotels & Resorts is committed to a set of principles that define our company identity not just in name but also truly in form.', '', '', '', 0, 0, 7, 1, '2021-05-21 17:34:19', 1, '2021-08-28 12:51:39', 1),
(15, 'Safety and Security', 1, 'safety.php', 'Cygnett Safety & Security | Cygnett Hotels & Resorts', 'The visitor, who goes to a specific lodging, accompanies an understanding that he and his things both will be sheltered and secure while he is putting up at the inn. Keeping this in mind, we have designed an array of features to ensure the security of our premises. ', '', '', '', 0, 0, 8, 1, '2021-05-21 17:35:08', 1, '2021-08-28 12:58:22', 1),
(16, 'Quick Links', 0, '', '', '', '', '', '', 0, 2, 1, 1, '2021-05-22 21:02:37', 1, NULL, 0),
(17, 'Corporate', 0, '', '', '', '', '', '', 0, 2, 2, 1, '2021-05-22 21:04:24', 1, NULL, 0),
(18, 'Legal', 0, '', '', '', '', '', '', 0, 2, 3, 0, '2021-05-22 21:05:00', 1, '2021-07-29 14:11:06', 1),
(19, 'Travel Professionals', 0, '', '', '', '', '', '', 0, 2, 4, 1, '2021-05-22 21:05:38', 1, NULL, 0),
(20, 'COVID update', 16, 'covid-19.php', 'Cygnett Hotels & Resorts | Upscale,Midscale & Budget Hotels & Resorts | Top Hotels in India | Budget hotels in India', 'Cygnett Hotels and Resorts is an emerging hospitality company with 30 Hotels* in 25 locations, across 2 countries, that is responsive to the demands of a metamorphosing world. The multi-brand portfolio having multidirectional approach gives it the edge to cater to the rapidly changing hotel industry on the founding tenets of hospitality: quality, comfort and cygnetture service.', 'Cygnett Hotels & Resorts, Hotels in India, Best Hotels in India, Hotel Services in India, Best Hotel Hospitality India, Business Hotels in India, Family Hotels in India, Online Hotel Booking Website, Hotel Booking Website,Hotels Booking Services in India,Budget hotels in India,Book hotel in India', '', '', 0, 0, 1, 1, '2021-05-22 21:07:22', 1, '2021-08-20 11:47:39', 1),
(21, 'All Destinations', 16, 'our-locations', 'Cygnett Hotels & Resorts - Discover Our Hotels & Resorts in India  ', 'Discover our 35 Hotels in 33 locations around India and enjoy a bunch of versatile offerings at great prices and explore our Cygnetture experiences with friends and family.', 'Cygnett Hotels & Resorts, Hotels in India, Best Hotels in India, Hotel Services in India, Best Hotel Hospitality India, Business Hotels in India, Family Hotels in India, Online Hotel Booking Website, Hotel Booking Website', '', '', 0, 0, 2, 1, '2021-05-22 21:08:24', 1, '2021-07-20 11:38:08', 1),
(22, 'New and Upcoming Hotels', 16, 'new-and-upcoming-hotels', 'New and Upcoming Hotels - Cygnett Hotels & Resorts', 'New and upcoming hotels & resorts by Cygnett Hotels. Stay up-to-date and find out about our upcoming properties.', '', '', '', 0, 0, 3, 1, '2021-05-22 21:09:46', 1, '2021-08-20 14:32:27', 1),
(23, 'Cygnett Hotels APP', 16, '', '', '', '', '', '', 0, 0, 4, 1, '2021-05-22 21:10:30', 1, NULL, 0),
(24, 'Cygnett Hotel Group', 17, 'aboutus.php', '', '', '', '', '', 0, 0, 1, 1, '2021-05-22 21:11:34', 1, NULL, 0),
(25, 'Media News', 17, 'media-news.php', 'Cygnett Hotels & Resorts - Media Coverage and News', 'If you are looking for our latest news, our Media page is a readily available source of updated information and resources on Cygnett Hotels and Resorts.', '', '', '', 0, 0, 2, 1, '2021-05-22 21:13:26', 1, '2021-08-28 12:54:23', 1),
(26, 'Careers @ Cygnett', 17, 'careers-at-cygnett', 'The Cygnett Hotels & Resorts Jobs – Job Openings in The Cygnett Hotels & Resorts ', 'Find latest openings in The Cygnett Hotels & Resorts. Search & Apply now!', '', '', '', 0, 0, 3, 1, '2021-05-22 21:14:29', 1, '2021-08-20 14:36:36', 1),
(28, 'Our Technologies', 17, 'our-technologies', 'Our Technologies | Business & Technology Division - Cygnett Hotels & Resorts \r\n', 'Our technologies are the product of an interaction between our organization and our customer over the duration of our relationship.', '', '', '', 0, 0, 5, 1, '2021-05-22 21:15:50', 1, '2021-08-20 14:37:57', 1),
(29, 'Ad and Cookie Policy', 18, 'ad-and-cookie-policy', '', '', '', '', '', 0, 0, 1, 0, '2021-05-22 21:19:44', 1, '2021-07-29 14:04:06', 1),
(30, 'Digital Copyright Act', 18, 'digital-copyright-act', '', '', '', '', '', 0, 0, 2, 0, '2021-05-22 21:20:24', 1, '2021-07-29 14:04:09', 1),
(31, 'Legal Notice', 18, 'legal-notice', '', '', '', '', '', 0, 0, 3, 0, '2021-05-22 21:20:55', 1, '2021-07-29 14:04:12', 1),
(32, 'Privacy Policy', 18, 'privacy-policy', '', '', '', '', '', 0, 0, 4, 0, '2021-05-22 21:21:35', 1, '2021-07-29 14:04:15', 1),
(33, 'Terms and Conditions', 18, 'terms-conditions.php', '', '', '', '', '', 0, 0, 5, 0, '2021-05-22 21:22:01', 1, '2021-07-29 14:04:19', 1),
(34, 'Site Usage Agreement', 18, 'site-usage-agreement', '', '', '', '', '', 0, 0, 6, 0, '2021-05-22 21:22:29', 1, '2021-07-29 14:04:22', 1),
(35, 'Corporate Enquiry', 19, 'corporate-enquiry.php', 'Cygnett Hotels & Resorts - Enquiry for Group Hotel Booking in India | Corporate Hotels Bookings', 'Cygnett Hotels - Corporate Hotel Booking Inquiry: Looking for the group hotel booking website in India? Let us know your requirement and we will assure your best business stay with us. Contact us now!', '', '', '', 0, 0, 1, 1, '2021-05-22 21:23:22', 1, '2021-08-28 12:53:10', 1),
(36, 'Guest Feedback', 19, 'guest-review.php', 'Guest Experiences and Reviews | Cygnett Hotels & Resorts', 'Please let us know if you enjoyed your stay with us at Cygnett Hotels. Providing our guests with exceptional service is our first priority and we greatly value your feedback! ', '', '', '', 0, 0, 2, 1, '2021-05-22 21:24:06', 1, '2021-08-28 12:55:55', 1),
(37, 'Contact', 19, 'contact-us.php', 'Contact Cygnett Hotels & Resorts | India\'s Leading Hotel Chain - Cygnett Hotels & Resorts', 'Contact Cygnett Hotels and Resorts  for booking or customer service assistance, event inquiries and to share your feedback. OFFICIAL WEBSITE. Contact Now!', '', '', '', 0, 0, 3, 1, '2021-05-22 21:24:42', 1, '2021-08-28 12:41:30', 1),
(38, 'FAQ', 19, 'faqs', 'Frequently Asked Questions | Cygnett Hotels & Resorts ', 'Browse our FAQ page to learn more about Cygnett Hotel Group. Learn more about useful information before booking with us.', '', '', '', 0, 0, 4, 1, '2021-05-22 21:25:18', 1, '2021-08-20 14:41:52', 1),
(39, 'Sitemap', 19, 'sitemap', '', '', '', '', '', 0, 0, 5, 1, '2021-05-22 21:25:48', 1, NULL, 0),
(40, 'Home', 0, '', 'Cygnett Hotels & Resorts | Upscale,Midscale & Budget Hotels & Resorts | Top Hotels in India | Budget hotels in India ', 'Cygnett Hotels and Resorts is an emerging hospitality company with 30 Hotels across 2 countries, that is responsive to the demands of a metamorphosing world.', '', '', '', 0, 1, 0, 1, '2021-07-22 16:14:55', 1, '2021-08-28 12:33:47', 1),
(41, 'Business Developments', 0, '', '', '', '', '', '', 0, 2, 3, 1, '2021-07-29 14:18:19', 1, NULL, 0),
(42, 'Why Cygnett', 41, 'business-development', '', '', '', '', '', 0, 0, 1, 1, '2021-07-29 14:19:26', 1, NULL, 0),
(43, 'Bond with Cygnett', 41, 'why-bond-with-cygnett', '', '', '', '', '', 0, 0, 2, 1, '2021-07-29 14:21:28', 1, NULL, 0),
(44, 'Our Brands', 41, 'our-brands', '', '', '', '', '', 0, 0, 3, 1, '2021-07-29 14:23:30', 1, NULL, 0),
(45, 'Business Model', 41, 'business-model', '', '', '', '', '', 0, 0, 4, 1, '2021-07-29 14:24:26', 1, NULL, 0),
(46, 'Our Team', 41, 'our-team', '', '', '', '', '', 0, 0, 5, 1, '2021-07-29 14:26:01', 1, NULL, 0),
(47, 'Project Tech Support', 41, 'projects-and-tech-support', 'Technical Support and Pre-opening Services - Cygnett Hotels & Resorts', 'Cygnett provides comprehensive technical assistance for all its projects, whether you are building a new hotel, renovating, or converting an existing asset. We ensure that our final product delivers a superior customer experience while maintaining operational efficiencies.', '', '', '', 0, 0, 6, 1, '2021-07-29 14:27:40', 1, '2021-08-20 14:30:48', 1),
(48, 'Blog', 16, 'blog', '', '', '', '', '', 0, 0, 5, 1, '2021-08-25 13:11:37', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_navigation_banners`
--

CREATE TABLE `cyg_navigation_banners` (
  `id` int(11) NOT NULL,
  `navigation_id` int(11) NOT NULL,
  `banner_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_banner_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_navigation_banners`
--

INSERT INTO `cyg_navigation_banners` (`id`, `navigation_id`, `banner_image`, `mobile_banner_image`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 26, '1629373343_career-topimage.jpg', '1629373343_career-topimage-mob.jpg', 1, 1, '2021-08-19 17:12:23', 1, '2021-08-20 14:36:36'),
(2, 37, '1629440091_contact-topimage.jpg', '1629440091_contact-topimage-mob.jpg', 1, 1, '2021-08-20 11:44:51', 1, '2021-08-28 12:41:30'),
(3, 20, '1629440259_covid19-topimage.jpg', '1629440259_covid19-topimage-mob.jpg', 1, 1, '2021-08-20 11:47:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_navigation_roll_over_details`
--

CREATE TABLE `cyg_navigation_roll_over_details` (
  `id` int(11) NOT NULL,
  `navigation_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_navigation_roll_over_details`
--

INSERT INTO `cyg_navigation_roll_over_details` (`id`, `navigation_id`, `title`, `description`, `image`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 2, 'OUR STORY', 'Cygnett Group grew out of the Vision of Sarbendra Sarkar who define Cygnett Group as an Aggrandized hospitality Company every great venture begins.', '1629114524_overview-img-logo.jpg', 1, '2021-05-19 14:00:15', 1, '2021-08-28 12:43:09', 1),
(2, 2, 'MD\'S MESSAGE', 'Since 2014 we have built powerful brands, the last six years\' journey of implementing an amalgamation of various business models has strengthened us.', 'md-message.jpg', 1, '2021-05-19 14:00:15', 1, '2021-08-28 12:43:09', 1),
(5, 2, 'ankur message', 'test', '1621426084_16jonny.jpg', 0, '2021-05-19 15:59:11', 1, '2021-08-28 12:43:09', 1),
(6, 3, 'ABOUT CYGNETT', 'Cygnett Hotels and Resorts is as progressive and tech savvy company with 35 Hotels - 20 Operational in 33 locations, across 2 countries.', '1621525022_about-cygnett.jpg', 1, '2021-05-20 21:07:02', 1, '2021-08-28 12:44:27', 1),
(7, 3, 'Our manifesto', 'Cygnett hospitality is known for its versatile offering, great prices, and Cygnetture experience. In this metamorphic world, our hotels provide...', '1621525022_manifesto.jpg', 1, '2021-05-20 21:07:02', 1, '2021-08-28 12:44:27', 1),
(8, 10, 'BRINGING INDIA TO THE WORLD', 'Cygnett is bringing India to the World through Indian Heritage concept \"Atithi Devo Bhava\" meaning \"Guest is God\" is to treat tourists/guests. We draw inspiration from its many diverse and colourful cultures and strive to bring the ancient believed \"Vasudhaiva Kutumbakam\" which means The World is One Family.', '1621599983_heritage1.jpg', 1, '2021-05-21 17:56:23', 1, '2021-08-28 12:45:29', 1),
(10, 11, 'Our Leadership Team', 'With a combined experience of more than 100+ years we here at Cygnett believe in providing hospitality at its best. Each member of our team is conversant with its domain. collectively, we work towards the common goal of providing with the best to our customers and building royalty across every touchpoint.', '1621608873_our-team.jpg', 1, '2021-05-21 20:24:33', 1, '2021-08-28 12:47:04', 1),
(11, 12, 'The Cygnett Signature', 'With a combined experience of more than 100+ years we here at Cygnett believe in providing hospitality at its best. Each member of our team is conversant with its domain. collectively, we work towards the common goal of providing with the best to our customers and building royalty across every touchpoint.', '1621609314_cygnett-signature.jpg', 1, '2021-05-21 20:31:28', 1, '2021-08-28 12:48:36', 1),
(12, 13, 'VISION & MISSION', 'Creating memorable experiences that leave an impression. Expressing our appreciation for continued patronage through consistency in service and standards. Always assuring that value exceeds price. Care, comfort and fulfilment over mere provision of services.', 'vision-mission.jpg', 1, '2021-05-21 20:37:11', 1, '2021-08-28 12:49:35', 1),
(13, 14, 'CYGNETT CORE VALUES', 'Cygnett Hotels & Resorts is committed to a set of principles that define our company identity not just in name but also truly in form.\r\n<br>\r\n1) Esteem<br>\r\n2) Sincerity<br>\r\n3) Vow<br>\r\n4) Creativity<br>\r\n5) Growth<br>\r\n6) Unity<br>\r\n7) Safety<br>\r\n8) Discernment', 'core-values.jpg', 1, '2021-05-21 20:38:16', 1, '2021-08-28 12:51:39', 1),
(14, 15, 'CYGNETT SAFETY & SECURITY', 'The visitor, who goes to a specific lodging, accompanies an understanding that he and his things both will be sheltered and secure while he is putting up at the inn. Keeping this in mind, we have designed an array of features to ensure the security of our premises.', 'safety.jpg', 1, '2021-05-21 20:39:19', 1, '2021-08-28 12:58:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_news`
--

CREATE TABLE `cyg_news` (
  `id` int(11) NOT NULL,
  `title` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `intro_text` tinytext COLLATE utf8_unicode_ci,
  `url` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `image` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyg_offers`
--

CREATE TABLE `cyg_offers` (
  `id` int(11) NOT NULL,
  `offer_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `short_intro` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `offer_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_offers`
--

INSERT INTO `cyg_offers` (`id`, `offer_name`, `short_intro`, `description`, `offer_image`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Honeymoon Package', 'Couple\'s stay at Deluxe Room with candle light dinner.', '&lt;ul&gt;&lt;li&gt;Honeymoon Package for 2N/3D&amp;nbsp;&lt;/li&gt;&lt;li&gt;Couple\'s stay at Deluxe Room&lt;/li&gt;&lt;li&gt;City pick up/drop by private car&lt;/li&gt;&lt;li&gt;Tea &amp;amp; Breakfast in bed&lt;/li&gt;&lt;li&gt;A candle light dinner at one of our specialty restaurant (Prior booking required) worth ₹ 3,000 - cuisine of choice (subject to availability) once during the stay&lt;/li&gt;&lt;li&gt;Chocolates, Cake &amp;amp; Wine on arrival&lt;/li&gt;&lt;li&gt;Balloon Decoration&lt;/li&gt;&lt;/ul&gt;', '1619896106_offer4.jpg', 'Hotels with Honeymoon Packages | Book Budget Honeymoon Packages at Cygnett Hotels', 'We provide an ideal honeymoon package that includes a romantic stay in our&nbsp;deluxe room with balloon decoration. Enjoy services such as private car pick-up and drop-off, tea and breakfast in bed, a candlelight dinner at one of our specialty restaurant', '', 1, '2021-02-16 15:27:26', 1, '2021-09-01 11:56:07', 1),
(2, 'Free Night Stay Offer', 'Stay for 4N and pay only for 3N with complimentary breakfast.', '&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complementary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;10% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early Check In after 09:30 AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to&amp;nbsp; room availability&lt;br&gt;&lt;/p&gt;', '1620210025_free-night-stay.jpg', 'Free Night Stay Offer| Cygnett Hotels &amp; Resorts', 'It\'s time to take advantage of a free night stay offer that includes complimentary services such as breakfast at Cygnett Pavilion, a fitness center, Wi-Fi, welcome drinks, a 15% discount on F&amp;B, a 10% discount on laundry, and an early check-in facilit', '', 1, '0000-00-00 00:00:00', 0, '2021-08-11 10:56:07', 1),
(3, 'Weekday Offer', ' Get 25% Off on Bar with complimentary breakfast.', '&lt;ul&gt;&lt;li&gt;Stay Monday to Thursday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15%&amp;nbsp; discount On Laundry&lt;/li&gt;&lt;li&gt;15%&amp;nbsp; discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '1620208490_weekend-offer.jpg', 'Hotel Weekday Special Offer | Cygnett Hotels &amp; Resorts', 'Introducing Weekday Offer when you are travelling between Monday and Thursday. Enjoy a memorable stay with a complimentary breakfast at Cygnett Pavilion, complimentary Wi-Fi throughout your stay, a 15% discount on laundry, a 15% discount on F&amp;B servic', '', 1, '2021-05-02 00:40:06', 1, '2021-08-11 11:05:48', 1),
(4, 'Long Stay Bonanza', 'Book minimum for 4 nights and above to get 25 percent discount.', '&lt;ul&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Welcome Drinks on Arrival&lt;/li&gt;&lt;li&gt;Complimentary usage of Fitness Centre&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;li&gt;15% Discount on Food &amp;amp; Soft Beverages&lt;/li&gt;&lt;li&gt;20% Discount on Laundry Usages&lt;/li&gt;&lt;li&gt;Early check in after 09:30AM&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to room&amp;nbsp; availability&lt;br&gt;&lt;/p&gt;', '1620208193_long-stay.jpg', 'Hotel Long Stay Deals | Book Long Stay Hotels at Cygnett Hotels &amp; Resorts', 'No worries if you plan to stay for a long time. Enjoy daily breakfast at Cygnett Pavilion, welcome drinks upon arrival, complimentary use of fitness center, complimentary Wi-Fi, early check-in after 09:30AM, and 15% discount on F&amp;B and a 20% discount ', '', 1, '2021-05-02 00:41:15', 1, '2021-08-11 11:01:00', 1),
(5, 'Last Minute Deal', 'Get 15% off on best available rate with complimentary breakfast.', '&lt;ul&gt;&lt;li&gt;Book same or upto 6 days prior to arrival to get 15 percent discount and enjoy our special rate benefits for your stay&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentry Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '1620212783_last-min-deal.jpg', 'Hotel Last Minute Deal | Cygnett Hotels &amp; Resorts', 'With our last minute deal, you can book the same day or up to 6 days before your arrival and receive a 15% discount. You can take advantage of amenities such as complimentary breakfast and Wi-Fi at Cygnett Pavilion.', '', 1, '2021-05-05 16:24:20', 1, '2021-08-11 10:59:12', 1),
(6, 'Advance Purchase', 'Book 15 days or more in advance or more and get 20 percent discount.', '&lt;ul&gt;&lt;li&gt;Book 15 days or more in advance or More and get 20 percent discount&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary Wi-Fi&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;**Subject to availability&lt;br&gt;&lt;/p&gt;', '1629894077_1620212180_advance-purchase.jpg', 'Hotel Advance Purchase Offer | 20% Discount | Cygnett Hotels &amp; Resorts', 'Book your stay 15 days or more in advance and receive a 20% discount. Take advantage of a complimentary Wi-Fi  and complimentary Breakfast at Cygnett Pavilion.', '', 1, '2021-05-05 16:26:20', 1, '2021-08-25 17:51:17', 1),
(7, 'Picnic Delight', 'Stay at Family Suite with 2 adults and 1 kid (below 12 years).', '&lt;ul&gt;&lt;li&gt;2N/3D for family&lt;/li&gt;&lt;li&gt;Stay at Family Suite with 2 adults and 1 kid (below 12 years)&lt;/li&gt;&lt;li&gt;An ultra-comfortable room in double occupancy with 1 kid&lt;/li&gt;&lt;li&gt;A picnic box with a meal for two, carefully prepared&lt;/li&gt;&lt;li&gt;The kit provided for the picnic: backpack, blanket, table cloth, tissue towels and disposables&lt;/li&gt;&lt;li&gt;Bonfire in the evening (chargeable)&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '1620212555_picnic-delight.jpg', 'Picnic Tour Packages | Picnic Delight by Cygnett Hotels &amp; Resorts', 'Stay in our family suite and enjoy ultra-comfortable accommodation with 2 adults and 1 child and explore our&nbsp;picnic&nbsp;delight offer&nbsp;with your family and child&nbsp;(below 12 years). Our exclusive picnic kit includes a lunch for two, a backpac', '', 1, '2021-05-05 16:32:35', 1, '2021-09-01 12:14:18', 1),
(8, 'Chillax Getaway', 'Enjoy couple\'s stay at Royal Suite with daily breakfast.', '&lt;ul&gt;&lt;li&gt;3N/4D for couples&lt;/li&gt;&lt;li&gt;Couple\'s stay at Royal Suite&lt;/li&gt;&lt;li&gt;City pick up/drop by private car&lt;/li&gt;&lt;li&gt;Daily breakfast and one major meal (Lunch or Dinner) a set menu at our All Day Dining - Cygnett Pavilion&lt;/li&gt;&lt;li&gt;A unique dining experience during your stay which will include Live Barbeque&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '1629894206_1620215391_chillax-gateway.jpg', 'Chillax Getaway by Cygnett Hotels &amp; Resorts', 'Stay in our Royal Suite for a chillax&nbsp;getaway as a couple. At our All Day Dining - Cygnett Pavilion, you can enjoy daily breakfast and one major meal (Lunch or Dinner) with live barbeque.&nbsp;', '', 1, '2021-05-05 16:37:00', 1, '2021-09-01 12:07:51', 1),
(9, 'Family Staycation', 'Stay at Family Suite with 2 adults and 1 kid (below 12 years).', '&lt;ul&gt;&lt;li&gt;Stay at Family Suite with 2 adults and 1 kid (below 12 years)&lt;/li&gt;&lt;li&gt;Daily breakfast and one major meal (Lunch or Dinner) a set menu at our All Day Dinning - Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Complimentary evening tea / coffee with veg snacks&lt;/li&gt;&lt;li&gt;10% discount on Laundry&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;', '1629894227_1620212938_family-staycation.jpg', 'Family Staycation Offer | Cygnett Hotels &amp; Resorts | Holiday Packages For Family', 'Enjoy a relaxing family staycation&nbsp;in our Family Suite, with 2 adults&nbsp;and one child (below 12 years). At Cygnett Pavilion, we&nbsp;serve daily breakfast and one major meal (Lunch or Dinner) from a set menu. Also, take advantage of complimentary ', '', 1, '2021-05-05 16:38:58', 1, '2021-08-25 17:53:47', 1),
(12, 'Weekend Offer', 'Get 25% Off on best available rate with complimentary breakfast', '&lt;ul&gt;&lt;li&gt;Stay Friday to Sunday&lt;/li&gt;&lt;li&gt;Complimentary Breakfast at Cygnett Pavilion&lt;/li&gt;&lt;li&gt;Wi-Fi throughout the stay&lt;/li&gt;&lt;li&gt;15 percent discount On Laundry&lt;/li&gt;&lt;li&gt;15 percent discount On Food &amp;amp; beverage services&lt;/li&gt;&lt;li&gt;Late checkout till 1600 hrs&lt;/li&gt;&lt;/ul&gt;', '1621879319_weekend-offer1.jpg', 'Hotel Weekend Getaways Deals &amp; Offers | Cygnett Hotels &amp; Resorts', 'Pavilion, Wi-Fi throughout your stay, and a 15% discount on laundry and F&amp;B services and a&nbsp;late checkout facility&nbsp;till 1600 hrs.', '', 1, '2021-05-24 23:31:59', 1, '2021-08-11 11:04:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_offers_banners`
--

CREATE TABLE `cyg_offers_banners` (
  `id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `banner_image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_banner_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_offers_banners`
--

INSERT INTO `cyg_offers_banners` (`id`, `offer_id`, `banner_image`, `mobile_banner_image`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 1, '1619245371_offer-img1.jpg', '1619245467_offer-img1-mob.jpg', 1, 1, '2021-02-16 15:27:26', 1, '2021-09-01 11:56:07'),
(2, 1, '1613471766_offer-img1.jpg', NULL, 0, 1, '2021-02-16 15:27:26', 1, '2021-09-01 11:56:07'),
(3, 1, '1613471750_kebab-sutra-logo.jpg', NULL, 0, 1, '2021-02-16 16:05:50', 1, '2021-09-01 11:56:07'),
(4, 6, '1620285767_advance-purchase-banner.jpg', '1620285767_advance-purchase-banner-mob.jpg', 1, 1, '2021-05-06 11:25:57', 1, '2021-08-25 17:51:17'),
(5, 8, '1620288891_chillax-banner.jpg', '1620288581_chillax-banner-mob.jpg', 1, 1, '2021-05-06 13:11:44', 1, '2021-09-01 12:07:51'),
(6, 8, '1620287025_chillax-banner.jpg', '1620287025_chillax-banner-mob.jpg', 0, 1, '2021-05-06 13:13:45', 1, '2021-09-01 12:07:51'),
(7, 8, '1620287311_chillax-banner.jpg', '1620287311_chillax-banner-mob.jpg', 0, 1, '2021-05-06 13:18:31', 1, '2021-09-01 12:07:51'),
(8, 9, '1620288360_family-staycation-banner.jpg', NULL, 1, 1, '2021-05-06 13:36:00', 1, '2021-08-25 17:53:47'),
(9, 9, '1620288542_family-staycation-banner.jpg', '1620288542_family-staycation-banner-mob.jpg', 1, 1, '2021-05-06 13:39:02', 1, '2021-08-25 17:53:47'),
(10, 2, '1620289681_free-nightstay-banner.jpg', '1620289681_free-nightstay-banner-mob.jpg', 1, 1, '2021-05-06 13:47:32', 1, '2021-08-11 10:56:07'),
(11, 5, '1620290075_last-min-deal-banner.jpg', NULL, 1, 1, '2021-05-06 14:04:35', 1, '2021-08-11 10:59:12'),
(12, 5, '1620290198_last-min-deal-banner.jpg', '1620290198_last-min-deal-banner-mob.jpg', 1, 1, '2021-05-06 14:06:38', 1, '2021-08-11 10:59:12'),
(13, 4, '1620290797_long-stay-banner.jpg', '1622015812_long-stay-banner-mob.jpg', 1, 1, '2021-05-06 14:16:37', 1, '2021-08-11 11:01:00'),
(14, 4, '1621925154_long-stay-banner.jpg', '1621925154_long-stay-banner-mob.jpg', 0, 1, '2021-05-06 14:23:58', 1, '2021-08-11 11:01:00'),
(15, 7, '1620294781_picnic-banner.jpg', NULL, 1, 1, '2021-05-06 15:23:01', 1, '2021-09-01 12:14:18'),
(16, 7, '1620295008_picnic-banner.jpg', '1620295008_picnic-banner-mob.jpg', 1, 1, '2021-05-06 15:26:48', 1, '2021-09-01 12:14:18'),
(17, 3, '1620295921_weekday-banner.jpg', NULL, 1, 1, '2021-05-06 15:42:01', 1, '2021-08-11 11:05:48'),
(18, 3, '1620296173_weekday-banner.jpg', '1620296173_weekday-banner-mob.jpg', 1, 1, '2021-05-06 15:46:13', 1, '2021-08-11 11:05:48'),
(19, 12, '1621879707_weekend-offer1-banner.jpg', NULL, 1, 1, '2021-05-24 23:38:27', 1, '2021-08-11 11:04:23'),
(20, 12, '1621879860_weekend-offer1-banner.jpg', NULL, 1, 1, '2021-05-24 23:41:00', 1, '2021-08-11 11:04:23'),
(21, 12, '1621879975_weekend-offer1-banner.jpg', NULL, 1, 1, '2021-05-24 23:42:55', 1, '2021-08-11 11:04:23'),
(22, 12, '1621880121_weekend-offer1-banner.jpg', NULL, 1, 1, '2021-05-24 23:45:21', 1, '2021-08-11 11:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_page_category`
--

CREATE TABLE `cyg_page_category` (
  `id` int(11) NOT NULL,
  `page_category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_page_category`
--

INSERT INTO `cyg_page_category` (`id`, `page_category`, `priority`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Overview', 1, 1, '2021-02-18 12:45:18', 1, NULL, NULL),
(3, 'Accomodation', 2, 1, '2021-03-19 13:45:42', 1, NULL, NULL),
(4, 'Meetings and Events', 5, 1, '2021-03-19 13:46:07', 1, '2021-03-19 18:21:10', 1),
(5, 'Dining', 4, 1, '2021-03-19 13:46:15', 1, '2021-03-19 13:46:58', 1),
(6, 'Gallery', 6, 1, '2021-03-19 13:47:34', 1, NULL, NULL),
(7, 'Offers', 3, 1, '2021-03-19 13:47:50', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_places_to_visit`
--

CREATE TABLE `cyg_places_to_visit` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `place_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `place_details` longtext COLLATE utf8_unicode_ci,
  `place_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_places_to_visit`
--

INSERT INTO `cyg_places_to_visit` (`id`, `location_id`, `place_name`, `place_details`, `place_image`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 'Golden Temple', 'The iconic history of the Golden Temple dates back to 400 years. ', '1620808022_amritsar-tourist-img1.jpg', 1, 1, '2021-02-15 13:43:44', 1, '2021-06-03 23:22:01'),
(2, 1, 'Wagah Border', 'Wagah Border is the last Indian area before the Pakistan', '1620808022_amritsar-tourist-img2.jpg', 1, 1, '2021-02-15 13:43:44', 1, '2021-06-03 23:22:01'),
(5, 1, 'Jallianwala Bagh', 'Jallianwala Bagh is one of the highly visited tourist places in Amritsar', '1620808022_amritsar-tourist-img3.jpg', 1, 1, '2021-02-15 17:54:57', 1, '2021-06-03 23:22:01'),
(7, 1, 'Gobindgarh Fort', 'Gobindgarh Fort is one of the most historic tourist attractions in Amritsar. ', '1620808022_amritsar-tourist-img4.jpg', 1, 1, '2021-02-16 11:54:26', 1, '2021-06-03 23:22:01'),
(12, 6, 'Nainital Lake', 'One of the most beautiful lakes of the country, Nainital lakes is known for its exquisiteness.', '1628766090_nainital-destination-img1.jpg', 1, 1, '2021-05-12 11:20:41', 1, '2021-08-25 17:42:19'),
(13, 6, 'Snow View Point', 'Snow view point is surely the most visited and loved spot by people all over.', '1628766090_nainital-destination-img2.jpg', 1, 1, '2021-05-12 11:26:22', 1, '2021-08-25 17:42:19'),
(14, 6, 'The Mall Road', 'Mall Road is the primary road which goes through the core of the Nainital town parallel to the lake.', '1628766090_nainital-destination-img3.jpg', 1, 1, '2021-05-12 11:26:23', 1, '2021-08-25 17:42:19'),
(15, 6, 'Naina Peak', 'Naina Peak is known for its breathtaking bird\'s eye perspective of the town.', '1628766090_nainital-destination-img4.jpg', 1, 1, '2021-05-12 11:26:23', 1, '2021-08-25 17:42:19'),
(16, 6, 'Bhimtal Lake', 'It is a famous lake located in the town of Bhimtal.', '1628766090_nainital-destination-img5.jpg', 1, 1, '2021-05-12 12:23:10', 1, '2021-08-25 17:42:19'),
(17, 6, 'Sattal', 'Sattal as the name says is a body of 7 freshwater lakes in the lower Himalayan range.', '1628766090_nainital-destination-img6.jpg', 1, 1, '2021-05-12 12:23:10', 1, '2021-08-25 17:42:19'),
(18, 13, 'Bhangarh Fort', 'Bhangarh Fort, one of the most “most haunted place” in India.', '1628663902_alwar-destination-img1.jpg', 1, 1, '2021-05-12 13:09:31', 1, '2021-08-11 15:15:54'),
(19, 13, 'Bala Quila Fort', 'BalaQuila Fort is one of the most historic destinations in Alwar.', '1628663902_alwar-destination-img2.jpg', 1, 1, '2021-05-12 13:09:31', 1, '2021-08-11 15:15:54'),
(20, 13, 'Sariska Wildlife Santuary', 'This is one of the most famous tourist attractions in Alwar', '1628663902_alwar-destination-img3.jpg', 1, 1, '2021-05-12 13:09:31', 1, '2021-08-11 15:15:54'),
(21, 13, 'Siliserh Lake Palace', 'Siliserh Lake Palace is an erstwhile royal palace and hunting lodge ', '1628663902_alwar-destination-img4.jpg', 1, 1, '2021-05-12 13:33:56', 1, '2021-08-11 15:15:54'),
(22, 1, 'Durgiana Temple', 'Dedicated to Goddess Durga, the Durgiana Temple', '1620808022_', 1, 1, '2021-05-12 13:57:02', 1, '2021-06-03 23:22:01'),
(23, 11, 'Chopta-Tungnath Trek', 'Chopta Tungnath trek is a relatively unexplored trekking destination', '1620810448_dehradun-tourist-img1.jpg', 1, 1, '2021-05-12 14:33:31', 1, '2021-08-09 11:33:36'),
(24, 11, 'Rajaji National Park', 'Rajaji National Park is both a national park as well as a tiger reserve', '1620810448_dehradun-tourist-img2.jpg', 1, 1, '2021-05-12 14:33:31', 1, '2021-08-09 11:33:36'),
(25, 11, 'Tapkeshwar Temple', 'Dehradun houses one of its most visited temples, Tapkeshwar', '1620810448_dehradun-tourist-img3.jpg', 1, 1, '2021-05-12 14:33:31', 1, '2021-08-09 11:33:36'),
(26, 11, 'Shikhar Fall', 'Shikhar Falls is one of the most fascinating places to see in Dehradun.', '1620810448_dehradun-tourist-img4.jpg', 1, 1, '2021-05-12 14:33:31', 1, '2021-08-09 11:33:36'),
(27, 11, 'Chopta-Tungnath Trek', 'Chopta Tungnath trek is a relatively unexplored trekking destination', '1620810269_', 0, 1, '2021-05-12 14:34:29', 1, '2021-08-09 11:33:36'),
(28, 11, 'Rajaji National Park', 'Rajaji National Park is both a national park as well as a tiger reserve', '1620810269_', 0, 1, '2021-05-12 14:34:29', 1, '2021-08-09 11:33:36'),
(29, 11, 'Tapkeshwar Temple', 'Dehradun houses one of its most visited temples, Tapkeshwar', '1620810269_', 0, 1, '2021-05-12 14:34:29', 1, '2021-08-09 11:33:36'),
(30, 11, 'Shikhar Fall', 'Shikhar Falls is one of the most fascinating places to see in Dehradun.', '1620810269_', 0, 1, '2021-05-12 14:34:29', 1, '2021-08-09 11:33:36'),
(31, 9, 'Amarabati Park', 'Explore this verdant, well-maintained park in the midst of this seaside town', '1628685308_digha-destination-img1.jpg', 1, 1, '2021-05-12 15:32:43', 1, '2021-08-25 17:43:33'),
(32, 9, 'New Digha Sea Beach', 'New Digha Sea Beach is known for its huge expanse, easy accessibility', '1628685308_digha-destination-img2.jpg', 1, 1, '2021-05-12 15:37:17', 1, '2021-08-25 17:43:33'),
(33, 9, 'Digha Mohona Watch Point', 'Mohona Watch Point is a very popular tourist attraction in Digha', '1628685308_digha-destination-img3.jpg', 1, 1, '2021-05-12 15:37:17', 1, '2021-08-25 17:43:33'),
(34, 9, 'Talasari Beach', 'Talasari Beach is located in Baleswar district of Odisha.', '1628685308_digha-destination-img4.jpg', 1, 1, '2021-05-12 15:40:22', 1, '2021-08-25 17:43:33'),
(35, 14, 'Shree Dwarkadhish Temple', 'Dwarkadhish Temple in Dwarka is also known as Jagat Mandir.', '1620815000_', 1, 1, '2021-05-12 15:53:20', 1, '2021-07-06 16:07:49'),
(36, 14, 'Dwarka Beach', 'The Dwarka Beach is considered to be one of the best places to visit in Dwarka', '1620816878_', 1, 1, '2021-05-12 16:24:38', 1, '2021-07-06 16:07:49'),
(37, 14, 'Rukmini Devi Temple', 'Rukmini Devi Temple in Dwarka happens to be one most important attraction', '1620816944_', 1, 1, '2021-05-12 16:25:44', 1, '2021-07-06 16:07:49'),
(38, 14, 'Dwarka Lighthouse', 'The lighthouse is another must-visit Dwarka Tourist attractions', '1620817214_dwarka-tourist-img4.jpg', 1, 1, '2021-05-12 16:28:35', 1, '2021-07-06 16:07:49'),
(39, 14, 'Shree Swaminarayan Mandir', 'Shree Swaminarayan Mandir is one of the beautiful shrines', '1620817115_', 1, 1, '2021-05-12 16:28:35', 1, '2021-07-06 16:07:49'),
(40, 15, 'Tsomgo Lake', 'Tsomgo Changu Lake is a glacial lake situated 40 km from Gangtok', '1620818651_', 1, 1, '2021-05-12 16:54:11', 1, '2021-08-11 18:15:12'),
(41, 15, 'Nathu La Pass', 'Nathu La Pass connects Sikkim with China\'s Tibet Autonomous Region', '1620818854_', 1, 1, '2021-05-12 16:57:34', 1, '2021-08-11 18:15:12'),
(42, 15, 'Tashi Viewpoint', 'Tashi Viewpoint is one of the popular places to visit in Gangtok', '1620819593_gangtok-tourist-img3.jpg', 1, 1, '2021-05-12 17:08:36', 1, '2021-08-11 18:15:12'),
(43, 15, 'Kanchenjunga Mountain', 'One of the best attractions in Gangtok. Kanchenjunga', '1620819593_gangtok-tourist-img4.jpg', 1, 1, '2021-05-12 17:08:36', 1, '2021-08-11 18:15:12'),
(44, 15, 'Phodong Monastery', 'This monastery was built in the early 18th century in Gangtok', '1620819516_', 1, 1, '2021-05-12 17:08:36', 1, '2021-08-11 18:15:12'),
(45, 7, 'Calangute Beach', 'Calangute Beach is also affectionately known as the “Queen of Beaches”.', '1628686999_goa-destination-img1.jpg', 1, 1, '2021-05-12 23:20:26', 1, '2021-08-25 17:44:02'),
(46, 7, 'Baga Beach', 'Baga Beach is the most famous of all Goa sightseeing places', '1628686999_goa-destination-img2.jpg', 1, 1, '2021-05-12 23:25:18', 1, '2021-08-25 17:44:02'),
(47, 7, 'Anjuna Beach', 'Anjuna, a small village on the North coast of Goa, is also a sightseeing places', '1628686999_goa-destination-img3.jpg', 1, 1, '2021-05-12 23:25:18', 1, '2021-08-25 17:44:02'),
(48, 7, 'Dudhsagar Waterfalls', 'The Dudhsagar Waterfalls are situated on the Goa-Karnataka border', '1628686999_goa-destination-img4.jpg', 1, 1, '2021-05-12 23:25:18', 1, '2021-08-25 17:44:02'),
(49, 16, ' Kamakhya Temple', 'Kamakhya Temple is one of the most famous Shakti Peethas in India', '1628687589_guwahati-destination-img1.jpg', 1, 1, '2021-05-12 23:40:36', 1, '2021-08-12 11:33:37'),
(50, 16, 'Umananda Island', 'This island is an addition to the travel list of Assam. Also named as Peacock island', '1628748217_guwahati-destination-img2.jpg', 1, 1, '2021-05-12 23:40:36', 1, '2021-08-12 11:33:37'),
(51, 16, 'Nameri National Park', 'Nameri National park is set up in the foothills of Eastern Himalayas.', '1628748217_guwahati-destination-img3.jpg', 1, 1, '2021-05-12 23:40:36', 1, '2021-08-12 11:33:37'),
(52, 16, 'Assam State Zoo', 'The largest zoo in North East India, this is situated in the Hengrabari Reserved Fores', '1628748217_guwahati-destination-img4.jpg', 1, 1, '2021-05-12 23:40:36', 1, '2021-08-12 11:33:37'),
(53, 17, ' Ita Fort', 'Ita Fort literally translates to “Fort of Bricks” which lends the name to the city of Itanagar.', '1628750193_itanagar-destination-img1.jpg', 1, 1, '2021-05-12 23:53:55', 1, '2021-08-12 12:06:33'),
(54, 17, 'Gompa Buddhist Temple ', 'Gompa Buddhist Temple is one of the most famous tourist spot of Itanagar. Poeple who follow Buddhism visit this place not only from all over India but also from other countries.', '1628750193_itanagar-destination-img2.jpg', 1, 1, '2021-05-12 23:53:55', 1, '2021-08-12 12:06:33'),
(55, 17, 'Ganga Lake', 'Ganga Lake is a major attraction for both locals and tourists. The lake with clear water creates a peaceful and serene atmosphere with lush green mountains in the vicinity.', '1628750193_itanagar-destination-img3.jpg', 1, 1, '2021-05-12 23:53:55', 1, '2021-08-12 12:06:33'),
(56, 17, 'Indira Gandhi Park', 'Indira Gandhi Park is a nice family place with a lot of scenic area. With greenery all around it is quite popular with tourists as well as locals.', '1628750193_itanagar-destination-img4.jpg', 1, 1, '2021-05-12 23:53:55', 1, '2021-08-12 12:06:33'),
(57, 2, 'Amber Fort and Palace', 'Located in the rocky Aravalli Hills, Amber Palace is a famous tourist place.', '1620844989_jaipur-tourist-img1.jpg', 1, 1, '2021-05-13 00:11:20', 1, '2021-07-06 16:22:11'),
(58, 2, 'Nahargarh Fort', 'To get a panoramic view of Jaipur city, Nahargarh Fort is the ideal place to visit.', '1620844989_jaipur-tourist-img2.jpg', 1, 1, '2021-05-13 00:11:20', 1, '2021-07-06 16:22:11'),
(59, 2, 'Hawa Mahal', 'Hawa Mahal or Palace of the Winds, or also called Palace of the Breeze', '1620844989_jaipur-tourist-img3.jpg', 1, 1, '2021-05-13 00:11:20', 1, '2021-07-06 16:22:11'),
(60, 2, 'Jal Mahal', 'Jal Mahal or the Water Palace is one of the classic names in the list of Rajputana architecture.', '1620844989_jaipur-tourist-img4.jpg', 1, 1, '2021-05-13 00:11:20', 1, '2021-07-06 16:22:11'),
(61, 2, 'Jaigarh Fort', 'Jaigarh Fort is the most spectacular in the list of places to visit in Jaipur. ', '1620844989_jaipur-tourist-img5.jpg', 1, 1, '2021-05-13 00:11:20', 1, '2021-07-06 16:22:11'),
(64, 18, 'Mehrangarh Fort', 'Mehrangarh Fort is the best tourist places in Jodhpur city, as it is the most explored one', '1620902271_jodhpur-tourist-img1.jpg', 1, 1, '2021-05-13 16:04:30', 1, '2021-08-09 11:32:58'),
(65, 18, 'Umaid Bhavan Palace', 'Umaid Bhavan Palace is one of the last constructed places in India.', '1620902271_jodhpur-tourist-img2.jpg', 1, 1, '2021-05-13 16:04:30', 1, '2021-08-09 11:32:58'),
(66, 18, 'Ghanta Ghar', 'Ghanta Ghar, also known as the clock tower is an important and popular landmark', '1620902271_jodhpur-tourist-img3.jpg', 1, 1, '2021-05-13 16:04:30', 1, '2021-08-09 11:32:58'),
(67, 18, 'Kaylana Lake', 'Kaylana Lake is yet another artificial lake located in the west of Jodhpur city. ', '1620902271_jodhpur-tourist-img4.jpg', 1, 1, '2021-05-13 16:04:30', 1, '2021-08-09 11:32:58'),
(68, 18, 'Mandore Gardens', 'Mandore Gardens is one of the best parks to visit to relax on any given day.', '1620902271_jodhpur-tourist-img5.jpg', 1, 1, '2021-05-13 16:04:30', 1, '2021-08-09 11:32:58'),
(69, 8, 'Howrah Bridge', 'It was constructed in 1943 replacing the Pontoon Bridge and is made of steel.', '1628752295_kolkata-destination-img1.jpg', 1, 1, '2021-05-13 16:21:06', 1, '2021-08-12 12:41:35'),
(70, 8, 'Victoria Memorial ', 'It is a beautiful White Marble structure which began making in 1906', '1628752295_kolkata-destination-img2.jpg', 1, 1, '2021-05-13 16:21:06', 1, '2021-08-12 12:41:35'),
(71, 8, 'Eden Gardens ', 'The Eden Gardens is one of the most famous cricket stadiums in India and the second largest stadiums in the world. The stadium is beautiful and very well-maintained. It is a dream of every cricket lover in India to watch at least one live match here.', '1628752295_kolkata-destination-img3.jpg', 1, 1, '2021-05-13 16:21:06', 1, '2021-08-12 12:41:35'),
(72, 8, 'Birla Planetarium ', 'Birla planetarium is the largest planetarium in Asia and the second largest in the world. Situated in Kolkata it was set up in the year 1963. Birla Planetarium regularly holds many shows and programs are in various languages for the visitors. ', '1628752295_kolkata-destination-img4.jpg', 1, 1, '2021-05-13 16:21:06', 1, '2021-08-12 12:41:35'),
(73, 8, 'Park Street ', 'Park Street is situated in the heart of Kolkata and is always is always bustling with activities. It is a major spot in the city with several shopping malls, pubs and restaurants and a famous hangout spot.', '1628752295_kolkata-destination-img5.jpg', 1, 1, '2021-05-13 16:21:06', 1, '2021-08-12 12:41:35'),
(74, 19, 'Bara Imambara / Chota Imambara', 'The Bara Imambara and Chota Imambara of Lucknow are the most famous monuments in the city. The Muslims from all over India come here every year to celebrate the religious festival of Muharram. These Imambaras has a unique style of construction.', '1628754977_lucknow-destination-img1.jpg', 1, 1, '2021-05-13 16:35:30', 1, '2021-08-25 17:43:02'),
(75, 19, 'Moti Mahal Palace', 'The Moti Mahal was built by Nawab Saadat Ali Khan and is situated in the banks of Gomti river. It was initially the former residence of the Nawabs. Moti Mahal is also popularly known as the Pearl Palace. ', '1628754977_lucknow-destination-img2.jpg', 1, 1, '2021-05-13 16:35:30', 1, '2021-08-25 17:43:02'),
(76, 19, 'Rumi Darwaza', 'Rumi Darwaza a striking gateway in the old city of Lucknow. The gateway stands around sixty feet tall. The structure exhibits ancient Awadhi architecture and is built by Nawab Asaf-ud-Daula. ', '1628754977_lucknow-destination-img3.jpg', 1, 1, '2021-05-13 16:35:30', 1, '2021-08-25 17:43:02'),
(77, 19, 'Jama Masjid', 'Jama Masjid is located in Tehseenganj was built by King Mohammad Ali Shah Bahadur. Designed with Hindu-Jain architecture this was built to out pass the grand Jama Masjid in Delhi.', '1628754977_lucknow-destination-img4.jpg', 1, 1, '2021-05-13 16:35:30', 1, '2021-08-25 17:43:02'),
(78, 19, 'Husainabad Clock Tower ', 'Adjacent to the Rumi Darwaza stands tall the Husainabad Clock Tower. This was built in 1881 and is the tallest clock tower in India with a height of 67 meters. ', '1628754977_lucknow-destination-img5.jpg', 1, 1, '2021-05-13 16:35:30', 1, '2021-08-25 17:43:02'),
(79, 20, 'Namgyal Monastery ', 'Namgyal monastery is a great place for meditation and all tourists. It is also the largest Tibetan monastery outside of Tibet. This monastery is also known as the 14th Dalai Lama’s monastery.', '1628756931_mcleodganj-destination-img1.jpg', 1, 1, '2021-05-13 16:52:36', 1, '2021-08-12 16:01:37'),
(80, 20, 'Kangra Fort ', 'The Kangra fort was built by the royal Katoch dynasty. Situated in the outskirts of the Kangra district the fort is 20 Km from Dharamshala. The beautiful surrounding makes it perfectly suitable for photographers.', '1628756931_mcleodganj-destination-img2.jpg', 1, 1, '2021-05-13 16:52:36', 1, '2021-08-12 16:01:37'),
(81, 20, 'Trekking in Mcleodganj ', 'Trekking at Mcleodganj is one of the most popular adventure sports, suiting beginners and professional hikers alike. this trekking will amaze you with rare sightings specially if you are interested in bird-watching.', '1628756931_mcleodganj-destination-img3.jpg', 1, 1, '2021-05-13 16:52:36', 1, '2021-08-12 16:01:37'),
(82, 20, 'Bhagsu Falls', 'Bhagsu Falls is one of the most important places to visit in McLeod Ganj. Hallowed pools open to the public for swimming and the cool dip is held sacred by devotees. Bhagsu Waterfall is a sight to behold and is just 2 kilometers away from McLeod Ganj. ', '1628756931_mcleodganj-destination-img4.jpg', 1, 1, '2021-05-13 16:52:36', 1, '2021-08-12 16:01:37'),
(83, 20, 'Dal Lake ', 'Dal Lake situated in the slopes of McLeodganj is flanked by Deodar trees gives it a picture post view. The hue of the water is greenish and has has varieties of fishes. Dal lake is a regularly visited place when you visit McLeod Ganj.', '1628764236_mcleodganj-destination-img5.jpg', 1, 1, '2021-05-13 16:52:36', 1, '2021-08-12 16:01:37'),
(84, 21, 'Salugara Monastery', 'The renowned monastery holds a massive 110 feet tall Stupa', '1628768807_siliguri-destination-img1.jpg', 1, 1, '2021-05-13 23:20:07', 1, '2021-08-12 17:16:47'),
(85, 21, 'Bengal Safari Park', 'The Bengal Safari park located inside the forest area of the Mahananda', '1628768807_siliguri-destination-img2.jpg', 1, 1, '2021-05-13 23:20:07', 1, '2021-08-12 17:16:47'),
(86, 21, 'Dudhia', 'Dudhia is a picture of mountain calm and serenity and a must-visit place', '1628768807_siliguri-destination-img3.jpg', 1, 1, '2021-05-13 23:20:07', 1, '2021-08-12 17:16:47'),
(87, 21, 'Coronation Bridge', 'The bridge is across the Teesta river and connects  Darjeeling and Jalpaiguri', '1628768807_siliguri-destination-img4.jpg', 1, 1, '2021-05-13 23:20:07', 1, '2021-08-12 17:16:47'),
(88, 22, 'Yarada Beach', 'About 15 kilometres from the city of Visakhapatnam lies the Yarada Village', '1628770353_vizag-destination-img6.jpg', 1, 1, '2021-05-13 23:33:07', 1, '2021-08-12 17:42:33'),
(89, 22, 'Katiki Waterfalls', 'The 50 feet high Katiki Waterfalls is one of the best places to visit in Vizag', '1628770353_vizag-destination-img5.jpg', 1, 1, '2021-05-13 23:33:07', 1, '2021-08-12 17:42:33'),
(90, 22, 'Araku Valley', 'Araku Valley is an exquisite hill station located near Vizag', '1628770353_vizag-destination-img4.jpg', 1, 1, '2021-05-13 23:33:07', 1, '2021-08-12 17:42:33'),
(91, 22, 'Kailasagiri', 'A magnificent park located on a quaint hilltop in Visakhapatnam', '1628770353_vizag-destination-img3.jpg', 1, 1, '2021-05-13 23:33:07', 1, '2021-08-12 17:42:33'),
(92, 22, 'Borra Caves', 'Borra Caves of Vizag are one of the most adventurous places to visit', '1628769593_vizag-destination-img2.jpg', 1, 1, '2021-05-13 23:33:07', 1, '2021-08-12 17:42:33'),
(93, 23, 'Pokhara', 'Pokhara is one of Nepal\'s most scenic cities. For trekkers, Pokhara is the gateway to the Himalayas and the starting point for treks to Jomsom and the Annapurna region.', '1627894209_nepal-attraction1.jpg', 1, 1, '2021-08-02 14:20:09', 1, '2021-08-11 15:12:08'),
(94, 23, 'Pokhara', 'Pokhara is one of Nepal\'s most scenic cities. For trekkers, Pokhara is the gateway to the Himalayas and the starting point for treks to Jomsom and the Annapurna region.', '1627894305_nepal-attraction1.jpg', 0, 1, '2021-08-02 14:21:45', 1, '2021-08-11 15:12:08'),
(95, 23, 'Trekking in the Annapurna Region', 'The Annapurna Region is one of the most popular trekking regions in Nepal, with options that range from a few days to a few weeks.', '1627894305_nepal-attraction2.jpg', 1, 1, '2021-08-02 14:21:45', 1, '2021-08-11 15:12:08'),
(96, 23, 'Pokhara', 'Pokhara is one of Nepal\'s most scenic cities. For trekkers, Pokhara is the gateway to the Himalayas and the starting point for treks to Jomsom and the Annapurna region.', '1627894468_nepal-attraction1.jpg', 0, 1, '2021-08-02 14:24:28', 1, '2021-08-11 15:12:08'),
(97, 23, 'Trekking in the Annapurna Region', 'The Annapurna Region is one of the most popular trekking regions in Nepal, with options that range from a few days to a few weeks.', '1627894468_nepal-attraction2.jpg', 0, 1, '2021-08-02 14:24:28', 1, '2021-08-11 15:12:08'),
(98, 23, 'Chitwan National Park', 'Chitwan National Park is the place to come to experience a different side of Nepal. This is a wonderful place for wildlife viewing and it has a safari-type atmosphere.', '1627894468_nepal-attraction3.jpg', 1, 1, '2021-08-02 14:24:28', 1, '2021-08-11 15:12:08'),
(99, 23, 'Pokhara', 'Pokhara is one of Nepal\'s most scenic cities. For trekkers, Pokhara is the gateway to the Himalayas and the starting point for treks to Jomsom and the Annapurna region.', '1627894571_nepal-attraction1.jpg', 0, 1, '2021-08-02 14:26:11', 1, '2021-08-11 15:12:08'),
(100, 23, 'Trekking in the Annapurna Region', 'The Annapurna Region is one of the most popular trekking regions in Nepal, with options that range from a few days to a few weeks.', '1627894571_nepal-attraction2.jpg', 0, 1, '2021-08-02 14:26:11', 1, '2021-08-11 15:12:08'),
(101, 23, 'Chitwan National Park', 'Chitwan National Park is the place to come to experience a different side of Nepal. This is a wonderful place for wildlife viewing and it has a safari-type atmosphere.', '1627894571_nepal-attraction3.jpg', 0, 1, '2021-08-02 14:26:11', 1, '2021-08-11 15:12:08'),
(102, 23, 'Kathmandu', 'Kathmandu, the capital city of Nepal, is set in a valley surrounded by the Himalayan mountains.', '1628674928_nepalganj-destination-img1.jpg', 1, 1, '2021-08-02 14:26:11', 1, '2021-08-11 15:12:08'),
(103, 23, 'Pokhara', 'Pokhara is one of Nepal\'s most scenic cities. For trekkers, Pokhara is the gateway to the Himalayas and the starting point for treks to Jomsom and the Annapurna region.', '1627895176_nepal-attraction1.jpg', 0, 1, '2021-08-02 14:36:16', 1, '2021-08-11 15:12:08'),
(104, 23, 'Trekking in the Annapurna Region', 'The Annapurna Region is one of the most popular trekking regions in Nepal, with options that range from a few days to a few weeks.', '1627895176_nepal-attraction2.jpg', 0, 1, '2021-08-02 14:36:16', 1, '2021-08-11 15:12:08'),
(105, 23, 'Chitwan National Park', 'Chitwan National Park is the place to come to experience a different side of Nepal. This is a wonderful place for wildlife viewing and it has a safari-type atmosphere.', '1627895176_nepal-attraction3.jpg', 0, 1, '2021-08-02 14:36:16', 1, '2021-08-11 15:12:08'),
(106, 23, 'Kathmandu', 'Kathmandu, the capital city of Nepal, is set in a valley surrounded by the Himalayan mountains.', '1628666307_nepalganj-destination-img1.jpg', 0, 1, '2021-08-02 14:36:16', 1, '2021-08-11 15:12:08'),
(107, 23, 'Everest Trek', 'The Everest Region is generally not regarded as the most scenic region in the country for trekking, but the allure of Everest makes it a popular destination, both for climbers and trekkers. There are various routes to access base camp and several options for organizing a trip.', '1627895176_nepal-attraction5.jpg', 1, 1, '2021-08-02 14:36:16', 1, '2021-08-11 15:12:08'),
(108, 23, 'Helambu Trek', 'The Helambu region is a popular trekking area, particularly with trekking companies offering guided hikes. it is close to Kathmandu, does not reach astoundingly high elevations, and offers some beautiful mountain scenery.', '1627895176_nepal-attraction6.jpg', 1, 1, '2021-08-02 14:36:16', 1, '2021-08-11 15:12:08'),
(109, 13, 'Moti Dungri', 'Moti Dungri, Alwar is a unique holy shrine Sankat Mochan Vir Hanuman Mandir and Sayyed Darbar are in the same complex without a wall in between.', '1628663902_alwar-destination-img5.jpg', 1, 1, '2021-08-11 12:08:22', 1, '2021-08-11 15:15:54'),
(110, 13, 'Neelkanth Mahadeo Temple', 'Neelkanth temple is  dedicated to Lord Shiva and is located within the Sariska Tiger Reserve premises.', '1628663902_alwar-destination-img6.jpg', 1, 1, '2021-08-11 12:08:22', 1, '2021-08-11 15:15:54'),
(111, 10, 'Bagheswari Temple', 'Bagheswari temple located centrally in the city of Bongaigaon is one of the oldest temples in Assam. dedicated to the Hindu Goddess Parvati It is among the oldest of the 52 Shakti Peethas or shrines devoted to Shaktism.Devotees flock to the temple in large numbers during the festival of Durga Puja.', '1628675972_bongaigaon-destination-img1.jpg', 1, 1, '2021-08-11 15:29:32', 1, '2021-09-07 11:35:56'),
(113, 10, 'Kakoijana Wildlife Sanctuary', 'Kakaijana Wildlife Sanctuary located around 15 km from Bongaigaon is situated on the banks of river Aie. This sanctuary houses various species of animals and birds.', '1628682111_bongaigaon-destination-img2.jpg', 1, 1, '2021-08-11 17:11:51', 1, '2021-09-07 11:35:56'),
(114, 10, 'Kachugaon Game Reserve', 'Kachugaon Game Reserve is a protected area under the forest department of Assam. Kachugaon has rare and endangered species such a golden langur, gaur, spotted deer and elephant. ', '1628682111_bongaigaon-destination-img3.jpg', 1, 1, '2021-08-11 17:11:51', 1, '2021-09-07 11:35:56'),
(115, 10, 'Manas National Park', 'Manas National Park is the only tiger reserve in Assam. It is also a a UNESCO Natural World Heritage site. Manas is one of the best-kept national parks in India.', '1628682418_bongaigaon-destination-img4.jpg', 1, 1, '2021-08-11 17:16:58', 1, '2021-09-07 11:35:56'),
(116, 10, 'Rock Cut Caves', 'The Rock Cut Caves in Bongaigaon are evidence of the rock-cut architectural movement during the Salasthamba period. The five caves are some of the best known examples of rock-cut structures in Assam. The Archaeological Survey of India now preserve these caves.', '1628683294_bongaigaon-destination-img6.jpg', 1, 1, '2021-08-11 17:23:53', 1, '2021-09-07 11:35:56'),
(117, 10, 'Koya-Kujia Bill', 'Koya-Kujia Bill is an ecological park located in the Bongaigaon district of Assam. A natural water body it is also a famous picnic spot and a perfect place for a day out for children and adults alike. ', '1628682833_bongaigaon-destination-img5.jpg', 1, 1, '2021-08-11 17:23:53', 1, '2021-09-07 11:35:56'),
(118, 9, 'Shankarpur Beach', 'Shankarpur is a virgin beach located around 15 km from Digha. the beach surrounded by local fish boats and rows of tress giving visitors a view of picture postcard. there are also a few temples near Shankarpur beach. ', '1628685016_digha-destination-img5.jpg', 1, 1, '2021-08-11 18:00:16', 1, '2021-08-25 17:43:33'),
(119, 9, 'Shankarpur Beach', 'Shankarpur is a virgin beach located around 15 km from Digha. the beach surrounded by local fish boats and rows of tress giving visitors a view of picture postcard. there are also a few temples near Shankarpur beach. ', '1628685308_digha-destination-img5.jpg', 0, 1, '2021-08-11 18:05:08', 1, '2021-08-25 17:43:33'),
(120, 9, 'Udaipur Beach', 'The Udaipur beach in Digha is the unexplored \'virgin sea beach\' located on the border of Orissa. he place is especially famous for its scenic beauty, and people from all parts of the world visit the beach to capture these picturesque views.', '1628685308_digha-destination-img6.jpg', 1, 1, '2021-08-11 18:05:08', 1, '2021-08-25 17:43:33'),
(121, 15, 'Rumtek Monastery', 'One of the most important and culturally significant monasteries in Gangtok, the Rumtek monastery is among the must-visit places in Gangtok.', '1628685679_gangtok-destination-img6.jpg', 1, 1, '2021-08-11 18:11:19', 0, NULL),
(122, 7, ' Fort Aguada', 'Fort Aguada has been standing on the beach facing the Arabian Sea from 1612. It was a grand old fort, Another heritage from the Portuguese. Today, it is one of the most famous sightseeing places in Goa. ', '1628686999_goa-destination-img5.jpg', 1, 1, '2021-08-11 18:33:19', 1, '2021-08-25 17:44:02'),
(123, 7, ' Bom Jesus Basilica', 'Bom Jesus Basilica is one of the most important tourist places in Goa. The Church was built in 1605. This is the place in which the incorrupt body of St Francis Xavier is kept. A gallery of Modern Art is also a part of the Basilica.', '1628686999_goa-destination-img6.jpg', 1, 1, '2021-08-11 18:33:19', 1, '2021-08-25 17:44:02'),
(124, 16, ' Guwahati Planetarium', 'Guwahati Planetarium, One of the most famous tourist places in Guwahati attracts a number of visitors. If you love to know more about the universe, this is a must visit place. Guwahati Planetarium is known as a popular astronomical research centre.', '1628748217_guwahati-destination-img5.jpg', 1, 1, '2021-08-12 11:33:37', 0, NULL),
(125, 16, ' Pobitora Wildlife Sanctuary', 'Pobitora Wildlife Sanctuary is located in Marigaon district of Assam. Indian one-horned rhinoceros are the main attractions. This wildlife sanctuary present great biodiversity. ', '1628748217_guwahati-destination-img6.jpg', 1, 1, '2021-08-12 11:33:37', 0, NULL),
(126, 17, 'Namdapha National Park ', 'Namdapha National Park is located in Arunachal Pradesh and a popular place for any wildlife and nature lover. It is the home of some rare and endangered animal and plant species and presents a vibrant bio-diversity.', '1628750193_itanagar-destination-img5.jpg', 1, 1, '2021-08-12 12:06:33', 0, NULL),
(127, 17, 'Ziro Festival Of Music ', 'Ziro Music Festival is the most happening music festival of Arunachal Pradesh showcasing the talent of independent artists. This festival usually happens in the month of September.', '1628750193_itanagar-destination-img6.jpg', 1, 1, '2021-08-12 12:06:33', 0, NULL),
(128, 8, 'Mother House ', 'Mother House or Missionaries of Charity was established by Mother Teresa in 1950. Mother Teresa\'s Tomb is also in this house and allow the followers to pay their respect to Mother Teresa.', '1628752149_kolkata-destination-img6.jpg', 1, 1, '2021-08-12 12:39:09', 0, NULL),
(129, 8, 'Mother House ', 'Mother House or Missionaries of Charity was established by Mother Teresa in 1950. Mother Teresa\'s Tomb is also in this house and allow the followers to pay their respect to Mother Teresa.', '1628752295_kolkata-destination-img6.jpg', 0, 1, '2021-08-12 12:41:35', 1, '2021-08-12 12:42:12'),
(130, 19, 'Hazaratganj Market', 'Hazratganj Market is the central shopping district of Lucknow. Tourists visiting Lucknow visits these market atleast once. Hazratganj Market serves as Lucknow\'s central shopping arcade. ', '1628754977_lucknow-destination-img6.jpg', 1, 1, '2021-08-12 13:26:17', 1, '2021-08-25 17:43:02'),
(131, 20, 'Kareri Lake', 'Kareri Lake is another place to visit near Mcleodganj. Located in a high altitude Kareri Lake is a freshwater lake with crystal clear water. Beautiful pine trees surrounding the lake gives it a scenic view.', '1628764297_mcleodganj-destination-img6.jpg', 1, 1, '2021-08-12 16:00:36', 1, '2021-08-12 16:01:37'),
(132, 21, 'Mahananda Wildlife', 'Nestled between the Teesta and Mahananda rivers on the foothills of the Himalayas in the Darjeeling district, it is a reserved forest area.', '1628767244_siliguri-destination-img5.jpg', 1, 1, '2021-08-12 16:50:44', 0, NULL),
(133, 21, 'Mahananda Wildlife', 'Nestled between the Teesta and Mahananda rivers on the foothills of the Himalayas in the Darjeeling district, it is a reserved forest area.', '1628768807_siliguri-destination-img5.jpg', 0, 1, '2021-08-12 17:16:47', 1, '2021-08-12 17:17:21'),
(134, 21, 'Hong Kong Market', 'Located at the heart of Siliguri, the Hong Kong market is a must visit to buy foreign goods and international branded products like apparels, bags, beauty, footwear, watches and electronic gadgets. ', '1628768807_siliguri-destination-img6.jpg', 1, 1, '2021-08-12 17:16:47', 0, NULL),
(135, 22, 'Dolphin’s Nose', 'Located between Yarada and Gangavaram port in Visakhapatnam, the Dolphin\'s nose is a massive hill resembling the shape of the nose of an adult dolphin', '1628769394_vizag-destination-img1.jpg', 1, 1, '2021-08-12 17:26:34', 1, '2021-08-12 17:42:33'),
(136, 22, 'Dolphin’s Nose', 'Located between Yarada and Gangavaram port in Visakhapatnam, the Dolphin\'s nose is a massive hill resembling the shape of the nose of an adult dolphin', '1628769593_vizag-destination-img1.jpg', 0, 1, '2021-08-12 17:29:53', 1, '2021-08-12 17:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_regions`
--

CREATE TABLE `cyg_regions` (
  `id` int(11) NOT NULL,
  `region` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `meta_title` text COLLATE utf8_unicode_ci,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_regions`
--

INSERT INTO `cyg_regions` (`id`, `region`, `short_name`, `image`, `url`, `meta_description`, `meta_keywords`, `meta_title`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Asia', 'Asia', '1622878395_asia-map.jpg', '', 'Management Team of cygnett hotel &amp; resort in  Asia including its chairman, board of directors and other executive', '', 'Meet Our Asia Team - Cygnett Hotels &amp; Resorts', 1, '2021-06-05 13:03:15', 1, '2021-08-20 14:27:20', 1),
(2, 'Middle East', 'ME', '1622878423_me-map.jpg', '', '', '', '', 0, '2021-06-05 13:03:43', 1, '2021-06-18 12:10:11', 1),
(3, 'Africa', 'Africa', '1622878470_africa-map.jpg', '', 'Management Team of cygnett hotel &amp; resort in  Africa including its chairman, board of directors and other executive.', '', 'Meet Our Africa Team - Cygnett Hotels &amp; Resorts', 1, '2021-06-05 13:04:30', 1, '2021-08-20 14:20:36', 1),
(4, 'Europe', 'Europe', '1622878508_europe-map.jpg', '', 'Management Team of cygnett hotel &amp; resort in  Europe including its chairman, board of directors and other executive', '', 'Meet Our Europe Team - Cygnett Hotels &amp; Resorts', 1, '2021-06-05 13:05:08', 1, '2021-08-20 14:28:43', 1),
(5, 'India', 'India', '1629785627_india-map.jpg', '', 'Management Team of cygnett hotel &amp; resort in  India including its chairman, board of directors and other executive', '', 'Meet Our India Team - Cygnett Hotels &amp; Resorts', 1, '2021-06-18 12:31:29', 1, '2021-08-24 11:43:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_region_team_member_sequence`
--

CREATE TABLE `cyg_region_team_member_sequence` (
  `id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `sequence` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_region_team_member_sequence`
--

INSERT INTO `cyg_region_team_member_sequence` (`id`, `region_id`, `member_id`, `sequence`) VALUES
(26, 1, 20, '0'),
(27, 1, 29, '0'),
(1, 3, 20, '0'),
(4, 4, 21, '1'),
(5, 4, 22, '2'),
(6, 4, 23, '5'),
(7, 4, 24, '4'),
(8, 4, 25, '6'),
(9, 4, 26, '3'),
(10, 4, 27, '7'),
(15, 5, 2, '0'),
(16, 5, 3, '0'),
(24, 5, 28, '0');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_restaurants`
--

CREATE TABLE `cyg_restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cuisine` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cygnetture_dishes` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag_line` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `styling` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `logo_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_logo` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creative_element` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `meta_title` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_restaurants`
--

INSERT INTO `cyg_restaurants` (`id`, `name`, `cuisine`, `cygnetture_dishes`, `tag_line`, `styling`, `logo_image`, `secondary_logo`, `creative_element`, `video`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'K2K', '1,2,6', '2,3,6', 'Kabul To Kolkata Cuisine', 'k2k', '1613048455_k2k-logo.jpg', '1620366308_k3k-sec-logo.jpg', NULL, 'vdo', '&lt;p&gt;The Grand Trunk Road, one of Asia&rsquo;s most famous trade routes which was once the very lifeline of the Indian Subcontinent played a significant part in the historical magnificence of the region &ndash; in its cultural amalgamation, its economic metamorphoses, and most importantly, for us food connoisseurs at least, its culinary brilliance. It has witnessed the rise and fall of many a great empire since the 16th century, but what remains its legacy today and shall, perhaps, eternally be the sole remnant of its glorious past, is the collection of cuisine associated with it.&lt;/p&gt;&lt;p&gt;K2K, a Cygnett Hotels signature restaurant, traces the route from Kabul to Kolkata presenting a beautifully recreated culinary history of the road. The centuries old cuisines present a range of delicious offerings from the barbequed delights of Peshawar, the succulent kebabs of the Afghanistan and Awadh region to the sublime vegetarian repast of Varanasi &amp;amp; Punjab and ambrosial sweets of Bengal.&lt;/p&gt;&lt;p&gt;With emphasis on authenticity, our chefs play with the nuanced differences in the cuisines that are similar in some ways and varied in many to bring to the plate a flurry of flavours and aromas that cannot but delight.&lt;br&gt;&lt;/p&gt;', 'Top Bengali &amp; Afghani Restaurants Nearby Your Location | K2K - Serves Cuisines from Kabul to Kolkata', 'K2K, a Cygnett Hotels signature restaurant, serves cuisines from Kabul to Kolkata like barbequed delights of Peshawar, succulent kebabs of the Afghanistan and Awadh region, vegetarian repast of Varanasi &amp; Punjab &amp; ambrosial sweets of Bengal. ', '', 1, '2021-02-11 18:02:26', 1, '2021-08-20 14:48:29', 1),
(3, 'Kebab Sutra', '1,6', '7,1,8', 'Hub Of Kebabs', 'kebab-sutra', '1620366948_kebabsutra-pri-logo.jpg', '1620366948_kebabsutra-sec-logo.jpg', NULL, '', '&lt;p&gt;Whether adorning the silver platter of a royal repast or being devoured with a bit of bread by a commoner, the ubiquitous kebab has been relished across classes, cultures and cities for centuries. Our appreciation for these succulent pieces of bliss led to the creation of Kebab Sutra &ndash; The Hub of Kebabs. The Kebab Sutra experience is defined by pure sense indulgence: indulgence of taste through a delicately balanced profusion of flavors; indulgence of smell through the rich aroma of mingling spices; indulgence of sight through our presentation that is a veritable feast for the eyes; and the indulgence of touch through the soft, yielding texture of the kebabs.&lt;/p&gt;&lt;p&gt;Since the texture, flavor and aroma of a kebab fresh off the grill is unmatched, we use live grills to serve our guests melt-in-the-mouth kebabs. The choice of a kebab is a very personal one, thus we hand the reins, or rather the skewers, to our guests and ask them to prepare their own kebabs on the grills provided at their tables. The Kebab Sutra &lsquo;Bawarchis&rsquo; would be happy to assist you on your journey to creating the perfect kebab. Besides the live vegetarian and non-vegetarian grills, a grand buffet spread completes the journey of culinary satiation. Kebab Sutra also offers a range of aperitifs, liquor and wines, selected with great care, to make the perfect accompaniments to your meal.&lt;br&gt;&lt;/p&gt;', 'Kebab Sutra | Best Chicken &amp; Seekh Kebab Restaurants | Mughlai, North Indian', 'Kebab sutra, the hub Of Kebabs serves mughlai and north indian cuisines with a range of aperitifs, liquor and wines, a perfect accompaniment with the delicious platter of kebabs.', '', 1, '2021-05-07 11:25:48', 1, '2021-08-20 14:50:36', 1),
(4, 'Kaffe Lounge', '7', '11,5,12', 'Lounge. Unwind. Revel.', 'kaffe-lounge', '1620367361_kafeelounge-pri-logo.jpg', '1620367361_kafeelounge-sec-logo.jpg', NULL, '', '&lt;p&gt;Pausing to catch your breath and a bite in the middle of a busy day, grabbing a few minutes with a friend to share a juicy tidbit that just can&rsquo;t wait or just catching up on the latest news &ndash; all roads lead to Kaffe Lounge. The lively yet relaxed ambience allows intense conversations and reflective contemplation alike making it perfect for a quick pit stop or for many a lingering hour. The menu, fashioned to satisfy the most exacting coffee aficionados and tea connoisseurs, contains a variety of rare coffee blends and specialty teas along with a selection of scrumptious fresh bakery eats.&lt;br&gt;&lt;/p&gt;', 'Kaffee Lounge by Cygnett Hotels | Best Coffee Shops &amp; Lounge Nearby Your Location ', 'Visit Kaffe Lounge to unwind, revel and enjoy the relaxed ambience alongside the most exciting coffees &amp; tea with a selection of scrumptious fresh bakery eats.', '', 1, '2021-05-07 11:32:41', 1, '2021-08-20 14:49:43', 1),
(5, 'Metro Lounge', '8', '14,13,15', 'Tagline comes here', 'metro', '1620367893_metro-pri-logo.jpg', '1620367893_metro-sec-logo.jpg', NULL, '', '&lt;p&gt;Channeling the energy, the mood, the flavors and indeed the very spirit of some of the world&rsquo;s thriving metropolises, the Metro Lounge Bar brings you an experience that transcends boundaries and distance. New York. Paris. London. Berlin. Amsterdam. Milan. Barcelona. Tokyo. Seoul. Jakarta. Shanghai. Beijing. Bangkok. Hong Kong. Enjoy contemporary world music and sample signature cocktails and local delicacies from these cities. Laid-back and comfortable, it is perfect for pre-dinner drinks, post-party unwinding or just a casual night out with friends. Tell your travel agent to take a vacation; we&rsquo;re providing an escape hundreds of miles away with just a sip and a bite.&lt;/p&gt;&lt;p&gt;The friendly local pub, the unrivalled choice for after work drinks, game nights and just-a-beer cravings, has had a bit of a makeover. While retaining its casual and lively appeal, it gets a dash of international polish that transports you to an old English pub in London serving &lsquo;yerfavourite ale&rsquo; or a swanky modern pub in New York where the bartenders invent cocktails as the evening progresses, or any other vibrant metropolis that catches your fancy for the night! We&rsquo;re happy to provide, at least for an evening, an opportunity to leave that devil of a boss, the pesky clients or just the boredom of your routine to get a taste of an evening in Paris, perhaps?&lt;/p&gt;&lt;p&gt;Cities that never sleep; cities where the &lsquo;life&rsquo; in nightlife is literal; cities where nightfall only indicates that its time to get out and get going: to these cities, these electrifying hubs of nocturnal excitement, we invite you. New York. Paris. London. Berlin. Amsterdam. Milan. Barcelona. Tokyo. Seoul. Jakarta. Shanghai. Beijing. Bangkok. Hong Kong. Choose from the finest selection of wines, aperitifs, rare whiskies and exquisite cocktails that are signature favorites in these cities, and enjoy them with a wide and tantalizing variety of global delicacies. Entertainment forms an integral part of the Metro Nightclub experience with the best of popular music playing everyday, and regular performances by the country&rsquo;s best bands and international artists.&lt;br&gt;&lt;/p&gt;', 'Metro Lounge by Cygnett Hotels | Cocktail Lounge Bars Nearby Your Location  ', 'Metro Lounge Bar brings you an experience that&rsquo;s beyond par. Enjoy contemporary world music, signature cocktails and local delicacies from multiple cities. Explore a laid-back, comfortable environment and unwind with your friends all evening long.', '', 1, '2021-05-07 11:41:33', 1, '2021-08-20 14:51:55', 1),
(6, 'Mystic East', '4', '24,23', 'Oriental Cuisine', 'mystic-east', '1620368284_mysticeast-pri-logo.jpg', '1620368284_mysticeast-sec-logo.jpg', NULL, '', '&lt;p&gt;At the Mystic East, we take you on a journey through the lands of the great Orient that have captivated the imaginations of many a writer, poet and chef! Our pan Asian restaurant gives you a taste, literally, of the culinary treasures from the Far East to South East Asia. Our chefs unravel the best-kept secrets of Japan, China, Mongolia, Korea, Singapore, Thailand, Indonesia, Burma and Vietnam to give you a dining experience beyond compare. Be it the authentic Japanese Yakitori, the tantalizing Korean Bar-be-cue and Hot Pots, the delicious traditional Chinese specialties, the sizzling Thai Stir and Wok Fry, or the Mongolian Brazier just brimming with flavor, we&rsquo;re inviting all food enthusiasts to the mecca of Asian cuisine. Besides the favorite, some rarely spotted local Asian delicacies are included in the offering to make the culinary trip an authentic one.&lt;/p&gt;&lt;p&gt;The complexity and depth of the flavors in such a diverse offering can truly be appreciated under the guidance of our Master chefs. Our interactive kitchen concept allows you to witness the magic as an exquisite dish is prepared especially for you. Our chefs encourage you to participate in the process and customize the dishes, as much as authenticity will permit, to suit your tastes.&lt;/p&gt;&lt;p&gt;Our extensive collection of wines from across the world, chosen carefully for their ability to bring out the zest in the preparations, completes the experience. Our sommeliers are at your service to recommend pairings that will enhance the pleasure of your meal.&lt;br&gt;&lt;/p&gt;', 'Mystic East by Cygnett Hotels | Best Asian Restaurants Nearby Your Location  ', 'At Mystic East, get a taste of pan Asian cuisines and tantalize your taste buds with local Asian delicacies, authentic Japanese yakitori, Korean Barbecues and delicious traditional Chinese specialties. Enjoy liquor pairings that will enhance the pleasure of your meal.', '', 1, '2021-05-07 11:48:04', 1, '2021-08-20 14:53:00', 1),
(7, 'Tadka Roast', '1', '17,18,16', 'Spice Of Life', 'tadka-roast', '1620369840_tadkaroast-pri-logo.jpg', '1620369840_tadkaroast-sec-logo.jpg', NULL, '', '&lt;p&gt;A rich and heavy aroma follows the excited crackling and sizzling of mingling spices &ndash; few things hold more promise of delights to come than the quintessential Indian tadka. It can only really be rivaled by the roast, which has earned its place in history and culture all over the world for its uncanny ability to hit the right spot. The traditional Sunday Roast has resiliently held its position as a ritual that inspires as much anticipation and enthusiasm now as it did in 15th century Britain. Tadka Roast brings together the best of the East and the West in it&rsquo;s multi-cuisine offering featuring Indian and continental roasts and grills. Whether is it the simple but flavorful dal tadka, the all-time favorite tandoori chicken or the more adventurous rogan josh; they share pride of place in the menu with the old favourite, roast chicken, the roast lamb that just bursts with flavor in every bite, and the healthy yet delicious grilled fish&lt;br&gt;&lt;/p&gt;', 'Tadka Roast by Cygnett Hotels | Best Indian and Continental Roasts &amp; Grill Restaurants Nearby Your Location .', 'Tadka Roast brings together the best of the East and the West in it&rsquo;s multi-cuisine offering featuring Indian and continental roasts and grills. Explore a burst of flavors in every bite with your friends and family. ', '', 1, '2021-05-07 12:14:00', 1, '2021-08-20 14:54:22', 1),
(8, 'C Pavilion', '9', '20,3,22', 'All Day Dining', 'pavilion', '1620370933_pavilion-pri-logo.jpg', '1620370933_pavilion-sec-logo.jpg', NULL, '', '&lt;p&gt;Hotels, to mould itself into the perfect avatar for you. A simple mantra governs the Cygnett Pavillion spirit: reassuring comfort, great food and impeccable service. The lavish breakfast and dinner buffets occupy the pride of place in Cygnett Pavillion, offering a taste of the local flavours as well as the finest in global cuisine. Not to be overwhelmed or overlooked, the a la carte menu holds its own with its carefully curated selection of Indian, Oriental, Mediterranean and European dishes. The dynamic character of Cygnett Pavillion is reflected in its choice of music that changes with the moods of the day: light instrumentals in the mornings, jazz in the afternoons and lively, foot-tapping numbers in the evenings. For the musically un-inclined, a 42&rdquo; LCD, playing the sports event everyone cannot stop discussing or the current news, stands in as a worthy replacement. The ambience promotes relaxed lingering, and the hospitality wholeheartedly supports it.&lt;br&gt;&lt;/p&gt;', 'Cygnett Pavillion - All Day Dining\r\n', 'Savour lavish breakfast, dinner buffets and taste of local flavours with its carefully curated selection of Indian, Oriental, Mediterranean and European dishes at Cygnett Pavillion. ', '', 1, '2021-05-07 12:32:13', 1, '2021-08-23 17:29:00', 1),
(9, 'Gossip', '1,5,6', '20,19,6', 'Tagline will come here', 'gossip', '1627632480_gossip-pri-logo.jpg', '1627632480_gossip-sec-logo.jpg', NULL, '', '&lt;p&gt;This region of the hotel is a paradise for vegetarians. Its menu, especially designed by acclaimed chefs, has plenty of options to choose from. The menu provides a fascinating combination of traditional cuisines and tasty modern food items.&lt;br&gt;&lt;/p&gt;', '', '', '', 1, '2021-07-30 13:38:00', 1, '2021-07-30 13:42:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_restaurants_images`
--

CREATE TABLE `cyg_restaurants_images` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `banner_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_banner_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_restaurants_images`
--

INSERT INTO `cyg_restaurants_images` (`id`, `restaurant_id`, `banner_image`, `mobile_banner_image`, `is_active`, `added_by`, `added_on`, `updated_on`, `updated_by`) VALUES
(5, 1, '1619719280_dining1.jpg', '1621332080_dining1-mob.jpg', 1, 1, '2021-03-25 11:27:49', '2021-08-20 14:48:29', 1),
(6, 1, '1616651930_box-img2.jpg', '1616651930_box-img3.jpg', 0, 1, '2021-03-25 11:28:50', '2021-08-20 14:48:29', 1),
(7, 1, '1616651930_cozzet_amritsar_search_in_google.png', '1616651930_ekaviskin.png', 0, 1, '2021-03-25 11:28:50', '2021-08-20 14:48:29', 1),
(8, 3, '1620366948_dining1.jpg', '1621332100_dining1-mob.jpg', 1, 1, '2021-05-07 11:25:48', '2021-08-20 14:50:36', 1),
(9, 4, '1620367361_dining1.jpg', '1621332123_dining1-mob.jpg', 1, 1, '2021-05-07 11:32:41', '2021-08-20 14:49:43', 1),
(10, 5, '1620367893_dining1.jpg', '1621324897_dining1-mob.jpg', 1, 1, '2021-05-07 11:41:33', '2021-08-20 14:51:55', 1),
(11, 6, '1620368284_dining1.jpg', '1621332163_dining1-mob.jpg', 1, 1, '2021-05-07 11:48:04', '2021-08-20 14:53:00', 1),
(12, 7, '1620369840_dining1.jpg', '1621332184_dining1-mob.jpg', 1, 1, '2021-05-07 12:14:00', '2021-08-20 14:54:22', 1),
(13, 8, '1620370933_dining1.jpg', '1621332202_dining1-mob.jpg', 1, 1, '2021-05-07 12:32:13', '2021-08-23 17:29:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_room_amenities`
--

CREATE TABLE `cyg_room_amenities` (
  `id` int(11) NOT NULL,
  `room_amenity` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `image_icon` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_room_amenities`
--

INSERT INTO `cyg_room_amenities` (`id`, `room_amenity`, `image_icon`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(15, 'Free Wi-Fi', 'fa-check', 1, 1, '2021-05-21 23:40:23', NULL, NULL),
(17, '24-hour Room Service', 'fa-check', 1, 1, '2021-05-21 23:41:15', NULL, NULL),
(18, 'Smoking Room', 'fa-check', 1, 1, '2021-05-21 23:41:41', NULL, NULL),
(19, 'Daily Housekeeping', 'fa-check', 1, 1, '2021-05-21 23:41:58', NULL, NULL),
(20, 'Bathroom', 'fa-check', 1, 1, '2021-05-21 23:42:15', NULL, NULL),
(21, '24-hour In-room Dining', 'fa-check', 1, 1, '2021-05-21 23:42:33', NULL, NULL),
(22, 'Laundry Service', 'fa-check', 1, 1, '2021-05-21 23:42:49', NULL, NULL),
(23, 'Mineral Water', 'fa-check', 1, 1, '2021-05-21 23:43:03', NULL, NULL),
(24, 'Work Desk', 'fa-check', 1, 1, '2021-05-21 23:43:24', NULL, NULL),
(25, 'Reading Lamp', 'fa-check', 1, 1, '2021-05-21 23:43:45', NULL, NULL),
(26, 'Mini Fridge', 'fa-check', 1, 1, '2021-05-21 23:44:02', NULL, NULL),
(27, 'Mirror', 'fa-check', 1, 1, '2021-05-21 23:44:27', NULL, NULL),
(28, 'Blackout Curtains', 'fa-check', 1, 1, '2021-05-21 23:44:46', NULL, NULL),
(29, 'Intercom', 'fa-check', 1, 1, '2021-05-21 23:44:58', NULL, NULL),
(30, 'Blanket', 'fa-check', 1, 1, '2021-05-21 23:45:17', NULL, NULL),
(31, 'LED TV', 'fa-check', 1, 1, '2021-05-21 23:46:44', NULL, NULL),
(32, 'Electronic Safe', 'fa-check', 1, 1, '2021-05-21 23:47:27', NULL, NULL),
(33, 'Hairdryer', 'fa-check', 1, 1, '2021-05-21 23:47:44', NULL, NULL),
(34, 'Shower Cap', 'fa-check', 1, 1, '2021-05-21 23:48:07', NULL, NULL),
(36, 'Toiletries', 'fa-check', 1, 1, '2021-05-21 23:48:55', NULL, NULL),
(38, 'Satellite / Cable TV', 'fa-check', 1, 1, '2021-05-21 23:50:45', NULL, NULL),
(39, 'Bathrobes', 'fa-check', 1, 1, '2021-05-21 23:51:44', NULL, NULL),
(40, 'Tea/Coffee Making', 'fa-check', 1, 1, '2021-05-21 23:52:00', NULL, NULL),
(41, 'Couch', 'fa-check', 1, 1, '2021-05-21 23:52:48', NULL, NULL),
(42, 'Seating Area', 'fa-check', 1, 1, '2021-05-21 23:53:23', NULL, NULL),
(43, 'Newspaper', 'fa-check', 1, 1, '2021-05-21 23:57:59', NULL, NULL),
(44, 'Air Conditioning', 'fa-check', 1, 1, '2021-05-21 23:59:48', NULL, NULL),
(45, 'Shower Cubicle', 'fa-check', 1, 1, '2021-05-22 00:00:35', NULL, NULL),
(46, 'Dining Area', 'fa-check', 1, 1, '2021-05-22 00:01:37', NULL, NULL),
(47, 'Room Slippers', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(48, 'Fan', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(49, 'Daily Fruit Basket', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(50, 'Electronic Door Lock', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(51, 'Electric Kettle', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(52, 'Towels', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(53, 'Iron & ironing board', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(54, 'Mini Bar', 'fa-check', 1, 1, '2021-07-22 12:23:06', NULL, NULL),
(55, 'Non-Smoking Room', 'fa-check', 1, 1, '2021-07-22 12:24:04', NULL, NULL),
(56, 'Hot & cold running water', 'fa-check', 1, 1, '2021-07-22 12:55:03', NULL, NULL),
(57, 'Dental Kit', 'fa-check', 1, 1, '2021-07-22 14:27:17', NULL, NULL),
(58, 'Shaving Kit', 'fa-check', 1, 1, '2021-07-22 14:27:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_room_types`
--

CREATE TABLE `cyg_room_types` (
  `id` int(11) NOT NULL,
  `room_type` char(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyg_room_types`
--

INSERT INTO `cyg_room_types` (`id`, `room_type`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Deluxe Room', 1, '2021-08-10 14:04:44', 1, NULL, 0),
(2, 'Superior Room', 1, '2021-08-10 14:06:18', 1, NULL, 0),
(3, 'Club Room', 1, '2021-08-10 14:06:36', 1, NULL, 0),
(4, 'Suite', 1, '2021-08-10 14:06:56', 1, '2021-08-10 14:11:44', 1),
(5, 'Junior Suite', 1, '2021-08-10 14:07:20', 1, NULL, 0),
(6, 'Royal Suite', 1, '2021-08-10 14:07:40', 1, NULL, 0),
(7, 'Family Suite', 1, '2021-08-10 14:07:56', 1, NULL, 0),
(8, 'Family Room', 1, '2021-08-10 14:08:10', 1, NULL, 0),
(9, 'Executive Suite', 1, '2021-08-10 14:08:32', 1, NULL, 0),
(10, 'Royal Family Suite', 1, '2021-08-10 14:08:50', 1, NULL, 0),
(11, 'Royal Suite Duplex', 1, '2021-08-10 14:09:32', 1, NULL, 0),
(12, 'Standard Room', 1, '2021-08-10 14:10:26', 1, NULL, 0),
(13, 'Luxury Suite Room', 1, '2021-08-10 14:10:51', 1, NULL, 0),
(14, 'Premium Suite Room', 1, '2021-08-10 14:11:11', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_signature_dishes`
--

CREATE TABLE `cyg_signature_dishes` (
  `id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `dish_title` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `dish_description` text COLLATE utf8_unicode_ci NOT NULL,
  `dish_image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_signature_dishes`
--

INSERT INTO `cyg_signature_dishes` (`id`, `cuisine_id`, `dish_title`, `dish_description`, `dish_image`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 1, 'Kebab Hara Bhara', 'This Kebab is very special for all vegetarians. Hara Masala Kebab, as the name of the Kebab is suggesting itself is made with green paste.', '1619764916_cuisine-img1.jpg', 1, '2021-04-30 12:11:56', 1, NULL, 0),
(2, 6, 'Butter Chicken', 'Butter chicken is mouth-watering, tender chicken, cooked in a spiced tomato sauce. It&rsquo;s traditionally cooked in a tandoor.', '1620315260_butter-chicken.jpg', 1, '2021-05-06 21:04:20', 1, NULL, 0),
(3, 6, 'Rogan Josh', 'Rogan Josh or roghan ghosht, is an aromatic curried meat dish of Kashmiri origin. It is made with red meat, traditionally lamb or goat. It is coloured and flavored primarily by alkanet flower or root and Kashmiri chilies. It is one of the signature recipes of Kashmiri cuisine. Rogan Josh is rich with clarified butter, aromatic with spices like cinnamon, cloves, and cardamom, deep red in color because of paprika, and complex with a base flavor of onion, garlic, and ginger.', '1620315435_rogan-josh.jpg', 1, '2021-05-06 21:07:15', 1, '2021-08-16 15:34:28', 1),
(4, 1, 'Tandoori Chicken', 'Tandoori chicken is a popular North Indian dish consisting of roasted chicken prepared with yogurt and spices. ', '1620315635_tandoori-chicken.jpg', 1, '2021-05-06 21:10:35', 1, NULL, 0),
(5, 7, 'Masala Chai', 'There&rsquo;s nothing like the experience of stopping at a chaiwala on an Indian street and ordering a steaming cup of masala chai.', '1620315849_masala-tea.jpg', 1, '2021-05-06 21:14:09', 1, NULL, 0),
(6, 6, 'Shahi Paneer', 'Shahi Paneer is the most creamy paneer recipe that you can ever relish with naan or paratha. A very popular North Indian dish', '1620316643_shahi-paneer.jpg', 1, '2021-05-06 21:27:23', 1, '2021-05-07 11:29:25', 1),
(7, 1, 'Chicken Kebab', 'Chicken Kebabs are very famous as they are made using tandoor. This is the most popular Indian dish made using tandoor.', '1620317184_chicken-kebab.jpg', 1, '2021-05-06 21:36:24', 1, '2021-05-06 23:34:31', 1),
(8, 1, 'Seekh Kebab', 'Seekh Kebabs are very famous, and the addition of sesame seeds in the Kebab simply enhances the taste of the Kebab.', '1620317334_seekh-kebab.jpg', 1, '2021-05-06 21:38:54', 1, '2021-05-06 23:35:31', 1),
(9, 4, 'Chilli Chicken', 'Chilli chicken is probably most common Chinese dish readily available in all parts of the nation.', '1620317576_chilli-chicken.jpg', 1, '2021-05-06 21:42:56', 1, NULL, 0),
(10, 4, 'Chicken Chowmein', 'Chicken Chowmein is prepared by stir-frying the boiled Noodles with Soy Sauce, Vinegar', '1620321988_chowmein.jpg', 1, '2021-05-06 22:56:28', 1, NULL, 0),
(11, 7, 'Black Coffee', 'Black coffee is simply coffee that is normally brewed without the addition of additives such as sugar, milk, cream or added flavours.', '1620322285_black-coffee.jpg', 1, '2021-05-06 23:01:25', 1, NULL, 0),
(12, 7, 'Tulsi Green Tea', 'Served hot or iced, this green tea contains cinnamon and ginger with a touch of mint for a refreshing taste.', '1620322700_green-tea.jpg', 1, '2021-05-06 23:08:20', 1, NULL, 0),
(13, 8, 'Vieux Carre', 'Made with rye whiskey, cognac, sweet vermouth, B&eacute;n&eacute;dictine, and two styles of bitters, the Vieux Carre is divinely complex.', '1620323374_vieux-carre.jpg', 1, '2021-05-06 23:19:34', 1, NULL, 0),
(14, 8, 'Mint Julep', 'Mint Julep - Fresh mint, sugar, your favorite bourbon, and a little work with the muddler, and it\'s done.', '1620323535_mint-julep.jpg', 1, '2021-05-06 23:22:15', 1, NULL, 0),
(15, 8, 'Vodka Martini', 'Vodka-based martinis fill cocktail menus, and there is no shortage of recipes to mix up. A very popular cocktail.', '1620323790_vodka-martini.jpg', 1, '2021-05-06 23:26:30', 1, '2021-05-07 11:43:00', 1),
(16, 1, 'Tandoori Fish', 'One of the most common dishes across India is Tandoori Pomfret which takes to the marinade and charred smokey tandoor flavours  really well.', '1620369364_tandoori-fish.jpg', 1, '2021-05-07 12:06:04', 1, NULL, 0),
(17, 1, 'Chicken Kathi Roll', 'Chicken Kathi Roll is made with juicy chicken marinated in creamy yogurt and spices, then rolled up in a buttery, flaky paratha with peppers and onions', '1620369521_chicken-roll.jpg', 1, '2021-05-07 12:08:41', 1, NULL, 0),
(18, 1, 'Spicy Fried Chicken', 'Chicken parts get marinated in a spicy buttermilk mixture, and then fried in a skillet until crisp and golden brown', '1620369656_spicy-fried-chicken.jpg', 1, '2021-05-07 12:10:56', 1, NULL, 0),
(19, 6, 'Malai Kofta', 'Originated from the Mughlai cuisine, Malai refers to the cream that is added to the dish and Kofta are small balls that are made out of paneer.', '1620370296_malai-kofta.jpg', 1, '2021-05-07 12:21:36', 1, NULL, 0),
(20, 6, 'Dal Makhani', 'Dal Makhani is a classic Indian dish made with whole urad dal, rajma, butter and spices. It is one of the most popular lentil dishes originated in the Punjab region of India and Pakistan. Dal refers to lentils and makhani translates to buttery. Dal Makhani literally means buttery dal. Dal Makhani has now become the quintessential Indian dish with so many variations found in different regions of our country as well as abroad. ', '1620370580_dal-makhani.jpg', 1, '2021-05-07 12:26:20', 1, '2021-08-16 15:33:23', 1),
(21, 6, 'Chicken Tikka Masala', 'This dish is served in almost all over India, is one of the best Chicken dishes! This rich cuisine roasted chunks of chicken tikka in a gravy.', '1620370760_chicken-tikka-masala.jpg', 1, '2021-05-07 12:29:20', 1, NULL, 0),
(22, 4, 'Tandoori Malai Broccoli', 'Tandoori Malai Broccoli is really simple to make with some commonly available ingredients. Broccoli is tossed in a luscious marinade of hung curd and malai, and seasoned with some delectable spices. One can also use heavy cream instead of malai. This amazing tandoori snack is easy to make and looks great too with the final garnishing of grated cheese. The snack can be served with green chutney or tomato sauce on the side. ', '1629108885_tandoori-brocolli.jpg', 1, '2021-08-16 15:44:45', 1, NULL, 0),
(23, 4, 'Ginger Infused Chicken Dim Sum', 'Ginger infused chicken and herbs dim sum are closely associated with the teahouse culture of Hong Kong and Guangdong Province. Dim sum is a meal of small dishes served with tea from a variety of steamed and fried buns, dumplings and rolls. Dim sum is now a very popular dish around the world and China&rsquo;s most famous culinary exports.', '1629117942_dim-sum.jpg', 1, '2021-08-16 18:15:42', 1, NULL, 0),
(24, 4, 'Dragon Chicken', 'Dragon Chicken tops this list when it comes to fusion cuisine. Thin strips of boneless chicken are battered, fried and then saut&eacute;ed in a rich red sauce. This makes the dish a crispy one with authentic Chinese flavor. This is served as as an appetizer or as a side dish.', '1629117978_dragon-chicken.jpg', 1, '2021-08-16 18:16:18', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_states`
--

CREATE TABLE `cyg_states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyg_states`
--

INSERT INTO `cyg_states` (`id`, `name`, `country_id`) VALUES
(1, 'ANDHRA PRADESH', 105),
(2, 'ASSAM', 105),
(3, 'ARUNACHAL PRADESH', 105),
(4, 'BIHAR', 105),
(5, 'GUJRAT', 105),
(6, 'HARYANA', 105),
(7, 'HIMACHAL PRADESH', 105),
(8, 'JAMMU & KASHMIR', 105),
(9, 'KARNATAKA', 105),
(10, 'KERALA', 105),
(11, 'MADHYA PRADESH', 105),
(12, 'MAHARASHTRA', 105),
(13, 'MANIPUR', 105),
(14, 'MEGHALAYA', 105),
(15, 'MIZORAM', 105),
(16, 'NAGALAND', 105),
(17, 'ORISSA', 105),
(18, 'PUNJAB', 105),
(19, 'RAJASTHAN', 105),
(20, 'SIKKIM', 105),
(21, 'TAMIL NADU', 105),
(22, 'TRIPURA', 105),
(23, 'UTTAR PRADESH', 105),
(24, 'WEST BENGAL', 105),
(25, 'DELHI', 105),
(26, 'GOA', 105),
(27, 'PONDICHERY', 105),
(28, 'LAKSHDWEEP', 105),
(29, 'DAMAN & DIU', 105),
(30, 'DADRA & NAGAR', 105),
(31, 'CHANDIGARH', 105),
(32, 'ANDAMAN & NICOBAR', 105),
(33, 'UTTARANCHAL', 105),
(34, 'JHARKHAND', 105),
(35, 'CHATTISGARH', 105),
(36, 'Banke', 149),
(37, 'UTTARAKHAND', 105);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_team`
--

CREATE TABLE `cyg_team` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `salutation` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `profile` longtext COLLATE utf8_unicode_ci,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bd_image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '--',
  `position` int(11) NOT NULL DEFAULT '0',
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8_unicode_ci,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `is_mgmt` tinyint(1) NOT NULL,
  `is_intl` tinyint(1) NOT NULL,
  `is_advisory` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_team`
--

INSERT INTO `cyg_team` (`id`, `department_id`, `designation_id`, `salutation`, `job_title`, `first_name`, `middle_name`, `last_name`, `profile`, `image`, `mobile_image`, `bd_image`, `email`, `mobile`, `url`, `position`, `country`, `region`, `meta_title`, `meta_description`, `meta_keywords`, `is_mgmt`, `is_intl`, `is_advisory`, `is_active`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 4, 7, 'Mr.', 'Founder and Managing Director', 'Sarbendra', '', 'Sarkar', '&lt;p&gt;Sarbendra, a HM graduate, MBA, Executive Education and Professional Development Program from Cornell University, has 26 years of diversified hospitality management expertise, been associated with leading global hotel groups. His experience encompasses all aspects of the hotel operations, project development, business development and brand management.&lt;br&gt;&lt;br&gt;Sarbendra has established himself as a trusted \'turnaround expert\'; he enjoys the challenge of converting loss into profit. Having worked within the corporate structure of leading hotel companies, his immense knowledge is supported by very sound implementation capabilities in operations management, and project &amp;amp; site management. He is proficient in strategic planning, resource planning, conceptualization of unique food &amp;amp; beverage concepts, Budgeting and Control, Sales and Marketing Strategy, Human Resources Management with specialized Training Methodology and Relationship Management.&lt;br&gt;&lt;/p&gt;', '1623830889_sarbendra-sarkar.jpg', '1623830889_sarbendra-sarkar-mob.jpg', '', 's.sarkar@cygnetthotels.com', '', 'aaa', 1, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 13:38:09', 1, '2021-06-23 19:29:17', 1),
(2, 3, 3, 'Mrs.', 'Director Corporate Affairs', 'Barnali', '', 'Sarkar', '&lt;p&gt;Barnali Sarkar holds an impressive two decades of career in Finance and Corporate Management. In her inspiring career she has demonstrated her vast aptitude in handling Business Planning &amp;amp; Analysis, Budgeting, Investor Relation and OTA Management.&lt;br&gt;&lt;/p&gt;', '1623859793_barnali-sarkar.jpg', '1623859793_barnali-sarkar-mob.jpg', '1623999755_barnali-sarkar-bd.jpg', 's.barnali@cygnetthotels.com', '', 'barnali-sarkar', 2, '99', '5', '', '', '', 1, 0, 0, 1, '2021-06-16 16:12:31', 1, '2021-06-18 13:13:18', 1),
(3, 3, 3, 'Mr.', 'Director - Operations and Development', 'Ankur', '', 'Chandra', '&lt;p&gt;Ankur Chandra, an alumnus of IHM, Chennai has a vast experience in Operations and Development in brands like Starwood, Taj Hotels, Carlson and Royal Orchid Hotels. He is responsible to direct, administer and coordinate the internal operational activities of the Company in accordance with policies, strategies, and objectives established by the organization.&lt;/p&gt;&lt;p&gt;As a Development Leader Ankur manages all aspects of the development process of complex urban hotel development projects. This includes all phases of a development project including acquisition, management, leasing, and franchising.&lt;/p&gt;&lt;p&gt;A cricket enthusiast, Ankur is an avid reader.&lt;br&gt;&lt;/p&gt;', '1623865059_ankur-chandra.jpg', '1623865059_ankur-chandra-mob.jpg', '1623999877_ankur-chandra-bd.jpg', 'ankur.chandra@cygnetthotels.com', '', 'ankur-chandra', 3, '99', '5', '', '', '', 1, 0, 0, 1, '2021-06-16 23:07:39', 1, '2021-06-18 13:14:07', 1),
(4, 12, 3, 'Mr.', 'Corporate Financial Controller', 'Paramjeet', '', 'Singh', '&lt;p&gt;Paramjeet Singh brings with him an astral experience of 37 years in the industry with top brands like Hyatt Hotels in various capacities in Finance and Accounting.&lt;/p&gt;&lt;p&gt;A MS in Finance, Paramjeet is responsible for Corporate Finance, Accounts, MIS, Treasury, Taxation and Company Secretarial and legal matters. Operationally, he handles P&amp;amp;L and assists the company\'s decision makers in finalizing for performance targets and also collaborate with the them on the long-term planning.&lt;br&gt;&lt;/p&gt;', '1623866362_paramjeet-singh.jpg', '1623866362_paramjeet-singh-mob.jpg', '', 'test@cygnetthotels.com', '', 'paramjeet-singh', 9, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 23:26:19', 1, '2021-06-16 23:29:22', 1),
(5, 5, 2, 'Mr.', 'Corporate Learning & Culture', 'Siddharth', '', 'Guj', '&lt;p&gt;Siddharth Guj heads the Learning &amp;amp; Development and Human Resource Department and is responsible to manage employee development, training and policies at Cygnett Hotels while supporting cultural change management. An alumnus of IHM, Jaipur, in his overall professional journey for over two decades he has extended his expertise to several top esteemed hotel brands like Ananda In The Himalayas, ITC, Taj Hotels and diversified to Genpact to lead one of their Hospitality business.&lt;/p&gt;&lt;p&gt;A dog lover and cricket aficionado, Siddharth is an avid reader and a technology enthusiast and holds a Machine Learning certification.&lt;br&gt;&lt;/p&gt;', '1623868321_siddharth-guj.jpg', '1623868321_siddharth-guj-mob.jpg', '', 'Siddharth@cygnetthotels.com', '', 'siddharth-guj', 10, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 23:38:18', 1, '2021-06-17 00:02:01', 1),
(6, 1, 2, 'Mr.', 'Corporate Brand Manager', 'Harshit', '', 'Bandhu', '&lt;p&gt;Graduating from Domus Academy, Milan, in the Masters in Luxury Brand Management, Harshit also has firm foundations in Finance &amp;amp; Design. He has professional experiences as a Brand Manager, Business Analyst and Project Co-ordination with hospitality &amp;amp; fashion brands like Italian Hospitality Collection, Moncier &amp;amp; Krizia.&lt;br&gt;&lt;/p&gt;', '1623872134_harshit-bandhu.jpg', '1623872134_harshit-bandhu-mob.jpg', '', 'Harshit@cygnetthotels.com', '', 'harshit-bandhu', 11, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 23:45:29', 1, '2021-06-17 01:05:34', 1),
(8, 2, 2, 'Mr.', 'Area General Manager', 'Sandeep', '', 'Basu', '&lt;p&gt;Sandeep in his overall professional journey of over two decades has worked with brands like Park Hotels, ITC, Hyatt, and Sheraton. In his current role, Sandeep takes care of operations and development of hotels in East of India while handling operations for Kolkata hotel.&lt;br&gt;&lt;/p&gt;', '1623872341_sandeep-basu.jpg', '1623872341_sandeep-basu-mob.jpg', '', 'sandeep.basu@cygnetthotels.com', '', 'sandeep-basu', 12, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 23:52:29', 1, '2021-08-27 16:08:18', 1),
(9, 2, 2, 'Mr.', 'Area General Manager', 'Aniruddha', '', 'Banerjee', '&lt;p&gt;Aniruddha an alumnus of IIAS, Kolkata, in his overall professional journey for over two decades he has extended his proficiency to several top esteemed hotel brands like Radisson and Sarovar Hotels. In his current role, Aniruddha takes care of operations and development of hotels in North Eastern state of Assam and based out of Guwahati.&lt;br&gt;&lt;/p&gt;', '1623872388_aniruddha-banerjee.jpg', '1623872388_aniruddha-banerjee-mob.jpg', '', 'a.banerjee@cygnetthotels.com', '', 'aniruddha-banerjee', 14, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 23:55:09', 1, '2021-08-27 16:13:14', 1),
(10, 6, 2, 'Mr.', 'Revenue & Distribution Manager', 'Badrul', 'Huda', 'Khan', '&lt;p&gt;Badrul in his overall professional journey of over one and a half decade has worked with various prestigious travel agencies and hotels where he has honed his revenue and distribution skills. In his current role, Badrul takes care of Revenue management and online/offline distribution channels for all Cygnett hotels.&lt;br&gt;&lt;/p&gt;', '1623872436_badrul-khan.jpg', '1623872436_badrul-khan-mob.jpg', '', 'reservations@cygnetthotels.com', '', 'badrul-huda-khan', 16, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 23:57:45', 1, '2021-06-17 17:28:25', 1),
(11, 6, 2, 'Mr.', 'Central Reservation System - Manager', 'Rishi', '', 'Anand', '', '1623872489_rishi-anand.jpg', '1623872489_rishi-anand-mob.jpg', '', 'centralresevations@cygnetthotels.com', '+91 8595 4', 'rishi-anand', 17, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-16 23:59:50', 1, '2021-06-23 19:40:36', 1),
(12, 7, 2, 'Mr.', 'Information Technology - Manager', 'Hemchandra', '', 'Srivastav', '', '1623868572_hemchandra-srivastav.jpg', '1623868572_hemchandra-srivastav-mob.jpg', '', 'hem.chandra@cygnetthotels.com', '', 'hemchandra-srivastav', 18, '99', '', '', '', '', 1, 0, 0, 1, '2021-06-17 00:05:11', 1, '2021-06-23 19:41:25', 1),
(13, 7, 1, 'Mr.', 'Chief Technology Officer', 'Shyam', '', 'Bhethanabolta', '&lt;p&gt;&lt;b&gt;Experience - &lt;/b&gt;Shyam is an Integrated Doctoral program graduate from the University of Florida in Computer Science with strong technocommercial leadership experience in startups and MNC\'s. Shyam was President GLT, EVP Reliance Infocomm, and founder of Conmmsoft and Luxor Hotels. He possesses a rich experience in implementing AI, Analytics and Automation to improve the top line and bottom line at every stage of business.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Expertise -&lt;/b&gt; Shyam is a noted expert in AI, Automation and Next Generation Technologies and serves as a trusted advisor to a select group of leadingedge companies. His experience also spans propelling the On Demand economy and the aggregation market with more than ten platforms closely mentored worldwide.&lt;br&gt;&lt;/p&gt;', '1623868870_shyam-bhethanabolta.jpg', '1623868870_shyam-bhethanabolta-mob.jpg', '', 'Shyam@cygnetthotels.com', '', 'shyam-bhethanabolta', 2, '99', '', '', '', '', 0, 0, 0, 1, '2021-06-17 00:10:14', 1, '2021-06-17 00:11:10', 1),
(14, 2, 2, 'Mr.', 'Regional Sales Manager', 'Amit', '', 'Dutta', '', '1623870142_amit-dutta.jpg', '1623870142_amit-dutta-mob.jpg', '', 'amit.dutta@cygnetthotels.com', '', 'amit-dutta', 3, '99', '', '', '', '', 0, 0, 0, 1, '2021-06-17 00:12:49', 1, '2021-06-17 00:32:22', 1),
(15, 2, 2, 'Mr.', 'Regional Sales Manager', 'Amit', '', 'Jha', '', '1623870206_amit-jha.jpg', '1623870206_amit-jha-mob.jpg', '', 'amit.jha@cygnetthotels.com', '', 'amit-jha', 4, '99', '', '', '', '', 0, 0, 0, 1, '2021-06-17 00:23:25', 1, '2021-06-17 00:33:26', 1),
(16, 1, 2, 'Mrs.', 'Head, Creative & Designing', 'Mamta', '', 'Sharma', '', '1623870443_mamta-sharma.jpg', '1623870443_mamta-sharma-mob.jpg', '', 'Mamta@cygnetthotels.com', '', 'mamta-sharma', 5, '99', '', '', '', '', 0, 0, 0, 1, '2021-06-17 00:25:05', 1, '2021-06-17 00:37:23', 1),
(17, 10, 2, 'Mr.', 'Head, Legal Advisory Board', 'Rahul', '', 'Dhawan', '&lt;p&gt;Rahul Dhawan with over a decade and a half of work experience specialises in Corporate Commercial, Regulatory, Advisory &amp;amp; Strategy apart from Dispute Resolution related facets for a wide spectrum of clients including Multi-National Companies, Corporates, start up\'s, Private Equity Firms, Business Houses, Celebrities, Sportsmen &amp;amp; Sportswomen, HNI\'s and individual clients.&lt;br&gt;&lt;/p&gt;', '1623870985_rahul-dhawan.jpg', '1623870985_rahul-dhawan-mob.jpg', '', 'Rahul@cygnetthotels.com', '', 'rahul-dhawan', 6, '99', '', '', '', '', 0, 0, 0, 1, '2021-06-17 00:39:57', 1, '2021-06-17 00:46:25', 1),
(18, 11, 2, 'Mr.', 'Chief Architect and Design Officer', 'Vimal', '', 'Bajaj', '', '1623871079_vimal-bajaj.jpg', '1623871079_vimal-bajaj-mob.jpg', '', 'Vimal@cygnetthotels.com', '', 'vimal-bajaj', 7, '99', '', '', '', '', 0, 0, 0, 1, '2021-06-17 00:42:06', 1, '2021-06-17 00:47:59', 1),
(19, 11, 2, 'Mr.', 'Chief Interior and Designing Officer', 'Jitender', '', 'Garg', '', '1623871148_jitendra-garg.jpg', '1623871148_jitendra-garg-mob.jpg', '', 'Jitender@cygnetthotels.com', '', 'jitender-garg', 8, '99', '', '', '', '', 0, 0, 0, 1, '2021-06-17 00:44:27', 1, '2021-06-17 00:49:08', 1),
(20, 3, 4, 'Mr.', 'Vice President – Development & Operations - Asia and Africa', 'Roberto', '', 'Pelliccia', '&lt;p&gt;Roberto brings three decades of global progressive career in the hospitality industry and a wealth of extensive experience in operations, asset management, pre-opening and opening, re-branding and development.&lt;/p&gt;&lt;p&gt;He leads the Business Development &amp;amp; Operations across the Asian and African continents and is responsible to spearhead and increase Cygnett Hotels &amp;amp; Resorts footprint particularly in South East Asia and sub-Saharan Africa.&lt;/p&gt;&lt;p&gt;An alumnus of Cornell School of Hotel Administration, his experience has taken him on key assignments with a variety of hotel groups such as Intercontinental, Hilton, Sun, Kerzner SuperClubs, Meritus, Grace and Latitude across Europe, Middle East, Indian Ocean, Caribbean, South East Asia, China, North, Central and Latin America and Africa.&lt;/p&gt;&lt;p&gt;He has overseen the transformation of many businesses using commercial intelligence that encompasses all facets of the enterprise, reliably delivering impressive financial and productivity results, efficiency enhancement, operational excellence and partners/owners&rsquo; returns along with consistently exceeding their expectations.&lt;br&gt;&lt;/p&gt;', '1629784989_roberto-img.jpg', '1629784989_roberto-img-mob.jpg', '1629784989_roberto-img-bd.jpg', 'roberto.pelliccia@cygnetthotels.com', '', 'roberto-pelliccia', 4, '105', '3,1', '', '', '', 1, 0, 0, 1, '2021-06-17 12:04:36', 1, '2021-08-24 11:33:09', 1),
(21, 3, 6, 'Mr.', 'Regional Director – Europe', 'Peter', '', 'Dietze', '&lt;p&gt;Peter, a passionate and award-winning hotelier, combining Europe and Asia, has over 25 years of solid and extensive experience in international hospitality &amp;amp; brand management.&lt;/p&gt;&lt;p&gt;With a high level of professionalism and perfection, he is skilled in all facets of operational hotel management, as well as in related business- and project development.&lt;/p&gt;&lt;p&gt;Through controlled analytical visions and unerring concept implementation, combined with strategic location management as well as property-specific sales and marketing, Peter has already upgraded and successfully positioned various projects and businesses.&lt;/p&gt;&lt;p&gt;For him, success can be planned and so he is always focused and appreciates challenges in order to continuously optimize each location and business premises with a high degree of reliability.&amp;nbsp;&lt;br&gt;&lt;/p&gt;', '1623935214_peter.jpg', '1623935214_peter-mob.jpg', '1623999921_peter-bd.jpg', 'peter.dietze@cygnetthotels.com', '', 'peter-dietze', 7, '80', '4', '', '', '', 1, 0, 0, 1, '2021-06-17 12:18:15', 1, '2021-08-23 18:43:29', 1),
(22, 2, 6, 'Mr.', 'Business Development  Manager - D | A |CH | Europe', 'Ingo', '', 'Domaschke', '&lt;p&gt;Ingo, an international experienced hospitality leader, supporting with his extensive experience on a consultant bases, managing and overseeing hotel development and operations for upper upscale and lifestyle properties in Asia, Europe and the USA.&lt;/p&gt;&lt;p&gt;With his passion about leveraging influential leadership expertise to drive and to manage large, multi-functional teams achieving unfaltering operational excellence and outstanding profitability, he as well combines operational aspects with Cornell University Hotel Real Estate Investment and Asset Management background, supporting company&rsquo;s brand expansion in D | A |CH | Europe region.&lt;br&gt;&lt;/p&gt;', '1623924650_ingo-domaschke-mob.jpg', '1623924650_ingo-domaschke-mob.jpg', '', '', '', 'ingo-domaschke', 0, '80', '4', '', '', '', 0, 0, 0, 1, '2021-06-17 12:22:29', 1, '2021-08-24 12:38:10', 1),
(23, 5, 2, 'Mrs.', 'Talent & People Manager – D | A |CH | Europe', 'Dominique', '', 'Turner', '&lt;p&gt;Dominique is in her role a passionate and professional hotelier, with over 25 years of experience in the international hotel industry.&lt;/p&gt;&lt;p&gt;Through her experience in multicultural companies, she achieves the balancing act, due to her social skills and high empathy amongst all different cultures and is able to identify and develop the needs of the employees, developing them up to highest level.&lt;/p&gt;&lt;p&gt;For Dominique, supporting, working with and guiding employees and managers, is the key to a successful business result, creating in the filed of Human Resources a strong people asset value for the in the best interest of the company at D | A |CH | Europe region.&lt;br&gt;&lt;/p&gt;', '1623924716_dominique-turner.jpg', '1623924716_dominique-turner-mob.jpg', '', '', '', 'dominique-turner', 0, '80', '4', '', '', '', 0, 0, 0, 1, '2021-06-17 13:27:05', 1, '2021-08-24 12:41:59', 1),
(24, 4, 2, 'Mr.', 'Culinary and Quality Assurance  Manager - D | A |CH | Europe', 'Vedad', '', 'Hadziabdic', '&lt;p&gt;Vedad, Quality and Culinary head with more than 20 years of experience and strong proven background of different luxury hotels and awarded restaurants, combining competence, passion and attention to detail, inspiring all level of guest whilst focusing and balancing also the cost level for having culinary not only enjoyable as well also profitable. He will be supporting our partners in D | A |CH | Europe region in culinary and food &amp;amp; beverage aspects of hotels.&lt;/p&gt;&lt;p&gt;A highly recognized wine expert ranked amongst the best Sommeliers in Europe as well as awarded within the 50 TOP Sommeliers in Germany and nominated for 2 times in a raw to be one of the 3 best German Ma&icirc;tre.&lt;br&gt;&lt;/p&gt;', '1623924794_vedad-hadziabdic.jpg', '1623924794_vedad-hadziabdic-mob.jpg', '', '', '', 'vedad-hadziabdic', 0, '80', '4', '', '', '', 0, 0, 0, 1, '2021-06-17 13:30:12', 1, '2021-08-24 12:41:31', 1),
(25, 5, 2, 'Mrs.', 'PR & Marketing Manager - D | A |CH | Europe', 'Tijen', '', 'Karadag', '&lt;p&gt;Tijen Karadag is founder of TK Mediaberatung, Berlin.&lt;/p&gt;&lt;p&gt;Specialized in media consulting and executing TV, RADIO and print marketing campaigns. She is responsible in handling the marketing in D | A |CH | Europe region.&lt;/p&gt;&lt;p&gt;With overall rapid demand, the agency quickly developed and strengthened online marketing and is now strongly positioned within this segment, mastering social media marketing and classic public relation work.&lt;/p&gt;&lt;p&gt;In addition, Tijen Karadag works with two own influencing formats on TV, anchoring at tv.berlin in front as well behind the camera.&lt;br&gt;&lt;/p&gt;', '1623925195_tijen-karadag.jpg', '1623925195_tijen-karadag-mob.jpg', '', '', '', 'tijen-karadag', 0, '80', '4', '', '', '', 0, 0, 0, 1, '2021-06-17 13:33:52', 1, '2021-08-24 12:43:00', 1),
(26, 2, 2, 'Mr.', 'Business Development Manager - D | A |CH | Europe', 'Christopher', '', 'Schulz', '&lt;p&gt;Christopher, passionate about Sales and Development has strong experience about those fields for more now than 9 years within the D/A/CH Region.&lt;/p&gt;&lt;p&gt;During this time he was able to become great value to managing and operating hotel companies, achieving targets and exceeding goals.&lt;/p&gt;&lt;p&gt;Also with an BBA in Entrepreneurship and an MBA in Marketing, he consults now successfully companies, supporting them with the right actions at the right time, as well as connecting missing dots to achieve planed outcomes with strategical analysis to cater individual needs for each property and destination.&lt;br&gt;&lt;/p&gt;', '1623925611_christopher.jpg', '1623925611_christopher-mob.jpg', '', '', '', 'christopher-schulz', 0, '80', '4', '', '', '', 0, 0, 0, 1, '2021-06-17 13:36:46', 1, '2021-08-24 12:39:32', 1),
(27, 7, 2, 'Mr.', 'Digital Marketing Manager - D | A |CH | Europe', 'Jörn', '', 'Schuhner ', '&lt;p&gt;J&ouml;rn Sch&uuml;hner a recognized specialist in online brand development and marketing.&lt;/p&gt;&lt;p&gt;Being a Google specialist, he supports digital presence and developing strategies for the EU market, in the special disciplines SEO and SEA, being always focused about the sales target for creating most profitable and efficient marketing campaigns as well as brand development and optimizing the overall web presence in D | A |CH | Europe region.&lt;br&gt;&lt;/p&gt;', '1623926412_jorn-schuhner.jpg', '1623926412_jorn-schuhner-mob.jpg', '', '', '', 'jorn-schuhner', 0, '80', '4', '', '', '', 0, 0, 0, 1, '2021-06-17 13:40:18', 1, '2021-08-24 12:42:34', 1),
(28, 3, 3, 'Mr.', 'Area Development Director - North East', 'Prasun', '', 'Bhattacharya', '', '', '', '1627555405_prasun-bhattacharya.jpg', 'prasun.bhattacharya@cygnetthotels.com', '', 'prasun', 0, '99', '5', '', '', '', 0, 0, 0, 1, '2021-07-29 16:04:05', 1, '2021-07-29 16:13:25', 1),
(29, 3, 3, 'Mr.', 'Director Development,  Vietnam', 'Amir', 'Ahmad', 'Mohamad', '', '', '', '1630134747_amir-ahmad.jpg', 'michael.aamir@cygnetthotels.com', '', 'amir-ahmad', 0, '232', '1', '', '', '', 0, 0, 0, 1, '2021-08-28 12:35:56', 1, '2021-08-28 12:42:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cyg_team_member_highlights`
--

CREATE TABLE `cyg_team_member_highlights` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `highlights` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_team_member_highlights`
--

INSERT INTO `cyg_team_member_highlights` (`id`, `member_id`, `highlights`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 'Visionary', 1, 1, '2021-06-16 13:48:17', 1, '2021-06-23 19:29:17'),
(2, 1, 'Far Sighted', 1, 1, '2021-06-16 13:48:17', 1, '2021-06-23 19:29:17'),
(3, 1, 'Utopian', 1, 1, '2021-06-16 13:48:17', 1, '2021-06-23 19:29:17'),
(4, 1, 'Idealistic', 1, 1, '2021-06-16 13:48:17', 1, '2021-06-23 19:29:17'),
(5, 1, 'Strategist', 1, 1, '2021-06-16 13:48:17', 1, '2021-06-23 19:29:17'),
(6, 1, 'Leader', 1, 1, '2021-06-16 13:48:17', 1, '2021-06-23 19:29:17'),
(7, 2, 'People Oriented', 1, 1, '2021-06-16 16:14:26', 1, '2021-06-18 13:13:18'),
(8, 2, 'Success Driven', 1, 1, '2021-06-16 16:14:26', 1, '2021-06-18 13:13:18'),
(9, 2, 'Equitable', 1, 1, '2021-06-16 16:14:26', 1, '2021-06-18 13:13:18'),
(10, 2, 'Guide & Mentor', 1, 1, '2021-06-16 16:14:26', 1, '2021-06-18 13:13:18'),
(11, 3, 'Sports Fan', 1, 1, '2021-06-16 23:07:39', 1, '2021-06-18 13:14:07'),
(12, 3, 'Planner', 1, 1, '2021-06-16 23:07:39', 1, '2021-06-18 13:14:07'),
(13, 3, 'Quality Driven', 1, 1, '2021-06-16 23:07:39', 1, '2021-06-18 13:14:07'),
(14, 3, 'Accountable', 1, 1, '2021-06-16 23:07:39', 1, '2021-06-18 13:14:07'),
(15, 4, 'Coin Master', 1, 1, '2021-06-16 23:28:32', NULL, NULL),
(16, 4, 'Keen Planner', 1, 1, '2021-06-16 23:28:32', NULL, NULL),
(17, 4, 'Turnaround Investor', 1, 1, '2021-06-16 23:28:32', NULL, NULL),
(21, 5, 'Compassioned', 1, 1, '2021-06-16 23:38:18', 1, '2021-06-17 00:02:01'),
(22, 5, 'Problem Solver', 1, 1, '2021-06-16 23:38:18', 1, '2021-06-17 00:02:01'),
(23, 5, 'Tech Enthusiast', 1, 1, '2021-06-16 23:38:18', 1, '2021-06-17 00:02:01'),
(24, 6, 'Creative', 1, 1, '2021-06-16 23:45:29', 1, '2021-06-17 01:05:34'),
(25, 6, 'Analytical', 1, 1, '2021-06-16 23:45:29', 1, '2021-06-17 01:05:34'),
(26, 6, 'Performance Oriented', 1, 1, '2021-06-16 23:45:29', 1, '2021-06-17 01:05:34'),
(27, 20, 'Ethical Deal Maker', 1, 1, '2021-06-17 12:04:36', 1, '2021-08-24 11:33:09'),
(28, 20, 'Passionate', 1, 1, '2021-06-17 12:04:36', 1, '2021-08-24 11:33:09'),
(29, 20, 'Innovative', 1, 1, '2021-06-17 12:04:36', 1, '2021-08-24 11:33:09'),
(30, 21, 'Passionate Hotelier ', 1, 1, '2021-06-17 12:18:15', 1, '2021-08-23 18:43:29'),
(31, 21, 'Creativity', 1, 1, '2021-06-17 12:18:15', 1, '2021-08-23 18:43:29'),
(32, 21, 'Family Person', 1, 1, '2021-06-17 12:18:15', 1, '2021-08-23 18:43:29'),
(33, 21, 'Performance Oriented', 1, 1, '2021-06-17 12:18:15', 1, '2021-08-23 18:43:29'),
(34, 22, 'Pre-Opening', 1, 1, '2021-06-17 12:22:29', 1, '2021-08-24 12:38:10'),
(35, 22, 'Operational Excellen', 1, 1, '2021-06-17 12:22:29', 1, '2021-08-24 12:38:10'),
(36, 22, 'Financial Analyst', 1, 1, '2021-06-17 12:22:29', 1, '2021-08-24 12:38:10'),
(37, 23, 'Social Competence ', 1, 1, '2021-06-17 13:27:05', 1, '2021-08-24 12:41:59'),
(38, 23, 'Intercultural', 1, 1, '2021-06-17 13:27:05', 1, '2021-08-24 12:41:59'),
(39, 23, 'Personnel Management', 1, 1, '2021-06-17 13:27:05', 1, '2021-08-24 12:41:59'),
(40, 24, 'Service Excellence', 1, 1, '2021-06-17 13:30:12', 1, '2021-08-24 12:41:31'),
(41, 24, 'Team-Building', 1, 1, '2021-06-17 13:30:12', 1, '2021-08-24 12:41:31'),
(42, 24, 'Wine Culture', 1, 1, '2021-06-17 13:30:12', 1, '2021-08-24 12:41:31'),
(43, 25, 'Deal Maker', 1, 1, '2021-06-17 13:33:52', 1, '2021-08-24 12:43:00'),
(44, 25, 'Public Relations', 1, 1, '2021-06-17 13:33:52', 1, '2021-08-24 12:43:00'),
(45, 26, 'Passionate Sales Driver', 1, 1, '2021-06-17 13:36:46', 1, '2021-08-24 12:39:32'),
(46, 26, 'Performance', 1, 1, '2021-06-17 13:36:46', 1, '2021-08-24 12:39:32'),
(47, 26, 'Networker', 1, 1, '2021-06-17 13:36:46', 1, '2021-08-24 12:39:32'),
(48, 26, 'Focused', 1, 1, '2021-06-17 13:36:46', 1, '2021-08-24 12:39:32'),
(49, 26, 'Goal oriented', 1, 1, '2021-06-17 13:36:46', 1, '2021-08-24 12:39:32'),
(50, 27, 'Tech Savvy', 1, 1, '2021-06-17 13:40:18', 1, '2021-08-24 12:42:34'),
(51, 27, 'Sales', 1, 1, '2021-06-17 13:40:18', 1, '2021-08-24 12:42:34'),
(52, 22, 'P&L Analysis', 1, 1, '2021-06-23 16:48:41', 1, '2021-08-24 12:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `cyg_unit_guest_review`
--

CREATE TABLE `cyg_unit_guest_review` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `review_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `review_by` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `review_date` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `updated_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cyg_unit_guest_review`
--

INSERT INTO `cyg_unit_guest_review` (`id`, `hotel_id`, `review_text`, `review_by`, `image`, `review_date`, `added_by`, `added_on`, `updated_by`, `updated_on`, `is_active`) VALUES
(7, 14, 'No doubt...Its a Home, away from the Home...! It was a 6month stay at the hotel which was quite comfortable and ran smoothly even during the strict lockdown. Hotel management is taking good care and making necessary thing available for their guest. FML also strive hard to provide best services to us. House keeping staff always helped us to get thing readily available. Highly recommendable. Much stay! Thanks and best wishes.', 'Nitin T.', '1627905832_default-avatar-2020-36.jpg', 'June 2021', 1, '2021-08-02 17:33:52', 1, '2021-08-13 14:51:50', 1),
(6, 9, 'I have stayed in all hotels of Alwar & I can say this hotel have best rooms in Alwar. New hotel, big & clean rooms, luxurious amenities, good garden in front, tasty food. Bar will be operational in a short time. However I missed gym facility here', 'vikasgupta48', '1627901164_default-avatar-2020-24.jpg', 'August 2018', 1, '2021-08-02 16:16:04', 1, '2021-08-25 15:30:50', 1),
(5, 9, 'Visited Alwar with family recently and stayed @ Cygnett after checking a few properties. Though located on bypass road, the rooms were spacious & cozy, food was delicious & staff was courteous. Fully enjoyed our stay. Recommend to must visit City Palace/Moosi Maharani in evening (before sunset) for awesome photography.', 'SNJ', '1627900050_default-avatar-2020-42.jpg', 'October 2019', 1, '2021-08-02 15:57:30', 1, '2021-08-25 15:30:50', 1),
(4, 9, 'We stayed in this beautiful property for two nights during our trip to Alwar and I must say I never regretted my decision. This is brand new property with spacious and clean rooms and best part is its not located in chaotic city of Alwar and also not too far from Alwar. Chef there is wonderful and I have never tasted better Punjabi food any where in big hotels. The owner is Mr Gill who went out of his way to get just about anything from market for us', 'Caspru', '1627899312_caspru.jpg', 'October 2018', 1, '2021-08-02 15:45:12', 1, '2021-08-25 15:30:50', 1),
(8, 14, 'Cygnett Park Meghna, Bongaigaon is like a home away from home. I enjoyed staying there and will share my experience with my friends. All the staffs are very courteous and helpful. The ambiance of the hotel atmosphere is so pleasant that nobody can miss that. I also love the pool area which have a spectacular views of the surrounding greenery. The hotel also has a bar which offers different cocktails.', 'Rohan Singha', '1627905832_default-avatar-2020-65.jpg', 'April 2021', 1, '2021-08-02 17:33:52', 1, '2021-08-13 14:51:50', 1),
(9, 14, 'I stayed in this hotel as I was there for some office work. Hotel staff is polite and friendly. Hotel is new and good. Restaurant is also very good. I will surely stay here again. Although the location is far from main bongaigaon city.', 'Saurabh Kumar', '1627905832_default-avatar-2020-11.jpg', 'March 2021', 1, '2021-08-02 17:33:52', 1, '2021-08-13 14:51:50', 1),
(10, 11, 'Amazing hotel. Loved the service of the staff who go above and beyond to serve the best experience. Best good in Digha and by food I mean any style of cuisine. A special thanks to the chef for an amazing food and delicious dishes. Also one of the staff Milon who informed me about the review site. I loved the hotel service and the hospitality of the staff. I would recommend this place to everyone.', 'Arnab B', '1627906455_default-avatar-2020-10.jpg', 'July 2021', 1, '2021-08-02 17:44:15', 1, '2021-08-23 16:13:51', 1),
(11, 11, 'Good hotel and good behaviour also and food is normal but room was good and also given smart tv it\'s look good And the sea view slide not visible but i hope day by day its improve but as per govt order swimming pool was close its really heartbreaking', 'Pritam G', '1627906455_default-avatar-2020-69.jpg', 'July 2021', 1, '2021-08-02 17:44:15', 1, '2021-08-23 16:13:51', 1),
(12, 11, 'Beautiful property, gives you complete feel of Digha and royal sea. Very well kept grand gardens to stroll and while away time. Impeccable Service - Special Thanks to Ms.Dipti (at the reception), and Manager Mr.Animesh and Mr. Banerjee and many more un-named people -all of whom who went the extra mile to make sure all my family\'s needs are met. The food is extremely tasty. All in all, a ten on ten trip', 'Simi', '1627906455_default-avatar-2020-22.jpg', 'July 2021', 1, '2021-08-02 17:44:15', 1, '2021-08-23 16:13:51', 1),
(13, 13, 'We were stayed in Cygnett in during our family visit in Dwarka.The hotel is newly constructed with great ambiance in peaceful place in enterance of Dwarka.The rooms are neat and clean, well furnished, very spacious.The service is very fast. The food is very tasty and delicious.The morning buffet breakfast is very tasty and provide lots of variety.In total the value of money', 'kvpmehta2016', '1627906864_avatar.jpg', 'March 2020', 1, '2021-08-02 17:51:04', 0, NULL, 1),
(14, 13, 'Had a great stay here. The room was very spacious. It is right on the highway so easily accessible. Though not very close to dwarakadheesh temple, it is still within good driving distance. The staff was prompt and helpful. The food had a lot of variety and was quite tasty. Just one complaint, there was hardly any warm water for bathing. We got lukewarm water at best.', 'shruti p', '1627906864_default-avatar-2020-49.jpg', 'January 2020', 1, '2021-08-02 17:51:04', 0, NULL, 1),
(15, 13, 'I would like to appreciate the kind gesture of Rounak Pawar of Cygnett inn Dwarka. He is a true professional. Only because of him we enjoyed our stay at hotel without any hassle. I must say that our stay at Cygnett inn Dwarka was awesome.', 'yogesh b', '1627906864_default-avatar-2020-8.jpg', 'September 2019', 1, '2021-08-02 17:51:04', 0, NULL, 1),
(16, 15, 'Excellent hotel. Enjoyed our stay thoroughly. Very centrally located. View from room and balcony is awesome. Staff is very cordial and have made our stay very comfortable. Food in the restaurant was delicious. Would like to go back again and again.', 'Prabir Dasgupta', '1627907268_default-avatar-2020-36.jpg', 'April 2021', 1, '2021-08-02 17:57:48', 1, '2021-08-13 14:58:11', 1),
(17, 15, 'Had a very good stay with such good staff and very good locations . Had ordered food from room service and the taste was excellent . They have a very good roof top restaurant if you feel like staying back and hanging out I would definitely recommend it . Looking forward to my next trip .', 'Sushant lama', '1627907268_default-avatar-2020-27.jpg', 'April 2021', 1, '2021-08-02 17:57:48', 1, '2021-08-13 14:58:11', 1),
(18, 15, 'We stayed in the hotel for 3 days the hotel is very good meticulous attention is given for cleanliness and covid prevention. Ambience the food and service was excellent the manager Mr Devojit was extremely helpful. I will unhesitatingly recommend this hotel to anyone visiting Gangtok', 'Dr sudhakar limaye', '1627907268_default-avatar-2020-9.jpg', 'April 2021', 1, '2021-08-02 17:57:48', 1, '2021-08-13 14:58:11', 1),
(19, 17, 'Cygnett in celestial is one of the best hotels in Goa to stay Had an awesome time House keeping staff Munna Kumar is excellent at his work and very much appreciate the amazing services given Rupal and Neeta also are good at their work Keep up the good work cygnett I will be back soon !', 'Gaurav Malhotra', '1627908776_default-avatar-2020-23.jpg', 'April 2021', 1, '2021-08-02 18:22:56', 1, '2021-08-13 15:03:12', 1),
(20, 17, 'Its a top notch hotel. The staffs a very polite and helping. Rooms & Pool Clean. Cleaning staffs Excellent. We stayed for 4 nights and enjoyed every moment. Special mention for the General Manager Mr. Sahu & Neeta Madam at reception. All the best to you all. Will recomend all about Cygnett while they visit Goa.', 'Harsimran', '1627908776_default-avatar-2020-13.jpg', 'March 2021', 1, '2021-08-02 18:22:56', 1, '2021-08-13 15:03:12', 1),
(21, 17, 'We had excellent stay over cygnett , all the staff was very helpfull specially Ms Neeta and Rupal ... location is good beach is closeby and breakfast was also good thank you Cygnett team must visit their hotel .thank you once again..', 'Ravindra', '1627908776_default-avatar-2020-21.jpg', 'March 2021', 1, '2021-08-02 18:22:56', 1, '2021-08-13 15:03:12', 1),
(22, 16, 'It\'s very difficulty planning wedding of other states. We are live in Delhi, and wedding happen on Guwahati. Thanks Mr.Banerjee and all staff. Make my all task super essay and successful. Thank you Cygnett Inn Repose, Guwahati', 'Sudeepta', '1628158132_default-avatar-2020-18.jpg', 'March 2021', 1, '2021-08-05 15:38:52', 1, '2021-08-24 18:18:38', 1),
(23, 16, 'Location is in the middle of the city, the staff is very friendly, shout out to Shahdul. Cleanliness is spot on. Breakfast has plenty of options too. Covid related hygiene and sanitation has been taken care of. Highly recommended place to stay.', 'Amit Tank', '1628158132_default-avatar-2020-25.jpg', 'March 2021', 1, '2021-08-05 15:38:52', 1, '2021-08-24 18:18:38', 1),
(24, 16, 'Very good trip, Saidul Islam is very good guy and very cooperative, just a call away if u have any issue in 24*7. If you have any type of issue in hotel, u must contact this guy.... He is very helpful.', 'Vipan', '1628158323_default-avatar-2020-46.jpg', 'March 2021', 1, '2021-08-05 15:38:52', 1, '2021-08-24 18:18:38', 1),
(25, 18, 'Excellent service by FNB staff Mr Amaresh good service very good behaviour food quality is good and very good care taken by Amaresh .Raju from Front office is also good both of them I want to highlight for the excellent service . Thanks', 'John 144', '1628158668_default-avatar-2020-4.jpg', 'July 2021', 1, '2021-08-05 15:47:48', 1, '2021-08-13 15:05:34', 1),
(26, 18, 'I did not have a booking ,but landed up at Cygnet since I believe it\'s the best hotel in Itanagar .I have stayed there before ,and have always found the place clean and service outstanding. I was not disappointed although the hotel was running full, the front office manager Wazuddin was most helpful and got me a room.\r\nThe chef and others were also friendly, the food was good and our stay was extremely comfortable.', 'Amarnath Maitreyan', '1628158668_default-avatar-2020-10.jpg', 'January 2021', 1, '2021-08-05 15:47:48', 1, '2021-08-13 15:05:34', 1),
(27, 18, 'I would highly recommend the Cygnett Inn Trendz hotel at Itanagar. In my opinion, it is the best property in Itanagar, and trust me I have stayed at all the other hotels too in the past. The staff is extremely courteous and make your stay very comfortable and easy. We were a large party of 14 people and not one of us had any complaints. Highly recommend staying here if you ever visit Itanagar.', 'Nikhil Pai', '1628158668_default-avatar-2020-45.jpg', 'December 2020', 1, '2021-08-05 15:47:48', 1, '2021-08-13 15:05:34', 1),
(28, 20, 'This is the best hotel in category.. Beutiful rooms n ambience.. Very generous staff...cleanliness of the hotel is very up to mark...The food is perfectly delicious and almost near perfect in taste...', 'Dr. Prakash', '1628158998_default-avatar-2020-6.jpg', 'February 2021', 1, '2021-08-05 15:53:18', 0, NULL, 1),
(29, 20, 'Good and Co operative staff. Well maintained social distances and taken care of safety. Good food. Cleaned room. Sanitised floor. Covered TV remote and towels by plastic. Parking space also available.', 'suhelmalek99', '1628158998_default-avatar-2020-6.jpg', 'June 2020', 1, '2021-08-05 15:53:18', 0, NULL, 1),
(30, 20, 'Been coming here since it first opened and have never had any complaints.The food is fantastic and the staff are always friendly and helpful.we enjoyed the food. The quality of food is also good. Food is freshly cooked', 'Mukund', '1628158998_default-avatar-2020-63.jpg', 'February 2020', 1, '2021-08-05 15:53:18', 0, NULL, 1),
(31, 25, 'The stay was very comfortable,staff is superbly supportive,food is amazing (fish fingers to die for) from guard to reception to house keeping. Room is so nicely done. All and all complete fab stay. Hussain helped us to open bottles in room though its against their hotels policy. This lil thing proves they care for their customers.', 'Kanika T', '1628159460_default-avatar-2020-44.jpg', 'March 2021', 1, '2021-08-05 16:01:00', 0, NULL, 1),
(32, 25, 'Main prime location easy to access very nice staff all the time they served good food as well as good comfort personally i loved it my real opinion i visited 1st time n it was greatfull nice hospitality....', 'Vinayak R', '1628159460_default-avatar-2020-41.jpg', 'February 2020', 1, '2021-08-05 16:01:00', 0, NULL, 1),
(33, 25, 'Its a good hotel to stay, near city center and airport or railway station. Supportive staff. Nice and clean rooms. full amenities as shows. Breakfast is not so good as others. but overall good hotel to stay.', 'Abhinav Agarwal', '1628159460_default-avatar-2020-35.jpg', 'February 2020', 1, '2021-08-05 16:01:00', 0, NULL, 1),
(34, 21, 'Pleasant and safe stay during this pandemic, hotel staff are professional. nearest to the airport. Hygiene quality is maintain. Every one following the social distancing. Mr.Ashish at reception is very supportive. Taking care of good quality of stay for the best.', 'Rohit Mishra', '1628160330_default-avatar-2020-55.jpg', 'April 2021', 1, '2021-08-05 16:15:30', 1, '2021-08-13 15:09:12', 1),
(35, 21, 'Great experience with good food. As this is business stay. I always preferred make my trip or online fo booking. But during check out I meet front office guys and they give me front office manager detail for further booking. After check I got a call from reservations team,about stay feedback. It was nice stay need to work on housekeeping. Over all experience was nice.now I always book room directly in hotel. As rahul from reservations promises me to give me a good room with good rates. Thanks to all food was also good.', 'Traverls lover', '1628160330_default-avatar-2020-36.jpg', 'April 2021', 1, '2021-08-05 16:15:30', 1, '2021-08-13 15:09:12', 1),
(36, 21, 'It\'s really awesome Experience at cygnett .The location is near to airport .The services were quite good .Room were spacious and comfortable .Food was very tasty Chef Prashant is very kind .Special thanks to front desk staff they all are very cooperative specially thanks to Ms Priya. I will sure want to visit back again.', 'Mahendra Pratap', '1628160330_default-avatar-2020-6.jpg', 'April 2021', 1, '2021-08-05 16:15:30', 1, '2021-08-13 15:09:12', 1),
(37, 22, 'The hospitality is amazing and very comfortable. The staff is very polite and professional and provide amazing service. The hotel boasts a great view of the valley and the scenic beauty from the rooms is beyond compare. A must visit place.', 'Parikshit ', '1628160920_default-avatar-2020-29.jpg', 'July 2021', 1, '2021-08-05 16:25:20', 1, '2021-08-13 15:12:34', 1),
(38, 22, 'Great hotel with good service. All employees are really helpful and polite. Location of the hotel is also near all good cafe\'s and view from balcony is just magical. Great stay must visit cygnett style.', 'Armaan', '1628160920_default-avatar-2020-61.jpg', 'July 2021', 1, '2021-08-05 16:25:20', 1, '2021-08-13 15:12:34', 1),
(39, 22, 'Had a great time at signature inn balcony view is amazing. Staff is very cooperative . Suitable for children visit. Love the hospitality I will surely recommend this hotel. Terrace view is awesome. Staff is also very helpful.', 'Naveen', '1628160920_default-avatar-2020-10.jpg', 'July 2021', 1, '2021-08-05 16:25:20', 1, '2021-08-13 15:12:34', 1),
(40, 4, 'The rooms were very good and spacious. We booked suite room. Food was great as well. The service and hospitality was great. Especially Nadeem and Kanhaiya at front office were very helpful and Laxman who manages the restaurant was very polite.', 'Ishan', '1628161584_default-avatar-2020-19.jpg', 'August 2021', 1, '2021-08-05 16:36:24', 1, '2021-08-28 14:08:33', 1),
(41, 4, 'It was good staying great night food was great and staff was welcoming and rooms Were clean there was a clean swimming pool with children activities and we all had fun staying in CYGNNETT RESORT MOUNTAIN BREEZE.', 'Tanveer Sharma', '1628161584_default-avatar-2020-43.jpg', 'August 2021', 1, '2021-08-05 16:36:24', 1, '2021-08-28 14:08:33', 1),
(42, 4, 'My vacation was so comfy and relaxed just because i choose the right resort, We were there for 4 days and we booked family suites and trust me you don\'t need to leave the resort it has various sports and adventure. They have and amazing team containing trained driver for pick up and drop-off, wonderful room service and Mr.Laxman at the restaurant! Marvelous food and the kindest of them all, he served us as family. It was an memorizing vacation, highly recomended, if you are going to Nanital trust me choose them blindly, I guarantee', 'Ansh Sadh', '1628161584_default-avatar-2020-4.jpg', 'July 2021', 1, '2021-08-05 16:36:24', 1, '2021-08-28 14:08:33', 1),
(43, 26, 'Good service and food. While I am in Nepalgunj I always stay in Cygnett. The staff are cordial and welcoming. The rooms are clean and spacious with good amenities. It is also accessible. 10 minutes drive from the airport. I would recommend to stay here.', 'DiptiHS', '1628161966_default-avatar-2020-17.jpg', 'December 2019', 1, '2021-08-05 16:42:46', 0, NULL, 1),
(44, 26, 'The Hotel is located in a convenient place and is truly a class hotel. Food is good and has lot of choices. Rooms are compact but well maintained with all facilities. Suites are spacious and maintained very well. Service is also Good Best stay assured in Nepalgunj.', 'G R AKADAS', '1628161966_akadas.jpg', 'July 2019', 1, '2021-08-05 16:42:46', 0, NULL, 1),
(45, 26, 'We went there for dinner and the Head Chef cane to greet us at random and asked us if we were enjoying the food.\r\nhe asked if we would like anything that is not on the menu and I asked him to make some prawn dim-sum, VOILA! he made them and they were good. All food that was out of kitchen was really good, Chef Kushal, HATS OFF TO YOU! one of the great food we ever had !!', 'Subash Poudyal', '1628161967_tipplersnepal.jpg', 'June 2018', 1, '2021-08-05 16:42:47', 0, NULL, 1),
(46, 23, 'I have been using Cygnett Siliguri from last 1 year now. Hotel is centrally located near to shopping area’s...service is excellent and food is delicious...staff is very professional and well trained. GM(Avinash Shukla) of the hotel is also one reason to stay here very efficient and proactive for customers.', 'VICTORS1209', '1628162628_avatar038.jpg', 'April 2021', 1, '2021-08-05 16:53:48', 1, '2021-08-13 15:18:52', 1),
(47, 23, 'I visited here in march. Definitely a best place to be in. Hospitality is up to the mark. All the precaution measure were taken to make us feel safe. And the dedication of staff towards guest were awesome', 'vineet', '1628162628_default-avatar-2020-20.jpg', 'March 2021', 1, '2021-08-05 16:53:48', 1, '2021-08-13 15:18:52', 1),
(48, 23, 'Excellent rooms and services, reasonable price, good facilities, polite behaviour from check-in to check-out specially Mr. Avinash Shukla. I used to see him during breakfast on regular basis. Food and restaurant ambience was good, close to the natural beauty. Overall memorable stay.', 'Suraj K ', '1628162628_suraj-k.jpg', 'March 2021', 1, '2021-08-05 16:53:48', 1, '2021-08-13 15:18:52', 1),
(49, 24, 'Stayed for almost two months for business purpose. Best hotel in Vizag near pharma city. Staff are so professional and food quality and taste are quite good. Room ambience is best in the budget hotels.', 'Satya P', '1628162871_satya-p.jpg', 'January 2019', 1, '2021-08-05 16:57:51', 1, '2021-08-13 15:21:08', 1),
(50, 24, 'Staff including the manager gave me and my family an excellent service. The Room was in good condition, but breakfast needs to be improved without giving the same menu every day. Housekeeping is good.', 'Lal F', '1628162871_default-avatar-2020-17.jpg', 'January 2018', 1, '2021-08-05 16:57:51', 1, '2021-08-13 15:21:08', 1),
(51, 24, 'Wonderful hospitality. Neat clean and comfortable. Location is a little remote, but otherwise fantastic.\r\nHad reached the hotel past 11 pm, thanks to a delayed flight. The restaurant manager was very kind to arrange a dinner so late. Special thanks for that!', 'S1B2014', '1628162871_default-avatar-2020-24.jpg', 'November 2018', 1, '2021-08-05 16:57:51', 1, '2021-08-13 15:21:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHATTISGARH'),
(7, 'CHANDIGARH'),
(8, 'DAMAN AND DIU'),
(9, 'DELHI'),
(10, 'DADRA AND NAGAR HAVELI'),
(11, 'GOA'),
(12, 'GUJARAT'),
(13, 'HIMACHAL PRADESH'),
(14, 'HARYANA'),
(15, 'JAMMU AND KASHMIR'),
(16, 'JHARKHAND'),
(17, 'KERALA'),
(18, 'KARNATAKA'),
(19, 'LAKSHADWEEP'),
(20, 'MEGHALAYA'),
(21, 'MAHARASHTRA'),
(22, 'MANIPUR'),
(23, 'MADHYA PRADESH'),
(24, 'MIZORAM'),
(25, 'NAGALAND'),
(26, 'ORISSA'),
(27, 'PUNJAB'),
(28, 'PONDICHERRY'),
(29, 'RAJASTHAN'),
(30, 'SIKKIM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_carousel_imaages`
--
ALTER TABLE `brand_carousel_imaages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `brand_category`
--
ALTER TABLE `brand_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_admin`
--
ALTER TABLE `cyg_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_bed_types`
--
ALTER TABLE `cyg_bed_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_brands`
--
ALTER TABLE `cyg_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_brand_banners`
--
ALTER TABLE `cyg_brand_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `cyg_brand_key_pointers`
--
ALTER TABLE `cyg_brand_key_pointers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `cyg_cities`
--
ALTER TABLE `cyg_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_country`
--
ALTER TABLE `cyg_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_cuisines`
--
ALTER TABLE `cyg_cuisines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_departments`
--
ALTER TABLE `cyg_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_designation`
--
ALTER TABLE `cyg_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_facilities`
--
ALTER TABLE `cyg_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `cyg_guests_review`
--
ALTER TABLE `cyg_guests_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_home_banners`
--
ALTER TABLE `cyg_home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_hotels`
--
ALTER TABLE `cyg_hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand` (`brand`,`location`),
  ADD KEY `country` (`country`),
  ADD KEY `state` (`state`),
  ADD KEY `custom_url` (`custom_url`);
ALTER TABLE `cyg_hotels` ADD FULLTEXT KEY `hotel_name` (`hotel_name`);

--
-- Indexes for table `cyg_hotels_gallery`
--
ALTER TABLE `cyg_hotels_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `sequence` (`sequence`);

--
-- Indexes for table `cyg_hotel_category`
--
ALTER TABLE `cyg_hotel_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_hotel_facilities`
--
ALTER TABLE `cyg_hotel_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`facility_id`),
  ADD KEY `hotel_id_2` (`hotel_id`,`facility_id`);

--
-- Indexes for table `cyg_hotel_inclusions`
--
ALTER TABLE `cyg_hotel_inclusions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inclusions` (`inclusions`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `cyg_hotel_mails`
--
ALTER TABLE `cyg_hotel_mails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `cyg_hotel_meeting_events`
--
ALTER TABLE `cyg_hotel_meeting_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`meeting_event_id`);

--
-- Indexes for table `cyg_hotel_meeting_events_images`
--
ALTER TABLE `cyg_hotel_meeting_events_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`meeting_event_id`);

--
-- Indexes for table `cyg_hotel_nearby`
--
ALTER TABLE `cyg_hotel_nearby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `cyg_hotel_offers`
--
ALTER TABLE `cyg_hotel_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`master_offer_id`);

--
-- Indexes for table `cyg_hotel_offer_banner_images`
--
ALTER TABLE `cyg_hotel_offer_banner_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`offer_id`);

--
-- Indexes for table `cyg_hotel_offer_details`
--
ALTER TABLE `cyg_hotel_offer_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`offer_id`);

--
-- Indexes for table `cyg_hotel_other_policies`
--
ALTER TABLE `cyg_hotel_other_policies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `cyg_hotel_page_category_banners`
--
ALTER TABLE `cyg_hotel_page_category_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`page_category_id`);

--
-- Indexes for table `cyg_hotel_page_category_meta`
--
ALTER TABLE `cyg_hotel_page_category_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`page_category_id`);

--
-- Indexes for table `cyg_hotel_page_category_others`
--
ALTER TABLE `cyg_hotel_page_category_others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`page_category_id`);

--
-- Indexes for table `cyg_hotel_page_images`
--
ALTER TABLE `cyg_hotel_page_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`page_category_id`);

--
-- Indexes for table `cyg_hotel_phones`
--
ALTER TABLE `cyg_hotel_phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `cyg_hotel_restaurant`
--
ALTER TABLE `cyg_hotel_restaurant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotel_id` (`hotel_id`,`restaurant_id`);

--
-- Indexes for table `cyg_hotel_restaurant_contact`
--
ALTER TABLE `cyg_hotel_restaurant_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_hotel_restaurant_enquiry`
--
ALTER TABLE `cyg_hotel_restaurant_enquiry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`restaurant_id`,`reservation_date`,`received_datetime`,`customer_contacted`);

--
-- Indexes for table `cyg_hotel_restaurant_images`
--
ALTER TABLE `cyg_hotel_restaurant_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`restaurant_id`);

--
-- Indexes for table `cyg_hotel_rooms`
--
ALTER TABLE `cyg_hotel_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `room_name_2` (`room_name`);
ALTER TABLE `cyg_hotel_rooms` ADD FULLTEXT KEY `room_name` (`room_name_old`,`room_description`);

--
-- Indexes for table `cyg_hotel_room_images`
--
ALTER TABLE `cyg_hotel_room_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `cyg_hotel_room_inclusions`
--
ALTER TABLE `cyg_hotel_room_inclusions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`,`room_id`,`inclusion_id`);

--
-- Indexes for table `cyg_hotel_social`
--
ALTER TABLE `cyg_hotel_social`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `cyg_inclusions`
--
ALTER TABLE `cyg_inclusions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `cyg_job_posts`
--
ALTER TABLE `cyg_job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_job_posts_application_tracker`
--
ALTER TABLE `cyg_job_posts_application_tracker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `job_id_2` (`job_id`),
  ADD KEY `date_received` (`date_received`);

--
-- Indexes for table `cyg_location`
--
ALTER TABLE `cyg_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location` (`location`),
  ADD KEY `custom_url` (`custom_url`);

--
-- Indexes for table `cyg_location_images`
--
ALTER TABLE `cyg_location_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `cyg_media_news`
--
ALTER TABLE `cyg_media_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_meetingevents`
--
ALTER TABLE `cyg_meetingevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_navigation`
--
ALTER TABLE `cyg_navigation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `cyg_navigation_banners`
--
ALTER TABLE `cyg_navigation_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigation_id` (`navigation_id`);

--
-- Indexes for table `cyg_navigation_roll_over_details`
--
ALTER TABLE `cyg_navigation_roll_over_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigation_id` (`navigation_id`);

--
-- Indexes for table `cyg_news`
--
ALTER TABLE `cyg_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_offers`
--
ALTER TABLE `cyg_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_offers_banners`
--
ALTER TABLE `cyg_offers_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `cyg_page_category`
--
ALTER TABLE `cyg_page_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_places_to_visit`
--
ALTER TABLE `cyg_places_to_visit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `cyg_regions`
--
ALTER TABLE `cyg_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `cyg_region_team_member_sequence`
--
ALTER TABLE `cyg_region_team_member_sequence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`,`member_id`,`sequence`);

--
-- Indexes for table `cyg_restaurants`
--
ALTER TABLE `cyg_restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_restaurants_images`
--
ALTER TABLE `cyg_restaurants_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `cyg_room_amenities`
--
ALTER TABLE `cyg_room_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_room_types`
--
ALTER TABLE `cyg_room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_signature_dishes`
--
ALTER TABLE `cyg_signature_dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cuisine_id` (`cuisine_id`);

--
-- Indexes for table `cyg_states`
--
ALTER TABLE `cyg_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyg_team`
--
ALTER TABLE `cyg_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `designation_id` (`designation_id`),
  ADD KEY `region` (`region`,`is_mgmt`,`is_intl`,`is_active`),
  ADD KEY `url` (`url`);

--
-- Indexes for table `cyg_team_member_highlights`
--
ALTER TABLE `cyg_team_member_highlights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `cyg_unit_guest_review`
--
ALTER TABLE `cyg_unit_guest_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_carousel_imaages`
--
ALTER TABLE `brand_carousel_imaages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `brand_category`
--
ALTER TABLE `brand_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cyg_admin`
--
ALTER TABLE `cyg_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cyg_bed_types`
--
ALTER TABLE `cyg_bed_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cyg_brands`
--
ALTER TABLE `cyg_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cyg_brand_banners`
--
ALTER TABLE `cyg_brand_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cyg_brand_key_pointers`
--
ALTER TABLE `cyg_brand_key_pointers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyg_country`
--
ALTER TABLE `cyg_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `cyg_cuisines`
--
ALTER TABLE `cyg_cuisines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cyg_departments`
--
ALTER TABLE `cyg_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cyg_designation`
--
ALTER TABLE `cyg_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cyg_facilities`
--
ALTER TABLE `cyg_facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `cyg_guests_review`
--
ALTER TABLE `cyg_guests_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cyg_home_banners`
--
ALTER TABLE `cyg_home_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cyg_hotels`
--
ALTER TABLE `cyg_hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cyg_hotels_gallery`
--
ALTER TABLE `cyg_hotels_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `cyg_hotel_category`
--
ALTER TABLE `cyg_hotel_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cyg_hotel_facilities`
--
ALTER TABLE `cyg_hotel_facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3725;

--
-- AUTO_INCREMENT for table `cyg_hotel_inclusions`
--
ALTER TABLE `cyg_hotel_inclusions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyg_hotel_mails`
--
ALTER TABLE `cyg_hotel_mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cyg_hotel_meeting_events`
--
ALTER TABLE `cyg_hotel_meeting_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cyg_hotel_meeting_events_images`
--
ALTER TABLE `cyg_hotel_meeting_events_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cyg_hotel_nearby`
--
ALTER TABLE `cyg_hotel_nearby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `cyg_hotel_offers`
--
ALTER TABLE `cyg_hotel_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `cyg_hotel_offer_banner_images`
--
ALTER TABLE `cyg_hotel_offer_banner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `cyg_hotel_offer_details`
--
ALTER TABLE `cyg_hotel_offer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyg_hotel_other_policies`
--
ALTER TABLE `cyg_hotel_other_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `cyg_hotel_page_category_banners`
--
ALTER TABLE `cyg_hotel_page_category_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `cyg_hotel_page_category_meta`
--
ALTER TABLE `cyg_hotel_page_category_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `cyg_hotel_page_category_others`
--
ALTER TABLE `cyg_hotel_page_category_others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyg_hotel_page_images`
--
ALTER TABLE `cyg_hotel_page_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyg_hotel_phones`
--
ALTER TABLE `cyg_hotel_phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `cyg_hotel_restaurant`
--
ALTER TABLE `cyg_hotel_restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cyg_hotel_restaurant_contact`
--
ALTER TABLE `cyg_hotel_restaurant_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `cyg_hotel_restaurant_enquiry`
--
ALTER TABLE `cyg_hotel_restaurant_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cyg_hotel_restaurant_images`
--
ALTER TABLE `cyg_hotel_restaurant_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cyg_hotel_rooms`
--
ALTER TABLE `cyg_hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cyg_hotel_room_images`
--
ALTER TABLE `cyg_hotel_room_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cyg_hotel_room_inclusions`
--
ALTER TABLE `cyg_hotel_room_inclusions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2101;

--
-- AUTO_INCREMENT for table `cyg_hotel_social`
--
ALTER TABLE `cyg_hotel_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cyg_inclusions`
--
ALTER TABLE `cyg_inclusions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyg_job_posts`
--
ALTER TABLE `cyg_job_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cyg_job_posts_application_tracker`
--
ALTER TABLE `cyg_job_posts_application_tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cyg_location`
--
ALTER TABLE `cyg_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cyg_location_images`
--
ALTER TABLE `cyg_location_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cyg_media_news`
--
ALTER TABLE `cyg_media_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cyg_meetingevents`
--
ALTER TABLE `cyg_meetingevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cyg_navigation`
--
ALTER TABLE `cyg_navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cyg_navigation_banners`
--
ALTER TABLE `cyg_navigation_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cyg_navigation_roll_over_details`
--
ALTER TABLE `cyg_navigation_roll_over_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cyg_news`
--
ALTER TABLE `cyg_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyg_offers`
--
ALTER TABLE `cyg_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cyg_offers_banners`
--
ALTER TABLE `cyg_offers_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cyg_page_category`
--
ALTER TABLE `cyg_page_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cyg_places_to_visit`
--
ALTER TABLE `cyg_places_to_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `cyg_regions`
--
ALTER TABLE `cyg_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cyg_region_team_member_sequence`
--
ALTER TABLE `cyg_region_team_member_sequence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cyg_restaurants`
--
ALTER TABLE `cyg_restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cyg_restaurants_images`
--
ALTER TABLE `cyg_restaurants_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cyg_room_amenities`
--
ALTER TABLE `cyg_room_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `cyg_room_types`
--
ALTER TABLE `cyg_room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cyg_signature_dishes`
--
ALTER TABLE `cyg_signature_dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cyg_states`
--
ALTER TABLE `cyg_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cyg_team`
--
ALTER TABLE `cyg_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cyg_team_member_highlights`
--
ALTER TABLE `cyg_team_member_highlights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cyg_unit_guest_review`
--
ALTER TABLE `cyg_unit_guest_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
