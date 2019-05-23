-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2019 pada 21.00
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pln`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_file` varchar(255) DEFAULT NULL,
  `date_upload` varchar(20) NOT NULL,
  `user_upload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `document`
--

INSERT INTO `document` (`id`, `doc_name`, `doc_file`, `date_upload`, `user_upload`) VALUES
(11, 'IMG_20190506_231625.jpg', 'IMG_20190506_231625.jpg', '2019-05-12', 1),
(12, 'Dokument 1', 'export (3).csv', '2019-05-12', 1),
(13, 'Form Ijin Setengah Hari. Dig.xlsx', 'Form Ijin Setengah Hari. Dig.xlsx', '2019-05-12', 1),
(14, 'Dokument 1', 'export (3).csv', '2019-05-12', 1),
(15, 'Dokument 1', 'Form Ijin Setengah Hari. Dig.xlsx', '2019-05-12', 1),
(18, 'test', 'export (3).csv', '2019-05-12', 19),
(20, 'file.html', 'file.html', '2019-05-12', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `priority` varchar(15) NOT NULL,
  `date_start` varchar(20) NOT NULL,
  `date_end` varchar(20) NOT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `description` text,
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `event_name`, `priority`, `date_start`, `date_end`, `id_unit`, `location`, `description`, `create_by`) VALUES
(18, 'eqwe', 'bg-danger', '2019-05-10', '2019-05-10', 5, 'Aula1', 'ewe', 19),
(19, 'asdasd', 'bg-warning', '2019-05-17', '2019-05-17', 5, 'Gardu Induk', 'ttt', 19),
(21, 'arief', 'bg-success', '2019-05-18', '2019-05-20', NULL, 'ruang rapt ', 'csc', 1),
(22, 'Maintenance', 'bg-danger', '2019-05-08', '2019-05-10', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(23, 'Maintenance', 'bg-danger', '2019-05-08', '2019-05-10', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(24, 'Maintenance', 'bg-danger', '2019-05-08', '2019-05-10', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(25, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(26, 'Maintenance', 'bg-danger', '2019-05-29', '2019-05-31', 1, 'Gardu Induk', 'membawa alat maintenance', 21),
(27, 'Maintenance', 'bg-danger', '2019-05-31', '2019-06-01', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(28, 'Maintenance', 'bg-danger', '2019-05-17', '2019-05-30', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(29, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(30, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(31, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(32, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(33, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(34, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(35, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(36, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-24', 1, 'Gardu Induk', 'bawa alat komunikasi', 1),
(37, 'Maintenance', 'bg-danger', '2019-05-30', '2019-05-31', NULL, 'ruang rapt ', 'ttest', 1),
(38, 'Maintenance', 'bg-danger', '2019-05-10', '2019-05-10', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(39, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(40, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(41, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(42, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(43, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(44, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(45, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(46, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(47, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(48, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(49, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(50, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(51, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(52, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(53, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(54, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(55, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(56, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(57, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(58, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(59, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(60, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(61, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(62, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(63, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(64, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(65, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(66, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(67, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1),
(68, 'Maintenance', 'bg-danger', '2019-05-03', '2019-05-03', NULL, 'Gardu Induk1', 'bawa alat komunikasi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `kode_jabatan` char(2) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `kode_jabatan`, `nama_jabatan`) VALUES
(1, 'EX', 'Executive'),
(2, 'MG', 'Magang'),
(7, 'M', 'Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `no_sap` char(8) NOT NULL,
  `t_lahir` char(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jkelamin` char(1) NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status_kawin` varchar(11) NOT NULL,
  `jml_kel` int(2) DEFAULT NULL,
  `phone` varchar(13) NOT NULL,
  `alamat` text,
  `avatar` varchar(255) NOT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `id_atasan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `email`, `nama_p`, `no_sap`, `t_lahir`, `tgl_lahir`, `jkelamin`, `agama`, `status_kawin`, `jml_kel`, `phone`, `alamat`, `avatar`, `id_unit`, `id_jabatan`, `id_atasan`) VALUES
