-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 08:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--
-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `school_number` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `contact_phone_number` varchar(15) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_residence_address` varchar(255) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_industry` varchar(100) DEFAULT NULL,
  `company_phone_number` varchar(15) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `company_city` varchar(50) DEFAULT NULL,
  `company_residence_address` varchar(255) DEFAULT NULL,
  `internship_authorized_person_name` varchar(100) DEFAULT NULL,
  `internship_authorized_person_title` varchar(100) DEFAULT NULL,
  `internship_department` varchar(100) DEFAULT NULL,
  `internship_days` int(11) DEFAULT NULL,
  `internship_start_date` date DEFAULT NULL,
  `internship_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`id`, `id_number`, `name`, `surname`, `school_number`, `department`, `contact_phone_number`, `contact_email`, `contact_residence_address`, `company_name`, `company_industry`, `company_phone_number`, `company_email`, `company_city`, `company_residence_address`, `internship_authorized_person_name`, `internship_authorized_person_title`, `internship_department`, `internship_days`, `internship_start_date`, `internship_end_date`) VALUES
(1, '111111111111111111', 'Ali', 'Yılmaz', 'S12345', 'Computer Science', '5551234567', 'ali@example.com', '123 Elm St', 'Tech Corp', 'IT', '5559876543', 'info@techcorp.com', 'Ankara', 'Kuzey Kampus', 'Ahmet Demir', 'Manager', 'Development', 30, '2024-06-01', '2024-06-30'),
(2, '12345678902', 'Ayşe', 'Kara', 'S12346', 'Electrical Engineering', '5551234568', 'ayse@example.com', '124 Elm St', 'Energy Inc', 'Energy', '5559876544', 'contact@energyinc.com', 'Istanbul', '457 Oak St', 'Mehmet Kaya', 'Director', 'Research', 25, '2024-06-05', '2024-06-30'),
(3, '12345678903', 'Mehmet', 'Beyaz', 'S12347', 'Mechanical Engineering', '5551234569', 'mehmet@example.com', '125 Elm St', 'Auto Works', 'Automotive', '5559876545', 'hr@autoworks.com', 'Izmir', '458 Oak St', 'Canan Yılmaz', 'Engineer', 'Maintenance', 40, '2024-06-01', '2024-07-10'),
(4, '12345678904', 'Fatma', 'Yeşil', 'S12348', 'Civil Engineering', '5551234570', 'fatma@example.com', '126 Elm St', 'Construct Ltd', 'Construction', '5559876546', 'support@constructltd.com', 'Bursa', '459 Oak St', 'Emre Şahin', 'Supervisor', 'Planning', 20, '2024-07-01', '2024-07-20'),
(5, '12345678905', 'Hasan', 'Kırmızı', 'S12349', 'Chemical Engineering', '5551234571', 'hasan@example.com', '127 Elm St', 'Chem Solutions', 'Chemical', '5559876547', 'info@chemsolutions.com', 'Antalya', '460 Oak St', 'Deniz Aydın', 'Chemist', 'Production', 30, '2024-06-15', '2024-07-14'),
(6, '12345678906', 'Zeynep', 'Mavi', 'S12350', 'Industrial Engineering', '5551234572', 'zeynep@example.com', '128 Elm St', 'Industry Pro', 'Manufacturing', '5559876548', 'admin@industrypro.com', 'Gaziantep', '461 Oak St', 'Hakan Yıldız', 'Project Manager', 'Operations', 35, '2024-06-10', '2024-07-14'),
(7, '12345678907', 'Ahmet', 'Sarı', 'S12351', 'Biomedical Engineering', '5551234573', 'ahmet@example.com', '129 Elm St', 'Med Devices', 'Healthcare', '5559876549', 'info@meddevices.com', 'Eskisehir', '462 Oak St', 'Leyla Tekin', 'Supervisor', 'Development', 25, '2024-06-20', '2024-07-15'),
(8, '12345678908', 'Elif', 'Turuncu', 'S12352', 'Environmental Engineering', '5551234574', 'elif@example.com', '130 Elm St', 'Eco Friendly', 'Environmental', '5559876550', 'support@ecofriendly.com', 'Adana', '463 Oak St', 'Gökhan Kar', 'Director', 'Sustainability', 30, '2024-07-01', '2024-07-30'),
(9, '12345678909', 'Kemal', 'Mor', 'S12353', 'Software Engineering', '5551234575', 'kemal@example.com', '131 Elm St', 'Soft Solutions', 'IT', '5559876551', 'contact@softsolutions.com', 'Mersin', '464 Oak St', 'Yasemin Ak', 'Manager', 'Development', 40, '2024-06-01', '2024-07-10'),
(10, '12345678910', 'Selin', 'Gri', 'S12354', 'Aerospace Engineering', '5551234576', 'selin@example.com', '132 Elm St', 'Aero Dynamics', 'Aerospace', '5559876552', 'hr@aerodynamics.com', 'Kayseri', '465 Oak St', 'Murat Yılmaz', 'Engineer', 'Design', 20, '2024-06-25', '2024-07-14'),
(11, '12345678911', 'Yusuf', 'Bordo', 'S12355', 'Architecture', '5551234577', 'yusuf@example.com', '133 Elm St', 'Build Smart', 'Architecture', '5559876553', 'info@buildsmart.com', 'Konya', '466 Oak St', 'Sevim Şahin', 'Architect', 'Planning', 30, '2024-07-01', '2024-07-30'),
(12, '12345678912', 'Seda', 'Lacivert', 'S12356', 'Physics', '5551234578', 'seda@example.com', '134 Elm St', 'Quantum Corp', 'Research', '5559876554', 'support@quantumcorp.com', 'Samsun', '467 Oak St', 'Ali Yücel', 'Scientist', 'Research', 25, '2024-06-15', '2024-07-10'),
(13, '12345678913', 'Burak', 'Eflatun', 'S12357', 'Mathematics', '5551234579', 'burak@example.com', '135 Elm St', 'Math Works', 'Education', '5559876555', 'contact@mathworks.com', 'Trabzon', '468 Oak St', 'Zeynep Tunc', 'Professor', 'Teaching', 20, '2024-06-10', '2024-06-30'),
(14, '12345678914', 'Duygu', 'Beyaz', 'S12358', 'Biology', '5551234580', 'duygu@example.com', '136 Elm St', 'Bio Labs', 'Biotech', '5559876556', 'hr@biolabs.com', 'Ordu', '469 Oak St', 'Fatih Tan', 'Biologist', 'Research', 30, '2024-06-01', '2024-06-30'),
(15, '12345678915', 'Emre', 'Siyah', 'S12359', 'Chemistry', '5551234581', 'emre@example.com', '137 Elm St', 'Chemistry World', 'Chemical', '5559876557', 'info@chemistryworld.com', 'Erzurum', '470 Oak St', 'Nesrin Gül', 'Manager', 'Analysis', 35, '2024-06-05', '2024-07-10'),
(16, '12345678916', 'Pelin', 'Kahverengi', 'S12360', 'Law', '5551234582', 'pelin@example.com', '138 Elm St', 'Legal Firm', 'Legal', '5559876558', 'support@legalfirm.com', 'Van', '471 Oak St', 'Cem Kılıç', 'Lawyer', 'Corporate', 20, '2024-07-01', '2024-07-20'),
(17, '12345678917', 'Mert', 'Açık Mavi', 'S12361', 'Economics', '5551234583', 'mert@example.com', '139 Elm St', 'Finance Solutions', 'Finance', '5559876559', 'hr@financesolutions.com', 'Balıkesir', '472 Oak St', 'Yasemin Akın', 'Economist', 'Analysis', 30, '2024-06-10', '2024-07-09'),
(18, '12345678918', 'Buse', 'Koyu Kırmızı', 'S12362', 'Business Administration', '5551234584', 'buse@example.com', '140 Elm St', 'Business Pro', 'Consulting', '5559876560', 'info@businesspro.com', 'Malatya', '473 Oak St', 'Selim Demir', 'Consultant', 'Management', 25, '2024-06-15', '2024-07-09'),
(19, '12345678919', 'Kerem', 'Pembe', 'S12363', 'Political Science', '5551234585', 'kerem@example.com', '141 Elm St', 'Policy Makers', 'Public Policy', '5559876561', 'contact@policymakers.com', 'Rize', '474 Oak St', 'Melek Yılmaz', 'Advisor', 'Policy', 20, '2024-06-20', '2024-07-09'),
(20, '12345678920', 'Melis', 'Altın', 'S12364', 'Psychology', '5551234586', 'melis@example.com', '142 Elm St', 'Mind Matters', 'Healthcare', '5559876562', 'support@mindmatters.com', 'Mardin', '475 Oak St', 'Okan Kar', 'Psychologist', 'Counseling', 30, '2024-06-25', '2024-07-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
