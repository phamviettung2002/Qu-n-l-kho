-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2023 lúc 04:06 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_quanlykho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `idinvoice` int(11) NOT NULL,
  `nameinvoice` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nameproduct` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantityproduct_choice` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`idinvoice`, `nameinvoice`, `username`, `nameproduct`, `quantityproduct_choice`) VALUES
(1, '1', 'Tùng', 'Dây điện', '10'),
(2, '1', 'Tùng', 'Dây cáp', '15'),
(3, '2', 'Tùng', 'Tua vít', '12'),
(4, '1', 'Tùng', 'Cầu dao', '15'),
(10, '1', 'Sáng', 'Dây điện', '23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `idproduct` int(5) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nameproduct` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantityproduct` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`idproduct`, `username`, `nameproduct`, `quantityproduct`) VALUES
(1, 'Tùng', 'Dây điện', '490'),
(2, 'Tùng', 'Dây cáp', '385'),
(3, 'Tùng', 'Cầu dao', '435'),
(4, 'Tùng', 'Tua vít', '338'),
(6, 'Sáng', 'Dây điện', '211'),
(7, 'Sáng', 'Lõi đồng', '400'),
(8, 'Khoa', 'Cống tắc', '600'),
(9, 'Khoa', 'Đây đeo bảo hộ', '100'),
(10, 'Cường', 'Mũ bảo hộ', '50'),
(11, 'Cường', 'Ốc vít', '800'),
(12, 'Hải', 'Lõi dây điện', '400'),
(13, 'Hải', 'Kìm cắt', '200');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Cường', '1'),
(3, 'Hải', '1'),
(5, 'Khoa', '1'),
(6, 'Sáng', '1'),
(7, 'Tùng', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`idinvoice`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`idproduct`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`,`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `idinvoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `idproduct` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
