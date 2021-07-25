<?php 
require 'connect.php';
session_start();
unset($_SESSION['user']);
session_destroy();

?>