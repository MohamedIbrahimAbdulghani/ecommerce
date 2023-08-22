<?php

include_once "init.php";

$error_message = [];
$success_message = "";

function checkInputRequired($input_name) {
    if(!empty($input_name)):
        return true;
    else:
        return false;
    endif;
}

