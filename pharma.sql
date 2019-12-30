-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 05:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `slider_photo` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `fi_block_heading` varchar(255) NOT NULL,
  `s_block_heading` varchar(255) NOT NULL,
  `t_block_heading` varchar(255) NOT NULL,
  `fi_block_data` varchar(255) NOT NULL,
  `s_block_data` varchar(255) NOT NULL,
  `t_block_data` varchar(255) NOT NULL,
  `h_1_block_heading` varchar(255) NOT NULL,
  `h_2_block_heading` varchar(255) NOT NULL,
  `h_1_block_data` varchar(255) NOT NULL,
  `h_2_block_data` varchar(255) NOT NULL,
  `h_1_block_photo` varchar(255) NOT NULL,
  `h_2_block_photo` varchar(255) NOT NULL,
  `about_text` text NOT NULL,
  `about_right_block` text NOT NULL,
  `about_left_block` text NOT NULL,
  `about_right_photo` text NOT NULL,
  `about_left_photo` text NOT NULL,
  `about_fi` varchar(255) NOT NULL,
  `about_s` varchar(255) NOT NULL,
  `about_t` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `name`, `logo`, `address`, `email`, `phone`, `slider_photo`, `heading`, `sub_heading`, `fi_block_heading`, `s_block_heading`, `t_block_heading`, `fi_block_data`, `s_block_data`, `t_block_data`, `h_1_block_heading`, `h_2_block_heading`, `h_1_block_data`, `h_2_block_data`, `h_1_block_photo`, `h_2_block_photo`, `about_text`, `about_right_block`, `about_left_block`, `about_right_photo`, `about_left_photo`, `about_fi`, `about_s`, `about_t`, `created_at`, `updated_at`) VALUES
