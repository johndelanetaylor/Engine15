<footer>
    <section class="footer-nav">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <ul>
                        <li <?php if($pageTitle === 'Home'){ echo 'class="active"'; } ?> ><a href="/">Home</a></li>
                        <li <?php if($pageTitle === 'Our Beers'){ echo 'class="active"'; } ?> ><a href="our-beers.php">Our Beers</a></li>
                        <li <?php if($pageTitle === 'Jax Beach Brewpub'){ echo 'class="active"'; } ?> ><a href="jacksonville-beach-brewpub.php">Jacksonville Beach Brewpub</a></li>
                        <li <?php if($pageTitle === 'Downtown Brewery & Biergarten'){ echo 'class="active"'; } ?> ><a href="downtown-brewery-and-biergarten.php">Downtown Brewery &amp; Biergarten</a></li>
                        <li <?php if($pageTitle === 'The Shop'){ echo 'class="active"'; } ?> ><a href="the-shop.php">The Shop</a></li>
                        <li <?php if($pageTitle === 'Contact Us'){ echo 'class="active"'; } ?> ><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-end">
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <p><a href="mailto:info@engine15.com">info@engine15.com</a> | <span style="display: inline-block;">904-249-BEER</span></p>
                </div>
                <div class="four columns"><a href="/"><img src="/img/logo.svg" /></a></div>
                <div class="four columns">
                    <p>© 2015 Engine15 Brewing Company</p>
                </div>
            </div>
        </div>
    </section>
</footer>
</div>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/scripts.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68600968-1', 'auto');
  ga('send', 'pageview');

</script>
<?php if($pageTitle === 'Home' || $pageTitle = 'Jax Beach Brewpub' || $pageTitle = 'Downtown Brewery & Biergarten'){ echo '<script src="js/events.js"></script>'; } ?>
<?php if($pageTitle === 'Home') { echo '<script>var homepage = true;</script>'; } ?>
