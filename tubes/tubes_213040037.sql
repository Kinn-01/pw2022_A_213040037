-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2022 pada 13.25
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040037`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jerseay`
--

CREATE TABLE `jerseay` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `tshirt` varchar(255) NOT NULL,
  `tahun` varchar(15) NOT NULL,
  `size` varchar(5) NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jerseay`
--

INSERT INTO `jerseay` (`id`, `gambar`, `price`, `tshirt`, `tahun`, `size`, `stok`) VALUES
(11, '6294d7d952565.jpg', 'Rp.250.000 ', 'Chelsea Home Shirt ', '2020 ', 'M ', 'Sold Out'),
(12, '62948aefe3c9d.png', 'Rp.150.000', 'Chelsea Home Shirt', '2020', 'S', '44'),
(13, '62973eeb7ca14.webp', 'Rp.180.000  ', 'Chelsea Home Shirt  ', '2020  ', 'L  ', 'Sold Out '),
(17, '62973edb4b718.jfif', 'Rp.145.000 ', 'Chelsea Home Shirt ', '2022 ', 'XXL ', '20 '),
(19, '62974870c97ca.png', 'Rp.250.000', 'Chelsea Away Shirt ', '2020', 'S', '220');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar`
--

CREATE TABLE `keluar` (
  `id_keluar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id_masuk` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `keterangan` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$ZzIIUpwmMHqPyg2.nfrOGOFmgtp3A9UhhDYEPbO48vY9MuvtMVa6G'),
(2, 'gilman', '$2y$10$pvW/7yxnk/TXjcr.7t9SBOpgwPeBFgqVxrBpS4g5vcKKDpbLpteFu'),
(3, 'arif', '$2y$10$B6fX3h9kWjbZylpZ3e8HG.pMO4mZgwxvFDGD8Z64hN6d4UY.iuYYO'),
(4, 'firman', '$2y$10$1XVQAwrzjrEGla0ivnnK9eAsgcERtW/aX3mCz9buKpfwJIsKqDWXy'),
(5, 'chelsea', '$2y$10$ICJfzM8/sSqR6RgmEjGC3.wZfiLHm9scu6G27DDZFynm6pyScMgTm'),
(6, 'nomi', '$2y$10$jwVuzFCMcNfyQX4XT1at2uDRCLaDn4M2RALgeNWYEyYRnnwotwBKC'),
(7, 'upin', '$2y$10$4iyWdYvTtWG2QbZYnrBSPOAKlABYSWM/Kc7MIgvx35jQvsWjPF1fa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jerseay`
--
ALTER TABLE `jerseay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jerseay`
--
ALTER TABLE `jerseay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
