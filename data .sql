-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2018 lúc 09:12 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `created`, `modified`) VALUES
(1, 'sf', 'sdf', '2018-04-04 05:22:01', '2018-04-04 05:22:01'),
(2, 'sf', 'sdf', '2018-04-04 05:22:36', '2018-04-04 05:22:36'),
(3, 'ads', 'dads', '2018-04-04 05:44:01', '2018-04-04 05:44:01'),
(4, 'ads', 'dads', '2018-04-04 05:45:12', '2018-04-04 05:45:12'),
(5, '', '', '2018-04-04 06:42:36', '2018-04-04 06:42:36'),
(6, 'dg', 'dgd', '2018-04-04 07:15:12', '2018-04-04 07:15:12'),
(7, 'sdff', 'sfsdf', '2018-04-04 08:57:13', '2018-04-04 08:57:13'),
(8, 'gjdkfl;g', 'sfdlkkkkkkkkkkkkkkkkkkkk\r\nsdfffffffffffffff', '2018-04-04 08:57:24', '2018-04-04 08:57:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `slug`, `modified`, `user_id`) VALUES
(230, 'czxxx', 'cccccccccccccc', '2018-04-05 09:37:40', 'czxxx', '2018-04-05 09:37:40', 23),
(232, 'cakephp', 'Make sure you have Configure::write(\'debug\', 0); set in app/Config/core.php. Only enable debugging on a staging or local copy of your site otherwise you risk revealing error messages to users on your live site that may lead to vulnerabilities.', '2018-04-05 10:47:12', 'cakephp', '2018-04-05 10:47:12', 23),
(233, 'adgjajd', 'adada', '2018-04-05 12:28:26', 'adgjajd', '2018-04-05 12:28:26', 23),
(240, 'sadsadsad', 'sadsad', '2018-04-06 10:07:54', 'sadsadsa', '2018-04-06 10:07:54', 23),
(241, '123', '123', '2018-04-06 10:08:07', '123', '2018-04-06 10:08:07', 23),
(242, 'ahhhh', 'sad', '2018-04-06 10:33:50', 'da', '2018-04-06 10:33:50', NULL),
(243, 'dgdga', 'shssjs', '2018-04-06 11:25:54', 'ss', '2018-04-06 11:25:54', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schema_migrations`
--

CREATE TABLE `schema_migrations` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `schema_migrations`
--

INSERT INTO `schema_migrations` (`id`, `class`, `type`, `created`) VALUES
(1, 'InitMigrations', 'Migrations', '2018-03-28 07:53:35'),
(2, 'ConvertVersionToClassNames', 'Migrations', '2018-03-28 07:53:35'),
(3, 'IncreaseClassNameLength', 'Migrations', '2018-03-28 07:53:36'),
(4, '1522213736N', 'app', '2018-03-28 07:53:45'),
(5, 'N', 'app', '2018-03-28 07:54:34'),
(6, 'fhf', 'fhf', '2018-03-28 09:44:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `role` varchar(64) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`, `status`) VALUES
(23, 'admin44', '$2a$10$CxBJ3va5qV38DSpL7C.iBOQcAQBH6AQt8JyOoZTIPIeqokMkPvEv.', 'khaudsfsfqy@gmail.com', 'admin', '2018-03-27 07:14:59', '2018-03-27 07:14:59', 1),
(25, 'admin123', '$2a$10$/sXK8Mt2tIGw5zTRhNawpOsw.7xy/DoDH4Gy72MvEQGPQFMXpxD9i', NULL, NULL, '2018-04-04 04:15:07', '2018-04-04 04:15:07', 1),
(27, 'admin123555', '$2a$10$RGnYG0OpjoxduvN5NE6kmOSbbjOrdsxjhB/iUvagY0O0/wvvbzZLe', NULL, NULL, '2018-04-04 09:21:57', '2018-04-04 09:21:57', 1),
(28, 'admin77', '$2a$10$InJJQ9IVGl9mf/GY0f0enONocjPJXUlmiqkEgPUJxjSh8wxyQ4a32', NULL, NULL, '2018-04-04 09:22:34', '2018-04-04 09:22:34', 1),
(29, 'fsdfs', '$2a$10$hEZTSf6Wn9.WNryx.x8bAuovrUf.Nzh0.rJKv/N6M/DubCMAMSSam', 'khauqy@gmail.com', 'admin', '2018-04-04 10:04:58', '2018-04-04 10:04:58', 1),
(30, 'admin123', '$2a$10$4Mgt9fWjDVG/CQPLpLuTEuAUUMhzDStRzdR1wltMusgjNAhnfeEJy', 'khaquy1222sfsf@gmail.com', '', '2018-04-04 10:09:34', '2018-04-04 10:09:34', 0),
(31, 'admin123', '$2a$10$gdjIDxI5P4u.Jhk4hjPE9uxm5wy.nW1mEZFm7UQR0LbK3xSMHyxr.', 'khaquy1222sfsf@gmail.com', '', '2018-04-04 10:12:19', '2018-04-04 10:12:19', 0),
(32, 'admin123sf', '$2a$10$lnCtBX1YImrIRdKN0V.fFud8RUN8x.dD5xBdoeXRpcOIlakeNEQLm', 'sdf@gamil.com', 'sf', '2018-04-06 04:53:36', '2018-04-06 04:53:36', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schema_migrations`
--
ALTER TABLE `schema_migrations`
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
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT cho bảng `schema_migrations`
--
ALTER TABLE `schema_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
