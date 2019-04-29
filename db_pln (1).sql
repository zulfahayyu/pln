-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2019 pada 19.44
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
  `doc_file` varchar(255) NOT NULL,
  `date_upload` varchar(20) NOT NULL,
  `user_upload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `document`
--

INSERT INTO `document` (`id`, `doc_name`, `doc_file`, `date_upload`, `user_upload`) VALUES
(1, 'template-sme-health  all benefit - Copy 1 (2).xlsx', 'template-sme-health  all benefit - Copy 1 (2).xlsx', '2019-04-26', 1),
(2, 'template-sme-health  all benefit - Copy 1 (2).xlsx', 'template-sme-health  all benefit - Copy 1 (2).xlsx', '2019-04-26', 1),
(4, 'New Text Document.php', 'New Text Document.php', '2019-04-28', 1),
(5, 'Dokument 1', 'New Rich Text Document.rtf', '2019-04-28', 1),
(6, 'Dokument 1', 'New Rich Text Document.rtf', '2019-04-28', 1),
(7, 'Dokument 1', 'template.xlsx', '2019-04-29', 1);

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
  `id_unit` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `event_name`, `priority`, `date_start`, `date_end`, `id_unit`, `location`, `description`) VALUES
(4, 'Evaluasi', 'bg-danger', '2019-05-02', '2019-05-04', 0, 'ruang rapat', 'test'),
(5, 'Maintenance Gardu', 'bg-danger', '2019-04-26', '2019-04-26', 0, 'Gardu Induk', 'harap membawa tools maintenace'),
(6, 'Rapat Bulanan', 'bg-success', '2019-04-11', '2019-04-25', 6, 'ruang rapt ', 'test');

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
  `nip` char(8) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `no_sap` char(8) NOT NULL,
  `t_lahir` char(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jkelamin` char(1) NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status_kawin` varchar(11) NOT NULL,
  `jml_kel` int(2) DEFAULT NULL,
  `alamat` text,
  `avatar` varchar(255) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_atasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_p`, `no_sap`, `t_lahir`, `tgl_lahir`, `jkelamin`, `agama`, `status_kawin`, `jml_kel`, `alamat`, `avatar`, `id_unit`, `id_jabatan`, `id_atasan`) VALUES
(1, '0000', 'admin', '0000', 'mataram', '08/14/2018', 'L', 'islam', 'Belum Kawin', 2, 'jakarta barat raya', 'Helicopters_-_1.jpg', 1, 1, 1),
(10, '11111', 'arief c', '311', 'matara', '04/16/2019', 'P', '111', 'Kawin', 111, '111', '', 2, 2, 1),
(12, '1111', 'Arief c', '1111', '04/18/2019', '04/30/2019', 'L', 'islam', 'Belum Kawin', 4, 'jl haji midi', '', 1, 1, 1);

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
(16, 'Maintenance 2', 'High', '2019-04-29', '2019-05-01', 1, 2, 1, '                                        test                                    ', 'To Do', 38),
(17, 'Pengadaan Komputer', 'Medium', '2019-04-29', '2019-05-11', 1, 1, 1, 'test', 'Done', 0);

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
(4, 2, 1, 'asdasdsad', 4, '2019-04-28 12:50:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `task_document`
--

CREATE TABLE `task_document` (
  `id` int(11) NOT NULL,
  `id_task` int(11) DEFAULT NULL,
  `id_doc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 16, 1, 'analis'),
(9, 17, 1, 'pm');

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
(5, 'AU', 'Audit'),
(6, 'CC', 'Audit');

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
(5, 1, '0000', 'admin'),
(10, 10, '1111', 'user'),
(12, 12, '2222', 'user');

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
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `task_comments`
--
ALTER TABLE `task_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `task_document`
--
ALTER TABLE `task_document`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `task_team`
--
ALTER TABLE `task_team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `task_comments`
--
ALTER TABLE `task_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `task_document`
--
ALTER TABLE `task_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `task_team`
--
ALTER TABLE `task_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
