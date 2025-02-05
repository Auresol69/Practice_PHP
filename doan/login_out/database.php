<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'web2_project';
$conn = '';

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo 'Error connecting to database!';
}

if (!$conn) {
    echo 'Have a problem connecting to database';
}