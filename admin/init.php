<?php

include_once "db.php";
// Route

$template = "include/template/";  // Template Director
$css = "design/css/";   // Css Director
$js = "design/js/";     // Js Director
$function = "include/function/";    // functions director
$language = "include/language/";    // languages director


// Include The Important Files
include_once $language . "english.php";
include_once $template . "header.php";

// Include The Functions Files
include_once $function . "user.php";
include_once $function . "global_functions.php";  
include_once $function . "validation.php";


// include navbar in all pages expect the one with $noNavBar variable
if(!isset($noNavBar)):
    include_once $template . "navbar.php";
endif;
