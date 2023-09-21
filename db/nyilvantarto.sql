-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Sze 21. 08:25
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `nyilvantarto`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`) VALUES
(1, 'Példa Gyár Kft.', '1119 Budapest Fő utca 12'),
(2, 'Szolgáltató Zrt.', '1245 Pécs Domb köz 23'),
(3, 'Globális Szolgáltatások Kft.', '1789 Szeged Tölgy sor 10');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `personal_email` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `business_email` varchar(255) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `company_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `personal_email`, `business_email`, `company_id`) VALUES
(1, 'Kovács János ', '06 30 123-4567', '1234 Isaszeg Első út 12', 'kovacs.janos@gmail.com', 'janos@peldamanufaktura.hu', 1),
(2, 'Nagy Katalin ', '06 20 987-6543', '1245 Pécs Második út', 'nagy.katalin@gmail.com', 'katalin@szolgaltatozrt.hu', 2),
(3, 'Tóth Gábor ', '06 70 789-0123', '1789 Szeged Harmadik út', 'toth.gabor@gmail.com', 'gabor@globalszolgaltatasok.hu', 3);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
