<?php $pageTitle = 'Our Beers'; ?>
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

<!-- Year Round -->

        <!-- Route 90 Rye Pale Ale -->
            <div class="beer" data-type="year-round">
                <img class="thumb" src="img/beer/route-90-rye.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/route-90-rye.jpg" />
                        <div class="text">
                            <span class="title">Route 90 Rye Pale Ale</span>
                            <span class="description"><b>This amber colored rye beer</b> combines the citrus and floral character of a classic american ipa with the spicy earthy notes of a rye ale. hoppy but not too bitter and just enough spice to give you a little.</span>
                            <ul>
                                <li data-label="SRM">12</li>
                                <li data-label="ABV">6%</li>
                                <li data-label="IBU">60</li>
                                <li data-label="AVAILABLE">Year-Round</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Old Battle Axe IPA -->
            <div class="beer" data-type="year-round">
                <img class="thumb" src="img/beer/old-battle-axe.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/old-battle-axe.jpg" />
                        <div class="text">
                            <span class="title">Old Battle Axe IPA</span>
                            <span class="description"><b>The summit hops</b> lend a pronounced pineapple and citrus character to this american ipa, late additions of northern brewer, glacier and more summit round out the hop profile in this delicious nectar.</span>
                            <ul>
                                <li data-label="SRM">11</li>
                                <li data-label="ABV">6.4%</li>
                                <li data-label="IBU">62</li>
                                <li data-label="AVAILABLE">Year-Round</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- 904 Weissguy Wheat Ale -->
            <div class="beer" data-type="year-round">
                <img class="thumb" src="img/beer/904-weissguy.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/904-weissguy.jpg" />
                        <div class="text">
                            <span class="title">904 Weissguy Wheat Ale</span>
                            <span class="description"><b>An American wheat</b> inspired by the traditional bavarian style hefeweissen, notes of clove, orange along with a cloudy yeast character make this a summer favorite.</span>
                            <ul>
                                <li data-label="SRM">3.5</li>
                                <li data-label="ABV">4.4%</li>
                                <li data-label="IBU">19</li>
                                <li data-label="AVAILABLE">Year-Round</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Nut Sack Brown -->
            <div class="beer" data-type="year-round">
                <img class="thumb" src="img/beer/nut-sack-double.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/nut-sack-double.jpg" />
                        <div class="text">
                            <span class="title">Nut Sack Double Brown Ale</span>
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

        <!-- J'ville Lager Beer -->
            <div class="beer" data-type="year-round">
                <img class="thumb" src="img/beer/jville-lager.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/jville-lager.jpg" />
                        <div class="text">
                            <span class="title">J'ville Lager Beer</span>
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

        <!-- Doolittle Saison Ale -->
            <div class="beer" data-type="year-round">
                <img class="thumb" src="img/beer/doolittle-saison.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/doolittle-saison.jpg" />
                        <div class="text">
                            <span class="title">Doolittle Saison Ale</span>
                            <span class="description"><b>A not so traditional Saison.</b> We start with a malt bill of Pilsner, and wheat and that’s where tradition ends and we begin. We press on with an additional 11% Rye and American hops. We also raise the ABV to a tradition busting 8% to make this one a real good time! Our French Saison yeast gives the beer it’s characteristic farmhouse flavor and aroma and dries out the finish.</span>
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

<!-- End of Year-round -->

