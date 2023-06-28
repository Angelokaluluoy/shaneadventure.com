-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2023 at 02:22 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaneable`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `msg`) VALUES
(3, 'shane', 'shanxigamer09@gmail.com', 'try lang base mag work');

-- --------------------------------------------------------

--
-- Table structure for table `shanetable`
--

DROP TABLE IF EXISTS `shanetable`;
CREATE TABLE IF NOT EXISTS `shanetable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `age` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shanetable`
--

INSERT INTO `shanetable` (`id`, `name`, `age`, `email`, `pass`) VALUES
(15, 'Angelo Mahinay', 21, 'shanemallorca46@gmail.com', '06162002'),
(16, 'shane', 21, 'Group2@gmail.com', '12345'),
(14, 'Angelo Mahinay', 21, 'shanemallorca46@gmail.com', 'mmm');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `caption` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `photo`, `title`, `caption`) VALUES
(6, 'malatanog3.jpg', 'Malatan-og Falls', 'Malatan-og Falls is also known as “Cigarette Falls” due to its appearance from afar.it is the tallest waterfall in whole negros island You’ll see its beauty from the view deck (or lantawan to locals) near the roadside. This is another favorite stopover for tourists especially who loves photo op.I\'d love to share my experience visiting Malatan-og Falls in Don Salvador Benedicto with my friends!  Getting to the falls was quite an adventure. We had to hike for about an hour through a forest trail, crossing rivers and climbing over rocks. It was a bit challenging, but the scenery was absolutely stunning.We were surrounded by lush greenery and the sound of flowing water, which made the hike even more enjoyable.  When we finally reached Malatan-og Falls, we were blown away by its beauty. The waterfall cascaded down into a deep blue pool, surrounded by towering cliffs and rocky formations. The water was refreshingly cool, and we couldn\'t resist taking a dip in the pool.  We spent several hours swimming, jumping off the rocks, and exploring the surrounding area. We also had a picnic by the waterfall, enjoying the fresh air and beautiful scenery.One of the most memorable parts of the trip was the journey back. We decided to take a different route,It was quite scary at first, but also exhilarating to be suspended high above the water.  Overall, visiting Malatan-og Falls with my friends was an amazing experience. It was a great opportunity to connect with nature, challenge ourselves physically, and make unforgettable memories together. I would definitely recommend it to anyone visiting Don Salvador Benedicto!.'),
(7, 'rap2.jpg', 'Rapha Valley\r\n', 'Rapha Valley is a health and wellness destination in Don Salvador Benedicto, Negros Occidental. The farm\'s name, Rapha Valley, originated from Jehovah Rapha, which means \"God is our healer.\" The founders and owners of Rapha Valley, Marilou Jo and Dr. Albert Jo, are passionate advocates of organic farming.\r\n\r\nAt Rapha Valley, the focus is on promoting the idea that food can be a form of medicine, echoing the famous quote by Hippocrates, \"Let your food be your medicine.\" The farm\'s mission is to provide a space where individuals can reconnect with nature and benefit from the healing properties of organic produce.\r\n\r\nThrough their dedication to organic farming, Rapha Valley aims to provide visitors with a holistic experience that nourishes both the body and the soul. The farm offers various activities such as farm tours, wellness retreats, and workshops on sustainable living and healthy cooking.\r\n\r\nVisitors to Rapha Valley can immerse themselves in the serene surroundings, engage in mindful practices, and indulge in farm-to-table meals prepared with fresh, locally sourced ingredients. The farm\'s commitment to sustainable practices ensures that the food served is free from harmful chemicals and pesticides, promoting a healthier and more nourishing dining experience.\r\n\r\nWhether it\'s strolling through the lush gardens, participating in wellness activities, or savoring delicious organic meals, Rapha Valley provides a space for individuals to embrace a healthier lifestyle and experience the healing power of nature\'s bounty.\r\n\r\nIn summary, Rapha Valley is a health and wellness destination in Don Salvador Benedicto that advocates for organic farming and encourages individuals to view food as a form of medicine. With its serene ambiance, sustainable practices, and nourishing offerings, Rapha Valley provides a holistic experience for visitors seeking to enhance their well-being.'),
(8, 'Jomax.jpeg', 'Jomax Peak', 'My adventure at Jomax Peak in Salvador Benedicto was truly unforgettable. From the moment I arrived at this picturesque picnic and camping grounds, I was captivated by the perfect blend of excitement and natural beauty that awaited me.\r\n\r\nOne of the highlights of my visit was exploring the flower sanctuary that enveloped the area. Everywhere I looked, I was greeted by an array of vibrant blooms in a myriad of colors and fragrances. It was a feast for the senses, and I couldn\'t help but immerse myself in the beauty of nature.\r\n\r\nThe activities available at Jomax Peak added to the excitement of my adventure. From hiking trails that led to breathtaking viewpoints to ziplining through the lush canopy, there was no shortage of adrenaline-pumping experiences. Each step along the trails revealed stunning vistas that took my breath away, showcasing the pristine landscapes Salvador Benedicto is known for.\r\n\r\nIn between the thrilling activities, I found moments of tranquility as I soaked in the panoramic views. The rolling hills, the verdant valleys, and the distant mountains painted a picture-perfect backdrop that seemed straight out of a postcard. It was a reminder of the awe-inspiring beauty that nature has to offer.\r\n\r\nAs the day turned into evening, I set up camp and indulged in a delightful picnic amidst this natural paradise. The cool breeze, the rustling leaves, and the serene ambiance created a soothing atmosphere that allowed me to unwind and connect with the peacefulness of my surroundings. It was a perfect way to end the day, surrounded by nature\'s embrace.\r\n\r\nMy time at Jomax Peak left me with cherished memories that I will hold dear for a lifetime. The combination of thrilling adventures, breathtaking views, and the serenity of nature created an experience that touched my soul. It reminded me of the incredible wonders that our world has to offer and the importance of immersing ourselves in its beauty.\r\n\r\nWhether you\'re seeking an adrenaline rush, a tranquil escape, or simply a chance to connect with nature, Jomax Peak in Salvador Benedicto is a destination that will exceed your expectations. It offers an incredible journey filled with excitement, natural beauty, and cherished moments that will stay with you long after you leave.'),
(9, 'highway16.jpg', 'HIGHWAY 16 CAFE', 'During my recent visit to Highway 16, a winding road known for its scenic beauty, I stumbled upon a hidden gem that left an indelible mark on my memory. Nestled amidst nature\'s embrace, there stood a delightful cafe and resort, beckoning weary travelers with its alluring charm.\r\n\r\nAs I entered the premises, a sense of tranquility washed over me. The serene ambiance, carefully curated with rustic decor and soft, ambient lighting, created an atmosphere of utter relaxation. It was a sanctuary where one could escape the chaos of the bustling city life and immerse themselves in the soothing embrace of nature.\r\n\r\nThe panoramic views that greeted me were nothing short of breathtaking. Lush greenery stretched as far as the eye could see, while distant mountains provided a majestic backdrop. The cafe and resort seemed perfectly integrated into the natural landscape, as if it had always been a part of this idyllic setting.\r\n\r\nThe friendly staff, with their warm smiles and genuine hospitality, instantly made me feel at home. They were attentive to every detail, ensuring that my experience was nothing short of extraordinary. Whether I needed assistance with my accommodations or recommendations for local attractions, they were always ready to lend a helping hand.\r\n\r\nThe culinary offerings at the cafe were an absolute delight. From freshly brewed artisanal coffees to delectable pastries, each item on the menu was crafted with meticulous care. The flavors danced on my palate, and I found myself indulging in culinary delights throughout my stay. The cafe truly excelled in creating a dining experience that was both delicious and memorable.\r\n\r\nSpeaking of accommodations, the resort provided a haven of comfort and luxury. The rooms were tastefully designed, featuring cozy furnishings and modern amenities. Each detail was thoughtfully considered to ensure a restful and rejuvenating stay. Whether I wanted to unwind on a private balcony overlooking the picturesque landscape or relax in a plush bed after a day of exploration, the resort had it all.\r\n\r\nAs I reflect on my visit to this hidden gem, I cannot help but recommend it wholeheartedly to fellow travelers seeking a captivating experience along Highway 16. The cafe and resort offered a harmonious blend of nature, comfort, and hospitality that surpassed all expectations. It was a place where time seemed to slow down, allowing me to fully immerse myself in the beauty of the surroundings and create cherished memories that will last a lifetime.\r\n\r\nSo, if you find yourself journeying along Highway 16, be sure to seek out this enchanting cafe and resort. Prepare to be captivated by its serene ambiance, enchanted by its picturesque views, and pampered by its friendly staff. It is a hidden gem that deserves to be discovered and cherished by all who seek a tranquil escape from the rigors of everyday life.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
