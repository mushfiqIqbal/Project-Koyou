-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 12:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_koyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Video Games'),
(2, 'Beauty Products'),
(3, 'Raw Meats'),
(4, 'Raw Fishes'),
(5, 'Vegetables'),
(6, 'Chips'),
(7, 'Beverage'),
(8, 'Others'),
(9, 'Headphones'),
(10, 'Computer Parts'),
(11, 'Books'),
(14, 'Mobile Phones'),
(16, 'Clothings');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `category` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_name`, `product_description`, `product_price`, `product_quantity`, `category`, `status`, `image`) VALUES
(32, 'Mountain Dew 500ml', 'Mountain Dew is a carbonated soft drink brand produced and owned by PepsiCo.', 35, 500, 'Beverages', 'Active', '5cc32e159c7049.53454190.jpg'),
(33, 'Coca Cola 1.5L', 'Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company.', 65, 100, 'Beverages', 'Active', '5cc32e5dc67677.54421643.jpg'),
(54, 'Mountain Dew 1.5L', 'Mountain Dew is a carbonated soft drink brand produced and owned by PepsiCo.', 65, 100, 'Beverages', 'Active', '5cc32f1c669aa5.60971775.jpg'),
(55, 'FANTA STRAWBERRY 1LT', 'Fanta Strawberry is one of the variants of Fanta that is sold over 180 countries in the whole world. It has this sweet strawberry flavor that is packed in a bright, playful red-colored design.', 75, 50, 'Beverages', 'Active', '5cc32f52179729.20317765.jpg'),
(56, 'Broiler Chicken', 'A broiler is any chicken that is bred and raised specifically for meat production. Many typical broilers have white feathers and yellowish skin. Most commercial broilers reach slaughter-weight between four and seven weeks of age, although slower growing breeds reach slaughter-weight at approximately 14 weeks of age.', 300, 10, 'Raw Meats', 'Active', '5cc32f7b582ae3.53963822.png'),
(57, 'Tilapia Fish', 'Tilapia is the most popular fish in Bangladesh .This is 100% Bangladeshi origin Tilapia fish. Tilapia fish are cultivated in sweet water. This fish is mainly Cultivate in Satkhira, Jessore, Maymanshing, Norshingdi, Kishorgonj and Gazipur. We collect from some largest  agro farm. We collect it at mid night. And carry it in insulated van with a lot of ice.', 985, 6, 'Raw Fishes', 'Active', '5cc32fe41ecbd1.37992522.jpg'),
(58, 'Cauliflower', 'Cauliflower is one of several vegetables in the species Brassica oleracea in the genus Brassica, which is in the family Brassicaceae. It is an annual plant that reproduces by seed. Typically, only the head is eaten â€“ the edible white flesh sometimes called \"curd\".', 20, 30, 'Vegetables', 'Active', '5cc33019b13ba7.48301365.jpg'),
(59, 'The Cake', 'The cake is a lie!', 100000, 1, 'Others', 'Active', '5cc3303ba6faf4.74281106.jpg'),
(64, 'Yakuza 0', 'Yakuza 0 is an action-adventure video game developed and published by Sega. It is a prequel to the Yakuza series. The game takes place in December 1988 in Kamurocho, a fictionalized recreation of Tokyo\'s Kabukicho, and Sotenbori, a fictionalized recreation of Osaka\'s Dotonbori.', 999, 10, 'Video Games', 'Active', '5cc2e9100f0650.64356390.jpeg'),
(65, 'Persona 5', 'Persona 5 is a role-playing video game developed by Atlus. The game is chronologically the sixth installment in the Persona series, which is part of the larger Megami Tensei franchise.', 3000, 100, 'Video Games', 'Active', '5cc2e5cf722f60.42001771.jpg'),
(66, 'Ponds White Beauty', 'A beauty product', 900, 50, 'Beauty Products', 'Active', '5cc2e9405eb9b3.64325520.jpeg'),
(68, 'Razer Kraken Pro V2', 'The Razer Kraken Pro V2 is outfitted with larger drivers than its predecessor to offer a louder and richer soundstage than ever before. Youâ€™ll feel like youâ€™re right at the center of all the gaming action, while ensuring your teamâ€™s shotcalls are heard with absolute clarity.', 7000, 3, 'Headphones', 'Active', '5cc2e9d7aec258.13518782.jpg'),
(69, 'Persona 4', 'Persona 4 is a role-playing video game developed and published by Atlus for Sony\'s PlayStation 2, and chronologically the fifth installment in the Persona series, itself a part of the larger Megami Tensei franchise. The game was released in Japan in July 2008, North America in December 2008, and Europe in March 2009.', 500, 10, 'Video Games', 'Active', '5cc4272375a222.27354326.jpg'),
(73, 'Harry Potter and the Chamber of Secrets', 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter.', 1500, 10, 'Books', 'Active', '5cc33c974954b2.31790253.jpeg'),
(74, 'Harry Potter and the Philosopher\'s Stone', 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling.', 1500, 10, 'Books', 'Active', '5cc33d43f23238.70174955.jpg'),
(75, 'Beanie', 'Beanie (seamed cap), in parts of North America, a cap made from cloth often joined by a button at the crown and seamed together around the sides\r\nBeanie, a knit cap, in British, Australian, South Africa and parts of Canada and the United States (also known as a toque)\r\nBeanie, any type of headgear unsuitable for safe motorcycling', 100, 100, 'Clothings', 'Active', '5cc427d4034240.16587885.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
