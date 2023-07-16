<?php

session_start();


/**
 *  Categories => [ Mange | Edit | Update | Add | Insert | Delete | State ]
 * Condition ? True : False
 */


if(!empty($_SESSION["user"])):
    $do = isset($_GET["do"]) ? $_GET["do"] : "Manage";

// $do = "";
// if(isset($_GET["do"])):
//     $do = $_GET["do"];
// else:
//     $do = "Manage";
// endif;




// If The Page Is Main Page
if($do == "Manage"):
    echo " Welcome You Are In Mange Category Page " . "<br>";
    echo "<a href='page.php?do=Add'>Add New Category</a>" . "<br>";
    echo "<a href='page.php?do=Insert'>Insert New Category</a>" . "<br>";
    elseif($do == "Add"):
        echo " Welcome You Are In Add Category Page " . "<br>";
        elseif($do == "Insert"):
            echo " Welcome You Are In Insert Page " . "<br>";
        else:
            echo " Error There's No Page With This Name " . "<br>";
        endif;
else:
    header("Location: login.php");
endif;


?>