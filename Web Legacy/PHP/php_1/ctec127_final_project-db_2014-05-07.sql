-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2014 at 03:47 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctec127_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `homepage_content`
--

CREATE TABLE `homepage_content` (
  `ID` int(11) NOT NULL,
  `Content` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage_content`
--

INSERT INTO `homepage_content` (`ID`, `Content`) VALUES
(1, 'We are a web and graphic design team focusing on bringing more awesome websites into the World Wide Web! We are passionate about what we do and focus on bringing and awesome development environment to give our clients the best results!'),
(2, 'Our designs focus around the responsive nature of the modern web viewer. Responsive and flat design sites mixed with nice design palettes and a strong user experience is what we strive for in our work.'),
(3, 'The team here at Serenito Designs is a very passionate about what we do. Everyone is in-tune with the latest trends and standards to provide as much useful insight as possible to your web project.');

-- --------------------------------------------------------

--
-- Table structure for table `mailing_list`
--

CREATE TABLE `mailing_list` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mailing_list`
--

INSERT INTO `mailing_list` (`Name`, `Email`) VALUES
('Tory James', '0032@msn.com'),
('Troy', 'dsad@dsa'),
('dsa', '23@dsa'),
('dsa', 'dsa@dsa'),
('dsa', 'dsa@d'),
('Troy', 'rawr@32'),
('Name', 'example@example.com'),
('432', '432@dsa'),
('Troy', 'dsa@ex.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Title` varchar(70) NOT NULL,
  `ID` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Title`, `ID`, `Content`, `Date`) VALUES
('Responsive Web Design Package Goes Down $140', 1, 'Our responsive web design package, which is our fully fledged web design, logo design, and branding package has a permanent price reduction to $10,000. The extra $140 for the logo and branding packages along with integration into the site is now included in the base price. Stay tuned for some exciting new summer prices as well!', '2014-03-13'),
('Social Media Package Now Includes Pinterest', 2, 'Our social media and branding package now includes Pinterest avatar and banner specs. The full list of supported social media networks now includes Twitter, Facebook, YouTube, and Pinterest. Extra avatar specs can be requested for WordPress blog, Etzy or Ebay stores, DeviantArt or any other network you wish to use your new logo as an avatar!', '2014-03-14'),
('New Admin Panel Released SDv1.4.5', 3, 'There is a new admin panel released for the Serenito Designs CMS maintenance update 1.4.5. We recommend everyone update from 1.4.4 who hasn’t already, and we have stopped accepting support requests regarding the CMS or admin panel to those running 1.4.2 or earlier as they are no longer supported. The new version includes numerous bug fixes for responsive viewing of the admin panel and adds several features for database management and FTP access and permissions.', '2014-03-16'),
('Winter Sale Ends Soon!', 4, 'Our winter sale is coming to a close so this is your last chance to take advantage of our reduced prices. The logo design package is still 40% off and the web design package is 15% off. Also if you’re an existing customer and you refer a friend to our logo design package in the next three weeks they will get an additional 5% off and you will receive 5% off your next billing cycle.', '2014-03-18'),
('We Have a New Lead Developer!', 5, 'Our new lead developer, John Smith, promises to bring exciting new changes to our company with his knowledge of PHP and responsive web design. His first project is a complete revamp of the admin panel, particularly as it behaves on mobile or tablets. There will also be a couple maintenance updates coming to the admin panel soon as John continues to work through all the bug reports users have submitted. So please continue to do so! We can fix the problems unless you let us know there is one, so thanks for your continued support of Serenito Designs and please join us in welcoming John Smith to the dev team!', '2014-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `First` varchar(60) NOT NULL,
  `Last` varchar(60) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `City` varchar(80) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `Products` varchar(200) NOT NULL,
  UNIQUE KEY `Order ID` (`Order ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order ID`, `First`, `Last`, `Address`, `City`, `State`, `Zip`, `Products`) VALUES
(1, 'Troy', 'Uyan', '15814 Ne 18th Ct.', 'Vancouver', 'WA', '98686', 'Logo Design, Web Design'),
(2, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', ''),
(3, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', 'Array'),
(4, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', ', , , '),
(5, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', '0'),
(6, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', 'Logo DesignBranding PackageBase Web DesignFull Responsive Web Design'),
(7, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', 'Logo Design  Branding Package  Base Web Design  Full Responsive Web Design  '),
(8, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', 'Branding Package  Base Web Design  '),
(9, 'First_Name', 'Last_Name', 'Address', 'City', 'AL', '90210', 'Branding Package  Base Web Design  '),
(10, 'First_Name', 'Last_Name', 'Address', 'City', 'NE', '65466', 'Full Responsive Web Design  '),
(11, 'First_Name', 'Last_Name', 'Address', 'City', 'NE', '65466', 'Full Responsive Web Design  '),
(12, 'First_Name', 'Last_Name', 'Address', 'City', 'GA', '90210', 'Logo Design  Full Responsive Web Design  '),
(13, 'dsad', 'Last_Name', 'dsa', 'dds', 'AL', '90210', 'Logo Design  Branding Package  Full Responsive Web Design  ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Name` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Desc` text NOT NULL,
  `Image` varchar(80) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Name`, `Price`, `Desc`, `Image`) VALUES
('Logo Design', 50, 'A professional logo design for your personal brand or company.', 'img/logo_logo.png'),
('Branding Package', 200, 'All the tools and social media network content needed to run a successful business with a defined image and a social media presence.', 'img/logo_social.png'),
('Base Web Design', 6000, 'Base website design package.', 'img/logo_wd.png'),
('Full Responsive Web Design', 10000, 'Fully responsive-adaptive web design package including the branding package.', 'img/logo_rwd.png');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Avatar` varchar(30) NOT NULL,
  `Content` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`ID`, `Name`, `Date`, `Avatar`, `Content`) VALUES
(1, 'Troy Uyan', '2014-03-01', 'img/twitter_troy.jpeg', 'Q: What did one uranium-238 nucleus say to the other?\r\nA: "Gotta split!"\r\nLOL! #NerdJokes'),
(2, 'Troy Uyan', '2014-03-04', 'img/twitter_troy.jpeg', 'Ah-ha! I knew Yogi bears first name was secretly Lawrence!'),
(3, 'Jino Conklin', '2014-03-05', 'img/twitter_jino.jpeg', 'Style around your programming. Don''t program around your style.'),
(4, 'Hunter James Nelson', '2014-03-07', 'img/twitter_hunter.jpeg', 'umm, my laptop can recognize who was in the pictures on my phone and create respective folders per person. Mind blown!'),
(5, 'LaRhea Phillips', '2014-03-07', 'img/twitter_larhea.jpeg', 'I started following @ProBirdRights, best decision ever.'),
(6, 'Moses Torres', '2014-03-08', 'img/twitter_moses.jpeg', 'Good morning world, what challenges would you have me overcome today. #BringIt'),
(7, 'Troy Uyan', '2014-03-10', 'img/twitter_troy.jpeg', 'Why can''t you trust an atom?\r\n\r\nThey make up everything.'),
(8, 'Jesse Byars', '2014-03-11', 'img/twitter_jesse.jpeg', 'I have to tweet again. I have been compelled.'),
(9, 'Nicholas Eli', '2014-03-12', 'img/twitter_nick.jpeg', 'We are a movement. Expect improvement.'),
(10, 'Nate Shoemaker', '2014-03-14', 'img/twitter_nate.jpeg', 'Note to self: invest in private repo''s on GitHub.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
