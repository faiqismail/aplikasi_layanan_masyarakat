-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2023 pada 08.56
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admindesa`
--

CREATE TABLE `admindesa` (
  `id_admindesa` int(11) NOT NULL,
  `nama_admindesa` varchar(255) DEFAULT NULL,
  `email_admindesa` varchar(255) DEFAULT NULL,
  `passwords_admindesa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admindesa`
--

INSERT INTO `admindesa` (`id_admindesa`, `nama_admindesa`, `email_admindesa`, `passwords_admindesa`) VALUES
(1, 'kades', 'kades@gmail.com', 'kades');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_masyarakat` int(11) DEFAULT NULL,
  `jam_keluhan` time DEFAULT NULL,
  `tgl_keluhan` date DEFAULT NULL,
  `foto_keluhan` varchar(255) DEFAULT NULL,
  `lokasi_keluhan` varchar(255) DEFAULT NULL,
  `kategori_keluhan` varchar(255) DEFAULT NULL,
  `ket_keluhan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `id_masyarakat`, `jam_keluhan`, `tgl_keluhan`, `foto_keluhan`, `lokasi_keluhan`, `kategori_keluhan`, `ket_keluhan`) VALUES
(8, 7, '18:59:07', '2023-05-24', 'foto1.jpeg', 'jl. manyar depan mie sedaap', 'jalan', 'sudah banyak menimbullkan korban '),
(9, 8, '19:07:14', '2023-05-24', 'foto sungai mampet.jpeg', 'sumenep', 'sungai', 'sungai di sini mampet tepatnya di pandian'),
(12, 9, '16:56:09', '2023-05-31', 'bajir.jpeg', 'desa gumeno', 'banjir', 'banjir sudah melebihi 1 meter'),
(13, 11, '13:34:49', '2023-07-28', 'foto1.jpeg', 'jl.karang batur', 'jalan ', ' tepatnya di depan toko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_pengeluaran` int(11) NOT NULL,
  `tgl_pengeluaran` date DEFAULT NULL,
  `ket_pengeluaran` varchar(255) DEFAULT NULL,
  `pemasukan` varchar(255) DEFAULT NULL,
  `pengeluaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_pengeluaran`, `tgl_pengeluaran`, `ket_pengeluaran`, `pemasukan`, `pengeluaran`) VALUES
(7, '2023-05-24', 'Dana dari pusat pemerintah', '100000', '0'),
(9, '2023-05-31', 'pengeluaran banjir desa gumeno', '0', '50000'),
(10, '2023-07-28', 'perbakan jalan ', '0', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `nama_masyarakat` varchar(255) DEFAULT NULL,
  `alamat_masyarakat` varchar(255) DEFAULT NULL,
  `telepon_masyarakat` varchar(20) DEFAULT NULL,
  `email_masyarakat` varchar(255) DEFAULT NULL,
  `passwords_masyarakat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id_masyarakat`, `nama_masyarakat`, `alamat_masyarakat`, `telepon_masyarakat`, `email_masyarakat`, `passwords_masyarakat`) VALUES
(7, 'AKHMAD FAIQ ISMAIL', 'jl.karang batur rt 01 rw 01 desa gumeno .manyar .gresik', '085155476677', 'm69@gmail.com', 'mail'),
(8, 'siti aliyansah', 'jl.btn no 45', '08111111111', 'siti@gmail.com', 'siti'),
(9, 'sumanto', 'jl. karang asep desa gumeno.gresik', '0823684648576', 'sumanto@gmail.com', 'sumanto'),
(10, 'mbak supir', 'jl.kemana', '082324354556546', 'mbak@gmail.com', 'mbak'),
(11, 'pak supir', 'gumeno', '0838467567456', 'paksupir@gmail.com', 'paksupir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_masyarakat` int(11) DEFAULT NULL,
  `id_keluhan` int(11) DEFAULT NULL,
  `tgl_proses` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_masyarakat`, `id_keluhan`, `tgl_proses`, `status`) VALUES
(39, 8, 9, '2023-05-24', 'segara kami kerjakan '),
(50, 7, 8, '2023-05-25', 'otw'),
(51, 9, 12, '2023-05-31', 'sudah teratasi '),
(52, 11, 13, '2023-07-28', 'selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admindesa`
--
ALTER TABLE `admindesa`
  ADD PRIMARY KEY (`id_admindesa`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `id_masyarakat` (`id_masyarakat`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_masyarakat` (`id_masyarakat`),
  ADD KEY `id_keluhan` (`id_keluhan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admindesa`
--
ALTER TABLE `admindesa`
  MODIFY `id_admindesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_masyarakat`) REFERENCES `masyarakat` (`id_masyarakat`);

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_masyarakat`) REFERENCES `masyarakat` (`id_masyarakat`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_keluhan`) REFERENCES `keluhan` (`id_keluhan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
