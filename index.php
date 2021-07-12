<?php 
  $nav_class = "current_page";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="styles/main.css" type="text/css" rel="stylesheet"/>
    <title>4C Cafe</title>
  </head>

  <body>

    <?php include("includes/navigation.php"); ?>

    <div class="banner">
      <div class="welcome_msg">
        <a href="#register_php" class="btn">Join us!</a>
      </div>
      <div class="login_div">
        <form action="index.php" method="post">
          <h2>Login</h2>
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password"  placeholder="Password"> 
          <button class="btn" type="submit" name="login_btn">Sign in</button>
        </form>
      </div>
    </div>

    <!-- <div class="search">
      <form>
        <input></input>
        <button>Search</button>
      </form>
    </div> -->
    
    <div class="content">
      <div class="column left">
        <p>Side-nav</p>
        <p>Number of members: ???</p>
        <?php
          echo "Current time is " . date("h:ia") . " " . date("Y-m-d") . " " . date("l");
        ?>
        <p>[Notice]</p>
      </div>
      <div class="column right">
        <p>Posts</p>
        <!-- <hr> -->
      </div>
    </div>

    <?php include("includes/footer.php"); ?>
    
  </body>
</html>