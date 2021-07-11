<?php
session_start();
   unset($_SESSION["name"]);
   unset($_SESSION["place"]);
   header('Refresh: 0.1; URL = homepage.php');
?>