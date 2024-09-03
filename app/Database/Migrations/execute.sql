CREATE DATABASE `bibliotheque` ;

CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ;

CREATE TABLE `author` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ;

CREATE TABLE `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `published_date` datetime NOT NULL,
  `isborrow` tinyint NOT NULL,
  `author_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fg1_idx` (`author_id`),
  CONSTRAINT `fg1` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE
);

CREATE TABLE `borrowings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_id` int NOT NULL,
  `client_name` varchar(45) NOT NULL,
  `borrowed_at` datetime NOT NULL,
  `returned_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk2_idx` (`book_id`),
  CONSTRAINT `fk2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE
) 
