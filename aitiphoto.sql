-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2019 lúc 07:16 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `aitiphoto`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaChiTietHoaDon` bigint(20) NOT NULL,
  `MaHoaDon` bigint(20) NOT NULL,
  `MaSanPham` bigint(20) NOT NULL,
  `Gia` bigint(20) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaChiTietHoaDon`, `MaHoaDon`, `MaSanPham`, `Gia`, `SoLuong`, `NgayTao`, `NgayCapNhat`) VALUES
(1, 15694, 5, 0, 1, '2019-03-14', '0000-00-00'),
(2, 15694, 6, 0, 3, '2019-03-14', '0000-00-00'),
(3, 15695, 5, 0, 1, '2019-03-14', '0000-00-00'),
(4, 15695, 6, 0, 3, '2019-03-14', '0000-00-00'),
(5, 15696, 5, 0, 1, '2019-03-14', '0000-00-00'),
(6, 15696, 6, 0, 3, '2019-03-14', '0000-00-00'),
(7, 15697, 7, 0, 1, '2019-03-14', '0000-00-00'),
(8, 15697, 6, 0, 3, '2019-03-14', '0000-00-00'),
(9, 15698, 7, 0, 1, '2019-03-14', '0000-00-00'),
(10, 15699, 6, 0, 1, '2019-03-14', '0000-00-00'),
(11, 15700, 5, 0, 1, '2019-03-14', '0000-00-00'),
(12, 15701, 5, 0, 1, '2019-03-14', '0000-00-00'),
(13, 15703, 5, 0, 1, '2019-03-14', '0000-00-00'),
(14, 15704, 6, 0, 1, '2019-03-14', '0000-00-00'),
(15, 15705, 1, 0, 1, '2019-03-15', '0000-00-00'),
(16, 15706, 6, 0, 1, '2019-03-15', '0000-00-00'),
(17, 15707, 3, 0, 2, '2019-03-15', '0000-00-00'),
(18, 15708, 3, 0, 2, '2019-03-15', '0000-00-00'),
(19, 15709, 1, 0, 5, '2019-03-15', '0000-00-00'),
(20, 15709, 3, 0, 5, '2019-03-15', '0000-00-00'),
(21, 15710, 5, 250000, 1, '2019-03-15', '0000-00-00'),
(22, 15711, 1, 250000, 4, '2019-03-15', '0000-00-00'),
(23, 15712, 3, 450000, 5, '2019-03-15', '0000-00-00'),
(24, 15712, 1, 250000, 10, '2019-03-15', '0000-00-00'),
(25, 15713, 1, 250000, 3, '2019-03-15', '0000-00-00'),
(26, 15714, 1, 250000, 1, '2019-03-15', '0000-00-00'),
(27, 15715, 5, 250000, 1, '2019-03-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `magiohang` int(11) NOT NULL,
  `masanpham` bigint(20) NOT NULL,
  `dongia` bigint(20) NOT NULL,
  `soluong` int(255) NOT NULL,
  `tensanpham` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`magiohang`, `masanpham`, `dongia`, `soluong`, `tensanpham`) VALUES
