-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 06:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `pass`, `name`, `img`, `date`) VALUES
(1, 'admin', 'admin@blog.normandyremodeling.com', '6hs4S3AXNFnUjav', 'Deck Restoration Service', '1614941444.png', '2021-03-08 03:06:42'),
(3, 'shahbaz514', 'shahbaz.lhr.uol@gmail.com', '123456', 'Shahbaz Akhtar', '1614923907.jpg', '2021-03-05 05:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`) VALUES
(2, 'POWER WASHING SERVICE', '2021-03-05 05:45:20'),
(3, 'EXTERIOR PAINTING', '2021-03-05 05:29:22'),
(4, 'EXTERIOR CARPENTRY', '2021-03-05 05:29:22'),
(5, 'DECK RESTORATION', '2021-03-05 05:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `img`, `date`) VALUES
(2, '1614924270.jpg', '2021-03-05 06:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `cat` int(11) NOT NULL,
  `username` text NOT NULL,
  `tags` text NOT NULL,
  `keywords` text NOT NULL,
  `views` int(11) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `img`, `cat`, `username`, `tags`, `keywords`, `views`, `date`) VALUES
(1, 'The Understated Kitchen Hood', 'Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. It’s the adult version of being a kid in a candy shop. Knowing where to make a splash and when to pull back a bit is the best way to arrive at a balanced kitchen design you’ll love.\r\n\r\n“When you want to take a step back, look at the kitchen hood,” said Normandy Designer Jackie Jensen.Flat panel cabinet fronts and a straight line metal hood create a contemporary look for htis kitchen She adds, “When you keep the hood a little quieter from a design perspective, it lets other design elements shine. For instance, we’re seeing a lot of patterned tile backsplashes right now. They naturally draw the eye and become a focal point of the room. A busy range hood would compete with that and really take away from the beauty of both.”\r\n\r\nThe same can be said of an island painted to be a pop of color or a spectacular coffered ceiling.\r\n\r\n\r\nIf you’ve gone big, bold or otherwise beyond with other elements in your kitchen, the hood can be a place to pull back and let those other choices take the spotlight.\r\n\r\nJackie says industrial elements in the kitchen like stainless steel appliances can nudge families toward a simple hood. “A stainless canopy hood balanced with balanced with  cabinetry above blends the hood in with the rest of the kitchen and does not seek attention.”\r\n\r\nOn the flip side of that equation, if you have an armoire style refrigerator and have concealed your other appliances behind cabinetry, a stainless steel hood can distract from all that beautiful millwork. Jackie says, “This would be a great time to incorporate a wood mantle style hood that completely conceals anything stainless.”\r\n\r\nYour hood will naturally scale up or down with the size of your range. If you’re on either side of the spectrum, with either a small kitchen and small range or a large kitchen with an oversized cooking surface, you might consider a streamlined hood.A red stove is the obvious focal point in this white kitchen“Think about unifying the hood into the cabinetry. It helps with the scale of space and creates a beautiful overall look.”\r\n\r\nAnother clever option to keep the hood proportional is an acrylic hood. This style hides in plain sight, offering a fresh airy look that’s great over an island or just where you want to keep an open feeling.\r\n\r\nCreating your dream kitchen involves making choices of where to go bold and where to opt for something more subtle.pass through above half wall in chicago condo kitchen There are incredible ornate hoods out there, but sometimes simple is just right.\r\n\r\nAre you thinking about a new kitchen and wondering how to balance all the choices? Set up a time to talk with Jackie about the possibilities. We welcome you to join us at an upcoming webinar to learn more about remodeling. If you’re looking for inspiration, check out the Normandy Remodeling photo galleries. We share lots of design inspiration on Instagram and Facebook, follow along and find your style.', '1614940208.jpg', 5, 'admin', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 15, '5th March 2021'),
(2, 'University of Lahore Gujrat Campus', 'Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\n', '1615047447.jpg', 5, 'admin', 'Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.', 'Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.', 3, '6th March 2021'),
(3, 'University of Lahore LBS', 'Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\n', '1615047495.jpg', 5, 'admin', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 0, '6th March 2021'),
(4, 'University of Lahore', 'Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\nMaking the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances.\r\n', '1615047535.png', 5, 'admin', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 0, '6th March 2021'),
(5, 'University of Lahore Law Departement', 'Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a\r\n', '1615048471.jpg', 2, 'admin', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 1, '6th March 2021'),
(6, 'University of Lahore Masque', ' Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a Making the selections for your kitchen remodel is a happy time filled with beautiful options for countertops, cabinets, backsplash, and appliances. Making the selections for your kitchen remodel is a', '1615048533.jpg', 3, 'admin', 'shahbaz514', 'Deck restoration services, Deck restoration near me, Deck restoration, Deck refinishing, Deck repair, Deck staining services, Deck services', 17, '6th March 2021');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `views`, `date`) VALUES
(1, 'Deck restoration services', 1, '2021-03-07 15:15:31'),
(2, 'Deck restoration near me', 0, '2021-03-05 10:32:57'),
(3, 'Deck restoration', 0, '2021-03-05 10:33:31'),
(4, 'Deck refinishing', 0, '2021-03-05 10:33:31'),
(5, 'Deck repair', 0, '2021-03-05 10:33:31'),
(6, 'Deck staining services', 0, '2021-03-05 10:33:31'),
(7, 'Deck services', 0, '2021-03-05 10:33:31'),
(8, 'Shahbaz514', 2, '2021-03-07 17:11:23'),
(9, 'Binary Digital Media Pvt Ltd', 0, '2021-03-05 10:41:43'),
(10, 'Shahbaz514, Inc.', 0, '2021-03-05 10:41:56'),
(11, 'SalihaSoft', 1, '2021-03-07 15:15:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
