<?php

include_once "init.php";
include_once $template . "header.php" ;
include_once "include/language/english.php";
// include_once "include/language/arabic.php";


?>


<form class="border">
    <h4 class="text-center">Admin Login</h4>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" autocomplete="new-password">
  </div>
  <button type="submit" class="btn btn-primary btn-block submit" name="submit">Submit</button>
</form>




<?php include_once $template . "footer.php" ?>