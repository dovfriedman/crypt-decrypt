<?php

include 'functions.php';
include '/connections/idiorm_connection_personal.php';

$decrypted_records = array();

$usernames = ORM::for_table('usernames')->find_array();

foreach($usernames as $username){
	$username['decrypted_username'] = decrypt($username['username']);
	$decrypted_records[] = $username;
}

header('Content-Type: application/json');
echo json_encode($decrypted_records);