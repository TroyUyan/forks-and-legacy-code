-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2014 at 03:52 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctec127_lab4`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `student_id` smallint(4) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`first_name`, `last_name`, `email`, `student_id`, `phone`) VALUES
('Troy', 'Uyan', 'troyuyan@gmail.com', 1337, '123-456-7899'),
('Eddie', 'Izzard', 'eddie@example.com', 1263, '532-321-4324'),
('Lacey', 'Mosley', 'flyleaf@example.com', 6542, '432-643-7654'),
('Katy', 'Perry', 'kp_roar@example.com', 1269, '732-632-7675'),
('Mark', 'Webber', 'mademymark@example.com', 2121, '432-565-4324'),
('Christian', 'Sharpe', 'eu@aliquet.edu', 6630, '(318) 679-6205'),
('Baxter', 'Burch', 'velit.Cras@sapien.co.uk', 2506, '(241) 220-5567'),
('Geoffrey', 'Calhoun', 'tortor.at.risus@magnaseddui.net', 4344, '(351) 913-0178'),
('Zelenia', 'Paul', 'senectus.et.netus@Donecvitaeerat.ca', 3461, '(483) 113-3217'),
('Briar', 'Holden', 'lorem.eget.mollis@lacus.edu', 9695, '(932) 223-4586'),
('Maisie', 'Fisher', 'Cras.dolor@mifelisadipiscing.co.uk', 3207, '(769) 558-2004'),
('Zephania', 'Hale', 'hendrerit@non.com', 1190, '(940) 125-7505'),
('Rogan', 'Patel', 'Quisque@Aliquam.co.uk', 8437, '(213) 591-4759'),
('Neville', 'Watson', 'ornare.lectus@nec.org', 6094, '(716) 183-1861'),
('Nina', 'Browning', 'Fusce.aliquet@metusAenean.edu', 6304, '(962) 277-4759'),
('Kay', 'Byers', 'aliquet.sem@dictumauguemalesuada.edu', 3480, '(848) 443-0710'),
('Maile', 'Lloyd', 'et.tristique.pellentesque@arcu.org', 7554, '(184) 141-4727'),
('Heidi', 'Coffey', 'feugiat@sedlibero.edu', 9337, '(839) 577-8615'),
('Lydia', 'Martinez', 'semper.auctor@nibh.edu', 2813, '(105) 383-7451'),
('Catherine', 'Pate', 'blandit.Nam@semPellentesque.co.uk', 7893, '(721) 964-3053'),
('Akeem', 'Velazquez', 'Nam.ligula.elit@lorem.com', 6673, '(792) 186-4740'),
('Chastity', 'Head', 'eleifend.non@Craslorem.co.uk', 7451, '(173) 718-0973'),
('Fritz', 'Mcmillan', 'vel.quam@at.co.uk', 6843, '(563) 586-2428'),
('Kyle', 'Griffin', 'enim.commodo.hendrerit@metusInnec.com', 7178, '(317) 176-2473'),
('Dara', 'Wilkins', 'Curae.Donec@lacusvarius.co.uk', 2499, '(458) 665-9400'),
('Nathaniel', 'Conner', 'leo.Vivamus.nibh@dolornonummyac.ca', 8662, '(843) 824-8010'),
('Alana', 'Kent', 'mattis@atvelit.net', 5228, '(754) 734-5284'),
('Lydia', 'Hensley', 'diam.at@porta.com', 4917, '(667) 484-8722'),
('Wayne', 'Barr', 'dis@turpis.ca', 2221, '(861) 291-1091'),
('Stone', 'Cobb', 'ornare.sagittis@malesuadaiderat.net', 8351, '(876) 421-0071'),
('Coby', 'Alford', 'convallis.erat@velitinaliquet.org', 2231, '(525) 247-6027'),
('Laura', 'Workman', 'lacinia.mattis.Integer@Mauris.com', 1473, '(689) 747-2377'),
('Tamekah', 'Perez', 'Duis.sit@Maecenas.edu', 8955, '(909) 455-3693'),
('Cain', 'Pena', 'sagittis@enim.co.uk', 8772, '(658) 688-0858'),
('Athena', 'Spencer', 'enim.condimentum@volutpatnunc.edu', 8350, '(283) 905-4277'),
('Cherokee', 'Benton', 'eu.ultrices@libero.net', 2926, '(865) 282-1483'),
('Zorita', 'Walter', 'tincidunt@Maecenasiaculisaliquet.co.uk', 7396, '(837) 452-6128'),
('Montana', 'Valentine', 'condimentum.Donec@ametluctus.edu', 1705, '(733) 781-1498'),
('Palmer', 'Robinson', 'lacus.Cras.interdum@Suspendissealiquet.com', 8813, '(145) 577-8433'),
('Evelyn', 'Howell', 'eu@pede.ca', 4726, '(207) 729-0516'),
('Abigail', 'Howard', 'metus.In@molestietellusAenean.co.uk', 9950, '(145) 183-7993'),
('Brynn', 'Lowery', 'magna.et@Innecorci.co.uk', 4799, '(664) 924-8395'),
('Dorothy', 'Hutchinson', 'consequat.auctor@nequeNullamut.com', 1977, '(538) 451-4254'),
('Ora', 'Guerrero', 'ullamcorper.viverra.Maecenas@malesuada.org', 8519, '(246) 244-6977'),
('Alyssa', 'Hansen', 'penatibus@ProinmiAliquam.co.uk', 4853, '(636) 699-2477'),
('Petra', 'Morse', 'sagittis.Duis.gravida@facilisis.net', 2318, '(902) 783-9778'),
('Jerome', 'Johnson', 'sapien.molestie.orci@auctorMauris.edu', 5925, '(264) 807-7071'),
('Reed', 'Huff', 'tellus.lorem.eu@necluctus.com', 6463, '(695) 808-8435'),
('Walker', 'Carpenter', 'enim.commodo@morbitristiquesenectus.co.uk', 6517, '(391) 297-7987'),
('Dylan', 'Preston', 'eu.erat@lorem.co.uk', 3115, '(368) 401-0646'),
('Aretha', 'Parks', 'tincidunt@arcuac.net', 9334, '(184) 281-2784'),
('Cara', 'Gould', 'ligula@diameudolor.net', 5515, '(676) 787-4112'),
('Wylie', 'Thomas', 'vel@pharetraNamac.net', 4790, '(563) 719-4573'),
('Ebony', 'Bean', 'Cras.pellentesque@metusurnaconvallis.edu', 9551, '(368) 184-6360'),
('Claudia', 'Rosales', 'risus.Morbi.metus@tinciduntDonec.com', 2399, '(175) 144-3830'),
('Amanda', 'Norris', 'eu.odio.Phasellus@porttitortellusnon.com', 6068, '(655) 814-1340'),
('Cooper', 'Dunlap', 'nibh.enim@necligulaconsectetuer.edu', 7070, '(885) 408-1212'),
('Troy Test 3', '3 Test Man', 'example@emial.com', 77, '432-543-6546'),
('Troy', 'Test Uyan', 'blutank_test@test.com', 2, '321-432-5435'),
('Ivana', 'Gross', 'sagittis@Duis.edu', 6904, '(154) 270-3158'),
('Finn', 'Leonard', 'molestie.tellus@Proinsed.com', 2174, '(769) 870-7056'),
('Wylie', 'Bennett', 'ante@convallisante.ca', 6043, '(537) 596-5801'),
('Gwendolyn', 'Barnett', 'nascetur.ridiculus@enimEtiamgravida.ca', 2323, '(304) 288-4587'),
('Kerry', 'Ford', 'enim.commodo@leo.edu', 6164, '(777) 658-8120'),
('Nissim', 'Mclaughlin', 'pretium.aliquet@vestibulumMauris.com', 6688, '(710) 256-2979'),
('Pearl', 'Allison', 'ut.ipsum.ac@pellentesquemassalobortis.edu', 8172, '(883) 315-0973'),
('Aladdin', 'Lowery', 'Etiam@sapien.ca', 5107, '(864) 139-9841'),
('Wyatt', 'Pena', 'mi.enim@vestibulumneceuismod.com', 4533, '(604) 774-7324'),
('Allegra', 'Haley', 'scelerisque.neque@metusAliquamerat.edu', 4313, '(148) 100-3163'),
('Lawrence', 'Crosby', 'velit.Sed.malesuada@pharetrafeliseget.org', 9295, '(119) 406-3633'),
('Angelica', 'Short', 'arcu.imperdiet@malesuada.ca', 2037, '(425) 392-7177'),
('Donna', 'Roman', 'nulla.Integer@tortordictum.ca', 1780, '(820) 992-3687'),
('Lysandra', 'Hardin', 'at.egestas.a@semutdolor.com', 7474, '(512) 859-1726'),
('Anne', 'Romero', 'enim@eratinconsectetuer.net', 8472, '(621) 947-3209'),
('Steel', 'Rush', 'ultricies.adipiscing@ascelerisquesed.com', 1976, '(606) 578-2204'),
('Nasim', 'Knowles', 'nibh.lacinia.orci@enimCurabiturmassa.co.uk', 7286, '(850) 959-5845'),
('Devin', 'Scott', 'molestie@nibhsitamet.edu', 1578, '(683) 873-4442'),
('Howard', 'Buckley', 'ac.turpis@posuere.com', 3937, '(225) 140-9306'),
('Linda', 'Petersen', 'Duis@semper.org', 5917, '(285) 133-6326'),
('Adrian', 'Malone', 'montes.nascetur.ridiculus@Quisque.com', 9620, '(435) 163-9629'),
('Harper', 'Mccullough', 'eu.turpis@nulla.ca', 9070, '(311) 418-1257'),
('Maxine', 'Shields', 'eu.eleifend@ametdiam.com', 5388, '(700) 252-0717'),
('Hayden', 'Schroeder', 'ipsum@velitjustonec.org', 6646, '(637) 638-2475'),
('Rick', 'James', 'ex@exa.com', 1, '321-432-4324'),
('Jin', 'Strickland', 'sagittis@sitamet.co.uk', 5305, '(875) 986-3889'),
('Ralph', 'Patterson', 'egestas.rhoncus.Proin@etlacinia.com', 8433, '(850) 738-8833'),
('Samson', 'Silva', 'fermentum.vel.mauris@Aenean.ca', 9436, '(650) 737-6381'),
('Flavia', 'Taylor', 'sollicitudin.adipiscing@eratvelpede.ca', 4277, '(344) 444-0167'),
('Freya', 'Nash', 'justo@tinciduntDonecvitae.ca', 2581, '(985) 877-5422'),
('Hamilton', 'Pratt', 'Nunc.commodo@eu.ca', 6831, '(401) 597-8433'),
('Ruth', 'Ortiz', 'mus.Aenean.eget@mauriseuelit.ca', 7769, '(679) 346-5687'),
('Karina', 'Galloway', 'in.aliquet.lobortis@ipsumdolor.ca', 3473, '(950) 809-1391'),
('Troy', 'Uyan', 'troyuyan@hi.com', 1254, '432-432-6543');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
