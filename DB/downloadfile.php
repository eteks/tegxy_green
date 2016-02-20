-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2014 at 05:23 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atomi30_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules_events_mst`
--

CREATE TABLE IF NOT EXISTS `admin_modules_events_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_mst_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `short_descr` text,
  `filename` varchar(100) NOT NULL DEFAULT '',
  `parameters` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing events information of modules' AUTO_INCREMENT=186 ;

--
-- Dumping data for table `admin_modules_events_mst`
--

INSERT INTO `admin_modules_events_mst` (`id`, `admin_modules_mst_id`, `name`, `short_descr`, `filename`, `parameters`) VALUES
(1, 2, 'Add User', '', 'privilege_user.php', ''),
(2, 2, 'Edit User', '', 'privilege_user.php', ''),
(3, 2, 'Delete User', '', 'privilege_user.php', ''),
(4, 3, 'Add Roles', '', 'privilege_roles.php', ''),
(5, 3, 'Edit Roles', '', 'privilege_roles.php', ''),
(6, 3, 'Delete Roles', '', 'privilege_roles.php', ''),
(159, 80, 'Edit Unit Entry', '', 'unit_entry.php', ''),
(158, 80, 'Add Unit Entry', '', 'unit_entry.php', ''),
(120, 68, 'Edit Occasion Entry', '', 'occasion_info.php', ''),
(119, 68, 'Add Occasion Entry', '', 'occasion_info.php', ''),
(121, 68, 'Delete Occasion Entry', '', 'occasion_info.php', ''),
(122, 66, 'Add Facility Entry', '', 'Facility_Entry.php', ''),
(123, 66, 'Edit Facility Entry', '', 'Facility_Entry.php', ''),
(124, 66, 'Delete Facility Entry', '', 'Facility_Entry.php', ''),
(125, 67, 'Add Services Entry', '', 'Services_Entry.php', ''),
(126, 67, 'Edit Services Entry', '', 'Services_Entry.php', ''),
(127, 67, 'Delete Services Entry', '', 'Services_Entry.php', ''),
(128, 63, 'Add Hotel Info', '', 'hotel_info.php', ''),
(129, 63, 'Edit Hotel Info', '', 'hotel_info.php', ''),
(130, 63, 'Delete Hotel Info', '', 'hotel_info.php', ''),
(131, 70, 'Add Menu Category', '', 'Menu_Category.php', ''),
(132, 70, 'Edit Menu Category', '', 'Menu_Category.php', ''),
(133, 70, 'Delete Menu Category', '', 'Menu_Category.php', ''),
(134, 71, 'Add Menu Entry', '', 'Menu_Entry.php', ''),
(135, 71, 'Edit Menu Entry', '', 'Menu_Entry.php', ''),
(136, 71, 'Delete Menu Entry', '', 'Menu_Entry.php', ''),
(137, 72, 'Add Menu Card Creation', '', 'Menu_Card.php', ''),
(138, 72, 'Edit Menu Card Creation', '', 'Menu_Card.php', ''),
(139, 72, 'Delete Menu Card Creation', '', 'Menu_Card.php', ''),
(140, 73, 'Add Floor Creation', '', 'Floor_Creation.php', ''),
(141, 73, 'Edit Floor Creation', '', 'Floor_Creation.php', ''),
(142, 73, 'Delete Floor Creation', '', 'Floor_Creation.php', ''),
(143, 74, 'Add Department Creation', '', 'Department_Creation.php', ''),
(144, 74, 'Edit Department Creation', '', 'Department_Creation.php', ''),
(145, 74, 'Delete Department Creation', '', 'Department_Creation.php', ''),
(146, 75, 'Add Room Type Creation', '', 'Room_Type.php', ''),
(147, 75, 'Edit Room Type Creation', '', 'Room_Type.php', ''),
(148, 75, 'Delete Room Type Creation', '', 'Room_Type.php', ''),
(149, 76, 'Add Room Creation', '', 'Room.php', ''),
(150, 76, 'Edit Room Creation', '', 'Room.php', ''),
(151, 76, 'Delete Room Creation', '', 'Room.php', ''),
(152, 77, 'Add Table Type Creation', '', 'table_type.php', ''),
(153, 77, 'Edit Table Type Creation', '', 'table_type.php', ''),
(154, 77, 'Delete Table Type Creation', '', 'table_type.php', ''),
(155, 78, 'Add Table Entry', '', 'table_entry.php', ''),
(156, 78, 'Edit Table Entry', '', 'table_entry.php', ''),
(157, 78, 'Delete Table Entry', '', 'table_entry.php', ''),
(160, 80, 'Delete Unit Entry', '', 'unit_entry.php', ''),
(161, 81, 'Add Item Type Info', '', 'item_type.php', ''),
(162, 81, 'Edit Item Type Info', '', 'item_type.php', ''),
(163, 81, 'Delete Item Type Info', '', 'item_type.php', ''),
(164, 82, 'Add Item Entry', '', 'item_entry.php', ''),
(165, 82, 'Edit Item Entry', '', 'item_entry.php', ''),
(166, 82, 'Delete Item Entry', '', 'item_entry.php', ''),
(167, 83, 'Add Vendor Creation', '', 'vendor_creation.php', ''),
(168, 83, 'Edit Vendor Creation', '', 'vendor_creation.php', ''),
(169, 83, 'Delete Vendor Creation', '', 'vendor_creation.php', ''),
(170, 85, 'Add Payment Mode', '', 'Payment.php', ''),
(171, 85, 'Edit Payment Mode', '', 'Payment.php', ''),
(172, 85, 'Delete Payment Mode', '', 'Payment.php', ''),
(173, 86, 'Add Tax Info', '', 'tax.php', ''),
(174, 86, 'Edit Tax Info', '', 'tax.php', ''),
(175, 86, 'Delete Tax Info', '', 'tax.php', ''),
(176, 87, 'Add Tax Scheme Entry', '', 'tax_scheme.php', ''),
(177, 87, 'Edit Tax Scheme Entry', '', 'tax_scheme.php', ''),
(178, 87, 'Delete Tax Scheme Entry', '', 'tax_scheme.php', ''),
(179, 88, 'Add Accounting', '', 'account.php', ''),
(180, 88, 'Edit Accounting', '', 'account.php', ''),
(181, 88, 'Delete Accounting', '', 'account.php', ''),
(182, 89, 'Add CheckOut', '', 'checkout.php', ''),
(183, 89, 'Edit CheckOut', '', 'checkout.php', ''),
(184, 89, 'Delete CheckOut', '', 'checkout.php', ''),
(185, 64, 'Anniversary', 'Anniversary date', 'Anniversary', 'Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date Anniversary date ');

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules_events_mst_to_admin_mst`
--

CREATE TABLE IF NOT EXISTS `admin_modules_events_mst_to_admin_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_events_mst_id` int(11) NOT NULL DEFAULT '0',
  `admin_mst_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing relationships of master tables admin and events' AUTO_INCREMENT=6852 ;

--
-- Dumping data for table `admin_modules_events_mst_to_admin_mst`
--

INSERT INTO `admin_modules_events_mst_to_admin_mst` (`id`, `admin_modules_events_mst_id`, `admin_mst_id`) VALUES
(6772, 181, 11),
(6771, 180, 11),
(6770, 179, 11),
(6769, 178, 11),
(6768, 177, 11),
(6767, 176, 11),
(6473, 181, 21),
(6472, 180, 21),
(6471, 179, 21),
(6470, 178, 21),
(6469, 177, 21),
(6468, 176, 21),
(6467, 175, 21),
(6466, 174, 21),
(6465, 173, 21),
(6464, 172, 21),
(6463, 171, 21),
(6462, 170, 21),
(6766, 175, 11),
(6765, 174, 11),
(6764, 173, 11),
(6763, 172, 11),
(6762, 171, 11),
(6761, 170, 11),
(6760, 169, 11),
(6759, 168, 11),
(6758, 167, 11),
(6757, 166, 11),
(6756, 165, 11),
(6755, 164, 11),
(6754, 163, 11),
(6753, 162, 11),
(6752, 161, 11),
(6751, 160, 11),
(6750, 158, 11),
(6749, 159, 11),
(6748, 139, 11),
(6747, 138, 11),
(6746, 137, 11),
(6745, 136, 11),
(6744, 135, 11),
(6743, 134, 11),
(6742, 133, 11),
(6741, 132, 11),
(6740, 131, 11),
(6739, 157, 11),
(6738, 156, 11),
(6737, 155, 11),
(6736, 154, 11),
(6735, 153, 11),
(6734, 152, 11),
(6733, 151, 11),
(6732, 150, 11),
(6731, 149, 11),
(6730, 148, 11),
(6729, 147, 11),
(6728, 146, 11),
(6727, 145, 11),
(6726, 144, 11),
(6725, 143, 11),
(6724, 142, 11),
(6723, 141, 11),
(6722, 140, 11),
(6721, 127, 11),
(6720, 126, 11),
(6719, 125, 11),
(6718, 124, 11),
(6717, 123, 11),
(6716, 122, 11),
(6715, 121, 11),
(6714, 119, 11),
(6713, 120, 11),
(6712, 6, 11),
(6711, 5, 11),
(6710, 4, 11),
(6709, 3, 11),
(6708, 2, 11),
(6707, 1, 11),
(6706, 130, 11),
(6705, 129, 11),
(6704, 128, 11),
(6461, 169, 21),
(6460, 168, 21),
(6459, 167, 21),
(6458, 166, 21),
(6457, 165, 21),
(6456, 164, 21),
(6455, 163, 21),
(6454, 162, 21),
(6453, 161, 21),
(6452, 160, 21),
(6451, 158, 21),
(6450, 159, 21),
(6449, 139, 21),
(6448, 138, 21),
(6447, 137, 21),
(6446, 136, 21),
(6445, 135, 21),
(6444, 134, 21),
(6443, 133, 21),
(6442, 132, 21),
(6441, 131, 21),
(6440, 157, 21),
(6439, 156, 21),
(6438, 155, 21),
(6437, 154, 21),
(6436, 153, 21),
(6435, 152, 21),
(6434, 151, 21),
(6433, 150, 21),
(6432, 149, 21),
(6431, 148, 21),
(6430, 147, 21),
(6429, 146, 21),
(6428, 145, 21),
(6427, 144, 21),
(6426, 143, 21),
(6425, 142, 21),
(6424, 141, 21),
(6423, 140, 21),
(6422, 127, 21),
(6421, 126, 21),
(6420, 125, 21),
(6419, 124, 21),
(6418, 123, 21),
(6417, 122, 21),
(6416, 121, 21),
(6415, 119, 21),
(6414, 120, 21),
(6413, 130, 21),
(6412, 129, 21),
(6411, 128, 21),
(6410, 6, 21),
(6409, 5, 21),
(6408, 4, 21),
(6407, 3, 21),
(6406, 2, 21),
(6405, 1, 21),
(6773, 182, 11),
(6774, 183, 11),
(6775, 184, 11),
(6776, 128, 22),
(6777, 129, 22),
(6778, 130, 22),
(6779, 1, 22),
(6780, 2, 22),
(6781, 3, 22),
(6782, 4, 22),
(6783, 5, 22),
(6784, 6, 22),
(6785, 120, 22),
(6786, 119, 22),
(6787, 121, 22),
(6788, 122, 22),
(6789, 123, 22),
(6790, 124, 22),
(6791, 125, 22),
(6792, 126, 22),
(6793, 127, 22),
(6794, 140, 22),
(6795, 141, 22),
(6796, 142, 22),
(6797, 143, 22),
(6798, 144, 22),
(6799, 145, 22),
(6800, 146, 22),
(6801, 147, 22),
(6802, 148, 22),
(6803, 149, 22),
(6804, 150, 22),
(6805, 151, 22),
(6806, 152, 22),
(6807, 153, 22),
(6808, 154, 22),
(6809, 155, 22),
(6810, 156, 22),
(6811, 157, 22),
(6812, 131, 22),
(6813, 132, 22),
(6814, 133, 22),
(6815, 134, 22),
(6816, 135, 22),
(6817, 136, 22),
(6818, 137, 22),
(6819, 138, 22),
(6820, 139, 22),
(6821, 159, 22),
(6822, 158, 22),
(6823, 160, 22),
(6824, 161, 22),
(6825, 162, 22),
(6826, 163, 22),
(6827, 164, 22),
(6828, 165, 22),
(6829, 166, 22),
(6830, 167, 22),
(6831, 168, 22),
(6832, 169, 22),
(6833, 170, 22),
(6834, 171, 22),
(6835, 172, 22),
(6836, 173, 22),
(6837, 174, 22),
(6838, 175, 22),
(6839, 176, 22),
(6840, 177, 22),
(6841, 178, 22),
(6842, 179, 22),
(6843, 180, 22),
(6844, 181, 22),
(6845, 182, 22),
(6846, 183, 22),
(6847, 184, 22),
(6848, 182, 23),
(6849, 183, 23),
(6850, 184, 23),
(6851, 182, 25);

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules_mst`
--

CREATE TABLE IF NOT EXISTS `admin_modules_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `short_descr` text,
  `filename` varchar(100) NOT NULL DEFAULT '',
  `parameters` text,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing modules information, master table' AUTO_INCREMENT=97 ;

--
-- Dumping data for table `admin_modules_mst`
--

