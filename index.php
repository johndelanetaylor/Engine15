<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Home'; ?>
<?php include("verification.php");  ?>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body id="home">
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Slider Placeholder -->
<section class="cover" style="background-image: url('img/slide-1.jpg');"></section>
    
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