<?php


include_once "init.php";



function selectUser($username, $hashed_password) {
    global $connection_database;
    $select_user = "SELECT `username`, `password` FROM `users` WHERE `username` = '$username' AND `password` = '$hashed_password' AND `group_id` = 1 ";
    $query = mysqli_query($connection_database, $select_user);
    $result = mysqli_fetch_assoc($query);
    return $result;
}