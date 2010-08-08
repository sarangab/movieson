-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2010 at 09:41 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `openhack`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `name` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='table containing movie list' AUTO_INCREMENT=134 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`name`, `movie_id`) VALUES
('Citizen Kane', 1),
('Casablanca', 2),
('The Godfather', 3),
('Gone with the Wind', 4),
('Lawrence of Arabia', 5),
('The Wizard of Oz', 6),
('The Graduate', 7),
('On the Waterfront', 8),
('Schindler''s List', 9),
('Singin'' in the Rain', 10),
('It''s a Wonderful Life', 11),
('Sunset Blvd.', 12),
('The Bridge on the River Kwai', 13),
('Some Like It Hot', 14),
('Star Wars Episode IV: A New Hope', 15),
('All About Eve', 16),
('The African Queen', 17),
('Psycho', 18),
('Chinatown', 19),
('One Flew Over the Cuckoo''s Nest', 20),
('The Grapes of Wrath', 21),
('2001: A Space Odyssey', 22),
('The Maltese Falcon', 23),
('Raging Bull', 24),
('E.T. the Extra-Terrestrial', 25),
('Dr. Strangelove', 26),
('Bonnie and Clyde', 27),
('Apocalypse Now', 28),
('Mr. Smith Goes to Washington', 29),
('The Treasure of the Sierra Madre', 30),
('Annie Hall', 31),
('The Godfather Part II', 32),
('High Noon', 33),
('To Kill a Mockingbird', 34),
('It Happened One Night', 35),
('Midnight Cowboy', 36),
('The Best Years of Our Lives', 37),
('Double Indemnity', 38),
('Doctor Zhivago', 39),
('North by Northwest', 40),
('West Side Story', 41),
('Rear Window', 42),
('King Kong', 43),
('The Birth of a Nation', 44),
('A Streetcar Named Desire', 45),
('A Clockwork Orange', 46),
('Taxi Driver', 47),
('Jaws', 48),
('Snow White and the Seven Dwarfs', 49),
('Butch Cassidy and the Sundance Kid', 50),
('The Philadelphia Story', 51),
('From Here to Eternity', 52),
('Amadeus', 53),
('All Quiet on the Western Front', 54),
('The Sound of Music', 55),
('MASH', 56),
('The Third Man', 57),
('Fantasia', 58),
('Rebel Without a Cause', 59),
('Raiders of the Lost Ark', 60),
('Vertigo', 61),
('Tootsie', 62),
('Stagecoach', 63),
('Close Encounters of the Third Kind', 64),
('The Silence of the Lambs', 65),
('Network', 66),
('The Manchurian Candidate', 67),
('An American in Paris', 68),
('Shane', 69),
('The French Connection', 70),
('Forrest Gump', 71),
('Ben-Hur', 72),
('Wuthering Heights', 73),
('The Gold Rush', 74),
('Dances with Wolves', 75),
('City Lights', 76),
('American Graffiti', 77),
('Rocky', 78),
('The Deer Hunter', 79),
('The Wild Bunch', 80),
('Modern Times', 81),
('Giant', 82),
('Platoon', 83),
('Fargo', 84),
('Duck Soup', 85),
('Mutiny on the Bounty', 86),
('Frankenstein', 87),
('Easy Rider', 88),
('Patton', 89),
('The Jazz Singer', 90),
('My Fair Lady', 91),
('A Place in the Sun', 92),
('The Apartment', 93),
('Goodfellas', 94),
('Pulp Fiction', 95),
('The Searchers', 96),
('Bringing Up Baby', 97),
('Unforgiven', 98),
('Guess Who''s Coming to Dinner', 99),
('Yankee Doodle Dandy', 100),
('Duplicity', 112),
('Hancock', 113),
('Coraline', 114),
('Role Models', 115),
('Rendition', 116),
('Batman Begins', 117),
('Traitor', 118),
('Wanted', 119),
('Deep Bule Sea', 120),
('In & Out', 121),
('Chameleon', 122),
('Sudden Death', 123),
('Get Smart', 124),
('Angels & Demons', 125),
('Point Break', 126),
('Dead Man Running', 127),
('If Lucy fell', 128),
('The Foreigner', 129),
('The In Laws', 130),
('Outlander', 131),
('Committed', 132),
('Bullet Proof Monk', 133);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `full name` varchar(40) NOT NULL,
  `email` varchar(320) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='maintains user list' AUTO_INCREMENT=100006 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `full name`, `email`) VALUES
(100000, 'aakash', 'aakpwd', 'aakash verma', 'aakashverma@gmail.com'),
(100001, 'akshay', 'akspwd', 'akshay sharma', 'akshaysharma@gmail.com'),
(100002, 'atishay', 'atipwd', 'atishay prakash', 'atishayprakash@gmail.com'),
(100003, 'micheal ', 'micpwd', 'micheal jones', 'michealjones@gmail.com'),
(100004, 'pierre', 'edwpwd', 'pierre edwards', 'pierreedwards@gmail.com'),
(100005, 'simon ', 'simpwd', 'simon hawkins', 'simonhawkins@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_movie`
--

CREATE TABLE IF NOT EXISTS `user_movie` (
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='user movies to watch';

--
-- Dumping data for table `user_movie`
--

INSERT INTO `user_movie` (`user_id`, `movie_id`) VALUES
(101, 101),
(101, 101),
(101, 101),
(101, 101),
(101, 101),
(101, 101),
(101, 101),
(101, 101),
(101, 101),
(101, 101),
(100000, 1),
(100000, 2),
(100000, 25),
(100000, 36);
