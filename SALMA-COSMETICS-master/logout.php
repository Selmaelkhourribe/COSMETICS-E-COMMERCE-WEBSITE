<?php
session_start();
require 'connection.php';
$_SESSION = [];
session_unset();
session_destroy();
header('location: mainpage.php');