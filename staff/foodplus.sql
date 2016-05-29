-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 29. maj 2016 ob 23.39
-- Različica strežnika: 10.1.13-MariaDB
-- Različica PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `foodplus`
--

-- --------------------------------------------------------

--
-- Struktura tabele `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Production_date` date NOT NULL,
  `Expiry_date` date NOT NULL,
  `Price` double NOT NULL,
  `Currency` varchar(15) NOT NULL,
  `EAN_code` varchar(30) NOT NULL,
  `Weight` double NOT NULL,
  `Weight_unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `products`
--

INSERT INTO `products` (`id`, `Name`, `Description`, `Production_date`, `Expiry_date`, `Price`, `Currency`, `EAN_code`, `Weight`, `Weight_unit`) VALUES
(1, 'RIZ', 'riz za kuhanje', '0000-00-00', '0000-00-00', 5, 'eur', '55555', 5, 'eur'),
(2, 'kruh', 'obicn kruh', '2016-05-16', '2017-05-31', 2, 'eur', '1111', 1, 'eur'),
(3, 'kruh', 'obicn kruh', '2016-05-16', '2017-05-31', 2, 'eur', '1111', 1, 'kg'),
(4, 'kruh', 'obicn kruh', '2015-05-05', '2015-05-06', 150, 'usd', '111231', 2, 'kg'),
(5, 'RIZ', 'riz za kuhanje', '2015-05-11', '2015-05-20', 5, 'EUR', '1234567891023', 5, 'kg'),
(6, 'dgfdgd', 'dfgfdgfd', '2015-05-11', '2015-05-20', 200, 'eur', '12324234', 25, 'kg'),
(7, 'dgfdgd', 'dfgfdgfd', '2015-05-11', '2015-05-20', 200, 'eur', '12324234', 25, 'kg'),
(8, 'dgfdgd', 'dfgfdgfd', '2015-05-11', '2015-05-20', 200, 'eur', '12324234', 25, 'kg'),
(9, 'dgfdgd', 'dfgfdgfd', '2015-05-11', '2015-05-20', 200, 'eur', '12324234', 2444, 'kg'),
(10, 'dgfdgd', 'dfgfdgfd', '2015-05-11', '2015-05-20', 200, 'eur', '12324234', 2444, 'kg'),
(11, 'Mleko', 'Mleko slovenske mlekarne', '1986-07-11', '2016-07-11', 500, 'eur', '9898323', 120, 'kg'),
(12, 'Mleko', 'Mleko slovenske mlekarne', '1986-07-11', '2016-07-11', 500, 'eur', '9898323', 120, 'kg'),
(13, 'aaaaaa', 'aaaaaaa', '2015-05-11', '2016-06-25', 5, 'usd', '232131', 555, 'lbs'),
(14, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaa', '2015-05-11', '2015-05-20', 22222, 'eur', '12312311', 224, 'kg'),
(15, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaa', '2015-05-11', '2015-05-20', 22222, 'eur', '12312311', 224, 'kg'),
(16, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaa', '2015-05-11', '2015-05-20', 22222, 'eur', '12312311', 224, 'kg'),
(17, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(18, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(19, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(20, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(21, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(22, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(23, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(24, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(25, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(26, 'asdfsadsadsa', 'asdsadsadasdsa', '2015-06-25', '2020-05-04', 600, 'usd', '49543953459', 400, 'kg'),
(27, 'Benjamin', 'benjamin', '2015-05-25', '2020-05-05', 10000, 'eur', '95632432', 120, 'kg');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
