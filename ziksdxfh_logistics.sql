-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2020 at 02:12 PM
-- Server version: 10.3.23-MariaDB-log-cll-lve
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
-- Database: `ziksdxfh_logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-04-30 18:53:39', '2020-04-30 18:53:39'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-04-30 18:53:39', '2020-04-30 18:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `ref`, `created_at`, `updated_at`) VALUES
(1, 3, 'ONYEMELUKWE CHISOM', 'chisomnzube@gmail.com', 'I love this site', 0, '2020-05-24 15:21:37', '2020-05-24 15:21:37'),
(2, 3, 'Chisom Joseph', 'chisomnzube@gmail.com', 'Me too', 1, '2020-05-24 15:50:11', '2020-05-24 15:50:11'),
(3, 3, 'Chisom Joseph', 'chisomnzube@gmail.com', 'Me too', 1, '2020-05-24 15:50:12', '2020-05-24 15:50:12'),
(4, 3, 'ONYEMELUKWE CHISOM', 'admin@admin.com', 'hey', 1, '2020-05-24 15:50:55', '2020-05-24 15:50:55'),
(5, 3, 'ONYEMELUKWE CHISOM', 'admin@admin.com', 'hey', 1, '2020-05-24 15:50:55', '2020-05-24 15:50:55'),
(6, 3, 'ONYEMELUKWE CHISOM', 'chisomnzube@gmail.com', 'Now you know', 0, '2020-05-24 15:58:36', '2020-05-24 15:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `body`, `file`, `created_at`, `updated_at`) VALUES
(1, 'ONYEMELUKWE CHISOM', '+2347031382795', 'chisomnzube@gmail.com', 'i need help', NULL, '2020-05-16 21:39:27', '2020-05-16 21:39:27'),
(2, 'Chisom Joseph', '7031382795', 'chisomnzube@gmail.com', 'help', 'contact/03 My hrt will trust in you_1589668950.mp3', '2020-05-16 21:42:30', '2020-05-16 21:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(57, 7, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'body', 'text_area', 'Body', 1, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'file', 'file', 'File', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 7),
(63, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(64, 8, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(65, 8, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 2),
(66, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(67, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(68, 9, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(69, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(70, 9, 'owner', 'text', 'Owner', 1, 1, 1, 1, 1, 1, '{}', 3),
(71, 9, 'client', 'text', 'Client', 1, 1, 1, 1, 1, 1, '{}', 4),
(72, 9, 'sector', 'select_dropdown', 'Sector', 1, 1, 1, 1, 1, 1, '{\"default\":\"Oil & Gas\",\"options\":{\"Oil & Gas\":\"Oil & Gas\",\"Power\":\"Power\",\"Manufacturing\":\"Manufacturing\",\"Petrochemicals\":\"Petrochemicals\",\"Information Technology\":\"Information Technology\"}}', 5),
(73, 9, 'details', 'rich_text_box', 'Details', 1, 1, 1, 1, 1, 1, '{}', 6),
(74, 9, 'scope', 'multiple_checkbox', 'Scope', 1, 1, 1, 1, 1, 1, '{\"options\":{\"Freight Forwarding\":\"Freight Forwarding\",\"Consultancy\":\"Consultancy\",\"OEM Representation\":\"OEM Representation\",\"Logistics\":\"Logistics\",\"Procurement\":\"Procurement\",\"Information Technology\":\"Information Technology\",\"Door to Door\":\"Door to Door\"}}', 7),
(75, 9, 'detailedScope', 'multiple_checkbox', 'DetailedScope', 1, 1, 1, 1, 1, 1, '{\"options\":{\"Customs Clearance\":\"Customs Clearance\",\"Consultancy\":\"Consultancy\",\"Financial Services\":\"Financial Services\",\"Logistics\":\"Logistics\",\"Service Provision\":\"Service Provision\",\"Information Technology\":\"Information Technology\"}}', 8),
(76, 9, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 9),
(77, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 10),
(78, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(79, 10, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(80, 10, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(81, 10, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(82, 10, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 4),
(83, 10, 'service', 'select_dropdown', 'Service', 1, 1, 1, 1, 1, 1, '{\"default\":\"Freight Forwarding\",\"options\":{\"Freight Forwarding\":\"Freight Forwarding\",\"Shipping\":\"Shipping\",\"Information Technology\":\"Information Technology\",\"Project Cargo\":\"Project Cargo\",\"Procurement\":\"Procurement\",\"Door to Door\":\"Door to Door\",\"Consultancy\":\"Consultancy\"}}', 5),
(84, 10, 'cityOfDeparture', 'text', 'City Of Departure', 0, 1, 1, 1, 1, 1, '{}', 6),
(85, 10, 'deliveryCity', 'text', 'Delivery City', 0, 1, 1, 1, 1, 1, '{}', 7),
(86, 10, 'incoterms', 'select_dropdown', 'Incoterms', 0, 1, 1, 1, 1, 1, '{\"default\":\"Incoterms\",\"options\":{\"Incoterms\":\"Incoterms\",\"Incoterms 1\":\"Incoterms 1\",\"Incoterms 2\":\"Incoterms 2\"}}', 8),
(87, 10, 'weight', 'text', 'Weight', 0, 1, 1, 1, 1, 1, '{}', 9),
(88, 10, 'height', 'text', 'Height', 0, 1, 1, 1, 1, 1, '{}', 10),
(89, 10, 'width', 'text', 'Width', 0, 1, 1, 1, 1, 1, '{}', 11),
(90, 10, 'length', 'text', 'Length', 0, 1, 1, 1, 1, 1, '{}', 12),
(91, 10, 'condition', 'radio_btn', 'Condition', 0, 1, 1, 1, 1, 1, '{\"default\":\"Fragile\",\"options\":{\"Fragile\":\"Fragile\",\"Express Delivery\":\"Express Delivery\",\"Insurance\":\"Insurance\",\"Packaging\":\"Packaging\"}}', 13),
(92, 10, 'procurementType', 'select_dropdown', 'Procurement Type', 0, 1, 1, 1, 1, 1, '{\"default\":\"Local\",\"options\":{\"Local\":\"Local\",\"International\":\"International\"}}', 14),
(93, 10, 'item', 'text', 'Item', 0, 1, 1, 1, 1, 1, '{}', 15),
(94, 10, 'quantity', 'text', 'Quantity', 0, 1, 1, 1, 1, 1, '{}', 16),
(95, 10, 'manufacturer', 'text', 'Manufacturer', 0, 1, 1, 1, 1, 1, '{}', 17),
(96, 10, 'origin', 'text', 'Origin', 0, 1, 1, 1, 1, 1, '{}', 18),
(97, 10, 'document', 'file', 'Document', 0, 1, 1, 1, 1, 1, '{}', 19),
(98, 10, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{\"on\":\"YES\",\"off\":\"NO\"}', 20),
(99, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 21),
(100, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 22),
(101, 5, 'document', 'file', 'Document', 0, 1, 1, 1, 1, 1, '{}', 14);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name_singular` varchar(255) NOT NULL,
  `display_name_plural` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `policy_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-04-30 18:53:31', '2020-04-30 18:53:31'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-04-30 18:53:31', '2020-04-30 18:53:31'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-04-30 18:53:31', '2020-04-30 18:53:31'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-04-30 18:53:39', '2020-04-30 18:53:39'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-04-30 18:53:40', '2020-05-26 17:36:04'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(7, 'contacts', 'contacts', 'Contact', 'Contacts', 'voyager-chat', 'App\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-05-16 21:44:28', '2020-05-16 21:44:28'),
(8, 'news_subscriptions', 'news-subscriptions', 'News Subscription', 'News Subscriptions', 'voyager-mail', 'App\\NewsSubscription', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-05-20 12:36:47', '2020-05-20 12:36:47'),
(9, 'featured_projects', 'featured-projects', 'Featured Project', 'Featured Projects', 'voyager-archive', 'App\\FeaturedProject', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-25 09:56:47', '2020-06-08 15:34:19'),
(10, 'quotes', 'quotes', 'Quote', 'Quotes', 'voyager-diamond', 'App\\Quote', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-05-25 17:37:09', '2020-05-25 17:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `featured_projects`
--

CREATE TABLE `featured_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detailedScope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_projects`
--

INSERT INTO `featured_projects` (`id`, `name`, `owner`, `client`, `sector`, `details`, `scope`, `detailedScope`, `image`, `created_at`, `updated_at`) VALUES
(25, 'Southern Swamp Gas Gathering Pipeline', 'Shell Petroleum Development Company', 'Daewoo Engineering & Construction Company', 'Oil & Gas', '<div class=\"OutlineElement Ltr SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW209326848 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC 80 Km&nbsp;</span></span><span class=\"TextRun SCXW209326848 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">Gas Gathering&nbsp;</span></span><span class=\"TextRun SCXW209326848 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">Pipeline in Swampy Location&nbsp;</span></span><span class=\"EOP SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"EOP SCXW209326848 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\"}', '{\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/HgHmcjRCOWJrWO4639cm.jpg', '2020-07-05 03:12:02', '2020-07-05 03:12:02'),
(26, 'EPC for fertilizer plant', 'Indorama Eleme Fertilizer Company', 'Daewoo Engineering & Construction Company', 'Manufacturing', '<div class=\"OutlineElement Ltr  BCX0 SCXW70188201\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW70188201 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC for fertilizer plant</span></span><span class=\"EOP SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr  BCX0 SCXW70188201\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW70188201 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Ammonia Synthesis (2,300 MTPD),</span></span><span class=\"EOP SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr  BCX0 SCXW70188201\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW70188201 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Urea Synthesis (4,000 MTPD)</span></span><span class=\"EOP SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"EOP SCXW70188201 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\"}', '{\"Financial Services\":\"Financial Services\"}', 'featured-projects/July2020/7I45pqVPWzIhUEFZHQE9.jpg', '2020-07-05 03:14:49', '2020-07-05 03:14:49'),
(27, 'EPC for  420MW Combined Cycle Power Plant', 'Shell Petroleum Development Company', 'Daewoo Engineering & Construction Company', 'Power', '<p>Afma V Combined Circle Power Plant&nbsp;</p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\"}', 'featured-projects/July2020/2h1zHxhHrVwDaBnvVp6P.png', '2020-07-05 03:19:22', '2020-07-05 03:19:22'),
(28, 'Otumara Node Central Procession facility', 'Shell Petroleum Development Company', 'Daewoo Engineering & Construction Company    C/o Zodiak Freight Services', 'Oil & Gas', '<p><span class=\"TextRun SCXW191056444 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW191056444 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC for 30MMscfd Central Processing Facility</span></span><span class=\"EOP SCXW191056444 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\"}', 'featured-projects/July2020/tgGgpP0N0yjaFlZDG6qk.jpg', '2020-07-05 03:22:18', '2020-07-05 03:22:18'),
(29, 'Utorogu-Ughelli East DomGas Pipeline', 'Shell Petroleum Development Company', 'Daewoo Engineering & Construction Company    C/o Zodiak Freight Services', 'Oil & Gas', '<div class=\"OutlineElement Ltr SCXW105242938 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW105242938 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW105242938 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW105242938 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC for 100km Gas Pipeline</span></span><span class=\"EOP SCXW105242938 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp; for Domestic Project</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW105242938 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW105242938 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"EOP SCXW105242938 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/xjNVS4qpuux49pnGELS8.png', '2020-07-05 03:25:40', '2020-07-05 03:25:40'),
(30, 'Ogbainbiri Flowstation Upgrade Project', 'Nigeria Agip Oil Company', 'Daewoo Engineering & Construction Company    C/o Zodiak Freight Services', 'Oil & Gas', '<div class=\"OutlineElement Ltr SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW165144375 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC for Oil &amp; Gas&nbsp;</span></span><span class=\"TextRun SCXW165144375 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SpellingErrorV2 SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-position: left bottom; border-bottom: 1px solid transparent; background-color: inherit;\">Flowstation</span></span><span class=\"TextRun SCXW165144375 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">&nbsp;</span></span><span class=\"EOP SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW165144375 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Gas : 192 MMSCFD</span></span><span class=\"EOP SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW165144375 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Oil : 40,000 BPD</span></span><span class=\"EOP SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"EOP SCXW165144375 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/wL1BIZ8XpuabYEfcM5k5.png', '2020-07-05 03:28:23', '2020-07-05 03:28:23'),
(31, 'Tebidaba / Brass Oil Pipeline (Phase 1)', 'Nigeria Agip Oil Company', 'Daewoo Engineering & Construction Company    C/o Zodiak Freight Services', 'Oil & Gas', '<p><span class=\"TextRun SCXW136361745 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW136361745 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC for 18&rdquo; x 11Km&nbsp;</span></span><span class=\"TextRun SCXW136361745 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SpellingErrorV2 SCXW136361745 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-position: left bottom; border-bottom: 1px solid transparent; background-color: inherit;\">Tebidaba</span></span><span class=\"TextRun SCXW136361745 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW136361745 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">&nbsp;/&nbsp; Brass Oil Pipeline&nbsp;</span></span><span class=\"EOP SCXW136361745 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/DQlR5ZqBV3mPFUyL2b6v.png', '2020-07-05 03:30:03', '2020-07-05 03:30:03'),
(32, 'Escravos Gas to Liquids Process Plant Project (K001)', 'Chevron   Nigeria Limited', 'Daewoo Engineering & Construction Company    C/o Zodiak Freight Services', 'Oil & Gas', '<div class=\"OutlineElement Ltr  BCX0 SCXW116305021\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW116305021 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">Civil, Mechanical, Instrument, Electrical, FIR Proofing for Process Plant(320 MMSCFD)</span></span><span class=\"EOP SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr  BCX0 SCXW116305021\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW116305021 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Diesel : 22,100 bpd</span></span><span class=\"EOP SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr  BCX0 SCXW116305021\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW116305021 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Naphtha : 10,300 bpd</span></span><span class=\"EOP SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr  BCX0 SCXW116305021\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW116305021 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- LPG : 900 bpd</span></span><span class=\"EOP SCXW116305021 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/SPM1TBFv72HUTw0PVjAI.png', '2020-07-05 03:33:42', '2020-07-05 03:33:42'),
(33, 'Gbaran Ubie IOGP – EPC for CPF, New Manifolds and Remote Locations', 'Shell Petroleum Development Company', 'Daewoo Engineering & Construction Company    C/o Zodiak Freight Services', 'Oil & Gas', '<div class=\"OutlineElement Ltr SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC, Fabrication, Installation and Commissioning of the CPF,&nbsp;</span></span><span class=\"EOP SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">New Manifolds and Remote Locations for&nbsp;</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SpellingErrorV2 SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-position: left bottom; border-bottom: 1px solid transparent; background-color: inherit;\">Gbran</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">/</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SpellingErrorV2 SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-position: left bottom; border-bottom: 1px solid transparent; background-color: inherit;\">Ubie</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">&nbsp;Integrated Oil &amp; Gas Development</span></span><span class=\"EOP SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Oil : 120,000&nbsp;</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SpellingErrorV2 SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-position: left bottom; border-bottom: 1px solid transparent; background-color: inherit;\">bbl</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">/d</span></span><span class=\"EOP SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- Natural Gas : 1&nbsp;</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SpellingErrorV2 SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-position: left bottom; border-bottom: 1px solid transparent; background-color: inherit;\">bscf</span></span><span class=\"TextRun SCXW175120060 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">/d</span></span><span class=\"EOP SCXW175120060 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/Epoeamgurw46lbwFiY9y.jpg', '2020-07-05 03:36:08', '2020-07-05 03:36:08');
INSERT INTO `featured_projects` (`id`, `name`, `owner`, `client`, `sector`, `details`, `scope`, `detailedScope`, `image`, `created_at`, `updated_at`) VALUES
(34, 'Afam VI Combined Cycle Power Plant Project', 'Shell Petroleum Development Company', 'Daewoo Engineering & Construction Company    C/o Zodiak Freight Services', 'Power', '<div class=\"OutlineElement Ltr SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW116847077 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC for 670MW Combined Cycle Power Plant</span></span><span class=\"EOP SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW116847077 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- G/T : 150MW x 3 Units</span></span><span class=\"EOP SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW116847077 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">- S/T : 220MW x 1 Unit</span></span><span class=\"EOP SCXW116847077 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/DNhzEIYvdo1RM6FaNGgm.jpg', '2020-07-05 03:37:43', '2020-07-05 03:37:43'),
(35, 'EGGS 2 Gas Pipeline Project', 'Shell Petroleum Development Company', 'Daewoo Engineering & Construction Company', 'Oil & Gas', '<div class=\"OutlineElement Ltr SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW201653822 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">EPC for 40&rsquo;&rsquo;/ 56km Carbon Steel Gas Pipe-</span></span><span class=\"EOP SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"TextRun SCXW201653822 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-variant-ligatures: none !important; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">Line Crossing Dry &amp; Swamp Area</span></span><span class=\"EOP SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>\r\n<div class=\"OutlineElement Ltr SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow: visible; cursor: text; clear: both; position: relative; direction: ltr; color: #000000; font-family: \'Segoe UI\', \'Segoe UI Web\', Arial, Verdana, sans-serif; font-size: 12px;\">\r\n<p class=\"Paragraph SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; vertical-align: baseline; background-color: transparent; color: windowtext;\"><span class=\"EOP SCXW201653822 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n</div>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/gc5BuVPSpYXxZCHUk2LB.jpg', '2020-07-05 03:39:25', '2020-07-05 03:39:25'),
(36, 'Dangote Fertilizer Company', 'Dangote Group', 'Saipem Contracting', 'Oil & Gas', '<p>EPC for Fertiliser plant&nbsp;</p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/u7TnfZnEoMYtTagpTbm8.jpg', '2020-07-05 03:44:22', '2020-07-05 03:44:22'),
(37, 'Urea Fertilizer Plant Train 2', 'Indorama Eleme Petrochemical Company', 'Daewoo Engineering & Construction Company ', 'Petrochemicals', '<p><span class=\"TextRun SCXW169877788 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW169877788 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">E</span></span><span class=\"TextRun SCXW169877788 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW169877788 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">P</span></span><span class=\"TextRun SCXW169877788 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW169877788 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">C Expansion of Urea Fertilizer Plant&nbsp;</span></span><span class=\"EOP SCXW169877788 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/ctXRQaLIwYvsDNkakhzW.jpg', '2020-07-05 03:47:43', '2020-07-05 03:47:43'),
(38, 'Urea Fertilizer Plant Train 2', 'Indorama Eleme Petrochemical Company', 'Daewoo Engineering & Construction Company', 'Petrochemicals', '<p><span class=\"TextRun SCXW176512644 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">E</span></span><span class=\"TextRun SCXW176512644 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">P</span></span><span class=\"TextRun SCXW176512644 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">C Expansion of Urea Fertilizer Plant&nbsp;</span></span><span class=\"EOP SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/ZxFQlrvgHWuj39cghSIL.jpg', '2020-07-05 03:49:47', '2020-07-05 03:49:47'),
(39, 'Urea Fertilizer Plant Train 2', 'Indorama Eleme Petrochemical Company', 'Daewoo Engineering & Construction Company', 'Petrochemicals', '<p><span class=\"TextRun SCXW176512644 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">E</span></span><span class=\"TextRun SCXW176512644 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">P</span></span><span class=\"TextRun SCXW176512644 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">C Expansion of Urea Fertilizer Plant&nbsp;</span></span><span class=\"EOP SCXW176512644 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/9HCEVZxzCJIyo5nhTvLb.jpg', '2020-07-05 03:49:48', '2020-07-05 03:49:48'),
(40, 'Urea Fertilizer Plant Train 2', 'Indorama Eleme Petrochemical Company', 'Indorama Eleme Fertilizer Company', 'Petrochemicals', '<p><span class=\"TextRun SCXW23442878 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW23442878 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">E</span></span><span class=\"TextRun SCXW23442878 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW23442878 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">P</span></span><span class=\"TextRun SCXW23442878 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW23442878 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">C Expansion of Urea Fertilizer Plant&nbsp;</span></span><span class=\"EOP SCXW23442878 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Financial Services\":\"Financial Services\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/zoFkm2H7x4wVw3fpHJ1k.jpg', '2020-07-05 03:51:47', '2020-07-05 03:51:47'),
(41, 'OFON Offshore Project', 'Total Nigeria Limited', 'Platinum Samandy ventures', 'Oil & Gas', '<p>OFON Offshore Oil &amp; Gas Project</p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/UllHwvm1JP0VvaKumprM.jpg', '2020-07-05 03:54:28', '2020-07-05 03:54:28'),
(42, 'NAOC Ogbainbiri Project', 'Nigeria Agip Oil Company', 'Kilo Global Investment', 'Oil & Gas', '<p><span class=\"TextRun SCXW93736739 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW93736739 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">Oil Pipeline Installation&nbsp;</span></span><span class=\"EOP SCXW93736739 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Logistics\":\"Logistics\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Logistics\":\"Logistics\"}', 'featured-projects/July2020/TL1oWaKcHJNkhcNibiTM.jpg', '2020-07-05 03:56:09', '2020-07-05 03:56:09'),
(43, 'Azikiel Modular Refinery', 'Azikiel Modular Refinery', 'Chemie-Tech ( Prospective) Client)', 'Oil & Gas', '<p>Door - Door Consultancy&nbsp;</p>', '{\"Freight Forwarding\":\"Freight Forwarding\",\"Consultancy\":\"Consultancy\"}', '{\"Customs Clearance\":\"Customs Clearance\",\"Consultancy\":\"Consultancy\"}', 'featured-projects/July2020/0vLhfgIruN2ePviDWQoY.jpg', '2020-07-05 03:59:20', '2020-07-05 03:59:20'),
(44, 'UNDP', 'UNDP', 'UNDP', 'Manufacturing', '<p>Fabric Supplies&nbsp;</p>', '{\"Procurement\":\"Procurement\"}', '{\"Service Provision\":\"Service Provision\"}', 'featured-projects/July2020/fsjcXhs0O9cczNkhnOQe.png', '2020-07-05 04:05:36', '2020-07-05 04:05:36'),
(45, 'COVID -19 Test Kits', 'Institute for Human Virology', 'Cargo Wise', 'Petrochemicals', '<p>Procurement &amp; Supplies&nbsp;</p>', '{\"Logistics\":\"Logistics\",\"Procurement\":\"Procurement\"}', '{\"Service Provision\":\"Service Provision\"}', 'featured-projects/July2020/8Lfg7R14nMvJaUlg0Ctn.jpg', '2020-07-05 04:08:11', '2020-07-05 04:08:11'),
(46, 'General Procurement', 'Saipem   Contracting', 'Saipem Contracting', 'Oil & Gas', '<p><span class=\"TextRun SCXW241566542 BCX0\" lang=\"EN-US\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif; font-kerning: none; line-height: 19.425px; font-variant-ligatures: none !important;\" xml:lang=\"EN-US\" data-contrast=\"auto\"><span class=\"NormalTextRun SCXW241566542 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; background-color: inherit;\">Office Supplies&nbsp;</span></span><span class=\"EOP SCXW241566542 BCX0\" style=\"margin: 0px; padding: 0px; user-select: text; -webkit-user-drag: none; -webkit-tap-highlight-color: transparent; color: #000000; font-size: 11pt; line-height: 19.425px; font-family: Calibri, Calibri_EmbeddedFont, Calibri_MSFontService, sans-serif;\" data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559740&quot;:259}\">&nbsp;</span></p>', '{\"Procurement\":\"Procurement\"}', '{\"Service Provision\":\"Service Provision\"}', 'featured-projects/July2020/Ik1RodFSi9mwlJkwBkPM.jpg', '2020-07-05 04:10:13', '2020-07-05 04:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-04-30 18:53:32', '2020-04-30 18:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parameters` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-04-30 18:53:32', '2020-04-30 18:53:32', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 10, '2020-04-30 18:53:32', '2020-05-25 17:37:55', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 5, '2020-04-30 18:53:32', '2020-05-25 17:38:14', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 9, '2020-04-30 18:53:32', '2020-05-25 17:37:55', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 12, '2020-04-30 18:53:32', '2020-05-25 17:37:55', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-04-30 18:53:32', '2020-05-16 21:44:50', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-04-30 18:53:32', '2020-05-16 21:44:50', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-04-30 18:53:32', '2020-05-25 17:37:55', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-04-30 18:53:32', '2020-05-25 17:37:56', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 13, '2020-04-30 18:53:32', '2020-05-25 17:37:56', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 4, '2020-04-30 18:53:39', '2020-05-25 17:38:14', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 3, '2020-04-30 18:53:40', '2020-05-25 17:38:14', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 11, '2020-04-30 18:53:41', '2020-05-25 17:37:55', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-04-30 18:53:44', '2020-05-25 17:37:56', 'voyager.hooks', NULL),
(15, 1, 'Contacts', '', '_self', 'voyager-chat', NULL, NULL, 7, '2020-05-16 21:44:28', '2020-05-25 17:37:55', 'voyager.contacts.index', NULL),
(16, 1, 'News Subscriptions', '', '_self', 'voyager-mail', NULL, NULL, 8, '2020-05-20 12:36:47', '2020-05-25 17:37:55', 'voyager.news-subscriptions.index', NULL),
(17, 1, 'Featured Projects', '', '_self', 'voyager-archive', NULL, NULL, 6, '2020-05-25 09:56:48', '2020-05-25 17:38:02', 'voyager.featured-projects.index', NULL),
(18, 1, 'Quotes', '', '_self', 'voyager-diamond', NULL, NULL, 2, '2020-05-25 17:37:10', '2020-05-25 17:38:01', 'voyager.quotes.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(27, '2020_05_16_221731_create_contacts_table', 3),
(28, '2020_05_20_132547_create_news_subscriptions_table', 4),
(29, '2020_05_24_155934_create_comments_table', 5),
(30, '2020_05_25_103824_create_featured_projects_table', 6),
(31, '2020_05_25_135056_create_quotes_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `news_subscriptions`
--

CREATE TABLE `news_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_subscriptions`
--

INSERT INTO `news_subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'chisomnzube@gmail.com', '2020-05-20 12:34:50', '2020-05-20 12:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-04-30 18:53:42', '2020-04-30 18:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(2, 'browse_bread', NULL, '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(3, 'browse_database', NULL, '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(4, 'browse_media', NULL, '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(5, 'browse_compass', NULL, '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(6, 'browse_menus', 'menus', '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(7, 'read_menus', 'menus', '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(8, 'edit_menus', 'menus', '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(9, 'add_menus', 'menus', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(10, 'delete_menus', 'menus', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(11, 'browse_roles', 'roles', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(12, 'read_roles', 'roles', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(13, 'edit_roles', 'roles', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(14, 'add_roles', 'roles', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(15, 'delete_roles', 'roles', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(16, 'browse_users', 'users', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(17, 'read_users', 'users', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(18, 'edit_users', 'users', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(19, 'add_users', 'users', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(20, 'delete_users', 'users', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(21, 'browse_settings', 'settings', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(22, 'read_settings', 'settings', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(23, 'edit_settings', 'settings', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(24, 'add_settings', 'settings', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(25, 'delete_settings', 'settings', '2020-04-30 18:53:33', '2020-04-30 18:53:33'),
(26, 'browse_categories', 'categories', '2020-04-30 18:53:39', '2020-04-30 18:53:39'),
(27, 'read_categories', 'categories', '2020-04-30 18:53:39', '2020-04-30 18:53:39'),
(28, 'edit_categories', 'categories', '2020-04-30 18:53:39', '2020-04-30 18:53:39'),
(29, 'add_categories', 'categories', '2020-04-30 18:53:39', '2020-04-30 18:53:39'),
(30, 'delete_categories', 'categories', '2020-04-30 18:53:39', '2020-04-30 18:53:39'),
(31, 'browse_posts', 'posts', '2020-04-30 18:53:40', '2020-04-30 18:53:40'),
(32, 'read_posts', 'posts', '2020-04-30 18:53:40', '2020-04-30 18:53:40'),
(33, 'edit_posts', 'posts', '2020-04-30 18:53:40', '2020-04-30 18:53:40'),
(34, 'add_posts', 'posts', '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(35, 'delete_posts', 'posts', '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(36, 'browse_pages', 'pages', '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(37, 'read_pages', 'pages', '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(38, 'edit_pages', 'pages', '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(39, 'add_pages', 'pages', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(40, 'delete_pages', 'pages', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(41, 'browse_hooks', NULL, '2020-04-30 18:53:44', '2020-04-30 18:53:44'),
(42, 'browse_contacts', 'contacts', '2020-05-16 21:44:28', '2020-05-16 21:44:28'),
(43, 'read_contacts', 'contacts', '2020-05-16 21:44:28', '2020-05-16 21:44:28'),
(44, 'edit_contacts', 'contacts', '2020-05-16 21:44:28', '2020-05-16 21:44:28'),
(45, 'add_contacts', 'contacts', '2020-05-16 21:44:28', '2020-05-16 21:44:28'),
(46, 'delete_contacts', 'contacts', '2020-05-16 21:44:28', '2020-05-16 21:44:28'),
(47, 'browse_news_subscriptions', 'news_subscriptions', '2020-05-20 12:36:47', '2020-05-20 12:36:47'),
(48, 'read_news_subscriptions', 'news_subscriptions', '2020-05-20 12:36:47', '2020-05-20 12:36:47'),
(49, 'edit_news_subscriptions', 'news_subscriptions', '2020-05-20 12:36:47', '2020-05-20 12:36:47'),
(50, 'add_news_subscriptions', 'news_subscriptions', '2020-05-20 12:36:47', '2020-05-20 12:36:47'),
(51, 'delete_news_subscriptions', 'news_subscriptions', '2020-05-20 12:36:47', '2020-05-20 12:36:47'),
(52, 'browse_featured_projects', 'featured_projects', '2020-05-25 09:56:47', '2020-05-25 09:56:47'),
(53, 'read_featured_projects', 'featured_projects', '2020-05-25 09:56:47', '2020-05-25 09:56:47'),
(54, 'edit_featured_projects', 'featured_projects', '2020-05-25 09:56:47', '2020-05-25 09:56:47'),
(55, 'add_featured_projects', 'featured_projects', '2020-05-25 09:56:47', '2020-05-25 09:56:47'),
(56, 'delete_featured_projects', 'featured_projects', '2020-05-25 09:56:47', '2020-05-25 09:56:47'),
(57, 'browse_quotes', 'quotes', '2020-05-25 17:37:09', '2020-05-25 17:37:09'),
(58, 'read_quotes', 'quotes', '2020-05-25 17:37:09', '2020-05-25 17:37:09'),
(59, 'edit_quotes', 'quotes', '2020-05-25 17:37:09', '2020-05-25 17:37:09'),
(60, 'add_quotes', 'quotes', '2020-05-25 17:37:09', '2020-05-25 17:37:09'),
(61, 'delete_quotes', 'quotes', '2020-05-25 17:37:09', '2020-05-25 17:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `document` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `document`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '[{\"download_link\":\"posts\\\\May2020\\\\W1Zk1piG8lbyRmSfZVmc.JPG\",\"original_name\":\"ece_505_assi_2.JPG\"}]', '2020-04-30 18:53:41', '2020-05-26 17:36:38'),
(2, 0, 1, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, NULL, '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(3, 0, 2, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, NULL, '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(4, 0, 2, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, NULL, '2020-04-30 18:53:41', '2020-04-30 18:53:41'),
(5, 1, 1, 'blog 1', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in prehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'posts/June2020/ZX1vYcqMEPRQ88kctQG6.jpg', 'blog-1', NULL, NULL, 'PUBLISHED', 0, '[]', '2020-06-10 16:44:46', '2020-06-10 16:44:46'),
(6, 1, 1, 'blog 2', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'posts/June2020/8AG5xs3qHGyJPqqs2moc.jpg', 'blog-2', NULL, NULL, 'PUBLISHED', 0, '[]', '2020-06-10 16:45:26', '2020-06-10 16:45:26'),
(7, 1, 1, 'blog 3', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'posts/June2020/bQBBfJ6OQ5MKlWudUGav.jpg', 'blog-3', NULL, NULL, 'PUBLISHED', 0, '[]', '2020-06-10 16:46:31', '2020-06-10 16:46:31'),
(8, 1, 1, 'blog 4', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'posts/June2020/i21jGQS5gvLjtG6wNb9e.jpg', 'blog-4', NULL, NULL, 'PUBLISHED', 0, '[]', '2020-06-10 16:47:41', '2020-06-10 16:47:41'),
(9, 1, 1, 'blog 5', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'posts/June2020/aNDUS5q7R9aAhu42W4TM.jpg', 'blog-5', NULL, NULL, 'PUBLISHED', 0, '[]', '2020-06-10 16:48:53', '2020-06-10 16:48:53'),
(10, 1, 1, 'blog 6', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation co laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in prehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat pidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'posts/June2020/Te1FaNvftHochXhUpXYi.jpg', 'blog-6', NULL, NULL, 'PUBLISHED', 0, '[]', '2020-06-10 16:51:16', '2020-06-10 16:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cityOfDeparture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliveryCity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incoterms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procurementType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `email`, `phone`, `service`, `cityOfDeparture`, `deliveryCity`, `incoterms`, `weight`, `height`, `width`, `length`, `condition`, `procurementType`, `item`, `quantity`, `manufacturer`, `origin`, `document`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'ONYEMELUKWE CHISOM', 'chisomnzube@gmail.com', '+2347031382795', 'Procurement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Local', 'tech, fashion, agric', '12', 'gmz', 'awka', 'quote/1586122488750_verse_image_1590430749.jpg', 0, '2020-05-25 17:19:09', '2020-05-25 17:19:09'),
(2, 'ONYEMELUKWE CHISOM', 'admin@admin.com', '7031382795', 'Freight Forwarding', 'nnewi', 'AWKA', 'Incoterms 1', '12', '23', '45', '56', 'Express Delivery', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-05-25 17:20:37', '2020-05-25 17:20:37'),
(3, 'kingsley', 'kings@gmail.com', '+2347031382795', 'Freight Forwarding', 'nnewi', 'AWKA', 'Incoterms 2', '12', '48', '45', '56', 'Express Delivery', 'Local', NULL, NULL, NULL, NULL, '[{\"download_link\":\"quotes\\\\May2020\\\\WyEfkZUssBv5mBDUma6c.JPG\",\"original_name\":\"ece_505_assi_2.JPG\"}]', 0, '2020-05-25 17:40:05', '2020-05-25 17:40:05'),
(4, 'ONYEMELUKWE CHISOM', 'chisomnzube@gmail.com', '+2347031382795', 'Door to Door', 'nnewi', 'AWKA', 'Incoterms 1', '12', '23', '45', '56', 'Packaging', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-05-25 17:42:06', '2020-05-25 17:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-04-30 18:53:32', '2020-04-30 18:53:32'),
(2, 'user', 'Normal User', '2020-04-30 18:53:32', '2020-04-30 18:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-04-30 18:53:42', '2020-04-30 18:53:42'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-04-30 18:53:43', '2020-04-30 18:53:43'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-04-30 18:53:43', '2020-04-30 18:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$wFLw7brT4LmgbzYMga6ynezmKZYCQAQuZ1k8QGNOvvJSSc2iexG4q', 'u0BtRGgvGuAfMz0ilEEy5HUFzcyBx0RfpAZDeZ13NWyCdRdKvrwkwK5R0tJl', NULL, '2020-04-30 18:53:40', '2020-04-30 18:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `featured_projects`
--
ALTER TABLE `featured_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_subscriptions`
--
ALTER TABLE `news_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `featured_projects`
--
ALTER TABLE `featured_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news_subscriptions`
--
ALTER TABLE `news_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
