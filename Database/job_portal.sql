-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2015 at 04:15 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(10) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `salary` varchar(20) NOT NULL,
  `jobdesc` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `compname` varchar(50) DEFAULT NULL,
  `posted` varchar(10) DEFAULT NULL,
  `closed` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `jobname`, `location`, `experience`, `salary`, `jobdesc`, `skills`, `compname`, `posted`, `closed`) VALUES
(1, 'Web Development (PHP)', 'Delhi', 'Freshers', '3.5 - 5.6 Lac', '1. Understand and solve issues in Web Standards.\r\n2. Implementing web application functionalities.\r\n3. Integrations with external web services/APIs.            \r\n              ', '1. Candidate should have a good knowledge of Html, CSS, JavaScript, PHP.\r\n2. Experience working with web service APIs.\r\n3. Experience in working with WordPress & Bootstrap.              \r\n              ', 'ZeroWaste Private Limited', '06/04/2015', '04/05/2015'),
(2, 'Software Developer', 'Delhi/NCR', '0-6 month', '4.5 - 6.5 Lac', 'Understanding Client Requirements and Functional Specification.               \r\n              ', 'Good Communication Skills, Having knowledge of Egile Methodology.              \r\n              ', 'Techsan India', '23/04/2015', '21/06/2015'),
(3, 'Python/ Mongo DB Expert', 'Gurgaun', '2 -3 years', '6.5 - 8.5 Lac', '1. Developing a product in Machine analytics to analyse high volume data 2. Need to develop some modules using MongoDB, Hadoop, Machine Learning 3. Website development in PHP and Python 4. Some statistical implementation is also expected to be done.              \r\n              ', 'Having idea about MongoDB and Hadoop would be plus. Machine learning experience would be highly precious for us Please do not apply if you are a beginner in programming paradigm.', 'ZeroWaste Private Limited', '02/03/2015', '15/06/2015'),
(4, 'Software Development', 'Work From Home', 'Freshers', '3.5 - 4.5 Lac', 'National Institute of Public Relation intends to extend its public relation activity by providing a link to service operators and general public seeking those services through a website with associated database and a suitable mobile App.\r\nFor the first phase of its operation it tends to provide service for public interested in small shipment and transporters willing to take those load to deliver. Logic will be similar to taxi aggregation services.\r\nThe interns will be responsible to design the a', 'Students looking for an integrated database, website, total service portal with user login features can apply in confidence.              \r\n              ', 'National Institute of Public Relation', '10/03/2015', '12/05/2015'),
(5, 'Web and Mobile App Development', 'Mumbai', '6 - 12 mon', '7.61- 9.25', 'The selected intern(s) will work on Web enhancements & Mobile App development for Railtiffin.com', 'Expertise in PHP/Opencart\r\nStrong analytical skills,              \r\n              ', 'Railtiffin.com', '11/04/2015', '23//06/201'),
(6, 'Front End Design', 'Gurgaon', '2 - 3 mont', '2. 62 - 4.2 Lac', 'We are a real estate company started by engineers and analysts that provides end to end services to corporate renters.              \r\n              ', 'Design Front End (UI/UX) of the Website.\r\nDesign Brochures and do Photoshop work as and when required.              \r\n              ', 'Brick Voice Services', '22/04/2015', '16/05/2015'),
(7, 'Web Development (IT)', 'Delhi', 'Freshers', '3.18 - 4.26 Lac', 'Candidates will be responsible for Developing, Designing and managing web applications,\r\nCandidates may be required to handle database,\r\nDevelopment of mobile applications will also be required,\r\nCandidates may get the opportunity to work on data structures & designing algorithms.', 'B.Tech/B.E. in Computer science or B.Tech in Information technology,\r\nCandidate must posses skills of HTML5 CSS3, Javascript, JQuery, AngularJS , PHP (laravel framework),\r\nKnowledge of data structures & algorithm will be an advantage,\r\nCandidate must have the zeal to learn cutting edge technologies, latest frameworks & must posses good communication skills.              \r\n              ', 'Collective Artists Pvt Ltd', '18/04/2015', '09/07/2015'),
(8, 'Web Design & Social Media Marketing', 'Noida', '1 - 2 year', '5.3 - 6.2 Lac', 'Work on the real time website. \r\nEnhance the existing website and add on modules to it.\r\nLook after the company social media campaigns .              \r\n              ', 'Anyone who have good experience with Wordpress platform.\r\nKnowhow of Social Media integration & Social Media Marketing.              \r\n              ', 'Robotac Labs', '13/02/2015', '12/05/2015'),
(9, 'Web Development (Ruby On Rails)', 'Banglore', 'Freshers', '4.3 - 5.12 Lac', '1. Coding on Ruby on Rails \r\n2. Integration with Front end so additional HTML5, CSS3, Jquery skills is prefered \r\n2. Development of New feature of existing product              \r\n              ', 'Candidates who are Proficient & Good at Ruby on Rails              \r\n              ', 'Fitness Papa', '16/04/2015', '07/05/2015'),
(10, 'UI Development', 'Bangalore', '2-3 years', '9.2 - 12.5 Lac', 'BE/B. Tech./MCA.\r\nExperience in ecommerce, web technology or web development.\r\nProven website management skills.\r\nGood verbal and written communication skills.\r\nAbility to work in a high-paced environment.\r\nSelf-driven              \r\n              ', 'Javascript, jQuery, Backbone, (AngularJS), NodeJS*\r\nUtilities: Bower*, Gulp* and Grunt*\r\nCSS: Bootstrap, (SAAS)\r\nHTML5              \r\n              ', 'Ocupado Retail Pvt Ltd', '02/04/2015', '13/07/2015'),
(11, 'IOS/Andriod Developer', 'Banglore', '6 - 12 months', '12.26 - 16.32 Lac', 'Passionate about working in startups and mobile application platforms\r\nAble to develop apps independently with minimal assistance\r\nCandidates with independently published apps have a definite advantage\r\nThe role is for individual contributor who would be responsible for developing apps end to end\r\nStrong understanding of Android/iOS Platform & willing to join immediately              \r\n              ', 'Candidates coming with the knowledge of mobile app development or been a part of a academic project or done a course in app development with strong programming skills                \r\n              ', '7evenc Technologies Private Ltd', '14/03/2015', '17/08/2015'),
(12, 'Statistical Computing And Data Analytics', 'Chennai', '3 - 5 years', '6 -8 Lac', 'R Studio / R Server,\r\nPredictive Analytics Model for Retail data from our current projects,\r\nPredictive Analytics model from project management data.              \r\n              ', 'Economics and Statistics,\r\nPredictive Analytics,\r\nComputer Science,\r\nExperience of using R for statistics and graphics in any of their college projects.              \r\n              ', 'Shadow Talk', '17/04/2015', '02/06/2015'),
(13, 'Product Engineering', 'Pune', 'Freshers', '4.8 - 7.13', 'Founded by London Business School alumni\r\nWinner, NAsscom Emerge 50, 2014\r\nSelected by NHRD as a potential game changer               \r\n              ', 'Live to write code. We are a small team and we all love what we do.  \r\nHave experience in web applications.\r\nHave experience in building mobile applications, especially Android.\r\nWe are friendly mostly, so should you!              \r\n              ', 'Tusker Data Lab', '12/02/2015', '24/05/2015'),
(14, 'Samskrut Technologies', 'Haydrabad', '0 - 1 year', '3.16 - 5.73 Lac', 'Android Application programming (Material Design)\r\nPush Notifications & Messaging,\r\nVirtual Reality Projects.              \r\n              ', 'who can communicate well.\r\nwho wants to stay at the cutting edge of technology.\r\nwho knows something about android development, eclipse/android studio, Android SDK, GIT, mySQL/SQLite, Java, Push Notifications, Data Storage, Mobile Security.\r\n              \r\n              ', 'Samskrut Technologies', '25/03/2015', '21/05/2015'),
(15, 'Product Engineering', 'Banglore', '6 - 12 months', '4.14 - 5.72', 'Founded by London Business School alumni\r\nWinner, NAsscom Emerge 50, 2014\r\nSelected by NHRD as a potential game changer               \r\n              ', 'Live to write code. We are a small team and we all love what we do.  \r\nHave experience in web applications.              \r\n              ', 'EPoise Systems Pvt. Ltd', '14/04/2015', '27/05/2015'),
(16, 'Android App Development', 'Noida', 'Freshers', '1.84 - 2.42', 'Add new and interesting features,\r\nUse reactive programming (RxJava) concepts,\r\nFix bugs.              \r\n              ', 'Anyone who has done android development is welcome.\r\nOpen source contributions are highly appreciated.              \r\n              ', 'Instano', '15 Feb 201', '21 June 20'),
(17, 'Android & IOS App Development', 'Banglore', 'Freshers', '3.16 - 5.73 Lac', 'Android App Development\r\niOS App Development              \r\n              ', 'App development for website salvagesettlers.com, online marketplace for Scrap & Salvages.\r\nApp should be same as OLX.\r\nApp Developer can only apply for this intern.              \r\n              ', 'Salvage Settlers Pvt Ltd', '14/04/2015', '21/05/2015');

