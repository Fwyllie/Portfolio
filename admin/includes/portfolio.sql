-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2018 at 05:15 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `img_id` smallint(5) UNSIGNED NOT NULL,
  `img_link` varchar(100) NOT NULL,
  `img_title` varchar(200) NOT NULL,
  `img_desc` varchar(800) NOT NULL,
  `img_primary` varchar(10) NOT NULL,
  `img_projects` varchar(50) NOT NULL,
  `img_gitHub` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`img_id`, `img_link`, `img_title`, `img_desc`, `img_primary`, `img_projects`, `img_gitHub`) VALUES
(1, 'codeworld-lb.png', 'Code World', 'Code World is a fictional business created during my time at Fanshawe College. In collaboration with a designer this website was created to test our collaboration skills. The main of this site include dynamic elements through javascript, foundation 6 for responsive design. ', 'no', 'codeworld', 'https://github.com/Fwyllie/CodeWorld'),
(2, 'codeworld-thumb.jpg', '', '', 'yes', 'codeworld', ''),
(3, 'escape-lb.png', 'Escape!', 'Escape is a simple web based game created for the purpose of testing different javascript events. Utilizing an array of events such as \"mouseover\", \"keyup\", \"click\", \"onload\" and \"onmousedown\" I was able to create a clicker  role-play game. ', 'no', 'escape', 'https://github.com/Fwyllie/escape'),
(4, 'escape-thumb.jpg', '', '', 'yes', 'escape', ''),
(5, 'lotr-lb.png', 'Lord Of the Rings', 'Lord of the Rings 15th anniversary site was created as the final project the first year of Interactive Media Design. This site was designed for the fifteenth anniversary of the release of the Lord of the Rings: The Fellowship of the Ring. The purpose of this site is to promote the movies and for fans to enter a fictional contest to win singed copies of the movies. To create this site I utilized different plugins such as TweenMax and ScrollTo. This site is also responsive using foundation 6 and media queries. ', 'no', 'lotr', 'https://github.com/Fwyllie/lotr'),
(6, 'lotr-thumb.jpg', '', '', 'yes', 'lotr', ''),
(7, 'specOpt-lb.png', 'Spectacular Optometry', 'Spectacular Optometry is a fictional business created to demonstrate the branding and creation of a business from scratch. Starting from the ground up this project tested my design skills and development skills. Introducing CSS3 transitions and animations made this project all about the minor details that make a good website great.', 'no', 'specopt', 'https://github.com/Fwyllie/SpectacularOptometry'),
(8, 'specOpt-thumb.jpg', '', '', 'yes', 'specopt', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `img_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
