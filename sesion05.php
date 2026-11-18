<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php
        // borrar las variables de sesión
        session_unset();

        // destruir la sesión
        session_destroy();
    ?>

</body>
</html> 