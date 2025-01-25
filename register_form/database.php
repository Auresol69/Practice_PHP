<?php
$db_server = "localhost";
$db_user = "root";
$dp_pass = "";
$dp_name = "businessdb";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $dp_pass, $dp_name);
} catch (mysqli_sql_exception) {
    echo "Could not connect!<br>";
}

if ($conn) {
    // echo "You are connected!<br>";
}
