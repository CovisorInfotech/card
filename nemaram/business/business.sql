-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 09:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business`
--

-- --------------------------------------------------------

--
-- Table structure for table `adout`
--

CREATE TABLE `adout` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `adout_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adout`
--

INSERT INTO `adout` (`id`, `adminuser_id`, `title_name`, `adout_name`) VALUES
(1, 1, 'Cat', 'rrrrrrrrrrrrrrrrr'),
(2, 4, 'fffffffff', 'rrrrrrrrrrrrrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `name_client` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link_client_profile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blog_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `work_short_discription` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ratings_client` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blog_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `blog_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `amount_work` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time_taken_work` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blog_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blog_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `like_count` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dislike_count` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `adminuser_id`, `name_client`, `link_client_profile`, `blog_title`, `work_short_discription`, `ratings_client`, `blog_image`, `blog_description`, `pincode`, `city`, `state`, `country`, `amount_work`, `time_taken_work`, `tags`, `blog_date`, `blog_status`, `like_count`, `dislike_count`) VALUES
(1, 1, 'hjjhgjhb', 'tttttttttbbbb', 'ghgghghgff', 'zxcv', 'zxcvzxc', '1675445685.jpg', '<p>hjfgmmmmmmmmmmmmmmm</p>\r\n', 'ttttttttuuuuuuuuu', 'xcv', 'xcv', 'tttttttt', '20000', 'fxcvzxc', 'sdfasd', '03/02/2023', '1', '-1', '0'),
(2, 5, 'suresh', 'suresh', 'Work Title', 'Work Short Discription', 'Ratings', '1675707767.jpg', '<p>Tutorials and how-to guides are a great way to engage your audience and educate them in a single blog post. Plus, they&rsquo;re easy to work on too since you&rsquo;re already familiar with the topi', '306701', 'bali', 'rajasthan', 'pali', 'blog', '40 Different Types Of Content You Can Create For Your Blog', 'Blog', '06/02/2023', '1', '', ''),
(3, 5, 'suresh', 'Listicles', 'Written tutorials', 'Written tutorials and how to’s', 'Ratings', '1675707919.jpg', '<p>The key thing to remember when writing how-to guides is to break things down into small actionable steps. This makes it easier for readers to follow your instructions. Including step-by-step screen', '306701', 'bali', 'rajasthan', 'pali', '20000', '40 Different Types Of Content You Can Create For Your Blog', 'blog', '06/02/2023', '1', '', ''),
(4, 5, 'suresh', 'Listicles', 'Written tutorials', 'Written tutorials and how to’s', 'Ratings', '1675707920.jpg', '<p>The key thing to remember when writing how-to guides is to break things down into small actionable steps. This makes it easier for readers to follow your instructions. Including step-by-step screen', '306701', 'bali', 'rajasthan', 'pali', '20000', '40 Different Types Of Content You Can Create For Your Blog', 'blog', '06/02/2023', '1', '', ''),
(5, 4, 'dfddftttttttttttt', 'ttttttttt', 'tttttttttttbbbbb', 'ttttttttttttt', 'Ratings', '1676916879.png', '<p>fghghfgfh</p>\r\n', 'ttttttttuuuuuuuuu', 'bali', 'rajasthan', 'tttttttt', '20000', '40 Different Types Of Content You Can Create For Your Blog', 'Blog', '20/02/2023', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `bolg_id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_date` varchar(200) NOT NULL,
  `comment_status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cat_about`
--

CREATE TABLE `cat_about` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `about_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_about`
--

INSERT INTO `cat_about` (`id`, `adminuser_id`, `about_category`) VALUES
(1, 2, 'Experience'),
(2, 2, 'Founder'),
(3, 1, 'Cat'),
(4, 4, 'fffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `cat_product`
--

CREATE TABLE `cat_product` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_product`
--

