-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 08:15 PM
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
-- Database: `appify_sampledata_full`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `f_name`, `l_name`, `email`) VALUES
(1, 'Lithira', 'Ransika', 'lithirarandika@gmail.com'),
(2, 'Kusal', 'Saparamadu', 'kusalsaparamadu@gmail.com'),
(3, 'Tudakshna', 'Malsri', 'tudakshana@gmail.com'),
(4, 'Chamathka', 'Rathnayake', 'chamathka@gmail.com'),
(5, 'Chanith', 'Wanigasoorya', 'chanith@gmail.com'),
(6, 'Amath', 'Perera', 'amath@gmail.com'),
(7, 'Guwani', 'Emesha', 'guwani@gmail.com'),
(8, 'Sanjana', 'Achine', 'sanjana@gmail.com'),
(9, 'Ravindu', 'Yohan', 'yohan@gmail.com'),
(10, 'Lisura', 'Sigera', 'lisura@gmail.com'),
(11, 'Jason', 'Perera', 'jason@gmail.com'),
(12, 'Osanda', 'Perera', 'osanda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `app_id` int(20) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `app_description` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `publisher_id` int(20) NOT NULL,
  `app_profile_img` text NOT NULL,
  `download_link` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `upload_files` text NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`app_id`, `app_name`, `app_description`, `category`, `publisher_id`, `app_profile_img`, `download_link`, `price`, `upload_files`, `image_1`, `image_2`, `image_3`) VALUES
(3, 'Facebook', 'Facebook is a website which allows users, who sign-up for free profiles, to connect with friends, work colleagues or people they don\'t know, online', 'Entertainment', 1, 'fb', 'facebook.com', 'USD 12', 'FBUPLOAD', 'fbimg1', 'fbimg2', 'fbimg3'),
(4, 'Youtube', 'YouTube is one of the largest search engines in the world.', 'Social media', 2, 'yt', 'youtube.com', 'USD 14', 'upload yt', 'ytimg 1', 'ytimg 2', 'ytimg 3'),
(5, 'whatsapp', 'Our product now supports sending and receiving a variety of media: text, photos, videos, documents, and location, as well as voice calls', 'social media', 3, 'wa', 'whatsapp.com', 'USD 8', 'upload wa', 'waimg 1', 'waimg 2', 'waimg 3'),
(6, 'spotify', 'A music streaming service founded in 2008. The free service is ad supported, while premium membership includes mobile access, offline playing when not connected to the Internet and enhanced sound quality.', 'Entertainment', 4, 'spo', 'spotify.com', 'USD 10', 'upload spo', 'spo img1', 'spo img2', 'spo img3'),
(7, 'Netflix', 'Netflix is a subscription-based streaming service that allows our members to watch TV shows and movies on an internet-connected device.', 'Entertainment', 5, 'net', 'netflix.com', 'USD 15', 'upload net', 'netimg 1', 'netimg 2', 'netimg 3'),
(8, 'Temple Run', 'Temple Run is an endless runner video game developed and published by Imangi Studios', 'Games', 6, 'run', 'templerun.com', 'USD 5', 'upload run ', 'run img1', 'run img2', 'run img3'),
(9, 'Tiktok', 'TikTok is a social media platform that allows users to create, share and discover short-form videos.', 'Entertainment', 7, 'tik', 'tiktok.com', 'USD 12', 'upload tik', 'tikimg 1', 'tikimg 2', 'tikimg 3'),
(10, 'Instagram', 'Instagram is a free photo and video sharing app available on iPhone and Android. ', 'Social media', 7, 'insta', 'instagram.com', 'USD 14', 'upload insta', 'instaimg 1', 'instaimg 2', 'instaimg 3'),
(11, 'Telegram', 'Telegram is a cloud-based instant messaging app that works across several platforms accessed by people throughout the world.', 'social media', 9, 'tele', 'telegram.com', 'USD 5', 'upload tele', 'tele img1', 'tele img2', 'tele img3'),
(12, 'Pinterest', 'Pinterest is a visual discovery engine for finding ideas like recipes, home and style inspiration, and more.', 'Entertainment', 10, 'pin', 'pinterest.com', 'USD 8', 'upload pin', 'pin img1', 'pin img2', 'pin img3');

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE `blogger` (
  `blogger_id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `about_me` varchar(255) NOT NULL,
  `profile_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`blogger_id`, `f_name`, `l_name`, `email`, `about_me`, `profile_image`) VALUES
