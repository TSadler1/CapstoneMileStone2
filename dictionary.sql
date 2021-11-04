-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 07:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` text NOT NULL,
  `hint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`, `hint`) VALUES
(1, 'GIVE ME LIBERTY OR GIVE ME DEATH', 'by PatricK Henry'),
(2, 'DONT TREAD ON ME', 'Gadsden Flag'),
(3, 'NOW IS THE TIME FOR ALL GOOD MEN TO COME TO THE AID OF THEIR COUNTRY', 'by Charles E. Weller'),
(4, 'GOD HELPS THOSE WHO HELP THEMSELVES', 'by Algernon Sidney'),
(5, 'QUOTH THE RAVEN NEVERMORE', 'by Edgar Allan Poe'),
(6, 'STRIKE MAN STRIKE', 'by Sir Walter Raleigh'),
(7, 'SPREAD LOVE EVERYWHERE YOU GO', 'by Mother Teresa'),
(8, 'LET NO ONE EVER COME TO YOU WITHOUT LEAVING HAPPIER', 'by Mother Teresa'),
(9, 'WHEN YOU REACH THE END OF YOUR ROPE TIE A KNOT IN IT AND HANG ON', 'by Franklin D. Roosevelt'),
(10, 'THE FURTURE BELONGS TO THOSE WHO BELIEVE IN THE BEAUTY OF THEIR DREAMS', 'by Eleanor Roosevelt'),
(11, 'WHOEVER IS HAPPY WILL MAKE OTHERS HAPPY TOO', 'by Anne Frank'),
(12, 'WE ARE WHAT WE REPEATEDLY DO', 'by Aristotle'),
(13, 'THE MOST DIFFICULT THING IN LIFE IS TO KNOW THYSELF', 'by Thales'),
(14, 'THE UNEXAMINED LIFE IS NOT WORTH LIVING', 'by Socrates'),
(15, 'I CANNOT TEACH ANYBODY ANYTHING I CAN ONLY MAKE THEM THINK', 'by Socrates'),
(16, 'LET HIM WHO WOULD MOVE THE WORLF FIRST MOVE HIMSELF', 'by Socrates'),
(17, 'WE CANNOT LIVE BETTER THAN SEEKING TO BECOME BETTER', 'by Socrates'),
(18, 'WHAT IS A FRIEND A SINGLE SOUL DWELLING IN TWO BODIES', 'by Aristotle'),
(19, 'HOPE IS A WAKING DREAM', 'by Aristotle'),
(20, 'HAPPINESS DEPENDS UPON OURSELVES', 'by Aristotle'),
(21, 'A FRIEND TO ALL IS A FRIEND TO NONE', 'by Aristotle'),
(22, 'PLEASURE IN THE JOB PUTS PERFECTION IN THE WORK', 'by Aristotle'),
(23, 'WE CANNOT LEARN WITHOUT PAIN', 'by Aristotle'),
(24, 'PATIENCE IS BITTER BUT ITS FRUIT IS SWEET', 'by Aristotle'),
(25, 'WIT IS EDUCATED INSOLENCE', 'by Aristotle'),
(26, 'BUT TRULY IF I WERE NOT ALEXANDER I WOULD BE DIOGENES', 'by Alexander the Great'),
(27, 'THERE IS NOTHING IMPOSSIBLE TO HIM WHO WILL TRY', 'by Alexander the Great'),
(28, 'A TOMB NOW SUFFICES HIM FOR WHOM THE WORLD WAS NOT ENOUGH', 'on the tombstone epitaph of Alexander the Great'),
(29, 'THERE ARE NO MORE WORLDS TO CONQUER', 'by Alexander the Great'),
(30, 'POVERTY IS A VIRTURE WHICH ONE CAN TEACH ONESELF', 'by Diogenes'),
(31, 'IN A RICH MANS HOUSE THERE IS NO PLACE TO SPIT BUT HIS FACE', 'by Diogenes'),
(32, 'THE MOB IS THE MOTHER OF TYRANTS', 'by Diogenes'),
(33, 'IT IS BETTER TO OFFER NO EXCUSE THAT A BAD ONE', 'by George Washington'),
(34, 'IT IS BETTER TO BE ALONE THAN IN BAD COMPANY', 'by George Washington'),
(35, 'IF FREEDOM OF SPEECH IS TAKEN AWAY THEN DUMB AND SILENT WE MAY BE LED LIKE SHEEP TO THE SLAUGHTER', 'by George Washington'),
(36, 'HUMAN HAPPINESS AND MORAL DUTY ARE INSEPARABLY CONNECTED', 'by George Washington'),
(37, 'GUARD AGAINST THE IMPOSTURES OF PRETENDED PATRIOTISM', 'by George Washington'),
(38, 'FEW MEN HAVE VIRTURE TO WITHSTAND THE HIGHEST BIDDER', 'by George Washington'),
(39, 'THERE WAS NEVER A GOOD WAR OR A BAD PEACE', 'by Benjamin Franklin'),
(40, 'LOVE YOUR ENEMIES FOR THEY TELL YOU YOUR FAULTS', 'by Benjamin Franklin'),
(41, 'HE THAT LIES DOWN WITH DOGS SHALL RISE UP WITH FLEAS', 'by Benjamin Franklin'),
(42, 'WELL DONE IS BETTER THAN WELL SAID', 'by Benjamin Franklin'),
(43, 'A TRUE FRIEND IS THE BEST POSSESSION', 'by Benjamin Franklin'),
(44, 'NO GAINS WITHOUT PAINS', 'by Benjamin Franklin'),
(45, 'PARDONING THE BAD IS INJURING THE GOOD', 'by Benjamin Franklin'),
(46, 'HASTE MAKES WASTE', 'by Benjamin Franklin'),
(47, 'WISH NOT SO MUCH TO LIVE LONG AS TO LIVE WELL', 'by Benjamin Franklin'),
(48, 'NEVER PUT OFF TILL TOMORROW WHAT YOU CAN DO TODAY', 'by Thomas Jefferson'),
(49, 'NEVER TROUBLE ANOTHER FOR WHAT YOU CAN DO YOURSELF', 'by Thomas Jefferson'),
(50, 'PRIDE COSTS US MORE THAN HUNGER THIRST AND COLD', 'by Thomas Jefferson'),
(51, 'HOW MUCH PAIN HAVE COST US THE EVILS WHIHC HAVE NEVER HAPPENED', 'by Thomas Jefferson'),
(52, 'NEVER PUT OFF TILL TOMORROW WHAT YOU CAN DO TODAY', 'by Thomas Jefferson'),
(53, 'IN A WAR YOU CAN ONLY BE KILLED ONCE BUT IN POLITICS MANY TIMES', 'by Winston Churchill'),
(54, 'IF YOU ARE GOING THROUGH HELL KEEP GOING', 'by Winston Churchill'),
(55, 'KITES RISE HIGHEST AGAINST THE WIND NOT WITH IT', 'by Winston Churchill'),
(56, 'THE GREATEST LESSON IN LIFE IS TO KNOW THAT EVEN FOOLS ARE RIGHT SOMETIMES', 'by Winston Churchill'),
(57, 'WE ARE MASTERS OF UNSAID WORDS BUT SLAVES OF THOSE WE LET SLIP OUT', 'by Winston Churchill'),
(58, 'A JOKE IS A VERY SERIOUS THING', 'by Winston Churchill'),
(59, 'GOOD AND GREAT ARE SELDOM IN THE SAME MAN', 'by Winston Churchill'),
(60, 'THE EMPIRES OF THE FUTURE ARE THE EMPIRES OF THE MIND', 'by Winston Churchill'),
(61, 'LIFE IS FRAUGHT WITH OPPURTUNITIES TO KEEP YOUR MOUTH SHUT', 'by Winston Churchill'),
(62, 'THE MALICE OF THE WICKED WAS REINFORCED BY THE WEAKNESS OF THE VIRTUOUS', 'by Winston Churchill');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `word` text DEFAULT NULL,
  `hint` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `word`, `hint`) VALUES
(2, 'green', 'a color that is a mix of yellow and blue'),
(3, 'red', 'a color that is bright like fire'),
(4, 'black', 'a color that is dark like caves'),
(5, 'crown', 'something worn by kings'),
(6, 'cake', 'a dessert often given on birthdays'),
(7, 'helmet', 'something knights often wear on their heads'),
(11, 'dog', 'the most popular kind of pet'),
(15, 'kitchen', 'a room that food is prepared in'),
(21, 'panther', 'a black leopard'),
(22, 'chair', 'something that is often sat on'),
(23, 'washer', 'an appliance for washing clothes'),
(24, 'dryer', 'an appliance for drying clothes'),
(25, 'detergent', 'a substance used when washing clothes'),
(26, 'refrigerator', 'an appliance that keeps food cold'),
(27, 'laundromat', 'a business where one can wash their clothes'),
(28, 'patron', 'a consistent customer'),
(29, 'saint', 'an individual who is revered as holy'),
(30, 'church', 'a place of Christian worship'),
(31, 'Halloween', 'October 31st'),
(32, 'ghost', 'a spirit of the deceased'),
(33, 'queen', 'the wife of the king'),
(34, 'frankenstein', 'a scientist who creates a monster from pieces of the dead'),
(35, 'pontificate', 'to speak arrogantly'),
(36, 'athena', 'the Greek goddess of Athens'),
(37, 'ares', 'the Greek diety of war'),
(38, 'poseidon', 'the Greek diety of the ocean'),
(39, 'icarus', 'a boy from Greek mythology who flew too close to the sun'),
(40, 'einstein', 'a scientist who developed the theory of relativity'),
(41, 'newton', 'a scientist who developed the theory of universal gravitation'),
(42, 'bacon', 'a popular way to prepare pig meat for breakfast'),
(43, 'princess', 'the daughter of the king'),
(44, 'phone', 'an electronic device used for calling people'),
(45, 'prince', 'the son of the king'),
(46, 'laptop', 'a portable computer'),
(47, 'epidemic', 'an event in which a disease is prevalent in a specific area'),
(48, 'plumber', 'a person who works with water infrastructure'),
(49, 'cruise', 'a vacation voyage in a large ship'),
(50, 'firestorm', 'an extreme fire that develops its own system of weather'),
(51, 'hurricane', 'a storm with immense wind and rainfall that begins as a tropical storm'),
(52, 'tornado', 'a destructive funnel of wind'),
(53, 'cupcake', 'a small cake with distinct icing'),
(54, 'cherry', 'a stone fruit that is red in color'),
(55, 'apple', 'a fruit that is typically red in color and is common in fairytales'),
(56, 'throne', 'a seat in which kings or queens sit'),
(57, 'whale', 'the largest mammal in the world'),
(58, 'octopus', 'a cephalopod with eight limbs'),
(59, 'squid', 'a cephalopod with ten limbs that is used to make calamari'),
(60, 'eel', 'a serpentine fish'),
(61, 'dolphin', 'an extremely intelligent aquatic mammal'),
(62, 'rainbow', 'colors in the sky caused by light rays reflecting off of water droplets'),
(63, 'ruby', 'a popular red gemstone'),
(64, 'emerald', 'a popular green gemstone'),
(65, 'amethyst', 'a popular purple gemstone that is also the birthstone of February'),
(72, 'owl', 'a nocturnal bird'),
(73, 'eagle', 'a bird of prey that often represents U.S.A.'),
(74, 'onomatopoeia', 'a word that sounds like what it represents'),
(75, 'palindrome', 'a word or phrase such as racecar, step on no pets, civic, deed, madam'),
(76, 'diamond', 'a generally clear gemstone that is used in wedding rings'),
(77, 'citrine', 'a yellow variety of quartz'),
(78, 'tsavorite', 'a green member of the garnet gemstone group'),
(79, 'jade', 'a generally green stone that is often utilized for ornamentations in China'),
(80, 'zoo', 'a place where generally wild and exotic animals are exhibited'),
(81, 'museum', 'a place in which historical artifacts are exhibited'),
(82, 'aquarium', 'a place in which sea fauna and flora are exhibited'),
(83, 'public', 'something that is not private'),
(84, 'private', 'something that is not public'),
(85, 'sandwich', 'two slices of bread with something between'),
(86, 'embrace', 'to accept or to hug'),
(87, 'existentialism', 'the question of why humans live'),
(88, 'cathedral', 'a large Catholic church that has a bishop'),
(89, 'ventilation', 'a the movement of air between spaces'),
(90, 'parent', 'an individual with a child'),
(91, 'pope', 'the leader of the Catholic Church'),
(92, 'lantern', 'a portable lamp'),
(93, 'jackolantern', 'a carved pumpkin with a light inside of it'),
(94, 'time', 'something that is always passing'),
(95, 'compassion', 'sympathy for the pain of another individual or group'),
(96, 'rug', 'an often ornate floor covering'),
(97, 'bed', 'a piece of furniture that you sleep on'),
(98, 'bunkbed', 'a piece of furniture with stacked sleeping spaces'),
(99, 'fortissimo', 'an Italian word used in music to denote that it should be played very loudly'),
(115, 'garlic', 'a vegetable that is often used to ward off vampires'),
(125, 'mouse', 'a small rat-like rodent'),
(126, 'cat', 'a common term for a feline'),
(127, 'dog', 'a common term for a canine'),
(128, 'equine', 'the scientific term for horse'),
(129, 'fir', 'a coniferous tree with single needle groups in its twigs'),
(130, 'tomato', 'a red fruit that is commonly mischaracterized as a vegetable'),
(131, 'potato', 'a starchy tuber that was a staple of Ireland'),
(132, 'caterpillar', 'an infant butterfly'),
(133, 'mummy', 'a deceased Egyptian who has had their organs removed and is wrapped in cloth'),
(135, 'tiger', 'a large feline with stripes'),
(524, 'bungalow', 'a single story home'),
(533, 'lion', 'a large feline with a mane'),
(535, 'cheetah', 'a golden feline with spots and tearlines'),
(822, 'chair', 'something that is often sat on'),
(915, 'kitchen', 'a room that food is prepared in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