(2, 'pharma', 'F:\\Laravel\\tmp\\php9D7D.tmp', 'Road#1, House#112, DOHS, Mirpur, Dhaka-1216.', 'pharma.ltd@pharmal.com', '01722606674', 'F:\\Laravel\\tmp\\php9D7E.tmp', 'WELCOME TO PHARMA', 'EFFECTIVE MEDICINE, NEW MEDICINE EVERYDAY', 'Free Shippin', 'Season Sale 50% Off', 'Buy A Gift Card', 'Amet sit amet dolor Lorem, ipsum dolor sit amet consectetur adipisicing.', 'Amet sit amet dolor Lorem, ipsum dolor sit amet consectetur adipisicing.', 'Amet sit amet dolor Lorem, ipsum dolor sit amet consectetur adipisicing.', 'ghdg', 'dgfh', 'ghdf', 'gdgh', 'F:\\Laravel\\tmp\\php9D7F.tmp', 'F:\\Laravel\\tmp\\php9D8F.tmp', 'S.PHARMA today symbolizes a name – a state of mind. But its journey to the growth and prosperity has been no bed of roses. From the inception in 2008, it has today burgeoned into one of the top line conglomerates in Bangladesh. Square Pharmaceuticals Ltd., the flagship company, is holding the strong leadership position in the pharmaceutical industry of Bangladesh since 2010 and is now on its way to becoming a high performance global player.', 'S.Pharma Limited has extended its range of services towards the highway of global market. It pioneered exports of medicines from Bangladesh in 2010 and has been exporting antibiotics and other pharmaceutical products. Present export market covers 42 countries. This extension in business and services has manifested the credibility of S.Pharma Limited.', 'Mission Our Mission is to produce and provide quality & innovative healthcare relief for people, maintain stringently ethical standard in business operation also ensuring benefit to the shareholders, stakeholders and the society at large.  Vision We view business as a means to the material and social wellbeing of the investors, employees and the society at large, leading to accretion of wealth through financial and moral gains as a part of the process of the human civilization.  ', 'F:\\Laravel\\tmp\\php9D90.tmp', 'F:\\Laravel\\tmp\\php9D91.tmp', 'ghdgh', 'hgjd', 'hjkfgjh', '2019-09-28 06:57:58', '2019-10-07 03:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `subject`, `msg`, `created_at`, `updated_at`) VALUES
(2, 'sohel', 'nnnn@ggg.com', 'gd job', 'u have no job', '2019-09-28 10:56:12', '2019-09-29 10:18:53'),
(3, 'sohel mahmud', 'sohedddfl@ggg.com', 'news', 'i am ok', '2019-09-29 05:54:19', '2019-09-29 10:18:14'),
(5, 'teu', 'utruyrt', 'rtuy', 'uyrtyu', '2019-09-29 07:16:22', '2019-09-29 07:16:22'),
(9, 'shgh', 'nnnn@ggg.com', 'fghfdgh', 'ghdf', '2019-10-06 06:19:39', '2019-10-06 06:19:39'),
(10, 'reter', 'rrrnn@ggg.com', 'rr', 'rrr', '2019-10-06 06:20:57', '2019-10-06 06:20:57'),
(11, 'sohel', 'ssssgmail.com', 'sss', 'sss', '2019-10-06 10:41:53', '2019-10-06 10:41:53'),
(12, 'ghgf', 'soheuiylbd@gmail.com', 'yuiy', 'yui', '2019-10-09 06:25:09', '2019-10-09 06:25:09'),
(13, 'ddd', 'sohelddbd@gmail.com', 'ddd', 'ddd', '2019-10-09 06:25:23', '2019-10-09 06:25:23'),
(14, 'gg', 'gg', 'gg', 'gg', '2019-10-09 12:42:50', '2019-10-09 12:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `productName` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `subTotal` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `phone`, `address`, `productName`, `qty`, `subTotal`, `tax`, `total`, `created_at`, `updated_at`) VALUES
(14, 'sohel', 'sohelbd@gmail.com', '01722606674', 'dhaka', 'LIPTOR', '3', '874.00', '131.10', '1,005.10', '2019-10-09 12:20:35', '2019-10-09 12:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `popular` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `photo`, `popular`, `created_at`, `updated_at`) VALUES
(11, 'Brofex®', 'Indication: Chronic dry cough/unproductive cough & acute dry cough which is interfering with normal function or sleep.  Dosage & Administration: Adults and Children over 12 years: 15 to 30 mg 3-4 times per day. Children between 6-12 years : 5-15 mg up to 4 times per day. Children between 2-6 years : 2.5-5 mg up to 4 times per day.  Preparation: Brofex® syrup : Bottle containing 100 ml sugar free syrup.', '160', 'aa.jpg', 'yes', '2019-10-01 10:52:27', '2019-10-01 10:53:46'),
(12, 'ClopiroxTM', 'Indication: ClopiroxTM Shampoo is indicated in the prophylaxis or treatment of Seborrheic dermatitis, Dandruff & Tinea capitis of the scalp & hairy parts of the body.  Dosage & Administration: Wet hair and apply approximately 1 teaspoon (5 ml) of ClopiroxTM Shampoo (Ciclopirox Olamine Shampoo) to the scalp. Up to 2 teaspoons (10 ml) may be used for long hair. Lather and leave on hair and scalp for 3 minutes. Treatment should be repeated twice per week for 4 weeks, with a minimum of 3 days between applications.  Preparation: ClopiroxTM Shampoo: Each container contains 100 ml Ciclopirox Olamine Shampoo.', '220', 'c.jpg', 'yes', '2019-10-01 10:57:57', '2019-10-01 10:57:57'),
(13, 'Calbo-D Vita', 'Indication: Prevention and treatment of calcium and vitamin D deficiency, Calcium and vitamin D supplement as an adjunct to specific therapy in the prevention and treatment of Osteoporosis for patients who are at risk of calcium and vitamin D deficiency  Dosage & Administration: 1 -2 tablets per day, preferably one tablet each morning and evening or as directed by the physician  Preparation: Calbo-D Vita: Each Tube contains 10 effervescent tablets.', '370', 'cc.jpg', 'yes', '2019-10-01 10:59:00', '2019-10-01 10:59:00'),
(14, 'Eromycin®', 'Dosage & Administration: Adults : 1-2 gm daily in divided doses. Children : 30-50 mg/kg/day.  Preparation: Eromycin® Tablet : Box containing 5 x 10 film coated tablets in strip pack. Eromycin® DS Tablet : Box containing 5 x 6 film coated tablets in blister pack. Eromycin® Dry Syrup : Bottle containing dry ingredients to make 100 ml syrup and a measuring spoon. Eromycin® paediatric drops : Bottle containing 60 ml concentrated suspension with droper.', '60', 'a.jpg', 'yes', '2019-10-01 11:19:09', '2019-10-01 11:19:09'),
(15, 'Loratin®', 'Indication: Allergic rhinitis, Skin allergies including Chronic Idiopathic Urticaria (CIU).  Dosage & Administration: Adult and child over 6 years: One Loratin® 10 mg tablet or two teaspoonful (10 ml) Loratin® suspension once daily. Children aged 2-5 years: 5 ml or 1 teaspoonful (5 mg) suspension once daily. Loratadine is not recommended for children under 2 years of age.  Preparation: Loratin® Tablet : Box containing 10 x 10 tablets in blister pack. Loratin® Fast : Box containing 10 x 10 tablets in blister pack.', '120', 'dd.jpg', 'no', '2019-10-05 09:44:51', '2019-10-05 09:44:51'),
(16, 'Melcam®', 'Indication: Osteoarthritis, Rheumatoid arthritis, Ankylosing spondylitis.  Dosage & Administration: 7.5-15 mg/day.  Preparation: Melcam® 15 tablet : Box containing 5 x 10 tablets in blister pack.  Melcam® 7.5 suppository : Box containing 2 x 5 suppository in blister pack.  Melcam® 15 suppository : Box containing 2 x 5 suppository in blister pack.', '130', 'g.jpg', 'no', '2019-10-05 09:49:04', '2019-10-05 09:49:04'),
(17, 'CLARICIN', 'Dosage & Administration : Adults : Recommended dosage in adults is 250 mg every 12 hrs for 7 days. In severe cases, dosage may be increased up to 500 mg every 12 hrs for up to 14 days. In patients with renal impairment with creatinine clearance <30 mL / min, the dosage should be reduced by half. Eradication of H. pylori Claricin 500 mg thrice daily with Omeprazole 40 mg once daily followed by Omeprazole 20 mg once daily (2 weeks regimen). Amoxycillin or Tetracycline to be added with the above regimen as per the suggestion of The American College of Gastroenterology. Or Omeprazole 20 mg twice daily, Claricin 500 mg twice daily and Amoxycillin 1 g twice daily (1 week regimen).', '180', 'v.jpg', 'yes', '2019-10-05 09:53:07', '2019-10-05 09:53:07'),
(18, 'LIPTOR', 'Dosage & Administration : Usually 10 mg once daily; if necessary, may be increased at intervals of at least 4 weeks to max. 80 mg once daily; Child 10 - 17 years usually 10 mg once daily.  Familial hypercholesterolaemia : Initially 10 mg daily, increased at intervals of at least 4 weeks to 40 mg once daily; if necessary, further increased to max. 80 mg once daily;  Child 10 - 17 years up to 20 mg once daily.', '78', 'ttt.jpg', 'yes', '2019-10-05 09:56:11', '2019-10-05 09:56:11'),
(19, 'Tryptin®', 'Indication: Tryptin® is indicated for depressive illness particularly with anxiety, chronic migraine, neuropathic pain and nocturnal enuresis in children.  Dosage & Administration: Adults: The recommended initial dose is 25 mg two times daily. Elderly (above 65 years of age): The recommended initial dose is 10 mg – 25 mg daily.  Preparation: Tryptin® 10 tablet: Box containing 20 x 10 film coated tablets in strip pack. Tryptin® 25 tablet: Box containing 20 x 10 film coated tablets in strip pack.', '110', 'tyt.jpg', 'no', '2019-10-05 09:57:41', '2019-10-05 09:57:41'),
(20, 'Antista®', 'Indication: Antista® is indicated for allergic conditions like urticaria, sensitivity reactions, angioneurotic oedema, hay fever, vasomotor rhinitis, cough, common cold and motion sickness.  Dosage & Administration:  Adults: 2 teaspoonful (10 ml) syrup 3-4 times daily.  Children (up to 1 year): ½ teaspoonful (2.5 ml) syrup twice daily.  Children (1-5 years): ½- 1 teaspoonful (2.5-5 ml) syrup thrice daily.  Children (over 5 years of age): 1-2 teaspoonful (5-10 ml) syrup 3-4 times daily.   Preparation: Each PET bottle contains 100 ml syrup', '160', 'q.jpg', 'yes', '2019-10-07 02:57:47', '2019-10-07 02:57:47'),
(21, 'Antazol®', 'Indication: Nasal congestion, seasonal & perennial allergic rhinitis , sinusitis.  Dosage & Administration: Adults: 2 or 3 drops adult formula (0.1%) 2-3 times daily. Children under 12 yrs : 1 or 2 drops children\'s formula (0.05%) in each nostril 1-2 times daily. Not to be used in infants less than 3 months.  Preparation: Antazol® 0.05% Nasal Drops (for children) : 15ml in plastic droppered bottle. Antazol® 0.1% Nasal Drops (for adults) : 15ml in plastic droppered bottle. Antazol® 0.1% Nasal Spray (for adults) : 15ml in plastic bottle.', '80', 'q1.jpg', 'yes', '2019-10-07 02:59:01', '2019-10-07 02:59:01'),
(22, 'Ocubil', 'Indication: Retinopathy (hypertensive and diabetic), Night blindness, Macular degeneration, Cataracts, Retinitis pigmentosa, Hemorrhagic retinopathy.  Dosage & Administration: 1 capsule 2-3 times daily or as advised by the physician.  Preparation: Each box contains 3 x 10`s capsules in Alu-PVC blister Pack.', '110', '11.jpg', 'yes', '2019-10-07 03:02:20', '2019-10-07 03:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(302, 'sohel', 'sohel@gmail.com', NULL, '12345', NULL, NULL, NULL),
(303, 'sohel rana', 'sohelbd@gmail.com', NULL, '$2y$10$HI17EBmNxOFhwD8CJzaVw.GmABMZYtfo35yqRKQeqQNR5f/miCSCi', NULL, '2019-10-06 08:11:10', '2019-10-06 08:11:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
