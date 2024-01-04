<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mangas')->insert([
            [
                'type_id' => 1,
                'title' => 'Naruto',
                'image' => '/img/mangas/Naruto/volume_1.jpg',
                'author' => 'Masashi Kishimoto',
                'editor' => 'Kana',
                'synopsis' => "Il y a de cela douze ans, Kyūbi, un démon ayant la forme d'un renard à neuf queues, entreprit la destruction du village de Konoha, mais le quatrième Hokage neutralisa ce démon en le scellant dans le corps d'un nouveau-né : Naruto Uzumaki. Le quatrième Hokage se sacrifia ainsi pour sauver le village de Konoha.\n\nL'histoire commence pendant l'adolescence de Naruto, vers ses douze ans. Orphelin, éternel cancre et grand farceur, il fait toutes les bêtises possibles pour se faire remarquer. Son rêve : devenir Hokage afin d'être reconnu par les habitants de son village. En effet, le démon scellé en lui a attisé la crainte et le mépris des autres villageois, qui, avec le temps, ne font plus de différence entre le Kyūbi et Naruto. Malgré cela, Naruto s'entraîne dur afin de devenir genin, le premier niveau chez les ninjas.",
                'status' => 'Terminé',
                'popularity' => 95,
                'release_date' => '2002-11-15',
            ],
            [
                'type_id' => 1,
                'title' => 'One Piece',
                'image' => '/img/mangas/OnePiece/volume_1.jpg',
                'author' => 'Eiichiro Oda',
                'editor' => 'Glénat',
                'synopsis' => "Gloire, fortune et puissance, c'est ce que possédait Gold Roger, le tout puissant roi des pirates, avant de mourir sur l'échafaud. Mais ses dernières paroles ont éveillé bien des convoitises, et lancé la fabuleuse \"ère de la piraterie\", chacun voulant trouver le fabuleux trésor qu'il disait avoir laissé. Bien des années plus tard, Shanks, un redoutable pirate aux cheveux rouges, rencontre Luffy, un jeune garçon d'une dizaine d'années dans un petit port de pêche. Il veut devenir pirate et le rejoindre, mais Shanks lui répond qu'il est trop jeune. Plus tard, Luffy avale accidentellement le fruit Gomu Gomu qui rendra son corps élastique, mais aussi maudit par les eaux. Incapable de nager, Luffy ne veut pourtant pas renoncer à son rêve. Pour le consoler lorsqu'il part, Shanks lui offre son chapeau. Luffy jure alors de le rejoindre un jour avec son propre équipage. À 17 ans, Luffy prend la mer dans une petite barque avec pour but de réunir un équipage de pirates, mais de pirates pas comme les autres, qui devront partager sa conception un peu étrange de la piraterie. L'aventure est lancée.",
                'status' => 'En cours',
                'popularity' => 99,
                'release_date' => '1999-11-20',
            ],
            [
                'type_id' => 1,
                'title' => 'Dragon Ball',
                'image' => '/img/mangas/DragonBall/volume_1.jpg',
                'author' => 'Akira Toriyama',
                'editor' => 'Glénat',
                'synopsis' =>"Alors qu'elle parcourt les routes de montagnes à moto, Bulma fait une bien étrange rencontre en la personne de Sangoku, un petit garçon étonnamment fort, résistant et possédant une queue, comme les singes. Il possède un trésor qu'elle recherche, une boule de cristal, mais ne veut pas la lui céder, c'est un cadeaux que lui a laissé son grand-père Sangohan. Ils trouvent finalement un compromis, et Sangoku part avec elle à la recherche des 7 boules de cristal dont on dit qu'elles exaucent n'importe quel souhait une fois réunis.",
                'status' => 'Terminé',
                'popularity' => 97,
                'release_date' => '1984-11-04',
            ],
            [
                'type_id' => 1,
                'title' => 'Fullmetal Alchemist',
                'image' => '/img/mangas/FullmetalAlchemist/volume_1.jpg',
                'author' => 'Hiromu Arakawa',
                'editor' => 'Kurokawa',
                'synopsis'=>"En voulant ressusciter leur mère, Edward et Alphonse Elric vont utiliser une technique interdite relevant du domaine de l'alchimie : la transmutation humaine. Seulement, l'expérience va mal tourner : Edward perd un bras et une jambe et Alphonse son corps, son esprit se retrouvant prisonnier d'une armure. Devenu un alchimiste d'État, Edward, surnommé \"fullmetal alchemist\", se lance, avec l'aide de son frère, à la recherche de la pierre philosophale, leur seule chance de retrouver leur état initial.",
                'status' => 'Terminé',
                'popularity' => 94,
                'release_date' => '2001-10-29',
            ],
            [
                'type_id' => 1,
                'title' => 'Jujutsu Kaisen',
                'image' => '/img/mangas/JujutsuKaisen/volume_1.jpg',
                'author' => 'Gege Akutami',
                'editor' => 'Ki-oon',
                'synopsis'=>"Chaque année au Japon, on recense plus de 10 000 morts inexpliquées et portés disparus.\n\nDans la majorité des cas, ce sont les sentiments négatifs des êtres humains qui sont en cause. Souffrance, regrets, humiliation : leur accumulation dans un même endroit provoque des malédictions souvent fatales...",
                'status' => 'En cours',
                'popularity' => 85,
                'release_date' => '2018-01-01',
            ],
            [
                'type_id' => 2,
                'title' => 'Berserk',
                'image' => '/img/mangas/Berserk/volume_1.jpg',
                'author' => 'Kentaro Miura',
                'editor' => 'Glénat',
                'synopsis'=>"Dans un monde médiéval et marqué par un passé difficile, erre un mercenaire solitaire nommé Guts, décidé à être seul maître de son destin. Autrefois contraint par un pari perdu à rejoindre les Faucons, une troupe de mercenaires dirigés par Griffith, Guts fut acteur de nombreux combats sanglants et témoin de sombres intrigues politiques. Mais il réalisa soudain que la fatalité n'existe pas et qu'il pouvait reprendre sa liberté s'il le désirait vraiment...
                Mais un mal le traque sans relâche.",
                'status' => 'En cours',
                'popularity' => 80,
                'release_date' => '1989-07-01',
            ],
            [
                'type_id' => 2,
                'title' => 'L\'attaque des titans',
                'image'=>'/img/mangas/snk/volume_1.jpg',
                'author' => 'Hajime Isayama',
                'editor' => 'Pika',
                'synopsis'=>"Le monde appartient désormais aux Titans, des êtres gigantesques qui ont presque décimé l’Humanité. Voilà une centaine d’années, les derniers rescapés ont bâti une place forte, une cité cernée d’une haute muraille au sein de laquelle vivent aujourd’hui leurs descendants. Parqués, ignorants tout du monde extérieur, ils s’estiment au moins à l’abri de ces effroyables êtres qui ne feraient d’eux qu’une bouchée. Hélas, cette illusion de sécurité vole en éclats le jour où surgit un Titan démesuré, encore bien plus colossal que tous les autres. S’engage alors un combat désespéré pour la survie du genre humain…",
                'status' => 'Terminé',
                'popularity' => 88,
                'release_date' => '2009-07-01',
            ],

            [
                'type_id' => 1,
                'title' => 'Chainsaw Man',
                'image' => '/img/mangas/ChainsawMan/volume_1.jpg',
                'author' => 'Tatsuki Fujimoto',
                'editor' => 'Crunchyroll',
                'synopsis'=>"Pour rembourser ses dettes, Denji, jeune homme dans la dèche la plus totale, est exploité en tant que Devil Hunter avec son chien-démon-tronçonneuse, “Pochita”. Mais suite à une cruelle trahison, il voit enfin une possibilité de se tirer des bas-fonds où il croupit ! Devenu surpuissant après sa fusion avec Pochita, Denji est recruté par une organisation et part à la chasse aux démons…",
                'status' => 'En cours',
                'popularity' => 80,
                'release_date' => '2018-01-01',
            ],

            [
                'type_id' => 1,
                'title' => 'Bleach',
                'image' => '/img/mangas/Bleach/volume_1.jpg',
                'author' => 'Tite Kubo',
                'editor' => 'Glénat',
                'synopsis'=>"Adolescent de quinze ans, Ichigo Kurosaki possède un don particulier : celui de voir les esprits. Un jour, il croise la route d'une belle Shinigami (un être spirituel) en train de pourchasser une \"âme perdue\", un esprit maléfique qui hante notre monde et n'arrive pas à trouver le repos.Mise en difficulté par son ennemi, la jeune fille décide alors de prêter une partie de ses pouvoirs à Ichigo, mais ce dernier hérite finalement de toute la puissance du Shinigami. Contraint d'assumer son nouveau statut, Ichigo va devoir gérer ses deux vies : celle de lycéen ordinaire, et celle de chasseur de démons...",
                'status' => 'Terminé',
                'popularity' => 80,
                'release_date' => '2003-01-01',
            ],

            [
                'type_id' => 1,
                'title' => 'Death Note',
                'image' => '/img/mangas/DeathNote/volume_1.jpg',
                'author' => 'Tsugumi Ohba',
                'editor' => 'Kana',
                'synopsis'=>"Light Yagami ramasse un étrange carnet oublié dans la cour de son lycée.

                Selon les instructions du carnet, la personne dont le nom est écrit dans les pages du Death Note mourra dans les 40 secondes !! Quelques jours plus tard, Light fait la connaissance de l'ancien propriétaire du carnet : Ryûk, un dieu de la mort ! Poussé par l'ennui, il a fait entrer le carnet sur terre. Ryûk découvre alors que Light a déjà commencé à remplir son carnet...",
                'status' => 'Terminé',
                'popularity' => 80,
                'release_date' => '2003-01-01',
            ],

            [
                'type_id' => 1,
                'title' => 'Demon Slayer',
                'image' => '/img/mangas/DemonSlayer/volume_1.jpg',
                'author' => 'Koyoharu Gotouge',
                'editor' => 'Panini',
                'synopsis'=>"Début du XXe siecle au Japon, un petit marchand de charbon nommé Tanjiro vit une vie sans histoire dans les montagnes. Jusqu’au jour tragique où, après une courte absence, il retrouve son village et sa famille massacrés par un ogre ! La seule survivante de cette tragédie est sa jeune sœur Nezuko. Hélas, au contact de la bête, celle-ci s’est à son tour métamorphosée en monstre... Afin de renverser le processus et de venger sa famille, Tanjiro décide de partir en quête de vérité. Pour le jeune héros et sa sœur, c’est une longue aventure de sang et d’acier qui commence !",
                'status' => 'Terminé',
                'popularity' => 76,
                'release_date' => '2016-01-01',
            ],

            [
                'type_id' => 2,
                'title' => 'Vinland Saga',
                'image' => '/img/mangas/VinlandSaga/volume_1.jpg',
                'author' => 'Makoto Yukimura',
                'editor' => 'Kurokawa',
                'synopsis'=>"Depuis qu'Askeladd, un chef de guerre fourbe et sans honneur, a tué son père lorsqu'il était enfant, Thorfinn le suit partout dans le but de se venger. Mais bien qu'il soit devenu un guerrier redoutable, il ne parvient toujours pas à vaincre son ennemi. Au fil des ans, enchaînant missions périlleuses et combats afin d'obtenir des duels contre l'homme qu'il hait plus que tout, le gentil Thorfinn est devenu froid et solitaire, prisonnier de son passé et incapable d'aller de l'avant. Jusqu'à ce que la vie le force à regarder le Monde différemment?",
                'status' => 'En cours',
                'popularity' => 75,
                'release_date' => '2005-01-01',
            ],
            [
                'type_id' => 2,
                'title' => 'Kingdom',
                'image' => '/img/mangas/Kingdom/volume_1.jpg',
                'author' => 'Yasuhisa Hara',
                'editor' => 'Meian',
                'synopsis'=>"
                La chine, qui n'est pas encore unifiée, traverse une grande guerre de cinq siècles. Shin, un jeune garçon contemporain de ces temps violents et houleux, cherche, par la seule force de son épée, à se faire un nom sous les cieux !!!",
                'status' => 'En cours',
                'popularity' => 74,
                'release_date' => '2006-01-01',

            ],
            [
                'type_id' => 2,
                'title' => 'Vagabond',
                'image' => '/img/mangas/Vagabond/volume_1.jpg',
                'author' => 'Takehiko Inoue',
                'editor' => 'Tonkam',
                'synopsis'=>"Takezo Shinmen, 17 ans, cherche sa voie, il cherche à atteindre le sommet, et ce n'est pas dans son village en Mimasaka qu'il va l'atteindre.

                Après avoir pris le nom de Miyamoto Musashi, il parcourt le Japon de l'époque Edo à la recherche de combattants. C'est à Kyoto qu'il trouvera son premier adversaire : Seijuro Yoshioka maître du dojo Yoshioka, considéré comme l'une des plus fines lames du pays.",
                'status' => 'En cours',
                'popularity' => 73,
                'release_date' => '2007-01-01',
            ],

            [
                'type_id' => 1,
                'title' => 'Boruto: Naruto next generations',
                'image' => '/img/mangas/Boruto/volume_1.jpg',
                'author' => 'Ukyo Kodashi & Mikio Hikemoto & Masashi Kishimoto',
                'editor' => 'Kana',
                'synopsis'=>"UNE NOUVELLE GÉNÉRATION DE NINJAS DÉBARQUE À KONOHA !

                Les grands affrontements dans le monde des ninjas appartiennent désormais au passé. Le village de Konoha est entré dans une ère de paix. Boruto, le fils du 7e Hokage, vit mal d’être dans l’ombre de son éminent paternel. Il ne se doute pas qu’une nouvelle menace plane sur eux…

                La légende de la nouvelle génération commence maintenant ! !",
                'status' => 'En cours',
                'popularity' => 68,
                'release_date' => '2016-01-01',

            ],
            [
                'type_id' => 1,
                'title' => 'Hunter x Hunter',
                'image' => '/img/mangas/HunterxHunter/volume_1.jpg',
                'author' => 'Yoshihiro Togashi',
                'editor' => 'Kana',
                'synopsis'=>"Gon est orphelin de mère et vit sur l'île de la Baleine, petite île paisible où sa tante et sa grand-mère l'éduquent. Son père est un grand Hunter, Gon souhaite le retrouver ; pour cela il doit réussir l'examen Hunter réputé extrêmement rude.

                Les Hunters sont l'élite de l'élite. C'est-à-dire qu'ils sont non seulement très puissants intellectuellement et physiquement mais ils bénéficient aussi de nombreux avantages comme aller dans le monde où bon leur semble ou encore avoir une immunité judiciaire... Le statut de Hunter attire gens de tout bord, Gon va rencontrer lors de l'examen de vrais amis mais aussi de vrais sociopathes notamment Hisoka...",
                'status' => 'En cours',
                'popularity' => 76,
                'release_date' => '1998-01-01',
            ],
            [
                'type_id' => 1,
                'title' => 'My Hero Academia',
                'image' => '/img/mangas/mha/volume_1.jpg',
                'author' => 'Horikoshi Kôhei',
                'editor' => 'Ki-oon',
                'synopsis' => "Dans un monde où 80 % de la population possède un super-pouvoir appelé alter, les héros font partie de la vie quotidienne. Et les super-vilains aussi ! Face à eux se dresse l’invincible All Might, le plus puissant des héros ! Le jeune Izuku Midoriya en est un fan absolu. Il n’a qu’un rêve : entrer à la Hero Academia pour suivre les traces de son idole.
                Le problème, c’est qu’il fait partie des 20 % qui n’ont aucun pouvoir…

                Son destin est bouleversé le jour où sa route croise celle d’All Might en personne ! Ce dernier lui offre une chance inespérée de voir son rêve se réaliser. Pour Izuku, le parcours du combattant ne fait que commencer !",
                'status' => 'En cours',
                'popularity' => 75,
                'release_date' => '2014-01-01',
            ],

            [
                'type_id' => 1,
                'title' => 'One Punch Man',
                'image' => '/img/mangas/OnePunchMan/volume_1.jpg',
                'author' => 'Yusuke Morata',
                'editor' => 'Kurokawa',
                'synopsis'=> "Saitama est un jeune homme sans emploi et sans réelle perspective d'avenir, jusqu'au jour ou il décide de prendre sa vie en main. Son nouvel objectif : devenir un super-héros. Il s'entraîne alors sans relâche pendant trois ans et devient si puissant qu'il est capable d'éliminer ses adversaires d'un seul coup de poing. On le surnomme désormais One-Punch Man. Mais rapidement, l'euphorie du succès cède place à l'ennui, car lorsqu'on est si fort, les victoires perdent de leur saveur...",
                'status' => 'En cours',
                'popularity' => 75,
                'release_date' => '2012-01-01',

            ],
            [
                'type_id' => 1,
                'title' => 'The Promised Neverland',
                'image' => '/img/mangas/tpn/volume_1.jpg',
                'author' => 'Kaiu Shirai',
                'editor' => 'Kazé / Crunchyroll',
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l’orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s’épanouissent sous l’attention pleine de tendresse de « Maman »,qu’ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l’abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s’échapper, c’est une question de vie ou de mort !",
                'status' => 'Terminé',
                'popularity' => 71,
                'release_date' => '2016-01-01',
            ],
            [
                'type_id' => 1,
                'title' => 'Tokyo Revengers',
                'image' => '/img/mangas/TokyoRevengers/volume_1.jpg',
                'author' => 'Ken Wakui',
                'editor' => 'Glénat',
                'synopsis'=>"Alors que Takemichi, 26 ans, fait le bilan de sa vie ratée, entre petits boulots, appartement miteux et désert affectif, il apprend qu'Hinata, la seule personne qu'il ait jamais aimée, s'est fait assassiner lors d'un règlement de comptes entre les membres du gang Tokyo Manji-Kai. Choqué, il a un accident et se retrouve projeté douze ans en arrière. Il décide de tout faire pour empêcher le meurtre.",
                'status' => 'En cours',
                'popularity' => 70,
                'release_date' => '2017-01-01',
            ],
            [
                'type_id' => 3,
                'title' => 'Nana',
                'image' => '/img/mangas/Nana/volume_1.jpg',
                'author' => 'Ai Yazawa',
                'editor' => 'Delcourt',
                'synopsis'=> "La première est rêveuse, rigolote et sensible, mais « coeur d´artichaut », un brin capricieuse et loin d´être indépendante. La seconde est plus mature, déterminée, un peu mystérieuse mais peut être d´une froideur qui glace le dos. Toutes deux s´appellent « Nana », ont un attrait pour l´art et ont vécu en province. Toutes deux vont connaître l´Amour et décider de partir pour Tokyo.

                Ai Yazawa nous offre ici deux histoires parallèles et nous fait plonger dans la vie de deux jeunes Japonaises modernes. Elle nous permet ainsi de découvrir les préoccupations des jeunes Japonais moyens, mais surtout de nous rendre compte que celles-ci sont finalement proches des nôtres. Les lecteurs se plairont à reconnaître des situations et des traits de caractères qui leurs sont familiers ; ils se retrouveront dans les personnages ou auront l´impression d´y voir leurs amis…

                Ce shôjo manga, avec ses personnages « lookés » et sympathiques, saura vous charmer par sa fraîcheur, vous amuser par ses dialogues dynamiques et vous toucher par son humanité.",
                'status' => 'En cours',
                'popularity' => 60,
                'release_date' => '2000-01-01',
            ],
            [
                'type_id' => 3,
                'title' => 'Sailor Moon',
                'image' => '/img/mangas/SailorMoon/volume_1.jpg',
                'author' => 'Nanao Takeuchi',
                'editor' => 'Pika',
                'synopsis' =>"Usagi est une jeune fille de 14 ans comme tant d'autres : elle aime dormir, jouer aux jeux vidéo, elle pleure pour un oui ou pour un non et elle ne se passionne pas pour ses études. Mais un beau jour, elle croise le chemin de Luna, un chat doué de parole qui va la transformer en une jolie justicière : Sailor Moon ! La voilà investie de plusieurs missions : elle doit identifier ses alliées, retrouver le légendaire Cristal d'Argent et protéger une certaine princesse… tout en luttant contre de mystérieux ennemis qui sont eux aussi à la recherche du fabuleux cristal aux pouvoirs fantastiques !",
                'status' => 'Terminé',
                'popularity' => 59,
                'release_date' => '1991-01-01',
            ],
            [
                'type_id' => 3,
                'title' => 'Fruits Basket',
                'image' => '/img/mangas/FruitsBasket/volume_1.jpg',
                'author' => 'Natsuki Takaya',
                'editor' => 'Delcourt',
                'synopsis'=>"Après la mort de sa mère, Tohru Honda, une jeune lycéenne, vit avec son grand-père. Alors que ce dernier doit faire des travaux dans sa maison, il demande à Tohru de se loger chez une de ses amies. Ne voulant déranger personne, la jeune fille préfère s'installer sous une tente dans un bois. Un jour qu'elle se dirige vers son école, elle rencontre Shigure et Yuki Soma. Après quelques péripéties, Tohru se retrouve recueillie par Shigure et Yuki et découvre qu'ils sont possédés par les douze animaux du zodiaque chinois et que, dans certaines circonstances, ils se transforment en la forme de l'animal qui les possède. Jour après jour, elle fait la rencontre d'autres membres de la famille Soma, également possédés.",
                'status' => 'En cours',
                'popularity' => 58,
                'release_date' => '1999-01-01',
            ]
        ]);
    }
}
