<?php

$salt = 'a6e1fa891e1193a4fce12bfca11fab5w';

function encrypt($username_raw){
    return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $salt, $username_raw, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
}

function decrypt($username) {
    return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $salt, base64_decode($username), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
}