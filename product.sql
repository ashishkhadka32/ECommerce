-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 04:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`) VALUES
(1, 'ashis@gmail.com', 'ashish'),
(2, 'hikmat@gmail.com', 'hikmat');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `company` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `details` varchar(250) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `product`, `price`, `company`, `category`, `details`, `photo`) VALUES
(18, 'samsung one plus', 50000, 'samsung', 'mobile', 'Display: 6.52” HD+ IPS LCD\r\nOS: Android 10 with OxygenOS 10.5 on top\r\nRear Camera: Triple, 13MP primary lens, 2 MP depth lens, 2MP macro lens\r\nFront Camera:8MP\r\nChipset: Qualcomm Snapdragon 460\r\nRAM: 4GB\r\nStorage: 64GB\r\nBattery:5000mAh, 18W Fast Char', './upload/1+.jpg'),
(19, 'DELL Inspiron 14', 70000, 'DELL', 'laptop', '12 Gen Intel® Core™ i7-1255U\r\nWindows 11 Home Single Language\r\nNVIDIA® GeForce® MX550, 2 GB GDDR6\r\n16GB, 2x8GB, DDR4, 3200MHz\r\n512 GB, M.2, PCIe NVMe, SSD\r\n35.5-cm. display Full HD (1920X1200)\r\nStarting at 1.57 kg', './upload/laptop.jpg'),
(20, 'samsung galaxy S22', 80000, 'samsung', 'mobile', 'Display: 6.8-inches WQHD+ Dynamic AMOLED 2X, Adaptive 120Hz refresh rate, Dual Corning Gorilla Glass Victus+, S-pen support\r\nChipset: Snapdragon 8 Gen 1 (4nm)\r\nRAM: 12GB\r\nStorage: 256/512GB (non-expandable)\r\nSoftware & UI: One UI 4.0 on top of Androi', './upload/galaxy.jpg'),
(21, 'Redmi note 11', 23000, 'Redmi', 'mobile', 'Display: 6.43” FHD+ AMOLED, 90Hz refresh r...\r\nSoftware & UI: Android 11 with MIUI 13 on top\r\nMemory: 4/6GB LPDDR4X RAM, 64/128GB UFS ...\r\nChipset: Qualcomm Snapdragon 680 4G (6nm)', './upload/redmi 11.jpg'),
(22, 'Oppo A15s', 22000, 'Oppo', 'mobile', 'Display: 6.52-inch LCD with HD+ resolution (720 x 1600 pixels)\r\nRear Camera: Triple (13MP primary, 2MP depth, 2MP macro)\r\nFront Camera: 8MP sensor\r\nChipset: MediaTek Helio P35 (12nm mobile platform)\r\nGPU: PowerVR GE8320\r\nRAM: 4GB\r\nStorage: 64GB (expa', './upload/1.jpg'),
(23, 'Oppo A9', 30000, 'Oppo', 'mobile', '\r\nDisplay\r\n6.50-inch (720x1600)\r\nProcessor\r\nQualcomm Snapdragon 665\r\nFront Camera\r\n16MP\r\nRear Camera\r\n48MP + 8MP + 2MP + 2MP\r\nRAM\r\n4GB\r\nStorage\r\n128GB\r\nBattery Capacity\r\n5000mAh\r\nOS\r\nAndroid 9 Pie', './upload/a9.jpeg'),
(24, 'iphone 8', 85000, 'iphone', 'mobile', 'ajbhxjhas sahs xbhsa xsajhx bshax sahx bsx sax ', './upload/download.jpg'),
(29, 'iphone 8', 90000, 'iphone', 'mobile', 'Released 2017, September 22\r\n148g, 7.3mm thickness\r\niOS 11, up to iOS 15.6\r\n64GB/128GB/256GB storage, no card slot', './upload/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile`, `message`) VALUES
(2, 'ishwor', 1230414561, 'sjbdhja sdhas jdsach sajch sa cjsa hcjhsa csa jh asdnhjas cjsa chjsnj'),
(3, 'Ashis khadka', 2147483647, 'any message or feedback'),
(4, 'Hikmat', 987564123, 'any feedback o message you want to send'),
(5, 'Hikmat', 2147483647, 'any message and feedback you want to send'),
(6, 'Ashis', 2147483647, 'you can give any feedback'),
(8, 'Hikmat', 1234567890, 'any feedback you can sent');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Contact` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Full_Name`, `Contact`, `Address`, `Pay_Mode`) VALUES
(84, 'Ashis Khadka', 9843803543, 'Suryabinayak, Bhaktapur', ''),
(85, 'Ashok', 9860116837, 'Bhaktapur', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` text NOT NULL,
  `ConfirmPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `UserName`, `Email`, `Password`, `ConfirmPassword`) VALUES
(17, 'Ashis', 'user@gmail.com', '123456', '123456'),
(20, 'ashis', 'ashis@gmail.com', 'ashis', 'ashis'),
(21, 'hikmat', 'hikmat1@gmail.com', 'hikmat', 'hikmat'),
(22, 'Hikmat', 'hikmat12@gmail.com', 'hikmat', 'hikmat'),
(25, 'Hikmat', 'user121@gmail.com', 'user', 'user'),
(26, 'hikmat', 'hikmat12@gmail.com', 'hikmat', 'hikmat'),
(27, 'Hikmat', 'user121@gmail.com', 'user', 'user'),
(28, 'Hikmat', 'hikmat123@gmail.com', 'hikmat', 'hikmat'),
(0, 'Ashis', 'ashis@gmail.com', 'ashish', 'ashish'),
(0, 'Ashis', 'ashis123@gmail.com', 'ashis', 'ashis'),
(0, 'ashish', 'ashish@gmail.com', 'ashish', 'ashish'),
(0, 'ashok', 'ashok@gmail.com', 'ashok', 'ashok');

-- --------------------------------------------------------

--
-- Table structure for table `shopcart`
--

CREATE TABLE `shopcart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopcart`
--

INSERT INTO `shopcart` (`id`, `product_name`, `product_price`, `product_quantity`) VALUES
(118, 'samsung galaxy S22', '80000', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `shopcart`
--
ALTER TABLE `shopcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
