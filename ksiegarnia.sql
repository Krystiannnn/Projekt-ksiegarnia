-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 04 Sty 2023, 10:10
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiegarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id`, `user`, `pass`, `email`, `adres`) VALUES
(1, 'adam', '$2y$10$7sE9.mvUTFA9IWmwKtVO3eT7kOjbzZ5t26Q1qHSnjiTo5DbZJZZ8.', 'adam@o2.pl', '26600 radom'),
(3, 'maniek', '$2y$10$im.Jh2GHjh8KCtCG4XS7negoQ2LMCKAjK3nM03UcaJBMWbQjIRO/u', 'maniek@o2.pl', 'adres');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klientProdukt`
--

CREATE TABLE `klientProdukt` (
  `id` int(11) NOT NULL,
  `klientid` int(11) NOT NULL,
  `produktid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klientProdukt`
--

INSERT INTO `klientProdukt` (`id`, `klientid`, `produktid`) VALUES
(12, 1, 1),
(13, 1, 4),
(14, 1, 2),
(15, 1, 1),
(16, 1, 1),
(17, 1, 1),
(18, 1, 2),
(19, 1, 5),
(20, 1, 3),
(21, 3, 2),
(22, 3, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id`, `name`, `price`) VALUES
(1, 'Harry Potter', 50),
(2, 'Władca Pierścieni', 80),
(3, 'Paranormal Activity', 40),
(4, 'Wiedzmin', 70),
(5, 'Zakochane w psychopatach', 60),
(6, 'Przyjemność', 50);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klientProdukt`
--
ALTER TABLE `klientProdukt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klientid` (`klientid`),
  ADD KEY `produktid` (`produktid`);

--
-- Indeksy dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `klientProdukt`
--
ALTER TABLE `klientProdukt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
