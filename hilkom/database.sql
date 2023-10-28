-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 28 Eki 2023, 18:33:07
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `otomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `firmaAdi` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `yetkili` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `dahili` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `cep` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `web` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `arama` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `detay` varchar(300) COLLATE utf32_turkish_ci NOT NULL,
  `duzenleyen` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `sonuc` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `adres` varchar(5000) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `data`
--

INSERT INTO `data` (`id`, `firmaAdi`, `yetkili`, `dahili`, `cep`, `web`, `arama`, `detay`, `duzenleyen`, `sonuc`, `tarih`, `adres`) VALUES
(9, 'pi soft a.ş', 'uysal bey', '03125698745', '05316547896', 'www.uysal.com', 'evet', 'mail bıraktı', 'meltem', 'Teslim Edildi', '2022-10-15', 'Çankaya/Ankara'),
(10, 'uk inşaat', 'ali veli', '03125698745', '05316547896', 'www.burdayız.com', 'evet', 'mail bıraktı', 'meltem', 'Olumsuz', '2022-10-14', 'Ankara'),
(11, 'fasel bilya', 'fatih', '03124569874', '05316547896', 'www.burdayız.com', 'arandı', 'mail bıraktı', 'hilal', 'Randevu Alındı', '2022-10-15', 'Ostim -Yenimahalle/Ankara'),
(13, 'deneme ', 'ali veli', '03125698745', '05316547896', 'www.deneme.com', 'evet', 'mail bıraktı', 'meltem', 'Satış Yapıldı', '2022-11-07', 'Çankaya/Ankara'),
(14, 'aft oto ', 'yahya kaplan', '0312', '05316547896', 'www.burdayız.com', 'evet', 'mail bıraktı', 'ugur', 'Teslim Edildi', '2022-11-03', 'Çankaya/Ankara');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `soyad` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `kullaniciAdi` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `statu` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `kullaniciAdi`, `sifre`, `statu`, `email`, `telefon`, `adres`, `durum`) VALUES
(1, 'hilal', 'acar', 'hilal', '1234', 'yonetici', 'hilal@hilkomyazilim.com', '05375335490', 'ankara', 1),
(2, 'uğur', 'sağtekin', 'ugur', '1234', 'yonetici', 'ugur@hilkomyazilim.com', '05055317263', 'ankara', 1),
(3, 'meltem', 'terzi', 'meltem', '123', 'personel', 'meltem@hilkomyazilim.com', '05308189206', 'ankara', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
