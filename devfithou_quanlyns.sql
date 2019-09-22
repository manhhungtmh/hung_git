-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 05:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

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
-- Table structure for table `tbl_bomon`
--

CREATE TABLE `tbl_bomon` (
  `id_bo_mon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_bo_mon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_bomon`
--

INSERT INTO `tbl_bomon` (`id_bo_mon`, `ten_bo_mon`) VALUES
('atbm', 'An toàn và bảo mật'),
('av', 'Công nghệ phần mềm'),
('dd', 'Thiết kế dân dụng'),
('nt', 'Thiết kế nội thất'),
('tq', 'Công nghệ đa phương tiện');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo`
--

CREATE TABLE `tbl_canbo` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_dao_tao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_chung_minh` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho_chieu` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mon_chung` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_ton_giao` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_quoc_tich` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_chuyen_mon` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_dan_toc` int(11) NOT NULL,
  `noi_sinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ho_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dien_thoai` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `que_quan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_tai_khoan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_cap_cmt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_cap_cmt` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_so_thue` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dang_hoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_KG_voi_truong` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_ve_truong` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tg_batdau_tapsu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tg_ketthuc_tapsu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bien_che` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_o_hiennay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo`
--

INSERT INTO `tbl_canbo` (`id_can_bo`, `ma_dao_tao`, `ho_ten`, `gioi_tinh`, `ngay_sinh`, `so_chung_minh`, `ho_chieu`, `mon_chung`, `dia_chi`, `id_ton_giao`, `id_quoc_tich`, `id_chuyen_mon`, `id_dan_toc`, `noi_sinh`, `ho_khau`, `dien_thoai`, `email`, `que_quan`, `so_tai_khoan`, `ngay_cap_cmt`, `noi_cap_cmt`, `ma_so_thue`, `dang_hoc`, `ngay_KG_voi_truong`, `ngay_ve_truong`, `tg_batdau_tapsu`, `tg_ketthuc_tapsu`, `bien_che`, `noi_o_hiennay`) VALUES
('admin', 'Đối tượng X', 'Admin', 'Nam', '10/09/1960', '121938127', 'Bắc Ninh', NULL, 'Bắc Ninh', 'khong', '1', '1567097102', 29, 'Nhân hòa, Quễ võ, Bắc Ninh ', 'Bắc ninh', '08712938316', 'nguyenvana@qv1@gmail.com', 'Bắc ninh', '01923021934', '20/03/1912', 'Bắc ninh', '090123123127', 'Hà nội', '07/08/2019', '21/08/2019', '09/09/2019', '24/09/2019', NULL, NULL),
('CBGV1', NULL, 'Nguyễn Văn Hoàng Anh', 'Nam', '02/10/1999', '121938123', 'Bắc Ninh', NULL, 'Bắc Ninh', 'khong', '1', '1567097102', 15, 'Nhân hòa, Quễ võ, Bắc Ninh ', 'Bắc ninh', '8712938312', 'vanlam99qv1@gmail.com', 'Bắc ninh', '1923021930', '2017-09-02', 'Bắc ninh', '90123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CBGV2', '123DBASĐS', 'Nguyễn Văn Hoàng', 'Nam', '02/10/1999', '121938124', 'Bắc Ninh', NULL, 'Bắc Ninh', 'khong', '2', '1566898509', 19, 'Nhân hòa, Quễ võ, Bắc Ninh ', 'Bắc ninh', '8712938313', 'vanlam99qv1@gmail.com', 'Bắc ninh', '1923021931', '24/03/1909', 'Bắc ninh', '90123123124', 'Hà nội', '02/10/2019', '17/09/2019', '17/09/2019', '02/10/2019', 'NĐ 68', 'Bắc Ninh'),
('CBGV3', NULL, 'Trần Mạnh Hùng', 'Nam', '02/10/1999', '121938125', 'Bắc Ninh', NULL, 'Bắc Ninh', 'khong', '2', '2', 12, 'Nhân hòa, Quễ võ, Bắc Ninh ', 'Bắc ninh', '8712938314', 'vanlam99qv1@gmail.com', 'Bắc ninh', '1923021932', '2017-09-04', 'Bắc ninh', '90123123125', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CBGV4', NULL, 'Nguyễn Văn Ngọc Lâm', 'Nữ', '02/10/1999', '121938126', 'Bắc Ninh', NULL, 'Bắc Ninh', 'khong', '1', '1', 13, 'Nhân hòa, Quễ võ, Bắc Ninh ', 'Bắc ninh', '8712938315', 'vanlam99qv1@gmail.com', 'Bắc ninh', '1923021933', '2017-09-05', 'Bắc ninh', '90123123126', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_chedo`
--

CREATE TABLE `tbl_canbo_chedo` (
  `id_canbo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_chedo` int(11) NOT NULL,
  `thoigian_batdau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_ketthuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_chedo`
--

INSERT INTO `tbl_canbo_chedo` (`id_canbo`, `id_chedo`, `thoigian_batdau`, `thoigian_ketthuc`) VALUES
('admin', 1, '01/01/2019', '27/09/2019'),
('admin', 3, '30/05/2018', '26/12/2019'),
('admin', 4, '17/03/2016', '01/02/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_chucdanh`
--

CREATE TABLE `tbl_canbo_chucdanh` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_chuc_danh` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_chucvu`
--

CREATE TABLE `tbl_canbo_chucvu` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_chuc_vu` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_chungchi`
--

CREATE TABLE `tbl_canbo_chungchi` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_chung_chi` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `noi_cap` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_chungchi`
--

INSERT INTO `tbl_canbo_chungchi` (`id_can_bo`, `id_chung_chi`, `thoi_gian`, `noi_cap`) VALUES
('admin', '1567108749', '04/09/2019', 'Hà Nội'),
('admin', '1567108751', '11/09/2019', 'Quảng Ninh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_dats`
--

CREATE TABLE `tbl_canbo_dats` (
  `id_canbo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_deantuyensinh` int(11) NOT NULL,
  `id_nganh` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_batdau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_ketthuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_dats`
--

INSERT INTO `tbl_canbo_dats` (`id_canbo`, `id_deantuyensinh`, `id_nganh`, `thoigian_batdau`, `thoigian_ketthuc`) VALUES
('admin', 1, '51140201', '28/08/2019', '26/09/2019'),
('admin', 2, '42140203', '25/08/2019', '27/08/2019'),
('admin', 3, '42140206', '01/09/2019', '26/09/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_doandang`
--

CREATE TABLE `tbl_canbo_doandang` (
  `id` int(11) NOT NULL,
  `id_canbo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_batdau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_ketthuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_doandang`
--

INSERT INTO `tbl_canbo_doandang` (`id`, `id_canbo`, `chucvu`, `thoigian_batdau`, `thoigian_ketthuc`) VALUES
(157, 'admin', 'Bí thư Đoàn thanh niên Khoa Công nghệ thông tin', '04/09/2019', ''),
(158, 'CBGV1', 'Bí thư Đảng ủy Trường Đại học Mở Hà Nội', '26/08/2019', '28/08/2019'),
(159, 'admin', 'Bí thư Đoàn trường', '23/08/2019', '19/08/2019'),
(173, 'admin', 'Chủ tịch công Đoàn Trường', '28/08/2019', '20/09/2019'),
(175, 'admin', 'Chủ tịch công Đoàn Khoa Du Lịch', '04/09/2019', '04/09/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_donvi`
--

CREATE TABLE `tbl_canbo_donvi` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_don_vi` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_hocham`
--

CREATE TABLE `tbl_canbo_hocham` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_hoc_ham` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_hocham`
--

INSERT INTO `tbl_canbo_hocham` (`id_can_bo`, `id_hoc_ham`, `tg_batdau`, `tg_ketthuc`) VALUES
('admin', '2', '01/01/2017', '342');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_hocvi`
--

CREATE TABLE `tbl_canbo_hocvi` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_hoc_vi` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_hocvi`
--

INSERT INTO `tbl_canbo_hocvi` (`id_can_bo`, `id_hoc_vi`, `tg_batdau`, `tg_ketthuc`) VALUES
('admin', '2', '20/01/2001', '20/01/2005'),
('CBGV3', '2', '20/01/2001', '20/01/2008');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_hopdong`
--

CREATE TABLE `tbl_canbo_hopdong` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_hop_dong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_khenthuong`
--

CREATE TABLE `tbl_canbo_khenthuong` (
  `macb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_thidua_khenthuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_khenthuong`
--

INSERT INTO `tbl_canbo_khenthuong` (`macb`, `id_thidua_khenthuong`) VALUES
('admin', '1568044532'),
('admin', '1568044546'),
('CBGV1', '1568044532'),
('CBGV2', '1568044532'),
('CBGV3', '1568044532'),
('CBGV4', '1568044532');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_nganh`
--

CREATE TABLE `tbl_canbo_nganh` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_nganh` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_nganh`
--

INSERT INTO `tbl_canbo_nganh` (`id_can_bo`, `id_nganh`, `tg_batdau`, `tg_ketthuc`) VALUES
('admin', '42140205', '01/01/2017', ''),
('CBGV1', '42140205', '', ''),
('CBGV2', '42140201', '01/01/2017', ''),
('CBGV3', '51140202', '02/01/2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_qtct`
--

CREATE TABLE `tbl_canbo_qtct` (
  `id` int(20) NOT NULL,
  `id_canbo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_donvi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_bomon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ket_thuc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tg_bat_dau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_quyet_dinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `so_quyet_dinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_chuc_vu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_donvi_cu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_qtct`
--

INSERT INTO `tbl_canbo_qtct` (`id`, `id_canbo`, `id_donvi`, `id_bomon`, `tg_ket_thuc`, `tg_bat_dau`, `ngay_quyet_dinh`, `so_quyet_dinh`, `id_chuc_vu`, `id_donvi_cu`) VALUES
(3, 'CBGV2', '1567590467', 'av', '16/09/2019', '25/09/2019', '25/09/2019', 'QD-BN011', '1567754476', '1567590467'),
(4, 'CBGV2', '1567590467', 'tq', '24/09/2019', '18/09/2019', '', 'QD-BN012', '1', '1567590467'),
(5, 'admin', '1567590467', 'av', '12/06/2019', '16/06/2010', '', 'QD-BN014', '1', '1567590467'),
(6, 'admin', '1567590467', 'av', '', '01/09/2001', '01/08/2001', 'QD-BN015', '1567754476', '1567590467'),
(7, 'admin', '1567590467', 'atbm', '', '23/09/2019', '', '', '1', '1567590467');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_quyhoach`
--

CREATE TABLE `tbl_canbo_quyhoach` (
  `chucvu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_batdau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_ketthuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_canbo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_quyhoach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_canbo_quyhoach`
--

INSERT INTO `tbl_canbo_quyhoach` (`chucvu`, `thoigian_batdau`, `thoigian_ketthuc`, `id_canbo`, `id_quyhoach`) VALUES
('Chủ nhiệm khoa', '17/07/2018', '26/08/2019', 'admin', 8),
('Phó chủ nhiệm khoa', '03/07/2014', '18/07/2018', 'admin', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canbo_truong`
--

CREATE TABLE `tbl_canbo_truong` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_truong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chedo`
--

CREATE TABLE `tbl_chedo` (
  `id_chedo` int(11) NOT NULL,
  `ten_chedo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chedo`
--

INSERT INTO `tbl_chedo` (`id_chedo`, `ten_chedo`, `ghichu`) VALUES
(1, 'Nghỉ không lương', ''),
(2, 'Nghỉ thai sản', ''),
(3, 'Nghỉ ốm', ''),
(4, 'Nghỉ phép', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chucdanh`
--

CREATE TABLE `tbl_chucdanh` (
  `id_chuc_danh` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_danh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_danh_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chucnang`
--

CREATE TABLE `tbl_chucnang` (
  `id` int(11) NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chucnang`
--

INSERT INTO `tbl_chucnang` (`id`, `route`, `maquyen`) VALUES
(1, 'Welcome', 2),
(2, 'danhsachcanbo', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chucvu`
--

CREATE TABLE `tbl_chucvu` (
  `id_chuc_vu` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_chuc_vu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_vu_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chucvu`
--

INSERT INTO `tbl_chucvu` (`id_chuc_vu`, `ten_chuc_vu`, `chuc_vu_vt`) VALUES
('1', 'Giảng viên', 'GV'),
('1567754476', 'Hiệu trưởng', 'HT'),
('1567754492', 'Phó hiệu trưởng', 'PHT'),
('2', 'Cán bộ', 'CB'),
('33456', 'Trưởng bộ môn', 'tbm'),
('432432', 'Chủ nhiệm khoa', 'cnk'),
('6523', 'Phó khoa', 'pk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chungchi`
--

CREATE TABLE `tbl_chungchi` (
  `id_chung_chi` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `chung_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chungchi`
--

INSERT INTO `tbl_chungchi` (`id_chung_chi`, `chung_chi`) VALUES
('1567108748', 'Trung cấp Lý luận Chính trị'),
('1567108749', 'CC Bồi dưỡng theo tiêu chuẩn CDNN GVC (II)'),
('1567108750', 'CC Bồi dưỡng CBQL Khoa, Phòng, TT các trường ĐH, CĐ'),
('1567108751', 'CC NV Sư Phạm'),
('1567108752', 'Chứng chỉ Giáo dục Đại học'),
('1567108753', 'CN BD kiến thức QPAN ĐT4'),
('1567108754', 'CN BD kiến thức QPAN ĐT3'),
('1567108755', 'CN BD kiến thức QPAN ĐT2'),
('1567108756', 'Ngoại ngữ'),
('1567108760', 'BD chuyên môn NV cho GV GDTC'),
('1567491260', 'Cao cấp Lý luận Chính trị');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chuongtrinhdaotao_thongtin`
--

CREATE TABLE `tbl_chuongtrinhdaotao_thongtin` (
  `id` bigint(20) NOT NULL,
  `id_canbo` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_nganh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_chuyenmondaotao` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `namtotnghiep` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namcapbang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghitrenbang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noithamgia_hoctap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgcongnhanbang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nuochoctap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngonngu_sudung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `totnghieploai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noicap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaicmdt` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chuongtrinhdaotao_thongtin`
--

INSERT INTO `tbl_chuongtrinhdaotao_thongtin` (`id`, `id_canbo`, `id_nganh`, `id_chuyenmondaotao`, `namtotnghiep`, `namcapbang`, `ghitrenbang`, `noithamgia_hoctap`, `tgcongnhanbang`, `nuochoctap`, `ngonngu_sudung`, `totnghieploai`, `noicap`, `loaicmdt`) VALUES
(487, 'admin', '51140213', '1567097102', '2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gs'),
(488, 'admin', '51140213', '1567097102', '2012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pgs'),
(489, 'admin', '51140213', '1567097102', '2004', '2004', 'Ghi trên bằng', 'Nhật Bản', '26/08/2019', 'Nhật Bản', 'Tiếng Nhật', NULL, NULL, 'tiensi'),
(490, 'admin', '51140213', '1567097102', '2000', '2000', 'Ghi trên bằng', 'Hà Nội', '17/02/2000', 'Việt Nam', 'Tiếng Việt', NULL, NULL, 'thacsi'),
(491, 'admin', '51140213', '1567097102', '1902', '1999', 'Ghi trên bằng', 'Hà Nội', '16/06/1999', 'Việt Nam', 'Việt Nam', 'Giỏi', NULL, 'daihoc'),
(492, 'admin', '51140213', '1567097102', '1994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hà Nội', 'caodang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chuyenmondaotao`
--

CREATE TABLE `tbl_chuyenmondaotao` (
  `id_chuyen_mon` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `chuyen_mon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuyen_mon_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chuyenmondaotao`
--

INSERT INTO `tbl_chuyenmondaotao` (`id_chuyen_mon`, `chuyen_mon`, `chuyen_mon_vt`) VALUES
('1', 'Luật', 'LUAT'),
('1566898509', 'Công nghệ thông tin', 'LTW'),
('1567097102', 'Công nghệ sinh học', 'TK'),
('1567590801', 'Khoa học máy tính', 'LTW'),
('2', 'Quản trị mạng', 'QTM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_congtac`
--

CREATE TABLE `tbl_congtac` (
  `id_cong_tac` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `cong_tac` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_congtac`
--

INSERT INTO `tbl_congtac` (`id_cong_tac`, `cong_tac`) VALUES
('1', 'Hà Nội'),
('2', 'Bắc Ninh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangcb`
--

CREATE TABLE `tbl_dangcb` (
  `macb` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_trangthai_dang` int(11) NOT NULL,
  `ngaybd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaykt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dantoc`
--

CREATE TABLE `tbl_dantoc` (
  `id_dan_toc` int(11) NOT NULL,
  `dan_toc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dantoc`
--

INSERT INTO `tbl_dantoc` (`id_dan_toc`, `dan_toc`) VALUES
(1, 'Ba Na'),
(2, 'Bố Y'),
(3, 'Brâu'),
(4, 'Bru'),
(5, 'Cao Lan'),
(6, 'Chăm'),
(7, 'Chơ Ro'),
(8, 'Chu Ru'),
(9, 'Chứt'),
(10, 'Co'),
(11, 'Cơ Ho'),
(12, 'Cờ Lao'),
(13, 'Cơ Tu'),
(14, 'Cống'),
(15, 'Dao'),
(16, 'Ê đê'),
(17, 'Gia Rai'),
(18, 'Giáy '),
(19, 'Giẻ Triêng'),
(20, 'Hà Nhì'),
(21, 'Hán - Trung Quốc'),
(22, 'HMông'),
(23, 'Hoa'),
(24, 'Hrê'),
(25, 'Khác'),
(26, 'Kháng'),
(27, 'Khmer'),
(28, 'Khơ Mú'),
(29, 'Kinh'),
(30, 'La Chí'),
(31, 'La Ha'),
(32, 'La Hủ'),
(33, 'Lào'),
(34, 'Lô Lô'),
(35, 'Lự'),
(36, 'Mạ'),
(37, 'Mảng'),
(38, 'MNông'),
(39, 'Mường'),
(40, 'Ngái'),
(41, 'Nùng'),
(42, 'Ơđu'),
(43, 'Pà Thẻn'),
(44, 'Phù Lá'),
(45, 'Pu Péo'),
(46, 'khác 2'),
(47, 'Ra Glai'),
(48, 'Rơ Măm'),
(49, 'Sán Chay'),
(50, 'San Chí'),
(51, 'Sán Dìu'),
(52, 'Si La'),
(53, 'Tà Ôi'),
(54, 'Tày'),
(55, 'Thái'),
(56, 'Thổ'),
(57, 'Xinh Mun'),
(58, 'Xơ Đăng'),
(59, 'XTiêng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deantuyensinh`
--

CREATE TABLE `tbl_deantuyensinh` (
  `id_deantuyensinh` int(11) NOT NULL,
  `ten_deantuyensinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `he_deantuyensinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nam_deantuyensinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_deantuyensinh`
--

INSERT INTO `tbl_deantuyensinh` (`id_deantuyensinh`, `ten_deantuyensinh`, `he_deantuyensinh`, `nam_deantuyensinh`) VALUES
(1, 'Đề án tuyển sinh', 'daihoc', 2018),
(2, 'Đề án tuyển sinh', 'thacsi', 2015),
(3, 'Đề án tuyển sinh', 'tiensi', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donvi`
--

CREATE TABLE `tbl_donvi` (
  `id_don_vi` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_don_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `don_vi_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_donvi`
--

INSERT INTO `tbl_donvi` (`id_don_vi`, `ten_don_vi`, `don_vi_vt`) VALUES
('1567590467', 'Khoa Công nghệ thông tin', '4324231'),
('1567755949', 'Khoa Tài chính - Ngân Hàng', 'kk'),
('1567755954', 'Khoa Luật', 'HTg'),
('2257257257', 'Khoa Tạo dáng công nghiệp', 'tdcn'),
('2572572572', 'Khoa Kinh tế', 'kt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hocham`
--

CREATE TABLE `tbl_hocham` (
  `id_hoc_ham` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `hoc_ham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoc_ham_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hocham`
--

INSERT INTO `tbl_hocham` (`id_hoc_ham`, `hoc_ham`, `hoc_ham_vt`) VALUES
('1', 'Giáo sư', 'GS'),
('2', 'Phó giáo sư', 'PGS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hocvi`
--

CREATE TABLE `tbl_hocvi` (
  `id_hoc_vi` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `hoc_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoc_vi_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hocvi`
--

INSERT INTO `tbl_hocvi` (`id_hoc_vi`, `hoc_vi`, `hoc_vi_vt`) VALUES
('1', 'Thạc sĩ', 'ThS'),
('2', 'Tiến sĩ', 'TS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hopdong`
--

CREATE TABLE `tbl_hopdong` (
  `id_hop_dong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `hop_dong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_loai_hop_dong` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaihopdong`
--

CREATE TABLE `tbl_loaihopdong` (
  `id_loai_hop_dong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `loai_hop_dong` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_namtn_chuyenmondaotao`
--

CREATE TABLE `tbl_namtn_chuyenmondaotao` (
  `id_namcmdt` int(11) NOT NULL,
  `ten_namcmdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_hien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_namtn_chuyenmondaotao`
--

INSERT INTO `tbl_namtn_chuyenmondaotao` (`id_namcmdt`, `ten_namcmdt`, `view_hien`, `ghichu`) VALUES
(1, 'Năm phong Phó giáo sư', 'pgs', 2),
(2, 'Năm tốt nghiệp Tiến sỹ', 'tiensi', 3),
(3, 'Năm tốt nghiệp Thạc sỹ 1', 'thacsi', 4),
(4, 'Năm tốt nghiệp Đại học 1  ', 'daihoc', 5),
(5, 'Năm tốt nghiệp Cao đẳng', 'caodang', 6),
(6, 'Năm phong Giáo sư', 'gs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ngachgiangvien`
--

CREATE TABLE `tbl_ngachgiangvien` (
  `id_ngach_giang_vien` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngach_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_ngachgiangvien`
--

INSERT INTO `tbl_ngachgiangvien` (`id_ngach_giang_vien`, `ngach`, `ngach_vt`) VALUES
('1568222910', 'Giáo viên mầm non hạng III', ''),
('1568222921', 'Giáo viên dự bị đại học hạng I', ''),
('1568222928', 'Giáo viên dự bị đại học hạng II', ''),
('1568222937', ' Giảng viên giáo dục nghề nghiệp cao cấp (hạng I)', ''),
('1568222945', 'Giảng viên giáo dục nghề nghiệp lý thuyết (hạng III)', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ngach_canbo`
--

CREATE TABLE `tbl_ngach_canbo` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_ngach_giang_vien` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_batdau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tg_ketthuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nganh`
--

CREATE TABLE `tbl_nganh` (
  `id_nganh` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `nganh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_nhom_nganh` char(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nganh`
--

INSERT INTO `tbl_nganh` (`id_nganh`, `nganh`, `ghi_chu`, `id_nhom_nganh`) VALUES
('42140201', 'Sư phạm mầm non', '', '4'),
('42140202', 'Sư phạm tiểu học', '', '4'),
('42140203', 'Sư phạm chuyên biệt', '', '4'),
('42140204', 'Sư phạm mỹ thuật', '', '4'),
('42140205', 'Sư phạm âm nhạc', '', '4'),
('42140206', 'Sư phạm thể dục thể thao', '', '4'),
('51140201', 'Giáo dục mầm non', '', '5'),
('51140202', 'Giáo dục Tiểu học', '', '5'),
('51140203', 'Giáo dục Đặc biệt', '', '5'),
('51140204', 'Giáo dục Công dân', '', '5'),
('51140206', 'Giáo dục Thể chất', '', '5'),
('51140207', 'Huấn luyện thể thao*', '', '5'),
('51140208', 'Giáo dục Quốc phòng - An ninh', '', '5'),
('51140209', 'Sư phạm toán học', '', '5'),
('51140210', 'Sư phạm Tin học', '', '5'),
('51140211', 'Sư phạm Vật lý', '', '5'),
('51140212', 'Sư phạm Hóa học', '', '5'),
('51140213', 'Sư phạm Sinh học', '', '5'),
('51140214', 'Sư phạm kỹ thuật công nghiệp', '', '5'),
('51140215', 'Sư phạm kỹ thuật nông nghiệp', '', '5'),
('51140216', 'Sư phạm Kinh tế gia đình', '', '5'),
('51140217', 'Sư phạm Ngữ văn', '', '5'),
('51140218', 'Sư phạm Lịch sử', '', '5'),
('51140219', 'Sư phạm Địa lý', '', '5'),
('51140220', 'Sư phạm Công tác Đội thiếu niên Tiền phong HCM', '', '5'),
('51140221', 'Sư phạm Âm nhạc', '', '5'),
('51140222', 'Sư phạm Mỹ thuật', '', '5'),
('51140223', 'Sư phạm Tiếng Bahna', '', '5'),
('51140224', 'Sư phạm Tiếng Êđê', '', '5'),
('51140226', 'Sư phạm Tiếng Khmer', 'Ngành thí điểm', '5'),
('51140229', 'Sư phạm Tiếng M\'nông', '', '5'),
('51140230', 'Sư phạm Tiếng Xêđăng', '', '5'),
('51140231', 'Sư phạm Tiếng Anh', '', '5'),
('51140249', 'Sư phạm Lịch sử và Địa lý', 'Ngành thí điểm', '5'),
('7140101', 'Giáo dục học', '', '7'),
('7140102', 'Khoa học giáo dục', 'Ngành thí điểm', '7'),
('7140103', 'Quản trị chất lượng giáo dục', 'Ngành thí điểm', '7'),
('7140114', 'Quản lý giáo dục', '', '7'),
('7140115', 'Công nghệ giáo dục', 'Ngành thí điểm', '7'),
('7140116', 'Quản trị công nghệ giáo dục', 'Ngành thí điểm', '7'),
('7140117', 'Quản trị trường học', 'Ngành thí điểm', '7'),
('7140201', 'Giáo dục mầm non', '', '7'),
('7140202', 'Giáo dục Tiểu học', '', '7'),
('7140203', 'Giáo dục Đặc biệt', '', '7'),
('7140204', 'Giáo dục Công dân', '', '7'),
('7140205', 'Giáo dục Chính trị', '', '7'),
('7140206', 'Giáo dục Thể chất', '', '7'),
('7140207', 'Huấn luyện thể thao', '', '7'),
('7140208', 'Giáo dục Quốc phòng - An ninh', '', '7'),
('7140209', 'Sư phạm Toán học', '', '7'),
('7140210', 'Sư phạm Tin học', '', '7'),
('7140211', 'Sư phạm Vật lý', '', '7'),
('7140212', 'Sư phạm Hoá học', '', '7'),
('7140213', 'Sư phạm Sinh học', '', '7'),
('7140214', 'Sư phạm Kỹ thuật công nghiệp', '', '7'),
('7140215', 'Sư phạm Kỹ thuật nông nghiệp', '', '7'),
('7140217', 'Sư phạm Ngữ văn', '', '7'),
('7140218', 'Sư phạm Lịch sử', '', '7'),
('7140219', 'Sư phạm Địa lý', '', '7'),
('7140221', 'Sư phạm Âm nhạc', '', '7'),
('7140222', 'Sư phạm Mỹ thuật', '', '7'),
('7140223', 'Sư phạm Tiếng Bana', '', '7'),
('7140224', 'Sư phạm Tiếng Êđê', '', '7'),
('7140225', 'Sư phạm Tiếng Jrai', '', '7'),
('7140226', 'Sư phạm Tiếng Khmer', '', '7'),
('7140227', 'Sư phạm Tiếng H\'mong', '', '7'),
('7140228', 'Sư phạm Tiếng Chăm', '', '7'),
('7140229', 'Sư phạm Tiếng M\'nông', '', '7'),
('7140230', 'Sư phạm Tiếng Xê đăng', '', '7'),
('7140231', 'Sư phạm Tiếng Anh', '', '7'),
('7140232', 'Sư phạm Tiếng Nga', '', '7'),
('7140233', 'Sư phạm Tiếng Pháp', '', '7'),
('7140234', 'Sư phạm Tiếng Trung Quốc', '', '7'),
('7140235', 'Sư phạm Tiếng Đức', '', '7'),
('7140236', 'Sư phạm Tiếng Nhật', '', '7'),
('7140237', 'Sư phạm Tiếng Hàn Quốc', '', '7'),
('7140245', 'Sư phạm nghệ thuật ', '', '7'),
('7140246', 'Sư phạm công nghệ', '', '7'),
('7140247', 'Sư phạm khoa học tự nhiên', '', '7'),
('7140248', 'Giáo dục pháp luật', 'Ngành thí điểm', '7'),
('7140249', 'Sư phạm Lịch sử - Địa lí', 'Ngành thí điểm', '7'),
('7140250', 'Sư phạm Tin học và Công nghệ tiểu học', 'Ngành thí điểm', '7'),
('7149001', 'Kinh tế giáo dục', 'Ngành thí điểm', '7'),
('7210101', 'Lý luận, lịch sử và phê bình mỹ thuật', '', '7'),
('7210103', 'Hội hoạ', '', '7'),
('7210104', 'Đồ hoạ', '', '7'),
('7210105', 'Điêu khắc', '', '7'),
('7210107', 'Gốm', '', '7'),
('7210110', 'Mỹ thuật đô thị', '', '7'),
('7210201', 'Âm nhạc học', '', '7'),
('7210203', 'Sáng tác âm nhạc', '', '7'),
('7210204', 'Chỉ huy âm nhạc', '', '7'),
('7210205', 'Thanh nhạc', '', '7'),
('7210207', 'Biểu diễn nhạc cụ phương tây', '', '7'),
('7210208', 'Piano', '', '7'),
('7210209', 'Nhạc Jazz', '', '7'),
('7210210', 'Biểu diễn nhạc cụ truyền thống', '', '7'),
('7210221', 'Lý luận, lịch sử và phê bình sân khấu', '', '7'),
('7210225', 'Biên kịch sân khấu', '', '7'),
('7210226', 'Diễn viên sân khấu kịch hát', '', '7'),
('7210227', 'Đạo diễn sân khấu', '', '7'),
('7210231', 'Lý luận, lịch sử và phê bình điện ảnh, truyền hình', '', '7'),
('7210233', 'Biên kịch điện ảnh, truyền hình', '', '7'),
('7210234', 'Diễn viên kịch, điện ảnh - truyền hình', '', '7'),
('7210235', 'Đạo diễn điện ảnh, truyền hình', '', '7'),
('7210236', 'Quay phim ', '', '7'),
('7210241', 'Lý luận, lịch sử và phê bình múa', '', '7'),
('7210242', 'Diễn viên múa', '', '7'),
('7210243', 'Biên đạo múa', '', '7'),
('7210244', 'Huấn luyện múa', '', '7'),
('7210301', 'Nhiếp ảnh', '', '7'),
('7210302', 'Công nghệ điện ảnh, truyền hình', '', '7'),
('7210303', 'Thiết kế âm thanh, ánh sáng', '', '7'),
('7210402', 'Thiết kế công nghiệp', '', '7'),
('7210403', 'Thiết kế đồ họa', '', '7'),
('7210404', 'Thiết kế thời trang', '', '7'),
('7210406', 'Thiết kế mỹ thuật sân khấu, điện ảnh', '', '7'),
('7220101', 'Tiếng Việt và văn hoá Việt Nam', '', '7'),
('7220104', 'Hán Nôm', '', '7'),
('7220105', 'Ngôn ngữ Jrai', '', '7'),
('7220106', 'Ngôn ngữ Khmer', '', '7'),
('7220107', 'Ngôn ngữ H\'mong', '', '7'),
('7220108', 'Ngôn ngữ Chăm', '', '7'),
('7220110', 'Sáng tác văn học', '', '7'),
('7220112', 'Văn hoá các dân tộc thiểu số Việt Nam', '', '7'),
('7220201', 'Ngôn ngữ Anh', '', '7'),
('7220202', 'Ngôn ngữ Nga', '', '7'),
('7220203', 'Ngôn ngữ Pháp', '', '7'),
('7220204', 'Ngôn ngữ Trung Quốc', '', '7'),
('7220205', 'Ngôn ngữ Đức', '', '7'),
('7220206', 'Ngôn ngữ Tây Ban Nha', '', '7'),
('7220207', 'Ngôn ngữ Bồ Đào Nha', '', '7'),
('7220208', 'Ngôn ngữ Italia', '', '7'),
('7220209', 'Ngôn ngữ Nhật', '', '7'),
('7220210', 'Ngôn ngữ Hàn Quốc', '', '7'),
('7220211', 'Ngôn ngữ Ảrập', '', '7'),
('7229001', 'Triết học', '', '7'),
('7229008', 'Chủ nghĩa xã hội khoa học', '', '7'),
('7229009', 'Tôn giáo học', '', '7'),
('7229010', 'Lịch sử', '', '7'),
('7229020', 'Ngôn ngữ học', '', '7'),
('7229030', 'Văn học', '', '7'),
('7229040', 'Văn hoá học', '', '7'),
('7229042', 'Quản lý văn hoá', '', '7'),
('7229045', 'Gia đình học', '', '7'),
('7310101', 'Kinh tế', '', '7'),
('7310102', 'Kinh tế chính trị', '', '7'),
('7310104', 'Kinh tế đầu tư', '', '7'),
('7310105', 'Kinh tế phát triển', '', '7'),
('7310106', 'Kinh tế quốc tế', '', '7'),
('7310107', 'Thống kê kinh tế', '', '7'),
('7310108', 'Toán kinh tế', '', '7'),
('7310109', 'Kinh tế tài chính', 'Ngành thí điểm', '7'),
('7310110', 'Quản lý kinh tế', 'Ngành thí điểm', '7'),
('7310201', 'Chính trị học', '', '7'),
('7310202', 'Xây dựng Đảng và chính quyền nhà nước', '', '7'),
('7310205', 'Quản lý nhà nước', '', '7'),
('7310206', 'Quan hệ quốc tế', '', '7'),
('7310301', 'Xã hội học', '', '7'),
('7310302', 'Nhân học', '', '7'),
('7310399', 'Giới và phát triển', 'Ngành thí điểm', '7'),
('7310401', 'Tâm lý học', '', '7'),
('7310402', 'Tham vấn học đường', 'Ngành thí điểm', '7'),
('7310403', 'Tâm lý học giáo dục', '', '7'),
('7310501', 'Địa lý học', '', '7'),
('7310601', 'Quốc tế học', '', '7'),
('7310602', 'Châu Á học', '', '7'),
('7310607', 'Thái Bình Dương học', '', '7'),
('7310608', 'Đông phương học', '', '7'),
('7310612', 'Trung Quốc học', '', '7'),
('7310613', 'Nhật Bản học', '', '7'),
('7310614', 'Hàn Quốc học', '', '7'),
('7310620', 'Đông Nam Á học', '', '7'),
('7310630', 'Việt Nam học', '', '7'),
('7320101', 'Báo chí', '', '7'),
('7320104', 'Truyền thông đa phương tiện', '', '7'),
('7320105', 'Truyền thông đại chúng', '', '7'),
('7320106', 'Công nghệ truyền thông', '', '7'),
('7320107', 'Truyền thông quốc tế', '', '7'),
('7320108', 'Quan hệ công chúng', '', '7'),
('7320110', 'Quảng cáo', '', '7'),
('7320201', 'Thông tin - thư viện ', '', '7'),
('7320205', 'Quản lý thông tin', '', '7'),
('7320303', 'Lưu trữ học', '', '7'),
('7320305', 'Bảo tàng học', '', '7'),
('7320401', 'Xuất bản', '', '7'),
('7320402', 'Kinh doanh xuất bản phẩm', '', '7'),
('7340101', 'Quản trị kinh doanh', '', '7'),
('7340115', 'Marketing', '', '7'),
('7340116', 'Bất động sản', '', '7'),
('7340120', 'Kinh doanh quốc tế ', '', '7'),
('7340121', 'Kinh doanh thương mại', '', '7'),
('7340122', 'Thương mại điện tử', '', '7'),
('7340123', 'Kinh doanh thời trang và dệt may', '', '7'),
('7340201', 'Tài chính – Ngân hàng', '', '7'),
('7340204', 'Bảo hiểm', '', '7'),
('7340301', 'Kế toán', '', '7'),
('7340302', 'Kiểm toán', '', '7'),
('7340401', 'Khoa học quản lý', '', '7'),
('7340403', 'Quản lý công', '', '7'),
('7340404', 'Quản trị nhân lực', '', '7'),
('7340405', 'Hệ thống thông tin quản lý ', '', '7'),
('7340406', 'Quản trị văn phòng', '', '7'),
('7340408', 'Quan hệ lao động', '', '7'),
('7340409', 'Quản lý dự án', '', '7'),
('7340410', 'Quản trị công nghệ truyền thông', 'Ngành thí điểm', '7'),
('7340411', 'Quản lý và phát triển nguồn nhân lực', 'Ngành thí điểm', '7'),
('7340418', 'Quản lý và phát triển du lịch', 'Ngành thí điểm', '7'),
('7380101', 'Luật', '', '7'),
('7380102', 'Luật hiến pháp và luật hành chính', '', '7'),
('7380103', 'Luật dân sự và tố tụng dân sự', '', '7'),
('7380104', 'Luật hình sự và tố tụng hình sự', '', '7'),
('7380107', 'Luật kinh tế', '', '7'),
('7380108', 'Luật quốc tế', '', '7'),
('7380109', 'Luật thương mại quốc tế', 'Ngành thí điểm', '7'),
('7380110', 'Luật kinh doanh', 'Ngành thí điểm', '7'),
('7420101', 'Sinh học', '', '7'),
('7420201', 'Công nghệ sinh học', '', '7'),
('7420202', 'Kỹ thuật sinh học', '', '7'),
('7420203', 'Sinh học ứng dụng', '', '7'),
('7440101', 'Thiên văn học', '', '7'),
('7440102', 'Vật lý học', '', '7'),
('7440106', 'Vật lý nguyên tử và hạt nhân', '', '7'),
('7440110', 'Cơ học', '', '7'),
('7440112', 'Hoá học', '', '7'),
('7440122', 'Khoa học vật liệu', '', '7'),
('7440201', 'Địa chất học', '', '7'),
('7440212', 'Bản đồ học', '', '7'),
('7440217', 'Địa lý tự nhiênkỹ thuật', '', '7'),
('7440221', 'Khí tượng và khí hậu học', '', '7'),
('7440224', 'Thuỷ văn học', '', '7'),
('7440225', 'Tài nguyên và môi trường nước', 'Ngành thí điểm', '7'),
('7440228', 'Hải dương học', '', '7'),
('7440230', 'Khoa học thông tin địa không gian', 'Ngành thí điểm', '7'),
('7440298', 'Biến đổi khí hậu và phát triển bền vững', 'Ngành thí điểm', '7'),
('7440299', 'Khí tượng thủy văn biển', 'Ngành thí điểm', '7'),
('7440301', 'Khoa học môi trường', '', '7'),
('7460101', 'Toán học', '', '7'),
('7460107', 'Khoa học tính toán', '', '7'),
('7460112', 'Toán ứng dụng', '', '7'),
('7460115', 'Toán cơ', '', '7'),
('7460117', 'Toán tin', '', '7'),
('7460201', 'Thống kê', '', '7'),
('7480101', 'Khoa học máy tính', '', '7'),
('7480102', 'Mạng máy tính và truyền thông dữ liệu', '', '7'),
('7480103', 'Kỹ thuật phần mềm', '', '7'),
('7480104', 'Hệ thống thông tin', '', '7'),
('7480106', 'Kỹ thuật máy tính', '', '7'),
('7480108', 'Công nghệ kỹ thuật máy tính', '', '7'),
('7480109', 'Khoa học dữ liệu', 'Ngành thí điểm', '7'),
('7480110', 'Máy tính và khoa học thông tin', 'Ngành thí điểm', '7'),
('7480201', 'Công nghệ thông tin', '', '7'),
('7480202', 'An toàn thông tin', '', '7'),
('7480203', 'Kỹ thuật dữ liệu', 'Ngành thí điểm', '7'),
('7510101', 'Công nghệ kỹ thuật kiến trúc ', '', '7'),
('7510102', 'Công nghệ kỹ thuật công trình xây dựng', '', '7'),
('7510103', 'Công nghệ kỹ thuật xây dựng ', '', '7'),
('7510104', 'Công nghệ kỹ thuật giao thông', '', '7'),
('7510105', 'Công nghệ kỹ thuật vật liệu xây dựng', '', '7'),
('7510106', 'Hệ thống kỹ thuật công trình xây dựng', 'Ngành thí điểm', '7'),
('7510201', 'Công nghệ kỹ thuật cơ khí', '', '7'),
('7510202', 'Công nghệ chế tạo máy', '', '7'),
('7510203', 'Công nghệ kỹ thuật cơ điện tử', '', '7'),
('7510205', 'Công nghệ kỹ thuật ô tô', '', '7'),
('7510206', 'Công nghệ kỹ thuật nhiệt', '', '7'),
('7510207', 'Công nghệ kỹ thuật tàu thủy', '', '7'),
('7510208', 'Năng lượng tái tạo', 'Ngành thí điểm', '7'),
('7510209', 'Robot và trí tuệ nhân tạo', 'Ngành thí điểm', '7'),
('7510211', 'Bảo dưỡng công nghiệp', '', '7'),
('7510300', 'Công nghệ kỹ thuật điện tử - tin học công nghiệp', 'Ngành thí điểm', '7'),
('7510301', 'Công nghệ kỹ thuật điện, điện tử', '', '7'),
('7510302', 'Công nghệ kỹ thuật điện tử - viễn thông', '', '7'),
('7510303', 'Công nghệ kỹ thuật điều khiển và tự động hóa', '', '7'),
('7510401', 'Công nghệ kỹ thuật hoá học', '', '7'),
('7510402', 'Công nghệ vật liệu', '', '7'),
('7510403', 'Công nghệ kỹ thuật năng lượng', 'Ngành thí điểm', '7'),
('7510406', 'Công nghệ kỹ thuật môi trường', '', '7'),
('7510407', 'Công nghệ kỹ thuật hạt nhân', '', '7'),
('7510601', 'Quản lý công nghiệp', '', '7'),
('7510602', 'Quản lý năng lượng', 'Ngành thí điểm', '7'),
('7510604', 'Kinh tế công nghiệp', '', '7'),
('7510605', 'Logistics và Quản lý chuỗi cung ứng', '', '7'),
('7510701', 'Công nghệ dầu khí và khai thác dầu', '', '7'),
('7510801', 'Công nghệ kỹ thuật in', '', '7'),
('7519001', 'Công nghệ hàng không vũ trụ', 'Ngành thí điểm', '7'),
('7519002', 'Công nghệ nông nghiệp', 'Ngành thí điểm', '7'),
('7520101', 'Cơ kỹ thuật ', '', '7'),
('7520103', 'Kỹ thuật cơ khí', '', '7'),
('7520114', 'Kỹ thuật cơ điện tử', '', '7'),
('7520115', 'Kỹ thuật nhiệt', '', '7'),
('7520116', 'Kỹ thuật cơ khí động lực', '', '7'),
('7520117', 'Kỹ thuật công nghiệp', '', '7'),
('7520118', 'Kỹ thuật hệ thống công nghiệp', '', '7'),
('7520120', 'Kỹ thuật hàng không', '', '7'),
('7520121', 'Kỹ thuật không gian', '', '7'),
('7520122', 'Kỹ thuật tàu thuỷ', '', '7'),
('7520130', 'Kỹ thuật ô tô', '', '7'),
('7520137', 'Kỹ thuật in', '', '7'),
('7520201', 'Kỹ thuật điện', '', '7'),
('7520204', 'Kỹ thuật ra đa- dẫn đường', '', '7'),
('7520205', 'Kỹ thuật thuỷ âm', '', '7'),
('7520207', 'Kỹ thuật điện tử - viễn thông', '', '7'),
('7520212', 'Kỹ thuật y sinh', '', '7'),
('7520216', 'Kỹ thuật điều khiển và tự động hoá', '', '7'),
('7520217', 'Kỹ thuật Robot', 'Ngành thí điểm', '7'),
('7520301', 'Kỹ thuật hoá học', '', '7'),
('7520309', 'Kỹ thuật vật liệu ', '', '7'),
('7520310', 'Kỹ thuật vật liệu kim loại', '', '7'),
('7520312', 'Kỹ thuật dệt', '', '7'),
('7520320', 'Kỹ thuật môi trường', '', '7'),
('7520401', 'Vật lý kỹ thuật', '', '7'),
('7520402', 'Kỹ thuật hạt nhân', '', '7'),
('7520406', 'Kỹ thuật năng lượng', 'Ngành thí điểm', '7'),
('7520501', 'Kỹ thuật địa chất', '', '7'),
('7520502', 'Kỹ thuật địa vật lý', '', '7'),
('7520503', 'Kỹ thuật trắc địa - bản đồ', '', '7'),
('7520601', 'Kỹ thuật mỏ', '', '7'),
('7520602', 'Kỹ thuật thăm dò và khảo sát', '', '7'),
('7520604', 'Kỹ thuật dầu khí', '', '7'),
('7520607', 'Kỹ thuật tuyển khoáng', '', '7'),
('7529001', 'Kỹ thuật biển', '', '7'),
('7540101', 'Công nghệ thực phẩm', '', '7'),
('7540102', 'Kỹ thuật thực phẩm', '', '7'),
('7540104', 'Công nghệ sau thu hoạch', '', '7'),
('7540105', 'Công nghệ chế biến thuỷ sản', '', '7'),
('7540106', 'Đảm bảo chất lượng và an toàn thực phẩm', '', '7'),
('7540108', 'Công nghệ và kinh doanh thực phẩm', 'Ngành thí điểm', '7'),
('7540202', 'Công nghệ sợi, dệt', '', '7'),
('7540203', 'Công nghệ vật liệu dệt, may', '', '7'),
('7540204', 'Công nghệ dệt, may ', '', '7'),
('7540206', 'Công nghệ da giày ', '', '7'),
('7540209', 'Công nghệ may', 'Ngành thí điểm', '7'),
('7549001', 'Công nghệ chế biến lâm sản', '', '7'),
('7549002', 'Kỹ nghệ gỗ và nội thất', 'Ngành thí điểm', '7'),
('7580101', 'Kiến trúc', '', '7'),
('7580102', 'Kiến trúc cảnh quan', '', '7'),
('7580103', 'Kiến trúc nội thất', '', '7'),
('7580104', 'Kiến trúc đô thị', '', '7'),
('7580105', 'Quy hoạch vùng và đô thị', '', '7'),
('7580106', 'Quản lý đô thị và công trình', '', '7'),
('7580108', 'Thiết kế nội thất', '', '7'),
('7580111', 'Bảo tồn di sản kiến trúc - đô thị', '', '7'),
('7580112', 'Đô thị học', '', '7'),
('7580201', 'Kỹ thuật xây dựng', '', '7'),
('7580202', 'Kỹ thuật xây dựng công trình thuỷ ', '', '7'),
('7580203', 'Kỹ thuật xây dựng công trình biển', '', '7'),
('7580205', 'Kỹ thuật xây dựng công trình giao thông', '', '7'),
('7580210', 'Kỹ thuật cơ sở hạ tầng', '', '7'),
('7580211', 'Địa kỹ thuật xây dựng', '', '7'),
('7580212', 'Kỹ thuật tài nguyên nước', '', '7'),
('7580213', 'Kỹ thuật cấp thoát nước ', '', '7'),
('7580301', 'Kinh tế xây dựng', '', '7'),
('7580302', 'Quản lý xây dựng', '', '7'),
('7620101', 'Nông nghiệp', '', '7'),
('7620102', 'Khuyến nông', '', '7'),
('7620103', 'Khoa học đất', '', '7'),
('7620105', 'Chăn nuôi', '', '7'),
('7620106', 'Chăn nuôi thú y', 'Ngành thí điểm', '7'),
('7620108', 'Phân bón và dinh dưỡng cây trồng', 'Ngành thí điểm', '7'),
('7620109', 'Nông học', '', '7'),
('7620110', 'Khoa học cây trồng', '', '7'),
('7620112', 'Bảo vệ thực vật', '', '7'),
('7620113', 'Công nghệ rau hoa quả và cảnh quan', '', '7'),
('7620114', 'Kinh doanh nông nghiệp', '', '7'),
('7620115', 'Kinh tế nông nghiệp', '', '7'),
('7620116', 'Phát triển nông thôn', '', '7'),
('7620118', 'Nông nghiệp công nghệ cao', 'Ngành thí điểm', '7'),
('7620201', 'Lâm học', '', '7'),
('7620202', 'Lâm nghiệp đô thị', '', '7'),
('7620205', 'Lâm sinh', '', '7'),
('7620211', 'Quản lý tài nguyên rừng', '', '7'),
('7620301', 'Nuôi trồng thuỷ sản', '', '7'),
('7620302', 'Bệnh học thủy sản ', '', '7'),
('7620303', 'Khoa học thủy sản', '', '7'),
('7620304', 'Khai thác thuỷ sản', '', '7'),
('7620305', 'Quản lý thủy sản', '', '7'),
('7640101', 'Thú y', '', '7'),
('7720101', 'Y khoa', 'Ngành thí điểm', '7'),
('7720110', 'Y học dự phòng', 'Ngành thí điểm', '7'),
('7720115', 'Y học cổ truyền', 'Ngành thí điểm', '7'),
('7720201', 'Dược học', 'Ngành thí điểm', '7'),
('7720203', 'Hoá dược', '', '7'),
('7720301', 'Điều dưỡng', 'Ngành thí điểm', '7'),
('7720302', 'Hộ sinh', 'Ngành thí điểm', '7'),
('7720399', 'Dụng cụ chỉnh hình chân tay giả', 'Ngành thí điểm', '7'),
('7720401', 'Dinh dưỡng', 'Ngành thí điểm', '7'),
('7720497', 'Dinh dưỡng và Khoa học thực phẩm', 'Ngành thí điểm', '7'),
('7720501', 'Răng - Hàm - Mặt', 'Ngành thí điểm', '7'),
('7720502', 'Kỹ thuật phục hình răng', 'Ngành thí điểm', '7'),
('7720601', 'Kỹ thuật xét nghiệm y học', 'Ngành thí điểm', '7'),
('7720602', 'Kỹ thuật hình ảnh y học', 'Ngành thí điểm', '7'),
('7720603', 'Kỹ thuật phục hồi chức năng', 'Ngành thí điểm', '7'),
('7720699', 'Khúc xạ Nhãn khoa', 'Ngành thí điểm', '7'),
('7720701', 'Y tế công cộng', '', '7'),
('7720801', 'Tổ chức và quản lý y tế', '', '7'),
('7720802', 'Quản lý bệnh viện', '', '7'),
('7729001', 'Y sinh học thể dục thể thao', '', '7'),
('7760101', 'Công tác xã hội', '', '7'),
('7760102', 'Công tác thanh thiếu niên', '', '7'),
('7760103', 'Hỗ trợ giáo dục người khuyết tật', '', '7'),
('7810101', 'Du lịch', '', '7'),
('7810102', 'Du lịch điện tử', 'Ngành thí điểm', '7'),
('7810103', 'Quản trị dịch vụ du lịch và lữ hành', '', '7'),
('7810201', 'Quản trị khách sạn', '', '7'),
('7810202', 'Quản trị nhà hàng và dịch vụ ăn uống', '', '7'),
('7810301', 'Quản lý thể dục thể thao', '', '7'),
('7810302', '	Golf', 'Ngành thí điểm', '7'),
('7810501', 'Kinh tế gia đình', '', '7'),
('7810502', 'Kỹ thuật nữ công', 'Ngành thí điểm', '7'),
('7840101', 'Khai thác vận tải', '', '7'),
('7840102', 'Quản lý hoạt động bay', '', '7'),
('7840104', 'Kinh tế vận tải', '', '7'),
('7840106', 'Khoa học hàng hải', '', '7'),
('7850101', 'Quản lý tài nguyên và môi trường', '', '7'),
('7850102', 'Kinh tế tài nguyên thiên nhiên', '', '7'),
('7850103', 'Quản lý đất đai ', '', '7'),
('7850195', 'Quản lý tổng hợp tài nguyên nước', 'Ngành thí điểm', '7'),
('7850196', 'Quản lý tổng hợp tài nguyên khoáng sản', 'Ngành thí điểm', '7'),
('7850197', 'Quản lý tài nguyên và môi trường biển đảo', 'Ngành thí điểm', '7'),
('7850198', 'Quản lý tài nguyên nước', 'Ngành thí điểm', '7'),
('7850199', 'Quản lý biển', 'Ngành thí điểm', '7'),
('7850201', 'Bảo hộ lao động', '', '7'),
('7860101', 'Trinh sát an ninh', '', '7'),
('7860102', 'Trinh sát cảnh sát', '', '7'),
('7860104', 'Điều tra hình sự', '', '7'),
('7860108', 'Kỹ thuật hình sự', '', '7'),
('7860109', 'Quản lý nhà nước về an ninh trật tự', '', '7'),
('7860110', 'Quản lý trật tự an toàn giao thông', '', '7'),
('7860111', 'Thi hành án hình sự và hỗ trợ tư pháp', '', '7'),
('7860112', 'Tham mưu, chỉ huy công an nhân dân', '', '7'),
('7860113', 'Phòng cháy chữa cháy và cứu nạn cứu hộ ', '', '7'),
('7860116', 'Hậu cần công an nhân dân', '', '7'),
('7860117', 'Tình báo an ninh', '', '7'),
('7860201', 'Chỉ huy tham mưu Lục quân', '', '7'),
('7860202', 'Chỉ huy tham mưu Hải quân', '', '7'),
('7860203', 'Chỉ huy tham mưu Không quân', '', '7'),
('7860204', 'Chỉ huy tham mưu Phòng không', '', '7'),
('7860205', 'Chỉ huy tham mưu Pháo binh', '', '7'),
('7860206', 'Chỉ huy tham mưu Tăng - thiết giáp', '', '7'),
('7860207', 'Chỉ huy tham mưu Đặc công', '', '7'),
('7860214', 'Biên phòng', '', '7'),
('7860217', 'Tình báo quân sự', '', '7'),
('7860218', 'Hậu cần quân sự', '', '7'),
('7860220', 'Chỉ huy, quản lý kỹ thuật ', '', '7'),
('7860221', 'Chỉ huy tham mưu thông tin', '', '7'),
('7860222', 'Quân sự cơ sở', '', '7'),
('7860226', 'Chỉ huy kỹ thuật Phòng không', '', '7'),
('7860227', 'Chỉ huy kỹ thuật Tăng - thiết giáp', '', '7'),
('7860228', 'Chỉ huy kỹ thuật Công binh', '', '7'),
('7860229', 'Chỉ huy kỹ thuật Hoá học', '', '7'),
('7860231', 'Trinh sát kỹ thuật', '', '7'),
('7860232', 'Chỉ huy kỹ thuật Hải quân', '', '7'),
('7860233', 'Chỉ huy kỹ thuật tác chiến điện tử', '', '7'),
('7900101', 'Quản trị doanh nghiệp và công nghệ', 'Ngành thí điểm', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhomnganh`
--

CREATE TABLE `tbl_nhomnganh` (
  `id_nhom_nganh` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `nhom_nganh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhomnganh`
--

INSERT INTO `tbl_nhomnganh` (`id_nhom_nganh`, `nhom_nganh`) VALUES
('1', 'Khối ngành I'),
('2', 'Khối ngành II'),
('3', 'Khối ngành III'),
('4', 'Khối ngành IV'),
('5', 'Khối ngành V'),
('6', 'Khối ngành VI'),
('7', 'Khối ngành VII');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhom_khenthuong`
--

CREATE TABLE `tbl_nhom_khenthuong` (
  `id` int(11) NOT NULL,
  `tieudekhenthuong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nambd` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namkt` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhom_khenthuong`
--

INSERT INTO `tbl_nhom_khenthuong` (`id`, `tieudekhenthuong`, `nambd`, `namkt`) VALUES
(4, 'Danh hiệu TĐ cấp Trường', '2019', '2020'),
(5, 'Bằng khen của Thủ tướng CP', '2019', '2020'),
(6, 'Danh hiệu TĐ cấp Bộ', '2019', '2020'),
(7, 'Huân chương LĐ hạng 3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quatrinhdaotao`
--

CREATE TABLE `tbl_quatrinhdaotao` (
  `id_madt` int(11) NOT NULL,
  `namphong_pgs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namtn_tiensi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namtn_thacsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namtn_daihoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namtn_caodang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quoctich`
--

CREATE TABLE `tbl_quoctich` (
  `id_quoc_tich` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `quoc_tich` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_quoctich`
--

INSERT INTO `tbl_quoctich` (`id_quoc_tich`, `quoc_tich`) VALUES
('1', 'Việt Nam'),
('2', 'Hàn Quốc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quyen`
--

CREATE TABLE `tbl_quyen` (
  `maquyen` int(11) NOT NULL,
  `tenquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_quyen`
--

INSERT INTO `tbl_quyen` (`maquyen`, `tenquyen`) VALUES
(1, 'admin'),
(2, 'Cán bộ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quyhoach`
--

CREATE TABLE `tbl_quyhoach` (
  `id_quyhoach` int(11) NOT NULL,
  `ten_quyhoach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nam_batdau` int(11) NOT NULL,
  `nam_ketthuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_quyhoach`
--

INSERT INTO `tbl_quyhoach` (`id_quyhoach`, `ten_quyhoach`, `nam_batdau`, `nam_ketthuc`) VALUES
(8, 'Quy hoạch cấp Đơn vị', 2002, 2010),
(9, 'Quy hoạch cấp Trường', 2001, 2009),
(15, 'Quy hoạch cấp Đơn vị', 2005, 2010),
(16, 'Quy hoạch cấp Cơ sở', 1995, 2005),
(21, 'Quy hoạch cấp Khoa', 2002, 2006),
(22, 'Quy hoạch cấp Trường', 2018, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `macb` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maquyen` int(11) DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`taikhoan`, `macb`, `trangthai`, `maquyen`, `matkhau`) VALUES
('1', 'admin', 'motaikhoan', 1, '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('CBGV2', 'CBGV2', 'motaikhoan', 2, '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tdkt_canbo`
--

CREATE TABLE `tbl_tdkt_canbo` (
  `id_can_bo` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_thidua_khenthuong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tdkt_donvi`
--

CREATE TABLE `tbl_tdkt_donvi` (
  `id_don_vi` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_thidua_khenthuong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tdkt_truong`
--

CREATE TABLE `tbl_tdkt_truong` (
  `id_truong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_thidua_khenthuong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thidua_khenthuong`
--

CREATE TABLE `tbl_thidua_khenthuong` (
  `id_thidua_khenthuong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `the_loai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoi_gian` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_thuc` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_quyet_dinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nd_quyet_dinh` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_cong_tac` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_nhomkhenthuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_thidua_khenthuong`
--

INSERT INTO `tbl_thidua_khenthuong` (`id_thidua_khenthuong`, `the_loai`, `thoi_gian`, `hinh_thuc`, `so_quyet_dinh`, `nd_quyet_dinh`, `id_cong_tac`, `id_nhomkhenthuong`) VALUES
('1568044532', 'Tốt nghiệp', '11/09/2019', '1 người', 'QHD-SJA2032', 'Trao tặng lễ 20/11', '2', 4),
('1568044546', 'Tốt nghiệp', '20/09/2019', '1 người', 'QHD-SJA2032', 'Trao tặng lễ 20/11', '2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tongiao`
--

CREATE TABLE `tbl_tongiao` (
  `id_ton_giao` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ton_giao` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tongiao`
--

INSERT INTO `tbl_tongiao` (`id_ton_giao`, `ton_giao`) VALUES
('khac', 'Khác'),
('khong', 'Không'),
('phat', 'Phật'),
('thienchua', 'Thiên chúa'),
('tinlanh', 'Tin lành');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trangthai_dangvien`
--

CREATE TABLE `tbl_trangthai_dangvien` (
  `id` int(11) NOT NULL,
  `ten_trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_trangthai_dangvien`
--

INSERT INTO `tbl_trangthai_dangvien` (`id`, `ten_trangthai`, `ghichu`) VALUES
(1, 'Đảng viên dự bị', ''),
(2, 'Đảng viên chính thức', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_truong`
--

CREATE TABLE `tbl_truong` (
  `id_truong` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_truong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_truong_vt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_truong`
--

INSERT INTO `tbl_truong` (`id_truong`, `ten_truong`, `ten_truong_vt`) VALUES
('1', 'ĐẠI HỌC BUÔN MA THUỘT', 'BMU'),
('10', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ VÀ QUẢN LÝ HỮU NGHỊ', 'DCQ'),
('1000', 'TRƯỜNG ĐẠI HỌC TÂN TRÀO', 'TQU'),
('1001', 'TRƯỜNG ĐẠI HỌC TÂY BẮC', 'TTB'),
('1002', 'TRƯỜNG ĐẠI HỌC TÂY NGUYÊN', 'TTN'),
('1003', 'TRƯỜNG ĐẠI HỌC THÁI BÌNH', 'DTB'),
('1006', 'TRƯỜNG ĐẠI HỌC THỂ DỤC THỂ THAO BẮC NINH', 'TDB'),
('1007', 'TRƯỜNG ĐẠI HỌC THỂ DỤC THỂ THAO ĐÀ NẴNG', 'TTD'),
('1008', 'TRƯỜNG ĐẠI HỌC THỂ DỤC THỂ THAO THÀNH PHỐ HỒ CHÍ MINH', 'TDS'),
('1009', 'TRƯỜNG ĐẠI HỌC THÔNG TIN LIÊN LẠC (Trường sĩ quan Thông tin)', 'TTH'),
('1010', 'TRƯỜNG ĐẠI HỌC THỦ DẦU MỘT', 'TDM'),
('1011', 'TRƯỜNG ĐẠI HỌC THỦ ĐÔ HÀ NỘI', 'HNM'),
('1012', 'TRƯỜNG ĐẠI HỌC THƯƠNG MẠI', 'TMA'),
('1013', 'TRƯỜNG ĐẠI HỌC THUỶ LỢI', 'TLA'),
('1014', 'TRƯỜNG ĐẠI HỌC THUỶ LỢI - Cơ sở 2 ở phía Nam', 'TLS'),
('1015', 'TRƯỜNG ĐẠI HỌC TIỀN GIANG', 'TTG'),
('1016', 'TRƯỜNG ĐẠI HỌC TÔN ĐỨC THẮNG', 'DTT'),
('1017', 'TRƯỜNG ĐẠI HỌC TRÀ VINH', 'DVT'),
('1018', 'TRƯỜNG ĐẠI HỌC TRẦN ĐẠI NGHĨA', 'VPH'),
('1019', 'TRƯỜNG ĐẠI HỌC TRẦN QUỐC TUẤN', 'LAH'),
('1022', 'TRƯỜNG ĐẠI HỌC VĂN HOÁ - NGHỆ THUẬT QUÂN ĐỘI', 'ZNH'),
('1023', 'Trường Đại học Văn hoá - Nghệ thuật quân đội - Cơ sở 2 ở phía Nam', 'ZNS'),
('1024', 'Trường Đại học Văn hoá - Nghệ thuật quân đội - Cơ sở 2 ở phía Nam (Dân sự)', 'ZVS'),
('1025', 'TRƯỜNG ĐẠI HỌC VĂN HOÁ HÀ NỘI', 'VHH'),
('1026', 'TRƯỜNG ĐẠI HỌC VĂN HOÁ TP. HỒ CHÍ MINH', 'VHS'),
('1027', 'TRƯỜNG ĐẠI HỌC VĂN HOÁ, THỂ THAO VÀ DU LỊCH THANH HOÁ', 'DVD'),
('1028', 'TRƯỜNG ĐẠI HỌC VIỆT ĐỨC', 'VGU'),
('1029', 'TRƯỜNG ĐẠI HỌC VIỆT NHẬT - ĐH QG HÀ NỘI', 'VJU'),
('1030', 'TRƯỜNG ĐẠI HỌC VINH', 'TDV'),
('1032', 'TRƯỜNG ĐẠI HỌC XÂY DỰNG', 'XDA'),
('1033', 'TRƯỜNG ĐẠI HỌC XÂY DỰNG MIỀN TÂY', 'MTU'),
('1034', 'TRƯỜNG ĐẠI HỌC XÂY DỰNG MIỀN TRUNG', 'XDT'),
('1035', 'TRƯỜNG ĐẠI HỌC Y DƯỢC - ĐH HUẾ', 'DHY'),
('1036', 'TRƯỜNG ĐẠI HỌC Y DƯỢC - ĐH THÁI NGUYÊN', 'DTY'),
('1037', 'TRƯỜNG ĐẠI HỌC Y DƯỢC CẦN THƠ', 'YCT'),
('1038', 'TRƯỜNG ĐẠI HỌC Y DƯỢC HẢI PHÒNG', 'YPB'),
('1039', 'TRƯỜNG ĐẠI HỌC Y DƯỢC THÁI BÌNH', 'YTB'),
('1040', 'TRƯỜNG ĐẠI HỌC Y DƯỢC TP.HCM', 'YDS'),
('1041', 'TRƯỜNG ĐẠI HỌC Y HÀ NỘI', 'YHB'),
('1042', 'TRƯỜNG ĐẠI HỌC Y KHOA PHẠM NGỌC THẠCH', 'TYS'),
('1043', 'TRƯỜNG ĐẠI HỌC Y KHOA TOKYO VIỆT NAM(*)', 'TKU'),
('1044', 'TRƯỜNG ĐẠI HỌC Y KHOA VINH', 'YKV'),
('1045', 'TRƯỜNG ĐẠI HỌC Y TẾ CÔNG CỘNG', 'YTC'),
('1046', 'TRƯỜNG SĨ QUAN ĐẶC CÔNG', 'DCH'),
('1047', 'TRƯỜNG SĨ QUAN KHÔNG QUÂN', 'KGH'),
('1048', 'TRƯỜNG SĨ QUAN PHÁO BINH', 'PBH'),
('1049', 'TRƯỜNG SĨ QUAN PHÒNG HOÁ', 'HGH'),
('1050', 'TRƯỜNG SĨ QUAN TĂNG - THIẾT GIÁP', 'TGH'),
('1051', 'VIỆN MÔI TRƯỜNG VÀ TÀI NGUYÊN - ĐH QG TP.HCM', 'QSE'),
('1052', 'VIỆN NGHIÊN CỨU VÀ ĐÀO TẠO VIỆT - ANH - ĐH ĐÀ NẴNG', 'DDV'),
('1053', 'VIỆN ĐẠI HỌC MỞ HÀ NỘI', 'MHN'),
('1054', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT - ĐH ĐÀ NẴNG', 'DSK'),
('1056', 'KHOA GIÁO DỤC THỂ CHẤT - ĐH ĐÀ NẴNG', 'DDG'),
('11', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP VINH', 'DCV'),
('1170', 'Trường trung cấp Bách khoa Thành phố Hồ Chí Minh', '201'),
('1171', 'TRƯỜNG TRUNG CẤP ÂU LẠC - HUẾ', '3301'),
('1172', 'TRƯỜNG TRUNG CẤP ÂU VIỆT', '202'),
('1173', 'TRƯỜNG TRUNG CẤP BÁCH KHOA BÌNH DƯƠNG', '4409'),
('1174', 'TRƯỜNG TRUNG CẤP BÁCH KHOA ĐỒNG NAI', '4809'),
('1175', 'TRƯỜNG TRUNG CẤP BÁCH KHOA SÀI GÒN', '220'),
('1176', 'TRƯỜNG TRUNG CẤP BÁCH NGHỆ THANH HOÁ', '2801'),
('1177', 'TRƯỜNG TRUNG CẤP BẾN THÀNH', '240'),
('1178', 'TRƯỜNG TRUNG CẤP CHUYÊN NGHIỆP HẢI PHÒNG', '301'),
('1179', 'TRƯỜNG TRUNG CẤP CHUYÊN NGHIỆP Ý VIỆT', '406'),
('1180', 'TRƯỜNG TRUNG CẤP CỘNG ĐỒNG HÀ NỘI', '108'),
('1181', 'TRƯỜNG TRUNG CẤP CÔNG NGHIỆP BÌNH DƯƠNG', '4410'),
('1182', 'TRƯỜNG TRUNG CẤP ĐẠI VIỆT', '207'),
('1183', 'TRƯỜNG TRUNG CẤP ĐẠI VIỆT THÀNH PHỐ CẦN THƠ', '5512'),
('1184', 'TRƯỜNG TRUNG CẤP ĐÔNG DƯƠNG', '206'),
('1185', 'TRƯỜNG TRUNG CẤP HÀ NỘI', 'GT15'),
('1186', 'TRƯỜNG TRUNG CẤP HỒNG HÀ', '208'),
('1187', 'TRƯỜNG TRUNG CẤP KINH TẾ - DU LỊCH DUY TÂN', '3306'),
('1188', 'TRƯỜNG TRUNG CẤP KINH TẾ CÔNG NGHỆ ĐÔNG NAM', '4402'),
('1189', 'TRƯỜNG TRUNG CẤP KINH TẾ KỸ THUẬT HÀ NỘI I', '119'),
('1190', 'TRƯỜNG TRUNG CẤP KINH TẾ KỸ THUẬT HẢI PHÒNG', '302'),
('1191', 'TRƯỜNG TRUNG CẤP KỸ THUẬT VÀ NGHIỆP VỤ NAM SÀI GÒN', '215'),
('1192', 'TRƯỜNG TRUNG CẤP MIỀN ĐÔNG', '4801'),
('1193', 'TRƯỜNG TRUNG CẤP MIỀN TÂY', '5509'),
('1194', 'TRƯỜNG TRUNG CẤP NGHIỆP VỤ VÀ CÔNG NGHỆ HẢI PHÒNG', '304'),
('1195', 'TRƯỜNG TRUNG CẤP PHƯƠNG NAM', '218'),
('1196', 'TRƯỜNG TRUNG CẤP QUẢNG ĐÔNG', '3402'),
('1197', 'TRƯỜNG TRUNG CẤP SƯ PHẠM MẦM NON ĐẮK LẮK', '4003'),
('1198', 'TRƯỜNG TRUNG CẤP SƯ PHẠM MẪU GIÁO – NHÀ TRẺ HÀ NỘI', '131'),
('1199', 'TRƯỜNG TRUNG CẤP TÂN BÁCH KHOA', '4604'),
('12', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ ĐÔNG Á', 'DDA'),
('1200', 'TRƯỜNG TRUNG CẤP TÂY NGUYÊN', '4001'),
('1201', 'TRƯỜNG TRUNG CẤP THÁI NGUYÊN', '1204'),
('1202', 'TRƯỜNG TRUNG CẤP TỔNG HỢP ĐÔNG ĐÔ', '2201'),
('1203', 'TRƯỜNG TRUNG CẤP TỔNG HỢP HÀ NỘI', '133'),
('1204', 'TRƯỜNG TRUNG CẤP VĂN HÓA - NGHỆ THUẬT ĐÀ NẴNG', '405'),
('1205', 'TRƯỜNG TRUNG CẤP VĂN HOÁ - NGHỆ THUẬT VÀ DU LỊCH BẮC NINH', '1906'),
('1206', 'TRƯỜNG TRUNG CẤP VĂN HOÁ NGHỆ THUẬT BÌNH ĐỊNH', '3702'),
('1207', 'TRƯỜNG TRUNG CẤP VĂN HÓA NGHỆ THUẬT CẦN THƠ', '5504'),
('1208', 'TRƯỜNG TRUNG CẤP VĂN HÓA NGHỆ THUẬT NAM ĐỊNH', '2505'),
('1209', 'TRƯỜNG TRUNG CẤP VĂN HÓA NGHỆ THUẬT TIỀN GIANG', '5303'),
('1210', 'TRƯỜNG TRUNG CẤP VĂN HÓA NGHỆ THUẬT VÀ DU LỊCH HẢI DƯƠNG', '2103'),
('1211', 'TRƯỜNG TRUNG CẤP VĂN HÓA NGHỆ THUẬT VĨNH PHÚC', '1605'),
('1212', 'TRƯỜNG TRUNG CẤP VĂN HOÁ, NGHỆ THUẬT VÀ DU LỊCH QUẢNG NAM', '3406'),
('1213', 'TRƯỜNG TRUNG CẤP VIỆT - ANH', '2902'),
('1214', 'TRƯỜNG TRUNG CẤP VIỆT KHOA', '229'),
('1215', 'TRƯỜNG TRUNG CẤP VIỆT THUẬN', '4501'),
('1216', 'VIỆN CHĂN NUÔI', 'VCN'),
('1217', 'VIỆN CHIẾN LƯỢC PHÁT TRIỂN', 'V19'),
('1218', 'HỌC VIỆN KHOA HỌC, CÔNG NGHỆ VÀ ĐỔI MỚI SÁNG TẠO', 'V24'),
('1219', 'VIỆN CƠ ĐIỆN NÔNG NGHIỆP VÀ CÔNG NGHỆ SAU THU HOẠCH', 'VCD'),
('1220', 'VIỆN CƠ HỌC', 'VCH'),
('1221', 'VIỆN CƠ HỌC VÀ TIN HỌC ỨNG DỤNG', 'VCT'),
('1222', 'VIỆN CÔNG NGHỆ HÓA HỌC', 'V07'),
('1223', 'VIỆN CÔNG NGHỆ MÔI TRƯỜNG', 'VMT'),
('1224', 'VIỆN CÔNG NGHỆ SINH HỌC', 'V60'),
('1225', 'VIỆN CÔNG NGHỆ THÔNG TIN', 'V01'),
('1226', 'VIỆN CÔNG NGHỆ THÔNG TIN - ĐH QH HÀ NỘI', 'IVI'),
('1227', 'VIỆN CÔNG NGHIỆP THỰC PHẨM', 'V08'),
('1229', 'VIỆN DẦU KHÍ VIỆT NAM', 'VDK'),
('1230', 'VIỆN ĐỊA CHẤT', 'V58'),
('1231', 'VIỆN ĐỊA LÝ', 'V57'),
('1232', 'VIỆN DINH DƯỠNG', 'V66'),
('1233', 'VIỆN DƯỢC LIỆU', 'V22'),
('1234', 'VIỆN HẢI DƯƠNG HỌC', 'V64'),
('1235', 'VIỆN HOÁ HỌC', 'V09'),
('1236', 'VIỆN HOÁ HỌC CÁC HỢP CHẤT THIÊN NHIÊN', 'V10'),
('1237', 'VIỆN HOÁ HỌC CÔNG NGHIỆP', 'V11'),
('1238', 'VIỆN HOÁ SINH BIỂN', 'V56'),
('1239', 'VIỆN KHOA HỌC CÔNG NGHỆ XÂY DỰNG', 'V14'),
('1240', 'VIỆN KHOA HỌC ĐỊA CHẤT VÀ KHOÁNG SẢN', 'V47'),
('1241', 'VIỆN KHOA HỌC ĐO ĐẠC VÀ BẢN ĐỒ', 'KBD'),
('1242', 'VIỆN KHOA HỌC GIÁO DỤC VIỆT NAM', 'V46'),
('1243', 'VIỆN KHOA HỌC KHÍ TƯỢNG THỦY VĂN VÀ BIẾN ĐỔI KHÍ HẬU', 'V50'),
('1244', 'VIỆN KHOA HỌC LÂM NGHIỆP VIỆT NAM', 'VLN'),
('1245', 'VIỆN KHOA HỌC NÔNG NGHIỆP MIỀN NAM', 'VNM'),
('1246', 'VIỆN KHOA HỌC NÔNG NGHIỆP VIỆT NAM', 'VKN'),
('1247', 'VIỆN KHOA HỌC THỂ DỤC THỂ THAO', 'VKT'),
('1248', 'VIỆN KHOA HỌC THUỶ LỢI VIỆT NAM', 'VTL'),
('1249', 'VIỆN KHOA HỌC VÀ CÔNG NGHỆ GIAO THÔNG VẬN TẢI', 'V13'),
('1250', 'VIỆN KHOA HỌC VÀ CÔNG NGHỆ QUÂN SỰ', 'VKH'),
('1251', 'VIỆN KHOA HỌC VẬT LIỆU', 'V03'),
('1252', 'VIỆN KIỂM NGHIỆM THUỐC TRUNG ƯƠNG', 'NQC'),
('1253', 'VIỆN KIẾN TRÚC QUỐC GIA', 'V12'),
('1254', 'VIỆN KỸ THUẬT NHIỆT ĐỚI', 'V61'),
('1255', 'VIỆN LỊCH SỬ QUÂN SỰ VIỆT NAM', 'VLS'),
('1256', 'VIỆN LÚA ĐỒNG BẰNG SÔNG CỬU LONG', 'VLC'),
('1257', 'VIỆN MÁY VÀ DỤNG CỤ CÔNG NGHIỆP', 'V48'),
('1258', 'VIỆN NĂNG LƯỢNG NGUYÊN TỬ VIỆT NAM', 'V04'),
('1259', 'VIỆN NGHIÊN CỨU CHIẾN LƯỢC, CHÍNH SÁCH CÔNG THƯƠNG (VIỆN NGHIÊN CỨU THƯƠNG MẠI)', 'V17'),
('1260', 'VIỆN NGHIÊN CỨU CƠ KHÍ', 'V49'),
('1261', 'VIỆN NGHIÊN CỨU ĐIỆN TỬ, TIN HỌC, TỰ ĐỘNG HOÁ', 'V02'),
('1262', 'VIỆN NGHIÊN CỨU HẢI SẢN', 'V62'),
('1263', 'VIỆN NGHIÊN CỨU KHOA HỌC Y DƯỢC LÂM SÀNG 108', 'V65'),
('1264', 'VIỆN NGHIÊN CỨU NUÔI TRỒNG THUỶ SẢN I', 'VTS'),
('1265', 'VIỆN NGHIÊN CỨU VÀ QUẢN LÝ KINH TẾ TW', 'V18'),
('1266', 'VIỆN PASTEUR TP.HCM', 'V26'),
('1267', 'VIỆN QUỐC TẾ PHÁP NGỮ - ĐH QG HÀ NỘI', 'IFI'),
('1268', 'VIỆN SINH HỌC NHIỆT ĐỚI', 'VSD'),
('1269', 'VIỆN SINH THÁI VÀ TÀI NGUYÊN SINH VẬT', 'VST'),
('1270', 'VIỆN SỐT RÉT KÝ SINH TRÙNG - CÔN TRÙNG TW', 'V25'),
('1271', 'VIỆN SỨC KHOẺ NGHỀ NGHIỆP VÀ MÔI TRƯỜNG', 'VYL'),
('1272', 'VIỆN THÚ Y', 'VTY'),
('1273', 'VIỆN TOÁN HỌC', 'V59'),
('1274', 'VIỆN ỨNG DỤNG CÔNG NGHỆ', 'VUD'),
('1275', 'VIỆN VĂN HOÁ NGHỆ THUẬT VIỆT NAM', 'V45'),
('1276', 'VIỆN VẬT LÝ', 'V06'),
('1277', 'VIỆN VẬT LÝ ĐỊA CẦU', 'V05'),
('1278', 'VIỆN VỆ SINH DỊCH TỄ TRUNG ƯƠNG', 'V27'),
('1279', 'VIỆN VI SINH VẬT VÀ CÔNG NGHỆ SINH HỌC - ĐH QG HÀ NỘI', 'VVS'),
('1280', 'VIỆN VIỆT NAM HỌC VÀ KHOA HỌC PHÁT TRIỂN - ĐH QG HÀ NỘI', 'VVN'),
('1281', 'VIỆN Y HỌC CỔ TRUYỀN DÂN TỘC QUÂN ĐỘI', 'V28'),
('1282', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT TP. HỒ CHÍ MINH', 'CVN'),
('1283', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT ĐĂK LĂK', 'CVL'),
('1284', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT DU LỊCH YÊN BÁI', 'CVY'),
('1285', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT NGHỆ AN', 'CVV'),
('1286', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT TÂY BẮC', 'CVB'),
('1287', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT THÁI BÌNH', 'CNB'),
('1288', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT VÀ DU LỊCH SÀI GÒN', 'CVS'),
('1289', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT VÀ DU LỊCH NAM ĐỊNH', 'CVD'),
('1290', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ NGHỆ THUẬT VIỆT BẮC', 'CNV'),
('1291', 'TRƯỜNG CAO ĐẲNG VĂN HOÁ, THỂ THAO VÀ DU LỊCH NGUYỄN DU', 'CVH'),
('1292', 'TRƯỜNG CAO ĐẲNG VĨNH PHÚC', 'C16'),
('1293', 'Trung cấp Đam San', '4008'),
('1294', 'Trường Trung cấp Trường Sơn', '4004'),
('1295', 'CAO ĐẲNG NGÔ GIA TỰ - BẮC GIANG', 'C18'),
('1296', 'Khoa các Khoa học liên ngành - Đại học Quốc gia Hà Nội', 'VVL'),
('1297', 'Viện Trần Nhân Tông - Đại học Quốc gia Hà Nội', 'VVT'),
('1298', 'Viện Tài nguyên và Môi trường - Đại học Quốc gia Hà Nội', 'VVM'),
('1299', 'Trường Cao đẳng Thể dục Thể thao Thanh Hoá', 'CTO'),
('13', 'TRƯỜNG ĐẠI HỌC THÀNH ĐÔNG', 'DDB'),
('1300', 'TRƯỜNG CAO ĐẲNG PHƯƠNG ĐÔNG - ĐÀ NẴNG', 'CPN'),
('1301', 'TRƯỜNG TRUNG CẤP TÀI CHÍNH - KẾ TOÁN BÌNH DƯƠNG', '7001'),
('1302', 'Trường Cao đẳng Hải Dương', 'C21'),
('1303', 'Trường Cao đẳng Đại Việt Sài Gòn', '219'),
('1304', 'TRƯỜNG TRUNG CẤP SÀI GÒN', '7002'),
('1305', 'TRƯỜNG TRUNG CẤP MAI LINH', '7003'),
('1306', 'TRƯỜNG CAO ĐẲNG BÁCH VIỆT', 'D04'),
('1307', 'Trường Trung cấp Phương Nam - Đắk Nông', '6310'),
('1308', 'Trường Trung cấp Kinh tế - Kĩ thuật Phương Nam', '6301'),
('1309', 'Đại học Quốc gia Hà Nội', 'A'),
('1310', 'Đại học Quốc gia TpHCM', 'C'),
('1311', 'Đại học Thái Nguyên', 'B'),
('1312', 'Đại học Đà Nẵng', 'E'),
('14', 'TRƯỜNG ĐẠI HỌC ĐÔNG ĐÔ', 'DDD'),
('15', 'TRƯỜNG ĐẠI HỌC ĐẠI NAM', 'DDN'),
('16', 'TRƯỜNG ĐẠI HỌC DUY TÂN', 'DDT'),
('17', 'TRƯỜNG ĐẠI HỌC HÀ HOA TIÊN', 'DHH'),
('18', 'TRƯỜNG ĐẠI HỌC DÂN LẬP HẢI PHÒNG', 'DHP'),
('19', 'TRƯỜNG ĐẠI HỌC HÙNG VƯƠNG - TP. HỒ CHÍ MINH', 'DHV'),
('2', 'TRƯỜNG ĐẠI HỌC BÀ RỊA - VŨNG TÀU', 'BVU'),
('20', 'TRƯỜNG ĐẠI HỌC KINH TẾ - KỸ THUẬT BÌNH DƯƠNG', 'DKB'),
('21', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ TP. HỒ CHÍ MINH', 'DKC'),
('22', 'TRƯỜNG ĐẠI HỌC KINH TẾ CÔNG NGHIỆP LONG AN', 'DLA'),
('23', 'TRƯỜNG ĐẠI HỌC LẠC HỒNG', 'DLH'),
('24', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ MIỀN ĐÔNG', 'DMD'),
('25', 'TRƯỜNG ĐẠI HỌC NAM CẦN THƠ', 'DNC'),
('26', 'TRƯỜNG ĐẠI HỌC NGOẠI NGỮ - TIN HỌC TP.HCM', 'DNT'),
('27', 'TRƯỜNG ĐẠI HỌC PHAN CHÂU TRINH', 'DPC'),
('28', 'TRƯỜNG ĐẠI HỌC DÂN LẬP PHƯƠNG ĐÔNG', 'DPD'),
('29', 'TRƯỜNG ĐẠI HỌC PHAN THIẾT', 'DPT'),
('3', 'TRƯỜNG ĐẠI HỌC ĐÔNG Á', 'DAD'),
('30', 'TRƯỜNG ĐẠI HỌC DÂN LẬP PHÚ XUÂN', 'DPX'),
('31', 'TRƯỜNG ĐẠI HỌC KINH DOANH VÀ CÔNG NGHỆ HÀ NỘI', 'DQK'),
('32', 'TRƯỜNG ĐẠI HỌC QUANG TRUNG', 'DQT'),
('33', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ SÀI GÒN', 'DSG'),
('34', 'TRƯỜNG ĐẠI HỌC THÀNH TÂY', 'DTA'),
('35', 'TRƯỜNG ĐẠI HỌC TÂY ĐÔ', 'DTD'),
('36', 'TRƯỜNG ĐẠI HỌC HOA SEN', 'DTH'),
('37', 'TRƯỜNG ĐẠI HỌC THĂNG LONG', 'DTL'),
('38', 'TRƯỜNG ĐẠI HỌC LƯƠNG THẾ VINH', 'DTV'),
('39', 'TRƯỜNG ĐẠI HỌC VIỆT BẮC', 'DVB'),
('4', 'TRƯỜNG ĐẠI HỌC BÌNH DƯƠNG', 'DBD'),
('40', 'TRƯỜNG ĐẠI HỌC VĂN LANG', 'DVL'),
('41', 'TRƯỜNG ĐẠI HỌC TRƯNG VƯƠNG', 'DVP'),
('42', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ VẠN XUÂN', 'DVX'),
('43', 'TRƯỜNG ĐẠI HỌC YERSIN ĐÀ LẠT', 'DYD'),
('44', 'TRƯỜNG ĐẠI HỌC QUỐC TẾ MIỀN ĐÔNG', 'EIU'),
('45', 'TRƯỜNG ĐẠI HỌC HOÀ BÌNH', 'ETU'),
('46', 'TRƯỜNG ĐẠI HỌC TÀI CHÍNH - NGÂN HÀNG HÀ NỘI', 'FBU'),
('47', 'TRƯỜNG ĐẠI HỌC FPT', 'FPT'),
('48', 'TRƯỜNG ĐẠI HỌC QUỐC TẾ HỒNG BÀNG', 'HIU'),
('49', 'TRƯỜNG ĐẠI HỌC KINH TẾ - TÀI CHÍNH TP. HỒ CHÍ MINH - UEF', 'KTC'),
('5', 'TRƯỜNG ĐẠI HỌC QUỐC TẾ BẮC HÀ', 'DBH'),
('50', 'TRƯỜNG ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG', 'KTD'),
('51', 'TRƯỜNG ĐẠI HỌC MỸ THUẬT CÔNG NGHIỆP Á CHÂU', 'MCA'),
('52', 'TRƯỜNG ĐẠI HỌC NGUYỄN TẤT THÀNH', 'NTT'),
('53', 'TRƯỜNG ĐẠI HỌC NGUYỄN TRÃI', 'NTU'),
('54', 'TRƯỜNG ĐẠI HỌC THÁI BÌNH DƯƠNG', 'TBD'),
('55', 'TRƯỜNG ĐẠI HỌC THÀNH ĐÔ', 'TDD'),
('56', 'TRƯỜNG ĐẠI HỌC TƯ THỤC QUỐC TẾ SÀI GÒN', 'TTQ'),
('57', 'TRƯỜNG ĐẠI HỌC TÂN TẠO', 'TTU'),
('58', 'TRƯỜNG ĐẠI HỌC KINH BẮC', 'UKB'),
('59', 'TRƯỜNG ĐẠI HỌC VĂN HIẾN', 'DVH'),
('6', 'TRƯỜNG ĐẠI HỌC CHU VĂN AN', 'DCA'),
('60', 'TRƯỜNG ĐẠI HỌC VÕ TRƯỜNG TOẢN', 'VTT'),
('61', 'Cơ sở đào tạo test 1', 'CSDT/TEST'),
('65', 'Trường test_1', 'test_1'),
('66', 'Trường test1', 'TEST1'),
('67', 'Trường Test2', 'test2'),
('7', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ ĐỒNG NAI', 'DCD'),
('760', 'ĐẠI HỌC HUẾ', 'D'),
('761', 'HỌC VIỆN ÂM NHẠC HUẾ', 'HVA'),
('762', 'HỌC VIỆN ÂM NHẠC QUỐC GIA VIỆT NAM', 'NVH'),
('763', 'HỌC VIỆN AN NINH NHÂN DÂN', 'ANH'),
('764', 'HỌC VIỆN BÁO CHÍ VÀ TUYÊN TRUYỀN', 'HBT'),
('765', 'HỌC VIỆN BIÊN PHÒNG', 'BPH'),
('766', 'HỌC VIỆN CÁN BỘ THÀNH PHỐ HỒ CHÍ MINH', 'HVC'),
('767', 'HỌC VIỆN CẢNH SÁT NHÂN DÂN', 'CSH'),
('768', 'HỌC VIỆN CHÍNH SÁCH VÀ PHÁT TRIỂN', 'HCP'),
('769', 'HỌC VIỆN CHÍNH TRỊ', 'HAH'),
('770', 'HỌC VIỆN CHÍNH TRỊ KHU VỰC I', 'HCC'),
('771', 'HỌC VIỆN CHÍNH TRỊ CÔNG AN NHÂN DÂN', 'HCA'),
('772', 'HỌC VIỆN CHÍNH TRỊ QUỐC GIA HỒ CHÍ MINH', 'HVH'),
('773', 'HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG', 'BVH'),
('774', 'HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG -Cơ sở 2', 'BVS'),
('775', 'HỌC VIỆN DÂN TỘC', 'HVD'),
('776', 'HỌC VIỆN HẢI QUÂN', 'HQH'),
('777', 'HỌC VIỆN HÀNG KHÔNG VIỆT NAM', 'HHK'),
('778', 'HỌC VIỆN HÀNH CHÍNH QUỐC GIA', 'HCH'),
('779', 'HỌC VIỆN HÀNH CHÍNH QUỐC GIA - Cơ sở phía nam', 'HCS'),
('780', 'HỌC VIỆN HẬU CẦN', 'HEH'),
('781', 'HỌC VIỆN KHOA HỌC QUÂN SỰ', 'DNH'),
('782', 'HỌC VIỆN KHOA HỌC VÀ CÔNG NGHỆ', 'HKC'),
('783', 'HỌC VIỆN KHOA HỌC XÃ HỘI', 'HXH'),
('784', 'HỌC VIỆN KỸ THUẬT MẬT MÃ', 'KMA'),
('785', 'HỌC VIỆN KỸ THUẬT QUÂN SỰ', 'KQH'),
('786', 'HỌC VIỆN LỤC QUÂN', 'HLQ'),
('787', 'HỌC VIỆN NGÂN HÀNG', 'NHH'),
('788', 'HỌC VIỆN NGOẠI GIAO', 'HQT'),
('789', 'HỌC VIỆN NÔNG NGHIỆP VIỆT NAM', 'HVN'),
('790', 'HỌC VIỆN PHÒNG KHÔNG - KHÔNG QUÂN', 'PKH'),
('791', 'HỌC VIỆN PHỤ NỮ VIỆT NAM', 'HPN'),
('792', 'HỌC VIỆN QUẢN LÝ GIÁO DỤC', 'HVQ'),
('793', 'HỌC VIỆN QUÂN Y', 'YQH'),
('794', 'HỌC VIỆN TÀI CHÍNH', 'HTC'),
('795', 'HỌC VIỆN THANH THIẾU NIÊN VIỆT NAM', 'HTN'),
('796', 'HỌC VIỆN TOÀ ÁN', 'HTA'),
('797', 'HỌC VIỆN Y DƯỢC HỌC CỔ TRUYỀN VIỆT NAM', 'HYD'),
('798', 'KHOA DU LỊCH - ĐH HUẾ', 'DHD'),
('799', 'KHOA GIÁO DỤC THỂ CHẤT - ĐH HUẾ', 'DHC'),
('8', 'TRƯỜNG ĐẠI HỌC GIA ĐỊNH', 'DCG'),
('800', 'KHOA LUẬT - ĐH QG HÀ NỘI', 'QHL'),
('801', 'KHOA NGOẠI NGỮ - ĐH THÁI NGUYÊN', 'DTF'),
('802', 'KHOA QUẢN TRỊ KINH DOANH - ĐH QG HÀ NỘI', 'QHD'),
('803', 'KHOA QUỐC TẾ - ĐH QG HÀ NỘI', 'QHQ'),
('804', 'KHOA QUỐC TẾ - ĐH THÁI NGUYÊN', 'DTQ'),
('805', 'KHOA Y - ĐH QG TP.HCM', 'QSY'),
('806', 'KHOA Y - DƯỢC - ĐH QG HÀ NỘI', 'QHY'),
('807', 'KHOA Y DƯỢC - ĐH ĐÀ NẴNG', 'DDY'),
('808', 'NHẠC VIỆN TP. HỒ CHÍ MINH', 'NVS'),
('809', 'PHÂN HIỆU ĐẠI HỌC HUẾ TẠI QUẢNG TRỊ', 'DHQ'),
('810', 'PHÂN HIỆU ĐẠI HỌC THÁI NGUYÊN TẠI TỈNH LÀO CAI', 'PLC'),
('811', 'PHÂN HIỆU ĐHĐN TẠI KONTUM', 'DDP'),
('812', 'Phân hiệu Trường Đại học Nông Lâm TP. Hồ Chí Minh tại Gia Lai', 'NLG'),
('813', 'Phân hiệu Trường Đại học Nông Lâm TP. Hồ Chí Minh tại Ninh Thuận', 'NLN'),
('814', 'PHÂN HIỆU TRƯỜNG ĐẠI HỌC Y HÀ NỘI TẠI THANH HOÁ', 'YHT'),
('815', 'TRƯỜNG CAO ĐẲNG BẾN TRE', 'C56'),
('816', 'TRƯỜNG CAO ĐẲNG BÌNH ĐỊNH', 'C37'),
('817', 'TRƯỜNG CAO ĐẲNG CẦN THƠ', 'C55'),
('818', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG BÀ RỊA – VŨNG TÀU', 'D52'),
('819', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG BẮC KẠN', 'C11'),
('820', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG BÌNH THUẬN', 'C47'),
('821', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG CÀ MAU', 'D61'),
('822', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG ĐỒNG THÁP', 'D50'),
('823', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG HÀ NỘI', 'CHN'),
('824', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG HÀ TÂY', 'D20'),
('825', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG HẢI PHÒNG', 'D03'),
('826', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG HẬU GIANG', 'D64'),
('827', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG KIÊN GIANG', 'D54'),
('828', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG LAI CHÂU', 'CLC'),
('829', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG LÀO CAI', 'CLA'),
('830', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG SÓC TRĂNG', 'CST'),
('831', 'TRƯỜNG CAO ĐẲNG CỘNG ĐỒNG VĨNH LONG', 'D57'),
('832', 'TRƯỜNG CAO ĐẲNG CÔNG NGHỆ - ĐH ĐÀ NẴNG', 'DDC'),
('833', 'KHOA CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG - ĐH ĐÀ NẴNG', 'DDI'),
('834', 'TRƯỜNG CAO ĐẲNG KINH TẾ - KỸ THUẬT - ĐH THÁI NGUYÊN', 'DTU'),
('835', 'TRƯỜNG CAO ĐẲNG SƠN LA', 'C14'),
('836', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM BÀ RỊA-VŨNG TÀU', 'C52'),
('837', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM BẮC NINH', 'C19'),
('838', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM BÌNH PHƯỚC', 'C43'),
('839', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM CÀ MAU', 'C61'),
('840', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM CAO BẰNG', 'C06'),
('841', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM ĐÀ LẠT', 'C42'),
('842', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM ĐẮK LẮK', 'C40'),
('843', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM ĐIỆN BIÊN', 'C62'),
('844', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM GIA LAI', 'C38'),
('845', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM HÀ GIANG', 'C05'),
('846', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM HÀ NAM', 'C24'),
('847', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM HÀ TÂY', 'C20'),
('848', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM HOÀ BÌNH', 'C23'),
('849', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM HƯNG YÊN', 'C22'),
('850', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM KIÊN GIANG', 'C54'),
('851', 'Cao đẳng Cộng đồng KonTum', 'C36'),
('852', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM LẠNG SƠN', 'C10'),
('853', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM LÀO CAI', 'C08'),
('854', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM LONG AN', 'C49'),
('855', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM NAM ĐỊNH', 'C25'),
('856', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM NGHỆ AN', 'C29'),
('857', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM NINH THUẬN', 'C45'),
('858', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM QUẢNG TRỊ', 'C32'),
('859', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM SÓC TRĂNG', 'C59'),
('860', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM TÂY NINH', 'C46'),
('861', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM THÁI BÌNH', 'C26'),
('862', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM THÁI NGUYÊN', 'C12'),
('863', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM THỪA THIÊN HUẾ', 'C33'),
('864', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM TRUNG ƯƠNG', 'CM1'),
('865', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM TRUNG ƯƠNG NHA TRANG', 'CM2'),
('866', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM TRUNG ƯƠNG TP.HỒ CHÍ MINH', 'CM3'),
('867', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM VĨNH LONG', 'C57'),
('868', 'TRƯỜNG CAO ĐẲNG SƯ PHẠM YÊN BÁI', 'C13'),
('869', 'TRƯỜNG ĐẠI HỌC AN GIANG', 'TAG'),
('870', 'TRƯỜNG ĐẠI HỌC AN NINH NHÂN DÂN', 'ANS'),
('871', 'TRƯỜNG ĐẠI HỌC ANH QUỐC - VIỆT NAM (*)', 'BUV'),
('872', 'TRƯỜNG ĐẠI HỌC BẠC LIÊU', 'DBL'),
('873', 'TRƯỜNG ĐẠI HỌC BÁCH KHOA - ĐH ĐÀ NẴNG', 'DDK'),
('874', 'TRƯỜNG ĐẠI HỌC BÁCH KHOA - ĐH QG TP.HCM', 'QSB'),
('875', 'TRƯỜNG ĐẠI HỌC BÁCH KHOA HÀ NỘI', 'BKA'),
('876', 'TRƯỜNG ĐẠI HỌC CẦN THƠ', 'TCT'),
('877', 'TRƯỜNG ĐẠI HỌC CẢNH SÁT NHÂN DÂN', 'CSS'),
('878', 'TRƯỜNG ĐẠI HỌC CHÍNH TRỊ', 'LCH'),
('879', 'TRƯỜNG ĐẠI HỌC CÔNG ĐOÀN', 'LDA'),
('880', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ - ĐH QUỐC GIA HÀ NỘI', 'QHI'),
('881', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ GIAO THÔNG VẬN TẢI', 'GTA'),
('882', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN - ĐH QG TP.HCM', 'QSC'),
('883', 'TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG - ĐH THÁI NGUYÊN', 'DTC'),
('884', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP DỆT MAY THỜI TRANG HÀ NỘI', 'CCM'),
('885', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP HÀ NỘI', 'DCN'),
('886', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP QUẢNG NINH', 'DDM'),
('887', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP THỰC PHẨM TP. HỒ CHÍ MINH', 'DCT'),
('888', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP TP. HỒ CHÍ MINH', 'HUI'),
('889', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP VIỆT - HUNG', 'VHD'),
('890', 'TRƯỜNG ĐẠI HỌC CÔNG NGHIỆP VIỆT TRÌ', 'VUI'),
('891', 'TRƯỜNG ĐẠI HỌC ĐÀ LẠT', 'TDL'),
('892', 'TRƯỜNG ĐẠI HỌC DẦU KHÍ VIỆT NAM', 'PVU'),
('893', 'TRƯỜNG ĐẠI HỌC ĐIỆN LỰC', 'DDL'),
('894', 'TRƯỜNG ĐẠI HỌC ĐIỀU DƯỠNG NAM ĐỊNH', 'YDD'),
('895', 'TRƯỜNG ĐẠI HỌC ĐỒNG NAI', 'DNU'),
('896', 'TRƯỜNG ĐẠI HỌC ĐỒNG THÁP', 'SPD'),
('897', 'TRƯỜNG ĐẠI HỌC DƯỢC HÀ NỘI', 'DKH'),
('898', 'TRƯỜNG ĐẠI HỌC FULBRIGHT VIỆT NAM(*)', 'FUV'),
('899', 'TRƯỜNG ĐẠI HỌC GIÁO DỤC - ĐH QUỐC GIA HÀ NỘI', 'QHS'),
('9', 'TRƯỜNG ĐẠI HỌC CỬU LONG', 'DCL'),
('900', 'TRƯỜNG ĐẠI HỌC GIAO THÔNG VẬN TẢI', 'GHA'),
('901', 'TRƯỜNG ĐẠI HỌC GIAO THÔNG VẬN TẢI - Cơ sở 2 ở phía Nam', 'GSA'),
('902', 'TRƯỜNG ĐẠI HỌC GIAO THÔNG VẬN TẢI TP. HỒ CHÍ MINH', 'GTS'),
('903', 'TRƯỜNG ĐẠI HỌC HẠ LONG', 'HLU'),
('904', 'TRƯỜNG ĐẠI HỌC HÀ NỘI', 'NHF'),
('905', 'TRƯỜNG ĐẠI HỌC HÀ TĨNH', 'HHT'),
('906', 'TRƯỜNG ĐẠI HỌC HẢI DƯƠNG', 'DKT'),
('907', 'TRƯỜNG ĐẠI HỌC HẢI PHÒNG', 'THP'),
('908', 'TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM', 'HHA'),
('909', 'TRƯỜNG ĐẠI HỌC HOA LƯ', 'DNB'),
('910', 'TRƯỜNG ĐẠI HỌC HỒNG ĐỨC', 'HDT'),
('911', 'TRƯỜNG ĐẠI HỌC HÙNG VƯƠNG', 'THV'),
('912', 'TRƯỜNG ĐẠI HỌC KHÁNH HOÀ', 'UKH'),
('913', 'TRƯỜNG ĐẠI HỌC KHOA HỌC - ĐH HUẾ', 'DHT'),
('914', 'TRƯỜNG ĐẠI HỌC KHOA HỌC - ĐH THÁI NGUYÊN', 'DTZ'),
('915', 'TRƯỜNG ĐẠI HỌC KHOA HỌC TỰ NHIÊN - ĐH QG HÀ NỘI', 'QHT'),
('916', 'TRƯỜNG ĐẠI HỌC KHOA HỌC TỰ NHIÊN - ĐH QG TP.HCM', 'QST'),
('917', 'TRƯỜNG ĐẠI HỌC KHOA HỌC VÀ CÔNG NGHỆ HÀ NỘI', 'KCN'),
('918', 'TRƯỜNG ĐẠI HỌC KHOA HỌC XÃ HỘI VÀ NHÂN VĂN - ĐH QG HÀ NỘI', 'QHX'),
('919', 'TRƯỜNG ĐẠI HỌC KHOA HỌC XÃ HỘI VÀ NHÂN VĂN - ĐH QG TP.HCM', 'QSX'),
('920', 'TRƯỜNG ĐẠI HỌC KIỂM SÁT HÀ NỘI', 'DKS'),
('921', 'TRƯỜNG ĐẠI HỌC KIÊN GIANG', 'TKG'),
('922', 'TRƯỜNG ĐẠI HỌC KIẾN TRÚC HÀ NỘI', 'HAU'),
('923', 'TRƯỜNG ĐẠI HỌC KIẾN TRÚC THÀNH PHỐ HỒ CHÍ MINH', 'KTS'),
('925', 'TRƯỜNG ĐẠI HỌC KINH TẾ - ĐH ĐÀ NẴNG', 'DDQ'),
('926', 'TRƯỜNG ĐẠI HỌC KINH TẾ - ĐH HUẾ', 'DHK'),
('927', 'TRƯỜNG ĐẠI HỌC KINH TẾ - ĐH QG HÀ NỘI', 'QHE'),
('928', 'TRƯỜNG ĐẠI HỌC KINH TẾ - LUẬT - ĐH QG TP.HCM', 'QSK'),
('929', 'TRƯỜNG ĐẠI HỌC KINH TẾ & QUẢN TRỊ KINH DOANH - ĐH THÁI NGUYÊN', 'DTE'),
('930', 'TRƯỜNG ĐẠI HỌC KINH TẾ KỸ THUẬT CÔNG NGHIỆP', 'DKK'),
('931', 'TRƯỜNG ĐẠI HỌC KINH TẾ NGHỆ AN', 'CEA'),
('932', 'TRƯỜNG ĐẠI HỌC KINH TẾ QUỐC DÂN', 'KHA'),
('933', 'TRƯỜNG ĐẠI HỌC KINH TẾ TP. HỒ CHÍ MINH', 'KSA'),
('934', 'TRƯỜNG ĐẠI HỌC KỸ THUẬT - CÔNG NGHỆ CẦN THƠ', 'KCC'),
('935', 'TRƯỜNG ĐẠI HỌC KỸ THUẬT - HẬU CẦN CÔNG AN NHÂN DÂN', 'HCB'),
('936', 'TRƯỜNG ĐẠI HỌC KỸ THUẬT CÔNG NGHIỆP - ĐH THÁI NGUYÊN', 'DTK'),
('937', 'TRƯỜNG ĐẠI HỌC KỸ THUẬT Y - DƯỢC ĐÀ NẴNG', 'YDN'),
('938', 'TRƯỜNG ĐẠI HỌC KỸ THUẬT Y TẾ HẢI DƯƠNG', 'DKY'),
('939', 'TRƯỜNG ĐẠI HỌC LÂM NGHIỆP', 'LNH'),
('940', 'Trường đại học Lâm nghiệp - Cơ sở 2', 'LNS'),
('941', 'TRƯỜNG ĐẠI HỌC LAO ĐỘNG - XÃ HỘI', 'DLS'),
('942', 'TRƯỜNG ĐẠI HỌC LAO ĐỘNG - XÃ HỘI - Cơ sở Sơn Tây', 'DLT'),
('943', 'TRƯỜNG ĐẠI HỌC LAO ĐỘNG - XÃ HỘI (cơ sở II Phía Nam)', 'DLX'),
('944', 'TRƯỜNG ĐẠI HỌC LUẬT - ĐH HUẾ', 'DHA'),
('945', 'TRƯỜNG ĐẠI HỌC LUẬT HÀ NỘI', 'LPH'),
('946', 'TRƯỜNG ĐẠI HỌC LUẬT TP. HỒ CHÍ MINH', 'LPS'),
('947', 'TRƯỜNG ĐẠI HỌC MỎ - ĐỊA CHẤT', 'MDA'),
('948', 'TRƯỜNG ĐẠI HỌC MỞ TP. HỒ CHÍ MINH', 'MBS'),
('949', 'TRƯỜNG ĐẠI HỌC MỸ TẠI VIỆT NAM(*)', 'AUV'),
('950', 'TRƯỜNG ĐẠI HỌC MỸ THUẬT CÔNG NGHIỆP', 'MTC'),
('951', 'TRƯỜNG ĐẠI HỌC MỸ THUẬT TP. HỒ CHÍ MINH', 'MTS'),
('952', 'TRƯỜNG ĐẠI HỌC MỸ THUẬT VIỆT NAM', 'MTH'),
('953', 'TRƯỜNG ĐẠI HỌC NGÂN HÀNG TP. HỒ CHÍ MINH', 'NHS'),
('954', 'TRƯỜNG ĐẠI HỌC NGHỆ THUẬT - ĐH HUẾ', 'DHN'),
('955', 'TRƯỜNG ĐẠI HỌC NGÔ QUYỀN (Sĩ quan Công binh)', 'SNH'),
('956', 'TRƯỜNG ĐẠI HỌC NGOẠI NGỮ - ĐH ĐÀ NẴNG', 'DDF'),
('957', 'TRƯỜNG ĐẠI HỌC NGOẠI NGỮ - ĐH HUẾ', 'DHF'),
('958', 'TRƯỜNG ĐẠI HỌC NGOẠI NGỮ - ĐH QG HÀ NỘI', 'QHF'),
('959', 'TRƯỜNG ĐẠI HỌC NGOẠI THƯƠNG', 'NTH'),
('960', 'Trường Đại học Ngoại thương - Cơ sở phía Nam', 'NTS'),
('961', 'TRƯỜNG ĐẠI HỌC NGUYỄN HUỆ', 'LBS'),
('962', 'TRƯỜNG ĐẠI HỌC NHA TRANG', 'TSN'),
('963', 'TRƯỜNG ĐẠI HỌC NỘI VỤ HÀ NỘI', 'DNV'),
('964', 'TRƯỜNG ĐẠI HỌC NÔNG LÂM - ĐH HUẾ', 'DHL'),
('965', 'TRƯỜNG ĐẠI HỌC NÔNG LÂM - ĐH THÁI NGUYÊN', 'DTN'),
('966', 'TRƯỜNG ĐẠI HỌC NÔNG LÂM BẮC GIANG', 'DBG'),
('967', 'TRƯỜNG ĐẠI HỌC NÔNG LÂM TP. HỒ CHÍ MINH', 'NLS'),
('968', 'TRƯỜNG ĐẠI HỌC PHẠM VĂN ĐỒNG', 'DPQ'),
('969', 'TRƯỜNG ĐẠI HỌC PHÒNG CHÁY CHỮA CHÁY', 'PCH'),
('970', 'TRƯỜNG ĐẠI HỌC PHÚ YÊN', 'DPY'),
('971', 'TRƯỜNG ĐẠI HỌC QUẢNG BÌNH', 'DQB'),
('972', 'TRƯỜNG ĐẠI HỌC QUẢNG NAM', 'DQU'),
('973', 'TRƯỜNG ĐẠI HỌC QUỐC TẾ - ĐH QG TP.HCM', 'QSQ'),
('974', 'TRƯỜNG ĐẠI HỌC QUỐC TẾ RMIT VIỆT NAM(*)', 'RMU'),
('975', 'TRƯỜNG ĐẠI HỌC QUY NHƠN', 'DQN'),
('976', 'TRƯỜNG ĐẠI HỌC SÀI GÒN', 'SGD'),
('977', 'TRƯỜNG ĐẠI HỌC SÂN KHẤU ĐIỆN ẢNH HÀ NỘI', 'SKD'),
('978', 'TRƯỜNG ĐẠI HỌC SÂN KHẤU, ĐIỆN ẢNH TP. HỒ CHÍ MINH', 'DSD'),
('979', 'TRƯỜNG ĐẠI HỌC SAO ĐỎ', 'SDU'),
('980', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM - ĐH ĐÀ NẴNG', 'DDS'),
('981', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM - ĐH HUẾ', 'DHS'),
('982', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM - ĐH THÁI NGUYÊN', 'DTS'),
('983', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM HÀ NỘI', 'SPH'),
('984', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM HÀ NỘI 2', 'SP2'),
('985', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT HƯNG YÊN', 'SKH'),
('986', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT NAM ĐỊNH', 'SKN'),
('987', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT TP. HỒ CHÍ MINH', 'SPK'),
('988', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VINH', 'SKV'),
('989', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT VĨNH LONG', 'VLU'),
('990', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM NGHỆ THUẬT TRUNG ƯƠNG', 'GNT'),
('991', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM THỂ DỤC THỂ THAO HÀ NỘI', 'TDH'),
('992', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM THỂ DỤC THỂ THAO TP.HCM', 'STS'),
('993', 'TRƯỜNG ĐẠI HỌC SƯ PHẠM TP. HỒ CHÍ MINH', 'SPS'),
('994', 'TRƯỜNG ĐẠI HỌC TÀI CHÍNH - KẾ TOÁN', 'DKQ'),
('995', 'TRƯỜNG ĐẠI HỌC TÀI CHÍNH - MARKETING', 'DMS'),
('996', 'TRƯỜNG ĐẠI HỌC TÀI CHÍNH - QUẢN TRỊ KINH DOANH', 'DFA'),
('997', 'TRƯỜNG ĐẠI HỌC TÀI NGUYÊN VÀ MÔI TRƯỜNG HÀ NỘI', 'DMT'),
('998', 'TRƯỜNG ĐẠI HỌC TÀI NGUYÊN VÀ MÔI TRƯỜNG TP. HỒ CHÍ MINH', 'DTM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bomon`
--
ALTER TABLE `tbl_bomon`
  ADD PRIMARY KEY (`id_bo_mon`);

--
-- Indexes for table `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD PRIMARY KEY (`id_can_bo`),
  ADD KEY `id_ton_giao` (`id_ton_giao`),
  ADD KEY `id_quoc_tich` (`id_quoc_tich`),
  ADD KEY `id_chuyen_mon` (`id_chuyen_mon`),
  ADD KEY `id_dan_toc` (`id_dan_toc`);

--
-- Indexes for table `tbl_canbo_chedo`
--
ALTER TABLE `tbl_canbo_chedo`
  ADD PRIMARY KEY (`id_canbo`,`id_chedo`),
  ADD KEY `id_chedo` (`id_chedo`);

--
-- Indexes for table `tbl_canbo_chucdanh`
--
ALTER TABLE `tbl_canbo_chucdanh`
  ADD PRIMARY KEY (`id_can_bo`,`id_chuc_danh`),
  ADD KEY `id_chuc_danh` (`id_chuc_danh`);

--
-- Indexes for table `tbl_canbo_chucvu`
--
ALTER TABLE `tbl_canbo_chucvu`
  ADD PRIMARY KEY (`id_can_bo`,`id_chuc_vu`),
  ADD KEY `id_chuc_vu` (`id_chuc_vu`);

--
-- Indexes for table `tbl_canbo_chungchi`
--
ALTER TABLE `tbl_canbo_chungchi`
  ADD PRIMARY KEY (`id_can_bo`,`id_chung_chi`),
  ADD KEY `id_chung_chi` (`id_chung_chi`);

--
-- Indexes for table `tbl_canbo_dats`
--
ALTER TABLE `tbl_canbo_dats`
  ADD PRIMARY KEY (`id_canbo`,`id_deantuyensinh`),
  ADD KEY `id_nganh` (`id_nganh`),
  ADD KEY `id_deantuyensinh` (`id_deantuyensinh`);

--
-- Indexes for table `tbl_canbo_doandang`
--
ALTER TABLE `tbl_canbo_doandang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_canbo` (`id_canbo`);

--
-- Indexes for table `tbl_canbo_donvi`
--
ALTER TABLE `tbl_canbo_donvi`
  ADD PRIMARY KEY (`id_can_bo`,`id_don_vi`),
  ADD KEY `id_don_vi` (`id_don_vi`);

--
-- Indexes for table `tbl_canbo_hocham`
--
ALTER TABLE `tbl_canbo_hocham`
  ADD PRIMARY KEY (`id_can_bo`,`id_hoc_ham`),
  ADD KEY `id_hoc_ham` (`id_hoc_ham`);

--
-- Indexes for table `tbl_canbo_hocvi`
--
ALTER TABLE `tbl_canbo_hocvi`
  ADD PRIMARY KEY (`id_can_bo`,`id_hoc_vi`),
  ADD KEY `id_hoc_vi` (`id_hoc_vi`);

--
-- Indexes for table `tbl_canbo_hopdong`
--
ALTER TABLE `tbl_canbo_hopdong`
  ADD PRIMARY KEY (`id_can_bo`,`id_hop_dong`),
  ADD KEY `id_hop_dong` (`id_hop_dong`);

--
-- Indexes for table `tbl_canbo_khenthuong`
--
ALTER TABLE `tbl_canbo_khenthuong`
  ADD PRIMARY KEY (`macb`,`id_thidua_khenthuong`),
  ADD KEY `id_thidua_khenthuong` (`id_thidua_khenthuong`);

--
-- Indexes for table `tbl_canbo_nganh`
--
ALTER TABLE `tbl_canbo_nganh`
  ADD PRIMARY KEY (`id_can_bo`,`id_nganh`),
  ADD KEY `id_nganh` (`id_nganh`);

--
-- Indexes for table `tbl_canbo_qtct`
--
ALTER TABLE `tbl_canbo_qtct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_canbo` (`id_canbo`),
  ADD KEY `id_donvi` (`id_donvi`),
  ADD KEY `id_bomon` (`id_bomon`);

--
-- Indexes for table `tbl_canbo_quyhoach`
--
ALTER TABLE `tbl_canbo_quyhoach`
  ADD PRIMARY KEY (`id_canbo`,`id_quyhoach`),
  ADD KEY `id_quyhoach` (`id_quyhoach`);

--
-- Indexes for table `tbl_canbo_truong`
--
ALTER TABLE `tbl_canbo_truong`
  ADD PRIMARY KEY (`id_can_bo`,`id_truong`),
  ADD KEY `id_truong` (`id_truong`);

--
-- Indexes for table `tbl_chedo`
--
ALTER TABLE `tbl_chedo`
  ADD PRIMARY KEY (`id_chedo`);

--
-- Indexes for table `tbl_chucdanh`
--
ALTER TABLE `tbl_chucdanh`
  ADD PRIMARY KEY (`id_chuc_danh`);

--
-- Indexes for table `tbl_chucnang`
--
ALTER TABLE `tbl_chucnang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chucvu`
--
ALTER TABLE `tbl_chucvu`
  ADD PRIMARY KEY (`id_chuc_vu`);

--
-- Indexes for table `tbl_chungchi`
--
ALTER TABLE `tbl_chungchi`
  ADD PRIMARY KEY (`id_chung_chi`);

--
-- Indexes for table `tbl_chuongtrinhdaotao_thongtin`
--
ALTER TABLE `tbl_chuongtrinhdaotao_thongtin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_chuongtrinhdaotao_thongtin_ibfk_1` (`loaicmdt`),
  ADD KEY `id_canbo` (`id_canbo`);

--
-- Indexes for table `tbl_chuyenmondaotao`
--
ALTER TABLE `tbl_chuyenmondaotao`
  ADD PRIMARY KEY (`id_chuyen_mon`);

--
-- Indexes for table `tbl_congtac`
--
ALTER TABLE `tbl_congtac`
  ADD PRIMARY KEY (`id_cong_tac`);

--
-- Indexes for table `tbl_dantoc`
--
ALTER TABLE `tbl_dantoc`
  ADD PRIMARY KEY (`id_dan_toc`),
  ADD KEY `iMaDT` (`id_dan_toc`);

--
-- Indexes for table `tbl_deantuyensinh`
--
ALTER TABLE `tbl_deantuyensinh`
  ADD PRIMARY KEY (`id_deantuyensinh`);

--
-- Indexes for table `tbl_donvi`
--
ALTER TABLE `tbl_donvi`
  ADD PRIMARY KEY (`id_don_vi`);

--
-- Indexes for table `tbl_hocham`
--
ALTER TABLE `tbl_hocham`
  ADD PRIMARY KEY (`id_hoc_ham`);

--
-- Indexes for table `tbl_hocvi`
--
ALTER TABLE `tbl_hocvi`
  ADD PRIMARY KEY (`id_hoc_vi`);

--
-- Indexes for table `tbl_hopdong`
--
ALTER TABLE `tbl_hopdong`
  ADD PRIMARY KEY (`id_hop_dong`),
  ADD KEY `id_loai_hop_dong` (`id_loai_hop_dong`);

--
-- Indexes for table `tbl_loaihopdong`
--
ALTER TABLE `tbl_loaihopdong`
  ADD PRIMARY KEY (`id_loai_hop_dong`);

--
-- Indexes for table `tbl_namtn_chuyenmondaotao`
--
ALTER TABLE `tbl_namtn_chuyenmondaotao`
  ADD PRIMARY KEY (`id_namcmdt`),
  ADD KEY `view_hien` (`view_hien`);

--
-- Indexes for table `tbl_ngachgiangvien`
--
ALTER TABLE `tbl_ngachgiangvien`
  ADD PRIMARY KEY (`id_ngach_giang_vien`);

--
-- Indexes for table `tbl_ngach_canbo`
--
ALTER TABLE `tbl_ngach_canbo`
  ADD PRIMARY KEY (`id_can_bo`,`id_ngach_giang_vien`),
  ADD KEY `id_ngach_giang_vien` (`id_ngach_giang_vien`);

--
-- Indexes for table `tbl_nganh`
--
ALTER TABLE `tbl_nganh`
  ADD PRIMARY KEY (`id_nganh`),
  ADD KEY `id_nhom_nganh` (`id_nhom_nganh`);

--
-- Indexes for table `tbl_nhomnganh`
--
ALTER TABLE `tbl_nhomnganh`
  ADD PRIMARY KEY (`id_nhom_nganh`);

--
-- Indexes for table `tbl_nhom_khenthuong`
--
ALTER TABLE `tbl_nhom_khenthuong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quatrinhdaotao`
--
ALTER TABLE `tbl_quatrinhdaotao`
  ADD PRIMARY KEY (`id_madt`);

--
-- Indexes for table `tbl_quoctich`
--
ALTER TABLE `tbl_quoctich`
  ADD PRIMARY KEY (`id_quoc_tich`);

--
-- Indexes for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  ADD PRIMARY KEY (`maquyen`);

--
-- Indexes for table `tbl_quyhoach`
--
ALTER TABLE `tbl_quyhoach`
  ADD PRIMARY KEY (`id_quyhoach`);

--
-- Indexes for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`taikhoan`),
  ADD KEY `FK_quyen_taikhoan` (`maquyen`),
  ADD KEY `FK_canbo_taikhoan` (`macb`);

--
-- Indexes for table `tbl_tdkt_canbo`
--
ALTER TABLE `tbl_tdkt_canbo`
  ADD PRIMARY KEY (`id_can_bo`,`id_thidua_khenthuong`),
  ADD KEY `id_thidua_khenthuong` (`id_thidua_khenthuong`);

--
-- Indexes for table `tbl_tdkt_donvi`
--
ALTER TABLE `tbl_tdkt_donvi`
  ADD PRIMARY KEY (`id_don_vi`,`id_thidua_khenthuong`),
  ADD KEY `id_thidua_khenthuong` (`id_thidua_khenthuong`);

--
-- Indexes for table `tbl_tdkt_truong`
--
ALTER TABLE `tbl_tdkt_truong`
  ADD PRIMARY KEY (`id_truong`,`id_thidua_khenthuong`),
  ADD KEY `id_thidua_khenthuong` (`id_thidua_khenthuong`);

--
-- Indexes for table `tbl_thidua_khenthuong`
--
ALTER TABLE `tbl_thidua_khenthuong`
  ADD PRIMARY KEY (`id_thidua_khenthuong`),
  ADD KEY `id_cong_tac` (`id_cong_tac`),
  ADD KEY `id_nhomkhenthuong` (`id_nhomkhenthuong`);

--
-- Indexes for table `tbl_tongiao`
--
ALTER TABLE `tbl_tongiao`
  ADD PRIMARY KEY (`id_ton_giao`);

--
-- Indexes for table `tbl_trangthai_dangvien`
--
ALTER TABLE `tbl_trangthai_dangvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_truong`
--
ALTER TABLE `tbl_truong`
  ADD PRIMARY KEY (`id_truong`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_canbo_doandang`
--
ALTER TABLE `tbl_canbo_doandang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_canbo_qtct`
--
ALTER TABLE `tbl_canbo_qtct`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_chedo`
--
ALTER TABLE `tbl_chedo`
  MODIFY `id_chedo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_chucnang`
--
ALTER TABLE `tbl_chucnang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_chuongtrinhdaotao_thongtin`
--
ALTER TABLE `tbl_chuongtrinhdaotao_thongtin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `tbl_dantoc`
--
ALTER TABLE `tbl_dantoc`
  MODIFY `id_dan_toc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_deantuyensinh`
--
ALTER TABLE `tbl_deantuyensinh`
  MODIFY `id_deantuyensinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_namtn_chuyenmondaotao`
--
ALTER TABLE `tbl_namtn_chuyenmondaotao`
  MODIFY `id_namcmdt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_nhom_khenthuong`
--
ALTER TABLE `tbl_nhom_khenthuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_quatrinhdaotao`
--
ALTER TABLE `tbl_quatrinhdaotao`
  MODIFY `id_madt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `maquyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quyhoach`
--
ALTER TABLE `tbl_quyhoach`
  MODIFY `id_quyhoach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_trangthai_dangvien`
--
ALTER TABLE `tbl_trangthai_dangvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD CONSTRAINT `tbl_canbo_ibfk_1` FOREIGN KEY (`id_dan_toc`) REFERENCES `tbl_dantoc` (`id_dan_toc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_ibfk_2` FOREIGN KEY (`id_quoc_tich`) REFERENCES `tbl_quoctich` (`id_quoc_tich`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_ibfk_3` FOREIGN KEY (`id_chuyen_mon`) REFERENCES `tbl_chuyenmondaotao` (`id_chuyen_mon`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_ibfk_4` FOREIGN KEY (`id_ton_giao`) REFERENCES `tbl_tongiao` (`id_ton_giao`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_chedo`
--
ALTER TABLE `tbl_canbo_chedo`
  ADD CONSTRAINT `tbl_canbo_chedo_ibfk_1` FOREIGN KEY (`id_canbo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_chedo_ibfk_2` FOREIGN KEY (`id_chedo`) REFERENCES `tbl_chedo` (`id_chedo`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_chucdanh`
--
ALTER TABLE `tbl_canbo_chucdanh`
  ADD CONSTRAINT `tbl_canbo_chucdanh_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_chucdanh_ibfk_2` FOREIGN KEY (`id_chuc_danh`) REFERENCES `tbl_chucdanh` (`id_chuc_danh`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_chucvu`
--
ALTER TABLE `tbl_canbo_chucvu`
  ADD CONSTRAINT `tbl_canbo_chucvu_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_chucvu_ibfk_2` FOREIGN KEY (`id_chuc_vu`) REFERENCES `tbl_chucvu` (`id_chuc_vu`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_chungchi`
--
ALTER TABLE `tbl_canbo_chungchi`
  ADD CONSTRAINT `tbl_canbo_chungchi_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_chungchi_ibfk_2` FOREIGN KEY (`id_chung_chi`) REFERENCES `tbl_chungchi` (`id_chung_chi`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_dats`
--
ALTER TABLE `tbl_canbo_dats`
  ADD CONSTRAINT `tbl_canbo_dats_ibfk_1` FOREIGN KEY (`id_canbo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_dats_ibfk_2` FOREIGN KEY (`id_nganh`) REFERENCES `tbl_nganh` (`id_nganh`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_dats_ibfk_3` FOREIGN KEY (`id_deantuyensinh`) REFERENCES `tbl_deantuyensinh` (`id_deantuyensinh`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_doandang`
--
ALTER TABLE `tbl_canbo_doandang`
  ADD CONSTRAINT `tbl_canbo_doandang_ibfk_1` FOREIGN KEY (`id_canbo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_donvi`
--
ALTER TABLE `tbl_canbo_donvi`
  ADD CONSTRAINT `tbl_canbo_donvi_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_donvi_ibfk_2` FOREIGN KEY (`id_don_vi`) REFERENCES `tbl_donvi` (`id_don_vi`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_hocham`
--
ALTER TABLE `tbl_canbo_hocham`
  ADD CONSTRAINT `tbl_canbo_hocham_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_hocham_ibfk_2` FOREIGN KEY (`id_hoc_ham`) REFERENCES `tbl_hocham` (`id_hoc_ham`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_hocvi`
--
ALTER TABLE `tbl_canbo_hocvi`
  ADD CONSTRAINT `tbl_canbo_hocvi_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_hocvi_ibfk_2` FOREIGN KEY (`id_hoc_vi`) REFERENCES `tbl_hocvi` (`id_hoc_vi`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_hopdong`
--
ALTER TABLE `tbl_canbo_hopdong`
  ADD CONSTRAINT `tbl_canbo_hopdong_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_hopdong_ibfk_2` FOREIGN KEY (`id_hop_dong`) REFERENCES `tbl_hopdong` (`id_hop_dong`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_khenthuong`
--
ALTER TABLE `tbl_canbo_khenthuong`
  ADD CONSTRAINT `tbl_canbo_khenthuong_ibfk_1` FOREIGN KEY (`macb`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_khenthuong_ibfk_2` FOREIGN KEY (`id_thidua_khenthuong`) REFERENCES `tbl_thidua_khenthuong` (`id_thidua_khenthuong`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_nganh`
--
ALTER TABLE `tbl_canbo_nganh`
  ADD CONSTRAINT `tbl_canbo_nganh_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_nganh_ibfk_2` FOREIGN KEY (`id_nganh`) REFERENCES `tbl_nganh` (`id_nganh`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_qtct`
--
ALTER TABLE `tbl_canbo_qtct`
  ADD CONSTRAINT `tbl_canbo_qtct_ibfk_1` FOREIGN KEY (`id_bomon`) REFERENCES `tbl_bomon` (`id_bo_mon`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_qtct_ibfk_2` FOREIGN KEY (`id_canbo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_qtct_ibfk_3` FOREIGN KEY (`id_donvi`) REFERENCES `tbl_donvi` (`id_don_vi`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_quyhoach`
--
ALTER TABLE `tbl_canbo_quyhoach`
  ADD CONSTRAINT `tbl_canbo_quyhoach_ibfk_1` FOREIGN KEY (`id_canbo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_quyhoach_ibfk_2` FOREIGN KEY (`id_quyhoach`) REFERENCES `tbl_quyhoach` (`id_quyhoach`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_canbo_truong`
--
ALTER TABLE `tbl_canbo_truong`
  ADD CONSTRAINT `tbl_canbo_truong_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_canbo_truong_ibfk_2` FOREIGN KEY (`id_truong`) REFERENCES `tbl_truong` (`id_truong`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_chuongtrinhdaotao_thongtin`
--
ALTER TABLE `tbl_chuongtrinhdaotao_thongtin`
  ADD CONSTRAINT `tbl_chuongtrinhdaotao_thongtin_ibfk_2` FOREIGN KEY (`id_canbo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_chuongtrinhdaotao_thongtin_ibfk_3` FOREIGN KEY (`loaicmdt`) REFERENCES `tbl_namtn_chuyenmondaotao` (`view_hien`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_hopdong`
--
ALTER TABLE `tbl_hopdong`
  ADD CONSTRAINT `tbl_hopdong_ibfk_1` FOREIGN KEY (`id_loai_hop_dong`) REFERENCES `tbl_loaihopdong` (`id_loai_hop_dong`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_ngach_canbo`
--
ALTER TABLE `tbl_ngach_canbo`
  ADD CONSTRAINT `tbl_ngach_canbo_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_ngach_canbo_ibfk_2` FOREIGN KEY (`id_ngach_giang_vien`) REFERENCES `tbl_ngachgiangvien` (`id_ngach_giang_vien`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_nganh`
--
ALTER TABLE `tbl_nganh`
  ADD CONSTRAINT `tbl_nganh_ibfk_1` FOREIGN KEY (`id_nhom_nganh`) REFERENCES `tbl_nhomnganh` (`id_nhom_nganh`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD CONSTRAINT `FK_canbo_taikhoan` FOREIGN KEY (`macb`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_quyen_taikhoan` FOREIGN KEY (`maquyen`) REFERENCES `tbl_quyen` (`maquyen`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tdkt_canbo`
--
ALTER TABLE `tbl_tdkt_canbo`
  ADD CONSTRAINT `tbl_tdkt_canbo_ibfk_1` FOREIGN KEY (`id_can_bo`) REFERENCES `tbl_canbo` (`id_can_bo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tdkt_canbo_ibfk_2` FOREIGN KEY (`id_thidua_khenthuong`) REFERENCES `tbl_thidua_khenthuong` (`id_thidua_khenthuong`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tdkt_donvi`
--
ALTER TABLE `tbl_tdkt_donvi`
  ADD CONSTRAINT `tbl_tdkt_donvi_ibfk_1` FOREIGN KEY (`id_don_vi`) REFERENCES `tbl_donvi` (`id_don_vi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tdkt_donvi_ibfk_2` FOREIGN KEY (`id_thidua_khenthuong`) REFERENCES `tbl_thidua_khenthuong` (`id_thidua_khenthuong`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tdkt_truong`
--
ALTER TABLE `tbl_tdkt_truong`
  ADD CONSTRAINT `tbl_tdkt_truong_ibfk_1` FOREIGN KEY (`id_truong`) REFERENCES `tbl_truong` (`id_truong`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tdkt_truong_ibfk_2` FOREIGN KEY (`id_thidua_khenthuong`) REFERENCES `tbl_thidua_khenthuong` (`id_thidua_khenthuong`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_thidua_khenthuong`
--
ALTER TABLE `tbl_thidua_khenthuong`
  ADD CONSTRAINT `tbl_thidua_khenthuong_ibfk_1` FOREIGN KEY (`id_cong_tac`) REFERENCES `tbl_congtac` (`id_cong_tac`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_thidua_khenthuong_ibfk_2` FOREIGN KEY (`id_nhomkhenthuong`) REFERENCES `tbl_nhom_khenthuong` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
