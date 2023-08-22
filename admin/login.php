<?php
session_start();

// this is variable to remove navbar from any page you want to delete it
$noNavBar = "";
$pageTitle = "Login";
include_once "init.php";


if(!empty($_SESSION["user"])):
  header("Location: dashboard.php");
endif;

if($_SERVER["REQUEST_METHOD"] == "POST"):
  foreach($_POST as $key => $value):
    $$key = trim(htmlentities(htmlspecialchars($value))); //variable of variable
  endforeach;
    $hashed_password = md5($password);
    if(empty(checkInputRequired($username))):
      $error_message[] = "Please Enter UserName";
    elseif(empty(checkInputRequired($password))):
        $error_message[] = "Please Enter Password";
    else:
          $error_message[] = "Username Or Email Not Found! ";
    endif;
    
    $res = selectUser($username, $hashed_password);
    // to start session
    if($res == true):
        $_SESSION["user"] = $res;
        $success_message = "Success";
        header("Refresh:1;url=dashboard.php");
    endif;

endif;





?>


<form class="border login-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
    <?php if(!empty($error_message)): ?>
      <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  <ul>
                    <?php foreach($error_message as $error): ?>
                      <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                  </ul>
      </div> 
    <?php endif; ?>


    <?php if(!empty($success_message)): ?>
      <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> <?php echo $success_message ?></h5>
      </div>
    <?php endif; ?>


  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" autocomplete="new-password">
  </div>
  <a href="register.php" class="link">I Don't Have Account!</a>
  <button type="submit" class="btn btn-primary btn-block ">Submit</button>


</form>




<?php include_once $template . "footer.php" ?>