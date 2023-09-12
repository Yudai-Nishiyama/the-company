<?php
include "../classes/User.php";

// create object
$user = new User;

// call the method
$user->login($_POST);
/*
    $_POST['username'];
    $_POST['password'];
*/ 