-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 05:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `allpackage`
--

CREATE TABLE `allpackage` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `days` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allpackage`
--

INSERT INTO `allpackage` (`id`, `category_id`, `place`, `days`, `price`) VALUES
(1, 1, 'Manali', '1N/2D', '4,699'),
(2, 1, 'Goa', '2N/3D', '7,999'),
(3, 1, 'Kashmir', '4N/5D', '10,000'),
(4, 1, 'Ooty', '1N/2D', '15,000'),
(5, 1, 'Kerala', '2N/3D', '10,000'),
(6, 1, 'Ladakh', '2N/3D', '15,500'),
(7, 1, 'Darjeeling', '3N/4D', '11,750'),
(8, 1, 'Shimla', '2N/3D', '9,000'),
(9, 1, 'Gangtok', '2N/3D', '9,099'),
(10, 3, 'Varanasi', '3N/4D', '7,000'),
(11, 3, 'Dwarka', '2N/3D', '5,000'),
(12, 3, 'Somnath', '1N/2D', '4,999'),
(13, 3, 'Ahmedabad', '3N/4D', '6,999'),
(14, 3, 'Madurai', '2N/3D', '3,999'),
(15, 3, 'Rameswaram', '3N/4D', '6,550'),
(16, 3, 'Triputi', '3N/4D', '7,999'),
(18, 3, 'Bodh Gaya', '3N/4D', '6,000'),
(19, 3, 'Haridwar', '5N/6D', '10,000'),
(20, 4, 'Havelock Beach ', '4N/5D', '15,000'),
(21, 4, 'Kovalam and Poovar Beach ', '6N/7D', '16,999'),
(22, 4, 'Port Blair Beach ', '7N/8D', '30,000'),
(23, 4, 'Goa Beach ', '4N/5D', '12,000'),
(24, 4, 'Bentota Beach ', '6N/7D', '15,000'),
(25, 4, 'Krabi Beach ', '4N/5D', '17,550'),
(26, 1, 'test', '4', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `category_package`
--

CREATE TABLE `category_package` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_package`
--

