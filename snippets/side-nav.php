<input id="nav-toggle" type="checkbox" name="nav-toggle" class="nav-toggle hidden">
<a id="body-overlay" href="#"></a>
<aside id="side-nav">
    <nav id="mobile-nav">
        <ul>
            <li <?php if($pageTitle === 'Home'){ echo 'class="active"'; } ?> ><a href="/">Home</a></li>
            <li <?php if($pageTitle === 'Our Beers'){ echo 'class="active"'; } ?> ><a href="our-beers">Our Beers</a></li>
            <li <?php if($pageTitle === 'Jax Beach Brewpub'){ echo 'class="active"'; } ?> ><a href="jacksonville-beach-brewpub">Jacksonville Beach Brewpub</a></li>
            <li <?php if($pageTitle === 'Downtown Brewery & Biergarten'){ echo 'class="active"'; } ?> style="display: none;"><a href="downtown-brewery-and-biergarten">Downtown Brewery &amp; Biergarten</a></li>
            <li <?php if($pageTitle === 'The Shop'){ echo 'class="active"'; } ?> ><a href="the-shop">The Shop</a></li>
            <li <?php if($pageTitle === 'Contact Us'){ echo 'class="active"'; } ?> ><a href="contact-us">Contact Us</a></li>
        </ul>
    </nav>
</aside>
<div id="wrapper">
