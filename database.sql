--
-- Formulaire d'enregistrement
--

CREATE TABLE user_form
(
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `allergies` VARCHAR(255) NOT NULL,
    `user_type` VARCHAR(255) NOT NULL DEFAULT 'user'
)

--
--Insertion données admin et user
--
INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `allergies`, `user_type`) VALUES
(1, 'Admin', 'admin@gmail.com', 'adminuser123','', 'admin'),
(2, 'Smith', 'smith.sam@gmail.com', 'samsmith','poisson', 'user')


--
-- RESERVATION DES TABLES
--

CREATE TABLE user_reservation
(
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `seats` INT(40) NOT NULL,
    `res_date` DATE NOT NULL,
    `res_time` TIME NOT NULL,
    `allergies` VARCHAR(255) NOT NULL
)

--
-- Insertion données pour page réservation
--

INSERT INTO `user_reservation` (`id`, `name`, `email`, `seats`, `res_date`, `res_time`, `allergies`) VALUES
(1, 'Smith', 'smith.sam@gmail.com', '4', '2023-04-18', '18:45:00', 'poisson'),
(2, 'John', 'john@gmail.com', '2', '2023-04-10', '21:30:00', '')



--
-- CREATION BD IMAGES/GALERIE 
--

CREATE TABLE images (
    `id` int NOT NULL PRIMARY KEY,
    `title` varchar(255) NOT NULL,
    `image` LONGBLOB NOT NULL
    ) 

--
-- Table pour le menu
--

CREATE TABLE `menu` (
  `id` bigint(12) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(6) NOT NULL
)

--
-- Insertion des données pour le menu
--

INSERT INTO `menu` (`id`, `category`, `title`, `description`, `price`) VALUES
(1, 'Déjeuner', 'Thon Jaune croûte de Sésame poêlé', 'Salade dalgues gingembre, Soja au caramel, Wasabi', 37),
(2, 'Déjeuner', 'Filet Mignon', 'Asperges, Citron Grillé', 32),
(3, 'Déjeuner', 'Saumon artique grillé', 'Beurre au Vin Blanc', 36),
(4, 'Déjeuner', 'Travers de Porc', 'Porc avec sauce champignon', 30),
(5, 'Dîner', 'Raclette', 'Pommes de terre au fromage fondu, haricots verts, servi avec des viandes', 40),
(6, 'Dîner', 'Pétoncles Sautés', 'Coulis Orangé aux Poivres Grillés, compote de Figues', 45),
(7, 'Dîner', 'Queue de Homard', 'Queue de Homard servi avec pommes de terre sautés', 29),
(8, 'Dîner', 'Steak New-Yorkais', 'Steak avec pommes de terre', 42),
(9, 'Dessert', 'Mousse au Chocolat', '', 37),
(10, 'Dessert', 'Tiramisu', '', 37),
(11, 'Dessert', 'Vanille Meringue Cookie', '', 37),
(12, 'Dessert', 'Banana Split', '', 37),

--
-- Création de table pour formule du jour
--

CREATE TABLE `daily_menu` (
  `id` bigint(12) NOT NULL,
  `category` varchar(100) NOT NULL,
  `meal` varchar(100) NOT NULL,
  `dessert` varchar(100) NOT NULL,
  `drink` varchar(100) NOT NULL,
  `price` bigint(6) NOT NULL
)

--
-- Insertion données pour formule du jour
--

INSERT INTO `daily_menu` (`id`, `category`, `meal`, `dessert`, `drink`, `price`) VALUES
(1, 'Menu du Midi', 'Déjeuner au choix', 'Dessert', 'Boisson', 50),
(2, 'Menu du Soir', 'Dîner au choix', 'Dessert', 'Boisson', 60)


--
-- Création heures d'ouverture
--

CREATE TABLE `open_hours` (
  `id` bigint(12) NOT NULL,
  `title` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `hour_start` varchar(100) NOT NULL,
  `hour_end` varchar(100) NOT NULL
)

--
-- Insertion BD Heures d'ouverture
--

INSERT INTO `open_hours` (`id`, `title`, `day`, `hour_start`, `hour_end`) VALUES
(1, 'Heures Ouvertures', 'Lundi', '18h', '23h'),
(2, 'Heures Ouvertures', 'Mardi', '18h', '23h'),
(3, 'Heures Ouvertures', 'Mercredi', '18h', '23h'),
(4, 'Heures Ouvertures', 'Jeudi', '18h', '23h'),
(5, 'Heures Ouvertures', 'Vendredi', '18h', '23h'),
(6, 'Heures Ouvertures', 'Samedi', '18h', '23h'),
(7, 'Heures Ouvertures', 'Dimanche', 'Fermer', 'Fermer')