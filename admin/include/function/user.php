<?php


function selectUser($username, $hashed_password) {
    global $connection_database;
    $select_user = "SELECT `username`, `password` FROM `users` WHERE `username` = '$username' AND `password` = '$hashed_password' AND `group_id` = 1 ";
    $query = mysqli_query($connection_database, $select_user);
    $result = mysqli_fetch_assoc($query);
    return $result;
}

function insertUser($username, $email, $password, $full_name, $group_id, $trust_status, $register_status) {
    global $connection_database;
    $insert_user = "INSERT INTO `users` (`username`, `email`, `password`, `full_name`, `group_id`, `trust_status`, `register_status`) VALUES ('$username', '$email', '$password', '$full_name', '$group_id', '$trust_status', '$register_status') ";
    $query = mysqli_query($connection_database, $insert_user);
    $result = mysqli_affected_rows($connection_database);
    if($result):
        return true;
    else:
        return false;
    endif;
}