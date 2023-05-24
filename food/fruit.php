<?php
  session_start();
  if(!isset($_SESSION['logged-in'] ) || $_SESSION['logged-in'] ==false){
    header("location:login.php");
  }
  else{
    
  }

 
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodyaga</title>
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/fruit.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">FoodYaga</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php" target="_self">Home <i
                                    class="fa-sharp fa-solid fa-house"></i>
                            </a>
                        </li>
                      


                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <?php

?>
    
    <div class="modal_container">
    <div class="modal hidden " id="p-1">
        <h1>Apple</h1>
        <div class="para">
            <p>
            Methods of Preserving Apples <br> 

             1.Storing Apples Store only good-quality apples without any bruising, insect, or disease damage. ... <br>
             2.Freezing Apples Freeze in apple quarters, sliced apples, or applesauce. ...<br> 
             3.Drying Apples With the help of a dehydrator or oven, you can dry apples to make them last longer. ...<br> 
             4.Canning Apples Home canning apples is a great way to preserve them into shelf-stable jars. ...<br> 
             5.Apple Scrap Vinegar ...<br> 
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-2">
        <h1>Banana(Ribes nigrum)</h1>
        <div class="para">
            <p>
            Methods of Preserving Banana.<br>

           1. Line a baking sheet with parchment paper.<br>
           2.Slice your banana (that’s where the banana slicer comes in handy). Or you can just do chunks if you have a powerful blender. <br>I        
           3.Set the bananas on your baking sheet evenly, without letting them touch.<br>
           4.Cover them with some plastic wrap and carefully put them in the freezer. Make sure the sheet is flat so the slices don’t move around.<br>
           5.Freeze for 1 - 2 hours, until solid.<br>
           6.Remove the slices and transfer them to an air-tight container then keep in them in your freezer until you’re ready to use them.<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-3">
        <h1>Kiwi(Actinidia deliciosa)</h1>
        <div class="para">
            <p> Methods of Preserving Kiwi.<br>

             The best way to store whole kiwis depends on the level of ripeness—in general, you can store ripe kiwis in the refrigerator and unripe kiwis on a kitchen counter. If storing an unripe kiwi on a countertop, keep it at room temperature and away from direct sunlight. After a few days, your kiwi will ripen and be ready to enjoy. <br>

             Store kiwifruits that are already ripe in the refrigerator, away from other ethylene-producing fruits, such as apples, avocados, mangoes, pears, and tomatoes. The ethylene gas will speed up the ripening process, causing early spoilage. You can also store kiwi slices in the refrigerator; simply place your cut kiwi in an airtight container or plastic bag and store in the fridge for up to two days.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-4">
        <h1>Grapes(Vitis vinifera)</h1>
        <div class="para">
            <p>  Methods of Preserving Grapes.<br>
                1.If you have a steam juicer or pressure cooker/instant pot, then turning grapes into grape juice will preserve them for the longest duration. <br>
               2. If you’d like to eat your grapes and you have a dehydrator or oven, turning fresh grapes into raisins and/or fruit leather will work well for you. <br>
               3.If all you have is a freezer, then freezing them is a great option!<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-5">
        <h1>Lemon(Citrus × limon)</h1>
        <div class="para">
            <p>
            Methods of Preserving Lemon.<br>
            1.Turn Lemons into Seasoning Lemons are fantastic for creating seasonings, and lemon salt is a huge hit. ...<br>
            2.Preserving Lemons in the Freezer The freezer is our best friend when it comes to preserving foods, like any type of peppers, tomatoes, or pears. ...<br>
            3.Making Marinades and Dressings ...<br>
            4.Making Pickled Lemon Peels ...<br>
            5.Fermenting Lemons ...<br>
            6.Making Lemon Jam ...<br>
            7.Creating Canned Lemon Tea ...<br>
            8.Making Preserved Lemons into a Condiment ...<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-6">
        <h1>Mango(Mangifera indica)</h1>
        <div class="para">
            <p>  Methods of Preserving Mango.<br>
            1) Place the mangoes in a small bowl or jar. This will help keep them from turning into mush or becoming wet.<br>
            2) Put the fruit in a cool place – either on a windowsill or on the refrigerator – for at least 2 weeks. The longer the time, the better.<br>
            3) If you choose to freeze the mangoes, make sure they are frozen solid.<br>

            Use mangoes as is: Just eat them as is or use them in smoothies or baking recipes. Avoid processing them, which will cause the water and juice to separate and make the mangoES sour.
             Freeze them: Frozen mangoes areICLEable for up to six months.thaw them before eating or using them.
            Be sure to cleanse them regularly: Remove all debris, including dirt and mold, with a soft brush before eating or storing the mangoes. This will help remove any bacteria that may have built up over time.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-7">
        <h1>Black currant(Ribes nigrum)</h1>
        <div class="para">
            <p>Methods of Preserving balck currant <br>
            1.Jam is made by boiling the fruit while the added sugar is a strong preservative,<br>
            2 glasses of water 1.5 kg sugar Cooking Wash black currants and cut out the pedicles. Place the ingredients in an enameled pan. Pour them with water and add 700 g of sugar. Stir everything properly. Boil the jam over medium heat for 15 minutes. Then leave it for 8 hours. Next add 800 g of sugar and boil the jam over low heat till done.  
          </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-8">
        <h1>Cashew-Apple(Anacardium occidentale)</h1>
        <div class="para">
            <p>
            Methods of Preserving Cashew-Apple  <br>
            They can be eaten fresh in salads, pressed to make juices, cooked in syrup or made into jams to preserve them. Cashew pulp is the residue of the separation of the nut from the pseudofruit, and cashew bagasse (cashew pomace, cashew apple waste) is the residue of the juice extraction from the pseudofruit.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-9">
        <h1>Blueberry(Cyanococcus)</h1>
        <div class="para">
            <p>
            Methods of Preserving blue berry <br>    
            1. Freeze Them Clean <br>
            2.Freeze Them Dirty<br>
            3.Make a  Blueberry Syrup and    Blueberry Jam<br>
            4.Blueberry Vinegar<br>
            5.Dehydrate Your Berries<br>
            6.. Freeze Drying Your Blueberries<br>

            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-10">
        <h1>coconut(Cocos nucifera)</h1>
        <div class="para">
            <p> Methods of Preserving coconut<br>

            There are several methods of preserving coconut, including drying, freezing, and pickling. Each method has its own advantages and disadvantages. Drying coconut is the easiest method, but it produces a product with a different texture and flavor than fresh coconut. Freezing coconut retains its fresh flavor better than other methods, but it requires more time and effort. Pickling is the most work-intensive method, but it produces the closest taste to fresh coconut.<br>
            One way to preserve coconut is to keep it in the fridge. This will help to keep the coconut fresh for up to two weeks. You can also freeze coconut, and it will last for up to six months.<br>
            Another way to preserve coconut is by drying it. This can be done either in the sun or in an oven. Once the coconut has been dried, it can be stored in an airtight container and will last for several months.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-11">
        <h1>Custard Apple(Annona reticulata)</h1>
        <div class="para">
            <p>Methods of Preserving Custard Apple<br>
            In order to preserve your custard applies I would suggest canning them since you have already frezing it. It does lose it's freshness to an extent, however, the shelf life would last longer. Canning is also a good method as is can use vacuum sealed packaging which restricts air into the packaging which is what causes micro-organism growth an multiplication.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-12">
        <h1>Date(Phoenix dactylifera)</h1>
        <div class="para">
            <p>
            Methods of Preserving Date(Phoenix dactylifera)<br>
            1 Place your dates in an airtight container. Glass or plastic tupperware works well. ...<br>
