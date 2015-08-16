<?php $pageTitle = 'Contact Us'; ?>
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
<section class="cover" style="background-image: url('img/cover/contact-us.jpg');"></section>

<!-- Contact Us -->
<section class="contact lg-pad">
    <div class="container">
        <div class="row">
            <div class="six columns">
                <h3>Contact Us</h3>
                <p>Give us a call, or write us an email, but most importantly come find us in Jacksonville Beach for a beer (or three) and some great food to wash it all down.</p>
                <h5>Get In Touch</h5>
                <p><strong>Phone&nbsp;</strong> 904-249-BEER<br />
                    <strong>Email&nbsp;</strong> <a href="mailto:info@engine15.com">info@engine15.com</a></p>
            </div>
            <div class="six columns">
                <?php
                    $name = isset($_POST['name']) ? $_POST['name'] : '';
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $message = isset($_POST['message']) ? $_POST['message'] : '';
                    $headers = "From: " . strip_tags($email) . "\r\n";
                    $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    $to = 'info@engine15.com';
                    $subject = 'Site Contact Form';

                    $body = "From: $name\n <br> E-Mail: $email\n <br> <br>";

                    if (isset($_POST['submit'])) {
                        $response = mail($to, $subject, $body, $headers);
                        if (!response) {
                            echo '<p>Sending Failed! Try again, please?</p>';
                        } else {
                            echo '<p>Message Sent Successfully!</p>';
                        }
                    }
                ?>
                <form action="contact-us" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="text" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <input id="submit" name="submit" type="submit" value="Submit">
                </form>
            </div>
            <div class="one column offset"></div>
        </div>
    </div>
</section>

<!-- Locations -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/locations.php"); ?>

<!-- Social -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/social.php"); ?>

<!-- Find Our Beer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/beer-finder.php"); ?>

<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/footer.php"); ?>

</body>
</html>
