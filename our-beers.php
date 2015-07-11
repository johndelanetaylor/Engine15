<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Our Beers'; ?>
    
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>
	
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/nav.php"); ?>
    
<!-- Slider Placeholder
<div style="text-align: center; width: 100%; margin: 20px 0 40px;">
    <img src="img/slider.jpg" style="margin:auto; max-width: 100%;" />
</div> -->

<!-- Cover Image -->
<section class="cover" style="background-image: url('img/cover/our-beer.jpg');"></section>
    
<!-- Beer Subnav -->
<section class="subnav black">
    <div class="container">
        <div class="row">
            <div class="twelve columns subnav-links">
                <ul>
                    <li><a href="#">Year-round</a></li> |
                    <li><a href="#">Seasonal</a></li> |
                    <li><a href="#">Limited</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
    
<!-- Our Beers -->
<section class="beers sm-pad">
    <div class="container">
        <div class="row">
            <div class="beer">
                <img src="img/beer/1.jpg" />
            </div>
            <div class="beer">
                <img src="img/beer/2.jpg" />
            </div>
            <div class="beer">
                <img src="img/beer/3.jpg" />
            </div>
            <div class="beer">
                <img src="img/beer/4.jpg" />
            </div>
            <div class="beer">
                <img src="img/beer/5.jpg" />
            </div>
            <div class="beer">
                <img src="img/beer/6.jpg" />
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