2 Store semi-dry dates at room temperature. Place the dates in the pantry, or on your kitchen counter. ...<br>
3 Place soft dates in the fridge. ...<br>
4 Eat the dates within a week for the best flavor. ...<br>
5 Store the dates in the fridge for a year. ...<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-13">
        <h1>Guava (Psidium guajava)</h1>
        <div class="para">
            <p> Methods of Preserving guava<br>
                1.Refrigerating Ripe Guava<br>
                2.To store guava, place the guava fruits in a refrigerator for up to five days. And if you want to store for too long, slice the guava and place in sugar syrup before refrigerating. You can store guava this way for one year.<br>
                In this method of preserving guava, you need to wash the guava and pat dry it. Then, place the guava fruit on a clean plate or cutting board.<br>
                Use your favorite peeling knife to peel out the rinds from the fruits. After peeling, cut the fruit into slices.

Prepare a sugar syrup that is made using equal portions of sugars and water. Then, place these slices of guava fruits into the syrup.

Allow them to soak in the sugar syrup very well. Then, place these slices of guava fruits into the syrup.

Transfer the slices of guava into an airtight plastic container or nylon bag. Cover and make sure you leave a small space where a small amount of air can enter into the container.

This small space can help prolong the shelf life of your guava by reducing the freezing time. Place the container in a refrigerator and store for up to a year.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-14">
        <h1>Jackfruit(Artocarpus heterophyllus)</h1>
        <div class="para">
            <p>Methods of Preserving jackfruit<br>
                 
            1 Wash the jackfruit seeds thoroughly. Remove the outer skin from the jackfruit seeds. 2 Dry the jackfruit seeds in shade. 3 Grind the dried jackfruit seeds into fine powder. 4 Store the powder in airtight containers. 5 Use the powder within 3 months. Preserving jackfruit by pickling Jackfruit seeds are preserved by pickling.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-15">
        <h1>Lychee, Litchi(Litchi chinensis)</h1>
        <div class="para">
            <p>   Methods of Preserving Lychee <br>

            1 Choose ripe lychees with bright red skin. Feel a lychee to tell how soft it is. ...<br>
