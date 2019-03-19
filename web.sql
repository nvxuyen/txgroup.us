-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 16, 2019 lúc 04:55 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cat_news`
--

INSERT INTO `cat_news` (`id`, `name`, `name_ascii`, `description`, `updated_at`, `created_at`) VALUES
(1, 'Thông Báo', 'thong-bao', NULL, '2018-10-29 16:28:18', '0000-00-00 00:00:00'),
(2, 'Hướng dẫn', 'huong-dan', NULL, '2018-10-29 16:28:18', '0000-00-00 00:00:00'),
(3, 'Thông tin', 'thong-tin', NULL, '2018-10-29 16:28:18', '2018-10-24 16:59:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection`
--

CREATE TABLE `collection` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ascii` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `title_ascii`, `quote`, `content`, `image`, `created_at`, `updated_at`) VALUES
(6, 1, 'Demo thông báo - 2', 'demo-thong-bao-2', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(8, 1, 'Demo thông báo - 2', 'demo-thong-bao-2', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(9, 1, 'Demo thông báo - 3', 'demo-thong-bao-3', '', 'Demo thông báo - 3', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(10, 1, 'Demo thông báo - 4', 'demo-thong-bao-4', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(12, 1, 'Demo thông báo - 6', 'demo-thong-bao-6', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(14, 1, 'Demo thông báo - 8', 'demo-thong-bao-8', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(15, 1, 'Demo thông báo - 9', 'demo-thong-bao-9', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(17, 1, 'Demo thông báo - 11', 'demo-thong-bao-11', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:08', '2018-10-29 16:24:08'),
(19, 1, 'Demo thông báo - 13', 'demo-thong-bao-13', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(20, 1, 'Demo thông báo - 14', 'demo-thong-bao-14', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(21, 1, 'Demo thông báo - 15', 'demo-thong-bao-15', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(22, 1, 'Demo thông báo - 16', 'demo-thong-bao-16', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(23, 1, 'Demo thông báo - 17', 'demo-thong-bao-17', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(24, 1, 'Demo thông báo - 18', 'demo-thong-bao-18', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(25, 1, 'Demo thông báo - 19', 'demo-thong-bao-19', '', 'Demo thông báo - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(26, 2, 'Demo hướng dẫn - 1', 'demo-huong-dan-1', '', 'Demo hướng dẫn - 1', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(27, 2, 'Demo hướng dẫn - 2', 'demo-huong-dan-2', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(28, 2, 'Demo hướng dẫn - 3', 'demo-huong-dan-3', '', 'Demo hướng dẫn - 3', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(29, 2, 'Demo hướng dẫn - 4', 'demo-huong-dan-4', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:09', '2018-10-29 16:24:09'),
(30, 2, 'Demo hướng dẫn - 5', 'demo-huong-dan-5', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(31, 2, 'Demo hướng dẫn - 6', 'demo-huong-dan-6', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(32, 2, 'Demo hướng dẫn - 7', 'demo-huong-dan-7', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(33, 2, 'Demo hướng dẫn - 8', 'demo-huong-dan-8', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(34, 2, 'Demo hướng dẫn - 9', 'demo-huong-dan-9', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(35, 2, 'Demo hướng dẫn - 10', 'demo-huong-dan-10', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(36, 2, 'Demo hướng dẫn - 11', 'demo-huong-dan-11', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(37, 2, 'Demo hướng dẫn - 12', 'demo-huong-dan-12', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(38, 2, 'Demo hướng dẫn - 13', 'demo-huong-dan-13', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(39, 2, 'Demo hướng dẫn - 14', 'demo-huong-dan-14', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10'),
(40, 2, 'Demo hướng dẫn - 15', 'demo-huong-dan-15', '', 'Demo hướng dẫn - 2', '', '2018-10-29 16:24:10', '2018-10-29 16:24:10');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
