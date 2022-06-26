-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2022 at 01:14 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `gen_post_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ingredient` varchar(255) NOT NULL,
  `steps` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `images` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `gen_post_id`, `title`, `ingredient`, `steps`, `created_at`, `images`, `user_id`) VALUES
(15, 'p62b4e08d8f051', 'DIY tyre Dog seat', 'just an old car tyre and some sheets or pillow', 'paint it with a color of your choice\r\n...', '2022-06-23 21:52:13', '[\"IMAGE 2 - 62b4e08d8f069.png\",\"IMAGE 4 - 62b4e08d8f452.png\",\"IMAGE 5 - 62b4e08d8f59b.png\"]', 1),
(19, 'p62b56eeeded00', 'hahha', 'hahha', 'ghh', '2022-06-24 07:59:42', '[\"Screen Shot 2022-06-20 at 18 - 62b56eeeded72.png\"]', 7),
(22, 'p62b58977ad3c6', 'hamza', 'hamza', 'hamza', '2022-06-24 09:52:55', '[\"Screen Shot 2022-06-20 at 18 - 62b58977ad3e5.png\",\"Screen Shot 2022-05-12 at 22 - 62b58977ad569.png\",\"Screen Shot 2022-05-14 at 23 - 62b58977ad6f8.png\",\"Screen Shot 2022-06-20 at 18 - 62b58977ad870.png\",\"Screen Shot 2022-06-20 at 18 - 62b58977ada81.png\"]', 8),
(24, 'p62b59ed027c3a', 'Owl', 'cans', 'cans', '2022-06-24 11:24:00', '[\"img2 - 62b59ed027c54.jpg\",\"img - 62b59ed027db5.jpg\"]', 1),
(26, 'p62b6e2cb45665', 'art', 'smt', 'hard work', '2022-06-25 10:26:19', '[\"Screen Shot 2022-05-14 at 23 - 62b6e2cb4567a.png\"]', 10),
(29, 'p62b6e912c7bba', 'Alae\'s GreenWork 1', 'Ingredient 1', 'Step 1', '2022-06-25 10:53:06', '[\"Screen Shot 2022-06-20 at 18 - 62b6e912c7c00.png\",\"Screen Shot 2022-05-14 at 23 - 62b6e912c7d69.png\"]', 6),
(30, 'p62b6e93f6d249', 'Alae\'s GreenWork 2', 'Ingredient 2', 'Step 2', '2022-06-25 10:53:51', '[\"Screen Shot 2022-05-14 at 23 - 62b6e93f6d2b3.png\",\"Screen Shot 2022-06-20 at 18 - 62b6e93f6d56b.png\"]', 6),
(31, 'p62b854f6a2ac9', 'Test GreenWork', 'test', 'test', '2022-06-26 12:45:42', '[\"IMAGE 1 - 62b854f6a2b41.png\",\"IMAGE 2 - 62b854f6a2f7a.png\"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `date_created`) VALUES
(1, 'yusuf', 'isawi', 'yusuf', 'yusuf@isawi.me', '$2y$10$fO/poV44M5cnft8i8x0NEO8yWrIfd63FN7SLooCoSHJtCt0y37rPa', '2022-06-22 16:13:36'),
(2, 'Isawi', 'Yusuf', 'isawi', 'isawi@yusuf.me', '$2y$10$JUhsJe.BTuzA.TbEyTwQBeM9D06sjaR6BIndSsQbtEVN0TYYQ1zL.', '2022-06-22 19:26:58'),
(3, 'admin', 'test', 'Boss', 'admin@admin.boss', '$2y$10$o83dgm45UDLfDXvK253QD.D/NG5kxOryFAJhn/5t7cEf41M2sehFG', '2022-06-23 15:37:40'),
(5, 'test', 'testing', 'fortest', 'testing@test.com', '$2y$10$IhUqL3AaOOcoghb66J/zd.XlXTkMMiod627L6ZGknPRbaYbPrEGdu', '2022-06-23 21:33:40'),
(6, 'Alae', 'Benhamza', 'alaehamza', 'alaebenhamza3@gmail.com', '$2y$10$0m5uek0SWJ6wrb4igqZh7Os5NdxjiPsEDyQ0j5gYASK5b26GPhSjC', '2022-06-24 07:50:29'),
(7, 'hamza', 'edraoui', 'edraouihamza', 'edraouihamza@gmail.com', '$2y$10$BvA6nq9lZf4Dpoa1C5XpY.NgTIpjTus.e4ujMINhmDXNKL5e3dTdG', '2022-06-24 07:58:14'),
(8, 'hamza', 'bourbab', 'hamzabourbab', 'hamza22bourbab@jmail.com', '$2y$10$SNJlz0v0F2HQBKR7SzV7z.0wXDbSg4dhrSE.eMORkeXF6zsnoDode', '2022-06-24 09:40:47'),
(9, 'Yusuf', 'Isawi', 'yusufisawi', 'enrgyproductions2017@gmail.com', '$2y$10$KrCFCJdhBZ1AuLVZnJHfQuc.stXkP.fLoklK4EmdoDTWUlcd2auKi', '2022-06-24 18:49:02'),
(10, 'MohammedYassine', 'AouladAhriz', 'yassine', 'yssnmed@gmail.com', '$2y$10$E60RDOK/vqcm9xRQhMpnoOJj5MTk8MP60dFpbEdmGppvCxDC8UEii', '2022-06-25 10:25:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gen_post_id` (`gen_post_id`),
  ADD KEY `post_user_id_fk` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_username_index` (`username`),
  ADD KEY `user_email_index` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