(1, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) NOT NULL,
  `NgayMua` date NOT NULL,
  `TongCong` double NOT NULL,
  `GhiChu` text NOT NULL,
  `status` int(2) NOT NULL,
  `ship` bigint(20) NOT NULL,
  `hide` tinyint(4) NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHoaDon`, `MaKhachHang`, `NgayMua`, `TongCong`, `GhiChu`, `status`, `ship`, `hide`, `NgayTao`, `NgayCapNhat`) VALUES
(15687, 1685, '2019-03-04', 450000, 'Địa chỉ giao hàng: 874/14/10 Đoàn văn bơ quận 4 tphcm', 0, 0, 0, '2019-03-04', '0000-00-00'),
(15688, 1686, '2019-03-04', 500000, '', 1, 0, 0, '2019-03-04', '0000-00-00'),
(15689, 1692, '2019-03-14', 1000000, '', 1, 0, 2, '2019-03-14', '0000-00-00'),
(15690, 1693, '2019-03-14', 1000000, '', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15691, 1694, '2019-03-14', 1000000, '', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15692, 1695, '2019-03-14', 1000000, '', 1, 0, 0, '2019-03-14', '0000-00-00'),
(15693, 1696, '2019-03-14', 1000000, '', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15694, 1697, '2019-03-14', 1000000, '', 1, 0, 0, '2019-03-14', '0000-00-00'),
(15695, 1698, '2019-03-14', 1000000, '', 1, 0, 0, '2019-03-14', '0000-00-00'),
(15696, 1699, '2019-03-14', 1000000, '', 1, 0, 0, '2019-03-14', '0000-00-00'),
(15697, 1699, '2019-03-14', 1000000, 'Màu đỏ', 1, 0, 0, '2019-03-14', '0000-00-00'),
(15698, 0, '2019-03-14', 250000, '', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15699, 1700, '2019-03-14', 250000, 'Màu xanh', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15700, 1701, '2019-03-14', 250000, '', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15701, 1702, '2019-03-14', 250000, '', 1, 0, 0, '2019-03-14', '0000-00-00'),
(15702, 1703, '2019-03-14', 0, '', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15703, 1704, '2019-03-14', 250000, '', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15704, 1705, '2019-03-14', 250000, 'ddor', 0, 0, 0, '2019-03-14', '0000-00-00'),
(15705, 1706, '2019-03-15', 2500001, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15706, 1707, '2019-03-15', 250000, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15707, 1708, '2019-03-15', 900000, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15708, 1709, '2019-03-15', 900000, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15709, 1710, '2019-03-15', 14750005, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15710, 1711, '2019-03-15', 330000, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15711, 1712, '2019-03-15', 0, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15712, 1713, '2019-03-15', 0, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15713, 1714, '2019-03-15', 0, '', 0, 0, 0, '2019-03-15', '0000-00-00'),
(15714, 1715, '2019-03-15', 50000, '', 1, 0, 0, '2019-03-15', '0000-00-00'),
(15715, 1716, '2019-03-15', 250000, '', 1, 0, 0, '2019-03-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` bigint(20) NOT NULL,
  `TenKhachHang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `DiaChi` text CHARACTER SET utf8 NOT NULL,
  `DienThoai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `NgaoTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `TenKhachHang`, `Email`, `DiaChi`, `DienThoai`, `NgaoTao`, `NgayCapNhat`) VALUES
(1685, 'Trần việt dũng', 'dungtran9x225@gmail.com', '426 ấp chánh hội, xã tân mỹ, huyện đức hòa, tỉnh long an', '0382130203', '2019-03-04', '0000-00-00'),
(1686, 'Nguyễn thị thu dung', 'aitiphoto01@gmail.com', '', '0933599053', '2019-03-04', '0000-00-00'),
(1687, 'Trần dũng', 'aitiphoto11@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1688, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1689, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1690, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1691, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1692, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1693, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1694, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1695, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1696, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1697, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1698, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1699, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1700, 'Trần dũng', 'aitiphoto14@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1701, 'Trần dũng', 'aitiphoto15@gmail.com', '426 ?p Ch�nh H?i, X� T�n M?, Huy?n ??c H�a, T?nh Long An 1', '0382130203', '2019-03-14', '0000-00-00'),
(1702, 'Trần dũng', 'aitiphoto@gmail.com', '467', '0382130203', '2019-03-14', '0000-00-00'),
(1703, 'Trần dũng', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0382130203', '2019-03-14', '0000-00-00'),
(1704, 'Trần dũng', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0382130203', '2019-03-14', '0000-00-00'),
(1705, 'Trần dũng', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0382130203', '2019-03-14', '0000-00-00'),
(1706, 'Trần dũng', 'aitiphoto@gmail.com', '467', '0382130203', '2019-03-15', '0000-00-00'),
(1707, 'Trần dũng', 'aitiphoto@gmail.com', '467', '0382130203', '2019-03-15', '0000-00-00'),
(1708, 'Trần dũng', 'aitiphoto@gmail.com', '426 ?p Ch?nh H?i, X? T?n M?, Huy?n ??c H?a, T?nh Long An', '0382130203', '2019-03-15', '0000-00-00'),
(1709, 'Trần dũng', 'aitiphoto@gmail.com', '467', '0382130203', '2019-03-15', '0000-00-00'),
(1710, 'Nguyễn Thị Thu Dung', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0973599053', '2019-03-15', '0000-00-00'),
(1711, 'Trần dũng', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0382130203', '2019-03-15', '0000-00-00'),
(1712, 'Nguyễn Thị Thu Dung', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0382130203', '2019-03-15', '0000-00-00'),
(1713, 'Nguyễn Thị Thu Dung', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0973599053', '2019-03-15', '0000-00-00'),
(1714, 'Nguyễn Thị Thu Dung', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0973599053', '2019-03-15', '0000-00-00'),
(1715, 'Trần dũng', 'aitiphoto@gmail.com', '467', '0382130203', '2019-03-15', '0000-00-00'),
(1716, 'Nguyễn Thị Thu Dung', 'aitiphoto@gmail.com', '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0382130203', '2019-03-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `MaLienHe` int(11) NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SDT` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Gmail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Facebook` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hide` tinyint(4) NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`MaLienHe`, `DiaChi`, `SDT`, `Gmail`, `Facebook`, `hide`, `NgayTao`, `NgayCapNhat`) VALUES
(1, '426 Ấp Chánh Hội, Xã Tân Mỹ, Huyện Đức Hòa, Tỉnh Long An', '0382130203', 'dungtran9x225@gmail.com', 'https://facebook.com/aitiphoto', 1, '2019-03-04', '2019-03-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` bigint(20) NOT NULL,
  `TenLoaiSanPham` varchar(255) CHARACTER SET utf8 NOT NULL,
  `MoTa` text CHARACTER SET utf8 NOT NULL,
  `Meta` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hide` int(2) NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `MoTa`, `Meta`, `hide`, `NgayTao`, `NgayCapNhat`) VALUES
(7, 'Áo sơ mi nam', '', 'ao-so-mi-nam', 1, '2019-03-03', '2019-03-06'),
(8, 'Áo sơ mi nam', '', 'ao-so-mi-nam', 1, '2019-03-03', '2019-03-07'),
(14, 'Vest', '', 'vest', 1, '2019-03-03', '2019-03-06'),
(15, 'Váy cưới', '', 'vay-cuoi', 1, '2019-03-03', '2019-03-06'),
(17, 'Quần áo nam', '', 'quan-ao-nam', 1, '2019-03-03', '2019-03-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `MaTin` bigint(20) NOT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8 NOT NULL,
  `NoiDung` text CHARACTER SET utf8 NOT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8 NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL,
  `Meta` text NOT NULL,
  `hide` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`MaTin`, `TieuDe`, `NoiDung`, `HinhAnh`, `NgayTao`, `NgayCapNhat`, `Meta`, `hide`) VALUES
(1, '0001', '<p>0001</p>\r\n', 'images (1).jpg-2019-Mar-Mon', '2019-03-04', '2019-03-04', '0001', 1),
(2, '0001', '<p>0001</p>\r\n', 'images (1).jpg-2019-Mar-Mon', '2019-03-04', '2019-03-04', '0001', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `MaSanPham` bigint(20) NOT NULL,
  `Rate1` int(10) NOT NULL,
  `Rate2` int(10) NOT NULL,
  `Rate3` int(10) NOT NULL,
  `Rate4` int(10) NOT NULL,
  `Rate5` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Gia` int(11) NOT NULL,
  `khuyenmai` text CHARACTER SET utf8 NOT NULL,
  `Mota` text CHARACTER SET utf8 NOT NULL,
  `Size` int(11) NOT NULL,
  `Mau` varchar(255) CHARACTER SET utf8 NOT NULL,
  `SoLuong` bigint(20) NOT NULL,
  `Meta` text CHARACTER SET utf8 NOT NULL,
  `hide` int(2) NOT NULL,
  `MaLoaiSanPham` bigint(20) NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL,
  `IMG1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `IMG2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `IMG3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `IMG4` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `Gia`, `khuyenmai`, `Mota`, `Size`, `Mau`, `SoLuong`, `Meta`, `hide`, `MaLoaiSanPham`, `NgayTao`, `NgayCapNhat`, `IMG1`, `IMG2`, `IMG3`, `IMG4`) VALUES
(1, 'Sơ mi trắng chất liệu cotton Hàn Quốc', 250000, '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/129-1024x946.jpg\" style=\"height:946px; width:1024px\" />1</p>\r\n', '<p>&lt;�p&gt;dfdgdf1&lt;�/p&gt;</p>\r\n', 0, 'Đỏ', 16, 'so-mi-trang-chat-lieu-cotton-han-quoc', 1, 15, '2019-03-03', '2019-03-15', 'download (1).jpg-2019-Mar-Wed', 'download (2).jpg-2019-Mar-Wed', 'download.jpg-2019-Mar-Wed', 'images.jpg-2019-Mar-Wed'),
(2, 'Quáº§n Ã¢u', 450000, '<p>123</p>\r\n', '\0<\0p\0>\03\02\01\0<\0/\0p\0>\0\r\0\n', 0, 'VÃ ng', 5, 'quan-au', 1, 6, '2019-03-03', '2019-03-03', '\0d\0o\0w\0n\0l\0o\0a\0d\0 \0(\02\0)\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0S\0u\0n', '\0d\0o\0w\0n\0l\0o\0a\0d\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0S\0u\0n', '\0i\0m\0a\0g\0e\0s\0 \0(\01\0)\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0S\0u\0n', '\0i\0m\0a\0g\0e\0s\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0S\0u\0n'),
(3, 'Quần âu', 450000, '<p>&aacute;d</p>\r\n', '<p>&lt;�p&gt;&lt;�img alt=&quot;&quot; src=&quot;/ckfinder/userfiles/images/IMG_0879.jpg&quot; style=&quot;height:120px; width:80px&quot; /&gt;&lt;�/p&gt;</p>\r\n', 0, 'Xanh dương', 15, 'quan-au', 1, 15, '2019-03-06', '2019-03-15', 'images.jpg-2019-Mar-Wed', 'download (2).jpg-2019-Mar-Wed', 'images (1).jpg-2019-Mar-Wed', 'images.jpg-2019-Mar-Wed'),
(4, 'Sơ mi trắng chất liệu cotton Hàn Quốc 1', 250000, '<p>1</p>\r\n', '<p>&lt;�p&gt;&lt;�img alt=&quot;&quot; src=&quot;/ckfinder/userfiles/images/129-1024x946.jpg&quot; style=&quot;height:946px; width:1024px&quot; /&gt;&lt;�/p&gt;</p>\r\n', 0, 'Vàng', 1, 'so-mi-trang-chat-lieu-cotton-han-quoc-1', 1, 15, '2019-03-06', '2019-03-07', 'download (1).jpg-2019-Mar-Wed', 'download (2).jpg-2019-Mar-Wed', 'download.jpg-2019-Mar-Wed', 'images (1).jpg-2019-Mar-Wed'),
(5, 'Quần âu', 250000, '', '', 0, '', 5, 'quan-au', 1, 17, '2019-03-06', '2019-03-14', 'download (1).jpg-2019-Mar-Thu', 'images.jpg-2019-Mar-Thu', '\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d', '\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d'),
(6, 'Sơ mi trắng chất liệu cotton Hàn Quốc', 250000, '', '', 0, '', 1, 'so-mi-trang-chat-lieu-cotton-han-quoc', 1, 17, '2019-03-06', '2019-03-07', 'download (2).jpg-2019-Mar-Thu', '\0d\0o\0w\0n\0l\0o\0a\0d\0 \0(\02\0)\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d', '\0d\0o\0w\0n\0l\0o\0a\0d\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d', '\0i\0m\0a\0g\0e\0s\0 \0(\01\0)\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d'),
(7, 'Sơ mi trắng chất liệu cotton Hàn Quốc', 250000, '', '', 0, '', 0, 'so-mi-trang-chat-lieu-cotton-han-quoc', 1, 17, '2019-03-06', '2019-03-07', 'download.jpg-2019-Mar-Thu', '\0i\0m\0a\0g\0e\0s\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d', '\0i\0m\0a\0g\0e\0s\0 \0(\01\0)\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d', '\0d\0o\0w\0n\0l\0o\0a\0d\0 \0(\02\0)\0.\0j\0p\0g\0-\02\00\01\09\0-\0M\0a\0r\0-\0W\0e\0d');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `MaSlide` int(255) NOT NULL,
  `IMG1` varchar(255) NOT NULL,
  `IMG2` varchar(255) NOT NULL,
  `Hide` tinyint(1) NOT NULL,
  `Slogan` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `TaiKhoan` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL,
  `PhanQuyen` tinyint(1) NOT NULL,
  `magiohang` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`TaiKhoan`, `MatKhau`, `Ten`, `Email`, `NgayTao`, `NgayCapNhat`, `PhanQuyen`, `magiohang`) VALUES
('123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'aitiphoto', '123@gmail.com', '2019-03-09', '0000-00-00', 0, 0),
('aitiphoto', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần Việt Dũng', 'aitiphoto01@gmail.com', '2019-03-08', '0000-00-00', 1, 0),
('aitiphoto01', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần dũng', 'aitiphoto01@gmail.com', '0000-00-00', '0000-00-00', 0, 0),
('aitiphoto02', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần Việt Dũng', 'aitiphoto02@gmail.com', '2019-03-08', '0000-00-00', 0, 0),
('aitiphoto03', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần Việt Dũng', 'aitiphoto03@gmail.com', '2019-03-08', '0000-00-00', 0, 0),
('aitiphoto08', '2f83781f9fd4fc2f2be0cd30212056ba', 'Trần dũng', 'aitiphoto08@gmail.com', '0000-00-00', '0000-00-00', 0, 0),
('aitiphoto09', '2f83781f9fd4fc2f2be0cd30212056ba', 'Trần dũng', 'aitiphoto09@gmail.com', '0000-00-00', '0000-00-00', 0, 0),
('aitiphoto10', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần dũng', 'aitiphoto10@gmail.com', '0000-00-00', '0000-00-00', 0, 0),
('aitiphoto12', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Nguyễn thị thu dung', 'aitiphoto12@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto13', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần dũng', 'aitiphoto13@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto14', '2f83781f9fd4fc2f2be0cd30212056ba', 'aitiphoto', 'aitiphoto14@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto18', '829193132b68b83a546ae028c3f71dd6', 'Trần Việt Dũng', '', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto20', '829193132b68b83a546ae028c3f71dd6', 'Trần Việt Dũng', 'aitiphoto20@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto21', '829193132b68b83a546ae028c3f71dd6', 'Trần Việt Dũng', 'aitiphoto21@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto22', '829193132b68b83a546ae028c3f71dd6', 'Trần Việt Dũng', 'aitiphoto22@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto23', '829193132b68b83a546ae028c3f71dd6', 'Trần Việt Dũng', 'aitiphoto23@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto24', '829193132b68b83a546ae028c3f71dd6', 'Trần Việt Dũng', 'aitiphoto24@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto25', '829193132b68b83a546ae028c3f71dd6', 'Trần Việt Dũng', 'aitiphoto25@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto30', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần dũng', 'aitiphoto@gmail.com', '2019-03-14', '0000-00-00', 0, 0),
('aitiphoto31', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần Việt Dũng', 'aitiphoto@gmail.com', '2019-03-21', '0000-00-00', 0, 0),
('aitiphoto32', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần Việt Dũng', 'aitiphoto32@gmail.com', '2019-03-21', '0000-00-00', 0, 0),
('dungtran9x225@gmail.com', 'e7a9fe22e54bc72c41bd30b74422a4ad', 'Trần Việt Dũng', 'dungtran9x225@gmail.com', '0000-00-00', '0000-00-00', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) NOT NULL,
  `MaSanPham` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaChiTietHoaDon`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magiohang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`MaLienHe`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`MaTin`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`MaSanPham`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`MaSlide`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`TaiKhoan`);

--
-- Chỉ mục cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaChiTietHoaDon` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `magiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15716;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1717;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `MaLienHe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `MaTin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `MaSlide` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