2 Put the lychees into a plastic bag. Place your lychees into a plastic bag or a container that you can leave open. ...<br>
3 Spritz the lychees with water every day to keep them moist. ...<br>
4 Chill the lychees in the fridge for up to 1 week. ...<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-16">
        <h1>Mulberry(Morus)</h1>
        <div class="para">
            <p>  Methods of Preserving Mulberry(Morus)<br>
              1. Freeze Fresh Berries
Every day throughout the harvest season, I gather at least one gallon of berries, so I need to freeze them because I don’t want to can or cook every single day. The easiest way to preserve mulberries is to freeze them to use later.<br>
             2. Ice Cream
If you want a sweet, homemade treat to cool you down this summer, make some mulberry ice cream. When paired with sugar and cream, mulberries have a fantastic combination of tangy yet sweet that our family loves.

Making mulberry ice cream is a great way to preserve mulberries since ice cream stays good in a freezer for many months. <br>
3. Lavender Jam with Honey
If you want to make a different variety of mulberry jam, this recipe looks amazing. Adding lavender to the recipe gives it more of an aromatic property. You have to have fresh lavender for this recipe; dried won’t work as well.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-17">
        <h1>Musk-melon(Cucumis melo)</h1>
        <div class="para">
            <p>

            Methods of Preserving Mmusk melon<br>
Store melons at room temperature for up to 2 days to ripen them. If your melons aren't ripe yet, you can keep them unrefrigerated for up to 2 days. Leave melons uncovered on a counter or tabletop. Alternatively, keep melons in a closed paper bag to accelerate the ripening process.<br>

Buy or make perforated plastic bags to refrigerate melons in. Melons need both moisture and cold to stay fresh, which can be difficult to achieve. The best approach is to refrigerate melons in perforated bags to keep them moist without letting them dry out. Buy perforated plastic bags or make one by poking about 20 small holes in an ordinary bag with a pen or hole punch<br>
Store ripe melons in the fridge for up to a week. Store melons in your fridge for a maximum of 7 days to prevent spoiling. Discard melons if you notice signs of spoiling. These signs may include foul odor and spots of mold<br>

Refrigerate cut melon in an airtight container for up to 3 days. Place cut melon pieces in a resealable, airtight plastic container. Keep it in the fridge for no more than 3 days before discarding it. Ripe, cut melon will start to disintegrate after this time.
You can also put cut melon in airtight zipper-lock bags to refrigerate it.

            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-18">
        <h1>Orange(Citrus reticulata)</h1>
        <div class="para">
            <p>
            Methods of Preserving orange<br>
            1. Freeze the juice and for the peel either zest and preserve or dry slices of peel. The zest can be frozen or dried and used in any dish where you would add a bit of citrus flavour. The peel is great for adding to tea - especially chai. Or in a non-edible use I've added them to homemade fire lighters before too.<br>

