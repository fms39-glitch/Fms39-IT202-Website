--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: localhost    Database: watches
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!50503 SET NAMES utf8mb4 */
;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */
;
/*!40103 SET TIME_ZONE='+00:00' */
;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */
;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */
;

--
-- Table structure for table `watches`
--

DROP TABLE IF EXISTS `watches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `watches` (
    `watches_id` int NOT NULL,
    `watches_code` varchar(10) NOT NULL,
    `watches_name` varchar(255) NOT NULL,
    `watches_description` text NOT NULL,
    `watchesMaterial` varchar(50) NOT NULL,
    `watchesWaterResistance` varchar(60) NOT NULL,
    `watches_type_id` int DEFAULT '0',
    `watches_buy_price` decimal(10, 2) NOT NULL,
    `watches_sell_price` decimal(10, 2) NOT NULL,
    `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `date_time_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`watches_id`),
    UNIQUE KEY `watches_code` (`watches_code`),
    KEY `watches_type_id` (`watches_type_id`),
    CONSTRAINT `watches_ibfk_1` FOREIGN KEY (`watches_type_id`) REFERENCES `watches_types` (`watches_type_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `watches`
--

LOCK TABLES `watches` WRITE;
/*!40000 ALTER TABLE `watches` DISABLE KEYS */
;
INSERT INTO
    `watches`
VALUES (
        1,
        'SW001',
        'Apple Watch Series 9',
        'The Apple Watch Series 9 features a powerful S9 chip with advanced health monitoring capabilities. It includes blood oxygen monitoring, ECG app, and crash detection for everyday safety.',
        'Aluminum',
        '50m',
        1,
        299.00,
        399.00,
        '2026-02-26 04:13:43',
        '2026-02-26 04:13:43'
    ),
    (
        2,
        'SW002',
        'Samsung Galaxy Watch 6',
        'The Samsung Galaxy Watch 6 offers comprehensive health tracking with advanced sleep coaching and body composition analysis. It runs on Wear OS and integrates seamlessly with Android devices.',
        'Aluminum',
        '50m',
        1,
        220.00,
        299.00,
        '2026-02-26 04:14:01',
        '2026-02-26 04:14:01'
    ),
    (
        3,
        'SW003',
        'Garmin Venu 3',
        'The Garmin Venu 3 is a premium smartwatch with an AMOLED display and up to 14 days of battery life. It features advanced fitness tracking including nap detection and wheelchair mode.',
        'Fiber Reinforced Polymer',
        '50m',
        1,
        350.00,
        449.00,
        '2026-02-26 04:14:39',
        '2026-02-26 04:14:39'
    ),
    (
        4,
        'SW004',
        'Fitbit Sense 2',
        'The Fitbit Sense 2 is a health focused smartwatch with built in stress management and skin temperature sensors. It offers continuous heart rate monitoring and up to 6 days of battery life.',
        'Aluminum',
        '50m',
        1,
        199.00,
        249.00,
        '2026-02-26 04:15:04',
        '2026-02-26 04:15:04'
    ),
    (
        5,
        'SW005',
        'Google Pixel Watch 2',
        'The Google Pixel Watch 2 combines elegant design with powerful Wear OS features and deep Google integration. It includes Fitbit health tracking, heart rate monitoring, and emergency SOS capabilities.',
        'Recycled Aluminum',
        '50m',
        1,
        280.00,
        349.00,
        '2026-02-26 04:15:17',
        '2026-02-26 04:15:17'
    ),
    (
        6,
        'AW001',
        'Rolex Submariner',
        'The Rolex Submariner is an iconic luxury diving watch crafted from Oystersteel with a unidirectional rotatable bezel. It is water resistant to 300 meters and features the self winding Perpetual movement.',
        'Oystersteel',
        '300m',
        2,
        8000.00,
        11500.00,
        '2026-02-26 04:16:13',
        '2026-02-26 04:16:13'
    ),
    (
        7,
        'AW002',
        'Omega Seamaster 300',
        'The Omega Seamaster 300 is a classic dive watch featuring a stainless steel case and scratch resistant sapphire crystal. It houses the Co-Axial Master Chronometer calibre and is water resistant to 300 meters.',
        'Stainless Steel',
        '300m',
        2,
        4500.00,
        6200.00,
        '2026-02-26 04:16:27',
        '2026-02-26 04:16:27'
    ),
    (
        8,
        'AW003',
        'Tag Heuer Carrera',
        'The Tag Heuer Carrera is a sophisticated chronograph watch inspired by the world of motorsport racing. It features a precise automatic movement and a sleek stainless steel bracelet with a sporty yet elegant design.',
        'Stainless Steel',
        '100m',
        2,
        3200.00,
        4500.00,
        '2026-02-26 04:16:47',
        '2026-02-26 04:16:47'
    ),
    (
        9,
        'AW004',
        'Seiko Presage Cocktail',
        'The Seiko Presage Cocktail Time features a stunning enamel dial inspired by the cosmopolitan cocktail with a deep blue sunburst finish. It is powered by an automatic movement and offers 41 hours of power reserve.',
        'Stainless Steel',
        '50m',
        2,
        350.00,
        495.00,
        '2026-02-26 04:17:09',
        '2026-02-26 04:17:09'
    ),
    (
        10,
        'AW005',
        'Tissot Le Locle',
        'The Tissot Le Locle is an elegant Swiss made automatic watch featuring a classic round case with a refined guilloche dial. It is powered by the ETA 2824-2 movement and offers a timeless dress watch aesthetic.',
        'Stainless Steel',
        '30m',
        2,
        450.00,
        625.00,
        '2026-02-26 04:17:24',
        '2026-02-26 04:17:24'
    ),
    (
        11,
        'FW001',
        'Garmin Forerunner 965',
        'The Garmin Forerunner 965 is a premium GPS running watch with a vibrant AMOLED display and up to 31 days of battery life. It features advanced running dynamics, VO2 max estimation, and triathlon mode for serious athletes.',
        'Fiber Reinforced Polymer',
        '100m',
        3,
        450.00,
        599.00,
        '2026-02-26 04:17:40',
        '2026-02-26 04:17:40'
    ),
    (
        12,
        'FW002',
        'Polar Vantage V3',
        'The Polar Vantage V3 is a multisport GPS watch designed for elite athletes with dual frequency GPS and wrist based optical heart rate. It includes recovery tracking, sleep analysis, and fuel and hydration planning for endurance sports.',
        'Aluminum',
        '100m',
        3,
        400.00,
        549.00,
        '2026-02-26 04:17:51',
        '2026-02-26 04:17:51'
    ),
    (
        13,
        'FW003',
        'Suunto Race',
        'The Suunto Race is a high performance sports watch featuring dual frequency GPS for precise route tracking in challenging environments. It offers up to 26 days of battery life in tour mode and supports over 80 sport modes.',
        'Stainless Steel',
        '100m',
        3,
        420.00,
        569.00,
        '2026-02-26 04:18:05',
        '2026-02-26 04:18:05'
    ),
    (
        14,
        'FW004',
        'Coros Pace 3',
        'The Coros Pace 3 is a lightweight GPS sport watch weighing only 30 grams making it ideal for runners and triathletes. It features multi band GPS, optical heart rate monitoring, and an impressive battery life of up to 38 days.',
        'Nylon',
        '50m',
        3,
        180.00,
        229.00,
        '2026-02-26 04:18:19',
        '2026-02-26 04:18:19'
    ),
    (
        15,
        'FW005',
        'Wahoo Elemnt Rival',
        'The Wahoo Elemnt Rival is a multisport GPS watch built specifically for triathletes with automatic sport detection transition tracking. It features a clean minimalist display with customizable data pages and seamless Wahoo ecosystem integration.',
        'Polycarbonate',
        '50m',
        3,
        220.00,
        279.00,
        '2026-02-26 04:18:36',
        '2026-02-26 04:18:36'
    );
