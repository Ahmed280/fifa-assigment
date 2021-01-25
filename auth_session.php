<?php
require('Dbcon.php');
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: enter.php");
        exit();
    }
?>