<?php


function lang($phrase) {
    static $lang = array(
        "Message" => " Welcome ",
        "Admin" => " Administrator ",
        "Mohamed" => " Mohamed Ibrahim "
    );
    return $lang[$phrase];
}

