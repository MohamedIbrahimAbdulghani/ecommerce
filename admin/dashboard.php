<?php
session_start();
include_once "init.php";


if(!empty($_SESSION["user"])):
    echo " Welcome " . $_SESSION["user"]["username"];
else:
    header("Location: login.php");
endif;



?>


<?php  include_once $template . "footer.php"; ?>