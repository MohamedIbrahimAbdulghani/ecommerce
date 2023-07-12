<?php
session_start();

// this is variable to remove navbar from any page you want to delete it
$noNavBar = "";
include_once "init.php";



if($_SERVER["REQUEST_METHOD"] == "POST"):
    $username = $_POST["username"];
    $hashed_password = md5($_POST["password"]);
    $res = selectUser($username, $hashed_password);
    // to start session
    if($res == true):
        $_SESSION["user"] = $res;
        header("Location: dashboard.php");
    endif;
endif;


?>


<form class="border" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" autocomplete="new-password">
  </div>
  <button type="submit" class="btn btn-primary btn-block ">Submit</button>


</form>




<?php include_once $template . "footer.php" ?>