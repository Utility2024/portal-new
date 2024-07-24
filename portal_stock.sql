-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2024 at 10:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint UNSIGNED NOT NULL,
  `sap_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_first` bigint UNSIGNED NOT NULL,
  `in` bigint UNSIGNED DEFAULT NULL,
  `out` bigint UNSIGNED DEFAULT NULL,
  `last_stock` bigint UNSIGNED DEFAULT NULL,
  `minimum_stock` bigint UNSIGNED NOT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `sap_code`, `description`, `type`, `qty_first`, `in`, `out`, `last_stock`, `minimum_stock`, `unit`, `information`, `price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, '7028-00002', 'ALUMUNIUM TAPE, SIZE: 48mm X 50m', 'Indirect Material', 1, NULL, NULL, 1, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(2, '7028-00022', 'CLEANING SPATULA', 'Indirect Material', 2, NULL, NULL, 2, 1, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(3, '7028-00025', 'HAND GLOVE PU PALM (GREY)', 'Indirect Material', 0, NULL, NULL, 0, 5, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(4, '7028-00040', 'Lakban Tape Daimaru Tran (2\'\'X90yards)', 'Indirect Material', 11, NULL, NULL, 11, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(5, '7028-00041', 'Mounting Tape For Chip (250mm)', 'Indirect Material', 4, NULL, NULL, 4, 1, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(6, '7028-00068', 'Zebra Pen Double Blue', 'Indirect Material', 6, NULL, NULL, 6, 3, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(7, '7028-00375', 'PLASTIC WRAPPING SIZE 50cmx200mx17micron', 'Indirect Material', 2, NULL, NULL, 2, 1, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(8, '7028-00401', 'Plastik Clip Size 15X10 CM', 'Indirect Material', 3, NULL, NULL, 3, 1, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(9, '7028-00599', 'STICKYMAT BLUE 24\"X36\"', 'Indirect Material', 0, NULL, NULL, 0, 3, 'box', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(10, '7028-00058', 'Tessa Floor Tape Zebra (Yel-Bl) 5Cmx33cm', 'Office Supply', 3, NULL, NULL, 3, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(11, '7028-00215', 'Cutter Big', 'Office Supply', 2, NULL, NULL, 2, 1, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(12, '7028-00243', 'Tessa Tape Floor 5CM Red', 'Office Supply', 4, NULL, NULL, 4, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(13, '7028-00250', 'MARKER BOARD BLUE', 'Office Supply', 1, NULL, NULL, 1, 1, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(14, '7028-00260', 'REFILL SPIDOL SNOWMAN WHITEBOARD (BLACK, BLUE, RED)', 'Office Supply', 1, NULL, NULL, 1, 1, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(15, '7028-00263', 'Tessa Tape Yellow 5CM Yellow', 'Office Supply', 2, NULL, NULL, 2, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(16, '7028-00264', 'Tessa Tape Floor 5CM Blue', 'Office Supply', 2, NULL, NULL, 2, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(17, '7028-00272', 'BATERAI ABC KOTAK 9V', 'Office Supply', 0, NULL, NULL, 0, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(18, '7028-00299', 'Tessa Floor 5Cm Green', 'Office Supply', 5, NULL, NULL, 5, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(19, '7028-00360', 'Baterai AAA 1.5Volt Alkaline', 'Office Supply', 10, NULL, NULL, 10, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(20, '7028-00369', 'Ring Besar', 'Office Supply', 42, NULL, NULL, 42, 10, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(21, '7028-00436', 'Baterai ABC Size D (Big)', 'Office Supply', 2, NULL, NULL, 2, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(22, '7028-00525', 'Tessa Tape Floor Black', 'Office Supply', 3, NULL, NULL, 3, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(23, '6028-00001', 'ENGINEER MICRO NIPERS NSX-04', 'Spare Part', 3, NULL, NULL, 3, 3, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(24, '6028-00336', 'CABLE 3 X 1.5MM , 50M ( WHITE )', 'Spare Part', 5, NULL, NULL, 5, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(25, '6028-00338', 'Cable 2  0.75MM, 50M (Black)', 'Spare Part', 2, NULL, NULL, 2, 1, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(26, '6028-00346', 'Grounding cable NYA 1x1.5mm yelow', 'Spare Part', 200, NULL, NULL, 200, 100, 'Roll/meter', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(27, '6028-00347', 'Grounding cable NYA 1x1.5mm solit green', 'Spare Part', 200, NULL, NULL, 200, 100, 'Roll/meter', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(28, '6028-00378', 'Drill Screw 8X3/4', 'Spare Part', 4, NULL, NULL, 4, 1, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(29, '6028-00416', 'NTN BEARING 6202 Z', 'Spare Part', 0, NULL, NULL, 0, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(30, '6028-00478', 'WD-40 412 ML', 'Spare Part', 1, NULL, NULL, 1, 1, 'Botol', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(31, '6028-00479', 'HI-COOK 230G', 'Spare Part', 2, NULL, NULL, 2, 1, 'Botol', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(32, '6028-00484', 'Eco-Shine cleaner 1505-QT', 'Spare Part', 3, NULL, NULL, 3, 1, 'Botol', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(33, '6028-00493', 'Cable ties black 25cm', 'Spare Part', 7, NULL, NULL, 7, 2, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(34, '6028-00513', 'SUN PAPER ( AMPLAS )', 'Spare Part', 0, NULL, NULL, 0, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(35, '6028-00523', 'Cable ties black 30cm', 'Spare Part', 7, NULL, NULL, 7, 2, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(36, '6028-00526', 'Grounding Monitoring', 'Spare Part', 10, NULL, NULL, 10, 5, 'Unit', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(37, '6028-00531', 'Loctite 495', 'Spare Part', 6, NULL, NULL, 6, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(38, '6028-00534', 'Stecker', 'Spare Part', 7, NULL, NULL, 7, 5, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(39, '6028-00537', 'Fan Ionizer, Vessel F120RE', 'Spare Part', 1, NULL, NULL, 1, 1, 'Unit', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(40, '6028-00542', 'Lem Fox', 'Spare Part', 0, NULL, NULL, 0, 1, 'Kaleng', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(41, '6028-00588', 'Alumunium Foil', 'Spare Part', 5, NULL, NULL, 5, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(42, '6028-00694', 'Nitto Tape', 'Spare Part', 6, NULL, NULL, 6, 2, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(43, '6028-00990', 'Skun Cable Bulat Male-Female', 'Spare Part', 3, NULL, NULL, 3, 2, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(44, '6028-00991', 'Skun terminal biru kabel male-female', 'Spare Part', 3, NULL, NULL, 3, 2, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(45, '6028-00993', 'Skun Cable Garpu Isolasi 1.25-5', 'Spare Part', 2, NULL, NULL, 2, 3, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(46, '6028-01144', 'Skun Cable Kecil Kuning RVS S-2-4', 'Spare Part', 8, NULL, NULL, 8, 2, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(47, '6028-01153', 'Pan head screw/ph+galvanis ZP', 'Spare Part', 3, NULL, NULL, 3, 1, 'Pack', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(48, '6028-01233', '3M 1600 T Double Tape PE Foam', 'Spare Part', 3, NULL, NULL, 3, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(49, '6028-01601', 'Terminal Block Grounding 6 Pole M4 6X9MM', 'Spare Part', 22, NULL, NULL, 22, 5, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(50, '6028-01601', 'Terminal Blok Grounding 6 Pole M4 6X9MM', 'Spare Part', 31, NULL, NULL, 31, 4, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(51, '6028-01607', 'I-LITE PIPE 1.7', 'Spare Part', 2, NULL, NULL, 2, 4, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(52, '6028-01609', 'IMPRABOARD ANTISTATIC T5X1200X2400MM', 'Spare Part', 1, NULL, NULL, 1, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(53, '6028-01610', 'I-LITE JOINT LJ-1', 'Spare Part', 0, NULL, NULL, 0, 20, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(54, '6028-01611', 'GREEN TABLE MAT', 'Spare Part', 3, NULL, NULL, 3, 1, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(55, '6028-01665', 'CLEAR ACRILIC 3X1220X2440 BRAND MC', 'Spare Part', 0, NULL, NULL, 0, 1, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(56, '6028-01757', 'Stop Kontak Uticon 6 Lubang', 'Spare Part', 3, NULL, NULL, 3, 3, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(57, '6028-01764', 'Rantai Stainless Steel', 'Spare Part', 1, NULL, NULL, 1, 1, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(58, '6028-01779', 'BROCO STOP KONTAK 4 LUBANG', 'Spare Part', 1, NULL, NULL, 1, 3, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(59, '6028-01878', 'FREON REFRIGERANT R22 13.6KG', 'Spare Part', 3, NULL, NULL, 3, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(60, '6028-01879', 'FREON REFRIGERANT R407C', 'Spare Part', 0, NULL, NULL, 0, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(61, '6028-01880', 'Eterna Kabel Building NYM 3 X1.5MM', 'Spare Part', 8, NULL, NULL, 8, 2, 'Roll', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(62, '6028-01882', 'Broco Saklar Engkel Outbow 1621011', 'Spare Part', 12, NULL, NULL, 12, 4, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL),
(63, '6028-02169', 'Freon 410 A', 'Spare Part', 5, NULL, NULL, 5, 2, 'Pcs', 'Internal', NULL, NULL, '2024-07-16 03:15:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `material_id` bigint UNSIGNED NOT NULL,
  `description_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` bigint UNSIGNED NOT NULL,
  `total_price_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `transactions`