(1, '0000', '', 'Admin', '0000', 'Jakarta', '05/01/2019', 'L', 'islam', 'Belum Kawin', 1, '', 'jakarta', 'avatar2.jpg', NULL, NULL, NULL),
(2, '1111', '', 'HRD', '1111', '', '', '', NULL, '', NULL, '', NULL, '', NULL, NULL, 1),
(19, '2222', '', 'pegawai Enginer 1', '2222', 'mataram', '05/11/2019', 'L', 'islam', 'Belum Kawin', 1, '', 'jakarta', 'default.jpg', 5, 1, 1),
(20, '3333', '', 'pegawai Enginer 2', '3333', 'Jakarta', '05/15/2019', 'L', 'islam', 'Belum Kawin', 1, '', 'test', 'default.jpg', 5, 1, 19),
(21, '201531120', 'ariefcahya14@gmail.com', 'arief cahya', '1111', 'mataram', '05/23/2019', 'L', 'islam', 'Belum Kawin', 1, '08555', 'jlhj midi', 'default.jpg', 5, 1, 1),
(22, '201531121', 'arief@gositus.com', 'cahya', '1111', 'mataram', '05/27/2019', 'L', 'islam', 'Belum Kawin', 1, '85222', 'adasd', 'default.jpg', 1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `date_create` varchar(20) NOT NULL,
  `due_date` varchar(20) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_leader` int(11) NOT NULL,
  `create_by` int(11) NOT NULL,
  `description` text,
  `status` varchar(255) NOT NULL,
  `progress` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `task`
--

INSERT INTO `task` (`id`, `task_name`, `priority`, `date_create`, `due_date`, `id_unit`, `id_leader`, `create_by`, `description`, `status`, `progress`) VALUES
(21, 'maintenace', 'High', '2019-05-12', '2019-05-08', 5, 1, 1, 'test', 'Done', 29),
(22, 'task engginer', 'Low', '2019-05-12', '2019-05-16', 5, 19, 19, 'tesst', 'To Do', 26),
(23, 'test', 'High', '2019-05-23', '2019-05-30', 1, 1, 1, 'sdasdasd', 'To Do', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `task_comments`
--

CREATE TABLE `task_comments` (
  `id` int(11) NOT NULL,
  `id_task` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `description` text NOT NULL,
  `id_doc` int(11) DEFAULT NULL,
  `create_data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `task_comments`
--

INSERT INTO `task_comments` (`id`, `id_task`, `id_user`, `description`, `id_doc`, `create_data`) VALUES
(9, 21, 1, 'test', NULL, '2019-05-12 03:55:07'),
(10, 21, 1, 'test file', 13, '2019-05-12 03:55:31'),
(11, 21, 1, 'est', NULL, '2019-05-12 04:04:53'),
(13, 21, 19, 'wew', NULL, '2019-05-12 04:39:28'),
(14, 22, 19, 'test', NULL, '2019-05-12 10:56:07'),
(15, 22, 19, 'e test', NULL, '2019-05-12 10:56:32'),
(16, 22, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\r\n                        ', NULL, '2019-05-14 12:24:12'),
(18, 21, 1, 'assign staff apaan ya -alwi', NULL, '2019-05-14 04:11:35'),
(20, 23, 1, 'test', NULL, '2019-05-24 12:11:35'),
(21, 23, 1, 'tes', NULL, '2019-05-24 12:12:03'),
(22, 23, 1, 'test', NULL, '2019-05-24 12:13:05'),
(23, 23, 1, 'test', NULL, '2019-05-24 12:13:45'),
(24, 23, 1, 'wew', NULL, '2019-05-24 12:15:28'),
(25, 23, 21, 'apa', NULL, '2019-05-24 12:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `task_document`
--

CREATE TABLE `task_document` (
  `id` int(11) NOT NULL,
  `id_task` int(11) DEFAULT NULL,
  `id_doc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `task_document`
--

INSERT INTO `task_document` (`id`, `id_task`, `id_doc`) VALUES
(8, 21, 18),
(10, 22, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `task_team`
--

CREATE TABLE `task_team` (
  `id` int(11) NOT NULL,
  `id_task` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `task_team`
--

INSERT INTO `task_team` (`id`, `id_task`, `id_pegawai`, `keterangan`) VALUES
(12, 21, 19, 'dev'),
(13, 21, 20, 'dev '),
(14, 22, 20, 'dev'),
(17, 23, 21, 'analis'),
(18, 23, 22, 'dev');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `kode_unit` char(2) NOT NULL,
  `nama_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES
(1, 'AU', 'Audit'),
(5, 'EN', 'Engginer'),
(6, 'HR', 'HRD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_pegawai`, `password`, `status`) VALUES
(1, 1, '0000', 'admin'),
(2, 2, '1111', 'hrd'),
(19, 19, '2222', 'user'),
(20, 20, '3333', 'user'),
(21, 21, 'cahya23', 'user'),
(22, 22, 'cahya23', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `create_by` (`create_by`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `nip` (`nip`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_atasan` (`id_atasan`);

--
-- Indeks untuk tabel `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_leader` (`id_leader`),
  ADD KEY `create_by` (`create_by`);

--
-- Indeks untuk tabel `task_comments`
--
ALTER TABLE `task_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_task` (`id_task`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_doc` (`id_doc`);

--
-- Indeks untuk tabel `task_document`
--
ALTER TABLE `task_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_task` (`id_task`),
  ADD KEY `id_doc` (`id_doc`);

--
-- Indeks untuk tabel `task_team`
--
ALTER TABLE `task_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_task` (`id_task`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `task_comments`
--
ALTER TABLE `task_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `task_document`
--
ALTER TABLE `task_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `task_team`
--
ALTER TABLE `task_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`create_by`) REFERENCES `pegawai` (`id`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`),
  ADD CONSTRAINT `pegawai_ibfk_3` FOREIGN KEY (`id_atasan`) REFERENCES `pegawai` (`id`);

--
-- Ketidakleluasaan untuk tabel `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`id_leader`) REFERENCES `pegawai` (`id`),
  ADD CONSTRAINT `task_ibfk_3` FOREIGN KEY (`create_by`) REFERENCES `pegawai` (`id`);

--
-- Ketidakleluasaan untuk tabel `task_comments`
--
ALTER TABLE `task_comments`
  ADD CONSTRAINT `task_comments_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `pegawai` (`id`),
  ADD CONSTRAINT `task_comments_ibfk_3` FOREIGN KEY (`id_doc`) REFERENCES `document` (`id`);

--
-- Ketidakleluasaan untuk tabel `task_document`
--
ALTER TABLE `task_document`
  ADD CONSTRAINT `task_document_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_document_ibfk_2` FOREIGN KEY (`id_doc`) REFERENCES `document` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `task_team`
--
ALTER TABLE `task_team`
  ADD CONSTRAINT `task_team_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_team_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
