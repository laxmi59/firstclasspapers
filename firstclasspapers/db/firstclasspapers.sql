-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2012 at 05:23 AM
-- Server version: 5.0.95
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firstclasspapers`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL auto_increment,
  `country` varchar(100) NOT NULL,
  `ISO_code` varchar(2) NOT NULL,
  `dail_code` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=230 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `ISO_code`, `dail_code`) VALUES
(1, 'Afghanistan', 'AF', '93'),
(2, 'Albania', 'AL', '355'),
(3, 'Algeria', 'DZ', '213'),
(4, 'American Samoa', 'AS', '1 684'),
(5, 'Andorra', 'AD', '376'),
(6, 'Angola', 'AO', '244'),
(7, 'Anguilla', 'AI', '1 264'),
(8, 'Antarctica', 'AQ', '672'),
(9, 'Antigua and Barbuda', 'AG', '1268'),
(10, 'Argentina', 'AR', '54'),
(11, 'Armenia', 'AM', '374'),
(12, 'Aruba', 'AW', '297'),
(13, 'Australia', 'AU', '61'),
(14, 'Austria', 'AT', '43'),
(15, 'Azerbaijan', 'AZ', '994'),
(16, 'Bahamas', 'BS', '1242'),
(17, 'Bahrain', 'BH', '973'),
(18, 'Bangladesh', 'BD', '880'),
(19, 'Barbados', 'BB', '1246'),
(20, 'Belarus', 'BY', '375'),
(21, 'Belgium', 'BE', '32'),
(22, 'Belize', 'BZ', '501'),
(23, 'Benin', 'BJ', '229'),
(24, 'Bermuda', 'BM', '1441'),
(25, 'Bhutan', 'BT', '975'),
(26, 'Bolivia', 'BO', '591'),
(27, 'Bosnia and Herzegovina', 'BA', '387'),
(28, 'Botswana', 'BW', '267'),
(29, 'Brazil', 'BR', '55'),
(30, 'British Virgin Islands', 'VG', '1284'),
(31, 'Brunei', 'BN', '673'),
(32, 'Bulgaria', 'BG', '359'),
(33, 'Burkina Faso', 'BF', '226'),
(34, 'Burma (Myanmar)', 'MM', '95'),
(35, 'Burundi', 'BI', '257'),
(36, 'Cambodia', 'KH', '855'),
(37, 'Cameroon', 'CM', '237'),
(38, 'Canada', 'CA', '1'),
(39, 'Cape Verde', 'CV', '238'),
(40, 'Cayman Islands', 'KY', '1345'),
(41, 'Central African Republic', 'CF', '236'),
(42, 'Chad', 'TD', '235'),
(43, 'Chile', 'CL', '56'),
(44, 'China', 'CN', '86'),
(45, 'Christmas Island', 'CX', '61'),
(46, 'Cocos (Keeling) Islands', 'CC', '61'),
(47, 'Colombia', 'CO', '57'),
(48, 'Comoros', 'KM', '269'),
(49, 'Cook Islands', 'CK', '682'),
(50, 'Costa Rica', 'CR', '506'),
(51, 'Croatia', 'HR', '385'),
(52, 'Cuba', 'CU', '53'),
(53, 'Cyprus', 'CY', '357'),
(54, 'Czech Republic', 'CZ', '420'),
(55, 'Democratic Republic of the Congo', 'CD', '243'),
(56, 'Denmark', 'DK', '45'),
(57, 'Djibouti', 'DJ', '253'),
(58, 'Dominica', 'DM', '1767'),
(59, 'Dominican Republic', 'DO', '1809'),
(60, 'Ecuador', 'EC', '593'),
(61, 'Egypt', 'EG', '20'),
(62, 'El Salvador', 'SV', '503'),
(63, 'Equatorial Guinea', 'GQ', '240'),
(64, 'Eritrea', 'ER', '291'),
(65, 'Estonia', 'EE', '372'),
(66, 'Ethiopia', 'ET', '251'),
(67, 'Falkland Islands', 'FK', '500'),
(68, 'Faroe Islands', 'FO', '298'),
(69, 'Fiji', 'FJ', '679'),
(70, 'Finland', 'FI', '358'),
(71, 'France', 'FR', '33'),
(72, 'French Polynesia', 'PF', '689'),
(73, 'Gabon', 'GA', '241'),
(74, 'Gambia', 'GM', '220'),
(75, 'Georgia', 'GE', '995'),
(76, 'Germany', 'DE', '49'),
(77, 'Ghana', 'GH', '233'),
(78, 'Gibraltar', 'GI', '350'),
(79, 'Greece', 'GR', '30'),
(80, 'Greenland', 'GL', '299'),
(81, 'Grenada', 'GD', '1473'),
(82, 'Guam', 'GU', '1671'),
(83, 'Guatemala', 'GT', '502'),
(84, 'Guinea', 'GN', '224'),
(85, 'Guinea-Bissau', 'GW', '245'),
(86, 'Guyana', 'GY', '592'),
(87, 'Haiti', 'HT', '509'),
(88, 'Holy See (Vatican City)', 'VA', '39'),
(89, 'Honduras', 'HN', '504'),
(90, 'Hong Kong', 'HK', '852'),
(91, 'Hungary', 'HU', '36'),
(92, 'Iceland', 'IS', '354'),
(93, 'India', 'IN', '91'),
(94, 'Indonesia', 'ID', '62'),
(95, 'Iran', 'IR', '98'),
(96, 'Iraq', 'IQ', '964'),
(97, 'Ireland', 'IE', '353'),
(98, 'Isle of Man', 'IM', '44'),
(99, 'Israel', 'IL', '972'),
(100, 'Italy', 'IT', '39'),
(101, 'Ivory Coast', 'CI', '225'),
(102, 'Jamaica', 'JM', '1876'),
(103, 'Japan', 'JP', '81'),
(104, 'Jordan', 'JO', '962'),
(105, 'Kazakhstan', 'KZ', '7'),
(106, 'Kenya', 'KE', '254'),
(107, 'Kiribati', 'KI', '686'),
(108, 'Kuwait', 'KW', '965'),
(109, 'Kyrgyzstan', 'KG', '996'),
(110, 'Laos', 'LA', '856'),
(111, 'Latvia', 'LV', '371'),
(112, 'Lebanon', 'LB', '961'),
(113, 'Lesotho', 'LS', '266'),
(114, 'Liberia', 'LR', '231'),
(115, 'Libya', 'LY', '218'),
(116, 'Liechtenstein', 'LI', '423'),
(117, 'Lithuania', 'LT', '370'),
(118, 'Luxembourg', 'LU', '352'),
(119, 'Macau', 'MO', '853'),
(120, 'Macedonia', 'MK', '389'),
(121, 'Madagascar', 'MG', '261'),
(122, 'Malawi', 'MW', '265'),
(123, 'Malaysia', 'MY', '60'),
(124, 'Maldives', 'MV', '960'),
(125, 'Mali', 'ML', '223'),
(126, 'Malta', 'MT', '356'),
(127, 'Marshall Islands', 'MH', '692'),
(128, 'Mauritania', 'MR', '222'),
(129, 'Mauritius', 'MU', '230'),
(130, 'Mayotte', 'YT', '262'),
(131, 'Mexico', 'MX', '52'),
(132, 'Micronesia', 'FM', '691'),
(133, 'Moldova', 'MD', '373'),
(134, 'Monaco', 'MC', '377'),
(135, 'Mongolia', 'MN', '976'),
(136, 'Montenegro', 'ME', '382'),
(137, 'Montserrat', 'MS', '1664'),
(138, 'Morocco', 'MA', '212'),
(139, 'Mozambique', 'MZ', '258'),
(140, 'Namibia', 'NA', '264'),
(141, 'Nauru', 'NR', '674'),
(142, 'Nepal', 'NP', '977'),
(143, 'Netherlands', 'NL', '31'),
(144, 'Netherlands Antilles', 'AN', '599'),
(145, 'New Caledonia', 'NC', '687'),
(146, 'New Zealand', 'NZ', '64'),
(147, 'Nicaragua', 'NI', '505'),
(148, 'Niger', 'NE', '227'),
(149, 'Nigeria', 'NG', '234'),
(150, 'Niue', 'NU', '683'),
(151, 'North Korea', 'KP', '850'),
(152, 'Northern Mariana Islands', 'MP', '1670'),
(153, 'Norway', 'NO', '47'),
(154, 'Oman', 'OM', '968'),
(155, 'Pakistan', 'PK', '92'),
(156, 'Palau', 'PW', '680'),
(157, 'Panama', 'PA', '507'),
(158, 'Papua New Guinea', 'PG', '675'),
(159, 'Paraguay', 'PY', '595'),
(160, 'Peru', 'PE', '51'),
(161, 'Philippines', 'PH', '63'),
(162, 'Pitcairn Islands', 'PN', '870'),
(163, 'Poland', 'PL', '48'),
(164, 'Portugal', 'PT', '351'),
(165, 'Puerto Rico', 'PR', '1'),
(166, 'Qatar', 'QA', '974'),
(167, 'Republic of the Congo', 'CG', '242'),
(168, 'Romania', 'RO', '40'),
(169, 'Russia', 'RU', '7'),
(170, 'Rwanda', 'RW', '250'),
(171, 'Saint Barthelemy', 'BL', '590'),
(172, 'Saint Helena', 'SH', '290'),
(173, 'Saint Kitts and Nevis', 'KN', '1869'),
(174, 'Saint Lucia', 'LC', '1758'),
(175, 'Saint Martin', 'MF', '1599'),
(176, 'Saint Pierre and Miquelon', 'PM', '508'),
(177, 'Saint Vincent and the Grenadines', 'VC', '1784'),
(178, 'Samoa', 'WS', '685'),
(179, 'San Marino', 'SM', '378'),
(180, 'Sao Tome and Principe', 'ST', '239'),
(181, 'Saudi Arabia', 'SA', '966'),
(182, 'Senegal', 'SN', '221'),
(183, 'Serbia', 'RS', '381'),
(184, 'Seychelles', 'SC', '248'),
(185, 'Sierra Leone', 'SL', '232'),
(186, 'Singapore', 'SG', '65'),
(187, 'Slovakia', 'SK', '421'),
(188, 'Slovenia', 'SI', '386'),
(189, 'Solomon Islands', 'SB', '677'),
(190, 'Somalia', 'SO', '252'),
(191, 'South Africa', 'ZA', '27'),
(192, 'South Korea', 'KR', '82'),
(193, 'Spain', 'ES', '34'),
(194, 'Sri Lanka', 'LK', '94'),
(195, 'Sudan', 'SD', '249'),
(196, 'Suriname', 'SR', '597'),
(197, 'Swaziland', 'SZ', '268'),
(198, 'Sweden', 'SE', '46'),
(199, 'Switzerland', 'CH', '41'),
(200, 'Syria', 'SY', '963'),
(201, 'Taiwan', 'TW', '886'),
(202, 'Tajikistan', 'TJ', '992'),
(203, 'Tanzania', 'TZ', '255'),
(204, 'Thailand', 'TH', '66'),
(205, 'Timor-Leste', 'TL', '670'),
(206, 'Togo', 'TG', '228'),
(207, 'Tokelau', 'TK', '690'),
(208, 'Tonga', 'TO', '676'),
(209, 'Trinidad and Tobago', 'TT', '1868'),
(210, 'Tunisia', 'TN', '216'),
(211, 'Turkey', 'TR', '90'),
(212, 'Turkmenistan', 'TM', '993'),
(213, 'Turks and Caicos Islands', 'TC', '1649'),
(214, 'Tuvalu', 'TV', '688'),
(215, 'Uganda', 'UG', '256'),
(216, 'Ukraine', 'UA', '380'),
(217, 'United Arab Emirates', 'AE', '971'),
(218, 'United Kingdom', 'GB', '44'),
(219, 'United States', 'US', '1'),
(220, 'Uruguay', 'UY', '598'),
(221, 'US Virgin Islands', 'VI', '1340'),
(222, 'Uzbekistan', 'UZ', '998'),
(223, 'Vanuatu', 'VU', '678'),
(224, 'Venezuela', 'VE', '58'),
(225, 'Vietnam', 'VN', '84'),
(226, 'Wallis and Futuna', 'WF', '681'),
(227, 'Yemen', 'YE', '967'),
(228, 'Zambia', 'ZM', '260'),
(229, 'Zimbabwe', 'ZW', '263');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL auto_increment,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `phone_type` int(11) NOT NULL COMMENT '1-land, 2-mobile',
  `topic` varchar(100) NOT NULL,
  `doc_type` varchar(100) NOT NULL,
  `order_priorty` int(11) NOT NULL COMMENT '1-urjent, 2-normal',
  `writer_level` varchar(100) NOT NULL,
  `spacing` int(11) NOT NULL COMMENT '1-double, 2-single',
  `page_count` int(11) NOT NULL,
  `currency` varchar(100) NOT NULL COMMENT '1-USD, 2-EUR, 3-GBP, 4-AUD',
  `paper_summery` varchar(100) NOT NULL,
  `subject_area` varchar(100) NOT NULL,
  `academic_level` varchar(100) NOT NULL,
  `ordernow_style` varchar(100) NOT NULL,
  `source_ref` varchar(100) NOT NULL,
  `order_desc` text NOT NULL,
  `discount_code` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `billing_card_number` int(11) NOT NULL,
  `billing_exp_month` int(11) NOT NULL,
  `billing_exp_year` int(11) NOT NULL,
  `billing_cvv` int(11) NOT NULL,
  `billing_cardholder_fname` varchar(100) NOT NULL,
  `billing_cardholder_lname` varchar(100) NOT NULL,
  `billing_addr` text NOT NULL,
  `billing_city` varchar(100) NOT NULL,
  `billing_country` varchar(100) NOT NULL,
  `billing_state` varchar(100) NOT NULL,
  `billing_zipcode` varchar(100) NOT NULL,
  `billing_phone` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `country`, `phone_number`, `phone_type`, `topic`, `doc_type`, `order_priorty`, `writer_level`, `spacing`, `page_count`, `currency`, `paper_summery`, `subject_area`, `academic_level`, `ordernow_style`, `source_ref`, `order_desc`, `discount_code`, `created_date`, `modified_date`, `status`, `billing_card_number`, `billing_exp_month`, `billing_exp_year`, `billing_cvv`, `billing_cardholder_fname`, `billing_cardholder_lname`, `billing_addr`, `billing_city`, `billing_country`, `billing_state`, `billing_zipcode`, `billing_phone`) VALUES
(1, 'test', 'test', 'test12334@test.com', 'india', '91-040-234234', 1, 'test', '', 0, '', 1, 1, '1', 'on', 'subject1', '1', 'APA', '2', 'test', 'rerer', '2012-05-29', '2012-05-29', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', ''),
(2, 'test', 'test', 'test12334@test.com', 'india', '91-040-234234', 1, 'test', '', 0, '', 1, 1, '1', 'on', 'subject1', '1', 'APA', '2', 'test', 'rerer', '2012-05-29', '2012-05-29', 0, 0, 2, 2002, 123, 'test', 'test', 'test', 'test', 'india', 'ap', 'tes', '34234234'),
(3, 'test', 'test', 'test12334@test.com', '1', '91-423423-34234234', 1, 'test', '1', 1, '1', 1, 1, '1', 'on', '2', '1', '1', '1', 'test', 'test', '2012-05-30', '2012-05-30', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', ''),
(4, 'test', 'test', 'test12334@test.com', '1', '91-423423-34234234', 1, 'test', '1', 1, '1', 1, 1, '1', 'on', '2', '1', '1', '1', 'test', 'test', '2012-05-30', '2012-05-30', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', ''),
(5, 'test123', 'test', 'test12334@test.com', '1', '91-423423-34234234', 1, 'test', '1', 1, '1', 1, 1, '1', '', '2', 'Select', '', '', 'test', 'test', '2012-05-30', '2012-05-30', 0, 0, 3, 2000, 333, 'test', 'test', 'test', 'test', '2', 'ap', 'tes', '34234234');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `testimonial` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `subject`, `testimonial`, `date`, `status`) VALUES
(1, 'test', 'test', 'test', '2012-05-29', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
