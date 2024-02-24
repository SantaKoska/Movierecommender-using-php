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
-- Table structure for table `newcinema`
--

CREATE TABLE `newcinema` (
  `SI.NO` int(100) NOT NULL,
  `Moviename` varchar(100) NOT NULL,
  `IMDB` float DEFAULT NULL,
  `Rottentomato` int(2) DEFAULT NULL,
  `Genre` varchar(50) NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Universe` varchar(100) DEFAULT NULL,
  `Date` date NOT NULL,
  `Movieimage` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newcinema`
--

INSERT INTO `newcinema` (`SI.NO`, `Moviename`, `IMDB`, `Rottentomato`, `Genre`, `Director`, `Universe`, `Date`, `Movieimage`, `Description`) VALUES
(11, 'The Dark Knight', 9, 94, 'Action', 'Christopher Nolan', 'NULL', '2008-07-18', 'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/81CLFQwU-WL.jpg', 'Batman has a new foe, the Joker, who is an accomplished criminal hell-bent on decimating Gotham City. Together with Gordon and Harvey Dent, Batman struggles to thwart the Joker before it is too late'),
(12, 'Inception', 8.8, 87, 'Action', 'Christopher Nolan', 'NULL', '2010-07-16', 'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71thFiIUSpL._AC_UF1000,1000_QL80_.jpg', 'Cobb steals information from his targets by entering their dreams. He is wanted for his alleged role in his wifes murder and his only chance at redemption is to perform a nearly impossible task.'),
(13, 'The Matrix', 8.7, 83, 'Action', 'Lana Wachowski, Lilly Wachowski', 'NULL', '1999-03-31', 'https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg', 'Neo, a computer programmer and hacker, has always questioned the reality of the world around him. His suspicions are confirmed when Morpheus, a rebel leader, contacts him and reveals the truth to him.'),
(15, 'The Godfather', 9.2, 97, 'Crime', 'Francis Ford Coppola', 'NULL', '1972-03-14', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRENM4uQtPSWeeAQ-5Ob0wFmHCPQy-QWd-it-FFKMtjyg&s', 'Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son, Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.'),
(17, 'The Godfather Part II', 9, 96, 'Crime', 'Francis Ford Coppola', 'NULL', '1974-12-20', 'https://timesofindia.indiatimes.com/photo/61256132.cms', 'Vitos popularity in the underworld is on the rise, while his son, Michaels career is swinging downwards. In order to redeem himself, Michael must fight his enemies, including his own brother.'),
(18, 'The Lord of the Rings: The Return of the King', 9, 94, 'Fantasy', 'Peter Jackson', '', '2004-02-06', 'https://images.moviesanywhere.com/45bc0ec075bfc0b4d8f184a7cc5bf993/876ed805-83b1-4387-b0d0-62d08c36536d.jpg', 'The former Fellowship members prepare for the final battle. While Frodo and Sam approach Mount Doom to destroy the One Ring, they follow Gollum, unaware of the path he is leading them to.'),
(19, ' The Lord of the Rings: The Fellowship of the Ring', 8.9, 91, 'Fantasy', 'Peter Jackson', 'NULL', '2002-03-15', 'https://images.moviesanywhere.com/198e228b071c60f5ad57e5f62fe60029/ff22cad6-2218-414d-b853-3f95d76905c7.jpg', 'The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggin'),
(20, 'Alien', 8.5, 93, 'Horror', 'Ridley Scott', '', '1979-12-06', 'https://images.justwatch.com/poster/8543836/s592/alien', 'The crew of a spacecraft, Nostromo, intercept a distress signal from a planet and set out to investigate it. However, to their horror, they are attacked by an alien which later invades their ship'),
(21, 'The Shining', 8.4, 83, 'Horror', 'Stanley Kubrick', '', '1980-05-23', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1C84BcX-vhlbPrSi5m8xnxDENjO_Nsdq3bA', 'Jack and his family move into an isolated hotel with a violent past. Living in isolation, Jack begins to lose his sanity, which affects his family members.'),
(22, 'Its a Wonderful Life', 8.6, 94, 'Romance', 'Frank Capra', 'NULL', '1947-01-07', 'https://s3.amazonaws.com/nightjarprod/content/uploads/sites/261/2023/09/05131821/mV3VcmMJN6Zwahj42dy9WwPUyRI-scaled.jpg', 'When a frustrated businessman, George Bailey, becomes suicidal, an angel from heaven, Clarence, is sent to him. To his change of heart, she shows him what life would have been without his existence.'),
(23, 'Interstellar', 8.7, 73, 'Sci-fi', 'Christopher Nolan', '', '2014-11-07', 'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71GTnYW5ejL._AC_UF1000,1000_QL80_.jpg', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.'),
(24, 'Schindlers List', 9, 98, 'Biograpphy', 'Steven Spielberg', 'NULL', '1994-02-04', 'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71dbEP2j2DS._AC_UF1000,1000_QL80_.jpg', 'Oscar Schindler, a successful and narcissistic German businessman, slowly starts worrying about the safety of his Jewish workforce after witnessing their persecution in Poland during World War II.'),
(25, 'Dangal', 8.3, 89, 'Sports', 'Nitesh Tiwari', 'NULL', '2016-12-23', 'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/712b+yDoWVL._AC_UF1000,1000_QL80_.jpg', 'Mahavir Singh Phogat, a former wrestler, decides to fulfil his dream of winning a gold medal for his country by training his daughters for the Commonwealth Games despite the existing social stigmas.'),
(26, 'The Dark Knight', 9, 94, 'Thriller', 'Christopher Nolan', '', '2008-07-18', 'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/81CLFQwU-WL.jpg', 'Batman has a new foe, the Joker, who is an accomplished criminal hell-bent on decimating Gotham City. Together with Gordon and Harvey Dent, Batman struggles to thwart the Joker before it is too late.'),
(28, 'Saving Private Ryan', 8.6, 94, 'War', 'Steven Spielberg', '', '1998-07-24', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNWltd8k9X_fWXfKNdQQ8vf3ctUJ_QiKWetw', 'During the Normandy invasion of World War II, Captain John Miller is assigned the task of searching for Private James Ryan, whose three brothers have already been killed in the war.'),
(29, 'The Good, the Bad and the Ugly', 8.8, 97, 'Western', 'Sergio Leone', 'NULL', '1966-12-23', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ8TEaJtrdWYkj8FiSpYDVXv-k-48k-lPmUg', 'A bounty hunting expedition brings two men together in an uncomfortable alliance while looking for buried treasure. They also battle with a wanted outlaw who wants to settle an old score with them.'),
(30, 'STAR WARS: EPISODE I - THE PHANTOM MENACE (1999)', 6.5, 52, 'Sci-fi', 'George Lucas', 'Star Wars', '1999-10-22', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwsHOFm3MoXFMdIFnVnKgM5Ukl80J3m1DeVg', 'Star Wars: Dawn of the Jedi is an American comic book series set in the Star Wars universe. The series, published by Dark Horse Comics, is written by John Ostrander, penciled by Jan Duursema, inked by Dan Parsons, and colored'),
(31, 'STAR WARS: EPISODE II - ATTACK OF THE CLONES (2002)', 6.6, 65, 'Sci-fi', 'George Lucas', 'Star Wars', '2002-05-16', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS7REHHdwEg4HeNUuOp52T7VLAA096AoAagptMn9Mkd9bp8UVLUzD0S2Ev3udHFutq2u5Mb0038NL4nf06iMO6bSp1KQs3hPZs-HuIWT3s', 'While pursuing an assassin, Obi Wan uncovers a sinister plot to destroy the Republic. With the fate of the galaxy hanging in the balance, the Jedi must defend the galaxy against the evil Sith.'),
(32, 'STAR WARS: EPISODE III - REVENGE OF THE SITH (2005', 7.6, 79, 'Sci-fi', 'George Lucas', 'Star Wars', '2005-05-20', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRDI0gqDGq5iIoqMkFl17HB5Mz9rL71P-A_ySAxLzprHIpTHddofXIIfWCDiIh_0eK8T_WeBp_jZwAdv_7yjTTKRR2fVtUeGT1E4YEC-_Xi', 'Anakin joins forces with Obi-Wan and sets Palpatine free from the evil clutches of Count Doku. However, he falls prey to Palpatine and the Jedis mind games and gives into temptation.'),
(33, 'Iron Man', 7.9, 94, 'Sci-fi', 'Jon Favreau', 'Marvels', '2008-05-01', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQF0DwXGtBFmgZIjPYrmCH3WAYNqF1C4ZtNLw', 'When Tony Stark, an industrialist, is captured, he constructs a high-tech armoured suit to escape. Once he manages to escape, he decides to use his suit to fight against evil forces to save the world.'),
(34, 'The Incredible Hulk', 6.6, 67, 'Sci-fi', 'Louis Leterrier', 'Marvels', '2008-06-20', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgY0eF98zn90nz6gdijkMqM4M0_0pJhgt9gw', 'Dr Bruce Banner subjects himself to high levels of gamma radiation, which triggers his transformation into a huge green creature, the Hulk, whenever he experiences negative emotions such as anger.'),
(35, 'Iron Man 2 ', 6.9, 72, 'Sci-fi', 'Jon Favreau', 'Marvels', '2010-05-07', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl0CGmFGrjAIaIjudAZeiGnM2_IVUnSDgBlA', 'Tony Stark is under pressure from various sources, including the government, to share his technology with the world. He must find a way to fight them while also tackling his other enemies.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newcinema`
--
ALTER TABLE `newcinema`
  ADD PRIMARY KEY (`SI.NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newcinema`
--
ALTER TABLE `newcinema`
  MODIFY `SI.NO` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
