<!DOCTYPE html>
<html>
  <body>
    <?php
      // echo date("");
      $t=date("H");
      echo $t;
      if ($t<"20") {
          echo "Have a good day!";
      }
    ?>
  </body>
</html>