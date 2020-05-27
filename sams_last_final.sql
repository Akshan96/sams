-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 12:47 AM
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
(1, 'admin', 'admin@sams.com', '21232f297a57a5a743894a0e4a801fc3');

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
(1, 'HBK New High School', '891', '1.png', 'GSEB', 'English,Gujarati', 'HBK New High School', 'Vishram Marg, Near Bhuyangdev Cross Road, Memnagar, Ahmedabad, Gujarat 380054', 'Memnagar', 'Ahmedabad', 380054, 'Ahmedabad', 'Gujarat', 'help@hbkmemnagar.com', '95586367777', '07927414140', 'hbkapadia.com', '<p>In the year 1926, a group of visionaries brightened the city of Ahmadabad with the glowing torch of education in the form of New High School in Gheekanta area of the city. These visionaries were <strong>Shri H. B. Kapadia Saheb, Shri R. K. Joglekar, Shri N.G. Lele </strong>and <strong>Shri C. B. Desai</strong>. Keeping the flame of education alive, in 1956, <strong>Shri H. B. Kapadia</strong> established <em><strong>The H. B. Kapadia New High School</strong></em> at <em>Shahibaug</em>. Since then, we have expanded to 8 campuses, 1100 educators and 15000 students. The group has educated more than 1 lakh students in its journey so far.</p>\r\n\r\n<p>At HBK, every child is valued, encouraged and supported to achieve their full potential. We believe that it is our responsibility not only to educate the children but also teach them skills to prepare them for higher education. Our goal is to help every child excel in life by inculcating the virtues of <strong>Self-confidence, Concentration </strong>and <strong>Firm Determination</strong>.</p>\r\n\r\n<p>We have a talented and committed team of educators to making sure that we respond to each child&rsquo;s individual needs. HBK also provides a wide range of enriching activities including residential and day trips, music, performance and sports, which all contribute to ensuring that our children enjoy their time at school.</p>\r\n\r\n<p>We also actively encourage parental support and involvement in their child&rsquo;s education. It is the strength of our relationship with parents that helps children to thrive and succeed through their journey throughout the school life.</p>\r\n\r\n<p>For more info&nbsp;<a href=\"http://hbkapadia.com/initiatives/\">click here</a></p>\r\n', 1, '2018-05-16 12:22:44am', 0, '', 'approved', '', '2018-05-16 02:45:43am'),
(2, 'BEST School', '678', '2.png', 'GSEB,CBSE', 'English', 'B652001', 'Opp.Gokul Society Bhairavnath Road,Nr. Bhairavnath Char Rasta,Maninagar,Ahmedabad - 380008.', 'Maninagar', 'Ahmedabad', 380008, 'Ahmedabad', 'Gujarat', 'admin@besthighersecondaryschool.com', '9876423145', '07925451639', 'http://www.besthighersecondaryschool.com/', '<p><strong>Best High Schoo</strong>l is one of the premier institution which guides students in every step of their educational system.It came into existence in the year of 1958 and is <em>affiliated </em>to <em><strong>Central Board of Secondary Education (CBSE)</strong></em>. The School encourage innovation and creativity among individuals so that they could face competition. This School emphasizes non-academic activities community engagement and cultural programmes.It is no wonder that students from Best are a common sight in all <strong>Medical</strong>, <strong>Engineering </strong>&amp; <strong>Architectural colleges </strong>not only in Ahmedabad but around the entire country. It is the<big> <em>only English Medium School </em></big>from area of Maninagar in the city of Ahmedabad to have students coming in the merit list of the board as well as going into non-donation Medical and Engineering colleges.</p>\r\n', 2, '2018-05-16 01:05:00am', 0, '', 'approved', '', '2018-05-16 02:46:31am'),
(3, 'BAPS Swaminarayan VidhyaMandir', '645', '3.gif', 'GSEB,CBSE', 'English', 'B64578', 'City Pulse Cinema Lane, Koba-Gandhinagar Highway, Randesan, Gujarat 382011', 'Raisan', 'Gandhinagar', 395061, 'Gandhinagar', 'Gujarat', 'contact@bapsraisan.com', '09998999472', '07927436987', 'http://www.baps.org/humanitarianservices/Education-and-Research/SchoolsandResidentialSchools/ResidentialSchools/Raisan-Ahmedabad.aspx', '<p>The metropolitan city of Ahmedabad is the largest city in Gujarat with a population of over 5 million people. In 2005, the <em><strong>BAPS Swaminarayan Sanstha</strong></em> built an <span class=\"marker\"><strong>all-boys school</strong></span> about 25 kilometers away in the suburb of Raisan. The school has both day <em><strong>students </strong></em>and <em><strong>residents </strong></em>who live in the <em>BAPS Swaminarayan Hostel </em>next to the school grounds. About one-fifth of the students avail the on-site boarding facilities. Instruction is offered from nursery school to 12th grade in an English medium. In the future, the school will offer instruction up to 12th grade.</p>\r\n\r\n<p>The teachers attend workshops hosted by instructors from abroad who come annually to share their knowledge of new teaching methods and curriculum standards. A school bus system transports students from the major cities of Ahmedabad and Gandhinagar.</p>\r\n\r\n<p>The<var> architecture and landscape</var> of the institution provide a scenic environment for students to learn. There are computer and language labs available to the students to learn about the latest technology and refine their native languages of Hindi and Gujarati.</p>\r\n', 3, '2018-05-16 01:12:08am', 3, '2018-05-16 01:13:32am', 'approved', '', '2018-05-16 02:46:12am'),
(4, 'Delhi Public School', '261', '4.jpeg', 'GSEB,ICSE,CBSE', 'English', 'B35712', 'Delhi Public School, Near Airport, Surat-Dumas Road, Gavier, Surat', 'Gavier', 'Surat', 395007, 'Surat', 'Gujarat', 'info@dpssurat.com', '912612204500', '0793404502', 'www.dpssurat.net', '<p>The Delhi Public School Society came into being as a non-profit making body. It established its first school in 1949 at Mathura Road, New Delhi. In pursuance of its motto &#39;Service Before Self&#39;, and its commitment to an integrated educational system, the mission of the society was to enhance learning among the Indian youth.</p>\r\n\r\n<p>Founded in the year 2003,<strong>&nbsp;Delhi Public School</strong>&nbsp;in Surat is a co-educational, English medium school affiliated to the CBSE. It&rsquo;s one of the franchise schools of the Delhi Public School Society.</p>\r\n\r\n<p>Many factors have played a vital role in the creation of this &#39;epitome of quality education.&#39; The vision and foresight of the pioneers; the total involvement and professional interest in the cause of education of the serving Board of Governors; the appointment of outstanding Principals to steer each school in the right direction, an unmatched faculty, and finally, the selection of meritorious and bright students. These characteristics have placed the DPS Society on the forefront of the educational map of India and the world.</p>\r\n\r\n<p><em><strong>Curriculum:</strong></em></p>\r\n\r\n<ul>\r\n	<li>Affiliated to the CBSE, Delhi Public School offers classes from nursery to XII standard.</li>\r\n	<li>At the plus two level, children can select between science and commerce streams.</li>\r\n	<li>The school also offers co-curricular activity facilities for the all-round development of the students.</li>\r\n</ul>\r\n\r\n<p><em><strong>Facilities:</strong></em></p>\r\n\r\n<ul>\r\n	<li>Located on seven acres, the campus of the Delhi Public school is divided into pre-primary, primary, second and senior-secondary blocks.</li>\r\n	<li>The entire school is equipped with Wi-Fi internet connectivity. Besides, there&rsquo;s a library, science and computer laboratories, resource center and audio-visual center.</li>\r\n	<li>The schools offer state-of-art facilities for sports as well. Children can take training in swimming, football, basketball, cricket, hockey, tennis, volleyball and much more</li>\r\n</ul>\r\n\r\n<p><em><strong>National Presence:</strong></em></p>\r\n\r\n<ul>\r\n	<li>Delhi Public Schools have been committed to providing quality education in different parts of the country as well as overseas and are now rapidly extending their reach all over the country. In doing so, they are establishing a networked platform, which will deliver the cumulative experience to each DPS.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 4, '2018-05-16 01:20:57am', 4, '2018-05-16 01:21:35am', 'approved', '', '2018-05-16 02:46:36am'),
(5, 'Mount Carmel High School', '14652', '5.jpg', 'GSEB', 'English,Gujarati', 'B54664', 'Mount Carmel High School,Navrangpura,Ahmedabad - 380009', 'Navrangpura', 'Ahmedabad', 380009, 'Ahmedabad', 'Gujarat', 'mountcarmelahmedabad@yahoo.com', '8126178041', '07926588360', 'www.mountcarmelahmedabad.com', '<p><strong>Mount Carmel High School</strong>, Ahmedabad was established in the year 1923 for the <em><strong>education of the girls</strong></em>. It is a <em>Minority Catholic Institution</em>. It is managed by the Sisters of Apostolic Carmel, a congregation of Catholic Nuns, which has its headquarters at Bengaluru.</p>\r\n\r\n<p>Mount Carmel School had a dream. Over the years, this dream became our vision. Today, we live that dream &ndash; the dream for the students in which each child grows to her full potential; that she grows into an emotionally, physically, mentally and spiritually confident human being; that irrespective of what she achieves in life, she remains grounded and is strong enough to provide the much needed emotional and moral stability to all those who stand in need of&nbsp;&nbsp;~ Principal&nbsp;</p>\r\n\r\n<p>To fulfill this dream of ours, we aim at imparting the right values, a spiritual orientation and guidance. If we are able to attain this goal, we will have attained our dream.</p>\r\n\r\n<p>This congregation was founded by Mother Veronica, a dedicated woman, who was divinely inspired to reach out to girls especially through education.Today the sisters cater to the needs of children in Primary and High Schools, Teacher-Training Institutions, Degree Colleges and Technical Schools,</p>\r\n\r\n<p><strong>The turning point in the History of Mount Carmel</strong>&nbsp;has been its tremendous growth in the field of sports. Students have been participating in different sports activities and winning accolades right, left and centre. They go through rigorous practices for months together leaving nothing to chance which has helped them to break past records. Under the banner of Mount Carmel we have won laurels in skating, Basket-ball, swimming, badminton, lawn tennis, kho-kho, cricket etc.</p>\r\n\r\n<p><strong>Our school is only Girls school and Affiliated with GSEB(Gujarat Secondary and Higher Secondary Education Board)<br />\r\nStd XI and XII General Stream(Art and Commerce) only.</strong></p>\r\n', 5, '2018-05-16 01:31:05am', 0, '', 'approved', '', '2018-05-16 02:46:39am'),
(6, 'G.D.  Goenka International school', '786', '6.jpg', 'ICSE,CBSE', 'English', 'B78639', 'Wisdom Valley campus,\r\nNr. Anuvrat Dwar,New City Light Road,\r\nRCC Canal Road,Barthana-Vesu, \r\nSurat-395007. Gujarat, India.', 'Barthana-Vesu', 'Surat', 395017, 'Ahmedabad', 'Gujarat', 'contact@gdgoenkasurat.com', '9925206903', '2612976000', 'http://www.gdgoenkasurat.com', '<p>The <strong>G. D. Goenka Group</strong> is a leading educational setup driven by a passion for excellence in education and quality in life, where Globalization and Internationalization are the buzz words. A galaxy of educational institutions from pre-schools to post - graduate institutes, with world class infrastructure , salubrious and well maintained <strong><samp>Wi-Fi enabled campuses</samp></strong>, well equipped <strong>libraries </strong>and <strong>Hi- tech laboratories </strong>and a dedicated and seasoned academics, support an ideal and conducive environment for providing education that can be benchmarked against the best in the world.</p>\r\n\r\n<p>After spending a lot of time thinking about that beautiful, shimmering image of school the stunning successful inspiration flaunt that the&nbsp;<strong>&ldquo;G. D. Goenka Group&rdquo;</strong>&nbsp;is now one of the largest community of the schools, delivering best educative communications through their services to the children.&nbsp;&nbsp;<br />\r\n<br />\r\nWith excellence in educational qualities the Globalization and Internationalization are always tinkling the beauty of this new era school with the facility of labs, dining hall, excellent sports facilities and hi-tech classrooms.&nbsp; The hale and hearty infrastructure,&nbsp; well maintained dazzling campuses with stirring doorway adjoins the values to the beauty accompanied by the library with all mod cons,&nbsp; precise laboratories and a fanatical(keen)&nbsp; and dexterous&nbsp; academics supports an unbeatable&nbsp; and&nbsp; rosy environs&nbsp; to privilege the students yardstick amongst the best in the world.&nbsp;<br />\r\n<br />\r\n<strong>&ldquo;Today&rsquo;s education is tomorrow&rsquo;s future of the child &rdquo;</strong>- aiming this concept,&nbsp;</p>\r\n\r\n<p><br />\r\nOur professionals&rsquo; team tag along the progress of each child in every bit of facet to the learning. On the basis of skills and capabilities of the child; we bring in the varied methodologies for overcoming the lapse of concept clarity followed by disinterest towards the subject. Our special educators and counsellors always be ready to this context. We provide remedial intervention on one to one basis or in small group sessions.<br />\r\nIn regard to emphasise the universal and qualitative education amongst students we always try to facilitate the child with the best in all areas.</p>\r\n', 6, '2018-05-16 01:36:48am', 0, '', 'approved', '', '2018-05-16 02:47:53am'),
(7, 'Citizen\'s School', '568', '7.png', 'GSEB,CBSE', 'English', 'B56897', 'Citizen\'s School Near Mangal Tirth Apt.,\r\nHoney Park Road, Adajan, Surat. Guj. (India).', 'Adajan', 'Surat', 395032, 'Surat', 'Gujarat', 'citizenschool@gmail.com', '7046692497', '2612779697', 'http://www.citizens-school.com', '<p>Education is an important part for a child in his/her school life. &quot;<em><strong> Disciplined education with care</strong></em>&quot; is the motto of &quot;Citizen&#39;s School&quot;.</p>\r\n\r\n<p>I started my Citizen&#39;s school on 8th June 2002 at Adajan. The spacious and conductive physical environment as well as the up-to-date facilities offer opportunities for all &quot;Citizen&#39;s Students&quot; to strive for excellence and &quot;Make the Difference&quot;.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My school provides a quality education with an emphasis on character development. Besides an effective teaching program, there is a wide variety of co-curricular activities and environment programs to ensure that there is abundant opportunity for all my students to develop their potential and excel in their areas of talent or interest. Besides the emphasis on academic achievement and participation my school also believes in building strength of character and inculcating values such as &quot;Respect yourself, Respect others&quot; and &quot;Choose wisely and Conclude smartly,&quot; which serves to guide my students in their pursuit of skills and knowledge.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My school is also mindful that parents are important stakeholders in education and works in partnership with them in building in their child an inner motivation and in providing all the necessary support and encouragement as well as in moulding their child&#39;s character so that the skills and values acquired well remains with each and every &quot;Citizen&#39;s Student&quot; and inspires him/her not only to lead and excel but to contribute selflessly to society.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;May the spirit of my motto &quot;<em>Disciplined education with care</em>&quot; continues to inspire all my students to strive for excellence and make a mark in all the areas of their development.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My school is my home and my staff is not just employees, they are a family member to me, not only they but my students and parents are also a part of my &quot;<em>Citizen&#39;s Family</em>&quot;.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Citizen&#39;s Family is trained in such a way that wether I am there or not, my &quot;Citizen&#39;s Family&quot; members are going to make my dreams come true.</p>\r\n', 7, '2018-05-16 01:50:27am', 0, '', 'pending', '', ''),
(8, 'Podar International School ', '365', '8.jpg', 'ICSE,CBSE', 'English', 'B365412', 'Simada, Near. Police Choki,\r\nPuna Kumbhariya Canal Road,\r\nSurat - 395010.\r\nGujarat.', 'Simada', 'Surat', 395010, 'Surat', 'Gujarat', 'admissions@podar.org', '8291982047', '7574807046', 'http://www.podareducation.org', '<p>Podar international schools are the best schools in the country. Our success lies in our team and the use of latest technology in teaching.</p>\r\n\r\n<p>Educating 1,20,000 students through 102 schools across India,&nbsp;<em>Podar Education</em>&nbsp;Group has established itself as a leader in the Indian Education</p>\r\n', 8, '2018-05-16 01:54:26am', 0, '', 'rejected', 'Not Valid entry, go through all entries and update your school registered data.', ''),
(9, 'P.P. Savani Cambridge International School', '198', '9.JPG', 'ICSE,CBSE', 'English', 'B198892', 'Mota Varachcha – Abrahma Road, Mota Varachcha, Mota Varachha, Surat, Gujarat 394105', 'Mota Varachha', 'Surat', 394105, 'Ahmedabad', 'Gujarat', 'ppscambridge@gmail.com', '9909991004', '2616503388', 'http://www.ppscis.org.in', '<h2>WELCOME TO&nbsp;P. P. SAVANI CAMBRIDGE INT. SCHOOL!</h2>\r\n\r\n<h3>We Are Eager To Give You Best Education And Style.</h3>\r\n\r\n<p>We always believe in our motto,&nbsp;<em>&ldquo;Nurturing your child&rsquo;s individuality&rdquo;</em>, and so we want each student to fulfil their potential and make the most of their strengths and interests. Cambridge International Examinations, offer a wide range of subjects and let every student choose the subjects they love and the subjects they&rsquo;re best at. CIE design programmes &ndash; with the help of expert educators in schools and universities &ndash; to challenge students, and get them excited about what they&rsquo;re learning. They learn about the key concepts of each subject in depth, so they understand them inside and out.&nbsp;</p>\r\n\r\n<p>Our programmes are flexible, so teachers can use examples that are relevant to students&rsquo; local context and culture. Students learn in English, and Cambridge assessment is accessible to speakers of English as a second or foreign language.</p>\r\n\r\n<p>Our alumni speak,&nbsp;<em>&ldquo;We really enjoyed our studies in the P. P. Savani Cambridge International School. We were seeking an international platform, and an international curriculum which can help us in the global studies. Thanks to the CIE curriculum which helped us getting admissions in desired universities and also made further studies easy as most of the topics were already taught in the school. This gave us an extra advantage over the other students from other boards&rdquo;</em>.</p>\r\n\r\n<p>Students have to demonstrate understanding and the core knowledge of a subject, as well as think critically. Exams are there to recognize, reward and encourage learning which is solely conducted by the Cambridge. The quiver of P. P. Savani Cambridge International School also holds stars with two&nbsp;<strong><em>India Toppers&rsquo;, Meet Savani in Business Studies and Rishabh Mehta in Mathematics and one World Topper, Jieun Kim in Mathematics.</em></strong></p>\r\n\r\n<p>The Cambridge programme takes students on a journey through Cambridge primary, Cambridge secondary 1, Cambridge IGCSE and Cambridge International AS &amp; A level. Students can join at any stage.</p>\r\n\r\n<p>The curriculum in each stage has aims and objectives that support students to become confident, responsible, reflective, innovative and engaged. These are the attributes of Cambridge learners.</p>\r\n', 9, '2018-05-16 01:58:09am', 0, '', 'pending', '', ''),
(10, 'Shree Vidyanagar HighSchool', '298', '10.png', 'GSEB', 'Gujarati', 'B29831', 'Usmanpura, Ashram Road, Ahmedabad - 380014, Gujarat, India.', 'Usmanpura', 'Ahmedabad', 380014, 'Ahmedabad', 'Gujarat', 'info@shreevidyanagarschool.org', '9727287333', ' 2639017020', 'shreevidyanagarschool.org', '<h2>THE SHREE VIDYANAGAR HIGHSCHOOL MISSION</h2>\r\n\r\n<p>Shree Vidyanagar Education Trust was established in the year 1953 with a commitment to excellence. Since its inception, the school has striven to provide a holistic learning experience that ensures high standards of academic excellence harmonized by manifold co-curricular activities. During a span of 60 years, we have grown into one of the leading foundation in Ahmedabad providing quality education to our students, facilitated by devoted teachers who are trained to channelize their energy and resources towards child centered qualitative learning. The emphasis is on nurturing students to develop to their full potential.</p>\r\n', 10, '2018-05-16 02:04:06am', 0, '', 'approved', '', ''),
(11, 'Vijaynagar Primary & Secondary School', '897', '11.png', 'GSEB', 'Gujarati', 'B25812', 'Near Patrakar Colony, Vijaynagar, Naryanpura, Ahmedabad, Gujarat 380013', 'Naranpura', 'Ahmedabad', 380013, 'Ahmedabad', 'Gujarat', 'vijaynagarschool@gmail.com', '917927437278', '2639017020', 'vijaynagarschool.com', '<p>In December 1971 <em><strong>Gujarat Housing Board</strong></em> alloted about 600 MIG flats to the residents for housing purpose.Many of the allottees came to reside in February 1972.Since most of the allottees were young they found it difficult to provide education nearby to their children and wards. This difficulty was realized and we were prompted to start a school .<strong>Vijaynagar education society</strong> was established in June 1972 and registered under societies act under register No G4/376/Ahd and under trust act under No F/460 in 1972 itself. Vijaynagar education society is stranded in it&#39;s devlopedment due to shortage of space. Many of our students have achieved prestige and fame in the field of medicine,pharmacy,teaching profession,modern profession like management,chartered accountants,software engineers, mechanical and other proffession. <samp>Vijaynagar Education society has functioned for almost 4 decades</samp>. The founder members and others are ageing.</p>\r\n', 12, '2018-05-16 02:21:50am', 0, '', 'approved', '', '2018-05-16 02:45:20am'),
(12, 'Vishwabharati High School', '714', '12.png', 'GSEB', 'English,Gujarati', 'B78914', 'Bhaikakanagar, Thaltej, Ahmedabad, Gujarat 380058', 'Thaltej', 'Ahmedabad', 380058, 'Ahmedabad', 'Gujarat', 'vishwabharati@highschool.com', '918511289606', '2639017020', 'http://www.vishwabharati.com/', '<p>Established in 1963, with a mission to impart excellent education in vernacular language, Vishwabharati came into existence. This was a way the dream came true for a man of hardwork and perfection &ndash;&nbsp;<strong>Mr. Surendra Maheshwar Shukla, our DADAJI</strong>, the pioneer of our vision.</p>\r\n\r\n<p>Following this, there was&nbsp;<strong>SHRI M. N. SHUKLA COLLEGE OF EDUCATION</strong>&nbsp;affiliated to Gujarat University, established in the year 1971. And just after four years later in 1975, Vishwabharati Higher Secondary School was started. The beginning was all at Shahpur, a well-known area, in the heart of Ahmadabad</p>\r\n\r\n<p>Late eighties and early nineties was the expansion of Western Ahmadabad. The Visionary once again came forward and plunged into launching of the</p>\r\n\r\n<p><strong>Vishwabharati&nbsp;</strong>is clearly a break &ndash; a shift of paradigm.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>From teaching and training To learning</p>\r\n	</li>\r\n	<li>\r\n	<p>From the Domination of the grown up mind To student centred Learning</p>\r\n	</li>\r\n	<li>\r\n	<p>From scattered facts and disjointed information To information Management and utilization</p>\r\n	</li>\r\n	<li>\r\n	<p>From a lopsided top heavy teaching system To distributed integral Learning in an ever dynamic learning environment</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Vishwabharati English Medium School at Thaltej.</strong><br />\r\nFinally, in 2011-12, the latest venture came up with NEW VISHWABHARATI SCHOOL at Thaltej.</p>\r\n', 13, '2018-05-16 02:27:09am', 0, '', 'approved', '', '2018-05-16 02:45:29am'),
(13, 'Nalanda International School', '361', '13.png', 'GSEB', 'English,Gujarati', 'B36125', 'Sevasi-Mahapura Road, Sevasi, Vadodara, Gujarat 391101', 'Sevasi', 'Vadodara', 391101, 'Vadodara', 'Gujarat', 'info@nalandaschool.org', '912656533855', '2639017020', 'http://www.nalandaschool.org/', '<p><strong>Nalanda International School </strong>was established in the year 2004 and is located in the city of art and culture, Vadodara, in Gujarat, only 8 kms. from Alkapuri, the heart of the city. Nalanda International School has been established by the Nalanda Knowledge Foundation, a registered, <em>not-for-profit organization</em> which professionally manages the school.</p>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>Nalanda International School <em>Baroda</em></strong><em> </em>stands on a 20 acre site, with beautiful and pleasant landscapes in and around the premises of the school, surrounded with lush greenery all over, and is equipped with environment and child-friendly architecture, which is age appropriate and suitable to the needs of the child.</div>\r\n\r\n<p>The school strives to be the best school in Baroda and with this thought in mind, Nalanda International School focuses on the all round development of the child in academics, activities and sports. Equal and fair importance is given not only to academics but also to activities and sports, thus ensuring that the child is able to decide and build its own future.</p>\r\n\r\n<p>Upholding strong values, morals, principles, ideologies and ethics, the school&#39;s programmes are designed to develop the inquiring and inquisitive mind for the Sciences, the passion and heart for the Arts and the zeal, enthusiasm and physique for Sports.</p>\r\n', 14, '2018-05-16 02:32:16am', 14, '2018-05-16 02:34:15am', 'approved', '', '2018-05-16 02:45:33am');

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
(1, 'hbk_hetal', 'hetal@hbkmemnagar.com', 7896325715, '41d7b2ef55bc338c17798615b9d83e45', '1.png', 1, 1, 1, NULL, '2018-05-15 11:51:31pm', '2018-05-16 03:59:31am'),
(2, 'best_vikas', 'vikas@bestschool.com', NULL, '1c353d26104adfcf716fdba2b9352d8b', '', 1, 2, 1, NULL, '2018-05-15 11:52:47pm', '2018-05-16 04:01:22am'),
(3, 'baps_jay', 'jay@bapsraisan.com', NULL, '9528f655fe649e7c61ac2604f6e4f9c2', '', 1, 3, 1, NULL, '2018-05-15 11:54:09pm', '2018-05-16 03:59:06am'),
(4, 'dps_alap', 'alap@dpssurat.com', NULL, 'e26ef85a537274ebb334949d0c2f7ceb', '', 1, 4, 1, NULL, '2018-05-15 11:55:15pm', '2018-05-16 04:01:50am'),
(5, 'carmel_sheela', 'sheela@mcarmel.com', NULL, 'c25ff46e921152100f47a1f6d99f1836', '', 1, 5, 1, NULL, '2018-05-15 11:56:24pm', '2018-05-16 04:06:57am'),
(6, 'goenka_zach', 'zach@goenkaschool.com', NULL, 'cb0f13a1be3b2991fb7cf4ad540284c2', '', 1, 6, 1, NULL, '2018-05-15 11:57:37pm', '2018-05-16 04:08:03am'),
(7, 'citizen_tej', 'tej@citizenschool.com', NULL, '81a7cf724eed6221afcb4225841a6765', '', 1, 7, 1, NULL, '2018-05-16 01:38:18am', '2018-05-16 04:08:23am'),
(8, 'podar_pallavi', 'pallavi@podar.org', NULL, '09b64af0380a21c2618d6d28fec40e86', '', 1, 8, 1, NULL, '2018-05-16 01:38:58am', '2018-05-16 04:08:43am'),
(9, 'ps_mitesh', 'mitesh@ppscambridge.com', NULL, '3a88ddbab75d0ba61280d47fa3257406', '', 1, 9, 1, NULL, '2018-05-16 01:39:53am', '2018-05-16 04:09:08am'),
(10, 'vdh_ashwin', 'ashwin@shreevidyanagarschool.org', NULL, '01be8f7ee08311c59c18bcbaf33ca0e2', '', 1, 10, 1, NULL, '2018-05-16 02:00:53am', '2018-05-16 04:09:27am'),
(11, 'vijay_smit', 'smit@vijaynagarschool.com', NULL, 'd4bc4e4a26c8b2ff8c566e0ad4e89910', '', 1, 0, 1, NULL, '2018-05-16 02:09:34am', ''),
(12, 'vijay_kabir', 'kabir@vijaynagarschool.com', NULL, 'b72c4ce77a48ec83e94ac7323598f393', '', 1, 11, 1, NULL, '2018-05-16 02:15:36am', '2018-05-16 04:09:50am'),
(13, 'vishwab_dhrumil', 'dhrumil@vishwabharti.com', NULL, '2b5197be2671e84e137adf6357e84538', '', 1, 12, 1, NULL, '2018-05-16 02:22:43am', '2018-05-16 04:10:08am'),
(14, 'nalanda_purva', 'purva@nalandaschool.org', NULL, '4c09aa9190ee04309fa3faaa65b968e1', '', 1, 13, 1, NULL, '2018-05-16 02:28:50am', '2018-05-16 02:45:10am'),
(15, 'sub_nalanda', 'sub@nalandaschool.org', NULL, 'd9c7b55d80f4fb4b31fb24702f0080f4', '', 0, 13, NULL, 14, '2018-05-16 02:44:30am', '');

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
(1, 'Class Books', 13, '14', '2018-05-16 02:39:35am'),
(2, 'Play Ground', 13, '14', '2018-05-16 02:40:32am'),
(3, 'Indoor Games', 13, '14', '2018-05-16 02:40:40am'),
(4, 'Mini Theatre', 13, '14', '2018-05-16 02:40:46am'),
(5, 'Assembly Hall', 13, '14', '2018-05-16 02:40:56am'),
(6, 'Transport', 13, '14', '2018-05-16 02:43:41am'),
(7, 'Van Service', 1, '1', '2018-05-16 02:57:27am'),
(8, 'Pick Up and Drop', 1, '1', '2018-05-16 02:58:03am'),
(9, 'Sports Complex', 1, '1', '2018-05-16 02:58:12am'),
(10, 'Play Ground', 1, '1', '2018-05-16 02:58:41am'),
(11, 'Garden', 1, '1', '2018-05-16 02:58:46am'),
(12, 'Parking', 1, '1', '2018-05-16 02:58:53am'),
(13, 'Transport Service', 3, '3', '2018-05-16 03:11:56am'),
(14, 'Sports Complex', 3, '3', '2018-05-16 03:12:02am'),
(15, 'Indoor Activities Room', 3, '3', '2018-05-16 03:12:13am'),
(16, 'PlayGround', 3, '3', '2018-05-16 03:12:19am'),
(17, 'Garden', 3, '3', '2018-05-16 03:12:24am'),
(18, 'Hostel Service', 3, '3', '2018-05-16 03:12:33am'),
(19, 'Lunch ', 3, '3', '2018-05-16 03:12:37am');

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
(1, 'Art And Craft', '<p>All students from Class 5 to 8 visit the Wood Workshop once every week. Each child constructs some striking and gorgeous articles - some are small and delicate while others look professionally made with the use of blocks, chips of wood and some tools and equipments. These activities are performed under the able guidance of an educator. Students from class 9 to 12 may opt for Wood Work as an activity and they visit the Wood Workshop four days a week&hellip; All students take away their wooden handiart at the end of the academic year&hellip;</p>\r\n', 13, '14', '2018-05-16 02:41:28am'),
(2, 'Woodwork', '<p>All students from Class 5 to 8 visit the Wood Workshop once every week. Each child constructs some striking and gorgeous articles - some are small and delicate while others look professionally made with the use of blocks, chips of wood and some tools and equipments. These activities are performed under the able guidance of an educator. Students from class 9 to 12 may opt for Wood Work as an activity and they visit the Wood Workshop four days a week&hellip; All students take away their wooden handiart at the end of the academic year&hellip;</p>\r\n', 13, '14', '2018-05-16 02:42:05am'),
(3, 'Events', '<p>Events like :-&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Sports</li>\r\n	<li>Art and Craft</li>\r\n	<li>Cultural</li>\r\n</ul>\r\n\r\n<p>and many more..&nbsp;</p>\r\n', 13, '14', '2018-05-16 02:43:24am'),
(4, 'Smart Class', '<p>Students are provided with smart education, smart boards and various other smart things are used. Also smart activities is carried out.</p>\r\n', 1, '1', '2018-05-16 02:59:22am'),
(5, 'Yoga Session', '<p>Every one hour in a day and twice in a week is assign to yoga session where students are taught yoga and gymnastics.</p>\r\n', 1, '1', '2018-05-16 02:59:28am'),
(6, 'Days Celebration', '<p>Various days are celebrated like Independece day, Republic Day, Holi, Green (Plantation) day, Annual Day etc, here are some pics</p>\r\n\r\n<p><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/9kids/big4.jpg\"><img alt=\"big4\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/9kids/thumb/big4.jpg\" /></a>&nbsp; &nbsp; &nbsp;&nbsp;<a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-chattral-campus/big3.jpg\"><img alt=\"big3\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-chattral-campus/thumb/big3.jpg\" /></a></p>\r\n\r\n<p><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/hbkkids/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/hbkkids/thumb/big1.jpg\" /></a>&nbsp; &nbsp; &nbsp;&nbsp;<a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/hbkapadia/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/hbkapadia/thumb/big1.jpg\" /></a><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-unjha-campus/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-unjha-campus/thumb/big1.jpg\" /></a><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-iffco-campus/big5.jpg\">&nbsp; &nbsp; &nbsp;<img alt=\"big5\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-iffco-campus/thumb/big5.jpg\" /></a></p>\r\n\r\n<p><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-chandkheda-campus/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/navratri-chandkheda-campus/thumb/big1.jpg\" /></a>&nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/learning-at-hbk-kids/big2.jpg\"><img alt=\"big2\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/learning-at-hbk-kids/thumb/big2.jpg\" /></a>&nbsp; &nbsp; &nbsp; &nbsp;<a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/zoo-visit/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/zoo-visit/thumb/big1.jpg\" /></a>&nbsp;&nbsp;</p>\r\n\r\n<p><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/icecream-day/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/icecream-day/thumb/big1.jpg\" /></a>&nbsp; &nbsp; &nbsp;&nbsp;<a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/special-umbrella/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/special-umbrella/thumb/big1.jpg\" /></a></p>\r\n\r\n<p><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/teachers-day-kids/big3.jpg\"><img alt=\"big3\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/teachers-day-kids/thumb/big3.jpg\" /></a>&nbsp; &nbsp; &nbsp;<a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/tree-idiots-campaign/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/tree-idiots-campaign/thumb/big1.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/teachers-day/big1.jpg\"><img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/teachers-day/thumb/big1.jpg\" /></a><a href=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/helping-hands/big1.jpg\">&nbsp; &nbsp; &nbsp;<img alt=\"big1\" src=\"http://hbkapadia.com/wp-content/uploads/photo-gallery/helping-hands/thumb/big1.jpg\" /></a></p>\r\n', 1, '1', '2018-05-16 03:05:46am'),
(7, 'Boarding Schools', '<p>As well as the usual academic facilities such as classrooms, halls, libraries and laboratories, boarding schools often provide a wide variety of facilities for extracurricular activities such as music rooms, gymnasiums, sports fields and school grounds, boats, squash courts, swimming pools, cinemas and theatres.</p>\r\n', 3, '3', '2018-05-16 03:10:42am'),
(8, 'Smart Class', '<p>Students are provided with smart education, smart boards and various other smart things are used. Also smart activities is carried out</p>\r\n', 3, '3', '2018-05-16 03:11:26am');

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
(1, 'Pre Primary', 10000, 13, '14', '2018-05-16 02:35:52am'),
(2, 'Primary', 12000, 13, '14', '2018-05-16 02:35:59am'),
(3, 'Secondary', 15000, 13, '14', '2018-05-16 02:36:08am'),
(4, 'Higher Secondary', 20000, 13, '14', '2018-05-16 02:36:21am'),
(5, 'Play Group', 10000, 1, '1', '2018-05-16 02:50:21am'),
(6, 'Pre Primary', 12000, 1, '1', '2018-05-16 02:50:29am'),
(7, 'Primary', 15000, 1, '1', '2018-05-16 02:50:36am'),
(8, 'Secondary', 18000, 1, '1', '2018-05-16 02:50:51am'),
(9, 'Higher Secondary', 25000, 1, '1', '2018-05-16 02:51:03am'),
(10, 'Play Group', 15000, 3, '3', '2018-05-16 03:08:00am'),
(11, 'Pre Primary', 20000, 3, '3', '2018-05-16 03:08:07am'),
(12, 'Primary', 28000, 3, '3', '2018-05-16 03:08:18am'),
(13, 'Secondary', 32000, 3, '3', '2018-05-16 03:08:28am'),
(14, 'Higher Secondary', 45000, 3, '3', '2018-05-16 03:08:44am');

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
(1, 'Henil Kapadia', 'Pre Primary & Primary', 7982125622, 'henil@hbkapadia.com', 1, '1', '2018-05-16 02:55:24am'),
(2, 'Disha Shah', 'Secondary & H.Secondary', 9876575310, 'disha@hbkpadaia.com', 1, '1', '2018-05-16 02:56:22am'),
(3, 'Harshal Dave', 'Play group, Pre primary, Primary', 7989283923, 'harshal@bapsraisan.com', 3, '3', '2018-05-16 03:09:50am'),
(4, 'Monalisa Das', 'Secondary & Higher Secondary', 7983596423, 'monalisa@bapsraisan.com', 3, '3', '2018-05-16 03:10:13am');

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
(1, 'Darshil', 'Mehta', 'user@sams.com', '7896541230', 'ee11cbb19052e40b07aac0ca060c23ee', 'B-10, Akshat Bungows, Science City Road, Ahmedabad', 'Ahmedabad', 'Gujarat', '380057', '0000-00-00', '2018-05-16 04:16:15am');

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
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `admission_form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `school_admin`
--
ALTER TABLE `school_admin`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `school_amenities`
--
ALTER TABLE `school_amenities`
  MODIFY `amenities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `school_features`
--
ALTER TABLE `school_features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `school_fee_details`
--
ALTER TABLE `school_fee_details`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `school_news`
--
ALTER TABLE `school_news`
  MODIFY `school_news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_principal_details`
--
ALTER TABLE `school_principal_details`
  MODIFY `principal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
