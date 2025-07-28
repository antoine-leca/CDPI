<?php
    function sessionStart() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    function sessionDestroy() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_unset();
            session_destroy();
        }
    }
?>