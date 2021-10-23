-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 06:43 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `Sl` int(111) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` char(4) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `img_link` mediumtext NOT NULL,
  `book_desc` longtext NOT NULL,
  `book_loc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`Sl`, `book_name`, `author`, `date`, `genre`, `img_link`, `book_desc`, `book_loc`) VALUES
(1, 'The Arrow of Time', 'Bruce Meyer', '2015', 'Science', 'Arrow-of-Time.webp', 'Anouk H. Henri. Bruce Meyer, The Arrow of Time. Vancouver: Ronsdale Press, 2015. In Meyer\'s latest collection, the universe is an orderly one, home to the perfection of snowflakes and sunflowers that correspond to mathematical laws such as the Fibonacci sequence.', ''),
(2, 'Once', 'Morris Gleitzman', '2005', 'Fiction', 'once.jpg', 'Once is a 2005 children\'s novel by Australian author Morris Gleitzman. It is about a Jewish boy named Felix who lived in Poland and is on a quest to find his book-keeper parents after he sees Nazis burning the books from a Catholic orphanage in which had stayed at for 3 years and 8 months.', 'sample.pdf'),
(3, 'Where the World Ends', 'Geraldine McCaughrean', '2017', 'Historical Fiction', 'wtwe.jpg', 'In the summer of 1727, a group of men and boys from St Kilda are put ashore on a remote sea stac to harvest birds for food. No one returns to collect them. Why? Surely nothing but the end of the world can explain why they have been abandoned to endure storms, starvation and terror.', ''),
(7, 'Ghosts of Ascalon', 'Jeff Grubb and Matt Forbeck', '2009', 'Fantasy Fiction', 'ghost-of-asc.jpg', '250 years ago, Ascalon burned . . . Desperate to defend his land from advancing hordes of bestial charr, King Adelbern summoned the all-powerful Foefire to repel the invaders. But magic can be a double-edged sword, the Foefire burned both charr and human alike. While the charr corpses smoldered, the slain Ascalonians arose again, transformed by their king\'s rage into ghostly protectors and charged with guarding the realm ', ''),
(8, 'Sea of Sorrows', 'Ree Soesbee', '2013', 'Fantasy Fiction', 'sos.jpg', 'An original novel based on Guild Wars, the award-winning epic fantasy massively multiplayer online role-playing game!Death Sails the Seas . . . The lost kingdom of Orr lies beneath the ocean waves, an entire civilization swallowed by an ancient cataclysm.', ''),
(9, 'The Magicians ', 'Lev Grossman', '2009', 'Fantasy Fiction', 'the-magicians.jpg', 'After he graduates from college, he and his friends make a stunning discovery: Fillory, the land of the fantasy novels they read as children, is real and much darker and more dangerous than they could have imagined.', ''),
(10, 'The Magician King', 'Lev Grossman', '2011', 'Fantasy Fiction', 'the-magician-king.jpg', 'The Magician King is a new adult fantasy novel by Lev Grossman, published in 2011 by Viking Press, the sequel to The Magicians. It continues the story of Quentin Coldwater, interweaving it with the story of his high school crush, Julia, who learned magic outside of the standard school setting and joined him in Fillory.', 'sample.pdf'),
(11, 'The Magician\'s Land', 'Lev Grossman', '2014', 'Fantasy Fiction', 'the-magicians-land.jpg', 'The Magician\'s Land is a new adult fantasy novel by Lev Grossman, published in 2014 by Viking Adult, the sequel to The Magician King and the third book in Grossman\'s Magicians trilogy. It continues the story of outcast magician Quentin Coldwater, interweaving it with the story of several of his friends who are questing to save the magical realm of Fillory. ', ''),
(13, 'Little Women', ' Louisa May Alcott', '1869', 'Fiction', 'Louisa-May-Alcott-Little-Women-Penguin-Classics.webp', 'Little Women is a novel by American author Louisa May Alcott which was originally published in two volumes in 1868 and 1869. Alcott wrote the book over several months at the request of her publisher.', ''),
(14, 'To Kill a Mockingbird', 'Harper Lee', '1960', 'Thriller', 'to-kill-a-mockingbard.jpg', 'To Kill a Mockingbird is a novel by Harper Lee published in 1960. Instantly successful, widely read in high schools and middle schools in the United States, it has become a classic of modern American literature, winning the Pulitzer Prize.', ''),
(15, 'Edge of Destiny', 'J. Robert King', '2010', 'Fantasy Fiction', 'endgeofdestiny.jpg', 'Destiny Called, They Answered In the dark recesses of Tyria, elder dragons have awoken from millennial slumbers. First came Primordus, which stirred in the Depths forcing the asura to flee to the surface', ''),
(16, 'Dune', 'Frank Herbert', '1965', 'Science Fiction', 'dune.jpg', 'Dune is a 1965 science-fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny\'s This Immortal for the Hugo Award in 1966, and it won the inaugural Nebula Award for Best Novel.', ''),
(17, 'The Night Tiger', 'Yangsze Choo', '2019', 'Fantasy Fiction', 'the-night-tigher.jpg', 'The Reese Witherspoon x Hello Sunshine Book Club PickINSTANT NEW YORK TIMES BESTSELLER“A sumptuous garden maze of a novel that immerses readers in a complex, vanished world.”', ''),
(18, 'The Ghost Bride', ' Yangsze Choo', '2013', 'Ghost story', 'the-ghost-bride.jpg', 'A haunting, evocative and highly unusual romantic debut and now a Netflix Mandarin original drama premiering January 2020!Seventeen-year-old Li Lan lives in 1890s Malaya with her quietly-ruined father, who returns one evening with a proposition  the fabulously wealthy Lim family want Li Lan to marry their son.', ''),
(19, 'All the Devils Are Here', 'Louise Penny', '2020', 'Mystery', 'all-devils-are-here.jpg', 'The 16th novel by #1 bestselling author Louise Penny finds Chief Inspector Armand Gamache of the Sûreté du Quebec investigating a sinister plot in the City of Light. On their first night in Paris, the Gamaches gather as a family for a bistro dinner with Armand\'s godfather, the billionaire Stephen Horowitz.', '');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset`
--

CREATE TABLE `pass_reset` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `selector` text NOT NULL,
  `token` longtext NOT NULL,
  `expires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sl` int(11) NOT NULL,
  `uname` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_bookslist`
--

CREATE TABLE `user_bookslist` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `book_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`Sl`);

--
-- Indexes for table `pass_reset`
--
ALTER TABLE `pass_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `user_bookslist`
--
ALTER TABLE `user_bookslist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
  MODIFY `Sl` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pass_reset`
--
ALTER TABLE `pass_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_bookslist`
--
ALTER TABLE `user_bookslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
