<?php $pageTitle = 'Verify'; ?>
<?php
session_set_cookie_params(0);
session_start();
if(isset($_SESSION['adult'])){
    header("Location: index.php");exit();
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/snippets/header.php"); ?>
</head>

<body>

    <section class="verify">
        <div class="container">
            <div class="row">
                <div class="offset-by-two eight columns">
                    <div class="logo-lg">
                        <img src="img/engine-15-logo-large.png" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-by-one four columns">
                    <h1>Over 21</h1>
                    <h5>I need a beer or 3</h5>
                    <a href="login"><button>I am over 21</button></a>
                </div>
                <div class="two columns">
                    <h4>or</h4>
                </div>
                <div class="four columns">
                    <h1>Under 21</h1>
                    <h5>Get me out of here</h5>
                    <a href="javascript:history.back()"><button>I am under 21</button></a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
