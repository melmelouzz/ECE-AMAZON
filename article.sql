-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 30, 2019 at 12:49 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eceamazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prix` int(11) NOT NULL,
  `Taille` int(11) NOT NULL,
  `Couleur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `Photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
