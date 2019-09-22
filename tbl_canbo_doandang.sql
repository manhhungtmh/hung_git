-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2019 at 02:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devfithou_quanlyns`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_doandang`
--

CREATE TABLE `tbl_canbo_doandang` (
  `id` int(11) NOT NULL,
  `id_canbo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tochuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_batdau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_ketthuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_doandang`
--

INSERT INTO `tbl_canbo_doandang` (`id`, `id_canbo`, `chucvu`, `tochuc`, `thoigian_batdau`, `thoigian_ketthuc`) VALUES
(157, 'admin', 'Bí thư Đoàn thanh niên Khoa Công nghệ thông tin', 'Đảng ủy', '04/09/2019', ''),
(158, 'CBGV1', 'Bí thư Đảng ủy Trường Đại học Mở Hà Nội', 'BCH Công đoàn', '26/08/2019', '28/08/2019'),
(159, 'admin', 'Bí thư Đoàn trường', 'Hội đồng trường', '23/08/2019', '19/08/2019'),
(173, 'admin', 'Chủ tịch công Đoàn Trường', 'Đoàn thanh niên', '28/08/2019', '20/09/2019'),
(175, 'admin', 'Chủ tịch công Đoàn Khoa Du Lịch', 'Hội đồng Khoa học và Đào tạo', '04/09/2019', '04/09/2019'),
(176, 'admin', 'Chủ tịch tỉnh', 'Hội đồng Khoa học và Đào tạo', '04/09/2019', '19/09/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_canbo_doandang`
--
ALTER TABLE `tbl_canbo_doandang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_canbo` (`id_canbo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_canbo_doandang`
--
ALTER TABLE `tbl_canbo_doandang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_canbo_doandang`
--
ALTER TABLE `tbl_canbo_doandang`
  ADD CONSTRAINT `tbl_canbo_doandang_ibfk_1` FOREIGN KEY (`id_canbo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
