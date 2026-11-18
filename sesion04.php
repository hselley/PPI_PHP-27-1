<?php
    session_start();
    $id = session_status();
    if($id == PHP_SESSION_DISABLED) {
        print("Sesión deshabilitada");
    } elseif($id == PHP_SESSION_NONE) {
        print("Sesión habilitada pero no hay una abierta");
    } elseif ($id == PHP_SESSION_ACTIVE) {
        print("Sesión habilitada y abierta: \n");
        print(session_id());
    } else {
        print("Estado desconocido.");
    }
?>   