INSERT INTO `category_package` (`category_id`, `category_name`) VALUES
(1, 'Summer Package'),
(2, 'Winter Package'),
(3, 'Devotional Package'),
(4, 'Monsoon Package');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `follow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `rate`, `follow`) VALUES
(14, 'Pritam Paul', 'test@gmail.com', 'excellent Tour', 'We had a great trip Sikkim and Darjelling trip organized by Rumtek Tours and Travels. Very supportive team especially Priya and Jayanth. Special thanks to both of you for planning the perfect itinerary and services. Me and my daughter had a wonderful time', '5', 'follow'),
(15, 'Kaushik Paik', 'test@gmail.com', 'Wonderful', 'The best thing about the people at Rumtek Tours and Travels is that they are really nice people and genuinely want your trip to be adventurous yet safe. We really felt safe travelling with them. \r\n\r\n', '5', 'follow'),
(16, 'Sudip Ghosh', 'test@gmail.com', 'Nice', 'Rumtek Tours and Travel organised a personalised tour for us involving low impact hiking at a homestay in Dzongu in North Sikkim. The tour was excellent, just what we wanted, the homestay with a Lepcha family both in Gangtok and Dzongu was just lovely and', '4', 'follow'),
(17, 'Rahul Banerjee', 'test@gmail.com', 'Excellent ', 'I found the service and response of this travel agency to be excellent. Easily 5-stars. My emails were promptly responded to, and everyone showed up when they were supposed to. The $110 charged for my sedan ride to Bangkok for my family seemed like very g', '5', 'follow'),
(18, 'Debasish Nag', 'test@gmail.com', 'Wonderful', '	\"I must thank you with plenary satisfaction for the success of my tour with you in Mesoamerica. Your program was perfect and very elastic to support changes, supplements and substitutions... The central factor in the success of my tour was our guide who ', '3', 'follow'),
(23, 'Anindita Sil', 'test@gmail.com', 'Wonderful', 'i love u puntu', '5', 'follow'),
(24, '', '', '', '', '', 'follow'),
(25, '', '', '', '', '', 'follow');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `phone`, `state`, `country`, `address`, `password`) VALUES
(5, 'Jaydeep', 'test@gmail.com', '7980668491', 'West Bengal', 'India', 'Kolkata', '1234'),
(25, 'Anurupa', 'test@gmail.com', '12345666', 'West Bengal', 'India', 'kolkata', '1234'),
(26, 'anurupa', 'sss@gmail.com', '1234678', 'ujtrjtrjr', 'yjtjtyjyj', 'Kolkata', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `photo`, `name`, `description`) VALUES
(1, 'admin/Uploads/manali-road.jpg', 'Manali-Leh Road Trip', 'The â€˜Meccaâ€™ of all road trips in India, the Manali-Leh Highway has always been a favourite.'),
(2, 'admin/Uploads/markha-valley-by-kevs-album.jpg', 'Markha Valley Trek', 'When we feel like breaking away from the daily life, the first thing that rings a bell is going out on a trek. '),
(3, 'admin/Uploads/rishikesh.jpg', 'Rishikesh', 'Known as the vibrant city Rishikesh is one place which has a lot of things to offer in its bosom. Also known as the â€˜Yoganagariâ€™ or the â€˜Yoga Capital of the Countryâ€™ and the â€˜Gateway to the Garhwal Himalayasâ€™,'),
(4, 'admin/Uploads/ladkah-fr-1500x1000.jpg', ' Ladakh', 'Ladakh or the Land of High Passes is an infertile yet excellent district situated in the north Indian condition of Jammu and Kashmir.'),
(5, 'admin/Uploads/7500835798_89634b6802_o.jpg', 'Auli', ' Auli is the ideal spot to visit. It proffers exercises, for example, skiing, trekking and river rafting, touring. Skiing is the most preferred experience sport in Auli. '),
(6, 'admin/Uploads/Valley-fr-1500x993.jpg', 'Valley of Flowers Trek', 'Discovered by a British traveller named Frank Smith in the year 1931, the Valley Of Flowers is a heaven on earth. '),
(7, 'admin/Uploads/ranthambore-safari-1.jpg', 'Ranthambore', 'Ranthambore is an astounding area in Rajasthan that gloats about the National Park which is one of the very renowned ones in India.'),
(8, 'admin/Uploads/nainital-lake.jpg', ' Nainital', 'This is one of the best tourist places in India. It involves a lofty forested valley around the namesake lake Naini. '),
(9, 'admin/Uploads/Beautiful-Shimla-Winter-HD-Wallpaper.jpg', ' Shimla', 'The great snow clad mountains, stunningly rich greenery and the wonderful lakes in the place where there is Shimla welcome you to make the most of their ageless magnificence.'),
(10, 'admin/Uploads/rishikesh.jpg', 'Rishikesh', 'Known as the vibrant city Rishikesh is one place which has a lot of things to offer in its bosom. Also known as the â€˜Yoganagariâ€™ or the â€˜Yoga Capital of the Countryâ€™ and the â€˜Gateway to the Garhwal Himalayasâ€™,'),
(11, 'admin/Uploads/musoorie-fr-1500x1125.jpg', 'Mussorie', 'Mussoorie with its wonderful, undulating, tree-secured slopes, looking down on the Doon valley and with an awesome perspective of the Mighty Himalayas.'),
(12, 'admin/Uploads/roopkund-winter-sunshine-1500x1000.jpg', 'Roopkund Trek, Himalayas', 'Become one with nature and experience serenity with the Roopkund Trek, Himalayas. This trail provides an all-encompassing experience and visions of snow, ice, gushing streams, untouched forests, delightful stretches of meadows and scenic camping places.'),
(13, 'admin/Uploads/durgapuja.jpg', 'Kolkata', 'Durga puja');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `phn` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL,
  `support` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `about` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `add1`, `add2`, `phn`, `week`, `support`, `message`, `about`) VALUES
(1, 'saltlake', 'Kolkata, West Bengal, India', ' 00 (958) 9865 562', 'Mon to Fri 9am to 6 pm', 'support@travelvilla.com', 'Feel free to ask!', 'The world has become so fast paced that people donâ€™t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `id` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `departure` varchar(255) NOT NULL,
  `arrival` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `trip` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `cid`, `departure`, `arrival`, `phone`, `trip`, `work`, `adult`, `child`) VALUES
(1, '5', '2018-09-10', '2018-09-13', '7044083063', 'Vaishnodevi-Dalhousie-Dharamsala-Kangra Valley', 'No', '2', '0'),
(2, '20', '2018-09-12', '2018-09-01', '51', ' Kinnor-Kailash', 'No', '2', '0'),
(6, '19', '2018-09-11', '2018-09-20', '11111', 'Vaishnodevi-Dalhousie-Dharamsala-Kangra Valley', 'No', '2', '0'),
(7, '19', '2018-10-02', '2018-09-05', '', 'Select', '', '11', '0'),
(8, '21', '2018-09-03', '2018-09-05', '', 'Select', '', '11', '0'),
(11, '25', '2018-10-16', '2018-10-10', '7044083063', 'Vaishnodevi-Dalhousie-Dharamsala-Kangra Valley', 'No', '2', '0'),
(12, '25', '2018-10-24', '2018-10-31', '7044083063', 'Manali', 'No', '2', '2'),
(13, '26', '2018-10-02', '2018-10-08', '7980668491', ' Ahmedabad', 'No', '2', '2'),
(15, '5', '2018-10-03', '2018-10-25', '704408302', ' Goa', 'No', '4', '0'),
(16, '5', '2018-10-01', '2018-10-01', '7044083063', 'Gangtok', 'No', '4', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allpackage`
--
ALTER TABLE `allpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_package`
--
ALTER TABLE `category_package`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allpackage`
--
ALTER TABLE `allpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category_package`
--
ALTER TABLE `category_package`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
