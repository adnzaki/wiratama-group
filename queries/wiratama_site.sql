-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2024 at 09:55 AM
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
  `thumbnail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `specification` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_price` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`id`, `property_id`, `product_name`, `description`, `hero1`, `hero2`, `featured_image`, `features`, `permalink`, `thumbnail`, `specification`, `start_price`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 1, 'Bima', 'Nikmati hunian modern yang hadir dengan dua pilihan: Bima A (30x60 m²) dengan luas total 180 m², dan Bima B (30x96 m²) dengan luas 288 m². Masing-masing tipe memiliki 2 kamar tidur, 1 kamar mandi, serta daya listrik 1300 watt. Fitur smart door lock meningkatkan keamanan dan kenyamanan.<br /><br/>\n\nBima A ideal bagi Anda yang menginginkan rumah lebih praktis dan efisien, cocok untuk keluarga kecil. Sementara, Bima B menawarkan ruang lebih luas, cocok bagi keluarga yang membutuhkan tambahan area untuk aktivitas atau pengembangan di masa depan.', 'wiratama-estate-3/bima/wr-estate-3-hero-1.webp', 'wiratama-estate-3/bima/wr-estate-3-hero-2.webp', 'wiratama-estate-3/bima/featured-bima.webp', '2 Kamar Tidur|apartment-icon-bed, Kloset Duduk|apartment-icon-toilet, Carport|apartment-icon-car, Smart Door Lock|apartment-icon2, Kusen Alumunium|apartment-icon-kusen, Halaman Samping (Bima B)|apartment-icon-tree', 'bima', 'wiratama-estate-3/bima/bima-thumb.webp', 'x2, x1, 30x60 / 96 m²', 460000000, '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL),
