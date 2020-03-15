-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 10:00 AM
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
  `namakategori` varchar(255) NOT NULL,
  `jenispelatihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`, `jenispelatihan`) VALUES
('cd1', 'coding lv 1', 'forum'),
('cd2', 'coding lv 2', 'forum'),
('mb1', 'Menulis buku lv 1', 'forum'),
('mb2', 'Menulis buku lv 1', 'forum'),
('mb3', 'Menulis buku lv 3', 'forum'),
('mb4', 'Menulis buku lv 4', 'forum'),
('mp1', 'Menulis pemula lv 1', 'forum'),
('mp2', 'Menulis pemula lv 2', 'forum'),
('mp3', 'Menulis pemula lv 3', 'forum'),
('mp4', 'Menulis pemula lv 4', 'forum');

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
(3, 2, 6, '2020-03-07 20:02:30', 'keren abiezz'),
(4, 1, 4, '2020-03-08 13:44:20', 'kosa kata nya keren'),
(5, 1, 6, '2020-03-08 19:12:24', 'kurang oke'),
(6, 1, 5, '2020-03-09 20:58:03', 'mantap bosss\r\n'),
(7, 3, 2, '2020-03-10 20:47:37', '&lt;script&gt;alert(&#039;hacked&#039;)&lt;/script&gt;\r\n\r\ntes bos');

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
('tes7@tes7.com', '123', 2),
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
(4, 'member 4', 'tes4@tes4.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes4@tes4.com', ''),
(5, 'member 5', 'tes5@tes5.com', '123', 'SMPN 115 Jakarta', '08123445566', 'tes5@tes5.com', ''),
(6, 'member 6', 'tes6@tes6.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes6@tes6.com', ''),
(7, 'member 7', 'tes7@tes7.com', 'jalan sesama', 'SMAN 40 Jakarta', '08112233445566', 'tes7@tes7.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihandiikuti`
--

CREATE TABLE `pelatihandiikuti` (
  `idpelatihandiikuti` int(11) NOT NULL,
  `idmember` int(11) NOT NULL,
  `idpelatihan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihandiikuti`
--

INSERT INTO `pelatihandiikuti` (`idpelatihandiikuti`, `idmember`, `idpelatihan`) VALUES
(3, 7, 'mp');

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
(2, 2, 'mp1', 'Menulis Pemula 1 By Member 2', '2020-03-07 12:31:49', 0, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.'),
(3, 4, 'mp1', 'Menghidari Covid-19 dengan obat herbal', '2020-03-08 18:54:58', 0, '<h2>lorem ipsum</h2>\r\n\r\n<p><em>dolor set amet</em></p>\r\n\r\n<p><strong><em>consequere dos minos</em></strong></p>\r\n'),
(5, 2, 'mp1', '&lt;script&gt;XSS Attack&lt;/script&gt;', '2020-03-10 20:49:29', 0, '<p>&lt;script&gt;XSS Attack&lt;/script&gt;</p>\r\n\r\n<p>be carefull brow</p>\r\n'),
(6, 2, 'mp1', 'Cara Mengajar Anak Paling Jitu', '2020-03-11 18:08:15', 0, '<p>pak buruk yang ia miliki. Dampak buruk itu disebabkan oleh kandungan zat-zat berbahaya di dalam makanan instan seperti lilin yang ada pada mie instan. Tak berhenti disitu, nyatanya di dalam makanan cepat saji terkandung bahan pengawet dan penyedap yang kini disebut micin.</p>\r\n\r\n<p>Fenomena kata micin kini mendadak kerap digunakan para remaja hingga dewasa bila seseorang mengalami hal-hal yang kurang normal. Maksud dari hal kurang normal itu seperti seseorang yang telat berpikir, lama menjawab bila diajak bicara dan lain sebagainya. Tak dielakkan, makanan cepat saji memang mengandung zat berbahaya seperti yang telah diungkapkan di atas.</p>\r\n\r\n<p>Sejumlah penelitian telah membuktikan bahwa keseringan mengkonsumsi makanan cepat saja memang tidak berdampak secara langsung ke tubuh. Namun, makanan-makanan cepat saji yang dikonsumsi akan tertimbun di dalam tubuh yang kemudian hari menjadi penyebab penyakit mematikan seperti kanker. Tak hanya kanker, penyakit berbahaya juga mengintai misalnya stroke, usus buntu dan penyakit ginjal.<br />\r\nMaka bila Anda termasuk ke dalam orang yang hobi mengkonsumsi makanan cepat saja, kurangilah hal itu dan</p>\r\n\r\n<p>mulai sayangi tubuh serta diri Anda sendiri. Perlu diketahui bahwa salah satu kandungan di dalam makanan instan yaitu lilin sulit dicerna tubuh. Lilin itu menghancurkan prinsip kerja sistem pencernaan tubuh sehingga makanan yang mengandung lilin akan dicerna dengan waktu minimal dua hari.</p>\r\n'),
(7, 2, 'mp1', 'Menulis Indah', '2020-03-11 18:08:37', 0, '<p>Bukan rahasia lagi bila anak-anak yang tinggal di daerah pedalaman sangat sulit mendapatkan kehidupan yang layak seperti anak-anak pada umumnya. Mereka kesulitan mendapat air bersih, mengenyam pendidikan sesuai batas kelayakan pendidikan Indonesia dan sulit mengikuti perkembangan zaman. Tak hanya itu saja , mereka bahkan tidak mengenal alat komunikasi seperti telepon genggam.</p>\r\n\r\n<p>Hal pokok yang menjadi sorotan utama yaitu betapa sulitnya mereka mendapat pendidikan yang layak dan mengenyam pendidikan dua belas tahun. Pada faktanya tak semua salah mereka, kesulitan mereka menjangkau lokasi sekolah menjadi masalah karena mereka harus mengarungi sungai. Mereka juga harus berjalan kaki hingga berpuluh-puluh kilo meter, bahkan ada pula yang tak memakai alas kaki.</p>\r\n\r\n<p>Kurangnya tenaga pengajar di pedalaman karena sulitnya mencari pengajar yang mau mengajar di daerah tersebut juga sangat disayangkan. Padahal kualitas seseorang diukur melalui seberapa jauh pendidikan yang dicapai karena kualitas seorang lulusan SD berbeda dengan kualitas seorang sarjana. Sehingga dapat disimpulkan bahwa pendidikan sangat memengaruhi kualitas seorang anak pedalaman.</p>\r\n'),
(8, 2, 'mp1', 'I N D O N E S I A', '2020-03-11 18:09:03', 0, '<p>Indonesia adalah suatu negara dengan iklim tropis yang terdiri dari ribuan pulau. Walaupun daratan Indonesia tak seluas lautannya, hutan di Indonesia sangat banyak mulai dari ujung Aceh yaitu Sabang hingga Merauke (Papua). Beberapa tahun terakhir kebakaran di Indonesia kerap terjadi, hal itu disebabkan dua faktor yaitu faktor alam dan buatan (manusia).</p>\r\n\r\n<p>Mengenai faktor alam memang tak ada yang dapat disalahkan, namun mengenai faktor buatan yaitu manusia itulah hal yang perlu dievaluasi. Manusia kini telah kehilangan kesadarannya hingga mereka melakukan hal-hal yang merugikan banyak pihak diantaranya merugikan lingkungan hidup contohnya hutan. Hutan adalah habitat dari ribuan spesies makhluk hidup yang saling bergantungan.</p>\r\n\r\n<p>Maka dari itu, aksi manusia membakar hutan untuk memenuhi maksud dari dalam dirinya sendiri memang perlu diadili. Alasan mereka melakukan pembakaran hutan beragam mulai dari ingin membuka lahan tanam baru hingga berdirinya gedung-gedung bertingkat. Namun, hal yang disayangkan yaitu betapa mereka tak memikirkan aneka flora dan fauna yang tinggal di dalam hutan tersebut.</p>\r\n\r\n<p>Flora dan fauna di dalam hutan akan melarikan diri bahkan akan mati hangus terbakar api yang berkobar karena ulah manusia. Mereka akan kehilangan habitat aslinya dan akibat dari hal tersebut yaitu larinya para satwa ke pemukiman penduduk. Mereka merasa tak lagi memiliki rumah yang dapat mereka tempati sehingga jalan terakhir ialah lari ke pemukiman warga sekitar.</p>\r\n\r\n<p>Tak heran bila akhir-akhir ini kasus ditemukannya hewan liar seperti macan dan singa di pemukiman warga sering dikabarkan. Seperti kata pepatah bahwa apa yang kita lakukan akan berbalik ke diri sendiri, maka berbuatlah sesuatu yang baik. Sedangkan faktor alam dari kebakaran hutan yaitu musim kemarau dan adanya sambaran petir saat hujan.</p>\r\n\r\n<p>Musim memang tak dapat diprediksi manusia, sehingga bila musim kemarau tiba dengan jangka waktu yang sangat panjang itu wajar. Namun, hal itu memengaruhi keadaan hutan karena hutan yang setiap hari disinari matahari terik dapat menimbulkan percikan api. Hal ini juga serupa bila terjadi petir lalu petir tersebut menyambar suatu bagian hingga timbul percikan api.</p>\r\n');

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
(8, 2, 6, 5, '2020-03-07 20:02:30'),
(9, 1, 4, 5, '2020-03-08 13:44:19'),
(10, 1, 6, 3, '2020-03-08 19:12:24'),
(11, 1, 5, 5, '2020-03-09 20:58:03'),
(12, 3, 2, 5, '2020-03-10 20:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `statuspelatihandiikuti`
--

CREATE TABLE `statuspelatihandiikuti` (
  `idstatuspelatihandiikuti` int(11) NOT NULL,
  `idpelatihandiikuti` int(11) NOT NULL,
  `ujianlv1` tinyint(1) DEFAULT 0,
  `statusujianlv1` varchar(255) NOT NULL,
  `openlv1` tinyint(1) NOT NULL DEFAULT 0,
  `ujianlv2` tinyint(1) NOT NULL DEFAULT 0,
  `statusujianlv2` varchar(255) NOT NULL,
  `openlv2` tinyint(1) NOT NULL DEFAULT 0,
  `ujianlv3` tinyint(1) NOT NULL DEFAULT 0,
  `statusujianlv3` varchar(255) NOT NULL,
  `openlv3` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuspelatihandiikuti`
--

INSERT INTO `statuspelatihandiikuti` (`idstatuspelatihandiikuti`, `idpelatihandiikuti`, `ujianlv1`, `statusujianlv1`, `openlv1`, `ujianlv2`, `statusujianlv2`, `openlv2`, `ujianlv3`, `statusujianlv3`, `openlv3`) VALUES
(2, 3, 0, '', 0, 0, '', 0, 0, '', 0);

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
-- Indexes for table `pelatihandiikuti`
--
ALTER TABLE `pelatihandiikuti`
  ADD PRIMARY KEY (`idpelatihandiikuti`),
  ADD KEY `idmember` (`idmember`);

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
-- Indexes for table `statuspelatihandiikuti`
--
ALTER TABLE `statuspelatihandiikuti`
  ADD PRIMARY KEY (`idstatuspelatihandiikuti`),
  ADD KEY `idpelatihandiikuti` (`idpelatihandiikuti`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelatihandiikuti`
--
ALTER TABLE `pelatihandiikuti`
  MODIFY `idpelatihandiikuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `postrating`
--
ALTER TABLE `postrating`
  MODIFY `idrating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `statuspelatihandiikuti`
--
ALTER TABLE `statuspelatihandiikuti`
  MODIFY `idstatuspelatihandiikuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `pelatihandiikuti`
--
ALTER TABLE `pelatihandiikuti`
  ADD CONSTRAINT `pelatihandiikuti_ibfk_1` FOREIGN KEY (`idmember`) REFERENCES `member` (`id_member`);

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

--
-- Constraints for table `statuspelatihandiikuti`
--
ALTER TABLE `statuspelatihandiikuti`
  ADD CONSTRAINT `statuspelatihandiikuti_ibfk_1` FOREIGN KEY (`idpelatihandiikuti`) REFERENCES `pelatihandiikuti` (`idpelatihandiikuti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
