DROP TABLE if exists `artists`;

CREATE TABLE `artists` (
  `id` int unsigned NOT NULL AUTO_INCREMENT, 
  `artist` varchar(255) DEFAULT NULL, 
  PRIMARY KEY (`id`)
);

INSERT INTO `artists` (`id`, `artist`) VALUES (1, 'Miles Davis');
INSERT INTO `artists` (`id`, `artist`) VALUES (2, 'The Clash');
INSERT INTO `artists` (`id`, `artist`) VALUES (3, 'The Rolling Stones');
INSERT INTO `artists` (`id`, `artist`) VALUES (4, 'Faces');
INSERT INTO `artists` (`id`, `artist`) VALUES (5, 'Duke Ellington');
INSERT INTO `artists` (`id`, `artist`) VALUES (6, 'The Rolling Stones');
INSERT INTO `artists` (`id`, `artist`) VALUES (7, 'Jimi Hendrix');
INSERT INTO `artists` (`id`, `artist`) VALUES (8, 'The Who');
INSERT INTO `artists` (`id`, `artist`) VALUES (9, 'Little Richard');
INSERT INTO `artists` (`id`, `artist`) VALUES (10, 'Cameo');
INSERT INTO `artists` (`id`, `artist`) VALUES (11, 'Bee Gees');
INSERT INTO `artists` (`id`, `artist`) VALUES (12, 'Chic');
INSERT INTO `artists` (`id`, `artist`) VALUES (13, 'Chuck Berry');
INSERT INTO `artists` (`id`, `artist`) VALUES (14, 'Oscar Peterson Trio');
INSERT INTO `artists` (`id`, `artist`) VALUES (15, 'The Beatles');

DROP TABLE if exists `record_labels`;

CREATE TABLE `record_labels` (
  `id` int unsigned NOT NULL AUTO_INCREMENT, 
  `record_label` varchar(255) DEFAULT NULL, 
  PRIMARY KEY (`id`)
);

INSERT INTO `record_labels` (`id`, `record_label`) VALUES (1, 'Columbia Records');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (2, 'CBS Records');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (3, 'Rolling Stones Records');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (4, 'Warner Bros');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (5, 'Sound Makers');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (6, 'Rolling Stones Records');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (7, 'MCA Records');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (8, 'Polydor');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (9, 'Showcase');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (10, 'Atlanta Artists');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (11, 'Polydor');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (12, 'Atlantic');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (13, 'PRT Records');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (14, 'Verve');
INSERT INTO `record_labels` (`id`, `record_label`) VALUES (15, 'Parlophone');

DROP TABLE if exists `records`;

CREATE TABLE `records` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT, 
  `name` varchar(255) DEFAULT NULL, 
  `artist` int(11) unsigned DEFAULT NULL,
  `year` YEAR DEFAULT NULL, 
  `record_label` int(11) unsigned DEFAULT NULL,
  `song` varchar(255) DEFAULT NULL,
  `img_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`), 
  CONSTRAINT `fk_artists` FOREIGN KEY (`artist`) REFERENCES `artists`(`id`),
  CONSTRAINT `fk_record_labels` FOREIGN KEY (`record_label`) REFERENCES `record_labels`(`id`)
);


INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (1, 'Kind of Blue', 1, 1959, 1, 'Blue in Green', 'kindofblue.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (2, 'London Calling', 2, 1979, 2, 'Train in Vain', 'londoncalling.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (3, 'Exile on Main st', 3, 1972, 3, 'Shine a Light', 'exileonmainst.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (4, 'Ooh La La', 4, 1973, 4, 'Glad and Sorry', 'oohlala.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (5, 'Money Jungle', 5, 1963, 5, 'Very Special', 'moneyjungle.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (6, 'Love You Live', 6, 1977, 6, 'Sympathy for the Devil', 'loveyoulive.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (7, 'The Ultimate Experience', 7, 1992, 7, 'Hey Joe', 'jimihendrix.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (8, 'Who Are You', 8, 1978, 8, 'Trick of the Light', 'whoareyou.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (9, 'Long Tall Sally', 9, 1986, 9, 'Lucille', 'longtallsally.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (10, 'Word Up!', 10, 1986, 10, 'Candy', 'wordup Small.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (11, "Bee Gees' 1st", 11, 1967, 11, 'One Minute Woman', 'beegees1st.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (12, "C'est Chic", 12, 1978, 12, 'Le Freak', 'cestchic.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (13, 'Spotlight on Chuck Berry', 13, 1980, 13, 'Johnny B.Goode', 'spotlight.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (14, 'West Side Story', 14, 1962, 14, 'Tonight', 'westsidestory.png');
INSERT INTO `records` (`id`, `name`, `artist`, `year`, `record_label`, `song`, `img_name`) VALUES (15, "A Hard Day's Night", 15, 1964, 15, 'Tell Me Why', 'harddaysnight.png');

