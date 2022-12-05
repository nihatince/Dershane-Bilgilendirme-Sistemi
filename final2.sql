-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Oca 2022, 04:56:39
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `final2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayitol`
--

CREATE TABLE `kayitol` (
  `id` int(11) NOT NULL,
  `tc` varchar(11) NOT NULL,
  `kulad` varchar(14) NOT NULL,
  `sifre` int(14) NOT NULL,
  `ad` varchar(25) NOT NULL,
  `soyad` varchar(25) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dogtarih` date NOT NULL,
  `sinif` varchar(20) NOT NULL,
  `alan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kayitol`
--

INSERT INTO `kayitol` (`id`, `tc`, `kulad`, `sifre`, `ad`, `soyad`, `telefon`, `email`, `dogtarih`, `sinif`, `alan`) VALUES
(22, '28106565384', 'nihat1524', 123456, 'Nihat', 'İnce', '05418304512', 'nht.78@gmail.com', '2022-01-26', '12.Sınıf', 'TYT-AYT'),
(24, '12345678912', 'nihat1524', 123456, 'Nihat', 'İnce', '05418304512', 'nht.78@gmail.com', '2022-01-26', '9.Sınıf', 'TYT-AYT'),
(25, '54564487884', 'nihat2704', 123456, 'sdsaad', 'asdasds', '05448304785', 'can-321@gmail.com', '2022-01-30', 'Mezun', 'DGS'),
(26, '12345678912', 'nihat1524', 123456, 'Nihat', 'İnce', '02126185265', 'nht.2704@gmail.com', '2022-01-19', '10.Sınıf', 'TYT-AYT');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL,
  `tc` varchar(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `alan` varchar(50) NOT NULL,
  `sinif` varchar(50) NOT NULL,
  `turkce` int(11) NOT NULL,
  `sosyal` int(11) NOT NULL,
  `matematik` int(11) NOT NULL,
  `fen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`id`, `tc`, `ad`, `soyad`, `alan`, `sinif`, `turkce`, `sosyal`, `matematik`, `fen`) VALUES
(13, '', 'Nihat', 'İnce', 'TYT-AYT', 'Mezun', 30, 12, 25, 15),
(15, '', 'Nihatt', 'İnce', 'TYT-AYT', '8.Sınıf', 15, 12, 15, 25),
(17, '54564487884', 'Nihat', 'İnce', 'LGS', '12.Sınıf', 35, 12, 32, 12);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmen`
--

CREATE TABLE `ogretmen` (
  `id` int(11) NOT NULL,
  `kulad` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ogretmen`
--

INSERT INTO `ogretmen` (`id`, `kulad`, `sifre`) VALUES
(1, 'nihat2704', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayitol`
--
ALTER TABLE `kayitol`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ogretmen`
--
ALTER TABLE `ogretmen`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayitol`
--
ALTER TABLE `kayitol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `ogretmen`
--
ALTER TABLE `ogretmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
