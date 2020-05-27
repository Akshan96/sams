-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 08:14 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@sas.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin2', 'admin2@sas.com', 'c84258e9c39059a89ab77d846ddab909');

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `admission_form_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `passport_photo` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `native_place` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `permanent_address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `applied_standard` varchar(255) NOT NULL,
  `previous_school` varchar(255) NOT NULL,
  `previous_standard` varchar(255) NOT NULL,
  `previous_percentage` varchar(255) NOT NULL,
  `previous_medium` varchar(255) NOT NULL,
  `std_description` varchar(800) NOT NULL,
  `residential_proof` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `form_status` varchar(255) NOT NULL,
  `submitted_at` varchar(255) NOT NULL,
  `approved_at` varchar(255) NOT NULL,
  `form_reject_reason` varchar(255) NOT NULL,
  `status_changed_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`admission_form_id`, `fname`, `mname`, `lname`, `passport_photo`, `dob`, `native_place`, `religion`, `gender`, `father_name`, `mother_name`, `email`, `telephone`, `mobile`, `address`, `permanent_address`, `city`, `state`, `nationality`, `applied_standard`, `previous_school`, `previous_standard`, `previous_percentage`, `previous_medium`, `std_description`, `residential_proof`, `school_id`, `usr_id`, `form_status`, `submitted_at`, `approved_at`, `form_reject_reason`, `status_changed_by`) VALUES
(1, 'Zoravar ', 'Shikhar', 'Dhawan', '', '2014-06-05', 'India', 'Hindu', 'male', 'Shikhar Dhawan', 'Ayesha Mukherjee', '', '22535487', '7874157115', 'Delhi,India', 'Delhi,India', 'Delhi', 'Delhi', 'India', 'play_group', 'NA', 'NA', 'NA', '', '', '', 13, 10, 'approved', '2017-06-13 11:37:27am', '2017-07-14 01:54:07pm', '', 7),
(2, 'Ziva', 'Mahendra', 'Dhoni', '', '2015-02-01', 'India', 'Hindu', 'female', 'Mahendra Singh Dhoni', 'Sakshi Dhoni', '', '478781874', '98798781567', 'Ranchi, India', 'Ranchi, India', 'Ranchi', 'Jarkhand', 'India', 'play_group', 'NA', 'NA', 'NA', '', '', '', 14, 6, 'approved', '2017-06-13 11:43:09am', '', '', 0),
(3, 'Arjun', 'Sachin', 'Tendulkar', '', '1999-02-04', 'Mumbai', 'Hindu', 'male', 'Sachin Ramesh Tendulkar', 'Anjali Tendulkar', '', '8987897785', '9879787878', 'Mumbai, India', 'Mumbai, India', 'Mumbai', 'Maharashtra', 'India', '11', 'Dhirubhai Ambani International School', '12', '90', '', '', '', 13, 9, 'approved', '2017-06-13 03:35:00pm', '2017-07-14 01:54:12pm', '', 7),
(4, 'test', 'test', 'test', '', '0008-07-07', 'test', 'test', 'male', 'test', 'test', '', 'test', '52172766624', 'test', 'test', 'test', 'test', 'test', '9', 'test', '10', 'test', '', '', '', 1, 6, 'pending', '2017-06-14 09:25:10am', '', '', 0),
(5, 'aaaa', 'aaaa', 'aaaa', '', '1996-03-02', 'aaaa', 'aaaa', 'male', 'aaaa', 'aaaa', '', '321324313', '9858968966', 'aaaaaa', 'aaaaa', 'aaaa', 'dsas', 'dd', '4', 'bb', '3', '98', '', '', '', 13, 6, 'rejected', '2017-11-29 09:13:09pm', '', 'Spam', 1),
(6, 'hhjj', 'afesf', 'hgueiw', '', '1966-05-02', 'ssa', 'www', 'male', 'www', 'www', '', '4857873589', '3875838937', 'weekeshgn', 'dshjgkhkwns', 'wefewg', 'sggs', 'argrag', '3', 'sefs', '2', '98', '', '', '', 2, 6, 'pending', '2017-11-30 10:44:23am', '', '', 0),
(9, 'Abc', 'Pqr', 'Xyz', '', '2006-01-02', 'lol', 'test', 'female', 'lol', 'lol', 'lol', '655656', '456241561', 'lol', 'lol', 'Vadodra', 'Delhi', 'India', '5', 'eaGfGs', '4', 'eGs', 'eSV', 'Describe aboGESGGEEG', '', 13, 11, 'pending', '2018-04-01 08:28:39pm', '', '', 0),
(10, 'Qwerty', 'is', 'lol', '', '2009-05-05', 'tfcj', 'qwf', 'male', 'asd', 'fdfg', 'sdfsg', '354873', '7378', 'fnhum', 'drhrnjmk', 'Vadodra', 'Maharashtra', 'India', '8', 'mu6tfi6,', '7', '56', 'eng', 'Describe about stuavtwbandent', '', 13, 11, 'approved', '2018-04-02 09:17:02am', '2018-05-13 03:40:31pm', '', 1),
(11, 'afaf', 'AgWA', 'GAWg', 'afaf', '2008-05-09', 'qgwgewsfcesCew', 'FEGw', 'male', 'awgfwg', 'wg', 'gQgqg', 'EGqgWGE', 'GweWG', 'wGFWgWG', 'WgWG', 'Ahmedabad', 'Gujarat', 'India', '1', 'qGFWgwe', 'Sr. KG', 'WGEwge', 'EGEGse', 'WegWFFG', '', 3, 11, 'pending', '2018-05-15 06:14:24pm', '', '', 0),
(12, 'vdt', 'vdt', 'vdt', 'vdt', '2012-05-09', 'waFa', 'vdt', 'male', 'vdt', 'vdt', 'vdt', 'vdt', 'vdt', 'wqgq', 'qwagqq', 'Ahmedabad', 'Gujarat', 'India', '6', 'awgwa', '5', 'wag', 'wqgea', 'wgwgaewhwrsg', '', 3, 11, 'pending', '2018-05-15 06:23:21pm', '', '', 0),
(13, 'DS A S', 'DS A S', 'DS A S', 'DS A S', '2000-05-05', 'fsEFefwa', 'DS A S', 'male', 'DS A S', 'DS A S', 'DS A S6', '2823434', '3456822', 'waFawf', 'AWFfAW', 'Ahmedabad', 'Gujarat', 'India', '7', 'aFCaCf', '6', 'AFCASCA', 'ACAC', 'AEVSBVE', '', 1, 11, 'pending', '2018-05-15 06:35:27pm', '', '', 0),
(14, 'Dhrumil', 'Ashish', 'Shukla', 'Dhrumilabc', '1996-02-02', 'abc', 'sex', 'others', 'abc', 'abc', 'abc', 'abc', 'abc', 'AWGf', 'fAWF', 'Ahmedabad', 'Gujarat', 'India', '11', 'EGRZHD', '10', 'XDRJDX', 'DRJ', 'Describe about studentXDRJHZDRN', '', 3, 11, 'pending', '2018-05-15 07:00:15pm', '', '', 0),
(15, 'AFgEG', 'shezse', 'EHGSE', '11.png', '1996-02-02', '575543', 'gaweg', 'male', 'GEWG', 'zhsszh', 'sams@sams.com', '54', '4', '5445', '54', 'Vadodra', 'Maharashtra', 'India', '5', 'qGFWgwe', '3', '88', '687', 'Describe about student', '', 13, 11, 'pending', '2018-05-15 07:08:52pm', '', '', 0),
(16, 'AFgEGeAF', 'shezse', 'EHGSE', 'AFgEGeAF4.png', '1996-02-02', '575543', 'gaweg', 'male', 'GEWG', 'zhsszh', 'sams@sams.com', '54', '4', '5445', '54', 'Vadodra', 'Maharashtra', 'India', '5', 'qGFWgwe', '3', '88', '687', 'Describe about student', '', 13, 11, 'pending', '2018-05-15 07:11:03pm', '', '', 0),
(17, 'adsaf', 'aSF', 'AFS', 'adsafSEGSEG.png', '1996-02-02', 'SGE', 'sdfs', 'female', 'ESGFSG', 'SEGSG', 'SEGS', 'SEGsG', 'SEGSEG', 'SEG', 'SGE', 'Ahmedabad', 'Gujarat', 'India', 'Sr. KG', 'EGS', 'Jr. KG', 'ESG', 'SEG', 'Describe about studentEG', '', 13, 11, 'pending', '2018-05-15 07:17:03pm', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(20) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_code` varchar(255) NOT NULL,
  `school_logo` varchar(255) NOT NULL,
  `school_type` varchar(255) NOT NULL,
  `school_medium` varchar(255) NOT NULL,
  `school_branchno` varchar(255) NOT NULL,
  `school_address` text NOT NULL,
  `school_area` varchar(50) NOT NULL,
  `school_city` varchar(255) NOT NULL,
  `school_pincode` int(10) NOT NULL,
  `school_district` varchar(255) NOT NULL,
  `school_state` varchar(255) NOT NULL,
  `school_email` varchar(255) NOT NULL,
  `school_mobile` varchar(20) NOT NULL,
  `school_phone` varchar(20) NOT NULL,
  `school_website` varchar(255) NOT NULL,
  `school_info` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `last_updated_at` varchar(255) NOT NULL,
  `register_status` varchar(255) NOT NULL,
  `register_reject_reason` varchar(500) NOT NULL,
  `approved_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_code`, `school_logo`, `school_type`, `school_medium`, `school_branchno`, `school_address`, `school_area`, `school_city`, `school_pincode`, `school_district`, `school_state`, `school_email`, `school_mobile`, `school_phone`, `school_website`, `school_info`, `created_by`, `created_at`, `last_updated_by`, `last_updated_at`, `register_status`, `register_reject_reason`, `approved_at`) VALUES