<!-- Limited -->

        <!-- Orange Cream Ale -->
            <div class="beer" data-type="limited">
                <img class="thumb" src="img/beer/orange-cream-ale.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/orange-cream-ale.jpg" />
                        <div class="text">
                            <span class="title">Orange Cream Ale</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Limited</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Double Drop -->
            <div class="beer" data-type="limited">
                <img class="thumb" src="img/beer/double-drop-ipa.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/double-drop-ipa.jpg" />
                        <div class="text">
                            <span class="title">Double Drop IPA</span>
                            <span class="description"><b>A West Coast style hop bomb.</b> We mean hop bomb in the best way possible. We start with plenty of late hop additions of Chinook, Centennial and Columbus hops, but that is just the beginning. Where the real hop magic happens is in the secondary fermentation where we apply a secret and patent pending dry hopping procedure. We’ll leave it at tons of hops added slowly to give a face melting hop aroma and flavor! Rejoice hop lovers, Double Drop is here!</span>
                            <ul>
                                <li data-label="SRM">8</li>
                                <li data-label="ABV">6.1%</li>
                                <li data-label="IBU">Trade Secret</li>
                                <li data-label="AVAILABLE">Limited</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Double IPA -->
            <div class="beer" data-type="limited">
                <img class="thumb" src="img/beer/double-ipa.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/double-ipa.jpg" />
                        <div class="text">
                            <span class="title">Double IPA</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Limited</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Imperial Simcoe -->
            <div class="beer" data-type="limited">
                <img class="thumb" src="img/beer/imperial-simcoe.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/imperial-simcoe.jpg" />
                        <div class="text">
                            <span class="title">Imperial Simcoe</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Limited</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Imperial Chupacabra -->
            <div class="beer" data-type="limited">
                <img class="thumb" src="img/beer/imperial-chupacabra.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/imperial-chupacabra.jpg" />
                        <div class="text">
                            <span class="title">Imperial Chupacabra</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Limited</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Straight Thirty -->
            <div class="beer" data-type="limited">
                <img class="thumb" src="img/beer/straight-thirty.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/straight-thirty.jpg" />
                        <div class="text">
                            <span class="title">Straight Thirty</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Limited</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

<!-- End of Limited -->

<!-- Seasonal -->

        <!-- Oktoberfest -->
            <div class="beer" data-type="seasonal">
                <img class="thumb" src="img/beer/oktoberfest.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/oktoberfest.jpg" />
                        <div class="text">
                            <span class="title">Oktoberfest</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Seasonal</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Candy's Summer Quencher -->
            <div class="beer" data-type="seasonal">
                <img class="thumb" src="img/beer/cundys-summer-quencher.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/cundys-summer-quencher.jpg" />
                        <div class="text">
                            <span class="title">Cundy's Summer Quencher</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Seasonal</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Watermelon Blonde -->
            <div class="beer" data-type="seasonal">
                <img class="thumb" src="img/beer/watermelon-blonde.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/watermelon-blonde.jpg" />
                        <div class="text">
                            <span class="title">Watermelon Blonde</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Seasonal</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- J'ville Lemon Shandy -->
            <div class="beer" data-type="seasonal">
                <img class="thumb" src="img/beer/jville-lemon-shandy.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/jville-lemon-shandy.jpg" />
                        <div class="text">
                            <span class="title">J'ville Lemon Shandy</span>
                            <span class="description"><b></b></span>
                            <ul>
                                <li data-label="SRM"></li>
                                <li data-label="ABV"></li>
                                <li data-label="IBU"></li>
                                <li data-label="AVAILABLE">Seasonal</li>
                                <li data-label="AWARDS"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Heavy Engine Quad -->
            <div class="beer" data-type="seasonal">
                <img class="thumb" src="img/beer/heavy-engine-quad.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/heavy-engine-quad.jpg" />
                        <div class="text">
                            <span class="title">Heavy Engine Quad</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Seasonal</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

        <!-- Pumpmaster -->
            <div class="beer" data-type="seasonal">
                <img class="thumb" src="img/beer/pumpmaster.jpg" />
                <div class="modal">
                    <div class="box">
                        <div class="close">×</div>
                        <img src="img/beer/pumpmaster.jpg" />
                        <div class="text">
                            <span class="title">Pumpmaster</span>
                            <span class="description"><b>This is not your run of the mill brown ale!</b> Mounds of English malts and modest hops deliver a mouthful of caramel and nutty goodness that is sure to leave you wishing there were more than just two nuts in a sack! The large malt bill and English Ale yeast also lend to the full mouthfeel as well as that satisfying flavor that lingers a while and sends you back to the glass for more Nut Sack! At 7% ABV please enjoy responsibly, the Nut Sack is not a toy.</span>
                            <ul>
                                <li data-label="SRM">22</li>
                                <li data-label="ABV">7.1%</li>
                                <li data-label="IBU">26</li>
                                <li data-label="AVAILABLE">Seasonal</li>
                                <li data-label="AWARDS">This is where awards can go.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="backdrop"></div>
                </div>
            </div>

<!-- End of Seasonal -->

        </div>
    </div>
</section>

<!-- Find Our Beer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/beer-finder.php"); ?>

<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>
