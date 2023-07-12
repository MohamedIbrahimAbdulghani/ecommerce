<?php

include_once "init.php";


?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse ">
  <a class="navbar-brand" href="#"><?php echo lang("HOME_ADMIN") ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php echo lang("CATEGORIES") ?></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#"><?php echo lang("ITEMS") ?></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#"><?php echo lang("MEMBERS") ?></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#"><?php echo lang("STATISTICS") ?></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#"><?php echo lang("LOGS") ?></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right admin_name">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["user"]["username"] ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Edit Profile</a> 
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>


    </ul>
  </div>
</nav>


<?php include_once "footer.php"; ?>