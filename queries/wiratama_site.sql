-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 04:37 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiratama_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `id` int UNSIGNED NOT NULL,
  `property_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `hero1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hero2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `features` text COLLATE utf8mb4_general_ci,
  `permalink` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`id`, `property_id`, `product_name`, `description`, `hero1`, `hero2`, `featured_image`, `features`, `permalink`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 1, 'Bima', 'Nikmati hunian modern yang hadir dengan dua pilihan: Bima A (30x60 m²) dengan luas total 180 m², dan Bima B (30x96 m²) dengan luas 288 m². Masing-masing tipe memiliki 2 kamar tidur, 1 kamar mandi, serta daya listrik 1300 watt. Fitur smart door lock meningkatkan keamanan dan kenyamanan.\r\n\r\nBima A ideal bagi Anda yang menginginkan rumah lebih praktis dan efisien, cocok untuk keluarga kecil. Sementara, Bima B menawarkan ruang lebih luas, cocok bagi keluarga yang membutuhkan tambahan area untuk aktivitas atau pengembangan di masa depan.', 'wiratama-estate-3/bima/wr-estate-3-hero-1.webp', 'wiratama-estate-3/bima/wr-estate-3-hero-2.webp', 'wiratama-estate-3/bima/featured-bima.webp', '2 Kamar Tidur, Kloset Duduk, Carport, Smart Door Lock, Kusen Alumunium, Halaman Samping (Bima B)', 'bima', '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL),
(2, 1, 'Arjuna', 'Temukan hunian dua lantai dengan desain modern dan fungsional melalui pilihan tipe Arjuna A, B, C, D. Setiap rumah dilengkapi dengan 2 kamar tidur, 2 kamar mandi, dan daya listrik 2200 watt. Sistem keamanan semakin lengkap dengan smart door lock yang sudah terpasang.\r\n\r\nMasing-masing tipe menawarkan luas tanah berbeda, yang dapat disesuaikan dengan kebutuhan Anda:\r\n\r\n    Arjuna A (50x60 m²) cocok untuk keluarga yang mencari kenyamanan di lahan yang lebih kompak.\r\n    Arjuna B (50x75 m²) memberikan ruang lebih besar untuk halaman atau area tambahan.\r\n    Arjuna C (50x96 m²) menawarkan kelapangan yang cukup untuk berbagai aktivitas outdoor.\r\n    Arjuna D (50x120 m²) hadir dengan ruang paling luas, sempurna bagi keluarga yang menginginkan hunian lebih lapang dan fleksibel.', 'wiratama-estate-3/arjuna/wr-estate-3-hero-1.webp', 'wiratama-estate-3/arjuna/wr-estate-3-hero-2.webp', 'wiratama-estate-3/arjuna/featured-arjuna.webp', '2 Kamar Tidur, 2 Lantai, Kloset Duduk, Carport, Smart Door Lock, Kusen Alumunium', 'arjuna', '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL),
(3, 1, 'Ruko Hunian', 'Tipe Ruko Hunian di Wiratama Estate 3 menawarkan konsep multifungsi dengan luas bangunan dan tanah 63x60 m². Tipe ini dirancang khusus bagi Anda yang menginginkan hunian nyaman sekaligus tempat usaha.\r\n\r\nDilengkapi 1 kamar tidur, 1 kamar mandi, dan daya listrik 2200 watt, serta ditambah dengan Pagar Besi Hollow untuk keamanan maksimal. Taman kecil di depan ruko ini menambah kesan asri, menjadikan Tipe Ruko Hunian pilihan ideal bagi yang ingin tinggal dan berbisnis dalam satu tempat.', 'wiratama-estate-3/rukan/wr-estate-3-hero-1.webp', 'wiratama-estate-3/rukan/wr-estate-3-hero-2.webp', 'wiratama-estate-3/rukan/featured-rukan.webp', 'Teras Koridor, Carport, Taman, Kamar Mandi, Kamar Tidur, Teras Balkon Lt. 2', 'ruko-hunian', '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_gallery`
--

CREATE TABLE `tb_product_gallery` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `image_file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_property`
--

CREATE TABLE `tb_property` (
  `id` int NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_property`
--

INSERT INTO `tb_property` (`id`, `property_name`, `property_url`, `created_at`, `modified_at`) VALUES
(1, 'Wiratama Estate 3', 'wiratama-estate-3', '2024-10-18 15:59:30', '2024-10-18 16:12:47'),
(2, 'Wiratama Residence 2', 'wiratama-residence-2', '2024-10-18 15:59:30', '2024-10-18 16:12:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_property` (`property_id`);

--
-- Indexes for table `tb_product_gallery`
--
ALTER TABLE `tb_product_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_product_gallery_product_id_foreign` (`product_id`);

--
-- Indexes for table `tb_property`
--
ALTER TABLE `tb_property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_product_gallery`
--
ALTER TABLE `tb_product_gallery`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_property`
--
ALTER TABLE `tb_property`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD CONSTRAINT `fk_property` FOREIGN KEY (`property_id`) REFERENCES `tb_property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_product_gallery`
--
ALTER TABLE `tb_product_gallery`
  ADD CONSTRAINT `tb_product_gallery_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `tb_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
