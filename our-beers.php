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
                            <span class="description"><b>This amber colored rye beer</b> combines the citrus and floral character of a classic american ipa with the spicy earthy notes of a rye ale. Hoppy but not too bitter and just enough spice to give you a little.</span>
                            <ul>
                                <li data-label="SRM">12</li>
                                <li data-label="ABV">6%</li>
                                <li data-label="IBU">60</li>
                                <li data-label="AVAILABLE">Year-Round</li>
                                <!--<li data-label="AWARDS">This is where awards can go.</li>-->
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
                                <li data-label="ABV">4.5%</li>
                                <li data-label="IBU">19</li>
                                <li data-label="AVAILABLE">Year-Round</li>
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
                            <span class="description"><b>This classic American Lager</b> is unpretentious, and of course, brewed the hard way, whatever that means. Grab a J’Ville and enjoy tasty lager that is ‘Good as Gold’.</span>
                            <ul>
                                <li data-label="SRM">30</li>
                                <li data-label="ABV">5%</li>
                                <li data-label="IBU">13</li>
                                <li data-label="AVAILABLE">Year-Round</li>
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
                            <span class="description"><b>Florida in a glass!</b> We create this beer using only oranges from the great state of Florida.  A delicious and refreshing citrus treat.</span>
                            <ul>
                                <li data-label="SRM">3.5</li>
                                <li data-label="ABV">5.3%</li>
                                <li data-label="IBU">15</li>
                                <li data-label="AVAILABLE">Limited</li>
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
                            <span class="description"><b>Straight up a West Coast style IPA.</b> Mounds of “C” hops and secret dry hopping techniques yield a mouthful of hoppy goodness.</span>
                            <ul>
                                <li data-label="SRM">8</li>
                                <li data-label="ABV">6.1%</li>
                                <li data-label="IBU">CLASSIFIED</li>
                                <li data-label="AVAILABLE">Limited</li>
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
                            <span class="description"><b>A classic Double IPA</b> chock full of hops and with a sturdy backbone to carry it off. Try our seasonal barrel aged version in the fall!</span>
                            <ul>
                                <li data-label="SRM">11</li>
                                <li data-label="ABV">8%</li>
                                <li data-label="IBU">88</li>
                                <li data-label="AVAILABLE">Limited</li>
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
                            <span class="description"><b>Our Russian Imperial Stout</b> brewed just once a year for our anniversary. We whiskey barrel age this baby to perfection and unleash it on the world!</span>
                            <ul>
                                <li data-label="SRM">33</li>
                                <li data-label="ABV">9%</li>
                                <li data-label="IBU">57</li>
                                <li data-label="AVAILABLE">Limited</li>
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
                            <span class="title">Straight 30W</span>
                            <span class="description"><b>Style correct Foreign Extra Stout.</b> Nice and thick with plenty of roasted and dark malts, not overly heavy or sweet.</span>
                            <ul>
                                <li data-label="SRM">39</li>
                                <li data-label="ABV">7.4%</li>
                                <li data-label="IBU">53</li>
                                <li data-label="AVAILABLE">Limited</li>
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
                            <span class="description"><b>This seasonal lager</b> is in the Marzen style of Oktoberfest beers. A bit more malt forward than the Helles that is served at the actual Oktoberfest in Munich but very quaffable and delicious!</span>
                            <ul>
                                <li data-label="SRM">11</li>
                                <li data-label="ABV">5.2%</li>
                                <li data-label="IBU">23</li>
                                <li data-label="AVAILABLE">Seasonal</li>
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
                            <span class="description"><b>Named for the famous Cundy’s Harbour in Maine.</b> It is the quintessential summer beer, built for relaxing and taking in those beautiful water views wherever you are. Just like the place it’s named for.</span>
                            <ul>
                                <li data-label="SRM">6</li>
                                <li data-label="ABV">5%</li>
                                <li data-label="IBU">15</li>
                                <li data-label="AVAILABLE">Seasonal</li>
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
                            <span class="description"><b>We tirelessly juice fresh watermelons</b> by the truckload and then use the delicious sweet nectar to create this fruity elixir.</span>
                            <ul>
                                <li data-label="SRM">3.5</li>
                                <li data-label="ABV">5.1%</li>
                                <li data-label="IBU">17</li>
                                <li data-label="AVAILABLE">Seasonal</li>
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
                            <span class="description"><b>Start with our famous J’Ville Lager</b> and add lemon juice and a couple other secret ingredients and voila! Lemonade flavor! Except it’s beer. Whoa!</span>
                            <ul>
                                <li data-label="SRM">3</li>
                                <li data-label="ABV">4.5%</li>
                                <li data-label="IBU">13</li>
                                <li data-label="AVAILABLE">Seasonal</li>
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
                            <span class="description"><b>Belgian style Quad ale.</b> Nice and warming, slightly sweet with a delightfully happy ending. Perfect for the holiday season.</span>
                            <ul>
                                <li data-label="SRM">28</li>
                                <li data-label="ABV">10.2%</li>
                                <li data-label="IBU">29</li>
                                <li data-label="AVAILABLE">Seasonal</li>
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
                            <span class="description"><b>We brew this fall Pumpkin beer</b> and release it when it is actually fall, not in July, because that's just silly. Enjoy Pumpkin with a little spice to make things interesting!</span>
                            <ul>
                                <li data-label="SRM">16</li>
                                <li data-label="ABV">8.5%</li>
                                <li data-label="IBU">24</li>
                                <li data-label="AVAILABLE">Seasonal</li>
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
