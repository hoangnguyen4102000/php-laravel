-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 07:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlchungcu`
--

-- --------------------------------------------------------

--
-- Table structure for table `canho`
--

CREATE TABLE `canho` (
  `MaCanHo` int(11) NOT NULL,
  `DienTich` double NOT NULL,
  `Gia` double NOT NULL,
  `TrangThai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SoPhong` int(50) NOT NULL,
  `AnhCanHo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaCuDan` int(11) NOT NULL,
  `MaKhu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `canho`
--

INSERT INTO `canho` (`MaCanHo`, `DienTich`, `Gia`, `TrangThai`, `SoPhong`, `AnhCanHo`, `MaCuDan`, `MaKhu`) VALUES
(1, 30, 70000, 'Đã bán', 3, NULL, 3, 4),
(2, 40, 1000, 'Đã cho thuê', 3, NULL, 1, 8),
(3, 28, 60000, 'Còn Trống', 2, NULL, 12, 2),
(4, 45, 90000, 'Còn Trống', 4, NULL, 7, 3),
(5, 27, 65000, 'Đã bán', 3, NULL, 3, 5),
(6, 31, 70000, 'Còn Trống', 4, NULL, 9, 4),
(7, 26, 1100, 'Đã cho thuê', 3, NULL, 2, 4),
(8, 40, 100000, 'Còn Trống', 4, NULL, 10, 6),
(9, 38, 91000, 'Đã bán', 4, NULL, 6, 7),
(10, 29, 1500, 'Đã cho thuê', 3, NULL, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cudan`
--

CREATE TABLE `cudan` (
  `MaCuDan` int(11) NOT NULL,
  `TenCuDan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Gmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cudan`
--

INSERT INTO `cudan` (`MaCuDan`, `TenCuDan`, `NgaySinh`, `GioiTinh`, `SDT`, `Gmail`) VALUES
(1, 'Đỗ Thị Kim Anh', '2000-06-05', 'Nữ', '03453521445', 'Dothikimanh@gmail.'),
(2, 'Huỳnh Văn Tuấn Anh', '1997-10-01', 'Nam', '0453543145', 'huynhvantuananh@gmail.com'),
(3, 'Nguyễn Tấn Bảo', '1995-06-05', 'Nam', '045354313123', 'nguyentanbao@gmail.com'),
(4, 'Nguyễn Thị Diệu', '1999-11-04', 'Nữ', '045354348755', 'nguyenthidieu@gmail.com'),
(5, 'Lê Thị Thu Hà', '2000-11-06', 'Nữ', '04535488813', 'lethithuha@gmail.com'),
(6, 'Huỳnh Thị Kim Huệ', '2000-10-03', 'Nữ', '04573567956', 'huynhthikimhue@gmail.com'),
(7, 'Ngô Gia Huy', '1996-10-02', 'Nam', '04513427813', 'ngogiahuy@gmail.com'),
(8, 'Lê Anh Kha', '2001-11-03', 'Nam', '0453543145641', 'leanhkha@ggmail.com'),
(9, 'Phạm Ngọc Khánh', '1997-10-05', 'Nam', '04579854238', 'phamngockhanh2gmail.com'),
(10, 'Phan Anh Kiệt', '2000-11-18', 'Nam', '045457847621', 'phananhkiet@gmail.com'),
(11, 'Ngô Thị Lan', '1990-06-06', 'Nữ', '0563756321', 'ngothilan@gmail.com'),
(12, 'Nguyễn Quốc Lộc', '1989-10-04', 'Nam', '01244357326', 'nguyenquocloc@gmail.com'),
(13, 'Nguyễn Duy Nam', '1997-10-31', 'Nam', '0453541122', 'nguyenduynam@gmail.com'),
(14, 'Hồ Trung Nhân', '2000-10-15', 'Nam', '045731134342', 'hotrungnhan@gmail.com'),
(15, 'Nguyễn Thị Ánh Nhung', '2001-10-11', 'Nữ', '0552123343', 'nguyenthianhnhung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `MaHopDong` int(11) NOT NULL,
  `TenHopDong` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NgayGiaoDich` date NOT NULL,
  `MaCuDan` int(11) NOT NULL,
  `MaCanHo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`MaHopDong`, `TenHopDong`, `NgayGiaoDich`, `MaCuDan`, `MaCanHo`) VALUES
(1, 'Hợp Đồng Bán', '2021-11-09', 3, 1),
(2, 'Hợp Đồng Thuê', '2011-12-09', 5, 10),
(3, 'Hợp Đồng Bán', '2018-12-11', 3, 5),
(4, 'Hợp Đồng Thuê', '2012-11-15', 2, 7),
(5, 'Hợp Đồng Bán', '2017-12-20', 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `khucanho`
--

CREATE TABLE `khucanho` (
  `MaKhu` int(11) NOT NULL,
  `TenKhu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SoTang` int(50) NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khucanho`
--

INSERT INTO `khucanho` (`MaKhu`, `TenKhu`, `SoTang`, `DiaChi`, `MaNV`) VALUES
(1, 'Chung cư Investco Babylon', 30, 'Quận Tân Phú, Tp.HCM', 2),
(2, 'Him Lam Phú An', 25, 'Quận 9, Tp.HCM', 6),
(3, 'Chung cư Green Star Sky Garden', 28, 'Quận 7, Tp.HCM', 1),
(4, 'Chung cư Safira Khang Điền', 19, 'Quận 9, Tp.HCM', 4),
(5, 'Chung cư Mizuki Park', 33, 'Quận Bình Chánh,Tp.HCM', 5),
(6, 'Chung cư cao cấp The Lancaster', 40, 'Quận 1, Tp.HCM', 3),
(7, 'chung cư cao cấp D- One Sài Gòn', 30, 'Quận 12, Tp.HCM', 2),
(8, 'Chung cư Sai Gon Intela', 22, 'Quận Bình Chánh, Tp.HCM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DiachiNV` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDTNV` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinhNV` date NOT NULL,
  `LuongNV` int(20) NOT NULL,
  `GmailNV` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `DiachiNV`, `SDTNV`, `NgaySinhNV`, `LuongNV`, `GmailNV`) VALUES
(1, 'Nguyễn Văn Hùng', 'Đường Phạm Văn Đồng, quận Gò Vấp, TP.HCM', '03434254567', '1999-11-01', 1000, 'vanhung@gmail.com'),
(2, 'Nguyễn Hùng Anh', 'Đường Nguyễn Kiệm, Quận Gò Vấp, Tp.HCM', '03434254512', '1996-04-08', 1200, 'hunganh@gmail.com'),
(3, 'Nguyễn Thị Hồng', 'Đường 13, Bình Dương', '03434254248', '1999-07-17', 1300, 'thihong@gmail.com'),
(4, 'Lê Thị Thủy', 'Đường 11, Đồng Nai', '03422225411', '1995-08-31', 1300, 'thithuy@gmail.com'),
(5, 'Trần Minh Tuấn', 'Đường số 7, Lâm Đồng', '03734251912', '1993-03-22', 1100, 'minhtuan@gmail.com'),
(6, 'Nguyễn Bá Mạnh', 'Đường Nguyễn Trãi, Nha Trang', '03701251212', '2000-08-29', 1200, 'bamanh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canho`
--
ALTER TABLE `canho`
  ADD PRIMARY KEY (`MaCanHo`),
  ADD KEY `MaCuDan` (`MaCuDan`,`MaKhu`),
  ADD KEY `MaKhu` (`MaKhu`);

--
-- Indexes for table `cudan`
--
ALTER TABLE `cudan`
  ADD PRIMARY KEY (`MaCuDan`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHopDong`),
  ADD KEY `MaCuDan` (`MaCuDan`,`MaCanHo`),
  ADD KEY `MaCanHo` (`MaCanHo`);

--
-- Indexes for table `khucanho`
--
ALTER TABLE `khucanho`
  ADD PRIMARY KEY (`MaKhu`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canho`
--
ALTER TABLE `canho`
  MODIFY `MaCanHo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cudan`
--
ALTER TABLE `cudan`
  MODIFY `MaCuDan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `MaHopDong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khucanho`
--
ALTER TABLE `khucanho`
  MODIFY `MaKhu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canho`
--
ALTER TABLE `canho`
  ADD CONSTRAINT `canho_ibfk_1` FOREIGN KEY (`MaKhu`) REFERENCES `khucanho` (`MaKhu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `canho_ibfk_2` FOREIGN KEY (`MaCuDan`) REFERENCES `cudan` (`MaCuDan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`MaCanHo`) REFERENCES `canho` (`MaCanHo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hopdong_ibfk_2` FOREIGN KEY (`MaCuDan`) REFERENCES `cudan` (`MaCuDan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khucanho`
--
ALTER TABLE `khucanho`
  ADD CONSTRAINT `khucanho_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
