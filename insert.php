<?php

include 'functions.php';
include '/connections/idiorm_connection_personal.php';

$username_raw = $_POST['username'];
$username_raw = filter_var($username_raw, FILTER_SANITIZE_EMAIL);
$username     = encrypt($username_raw);

$insert = ORM::for_table('usernames')->create();

$insert->username     = $username;
// proof that it all works
$insert->username_raw = $username_raw;

$insert->save();