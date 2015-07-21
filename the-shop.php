<?php $pageTitle = 'The Shop'; ?>
<?php include("verification.php");  ?>

<!DOCTYPE html>
<html lang='en'>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Cover Image -->
<section class="cover" style="background-image: url('img/cover/the-shop.jpg');"></section>

<section class="lg-pad certificate">
    <div class="container">
        <div class="row">
            <div class="six columns">
                <h1>Engine 15 Brewing Co.</h1>
                <h2>Gift Certificate</h2>
                <p>Voted best Pub and Brewpub in Jacksonville by Folio Weekly readers poll in 2011 & 2014. At Engine 15 Brewing Co. you'll find a friendly atmosphere where you can eat a tasty meal and enjoy great American craft beer, including our flagship beers and in-house seasonals!</p>
                <p>Engine 15 Gift Cards make the perfect gift for any occasion! Purchase one online today and treat a friend, family member or business associate with the gift of great food and great beer!</p>
            </div>
            <div class="six columns center">
                <img src="/img/gift-card.png" />
                <a href="http://onelink.quickgifts.com/merchant/engine-15-brewing-company/" target="_blank"><button>Checkout</button></a>
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