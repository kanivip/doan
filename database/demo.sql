-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th7 31, 2020 lúc 05:56 AM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `id_BL` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_SP` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_BL`,`username`,`id_SP`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_BL`, `username`, `id_SP`, `noidung`) VALUES
(1, 'kanivip50', 3, 'bcvbxcv'),
(2, 'kanivip50', 3, 'hahaha'),
(3, 'kanivip50', 3, 'hahaha'),
(4, 'kanivip50', 3, 'hahaha'),
(5, 'kanivip50', 3, 'khàdá'),
(6, 'kanivip50', 3, 'fádfs'),
(7, 'kanivip50', 1, 'khong ai\r\n'),
(8, 'admhoa1', 1, 'i am boss'),
(9, 'kanivip50', 12, 'hahah'),
(10, 'kanivip50', 7, 'khong co ai'),
(11, 'kanivip50', 1, 'ádfấdfadsf'),
(12, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(13, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(14, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(15, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(16, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(17, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(18, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(19, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(20, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(21, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(22, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(23, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(24, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(25, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(26, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(27, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(28, 'kanivip50', 1, 'sdnfkjldbsalkjfkjlsdfklhálkjhdfkjlháldkjfhkjláhdfkjhálkdjfhlkjádhfkjáhldkfhaksdhfkád'),
(29, 'admhoa1', 1, 'chó này xấu quá thì làm sao đây.\r\n'),
(30, 'admhoa1', 1, 'không koh ádf adsfká dsấdf  sdàkjlâ dsakfljals ádflkjádfl laksdfj alkdfsjlákdf aksdfjlaksdjf ádjflkádjflká ạ flkdsj'),
(31, 'admhoa1', 1, 'ádfhládfjlksja;lfjáld;fjlaksdjf;lạdf;ljád;lkfjlak;sdjfl;kạdf;lkádl;fkjalkdsfj;aklsjdf;lkạdlfaksd'),
(32, 'admhoa1', 1, 'ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha haha h aha ha ha '),
(33, 'admhoa1', 1, 'ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha haha h aha ha ha '),
(34, 'admhoa1', 1, 'ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha ha haha h aha ha ha '),
(35, 'kanivip50', 2, 'hahahahâh'),
(36, 'kanivip50', 2, 'hahahahâh'),
(37, 'kanivip50', 57, 'xin chào\r\n'),
(38, 'kanivip50', 4, 'i am boss');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

DROP TABLE IF EXISTS `chitiethd`;
CREATE TABLE IF NOT EXISTS `chitiethd` (
  `id_cthd` int(11) NOT NULL AUTO_INCREMENT,
  `id_hd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`id_cthd`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`id_cthd`, `id_hd`, `idsp`, `tensp`, `soluong`, `gia`) VALUES
