-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2021, 14:30:45
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projeler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kullaniciAdi` varchar(50) NOT NULL,
  `parola` varchar(20) NOT NULL,
  `adres` varchar(150) NOT NULL,
  `sehir` varchar(50) NOT NULL,
  `ilce` varchar(50) NOT NULL,
  `mahalle` varchar(100) NOT NULL,
  `kartNumarasi` varchar(20) NOT NULL,
  `kartIsim` varchar(50) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `gsm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `isim`, `email`, `kullaniciAdi`, `parola`, `adres`, `sehir`, `ilce`, `mahalle`, `kartNumarasi`, `kartIsim`, `cvv`, `gsm`) VALUES
(1, 'İsim', 'email', 'Kullanıcı Adıu', 'Paraola', 'Adres', 'Şehir', 'İlçe', 'Mahalle', 'Kart No', 'Kart isim', 'cvv', 'gsm'),
(2, 'İsim', 'email', 'Kullanıcı Adıu', 'Paraola', 'Adres', 'Şehir', 'İlçe', 'Mahalle', 'Kart No', 'Kart isim', 'cvv', 'gsm'),
(3, 'İsim', 'email', 'Kullanıcı Adıu', 'Paraola', 'Adres', 'Şehir', 'İlçe', 'Mahalle', 'Kart No', 'Kart isim', 'cvv', 'gsm');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `complatedAt` tinyint(4) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `todos`
--

INSERT INTO `todos` (`id`, `description`, `complatedAt`, `isActive`, `createdAt`) VALUES
(1, 'Cuma günü derslerin genel tekrarı yapılacak.', 1, 1, '2021-12-13 12:26:22'),
(2, 'Sınava Çalış', 1, 1, '2021-11-22 14:58:05'),
(6, 'Yeni Eklenen Görev-2', 0, 0, '2021-12-13 14:44:25'),
(7, 'Yeni Eklenen Görev-3', 0, 0, '2021-12-13 14:44:25');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
