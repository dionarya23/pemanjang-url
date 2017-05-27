# Pemanjang-URL
Terisnpirasi dari banyak nya URL Shortener, disini saya membuat yang sedikit yang berbeda yaitu URL Longer,
 jika biasa nya suatu url di pendekan misalnya http://facebook.com/blablabla.1234 akan di pendekan menjadi http://domain.com/jakh2 tapi disni akan dipanjangkan http://google.com nanti akan menjadi http://domain.com/jndajndjadjbdhahsbdhabdbahd2t6gyd

## Cara Memakai
Yang Pertama silahkan ganti terlebih dahulu base url nya yang terletak di ajax/input.php dan juga di core/init.php

### Database
Dan silahkan membuat sebuah Database berinama url-longer lalu silahkan pilih sql dan paste
```
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mei 2017 pada 17.24
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url-longer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `infourl`
--

CREATE TABLE `infourl` (
  `id` int(11) NOT NULL,
  `asli` varchar(255) NOT NULL,
  `palsu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `infourl`
--

INSERT INTO `infourl` (`id`, `asli`, `palsu`) VALUES
(8, 'http://google.com', 'http://localhost/url-longer/u-LBpMBpltaFCgIqatVPw4xJfIrPnBv2jqNzVqxeXHquqmm3rNyuXiArO'),
(9, 'http://fb.com/dion.aryapamungkas', 'http://localhost/url-longer/u-vMD9azFJl3mEl1q7Rp6d01Z5hTv7TlDyJl3MWzUX1OBB4TBXWA7Jmx2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infourl`
--
ALTER TABLE `infourl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infourl`
--
ALTER TABLE `infourl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```