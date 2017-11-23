<?php
include('db.php');
include('functions.php');

session_destroy();

header('location:index.php');

?>