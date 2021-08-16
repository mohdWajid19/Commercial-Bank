-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 03:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno.` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `beneficiary` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sno.`, `username`, `beneficiary`, `date`, `amount`) VALUES
(1, 'Abhinavan', 'likhith kumar', '2021-08-07', '10000'),
(2, 'Abhinavan', 'Mohd Wajid', '2021-08-07', '30000'),
(3, 'Konda janaki', 'Imran', '2021-08-07', '56565'),
(4, 'Konda rohith', 'likhith kumar', '2021-08-07', '2003'),
(5, 'Abhinav', 'Konda rohith', '2021-08-07', '2560'),
(6, 'likhith kumar', 'Ranjan Sharma', '2021-08-07', '2300'),
(7, 'Mohd Wajid', 'Abhinavan', '2021-08-07', '2300'),
(8, 'Mohd Wajid', 'Abhinavan', '2021-08-07', '10000'),
(9, 'Mohd Wajid', 'likhith kumar', '2021-08-07', '10000'),
(10, 'Mohd Wajid', 'Ranjan Sharma', '2021-08-07', '123123'),
(11, 'Mohd Wajid', 'Abhinavan', '2021-08-07', '11'),
(12, 'Konda janaki', 'Abhinavan', '2021-08-07', '20'),
(13, 'Praveen', 'Zaid', '2021-08-07', '123123'),
(14, 'Mohd Wajid', 'Konda rohith', '2021-08-07', '2143'),
(15, 'likhith kumar', 'Abhinav', '2021-08-07', '2222'),
(16, 'Mohd Wajid', 'Mohan Reddy', '2021-08-07', '2232'),
(17, 'Konda janaki', 'likhith kumar', '2021-08-08', '21213'),
(18, 'Mohd Wajid', 'Praveen', '2021-08-08', '800000'),
(19, 'Mohd Wajid', 'Mohan Reddy', '2021-08-08', '100'),
(20, 'Ranjan Sharma', 'Mohan Reddy', '2021-08-12', '23000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userID` varchar(25) NOT NULL,
  `bankBalance` double(23,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `userID`, `bankBalance`) VALUES
(1, 'Mohd Wajid', 'mohdwajid@cb.com', 8809091.000),
(2, 'Abhinavan', 'abhinavan@cb.com', 8083331.000),
(3, 'likhith kumar', 'likhith@cb.com', 310716.000),
(4, 'Konda janaki', 'janaki@cb.com', 45658.000),
(5, 'Konda rohith', 'rohith@cb.com', 126489.000),
(6, 'Praveen', 'praveen@cb.com', 810426.000),
(7, 'Ranjan Sharma', 'sharmaji@cb.com', 567574.000),
(8, 'Imran', 'imran@cb.com', 273113.000),
(9, 'Zaid', 'zaid@cb.com', 987704.000),
(10, 'Lokesh kumar', 'loki@cb.com', 516512.000),
(11, 'Naga Sai', 'naga@cb.com', 485152.000),
(12, 'Zubair', 'zubair@cb.com', 568152.000),
(13, 'Arfaz', 'arfaz@cb.com', 815203.000),
(14, 'Abhinav', 'abhi@cb.com', 511178.000),
(15, 'Mohan Reddy', 'mohan@cb.com', 1010444.000),
(16, 'Varshith', 'Varshith@cb.com', 123232.000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