(1, 'Shree Vidyanagar HighSchool', '007', '1.png', 'GSEB', '', '123', 'Usmanpura, Ashram Road, Ahmedabad - 380014, Gujarat, India.', 'usmanpura', 'Ahmedabad', 380014, 'Ahmedabad', 'Gujarat', 'info@shreevidyanagarschool.org', '+917927540407', '+91 97272 87333', 'http://www.shreevidyanagarschool.org/', 'Shree Vidyanagar Education Trust was established in the year 1953 with a commitment to excellence. Since its inception, the school has striven to provide a holistic learning experience that ensures high standards of academic excellence harmonized by manifold co-curricular activities. During a span of 60 years, we have grown into one of the leading foundation in Ahmedabad providing quality education to our students, facilitated by devoted teachers who are trained to channelize their energy and resources towards child centered qualitative learning. The emphasis is on nurturing students to develop to their full potential.', 0, '', 0, '', 'approved', '', '2017-06-10 10:58:50pm'),
(2, 'Vijaynagar Primary & Secondary School', '008', '2.png', 'GSEB', '', '234', 'Near Patrakar Colony, Vijaynagar, Naryanpura, Ahmedabad, Gujarat 380013', 'Naranpura', 'Ahmedabad', 380013, 'Ahmedabad', 'Gujarat', 'vijaynagarschool@gmail.com', '+91 79 27437278', '+91 79 27437278', 'http://www.vijaynagarschool.com/', 'In December 1971 Gujarat Housing Board alloted about 600 MIG flats to the residents for housing purpose.Many of the allottees came to reside in February 1972.Since most of the allottees were young they found it difficult to provide education nearby to their children and wards.\nThis difficulty was realized and we were prompted to start a school .Vijaynagar education society was established in June 1972 and registered under societies act under register No G4/376/Ahd and under trust act under No F/460 in 1972 itself. \nVijaynagar education society is stranded in it\'s devlopedment due to shortage of space. Many of our students have achieved prestige and fame in the field of medicine,pharmacy,teaching profession,modern profession like management,chartered accountants,software engineers, mechanical and other proffession. Vijaynagar Education society has functioned for almost 4 decades. The founder members and others are ageing.\n', 0, '', 0, '', 'approved', '', '2017-06-09 06:25:24pm'),
(3, 'Vishwabharati HighSchool', '009', '3.png', 'GSEB', '', '345', 'Bhaikakanagar, Thaltej, Ahmedabad, Gujarat 380058', 'Thaltej', 'Ahmedabad', 382470, 'Ahmedabad', 'Gujarat', 'Vishwabharati@highschool.com', '+91 8511289606', '+91 8511289606', 'http://www.vishwabharati.com', 'Established in 1963, with a mission to impart excellent education in vernacular language, Vishwabharati came into existence. This was a way the dream came true for a man of hardwork and perfection – Mr. Surendra Maheshwar Shukla, our DADAJI, the pioneer of our vision.\n\nFollowing this, there was SHRI M. N. SHUKLA COLLEGE OF EDUCATION affiliated to Gujarat University, established in the year 1971. And just after four years later in 1975, Vishwabharati Higher Secondary School was started. The beginning was all at Shahpur, a well-known area, in the heart of Ahmadabad\n\nLate eighties and early nineties was the expansion of Western Ahmadabad. The Visionary once again came forward and plunged into launching of the', 0, '', 0, '', 'approved', '', '2017-06-09 04:59:29pm'),
(4, 'Nalanda International School\r\n', '010', '4.png', 'ICSE\r\n', '', '346', 'Sevasi-Mahapura Road, Sevasi, Vadodara, Gujarat 391101', 'Vadodara', 'Vadodara', 391101, 'Vadodara', 'Gujarat', 'info@nalandaschool.org', '+91 265-6533855', '+91 265-6533855', 'http://www.nalandaschool.org/', 'Nalanda International School was established in the year 2004 and is located in the city of art and culture, Vadodara, in Gujarat, only 8 kms. from Alkapuri, the heart of the city. Nalanda International School has been established by the Nalanda Knowledge Foundation, a registered, not-for-profit organization which professionally manages the school. Nalanda International School Baroda stands on a 20 acre site, with beautiful and pleasant landscapes in and around the premises of the school, surrounded with lush greenery all over, and is equipped with environment and child-friendly architecture, which is age appropriate and suitable to the needs of the child. The school strives to be the best school in Baroda and with this thought in mind, Nalanda International School focuses on the all round development of the child in academics, activities and sports. Equal and fair importance is given not only to academics but also to activities and sports, thus ensuring that the child is able to decide and build its own future. Upholding strong values, morals, principles, ideologies and ethics, the school\'s programmes are designed to develop the inquiring and inquisitive mind for the Sciences, the passion and heart for the Arts and the zeal, enthusiasm and physique for Sports.', 0, '', 0, '', 'approved', '', '2017-06-09 04:59:30pm'),
(5, 'Global Indian International School\r\n', '011', '5.png', 'CBSE\r\n', '', '347', 'Godrej Garden City,\nBehind Nirma University,\nOff S.G. Highway, Jagatpur,\nAhmedabad - 382470', 'Jagatpur', 'Ahmedabad', 382470, 'Ahmedabad', 'Gujarat', '	admissions.ahmedabad@globalindianschool.org', '+91 9737077724', '+91 9737077723', 'http://www.giisahmedabad.org/', 'The Global Indian International School, an initiative of Global Schools Foundation, is established with a focused dedication towards shaping well-rounded global citizens. We believe that the finest education of a child comes from the understanding of the real world that he or she lives in. \n\nIt is with this vision that we have created Asia\'s leading international school. Today, our growing network of schools spread over 20 campuses across 7 countries is grooming thousands of students from more than 50 nationalities to become future leaders. Our students gain global exposure and insights through international knowledge-exchange programmes. By tracking the best academic practices around the globe, we constantly strive to give them an unmatched learning experience.\n\nWe are successful in providing holistic education that encourages students to excel in a variety of disciplines, such as academics, sports, music and dramatics.\n', 0, '', 0, '', 'approved', '', '2017-06-09 04:59:31pm'),
(6, 'Urmi School Vadodara\r\n', '012', '6.png', 'CBSE\r\n', '', '348', 'Sama-Savli Road, \nNear Flyover, Sama,Vadodara - 390024\n', 'Sama', 'Vadodara', 390024, 'Vadodara', 'Gujarat', 'urmischool@gmail.com', '+91 8306688899', '(0265) 2712611', 'http://urmischoolonline.com/', 'We at Urmi believe that, the school is one of the most important formal agencies of education. It plays a major role in molding the ideas, habits and attitudes of the children with a view to producing well balanced personalities culturally sound, emotionally stable, mentally alert, morally upright, physically strong socially efficient, vocationally self-sufficient and internationally liberal.\n\n\"All our educational institutions will be communities of work. At these educational institutions the pupils will have facilities to experiment, to discover, to work, to live, where work will fashion character and living will shape lives and like healthy work and like all good life they will form into homes of cooperative communities engaged in elevating cooperation, initiative and accepting responsibility, through an inner urge for self-discipline, self- realization and mutual helpfulness. ', 0, '', 0, '', 'pending', '', ''),
(7, 'Cygnus World School\r\n', '014', '7.png', 'CBSE\r\n', '', '350', 'Motnath Mahadev Road Harni, ', 'Vadodara', 'Vadodara', 390022, 'Vadodara', 'Gujarat', 'reachus@cygnusworldschool.com', '+91 9099901440', '+91 0265 254 0027', 'http://cygnusworldschool.com/', 'Cygnus World School is a new-age, co-educational school with modern academic, \nco-curricular and sports facilities. Spread across 7.3 acres, the school\'s green campus is modelled like an educational village, where-in each of the three schools are self-contained units with individual academic blocks and their own designated play and sports areas.\n 		\nLife at Cygnus is vibrant, exhilarating and dedicated to the joy of learning. We are aware that learning is most rewarding in a community that is lively, co-operative, critical and fundamentally curious. To be such a community of students, teachers, administrators and parents is our consistent endeavour.\nBoth the campus and curriculum have been meticulously designed to aid in the achievement of our goals.', 0, '', 0, '', 'pending', '', ''),
(8, 'AMERICAN SCHOOL OF BARODA\r\n', '015', '8.png', 'CBSE\r\n', '', '351', 'Opp. Sayajipura, Ajwa- Nimeta Road', 'Vadodara', 'Vadodara', 390019, 'Vadodara', 'Gujarat', 'info@asobaroda.org', '0265 654 5155', '0265 654 5155', 'http://www.asobaroda.org', 'Our vision states that: American School of Baroda is a learner-centred community committed to excellence in education having a motto of, “To build a child is better than to repair a man”. Our school has a rich history and tradition. It was opened on June 2003. The school has always enjoyed a reputation for academic excellence and our students continue to excel academically, as evidenced by our results in National competitions and numeracy and literacy tests. We are a highly multicultural school and are proud to have students representing from the world. At ASOB our children grow up surrounded by a range of cultures, religious beliefs and languages. We believe that this environment helps our students develop tolerance, understanding and an outward looking perspective on life.', 0, '', 0, '', 'pending', '', ''),
(9, 'G. D. Goenka International School', '016', '9.png', 'CBSE\r\n', '', '352', 'Wisdom Valley campus, Nr. Anuvrat Dwar, New City Light Road,Wisdom Valley campus,\nNr. Anuvrat Dwar,New City Light Road,\nRCC Canal Road,Barthana-Vesu, \nSurat-395007. Gujarat, India.', 'Surat', 'Surat', 395007, 'Surat', 'Gujarat', 'contact@gdgoenkasurat.com', '+91 261 2916900 ', '+ 91 9925206903', 'http://www.gdgoenkasurat.com/', 'The G. D. Goenka Group is a leading educational setup driven by a passion for excellence in education and quality in life, where Globalization and Internationalization are the buzz words. A galaxy of educational institutions from pre-schools to post - graduate institutes, with world class infrastructure , salubrious and well maintained Wi-Fi enabled campuses, well equipped libraries and Hi- tech laboratories and a dedicated and seasoned academics, support an ideal and conducive environment for providing education that can be benchmarked against the best in the world.', 0, '', 0, '', 'rejected', 'Goenka , Name is enough\r\n', ''),
(10, 'Tapti Valley International School\r\n', '017', '10.png', 'CBSE\r\n', '', '353', 'Block No. 456-457, Rander-Dandi Road, Village Narthan, Taluka Olpad,Block No. 456-457, Village Narthan, \nRander-Dandi Road, Taluka Olpad, \nSurat - 395005 Gujarat, INDIA', 'Surat', 'Surat', 395005, 'Surat', 'Gujarat', 'info@tvis.edu.in', '+91 8306 55 66 77', '+91 8306 55 66 77', 'http://www.taptivalleyschool.com/', 'The beginning of Tapti Valley International School dates back to 2011 when the long cherished dream of our Board of Governors took shape in the form of school. The motivational force behind this noble venture that encouraged all of them to open an educational institution for the children of Surat was to prepare them for the 21st century global arena. The colossal task loomed large and finally took the shape. Today, we pioneer the transformation in Day Boarding School culture in Surat.  Tapti Valley is an English Medium Co-educational Day Boarding School established by the Tapti Valley Education Foundation in Surat. We offer LKG to Grade XII education. Our curriculum is designed in conformity with the syllabus prescribed by CBSE Board promoting a stress free and encouraging learning environment in its true sense.', 0, '', 0, '', 'pending', '', ''),
(11, 'HBK (Test2)', '019', '11.png', 'CBSE', 'Gujarati', '355', 'Gurukul, Memnagar,', 'Memnagar', 'Ahmedabad', 380052, 'Ahmedabad', 'Gujarat', 'hbk2@sas.com', '47892752599', '28579793267', 'hbk2@sas.com', '<pre>\r\n<strong>JIO </strong><em>Dhan Dhana Dhan</em></pre>\r\n', 0, '', 0, '', 'pending', '', ''),
(12, 'BAPS SVM', '020', '12.png', 'GSEB,ICSE,CBSE', 'English', '356', 'Nr. Gift City, Raisan', 'Raisan', 'Ahmedabad', 380061, 'Ahmedabad', 'Gujarat', 'baps.svm@sas.com', '23895789775', '25389895123', 'baps.svm.sas.com', '<p><strong>Cool</strong> School&nbsp;</p>\r\n\r\n<h3><em>Best</em> for<s> ALL</s></h3>\r\n', 0, '', 0, '', 'pending', '', ''),
(13, 'Delhi Public School', '021', '13.jpeg', 'GSEB,ICSE,CBSE', 'English', '357', 'Delhi Public School, Near Airport, Surat-Dumas Road, Post – Gavier, Surat', 'Post – Gavier', 'Surat', 380000, 'Surat', 'Gujarat', 'info@dpssurat.net', '912612204500 ', '2204502', 'www.dpssurat.net', '<p>Founded in the year 2003,<strong> Delhi Public School</strong> in Surat is a co-educational, English medium school affiliated to the CBSE. It&rsquo;s one of the franchise schools of the Delhi Public School Society.</p>\r\n\r\n<p><em><strong>Curriculum:</strong></em></p>\r\n\r\n<ul>\r\n	<li>Affiliated to the CBSE, Delhi Public School offers classes from nursery to XII standard.</li>\r\n	<li>At the plus two level, children can select between science and commerce streams.</li>\r\n	<li>The school also offers co-curricular activity facilities for the all-round development of the students.</li>\r\n</ul>\r\n\r\n<p><em><strong>Facilities:</strong></em></p>\r\n\r\n<ul>\r\n	<li>Located on seven acres, the campus of the Delhi Public school is divided into pre-primary, primary, second and senior-secondary blocks.</li>\r\n	<li>The entire school is equipped with Wi-Fi internet connectivity. Besides, there&rsquo;s a library, science and computer laboratories, resource center and audio-visual center.</li>\r\n	<li>The schools offer state-of-art facilities for sports as well. Children can take training in swimming, football, basketball, cricket, hockey, tennis, volleyball and much more.</li>\r\n</ul>\r\n', 1, '', 1, '2017-06-12 11:38:54am', 'approved', '', '2017-06-13 10:58:42am'),
(14, 'Asia English School', '022', '14.png', 'GSEB,ICSE,CBSE', 'English', '358', 'Asia Campus, Drive-in-Road, Opposite Indraprasth Tower, Thaltej, Ahmedabad, Gujarat', 'Thaltej', 'Ahmedabad', 380054, 'Ahmedabad', 'Gujarat', 'asia@sas.com', '079 2685 6449', '079 2685 6449', 'http://www.asiaenglishschool.org/', '<p><strong>ASIA ENGLISH SCHOOL&nbsp;</strong>is a co-educational English medium school established in the year 1965 by Asia Charitable Trust (registered under the Public Trust Act.1860) in&nbsp; Ahmedabad. The school functions under the guidance and direction of the Chairman and a team of professionals and academicians appointed by the Trust. It is affiliated to CBSE since 01.04.2015.</p>\r\n\r\n<p>ASIA ENGLISH SCHOOL has emerged as a well-known co-educational English Medium School in Ahmedabad focussing on holistic education and all round development of its students. It has now about 2000 students and functions from its own building at ASIA Campus, Drive-in-Road, Ahmedabad. The school has spacious and well ventilated classrooms equipped with latest technology and a good playground. Highly qualified and experienced teachers from all over the country manage the teaching-learning system, providing a cosmopolitan feel at the school.</p>\r\n\r\n<p>ASIA believes that academic education alone is not enough to be successful in life.&nbsp; Co-curricular activities and life skill education also play a vital role in the overall development of children.&nbsp; At ASIA the students learn and find new ways to express themselves, recognize their own strength and weakness , enabling them to act in their own interest and stand up to face difficult life situations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Students at ASIA ENGLISH SCHOOL learn their lessons with great zest and enthusiasm, as they are taught in very un- conventional and in the most effective practical ways where in the entire staff is involved in a unidirectional approach ensuring &nbsp;parental touch to each child.</p>\r\n\r\n<p><strong>CURRICULUM</strong></p>\r\n\r\n<p>PRIMARY section follows the academic syllabus prescribed by the Central&nbsp;Board. Along with the regular curriculum, co-scholastic activities are an integral part&nbsp;of the curriculum from grade 1. In the present given patterns of curriculum,&nbsp;unique talent of the child can easily be identified before he/she reaches the middle&nbsp;school or upper primary section.</p>\r\n\r\n<p>Language plays a key role in the learning process and hence the school follows the three language formula. Apart from English, Mathematics, General Science, Social Studiesand Computer Science children also study the second language i.e. Hindi from class I onwards. From class V children learn the third language Gujarati.&nbsp;</p>\r\n\r\n<p>The curriculum also caters to the full and harmonious development of the child through co-curricular activities organised throughout the year.</p>\r\n\r\n<p>The school has always seen to it that every child is provided with the best&nbsp;learning environment. Keeping this objective in mind, we have adopted Chrysalis&nbsp;ThinkRoom Programe for grades I to V which will be progressively improved by adding one more class every year till class VIII.</p>\r\n\r\n<p>We also focus on,</p>\r\n\r\n<ul>\r\n	<li>Developing and integrating the use of listening, speaking, reading and writing skills.</li>\r\n	<li>Instilling care and concern towards the environment.</li>\r\n	<li>Establishing the relevance of school work and its collection to the outside world.</li>\r\n	<li>Leading healthy, systematic and disciplined life style.</li>\r\n	<li>Developing tolerant attitude towards society and people.</li>\r\n</ul>\r\n', 4, '2017-06-06 01:30:15pm', 0, '', 'approved', '', '2017-06-13 11:39:00am');

