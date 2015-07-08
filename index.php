<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Home'; ?>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Slider Placeholder
<div style="text-align: center; width: 100%; margin: 20px 0 40px;">
    <img src="img/slider.jpg" style="margin:auto; max-width: 100%;" />
</div> -->
    
<!-- Slider -->
<!-- <div class="home-slider">
    <div class="slide"><img src="img/slide-1.jpg"></div>
    <div class="slide"><img src="img/slide-2.jpg"></div>
    <div class="slide"><img src="img/slide-3.jpg"></div>
</div>-->
    
<!-- Slider Placeholder -->
<section class="cover">
    <img src="http://placehold.it/1440x560">
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