<?php
    session_start();
  ?>
  <!DOCTYPE html>
  <html>
    <body>

      <?php
      // Echo session variables that were set on previous page
      echo "<p>Favorite color is " . $_SESSION["favcolor"] . ".</p>";
      echo "<p>Favorite animal is " . $_SESSION["favanimal"] . "</p>";
      ?>

    </body>
  </html> 