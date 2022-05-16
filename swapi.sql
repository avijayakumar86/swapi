-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 01:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `sw_film`
--

CREATE TABLE `sw_film` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `film_name` varchar(100) NOT NULL,
  `episode_id` int(11) NOT NULL,
  `opening_crawl` longtext NOT NULL,
  `film_director` int(11) NOT NULL,
  `film_producer` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `film_characters` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_film`
--

INSERT INTO `sw_film` (`id`, `film_id`, `film_name`, `episode_id`, `opening_crawl`, `film_director`, `film_producer`, `release_date`, `film_characters`, `active_status`, `created_date`, `modified_date`) VALUES
(1, 1, 'A New Hope', 4, 'It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire\'s\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire\'s\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....', 0, 0, '1977-05-25', '1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,18,19,81', 0, '2022-05-16 05:14:55', '0000-00-00 00:00:00'),
(2, 2, 'The Empire Strikes Back', 5, 'It is a dark time for the\r\nRebellion. Although the Death\r\nStar has been destroyed,\r\nImperial troops have driven the\r\nRebel forces from their hidden\r\nbase and pursued them across\r\nthe galaxy.\r\n\r\nEvading the dreaded Imperial\r\nStarfleet, a group of freedom\r\nfighters led by Luke Skywalker\r\nhas established a new secret\r\nbase on the remote ice world\r\nof Hoth.\r\n\r\nThe evil lord Darth Vader,\r\nobsessed with finding young\r\nSkywalker, has dispatched\r\nthousands of remote probes into\r\nthe far reaches of space....', 0, 0, '1980-05-17', '1,2,3,4,5,10,13,14,18,20,21,22,23,24,25,26', 0, '2022-05-16 05:14:55', '0000-00-00 00:00:00'),
(3, 3, 'Return of the Jedi', 6, 'Luke Skywalker has returned to\r\nhis home planet of Tatooine in\r\nan attempt to rescue his\r\nfriend Han Solo from the\r\nclutches of the vile gangster\r\nJabba the Hutt.\r\n\r\nLittle does Luke know that the\r\nGALACTIC EMPIRE has secretly\r\nbegun construction on a new\r\narmored space station even\r\nmore powerful than the first\r\ndreaded Death Star.\r\n\r\nWhen completed, this ultimate\r\nweapon will spell certain doom\r\nfor the small band of rebels\r\nstruggling to restore freedom\r\nto the galaxy...', 0, 0, '1983-05-25', '1,2,3,4,5,10,13,14,16,18,20,21,22,25,27,28,29,30,31,45', 0, '2022-05-16 05:14:55', '0000-00-00 00:00:00'),
(4, 4, 'The Phantom Menace', 1, 'Turmoil has engulfed the\r\nGalactic Republic. The taxation\r\nof trade routes to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping to the small planet\r\nof Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly debates\r\nthis alarming chain of events,\r\nthe Supreme Chancellor has\r\nsecretly dispatched two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to settle the conflict....', 0, 0, '1999-05-19', '2,3,10,11,16,20,21,32,33,34,35,36,37,38,39,40,41,42,43,44,46,47,48,49,50,51,52,53,54,55,56,57,58,59', 0, '2022-05-16 05:14:55', '0000-00-00 00:00:00'),
(5, 5, 'Attack of the Clones', 2, 'There is unrest in the Galactic\r\nSenate. Several thousand solar\r\nsystems have declared their\r\nintentions to leave the Republic.\r\n\r\nThis separatist movement,\r\nunder the leadership of the\r\nmysterious Count Dooku, has\r\nmade it difficult for the limited\r\nnumber of Jedi Knights to maintain \r\npeace and order in the galaxy.\r\n\r\nSenator Amidala, the former\r\nQueen of Naboo, is returning\r\nto the Galactic Senate to vote\r\non the critical issue of creating\r\nan ARMY OF THE REPUBLIC\r\nto assist the overwhelmed\r\nJedi....', 0, 0, '2002-05-16', '2,3,6,7,10,11,20,21,22,33,35,36,40,43,46,51,52,53,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,82', 0, '2022-05-16 05:14:55', '0000-00-00 00:00:00'),
(6, 6, 'Revenge of the Sith', 3, 'War! The Republic is crumbling\r\nunder attacks by the ruthless\r\nSith Lord, Count Dooku.\r\nThere are heroes on both sides.\r\nEvil is everywhere.\r\n\r\nIn a stunning move, the\r\nfiendish droid leader, General\r\nGrievous, has swept into the\r\nRepublic capital and kidnapped\r\nChancellor Palpatine, leader of\r\nthe Galactic Senate.\r\n\r\nAs the Separatist Droid Army\r\nattempts to flee the besieged\r\ncapital with their valuable\r\nhostage, two Jedi Knights lead a\r\ndesperate mission to rescue the\r\ncaptive Chancellor....', 0, 0, '2005-05-19', '1,2,3,4,5,6,7,10,11,12,13,20,21,33,35,46,51,52,53,54,55,56,58,63,64,67,68,75,78,79,80,81,82,83', 0, '2022-05-16 05:14:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sw_people`
--