INSERT INTO `admin_modules_mst` (`id`, `parent_id`, `name`, `short_descr`, `filename`, `parameters`, `sort_order`, `active`, `date_added`, `date_modified`) VALUES
(1, 0, 'Manage Privilege', '', 'privilege_users.php', '', 3, 'Y', '2008-08-02 12:14:19', '2009-03-17 10:59:52'),
(2, 1, 'Admin Users', '', 'privilege_user.php', '', 1, 'Y', '2008-08-02 12:14:37', '2009-02-06 17:34:48'),
(3, 1, 'Admin Roles', '', 'privilege_roles.php', '', 2, 'Y', '2008-08-02 12:14:52', '2009-03-17 10:59:49'),
(63, 0, 'Manage Hotel Info', '', 'hotel_info.php', '', 3, 'Y', '2009-01-29 17:41:30', '2009-03-17 10:59:49'),
(64, 0, 'Manage Basic Info', '', 'occasion_info.php', '', 2, 'Y', '2009-01-30 15:56:03', '2009-03-17 10:59:52'),
(65, 0, 'Manage Infrastructure Info', '', 'Floor_Creation.php', '', 4, 'Y', '2009-02-02 14:00:23', NULL),
(66, 64, 'Facilities Entry', '', 'Facility_Entry.php', '', 2, 'Y', '2009-02-06 17:18:04', NULL),
(67, 64, 'Services Entry', '', 'Services_Entry.php', '', 3, 'Y', '2009-02-06 17:20:15', NULL),
(68, 64, 'Occasion Entry', '', 'occasion_info.php', '', 0, 'Y', '2009-02-06 17:34:41', '2009-02-06 17:34:48'),
(69, 0, 'Manage Menu Card', '', 'Menu_Category.php', '', 5, 'Y', '2009-02-06 17:35:49', NULL),
(70, 69, 'Menu Category', '', 'Menu_Category.php', '', 1, 'Y', '2009-02-06 17:36:21', NULL),
(71, 69, 'Menu Entry', '', 'Menu_Entry.php', '', 2, 'Y', '2009-02-06 17:36:44', NULL),
(72, 69, 'Menu Card Creation', '', 'Menu_Card.php', '', 3, 'Y', '2009-02-06 17:37:10', NULL),
(73, 65, 'Floor Creation', '', 'Floor_Creation.php', '', 1, 'Y', '2009-02-06 18:14:22', NULL),
(74, 65, 'Department Creation', '', 'Department_Creation.php', '', 2, 'Y', '2009-02-06 18:14:55', NULL),
(75, 65, 'Room Type Creation', '', 'Room_Type.php', '', 3, 'Y', '2009-02-06 18:15:15', NULL),
(76, 65, 'Room Creation', '', 'Room.php', '', 4, 'Y', '2009-02-06 18:15:37', NULL),
(77, 65, 'Rest. Table Type Creation', '', 'table_type.php', '', 5, 'Y', '2009-02-06 18:16:04', NULL),
(78, 65, 'Rest. Table Entry', '', 'table_entry.php', '', 6, 'Y', '2009-02-06 18:16:27', NULL),
(79, 0, 'Manage Inventory', '', 'unit_entry.php', '', 6, 'Y', '2009-02-06 18:30:12', NULL),
(80, 79, 'Unit Entry', '', 'unit_entry.php', '', 1, 'Y', '2009-02-06 18:32:42', NULL),
(81, 79, 'Item Type Info', '', 'item_type.php', '', 2, 'Y', '2009-02-06 18:33:05', NULL),
(82, 79, 'Item Entry', '', 'item_entry.php', '', 3, 'Y', '2009-02-06 18:33:22', NULL),
(83, 79, 'Vendor Creation', '', 'vendor_creation.php', '', 4, 'Y', '2009-02-06 18:33:58', NULL),
(84, 0, 'Manage Finance', '', 'Payment.php', '', 7, 'Y', '2009-02-06 18:45:12', NULL),
(85, 84, 'Payment Mode', '', 'Payment.php', '', 1, 'Y', '2009-02-06 18:45:37', NULL),
(86, 84, 'Tax Info', '', 'tax.php', '', 2, 'Y', '2009-02-06 18:45:54', NULL),
(87, 84, 'Tax Scheme Entry', '', 'tax_scheme.php', '', 3, 'Y', '2009-02-06 18:48:32', NULL),
(88, 84, 'Accounting', '', 'account.php', '', 4, 'Y', '2009-02-06 18:49:20', NULL),
(89, 0, 'Manage CheckOut', '', 'checkout.php', '', 8, 'Y', '2009-02-27 14:54:08', NULL),
(90, 0, 'Manage Privilege User', '', 'hms_privilege_users.php', '', 9, 'Y', '2009-02-27 19:28:30', '2009-07-23 23:36:26'),
(91, 1, 'Admin Events', '', 'privilege_events.php', '', 4, 'Y', '2009-02-27 19:29:37', NULL),
(92, 90, 'User Privilege', '', 'hms_privilege_users.php', '', 1, 'Y', '2009-02-27 19:35:48', NULL),
(93, 90, 'User Privilege Roles', '', 'hms_privilege_roles.php', '', 2, 'Y', '2009-02-27 19:36:21', NULL),
(94, 90, 'User Privilege Events', '', 'hms_privilege_events.php', '', 3, 'Y', '2009-02-27 19:36:56', NULL),
(95, 0, 'Manage Reports', '', 'report_rooms.php', '', 10, 'Y', '2009-03-12 19:34:40', '2009-07-23 23:36:26'),
(96, 64, 'Hotel Feedback', 'Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback Hotel Feedback ', 'srinath', 'asfadad', 1, 'Y', '2011-02-07 05:35:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules_mst_to_admin_mst`
--

CREATE TABLE IF NOT EXISTS `admin_modules_mst_to_admin_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_mst_id` int(11) NOT NULL DEFAULT '0',
  `admin_mst_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing relationships of master tables  modules and admin' AUTO_INCREMENT=3605 ;

--
-- Dumping data for table `admin_modules_mst_to_admin_mst`
--

INSERT INTO `admin_modules_mst_to_admin_mst` (`id`, `admin_modules_mst_id`, `admin_mst_id`) VALUES
(3410, 88, 21),
(3409, 87, 21),
(3408, 86, 21),
(3550, 93, 11),
(3549, 92, 11),
(3548, 90, 11),
(3547, 89, 11),
(3407, 85, 21),
(3406, 84, 21),
(3405, 83, 21),
(3546, 88, 11),
(3545, 87, 11),
(3404, 82, 21),
(3403, 81, 21),
(3402, 80, 21),
(3544, 86, 11),
(3543, 85, 11),
(3542, 84, 11),
(3541, 83, 11),
(3540, 82, 11),
(3539, 81, 11),
(3538, 80, 11),
(3537, 79, 11),
(3536, 72, 11),
(3535, 71, 11),
(3534, 70, 11),
(3533, 69, 11),
(3532, 78, 11),
(3531, 77, 11),
(3530, 76, 11),
(3529, 75, 11),
(3528, 74, 11),
(3527, 73, 11),
(3526, 65, 11),
(3525, 67, 11),
(3524, 66, 11),
(3523, 68, 11),
(3522, 64, 11),
(3401, 79, 21),
(3400, 72, 21),
(3399, 71, 21),
(3398, 70, 21),
(3397, 69, 21),
(3396, 78, 21),
(3395, 77, 21),
(3394, 76, 21),
(3393, 75, 21),
(3392, 74, 21),
(3391, 73, 21),
(3390, 65, 21),
(3389, 67, 21),
(3388, 66, 21),
(3387, 68, 21),
(3386, 64, 21),
(3385, 63, 21),
(3384, 3, 21),
(3383, 2, 21),
(3382, 1, 21),
(3521, 91, 11),
(3520, 3, 11),
(3519, 2, 11),
(3518, 1, 11),
(3517, 63, 11),
(3551, 94, 11),
(3552, 95, 11),
(3553, 63, 22),
(3554, 1, 22),
(3555, 2, 22),
(3556, 3, 22),
(3557, 91, 22),
(3558, 64, 22),
(3559, 68, 22),
(3560, 66, 22),
(3561, 67, 22),
(3562, 65, 22),
(3563, 73, 22),
(3564, 74, 22),
(3565, 75, 22),
(3566, 76, 22),
(3567, 77, 22),
(3568, 78, 22),
(3569, 69, 22),
(3570, 70, 22),
(3571, 71, 22),
(3572, 72, 22),
(3573, 79, 22),
(3574, 80, 22),
(3575, 81, 22),
(3576, 82, 22),
(3577, 83, 22),
(3578, 84, 22),
(3579, 85, 22),
(3580, 86, 22),
(3581, 87, 22),
(3582, 88, 22),
(3583, 89, 22),
(3584, 90, 22),
(3585, 92, 22),
(3586, 93, 22),
(3587, 94, 22),
(3588, 95, 22),
(3589, 84, 23),
(3590, 89, 23),
(3591, 90, 23),
(3592, 92, 23),
(3593, 93, 23),
(3594, 94, 23),
(3595, 95, 23),
(3596, 84, 24),
(3597, 89, 24),
(3598, 90, 24),
(3599, 95, 24),
(3600, 89, 25),
(3601, 90, 25),
(3602, 93, 25),
(3603, 94, 25),
(3604, 95, 25);

-- --------------------------------------------------------

--
-- Table structure for table `admin_modules_mst_to_admin_role_mst`
--

CREATE TABLE IF NOT EXISTS `admin_modules_mst_to_admin_role_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_mst_id` int(11) NOT NULL DEFAULT '0',
  `admin_role_mst_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing master tables of module and role relationship inform' AUTO_INCREMENT=1601 ;

--
-- Dumping data for table `admin_modules_mst_to_admin_role_mst`
--

INSERT INTO `admin_modules_mst_to_admin_role_mst` (`id`, `admin_modules_mst_id`, `admin_role_mst_id`) VALUES
(1543, 94, 1),
(1542, 93, 1),
(1541, 92, 1),
(1540, 90, 1),
(1539, 89, 1),
(1538, 88, 1),
(1537, 87, 1),
(1536, 86, 1),
(1535, 85, 1),
(1534, 84, 1),
(1533, 83, 1),
(1532, 82, 1),
(1531, 81, 1),
(1530, 80, 1),
(1529, 79, 1),
(1528, 72, 1),
(1527, 71, 1),
(1526, 70, 1),
(1525, 69, 1),
(1524, 78, 1),
(1523, 77, 1),
(1522, 76, 1),
(1521, 75, 1),
(1520, 74, 1),
(1519, 73, 1),
(1518, 65, 1),
(1517, 68, 1),
(1516, 67, 1),
(1515, 66, 1),
(1385, 1, 20),
(1386, 2, 20),
(1387, 3, 20),
(1388, 63, 20),
(1389, 64, 20),
(1390, 66, 20),
(1391, 67, 20),
(1392, 68, 20),
(1393, 65, 20),
(1394, 73, 20),
(1395, 74, 20),
(1396, 75, 20),
(1397, 76, 20),
(1398, 77, 20),
(1399, 78, 20),
(1400, 69, 20),
(1401, 70, 20),
(1402, 71, 20),
(1403, 72, 20),
(1404, 79, 20),
(1405, 80, 20),
(1406, 81, 20),
(1407, 82, 20),
(1408, 83, 20),
(1409, 84, 20),
(1410, 85, 20),
(1411, 86, 20),
(1412, 87, 20),
(1413, 88, 20),
(1514, 64, 1),
(1513, 63, 1),
(1512, 91, 1),
(1511, 3, 1),
(1510, 2, 1),
(1509, 1, 1),
(1544, 95, 1),
(1545, 1, 21),
(1546, 2, 21),
(1547, 3, 21),
(1548, 91, 21),
(1549, 63, 21),
(1550, 64, 21),
(1551, 66, 21),
(1552, 67, 21),
(1553, 68, 21),
(1554, 65, 21),
(1555, 73, 21),
(1556, 74, 21),
(1557, 75, 21),
(1558, 76, 21),
(1559, 77, 21),
(1560, 78, 21),
(1561, 69, 21),
(1562, 70, 21),
(1563, 71, 21),
(1564, 72, 21),
(1565, 79, 21),
(1566, 80, 21),
(1567, 81, 21),
(1568, 82, 21),
(1569, 83, 21),
(1570, 84, 21),
(1571, 85, 21),
(1572, 86, 21),
(1573, 87, 21),
(1574, 88, 21),
(1575, 89, 21),
(1576, 90, 21),
(1577, 92, 21),
(1578, 93, 21),
(1579, 94, 21),
(1580, 95, 21),
(1581, 84, 22),
(1582, 85, 22),
(1583, 86, 22),
(1584, 87, 22),
(1585, 88, 22),
(1586, 89, 22),
(1587, 90, 22),
(1588, 92, 22),
(1589, 93, 22),
(1590, 94, 22),
(1591, 95, 22),
(1592, 2, 23),
(1593, 3, 23),
(1594, 91, 23),
(1595, 89, 23),
(1596, 90, 23),
(1597, 92, 23),
(1598, 93, 23),
(1599, 94, 23),
(1600, 95, 23);

-- --------------------------------------------------------

--
-- Table structure for table `admin_mst`
--

CREATE TABLE IF NOT EXISTS `admin_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(100) NOT NULL DEFAULT '',
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `admin_role_mst_id` int(11) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 PACK_KEYS=0 COMMENT='Storing admin user information with his role id' AUTO_INCREMENT=26 ;

--
-- Dumping data for table `admin_mst`
--

INSERT INTO `admin_mst` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `admin_role_mst_id`, `active`, `date_added`, `date_modified`) VALUES
(22, 'admin', 'admin', 'Admin', 'Admin', 'vadivel@atomicka.in', 0, 'Y', '2009-03-13 13:19:37', NULL),
(11, 'vadivel', 'vadivel', 'vadivel', 'vadivel', 'vadivel@sdi.la', 1, 'Y', '2008-08-06 16:06:48', '2009-03-12 19:36:55'),
(21, 'murugan', 'murugan', 'Murugan', 'P', 'murugan@atomicka.in', 20, 'Y', '2009-02-26 17:04:25', '2009-02-26 17:34:04'),
(23, 'user', 'user', 's', 'raja', 'raja@gmail.com', 0, 'Y', '2011-02-07 05:28:35', NULL),
(24, 'user', 'user', 'r ', 'raja', 'raja@gmail.com', 0, 'Y', '2011-02-07 05:31:43', NULL),
(25, 'srinath', 'srinath', 'srinath', 'B', 'srinath@gmail.com', 0, 'Y', '2011-02-07 05:59:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_mst`
--

CREATE TABLE IF NOT EXISTS `admin_role_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `short_descr` text,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 PACK_KEYS=0 COMMENT='Storing role master information' AUTO_INCREMENT=24 ;

--
-- Dumping data for table `admin_role_mst`
--

INSERT INTO `admin_role_mst` (`id`, `parent_id`, `name`, `short_descr`, `sort_order`, `active`, `date_added`, `date_modified`) VALUES
(1, 0, 'Super Administrator', 'He is the main administrator of this site', 1, 'Y', '2008-02-18 17:04:52', '2009-03-12 19:36:37'),
(20, 0, 'admin', '', 3, 'Y', '2009-02-26 17:02:19', '2009-07-23 01:40:10'),
(21, 20, 'Administration', 'Who co-ordinates everything.', 1, 'Y', '2011-02-07 05:22:16', NULL),
(22, 0, 'User', 'Who uses the product', 2, 'Y', '2011-02-07 05:26:01', '2011-02-07 06:27:33'),
(23, 22, 'srinath', 'Srinath is the user from this company.', 1, 'Y', '2011-02-07 05:53:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_admin_modules_events_mst`
--

CREATE TABLE IF NOT EXISTS `hms_admin_modules_events_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_mst_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `short_descr` text,
  `filename` varchar(100) NOT NULL DEFAULT '',
  `parameters` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Storing events information of modules' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hms_admin_modules_events_mst`
--


-- --------------------------------------------------------

--
-- Table structure for table `hms_admin_modules_events_mst_to_admin_mst`
--

CREATE TABLE IF NOT EXISTS `hms_admin_modules_events_mst_to_admin_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_events_mst_id` int(11) NOT NULL DEFAULT '0',
  `admin_mst_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Storing relationships of master tables admin and events' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hms_admin_modules_events_mst_to_admin_mst`
--


-- --------------------------------------------------------

--
-- Table structure for table `hms_admin_modules_mst`
--

CREATE TABLE IF NOT EXISTS `hms_admin_modules_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `short_descr` text,
  `filename` varchar(100) NOT NULL DEFAULT '',
  `parameters` text,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing modules information, master table' AUTO_INCREMENT=24 ;

--
-- Dumping data for table `hms_admin_modules_mst`
--

INSERT INTO `hms_admin_modules_mst` (`id`, `parent_id`, `name`, `short_descr`, `filename`, `parameters`, `sort_order`, `active`, `date_added`, `date_modified`) VALUES
(7, 0, 'Reservation', '', 'reservation_menu.php', '', 1, 'Y', '2009-03-06 15:02:40', NULL),
(9, 7, 'Room Booking', '', 'reservation.php', '', 1, 'Y', '2009-03-06 15:03:48', NULL),
(10, 7, 'Booking Cancel', '', 'booking_cancel.php', '', 2, 'Y', '2009-03-06 15:04:18', NULL),
(11, 7, 'Check In', '', 'checkin.php', '', 3, 'Y', '2009-03-06 15:04:39', NULL),
(12, 0, 'Services', '', 'services_menu.php', '', 2, 'Y', '2009-03-06 15:12:15', NULL),
(13, 12, 'House Keeping', '', 'house_keep.php', '', 1, 'Y', '2009-03-06 15:13:35', NULL),
(14, 0, 'Restaurant', '', 'restaurant_menu.php', '', 3, 'Y', '2009-03-06 15:15:00', NULL),
(15, 14, 'Restaurant Order', '', 'restaurantorder.php', '', 1, 'Y', '2009-03-06 15:16:00', NULL),
(16, 14, 'Bar Order', '', 'barorder.php', '', 2, 'Y', '2009-03-06 15:16:39', NULL),
(17, 0, 'Billing', '', 'billing_menu.php', '', 4, 'Y', '2009-03-06 15:18:37', NULL),
(18, 17, 'Restaurant Bill', '', 'restaurantBill.php', '', 1, 'Y', '2009-03-06 15:19:15', '2009-03-06 15:20:20'),
(19, 17, 'Bar Bill', '', 'barBill.php', '', 2, 'Y', '2009-03-06 15:19:51', NULL),
(20, 17, 'Service Bill', '', 'serviceBill.php', '', 3, 'Y', '2009-03-06 15:20:53', NULL),
(21, 17, 'Final Bill', '', 'finalBill.php', '', 4, 'Y', '2009-03-06 15:21:30', NULL),
(22, 0, 'Administrative', '', 'admin/login.php', '', 5, 'Y', '2009-03-16 15:31:52', '2009-03-18 13:00:56'),
(23, 0, 'Inventory', '', 'inventory_menu.php', '', 6, 'N', '2009-03-16 17:28:29', '2009-03-18 13:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `hms_admin_modules_mst_to_admin_mst`
--

CREATE TABLE IF NOT EXISTS `hms_admin_modules_mst_to_admin_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_mst_id` int(11) NOT NULL DEFAULT '0',
  `admin_mst_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing relationships of master tables  modules and admin' AUTO_INCREMENT=115 ;

--
-- Dumping data for table `hms_admin_modules_mst_to_admin_mst`
--

INSERT INTO `hms_admin_modules_mst_to_admin_mst` (`id`, `admin_modules_mst_id`, `admin_mst_id`) VALUES
(46, 14, 2),
(45, 13, 2),
(44, 12, 2),
(97, 22, 1),
(96, 21, 1),
(95, 20, 1),
(94, 19, 1),
(93, 18, 1),
(92, 17, 1),
(91, 16, 1),
(90, 15, 1),
(89, 14, 1),
(88, 13, 1),
(87, 12, 1),
(47, 15, 2),
(48, 16, 2),
(49, 17, 2),
(50, 18, 2),
(51, 19, 2),
(52, 20, 2),
(53, 21, 2),
(86, 11, 1),
(85, 10, 1),
(84, 9, 1),
(83, 7, 1),
(98, 23, 1),
(99, 7, 3),
(100, 9, 3),
(101, 10, 3),
(102, 11, 3),
(103, 12, 3),
(104, 13, 3),
(105, 14, 3),
(106, 15, 3),
(107, 16, 3),
(108, 17, 3),
(109, 18, 3),
(110, 19, 3),
(111, 20, 3),
(112, 21, 3),
(113, 22, 3),
(114, 23, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hms_admin_modules_mst_to_admin_role_mst`
--

CREATE TABLE IF NOT EXISTS `hms_admin_modules_mst_to_admin_role_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_modules_mst_id` int(11) NOT NULL DEFAULT '0',
  `admin_role_mst_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Storing master tables of module and role relationship inform' AUTO_INCREMENT=72 ;

--
-- Dumping data for table `hms_admin_modules_mst_to_admin_role_mst`
--

INSERT INTO `hms_admin_modules_mst_to_admin_role_mst` (`id`, `admin_modules_mst_id`, `admin_role_mst_id`) VALUES
(58, 22, 3),
(57, 21, 3),
(56, 20, 3),
(55, 19, 3),
(54, 18, 3),
(53, 17, 3),
(52, 16, 3),
(51, 15, 3),
(50, 14, 3),
(49, 13, 3),
(48, 12, 3),
(47, 11, 3),
(46, 10, 3),
(45, 9, 3),
(69, 21, 4),
(68, 20, 4),
(67, 19, 4),
(66, 18, 4),
(65, 17, 4),
(64, 16, 4),
(63, 15, 4),
(62, 14, 4),
(61, 13, 4),
(60, 12, 4),
(44, 7, 3),
(59, 23, 3),
(70, 22, 4),
(71, 23, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hms_admin_mst`
--

CREATE TABLE IF NOT EXISTS `hms_admin_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(100) NOT NULL DEFAULT '',
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `admin_role_mst_id` int(11) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 PACK_KEYS=0 COMMENT='Storing admin user information with his role id' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hms_admin_mst`
--

INSERT INTO `hms_admin_mst` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `admin_role_mst_id`, `active`, `date_added`, `date_modified`) VALUES
(1, 'user', 'user', 'vadivel', 'subramanian', 'vadivel@atomicka.in', 1, 'Y', '2009-03-16 10:56:27', '2009-03-17 16:13:27'),
(2, 'vadivel', 'vadivel', 'vadivel', 'subramaniam', 'vadivel@atomicka.in', 4, 'Y', '2009-03-16 12:09:03', NULL),
(3, 'admin', 'admin', 'Devi', 'Shan', 'devi@atomicka.in', 3, 'Y', '2009-06-20 19:48:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_admin_role_mst`
--

CREATE TABLE IF NOT EXISTS `hms_admin_role_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `short_descr` text,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 PACK_KEYS=0 COMMENT='Storing role master information' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hms_admin_role_mst`
--

INSERT INTO `hms_admin_role_mst` (`id`, `parent_id`, `name`, `short_descr`, `sort_order`, `active`, `date_added`, `date_modified`) VALUES
(3, 0, 'Super Admin', '', 1, 'Y', '2009-03-07 10:13:57', '2009-03-18 13:02:13'),
(4, 0, 'admin', '', 2, 'Y', '2009-03-16 12:07:46', '2009-03-18 13:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `hms_bar_order_account_details`
--

CREATE TABLE IF NOT EXISTS `hms_bar_order_account_details` (
  `order_act_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_act_cart_id` int(11) NOT NULL,
  `order_act_table` varchar(200) DEFAULT NULL,
  `order_act_subtotal` decimal(10,2) NOT NULL,
  `order_act_discount` decimal(10,2) NOT NULL,
  `order_act_tax` int(11) NOT NULL,
  `order_act_total` decimal(10,2) NOT NULL,
  `order_act_date` datetime NOT NULL,
  `order_act_report_date` date NOT NULL,
  `order_act_order_type` varchar(255) NOT NULL,
  `order_act_payment_type` int(11) NOT NULL,
  `order_act_cust_id` int(11) NOT NULL,
  `order_act_userrole` int(11) NOT NULL,
  PRIMARY KEY (`order_act_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hms_bar_order_account_details`
--

INSERT INTO `hms_bar_order_account_details` (`order_act_id`, `order_act_cart_id`, `order_act_table`, `order_act_subtotal`, `order_act_discount`, `order_act_tax`, `order_act_total`, `order_act_date`, `order_act_report_date`, `order_act_order_type`, `order_act_payment_type`, `order_act_cust_id`, `order_act_userrole`) VALUES
(1, 1, ' 8', '210.00', '5.00', 5, '210.00', '2009-03-18 17:59:46', '2009-03-18', 'Dine', 0, 1, 1),
(2, 2, '', '85.00', '4.00', 10, '91.00', '2009-03-18 18:01:44', '2009-03-18', 'Room', 0, 0, 1),
(3, 3, ' 8', '85.00', '0.00', 0, '85.00', '2009-03-18 18:03:44', '2009-03-18', 'Dine', 0, 0, 1),
(4, 4, '', '120.00', '4.00', 5, '121.00', '2009-03-18 18:18:48', '2009-03-18', 'Room', 0, 0, 1),
(5, 5, '', '140.00', '0.00', 10, '150.00', '2009-03-18 18:23:23', '2009-03-09', 'Room', 0, 4, 1),
(6, 6, '', '830.00', '0.00', 0, '830.00', '2009-03-19 17:15:36', '2009-03-19', 'Room', 0, 0, 0),
(7, 7, '', '0.00', '0.00', 0, '0.00', '2010-02-18 23:26:04', '2010-02-18', 'Room', 0, 0, 3),
(8, 7, '', '780.00', '0.00', 5, '785.00', '2010-02-18 23:26:58', '2010-02-18', 'Room', 0, 0, 3),
(9, 8, ' 10', '335.00', '0.00', 12, '347.00', '2010-07-27 23:42:22', '2010-07-27', 'Dine', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hms_bar_order_details`
--

CREATE TABLE IF NOT EXISTS `hms_bar_order_details` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `table_entry_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `order_posted_date` date NOT NULL,
  `order_product` varchar(255) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_cart_id` int(11) NOT NULL,
  `order_category_id` int(11) NOT NULL,
  `order_subcategory_id` int(11) NOT NULL,
  `order_type_id` varchar(255) NOT NULL,
  `product_name_desc` varchar(255) NOT NULL,
  `status` enum('open','closed') NOT NULL DEFAULT 'open',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `hms_bar_order_details`
--

INSERT INTO `hms_bar_order_details` (`order_id`, `customer_id`, `table_entry_id`, `room_id`, `order_posted_date`, `order_product`, `order_price`, `order_quantity`, `order_cart_id`, `order_category_id`, `order_subcategory_id`, `order_type_id`, `product_name_desc`, `status`) VALUES
(1, 1, 8, 28, '2009-03-18', 'Corainder Rice', 25, 2, 1, 50, 26, 'Dine', '', 'open'),
(2, 1, 8, 28, '2009-03-18', 'Sambar Rice', 30, 2, 1, 50, 22, 'Dine', '', 'open'),
(3, 1, 8, 28, '2009-03-18', 'Mansion House', 50, 2, 1, 54, 42, 'Dine', '', 'open'),
(4, 0, 0, 10, '2009-03-18', 'Lemon Rice', 20, 2, 2, 50, 24, 'Room', '', 'open'),
(5, 0, 0, 10, '2009-03-18', 'Vodka', 45, 1, 2, 54, 43, 'Room', '', 'open'),
(6, 0, 8, 0, '2009-03-18', 'Mutton Briyani', 40, 1, 3, 51, 29, 'Dine', '', 'open'),
(7, 0, 8, 0, '2009-03-18', 'Corainder Rice', 25, 1, 3, 50, 26, 'Dine', '', 'open'),
(8, 0, 8, 0, '2009-03-18', 'Lemon Rice', 20, 1, 3, 50, 24, 'Dine', '', 'open'),
(9, 0, 0, 16, '2009-03-18', 'Mutton Briyani', 40, 3, 4, 51, 29, 'Room', '', 'open'),
(10, 4, 0, 20, '2009-03-09', 'Kingfisher Beer', 45, 2, 5, 54, 39, 'Room', '', 'closed'),
(11, 4, 0, 20, '2009-03-09', 'Mansion House', 50, 1, 5, 54, 42, 'Room', '', 'closed'),
(12, 0, 0, 24, '2009-03-19', 'Chicken Briyani', 40, 2, 6, 51, 28, 'Room', '', 'open'),
(13, 0, 0, 24, '2009-03-19', 'Mansion House', 50, 15, 6, 54, 42, 'Room', '', 'open'),
(14, 0, 0, 24, '2010-02-18', 'Chicken Briyani', 40, 1, 7, 51, 28, 'Room', '', 'open'),
(15, 0, 0, 24, '2010-02-18', 'Chicken65', 20, 1, 7, 51, 30, 'Room', '', 'open'),
(16, 0, 0, 24, '2010-02-18', 'Fish Fry', 30, 1, 7, 51, 31, 'Room', '', 'open'),
(17, 0, 0, 24, '2010-02-18', 'Mutton Briyani', 40, 1, 7, 51, 29, 'Room', '', 'open'),
(18, 0, 0, 24, '2010-02-18', 'Prawn Fry', 40, 1, 7, 51, 32, 'Room', '', 'open'),
(19, 0, 0, 24, '2010-02-18', 'Corainder Rice', 25, 11, 7, 50, 26, 'Room', '', 'open'),
(20, 0, 0, 24, '2010-02-18', 'Curd Rice', 20, 1, 7, 50, 23, 'Room', '', 'open'),
(21, 0, 0, 24, '2010-02-18', 'Lemon Rice', 20, 1, 7, 50, 24, 'Room', '', 'open'),
(22, 0, 0, 24, '2010-02-18', 'Sambar Rice', 30, 1, 7, 50, 22, 'Room', '', 'open'),
(23, 0, 0, 24, '2010-02-18', 'Tamarind Rice', 30, 1, 7, 50, 25, 'Room', '', 'open'),
(24, 0, 0, 24, '2010-02-18', 'Foster Beer', 45, 1, 7, 54, 40, 'Room', '', 'open'),
(25, 0, 0, 24, '2010-02-18', 'Kalyani Beer', 50, 1, 7, 54, 41, 'Room', '', 'open'),
(26, 0, 0, 24, '2010-02-18', 'Kingfisher Beer', 45, 1, 7, 54, 39, 'Room', '', 'open'),
(27, 0, 0, 24, '2010-02-18', 'Mansion House', 50, 1, 7, 54, 42, 'Room', '', 'open'),
(28, 0, 0, 24, '2010-02-18', 'Vodka', 45, 1, 7, 54, 43, 'Room', '', 'open'),
(29, 0, 10, 23, '2010-07-27', 'Coke', 10, 1, 8, 49, 15, 'Dine', '', 'open'),
(30, 0, 10, 23, '2010-07-27', 'Cornish Dairy', 30, 2, 8, 48, 12, 'Dine', '', 'open'),
(31, 0, 10, 23, '2010-07-27', 'Tamarind Rice', 25, 1, 8, 50, 25, 'Dine', '', 'open'),
(32, 0, 10, 23, '2010-07-27', 'Gulobjamun', 10, 24, 8, 52, 33, 'Dine', '', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `hms_bed_details`
--

CREATE TABLE IF NOT EXISTS `hms_bed_details` (
  `hms_bed_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_bed_details` int(15) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`hms_bed_details_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hms_bed_details`
--

INSERT INTO `hms_bed_details` (`hms_bed_details_id`, `hms_bed_details`, `active`, `date_added`, `date_modified`) VALUES
(1, 150, 'N', '2009-02-27 19:25:22', '2009-03-02 12:20:08'),
(7, 122, 'N', '2009-03-10 15:27:05', '2009-03-21 17:05:06'),
(8, 750, 'Y', '2011-02-07 06:17:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_booking_status`
--

CREATE TABLE IF NOT EXISTS `hms_booking_status` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `booking_no` varchar(10) NOT NULL,
  `checking_no` varchar(10) DEFAULT NULL,
  `no_adults` int(11) NOT NULL,
  `no_child` int(11) NOT NULL,
  `room_type_id` varchar(100) NOT NULL,
  `rooms_id` varchar(100) NOT NULL,
  `no_of_rooms` int(6) NOT NULL,
  `rooms_no` varchar(100) NOT NULL,
  `no_of_days` int(5) NOT NULL,
  `extra_bed` int(6) NOT NULL,
  `extra_bed_charge` decimal(10,2) NOT NULL,
  `nature_of_guest` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `room_amount` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `advance_pay` decimal(10,2) NOT NULL,
  `discount` int(5) NOT NULL,
  `second_payment_id` int(11) NOT NULL,
  `balance_amount` decimal(10,2) NOT NULL,
  `amount_status` enum('C','NC') NOT NULL DEFAULT 'NC',
  `room_change_status` enum('Y','N') NOT NULL DEFAULT 'N',
  `old_room` varchar(100) NOT NULL,
  `status` enum('H','F','E','B','BC','C') NOT NULL DEFAULT 'E',
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `amt_refund` decimal(10,2) NOT NULL,
  `refund_reason` varchar(200) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `hms_booking_status`
--

INSERT INTO `hms_booking_status` (`booking_id`, `customer_id`, `booking_no`, `checking_no`, `no_adults`, `no_child`, `room_type_id`, `rooms_id`, `no_of_rooms`, `rooms_no`, `no_of_days`, `extra_bed`, `extra_bed_charge`, `nature_of_guest`, `payment_type`, `room_amount`, `total_amount`, `advance_pay`, `discount`, `second_payment_id`, `balance_amount`, `amount_status`, `room_change_status`, `old_room`, `status`, `checkin_date`, `checkout_date`, `created_by`, `created_on`, `updated_on`, `amt_refund`, `refund_reason`) VALUES
(1, 1, 'BK 101', 'CI 101', 1, 1, '', '', 0, '131', 1, 0, '0.00', '', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'E', '2009-03-30', '2009-03-30', 1, '2009-03-27', '2010-03-23', '0.00', ''),
(2, 2, '0', 'CI 102', 1, 1, '', '', 0, '113', 1, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'H', '2009-03-30', '2009-03-30', 1, '2009-03-27', '2009-03-27', '0.00', ''),
(4, 4, 'BK 102', '0', 2, 1, '', '', 0, '114,102,103,125,106,502,113,116,122,123,133,132,131,130,153,138,129,134,135,136,137,104,119,120,121,', 1, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'BC', '2009-04-02', '2009-04-02', 1, '2009-04-02', '2009-04-02', '0.00', ''),
(5, 5, 'BK 103', '0', 2, 1, '', '', 0, '157,156,155,127,110,115,117,124,126,128,154,112,111,105', 0, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'BC', '2009-04-02', '2009-04-02', 1, '2009-04-02', '2009-04-06', '0.00', ''),
(6, 6, 'BK 104', '0', 3, 0, '', '', 0, '103,125,502,113,106,102,116,122,123,114,138,153,129,130,131,132,133,134,135,136,137,157,156,154,128,', 1, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'BC', '2009-04-06', '2009-04-08', 3, '2009-04-06', '2009-07-25', '0.00', ''),
(7, 7, 'BK 105', '0', 2, 2, '', '', 0, '123,116,502,125,103,102,106,113,130,129,114,138,153,131,132,133,134,135,136,137,122,105,117,110,104,', 1, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'BC', '2009-04-09', '2009-04-13', 3, '2009-04-06', '2010-01-11', '0.00', ''),
(8, 8, 'BK 106', '0', 1, 2, '', '', 0, '113', 3, 0, '0.00', '6', '0', '0.00', '0.00', '333.00', 0, 0, '33000.00', 'NC', 'N', '', 'BC', '2010-01-11', '2010-01-14', 3, '2010-01-11', '2010-01-11', '0.00', ''),
(9, 9, 'BK 107', '0', 2, 1, '', '', 0, '103', 5, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'E', '2010-01-12', '2010-01-16', 3, '2010-01-11', '2010-02-19', '0.00', ''),
(10, 10, 'BK 108', '0', 2, 1, '', '', 0, '103', 10, 0, '0.00', '4', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'E', '2010-01-11', '2010-01-11', 3, '2010-01-11', '2010-02-19', '0.00', ''),
(11, 11, 'BK 109', '0', 1, 0, '', '', 0, '125', 10, 0, '0.00', '6', '22', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'BC', '2010-01-11', '2010-01-22', 3, '2010-01-11', '2010-01-11', '0.00', ''),
(12, 12, '', '0', 0, 0, '', '', 0, '', 0, 0, '0.00', '', '', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'BC', '0000-00-00', '0000-00-00', 3, '2010-01-11', '2010-01-11', '0.00', ''),
(13, 13, 'BK 110', '0', 0, 0, '', '', 0, '125', 5, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'BC', '2010-01-15', '2010-01-20', 3, '2010-01-11', '2010-01-11', '0.00', ''),
(14, 14, 'BK 111', '0', 2, 1, '', '', 0, '103', 3, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'E', '2010-02-11', '2010-02-12', 3, '2010-01-11', '2010-02-19', '0.00', ''),
(15, 15, 'BK 112', 'CI 103', 0, 0, '', '', 0, '103', 0, 0, '0.00', '', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'E', '2010-02-19', '2010-02-19', 0, '2010-01-11', '2010-02-19', '0.00', ''),
(16, 16, 'BK 113', '0', 0, 0, '', '', 0, '103', 1, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'E', '2010-01-11', '2010-01-12', 3, '2010-01-11', '2010-02-19', '0.00', ''),
(17, 17, 'BK 114', '0', 1, 2, '', '', 0, '100,102,106,100', 1, 1, '1.00', '6', '22', '0.00', '0.00', '500.00', 2, 0, '1950.00', 'NC', 'N', '', 'BC', '2010-01-16', '2010-01-18', 3, '2010-01-13', '2010-02-19', '0.00', ''),
(18, 18, 'BK 115', 'CI 104', 2, 2, '', '', 0, '117,124,126,128,154', 1, 2, '0.00', '', '22', '0.00', '0.00', '0.00', 1, 0, '0.00', 'NC', 'N', '', 'H', '2010-03-18', '2010-03-18', 0, '2010-03-18', '2010-03-18', '0.00', ''),
(19, 19, 'BK 116', 'CI 105', 2, 1, '', '', 0, '113', 1, 0, '0.00', '', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'H', '2011-02-07', '2011-02-07', 0, '2011-02-07', '2011-02-07', '0.00', ''),
(20, 20, 'BK 117', '0', 5, 0, '', '', 0, '132', 1, 0, '0.00', '1', '0', '0.00', '0.00', '26.00', 0, 0, '68.00', 'NC', 'N', '', 'B', '2011-02-07', '2011-02-15', 3, '2011-02-07', '0000-00-00', '0.00', ''),
(21, 21, 'BK 118', '0', 0, 0, '', '', 0, '122,123', 0, 0, '0.00', '6', '0', '0.00', '0.00', '0.00', 0, 0, '0.00', 'NC', 'N', '', 'B', '2014-08-06', '2014-08-06', 3, '2014-08-06', '0000-00-00', '0.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `hms_checkout_time`
--

CREATE TABLE IF NOT EXISTS `hms_checkout_time` (
  `hms_checkout_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_checkout_time` int(10) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`hms_checkout_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `hms_checkout_time`
--

INSERT INTO `hms_checkout_time` (`hms_checkout_id`, `hms_checkout_time`, `active`, `date_added`, `date_modified`) VALUES
(23, 10, 'N', '2009-02-28 12:46:43', '2009-07-30 00:25:24'),
(25, 10, 'N', '2009-07-30 00:19:02', '0000-00-00 00:00:00'),
(26, 10, 'N', '2009-07-30 00:19:29', '0000-00-00 00:00:00'),
(27, 20, 'Y', '2009-07-30 00:25:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_customer_table`
--

CREATE TABLE IF NOT EXISTS `hms_customer_table` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(150) NOT NULL,
  `customer_address` varchar(150) NOT NULL,
  `customer_city` varchar(150) NOT NULL,
  `customer_zip` varchar(10) NOT NULL,
  `customer_state` varchar(150) NOT NULL,
  `customer_country` int(3) NOT NULL,
  `customer_contact_no` varchar(25) NOT NULL,
  `customer_email_id` varchar(150) NOT NULL,
  `customer_id_type` varchar(150) NOT NULL,
  `customer_id_no` varchar(50) NOT NULL,
  `customer_veh_no` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `hms_customer_table`
--

INSERT INTO `hms_customer_table` (`customer_id`, `customer_name`, `customer_address`, `customer_city`, `customer_zip`, `customer_state`, `customer_country`, `customer_contact_no`, `customer_email_id`, `customer_id_type`, `customer_id_no`, `customer_veh_no`, `created_by`, `created_on`) VALUES
(1, 'dsafasd', 'fasdf', 'asdfas', '3452345', 'fsa', 19, '234523', '', '', '', '', 1, '2009-03-27 13:05:56'),
(2, 'sdafasd', 'fasdfsa', 'fasf', '42134', 'asfas', 15, '23424', '', '', '', '', 1, '2009-03-27 14:31:25'),
(3, 'sadfasdf', 'asdf', 'asdfsadf', '2354325', 'sadf', 2, '3452345', '', '', '', '', 1, '2009-03-27 14:58:24'),
(4, 'Test', 'abc', 'abc', '123', 'abc', 51, '123', 'abc@abc.com', '2', '', '', 1, '2009-04-02 14:59:30'),
(5, 'Test A', 'abc', 'abc ', '123', 'abc', 51, '123', '', '2', '', '', 1, '2009-04-02 15:00:37'),
(6, 'Test', 'Test', 'Test', '123', 'Test', 51, '123', '', '', '', '', 1, '2009-04-06 12:39:38'),
(7, 'Test A', 'Test', 'Test', '123', 'Test', 51, '123', '', '', '', '', 1, '2009-04-06 12:41:38'),
(8, 'ddd', 'ddd', 'ddd', '3333', 'ddd', 18, '222', '23', '1', '222', '33', 3, '2010-01-11 01:08:14'),
(9, 'test_name', 'test_address', 'test_city', '605004', 'test_state', 51, '2355143', '', '', '', '', 3, '2010-01-11 01:51:31'),
(10, 'sam', 'T.Nagar, Mudaliarpet', 'chennai', '600024', 'tn', 51, '2355143', '', '', '', '', 3, '2010-01-11 02:00:52'),
(11, 'samuvel', 'Mudaliarpet', 'py', '605004', 'py', 51, '2', '', '', '', '', 3, '2010-01-11 02:05:04'),
(12, 'clark', '', '', '', '', 0, '', '', '', '', '', 3, '2010-01-11 02:11:43'),
(13, 'xzczx', 'zxc', 'z', 'xcz', 'cxzc', 2, 'xcz', '', '', '', '', 3, '2010-01-11 02:14:10'),
(14, 'samuvel', 'add1', 'city1', '605004', 'state1', 51, '123', '', '', '', '', 3, '2010-01-11 02:45:11'),
(15, 'aaa', 'fasdf', 'dsf', 'df', 'dsfsad', 1, 'dsf', 'dsf', '2', '', '', 3, '2010-01-11 02:56:45'),
(16, 'bbb', 'dfa', 'dsa', 'dsfsd', 'fsdaf', 33, 'fsdfsdf', 'sdf', '1', 'sdf', 'sdf', 3, '2010-01-11 03:01:48'),
(17, 'kumar', 'pondy', 'pondy', '605112', 'pondy', 1, '6539988', 'kumar@gmail.com', '1', '256', '25636', 3, '2010-01-13 02:40:51'),
(18, 'vasanth', 'Lawspet Main Road', 'Pondicherry', '605008', 'Pondicherry', 51, '834535734', 'vasanth@atomicka.in', '1', '', '', 3, '2010-03-18 05:52:49'),
(19, 'test', 'ddd', 'dd', '3333', 'dd', 4, '222222', 'xcxcxc@dd.uu', '1', '33', '333', 3, '2011-02-07 05:15:50'),
(20, 'fg', 'gh', 'tt', '555', 'gh', 7, '656', 'mjk@gh', '1', '777', '67', 3, '2011-02-07 08:48:38'),
(21, 'yuky', 'yuky', 'uykruy', 'uk', 'yukryuk', 124, 'ukryu', '', '', 'jk,', 'kj,', 3, '2014-08-06 17:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `hms_department_creation`
--

CREATE TABLE IF NOT EXISTS `hms_department_creation` (
  `department_creation_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_creation_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`department_creation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `hms_department_creation`
--

INSERT INTO `hms_department_creation` (`department_creation_id`, `department_creation_name`, `active`, `created_date`, `modified_date`) VALUES
(20, 'Billing', 'Y', '2009-03-06 15:41:45', '2009-03-10 15:18:12'),
(21, 'Service', 'Y', '2009-03-06 15:43:40', '2009-03-10 15:18:04'),
(22, 'Security', 'Y', '2009-03-06 15:44:15', '2009-03-10 15:17:53'),
(23, 'Cooking', 'Y', '2009-03-06 15:44:47', '2009-03-10 15:17:42'),
(25, 'Parking Maintenance', 'Y', '2009-03-10 15:16:29', '2009-03-12 18:55:04'),
(26, 'Payment Department', 'Y', '2011-02-07 06:14:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_designation`
--

CREATE TABLE IF NOT EXISTS `hms_designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `hms_designation`
--

INSERT INTO `hms_designation` (`designation_id`, `designation_name`, `active`, `created_date`, `modified_date`) VALUES
(35, 'Parking Monitor', 'Y', '2009-03-06 15:50:28', '2009-03-12 14:41:44'),
(34, 'Watchman', 'Y', '2009-03-06 15:49:45', '2009-03-10 15:21:20'),
(33, 'RoomServer', 'Y', '2009-03-06 15:49:27', '2009-03-10 15:21:31'),
(32, 'Sweeper', 'Y', '2009-03-06 15:49:10', '2009-03-10 15:21:38'),
(31, 'Manager', 'Y', '2009-03-06 15:49:00', '2009-03-10 15:21:50'),
(36, 'Cashier', 'Y', '2011-02-07 06:14:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_entry_type`
--

CREATE TABLE IF NOT EXISTS `hms_entry_type` (
  `item_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_entry_name` varchar(30) NOT NULL,
  `item_entry_type` varchar(30) NOT NULL,
  `item_unit` int(10) NOT NULL,
  `opening_stock` int(10) NOT NULL,
  `item_maxqty` int(10) NOT NULL,
  `item_minqty` int(10) NOT NULL,
  `standard_qty` int(10) NOT NULL,
  `standard_rate` int(10) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` date NOT NULL,
  `date_modified` date NOT NULL,
  PRIMARY KEY (`item_entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hms_entry_type`
--

INSERT INTO `hms_entry_type` (`item_entry_id`, `item_entry_name`, `item_entry_type`, `item_unit`, `opening_stock`, `item_maxqty`, `item_minqty`, `standard_qty`, `standard_rate`, `active`, `date_added`, `date_modified`) VALUES
(1, 'dsssdhs', 'hggh', 2, 3, 3, 2, 1, 2, 'Y', '2009-03-11', '2009-03-11'),
(4, 'aws', 'ere', 4, 3, 2, 2, 2, 2, 'Y', '2009-03-11', '2009-03-12'),
(7, 'sss', 'ss', 0, 0, 0, 0, 0, 0, 'Y', '2011-02-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_facility_entry`
--

CREATE TABLE IF NOT EXISTS `hms_facility_entry` (
  `hms_facility_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_facility_entry_name` varchar(250) NOT NULL,
  `hms_facility_charges` varchar(250) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`hms_facility_entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `hms_facility_entry`
--

INSERT INTO `hms_facility_entry` (`hms_facility_entry_id`, `hms_facility_entry_name`, `hms_facility_charges`, `active`, `date_added`, `date_modified`) VALUES
(32, 'Bed', '10', 'Y', '2009-02-12 14:50:06', '0000-00-00 00:00:00'),
(31, 'Cable TV', '10', 'Y', '2009-02-12 14:49:47', '0000-00-00 00:00:00'),
(33, 'AC', '50', 'Y', '2009-02-12 14:50:27', '0000-00-00 00:00:00'),
(28, 'Internet', '10', 'Y', '2009-02-02 12:39:34', '2009-07-17 06:13:12'),
(36, 'AC Restaurant ', '500', 'Y', '2011-02-07 06:11:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_floor_creation`
--

CREATE TABLE IF NOT EXISTS `hms_floor_creation` (
  `floor_creation_id` int(11) NOT NULL AUTO_INCREMENT,
  `floor_creation_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`floor_creation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hms_floor_creation`
--

INSERT INTO `hms_floor_creation` (`floor_creation_id`, `floor_creation_name`, `active`, `created_date`, `modified_date`) VALUES
(1, '1st', 'N', '2009-03-11 12:18:19', '2009-07-26 00:48:14'),
(2, '2nd ', 'Y', '2009-03-11 12:18:46', '2009-03-12 19:27:30'),
(4, '2nd floor', 'Y', '2009-07-13 10:43:36', '0000-00-00 00:00:00'),
(5, 'First name', 'Y', '2011-02-07 06:14:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_house_keep`
--

CREATE TABLE IF NOT EXISTS `hms_house_keep` (
  `house_keep_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_number_id` int(3) NOT NULL,
  `type_work` text NOT NULL,
  `assign_user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `esp_com_date` date NOT NULL,
  `exp_com_time` time NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`house_keep_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `hms_house_keep`
--

INSERT INTO `hms_house_keep` (`house_keep_id`, `room_number_id`, `type_work`, `assign_user_id`, `date`, `esp_com_date`, `exp_com_time`, `status_id`) VALUES
(74, 131, 'Test', 3, '2010-03-25', '0000-00-00', '01:01:00', 1),
(75, 131, 'test', 1, '2009-04-09', '0000-00-00', '01:01:00', 2),
(76, 131, 'maintance ', 3, '2010-01-11', '0000-00-00', '23:59:00', 2),
(77, 131, 'Out of Order', 3, '2010-01-13', '0000-00-00', '06:17:00', 2),
(78, 103, 'test', 3, '2010-02-19', '0000-00-00', '01:01:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hms_info`
--

CREATE TABLE IF NOT EXISTS `hms_info` (
  `hms_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_info_name` varchar(250) NOT NULL COMMENT 'Hotel Info Name',
  `hms_info_address` varchar(250) NOT NULL COMMENT 'Hetel Info Address',
  `hms_info_city` varchar(150) NOT NULL COMMENT 'Hotel Info City',
  `hms_info_state` varchar(150) NOT NULL COMMENT 'Hotel Info State',
  `hms_info_zip` int(8) NOT NULL,
  `hms_info_country` varchar(150) NOT NULL,
  `hms_info_phone` int(25) NOT NULL,
  `hms_info_fax` int(25) NOT NULL,
  `hms_info_email` varchar(250) NOT NULL,
  `hms_info_url` varchar(150) NOT NULL,
  `hms_info_extension` varchar(10) NOT NULL,
  `hms_info_active` enum('Y','N') NOT NULL DEFAULT 'N',
  `hms_info_created_date` datetime NOT NULL,
  `hms_info_modify_date` datetime NOT NULL,
  PRIMARY KEY (`hms_info_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `hms_info`
--

INSERT INTO `hms_info` (`hms_info_id`, `hms_info_name`, `hms_info_address`, `hms_info_city`, `hms_info_state`, `hms_info_zip`, `hms_info_country`, `hms_info_phone`, `hms_info_fax`, `hms_info_email`, `hms_info_url`, `hms_info_extension`, `hms_info_active`, `hms_info_created_date`, `hms_info_modify_date`) VALUES
(20, 'Saravana bhavan', 'No 26,8th cross, adyar,chennai-600028', 'Chennai', 'Tamil nadu', 600028, '', 413, 412, 'sb@gmail.com', 'http://www.sb.ac.in', 'jpg', 'Y', '2011-02-07 06:07:05', '0000-00-00 00:00:00'),
(19, 'dwarkas', '89, main Road, K.R. Palayam', 'pondicherry', 'pondicherry', 605501, 'india', 655855655, 78998, 'hjhdg@fjdhf.com', 'dfjkhgh.com', 'jpg', 'N', '2009-02-07 10:08:30', '2009-03-16 09:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `hms_item_type`
--

CREATE TABLE IF NOT EXISTS `hms_item_type` (
  `item_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_type_name` varchar(250) NOT NULL,
  `ingredient` enum('Y','N') NOT NULL DEFAULT 'Y',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`item_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `hms_item_type`
--

INSERT INTO `hms_item_type` (`item_type_id`, `item_type_name`, `ingredient`, `active`, `date_added`, `date_modified`) VALUES
(35, 'Services', 'Y', 'Y', '2009-03-11 12:43:18', '2009-03-11 12:43:28'),
(37, 'Food item', 'Y', 'Y', '2011-02-07 06:23:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_menu_card`
--

CREATE TABLE IF NOT EXISTS `hms_menu_card` (
  `menu_card_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_card_name` varchar(250) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`menu_card_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hms_menu_card`
--

INSERT INTO `hms_menu_card` (`menu_card_id`, `menu_card_name`, `active`, `date_added`, `date_modified`) VALUES
(4, 'RichiRichy', 'Y', '2009-03-06 17:02:34', '2009-03-18 17:57:38'),
(5, 'Bar Menu', 'Y', '2009-03-06 17:21:55', '2009-03-18 11:37:35'),
(6, 'Restaurant ', 'Y', '2009-03-06 17:23:58', '2009-03-18 17:57:37'),
(11, 'Hotel menu card', 'Y', '2011-02-07 06:22:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_menu_card_selection`
--

CREATE TABLE IF NOT EXISTS `hms_menu_card_selection` (
  `menu_card_selection_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_card_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_category_id` int(11) NOT NULL,
  `quty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`menu_card_selection_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `hms_menu_card_selection`
--

INSERT INTO `hms_menu_card_selection` (`menu_card_selection_id`, `menu_card_id`, `menu_id`, `menu_category_id`, `quty`, `price`) VALUES
(5, 4, 18, 49, 1, '8.00'),
(6, 4, 19, 49, 1, '5.00'),
(7, 4, 21, 49, 1, '8.00'),
(8, 4, 15, 49, 1, '9.00'),
(9, 4, 16, 49, 1, '10.00'),
(10, 4, 13, 48, 1, '20.00'),
(11, 4, 9, 48, 1, '15.00'),
(12, 4, 12, 48, 1, '20.00'),
(13, 4, 11, 48, 1, '20.00'),
(14, 4, 10, 48, 1, '25.00'),
(15, 4, 28, 51, 1, '40.00'),
(16, 4, 30, 51, 1, '20.00'),
(17, 4, 31, 51, 1, '30.00'),
(18, 4, 29, 51, 1, '50.00'),
(19, 4, 32, 51, 1, '50.00'),
(20, 4, 26, 50, 1, '20.00'),
(21, 4, 23, 50, 1, '15.00'),
(22, 4, 24, 50, 1, '15.00'),
(23, 4, 22, 50, 1, '20.00'),
(24, 4, 25, 50, 1, '20.00'),
(25, 4, 34, 52, 1, '20.00'),
(26, 4, 33, 52, 1, '10.00'),
(27, 4, 36, 52, 1, '30.00'),
(28, 4, 35, 52, 1, '20.00'),
(29, 4, 37, 52, 1, '20.00'),
(30, 4, 40, 54, 1, '45.00'),
(31, 4, 41, 54, 1, '50.00'),
(32, 4, 39, 54, 1, '45.00'),
(33, 4, 42, 54, 1, '50.00'),
(34, 4, 43, 54, 1, '50.00'),
(35, 5, 28, 51, 1, '40.00'),
(36, 5, 30, 51, 1, '20.00'),
(37, 5, 31, 51, 1, '30.00'),
(38, 5, 29, 51, 1, '40.00'),
(39, 5, 32, 51, 1, '40.00'),
(40, 5, 26, 50, 1, '25.00'),
(41, 5, 23, 50, 1, '20.00'),
(42, 5, 24, 50, 1, '20.00'),
(43, 5, 22, 50, 1, '30.00'),
(44, 5, 25, 50, 1, '30.00'),
(45, 5, 40, 54, 1, '45.00'),
(46, 5, 41, 54, 1, '50.00'),
(47, 5, 39, 54, 1, '45.00'),
(48, 5, 42, 54, 1, '50.00'),
(49, 5, 43, 54, 1, '45.00'),
(50, 6, 18, 49, 1, '10.00'),
(51, 6, 19, 49, 1, '5.00'),
(52, 6, 21, 49, 1, '10.00'),
(53, 6, 15, 49, 1, '10.00'),
(54, 6, 16, 49, 1, '15.00'),
(55, 6, 13, 48, 1, '20.00'),
(56, 6, 9, 48, 1, '25.00'),
(57, 6, 12, 48, 1, '30.00'),
(58, 6, 11, 48, 1, '25.00'),
(59, 6, 10, 48, 1, '25.00'),
(60, 6, 28, 51, 1, '40.00'),
(61, 6, 30, 51, 1, '20.00'),
(62, 6, 31, 51, 1, '20.00'),
(63, 6, 29, 51, 1, '40.00'),
(64, 6, 32, 51, 1, '40.00'),
(65, 6, 26, 50, 1, '15.00'),
(66, 6, 23, 50, 1, '20.00'),
(67, 6, 24, 50, 1, '20.00'),
(68, 6, 22, 50, 1, '25.00'),
(69, 6, 25, 50, 1, '25.00'),
(70, 6, 34, 52, 1, '25.00'),
(71, 6, 33, 52, 1, '10.00'),
(72, 6, 36, 52, 1, '25.00'),
(73, 6, 35, 52, 1, '15.00'),
(74, 6, 37, 52, 1, '20.00'),
(79, 11, 45, 57, 100, '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_menu_category`
--

CREATE TABLE IF NOT EXISTS `hms_menu_category` (
  `hms_menu_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_menu_category_name` varchar(250) NOT NULL,
  `taxable` enum('YES','NO') NOT NULL DEFAULT 'YES',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`hms_menu_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `hms_menu_category`
--

INSERT INTO `hms_menu_category` (`hms_menu_category_id`, `hms_menu_category_name`, `taxable`, `active`, `date_added`, `date_modified`) VALUES
(49, 'cooldrinks', 'NO', 'Y', '2009-03-06 15:52:06', '2010-02-19 03:43:39'),
(48, 'icecreams', 'YES', 'Y', '2009-03-06 15:51:46', '2010-02-19 03:43:39'),
(51, 'non-vegetarian', 'NO', 'Y', '2009-03-06 15:52:42', '0000-00-00 00:00:00'),
(50, 'vegetarian', 'NO', 'Y', '2009-03-06 15:52:31', '2010-02-19 03:43:41'),
(52, 'sweets', '', 'Y', '2009-03-06 15:53:08', '2010-02-19 03:43:40'),
(54, 'drinks', 'YES', 'Y', '2009-03-06 15:55:19', '0000-00-00 00:00:00'),
(57, 'Dinner', 'YES', 'Y', '2011-02-07 06:21:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_menu_entry`
--

CREATE TABLE IF NOT EXISTS `hms_menu_entry` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_category_id` int(11) NOT NULL,
  `menu_name` varchar(250) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `hms_menu_entry`
--

INSERT INTO `hms_menu_entry` (`menu_id`, `menu_category_id`, `menu_name`, `active`, `date_added`, `date_modified`) VALUES
(14, 49, 'Pepsi', 'Y', '2009-03-06 16:05:16', '0000-00-00 00:00:00'),
(13, 48, 'ButterScotch', 'Y', '2009-03-06 16:02:35', '0000-00-00 00:00:00'),
(8, 48, 'Vennila', 'N', '2009-03-06 15:55:39', '2009-03-06 16:18:56'),
(12, 48, 'Cornish Dairy', 'Y', '2009-03-06 15:59:46', '0000-00-00 00:00:00'),
(11, 48, 'Mango', 'Y', '2009-03-06 15:57:50', '2009-03-06 15:59:56'),
(10, 48, 'Strawberry', 'Y', '2009-03-06 15:56:36', '2009-03-06 16:00:04'),
(9, 48, 'Chocolate', 'Y', '2009-03-06 15:56:12', '2009-03-06 16:00:13'),
(15, 49, 'Coke', 'Y', '2009-03-06 16:05:35', '0000-00-00 00:00:00'),
(16, 49, 'Lassi', 'Y', '2009-03-06 16:05:51', '2009-03-06 16:07:33'),
(17, 49, 'Maaza', 'Y', '2009-03-06 16:06:12', '0000-00-00 00:00:00'),
(18, 49, '7Up', 'Y', '2009-03-06 16:06:28', '0000-00-00 00:00:00'),
(19, 49, 'Ashoka', 'Y', '2009-03-06 16:06:52', '0000-00-00 00:00:00'),
(20, 49, 'Limca', 'Y', '2009-03-06 16:07:14', '0000-00-00 00:00:00'),
(21, 49, 'Coca Cola', 'Y', '2009-03-06 16:08:46', '0000-00-00 00:00:00'),
(22, 50, 'Sambar Rice', 'Y', '2009-03-06 16:10:25', '0000-00-00 00:00:00'),
(23, 50, 'Curd Rice', 'Y', '2009-03-06 16:10:45', '2009-03-06 16:11:46'),
(24, 50, 'Lemon Rice', 'Y', '2009-03-06 16:11:30', '0000-00-00 00:00:00'),
(25, 50, 'Tamarind Rice', 'Y', '2009-03-06 16:12:03', '0000-00-00 00:00:00'),
(26, 50, 'Corainder Rice', 'Y', '2009-03-06 16:31:18', '0000-00-00 00:00:00'),
(27, 50, 'Tomato Rice', 'Y', '2009-03-06 16:32:52', '0000-00-00 00:00:00'),
(28, 51, 'Chicken Briyani', 'Y', '2009-03-06 16:33:42', '0000-00-00 00:00:00'),
(29, 51, 'Mutton Briyani', 'Y', '2009-03-06 16:33:56', '0000-00-00 00:00:00'),
(30, 51, 'Chicken65', 'Y', '2009-03-06 16:34:36', '0000-00-00 00:00:00'),
(31, 51, 'Fish Fry', 'Y', '2009-03-06 16:34:57', '0000-00-00 00:00:00'),
(32, 51, 'Prawn Fry', 'Y', '2009-03-06 16:35:12', '0000-00-00 00:00:00'),
(33, 52, 'Gulobjamun', 'Y', '2009-03-06 16:37:40', '0000-00-00 00:00:00'),
(34, 52, 'Badam Patisa ', 'Y', '2009-03-06 16:40:30', '0000-00-00 00:00:00'),
(35, 52, 'Kesari', 'Y', '2009-03-06 16:40:44', '0000-00-00 00:00:00'),
(36, 52, 'Halwa', 'Y', '2009-03-06 16:41:00', '0000-00-00 00:00:00'),
(37, 52, 'Rasagulla', 'Y', '2009-03-06 16:42:58', '0000-00-00 00:00:00'),
(39, 54, 'Kingfisher Beer', 'Y', '2009-03-06 16:44:10', '2009-03-06 16:45:53'),
(40, 54, 'Foster Beer', 'Y', '2009-03-06 16:44:24', '0000-00-00 00:00:00'),
(41, 54, 'Kalyani Beer', 'Y', '2009-03-06 16:44:39', '0000-00-00 00:00:00'),
(42, 54, 'Mansion House', 'Y', '2009-03-06 16:44:56', '0000-00-00 00:00:00'),
(43, 54, 'Vodka', 'Y', '2009-03-06 16:45:08', '0000-00-00 00:00:00'),
(45, 57, 'Parotta', 'Y', '2011-02-07 06:21:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_occasion_entry`
--

CREATE TABLE IF NOT EXISTS `hms_occasion_entry` (
  `hms_occasion_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_occasion_entry_name` varchar(30) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`hms_occasion_entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `hms_occasion_entry`
--

INSERT INTO `hms_occasion_entry` (`hms_occasion_entry_id`, `hms_occasion_entry_name`, `active`, `date_added`, `date_modified`) VALUES
(25, 'Testing', 'Y', '2009-02-13 11:58:19', '2009-04-29 15:49:51'),
(23, 'muru', 'Y', '2009-02-06 18:26:18', '2009-07-17 06:19:56'),
(28, 'Diwali', 'Y', '2011-02-07 06:08:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_parameter_entry`
--

CREATE TABLE IF NOT EXISTS `hms_parameter_entry` (
  `hms_parameter_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_hotel_name` varchar(30) NOT NULL,
  `hms_address1` varchar(30) NOT NULL,
  `hms_address2` varchar(30) NOT NULL,
  `hms_city` varchar(30) NOT NULL,
  `hms_state` varchar(30) NOT NULL,
  `hms_country` varchar(30) NOT NULL,
  `hms_pincode` int(15) NOT NULL,
  `hms_phone_no` int(15) NOT NULL,
  `hms_url` varchar(30) NOT NULL,
  `hms_email` varchar(20) NOT NULL,
  `hms_footertxt` varchar(30) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `hms_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`hms_parameter_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `hms_parameter_entry`
--

INSERT INTO `hms_parameter_entry` (`hms_parameter_id`, `hms_hotel_name`, `hms_address1`, `hms_address2`, `hms_city`, `hms_state`, `hms_country`, `hms_pincode`, `hms_phone_no`, `hms_url`, `hms_email`, `hms_footertxt`, `date_added`, `date_modified`, `hms_active`) VALUES
(13, 'Annamalai', '42,Main Road', 'Saram', 'Pondicherry', 'Pondicherry', 'India', 605501, 2147483647, 'http://hotel/annamalai.in', 'annamalai@gmail.com', 'Welcome Again', '2009-02-26 12:26:23', '2009-03-07 19:20:57', 'N'),
(14, 'Dwarkas', '44,mission st', 'Pondicherry', 'Pondicherry', 'Pondicherry', 'India', 605501, 2147483647, 'http://www.dwarka.in', 'dwarka@gmail.com', 'Welcome again u', '2009-02-26 14:09:37', '2009-02-28 12:28:56', 'N'),
(19, 'Mass Hotel', 'Pondy', 'pondy', 'Pondy', 'Pondy', 'India', 605501, 6897854, 'http://atomicka.in', 'pmmuru1@gmail.com', 'welcome', '2009-03-10 15:07:36', '2009-03-11 13:00:29', 'N'),
(21, 'Saravana Bhavan', 'Adyar,chennai', 'Adyar,chennai', 'Chennai', 'Tamil nadu', 'India', 600028, 44, 'www.sb.ac.in', 'saravanabhavan@gmail', 'Both Veg and Non Veg', '2011-02-07 06:12:47', '0000-00-00 00:00:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hms_payment_mode`
--

CREATE TABLE IF NOT EXISTS `hms_payment_mode` (
  `payment_mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_mode` varchar(250) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`payment_mode_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `hms_payment_mode`
--

INSERT INTO `hms_payment_mode` (`payment_mode_id`, `payment_mode`, `active`, `date_added`, `date_modified`) VALUES
(25, 'Cheque', 'Y', '2009-02-19 17:16:37', '2009-03-17 15:15:35'),
(24, 'Debit Card', 'Y', '2009-02-19 16:31:27', '2009-03-17 15:15:34'),
(22, 'Credit Card', 'Y', '2009-02-19 16:30:36', '2009-04-29 15:52:35'),
(23, 'Cash', 'Y', '2009-02-19 16:30:48', '2009-03-17 15:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `hms_restaurant_order_account_details`
--

CREATE TABLE IF NOT EXISTS `hms_restaurant_order_account_details` (
  `order_act_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_act_cart_id` int(11) NOT NULL,
  `order_act_table` varchar(200) DEFAULT NULL,
  `order_act_subtotal` decimal(10,2) NOT NULL,
  `order_act_discount` decimal(10,2) NOT NULL,
  `order_act_tax` int(11) NOT NULL,
  `order_act_total` decimal(10,2) NOT NULL,
  `order_act_date` datetime NOT NULL,
  `order_act_report_date` date NOT NULL,
  `order_act_order_type` varchar(255) NOT NULL,
  `order_act_payment_type` int(11) NOT NULL,
  `order_act_cust_id` int(11) NOT NULL,
  `order_act_userrole` int(11) NOT NULL,
  PRIMARY KEY (`order_act_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `hms_restaurant_order_account_details`
--

INSERT INTO `hms_restaurant_order_account_details` (`order_act_id`, `order_act_cart_id`, `order_act_table`, `order_act_subtotal`, `order_act_discount`, `order_act_tax`, `order_act_total`, `order_act_date`, `order_act_report_date`, `order_act_order_type`, `order_act_payment_type`, `order_act_cust_id`, `order_act_userrole`) VALUES
(1, 1, ' 8', '70.00', '0.00', 0, '70.00', '2009-03-18 17:49:39', '2009-03-18', 'Dine', 0, 1, 1),
(2, 1, ' 8', '100.00', '3.00', 5, '102.00', '2009-03-18 17:58:12', '2009-03-18', 'Dine', 0, 1, 1),
(3, 2, '', '40.00', '0.00', 0, '40.00', '2009-03-18 18:00:54', '2009-03-18', 'Room', 0, 0, 1),
(4, 3, ' 8', '120.00', '0.00', 0, '120.00', '2009-03-18 18:04:31', '2009-03-18', 'Dine', 0, 0, 1),
(5, 4, ' 10', '90.00', '0.00', 0, '90.00', '2009-03-18 18:06:48', '2009-03-18', 'Dine', 0, 0, 1),
(6, 3, ' 8', '105.00', '4.00', 10, '111.00', '2009-03-18 18:15:00', '2009-03-18', 'Dine', 0, 0, 1),
(7, 5, '', '20.00', '3.00', 5, '22.00', '2009-03-18 18:16:59', '2009-03-18', 'Room', 0, 0, 1),
(8, 6, '', '75.00', '5.00', 5, '75.00', '2009-03-18 18:17:56', '2009-03-18', 'Room', 0, 0, 1),
(9, 7, '', '270.00', '0.00', 10, '27010.00', '2009-03-18 18:22:53', '2009-03-16', 'Room', 0, 4, 1),
(10, 7, '', '80.00', '0.00', 0, '80.00', '2009-03-19 10:06:07', '2009-03-18', 'Room', 0, 4, 1),
(11, 7, '', '675.00', '0.00', 0, '675.00', '2009-03-19 10:08:07', '2009-03-17', 'Room', 0, 4, 1),
(12, 3, ' 8', '75.00', '0.00', 0, '75.00', '2009-03-21 11:00:24', '2009-03-21', 'Dine', 0, 0, 1),
(13, 3, ' 8', '100.00', '3.00', 5, '102.00', '2009-03-21 11:13:21', '2009-03-21', 'Dine', 0, 0, 1),
(14, 3, ' 8', '30.00', '2.00', 5, '33.00', '2009-03-21 11:14:24', '2009-03-21', 'Dine', 0, 0, 1),
(15, 8, '', '20.00', '2.00', 5, '23.00', '2009-03-21 11:17:19', '2009-03-21', 'Room', 0, 0, 1),
(16, 3, ' 8', '30.00', '2.00', 5, '33.00', '2009-03-21 11:33:29', '2009-03-21', 'Dine', 0, 0, 1),
(17, 4, ' 10', '20.00', '0.00', 0, '20.00', '2009-03-21 11:34:56', '2009-03-21', 'Dine', 0, 0, 1),
(18, 3, ' 8', '10.00', '0.00', 0, '10.00', '2009-03-21 11:37:40', '2009-03-21', 'Dine', 0, 0, 1),
(19, 4, ' 10', '5.00', '0.00', 0, '5.00', '2009-03-21 11:38:55', '2009-03-21', 'Dine', 0, 0, 1),
(20, 3, ' 8', '30.00', '0.00', 0, '30.00', '2009-03-21 11:39:48', '2009-03-21', 'Dine', 0, 0, 1),
(21, 3, ' 8', '40.00', '0.00', 0, '40.00', '2009-03-21 11:40:42', '2009-03-21', 'Dine', 0, 0, 1),
(22, 4, ' 10', '50.00', '0.00', 10, '60.00', '2009-03-21 15:48:50', '2009-03-21', 'Dine', 0, 0, 1),
(23, 3, ' 8', '100.00', '0.00', 0, '100.00', '2009-03-21 15:54:13', '2009-03-21', 'Dine', 0, 0, 1),
(24, 3, ' 8', '140.00', '0.00', 0, '140.00', '2009-03-21 15:55:51', '2009-03-21', 'Dine', 0, 0, 1),
(25, 9, '', '40.00', '0.00', 0, '40.00', '2009-03-21 15:56:47', '2009-03-21', 'Room', 0, 0, 1),
(26, 4, ' 10', '390.00', '0.00', 5, '395.00', '2009-07-25 06:33:24', '2009-07-25', 'Dine', 0, 0, 3),
(27, 4, ' 10', '0.00', '0.00', 0, '0.00', '2010-02-18 22:58:01', '2010-02-18', 'Dine', 0, 0, 3),
(28, 3, ' 8', '70.00', '10.00', 5, '65.00', '2010-02-19 02:20:10', '2010-02-19', 'Dine', 0, 0, 3),
(29, 4, ' 10', '55.00', '0.00', 10, '65.00', '2010-07-27 22:31:15', '2010-07-27', 'Dine', 0, 0, 3),
(30, 4, ' 10', '170.00', '0.00', 0, '170.00', '2010-07-27 22:48:49', '2010-07-27', 'Dine', 0, 0, 3),
(31, 4, ' 10', '4170.00', '0.00', 0, '4170.00', '2010-07-30 02:41:02', '2010-07-30', 'Dine', 0, 0, 3),
(32, 4, ' 10', '60.00', '0.00', 0, '60.00', '2010-08-06 05:00:49', '2010-08-06', 'Dine', 0, 0, 3),
(33, 3, ' 8', '90.00', '0.00', 10, '100.00', '2010-08-06 05:02:26', '2010-08-06', 'Dine', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hms_restaurant_order_details`
--

CREATE TABLE IF NOT EXISTS `hms_restaurant_order_details` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `table_entry_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `order_posted_date` date NOT NULL,
  `order_product` varchar(255) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_cart_id` int(11) NOT NULL,
  `order_category_id` int(11) NOT NULL,
  `order_subcategory_id` int(11) NOT NULL,
  `order_type_id` varchar(255) NOT NULL,
  `product_name_desc` varchar(255) NOT NULL,
  `status` enum('open','closed') NOT NULL DEFAULT 'open',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `hms_restaurant_order_details`
--

INSERT INTO `hms_restaurant_order_details` (`order_id`, `customer_id`, `table_entry_id`, `room_id`, `order_posted_date`, `order_product`, `order_price`, `order_quantity`, `order_cart_id`, `order_category_id`, `order_subcategory_id`, `order_type_id`, `product_name_desc`, `status`) VALUES
(1, 1, 8, 28, '2009-03-18', 'Chicken Briyani', 40, 1, 1, 51, 28, 'Dine', '', 'open'),
(2, 1, 8, 28, '2009-03-18', 'Fish Fry', 30, 1, 1, 51, 31, 'Dine', '', 'open'),
(3, 1, 8, 28, '2009-03-18', 'Coke', 10, 2, 1, 49, 15, 'Dine', '', 'open'),
(4, 1, 8, 28, '2009-03-18', 'Prawn Fry', 40, 2, 1, 51, 32, 'Dine', '', 'open'),
(5, 0, 0, 7, '2009-03-18', 'ButterScotch', 20, 2, 2, 48, 13, 'Room', '', 'open'),
(6, 0, 8, 0, '2009-03-18', 'Ashoka', 5, 2, 3, 49, 19, 'Dine', '', 'closed'),
(7, 0, 8, 0, '2009-03-18', 'Mutton Briyani', 40, 2, 3, 51, 29, 'Dine', '', 'closed'),
(8, 0, 8, 0, '2009-03-18', 'Kesari', 15, 2, 3, 52, 35, 'Dine', '', 'closed'),
(9, 0, 10, 0, '2009-03-18', 'Chocolate', 25, 2, 4, 48, 9, 'Dine', '', 'open'),
(10, 0, 10, 0, '2009-03-18', 'Rasagulla', 20, 2, 4, 52, 37, 'Dine', '', 'open'),
(11, 0, 8, 6, '2009-03-18', '7Up', 10, 3, 3, 49, 18, 'Dine', '', 'closed'),
(12, 0, 8, 6, '2009-03-18', 'Strawberry', 25, 3, 3, 48, 10, 'Dine', '', 'closed'),
(13, 0, 0, 6, '2009-03-18', 'Coca Cola', 10, 2, 5, 49, 21, 'Room', '', 'open'),
(14, 0, 0, 7, '2009-03-18', 'Chocolate', 25, 3, 6, 48, 9, 'Room', '', 'open'),
(15, 4, 0, 20, '2009-03-16', '7Up', 10, 2, 7, 49, 18, 'Room', '', 'closed'),
(16, 4, 0, 20, '2009-03-16', 'Chocolate', 25, 2, 7, 48, 9, 'Room', '', 'closed'),
(17, 4, 0, 20, '2009-03-16', 'Chicken65', 20, 1, 7, 51, 30, 'Room', '', 'closed'),
(18, 4, 0, 20, '2009-03-16', 'Fish Fry', 20, 1, 7, 51, 31, 'Room', '', 'closed'),
(19, 4, 0, 20, '2009-03-16', 'Mutton Briyani', 40, 1, 7, 51, 29, 'Room', '', 'closed'),
(20, 4, 0, 20, '2009-03-16', 'Prawn Fry', 40, 1, 7, 51, 32, 'Room', '', 'closed'),
(21, 4, 0, 20, '2009-03-16', 'Corainder Rice', 15, 1, 7, 50, 26, 'Room', '', 'closed'),
(22, 4, 0, 20, '2009-03-16', 'Curd Rice', 20, 1, 7, 50, 23, 'Room', '', 'closed'),
(23, 4, 0, 20, '2009-03-16', 'Lemon Rice', 20, 1, 7, 50, 24, 'Room', '', 'closed'),
(24, 4, 0, 20, '2009-03-16', 'Tamarind Rice', 25, 1, 7, 50, 25, 'Room', '', 'closed'),
(25, 4, 0, 20, '2009-03-18', 'Chicken Briyani', 40, 2, 7, 51, 28, 'Room', '', 'closed'),
(26, 4, 0, 20, '2009-03-17', 'Vodka', 45, 15, 7, 54, 43, 'Room', '', 'closed'),
(27, 0, 8, 0, '2009-03-21', 'Chocolate', 25, 3, 3, 48, 9, 'Dine', '', 'closed'),
(28, 0, 8, 0, '2009-03-21', 'Coke', 10, 2, 3, 49, 15, 'Dine', '', 'closed'),
(29, 0, 8, 0, '2009-03-21', 'Chicken Briyani', 40, 2, 3, 51, 28, 'Dine', '', 'closed'),
(30, 0, 8, 0, '2009-03-21', 'Lassi', 15, 2, 3, 49, 16, 'Dine', '', 'closed'),
(31, 0, 0, 19, '2009-03-21', 'Coke', 10, 2, 8, 49, 15, 'Room', '', 'open'),
(32, 0, 8, 0, '2009-03-21', 'Lassi', 15, 2, 3, 49, 16, 'Dine', '', 'closed'),
(33, 0, 10, 0, '2009-03-21', 'Coca Cola', 10, 2, 4, 49, 21, 'Dine', '', 'open'),
(34, 0, 8, 0, '2009-03-21', '7Up', 10, 1, 3, 49, 18, 'Dine', '', 'closed'),
(35, 0, 10, 0, '2009-03-21', 'Ashoka', 5, 1, 4, 49, 19, 'Dine', '', 'open'),
(36, 0, 8, 0, '2009-03-21', '7Up', 10, 3, 3, 49, 18, 'Dine', '', 'closed'),
(37, 0, 8, 0, '2009-03-21', 'Lemon Rice', 20, 2, 3, 50, 24, 'Dine', '', 'closed'),
(38, 0, 10, 0, '2009-03-21', '7Up', 10, 2, 4, 49, 18, 'Dine', '', 'open'),
(39, 0, 10, 0, '2009-03-21', 'Ashoka', 5, 2, 4, 49, 19, 'Dine', '', 'open'),
(40, 0, 10, 0, '2009-03-21', 'Coca Cola', 10, 2, 4, 49, 21, 'Dine', '', 'open'),
(41, 0, 8, 0, '2009-03-21', 'Coca Cola', 10, 2, 3, 49, 21, 'Dine', '', 'closed'),
(42, 0, 8, 0, '2009-03-21', 'Mutton Briyani', 40, 2, 3, 51, 29, 'Dine', '', 'closed'),
(43, 0, 8, 0, '2009-03-21', 'Badam Patisa ', 20, 2, 3, 52, 34, 'Dine', '', 'closed'),
(44, 0, 8, 0, '2009-03-21', 'Vodka', 50, 2, 3, 54, 43, 'Dine', '', 'closed'),
(45, 0, 0, 14, '2009-03-21', 'Lemon Rice', 20, 2, 9, 50, 24, 'Room', '', 'open'),
(46, 0, 10, 34, '2009-07-25', 'Chicken Briyani', 40, 4, 4, 51, 28, 'Dine', '', 'open'),
(47, 0, 10, 34, '2009-07-25', 'Chicken65', 20, 3, 4, 51, 30, 'Dine', '', 'open'),
(48, 0, 10, 34, '2009-07-25', 'Mutton Briyani', 40, 2, 4, 51, 29, 'Dine', '', 'open'),
(49, 0, 10, 34, '2009-07-25', 'Vodka', 45, 2, 4, 54, 43, 'Dine', '', 'open'),
(50, 0, 8, 18, '2010-02-19', '7Up', 10, 2, 3, 49, 18, 'Dine', '', 'open'),
(51, 0, 8, 18, '2010-02-19', 'Halwa', 25, 2, 3, 52, 36, 'Dine', '', 'open'),
(52, 0, 10, 0, '2010-07-27', '7Up', 10, 1, 4, 49, 18, 'Dine', '', 'open'),
(53, 0, 10, 0, '2010-07-27', 'Lassi', 15, 3, 4, 49, 16, 'Dine', '', 'open'),
(54, 0, 10, 0, '2010-07-27', 'Fish Fry', 20, 5, 4, 51, 31, 'Dine', '', 'open'),
(55, 0, 10, 0, '2010-07-27', 'Sambar Rice', 25, 2, 4, 50, 22, 'Dine', '', 'open'),
(56, 0, 10, 0, '2010-07-27', 'Rasagulla', 20, 1, 4, 52, 37, 'Dine', '', 'open'),
(57, 0, 10, 7, '2010-07-30', 'Cornish Dairy', 30, 5, 4, 48, 12, 'Dine', '', 'open'),
(58, 0, 10, 7, '2010-07-30', 'Mango', 25, 5, 4, 48, 11, 'Dine', '', 'open'),
(59, 0, 10, 7, '2010-07-30', 'Strawberry', 25, 5, 4, 48, 10, 'Dine', '', 'open'),
(60, 0, 10, 7, '2010-07-30', 'Chicken Briyani', 40, 76, 4, 51, 28, 'Dine', '', 'open'),
(61, 0, 10, 7, '2010-07-30', 'Chicken65', 20, 5, 4, 51, 30, 'Dine', '', 'open'),
(62, 0, 10, 7, '2010-07-30', 'Fish Fry', 20, 7, 4, 51, 31, 'Dine', '', 'open'),
(63, 0, 10, 7, '2010-07-30', 'Mutton Briyani', 40, 1, 4, 51, 29, 'Dine', '', 'open'),
(64, 0, 10, 7, '2010-07-30', 'Prawn Fry', 40, 5, 4, 51, 32, 'Dine', '', 'open'),
(65, 0, 10, 7, '2010-07-30', 'Sambar Rice', 25, 5, 4, 50, 22, 'Dine', '', 'open'),
(66, 0, 10, 7, '2010-07-30', 'Tamarind Rice', 25, 5, 4, 50, 25, 'Dine', '', 'open'),
(67, 0, 10, 32, '2010-08-06', 'Cornish Dairy', 30, 2, 4, 48, 12, 'Dine', '', 'open'),
(68, 0, 8, 46, '2010-08-06', 'Cornish Dairy', 30, 3, 3, 48, 12, 'Dine', '', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `hms_room_creation`
--

CREATE TABLE IF NOT EXISTS `hms_room_creation` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(100) NOT NULL,
  `floor` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `adults` varchar(100) NOT NULL,
  `child` varchar(100) NOT NULL,
  `smoking` enum('SY','SN') NOT NULL DEFAULT 'SN',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `hms_room_creation`
--

INSERT INTO `hms_room_creation` (`room_id`, `room_no`, `floor`, `room_type`, `adults`, `child`, `smoking`, `active`, `date_added`, `date_modified`) VALUES
(11, '110', 20, 35, '5', '4', 'SY', 'Y', '2009-02-12 15:10:15', '0000-00-00 00:00:00'),
(12, '112', 20, 37, '3', '2', 'SY', 'Y', '2009-02-12 15:10:38', '0000-00-00 00:00:00'),
(13, '502', 25, 36, '3', '2', 'SN', 'Y', '2009-02-12 15:11:04', '0000-00-00 00:00:00'),
(14, '114', 21, 33, '2', '1', 'SY', 'Y', '2009-02-28 11:49:29', '0000-00-00 00:00:00'),
(15, '115', 20, 35, '3', '2', 'SY', 'Y', '2009-02-28 11:49:55', '0000-00-00 00:00:00'),
(16, '116', 23, 31, '4', '2', 'SY', 'Y', '2009-02-28 11:50:13', '0000-00-00 00:00:00'),
(17, '117', 24, 34, '4', '3', 'SY', 'Y', '2009-02-28 11:50:28', '0000-00-00 00:00:00'),
(18, '103', 20, 36, '2', '1', 'SY', 'Y', '2009-02-28 11:50:47', '0000-00-00 00:00:00'),
(19, '104', 24, 32, '3', '3', 'SY', 'Y', '2009-02-28 11:51:06', '0000-00-00 00:00:00'),
(20, '105', 24, 37, '4', '2', 'SY', 'Y', '2009-02-28 11:51:21', '0000-00-00 00:00:00'),
(21, '106', 23, 31, '3', '1', 'SY', 'Y', '2009-02-28 11:51:37', '0000-00-00 00:00:00'),
(22, '120', 20, 32, '3', '1', 'SY', 'Y', '2009-02-28 11:51:52', '0000-00-00 00:00:00'),
(23, '121', 22, 32, '5', '3', 'SY', 'Y', '2009-02-28 11:52:07', '0000-00-00 00:00:00'),
(24, '122', 22, 31, '6', '2', 'SY', 'Y', '2009-02-28 11:52:21', '0000-00-00 00:00:00'),
(25, '154', 21, 34, '4', '2', 'SY', 'Y', '2009-02-28 11:52:42', '0000-00-00 00:00:00'),
(26, '155', 21, 35, '4', '1', 'SY', 'Y', '2009-02-28 11:52:56', '0000-00-00 00:00:00'),
(27, '156', 22, 35, '4', '2', 'SY', 'Y', '2009-02-28 11:53:25', '0000-00-00 00:00:00'),
(28, '157', 20, 32, '4', '2', 'SY', 'Y', '2009-02-28 11:53:38', '0000-00-00 00:00:00'),
(29, '125', 21, 36, '6', '2', 'SY', 'Y', '2009-02-28 11:53:55', '0000-00-00 00:00:00'),
(30, '126', 22, 34, '4', '1', 'SY', 'Y', '2009-02-28 11:54:09', '0000-00-00 00:00:00'),
(31, '127', 21, 35, '5', '2', 'SY', 'Y', '2009-02-28 11:54:26', '0000-00-00 00:00:00'),
(32, '128', 22, 34, '4', '2', 'SY', 'Y', '2009-02-28 11:54:41', '0000-00-00 00:00:00'),
(33, '129', 21, 33, '4', '1', 'SY', 'Y', '2009-02-28 11:55:42', '0000-00-00 00:00:00'),
(34, '130', 21, 33, '7', '4', 'SY', 'Y', '2009-02-28 11:55:58', '0000-00-00 00:00:00'),
(35, '131', 21, 33, '2', '1', 'SY', 'Y', '2009-02-28 11:56:15', '0000-00-00 00:00:00'),
(37, '132', 20, 33, '6', '2', 'SY', 'Y', '2009-02-28 11:57:13', '0000-00-00 00:00:00'),
(38, '133', 20, 33, '4', '1', 'SY', 'Y', '2009-02-28 11:57:26', '0000-00-00 00:00:00'),
(39, '134', 22, 33, '3', '3', 'SY', 'Y', '2009-02-28 11:57:41', '0000-00-00 00:00:00'),
(40, '135', 21, 33, '4', '3', 'SY', 'Y', '2009-02-28 11:58:08', '0000-00-00 00:00:00'),
(41, '136', 21, 33, '5', '2', 'SY', 'Y', '2009-02-28 11:58:32', '0000-00-00 00:00:00'),
(42, '137', 21, 33, '2', '2', 'SY', 'Y', '2009-02-28 11:59:01', '0000-00-00 00:00:00'),
(43, '138', 21, 33, '6', '2', 'SY', 'Y', '2009-02-28 11:59:34', '0000-00-00 00:00:00'),
(45, '111', 1, 37, '2', '2', 'SY', 'Y', '2009-03-11 12:21:02', '0000-00-00 00:00:00'),
(46, '123', 2, 31, '2', '1', 'SY', 'Y', '2009-03-12 11:15:04', '0000-00-00 00:00:00'),
(47, '100', 1, 31, '2', '1', 'SY', 'Y', '2009-07-13 03:20:12', '0000-00-00 00:00:00'),
(48, '22', 2, 31, 'ss', 'ss', 'SY', 'Y', '2009-07-26 08:43:25', '0000-00-00 00:00:00'),
(49, '123', 4, 31, '2', '1', 'SY', 'Y', '2010-01-11 01:04:52', '0000-00-00 00:00:00'),
(50, '505', 2, 39, '2', '2', 'SY', 'Y', '2011-02-07 06:16:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_room_service`
--

CREATE TABLE IF NOT EXISTS `hms_room_service` (
  `room_services_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` time NOT NULL,
  `department` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `ser_description` text NOT NULL,
  `other_description` text NOT NULL,
  `charges` decimal(5,2) NOT NULL,
  `esp_com_date` datetime NOT NULL,
  `exp_com_time` time NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`room_services_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hms_room_service`
--

INSERT INTO `hms_room_service` (`room_services_id`, `customer_name`, `room_number`, `date`, `time`, `department`, `services`, `ser_description`, `other_description`, `charges`, `esp_com_date`, `exp_com_time`, `status`) VALUES
(11, 'sadf', '7', '2009-02-18', '01:01:00', 'sadf', 'dsf', 'asdf', 'dsafsad', '999.99', '2009-02-18 00:00:00', '01:01:00', 'Pending'),
(12, 'test', '18', '2010-02-19', '01:01:00', 'test', 'test', 'test', 'test', '140.00', '2010-02-19 00:00:00', '01:01:00', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `hms_room_type`
--

CREATE TABLE IF NOT EXISTS `hms_room_type` (
  `room_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type_name` varchar(150) NOT NULL,
  `facility_id` varchar(250) NOT NULL,
  `bed_size` varchar(150) NOT NULL,
  `charge` varchar(150) NOT NULL,
  `note` varchar(250) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`room_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `hms_room_type`
--

INSERT INTO `hms_room_type` (`room_type_id`, `room_type_name`, `facility_id`, `bed_size`, `charge`, `note`, `active`, `date_added`, `date_modified`) VALUES
(36, 'Deluxe A1', '33,32,31,28', '10-25Sq.m', '2000.00', '', 'Y', '2009-02-12 14:55:18', '0000-00-00 00:00:00'),
(31, 'Small room (80-90 Sq.m)', '33', '10-25Sq.m', '35.00', '', 'Y', '2009-02-12 14:52:06', '2009-02-28 10:34:31'),
(33, 'Large Room (233-277 Sq.m)', '32', '10-25Sq.m', '500.00', '', 'Y', '2009-02-12 14:53:36', '0000-00-00 00:00:00'),
(32, 'Medium Room (125-140 Sq.m)', '31', '10-25Sq.m', '254.00', '', 'Y', '2009-02-12 14:52:57', '2009-02-28 10:34:32'),
(35, 'Triple B & B', '28', '10-25Sq.m', '1500.00', '', 'Y', '2009-02-12 14:54:46', '0000-00-00 00:00:00'),
(34, 'Double B & B', '31,28', '10-25Sq.m', '1000.00', '', 'Y', '2009-02-12 14:54:13', '0000-00-00 00:00:00'),
(37, 'Executive', '32,28', '10-25Sq.m', '1500.00', '', 'Y', '2009-02-12 14:55:59', '0000-00-00 00:00:00'),
(39, 'Family Room', '33,36,32,31', 'Double cot', '1000', 'All the facilites', 'Y', '2011-02-07 06:15:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_services_entry`
--

CREATE TABLE IF NOT EXISTS `hms_services_entry` (
  `hms_services_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `hms_services_entry_department` varchar(250) NOT NULL,
  `hms_services_entry_name` varchar(250) NOT NULL,
  `hms_services_entry_charges` varchar(250) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`hms_services_entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `hms_services_entry`
--

INSERT INTO `hms_services_entry` (`hms_services_entry_id`, `hms_services_entry_department`, `hms_services_entry_name`, `hms_services_entry_charges`, `active`, `date_added`, `date_modified`) VALUES
(28, 'Cooking', 'Purchasing', '21', 'Y', '2009-01-31 18:22:15', '2009-03-11 12:31:46'),
(34, 'Billing', 'Sweeping', '200', 'Y', '2009-03-10 15:04:18', '2009-03-11 12:31:20'),
(32, 'Security', 'Watching', '123', 'Y', '2009-02-06 18:32:31', '2009-03-11 12:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `hms_table_entry`
--

CREATE TABLE IF NOT EXISTS `hms_table_entry` (
  `table_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_type_id` int(11) NOT NULL,
  `table_no` int(11) NOT NULL,
  `numbers_of_chairs` int(11) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`table_entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hms_table_entry`
--

INSERT INTO `hms_table_entry` (`table_entry_id`, `table_type_id`, `table_no`, `numbers_of_chairs`, `active`, `date_added`, `date_modified`) VALUES
(10, 29, 212, 11, 'Y', '2009-03-10 15:26:40', '0000-00-00 00:00:00'),
(8, 23, 2, 8, 'Y', '2009-02-03 12:36:13', '0000-00-00 00:00:00'),
(11, 31, 1000, 10, 'Y', '2011-02-07 06:17:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_table_type_creation`
--

CREATE TABLE IF NOT EXISTS `hms_table_type_creation` (
  `table_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `table_type_name` varchar(250) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`table_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `hms_table_type_creation`
--

INSERT INTO `hms_table_type_creation` (`table_type_id`, `table_type_name`, `active`, `date_added`, `date_modified`) VALUES
(23, 'vadivel', 'Y', '2009-02-02 17:37:22', '2009-02-02 19:50:07'),
(27, 'sdafasdfas', 'Y', '2009-02-03 10:16:02', '0000-00-00 00:00:00'),
(29, 'freeemodel', 'Y', '2009-03-10 15:26:13', '0000-00-00 00:00:00'),
(30, '55', 'Y', '2009-07-26 12:30:03', '0000-00-00 00:00:00'),
(31, 'Buffet', 'Y', '2011-02-07 06:17:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_tax_info`
--

CREATE TABLE IF NOT EXISTS `hms_tax_info` (
  `tax_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_info_name` varchar(250) NOT NULL,
  `charge` varchar(250) NOT NULL,
  `live` enum('Y','N') NOT NULL DEFAULT 'N',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`tax_info_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hms_tax_info`
--

INSERT INTO `hms_tax_info` (`tax_info_id`, `tax_info_name`, `charge`, `live`, `active`, `date_added`, `date_modified`) VALUES
(4, 'income Tax', '5', 'N', 'Y', '2009-02-05 13:23:21', '2009-02-28 10:39:58'),
(3, 'vat tax', '10', 'Y', 'Y', '2009-02-05 13:17:31', '2009-02-28 10:39:59'),
(11, 'trt', '12', 'N', 'N', '2009-02-05 16:10:22', '2009-08-18 03:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `hms_tax_scheme`
--

CREATE TABLE IF NOT EXISTS `hms_tax_scheme` (
  `tax_scheme_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_scheme_name` varchar(250) NOT NULL,
  `from_date` datetime NOT NULL,
  `tax_info_id` varchar(11) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'N',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`tax_scheme_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hms_tax_scheme`
--

INSERT INTO `hms_tax_scheme` (`tax_scheme_id`, `tax_scheme_name`, `from_date`, `tax_info_id`, `active`, `date_added`, `date_modified`) VALUES
(1, 'sdafsdaf', '2009-02-07 00:00:00', '4,11,3', 'Y', '2009-02-05 16:15:34', '2009-02-05 17:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `hms_unit_entry`
--

CREATE TABLE IF NOT EXISTS `hms_unit_entry` (
  `unit_entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`unit_entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `hms_unit_entry`
--

INSERT INTO `hms_unit_entry` (`unit_entry_id`, `unit_name`, `active`, `date_added`, `date_modified`) VALUES
(11, '35', 'Y', '2009-03-11 12:29:40', '2009-03-12 18:29:31'),
(12, '22', 'Y', '2009-03-12 18:27:09', '0000-00-00 00:00:00'),
(13, '12', 'Y', '2009-03-12 18:27:16', '2009-03-12 18:58:40'),
(14, '25', 'Y', '2009-07-30 00:21:50', '2010-01-11 01:21:34'),
(15, 'Unit 1', 'Y', '2011-02-07 06:23:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hms_vendor_creation`
--

CREATE TABLE IF NOT EXISTS `hms_vendor_creation` (
  `vendor_id` int(20) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(250) NOT NULL,
  `vendor_address` varchar(250) NOT NULL,
  `vendor_city` varchar(150) NOT NULL,
  `vendor_state` varchar(150) NOT NULL,
  `vendor_country` varchar(150) NOT NULL,
  `vendor_zip` int(8) NOT NULL,
  `vendor_phone` varchar(20) NOT NULL,
  `vendor_mobile` varchar(20) NOT NULL,
  `vendor_contact` varchar(150) NOT NULL,
  `item_id` int(11) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `hms_vendor_creation`
--

INSERT INTO `hms_vendor_creation` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_city`, `vendor_state`, `vendor_country`, `vendor_zip`, `vendor_phone`, `vendor_mobile`, `vendor_contact`, `item_id`, `active`, `date_added`, `date_modified`) VALUES
(21, 'Muru', 'Pondy', 'Pondy', 'Pondy', 'India', 605501, '654444', '6445545454', 'mani', 5, 'Y', '2009-03-10 15:42:57', '2009-03-10 15:43:15'),
(22, 'Buyer', 'Chennai', 'chennai', 'Tamil nadu', 'India', 6052225, '413-5456626', '9787845645', 'hari', 10, 'Y', '2011-02-07 06:25:11', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
