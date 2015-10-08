<?php $pageTitle = 'Jax Beach Brewpub'; ?>
<?php include("verification.php");  ?>

<!DOCTYPE html>
<html lang='en'>

<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>

<!-- Side Nav -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/side-nav.php"); ?>

<!-- Main Nav -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>

<!-- Cover Image -->
<section class="cover" style="background-image: url('/img/cover/jacksonville-beach-brewpub.jpg');"></section>

<!-- Location Subnav -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/subnav.php"); ?>

<!-- Jacksonville Beach Brewery -->
<section id="about" class="info lg-pad">
    <div class="container">
        <div class="row">
            <div class="five columns jax-beach center">
                <h1>Jacksonville</h1>
                <h2>Beach Brewpub</h2>
                <button><a href="https://www.google.com/maps/place/Engine+15+Brewing+Co./@30.2875967,-81.4086461,17z/data=!3m1!4b1!4m2!3m1!1s0x88e4499f19651fdf:0xc3fe1b20bd801a52" target="_blank">MAP IT</a></button>
            </div>
            <div class="seven columns">
                <p>Our original location sits in the heart of Jacksonville Beach. We craft a selection of ever rotating original beers on our 5 barrel brewhouse on site as well as offer our core beers brewed at our production brewery downtown. Our brewpub offers our gusts the chance to experience the many beers Engine 15 has to offer while enjoying a bite to eat from our pub menu. We boast 50 tap lines with many of them pouring Engine 15 creations along with a constantly changing selection of guest beers from around the world. Check out the calendar of events and menus for this location and come join the fun!</p>
                <!--<p>Engine 15 Brewing Co. operates 3 brewhouses in two locations. At our Jacksonville Beach Brewpub, we brew on our steam fired 5 bbl Brewhaus. It was built in the 1990’s in Canada by Price-Shoenstrom. The brewhouse came to us from a brewery in Ohio. Soon after receiving it, we quickly modified it to fit our application and style of brewing, and put it into production. We regularly double batch in our 10 bbl fermenters. We dedicate our efforts at the brewpub to one-offs and brewpub only offerings.</p>-->
                <div class="details">
                    <p><strong>Hours&nbsp;</strong> Monday 4:30PM-12:00AM | Tuesday-Sunday 11:00AM-12:00AM</p>
                    <p><strong>Phone&nbsp;</strong> 904-249-BEER</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Whats On Tap -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/tap.php"); ?>

<!-- Upcoming Events -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/events.php"); ?>

