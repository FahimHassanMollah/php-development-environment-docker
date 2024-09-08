<?php
require __DIR__ . '/vendor/autoload.php';

echo "Hello World!";
$dsn = 'mysql:host=mariadb;dbname=mydb';
$username = 'root';
$password = '';  // Empty password

try {
    $pdo = new PDO($dsn, $username, $password);
    echo 'Connection successful';
    // Connection successful
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}



$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => 'redis',
    'port'   => 6379,
]);
$client->set('foo', 'works!');
$value = $client->get('foo');

echo $value;

?>