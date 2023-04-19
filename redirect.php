<?php
    session_start();
    if (!empty($_SESSION['passwordRediretta'])) {
        echo "La tua Password è: " . $_SESSION['passwordRediretta'];
    }
?>