/*!40000 ALTER TABLE `watches` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `watches_types`
--

DROP TABLE IF EXISTS `watches_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `watches_types` (
    `watches_type_id` int NOT NULL,
    `watches_type_code` varchar(255) NOT NULL,
    `watches_type_name` varchar(255) NOT NULL,
    `watches_ShelfNumber` int NOT NULL,
    `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`watches_type_id`),
    UNIQUE KEY `watches_type_code` (`watches_type_code`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `watches_types`
--

LOCK TABLES `watches_types` WRITE;
/*!40000 ALTER TABLE `watches_types` DISABLE KEYS */
;
INSERT INTO
    `watches_types`
VALUES (
        1,
        'SM',
        'SmartWatch',
        1,
        '2026-02-26 04:01:08',
        '2026-02-26 04:01:08'
    ),
    (
        2,
        'AW',
        'AnalogWatch',
        2,
        '2026-02-26 01:59:44',
        '2026-02-26 01:59:44'
    ),
    (
        3,
        'FW',
        'FitnessWatch',
        3,
        '2026-02-26 02:00:43',
        '2026-02-26 02:00:43'
    );
/*!40000 ALTER TABLE `watches_types` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `watches_users`
--

DROP TABLE IF EXISTS `watches_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `watches_users` (
    `watches_user_id` int NOT NULL AUTO_INCREMENT,
    `email_address` varchar(255) NOT NULL,
    `password` varchar(64) NOT NULL,
    `pronouns` varchar(60) NOT NULL,
    `first_name` varchar(60) NOT NULL,
    `last_name` varchar(60) NOT NULL,
    `phone_number` varchar(60) NOT NULL,
    `date_time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `date_time_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`watches_user_id`),
    UNIQUE KEY `email_address` (`email_address`)
) ENGINE = InnoDB AUTO_INCREMENT = 9 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `watches_users`
--

LOCK TABLES `watches_users` WRITE;
/*!40000 ALTER TABLE `watches_users` DISABLE KEYS */
;
INSERT INTO
    `watches_users`
VALUES (
        1,
        'taylor@guitars.com',
        '3cdfa761361762ddedc01ea1428db10a92e327325f490f7f34f1b1b91d994f22',
        'She/Her',
        'Taylor',
        'swift',
        '555-1234-029',
        '2026-02-13 02:55:41',
        '2026-02-13 02:55:41'
    ),
    (
        2,
        'bradpitt@hollywood.com',
        'bc567e1c398edba45b7762fa3e48a6260537ba62b4fb41667b244aa17a692904',
        'He/Him',
        'Brad',
        'Pitt',
        '444-4321-920',
        '2026-02-13 02:59:03',
        '2026-02-13 02:59:03'
    ),
    (
        3,
        'shahruk@bollywood.com',
        '5533e62c51fa9913f0ec32cd6a1d4e29d72dad07506b4ced6d3cf9ce218a3a31',
        'He/Him',
        'Shahruk',
        'Khan',
        '129-7876-123',
        '2026-02-13 03:26:32',
        '2026-02-13 03:26:32'
    );
/*!40000 ALTER TABLE `watches_users` ENABLE KEYS */
;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */
;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */
;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */
;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */
;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */
;

-- Dump completed on 2026-02-25 23:24:02