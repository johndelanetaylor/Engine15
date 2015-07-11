<!DOCTYPE html>
<html lang='en'>
<?php $pageTitle = 'Contact Us'; ?>
    
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
<section class="cover" style="background-image: url('img/cover/contact-us.jpg');"></section>
    

<!-- Contact Us -->
<section class="contact lg-pad">
    <div class="container">
        <div class="row">
            <div class="one column offset"></div>
            <div class="six columns">
                <h3>Contact Us</h3>
                <p>Give us a call, or write us an email, but most importantly come find us in Jacksonville Beach for a beer (or three) and some great food to wash it all down.</p>
                <h5>Get In Touch</h5>
                <p><strong>Phone </strong>904-249-BEER<br />
                    <strong>Email </strong><a href="mailto:info@engine15.com">info@engine15.com</a></p>
            </div>
            <div class="four columns">
                <form action="contact.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="text" name="email" placeholder="Your Email" required>
                    <textarea class="u-full-width" placeholder="Your Message" required></textarea>
                    <input class="u-full-width" type="submit" value="Submit">
                </form>
            </div>
            <div class="one column offset"></div>
        </div>
    </div>
</section>    
    
<!-- Locations -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/locations.php"); ?>

<!-- Find Our Beer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/beer-finder.php"); ?>
    
<!-- Social -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/social.php"); ?>

<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>