2. Boiled whole and frozen for making future orange cakes such as this amazing choc orange one or this almond and orange cake. Or you could make up the cake and freeze it using either recipe or I also love Rhonda's whole orange cake recipe if I don't need a flourless version.<br>

3. Dried orange slices. These are delicious to snack on as is, decorate desserts with or dip in dark chocolate - choose your own adventure. I dried mine using my dehydrator but you could also do so in a very low oven.<br>
4. Orange cordial - another nod to Rhonda here for her adaptable summer cordial info.<br>


            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-19">
        <h1>Papaya (Carica papaya)</h1>
        <div class="para">
            <p> Methods of Preserving papaya<br>
            The efficient and safe papaya preservation method comprises the following steps: (1) harvesting raw materials achieving the harvest standard timely;<br> (2) precooling as quickly as possible;<br> (3) pretreating before storage, and soaking fruits by a pretreatment agent; <br>(4) treating the fruits through thermal treatment by combining with an ethylene inhibitor; <br>(5) packaging the fruits by an environment-friendly preservation bag; <br>(6) storing at appropriate low temperature; <br> (7) managing at the storage period.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-20">
        <h1>Peach (Prunus persica)</h1>
        <div class="para">
            <p>Methods of Preserving peach<br>
            1.Refrigerate cut peaches in an airtight container.<br>
            2.Ripen peaches in a paper bag<br>
            3.Submerge peach slices in sugar syrup<br>
            4.Use ascorbic acid.<br>
            5.Apply lemon juice.<br>
            6.Blanch the peaches and then freeze them<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-21">
        <h1>Pomegranate (Punica granatum)</h1>
        <div class="para">
            <p>Methods of Preserving Pomegranate <br>
            
Storing Fresh Pomegranate Seeds Pomegranate are harvested when ripe; no further ripening is necessary. ...<br>
Removing the Pomegranate Seeds and Pulp Put on an apron and gloves before you begin to remove the seeds and pulp from the pomegranate. ...<br>
Juicing the Seeds ...<br>
Preserving as a Syrup ...<br>
Preserving Pomegranates ...<br>
Freezing Pomegranate Seeds ...<br>
Drying Pomegranate Seeds ...<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-22">
        <h1>Pineapple (Ananas comosus)</h1>
        <div class="para">
            <p>
            Methods of Preserving Pineapple <br>
            
Put the pineapple pieces into a container or bag that seals tightly. Cut pineapple pieces release a lot of sticky juice that you don’t want leaking all through your fridge. Your best storage option is a glass or plastic container with a tight-fitting lid. If you use a zip-close bag, make sure it’s closed completely—and seal it in another zip-close bag just to be sure <br>
Canning Pineapple Pieces Download Article Wash the canning jars and lids with …<br>
Cutting a Pineapple Download Article Cut off the top and bottom of the …<br>

Add a splash of orange juice to the container to reduce browning. Slight browning won’t affect the flavor or quality of the stored pineapple, but it does make it look less appealing. Orange juice contains ascorbic acid, which helps to slow the browning of cut fruit. Just a light splash of OJ should do the job.[2]
Lemon juice is often used to slow the browning of cut fruits, and will work here as well. However, the juice you choose imparts some flavor and aroma to the cut fruit, and orange juice pairs better with pineapple than lemon juice!
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-23">
        <h1>Strawberry (Fragaria x ananassa)</h1>
        <div class="para">
            <p> Methods of Preserving Strawberry  <br>
            Strawberry preserves are among the most popular, and an excellent way to lock in their flavor. A simple strawberry jam can have just three ingredients: Strawberries, sugar, and lemon juice. Keep in mind that strawberries are not naturally high in pectin, so this jam will have a softer set. There are many variations on this, with added pectin, low sugar, and supplemental flavors. Here are a few recipes:<br>
            Dried strawberries are a delicious addition to cereal, yogurt, baked goods and more. A dehydrator is the most recommended tool for the job, though they may also be dried in the oven.<br>
            Dried strawberries are a delicious addition to cereal, yogurt, baked goods and more. A dehydrator is the most recommended tool for the job, though they may also be dried in the oven.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-24">
        <h1>Water-melon (Citrullus lanatus)</h1>
        <div class="para">
            <p> Methods of Preserving water melon<br>
            by making Watermelon Jerky - aka dehydrated watermelon or watermelon taffy is one of my kids' favorites. ...
