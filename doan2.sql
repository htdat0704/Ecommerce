-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 05:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`) VALUES
(15, 'Sơn'),
(16, 'Dầu bóng'),
(17, 'Dầu nhớt'),
(18, 'Bình xịt');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `idsp1` int(11) DEFAULT NULL,
  `soluong1` int(11) DEFAULT NULL,
  `idsp2` int(11) DEFAULT NULL,
  `soluong2` int(11) DEFAULT NULL,
  `idsp3` int(11) DEFAULT NULL,
  `soluong3` int(11) DEFAULT NULL,
  `idsp4` int(11) DEFAULT NULL,
  `soluong4` int(11) DEFAULT NULL,
  `idsp5` int(11) DEFAULT NULL,
  `soluong5` int(11) DEFAULT NULL,
  `idsp6` int(11) DEFAULT NULL,
  `soluong6` int(11) DEFAULT NULL,
  `idsp7` int(11) DEFAULT NULL,
  `soluong7` int(11) DEFAULT NULL,
  `idsp8` int(11) DEFAULT NULL,
  `soluong8` int(11) DEFAULT NULL,
  `idsp9` int(11) DEFAULT NULL,
  `soluong9` int(11) DEFAULT NULL,
  `idsp10` int(11) DEFAULT NULL,
  `soluong10` int(11) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `iduser`, `trangthai`, `idsp1`, `soluong1`, `idsp2`, `soluong2`, `idsp3`, `soluong3`, `idsp4`, `soluong4`, `idsp5`, `soluong5`, `idsp6`, `soluong6`, `idsp7`, `soluong7`, `idsp8`, `soluong8`, `idsp9`, `soluong9`, `idsp10`, `soluong10`, `tongtien`, `ngay`, `thang`, `nam`) VALUES
(11, 4, 0, 28, 2, 29, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60000, 26, 1, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `dt` int(11) NOT NULL,
  `diachi` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `idadmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `username`, `password`, `hoten`, `dt`, `diachi`, `Email`, `ngaysinh`, `idadmin`) VALUES
(1, 'dtmh', '29121', 'Dương Thị Mỹ Huệ', 858182414, 'Làng Dương Nỗ', 'dtmh29@gmail.com', '2000-12-09', 1),
(2, 'htd', '0704', 'Hồ Thành Đạt', 935913209, 'Bà Triệu', 'hodat402@gmail.com', '2000-04-07', 1),
(4, 'mommom', 'abc123', 'Phan Văn Trung', 333444555, 'NGỰ BÌNH', 'trungsao@gmail.com', '1999-11-20', 0),
(6, 'usera', '1a', 'Hồ Thành A', 19921212, 'Huees', 'daaas@yahoo.com', '1992-02-01', 0),
(7, 'min', 'maxx', 'Thap', 12548541, 'Sao Thủy', 'h12302@gmail.com', '1999-04-21', 0),
(8, 'abcd', '1234', 'Dan Hu Tra', 654258414, 'Việt Nam', 'axza@sict.udn.vn', '1999-01-22', 0),
(9, 'deptrai', '123456', 'Anh Đẹp Trai', 543812611, 'Lê Quý Đôn', 'vai@yahoo.com', '1999-02-12', 0),
(10, 'emdep', '123456', 'Em Đẹp Gái', 199921001, '36 Lê Quyên', 'loljz@gmai.com', '1999-01-02', 0),
(11, 'badao', '12456', 'Bá Đạo', 2147483647, '89 Ngô Quyền', 'Quye@gmail.com', '1999-02-01', 0),
(12, 'deptrai', '123123', 'dalp', 123123123, '123123', 'as@yahoo.com', '2021-11-02', NULL),
(13, 'deptrai', '123123', 'dalp', 123123123, '123123', 'as@yahoo.com', '2021-11-02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nam`
--

CREATE TABLE `nam` (
  `id` int(11) NOT NULL,
  `nam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nam`
--

INSERT INTO `nam` (`id`, `nam`) VALUES
(1, 2018),
(2, 2019),
(3, 2020),
(4, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `nuoc`
--

CREATE TABLE `nuoc` (
  `id` int(11) NOT NULL,
  `tennuoc` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nuoc`
--

INSERT INTO `nuoc` (`id`, `tennuoc`) VALUES
(2, 'Việt Nam'),
(3, 'Campuchia'),
(4, 'US'),
(5, 'China'),
(6, 'Euro'),
(7, 'Korean'),
(8, 'Japan'),
(9, 'Russia'),
(10, 'Thailand');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `idth` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `idnuoc` int(11) NOT NULL,
  `mtsp` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `soluong`, `idth`, `iddm`, `idnuoc`, `mtsp`) VALUES
(27, 'Sơn Pine nhỏ nhiều màu', 10000, 100, 9, 15, 2, '#sondau #sonnhacua'),
(28, 'Sơn xịt', 30000, 30, 9, 18, 2, 'Sơn xịt'),
(29, 'Sơn TOA công nghiệp', 100000, 100, 4, 15, 2, 'Sơn nhà'),
(30, 'sơn dầu bóng', 90000, 12, 1, 16, 8, 'sơn bóng gỗ'),
(31, 'Sơn đâu bóng', 350000, 25, 8, 16, 3, 'Sơn dầu bóng cho xe máy'),
(32, 'Nhớt Fuchs Silkolene Pro 4 10w40 XP 4T 1L', 250000, 15, 2, 17, 5, 'Dầu nhớt cho xe máy'),
(33, 'Dầu nhớt liqui moly scooter 10w40', 160000, 60, 10, 17, 10, 'Dầu nhớt xe máy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment_sender_name` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`, `idsp`) VALUES
(61, 0, 'ok', '2', '2021-01-26 13:13:31', 29),
(62, 0, 'ok', '4', '2021-01-26 13:20:46', 28);

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `tenth` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `tenth`) VALUES
(1, 'Sony'),
(2, 'Apple'),
(3, 'Samsung'),
(4, 'Riot'),
(5, 'Razer'),
(6, 'Lg'),
(7, 'Toshiba'),
(8, 'Panasonic'),
(9, 'Sky'),
(10, 'Daikin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nam`
--
ALTER TABLE `nam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nuoc`
--
ALTER TABLE `nuoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nam`
--
ALTER TABLE `nam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nuoc`
--
ALTER TABLE `nuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
