<?php

// this function to print title of any page dynamic
function getTitle() {
    global $pageTitle;
    if(isset($pageTitle)):
        echo $pageTitle;
    else:
        echo "Default";
    endif;
}