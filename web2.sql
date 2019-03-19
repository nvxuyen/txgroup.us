-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2019 lúc 05:28 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat_news`
--

CREATE TABLE `cat_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_ascii` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cat_news`
--

INSERT INTO `cat_news` (`id`, `name`, `name_ascii`, `description`, `updated_at`, `created_at`) VALUES
(2, 'Tin tức', 'tin-tuc', NULL, '2019-03-17 09:14:47', '0000-00-00 00:00:00'),
(4, 'Góc Review', 'goc-review', NULL, '2019-03-17 08:55:14', '2019-03-17 08:55:14'),
(5, 'Chương trình khuyến mãi', 'chuong-trinh-khuyen-mai', NULL, '2019-03-17 08:55:28', '2019-03-17 08:55:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection`
--

CREATE TABLE `collection` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ascii` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `collection`
--

INSERT INTO `collection` (`id`, `name`, `name_ascii`, `des`, `parent`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Gaming Gear', 'gaming-gear', '', 0, 1, '2019-03-16 17:00:00', '2019-03-16 17:00:00'),
(2, 'LK Ráp Máy', 'lk-rap-may', '', 0, 2, '2019-03-16 17:00:00', '2019-03-16 17:00:00'),
(3, 'Mouse - Chuột', 'mouse-chuot', '', 1, 1, NULL, NULL),
(4, 'Mainboard Intel', 'mainboard-intel', 'Mainboard Intel', 0, 1, '2019-03-17 14:57:18', '2019-03-17 14:57:18'),
(5, 'VGA - Card đồ họa', 'vga-card-do-hoa', 'VGA - Card đồ họa', 0, 1, '2019-03-17 14:58:45', '2019-03-17 14:58:45'),
(6, 'SSD - Ổ thể rắn', 'ssd-o-the-ran', 'SSD - Ổ thể rắn', 0, 1, '2019-03-17 14:59:09', '2019-03-17 14:59:09'),
(7, 'PSU - Bộ nguồn', 'psu-bo-nguon', 'PSU - Bộ nguồn', 0, 1, '2019-03-17 14:59:28', '2019-03-17 14:59:28'),
(8, 'CPU Intel', 'cpu-intel', 'CPU Intel', 0, 1, '2019-03-17 15:30:18', '2019-03-17 15:30:18'),
(9, 'Ghế Gaming', 'ghe-gaming', 'Ghế Gaming', 0, 1, '2019-03-17 15:42:27', '2019-03-17 15:42:27'),
(10, 'Case - Thùng máy', 'case-thung-may', 'Case - Thùng máy', 0, 1, '2019-03-17 15:43:48', '2019-03-17 15:43:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `forgotpass`
--

CREATE TABLE `forgotpass` (
  `id_verify` varchar(20) NOT NULL,
  `enable` int(11) NOT NULL DEFAULT '1',
  `id_users` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `forgotpass`
--

INSERT INTO `forgotpass` (`id_verify`, `enable`, `id_users`, `created_at`, `updated_at`) VALUES
('12343gud2Y1544202072', 1, 1, '2018-12-07 17:01:12', '2018-12-07 17:01:12'),
('3515MVLbBs1544201974', 1, 1, '2018-12-07 16:59:34', '2018-12-07 16:59:34'),
('3573mMMby51544202059', 1, 1, '2018-12-07 17:00:59', '2018-12-07 17:00:59'),
('3926A9kY3c1544204629', 1, 1, '2018-12-07 17:43:49', '2018-12-07 17:43:49'),
('4028JpvDwL1544201748', 1, 1, '2018-12-07 16:55:48', '2018-12-07 16:55:48'),
('5094ufed4j1544206653', 0, 1, '2018-12-07 18:37:37', '2018-12-07 18:37:37'),
('5146ZkYPSC1544210542', 1, 5, '2018-12-07 19:22:22', '2018-12-07 19:22:22'),
('52179aTCem1544203045', 1, 1, '2018-12-07 17:17:25', '2018-12-07 17:17:25'),
('5326scyPCO1544243697', 0, 1, '2018-12-08 04:35:12', '2018-12-08 04:35:12'),
('5562Texyhy1544210091', 1, 1, '2018-12-07 19:14:51', '2018-12-07 19:14:51'),
('6704FONrsk1544205701', 1, 1, '2018-12-07 18:01:41', '2018-12-07 18:01:41'),
('6991j5YnyB1544210531', 1, 6, '2018-12-07 19:22:11', '2018-12-07 19:22:11'),
('7859iQO5Y71544203036', 1, 1, '2018-12-07 17:17:16', '2018-12-07 17:17:16'),
('8689HIM7IP1544201912', 1, 1, '2018-12-07 16:58:32', '2018-12-07 16:58:32'),
('88640UuEJF1544202760', 1, 1, '2018-12-07 17:12:40', '2018-12-07 17:12:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_13_063645_creata_table_collections', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `title_ascii` varchar(120) NOT NULL,
  `quote` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `title_ascii`, `quote`, `content`, `image`, `created_at`, `updated_at`) VALUES
(41, 5, 'KHAI XUÂN NHẬN QUÀ CHẤT TỪ ASUS – VUI TẾT CON LỢN', 'khai-xuan-nhan-qua-chat-tu-asus-–-vui-tet-con-lon', 'Thời gian từ 07/01/2019 đến hết 31/01/2019, với bất kì hóa đơn mua hàng nào tại Tân Doanh, quý khách có cơ hội nhận quà khuyến mãi cực lớn!', '<p>Thời gian từ <strong>07/01/2019</strong> đến hết <strong>31/01/2019</strong>, với bất k&igrave; h&oacute;a đơn mua h&agrave;ng n&agrave;o tại T&acirc;n Doanh, qu&yacute; kh&aacute;ch c&oacute; cơ hội nhận qu&agrave; khuyến m&atilde;i cực lớn!</p>\r\n\r\n<ol>\r\n	<li><strong>Sản phẩm &aacute;p dụng khi mua h&agrave;ng tại T&acirc;n Doanh:</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li><em>Bo mạch chủ (Mainboard): <strong>ASUS</strong> <strong>Z390 TUF, Z390 STRIX, Z390 ROG MAXIM</strong></em></li>\r\n	<li><em>Card đồ họa: <strong>ASUS RTX 2060, RTX 2070, RTX 2080/ 2080TI</strong></em></li>\r\n	<li><em>M&agrave;n h&igrave;nh: <strong>ASUS VG258 v&agrave; VG278</strong></em></li>\r\n	<li><em>Thiết bị mạng: <strong>RT-AC86U/RT-AX88U</strong></em></li>\r\n	<li><em>Qu&yacute; kh&aacute;ch sẽ được TẶNG ngay <strong>b&igrave;nh nước ROG </strong>phi&ecirc;n bản giới hạn</em></li>\r\n</ul>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/asus-2019_grande.jpg\" /></p>\r\n\r\n<ol>\r\n	<li><strong>C&aacute;ch thức nhận qu&agrave;:</strong></li>\r\n</ol>\r\n\r\n<p>Truy cập đường link sau để đăng k&yacute; th&ocirc;ng tin nhận qu&agrave;</p>\r\n\r\n<p><a href=\"https://www.asus.com/vn/events/info/activity_khaixuan_nhanquachat/?fbclid=IwAR1eNrHT9yspglboco_ccPqnpkUfUOa8gbktYmsa7TJcZU_sJnH3xpkYDTw\">https://www.asus.com/vn/events/info/activity_khaixuan_nhanquachat/</a></p>\r\n\r\n<p>ASUS sẽ gửi qu&agrave; trực tiếp tới địa chỉ m&agrave; bạn cung cấp trong v&ograve;ng 10 ng&agrave;y l&agrave;m việc (ngoại trừ thứ 7 v&agrave; Chủ nhật)</p>\r\n\r\n<p>Lưu &yacute;: Trong trường hợp kh&ocirc;ng thể đăng k&yacute; tr&ecirc;n hệ thống, qu&yacute; kh&aacute;ch vui l&ograve;ng gửi th&ocirc;ng tin nhận qu&agrave; như b&ecirc;n dưới về địa chỉ Email: <a href=\"mailto:dangkyasus@gmail.com\">dangkyasus@gmail.com</a> <strong>Ti&ecirc;u đề: NhanQuaChat</strong></p>\r\n\r\n<p>Nội dung:</p>\r\n\r\n<ul>\r\n	<li>H&igrave;nh ảnh h&oacute;a đơn mua h&agrave;ng, phiếu thu, phiếu xuất kho c&oacute; dấu x&aacute;c nhận của cửa h&agrave;ng, thể hiện r&otilde; t&ecirc;n sản phẩm v&agrave; ng&agrave;y mua h&agrave;ng trong thời gian chương tr&igrave;nh diễn ra.</li>\r\n	<li>Ảnh chụp số S/N của sản phẩm (phải chụp phần series đ&iacute;nh tr&ecirc;n sản phẩm kh&ocirc;ng chụp hộp).</li>\r\n	<li>Họ v&agrave; t&ecirc;n người nhận qu&agrave;</li>\r\n	<li>Địa chỉ nhận qu&agrave;</li>\r\n	<li>Số điện thoại li&ecirc;n hệ</li>\r\n</ul>\r\n\r\n<p>Lưu &yacute;: H&igrave;nh chụp số S/N của sản phẩm phải chụp phần series đ&iacute;nh tr&ecirc;n sản phẩm như h&igrave;nh dưới đ&acirc;y, h&igrave;nh chụp tr&ecirc;n hộp sản phẩm sẽ kh&ocirc;ng c&ocirc;ng nhận.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/asus-2019-1_grande.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/asus-2019-2_grande.jpg\" /></p>\r\n\r\n<ol>\r\n	<li><strong>C&aacute;c lưu &yacute; kh&aacute;c:</strong></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li><strong>ASUS kh&ocirc;ng nhận bảo h&agrave;nh qu&agrave; tặng khuyến m&atilde;i k&egrave;m theo trong chương tr&igrave;nh n&agrave;y</strong></li>\r\n	<li>Qu&agrave; tặng kh&ocirc;ng c&oacute; gi&aacute; trị quy đổi th&agrave;nh tiền mặt hoặc c&aacute;c gi&aacute; trị kh&aacute;c tương đương.</li>\r\n	<li>H&oacute;a đơn/ phiếu thu/ phiếu xuất kho phải c&oacute; con dấu của cửa h&agrave;ng b&aacute;n lẻ</li>\r\n	<li>Dung lượng h&igrave;nh ảnh h&oacute;a đơn tải l&ecirc;n hệ thống &lt;1Mb.</li>\r\n	<li>Mọi g&oacute;p &yacute; hay thắc mắc kh&aacute;c về chương tr&igrave;nh, xin vui l&ograve;ng post tại&nbsp;<a href=\"https://www.facebook.com/groups/asusvn/\">Hội linh kiện PC ASUS ROG Việt Nam</a><strong>: </strong><a href=\"https://www.facebook.com/groups/asusvn/\">https://www.facebook.com/groups/asusvn/</a></li>\r\n</ul>', 'https://file.hstatic.net/1000162654/file/asus-2019_grande.jpg', '2019-03-17 10:12:40', '2019-03-17 10:12:40'),
(42, 5, 'TIN HOT ĐẦU NĂM - EVENT KHUYẾN MÃI TẶNG CODE GAME BẢN QUYỀN  TRỊ GIÁ 59.99 USD', 'tin-hot-dau-nam-event-khuyen-mai-tang-code-game-ban-quyen-tri-gia-59-99-usd', 'Từ 1/1/2019 đến hết ngày 31/3/2019 Tặng ngay siêu phẩm game FPS của năm 2018 CALL OF DUTY: BLACK OPS 4 khi mua bất cứ sản phẩm CPU INTEL dòng K và X thế hệ thứ 8 và 9 Series tại Tân Doanh như sau: ', '<p>Từ 1/1/2019 đến hết ng&agrave;y 31/3/2019 Tặng ngay si&ecirc;u phẩm game FPS của năm 2018 <strong>CALL OF DUTY: BLACK OPS 4</strong> khi mua bất cứ sản phẩm CPU INTEL d&ograve;ng K v&agrave; X thế hệ thứ 8 v&agrave; 9 Series tại T&acirc;n Doanh như sau:&nbsp;</p>\r\n\r\n<p>CPU Intel d&ograve;ng <strong>K Series</strong> v&agrave; <strong>X Series</strong>:</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/intel1_88078ded74144ddbb9d2fd055b8f2541_grande.png\" /></p>\r\n\r\n<p><strong>HƯỚNG DẪN C&Aacute;CH NHẬN KEY:</strong></p>\r\n\r\n<p><strong>BƯỚC 1:</strong> Mua CPU Intel tại T&acirc;n Doanh trong danh s&aacute;ch (H&agrave;ng New Box Ch&iacute;nh h&atilde;ng)</p>\r\n\r\n<p><strong>BƯỚC 2:</strong> Nhận Master Key từ T&acirc;n Doanh</p>\r\n\r\n<p><strong>BƯỚC 3:</strong> Nhập m&atilde; key l&ecirc;n hệ thống INTEL tại: softwareoffer.intel.com/callofduty</p>\r\n\r\n<p><strong>BƯỚC 4:</strong> L&agrave;m theo hướng dẫn của INTEL v&agrave; nhận thưởng game</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/intel_grande.png\" /></p>\r\n\r\n<p>Lưu &yacute;: Mỗi sản phẩm đều c&oacute; Series Number v&agrave; chỉ sử dụng được 1 lần (dựa theo hệ thống server của Intel). <strong>Master Key</strong> chỉ c&oacute; gi&aacute; trị khi nhập tr&ecirc;n hệ thống đến ng&agrave;y 30/5/2019.</p>\r\n\r\n<p>Nhanh tay sắm CPU để &ldquo;chạy bo&rdquo; trong Black Ops 4 c&ugrave;ng T&acirc;n Doanh trong năm mới n&agrave;o! &nbsp;</p>', 'https://file.hstatic.net/1000162654/article/18q4_gaming_bundle__cod__vie_1080x1080_large.png', '2019-03-17 10:26:45', '2019-03-17 10:26:45'),
(43, 2, 'NVIDIA GEFORCE RTX 2060 CHÍNH THỨC LỘ DIỆN - MUA 1 TẶNG 2', 'nvidia-geforce-rtx-2060-chinh-thuc-lo-dien-mua-1-tang-2', 'NVIDIA Geforce RTX 2060 đã chính thức được ra mắt toàn cầu với những cải tiến và hiệu năng vô cùng ấn tượng. CEO của NVIDIA – ông Jensen Huang...', '<p>NVIDIA Geforce RTX 2060 đ&atilde; ch&iacute;nh thức được ra mắt to&agrave;n cầu với những cải tiến v&agrave; hiệu năng v&ocirc; c&ugrave;ng ấn tượng. CEO của NVIDIA &ndash; &ocirc;ng Jensen Huang cho biết, RTX 2060 sẽ c&oacute; hiệu năng mạnh hơn GTX 1070 Ti v&agrave; ăn đứt GTX 1060 tới 60%, mở ra một kỷ nguy&ecirc;n gaming next-gen mới cho to&agrave;n bộ game thủ tr&ecirc;n thế giới.</p>\r\n\r\n<p>Ngo&agrave;i ra khi mua Card đồ họa thuộc d&ograve;ng Geforce RTX (RTX 2080 Ti, RTX 2080, RTX 2070 v&agrave; RTX 2060) tại <strong>T&acirc;n Doanh</strong> qu&yacute; kh&aacute;ch sẽ nhận được 2 game si&ecirc;u phẩm <strong>Battlefield</strong> V v&agrave; <strong>Anthem</strong>. (<em>Số lượng c&oacute; hạn</em><em>)</em></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/nvidia-rtx-2060_grande.jpg\" /></p>\r\n\r\n<p><strong>Hướng dẫn lấy code game v&agrave; quy đổi:</strong></p>\r\n\r\n<p>Sau khi đ&atilde; mua card NVIDIA Geforce RTX xong, qu&yacute; kh&aacute;ch vui l&ograve;ng truy cập v&agrave;o đường link sau để tiến h&agrave;nh đăng k&yacute; lấy code game</p>\r\n\r\n<p>Danh s&aacute;ch địa chỉ để lấy code game tương ứng với từng h&atilde;ng:</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Palit</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"http://www.palit.biz/event/promote/2019/abf5/apac.php\">http://www.palit.biz/event/promote/2019/abf5/apac.php</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Gainward</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"http://www.gainward.com/main/event/2019/abf5/index_en.php\">http://www.gainward.com/main/event/2019/abf5/index_en.php</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ZOTAC</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"https://www.zotac.com/vn/page/redeem-bfv-anthem\">https://www.zotac.com/vn/page/redeem-bfv-anthem</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MSI</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"https://www.msi.com/Promotion/game-on\">https://www.msi.com/Promotion/game-on</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Inno3D</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"http://www.inno3d.com/redemption_index.php\">http://www.inno3d.com/redemption_index.php</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Galax</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"http://www.galax.com/en/webforms/index/index/id/76/\">http://www.galax.com/en/webforms/index/index/id/76/</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ASUS</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"https://www.asus.com/event/vga/BVF-Anthem/\">https://www.asus.com/event/vga/BVF-Anthem/</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Gigabyte</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"https://vn.aorus.com/event-detail.php?i=896\">https://vn.aorus.com/event-detail.php?i=896</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>EVGA</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"https://au.evga.com/articles/01295/get-up-to-two-games/\">https://au.evga.com/articles/01295/get-up-to-two-games/</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Để quy đổi m&atilde; khuyến m&atilde;i của bạn lấy Battlefield V hoặc Anthem, vui l&ograve;ng l&agrave;m theo c&aacute;c bước sau:</p>\r\n\r\n<p>1. Lắp đặt Card đồ họa đủ điều kiện của bạn.</p>\r\n\r\n<p>2. Cập nhật hoặc c&agrave;i đặt phi&ecirc;n bản GeForce Experience mới nhất (Phi&ecirc;n bản 3.16 trở l&ecirc;n)</p>\r\n\r\n<p>3. Mở v&agrave; đăng nhập v&agrave;o <strong>GeForce Experience</strong></p>\r\n\r\n<p>4. Truy cập v&agrave;o menu thả xuống T&agrave;i khoản ở ph&iacute;a tr&ecirc;n c&ugrave;ng b&ecirc;n phải, rồi chọn &ldquo;Quy Đổi&rdquo; ( Redeem như trong h&igrave;nh )</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/nvidia-rtx-2060-1_grande.png\" /></p>\r\n\r\n<p>5. Nhập m&atilde; g&oacute;i từ giao dịch mua g&oacute;i đủ điều kiện của bạn</p>\r\n\r\n<p>6. L&agrave;m theo c&aacute;c hướng dẫn c&ograve;n lại tr&ecirc;n m&agrave;n h&igrave;nh. Nếu c&oacute; thể, bạn sẽ được y&ecirc;u cầu đăng nhập v&agrave;o t&agrave;i khoản cửa h&agrave;ng điện tử như Steam hoặc Origin để nhận game của m&igrave;nh</p>\r\n\r\n<p>Lưu &yacute;: Code game chỉ sử dụng được 1 lần k&iacute;ch hoạt cho mỗi sản phẩm tương ứng.</p>', 'https://file.hstatic.net/1000162654/file/nvidia-rtx-2060_grande.jpg', '2019-03-17 14:24:47', '2019-03-17 14:24:47'),
(44, 2, 'WESTERN DIGITAL TRÌNH LÀNG Ổ CỨNG SSD THẾ HỆ MỚI', 'western-digital-trinh-lang-o-cung-ssd-the-he-moi', 'Western Digital chắc hẳn đã quá quen thuộc với các anh em, từ lâu WD nổi tiếng là 1 trong những hãng sản xuất ổ cứng hàng đầu thế giới...', '<p>Western Digital chắc hẳn đ&atilde; qu&aacute; quen thuộc với c&aacute;c anh em, từ l&acirc;u WD nổi tiếng l&agrave; 1 trong những h&atilde;ng sản xuất ổ cứng h&agrave;ng đầu thế giới với độ bền cao, chất lượng ổn định n&ecirc;n T&acirc;n Doanh muốn giới thiệu với c&aacute;c anh em d&ograve;ng SSD M.2 NVMe Black mới cao cấp của nh&agrave; WD.</p>\r\n\r\n<p><a href=\"https://tandoanh.vn/products/western-digital-black-m-2-2280-250gb-pcie-nvme-ssd-2018\">Western Digital Black M.2 2280 <strong>250GB</strong> &ndash; PCI NVMe:&nbsp; <strong>1.700.000đ</strong></a></p>\r\n\r\n<p><a href=\"https://tandoanh.vn/products/western-digital-black-m-2-2280-500gb-pcie-nvme-ssd-2018\">Western Digital Black M.2 2280 <strong>500GB</strong> &ndash; PCI NVMe: <strong>3.250.000đ</strong></a></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/wd-2019_grande.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/wd-2019-1_grande.jpg\" /></p>\r\n\r\n<p><em>Sản phẩm hiện đang giảm gi&aacute; khuyến m&atilde;i, c&ugrave;ng với những ưu điểm vượt trội.</em></p>\r\n\r\n<p><strong>TỐC ĐỘC L&Ecirc;N ĐẾN 3400MB/S.</strong></p>\r\n\r\n<p>► &Aacute;p dụng c&ocirc;ng nghệ 3D NAND mới, c&ugrave;ng với Controller Western Digital gi&uacute;p đảm bảo hiệu năng ổn định, tiết kiệm điện năng v&agrave; tăng độ bền của ổ cứng.</p>\r\n\r\n<p>► &nbsp;Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 5 năm 1 đổi 1.</p>\r\n\r\n<p>► Dung lượng 250Gb: Tốc độ đọc 3000Mb/s, tốc độ ghi 1600MB/s, độ bền l&ecirc;n đến 200TBW.</p>\r\n\r\n<p>► Dung lượng 500GB: Tốc độ đọc 3400MB/s, tốc độ ghi 2500MB/s, độ bền l&ecirc;n đến 300TBW.</p>\r\n\r\n<p>► Tốc độ nhanh hơn 60% so với ổ cứng SSD WD Black NVMe thế hệ thứ nhất.</p>\r\n\r\n<p>►&nbsp;Hỗ trợ phần mềm quản l&yacute; ổ cứng miễn ph&iacute; WD SSD Dashboard, download trực tiếp tr&ecirc;n website: <a href=\"https://support.wdc.com/downloads.aspx?p=279\">https://support.wdc.com/downloads.aspx?p=279</a></p>\r\n\r\n<p>Sỡ hữu ngay 1 chiếc SSD để boot windows nhanh, khắc phục t&igrave;nh trạng HDD hay bị full disk 100% v&agrave; chạy c&aacute;c ứng dụng mang lại hiệu quả cực lớn l&agrave; v&ocirc; c&ugrave;ng hợp l&yacute;. Thời điểm SSD thay thế HDD đ&atilde; tới.</p>', 'https://file.hstatic.net/1000162654/file/wd-2019-1_grande.jpg', '2019-03-17 14:28:50', '2019-03-17 14:28:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name_ascii` varchar(100) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `collection_id`, `name`, `name_ascii`, `description`, `image`, `price`, `updated_at`, `created_at`) VALUES
(1, 8, 'Intel Pentium Gold G5500 / 4M / 3.8GHZ / 2 Nhân 4 Luồng - Socket 1151v2 Coffee Lake', 'intel-pentium-gold-g5500-4m-3-8ghz-2-nhan-4-luong-socket-1151v2-coffee-lake', '<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Model:&nbsp;&nbsp;</strong>Intel Pentium Gold G5500 / 4M / 3.8GHZ / 2 nh&acirc;n 4 luồng - Socket 1151v2 Coffee Lake</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>T&igrave;nh trạng:</strong>&nbsp; mới 100%</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Bảo h&agrave;nh:</strong>&nbsp;36 Tháng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Xuất xứ:&nbsp;</strong>Ch&iacute;nh h&atilde;ng</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;Thương hiệu:</strong>&nbsp;Intel</p>\r\n\r\n<p>Gi&aacute; b&aacute;n đ&atilde; bao gồm VAT</p>\r\n\r\n<table border=\"4\" cellspacing=\"2\" style=\"height:423px; width:583px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>&nbsp;Socket</strong></td>\r\n			<td>\r\n			<p>&nbsp;&nbsp;<strong>LGA1151v2</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Bộ nhớ đệm</strong></td>\r\n			<td>&nbsp; 4MB</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Thuật in</strong></td>\r\n			<td>&nbsp; 14 nm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Số nh&acirc;n (Cores)</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>2</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Số luồng (Threads)</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>4</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Xung cơ bản</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>3.8GHz</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Điện ti&ecirc;u thụ</strong></td>\r\n			<td>&nbsp;&nbsp;<strong>54W</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;RAM tối đa</strong></td>\r\n			<td>&nbsp; 64GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Loại RAM</strong></td>\r\n			<td>&nbsp; DDR4</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp;Card Onboard&nbsp;</strong></td>\r\n			<td>&nbsp;&nbsp;Intel&reg;&nbsp;<strong>UHD Graphics 630</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'http://product.hstatic.net/1000162654/product/upload_7b4485b5cb174c3c945edf881b017c60_master.jpg', 2400000, '2019-03-17 15:33:12', '2019-03-17 15:33:12'),
(2, 5, 'MSI RTX 2070 VENTUS 8GB GDR6', 'msi-rtx-2070-ventus-8gb-gdr6', '<p><strong>Model:</strong>&nbsp;MSI RTX 2070 VENTUS 8GB GDR6</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />T&igrave;nh trạng:</strong>&nbsp;mới 100%</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />Bảo h&agrave;nh:</strong>&nbsp; 36 th&aacute;ng&nbsp;</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Xuất xứ:</strong>&nbsp;Ch&iacute;nh h&atilde;ng</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />Thương hiệu:</strong>&nbsp;MSI</p>\r\n\r\n<p>Gi&aacute; b&aacute;n đ&atilde; bao gồm VAT</p>\r\n\r\n<p><strong>Th&ocirc;ng số</strong></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/xxx.png\" /></p>\r\n\r\n<table style=\"height:1061px; width:655px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>MODEL NAME</td>\r\n			<td>\r\n			<p>GeForce RTX&trade; 2070 VENTUS 8G</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GRAPHICS PROCESSING UNIT</td>\r\n			<td>\r\n			<p>NVIDIA&reg;&nbsp;GeForce RTX&trade; 2070</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>INTERFACE</td>\r\n			<td>\r\n			<p>PCI Express x16 3.0</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CORES</td>\r\n			<td>\r\n			<p>2304 Units</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CORE CLOCKS</td>\r\n			<td>\r\n			<p>Boost: 1620 MHz</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MEMORY SPEED</td>\r\n			<td>\r\n			<p>14 Gbps</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MEMORY</td>\r\n			<td>\r\n			<p>8GB GDDR6</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MEMORY BUS</td>\r\n			<td>\r\n			<p>256-bit</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>OUTPUT</td>\r\n			<td>\r\n			<p>DisplayPort x 3 (v1.4) / HDMI 2.0b x 1</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HDCP SUPPORT</td>\r\n			<td>\r\n			<p>2.2</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>POWER CONSUMPTION</td>\r\n			<td>\r\n			<p>175 W</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>POWER CONNECTORS</td>\r\n			<td>\r\n			<p>8-pin x 1</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RECOMMENDED PSU</td>\r\n			<td>\r\n			<p>550 W</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CARD DIMENSION(MM)</td>\r\n			<td>\r\n			<p>226 x 128 x 41 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>WEIGHT (CARD / PACKAGE)</td>\r\n			<td>\r\n			<p>764 g / 1193 g</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DIRECTX VERSION SUPPORT</td>\r\n			<td>\r\n			<p>12 API</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>OPENGL VERSION SUPPORT</td>\r\n			<td>\r\n			<p>4.5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>MAXIMUM DISPLAYS</td>\r\n			<td>\r\n			<p>4</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>VR READY</td>\r\n			<td>\r\n			<p>Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>G-SYNC&trade; TECHNOLOGY</td>\r\n			<td>\r\n			<p>Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ADAPTIVE VERTICAL SYNC</td>\r\n			<td>\r\n			<p>Y</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>DIGITAL MAXIMUM RESOLUTION</td>\r\n			<td>\r\n			<p>7680x4320</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'https://file.hstatic.net/1000162654/file/xxx.png', 14250000, '2019-03-17 15:36:12', '2019-03-17 15:36:12'),
(3, 5, 'ASUS RTX 2060 STRIX A6G 6GB GDR6', 'asus-rtx-2060-strix-a6g-6gb-gdr6', '<p><strong>Model: ASUS RTX 2060 STRIX A6G 6GB GDR6</strong></p>\r\n\r\n<h1>ROG-STRIX-RTX2060-A6G-GAMING</h1>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />T&igrave;nh trạng:</strong>&nbsp;mới 100%</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />Bảo h&agrave;nh:</strong>&nbsp; 36 th&aacute;ng&nbsp;</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Xuất xứ:</strong>&nbsp;Ch&iacute;nh h&atilde;ng</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />Thương hiệu: ASUS</strong></p>\r\n\r\n<p><strong>Tặng chuột gaming Cougar 500M White</strong></p>\r\n\r\n<p><strong>V&agrave; l&oacute;t chuột Sharkoon Drakonia</strong></p>\r\n\r\n<ul>\r\n	<li>Graphics Engine\r\n	<p>NVIDIA&reg;&nbsp;GeForce RTX&trade; 2060</p>\r\n	</li>\r\n	<li>OpenGL\r\n	<p>OpenGL&reg;4.5</p>\r\n	</li>\r\n	<li>Video Memory\r\n	<p>GDDR6 6GB</p>\r\n	</li>\r\n	<li>Memory Interface\r\n	<p>192-bit</p>\r\n	</li>\r\n	<li>Resolution\r\n	<p>Digital Max Resolution:7680x4320</p>\r\n	</li>\r\n	<li>Interface\r\n	<p>HDMI Output : Yes x 2 (Native) (HDMI 2.0b)<br />\r\n	Display Port : Yes x 2 (Native) (DisplayPort 1.4)<br />\r\n	HDCP Support : Yes (2.2)</p>\r\n	</li>\r\n	<li>Maximum Display Support\r\n	<p>4</p>\r\n	</li>\r\n	<li>NVlink/ Crossfire Support\r\n	<p>No</p>\r\n	</li>\r\n	<li>Recommended PSU\r\n	<p>500W</p>\r\n	</li>\r\n	<li>Accessories\r\n	<p>1 x ROG Velcro Hook &amp; Loop<br />\r\n	1 x CD<br />\r\n	1 x Quick Guide</p>\r\n	</li>\r\n	<li>Software\r\n	<p>ASUS GPU Tweak II &amp; Driver</p>\r\n	</li>\r\n	<li>Dimensions\r\n	<p>11.81 &quot; x 5.2 &quot; x 1.97 &quot; Inch<br />\r\n	30 x 13.2 x5 Centimeter</p>\r\n	</li>\r\n</ul>', 'http://product.hstatic.net/1000162654/product/t9ex7psju3eun2v4_setting_000_1_90_end_1000__1__master.png', 11360000, '2019-03-17 15:36:58', '2019-03-17 15:36:58'),
(4, 4, 'Gigabyte X299 AORUS MASTER- Socket 2066', 'gigabyte-x299-aorus-master-socket-2066', '<p><strong>Model:</strong>&nbsp;Gigabyte X299 AORUS MASTER- Socket 2066</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />T&igrave;nh trạng:</strong>&nbsp;mới 100%</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />Bảo h&agrave;nh:</strong>&nbsp;36 th&aacute;ng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Xuất xứ:</strong>&nbsp;Ch&iacute;nh h&atilde;ng</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />Thương hiệu:</strong>&nbsp;<strong>GIGABYTE AORUS</strong></p>\r\n\r\n<p>Gi&aacute; b&aacute;n đ&atilde; bao gồm VAT</p>\r\n\r\n<p>&nbsp;<strong>Th&ocirc;ng số:</strong></p>\r\n\r\n<p>Intel X299 AORUS Motherboard with 12 Phases Digital VRM, Fins-Array Heatsink with 6mm heatpipe, 2.5GbE LAN and Intel LAN, 802.11ac Wireless with High Gain Antenna, Triple M.2 with Thermal Guards, ESS SABRE 9218 DAC, Front &amp; Rear USB 3.1 Gen 2 Type-C</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Supports 9th Gen Intel&reg;&nbsp;Core&trade; X Series Processors</li>\r\n	<li>Quad Channel Non-ECC Unbuffered DDR4, 8 DIMMs</li>\r\n	<li>Intel&reg;&nbsp;Optane&trade; Memory Ready</li>\r\n	<li>12 Phases Digital VRM Solution with Smart Power Stage</li>\r\n	<li>Advanced Thermal Design with Fins-Array and 6mm Heatpipe</li>\r\n	<li>Realtek 2.5GbE onboard and Intel&reg;&nbsp;Gigabit LAN with cFosSpeed</li>\r\n	<li>Onboard Intel 802.11ac 2x2 Wi-Fi &amp; AORUS Antenna</li>\r\n	<li>130dB SNR AMP-UP Audio with High-End ESS SABRE 9218 DAC, ALC1220 and WIMA audio capacitors</li>\r\n	<li>USB TurboCharger for mobile device faster charging support</li>\r\n	<li>RGB FUSION 2.0 with Multi-Zone RGB LED Light Show design, support Addressable LED &amp; RGB LED strips</li>\r\n	<li>Smart Fan 5 features Multiple Temperature Sensors and Hybrid Fan Headers with FAN STOP</li>\r\n	<li>Front USB 3.1 Gen 2 Type-C&trade; Header</li>\r\n	<li>Triple Ultra-Fast M.2 with PCIe Gen3 x4 interface with Triple Thermal Guards</li>\r\n	<li>USB DAC-UP 2 with Adjustable Voltage</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>CPU</p>\r\n\r\n	<ol>\r\n		<li>Support for Intel&reg;&nbsp;Core&trade; X series 44-lane/28-lane processors (6-core or above) in the LGA2066 package</li>\r\n		<li>L3 cache varies with CPU</li>\r\n	</ol>\r\n	(Please refer &quot;CPU Support List&quot; for more information.)</li>\r\n	<li>\r\n	<p>Chipset</p>\r\n\r\n	<ol>\r\n		<li>Intel&reg;&nbsp;X299 Express Chipset</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Memory</p>\r\n\r\n	<ol>\r\n		<li>8 x DDR4 DIMM sockets supporting up to 128 GB of system memory</li>\r\n		<li>4 channel memory architecture</li>\r\n		<li>Support for DDR4 4000(O.C.) / 3866(O.C.) / 3800(O.C.) / 3733(O.C.) / 3666(O.C.) / 3600(O.C.) / 3466(O.C.) / 3400(O.C.) / 3333(O.C.) / 3300(O.C.) / 3200(O.C.) / 3000(O.C.) / 2800(O.C.) / 2666(O.C.) / 2400 / 2133 MHz memory modules</li>\r\n		<li>Support for non-ECC Un-buffered DIMM</li>\r\n		<li>Support for Extreme Memory Profile (XMP) memory modules</li>\r\n	</ol>\r\n	(Please refer &quot;Memory Support List&quot; for more information.)</li>\r\n	<li>\r\n	<p>Audio</p>\r\n\r\n	<ol>\r\n		<li>Realtek&reg;&nbsp;ALC1220-VB codec</li>\r\n		<li>ESS SABRE9218 DAC chip<br />\r\n		* The front panel line out jack supports DSD audio.</li>\r\n		<li>High Definition Audio</li>\r\n		<li>2/4/5.1/7.1-channel</li>\r\n		<li>Support for S/PDIF Out</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>LAN</p>\r\n\r\n	<ol>\r\n		<li>1 x Realtek&reg;&nbsp;GbE LAN chip (10/100/1000/2500 Mbit) (LAN1)</li>\r\n		<li>1 x Intel&reg;&nbsp;GbE LAN (10/100/1000 Mbit) (LAN2)</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Wireless Communication module</p>\r\n\r\n	<ol>\r\n		<li>Wi-Fi 802.11 a/b/g/n/ac, supporting 2.4/5 GHz Dual-Band</li>\r\n		<li>BLUETOOTH 4.2, 4.1, BLE, 4.0, 3.0, 2.1+EDR</li>\r\n		<li>Support for 11ac wireless standard and up to 867 Mbps data rate<br />\r\n		* Actual data rate may vary depending on environment and equipment.</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Expansion Slots</p>\r\n\r\n	<ol>\r\n		<li>2 x PCI Express x16 slots, running at x16 (PCIEX16_1, PCIEX16_2)</li>\r\n		<li>2 x PCI Express x16 slots, running at x8 (PCIEX8_1, PCIEX8_2)<br />\r\n		(All of the PCI Express slots conform to PCI Express 3.0 standard.)<br />\r\n		* Refer to &quot;1-6 Setting up AMD CrossFire&trade;/NVIDIA&reg;&nbsp;SLI&trade; Configuration,&quot; for the installation notices for the PCI Express x16 slots.</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Storage Interface</p>\r\n	CPU:\r\n\r\n	<ol>\r\n		<li>1 x M.2 connector (Socket 3, M key, type 2260/2280/22110 PCIe x4/x2 SSD support) (M2M)</li>\r\n	</ol>\r\n	Chipset:\r\n\r\n	<ol>\r\n		<li>1 x M.2 connector (Socket 3, M key, type 2242/2260/2280/22110 SATA and PCIe x4/x2 SSD support) (M2P)</li>\r\n		<li>1 x M.2 connector (Socket 3, M key, type 2242/2260/2280/22110 SATA and PCIe x4/x2 SSD support) (M2Q)</li>\r\n		<li>8 x SATA 6Gb/s connectors</li>\r\n		<li>Support for RAID 0, RAID 1, RAID 5, and RAID 10<br />\r\n		* The M2M connector must work with an Intel&reg;&nbsp;VROC Upgrade Key to support RAID configuration.<br />\r\n		* Refer to &quot;1-9 Internal Connectors,&quot; for the installation notices for the M.2 and SATA connectors.</li>\r\n	</ol>\r\n	Intel&reg;&nbsp;Optane&trade; Memory Ready</li>\r\n	<li>\r\n	<p>Multi-Graphics Technology</p>\r\n\r\n	<ol>\r\n		<li>Support for NVIDIA&reg;&nbsp;Quad-GPU SLI&trade; and 4-Way/3-Way/2-Way NVIDIA&reg;&nbsp;SLI&trade; technologies</li>\r\n		<li>Support for AMD Quad-GPU CrossFire&trade; and 4-Way/3-Way/2-Way AMD CrossFire&trade; technologies</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>USB</p>\r\n	Chipset+2 ASMedia&reg;&nbsp;USB 3.1 Gen 2 Controllers:\r\n\r\n	<ol>\r\n		<li>1 x USB Type-C&trade; port with USB 3.1 Gen 2 support, available through the internal USB header</li>\r\n		<li>1 x USB Type-C&trade; port on the back panel, with USB 3.1 Gen 2 support</li>\r\n		<li>1 x USB 3.1 Gen 2 Type-A ports (red) on the back panel</li>\r\n	</ol>\r\n	Chipset+USB 2.0 Hub:\r\n\r\n	<ol>\r\n		<li>4 x USB 2.0/1.1 ports available through the internal USB headers</li>\r\n	</ol>\r\n	Chipset:\r\n\r\n	<ol>\r\n		<li>10 x USB 3.1 Gen 1 ports (6 ports on the back panel, 4 ports available through the internal USB headers)</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Internal I/O Connectors</p>\r\n\r\n	<ol>\r\n		<li>1 x 24-pin ATX main power connector</li>\r\n		<li>2 x 8-pin ATX 12V power connectors</li>\r\n		<li>1 x VGA_PW power connector</li>\r\n		<li>1 x CPU fan header</li>\r\n		<li>1 x water cooling CPU fan header</li>\r\n		<li>4 x system fan headers</li>\r\n		<li>2 x system fan/water cooling pump headers</li>\r\n		<li>2 x addressable LED strip headers</li>\r\n		<li>2 x addressable LED strip power select jumpers</li>\r\n		<li>2 x RGB LED strip headers</li>\r\n		<li>3 x M.2 Socket 3 connectors</li>\r\n		<li>8 x SATA 6Gb/s connectors</li>\r\n		<li>1 x Intel&reg;&nbsp;VROC Upgrade Key header</li>\r\n		<li>1 x front panel header</li>\r\n		<li>1 x front panel audio header</li>\r\n		<li>1 x S/PDIF Out header</li>\r\n		<li>1 x USB Type-C&trade; header, with USB 3.1 Gen 2 support</li>\r\n		<li>2 x USB 3.1 Gen 1 headers</li>\r\n		<li>2 x USB 2.0/1.1 headers</li>\r\n		<li>1 x Thunderbolt&trade; add-in card connector</li>\r\n		<li>1 x Trusted Platform Module (TPM) header (2x6 pin, for the GC-TPM2.0_S module only)</li>\r\n		<li>1 x reset button</li>\r\n		<li>1 x Clear CMOS jumper</li>\r\n		<li>2 x temperature sensor headers</li>\r\n		<li>2 x BIOS switches</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Back Panel Connectors</p>\r\n\r\n	<ol>\r\n		<li>1 x power button</li>\r\n		<li>1 x Clear CMOS button</li>\r\n		<li>1 x USB Type-C&trade; port, with USB 3.1 Gen 2 support</li>\r\n		<li>1 x USB 3.1 Gen 2 Type-A port (red)</li>\r\n		<li>6 x USB 3.1 Gen 1 ports</li>\r\n		<li>2 x RJ-45 ports</li>\r\n		<li>2 x SMA antenna connectors (2T2R)</li>\r\n		<li>1 x optical S/PDIF Out connector</li>\r\n		<li>5 x audio jacks</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>I/O Controller</p>\r\n\r\n	<ol>\r\n		<li>iTE&reg;&nbsp;I/O Controller Chip</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>H/W Monitoring</p>\r\n\r\n	<ol>\r\n		<li>Voltage detection</li>\r\n		<li>Temperature detection</li>\r\n		<li>Fan speed detection</li>\r\n		<li>Water cooling flow rate detection</li>\r\n		<li>Overheating warning</li>\r\n		<li>Fan fail warning</li>\r\n		<li>Fan speed control<br />\r\n		* Whether the fan (pump) speed control function is supported will depend on the fan (pump) you install.</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>BIOS</p>\r\n\r\n	<ol>\r\n		<li>2 x 128 Mbit flash</li>\r\n		<li>Use of licensed AMI UEFI BIOS</li>\r\n		<li>Support for DualBIOS&trade;</li>\r\n		<li>Support for Q-Flash Plus<br />\r\n		* The USB flash drive used must be a USB 2.0 flash drive.</li>\r\n		<li>PnP 1.0a, DMI 2.7, WfM 2.0, SM BIOS 2.7, ACPI 5.0</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Unique Features</p>\r\n\r\n	<ol>\r\n		<li>Support for APP Center<br />\r\n		* Available applications in APP Center may vary by motherboard model. Supported functions of each application may also vary depending on motherboard specifications.<br />\r\n		3D OSD<br />\r\n		@BIOS<br />\r\n		AutoGreen<br />\r\n		Cloud Station<br />\r\n		EasyTune<br />\r\n		Easy RAID<br />\r\n		Fast Boot<br />\r\n		Game Boost<br />\r\n		Platform Power Management<br />\r\n		RGB Fusion<br />\r\n		Smart Backup<br />\r\n		Smart Keyboard<br />\r\n		Smart TimeLock<br />\r\n		Smart HUD<br />\r\n		Smart Survey<br />\r\n		System Information Viewer<br />\r\n		USB Blocker<br />\r\n		USB TurboCharger</li>\r\n		<li>Support for Q-Flash</li>\r\n		<li>Support for Xpress Install</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Bundled Software</p>\r\n\r\n	<ol>\r\n		<li>Norton&reg;&nbsp;Internet Security (OEM version)</li>\r\n		<li>XSplit Gamecaster + Broadcaster (12 months license)</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Operating System</p>\r\n\r\n	<ol>\r\n		<li>Support for Windows 10 64-bit</li>\r\n	</ol>\r\n	</li>\r\n	<li>\r\n	<p>Form Factor</p>\r\n\r\n	<ol>\r\n		<li>E-ATX Form Factor; 30.5cm x 26.9cm</li>\r\n	</ol>\r\n	</li>\r\n</ul>', 'http://product.hstatic.net/1000162654/product/2019013017275722716594aa62ae2c1221abb50769203aa8_big_master.png', 9150000, '2019-03-17 15:37:55', '2019-03-17 15:37:55'),
(5, 6, 'Corsair MP510 M.2 2280 480gb - PCIe NVMe SSD', 'corsair-mp510-m-2-2280-480gb-pcie-nvme-ssd', '<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Model:</strong>&nbsp;Corsair MP510 M.2 2280 480gb - PCIe NVMe SSD</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>T&igrave;nh trạng:</strong>&nbsp;Mới 100%</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Bảo h&agrave;nh:</strong>&nbsp;36 th&aacute;ng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" /><strong>Xuất xứ:</strong>&nbsp;Ch&iacute;nh h&atilde;ng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" /><strong>Thương hiệu:</strong>&nbsp;<strong>Corsair</strong></p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Th&ocirc;ng số:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>model</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>MP510 480gb</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>SSD Unformatted Capacity</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>480 GB</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>SSD Interface</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>PCIe Gen 3.0 x4</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>SSD Max Sequential Read CDM</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Up to 3,100MB/s</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>SSD Max Sequential Write CDM</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Up to 1,050MB/s</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Max Random Write QD32 IOMeter</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Up to 240K IOPS</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Max Random Read QD32 IOMeter</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Up to 180K IOPS</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Form Factor</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>M.2 2280</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Dimension</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>80mm x 22mm x 3mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Application Consumer</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>Client</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>NAND Technology</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>3D TLC NAND</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Endurance</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>400 TBW</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>MTBF</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>1,800,000 Hours</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Encryption</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>AES 256-bit Encryption</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Storage Temperature</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>-40&deg;C to +85&deg;C</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>SSD Operating Temperature</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>0&deg;C to +70&deg;C</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'http://product.hstatic.net/1000162654/product/-cssd-f480gbmp510-gallery-mp510-04_master.png', 2550000, '2019-03-17 15:39:05', '2019-03-17 15:39:05'),
(6, 8, 'Intel Core I5-8400 Processor 9M Cache, Up To 4.00 GHz - Socket 1151v2 Coffee Lake', 'intel-core-i5-8400-processor-9m-cache,-up-to-4-00-ghz-socket-1151v2-coffee-lake', '<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Model:&nbsp;&nbsp;</strong>Intel Core i5-8400 Processor 9M Cache, up to 4.00 GHz - Socket 1151v2 Coffee Lake</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>T&igrave;nh trạng:</strong>&nbsp; mới 100%</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Bảo h&agrave;nh:</strong>&nbsp;36 Tháng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Xuất xứ:&nbsp;</strong>Ch&iacute;nh h&atilde;ng</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;Thương hiệu:</strong>&nbsp;Intel</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Th&ocirc;ng số:</strong></p>\r\n\r\n<h2>Essentials</h2>\r\n\r\n<ul>\r\n	<li>Product Collection<a href=\"https://ark.intel.com/products/series/122597/8th-Generation-Intel-Core-i5-Processors\">8th Generation Intel&reg; Core&trade; i5 Processors</a></li>\r\n	<li>Code Name<a href=\"https://ark.intel.com/products/codename/97787/-\">Products formerly Coffee Lake</a></li>\r\n	<li>Vertical SegmentDesktop</li>\r\n	<li>Processor Numberi5-8400</li>\r\n	<li>StatusAnnounced</li>\r\n	<li>Launch DateQ4&#39;17</li>\r\n	<li>Lithography14 nm</li>\r\n	<li>Recommended Customer PriceN/A</li>\r\n</ul>\r\n\r\n<h2>Performance</h2>\r\n\r\n<ul>\r\n	<li># of Cores6</li>\r\n	<li># of Threads6</li>\r\n	<li>Processor Base Frequency2.80 GHz</li>\r\n	<li>Max Turbo Frequency4.00 GHz</li>\r\n	<li>Cache9 MB</li>\r\n	<li>Bus Speed8 GT/s DMI3</li>\r\n	<li># of QPI Links0</li>\r\n	<li>TDP65 W</li>\r\n</ul>\r\n\r\n<h2>Supplemental Information</h2>\r\n\r\n<ul>\r\n	<li>Embedded Options AvailableNo</li>\r\n	<li>Conflict FreeYes</li>\r\n	<li>Datasheet<a href=\"https://www.intel.com/content/www/us/en/processors/core/core-technical-resources.html\">View now</a></li>\r\n</ul>\r\n\r\n<p><a href=\"http://www.intel.com/content/www/us/en/corporate-responsibility/conflict-free-minerals.html\">Learn how Intel is pursuing conflict-free technology.</a></p>\r\n\r\n<h2>Memory Specifications</h2>\r\n\r\n<ul>\r\n	<li>Max Memory Size (dependent on memory type)64 GB</li>\r\n	<li>Memory TypesDDR4-2666</li>\r\n	<li>Max # of Memory Channels2</li>\r\n	<li>ECC Memory Supported&nbsp;<small>&Dagger;</small>No</li>\r\n</ul>\r\n\r\n<h2>Graphics Specifications</h2>\r\n\r\n<ul>\r\n	<li>Processor Graphics&nbsp;<small>&Dagger;</small>Intel&reg; UHD Graphics 630</li>\r\n	<li>Graphics Base Frequency350 MHz</li>\r\n	<li>Graphics Max Dynamic Frequency1.05 GHz</li>\r\n	<li>Graphics Video Max Memory64 GB</li>\r\n	<li>Execution Units23</li>\r\n	<li>4K SupportYes, at 60Hz</li>\r\n	<li>Max Resolution (HDMI 1.4)&Dagger;4096x2304@24Hz</li>\r\n	<li>Max Resolution (DP)&Dagger;4096x2304@60Hz</li>\r\n	<li>Max Resolution (eDP - Integrated Flat Panel)&Dagger;4096x2304@60Hz</li>\r\n	<li>DirectX* Support12</li>\r\n	<li>OpenGL* Support4.4</li>\r\n	<li>Intel&reg; Quick Sync VideoYes</li>\r\n	<li>Intel&reg; InTru&trade; 3D TechnologyYes</li>\r\n	<li>Intel&reg; Clear Video HD TechnologyYes</li>\r\n	<li>Intel&reg; Clear Video TechnologyYes</li>\r\n	<li># of Displays Supported&nbsp;<small>&Dagger;</small>3</li>\r\n	<li>Device ID0x3E92</li>\r\n</ul>\r\n\r\n<h2>Expansion Options</h2>\r\n\r\n<ul>\r\n	<li>Scalability1S Only</li>\r\n	<li>PCI Express Revision3.0</li>\r\n	<li>PCI Express Configurations&nbsp;<small>&Dagger;</small>1x16 or 2x8 or 1x8+2x4</li>\r\n	<li>Max # of PCI Express Lanes16</li>\r\n</ul>\r\n\r\n<h2>Package Specifications</h2>\r\n\r\n<ul>\r\n	<li>Max CPU Configuration1</li>\r\n	<li>Thermal Solution SpecificationPCG 2015C (65W)</li>\r\n	<li>TJUNCTION100&deg;C</li>\r\n	<li>Package Size37.5mm x 37.5mm</li>\r\n	<li>Low Halogen Options AvailableSee MDDS</li>\r\n</ul>\r\n\r\n<h2>Advanced Technologies</h2>\r\n\r\n<ul>\r\n	<li>Intel&reg; Optane&trade; Memory Supported&nbsp;<small>&Dagger;</small>Yes</li>\r\n	<li>Intel&reg; Turbo Boost Technology&nbsp;<small>&Dagger;</small>2.0</li>\r\n	<li>Intel&reg; vPro&trade; Technology&nbsp;<small>&Dagger;</small>No</li>\r\n	<li>Intel&reg; Hyper-Threading Technology&nbsp;<small>&Dagger;</small>No</li>\r\n	<li>Intel&reg; Virtualization Technology (VT-x)&nbsp;<small>&Dagger;</small>Yes</li>\r\n	<li>Intel&reg; Virtualization Technology for Directed I/O (VT-d)<small>&Dagger;</small>Yes</li>\r\n	<li>Intel&reg; VT-x with Extended Page Tables (EPT)&nbsp;<small>&Dagger;</small>Yes</li>\r\n	<li>Intel&reg; TSX-NINo</li>\r\n	<li>Intel&reg; 64&nbsp;<small>&Dagger;</small>Yes</li>\r\n	<li>Instruction Set64-bit</li>\r\n	<li>Instruction Set ExtensionsSSE4.1/4.2, AVX 2.0</li>\r\n	<li>Idle StatesYes</li>\r\n	<li>Enhanced Intel SpeedStep&reg; TechnologyYes</li>\r\n	<li>Thermal Monitoring TechnologiesYes</li>\r\n	<li>Intel&reg; Identity Protection Technology&nbsp;<small>&Dagger;</small>Yes</li>\r\n	<li>Intel&reg; Stable Image Platform Program (SIPP)No</li>\r\n</ul>\r\n\r\n<h2>Security &amp; Reliability</h2>\r\n\r\n<ul>\r\n	<li>Intel&reg; AES New InstructionsYes</li>\r\n	<li>Secure KeyYes</li>\r\n	<li>Intel&reg; Software Guard Extensions (Intel&reg; SGX)Yes</li>\r\n	<li>Intel&reg; Memory Protection Extensions (Intel&reg; MPX)Yes</li>\r\n	<li>Intel&reg; OS GuardYes</li>\r\n	<li>Intel&reg; Trusted Execution Technology&nbsp;<small>&Dagger;</small>No</li>\r\n	<li>Execute Disable Bit&nbsp;<small>&Dagger;</small>Yes</li>\r\n	<li>Intel&reg; Boot GuardYes</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>', 'http://product.hstatic.net/1000162654/product/5883_master.jpg', 5100000, '2019-03-17 15:41:49', '2019-03-17 15:41:49'),
(7, 9, 'Anda Seat Assassin King V2 Black/Red - Full PVC Leather 4D Armrest Gaming Chair', 'anda-seat-assassin-king-v2-black-red-full-pvc-leather-4d-armrest-gaming-chair', '<p><strong>Model:</strong>&nbsp;Anda Seat Assassin King V2 Black/Red - Full PVC Leather 4D Armrest Gaming Chair</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>T&igrave;nh trạng:</strong>&nbsp;Mới 100%</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Bảo h&agrave;nh:</strong>&nbsp;24 Th&aacute;ng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Xuất xứ:</strong>&nbsp;Ch&iacute;nh h&atilde;ng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Thương hiệu:</strong>&nbsp;Anda Seat</p>\r\n\r\n<p><strong>Th&ocirc;ng số:</strong></p>\r\n\r\n<p><strong>&nbsp;Kh&aacute;ch h&agrave;ng c&oacute; thể lựa chọn 1 trong 3 g&oacute;i khuyến m&atilde;i khi mua Ghế Anda Seat Assassin King Series bất k&igrave;:&nbsp;</strong></p>\r\n\r\n<p><strong>1/ G&oacute;i qu&agrave; 1 :</strong></p>\r\n\r\n<p>+ 1 Mouse Cougar 500M trắng<br />\r\n+ 1 pad Inifnity Arcana RGB&nbsp;<br />\r\n+ 1 quạt gi&oacute; ki&ecirc;m sạc dự ph&ograve;ng</p>\r\n\r\n<p><strong>2/ G&oacute;i qu&agrave; 2 :</strong></p>\r\n\r\n<p>+ Case Infinity Gems hoặc Stone .&nbsp;<br />\r\n+ 1 pad Inifnity Arcana RGB&nbsp;<br />\r\n+ 1 quạt gi&oacute; ki&ecirc;m sạc dự ph&ograve;ng</p>\r\n\r\n<p><strong>3/ G&oacute;i qu&agrave; 3:</strong></p>\r\n\r\n<p>+ Tặng k&egrave;m tản nước&nbsp;ID Cooling AURAFLOW 240 - Extreme RGB trị gi&aacute; 1.990.000 Vnđ</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/a56b7a3f049f658a62030900c087d4f70535d44e4c1353e_pimgpsh_fullsize_distr_1024x1024.jpg\" /></p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000162654/file/office-chairjpg-1531840013067__1__1024x1024.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model Name</td>\r\n			<td>Assassin King Series</td>\r\n			<td>Model Number</td>\r\n			<td>AD04 XL</td>\r\n			<td>Maximum Seat Depth</td>\r\n			<td>23.03&#39;&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chair Type</td>\r\n			<td>Gaming Chair</td>\r\n			<td>Chair/Seat Back Style</td>\r\n			<td>High Back</td>\r\n			<td>Minimum Seat Depth</td>\r\n			<td>20.08&#39;&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Foam Type</td>\r\n			<td>High Density Mould Shaping Foam</td>\r\n			<td>Adjustable Back Angle</td>\r\n			<td>160&deg;</td>\r\n			<td>Maximum Seat Width</td>\r\n			<td>21.65&#39;&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Foam Density</td>\r\n			<td>60-65 Kg/M&sup3;</td>\r\n			<td>Adjustable Lumbar Cushion</td>\r\n			<td>Yes</td>\r\n			<td>Minimum Seat Width</td>\r\n			<td>16.54&#39;&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Frame Construction</td>\r\n			<td>Metal</td>\r\n			<td>Adjustable Headrest&nbsp;</td>\r\n			<td>Yes</td>\r\n			<td>Maximum Arm Height</td>\r\n			<td>15.63&quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chair Cover Material</td>\r\n			<td>PVC</td>\r\n			<td>Base Type&nbsp;</td>\r\n			<td>5-Star Aluminum Base</td>\r\n			<td>Minimum Arm Height</td>\r\n			<td>12.76&quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Adjustable Armrests</td>\r\n			<td>3D</td>\r\n			<td>Caster Size &amp; Material</td>\r\n			<td>2.4&quot; Caster/PU</td>\r\n			<td>Backrest Height</td>\r\n			<td>34.17&#39;&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Armrest Pad Size</td>\r\n			<td>10.55&quot;L X 3.76&quot;W</td>\r\n			<td>Assembly Required</td>\r\n			<td>Yes</td>\r\n			<td>Backrest Shoulder Width</td>\r\n			<td>23.82&#39;&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mechanism Type</td>\r\n			<td>Multi-Functional Tilt</td>\r\n			<td>Seat Size</td>\r\n			<td>16.14&quot;W(Front) X14.37 &quot;W (Back) X 20.08&quot;D</td>\r\n			<td>Package Size</td>\r\n			<td>35.83&quot;L X 28.74&quot;W X 15.35&quot;H</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Adjustable Tilt Angle</td>\r\n			<td>3~14&deg;</td>\r\n			<td>Maximum Seat Heigh</td>\r\n			<td>21.26&quot;</td>\r\n			<td>Gross Weight</td>\r\n			<td>61.73 Lb / 28kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tilt Angle Lock</td>\r\n			<td>Yes</td>\r\n			<td>Minimum Seat Height</td>\r\n			<td>18.90&#39;&#39;</td>\r\n			<td>Net Weight (Approximate)</td>\r\n			<td>72.75 Lb / 33kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gas Lift Specification</td>\r\n			<td>65/50</td>\r\n			<td>Maximum Chair Height</td>\r\n			<td>54.33&quot;</td>\r\n			<td>Weight Capacity</td>\r\n			<td>&lt;441 Lbs / 200 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gas Lift Class</td>\r\n			<td>4</td>\r\n			<td>Minimum Chair Height</td>\r\n			<td>51.77&#39;&#39;</td>\r\n			<td>Recommended Weight</td>\r\n			<td>397 Lbs /180 Kg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>ASSASSIN KING SERIES</h3>\r\n\r\n<p>Large Size High-Back Ergonomic Design Gaming Chair&nbsp;</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/des1jpg-1531520532120.jpg\" /></p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/foamjpg-1531838758213.jpg\" /></p>\r\n\r\n<h3>PVC LEATHER&nbsp;</h3>\r\n\r\n<p>Highly Stain-Resistant, Durable And Scratch-Resistant<br />\r\nSame Material And Original Design As Race Car Seat.</p>\r\n\r\n<h3>VELOUR HEAD PILLOW &amp; LUMBAR SUPPORT CUSHION&nbsp;</h3>\r\n\r\n<p>Anda Seat Ergonomic Design Neck Pillow And Lumbar Support Cushion Would Help You Sit Straight In The Right Posture.&nbsp;<br />\r\nThey Not Only Make It Easier To Focus On Your Work But Also Take Care Of Your Health</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/screen-shot-20180713-at-62429-pmpng-1531520682308.png\" /></p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/armrestsjpg-1531497668818.jpg\" /></p>\r\n\r\n<h3>3D ADJUSTABLE ARMRESTS</h3>\r\n\r\n<p>The Purpose Of Armrests Is To Rest Your Arms<br />\r\nNothing Would Do A Better Job Than Anda Seat Highly Adjustable 3D Armrests.&nbsp;<br />\r\nThe Surface Is Covered By PU, Support The Forearm To Relieve Wrist Pressure And Muscle Strain&nbsp;<br />\r\nWhich Maximum Your Gaming Experience</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/armrests2jpg-1531497751971.jpg\" /></p>\r\n\r\n<h3>HIGH DENSITY MOULD SHAPING FOAM</h3>\r\n\r\n<p>65Kg/M3 Density Foam Padding For True Ergonomic Support And Comfort.</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/screen-shot-20180713-at-50133-pmpng-1531515710395.png\" /></p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/screen-shot-20180713-at-45924-pmpng-1531515585513.png\" /></p>\r\n\r\n<h3>90 TO 160 DEGREE TILT MECHANISM</h3>\r\n\r\n<p>Our Special Designed Z Support Multi-Functional Tilt Mechanism Handles Heavy Duty, Provides You With Fully Control Over The Suspension Of The Chair. It Has Adjustable Tilt For Increasing And Decreasing Tension By Matching The Body Weight Of The User For Effortless, Secure And Sturdy Rocking, Without Putting Fatigue On Muscles.</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/screen-shot-20180713-at-63229-pmpng-1531521168976.png\" /></p>\r\n\r\n<h3>5-STAR ALUMINUM BASE</h3>\r\n\r\n<p>Anda Seat Premium Grade Aluminum Base Provides Not Only Impeccable Stability But Also Strength.&nbsp;<br />\r\nStatic Load: 1500KG&nbsp;<br />\r\nDynamic Load: 600KG&nbsp;<br />\r\nRibs:Increase The Supporting Weight</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/screen-shot-20180713-at-53125-pmpng-1531517504545.png\" /></p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/screen-shot-20180716-at-33241-pmpng-1531769575035.png\" /></p>\r\n\r\n<h3>STEEL FRAMEWORK</h3>\r\n\r\n<p>In Order To Make The Best Gaming Chair, Anda Seat Uses 22mm Diameter Enhanced Steel Frame<br />\r\nWith Ergonomic Design To Contour The Human Body.<br />\r\n<br />\r\n*Premium Construction&nbsp;<br />\r\n*Extremely Durable&nbsp;<br />\r\n*Lifetime Warranty</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.pagefly.io/file/get/screen-shot-20180713-at-122007-pmpng-1531498844582.png\" /></p>\r\n\r\n<h3>65 MM PU COVERED WHEEL (KING SIZE)</h3>\r\n\r\n<p>Our Wider Wheels Are Covered With Durable PU Rubber Which Provides Stability Of The Chair.<br />\r\nEnsures Smooth Movement To All Direction And Kind To Floor Surfaces.</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/screen-shot-20180713-at-53538-pmpng-1531517756881.png\" /></p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/sgs2jpg-1531503078239.jpg\" /></p>\r\n\r\n<h3>CLASS 4 HYDRAULIC PISTONS</h3>\r\n\r\n<p>Class 4 Hydraulic Pistons Are The Best In Its Class In Terms Of Consistency (99.9%)<br />\r\nWhich Provides Great Stability And Safety.&nbsp;<br />\r\nThrough The EU Standard SGS Certification</p>\r\n\r\n<p><img src=\"https://media.pagefly.io/file/get/sgsjpg-1531502941036.jpg\" /></p>', 'https://media.pagefly.io/file/get/des1jpg-1531520532120.jpg', 7990000, '2019-03-17 15:43:08', '2019-03-17 15:43:08'),
(8, 10, 'In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case', 'in-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower-case', '<p><strong>Model:</strong>&nbsp;In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>T&igrave;nh trạng:</strong>&nbsp;Mới 100%</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Bảo h&agrave;nh:</strong>&nbsp;12 Th&aacute;ng</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;<strong>Xuất xứ:</strong>&nbsp;Ch&iacute;nh H&atilde;ng</p>\r\n\r\n<p><strong><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;Thương hiệu:</strong>&nbsp;In Win</p>\r\n\r\n<p>Gi&aacute; b&aacute;n đ&atilde; bao gồm VAT</p>\r\n\r\n<p><img src=\"http://file.hstatic.net/1000162654/file/arr.gif\" />&nbsp;Khuyến m&atilde;i: K&egrave;m nguồn Inwin hoặc Andyson giảm 300K/Bộ&nbsp;<img src=\"http://file.hstatic.net/1000162654/file/hot.gif\" /></p>\r\n\r\n<p><strong>Th&ocirc;ng số:</strong></p>\r\n\r\n<p><br />\r\n- Phi&ecirc;n bản đặc biệt của Inwin kết hợp với nh&agrave; sản xuất đồ họa lớn nhất thế giới Nvidia cho ra đời một sản phẩm cực đẹp . Đặc biệt l&agrave; với c&aacute;c fan Nvidia .<br />\r\n<br />\r\n- S&aacute;ng tạo bất tận lu&ocirc;n lu&ocirc;n được Inwin mang đến cho người d&ugrave;ng m&aacute;y t&iacute;nh tr&ecirc;n to&agrave;n thế giới . Một ph&aacute; c&aacute;ch về hệ thống tản nhiệt với c&aacute;ch bố tr&iacute; ho&agrave;n to&agrave;n mới l&agrave;m cho Inwin 303 c&oacute; một sự kh&aacute;c biệt ho&agrave;n to&agrave;n với tất cả những sản phẩm trước đ&acirc;y .&nbsp;<br />\r\n<br />\r\n- Với kết cấu th&eacute;p d&agrave;y đến 1.2mm v&agrave; k&iacute;nh cường lực full b&ecirc;n tr&aacute;i . Hệ thống tản nhiệt được bố tr&iacute; ho&agrave;n to&agrave;n mới v&agrave; cực k&igrave; th&ocirc;ng minh . Inwin 303 l&agrave; một sự lựa chọn s&aacute;ng gi&aacute; trong tầm ph&acirc;n kh&uacute;c 2.500.000 VNĐ .&nbsp;<br />\r\n<br />\r\n- Clip giới thiệu sản phẩm Inwin 303 từ nh&agrave; sản xuất :&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n- Clip đ&aacute;nh gi&aacute; thực tế v&agrave; rất chi tiết từ trang th&ocirc;ng tin điện tử Hardware Canucks :&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.inwin-style.com/uploads/Product/gaming-chassis/303/303_spec_black.jpg\" /></p>', 'http://product.hstatic.net/1000162654/product/upload_37b481d3628f46a5b030afa2a1cbe6fd_master.jpg', 2990000, '2019-03-17 15:46:53', '2019-03-17 15:46:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `level` int(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Xuyên', 'nvxuyen.102@gmail.com', '$2y$10$Pxm.19Ah5DnpZjz1qdkQP.HgWqZkrdTk3prdCVwyy2awzQyX0eo0m', 'XpuhlE8fLkDBNCj0I563raOQlguqopLk7PzkbX3H87P7pGt5Gq263esYmDAG', 2, '2019-03-13 03:17:11', '2018-12-12 13:56:10'),
(5, 'Đào Đức Mạnh Dũng', 'manhdung.daoduc@gmail.com', '$2y$10$02XuOwGLHwtyP/bIZu4Df.ym31g/0a2gduQdiCs8/xqdb4Z2UP8F2', NULL, 0, '2018-12-03 15:58:00', '2018-12-03 15:58:00'),
(6, 'Bo Bo Bụng Bự', 'bobo.bungbu@gmail.com', '$2y$10$9y/2DpTiqNSWogpHqkkl4ewZkFMN6fTxO6w/u4U2cL4P8c90h4PIC', NULL, 1, '2018-12-03 15:57:59', '2018-12-03 15:57:59'),
(7, 'Sài Gòn', 'saigon@gmail.com', '$2y$10$W2TrYFeYR70YEo3.QB580eCQN4C28xOLx8WdvxXctl5gYI3H6SFYS', NULL, 0, '2018-11-28 08:54:36', '2018-11-28 08:54:36'),
(8, 'Hà Nội', 'hanoi@gmail.com', '$2y$10$Arljj3j.5yElKVR0n3SiceIl93H1OIc3P1e40QIwKgFPMQlZCjes.', NULL, 0, '2018-11-28 08:56:02', '2018-11-28 08:56:02'),
(9, 'Đà Nẵng', 'danang@gmail.com', '$2y$10$lywRN/y5SXoFwtec4KLjou.QLwGTMOdgSdxDN.1EZc8DVl/5ZiPei', NULL, 0, '2018-11-28 08:56:31', '2018-11-28 08:56:31'),
(10, 'Phú Yên', 'phuyen@gmail.com', '$2y$10$VBaOX/QbdEv6.EV1Dc42V.cdTo2.jWFf/SfNaph6UNWX4IRVtKqGe', NULL, 0, '2018-11-28 08:57:41', '2018-11-28 08:57:41'),
(11, 'Trăng Và Sao', 'trangvasao@gmail.com', '$2y$10$EhywY8TTBkYYJXBGilx4zuAnrdihsyaCQYo15AVRnMgJpOr9dN2MG', NULL, 0, '2018-11-28 08:58:44', '2018-11-28 08:58:44'),
(12, 'Cuộc Sống', 'cuocsong@gmail.com', '$2y$10$r9aKf7.IBHv0vGebZ9B1f.EiLsAdIMct38jURFNV/6q5dacDLdxR.', NULL, 0, '2018-11-28 08:59:04', '2018-11-28 08:59:04'),
(13, 'Thu Thu', 'thuthu@gmail.com', '$2y$10$CH.t3jAOp1/Ed3YeYLJXje81sujVT2keoGVEit1lMXgIrCIVx8PI2', NULL, 0, '2018-12-03 03:51:48', '2018-12-03 03:51:48'),
(14, 'Minh Nhựt', 'minhnhut@gmail.com', '$2y$10$fdf8KxREIYuIoTmOesXisePyyQbyqK1j2FAoTYPaXBOqtL1WYFTPy', '1xiops5KdUkBh44MeHF4YlhLhGfwZi5EouYOJuiVEVkWDQt5ifxKmnXke85J', 1, '2018-12-03 15:30:46', '2018-12-03 03:54:33'),
(15, 'Trần Nguyên Khải', 'khainguyen@gmail.com', '$2y$10$V8jqfBcYvMy8r15d/mIWUu3suOBpYtyc1/0Bw3jEEqyCGbD3/yZNC', 'isXg09sb7HwIfkg9PTMiXStKxuXKNHje458KJn9pXnfvyvp25pBGEYhYqc3c', 0, '2018-12-04 07:19:29', '2018-12-04 07:18:49'),
(16, 'Phan Minh Triết', 'kuynha9x@gmail.com', '$2y$10$SYASu.UrH4pIN/TvCCT9DuPACYjul1KFF7Kwfzz59o1oN92utVwJG', 'UpP0bQXhB9rANrJFkCbbvp06BgwV8HURE6TCrIB9q3hHTliFMoJgdOjJvPiO', 2, '2018-12-12 13:23:40', '2018-12-12 13:23:40'),
(17, 'Nguyễn Văn Xuyên', 'nvxuyenff@gmail.com', '$2y$10$MIC6kf4CX.5PMFmFKjmbNuRxACuOCwErYKpUReZzATFJL0jJPqLBO', 'DcAfdnM2XMf5JaE92dfIAu9MgRSdNnWswBm2lrxNquEx7NF8iIzmHupRgwvW', 0, '2018-12-06 16:04:29', '2018-12-06 09:36:47'),
(18, 'Nguyễn Văn Xuyên', '12fffff@gmail.com', '$2y$10$m2pbZiC9eFFfyrDQUMW2N.j8u71s0CrAY33tdjX9gV77JNNmcwn/a', 'Hsd63qQ4ks58QjOXE6FekMSmlvhB79zvY97AiI1PKSGgtsJSb41PXLXrLQo0', 0, '2018-12-06 16:23:09', '2018-12-06 16:19:05'),
(19, 'Nguyễn Văn Xuyên', 'nvxuyen222@gmail.com', '$2y$10$h2PLFNGWvGoroL4Dpe04m.sOE84WVBvrH6UH546pZu.4nJkb3ME.m', NULL, 0, '2018-12-06 09:48:39', '2018-12-06 09:48:39'),
(20, 'Nguyễn Văn Xuyên', 'nvxuyen333@gmail.com', '$2y$10$V3YeKf10RNoSygSrn9AmRevMdxC74lX6pFSPs6mYswSu/t1lgmKZ6', NULL, 0, '2018-12-06 09:49:29', '2018-12-06 09:49:29'),
(21, 'Huân Huân', 'huanhuan@gmail.com', '$2y$10$MAPL18bGKF9/w9o8NP9RyerwqMV5KNSD7bkMD2EzyWrhRGGCZsrL6', NULL, 0, '2018-12-06 09:50:19', '2018-12-06 09:50:19'),
(22, 'Mít Bo', 'mitbo@gmail.com', '$2y$10$5zfqDNsLQfSx4.r3ZbtqvOqfte02WsBnFIriR0QlHZWDyb1L5gspW', NULL, 0, '2018-12-06 11:15:51', '2018-12-06 11:15:51'),
(23, 'ha hahha', 'fjfjf@gmail.com', '$2y$10$u0UiZSsf7Nf2TF74GF0Id.YfA8AN2uMFZizTnOs2Vf7da2eN48Cce', NULL, 0, '2018-12-06 11:16:33', '2018-12-06 11:16:33'),
(24, 'fjfjfjjf', 'nvnvnvnv@gmail.com', '$2y$10$RPce0ONhcT6.b/6vdjnUW./iBLHptGOUjhtm/V3a3QUPcWwgUG0ay', NULL, 0, '2018-12-06 11:17:06', '2018-12-06 11:17:06'),
(25, 'Nguyễn Văn Xuyên', 'nvxuyen.1402@gmail.com', '$2y$10$D833HnXhnzHQdQOArMLr2eNVug.Avz8JJqiMwLBim8TlJdUUasPOa', 'zkD4fB8CJeBLBG89WDLxU1uRCMwOoOxK6CW1y0EiPUyNqZnOpR2PMlxreNqk', 0, '2018-12-12 13:25:58', '2018-12-12 13:19:07'),
(26, 'Nguyễn Văn Xuyên 3', 'nvx.coin@gmail.com', '$2y$10$53HmJKwGZ0qjdunEh846WOpJLXpeG5I/ot8EreLNZTefgr9cYpA12', NULL, 0, '2018-12-12 13:30:48', '2018-12-12 13:30:48'),
(27, 'Phan Minh Triết', 'triettana@gmail.com', '$2y$10$wbDeJlNVYJIivYqxzZy78em3IpUZopNgqYXhr7HoMHanNXsWC2iea', 'MUwqB3PcFClThBIJfeSh9Cr2dLBmlroMIytv2d69KnqOrw2BM84rNyy5ogFk', 0, '2019-03-13 00:23:57', '2019-03-13 00:23:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cat_news`
--
ALTER TABLE `cat_news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `forgotpass`
--
ALTER TABLE `forgotpass`
  ADD PRIMARY KEY (`id_verify`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_news_cat` (`cat_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cat_news`
--
ALTER TABLE `cat_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_cat` FOREIGN KEY (`cat_id`) REFERENCES `cat_news` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
