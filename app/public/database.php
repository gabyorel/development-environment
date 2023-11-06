<?php

$dbname = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

try {
    $pdo = new PDO('mysql:dbname=' . $dbname . ';host=mysql', $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
    
    echo $e->getMessage();
}

function getDBVersion($db) {
    $query = $db->query('SHOW VARIABLES like "version"');
    $row = $query->fetch();
    $version = $row['Value'];
    return $version;
}
?>