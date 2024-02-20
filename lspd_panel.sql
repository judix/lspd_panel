-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 20 Şub 2024, 06:44:45
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `lspd_panel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lspd_personel`
--

CREATE TABLE `lspd_personel` (
  `id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `ic_name` varchar(50) NOT NULL,
  `occ_name` varchar(50) NOT NULL,
  `shift_hour` int(11) NOT NULL DEFAULT 0,
  `discord_id` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `lspd_personel`
--

INSERT INTO `lspd_personel` (`id`, `code`, `rank`, `ic_name`, `occ_name`, `shift_hour`, `discord_id`, `status`) VALUES
(1, '800', 'Officer 2', 'Jackson Drake', 'Samet', 0, '338952273998774283', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `lspd_personel`
--
ALTER TABLE `lspd_personel`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `lspd_personel`
--
ALTER TABLE `lspd_personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
