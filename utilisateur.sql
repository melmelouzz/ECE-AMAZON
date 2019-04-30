-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 30, 2019 at 11:43 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eceamazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `acheteur`
--

CREATE TABLE `acheteur` (
  `Adresse1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresse2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CP` int(11) NOT NULL,
  `Pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel` int(11) NOT NULL,
  `Typecarte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Numcarte` int(11) NOT NULL,
  `Nomcarte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Datecarte` date NOT NULL,
  `Codesecu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acheteur`
--
ALTER TABLE `acheteur`
  ADD PRIMARY KEY (`Tel`);
