<?php

include_once('db/connect.php');

unset($_SESSION['user']);
header('location: index.php');
?>