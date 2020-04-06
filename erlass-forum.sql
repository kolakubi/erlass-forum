-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 07:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
('mp4', 'Menulis pemula lv 4', 'forum'),
('ujianmp1', 'ujian menulis pemula lv 1', 'forum'),
('ujianmp2', 'Ujian menulis pemula level 2', 'forum'),
('ujianyt11', 'Ujian Video Mengajar Part 1 Level 1', 'forum'),
('ujianyt12', 'Ujian Video Mengajar Part 1 Level 2', 'forum'),
('yt11', 'Video Mengajar Part 1 Level 1', 'forum'),
('yt12', 'Video Mengajar Part 1 Level 2', 'forum'),
('yt13', 'Video Mengajar Part 1 Level 3', 'forum'),
('yt21', 'Video Mengajar Part 2 Level 1', 'forum'),
('yt22', 'Video Mengajar Part 2 Level 2', 'forum'),
('yt23', 'Video Mengajar Part 2 Level 3', 'forum'),
('yt31', 'Video Mengajar Part 3 Level 1', 'forum'),
('yt32', 'Video Mengajar Part 3 Level 2', 'forum'),
('yt33', 'Video Mengajar Part 3 Level 3', 'forum');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `idkomentator` int(11) NOT NULL,
  `waktukomentar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
(7, 3, 2, '2020-03-10 20:47:37', '&lt;script&gt;alert(&#039;hacked&#039;)&lt;/script&gt;\r\n\r\ntes bos'),
(8, 8, 8, '2020-03-24 21:07:52', 'keren'),
(9, 8, 3, '2020-03-24 22:09:48', 'asd'),
(10, 1, 9, '2020-03-26 00:02:09', 'exelente'),
(11, 19, 10, '2020-04-02 22:51:47', 'dasdasdas'),
(12, 24, 12, '2020-04-03 22:50:34', 'asd'),
(13, 19, 12, '2020-04-03 22:51:38', 'ddasdad'),
(14, 1, 12, '2020-04-03 23:08:19', 'cool bro');

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
('tes10@tes10.com', '123', 2),
('tes11@tes11.com', '123', 2),
('tes12@tes12.com', '123', 2),
('tes13@tes13.com', '123', 2),
('tes2@tes2.com', '123', 2),
('tes3@tes3.com', '123', 2),
('tes4@tes4.com', '123', 2),
('tes5@tes5.com', '123', 2),
('tes6@tes6.com', '123', 2),
('tes7@tes7.com', '123', 2),
('tes9@tes9.com', '123', 2),
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
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `waktudaftar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `no_induk`, `alamat`, `sekolah`, `hp`, `email`, `foto`, `waktudaftar`) VALUES
(1, 'admin', '112233445566778899', 'Jalan kelapa dua wetan', 'SMPN 1 Cikini raya', '081277889944', 'tes@tes.com', 'default.jpg', '2020-04-03 23:21:15'),
(2, 'Yoko', 'tes2@tes2.com', 'Jalan persahabatan VI no 3-4 ciracas, jakarta timur 13730', 'SMPN 115 Jakarta', '08122211344899', 'tes2@tes2.com', 'default.jpg', '2020-04-03 23:21:15'),
(3, 'member 3', 'tes3@tes3.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes3@tes3.com', 'default.jpg', '2020-04-03 23:21:15'),
(4, 'member 4', 'tes4@tes4.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes4@tes4.com', 'default.jpg', '2020-04-03 23:21:15'),
(5, 'member 5', 'tes5@tes5.com', '123', 'SMPN 115 Jakarta', '08123445566', 'tes5@tes5.com', 'default.jpg', '2020-04-03 23:21:15'),
(6, 'member 6', 'tes6@tes6.com', 'qwe', 'SMPN 115 Jakarta', '08123445566', 'tes6@tes6.com', 'default.jpg', '2020-04-03 23:21:15'),
(7, 'member 7', 'tes7@tes7.com', 'jalan sesama', 'SMAN 40 Jakarta', '08112233445566', 'tes7@tes7.com', 'default.jpg', '2020-04-03 23:21:15'),
(8, 'member 9', 'tes9@tes9.com', 'jalan erlass', 'SMAN 71 Palu', '081211223344', 'tes9@tes9.com', 'default.jpg', '2020-04-03 23:21:15'),
(9, 'member 10', '220300100104050', 'Jalan naik kelas', 'SMAN 110 Jakarta', '08112211221122', 'tes10@tes10.com', 'default.jpg', '2020-04-03 23:21:15'),
(10, 'Aminah Sari', '11258754654983', 'alamat ku di jalan raya 1', 'SD 02 Pagi Ciracas', '0854778547581', 'tes11@tes11.com', 'image-200403-f4cb427719.jpg', '2020-04-03 23:21:15'),
(11, 'mal', '13234142415125123', 'jalan daan mogot', 'SMPN 120', '08100420402400', 'tes12@tes12.com', 'default.jpg', '2020-04-03 23:21:15'),
(12, 'Jasmine', '2010040010050120', 'Jalan Arabian', 'SD Al-Falah Ciracas', '098200120030103', 'tes13@tes13.com', 'image-200403-40fab79a64.jpg', '2020-04-03 23:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihandiikuti`
--

CREATE TABLE `pelatihandiikuti` (
  `idpelatihandiikuti` int(11) NOT NULL,
  `idmember` int(11) NOT NULL,
  `idpelatihan` varchar(10) NOT NULL,
  `waktupelatihandiikuti` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihandiikuti`
--

INSERT INTO `pelatihandiikuti` (`idpelatihandiikuti`, `idmember`, `idpelatihan`, `waktupelatihandiikuti`) VALUES
(3, 7, 'mp', '2020-04-06 23:07:23'),
(4, 8, 'mp', '2020-04-06 23:07:23'),
(9, 2, 'mp', '2020-04-06 23:07:23'),
(10, 3, 'mp', '2020-04-06 23:07:23'),
(11, 3, 'forum', '2020-04-06 23:07:23'),
(12, 9, 'mp', '2020-04-06 23:07:23'),
(22, 10, 'mp', '2020-04-06 23:07:23'),
(23, 12, 'mp', '2020-04-06 23:07:23'),
(25, 10, 'yt1', '2020-04-06 23:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `idauthor` int(11) NOT NULL,
  `idkategori` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktupublish` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view` int(11) NOT NULL,
  `isipost` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `idauthor`, `idkategori`, `judul`, `waktupublish`, `view`, `isipost`) VALUES
(1, 3, 'mp1', 'Menulis Pemula Level 1', '2020-03-06 20:16:54', 25, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>\r\n<p>\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n</p>\r\n<p>\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt\r\n</p>\r\n<p>\r\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n</p>'),
(2, 2, 'mp1', 'Menulis Pemula 1 By Member 2', '2020-03-07 12:31:49', 0, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.'),
(3, 4, 'mp1', 'Menghidari Covid-19 dengan obat herbal', '2020-03-08 18:54:58', 0, '<h2>lorem ipsum</h2>\r\n\r\n<p><em>dolor set amet</em></p>\r\n\r\n<p><strong><em>consequere dos minos</em></strong></p>\r\n'),
(5, 2, 'mp1', '&lt;script&gt;XSS Attack&lt;/script&gt;', '2020-03-10 20:49:29', 2, '<p>&lt;script&gt;XSS Attack&lt;/script&gt;</p>\r\n\r\n<p>be carefull brow</p>\r\n'),
(6, 2, 'mp1', 'Cara Mengajar Anak Paling Jitu', '2020-03-11 18:08:15', 2, '<p>pak buruk yang ia miliki. Dampak buruk itu disebabkan oleh kandungan zat-zat berbahaya di dalam makanan instan seperti lilin yang ada pada mie instan. Tak berhenti disitu, nyatanya di dalam makanan cepat saji terkandung bahan pengawet dan penyedap yang kini disebut micin.</p>\r\n\r\n<p>Fenomena kata micin kini mendadak kerap digunakan para remaja hingga dewasa bila seseorang mengalami hal-hal yang kurang normal. Maksud dari hal kurang normal itu seperti seseorang yang telat berpikir, lama menjawab bila diajak bicara dan lain sebagainya. Tak dielakkan, makanan cepat saji memang mengandung zat berbahaya seperti yang telah diungkapkan di atas.</p>\r\n\r\n<p>Sejumlah penelitian telah membuktikan bahwa keseringan mengkonsumsi makanan cepat saja memang tidak berdampak secara langsung ke tubuh. Namun, makanan-makanan cepat saji yang dikonsumsi akan tertimbun di dalam tubuh yang kemudian hari menjadi penyebab penyakit mematikan seperti kanker. Tak hanya kanker, penyakit berbahaya juga mengintai misalnya stroke, usus buntu dan penyakit ginjal.<br />\r\nMaka bila Anda termasuk ke dalam orang yang hobi mengkonsumsi makanan cepat saja, kurangilah hal itu dan</p>\r\n\r\n<p>mulai sayangi tubuh serta diri Anda sendiri. Perlu diketahui bahwa salah satu kandungan di dalam makanan instan yaitu lilin sulit dicerna tubuh. Lilin itu menghancurkan prinsip kerja sistem pencernaan tubuh sehingga makanan yang mengandung lilin akan dicerna dengan waktu minimal dua hari.</p>\r\n'),
(7, 2, 'mp1', 'Menulis Indah', '2020-03-11 18:08:37', 1, '<p>Bukan rahasia lagi bila anak-anak yang tinggal di daerah pedalaman sangat sulit mendapatkan kehidupan yang layak seperti anak-anak pada umumnya. Mereka kesulitan mendapat air bersih, mengenyam pendidikan sesuai batas kelayakan pendidikan Indonesia dan sulit mengikuti perkembangan zaman. Tak hanya itu saja , mereka bahkan tidak mengenal alat komunikasi seperti telepon genggam.</p>\r\n\r\n<p>Hal pokok yang menjadi sorotan utama yaitu betapa sulitnya mereka mendapat pendidikan yang layak dan mengenyam pendidikan dua belas tahun. Pada faktanya tak semua salah mereka, kesulitan mereka menjangkau lokasi sekolah menjadi masalah karena mereka harus mengarungi sungai. Mereka juga harus berjalan kaki hingga berpuluh-puluh kilo meter, bahkan ada pula yang tak memakai alas kaki.</p>\r\n\r\n<p>Kurangnya tenaga pengajar di pedalaman karena sulitnya mencari pengajar yang mau mengajar di daerah tersebut juga sangat disayangkan. Padahal kualitas seseorang diukur melalui seberapa jauh pendidikan yang dicapai karena kualitas seorang lulusan SD berbeda dengan kualitas seorang sarjana. Sehingga dapat disimpulkan bahwa pendidikan sangat memengaruhi kualitas seorang anak pedalaman.</p>\r\n'),
(8, 2, 'mp1', 'I N D O N E S I A', '2020-03-11 18:09:03', 10, '<p>Indonesia adalah suatu negara dengan iklim tropis yang terdiri dari ribuan pulau. Walaupun daratan Indonesia tak seluas lautannya, hutan di Indonesia sangat banyak mulai dari ujung Aceh yaitu Sabang hingga Merauke (Papua). Beberapa tahun terakhir kebakaran di Indonesia kerap terjadi, hal itu disebabkan dua faktor yaitu faktor alam dan buatan (manusia).</p>\r\n\r\n<p>Mengenai faktor alam memang tak ada yang dapat disalahkan, namun mengenai faktor buatan yaitu manusia itulah hal yang perlu dievaluasi. Manusia kini telah kehilangan kesadarannya hingga mereka melakukan hal-hal yang merugikan banyak pihak diantaranya merugikan lingkungan hidup contohnya hutan. Hutan adalah habitat dari ribuan spesies makhluk hidup yang saling bergantungan.</p>\r\n\r\n<p>Maka dari itu, aksi manusia membakar hutan untuk memenuhi maksud dari dalam dirinya sendiri memang perlu diadili. Alasan mereka melakukan pembakaran hutan beragam mulai dari ingin membuka lahan tanam baru hingga berdirinya gedung-gedung bertingkat. Namun, hal yang disayangkan yaitu betapa mereka tak memikirkan aneka flora dan fauna yang tinggal di dalam hutan tersebut.</p>\r\n\r\n<p>Flora dan fauna di dalam hutan akan melarikan diri bahkan akan mati hangus terbakar api yang berkobar karena ulah manusia. Mereka akan kehilangan habitat aslinya dan akibat dari hal tersebut yaitu larinya para satwa ke pemukiman penduduk. Mereka merasa tak lagi memiliki rumah yang dapat mereka tempati sehingga jalan terakhir ialah lari ke pemukiman warga sekitar.</p>\r\n\r\n<p>Tak heran bila akhir-akhir ini kasus ditemukannya hewan liar seperti macan dan singa di pemukiman warga sering dikabarkan. Seperti kata pepatah bahwa apa yang kita lakukan akan berbalik ke diri sendiri, maka berbuatlah sesuatu yang baik. Sedangkan faktor alam dari kebakaran hutan yaitu musim kemarau dan adanya sambaran petir saat hujan.</p>\r\n\r\n<p>Musim memang tak dapat diprediksi manusia, sehingga bila musim kemarau tiba dengan jangka waktu yang sangat panjang itu wajar. Namun, hal itu memengaruhi keadaan hutan karena hutan yang setiap hari disinari matahari terik dapat menimbulkan percikan api. Hal ini juga serupa bila terjadi petir lalu petir tersebut menyambar suatu bagian hingga timbul percikan api.</p>\r\n'),
(11, 8, 'ujianmp1', 'test level 1', '2020-03-24 21:03:02', 1, '<p>coba ikut test level 1 ah</p>\r\n'),
(14, 2, 'ujianmp1', 'qwe', '2020-03-24 21:28:04', 7, '<p>qweqweqwe</p>\r\n'),
(15, 3, 'ujianmp1', 'test menulis member 3', '2020-03-24 22:07:10', 2, '<p>test menulis member 3 asdas asdasd asdas das&nbsp;</p>\r\n\r\n<p>qw</p>\r\n\r\n<p>eq</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>a&nbsp;</p>\r\n\r\n<p>d a dasdasd asd as as asd asd</p>\r\n'),
(16, 3, 'mp1', 'zxczxc', '2020-03-24 22:08:44', 1, '<p>zxczxc</p>\r\n'),
(17, 2, 'mp1', 'Menulis Pemula lv 1 member 2', '2020-03-24 22:20:51', 3, '<p>Menulis Pemula lv 1 member 2</p>\r\n'),
(18, 9, 'ujianmp1', 'Tes Pelatihan Pemula lv 1', '2020-03-25 21:59:17', 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n\r\n<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>\r\n'),
(19, 9, 'mp1', 'asik udah lulus pelatihan level 1', '2020-03-25 23:28:32', 49, '<p>sangat bahagia</p>\r\n'),
(20, 10, 'ujianmp1', 'asdasdasdasdasda', '2020-03-27 00:13:56', 17, '<p>asdasdasdasdasda</p>\r\n\r\n<p>asdasdasdasdasda</p>\r\n\r\n<p>asdasdasdasdasda</p>\r\n\r\n<p>asdasdasdasdasda</p>\r\n\r\n<p>asdasdasdasdasda</p>\r\n\r\n<p>asdasdasdasdasda</p>\r\n\r\n<p>asdasdasdasdasda</p>\r\n\r\n<p>asdasdasdasdasda</p>\r\n'),
(22, 3, 'ujianmp2', 'Tes Menulis pemula level 2', '2020-03-30 21:53:28', 1, '<p>Inteserting</p>\r\n'),
(23, 3, 'mp2', 'First try menulis pemula level 2', '2020-03-30 22:39:16', 0, '<p>dikit lagi dapet mobil</p>\r\n'),
(24, 10, 'mp1', 'Coba tulisan', '2020-04-03 22:15:42', 8, '<p>adalskdm aisjdpaos paosjd pasjd</p>\r\n\r\n<p>a asda osjd asjd pasjdpaosjd apso a</p>\r\n\r\n<p>s a</p>\r\n\r\n<p>[sdk a[spkd a[skd&nbsp;</p>\r\n'),
(25, 12, 'ujianmp1', 'Pohon Kehidupan', '2020-04-03 22:47:50', 1, '<p>Trilogi film The Lord of the Rings seluruhnya direkam di Selandia Baru. Jajaki pengalaman menelusuri lokasi-lokasi dan lahan memukau yang berperan sebagai Middle‑earth&trade;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Lokasi North Island</h2>\r\n\r\n<h2>Matamata&nbsp;</h2>\r\n\r\n<p><em><strong>The Shire dan Hobbiton Movie Set</strong></em></p>\r\n\r\n<p>Bentang alam peternakan sapi yang hijau di sekitar kota Waikato di Matamata digunakan untuk menggambarkan kawasan Shire yang tenteram di Middle‑earth&trade;. Desa Hobbiton diciptakan di sini. Desa ini kemudian dipugar ulang untuk perekaman film Trilogi The Hobbit, dan sekarang akan tetap menjadi daya tarik wisata permanen.</p>\r\n\r\n<h2>Lokasi South Island</h2>\r\n\r\n<h2>Nelson</h2>\r\n\r\n<p><em><strong>Rumah bagi &#39;One Ring&#39;, Chetwood Forest, Dimrill Dale</strong></em></p>\r\n\r\n<p><a href=\"https://www.newzealand.com/id/nelson-tasman/\">Nelson</a>&nbsp;adalah kediaman&nbsp;Jens Hansen,&nbsp;perajin emas yang bertanggung jawab atas proses pembuatan 40 cincin yang digunakan dalam produksi film. Salah satu cincin aslinya dipajang dan tiruannya dapat dibeli dalam emas berkadar 9K dan 18K.&nbsp;</p>\r\n\r\n<p>Dari Nelson, berkendaralah ke barat melintasi Takaka Hill, yang merupakan situs pengambilan gambar untuk Chetwood Forest. Di sini, &#39;Strider&#39; sang Penjaga Hutan menuntun para hobbit melewati negeri berbukit-bukit di sisi timur Bree untuk melarikan diri dari para Penunggang Hitam.</p>\r\n\r\n<p>Anda harus naik helikopter untuk melihat tempat para pengawal cincin bersembunyi dari kawanan gagak hitam Saruman. Mintalah pilot menunjukkan letak Dimrill Dale - Mount Olympus dan Mount Owen. Dari udara, Anda dapat menikmati pemandangan tiga taman nasional di kawasan ini - Abel Tasman, Nelson Lakes, dan Kahurangi dari atas.&nbsp;&nbsp;</p>\r\n\r\n<h2><strong>Canterbury</strong></h2>\r\n\r\n<p><em><strong>Edoras</strong></em></p>\r\n\r\n<p>Di dataran tinggi Ashburton District, bersemayamlah Mount Sunday - bukit berlereng landai yang menjadi latar bagi Edoras, kota utama bangsa Rohan.<br />\r\n<br />\r\nTidak ada yang tersisa dari latar yang pembangunannya memakan waktu sembilan bulan ini, namun lokasinya tetap memiliki daya pukau yang dahsyat. Anda dapat memarkir kendaraan di Hakatere Potts Road dan berjalan ke tempat ini. Mount Potts Station di dekatnya menyediakan akomodasi dan restoran.</p>\r\n'),
(26, 12, 'mp1', 'Hobbit', '2020-04-03 22:50:09', 1, '<h2><strong>Canterbury</strong></h2>\r\n\r\n<p><em><strong>Edoras</strong></em></p>\r\n\r\n<p>Di dataran tinggi Ashburton District, bersemayamlah Mount Sunday - bukit berlereng landai yang menjadi latar bagi Edoras, kota utama bangsa Rohan.<br />\r\n<br />\r\nTidak ada yang tersisa dari latar yang pembangunannya memakan waktu sembilan bulan ini, namun lokasinya tetap memiliki daya pukau yang dahsyat. Anda dapat memarkir kendaraan di Hakatere Potts Road dan berjalan ke tempat ini. Mount Potts Station di dekatnya menyediakan akomodasi dan restoran.</p>\r\n\r\n<h2><strong>Mackenzie Country</strong></h2>\r\n\r\n<p><em><strong>Pelennor Fields</strong></em></p>\r\n\r\n<p>Di dekat Twizel, Mackenzie Country, Peter Jackson memfilmkan pertempuran hebat Pelennor Fields, tempat ribuan orc yang dibiakkan oleh Sauron berperang dengan pasukan Gondor dan Rohan. Padang rumput yang membentang ke kaki pegunungan ini mirip gambaran dalam The Lord of the Rings. Lokasi ini berada di lahan milik pribadi, namun Anda dapat mengatur tur di kota Twizel.</p>\r\n\r\n<h2><strong>Southern Lakes</strong></h2>\r\n\r\n<p><em><strong>Ford of Bruinen, Gandalf&rsquo;s ride,&nbsp;Isengard and Lothlorien</strong></em></p>\r\n\r\n<p>Dari desa Glenorchy, di ujung utara Lake Wakatipu, Anda dapat melihat lereng barat-laut Mount Earnslaw, yang ditampilkan dalam adegan pembuka The Two Towers. Dari Glenorchy Anda juga dapat menemukan Lothlorien - hutan beech yang menuju ke Surga.</p>\r\n\r\n<p>Lokasi lain yang layak dikenang dapat dijumpai dekat Queenstown di Arrowtown tempat Anda dapat berjalan kaki ke Ford of Bruinen di Arrow River; Anda juga dapat berjalan kaki ke Wilcox Green, tempat adegan Gladden Fields difilmkan.</p>\r\n\r\n<p>Dari perkebunan anggur Chard Farm Anda dapat melihat pemandangan menakjubkan Anduin dan Argonath (Pillar of Kings). Kedua pilar raksasa tersebut dibuat dengan program komputer di studio.</p>\r\n\r\n<p>Berkendaralah ke Crown Range Road dan Anda akan menemukan diri Anda di tengah Cardrona Valley. Dari sini, Anda dapat berkendara ke puncak Mount Cardona (1119m) untuk mengamati pemandangan indah Middle‑earth&trade;. Di sisi kiri terdapat River Anduin dan Pillars of the Argonath. Di perbukitan tepat di depannya terletak Dimrill Dale. Di kejauhan terlihat Amon Hen di pesisir Nen Hithoel.</p>\r\n\r\n<h2><strong>Fiordland</strong></h2>\r\n\r\n<p><em><strong>River Anduin, Fangorn Forest</strong></em></p>\r\n\r\n<p>Waiau River di antara Te Anau dan Manapouri menggambarkan River Anduin saat para Pengawal Cincin berperahu ke selatan meninggalkan Lothl&oacute;rien. Puncak-puncak bukit yang menjulang di sekitarnya digunakan untuk melukiskan kawasan perbukitan di selatan Rivendell.</p>\r\n\r\n<p>Untuk menemukan Fanghorn Forest, tanyakan arah ke Takaro Road, yang terdapat di dekat Te Anau. Kedua sisi jalan ini difilmkan sebagai Fangorn Forest; kamera-kamera digantung tinggi dengan kabel untuk memfilmkan Aragorn berlari melintasi jajaran pohon.</p>\r\n'),
(27, 10, 'ujianyt11', 'https://www.youtube.com/watch?v=lp-EO5I60KA', '2020-04-06 23:07:54', 0, ''),
(28, 10, 'ujianyt11', 'https://www.youtube.com/watch?v=Wv2rLZmbPMA', '2020-04-06 23:25:06', 0, ''),
(29, 10, 'ujianyt11', 'https://www.youtube.com/watch?v=Wv2rLZmbPMA', '2020-04-06 23:32:47', 0, ''),
(30, 10, 'ujianyt11', 'https://www.youtube.com/watch?v=Wv2rLZmbPMA', '2020-04-06 23:33:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `postrating`
--

CREATE TABLE `postrating` (
  `idrating` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `idpenilai` int(11) NOT NULL,
  `nilairating` int(11) NOT NULL,
  `wakturating` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(12, 3, 2, 5, '2020-03-10 20:47:37'),
(13, 8, 8, 5, '2020-03-24 21:07:52'),
(14, 8, 3, 5, '2020-03-24 22:09:48'),
(15, 1, 9, 5, '2020-03-26 00:02:09'),
(16, 19, 10, 5, '2020-04-02 22:51:47'),
(17, 24, 12, 5, '2020-04-03 22:50:34'),
(18, 19, 12, 4, '2020-04-03 22:51:38'),
(19, 1, 12, 5, '2020-04-03 23:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `statuspelatihandiikuti`
--

CREATE TABLE `statuspelatihandiikuti` (
  `idstatuspelatihandiikuti` int(11) NOT NULL,
  `idpelatihandiikuti` int(11) NOT NULL,
  `ujianlv1` tinyint(1) DEFAULT '0',
  `statusujianlv1` varchar(255) NOT NULL,
  `openlv1` tinyint(1) NOT NULL DEFAULT '0',
  `ujianlv2` tinyint(1) NOT NULL DEFAULT '0',
  `statusujianlv2` varchar(255) NOT NULL,
  `openlv2` tinyint(1) NOT NULL DEFAULT '0',
  `ujianlv3` tinyint(1) NOT NULL DEFAULT '0',
  `statusujianlv3` varchar(255) NOT NULL,
  `openlv3` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuspelatihandiikuti`
--

INSERT INTO `statuspelatihandiikuti` (`idstatuspelatihandiikuti`, `idpelatihandiikuti`, `ujianlv1`, `statusujianlv1`, `openlv1`, `ujianlv2`, `statusujianlv2`, `openlv2`, `ujianlv3`, `statusujianlv3`, `openlv3`) VALUES
(2, 3, 0, '', 0, 0, '', 0, 0, '', 0),
(3, 4, 1, '', 1, 0, '', 0, 0, '', 0),
(8, 9, 1, 'lulus', 1, 0, '', 0, 0, '', 0),
(9, 10, 1, '', 1, 1, 'lulus', 1, 0, '', 0),
(10, 11, 0, '', 0, 0, '', 0, 0, '', 0),
(11, 12, 1, 'lulus', 1, 0, '', 0, 0, '', 0),
(21, 22, 1, 'lulus', 1, 0, '', 0, 0, '', 0),
(22, 23, 1, 'lulus', 1, 0, '', 0, 0, '', 0),
(24, 25, 1, '', 0, 0, '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `idsurat` int(11) NOT NULL,
  `idpengirim` int(11) NOT NULL,
  `idpenerima` int(11) NOT NULL,
  `judulsurat` varchar(255) NOT NULL,
  `isisurat` text NOT NULL,
  `waktukirimsurat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dilihat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`idsurat`, `idpengirim`, `idpenerima`, `judulsurat`, `isisurat`, `waktukirimsurat`, `dilihat`) VALUES
(1, 1, 10, 'Selamat datang di Erlass', 'terima kasih telah bergabung ke Pelatihan. Ayo kumpulkan poinmu dan dapatkan hadiah menarik', '2020-03-26 21:08:15', 1),
(2, 1, 10, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-03-27 22:08:20', 1),
(3, 1, 11, 'Selamat datang di Erlass', 'terima kasih telah bergabung ke Pelatihan. Ayo kumpulkan poinmu dan dapatkan hadiah menarik', '2020-03-28 19:54:15', 1),
(4, 1, 3, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-03-30 21:54:05', 1),
(5, 1, 10, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-04-02 20:57:43', 1),
(6, 1, 10, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-04-02 20:58:17', 1),
(7, 1, 2, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-04-02 21:05:36', 0),
(8, 1, 2, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-04-02 21:05:47', 0),
(9, 1, 2, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-04-02 21:06:30', 0),
(10, 1, 12, 'Selamat datang di Erlass', 'terima kasih telah bergabung ke Pelatihan. Ayo kumpulkan poinmu dan dapatkan hadiah menarik', '2020-04-03 22:41:23', 1),
(11, 1, 12, 'Selamat anda lulus Tes', 'Segera ikuti pelatihan dan jadilah guru terbaik', '2020-04-03 22:48:43', 1);

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
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`idsurat`),
  ADD KEY `idpengirim` (`idpengirim`),
  ADD KEY `idpenerima` (`idpenerima`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelatihandiikuti`
--
ALTER TABLE `pelatihandiikuti`
  MODIFY `idpelatihandiikuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `postrating`
--
ALTER TABLE `postrating`
  MODIFY `idrating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `statuspelatihandiikuti`
--
ALTER TABLE `statuspelatihandiikuti`
  MODIFY `idstatuspelatihandiikuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `idsurat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`idpengirim`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `surat_ibfk_2` FOREIGN KEY (`idpenerima`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
