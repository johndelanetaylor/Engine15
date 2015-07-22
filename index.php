<?php $pageTitle = 'Home'; ?>
<?php include("verification.php");  ?>

<!DOCTYPE html>
<html lang='en'>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body id="home">
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Slider -->
<section class="slider">
    <div class="events">
        <div class="box dark">
            <img class="logo" src="/img/events-logo.png" />
            <div id="empty">There are no upcoming events</div>
        </div>
    </div>
    <div class="bxslider">
        <div class="slide"><img src="img/slide-1.jpg"></div>
        <div class="slide"><img src="img/slide-2.jpg"></div>
        <div class="slide"><img src="img/slide-3.jpg"></div>
        <div class="slide"><img src="img/slide-4.jpg"></div>
    </div>
</section>
    
<!-- Locations -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/locations.php"); ?>

<!-- Social -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/social.php"); ?>

<!-- Find Our Beer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/beer-finder.php"); ?>

<!-- Footer --> 
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>
    
<!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>

</body>
</html>