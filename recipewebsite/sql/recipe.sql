-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 09:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `steps` text NOT NULL,
  `mainimg` varchar(100) NOT NULL,
  `allimg` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `username`, `title`, `description`, `ingredients`, `steps`, `mainimg`, `allimg`, `datetime`) VALUES
(18, 'admin', 'Nalli Ka Salan', 'Hyderbadi Nalli ka salan is a traditional dish prepared on special occasions. It is a spicy dish served with Rice and Roti. The Nalli pieces are cooked with spices and to thicken the gravy they add coconut paste which gives the texture to the gravy.', '250 gms Lamb Shanks100 gram Dry Coconut/Copra10 Dry Red Chillies3 nos Mace1 tsp Fennel Seeds1 nos Cinnamon Stick4 Cloves3 Green Cardamom3 Curry Leaves1 Big Sliced Onion1/2 cup Tomato Puree2 tbsp Cooking Oil1 tsp Ginger Garlic Paste2 tbsp Curd', 'How to Make Nalli Ka Salan\r\n1.For dry powder- Dry red chilli, mace, Fennel Seeds, Cinnamon, Cardamom, Clove, Curry leaves and Dry Copra. Dry Roast and make it into a fine powder and lastly keep it aside,2.Clean the Lamb Shanks and keep aside.3.Take a pan, add oil and saute onion until golden brown then add ginger-garlic paste.4.Add tomato puree. Add the dry roast powder, turmeric powder and stir well.5.Add lamb Shanks then add hot water and bring it to boil.6.Now, add curd and cook the shanks well.7.Once shanks are cooked, take the shanks out of the gravy and keep aside.8.Now strain the gravy finely. Then add back the shanks and cook for some time.9.Place it in a bowl and garnish it with juliennes of ginger and chopped coriander', 'ssss.jpg', '', '2022-01-05 01:25:03'),
(19, 'admin', 'Paneer Sandwich', 'Paneer Sandwich is a healthy and filling meal option. It is a great vegetarian sandwich. It is loaded with vegetables. I have used green chutney and Indian spices to flavour it. Alternatively, you can add oregano, basil and other mixed herbs.', 'French Loaf â€“ 1 loaf\r\nPaneer â€“ 200 gms (crumbled)\r\nLettuce â€“ 1-2 cups (shredded)\r\nSalt, Amchoor Powder, Cumin Powder, Red Chili Powder, Chaat Masala & Pepper â€“ to taste\r\nGreen chutney â€“ 2 tbsp\r\nOnion â€“ 1 (sliced thinly)\r\nCapsicum â€“ Â½ (sliced)\r\nTomato â€“ 1 (sliced)\r\nCucumber â€“ 1 (sliced)\r\nOlive Oil â€“ 1 tbsp', 'Cut the French loaf lengthwise carefully with a bread knife. Scoop out some of the bread in the middle to add the stuffing. You can use it for making bread crumbs.\r\nTake the crumbled paneer in a bowl. Mix salt, pepper, red chili powder, cumin powder, chaat masala and amchoor powder (dry mango powder) as per your taste. Keep this aside. If you want to add an extra punch, mix in 1 tbsp of some Indian pickle with this. Make this paneer mix very flavourful.\r\nOn the bottom part of the loaf, spread the green chutney. On top of this add the crumbled paneer.\r\nDrizzle some olive oil on top. Sprinkle some chaat masala and pepper on top.\r\nNow add the sliced onion, sliced tomato, cucumber and shredded lettuce on top.\r\nFinally place the upper half of the loaf and press together.\r\nYou can wrap the whole sandwich in plastic wrap and refrigerate for an hour before serving. This gives a chance for the flavors to blend as well as the sandwich to hold its shape. Slice and enjoy.\r\n', 'Paneer-Sandwich-M.jpg', '', '2022-01-05 01:38:04'),
(20, 'admin', 'Peanut Chikki Recipe', 'Chikki is a traditional Indian sweet candy like brittle made with jaggery, nuts and seeds. Various roasted crunchy ingredients like peanuts, almonds, cashews, sesame seeds, puffed rice, roasted chana dal and dried coconut are used to make a chikki. There are many varieties of chikki made and every variety is named after the ingredient used.', '1 cup peanuts â€“ level the cup\r\nâ–¢140 to 150 grams jaggery (Â¾ cup + 2 tbsp)\r\nâ–¢1 tablespoon water\r\nâ–¢1 teaspoon ghee or coconut oil', 'Grate the jaggery and add to a heavy bottom pan. Pour just 1 tbsp water.\r\nâ–¢\r\nBegin to dissolve on a low flame.\r\nâ–¢\r\nWhen it dissolves completely, if you find some impurities, then pass it through a coffee filter.\r\nâ–¢\r\nIf needed you can also pour 1 more tbsp water.\r\nâ–¢\r\nAdd ghee and mix.\r\nâ–¢\r\nBoil the jaggery syrup until it reaches a hard ball brittle consistency.\r\nâ–¢\r\nTo know the exact stage please refer to the pictures in the step by step section below.\r\nâ–¢\r\nLower the flame completely.\r\nâ–¢\r\nTo check hard ball brittle consistency, drop little jaggery syrup to the bowl of water.\r\nâ–¢\r\nIt must become hard immediately.\r\nâ–¢\r\nRemove and break it. The jaggery piece must break to pieces without getting stringy.\r\nâ–¢\r\nThe broken pieces must be like candy or brittle and not soft. This is the right consistency.\r\nâ–¢\r\nIf you cook past this stage you will have broken pieces of chikki or burnt jaggery. So turn off.\r\nâ–¢\r\nAdd the peanuts and mix well.\r\nâ–¢\r\nQuickly pour this to the steel plate. With the help of a spatula, shape to a rectangle.\r\nâ–¢\r\nRoll the mixture with the rolling pin evenly.\r\nâ–¢\r\nWithin a minute it will set. so you must be fast. Cut to pieces, when it is still slightly hot.\r\nâ–¢\r\nCool completely and break the peanut chikki to pieces. Store in a air tight jar.', 'peanut-chikki.jpg', '', '2022-01-05 01:40:48'),
(21, 'admin', 'Badam Halwa', 'Badam halwa, as said earlier, is healthy, tasty and mouth-watering and is also easy to cook. Though it takes time to cook, it is easy, as nothing can go wrong in this recipe. All you need to do is to make it in a heavy bottomed non stick pan. Badam halwa can be prepared on any festive occasion like Diwali, Durga puja or even Iftaar. Badam or almonds is a nut, that though is high in calories has numerous nutritive benefits. ', 'Almonds - 1 cup (around 80 almonds)\r\nMilk - 3-4 tbsp\r\nWater - 1/4 cup\r\nGhee - 3 tbsp\r\nSugar - 1 cup (or as needed)\r\nSaffron - a pinch\r\nKesari Powder/ Yellow food colour - a pinch', 'Soak the almonds in hot water for 2 hours and peel the skin off the almonds. To make it faster, boil the almonds with the water for 15-20 minutes and peel them or use store bought peeled almonds.\r\nGrind the almonds in a blender or mixie along with the milk to make a paste. Add very little milk just to help the mixie moving.\r\nHeat the sugar with 1/4 cup of water in a heavy bottomed pan. Bring it to boil to make a simple syrup.(Note:- It is best to use a non stick pan to prevent sticking at the bottom.)\r\nAdd the milk-almond paste and keep stirring constantly to prevent it from getting burnt at the bottom. It will thicken very quickly.\r\nAdd saffron strands and food color while mixing it. When the mixture cooks, there can be lot of hot splattering, so keep a lid handy.\r\nOnce it thickens, keep adding ghee little by little (1 tsp at a time) and keep stirring continuously. When the splattering reduces, it is an indication that the mixture is almost cooked.\r\nContinue mixing until the halwa no longer sticks to the pan and forms a single mass. It starts shining with the ghee separating out as tiny droplets. (The perfect Halwa consistency!!!)\r\nGarnish with fresh nuts.Almond halwa is ready to be served.', 'badam halwa M.jpg', '', '2022-01-05 01:43:10'),
(22, 'admin', 'Rasgulla', 'Rasagulla, as soon as one hears this word oneâ€™s tongue drools. This sweet is regarded as an identity marker of the Bengalies. Although Bengalies claim rasagulla to be their own, its origin was in Odisha a sweet prepared for ages and ages. In mid 19th century many brahman cooks from Odisha came to Bengal and brought varieties of recipes including rasagullas.', 'Milk - 1/2 litre\r\nLemon Juice - 3 tblsp\r\nAll Purpose Flour - 1 tsp\r\nWater - 2.5 cups\r\nSugar - 1 cup\r\nRose water - 1 tsp', 'Bring the milk to a boil in a milk cooker or in a heavy bottomed pan.\r\nWhen the milk is boiling add the lemon juice little by little till the milk curdles. (i.e paneer separates from the pale coloured whey.)\r\nSwitch off the stove and drain this using a clean kitchen cloth.\r\nSqueeze out excess water with your hands.\r\nDust a clean surface with the all purpose flour and knead the freshly made paneer. Applying pressure and knead for about 5 minutes till it forms a cohesive mass. It will be very smooth dough only after kneading.\r\nCombine the sugar and water in a wide pan or a pressure cooker. Let this come to a boil while you make the balls.\r\nMake small marble sized balls with the paneer dough.\r\nRoll each ball applying some pressure with your palms so that there aren\'t any cracks. (A smooth ball is very important for good rasgullas.)\r\nAdd the balls to the boiling sugar syrup and cook for about 20 minutes. If you are using a pressure cooker, cook for 2 whistles.\r\nSwitch off and add the rose water. The balls would have doubled in volume and become spongy.\r\nRefrigerate for few hours and serve chilled.\r\n', 'Rasgulla M.jpg', '', '2022-01-05 01:48:00'),
(23, 'admin', 'Gulab Jamun Recipe', 'Gulab jamun are soft delicious berry sized balls made with milk solids, flour & a leavening agent. These are soaked in rose flavored sugar syrup & enjoyed. The word â€œGulabâ€ translates to rose in Hindi & â€œjamunâ€ to berry. So gulab jamun are berry sized balls dunked in rose flavored sugar syrup.', '1 cup milk powder\r\nâ–¢5 tbsp all-purpose flour (maida)\r\nâ–¢1 tsp ghee or oil\r\nâ–¢1 tbsp ghee or oil for greasing\r\nâ–¢2 to 4 tbsp milk (use more as needed)\r\nâ–¢1 tbsp curd (yogurt or Â¾ tbsp lemon juice)\r\nâ–¢1 large pinch Baking soda or 1/8 th tsp\r\nâ–¢Ghee or oil for deep frying\r\nâ–¢1 tsp pistachios chopped', 'Mix together water, sugar and crushed cardamoms in a pot. \r\nâ–¢\r\nBoil the syrup until it turns slightly sticky.\r\nâ–¢\r\nTurn off the stove before it goes to a 1 string consistency. \r\nâ–¢\r\nIf it reaches a 1 string consistency, then add 2 tbsp of water and mix.\r\nâ–¢\r\nAdd rose water and mix. Set aside to keep it hot.\r\nMaking Jamun Balls\r\nâ–¢\r\nFluff up the flour in the jar with a fork and then measure correctly.\r\nâ–¢\r\nMix together flour, milk powder and soda in a bowl. Either sieve it or mix uniformly.\r\nâ–¢\r\nAdd ghee to it.  Mix well. \r\nâ–¢\r\nIn a small bowl, mix together lemon juice or yogurt and 2 tbsp milk. \r\nâ–¢\r\nPour 1.5 tbsp of this to the flour mixture. \r\nâ–¢\r\nBegin to bring the flour together to make a dough.\r\nâ–¢\r\nIf the dough is too dry, add little more milk & curd until you get a smooth dough. Do not add a lot. Use only as needed. \r\nâ–¢\r\nThe dough turns sticky. Grease your fingers and make a ball.\r\nâ–¢\r\nThe dough must not be soggy. It must hold the shape well and should be smooth without any cracks.\r\nâ–¢\r\nDivide to 14 to 18 equal sized portions. Grease your hands and roll to smooth balls.\r\nâ–¢\r\nThey must be smooth without any cracks or lines otherwise you will find many cracks on the gulab jamuns. Keep them covered.', 'gulab-jamun.jpg', '', '2022-01-05 01:50:19'),
(24, 'admin', 'Carrot Halwa', 'Gajar ka Halwa was first introduced during the mughal period and the name originates from Arabic word â€œHalwaâ€, that means sweet. And it is made from Gajar or carrot, so the name Gajar ka halwa. Carrot halwa is made predominantly in the winter season maybe because carrots are fresher and more abundantly available. ', 'Carrots - 2 cups (app. 4 carrots)\r\nMilk - 2 cups\r\nSugar - 1 cup\r\nGhee - 2 tbsp\r\nNuts & Raisins - 1/4 cup (Almonds &/ Cashews)\r\nCardamon - 2 (crushed or use 1/4 tsp cardamom powder)', 'Wash, peel the carrots and grate them.\r\nHeat ghee in a small pan, roast the nuts and raisins in it.\r\nHeat milk in another heavy bottomed pan and add the grated carrot to it.\r\nCover partially and cook it on medium flame. Stir occasionally to avoid sticking to the bottom.\r\nAfter about 15-20 minutes, when all the milk is absorbed, add required sugar.\r\nAfter about 10 minutes the oil starts getting separated from the halwa. At this stage add cardamom powder, fried nuts and raisins and 1 tbsp of ghee.\r\nMix for another minute and switch off.', 'Carrot-Halwa-M2.jpg', '', '2022-01-05 01:52:28'),
(25, 'admin', 'Jalebi recipe', 'Jalebi is a spiral shaped crisp & juicy sweet made with all-purpose flour, gram flour and sugar syrup. Also known as jilapi, jilipi & zalebia, this is made by first preparing a batter which is later fermented to acquire a unique fermented flavor. The batter is then poured to spirals or concentric circles in the hot oil.', 'For jalebi\r\nâ–¢1 cup all-purpose flour (organic maida) 125 grams\r\nâ–¢2 tablespoons corn flour (or besan if fermenting batter) (16 grams)\r\nâ–¢1/8 teaspoon turmeric or use natural food color\r\nâ–¢Â½ cup curd (plain yogurt) (or water if fermenting batter) (120 ml)\r\nâ–¢Â½ cup water (more if needed) (120 ml)\r\nâ–¢Â½ teaspoon baking soda (or 1 large pinch for fermented batter)\r\nâ–¢1 teaspoon lemon juice\r\nâ–¢oil or ghee as needed\r\nFor sugar syrup\r\nâ–¢1 cup sugar (use organic) (200 grams)\r\nâ–¢Â½ to Â¾ cup water (I used Â½ + 2 tbsps) (120 ml to 180 ml)\r\nâ–¢1 pinch saffron or kesar optional\r\nâ–¢Â¼ teaspoon cardamom powder or elaichi powder\r\nâ–¢1 teaspoon lemon juice', 'How to make jalebi\r\nâ–¢\r\nHeat ghee or oil on a medium heat to fry jalebis.\r\nâ–¢\r\nIf using oil, then add 1 to 2 tbsp ghee to the oil. This enhances the flavor.\r\nâ–¢\r\nPour 1 tsp lemon juice to the batter & mix. Skip the lemon juice if you have fermented the batter.\r\nâ–¢\r\nAdd soda and mix gently just until combined.\r\nâ–¢\r\nCheck batter consistency: The prepared batter must be smooth free flowing and thick. Spoon just 2 to 3 tbsp of batter to the sauce bottle to check if the consistency is right.\r\nâ–¢\r\nNext check if the oil is hot enough by dropping a small portion of the batter. It has to come up immediately without browning.\r\nâ–¢\r\nNow squeeze the bottle gently and move in circular motion to get spiral. If you are getting very  thick jalebi, then the batter is thick. Next if you are getting very thin flat jalebis the batter is thin. \r\nâ–¢\r\nTo fix thick batter, add a tbsp or more water. Next to fix thin batter, add a tbsp of maida (all purpose flour). Take a look at the pic in the FAQ section to fix the batter.\r\nâ–¢\r\nMix the batter well. Spoon it to the bottle.\r\nFrying jalebi\r\nâ–¢\r\nEnsure oil is hot and the flame set to medium high heat.\r\nâ–¢\r\nSqueeze in the batter gently in circular motions starting from the center moving outside.\r\nâ–¢\r\nYou can also do it the other way.  You will get properly shaped ones after making a few.\r\nâ–¢\r\nWhile the jalebi is getting fried, check the syrup. It must be slightly hot to warm when the jalebi is dipped into it. If not heat up a bit.\r\nâ–¢\r\nThe last 1 minute, turn the flame to low and fry the jalebi. This helps to make them extra crisp.\r\nâ–¢\r\nWhen the jalebi is done it turns crisp. Remove it with a skewer and add to the warm sugar syrup directly.\r\nâ–¢\r\nAllow to rest for 2 mins. Remove to a plate. Continue to make more jalebis.\r\nâ–¢\r\nServe jalebi hot.', 'jalebi.jpg', '', '2022-01-05 01:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `datetime`) VALUES
(4, 'admin', 'utkarsh.verma9598@gmail.com', '$2y$10$vpaHu9F4gUmZwai5p8cfB.rtyXRbE.8B.uqlqWuJq9ZiRY42NCyi2', '2022-01-03 02:18:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
