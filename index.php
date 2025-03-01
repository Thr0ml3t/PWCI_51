<?php

require 'functions.php';
//require 'router.php';
require 'Person.php';
require 'Database.php';

$config = require 'config.php';

$dbConn = new Database($config['database']);

$idUser = $_GET['id'];

$query = 'SELECT * FROM users where id = :id';
$users = $dbConn->query($query, [
    ':id' => $idUser
]);


$people = [];
foreach ($users as $user) {
    $people[] = new Person($user->name, $user->email, $user->username, $user->password);
}

dd($people);