CREATE TABLE `sw_people` (
  `id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `height` int(10) NOT NULL,
  `mass` int(10) NOT NULL,
  `hair_color` varchar(20) NOT NULL,
  `skin_color` varchar(20) NOT NULL,
  `eye_color` varchar(20) NOT NULL,
  `birth_year` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `active_status` int(5) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_people`
--

INSERT INTO `sw_people` (`id`, `people_id`, `fullname`, `height`, `mass`, `hair_color`, `skin_color`, `eye_color`, `birth_year`, `gender`, `active_status`, `created_date`, `modified_date`) VALUES
(1, 1, 'Luke Skywalker', 172, 77, 'blond', 'fair', 'blue', '19BBY', 'male', 0, '2022-05-15 20:17:16', '2022-05-16 12:21:34'),
(2, 2, 'C-3PO', 167, 75, 'n/a', 'gold', 'yellow', '112BBY', 'n/a', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(3, 3, 'R2-D2', 96, 32, 'n/a', 'white, blue', 'red', '33BBY', 'n/a', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(4, 4, 'Darth Vader', 202, 136, 'none', 'white', 'yellow', '41.9BBY', 'male', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(5, 5, 'Leia Organa', 150, 49, 'brown', 'light', 'brown', '19BBY', 'female', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(6, 6, 'Owen Lars', 178, 120, 'brown, grey', 'light', 'blue', '52BBY', 'male', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(7, 7, 'Beru Whitesun lars', 165, 75, 'brown', 'light', 'blue', '47BBY', 'female', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(8, 8, 'R5-D4', 97, 32, 'n/a', 'white, red', 'red', 'unknown', 'n/a', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(9, 9, 'Biggs Darklighter', 183, 84, 'black', 'light', 'brown', '24BBY', 'male', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34'),
(10, 10, 'Obi-Wan Kenobi', 182, 77, 'auburn, white', 'fair', 'blue-gray', '57BBY', 'male', 0, '2022-05-16 11:35:09', '2022-05-16 12:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `sw_planets`
--

CREATE TABLE `sw_planets` (
  `id` int(11) NOT NULL,
  `planet_id` int(11) NOT NULL,
  `planet_name` varchar(100) NOT NULL,
  `rotation_period` int(11) NOT NULL,
  `orbital_period` int(11) NOT NULL,
  `diameter` int(11) NOT NULL,
  `climate` varchar(50) NOT NULL,
  `gravity` varchar(50) NOT NULL,
  `terrain` varchar(50) NOT NULL,
  `surface_water` int(10) NOT NULL,
  `population` int(11) NOT NULL,
  `residents` varchar(100) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_planets`
--

INSERT INTO `sw_planets` (`id`, `planet_id`, `planet_name`, `rotation_period`, `orbital_period`, `diameter`, `climate`, `gravity`, `terrain`, `surface_water`, `population`, `residents`, `active_status`) VALUES
(1, 1, 'Tatooine', 23, 304, 10465, 'arid', '1 standard', 'desert', 1, 200000, '1,2,4,6,7,8,9,11,43,62', 0),
(2, 2, 'Alderaan', 24, 364, 12500, 'temperate', '1 standard', 'grasslands, mountains', 40, 2000000000, '5,68,81', 0),
(3, 3, 'Yavin IV', 24, 4818, 10200, 'temperate, tropical', '1 standard', 'jungle, rainforests', 8, 1000, '', 0),
(4, 4, 'Hoth', 23, 549, 7200, 'frozen', '1.1 standard', 'tundra, ice caves, mountain ranges', 100, 0, '', 0),
(5, 5, 'Dagobah', 23, 341, 8900, 'murky', 'N/A', 'swamp, jungles', 8, 0, '', 0),
(6, 6, 'Bespin', 12, 5110, 118000, 'temperate', '1.5 (surface), 1 standard (Cloud City)', 'gas giant', 0, 6000000, '26', 0),
(7, 7, 'Endor', 18, 402, 4900, 'temperate', '0.85 standard', 'forests, mountains, lakes', 8, 30000000, '30', 0),
(8, 8, 'Naboo', 26, 312, 12120, 'temperate', '1 standard', 'grassy hills, swamps, forests, mountains', 12, 2147483647, '3,21,35,36,37,38,39,42,60,61,66', 0),
(9, 9, 'Coruscant', 24, 368, 12240, 'temperate', '1 standard', 'cityscape, mountains', 0, 2147483647, '34,55,74', 0),
(10, 10, 'Kamino', 27, 463, 19720, 'temperate', '1 standard', 'ocean', 100, 1000000000, '22,72,73', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sw_species`
--

CREATE TABLE `sw_species` (
  `id` int(11) NOT NULL,
  `species_id` int(11) NOT NULL,
  `species_name` varchar(100) NOT NULL,
  `classification` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `average_height` int(11) NOT NULL,
  `skin_colors` varchar(100) NOT NULL,
  `hair_colors` varchar(100) NOT NULL,
  `eye_colors` varchar(100) NOT NULL,
  `average_lifespan` int(11) NOT NULL,
  `homeworld` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_species`
--

INSERT INTO `sw_species` (`id`, `species_id`, `species_name`, `classification`, `designation`, `average_height`, `skin_colors`, `hair_colors`, `eye_colors`, `average_lifespan`, `homeworld`, `language`, `people`, `active_status`) VALUES
(1, 1, 'Human', 'mammal', 'sentient', 180, 'caucasian, black, asian, hispanic', 'blonde, brown, black, red', 'brown, blue, green, hazel, grey, amber', 120, 0, 0, 66, 0),
(2, 3, 'Wookie', 'mammal', 'sentient', 210, 'gray', 'black, brown', 'blue, green, yellow, brown, golden, red', 400, 0, 0, 13, 0),
(3, 4, 'Rodian', 'sentient', 'reptilian', 170, 'green, blue', 'n/a', 'black', 0, 0, 0, 15, 0),
(4, 5, 'Hutt', 'gastropod', 'sentient', 300, 'green, brown, tan', 'n/a', 'yellow, red', 1000, 0, 0, 16, 0),
(5, 6, 'Yoda\'s species', 'mammal', 'sentient', 66, 'green, yellow', 'brown, white', 'brown, green, yellow', 900, 0, 0, 20, 0),
(6, 7, 'Trandoshan', 'reptile', 'sentient', 200, 'brown, green', 'none', 'yellow, orange', 0, 0, 0, 24, 0),
(7, 8, 'Mon Calamari', 'amphibian', 'sentient', 160, 'red, blue, brown, magenta', 'none', 'yellow', 0, 0, 0, 27, 0),
(8, 9, 'Ewok', 'mammal', 'sentient', 100, 'brown', 'white, brown, black', 'orange, brown', 0, 0, 0, 30, 0),
(9, 10, 'Sullustan', 'mammal', 'sentient', 180, 'pale', 'none', 'black', 0, 0, 0, 31, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sw_starship`
--

CREATE TABLE `sw_starship` (
  `id` int(11) NOT NULL,
  `starship_id` int(11) NOT NULL,
  `starship_name` varchar(100) NOT NULL,
  `starship_model` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `cost_in_credits` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `max_atmosphering_speed` int(11) NOT NULL,
  `crew` varchar(10) NOT NULL,
  `passengers` int(11) NOT NULL,
  `cargo_capacity` int(11) NOT NULL,
  `consumables` varchar(20) NOT NULL,
  `hyperdrive_rating` varchar(10) NOT NULL,
  `mglt` int(11) NOT NULL,
  `starship_class` varchar(50) NOT NULL,
  `pilots` varchar(200) NOT NULL DEFAULT '0',
  `active_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_starship`
--

INSERT INTO `sw_starship` (`id`, `starship_id`, `starship_name`, `starship_model`, `manufacturer`, `cost_in_credits`, `length`, `max_atmosphering_speed`, `crew`, `passengers`, `cargo_capacity`, `consumables`, `hyperdrive_rating`, `mglt`, `starship_class`, `pilots`, `active_status`) VALUES
(1, 2, 'CR90 corvette', 'CR90 corvette', 'Corellian Engineering Corporation', 3500000, 150, 950, '30-165', 600, 3000000, '1 year', '2.0', 60, 'corvette', '', 0),
(2, 3, 'Star Destroyer', 'Imperial I-class Star Destroyer', 'Kuat Drive Yards', 150000000, 1, 975, '47,060', 0, 36000000, '2 years', '2.0', 60, 'Star Destroyer', '', 0),
(3, 5, 'Sentinel-class landing craft', 'Sentinel-class landing craft', 'Sienar Fleet Systems, Cyngus Spaceworks', 240000, 38, 1000, '5', 75, 180000, '1 month', '1.0', 70, 'landing craft', '', 0),
(4, 9, 'Death Star', 'DS-1 Orbital Battle Station', 'Imperial Department of Military Research, Sienar F', 2147483647, 120000, 0, '342,953', 843, 2147483647, '3 years', '4.0', 10, 'Deep Space Mobile Battlestation', '', 0),
(5, 10, 'Millennium Falcon', 'YT-1300 light freighter', 'Corellian Engineering Corporation', 100000, 34, 1050, '4', 6, 100000, '2 months', '0.5', 75, 'Light freighter', '13,14,25,31', 0),
(6, 11, 'Y-wing', 'BTL Y-wing', 'Koensayr Manufacturing', 134999, 14, 1000, '2', 0, 110, '1 week', '1.0', 80, 'assault starfighter', '', 0),
(7, 12, 'X-wing', 'T-65 X-wing', 'Incom Corporation', 149999, 13, 1050, '1', 0, 110, '1 week', '1.0', 100, 'Starfighter', '1,9,18,19', 0),
(8, 13, 'TIE Advanced x1', 'Twin Ion Engine Advanced x1', 'Sienar Fleet Systems', 0, 9, 1200, '1', 0, 150, '5 days', '1.0', 105, 'Starfighter', '4', 0),
(9, 15, 'Executor', 'Executor-class star dreadnought', 'Kuat Drive Yards, Fondor Shipyards', 1143350000, 19000, 0, '279,144', 38000, 250000000, '6 years', '2.0', 40, 'Star dreadnought', '', 0),
(10, 17, 'Rebel transport', 'GR-75 medium transport', 'Gallofree Yards, Inc.', 0, 90, 650, '6', 90, 19000000, '6 months', '4.0', 20, 'Medium transport', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sw_vehicle`
--

CREATE TABLE `sw_vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(100) NOT NULL,
  `vehicle_model` varchar(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `cost_in_credits` int(11) NOT NULL,
  `length` varchar(10) NOT NULL,
  `max_atmosphering_speed` varchar(10) NOT NULL,
  `crew` int(11) NOT NULL,
  `passengers` int(11) NOT NULL,
  `cargo_capacity` int(11) NOT NULL,
  `consumables` varchar(10) NOT NULL,
  `vehicle_class` varchar(50) NOT NULL,
  `pilots` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sw_vehicle`
--

INSERT INTO `sw_vehicle` (`id`, `vehicle_id`, `vehicle_name`, `vehicle_model`, `manufacturer`, `cost_in_credits`, `length`, `max_atmosphering_speed`, `crew`, `passengers`, `cargo_capacity`, `consumables`, `vehicle_class`, `pilots`, `active_status`) VALUES
(1, 4, 'Sand Crawler', 'Digger Crawler', 'Corellia Mining Corporation', 150000, '36.8 ', '30', 46, 30, 50000, '2 months', 'wheeled', '', 0),
(2, 6, 'T-16 skyhopper', 'T-16 skyhopper', 'Incom Corporation', 14500, '10.4 ', '1200', 1, 1, 50, '0', 'repulsorcraft', '', 0),
(3, 7, 'X-34 landspeeder', 'X-34 landspeeder', 'SoroSuub Corporation', 10550, '3.4 ', '250', 1, 1, 5, 'unknown', 'repulsorcraft', '', 0),
(4, 8, 'TIE/LN starfighter', 'Twin Ion Engine/Ln Starfighter', 'Sienar Fleet Systems', 0, '6.4', '1200', 1, 0, 65, '2 days', 'starfighter', '', 0),
(5, 14, 'Snowspeeder', 't-47 airspeeder', 'Incom corporation', 0, '4.5', '650', 2, 0, 10, 'none', 'airspeeder', '1,18', 0),
(6, 16, 'TIE bomber', 'TIE/sa bomber', 'Sienar Fleet Systems', 0, '7.8', '850', 1, 0, 0, '2 days', 'space/planetary bomber', '', 0),
(7, 18, 'AT-AT', 'All Terrain Armored Transport', 'Kuat Drive Yards, Imperial Department of Military Research', 0, '20', '60', 5, 40, 1000, 'unknown', 'assault walker', '', 0),
(8, 19, 'AT-ST', 'All Terrain Scout Transport', 'Kuat Drive Yards, Imperial Department of Military Research', 0, '2', '90', 2, 0, 200, 'none', 'walker', '13', 0),
(9, 20, 'Storm IV Twin-Pod cloud car', 'Storm IV Twin-Pod', 'Bespin Motors', 75000, '7', '1500', 2, 0, 10, '1 day', 'repulsorcraft', '', 0),
(10, 24, 'Sail barge', 'Modified Luxury Sail Barge', 'Ubrikkian Industries Custom Vehicle Division', 285000, '30', '100', 26, 500, 2000000, 'Live food ', 'sail barge', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sw_film`
--
ALTER TABLE `sw_film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_people`
--
ALTER TABLE `sw_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_planets`
--
ALTER TABLE `sw_planets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_species`
--
ALTER TABLE `sw_species`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_starship`
--
ALTER TABLE `sw_starship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sw_vehicle`
--
ALTER TABLE `sw_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sw_film`
--
ALTER TABLE `sw_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sw_people`
--
ALTER TABLE `sw_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sw_planets`
--
ALTER TABLE `sw_planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sw_species`
--
ALTER TABLE `sw_species`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sw_starship`
--
ALTER TABLE `sw_starship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sw_vehicle`
--
ALTER TABLE `sw_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