Watermelon Fruit Leather ...<br>
Watermelon Rind Pickles<br>
Watermelon Jelly<br>
Watermelon Rind Kimchi<br>
Watermelon Ice - cut up in blocks or puree and freeze in cubes for use anytime of the year in drinks, smoothies, etc.<br> we can preserve melon it will remain as it is for long period 
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-25">
        <h1>Berry, Jujube (Ziziphus mauritiana)</h1>
        <div class="para">
            <p> Methods of Preserving Berry<br>
            Hypericum berries are very hardy. If they came to you fresh, you should have no problems. For best results, use a little piece of tissue paper (facial or toilet) soaked in water at the bottom of the stem and wrap it as you would other flowers for a corsage. Keep them misted. Crowning Glory or Finishing Touch is also good to use to keep them fresher, longer. Be sure to keep them in the fridge at 38-40 degrees until you are ready to use them.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-26">
        <h1>Cherry (Prunus avium)</h1>
        <div class="para">
            <p>Methods of Preserving cherry<br>
            When you have a plethora of cherries, there are plenty of ways to preserve them so you can enjoy them for months to come. Try canning cherries to keep a stock in your pantry for pies, desserts, or other baking needs. Make maraschino cherries for a tasty treat or addition to cocktails. You can even easily freeze big batches of cherries to add to smoothies, or to use in recipes later down the road.Canned Cherries
2 pounds (0.91 kg) of cherries, either sour or sweet, stemmed and pitted
4 cups (950 mL) of water
1.5 to 2 cups (300 to 400 grams) of white sugar
Makes about 32 ounces (2 pints) of canned cherries

Maraschino Cherries
1 cup (240 mL) of maraschino liqueur
16 ounces (1 pint) of sour cherries, stemmed and pitted
Makes 16 ounces (1 pint) of maraschino cherries

Frozen Cherries
2 to 3 pounds (0.91 to 1.36 kg) of cherries, stemmed and pitted
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-27">
        <h1>Starfruit (Averrhoa carambola)</h1>
        <div class="para">
            <p> Methods of Preserving Starfruit  <br>
            1) Wash the star fruits thoroughly. ... <br>
2) Cut open the tops of the star fruits. ... <br>
3) Place the star fruits upside down in a bowl filled with water. ... <br>
4) Keep the star fruits in a cool place. ... <br>
5) Don’t wash the star fruits again unless absolutely necessary. ... <br>
6) Once the star fruits are fully dried, wrap them tightly in plastic bags. ... <br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-28">
        <h1>Tamarind (Tamarindus indica)</h1>
        <div class="para">
            <p> Methods of Preserving  Tamarind (Tamarindus indica)<br>
            It can be preserved by using tamarind storage containers. Keep complete pods at room temperature in a cool, dark area. After opening, keep pods in the refrigerator firmly wrapped or capped for at least three months. With a sharp, hefty knife, cut off the quantity you intend to utilize<br>
            At room temperature, they last a maximum of a week depending on how hot the temperature is. The hotter the weather, the faster the tamarind will ripen. To store at room temperature keep the tamarinds on the countertop uncovered if the shells have not been cracked open. The shell will keep the pulp fresh for a couple of days.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-29">
        <h1>Sweet orange(Citrus limetta)</h1>
        <div class="para">
            <p> Methods of Preserving sweet  orange<br>
            1. Freeze the juice and for the peel either zest and preserve or dry slices of peel. The zest can be frozen or dried and used in any dish where you would add a bit of citrus flavour. The peel is great for adding to tea - especially chai. Or in a non-edible use I've added them to homemade fire lighters before too.<br>

2. Boiled whole and frozen for making future orange cakes such as this amazing choc orange one or this almond and orange cake. Or you could make up the cake and freeze it using either recipe or I also love Rhonda's whole orange cake recipe if I don't need a flourless version.<br>

