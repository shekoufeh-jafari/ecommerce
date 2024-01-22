<?php
require_once "../inc/confing.php";
unset($_SESSION['admin']);
session_destroy();
header('location: http://localhost/learn/ecommerce');