(1, 'Tudakshana', 'Malsri', 'tudakshana@gmail.com', 'A blogger maintains and adds content to a website that they manage alone or as part of a team of writers', 'timg'),
(3, 'Amara', 'Kamal', 'amara@gmail.com', 'I\'m Amara. I love to write blogs.', 'amara'),
(4, 'Tekla', 'Srimali', 'tekla2gmail.com', 'I like to write blogs', 'tekla'),
(5, 'Yasas', 'Madagedara', 'yasas@gmail.com', 'This blogger shares stories that sparkle with simplicity, inviting readers to the beauty in life\'s everyday moments.', 'singer'),
(6, 'Bhatiya', 'Santhush', 'dennama@gmail.com', 'With every keystroke, this blogger paints a canvas of thoughts, inviting readers on a journey through their unique perspective and experiences.', 'bs'),
(7, 'Justin ', 'beiber', 'justin@gmail.com', 'In the digital realm, this blogger\'s words dance gracefully, offering insights that resonate deeply with their audience, one post at a time.', 'jb'),
(8, 'chris ', 'Evans', 'chris2gmail.com', 'A blogger\'s pen wields the power to ignite minds, and this one crafts prose that sparks inspiration and fosters connection in a vast online community.', 'cap'),
(9, 'Roshan', 'Perera', 'roshan@gmail.com', 'In the realm of cyberspace, this blogger\'s voice rings clear, stirring hearts and minds with their eloquent prose and insightful musings.', 'rp'),
(10, 'Iman', 'Fernando', 'iman@gmail.com', 'This blogger\'s keyboard is their paintbrush, creating vibrant landscapes of words that capture the essence of life\'s myriad experiences, captivating readers with every stroke.', 'if');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `image_1` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title`, `categories`, `image_1`, `content`, `discription`, `image_2`, `image_3`) VALUES
(1, 'Global warming', 'global', 'img1', 'Global warming is the long-term warming of the planet\'s overall temperature.', 'Climate change refers to long-term shifts in temperatures and weather patterns.', 'warimg2', 'warimg3'),
(2, 'Mahagamasekara', 'BIOGRAPIC', 'mahaimg 1', 'Mahagama Sekera was a famed Sri Lankan poet, lyricist, playwright, novelist, artist, translator and filmmaker. ', 'He is best remembered as a poet and songwriter with several of his works even becoming popular songs in Sri Lanka.', 'mahaimg 2', 'mahaimg 3'),
(3, 'Economy', 'Economy', 'ecoimg 1', 'Present economy of the world is unfair.', 'Learn about economy is ver important.', 'ecoimg 2', 'ecoimg 3'),
(4, 'Information technology', 'it', 'itimg 1', 'Information technology is popular topic.', 'what is information technology', 'itimg 2', 'itimg 3'),
(5, 'Water', 'global', 'waterimg 1', 'Water is the most important thin in the world.', 'Withour there isn\'t a world.', 'waterimg 2', 'waterimg 3'),
(6, 'Technology', 'Tec', 'tecimg 1', 'Growth of the technology is develop day by day.', 'We can\'t stop the growth of technology.', 'tecimg 2', 'tecimg 3'),
(7, 'Mobile phones', 'tec', 'phoneimg 1', 'Is the most important device.Apple is the most popular brand. ', 'use of phones.', 'phoneimg 2', 'phoneimg 3'),
(8, 'Srilanka', 'Country', 'slimg 1', 'Is a most beautiful country in the world.', 'Important things about Srilanka.', 'slimg 2', 'slimg 3'),
(9, 'Cars', 'vehicle', 'carimg 1', 'Rolls royce is the most laxurist car brand.', 'what is a sport car.', 'carimg 2', 'carimg 3'),
(10, 'University', 'global', 'uniimg 1', 'Oxford  is one of the olddest university in the world.', 'what is a university?', 'uniimg 2', 'uniimg 3');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(20) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_description` varchar(255) NOT NULL,
  `language` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `pages` int(20) NOT NULL,
  `upload_file` text NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_description`, `language`, `author`, `genre`, `year`, `pages`, `upload_file`, `image_1`, `image_2`, `image_3`, `price`) VALUES
(1, 'got', 'Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. ', 'English', 'George rr Martin', 'fantasy', '2003', 12, 'gotimg 1', 'gotimg 2', 'gotimg 2', 'gotimg 3', 'USD 4'),
(2, 'madolduwa', 'Madol Doovachildren\'s novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947.', 'Sinhala', 'Martin', 'Novel', '2005', 300, 'img upload1', 'img1', 'img2', 'img3', 'USD 8'),
(3, 'Song of ice and fire.', 'Dragons did.', 'English', 'George R R Martin', 'Fantacy', '2003', 600, 'upload iaf', 'iafimg 1', 'iafimg 2', 'iafimg 3', 'USD 6'),
(4, 'Harry Potter', 'This is the first chapter.', 'English', 'J k Rowling', 'Fantacy', '1997', 500, 'upload harry', 'harryimg 1', 'harryimg 2', 'harryimg 3', 'USD 4'),
(7, 'Kaliyugaya', 'This is the second chapter.', 'Sinhala', 'Martin Wickkramasinghe', 'Fantacy', '1980', 123, 'upload kali', 'kaliimg 1', 'kaliimg 2', 'kaliimg 3', 'USD 9'),
(8, 'Witchers', 'You can\'t be a witcher.', 'English', 'George', 'Fantacy', '2020', 453, 'upload witch', 'witchimg 1', 'witchimg 2', 'witchimg 3', 'USD 12'),
(9, 'Shrelock Holms', 'Most inteligent detective in the world.', 'English', 'Arthur Conan Doyle', 'Thriller', '1889', 345, 'upload sh', 'sh img1', 'sh img2', 'sh img3', 'USD 14'),
(10, 'Sirith Maldama', 'Behave your self.', 'Sinhala', 'M L Silva', 'Entertainment', '1997', 12, 'sm_upload', 'sm_img_1', 'sm_img_2', 'sm_img_3', 'USD 10'),
(11, 'Thunman Handiya', 'This is my story.', 'Sinhala', 'Mahagama Sekara', 'Biographic', '1970', 180, 'upload handiya', 'handiyaimg 1', 'handiyaimg 2', 'handiyaimg 3', 'USD 12'),
(12, 'Manomandira', 'This is the second chapter.', 'Sinhala', 'Mahagamasekara', 'Biographic', '1972', 234, 'upload mano', 'manoimg 1', 'manoimg 2', 'manoimg 3', 'USD 8');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `rating`, `massage`) VALUES
(1, 3, 'poiuytrewq'),
(2, 3, 'add more skins'),
(3, 1, 'Very disappointing.'),
(4, 5, 'Best ui.'),
(5, 3, 'fair.'),
(6, 4, 'good.'),
(7, 3, 'Please add more maps.'),
(8, 5, 'This is the best app i ever used.'),
(9, 1, 'very slow'),
(10, 4, 'good'),
(11, 3, 'add more options.'),
(12, 2, 'send more updates.');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `video` text NOT NULL,
  `download_link` text NOT NULL,
  `movie_description` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `upload_files` text NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `title`, `year`, `category`, `cast`, `video`, `download_link`, `movie_description`, `price`, `upload_files`, `image_1`, `image_2`, `image_3`) VALUES
(2, 'Avengers', '2012', 'Fantacy', 'Chris Evens,Robert Downy Junior,Scarlet johanson', 'aveng', 'avengers.com', 'Ultron coming to destroy the world.', 'USD 4', 'upload aveng', 'aveng img1', 'aveng img2', 'aveng img3'),
(3, 'Infinity war', '2018', 'fantacy', 'Chris Evens,Robert Downy Junior,Scarlet johanson', 'infi', 'infinitywar.com', 'Thanos collect all the infinity stone ', 'USD 8', 'upload infi', 'infi img1', 'infi img2', 'infi img3'),
(4, 'Intesteller', '2014', 'Science fiction', 'Matthew McConaughey ', 'ins', 'insteller.com', 'Earth is not stabile for living. ', 'USD 10', 'upload ins', 'ins img1', 'ins img2', 'ins img3'),
(5, 'Harry Potter', '2002', 'fantacy', 'Daniel,Emma', 'harry', 'harrypotter.com', 'magic world begins to', 'USD 8', 'upload harry', 'harryimg 1', 'harryimg 2', 'harryimg 3'),
(7, 'Endgame', '2019', 'Fantacy', 'Chris Evans,RDJ,Chris Hemswoth', 'avg', 'endgame.com', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 'USD 12', 'upload end', 'end img1', 'end img2', 'end img3'),
(8, 'Godzilla', '2014', 'fantacy', 'Alexander Skarsgård,Millie Bobby Brown\r\n\r\n', 'god', 'godzillla.com', 'King Kong is transported out of his containment zone after Godzilla resurfaces and creates mayhem. Humans need his help to reach Hollow Earth and find a way to subdue the king of the monsters.', 'USD 5', 'upload god', 'godimg 1', 'godimg 2', 'godimg 3'),
(9, 'Premalu', '2024', 'Romance', 'Mamitha Baiju,Naslen K. Gafoor\r\n\r\n', 'prem', 'premalu.com', 'Premalu is a 2024 Indian Malayalam-language romantic comedy film directed by Girish A. D. and produced by Bhavana Studios, in the company of Fahadh Faasil and Friends and Working Class Hero', 'USD 3', 'upload prem', 'prem img1', 'prem img2', 'prem img3'),
(10, 'Titanic', '1997', 'Romance', 'Kate Winslet,Learnado\r\n', 'titanic', 'titanic.com', 'Seventeen-year-old Rose hails from an aristocratic family and is set to be married. When she boards the Titanic, she meets Jack Dawson, an artist, and falls in love with him.', 'USD 14', 'upload titanic', 'titanicimg1', 'titanicimg2', 'titanicimg3');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `f_name`, `l_name`, `email`) VALUES
(2, 'chanith', 'wanigasooriya', 'chanith@gmail.com'),
(3, 'Akila', 'Dasun', 'akila@gmail.com'),
(4, 'Tharindu', 'Sanda', 'tharindu@gmail.com'),
(5, 'Ravindu', 'Perera', 'ravindu@gmail.com'),
(6, 'Lachita', 'Hansaja', 'lachitha@gmail.com'),
(7, 'Dasath', 'Sachintha', 'dasath@gmail.com'),
(8, 'Kavindu', 'Disshan', 'kavindu@gmail.com'),
(9, 'Akash', 'Moditha', 'akash@gmail.com'),
(10, 'Razak', 'Feran', 'razak@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `profile_pic` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `profile_pic`, `phone_number`, `address`, `user_name`, `password`, `email`, `id_role`) VALUES
(3, 'Ravindu', 'Perera', 'rp', '12345', 'colombo,srilanka.', 'ravi', '234e', 'ravindu@gmail.com', 0),
(4, 'Kusal', 'Saparamadu', 'ks', '4567', 'Dehiwala,Srilanka.', 'kusal', '7uy', 'kusalsaparamadu@gmail.com', 0),
(5, 'Ed', 'Sheern', 'ed', '87653', 'Newyork,USA.', 'Edi', 'ji384r', 'ed@gmail.com', 0),
(6, 'Randika', 'Yohan', 'ry', '456219', 'Trinco,SriLanka.', 'yohan', 'e893dhec', 'randika@gmail.com', 0),
(7, 'Emesha', 'Chamathka', 'qa', '28372649', 'Malabe,colombo.', 'gugu', '3y273h', 'emesha@gmail.com', 0),
(8, 'Kasun', 'Perea', 'kp', '36438', 'Ratnapura,Srilanka.', 'kasu', 'eie2d8h', 'kasun@gmail.com', 0),
(9, 'Malsri', 'Dulintha', 'de', '2472492', 'Jaffna,srilanka.', 'dul', 'i23eAs', 'malsri@gmail.com', 0),
(10, 'Amal', 'Asitha', 'aa', '332842', 'Colombo,Srilanka', 'aml', 'j3e9e', 'amal@gmail.com', 0),
(11, 'Yuki', 'Nawaratne', 'yn', '38429238', 'Gampaha,Srilanka.', 'yuki', 'eh33hd', 'yuki@gmail.com', 0),
(12, 'Anushka', 'Udana', 'ws', '237013', 'Kaduwela,colombo.', 'anu', 'e98r39r', 'anushka@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`blogger_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `app_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `blogger_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
