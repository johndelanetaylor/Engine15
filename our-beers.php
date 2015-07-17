<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Our Beers'; ?>
<?php include("verification.php");  ?>
    
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
<section class="beers subnav black">
    <div class="container">
        <div class="row">
            <div class="twelve columns subnav-links">
                <ul>
                    <li><a>All</a></li> |
                    <li><a>Year-round</a></li> |
                    <li><a>Seasonal</a></li> |
                    <li><a>Limited</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
    
<!-- Our Beers -->
<section class="beers sm-pad">
    <div class="container">
        <div class="row">
            
            <!-- Nut Sack Brown -->
            <div class="beer" data-type="year-round">
                <img class="thumb" src="img/beer/1.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/1-full.jpg" />
                        <div class="text">
                            <span class="title">NUT SACK DOUBLE BROWN ALE</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Year-Round</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>
            
            <!-- Old Battle Axe IPA -->
            <div class="beer" data-type="limited">
                <img src="img/beer/2.jpg" />
            </div>
            
            <!-- 904 Weissguy Wheat Ale -->
            <div class="beer" data-type="year-round">
                <img src="img/beer/3.jpg" />
            </div>
            
            <!-- Route 90 Pale Ale -->
            <div class="beer" data-type="limited">
                <img src="img/beer/4.jpg" />
            </div>
            
            <!-- J'ville Lager Beer -->
            <div class="beer" data-type="seasonal">
                <img src="img/beer/5.jpg" />
            </div>
            
            <!-- Doolittle Saison Ale -->
            <div class="beer" data-type="seasonal">
                <img src="img/beer/6.jpg" />
            </div>
            
        </div>
    </div>
</section>
    
<!-- Find Our Beer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/beer-finder.php"); ?>
    
<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>