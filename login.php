<?php
session_set_cookie_params(0);
session_start();
$_SESSION['adult'] = 1;
header("Location: index");exit();
?>