<!-- Our Menu - Jax Beach Brewpub -->
<section id="menu" class="food-menu menu lg-pad">
    <div class="container">
        <div class="row">
            <div class="twelve columns center">
                <h1>Our Menu</h1>
                <a href="/img/Engine-15-Menu.pdf"><button>Download Our Menu</button></a>
            </div>
        </div>
        <div class="row">
            <div class="four columns description">
                <h3>Simple Snacks</h3>
                    <ul>
                        <li>Snack-o-nuts</li>
                        <li class="right">$4.00</li>
                    </ul>
                    <ul>
                        <li>Mixed Olive &amp; Feta</li>
                        <li class="right">$5.50</li>
                    </ul>
                    <ul>
                        <li>Pretzel</li>
                        <li class="right">$3.50</li>
                    </ul>
                <h3>Soups &amp; Salads</h3>
                    <ul>
                        <li>House Made Tomato Soup &amp; Grilled Cheese Croutons</li>
                        <li class="right">$5.00</li>
                    </ul>
                    <ul>
                        <li>Engine 15 Chili</li>
                        <li class="right">$5.00</li>
                    </ul>
                    <ul>
                        <li>House Salad</li>
                        <li class="right">$4.00</li>
                    </ul>
                    <ul>
                        <li>Engine 15 Greek Salad</li>
                        <li class="right">$8.00</li>
                    </ul>
                <h3>Small Plates</h3>
                    <ul>
                        <li>Chips &amp; Beer Queso</li>
                        <li class="right">$5.00</li>
                    </ul>
                    <ul>
                        <li>Empanadas</li>
                        <li class="right">$3.50</li>
                    </ul>
                    <ul>
                        <li>Loaded Down Chili Nachos</li>
                        <li class="right">$9.00</li>
                    </ul>
                    <ul>
                        <li>Pigs In Blankets</li>
                        <li class="right">$6.00</li>
                    </ul>
                <h3>Flatbreads</h3>
                    <ul>
                        <li>Smoked Tomato</li>
                        <li class="right">$7.00</li>
                    </ul>
                    <ul>
                        <li>Smoked Chicken</li>
                        <li class="right">$8.50</li>
                    </ul>
                    <ul>
                        <li>Little Piggy</li>
                        <li class="right">$8.50</li>
                    </ul>
               <h3>Deserts</h3>
                    <ul>
                        <li>Snicker Dumplings</li>
                        <li class="right">$4.00</li>
                    </ul>
                    <ul>
                        <li>Smore's Empanada</li>
                        <li class="right">$4.00</li>
                    </ul>
                <h3>Beer Flights</h3>
                    <ul>
                        <li><p style="float: left;">Our beer flights are designed to allow you to compare and contrast the flavor profiles of varying styles of beer from all over the world. We pour your choice of four 4oz glasses from our current draft selection.</p></li>
                        <li class="right">$5.00</li>
                    </ul>
            </div>
            <div class="eight columns description">
                <h3>Liquid Lunch</h3>
                    <p>Choose any entree below or mix it up and get two half portions. Just $9 and it comes with a FREE Engine 15 draft beer! Only available from 11am – 3pm.</p>
                    <ul class="list">
                        <li>The B-B-Cuban</li>
                        <li>Gyros</li>
                        <li>The Split Sheboygan</li>
                        <li>Smoked Tomato Flatbread</li>
                        <li>Beer Brats</li>
                        <li>Smoked Chicken Flatbread</li>
                        <li>Smoked Brisket Sandwich</li>
                        <li>Little Piggy Flatbread</li>
                        <li>Frito Pie</li>
                    </ul>
                <h3>Big Plates</h3>
                <p>*Big Plates served with your choice of chips, house made macaroni salad or beans and rice.</p>
                    <ul>
                        <li>The B-B-Cuban</li>
                        <li class="right">$8.50</li>
                        <p>Here is where Cuba &amp; Old Dixie meet. This pressed sandwich is stuffed with slow smoked pulled pork, ham, swiss, mustard and a stacker pickle.</p>
                    </ul>
                    <ul>
                        <li>The Split Sheboygan</li>
                        <li class="right">$8.00</li>
                        <p>Toasted Roll with two split beer brats piled with peppers, onions &amp; swiss cheese.</p>
                    </ul>
                    <ul>
                        <li>Beer Brats</li>
                        <li class="right">$5.00 or 2 for $8.00</li>
                        <p>Classic beer brats simmered in beer &amp; sauerkraut served on a toasted roll. Mustard on the side. Don’t like kraut? Make them chili brats for a $1 more.</p>
                    </ul>
                    <ul>
                        <li>Brisket Beer Dip Sandwich</li>
                        <li class="right">$8.00</li>
                        <p>House smoked brisket topped with peppers, onions and swiss cheese. Served with beer jus for dipping.</p>
                    </ul>
                    <ul>
                        <li>Frito Pie</li>
                        <li class="right">$7.50</li>
                        <p>A Texas tradition! It’s fritos topped with our beer queso then smothered with Engine 15 chili and then topped off with shredded cheese, diced onions &amp; sour cream.</p>
                    </ul>
                    <ul>
                        <li>Gyros</li>
                        <li class="right">$6.00 or 2 for $9.00</li>
                        <p>Lamb and beef gyros with diced tomatoes red onion and mixed greens. Finished with a cool &amp; creamy cucumber yogurt.</p>
                    </ul>
            </div>
        </div>
    </div>
</section>

<!-- Social -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/social.php"); ?>

<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>
