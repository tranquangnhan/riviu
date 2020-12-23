-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2020 lúc 06:02 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

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
  `idhashtag` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `sao` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  `ngaydang` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `noidung`, `idquan`, `idhashtag`, `sao`, `img`, `iduser`, `ngaydang`) VALUES
(101, 'Đây là tiêu đề', 'Libero ex enim aliquid voluptatem voluptas sit. Consequuntur ex expedita laboriosam et. Voluptatem consequuntur ullam et non temporibus. Quia occaecati accusamus qui.', 10, '13,14,15', 2, 'https://picsum.photos/200/300', 1, '2020-12-19'),
(102, 'Đây là tiêu đề', 'Vitae dolorem quia architecto eum. Quaerat doloribus cum voluptas voluptatum alias facilis quam. Ut animi vero eos vero asperiores. Praesentium officia praesentium unde dignissimos est odio.', 7, '11', 1, 'https://picsum.photos/200/300', 2, '2020-12-19'),
(103, 'Đây là tiêu đề', 'Eos vero et ipsam omnis culpa corporis laudantium rerum. Officiis est exercitationem qui vitae sequi pariatur enim. Facilis laudantium corporis nesciunt natus voluptates ipsam. Rerum odit officiis velit delectus voluptatem inventore quo.', 9, '10', 3, 'https://picsum.photos/200/300', 3, '2020-12-19'),
(104, 'Đây là tiêu đề', 'Cumque consectetur minus exercitationem qui porro recusandae. Cumque et ut laboriosam sint error. Ex natus quidem voluptatem quas culpa earum aliquam. Velit est asperiores laboriosam aut voluptatem.', 8, '20', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(105, 'Đây là tiêu đề', 'Dolore dolor ut tempore eius est non. Est corporis fugit molestias esse eius esse quasi.', 4, '13', 2, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(106, 'Đây là tiêu đề', 'Voluptas deserunt at quas dicta voluptate facilis vel. Maiores dicta laboriosam qui vero dolores eum. Blanditiis ut dignissimos necessitatibus delectus et maiores.', 9, '10', 4, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(107, 'Đây là tiêu đề', 'Incidunt molestiae fugiat vitae quia ad consequatur. Architecto corporis ipsa atque ut aliquid consequatur ut. Tempore animi error minima non magni. Placeat ea perferendis dolore dolorum et maiores. Corporis ullam illo molestias iusto illo.', 8, '13', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(108, 'Đây là tiêu đề', 'Magni quis et magni earum. Sint et animi tenetur. Ipsum error saepe qui autem explicabo aut harum nulla.', 4, '18', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(109, 'Đây là tiêu đề', 'Sint laborum aperiam molestias laudantium fuga id. Recusandae voluptas qui animi cum id hic. Repellendus hic pariatur cumque accusantium.', 7, '18', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(110, 'Đây là tiêu đề', 'Suscipit perspiciatis iure earum nostrum facilis. Deleniti sint dignissimos tenetur beatae odit. Assumenda qui laudantium totam quia quos ut atque. Qui temporibus hic similique dolores repudiandae qui qui qui.', 7, '16', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(111, 'Đây là tiêu đề', 'Nam cupiditate eos fugiat iusto dolores corporis dignissimos asperiores. Labore earum ea sed et libero.', 8, '18', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(112, 'Đây là tiêu đề', 'Sit ut illo vitae qui. Accusamus nemo dolores sint harum et vel sed sed. Non accusantium dolores quis molestiae perferendis ut.', 2, '19', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(113, 'Đây là tiêu đề', 'Dolore cupiditate eos sed fuga in beatae repellendus. Ab omnis consequatur sit eveniet delectus quae. Sit ullam nam quam doloremque voluptatibus. Repellat nemo ea quos omnis provident labore aut.', 5, '16', 4, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(114, 'Đây là tiêu đề', 'Accusantium unde impedit illum delectus quidem earum. Architecto sit ut pariatur magnam saepe omnis laborum quisquam. Eius sed aspernatur ducimus id.', 6, '10', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(115, 'Đây là tiêu đề', 'Tempore sint provident voluptatem adipisci et. Minus nemo dolorum et. Facere ut voluptas eius optio commodi minima ea.', 3, '16', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(116, 'Đây là tiêu đề', 'Laboriosam aut voluptatem quisquam. Veniam a et repudiandae voluptas nulla et inventore saepe. Unde placeat nesciunt quia suscipit voluptatum ipsa.', 1, '10', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(117, 'Đây là tiêu đề', 'Modi recusandae quidem ut cumque ex occaecati nostrum exercitationem. Labore ad maiores error dolores maiores unde. Quidem sed nisi iste molestiae sed.', 4, '18', 2, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(118, 'Đây là tiêu đề', 'Vitae reiciendis dolores non sit qui. Perferendis dignissimos tenetur eos consectetur neque incidunt quidem. Molestias modi totam repellat beatae sunt quo. Odio natus eligendi et impedit. Iure tempore iste earum consectetur praesentium.', 3, '19', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(119, 'Đây là tiêu đề', 'Autem possimus dolores itaque et. Autem architecto nostrum ex eaque qui commodi. Et aspernatur distinctio quibusdam qui eos.', 1, '17', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(120, 'Đây là tiêu đề', 'Placeat pariatur sed qui veniam quae. Vel tempore libero perspiciatis nam et. Nihil occaecati magni distinctio qui.', 3, '17', 2, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(121, 'Đây là tiêu đề', 'Consectetur voluptatem vitae saepe est. Sed minus quisquam vitae odio qui aut. Harum est consequatur deserunt culpa ut. Provident quia distinctio totam rerum ab ad ut.', 2, '20', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(122, 'Đây là tiêu đề', 'Perferendis aut hic omnis eum fuga consequatur. Asperiores consequatur nihil sit voluptatem omnis rerum. Eligendi et qui cumque consequuntur aliquid itaque ea.', 5, '13', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(123, 'Đây là tiêu đề', 'Sunt maiores omnis iste placeat. Aut ab repellendus sint sunt vel architecto non accusamus. Mollitia dolore officia repellendus est quia libero. Vero ut dicta deserunt nihil exercitationem tenetur.', 7, '11', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(124, 'Đây là tiêu đề', 'Sit ad qui quia nihil ut rerum ea repellendus. Eligendi debitis rerum iure. Sint nihil corrupti repellat nisi voluptatibus. Consectetur ut quasi quisquam ad sit non.', 5, '17', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(125, 'Đây là tiêu đề', 'Optio nam quos est harum. Magni quo eius aut maxime rerum enim. Eos blanditiis aperiam velit beatae dicta. Animi iusto et qui facilis dolor.', 2, '10', 4, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(126, 'Đây là tiêu đề', 'Possimus et ducimus non quae repellendus voluptate eveniet. Eum et illum ut tempora. Quae rerum et at delectus excepturi perspiciatis quia pariatur. Ipsam veritatis sit dolorem eum magni ullam in et.', 4, '14', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(127, 'Đây là tiêu đề', 'Non atque impedit sunt dolorem dolores qui laborum. Neque aut et voluptas ad consequuntur voluptas. Dolore voluptatibus ad ipsum.', 2, '20', 2, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(128, 'Đây là tiêu đề', 'Repudiandae consequatur velit eum rem. Soluta rem sunt quis sed eligendi. Quia odit ut fugiat in inventore. Est rerum rerum blanditiis sed quaerat illum illo.', 9, '10', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(129, 'Đây là tiêu đề', 'Eos eum est libero molestias. Et incidunt ipsum corporis vitae distinctio aliquam. Expedita aut suscipit pariatur sed voluptates. Sequi vel velit fugiat dolores possimus. Minima maiores sit suscipit consectetur ad id.', 1, '13', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(130, 'Đây là tiêu đề', 'Dignissimos aut voluptas rerum qui sed. Quaerat maxime laborum unde beatae. Laudantium voluptate est ut illum eum voluptas aut.', 7, '13', 2, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(131, 'Đây là tiêu đề', 'Et dolorem illum praesentium autem vel. Iure quo eligendi et enim labore recusandae voluptatem. Qui voluptatibus adipisci tempora aut. Magni ea cum repellendus aperiam.', 7, '10', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(132, 'Đây là tiêu đề', 'Voluptatem molestias et magni maiores perferendis porro modi. Iure unde maiores sapiente iusto eius eos. Sequi dicta nobis expedita placeat suscipit nihil aperiam. Magnam maxime enim dolor incidunt explicabo occaecati consequuntur libero.', 6, '16', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(133, 'Đây là tiêu đề', 'Rerum voluptas autem aperiam ea. Quos dicta rerum eligendi cum ex inventore itaque. Harum nihil error quia sint eaque.', 10, '19', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(134, 'Đây là tiêu đề', 'Occaecati excepturi omnis sed tenetur velit est omnis. Nihil ex corporis consequuntur voluptatum libero. Non quis corrupti provident.', 7, '15', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(135, 'Đây là tiêu đề', 'Molestiae sint consequuntur placeat iste repellat ducimus qui. Consequuntur asperiores adipisci dolor error. Aspernatur pariatur nam labore suscipit provident nihil dolore. Non quia sit consequuntur molestiae veniam vel.', 2, '11', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(136, 'Đây là tiêu đề', 'Omnis non minus commodi et. Rerum asperiores illo esse commodi. Eos quibusdam dolorem dolores adipisci consequuntur facere assumenda.', 8, '10', 2, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(137, 'Đây là tiêu đề', 'Velit consectetur earum consequatur reprehenderit dolor sed. Eum beatae optio consequuntur quia. Earum aut sunt voluptatum molestiae incidunt quis nostrum consequatur.', 1, '13', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(138, 'Đây là tiêu đề', 'Rerum maiores tempore rem quaerat reprehenderit. Explicabo aut numquam rem rerum cumque. Enim eos sint assumenda dolorum. Animi nihil vitae aperiam et.', 9, '13', 1, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(139, 'Đây là tiêu đề', 'Sed eius dolor ullam. Eos libero voluptatem ut sint sed quae. Repellat odit aliquid labore sapiente. Delectus voluptas dignissimos ipsa qui nesciunt hic illum. Omnis repellendus repellendus ad odit et.', 1, '13', 2, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(140, 'Đây là tiêu đề', 'Ad omnis voluptatem ut deleniti totam odio. Eos nobis quidem beatae veniam totam exercitationem. Dolor delectus aspernatur et quo.', 10, '12', 1, 'https://picsum.photos/200/300', 9, '2020-12-19'),
(141, 'Đây là tiêu đề', 'Laborum non doloribus repudiandae voluptatibus. Ullam eos vitae et quia.', 2, '20', 2, 'https://picsum.photos/200/300', 8, '2020-12-19'),
(142, 'Đây là tiêu đề', 'Occaecati et nam quae sapiente consectetur id voluptatem necessitatibus. Quibusdam nemo aliquid qui optio minima quis explicabo est. Delectus expedita consequatur optio laborum consequatur.', 3, '15', 3, 'https://picsum.photos/200/300', 7, '2020-12-19'),
(143, 'Đây là tiêu đề', 'Voluptatibus a ut quam similique tempore molestiae ut. Sint at et soluta ducimus et voluptatem labore. Numquam consequatur ab rerum odio voluptatem quia pariatur. Fugit quia modi ullam itaque harum tempora.', 4, '20', 5, 'https://picsum.photos/200/300', 6, '2020-12-19'),
(144, 'Đây là tiêu đề', 'Rerum excepturi illum sit eos labore. Quod tempore nemo alias odit in et voluptas. Dolores dolor aut autem placeat illo. Deleniti in laboriosam nihil et.', 6, '17', 4, 'https://picsum.photos/200/300', 5, '2020-12-19'),
(145, 'Đây là tiêu đề', 'Quos vel quo voluptatem amet laudantium sunt. Tempore accusantium sunt aspernatur rerum.', 9, '6,7', 4, 'https://picsum.photos/200/300', 4, '2020-12-19'),
(146, 'Đây là tiêu đề', 'Laudantium tenetur pariatur maxime repellendus veritatis voluptatem. Ab unde neque eum suscipit et occaecati ipsum. Exercitationem rerum deleniti sed molestias.', 9, '7', 5, 'https://picsum.photos/200/300', 3, '2020-12-19'),
(147, 'Đây là tiêu đề', 'Et dolorem facere quasi molestiae. Totam saepe quia quas sint velit aliquid inventore ullam. Non id illo deserunt iusto quia.', 5, '6', 5, 'https://picsum.photos/200/300', 2, '2020-12-19'),
(148, 'Đây là tiêu đề', 'Pariatur reiciendis possimus illum dolorem nihil porro. Modi quisquam aut et incidunt quidem et. Iusto aut rerum quo aspernatur. Nesciunt possimus vero est officia et in. Sit omnis non repellendus aliquam.', 10, '5', 4, 'https://picsum.photos/200/300', 1, '2020-12-19'),
(149, 'Đây là tiêu đề', 'Voluptatem consectetur eum sint modi occaecati ut a. Atque similique nobis illo quo molestiae libero praesentium. Reiciendis dolorum reprehenderit ea fuga consequatur voluptatem.', 10, '4', 3, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(150, 'Đây là tiêu đề', 'Et officiis dicta voluptatem neque libero aut natus. Corporis praesentium sunt quos consequuntur perspiciatis fugiat nam nihil. Molestiae sed quisquam maiores blanditiis est.', 6, '2', 5, 'https://picsum.photos/200/300', 0, '2020-12-19'),
(154, 'Bánh cực ngon, giá bao rẻ', 'Quán của cô này gần sát trường, bánh vừa ngon mà còn rẻ nữa, cô bán bánh vui tính, nhiệt tình', 21, '1,2', 0, 'https://picsum.photos/200/300', 2, '2020-12-20');

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
(1, '070 Block Street Suite 633', 'Predovic Highway', 'https://picsum.photos/300/300'),
(2, '889 Walter Orchard', 'Corwin Viaduct', 'https://picsum.photos/300/300'),
(3, '40301 Kuhlman Stream', 'Thiel Lodge', 'https://picsum.photos/300/300'),
(4, '1988 O\'Hara Gateway', 'Shayne Lakes', 'https://picsum.photos/300/300'),
(5, '13476 Nichole Loaf', 'Earlene Islands', 'https://picsum.photos/300/300'),
(6, '21221 Mills Corner', 'Idella Shores', 'https://picsum.photos/300/300'),
(7, '52383 Runte Groves Apt. 602', 'Myriam Cove', 'https://picsum.photos/300/300'),
(8, '2199 Goodwin Passage', 'Tyshawn Fort', 'https://picsum.photos/300/300'),
(9, '010 Lizeth Unions', 'Huel Unions', 'https://picsum.photos/300/300'),
(10, '984 Austin Manors', 'Owen Cliffs', 'https://picsum.photos/300/300'),
(11, '2525 Botsford Haven Apt. 661', 'McLaughlin Falls', 'https://picsum.photos/300/300'),
(12, '168 Chanel Fort', 'Glover Canyon', 'https://picsum.photos/300/300'),
(13, '0576 Gay Crossing', 'Hegmann Villages', 'https://picsum.photos/300/300'),
(14, '2471 Spinka Ramp Apt. 552', 'Bartoletti Lock', 'https://picsum.photos/300/300'),
(15, '452 Edmund Field Apt. 322', 'Eldridge Springs', 'https://picsum.photos/300/300'),
(16, '2817 Lina Keys', 'Tyreek Rapid', 'https://picsum.photos/300/300'),
(17, '420 Domenick Mountains', 'Jamison Extensions', 'https://picsum.photos/300/300'),
(18, '9689 Heidenreich Island Suite 384', 'Jakayla Extension', 'https://picsum.photos/300/300'),
(19, '0720 Caleigh Rue', 'Piper Cape', 'https://picsum.photos/300/300'),
(20, '5533 Romaguera Falls', 'Ramona Union', 'https://picsum.photos/300/300'),
(21, '6561 Swift Fords Suite 357', 'August Corners', 'https://picsum.photos/300/300'),
(22, '434 Roob Heights Suite 690', 'Roberts Trail', 'https://picsum.photos/300/300'),
(23, '317 Rodrigo Turnpike', 'Brown Village', 'https://picsum.photos/300/300'),
(24, '9433 Maximus Villages', 'Rosie Manor', 'https://picsum.photos/300/300'),
(25, '3843 Jayne Turnpike Apt. 636', 'Evelyn Station', 'https://picsum.photos/300/300'),
(26, '454 Jacobi Motorway Apt. 067', 'Kub Gateway', 'https://picsum.photos/300/300'),
(27, '848 Frami Square Suite 200', 'Gibson Burgs', 'https://picsum.photos/300/300'),
(28, '264 Jacobson Prairie', 'Otto Plaza', 'https://picsum.photos/300/300'),
(29, '324 Graham Dam', 'Gislason Pass', 'https://picsum.photos/300/300'),
(30, '6470 Ozella Wall Apt. 689', 'Heathcote Vista', 'https://picsum.photos/300/300'),
(31, '33534 Camilla Roads', 'Walsh Island', 'https://picsum.photos/300/300'),
(32, '34037 Roberts Forge Suite 188', 'Flatley Circles', 'https://picsum.photos/300/300'),
(33, '09004 Brain Spurs Suite 437', 'Ortiz Islands', 'https://picsum.photos/300/300'),
(34, '79706 Halvorson Stream Apt. 199', 'Hettie Walks', 'https://picsum.photos/300/300'),
(35, '8943 Effertz Pass', 'Strosin Avenue', 'https://picsum.photos/300/300'),
(36, '07423 Dach Fort Suite 218', 'Elaina Light', 'https://picsum.photos/300/300'),
(37, '8652 Ebba Trafficway Suite 172', 'Pfannerstill Spur', 'https://picsum.photos/300/300'),
(38, '438 Aileen Spur', 'Muller Lodge', 'https://picsum.photos/300/300'),
(39, '09229 Marvin Glens', 'Gleason View', 'https://picsum.photos/300/300'),
(40, '20938 Lockman Bridge Apt. 429', 'Kirlin Burgs', 'https://picsum.photos/300/300'),
(41, '579 Farrell Fort', 'Kavon Parkway', 'https://picsum.photos/300/300'),
(42, '921 Tyreek Lake', 'Davis Street', 'https://picsum.photos/300/300'),
(43, '73448 Altenwerth Point', 'Windler Drives', 'https://picsum.photos/300/300'),
(44, '750 Sarai Rapids Apt. 517', 'Feeney Road', 'https://picsum.photos/300/300'),
(45, '386 Domenica Villages Suite 254', 'Richmond Centers', 'https://picsum.photos/300/300'),
(46, '11816 Klein Isle Apt. 655', 'Mervin Passage', 'https://picsum.photos/300/300'),
(47, '103 Larkin Fields', 'Dooley Forks', 'https://picsum.photos/300/300'),
(48, '882 Barton Ranch Apt. 227', 'Johns Junctions', 'https://picsum.photos/300/300'),
(49, '578 Naomi Villages Apt. 313', 'Monahan Gardens', 'https://picsum.photos/300/300'),
(50, '09563 Mante Islands', 'Pagac Mission', 'https://picsum.photos/300/300'),
(51, '0452 Gottlieb Trafficway Suite 075', 'Karli Crescent', 'https://picsum.photos/300/300'),
(52, '661 Dare Village', 'Murray Dale', 'https://picsum.photos/300/300'),
(53, '025 Tiana Ports Apt. 087', 'Moore Views', 'https://picsum.photos/300/300'),
(54, '229 Ledner Ports', 'Marjory Bypass', 'https://picsum.photos/300/300'),
(55, '10989 Eleonore Valleys', 'Tavares Corner', 'https://picsum.photos/300/300'),
(56, '9003 Marjolaine Green', 'Stanley Ports', 'https://picsum.photos/300/300'),
(57, '2452 Kaylah Loaf', 'Cartwright Loop', 'https://picsum.photos/300/300'),
(58, '76094 Kaleigh Islands Apt. 457', 'Cummerata Lights', 'https://picsum.photos/300/300'),
(59, '913 Leuschke Parkways', 'Andres Park', 'https://picsum.photos/300/300'),
(60, '69626 Roscoe Drives', 'Ashtyn Circles', 'https://picsum.photos/300/300'),
(61, '6646 Muller Village', 'Kunde Club', 'https://picsum.photos/300/300'),
(62, '6348 Yessenia Union', 'Crona Harbors', 'https://picsum.photos/300/300'),
(63, '7737 Harvey Lakes', 'Macey Trail', 'https://picsum.photos/300/300'),
(64, '074 Feest Rue', 'Gerda Dam', 'https://picsum.photos/300/300'),
(65, '916 Okuneva Place Apt. 349', 'Katarina Spring', 'https://picsum.photos/300/300'),
(66, '057 Claire Locks Apt. 581', 'Huels Villages', 'https://picsum.photos/300/300'),
(67, '8303 Dejah Forge', 'Spencer Ville', 'https://picsum.photos/300/300'),
(68, '7209 Conroy Burgs Apt. 868', 'Lois Fields', 'https://picsum.photos/300/300'),
(69, '44699 Angel Ridges Suite 391', 'Jones Orchard', 'https://picsum.photos/300/300'),
(70, '013 Antwon Mountains Suite 672', 'Alana Ports', 'https://picsum.photos/300/300'),
(71, '1487 Roberts Square', 'Mante Cliffs', 'https://picsum.photos/300/300'),
(72, '830 Weimann Manor Suite 885', 'Barton Loop', 'https://picsum.photos/300/300'),
(73, '7859 Cordelia Isle Apt. 182', 'Hartmann Way', 'https://picsum.photos/300/300'),
(74, '8306 Helene Lock', 'Donnelly Lock', 'https://picsum.photos/300/300'),
(75, '12079 Ankunding Underpass Apt. 373', 'Rowland Hills', 'https://picsum.photos/300/300'),
(76, '609 Zemlak Lane Apt. 568', 'Jake Cliff', 'https://picsum.photos/300/300'),
(77, '3125 Hackett Plaza', 'Weimann Spring', 'https://picsum.photos/300/300'),
(78, '64338 Bogisich Camp Suite 478', 'Schaefer Neck', 'https://picsum.photos/300/300'),
(79, '2282 Hirthe Neck', 'Boyle Parkway', 'https://picsum.photos/300/300'),
(80, '6176 Wiza Parkway Apt. 250', 'Konopelski Trafficway', 'https://picsum.photos/300/300'),
(81, '662 Franecki Canyon Apt. 721', 'Brendon Ports', 'https://picsum.photos/300/300'),
(82, '42990 Larue Inlet Suite 992', 'Koby Tunnel', 'https://picsum.photos/300/300'),
(83, '3104 Fanny Estates', 'Kuvalis Plain', 'https://picsum.photos/300/300'),
(84, '03821 White Squares Suite 272', 'Schamberger Inlet', 'https://picsum.photos/300/300'),
(85, '949 Haag Squares Apt. 544', 'Winona Extension', 'https://picsum.photos/300/300'),
(86, '591 Chet Meadows', 'Julio Cape', 'https://picsum.photos/300/300'),
(87, '76332 Fay Hill', 'Jacobi Highway', 'https://picsum.photos/300/300'),
(88, '30693 Emmerich Junctions Suite 472', 'Carroll Lane', 'https://picsum.photos/300/300'),
(89, '460 Retta Run', 'Hermiston Creek', 'https://picsum.photos/300/300'),
(90, '77732 Keebler Village', 'Schaefer Flat', 'https://picsum.photos/300/300'),
(91, '02063 Norberto Point', 'Ratke Parkways', 'https://picsum.photos/300/300'),
(92, '24799 Rylan Port Apt. 894', 'Coy Prairie', 'https://picsum.photos/300/300'),
(93, '38971 Alda Shores Suite 587', 'Shana Cliff', 'https://picsum.photos/300/300'),
(94, '152 Jennie Path', 'Kunze Oval', 'https://picsum.photos/300/300'),
(95, '290 Hudson Mews', 'Hand Summit', 'https://picsum.photos/300/300'),
(96, '885 Gabrielle Summit Apt. 903', 'Stefanie Stream', 'https://picsum.photos/300/300'),
(97, '10005 Prosacco Rest Apt. 828', 'Kirlin Extensions', 'https://picsum.photos/300/300'),
(98, '0931 Rosalee Islands', 'Karl Curve', 'https://picsum.photos/300/300'),
(99, '2568 Welch Club', 'Pollich Spring', 'https://picsum.photos/300/300'),
(100, '097 Dora Stravenue', 'Alessandra Flat', 'https://picsum.photos/300/300');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tentag` char(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `img` char(150) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tag`
--

INSERT INTO `tag` (`id`, `tentag`, `img`) VALUES
(1, 'Bánh', 'https://i.imgur.com/l3OI1ny.jpg'),
(2, 'Hủ Tiếu', 'https://i.imgur.com/gfyJFxl.jpg'),
(4, 'Mì', 'https://i.imgur.com/srKSfFB.jpg'),
(5, 'Lẩu', 'https://i.imgur.com/VptMV9X.jpg'),
(6, 'Ăn vặt', 'https://i.imgur.com/dMEF5Nh.jpg'),
(7, 'Pizza', 'https://i.imgur.com/e4YKRW9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` char(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `password`, `role`, `avatar`, `email`) VALUES
(1, 'Burnice Waelchi I', '', 0, 'https://picsum.photos/300/300', ''),
(2, 'Perry Labadie', '', 1, 'https://picsum.photos/300/300', ''),
(3, 'Mr. Carter Reynolds Jr.', '', 1, 'https://picsum.photos/300/300', ''),
(4, 'Victoria Cormier', '', 1, 'https://picsum.photos/300/300', ''),
(5, 'Mrs. Ramona Cormier', '', 0, 'https://picsum.photos/300/300', ''),
(6, 'Norbert Stehr', '', 1, 'https://picsum.photos/300/300', ''),
(7, 'Werner Cormier Jr.', '', 0, 'https://picsum.photos/300/300', ''),
(8, 'Travon Hintz', '', 1, 'https://picsum.photos/300/300', ''),
(9, 'Demetris Feest III', '', 1, 'https://picsum.photos/300/300', ''),
(10, 'Samanta Weimann', '', 0, 'https://picsum.photos/300/300', ''),
(11, 'Dr. Karianne Stamm', '', 0, 'https://picsum.photos/300/300', ''),
(12, 'Santina Hayes', '', 1, 'https://picsum.photos/300/300', ''),
(13, 'Asha Metz', '', 0, 'https://picsum.photos/300/300', ''),
(14, 'Domenic Kemmer', '', 1, 'https://picsum.photos/300/300', ''),
(15, 'Orion Lueilwitz', '', 0, 'https://picsum.photos/300/300', ''),
(16, 'Jacky Kuvalis', '', 1, 'https://picsum.photos/300/300', ''),
(17, 'Dr. Moriah Konopelski', '', 1, 'https://picsum.photos/300/300', ''),
(18, 'Kenton Hackett', '', 1, 'https://picsum.photos/300/300', ''),
(19, 'Helga Jaskolski', '', 0, 'https://picsum.photos/300/300', ''),
(20, 'Javonte Stamm', '', 0, 'https://picsum.photos/300/300', ''),
(21, 'Cleve Senger', '', 1, 'https://picsum.photos/300/300', ''),
(22, 'Louisa Ernser II', '', 0, 'https://picsum.photos/300/300', ''),
(23, 'Kavon Koss', '', 1, 'https://picsum.photos/300/300', ''),
(24, 'Imelda Bechtelar', '', 0, 'https://picsum.photos/300/300', ''),
(25, 'Ollie Bernhard', '', 0, 'https://picsum.photos/300/300', ''),
(26, 'Prof. Toy Abshire', '', 0, 'https://picsum.photos/300/300', ''),
(27, 'Dr. Santino Schmitt I', '', 0, 'https://picsum.photos/300/300', ''),
(28, 'Stephen Langosh Jr.', '', 0, 'https://picsum.photos/300/300', ''),
(29, 'Coty Jaskolski PhD', '', 0, 'https://picsum.photos/300/300', ''),
(30, 'Cristopher Farrell', '', 1, 'https://picsum.photos/300/300', ''),
(31, 'Kane Denesik', '', 0, 'https://picsum.photos/300/300', ''),
(32, 'Beau Wuckert', '', 0, 'https://picsum.photos/300/300', ''),
(33, 'Ms. Precious Breitenberg', '', 1, 'https://picsum.photos/300/300', ''),
(34, 'Miss Kylie Anderson III', '', 0, 'https://picsum.photos/300/300', ''),
(35, 'Dr. Caitlyn Frami I', '', 1, 'https://picsum.photos/300/300', ''),
(36, 'Lauren Dooley', '', 0, 'https://picsum.photos/300/300', ''),
(37, 'Verdie Lockman Jr.', '', 1, 'https://picsum.photos/300/300', ''),
(38, 'Guy Schaden', '', 0, 'https://picsum.photos/300/300', ''),
(39, 'Mr. Lorenza Hansen III', '', 1, 'https://picsum.photos/300/300', ''),
(40, 'Brian Cremin', '', 1, 'https://picsum.photos/300/300', ''),
(41, 'Ms. Ernestina Hegmann V', '', 0, 'https://picsum.photos/300/300', ''),
(42, 'Dr. Olin Weimann', '', 1, 'https://picsum.photos/300/300', ''),
(43, 'Mr. Murray Weber I', '', 0, 'https://picsum.photos/300/300', ''),
(44, 'Ms. Emilie Rogahn', '', 0, 'https://picsum.photos/300/300', ''),
(45, 'Fanny Pfeffer', '', 1, 'https://picsum.photos/300/300', ''),
(46, 'Amie Eichmann', '', 0, 'https://picsum.photos/300/300', ''),
(47, 'Lenny Rohan', '', 0, 'https://picsum.photos/300/300', ''),
(48, 'Ms. Halie Stiedemann', '', 1, 'https://picsum.photos/300/300', ''),
(49, 'Anjali Hauck', '', 0, 'https://picsum.photos/300/300', ''),
(50, 'Tina Murphy', '', 1, 'https://picsum.photos/300/300', ''),
(51, 'admin', '111111', 0, '', NULL),
(52, 'nhan111', '111111', 0, '', NULL),
(53, 'nhan112', '111111', 0, '', NULL),
(54, 'nhan115', '111111', 0, '', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baiviet_ibfk_1` (`idhashtag`),
  ADD KEY `idquan` (`idquan`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT cho bảng `quan`
--
ALTER TABLE `quan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_3` FOREIGN KEY (`idquan`) REFERENCES `quan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
