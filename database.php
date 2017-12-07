<?php
$db = new mysqli(getenv("IP"), getenv("C9_USER"), "", "c9", 3306);

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

ob_start();
?>


