-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 05:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movierecommender`
--

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

CREATE TABLE `week` (
  `SI.NO` int(255) NOT NULL,
  `Moviename` varchar(255) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Movie image` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Director` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`SI.NO`, `Moviename`, `Genre`, `Movie image`, `Description`, `Date`, `Director`) VALUES
(1, 'One Life', 'Biograpphy', 'https://yc.cldmlk.com/9zkrh15mwz2v2s1vbrcmx74j4w/1698217214742_Poster.jpeg', 'Follows British humanitarian Nicholas Winton, who helped save hundreds of Central European children from the Nazis on the eve of World War II.', '2024-01-01', 'James Hawes'),
(2, 'Night Swim', 'Horror', 'https://preview.redd.it/official-poster-for-night-swim-v0-rz3twxt3gesb1.jpg?auto=webp&s=9fdaf9a50837199735ea414a6bd68d386bf477d0', 'Forced into early retirement by a degenerative illness, former baseball player Ray Waller moves into a new house with his wife and two children. He hopes that the backyard swimming pool will be fun for the kids and provide physical therapy for himself. Ho', '2024-01-05', 'Bryce McGuire'),
(3, 'The Beekeeper', 'Action', 'https://m.media-amazon.com/images/M/MV5BZjQwYjU3OTYtMWVhMi00N2Y2LWEzMDgtMzViN2U4NWI1NmI3XkEyXkFqcGdeQXVyODk2NDQ3MTA@._V1_FMjpg_UX1000_.jpg', 'One man\'s brutal campaign for vengeance takes on national stakes after it\'s revealed he\'s a former operative of a powerful and clandestine organization known as Beekeepers.', '2024-01-12', 'David Ayer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`SI.NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `week`
--
ALTER TABLE `week`
  MODIFY `SI.NO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
