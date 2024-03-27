-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 07:27 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aavishkar_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(100) NOT NULL,
  `fnm` varchar(100) NOT NULL,
  `lnm` varchar(100) NOT NULL,
  `fathernm` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `adhaarno` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `parentprof` varchar(100) NOT NULL,
  `codept` varchar(500) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `whatsappno` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `studmno` varchar(50) NOT NULL,
  `pmno` varchar(50) NOT NULL,
  `lastexam` varchar(100) NOT NULL,
  `yrofpassing` varchar(50) NOT NULL,
  `instnm` varchar(100) NOT NULL,
  `pr` varchar(50) NOT NULL,
  `std` varchar(50) NOT NULL,
  `schoolnm` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `collegenm` varchar(100) NOT NULL,
  `othercourse` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `fnm`, `lnm`, `fathernm`, `dob`, `gender`, `adhaarno`, `photo`, `parentprof`, `codept`, `designation`, `address`, `whatsappno`, `email`, `studmno`, `pmno`, `lastexam`, `yrofpassing`, `instnm`, `pr`, `std`, `schoolnm`, `course`, `sem`, `collegenm`, `othercourse`, `status`, `date`) VALUES
(1, 'Nikita', 'Pandey', 'Gaurav', '2005-03-25', 'female', '548550008000', 'nikita.png', 'Job', 'Ashok Pvt. Ltd.', 'Manager', 'B/No. 202, 2nd floor, Triveni Apartment, Indira Chowk, Indore.', '9856754654', 'pandeynikita88@gmail.com', '9856754654', '9954980197', 'HSC', '2022', 'Alpine Public School', '81%', 'BCA', '', '', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-08-05'),
(2, 'Kavya', 'Sharma', 'Ketan', '2006-06-12', 'female', '548558676645', 'kavya.png', 'Business', 'Ketan Electronics Ltd.', 'Owner', 'B/No. 501, 5th floor, Avni Heights, Patnipura, Indore.', '7806593963', 'kavya.sharma33@gmail.com', '7806593963', '9954900678', 'SSC', '2022', 'Dawn Valley School', '75%', '11th & 12th', 'Jivan Public School', '', '', '', '', 'confirmed', '2022-08-08'),
(3, 'Priyanka', 'Solanki', 'Jitendra', '2005-03-29', 'female', '501896445890', 'priyanka.png', 'Business', 'Gokul Dairy', 'Owner', 'B/No. 104,Suhani Society, opp. TI Mall, Indore.', '8128777539', 'priya03.solanki@gmail.com', '8128777539', '7774891321', 'HSC', '2022', 'Alpine Public School', '78%', 'BCA', '', ' ', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-08-11'),
(4, 'Neha', 'Pandya', 'Natwarlal', '2007-07-12', 'female', '900897666453', 'neha.png', 'Job', 'Aditya Groups Ltd.', 'Senior Production Associate', 'Pandya Villa, near Angle Garden, Indore.', '8875690310', 'neha675@gmail.com', '8875690310', '9859099133', '11th', '2022', 'Krishna Public School', '75%', '12th', 'Krishna Public School', 'MS-Office', ' ', '', '', 'confirmed', '2022-08-14'),
(5, 'Sudhanshu', 'Vyas', 'Niketan', '2005-12-03', 'male', '999870544970', 'sudhanshu.png', 'Job', 'Akash Oils Ltd.', 'Controller', '135, Babu Lalchand Chajlani Rd, Nai Duniya, Siddharth Nagar, Indore.', '9913985390', 'sudhanshuvyas@gmail.com', '9913985390', '9870913239', 'HSC', '2022', 'Dawn Valley School', '82%', 'BCA', '', ' ', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-08-15'),
(6, 'Vinay', 'Mehta', 'Arvind', '2005-04-30', 'male', '709125000878', 'vinay.png', 'Job', 'Vandana Plastic Store', 'Store Manager', 'B/No.8, Bansal Society, Jawahar Rd, Indore.', '7999870018', 'vinay9876@gmail.com', '7999870018', '9176799890', 'HSC', '2022', 'Dawn Valley School', '82%', 'BCA', '', 'PageMaker, CorelDRAW, Photoshop', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-08-15'),
(7, 'Shruti', 'Manek', 'Niraj', '2006-02-06', 'female', '888097659084', 'shruti.png', 'Job', 'VBC Bank Ltd.', 'Cashier', '102, Darshan Heights, near Meghdoot Garden, Indore.', '9983739069', 'manekshruti23@gmail.com', '9983739069', '9987690897', 'SSC', '2022', 'Achievers Public School', '89%', '11th & 12th', 'Achievers Public School', ' ', ' ', '', '', 'confirmed', '2022-08-18'),
(8, 'Nishant', 'Khatri', 'Vibish', '2006-01-14', 'male', '888097786548', 'nishant.png', 'Business', 'Vibish Super Mart', 'Owner', '104, Unique Heights, near Rajwada, Indore.', '9844899069', 'nish09.khatri@gmail.com', '9844899069', '9870109807', 'SSC', '2022', 'Achievers Public School', '84%', '11th & 12th', 'Achievers Public School', 'MS-Office', ' ', '', '', 'confirmed', '2022-08-20'),
(9, 'Akansha', 'Trivedi', 'Vikram', '2005-02-02', 'male', '981280977654', 'akansha.png', 'Business', 'Vyom Utensils', 'Owner', '108, Krishna Park Society, Ring Rd, Indore.', '9889781907', 'ak12.trivedi@gmail.com', '9889781907', '7049788903', 'HSC', '2022', 'Alpine Public School', '85%', 'BCA', '', ' ', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-08-23'),
(10, 'Aditya', 'Pal', 'Shiv', '2006-11-04', 'male', '888809875496', 'aditya.png', 'Job', 'Naksh Sales Ltd.', 'Senior Sales Engineer', 'B/No. 88, Pardesipura, Vinayak Rd, Indore.', '7049166903', 'adi29pal@gmail.com', '7049166903', '9187690067', 'SSC', '2022', 'Dawn Valley School', '70%', 'BCA', '', ' ', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-08-25'),
(11, 'Bhavish', 'Agrawal', 'Pranav', '2000-09-20', 'male', '800050982388', 'bhavish.png', 'Business', 'Bhavish Electronics Ltd.', 'Owner', '303, Ved Apartment, near Raijibaugh, Indore', '9098677769', 'bhavish.2907@gmail.com', '9098677769', '9098766578', 'BCA Sem-6', '2022', 'Sunshine College', '78%', 'MCA', '', 'Node.js', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-08-25'),
(12, 'Nitin', 'Bhardwaj', 'Subhash', '2000-05-15', 'male', '900897765845', 'nitin.png', 'Business', 'Subhash Groups Pvt. Ltd.', 'Owner', '501, Kalyug Apartment, near Vasudev Chowk, Indore', '9988750976', 'nitin8393@gmail.com', '9988750976', '9913230870', 'BCA Sem-6', '2022', 'Sunshine College', '83%', 'MCA', '', ' ', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-09-03'),
(13, 'Apoorva', 'Jain', 'Shekhar', '2000-09-13', 'female', '909994567650', 'apoorva.png', 'Business', 'Vibhuti Groups Pvt. Ltd.', 'Owner', '101, Kalrav Heights, Lakshmibai Nargar, Indore.', '7790835987', 'jain99.apporva@gmail.com', '7790835987', '9987870560', 'BCA Sem-6', '2022', 'Sunshine College', '79%', 'MCA', '', 'ASP.Net', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-09-06'),
(14, 'Sachin', 'Patel', 'Samrat', '2000-03-20', 'male', '897600168096', 'sachin.png', 'Business', 'Samrat Restaurant', 'Owner', '202, Harsiddhi Heights, opp. Khajrana  Ganesh Temple, Indore.', '9348759278', 'sachin69.patel@gmail.com', '9348759278', '7098900548', 'BCA Sem-6', '2022', 'Sunshine College', '86%', 'MCA', '', ' ', 'Sem-1', 'Softvision College', '', 'confirmed', '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dt_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mno`, `message`, `dt_time`) VALUES
(1, 'Amit Mishra', 'amit@gmail.com', '9834099699', 'Can I apply for BCA Sem-3.', '2022-08-03 09:06:38'),
(2, 'Aditi Yadav', 'aditi.yadav@gmail.com', '9977723895', 'Can I apply for more than one course.', '2022-08-15 09:08:57'),
(3, 'Jugal Mehta', 'jugal19@gmail.com', '9290195997', 'I completed my BCA here, and learnt a lot of things. It is the best institute.', '2022-08-25 07:45:12'),
(4, 'Tarun Acharya', 'acharyatarun@12gmail.com', '8891066987', 'Amazing institute. The faculty members are caring and supportive.', '2022-09-01 07:45:12'),
(5, 'Naina Goswami', 'naina45@gmail.com', '9918776539', 'I completed my graduation here, it is one of the best place for BCA.', '2022-09-07 07:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(100) NOT NULL,
  `category` varchar(500) NOT NULL,
  `coursenm` varchar(500) NOT NULL,
  `fees` varchar(500) NOT NULL,
  `duration` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category`, `coursenm`, `fees`, `duration`) VALUES
(1, 'HSC (General)', '11th & 12th', '40,000', '2 years'),
(2, 'UG', 'BCA', '90,000', '3 years'),
(3, 'PG', 'MCA', '1,20,000', '2 years'),
(4, 'Basic Course', 'MS-Office', '6,000', '2 months'),
(5, 'Graphics Designing', 'PageMaker, CorelDRAW, Photoshop', '10,000', '6 months'),
(6, 'Web Designing', 'HTML', '3,000', '1 month'),
(7, 'Web Designing', 'CSS', '8,000', '5 months'),
(8, 'Web Deigning', 'JavaScript', '10,000', '2 months'),
(9, 'Programming Language', 'C Language', '4,000', '1.5 months'),
(10, 'Programming Language', 'C++', '5,000', '2 months'),
(11, 'Programming Language', 'C#', '4,000', '1 month'),
(12, 'Programming Language', 'Java', '6,000', '4 months'),
(13, 'Programming Language', 'Python', '2,000/pm', '3-6 months'),
(14, 'Programming Language', 'Android', '7,000', '3 months'),
(15, 'Programming Language', 'Node.js', '6,000', '3 months'),
(16, 'Programming Language', 'React.js', '4 months', '8,000'),
(17, 'Programming Language', 'Angular.js', '6,000', '2.5 months'),
(18, 'Database', 'Oracle', '5,000', '1 month'),
(19, 'Database', 'MySQL', '5,000', '2-3 months'),
(20, 'Database', 'SQL Server', '5,000', '1.5 months'),
(21, 'Database', 'MongoDB', '5,000', '1 month'),
(22, 'Web Programming', 'PHP with MySQL', '6,000', '2-3 months'),
(23, 'Web Programming', 'ASP.Net', '5,000', '1 month'),
(24, 'Web Programming', 'JSP', '5,000', '1 month');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `dt_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mno`, `feedback`, `dt_time`) VALUES
(1, 'Akansha Trivedi', 'ak12.trivedi@gmail.com', '9889781907', 'The institute is awesome. I am so impressed with the institute.', '2022-08-25 08:12:34'),
(2, 'Sudhanshu Vyas', 'sudhanshuvyas@gmail.com', '9913985390', 'The faculties here are so good and supportive.', '2022-08-25 08:12:34'),
(3, 'Aditya Pal', 'adi29pal@gmail.com', '7049166903', 'A fantastic institute! The faculties are very good.', '2022-08-26 08:12:34'),
(4, 'Vinay Mehta', 'vinay9876@gmail.com', '7999870018', 'It is one of the best institute.', '2022-08-26 08:12:34'),
(5, 'Bhavish Agrawal', 'bhavish.2907@gmail.com', '9098677769', 'The teachers are very friendly. They are just wonderful.', '2022-08-28 08:12:34'),
(6, 'Nikita Pandey', 'pandeynikita88@gmail.com', '9856754654', 'Good faculty, excellent teaching, good education environment.', '2022-08-28 22:16:29'),
(7, 'Nishant Khatri', 'nish09.khatri@gmail.com', '9844899069', 'Best institute with best faculty.', '2022-08-29 22:16:29'),
(8, 'Shruti Manek', 'manekshruti23@gmail.com', '9983739069', 'The teachers are amazing, we learn so much from them.', '2022-09-01 22:16:29'),
(9, 'Neha Pandya', 'neha675@gmail.com', '8875690310', 'The quality of education is nice and the teachers are very supportive.', '2022-09-03 22:16:29'),
(10, 'Nitin Bhardwaj\r\n', 'nitin8393@gmail.com', '9988750976', 'Very nice experience being here...quality of teaching is just wonderful.', '2022-09-09 22:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `message`, `date`) VALUES
(1, 'Independence Day Holiday', 'Tomorrow is Independence Day, so there will be a holiday.', '2022-08-15'),
(2, 'Seminar', 'Tomorrow there will be a seminar for everyone.', '2022-08-19'),
(3, 'Ganesh Chaturthi Holiday', 'Tomorrow there will be a holiday for Ganesh Chaturthi.', '2022-08-31'),
(5, 'Holiday Tomorrow', 'Due to heavy rain alert, tomorrow is holiday.', '2022-09-09'),
(6, 'Webinar', 'Tomorrow there will a webinar for all of you. Kindly visit the link https://webinar.com tomorrow.', '2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `studquery`
--

CREATE TABLE `studquery` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `query` varchar(1000) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `dt_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studquery`
--

INSERT INTO `studquery` (`id`, `name`, `email`, `mno`, `query`, `reply`, `dt_time`) VALUES
(1, 'Kavya Sharma', 'kavya.sharma33@gmail.com', '7806593963', 'I am not getting messages.', 'Your admission is not confirmed yet. When your admission will be confirmed you will receive messages.', '2022-08-28 05:37:15'),
(2, 'Apoorva Jain', 'jain99.apporva@gmail.com', '7790835987', 'I am learning ASP.Net, can I also apply for another course?', 'Yes, you can apply.', '2022-09-08 09:00:23'),
(3, 'Vinay Mehta', 'vinay9876@gmail.com', '7999870018', 'I have doubts in communication skills, so can I come to understand them this evening?', 'Yes, you can come.', '2022-09-09 08:32:48'),
(4, 'Sachin Patel', 'sachin69.patel@gmail.com', '9348759278', 'I went out today with my family, so can I submit my assignments tomorrow.', 'Yes, you can.', '2022-09-12 08:32:48'),
(5, 'Priyanka Solanki', 'priya03.solanki@gmail.com', '8128777539', 'My parents want to meet Mr. Pravin Varma, so can we come this evening?', 'Yes, you can surely come.', '2022-09-12 08:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(100) NOT NULL,
  `fnm` varchar(100) NOT NULL,
  `lnm` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `fnm`, `lnm`, `email`, `mno`, `password`, `usertype`) VALUES
(1, 'Tanu', 'Sharma', 'sharma11.ts@gmail.com', '9996348876', '08t10', 'admin'),
(2, 'Nikita', 'Pandey', 'pandeynikita88@gmail.com', '9856754654', 'nikita', 'user'),
(3, 'Akansha', 'Trivedi', 'ak12.trivedi@gmail.com', '9889781907', 'akansha', 'user'),
(4, 'Priyanka', 'Solanki', 'priya03.solanki@gmail.com', '8128777539', '@priya', 'user'),
(5, 'Neha', 'Pandya', 'neha675@gmail.com', '8875690310', 'neha675', 'user'),
(6, 'Sudhanshu', 'Vyas', 'sudhanshuvyas@gmail.com', '9913985390', 'sudhanshu99', 'user'),
(7, 'Vinay', 'Mehta', 'vinay9876@gmail.com', '7999870018', 'vinay', 'user'),
(8, 'Shruti', 'Manek', 'manekshruti23@gmail.com', '9983739069', 'shruti23', 'user'),
(9, 'Nishant', 'Khatri', 'nish09.khatri@gmail.com', '9844899069', 'nish09', 'user'),
(10, 'kavya', 'Sharma', 'kavya.sharma33@gmail.com', '7806593963', 'kavya33', 'user'),
(11, 'Aditya', 'Pal', 'adi29pal@gmail.com', '7049166903', 'adi29', 'user'),
(12, 'Bhavish', 'Agrawal', 'bhavish.2907@gmail.com', '9098677769', 'bhavish', 'user'),
(13, 'Nitin', 'Bhardwaj', 'nitin8393@gmail.com', '9988750976', 'nitin@', 'user'),
(14, 'Apoorva', 'Jain', 'jain99.apporva@gmail.com', '7790835987', '99apporva', 'user'),
(15, 'Sachin', 'Patel', 'sachin69.patel@gmail.com', '9348759278', 'sachin69', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studquery`
--
ALTER TABLE `studquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studquery`
--
ALTER TABLE `studquery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
