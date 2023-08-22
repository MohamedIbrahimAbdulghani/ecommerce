<?php
session_start();
$noNavBar = "";
$pageTitle = "Register";
include_once "init.php";

if($_SERVER["REQUEST_METHOD"] == "POST"):
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $full_name = $_POST["full_name"];
    $group_id = $_POST["group_id"];
    $trust_status = $_POST["trust_status"];
    $register_status = $_POST["register_status"];

    $res = insertUser($username, $email, $password, $full_name, $group_id, $trust_status, $register_status);
    if($res):
        header("Location: login.php");
    else:
        header("Location: register.php");
    endif;
endif;


if(!empty($_SESSION["user"])):
    header("Location: dashboard.php");
endif;


?>


<form class="border register-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <h4 class="text-center">Admin Register</h4>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password" autocomplete="new-password">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full_name" name="full_name" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Group_id" name="group_id" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Trust_status" name="trust_status" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Register_status" name="register_status" autocomplete="off">
  </div>
  <a href="login.php" class="link">Already I Have Account!</a>
  <button type="submit" class="btn btn-primary btn-block ">Submit</button>


</form>

<?php include_once $template . "footer.php" ?>