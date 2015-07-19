<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Home'; ?>
<?php include("verification.php");  ?>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body id="home">
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Main Events
<section class="events"></section> -->

<!-- Slider Placeholder -->
<section class="cover" style="position: relative; background-image: url('img/slide-1.jpg');">
    <div class="events">
        <div class="box dark">
            <img class="logo" src="/img/events-logo.png" />
            <div id="empty">There are no upcoming events</div>
        </div>
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

</body>
</html>