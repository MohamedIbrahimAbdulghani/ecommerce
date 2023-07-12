<?php
session_start();

if(!empty($_SESSION["user"])):
    echo "Welcome " . $_SESSION["user"]["username"];
else:
    header("Location: login.php");
endif;