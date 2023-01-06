-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 04:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` mediumtext NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` int(15) NOT NULL,
  `reservation_text` text DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`, `image`) VALUES
(1, 'Monopolio', 'jeux de table', '39.00', 'Strasbourg', 67000, 'fdfdfd', ''),
(2, 'vélo électrique', 'velo avec la nouvelle technologie velocipter', '599.98', 'Nantes', 54000, '0', 'https://cdn.pixabay.com/photo/2013/07/13/13/39/bicycle-161315_960_720.png'),
(4, 'vélo électrique', 'velo avec la nouvelle technologie velocipter', '599.98', 'Nantes', 54000, '0', ''),
(5, 'god of war ', 'video jeux', '69.99', 'Paris', 909090, 'dgfdglimvtrpkt', 'https://cdn.pixabay.com/photo/2022/12/14/19/32/death-knight-7656097_960_720.jpg'),
(7, 'arbre pour chats', 'structure pour amusement chat', '78.99', 'Lille', 45566, '0', ''),
(8, 'machine massage', 'machine pour massage pieds dos jambes etc', '250', 'paris', 888888, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
