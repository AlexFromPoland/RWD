-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 12:57 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_website`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `avatar`, `created_at`) VALUES
(1, 'user1', '$2y$10$xDAOcO71fVQW6Sao1VbNPuHnjbB.8JSpkVFsewkBT5v15ubXhGVIO', './storage/user1_8be05ab318857cc5655de6b98ae92e01.jpg', '2025-03-10 12:12:51'),
(2, 'user2', '$2y$10$rET0Bt7FVW2Q8tYqpyf7N.K0Itvsz7cQnUjrc0jqyJKavKSSt/27K', 'https://api.dicebear.com/9.x/identicon/svg?seed=user2', '2025-03-10 12:15:29'),
(3, 'user3', '$2y$10$OKkln9KA/66GuaF1j4/SkuDyoiy9q4V0x61Dm4kpNp9GbMsBdr.a6', './storage/user3_summer-landscape-with-river.jpg', '2025-03-10 12:17:36'),
(12, 'user4', '$2y$10$Gnoue/tf5bspu5uu/uybvu2FSyDZAcSjYJl95O3w1ycs5lybjlT7S', './storage/user4_avatar.svg', '2025-03-11 11:56:45');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
