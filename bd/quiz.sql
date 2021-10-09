-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 déc. 2020 à 19:09
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `num_quest` int(11) NOT NULL,
  `question` varchar(150) NOT NULL,
  `r1` varchar(150) NOT NULL,
  `r2` varchar(150) NOT NULL,
  `r3` varchar(150) NOT NULL,
  `r4` varchar(150) NOT NULL,
  `reponse` int(11) NOT NULL,
  `theme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`num_quest`, `question`, `r1`, `r2`, `r3`, `r4`, `reponse`, `theme`) VALUES
(1, 'Par rapport à l\'édition originale, quelle diffèrence peut-on trouver dans la dernière édition de Tintin en Amérique?', 'Pendant toute l\'histoire, Tintin porte un jean', 'Milou n\'urine plus sur un réverbère', 'Une maman noire a été remplacée par une blanche', 'Une voiture américaine a été remplacée par une plus récente', 3, 1),
(2, 'Comment Milou sauve-t\'il l\'Aurore dans l\' Etoile Mystérieuse ?                                                                                      ', 'Il coupe la corde d\'une mine flottante                                                              ', 'Il urine sur un bâton de dynamite                                                                   ', 'Il arrache le fil d\'une charge de plastique                                                         ', 'Il prend une grenade dans la gueule, et la jette à l\'eau                                            ', 2, 1),
(3, 'Quand Tintin sauve la vie du Général Alcazar en jetant une bombe par la fenêtre, ils jouaient tous les deux                                          ', 'Aux dames                                                                                           ', 'Au backgammon                                                                                       ', 'Aux échecs                                                                                          ', 'Au jeu de l\'oie                                                                                     ', 3, 1),
(4, 'Dans Tintin au pays de l\'or noir, Tintin se fait engager sur le Speedol Star comme...                                                             ', 'Télégraphiste                                                                                       ', 'Cuisinier                                                                                           ', 'Mousse                                                                                              ', 'Médecin                                                                                             ', 1, 1),
(5, 'Un pays imaginaire a été le théâtre de plusieurs aventures de Tintin. Il s\'agit de...                                                                 ', 'L\'Hergéovie                                                                                         ', 'La Slovnévie                                                                                        ', 'La Soldavie                                                                                         ', 'La Syldavie                                                                                         ', 4, 1),
(6, 'Le prénom du professeur Tournesol est :                                                                                                               ', 'Théodore                                                                                            ', 'Tryphon                                                                                             ', 'Hyppolite                                                                                           ', 'Séraphin                                                                                            ', 2, 1),
(7, 'Sur son pull-over, le capitaine Haddock a :                                                                                                           ', 'Un bâteau                                                                                           ', 'Un drapeau de pirate                                                                                ', 'Une barre de bâteau                                                                                 ', 'Une ancre de marine                                                                                 ', 4, 1),
(8, 'La première rencontre de Tintin avec la capitaine Haddock se fait dans...                                                                             ', 'Le Lotus bleu                                                                                       ', 'Le crabe aux pinces d\'or                                                                            ', 'Tintin au Congo                                                                                     ', 'Tintin en Amérique                                                                                  ', 2, 1),
(9, 'Sur la couverture de quel album voit-on le docteur Müller ?                                                                                           ', 'Le crabe aux pinces d\'or                                                                            ', 'L\'Ile noire                                                                                         ', 'Tintin au pays de l\'or noir                                                                         ', 'L\'affaire Tournesol                                                                                 ', 3, 1),
(10, 'Quel est le dernier album de Tintin ?                                                                                                                 ', 'Tintin au pays des Soviets                                                                          ', 'Tintin et les Picaros                                                                               ', 'Les bijoux de la Castafiore                                                                         ', 'Vol 714 pour Sydney                                                                                 ', 2, 1),
(11, 'Parmi ces personnages, Hergè n\'est pas le père de :                                                                                                   ', 'Tintin et Milou (cadeau !...)                                                                       ', 'Quick et Flupke                                                                                     ', 'Jo, Zette et Jocko                                                                                  ', 'Gott, Faure et Dom\'                                                                                 ', 4, 1),
(12, 'La Castafiore chante...                                                                                                                               ', 'Carmen                                                                                              ', 'L\'air des bijoux                                                                                    ', 'Le barbier de Séville                                                                               ', 'Les Rubis                                                                                           ', 2, 1),
(13, 'Le premier album de Tintin (Tintin au Congo) date de :                                                                                                ', '1930                                                                                                ', '1931                                                                                                ', '1932                                                                                                ', '1933                                                                                                ', 1, 1),
(14, 'Dans ses aventures au Congo, quel est le nom de la tribu qui invite Tintin ?                                                                          ', 'Les Babaoro\'m                                                                                       ', 'Les Bibindo\'m                                                                                       ', 'Les Balato\'m                                                                                        ', 'Les Cafarnao\'m                                                                                      ', 1, 1),
(15, 'Quelle insulte n\'appartient pas au vocabulaire du capitaine Haddock ?                                                                                 ', 'Pyrophore                                                                                           ', 'Zigomars                                                                                            ', 'Phtynolises                                                                                         ', 'Sapajous                                                                                            ', 3, 1),
(16, 'A qui appartenait le château de Moulinsart avant que le capitaine Haddock n\'y réside ?                                                                ', 'Au Dr. Müller                                                                                       ', 'A Rastapopoulos                                                                                     ', 'Au Pr. Tournesol                                                                                    ', 'Aux frères Loiseau                                                                                  ', 4, 1),
(17, 'Que renferme la statuette à l\'oreille cassée ?                                                                                                        ', 'Un diamant                                                                                          ', 'Le plan d\'un trésor                                                                                 ', 'Je ne sais pas, j\'ai pas lu l\'histoire                                                              ', 'De la drogue                                                                                        ', 1, 1),
(18, 'Comment Tintin et Tchang se rencontrent-ils ?                                                                                                         ', 'Tchang sauve Tintin sur qui des bandits tirent                                                      ', 'Tintin renverse Tchang en voiture                                                                   ', 'Tchang renverse Tintin en pousse-pousse                                                             ', 'Tintin sauve Tchang de la noyade                                                                    ', 4, 1),
(19, 'Dans les bijoux de la castafiore, quelle invention le professeur essayait-il de mettre au point ?                                                   ', 'Un fauteuil roulant à moteur                                                                        ', 'Le téléviseur couleur                                                                               ', 'Le visiophone                                                                                       ', 'Le magnétoscope                                                                                     ', 2, 1),
(20, 'Quel phénomène naturel sauve Tintin du bûcher au Temple du Soleil ?                                                                                 ', 'La foudre                                                                                           ', 'Un orage                                                                                            ', 'Une éclipse                                                                                         ', 'Un tremblement de terre                                                                             ', 3, 1),
(21, 'Les vaccins sont seulement donnés par injection.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(22, 'Dans le Sceptre d\'Ottokar, quel objet utilisent Dupont, Dupond et Tintin pour simuler le vol du sceptre ?                                           ', 'La canne d\'un des Dupondt                                                                           ', 'Un os trouvé par Milou                                                                              ', 'La copie du vrai sceptre                                                                            ', 'Un morceau de branche                                                                               ', 4, 1),
(23, 'Dans ses aventures au Congo, comment Tintin se débarrasse-t-il du léopard ?                                                                           ', 'Il lui fait manger une éponge, puis lui fait boire de l\'eau                                         ', 'Il lui fait manger un piment, puis lui fait boire de l\'eau-de-vie                                   ', 'Il lui bloque la gueule avec un bâton                                                               ', 'Il le brûle avec des rayons de soleil à travers une loupe                                           ', 1, 1),
(24, 'Que signifie Coke dans Coke en stock ?                                                                                                            ', 'Du charbon                                                                                          ', 'De la drogue                                                                                        ', 'Des boissons gazeuses                                                                               ', 'Des esclaves                                                                                        ', 4, 1),
(25, 'A part l\'orthographe de leur nom, qu\'est-ce qui différencie Dupont et Dupond ?                                                                        ', 'Les sourcils                                                                                        ', 'Le nez                                                                                              ', 'Le chapeau                                                                                          ', 'La moustache                                                                                        ', 4, 1),
(26, 'Quelle anomalie peut-on relever sur la combinaison du capitaine Haddock dans On a marché sur la lune?                                               ', 'Il y a une poche en moins                                                                           ', 'Les ourlets ont disparu                                                                             ', 'Son matricule a changé                                                                              ', 'Les boutons sont inversés                                                                           ', 3, 1),
(27, 'Sur quel bateau Tintin s\'embarque-t-il dans l\' Etoile mystèrieuse ?                                                                                 ', 'Sirius                                                                                              ', 'Aurore                                                                                              ', 'Peary                                                                                               ', 'Ramona                                                                                              ', 2, 1),
(28, 'Dans les cigares du pharaon, Tintin parvient à communiquer avec un animal en sculptant une trompette. Il s\'agit :                                   ', 'D\'un tigre                                                                                          ', 'D\'un singe                                                                                          ', 'D\'un éléphant                                                                                       ', 'D\'un lion                                                                                           ', 3, 1),
(29, 'Sur la couverture des 7 boules de cristal quel personnage est en lévitation ?                                                                       ', 'Tintin                                                                                              ', 'Le capitaine Haddock                                                                                ', 'Le professeur Bergamotte                                                                            ', 'Le professeur Tournesol                                                                             ', 4, 1),
(30, 'Dans Tintin en Amérique Tintin se fait enlever à :                                                                                                  ', 'New-York                                                                                            ', 'Chicago                                                                                             ', 'Los Angeles                                                                                         ', 'Detroit                                                                                             ', 2, 1),
(31, 'Comment s\'appelle le fils de l\'Emir ?                                                                                                                 ', 'Mohamed                                                                                             ', 'Abdoul                                                                                              ', 'Abdallah                                                                                            ', 'Mourad                                                                                              ', 3, 1),
(32, 'Dans les bijoux de la Castafiore, le capitaine Haddock...                                                                                           ', 'Se casse la jambe                                                                                   ', 'Se coupe en se rasant                                                                               ', 'Se foule le poignet                                                                                 ', 'Se fait une entorse à la cheville                                                                   ', 4, 1),
(33, 'Quel commerçant a un numéro de téléphone proche de celui du château de Moulinsart ?                                                                   ', 'La quincaillerie Sanclout                                                                           ', 'Le café Sanmart                                                                                     ', 'La boulangerie Sampin                                                                               ', 'La boucherie Sanzot                                                                                 ', 4, 1),
(34, 'Quel est le prénom de l\'habilleuse de la Castafiore ?                                                                                                 ', 'Ulla                                                                                                ', 'Irma                                                                                                ', 'Maria                                                                                               ', 'Sandra                                                                                              ', 2, 1),
(35, 'Szut, le pilote de Vol 714 pour Sydney a été le complice de Tintin dans une autre aventure                                                          ', 'Coke en stock                                                                                       ', 'Tintin au pays de l\'or noir                                                                         ', 'Les cigares du Pharaon                                                                              ', 'L\'oreille cassée                                                                                    ', 1, 1),
(36, 'Quel est le bateau de l\'ancêtre du capitaine Haddock ?                                                                                                ', 'La Méduse                                                                                           ', 'La Licorne                                                                                          ', 'L\'Hippocampe                                                                                        ', 'Le Sirius                                                                                           ', 2, 1),
(37, 'Lors de ses aventures au Tibet, Tintin découvre l\'écharpe de Tchang accrochée à un rocher. De quelle couleur est cette écharpe ?                      ', 'Rouge                                                                                               ', 'Jaune                                                                                               ', 'Verte                                                                                               ', 'Bleue                                                                                               ', 2, 1),
(38, 'Le nom du créateur de Tintin vient :                                                                                                                  ', 'Des initiales de son nom et de son prénom (Rémi Georges : R.G.)                                     ', 'Des initiales des prénoms de ses enfants (Henri, Edouard, Roland, Guy et Emilie)                    ', 'Des initiales de ses prénoms (Hervé et Gérard)                                                      ', 'De nulle part, c\'est bien son vrai nom.                                                             ', 1, 1),
(39, 'Spokie, Snowy, Milu, Bobble, Terry... sont les noms donnés à Milou dans diffèrentes traductions. Cherchez l\'intrus pour Tintin :                      ', 'Ten-Ten                                                                                             ', 'Tantan                                                                                              ', 'Titinne                                                                                             ', 'Tintim                                                                                              ', 3, 1),
(40, 'Parmi les 22 albums, sur quelle couverture Tintin est-il représenté avec une arme à la main ?                                                         ', 'L\'oreille cassée                                                                                    ', 'Vol 714 pour Sidney                                                                                 ', 'L\'affaire Tournesol                                                                                 ', 'Tintin et les Picaros                                                                               ', 2, 1),
(41, 'Il y a eu des épreuves de football à tous les Jeux Olympiques d’été.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(42, 'Le football est le sport le plus populaire du monde en termes de participants et de spectateurs.', 'Vrai', 'Faux', 'Peut-etre', 'Je ne sais pas', 1, 2),
(43, 'La première Coupe du Monde de la FIFA a eu lieu en 1930.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(44, 'La Coupe Jules Rimet est le prix remis aux gagnants de la Coupe du Monde de la FIFA.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(45, 'C’est l’Allemagne qui a remporté le plus de titres de la Coupe du Monde de la FIFA.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(46, 'La première Coupe du Monde Féminine de la FIFA a eu lieu en Chine en 1991.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(47, 'L’AC Milan a gagné le plus grand nombre de titres de la Ligue des champions de l’UEFA.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(48, 'La Fédération Internationale de Football Association (FIFA) a été fondée par la British Football Association en 1904.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(49, 'Ce sont les États-Unis qui ont remporté le plus de titres de la Coupe du Monde Féminine de la FIFA.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(50, 'La premier Championnat d\'Europe de football de l’UEFA (Euro) a été joué en 1960.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(51, 'Le Brésilien Pelé est le seul joueur à avoir gagné trois fois la Coupe du Monde de la FIFA.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(52, 'Aucun gardien n’a remporté le titre de meilleur joueur du tournoi de la Coupe du monde de football.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(53, 'Cristiano Ronaldo est le joueur de soccer le mieux payé au monde.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(54, 'Le tout premier but de la Coupe du monde a été marqué par un Français.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(55, 'Le transfert de joueur le plus cher de l’histoire du Galatasaray a été celui d\'Arda Turan.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(56, 'Le nom de Galatasaray vient du nom de son créateur.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(57, 'La star brésilienne Mario Jardel a marqué plus de 30 buts lors de ses deux premières saisons avec Galatasaray.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(58, 'L’Égyptien Essam El Hadary est le joueur le plus âgé de l’histoire des finales de la Coupe du Monde de la FIFA.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(59, 'En 2006, Lionel Messi a aidé l’Argentine à remporter la Coupe du monde de football.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 2),
(60, 'Oleg Salenko a marqué 5 buts dans un match de la Coupe du monde de football.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 2),
(61, 'Un terrain de basketball réglementaire mesure 25 m de longueur sur 15 m de largeur.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 3),
(62, 'Les Grizzlies de Vancouver a été la première équipe de basketball professionnelle canadienne.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 3),
(63, 'À l’origine, les paniers de basketball étaient faits avec des paniers de pêche vides.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 3),
(64, 'Michael Jordan est le meilleur marqueur de tous les temps de la NBA.', 'Vrai', 'Faux', 'Je ne sais pas', 'Peut-être', 2, 3),
(65, 'Le basketball féminin a été admis aux Jeux olympiques seulement en 1976, lors des Jeux olympiques d’été de Montréal.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 3),
(66, 'À l’origine, le basketball se jouait avec un ballon de rugby.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 3),
(67, 'Dans la NBA, un joueur est exclu de la partie après 5 fautes.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 3),
(68, 'Les Celtics de Boston et les Knicks de New York font partie des équipes fondatrices de la NBA.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 3),
(69, 'Selon leur position sur le terrain, les joueurs peuvent obtenir jusqu’à 3 points par panier.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 3),
(70, 'Les cinq postes au basketball sont meneur, arrière, ailier gauche, ailier droit et pivot.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 3),
(71, 'À l’origine, le terme « fustiger » signifiait « battre quelqu’un à coups de bâton ou de fouet ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 4),
(72, 'Le nom de la pâte filo vient du grec phyllon qui veut dire « remplir ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(73, 'Le mot « nullipare » provient du latin nullus et sert à désigner une personne qui ne connaît rien.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(74, 'Le mot « courriel » est une création de l\'Office québécois de la langue française.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(75, 'À l’origine, le terme « procrastination » a été inventé pour définir la détente et le repos.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(76, '« Indéfectible » est un dérivé du latin defectus.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 4),
(77, 'Le mot « grandiloquence » est une contraction des mots « grandir » et « éloquence ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(78, 'Le mot « tennis » provient de « tene(t)z » (tenir), de l’anglo-français du 14e siècle.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 4),
(79, 'Le mot « exsangue » provient du mot « sangsue ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(80, 'Le mot Québec signifie « village » en langue amérindienne.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(81, 'Le déterminant et l’adjectif sont bien accordés dans « je voudrais faire installer une escalier neuve ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(82, 'Les accords sont bons dans « cette aéroport a été rénovée ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(83, '« Grosse » est bien accordé dans « j’ai toujours voulu conduire une grosse autobus ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(84, 'La phrase « chez l’antiquaire, j’ai acheté un armoire » est juste.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(85, 'L’accord de « nationales » est juste dans « l’ancien ministre n’a pas eu droit à des obsèques nationales ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 4),
(86, 'L’accord du démonstratif est juste dans « cette avion ne devrait pas décoller ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(87, 'Le genre du mot acompte est respecté dans « vous devez me donner un acompte de 50 % ».', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 4),
(88, '« Les astronomes recherchent une planète qui possède un atmosphère viable » est juste.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(89, 'Le mot orthographe peut s’écrire au féminin comme au masculin.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 4),
(90, '« Il y a un trou dans le moustiquaire de la porte du jardin » contient une erreur de genre.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 4),
(91, 'Edwin Hubble a découvert Neptune grâce au premier télescope infrarouge.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(92, 'Les découvertes de Marie et Pierre Curie ont remis en cause l’hypothèse selon laquelle le nombre d’atomes sur Terre était fixe.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 5),
(93, 'Johannes Kepler a découvert les trous noirs en 1630.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(94, 'Eurêka est le nom d’un des plus grands mathématiciens de l’Antiquité grecque.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(95, 'L’ADN a été découvert dans les laboratoires secrets du FBI en 1953.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(96, 'En 1783, les frères Montgolfier parviennent à faire s’envoler un coq, un mouton et un canard.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 5),
(97, 'Pour ses travaux, Albert Einstein a gagné le prix Nobel de mathématiques.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(98, 'La voiture électrique Tesla a été nommée en l’honneur de Nikola Tesla, un grand ingénieur du début du 20e siècle.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 5),
(99, 'Louis Pasteur a d’abord mis au point son procédé de pasteurisation pour conserver le vin.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 5),
(100, 'La roue a été inventée à peu près à l’époque où l’humain a réussi à maîtriser le feu.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(101, 'L’allaitement protège mieux des infections que les vaccins.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(102, 'Les vaccins contiennent de l’aluminium.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 5),
(103, 'Les infections contractées naturellement protègent mieux que les vaccins.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(104, 'Les vaccins sont efficaces à 100 %.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(105, '1,5 million d’enfants meurent annuellement, car ils ne sont pas vaccinés.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 5),
(106, 'Certains vaccins sont faits avec des œufs.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 5),
(107, 'Les effets secondaires des vaccins sont plus importants chez les bébés.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(108, 'Se faire vacciner contre la grippe est complètement inutile.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(109, 'Louis Pasteur est l’inventeur de la vaccination.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 5),
(110, 'Aucune femme n’a jamais remporté les 6 tournois majeurs (Grand Chelem, Masters et J.O.).', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 6),
(111, 'Le Royal and Ancient Golf Club of St Andrews, l’un des plus anciens clubs de golf, n’accepte pas les joueurs féminins.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 6),
(112, 'Après avoir gagné deux médailles à Sydney à l’âge de 40 ans, Merlene Ottey est devenue la médaillée d’athlétisme olympique la plus âgée de l’histoire.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 6),
(113, 'Junko Tabei, la première femme à gravir l’Everest, a failli mourir durant une avalanche quelques jours avant son exploit.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 6),
(114, 'La championne de golf Mildred Didrikson Zaharias a aussi gagné une médaille d’or olympique au 80 mètres haies.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 6),
(115, 'Nadia Comaneci, la première gymnaste à obtenir une note parfaite de 10, a aussi gagné une médaille de bronze en patinage artistique.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 6),
(116, 'Le record du saut en hauteur de Stefka Kostadinova tient depuis 1987.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 6),
(117, 'L’ancienne championne de l’Ultimate Fighting Championship (UFC), Ronda Rousey, a gagné la première médaille olympique américaine en judo féminin.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 6),
(118, 'Clara Hughes est la seule athlète qui a gagné des médailles aux Jeux olympiques d’hiver et d’été.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 6),
(119, 'Danica Patrick est la seule femme à avoir remporté une course de Formule 1.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 6),
(120, 'Les fresques du Parcours BD de Bruxelles se trouvent uniquement dans le Centre-Ville de Bruxelles.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(121, 'À chacun des sept accès de la Grand-Place de Bruxelles, on retrouve une plaque de bronze installée au sol avec le logo de l’UNESCO.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(122, 'L’âge moyen de la population de la ville de Bruxelles en 2020 est de 39,3 ans.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(123, 'La tour du Midi, la plus haute tour de Bruxelles et de la Belgique, fait 150 mètres de haut (sans antenne).', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(124, 'La Ville de Bruxelles compte environ 1,2 million d’habitants en 2020.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(125, 'Le bois de la cambre de Bruxelles comprend notamment deux fleurs rares : la sanicle d’Europe et la Gagée à spathe.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(126, 'La Basilique du Sacré-Cœur de Koekelberg est le plus grand bâtiment Art déco au monde.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(127, 'Bruxelles est le siège du Conseil de l’Europe, lequel est situé sur l’Avenue des Nerviens.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(128, 'La ville de Bruxelles est située dans le nord de la Région de Bruxelles-Capitale', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(129, 'La rue Neuve, l’artère commerciale la plus fréquentée de toute la Belgique, est située entre la place Rogier et la place de la Monnaie.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(130, 'La pyramide de Kukulcán est liée au calendrier lunaire.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(131, 'L’inclinaison de la tour de Pise s’explique par la construction d’un métro qui en a affaibli les fondations.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(132, 'Le monastère de Taktshang, au Bhoutan, a été complètement dévasté par un incendie en 1998.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(133, 'Plus de cinq millions de clous ont été nécessaires à la construction du pogost de Kiji.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(134, 'La stavkirke de Borgund, en Norvège, a été construite vers l’an 1600.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 2, 7),
(135, 'Louis II de Bavière a fait dynamiter un pan de montagne pour construire son château sur un éperon rocheux de 200 mètres.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(136, 'Toutes les cloches de la cathédrale Saint-Basile-le-Bienheureux ont été fondues durant la révolution bolchevique.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(137, 'Le temple Ulun Danu Bratan a été détruit deux fois par des éruptions volcaniques.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(138, 'Commencée en 1882, la construction de la basilique Sagrada Familia se poursuit toujours.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7),
(139, 'Les fondations de l’église Saint-André montrent d’inquiétants signes de détérioration qui pourraient entraîner son écroulement.', 'Vrai', 'Faux', 'Peut-être', 'Je ne sais pas', 1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `theme` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`theme`, `nom`) VALUES
(1, 'Tintin'),
(2, 'Le Foot'),
(3, 'Le Basket-Ball'),
(4, 'Français'),
(5, 'Science et Technologie'),
(6, 'Les femmes dans le sport'),
(7, 'Géographie');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `loginUser` varchar(15) NOT NULL,
  `passwd` char(60) NOT NULL,
  `resultat` float DEFAULT NULL,
  `nb_essai` int(11) DEFAULT NULL,
  `connection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `loginUser`, `passwd`, `resultat`, `nb_essai`, `connection`) VALUES
(1, 'admin', '$2y$10$m6T2m.6MAuF.oEuPa3.nR.UUhVZ5h0iy4hZwy.Ex6ubXzfL31pck6', 0, 0, 1),
(2, 'toto', '$2y$10$mCq/akC/r8w68Ja4LkvUWek9FcRW9K1aVoqrkL9bEsj472S5uxFiK', 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`num_quest`),
  ADD KEY `fk_theme` (`theme`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`theme`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `fk_theme` FOREIGN KEY (`theme`) REFERENCES `theme` (`theme`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
