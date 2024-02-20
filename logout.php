<?php 
require_once ("config.php");

if ($_SESSION) {
    unset($_SESSION['lspd_personel']);
    header("Location: login.php");
} else {
    header("Location: login.php");
}

?>