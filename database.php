<?php
$user = 'root';
$pass = '';
$db = 'loginsystem';

$db = new mysqli ('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Great Work!!!";
