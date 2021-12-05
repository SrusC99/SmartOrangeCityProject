
<?php
$dsn = 'mysql:dbname=city;host=localhost';
$user = 'root';
$password = '';

try {
    $link = new PDO($dsn, $user, $password);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'SUCCESS';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}





?>