3. Dried orange slices. These are delicious to snack on as is, decorate desserts with or dip in dark chocolate - choose your own adventure. I dried mine using my dehydrator but you could also do so in a very low oven.<br>
4. Orange cordial - another nod to Rhonda here for her adaptable summer cordial info.<br>
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    <div class="modal hidden " id="p-30">
        <h1> Raisins(Raisins (Vinifera))</h1>
        <div class="para">
            <p>  Methods of Preserving Raisins <br>
            Keep it somewhere cool, dark, and safe from breaking. 3. Vacuum Sealer Jars. Because vacuum sealing doesn’t remove all oxygen from the container, it is a safe storage method for storing raisins: you don’t have to worry about botulism poisoning. FoodSaver is the most popular vacuum sealer for jars, but there are other options too.
            To store raisins long term, you can follow several processes. Whether freezing, vacuum sealing, or jarring, there is a method that will suit your raisin volume, schedule, and living situation. With this guide, you will never have to throw away expired raisins again.
            </p>
        </div>
          <button class="close_button">OK</button>
    </div>
    </div>





















    <div class="mainpage">
        <div class="maintitle">
            <h2> Select the Food that you want to preserve🤍🤍 </h2>
        </div>
        <div class="type">
            <h2> 1) Fruits :</h2>
        </div>
        <div class="cardslider" id="clickme">

            <div class="box" id="p-1">
                <div class="img_slider">
                    <img src="../food/images/apple.jpg" alt="apple">
                </div>
                <div class="title" >
                    <h3>Apple(Malus domestica)</h3>
                </div>
            </div>
            <div class="box" id="p-2" >
                <div class="img_slider">
                    <img src="../food/images/banana.jpg" alt="Banana">
                </div>
                <div class="title">
                    <h3>Banana(Ribes nigrum)</h3>
                </div>
            </div>
            <div class="box" id="p-3">
                <div class="img_slider">
                    <img src="../food/images/Kiwi.jpg" alt="Kiwi">
                </div>
                <div class="title">
                    <h3>Kiwi(Actinidia deliciosa)</h3>
                </div>
            </div>
            <div class="box" id="p-4">
                <div class="img_slider">
                    <img src="../food/images/Grapes.jpg" alt="Grapes">
                </div>
                <div class="title">
                    <h3>Grapes(Vitis vinifera)</h3>
                </div>
            </div>
            <div class="box" id="p-5">
                <div class="img_slider">
                    <img src="../food/images/Lemon, Lime.jpg" alt="Lemon">
                </div>
                <div class="title">
                    <h3>Lemon(Citrus × limon)</h3>
                </div>
            </div>
            <div class="box" id="p-6">
                <div class="img_slider">
                    <img src="../food/images/Mango.jpg" alt="Mango">
                </div>
                <div class="title">
                    <h3>Mango(Mangifera indica)</h3>
                </div>
            </div>
        </div>

        <div class="cardslider">

            <div class="box" id="p-7">
                <div class="img_slider">
                    <img src="../food/images/Black Currant.jpg" alt="Black currant">
                </div>
                <div class="title">
                    <h3>Black currant(Ribes nigrum)</h3>
                </div>
            </div>
            <div class="box" id="p-8">
                <div class="img_slider">
                    <img src="../food/images/Cashew-Apple.png" alt="Cashew-Apple">
                </div>
                <div class="title">
                    <h3>Cashew-Apple(Anacardium occidentale)</h3>
                </div>
            </div>
            <div class="box" id="p-9">
                <div class="img_slider">
                    <img src="../food/images/Blueberry.jpg" alt="Blueberry">
                </div>
                <div class="title">
                    <h3>Blueberry(Cyanococcus)</h3>
                </div>
            </div>
            <div class="box" id="p-10">
                <div class="img_slider">
                    <img src="../food/images/coconut.jpeg" alt="coconut">
                </div>
                <div class="title">
                    <h3>coconut(Cocos nucifera)</h3>
                </div>
            </div>
            <div class="box" id="p-11">
                <div class="img_slider">
                    <img src="../food/images/Custard Apple.jpg" alt="Custard apple">
                </div>
                <div class="title">
                    <h3>Custard Apple(Annona reticulata)</h3>
                </div>
            </div>
            <div class="box"  id="p-12" >
                <div class="img_slider">
                    <img src="../food/images/Date.jpg" alt="Date">
                </div>
                <div class="title">
                    <h3>Date(Phoenix dactylifera)</h3>
                </div>
            </div>
        </div>

        <div class="cardslider">

            <div class="box"  id="p-13">
                <div class="img_slider">
                    <img src="../food/images/Guava.jpg" alt="Guava">
                </div>
                <div class="title">
                    <h3>Guava (Psidium guajava)</h3>
                </div>
            </div>
            <div class="box" id="p-14" >
                <div class="img_slider">
                    <img src="../food/images/Jackfruit.jpg" alt="Jackfruit">
                </div>
                <div class="title">
                    <h3>Jackfruit(Artocarpus heterophyllus)</h3>
                </div>
            </div>
            <div class="box" id="p-15">
                <div class="img_slider">
                    <img src="../food/images/Lychee, Litchi.jpg" alt="Lychee">
                </div>
                <div class="title">
                    <h3>Lychee, Litchi(Litchi chinensis)</h3>
                </div>
            </div>
            <div class="box" id="p-16">
                <div class="img_slider">
                    <img src="../food/images/Mulberry.jpg" alt="Mulberry">
                </div>
                <div class="title">
                    <h3>Mulberry(Morus)</h3>
                </div>
            </div>
            <div class="box" id="p-17">
                <div class="img_slider">
                    <img src="../food/images/Musk-melon.jpeg" alt="Musk-melon">
                </div>
                <div class="title">
                    <h3>Musk-melon(Cucumis melo)</h3>
                </div>
            </div>
            <div class="box" id="p-18">
                <div class="img_slider">
                    <img src="../food/images/Orange.jpg" alt="Orange">
                </div>
                <div class="title">
                    <h3>Orange(Citrus reticulata)</h3>
                </div>
            </div>
        </div>


        <div class="cardslider">

            <div class="box" id="p-19">
                <div class="img_slider">
                    <img src="../food/images/Papaya.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Papaya (Carica papaya)</h3>
                </div>
            </div>
            <div class="box" id="p-20">
                <div class="img_slider">
                    <img src="../food/images/Peach.png" alt="apple">
                </div>
                <div class="title">
                    <h3>Peach (Prunus persica)</h3>
                </div>
            </div>
            <div class="box" id="p-21">
                <div class="img_slider">
                    <img src="../food/images/Pomegranate.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Pomegranate (Punica granatum)</h3>
                </div>
            </div>
            <div class="box" id="p-22">
                <div class="img_slider">
                    <img src="../food/images/Pineapple.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Pineapple (Ananas comosus)</h3>
                </div>
            </div>
            <div class="box" id="p-23">
                <div class="img_slider">
                    <img src="../food/images/Strawberry.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Strawberry (Fragaria x ananassa)</h3>
                </div>
            </div>
            <div class="box" id="p-24">
                <div class="img_slider">
                    <img src="../food/images/Water-melon.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Water-melon (Citrullus lanatus)</h3>
                </div>
            </div>
        </div>
        <div class="cardslider">

            <div class="box" id="p-25">
                <div class="img_slider">
                    <img src="../food/images/Berry.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Berry, Jujube (Ziziphus mauritiana)</h3>
                </div>
            </div>
            <div class="box" id="p-26">
                <div class="img_slider">
                    <img src="../food/images/Cherry.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Cherry (Prunus avium)</h3>
                </div>
            </div>
            <div class="box" id="p-27">
                <div class="img_slider">
                    <img src="../food/images/Starfruit.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Starfruit (Averrhoa carambola)</h3>
                </div>
            </div>
            <div class="box" id="p-28">
                <div class="img_slider">
                    <img src="../food/images/Tamarind.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Tamarind (Tamarindus indica)</h3>
                </div>
            </div>
            <div class="box" id="p-29">
                <div class="img_slider">
                    <img src="../food/images/Sweetlime, Sweet orange.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>Sweet orange(Citrus limetta)</h3>
                </div>
            </div>
            <div class="box" id="p-30">
                <div class="img_slider">
                    <img src="../food/images/Raisins.jpg" alt="apple">
                </div>
                <div class="title">
                    <h3>
                        Raisins(Raisins (Vinifera))
                    </h3>
                </div>
            </div>
        </div>


        <div class="btn" id='btn1'> <a href="vegitables.php">
                <button class="bt">Next page </button>
            </a>
        </div>

    </div>




    <script src="../food/fruit.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>