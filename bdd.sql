-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 30, 2019 at 03:12 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `divercity`
--

-- --------------------------------------------------------

--
-- Table structure for table `evenements`
--

CREATE TABLE `evenements` (
  `id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evenements`
--

INSERT INTO `evenements` (`id`, `content`, `author`, `date`) VALUES
(2, 'La brocante annuelle a lieu dimanche prochain, pour les éventuels exposants, il reste encore quelques emplacements à louer ! Les acheteurs, venez nombreux !\r\n______\r\n![Brocante Année Passée](https://images.unsplash.com/photo-1494795817488-f572f2a30c87?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)', '7', '27-05-2019'),
(3, 'Une troupe de cirque est en ville ! Les places ne sont pas très chères, même pour les adultes, je vous le recommande !\r\n______\r\n![Cirque](https://images.unsplash.com/photo-1542675454-b3fbb8b41c18?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)', '8', '30-05-2019');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `content`, `author`, `date`) VALUES
(1, 'Je recherche un.e baby-sitter (de préférence avec de l’expérience) ! J’ai deux enfants respectivement âgés de 6 et 9 ans.', '6', '28-05-2019'),
(2, 'La papeterie du quartier de l’église recrute ! Nous cherchons quelqu’un à mi-temps, pourquoi pas pour un job d’étudiant, contactez nous :)\r\n______\r\n![Papeterie](https://images.unsplash.com/photo-1454587399083-b11b22f48fb6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)', '9', '29-05-2019'),
(3, 'Le club de box recherche un nouveau coach ! Vous avez des compétences ? Contactez nous!\r\n______\r\n![Box](https://images.unsplash.com/photo-1485618609651-5a8bd6efc777?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)', '10', '23-05-2019');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `content`, `author`, `date`) VALUES
(6, 'Les travaux du parking de l’école primaire sont terminés ! Il y a désormais vingt nouvelles places !', '3', '21-05-2019'),
(9, 'Plus qu’une semaine avant la fermeture de la patinoire pour l’été, nous vous attendons nombreux !\r\n______\r\n\r\n![Patinoire](https://images.unsplash.com/photo-1551801269-f147cef4d2e8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)', '4', '25-05-2019'),
(10, 'Grâce à votre générosité, l’antenne locale des Resto du Coeur a collecté plus de 5 000 € ! Merci !!', '5', '30-05-2019');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `birthday`, `email`, `password`, `city`) VALUES
(1, 'Le Scouarnec', 'Maëlle', '1999-01-07', 'maelle.lescouarnec@gmail.com', '$2y$10$8rvk5wCbQZB/jXoK5K.C5OAwBWoJ.C2aWBIyl0WMztUXRQelG6g7C', 'Saint Pierre Du Perray'),
(2, 'Elhamdani', 'Younes', '1999-08-19', 'spartan9452@gmail.com', '$2y$10$K0DZnHVxcy0h73D0fvIxAu/fIqGnIp6u/WBLQN3jk7M..tbFzTDBW', 'Villeneuve le roi'),
(3, 'Perneau', 'Jean', '1990-01-01', 'jeanjean@test.fr', '$2y$10$bqEeQ4iW1vu3Pya358OkMuOV4cBGfONaXGY6p/CrJQtVsJM2zALxS', 'Paris'),
(4, 'Lehaut', 'Marc', '187-23-04', 'marc.test@test.fr', '$2y$10$uUXyn/fHD7lV5jnOrH/hpe2AI3KME8t1Grb2XItvDhyRKOnE9NWKG', 'Paris'),
(5, 'Suehdil', 'Julie', '1989-05-10', 'julie.test@test.fr', '$2y$10$pKygbO/V0MYIUFB8GjpKpeb3kWQsp6Tx60EuJG5AQrqTsV1FkYoYi', 'Paris'),
(6, 'Sanz', 'Mathilde', '1990-01-01', 'mathilde.test@test.fr', '$2y$10$8U1CV75AjBZaTPMYnDhvNeUp99Cs/PN93n3usIz.d47R8vPCw7xsG', 'Paris'),
(7, 'Cassadet', 'Olivier', '1974-14-06', 'olivier.test@test.fr', '$2y$10$ic7FKv6UAnH0MeI.vRA1K.ahHU/.BthNq2To5EolSEfV85eeBaBHC', 'Paris'),
(8, 'Douet', 'Lyna', '1982-07-11', 'lyna.test@test.fr', '$2y$10$3YLSKGYM8asvCko7LwxywuBY.vSzOH9tHCZZHXKIfh8C3hxf4/1hm', 'Paris'),
(9, 'Basset', 'Marc', '1978-23-02', 'marc.test2@test.fr', '$2y$10$iic6H79urN7qv1JDf5VaauCg3De8TxkyFmhQ/h0338CsWCdJ2plv2', 'Paris'),
(10, 'Landres', 'Alex', '1990-01-01', 'alex.test@test.fr', '$2y$10$v3QIjRkAK45mD/nAhHAVrOcfZws2zUShoiUlpOwpSyP1tZRPcYs9G', 'Paris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