-- --------------------------------------------------------

--
-- Table structure for table `school_admin`
--

CREATE TABLE `school_admin` (
  `sa_id` int(11) NOT NULL,
  `sa_name` varchar(255) NOT NULL,
  `sa_email` varchar(255) NOT NULL,
  `sa_mobile` bigint(15) DEFAULT NULL,
  `sa_password` varchar(255) NOT NULL,
  `sa_avatar` varchar(255) NOT NULL,
  `major` int(11) DEFAULT NULL,
  `school_id` int(11) NOT NULL,
  `by_admin` int(11) DEFAULT NULL,
  `by_sa_admin` int(11) DEFAULT NULL,
  `sa_signup_date` varchar(255) NOT NULL,
  `last_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_admin`
--

INSERT INTO `school_admin` (`sa_id`, `sa_name`, `sa_email`, `sa_mobile`, `sa_password`, `sa_avatar`, `major`, `school_id`, `by_admin`, `by_sa_admin`, `sa_signup_date`, `last_active`) VALUES
(1, 's_admin', 's_admin@sas.com', 1234567890, '8cf82b021e4088547123ca89a0bcb76e', '1.png', 1, 13, 1, NULL, '', '2018-05-13 09:57:35pm'),
(2, 's_admin2', 's_admin2@sas.com', 1234567891, 'de04ed80d2454eceb41133d1f53887e9', '2.png', NULL, 0, 1, NULL, '', '2018-05-13 10:01:38pm'),
(3, 'final', 'finalsas@sas.com', NULL, 'bfd354e386d24a3adc11496fafbe357c', '', NULL, 0, 2, NULL, '', ''),
(4, 's_admin3', 's_admin3@sas.com', 2147483647, 'bb3bb392b2a8d2adc1f5df655df2dc32', '4.png', 1, 14, 2, NULL, '2017/05/06', '2017-06-13 12:07:06pm'),
(5, 's_admin4', 's_admin4@gmail.com', NULL, '932d243fbec6140be2e989466e9ef3e6', '', 1, 0, 2, NULL, '2017-06-05 10:51:34pm', '2017-06-13 11:24:59am'),
(6, 'sub_admin1', 'sub_admin1@sas.com', 2147483647, '5a6790215838d1c55e65b0427b77431c', '', NULL, 13, NULL, 1, '2017-06-05 11:35:32pm', '2017-06-13 12:09:32pm'),
(8, 'sub_admin2', 'sub_admin2@sas.com', NULL, 'b884e1913b324cbf4524155c5af5c6dc', '', NULL, 14, NULL, 1, '2017-06-06 12:01:25am', '2017-06-13 01:41:29pm');

-- --------------------------------------------------------

--
-- Table structure for table `school_amenities`
--

CREATE TABLE `school_amenities` (
  `amenities_id` int(11) NOT NULL,
  `amenity_name` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_amenities`
--

INSERT INTO `school_amenities` (`amenities_id`, `amenity_name`, `school_id`, `created_by`, `created_at`) VALUES
(1, 'Bus Service', 13, '1', '2018-05-14 12:21:51am'),
(2, 'Sports Complex', 13, '1', '2018-05-14 01:31:18am');

-- --------------------------------------------------------

--
-- Table structure for table `school_features`
--

CREATE TABLE `school_features` (
  `feature_id` int(11) NOT NULL,
  `feature_name` text,
  `feature_description` text NOT NULL,
  `school_id` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_features`
--

INSERT INTO `school_features` (`feature_id`, `feature_name`, `feature_description`, `school_id`, `created_by`, `created_at`) VALUES
(1, 'House Boards', '<p>There are four boards present which are <strong>Red</strong>, <strong>Blue</strong>, <strong>Green</strong>, <strong>Yellow</strong>. Each student will be assigned in any of this group. Different events and activities are held as inter-house board competitions.</p>\r\n', 13, '1', '2018-05-14 12:38:10am'),
(2, 'Physical Sports', '<p>Different sports are played, sports complex and facilities are available.<br />\r\nGames like Badminton<br />\r\nTaekwondo<br />\r\nTen-Pin Bowling<br />\r\nTrack &amp; Field<br />\r\nWushu are played.</p>\r\n', 13, '1', '2018-05-14 01:52:15am');

-- --------------------------------------------------------

--
-- Table structure for table `school_fee_details`
--

CREATE TABLE `school_fee_details` (
  `fee_id` int(11) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  `fee_annum` double NOT NULL,
  `school_id` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_fee_details`
--

INSERT INTO `school_fee_details` (`fee_id`, `education_level`, `fee_annum`, `school_id`, `created_by`, `created_at`) VALUES
(1, 'Pre Primary', 18000, 13, '1', '2018-05-14 12:13:48am'),
(2, 'Primary', 24000, 13, '1', '2018-05-14 01:39:55am');

-- --------------------------------------------------------

--
-- Table structure for table `school_news`
--

CREATE TABLE `school_news` (
  `school_news_id` int(11) NOT NULL,
  `s_news_title` varchar(1000) NOT NULL,
  `s_news_description` text NOT NULL,
  `school_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_news`
--

INSERT INTO `school_news` (`school_news_id`, `s_news_title`, `s_news_description`, `school_id`, `created_by`, `created_at`) VALUES
(1, 'The Classical Music Event', '<p>Here DPS brings an outstanding event, which makes our nation proud.</p>\r\n\r\n<ul>\r\n	<li>Participate and bring joy to India, last date to participate is <em><strong>2/7/18</strong></em>.</li>\r\n	<li>Get your seats book.&nbsp;</li>\r\n	<li>Special guest appereance. (<em>#surprise</em>)</li>\r\n</ul>\r\n', 13, 1, '2018-05-14 07:03:44'),
(6, 'Budget for Mid-day meal increased', '<p>Our vision states that: American School of Baroda is a learner-centred community committed to excellence in education having a motto of, <strong>&ldquo;To build a child is better than to repair a man</strong>&rdquo;. Our school has a rich history and tradition.</p>\r\n\r\n<p>It was opened on June 2003. The school has always enjoyed a reputation for academic excellence and our students continue to excel academically, as evidenced by our results in National competitions and numeracy and literacy tests.</p>\r\n\r\n<p>We are a highly multicultural school and are proud to have students representing from the world.</p>\r\n\r\n<p>At ASOB our children grow up surrounded by a range of cultures, religious beliefs and languages. We believe that this environment helps our students develop tolerance, understanding and an outward looking perspective on life.</p>\r\n', 13, 1, '2018-05-14 10:01:14'),
(7, 'JAJAJAJA', '<p>lol&nbsp;</p>\r\n\r\n<p>jlejg&#39;n WElg<img alt=\"\" src=\"https://i.imgur.com/ijrs4LF.jpg\" style=\"border-style:solid; border-width:1px; float:left; height:225px; margin:2px; width:300px\" />&nbsp;gegk&#39;pokapeg</p>\r\n\r\n<p>keg;reg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>awejg;ew&#39;agwa&#39;wga</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>jweg</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sjgeohewkjg</p>\r\n\r\n<p>4jgp[ewjkg&#39;</p>\r\n\r\n<p>we</p>\r\n', 13, 1, '2018-05-15 14:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `school_principal_details`
--

CREATE TABLE `school_principal_details` (
  `principal_id` int(11) NOT NULL,
  `principal_full_name` varchar(255) NOT NULL,
  `principal_of_edu_level` varchar(255) NOT NULL,
  `contact_no` bigint(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_principal_details`
--

INSERT INTO `school_principal_details` (`principal_id`, `principal_full_name`, `principal_of_edu_level`, `contact_no`, `email`, `school_id`, `created_by`, `created_at`) VALUES
(1, 'Subhash Chawla', 'Pre Primary', 2147483647, 'subhash@dps.com', 13, '1', '2018'),
(2, 'Sudani Mishra', 'Primary', 9876542310, 'sudani@dps.com', 13, '1', '2018-05-14 01:03:16am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(20) NOT NULL,
  `usr_fname` varchar(255) DEFAULT NULL,
  `usr_lname` varchar(255) DEFAULT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_mobile` varchar(255) NOT NULL,
  `usr_pass` varchar(255) NOT NULL,
  `usr_address` varchar(655) DEFAULT NULL,
  `usr_city` varchar(20) DEFAULT NULL,
  `usr_state` varchar(20) DEFAULT NULL,
  `usr_pincode` varchar(10) DEFAULT NULL,
  `usr_signup_date` date NOT NULL,
  `last_updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_fname`, `usr_lname`, `usr_email`, `usr_mobile`, `usr_pass`, `usr_address`, `usr_city`, `usr_state`, `usr_pincode`, `usr_signup_date`, `last_updated_at`) VALUES
(1, '', NULL, 'test1@sas.com', '1234567890', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, '2017-02-02', NULL),
(2, '', NULL, 'test2@sas.com', '1234567890', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, '2017-05-02', NULL),
(3, '', NULL, 'test3@sas.com', '1234567890', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, '2017-05-02', NULL),
(4, '', NULL, 'test4@sas.com', '1234567890', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, '2017-05-02', NULL),
(5, '', NULL, 'akshaycricketlover@gmail.com', '2147483647', '89b79605ef45d830d8c41076d862c8ff', NULL, NULL, NULL, NULL, '2017-09-02', NULL),
(6, 'Test', 'sas', 'test@sas.com', '1234567890', '098f6bcd4621d373cade4e832627b4f6', 'rvrevbesb', 'Ahmedabad', 'Gujarat', '380053', '2017-03-09', '2018-03-28 08:13:36pm'),
(7, '', NULL, 'test@sas.com', '123456790', '098f6bcd4621d373cade4e832627b4f6', NULL, NULL, NULL, NULL, '2017-09-03', NULL),
(8, '', NULL, 'ds@sas.com', '2147483647', '522748524ad010358705b6852b81be4c', NULL, NULL, NULL, NULL, '0000-00-00', NULL),
(9, '', NULL, 'user@sas.com', '2147483647', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, NULL, NULL, NULL, '2017-08-06', NULL),
(10, '', NULL, 'test3@sas.com', '567890232', '8ad8757baa8564dc136c1e07507f4a98', NULL, NULL, NULL, NULL, '2017-10-06', NULL),
(11, 'user', 'test', 'user@sams.com', '9876543210', 'ee11cbb19052e40b07aac0ca060c23ee', 'ABCX 31, Nr. Anand Fast Food, Gurukul Road, Memnagar', 'Ahmedabad', 'Gujarat', '380053', '2018-11-03', '2018-05-13 03:14:39pm'),
(12, 'User', 'u2', 'user2@sams.com', '1234567890', '7e58d63b60197ceb55a1c487989a3720', 'Sky Villa, Nr. Titanium Square, Adajan Char Rasta, Adajan, Surat – ', 'Surat', 'Gujarat', '395009', '2018-12-03', '2018-03-12 01:30:27pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`admission_form_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_code` (`school_code`),
  ADD UNIQUE KEY `school_branchno` (`school_branchno`);

--
-- Indexes for table `school_admin`
--
ALTER TABLE `school_admin`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `school_amenities`
--
ALTER TABLE `school_amenities`
  ADD PRIMARY KEY (`amenities_id`);

--
-- Indexes for table `school_features`
--
ALTER TABLE `school_features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `school_fee_details`
--
ALTER TABLE `school_fee_details`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `school_news`
--
ALTER TABLE `school_news`
  ADD PRIMARY KEY (`school_news_id`);

--
-- Indexes for table `school_principal_details`
--
ALTER TABLE `school_principal_details`
  ADD PRIMARY KEY (`principal_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `admission_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `school_admin`
--
ALTER TABLE `school_admin`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `school_amenities`
--
ALTER TABLE `school_amenities`
  MODIFY `amenities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_features`
--
ALTER TABLE `school_features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_fee_details`
--
ALTER TABLE `school_fee_details`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_news`
--
ALTER TABLE `school_news`
  MODIFY `school_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school_principal_details`
--
ALTER TABLE `school_principal_details`
  MODIFY `principal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
