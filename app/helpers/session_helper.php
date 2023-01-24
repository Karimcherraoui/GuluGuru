<?php

session_start();

function isLogged() {
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}