<?php
  include_once 'header.php';

?>

<section class = "main-container">
  <div class ="main-wrapper">
    <h2>Home</h2>
    <?php
      if (isset($_SESSION['u_id'])){
        echo "you are logged in";
        var_dump ($_SESSION);
      }

     ?>

  </div>
</section>


  Left at 1:21:19
  <a href="https://www.youtube.com/watch?v=xb8aad4MRx8">Tutorial</a>

<?php
  include_once 'footer.php';
?>
