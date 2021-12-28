-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2021 lúc 08:06 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btlcnweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_hopthu`
--

CREATE TABLE `db_hopthu` (
  `Mathu` int(11) UNSIGNED NOT NULL,
  `emailgui` varchar(50) NOT NULL,
  `emailnhan` varchar(50) NOT NULL,
  `Chudethu` varchar(30) NOT NULL,
  `Noidung` text NOT NULL,
  `Ngaygui` date NOT NULL,
  `Sao` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_hopthu`
--

INSERT INTO `db_hopthu` (`Mathu`, `emailgui`, `emailnhan`, `Chudethu`, `Noidung`, `Ngaygui`, `Sao`) VALUES
(1, 'nguyenvana23@gmail.com', 'nguyenvanb45@gmail.com', 'Gmail', 'Thư gửi từ A đến B', '2021-12-16', 0),
(2, 'nguyenvanb45@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', 'Thư từ B gửi cho A', '2021-12-16', 0),
(9, 'nguyenvanc53@gmail.com', 'tranvand35@gmail.com', 'Gmail', 'Thư C gửi chon D', '2021-12-18', 0),
(16, 'nguyenvanb45@gmail.com', 'tranvand35@gmail.com', 'Gmail', 'll', '2021-12-15', 0),
(26, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', 'thứ 3', '2021-12-07', 0),
(28, 'nguyenvanb45@gmail.com', 'song@gmail.com', 'Gmail', '21312', '0000-00-00', 1),
(29, 'nguyenvanb45@gmail.com', 'song@gmail.com', 'Gmail', '21312', '0000-00-00', 0),
(30, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', '322', '2021-12-16', 0),
(43, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', 'rtyyy', '2021-12-17', 0),
(55, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', '1', '2021-12-26', 0),
(57, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', '233', '2021-12-26', 0),
(62, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Chude', 'Noidung', '2021-08-04', 0),
(64, 'song@gmail.com', 'nguyenvana23@gmail.com', '1', '11231', '2021-12-26', 0),
(65, 'song@gmail.com', 'nguyenvana23@gmail.com', '2', '2312', '2021-12-26', 0),
(66, 'song@gmail.com', 'nguyenvana23@gmail.com', '3', '3123123', '2021-12-26', 0),
(67, 'song@gmail.com', 'nguyenvana23@gmail.com', '4', '312312', '2021-12-26', 0),
(68, 'nguyenvana23@gmail.com', 'song@gmail.com', 'Gmail', '12345', '2021-12-27', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_luutrumail`
--

CREATE TABLE `db_luutrumail` (
  `Mathu` int(11) NOT NULL,
  `emailgui` varchar(50) NOT NULL,
  `emainhan` varchar(50) NOT NULL,
  `chudethu` varchar(50) NOT NULL,
  `Noidung` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_nguoi dung`
--

CREATE TABLE `db_nguoi dung` (
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(30) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `GioiTinh` varchar(10) DEFAULT NULL,
  `Ngaysinh` date NOT NULL,
  `Diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_nguoi dung`
--

INSERT INTO `db_nguoi dung` (`email`, `matkhau`, `Hoten`, `GioiTinh`, `Ngaysinh`, `Diachi`) VALUES
('nguyenvana23@gmail.com', 'abc', 'Nguyễn Vân Anh', 'Nữ', '2021-12-23', 'Hà Nội'),
('nguyenvanb45@gmail.com', 'abc', 'Nguyễn Văn Bình', 'Nam', '2021-12-23', 'Nam Định'),
('nguyenvanc53@gmail.com', 'abc', 'Nguyễn Văn Cường', 'Nam', '2021-12-23', 'Hải Phòng'),
('song@gmail.com', 'abc', 'Vũ Thế Song', 'Nam', '2021-12-23', 'Hà Nội'),
('tranvand35@gmail.com', 'abc', 'Trần Văn Dương', 'Nam', '2021-12-21', 'Nam Định');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_thungrac`
--

CREATE TABLE `db_thungrac` (
  `Mathu` int(11) NOT NULL,
  `emailgui` varchar(50) NOT NULL,
  `emailnhan` varchar(50) NOT NULL,
  `Chudethu` varchar(30) NOT NULL,
  `Noidung` text NOT NULL,
  `Ngaygui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_thungrac`
--

INSERT INTO `db_thungrac` (`Mathu`, `emailgui`, `emailnhan`, `Chudethu`, `Noidung`, `Ngaygui`) VALUES
(33, 'song@gmail.com', 'nguyenvanc53@gmail.com', 'Gmail', '123', '2021-12-30'),
(34, 'song@gmail.com', 'nguyenvanc53@gmail.com', 'Gmail', '1233', '2021-12-30'),
(42, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', 'Noidung', '2021-03-04'),
(51, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Chude', 'Noidung', '2021-12-20'),
(54, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', '33213', '2021-12-26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_hopthu`
--
ALTER TABLE `db_hopthu`
  ADD PRIMARY KEY (`Mathu`),
  ADD UNIQUE KEY `Mathu` (`Mathu`),
  ADD KEY `emailgui` (`emailgui`) USING BTREE,
  ADD KEY `emainhan` (`emailnhan`) USING BTREE;

--
-- Chỉ mục cho bảng `db_nguoi dung`
--
ALTER TABLE `db_nguoi dung`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `db_thungrac`
--
ALTER TABLE `db_thungrac`
  ADD PRIMARY KEY (`Mathu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_hopthu`
--
ALTER TABLE `db_hopthu`
  MODIFY `Mathu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_hopthu`
--
ALTER TABLE `db_hopthu`
  ADD CONSTRAINT `fk_emailgui` FOREIGN KEY (`emailgui`) REFERENCES `db_nguoi dung` (`email`),
  ADD CONSTRAINT `fk_emailnhan` FOREIGN KEY (`emailnhan`) REFERENCES `db_nguoi dung` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
