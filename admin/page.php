<?php

/**
 *  Categories => [ Mange | Edit | Update | Add | Insert | Delete | State ]
 */

$do = "";
if(isset($_GET["do"])):
    $do = $_GET["do"];
else:
    $do = "Manage";
endif;


// If The Page Is Main Page
if($do == "Manage"):
    echo " Welcome You Are In Mange Category Page " . "<br>";
    echo "<a href='page.php?do=Add'>Add New Category</a>";
    elseif($do == "Add"):
        echo " Welcome You Are In Add Category Page " . "<br>";
        elseif($do == "Insert"):
            echo " Welcome You Are In Insert Page " . "<br>";
        else:
            echo " Error There's No Page With This Name " . "<br>";
        endif;