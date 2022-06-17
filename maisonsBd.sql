CREATE TABLE `client_ligue` (
  `id_client` int(100) NOT NULL,
  `nom_client` varchar(100) DEFAULT NULL,
  `prénom_client` varchar(100) DEFAULT NULL,
  `age_client` date DEFAULT NULL,
  `mail_client` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `city_client` varchar(100) DEFAULT NULL,
  `country_client` varchar(100) DEFAULT NULL,
  `id_evenement` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client_ligue`
--

INSERT INTO `client_ligue` (`id_client`, `nom_client`, `prénom_client`, `age_client`, `mail_client`, `password`, `city_client`, `country_client`, `id_evenement`) VALUES
(46, 'lahmar', 'Tabai', '1990-01-27', 'lahmartabai@yahoo.fr', '$2y$10$Pfpz3HnVbsBs.2KFl1qioOnPMH2Q.Xz/.uE704cGbnyV4sMmh7XbG', 'Paris', 'France', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `consulter`
--

CREATE TABLE `consulter` (
  `id_client` int(100) NOT NULL,
  `id_evenement` int(100) NOT NULL,
  `date_consultation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `consulter`
--

INSERT INTO `consulter` (`id_client`, `id_evenement`, `date_consultation`) VALUES
(46, 1, '2022-06-17 07:10:52'),
(46, 2, '2022-06-17 07:10:56'),
(46, 3, '2022-06-17 07:11:01');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_evenement` int(100) NOT NULL,
  `nom_evenement` varchar(100) DEFAULT NULL,
  `image_evenement` text DEFAULT NULL,
  `presentation` text DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `nom_evenement`, `image_evenement`, `presentation`, `date`, `date_creation`, `date_modification`) VALUES
(1, 'Athlétisme', './asset/Sports/Sports_Indiv/Athlétisme/df.jpg', 'L’athlétisme est un ensemble d’épreuves sportives codifiées comprenant les courses, sauts, lancers, épreuves combinées et marche. L\'origine du mot athlétisme vient du grec « Athlos » signifiant combat. Il s’agit de l’art de dépasser la performance des adversaires en vitesse ou en endurance, en distance ou en hauteur. Les épreuves athlétiques, individuelles ou par équipes, ont varié avec le temps et les mentalités. ', '1896', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(2, 'Boxe', './asset/Sports/Sports_Indiv/Boxe/s-combat-boxe.jpg', 'La boxe notamment la « boxe anglaise » règlementée de manière moderne est un sport de combat pratiqué depuis le xviiie siècle à un contre un, qui recourt à des frappes de percussion à l\'aide de gants matelassés. ', '1657', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(3, 'Equitation', './asset/Sports/Sports_Indiv/Equitation/photo-1512934772407-b292436089ee.avif', 'L’équitation est la technique de la conduite du cheval sous l\'action humaine. Elle peut être pratiquée comme un art, un loisir ou un sport. Dans cette discipline, l\'être humain s\'appuie sur l\'utilisation d\'un équidé, le plus souvent un cheval ou un poney. Le mot provient du latin equitare, qui signifie « monter à cheval ».', '1990', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(4, 'Escalade', './asset/Sports/Sports_Indiv/Escalade/photo-1640182655141-c0cc8514049e.avif', 'L’escalade, ou grimpe, parfois appelée varappe (désuet), est une pratique et un sport consistant à progresser le long d\'une paroi pour atteindre le haut d\'un relief ou d\'une structure artificielle par un cheminement appelé voie ou itinéraire, avec ou sans l\'aide de matériel. Le terrain de pratique va des blocs de faible hauteur aux parois de plusieurs centaines de mètres, en passant par les murs d\'escalade.', '1970', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(5, 'Golf', './asset/Sports/Sports_Indiv/Golf/photo-1611374243147-44a702c2d44c.avif', 'Le golf est un sport de précision se jouant en plein air, qui consiste à envoyer une balle dans un trou à l\'aide de clubs. Le but du jeu consiste à effectuer, sur un parcours défini, le moins de coups possible. Précision, endurance, technicité, concentration sont des qualités primordiales pour cette activité.', '1754', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(6, 'Haltérophilie', './asset/Sports/Sports_Indiv/Haltérophilie/Haltérophilie.jpg', 'L\'haltérophilie (en anglais : weight lifting) est un sport consistant à soulever des poids. Dans sa forme moderne, c\'est un sport de force nécessitant également maîtrise d\'une technique particulière, vitesse, souplesse, coordination et équilibre.', '1880', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(7, 'Judo', './asset/Sports/Sports_Indiv/Judo/judo-et-sante.jpg', 'Le judo « voie de la souplesse » est un art martial, créé au Japon en 1882 par Jigorō Kanō en tant que pédagogie physique, mentale et morale. Par rapport au Kobudō, ou « voie martiale traditionnelle », le judo est ce qu\'on appelle un shin budō, c\'est-à-dire une \"voie martiale moderne\", dont une branche a évolué en sport de combat puis en sport olympique à l\'occasion des Jeux olympiques de Tokyo de 1964.', '1964', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(8, 'Lutte', './asset/Sports/Sports_Indiv/Lutte/Icon_210419JAC041-1.jpg', 'La lutte est une discipline sportive et un sport de combat. Il en existe un très grand nombre de variétés mais on peut en distinguer trois principales : la lutte libre (LL), la lutte gréco-romaine (GR) et la lutte féminine (LF).', '1924', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(9, 'Natation', './asset/Sports/Sports_Indiv/Natation/Natation.jpg', 'La natation, c\'est-à-dire l\'action de nager, désigne les méthodes qui permettent aux êtres humains de se mouvoir dans l\'eau sans aucune autre force propulsive que leur propre énergie corporelle.\r\nParmi les activités humaines, la natation regroupe le déplacement à la surface de l\'eau et sous l\'eau (plongée, mermaiding, natation synchronisée, water-polo), le plongeon et divers jeux pratiqués dans l\'eau.', '1896', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(10, 'Pentathlon moderne', './asset/Sports/Sports_Indiv/Pentathlon_moderne/carr_4762.jpg', 'Le pentathlon moderne est une épreuve sportive constituée de cinq disciplines d’où le nom de pentathlon. Ces épreuves sont l’escrime, la natation, l\'équitation, le tir au pistolet et la course à pied. Il faut le distinguer du pentathlon antique : aucune des épreuves du pentathlon moderne ne faisait partie des premiers Jeux olympiques.', '1912', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(11, 'Skeleton', './asset/Sports/Sports_Indiv/Skeleton/MjAyMTA5MGRjN2NkN2Q5NTUzNzJmMGIyNzgxNjIxZDAxYzUzNzE.jpg', 'Le skeleton est un sport d\'hiver individuel qui à l\'instar du bobsleigh et de la luge se pratique dans un couloir de glace étroit en descente. Le skeleton se pratique individuellement sur une planche ressemblant à la luge, mais contrairement à la luge de course, le skeletoneur se place sur son engin à plat ventre, la tête devant. L\'objectif est de parcourir la piste le plus rapidement possible.', '1923', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(12, 'Ski Alpin', './asset/Sports/Sports_Indiv/Ski_alpin/dmhowiu5ok7zwnqhsq3x.jpg', 'Le ski alpin est un ensemble de disciplines du ski qui se pratiquent dans un contexte de loisirs (ski de piste ou hors-piste) ou de compétition (slalom et épreuves de vitesse). C\'est un sport olympique depuis 1936, les premiers championnats du monde remontent à 1931 et la Coupe du monde est née en 1967.', '1931', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(13, 'Ski acrobatique', './asset/Sports/Sports_Indiv/Ski_acrobatique/ski.jpg', 'Le ski acrobatique, Freestyle Skiing en anglais, est un terme apparu à la fin des années 1970 pour regrouper les disciplines du ski de bosses, du saut acrobatique et du ballet à ski, dérivées du ski alpin et relevant toutes trois de la Fédération internationale de ski1. À la fin des années 1990, elles sont complétées par de nouvelles disciplines qui font leur apparition sous l\'appelation « ski freestyle »', '1970', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(14, 'Snowboard', './asset/Sports/Sports_Indiv/Snowboard/snowboard.jpg', 'Le snowboard, surf des neiges, planche à neige au Canada ou plus rarement planche de neige, est un sport de glisse sur neige. L\'équipement se compose d\'une planche de snowboard (board en anglais signifie « planche » et snow signifie « neige »), d\'une paire de fixations dont il existe plusieurs types, et d\'une paire de bottes adaptées (désignées par l\'anglicisme boots). ', '1920', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(15, 'Taekwondo', './asset/Sports/Sports_Indiv/Taekwondo/image.jpg', 'Le taekwondo est un art martial d\'origine sud-coréenne, dont le nom peut se traduire par La voie des pieds et des poings.\r\nLe taekwondo, dont le nom a été proposé en 1955 par le général Choi Hong Hi, est le fruit de la fédération progressive, à partir des années 1950, après l\'occupation japonaise de la Corée, de différentes écoles d\'arts martiaux coréennes qui enseignaient le karaté.', '1955', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(16, 'Tir Sportif', './asset/Sports/Sports_Indiv/Tir_sportif/celine-goberville-avait-remporte-l-argent-au-pistolet-a-10-m-aux-jeux-de-londres-photo-afp-1468696913.jpg', 'Le tir sportif comprend des disciplines, gérées en France par la Fédération française de tir et, au niveau mondial, par différentes fédérations internationales parmi lesquelles l\'International Shooting Sport Federation (ISSF) pour les disciplines olympiques, l\'International Practical Shooting Féderation (IPSC) pour le tir sportif de vitesse ou l\'International Crossbow Shooting Union (IAU) pour l\'arbalète.', '1896', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(17, 'Triathlon', './asset/Sports/Sports_Indiv/Triathlon/G_diapo_fr_FR_46_1603025826.jpg', 'Le triathlon est une discipline sportive constituée de trois épreuves d\'endurance enchaînées dans l\'ordre suivant : natation, cyclisme et course à pied. ', '1974', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(18, 'Aviron', './asset/Sports/Sports_Indiv/Aviron/aviron.jpg', 'L\'aviron fait partie de la famille des sports nautiques. C\'est un sport olympique depuis la création des Jeux olympiques modernes en 1896 sous l\'impulsion du baron Pierre de Coubertin. Ce sport consiste à propulser une forme, étroite et allongée, de traînière à l\'aide de rames, également appelées avirons, ou communément dans le milieu des pratiquants francophones « pelles ». On distingue deux catégories : l\'aviron de rivière et l\'aviron de mer.', '1896', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(19, 'Badminton', './asset/Sports/Sports_Indiv/Badminton/Badminton.jpg', 'Le badminton est un sport de raquette qui oppose soit deux joueurs (simples), soit deux paires (doubles), placés dans deux demi-terrains séparés par un filet. Les joueurs, appelés badistes, marquent des points en frappant un volant à l\'aide d\'une raquette afin de le faire tomber dans le terrain adverse. L\'échange se termine dès que le volant touche le sol ou reste accroché dans le filet.', '1992', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(20, 'Cyclisme', './asset/Sports/Sports_Indiv/Cyclisme/tom-photo-cycling-gMcgS7race0-unsplash.jpg', 'Le cyclisme recouvre plusieurs notions concernant la bicyclette : il est d\'abord une activité quotidienne pour beaucoup, un loisir pour d\'autres (cyclotourisme), enfin un sport proposant des courses selon plusieurs disciplines : l\'école de cyclisme, le cyclisme sur route, le cyclisme sur piste, le cyclo-cross, le vélo tout terrain (abrégé couramment VTT), le BMX, le cyclisme en salle et le polo-vélo.', '1818', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(21, 'Canoë-kayak', './asset/Sports/Sports_Indiv/Canoë-kayak/eduard.jpg', 'Le canoë-kayak ou canoé-kayak est une activité physique de loisir ou sportive, pratiquée avec des embarcations propulsées à la pagaie, comme le canoë, le kayak, le raft, ou la pirogue. Cette activité est également désignée par « sports de pagaie » .', '1936', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(22, 'Lutte', './asset/Sports/Sports_Indiv/Lutte/Icon_210419JAC041-1.jpg', 'La lutte est un système de combat à mains nues au cours duquel les adversaires se mesurent au corps à corps. L\'objectif est de remporter le combat soit en faisant tomber l\'adversaire au sol et en maintenant ses deux épaules collées au tapis : c\'est le tombé ; soit en gagnant aux points. ', '1624', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(23, 'Luge', './asset/Sports/Sports_Indiv/luge/luge.jpg', 'Une luge est un véhicule sur lequel on s\'assied pour glisser sur la neige ou sur la glace. Elle se différencie du traîneau qui utilise une force motrice pour se mouvoir et du bobsleigh qui, lui, dispose d\'un frein et d\'une commande de direction.', '1883', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(24, 'Patinage Artistique', './asset/Sports/Sports_Indiv/Patinage_artistique/Patinage_artistique.jpg', 'Le patinage artistique est un sport et une discipline artistique exécutés sur la glace, synthétique ou artificielle, qui développent les qualités physiques et la sensibilité artistique. Il se pratique avec des patins à lame.', '1850', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(25, 'Plongeon', './asset/Sports/Sports_Indiv/Plongeon/Plongeon.jpg', 'Le plongeon consiste à se lancer dans l\'eau d\'une hauteur plus ou moins importante1. Il peut être effectué pour s\'amuser, pour prendre le départ d\'une course de natation ou pratiqué comme un sport à part entière. Dans ce dernier cas, il s\'agit, en s\'élançant de différentes hauteurs, d\'effectuer devant un jury des figures acrobatiques codifiées avant de pénétrer dans l\'eau.', '1904', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(26, 'Tennis', './asset/Sports/Sports_Indiv/Tennis/Tennis.jpg', 'Le tennis est un sport de raquette qui oppose soit deux joueurs (on parle alors de jeu en simple) soit quatre joueurs qui forment deux équipes de deux (on parle alors de jeu en double). Les joueurs utilisent une raquette cordée verticalement et horizontalement (en tamis) à une tension variant avec la puissance ou l\'effet que l\'on veut obtenir.', '1896', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(27, 'Nautisme (voile)', './asset/Sports/Sports_Indiv/Voile/renan.jpg', 'Le nautisme à la voile est l\'art de naviguer avec l\'aide du vent comme force propulsive. Il s\'agit d\'une activité de loisir ou de compétition, voire un art de vivre, qui se pratique avec différents types d\'engins, du simple flotteur comme dans le cas de la planche à voile, au véritable bateau, sur lac ou sur mer.', '1662', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(28, 'Escrime', './asset/Sports/Sports_Indiv/Escrime/nathanael-desmeules-0gQOp8Z1evg-unsplash.jpg', 'L’escrime est un sport de combat. Il s’agit de l’art de toucher un adversaire avec la pointe ou le tranchant (estoc et taille) d’une arme blanche sur les parties valables sans être touché.', '1900', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(29, 'Gymnastique', './asset/Sports/Sports_Indiv/Gymnastique/eugene-lim-pOwltFP-q30-unsplash.jpg', 'La gymnastique est un terme générique qui regroupe aujourd\'hui des formes très diverses de disciplines sportives, pratiquées pour le loisir ou la compétition : gymnastique artistique, gymnastique rythmique, trampoline, gymnastique acrobatique, gymnastique aérobic, tumbling.', '1800', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(30, 'Handball', './asset/Sports/Sports_collectif/Handball/HandBall.jpg', 'Le handball est un sport collectif joué à la main où deux équipes de sept joueurs s\'affrontent avec un ballon en respectant plusieurs règles sur un terrain rectangulaire de dimensions 40 m par 20 m, séparé en deux camps. L\'équipe déclarée victorieuse est celle qui a marqué le plus de buts à la fin du temps imparti, généralement deux périodes de 30 minutes.', '1936', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(31, 'Hockey sur gazon ', './asset/Sports/Sports_collectif/Hockey_sur_gazon/Hokey_sur_gason.jpg', 'Le hockey sur gazon est un sport collectif de balle, mettant aux prises deux formations de onze joueurs équipés d\'une crosse, appelée communément « stick ».', '1851', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(32, 'Hockey sur glace', './asset/Sports/Sports_collectif/Hockey_sur_glace/Hokey.jpg', 'Le hockey sur glace, appelé le plus souvent hockey, est un sport d’équipe se jouant sur une patinoire spécialement aménagée. L’objectif de chaque équipe est de marquer des buts en envoyant un disque de caoutchouc vulcanisé, appelé rondelle ou palet, à l’intérieur du but adverse situé à une extrémité de la patinoire. L’équipe se compose de plusieurs lignes de cinq joueurs, qui se relaient sur la glace, ainsi que d\'un gardien de but, qui se déplacent en patins à glace et manipulent la rondelle à l’aide d’un bâton de hockey également appelée crosse en France ou canne de hockey en Belgique et en Suisse.', '1917', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(33, 'Rugby à VIIN', './asset/Sports/Sports_collectif/Rugby_à_VIIN/Rugby_à_VIIN.jpg', 'Le rugby à VIIN est une variante du rugby à XIII pratiquée en Angleterre depuis 1946.\r\nDans sa « philosophie », les règles sont très proches de celles du rugby à XIII mais avec des aménagements notables : ainsi les mêlées sont réalisées avec seulement trois joueurs par équipe et tous les tirs au but doivent être frappés comme des drops. Chaque mi-temps est de sept minutes2.', '1946', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(34, 'Volley-ball', './asset/Sports/Sports_collectif/Volley-ball/title-1469123369.jpg', 'Le volley-ball, ou volleyball, est un sport collectif opposant deux équipes de six joueurs séparées par un filet, qui s\'affrontent avec un ballon sur un terrain rectangulaire de 18 mètres de long sur 9 mètres de large. Avec 600 millions de pratiquants en 2007, il s\'agit de l\'un des sports les plus pratiqués dans le monde.', '1895', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(35, 'Water-polo', './asset/Sports/Sports_collectif/Water-polo/eugene-lim-gYglzOhOirg-unsplash.jpg', 'Le water-polo est un sport collectif aquatique opposant deux formations de sept joueurs. Il fut codifié dans le Royaume-Uni à la fin du xix siècle et devint sport olympique en 1900 pour les hommes, et en 2000 pour les femmes.', '1900', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(36, 'Baseball', './asset/Sports/Sports_collectif/Baseball/Baseball.jpg', 'Le baseball est un sport collectif dérivé des mêmes racines que le cricket, qui se pratique sur un terrain de gazon et de sable. Il se joue avec des battes pour frapper une balle lancée, et des gants pour rattraper la balle. Les origines du baseball prêtent à controverse, mais il est indiscutable que les premières règles modernes (les « Knickerbocker Rules ») ont été codifiées aux États-Unis en 1845.', '1857', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(37, 'Softball', './asset/Sports/Sports_collectif/SoftBall/christine-von-raesfeld-LEx4Z5Qd3C8-unsplash.jpg', 'Le softball, aussi appelé balle-molle en Amérique du Nord francophone, est un sport collectif pratiqué par deux équipes de neuf à douze joueurs alternant entre l’attaque et la défense. Le but du jeu est de faire avancer les coureurs autour de quatre bases, appelées « buts » au Canada francophone, jusqu\'au marbre, et de marquer le plus de points possible.', '1887', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(38, 'Football', './asset/Sports/Sports_collectif/Football/football.jpg', 'Le football est un sport collectif qui se joue avec un ballon sphérique entre deux équipes de onze joueurs. Elles s\'opposent sur un terrain rectangulaire équipé d\'un but à chaque extrémité. L\'objectif de chaque camp est de mettre le ballon dans le but adverse plus de fois que l\'autre équipe, sans que les joueurs utilisent leurs bras à l\'exception des gardiens de buts.', '1904', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(39, 'Natation synchronisée', './asset/Sports/Sports_collectif/Nat_synch/B9718931537Z.1_20190320190757_000+G52D6RC98.1-0.jpg', 'La natation synchronisée, appelée natation artistique1 depuis l\'été 2017, est un sport nautique, mélange de gymnastique, de danse et de natation qui se pratique en piscine.', '1984', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(40, 'Basket-ball', './asset/Sports/Sports_collectif/BasketBall/th.jpg', 'Basket-ball ou basketball, fréquemment désigné en français par son abréviation basket, est un sport collectif de balle opposant deux équipes de cinq joueurs sur un terrain rectangulaire. L\'objectif de chaque équipe est de faire passer un ballon au sein d\'un arceau de 46 cm de diamètre, fixé à un panneau et placé à 3,05 m du sol : le panier. Chaque panier inscrit rapporte deux points à son équipe, à l\'exception des tirs effectués au-delà de la ligne des trois points. ', '1932', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(41, 'Beach Handball', './asset/Sports/Sports_collectif/Beach_handball/beach_handball.jpg', 'Le beach handball est un sport collectif dérivé du handball en salle mais qui se pratique sur du sable. Le beach handball oppose deux équipes de quatre joueurs (dont un gardien de but) qui doivent lancer un ballon en plastique dans le but de leurs adversaires. Comme au handball, le nombre de pas balle en main est limité à trois.', '1945', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(42, 'Beach soccer', './asset/Sports/Sports_collectif/Beach_soccer/soccer.jpg', 'Le beach soccer, aussi appelé football sur sable ou soccer de plage, est un sport qui s\'apparente au football et qui se pratique sur du sable de plage. Il met aux prises deux équipes de cinq joueurs, avec des remplacements fréquents, sur un terrain à peu près trois fois plus petit que celui du football.', '1993', '2022-05-04 14:27:33', '2022-05-04 14:27:33'),
(43, 'Cricket', './asset/Sports/Sports_collectif/Cricket/michael-weir.jpg', 'Le cricket se joue généralement sur un terrain de forme ovale, en herbe, au centre duquel se trouve une zone d\'une vingtaine de mètres de longueur, à chaque extrémité de laquelle on trouve une structure de bois, le guichet. Une rencontre est divisée en plusieurs manches.', '1909', '2022-05-04 14:27:33', '2022-05-04 14:27:33');

-- --------------------------------------------------------

--
-- Structure de la table `records`
--

CREATE TABLE `records` (
  `id_record` int(100) NOT NULL,
  `nom_record` varchar(100) DEFAULT NULL,
  `image_record` text DEFAULT NULL,
  `presentation_record` text DEFAULT NULL,
  `date_record` varchar(100) DEFAULT NULL,
  `video_record` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `records`
--

INSERT INTO `records` (`id_record`, `nom_record`, `image_record`, `presentation_record`, `date_record`, `video_record`) VALUES
(1, 'Kareem Abdul-Jabbar', './asset/Sports/Records/Kareem-Abdul-Jabbar/kareem-abdul-jabbar.jpg', 'Abdul-Jabbar détient un des records du monde les plus importants de l’histoire de la NBA. En effet, il est recordman du nombre de points marqués dans une carrière avec 38 387. Il dépasse le précédent record le 5 avril 1984 alors établi à 31 419 par Wilt Chamberlain. Avec une carrière de deux décennies, il reste encore aujourd’hui l’actuel détenteur du record devant Karl Malone, LeBron James et le regretté Kobe Bryant.', '1984', './asset/Sports/Records/Records_Videos/Kareem_Abdul-Jabbar_Highlights.mp4'),
(2, 'Kendra Harrison', './asset/Sports/Records/Kendra_Harrison/kendra-harrison-1920x1054.jpg', 'Kendra Harrison, née en 1992 à Memphis est une athlète américaine. Elle est spécialiste du 100 mètres haies et détient l’actuel record du monde qu’elle remporte lors des J.O. de Londres le 22 juillet 2016. Son temps est alors de 12 s 20.', '2016', './asset/Sports/Records/Records_Videos/Keni_Harrison.mp4'),
(3, 'Robert Lewandowski', './asset/Sports/Records/Robert_Lewandowski/robert-lewandowski.jpg', 'Considéré comme l’un des meilleurs avants-centres du championnat allemand, Robert Lewandowski, est un footballeur professionnel polonais né en 1988. Il détient le record du quintuplé le plus rapide de l’histoire avec 5 buts inscrits en 9 minutes. Cette prouesse est réalisée le 22 septembre 2015 alors qu’il évolue au Bayern Munich. Lors d’un match de championnat de la Bundesliga face au VfL Wolfsburg, son équipe est menée (0-1). Il inscrit alors 5 buts en seulement 9 minutes (5-1).', '2015', './asset/Sports/Records/Records_Videos/Robert_Lewandowski.mp4'),
(4, 'Ashrita Furman', './asset/Sports/Records/Ashrita_Furman/ashrita-furman.jpg', 'Prenons un peu de recul et intéressons-nous à un record assez particulier. Il s’agit du record du nombre de records du monde. Il est détenu par Ashrita Furman, né en 1954 à Brooklyn. Au cours de sa vie, il a établi plus de 350 records officiels reconnus par le Guinness Book dont 174 qui tiennent encore aujourd’hui.', '2004', './asset/Sports/Records/Records_Videos/Ashrita_Furman.mp4'),
(5, 'Usain Bolt', './asset/Sports/Records/Usain_Bolt/usain-bolt-1920x1087.jpg', 'L’homme le plus rapide du monde, 9 s 58 : c’est le temps qu’il a fallu au Jamaïcain pour boucler son 100 m lors des Championnats du monde d’athlétisme à Berlin le 16 août 2009. Il était alors âgé de 22 ans. Ce record était alors une amélioration de son propre record du monde de 11 centièmes de seconde réalisé un an plus tôt lors des J.O. de Pékin.', '2012', './asset/Sports/Records/Records_Videos/Usain_Bolt.mp4'),
(6, 'Luke Aikins', './asset/Sports/Records/Luke_Aikins/luke-aikins.jpg', 'Dans la lignée des sauts en parachute insolites, celui de Luke Aikins arrive souvent en haut de la liste. Le 30 juillet 2016, il réalise l’exploit de sauter volontairement en chute libre sans parachute ni wingsuit à 7 620 mètres au-dessus du sol de la Californie.Comment a-t-il atterri ? Eh bien, sur un filet bien sûr ! Situé à 70 mètres du sol, le filet de 30 mètres sur 30 a freiné sa chute de 200 km/h à 0 sur seulement 30 mètres de distance. Dans les airs, il était guidé au sol par radio et accompagné durant la chute par trois parachutistes professionnels.', '2015', './asset/Sports/Records/Records_Videos/Luke_Aikins.mp4'),
(7, 'Nicolas Mahut et John Isner', './asset/Sports/Records/Nicolas_Mahut_et_John_Isner/nicolas-mahut-john-isner.jpg', 'Lors du premier tour de Wimbledon en 2010, le Français Nicolas Mahut dispute un match historique face à l’Américain John Isner. La rencontre se termine après 11 heures et 5 minutes de jeu. Il aura fallu trois jours et 980 points pour arriver au bout de ce match interminable.', '2010', './asset/Sports/Records/Records_Videos/The_Longest_Match.mp4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client_ligue`
--
ALTER TABLE `client_ligue`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_evenement` (`id_evenement`);

--
-- Index pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`id_client`,`id_evenement`,`date_consultation`),
  ADD KEY `id_evenement` (`id_evenement`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evenement`);

--
-- Index pour la table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id_record`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client_ligue`
--
ALTER TABLE `client_ligue`
  MODIFY `id_client` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evenement` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `records`
--
ALTER TABLE `records`
  MODIFY `id_record` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client_ligue`
--
ALTER TABLE `client_ligue`
  ADD CONSTRAINT `client_ligue_ibfk_1` FOREIGN KEY (`id_evenement`) REFERENCES `evenement` (`id_evenement`);

--
-- Contraintes pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `consulter_ibfk_1` FOREIGN KEY (`id_evenement`) REFERENCES `evenement` (`id_evenement`),
  ADD CONSTRAINT `consulter_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client_ligue` (`id_client`);
COMMIT;

