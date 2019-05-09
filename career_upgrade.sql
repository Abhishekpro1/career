-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 04:07 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `career_upgrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(8, 'at0578811@gmail.com', 'abhishek'),
(9, 'ashutoshrout@gmail.com', 'ashutosh'),
(10, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `apply_id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `user_id`, `apply_id`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 3),
(4, 0, 3),
(5, 0, 3),
(6, 4, 0),
(7, 3, 53),
(8, 1, 55);

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `college_id` int(4) NOT NULL,
  `college_title` varchar(100) NOT NULL,
  `college_desc` varchar(600) NOT NULL,
  `college_duration` varchar(20) NOT NULL,
  `college_fees` varchar(10) NOT NULL,
  `college_eligibility` varchar(25) NOT NULL,
  `college_link` varchar(30) NOT NULL,
  `course_for` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_id`, `college_title`, `college_desc`, `college_duration`, `college_fees`, `college_eligibility`, `college_link`, `course_for`) VALUES
(1, 'Lyallpur Khalsa College Jalandhar', 'Lyallpur Khalsa College is a multi-faculty co-educational college located in Jalandhar, Punjab. The college is affiliated to Guru Nanak Dev University, Amritsar.', '2 years', '46,800', 'B.A', 'http://lkc.ac.in/', 'ma'),
(2, 'Doaba College CS & IT, Arts, Hotel Mgmt, Science,JMC, Commerce College in Jalandhar', 'Doaba College, Jalandhar is a multifaculty postgraduate co-educational institution of Northern India which serves the Doaba region. The college has been accredited by the National Assessment and Accreditation Council, an autonomous body of UGC. ', '2 years', '60,000', 'B.A', 'http://doabacollege.net/', 'ma'),
(3, 'Kanya Maha Vidyalaya', 'Kanya Maha Vidyalaya is a women''s college located in Jalandhar, Punjab, India, offering undergraduate and postgraduate programmes and diplomas. It has approximately 4000 students and a campus of around 32 acres.', '2 years', '35,200', 'B.A', 'http://www.kmvjla.org/', 'ma'),
(4, 'D.A.V. College, Jalandhar', 'D.A.V. College is a private college based in Jalandhar, Punjab. It was founded in 1918 by Pt. Mehar Chand. The college admits both undergraduates and post-graduates, and career-oriented programs under the purview of the Guru Nanak Dev University, Amritsar. ', '2 years', '42,500', 'B.A', 'http://www.davjalandhar.com/', 'ma'),
(5, 'Hans Raj Mahila Maha Vidyalaya', 'Hans Raj Mahila Maha Vidyalaya is a college in Jalandhar, Punjab. The college was founded by Mahatma Hansraj in 1927 in Lahore, Pakistan. After the partition of Indian and Pakistan the school moved to Jalandhar in 1948. ', '2 years', '56,000', 'B.A', 'https://www.hrmmv.org/', 'ma'),
(6, ' LOVELY PROFESSIONAL UNIVERSITY - [LPU], JALANDHAR', 'Lovely Professional University (LPU) is a Private University situated on the outskirts of Jalandhar, Punjab. It is the largest single-campus university in India, with more than 30,000 students, over 4000 faculties and staff, offering more than 200 programmes.\r\n\r\nLPU is recognized by UGC and is also a member of AIU. The university is ranked high on various parameters by acclaimed bodies and is the recipient of various awards including the Best Private University Award by ASSOCHAM again in 2017, presented by Sh. Prakash Javadekar Union Minister of HRD, Govt. of India.', '2 years', '49000', 'B.A', 'https://www.lpu.in/', 'b.ed'),
(7, 'LOVELY PROFESSIONAL UNIVERSITY - [LPU], JALANDHAR', 'Lovely Professional University (LPU) is a Private University situated on the outskirts of Jalandhar, Punjab. It is the largest single-campus university in India, with more than 30,000 students, over 4000 faculties and staff, offering more than 200 programmes.\r\n\r\nLPU is recognized by UGC and is also a member of AIU. The university is ranked high on various parameters by acclaimed bodies and is the recipient of various awards including the Best Private University Award by ASSOCHAM again in 2017, presented by Sh. Prakash Javadekar Union Minister of HRD, Govt. of India.', '3 years', '100000 ', 'M.Phil', 'https://www.lpu.in/', 'Phd'),
(9, 'CT GROUP OF INSTITUTIONS, Maqsudan, Jalandhar, Punjab ', 'CT is a leading educational group driven by an enthusiasm for excellence in education and eminence in life. A galaxy of educational institutions from pre-schools to postgraduate institutes, with world class infrastructure, salubrious and well maintained Wi-Fi enabled campuses, well equipped libraries Hi- Tech laboratories, dedicated and veteran academician support, an ideal and conducive environment for endowing education that can be benchmarked against the paramount in the world.', '2 years', '25000', 'B.A', 'http://www.ctgroup.in/', 'b.ed'),
(10, 'GOVERNMENT COLLEGE OF EDUCATION, Jalandhar, Punjab ', 'Govt. College of Education, Jalandhar is one of the premier institutions of teacher education of Northern India. It is one of the oldest colleges conducting B.Ed and M.Ed programs. It aims at producing well skilled and efficient teachers. The motto of the college “We live for children” sums up the life of a teacher. Children are the future of the nation and a teacher has the responsibility of nurturing their talent, building their character and making them useful and productive citizens of the country.', '2 years', '-------', 'B.A', 'http://www.gceducation.in/', 'b.ed'),
(11, 'LYALLPUR KHALSA COLLEGE OF EDUCATION FOR WOMEN, JALANDHAR', 'Lyallpur Khalsa College for Women is located in Jalandhar, Punjab. It was established in 1960 as a girl''s section of the Lyallpur Khalsa College. However, overtime it has become an independent, self-supporting school. The hostel has a dormitory established on campus.', '2 years', '55,000', 'B.A', 'http://www.lkcwedu.com/', 'b.ed'),
(12, 'SANT BABA BHAG SINGH INSTITUTE OF EDUCATION - [SBBS], JALANDHAR', 'Sant Baba Bhag Singh Memorial Charitable Society, under the dynamic leadership of Sant Baba Malkit Singh ji, has been providing basic infrastructure facilities to the people living in the areas of the vicinity of Dera Sant Pura Jabbar, near Adampur Doaba, Dist. Jalandhar, by constructing bridges and roads, providing street lights to villages, etc. ', '2 years', '44000', 'B.A', 'www.sbbsuniversity.ac.in', 'b.ed'),
(13, 'ST SOLDIER COLLEGE OF EDUCATION, JALANDHAR', 'St. Soldier Educational Society has its roots long back to the year 1958. Now, St. Soldier Educational Society has become Northern India’s Leading Educational Group with more than 42000+ studen', '2 years', '35000', 'B.A', 'http://stsoldiergroup.in/', 'b.ed'),
(14, 'GURU NANAK DEV UNIVERSITY, AMRITSAR', 'Guru Nanak Dev University is located in Amritsar, Punjab. GNDU was set up by an Act of State Legislature (Act 21 of 1969). The University was established in the year 1969. The Institute offers various UG, PG, Diploma, PG Diploma and Certificate courses in addition to PhD and M.Phil. research programs. Admission to certain courses will be on the basis of Merit whereas many of them accepts various National and State level entrance exams.', '3 years', '52000 ', 'M.Phil', 'https://www.lpu.in/', 'Phd'),
(15, 'THAPAR INSTITUTE OF ENGINEERING AND TECHNOLOGY - [THAPAR], PATIALA', 'Thapar Institute of Engineering and Technology, previously known as Thapar University, is an institute deemed to be university, in Patiala. It was founded in 1956 by Karam Chand Thapar. The institute has been granted full autonomy and the status of deemed-to-be-university by the University Grants Commission.', '3 years', '107900', 'M.Phil', 'www.thapar.edu/', 'Phd'),
(16, 'PUNJABI UNIVERSITY - [PU], PATIALA', 'Punjabi University is a state university located in Patiala, Punjab, India. Punjabi University teaches and researches in science, engineering and technology, humanities, social sciences, performing arts and sports.It was established on the 30 April 1962, and is only the second university in the world to be named after a language, after Hebrew University of Israel.', '3 years', '14878', 'M.Phil', 'www.punjabiuniversity.ac.in/', 'Phd'),
(17, 'APEEJAY INSTITUTE OF MANAGEMENT TECHNICAL CAMPUS - [AIMTC], JALANDHAR', 'Apeejay Institute of Management Jalandhar was established in 1997 under the aegis of the Apeejay Education Society, founded by Dr.Stya Paul. It was granted the status of a technical campus in 2012 by the All India Council of Technical Education.', '3 years', '79,460', 'M.Phil', 'https://aimtc.apeejay.edu/', 'Phd'),
(18, 'GNA UNIVERSITY, PHAGWARA', 'GNA University is a private university in Phagwara, Punjab, India. It was established by State Government Punjab Act no. 17 of 2014. GNA group is a manufacturer of car parts. ', '3 years', '85000', 'M.Phil', 'www.gnauniversity.edu.in/', 'Phd'),
(19, 'LOVELY PROFESSIONAL UNIVERSITY - [LPU], JALANDHAR', 'Lovely Professional University (LPU) is a Private University situated on the outskirts of Jalandhar, Punjab. It is the largest single-campus university in India, with more than 30,000 students, over 4000 faculties and staff, offering more than 200 programmes.\r\n\r\nLPU is recognized by UGC and is also a member of AIU. The university is ranked high on various parameters by acclaimed bodies and is the recipient of various awards including the Best Private University Award by ASSOCHAM again in 2017, presented by Sh. Prakash Javadekar Union Minister of HRD, Govt. of India.', '3 years', '1,38,000', 'B.A', 'https://www.lpu.in/', 'llb'),
(20, 'LOVELY PROFESSIONAL UNIVERSITY - [LPU], JALANDHAR', 'Lovely Professional University (LPU) is a Private University situated on the outskirts of Jalandhar, Punjab. It is the largest single-campus university in India, with more than 30,000 students, over 4000 faculties and staff, offering more than 200 programmes.\r\n\r\nLPU is recognized by UGC and is also a member of AIU. The university is ranked high on various parameters by acclaimed bodies and is the recipient of various awards including the Best Private University Award by ASSOCHAM again in 2017, presented by Sh. Prakash Javadekar Union Minister of HRD, Govt. of India.', '2 years', ' 1,18,000', 'B.A', 'https://www.lpu.in/', 'mba'),
(21, 'APEEJAY INSTITUTE OF MANAGEMENT TECHNICAL CAMPUS - [AIMTC], JALANDHAR', 'Apeejay Institute of Management Jalandhar was established in 1997 under the aegis of the Apeejay Education Society, founded by Dr.Stya Paul. It was granted the status of a technical campus in 2012 by the All India Council of Technical Education.', '2 years', '77,210', 'B.A', 'https://aimtc.apeejay.edu/', 'mba'),
(22, '	\r\nGURU NANAK DEV UNIVERSITY COLLEGE, JALANDHAR', 'Guru Nanak Dev University College, Jalandhar Punjab is established in the year 1973 as Private Institute Educational Institute to provide higher education to build career in the field of Management, Science and Computer Applications. Guru Nanak Dev University College is having Affiliation with reputed UGC. Management of Guru Nanak Dev University College, Jalandhar is working under Prof. (Dr.) Navdeep Singh (Dean).', '2 years', '88,733', 'B.A', 'www.gnducjal.org/', 'mba'),
(23, 'ST SOLDIER INSTITUTE OF ENGINEERING & TECHNOLOGY, JALANDHAR', 'Directorate of Distance Education, I.K Gujral Punjab Technical University, Jalandhar Punjab is established in the year to provide higher education to build career in the field of Management, Humanities and Computer Applications. Directorate of Distance Education, I.K Gujral Punjab Technical University is having Affiliation with reputed UGC and DEB. Management of Directorate of Distance Education, I.K Gujral Punjab Technical University, Jalandhar is working under Dr. Rajneesh Kant Sachdev (Director).', '2 years', '120,000', 'B.A', 'https://www.ssietm.com/', 'mba'),
(24, 'INNOCENT HEARTS GROUP OF INSTITUTIONS, JALANDHAR', 'Innocent Hearts Group of Institutions, Jalandhar Punjab is established in the year 1997 as Private Educational Institute to provide higher education to build career in the field of Management, Computer Applications and Commerce. Innocent Hearts Group of Institutions is having Affiliation with reputed AICTE. Management of Innocent Hearts Group of Institutions, Jalandhar is working under Dr. Shailesh Tripathi (Director).', '2 years', '75,000', 'B.A', 'innocenthearts.in/', 'mba'),
(25, 'CT GROUP OF INSTITUTIONS, JALANDHAR', 'CT Group of Institutions, Jalandhar Punjab is established in the year 1997 to provide higher education to build career in the field of Engineering, Management and Humanities. CT Group of Institutions is having Affiliation with reputed AICTE. Management of CT Group of Institutions, Jalandhar is working under Dr. P. S. Bedi (Director).', '2 years', '84,315', 'B.A', 'www.ctgroup.in/', 'mba'),
(26, 'KCL Institute of Laws, Jalandhar', 'KCL Institute of Laws, Jalandhar Punjab is established in the year 2005 as Private Educational Institute to provide higher education to build career in the field of Law. KCL Institute of Laws is having Affiliation with reputed PCI. Management of KCL Institute of Laws, Jalandhar is working under Daljit Kaur Saggu (Principal).', '3 years', '1,38,000', 'B.A & CAT', 'www.kcllawcollege.com/', 'llb'),
(27, 'APEEJAY INSTITUTE OF MANAGEMENT TECHNICAL CAMPUS - [AIMTC], JALANDHAR', 'Apeejay Institute of Management Jalandhar was established in 1997 under the aegis of the Apeejay Education Society, founded by Dr.Stya Paul. It was granted the status of a technical campus in 2012 by the All India Council of Technical Education.', '2 years', '77,210', 'B.A LLB', 'https://aimtc.apeejay.edu/', 'mba'),
(28, 'INNOCENT HEARTS GROUP OF INSTITUTIONS, JALANDHAR', 'Innocent Hearts Group of Institutions, Jalandhar Punjab is established in the year 1997 as Private Educational Institute to provide higher education to build career in the field of Management, Computer Applications and Commerce. Innocent Hearts Group of Institutions is having Affiliation with reputed AICTE. Management of Innocent Hearts Group of Institutions, Jalandhar is working under Dr. Shailesh Tripathi (Director).', '2 years', '75,000', 'B.A LLB', 'innocenthearts.in/', 'mba'),
(29, 'ST SOLDIER INSTITUTE OF ENGINEERING & TECHNOLOGY, JALANDHAR', 'Directorate of Distance Education, I.K Gujral Punjab Technical University, Jalandhar Punjab is established in the year to provide higher education to build career in the field of Management, Humanities and Computer Applications. Directorate of Distance Education, I.K Gujral Punjab Technical University is having Affiliation with reputed UGC and DEB. Management of Directorate of Distance Education, I.K Gujral Punjab Technical University, Jalandhar is working under Dr. Rajneesh Kant Sachdev (Director).', '2 years', '120,000', 'B.A LLB', 'https://www.ssietm.com/', 'mba'),
(30, 'CT GROUP OF INSTITUTIONS, JALANDHAR', 'CT Group of Institutions, Jalandhar Punjab is established in the year 1997 to provide higher education to build career in the field of Engineering, Management and Humanities. CT Group of Institutions is having Affiliation with reputed AICTE. Management of CT Group of Institutions, Jalandhar is working under Dr. P. S. Bedi (Director).', '2 years', '84,315', 'B.A LLB', 'www.ctgroup.in/', 'mba'),
(31, 'LOVELY PROFESSIONAL UNIVERSITY - [LPU], JALANDHAR', 'Lovely Professional University (LPU) is a Private University situated on the outskirts of Jalandhar, Punjab. It is the largest single-campus university in India, with more than 30,000 students, over 4000 faculties and staff, offering more than 200 programmes.\r\n\r\nLPU is recognized by UGC and is also a member of AIU. The university is ranked high on various parameters by acclaimed bodies and is the recipient of various awards including the Best Private University Award by ASSOCHAM again in 2017, presented by Sh. Prakash Javadekar Union Minister of HRD, Govt. of India.', '2 years', ' 1,18,000', 'B.A LLB', 'https://www.lpu.in/', 'mba');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(3) NOT NULL,
  `visits` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `visits`) VALUES
(1, '371');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`) VALUES
(7, 'Capture233.JPG'),
(8, 'Capture233.JPG'),
(9, '3464.JPG'),
(10, 'Capture1.JPG'),
(11, 'Capture.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_form`
--

CREATE TABLE IF NOT EXISTS `jobs_form` (
  `job_id` int(4) NOT NULL,
  `title` varchar(30) NOT NULL,
  `company` varchar(20) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `salary` varchar(70) NOT NULL,
  `location` varchar(50) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `job_description` varchar(500) NOT NULL,
  `benifits` varchar(500) NOT NULL,
  `requirment` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_form`
--

INSERT INTO `jobs_form` (`job_id`, `title`, `company`, `file_name`, `salary`, `location`, `timing`, `degree`, `job_description`, `benifits`, `requirment`) VALUES
(51, 'hjkhkj', 'hjkh', '', '9887', 'hkjh', 'fhgf67', 'hkjhykjh', '', '', ''),
(52, 'hjkhkj', 'hjkh', '', '9887', 'hkjh', 'fhgf67', 'hkjhykjh', '', '', ''),
(53, 'hjkhkj', 'hjkh', '', '9887', 'hkjh', 'fhgf67', 'hkjhykjh', '', '', ''),
(54, 'hjkhkj', 'hjkh', '', '9887', 'hkjh', 'fhgf67', 'hkjhykjh', '', '', ''),
(55, 'hjkhkj', 'hjkh', '', '9887', 'hkjh', 'fhgf67', 'hkjhykjh', 'Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:', '', ''),
(56, 'hjkhkj', 'hjkh', '', '9887', 'hkjh', 'fhgf67', 'hkjhykjh', 'Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:', 'Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:', 'Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:Job-description:'),
(57, 'Field Officer', 'CADILA PHARMACEUTICA', '', 'CTC Rs. 2.5 LPA plus Incentives', 'around India', 'Full time', 'B Pharmacy candidate', '** Effective Promotion of companyâ€™s products to achieve the Sales Budgets assigned to your territory<br>\r\n** Implementing market & business strategy designed by the management<br>\r\n\r\n** Providing feedback on Companyâ€™s & Competitors products to the Product Management team\r\n\r\n** Identifying Potential markets and Potential Customers in various markets within your territory', '** Ensure the availability of products at all the chemist shops adjacent to the doctorâ€™s chambers.\r\n\r\n** Participate/organize symposia/exhibition /CMEs and to assist the HO team to participate in seminars and annual conference of doctorsâ€™ meets.\r\n\r\n** Scrutinize the doctor prescription potential during joint field work to take corrective measures\r\n\r\n** Responsible to collect data from the market and provide the same to the Product Management Department for launching new products.\r\n\r\n** Colle', '** Ensure the availability of products at all the chemist shops adjacent to the doctorâ€™s chambers.\r\n\r\n** Participate/organize symposia/exhibition /CMEs and to assist the HO team to participate in seminars and annual conference of doctorsâ€™ meets.\r\n\r\n** Scrutinize the doctor prescription potential during joint field work to take corrective measures\r\n\r\n** Responsible to collect data from the market and provide the same to the Product Management Department for launching new products.\r\n\r\n** Colle'),
(58, 'Field Officer', 'CADILA PHARMACEUTICA', '', 'CTC Rs. 2.5 LPA plus Incentives', 'around India', 'Full time', 'B Pharmacy candidate', '** Effective Promotion of companyâ€™s products to achieve the Sales Budgets assigned to your territory<br>\r\n** Implementing market & business strategy designed by the management<br>\r\n\r\n** Providing feedback on Companyâ€™s & Competitors products to the Product Management team\r\n\r\n** Identifying Potential markets and Potential Customers in various markets within your territory', '** Ensure the availability of products at all the chemist shops adjacent to the doctorâ€™s chambers.\r\n\r\n** Participate/organize symposia/exhibition /CMEs and to assist the HO team to participate in seminars and annual conference of doctorsâ€™ meets.\r\n\r\n** Scrutinize the doctor prescription potential during joint field work to take corrective measures\r\n\r\n** Responsible to collect data from the market and provide the same to the Product Management Department for launching new products.\r\n\r\n** Colle', '** Ensure the availability of products at all the chemist shops adjacent to the doctorâ€™s chambers.\r\n\r\n** Participate/organize symposia/exhibition /CMEs and to assist the HO team to participate in seminars and annual conference of doctorsâ€™ meets.\r\n\r\n** Scrutinize the doctor prescription potential during joint field work to take corrective measures\r\n\r\n** Responsible to collect data from the market and provide the same to the Product Management Department for launching new products.\r\n\r\n** Colle'),
(59, 'god', 'god', '', '6543654', 'god', 'god', 'god', 'god', 'god', 'god'),
(67, 'hello', 'hello', '', 'hello', 'v', 'hello', 'hello', 'v', 'hello', 'hello'),
(68, 'hello', 'hello', '', 'hello', 'hello', 'vhello', 'hello', 'hello', 'hello', 'hello'),
(69, 'hello', 'hello', '', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello'),
(70, 'god', 'god', '', 'god', 'god', 'god', 'god', '', '', ''),
(71, ' endctype', ' endctype', '', ' endctype', ' endctype', ' endctype', ' endctype', ' endctype', ' endctype', ' endctype'),
(72, 'hello', 'hello', 'company-logo-big02.jpg', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello'),
(73, 'New', 'new', 'Chrysanthemum.jpg', '10000', 'new', '10:00AM', 'mca', 'new', 'new', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE IF NOT EXISTS `registration_form` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date_of_birth` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`user_id`, `name`, `email`, `number`, `password`, `date_of_birth`) VALUES
(1, 'abhishek', 'at0578811@gmail.com', 945614651, '123456', '01-26-1999'),
(3, 'Loveleen', 'loveleen@gmail.com', 2147483647, 'loveleen', '15/02/1995');

-- --------------------------------------------------------

--
-- Table structure for table `resume_form`
--

CREATE TABLE IF NOT EXISTS `resume_form` (
  `id` int(11) NOT NULL,
  `candidate_first_name` varchar(30) NOT NULL,
  `candidate_last_name` varchar(20) NOT NULL,
  `candidate_birthdate` varchar(15) NOT NULL,
  `candidate_address` varchar(150) NOT NULL,
  `candidate_phone_number` varchar(12) NOT NULL,
  `candidate_email` varchar(50) NOT NULL,
  `candidate_position` varchar(20) NOT NULL,
  `candidate_language` varchar(50) NOT NULL,
  `candidate_experience` varchar(20) NOT NULL,
  `candidate_degree` varchar(30) NOT NULL,
  `candidate_job_type` varchar(15) NOT NULL,
  `candidate_job_location` varchar(20) NOT NULL,
  `candidate_school` varchar(30) NOT NULL,
  `candidate_study_field` varchar(30) NOT NULL,
  `candidate_degree_from` varchar(4) NOT NULL,
  `candidate_degree_to` varchar(4) NOT NULL,
  `candidate_edu_degree` varchar(30) NOT NULL,
  `candidate_activites` varchar(150) NOT NULL,
  `candidate_edu_desc` varchar(100) NOT NULL,
  `candidate_prev_company` varchar(20) NOT NULL,
  `candidate_prev_job_title` varchar(30) NOT NULL,
  `candidate_prev_company_location` varchar(30) NOT NULL,
  `candidate_prev_company_from` varchar(12) NOT NULL,
  `candidate_prev_company_to` varchar(12) NOT NULL,
  `candidate_exp_desc` varchar(150) NOT NULL,
  `candidate_skill` varchar(20) NOT NULL,
  `candidate_skill_x` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL,
  `subscribe_email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `subscribe_email`) VALUES
(1, 'at0578811@gmail.com'),
(2, 'dsfj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
  `id` int(3) NOT NULL,
  `visits` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_form`
--
ALTER TABLE `jobs_form`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resume_form`
--
ALTER TABLE `resume_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `college_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jobs_form`
--
ALTER TABLE `jobs_form`
  MODIFY `job_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resume_form`
--
ALTER TABLE `resume_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
