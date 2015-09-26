<script>
    var pageTitle = "<?php echo $pageTitle ?>";
</script>
<nav id="main-nav">
    <div class="container">
        <div class="row">
            <div class="two columns">
                <a href="/"><img class="logo" src="img/logo.svg" onerror="this.onerror=null; this.src='logo.png'" alt="Engine 15" /></a>
            </div>
            <div class="ten columns">
                <ul>
                    <li <?php if($pageTitle === 'Our Beers'){ echo 'class="active"'; } ?> ><a href="our-beers">Our Beers</a></li>
                    <li <?php if($pageTitle === 'Jax Beach Brewpub'){ echo 'class="active"'; } ?> ><a href="jacksonville-beach-brewpub">Jacksonville Beach Brewpub</a></li>
                    <li <?php if($pageTitle === 'Downtown Brewery & Biergarten'){ echo 'class="active"'; } ?> style="display: none;"><a href="downtown-brewery-and-biergarten">Downtown Brewery &amp; Biergarten</a></li>
                    <li <?php if($pageTitle === 'The Shop'){ echo 'class="active"'; } ?> ><a href="the-shop">The Shop</a></li>
                    <li <?php if($pageTitle === 'Contact Us'){ echo 'class="active"'; } ?> ><a href="contact-us">Contact Us</a></li>
                </ul>
            </div>
            <label for="nav-toggle" class="mobile-toggle">
                <div class="top-bar"></div>
                <div class="middle-bar"></div>
                <div class="bottom-bar"></div>
            </label>
        </div>
    </div>
</nav>
