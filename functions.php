<?php

function generatePassword($length) {

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_+=~`[]{}|;:,.<>?';

    $all_characters = $lowercase . $uppercase . $numbers . $symbols;

    $total_characters = strlen($all_characters);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $random_index = mt_rand(0, $total_characters - 1);
        $password .= $all_characters[$random_index]; 
    }

    return $password;
};