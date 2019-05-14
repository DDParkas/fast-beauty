<?php

require_once "connect.php";
session_start();
session_destroy();
setcookie("email","");
header('Location: ../index.php');
 ?>
