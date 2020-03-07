-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erlass-forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` varchar(10) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
('cd1', 'coding lv 1'),
('cd2', 'coding lv 2'),
('mb1', 'Menulis buku lv 1'),
('mb2', 'Menulis buku lv 1'),
('mb3', 'Menulis buku lv 3'),
('mb4', 'Menulis buku lv 4'),
('mp1', 'Menulis pemula lv 1'),
('mp2', 'Menulis pemula lv 2'),
('mp3', 'Menulis pemula lv 3'),
('mp4', 'Menulis pemula lv 4');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `idkomentator` int(11) NOT NULL,
  `waktukomentar` datetime NOT NULL DEFAULT current_timestamp(),
  `isikomentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `idpost`, `idkomentator`, `waktukomentar`, `isikomentar`) VALUES
(2, 1, 2, '2020-03-07 19:24:00', 'artikelnya bagus banget kak'),
(3, 2, 6, '2020-03-07 20:02:30', 'keren abiezz');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `level`) VALUES
('tes2@tes2.com', '123', 2),
('tes3@tes3.com', '123', 2),
('tes4@tes4.com', '123', 2),
('tes5@tes5.com', '123', 2),
('tes6@tes6.com', '123', 2),
('tes@tes.com', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_induk` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `no_induk`, `alamat`, `sekolah`, `hp`, `email`, `foto`) VALUES
(1, 'Mal', '112233445566778899', 'Jalan kelapa dua wetan', 'SMPN 1 Cikini', '081277889944', 'tes@tes.com', ''),
(2, 'member 2', 'tes2@tes2.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes2@tes2.com', ''),
(3, 'member 3', 'tes3@tes3.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes3@tes3.com', ''),
(4, 'qwe', 'tes4@tes4.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes4@tes4.com', ''),
(5, 'qwe', 'tes5@tes5.com', '123', 'SMPN 115 Jakarta', '08123445566', 'tes5@tes5.com', ''),
(6, 'qwe', 'tes6@tes6.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes6@tes6.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `idauthor` int(11) NOT NULL,
  `idkategori` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktupublish` datetime NOT NULL DEFAULT current_timestamp(),
  `view` int(11) NOT NULL,
  `isipost` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `idauthor`, `idkategori`, `judul`, `waktupublish`, `view`, `isipost`) VALUES
(1, 3, 'mp1', 'Menulis Pemula Level 1', '2020-03-06 20:16:54', 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>\r\n<p>\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt\r\n</p>\r\n<p>\r\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n</p>'),
(2, 2, 'mp1', 'Menulis Pemula 1 By Member 2', '2020-03-07 12:31:49', 0, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');

-- --------------------------------------------------------

--
-- Table structure for table `postrating`
--

CREATE TABLE `postrating` (
  `idrating` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `idpenilai` int(11) NOT NULL,
  `nilairating` int(11) NOT NULL,
  `wakturating` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postrating`
--

INSERT INTO `postrating` (`idrating`, `idpost`, `idpenilai`, `nilairating`, `wakturating`) VALUES
(1, 1, 2, 5, '2020-03-07 19:21:05'),
(2, 1, 4, 4, '2020-03-07 19:21:05'),
(3, 1, 5, 4, '2020-03-07 19:21:05'),
(4, 1, 6, 5, '2020-03-07 19:21:05'),
(7, 1, 2, 4, '2020-03-07 19:24:00'),
(8, 2, 6, 5, '2020-03-07 20:02:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idkomentar`),
  ADD KEY `idpost` (`idpost`),
  ADD KEY `idkomentator` (`idkomentator`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `idkategori` (`idkategori`),
  ADD KEY `idauthor` (`idauthor`);

--
-- Indexes for table `postrating`
--
ALTER TABLE `postrating`
  ADD PRIMARY KEY (`idrating`),
  ADD KEY `idpenilai` (`idpenilai`),
  ADD KEY `idpost` (`idpost`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postrating`
--
ALTER TABLE `postrating`
  MODIFY `idrating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`idpost`) REFERENCES `post` (`idpost`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`idkomentator`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`idauthor`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `postrating`
--
ALTER TABLE `postrating`
  ADD CONSTRAINT `postrating_ibfk_1` FOREIGN KEY (`idpenilai`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `postrating_ibfk_2` FOREIGN KEY (`idpost`) REFERENCES `post` (`idpost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
