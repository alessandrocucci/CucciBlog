CREATE TABLE IF NOT EXISTS `posts` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_autore` varchar(40) NOT NULL DEFAULT '',
  `art_titolo` varchar(100) NOT NULL DEFAULT '',
  `art_articolo` text NOT NULL,
  `art_data` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`art_id`)
) 

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) 