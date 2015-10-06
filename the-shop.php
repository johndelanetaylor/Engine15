<?php $pageTitle = 'The Shop'; ?>
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
<section class="cover" style="background-image: url('img/cover/the-shop.jpg');"></section>

<section class="lg-pad certificate">
    <div class="container">
        <div class="row">
            <div class="six columns">
                <h1>Engine 15 Brewing Co.</h1>
                <h2>Gift Certificate</h2>
                <p>Voted best Pub and Brewpub in Jacksonville by Folio Weekly readers poll in 2011 &amp; 2014. At Engine 15 Brewing Co. you'll find a friendly atmosphere where you can eat a tasty meal and enjoy great American craft beer, including our flagship beers and in-house seasonals!</p>
                <p>Engine 15 Gift Cards make the perfect gift for any occasion! Purchase one online today and treat a friend, family member or business associate with the gift of great food and great beer!</p>
            </div>
            <div class="six columns center">
                <img src="/img/gift-card.png" />
                <a href="http://onelink.quickgifts.com/merchant/engine-15-brewing-company/" target="_blank"><button>Checkout</button></a>
            </div>
        </div>
    </div>
</section>

<section class="merch lg-pad">
    <div class="container">
		<div class="row">
			<div class="twelve columns">
				<h1>Merchandise</h1>
				<h2>Available at the Brewpub</h2>
			</div>
		</div>
        <div class="row">
            <div class="one-third column">
				<img src="/img/merch/bottle-key.jpg" />
                <h3>BRANDED BOTTLE OPENERS $5.00</h3>
            </div>
			<div class="one-third column">
				<img src="/img/merch/glass.jpg" />
				<h3>ENGINE 15 (16 OZ) BEER GLASS $5.00</h3>
			</div>
			<div class="one-third column">
				<img src="/img/merch/glasses.jpg" />
				<h3>BRANDED WEISS/TULIP GLASS $5.00</h3>
			</div>
        </div>
		<div class="row">
			<div class="one-third column">
				<img src="/img/merch/hats.jpg" />
				<h3>HATS $15.00</h3>
			</div>
			<div class="one-third column">
				<img src="/img/merch/hot-sauces.jpg" />
				<h3>ENGINE 15 HOT SAUCE $3.50</h3>
			</div>
			<div class="one-third column">
				<img src="/img/merch/tshirts.jpg" />
				<h3>T-SHIRTS $15.00/MEN | $20.00/WOMEN</h3>
			</div>
		</div>
    </div>
</section>

<!-- Find Our Beer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/beer-finder.php"); ?>

<!-- Social -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/social.php"); ?>

<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>