INSERT INTO `cat_product` (`id`, `adminuser_id`, `product_category`, `color`) VALUES
(1, 1, 'phone', '#fd4f30'),
(2, 2, 'Frocks', '#ff2e2e'),
(3, 4, 'Fashion', '#fecb30'),
(6, 2, 'Super', '#ff0000');

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE `connections` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `connections_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `connections_profile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `connections_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`id`, `adminuser_id`, `connections_id`, `connections_profile`, `connections_status`) VALUES
(24, 4, 'sirvi12', '', '0'),
(26, 5, 'suresh34', '', '1'),
(29, 1, 'Nemaram8094', '', '1'),
(30, 2, '8860012001', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `faq_catagery` varchar(255) NOT NULL,
  `faq_qusan` varchar(255) NOT NULL,
  `faq_anser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `adminuser_id`, `faq_catagery`, `faq_qusan`, `faq_anser`) VALUES
(1, 4, 'marketplace', 'ffggfh?', 'ghfgdgdh');

-- --------------------------------------------------------

--
-- Table structure for table `like_dislikes`
--

CREATE TABLE `like_dislikes` (
  `id` int(100) NOT NULL,
  `adminuser_id` int(100) NOT NULL,
  `blog_id` int(100) NOT NULL,
  `like` varchar(200) NOT NULL,
  `unlike` varchar(200) NOT NULL,
  `like_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `product_tokan` varchar(200) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `product` varchar(200) NOT NULL,
  `catagery` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_image2` varchar(200) NOT NULL,
  `product_image3` varchar(200) NOT NULL,
  `product_image4` varchar(200) NOT NULL,
  `product_image5` varchar(200) NOT NULL,
  `products_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_tokan`, `adminuser_id`, `product`, `catagery`, `price`, `discount`, `description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `products_status`) VALUES
(2, '', 1, 'Redmi Note 9 Pro', 'phone', '15000', '', 'Redmi Note 9 Pro', '1675442560.jpg', '1675442560.jpg', '1675442560.jpg', '', '', '1'),
(3, '', 4, 'JUNEBERRY', 'Fashion', '537', '', 'JUNEBERRY Women Sweatshirt with Hoodies, Fleece Material Full Sleeves Jumper Women Winter Wear, Hooded Neck Regular Fit Long Sleeve Womens Sweatshirt, Winter Wear for Women', '1675703820.jpg', '1675703820.jpg', '', '', '', '1'),
(4, '', 5, 'Amazon Brand - Symbol', 'Fashion', '5000', '', 'Amazon Brand - Symbol Women Sweatshirt', '1675708162.jpg', '1675708162.jpg', '1675708162.jpg', '', '', '1'),
(7, '', 4, 'gggg', 'Fashion', '9897', '', 'fgsdfgs', '1676131032.jpg', '1676131032.jpg', '', '', '', '1'),
(14, '', 4, 'rtyer', 'Fashion', '9897', '', 'dsdfg', '1676135303.jpg', '', '', '', '', '1'),
(18, '25', 4, 'fashion', 'Fashion', '1400', '', 'ghdfghd', '1676312816.jpg', '1676312816.jpg', '1676312816.jpg', '1676312816.jpg', '', '1'),
(19, '60', 4, 'Qube By Fort Collins', 'Fashion', '0.00579833984375', '50', 'ty', '1676315524.jpg', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products_qusan`
--

CREATE TABLE `products_qusan` (
  `id` int(50) NOT NULL,
  `adminuser_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `policy_qu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `products_qa_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_qusan`
--

INSERT INTO `products_qusan` (`id`, `adminuser_id`, `policy_qu`, `products_qa_status`) VALUES
(1, '1', 'Terms & conditions ?', '1'),
(2, '2', 'What is the color of object', '1'),
(3, '4', ' Special offers and product rrr', '1'),
(4, '4', 'What is the offer?', '1'),
(5, '4', ' How can I avail this offer?', '1'),
(6, '4', 'What is the minimum transaction size for the offer?', '1'),
(7, '5', 'What is the offer?', '1'),
(8, '5', 'What is the minimum transaction size for the offer?', '1'),
(15, '4', 'yyy?', '1'),
(16, '4', 'kkkk?', '1'),
(17, '4', 'mmm?', '1'),
(18, '4', 'rrr???', '1'),
(19, '4', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products_qusan_anser`
--

CREATE TABLE `products_qusan_anser` (
  `id` int(50) NOT NULL,
  `adminuser_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_tokan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `policy_qu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `policy_an` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `products_policy_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_qusan_anser`
--

INSERT INTO `products_qusan_anser` (`id`, `adminuser_id`, `product_tokan`, `policy_qu`, `policy_an`, `products_policy_status`) VALUES
(1, '1', '2', 'Terms & conditions ?', 'bvcbv cvbckvhkchgbvk cbxkdfhgkcjhbxk cvbkxjhfgkc bkxjchvbkxc kcj', '1'),
(2, '4', '3', 'What is the offer?', 'Get 5% Instant Discount with HSBC Cashback Credit Card, on purchase of any eligible product listed on Amazon.in Between January 01, 2023 to March 31, 2023. Please check the product page for offer elig', '1'),
(3, '4', '3', ' How can I avail this offer?', 'Just go through the normal purchase process and checkout with the eligible products. On the payment page, please select your saved HSBC Bank Card to pay.', '1'),
(4, '4', '3', 'What is the minimum transaction size for the offer?', 'As long as Rs. 1,000 is spent on the card for purchase of eligible products, you will be eligible for the offer.', '1'),
(5, '5', '4', 'What is the minimum transaction size for the offer?', 'As long as Rs. 1,000 is spent on the card for purchase of eligible products, you will be eligible for the offer.', '1'),
(6, '5', '4', 'What is the offer?', 'Get 5% Instant Discount with HSBC Cashback Credit Card, on purchase of any eligible product listed on Amazon.in Between January 01, 2023 to March 31, 2023. Please check the product page for offer elig', '1'),
(7, '', '', 'What is the color of object', 'sdfgdfg', ''),
(8, '', '25', 'kkkk?', 'sdfgdfg', '1'),
(9, '', '60', 'mmm?', 'sdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(50) NOT NULL,
  `adminuser_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_tokan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `attributes_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `attributes_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `attributes_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `adminuser_id`, `product_tokan`, `attributes_title`, `attributes_name`, `attributes_status`) VALUES
(1, '1', '2', 'color', 'black', '1'),
(2, '4', '3', 'Size', 'S, M, L, XL,', '1'),
(3, '4', '3', 'Colour', 'Navy, Light Green, Pink, Yellow', '1'),
(4, '5', '4', 'color', 'Navy, Olive', '1'),
(5, '5', '4', 'Size', 'S, M, L, XL,', '1'),
(14, '', '28', 'color', 'red', '1'),
(15, '', '25', 'color', 'red', '1'),
(16, '', '60', 'color', 'red', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes_title`
--

CREATE TABLE `product_attributes_title` (
  `id` int(50) NOT NULL,
  `adminuser_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `attributes_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `attributes_title_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_attributes_title`
--

INSERT INTO `product_attributes_title` (`id`, `adminuser_id`, `attributes_title`, `attributes_title_status`) VALUES
(1, '1', 'color', '1'),
(2, '2', 'Weight', '1'),
(3, '4', 'Size', '1'),
(4, '4', 'Colour', '1'),
(5, '5', 'color', '1'),
(6, '5', 'Size', '1'),
(14, '4', 'ppp', '1'),
(15, '4', 'eee', '1'),
(16, '4', 'ttthhh', '1'),
(17, '4', 'hhh', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pro_business_hours`
--

CREATE TABLE `pro_business_hours` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(50) NOT NULL,
  `open_time` varchar(200) NOT NULL,
  `closed_time` varchar(200) NOT NULL,
  `monday` varchar(200) NOT NULL,
  `tuesday` varchar(200) NOT NULL,
  `wenesday` varchar(200) NOT NULL,
  `thursday` varchar(200) NOT NULL,
  `friday` varchar(200) NOT NULL,
  `saturday` varchar(200) NOT NULL,
  `hours_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_business_hours`
--

INSERT INTO `pro_business_hours` (`id`, `adminuser_id`, `open_time`, `closed_time`, `monday`, `tuesday`, `wenesday`, `thursday`, `friday`, `saturday`, `hours_status`) VALUES
(1, 4, '23:21', '23:21', 'Monday', 'Closed', 'Closed', 'Thursday', 'Closed', 'Saturday', '1'),
(2, 0, '23:21', '23:21', 'Monday', 'Tuesday', 'Closed', 'Thursday', 'Friday', 'Saturday', '');

-- --------------------------------------------------------

--
-- Table structure for table `pro_connect`
--

CREATE TABLE `pro_connect` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `whatsapp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `download_file` varchar(200) NOT NULL,
  `connect_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_connect`
--

INSERT INTO `pro_connect` (`id`, `adminuser_id`, `phone`, `whatsapp`, `email`, `address`, `download_file`, `connect_status`) VALUES
(1, 4, '5698789456', '5698789458', 'sirvi12@gmail.com', 'Zinc Park Udaipur, Rajasthan 313001', 'tha1.jpg', '1'),
(2, 2, '8860012001', '8860012001', 'ayush.acj@gmail.com', '28.6185677, 77.1106791', 'images (68).jpeg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pro_follow`
--

CREATE TABLE `pro_follow` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `linkedIn` varchar(200) NOT NULL,
  `follow_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_follow`
--

INSERT INTO `pro_follow` (`id`, `adminuser_id`, `website`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedIn`, `follow_status`) VALUES
(1, 4, 'https://web.delhi.in/index.php', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/?lang=en-in', 'https://www.youtube.com/', 'https://in.linkedin.com/nhome/', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pro_member`
--

CREATE TABLE `pro_member` (
  `id` int(50) NOT NULL,
  `adminuser_id` int(100) NOT NULL,
  `much_communities` varchar(200) NOT NULL,
  `name_community` varchar(200) NOT NULL,
  `year_which` varchar(200) NOT NULL,
  `area_region` varchar(200) NOT NULL,
  `post_link_group` varchar(200) NOT NULL,
  `other` varchar(200) NOT NULL,
  `logo_community` varchar(200) NOT NULL,
  `member_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_member`
--

INSERT INTO `pro_member` (`id`, `adminuser_id`, `much_communities`, `name_community`, `year_which`, `area_region`, `post_link_group`, `other`, `logo_community`, `member_status`) VALUES
(1, 4, 'Communities', 'sirvi', 'joined the community', 'Area', 'Group', 'Other', '1675702912.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pro_pay`
--

CREATE TABLE `pro_pay` (
  `id` int(50) NOT NULL,
  `adminuser_id` varchar(100) NOT NULL,
  `paste_payment` varchar(200) NOT NULL,
  `upi_paytm` varchar(200) NOT NULL,
  `number_paytm` varchar(200) NOT NULL,
  `qr_paytm` varchar(200) NOT NULL,
  `paste_googlepay` varchar(200) NOT NULL,
  `upi_googlepay` varchar(200) NOT NULL,
  `number_googlepay` varchar(200) NOT NULL,
  `qr_google` varchar(200) NOT NULL,
  `paste_phonepay` varchar(200) NOT NULL,
  `upi_phonepay` varchar(200) NOT NULL,
  `number_phonepay` varchar(200) NOT NULL,
  `qr_phone` varchar(200) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `bank_branch` varchar(200) NOT NULL,
  `account_number` varchar(200) NOT NULL,
  `ifsc_code` varchar(200) NOT NULL,
  `other` varchar(200) NOT NULL,
  `pay_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_pay`
--

INSERT INTO `pro_pay` (`id`, `adminuser_id`, `paste_payment`, `upi_paytm`, `number_paytm`, `qr_paytm`, `paste_googlepay`, `upi_googlepay`, `number_googlepay`, `qr_google`, `paste_phonepay`, `upi_phonepay`, `number_phonepay`, `qr_phone`, `bank`, `bank_branch`, `account_number`, `ifsc_code`, `other`, `pay_status`) VALUES
(1, '2', 'https://covisor.in/', 'mr.ayushgupta@icici', '8860012001', '1675431347.jpg', 'https://covisor.in/', 'mr.ayushgupta@icici', '8860012001', '1675431347.jpg', 'https://covisor.in/', 'mr.ayushgupta@icici', '8860012001', '1675431347.jpg', 'ICICI Bank', 'Mayapuri Branch', '181801000342', 'ICIC0001818', 'https://covisor.in/', '1'),
(2, '4', 'https://web.delhi.in/', '56457654fgdf', '2456345634', '1675700814.jpg', 'https://web.delhi.in/', '56457654fgdf', '2456345634', '1675700829.jpg', 'https://web.delhi.in/', '56457654fgdf', '2456345634', '1675700814.jpg', 'sbi', 'pali', '457678678645', 'sb456356', 'https://web.delhi.in/', '1');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL,
  `profile_id` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `business_category` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `thumbnail_image` varchar(200) NOT NULL,
  `thames_color` varchar(100) NOT NULL,
  `text_color` varchar(100) NOT NULL,
  `footer_color` varchar(100) NOT NULL,
  `connections_id` varchar(100) NOT NULL,
  `admin_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`id`, `profile_id`, `image`, `username`, `password`, `email`, `last_name`, `designation`, `company`, `business_category`, `logo`, `thumbnail_image`, `thames_color`, `text_color`, `footer_color`, `connections_id`, `admin_status`) VALUES
(1, 'Nemaram8094', '1675612118.jpg', 'Nemaram sirvi ', 'nr@123', 'nemaramsirvi8094@gmail.com', '', 'IT', 'IT Infotech', 'Electronics', '1675612118.jpg', '1675612118.jpg', '#e6bf00', '', '', '', '1'),
(2, '8860012001', '1675399181.jpg', 'Ayush KUmar Gupta', '1stmaster', 'ayush.acj@gmail.com', '', 'Director', 'Fashion Apparels Private Limited', 'Fashion', '1675399181.jpg', '1675430812.jpg', '#e74391', '', '', '', '1'),
(3, '8802172121', '', 'Amit Kumar', '1234567890', 'ayush.acj@gmail.com', '', '', '', 'Fashion', '', '', '', '', '', '', '1'),
(4, 'sirvi12', '1675699728.jpg', 'sirvi', 'sirvi@123', 'sirvi12@gmail.com', '', 'Designation', 'Designation Company ', 'Electronics', '1675699728.jpg', '1675699728.jpg', '#029ccf', '', '', '', '1'),
(5, 'suresh34', '1675706429.jpg', 'suresh', 'shu@123', 'shursh34@gmail.com', '', 'shursh shop', 'fashion store', 'Fashion', '1675706429.jpg', '1675706429.jpg', '#fff58a', '', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adout`
--
ALTER TABLE `adout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_about`
--
ALTER TABLE `cat_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_product`
--
ALTER TABLE `cat_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_dislikes`
--
ALTER TABLE `like_dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_qusan`
--
ALTER TABLE `products_qusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_qusan_anser`
--
ALTER TABLE `products_qusan_anser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes_title`
--
ALTER TABLE `product_attributes_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_business_hours`
--
ALTER TABLE `pro_business_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_connect`
--
ALTER TABLE `pro_connect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_follow`
--
ALTER TABLE `pro_follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_member`
--
ALTER TABLE `pro_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_pay`
--
ALTER TABLE `pro_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adout`
--
ALTER TABLE `adout`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cat_about`
--
ALTER TABLE `cat_about`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cat_product`
--
ALTER TABLE `cat_product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `connections`
--
ALTER TABLE `connections`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `like_dislikes`
--
ALTER TABLE `like_dislikes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products_qusan`
--
ALTER TABLE `products_qusan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products_qusan_anser`
--
ALTER TABLE `products_qusan_anser`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_attributes_title`
--
ALTER TABLE `product_attributes_title`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pro_business_hours`
--
ALTER TABLE `pro_business_hours`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pro_connect`
--
ALTER TABLE `pro_connect`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pro_follow`
--
ALTER TABLE `pro_follow`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pro_member`
--
ALTER TABLE `pro_member`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pro_pay`
--
ALTER TABLE `pro_pay`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
