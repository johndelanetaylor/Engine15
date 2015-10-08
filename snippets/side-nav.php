<div id="loader"></div>
<input id="nav-toggle" type="checkbox" name="nav-toggle" class="nav-toggle hidden">
<a id="body-overlay" href="#"></a>
<div id="bg"></div>
<aside id="side-nav">
    <nav id="mobile-nav">
        <ul>
            <li <?php if($pageTitle === 'Home'){ echo 'class="active"'; } ?> ><a href="/">Home</a></li>
            <li <?php if($pageTitle === 'Our Beers'){ echo 'class="active"'; } ?> ><a href="our-beers.php">Our Beers</a></li>
            <li <?php if($pageTitle === 'Jax Beach Brewpub'){ echo 'class="active"'; } ?> ><a href="jacksonville-beach-brewpub.php">Jacksonville Beach Brewpub</a></li>
            <li <?php if($pageTitle === 'Downtown Brewery & Biergarten'){ echo 'class="active"'; } ?> ><a href="downtown-brewery-and-biergarten.php">Downtown Brewery &amp; Biergarten</a></li>
            <li <?php if($pageTitle === 'The Shop'){ echo 'class="active"'; } ?> ><a href="the-shop.php">The Shop</a></li>
            <li <?php if($pageTitle === 'Contact Us'){ echo 'class="active"'; } ?> ><a href="contact-us.php">Contact Us</a></li>
        </ul>
    </nav>
</aside>
<div id="wrapper">
