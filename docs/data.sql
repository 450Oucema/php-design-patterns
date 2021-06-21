-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 18 juin 2021 à 15:59
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test-2`
--

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `product_id` int(11) NOT NULL,
  `nb` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `nb`) VALUES
(1, 'be1d4d46-5c86-48a7-a6bc-6e6b0c873ec2', 4, 7),
(2, 'be1d4d46-5c86-48a7-a6bc-6e6b0c873ec2', 3, 1),
(3, '32dc53ab-1d80-44a9-b926-5793409ad407', 4, 8),
(4, '32dc53ab-1d80-44a9-b926-5793409ad407', 3, 1),
(5, '4ef51e59-d79a-43ea-a15b-a1ba953de9f2', 4, 3),
(6, 'c6ddfbfe-8fd0-4ad2-a5d2-c80714058ef3', 4, 1),
(7, '5e4eadb7-910c-4167-b268-e4ed2badad95', 4, 1),
(8, 'b2c4a77e-155a-4f08-a946-5ae3b9ed5fd3', 4, 1),
(9, '94788579-9b54-4a5c-9500-7dc8451430ae', 4, 1),
(10, '65f63b93-7e0b-4642-911b-2766594346be', 4, 1),
(11, 'c2f8c443-70c7-4d54-9365-98a4ab078a42', 4, 1),
(12, '05946423-7bb8-4478-a5ad-7df23ac636f7', 4, 1),
(13, 'e671f9f0-08b1-4021-872c-75c4179fab67', 4, 1),
(14, '122388d8-aa2a-4c45-a128-ae74cc54eaba', 4, 1),
(15, 'd9eb1b5a-8deb-4ca1-840c-48aefbb8ad4f', 4, 1),
(16, 'ec7526be-a893-407b-bf87-c579bd8a57e5', 4, 1),
(17, 'd84f2a5b-f648-4556-b734-da9b68bb622e', 4, 1),
(18, 'd84f2a5b-f648-4556-b734-da9b68bb622e', 3, 8),
(19, '0d8441a5-5a0e-47b8-92cb-61be9010ba58', 5, 12),
(20, 'bb50330c-7564-4775-a39a-7f2949b1cb67', 26, 4),
(21, '5879edb6-50fb-4eb4-9d00-d12e17199a6f', 10, 11),
(22, '7d86e62c-b085-4e74-b7a9-15f58f3832f7', 8, 9),
(23, '03a45efc-8a54-4064-8385-b743f1819e99', 11, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8_bin DEFAULT NULL,
  `imageUrl` text COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `stock`, `description`, `imageUrl`) VALUES
(3, 'Berniece Murazik', 508.19, 4, 'Trims his belt and his buttons, and turns out his toes.\' [later editions continued as follows When the procession moved on, three of the table, but it said nothing. \'When we were little,\' the Mock.', 'https://lorempixel.com/640/480/?82817'),
(4, 'Colby Bogisich', 308.83, 0, 'Come on!\' \'Everybody says \"come on!\" here,\' thought Alice, \'it\'ll never do to hold it. As soon as she picked her way through the doorway; \'and even if my head would go anywhere without a grin,\'.', 'https://lorempixel.com/640/480/?71158'),
(5, 'Lurline Carter', 354.22, 0, 'WOULD twist itself round and get ready for your walk!\" \"Coming in a very difficult question. However, at last she spread out her hand again, and we put a white one in by mistake; and if I was, I.', 'https://lorempixel.com/640/480/?15500'),
(6, 'Dr. Geovany Pouros', 520.65, 34, 'Mouse replied rather impatiently: \'any shrimp could have been a holiday?\' \'Of course twinkling begins with an important air, \'are you all ready? This is the use of a well?\' \'Take some more of the.', 'https://lorempixel.com/640/480/?70646'),
(7, 'Tyrique Pacocha', 279.46, 4, 'Mouse, do you mean that you weren\'t to talk to.\' \'How are you getting on?\' said the King, \'and don\'t look at a reasonable pace,\' said the Dodo solemnly presented the thimble, saying \'We beg your.', 'https://lorempixel.com/640/480/?20695'),
(8, 'Jerald Bergnaum', 485.94, 28, 'Queen will hear you! You see, she came upon a heap of sticks and dry leaves, and the procession moved on, three of the teacups as the large birds complained that they would go, and broke off a.', 'https://lorempixel.com/640/480/?96379'),
(9, 'Jessica Boehm', 477.04, 19, 'LESS,\' said the March Hare, \'that \"I breathe when I breathe\"!\' \'It IS a long way back, and see how the game began. Alice gave a sudden burst of tears, \'I do wish I hadn\'t cried so much!\' Alas! it.', 'https://lorempixel.com/640/480/?32647'),
(10, 'Hershel Hettinger', 512.64, 0, 'Footman remarked, \'till tomorrow--\' At this moment Five, who had been to the shore. CHAPTER III. A Caucus-Race and a large pigeon had flown into her eyes; and once she remembered having seen such a.', 'https://lorempixel.com/640/480/?82042'),
(11, 'Norval Bergnaum', 232.29, 3, 'He looked anxiously over his shoulder with some curiosity. \'What a funny watch!\' she remarked. \'There isn\'t any,\' said the Dormouse denied nothing, being fast asleep. \'After that,\' continued the.', 'https://lorempixel.com/640/480/?93546'),
(12, 'Leilani Stark', 258.99, 46, 'Rabbit-Hole Alice was silent. The Dormouse again took a great hurry, muttering to itself \'Then I\'ll go round and look up in a great hurry; \'and their names were Elsie, Lacie, and Tillie; and they.', 'https://lorempixel.com/640/480/?26352'),
(13, 'Prof. Genesis Kemmer II', 251.87, 34, 'I!\' said the March Hare will be much the most confusing thing I ask! It\'s always six o\'clock now.\' A bright idea came into Alice\'s head. \'Is that the cause of this pool? I am so VERY remarkable in.', 'https://lorempixel.com/640/480/?56471'),
(14, 'Camryn Bernier', 126.38, 42, 'I never knew whether it was quite a crowd of little cartwheels, and the sounds will take care of themselves.\"\' \'How fond she is such a subject! Our family always HATED cats: nasty, low, vulgar.', 'https://lorempixel.com/640/480/?36717'),
(15, 'Magnus Yost', 401.39, 26, 'Duchess by this time). \'Don\'t grunt,\' said Alice; \'all I know all the creatures order one about, and called out \'The Queen! The Queen!\' and the other players, and shouting \'Off with her face in her.', 'https://lorempixel.com/640/480/?54650'),
(16, 'Casandra Walter', 1.78, 43, 'ONE respectable person!\' Soon her eye fell upon a time she went in without knocking, and hurried upstairs, in great fear lest she should chance to be rude, so she felt that it was labelled \'ORANGE.', 'https://lorempixel.com/640/480/?30983'),
(17, 'Letha Mertz MD', 313.28, 29, 'She had quite forgotten the Duchess began in a hurry: a large plate came skimming out, straight at the top with its wings. \'Serpent!\' screamed the Pigeon. \'I can hardly breathe.\' \'I can\'t explain.', 'https://lorempixel.com/640/480/?53456'),
(18, 'Shany Vandervort', 80.1, 28, 'She is such a tiny golden key, and Alice\'s elbow was pressed so closely against her foot, that there was not quite like the Queen?\' said the Dormouse, who seemed too much of a muchness\"--did you.', 'https://lorempixel.com/640/480/?30808'),
(19, 'Dr. Lynn Thiel', 199.36, 9, 'March.\' As she said this, she noticed a curious dream, dear, certainly: but now run in to your places!\' shouted the Gryphon, and the jury eagerly wrote down all three to settle the question, and.', 'https://lorempixel.com/640/480/?88413'),
(20, 'Johnson Bednar', 90.78, 54, 'Duchess, the Duchess! Oh! won\'t she be savage if I\'ve been changed in the direction in which the March Hare and the pattern on their faces, and the Queen to-day?\' \'I should like to be two people.', 'https://lorempixel.com/640/480/?53653'),
(21, 'Prof. Dusty McLaughlin Jr.', 445, 53, 'Duchess; \'and that\'s why. Pig!\' She said the Hatter, and, just as she could, for the fan and a large kitchen, which was the BEST butter,\' the March Hare went on. \'Would you like to go down the.', 'https://lorempixel.com/640/480/?70712'),
(22, 'Rasheed Morissette Sr.', 17.8, 35, 'However, it was certainly too much frightened to say than his first remark, \'It was a bright brass plate with the other: the Duchess began in a trembling voice:-- \'I passed by his garden.\"\' Alice.', 'https://lorempixel.com/640/480/?55639'),
(23, 'Dr. Jessyca Schoen Sr.', 461.02, 12, 'However, I\'ve got back to yesterday, because I was thinking I should think very likely it can be,\' said the Mock Turtle recovered his voice, and, with tears running down his face, as long as there.', 'https://lorempixel.com/640/480/?21396'),
(24, 'Ms. Paige Pfeffer', 175.33, 26, 'When she got to go on. \'And so these three little sisters,\' the Dormouse into the garden at once; but, alas for poor Alice! when she next peeped out the words: \'Where\'s the other side of the court.', 'https://lorempixel.com/640/480/?50897'),
(25, 'Tessie Wisozk', 52.51, 9, 'Alice, timidly; \'some of the mushroom, and raised herself to some tea and bread-and-butter, and then she looked down at her with large round eyes, and half of anger, and tried to look over their.', 'https://lorempixel.com/640/480/?84152'),
(26, 'Rachelle Kunze IV', 201.14, 25, 'Alice. \'What sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very seldom followed it), and sometimes she scolded herself so severely as.', 'https://lorempixel.com/640/480/?27637'),
(27, 'Samson Blick', 346.21, 51, 'You know the song, perhaps?\' \'I\'ve heard something splashing about in the world am I? Ah, THAT\'S the great wonder is, that I\'m perfectly sure I can\'t understand it myself to begin with; and being so.', 'https://lorempixel.com/640/480/?64466');

-- --------------------------------------------------------

--
-- Structure de la table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `subscriber`
--

INSERT INTO `subscriber` (`id`, `product_id`, `email`) VALUES
(1, 3, '450oucema@gmail.com'),
(2, 3, 'oucema45@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `_order`
--

DROP TABLE IF EXISTS `_order`;
CREATE TABLE IF NOT EXISTS `_order` (
  `id` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `_order`
--

INSERT INTO `_order` (`id`, `username`) VALUES
('03a45efc-8a54-4064-8385-b743f1819e99', '450oucema'),
('05946423-7bb8-4478-a5ad-7df23ac636f7', 'oucema45@gmail.com'),
('0d8441a5-5a0e-47b8-92cb-61be9010ba58', 'toto'),
('122388d8-aa2a-4c45-a128-ae74cc54eaba', 'oucema45@gmail.com'),
('32dc53ab-1d80-44a9-b926-5793409ad407', 'oucema'),
('4ef51e59-d79a-43ea-a15b-a1ba953de9f2', 'user-0'),
('52d17298-5374-4242-9bce-5af780a9275c', '450oucema'),
('5879edb6-50fb-4eb4-9d00-d12e17199a6f', 'oucema'),
('5e4eadb7-910c-4167-b268-e4ed2badad95', 'oucema45@gmail.com'),
('65f63b93-7e0b-4642-911b-2766594346be', 'oucema45@gmail.com'),
('6a6bc9d8-3bb0-43ee-be9a-73aadbcfc11f', '450oucema'),
('7d86e62c-b085-4e74-b7a9-15f58f3832f7', 'user-0'),
('8d617663-ee62-4fce-8150-c38db7508bf4', '450oucema'),
('94788579-9b54-4a5c-9500-7dc8451430ae', 'oucema45@gmail.com'),
('b2c4a77e-155a-4f08-a946-5ae3b9ed5fd3', 'oucema45@gmail.com'),
('bb50330c-7564-4775-a39a-7f2949b1cb67', 'oucema'),
('be1d4d46-5c86-48a7-a6bc-6e6b0c873ec2', '450oucema'),
('c2f8c443-70c7-4d54-9365-98a4ab078a42', 'oucema45@gmail.com'),
('c6ddfbfe-8fd0-4ad2-a5d2-c80714058ef3', 'oucema45@gmail.com'),
('d84f2a5b-f648-4556-b734-da9b68bb622e', 'oucema45@gmail.com'),
('d9eb1b5a-8deb-4ca1-840c-48aefbb8ad4f', 'oucema45@gmail.com'),
('e671f9f0-08b1-4021-872c-75c4179fab67', 'oucema45@gmail.com'),
('ec7526be-a893-407b-bf87-c579bd8a57e5', 'oucema45@gmail.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `subscriber`
--
ALTER TABLE `subscriber`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
