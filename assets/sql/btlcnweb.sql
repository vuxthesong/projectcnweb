-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 12:12 PM
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
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `maad` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`maad`, `admin`, `matkhau`) VALUES
(1, 'song', '123456'),
(2, 'phuong', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_hopthu`
--

CREATE TABLE `db_hopthu` (
  `Mathu` int(11) NOT NULL,
  `emailgui` varchar(50) NOT NULL,
  `emailnhan` varchar(50) NOT NULL,
  `Chudethu` varchar(30) NOT NULL,
  `Noidung` text NOT NULL,
  `Ngaygui` date NOT NULL,
  `Sao` tinyint(1) NOT NULL DEFAULT 0,
  `mamail` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_hopthu`
--

INSERT INTO `db_hopthu` (`Mathu`, `emailgui`, `emailnhan`, `Chudethu`, `Noidung`, `Ngaygui`, `Sao`, `mamail`) VALUES
(102, 'nguyenvanb45@gmail.com', 'tranvand35@gmail.com', 'Gmail', 'll', '2021-12-15', 0, 0),
(103, 'nguyenvanb45@gmail.com', 'tranvand35@gmail.com', 'Gmail', 'll', '2021-12-15', 0, 1),
(104, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', 'thứ 3', '2021-12-07', 1, 0),
(105, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', 'thứ 3', '2021-12-07', 1, 1),
(108, 'nguyenvanb45@gmail.com', 'song@gmail.com', 'Gmail', '21312', '2022-01-01', 1, 0),
(109, 'nguyenvanb45@gmail.com', 'song@gmail.com', 'Gmail', '21312', '2022-01-01', 1, 1),
(110, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', '322', '2021-12-16', 0, 0),
(111, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', '322', '2021-12-16', 1, 1),
(118, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', 'rtyyy', '2021-12-17', 0, 0),
(119, 'nguyenvanc53@gmail.com', 'song@gmail.com', 'Gmail', 'rtyyy', '2021-12-17', 1, 1),
(120, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Chude', 'Noidung', '2021-08-04', 1, 0),
(123, 'nguyenvana23@gmail.com', 'song@gmail.com', 'Gmail', '12345', '2021-12-27', 1, 1),
(124, 'song@gmail.com', 'nguyenvanb45@gmail.com', 'Gmail', '1', '2022-01-20', 0, 0),
(125, 'song@gmail.com', 'nguyenvanb45@gmail.com', 'Gmail', '1', '2022-01-01', 1, 1),
(126, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', 'hôm nay là thứ 7', '2022-01-01', 1, 1),
(127, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', 'hôm nay là thứ 7', '2022-01-01', 1, 0),
(131, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', '12345', '2022-01-03', 1, 0),
(132, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Thư mới', '123 456', '2022-01-11', 0, 1),
(133, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Thư mới', '123 456', '2022-01-11', 0, 0),
(135, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Thư hỏi thăm', '123\r\n   456\r\n      789\r\n', '2022-01-11', 0, 0),
(137, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Thư hỏi thăm', '1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', '2022-01-11', 0, 0),
(139, 'song@gmail.com', 'nguyenvanc53@gmail.com', 'Trả lời : Gmail', '123', '2022-01-11', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_nguoidung`
--

CREATE TABLE `db_nguoidung` (
  `mand` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(30) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `GioiTinh` varchar(10) DEFAULT NULL,
  `Ngaysinh` date NOT NULL,
  `Diachi` varchar(50) NOT NULL,
  `makhoa` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_nguoidung`
--

INSERT INTO `db_nguoidung` (`mand`, `email`, `matkhau`, `Hoten`, `GioiTinh`, `Ngaysinh`, `Diachi`, `makhoa`) VALUES
(1111, 'hieu@gmail.com', 'abc', 'Vũ Minh Hiếu', 'Nam', '2000-01-12', 'Nghệ An', 1),
(7, 'nam@gmail.com', 'abc', 'Vũ Minh Nam', 'Nam', '2002-01-04', 'Nghệ An', 0),
(1, 'nguyenvana23@gmail.com', 'abc', 'Nguyễn Vân Anh', 'Nữ', '2021-12-23', 'Hà Nội', 0),
(2, 'nguyenvanb45@gmail.com', 'abc', 'Nguyễn Văn Bình', 'Nam', '2021-12-23', 'Nam Định', 0),
(3, 'nguyenvanc53@gmail.com', 'abc', 'Nguyễn Văn Cường', 'Nam', '2021-12-23', 'Hải Phòng', 0),
(4, 'song@gmail.com', 'abc', 'Vũ Thế Song', 'Nam', '2021-12-23', 'Hà Nội', 0),
(5, 'tranvand35@gmail.com', 'abc', 'Trần Văn Dương', 'Nam', '2021-12-21', 'Nam Định', 0);

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
  `Ngaygui` date NOT NULL,
  `mamail` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_thungrac`
--

INSERT INTO `db_thungrac` (`Mathu`, `emailgui`, `emailnhan`, `Chudethu`, `Noidung`, `Ngaygui`, `mamail`) VALUES
(121, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Chude', 'Noidung', '2021-08-04', 1),
(130, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Gmail', '12345', '2022-01-03', 1),
(134, 'song@gmail.com', 'nguyenvana23@gmail.com', 'Thư hỏi thăm', '123\r\n   456\r\n      789\r\n', '2022-01-11', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`maad`),
  ADD UNIQUE KEY `admin` (`admin`);

--
-- Chỉ mục cho bảng `db_hopthu`
--
ALTER TABLE `db_hopthu`
  ADD PRIMARY KEY (`Mathu`),
  ADD UNIQUE KEY `Mathu` (`Mathu`),
  ADD KEY `emailgui` (`emailgui`) USING BTREE,
  ADD KEY `emainhan` (`emailnhan`) USING BTREE;

--
-- Chỉ mục cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `mand` (`mand`);

--
-- Chỉ mục cho bảng `db_thungrac`
--
ALTER TABLE `db_thungrac`
  ADD PRIMARY KEY (`Mathu`),
  ADD KEY `fk_emailgui1` (`emailgui`),
  ADD KEY `fk_emailnhan1` (`emailnhan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `maad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `db_hopthu`
--
ALTER TABLE `db_hopthu`
  MODIFY `Mathu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  MODIFY `mand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_hopthu`
--
ALTER TABLE `db_hopthu`
  ADD CONSTRAINT `fk_emailgui` FOREIGN KEY (`emailgui`) REFERENCES `db_nguoidung` (`email`),
  ADD CONSTRAINT `fk_emailnhan` FOREIGN KEY (`emailnhan`) REFERENCES `db_nguoidung` (`email`);

--
-- Các ràng buộc cho bảng `db_thungrac`
--
ALTER TABLE `db_thungrac`
  ADD CONSTRAINT `fk_emailgui1` FOREIGN KEY (`emailgui`) REFERENCES `db_nguoidung` (`email`),
  ADD CONSTRAINT `fk_emailnhan1` FOREIGN KEY (`emailnhan`) REFERENCES `db_nguoidung` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
