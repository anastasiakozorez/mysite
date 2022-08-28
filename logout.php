<?php
session_start();

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    header('Location: /site/enter.php');
} else {
    header('Location: /site');
}