(1, 0, 3, 'Alaska TRẮNG', 1, 12000000),
(2, 0, 14, 'phụ kiện 6', 1, 9000000),
(3, 16, 3, 'Alaska TRẮNG', 1, 12000000),
(4, 16, 14, 'phụ kiện 6', 1, 9000000),
(5, 17, 3, 'Alaska TRẮNG', 1, 12000000),
(6, 17, 14, 'phụ kiện 6', 1, 9000000),
(7, 17, 16, 'phụ kiện 8', 5, 8000000),
(8, 18, 3, 'Alaska TRẮNG', 1, 12000000),
(9, 18, 14, 'phụ kiện 6', 1, 9000000),
(10, 18, 16, 'phụ kiện 8', 5, 8000000),
(11, 19, 3, 'Alaska TRẮNG', 1, 12000000),
(12, 19, 14, 'phụ kiện 6', 1, 9000000),
(13, 19, 16, 'phụ kiện 8', 5, 8000000),
(14, 20, 3, 'Alaska TRẮNG', 1, 12000000),
(15, 20, 14, 'phụ kiện 6', 1, 9000000),
(16, 20, 16, 'phụ kiện 8', 5, 8000000),
(17, 21, 3, 'Alaska TRẮNG', 1, 12000000),
(18, 21, 14, 'phụ kiện 6', 1, 9000000),
(19, 21, 16, 'phụ kiện 8', 5, 8000000),
(20, 0, 7, 'Alaska SIÊU CƯNG', 5, 28000000),
(21, 0, 6, 'Alaska XINH XINH', 5, 5000000),
(22, 23, 10, 'phụ kiện 2', 1, 15000000),
(23, 23, 16, 'phụ kiện 8', 1, 8000000),
(24, 24, 10, 'phụ kiện 2', 1, 15000000),
(25, 24, 16, 'phụ kiện 8', 1, 8000000),
(26, 25, 7, 'Alaska SIÊU CƯNG', 4, 28000000),
(27, 25, 14, 'phụ kiện 6', 3, 9000000),
(28, 25, 11, 'phụ kiện 3', 3, 8000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `id_hd` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydat` datetime NOT NULL,
  `tongtien` int(11) NOT NULL,
  PRIMARY KEY (`id_hd`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `username`, `diachi`, `sdt`, `hoten`, `ngaydat`, `tongtien`) VALUES
(1, 'kanivip50', 'e43/76', '0', 'hoa tran', '0000-00-00 00:00:00', 21000000),
(2, 'kanivip50', 'e43/76', '0', 'hoa tran', '0000-00-00 00:00:00', 21000000),
(3, 'kanivip50', 'e43/76', '0', 'hoa tran', '2020-07-30 02:29:22', 21000000),
(4, 'kanivip50', 'e43/76', '0', 'hoa tran', '2020-07-30 02:30:04', 21000000),
(5, 'kanivip50', 'e43/76', '0', 'hoa tran', '2020-07-30 02:30:47', 21000000),
(6, 'kanivip50', 'e43/76', '2147483647', 'hoa tran', '2020-07-30 02:31:06', 21000000),
(7, 'kanivip50', 'e43/76', '2147483647', 'hoa tran', '2020-07-30 02:31:09', 21000000),
(8, 'kanivip50', 'e43/76', '2147483647', 'hoa tran', '2020-07-30 02:32:30', 21000000),
(9, 'kanivip50', 'e43/76', '435345', 'hoa tran', '2020-07-30 02:33:36', 21000000),
(10, 'kanivip50', 'e35', '989749264', 'hoa', '2020-07-30 02:34:06', 21000000),
(11, 'kanivip50', 'e43/76', '989749264', 'hoa tran', '2020-07-30 02:36:19', 21000000),
(12, 'kanivip50', 'e43/76', '9897323323', 'hoa tran', '2020-07-30 02:40:25', 21000000),
(13, 'kanivip50', 'e43/76', '09897323323', 'hoa tran', '2020-07-30 02:41:06', 21000000),
(14, 'kanivip50', 'e43/76', '09897323323', 'hoa tran', '2020-07-30 02:51:44', 21000000),
(15, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:01:39', 21000000),
(16, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:02:22', 21000000),
(17, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:10:20', 61000000),
(18, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:10:44', 61000000),
(19, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:12:41', 61000000),
(20, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:12:58', 61000000),
(21, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:14:46', 61000000),
(22, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:14:54', 0),
(23, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:21:06', 23000000),
(24, 'kanivip50', 'e43/76', '0989749264', 'hoa tran', '2020-07-30 03:21:50', 23000000),
(25, 'kanivip50', 'e43/76', '9897323323', 'hoa tran', '2020-07-30 03:25:29', 163000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `MaLoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenLoai` text COLLATE utf8_unicode_ci NOT NULL,
  `PhanLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoai`, `TenLoai`, `PhanLoai`) VALUES
('ALK', 'Alaska Malamute', 'dog'),
('Corgi', 'Corgi', 'dog'),
('Husky', 'Hunsky Seberian', 'dog'),
('PK', 'PHỤ KIỆN', 'phu kien'),
('Poodle', 'Poodle', 'dog');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `idSP` int(11) NOT NULL AUTO_INCREMENT,
  `LoaiSP` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenSP` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AnhSP` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaythem` datetime NOT NULL,
  PRIMARY KEY (`idSP`,`LoaiSP`),
  KEY `KF_1` (`LoaiSP`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `LoaiSP`, `TenSP`, `AnhSP`, `GiaSP`, `SoLuong`, `NoiDung`, `ngaythem`) VALUES
(1, 'ALK', 'SAM Ú NU', './image/ALK1.jpeg', 15000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(2, 'ALK', 'Alaska LÔNG NGẮN', './image/ALK2.jpeg', 13000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(3, 'ALK', 'Alaska TRẮNG', './image/ALK3.jpg', 12000000, 4, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(4, 'ALK', 'Alaska SIỀU CUTE', './image/ALK4.jpg', 10000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(5, 'ALK', 'MÈO TAI CỤP', './image/ALK5.jpg', 18000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(6, 'ALK', 'Alaska XINH XINH', './image/ALK6.jpg', 5000000, 7, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(7, 'ALK', 'Alaska SIÊU CƯNG', './image/ALK7.jpg', 28000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(8, 'ALK', 'ALAS HỒNG PHẤN SIÊU Ú NU', './image/ALK8.jpg', 8000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(9, 'PK', 'phụ kiện 1', './image/phukien1.jpg', 5000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(10, 'PK', 'phụ kiện 2', './image/phukien2.jpg', 15000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(11, 'PK', 'phụ kiện 3', './image/phukien3.jpg', 8000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(12, 'PK', 'phụ kiện 4', './image/phukien4.jpg', 4000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(13, 'PK', 'phụ kiện 5', './image/phukien5.jpg', 12000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(14, 'PK', 'phụ kiện 6', './image/phukien6.jpg', 9000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(15, 'PK', 'phụ kiện 7', './image/phukien7.jpg', 3000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(16, 'PK', 'phụ kiện 8', './image/phukien8.jpg', 8000000, 3, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(17, 'Corgi', 'CORGI Ú NU SIÊU XINH', './image/Corgi1.jpg', 15000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(18, 'Corgi', 'BÉ CORGI SIÊU PHẨM', './image/Corgi2.jpg', 9000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(19, 'Corgi', 'CORGI LÔNG DÀI SIÊU CƯNG', './image/Corgi3.jpg', 14000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(20, 'Corgi', 'CORGI ĐỰC SIÊU SIÊU CUTE', './image/Corgi4.jpg', 18000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(21, 'Corgi', 'ĐÀN CORGI SIÊU CUTE', './image/Corgi5.jpg', 5000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(22, 'Corgi', 'ĐÀN CORGI TRICOLOR', './image/Corgi6.jpg', 9000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(23, 'Corgi', 'BÉ CORGI MẶT NGẦU', './image/Corgi7.jpg', 5000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(24, 'Corgi', 'BÉ CORGI SIÊU XINH', './image/Corgi8.jpg', 21000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(25, 'Poodle', 'POODLE TRẮNG', './image/Poodle1.jpg', 30000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(26, 'Poodle', 'BÉ POODLE NÂU ĐỎ ĐẬM', './image/Poodle2.jpg', 15000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(27, 'Poodle', 'BÉ POODLE TINY TRẮNG', './image/Poodle3.jpg', 3000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(28, 'Poodle', 'BÉ POODLE BÔNG GÒN', './image/Poodle4.jpg', 7000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(29, 'Poodle', 'BÉ POODLE SOCOLA', './image/Poodle5.jpg', 14000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(30, 'Poodle', 'BÉ POODLE TRẮNG XINH', './image/Poodle6.jpg', 45000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(31, 'Poodle', 'POODLE TRẮNG XINH', './image/Poodle7.jpg', 11000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(32, 'Poodle', 'POODLE VÀNG MƠ SIÊU XINH', './image/Poodle8.jpg', 22000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(33, 'Husky', 'HUSKY ĐẠI NGÁO Ú NU', './image/Husky1.jpg', 20000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(34, 'Husky', 'HUSKY SIÊU CUTE', './image/Husky2.jpg', 31000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(35, 'Husky', 'HUSKY NGÁO NGƠ', './image/Husky3.jpg', 26000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(36, 'Husky', 'HUSKY NÂU ĐỎ', './image/Husky4.jpg', 12000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(37, 'Husky', 'HUSKY XÁM TRẮNG ', './image/Husky5.jpg', 16000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(38, 'Husky', 'HUSKY NÂU ĐỎ MẶT NGẦU', './image/Husky6.jpg', 3000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(39, 'Husky', 'HUSKY XÁM SIÊU NGẦU', './image/Husky7.jpg', 19000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(40, 'Husky', 'HUSKY MẶT NGẦU', './image/Husky8.jpg', 14000000, 1, 'Một chú chó Poodle Tiny nhỏ xinh luôn là sự lựa chọn hàng đầu của những người chơi thú cưng Việt Nam. Tìm mua được một em Poodle Tiny chó trắng lông xù nữa thì càng tuyệt vời. Tuy các em ấy có phần đanh đá , lắm mồm nhưng bù lại rất thông minh, biết cách làm nũng chủ nên chưa bao giờ bị “thất sủng”.', '0000-00-00 00:00:00'),
(51, 'Husky', 'ahihi', 'upload/ALK1.jpeg', 99999, 5, 'chó nè\r\n      ', '0000-00-00 00:00:00'),
(52, 'Husky', 'MÈO TAI CỤP', 'upload/ALK1.jpeg', 9000000, 2, ' ooô\r\n       \r\n      ', '0000-00-00 00:00:00'),
(53, 'ALK', 'MÈO TAI CỤP', 'upload/ALK1.jpeg', 87878, 4, ' ahihihihihi\r\n      ', '0000-00-00 00:00:00'),
(54, 'ALK', 'huhu', 'upload/ALK7.jpg', 123, 2, ' \r\n      trhrhrehte', '2020-07-30 10:05:31'),
(55, 'ALK', 'MÈO TAI CỤP', 'upload/ALK2.jpeg', 5000000, 4, ' dfsgdsfg\r\n      ', '0000-00-00 00:00:00'),
(56, 'PK', 'gio hang', 'upload/phukien8.jpg', 88888, 4, ' không ai mua\r\n      ', '2020-07-30 10:32:25'),
(57, 'ALK', 'chó nè', 'upload/Husky3.jpg', 9999, 5, ' ádfshdfànándfsad\r\n      ', '2020-07-31 00:45:58'),
(58, 'ALK', 'MÈO TAI CỤP', 'upload/ALK4.jpg', 55555, 12, ' sdàdsgfvcxvcz\r\n      ', '2020-07-31 07:48:58'),
(59, 'ALK', 'MÈO TAI CỤP', 'upload/Corgi7.jpg', 18000000, 2, ' ádf\r\n      ', '2020-07-31 08:18:02'),
(60, 'ALK', 'haha', 'upload/Husky7.jpg1596158761', 18000000, 2, ' ẻnbetrvỷect\r\n      ', '2020-07-31 08:26:01'),
(61, 'Husky', 'fafa', 'upload/Corgi8.jpg1596158924', 123, 5, ' ỵtfgncvnc\r\n      ', '2020-07-31 08:28:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten` int(11) DEFAULT NULL,
  `typeuser` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ten`, `typeuser`) VALUES
(1, 'kanivip1', 'abcvip', NULL, ''),
(2, 'mailaae', 'hahaha', NULL, ''),
(3, 'kanivip1', '4e8d7428b399dcc8b381c02d7b0c6aaf', NULL, ''),
(4, 'àdfsd', '81e4d4458001b277ad62213caea62144', NULL, ''),
(5, 'hoa1', '5c611050d23cfa7b073a40cfa4f5388e', NULL, ''),
(6, 'kanivip1', '83b959282926655244495d10f565ff0f', NULL, ''),
(7, 'kanivip1', '83b959282926655244495d10f565ff0f', NULL, ''),
(8, 'kanivip1', '202cb962ac59075b964b07152d234b70', NULL, ''),
(9, 'kanivip', '202cb962ac59075b964b07152d234b70', NULL, ''),
(10, 'haha', '202cb962ac59075b964b07152d234b70', NULL, ''),
(11, 'haha1', '202cb962ac59075b964b07152d234b70', NULL, ''),
(12, 'mmm', '202cb962ac59075b964b07152d234b70', NULL, ''),
(13, 'vvv', '202cb962ac59075b964b07152d234b70', NULL, ''),
(14, 'adm', '202cb962ac59075b964b07152d234b70', NULL, ''),
(15, 'hello', '827ccb0eea8a706c4c34a16891f84e7b', NULL, ''),
(16, 'asd', '202cb962ac59075b964b07152d234b70', NULL, ''),
(17, '123', '202cb962ac59075b964b07152d234b70', NULL, ''),
(18, 'admhoa', '202cb962ac59075b964b07152d234b70', NULL, ''),
(19, 'maimaila123', '3d9372606bf23d713fbb7952f79bce5d', NULL, ''),
(20, 'kanivip99', '202cb962ac59075b964b07152d234b70', NULL, ''),
(21, '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, ''),
(22, 'adm123', 'bb129688d603a73a623778fd8faaba00', NULL, ''),
(23, 'hahaha', '8b9bdb6bf288c9f217ee5b235b0ee445', NULL, ''),
(24, 'mmmmmm', 'c83e4fe3ba3bd8e38780549444d68567', NULL, ''),
(25, 'mmmmmmmmmmmm', 'bb129688d603a73a623778fd8faaba00', NULL, ''),
(26, 'khongtontai1', 'bb129688d603a73a623778fd8faaba00', NULL, ''),
(27, 'adm111', 'bb129688d603a73a623778fd8faaba00', NULL, ''),
(28, 'admhoa1', 'bb129688d603a73a623778fd8faaba00', NULL, '1'),
(29, 'mmm123', 'bb129688d603a73a623778fd8faaba00', NULL, ''),
(30, 'kanihoa', '9c270cb654fa71fe2a4d514f9c664e7e', NULL, '1'),
(31, 'admmm1', '9c270cb654fa71fe2a4d514f9c664e7e', NULL, ''),
(32, 'adm1234', '6250dfbadd53927a52f3af17afd53d56', NULL, ''),
(33, 'admzzz', 'bb129688d603a73a623778fd8faaba00', NULL, ''),
(34, 'adm888', '535994b533e6c90b6bc68eb5158c57c8', NULL, ''),
(35, 'kanivip50', 'bb129688d603a73a623778fd8faaba00', NULL, '');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `KF_1` FOREIGN KEY (`LoaiSP`) REFERENCES `loaisp` (`MaLoai`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
