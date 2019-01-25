-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 12:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone3`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_cover` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image_cover`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'I Don’t Plan On Leaving, But You’re Pushing Me Away', '<p>Being beside you is one of the best feelings in the world, next to being at home, comfortable doing nothing, worrying about nothing. Mark my words, when I tell you I am staying, I am and I will be until you become the voice that tells me I need to walk away. I won&rsquo;t swap your company for any other person&rsquo;s company. You have been basically my most unexpected haven, an unknown comfort zone.</p>\r\n\r\n<p>But you&rsquo;re pushing me during the times you forget the stories I tell you, the roller coaster of emotions I went through at work and the smallest things that caught my attention while walking on the street. I don&rsquo;t need you to remember everything, I just want you to have a glimpse of my every day far from you, and keep with you small portions of my stories.</p>\r\n\r\n<p>You&rsquo;re pushing me on days I don&rsquo;t hear from you. They say that the most precious gift someone can give you is his time. You might have your reasons for not texting, for not calling, for not seeing me, but I believe that if one wants, one does. I am not asking for your attention 24 hours a day. A &ldquo;Good Morning,&rdquo; &ldquo;Take Care,&rdquo; &ldquo;I am thinking of you,&rdquo; &ldquo; I miss you,&rdquo; or a &ldquo;Good night&rdquo; at the end of the day without you beside me is enough for me to know that I still am a part of you.</p>\r\n\r\n<p>You&rsquo;re pushing me whenever you tell me about the things you have already said. Did you just forget? Or am I not that important that our conversations have no weight? I am not demanding for you to focus on me, just make me feel that you want to talk to me by really talking to me, without your mind wandering.</p>\r\n\r\n<p>You&rsquo;re pushing me at times you leave me hanging, waiting for answers, stuck on misunderstandings instead of knowing the explanations of what went wrong and finding ways to fix it. We don&rsquo;t have to be okay all the time, just let me know what I can do if I fall short of your expectations, or if I was offensive, or whatever is going on in your mind.</p>\r\n\r\n<p>You&rsquo;re pushing me every time you are not pulling me closer. I want to be near you. I want you to hold me as tight as you can. I want to feel our presence, to see your face, to know you&rsquo;re there.&nbsp;<strong>I don&rsquo;t need anything perfect, I just need a bold reason to stay. But every single time you&rsquo;re not doing anything to pull me closer, you are pushing me to take a step away from you.</strong></p>', 'images/1548258594.jpg', 1, '2019-01-23 03:07:33', '2019-01-23 07:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `article_reader`
--

CREATE TABLE `article_reader` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_user`
--

CREATE TABLE `article_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_user`
--

INSERT INTO `article_user` (`id`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2019-01-24 00:03:13', '2019-01-24 00:03:13'),
(2, 5, 1, '2019-01-24 00:10:41', '2019-01-24 00:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Relationships', '2019-01-23 01:03:07', '2019-01-23 01:03:07'),
(2, 'Self-Improvement', '2019-01-23 01:03:27', '2019-01-23 01:03:27'),
(3, 'Psychology', '2019-01-23 01:03:47', '2019-01-23 01:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_20_232416_create_roles_table', 2),
(4, '2019_01_20_232906_add_role_id_to_users', 3),
(6, '2019_01_23_090014_create_categories_table', 4),
(7, '2019_01_23_090405_create_articles_table', 5),
(8, '2019_01_23_110249_create_articles_table', 6),
(9, '2019_01_23_160301_create_table_article_reader', 7),
(10, '2019_01_23_161409_create_reviews_table', 8),
(11, '2019_01_24_080036_create_article_user_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('panganiban.hannah@gmail.com', '$2y$10$KTUx9mk2b9PSVDasMBDvHeDbwuWHmUFu3/0umyhDDeuOtrN/gchdm', '2019-01-16 19:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-01-20 15:27:21', '2019-01-20 15:27:21'),
(2, 'user', '2019-01-20 15:28:00', '2019-01-20 15:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `firstname`, `lastname`, `username`, `birthday`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hannah', 'Panganiban', 'hpanganiban', '1986-05-12', 'panganiban.hannah@gmail.com', '2019-01-16 20:38:55', '$2y$10$8gJBoRDYF2yIL7GKyCRc1OCqM5zuTw3QYs51frBACHJ48eFp8ACQO', 'KsVuu1mnp3CeFmzost0WxTRQK6ouvFuch65XGw5TaVmdlTsYquHF9CK8kLPb', '2019-01-16 20:34:42', '2019-01-16 20:38:55'),
(2, 2, 'Rhin', 'Yukimura', 'rhinyuki', '2012-04-21', 'misayukimura@gmail.com', '2019-01-20 15:54:09', '$2y$10$iTtwdZfS0CYoTBceEBiRfubo1BfrYH9BWj9j3Q4J4khzvboXrWf9a', NULL, '2019-01-20 15:53:46', '2019-01-20 15:54:09'),
(5, 2, 'Roxanne Jean', 'Villanueva', 'ochiie', '1996-09-11', 'roxannejeanvillanueva@gmail.com', '2019-01-22 21:45:44', '$2y$10$aPKy9K2lLXg1gmwgkCxpNuD0hkKBVPLC9Q4Q0iTEY/lXqsN5bJ8yO', 'KlaSQbGC7Vxw1jOOtq0TjqozzdPQiUFM3acgLx6c4KSJjW13ZIhoFKWkw97A', '2019-01-22 21:44:19', '2019-01-22 21:45:44'),
(6, 1, 'I Hate', 'You', 'ihateyou', '1993-09-11', 'rojzwitkizzer@gmail.com', '2019-01-22 22:26:44', '$2y$10$aPKy9K2lLXg1gmwgkCxpNuD0hkKBVPLC9Q4Q0iTEY/lXqsN5bJ8yO', 'ePG4DbyYneimjhD8qVXfNAAavAmr9ycchCZ2OjzlbFQFm1MzmpGBEX4Aj9n4', '2019-01-22 21:59:36', '2019-01-22 22:26:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `article_reader`
--
ALTER TABLE `article_reader`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_reader_user_id_foreign` (`user_id`),
  ADD KEY `article_reader_article_id_foreign` (`article_id`);

--
-- Indexes for table `article_user`
--
ALTER TABLE `article_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_user_user_id_foreign` (`user_id`),
  ADD KEY `article_user_article_id_foreign` (`article_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_article_id_foreign` (`article_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article_reader`
--
ALTER TABLE `article_reader`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_user`
--
ALTER TABLE `article_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `article_reader`
--
ALTER TABLE `article_reader`
  ADD CONSTRAINT `article_reader_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_reader_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `article_user`
--
ALTER TABLE `article_user`
  ADD CONSTRAINT `article_user_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
