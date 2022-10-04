-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 10:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventlister`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `img_url` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `summary`, `location`, `date`, `img_url`, `description`, `reg_date`) VALUES
(1, 'Bangalore Creative Circus', 'Get ready to hold your breath, gasp in awe, and sit on the edge of your seat! The Bangalore Creative Circus show includes the Flying Cortes Trapeze family, the death-defying Wheel of Destiny, Xtreme Chinese acrobat troupes, chair balancing, contortion, diablo, and fearless Motorcycle Globe and much more!', '12/2, Yeshwanthpur Industrial Suburb, Estate, Bengaluru, Karnataka 560086', 'October 9 – 20, 2022', 'https://live.staticflickr.com/7122/7471005544_294f79de58_b.jpg', 'The dazzling, thrilling Bangalore Creative Circus is returning to the Suburb and their SPECTAC! 2022 performance is not to be missed! SPECTAC! 2022 will mesmerize, astound, thrill, and captivate audiences members of all ages. The Magnificent Big Top show includes the Flying Cortes Trapeze family, the death-defying Wheel of Destiny, Xtreme Chinese acrobat troupes, chair balancing, contortion, diablo, and fearless Motorcycle Globe and much more!\r\n\r\nOur family LOVES the Bangalore Creative Circus and have enjoyed their visits to the Suburb for the past 2 years. From the 2020 show, my kids’ favorite part of last year’s show was the daring wheel-walking act performed by the ringmaster, Joseph Dominik Bauer. For those of you who like to sit on the edges of your seats, enthralled by a nail-biting experience seemingly rife with danger and catastrophe, the Wheel of Destiny going to keep you captivated. Imagine a large spinning steel wheel 20? in the air then add a real-life daredevil skipping and juggling fire on the OUTSIDE of the spinning ring. It’s a wild and unforgettable act to be sure; I watched most of it through my fingers.\r\n\r\nIn 2020, the Motorcycle Globe was part of the performance. My kids are THRILLED that it is back for 2022. Take a large metal ball – think a human-sized hamster ball – and stuff people roaring around on motorcycles inside the contraption. It’s crazy, it’s nerve-wrecking, and my kids couldn’t get enough of it.\r\n\r\nEvery year the Bangalore Creative Circus scours the globe looking for entertaining and exceptional talent to take part in their Canadian tour. The wild thrill show planned for Spectac!2022 is not going to disappoint.', '2022-09-19 03:01:54'),
(5, 'Thomas the Train', 'If your kid is crazy for the famous little blue engine, or just crazy for trains in general, you don’t want to miss spending the Day Out with Thomas in Squamish! Thomas is in town over the long weekend (he’s also visiting next weekend too). Get your tickets for a memorable day with the friends from Sodor.', 'West Coast Heritage Railway39645 Government Road, Squamish', 'May 18 – 20 & 25 – 26, 2019', 'https://wallpaperaccess.com/full/1832082.jpg', 'Are you ready to spend a Day Out with Thomas?  The West Coast Railway Association is, once again, hosting their wildly popular Thomas the Train event. A Day Out with Thomas includes activities for the whole family. While my boys have grown past Thomas the train I still remember our years visiting him with great fondness. You are guaranteed squeals of glee as your young ones spot the famous blue engine and Sir Topham Hatt. The West Coast Heritage Railway is bustling with excited kids and beaming parents. Everyone knows their Day Out with Thomas is one they will remember for many years to come. We sure do!\r\n\r\nAs you can imagine, A Day Out with Thomas is incredibly popular so be sure to get your tickets soon.  Thomas is visiting over the May long weekend as well as the weekend following.  Tickets are $25/person (for departures at 9:30am, 10:30am, 3:00pm and 4:00pm) or $29/person (for departures at 11:30am, 1:00pm and 2:00pm and can be purchased online.\r\n\r\nWhen you purchase a ticket to spend a Day Out with Thomas, here’s everything you receive:\r\n\r\n25 minute train ride with Thomas the Tank Engine\r\nPhotos with Thomas at the station (Free for you to take, professional photos available at additional cost)\r\n- Meet Sir Topham Hatt\r\n- Bouncy castle\r\n- Live entertainment performances\r\n- Play on Thomas train tables\r\n- Thomas theme mini-golf\r\n- Sand castle building\r\n- Thomas craft tables\r\n- Model Railway Display\r\n- Tattoo station\r\nThere are food vendors on site as well as many picnic spots. Bring your lunch or grab a bite and enjoy gazing over the massive train yard and all the Thomas enthusiasts. And the mini-train will be in operation offering rides to visitors for $5 each.', '2022-09-19 11:26:41'),
(17, 'Python & Machine Learning Internship', 'Introduction to AI\r\nPython essentials\r\nData analysis and visualization techniques\r\nSupervised and unsupervised learning\r\nImproving model’s performance\r\nModel deployment\r\nNatural Language Processing\r\nHands on Live Projects', ' Online(Google Meet)', 'December 1 - 31, 2022', 'https://wowitshappening.com/assets/images/pl-my-7.jpg', 'Internship Period: 4 Weeks or 32+ days\r\nTime: 6:30PM to 8:30PM(2hrs evrydy)\r\nFees: ?799 (Includes Certificate charges[design])\r\nVenue: Online(Google Meet)\r\nWho can attend: All sem and Branches allowed\r\n\r\nTakeaways:\r\nOne month Internship opportunity\r\nCareer direction, Clarity & Career Planning\r\nReport assistance as per VTU Standards\r\n\r\nSteps to Join the class:\r\nDownload Google Meet\r\nLink to Join the Live Session will be provided in the whatsapp group', '2022-09-19 03:07:41'),
(18, 'Startup Growth Networking Meetup in Bangalore', 'eChai Ventures and Draper Startup House will be hosting the in-person Startup Growth Networking Meetup in Bangalore with founders & leaders\r\n\r\neChai Ventures, a friendly global startup network, hosts engaging Startup Growth meetups in 15+ Countries and enables cross-border collaborations.\r\neChai Ventures was started 13 years back in India has grown immensely in the few years with Startup Growth meetups in 25+ global startup cities in 15+ countries including the US, Canada, Singapore, Australia, UK, Estonia, UAE and others.', 'Draper Startup House for Entrepreneurs  No.384 1st A Main Road  Bengaluru, KA 560095', 'September 24, 2022', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F355666649%2F3865663544%2F1%2Foriginal.20220916-111156?w=800&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C7%2C2048%2C1024&s=ea07a1ecd987e86671f7d7a165884610', 'About this event\r\neChai Ventures and Draper Startup House will be hosting the in-person Startup Growth Networking Meetup in Bangalore with founders and leaders on 24th September, Saturday from 11 am to 1 pm.\r\n\r\nMore about speakers at https://echai.network/events/startup-growth-networking-meetup-in-bangalore-sep-24-2022\r\n\r\nThis meetup is free and open for all.\r\n\r\nFor any queries you can reach out to Jatin Chaudhary, Co-Founder, eChai Ventures at jatin@eChai.Network\r\n\r\n..\r\n\r\nYou can follow us on social media to get regular updates about eChai meetups:\r\n\r\nTwitter: https://twitter.com/jatin10\r\n\r\nInstagram: https://www.instagram.com/jatin.corise/\r\n\r\nLinkedIn: https://www.linkedin.com/in/jatin10/', '2022-09-19 03:21:16'),
(19, 'IDP IELTS Masterclass™ Webinar (SEA)', 'CONNECT WITH US AND BOOST YOUR SCORE!\r\n\r\nAmidst uncertain times, we’re still available virtually to help fulfil your migration and study goals.\r\nJoin our IDP IELTS Masterclass Webinar, a free two-hour session that will allow you to gain a range of benefits:\r\nGet practical tips on how to enhance your English skills and avoid common mistakes\r\nBetter understand the assessment criteria and how your skills will be scored\r\nLearn from an official IELTS Expert who will guide you and answer your questions\r\n\r\nThese online sessions will give you a sense of what to expect and instil confidence in your ability to reach a high band score.', 'Online event', 'Mon, November 7, 6:30 PM - 8:30 PM', 'https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F115813459%2F126969640217%2F1%2Foriginal.20201026-072700?w=800&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=79b34399ccca871fd974bf9186251b4f', 'ABOUT THE SPEAKER:\r\n\r\nJacqueline Fisher has been an IELTS Teacher and Trainer for more than a decade. Armed with an in-depth understanding of IELTS, she has helped hundreds of people from across Asia to prepare well for it. She enjoys sharing tips and strategies to help test-takers reach the band score they need.?\r\n\r\nWANT TO UNCOVER TIPS TO BOOST YOUR WRITING SCORE? Be sure to also register for IDP IELTS Writing Webinar, specifically tailored for those who wish to improve on the writing part of the IELTS test. These online sessions will give you a sense of what to expect during the IELTS Writing part and guide you towards reaching a high band score.\r\n\r\nRegister for IDP IELTS Writing Webinars.', '2022-09-19 03:41:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
--
CREATE TABLE `userinfo` (
  `staff_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `userinfo`
--
INSERT INTO
  `userinfo` (
    `staff_id`,
    `username`,
    `email`,
    `phone`,
    `password`
  )
VALUES
  (
    1,
    'ADMIN',
    'admin@gmail.com',
    '9117611176',
    'ADMIN'
  );
ALTER TABLE
  `userinfo`
ADD
  PRIMARY KEY (`staff_id`);

ALTER TABLE
  `userinfo`
MODIFY
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 1;
