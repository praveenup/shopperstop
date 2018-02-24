-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 12:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchased` tinyint(1) NOT NULL,
  `quantity` int(11) NOT NULL,
  `place_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `product_id`, `purchased`, `quantity`, `place_time`) VALUES
(1, 9, 1, 1, '2018-02-19 20:12:41'),
(3, 18, 1, 1, '2018-02-19 21:18:57'),
(3, 19, 1, 1, '2018-02-19 21:18:57'),
(3, 17, 1, 1, '2018-02-19 21:18:57'),
(3, 5, 1, 1, '2018-02-19 21:19:11'),
(1, 5, 1, 1, '2018-02-20 05:47:32'),
(1, 10, 1, 1, '2018-02-20 05:47:32'),
(1, 9, 1, 1, '2018-02-20 05:50:07'),
(4, 7, 1, 1, '2018-02-20 05:55:04'),
(4, 10, 1, 1, '2018-02-20 05:55:04'),
(1, 10, 1, 1, '2018-02-21 04:40:51'),
(1, 19, 1, 1, '2018-02-21 04:40:51'),
(1, 26, 1, 1, '2018-02-21 04:53:43'),
(1, 25, 1, 1, '2018-02-21 18:02:54'),
(1, 20, 1, 1, '2018-02-21 18:41:45'),
(5, 6, 1, 1, '2018-02-22 07:58:58'),
(5, 25, 1, 1, '2018-02-22 08:01:19'),
(5, 6, 1, 1, '2018-02-22 08:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Fashion'),
(3, 'Footware'),
(4, 'Bags');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_discount`, `product_image`, `discription`) VALUES
(5, 2, 'Slim Fit Casual Shirt', 400, 20, 'uploads/Highlander-Blue-Denim-Slim-Fit-Casual-Shirt.jpg', 'Blue medium wash 4-pocket mid-rise jeans, clean look with light fade, has a button and zip closure, waistband with belt loops'),
(6, 2, 'Fit Solid Casual Shirt', 500, 30, 'uploads/Roadster-Men-Black-Regular-Fit-Solid-Casual-Shirt.jpg', 'Blue medium wash 4-pocket mid-rise jeans, clean look with light fade, has a button and zip closure, waistband with belt loops'),
(7, 2, 'Men Slim Fit Jeans', 1000, 10, 'uploads/HIGHLANDER-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jeans.jpg', 'Blue medium wash 4-pocket mid-rise jeans, clean look with light fade, has a button and zip closure, waistband with belt loops'),
(9, 2, 'Women Jeans', 1300, 25, 'uploads/HERENOW-Women-Jeans.jpg', 'Black dark wash 5-pocket mid-rise jeans, clean look with no fade, has a button and zip closure, waistband with belt loops'),
(10, 2, 'Rainbow Women Suit', 2000, 30, 'uploads/Rain-Rainbow-Women-Dresses.jpg', 'Navy and white printed woven maxi dress, has a round neck, three-quarter sleeves, hook and eye closures, flared hem'),
(11, 2, 'Athena Dress', 1500, 25, 'uploads/Athena-Women-Dresses.jpg', 'Pink solid woven maxi dress, has a round neck, sleeveless with an attached jacket'),
(12, 1, 'apple iphone 7', 47000, 10, 'uploads/apple-iphone-7-na-original-imaemzee435f9gpu.jpeg', 'iPhone 6 isnâ€™t simply bigger - itâ€™s better in every way. Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD Display. Itâ€™s one continuous form where hardware and software function in perfect unison, creating a new generation of iPhone thatâ€™s better by any measure.'),
(13, 1, 'Apple Macbook', 57000, 10, 'uploads/apple-na-notebook-original-imaevdrcvuksg2zv.jpeg', 'iOS 10 is the worldâ€™s most advanced mobile operating system. And with incredible new capabilities and features designed to make the most of a larger display, iOS 10 doesnâ€™t just work seamlessly with iPhone 6. It makes every experience feel bigger and better.'),
(14, 1, 'Apple Watch', 21000, 25, 'uploads/mp032hn-a-apple-original-imaemy6ymsgzgzas.jpeg', 'iOS 10 is the worldâ€™s most advanced mobile operating system. And with incredible new capabilities and features designed to make the most of a larger display, iOS 10 doesnâ€™t just work seamlessly with iPhone 6. It makes every experience feel bigger and better.'),
(15, 1, 'WD HardDisk', 4000, 5, 'uploads/wd-elements-original-imadmhegj4jkaghs.jpeg', 'WD Elements portable hard drives with USB 3.0 offer reliable, high-capacity storage to go, fast data transfer rates, universal connectivity and massive capacity for value-conscious consumers. USB 3.0 and USB 2.0 compatibility â€“ With this single drive you get compatibility with the latest USB 3.0 devices and backward compatibility with USB 2.0 devices as well.'),
(16, 1, 'Bajaj AC ', 25000, 10, 'uploads/js-q18buxd-1-5-split-lg-original-imaf2f58f3sfvzfb.jpeg', 'WD Elements portable hard drives with USB 3.0 offer reliable, high-capacity storage to go, fast data transfer rates, universal connectivity and massive capacity for value-conscious consumers. USB 3.0 and USB 2.0 compatibility â€“ With this single drive you get compatibility with the latest USB 3.0 devices and backward compatibility with USB 2.0 devices as well.'),
(17, 3, 'Roadster Footware', 1100, 15, 'uploads/11471499895066-Roadster-Men-Brown-Solid-Regular-Sneakers-3411471499894853-1.jpg', 'A pair of round-toe brown sneakers, has central lace-ups\r\nPU upper\r\nCushioned footbed\r\nPatterned outsole'),
(18, 3, 'Men Footware', 1300, 20, 'uploads/11484571208657-Roadster-Men-Casual-Shoes-8271484571208373-1.jpg', 'A pair of round-toe brown sneakers, has central lace-ups\r\nPU upper\r\nCushioned footbed\r\nPatterned outsole'),
(19, 3, 'Girls Sandal', 2100, 25, 'uploads/11485339496816-DressBerry-Women-Beige-Solid-Pumps-3531485339496691-1.jpg', 'A pair of round-toe brown sneakers, has central lace-ups\r\nPU upper\r\nCushioned footbed\r\nPatterned outsole'),
(20, 3, 'Nike Casuals', 5000, 20, 'uploads/11501059774655-Nike-Men-Casual-Shoes-6801501059774545-3.jpg', 'A pair of round-toe brown sneakers, has central lace-ups\r\nPU upper\r\nCushioned footbed\r\nPatterned outsole'),
(21, 3, 'DressBerry Sandals', 1200, 10, 'uploads/11516704012549-DressBerry-Women-Pink-Solid-Synthetic-Open-Toe-Flats-5211516704012421-1.jpg', 'A pair of round-toe brown sneakers, has central lace-ups\r\nPU upper\r\nCushioned footbed\r\nPatterned outsole'),
(22, 3, 'Ronnie X2', 1200, 25, 'uploads/11517828832122-Ronni-X2-IDP-6311517828832006-1.jpg', 'A pair of navy flip-flops\r\nSynthetic and textured upper with Adidas patent tri-stripes\r\nCushioned and textured footbed\r\nTextured outsole'),
(23, 4, 'Kipling Trolly', 5000, 20, 'uploads/Kipling-Girls-Trolley-Bag.jpg', 'One short padded handle, has a trolley with retractable handle on the top and corner-mounted inline skate wheels, two adjustable and padded shoulder straps\r\nTwo main zip compartments, one has a padded laptop sleeve and the other has an address tag and an organiser '),
(24, 4, 'Kidson Bag', 4400, 20, 'uploads/Cath-Kidston-Girls-Pink--Green-Floral-Print-Cabin-Trolley-Bag.jpg', 'One short padded handle, has a trolley with retractable handle on the top and corner-mounted inline skate wheels, two adjustable and padded shoulder straps\r\nTwo main zip compartments, one has a padded laptop sleeve and the other has an address tag and an organiser '),
(25, 4, 'Bag Girls', 6000, 25, 'uploads/Kipling-Girls-Trolley-Bag1.jpg', 'One short padded handle, has a trolley with retractable handle on the top and corner-mounted inline skate wheels, two adjustable and padded shoulder straps\r\nTwo main zip compartments, one has a padded laptop sleeve and the other has an address tag and an organiser '),
(26, 4, 'Fastrack Bagpack', 1200, 12, 'uploads/Fastrack-Men-Backpacks.jpg', 'Blue and black printed backpack\r\nNon-padded haul loop, padded shoulder straps\r\n2 main compartments with zip closure, one has a padded laptop compartment\r\nPadded mesh back'),
(27, 4, 'United Colors Benetton', 1500, 15, 'uploads/United-Colors-of-Benetton-Men-Black-Solid-Backpack.jpg', 'Blue and black printed backpack\r\nNon-padded haul loop, padded shoulder straps\r\n2 main compartments with zip closure, one has a padded laptop compartment\r\nPadded mesh back'),
(28, 2, 'MR BUTTON ', 1500, 15, 'uploads/11451382087535-MR-BUTTON-Teal-Blue-Slim-Fit-Blazer-8231451382087045-1.jpg', 'Black solid casual shirt, has a spread collar, button placket, 1 pocket, long sleeves, curved hem'),
(31, 4, 'Bag', 1200, 12, 'uploads/Cath-Kidston-Girls-Pink--Green-Floral-Print-Cabin.jpg', 'ssdsadadas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'Praveen Kumar', 'prakum@gmail.com', 'praveen'),
(2, 'praveen kumar', 'prakum.633@gmail.com', 'p'),
(3, 'rahul', 'rahul@gmail.com', 'rahul'),
(4, 'Baba Basukinath', 'bsknath@gmail.com', '123456'),
(5, 'praveen', 'pra@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
