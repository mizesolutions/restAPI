-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2016 at 08:32 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mizesolu_ewuStats`
--

-- --------------------------------------------------------

--
-- Table structure for table `YEARSTATS`
--

CREATE TABLE IF NOT EXISTS `YEARSTATS` (
  `YEAR` int(4) NOT NULL,
  `COACH` varchar(40) NOT NULL,
  `WIN` int(11) NOT NULL,
  `LOSS` int(11) NOT NULL,
  `TIE` int(11) NOT NULL,
  `PCT` decimal(6,5) NOT NULL,
  `PF` int(11) NOT NULL,
  `PA` int(11) NOT NULL,
  `DELTA` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `YEARSTATS`
--

INSERT INTO `YEARSTATS` (`YEAR`, `COACH`, `WIN`, `LOSS`, `TIE`, `PCT`, `PF`, `PA`, `DELTA`) VALUES
(1901, 'Unknown', 1, 2, 0, '0.33333', 10, 29, -19),
(1902, 'Unknown', 2, 1, 2, '0.60000', 65, 5, 60),
(1903, 'Claude Arthur', 3, 2, 2, '0.57143', 62, 64, -2),
(1904, 'H.E. Harry Smith', 1, 6, 0, '0.14286', 9, 93, -84),
(1905, 'H.E. Harry Smith', 4, 3, 0, '0.57143', 136, 34, 102),
(1906, 'O.P. Paul Lienau', 5, 3, 0, '0.62500', 93, 27, 66),
(1907, 'O.P. Paul Lienau', 3, 2, 0, '0.60000', 22, 55, -33),
(1908, 'Nick Hinch', 2, 3, 0, '0.40000', 88, 95, -7),
(1909, 'Harry Goldsworthy', 0, 3, 0, '0.00000', 2, 46, -44),
(1912, 'Nick Hinch', 0, 1, 0, '0.00000', 6, 13, -7),
(1913, 'Albert Fertsch', 1, 5, 0, '0.16667', 18, 143, -125),
(1914, 'Albert Fertsch', 2, 0, 0, '1.00000', 128, 7, 121),
(1915, 'Albert Fertsch', 1, 1, 0, '0.50000', 8, 13, -5),
(1916, 'Albert Fertsch', 0, 3, 0, '0.00000', 6, 35, -29),
(1920, 'A.A. Vin Eustis', 5, 2, 0, '0.71429', 139, 61, 78),
(1921, 'A.A. Vin Eustis', 3, 3, 0, '0.50000', 121, 70, 51),
(1922, 'A.A. Vin Eustis', 1, 5, 0, '0.16667', 48, 159, -111),
(1923, 'A.A. Vin Eustis', 5, 2, 0, '0.71429', 176, 66, 110),
(1924, 'A.A. Vin Eustis', 3, 4, 1, '0.43750', 64, 70, -6),
(1925, 'A.A. Vin Eustis', 6, 3, 0, '0.66667', 144, 92, 52),
(1926, 'A.A. Vin Eustis', 1, 6, 0, '0.14286', 30, 192, -162),
(1927, 'Arthur C. Woodward', 3, 5, 0, '0.37500', 89, 164, -75),
(1928, 'Arthur C. Woodward', 4, 3, 0, '0.57143', 59, 63, -4),
(1929, 'G.M. Brick Johnson', 4, 4, 0, '0.50000', 117, 64, 53),
(1930, 'W.B. Red Reese', 3, 4, 0, '0.42857', 102, 44, 58),
(1931, 'W.B. Red Reese', 5, 1, 2, '0.75000', 189, 53, 136),
(1932, 'W.B. Red Reese', 3, 2, 3, '0.56250', 99, 57, 42),
(1933, 'W.B. Red Reese', 6, 2, 0, '0.75000', 206, 47, 159),
(1934, 'W.B. Red Reese', 6, 1, 0, '0.85714', 153, 44, 109),
(1935, 'W.B. Red Reese', 4, 2, 1, '0.64286', 81, 33, 48),
(1936, 'W.B. Red Reese', 7, 1, 0, '0.87500', 115, 49, 66),
(1937, 'W.B. Red Reese', 6, 1, 0, '0.85714', 134, 40, 94),
(1938, 'W.B. Red Reese', 6, 2, 1, '0.72222', 90, 61, 29),
(1939, 'W.B. Red Reese', 5, 3, 0, '0.62500', 134, 65, 69),
(1940, 'W.B. Red Reese', 6, 2, 0, '0.75000', 142, 48, 94),
(1941, 'W.B. Red Reese', 6, 2, 1, '0.72222', 122, 46, 76),
(1942, 'Ralph Peterson', 3, 4, 0, '0.42857', 65, 68, -3),
(1946, 'W.B. Red Reese', 4, 3, 1, '0.56250', 119, 50, 69),
(1947, 'Albert H. Abe Poffenroth', 6, 1, 1, '0.81250', 122, 60, 62),
(1948, 'Albert H. Abe Poffenroth', 8, 1, 0, '0.88889', 194, 80, 114),
(1949, 'Albert H. Abe Poffenroth', 7, 2, 0, '0.77778', 174, 96, 78),
(1950, 'Albert H. Abe Poffenroth', 8, 2, 0, '0.80000', 191, 86, 105),
(1951, 'Albert H. Abe Poffenroth', 2, 7, 0, '0.22222', 78, 263, -185),
(1952, 'Albert H. Abe Poffenroth', 1, 7, 0, '0.12500', 80, 148, -68),
(1953, 'Ed Chissus', 6, 2, 0, '0.75000', 162, 139, 23),
(1954, 'Ed Chissus', 1, 8, 0, '0.11111', 46, 244, -198),
(1955, 'Ed Chissus', 4, 4, 0, '0.50000', 111, 98, 13),
(1956, 'Ed Chissus', 5, 2, 1, '0.68750', 159, 61, 98),
(1957, 'Ed Chissus', 5, 2, 1, '0.68750', 168, 78, 90),
(1958, 'Ed Chissus', 4, 4, 0, '0.50000', 122, 108, 14),
(1959, 'Ed Chissus', 2, 6, 1, '0.27778', 88, 202, -114),
(1960, 'Ed Chissus', 2, 7, 0, '0.22222', 79, 224, -145),
(1961, 'Ed Chissus', 0, 9, 0, '0.00000', 18, 231, -213),
(1962, 'Ed Chissus', 0, 8, 1, '0.05556', 43, 165, -122),
(1963, 'Dave Holmes', 3, 6, 0, '0.33333', 108, 129, -21),
(1964, 'Dave Holmes', 5, 4, 0, '0.55556', 141, 99, 42),
(1965, 'Dave Holmes', 8, 1, 0, '0.88889', 268, 84, 184),
(1966, 'Dave Holmes', 7, 1, 1, '0.83333', 326, 135, 191),
(1967, 'Dave Holmes', 11, 1, 0, '0.91667', 409, 168, 241),
(1968, 'Brent Wooten', 3, 7, 0, '0.30000', 179, 163, 16),
(1969, 'Brent Wooten', 4, 5, 0, '0.44444', 167, 259, -92),
(1970, 'Brent Wooten', 4, 6, 0, '0.40000', 94, 224, -130),
(1971, 'John Massengale', 5, 5, 0, '0.50000', 221, 250, -29),
(1972, 'John Massengale', 3, 7, 0, '0.30000', 159, 189, -30),
(1973, 'John Massengale', 5, 4, 0, '0.55556', 121, 116, 5),
(1974, 'John Massengale', 4, 5, 0, '0.44444', 153, 193, -40),
(1975, 'John Massengale', 3, 6, 0, '0.33333', 116, 211, -95),
(1976, 'John Massengale', 4, 4, 1, '0.50000', 183, 246, -63),
(1977, 'John Massengale', 5, 4, 0, '0.55556', 222, 194, 28),
(1978, 'John Massengale', 4, 6, 0, '0.40000', 258, 195, 63),
(1979, 'Dick Zornes', 7, 2, 0, '0.77778', 184, 162, 22),
(1980, 'Dick Zornes', 6, 4, 0, '0.60000', 221, 195, 26),
(1981, 'Dick Zornes', 7, 3, 0, '0.70000', 245, 97, 148),
(1982, 'Dick Zornes', 8, 2, 0, '0.80000', 313, 116, 197),
(1983, 'Dick Zornes', 5, 5, 0, '0.50000', 202, 194, 8),
(1984, 'Dick Zornes', 7, 2, 1, '0.75000', 306, 200, 106),
(1985, 'Dick Zornes', 9, 3, 0, '0.75000', 381, 260, 121),
(1986, 'Dick Zornes', 6, 5, 0, '0.54545', 324, 276, 48),
(1987, 'Dick Zornes', 4, 7, 0, '0.36364', 220, 303, -83),
(1988, 'Dick Zornes', 2, 8, 1, '0.22727', 217, 372, -155),
(1989, 'Dick Zornes', 4, 6, 0, '0.40000', 255, 264, -9),
(1990, 'Dick Zornes', 5, 6, 0, '0.45455', 300, 360, -60),
(1991, 'Dick Zornes', 5, 6, 0, '0.45455', 301, 364, -63),
(1992, 'Dick Zornes', 7, 4, 0, '0.63636', 280, 211, 69),
(1993, 'Dick Zornes', 7, 3, 0, '0.70000', 285, 225, 60),
(1994, 'Mike Kramer', 4, 7, 0, '0.36364', 300, 293, 7),
(1995, 'Mike Kramer', 3, 8, 0, '0.27273', 238, 357, -119),
(1996, 'Mike Kramer', 6, 5, 0, '0.54545', 305, 254, 51),
(1997, 'Mike Kramer', 12, 2, 0, '0.85714', 481, 245, 236),
(1998, 'Mike Kramer', 5, 6, 0, '0.45455', 316, 297, 19),
(1999, 'Mike Kramer', 7, 4, 0, '0.63636', 326, 336, -10),
(2000, 'Paul Wulff', 6, 5, 0, '0.54545', 288, 243, 45),
(2001, 'Paul Wulff', 7, 4, 0, '0.63636', 461, 349, 112),
(2002, 'Paul Wulff', 6, 5, 0, '0.54545', 365, 276, 89),
(2003, 'Paul Wulff', 6, 5, 0, '0.54545', 344, 321, 23),
(2004, 'Paul Wulff', 9, 4, 0, '0.69231', 488, 323, 165),
(2005, 'Paul Wulff', 7, 5, 0, '0.58333', 420, 281, 139),
(2006, 'Paul Wulff', 3, 8, 0, '0.27273', 214, 296, -82),
(2007, 'Paul Wulff', 9, 4, 0, '0.69231', 437, 288, 149),
(2008, 'Beau Baldwin', 6, 5, 0, '0.54545', 323, 295, 28),
(2009, 'Beau Baldwin', 8, 4, 0, '0.66667', 404, 329, 75),
(2010, 'Beau Baldwin', 13, 2, 0, '0.86667', 472, 374, 98),
(2011, 'Beau Baldwin', 6, 5, 0, '0.54545', 356, 332, 24),
(2012, 'Beau Baldwin', 11, 3, 0, '0.78571', 472, 356, 116),
(2013, 'Beau Baldwin', 12, 3, 0, '0.80000', 592, 424, 168),
(2014, 'Beau Baldwin', 11, 3, 0, '0.78571', 618, 439, 179),
(2015, 'Beau Baldwin', 6, 5, 0, '0.54545', 381, 435, -54),
(2016, 'Big Nuggets', 1, 2, 3, '0.40000', 5, 6, -7),
(2018, 'Zach', 10, 10, 2, '0.50000', 20, 98, -1),
(2019, 'Bob Nuggets', 10, 10, 2, '0.50000', 20, 98, -1),
(2020, 'Big Nuggets', 4, 3, 2, '0.50000', 4, 4, -5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `YEARSTATS`
--
ALTER TABLE `YEARSTATS`
  ADD PRIMARY KEY (`YEAR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
