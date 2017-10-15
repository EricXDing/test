<?php
  session_start();
 ?>

<!DOCTYPE html>

<html>

  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
<!-- <script src ="js.js">
random stuff
</script>
-->

<header>
  <nav>
    <div class ="main-wrapper">
        <ul>
          <li><a href="index.php">HOME</a></li>
        </ul>
    </div>
    <div class = "nav-login">
        <?php
        // Need to work on this to separate display and logic
          if (isset($_SESSION['u_id'])){
            echo '    <form action="includes/logout.inc.php" method="POST">
                  <button type="submit" name="submit">Logout</button>
                </form>';
          } else {
            echo '      <form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="Username/email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type ="submit" name="submit">Login</button>';

          }
         ?>

        </form>
        <a href="signup.php">Sign up</a>
    </div>
  </nav>

</header>