-- --------------------------------------------------------

--
-- Table structure for table `jobnseeker`
--

CREATE TABLE IF NOT EXISTS `jobnseeker` (
  `js_id` int(10) NOT NULL AUTO_INCREMENT,
  `seekername` varchar(50) NOT NULL,
  `j_id` int(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`js_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `jobnseeker`
--

INSERT INTO `jobnseeker` (`js_id`, `seekername`, `j_id`, `status`) VALUES
(1, 'mdali602', 1, 'Applied'),
(2, 'mdali602', 7, 'Selected'),
(3, 'sahebpreet', 9, 'Applied'),
(4, 'abhishek2k49', 7, 'Selected'),
(5, 'sahebpreet', 7, 'Selected'),
(6, 'mdali602', 15, 'Applied'),
(7, 'kumarsatish', 2, 'Applied'),
(8, 'kumarsatish', 14, 'Applied'),
(9, 'kumarsatish', 8, 'Applied'),
(10, 'soderanitin', 4, 'Applied'),
(11, 'soderanitin', 15, 'Applied'),
(12, 'soderanitin', 7, 'Selected'),
(13, 'soderanitin', 1, 'Applied'),
(17, 'mdali602', 6, 'Applied'),
(18, 'mdali602', 8, 'Applied'),
(19, 'singhmanmeet', 2, 'Applied'),
(20, 'singhmanmeet', 1, 'Applied'),
(21, 'abhishek2k49', 3, 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE IF NOT EXISTS `recruiters` (
  `rec_id` int(10) NOT NULL AUTO_INCREMENT,
  `compname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`rec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`rec_id`, `compname`, `username`, `password`, `email`, `phone`) VALUES
(1, 'ZeroWaste Private Limited', 'zerowaste', 'zerowaste', 'zerowaste@gmail.com', '9718736185'),
(2, 'Shadow Talk', 'shadowtalk', 'shadowtalk', 'shadowtalk@gmail.com', '9887341234'),
(3, 'Techsan India', 'indiatechsan', 'indiatechsan', 'indiatechsan@gmail.com', '7838979928'),
(4, 'Tusker Data Lab', 'datatusker', 'datatusker', 'datatusker@gmail.com', '3453458409'),
(5, 'Railtiffin.com', 'railtiffin', 'railtiffin', 'railtiffin@gmail.com', '3453467521'),
(6, 'National Institute of Public Relation', 'niprel', 'niprel', 'niprel@yahoo.com', '9836146843'),
(7, 'Brick Voice Services', 'voicebrick', 'voicebrick', 'voicebrick@gmail.com', '7817345572'),
(8, 'Collective Artists Pvt Ltd', 'collective', 'collective', 'collective@hotmail.com', '9273143825'),
(9, 'Robotac Labs', 'robotac', 'robotac', 'robotac@yahoo.com', '7316243284'),
(10, 'Fitness Papa', 'papafitness', 'papafitness', 'papafitness@hotmail.com', '7838459928'),
(11, 'Ocupado Retail Pvt Ltd', 'ocupado', 'ocupado', 'ocupado@gmail.com', '9953453784'),
(12, '7evenc Technologies Private Ltd', '7evenc', '7evenc', '7evenc@gmail.com', '8826431507'),
(13, 'Samskrut Technologies', 'samkrut', 'samkrut', 'samkrut@hotmail.com', '9904823284'),
(14, 'EPoise Systems Pvt. Ltd', 'epicos', 'epicos', 'epicos@gmail.com', '8434092275'),
(15, 'Instano', 'instano', 'instano', 'Instano@gmail.com', '7817345572'),
(16, 'Salvage Settlers Pvt Ltd', 'salvage', 'salvage', 'salvage@gmail.com', '9852074968');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`) VALUES
(1, 'Saheb', 'sahebpreet', '8016401511', 'sahebpreet@gmail.com', '8825318346'),
(2, 'Mohammed Ali', 'mdali602', 'samsung', 'mdali602@gmail.com', '9990912569'),
(3, 'Nitin', 'soderanitin', '781234', 'nitinsodera@yahoo.com', '8875342986'),
(4, 'Athar', 'aliathar', '123456', 'athar@gmail.com', '1234567890'),
(5, 'kapil', 'kumar', '123456', 'kumarkail@gmail.com', '9012345678'),
(6, 'Satish Ashi', 'kumarsatish', '501234', 'kumarsatish@gmail.com', '9996812639'),
(7, 'Mohd', 'mdali60', 'aliali', 'dflafndl@gmail.com', '8375934874'),
(8, 'Kirpal', 'singhkirpal', '411234', 'singhkirpal@gmail.com', '2432344565'),
(9, 'Ajit', 'kumarajit', '987654', 'kumarajit@gmail.com', '2342344645'),
(10, 'Manmeet', 'singhmanmeet', 'qwerty', 'singhmanmeet@gmail.com', '2423446456'),
(11, 'Dheeraj', 'kumardheeraj', 'asdfgh', 'kumardheeraj@gmail.com', '4234236575'),
(12, 'Jatin', 'sharmajatin', 'lkjhfg', 'sharmajatin@gmail.com', '3242356755'),
(13, 'Abhishek', 'abhishek2k49', '123456', 'abhishek2k49@gmail.com', '8737032090'),
(14, 'vibhanshu', 'sharmavibhanshu', 'zxcvbnm', 'sharmavib@gmail.com', '8537402804'),
(16, 'Girish Kumar', 'kumargirish', '12345678', 'girish@gmail.com', '345345343'),
(18, 'Ankit Fadia', 'fadiaankit', 'aliali', 'fadiaankit@hotmail.com', '7838979928'),
(19, 'hello', 'hello', 'asdflkj', 'hello@gmail.com', '1234567890'),
(20, 'hello world', 'helloworld', 'helloworld', 'helloworld@gmail.com', '1023456789');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE IF NOT EXISTS `users_info` (
  `info_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `profile_pic` varchar(50) DEFAULT NULL,
  `resume` varchar(50) DEFAULT NULL,
  `resname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`info_id`, `username`, `profile_pic`, `resume`, `resname`) VALUES
(1, 'mdali602', 'uploads/mdali602/profile.png', 'uploads/mdali602/my_resume.pdf', 'my_resume.pdf'),
(2, 'sahebpreet', 'uploads/sahebpreet/saheb.jpg', 'uploads/sahebpreet/sahebpreet.pdf', 'sahebpreet.pdf'),
(3, 'soderanitin', 'uploads/soderanitin/nitin.jpg', 'uploads/soderanitin/report.pdf', 'report.pdf'),
(4, 'abhishek2k49', 'uploads/abhishek2k49/abhishek.jpg', 'uploads/abhishek2k49/my_resume.pdf', 'my_resume.pdf'),
(5, 'kumarajit', 'uploads/kumarajit/ajit.jpg', 'uploads/kumarajit/my_resume.pdf', 'my_resume.pdf'),
(6, 'kumardheeraj', 'uploads/kumardheeraj/dheeraj.jpg', 'uploads/kumardheeraj/my_resume.pdf', 'my_resume.pdf'),
(7, 'kumargirish', 'uploads/kumargirish/girish.jpg', 'uploads/kumargirish/oct_bill.pdf', 'oct_bill.pdf'),
(8, 'singhmanmeet', 'uploads/singhmanmeet/saheb.jpg', 'uploads/singhmanmeet/report.pdf', 'report.pdf'),
(9, 'kumarsatish', 'uploads/kumarsatish/satishjpg', 'uploads/kumarsatish/my_resume.pdf', 'my_resume.pdf'),
(10, '', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
