-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2018 at 03:28 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DBDoAn`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE IF NOT EXISTS `ADMIN` (
  `user` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`user`, `password`, `fullName`) VALUES
('admin', NULL, 'Quản trị viên'),
('ky', NULL, 'Nguyễn Hồng Kỳ');

-- --------------------------------------------------------

--
-- Table structure for table `CHITIETDONDATHANG`
--

CREATE TABLE IF NOT EXISTS `CHITIETDONDATHANG` (
  `STT` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `idGioHang` int(11) NOT NULL,
  `idSanPham` int(11) NOT NULL,
  `Gia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `CITY`
--

CREATE TABLE IF NOT EXISTS `CITY` (
  `idCITY` int(11) NOT NULL,
  `NameCity` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CITY`
--

INSERT INTO `CITY` (`idCITY`, `NameCity`) VALUES
(1, 'Thành phố Cần Thơ'),
(2, 'Thành phố Đà Nẵng'),
(3, 'Thành phố Hà Nội'),
(4, 'Thành phố Hải Phòng'),
(5, 'Thành phố Hồ Chí Minh'),
(6, 'Tỉnh An Giang'),
(7, 'Tỉnh Bà Rịa - Vũng Tàu'),
(8, 'Tỉnh Bắc Giang'),
(9, 'Tỉnh Bắc Kạn'),
(10, 'Tỉnh Bạc Liêu'),
(11, 'Tỉnh Bắc Ninh'),
(12, 'Tỉnh Bến Tre'),
(13, 'Tỉnh Bình Định'),
(14, 'Tỉnh Bình Dương'),
(15, 'Tỉnh Bình Phước'),
(16, 'Tỉnh Bình Thuận'),
(17, 'Tỉnh Cà Mau'),
(18, 'Tỉnh Cao Bằng'),
(19, 'Tỉnh Đắk Lắk'),
(20, 'Tỉnh Đắk Nông'),
(21, 'Tỉnh Điện Biên'),
(22, 'Tỉnh Đồng Nai'),
(23, 'Tỉnh Đồng Tháp'),
(24, 'Tỉnh Gia Lai'),
(25, 'Tỉnh Hà Giang'),
(26, 'Tỉnh Hà Nam'),
(27, 'Tỉnh Hà Tĩnh'),
(28, 'Tỉnh Hải Dương'),
(29, 'Tỉnh Hậu Giang'),
(30, 'Tỉnh Hoà Bình'),
(31, 'Tỉnh Hưng Yên'),
(32, 'Tỉnh Khánh Hòa'),
(33, 'Tỉnh Kiên Giang'),
(34, 'Tỉnh Kon Tum'),
(35, 'Tỉnh Lai Châu'),
(36, 'Tỉnh Lâm Đồng'),
(37, 'Tỉnh Lạng Sơn'),
(38, 'Tỉnh Lào Cai'),
(39, 'Tỉnh Long An'),
(40, 'Tỉnh Nam Định'),
(41, 'Tỉnh Nghệ An'),
(42, 'Tỉnh Ninh Bình'),
(43, 'Tỉnh Ninh Thuận'),
(44, 'Tỉnh Phú Thọ'),
(45, 'Tỉnh Phú Yên'),
(46, 'Tỉnh Quảng Bình'),
(47, 'Tỉnh Quảng Nam'),
(48, 'Tỉnh Quảng Ngãi'),
(49, 'Tỉnh Quảng Ninh'),
(50, 'Tỉnh Quảng Trị'),
(51, 'Tỉnh Sóc Trăng'),
(52, 'Tỉnh Sơn La'),
(53, 'Tỉnh Tây Ninh'),
(54, 'Tỉnh Thái Bình'),
(55, 'Tỉnh Thái Nguyên'),
(56, 'Tỉnh Thanh Hóa'),
(57, 'Tỉnh Thừa Thiên Huế'),
(58, 'Tỉnh Tiền Giang'),
(59, 'Tỉnh Trà Vinh'),
(60, 'Tỉnh Tuyên Quang'),
(61, 'Tỉnh Vĩnh Long'),
(62, 'Tỉnh Vĩnh Phúc'),
(63, 'Tỉnh Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `DONDATHANG`
--

CREATE TABLE IF NOT EXISTS `DONDATHANG` (
  `idGioHang` int(11) NOT NULL,
  `TrangThai` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  `Time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `LOAISANPHAM`
--

CREATE TABLE IF NOT EXISTS `LOAISANPHAM` (
  `idLoaiSanPham` int(11) NOT NULL,
  `TenLoai` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Deleted` tinyint(4) DEFAULT NULL,
  `Img` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `LOAISANPHAM`
--

INSERT INTO `LOAISANPHAM` (`idLoaiSanPham`, `TenLoai`, `Deleted`, `Img`) VALUES
(1, 'Áo', 0, 'images/LoaiSanPham/ao.png'),
(2, 'Quần', 0, 'images/LoaiSanPham/ao.png'),
(3, 'Mắt kính', 0, 'images/LoaiSanPham/ao.png'),
(4, 'Thắt lưng', 0, 'images/LoaiSanPham/ao.png'),
(5, 'Vớ', 0, 'images/LoaiSanPham/ao.png'),
(6, 'Giày', 0, 'images/LoaiSanPham/ao.png'),
(7, 'Vớ', 0, 'images/LoaiSanPham/ao.png'),
(8, 'Mũ', 0, 'images/LoaiSanPham/mu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `NHASANXUAT`
--

CREATE TABLE IF NOT EXISTS `NHASANXUAT` (
  `idNSX` int(11) NOT NULL,
  `TenNSX` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Deleted` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `NHASANXUAT`
--

INSERT INTO `NHASANXUAT` (`idNSX`, `TenNSX`, `Deleted`) VALUES
(1, 'FILA', 0),
(2, 'Adidas', 0),
(3, 'Vans', 0),
(4, 'Louis Vuitton', 0),
(5, 'Chanel', 0),
(6, 'Gucci', 0),
(7, 'Nike', 0),
(8, 'Converse', 0);

-- --------------------------------------------------------

--
-- Table structure for table `SANPHAM`
--

CREATE TABLE IF NOT EXISTS `SANPHAM` (
  `idSanPham` int(11) NOT NULL,
  `TenSP` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` float DEFAULT NULL,
  `SLXem` int(11) DEFAULT NULL,
  `SLBan` int(11) DEFAULT NULL,
  `MoTa` mediumtext COLLATE utf8_unicode_ci,
  `XuatXu` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LinkURL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idLoaiSanPham` int(11) NOT NULL,
  `idNSX` int(11) NOT NULL,
  `Time` date DEFAULT NULL,
  `Deleted` tinyint(4) DEFAULT NULL,
  `Sex` int(11) DEFAULT NULL,
  `Img` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SANPHAM`
--

INSERT INTO `SANPHAM` (`idSanPham`, `TenSP`, `Gia`, `SLXem`, `SLBan`, `MoTa`, `XuatXu`, `LinkURL`, `idLoaiSanPham`, `idNSX`, `Time`, `Deleted`, `Sex`, `Img`) VALUES
(1, 'Áo thun thể thao nam Adidas Coref Jersey (màu Vàng)', 549000, 54, 47, NULL, 'Châu Âu', NULL, 1, 2, '2018-12-14', 0, 1, NULL),
(2, 'Áo thun thể thao nam Adidas Coref Jersey (màu Trang)', 549000, 53, 36, NULL, 'Châu Âu', NULL, 1, 2, '2018-12-14', 0, 1, NULL),
(3, 'Áo thun thể thao nam Adidas Tee 03 (màu Trắng)', 626000, 100, 81, NULL, 'Châu Âu', NULL, 1, 2, '2018-12-14', 0, 1, NULL),
(4, 'Áo thun Adidas CAMOUFLAGE BB TEE', 590000, 54, 37, NULL, 'Châu Âu', NULL, 1, 2, '2018-12-14', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE IF NOT EXISTS `USER` (
  `id` int(11) NOT NULL,
  `UserName` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FullName` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateBirth` date DEFAULT NULL,
  `idCity` int(11) NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`id`, `UserName`, `FullName`, `Password`, `DateBirth`, `idCity`, `Email`) VALUES
(1, 'an123', 'Nguyễn Thanh An', NULL, '1998-12-16', 1, 'an123@gmail.com'),
(2, 'khanh1998', 'Nguyễn Hữu Khánh', NULL, '1988-02-07', 2, 'khanh1998@gmail.com'),
(3, 'ky156000', 'Nguyễn Hồng Kỳ', NULL, '1999-01-08', 3, 'ky156000@gmail.com'),
(4, 'thanhbinh12', 'Trần Thanh Bình', NULL, '1995-07-03', 4, 'thanhbinh12@gmail.com'),
(5, 'phuclong', 'Lê Phúc Long', NULL, '1997-12-07', 5, 'phuclong@gmail.com'),
(6, 'tranle', 'Trần lê', NULL, '1990-03-11', 6, 'tranle@gmail.com'),
(7, 'lehoa', 'Lê Thái Hòa', NULL, '1998-12-12', 7, 'lehoa@gmail.com'),
(8, 'dongphuong', 'Phan Đông Phượng', NULL, '1998-12-13', 8, 'dongphuong@gmail.com'),
(9, 'nguyenle', 'Nguyễn Văn Lê', NULL, '1998-12-14', 9, 'nguyenle@gmail.com'),
(10, 'ngochau', 'Ngô Thị Châu', NULL, '1998-12-15', 10, 'ngochau@gmail.com'),
(11, 'banghi', 'Huỳnh Bá Nghi', NULL, '1998-12-16', 11, 'banghi@gmail.com'),
(12, 'ngockhanh', 'Nguyễn Ngọc Khánh', NULL, '1998-12-17', 12, 'ngockhanh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `CHITIETDONDATHANG`
--
ALTER TABLE `CHITIETDONDATHANG`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `fk_CHITIETDONDATHANG_DONDATHANG1_idx` (`idGioHang`),
  ADD KEY `fk_CHITIETDONDATHANG_SANPHAM1_idx` (`idSanPham`);

--
-- Indexes for table `CITY`
--
ALTER TABLE `CITY`
  ADD PRIMARY KEY (`idCITY`);

--
-- Indexes for table `DONDATHANG`
--
ALTER TABLE `DONDATHANG`
  ADD PRIMARY KEY (`idGioHang`),
  ADD KEY `fk_DONDATHANG_USER1_idx` (`idUser`);

--
-- Indexes for table `LOAISANPHAM`
--
ALTER TABLE `LOAISANPHAM`
  ADD PRIMARY KEY (`idLoaiSanPham`);

--
-- Indexes for table `NHASANXUAT`
--
ALTER TABLE `NHASANXUAT`
  ADD PRIMARY KEY (`idNSX`);

--
-- Indexes for table `SANPHAM`
--
ALTER TABLE `SANPHAM`
  ADD PRIMARY KEY (`idSanPham`),
  ADD KEY `fk_SANPHAM_LOAISANPHAM_idx` (`idLoaiSanPham`),
  ADD KEY `fk_SANPHAM_NHASANXUAT1_idx` (`idNSX`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_USER_CITY1_idx` (`idCity`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CHITIETDONDATHANG`
--
ALTER TABLE `CHITIETDONDATHANG`
  ADD CONSTRAINT `fk_CHITIETDONDATHANG_DONDATHANG1` FOREIGN KEY (`idGioHang`) REFERENCES `DONDATHANG` (`idGioHang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CHITIETDONDATHANG_SANPHAM1` FOREIGN KEY (`idSanPham`) REFERENCES `sanpham` (`idSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `DONDATHANG`
--
ALTER TABLE `DONDATHANG`
  ADD CONSTRAINT `fk_DONDATHANG_USER1` FOREIGN KEY (`idUser`) REFERENCES `USER` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `SANPHAM`
--
ALTER TABLE `SANPHAM`
  ADD CONSTRAINT `fk_SANPHAM_LOAISANPHAM` FOREIGN KEY (`idLoaiSanPham`) REFERENCES `LOAISANPHAM` (`idLoaiSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SANPHAM_NHASANXUAT1` FOREIGN KEY (`idNSX`) REFERENCES `NHASANXUAT` (`idNSX`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `USER`
--
ALTER TABLE `USER`
  ADD CONSTRAINT `fk_USER_CITY1` FOREIGN KEY (`idCity`) REFERENCES `city` (`idCITY`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
