<?php



function lang($phrase) {
    static $lang = array(
        "Message" => " Welcome In Arabic ",
        "Admin" => " Arabic Administrator "
    );
    return $lang[$phrase];
}

