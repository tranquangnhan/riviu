-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2021 lúc 04:17 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `riviu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieude` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` text COLLATE utf8_vietnamese_ci NOT NULL,
  `idquan` int(11) NOT NULL,
  `idhashtag` text COLLATE utf8_vietnamese_ci NOT NULL,
  `sao` int(11) NOT NULL,
  `img` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  `ngaydang` date NOT NULL DEFAULT current_timestamp(),
  `idmonan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `noidung`, `idquan`, `idhashtag`, `sao`, `img`, `iduser`, `ngaydang`, `idmonan`) VALUES
(174, 'Riviu siêu chất lượng ', 'sfdsfsjfjlksf sfjsddlfj sdof slfsdlf slk fslkj slkf ls osflsj fslsfj jsofsdfsf sfsjkf sfsslllllllll sjflsdfs sfskfdjfk kf l;k skf;sf;skf;sfk sf s;lfkfkfjsdkfh shfjsfh sjfgsuf dgjf jgfsfsjdfh sfsskg sjfsjfjsfs sf sf', 32, '1,5', 4, 'thanh-pham-105.jpg', 1, '2020-12-27', 8),
(179, 'Nhiều ảnh ', 'ssdf kjfh ahkfhskdlfhskfhkds kfhdfhs jdfhsjsd jsjh jkhfk hfk sddf sfsdfs f', 1, '35,36,37', 5, '8e0ac074265675.5c2932883189b.jpg,8e0ac074265675.5c2932883189b.jpg', 1, '2020-12-29', 6),
(180, '5 ảnh', 'fgdgdfgdgdgdg', 32, '', 4, '8e0ac074265675.5c2932883189b.jpg,60a3d2505bcf7e18af701046bd9055ec_output.jpeg,6167e1d9b1bf71d5e70d66422cacd4ce_output.jpeg,avatars.webp,cach-pha-ca-phe-den-da-ngon-nhu-nao-bi-quyet-pha-ca-phe-nhanh-2.jpg,d41cb3150f87ca33e83f722f117759de_output.jpeg', 1, '2020-12-29', 12),
(181, '5 ảnh', 'fgdgdfgdgdgdg', 32, '', 5, '8e0ac074265675.5c2932883189b.jpg,60a3d2505bcf7e18af701046bd9055ec_output.jpeg,6167e1d9b1bf71d5e70d66422cacd4ce_output.jpeg,avatars.webp,cach-pha-ca-phe-den-da-ngon-nhu-nao-bi-quyet-pha-ca-phe-nhanh-2.jpg', 1, '2020-12-29', 12),
(182, '5 ảnh', 'fgdgdfgdgdgdg', 32, '', 5, '8e0ac074265675.5c2932883189b.jpg,6167e1d9b1bf71d5e70d66422cacd4ce_output.jpeg,avatars.webp,cach-pha-ca-phe-den-da-ngon-nhu-nao-bi-quyet-pha-ca-phe-nhanh-2.jpg', 1, '2020-12-29', 12),
(183, '5 ảnh', 'fgdgdfgdgdgdg', 32, '', 5, '6167e1d9b1bf71d5e70d66422cacd4ce_output.jpeg,avatars.webp,cach-pha-ca-phe-den-da-ngon-nhu-nao-bi-quyet-pha-ca-phe-nhanh-2.jpg', 1, '2020-12-29', 12),
(184, 'Res Beefsteak - Sự lựa chọn cho tín đồ Beefsteak', 'Đây là quán Beefsteak tâm đắc nhất của mình, món ăn được nêm nếm cực vừa vị của mình. Cảm thấy đầu bếp rất có tâm cho món ăn làm ra, dễ đang nhật thấy độ tinh tế, có cái hồn của vị Beefsteak. Bò ở đây mềm ướp rất đậm vị.\r\nCó nhiều loại sốt để chọn, bánh mì tươi thơm mùi bột mì, mọi thứ đều hòa quyện. Khoai tây chiên giòn. Salad ngon. Nói chung, về món này mình không có gì để chê cả.\r\n\r\nKhông gian quán thiết kế theo kiểu hơi tây tây, ấm cúng rất phù hợp với Couple tìm 1 quán ăn lịch sự, yên tĩnh.\r\n\r\nNhân viên nhẹ nhàng, lịch sự.', 1, '38,39', 5, '05f38a8407f27e5feddf5a71ec0ed2ae_output.jpeg,39cb38998948dd474ab7f7fa51a78ec3_output.jpeg,e5010ce43725ca29ff263602368b4de3_output.jpeg', 55, '2020-12-29', 7),
(185, 'BẾP CHAY PHẠM HỒNG PHƯỚC', 'Nằm dọc theo bờ kè kênh Thị Nghè, quán tuy được bài trí đơn sơ giản dị và bình dân nhưng lúc nào cũng tấp nập khách ra vào bởi sự tài tình khéo léo trong cách chế biến các món ăn của chàng nghệ sĩ đa tài Phạm Hồng Phước\r\nThực đơn đa dạng với mức giá khá \"mềm\", một số món tiêu biểu mà bạn khó lòng bỏ qua như: bún đậu mắm tôm, hủ tiếu sa tế, mì vịt tiềm, bún măng, phở chay...với mức giá chỉ từ 20k/phần. Hay bạn có thể thứ món lẩu Thái hay lẩu riêu cua cực hoành tráng chỉ với 90k', 1, '36,1', 1, '256c947d0bc00f021338c991b1f0999b_output.jpeg,b5ce2a326b1006130fe0a8f9fe8d764b_output.jpeg,c0ac26c33ce2e79efaeea7b49a36caae_output.jpeg', 55, '2020-12-29', 6),
(187, 'Cơm tấm 419', 'CƠM TẤM 419\r\n( hẻm 417 An Dương Vương f3 q5)\r\n????Hôm nay mình lại giới thiệu đến các bạn quán cơm tấm mà mình cũng đã ăn hơn 15 năm.\r\n????Quán bán từ 8h sáng đến 9h30 tối.\r\n????Sườn ở đây được tẩm ướp với : nước dừa, 1 ít nước cam, mật ong, sữa, nước cốt hành tím và công thức riêng của quán, ăn mười mấy năm r cũng biết sơ sơ????\r\nSườn 9/10 điểm, miếng sườn ngọt, mềm, thơm, béo.\r\n????Nước mắm 5/10 không có gì đặc biệt.\r\n????Cơm tấm 7/10 thơm, mềm, được ngâm và sàng lọc kỹ, ko có sạn.\r\n1 phần cơm sườn : 38k, sườn ốp la là 42k ( mình cũng ko nhớ rõ giá )\r\nNgoài ra quán còn có sườn cọng\r\nPhần mình ăn là 1 sườn, 1 sườn la ( 1 dĩa kim chi ăn kèm) + 2 trà đá là 78k', 101, '40,41,42,43', 5, 'ct1.jpeg,ct2.jpeg,ct3.jpeg', 55, '2021-01-04', 7),
(188, 'Quán Ốc Béo Hà Nội', 'Quán nhỏ nhỏ gọn gọn ở quận 3 cũng tiện đi lại.\r\nỐc tươi, mình thích ốc to luộc thơm mùi sả và rất vừa ăn. Nghêu hấp sả tươi & ngọt thịt.\r\nMình tặng 4 sao vì ốc hương bơ dừa hơi ngọt, chấm bánh mì như món bánh mì chấm sữa tươi ????.\r\nNhân viên ở đây rất nhiệt tình, nhanh nhẹn và quan tâm khách???? có nhiều bạn nam phục vụ lắm nha\r\nMình sẽ ghé lại quán nhưng không gọi món bơ dừa nữa.', 101, '40,44', 3, 'ct1.jpeg,ct2.jpeg,ct3.jpeg', 55, '2021-01-04', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbaiviet` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `iduser`, `idbaiviet`, `date`, `noidung`) VALUES
(6, 1, 174, '2020-12-29 03:05:01', 'ahihi'),
(12, 55, 179, '2021-01-04 02:14:36', 'good job man'),
(13, 55, 184, '2021-01-04 02:36:37', 'good'),
(14, 1, 187, '2021-01-04 03:14:04', 'good');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likebv`
--

CREATE TABLE `likebv` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbaiviet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `likebv`
--

INSERT INTO `likebv` (`id`, `iduser`, `idbaiviet`) VALUES
(62, 1, 174),
(90, 1, 183),
(91, 55, 183),
(93, 51, 185),
(94, 51, 182),
(95, 51, 179),
(96, 51, 180),
(97, 51, 181),
(98, 51, 183),
(100, 55, 184);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id`, `name`, `img`, `loai`) VALUES
(3, 'Cà phê', 'cach-pha-ca-phe-den-da-ngon-nhu-nao-bi-quyet-pha-ca-phe-nhanh-2.jpg', 1),
(6, 'Hủ tiếu', 'hu-tieu-muc.webp', 0),
(7, 'Phở', 'KEL_8917.jpg', 0),
(8, 'Trà đào', 'tra-dao.webp', 1),
(9, 'Bánh xèo', 'nuoc-cham-banh-xeo-thumbnail.jpg', 0),
(11, 'Trà sữa', 'tra-sua-tu-lam.webp', 1),
(12, 'Chè đậu', 'thanh-pham-105.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan`
--

CREATE TABLE `quan` (
  `id` int(11) NOT NULL,
  `diachi` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenquan` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quan`
--

INSERT INTO `quan` (`id`, `diachi`, `tenquan`, `img`) VALUES
(1, '070 Block Street Suite 633', 'Đà Lạt Town - Bánh tráng nướng', '33a014987dc48afb64e4f5b4a3f93ff4_output.jpeg'),
(32, '34037 Roberts Forge Suite 188', 'Ngầu Cofee & Beer', '9367886c4632b21c56444a7b791736e7.jpeg'),
(101, '419 An Dương Vương. p.3. quận 5', 'cơm tấm 419 ', 'no_place.svg'),
(102, '419 An Dương Vương. p.3. quận 5', 'cơm tấm 419 ', 'no_place.svg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tentag` char(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tag`
--

INSERT INTO `tag` (`id`, `tentag`) VALUES
(23, 'a'),
(24, 'afgf'),
(27, 'ahh'),
(41, 'anduongvuong'),
(43, 'angthangfood'),
(4, 'banh'),
(37, 'comchien'),
(42, 'comtam419'),
(25, 'dfgdgdgf'),
(33, 'dfgdggdg'),
(28, 'ff'),
(29, 'fsdfsdf'),
(31, 'gfdgf'),
(2, 'giare'),
(35, 'haha'),
(26, 'huh'),
(30, 'huhu'),
(22, 'ngaymai'),
(32, 'ngona'),
(36, 'ngoncuc'),
(7, 'ngonvl'),
(40, 'quan5'),
(38, 'quan7'),
(44, 'quananngon'),
(6, 'quangon'),
(34, 'sdfssfsf'),
(1, 'sieungon'),
(21, 'test'),
(39, 'thitbo'),
(5, 'tuyetvoi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` char(50) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'avatar_default.png',
  `email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tenkh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `password`, `role`, `avatar`, `email`, `tenkh`) VALUES
(1, 'admin', '111111', 1, 'avatar_default.png', '', 'Bình sửa'),
(2, 'Perry Labadie', '', 1, 'avatar_default.png', '', ''),
(3, 'Mr. Carter Reynolds Jr.', '', 1, 'avatar_default.png', '', ''),
(4, 'Victoria Cormier', '', 1, 'avatar_default.png', '', ''),
(5, 'Mrs. Ramona Cormier', '', 0, 'avatar_default.png', '', ''),
(6, 'Norbert Stehr', '', 1, 'avatar_default.png', '', ''),
(7, 'Werner Cormier Jr.', '', 0, 'avatar_default.png', '', ''),
(8, 'Travon Hintz', '', 1, 'avatar_default.png', '', ''),
(9, 'Demetris Feest III', '', 1, 'avatar_default.png', '', ''),
(10, 'Samanta Weimann', '', 0, 'avatar_default.png', '', ''),
(11, 'Dr. Karianne Stamm', '', 0, 'avatar_default.png', '', ''),
(12, 'Santina Hayes', '', 1, 'avatar_default.png', '', ''),
(13, 'Asha Metz', '', 0, 'avatar_default.png', '', ''),
(14, 'Domenic Kemmer', '', 1, 'avatar_default.png', '', ''),
(15, 'Orion Lueilwitz', '', 0, 'avatar_default.png', '', ''),
(16, 'Jacky Kuvalis', '', 1, 'avatar_default.png', '', ''),
(17, 'Dr. Moriah Konopelski', '', 1, 'avatar_default.png', '', ''),
(18, 'Kenton Hackett', '', 1, 'avatar_default.png', '', ''),
(19, 'Helga Jaskolski', '', 0, 'avatar_default.png', '', ''),
(20, 'Javonte Stamm', '', 0, 'avatar_default.png', '', ''),
(21, 'Cleve Senger', '', 1, 'avatar_default.png', '', ''),
(22, 'Louisa Ernser II', '', 0, 'avatar_default.png', '', ''),
(23, 'Kavon Koss', '', 1, 'avatar_default.png', '', ''),
(24, 'Imelda Bechtelar', '', 0, 'avatar_default.png', '', ''),
(25, 'Ollie Bernhard', '', 0, 'avatar_default.png', '', ''),
(26, 'Prof. Toy Abshire', '', 0, 'avatar_default.png', '', ''),
(27, 'Dr. Santino Schmitt I', '', 0, 'avatar_default.png', '', ''),
(28, 'Stephen Langosh Jr.', '', 0, 'avatar_default.png', '', ''),
(29, 'Coty Jaskolski PhD', '', 0, 'avatar_default.png', '', ''),
(30, 'Cristopher Farrell', '', 1, 'avatar_default.png', '', ''),
(31, 'Kane Denesik', '', 0, 'avatar_default.png', '', ''),
(32, 'Beau Wuckert', '', 0, 'avatar_default.png', '', ''),
(33, 'Ms. Precious Breitenberg', '', 1, 'avatar_default.png', '', ''),
(34, 'Miss Kylie Anderson III', '', 0, 'avatar_default.png', '', ''),
(35, 'Dr. Caitlyn Frami I', '', 1, 'avatar_default.png', '', ''),
(36, 'Lauren Dooley', '', 0, 'avatar_default.png', '', ''),
(37, 'Verdie Lockman Jr.', '', 1, 'avatar_default.png', '', ''),
(38, 'Guy Schaden', '', 0, 'avatar_default.png', '', ''),
(39, 'Mr. Lorenza Hansen III', '', 1, 'avatar_default.png', '', ''),
(40, 'Brian Cremin', '', 1, 'avatar_default.png', '', ''),
(41, 'Ms. Ernestina Hegmann V', '', 0, 'avatar_default.png', '', ''),
(42, 'Dr. Olin Weimann', '', 1, 'avatar_default.png', '', ''),
(43, 'Mr. Murray Weber I', '', 0, 'avatar_default.png', '', ''),
(44, 'Ms. Emilie Rogahn', '', 0, 'avatar_default.png', '', ''),
(45, 'Fanny Pfeffer', '', 1, 'avatar_default.png', '', ''),
(46, 'Amie Eichmann', '', 0, 'avatar_default.png', '', ''),
(47, 'Lenny Rohan', '', 0, 'avatar_default.png', '', ''),
(48, 'Ms. Halie Stiedemann', '', 1, 'avatar_default.png', '', ''),
(49, 'Anjali Hauck', '', 0, 'avatar_default.png', '', ''),
(50, 'Tina Murphy', '', 1, 'avatar_default.png', '', ''),
(51, '', '11111111', 1, 'cf3.png', 'tranquangnhan1606@gmail.com', 'Trần Quang Nhân'),
(52, 'nhan111', '111111', 0, 'avatar_default.png', NULL, ''),
(53, 'nhan112', '111111', 0, 'avatar_default.png', NULL, ''),
(54, 'nhan115', '111111', 0, 'avatar_default.png', NULL, ''),
(55, 'binh', '1', 0, 'avatar_default.png', NULL, ''),
(56, 'binh', '1', 0, 'avatar_default.png', 'phucbinh.apple@gmail.com', 'Phúc Bình');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baiviet_ibfk_1` (`idhashtag`(1024)),
  ADD KEY `idquan` (`idquan`),
  ADD KEY `fk_baiviet_taikhoan` (`iduser`),
  ADD KEY `fk_baiviet_monan` (`idmonan`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_binhluan_taikhoan` (`iduser`),
  ADD KEY `fk_binhluan_baiviet` (`idbaiviet`);

--
-- Chỉ mục cho bảng `likebv`
--
ALTER TABLE `likebv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_likebv_taikhoan` (`iduser`),
  ADD KEY `fk_likebv_baiviet` (`idbaiviet`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quan`
--
ALTER TABLE `quan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tentag` (`tentag`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `likebv`
--
ALTER TABLE `likebv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `quan`
--
ALTER TABLE `quan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_3` FOREIGN KEY (`idquan`) REFERENCES `quan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_baiviet_monan` FOREIGN KEY (`idmonan`) REFERENCES `monan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_baiviet_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_baiviet` FOREIGN KEY (`idbaiviet`) REFERENCES `baiviet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_binhluan_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `likebv`
--
ALTER TABLE `likebv`
  ADD CONSTRAINT `fk_likebv_baiviet` FOREIGN KEY (`idbaiviet`) REFERENCES `baiviet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_likebv_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
