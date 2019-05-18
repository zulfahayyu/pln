-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2019 at 09:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kangarie_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_file` varchar(255) DEFAULT NULL,
  `date_upload` varchar(20) NOT NULL,
  `user_upload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
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
-- Table structure for table `event`
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
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `priority`, `date_start`, `date_end`, `id_unit`, `location`, `description`, `create_by`) VALUES
(18, 'eqwe', 'bg-danger', '2019-05-10', '2019-05-10', 5, 'Aula1', 'ewe', 19),
(19, 'asdasd', 'bg-warning', '2019-05-17', '2019-05-17', 5, 'Gardu Induk', 'ttt', 19),
(21, 'arief', 'bg-success', '2019-05-18', '2019-05-20', NULL, 'ruang rapt ', 'csc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `kode_jabatan` char(2) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `kode_jabatan`, `nama_jabatan`) VALUES
(1, 'EX', 'Executive'),
(2, 'MG', 'Magang'),
(7, 'M', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` char(11) NOT NULL,
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
  `id_unit` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `id_atasan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_p`, `no_sap`, `t_lahir`, `tgl_lahir`, `jkelamin`, `agama`, `status_kawin`, `jml_kel`, `alamat`, `avatar`, `id_unit`, `id_jabatan`, `id_atasan`) VALUES
(1, '0000', 'Admin', '0000', 'Jakarta', '05/01/2019', 'L', 'islam', 'Belum Kawin', 1, 'jakarta', 'avatar2.jpg', NULL, NULL, NULL),
(2, '1111', 'HRD', '1111', '', '', '', NULL, '', NULL, NULL, '', NULL, NULL, 1),
(19, '2222', 'pegawai Enginer 1', '2222', 'mataram', '05/11/2019', 'L', 'islam', 'Belum Kawin', 1, 'jakarta', 'default.jpg', 5, 1, 1),
(20, '3333', 'pegawai Enginer 2', '3333', 'Jakarta', '05/15/2019', 'L', 'islam', 'Belum Kawin', 1, 'test', 'default.jpg', 5, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `task`
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
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `priority`, `date_create`, `due_date`, `id_unit`, `id_leader`, `create_by`, `description`, `status`, `progress`) VALUES
(21, 'maintenace', 'High', '2019-05-12', '2019-05-08', 5, 1, 1, 'test', 'Done', 29),
(22, 'task engginer', 'Low', '2019-05-12', '2019-05-16', 5, 19, 19, 'tesst', 'To Do', 26);

-- --------------------------------------------------------

--
-- Table structure for table `task_comments`
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
-- Dumping data for table `task_comments`
--

INSERT INTO `task_comments` (`id`, `id_task`, `id_user`, `description`, `id_doc`, `create_data`) VALUES
(9, 21, 1, 'test', NULL, '2019-05-12 03:55:07'),
(10, 21, 1, 'test file', 13, '2019-05-12 03:55:31'),
(11, 21, 1, 'est', NULL, '2019-05-12 04:04:53'),
(13, 21, 19, 'wew', NULL, '2019-05-12 04:39:28'),
(14, 22, 19, 'test', NULL, '2019-05-12 10:56:07'),
(15, 22, 19, 'e test', NULL, '2019-05-12 10:56:32'),
(16, 22, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\r\n                        ', NULL, '2019-05-14 12:24:12'),
(17, 21, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\r\n                        ', NULL, '2019-05-14 12:25:06'),
(18, 21, 1, 'assign staff apaan ya -alwi', NULL, '2019-05-14 04:11:35'),
(19, 21, 1, '<p>loh tibatiba lorem ipsum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', NULL, '2019-05-14 04:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `task_document`
--

CREATE TABLE `task_document` (
  `id` int(11) NOT NULL,
  `id_task` int(11) DEFAULT NULL,
  `id_doc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_document`
--

INSERT INTO `task_document` (`id`, `id_task`, `id_doc`) VALUES
(8, 21, 18),
(10, 22, 20);

-- --------------------------------------------------------

--
-- Table structure for table `task_team`
--

CREATE TABLE `task_team` (
  `id` int(11) NOT NULL,
  `id_task` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_team`
--

INSERT INTO `task_team` (`id`, `id_task`, `id_pegawai`, `keterangan`) VALUES
(12, 21, 19, 'dev'),
(13, 21, 20, 'dev '),
(14, 22, 20, 'dev');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `kode_unit` char(2) NOT NULL,
  `nama_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`) VALUES
(1, 'AU', 'Audit'),
(5, 'EN', 'Engginer'),
(6, 'HR', 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_pegawai`, `password`, `status`) VALUES
(1, 1, '0000', 'admin'),
(2, 2, '1111', 'hrd'),
(19, 19, '2222', 'user'),
(20, 20, '3333', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `create_by` (`create_by`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `nip` (`nip`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_atasan` (`id_atasan`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_leader` (`id_leader`),
  ADD KEY `create_by` (`create_by`);

--
-- Indexes for table `task_comments`
--
ALTER TABLE `task_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_task` (`id_task`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_doc` (`id_doc`);

--
-- Indexes for table `task_document`
--
ALTER TABLE `task_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_task` (`id_task`),
  ADD KEY `id_doc` (`id_doc`);

--
-- Indexes for table `task_team`
--
ALTER TABLE `task_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_task` (`id_task`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `task_comments`
--
ALTER TABLE `task_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `task_document`
--
ALTER TABLE `task_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_team`
--
ALTER TABLE `task_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`create_by`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`),
  ADD CONSTRAINT `pegawai_ibfk_3` FOREIGN KEY (`id_atasan`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit_kerja` (`id`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`id_leader`) REFERENCES `pegawai` (`id`),
  ADD CONSTRAINT `task_ibfk_3` FOREIGN KEY (`create_by`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `task_comments`
--
ALTER TABLE `task_comments`
  ADD CONSTRAINT `task_comments_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `pegawai` (`id`),
  ADD CONSTRAINT `task_comments_ibfk_3` FOREIGN KEY (`id_doc`) REFERENCES `document` (`id`);

--
-- Constraints for table `task_document`
--
ALTER TABLE `task_document`
  ADD CONSTRAINT `task_document_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_document_ibfk_2` FOREIGN KEY (`id_doc`) REFERENCES `document` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_team`
--
ALTER TABLE `task_team`
  ADD CONSTRAINT `task_team_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_team_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