--
DELIMITER $$
CREATE TRIGGER `after_transaction_delete_in` AFTER DELETE ON `transactions` FOR EACH ROW BEGIN
  IF OLD.transaction_type = 'in' THEN
    UPDATE materials
    SET `in` = (SELECT SUM(qty) FROM transactions WHERE material_id = OLD.material_id AND transaction_type = 'in')
    WHERE id = OLD.material_id;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_delete_out` AFTER DELETE ON `transactions` FOR EACH ROW BEGIN
  IF OLD.transaction_type = 'out' THEN
    UPDATE materials
    SET `out` = (SELECT SUM(qty) FROM transactions WHERE material_id = OLD.material_id AND transaction_type = 'out')
    WHERE id = OLD.material_id;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_delete_update_last_stock` AFTER DELETE ON `transactions` FOR EACH ROW BEGIN
  UPDATE materials
  SET last_stock = COALESCE(qty_first, 0) + COALESCE((SELECT SUM(qty) FROM transactions WHERE material_id = OLD.material_id AND transaction_type = 'in'), 0)
                - COALESCE((SELECT SUM(qty) FROM transactions WHERE material_id = OLD.material_id AND transaction_type = 'out'), 0)
  WHERE id = OLD.material_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_insert_in` AFTER INSERT ON `transactions` FOR EACH ROW BEGIN
  IF NEW.transaction_type = 'in' THEN
    UPDATE materials
    SET `in` = (SELECT SUM(qty) FROM transactions WHERE material_id = NEW.material_id AND transaction_type = 'in')
    WHERE id = NEW.material_id;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_insert_out` AFTER INSERT ON `transactions` FOR EACH ROW BEGIN
  IF NEW.transaction_type = 'out' THEN
    UPDATE materials
    SET `out` = (SELECT SUM(qty) FROM transactions WHERE material_id = NEW.material_id AND transaction_type = 'out')
    WHERE id = NEW.material_id;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_insert_update_last_stock` AFTER INSERT ON `transactions` FOR EACH ROW BEGIN
  UPDATE materials
  SET last_stock = COALESCE(qty_first, 0) + COALESCE(`in`, 0) - COALESCE(`out`, 0)
  WHERE id = NEW.material_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_update_in` AFTER UPDATE ON `transactions` FOR EACH ROW BEGIN
  IF NEW.transaction_type = 'in' THEN
    UPDATE materials
    SET `in` = (SELECT SUM(qty) FROM transactions WHERE material_id = NEW.material_id AND transaction_type = 'in')
    WHERE id = NEW.material_id;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_update_out` AFTER UPDATE ON `transactions` FOR EACH ROW BEGIN
  IF NEW.transaction_type = 'out' THEN
    UPDATE materials
    SET `out` = (SELECT SUM(qty) FROM transactions WHERE material_id = NEW.material_id AND transaction_type = 'out')
    WHERE id = NEW.material_id;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_transaction_update_update_last_stock` AFTER UPDATE ON `transactions` FOR EACH ROW BEGIN
  UPDATE materials
  SET last_stock = COALESCE(qty_first, 0) + COALESCE(`in`, 0) - COALESCE(`out`, 0)
  WHERE id = NEW.material_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_insert_transactions` BEFORE INSERT ON `transactions` FOR EACH ROW BEGIN
    IF NEW.transaction_type = 'IN' THEN
        SET NEW.total_price_in = NEW.price * NEW.qty;
    ELSEIF NEW.transaction_type = 'OUT' THEN
        SET NEW.total_price_out = NEW.price * NEW.qty;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_insert_update_total_price` BEFORE INSERT ON `transactions` FOR EACH ROW BEGIN
    IF NEW.transaction_type = 'IN' THEN
        SET NEW.total_price = NEW.total_price_in;
    ELSEIF NEW.transaction_type = 'OUT' THEN
        SET NEW.total_price = NEW.total_price_out;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_transactions` BEFORE UPDATE ON `transactions` FOR EACH ROW BEGIN
  SET NEW.total_price = NEW.price * NEW.qty;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_update_total_price` BEFORE UPDATE ON `transactions` FOR EACH ROW BEGIN
    IF NEW.transaction_type = 'IN' THEN
        SET NEW.total_price = NEW.total_price_in;
    ELSEIF NEW.transaction_type = 'OUT' THEN
        SET NEW.total_price = NEW.total_price_out;
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_material_id_foreign` (`material_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
