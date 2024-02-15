-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2023 at 05:30 AM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u966383008_billitecdi4`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip_clients`
--

CREATE TABLE `ip_clients` (
  `client_id` int(11) NOT NULL,
  `client_date_created` datetime NOT NULL,
  `client_date_modified` datetime NOT NULL,
  `client_name` text DEFAULT NULL,
  `client_address_1` text DEFAULT NULL,
  `client_address_2` text DEFAULT NULL,
  `client_city` text DEFAULT NULL,
  `client_state` text DEFAULT NULL,
  `client_tn` int(11) NOT NULL,
  `client_zip` text DEFAULT NULL,
  `client_country` text NOT NULL,
  `currency` varchar(6) NOT NULL,
  `client_phone` text DEFAULT NULL,
  `client_fax` text DEFAULT NULL,
  `client_mobile` text DEFAULT NULL,
  `client_email` text DEFAULT NULL,
  `client_web` text DEFAULT NULL,
  `client_vat_id` text DEFAULT NULL,
  `client_tax_code` text DEFAULT NULL,
  `client_language` varchar(255) DEFAULT 'system',
  `client_active` int(1) NOT NULL DEFAULT 1,
  `client_surname` varchar(255) DEFAULT NULL,
  `client_avs` varchar(16) DEFAULT NULL,
  `client_insurednumber` varchar(30) DEFAULT NULL,
  `client_veka` varchar(30) DEFAULT NULL,
  `client_birthdate` date DEFAULT NULL,
  `client_gender` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_clients`
--

INSERT INTO `ip_clients` (`client_id`, `client_date_created`, `client_date_modified`, `client_name`, `client_address_1`, `client_address_2`, `client_city`, `client_state`, `client_tn`, `client_zip`, `client_country`, `currency`, `client_phone`, `client_fax`, `client_mobile`, `client_email`, `client_web`, `client_vat_id`, `client_tax_code`, `client_language`, `client_active`, `client_surname`, `client_avs`, `client_insurednumber`, `client_veka`, `client_birthdate`, `client_gender`) VALUES
(10, '2020-06-17 19:12:58', '2022-11-14 06:56:31', 'Ponnu Super Market', '26/163, NA, REDHILLS ROAD, AMBATTUR', '', 'CHENNAI', '', 0, '600053', 'IN', 'INR', '', '', '', '', '', '33AAJFP4203D1ZS', '', 'system', 1, 'Naveen', NULL, NULL, NULL, NULL, 0),
(9, '2020-06-11 20:01:55', '2020-06-16 22:05:10', 'Butterfly Gandhimathi Appliances Limited.', '143, VANDALUR - KELAMBAKKAM RD., PUDUPAKKAM VILLAGE', NULL, 'CHENNAI', NULL, 0, '603103', 'IN', '', '', NULL, NULL, '', NULL, '33AAACG2038F1Z7', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(4, '2020-06-04 15:24:36', '2020-06-05 08:13:49', 'Niranjan Jayaprakash', 'The Metrozone, L404,', NULL, 'Chennai', NULL, 0, '600040', 'IN', '', '09884797280', NULL, NULL, 'niranjanj@live.in', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(11, '2020-07-06 11:25:18', '2020-07-06 11:25:18', 'Mr. Ajit Thomas', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '09884797280', NULL, NULL, 'niranjanj@live.in', NULL, '33AABCA8810G1Z2', '', 'system', 1, 'A V Thomas and Co. Ltd', NULL, NULL, NULL, NULL, 0),
(6, '2023-09-22 15:05:16', '2023-09-22 15:10:21', 'A.VThomas & Company Limited', 'No.60, Rukmani Lashmipathi Salai, Egmore', '', 'Chennai', 'Andhra Pradesh', 0, '600008', 'IN', 'AUD', '0000000000', '234', '2345198743', 'hari@gmail.com', 'www.hari.com', '33AABCA8810G1Z2', '9829349898', 'English ', 0, 'Thomas', NULL, NULL, NULL, NULL, 0),
(7, '2020-06-07 19:12:29', '2020-06-09 11:36:00', 'Sengu', 'CHENNAI', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '9962400001', NULL, NULL, '', NULL, '33ACDPV751R1Z0', '', 'system', 1, 'Chandran Enterprises', NULL, NULL, NULL, NULL, 0),
(12, '2020-07-17 16:41:56', '2023-01-19 11:30:57', 'Fincal Infotech P. Ltd.', 'No 442A, 1st street, Navalur Road, SIPCOT, Gandhi Salai.', '', 'Chennai', ' Tamil Nadu', 0, '603103', 'IN', 'INR', '', NULL, '', '', '', '33AAACF2351C1ZE', 'AAACF2351C', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(13, '2020-07-18 14:54:36', '2020-07-18 14:54:36', 'Inventory Pro Audio Distributors P. Ltd.', 'No. 102, Luz Church Road, mylapore', NULL, 'Chennai', NULL, 0, '600004', 'IN', '', '', NULL, NULL, '', NULL, '33AAFCI1606N1ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(14, '2020-08-08 14:26:50', '2020-08-08 14:26:50', 'J Hotels Pvt Ltd', '', NULL, 'Chennai ', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(15, '2020-08-17 14:09:00', '2020-09-21 17:11:41', 'Ceaser Enterprises', 'New no17/1, old no.9 First floor. Bazullah Road, T Nagar', NULL, 'Chennai ', NULL, 0, '600017', 'IN', '', '', NULL, NULL, '', NULL, '33AAKFC3007B1Z8', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(16, '2020-08-25 15:13:45', '2020-08-28 18:32:55', 'Gateway International School', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(17, '2020-08-27 18:37:45', '2020-08-31 13:38:01', 'Madras Security Services Pvt. Ltd.', 'No. 298, Peters Road, Gopalapuram', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACM5880F1ZL', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(18, '2020-09-09 11:00:53', '2020-09-09 11:00:53', 'KKN Holding P Ltd', '', NULL, 'Chennai', NULL, 0, '600020', 'IN', '', '', NULL, NULL, '', NULL, '33AACCF1637K1ZS', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(19, '2020-09-15 09:41:05', '2023-01-19 11:45:56', 'BRS Companies Ltd', 'Nellore, Andhra Pradesh', '', 'Nellore', ' Andhra Pradesh', 0, '524001', 'IN', 'INR', '9884032942', NULL, '', 'prasad@brs.limited', 'www.brs.limited', '37AACCB9704D2ZU', 'AACCB9704D', 'system', 1, 'Mr Prasad', NULL, NULL, NULL, NULL, 0),
(20, '2020-09-28 12:45:11', '2020-09-28 12:45:11', 'Archit Mylanda', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(21, '2020-09-28 13:37:32', '2023-09-15 13:30:09', 'Abhinav Shankar', '', '', 'Chennai ', ' Andhra Pradesh', 0, '', 'IN', 'USD', '', '', '', '', '', '', '', 'system', 0, '', NULL, NULL, NULL, NULL, 0),
(22, '2020-09-29 10:53:49', '2020-09-29 12:45:10', 'Mr. Keshav Kantamneni', 'Boat club', NULL, 'Chennai', NULL, 0, '', 'IN', '', '09884797280', NULL, NULL, 'niranjanj@live.in', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(23, '2020-10-03 09:53:58', '2020-10-03 09:53:58', 'Quantron Business Tech Solutions P Ltd ', 'Venkatakrishna Iyer Road, RA Puram', NULL, 'Chennai', NULL, 0, '600028', 'IN', '', '', NULL, NULL, '', NULL, '33AAACQ4938N1Z3', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(24, '2020-10-05 06:51:36', '2023-09-25 11:43:21', 'Cholayil Pvt. Ltd. ', 'guindy', '', 'CHENNAI', 'Andhra Pradesh', 0, '604930', 'IN', 'USD', '9847389431', '234', '2345198743', 'hari@gmail.com', 'www.hari.com', '33AAACC123B1ZN', '9829349898', 'English ', 1, '', NULL, NULL, NULL, NULL, 0),
(25, '2020-10-13 08:08:14', '2020-10-13 08:08:14', 'Hanuman Aqua Feeds and Needs', '', NULL, 'A.P', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '37ALOPV8221B1ZV', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(26, '2020-10-13 12:41:50', '2020-10-13 12:41:50', 'Mr. Mathi', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(27, '2020-10-13 14:27:14', '2020-10-13 14:27:14', 'Hybrid Ebi Hatcheries P Ltd', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACH0939E1Z2', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(172, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Smart Us', 'Y-49, 9th street, Y Block, Anna Nagar', '', 'Chennai', 'Tamil Nadu', 0, '600040', 'IN', 'USD', '8735401245', '4532', '7463829156', 'hello@axiomconsulting.in', 'smartus.in', '29RSFTH4512J9P', '345698120934', 'English ', 1, 'varun', NULL, NULL, NULL, NULL, 0),
(29, '2020-10-19 07:56:32', '2020-10-19 07:56:32', 'SARA Expo', 'Shastri Nagar', NULL, 'Chennai ', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAJPA4792LI2J', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(30, '2020-10-19 08:02:25', '2020-10-19 08:02:44', 'Mr. Vijay Prabhakaran', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(31, '2020-10-29 14:06:36', '2020-10-29 14:06:36', 'Mr. Vinod Kumar', 'A3, Tejas Chella Park, No.6, 6th Cross Street, CIT Colony, Mylapore', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(32, '2020-11-04 10:56:40', '2020-11-04 10:56:40', 'Prabha Petrocity', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33CFBPP5513B1Z0', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(33, '2020-11-04 11:04:29', '2020-11-04 11:04:29', 'Phoenix Medical Systems P Ltd', '44 SIPCOT INDUSTRIAL ESTATE, PILLAIPAKKAM', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACP1905E1Z2', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(34, '2020-11-17 12:24:27', '2020-11-17 12:24:27', 'Super Sonic', '5/1, TRUST SQUARE STREET, MEDAVAKKAM TANK ROAD', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33ADFPV7250D2ZL', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(35, '2020-11-20 10:03:42', '2020-11-20 10:22:08', 'Ashwini Ganesh', '22, Sengundhar Street Shenoy Nagar Chennai - 30', NULL, 'Chennai ', NULL, 0, '600040', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(36, '2020-11-21 05:47:37', '2020-11-21 05:47:37', 'DSSI  Solutions India P LTD', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AACCD3798F1ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(37, '2020-11-29 14:16:44', '2020-12-03 07:46:31', 'Mr. Giri Muthukrishnan', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(38, '2020-12-09 11:42:08', '2020-12-09 11:42:08', 'Ruby Builders and Promote', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAGFR3747K1ZZ', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(39, '2020-12-11 12:51:02', '2020-12-11 12:51:02', 'ARCHEAN CHEMICAL INDUSTRIES P LTD', 'No2, North Cresent Road, T Nagar', NULL, 'Chennai ', NULL, 0, '600017', 'IN', '', '', NULL, NULL, '', NULL, '33AAHCA8471D3ZR', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(40, '2020-12-17 07:19:56', '2020-12-17 07:20:21', 'GOPINATH K', '51, Indhra Nagar, Extension Street, Thuraiyur, Tamil Nadu', NULL, '', NULL, 0, '621010', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, 'MARINE ENGINEER', NULL, NULL, NULL, NULL, 0),
(41, '2020-12-17 13:29:47', '2020-12-17 13:29:47', 'Neelamalai Argo', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACN1143N1ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(42, '2020-12-21 09:13:17', '2020-12-21 09:13:17', 'S Sarath Kumar', '6B, Sriman Srinivasan Road, Alwarpet, ', NULL, 'Chennai ', NULL, 0, '6000018', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(43, '2020-12-21 15:19:13', '2020-12-23 11:02:16', 'Kiran Joseph', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(45, '2020-12-29 13:47:02', '2023-09-15 12:46:31', 'A.V.R. Balasubramani Sons', 'Red hills', 'Red hills', 'Chennai', ' Andhra Pradesh', 0, '600052', 'IN', 'USD', '9094561312', '', '9094561312', 'axiomconsultingfirm@gmail.com', 'www.ashishchadha.com', '33AFPPB3628F1ZQ', 'AFPPB3628F', 'english', 0, 'Balasubramani', NULL, NULL, NULL, NULL, 0),
(46, '2020-12-29 14:43:52', '2020-12-29 14:43:52', 'New Customer', 'No 3', NULL, 'Chennai', NULL, 0, '600040', 'IN', '', '9094561312', NULL, NULL, 'varunist@outlook.com', NULL, 'AACVD2212OJ1ZD', 'AACVD2212O', 'system', 1, 'AXM', NULL, NULL, NULL, NULL, 0),
(47, '2021-01-17 12:34:57', '2021-01-17 12:34:57', 'Dupro Consultants P Ltd.', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AADCD0634R1ZK', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(48, '2021-01-23 14:03:08', '2021-01-23 14:03:08', 'Sundari Silks', 'NO. 36 North Usman Road, T Nagar', NULL, 'Chennai ', NULL, 0, '600 017', 'IN', '', '', NULL, NULL, '', NULL, '33AAVPS5915K1Z0', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(49, '2021-01-24 14:39:25', '2021-01-24 14:39:25', 'GSV Micro tech P. Ltd.', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAFCG9575L2Z0', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(50, '2021-01-24 19:20:25', '2021-01-24 19:20:25', 'Seyadu Beedi Company', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AACFS5706R1ZT', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(51, '2021-01-25 07:47:13', '2021-01-25 08:32:35', 'Microfit Industries P. Ltd.', '129, Gandhi gramam, Neyveli Arch Gate, Gandhi Nagar Post, ', NULL, 'Neyveli', NULL, 0, '607308', 'IN', '', '', NULL, NULL, '', NULL, '33AAFCM0137Q2ZC', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(52, '2021-01-25 07:56:50', '2021-01-25 07:56:50', 'Premium car care', '', NULL, 'CHENNAI ', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AA1FP3905D1ZM', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(53, '2021-01-31 07:25:56', '2021-02-10 14:57:23', 'Fossils Logistics Pvt Ltd', 'Fossil Logistics Pvt Ltd 2nd Floor, Azeema Sherif Centre, No. 538, Annasalai, Teynampet', NULL, 'Chennai', NULL, 0, '600018', 'IN', '', '', NULL, NULL, '', NULL, '33AAACF5512H1Z3', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(54, '2021-02-04 19:02:33', '2021-02-04 19:02:33', 'Subramanian Arvind', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33ASGPA0086L1ZY', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(55, '2021-02-06 08:05:25', '2021-02-06 08:05:34', 'Lalith Vummiti', '14 - 15 2nd Crossway, Sea Cliff Conclave, Akkarai, ECR', NULL, 'Chennai ', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(56, '2021-02-23 09:36:09', '2021-02-23 09:36:09', 'Apex Agencies', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAIFA0542M1ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(57, '2021-03-05 13:03:09', '2021-03-05 13:03:09', 'G Kalalakshmi', 'No. 443 Guna Complex, MB/ 7th floor, Anna Sala Teynampet', NULL, 'Chennai', NULL, 0, '600014', 'IN', '', '', NULL, NULL, '', NULL, '33AEEPK6931L1ZD', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(58, '2021-03-08 07:53:20', '2021-03-08 07:53:20', 'Magesh Babu', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, 'Saint gobain', NULL, NULL, NULL, NULL, 0),
(59, '2021-03-09 13:27:51', '2021-03-09 13:27:51', 'Rox Trading and Systems P Ltd', 'Old No. 101 B, New No. 160 Mahalingapuram Main Road, Nungambakkam', NULL, 'Chennnai', NULL, 0, '600034', 'IN', '', '', NULL, NULL, '', NULL, '33AABCR9542C1ZM', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(60, '2021-03-09 13:34:42', '2021-03-09 13:34:42', 'BONFIGLIOLI Transmissions P Ltd', 'AC7-11, SIDCO Industrial Estate, Thirumudivakkam', NULL, 'Chennai', NULL, 0, '600 044', 'IN', '', '', NULL, NULL, '', NULL, '33AABCB1675N1ZL', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(61, '2021-03-12 14:05:14', '2021-03-12 14:05:14', 'GK Shetty Builders P Ltd', '', NULL, 'Chennai', NULL, 0, '600031', 'IN', '', '', NULL, NULL, '', NULL, '33AAACG1174E1Z6', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(62, '2021-03-15 09:02:00', '2021-03-15 09:02:00', 'Gautam Babu', 'B16 Casagrande Aldea Apartment, Bharathiyar Nagar Main Road, Thoraipakkam', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', 'BDIPG4811R', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(63, '2021-03-16 11:10:33', '2021-03-16 11:10:33', 'Royal Thai Consulate', 'No 116, Chamiers road, Nandanam', NULL, 'Chennai', NULL, 0, '600035', 'IN', '', '', NULL, NULL, '', NULL, '3317THA00039UNL', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(64, '2021-03-16 11:46:31', '2021-03-16 11:46:31', 'Rahul Balaji', 'No.43, Subramaniam Colony, MG Road', NULL, 'Chennai', NULL, 0, '600041', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(65, '2021-03-22 07:24:51', '2021-03-22 07:24:51', 'Prashanth Shankarr Nagaraj', 'H 101, Embassy Residency, Cheran Nagar, Perumbakkam', NULL, 'Chennai', NULL, 0, '600100', 'IN', '', '', NULL, NULL, '', NULL, '', 'AHGPN8298J', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(66, '2021-03-24 08:53:23', '2021-03-24 08:53:23', 'The Hind Matches P Ltd', 'Thattu Mettu Street, Sivakasi', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AABCT0160C1Z4', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(67, '2021-03-24 09:57:33', '2021-03-24 09:57:33', 'Sivaguranathan Industries ', 'No. 50, Thandalam Village, Thiruporur Post, Chengalpattu, Kanchipuram district', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AABFS4128A1ZV', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(68, '2021-03-25 07:06:07', '2021-03-25 07:06:07', 'Shoba', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAMFS7474C1Z1', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(69, '2021-03-28 10:26:48', '2021-03-28 10:26:48', 'T S Goutham', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(70, '2021-03-31 14:51:45', '2021-03-31 14:51:45', 'Silverline Fertilisers P Ltd', 'No 12 MG Road Shastri nagar', NULL, 'Chennai', NULL, 0, '600 041', 'IN', '', '', NULL, NULL, '', NULL, '33AAUCS6663A1Z6', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(71, '2021-03-31 15:02:35', '2021-03-31 15:02:35', 'Integrated Lighting Technologies Private Limited', '#589, 1st D main road, 2nd stage, 9th block, near Gandhi park, Nagarbhavi ', NULL, 'Bangalore, Karnataka.', NULL, 0, '560072', 'IN', '', '', NULL, NULL, '', NULL, '29AACCI8817J1Z4', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(72, '2021-03-31 15:21:25', '2021-03-31 15:21:25', 'Mr. Ajith Kumar', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33ACDPK0418K1ZY', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(73, '2021-04-04 12:22:57', '2021-04-04 12:22:57', 'Gunasekaran S', 'New no. 45, 2nd Main Road, Burma Colony, Perungudi Industrial Estate.', NULL, 'Chennai', NULL, 0, '600 096', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, 'Capital Kia', NULL, NULL, NULL, NULL, 0),
(74, '2021-04-08 13:53:48', '2021-04-08 13:53:48', 'Muthoot Fin Corp.', '1ST FLOOR, 103A, Navins Presidium, Nelson Manickam Rd', NULL, 'Chennai', NULL, 0, '600029', 'IN', '', '', NULL, NULL, '', NULL, '33AACCM1453E2ZZ', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(75, '2021-04-15 10:26:07', '2021-04-15 10:26:07', 'G Dinesh Babu', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(76, '2021-04-22 13:25:27', '2021-04-24 10:43:51', 'Apollo Hospitals Enterprise Ltd.', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACA5443N3ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(77, '2021-05-05 08:53:31', '2021-05-05 08:53:31', 'Mr. Fiaz Basheer', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(78, '2021-05-08 08:47:56', '2021-05-08 08:47:56', 'Vamsadhara Paper Mills P Ltd', 'Basement, Plot No. 3, Mck Nagar Layout, Adayalampattu', NULL, '', NULL, 0, '600095', 'IN', '', '', NULL, NULL, '', NULL, '33AAACV7330B1ZV', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(79, '2021-06-23 14:30:48', '2021-06-23 14:30:48', 'Askari Motors', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '36AASCA7678M1ZM', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(80, '2021-07-06 09:07:04', '2021-07-06 09:07:04', 'Caplin Point', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AABCC2667F2ZY', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(81, '2021-07-12 08:30:46', '2021-07-12 08:30:46', 'KT Spinning Mills', '', NULL, 'Coimbatore', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33ATFPK6819B2ZY', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(82, '2021-07-13 13:54:18', '2021-07-13 13:54:18', 'Ramanathan', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(83, '2021-07-21 14:35:24', '2022-02-01 12:37:04', 'Lanson Qcars P Ltd', '5/80 ECR, Neelankarao', NULL, 'Chennai', NULL, 0, '600041', 'IN', '', '', NULL, NULL, '', NULL, '33AABCL4498F1ZH', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(84, '2021-08-01 10:24:32', '2021-08-01 10:24:32', 'John Chandi', 'Adyar', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(85, '2021-08-06 13:28:35', '2022-02-22 15:33:33', 'Four frames sound company', 'No. 6 Veerabadran Street, Valluvarkottam, Nungambakkam ', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAAPN9678B1ZP', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(86, '2021-08-11 14:54:18', '2021-08-11 14:54:18', 'Chetan Acharya', '24 & 25 Sivaganga Road, Nungambakkam', NULL, 'CHENNAI', NULL, 0, '600034', 'IN', '', '', NULL, NULL, '', NULL, '33AAAFN4591K1Z5', '', 'system', 1, 'Nippon Enterprises South', NULL, NULL, NULL, NULL, 0),
(87, '2021-08-17 20:21:53', '2021-08-17 20:21:53', 'VK Digital Network P Ltd', '', NULL, 'Chennai', NULL, 0, '600014', 'IN', '', '', NULL, NULL, '', NULL, '33AAFCV0612F1ZV', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(88, '2021-08-19 19:29:07', '2021-08-19 19:29:07', 'Kerry Indev Logistics PVT', '', NULL, 'Pondicherry', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AABCC1756D1Z5', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(89, '2021-08-21 18:34:21', '2021-08-21 18:34:21', 'Xtend Equipments P Ltd', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACX2402J1ZP', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(90, '2021-08-29 17:49:12', '2021-08-29 17:49:12', 'Mr. Soundarajan', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(91, '2021-09-08 13:13:18', '2021-09-08 13:13:18', 'Apollo Infrastructure Projects Finance', '', NULL, '', NULL, 0, '600034', 'IN', '', '', NULL, NULL, '', NULL, '33AABCA8591N1Z9', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(93, '2021-09-21 13:12:06', '2021-09-21 13:12:06', 'INDO NATIONAL LIMITED', '', NULL, 'Chennai', NULL, 0, '600006', 'IN', '', '', NULL, NULL, '', NULL, '33AAACI2291L1ZL', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(94, '2021-09-23 09:30:20', '2021-09-23 09:30:20', 'St. John\'s English School and Junior College', '', NULL, 'Chennai', NULL, 0, '600090', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(95, '2021-09-23 09:51:26', '2021-09-23 09:51:26', 'N Rajesh Babu', '201, St. Mary\'s Road, Alwarpet', NULL, 'Chennai', NULL, 0, '600018', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(96, '2021-09-29 07:48:58', '2021-09-29 07:48:58', 'Adyar Super Markets', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33ABTFA3350P1Z0', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(97, '2021-10-07 12:53:09', '2021-10-07 12:53:09', 'Seatrade Minerals P Ltd.', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AATCS8693P1Z2', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(98, '2021-10-07 13:17:04', '2021-10-07 13:17:04', 'Anushree Constructions', 'VGP Babu Nagar, 2nd Main road, ', NULL, 'Chennai ', NULL, 0, '600100', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(99, '2021-10-09 11:48:52', '2021-10-09 11:48:52', 'Naveen Engineering Works', '', NULL, 'CHENNAI', NULL, 0, '600032', 'IN', '', '', NULL, NULL, '', NULL, '33AHEPK3330L1ZK', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(100, '2021-10-24 16:44:38', '2021-11-15 06:52:11', 'Velammal Bodhi Academy', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AASPS4128F2ZI', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(101, '2021-11-06 14:39:18', '2021-11-06 14:39:18', 'AVT Naturals Products LTD', '', NULL, 'CHENNAI', NULL, 0, '600008', 'IN', '', '', NULL, NULL, '', NULL, '33AAACA3171B1ZH', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(102, '2021-12-14 06:19:18', '2021-12-14 06:19:18', 'Vijay Sethupathi Productions', '34/24 Rajendran Street, Thiru Nagar, Valsaravakkam', NULL, 'Chennai', NULL, 0, '600087', 'IN', '', '', NULL, NULL, '', NULL, '33AAKFV5802D1ZE', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(103, '2021-12-15 08:42:30', '2021-12-15 08:42:30', 'Parathasarathy Gokulyadav', 'TTK Road, Royapettah', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AANPG0696D2ZU', '', 'system', 1, 'Chetna Constructions', NULL, NULL, NULL, NULL, 0),
(104, '2021-12-21 07:29:59', '2021-12-21 07:29:59', 'Tech Ocean', '3054, Z block, 4th street, Anna Nagar', NULL, 'Chennai', NULL, 0, '600 040', 'IN', '', '', NULL, NULL, '', NULL, '33AAJFT6605R1ZL', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(105, '2021-12-21 15:10:21', '2021-12-21 15:10:21', 'Mr. Boopesh Reddy', '', NULL, 'Bangalore, Karnataka.', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(106, '2021-12-28 06:01:46', '2021-12-29 07:11:53', 'Radiant Protection Force P LTD', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAECR4409F1ZP', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(107, '2022-01-27 12:51:12', '2022-01-27 12:51:12', 'Subburaaj Cotton Mill P Ltd', 'Rajapalayam', NULL, '', NULL, 0, '626117', 'IN', '', '', NULL, NULL, '', NULL, '33AADCS8760K1Z0', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(108, '2022-02-09 14:48:17', '2022-02-09 14:48:17', 'Bala Ganapathy Estates Company', 'Shantam, 4th Floor, II/25 Dr VSI Estate, Taramani, Velachery 100 Ft road, Thiruvanmayur', NULL, 'Chennai', NULL, 0, '600041', 'IN', '', '', NULL, NULL, '', NULL, '33AAEFB7222KK1ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(109, '2022-02-10 10:05:36', '2022-02-10 10:05:36', 'Spero Property Management', '4th floor, No 4E, SP7A, Industrial estate, Guindy', NULL, 'Chennai', NULL, 0, '600032', 'IN', '', '', NULL, NULL, '', NULL, '33AAAFG4225B1Z8', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(110, '2022-02-15 14:02:53', '2022-02-15 14:02:53', 'AG Granites P Ltd', '', NULL, '', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AABCA8182H1ZR', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(111, '2022-02-23 08:20:49', '2022-02-23 08:20:49', 'AR Foundations', 'Acropolis Building, ground floor, No.148, Dr. Radhkrishnan Road, Mylapore', NULL, 'Chennai', NULL, 0, '600004', 'IN', '', '', NULL, NULL, '', NULL, '33AASFA0033B1Z6', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(112, '2022-02-27 11:52:26', '2022-02-27 11:52:26', 'V Rajagopalan', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(113, '2022-03-03 15:11:25', '2022-03-03 15:11:25', 'VENSENAL ENTERPRISES P LTD', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAGCV8548M1ZO', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(114, '2022-03-11 11:23:26', '2022-03-11 11:23:26', 'Mr. Mohan Kameswaran', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AADPK5365P1ZC', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(115, '2022-03-14 10:27:58', '2022-03-14 10:27:58', 'Cavin Kare P Ltd', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACB754BIZB', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(116, '2022-03-15 08:38:06', '2022-03-15 08:38:06', 'Collman Services', 'NO.6, Jawahralal Nehru street, Anna Nagar.', NULL, 'Chennai', NULL, 0, '600040', 'IN', '', '', NULL, NULL, '', NULL, '33BRTPS5867E2Z3', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(117, '2022-03-16 16:00:25', '2023-09-15 14:05:17', 'Eicher Motors Limited', '', '', 'Chennai', ' Andhra Pradesh', 0, '', 'IN', 'USD', '', '', '', '', '', '', '', 'system', 0, '', NULL, NULL, NULL, NULL, 0),
(118, '2022-03-25 06:31:55', '2022-03-25 06:31:55', 'South India Surgials Co Ltd', '117/65 Wallajah Road', NULL, 'Chennai', NULL, 0, '600002', 'IN', '', '', NULL, NULL, '', NULL, '33AAACS5091E1ZM', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(119, '2022-04-04 13:21:01', '2022-04-04 13:21:01', 'Future & Options Kard Services P. Ltd.', 'No 321, Arcot Road, D11, Doshi Garden, 3rd Floor, Vadapalani', NULL, 'Chennai', NULL, 0, '600026', 'IN', '', '', NULL, NULL, '', NULL, '33AAACF8594K1Z8', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(120, '2022-04-07 13:54:05', '2022-04-07 13:54:05', 'The Midland Rubber Co Ltd', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACT8098G1Z4', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(121, '2022-04-10 14:09:50', '2022-04-10 14:09:50', 'Indira Educational And Charitable Trust', 'PANDUR, VGR GARDEN, VGR NAGAR, TIRUVALLUR, TAMIL NADU', NULL, '', NULL, 0, '631203', 'IN', '', '', NULL, NULL, '', NULL, '33AAATI3027K1ZW', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(122, '2022-04-10 14:22:01', '2022-04-10 14:22:01', 'Mr. Sairam Arjun suresh', 'New54, 3rd Main road, Gandhi Nagar, Adyar', NULL, 'Chennai', NULL, 0, '600020', 'IN', '', '', NULL, NULL, '', NULL, '', 'BEHPS6686C', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(123, '2022-04-15 10:52:23', '2022-04-15 11:08:46', 'Rathi Industrial Corporation P Ltd', '4, Raman Road,', NULL, 'Chennao', NULL, 0, '600079', 'IN', '', '', NULL, NULL, '', NULL, '33AADCR4108E1ZW', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(124, '2022-04-20 10:43:33', '2022-04-20 10:43:33', 'Lux Flavours', '3,4,6,7, Kundrathur High Road, Gerugambakam,', NULL, 'Chennai', NULL, 0, '600128', 'IN', '', '', NULL, NULL, '', NULL, '33AAAFL0880H1ZM', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(125, '2022-04-20 13:38:41', '2022-04-20 13:38:41', 'Mr. Robin', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(126, '2022-04-27 13:39:15', '2022-04-27 13:39:15', 'Rahul Chellachamy', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', 'BDOPR9873C', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(127, '2022-04-29 10:47:17', '2022-04-29 10:47:17', 'B&G infrastructure company Pvt Ltd', 'No 25/10, Sri Madavan Nayar road, Mahalingapuram', NULL, 'Chennai', NULL, 0, '600034', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(128, '2022-05-07 13:32:04', '2022-05-07 13:32:04', 'Metco Roof P Ltd', '', NULL, 'Chennai', NULL, 0, '600033', 'IN', '', '', NULL, NULL, '', NULL, '33AABCM9993L1ZT', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(129, '2022-05-10 09:29:37', '2022-05-10 09:29:37', 'H-Garb Informayix P LTD', '15 MURRAY\'S GATE ROAD, ALWARPT', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AADCH7979M1ZW', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(130, '2022-05-12 10:57:58', '2022-05-12 10:57:58', 'Associated electrical agencies', '', NULL, 'Chennai', NULL, 0, '600006', 'IN', '', '', NULL, NULL, '', NULL, '33AABFA3270B1ZA', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(131, '2022-05-21 11:30:12', '2022-05-21 11:30:12', 'Sindya Aqua Minerale P Ltd', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAGCS6758L1ZT', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(132, '2022-05-22 14:12:30', '2022-05-22 14:12:30', 'Praveen Ananth Narayanan', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', 'AFDPA9571J', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(133, '2022-05-23 10:11:01', '2022-05-23 10:11:01', 'KR Industries', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AACPG4374K1ZS', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(134, '2022-05-25 11:39:42', '2022-05-25 11:39:42', 'Apollo Infrastructure Co Pvt Ltd', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(135, '2022-06-01 11:15:34', '2022-06-01 11:15:34', 'Vasanth & Co', '38/45, South Usman Road, T Nagar', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AATFV0714D1ZC', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(136, '2022-06-03 08:16:11', '2022-06-03 08:16:11', 'Meraki Film Works', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33ALDPM2264J2Z6', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(137, '2022-06-04 06:38:47', '2022-06-04 07:21:29', 'Shanta Suresh', 'New No. 54, Old No. 50, 3rd Main Road, Gandhi Nagar, Adyar', NULL, 'Chennai', NULL, 0, '600020', 'IN', '', '', NULL, NULL, '', NULL, '33AHTPS9892C1ZL', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(138, '2022-06-04 08:09:09', '2022-06-04 08:09:09', 'neelamalai AGro Industries Ltd', '', NULL, 'CHENNAI', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAACN1143N1ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(139, '2022-06-11 11:19:24', '2022-06-11 11:19:24', 'KV Tex Firm', '', NULL, 'Cuddalore', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAHFK5532E1ZN', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(140, '2022-06-15 09:49:12', '2022-06-15 09:49:12', 'DVS Advisors P Ltd', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAKFD1818K1ZH', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(141, '2022-06-15 10:09:08', '2022-06-15 10:09:08', 'Skylark Information Technologies P Ltd', 'No1, Chari Street, T Nagar', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AACCS3213Q1ZB', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(142, '2022-06-16 15:49:20', '2022-06-16 15:49:20', 'AMMA NAANA', 'No. 100 Chamiers Road, Teynampet', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AAZFA6115H1ZC', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(143, '2022-06-24 13:01:47', '2022-06-24 13:01:47', 'Surya Pelle Chemical & Mould P Ltd', '', NULL, 'Chennai', NULL, 0, '', 'IN', '', '', NULL, NULL, '', NULL, '33AABCE4275H1ZT', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(144, '2022-07-05 08:24:27', '2022-07-05 08:24:27', 'Senthil M Ramanathan', '3A, Ramaniyam Meenakshi Apartment, No18/16, 12th cross street, Sashtri Nagar, Adyar', NULL, 'Chennai', NULL, 0, '600020', 'IN', '', '', NULL, NULL, 'niranjan.jayaprakash03@gmail.com', NULL, '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(145, '2022-07-05 11:26:51', '2022-07-05 11:26:51', 'Shree Power Enterprises P Ltd', '3/69A, Kamaraj Nagar, Chemmenchery', NULL, 'Chennai', NULL, 0, '600119', 'IN', '', '', NULL, NULL, '', NULL, '33AATCS7897R1ZU', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(146, '2022-07-08 13:04:51', '2022-07-08 13:04:51', 'Pelatis Rigas Consulting', 'D11 Doshi gardens,3rd floor, Vadapalani,  ', NULL, 'chennai', NULL, 0, '600026', 'IN', '', '', NULL, NULL, '', NULL, '33AEAPD8047C1Z4', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(147, '2022-07-11 09:18:28', '2022-11-26 06:34:46', 'Cyber Security Works Pvt Ltd.', 'No 6, 3rd Floor, Block A, IITM Research Park, Taramani', '', 'Chennai', '', 0, '600113', 'IN', 'INR', '', '', '', 'axiomconsultingfirm@gmail.com', '', '33AADCC4730D2Z8', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(148, '2022-07-14 12:39:03', '2022-07-14 12:39:03', 'TAFE Motors and Tractors Limited', '77, Nungambakkam High Road Nungambakkam ', NULL, 'Chennai ', NULL, 0, '600034', 'IN', '', '', NULL, NULL, '', NULL, '33AACCT2459B1ZR', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(149, '2022-07-22 08:37:10', '2022-07-22 08:37:10', 'Ace Finanze Projects and. Consultancy', '9/9B, Mettupalayam Road.', '', 'Coimbatore', 'Tamil Nadu', 0, '641029', 'IN', '', '', '', '', '', '', '33ABUFA7046B1ZJ', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(150, '2022-07-28 06:20:02', '2022-07-29 11:57:34', 'Casagrand Builders P Ltd', '', '', '', '', 0, '', 'IN', '', '', '', '', '', '', '33AACCC2758A1Z8', '', 'system', 1, 'Mr. Pavithran', NULL, NULL, NULL, NULL, 0),
(151, '2022-08-10 15:14:11', '2022-08-10 15:14:11', 'Anil Fireworks Factory', 'No.807 Thiruthangal Road, Sivakasi-626123', '', '', '', 0, '', 'IN', '', '', '', '', '', '', '33AABFA7742C1ZZ', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(152, '2022-08-18 13:09:22', '2022-12-27 11:30:37', 'Bayesian Infotech', 'Chennai', '', 'Chennai', 'Andhra Pradesh', 0, '', 'IR', 'INR', '9094561312', '', '', 'info@bayesian.co', 'https://www.bayesian.co', '33VSVCR0804B1Z5', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(153, '2022-08-19 13:50:02', '2022-09-01 08:52:39', 'Jain car decors', 'No 93/8, Peters Road, New college Shopping Complex', 'Royapettah', 'Chennai', 'Tamil Nadu', 0, '', 'IN', '', '', '', '', '', '', '33AAFFJ7417D1ZO', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(154, '2022-09-01 08:42:53', '2022-09-01 08:42:53', 'K Karthik', '', '', 'Chennai', 'Tamil Nadu', 0, '600106', 'IN', '', '', '', '', '', '', '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(155, '2022-09-01 10:52:43', '2023-09-22 15:19:52', 'Dr R Mathrubootham', '12 B William Road, Cantonment,', '', 'Trichy', 'Assam', 0, '620001', 'IN', 'INR', '9847389431', '234', '2345198743', 'hari@gmail.com', 'www.hari.com', '3498', '9829349898', 'English ', 1, '', NULL, NULL, NULL, NULL, 0),
(156, '2022-09-03 08:16:02', '2023-09-15 14:04:30', 'Kerry Indev Logistics Pvt Ltd', 'New No.92, Old No.287, EMR Complex, Thambu Chetty Street', '', 'Chennai', ' Andhra Pradesh', 0, ' 600001', 'IN', 'USD', '', '', '', '', '', '33AABCC1756D4Z4', '', 'system', 0, '', NULL, NULL, NULL, NULL, 0),
(157, '2022-09-09 11:43:15', '2022-09-09 11:43:15', 'HDFC Bank Ltd', '', '', '', '', 0, '', 'IN', '', '', '', '', '', '', '', '', 'system', 1, 'Mrs. Rekha', NULL, NULL, NULL, NULL, 0),
(158, '2022-09-13 10:40:05', '2022-09-13 10:40:05', 'Nimi Holdings and Technologies India P Ltd', 'K35,Arkmind Holdings P Ltd, 10th main road, Ambattur', '', 'Chennai', 'Tamil Nadu', 0, '', 'IN', '', '', '', '', '', '', '33AAACA7394J1ZJ', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(159, '2022-09-13 14:21:05', '2022-09-13 14:21:05', 'BET MEDICAL P LTD', '', '', '', '', 0, '', 'IN', '', '', '', '', '', '', '33AAACB4421H1Z9', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(167, '2023-01-03 09:44:55', '2023-01-03 10:21:15', 'MS Burnt Off', 'A/1 Nutan Society', 'Seaward Road, Valmiki Nagar, Thiruvanmiyur', 'Chennai', ' Tamil Nadu', 0, '600020', 'IN', 'INR', '9940412990', '', '9940412990', 'me@burntoff.com', 'burntoff.com', '33AAKCB9937G1ZE', 'AAKCB9937G', 'english', 1, 'Rajasekhar', NULL, NULL, NULL, NULL, 0),
(171, '2023-01-19 10:08:11', '2023-01-19 10:08:11', 'zagreb consultancy', '3rd cross main street', 'Nungabakkam', 'Chennai', ' Tamil Nadu', 0, '600001', 'IN', 'INR', '04426642334', NULL, '9787855432', 'zagreb@gmail.com', 'www.zagreb.co.in', '29BDANE5926A7C7', 'CRAOJ7971R', 'english', 1, 'William', NULL, NULL, NULL, NULL, 0),
(162, '2022-11-07 10:53:14', '2023-01-19 10:47:44', 'Smart Us', 'Y-49, 9th street, Y Block, Anna Nagar', '', 'Chennai', ' Tamil Nadu', 0, '600040', 'IN', 'INR', '7384910923', '', '7463829156', 'suman@gmail.com', 'smartus.in', '29RSFTH4512J9P', 'ASVED8734U', 'english', 1, 'Suman', NULL, NULL, NULL, NULL, 0),
(163, '2022-12-27 11:39:12', '2022-12-27 11:39:12', 'Client demo', '', '', '', 'Andhra Pradesh', 0, '', 'IN', 'INR', '', '', '', '', '', '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(164, '2022-12-28 10:46:51', '2023-01-19 10:15:03', 'Varun Chandrasekhar', 'Y-49, 9th street, Y Block, Anna Nagar', '', 'Chennai', ' Tamil Nadu', 0, '600040', 'IN', 'INR', '7358120804', '457', '7358120804', 'hello@axiomconsulting.in', 'axiomconsulting.in', '4750', '345698120934', 'english', 1, 'varun', NULL, NULL, NULL, NULL, 0),
(165, '2022-12-28 10:59:44', '2022-12-28 10:59:44', 'suma', '', '', '', 'Andhra Pradesh', 0, '', 'IN', 'INR', '', '', '', '', '', '', '', 'system', 1, '', NULL, NULL, NULL, NULL, 0),
(173, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Varun Chandrasekhar', 'Y-49, 9th street, Y Block, Anna Nagar', '', 'Chennai', 'Andhra Pradesh', 0, '600040', 'IN', 'INR', '8735401245', '4532', '7463829156', 'hello@axiomconsulting.in', 'axiomconsulting.in', '4750', '345698120934', 'English ', 1, 'varun', NULL, NULL, NULL, NULL, 0),
(174, '0000-00-00 00:00:00', '2023-09-22 15:22:25', 'Bhim', 'Y-49, 9th street, Y Block, Anna Nagar', '', 'Chennai', 'Tamil Nadu', 0, '600040', 'IN', 'USD', '8735401245', '4532', '7463829156', 'hello@axiomconsulting.in', 'axiomconsulting.in', '29RSFTH4512J9P', 'ASVED8734U', 'English ', 0, 'sen', NULL, NULL, NULL, NULL, 0),
(175, '2023-09-02 12:45:39', '2023-09-02 12:45:39', 'Hari', 'guindy', '', 'chennai', ' Arunachal Pradesh', 0, '604930', 'HU', 'USD', '9847389431', '234', '2345198743', 'hari@gmail.com', 'www.hari.com', '3498', '9829349898', 'english', 0, '', NULL, NULL, NULL, NULL, 0),
(176, '2023-09-02 13:05:45', '2023-09-02 13:05:45', 'suman', 'guindy', '', 'chennai', ' Tamil Nadu', 0, '604930', 'IN', 'INR', '9847389431', '234', '2345198743', 'hari@gmail.com', 'www.hari.com', '3498', '9829349898', 'system', 0, '', NULL, NULL, NULL, NULL, 0),
(177, '0000-00-00 00:00:00', '2023-09-26 19:28:49', 'Laptop', 'guindy', '', 'chennai', 'Tamil Nadu', 0, '604930', 'IN', 'INR', '9847389431', '234', '2345198743', 'hari@gmail.com', 'www.hari.com', '3498', '9829349898', 'English ', 1, 'Dell', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_client_custom`
--

CREATE TABLE `ip_client_custom` (
  `client_custom_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_custom_fieldid` int(11) NOT NULL,
  `client_custom_fieldvalue` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_client_custom`
--

INSERT INTO `ip_client_custom` (`client_custom_id`, `client_id`, `client_custom_fieldid`, `client_custom_fieldvalue`) VALUES
(3, 4, 5, '1'),
(5, 6, 5, '1'),
(6, 7, 5, '1'),
(8, 9, 5, '1'),
(9, 10, 5, '1'),
(10, 11, 5, ''),
(11, 12, 5, '1'),
(12, 13, 5, ''),
(13, 14, 5, ''),
(14, 15, 5, '1'),
(15, 16, 5, '1'),
(16, 17, 5, '1'),
(17, 18, 5, '1'),
(18, 19, 5, '2'),
(19, 20, 5, '1'),
(20, 21, 5, '1'),
(21, 22, 5, '1'),
(22, 23, 5, ''),
(23, 24, 5, '1'),
(24, 25, 5, '2'),
(25, 26, 5, '1'),
(26, 27, 5, '2'),
(27, 28, 5, '1'),
(28, 29, 5, '1'),
(29, 30, 5, '1'),
(30, 31, 5, '1'),
(31, 32, 5, '1'),
(32, 33, 5, '1'),
(33, 34, 5, '1'),
(34, 35, 5, '1'),
(35, 36, 5, '1'),
(36, 37, 5, '1'),
(37, 38, 5, ''),
(38, 39, 5, '1'),
(39, 40, 5, '1'),
(40, 41, 5, '1'),
(41, 42, 5, '1'),
(42, 43, 5, '1'),
(44, 45, 5, '1'),
(45, 46, 5, '1'),
(46, 47, 5, '1'),
(47, 48, 5, '1'),
(48, 49, 5, '1'),
(49, 50, 5, '1'),
(50, 51, 5, '1'),
(51, 52, 5, '1'),
(52, 53, 5, '1'),
(53, 54, 5, '1'),
(54, 55, 5, '1'),
(55, 56, 5, '1'),
(56, 57, 5, '1'),
(57, 58, 5, ''),
(58, 59, 5, '1'),
(59, 60, 5, '1'),
(60, 61, 5, '1'),
(61, 62, 5, '1'),
(62, 63, 5, '1'),
(63, 64, 5, ''),
(64, 65, 5, '1'),
(65, 66, 5, '1'),
(66, 67, 5, '1'),
(67, 68, 5, '1'),
(68, 69, 5, '1'),
(69, 70, 5, '1'),
(70, 71, 5, ''),
(71, 72, 5, '1'),
(72, 73, 5, '1'),
(73, 74, 5, '1'),
(74, 75, 5, '1'),
(75, 76, 5, '1'),
(76, 77, 5, '1'),
(77, 78, 5, '1'),
(78, 79, 5, '1'),
(79, 80, 5, '1'),
(80, 81, 5, ''),
(81, 82, 5, '1'),
(82, 83, 5, '1'),
(83, 84, 5, '1'),
(84, 85, 5, '1'),
(85, 86, 5, '1'),
(86, 87, 5, '1'),
(87, 88, 5, '2'),
(88, 89, 5, '1'),
(89, 90, 5, '1'),
(90, 91, 5, '1'),
(92, 93, 5, '1'),
(93, 94, 5, '1'),
(94, 95, 5, '1'),
(95, 96, 5, '1'),
(96, 97, 5, '1'),
(97, 98, 5, '1'),
(98, 99, 5, '1'),
(99, 100, 5, '1'),
(100, 101, 5, '1'),
(101, 102, 5, '1'),
(102, 103, 5, '1'),
(103, 104, 5, '1'),
(104, 105, 5, '1'),
(105, 106, 5, '1'),
(106, 107, 5, '1'),
(107, 108, 5, '1'),
(108, 109, 5, '1'),
(109, 110, 5, '1'),
(110, 111, 5, ''),
(111, 112, 5, '1'),
(112, 113, 5, '1'),
(113, 114, 5, ''),
(114, 115, 5, '1'),
(115, 116, 5, '1'),
(116, 117, 5, '1'),
(117, 118, 5, '1'),
(118, 119, 5, '1'),
(119, 120, 5, '1'),
(120, 121, 5, '1'),
(121, 122, 5, '1'),
(122, 123, 5, '1'),
(123, 124, 5, '1'),
(124, 125, 5, '1'),
(125, 126, 5, '1'),
(126, 127, 5, ''),
(127, 128, 5, ''),
(128, 129, 5, '1'),
(129, 130, 5, '1'),
(130, 131, 5, '1'),
(131, 132, 5, '1'),
(132, 133, 5, '1'),
(133, 134, 5, '1'),
(134, 135, 5, '1'),
(135, 136, 5, '1'),
(136, 137, 5, '1'),
(137, 138, 5, '1'),
(138, 139, 5, '1'),
(139, 140, 5, '1'),
(140, 141, 5, '1'),
(141, 142, 5, ''),
(142, 143, 5, ''),
(143, 144, 5, '1'),
(144, 145, 5, ''),
(145, 146, 5, '1'),
(146, 147, 5, '1'),
(147, 148, 5, '1'),
(148, 149, 5, '1'),
(149, 150, 5, ''),
(150, 151, 5, '1'),
(151, 152, 5, '1'),
(152, 153, 5, '1'),
(153, 154, 5, '1'),
(154, 155, 5, '1'),
(155, 156, 5, '1'),
(156, 157, 5, ''),
(157, 158, 5, '1'),
(158, 159, 5, '1'),
(160, 45, 1, 'new custom created'),
(161, 175, 2, '1'),
(162, 175, 5, 'checked'),
(163, 176, 2, ''),
(164, 176, 5, NULL),
(165, 174, 2, ''),
(166, 174, 5, ''),
(167, 45, 2, ''),
(168, 6, 2, '1'),
(169, 21, 2, ''),
(170, 156, 2, ''),
(171, 117, 2, ''),
(172, 155, 2, ''),
(173, 24, 2, ''),
(174, 177, 2, 'hello'),
(175, 177, 5, 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `ip_client_notes`
--

CREATE TABLE `ip_client_notes` (
  `client_note_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_note_date` date NOT NULL,
  `client_note` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_custom_fields`
--

CREATE TABLE `ip_custom_fields` (
  `custom_field_id` int(11) NOT NULL,
  `custom_field_table` varchar(50) DEFAULT NULL,
  `custom_field_label` varchar(50) DEFAULT NULL,
  `custom_field_type` varchar(255) NOT NULL DEFAULT 'TEXT',
  `custom_field_location` int(11) DEFAULT 0,
  `custom_field_order` int(11) DEFAULT 999
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_custom_fields`
--

INSERT INTO `ip_custom_fields` (`custom_field_id`, `custom_field_table`, `custom_field_label`, `custom_field_type`, `custom_field_location`, `custom_field_order`) VALUES
(2, 'ip_client_custom', 'feedback', 'TEXT', 0, 1),
(3, 'ip_invoice_custom', 'feedback', 'TEXT', 0, 1),
(4, 'ip_invoice_custom', 'notes', 'TEXT', 0, 1),
(5, 'ip_client_custom', 'check ', 'TEXT', 0, 2),
(6, 'ip_payment_custom', 'currency', 'TEXT', 0, 1),
(7, 'ip_quote_custom', 'Comment', 'TEXT', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ip_custom_values`
--

CREATE TABLE `ip_custom_values` (
  `custom_values_id` int(11) NOT NULL,
  `custom_values_field` int(11) NOT NULL,
  `custom_values_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_custom_values`
--

INSERT INTO `ip_custom_values` (`custom_values_id`, `custom_values_field`, `custom_values_value`) VALUES
(1, 2, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `ip_email_templates`
--

CREATE TABLE `ip_email_templates` (
  `email_template_id` int(11) NOT NULL,
  `email_template_title` text DEFAULT NULL,
  `email_template_type` varchar(255) DEFAULT NULL,
  `email_template_body` longtext NOT NULL,
  `email_template_subject` text DEFAULT NULL,
  `email_template_from_name` text DEFAULT NULL,
  `email_template_from_email` text DEFAULT NULL,
  `email_template_cc` text DEFAULT NULL,
  `email_template_bcc` text DEFAULT NULL,
  `email_template_pdf_template` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_email_templates`
--

INSERT INTO `ip_email_templates` (`email_template_id`, `email_template_title`, `email_template_type`, `email_template_body`, `email_template_subject`, `email_template_from_name`, `email_template_from_email`, `email_template_cc`, `email_template_bcc`, `email_template_pdf_template`) VALUES
(1, 'Send Invoice', 'invoice', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\r\n    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\r\n    <link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">\r\n</head>\r\n<body style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-family: Poppins,system-ui; background-color: #fff;\">\r\n\r\n    <div style=\"background-color: #f4f5f7;\">\r\n    \r\n        <table cellspacing=\"0\" cellpadding=\"0\" align=\"center\" width=\"450px\">\r\n        \r\n        <thead>\r\n            <tr align=\"center\">\r\n                <td colspan=\"2\"> <img src=\"data:image/png;base64,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\" alt=\"billite-logo\" width=\"90px\">\r\n                </td>\r\n            </tr>\r\n            <tr align=\"center\" height=\"180px\" style=\"color: #fff; background: linear-gradient(to right bottom, #0b0b40, #003b78, #00698c, #009476, #5ab947);\">\r\n                <td colspan=\"2\">\r\n                    <h1 style=\"margin:5px 0px;\">Invoice #{{{invoice_number}}}</h1>\r\n                    <p style=\"margin:5px 0px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elite.</p>\r\n                </td>\r\n            </tr>\r\n        </thead>\r\n\r\n        <tbody bgcolor=\"#fff\">\r\n            <tr>\r\n                <td colspan=\"2\" align=\"center\" style=\"padding-top: 30px;\">\r\n                    <p style=\"margin:5px 0px;\">Thank you for your business. Your invoice can be viewed, printed and downloaded as PDF from the link below.</p>\r\n                </td>\r\n            </tr>\r\n            <tr>\r\n                <td colspan=\"2\" style=\"padding: 30px 0px;\">\r\n                    <table  width=\"300px\" align=\"center\" cellpadding=\"8px\" cellspacing=\"0\">\r\n<tr>\r\n                                <td>Invoice #</td>\r\n                                <td align=\"right\">{{{invoice_date_created}}}</td>\r\n                            </tr>                            \r\n<tr>\r\n                                <td>Sub-Total</td>\r\n                                <td align=\"right\">{{{invoice_item_subtotal}}}</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td>Tax Total</td>\r\n                                <td align=\"right\">{{{invoice_item_tax_total}}}</td>\r\n                            </tr>\r\n                            <tr>\r\n                                <td>Total Payable</td>\r\n                                <td align=\"right\">{{{invoice_total}}}</td>\r\n                            </tr>\r\n                    </table>\r\n                </td>\r\n            </tr>\r\n            <tr align=\"center\">\r\n                <td colspan=\"2\" style=\"padding-bottom: 30px;\">\r\n                    <p style=\"width: 250px; background :#5ab947; padding: 8px 0px; border-radius: 3px;\"><a href=\"\" style=\"text-decoration: none; color: #fff;\">Visit online</a></p>\r\n                </td>\r\n                \r\n            </tr>\r\n        </tbody>\r\n\r\n        <tfoot height=\"30px\">\r\n\r\n            <tr valign=\"middle\" style=\"font-size: 9px; font-weight: bold;\">\r\n                <td align=\"left\" style=\"margin: 0px; padding: 0px; color: #000;\">\r\n                    <a  style=\"padding-left: 10px; color: #000; text-decoration: none;\" href=\"\">Contact Us</a> | <a style=\"color: #000; text-decoration: none;\"  href=\"\">Support</a>\r\n                </td>\r\n\r\n                <td align=\"right\" style=\"padding-right: 10px; color: #000;\">\r\n                    <a style=\"color: #000; text-decoration: none;\"  href=\"\">Powered by Billite</a>\r\n                </td>\r\n            </tr>\r\n\r\n        </tfoot>\r\n\r\n        </table>\r\n\r\n    </div>\r\n\r\n</body>\r\n</html>', 'Sending Invoice #{{{invoice_number}}}', '{{{user_name}}}', 'info@billite.in', '{{{user_email}}}', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ip_families`
--

CREATE TABLE `ip_families` (
  `family_id` int(11) NOT NULL,
  `family_name` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_families`
--

INSERT INTO `ip_families` (`family_id`, `family_name`) VALUES
(1, 'Garments'),
(2, 'Fabrics'),
(3, 'Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `ip_imports`
--

CREATE TABLE `ip_imports` (
  `import_id` int(11) NOT NULL,
  `import_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_import_details`
--

CREATE TABLE `ip_import_details` (
  `import_detail_id` int(11) NOT NULL,
  `import_id` int(11) NOT NULL,
  `import_lang_key` varchar(35) NOT NULL,
  `import_table_name` varchar(35) NOT NULL,
  `import_record_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoices`
--

CREATE TABLE `ip_invoices` (
  `invoice_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `invoice_group_id` int(11) NOT NULL,
  `invoice_status_id` tinyint(2) NOT NULL DEFAULT 1,
  `is_read_only` tinyint(1) DEFAULT NULL,
  `invoice_password` varchar(90) DEFAULT NULL,
  `invoice_date_created` date NOT NULL,
  `invoice_time_created` datetime DEFAULT NULL,
  `invoice_date_modified` datetime NOT NULL,
  `invoice_date_due` date NOT NULL,
  `invoice_number` varchar(100) DEFAULT NULL,
  `invoice_discount_amount` decimal(20,2) DEFAULT NULL,
  `invoice_discount_percent` decimal(20,2) DEFAULT NULL,
  `invoice_terms` longtext NOT NULL,
  `invoice_url_key` char(32) NOT NULL,
  `payment_method` int(11) NOT NULL DEFAULT 0,
  `creditinvoice_parent_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_invoices`
--

INSERT INTO `ip_invoices` (`invoice_id`, `user_id`, `client_id`, `invoice_group_id`, `invoice_status_id`, `is_read_only`, `invoice_password`, `invoice_date_created`, `invoice_time_created`, `invoice_date_modified`, `invoice_date_due`, `invoice_number`, `invoice_discount_amount`, `invoice_discount_percent`, `invoice_terms`, `invoice_url_key`, `payment_method`, `creditinvoice_parent_id`) VALUES
(23, 1, 12, 3, 2, NULL, NULL, '2020-08-19', '2023-10-04 20:07:59', '2020-08-31 14:39:50', '2020-09-18', 'OCD000009', '0.00', '0.00', '', 'mFegEIX7nh9rkf8MlxRywJAKoW3UcCp5', 0, NULL),
(22, 1, 7, 3, 4, 1, NULL, '2020-07-24', '2023-10-04 20:22:12', '2020-07-24 20:24:35', '2020-08-23', 'OCD000008', '0.00', '0.00', '', 'TIGlEORuqWhtXUg4zLj3sBK1FHn8AVpb', 0, NULL),
(19, 1, 10, 3, 4, 1, NULL, '2020-06-17', '2023-10-04 19:13:05', '2020-10-09 14:10:49', '2020-07-17', 'OCD000005', '0.00', '0.00', '', 'nPUtJsELM8db41HjB5NRCDrVaFzSuY0c', 0, NULL),
(20, 1, 11, 3, 2, NULL, NULL, '2023-10-04', '2023-10-04 11:28:59', '2023-10-04 12:41:45', '2023-11-04', 'OCD000006', '0.00', '0.00', 'Hello', 'CElbHKu8zgLqA3Yix0QrdjwfI2JhFN5a', 1, NULL),
(21, 1, 13, 3, 2, NULL, NULL, '2020-07-18', '2023-10-04 14:55:04', '2020-11-17 12:39:52', '2020-08-17', 'OCD000007', '0.00', '0.00', '', 'eISqYWm16PpO9JGBsDiU8NxHMCTkFlKQ', 0, NULL),
(18, 1, 9, 3, 2, NULL, NULL, '2020-06-16', '2023-10-04 22:05:23', '2020-06-16 22:09:42', '2020-07-16', 'OCD000004', '0.00', '0.00', '', '6Z483x0CQhk1jPrKXspWdUDzJgSGbHOn', 0, NULL),
(17, 1, 9, 3, 1, NULL, '', '2020-06-11', '2023-10-04 20:02:12', '2020-06-11 20:02:35', '2020-07-11', 'OCD000003', NULL, NULL, '', 'vaxk1CHMY7UnLbiczAeXT3gROsfW0B2D', 0, NULL),
(13, 1, 6, 3, 4, 1, NULL, '2020-06-05', '2023-10-04 18:36:39', '2021-04-18 05:31:15', '2020-07-05', 'OCD000001', '0.00', '0.00', '', 'eptzh5TIYil31qFsHSCarnxyOQ7fKAVj', 0, NULL),
(14, 1, 7, 3, 2, NULL, NULL, '2020-06-07', '2023-10-04 19:12:40', '2020-06-08 15:27:54', '2020-07-07', 'OCD000002', '0.00', '0.00', '', 'pCA8wo7qPUSceOsK04EMFJvkHjilnzYf', 0, NULL),
(24, 1, 16, 3, 2, NULL, NULL, '2020-08-25', '2023-10-04 15:13:55', '2020-08-25 15:17:29', '2020-09-24', 'OCD000010', '0.00', '0.00', '', 'eV6JgTxdWFmEpb92MRPiqOICw31Kk8XA', 0, NULL),
(25, 1, 17, 3, 2, NULL, NULL, '2020-08-27', '2023-10-04 18:37:58', '2020-08-28 18:31:47', '2020-09-26', 'OCD000011', '0.00', '0.00', '', 'LuBQtGZECoXT0M5r2RKsNd7jPO6DUcIn', 0, NULL),
(26, 1, 18, 3, 1, NULL, NULL, '2020-09-09', '2023-10-04 11:01:06', '2020-09-09 11:44:48', '2020-10-09', 'OCD000012', '0.00', '0.00', '', '9B1rQgk3NiwbYSumfqEWJA5GRXLvpatH', 0, NULL),
(27, 1, 15, 3, 1, NULL, '', '2020-09-21', '2023-10-04 13:41:04', '2020-09-21 13:41:23', '2020-10-21', 'OCD000013', '0.00', '13.00', '', 'vTDSAseoYXBj95KOnuh2mNHaJGQtRgwF', 0, NULL),
(28, 1, 15, 3, 2, NULL, NULL, '2020-09-21', '2023-10-04 13:41:04', '2020-09-22 06:03:34', '2020-10-21', 'OCD000014', '0.00', '0.00', '', 'WgwGceRIl5dQF6U9aEqBTNxzyihP3t4X', 0, NULL),
(29, 1, 19, 3, 2, NULL, '', '2020-09-28', '2023-10-04 10:52:19', '2020-09-28 10:53:26', '2020-10-28', 'OCD000015', '0.00', '0.00', '', 'N3ZSuqM6WzJPeylED4YahQtC0GIkrBgj', 0, NULL),
(30, 1, 19, 3, 2, NULL, NULL, '2020-09-28', '2023-10-04 10:52:19', '2020-10-14 07:45:48', '2020-10-28', 'OCD000016', '0.00', '0.00', '', 'c6z1YDRX8uZ9Va0tySkx5QevU2gfqjEH', 0, NULL),
(31, 1, 20, 3, 2, NULL, NULL, '2020-09-28', '2023-10-04 12:45:39', '2020-09-28 12:50:55', '2020-10-28', 'OCD000017', '0.00', '0.00', '', 'ks8EThiS0YBKjr6H7CG59zXeRtZfyO2u', 0, NULL),
(32, 1, 21, 3, 2, NULL, NULL, '2020-09-28', '2023-10-04 13:38:27', '2020-09-28 13:54:06', '2020-10-28', 'OCD000018', '0.00', '0.00', '', 'Nlc5Q8nDuKIX16Te3SFrB2zCHyMPLdZo', 0, NULL),
(33, 1, 22, 3, 2, NULL, NULL, '2020-09-29', '2023-10-04 10:54:43', '2020-09-29 12:35:32', '2020-10-29', 'OCD000019', '0.00', '0.00', '', 'CXwHyt9an5rclBzb12pZKsTdEGVODM4L', 0, NULL),
(34, 1, 23, 3, 2, NULL, NULL, '2020-10-03', '2023-10-04 09:54:02', '2020-10-03 09:55:52', '2020-11-02', 'OCD000020', '0.00', '0.00', '', 'uEFzSoO5yBfCvleHZWDtI1NiTwRKrcah', 0, NULL),
(35, 1, 24, 3, 2, NULL, NULL, '2020-10-05', '2023-10-04 06:51:42', '2020-10-05 07:15:52', '2020-11-04', 'OCD000021', '0.00', '0.00', '', 'IJGh5XxFBbAKD4tUOEZV3aYRy07Nl8q2', 0, NULL),
(36, 1, 10, 3, 2, NULL, NULL, '2020-10-09', '2023-10-04 14:04:55', '2020-10-09 14:09:50', '2020-10-09', 'OCD000022', '0.00', '0.00', '', 'LcNtE4RnXzeC3Oy9QoMTmK8gJ70rapWH', 0, NULL),
(37, 1, 25, 3, 2, NULL, NULL, '2020-10-13', '2023-10-04 08:08:20', '2020-10-13 08:11:33', '2020-11-12', 'OCD000023', '0.00', '0.00', '', 'mPUX8wiWkBbedlTvDsh9qyGYfJM247Rt', 0, NULL),
(38, 1, 19, 3, 2, NULL, NULL, '2020-10-10', '2023-10-04 09:36:04', '2020-10-13 09:37:15', '2020-11-09', 'OCD000024', '0.00', '0.00', '', 'XhOg8tHLCfNwEvW0sDMluK3nrcyF5J1I', 0, NULL),
(39, 1, 26, 3, 2, NULL, NULL, '2020-10-13', '2023-10-04 12:42:02', '2020-10-13 12:47:50', '2020-11-12', 'OCD000025', '0.00', '0.00', '', 'o5rkKWiJZP17adgxl93IwSTQVsf8FO2h', 0, NULL),
(40, 1, 27, 3, 2, NULL, NULL, '2020-10-14', '2023-10-04 07:35:29', '2020-10-29 07:15:37', '2020-11-13', 'OCD000026', '0.00', '0.00', '', 'lqVNPjm257RxfTdyMgWIczQLwnoBbXEA', 0, NULL),
(41, 1, 28, 3, 2, NULL, NULL, '2020-10-14', '2023-10-04 09:47:52', '2020-10-14 14:33:27', '2020-11-13', 'OCD000027', '0.00', '0.00', '', 'wQbjLOSrJg3UmxTleYcR0z2iMyok9WKD', 0, NULL),
(42, 1, 29, 3, 2, NULL, NULL, '2020-10-19', '2023-10-04 07:56:43', '2020-10-19 07:59:09', '2020-11-18', 'OCD000028', '0.00', '0.00', '', 'Ywc7WU4pJIDnloPyBbRrX0QMseamGE1H', 0, NULL),
(43, 1, 31, 3, 2, NULL, NULL, '2020-10-29', '2023-10-04 14:06:41', '2020-10-29 14:20:49', '2020-11-28', 'OCD000029', '0.00', '0.00', '', 'i40vDqRgz8B2uO7LkErCFSJNYb5ZxTsG', 0, NULL),
(44, 1, 32, 3, 2, NULL, NULL, '2020-11-04', '2023-10-04 10:56:49', '2020-11-04 10:59:05', '2020-12-04', 'OCD000030', '0.00', '0.00', '', 'XteUfVFsJG46ZdSHmDBc2WOKbLnr7Qow', 0, NULL),
(45, 1, 33, 3, 2, NULL, NULL, '2020-11-04', '2023-10-04 11:04:31', '2020-11-04 11:12:07', '2020-12-04', 'OCD000031', '0.00', '0.00', '', 'BVkvFnPjtYQq9CsmE5MD14KhLJou87He', 0, NULL),
(46, 1, 34, 3, 2, NULL, NULL, '2020-11-17', '2023-10-04 12:24:37', '2020-11-28 08:19:22', '2020-12-17', 'OCD000032', '0.00', '0.00', '', 'ap5JuPnz7AtSH8OCj9B2kKN43sdefgwF', 0, NULL),
(47, 1, 35, 3, 2, NULL, NULL, '2020-11-20', '2023-10-04 10:03:46', '2020-11-20 10:17:10', '2020-12-20', 'OCD000033', '0.00', '0.00', '', 'kxrRI0cqGe7U8lESaJTwLdA2BPHFQsY3', 0, NULL),
(48, 1, 36, 3, 2, NULL, NULL, '2020-11-21', '2023-10-04 05:47:42', '2020-11-21 06:00:05', '2020-12-21', 'OCD000034', '0.00', '0.00', '', '0J8uvA79IhG3XkL6zxcnTqKVOYPgawmr', 0, NULL),
(49, 1, 34, 3, 2, NULL, NULL, '2020-11-29', '2023-10-04 13:46:05', '2020-11-29 13:50:11', '2020-12-29', 'OCD000035', '0.00', '0.00', '', 'K7VmLNsW6xBTOepfiYJtGvc1AznlaQMu', 0, NULL),
(50, 1, 37, 3, 1, NULL, '', '2020-11-29', '2023-10-04 14:16:51', '2020-11-29 14:16:53', '2020-12-29', 'OCD000036', NULL, NULL, '', 'YWgyUG8CE94uRqkeawsLbfrnoQVOvzA0', 0, NULL),
(51, 1, 37, 3, 2, NULL, NULL, '2020-12-03', '2023-10-04 07:46:33', '2020-12-09 10:02:31', '2021-01-02', 'OCD000037', '0.00', '0.00', '', 'mEGC138jsgMcq2tAhRoINJHnr9TVvlK4', 0, NULL),
(52, 1, 38, 3, 2, NULL, NULL, '2020-12-09', '2023-10-04 11:42:44', '2020-12-09 12:34:38', '2021-01-08', 'OCD000038', '0.00', '0.00', '', 'HhVTd1seR6ZBLaf7UIl9Pz3GDpMocOKi', 0, NULL),
(53, 1, 39, 3, 2, NULL, NULL, '2020-12-11', '2023-10-04 12:51:07', '2020-12-11 12:55:33', '2021-01-10', 'OCD000039', '0.00', '0.00', '', '6Lgxch1qZlOou5UCK734faWNykIjSemw', 0, NULL),
(54, 1, 40, 3, 2, NULL, NULL, '2020-12-17', '2023-10-04 07:20:30', '2020-12-17 07:29:36', '2021-01-16', 'OCD000040', '0.00', '0.00', '', 'vbdZeJLMXjFTEAi0H187WOn6rwoVfShu', 0, NULL),
(55, 1, 41, 3, 2, NULL, NULL, '2020-12-17', '2023-10-04 13:29:52', '2020-12-17 13:32:10', '2021-01-16', 'OCD000041', '0.00', '0.00', '', 'SQUxioRjHdABq2CVgOX7MGa1uthwr9I5', 0, NULL),
(56, 1, 42, 3, 2, NULL, NULL, '2020-12-21', '2023-10-04 09:13:24', '2020-12-21 10:10:00', '2021-01-20', 'OCD000042', '0.00', '0.00', '', 'tGjXLMS1ruqIeodV4za8wPJ2NC360ZUA', 0, NULL),
(57, 1, 43, 3, 2, NULL, NULL, '2020-12-21', '2023-10-04 15:19:21', '2020-12-23 11:04:16', '2021-01-20', 'OCD000043', '0.00', '0.00', '', 'IcWFA0NBKt5ehMzi18klYXPJu7n6GvO3', 0, NULL),
(61, 1, 45, 3, 3, NULL, NULL, '2020-12-29', '2023-10-04 13:48:34', '2020-12-29 15:53:55', '2021-01-28', 'OCD000047', '0.00', '0.00', '', 'I2DmBKCcy3F4G7pLrTQN90w6iXeZjlOx', 0, NULL),
(60, 1, 45, 3, 1, NULL, '', '2020-12-29', '2023-10-04 13:47:06', '2020-12-29 13:47:10', '2021-01-28', 'OCD000046', NULL, NULL, '', 'VJmNyU62T9FcWrzRouCHgD5MsvdiSjtq', 0, NULL),
(62, 1, 38, 3, 2, NULL, NULL, '2020-12-29', '2023-10-04 16:05:42', '2020-12-29 16:25:08', '2021-01-28', 'OCD000048', '0.00', '0.00', '', 'X63eLDWI9YcU8K5uEHbndFsOt024JvqM', 0, NULL),
(63, 1, 47, 3, 2, NULL, NULL, '2021-01-17', '2023-10-04 12:37:08', '2021-01-17 13:18:39', '2021-02-16', 'OCD000049', '0.00', '0.00', '', 'oavQph7e1StLfdPl9NgAVzXqbZn0yOW6', 0, NULL),
(64, 1, 13, 3, 2, NULL, NULL, '2021-01-17', '2023-10-04 13:21:36', '2021-01-17 13:49:52', '2021-02-16', 'OCD000050', '0.00', '0.00', '', 'cmpT3WGV8U2QyLrH5g9RAOBbY7NqeiDJ', 0, NULL),
(65, 1, 48, 3, 2, NULL, NULL, '2021-01-23', '2023-10-04 14:03:14', '2021-01-23 14:09:10', '2021-02-22', 'OCD000051', '0.00', '0.00', '', 'bQAcXPxCpwq2g1BeWIrmJOTMY7dsVLiG', 0, NULL),
(66, 1, 38, 3, 2, NULL, NULL, '2021-01-23', '2023-10-04 14:10:25', '2021-01-23 14:13:13', '2021-02-22', 'OCD000052', '0.00', '0.00', '', 'bwKaNU7FyvziD98nJRq5motrQSscg1Tk', 0, NULL),
(67, 1, 49, 3, 2, NULL, NULL, '2021-01-24', '2023-10-04 14:39:32', '2021-01-24 14:46:22', '2021-02-23', 'OCD000053', '0.00', '0.00', '', 'EpY1nNDAdesybX8tI9TzHFUgxq0Lrw4f', 0, NULL),
(68, 1, 50, 3, 2, NULL, NULL, '2021-01-24', '2023-10-04 19:20:28', '2021-01-24 19:42:23', '2021-02-23', 'OCD000054', '0.00', '0.00', '', 'kZ58hEQgIPKSuxpObq70vRXTtGaneBDd', 0, NULL),
(69, 1, 51, 3, 2, NULL, NULL, '2021-01-25', '2023-10-04 07:47:23', '2021-01-25 07:50:52', '2021-02-24', 'OCD000055', '0.00', '0.00', '', 'O2iQ978MHVs1XyvJuFZaoRTkmpSUCYN3', 0, NULL),
(70, 1, 52, 3, 2, NULL, NULL, '2021-01-25', '2023-10-04 07:56:52', '2021-01-25 08:00:13', '2021-02-24', 'OCD000056', '0.00', '0.00', '', 'w7s6GtvD0Jb8cN9h3oymKBVnH2eXC5ku', 0, NULL),
(71, 1, 53, 3, 2, NULL, NULL, '2021-01-31', '2023-10-04 07:26:05', '2021-02-10 14:56:30', '2021-03-02', 'OCD000057', '0.00', '0.00', '', 'YdmZSWbQFv0NEKJCRI9glTjqwtGLOV43', 0, NULL),
(72, 1, 54, 3, 2, NULL, NULL, '2021-02-04', '2023-10-04 19:02:35', '2021-02-04 19:04:40', '2021-03-06', 'OCD000058', '0.00', '0.00', '', 'tZks0pUVTAPE5hmMR7rDbKQYWHGnC48d', 0, NULL),
(73, 1, 55, 3, 1, NULL, '', '2021-02-06', '2023-10-04 08:05:35', '2021-02-06 08:05:37', '2021-03-08', 'OCD000059', NULL, NULL, '', '0ZWqLcFDIlny6HksAgEMV79Tba1YK4zm', 0, NULL),
(74, 1, 55, 3, 2, NULL, NULL, '2021-02-06', '2023-10-04 12:33:54', '2021-02-06 12:36:12', '2021-03-08', 'OCD000060', '0.00', '0.00', '', 'vdohU0E4Sp7Cmtqwb9rzAGlQiWgJk6ZO', 0, NULL),
(75, 1, 56, 3, 2, NULL, NULL, '2021-02-23', '2023-10-04 09:36:13', '2021-02-24 12:05:57', '2021-03-25', 'OCD000061', '0.00', '0.00', '', 'Em7chMxvG8KHeZbpwOt04qJTCjVYzfgR', 0, NULL),
(76, 1, 24, 3, 2, NULL, NULL, '2021-02-24', '2023-10-04 12:51:36', '2021-03-02 06:31:47', '2021-03-26', 'OCD000062', '0.00', '0.00', '', 'zFY5HWngTB9qPRi8y7aGSJEuXvNhrOfj', 0, NULL),
(77, 1, 24, 3, 2, NULL, NULL, '2021-02-26', '2023-10-04 11:50:16', '2021-02-26 11:57:58', '2021-03-28', 'OCD000063', '0.00', '0.00', '', 'FsMETtOaDZIQrjJAvnmGUVHu4X5logqw', 0, NULL),
(78, 1, 33, 3, 2, NULL, NULL, '2021-03-05', '2023-10-04 13:27:32', '2021-03-05 15:11:59', '2021-04-04', 'OCD000064', '0.00', '0.00', '', 'PDreCFMT5SBKlAd4Jz3a1Z2N8q0xtnIj', 0, NULL),
(79, 1, 58, 3, 2, NULL, '', '2021-03-08', '2023-10-04 07:53:31', '2021-03-08 07:53:35', '2021-04-07', 'OCD000065', NULL, NULL, '', 'oFQviCEBWAsOy4wtN0pjdfRczkMXnbD7', 0, NULL),
(80, 1, 57, 3, 2, NULL, NULL, '2021-03-09', '2023-10-04 11:04:01', '2021-03-09 11:31:58', '2021-04-08', 'OCD000066', '0.00', '0.00', '', 'NdH8FBlQDJwxWomZqYGtr4REhz0VSICa', 0, NULL),
(81, 1, 59, 3, 2, NULL, NULL, '2021-03-09', '2023-10-04 13:27:57', '2021-03-09 13:30:50', '2021-04-08', 'OCD000067', '0.00', '0.00', '', '9Dh1zd8pTI3qvZlQNUOwxV2uHAPiF7Gr', 0, NULL),
(82, 1, 60, 3, 2, NULL, NULL, '2021-03-09', '2023-10-04 13:34:50', '2021-03-09 13:36:13', '2021-04-08', 'OCD000068', '0.00', '0.00', '', 'UnIO6Si2K1wZPuyRpqtQcFv74a3ogWxb', 0, NULL),
(83, 1, 61, 3, 2, NULL, NULL, '2021-03-12', '2023-10-04 14:05:22', '2021-03-12 14:08:07', '2021-04-11', 'OCD000069', '0.00', '0.00', '', 'RNWeayozPH6q7Ov9rs4ulbCnAThG1wx5', 0, NULL),
(84, 1, 62, 3, 2, NULL, NULL, '2021-03-15', '2023-10-04 09:02:03', '2021-03-15 09:10:34', '2021-04-14', 'OCD000070', '0.00', '0.00', '', 'S1MWCc2sUzJrLvkXbfhpolDYFqQaxjRe', 0, NULL),
(85, 1, 64, 3, 2, NULL, NULL, '2021-03-16', '2023-10-04 11:47:40', '2021-03-16 11:49:43', '2021-04-15', 'OCD000071', '0.00', '0.00', '', 'gbtCQNrEVPe1ovjpOdiKIkafHTJyZuD8', 0, NULL),
(86, 1, 65, 3, 2, NULL, NULL, '2021-03-22', '2023-10-04 07:24:53', '2021-03-22 08:02:35', '2021-04-21', 'OCD000072', '0.00', '0.00', '', '2jVpLTknDCqKJtHZi3e5wWx1uGgdaE8I', 0, NULL),
(87, 1, 66, 3, 2, NULL, NULL, '2021-03-24', '2023-10-04 08:53:27', '2021-03-24 08:57:28', '2021-04-23', 'OCD000073', '0.00', '0.00', '', '5iXgldTFY9IkQ8S642DzZPEOw71sNqrM', 0, NULL),
(89, 1, 67, 3, 2, NULL, NULL, '2021-03-24', '2023-10-04 09:57:36', '2021-03-24 10:18:36', '2021-04-23', 'OCD000075', '0.00', '0.00', '', 'Jka8jF1XWeArNylvOpEKwCHbD5hiQZS2', 0, NULL),
(90, 1, 68, 3, 2, NULL, NULL, '2021-03-25', '2023-10-04 07:06:17', '2021-03-25 07:07:19', '2021-04-24', 'OCD000076', '0.00', '0.00', '', 'CqH7Bbx6u2NyRfm4SzPAiF10VQavJkIr', 0, NULL),
(91, 1, 59, 3, 2, NULL, NULL, '2021-03-25', '2023-10-04 13:13:55', '2021-03-28 11:06:45', '2021-04-24', 'OCD000077', '0.00', '0.00', '', 'StAVOfTWqQBxC0eXZonmIRkaF7sLD593', 0, NULL),
(92, 1, 69, 3, 2, NULL, NULL, '2021-03-28', '2023-10-04 10:26:52', '2021-03-28 10:56:58', '2021-04-27', 'OCD000078', '0.00', '0.00', '', 'OrzN7XJGS9DgKfFb2k8PpAld4hBxYI3a', 0, NULL),
(93, 1, 70, 3, 2, NULL, NULL, '2021-03-31', '2023-10-04 14:51:50', '2021-03-31 14:54:44', '2021-04-30', 'OCD000079', '0.00', '0.00', '', 'SusQXdTGRheomvw1riJqOYMIFnfxpaz9', 0, NULL),
(94, 1, 71, 3, 4, 1, NULL, '2021-03-31', '2023-10-04 15:02:38', '2021-05-26 07:29:34', '2021-04-30', 'OCD000080', '0.00', '0.00', '', 'OpyJnsANQYa5qXPLRdtfVuKx0B9WroDS', 0, NULL),
(95, 1, 72, 3, 4, 1, NULL, '2021-03-31', '2023-10-04 15:22:00', '2021-05-26 07:31:45', '2021-04-30', 'OCD000081', '0.00', '0.00', '', 'kdXUE5zxGZpfLoQb20IW3TAD1mMFt4is', 0, NULL),
(96, 1, 73, 3, 2, NULL, NULL, '2021-04-04', '2023-10-04 12:23:06', '2021-04-04 12:27:09', '2021-05-04', 'OCD000082', '0.00', '0.00', '', 'k7HlUFyrGq4OVtipzX8IMBwgf9L0DQCa', 0, NULL),
(97, 1, 74, 3, 2, NULL, NULL, '2021-04-08', '2023-10-04 13:53:52', '2021-04-08 14:02:20', '2021-05-09', 'OCD000083', '0.00', '0.00', '', 'hpc9iWXxP51NKIFYUQ0tLCvS26GVwgoH', 0, NULL),
(98, 1, 75, 3, 4, 1, NULL, '2021-04-15', '2023-10-04 10:26:10', '2021-05-26 07:32:02', '2021-05-15', 'OCD000084', '0.00', '0.00', '', 'P05aLdfpCkr84tSA9miszve63T1oKJHn', 0, NULL),
(99, 1, 9, 3, 2, NULL, NULL, '2021-04-15', '2023-10-04 12:33:35', '2021-04-15 12:35:50', '2021-05-15', 'OCD000085', '0.00', '0.00', '', 'RXTgfiEtNQsyBIeJFh8C1rUo2DHnzjmL', 0, NULL),
(100, 1, 19, 3, 4, 1, NULL, '2021-04-21', '2023-10-04 10:25:12', '2021-06-18 06:31:32', '2021-05-21', 'OCD000086', '0.00', '0.00', '', '7MctrXa5Z9Q31pSbFJKeNkxAWvRY8fgu', 0, NULL),
(101, 1, 76, 3, 4, 1, NULL, '2021-04-22', '2023-10-04 13:25:45', '2021-05-26 07:32:26', '2021-05-22', 'OCD000087', '0.00', '0.00', '', 'TZQpDcgflNiv1zduLMCFqeJ67YWm30r8', 0, NULL),
(102, 1, 57, 3, 4, 1, NULL, '2021-05-03', '2023-10-04 07:50:46', '2021-06-16 13:00:20', '2021-05-03', 'OCD000088', '0.00', '0.00', '', 'RMN0A631IWrOUXmQvukEDdLYK5lfSyzJ', 0, NULL),
(103, 1, 57, 3, 2, NULL, NULL, '2021-05-03', '2023-10-04 11:58:31', '2021-05-03 12:04:09', '2021-06-02', 'OCD000089', '0.00', '0.00', '', 'a4PViQWot3wbZdxqRDO6JsmLTlFCu9Hg', 0, NULL),
(104, 1, 78, 3, 2, NULL, NULL, '2021-05-08', '2023-10-04 08:48:32', '2021-05-08 08:53:34', '2021-06-07', 'OCD000090', '0.00', '0.00', '', '05Nh6GMEKzoIPStUl8rfbcByOa9pRdXJ', 0, NULL),
(105, 1, 77, 3, 2, NULL, NULL, '2021-05-08', '2023-10-04 08:56:25', '2021-05-08 09:02:16', '2021-06-07', 'OCD000091', '0.00', '0.00', '', 'lcBFug7tvWHOpynNX0K9qr2QEjsRwIVi', 0, NULL),
(106, 1, 19, 3, 2, NULL, NULL, '2021-06-18', '2023-10-04 06:31:54', '2021-06-18 06:32:09', '2021-07-18', 'OCD000092', '0.00', '0.00', '', 'ASeqiWum16QbxGOal4Yg9sNwHUMkrtzC', 0, NULL),
(107, 1, 79, 3, 1, NULL, NULL, '2021-06-23', '2023-10-04 14:31:03', '2021-06-23 14:48:39', '2021-07-23', 'OCD000093', '0.00', '0.00', '', 'OqM0QbckA2lUsi9eKaFXuozP5Gpyr1wf', 0, NULL),
(108, 1, 24, 3, 2, NULL, NULL, '2021-06-23', '2023-10-04 14:48:49', '2021-06-23 17:29:18', '2021-07-23', 'OCD000094', '0.00', '0.00', '', 'V0imEDeTKXS8uCl5wMP9fjGWRFng2x7r', 0, NULL),
(109, 1, 38, 3, 2, NULL, NULL, '2021-06-29', '2023-10-04 13:31:52', '2021-06-29 14:28:22', '2021-07-29', 'OCD000095', '0.00', '0.00', '', 'n2AdhBxuKQtrMDP95SF7b8ENXyHwgGLq', 0, NULL),
(110, 1, 56, 3, 2, NULL, NULL, '2021-07-01', '2023-10-04 09:23:30', '2021-07-01 09:32:30', '2021-07-31', 'OCD000096', '0.00', '0.00', '', 'RWbynFmIs9USMlK4iohTpPrgxakAc250', 0, NULL),
(111, 1, 80, 3, 2, NULL, NULL, '2021-07-06', '2023-10-04 09:07:10', '2021-07-06 09:36:25', '2021-08-05', 'OCD000097', '0.00', '0.00', '', 'WvAegL8GYBVdNPMtEo4qn7D3zlxsjc9K', 0, NULL),
(112, 1, 81, 3, 2, NULL, NULL, '2021-07-12', '2023-10-04 08:30:52', '2021-07-12 10:47:01', '2021-08-11', 'OCD000098', '0.00', '0.00', '', 'JM83OVA6kI2sDt5XR4nmPWbBLxhiTwYH', 0, NULL),
(113, 1, 76, 3, 1, NULL, '', '2021-07-20', '2023-10-04 10:17:47', '2021-07-20 10:17:54', '2021-08-19', 'OCD000099', NULL, NULL, '', 'XPQHFDhaBpoT4dfCWSzxV20jsROJvril', 0, NULL),
(114, 1, 76, 3, 2, NULL, NULL, '2021-07-21', '2023-10-04 11:43:05', '2021-07-21 12:03:58', '2021-08-20', 'OCD000100', '0.00', '0.00', '', 'wkF0x4Iy3db1pfLPzE2AZTOqXVDUvjt7', 0, NULL),
(115, 1, 84, 3, 2, NULL, NULL, '2021-08-01', '2023-10-04 10:24:42', '2021-08-01 10:27:52', '2021-08-31', 'OCD000101', '0.00', '0.00', '', 'DZ1vuVRT9oXEJAUGQdOPeCr87iNchaz5', 0, NULL),
(116, 1, 24, 3, 2, NULL, NULL, '2021-08-01', '2023-10-04 11:17:57', '2021-08-01 11:22:28', '2021-08-31', 'OCD000102', '0.00', '0.00', '', 'NAzOL8vYCGZd643apV92eqXtHEJ15mjP', 0, NULL),
(117, 1, 85, 3, 2, NULL, NULL, '2021-08-06', '2023-10-04 13:29:05', '2021-08-11 14:47:40', '2021-09-05', 'OCD000103', '0.00', '0.00', '', 'Vtpk8d2NPYs7nCU9hLvZljE4BuRofX0g', 0, NULL),
(118, 1, 86, 3, 2, NULL, NULL, '2021-08-11', '2023-10-04 14:59:08', '2021-08-11 15:46:10', '2021-09-10', 'OCD000104', '0.00', '0.00', '', 'bm6RhxIPT3VD1FkzAcXL2fNHGa9SvsnK', 0, NULL),
(119, 1, 87, 3, 2, NULL, NULL, '2021-08-17', '2023-10-04 20:21:57', '2021-08-17 20:25:14', '2021-09-16', 'OCD000105', '0.00', '0.00', '', 'X4Zr8LVJMAaFvliTKsHfEqmxb6IByU1d', 0, NULL),
(120, 1, 88, 3, 2, NULL, NULL, '2021-08-19', '2023-10-04 19:29:55', '2021-08-19 19:34:44', '2021-09-18', 'OCD000106', '0.00', '0.00', '', 'KPg4Mzjw0bA5ZfI82kpe6yYlnuVtLOBm', 0, NULL),
(121, 1, 89, 3, 2, NULL, NULL, '2021-08-21', '2023-10-04 18:34:53', '2021-08-21 18:49:11', '2021-09-20', 'OCD000107', '0.00', '0.00', '', 'EGUud8tgC9p6WFVqsfDIjTax0yebKi5n', 0, NULL),
(122, 1, 90, 3, 2, NULL, NULL, '2021-08-29', '2023-10-04 17:49:17', '2021-08-29 17:50:09', '2021-09-28', 'OCD000108', '0.00', '0.00', '', '41ew2906vmOIkrDtsNTMZcfFnPAuxhVz', 0, NULL),
(123, 1, 91, 3, 2, NULL, NULL, '2021-09-08', '2023-10-04 13:13:43', '2021-09-08 13:30:05', '2021-10-08', 'OCD000109', '0.00', '0.00', '', 'NL9Geb47O6naziFokfmEvZwWh8qxHPls', 0, NULL),
(124, 1, 38, 3, 2, NULL, NULL, '2021-09-08', '2023-10-04 13:52:26', '2021-09-08 14:02:01', '2021-10-08', 'OCD000110', '0.00', '0.00', '', 'LkBf04UoM5nxFwitjpl9TAWHhOeq36Gd', 0, NULL),
(125, 1, 17, 3, 1, NULL, NULL, '2021-09-11', '2023-10-04 18:42:09', '2021-09-11 18:45:24', '2021-10-11', 'OCD000111', '0.00', '0.00', '', 'rJe2aHCOZLTzGiNSmwcMDnXoFx7RulBY', 0, NULL),
(126, 1, 56, 3, 2, NULL, NULL, '2021-09-14', '2023-10-04 09:27:57', '2021-09-14 10:01:06', '2021-10-14', 'OCD000112', '0.00', '0.00', '', 'XTQKV1qmA9MoDl32biLv8CNsadGf5eU4', 0, NULL),
(130, 1, 56, 3, 2, NULL, NULL, '2021-09-14', '2023-10-04 14:21:12', '2021-09-14 14:30:31', '2021-10-14', 'OCD000116', '0.00', '0.00', '', 'ARPWsabuTd7U3FelGkf5EcrDNzLyMVhO', 0, NULL),
(132, 1, 93, 3, 2, NULL, NULL, '2021-09-21', '2023-10-04 13:12:09', '2021-09-22 12:01:59', '2021-10-21', 'OCD000118', '0.00', '0.00', '', 'pShEY9CQy3M2PcROJadwgjmfueNnTlZ5', 0, NULL),
(133, 1, 94, 3, 2, NULL, NULL, '2021-09-23', '2023-10-04 09:30:23', '2021-09-23 09:44:02', '2021-10-23', 'OCD000119', '0.00', '0.00', '', 'xC7FQ1VYHEG5mWR3UkducXIDrT4SnBag', 0, NULL),
(134, 1, 95, 3, 2, NULL, NULL, '2021-09-23', '2023-10-04 09:51:29', '2021-09-23 09:53:47', '2021-10-23', 'OCD000120', '0.00', '0.00', '', 'Kn1GbSWspTBH3yVqi2Eowm0h8Ytx5arR', 0, NULL),
(135, 1, 17, 3, 2, NULL, NULL, '2021-09-25', '2023-10-04 06:21:06', '2021-09-25 06:22:51', '2021-10-25', 'OCD000121', '0.00', '0.00', '', 'fWlgd1KNxcPOD20iHIRa63QSEw4Lhyqe', 0, NULL),
(136, 1, 96, 3, 2, NULL, NULL, '2021-09-29', '2023-10-04 07:49:02', '2021-09-29 07:50:24', '2021-10-29', 'OCD000122', '0.00', '0.00', '', 'fgUNt4GPeTnkQIOLsDVYX6djz2hxRq75', 0, NULL),
(137, 1, 90, 3, 2, NULL, NULL, '2021-10-07', '2023-10-04 12:32:09', '2021-10-07 12:34:58', '2021-11-06', 'OCD000123', '0.00', '0.00', '', '15pbmS8K6dsAnzwYPZug2FECWlN3XjeU', 0, NULL),
(138, 1, 97, 3, 2, NULL, NULL, '2021-10-07', '2023-10-04 12:53:15', '2021-10-07 12:55:25', '2021-11-06', 'OCD000124', '0.00', '0.00', '', '8ohxCmONaWe7D2lk9HiuILZpKyj6dgQM', 0, NULL),
(139, 1, 98, 3, 2, NULL, NULL, '2021-10-07', '2023-10-04 13:17:09', '2021-10-07 13:25:11', '2021-11-06', 'OCD000125', '0.00', '0.00', '', 'kJ9oS7Mn31ce4KzmQ6xGlqsFh5B2d0uT', 0, NULL),
(140, 1, 99, 3, 2, NULL, NULL, '2021-10-09', '2023-10-04 12:24:08', '2021-10-09 12:40:39', '2021-11-08', 'OCD000126', '0.00', '0.00', '', 'zVWSsLo0w7ai3qIrUQ4jhJykDYvclnNx', 0, NULL),
(141, 1, 24, 3, 2, NULL, NULL, '2021-10-14', '2023-10-04 07:56:33', '2021-10-14 08:10:52', '2021-11-13', 'OCD000127', '0.00', '0.00', '', 'FQiuIB5MLDV2qn3GAvpJOWjgH1o4PUzm', 0, NULL),
(142, 1, 56, 3, 2, NULL, NULL, '2021-10-14', '2023-10-04 09:14:01', '2021-10-19 10:36:55', '2021-11-13', 'OCD000128', '0.00', '0.00', '', '4MwaRNjVtkBPgcKLE1u75oTJdZlWmfi0', 0, NULL),
(143, 1, 87, 3, 2, NULL, NULL, '2021-10-21', '2023-10-04 11:59:44', '2021-10-21 12:48:59', '2021-11-20', 'OCD000129', '0.00', '0.00', '', 'M7uK0fNUXH6Pyej3JO19kVFQmitWZrA8', 0, NULL),
(144, 1, 100, 3, 2, NULL, NULL, '2021-10-24', '2023-10-04 16:45:07', '2021-10-24 17:10:55', '2021-11-23', 'OCD000130', '0.00', '0.00', '', 'cH9YiEU8hFtqmg2yxZQS1GNBKeCfs3op', 0, NULL),
(145, 1, 76, 3, 2, NULL, NULL, '2021-10-26', '2023-10-04 11:10:51', '2021-10-26 11:58:11', '2021-11-25', 'OCD000131', '0.00', '0.00', '', 'gewkmfBDoUMcLqy09tRK56CSxGQisvhX', 0, NULL),
(146, 1, 101, 3, 2, NULL, NULL, '2021-11-06', '2023-10-04 14:39:21', '2021-11-06 14:41:55', '2021-12-06', 'OCD000132', '0.00', '0.00', '', '6go2xDFIVcpfGLhS1AYwkiUQJmlNZ5rt', 0, NULL),
(147, 1, 12, 3, 2, NULL, NULL, '2021-11-16', '2023-10-04 09:34:31', '2021-11-23 10:27:04', '2021-12-16', 'OCD000133', '0.00', '0.00', '', '2ZfKRomMqsXQW69rDIiHvEknApc1JgeF', 0, NULL),
(148, 1, 102, 3, 2, NULL, NULL, '2021-12-14', '2023-10-04 06:19:21', '2021-12-14 06:44:13', '2022-01-13', 'OCD000134', '0.00', '0.00', '', 'RB6bd5GnWAOw204lXz9NyaHmLir8M1hp', 0, NULL),
(149, 1, 103, 3, 2, NULL, NULL, '2021-12-15', '2023-10-04 08:42:35', '2021-12-15 08:54:08', '2022-01-14', 'OCD000135', '0.00', '0.00', '', 'RgYBsjth4l8NxpOVGDW01dq3z9Aaown6', 0, NULL),
(150, 1, 104, 3, 2, NULL, NULL, '2021-12-21', '2023-10-04 07:30:11', '2021-12-21 07:34:01', '2022-01-20', 'OCD000136', '0.00', '0.00', '', 'hQR2V1YcNE0IBU3owOnkHpWxM9AtJbSX', 0, NULL),
(151, 1, 105, 3, 2, NULL, NULL, '2021-12-21', '2023-10-04 15:10:34', '2021-12-21 15:12:07', '2022-01-20', 'OCD000137', '0.00', '0.00', '', 'T0RZF4QwPxYA2jsSe96fgVkCboXJz1UI', 0, NULL),
(152, 1, 17, 3, 2, NULL, NULL, '2021-12-26', '2023-10-04 14:40:54', '2021-12-26 14:44:02', '2022-01-25', 'OCD000138', '0.00', '0.00', '', 'd08AuLxlDe3oOahcwrts2fF1JnybNK4v', 0, NULL),
(153, 1, 106, 3, 2, NULL, NULL, '2021-12-28', '2023-10-04 06:01:49', '2021-12-29 07:12:33', '2022-01-27', 'OCD000139', '0.00', '0.00', '', 'kxlYPhTcMiDwEA4N5OtsRUaXLK1uS7GZ', 0, NULL),
(154, 1, 24, 3, 2, NULL, NULL, '2022-01-27', '2023-10-04 11:15:54', '2022-01-27 11:52:51', '2022-02-26', 'OCD000140', '0.00', '0.00', '', '9eVI6Ea58MuPhU2RA3iHDgxbnvkfrBcJ', 0, NULL),
(155, 1, 83, 3, 2, NULL, NULL, '2022-01-27', '2023-10-04 12:04:56', '2022-02-01 06:27:17', '2022-02-26', 'OCD000141', '0.00', '0.00', '', 'pAsgvFWSlf9U6Gx2trN4QIw8Xaj1zChy', 0, NULL),
(156, 1, 107, 3, 2, NULL, NULL, '2022-01-27', '2023-10-04 12:51:48', '2022-01-27 13:04:23', '2022-02-26', 'OCD000142', '0.00', '0.00', '', '7MgrjEvqxcFTUZJPGi46Kb3yfIW1hCw8', 0, NULL),
(157, 1, 86, 3, 2, NULL, NULL, '2022-01-27', '2023-10-04 13:29:39', '2022-02-08 09:10:09', '2022-02-26', 'OCD000143', '0.00', '0.00', '', 'Fn3uJ9kW0lRcoMXz4UbQAwD6I7jrBCVv', 0, NULL),
(158, 1, 108, 3, 2, NULL, NULL, '2022-02-09', '2023-10-04 14:50:20', '2022-02-09 14:57:39', '2022-03-11', 'OCD000144', '0.00', '0.00', '', 'ZlbQ3oGunzkSJPNmcgxX2O0yRIKECvwH', 0, NULL),
(159, 1, 109, 3, 2, NULL, NULL, '2022-02-10', '2023-10-04 10:05:39', '2022-02-10 10:13:58', '2022-03-12', 'OCD000145', '0.00', '0.00', '', 'KUWXRzcSCQaBEZTjn920lYgMD3wNpty1', 0, NULL),
(160, 1, 110, 3, 2, NULL, NULL, '2022-02-15', '2023-10-04 14:02:58', '2022-02-15 14:27:07', '2022-03-17', 'OCD000146', '0.00', '0.00', '', 'feJ8chSRGUbADBanMEimqY4Nkx0pgV5j', 0, NULL),
(161, 1, 85, 3, 1, NULL, '', '2022-02-22', '2023-10-04 06:38:53', '2022-02-22 06:39:04', '2022-03-24', 'OCD000147', NULL, NULL, '', 'T6eZUDB8huIXqPRgMc24xSpoya3Y7zNQ', 0, NULL),
(162, 1, 85, 3, 2, NULL, NULL, '2022-02-22', '2023-10-04 15:27:59', '2022-02-22 15:30:23', '2022-03-24', 'OCD000148', '0.00', '0.00', '', 'Lovwla1cOUdRCDqEkW5TXyVmYPG0s9Kz', 0, NULL),
(163, 1, 111, 3, 2, NULL, NULL, '2022-02-23', '2023-10-04 08:20:55', '2022-02-23 08:33:13', '2022-03-25', 'OCD000149', '0.00', '0.00', '', 'GVZ4mW6Te3lDCdt9XOwHbfxQprS8Evau', 0, NULL),
(164, 1, 87, 3, 2, NULL, NULL, '2022-02-23', '2023-10-04 13:33:18', '2022-04-10 14:07:00', '2022-03-25', 'OCD000150', '0.00', '0.00', '', '1S4hDubXcm9CawxYs0gJByK7dGreniIU', 0, NULL),
(165, 1, 87, 3, 2, NULL, NULL, '2022-02-23', '2023-10-04 13:36:25', '2022-02-23 13:52:14', '2022-03-25', 'OCD000151', '0.00', '0.00', '', 'sqGjRoMHBFEQ5Yzh9bUfJ6cayI7tm4p3', 0, NULL),
(166, 1, 87, 3, 1, NULL, NULL, '2022-02-27', '2023-10-04 11:36:19', '2022-02-27 11:51:10', '2022-03-29', 'OCD000152', '0.00', '0.00', '', 'WBqVbE1OG8HwMFcxuTsah9vDleZ2A7jp', 0, NULL),
(167, 1, 112, 3, 2, NULL, NULL, '2022-02-27', '2023-10-04 11:52:29', '2022-02-27 14:28:46', '2022-03-29', 'OCD000153', '0.00', '0.00', '', 'MXf7YjgcztDl8J4QZOna9rVbIWhFGAwk', 0, NULL),
(168, 1, 113, 3, 2, NULL, NULL, '2022-03-03', '2023-10-04 15:11:29', '2022-03-03 15:13:21', '2022-04-02', 'OCD000154', '0.00', '0.00', '', '7JrzBkwGSq0yN5KXW8TteYad9l43OHEn', 0, NULL),
(169, 1, 33, 3, 2, NULL, NULL, '2022-03-08', '2023-10-04 10:17:01', '2022-03-08 12:41:57', '2022-04-07', 'OCD000155', '0.00', '0.00', '', 'iolVY2snBE8wbOLq1dU7uWTmQACKtxDp', 0, NULL),
(170, 1, 114, 3, 2, NULL, NULL, '2022-03-11', '2023-10-04 11:23:29', '2022-03-11 11:37:22', '2022-04-10', 'OCD000156', '0.00', '0.00', '', 'nAPpmYLquSQDkBbhiJd1I2C9gVUvc38X', 0, NULL),
(171, 1, 116, 3, 2, NULL, NULL, '2022-03-15', '2023-10-04 08:38:09', '2022-03-15 08:40:36', '2022-04-14', 'OCD000157', '0.00', '0.00', '', 'bwltx1km5gQEcj3fnBoHzVvI4rpaTd0G', 0, NULL),
(172, 1, 117, 3, 2, NULL, NULL, '2022-03-16', '2023-10-04 16:00:32', '2022-03-16 16:04:16', '2022-04-15', 'OCD000158', '0.00', '0.00', '', '0KfkadEAs6F8bIUvOtpZ37B2XDRGNj4T', 0, NULL),
(173, 1, 109, 3, 2, NULL, NULL, '2022-03-17', '2023-10-04 10:49:07', '2022-03-17 11:08:48', '2022-04-16', 'OCD000159', '0.00', '0.00', '', 'hYijgI5lS6VXJLP1a3OsKMAn9BtGcfqx', 0, NULL),
(174, 1, 9, 3, 2, NULL, NULL, '2022-03-24', '2023-10-04 12:46:55', '2022-03-25 06:46:41', '2022-04-23', 'OCD000160', '0.00', '0.00', '', 'o3WIqS0tJxGOm6rwc8usLiEPUygbjH7R', 0, NULL),
(175, 1, 118, 3, 2, NULL, NULL, '2022-03-25', '2023-10-04 06:31:59', '2022-03-25 06:37:03', '2022-04-24', 'OCD000161', '0.00', '0.00', '', 'B1FgeCjfOoGIu5Y6k8Js9dTr3cWQUnRN', 0, NULL),
(176, 1, 87, 3, 2, NULL, NULL, '2022-03-30', '2023-10-04 09:23:00', '2022-03-30 09:24:49', '2022-04-29', 'OCD000162', '0.00', '0.00', '', 'GyAf0svoY2hOwUkKN7B1CuqlEajDF9M4', 0, NULL),
(177, 1, 119, 3, 2, NULL, NULL, '2022-04-04', '2023-10-04 13:21:05', '2022-04-24 10:55:39', '2022-05-04', 'OCD000163', '0.00', '0.00', '', 'm9KCtSJ0I5EuZUoLHw1in3rGQO8zBNd4', 0, NULL),
(178, 1, 115, 3, 2, NULL, NULL, '2022-03-31', '2023-10-04 18:22:42', '2022-04-04 18:31:34', '2022-04-30', 'OCD000164', '0.00', '0.00', '', 'LC3qw4ksTPIESnWOZxVjiyBuHNlfvRr9', 0, NULL),
(179, 1, 120, 3, 2, NULL, NULL, '2022-04-07', '2023-10-04 14:04:27', '2022-04-10 13:58:34', '2022-05-07', 'OCD000165', '0.00', '0.00', '', 'IQ1bxsTDMFZA9flt5LhO0gkv2Cw3zVSU', 0, NULL),
(180, 1, 121, 3, 2, NULL, NULL, '2022-04-10', '2023-10-04 14:09:53', '2022-04-10 14:11:55', '2022-05-10', 'OCD000166', '0.00', '0.00', '', 'hP6Foyzu27mbZgtxen1WApaUNIfGL5OJ', 0, NULL),
(181, 1, 122, 3, 2, NULL, NULL, '2022-04-10', '2023-10-04 14:22:09', '2022-04-10 14:53:24', '2022-05-10', 'OCD000167', '0.00', '0.00', '', 'YTDAts0dPeEp8WmOHIMRLSyC1JzBuVNk', 0, NULL),
(182, 1, 123, 3, 2, NULL, NULL, '2022-04-15', '2023-10-04 10:52:28', '2022-04-15 11:08:09', '2022-05-15', 'OCD000168', '0.00', '0.00', '', 'qAGsmQ83b0eH1FDBOV7p5nzYxS2T4yKJ', 0, NULL),
(183, 1, 124, 3, 2, NULL, NULL, '2022-04-20', '2023-10-04 10:43:37', '2022-04-20 11:14:15', '2022-05-20', 'OCD000169', '0.00', '0.00', '', 'pwfvaqgHxU83QRJYdGV2nK0COmA5Zorh', 0, NULL),
(184, 1, 126, 3, 2, NULL, NULL, '2022-04-27', '2023-10-04 13:39:23', '2022-04-27 13:40:38', '2022-05-27', 'OCD000170', '0.00', '0.00', '', 'Slpgc1CGI4Wm0kMYTtKifRs5EZVUh8A6', 0, NULL),
(186, 1, 128, 3, 2, NULL, NULL, '2022-05-07', '2023-10-04 13:32:15', '2022-05-07 13:36:57', '2022-06-06', 'OCD000172', '0.00', '0.00', '', 'GbMCXfAsaSvWKNzxHoqkQ017mTPDI6Eu', 0, NULL),
(187, 1, 24, 3, 4, 1, NULL, '2022-05-09', '2023-10-04 10:12:11', '2022-05-09 10:17:28', '2022-06-08', 'OCD000173', '0.00', '0.00', '', 'clsT0OzfWohSmxVREFbwHGM7a6YKdB2P', 1, NULL),
(188, 1, 129, 3, 2, NULL, NULL, '2022-05-10', '2023-10-04 09:29:40', '2022-05-10 09:31:12', '2022-06-09', 'OCD000174', '0.00', '0.00', '', 'Xrbno9aUq1xALMeZkcDmw2OhsSIvyzgi', 0, NULL),
(189, 1, 130, 3, 2, NULL, NULL, '2022-05-12', '2023-10-04 10:58:01', '2022-05-12 11:09:15', '2022-06-11', 'OCD000175', '0.00', '0.00', '', 'ir9v7CYMKz4xfwPG1eWLOHgkRF20uNI3', 0, NULL),
(190, 1, 56, 3, 2, NULL, NULL, '2022-05-12', '2023-10-04 11:09:47', '2022-05-12 12:23:05', '2022-06-11', 'OCD000176', '0.00', '0.00', '', 'ud54VEM3g2hxcNXQkaFP9Bj8eOzboKJI', 0, NULL),
(191, 1, 131, 3, 2, NULL, NULL, '2022-05-21', '2023-10-04 11:30:17', '2022-05-21 11:48:01', '2022-06-20', 'OCD000177', '0.00', '0.00', '', 'YU04uWl3eJ7daFS86kvVIDZpojRXOsh1', 0, NULL),
(192, 1, 56, 3, 2, NULL, '', '2022-05-22', '2023-10-04 14:10:10', '2022-11-01 06:53:26', '2022-06-21', 'OCD000178', '0.00', '0.00', '', 'TCBM2RVKwJDPOvgXzHq9aNG04n7kSYZd', 0, NULL),
(193, 1, 132, 3, 2, NULL, NULL, '2022-05-22', '2023-10-04 14:12:34', '2022-05-22 14:59:15', '2022-06-21', 'OCD000179', '0.00', '0.00', '', 'IyriRQ1vojJD0lesg8zOSpaq3kLdHGFE', 0, NULL),
(194, 1, 133, 3, 2, NULL, NULL, '2022-05-23', '2023-10-04 10:11:08', '2022-05-23 10:14:02', '2022-06-22', 'OCD000180', '0.00', '0.00', '', 'GV78QKMJFsHkpLlXg6iyAhSB9TNaDP1w', 0, NULL),
(195, 1, 134, 3, 2, NULL, NULL, '2022-05-25', '2023-10-04 11:39:44', '2022-05-25 14:46:32', '2022-06-24', 'OCD000181', '0.00', '0.00', '', 'PkCMvmnDFw2UrGqIWXyEVOz4adgLBb7A', 0, NULL),
(196, 1, 135, 3, 4, 1, NULL, '2022-06-01', '2023-10-04 11:15:44', '2022-06-01 13:03:25', '2022-07-01', 'OCD000182', '0.00', '0.00', '', 'XMtaqIs1xu7HVJFR8wEQOZT9CeDUoc5n', 2, NULL),
(197, 1, 136, 3, 2, NULL, NULL, '2022-06-03', '2023-10-04 08:16:26', '2022-06-03 08:21:33', '2022-07-03', 'OCD000183', '0.00', '0.00', '', 'O1JAQMovWcYhb5Vx3ESe7n9La4NGwBzr', 0, NULL),
(198, 1, 137, 3, 2, NULL, NULL, '2022-06-04', '2023-10-04 06:39:04', '2022-06-04 06:44:39', '2022-07-04', 'OCD000184', '0.00', '0.00', '', 'X2yzEegY36UnQ9ObPjKfZvIGFkaHdWsq', 0, NULL),
(199, 1, 138, 3, 2, NULL, NULL, '2022-06-04', '2023-10-04 08:09:12', '2022-06-04 08:13:42', '2022-07-04', 'OCD000185', '0.00', '0.00', '', 'yu5b6NMVvQJaG8ITm3DOWXBPxgetrE1p', 0, NULL),
(200, 1, 24, 3, 2, NULL, '', '2022-06-09', '2023-10-04 13:06:42', '2022-11-14 06:47:57', '2022-07-09', 'OCD000186', '0.00', '0.00', '', 'kEgtbaOUuFmliHp5nZARNvqSD6WKjYVQ', 0, NULL),
(201, 1, 139, 3, 2, NULL, NULL, '2022-06-11', '2023-10-04 14:15:00', '2022-06-11 14:17:16', '2022-07-11', 'OCD000187', '0.00', '0.00', '', 'K427Mx6LbANPtdHOBRv0yYZpzCQqaF95', 0, NULL),
(202, 1, 140, 3, 2, NULL, NULL, '2022-06-15', '2023-10-04 09:49:17', '2022-11-17 08:51:01', '2022-07-15', 'OCD000188', '0.00', '0.00', '', 'GHdqCZX9U7KIwe5JxRPphubYn3QSELTV', 0, NULL),
(203, 1, 141, 3, 2, NULL, NULL, '2022-06-15', '2023-10-04 10:09:11', '2022-06-15 10:11:20', '2022-07-15', 'OCD000189', '0.00', '0.00', '', 'd4mZaRpH8yjuc7bIkY6lohQDv5TiW21r', 0, NULL),
(204, 1, 142, 3, 2, NULL, NULL, '2022-06-16', '2023-10-04 15:50:01', '2022-06-16 16:16:57', '2022-07-16', 'OCD000190', '0.00', '0.00', '', 'ulRO7FrqBHjLx3Iw0cza4DneZ9EvTkSP', 0, NULL),
(205, 1, 86, 3, 4, 1, NULL, '2023-01-07', '2023-10-04 11:04:28', '2023-01-28 10:13:30', '2023-02-07', 'OCD000191', '0.00', '0.00', '', 'JWCbYs68OoEGFa1tVwmh0BxNDPLTdpRu', 0, NULL),
(206, 1, 143, 3, 2, NULL, NULL, '2022-06-24', '2023-10-04 13:01:50', '2022-06-24 13:09:51', '2022-07-24', 'OCD000192', '0.00', '0.00', '', 'RMqJ1rmExSDLK03ftBaIOYbcG4lVdzX6', 0, NULL),
(207, 1, 119, 3, 3, NULL, NULL, '2022-06-28', '2023-10-04 12:03:15', '2023-03-11 05:48:31', '2022-07-28', 'OCD000193', '0.00', '0.00', '', 'ZmPQg0dwp8NqSHnt2eLTGXyxsj7oJEvb', 0, NULL),
(208, 1, 56, 3, 2, NULL, NULL, '2022-11-15', '2023-10-04 12:41:33', '2023-01-28 14:06:49', '2022-12-13', 'OCD000194', '0.00', '0.00', '', 'yqG058I7dMKpovRwzYkxU4tFZHCbfLiX', 0, NULL),
(209, 1, 102, 3, 2, NULL, NULL, '2022-06-29', '2023-10-04 09:20:52', '2023-07-18 12:44:24', '2022-07-29', 'OCD000195', '0.00', '0.00', '', 'g4trhKC8VbsfP6qOz0JmYjnpoDeXWaFZ', 0, NULL),
(210, 1, 145, 3, 2, NULL, NULL, '2022-07-05', '2023-10-04 11:26:57', '2022-07-05 11:34:52', '2022-08-04', 'OCD000196', '0.00', '0.00', '', 'qWNXk041yFgzM6VeuQtmjplS8Bc3PhOb', 0, NULL),
(211, 1, 146, 3, 2, NULL, NULL, '2022-07-08', '2023-10-04 13:11:33', '2022-07-08 13:18:07', '2022-08-07', 'OCD000197', '0.00', '0.00', '', 'gFPX0Uoz3kOLIaZHSEQ6tDfsWnRmrBYw', 0, NULL),
(212, 1, 147, 3, 2, NULL, NULL, '2022-07-11', '2023-10-04 09:18:32', '2022-07-12 06:24:40', '2022-08-10', 'OCD000198', '0.00', '0.00', '', 'LZjRp9az0lG6kdnbM1Im4OVJN7u3HPBU', 0, NULL),
(213, 1, 144, 3, 2, NULL, NULL, '2022-07-13', '2023-10-04 13:08:29', '2022-07-13 13:11:46', '2022-08-12', 'OCD000199', '0.00', '0.00', '', 'y8jYieDmc1wKrBFzsbL2tX9H4laxEPAG', 0, NULL),
(214, 1, 148, 3, 2, NULL, NULL, '2022-07-14', '2023-10-04 12:39:11', '2022-07-15 07:11:15', '2022-08-13', 'OCD000200', '0.00', '0.00', '', 'Gmr2tpxAWsVh9obdZUME15qjczIOg4H6', 0, NULL),
(215, 1, 149, 3, 2, NULL, '', '2022-07-22', '2023-10-04 08:37:22', '2022-07-22 08:37:24', '2022-08-21', 'OCD000201', NULL, NULL, '', 'DTFRW5oE0fSmVpaidgj1Zn9UQqPlX82Y', 0, NULL),
(216, 1, 150, 3, 2, NULL, '', '2022-07-29', '2023-10-04 11:15:19', '2022-11-07 12:00:04', '2022-11-12', 'OCD000202', '0.00', '0.00', '', 'pKIzlo4BkdVtbgqywcirfQ2Mv6ADm3jF', 0, NULL),
(217, 1, 109, 3, 2, NULL, NULL, '2022-08-02', '2023-10-04 13:26:24', '2022-08-02 13:55:22', '2022-09-01', 'OCD000203', '0.00', '0.00', '', 'MVaL5i8pyKEIQrBcowGNJb13jSuDvsYz', 0, NULL),
(218, 1, 120, 3, 2, NULL, NULL, '2023-01-02', '2023-10-04 14:57:33', '2023-01-11 06:49:52', '2022-09-24', 'OCD000204', '0.00', '0.00', '', 'aQcojJ1WCn9Xbp7PhIkYUBA8LZVMSm2E', 0, NULL),
(219, 1, 151, 3, 4, 1, NULL, '2022-08-11', '2023-10-04 10:57:37', '2022-11-17 07:22:39', '2022-09-10', 'OCD000205', '0.00', '0.00', '', 'lzJtI1eT7vXkHOh5aw8K0bQCg6B3mP2c', 0, NULL),
(220, 1, 152, 3, 4, 1, NULL, '2022-12-22', '2023-10-04 13:09:26', '2022-12-23 13:01:15', '2022-12-22', 'AXM000206', '0.00', '0.00', '', 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6', 2, NULL),
(221, 1, 109, 3, 4, 1, NULL, '2022-11-15', '2023-10-04 07:50:40', '2023-01-28 14:10:18', '2022-12-13', 'OCD000207', '0.00', '0.00', '', 'gvwHIslzaXBm0VdM6LPWfy5etjcoCGkn', 0, NULL),
(222, 1, 147, 3, 4, 1, NULL, '2022-08-19', '2023-10-04 08:13:46', '2022-12-03 07:29:39', '2022-09-18', 'OCD000208', '0.00', '0.00', '', 'ihU3LoGXMuBnfQFV1kxz5gJ4jKWv6YqZ', 0, NULL),
(223, 1, 117, 3, 4, NULL, NULL, '2022-06-25', '2023-10-04 08:53:16', '2022-08-19 08:55:33', '2022-09-18', 'OCD000209', '0.00', '0.00', '', 'sp87eiGyIgUmvTJY24ulL53MAOx9EKNj', 0, NULL),
(224, 1, 153, 3, 4, 1, NULL, '2022-08-19', '2023-10-04 14:02:52', '2022-11-17 07:25:45', '2022-09-18', 'OCD000210A', '0.00', '0.00', '', 'DT4CkJlFNHM5ZEe30GLyrXUYcpfVgOWQ', 0, NULL),
(225, 1, 155, 3, 4, 1, '', '2022-09-01', '2023-10-04 10:52:45', '2022-10-18 10:34:08', '2022-10-01', 'OCD000211', '0.00', '0.00', '', 'K0u1P8TEXeCUmzYGbwRiL2nIcZgQhrqF', 1, NULL),
(226, 1, 156, 3, 2, NULL, NULL, '2022-12-01', '2023-10-04 08:16:10', '2023-10-04 11:16:06', '2022-12-28', 'OCD000212', '0.00', '0.00', 'Hello', 'DxXvOIUneAdF7hCcijkN2SmBgMyE9TQ5', 1, NULL),
(227, 1, 157, 3, 4, 1, '', '2022-09-09', '2023-10-04 11:43:19', '2022-10-28 12:58:51', '2022-10-09', 'OCD000213', '0.00', '0.00', '', 'YbLJWSOiDTX2vCAUrhsRnKExPowpQmVj', 2, NULL),
(228, 1, 158, 3, 4, 1, '', '2022-10-07', '2023-10-04 10:44:31', '2022-10-29 13:45:26', '2022-10-13', 'OCD000214', '0.00', '0.00', '', '5ywc3EnQYixMTbo4Dva9umgW8JUeAH1B', 1, NULL),
(229, 1, 159, 3, 4, NULL, '', '2022-10-14', '2023-10-04 14:21:10', '2022-11-03 09:18:26', '2022-10-13', 'OCD000215', '0.00', '0.00', '', 'cbUstihrMldwS9EAWY2THGeCyf4BaInk', 0, NULL),
(231, 1, 81, 3, 4, 1, '', '2022-09-20', '2023-10-04 12:56:15', '2022-10-18 10:31:41', '2022-10-20', 'OCD000217', '0.00', '0.00', '', 'jfrOiYcGpgHtRPZ8BdU6MnNkoysLbKv5', 1, NULL),
(232, 1, 109, 3, 4, 1, '', '2022-09-21', '2023-10-04 11:36:05', '2022-10-18 10:17:48', '2022-10-21', 'OCD000218', '0.00', '0.00', '', 'M7pXHcuKs8FqrwVIGZeAY6kmTv3zn9jC', 0, NULL),
(233, 1, 24, 3, 4, 1, '', '2022-10-14', '2023-10-04 08:42:13', '2022-11-01 06:54:23', '2022-10-27', 'OCD000219', '0.00', '0.00', '', '0oJZumYPOWba9NIGKRBi8jzyXAhVns2C', 1, NULL),
(234, 1, 12, 3, 4, 1, NULL, '2023-01-12', '2023-10-04 01:55:00', '2023-01-12 01:55:56', '2023-02-11', '1', '0.00', '0.00', '', 'sQ39ko5Yr7h0KeUWy1RbAJLdmFPCntuE', 3, NULL),
(244, 4, 174, 3, 1, NULL, NULL, '2023-09-13', '2023-10-04 13:08:11', '2023-09-13 13:08:14', '2023-10-13', '', NULL, NULL, '', 'm3WP6jQYUutbZMTsXn89ErDOiIe5Vla4', 0, NULL),
(242, 4, 174, 3, 1, NULL, NULL, '2023-09-13', '2023-10-04 12:50:57', '2023-09-13 12:51:02', '2023-10-13', '', NULL, NULL, '', 'dQA8L7M1n9rsRzBW0IO3KjF6uhYp4TE2', 0, NULL),
(243, 4, 174, 3, 1, NULL, NULL, '2023-09-13', '2023-10-04 13:03:24', '2023-09-13 13:03:31', '2023-10-13', '', NULL, NULL, '', '42vHnQPUR0CSbd531JxBZIEwkDjaitzo', 0, NULL),
(245, 4, 174, 3, 1, NULL, NULL, '2023-09-13', '2023-10-04 13:26:11', '2023-09-13 13:26:16', '2023-10-13', '', NULL, NULL, '', 'GAULYgMPByOKw7EZDHe5RzvWkNu6janf', 0, NULL),
(246, 4, 174, 3, 1, NULL, NULL, '2023-09-13', '2023-10-04 13:26:28', '2023-09-13 13:26:32', '2023-10-13', '', NULL, NULL, '', 'q4h5MOSiBDsUJtQLwEKCHdpNAbG0xrl8', 0, NULL),
(247, 4, 174, 3, 4, 1, NULL, '2023-09-13', '2023-10-04 13:31:24', '2023-09-13 13:42:25', '2023-10-13', '247', '0.00', '0.00', '', 'Z8nsmrtqDLgKxh7jMdeQ10RTEkwoiYAu', 1, NULL),
(248, 4, 174, 3, 1, NULL, NULL, '0000-00-00', '2023-10-04 01:36:49', '0000-00-00 00:00:00', '0000-00-00', NULL, NULL, NULL, '', '37b1a01f080344e5ee9433d3e3667067', 0, NULL),
(249, 2, 176, 3, 1, NULL, NULL, '2023-09-23', '2023-10-04 03:13:32', '2023-09-23 13:43:51', '0000-00-00', NULL, NULL, NULL, '', '93bb0ecff66f33acf85dc0830fb0b252', 0, NULL),
(252, 2, 163, 3, 2, NULL, NULL, '2023-09-25', '2023-10-04 07:49:22', '2023-09-25 18:20:41', '2023-10-27', 'AXM0006', '0.00', '0.00', 'Hello Everyone', '3967856410084a4524a2a19f07110300', 1, NULL),
(253, 1, 11, 3, 1, NULL, NULL, '2023-09-29', '2023-10-04 07:57:48', '2023-09-29 18:27:51', '0000-00-00', 'AXM0005', '0.00', '0.00', '', '316d28227d1474f32c27313fa22c398c', 0, 20),
(254, 1, 12, 3, 1, NULL, NULL, '2023-10-03', '2023-10-04 09:04:59', '2023-10-03 19:35:08', '0000-00-00', 'AXM0004', '0.00', '0.00', '', '0c7b743cd50a711b1c1a692c770215c2', 0, NULL),
(255, 1, 12, 3, 1, NULL, NULL, '2023-10-03', '2023-10-04 09:04:59', '2023-10-03 19:35:17', '0000-00-00', 'AXM0003', '0.00', '0.00', '', 'c943c47613343d250792c0a58344a17c', 0, NULL),
(256, 1, 12, 3, 2, NULL, NULL, '2023-10-03', '2023-10-04 09:04:59', '2023-10-03 19:37:45', '2023-10-26', 'AXM00025', '0.00', '0.00', '', '76ea58ea0a3adf3752fee8dffee30ae2', 1, NULL),
(257, 2, 10, 3, 1, NULL, NULL, '2023-10-04', '2023-10-04 04:56:04', '2023-10-04 15:26:07', '0000-00-00', 'AXM0002', '0.00', '0.00', '', 'af05b5899515e4f319eba8b184e837b4', 0, NULL),
(258, 2, 163, 3, 1, NULL, NULL, '2023-10-04', '2023-10-04 17:52:34', '2023-10-04 17:52:34', '0000-00-00', 'AXM0007', '0.00', '0.00', '', '68300a09faba58df2c92a5d92bd3b924', 0, NULL),
(259, 1, 11, 3, 1, NULL, NULL, '2023-10-04', '0000-00-00 00:00:00', '2023-10-04 18:12:46', '0000-00-00', NULL, '0.00', '0.00', '', 'c59284083025d1344f97e20b50a207e5', 0, NULL),
(260, 1, 11, 3, 1, NULL, NULL, '2023-10-04', '0000-00-00 00:00:00', '2023-10-04 18:12:52', '0000-00-00', NULL, '0.00', '0.00', '', '7e7d59eb22a4a3cc2f2cac67ed04e267', 0, NULL),
(261, 1, 11, 3, 1, NULL, NULL, '2023-10-04', '0000-00-00 00:00:00', '2023-10-04 18:12:59', '0000-00-00', NULL, '0.00', '0.00', '', 'fb79c05a8daee1d12b2237857fa6bb5b', 0, NULL),
(262, 1, 11, 3, 1, NULL, NULL, '2023-10-04', '0000-00-00 00:00:00', '2023-10-04 18:16:00', '0000-00-00', NULL, '0.00', '0.00', '', 'd31d69d04bae538621ac5ca29f03713b', 0, NULL),
(263, 1, 11, 3, 1, NULL, NULL, '2023-10-04', '2023-10-04 18:37:15', '2023-10-04 18:37:40', '2023-11-01', 'AXM0009', '0.00', '0.00', '', '4c40beba718f3eb396463db9bc9f1915', 0, NULL),
(264, 1, 11, 3, 1, NULL, NULL, '2023-10-04', '2023-10-04 18:39:47', '2023-10-04 18:39:47', '0000-00-00', NULL, '0.00', '0.00', '', '8d6b5dc258e5289cf5d63a92fe363e97', 0, 263);

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoices_recurring`
--

CREATE TABLE `ip_invoices_recurring` (
  `invoice_recurring_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `recur_start_date` date NOT NULL,
  `recur_end_date` date NOT NULL,
  `recur_frequency` varchar(255) NOT NULL,
  `recur_next_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_invoices_recurring`
--

INSERT INTO `ip_invoices_recurring` (`invoice_recurring_id`, `invoice_id`, `recur_start_date`, `recur_end_date`, `recur_frequency`, `recur_next_date`) VALUES
(1, 20, '2023-10-01', '2023-10-30', '1D', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_amounts`
--

CREATE TABLE `ip_invoice_amounts` (
  `invoice_amount_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoice_sign` enum('1','-1') NOT NULL DEFAULT '1',
  `invoice_item_subtotal` decimal(20,2) DEFAULT NULL,
  `invoice_item_tax_total` decimal(20,2) DEFAULT NULL,
  `invoice_tax_total` decimal(20,2) DEFAULT NULL,
  `invoice_total` decimal(20,2) DEFAULT NULL,
  `invoice_paid` decimal(20,2) DEFAULT NULL,
  `invoice_balance` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_invoice_amounts`
--

INSERT INTO `ip_invoice_amounts` (`invoice_amount_id`, `invoice_id`, `invoice_sign`, `invoice_item_subtotal`, `invoice_item_tax_total`, `invoice_tax_total`, `invoice_total`, `invoice_paid`, `invoice_balance`) VALUES
(20, 20, '1', '424000.00', '0.00', '76320.00', '500320.00', '0.00', '500320.00'),
(22, 22, '1', '6000.00', '0.00', '1080.00', '7080.00', '7080.00', '0.00'),
(19, 19, '1', '150000.00', '0.00', '27000.00', '177000.00', '0.00', '177000.00'),
(23, 23, '1', '215000.00', '0.00', '38700.00', '253700.00', '0.00', '253700.00'),
(21, 21, '1', '201000.00', '0.00', '36180.00', '237180.00', '0.00', '237180.00'),
(18, 18, '1', '4000.00', '0.00', '720.00', '4720.00', '0.00', '4720.00'),
(17, 17, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, '1', '196000.00', '0.00', '35280.00', '231280.00', '0.00', '231280.00'),
(14, 14, '1', '150000.00', '0.00', '27000.00', '177000.00', '0.00', '177000.00'),
(24, 24, '1', '67200.00', '0.00', '12096.00', '79296.00', '0.00', '79296.00'),
(25, 25, '1', '93220.40', '0.00', '16779.67', '110000.07', '0.00', '110000.07'),
(26, 26, '1', '82500.00', '0.00', '14850.00', '97350.00', '0.00', '97350.00'),
(27, 27, '1', '451000.00', '99000.00', '81180.00', '549126.60', '0.00', '549126.60'),
(28, 28, '1', '501000.00', '0.00', '90180.00', '591180.00', '0.00', '591180.00'),
(29, 29, '1', '116000.00', '0.00', '20880.00', '136880.00', '0.00', '136880.00'),
(30, 30, '1', '248000.00', '0.00', '44640.00', '292640.00', '0.00', '292640.00'),
(31, 31, '1', '40000.00', '0.00', '7200.00', '47200.00', '0.00', '47200.00'),
(32, 32, '1', '100000.00', '0.00', '18000.00', '118000.00', '0.00', '118000.00'),
(33, 33, '1', '10000.00', '0.00', '1800.00', '11800.00', '0.00', '11800.00'),
(34, 34, '1', '10000.00', '0.00', '1800.00', '11800.00', '0.00', '11800.00'),
(35, 35, '1', '207000.00', '0.00', '37260.00', '244260.00', '0.00', '244260.00'),
(36, 36, '1', '16000.00', '0.00', '2880.00', '18880.00', '0.00', '18880.00'),
(37, 37, '1', '202000.00', '0.00', '36360.00', '238360.00', '0.00', '238360.00'),
(38, 38, '1', '145000.00', '0.00', '26100.00', '171100.00', '0.00', '171100.00'),
(39, 39, '1', '76125.00', '0.00', '13702.50', '89827.50', '0.00', '89827.50'),
(40, 40, '1', '145000.00', '0.00', '26100.00', '171100.00', '0.00', '171100.00'),
(41, 41, '1', '15000.00', '0.00', '2700.00', '17700.00', '0.00', '17700.00'),
(42, 42, '1', '2000.00', '0.00', '360.00', '2360.00', '0.00', '2360.00'),
(43, 43, '1', '165000.00', '0.00', '29700.00', '194700.00', '0.00', '194700.00'),
(44, 44, '1', '5000.00', '0.00', '900.00', '5900.00', '0.00', '5900.00'),
(45, 45, '1', '132600.00', '0.00', '23868.00', '156468.00', '0.00', '156468.00'),
(46, 46, '1', '52000.00', '0.00', '9360.00', '61360.00', '0.00', '61360.00'),
(47, 47, '1', '100000.00', '0.00', '18000.00', '118000.00', '0.00', '118000.00'),
(48, 48, '1', '79000.00', '0.00', '14220.00', '93220.00', '0.00', '93220.00'),
(49, 49, '1', '41000.00', '0.00', '7380.00', '48380.00', '0.00', '48380.00'),
(50, 50, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 51, '1', '160250.00', '0.00', '28845.00', '189095.00', '0.00', '189095.00'),
(52, 52, '1', '275000.00', '0.00', '49500.00', '324500.00', '0.00', '324500.00'),
(53, 53, '1', '17500.00', '0.00', '3150.00', '20650.00', '0.00', '20650.00'),
(54, 54, '1', '222000.00', '0.00', '39960.00', '261960.00', '0.00', '261960.00'),
(55, 55, '1', '5000.00', '0.00', '900.00', '5900.00', '0.00', '5900.00'),
(56, 56, '1', '213000.00', '0.00', '38340.00', '251340.00', '0.00', '251340.00'),
(57, 57, '1', '100000.00', '0.00', '18000.00', '118000.00', '0.00', '118000.00'),
(61, 61, '1', '45000.00', '0.00', '8100.00', '53100.00', '0.00', '53100.00'),
(60, 60, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 62, '1', '63550.00', '0.00', '11439.00', '74989.00', '0.00', '74989.00'),
(63, 63, '1', '17500.00', '0.00', '3150.00', '20650.00', '0.00', '20650.00'),
(64, 64, '1', '170000.00', '0.00', '30600.00', '200600.00', '0.00', '200600.00'),
(65, 65, '1', '200000.00', '0.00', '36000.00', '236000.00', '0.00', '236000.00'),
(66, 66, '1', '170000.00', '0.00', '30600.00', '200600.00', '0.00', '200600.00'),
(67, 67, '1', '12000.00', '0.00', '2160.00', '14160.00', '0.00', '14160.00'),
(68, 68, '1', '248000.00', '0.00', '44640.00', '292640.00', '0.00', '292640.00'),
(69, 69, '1', '150000.00', '0.00', '27000.00', '177000.00', '0.00', '177000.00'),
(70, 70, '1', '65000.00', '0.00', '11700.00', '76700.00', '0.00', '76700.00'),
(71, 71, '1', '17000.00', '0.00', '3060.00', '20060.00', '0.00', '20060.00'),
(72, 72, '1', '1500.00', '0.00', '270.00', '1770.00', '0.00', '1770.00'),
(73, 73, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 74, '1', '4000.00', '0.00', '720.00', '4720.00', '0.00', '4720.00'),
(75, 75, '1', '227000.00', '0.00', '40860.00', '267860.00', '0.00', '267860.00'),
(76, 76, '1', '213000.00', '0.00', '38340.00', '251340.00', '0.00', '251340.00'),
(77, 77, '1', '45600.00', '0.00', '8208.00', '53808.00', '0.00', '53808.00'),
(78, 78, '1', '10800.00', '0.00', '1944.00', '12744.00', '0.00', '12744.00'),
(79, 79, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 80, '1', '25000.00', '0.00', '4500.00', '29500.00', '0.00', '29500.00'),
(81, 81, '1', '55500.00', '0.00', '9990.00', '65490.00', '0.00', '65490.00'),
(82, 82, '1', '37000.00', '0.00', '6660.00', '43660.00', '0.00', '43660.00'),
(83, 83, '1', '143000.00', '0.00', '25740.00', '168740.00', '0.00', '168740.00'),
(84, 84, '1', '145000.00', '0.00', '26100.00', '171100.00', '0.00', '171100.00'),
(85, 85, '1', '15000.00', '0.00', '2700.00', '17700.00', '0.00', '17700.00'),
(86, 86, '1', '115000.00', '0.00', '20700.00', '135700.00', '0.00', '135700.00'),
(87, 87, '1', '10000.00', '0.00', '1800.00', '11800.00', '0.00', '11800.00'),
(89, 89, '1', '10000.00', '0.00', '1800.00', '11800.00', '0.00', '11800.00'),
(90, 90, '1', '18000.00', '0.00', '3240.00', '21240.00', '0.00', '21240.00'),
(91, 91, '1', '55000.00', '0.00', '9900.00', '64900.00', '0.00', '64900.00'),
(92, 92, '1', '6000.00', '0.00', '1080.00', '7080.00', '0.00', '7080.00'),
(93, 93, '1', '75000.00', '0.00', '13500.00', '88500.00', '0.00', '88500.00'),
(94, 94, '1', '278000.00', '0.00', '50040.00', '328040.00', '0.00', '328040.00'),
(95, 95, '1', '190000.00', '0.00', '34200.00', '224200.00', '0.00', '224200.00'),
(96, 96, '1', '5500.00', '0.00', '990.00', '6490.00', '0.00', '6490.00'),
(97, 97, '1', '6000.00', '0.00', '1080.00', '7080.00', '0.00', '7080.00'),
(98, 98, '1', '90000.00', '0.00', '16200.00', '106200.00', '0.00', '106200.00'),
(99, 99, '1', '32000.00', '0.00', '5760.00', '37760.00', '0.00', '37760.00'),
(100, 100, '1', '70000.00', '0.00', '12600.00', '82600.00', '0.00', '82600.00'),
(101, 101, '1', '274000.00', '0.00', '49320.00', '323320.00', '0.00', '323320.00'),
(102, 102, '1', '120000.00', '0.00', '21600.00', '141600.00', '0.00', '141600.00'),
(103, 103, '1', '22450.00', '0.00', '4041.00', '26491.00', '0.00', '26491.00'),
(104, 104, '1', '206000.00', '0.00', '37080.00', '243080.00', '0.00', '243080.00'),
(105, 105, '1', '220000.00', '0.00', '39600.00', '259600.00', '0.00', '259600.00'),
(106, 106, '1', '70000.00', '0.00', '12600.00', '82600.00', '0.00', '82600.00'),
(107, 107, '1', '39530.00', '0.00', '7115.40', '46645.40', '0.00', '46645.40'),
(108, 108, '1', '110000.00', '0.00', '19800.00', '129800.00', '0.00', '129800.00'),
(109, 109, '1', '25000.00', '0.00', '4500.00', '29500.00', '0.00', '29500.00'),
(110, 110, '1', '253000.00', '0.00', '45540.00', '298540.00', '0.00', '298540.00'),
(111, 111, '1', '160000.00', '0.00', '28800.00', '188800.00', '0.00', '188800.00'),
(112, 112, '1', '180000.00', '0.00', '32400.00', '212400.00', '0.00', '212400.00'),
(113, 113, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(114, 114, '1', '245000.00', '0.00', '44100.00', '289100.00', '0.00', '289100.00'),
(115, 115, '1', '1300.00', '0.00', '234.00', '1534.00', '0.00', '1534.00'),
(116, 116, '1', '295000.00', '0.00', '53100.00', '348100.00', '0.00', '348100.00'),
(117, 117, '1', '195000.00', '0.00', '35100.00', '230100.00', '0.00', '230100.00'),
(118, 118, '1', '220000.00', '0.00', '39600.00', '259600.00', '0.00', '259600.00'),
(119, 119, '1', '17000.00', '0.00', '3060.00', '20060.00', '0.00', '20060.00'),
(120, 120, '1', '162000.00', '0.00', '29160.00', '191160.00', '0.00', '191160.00'),
(121, 121, '1', '8500.00', '0.00', '1530.00', '10030.00', '0.00', '10030.00'),
(122, 122, '1', '22000.00', '0.00', '3960.00', '25960.00', '0.00', '25960.00'),
(123, 123, '1', '200000.00', '0.00', '36000.00', '236000.00', '0.00', '236000.00'),
(124, 124, '1', '225000.00', '0.00', '40500.00', '265500.00', '0.00', '265500.00'),
(125, 125, '1', '4000.00', '0.00', '720.00', '4720.00', '0.00', '4720.00'),
(126, 126, '1', '33000.00', '0.00', '5940.00', '38940.00', '0.00', '38940.00'),
(130, 130, '1', '70000.00', '0.00', '12600.00', '82600.00', '0.00', '82600.00'),
(243, 243, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(132, 132, '1', '205000.00', '0.00', '36900.00', '241900.00', '0.00', '241900.00'),
(133, 133, '1', '227000.00', '0.00', '40860.00', '267860.00', '0.00', '267860.00'),
(134, 134, '1', '35000.00', '0.00', '6300.00', '41300.00', '0.00', '41300.00'),
(135, 135, '1', '5000.00', '0.00', '900.00', '5900.00', '0.00', '5900.00'),
(136, 136, '1', '800.00', '0.00', '144.00', '944.00', '0.00', '944.00'),
(137, 137, '1', '100000.00', '0.00', '18000.00', '118000.00', '0.00', '118000.00'),
(138, 138, '1', '14000.00', '0.00', '2520.00', '16520.00', '0.00', '16520.00'),
(139, 139, '1', '144500.00', '0.00', '26010.00', '170510.00', '0.00', '170510.00'),
(140, 140, '1', '20000.00', '0.00', '3600.00', '23600.00', '0.00', '23600.00'),
(141, 141, '1', '215000.00', '0.00', '38700.00', '253700.00', '0.00', '253700.00'),
(142, 142, '1', '49000.00', '0.00', '8820.00', '57820.00', '0.00', '57820.00'),
(143, 143, '1', '44000.00', '0.00', '7920.00', '51920.00', '0.00', '51920.00'),
(144, 144, '1', '285000.00', '0.00', '51300.00', '336300.00', '0.00', '336300.00'),
(145, 145, '1', '185000.00', '0.00', '33300.00', '218300.00', '0.00', '218300.00'),
(146, 146, '1', '25000.00', '0.00', '4500.00', '29500.00', '0.00', '29500.00'),
(147, 147, '1', '272000.00', '0.00', '48960.00', '320960.00', '0.00', '320960.00'),
(148, 148, '1', '175000.00', '0.00', '31500.00', '206500.00', '0.00', '206500.00'),
(149, 149, '1', '25500.00', '0.00', '4590.00', '30090.00', '0.00', '30090.00'),
(150, 150, '1', '150000.00', '0.00', '27000.00', '177000.00', '0.00', '177000.00'),
(151, 151, '1', '20000.00', '0.00', '3600.00', '23600.00', '0.00', '23600.00'),
(152, 152, '1', '2000.00', '0.00', '360.00', '2360.00', '0.00', '2360.00'),
(153, 153, '1', '210000.00', '0.00', '37800.00', '247800.00', '0.00', '247800.00'),
(154, 154, '1', '135000.00', '0.00', '24300.00', '159300.00', '0.00', '159300.00'),
(155, 155, '1', '255000.00', '0.00', '45900.00', '300900.00', '0.00', '300900.00'),
(156, 156, '1', '180000.00', '0.00', '32400.00', '212400.00', '0.00', '212400.00'),
(157, 157, '1', '26000.00', '0.00', '4680.00', '30680.00', '0.00', '30680.00'),
(158, 158, '1', '30000.00', '0.00', '5400.00', '35400.00', '0.00', '35400.00'),
(159, 159, '1', '155000.00', '0.00', '27900.00', '182900.00', '0.00', '182900.00'),
(160, 160, '1', '12000.00', '0.00', '2160.00', '14160.00', '0.00', '14160.00'),
(161, 161, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(162, 162, '1', '100000.00', '0.00', '18000.00', '118000.00', '0.00', '118000.00'),
(163, 163, '1', '48000.00', '0.00', '8640.00', '56640.00', '0.00', '56640.00'),
(164, 164, '1', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(165, 165, '1', '30000.00', '0.00', '5400.00', '35400.00', '0.00', '35400.00'),
(166, 166, '1', '12000.00', '0.00', '2160.00', '14160.00', '0.00', '14160.00'),
(167, 167, '1', '2500.00', '0.00', '450.00', '2950.00', '0.00', '2950.00'),
(168, 168, '1', '6500.00', '0.00', '1170.00', '7670.00', '0.00', '7670.00'),
(169, 169, '1', '19000.00', '0.00', '3420.00', '22420.00', '0.00', '22420.00'),
(170, 170, '1', '170000.00', '0.00', '30600.00', '200600.00', '0.00', '200600.00'),
(171, 171, '1', '80000.00', '0.00', '14400.00', '94400.00', '0.00', '94400.00'),
(172, 172, '1', '17000.00', '0.00', '3060.00', '20060.00', '0.00', '20060.00'),
(173, 173, '1', '238000.00', '0.00', '42840.00', '280840.00', '0.00', '280840.00'),
(174, 174, '1', '6500.00', '0.00', '1170.00', '7670.00', '0.00', '7670.00'),
(175, 175, '1', '115000.00', '0.00', '20700.00', '135700.00', '0.00', '135700.00'),
(176, 176, '1', '12500.00', '0.00', '2250.00', '14750.00', '0.00', '14750.00'),
(177, 177, '1', '162050.00', '0.00', '29169.00', '191219.00', '0.00', '191219.00'),
(178, 178, '1', '140000.00', '0.00', '25200.00', '165200.00', '0.00', '165200.00'),
(179, 179, '1', '72500.00', '0.00', '13050.00', '85550.00', '0.00', '85550.00'),
(180, 180, '1', '32000.00', '0.00', '5760.00', '37760.00', '0.00', '37760.00'),
(181, 181, '1', '140000.00', '0.00', '25200.00', '165200.00', '0.00', '165200.00'),
(182, 182, '1', '100000.00', '0.00', '18000.00', '118000.00', '0.00', '118000.00'),
(183, 183, '1', '190000.00', '0.00', '34200.00', '224200.00', '0.00', '224200.00'),
(184, 184, '1', '120000.00', '0.00', '21600.00', '141600.00', '0.00', '141600.00'),
(186, 186, '1', '18000.00', '0.00', '3240.00', '21240.00', '0.00', '21240.00'),
(187, 187, '1', '28000.00', '0.00', '5040.00', '33040.00', '33040.00', '0.00'),
(188, 188, '1', '180000.00', '0.00', '32400.00', '212400.00', '0.00', '212400.00'),
(189, 189, '1', '217000.00', '0.00', '39060.00', '256060.00', '0.00', '256060.00'),
(190, 190, '1', '20000.00', '0.00', '3600.00', '23600.00', '0.00', '23600.00'),
(191, 191, '1', '60000.00', '0.00', '10800.00', '70800.00', '0.00', '70800.00'),
(192, 192, '1', '0.00', NULL, '0.00', '0.00', '0.00', '0.00'),
(193, 193, '1', '106000.00', '0.00', '19080.00', '125080.00', '0.00', '125080.00'),
(194, 194, '1', '4000.00', '0.00', '720.00', '4720.00', '0.00', '4720.00'),
(195, 195, '1', '49000.00', '0.00', '8820.00', '57820.00', '0.00', '57820.00'),
(196, 196, '1', '191000.00', '0.00', '34380.00', '225380.00', '225380.00', '0.00'),
(197, 197, '1', '120000.00', '0.00', '21600.00', '141600.00', '0.00', '141600.00'),
(198, 198, '1', '61000.00', '0.00', '10980.00', '71980.00', '0.00', '71980.00'),
(199, 199, '1', '30000.00', '0.00', '5400.00', '35400.00', '0.00', '35400.00'),
(200, 200, '1', '32000.00', '0.00', '0.00', '32000.00', '0.00', '32000.00'),
(201, 201, '1', '6000.00', '0.00', '1080.00', '7080.00', '0.00', '7080.00'),
(202, 202, '1', '5460.00', '0.00', '0.00', '5460.00', '0.00', '5460.00'),
(203, 203, '1', '8500.00', '0.00', '1530.00', '10030.00', '0.00', '10030.00'),
(204, 204, '1', '142000.00', '0.00', '25560.00', '167560.00', '0.00', '167560.00'),
(205, 205, '1', '20000.00', '0.00', '3600.00', '23600.00', '23600.00', '0.00'),
(206, 206, '1', '225000.00', '0.00', '40500.00', '265500.00', '0.00', '265500.00'),
(207, 207, '1', '244000.00', '0.00', '43920.00', '287920.00', '0.00', '287920.00'),
(208, 208, '1', '105000.00', '0.00', '18900.00', '123900.00', '0.00', '123900.00'),
(209, 209, '1', '50000.00', '0.00', '9000.00', '59000.00', '0.00', '59000.00'),
(210, 210, '1', '120500.00', '0.00', '21690.00', '142190.00', '0.00', '142190.00'),
(211, 211, '1', '244000.00', '0.00', '43920.00', '287920.00', '0.00', '287920.00'),
(212, 212, '1', '115000.00', '0.00', '20700.00', '135700.00', '0.00', '135700.00'),
(213, 213, '1', '250000.00', '0.00', '45000.00', '295000.00', '0.00', '295000.00'),
(214, 214, '1', '275000.00', '0.00', '49500.00', '324500.00', '0.00', '324500.00'),
(215, 215, '1', '30000.00', '0.00', '5400.00', '35400.00', '0.00', '35400.00'),
(216, 216, '1', '15000.00', '0.00', '0.00', '15000.00', '0.00', '15000.00'),
(217, 217, '1', '30000.00', '0.00', '5400.00', '35400.00', '0.00', '35400.00'),
(218, 218, '1', '15000.00', '0.00', '2700.00', '17700.00', '17814.00', '-114.00'),
(219, 219, '1', '259250.00', '0.00', '0.00', '259250.00', '0.00', '259250.00'),
(220, 220, '1', '570000.00', '0.00', '102600.00', '672600.00', '672600.00', '0.00'),
(221, 221, '1', '4500.00', '0.00', '810.00', '5310.00', '5310.00', '0.00'),
(222, 222, '1', '200000.00', '0.00', '36000.00', '236000.00', '200000.00', '36000.00'),
(223, 223, '1', '6500.00', '0.00', '1170.00', '7670.00', '7690.00', '-20.00'),
(224, 224, '1', '85000.00', '0.00', '0.00', '85000.00', '100300.00', '-15300.00'),
(225, 225, '1', '65000.00', '0.00', '0.00', '65000.00', '65000.00', '0.00'),
(226, 226, '1', '152000.00', '1000.00', '27360.00', '180360.00', '41900.00', '138460.00'),
(227, 227, '1', '20000.00', '0.00', '0.00', '20000.00', '20000.00', '0.00'),
(228, 228, '1', '170000.00', '0.00', '0.00', '170000.00', '170000.00', '0.00'),
(229, 229, '1', '119000.00', '0.00', '0.00', '119000.00', '138000.00', '-19000.00'),
(234, 234, '1', '254000.00', '0.00', '45720.00', '299720.00', '299720.00', '0.00'),
(231, 231, '1', '90000.00', '0.00', '0.00', '90000.00', '90000.00', '0.00'),
(232, 232, '1', '4500.00', '0.00', '0.00', '4500.00', '5310.00', '-810.00'),
(233, 233, '1', '50000.00', '0.00', '0.00', '50000.00', '50000.00', '0.00'),
(242, 242, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(244, 244, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(245, 245, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(246, 246, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(247, 247, '1', '2000.00', '100.00', '0.00', '2100.00', '2100.00', '0.00'),
(248, 248, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(249, 249, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(250, 250, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(251, 251, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(252, 252, '1', '22000.00', '3960.00', '0.00', '25960.00', '0.00', '25960.00'),
(253, 253, '-1', '468000.00', '0.00', '168480.00', '636480.00', '0.00', '636480.00'),
(254, 254, '1', '279000.00', '0.00', '0.00', '279000.00', '0.00', '279000.00'),
(255, 255, '1', '279000.00', '0.00', '0.00', '279000.00', '0.00', '279000.00'),
(256, 256, '1', '279000.00', '0.00', '100440.00', '379440.00', '0.00', '379440.00'),
(257, 257, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(258, 258, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(259, 259, '1', '424000.00', '0.00', '0.00', '424000.00', '0.00', '424000.00'),
(260, 260, '1', '424000.00', '0.00', '0.00', '424000.00', '0.00', '424000.00'),
(261, 261, '1', '424000.00', '0.00', '0.00', '424000.00', '0.00', '424000.00'),
(262, 262, '1', '424000.00', '0.00', '0.00', '424000.00', '0.00', '424000.00'),
(263, 263, '1', '424000.00', '0.00', '76320.00', '500320.00', '0.00', '500320.00'),
(264, 264, '-1', '424000.00', '0.00', '0.00', '424000.00', '0.00', '424000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_custom`
--

CREATE TABLE `ip_invoice_custom` (
  `invoice_custom_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoice_custom_fieldid` int(11) NOT NULL,
  `invoice_custom_fieldvalue` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_invoice_custom`
--

INSERT INTO `ip_invoice_custom` (`invoice_custom_id`, `invoice_id`, `invoice_custom_fieldid`, `invoice_custom_fieldvalue`) VALUES
(33, 13, 2, 'GLE300d'),
(34, 13, 3, 'Blue'),
(35, 13, 1, 'Mercedes Benz'),
(36, 13, 4, 'TN 01 BL 5001'),
(37, 14, 2, NULL),
(38, 14, 3, NULL),
(39, 14, 1, NULL),
(40, 14, 4, NULL),
(41, 18, 2, 'Mercedes Benz S350'),
(42, 18, 3, 'Pearl White'),
(43, 18, 1, NULL),
(44, 18, 4, NULL),
(45, 19, 2, 'X3'),
(46, 19, 3, 'Black'),
(47, 19, 1, 'BMW'),
(48, 19, 4, 'TN 13 X 7777'),
(49, 20, 2, ' X5 40i'),
(50, 20, 3, 'Dark Blue'),
(51, 20, 1, '2020 BMW'),
(52, 20, 4, 'TN01BM7654'),
(53, 21, 2, 'M2 Competetion'),
(54, 21, 3, 'Hokkenheim Silver'),
(55, 21, 1, 'BMW'),
(56, 21, 4, 'TN 06 Y 9699'),
(57, 22, 2, NULL),
(58, 22, 3, NULL),
(59, 22, 1, NULL),
(60, 22, 4, NULL),
(61, 23, 2, 'X5 40i'),
(62, 23, 3, 'white pearl'),
(63, 23, 1, 'BMW'),
(64, 23, 4, NULL),
(65, 24, 2, 'Octavia VRS 245'),
(66, 24, 3, 'Green'),
(67, 24, 1, 'Skoda'),
(68, 24, 4, 'TN07CX0700'),
(69, 25, 2, 'F Pace'),
(70, 25, 3, 'Metallic dark grey'),
(71, 25, 1, 'Jaguar'),
(72, 25, 4, 'PY 05 J 0004'),
(73, 26, 2, 'Innova '),
(74, 26, 3, 'Metallic Grey'),
(75, 26, 1, 'Toyota'),
(76, 26, 4, 'TN 07 BV 0535'),
(77, 28, 2, 'NA'),
(78, 28, 3, NULL),
(79, 28, 1, 'NA'),
(80, 28, 4, 'NA'),
(81, 30, 2, 'Urus'),
(82, 30, 3, 'Rosso Marr'),
(83, 30, 1, 'Lamborgini'),
(84, 30, 4, NULL),
(85, 31, 2, 'Octavia VRS'),
(86, 31, 3, 'Carbon steel grey'),
(87, 31, 1, 'Skoda'),
(88, 31, 4, 'TN 14 D 7565'),
(89, 32, 2, 'Octavia VRS 245'),
(90, 32, 3, 'Race blue '),
(91, 32, 1, 'Skoda'),
(92, 32, 4, 'TN07CV7331'),
(93, 33, 2, 'Innova'),
(94, 33, 3, 'Grey metallic'),
(95, 33, 1, 'Toyota'),
(96, 33, 4, 'TN 07 BV 0535'),
(97, 34, 2, NULL),
(98, 34, 3, NULL),
(99, 34, 1, NULL),
(100, 34, 4, NULL),
(101, 35, 2, 'M2 C'),
(102, 35, 3, 'Black metallic'),
(103, 35, 1, 'BMW'),
(104, 35, 4, 'TN20BU0567'),
(105, 36, 2, 'X3'),
(106, 36, 3, 'Metallic brown'),
(107, 36, 1, 'BMW'),
(108, 36, 4, NULL),
(109, 37, 2, 'Endeavour'),
(110, 37, 3, 'Black'),
(111, 37, 1, 'Ford'),
(112, 37, 4, 'F/R'),
(113, 38, 2, NULL),
(114, 38, 3, NULL),
(115, 38, 1, NULL),
(116, 38, 4, NULL),
(117, 39, 2, 'Karoq'),
(118, 39, 3, 'White'),
(119, 39, 1, 'Skoda'),
(120, 39, 4, NULL),
(121, 40, 2, 'G63'),
(122, 40, 3, NULL),
(123, 40, 1, 'Mercedes'),
(124, 40, 4, 'TN 06 V 9119'),
(125, 41, 2, 'Crysta'),
(126, 41, 3, 'Pearl White.'),
(127, 41, 1, 'Innova'),
(128, 41, 4, NULL),
(129, 42, 2, 'Cruze'),
(130, 42, 3, 'White'),
(131, 42, 1, 'Chevy'),
(132, 42, 4, NULL),
(133, 43, 2, '330i GT'),
(134, 43, 3, 'Estoril Blue'),
(135, 43, 1, 'BMW'),
(136, 43, 4, NULL),
(137, 44, 2, 'A6'),
(138, 44, 3, 'Silver'),
(139, 44, 1, 'AUDI'),
(140, 44, 4, 'TN01BC3309'),
(141, 45, 2, 'X7 40i'),
(142, 45, 3, 'Blue Metallic'),
(143, 45, 1, 'BMW'),
(144, 45, 4, NULL),
(145, 46, 2, '911 Turbo S'),
(146, 46, 3, 'Black'),
(147, 46, 1, 'Porsche'),
(148, 46, 4, 'PY 05 C 3666'),
(149, 47, 2, 'T Roc'),
(150, 47, 3, 'Metallic Grey'),
(151, 47, 1, 'Volkswagen'),
(152, 47, 4, 'TN 02 BT 3348'),
(153, 48, 2, 'S350d'),
(154, 48, 3, 'Ruby red'),
(155, 48, 1, 'Mercedes Benz'),
(156, 48, 4, 'TN 07 CW 6789'),
(157, 49, 2, 'Vogue Autobiography'),
(158, 49, 3, 'White'),
(159, 49, 1, 'Range Rover'),
(160, 49, 4, 'PY 01 CU 3666'),
(161, 51, 2, 'Seltos'),
(162, 51, 3, 'White'),
(163, 51, 1, 'Kia'),
(164, 51, 4, NULL),
(165, 52, 2, 'A8 L'),
(166, 52, 3, 'Moonlight blue'),
(167, 52, 1, 'Audi'),
(168, 52, 4, 'PY 05 J 0022'),
(169, 53, 2, 'S350d'),
(170, 53, 3, 'White'),
(171, 53, 1, 'Mercedes Benz'),
(172, 53, 4, 'TN07CV0099'),
(173, 54, 2, 'Superb'),
(174, 54, 3, 'Business grey'),
(175, 54, 1, 'Skoda'),
(176, 54, 4, NULL),
(177, 55, 2, 'GLE'),
(178, 55, 3, NULL),
(179, 55, 1, 'Mercedes Benz'),
(180, 55, 4, 'TN 01 BK 7654'),
(181, 56, 2, 'X7 40i'),
(182, 56, 3, 'Grey'),
(183, 56, 1, 'BMW'),
(184, 56, 4, NULL),
(185, 57, 2, '520d'),
(186, 57, 3, 'White'),
(187, 57, 1, 'BMW'),
(188, 57, 4, 'TN 01 BD 7500'),
(189, 61, 2, '520d Luxury'),
(190, 61, 3, 'Black metallic'),
(191, 61, 1, 'BMW'),
(192, 61, 4, 'TN 19 AL 8811'),
(193, 62, 2, 'A8L'),
(194, 62, 3, 'Moonlight blue '),
(195, 62, 1, 'Audi'),
(196, 62, 4, 'PY 05 J 0022'),
(197, 63, 2, 'Discovery Sport'),
(198, 63, 3, 'Grey'),
(199, 63, 1, 'Land Rover'),
(200, 63, 4, 'TN 06 Z 4699'),
(201, 64, 2, 'Octavia VRS 245'),
(202, 64, 3, 'Race Blue'),
(203, 64, 1, 'Skoda'),
(204, 64, 4, 'TN 06 Z 8245'),
(205, 65, 2, '740 Li'),
(206, 65, 3, 'Doninigton Grey'),
(207, 65, 1, 'BMW'),
(208, 65, 4, NULL),
(209, 66, 2, 'Cayenne Coupe'),
(210, 66, 3, 'Crayon'),
(211, 66, 1, 'Porsche'),
(212, 66, 4, NULL),
(213, 67, 2, '530D'),
(214, 67, 3, 'Blue metallic'),
(215, 67, 1, 'BMW'),
(216, 67, 4, NULL),
(217, 68, 2, 'GT 63 AMG'),
(218, 68, 3, 'Designo Brilliant Blue Magnos'),
(219, 68, 1, 'Mercedes Benz'),
(220, 68, 4, NULL),
(221, 69, 2, 'Superb'),
(222, 69, 3, 'Black'),
(223, 69, 1, 'Skoda '),
(224, 69, 4, NULL),
(225, 70, 2, '330i'),
(226, 70, 3, 'Black'),
(227, 70, 1, 'BMW'),
(228, 70, 4, NULL),
(229, 71, 2, NULL),
(230, 71, 3, NULL),
(231, 71, 1, NULL),
(232, 71, 4, NULL),
(233, 72, 2, 'Polo GT '),
(234, 72, 3, 'Grey'),
(235, 72, 1, 'Volkswagen'),
(236, 72, 4, NULL),
(237, 74, 2, 'Camry'),
(238, 74, 3, 'Pearl white'),
(239, 74, 1, 'Toyota'),
(240, 74, 4, NULL),
(241, 75, 2, '740Li'),
(242, 75, 3, NULL),
(243, 75, 1, 'BMW'),
(244, 75, 4, 'TN 01 BL 3069'),
(245, 76, 2, 'E350'),
(246, 76, 3, 'Arrow silver'),
(247, 76, 1, 'Mercedes benz'),
(248, 76, 4, NULL),
(249, 77, 2, 'M2 competition'),
(250, 77, 3, 'Black sapphire metallic '),
(251, 77, 1, 'BMW '),
(252, 77, 4, NULL),
(253, 78, 2, 'X7 40i'),
(254, 78, 3, 'Blue'),
(255, 78, 1, 'BMW'),
(256, 78, 4, NULL),
(257, 80, 2, '730 Ld'),
(258, 80, 3, 'Ruby red'),
(259, 80, 1, 'BMW'),
(260, 80, 4, NULL),
(261, 81, 2, 'Compass'),
(262, 81, 3, 'Dark grey metallic'),
(263, 81, 1, 'Jeep'),
(264, 81, 4, NULL),
(265, 82, 2, '520d'),
(266, 82, 3, 'Alpine white'),
(267, 82, 1, 'BMW'),
(268, 82, 4, NULL),
(269, 83, 2, 'Sport'),
(270, 83, 3, 'Blue metallic'),
(271, 83, 1, 'Range Rover'),
(272, 83, 4, NULL),
(273, 84, 2, '220D'),
(274, 84, 3, 'Black metallic'),
(275, 84, 1, 'BMW'),
(276, 84, 4, 'TN 14 X 6606'),
(277, 85, 2, 'CRV'),
(278, 85, 3, 'White'),
(279, 85, 1, 'Honda'),
(280, 85, 4, 'TN 47 BB 3146'),
(281, 86, 2, 'Seltos GT'),
(282, 86, 3, 'Red metallic'),
(283, 86, 1, 'Kia'),
(284, 86, 4, NULL),
(285, 87, 2, 'VRS 230'),
(286, 87, 3, 'Steel grey'),
(287, 87, 1, 'Skoda'),
(288, 87, 4, 'TN 95 N 8010'),
(289, 89, 2, 'Rapid'),
(290, 89, 3, 'Red'),
(291, 89, 1, 'Skoda'),
(292, 89, 4, 'TN 14 K 3730'),
(293, 90, 2, 'Jazz'),
(294, 90, 3, 'Golden brown'),
(295, 90, 1, 'Honda'),
(296, 90, 4, NULL),
(297, 92, 2, 'Polo'),
(298, 92, 3, 'Silver'),
(299, 92, 1, 'Volkswagen '),
(300, 92, 4, NULL),
(301, 91, 2, 'Superb'),
(302, 91, 3, 'Business grey'),
(303, 91, 1, 'Skoda'),
(304, 91, 4, NULL),
(305, 93, 2, '3GT'),
(306, 93, 3, NULL),
(307, 93, 1, 'BMW'),
(308, 93, 4, 'TN 07 CK 7200'),
(309, 94, 2, '730 LD'),
(310, 94, 3, 'Black'),
(311, 94, 1, 'BMW'),
(312, 94, 4, 'TN 07 BS 0333'),
(313, 95, 2, 'Disco Sport'),
(314, 95, 3, 'Black metallic'),
(315, 95, 1, 'Land Rover'),
(316, 95, 4, NULL),
(317, 96, 2, 'Sonnet'),
(318, 96, 3, 'Metallic black'),
(319, 96, 1, 'Kia'),
(320, 96, 4, 'TN 07 CW 2729'),
(321, 97, 2, 'City AT'),
(322, 97, 3, NULL),
(323, 97, 1, 'Honda'),
(324, 97, 4, 'TN 02 AW 8286'),
(325, 98, 2, 'Altroz'),
(326, 98, 3, 'Red metallic'),
(327, 98, 1, 'TATA'),
(328, 98, 4, NULL),
(329, 99, 2, 'Octavia'),
(330, 99, 3, 'White'),
(331, 99, 1, 'Skoda'),
(332, 99, 4, 'TN 11 X 9988'),
(333, 100, 2, 'S class'),
(334, 100, 3, 'Black'),
(335, 100, 1, 'Mercedes Benz'),
(336, 100, 4, 'PY 05 F 9119'),
(337, 101, 2, 'Ghost'),
(338, 101, 3, NULL),
(339, 101, 1, 'Rolls Royce'),
(340, 101, 4, 'MH 43 BR 9009'),
(341, 102, 2, '730Ld'),
(342, 102, 3, 'Burgundy'),
(343, 102, 1, 'BMW'),
(344, 102, 4, 'TN 07 CZ 3000'),
(345, 103, 2, '730Ld'),
(346, 103, 3, 'Royal Burgandy'),
(347, 103, 1, 'BMW'),
(348, 103, 4, 'TN 07 CZ 3000'),
(349, 104, 2, 'X7 30d'),
(350, 104, 3, 'White'),
(351, 104, 1, 'BMW'),
(352, 104, 4, 'TN 12 AP 1908'),
(353, 105, 2, '630d'),
(354, 105, 3, 'Tanzanite Blue'),
(355, 105, 1, 'BMW'),
(356, 105, 4, 'TN 14 Y 0640'),
(357, 106, 2, 'S class'),
(358, 106, 1, 'Mercedes Benz'),
(359, 106, 3, 'Black'),
(360, 106, 4, 'PY 05 F 9119'),
(361, 107, 2, 'NA'),
(362, 107, 3, 'NA'),
(363, 107, 1, 'NA'),
(364, 107, 4, 'NA'),
(365, 108, 2, 'Beetle '),
(366, 108, 3, 'Yellow'),
(367, 108, 1, 'VW'),
(368, 108, 4, NULL),
(369, 109, 2, 'Cayenne Coupe'),
(370, 109, 3, 'Crayon'),
(371, 109, 1, 'Porsche'),
(372, 109, 4, 'TN 11 AX 3366'),
(373, 110, 2, 'G63 AMG'),
(374, 110, 3, 'Dark grey metallic'),
(375, 110, 1, 'Mercedes Benz'),
(376, 110, 4, 'TN 01 BL 9306'),
(377, 111, 2, 'Cayenne diesel'),
(378, 111, 3, 'Metallic black'),
(379, 111, 1, 'Porsche'),
(380, 111, 4, 'PY 01 BU 7273'),
(381, 112, 2, 'S400d'),
(382, 112, 3, 'Emerald green'),
(383, 112, 1, 'Mercedes Benz'),
(384, 112, 4, 'F/R'),
(385, 114, 2, '740Li'),
(386, 114, 3, 'Dark Blue metallic'),
(387, 114, 1, 'BMW'),
(388, 114, 4, 'TN 01 BQ 6399'),
(389, 115, 2, 'X3'),
(390, 115, 3, 'Metallic brown'),
(391, 115, 1, 'BMW'),
(392, 115, 4, 'TN 01 BL 2007'),
(393, 116, 2, 'Vellfire'),
(394, 116, 3, 'Pearl white'),
(395, 116, 1, 'Toyota'),
(396, 116, 4, NULL),
(397, 117, 2, 'Z4'),
(398, 117, 3, 'WHITE'),
(399, 117, 1, 'BMW'),
(400, 117, 4, 'TN 09 BQ 2299'),
(401, 118, 2, 'E350'),
(402, 118, 3, 'White'),
(403, 118, 1, 'Mercedes Benz'),
(404, 118, 4, 'TN01BM0747'),
(405, 119, 2, 'E tron'),
(406, 119, 3, 'Silver'),
(407, 119, 1, 'Audi'),
(408, 119, 4, 'F/R'),
(409, 120, 2, 'GLS 600 Maybach'),
(410, 120, 3, 'Metallic black'),
(411, 120, 1, 'Mercedes Benz'),
(412, 120, 4, 'PY 01 CY 0221'),
(413, 121, 2, 'VELAR'),
(414, 121, 3, 'Black'),
(415, 121, 1, 'Range Rover'),
(416, 121, 4, 'TN 06 X 0079'),
(417, 122, 2, 'Jazz'),
(418, 122, 3, 'Maroon metallic'),
(419, 122, 1, 'Honda'),
(420, 122, 4, NULL),
(421, 123, 2, '992 Carrera S'),
(422, 123, 3, 'Blue'),
(423, 123, 1, 'Porsche'),
(424, 123, 4, 'TN 01 BP 3390'),
(425, 124, 2, 'M5 Competition'),
(426, 124, 3, 'Donington grey'),
(427, 124, 1, 'BMW'),
(428, 124, 4, 'PY05L3366'),
(429, 125, 2, 'F pace '),
(430, 125, 3, 'Grey metallic'),
(431, 125, 1, 'Jaguar'),
(432, 125, 4, 'PY 05 J 0004'),
(433, 126, 2, '740Li'),
(434, 126, 3, 'Donington grey'),
(435, 126, 1, 'BMW'),
(436, 126, 4, 'TN 01 BL 3069'),
(437, 130, 2, 'DB 11'),
(438, 130, 3, 'Grey'),
(439, 130, 1, 'Aston Martin'),
(440, 130, 4, NULL),
(445, 132, 2, '740 Li'),
(446, 132, 3, 'Tanzanite Blue'),
(447, 132, 1, 'BMW'),
(448, 132, 4, 'TN 01 BR 6399'),
(449, 133, 2, 'M2C'),
(450, 133, 3, 'Long beach blue'),
(451, 133, 1, 'BMW'),
(452, 133, 4, 'TN 07 CZ 1010'),
(453, 134, 2, 'Harrier'),
(454, 134, 3, 'Grey metallic'),
(455, 134, 1, 'TATA'),
(456, 134, 4, NULL),
(457, 135, 2, 'F pace'),
(458, 135, 3, NULL),
(459, 135, 1, 'Jaguar'),
(460, 135, 4, 'PY05J0004'),
(461, 136, 2, 'SX4'),
(462, 136, 3, NULL),
(463, 136, 1, 'Maruti'),
(464, 136, 4, 'TN22AY1523'),
(465, 137, 2, 'Jazz'),
(466, 137, 3, 'Maroon metallic'),
(467, 137, 1, 'Honda'),
(468, 137, 4, NULL),
(469, 138, 2, 'ML 250'),
(470, 138, 3, 'Metallic bronze'),
(471, 138, 1, 'Mercedes benz'),
(472, 138, 4, 'TN 22 DB 5160'),
(473, 139, 2, '530i'),
(474, 139, 3, 'Black sapphire '),
(475, 139, 1, 'BMW'),
(476, 139, 4, 'TN 14 Y 7177'),
(477, 140, 2, 'Gloster'),
(478, 140, 3, 'White'),
(479, 140, 1, 'MG'),
(480, 140, 4, NULL),
(481, 141, 2, 'GLS 600 Maybach'),
(482, 141, 3, 'Metallic Blue'),
(483, 141, 1, 'Mercedes Benz'),
(484, 141, 4, NULL),
(485, 142, 2, 'G63 AMG'),
(486, 142, 3, 'Grey Metallic'),
(487, 142, 1, 'Mercedes Bemz'),
(488, 142, 4, NULL),
(489, 143, 2, 'X7'),
(490, 143, 3, 'Black'),
(491, 143, 1, 'BMW'),
(492, 143, 4, 'TN 06 Z 1616'),
(493, 144, 2, 'M5 LCI'),
(494, 144, 3, NULL),
(495, 144, 1, 'BMW'),
(496, 144, 4, 'FR'),
(497, 145, 2, 'Vellfire'),
(498, 145, 3, 'Black'),
(499, 145, 1, 'Toyota'),
(500, 145, 4, 'TN 01 BV 9009'),
(501, 146, 2, 'Carnival'),
(502, 146, 3, 'Grey metallic'),
(503, 146, 1, 'Kia'),
(504, 146, 4, 'TN 01 BM 5656'),
(505, 147, 2, 'X5, VRS'),
(506, 147, 3, 'White, grey'),
(507, 147, 1, 'BMW, Skoda'),
(508, 147, 4, NULL),
(509, 148, 2, 'G 350d'),
(510, 148, 3, 'Green '),
(511, 148, 1, 'Mercedes Benz'),
(512, 148, 4, 'TN 10 BQ 1645'),
(513, 149, 2, '530D'),
(514, 149, 3, 'Blue'),
(515, 149, 1, 'BMW'),
(516, 149, 4, NULL),
(517, 150, 2, 'GLA 220d'),
(518, 150, 3, NULL),
(519, 150, 1, 'Mercedez Benz'),
(520, 150, 4, 'TN 02 BV 4334'),
(521, 151, 2, NULL),
(522, 151, 3, 'Miami blue'),
(523, 151, 1, 'Turbo S'),
(524, 151, 4, NULL),
(525, 152, 2, 'F pace'),
(526, 152, 3, 'Grey'),
(527, 152, 1, 'Jaguar'),
(528, 152, 4, 'PY 05 J 0004'),
(529, 153, 2, 'Urus'),
(530, 153, 3, 'Black'),
(531, 153, 1, 'Lamborgini'),
(532, 153, 4, 'TN 09 DA 3448'),
(533, 154, 2, 'Cayenne diesel'),
(534, 154, 3, 'White'),
(535, 154, 1, 'Porsche'),
(536, 154, 4, 'TN 02 BD 3456'),
(537, 155, 2, 'Urus'),
(538, 155, 3, 'White'),
(539, 155, 1, 'Lamborgini'),
(540, 155, 4, 'PY 05 F 9195'),
(541, 156, 2, 'GLS 400d'),
(542, 156, 3, 'Black'),
(543, 156, 1, 'Mercedes Benz'),
(544, 156, 4, 'TN84M6009'),
(545, 157, 2, 'V40'),
(546, 157, 3, 'Pearl white'),
(547, 157, 1, 'VOLVO'),
(548, 157, 4, 'TN01BF2070'),
(549, 158, 2, 'Altis'),
(550, 158, 3, 'Pearl white'),
(551, 158, 1, 'Toyota'),
(552, 158, 4, 'TN07CF3789'),
(553, 159, 2, 'GLC43 AMG'),
(554, 159, 3, 'Blue'),
(555, 159, 1, 'Mercedes Benz'),
(556, 159, 4, 'TN09DB3669'),
(557, 160, 2, 'Cayenne Turbo'),
(558, 160, 3, 'White'),
(559, 160, 1, 'Porsche'),
(560, 160, 4, 'TN29CZ6999'),
(561, 162, 2, 'Mercedes Benz'),
(562, 162, 3, 'Green metallic'),
(563, 162, 1, NULL),
(564, 162, 4, 'TN01BP0055'),
(565, 163, 2, 'Flying spur'),
(566, 163, 3, 'Blue metallic'),
(567, 163, 1, 'Bentley'),
(568, 163, 4, 'TN06P0077'),
(569, 164, 2, 'GLS400d'),
(570, 164, 3, 'Black'),
(571, 164, 1, 'Mercedes benz'),
(572, 164, 4, 'TN02BT5556'),
(573, 165, 2, 'S class'),
(574, 165, 3, 'Black'),
(575, 165, 1, 'Mercedes Benz'),
(576, 165, 4, 'TN06AB1616'),
(577, 166, 2, 'GLS350d'),
(578, 166, 3, 'Black'),
(579, 166, 1, 'Mercedes Benz'),
(580, 166, 4, 'TN06AA1616'),
(581, 167, 2, 'ertiga'),
(582, 167, 3, 'Metallic blue'),
(583, 167, 1, 'Maruti'),
(584, 167, 4, 'TN43L3016'),
(585, 168, 2, 'X1'),
(586, 168, 3, NULL),
(587, 168, 1, 'BMW'),
(588, 168, 4, 'TN07CV3456'),
(589, 169, 2, 'X7'),
(590, 169, 3, 'Blue'),
(591, 169, 1, 'BMW'),
(592, 169, 4, 'TN11AS4789'),
(593, 170, 2, 'S class'),
(594, 170, 3, 'Blue Metallic'),
(595, 170, 1, 'Mercedes Benz'),
(596, 170, 4, 'TN07CP3000'),
(597, 171, 2, 'X6 40I'),
(598, 171, 3, 'Black sapphire'),
(599, 171, 1, 'BMW'),
(600, 171, 4, 'TN02CB0002'),
(601, 172, 2, 'X5'),
(602, 172, 3, 'Blue metallic'),
(603, 172, 1, 'BMW'),
(604, 172, 4, 'TN19AK3483'),
(605, 173, 2, 'Camry'),
(606, 173, 3, 'Pearl white'),
(607, 173, 1, 'Toyota'),
(608, 173, 4, 'TN09CZ3669'),
(609, 175, 2, 'Cooper S'),
(610, 175, 3, 'Racing yelow'),
(611, 175, 1, 'Mini'),
(612, 175, 4, 'TN01BM8600'),
(613, 174, 2, 'Endeavour'),
(614, 174, 3, 'Red'),
(615, 174, 1, 'Ford'),
(616, 174, 4, 'TN14J0511'),
(617, 176, 2, 'GLS 350D'),
(618, 176, 3, 'Black'),
(619, 176, 1, 'Mercedes Benz'),
(620, 176, 4, 'TN06AA1616'),
(621, 177, 2, 'GLE 300d'),
(622, 177, 3, 'White'),
(623, 177, 1, 'Mercedes Benz'),
(624, 177, 4, 'TN10BT5868'),
(625, 178, 2, 'GLS400d'),
(626, 178, 3, 'Blue'),
(627, 178, 1, 'Mercedes Benz'),
(628, 178, 4, 'TN09CY1080'),
(629, 179, 2, 'E63S AMG'),
(630, 179, 3, 'Satin grey'),
(631, 179, 1, 'Mercedes Benz'),
(632, 179, 4, NULL),
(633, 180, 2, 'GLS 400d'),
(634, 180, 3, 'Black'),
(635, 180, 1, 'Mercedes benz'),
(636, 180, 4, 'TN02BT5556'),
(637, 181, 2, 'Superb'),
(638, 181, 3, 'Black metallic'),
(639, 181, 1, 'Skoda'),
(640, 181, 4, NULL),
(641, 182, 2, 'Octavia L&K 2022'),
(642, 182, 3, 'White'),
(643, 182, 1, 'Skoda'),
(644, 182, 4, 'TN04AZ7477'),
(645, 183, 2, 'GLS400d'),
(646, 183, 3, 'Mojave Silver'),
(647, 183, 1, 'Mercedes Benz'),
(648, 183, 4, 'TN58Q9594'),
(649, 184, 2, 'A35'),
(650, 184, 3, 'Black'),
(651, 184, 1, 'Mercedes Benz'),
(652, 184, 4, 'TN01BS7007'),
(653, 186, 2, 'Vellfire'),
(654, 186, 3, 'Pearl white'),
(655, 186, 1, 'Toyota'),
(656, 186, 4, 'PY05K3456'),
(657, 187, 2, 'E350'),
(658, 187, 3, 'Silver'),
(659, 187, 1, 'Mercedes Benz'),
(660, 187, 4, 'TN02BK9909'),
(661, 188, 2, 'E220'),
(662, 188, 3, 'White'),
(663, 188, 1, 'Mercedes Benz'),
(664, 188, 4, 'TN07CZ4334'),
(665, 189, 2, 'X7 40i'),
(666, 189, 3, 'Carbon black'),
(667, 189, 1, 'BMW'),
(668, 189, 4, 'TN01BM9963'),
(669, 190, 2, 'DB11'),
(670, 190, 3, 'Grey'),
(671, 190, 1, 'Aston Martin'),
(672, 190, 4, 'TN01BJ1770'),
(673, 191, 2, 'GT3'),
(674, 191, 3, 'Miami Blue'),
(675, 191, 1, 'Porsche'),
(676, 191, 4, 'TN01BF6966'),
(677, 193, 2, 'Alcazar'),
(678, 193, 3, 'Black'),
(679, 193, 1, 'Hyundai'),
(680, 193, 4, 'TN07CZ6779'),
(681, 194, 2, 'INNOVA'),
(682, 194, 3, 'Grey'),
(683, 194, 1, 'Toyota'),
(684, 194, 4, 'TN07CM0877'),
(685, 195, 2, 'G63 AMG'),
(686, 195, 3, 'Grey Metallic'),
(687, 195, 1, 'Mercedes Benz'),
(688, 195, 4, 'TN01AV2004'),
(689, 196, 2, 'GLS400d'),
(690, 196, 3, 'Blue metallic'),
(691, 196, 1, 'Mercedes Benz'),
(692, 196, 4, 'TN09DB3335'),
(693, 197, 2, NULL),
(694, 197, 3, NULL),
(695, 197, 1, NULL),
(696, 197, 4, NULL),
(697, 198, 2, 'Aircross'),
(698, 198, 3, 'Silver'),
(699, 198, 1, 'Citroen'),
(700, 198, 4, 'TN07DD6789'),
(701, 199, 2, 'E200'),
(702, 199, 3, 'Metallic brown'),
(703, 199, 1, 'Mercedes Benz'),
(704, 199, 4, 'TN01BQ7654'),
(705, 200, 2, ' M2C'),
(706, 200, 3, NULL),
(707, 200, 1, 'BMW'),
(708, 200, 4, 'TN02BU0567'),
(709, 201, 2, 'Q8'),
(710, 201, 3, 'Black'),
(711, 201, 1, 'Audi'),
(712, 201, 4, 'PY05L7173'),
(713, 202, 2, 'GLE'),
(714, 202, 3, 'White'),
(715, 202, 1, 'Mercedes Benz'),
(716, 202, 4, NULL),
(717, 203, 2, 'CLA'),
(718, 203, 3, 'Grey'),
(719, 203, 1, 'Mercedes Benz'),
(720, 203, 4, 'TN07CB9933'),
(721, 204, 2, 'GLS'),
(722, 204, 3, NULL),
(723, 204, 1, 'Mercedes Benz'),
(724, 204, 4, NULL),
(725, 205, 2, 'E350d'),
(726, 205, 3, 'White'),
(727, 205, 1, 'Mercedes Benz'),
(728, 205, 4, 'TN01BM0747'),
(729, 206, 2, 'X5 40i'),
(730, 206, 3, 'Carbon Black'),
(731, 206, 1, 'BMW'),
(732, 206, 4, 'TN02CF0555'),
(733, 207, 2, 'Cayenne Coupe Turbo'),
(734, 207, 3, 'Carmine red'),
(735, 207, 1, 'Porsche'),
(736, 207, 4, 'TN10BU5868'),
(737, 208, 2, 'DB11'),
(738, 208, 3, 'Grey'),
(739, 208, 1, 'Aston Martin'),
(740, 208, 4, 'TN01BJ1770'),
(741, 209, 2, 'G350d'),
(742, 209, 3, 'Olive green'),
(743, 209, 1, 'Mercedes Benz'),
(744, 209, 4, 'TN10BQ1645'),
(745, 210, 2, 'GLA220d'),
(746, 210, 3, NULL),
(747, 210, 1, 'Mercedes Benz'),
(748, 210, 4, 'TN01BR9798'),
(749, 211, 2, 'Cayenne Coupe Turbo'),
(750, 211, 3, 'Carmine red'),
(751, 211, 1, 'Porsche'),
(752, 211, 4, 'TN10BU5868'),
(753, 212, 2, 'Huracan'),
(754, 212, 3, 'Le mans blu'),
(755, 212, 1, 'Lamborgini'),
(756, 212, 4, 'PY01CM0555'),
(757, 213, 2, 'X7 40i'),
(758, 213, 3, 'White'),
(759, 213, 1, 'BMW'),
(760, 213, 4, NULL),
(761, 214, 2, 'E tron'),
(762, 214, 3, 'Grey'),
(763, 214, 1, 'Audi'),
(764, 214, 4, 'TN01BQ9090'),
(765, 216, 2, '520d'),
(766, 216, 3, 'Blue'),
(767, 216, 1, 'BMW'),
(768, 216, 4, 'PY01CU2000'),
(769, 217, 2, 'GLE300d'),
(770, 217, 3, 'Mojave silver'),
(771, 217, 1, 'Mercedes Benz'),
(772, 217, 4, 'TN09DA3669'),
(773, 218, 2, NULL),
(774, 218, 3, NULL),
(775, 218, 1, NULL),
(776, 218, 4, NULL),
(777, 219, 2, 'X6 40i'),
(778, 219, 3, 'White'),
(779, 219, 1, 'BMW'),
(780, 219, 4, 'TN95M4777'),
(781, 220, 2, 'E350d'),
(782, 220, 3, 'Blue'),
(783, 220, 1, 'Mercedes Benz'),
(784, 220, 4, 'TN07DA6999'),
(785, 221, 2, NULL),
(786, 221, 3, NULL),
(787, 221, 1, NULL),
(788, 221, 4, NULL),
(789, 222, 2, 'GLC220d'),
(790, 222, 3, 'Blue'),
(791, 222, 1, 'Mercedes Benz'),
(792, 222, 4, 'AP39JQ2259'),
(793, 223, 2, 'X5'),
(794, 223, 3, 'Blue'),
(795, 223, 1, 'BMW'),
(796, 223, 4, 'TN19AK3483'),
(797, 224, 2, NULL),
(798, 224, 3, NULL),
(799, 224, 1, NULL),
(800, 224, 4, NULL),
(801, 225, 2, 'Fortuner'),
(802, 225, 3, 'White'),
(803, 225, 1, 'Toyota'),
(804, 225, 4, 'TN45BM8174'),
(805, 226, 2, 'GLS600'),
(806, 226, 3, 'Black'),
(807, 226, 1, 'Mercedes Benz'),
(808, 226, 4, 'PY01CY0221'),
(809, 227, 2, 'Compass'),
(810, 227, 3, 'White'),
(811, 227, 1, 'Jeep'),
(812, 227, 4, 'TN01BM4178'),
(813, 228, 2, 'Skoda '),
(814, 228, 3, 'White'),
(815, 228, 1, 'Kodiaq'),
(816, 228, 4, 'TN13Y2794'),
(817, 229, 2, 'E200'),
(818, 229, 3, 'Graphite grey'),
(819, 229, 1, 'Mercedes Benz'),
(820, 229, 4, 'TN09DA2781'),
(825, 231, 2, NULL),
(826, 231, 3, NULL),
(827, 231, 1, NULL),
(828, 231, 4, NULL),
(829, 232, 2, 'GLC43'),
(830, 232, 3, 'Blue'),
(831, 232, 1, 'Mercedes Benz'),
(832, 232, 4, 'TN09DB3669'),
(833, 233, 2, 'Maybach GLS 600'),
(834, 233, 3, 'Blue'),
(835, 233, 1, 'Mercedes Benz'),
(836, 233, 4, 'TN02BV0509'),
(837, 247, 3, NULL),
(838, 247, 4, NULL),
(839, 253, 2, ' X5 40i'),
(840, 256, 3, ''),
(841, 263, 2, ' X5 40i'),
(842, 263, 3, ''),
(843, 264, 2, ' X5 40i');

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_groups`
--

CREATE TABLE `ip_invoice_groups` (
  `invoice_group_id` int(11) NOT NULL,
  `invoice_group_name` text DEFAULT NULL,
  `invoice_group_identifier_format` varchar(255) NOT NULL,
  `invoice_group_next_id` int(11) NOT NULL,
  `invoice_group_left_pad` int(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_invoice_groups`
--

INSERT INTO `ip_invoice_groups` (`invoice_group_id`, `invoice_group_name`, `invoice_group_identifier_format`, `invoice_group_next_id`, `invoice_group_left_pad`) VALUES
(3, 'Invoice Series', '{{{id}}}', 2, 0),
(4, 'Quote Series', 'QUO{{{id}}}', 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_items`
--

CREATE TABLE `ip_invoice_items` (
  `item_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_tax_rate_id` int(11) NOT NULL DEFAULT 0,
  `item_product_id` int(11) DEFAULT NULL,
  `item_date_added` date NOT NULL,
  `item_task_id` int(11) DEFAULT NULL,
  `item_name` text DEFAULT NULL,
  `item_description` longtext DEFAULT NULL,
  `item_quantity` decimal(10,2) NOT NULL,
  `item_price` decimal(20,2) DEFAULT NULL,
  `item_discount_amount` decimal(20,2) DEFAULT NULL,
  `item_order` int(2) NOT NULL DEFAULT 0,
  `item_category` varchar(40) NOT NULL,
  `item_is_recurring` tinyint(1) DEFAULT NULL,
  `item_product_unit` varchar(50) DEFAULT NULL,
  `item_product_unit_id` int(11) DEFAULT NULL,
  `item_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_invoice_items`
--

INSERT INTO `ip_invoice_items` (`item_id`, `invoice_id`, `item_tax_rate_id`, `item_product_id`, `item_date_added`, `item_task_id`, `item_name`, `item_description`, `item_quantity`, `item_price`, `item_discount_amount`, `item_order`, `item_category`, `item_is_recurring`, `item_product_unit`, `item_product_unit_id`, `item_date`) VALUES
(18, 20, 0, 0, '2020-07-06', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, 'Axiom', 1, NULL, NULL, NULL),
(16, 18, 0, NULL, '2020-06-16', NULL, 'Interior detail', '- Exterior decontamination wash.\n- Interior scrub down.', '1.00', '4000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(17, 19, 0, NULL, '2020-06-17', NULL, 'XPEL Ultimate Plus ', '- Decontamination wash.\n- Paint correction.\n- Xpel coverage below windows.\n- Ceramic on roof and PPF', '1.00', '150000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(14, 13, 0, NULL, '2020-06-05', NULL, 'XPEL PPF Installation', 'Xpel ultimate plus\n- decontamination wash\n- paint correction\n- PPF install\n- Ceramic coating on PPF', '1.00', '196000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(15, 14, 0, 0, '2020-06-07', NULL, 'Quick Detail', '- Decontamination wash.\r\n- Paint correction and protection.\r\n- Interior detail.\r\n- Engine bay and boot cleaning.', '10.00', '15000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, NULL),
(389, 254, 0, 0, '0000-00-00', NULL, 'Llumar Platinum PPF', '- High gloss polish.\n- Paint protection film install.\n- Interior steam clean.\n- Ceramic on PPF', '1.00', '229000.00', '0.00', 1, '', NULL, NULL, NULL, NULL),
(20, 21, 0, NULL, '2020-07-18', NULL, 'XPEL:', '- Service and general maintenance.', '1.00', '196000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(21, 21, 0, NULL, '2020-07-18', NULL, 'Clear Plex:', '- Service and general maintenance.', '1.00', '5000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(22, 22, 0, NULL, '2020-07-24', NULL, 'Car maintenace', '- Full car check up and services performed.\n- Interior conditioning.\n- Grill conditioning.', '1.00', '6000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(23, 23, 0, NULL, '2020-08-19', NULL, 'Llumar Platinum ', '- Full car paint correction.\n- Paint protection film install.\nHSN - 39211390', '1.00', '220000.00', '35000.00', 1, '', NULL, NULL, NULL, NULL),
(24, 23, 0, NULL, '2020-08-19', NULL, 'Ceramic coating', '- Leather treatment and ceramic.\n- Ceramic on PPF and IR curing.\nHSN 68062000', '1.00', '25000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(25, 23, 0, NULL, '2020-08-21', NULL, 'Ceramic coating wheels', '- Cleaning of wheels and wheel well.\n- Ceramic coating and curing of wheel well.\nHSN 68062000', '1.00', '10000.00', '5000.00', 3, '', NULL, NULL, NULL, NULL),
(26, 24, 0, NULL, '2020-08-25', NULL, 'Xpel Ultimate Plus (Partial coverage)', '- Detailing and application of Xpel ultimate plus.\n- Coverage on hood, F/B bumpers, front fenders, interior trim, mirrors, lights, B pillar.', '1.00', '67200.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(27, 25, 0, NULL, '2020-08-27', NULL, 'Full coverage PPF', '- Exterior wet sanding and paint correction.\n- Paint protection film install.\n- Interior detail.', '1.00', '93220.40', NULL, 1, '', NULL, NULL, NULL, NULL),
(28, 26, 0, NULL, '2020-09-09', NULL, 'Painting and tinkering', '- Left side body work and painting.\n- Front and rear bumpers painting.\n- Hood re work and painting.', '1.00', '69000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(29, 26, 0, NULL, '2020-09-09', NULL, 'Interior cleaning.', '- Interior carpet removal and cleaning.\n- Interior deep cleaning.\n- Door pad upholstery.', '1.00', '13500.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(30, 27, 1, NULL, '2020-09-21', NULL, 'XPEL 10 paint protection film', '- Decontamination wash and paint correction.\n- XPEL 10 install.\n- Ceramic coating on PPF (complimentary).', '1.00', '550000.00', '99000.00', 1, '', NULL, NULL, NULL, NULL),
(33, 28, 0, NULL, '2020-09-22', NULL, 'XPEL 10', '', '1.00', '466000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(34, 29, 0, NULL, '2020-09-28', NULL, 'Xpel ultimate plus', '- Full car paint correction.\n- Paint protection film install.\n- Ceramic coating on PPF ', '1.00', '100000.00', '8000.00', 1, '', NULL, NULL, NULL, NULL),
(32, 28, 0, NULL, '2020-09-21', NULL, 'AIR 80', '', '1.00', '35000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(35, 29, 0, NULL, '2020-09-28', NULL, 'Heat resistant coating alloys', '- Decontamination wash.\n- Ceramic coating of wheels and callipers.', '1.00', '13000.00', '13000.00', 2, '', NULL, NULL, NULL, NULL),
(36, 29, 0, NULL, '2020-09-28', NULL, 'Interior leather protect.', '- Interior steam cleaning.\n- Leather protective coating application.', '1.00', '10000.00', '10000.00', 3, '', NULL, NULL, NULL, NULL),
(37, 29, 0, NULL, '2020-09-28', NULL, 'Sun film', '- Front WS 70%\n- Sides and rear 20%', '1.00', '24000.00', NULL, 4, '', NULL, NULL, NULL, NULL),
(38, 30, 0, NULL, '2020-09-28', NULL, 'Xpel ultimate plus', '- Full car paint correction.\n- Paint protection film install.\n- Ceramic coating on PPF ', '1.00', '220000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(39, 30, 0, NULL, '2020-09-28', NULL, 'Heat resistant coating alloys', '- Decontamination wash.\n- Ceramic coating of wheels and callipers.', '1.00', '13000.00', '13000.00', 2, '', NULL, NULL, NULL, NULL),
(42, 31, 0, NULL, '2020-09-28', NULL, 'MODESTA Ceramic coating', '- Full car detail and PPF polish.\n- Modesta BC05 application.\n- Interior detail', '1.00', '55000.00', '15000.00', 1, '', NULL, NULL, NULL, NULL),
(41, 30, 0, NULL, '2020-09-28', NULL, 'Sun film', '- Front WS 70%\n- Sides and rear 20%', '1.00', '25000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(43, 32, 0, NULL, '2020-09-28', NULL, 'Xpel Ultimate Plus PPF', '- Full car detail.\n- Full car paint protection film.\n- Ceramic on PPF', '1.00', '100000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(44, 32, 0, NULL, '2020-09-28', NULL, 'Ceramic coating', '- Cleaning and coating for wheel. (Pending)', '1.00', '0.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(45, 33, 0, NULL, '2020-09-29', NULL, 'Painting', '- Bonnet re painting', '1.00', '10000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(46, 34, 0, NULL, '2020-10-03', NULL, 'Xpel Ultimate plus', 'Xpel ultimate plus 20 sq. ft', '1.00', '10000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(47, 35, 0, NULL, '2020-10-05', NULL, 'Xpel ultimate plus', '- Decontamination wash and paint correction.\n- Full car PPF install.\n- Ceramic on PPF', '1.00', '188000.00', '13000.00', 1, '', NULL, NULL, NULL, NULL),
(48, 35, 0, NULL, '2020-10-05', NULL, 'Llumar Platinum series sunfilm', '- Sides and rear protection.', '1.00', '12000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(49, 35, 0, NULL, '2020-10-05', NULL, 'Clear plex by Madico', '- Installation of exterior wind shield protection film', '1.00', '20000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(50, 36, 0, NULL, '2020-10-09', NULL, 'Llumar platinum range', '- Installation of 50% sun film for side and rear.', '1.00', '16000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(51, 37, 0, NULL, '2020-10-13', NULL, 'SG Paint protection film', '', '1.00', '148000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(52, 37, 0, NULL, '2020-10-13', NULL, 'Painting', '- Sanding and primer application.\n- Full chrome delete\n- Calliper primer and paint.\n- All glass window film.', '1.00', '54000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(53, 30, 0, NULL, '2020-10-13', NULL, 'Micro fibre cloths', '- 10 pcs', '10.00', '300.00', NULL, 4, '', NULL, NULL, NULL, NULL),
(54, 38, 0, NULL, '2020-10-13', NULL, 'Avery Dennison Satin black wrap.', '- Disassemble and assembly of parts.\n- Material charges.\n-Installation charges.', '1.00', '145000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(55, 38, 0, NULL, '2020-10-13', NULL, 'Badges and grill chrome delete.', '- Front grill damage repair and paint.\n- Other badges chrome delete.', '1.00', '10000.00', '10000.00', 2, '', NULL, NULL, NULL, NULL),
(56, 39, 0, NULL, '2020-10-13', NULL, 'Llumar Platinum Plus', '- Detailing and paint correction.\n- PPF install.\n- Meguiars ceramic.', '1.00', '76125.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(57, 39, 0, NULL, '2020-10-13', NULL, 'Ceramic coatings.', '- Leather coating.\n- Plastic coating.\n- Glass coating.', '1.00', '0.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(58, 40, 0, NULL, '2020-10-14', NULL, 'Avery Dennison satin black', '- Disassembly and assembly of parts and trims.\n- Material and installation charges.', '1.00', '145000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(59, 40, 0, NULL, '2020-10-14', NULL, 'Badges and grill chrome delete.', '- Front grill damage repair and repaint.\n- Badges chrome delete.', '1.00', '10000.00', '10000.00', 2, '', NULL, NULL, NULL, NULL),
(60, 41, 0, NULL, '2020-10-14', NULL, 'Full car detail.', '- Paint correction.\n- Interior germ clean.\n- Wheel removal and cleaning.\n', '1.00', '15000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(61, 42, 0, NULL, '2020-10-19', NULL, 'Maintenance wash.', '- Exterior foam wash.\n- Interior vacuuming.\n- Engine bay and boot detail.\n- Machine wax application.', '1.00', '2000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(62, 43, 0, NULL, '2020-10-29', NULL, 'Llumar platinum series', '- Paint correction.\n- Llumar platinum series install.\n- Ceramic coating.\n- 3M Interior germ clean.', '1.00', '176000.00', '11000.00', 1, '', NULL, NULL, NULL, NULL),
(63, 43, 0, NULL, '2020-10-29', NULL, 'Inozetek black out', '- Chrome delete.', '1.00', '10000.00', '10000.00', 2, '', NULL, NULL, NULL, NULL),
(64, 43, 0, NULL, '2020-10-29', NULL, 'Llumar Platinum roll ID', '50198616\n50198060', '0.00', '0.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(65, 44, 0, NULL, '2020-11-04', NULL, 'Interior Detail', '- Exterior wash and wax.\n- Interior full detail.\n- Engine bay and boot cleaning.', '1.00', '5000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(66, 45, 0, NULL, '2020-11-04', NULL, 'Llumar Platinum ', '- Paint correction of PPF bits.\n- PPF installation.\n- Ceramic on PPF', '1.00', '97600.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(67, 45, 0, NULL, '2020-11-04', NULL, 'Modesta Ceramic', '- Full car detail.\n- Ceramic coating application ans curing.', '1.00', '35000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(68, 46, 0, NULL, '2020-11-17', NULL, 'Inozetek Lava Orange', '- Inozetek colour change wrap.\n- Interior detail.\n- Disassembly and assembly. ', '1.00', '52000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(69, 47, 0, NULL, '2020-11-20', NULL, 'Paint protection film install.', '- Xpel stealth for exterior grey painted areas.\n- Llumar platinum for roof and gloss black areas.\n- Chrome delete.', '1.00', '100000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(70, 48, 0, NULL, '2020-11-21', NULL, 'Xpel ultimate Plus', '- Detail and PPF application', '1.00', '48000.00', '4000.00', 1, '', NULL, NULL, NULL, NULL),
(71, 48, 0, NULL, '2020-11-21', NULL, 'Ceramic coating 9H', '- Detailing and application', '1.00', '40000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(72, 49, 0, NULL, '2020-11-29', NULL, 'INOZETEK Black out series.', '- Partial black wrap.', '1.00', '41000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(73, 51, 0, NULL, '2020-12-03', NULL, 'Llumar platinum series.', '- Full car detail.\n- Installation of PPF.\n- Ceramic coating.', '1.00', '120000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(74, 51, 0, NULL, '2020-12-03', NULL, 'Sunfilm', '- IR and UV protection sun film.', '1.00', '10000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(75, 51, 0, NULL, '2020-12-03', NULL, 'Inozetek black out series.', '- Roof wrap, spoiler, beadings. ', '1.00', '30250.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(77, 52, 0, NULL, '2020-12-09', NULL, 'STEK Dyno Shield Black', '- Disassembly and assembly of trims.\n- Painting and black out of trims.\n- High gloss burnt orange calliper painting with A8 badging.\n- Stek dyno sheild install.\n- 3m window film install', '1.00', '275000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(78, 53, 0, NULL, '2020-12-11', NULL, 'Full car rejuvenation ', '- De contamination wash.\n- Exterior paint correction.\n- Interior deep cleaning.\n- Paint sealant protection.\n- Engine bay and boot detail.', '1.00', '17500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(79, 54, 0, NULL, '2020-12-17', NULL, 'Llumar platinum PPF', '- Decontamination wash.\n- Exterior polish.\n- Interior detail.\n- PPF application.\n- Ceramic on PPF', '1.00', '210000.00', '15000.00', 1, '', NULL, NULL, NULL, NULL),
(80, 54, 0, NULL, '2020-12-17', NULL, 'Window film', '- Windshield heat rejection 75% VLT Black pearl.\n- Sides and rear heat rejection window film. 70% Llumar platinum range.', '1.00', '30000.00', '3000.00', 2, '', NULL, NULL, NULL, NULL),
(81, 54, 0, NULL, '2020-12-17', NULL, 'Interior trim coating.', '', '1.00', '0.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(82, 55, 0, NULL, '2020-12-17', NULL, 'Interior detail.', '- Exterior foam wash and wax.\n- Interior detail.\n- 3m germ cleaning.', '1.00', '5000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(83, 56, 0, NULL, '2020-12-21', NULL, 'Llumar Platinum Plus PPF.', '- Bespoke detail.\n- Llumar Plat Plus application.\n- Ceramic on PPF.', '1.00', '252000.00', '56000.00', 1, '', NULL, NULL, NULL, NULL),
(84, 56, 0, NULL, '2020-12-21', NULL, 'Surface coatings', '- Leather coating.\n- Wheels coating', '1.00', '0.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(85, 56, 0, NULL, '2020-12-21', NULL, 'Llumar platinum window film.', '- Air 80 wind shield.\n- Platinum 20  Sides and rear', '1.00', '28000.00', '11000.00', 3, '', NULL, NULL, NULL, NULL),
(86, 57, 0, NULL, '2020-12-21', NULL, 'Llumar Platinum PPF', '- Paint correction.\n- PPF install.\n_ ceramic on PPF', '1.00', '100000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(88, 61, 0, NULL, '2020-12-29', NULL, 'Paint protection film Super Guard', '- Full car detailing.\n- Paint protection film install.\n- Ceramic on PPF', '1.00', '45000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(95, 63, 0, NULL, '2021-01-17', NULL, 'LLUMAR Sunfilm', '- Llumar 20% 5%', '1.00', '18000.00', '3000.00', 1, '', NULL, NULL, NULL, NULL),
(93, 62, 0, NULL, '2020-12-29', NULL, 'Stek dyno black PPF', '- PPF install', '1.00', '32550.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(94, 62, 0, NULL, '2020-12-29', NULL, 'Wheel painting', '', '4.00', '4000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(92, 62, 0, NULL, '2020-12-29', NULL, 'Rear bumper repair.', '- Bumper removal.\n- Tinkering and painting.', '1.00', '15000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(96, 63, 0, NULL, '2021-01-17', NULL, 'Badges Painting', '', '1.00', '2500.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(97, 64, 0, NULL, '2021-01-17', NULL, 'Llumar Platinum Protection film', '- Protective film install', '1.00', '170000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(98, 65, 0, NULL, '2021-01-23', NULL, 'Llumar Platinum', '- Decontamination wash.\n- Exterior paint correction.\n- Llumar Platinum PPF.\n- Ceramic on PPF.\n- Interior germ clean.', '1.00', '212000.00', '12000.00', 1, '', NULL, NULL, NULL, NULL),
(99, 66, 0, NULL, '2021-01-23', NULL, 'Llumar Platinum PPF', '- Decontamination wash.\n- Exterior high gloss paint correction.\n- Full car Llumar Platinum PPF install.\n- Interior germ clean.', '1.00', '200000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(100, 67, 0, NULL, '2021-01-24', NULL, 'Exterior Paint correction', '- Decontamination wash.\n- Exterior paint correction.\n- Paint sealant. \n- Engine bay and boot detail.', '1.00', '12000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(101, 68, 0, NULL, '2021-01-24', NULL, 'Xpel Stealth', '- Decontamination wash.\n- Xpel Stealth full car install.\n', '1.00', '235000.00', '15000.00', 1, '', NULL, NULL, NULL, NULL),
(102, 68, 0, NULL, '2021-01-24', NULL, 'Ceramic coating', '- Surface prep and wheel coating.\n- Interior prep and leather coating.', '1.00', '25000.00', '25000.00', 2, '', NULL, NULL, NULL, NULL),
(103, 68, 0, NULL, '2021-01-24', NULL, 'Clear plex', '- Exterior windshield clearplex install.', '1.00', '28000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(104, 69, 0, NULL, '2021-01-25', NULL, 'Stek Shield ', '- Exterior Paint Correction.\n- PPF install.\n-Interior detail.\n-Ceramic on PPF.', '1.00', '150000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(105, 70, 0, NULL, '2021-01-25', NULL, 'PPF install', '', '1.00', '65000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(106, 71, 0, NULL, '2021-01-31', NULL, 'Paint sealant and interior detail', '- Decontamination wash.\n- Paint correction.\n- Interior germ clean.', '1.00', '17000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(107, 72, 0, NULL, '2021-02-04', NULL, 'Maintenance wash', '- Exterior foam wash.\n- Interior Vacuuming.\n- Engine bay and boot cleaning.\n- 3m Show car paste wax', '1.00', '1500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(108, 74, 0, NULL, '2021-02-06', NULL, 'Interior germ cleaning', '- Interior 3M germ cleaning.\n- Foam wash.\n- Engine bay and boot detail.', '1.00', '4000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(109, 75, 0, NULL, '2021-02-24', NULL, 'STEK Dyno Shield ', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '230000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(110, 75, 0, NULL, '2021-02-24', NULL, 'Llumar sun film', '- Windshield 70%.\n- Sides and rear 35% and 5%', '1.00', '27000.00', '4000.00', 2, '', NULL, NULL, NULL, NULL),
(111, 75, 0, NULL, '2021-02-24', NULL, 'Chrome delete.', '- Grill painting', '1.00', '4000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(112, 76, 0, NULL, '2021-02-24', NULL, 'Tinkering and painting', '- 4 doors, 2 bumpers, right rear fender, running board', '1.00', '63000.00', '10000.00', 1, '', NULL, NULL, NULL, NULL),
(113, 76, 0, NULL, '2021-02-24', NULL, 'Stek Shield effect', '- High gloss paint correction.\n- PPF install full car.\n- Ceramic on PPf\n5 year warranty', '1.00', '180000.00', '20000.00', 2, '', NULL, NULL, NULL, NULL),
(114, 77, 0, NULL, '2021-02-26', NULL, 'Tinkering and painting', '- Damage repair and painting for the front bumper.', '1.00', '8000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(115, 77, 0, NULL, '2021-02-26', NULL, 'Xpel ultimate plus PPF', '- Paint correction and PPF for front and rear bumper.', '1.00', '37600.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(116, 78, 0, NULL, '2021-03-05', NULL, 'PPF replacement.', '- Front bumper half PPF replacement', '1.00', '10800.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(117, 80, 0, NULL, '2021-03-09', NULL, 'LLUMAR window film install', '- Front windshield Air 80.\n- Sides and rear 50%', '1.00', '30000.00', '5000.00', 1, '', NULL, NULL, NULL, NULL),
(118, 81, 0, NULL, '2021-03-09', NULL, 'Super guard PPF', '- Coverage for hood, front bumper, roof, front fenders, mirror, handle cups and headlights', '1.00', '42500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(119, 81, 0, NULL, '2021-03-09', NULL, 'Super cool sun film', '- All round 70% VLT', '1.00', '13000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(120, 82, 0, NULL, '2021-03-09', NULL, 'Stek Shield Effect', '- Detail and ppf for bumpers, headlights, mirror.', '1.00', '37000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(121, 83, 0, NULL, '2021-03-12', NULL, 'Stek Shield Effect and window film', '- Decontamination wash.\n- Paint correction.\n- Full car paint protection film.\n- Window film installation.', '1.00', '143000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(122, 84, 0, NULL, '2021-03-15', NULL, 'Super guard Pro series', '- Full car paint correction.\n- Full car ppf install.\n- Interior detail.\n- Exterior ceramic.\n', '1.00', '145000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(123, 84, 0, NULL, '2021-03-15', NULL, 'Chrome delete', '- Window trim black out. FOC', '1.00', '0.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(124, 85, 0, NULL, '2021-03-16', NULL, 'Full car detail', '- Exterior paint correction and paint sealant.\n- Interior detail.\n- Engine bay and boot detail.\n- Wheel basic cleaning.', '1.00', '15000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(125, 86, 0, NULL, '2021-03-22', NULL, 'Super guard S', '- Decontamination wash and paint correction.\n- Full car ppf install.\n- Ceramic on ppf', '1.00', '115000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(126, 87, 0, NULL, '2021-03-24', NULL, 'Exterior paint correction', '- Decontamination wash.\n- Exterior paint correction.\n- Paint sealant', '1.00', '10000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(127, 89, 0, NULL, '2021-03-24', NULL, 'Exterior detail and interior basic detail', '- Decontamination wash.\n- Paint correction.\n- Paint sealant.\n- Interior basic detail', '1.00', '15000.00', '5000.00', 1, '', NULL, NULL, NULL, NULL),
(128, 90, 0, NULL, '2021-03-25', NULL, '3m window film ', '- Sun film installation for all glasses', '1.00', '18000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(129, 92, 0, NULL, '2021-03-28', NULL, 'Exterior wash and interior detail.', '- Exterior wash, clay bar, wax.\n- Interior detail.', '1.00', '6000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(130, 91, 0, NULL, '2021-03-28', NULL, 'Painting', '- Painting of 3 panels.', '1.00', '25000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(131, 91, 0, NULL, '2021-03-28', NULL, 'Paint protection film install', '- Full front coverage.', '1.00', '30000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(132, 93, 0, NULL, '2021-03-31', NULL, 'Sun film', '- CR 70 x 2\n- Llumar platinum 35%', '1.00', '25000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(133, 93, 0, NULL, '2021-03-31', NULL, 'Llumar PPF platinum range', '- Full frontal coverage', '1.00', '54000.00', '4000.00', 2, '', NULL, NULL, NULL, NULL),
(134, 94, 0, NULL, '2021-03-31', NULL, 'Maintenance and service. ', '', '1.00', '278000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(158, 107, 0, NULL, '2021-06-23', NULL, 'CLEAR PLEX Windshield protection ', '67 sft. 4 ft roll', '1.00', '39530.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(159, 108, 0, NULL, '2021-06-23', NULL, 'Body work and painting.', '- Exterior full car dent removal and tinkering.\n- Full body re paint.\n- Level 4 paint correction.', '1.00', '130000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(137, 95, 0, NULL, '2021-03-31', NULL, 'Stek Dyno Shield ', '- Paint correction.\n- PPF install.\n- Ceramic on PPF. ', '1.00', '190000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(138, 96, 0, NULL, '2021-04-04', NULL, 'SUPER GUARD', '- Door handle removal.\n- PPF removal and gum removal.\n- PPF install.\n- Ceramic on PPF', '1.00', '7200.00', '1700.00', 1, '', NULL, NULL, NULL, NULL),
(139, 97, 0, NULL, '2021-04-08', NULL, 'Interior Deep Clean + AC Germ clean', '-Interior scrub cleaning\n-Full exterior wash\n-AC germ kill\n-Engine bay cleaning\n-Boot cleaning', '1.00', '4000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(140, 97, 0, NULL, '2021-04-08', NULL, 'Machine Wax Application', 'Full car exterior wax polishing', '1.00', '2000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(141, 98, 0, NULL, '2021-04-15', NULL, 'Super guard PPF', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '90000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(142, 99, 0, NULL, '2021-04-15', NULL, 'Headliner replacement ', '- Roof liner removal and replacement.', '1.00', '32000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(143, 100, 0, NULL, '2021-04-21', NULL, 'Ceramic coating', '- Exterior decontamination wash.\n- Paint correction.\n- Ceramic coating on paint.\n- Interior detail.', '1.00', '45000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(144, 100, 0, NULL, '2021-04-21', NULL, 'Heat rejection sunfilm', '- 20% Heat rejection sun film.', '1.00', '25000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(145, 101, 0, NULL, '2021-04-22', NULL, 'Stek Dyno Sheild', '- Full car paint correction.\n- PPF install.\n- Interior detail.', '1.00', '272000.00', '22000.00', 1, '', NULL, NULL, NULL, NULL),
(146, 101, 0, NULL, '2021-04-22', NULL, 'Heat rejection window film', '- W/S and front windows 70%.\n- Rear glass 15%', '1.00', '24000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(147, 102, 0, NULL, '2021-05-03', NULL, 'STEK Dyno Shield', '- Paint correction.\n- PPF Install.\n- Ceramic on PPF', '1.00', '120000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(156, 106, 0, NULL, '2021-06-18', NULL, 'Ceramic coating', '- Exterior decontamination wash.\n- Paint correction.\n- Ceramic coating on paint.\n- Interior detail.', '1.00', '45000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(157, 106, 0, NULL, '2021-06-18', NULL, 'Heat rejection sunfilm', '- 20% Heat rejection sun film.', '1.00', '25000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(151, 103, 0, NULL, '2021-05-03', NULL, 'TPH car cover', '', '1.00', '22000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(152, 103, 0, NULL, '2021-05-03', NULL, 'Micro fibre cloth (L) 350 gsm', '', '3.00', '150.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(153, 104, 0, NULL, '2021-05-08', NULL, 'Bumper repaint', '', '1.00', '6000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(154, 104, 0, NULL, '2021-05-08', NULL, 'Llumar Platinum ', '- Decontamination wash.\n- PPF install.\n- Ceramic on PPF.\n- Interior sanitisation. ', '1.00', '200000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(155, 105, 0, NULL, '2021-05-08', NULL, 'Llumar Platinum PPF (Top end)', '- Decontamination wash and high gloss paint correction.\n- PPF install.\n- Ceramic on PPF.\n- Interior germ clean.', '1.00', '220000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(160, 109, 0, NULL, '2021-06-29', NULL, 'Top end heat rejection sunfilm', '- Front windshield 70%.\n- Front side windows 35%\n- Rear window and rear glass 20%', '1.00', '25000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(161, 110, 0, NULL, '2021-07-01', NULL, 'Window film', '- Super cool windshield 70%\n- Llumar side windows 20%', '1.00', '33000.00', '5000.00', 1, '', NULL, NULL, NULL, NULL),
(162, 110, 0, NULL, '2021-07-01', NULL, 'Llumar platinum range PPF', '- Full car pre cut install.\n- Roof single piece 72 inch ', '1.00', '250000.00', '25000.00', 2, '', NULL, NULL, NULL, NULL),
(163, 111, 0, NULL, '2021-07-06', NULL, 'Body shop', '- Exterior tinkering and body work.\n- Full body re paint.\n- level 4 paint correction.', '1.00', '160000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(164, 112, 0, NULL, '2021-07-12', NULL, 'Llumar platinum PPF ', '- Paint correction.\n- PPF install.\n- Ceramic on PPF\n', '1.00', '170000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(165, 112, 0, NULL, '2021-07-12', NULL, 'Ceramic coating for wheels', '- Surface prep and ceramic coating application.', '1.00', '15000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(166, 114, 0, NULL, '2021-07-21', NULL, 'Llumar platinum PPF', '- Paint correction. \n- PPF install.\n- Ceramic on PPF.', '1.00', '220000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(167, 114, 0, NULL, '2021-07-21', NULL, 'Speed chime removal', '- 80 and 120 kmph chime removal.\n- Life time warranty.', '1.00', '15000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(168, 114, 0, NULL, '2021-07-21', NULL, 'Window film Llumar', '- Air 80.\n- Steel 20 and steel 5', '1.00', '30000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(169, 115, 0, NULL, '2021-08-01', NULL, 'Maintenance wash', '- Exterior foam wash and wax application.\n- Interior vacuuming.\n- Engine bay and boot cleaning.', '1.00', '1300.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(170, 116, 0, NULL, '2021-08-01', NULL, 'Satin PPF', '- Decontamination wash.\n- 1 step polish.\n- Parts removal.\n- PPF install', '1.00', '250000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(171, 116, 0, NULL, '2021-08-01', NULL, 'Chrome delete', '- Removal and sanding of chrome.\n- Painting parts to gloss black', '1.00', '50000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(172, 116, 0, NULL, '2021-08-01', NULL, 'Window film install', 'Sun film for all glasses', '1.00', '30000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(173, 117, 0, NULL, '2021-08-06', NULL, 'Repair and painting', '- Front bumper, back bumper, roof, boot repair and repaint.\n- Grills x 4 to black ', '1.00', '60000.00', '10000.00', 1, '', NULL, NULL, NULL, NULL),
(174, 117, 0, NULL, '2021-08-06', NULL, 'Llumar PPF', '- Paint correction and PPF install of Llumar', '1.00', '168000.00', '23000.00', 2, '', NULL, NULL, NULL, NULL),
(175, 118, 0, NULL, '2021-08-11', NULL, 'Llumar Platinum', '', '1.00', '212000.00', '12000.00', 1, '', NULL, NULL, NULL, NULL),
(176, 118, 0, NULL, '2021-08-11', NULL, 'Modesta LPS', '', '1.00', '24000.00', '4000.00', 2, '', NULL, NULL, NULL, NULL),
(177, 119, 0, NULL, '2021-08-17', NULL, '3M window film', 'Sides and rear 35% and 20% VLT', '1.00', '5000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(178, 119, 0, NULL, '2021-08-17', NULL, 'Llumar Air 80', '', '1.00', '12000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(179, 120, 0, NULL, '2021-08-19', NULL, 'Super guard Pro series', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '180000.00', '18000.00', 1, '', NULL, NULL, NULL, NULL),
(180, 121, 0, NULL, '2021-08-21', NULL, 'Paint sealant', '- Decontamination wash.\n- Paint correction.\n- Paint sealant.\n\n', '1.00', '8500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(181, 122, 0, NULL, '2021-08-29', NULL, 'Rear boot tinkering and painting', '', '1.00', '22000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(182, 123, 0, NULL, '2021-09-08', NULL, 'Stek Dyno Shield', '- Paint correction.\n- PPF install.\n- Ceramic coating on PPF', '1.00', '220000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(183, 124, 0, NULL, '2021-09-08', NULL, 'Llumar Platinum', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on PPF', '1.00', '230000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(184, 124, 0, NULL, '2021-09-08', NULL, 'Window film', '- Sides and rear 15%\n- Front 70%', '1.00', '30000.00', '15000.00', 2, '', NULL, NULL, NULL, NULL),
(185, 125, 0, NULL, '2021-09-11', NULL, 'Front bumper repair.', '- Removal, repair and install of front bumper.', '1.00', '3000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(186, 125, 0, NULL, '2021-09-11', NULL, 'Premium wash.', '- Exterior foam wash.\n- Interior vacuuming.\n- Engine bay and boot cleaning.', '1.00', '1000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(187, 126, 0, NULL, '2021-09-14', NULL, 'Chrome delete.', '- Trim removal.\n- Painting of chrome trims to satin black.', '1.00', '33000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(189, 130, 0, NULL, '2021-09-14', NULL, 'Paint protection film install.', 'Hood, left rear fender, side skirts, black trims PPF coverage.', '1.00', '70000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(192, 132, 0, NULL, '2021-09-22', NULL, 'SUPER GUARD PRO PPF', '- Paint correction.\n- PPF install.\n- Trim removal and assembly.\n- Ceramic coating on PPF', '1.00', '200000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(193, 132, 0, NULL, '2021-09-22', NULL, 'Sun film', '- Windshield 75%\n- Sides and rear 15%', '1.00', '28000.00', '8000.00', 2, '', NULL, NULL, NULL, NULL),
(194, 132, 0, NULL, '2021-09-22', NULL, 'Speed chime removal', '- Warranty for removal of speed chime at 80 kmph to 120kmph', '1.00', '15000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(195, 133, 0, NULL, '2021-09-23', NULL, 'Paint protection film install', '- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.\n- Interior germ cleaning.', '1.00', '216000.00', '19000.00', 1, '', NULL, NULL, NULL, NULL),
(196, 133, 0, NULL, '2021-09-23', NULL, 'Speed chime removal', '- Removal of speed chime.\n- Life time warranty on speed chime.', '1.00', '15000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(197, 133, 0, NULL, '2021-09-23', NULL, 'Painting services.', '- Front bumper scratch repair and repaint.\n- Muffler painted in heat resistant satin black.', '1.00', '10000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(198, 133, 0, NULL, '2021-09-23', NULL, 'Heat rejection window film.', '- Windshield heat and glare reduction film', '1.00', '8500.00', '3500.00', 4, '', NULL, NULL, NULL, NULL),
(199, 134, 0, NULL, '2021-09-23', NULL, 'PPF install super guard pro.', '- Full car paint correction and PPF install.\n- Ceramic coating on PPF.', '1.00', '35000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(200, 135, 0, NULL, '2021-09-25', NULL, 'Sun film', '- Roof window film 15%\n- UV IR and heat rejection.', '1.00', '7500.00', '2500.00', 1, '', NULL, NULL, NULL, NULL),
(201, 136, 0, NULL, '2021-09-29', NULL, 'Premium wash', '- Exterior foam wash.\n- Int Vacuuming.\n- Engine bay and boot basic clean up.\n- Tyre shine', '1.00', '800.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(202, 137, 0, NULL, '2021-10-07', NULL, 'Body work and repaint', '- Dent removal.\n- beading replacement.\n- Bumper repair.\n- Full body repaint.', '1.00', '100000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(203, 138, 0, NULL, '2021-10-07', NULL, 'Exterior and interior detail', '- Decontamination wash.\n- Paint correction.\n- Paint sealant.\n- Interior germ cleaning.', '1.00', '14000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(204, 139, 0, NULL, '2021-10-07', NULL, 'Super guard Pro', '- Paint correction.\n- PPF install.\n- Ceramic coating on ppf.\n- Interior germ cleaning.', '1.00', '166000.00', '21500.00', 1, '', NULL, NULL, NULL, NULL),
(205, 140, 0, NULL, '2021-10-09', NULL, 'Llumar Platinum PPF', '- Door handle removal.\n- 2 doors PPF application.', '1.00', '20000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(206, 141, 0, NULL, '2021-10-14', NULL, 'Llumar Platinum top end PPF', '- Decontamination wash.\n- Paint correction.\n- Interior germ cleaning.\n- Ceramic coating on PPF', '1.00', '230000.00', '15000.00', 1, '', NULL, NULL, NULL, NULL),
(207, 142, 0, NULL, '2021-10-19', NULL, 'Ceramic coating.', '- Exterior paint correction.\n- Interior detail.\n- Ceramic coating application.', '1.00', '45000.00', '10000.00', 1, '', NULL, NULL, NULL, NULL),
(208, 142, 0, NULL, '2021-10-19', NULL, 'Repainting and chrome delete.', '- Left rear wheel arch painting.\n- Badges and grill painting to black.', '1.00', '14000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(209, 143, 0, NULL, '2021-10-21', NULL, 'Llumar air 80', '- wind shield films for S and X7', '2.00', '12000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(210, 143, 0, NULL, '2021-10-21', NULL, 'Llumar steel 20', 'BMW X7 sides and rear steel 20', '1.00', '20000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(211, 143, 0, NULL, '2021-10-21', NULL, 'Sunfilm removal.', '- Removal of sunfilm.\n- Adhesive remover.', '1.00', '0.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(212, 144, 0, NULL, '2021-10-24', NULL, 'Llumar platinum PPF', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.\n- Interior germ cleaning.', '1.00', '230000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(213, 144, 0, NULL, '2021-10-24', NULL, 'Pre cut interior PPF', '- Application of computer cut PPF for interior ', '1.00', '25000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(214, 144, 0, NULL, '2021-10-24', NULL, 'Windshield protection film by stek', '- Edge to edge application of exterior windshield protection.', '1.00', '25000.00', '7000.00', 3, '', NULL, NULL, NULL, NULL),
(215, 144, 0, NULL, '2021-10-24', NULL, 'Heat rejection window film by Llumar', '- Windshield 70% VLT.\n- Sides and rear 20% or 40% VLT', '1.00', '30000.00', '5000.00', 4, '', NULL, NULL, NULL, NULL),
(216, 144, 0, NULL, '2021-10-24', NULL, 'Speed chime removal', '- Removal of speed chime with life time warranty', '1.00', '15000.00', '3000.00', 5, '', NULL, NULL, NULL, NULL),
(217, 145, 0, NULL, '2021-10-26', NULL, 'Super guard S+', '- Paint correction.\n- PPF install.\n- Ceramic coating on PPF', '1.00', '180000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(218, 145, 0, NULL, '2021-10-26', NULL, 'Sun film install', '', '1.00', '30000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(219, 146, 0, NULL, '2021-11-06', NULL, 'Super cool window film', 'Sides and back window film.', '1.00', '25000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(220, 147, 0, NULL, '2021-11-16', NULL, 'Llumar platinum PPF', '- Paint correction.\n- PPF install.\n- Ceramic coating.', '1.00', '200000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(221, 147, 0, NULL, '2021-11-16', NULL, 'Painting works', '- Skoda front bumper and rear bumper.\n- Badges and chrome delete.\n- BMW front bumper repair and paint', '1.00', '38000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(222, 147, 0, NULL, '2021-11-16', NULL, 'Llumar 45% sunfilm', '- Sides and rear BMW x5', '1.00', '24000.00', '4000.00', 3, '', NULL, NULL, NULL, NULL),
(223, 147, 0, NULL, '2021-11-23', NULL, 'BMW X5 PPF', '- front and rear bumper coverage', '1.00', '48000.00', '4000.00', 4, '', NULL, NULL, NULL, NULL),
(224, 148, 0, NULL, '2021-12-14', NULL, 'Super guard PPF', '- Paint correction.\n- Disassembly of trims.\n- PPF install.\n- Ceramic coating on PPF', '1.00', '195000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(225, 149, 0, NULL, '2021-12-15', NULL, 'Exterior Paint correction', '- Decontamination wash.\n- 3 stage paint correction.\n- Paint sealant protection.\n', '1.00', '12000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(226, 149, 0, NULL, '2021-12-15', NULL, 'Interior deep cleaning', '- Steam and dry foam anti bacterial cleaning.', '1.00', '5000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(227, 149, 0, NULL, '2021-12-15', NULL, 'Grill painting', '- Grill painted to high gloss black', '1.00', '7000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(228, 149, 0, NULL, '2021-12-15', NULL, 'Number plate', '', '1.00', '1500.00', NULL, 4, '', NULL, NULL, NULL, NULL),
(229, 150, 0, NULL, '2021-12-21', NULL, 'Super guard PPF', '- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.\n- Interior disinfection.', '1.00', '130000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(230, 150, 0, NULL, '2021-12-21', NULL, 'Super cool Window film', '- Heat rejection film for all glasses.', '1.00', '20000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(231, 151, 0, NULL, '2021-12-21', NULL, 'Hood clear coat.', '- Multiple layers of clear coat application.\n- Sanding and polishing of hood.', '1.00', '20000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(232, 152, 0, NULL, '2021-12-26', NULL, 'Foam wash and bumper fitment', '- Foam wash and vacuuming.\n- front lower bumper fitment.', '1.00', '2000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(233, 153, 0, NULL, '2021-12-28', NULL, 'Llumar PPF', '- Paint correction.\n- PPF install.\n- Ceramic on PPF.\n- Interior germ clean.', '1.00', '210000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(234, 154, 0, NULL, '2022-01-27', NULL, 'Dent repair and painting ', 'Painting of 6 panels + door handles and mirrors.', '1.00', '88000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(235, 154, 0, NULL, '2022-01-27', NULL, 'Window film install', '- Llumar platinum 20% window film.', '1.00', '20000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(236, 154, 0, NULL, '2022-01-27', NULL, 'Wrap and gumming removal.', '- Disassembly and assembly of trims for wrap removal', '1.00', '27000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(237, 155, 0, NULL, '2022-01-27', NULL, 'GSWF coloured PPF', '- single stage paint correction.\n- Disassembly and assembly trims.\n- Coloured PPF installation.\n', '1.00', '230000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(238, 155, 0, NULL, '2022-01-27', NULL, 'Paint job', '- Wheels high gloss black paint.\n- Removal of rear diffuser and painting. ', '1.00', '60000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(239, 156, 0, NULL, '2022-01-27', NULL, 'Llumar Platinum', '- Paint correction.\n- PPF install.\n- Ceramic on PPF.\n', '1.00', '180000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(240, 157, 0, NULL, '2022-02-08', NULL, 'Llumar platinum PPF', '- Front bumper, door and fender ppf replacement.\n', '1.00', '22000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(241, 157, 0, NULL, '2022-02-08', NULL, 'Exterior wash and interior germ cleaning.', '- Exterior wash and wax.\n- Interior anti bacterial foam cleaning.', '1.00', '4000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(242, 158, 0, NULL, '2022-02-09', NULL, 'Paint and body work.', '- Hood, bumper and boot paint job.\n- Wash and maintenance.', '1.00', '30000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(243, 159, 0, NULL, '2022-02-10', NULL, 'Super guard Pro', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on ppf.\n- ', '1.00', '160000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(244, 159, 0, NULL, '2022-02-10', NULL, 'Super cool 70 VLT window film', '- All glasses window film install.', '1.00', '30000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(245, 160, 0, NULL, '2022-02-15', NULL, 'Window film install', '- Foam wash.\n- Llumar air 80 install.\n- Interior wipe down.', '1.00', '12000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(246, 162, 0, NULL, '2022-02-22', NULL, 'Body repair and painting', '- Repairing dent and scratches.\n- Paint job.\n- Basic service.', '1.00', '100000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(247, 163, 0, NULL, '2022-02-23', NULL, 'Repair and painting', '- Front bumper and grill.\n- Left front door.', '1.00', '33000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(248, 163, 0, NULL, '2022-02-23', NULL, 'Interior and exterior detailing', '', '1.00', '15000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(249, 164, 0, NULL, '2022-02-23', NULL, 'Llumar sunfilm', '- Front windshield air 80%.\n- Sides and rear 35% and 20%. ', '1.00', '0.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(250, 165, 0, NULL, '2022-02-23', NULL, 'LLUMAR air series', '- Removal of existing sunfilm.\n- Application of air series 20% sunfilm.', '1.00', '30000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(251, 166, 0, NULL, '2022-02-27', NULL, 'Llumar Air 80', '- Windshield sunfilm install', '1.00', '12000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(252, 167, 0, NULL, '2022-02-27', NULL, 'Wash and machine wax', '- Exterior foam wash.\n- Interior vacuuming.\n- Machine wax application.', '1.00', '2500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(253, 168, 0, NULL, '2022-03-03', NULL, 'Interior deep cleaning.', '- Exterior foam wash.\n- Machine wax application.\n- Interior deep cleaning.', '1.00', '6500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(254, 169, 0, NULL, '2022-03-08', NULL, 'Rear bumper PPF replacement', '', '1.00', '18000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(255, 169, 0, NULL, '2022-03-08', NULL, 'Wash and maintenance', '', '1.00', '1000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(256, 170, 0, NULL, '2022-03-11', NULL, 'Paint protection film install', '- Decontamination wash.\n- Paint correction.\n- Trim removal and assembly.\n- Ceramic coating on PPF', '1.00', '170000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(257, 170, 0, NULL, '2022-03-11', NULL, 'Paint job', '- Front and rear repair and painting.', '1.00', '20000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(258, 171, 0, NULL, '2022-03-15', NULL, 'Exterior PPF coverage', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on PPF', '1.00', '70000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(259, 171, 0, NULL, '2022-03-15', NULL, 'Speed chime removal.', '- Removal of speed chime between 80 to 120kmph.', '1.00', '10000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(260, 172, 0, NULL, '2022-03-16', NULL, 'LLUMAR STEEL 50%', '- Decontamination wash.\n- Sun film installation.\n- Basic interior wipe down', '1.00', '17000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(261, 173, 0, NULL, '2022-03-17', NULL, 'Llumar Valor', '- Paint correction.\n- PPF install.\n- Ceramic coating on PPF', '1.00', '245000.00', '45000.00', 1, '', NULL, NULL, NULL, NULL),
(262, 173, 0, NULL, '2022-03-17', NULL, 'Painting', '- Painting of all chrome bits.', '1.00', '18000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(263, 173, 0, NULL, '2022-03-17', NULL, '70% VLT window film', '- Heat rejection window film for all glasses except roof.', '1.00', '28000.00', '8000.00', 3, '', NULL, NULL, NULL, NULL),
(264, 175, 0, NULL, '2022-03-25', NULL, 'PPF install', '- Paint correction.\n- PPF install ceramic coating on PPF.', '1.00', '115000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(265, 175, 0, NULL, '2022-03-25', NULL, 'Chrome delete', '- Exhaust tips, grill, badges, handles, fuel cap, headlight and tail light surrounds in black.', '1.00', '0.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(266, 175, 0, NULL, '2022-03-25', NULL, 'Window film', '- Heat rejection window film all round.', '1.00', '0.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(267, 174, 0, NULL, '2022-03-25', NULL, 'Heat rejection WF', '- Windshield 70% VLT super cool ', '1.00', '6500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(268, 176, 0, NULL, '2022-03-30', NULL, 'Llumar air series', '- Llumar air 80 install.', '1.00', '12500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(269, 177, 0, NULL, '2022-04-04', NULL, 'Llumar Platinum PPF', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.', '1.00', '220000.00', '57950.00', 1, '', NULL, NULL, NULL, NULL),
(270, 178, 0, NULL, '2022-04-04', NULL, 'Full car PPF', '- Decontamination wash.\n- Paint correction.\n- Trim removal and assembly\n- PPF install.\n- Ceramic coating on PPF.\n- Interior deep cleaning.', '1.00', '180000.00', '40000.00', 1, '', NULL, NULL, NULL, NULL),
(271, 179, 0, NULL, '2022-04-10', NULL, 'Xpel stealth', '- PPF for front and back bumpers.\n', '1.00', '42500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(272, 179, 0, NULL, '2022-04-10', NULL, 'Car cover', '- Water proof, dust proof and heat proof cover.', '1.00', '30000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(273, 180, 0, NULL, '2022-04-10', NULL, 'Llumra sunfilm', '- Windshield Air 80.\n- Sides and rear 35% and 20%', '1.00', '32000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(274, 181, 0, NULL, '2022-04-10', NULL, 'Paint protection film install SG Pro', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.', '1.00', '140000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(275, 182, 0, NULL, '2022-04-15', NULL, 'Llumar Platinum PPF', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic on PPF.', '1.00', '100000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(276, 183, 0, NULL, '2022-04-20', NULL, 'Llumar Platinum', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic on PPF.', '1.00', '220000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(277, 184, 0, NULL, '2022-04-27', NULL, 'Paint protection film ', '- Exterior paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '120000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(278, 186, 0, NULL, '2022-05-07', NULL, 'Full car detail', '- Decontamination wash.\n- Paint correction.\n- Interior deep cleaning.\n- Paint sealant.\n- PPF on top chrome.', '1.00', '18000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(279, 187, 0, NULL, '2022-05-09', NULL, 'Bumper PPF replacement', '- Remove and replacement of damaged PPF.', '1.00', '33000.00', '5000.00', 1, '', NULL, NULL, NULL, NULL),
(280, 188, 0, NULL, '2022-05-10', NULL, 'Llumar Platinum PPF', '', '1.00', '180000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(281, 189, 0, NULL, '2022-05-12', NULL, 'Paint protection film', '- Paint correction.\n- PPF install.\n- Ceramic on PPF.', '1.00', '180000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(282, 189, 0, NULL, '2022-05-12', NULL, 'Chrome delete', '- Grill painting.\n- Tail light chrome.\n- Exhaust tips.', '1.00', '12000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(283, 189, 0, NULL, '2022-05-12', NULL, 'Window film install', '- Llumar 50% and 5%.\n- Windshield 70%', '1.00', '25000.00', NULL, 3, '', NULL, NULL, NULL, NULL),
(284, 190, 0, NULL, '2022-05-12', NULL, 'LLUMAR sunfilm', '- Wind shield 70%\n- Sides and rear 20%', '1.00', '20000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(285, 191, 0, NULL, '2022-05-21', NULL, 'Llumar sunfilm', '- 70% and 20% \n', '1.00', '20000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(286, 191, 0, NULL, '2022-05-21', NULL, 'TPH covers', '', '1.00', '40000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(287, 193, 0, NULL, '2022-05-22', NULL, 'Super guard', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '106000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(288, 194, 0, NULL, '2022-05-23', NULL, 'Interior deep cleaning', '- Exterior foam wash.\n- Interior scrub down and germ cleaning.', '1.00', '4500.00', '500.00', 1, '', NULL, NULL, NULL, NULL),
(289, 195, 0, NULL, '2022-05-25', NULL, 'Ceramic coating.', '- Exterior paint correction.\n- Interior detail.\n- Ceramic coating application.', '1.00', '45000.00', '10000.00', 1, '', NULL, NULL, NULL, NULL),
(290, 195, 0, NULL, '2022-05-25', NULL, 'Repainting and chrome delete.', '- Left rear wheel arch painting.\n- Badges and grill painting to black.', '1.00', '14000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(291, 196, 0, NULL, '2022-06-01', NULL, 'Paint Protection Film', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.', '1.00', '185000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(292, 196, 0, NULL, '2022-06-01', NULL, 'Llumar sun control ', '', '1.00', '30000.00', '4000.00', 2, '', NULL, NULL, NULL, NULL),
(293, 197, 0, NULL, '2022-06-03', NULL, 'Clear film protection', '- Surface prep.\n- Film Application.\n- Ceramic coating on film', '1.00', '135000.00', '35000.00', 1, '', NULL, NULL, NULL, NULL),
(294, 197, 0, NULL, '2022-06-03', NULL, 'Heat rejection film', '- Application of film on glass.', '1.00', '25000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(295, 198, 0, NULL, '2022-06-04', NULL, 'PPF install', '- PPF install on bumpers.', '1.00', '26000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(296, 198, 0, NULL, '2022-06-04', NULL, 'Ceramic coating', '- Full car paint correction.\n- Ceramic coating application.', '1.00', '35000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(297, 199, 0, NULL, '2022-06-04', NULL, 'Heat rejection window film install.', '- Sun film application for windshield, sides, rear and sun roof.', '1.00', '35000.00', '5000.00', 1, '', NULL, NULL, NULL, NULL),
(298, 200, 0, NULL, '2022-06-10', NULL, 'Front bumper Painting and PPF', '- Front bumper repair.\n- Primer and painting.\n- Llumar platinum PPF.', '1.00', '32000.00', NULL, 1, 'suman', NULL, NULL, NULL, NULL),
(299, 201, 0, NULL, '2022-06-11', NULL, 'Llumar tint install', '- Removal of old tints and adhesive.\n- Door pads removed.\n- Llumar steel 5% installed.', '1.00', '6000.00', NULL, 1, '', NULL, NULL, NULL, NULL);
INSERT INTO `ip_invoice_items` (`item_id`, `invoice_id`, `item_tax_rate_id`, `item_product_id`, `item_date_added`, `item_task_id`, `item_name`, `item_description`, `item_quantity`, `item_price`, `item_discount_amount`, `item_order`, `item_category`, `item_is_recurring`, `item_product_unit`, `item_product_unit_id`, `item_date`) VALUES
(300, 202, 0, NULL, '2022-06-15', NULL, 'PPF removal and application', '', '1.00', '5460.00', NULL, 1, 'suman', NULL, NULL, NULL, NULL),
(301, 203, 0, NULL, '2022-06-15', NULL, 'Paint correction and sealant', '- Decontamination wash.\n- Paint correction.\n- Paint sealant.\n- Interior vacuuming.', '1.00', '10000.00', '1500.00', 1, '', NULL, NULL, NULL, NULL),
(302, 204, 0, NULL, '2022-06-16', NULL, 'Super guard', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic on PPF.', '1.00', '130000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(303, 204, 0, NULL, '2022-06-16', NULL, 'Painting and stripes.', '- Removal of trims.\n- Badges black out.\n- Grill yellow paint.\n- Hood stripe in black PPF.\n- Side decals.', '1.00', '16000.00', '4000.00', 2, '', NULL, NULL, NULL, NULL),
(304, 204, 0, NULL, '2022-06-16', NULL, 'Sunfilm Install', '- All glasses heat rejection window film install.\n70% VLT. 54% Heat rejection. 24% Glare reduction. ', '1.00', '25000.00', '5000.00', 3, '', NULL, NULL, NULL, NULL),
(305, 205, 0, NULL, '2022-06-21', NULL, 'Llumar PPF install', '- PPF replacement for rear bumper and tail light.', '1.00', '20000.00', NULL, 1, 'Axiom', NULL, NULL, NULL, NULL),
(306, 206, 0, NULL, '2022-06-24', NULL, 'Super guard', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '180000.00', '30000.00', 1, '', NULL, NULL, NULL, NULL),
(307, 206, 0, NULL, '2022-06-24', NULL, 'BMW coding', '- Key start/stop.\n- 80 to 120 speed chime.\n- Blinker 5secs.\n- DSP activation.\n- Drive modes activation.\n- Stop/Start memory', '1.00', '20000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(308, 206, 0, NULL, '2022-06-24', NULL, 'Heat rejection window film', '- Windshield 70%\n- Sides and rear 50% ', '1.00', '28000.00', '3000.00', 3, '', NULL, NULL, NULL, NULL),
(309, 206, 0, NULL, '2022-06-24', NULL, 'Chrome delete', '- Wheels \n- Grill\n- Exhaust tips', '1.00', '35000.00', NULL, 4, '', NULL, NULL, NULL, NULL),
(310, 207, 0, NULL, '2022-06-28', NULL, 'Defender Platinum PPF + roof PPF', '- Paint correction \n- PPF install\n- Ceramic coating', '1.00', '235000.00', '35000.00', 1, 'Axiom', NULL, NULL, NULL, NULL),
(311, 207, 0, NULL, '2022-06-28', NULL, 'Interior Pre cut', '', '1.00', '25000.00', '5000.00', 2, 'Axiom', NULL, NULL, NULL, NULL),
(312, 208, 0, NULL, '2022-06-28', NULL, 'TPH Glamour S covers', 'G63 old \nG63 new\nGT4', '3.00', '35000.00', NULL, 1, 'Axiom', NULL, NULL, NULL, NULL),
(313, 209, 0, NULL, '2022-06-29', NULL, 'Painting and body repair', '- Rear bumper, tyre cover and wheel arch repair.\n- Front grill and head light surrounds.', '1.00', '50000.00', NULL, 1, 'Axiom', NULL, NULL, NULL, NULL),
(376, 247, 2, NULL, '2023-09-13', NULL, 'hello', 'welcome', '1.00', '2000.00', NULL, 1, 'Axiom', NULL, NULL, NULL, NULL),
(315, 210, 0, NULL, '2022-07-05', NULL, 'Super guard PPF', '- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.', '1.00', '130000.00', '28000.00', 1, '', NULL, NULL, NULL, NULL),
(316, 210, 0, NULL, '2022-07-05', NULL, 'Sunfilm install', '', '1.00', '29500.00', '11000.00', 2, '', NULL, NULL, NULL, NULL),
(317, 207, 0, NULL, '2022-07-07', NULL, 'Heat rejection window film', '- Front windshield supercool 70%.\n- Sides and rear Llumar 50% ', '1.00', '30000.00', '6000.00', 3, 'Axiom', NULL, NULL, NULL, NULL),
(318, 211, 0, NULL, '2022-07-08', NULL, 'Defender Platinum PPF + Roof PPF', '- Paint correction.\n- PPF install.\n- ceramic on PPF.\n- Roof PPF.', '1.00', '235000.00', '35000.00', 1, '', NULL, NULL, NULL, NULL),
(319, 211, 0, NULL, '2022-07-08', NULL, 'Interior pre cut', '', '1.00', '25000.00', '5000.00', 2, '', NULL, NULL, NULL, NULL),
(320, 211, 0, NULL, '2022-07-08', NULL, 'Heat rejection window film', '- Windshield 70%\n- Sides and rear 50%', '1.00', '30000.00', '6000.00', 3, '', NULL, NULL, NULL, NULL),
(321, 212, 0, NULL, '2022-07-11', NULL, 'Defender platinum PPF', '- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.', '1.00', '100000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(322, 212, 0, NULL, '2022-07-11', NULL, 'Painting', '- Sand down and respray wheels to bright silver', '1.00', '15000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(323, 213, 0, NULL, '2022-07-13', NULL, 'GSWF defender Platinum', '- Paint correction \n- PPF install \n- Ceramic on ppf', '1.00', '220000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(324, 213, 0, NULL, '2022-07-13', NULL, '3m CR series', 'All glasses ', '1.00', '30000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(325, 214, 0, NULL, '2022-07-15', NULL, 'Llumar Valor', '- Paint correction.\n- PPF install.\n- Ceramic on PPF\n\nRoll ID: 812C024 UIN: 0975', '1.00', '230000.00', '20000.00', 1, '', NULL, NULL, NULL, NULL),
(326, 214, 0, NULL, '2022-07-15', NULL, 'Chrome delete ', '- Front grill, front bumper splitter, rear bumper diffuser in black.\n- Window beading black out with black PPF\n- 70% rear tail light tints.', '1.00', '65000.00', NULL, 2, '', NULL, NULL, NULL, NULL),
(327, 215, 0, NULL, '2022-07-22', NULL, 'Body wrok and painting.', '- Hood repair and paint.\n- Bumper repair and paint.\n- Head light ', '1.00', '30000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(329, 216, 0, NULL, '2022-07-29', NULL, 'Exterior paint correction', '- Decontamination wash.\n- Paint correction.\n- Exterior detail.\n- Interior deep cleaning.\n- Engine bay and boot clean up.', '1.00', '15000.00', NULL, 1, 'suman', NULL, NULL, NULL, NULL),
(330, 217, 0, NULL, '2022-08-02', NULL, 'Sunfilm install', '- 70% sunfilm install for windshield, side windows, rear and sun roof.', '1.00', '30000.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(332, 218, 0, NULL, '2022-08-10', NULL, 'PPF cut charges', '- Film cutting charges from Xpel.', '1.00', '15000.00', NULL, 1, ' invoice', NULL, NULL, NULL, NULL),
(333, 219, 0, NULL, '2022-08-11', NULL, 'Defender Platinum PPF', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '220000.00', NULL, 1, 'suman', NULL, NULL, NULL, NULL),
(334, 219, 0, NULL, '2022-08-11', NULL, 'CR70', 'Sunfilm application on 5 small glasses and 3 big glasses', '1.00', '39250.00', NULL, 2, ' axiom', NULL, NULL, NULL, NULL),
(335, 220, 0, NULL, '2022-08-18', NULL, 'Data Engineering', '- Data sampling of UPI Customer Segment', '1.00', '450000.00', NULL, 1, ' Detailing', NULL, NULL, NULL, NULL),
(336, 221, 0, NULL, '2022-08-19', NULL, 'Interior deep cleaning', '- Exterior premium wash.\n- Interior scrub down and disinfection.\n- Engine bay and boot clean up.', '1.00', '4500.00', NULL, 1, 'Axiom', NULL, NULL, NULL, NULL),
(337, 222, 0, NULL, '2022-08-19', NULL, 'Paint protection film install', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '200000.00', NULL, 1, 'suman', NULL, NULL, NULL, NULL),
(338, 223, 0, NULL, '2022-08-19', NULL, 'Super cool 70%', '- Heat rejection window film.', '1.00', '6500.00', NULL, 1, '', NULL, NULL, NULL, NULL),
(339, 224, 0, NULL, '2022-08-19', NULL, 'Inozetek Midnight green', '', '1.00', '85000.00', NULL, 1, 'suman', NULL, NULL, NULL, NULL),
(340, 225, 0, NULL, '2022-09-01', NULL, 'Fortuner restoration.', '- Front and back bumpers, hood repaint.\n- Paint correction and ceramic coating.\n- Interior deep cleaning', '1.00', '65000.00', NULL, 1, ' writer', NULL, NULL, NULL, NULL),
(341, 226, 0, 0, '2022-09-03', 0, 'Ghost grill paint', '', '1.00', '2000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, NULL),
(342, 226, 0, 0, '2022-09-03', 0, 'Bumper repair and paint', '', '1.00', '15000.00', '0.00', 2, 'Axiom', NULL, NULL, NULL, NULL),
(343, 226, 2, 0, '2022-09-03', 0, 'Fender replacement', '', '1.00', '20000.00', '0.00', 6, 'Axiom', NULL, NULL, NULL, NULL),
(344, 226, 0, 0, '2022-09-03', 0, 'PPF full coverage + Ceramic', '', '1.00', '90000.00', '0.00', 3, 'Axiom', NULL, NULL, NULL, NULL),
(345, 226, 0, 0, '2022-09-03', 0, 'Heat rejection window film ', '', '1.00', '15000.00', '0.00', 4, 'Axiom', NULL, NULL, NULL, NULL),
(346, 226, 0, 0, '2022-09-03', 0, 'Old ppf removal and cleaning', '', '1.00', '10000.00', '0.00', 5, 'Axiom', NULL, NULL, NULL, NULL),
(347, 227, 0, NULL, '2022-09-09', NULL, 'Dent repair and painting', '- 2 panels repair and painting.\n', '1.00', '20000.00', NULL, 1, ' Web Design', NULL, NULL, NULL, NULL),
(348, 228, 0, NULL, '2022-09-13', NULL, 'Defender Platinum', '- Paint correction.\n- PPF.\n- Ceramic on PPF', '1.00', '153000.00', NULL, 1, 'UI/UX', NULL, NULL, NULL, NULL),
(349, 228, 0, NULL, '2022-09-13', NULL, 'Sunfilm', '- All glasses sun film', '1.00', '17000.00', NULL, 2, 'UI/UX', NULL, NULL, NULL, NULL),
(350, 229, 0, NULL, '2022-09-13', NULL, 'Superguard PPF', '- Paint correction.\n- PPF install.\n- Ceramicon PPF.', '1.00', '119000.00', NULL, 1, ' axiom', NULL, NULL, NULL, NULL),
(360, 234, 0, NULL, '2023-01-12', NULL, 'Sun film.', 'Heat rejection black tint 45%.\nHeat rejection wind shield film 70%', '1.00', '25000.00', NULL, 2, 'Axiom', NULL, NULL, NULL, NULL),
(352, 231, 0, NULL, '2022-09-20', NULL, 'Super guard PPF', '- Paint correction.\n- PPF\n- Ceramic', '1.00', '150000.00', '90000.00', 1, ' waiter', NULL, NULL, NULL, NULL),
(353, 231, 0, NULL, '2022-09-20', NULL, 'CR70 sunfilm', '- Heat rejection window film.', '1.00', '30000.00', NULL, 2, ' writer', NULL, NULL, NULL, NULL),
(354, 231, 0, NULL, '2022-09-20', NULL, 'Ceramic coating', '- Wheels coating', '1.00', '15000.00', '15000.00', 3, 'account', NULL, NULL, NULL, NULL),
(355, 232, 0, NULL, '2022-09-21', NULL, 'Interior deep cleaning', '- Exterior foam wash and maintenance.\n- Wax application.\n- Interior deep cleaning.', '1.00', '4500.00', NULL, 1, ' writer', NULL, NULL, NULL, NULL),
(356, 233, 0, NULL, '2022-09-27', NULL, 'Damaged PPF replacement', '- Removal and replacement of PPF on front and back bumpers.', '1.00', '50000.00', NULL, 1, ' suman<br>', NULL, NULL, NULL, NULL),
(359, 234, 0, NULL, '2023-01-12', NULL, 'Llumar Platinum PPF', '- High gloss polish.\n- Paint protection film install.\n- Interior steam clean.\n- Ceramic on PPF', '1.00', '229000.00', NULL, 1, 'Axiom', NULL, NULL, NULL, NULL),
(358, 220, 0, NULL, '2022-12-23', NULL, 'Data Collection', '- Data collection through queries, forms, surveys', '1.00', '120000.00', NULL, 2, ' Detailing', NULL, NULL, NULL, NULL),
(377, 248, 2, 0, '0000-00-00', 0, 'hello', 'welcome', '2.00', '1000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, '0000-00-00'),
(380, 17, 1, 0, '0000-00-00', 0, 'hello', 'welcome', '1.00', '2000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, '0000-00-00'),
(381, 17, 1, 0, '0000-00-00', 0, 'hello', 'welcome', '1.00', '2000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, '0000-00-00'),
(382, 17, 1, 0, '0000-00-00', 0, 'hello', 'welcome', '1.00', '2000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, '0000-00-00'),
(383, 251, 1, 0, '0000-00-00', 0, 'hello', 'Welcome', '1.00', '1000.00', '0.00', 1, ' Customer_Service', NULL, NULL, NULL, '0000-00-00'),
(384, 251, 1, 0, '0000-00-00', 0, 'hello', 'Welcome', '1.00', '1000.00', '0.00', 1, ' Customer_Service', NULL, NULL, NULL, '0000-00-00'),
(385, 252, 1, 0, '0000-00-00', 0, 'hello', 'Welcome', '1.00', '22000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, '0000-00-00'),
(386, 253, 0, 0, '0000-00-00', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, '', NULL, NULL, NULL, NULL),
(387, 253, 0, 0, '0000-00-00', 0, 'XPEL XR PRIME 70', '- All round sun film install.', '2.00', '22000.00', '0.00', 2, '', NULL, NULL, NULL, NULL),
(390, 254, 0, 0, '0000-00-00', NULL, 'Sun film.', 'Heat rejection black tint 45%.\nHeat rejection wind shield film 70%', '2.00', '25000.00', '0.00', 2, '', NULL, NULL, NULL, NULL),
(391, 255, 0, 0, '0000-00-00', NULL, 'Llumar Platinum PPF', '- High gloss polish.\n- Paint protection film install.\n- Interior steam clean.\n- Ceramic on PPF', '1.00', '229000.00', '0.00', 1, '', NULL, NULL, NULL, NULL),
(392, 255, 0, 0, '0000-00-00', NULL, 'Sun film.', 'Heat rejection black tint 45%.\nHeat rejection wind shield film 70%', '2.00', '25000.00', '0.00', 2, '', NULL, NULL, NULL, NULL),
(393, 256, 0, 0, '0000-00-00', 0, 'Llumar Platinum PPF', '- High gloss polish.\n- Paint protection film install.\n- Interior steam clean.\n- Ceramic on PPF', '1.00', '229000.00', '0.00', 1, 'Axiom', NULL, NULL, NULL, NULL),
(394, 256, 0, 0, '0000-00-00', 0, 'Sun film.', 'Heat rejection black tint 45%.\nHeat rejection wind shield film 70%', '2.00', '25000.00', '0.00', 2, 'Axiom', NULL, NULL, NULL, NULL),
(395, 259, 0, 0, '0000-00-00', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, '', 1, NULL, NULL, NULL),
(396, 260, 0, 0, '0000-00-00', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, '', 1, NULL, NULL, NULL),
(397, 261, 0, 0, '0000-00-00', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, '', 1, NULL, NULL, NULL),
(398, 262, 0, 0, '0000-00-00', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, '', 1, NULL, NULL, NULL),
(399, 263, 0, 0, '0000-00-00', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, 'Axiom', 1, NULL, NULL, NULL),
(400, 264, 0, 0, '0000-00-00', 0, 'XPEL ULTIMATE PLUS', '- Full car decontamination wash.\n- Paint protection film install.\n- Ceramic on PPF.', '2.00', '212000.00', '0.00', 1, '', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_item_amounts`
--

CREATE TABLE `ip_invoice_item_amounts` (
  `item_amount_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_subtotal` decimal(20,2) DEFAULT NULL,
  `item_tax_total` decimal(20,2) DEFAULT NULL,
  `item_discount` decimal(20,2) DEFAULT NULL,
  `item_total` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_invoice_item_amounts`
--

INSERT INTO `ip_invoice_item_amounts` (`item_amount_id`, `item_id`, `item_subtotal`, `item_tax_total`, `item_discount`, `item_total`) VALUES
(17, 17, '150000.00', '0.00', '0.00', '150000.00'),
(18, 18, '424000.00', '0.00', '0.00', '424000.00'),
(21, 21, '5000.00', '0.00', '0.00', '5000.00'),
(16, 16, '4000.00', '0.00', '0.00', '4000.00'),
(389, 389, '229000.00', '0.00', '0.00', '229000.00'),
(20, 20, '196000.00', '0.00', '0.00', '196000.00'),
(14, 14, '196000.00', '0.00', '0.00', '196000.00'),
(15, 15, '150000.00', '0.00', '0.00', '150000.00'),
(22, 22, '6000.00', '0.00', '0.00', '6000.00'),
(23, 23, '220000.00', '0.00', '35000.00', '185000.00'),
(24, 24, '25000.00', '0.00', '0.00', '25000.00'),
(25, 25, '10000.00', '0.00', '5000.00', '5000.00'),
(26, 26, '67200.00', '0.00', '0.00', '67200.00'),
(27, 27, '93220.40', '0.00', '0.00', '93220.40'),
(28, 28, '69000.00', '0.00', '0.00', '69000.00'),
(29, 29, '13500.00', '0.00', '0.00', '13500.00'),
(30, 30, '550000.00', '99000.00', '99000.00', '550000.00'),
(33, 33, '466000.00', '0.00', '0.00', '466000.00'),
(32, 32, '35000.00', '0.00', '0.00', '35000.00'),
(34, 34, '100000.00', '0.00', '8000.00', '92000.00'),
(35, 35, '13000.00', '0.00', '13000.00', '0.00'),
(36, 36, '10000.00', '0.00', '10000.00', '0.00'),
(37, 37, '24000.00', '0.00', '0.00', '24000.00'),
(38, 38, '220000.00', '0.00', '0.00', '220000.00'),
(39, 39, '13000.00', '0.00', '13000.00', '0.00'),
(42, 42, '55000.00', '0.00', '15000.00', '40000.00'),
(41, 41, '25000.00', '0.00', '0.00', '25000.00'),
(43, 43, '100000.00', '0.00', '0.00', '100000.00'),
(44, 44, '0.00', '0.00', '0.00', '0.00'),
(45, 45, '10000.00', '0.00', '0.00', '10000.00'),
(46, 46, '10000.00', '0.00', '0.00', '10000.00'),
(47, 47, '188000.00', '0.00', '13000.00', '175000.00'),
(48, 48, '12000.00', '0.00', '0.00', '12000.00'),
(49, 49, '20000.00', '0.00', '0.00', '20000.00'),
(50, 50, '16000.00', '0.00', '0.00', '16000.00'),
(51, 51, '148000.00', '0.00', '0.00', '148000.00'),
(52, 52, '54000.00', '0.00', '0.00', '54000.00'),
(53, 53, '3000.00', '0.00', '0.00', '3000.00'),
(54, 54, '145000.00', '0.00', '0.00', '145000.00'),
(55, 55, '10000.00', '0.00', '10000.00', '0.00'),
(56, 56, '76125.00', '0.00', '0.00', '76125.00'),
(57, 57, '0.00', '0.00', '0.00', '0.00'),
(58, 58, '145000.00', '0.00', '0.00', '145000.00'),
(59, 59, '10000.00', '0.00', '10000.00', '0.00'),
(60, 60, '15000.00', '0.00', '0.00', '15000.00'),
(61, 61, '2000.00', '0.00', '0.00', '2000.00'),
(62, 62, '176000.00', '0.00', '11000.00', '165000.00'),
(63, 63, '10000.00', '0.00', '10000.00', '0.00'),
(64, 64, '0.00', '0.00', '0.00', '0.00'),
(65, 65, '5000.00', '0.00', '0.00', '5000.00'),
(66, 66, '97600.00', '0.00', '0.00', '97600.00'),
(67, 67, '35000.00', '0.00', '0.00', '35000.00'),
(68, 68, '52000.00', '0.00', '0.00', '52000.00'),
(69, 69, '100000.00', '0.00', '0.00', '100000.00'),
(70, 70, '48000.00', '0.00', '4000.00', '44000.00'),
(71, 71, '40000.00', '0.00', '5000.00', '35000.00'),
(72, 72, '41000.00', '0.00', '0.00', '41000.00'),
(73, 73, '120000.00', '0.00', '0.00', '120000.00'),
(74, 74, '10000.00', '0.00', '0.00', '10000.00'),
(75, 75, '30250.00', '0.00', '0.00', '30250.00'),
(77, 77, '275000.00', '0.00', '0.00', '275000.00'),
(78, 78, '17500.00', '0.00', '0.00', '17500.00'),
(79, 79, '210000.00', '0.00', '15000.00', '195000.00'),
(80, 80, '30000.00', '0.00', '3000.00', '27000.00'),
(81, 81, '0.00', '0.00', '0.00', '0.00'),
(82, 82, '5000.00', '0.00', '0.00', '5000.00'),
(83, 83, '252000.00', '0.00', '56000.00', '196000.00'),
(84, 84, '0.00', '0.00', '0.00', '0.00'),
(85, 85, '28000.00', '0.00', '11000.00', '17000.00'),
(86, 86, '100000.00', '0.00', '0.00', '100000.00'),
(88, 88, '45000.00', '0.00', '0.00', '45000.00'),
(94, 94, '16000.00', '0.00', '0.00', '16000.00'),
(93, 93, '32550.00', '0.00', '0.00', '32550.00'),
(92, 92, '15000.00', '0.00', '0.00', '15000.00'),
(95, 95, '18000.00', '0.00', '3000.00', '15000.00'),
(96, 96, '2500.00', '0.00', '0.00', '2500.00'),
(97, 97, '170000.00', '0.00', '0.00', '170000.00'),
(98, 98, '212000.00', '0.00', '12000.00', '200000.00'),
(99, 99, '200000.00', '0.00', '30000.00', '170000.00'),
(100, 100, '12000.00', '0.00', '0.00', '12000.00'),
(101, 101, '235000.00', '0.00', '15000.00', '220000.00'),
(102, 102, '25000.00', '0.00', '25000.00', '0.00'),
(103, 103, '28000.00', '0.00', '0.00', '28000.00'),
(104, 104, '150000.00', '0.00', '0.00', '150000.00'),
(105, 105, '65000.00', '0.00', '0.00', '65000.00'),
(106, 106, '17000.00', '0.00', '0.00', '17000.00'),
(107, 107, '1500.00', '0.00', '0.00', '1500.00'),
(108, 108, '4000.00', '0.00', '0.00', '4000.00'),
(109, 109, '230000.00', '0.00', '30000.00', '200000.00'),
(110, 110, '27000.00', '0.00', '4000.00', '23000.00'),
(111, 111, '4000.00', '0.00', '0.00', '4000.00'),
(112, 112, '63000.00', '0.00', '10000.00', '53000.00'),
(113, 113, '180000.00', '0.00', '20000.00', '160000.00'),
(114, 114, '8000.00', '0.00', '0.00', '8000.00'),
(115, 115, '37600.00', '0.00', '0.00', '37600.00'),
(116, 116, '10800.00', '0.00', '0.00', '10800.00'),
(117, 117, '30000.00', '0.00', '5000.00', '25000.00'),
(118, 118, '42500.00', '0.00', '0.00', '42500.00'),
(119, 119, '13000.00', '0.00', '0.00', '13000.00'),
(120, 120, '37000.00', '0.00', '0.00', '37000.00'),
(121, 121, '143000.00', '0.00', '0.00', '143000.00'),
(122, 122, '145000.00', '0.00', '0.00', '145000.00'),
(123, 123, '0.00', '0.00', '0.00', '0.00'),
(124, 124, '15000.00', '0.00', '0.00', '15000.00'),
(125, 125, '115000.00', '0.00', '0.00', '115000.00'),
(126, 126, '10000.00', '0.00', '0.00', '10000.00'),
(127, 127, '15000.00', '0.00', '5000.00', '10000.00'),
(128, 128, '18000.00', '0.00', '0.00', '18000.00'),
(129, 129, '6000.00', '0.00', '0.00', '6000.00'),
(130, 130, '25000.00', '0.00', '0.00', '25000.00'),
(131, 131, '30000.00', '0.00', '0.00', '30000.00'),
(132, 132, '25000.00', '0.00', '0.00', '25000.00'),
(133, 133, '54000.00', '0.00', '4000.00', '50000.00'),
(134, 134, '278000.00', '0.00', '0.00', '278000.00'),
(160, 160, '25000.00', '0.00', '0.00', '25000.00'),
(159, 159, '130000.00', '0.00', '20000.00', '110000.00'),
(137, 137, '190000.00', '0.00', '0.00', '190000.00'),
(138, 138, '7200.00', '0.00', '1700.00', '5500.00'),
(139, 139, '4000.00', '0.00', '0.00', '4000.00'),
(140, 140, '2000.00', '0.00', '0.00', '2000.00'),
(141, 141, '90000.00', '0.00', '0.00', '90000.00'),
(142, 142, '32000.00', '0.00', '0.00', '32000.00'),
(143, 143, '45000.00', '0.00', '0.00', '45000.00'),
(144, 144, '25000.00', '0.00', '0.00', '25000.00'),
(145, 145, '272000.00', '0.00', '22000.00', '250000.00'),
(146, 146, '24000.00', '0.00', '0.00', '24000.00'),
(147, 147, '120000.00', '0.00', '0.00', '120000.00'),
(156, 156, '45000.00', '0.00', '0.00', '45000.00'),
(157, 157, '25000.00', '0.00', '0.00', '25000.00'),
(158, 158, '39530.00', '0.00', '0.00', '39530.00'),
(151, 151, '22000.00', '0.00', '0.00', '22000.00'),
(152, 152, '450.00', '0.00', '0.00', '450.00'),
(153, 153, '6000.00', '0.00', '0.00', '6000.00'),
(154, 154, '200000.00', '0.00', '0.00', '200000.00'),
(155, 155, '220000.00', '0.00', '0.00', '220000.00'),
(161, 161, '33000.00', '0.00', '5000.00', '28000.00'),
(162, 162, '250000.00', '0.00', '25000.00', '225000.00'),
(163, 163, '160000.00', '0.00', '0.00', '160000.00'),
(164, 164, '170000.00', '0.00', '0.00', '170000.00'),
(165, 165, '15000.00', '0.00', '5000.00', '10000.00'),
(166, 166, '220000.00', '0.00', '20000.00', '200000.00'),
(167, 167, '15000.00', '0.00', '0.00', '15000.00'),
(168, 168, '30000.00', '0.00', '0.00', '30000.00'),
(169, 169, '1300.00', '0.00', '0.00', '1300.00'),
(170, 170, '250000.00', '0.00', '30000.00', '220000.00'),
(171, 171, '50000.00', '0.00', '5000.00', '45000.00'),
(172, 172, '30000.00', '0.00', '0.00', '30000.00'),
(173, 173, '60000.00', '0.00', '10000.00', '50000.00'),
(174, 174, '168000.00', '0.00', '23000.00', '145000.00'),
(175, 175, '212000.00', '0.00', '12000.00', '200000.00'),
(176, 176, '24000.00', '0.00', '4000.00', '20000.00'),
(177, 177, '5000.00', '0.00', '0.00', '5000.00'),
(178, 178, '12000.00', '0.00', '0.00', '12000.00'),
(179, 179, '180000.00', '0.00', '18000.00', '162000.00'),
(180, 180, '8500.00', '0.00', '0.00', '8500.00'),
(181, 181, '22000.00', '0.00', '0.00', '22000.00'),
(182, 182, '220000.00', '0.00', '20000.00', '200000.00'),
(183, 183, '230000.00', '0.00', '20000.00', '210000.00'),
(184, 184, '30000.00', '0.00', '15000.00', '15000.00'),
(185, 185, '3000.00', '0.00', '0.00', '3000.00'),
(186, 186, '1000.00', '0.00', '0.00', '1000.00'),
(187, 187, '33000.00', '0.00', '0.00', '33000.00'),
(189, 189, '70000.00', '0.00', '0.00', '70000.00'),
(358, 358, '120000.00', '0.00', '0.00', '120000.00'),
(192, 192, '200000.00', '0.00', '30000.00', '170000.00'),
(193, 193, '28000.00', '0.00', '8000.00', '20000.00'),
(194, 194, '15000.00', '0.00', '0.00', '15000.00'),
(195, 195, '216000.00', '0.00', '19000.00', '197000.00'),
(196, 196, '15000.00', '0.00', '0.00', '15000.00'),
(197, 197, '10000.00', '0.00', '0.00', '10000.00'),
(198, 198, '8500.00', '0.00', '3500.00', '5000.00'),
(199, 199, '35000.00', '0.00', '0.00', '35000.00'),
(200, 200, '7500.00', '0.00', '2500.00', '5000.00'),
(201, 201, '800.00', '0.00', '0.00', '800.00'),
(202, 202, '100000.00', '0.00', '0.00', '100000.00'),
(203, 203, '14000.00', '0.00', '0.00', '14000.00'),
(204, 204, '166000.00', '0.00', '21500.00', '144500.00'),
(205, 205, '20000.00', '0.00', '0.00', '20000.00'),
(206, 206, '230000.00', '0.00', '15000.00', '215000.00'),
(207, 207, '45000.00', '0.00', '10000.00', '35000.00'),
(208, 208, '14000.00', '0.00', '0.00', '14000.00'),
(209, 209, '24000.00', '0.00', '0.00', '24000.00'),
(210, 210, '20000.00', '0.00', '0.00', '20000.00'),
(211, 211, '0.00', '0.00', '0.00', '0.00'),
(212, 212, '230000.00', '0.00', '20000.00', '210000.00'),
(213, 213, '25000.00', '0.00', '5000.00', '20000.00'),
(214, 214, '25000.00', '0.00', '7000.00', '18000.00'),
(215, 215, '30000.00', '0.00', '5000.00', '25000.00'),
(216, 216, '15000.00', '0.00', '3000.00', '12000.00'),
(217, 217, '180000.00', '0.00', '20000.00', '160000.00'),
(218, 218, '30000.00', '0.00', '5000.00', '25000.00'),
(219, 219, '25000.00', '0.00', '0.00', '25000.00'),
(220, 220, '200000.00', '0.00', '30000.00', '170000.00'),
(221, 221, '38000.00', '0.00', '0.00', '38000.00'),
(222, 222, '24000.00', '0.00', '4000.00', '20000.00'),
(223, 223, '48000.00', '0.00', '4000.00', '44000.00'),
(224, 224, '195000.00', '0.00', '20000.00', '175000.00'),
(225, 225, '12000.00', '0.00', '0.00', '12000.00'),
(226, 226, '5000.00', '0.00', '0.00', '5000.00'),
(227, 227, '7000.00', '0.00', '0.00', '7000.00'),
(228, 228, '1500.00', '0.00', '0.00', '1500.00'),
(229, 229, '130000.00', '0.00', '0.00', '130000.00'),
(230, 230, '20000.00', '0.00', '0.00', '20000.00'),
(231, 231, '20000.00', '0.00', '0.00', '20000.00'),
(232, 232, '2000.00', '0.00', '0.00', '2000.00'),
(233, 233, '210000.00', '0.00', '0.00', '210000.00'),
(234, 234, '88000.00', '0.00', '0.00', '88000.00'),
(235, 235, '20000.00', '0.00', '0.00', '20000.00'),
(236, 236, '27000.00', '0.00', '0.00', '27000.00'),
(237, 237, '230000.00', '0.00', '30000.00', '200000.00'),
(238, 238, '60000.00', '0.00', '5000.00', '55000.00'),
(239, 239, '180000.00', '0.00', '0.00', '180000.00'),
(240, 240, '22000.00', '0.00', '0.00', '22000.00'),
(241, 241, '4000.00', '0.00', '0.00', '4000.00'),
(242, 242, '30000.00', '0.00', '0.00', '30000.00'),
(243, 243, '160000.00', '0.00', '30000.00', '130000.00'),
(244, 244, '30000.00', '0.00', '5000.00', '25000.00'),
(245, 245, '12000.00', '0.00', '0.00', '12000.00'),
(246, 246, '100000.00', '0.00', '0.00', '100000.00'),
(247, 247, '33000.00', '0.00', '0.00', '33000.00'),
(248, 248, '15000.00', '0.00', '0.00', '15000.00'),
(249, 249, '0.00', '0.00', '0.00', '0.00'),
(250, 250, '30000.00', '0.00', '0.00', '30000.00'),
(251, 251, '12000.00', '0.00', '0.00', '12000.00'),
(252, 252, '2500.00', '0.00', '0.00', '2500.00'),
(253, 253, '6500.00', '0.00', '0.00', '6500.00'),
(254, 254, '18000.00', '0.00', '0.00', '18000.00'),
(255, 255, '1000.00', '0.00', '0.00', '1000.00'),
(256, 256, '170000.00', '0.00', '20000.00', '150000.00'),
(257, 257, '20000.00', '0.00', '0.00', '20000.00'),
(258, 258, '70000.00', '0.00', '0.00', '70000.00'),
(259, 259, '10000.00', '0.00', '0.00', '10000.00'),
(260, 260, '17000.00', '0.00', '0.00', '17000.00'),
(261, 261, '245000.00', '0.00', '45000.00', '200000.00'),
(262, 262, '18000.00', '0.00', '0.00', '18000.00'),
(263, 263, '28000.00', '0.00', '8000.00', '20000.00'),
(264, 264, '115000.00', '0.00', '0.00', '115000.00'),
(265, 265, '0.00', '0.00', '0.00', '0.00'),
(266, 266, '0.00', '0.00', '0.00', '0.00'),
(267, 267, '6500.00', '0.00', '0.00', '6500.00'),
(268, 268, '12500.00', '0.00', '0.00', '12500.00'),
(269, 269, '220000.00', '0.00', '57950.00', '162050.00'),
(270, 270, '180000.00', '0.00', '40000.00', '140000.00'),
(271, 271, '42500.00', '0.00', '0.00', '42500.00'),
(272, 272, '30000.00', '0.00', '0.00', '30000.00'),
(273, 273, '32000.00', '0.00', '0.00', '32000.00'),
(274, 274, '140000.00', '0.00', '0.00', '140000.00'),
(275, 275, '100000.00', '0.00', '0.00', '100000.00'),
(276, 276, '220000.00', '0.00', '30000.00', '190000.00'),
(277, 277, '120000.00', '0.00', '0.00', '120000.00'),
(278, 278, '18000.00', '0.00', '0.00', '18000.00'),
(279, 279, '33000.00', '0.00', '5000.00', '28000.00'),
(280, 280, '180000.00', '0.00', '0.00', '180000.00'),
(281, 281, '180000.00', '0.00', '0.00', '180000.00'),
(282, 282, '12000.00', '0.00', '0.00', '12000.00'),
(283, 283, '25000.00', '0.00', '0.00', '25000.00'),
(284, 284, '20000.00', '0.00', '0.00', '20000.00'),
(285, 285, '20000.00', '0.00', '0.00', '20000.00'),
(286, 286, '40000.00', '0.00', '0.00', '40000.00'),
(287, 287, '106000.00', '0.00', '0.00', '106000.00'),
(288, 288, '4500.00', '0.00', '500.00', '4000.00'),
(289, 289, '45000.00', '0.00', '10000.00', '35000.00'),
(290, 290, '14000.00', '0.00', '0.00', '14000.00'),
(291, 291, '185000.00', '0.00', '20000.00', '165000.00'),
(292, 292, '30000.00', '0.00', '4000.00', '26000.00'),
(293, 293, '135000.00', '0.00', '35000.00', '100000.00'),
(294, 294, '25000.00', '0.00', '5000.00', '20000.00'),
(295, 295, '26000.00', '0.00', '0.00', '26000.00'),
(296, 296, '35000.00', '0.00', '0.00', '35000.00'),
(297, 297, '35000.00', '0.00', '5000.00', '30000.00'),
(298, 298, '32000.00', '0.00', '0.00', '32000.00'),
(299, 299, '6000.00', '0.00', '0.00', '6000.00'),
(300, 300, '5460.00', '0.00', '0.00', '5460.00'),
(301, 301, '10000.00', '0.00', '1500.00', '8500.00'),
(302, 302, '130000.00', '0.00', '20000.00', '110000.00'),
(303, 303, '16000.00', '0.00', '4000.00', '12000.00'),
(304, 304, '25000.00', '0.00', '5000.00', '20000.00'),
(305, 305, '20000.00', '0.00', '0.00', '20000.00'),
(306, 306, '180000.00', '0.00', '30000.00', '150000.00'),
(307, 307, '20000.00', '0.00', '5000.00', '15000.00'),
(308, 308, '28000.00', '0.00', '3000.00', '25000.00'),
(309, 309, '35000.00', '0.00', '0.00', '35000.00'),
(310, 310, '235000.00', '0.00', '35000.00', '200000.00'),
(311, 311, '25000.00', '0.00', '5000.00', '20000.00'),
(312, 312, '105000.00', '0.00', '0.00', '105000.00'),
(313, 313, '50000.00', '0.00', '0.00', '50000.00'),
(376, 376, '2000.00', '100.00', '0.00', '2100.00'),
(315, 315, '130000.00', '0.00', '28000.00', '102000.00'),
(316, 316, '29500.00', '0.00', '11000.00', '18500.00'),
(317, 317, '30000.00', '0.00', '6000.00', '24000.00'),
(318, 318, '235000.00', '0.00', '35000.00', '200000.00'),
(319, 319, '25000.00', '0.00', '5000.00', '20000.00'),
(320, 320, '30000.00', '0.00', '6000.00', '24000.00'),
(321, 321, '100000.00', '0.00', '0.00', '100000.00'),
(322, 322, '15000.00', '0.00', '0.00', '15000.00'),
(323, 323, '220000.00', '0.00', '0.00', '220000.00'),
(324, 324, '30000.00', '0.00', '0.00', '30000.00'),
(325, 325, '230000.00', '0.00', '20000.00', '210000.00'),
(326, 326, '65000.00', '0.00', '0.00', '65000.00'),
(327, 327, '30000.00', '0.00', '0.00', '30000.00'),
(329, 329, '15000.00', '0.00', '0.00', '15000.00'),
(330, 330, '30000.00', '0.00', '0.00', '30000.00'),
(359, 359, '229000.00', '0.00', '0.00', '229000.00'),
(332, 332, '15000.00', '0.00', '0.00', '15000.00'),
(333, 333, '220000.00', '0.00', '0.00', '220000.00'),
(334, 334, '39250.00', '0.00', '0.00', '39250.00'),
(335, 335, '450000.00', '0.00', '0.00', '450000.00'),
(336, 336, '4500.00', '0.00', '0.00', '4500.00'),
(337, 337, '200000.00', '0.00', '0.00', '200000.00'),
(338, 338, '6500.00', '0.00', '0.00', '6500.00'),
(339, 339, '85000.00', '0.00', '0.00', '85000.00'),
(340, 340, '65000.00', '0.00', '0.00', '65000.00'),
(341, 341, '2000.00', '0.00', '0.00', '2000.00'),
(342, 342, '15000.00', '0.00', '0.00', '15000.00'),
(343, 343, '20000.00', '1000.00', '0.00', '21000.00'),
(344, 344, '90000.00', '0.00', '0.00', '90000.00'),
(345, 345, '15000.00', '0.00', '0.00', '15000.00'),
(346, 346, '10000.00', '0.00', '0.00', '10000.00'),
(347, 347, '20000.00', '0.00', '0.00', '20000.00'),
(348, 348, '153000.00', '0.00', '0.00', '153000.00'),
(349, 349, '17000.00', '0.00', '0.00', '17000.00'),
(350, 350, '119000.00', '0.00', '0.00', '119000.00'),
(360, 360, '25000.00', '0.00', '0.00', '25000.00'),
(352, 352, '150000.00', '0.00', '90000.00', '60000.00'),
(353, 353, '30000.00', '0.00', '0.00', '30000.00'),
(354, 354, '15000.00', '0.00', '15000.00', '0.00'),
(355, 355, '4500.00', '0.00', '0.00', '4500.00'),
(356, 356, '50000.00', '0.00', '0.00', '50000.00'),
(377, 377, '2000.00', '100.00', '0.00', '2100.00'),
(380, 380, '2000.00', '360.00', '0.00', '2360.00'),
(381, 381, '2000.00', '360.00', '0.00', '2360.00'),
(382, 382, '2000.00', '360.00', '0.00', '2360.00'),
(383, 383, '1000.00', '180.00', '0.00', '1180.00'),
(384, 384, '1000.00', '180.00', '0.00', '1180.00'),
(385, 385, '22000.00', '3960.00', '0.00', '25960.00'),
(386, 386, '424000.00', '0.00', '0.00', '424000.00'),
(387, 387, '44000.00', '0.00', '0.00', '44000.00'),
(390, 390, '50000.00', '0.00', '0.00', '50000.00'),
(391, 391, '229000.00', '0.00', '0.00', '229000.00'),
(392, 392, '50000.00', '0.00', '0.00', '50000.00'),
(393, 393, '229000.00', '0.00', '0.00', '229000.00'),
(394, 394, '50000.00', '0.00', '0.00', '50000.00'),
(395, 395, '424000.00', '0.00', '0.00', '424000.00'),
(396, 396, '424000.00', '0.00', '0.00', '424000.00'),
(397, 397, '424000.00', '0.00', '0.00', '424000.00'),
(398, 398, '424000.00', '0.00', '0.00', '424000.00'),
(399, 399, '424000.00', '0.00', '0.00', '424000.00'),
(400, 400, '424000.00', '0.00', '0.00', '424000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_sumex`
--

CREATE TABLE `ip_invoice_sumex` (
  `sumex_id` int(11) NOT NULL,
  `sumex_invoice` int(11) NOT NULL,
  `sumex_reason` int(11) NOT NULL,
  `sumex_diagnosis` varchar(500) NOT NULL,
  `sumex_observations` varchar(500) NOT NULL,
  `sumex_treatmentstart` date NOT NULL,
  `sumex_treatmentend` date NOT NULL,
  `sumex_casedate` date NOT NULL,
  `sumex_casenumber` varchar(35) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_invoice_tax_rates`
--

CREATE TABLE `ip_invoice_tax_rates` (
  `invoice_tax_rate_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `tax_rate_id` int(11) NOT NULL,
  `include_item_tax` int(1) NOT NULL DEFAULT 0,
  `invoice_tax_rate_amount` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_invoice_tax_rates`
--

INSERT INTO `ip_invoice_tax_rates` (`invoice_tax_rate_id`, `invoice_id`, `tax_rate_id`, `include_item_tax`, `invoice_tax_rate_amount`) VALUES
(16, 22, 1, 0, '1080.00'),
(15, 21, 1, 0, '36180.00'),
(14, 20, 1, 0, '76320.00'),
(13, 19, 1, 0, '27000.00'),
(12, 18, 1, 0, '720.00'),
(11, 17, 1, 0, '0.00'),
(7, 13, 1, 0, '35280.00'),
(8, 14, 1, 0, '27000.00'),
(17, 23, 1, 0, '38700.00'),
(18, 24, 1, 0, '12096.00'),
(19, 25, 1, 0, '16779.67'),
(20, 26, 1, 0, '14850.00'),
(21, 27, 1, 0, '81180.00'),
(22, 28, 1, 0, '90180.00'),
(23, 29, 1, 0, '20880.00'),
(24, 30, 1, 0, '44640.00'),
(25, 31, 1, 0, '7200.00'),
(26, 32, 1, 0, '18000.00'),
(27, 33, 1, 0, '1800.00'),
(28, 34, 1, 0, '1800.00'),
(29, 35, 1, 0, '37260.00'),
(30, 36, 1, 0, '2880.00'),
(31, 37, 1, 0, '36360.00'),
(32, 38, 1, 0, '26100.00'),
(33, 39, 1, 0, '13702.50'),
(34, 40, 1, 0, '26100.00'),
(35, 41, 1, 0, '2700.00'),
(36, 42, 1, 0, '360.00'),
(37, 43, 1, 0, '29700.00'),
(38, 44, 1, 0, '900.00'),
(39, 45, 1, 0, '23868.00'),
(40, 46, 1, 0, '9360.00'),
(41, 47, 1, 0, '18000.00'),
(42, 48, 1, 0, '14220.00'),
(43, 49, 1, 0, '7380.00'),
(44, 50, 1, 0, '0.00'),
(45, 51, 1, 0, '28845.00'),
(46, 52, 1, 0, '49500.00'),
(47, 53, 1, 0, '3150.00'),
(48, 54, 1, 0, '39960.00'),
(49, 55, 1, 0, '900.00'),
(50, 56, 1, 0, '38340.00'),
(51, 57, 1, 0, '18000.00'),
(55, 61, 1, 0, '8100.00'),
(54, 60, 1, 0, '0.00'),
(56, 62, 1, 0, '11439.00'),
(57, 63, 1, 0, '3150.00'),
(58, 64, 1, 0, '30600.00'),
(59, 65, 1, 0, '36000.00'),
(60, 66, 1, 0, '30600.00'),
(61, 67, 1, 0, '2160.00'),
(62, 68, 1, 0, '44640.00'),
(63, 69, 1, 0, '27000.00'),
(64, 70, 1, 0, '11700.00'),
(65, 71, 1, 0, '3060.00'),
(66, 72, 1, 0, '270.00'),
(67, 73, 1, 0, '0.00'),
(68, 74, 1, 0, '720.00'),
(69, 75, 1, 0, '40860.00'),
(70, 76, 1, 0, '38340.00'),
(71, 77, 1, 0, '8208.00'),
(72, 78, 1, 0, '1944.00'),
(73, 79, 1, 0, '0.00'),
(74, 80, 1, 0, '4500.00'),
(75, 81, 1, 0, '9990.00'),
(76, 82, 1, 0, '6660.00'),
(77, 83, 1, 0, '25740.00'),
(78, 84, 1, 0, '26100.00'),
(79, 85, 1, 0, '2700.00'),
(80, 86, 1, 0, '20700.00'),
(81, 87, 1, 0, '1800.00'),
(83, 89, 1, 0, '1800.00'),
(84, 90, 1, 0, '3240.00'),
(85, 91, 1, 0, '9900.00'),
(86, 92, 1, 0, '1080.00'),
(87, 93, 1, 0, '13500.00'),
(88, 94, 1, 0, '50040.00'),
(89, 95, 1, 0, '34200.00'),
(90, 96, 1, 0, '990.00'),
(91, 97, 1, 0, '1080.00'),
(92, 98, 1, 0, '16200.00'),
(93, 99, 1, 0, '5760.00'),
(94, 100, 1, 0, '12600.00'),
(95, 101, 1, 0, '49320.00'),
(96, 102, 1, 0, '21600.00'),
(97, 103, 1, 0, '4041.00'),
(98, 104, 1, 0, '37080.00'),
(99, 105, 1, 0, '39600.00'),
(100, 106, 1, 0, '12600.00'),
(101, 107, 1, 0, '7115.40'),
(102, 108, 1, 0, '19800.00'),
(103, 109, 1, 0, '4500.00'),
(104, 110, 1, 0, '45540.00'),
(105, 111, 1, 0, '28800.00'),
(106, 112, 1, 0, '32400.00'),
(107, 113, 1, 0, '0.00'),
(108, 114, 1, 0, '44100.00'),
(109, 115, 1, 0, '234.00'),
(110, 116, 1, 0, '53100.00'),
(111, 117, 1, 0, '35100.00'),
(112, 118, 1, 0, '39600.00'),
(113, 119, 1, 0, '3060.00'),
(114, 120, 1, 0, '29160.00'),
(115, 121, 1, 0, '1530.00'),
(116, 122, 1, 0, '3960.00'),
(117, 123, 1, 0, '36000.00'),
(118, 124, 1, 0, '40500.00'),
(119, 125, 1, 0, '720.00'),
(120, 126, 1, 0, '5940.00'),
(124, 130, 1, 0, '12600.00'),
(126, 132, 1, 0, '36900.00'),
(127, 133, 1, 0, '40860.00'),
(128, 134, 1, 0, '6300.00'),
(129, 135, 1, 0, '900.00'),
(130, 136, 1, 0, '144.00'),
(131, 137, 1, 0, '18000.00'),
(132, 138, 1, 0, '2520.00'),
(133, 139, 1, 0, '26010.00'),
(134, 140, 1, 0, '3600.00'),
(135, 141, 1, 0, '38700.00'),
(136, 142, 1, 0, '8820.00'),
(137, 143, 1, 0, '7920.00'),
(138, 144, 1, 0, '51300.00'),
(139, 145, 1, 0, '33300.00'),
(140, 146, 1, 0, '4500.00'),
(141, 147, 1, 0, '48960.00'),
(142, 148, 1, 0, '31500.00'),
(143, 149, 1, 0, '4590.00'),
(144, 150, 1, 0, '27000.00'),
(145, 151, 1, 0, '3600.00'),
(146, 152, 1, 0, '360.00'),
(147, 153, 1, 0, '37800.00'),
(148, 154, 1, 0, '24300.00'),
(149, 155, 1, 0, '45900.00'),
(150, 156, 1, 0, '32400.00'),
(151, 157, 1, 0, '4680.00'),
(152, 158, 1, 0, '5400.00'),
(153, 159, 1, 0, '27900.00'),
(154, 160, 1, 0, '2160.00'),
(155, 161, 1, 0, '0.00'),
(156, 162, 1, 0, '18000.00'),
(157, 163, 1, 0, '8640.00'),
(158, 164, 1, 0, '0.00'),
(159, 165, 1, 0, '5400.00'),
(160, 166, 1, 0, '2160.00'),
(161, 167, 1, 0, '450.00'),
(162, 168, 1, 0, '1170.00'),
(163, 169, 1, 0, '3420.00'),
(164, 170, 1, 0, '30600.00'),
(165, 171, 1, 0, '14400.00'),
(166, 172, 1, 0, '3060.00'),
(167, 173, 1, 0, '42840.00'),
(168, 174, 1, 0, '1170.00'),
(169, 175, 1, 0, '20700.00'),
(170, 176, 1, 0, '2250.00'),
(171, 177, 1, 0, '29169.00'),
(172, 178, 1, 0, '25200.00'),
(173, 179, 1, 0, '13050.00'),
(174, 180, 1, 0, '5760.00'),
(175, 181, 1, 0, '25200.00'),
(176, 182, 1, 0, '18000.00'),
(177, 183, 1, 0, '34200.00'),
(178, 184, 1, 0, '21600.00'),
(180, 186, 1, 0, '3240.00'),
(181, 187, 1, 0, '5040.00'),
(182, 188, 1, 0, '32400.00'),
(183, 189, 1, 0, '39060.00'),
(184, 190, 1, 0, '3600.00'),
(185, 191, 1, 0, '10800.00'),
(186, 192, 1, 0, '0.00'),
(187, 193, 1, 0, '19080.00'),
(188, 194, 1, 0, '720.00'),
(189, 195, 1, 0, '8820.00'),
(190, 196, 1, 0, '34380.00'),
(191, 197, 1, 0, '21600.00'),
(192, 198, 1, 0, '10980.00'),
(193, 199, 1, 0, '5400.00'),
(194, 200, 1, 0, '5760.00'),
(195, 201, 1, 0, '1080.00'),
(196, 202, 1, 0, '982.80'),
(197, 203, 1, 0, '1530.00'),
(198, 204, 1, 0, '25560.00'),
(199, 205, 1, 0, '3600.00'),
(200, 206, 1, 0, '40500.00'),
(201, 207, 1, 0, '43920.00'),
(202, 208, 1, 0, '18900.00'),
(203, 209, 1, 0, '9000.00'),
(204, 210, 1, 0, '21690.00'),
(205, 211, 1, 0, '43920.00'),
(206, 212, 1, 0, '20700.00'),
(207, 213, 1, 0, '45000.00'),
(208, 214, 1, 0, '49500.00'),
(209, 215, 1, 0, '5400.00'),
(210, 216, 1, 0, '2700.00'),
(211, 217, 1, 0, '5400.00'),
(212, 218, 1, 0, '2700.00'),
(213, 219, 1, 0, '41265.00'),
(214, 220, 1, 0, '102600.00'),
(215, 221, 1, 0, '810.00'),
(216, 222, 1, 0, '36000.00'),
(217, 223, 1, 0, '1170.00'),
(218, 224, 1, 0, '15300.00'),
(219, 225, 1, 0, '11700.00'),
(220, 226, 1, 0, '27360.00'),
(221, 227, 1, 0, '3600.00'),
(222, 228, 1, 0, '30600.00'),
(223, 229, 1, 0, '21420.00'),
(228, 234, 1, 0, '45720.00'),
(225, 231, 1, 0, '16200.00'),
(226, 232, 1, 0, '810.00'),
(227, 233, 1, 0, '9000.00'),
(236, 253, 1, 0, '84240.00'),
(237, 253, 1, 0, '84240.00'),
(238, 256, 1, 0, '50220.00'),
(239, 256, 1, 0, '50220.00'),
(240, 263, 1, 0, '76320.00'),
(241, 264, 1, 0, '-76320.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_item_lookups`
--

CREATE TABLE `ip_item_lookups` (
  `item_lookup_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL DEFAULT '',
  `item_description` longtext NOT NULL,
  `item_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_merchant_responses`
--

CREATE TABLE `ip_merchant_responses` (
  `merchant_response_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `merchant_response_successful` tinyint(1) DEFAULT 1,
  `merchant_response_date` date NOT NULL,
  `merchant_response_driver` varchar(35) NOT NULL,
  `merchant_response` varchar(255) NOT NULL,
  `merchant_response_reference` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_payments`
--

CREATE TABLE `ip_payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL DEFAULT 0,
  `payment_date` date NOT NULL,
  `payment_amount` decimal(20,2) DEFAULT NULL,
  `tds_deducted` varchar(40) DEFAULT NULL,
  `bank_charges` varchar(40) NOT NULL,
  `payment_note` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_payments`
--

INSERT INTO `ip_payments` (`payment_id`, `invoice_id`, `payment_method_id`, `payment_date`, `payment_amount`, `tds_deducted`, `bank_charges`, `payment_note`) VALUES
(1, 232, 1, '2022-10-03', '5310.00', '0', '0', ''),
(2, 233, 1, '2022-10-26', '25000.00', '0', '0', ''),
(3, 224, 1, '2022-10-28', '100300.00', '0', '0', ''),
(5, 233, 1, '2022-11-04', '22500.00', '0', '0', ''),
(6, 229, 1, '2022-11-05', '100000.00', '19000', '0', ''),
(7, 225, 1, '2022-11-05', '65000.00', '0', '0', ''),
(8, 233, 1, '2022-11-05', '1000.00', '200', '100', ''),
(9, 233, 1, '2022-11-07', '1500.00', '150', '0', ''),
(10, 231, 1, '2022-11-08', '90000.00', '20000', '10000', ''),
(11, 228, 1, '2022-11-08', '170000.00', '1000', '500', ''),
(12, 229, 1, '2022-11-08', '16000.00', '1000', '2000', ''),
(13, 227, 2, '2022-11-08', '18000.00', '2000', '0', ''),
(14, 226, 1, '2022-11-08', '15000.00', '0', '0', ''),
(15, 226, 1, '2022-11-08', '1000.00', '0', '0', ''),
(16, 226, 1, '2022-11-08', '1000.00', '0', '0', ''),
(17, 226, 1, '2023-01-23', '10000.00', '100', '500.00', ''),
(18, 196, 2, '2022-11-28', '225380.00', '0', '0', ''),
(19, 222, 2, '2022-11-28', '180000.00', '20000', '0', ''),
(20, 187, 1, '2022-12-02', '33040.00', '0', '0', ''),
(22, 226, 1, '2022-12-30', '1500.00', '0', '0', ''),
(21, 220, 2, '2022-12-26', '600000.00', '72000', '600', ''),
(28, 226, 1, '2023-01-28', '10400.00', '0', '100', ''),
(24, 226, 1, '2023-01-02', '2000.00', '100', '200', ''),
(27, 234, 3, '2023-01-25', '269748.00', '29972', '0', 'Payment done - NEFT'),
(29, 205, 1, '2023-03-10', '23600.00', '0', '0', ''),
(31, 223, 1, '2023-06-21', '100.00', '100', '70', ''),
(32, 223, 1, '2023-09-02', '7400.00', '10', '10', ''),
(33, 247, 1, '2023-09-26', '2000.00', '50', '50', 'Hello'),
(34, 221, 1, '2023-09-27', '5310.00', '0', '0', 'Hi'),
(35, 22, 1, '0000-00-00', '7080.00', '0', '0', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `ip_payment_custom`
--

CREATE TABLE `ip_payment_custom` (
  `payment_custom_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `payment_custom_fieldid` int(11) NOT NULL,
  `payment_custom_fieldvalue` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_payment_custom`
--

INSERT INTO `ip_payment_custom` (`payment_custom_id`, `payment_id`, `payment_custom_fieldid`, `payment_custom_fieldvalue`) VALUES
(1, 33, 6, 'INR'),
(2, 34, 6, 'INR');

-- --------------------------------------------------------

--
-- Table structure for table `ip_payment_methods`
--

CREATE TABLE `ip_payment_methods` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method_name` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_payment_methods`
--

INSERT INTO `ip_payment_methods` (`payment_method_id`, `payment_method_name`) VALUES
(1, 'Cash'),
(2, 'Credit Card'),
(3, 'Online Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `ip_products`
--

CREATE TABLE `ip_products` (
  `product_id` int(11) NOT NULL,
  `family_id` int(11) DEFAULT NULL,
  `product_sku` text DEFAULT NULL,
  `product_name` text DEFAULT NULL,
  `product_description` longtext NOT NULL,
  `product_price` decimal(20,2) DEFAULT NULL,
  `purchase_price` decimal(20,2) DEFAULT NULL,
  `provider_name` text DEFAULT NULL,
  `tax_rate_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `product_tariff` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_products`
--

INSERT INTO `ip_products` (`product_id`, `family_id`, `product_sku`, `product_name`, `product_description`, `product_price`, `purchase_price`, `provider_name`, `tax_rate_id`, `unit_id`, `product_tariff`) VALUES
(1, 2, 'FAB-001', 'Fabrics 001', 'This is a test description. Length: 5m.', '200.00', '150.00', 'Vendor', NULL, 1, 0),
(3, 1, 'GAR-002', 'Garment', 'This is a test description. Length: 5m.', '5000.00', '4000.00', 'suman stark', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_projects`
--

CREATE TABLE `ip_projects` (
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `project_name` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_projects`
--

INSERT INTO `ip_projects` (`project_id`, `client_id`, `project_name`) VALUES
(1, 45, 'Project #1');

-- --------------------------------------------------------

--
-- Table structure for table `ip_quotes`
--

CREATE TABLE `ip_quotes` (
  `quote_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `invoice_group_id` int(11) NOT NULL,
  `quote_status_id` tinyint(2) NOT NULL DEFAULT 1,
  `quote_date_created` date NOT NULL,
  `quote_date_modified` datetime NOT NULL,
  `quote_date_expires` date NOT NULL,
  `quote_status_approved` date NOT NULL,
  `quote_number` varchar(100) DEFAULT NULL,
  `quote_category` varchar(30) NOT NULL,
  `quote_discount_amount` decimal(20,2) DEFAULT NULL,
  `quote_discount_percent` decimal(20,2) DEFAULT NULL,
  `quote_url_key` char(32) NOT NULL,
  `quote_password` varchar(90) DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `quote_time_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_quotes`
--

INSERT INTO `ip_quotes` (`quote_id`, `invoice_id`, `user_id`, `client_id`, `invoice_group_id`, `quote_status_id`, `quote_date_created`, `quote_date_modified`, `quote_date_expires`, `quote_status_approved`, `quote_number`, `quote_category`, `quote_discount_amount`, `quote_discount_percent`, `quote_url_key`, `quote_password`, `notes`, `quote_time_created`) VALUES
(1, 256, 1, 12, 4, 2, '2020-07-17', '2023-10-05 10:51:34', '2020-08-01', '0000-00-00', 'AXM000001', '', '0.00', '0.00', 'mxeCQZqBzofTwyGUMgH5K3X7SpF6DtA4', NULL, '   Hello   ', '0000-00-00 00:00:00'),
(38, 0, 2, 165, 4, 1, '2023-07-11', '2023-07-11 07:16:56', '2023-07-26', '0000-00-00', 'QUO8', '', NULL, NULL, 'TEeCLQpdHcOv3FzNPsXtZ6rwSWyq57x2', '', '', '0000-00-00 00:00:00'),
(6, 241, 1, 19, 4, 3, '2022-12-22', '2023-07-25 13:24:37', '2022-12-22', '0000-00-00', 'AXM000006', '', '0.00', '0.00', 'GUBorSmgCtvx2IDL0kYdlQnWRc7VuN8p', NULL, '    \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                        ', '0000-00-00 00:00:00'),
(8, 0, 1, 63, 4, 3, '2021-03-16', '2023-02-07 12:39:14', '2021-03-31', '0000-00-00', 'AXM000008', '', '0.00', '0.00', 'Hw4PdNKOUXTGpa6xm8lZf1kgDBMF9EsI', NULL, '    \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                            \n                        ', '0000-00-00 00:00:00'),
(9, 105, 1, 77, 4, 4, '2021-05-05', '2022-11-08 07:51:32', '2021-05-20', '2022-11-08', 'AXM000009', '', '0.00', '0.00', 'WhJ8ljzG5MsyouwXIFip3RHEkrb9D2Of', '', '', '0000-00-00 00:00:00'),
(42, 0, 2, 45, 4, 1, '2023-09-14', '2023-09-13 06:32:48', '2023-09-29', '0000-00-00', 'QUO12', '', NULL, NULL, 'A6dFMHX2baLfEJN4zSgTnlWCktPxG0v7', NULL, '', '0000-00-00 00:00:00'),
(21, 0, 1, 125, 4, 4, '2022-04-20', '2022-11-07 09:00:52', '2022-05-05', '0000-00-00', 'AXM000021', '', '0.00', '0.00', 'x3H1MY7jaWEAiVvPwJr6tOkBTDomzq5L', '', '', '0000-00-00 00:00:00'),
(22, 0, 1, 127, 4, 1, '2022-04-29', '2022-04-29 10:56:18', '2022-05-14', '0000-00-00', 'AXM000022', '', '0.00', '0.00', 'j2ZAl1RdwcObBspnFPTq9iNXrIaSeoyG', '', '', '0000-00-00 00:00:00'),
(23, 0, 1, 127, 4, 1, '2022-04-29', '2022-04-29 11:00:27', '2022-05-14', '0000-00-00', 'AXM000023', '', '0.00', '0.00', 'GI21pBNbvOAJDzlmfTWkiewUo38Yxy6E', '', '', '0000-00-00 00:00:00'),
(24, 0, 1, 127, 4, 1, '2022-04-29', '2022-04-29 11:02:11', '2022-05-14', '0000-00-00', 'AXM000024', '', '0.00', '0.00', '6Ffiu1jSaGIXhJUwgV2cL8YAD9H5MrCE', '', '', '0000-00-00 00:00:00'),
(25, 213, 1, 144, 4, 1, '2022-07-05', '2022-07-05 08:31:20', '2022-07-20', '0000-00-00', 'AXM000025', '', '0.00', '0.00', 'cox4ruELCMmyOJD7AsehZb6zw1HvSFRf', '', '', '0000-00-00 00:00:00'),
(26, 0, 1, 109, 4, 1, '2023-01-20', '2023-01-20 05:44:02', '2023-01-31', '0000-00-00', 'AXM000026', '', '0.00', '0.00', '2e4fcoyjUlIRDsu1YZzANwxqpSGCHg0P', NULL, '    \n                        ', '0000-00-00 00:00:00'),
(27, 216, 1, 150, 4, 6, '2022-07-28', '2022-12-30 07:08:27', '2022-08-12', '0000-00-00', 'AXM000027', '', '0.00', '0.00', '81And39FpvTqIkG7sKPaSUZyre2tu0l6', NULL, '    \n                    \n                    \n                ', '0000-00-00 00:00:00'),
(28, 219, 1, 151, 4, 4, '2022-08-10', '2022-11-07 09:27:14', '2022-08-25', '2022-11-07', 'AXM000028', '', '0.00', '0.00', '4xBFKe8hMGRY92kNmEv3SrHgPDUqjWIl', '', '', '0000-00-00 00:00:00'),
(29, 0, 1, 154, 4, 4, '2022-09-01', '2022-11-04 06:10:20', '2022-09-16', '0000-00-00', 'AXM000029', '', '0.00', '0.00', '8UCrxVmuzG65PqDbvRQOj7YZf1Bal34d', '', '', '0000-00-00 00:00:00'),
(30, 0, 1, 150, 4, 4, '2022-09-02', '2022-11-07 11:47:58', '2022-09-17', '2022-11-07', 'AXM000030', '', '0.00', '0.00', 'yW3eFMDzB87cqoTm4aXkHOPgU6w5rdKv', '', 'Black creta', '0000-00-00 00:00:00'),
(39, 0, 2, 21, 4, 1, '2023-08-02', '2023-08-02 06:55:14', '2023-08-17', '0000-00-00', 'QUO9', '', NULL, NULL, 'i9XuTWO2atB3bhdZSngLKUYGerHpfwm6', NULL, '', '0000-00-00 00:00:00'),
(40, 0, 2, 174, 4, 4, '2023-08-24', '2023-09-30 19:19:15', '2023-09-08', '2023-09-30', 'QUO10', '', '0.00', '0.00', 'ZfiDI4CkdRPu3ngB67T2UWhJvAbVtz5x', NULL, '                                                                                        \n                            \n                            \n                            \n                            \n                            \n                            \n                        ', '0000-00-00 00:00:00'),
(61, 0, 1, 12, 4, 1, '2020-07-17', '2023-10-03 17:00:49', '0000-00-00', '0000-00-00', 'OCD0016', '', '0.00', '0.00', '', NULL, NULL, '0000-00-00 00:00:00'),
(36, 0, 2, 162, 4, 1, '2023-01-20', '2023-01-20 05:50:14', '2023-02-04', '0000-00-00', 'QUO6', '', '0.00', '0.00', 'ZrFifIM97b4EY0dP5xDNjUO1ymJvQwCc', NULL, '    \n                        ', '0000-00-00 00:00:00'),
(37, 0, 2, 21, 4, 1, '2023-07-11', '2023-07-11 07:09:32', '2023-07-26', '0000-00-00', 'QUO7', '', NULL, NULL, 'Enji6uBcC8TMeUH7wWhsZoVNv04FlS2I', '', '', '0000-00-00 00:00:00'),
(43, 0, 2, 6, 4, 1, '2023-09-13', '2023-09-15 13:35:07', '2023-09-28', '0000-00-00', 'QUO13', '', '0.00', '0.00', 'sS6Jo9xahyrF8b42MEHnuwCz3kjWeNTv', NULL, '    \n                        ', '0000-00-00 00:00:00'),
(44, 0, 4, 174, 4, 1, '2023-09-13', '2023-09-13 12:49:47', '2023-09-28', '0000-00-00', 'QUO14', '', NULL, NULL, '6IwkeP0WpBE2LbUi45D3GVmyRhSjMJsF', NULL, '', '0000-00-00 00:00:00'),
(45, 0, 4, 174, 4, 4, '2023-09-13', '2023-09-13 13:36:40', '2023-09-28', '0000-00-00', 'QUO15', '', '0.00', '0.00', 'Y8MhqA7lKiUX2bR3IuVGO1T9exBPZnsJ', NULL, '    \n                        ', '0000-00-00 00:00:00'),
(46, 0, 4, 174, 4, 1, '2023-09-13', '2023-09-13 13:03:00', '2023-09-28', '0000-00-00', 'QUO16', '', NULL, NULL, '8CYLQNFhlizaywr7nBoqXJcHPOSVpA6f', NULL, '', '0000-00-00 00:00:00'),
(47, 0, 4, 174, 4, 1, '2023-09-13', '2023-09-13 13:09:58', '2023-09-28', '0000-00-00', 'QUO17', '', NULL, NULL, 'VsSB5UXOqkR1bK49jP78G0pxDJiFHwhg', NULL, '', '0000-00-00 00:00:00'),
(48, 0, 2, 174, 4, 1, '2023-09-13', '2023-09-13 13:10:55', '2023-09-28', '0000-00-00', 'QUO18', '', NULL, NULL, 'TiGjlVbkdUetDm6az0oBPC2gFvuIAZXN', NULL, '', '0000-00-00 00:00:00'),
(49, 0, 4, 174, 4, 1, '2023-09-13', '2023-09-13 13:13:11', '2023-09-28', '0000-00-00', 'QUO19', '', NULL, NULL, 'VADZ1MSqHjuUwimO2tfeFR65YGnbBal8', NULL, '', '0000-00-00 00:00:00'),
(50, 0, 4, 174, 4, 1, '2023-09-13', '2023-09-13 13:14:46', '2023-09-28', '0000-00-00', 'QUO20', '', NULL, NULL, 'ITpSF1BkNjZyaovc8i5f0JLzg2OY3UWA', NULL, '', '0000-00-00 00:00:00'),
(51, 0, 4, 174, 4, 1, '2023-09-13', '2023-09-13 13:16:08', '2023-09-28', '0000-00-00', 'QUO21', '', '0.00', '0.00', 'F7zRhGy4BneDt6CvuX2YqI0bUxKVSjrc', NULL, '    \n                        ', '0000-00-00 00:00:00'),
(52, 0, 4, 174, 4, 1, '2023-09-13', '2023-09-13 13:26:43', '2023-09-28', '0000-00-00', 'QUO22', '', NULL, NULL, 'HMk4y783TFWALZu5mIjenEBQ90D6SRpx', NULL, '', '0000-00-00 00:00:00'),
(53, 0, 4, 174, 4, 1, '2023-09-14', '2023-09-14 06:21:56', '2023-09-29', '0000-00-00', 'QUO23', '', NULL, NULL, 'DVSyX98zJvdAWpK6eZOH0hf3xPR4B5bn', NULL, '', '0000-00-00 00:00:00'),
(56, 0, 2, 174, 4, 2, '2023-09-15', '2023-09-23 18:14:25', '2023-09-30', '0000-00-00', 'QUO24', '', '0.00', '0.00', 'XJ8bumaeWzg5pkPF6dwyUnZVv2NCqGx4', NULL, '                                \n                            \n                        ', '0000-00-00 00:00:00'),
(60, 0, 2, 163, 4, 2, '2023-09-25', '2023-09-25 18:14:00', '2023-10-26', '0000-00-00', 'OCD0015', '', '0.00', '0.00', '', NULL, '                                \n                        ', '0000-00-00 00:00:00'),
(59, 0, 2, 4, 4, 2, '2023-09-25', '2023-09-25 11:20:41', '2023-10-26', '0000-00-00', 'OCD00012', '', '0.00', '0.00', '', NULL, '                                \n                        ', '0000-00-00 00:00:00'),
(62, 0, 2, 177, 4, 1, '2023-10-04', '2023-10-04 12:42:42', '0000-00-00', '0000-00-00', 'OCD0016', '', '0.00', '0.00', '', NULL, NULL, '0000-00-00 00:00:00'),
(63, 0, 2, 163, 4, 2, '2023-10-04', '2023-10-04 18:06:04', '2023-11-01', '0000-00-00', 'OCD00024', '', '0.00', '0.00', '', NULL, '  ', '2023-10-04 17:54:01'),
(64, 0, 2, 10, 4, 1, '2023-10-04', '2023-10-04 17:57:15', '0000-00-00', '0000-00-00', NULL, '', '0.00', '0.00', '', NULL, NULL, '0000-00-00 00:00:00'),
(65, 0, 2, 90, 4, 1, '2023-10-04', '2023-10-04 18:04:56', '0000-00-00', '0000-00-00', 'OCD00025', '', '0.00', '0.00', '', NULL, NULL, '2023-10-04 18:04:56'),
(66, 0, 2, 163, 4, 1, '2023-10-04', '2023-10-04 18:07:22', '0000-00-00', '0000-00-00', 'OCD00026', '', '0.00', '0.00', '', NULL, NULL, '2023-10-04 18:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_amounts`
--

CREATE TABLE `ip_quote_amounts` (
  `quote_amount_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `quote_item_subtotal` decimal(20,2) DEFAULT NULL,
  `quote_item_tax_total` decimal(20,2) DEFAULT NULL,
  `quote_tax_total` decimal(20,2) DEFAULT NULL,
  `quote_total` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_quote_amounts`
--

INSERT INTO `ip_quote_amounts` (`quote_amount_id`, `quote_id`, `quote_item_subtotal`, `quote_item_tax_total`, `quote_tax_total`, `quote_total`) VALUES
(1, 1, '508000.00', '0.00', '182880.00', '690880.00'),
(41, 41, NULL, NULL, NULL, NULL),
(40, 40, '0.00', NULL, '0.00', '0.00'),
(39, 39, NULL, NULL, NULL, NULL),
(38, 38, NULL, NULL, NULL, NULL),
(6, 6, '155000.00', '0.00', '27900.00', '182900.00'),
(8, 8, '25000.00', '0.00', '0.00', '25000.00'),
(9, 9, '220000.00', '0.00', '0.00', '220000.00'),
(44, 44, NULL, NULL, NULL, NULL),
(37, 37, NULL, NULL, NULL, NULL),
(36, 36, '105000.00', '10850.00', '0.00', '115850.00'),
(21, 21, '20000.00', '0.00', '0.00', '20000.00'),
(22, 22, '40000.00', '0.00', '7200.00', '47200.00'),
(23, 23, '180000.00', '0.00', '32400.00', '212400.00'),
(24, 24, '220000.00', '0.00', '39600.00', '259600.00'),
(25, 25, '250000.00', '0.00', '45000.00', '295000.00'),
(26, 26, '155000.00', '0.00', '27900.00', '182900.00'),
(27, 27, '15000.00', '0.00', '2700.00', '17700.00'),
(28, 28, '229250.00', '0.00', '0.00', '229250.00'),
(29, 29, '35000.00', '0.00', '0.00', '35000.00'),
(30, 30, '12000.00', '0.00', '0.00', '12000.00'),
(43, 43, '1000.00', '50.00', '0.00', '1050.00'),
(42, 42, NULL, NULL, NULL, NULL),
(45, 45, '2000.00', '100.00', '0.00', '2100.00'),
(46, 46, NULL, NULL, NULL, NULL),
(47, 47, NULL, NULL, NULL, NULL),
(48, 48, NULL, NULL, NULL, NULL),
(49, 49, NULL, NULL, NULL, NULL),
(50, 50, NULL, NULL, NULL, NULL),
(51, 51, '0.00', NULL, '0.00', '0.00'),
(52, 52, NULL, NULL, NULL, NULL),
(53, 53, NULL, NULL, NULL, NULL),
(54, 54, NULL, NULL, NULL, NULL),
(55, 55, NULL, NULL, NULL, NULL),
(56, 56, '200.00', '10.00', '0.00', '210.00'),
(57, 57, NULL, NULL, NULL, NULL),
(58, 58, NULL, NULL, NULL, NULL),
(59, 59, '2000.00', '360.00', '0.00', '2360.00'),
(60, 60, '2000.00', '360.00', '0.00', '2360.00'),
(61, 61, '279000.00', '0.00', '0.00', '279000.00'),
(62, 62, NULL, NULL, NULL, NULL),
(63, 63, '0.00', '0.00', '0.00', '0.00'),
(64, 64, NULL, NULL, NULL, NULL),
(65, 65, NULL, NULL, NULL, NULL),
(66, 66, '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_custom`
--

CREATE TABLE `ip_quote_custom` (
  `quote_custom_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `quote_custom_fieldid` int(11) NOT NULL,
  `quote_custom_fieldvalue` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_quote_custom`
--

INSERT INTO `ip_quote_custom` (`quote_custom_id`, `quote_id`, `quote_custom_fieldid`, `quote_custom_fieldvalue`) VALUES
(1, 1, 7, 'Perfect quote'),
(2, 40, 7, ''),
(3, 61, 7, 'Perfect quote'),
(4, 63, 7, ''),
(5, 66, 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_items`
--

CREATE TABLE `ip_quote_items` (
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `item_tax_rate_id` int(11) NOT NULL,
  `item_product_id` int(11) DEFAULT NULL,
  `item_date_added` date NOT NULL,
  `item_name` text DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `item_quantity` decimal(20,2) DEFAULT NULL,
  `item_price` decimal(20,2) DEFAULT NULL,
  `item_category` varchar(40) NOT NULL,
  `item_discount_amount` decimal(20,2) DEFAULT NULL,
  `item_order` int(2) NOT NULL DEFAULT 0,
  `item_product_unit` varchar(50) DEFAULT NULL,
  `item_product_unit_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_quote_items`
--

INSERT INTO `ip_quote_items` (`item_id`, `quote_id`, `item_tax_rate_id`, `item_product_id`, `item_date_added`, `item_name`, `item_description`, `item_quantity`, `item_price`, `item_category`, `item_discount_amount`, `item_order`, `item_product_unit`, `item_product_unit_id`) VALUES
(1, 1, 0, 0, '2020-07-17', 'Llumar Platinum PPF', '- High gloss polish.\n- Paint protection film install.\n- Interior steam clean.\n- Ceramic on PPF', '2.00', '229000.00', 'Axiom', '0.00', 1, NULL, NULL),
(2, 1, 0, 0, '2020-07-17', 'Sun film.', 'Heat rejection black tint 45%.\nHeat rejection wind shield film 70%', '2.00', '25000.00', 'Axiom', '0.00', 2, NULL, NULL),
(61, 45, 2, NULL, '2023-09-13', 'hello', 'hhhh', '1.00', '2000.00', 'Axiom', NULL, 1, NULL, NULL),
(62, 56, 2, 0, '2023-09-15', 'UI Design', '', '1.00', '200.00', 'Axiom', '0.00', 1, NULL, NULL),
(63, 43, 2, NULL, '2023-09-15', 'hello', 'welcome', '1.00', '1000.00', 'Axiom', NULL, 1, NULL, NULL),
(15, 6, 0, NULL, '2020-10-08', 'Avery Dennison Satin black wrap.', '- Disassemble and assembly of parts.\n- Material charges.\n-Installation charges.', '1.00', '145000.00', 'Axiom', NULL, 1, NULL, NULL),
(16, 6, 0, NULL, '2020-10-08', 'Badges and grill chrome delete.', '- Front grill damage repair and paint.\n- Other badges chrome delete.', '1.00', '10000.00', 'Axiom', NULL, 2, NULL, NULL),
(18, 8, 0, NULL, '2021-03-16', 'Llumar Sun film', 'Sides and rear heat rejection - 35% or 20% or 5% visibility ', '1.00', '8000.00', 'Axiom', NULL, 1, NULL, NULL),
(19, 8, 0, NULL, '2021-03-16', 'Super cool ', 'Windshield heat rejection - 70% visibility', '1.00', '17000.00', 'Axiom', NULL, 2, NULL, NULL),
(20, 9, 0, NULL, '2021-05-05', 'Llumar Platinum PPF (Top end)', '- Decontamination wash and high gloss paint correction.\n- PPF install.\n- Ceramic on PPF.\n- Interior germ clean.', '1.00', '220000.00', ' axiom', NULL, 1, NULL, NULL),
(58, 36, 2, NULL, '2023-01-20', 'Keyboard', 'All type of keyboards available.', '10.00', '2500.00', 'Axiom', NULL, 1, NULL, NULL),
(59, 36, 3, NULL, '2023-01-20', 'Mouse', 'All type of mouse available.', '20.00', '4000.00', 'invoice', NULL, 2, NULL, NULL),
(77, 61, 0, NULL, '0000-00-00', 'Llumar Platinum PPF', '- High gloss polish.\n- Paint protection film install.\n- Interior steam clean.\n- Ceramic on PPF', '1.00', '229000.00', '', NULL, 1, NULL, NULL),
(42, 21, 0, NULL, '2022-04-20', 'Paint protection film', 'Removal and replacement of PPF for Innova Crysta.\nTN07CY3173', '1.00', '20000.00', 'suman', NULL, 1, NULL, NULL),
(43, 22, 0, NULL, '2022-04-29', 'Ceramic coating', '- Decontamination wash.\n- Paint correction.\n- Ceramic coating application.\n- Curing', '1.00', '40000.00', '', NULL, 1, NULL, NULL),
(44, 23, 0, NULL, '2022-04-29', 'Mid range PPF', '- Decontamination wash.\n- Paint correction.\n- Trim removal and assembly.\n- PPF install.\n- Ceramic coating on PPF', '1.00', '180000.00', '', NULL, 1, NULL, NULL),
(45, 24, 0, NULL, '2022-04-29', 'Top end PPF', '- Decontamination wash.\n- Paint correction.\n- PPF install.\n- Ceramic coating on PPF.', '1.00', '220000.00', '', NULL, 1, NULL, NULL),
(46, 25, 0, NULL, '2022-07-05', 'GSWF defender Platinum', '- Paint correction \n- PPF install \n- Ceramic on ppf', '1.00', '220000.00', '', NULL, 1, NULL, NULL),
(47, 25, 0, NULL, '2022-07-05', '3m CR series', 'All glasses ', '1.00', '30000.00', '', NULL, 2, NULL, NULL),
(48, 26, 0, NULL, '2022-07-18', 'Super guard Pro', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '160000.00', 'Axiom', '30000.00', 1, NULL, NULL),
(49, 26, 0, NULL, '2022-07-18', 'Super cool 70', 'Front, sides and rear window film install.', '1.00', '30000.00', 'Axiom', '5000.00', 2, NULL, NULL),
(50, 27, 0, NULL, '2022-07-28', 'Exterior paint correction', '- Decontamination wash.\n- Paint correction.\n- Exterior detail.\n- Interior deep cleaning.\n- Engine bay and boot clean up.', '1.00', '15000.00', '', NULL, 1, NULL, NULL),
(51, 28, 0, NULL, '2022-08-10', 'Defender Platinum PPF', '- Paint correction.\n- PPF install.\n- Ceramic on PPF', '1.00', '220000.00', 'suman', '30000.00', 1, NULL, NULL),
(52, 28, 0, NULL, '2022-08-10', 'CR70', 'Sunfilm application on 5 small glasses and 3 big glasses', '1.00', '39250.00', 'suman', NULL, 2, NULL, NULL),
(53, 29, 0, NULL, '2022-09-01', 'Damage repair and painting', '- Repair and repaint of fender and door.', '1.00', '35000.00', 'suman', NULL, 1, NULL, NULL),
(54, 30, 0, NULL, '2022-09-02', 'Exterior paint correction and Interior deep cleaning', '- Exterior paint correction.\n- Interior deep cleaning.\n- Overall car detail.', '1.00', '12000.00', 'suman', NULL, 1, NULL, NULL),
(64, 55, 0, 0, '0000-00-00', '', '', '0.00', '0.00', 'Axiom', '0.00', 1, NULL, NULL),
(65, 55, 0, 0, '0000-00-00', '', '', '0.00', '0.00', 'Axiom', '0.00', 1, NULL, NULL),
(66, 55, 0, 0, '0000-00-00', '', '', '0.00', '0.00', 'Axiom', '0.00', 1, NULL, NULL),
(67, 55, 2, 0, '0000-00-00', 'hello', 'welcome', '1.00', '2000.00', 'Axiom', '0.00', 1, NULL, NULL),
(68, 55, 2, 0, '0000-00-00', 'hello', 'welcome', '1.00', '2000.00', 'Axiom', '0.00', 1, NULL, NULL),
(69, 58, 0, 0, '0000-00-00', 'hello', 'welcome', '1.00', '1000.00', 'Axiom', '0.00', 1, NULL, NULL),
(70, 59, 1, 0, '0000-00-00', 'hello', '', '1.00', '2000.00', 'Axiom', '0.00', 1, NULL, NULL),
(71, 60, 1, 0, '0000-00-00', 'hello', 'welcome', '2.00', '1000.00', 'Axiom', '0.00', 1, NULL, NULL),
(73, 54, 0, 0, '0000-00-00', 'book', 'All types', '1.00', '2000.00', 'Axiom', '0.00', 1, NULL, NULL),
(78, 61, 0, NULL, '0000-00-00', 'Sun film.', 'Heat rejection black tint 45%.\nHeat rejection wind shield film 70%', '2.00', '25000.00', '', NULL, 2, NULL, NULL),
(79, 63, 0, 0, '0000-00-00', '', '', '0.00', '0.00', 'Axiom', '0.00', 1, NULL, NULL),
(80, 66, 0, NULL, '0000-00-00', '', '', '0.00', '0.00', '', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_item_amounts`
--

CREATE TABLE `ip_quote_item_amounts` (
  `item_amount_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_subtotal` decimal(20,2) DEFAULT NULL,
  `item_tax_total` decimal(20,2) DEFAULT NULL,
  `item_discount` decimal(20,2) DEFAULT NULL,
  `item_total` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_quote_item_amounts`
--

INSERT INTO `ip_quote_item_amounts` (`item_amount_id`, `item_id`, `item_subtotal`, `item_tax_total`, `item_discount`, `item_total`) VALUES
(1, 1, '458000.00', '0.00', '0.00', '458000.00'),
(2, 2, '50000.00', '0.00', '0.00', '50000.00'),
(63, 63, '1000.00', '50.00', '0.00', '1050.00'),
(62, 62, '200.00', '10.00', '0.00', '210.00'),
(61, 61, '2000.00', '100.00', '0.00', '2100.00'),
(15, 15, '145000.00', '0.00', '0.00', '145000.00'),
(16, 16, '10000.00', '0.00', '0.00', '10000.00'),
(18, 18, '8000.00', '0.00', '0.00', '8000.00'),
(19, 19, '17000.00', '0.00', '0.00', '17000.00'),
(20, 20, '220000.00', '0.00', '0.00', '220000.00'),
(59, 59, '80000.00', '9600.00', '0.00', '89600.00'),
(58, 58, '25000.00', '1250.00', '0.00', '26250.00'),
(77, 77, '229000.00', '0.00', '0.00', '229000.00'),
(42, 42, '20000.00', '0.00', '0.00', '20000.00'),
(43, 43, '40000.00', '0.00', '0.00', '40000.00'),
(44, 44, '180000.00', '0.00', '0.00', '180000.00'),
(45, 45, '220000.00', '0.00', '0.00', '220000.00'),
(46, 46, '220000.00', '0.00', '0.00', '220000.00'),
(47, 47, '30000.00', '0.00', '0.00', '30000.00'),
(48, 48, '160000.00', '0.00', '30000.00', '130000.00'),
(49, 49, '30000.00', '0.00', '5000.00', '25000.00'),
(50, 50, '15000.00', '0.00', '0.00', '15000.00'),
(51, 51, '220000.00', '0.00', '30000.00', '190000.00'),
(52, 52, '39250.00', '0.00', '0.00', '39250.00'),
(53, 53, '35000.00', '0.00', '0.00', '35000.00'),
(54, 54, '12000.00', '0.00', '0.00', '12000.00'),
(64, 64, '0.00', '0.00', '0.00', '0.00'),
(65, 65, '0.00', '0.00', '0.00', '0.00'),
(66, 66, '0.00', '0.00', '0.00', '0.00'),
(67, 67, '2000.00', '100.00', '0.00', '2100.00'),
(68, 68, '2000.00', '100.00', '0.00', '2100.00'),
(69, 69, '1000.00', '0.00', '0.00', '1000.00'),
(70, 70, '2000.00', '360.00', '0.00', '2360.00'),
(71, 71, '2000.00', '360.00', '0.00', '2360.00'),
(78, 78, '50000.00', '0.00', '0.00', '50000.00'),
(73, 73, '2000.00', '0.00', '0.00', '2000.00'),
(79, 79, '0.00', '0.00', '0.00', '0.00'),
(80, 80, '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_quote_tax_rates`
--

CREATE TABLE `ip_quote_tax_rates` (
  `quote_tax_rate_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `tax_rate_id` int(11) NOT NULL,
  `include_item_tax` int(1) NOT NULL DEFAULT 0,
  `quote_tax_rate_amount` decimal(20,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_quote_tax_rates`
--

INSERT INTO `ip_quote_tax_rates` (`quote_tax_rate_id`, `quote_id`, `tax_rate_id`, `include_item_tax`, `quote_tax_rate_amount`) VALUES
(1, 1, 1, 0, '91440.00'),
(6, 6, 1, 0, '27900.00'),
(9, 9, 1, 0, '39600.00'),
(31, 1, 1, 0, '91440.00'),
(21, 21, 1, 0, '3600.00'),
(22, 22, 1, 0, '7200.00'),
(23, 23, 1, 0, '32400.00'),
(24, 24, 1, 0, '39600.00'),
(25, 25, 1, 0, '45000.00'),
(26, 26, 1, 0, '27900.00'),
(27, 27, 1, 0, '2700.00'),
(28, 28, 1, 0, '41265.00'),
(29, 29, 1, 0, '6300.00'),
(30, 30, 1, 0, '2160.00'),
(32, 40, 2, 0, '0.00'),
(33, 61, 1, 0, '50220.00'),
(34, 61, 1, 0, '50220.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_sessions`
--

CREATE TABLE `ip_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_settings`
--

CREATE TABLE `ip_settings` (
  `setting_id` int(11) NOT NULL,
  `setting_key` varchar(50) NOT NULL,
  `setting_value` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_settings`
--

INSERT INTO `ip_settings` (`setting_id`, `setting_key`, `setting_value`) VALUES
(19, 'default_language', 'en'),
(20, 'date_format', 'd/m/Y'),
(21, 'currency_symbol', '₹'),
(22, 'currency_symbol_placement', 'before'),
(23, 'currency_code', '0'),
(24, 'invoices_due_after', '30'),
(25, 'quotes_expire_after', '15'),
(26, 'default_invoice_group', '3'),
(27, 'default_quote_group', '4'),
(28, 'thousands_separator', ','),
(29, 'decimal_point', '.'),
(30, 'cron_key', 'JlEZwNPnb4Ha6Wmz'),
(31, 'tax_rate_decimal_places', '2'),
(32, 'pdf_invoice_template', 'Default'),
(33, 'pdf_invoice_template_paid', 'Default'),
(34, 'pdf_invoice_template_overdue', 'Default'),
(35, 'pdf_quote_template', ''),
(36, 'public_invoice_template', 'Default_Web'),
(37, 'public_quote_template', 'Default_Web'),
(38, 'disable_sidebar', '1'),
(39, 'read_only_toggle', '4'),
(40, 'invoice_pre_password', ''),
(41, 'quote_pre_password', ''),
(42, 'email_pdf_attachment', '1'),
(43, 'generate_invoice_number_for_draft', '0'),
(44, 'generate_quote_number_for_draft', '1'),
(45, 'sumex', '0'),
(46, 'sumex_sliptype', '1'),
(47, 'sumex_canton', '0'),
(48, 'system_theme', 'billite'),
(49, 'default_hourly_rate', '0.00'),
(50, 'projects_enabled', '1'),
(51, 'pdf_quote_footer', ''),
(52, 'first_day_of_week', '0'),
(53, 'default_country', 'IN'),
(54, 'default_list_limit', '25'),
(55, 'number_format', 'number_format_us_uk'),
(56, 'quote_overview_period', 'this-month'),
(57, 'invoice_overview_period', 'this-month'),
(58, 'disable_quickactions', '0'),
(59, 'custom_title', 'Billite'),
(60, 'monospace_amounts', '0'),
(61, 'reports_in_new_tab', '0'),
(62, 'bcc_mails_to_admin', '0'),
(63, 'default_invoice_terms', ''),
(64, 'invoice_default_payment_method', ''),
(65, 'mark_invoices_sent_pdf', '1'),
(66, 'include_zugferd', '0'),
(67, 'pdf_watermark', '0'),
(68, 'email_invoice_template', '1'),
(69, 'email_invoice_template_paid', '1'),
(70, 'email_invoice_template_overdue', ''),
(71, 'pdf_invoice_footer', 'Powered By Billite'),
(72, 'automatic_email_on_recur', '0'),
(73, 'sumex_role', '0'),
(74, 'sumex_place', '0'),
(75, 'default_quote_notes', ''),
(76, 'mark_quotes_sent_pdf', '0'),
(77, 'email_quote_template', ''),
(78, 'default_invoice_tax_rate', ''),
(79, 'default_item_tax_rate', ''),
(80, 'default_include_item_tax', ''),
(81, 'email_send_method', 'smtp'),
(82, 'smtp_server_address', 'smtp.sendgrid.net'),
(83, 'smtp_mail_from', 'info@billite.in'),
(84, 'smtp_authentication', '1'),
(85, 'smtp_username', 'apikey'),
(86, 'smtp_port', '465'),
(87, 'smtp_security', 'ssl'),
(88, 'smtp_verify_certs', '1'),
(89, 'enable_online_payments', '1'),
(90, 'gateway_authorizenet_aim_enabled', '1'),
(91, 'gateway_authorizenet_aim_apiLoginId', ''),
(92, 'gateway_authorizenet_aim_transactionKey', ''),
(93, 'gateway_authorizenet_aim_testMode', '1'),
(94, 'gateway_authorizenet_aim_developerMode', '1'),
(95, 'gateway_authorizenet_aim_currency', 'ARS'),
(96, 'gateway_authorizenet_aim_payment_method', ''),
(97, 'gateway_authorizenet_sim_enabled', '1'),
(98, 'gateway_authorizenet_sim_apiLoginId', ''),
(99, 'gateway_authorizenet_sim_transactionKey', ''),
(100, 'gateway_authorizenet_sim_testMode', '1'),
(101, 'gateway_authorizenet_sim_developerMode', '1'),
(102, 'gateway_authorizenet_sim_currency', 'ARS'),
(103, 'gateway_authorizenet_sim_payment_method', ''),
(104, 'gateway_buckaroo_ideal_enabled', '1'),
(105, 'gateway_buckaroo_ideal_websiteKey', ''),
(106, 'gateway_buckaroo_ideal_testMode', '1'),
(107, 'gateway_buckaroo_ideal_currency', 'ARS'),
(108, 'gateway_buckaroo_ideal_payment_method', ''),
(109, 'gateway_buckaroo_paypal_enabled', '1'),
(110, 'gateway_buckaroo_paypal_websiteKey', ''),
(111, 'gateway_buckaroo_paypal_testMode', '1'),
(112, 'gateway_buckaroo_paypal_currency', 'ARS'),
(113, 'gateway_buckaroo_paypal_payment_method', ''),
(114, 'gateway_cardsave_enabled', '1'),
(115, 'gateway_cardsave_merchantId', ''),
(116, 'gateway_cardsave_currency', 'ARS'),
(117, 'gateway_cardsave_payment_method', ''),
(118, 'gateway_coinbase_enabled', '1'),
(119, 'gateway_coinbase_apiKey', ''),
(120, 'gateway_coinbase_accountId', ''),
(121, 'gateway_coinbase_currency', 'ARS'),
(122, 'gateway_coinbase_payment_method', ''),
(123, 'gateway_eway_rapid_enabled', '1'),
(124, 'gateway_eway_rapid_apiKey', ''),
(125, 'gateway_eway_rapid_testMode', '1'),
(126, 'gateway_eway_rapid_currency', 'ARS'),
(127, 'gateway_eway_rapid_payment_method', ''),
(128, 'gateway_firstdata_connect_enabled', '1'),
(129, 'gateway_firstdata_connect_storeId', ''),
(130, 'gateway_firstdata_connect_testMode', '1'),
(131, 'gateway_firstdata_connect_currency', 'ARS'),
(132, 'gateway_firstdata_connect_payment_method', ''),
(133, 'gateway_gocardless_enabled', '1'),
(134, 'gateway_gocardless_appId', ''),
(135, 'gateway_gocardless_merchantId', ''),
(136, 'gateway_gocardless_accessToken', ''),
(137, 'gateway_gocardless_testMode', '1'),
(138, 'gateway_gocardless_currency', 'ARS'),
(139, 'gateway_gocardless_payment_method', ''),
(140, 'gateway_migs_threeparty_enabled', '1'),
(141, 'gateway_migs_threeparty_merchantId', ''),
(142, 'gateway_migs_threeparty_merchantAccessCode', ''),
(143, 'gateway_migs_threeparty_secureHash', ''),
(144, 'gateway_migs_threeparty_currency', 'ARS'),
(145, 'gateway_migs_threeparty_payment_method', ''),
(146, 'gateway_migs_twoparty_enabled', '1'),
(147, 'gateway_migs_twoparty_merchantId', ''),
(148, 'gateway_migs_twoparty_merchantAccessCode', ''),
(149, 'gateway_migs_twoparty_secureHash', ''),
(150, 'gateway_migs_twoparty_currency', 'ARS'),
(151, 'gateway_migs_twoparty_payment_method', ''),
(152, 'gateway_mollie_enabled', '1'),
(153, 'gateway_mollie_apiKey', ''),
(154, 'gateway_mollie_currency', 'ARS'),
(155, 'gateway_mollie_payment_method', ''),
(156, 'gateway_multisafepay_enabled', '1'),
(157, 'gateway_multisafepay_accountId', ''),
(158, 'gateway_multisafepay_siteId', ''),
(159, 'gateway_multisafepay_siteCode', ''),
(160, 'gateway_multisafepay_testMode', '1'),
(161, 'gateway_multisafepay_currency', 'ARS'),
(162, 'gateway_multisafepay_payment_method', ''),
(163, 'gateway_netaxept_enabled', '1'),
(164, 'gateway_netaxept_merchantId', ''),
(165, 'gateway_netaxept_testMode', '1'),
(166, 'gateway_netaxept_currency', 'ARS'),
(167, 'gateway_netaxept_payment_method', ''),
(168, 'gateway_netbanx_enabled', '1'),
(169, 'gateway_netbanx_accountNumber', ''),
(170, 'gateway_netbanx_storeId', ''),
(171, 'gateway_netbanx_testMode', '1'),
(172, 'gateway_netbanx_currency', 'ARS'),
(173, 'gateway_netbanx_payment_method', ''),
(174, 'gateway_payfast_enabled', '1'),
(175, 'gateway_payfast_merchantId', ''),
(176, 'gateway_payfast_merchantKey', ''),
(177, 'gateway_payfast_pdtKey', ''),
(178, 'gateway_payfast_testMode', '1'),
(179, 'gateway_payfast_currency', 'ARS'),
(180, 'gateway_payfast_payment_method', ''),
(181, 'gateway_payflow_pro_enabled', '1'),
(182, 'gateway_payflow_pro_username', ''),
(183, 'gateway_payflow_pro_vendor', ''),
(184, 'gateway_payflow_pro_partner', ''),
(185, 'gateway_payflow_pro_testMode', '1'),
(186, 'gateway_payflow_pro_currency', 'ARS'),
(187, 'gateway_payflow_pro_payment_method', ''),
(188, 'gateway_paymentexpress_pxpay_enabled', '1'),
(189, 'gateway_paymentexpress_pxpay_username', ''),
(190, 'gateway_paymentexpress_pxpay_pxPostUsername', ''),
(191, 'gateway_paymentexpress_pxpay_testMode', '1'),
(192, 'gateway_paymentexpress_pxpay_currency', 'ARS'),
(193, 'gateway_paymentexpress_pxpay_payment_method', ''),
(194, 'gateway_paymentexpress_pxpost_enabled', '1'),
(195, 'gateway_paymentexpress_pxpost_username', ''),
(196, 'gateway_paymentexpress_pxpost_testMode', '1'),
(197, 'gateway_paymentexpress_pxpost_currency', 'ARS'),
(198, 'gateway_paymentexpress_pxpost_payment_method', ''),
(199, 'gateway_paypal_express_enabled', '1'),
(200, 'gateway_paypal_express_username', ''),
(201, 'gateway_paypal_express_testMode', '1'),
(202, 'gateway_paypal_express_currency', 'ARS'),
(203, 'gateway_paypal_express_payment_method', ''),
(204, 'gateway_paypal_pro_enabled', '1'),
(205, 'gateway_paypal_pro_username', ''),
(206, 'gateway_paypal_pro_signature', ''),
(207, 'gateway_paypal_pro_testMode', '1'),
(208, 'gateway_paypal_pro_currency', 'ARS'),
(209, 'gateway_paypal_pro_payment_method', ''),
(210, 'gateway_pin_enabled', '1'),
(211, 'gateway_pin_testMode', '1'),
(212, 'gateway_pin_currency', 'ARS'),
(213, 'gateway_pin_payment_method', ''),
(214, 'gateway_sagepay_direct_enabled', '1'),
(215, 'gateway_sagepay_direct_vendor', ''),
(216, 'gateway_sagepay_direct_testMode', '1'),
(217, 'gateway_sagepay_direct_referrerId', ''),
(218, 'gateway_sagepay_direct_currency', 'ARS'),
(219, 'gateway_sagepay_direct_payment_method', ''),
(220, 'gateway_sagepay_server_enabled', '1'),
(221, 'gateway_sagepay_server_vendor', ''),
(222, 'gateway_sagepay_server_testMode', '1'),
(223, 'gateway_sagepay_server_referrerId', ''),
(224, 'gateway_sagepay_server_currency', 'ARS'),
(225, 'gateway_sagepay_server_payment_method', ''),
(226, 'gateway_securepay_directpost_enabled', '1'),
(227, 'gateway_securepay_directpost_merchantId', ''),
(228, 'gateway_securepay_directpost_testMode', '1'),
(229, 'gateway_securepay_directpost_currency', 'ARS'),
(230, 'gateway_securepay_directpost_payment_method', ''),
(231, 'gateway_stripe_enabled', '1'),
(232, 'gateway_stripe_currency', 'ARS'),
(233, 'gateway_stripe_payment_method', ''),
(234, 'gateway_targetpay_directebanking_enabled', '1'),
(235, 'gateway_targetpay_directebanking_subAccountId', ''),
(236, 'gateway_targetpay_directebanking_currency', 'ARS'),
(237, 'gateway_targetpay_directebanking_payment_method', ''),
(238, 'gateway_targetpay_ideal_enabled', '1'),
(239, 'gateway_targetpay_ideal_subAccountId', ''),
(240, 'gateway_targetpay_ideal_currency', 'ARS'),
(241, 'gateway_targetpay_ideal_payment_method', ''),
(242, 'gateway_targetpay_mrcash_enabled', '1'),
(243, 'gateway_targetpay_mrcash_subAccountId', ''),
(244, 'gateway_targetpay_mrcash_currency', 'ARS'),
(245, 'gateway_targetpay_mrcash_payment_method', ''),
(246, 'gateway_twocheckout_enabled', '1'),
(247, 'gateway_twocheckout_accountNumber', ''),
(248, 'gateway_twocheckout_testMode', '1'),
(249, 'gateway_twocheckout_currency', 'ARS'),
(250, 'gateway_twocheckout_payment_method', ''),
(251, 'gateway_worldpay_enabled', '1'),
(252, 'gateway_worldpay_installationId', ''),
(253, 'gateway_worldpay_accountId', ''),
(254, 'gateway_worldpay_testMode', '1'),
(255, 'gateway_worldpay_currency', 'ARS'),
(256, 'gateway_worldpay_payment_method', ''),
(257, 'enable_permissive_search_clients', '1'),
(258, 'category', 'Axiom, , Customer_Service, '),
(259, 'smtp_password', 'cQW6NjjpNFx938J0T/zdKdfSeFN/krKZBNKjdUX6HOVESMbSthXVfdDWy99TVEiaUEHgLayszTuxqWISyF++5IO9dksLpB9JKcRtnIyjU74Fye7bXA=='),
(260, 'site_mode', 'Light Mode'),
(261, 'item_rate_tax_inclusion', '1'),
(262, 'total_tax_or_item_tax', '0'),
(263, 'invoice_logo', 'Billite_Logo_(monogram)_PNG.png'),
(264, 'default_hourly_rate_field_is_amount', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ip_tasks`
--

CREATE TABLE `ip_tasks` (
  `task_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` text DEFAULT NULL,
  `task_description` longtext NOT NULL,
  `task_price` decimal(20,2) DEFAULT NULL,
  `task_finish_date` date NOT NULL,
  `task_status` tinyint(1) NOT NULL,
  `tax_rate_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_tasks`
--

INSERT INTO `ip_tasks` (`task_id`, `project_id`, `task_name`, `task_description`, `task_price`, `task_finish_date`, `task_status`, `tax_rate_id`) VALUES
(1, 1, 'hi', 'hi', '1000.00', '2023-03-11', 3, 1),
(3, 1, 'suman', 'Hello', '100000.00', '2023-03-26', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ip_tax_rates`
--

CREATE TABLE `ip_tax_rates` (
  `tax_rate_id` int(11) NOT NULL,
  `tax_rate_name` text DEFAULT NULL,
  `tax_rate_percent` decimal(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_tax_rates`
--

INSERT INTO `ip_tax_rates` (`tax_rate_id`, `tax_rate_name`, `tax_rate_percent`) VALUES
(1, 'GST18', '18.00'),
(2, 'GST5', '5.00'),
(3, 'GST12', '12.00'),
(4, 'GST28', '28.00');

-- --------------------------------------------------------

--
-- Table structure for table `ip_units`
--

CREATE TABLE `ip_units` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(50) DEFAULT NULL,
  `unit_name_plrl` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_units`
--

INSERT INTO `ip_units` (`unit_id`, `unit_name`, `unit_name_plrl`) VALUES
(1, 'Meter', 'Meterss');

-- --------------------------------------------------------

--
-- Table structure for table `ip_uploads`
--

CREATE TABLE `ip_uploads` (
  `upload_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `url_key` char(32) NOT NULL,
  `file_name_original` longtext NOT NULL,
  `file_name_new` longtext NOT NULL,
  `uploaded_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_uploads`
--

INSERT INTO `ip_uploads` (`upload_id`, `client_id`, `url_key`, `file_name_original`, `file_name_new`, `uploaded_date`) VALUES
(43, 151, 'lzJtI1eT7vXkHOh5aw8K0bQCg6B3mP2c', 'skittle-02.gif', 'lzJtI1eT7vXkHOh5aw8K0bQCg6B3mP2c_skittle-02.gif', '2022-11-25'),
(38, 152, 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6', 'eye.py', 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6_eye.py', '2022-11-17'),
(42, 82, '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz', 'Sequence_01.mp4', '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz_Sequence_01.mp4', '2022-11-18'),
(35, 152, 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6', '1662664901466.jpeg', 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6_1662664901466.jpeg', '2022-11-17'),
(36, 152, 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6', '12th.pdf', 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6_12th.pdf', '2022-11-17'),
(37, 152, 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6', '30_Minutes_of_Rain_and_Thunderstorm_Sounds_For_Focus,_Relaxing_and_Sleep_⛈️_Epidemic_ASMR.mp4', 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6_30_Minutes_of_Rain_and_Thunderstorm_Sounds_For_Focus,_Relaxing_and_Sleep_⛈️_Epidemic_ASMR.mp4', '2022-11-17'),
(30, 151, 'lzJtI1eT7vXkHOh5aw8K0bQCg6B3mP2c', 'Screenshot_(8).png', 'lzJtI1eT7vXkHOh5aw8K0bQCg6B3mP2c_Screenshot_(8).png', '2022-11-17'),
(34, 82, '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz', 'Screenshot_(8).png', '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz_Screenshot_(8).png', '2022-11-17'),
(29, 109, 'gvwHIslzaXBm0VdM6LPWfy5etjcoCGkn', 'Screenshot_(8).png', 'gvwHIslzaXBm0VdM6LPWfy5etjcoCGkn_Screenshot_(8).png', '2022-11-17'),
(31, 140, 'GHdqCZX9U7KIwe5JxRPphubYn3QSELTV', 'Screenshot_(8).png', 'GHdqCZX9U7KIwe5JxRPphubYn3QSELTV_Screenshot_(8).png', '2022-11-17'),
(33, 152, 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6', 'Screenshot_(8).png', 'WDGfvdxm7hQnLYiPVoTlMUsgNzyXb1I6_Screenshot_(8).png', '2022-11-17'),
(23, 153, 'DT4CkJlFNHM5ZEe30GLyrXUYcpfVgOWQ', 'Screenshot_(8).png', 'DT4CkJlFNHM5ZEe30GLyrXUYcpfVgOWQ_Screenshot_(8).png', '2022-11-17'),
(41, 82, '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz', 'LRM_EXPORT_491650538143468_20191118_202128676.jpeg', '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz_LRM_EXPORT_491650538143468_20191118_202128676.jpeg', '2022-11-18'),
(44, 109, 'gvwHIslzaXBm0VdM6LPWfy5etjcoCGkn', 'skittle-02.gif', 'gvwHIslzaXBm0VdM6LPWfy5etjcoCGkn_skittle-02.gif', '2022-11-25'),
(45, 82, '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz', 'Billite-todo.png', '34EThJYtDKmLRAMUdPSZ09bNyOBVp7vz_Billite-todo.png', '2022-12-28'),
(46, 162, 'Jmf51uSGPI3UNCc7lDFdMwpkvy0AZ8nq', 'Proposal.pdf', 'Jmf51uSGPI3UNCc7lDFdMwpkvy0AZ8nq_Proposal.pdf', '2023-01-19'),
(47, 162, '0VBP8UiFE5fLche71NmgyIMuzbT94WSr', 'Proposal.pdf', '0VBP8UiFE5fLche71NmgyIMuzbT94WSr_Proposal.pdf', '2023-01-19'),
(49, 12, 'sQ39ko5Yr7h0KeUWy1RbAJLdmFPCntuE', 'Proposal.pdf', 'sQ39ko5Yr7h0KeUWy1RbAJLdmFPCntuE_Proposal.pdf', '2023-01-19'),
(51, 82, 'uw0ZdK473Jt2oDsYEPGBRx9ghbpefkvF', '273555.jpg', 'uw0ZdK473Jt2oDsYEPGBRx9ghbpefkvF_273555.jpg', '2023-01-20'),
(57, 156, 'DxXvOIUneAdF7hCcijkN2SmBgMyE9TQ5', 'Proposal.pdf', 'DxXvOIUneAdF7hCcijkN2SmBgMyE9TQ5_Proposal.pdf', '2023-01-20'),
(56, 162, 'ZrFifIM97b4EY0dP5xDNjUO1ymJvQwCc', 'Proposal.jpg', 'ZrFifIM97b4EY0dP5xDNjUO1ymJvQwCc_Proposal.jpg', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `ip_users`
--

CREATE TABLE `ip_users` (
  `user_id` int(11) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT 0,
  `user_active` tinyint(1) DEFAULT 1,
  `user_date_created` datetime NOT NULL,
  `user_date_modified` datetime NOT NULL,
  `user_language` varchar(255) DEFAULT 'system',
  `user_name` text DEFAULT NULL,
  `user_company` text DEFAULT NULL,
  `user_address_1` text DEFAULT NULL,
  `user_address_2` text DEFAULT NULL,
  `user_city` text DEFAULT NULL,
  `user_state` text DEFAULT NULL,
  `user_zip` text DEFAULT NULL,
  `user_country` text DEFAULT NULL,
  `user_phone` text DEFAULT NULL,
  `user_fax` text DEFAULT NULL,
  `user_mobile` text DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_web` text DEFAULT NULL,
  `user_vat_id` text DEFAULT NULL,
  `user_tax_code` text DEFAULT NULL,
  `user_psalt` text DEFAULT NULL,
  `user_all_clients` int(1) NOT NULL DEFAULT 0,
  `user_passwordreset_token` varchar(100) DEFAULT '',
  `user_subscribernumber` varchar(40) DEFAULT NULL,
  `user_iban` varchar(34) DEFAULT NULL,
  `user_gln` bigint(13) DEFAULT NULL,
  `user_rcc` varchar(7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_users`
--

INSERT INTO `ip_users` (`user_id`, `user_type`, `user_active`, `user_date_created`, `user_date_modified`, `user_language`, `user_name`, `user_company`, `user_address_1`, `user_address_2`, `user_city`, `user_state`, `user_zip`, `user_country`, `user_phone`, `user_fax`, `user_mobile`, `user_email`, `user_password`, `user_web`, `user_vat_id`, `user_tax_code`, `user_psalt`, `user_all_clients`, `user_passwordreset_token`, `user_subscribernumber`, `user_iban`, `user_gln`, `user_rcc`) VALUES
(1, 1, 1, '2020-06-11 17:08:18', '2020-06-11 17:08:18', 'english', 'Axiom Consulting', NULL, 'Y-49, 9th Street, Y Block, Anna Nagar', '', 'Chennai', 'Tamil Nadu', '600040', 'IN', '9094561312', '', '', 'axiomconsultingfirm@gmail.com', '$2a$10$18cad8e9a5bde37a52c48OxAvn5fn8C9g9PUG.QeKGxJxLGQmOuuW', 'www.axiomconsulting.in', NULL, NULL, '18cad8e9a5bde37a52c48a', 0, '', NULL, NULL, NULL, NULL),
(2, 1, 1, '2022-07-05 06:06:50', '2023-01-19 05:53:13', 'system', 'Bhim', 'Axiom Consulting', 'No 3, 1st Main Road', 'Villivakkam', 'Chennai', 'Tamil Nadu', '600040', 'IN', '9094561311', '', '', 'hello@axiomconsulting.in', '$2a$10$9775c27875dd82b913240uc.w73KXXAqC8Xf27Y/AKZB5/VXcqNEe', '', '', '', '9775c27875dd82b9132403', 0, '', '', '', NULL, NULL),
(3, 2, 1, '2022-11-28 09:28:27', '2022-11-28 09:28:27', 'english', 'readonly', '', '', '', '', '', '', 'IN', '', '', '', 'readonly@axiomconsulting.in', '$2a$10$ccb8d5ae3e12d47e5c013e733uAyAgtUmvExT0/kQOqSGFaGkqJt6', '', '', '', 'ccb8d5ae3e12d47e5c013f', 0, '', '', '', NULL, NULL),
(4, 1, 1, '2023-08-17 10:41:43', '2023-08-17 10:41:43', 'system', 'suman', '', '', '', '', '', '', 'IN', '', '', '', 'demo@axiomconsulting.in', '$2a$10$3a82d9154c4bf90a0c48dubOSL8O0mrVKLrnYlEhuNdj08V62dcMO', '', '', '', '3a82d9154c4bf90a0c48d8', 0, '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ip_user_clients`
--

CREATE TABLE `ip_user_clients` (
  `user_client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_user_clients`
--

INSERT INTO `ip_user_clients` (`user_client_id`, `user_id`, `client_id`) VALUES
(1, 3, 45),
(2, 4, 174);

-- --------------------------------------------------------

--
-- Table structure for table `ip_user_custom`
--

CREATE TABLE `ip_user_custom` (
  `user_custom_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_custom_fieldid` int(11) NOT NULL,
  `user_custom_fieldvalue` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_versions`
--

CREATE TABLE `ip_versions` (
  `version_id` int(11) NOT NULL,
  `version_date_applied` varchar(14) NOT NULL,
  `version_file` varchar(45) NOT NULL,
  `version_sql_errors` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ip_versions`
--

INSERT INTO `ip_versions` (`version_id`, `version_date_applied`, `version_file`, `version_sql_errors`) VALUES
(1, '1591875434', '000_1.0.0.sql', 0),
(2, '1591875435', '001_1.0.1.sql', 0),
(3, '1591875435', '002_1.0.2.sql', 0),
(4, '1591875435', '003_1.1.0.sql', 0),
(5, '1591875435', '004_1.1.1.sql', 0),
(6, '1591875435', '005_1.1.2.sql', 0),
(7, '1591875435', '006_1.2.0.sql', 0),
(8, '1591875435', '007_1.2.1.sql', 0),
(9, '1591875435', '008_1.3.0.sql', 0),
(10, '1591875435', '009_1.3.1.sql', 0),
(11, '1591875435', '010_1.3.2.sql', 0),
(12, '1591875435', '011_1.3.3.sql', 0),
(13, '1591875435', '012_1.4.0.sql', 0),
(14, '1591875436', '013_1.4.1.sql', 0),
(15, '1591875436', '014_1.4.2.sql', 0),
(16, '1591875436', '015_1.4.3.sql', 0),
(17, '1591875436', '016_1.4.4.sql', 0),
(18, '1591875436', '017_1.4.5.sql', 0),
(19, '1591875436', '018_1.4.6.sql', 0),
(20, '1591875436', '019_1.4.7.sql', 0),
(21, '1591875436', '020_1.4.8.sql', 0),
(22, '1591875436', '021_1.4.9.sql', 0),
(23, '1591875436', '022_1.4.10.sql', 0),
(24, '1591875436', '023_1.5.0.sql', 0),
(25, '1591875436', '024_1.5.1.sql', 0),
(26, '1591875436', '025_1.5.2.sql', 0),
(27, '1591875436', '026_1.5.3.sql', 0),
(28, '1591875436', '027_1.5.4.sql', 0),
(29, '1591875436', '028_1.5.5.sql', 0),
(30, '1591875436', '029_1.5.6.sql', 0),
(31, '1591875436', '030_1.5.7.sql', 0),
(32, '1591875436', '031_1.5.8.sql', 0),
(33, '1591875437', '032_1.5.9.sql', 0),
(34, '1591875937', '033_1.5.10.sql', 0),
(35, '1591875937', '034_1.5.11.sql', 0);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `value` varchar(256) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `user_id`, `date`, `value`, `status`) VALUES
(7, 0, '2022-09-06 11:25:53', 'working', 'done'),
(8, 0, '2022-09-10 10:59:16', 'I need to create todo list', 'done'),
(9, 0, '2022-09-19 14:17:47', 'I need to create todo list', 'done'),
(10, 0, '2022-09-19 14:18:20', 'To do list is done', 'pending'),
(33, 2, '2022-11-29 06:27:46', 'invoice send to axiom', 'done'),
(37, 2, '2023-03-09 12:34:34', 'Send invoice to axm', 'done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ip_clients`
--
ALTER TABLE `ip_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `ip_client_custom`
--
ALTER TABLE `ip_client_custom`
  ADD PRIMARY KEY (`client_custom_id`),
  ADD UNIQUE KEY `client_id` (`client_id`,`client_custom_fieldid`);

--
-- Indexes for table `ip_client_notes`
--
ALTER TABLE `ip_client_notes`
  ADD PRIMARY KEY (`client_note_id`),
  ADD KEY `client_id` (`client_id`,`client_note_date`);

--
-- Indexes for table `ip_custom_fields`
--
ALTER TABLE `ip_custom_fields`
  ADD PRIMARY KEY (`custom_field_id`),
  ADD UNIQUE KEY `custom_field_table_2` (`custom_field_table`,`custom_field_label`),
  ADD KEY `custom_field_table` (`custom_field_table`);

--
-- Indexes for table `ip_custom_values`
--
ALTER TABLE `ip_custom_values`
  ADD PRIMARY KEY (`custom_values_id`);

--
-- Indexes for table `ip_email_templates`
--
ALTER TABLE `ip_email_templates`
  ADD PRIMARY KEY (`email_template_id`);

--
-- Indexes for table `ip_families`
--
ALTER TABLE `ip_families`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `ip_imports`
--
ALTER TABLE `ip_imports`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `ip_import_details`
--
ALTER TABLE `ip_import_details`
  ADD PRIMARY KEY (`import_detail_id`),
  ADD KEY `import_id` (`import_id`,`import_record_id`);

--
-- Indexes for table `ip_invoices`
--
ALTER TABLE `ip_invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD UNIQUE KEY `invoice_url_key` (`invoice_url_key`),
  ADD KEY `user_id` (`user_id`,`client_id`,`invoice_group_id`,`invoice_date_created`,`invoice_date_due`,`invoice_number`),
  ADD KEY `invoice_status_id` (`invoice_status_id`);

--
-- Indexes for table `ip_invoices_recurring`
--
ALTER TABLE `ip_invoices_recurring`
  ADD PRIMARY KEY (`invoice_recurring_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `ip_invoice_amounts`
--
ALTER TABLE `ip_invoice_amounts`
  ADD PRIMARY KEY (`invoice_amount_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `invoice_paid` (`invoice_paid`,`invoice_balance`);

--
-- Indexes for table `ip_invoice_custom`
--
ALTER TABLE `ip_invoice_custom`
  ADD PRIMARY KEY (`invoice_custom_id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`,`invoice_custom_fieldid`);

--
-- Indexes for table `ip_invoice_groups`
--
ALTER TABLE `ip_invoice_groups`
  ADD PRIMARY KEY (`invoice_group_id`),
  ADD KEY `invoice_group_next_id` (`invoice_group_next_id`),
  ADD KEY `invoice_group_left_pad` (`invoice_group_left_pad`);

--
-- Indexes for table `ip_invoice_items`
--
ALTER TABLE `ip_invoice_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `invoice_id` (`invoice_id`,`item_tax_rate_id`,`item_date_added`,`item_order`);

--
-- Indexes for table `ip_invoice_item_amounts`
--
ALTER TABLE `ip_invoice_item_amounts`
  ADD PRIMARY KEY (`item_amount_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `ip_invoice_sumex`
--
ALTER TABLE `ip_invoice_sumex`
  ADD PRIMARY KEY (`sumex_id`);

--
-- Indexes for table `ip_invoice_tax_rates`
--
ALTER TABLE `ip_invoice_tax_rates`
  ADD PRIMARY KEY (`invoice_tax_rate_id`),
  ADD KEY `invoice_id` (`invoice_id`,`tax_rate_id`);

--
-- Indexes for table `ip_item_lookups`
--
ALTER TABLE `ip_item_lookups`
  ADD PRIMARY KEY (`item_lookup_id`);

--
-- Indexes for table `ip_merchant_responses`
--
ALTER TABLE `ip_merchant_responses`
  ADD PRIMARY KEY (`merchant_response_id`),
  ADD KEY `merchant_response_date` (`merchant_response_date`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `ip_payments`
--
ALTER TABLE `ip_payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `payment_method_id` (`payment_method_id`),
  ADD KEY `payment_amount` (`payment_amount`);

--
-- Indexes for table `ip_payment_custom`
--
ALTER TABLE `ip_payment_custom`
  ADD PRIMARY KEY (`payment_custom_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`,`payment_custom_fieldid`);

--
-- Indexes for table `ip_payment_methods`
--
ALTER TABLE `ip_payment_methods`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `ip_products`
--
ALTER TABLE `ip_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ip_projects`
--
ALTER TABLE `ip_projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `ip_quotes`
--
ALTER TABLE `ip_quotes`
  ADD PRIMARY KEY (`quote_id`),
  ADD KEY `user_id` (`user_id`,`client_id`,`invoice_group_id`,`quote_date_created`,`quote_date_expires`,`quote_number`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `quote_status_id` (`quote_status_id`);

--
-- Indexes for table `ip_quote_amounts`
--
ALTER TABLE `ip_quote_amounts`
  ADD PRIMARY KEY (`quote_amount_id`),
  ADD KEY `quote_id` (`quote_id`);

--
-- Indexes for table `ip_quote_custom`
--
ALTER TABLE `ip_quote_custom`
  ADD PRIMARY KEY (`quote_custom_id`),
  ADD UNIQUE KEY `quote_id` (`quote_id`,`quote_custom_fieldid`);

--
-- Indexes for table `ip_quote_items`
--
ALTER TABLE `ip_quote_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `quote_id` (`quote_id`,`item_date_added`,`item_order`),
  ADD KEY `item_tax_rate_id` (`item_tax_rate_id`);

--
-- Indexes for table `ip_quote_item_amounts`
--
ALTER TABLE `ip_quote_item_amounts`
  ADD PRIMARY KEY (`item_amount_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `ip_quote_tax_rates`
--
ALTER TABLE `ip_quote_tax_rates`
  ADD PRIMARY KEY (`quote_tax_rate_id`),
  ADD KEY `quote_id` (`quote_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`);

--
-- Indexes for table `ip_sessions`
--
ALTER TABLE `ip_sessions`
  ADD KEY `ip_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ip_settings`
--
ALTER TABLE `ip_settings`
  ADD PRIMARY KEY (`setting_id`),
  ADD KEY `setting_key` (`setting_key`);

--
-- Indexes for table `ip_tasks`
--
ALTER TABLE `ip_tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `ip_tax_rates`
--
ALTER TABLE `ip_tax_rates`
  ADD PRIMARY KEY (`tax_rate_id`);

--
-- Indexes for table `ip_units`
--
ALTER TABLE `ip_units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `ip_uploads`
--
ALTER TABLE `ip_uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `ip_users`
--
ALTER TABLE `ip_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ip_user_clients`
--
ALTER TABLE `ip_user_clients`
  ADD PRIMARY KEY (`user_client_id`),
  ADD KEY `user_id` (`user_id`,`client_id`);

--
-- Indexes for table `ip_user_custom`
--
ALTER TABLE `ip_user_custom`
  ADD PRIMARY KEY (`user_custom_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`user_custom_fieldid`);

--
-- Indexes for table `ip_versions`
--
ALTER TABLE `ip_versions`
  ADD PRIMARY KEY (`version_id`),
  ADD KEY `version_date_applied` (`version_date_applied`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ip_clients`
--
ALTER TABLE `ip_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `ip_client_custom`
--
ALTER TABLE `ip_client_custom`
  MODIFY `client_custom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `ip_client_notes`
--
ALTER TABLE `ip_client_notes`
  MODIFY `client_note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_custom_fields`
--
ALTER TABLE `ip_custom_fields`
  MODIFY `custom_field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ip_custom_values`
--
ALTER TABLE `ip_custom_values`
  MODIFY `custom_values_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_email_templates`
--
ALTER TABLE `ip_email_templates`
  MODIFY `email_template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_families`
--
ALTER TABLE `ip_families`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ip_imports`
--
ALTER TABLE `ip_imports`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_import_details`
--
ALTER TABLE `ip_import_details`
  MODIFY `import_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoices`
--
ALTER TABLE `ip_invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `ip_invoices_recurring`
--
ALTER TABLE `ip_invoices_recurring`
  MODIFY `invoice_recurring_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ip_invoice_amounts`
--
ALTER TABLE `ip_invoice_amounts`
  MODIFY `invoice_amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `ip_invoice_custom`
--
ALTER TABLE `ip_invoice_custom`
  MODIFY `invoice_custom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=844;

--
-- AUTO_INCREMENT for table `ip_invoice_groups`
--
ALTER TABLE `ip_invoice_groups`
  MODIFY `invoice_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ip_invoice_items`
--
ALTER TABLE `ip_invoice_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `ip_invoice_item_amounts`
--
ALTER TABLE `ip_invoice_item_amounts`
  MODIFY `item_amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `ip_invoice_sumex`
--
ALTER TABLE `ip_invoice_sumex`
  MODIFY `sumex_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_invoice_tax_rates`
--
ALTER TABLE `ip_invoice_tax_rates`
  MODIFY `invoice_tax_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `ip_item_lookups`
--
ALTER TABLE `ip_item_lookups`
  MODIFY `item_lookup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_merchant_responses`
--
ALTER TABLE `ip_merchant_responses`
  MODIFY `merchant_response_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_payments`
--
ALTER TABLE `ip_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ip_payment_custom`
--
ALTER TABLE `ip_payment_custom`
  MODIFY `payment_custom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_payment_methods`
--
ALTER TABLE `ip_payment_methods`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ip_products`
--
ALTER TABLE `ip_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ip_projects`
--
ALTER TABLE `ip_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_quotes`
--
ALTER TABLE `ip_quotes`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `ip_quote_amounts`
--
ALTER TABLE `ip_quote_amounts`
  MODIFY `quote_amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `ip_quote_custom`
--
ALTER TABLE `ip_quote_custom`
  MODIFY `quote_custom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ip_quote_items`
--
ALTER TABLE `ip_quote_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `ip_quote_item_amounts`
--
ALTER TABLE `ip_quote_item_amounts`
  MODIFY `item_amount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `ip_quote_tax_rates`
--
ALTER TABLE `ip_quote_tax_rates`
  MODIFY `quote_tax_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ip_settings`
--
ALTER TABLE `ip_settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `ip_tasks`
--
ALTER TABLE `ip_tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ip_tax_rates`
--
ALTER TABLE `ip_tax_rates`
  MODIFY `tax_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ip_units`
--
ALTER TABLE `ip_units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_uploads`
--
ALTER TABLE `ip_uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `ip_users`
--
ALTER TABLE `ip_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ip_user_clients`
--
ALTER TABLE `ip_user_clients`
  MODIFY `user_client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_user_custom`
--
ALTER TABLE `ip_user_custom`
  MODIFY `user_custom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_versions`
--
ALTER TABLE `ip_versions`
  MODIFY `version_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
