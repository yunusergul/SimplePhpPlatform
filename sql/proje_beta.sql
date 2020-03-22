-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 May 2018, 01:53:31
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje_beta`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `banner_name` text NOT NULL,
  `banner_show` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`id`, `page_id`, `address`, `banner_name`, `banner_show`) VALUES
(1, 1, 'banner1.jpg', '1.resim', 1),
(3, 1, 'banner3.jpg', '3.resim', 1),
(4, 1, 'banner2.jpg', '2.resim', 1),
(5, 1, '92811525111274.jpg', '92811525111274', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_mail` text NOT NULL,
  `user_subject` text NOT NULL,
  `user_content` text NOT NULL,
  `log_con` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `user_name`, `user_mail`, `user_subject`, `user_content`, `log_con`, `date`) VALUES
(2, 'yunus ergül', 'yunus.ergul@ogr.dpu.edu.tr', 'gönderme kontrolü', '$deneölk dkjnf foınofık ofı foınf foınf foınfoınf ofınf', 0, '2018-04-27 11:44:59'),
(3, 'pakize ergül', 'yunus.ergul@ogr.dpu.edu.tr', 'den pomf dpo', '$s<hdztfyk rghtjyk agsfhdg', 0, '2018-04-27 11:46:39'),
(4, 'yunus ergül', 'deneme@deneme.com', 'yunus', 'denmee 22223333', 0, '2018-04-29 19:48:06'),
(5, 'yunus ergül', 'deneme@deneme.com', 'yunus', 'denmee 22223333', 0, '2018-04-29 19:48:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_scr` text NOT NULL,
  `page_id` int(11) NOT NULL,
  `pic_name` text NOT NULL,
  `on_co` tinyint(1) NOT NULL,
  `side_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_scr`, `page_id`, `pic_name`, `on_co`, `side_id`) VALUES
(2, 'img_forest.jpg', 2, 'faa', 0, 0),
(7, 'img_lights.jpg', 1, 'leef', 1, 1),
(8, 'img_forest.jpg', 2, 'kaa', 0, 0),
(28, '54491525091340.jpg', 2, '54491525091340', 0, 0),
(29, '55671525247724.jpg', 2, '55671525247724', 1, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `home_page_con` tinyint(1) NOT NULL,
  `page_name` text NOT NULL,
  `page_description` text NOT NULL,
  `page_content` text,
  `sid_menu_con` int(11) NOT NULL,
  `sid_menu_name` text NOT NULL,
  `gallery_co` tinyint(1) NOT NULL,
  `page_show` tinyint(1) NOT NULL,
  `type` int(11) NOT NULL,
  `banner_show` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `page`
--

INSERT INTO `page` (`id`, `home_page_con`, `page_name`, `page_description`, `page_content`, `sid_menu_con`, `sid_menu_name`, `gallery_co`, `page_show`, `type`, `banner_show`, `date`) VALUES
(1, 0, 'Anasayfa', 'Deneme için', 'Sitenin amacı 100 almaktır.  bana 100 verin<br />\r\n            augue scelerisque lorem, ut elementum augue elit non </h2>\r\n          <p>Vestibulum purus metus, luctus euismod mattis nec, tristique vitae ipsum. Phasellus dapibus, nisi ut interdum fermentum, turpis tellus semper massa, sit amet placerat sapien justo non ipsum. Vestibulum enim erat, mattis vel aliquet quis, mollis sit amet ligula. Mauris lobortis blandit aliquam. Curabitur quam risus, condimentum vel eleifend et, tincidunt vitae lacu et urna eu eros euismod te.</p>\r\n          <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>', 1, 'denemem', 0, 1, 1, 1, '2016-06-10 00:00:00'),
(2, 1, 'Hakkımızda', 'Hakımda bilgileri', 'Ben yunus ergül 201642501056', 1, 'İnsanlar', 1, 1, 1, 0, '2016-06-10 00:00:00'),
(4, 0, 'İletişim', 'Mesaj Gönder', '    <form method=\"post\">\r\n      <div class=\"contact-form\">\r\n        <label> <span>Adınız</span>\r\n        <input type=\"text\" class=\"input_text\" name=\"name\" id=\"name\"/>\r\n        </label>\r\n        <label> <span>Email</span>\r\n        <input type=\"text\" class=\"input_text\" name=\"email\" id=\"email\"/>\r\n        </label>\r\n        <label> <span>Konu</span>\r\n        <input type=\"text\" class=\"input_text\" name=\"subject\" id=\"subject\"/>\r\n        </label>\r\n        <label> <span>Mesaj</span>\r\n        <textarea class=\"message\" name=\"feedback\" id=\"feedback\"></textarea>\r\n        <input type=\"submit\" class=\"button\" value=\"Gönder\" />\r\n        </label>\r\n      </div>\r\n    </form>', 1, 'İletişim şeyleri', 0, 1, 1, 1, '2016-06-10 00:00:00'),
(8, 0, 'deneme', 'deneme', 'lfknfjkn', 1, 'denem', 1, 1, 0, 1, '2018-05-02 10:09:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `side_menu`
--

CREATE TABLE `side_menu` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `side_name` text NOT NULL,
  `side_content` text,
  `side_show` tinyint(1) NOT NULL,
  `gallery_co` tinyint(1) NOT NULL,
  `side_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `side_menu`
--

INSERT INTO `side_menu` (`id`, `page_id`, `side_name`, `side_content`, `side_show`, `gallery_co`, `side_date`) VALUES
(1, 1, 'Haydem', 'Şimdiki hayde deneme', 1, 1, '2016-10-10 10:10:10'),
(3, 2, 'ElonMusk', 'Elon Reeve Musk is a South African-born American business magnate, investor, and engineer. He is the founder, CEO, and lead designer of SpaceX; co-founder, CEO, and product architect of Tesla, Inc.; and co-founder and CEO of Neuralink.', 1, 1, '2018-04-30 19:02:38'),
(4, 1, 'ew', 'ew', 1, 1, '2018-04-30 19:05:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_psw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user_log`
--

INSERT INTO `user_log` (`id`, `user_name`, `user_psw`) VALUES
(1, 'admin', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `side_menu`
--
ALTER TABLE `side_menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `side_menu`
--
ALTER TABLE `side_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
