-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql206.epizy.com
-- Üretim Zamanı: 05 Oca 2022, 08:00:26
-- Sunucu sürümü: 5.7.35-38
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_30714572_id18182886_makuevent`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `kadi`, `sifre`, `ad`) VALUES
(1, 'admin', 'makuevent', 'Mehmet Vural');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contactmesaj`
--

CREATE TABLE `contactmesaj` (
  `id` int(255) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contactmesaj`
--

INSERT INTO `contactmesaj` (`id`, `ad`, `email`, `konu`, `mesaj`, `durum`) VALUES
(1, 'Eray Özgün', 'erayozgun35@gmail.com', 'Teşekkür', 'Bu Platformu kuran yöneticilere teşekkürler. ', 1),
(2, 'Kemal', 'kemalakarsu@gmail.com', 'Etkinlik hakkinda', 'Yakın zamanda bir Davraz etkinliğimiz var acaba etkinliğimizi öne çıkaranlara ekleyebilir misiniz?', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `id` int(255) NOT NULL,
  `ad` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `saat` time NOT NULL,
  `adres` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_id` int(255) NOT NULL,
  `aciklama` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `facebooklink` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `twitterlink` varchar(5000) COLLATE utf8_turkish_ci NOT NULL,
  `instagramlink` varchar(5000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`id`, `ad`, `tarih`, `saat`, `adres`, `il`, `ilce`, `kullanici_id`, `aciklama`, `kategori`, `foto`, `facebooklink`, `twitterlink`, `instagramlink`) VALUES
(1, 'Denem\'e123', '2022-01-19', '14:03:00', 'Hhgh\'fgg', 'burdur', 'çavdır', 1, 'spor', 'spor', 'img/etkinlik/Deneme123.jpeg', 'A', 'A', 'A'),
(2, 'deneme', '2022-01-19', '00:00:00', 'sadasdasşda', 'burdur', 'merkez', 2, 'asdsadasd', 'konser', 'img/etkinlik/Deneme123.jpeg', 'qa', 'a', 'a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(250) NOT NULL,
  `etkinlikad` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `saat` time DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `mekan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adres` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `etkinlikad`, `tarih`, `saat`, `aciklama`, `foto`, `mekan`, `adres`) VALUES
(3, 'Kadir Türkben İle Din Üzerine Sohbet', '2022-02-18', '08:00:00', 'Dini bütün yönlerinden öğrenmek isteyen tüm kişiler davetlidir.  ', 'img/etkinlikhaberleri/Kadir Türkben İle Dini Sohbetler.jpeg', 'MAKÜ Konferans Salonu', 'Bahçelievler, İbn-i Sina Cd., 15100 Burdur Merkez/Burdur\r\n'),
(4, 'Scuba Diving Turu', '2022-03-07', '08:00:00', 'Kaş\'ta mavinin her tonunu barındıran denizinde dalış yaparak deniz altının muhteşem güzelliklerini görmeye ne dersiniz?', 'img/etkinlikhaberleri/Scuba Diving Turu.jpeg', 'SubAQUA Dalış Merkezi', 'Kaş Yat Limanı, SubAQUA Teknesi, 07580 Kaş/Antalya\r\n'),
(7, 'Kadir Türkben Ile Talk Show', '2022-01-14', '22:00:00', '15. turnesini Burdur Mehmet Akif Ersoy Üniversitesi\'nde gerçekleştiren ünlü komedyen Kadir Türkben ile kahkaha tufanına hazır mısınız?', 'img/etkinlikhaberleri/Kadir Türkben Ile Talk Show.jpeg', 'MAKÜ Konferans Salonu', 'Bahçelievler, İbn-i Sina Cd., 15100 Burdur Merkez/Burdur'),
(9, 'Şiir Dinletisi', '2022-03-07', '20:00:00', 'awdsad', 'img/etkinlikhaberleri/iir Dinletisi.jpeg', 'MAKÜ Konferans Salonu', 'Bahçelievler, İbn-i Sina Cd., 15100 Burdur Merkez/Burdur');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `hakkimizda` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `misyon` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `vizyon` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `hakkimizda`, `misyon`, `vizyon`) VALUES
(1, 'Sitemiz, 2021 yılının sonlarına doğru sunucu tabanlı programlama dersi proje ödevi için kurulmuştur.6 kişilik bilgisayar mühendisliği son sınıf öğrencileri tarafından hazırlanmıştır. Etkinlik paylaşım sitemizin amacı adından da anlaşılacağı üzere makü öğrencilerinin sportif ve sanatsal etkinliklerini paylaşabilecekleri ve etkinlik için eksik kişiyi bulabilecekleri bir websitesidir.', 'Maküevent etkinlik sayfasını kullanan makülüler, kültür, sanat, spor ve topluluk etkinliklerine memnuniyetini ve gereksinimini temel alarak, sürekli gelişme ve sosyalleşmenin esas alındığı, etkin ve gelişmiş öğrenci topluluğu ile bilgi ve teknolojinin kullanıldığı, kaliteli hizmet sunmak.', 'Sosyal ve kültürel etkileşimin artmasını sağlayarak sosyalleşmenin esas alındığı bir üniversite ortamı yaratmak.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `homeyorum`
--

CREATE TABLE `homeyorum` (
  `id` int(255) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `homeyorum`
--

INSERT INTO `homeyorum` (`id`, `ad`, `yorum`) VALUES
(1, 'Fikret Gezer ', 'Maku event çok güzel bir platform. Herkese bu platformu kullanmasını öneririm.'),
(2, 'Kemal Akarsu', 'Uygulama sayesinde etkinlik ve topluluklarımıza yeni üyeler kazandırdık teşekkürler..'),
(3, 'Eray Özgün ', 'Maku event platformu sayesinde halı sahaya adam toplamak da sıkıntı çekmiyoruz. Emeği geçenlere sonsuz teşekkürler... '),
(4, 'Kadir Türkben', 'Bu platform ile birçok etkinliğe katılma fırsatı buldum. Çok eğlenceli vakitler geçirdim. Teşekkürlerrrr...');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce`
--

CREATE TABLE `ilce` (
  `id` int(255) NOT NULL,
  `ilce` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `il_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilce`
--

INSERT INTO `ilce` (`id`, `ilce`, `il_id`) VALUES
(1, 'Merkez', 15),
(2, 'Ağlasun', 15),
(3, 'Altınyayla', 15),
(4, 'Bucak', 15),
(5, 'Çavdır', 15),
(6, 'Çeltikçi', 15),
(7, 'Gölhisar', 15),
(8, 'Karamanlı', 15),
(9, 'Kemer', 15),
(10, 'Tefenni', 15),
(11, 'Yeşilova', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE `iller` (
  `id` int(255) NOT NULL,
  `il` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`id`, `il`) VALUES
(15, 'Burdur');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(255) NOT NULL,
  `ad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `okul` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `ad`, `email`, `sifre`, `okul`, `telefon`, `foto`) VALUES
(1, 'Mehmet Vural', 'mehmetvurl07@gmail.com', 'admin', '1811404038', '05368580691', 'img/kullanicilar/Admin 1811404006.jpeg'),
(2, 'Admin', 'admin@gmail.com', 'admin', '1111111111', '11111111111', 'img/kullanicilar/Admin 1111111111.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayarlar`
--

CREATE TABLE `site_ayarlar` (
  `logo` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `author` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `footeraciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `copyright` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `facebooklink` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `twitterlink` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `instagramlink` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_ayarlar`
--

INSERT INTO `site_ayarlar` (`logo`, `title`, `keywords`, `author`, `telefon`, `adres`, `mail`, `footeraciklama`, `copyright`, `id`, `facebooklink`, `twitterlink`, `instagramlink`, `url`) VALUES
('img/header/logo.png', 'MakuEvent | Etkinliğin Sosyal Hali', 'Maku                                                                                                                                ', 'MakuEvents', '+90 (537) 349 42 99', 'İstiklal Mah. Mehmet Akif Ersoy Üniversitesi Merkez/Burdur', 'makuevent@gmail.com', 'MakuEvent | Etkinliğin Sosyal Hali', '© 2021 MakuEvents | ', 1, 'https://www.facebook.com/makuevent/', 'https://twitter.com/makuevent/', 'https://www.instagram.com/makuevent/', 'https://www.makuevent.ml/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `fotolink` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `fotolink`, `aciklama`) VALUES
(1, 'img/slider/1.jpg', 'Etkinlik 1'),
(2, 'img/slider/2.jpg', 'Etkinlik 2'),
(3, 'img/slider/3.jpg', 'Etkinlik 3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarihce`
--

CREATE TABLE `tarihce` (
  `id` int(255) NOT NULL,
  `yıl` int(255) NOT NULL,
  `aciklama` varchar(5000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tarihce`
--

INSERT INTO `tarihce` (`id`, `yıl`, `aciklama`) VALUES
(1, 2020, 'Şirketimiz kuruldu.'),
(2, 2021, 'MakuEvent\'in ilk temelleri atıldı.'),
(3, 2022, 'MakuEvent kullanıma sunuldu.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `id` int(255) NOT NULL,
  `ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `etkinlikid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contactmesaj`
--
ALTER TABLE `contactmesaj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `homeyorum`
--
ALTER TABLE `homeyorum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ilce`
--
ALTER TABLE `ilce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `il_id` (`il_id`);

--
-- Tablo için indeksler `iller`
--
ALTER TABLE `iller`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `site_ayarlar`
--
ALTER TABLE `site_ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tarihce`
--
ALTER TABLE `tarihce`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contactmesaj`
--
ALTER TABLE `contactmesaj`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `homeyorum`
--
ALTER TABLE `homeyorum`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ilce`
--
ALTER TABLE `ilce`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `site_ayarlar`
--
ALTER TABLE `site_ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `tarihce`
--
ALTER TABLE `tarihce`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