(2, 1, 'Arjuna', 'Temukan hunian dua lantai dengan desain modern dan fungsional melalui pilihan tipe Arjuna A, B, C, D. Setiap rumah dilengkapi dengan 2 kamar tidur, 2 kamar mandi, dan daya listrik 2200 watt. Sistem keamanan semakin lengkap dengan smart door lock yang sudah terpasang.<br /><br/>\n\n\nMasing-masing tipe menawarkan luas tanah berbeda, yang dapat disesuaikan dengan kebutuhan Anda:<br /><br/>\n\n\n    Arjuna A (50x60 m²) cocok untuk keluarga yang mencari kenyamanan di lahan yang lebih kompak.\n    Arjuna B (50x75 m²) memberikan ruang lebih besar untuk halaman atau area tambahan.\n    Arjuna C (50x96 m²) menawarkan kelapangan yang cukup untuk berbagai aktivitas outdoor.\n    Arjuna D (50x120 m²) hadir dengan ruang paling luas, sempurna bagi keluarga yang menginginkan hunian lebih lapang dan fleksibel.', 'wiratama-estate-3/arjuna/wr-estate-3-hero-1.webp', 'wiratama-estate-3/arjuna/wr-estate-3-hero-2.webp', 'wiratama-estate-3/arjuna/featured-arjuna.webp', '2 Kamar Tidur|apartment-icon-bed, 2 Lantai|apartment-icon-building, Kloset Duduk|apartment-icon-toilet, Carport|apartment-icon-car, Smart Door Lock|apartment-icon2, Kusen Alumunium|apartment-icon-kusen', 'arjuna', 'wiratama-estate-3/arjuna/arjuna-thumb.webp', 'x2, x1, 50x60 / 75 / 96 / 120 m²', 650000000, '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL),
(3, 1, 'Ruko Hunian', 'Tipe Ruko Hunian di Wiratama Estate 3 menawarkan konsep multifungsi dengan luas bangunan dan tanah 63x60 m². Tipe ini dirancang khusus bagi Anda yang menginginkan hunian nyaman sekaligus tempat usaha.<br /><br/>\n\n\nDilengkapi 1 kamar tidur, 1 kamar mandi, dan daya listrik 2200 watt, serta ditambah dengan Pagar Besi Hollow untuk keamanan maksimal. Taman kecil di depan ruko ini menambah kesan asri, menjadikan Tipe Ruko Hunian pilihan ideal bagi yang ingin tinggal dan berbisnis dalam satu tempat.', 'wiratama-estate-3/rukan/wr-estate-3-hero-1.webp', 'wiratama-estate-3/rukan/wr-estate-3-hero-2.webp', 'wiratama-estate-3/rukan/featured-rukan.webp', 'Teras Koridor|apartment-icon4, Carport|apartment-icon-car, Taman|apartment-icon-tree, Kamar Mandi|apartment-icon-bath, Kamar Tidur|apartment-icon-bed, Teras Balkon Lt. 2|apartment-icon-teras1', 'ruko-hunian', 'wiratama-estate-3/rukan/rukan-thumb.webp', 'x1, x1, 63x60 m²', 950000000, '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL),
(4, 2, 'Tipe 36+7,5', 'Hunian modern minimalis dengan luas bangunan 43,5 m² dan pilihan luas tanah 72/108/164 m² ini menawarkan kenyamanan dengan desain praktis yang memaksimalkan fungsi ruang. Tipe 36+7,5 dilengkapi dengan 2 kamar tidur, 1 kamar mandi, serta carport untuk parkir kendaraan.<br/><br/>\r\n\r\nKusen berbahan aluminium memberikan tampilan elegan sekaligus ketahanan yang baik, menjadikan hunian ini tidak hanya nyaman tetapi juga tahan lama. Pilihan ideal bagi keluarga kecil yang mencari rumah modern dengan lingkungan asri di Wiratama Residence 2.', 'wiratama-residence-2/tipe-a/hero1-tipe-a.webp', 'wiratama-residence-2/tipe-a/hero2-tipe-a.webp', 'wiratama-residence-2/tipe-a/featured-tipe-a.webp', '2 Kamar Tidur|apartment-icon-bed, Kloset Duduk|apartment-icon-toilet, Carport|apartment-icon-car, Kusen Alumunium|apartment-icon-kusen', 'tipe-435', 'wiratama-residence-2/tipe-a/thumb-tipe-a.webp', 'x2, x1, 43.5x72 / 108 / 164 m²', 465000000, '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL),
(5, 2, 'Tipe 32+5,5', 'Hunian Tipe 32+5,5 memiliki luas bangunan 37,5 m² dan pilihan luas tanah mulai dari 60 m² hingga 149 m², ideal untuk keluarga kecil yang mendambakan hunian modern dan fungsional. Hunian ini dilengkapi dengan 2 kamar tidur, 1 kamar mandi, dan carport untuk kenyamanan parkir.<br/><br/>\r\n\r\nDengan penggunaan kusen aluminium yang tahan lama, rumah ini menawarkan kesan modern dan elegan, cocok bagi Anda yang mencari kenyamanan di tengah lingkungan asri Wiratama Residence 2.', 'wiratama-residence-2/tipe-b/hero1-tipe-b.webp', 'wiratama-residence-2/tipe-b/hero2-tipe-b.webp', 'wiratama-residence-2/tipe-b/featured-tipe-b.webp', '2 Kamar Tidur|apartment-icon-bed, Kloset Duduk|apartment-icon-toilet, Carport|apartment-icon-car, Kusen Alumunium|apartment-icon-kusen', 'tipe-375', 'wiratama-residence-2/tipe-b/thumb-tipe-b.webp', 'x2, x1, 32.5x60-149 m²', 400000000, '2024-10-18 15:00:56', '2024-10-18 15:00:56', NULL);

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

--
-- Dumping data for table `tb_product_gallery`
--

INSERT INTO `tb_product_gallery` (`id`, `product_id`, `image_file`, `created_at`) VALUES
(1, 1, 'wiratama-estate-3/bima/gallery-bima-1', '2024-10-20 04:35:27'),
(2, 1, 'wiratama-estate-3/bima/gallery-bima-2', '2024-10-20 04:35:27'),
(3, 1, 'wiratama-estate-3/bima/gallery-bima-3', '2024-10-20 04:35:27'),
(4, 2, 'wiratama-estate-3/arjuna/gallery-arjuna-1', '2024-10-20 04:36:13'),
(5, 2, 'wiratama-estate-3/arjuna/gallery-arjuna-2', '2024-10-20 04:36:13'),
(6, 2, 'wiratama-estate-3/arjuna/gallery-arjuna-3', '2024-10-20 04:36:13'),
(7, 3, 'wiratama-estate-3/rukan/gallery-rukan-1', '2024-10-20 04:39:11'),
(8, 3, 'wiratama-estate-3/rukan/gallery-rukan-2', '2024-10-20 04:39:11'),
(9, 3, 'wiratama-estate-3/rukan/gallery-rukan-3', '2024-10-20 04:39:11'),
(10, 4, 'wiratama-residence-2/tipe-a/gallery-tipe-a1', '2024-10-20 09:40:22'),
(11, 4, 'wiratama-residence-2/tipe-a/gallery-tipe-a2', '2024-10-20 09:40:22'),
(12, 4, 'wiratama-residence-2/tipe-a/gallery-tipe-a1', '2024-10-20 09:40:22'),
(13, 5, 'wiratama-residence-2/tipe-b/gallery-tipe-b1', '2024-10-20 09:40:22'),
(14, 5, 'wiratama-residence-2/tipe-b/gallery-tipe-b2', '2024-10-20 09:40:22'),
(15, 5, 'wiratama-residence-2/tipe-b/gallery-tipe-b3', '2024-10-20 09:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_property`
--

CREATE TABLE `tb_property` (
  `id` int NOT NULL,
  `property_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `property_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_product_gallery`
--
ALTER TABLE `tb_product_gallery`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
