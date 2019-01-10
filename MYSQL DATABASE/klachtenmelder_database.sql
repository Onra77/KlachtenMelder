

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klachtenmelder`
--
CREATE DATABASE IF NOT EXISTS `klachtenmelder` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `klachtenmelder`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klacht`
--

DROP TABLE IF EXISTS `klacht`;
CREATE TABLE IF NOT EXISTS `klacht` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provincie` varchar(255) NOT NULL,
  `stad` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `klacht` tinytext NOT NULL,
  `datum` timestamp NOT NULL,
  `niveau` int(11) NOT NULL,
  `omschrijving` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
