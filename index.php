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
<div class="home-slider">
    <div class="slide"><img src="img/slide-1.jpg"></div>
    <div class="slide"><img src="img/slide-2.jpg"></div>
    <div class="slide"><img src="img/slide-3.jpg"></div>
</div>
    
<!-- Locations -->
<section>
    <div class="container">
        <div class="row">
            <div class="six columns">
                <h1>Jacksonville</h1>
                <h2>Beach Brewpub</h2>
                <p>1500 Beach Blvd #217<br />
                    Jacksonville Beach, FL 32250<br />
                    555-555-5555<br />
                    Hours of Operation</p>
                <a herf"#">Map It</a>
            </div>
            <div class="six columns">
                <h2>Downtown Brewery</h2>
                <h1>&amp; Biergarten</h1>
                <p>Hang on tight!<br />
                    Our biergarten is coming soon!<br />
                    555-555-5555<br />
                    Hours of Operation</p>
                <a herf"#">Map It</a>
            </div>
        </div>
    </div>
</section>

<!-- Social -->
<section>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h3>Follow</h3><h5>us</h5><h3>Online</h3>
                <a href="#"><img /></a>
                <a href="#"><img /></a>
                <a href="#"><img /></a>
            </div>
        </div>
    </div>
</section>

<!-- Find Our Beer -->
<section>
    <div class="container">
        <div class="row">
            <div class="three columns offset">
            </div>
            <div class="eight columns">
            </div>
            <div class="three columns offset">
            </div>
        </div>
    </div>
</section>

    
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>